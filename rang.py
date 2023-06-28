import json,colorama,requests, re
from colorama import *
from colorama import Fore,Back,init
from multiprocessing import Pool 
from multiprocessing.dummy import Pool as ThreadPool
from requests.packages.urllib3.exceptions import InsecureRequestWarning
requests.packages.urllib3.disable_warnings(InsecureRequestWarning)
colorama.init()
# coded by mister spy
# MODIFIED BY WONG GALEK JATIM4U
RED = '\033[31m'
CYAN  = "\033[36m"
GREEN = "\033[32m"
WHITE = "\033[m"

def scan(site):
    try:
        ch = site.split('\n')[0].split('.')
        ip1 = ch[0]
        ip2 = ch[1]
        taz = str(ip1) + '.' + str(ip2) + '.'
        i = 0
        while i <= 255:
            i += 1
            o = 0
            while o <= 255:
                o += 1
                jembot  = str(taz) + str(i) + '.' + str(o)
                url = "http://ip.yqie.com/iptodomain.aspx?ip="
                response = requests.get(url + jembot)
                domains = re.findall(r'<td width="90%" class="blue t_l" style="text-align: center">(.*?)</td>', response.text)
                domains = [domain for domain in domains if re.match(r'^[\x00-\x7F]+$', domain)]
                total_domains = len(domains)
                print("From IP {} we got {} domains".format(jembot, total_domains))
                with open("Ress.txt", "a") as f:
                 for domain in domains:
                  f.write(domain + "\n")

    except (requests.exceptions.RequestException, ValueError) as e:
        print RED + "[-] " + RED + str(taz) + CYAN + str(i) + '.' + str(o) + RED + str(e)


site = open(raw_input(Fore.WHITE+'List:~# '),'r').read().replace(' ', '').splitlines()
Thread = raw_input('Thread :~# ')
pool = ThreadPool(int(Thread))
pool.map(scan, site)
pool.close()
pool.join()