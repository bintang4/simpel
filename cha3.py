# -*- coding: utf-8 -*-
import requests,socket
requests.packages.urllib3.disable_warnings()
from threading import *
from threading import Thread
from ConfigParser import ConfigParser
from Queue import Queue

class Worker(Thread):
    def __init__(self, tasks):
        Thread.__init__(self)
        self.tasks = tasks
        self.daemon = True
        self.start()

    def run(self):
        while True:
            func, args, kargs = self.tasks.get()
            try: func(*args, **kargs)
            except Exception, e: print e
            self.tasks.task_done()

class ThreadPool:
    def __init__(self, num_threads):
        self.tasks = Queue(num_threads)
        for _ in range(num_threads): Worker(self.tasks)

    def add_task(self, func, *args, **kargs):
        self.tasks.put((func, args, kargs))

    def wait_completion(self):
        self.tasks.join()

def main(url):
 if "://" in url:
      url = url
 else:
	  url = "http://"+url
 if url.endswith('/'):
	  url = url[:-1]
 try:
		headers = {'User-Agent':'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:73.0) Gecko/20100101 Firefox/73.0'}
		#gols3 = 'Chitoge kirisaki'
		get_soe = requests.get(url+"/c.php",headers=headers, timeout=3, verify=False, allow_redirects=False).text
		if "azzatssins" in get_soe:
		   print '[OK!]' + url+'/c.php'
		   se = open('content.txt', 'a')
		   se.write(url+'/c.php\n')
		   se.close()
		else:
		 get_soe = requests.get(url+"/alfa.php",headers=headers, timeout=3, verify=False, allow_redirects=False).text
   		 if "~ ALFA TEaM Shell" in get_soe:
		   print '[OK!]' + url+'/wso.php'
		   se = open('content.txt', 'a')
		   se.write(url+'/alfa.php\n')
		   se.close()
		 else:
		  get_soe = requests.get(url+"/wso.php",headers=headers, timeout=3, verify=False, allow_redirects=False).text
		  if "- WSO 2.5" in get_soe:
		   print '[OK!]' + url+'/wso.php'
		   se = open('content.txt', 'a')
		   se.write(url+'/wso.php\n')
		   se.close()
		  else:
		   get_soe = requests.get(url+"/Chitoge.php?Chitoge",headers=headers, timeout=3, verify=False, allow_redirects=False).text
		   if "Chitoge kirisaki" in get_soe:
		     print '[OK!]' + url+'/Chitoge.php?Chitoge'
		     se = open('content.txt', 'a')
		     se.write(url+'/Chitoge.php?Chitoge\n')
		     se.close()
		   else:
		    get_soe = requests.get(url+"/marijuana.php",headers=headers, timeout=3, verify=False, allow_redirects=False).text
		    if "<title>MARIJUANA</title>" in get_soe or "0x5a455553.github.io/MARIJUANA/icon.png" in get_soe:
		     print '[OK!]' + url+'/marijuana.php'
		     se = open('content.txt', 'a')
		     se.write(url+'/marijuana.php\n')
		     se.close()
		    else:
		       
		       get_soe = requests.get(url+"/shell.php",headers=headers, timeout=3, verify=False, allow_redirects=False).text
		       if "Mini Shell" in get_s or "Mini Uploader" in get_soe:
		        print '[OK!]' + url+'/shell.php'
		        se = open('content.txt', 'a') 
		        se.write(url+'/shell.php\n') 
		        se.close()
		       else:
		          get_soe = requests.get(url+"/webshell.php",headers=headers, timeout=3, verify=False, allow_redirects=False).text
		          if 'Path: /' in get_soe in 'path: /' in get_soe:
		           print '[OK!]' + url+'/webshell.php'
		           se = open('content.txt', 'a') 
		           se.write(url+'/webshell.php\n') 
		           se.close()
		          else:		              
		              get_soe = requests.get(url+"/rootshell.php",headers=headers, timeout=3, verify=False, allow_redirects=False).text
		              if 'ROOT SHELL EXECUTOR' in get_soe:
		                print '[OK!]' + url+'/rootshell.php'
		                se = open('content.txt', 'a')
		                se.write(url+'/rootshell.php\n')
		                se.close()
		              else:
		                  print '\033[91m[BAD]' + url + '\033[00m'
 except:
		pass

print("""
        Dorking shell

""")
readsplit = open(raw_input("Ips List .txt: "), 'r').read().splitlines()
numthread = raw_input("Thread: ")
pool = ThreadPool(int(numthread))
for url in readsplit:
 
 pool.add_task(main, url)


pool.wait_completion()
