<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Survey 2</title>
    <style>
        
body {
  	margin: 0;
  	line-height: normal;
}


:root {
  	
  	/* fonts */
  	--typography-text-medium-l: Roboto;
  	--font-montserrat: Montserrat;
  	
  	/* font sizes */
  	--font-size-xl: 20px;
  	--typography-text-medium-l-size: 16px;
  	
  	/* Colors */
  	--neutral-white-fff: #fff;
  	--material-theme-ref-primary-primary60: #1ca380;
  	--color-black: #000;
  	
  	/* Gaps */
  	--gap-3xs: 10px;
  	
  	/* Paddings */
  	--padding-smi: 13px;
  	--padding-6xs: 7px;
  	--padding-5xs: 8px;
  	
  	/* Border radiuses */
  	--br-5xs: 8px;
  	--br-11xs: 2px;
  	
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
}
.we-can-help {
  	position: absolute;
  	top: 416px;
  	left: 492px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	font-family: var(--font-montserrat);
  	color: var(--color-black);
  	width: 387px;
  	height: 23px;
}
.image-5 {
  	position: absolute;
  	top: 90px;
  	left: 315px;
  	width: 216px;
  	height: 210px;
}
.hop-in-well {
  	font-weight: 500;
  	white-space: pre-wrap;
}
.based-on-your {
  	font-weight: 500;
}
.hop-in-well-container {
  	position: absolute;
  	top: 481px;
  	left: 423px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	color: var(--color-black);
  	display: inline-block;
  	width: 550px;
  	height: 49px;
  	font-family: var(--font-montserrat);
}
.image-removebg-preview-1-icon {
  	position: absolute;
  	top: 177px;
  	left: 492px;
  	width: 383px;
  	height: 219px;
  	object-fit: cover;
}
.continue {
  	position: relative;
  	letter-spacing: 0.5px;
  	line-height: 24px;
}
.icon-arrow {
  	width: 16px;
  	position: relative;
  	height: 16px;
  	overflow: hidden;
  	flex-shrink: 0;
}
.button-navigation-conturi {
  	position: absolute;
  	top: 725px;
  	left: calc(50% + 405px);
  	border-radius: var(--br-5xs);
  	background-color: var(--material-theme-ref-primary-primary60);
  	width: 135px;
  	height: 43px;
  	display: flex;
  	flex-direction: row;
  	align-items: center;
  	justify-content: center;
  	padding: var(--padding-smi) var(--padding-6xs) var(--padding-smi) 25.8px;
  	box-sizing: border-box;
  	gap: var(--gap-3xs);
  	cursor: pointer;
  	text-align: left;
}
.vector-icon {
  	width: 8.4px;
  	position: relative;
  	height: 14.2px;
  	object-fit: contain;
}
.button-navigation-conturi1 {
  	position: absolute;
  	top: 725px;
  	left: calc(50% + 253px);
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
  	gap: var(--gap-3xs);
  	cursor: pointer;
  	text-align: left;
  	color: #086100;
}
.survey-2 {
  	width: 100%;
  	position: relative;
  	background-color: var(--neutral-white-fff);
  	height: 832px;
  	overflow: hidden;
  	text-align: center;
  	font-size: var(--font-size-xl);
  	color: var(--neutral-white-fff);
  	font-family: var(--typography-text-medium-l);
}

</style>
</head>
<body>
  	<div class="survey-2">
        
    		<div class="conecteaz-te-cu-google-wrapper">
      			<div class="conecteaz-te-cu-google">Conectează-te cu Google</div>
    		</div>
    		<div class="conecteaz-te-cu-facebook-wrapper">
      			<div class="conecteaz-te-cu-google">Conectează-te cu Facebook</div>
    		</div>
    		<b class="we-can-help">We can help!</b>
    		<div class="image-5">
    		</div>
    		<div class="hop-in-well-container">
      			<span class="hop-in-well">Hop in! We’ll  start  making a </span>
      			<b>plan for your money</b>
      			<span class="based-on-your"> based on your priorities.</span>
    		</div>
    		<img class="image 3" alt="" src="images/image 3.png">
    		
    		<div class="button-navigation-conturi" id="buttonNavigationConturiContainer">
      			<div class="continue">Continue</div>
    		</div>
    		
    		<div class="button-navigation-conturi1" id="buttonNavigationConturiContainer1">
      			<div class="continue">Back</div>
    		</div>
  	</div>
  	
  	<script>
    		var buttonNavigationConturiContainer = document.getElementById("buttonNavigationConturiContainer");
    		if(buttonNavigationConturiContainer) {
      			buttonNavigationConturiContainer.addEventListener("click", function (e) {
        				window.location.href = "survey3.php"; // Redirect to the next page
      			});
    		}
    		
    		var buttonNavigationConturiContainer1 = document.getElementById("buttonNavigationConturiContainer1");
    		if(buttonNavigationConturiContainer1) {
      			buttonNavigationConturiContainer1.addEventListener("click", function (e) {
        				window.location.href = "homepage.php"; // Redirect to the previous page
      			});
    		}
  	</script>
</body>
</html>