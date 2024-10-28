<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Survey 13</title>

    <style>
    
body {
  	margin: 0;
  	line-height: normal;
}


:root {
  	
  	/* fonts */
  	--font-roboto: Roboto;
  	--font-montserrat: Montserrat;
  	
  	/* font sizes */
  	--font-size-base: 16px;
  	
  	/* Colors */
  	--neutral-white-fff: #fff;
  	--material-theme-ref-primary-primary60: #1ca380;
  	--color-black: #000;
  	
  	/* Paddings */
  	--padding-smi: 13px;
  	--padding-6xs: 7px;
  	
  	/* Border radiuses */
  	--br-5xs: 8px;
  	
}
.where-do-you {
  	position: absolute;
  	top: 451px;
  	left: 404px;
  	font-size: 24px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	width: 585px;
  	height: 23px;
}
.image-5 {
  	position: absolute;
  	top: 90px;
  	left: 315px;
  	width: 216px;
  	height: 210px;
}
.makecents-creates-a {
  	position: absolute;
  	top: 509px;
  	left: 403px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	white-space: pre-wrap;
  	display: inline-block;
  	width: 612px;
  	height: 30px;
}
.image-removebg-preview-6-1 {
  	position: absolute;
  	top: 181px;
  	left: 480px;
  	width: 414px;
  	height: 235px;
  	object-fit: cover;
}
.lets-have-some {
  	width: 160px;
  	position: relative;
  	letter-spacing: 0.5px;
  	line-height: 24px;
  	display: inline-block;
  	height: 21px;
  	flex-shrink: 0;
}
.button-navigation-conturi {
  	position: absolute;
  	top: 731px;
  	left: calc(50% + 385px);
  	border-radius: var(--br-5xs);
  	background-color: var(--material-theme-ref-primary-primary60);
  	width: 200px;
  	height: 43px;
  	display: flex;
  	flex-direction: row;
  	align-items: center;
  	justify-content: center;
  	padding: var(--padding-smi) var(--padding-6xs) var(--padding-smi) 8px;
  	box-sizing: border-box;
  	cursor: pointer;
  	text-align: left;
  	color: var(--neutral-white-fff);
  	font-family: var(--font-roboto);
}
.back {
  	position: relative;
  	letter-spacing: 0.5px;
  	line-height: 24px;
}
.button-navigation-conturi1 {
  	position: absolute;
  	top: 731px;
  	left: calc(50% + 232px);
  	border-radius: var(--br-5xs);
  	background-color: #5ee4c2;
  	width: 135px;
  	height: 43px;
  	display: flex;
  	flex-direction: row;
  	align-items: center;
  	justify-content: center;
  	padding: var(--padding-smi) var(--padding-6xs) var(--padding-smi) 0px;
  	box-sizing: border-box;
  	cursor: pointer;
  	text-align: left;
  	color: #086100;
  	font-family: var(--font-roboto);
}
.survey-13 {
  	width: 100%;
  	position: relative;
  	background-color: var(--neutral-white-fff);
  	height: 832px;
  	overflow: hidden;
  	text-align: center;
  	font-size: var(--font-size-base);
  	color: var(--color-black);
  	font-family: var(--font-montserrat);
}
    </style>
  	
</head>
<body>
  	
  	<div class="survey-13">
    		<b class="where-do-you">Where do you want your money to take you?</b>
    		<div class="image-5">
    		</div>
    		<div class="makecents-creates-a">MakeCents creates  a plan to fund the life you want.</div>
    		<img class="image-removebg-preview-6-1" alt="" src="images/image-removebg-preview (6) 1.png">
    		
    		<div class="button-navigation-conturi" id="buttonNavigationConturiContainer">
      			<div class="lets-have-some">Let’s have some fun!</div>
    		</div>
    		<div class="button-navigation-conturi1" id="buttonNavigationConturiContainer1">
      			<div class="back">Back</div>
    		</div>
  	</div>	
  	<script>
   // Redirect when clicking on Continue
   document.getElementById("buttonNavigationConturiContainer").addEventListener("click", function() {
      window.location.href = "survey14.php"; // Redirect to the next page
   });

   // Redirect when clicking on Back
   document.getElementById("buttonNavigationConturiContainer1").addEventListener("click", function() {
      window.location.href = "survey12.php"; // Redirect to the previous page
   });
</script>
</body>
</html>