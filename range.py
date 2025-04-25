import os, requests

try:
	os.mkdir('Result')
except:
	pass

def scan(site):
    ur = site.rstrip()
    ch = site.split('\n')[0].split('.')
    ip1 = ch[0]
    ip2 = ch[1]
    ip3 = ch[2]
    taz = str(ip1) + '.' + str(ip2) + '.'
    i = 0
    while i <= 249:
        i += 1
        c = 0
        while c <= 249:
            c += 1
            rangingg = str(taz) + str(c) + '.' + str(i)
	    r = requests.get("http://" + rangingg, timeout=5)
	    print "Ranging ==>" + 
            open('Result/Ranged.txt', 'a').write(r.url + '\n')


nam = raw_input('List Ips  :')
with open(nam) as f:
    for site in f:
        scan(site)
