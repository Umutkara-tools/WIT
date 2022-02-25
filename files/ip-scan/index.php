<!DOCTYPE html>
<html translate="no">
    <head>
<meta name="viewport" content="width=device-width">
    <title>İP SCAN</title>
<link rel="icon" href="http://localhost:4444/phishing-tools/phishing_files/icon.png" type="image/x-icon" />
<style>
@import url("https://fonts.googleapis.com/css?family=Roboto");
html {
  font-family: "Roboto", sans-serif;
  background: #1f4465;
  background: linear-gradient(to bottom, #16334e 100%, #1f4465 100%, #091723 100%);
  list-style: none;
  text-decoration: none;
}
.box {
  position: absolute;
  left: 0%;
  top: 0%;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, #16334e 100%, #1f4465 100%, #091723 100%);
  /* background:#f0f0f0; */
}
.card-box {
  position: absolute;
  left: 50%;
  top: 50%;
  width: 300px;
  height: 450px;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  display: flex;
  flex-flow: column nowrap;
  justify-content: center;
  align-items: center;
}
.card-box > div {
  flex: 1 1 200px;
}
.card-box .card-photo {
  width: 100%;
  flex-basis: 500px;
  border-radius: 10px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 10px;
background-image:url(background-skull.jpg);
  background-size: cover;
  box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.8);
  color: rgba(255, 255, 255, 1);
  z-index: 10;
  background-repeat: no-repeat;
  background-position-x: center;
  background-position-y: left;
}

.card-box .title {
  width: 75%;
  flex-basis: 90px;
  background: rgba(0, 0, 0, 0.5);
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  box-shadow: 0px 10px 50px rgba(0, 0, 0, 0.4);
  z-index: 5;
  font-size: 10px;
  letter-spacing: 5px;
  color: #7cfc00;
}

.card-box .title h1{
margin-top: 20px;
text-align: center;
}
.card-box .back-buton {
  width: 60%;
  flex-basis: 80px;
  background: #d43270;
  background: rgba(0, 0, 0, 0.5);
  box-shadow: 0px 0px 75px #7cfc00;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  z-index: 1;
}

.card-photo {
  display: flex;
  flex-flow: column wrap;
  justify-content: flex-end;
  align-items: center;
}
.card-photo > div {
  flex: 1 1 0;
}
.card-photo .output {
  flex-basis: 200px;
  display: flex;
  flex-flow: row nowrap;
  justify-content: center;
  align-items: flex-end;
  text-transform: uppercase;
  font-size: 18px;
  letter-spacing: 2px;
}

.title {
  display: flex;
  flex-flow: row nowrap;
  justify-content: center;
  align-content: center;
}

.back-buton {
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  margin-bottom: 10px;
}
.back-buton a {
  flex: 1 1 0;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
  color: rgba(124, 252, 0, 1);
  letter-spacing: 2px;
  font-size: 24px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
}
.back-buton:hover{
box-shadow:
0px 0px 150px #7cfc00,
0px 0px 150px #7cfc00,
0px 0px 150px #7cfc00,
0px 0px 150px #7cfc00;
}
.ip-scan-input {
  position: absolute;
  left: 95%;
  top: 10%;
  margin-bottom: 10px;
  width: 30px;
  height: 30px;
  transform: translateX(-50%);
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  z-index: 100;
  border-radius: 100%;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  -ms-border-radius: 100%;
  -o-border-radius: 100%;
}

input {
  outline: none;
}
input[type="search"] {
  -webkit-appearance: textfield;
  -webkit-box-sizing: content-box;
  font-family: inherit;
  font-size: 100%;
}
input::-webkit-search-decoration,
input::-webkit-search-cancel-button {
  display: none;
}

input[type="search"] {
  background: #7cfc00;
  border: none;
  padding: 9px 10px 9px 16px;
  width: 50px;
  transition: width 0.5s linear;
  -webkit-transition: width 0.5s linear;
  -moz-transition: width 0.5s linear;
  -ms-transition: width 0.5s linear;
  -o-transition: width 0.5s linear;
  color: #f0f0f0;
  border-radius: 32px;
  -webkit-border-radius: 32px;
  -moz-border-radius: 32px;
  -ms-border-radius: 32px;
  -o-border-radius: 32px;
}
input[type="search"]:focus,
#search:hover {
  width: 150px;
  border-color: #d43270;
  box-shadow: 0px 10px 50px rgba(0, 0, 0, 0.8);
}
.loading {
  transform-origin: center center;
  animation: loading 2s infinite linear;
  -webkit-animation: loading 2s infinite linear;
}

#search:-moz-placeholder {
  color: #f0f0f0;
  opacity: 0.8;
}
#search::-webkit-input-placeholder {
  color: #f0f0f0;
  opacity: 0.8;
}
.loading#search:-moz-placeholder {
  color: #f0f0f0;
  opacity: 0;
}
.loading#search::-webkit-input-placeholder {
  color: #f0f0f0;
  opacity: 0;
}

@keyframes loading {
  50% {
    background: #111;
  }
}
.output-box{
font-size: 10px;
background: rgba(0, 0, 0, 0.5);
border-radius: 10px;
margin-bottom: 35px;
margin-top: 50px;
}

.output-box li{
  list-style: none;
color: white;
padding-bottom: 10px;
}

.output-box li a{
color: #7cfc00;
text-decoration: none;
}
.country-flag{
width: 25px;
height: 25px;
margin-left: 138px;
margin-bottom: 10px;
}
</style>
    </head>
    <body>
<div class="box">
  <div class="card-box">
    <div class="card-photo">
      <div class="output">

<?php
if (isset($_GET['ip'])) {

	$url = "http://ip-api.com/json/".$_GET['ip'];
	$url_2 = "http://ip-api.com/".$_GET['ip'];
	$output = shell_exec("curl -s $url_2 > ip-scan-input-output.txt");

	//sleep(2);
	$internet_control = shell_exec("cat ip-scan-input-output.txt |grep mobile |grep -o false");
	$vpn_control = shell_exec("cat ip-scan-input-output.txt |grep proxy |grep -o false");
if (preg_match("/true/", $vpn_control)){
		$vpn = "Var";
	}else{$vpn = "Yok";}
if (preg_match("/true/", $internet_control)){
		$internet = "Mobil Veri";
	}else{$internet = "Wifi";}
	shell_exec("rm ip-scan-input-output.txt");
	$content = file_get_contents($url);
	$json = json_decode($content,true);
	$status = $json["status"];
if (preg_match("/success/", $status)){
	$successful = "Successfull";

	$country = $json["country"];

	$countryCode = $json["countryCode"];
	$region = $json["region"];
	$regionName = $json["regionName"];
	$city = $json["city"];
	$iss = "$json[isp]";
	$query = "$json[query]";
	$lon = str_replace(',',' ', $json["lon"]);
	$location = "https://www.google.com/maps/place/$json[lat],$lon";
}}?>

<?php
if ( !empty($successful) ){
echo "
<ul class='output-box'>
	<img src='https://www.countryflags.io/$countryCode/shiny/64.png' class='country-flag'>
	<li>İp Adres      : <a>$query</a></li>
	<li>İnternet      : <a>$internet </a></li>
	<li>Vpn           : <a>$vpn </a></li>
	<li>Ülke          : <a>$country </a></li>
	<li>Ülke Kodu     : <a>$countryCode </a></li>
	<li>Bölge         : <a>$regionName </a></li>
	<li>Bölge Plaka   : <a>$region </a></li>
	<li>Şehir         : <a>$city </a></li>
	<li>İss           : <a>$iss </a></li>
	<li>Konum         : <a style='font-size:13px'href=\"$location\">TIKLA</a></li>
</ul>";
	}

?>


      </div>
    </div>

    <div class="title">
<h1>[ İP SCAN ]<h1>
	  </div>
    <div class="back-buton">
<a href='javascript:history.back(-1)'>❮ GERİ ❮</a>
    </div>
    <div class="back-buton" style='border-radius: 10px;'>
<a href='/'>⌂ ANASAYFA</a>
    </div>
    <div class="ip-scan-input">
<form method="get" action="index.php">
      <input name="ip" class="loading" type="search" placeholder="İp Adresi Giriniz.." onkeydown="searchUser(event)" autocomplete="off">
</form>
    </div>
  </div>
</div>
</body>
</html>
