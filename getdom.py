import requests,json,sys,os

#izi pizi coding bro ;V
# Gretz : Sunda Cyber Army :p
star = """
__________________________________________
Get Subdomain Website :p
__________________________________________

"""
if __name__=="__main__":
  if len(sys.argv) == 2:
    ok = sys.argv[0]
    mia = sys.argv[1]
    os.system("clear")
    print star
    url = "https://api.indoxploit.or.id/domain/"+mia
    reqq = requests.get(url)
    yy = reqq.json()
    ru = yy['data']['subdomains']
    try:
       for element in ru:
          print " Subdo -> "+element
    except (RuntimeError, TypeError, NameError):
       print "Ga Ada Subdonya :p"
  
  else: 
       print "Usage : python2 ce.py anything.com"
       sys.exit()
