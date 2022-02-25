#!/bin/bash

# LOLCAT PAKET KONTROLÜ #

if [[ ! -a $PREFIX/bin/lolcat ]];then
	echo
	echo
	echo
	printf "\e[32m
	╔═══════════════════════╗
	║ ✓ \e[97mLOLCAT KURULUYOR..  \e[32m║
	╚═══════════════════════╝\e[97m"
	sleep 0.5
	echo
	echo
	echo
	pkg install ruby -y
	gem install lolcat
fi

clear
echo
printf "
\t╔════════════════════════════════════════════╗
\t║                                            ║
\t║  ███████ ███████ ████████ ██    ██ ██████  ║
\t║  ██      ██         ██    ██    ██ ██   █  ║
\t║  ███████ █████      ██    ██    ██ ██████  ║
\t║       ██ ██         ██    ██    ██ ██      ║
\t║  ███████ ███████    ██    ████████ ██      ║
\t║                                            ║
\t╚════════════════════════════════════════════╝
\n\n" |lolcat -a -d 1
sleep 0.5
echo
echo
echo

# PYTHON PAKET KONTROLÜ #

if [[ ! -a $PREFIX/bin/python ]];then
	echo
	echo
	echo
	printf "\e[32m
	╔═══════════════════════╗
	║ ✓ \e[97mPYTHON KURULUYOR..  \e[32m║
	╚═══════════════════════╝\e[97m"
	sleep 0.5
	echo
	echo
	echo
	pkg install python -y
	pkg install python2 -y
fi

# SMS-ATTACK PYTHON MODÜL KONTROLÜ #

if [[ -a sms-attack/requirements.txt ]];then
	echo
	echo
	echo
	printf "\e[32m
	╔═══════════════════════════════════════════╗
	║ ✓ \e[97mSMS ATTACK PYTHON MODÜLLERİ KURULUYOR.. \e[32m║
	╚═══════════════════════════════════════════╝\e[97m"
	sleep 0.5
	echo
	echo
	echo
	pip install -r sms-attack/requirements.txt
fi

# İNSTAGRAM-LOGİN PYTHON MODÜL KONTROLÜ #

if [[ -a phishing-tools/instagram/requirements.txt ]];then
	echo
	echo
	echo
	printf "\e[32m
	╔════════════════════════════════════════════════╗
	║ ✓ \e[97mİNSTAGRAM LOGİN PYTHON MODÜLLERİ KURULUYOR.. \e[32m║
	╚════════════════════════════════════════════════╝\e[97m"
	sleep 0.5
	echo
	echo
	echo
	pip install -r phishing-tools/instagram/requirements.txt
fi

# PHP PAKET KONTROLÜ #

if [[ ! -a $PREFIX/bin/php ]];then
	echo
	echo
	echo
	printf "\e[32m
	╔═══════════════════╗
	║ ✓ \e[97mPHP KURULUYOR.. \e[32m║
	╚═══════════════════╝\e[97m"
	sleep 0.5
	echo
	echo
	echo
	pkg install php -y
fi

# CURL PAKET KONTROLÜ #

if [[ ! -a $PREFIX/bin/curl ]];then
	echo
	echo
	echo
	printf "\e[32m
	╔════════════════════╗
	║ ✓ \e[97mCURL KURULUYOR.. \e[32m║
	╚════════════════════╝\e[97m"
	sleep 0.5
	echo
	echo
	echo
	pkg install curl -y
fi

# TERMUX-APİ CONTROL

if [[ ! -a $PREFIX/bin/termux-notification ]];then
	echo
	echo
	echo
	printf "\e[32m
	╔═════════════════════════════════╗
	║ ✓ \e[97mTERMUX APİ PAKETİ KURULUYOR.. \e[32m║
	╚═════════════════════════════════╝\e[97m"
	sleep 0.5
	echo
	echo
	echo
	pkg install termux-api -y
fi

# TREE PAKET CONTROL

if [[ ! -a $PREFIX/bin/tree ]];then
	echo
	echo
	echo
	printf "\e[32m
	╔═══════════════════════════╗
	║ ✓ \e[97mTREE PAKETİ KURULUYOR.. \e[32m║
	╚═══════════════════════════╝\e[97m"
	sleep 0.5
	echo
	echo
	echo
	pkg install tree -y
fi


# NGROK KONTROLÜ #

if [[ ! -a $PREFIX/bin/ngrok ]];then
	echo
	echo
	echo
	printf "\e[32m
	╔═════════════════════╗
	║ ✓ \e[97mNGROK KURULUYOR.. \e[32m║
	╚═════════════════════╝\e[97m"
	sleep 0.5
	echo
	echo
	echo
	git clone https://github.com/umutkara-tools/ngrok-kurulum
	cd ngrok-kurulum
	bash ngrok-kurulum.sh
	cd ..
	rm -rf ngrok-kurulum
fi

echo
echo
echo
echo
printf "\e[32m
\t\t╔════════════════════════╗
\t\t║                        ║
\t\t║   \e[97mＫＵＲＵＬＵＭ\e[32m       ║
\t\t║                        ║
\t\t║   \e[97mＴＡＭＡＭＬＡＮＤＩ\e[32m ║
\t\t║                        ║
\t\t╚════════════════════════╝
\n\n\e[97m"
sleep 2

# WİT KISAYOL OLUŞTURMA

echo -e '#!/bin/bash\ncd $PREFIX/lib/WIT/\nbash wit.sh $1 $2' > $PREFIX/bin/wit
chmod 777 $PREFIX/bin/wit
echo
echo
echo
printf "\e[32m
\t\t╔══════════════════════════╗
\t\t║ \e[97mÇALIŞTIRMAK İÇİN \e[32mwit \e[97mYAZ \e[32m║
\t\t╚══════════════════════════╝\e[97m"
echo
echo
echo
