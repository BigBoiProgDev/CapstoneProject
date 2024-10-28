<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
	
body {
  	margin: 0;
  	line-height: normal;
}


:root {
  	
  	/* fonts */
  	--m3-label-large: Roboto;
  	--font-montserrat: Montserrat;
  	
  	/* font sizes */
  	--m3-label-large-size: 14px;
  	--typography-text-medium-l-size: 16px;
  	
  	/* Colors */
  	--schemes-surface-container-low: #f7f2fa;
  	--color-paleturquoise: #a0e9d6;
  	--color-black: #000;
  	--neutral-white-fff: #fff;
  	
  	/* Paddings */
  	--padding-3xs: 10px;
  	--padding-5xl: 24px;
  	--padding-5xs: 8px;
  	
  	/* Border radiuses */
  	--br-81xl: 100px;
  	--br-11xs: 2px;
  	
  	/* Effects */
  	--m3-elevation-light-2: 0px 1px 2px rgba(0, 0, 0, 0.3), 0px 2px 6px 2px rgba(0, 0, 0, 0.15);
}
.conecteaz-te-cu-google {
  	position: relative;
  	letter-spacing: 0.1px;
  	line-height: 20px;
  	font-weight: 500;
}
.conecteaz-te-cu-google-wrapper {
  	position: absolute;
  	top: 615px;
  	left: 363px;
  	border-radius: 0px var(--br-11xs) var(--br-11xs) 0px;
  	background-color: #4285f4;
  	height: 40px;
  	display: none;
  	flex-direction: row;
  	align-items: center;
  	justify-content: center;
  	padding: var(--padding-5xs) 39px var(--padding-5xs) 41px;
  	box-sizing: border-box;
  	font-size: var(--typography-text-medium-l-size);
  	color: var(--neutral-white-fff);
}
.conecteaz-te-cu-facebook-wrapper {
  	position: absolute;
  	top: 615px;
  	left: 660px;
  	border-radius: 0px var(--br-11xs) var(--br-11xs) 0px;
  	background-color: #1877f2;
  	height: 40px;
  	display: none;
  	flex-direction: row;
  	align-items: center;
  	justify-content: center;
  	padding: var(--padding-5xs) 30px var(--padding-5xs) 31px;
  	box-sizing: border-box;
  	font-size: var(--typography-text-medium-l-size);
  	color: var(--neutral-white-fff);
}
.do-you-feel {
  	position: absolute;
  	top: 379px;
  	left: 490px;
  	font-size: 20px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	font-family: var(--font-montserrat);
  	width: 387px;
  	height: 76px;
}
.image-5 {
  	position: absolute;
  	top: 90px;
  	left: 315px;
  	width: 216px;
  	height: 210px;
}
.image-10-icon {
  	position: absolute;
  	top: 69px;
  	left: 542px;
  	width: 290px;
  	height: 274px;
  	object-fit: cover;
}
.state-layer {
  	align-self: stretch;
  	flex: 1;
  	background-color: var(--color-paleturquoise);
  	display: flex;
  	flex-direction: row;
  	align-items: center;
  	justify-content: center;
  	padding: var(--padding-3xs) var(--padding-5xl);
}
.button {
  	position: absolute;
  	top: 540px;
  	left: 555px;
  	box-shadow: var(--m3-elevation-light-2);
  	border-radius: var(--br-81xl);
  	background-color: var(--schemes-surface-container-low);
  	width: 264px;
  	height: 45px;
  	overflow: hidden;
  	display: flex;
  	flex-direction: column;
  	align-items: center;
  	justify-content: center;
}
.button1 {
  	position: absolute;
  	top: 599px;
  	left: 555px;
  	box-shadow: var(--m3-elevation-light-2);
  	border-radius: var(--br-81xl);
  	background-color: var(--schemes-surface-container-low);
  	width: 264px;
  	height: 45px;
  	overflow: hidden;
  	display: flex;
  	flex-direction: column;
  	align-items: center;
  	justify-content: center;
}
.button2 {
  	position: absolute;
  	top: 660px;
  	left: 552px;
  	box-shadow: var(--m3-elevation-light-2);
  	border-radius: var(--br-81xl);
  	background-color: var(--schemes-surface-container-low);
  	width: 264px;
  	height: 45px;
  	overflow: hidden;
  	display: flex;
  	flex-direction: column;
  	align-items: center;
  	justify-content: center;
}
.button3 {
  	position: absolute;
  	top: 481px;
  	left: 552px;
  	box-shadow: var(--m3-elevation-light-2);
  	border-radius: var(--br-81xl);
  	background-color: var(--schemes-surface-container-low);
  	width: 264px;
  	height: 45px;
  	overflow: hidden;
  	display: flex;
  	flex-direction: column;
  	align-items: center;
  	justify-content: center;
}
.survey-1 {
  	width: 100%;
  	position: relative;
  	background-color: rgba(212, 244, 228, 0.8);
  	height: 832px;
  	overflow: hidden;
  	text-align: center;
  	font-size: var(--m3-label-large-size);
  	color: var(--color-black);
  	font-family: var(--m3-label-large);
}


 </style>
</head>
<body>
<div class="Survey-1">
<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">
  	
  	
  	<link rel="stylesheet" href="./global.css" />
  	<link rel="stylesheet"  href="./index.css" />
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" />
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" />
  	
  	
  	
</head>
<body>
  	
  	<div class="survey-1">
    		<div class="conecteaz-te-cu-google-wrapper">
      			<div class="conecteaz-te-cu-google">Conectează-te cu Google</div>
    		</div>
    		<div class="conecteaz-te-cu-facebook-wrapper">
      			<div class="conecteaz-te-cu-google">Conectează-te cu Facebook</div>
    		</div>
    		<b class="do-you-feel">Do you feel in control of your spending today?</b>
    		<div class="image-5">
    		</div>
    		<img class="image-10-icon" alt="" src="images/image 2.png">
    		
    		<div class="button">
  <div class="state-layer">
    <div class="conecteaz-te-cu-google" onclick="location.href='survey2.php';">Unsure - Not much direction</div>
  </div>
</div>
<div class="button1">
  <div class="state-layer">
    <div class="conecteaz-te-cu-google" onclick="location.href='survey2.php';">Stable - No fires to put out</div>
  </div>
</div>
<div class="button2">
  <div class="state-layer">
    <div class="conecteaz-te-cu-google" onclick="location.href='survey2.php';">Confident - Ready to shine!</div>
  </div>
</div>
<div class="button3">
  <div class="state-layer">
    <div class="conecteaz-te-cu-google" onclick="location.href='survey2.php';">Stressed - I want to hide</div>
  </div>
</div>

  	</div>
  	
  	
  	
  	
</body>

          <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>

      </p>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>