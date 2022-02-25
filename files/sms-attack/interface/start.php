<?php

if (isset($_POST['seconds']) && isset($_POST['number'])) {
	$seconds = $_POST['seconds'];
	$save = fopen("_command","w");
	$veri = ("sms-attack\n$_POST[seconds]\n$_POST[number]");
	fwrite($save,$veri);
	fclose($save);
	sleep(3);
	if (file_exists("successful")){
		$success = "<p class='line3'>&nbsp;&nbsp;&ldquo;✓ Saldırı başarılı...&rdquo;&nbsp;&#93;<span class='cursor3'>_</span></p>";
		shell_exec('rm successful');
	}else{
		$success = "<p class='line3' style='color:red;'>&nbsp;&nbsp;&ldquo; ! Saldırı başarısız...&rdquo;&nbsp;&#93;<span class='cursor3'>_</span></p>";
	}
}else{
	echo "<script>javascript:history.go(-1)</script>";
	exit();
}


?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
<?php echo "<meta http-equiv='refresh' content=\"".($seconds+10).";url=index.php\"/>"; ?>
<link rel="icon" href="http://localhost:4444/phishing-tools/phishing_files/icon.png" type="image/x-icon"/>
    <title>SMS ATTACK</title>
  <style>
@import url('https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap');
* {
  margin: 0;
  padding: 0;
  font-family: 'Poppins', serif;
  text-shadow: 0px -1px 0px rgba(0,0,0,0.4);
  list-style:none;
  text-decoration: none;
}


.box{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  text-align: center;
  border-radius: 50px;
  box-shadow: 0 0 5px #7cfc00,
              0 0 25px #7cfc00,
              0 0 50px #7cfc00,
	      0 0 200px #7cfc00;
}

body {
  background-color: #272727;
  padding: 10px;
}

.fakeButtons {
  height: 10px;
  width: 10px;
  border-radius: 50%;
  border: 1px solid #000;
  position: relative;
  top: 6px;
  left: 6px;
  bottom: 2px;
  background-color: #ff3b47;
  border-color: #9d252b;
  display: inline-block;
}

.fakeMinimize {
  left: 11px;
  background-color: #ffc100;
  border-color: #9d802c;
}

.fakeZoom {
  left: 16px;
  background-color: #00d742;
  border-color: #049931;
}

.fakeMenu {
  width: 300px;
  box-sizing: border-box;
  height: 25px;
  background-color: #bbb;
  margin: 0 auto;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
}

.fakeScreen {
  background-color: #151515;
  box-sizing: border-box;
  width: 300px;
  margin: 0 auto;
  padding: 20px;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}

p {
  position: relative;
  left: 50%;
  margin-left: -8.5em;
  text-align: left;
  font-size: 1.25em;
  font-family: monospace;
  white-space: nowrap;
  overflow: hidden;
  width: 0;
}

span {
  color: #fff;
  font-weight: bold;
}

.line1 {
  color: yellow;
  -webkit-animation: type .5s 1s steps(20, end) forwards;
  -moz-animation: type .5s 1s steps(20, end) forwards;
  -o-animation: type .5s 1s steps(20, end) forwards;
  animation: type .5s 1s steps(20, end) forwards;
}

.cursor1 {
  -webkit-animation: blink 1s 2s 2 forwards;
  -moz-animation: blink 1s 2s 2 forwards;
  -o-animation: blink 1s 2s 2 forwards;
  animation: blink 1s 2s 2 forwards;
}

.line2 {
  color: yellow;
  -webkit-animation: type .5s 4.25s steps(20, end) forwards;
  -moz-animation: type .5s 4.25s steps(20, end) forwards;
  -o-animation: type .5s 4.25s steps(20, end) forwards;
  animation: type .5s 4.25s steps(20, end) forwards;
}

.cursor2 {
  -webkit-animation: blink 1s 5.25s 2 forwards;
  -moz-animation: blink 1s 5.25s 2 forwards;
  -o-animation: blink 1s 5.25s 2 forwards;
  animation: blink 1s 5.25s 2 forwards;
}

.line3 {
  color: #7cfc00;
  -webkit-animation: type .5s 7.5s steps(20, end) forwards;
  -moz-animation: type .5s 7.5s steps(20, end) forwards;
  -o-animation: type .5s 7.5s steps(20, end) forwards;
  animation: type .5s 7.5s steps(20, end) forwards;
}

.cursor3 {
  -webkit-animation: blink 1s 8.5s 2 forwards;
  -moz-animation: blink 1s 8.5s 2 forwards;
  -o-animation: blink 1s 8.5s 2 forwards;
  animation: blink 1s 8.5s 2 forwards;
}

.line4 {
  color: #fff;
  -webkit-animation: type .5s 10.75s steps(20, end) forwards;
  -moz-animation: type .5s 10.75s steps(20, end) forwards;
  -o-animation: type .5s 10.75s steps(20, end) forwards;
  animation: type .5s 10.75s steps(20, end) forwards;
}

.cursor4 {
  -webkit-animation: blink 1s 11.5s infinite;
  -moz-animation: blink 1s 8.5s infinite;
  -o-animation: blink 1s 8.5s infinite;
  animation: blink 1s 8.5s infinite;
}

@-webkit-keyframes blink {
  0% {
    opacity: 0;
  }
  40% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  90% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-moz-keyframes blink {
  0% {
    opacity: 0;
  }
  40% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  90% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-o-keyframes blink {
  0% {
    opacity: 0;
  }
  40% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  90% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@keyframes blink {
  0% {
    opacity: 0;
  }
  40% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  90% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-webkit-keyframes type {
  to {
    width: 17em;
  }
}

@-moz-keyframes type {
  to {
    width: 17em;
  }
}

@-o-keyframes type {
  to {
    width: 17em;
  }
}

@keyframes type {
  to {
    width: 17em;
  }
}
</style>
  </head>
  <body>
<div class="box">
<div class=fakeMenu>
  <div class="fakeButtons fakeClose"></div>
  <div class="fakeButtons fakeMinimize"></div>
  <div class="fakeButtons fakeZoom"></div>
</div>
<div class="fakeScreen">
  <p class="line1">&#91;&nbsp;&ldquo;Sms-attack başlatıldı..&rdquo;,<span class="cursor1">_</span></p>
  <p class="line2">&nbsp;&nbsp;&ldquo;<?php echo "Number : ".$_POST['number']; ?>..&rdquo;,<span class="cursor2">_</span></p>
<?php echo $success; ?>  
<p class="line4">><span class="cursor4">_</span></p>
</div>


</div>
 </body>
</html>
