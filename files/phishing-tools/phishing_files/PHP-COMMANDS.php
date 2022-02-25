<?php
echo "[ HTTP HOST ]       : $_SERVER[HTTP_HOST]<br>";  
echo "[ SCRİPT FİLENAME ] : $_SERVER[SCRIPT_FILENAME]<br>";
echo "[ SCRİPT NAME ]     : $_SERVER[SCRIPT_NAME]<br>";
echo "[ REQUEST URİ ]     : $_SERVER[REQUEST_URI]<br>";
echo "[ SERVER PORT ]     : $_SERVER[SERVER_PORT]<br>";
echo "[ USER ]            : $_ENV[USER]<br>";
echo "[ PHP SELF ]        : $_SERVER[PHP_SELF]<br>";

exit();
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

?>
