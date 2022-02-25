<!DOCTYPE html>
<html translate="no">
  <head>
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
<link rel="icon" href="http://localhost:4444/phishing-tools/phishing_files/icon.png" type="image/x-icon"/>
    <title>SMS ATTACK</title>
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
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
	      0 0 200px #03e9f4;
}
.box h1{
  color: white;
  font-size: 30px;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type = "number"],.box input[type = "tel"]{
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
.box input[type = "number"]:focus,.box input[type = "tel"]:focus{
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
.home li{
  padding-top: 12px;
  padding-bottom: 15px;
  margin-right: 100%;
}
.home-btn a{
  text-align: center;
  background: black;
  color: white;
  font-size: 10px;
  border-radius: 10px;
  padding: 5px 10px;
  box-shadow: 0 0 5px #7cfc00,
              0 0 15px #7cfc00,
              0 0 20px #7cfc00,
	      0 0 30px #7cfc00;
}
.home-btn a:hover{
  padding: 5px;
  border-radius: 10px;
  background: black;
  color: white;
  box-shadow: 0 0 5px cyan,
              0 0 15px cyan,
              0 0 20px cyan,
	      0 0 30px cyan;
}
</style>
  </head>
  <body>
<div class="box">
<ul class="home">
   <li class="home-btn"><a href="/">ANASAYFA</a></li>
</ul>
  <h1 class="green-neon">SMS ATTACK</h1>
<form name="attack-form" method="post" action="start.php" onsubmit="return validateForm()">
  <input type="tel" name="number" autocomplete="off" placeholder="+905555555555" minlength = "10">
  <input type="number" name="seconds" autocomplete="off" placeholder="10-100 Arası saniye giriniz.." min= "10" max="100" maxlength="3">
  <input type="submit" name="" value="START">
</form>
</div>
<script type="text/javascript">
function validateForm() {
	var number=document.forms['attack-form'][0].value;
	var seconds=document.forms['attack-form'][1].value;
	var sonuc = number.indexOf("+");
	if (number==null ||number=="")
       	{
		alert("Numara Giriniz !!!");
		return false;
	}
	if (sonuc == -1){
		alert("Hatalı Numara Girdiniz !!!");
		return false;
	
	}
	if (seconds==null ||seconds=="")
       	{
		alert("Saniye Giriniz !!!");
		return false;
	}
}
</script>
 </body>
</html>
