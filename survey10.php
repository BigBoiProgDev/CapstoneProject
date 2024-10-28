<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Survey 10</title>
    
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
  	
  	/* Paddings */
  	--padding-smi: 13px;
  	--padding-6xs: 7px;
  	--padding-5xs: 8px;
  	
  	/* Border radiuses */
  	--br-5xs: 8px;
  	--br-11xs: 2px;
}
.another-surprise-expense {
  	position: absolute;
  	top: 416px;
  	left: 50%;
  	transform: translateX(-50%);
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	width: 387px;
  	height: 23px;
}

.lets-look-at-container {
  	position: absolute;
  	top: 468px;
  	left: 50%;
  	transform: translateX(-50%);
  	font-size: 16px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	width: 612px;
  	height: 114px;
}

.image-9-icon {
  	position: absolute;
  	top: 141px;
  	left: 50%;
  	transform: translateX(-50%);
  	width: 430px;
  	height: 275px;
  	object-fit: cover;
}

.button-navigation-conturi {
  	position: absolute;
  	bottom: 30px;
  	right: 30px;
  	border-radius: 8px;
  	background-color: #1ca380;
  	width: 135px;
  	height: 43px;
  	display: flex;
  	flex-direction: row;
  	align-items: center;
  	justify-content: center;
  	padding: 13px 7px;
  	box-sizing: border-box;
  	cursor: pointer;
  	font-size: 20px;
  	color: #fff;
  	margin-left: 10px;
}

.button-navigation-conturi1 {
  	position: absolute;
  	bottom: 30px;
  	right: 180px; /* Adjusted to be next to the Continue button */
  	border-radius: 8px;
  	background-color: #5ee4c2;
  	width: 135px;
  	height: 43px;
  	display: flex;
  	flex-direction: row;
  	align-items: center;
  	justify-content: center;
  	padding: 13px 7px;
  	box-sizing: border-box;
  	cursor: pointer;
  	font-size: 20px;
  	color: #086100;
}
.survey-10 {
  	width: 100%;
  	position: relative;
  	background-color: var(--neutral-white-fff);
  	height: 832px;
  	overflow: hidden;
  	text-align: center;
  	font-size: var(--font-size-xl);
  	color: var(--color-black);
  	font-family: var(--font-montserrat);
}
    </style> 	
  	
  	<link rel="stylesheet" href="./global.css" />
  	<link rel="stylesheet"  href="./index.css" />
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" />
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" />
  	
  	
</head>
<body>
  	
  	<div class="survey-10">
    		<b class="another-surprise-expense">Another surprise expense? 🤦</b>
    		<div class="lets-look-at-container">
      			<p class="lets-look-at">Let’s look at the expenses that sneak up on you.</p>
      			<p class="lets-look-at">&nbsp;</p>
      			<p class="lets-look-at">
        				<span>We'll help you take the stress and drama out of these non-monthly expenses by</span>
        				<b class="setting-a-little"> setting a little money aside for them each month</b>
        				<span class="setting-a-little">.</span>
      			</p>
    		</div>
    		<img class="image-9-icon" alt="" src="images/image 9.png">
    		
    		<div class="button-navigation-conturi" id="buttonNavigationConturiContainer">Continue</div>
    		<div class="button-navigation-conturi1" id="buttonNavigationConturiContainer1">Back</div>
  	</div>

<script>
   // Redirect when clicking on Continue
   document.getElementById("buttonNavigationConturiContainer").addEventListener("click", function() {
      window.location.href = "survey11.php"; // Redirect to the next page
   });

   // Redirect when clicking on Back
   document.getElementById("buttonNavigationConturiContainer1").addEventListener("click", function() {
      window.location.href = "survey9.php"; // Redirect to the previous page
   });
</script>
  	
</body>
</html>
