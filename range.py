import os

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
            print "Ranging ==>" + str(taz) + str(c) + '.' + str(i)
            open('Result/Ranged.txt', 'a').write(str(taz) + str(c) + '.' + str(i) + '\n')


nam = raw_input('List Ips  :')
with open(nam) as f:
    for site in f:
        scan(site)
