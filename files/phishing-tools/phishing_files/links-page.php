<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="http://localhost:4444/phishing-tools/phishing_files/icon.png" type="image/x-icon" />
    <title>LİNKS PAGE</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap');
* {
  margin: 0;
  padding: 0;
}

body {
  background: #000;
  font-family: 'Kiwi Maru', serif;
  box-sizing: border-box;
}
a {
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
a:hover {
  padding-bottom: 20px;
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
	      0 0 100px #03e9f4;
  transition: .5s;
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
    -webkit-box-reflect: below 1px linear-gradient(transparent, #0005);
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

.back{
  font-family: 'Kiwi Maru', serif;
  display: inline-block;
  text-align: center;
  background: black;
  color: white;
  border-radius: 10px;
  padding: 5px;
  left: 42%;
  box-shadow: 0 0 5px yellow,
              0 0 15px yellow,
              0 0 20px yellow,
	      0 0 30px yellow;
}
.back:hover{
  padding: 5px;
  border-radius: 10px;
  background: black;
  color: white;
  box-shadow: 0 0 5px cyan,
              0 0 15px cyan,
              0 0 20px cyan,
	      0 0 30px cyan;
}
.home{
  font-family: 'Kiwi Maru', serif;
  display: inline-block;
  text-align: center;
  background: black;
  color: white;
  border-radius: 10px;
  padding: 5px;
  left: 36%;
  box-shadow: 0 0 5px yellow,
              0 0 15px yellow,
              0 0 20px yellow,
	      0 0 30px yellow;
}
.home:hover{
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

<body >
<div class="box">
<h1 class="green-neon">LİNKLER</h1>
<?php

$sonuc = file_exists('links.txt');
echo $sonuc; 
if ($sonuc){
        $output = shell_exec('cat links.txt');
	echo "$output";
}else{
	echo '<h2>Link dosyası bulunamadı.<br>Sayfayı yenile veya yeniden link oluştur.</br></h2>';
}
?>
<h3><a class="back" href="javascript:history.go(-2)">GERİ</a></h3>
<h3><a class="home" href="/index.php">ANASAYFA</a></h3>
</div>
</body>
</html>
