#!/bin/bash
if [[ -n $1 ]];then
	_1=$(echo "$1" |awk -F '(' '{print $1}' |xargs)
	_2=$(echo "$1" |awk -F '(' '{print $2}' |awk -F ')' '{print $1}' |xargs)
	_3=$(echo "$1" |awk -F '(' '{print $2}' |awk -F ')' '{print $2}' |xargs)
	_4=$(echo "$1" |awk -F '(' '{print $3}' |awk -F ')' '{print $1}' |xargs)
	_5=$(echo "$1" |awk -F '(' '{print $3}' |awk -F ')' '{print $2}' |xargs)
else
	exit
fi
if [[ $2 == --text ]];then
	echo -e "\n $_1\n $_2\n $_3\n $_4\n $_5"
	exit
else
	echo -e "$_1<br>$_2<br>$_3<br>$_4<br>$_5"
	exit
fi
