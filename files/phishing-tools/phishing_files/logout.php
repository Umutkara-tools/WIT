<?php
$save = fopen("_command","w");
$commands = ("exit");
fwrite($save,$commands);
fclose($save);

?>
<!DOCTYPE html>
<html>
    <head>
<meta name="viewport" content="width=device-width">
    <title>LOGOUT</title>
<link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/534/534621.svg" type="image/x-icon" />
<style>
@import url("https://fonts.googleapis.com/css?family=Roboto");
html {
  font-family: "Roboto", sans-serif;
  background: #1f4465;
  background: linear-gradient(to bottom, #16334e 100%, #1f4465 100%, #091723 100%);
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
background-image:url(https://image.flaticon.com/icons/png/512/190/190411.png);
/*
 FAİL İCON
background-image:url(https://image.flaticon.com/icons/png/512/929/929416.png);
*/
  background-size: 250px;
  box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.8);
  color: rgba(255, 255, 255, 1);
  z-index: 10;
  background-repeat: no-repeat;
  background-position-x: center;
  background-position-y: 10px;;
}
.card-photo .title {
  flex-basis: 200px;
  display: flex;
  flex-flow: row nowrap;
  justify-content: center;
  align-items: flex-end;
  text-transform: uppercase;
  font-size: 18px;
  color: rgba(124, 252, 0, 0.8);
  color: rgba(228, 61, 47, 1);
  letter-spacing: 2px;
  margin-top: 25px;

}
.card-box .home-buton {
  width: 60%;
  flex-basis: 80px;
  background: #d43270;
  background: rgba(0, 0, 0, 0.5);
  box-shadow: 0px 0px 75px #7cfc00;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  z-index: 1;
  box-shadow:
  0px 0px 150px #7cfc00,
  0px 0px 150px #7cfc00,
  0px 0px 150px #7cfc00,
  0px 0px 150px #7cfc00;

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

.card-photo .success-info {
  display: flex;
  flex-flow: row nowrap;
  justify-content: center;
  align-items: center;
  font-weight: 100;
  font-size: 14px;
  color: rgb(191, 198, 204);
  padding-left: 5px;
  padding-right: 5px;
  text-align: center;
}
.profile__info {
  display: flex;
  flex-flow: row nowrap;
  justify-content: center;
  align-content: center;
}
.profile__info > span {
  flex: 1 1 0;
  height: 100%;
}

.home-buton {
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;

}
.home-buton a {
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
.home-buton:hover{
box-shadow:
0px 0px 150px #7cfc00,
0px 0px 150px #7cfc00,
0px 0px 150px #7cfc00,
0px 0px 150px #7cfc00;
}
</style>
    </head>
    <body>
<div class="box">
  <div class="card-box">
    <div class="card-photo">
      <div class="title">
❌ Çıkış Yapıldı ❌
      </div>
      <div class="success-info">
@umutkaratools
      </div>
    </div>
    <div class="home-buton"><a>WİT</a>
    </div>
  </div>
</div>

</body>
</html>
