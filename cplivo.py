import plivo
import json
import datetime
import sys
import random
import time

def check_data(authid,token):
    print("[+] Start Checking Data ....")
    auth_id = authid
    token = token
    try:
        client = plivo.RestClient(auth_id,token)
        result = client.account.get()
        phone = client.numbers.list()
        try:
            phonenumber = phone[0]['number']
        except:
            phonenumber = 'Null'
        if result:
            result['nomerhp'] = phonenumber
            return result
        else:
            return 'Null'
    except:
        return 'Null'

def banner():
    clear = "\x1b[0m"
    colors = [36, 32, 34, 35, 31, 37]
    ban = '''
 _______ _______  _____   _____  _____ ______  _______  _____  ______  _______
 |______    |    |     | |_____]   |   |     \ |       |     | |     \ |______
 ______|    |    |_____| |       __|__ |_____/ |_____  |_____| |_____/ |______
                                Plivo Api Checker
        '''

    for N, line in enumerate(ban.split("\n")):
        sys.stdout.write("\x1b[1;%dm%s%s\n" % (random.choice(colors), line, clear))
        time.sleep(0.05)
        pass
  
def save(text, names):
	s = open(names, "a")
	s.write(text+"\n")
	return s

if __name__ == '__main__':
    date = datetime.datetime.now().strftime('%Y-%m-%d')
    banner()
    auth = input(" Your Auth id : ")
    token = input(" Your Auth Token : ")
    data = check_data(auth,token)
    #print(data)
    raw = auth + '|' + token
    if data == "Null":
        print("[-] API INCORECT !")
    else:
        print("[+] Start Succesfully Fetch Data ....")
        name = data['name']
        city = data['city']
        phone = data['nomerhp']
        try:
         amountr = data['auto_recharge_amount']
         autor = data['auto_recharge']
        except:
         amountr = ""
         autor = ""
        balance = data['cash_credits']
        filename = 'Result_Plivo {fdate}.txt'
        filename = filename.format(fdate = date)
        res = '''
{fraw}
[!] Name : {fname}
[!] City : {fcity}
[!] Number : {fnumber}
[!] Auto Recharge  : {fautor}
[!] Recharge Amount : {famountr}
[!] Balance : {fbalance}
    '''
        res = res.format(fname = name,fcity = city,fnumber = str(phone),fautor = str(autor),famountr = str(amountr),fbalance = str(balance),fraw=raw)
        print(res)
        save(res+'\n',filename)
        print('Save to File {ffilename}'.format(ffilename = filename))
        
    