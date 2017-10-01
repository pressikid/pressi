# cap the screen shot
import pyscreenshot as Img
import getpass
from random import randint
import time
def main():
	while True:
	     img =Img.grab()
	     path="C:/Users/"+str(getpass.getuser())+"/Desktop/"
	     savefile=path+str(randint(1,100))+".jpg"
	     img.save(savefile)
	     time.sleep(5)


if __name__ == "__main__":
	main()