<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Survey 3</title>

    <style>

  	
body {
  	margin: 0;
  	line-height: normal;
}


:root {
  	
  	/* fonts */
  	--body-base: Inter;
  	--font-roboto: Roboto;
  	--font-montserrat: Montserrat;
  	
  	/* font sizes */
  	--body-base-size: 16px;
  	--font-size-xl: 20px;
  	
  	/* Colors */
  	--neutral-white-fff: #fff;
  	--color-paleturquoise: rgba(160, 233, 214, 0.4);
  	--color-black: #000;
  	--text-default-default: #1e1e1e;
  	--material-theme-ref-primary-primary60: #1ca380;
  	
  	/* Spacing */
  	--space-300: 12px;
  	--radius-full: 9999px;
  	
  	/* Gaps */
  	--gap-xs: 12px;
  	
  	/* Paddings */
  	--padding-smi: 13px;
  	--padding-6xs: 7px;
  	
  	/* Border radiuses */
  	--br-smi: 13px;
  	--br-9980xl: 9999px;
  	--br-5xs: 8px;
}
.who-do-you {
  	position: absolute;
  	top: 328px;
  	left: 506px;
  	font-size: var(--font-size-xl);
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	font-family: var(--font-montserrat);
  	color: var(--color-black);
  	text-align: center;
  	width: 394px;
  	height: 30px;
}
.image-4-icon {
  	position: absolute;
  	top: 69px;
  	left: 521px;
  	width: 364px;
  	height: 240px;
  	object-fit: cover;
}
.continue {
  	position: relative;
  	letter-spacing: 0.5px;
  	line-height: 24px;
}
.button-navigation-conturi {
  	position: absolute;
  	top: 740px;
  	left: calc(50% + 431px);
  	border-radius: var(--br-5xs);
  	background-color: var(--material-theme-ref-primary-primary60);
  	width: 135px;
  	height: 43px;
  	display: flex;
  	flex-direction: row;
  	align-items: center;
  	justify-content: center;
  	padding: var(--padding-smi) var(--padding-6xs) var(--padding-smi) 10px;
  	box-sizing: border-box;
  	cursor: pointer;
  	font-size: var(--font-size-xl);
  	color: var(--neutral-white-fff);
  	font-family: var(--font-roboto);
}
.back {
  	width: 52px;
  	position: relative;
  	letter-spacing: 0.5px;
  	line-height: 24px;
  	display: inline-block;
  	flex-shrink: 0;
}
.button-navigation-conturi1 {
  	position: absolute;
  	top: 740px;
  	left: calc(50% + 284px);
  	border-radius: var(--br-5xs);
  	background-color: #5ee4c2;
  	width: 134px;
  	height: 43px;
  	display: flex;
  	flex-direction: row;
  	align-items: center;
  	justify-content: center;
  	padding: var(--padding-smi) var(--padding-6xs) var(--padding-smi) var(--padding-smi);
  	box-sizing: border-box;
  	cursor: pointer;
  	font-size: var(--font-size-xl);
  	color: #086100;
  	font-family: var(--font-roboto);
}
.radio-icon {
  	width: 16px;
  	position: relative;
  	border-radius: var(--radius-full);
  	height: 16px;
  	overflow: hidden;
  	flex-shrink: 0;
}
.label {
  	flex: 1;
  	position: relative;
  	line-height: 140%;
}
.checkbox-and-label {
  	align-self: stretch;
  	display: flex;
  	flex-direction: row;
  	align-items: center;
  	justify-content: flex-start;
  	gap: var(--space-300);
}
.radio-field {
  	position: absolute;
  	top: 473px;
  	left: 533px;
  	border-radius: var(--br-smi);
  	background-color: var(--color-paleturquoise);
  	border: 1px solid var(--color-black);
  	box-sizing: border-box;
  	width: 340px;
  	display: flex;
  	flex-direction: column;
  	align-items: flex-start;
  	justify-content: flex-start;
}
.radio-field1 {
  	position: absolute;
  	top: 583px;
  	left: 533px;
  	border-radius: var(--br-smi);
  	background-color: var(--color-paleturquoise);
  	border: 1px solid var(--color-black);
  	box-sizing: border-box;
  	width: 340px;
  	display: flex;
  	flex-direction: column;
  	align-items: flex-start;
  	justify-content: flex-start;
  	color: var(--color-black);
}
.radio-field2 {
  	position: absolute;
  	top: 549px;
  	left: 533px;
  	border-radius: var(--br-smi);
  	background-color: var(--color-paleturquoise);
  	border: 1px solid var(--color-black);
  	box-sizing: border-box;
  	width: 340px;
  	display: flex;
  	flex-direction: column;
  	align-items: flex-start;
  	justify-content: flex-start;
}
.radio-field3 {
  	position: absolute;
  	top: 511px;
  	left: 533px;
  	border-radius: var(--br-smi);
  	background-color: var(--color-paleturquoise);
  	border: 1px solid var(--color-black);
  	box-sizing: border-box;
  	width: 340px;
  	display: flex;
  	flex-direction: column;
  	align-items: flex-start;
  	justify-content: flex-start;
}
.radio-field4 {
  	position: absolute;
  	top: 439px;
  	left: 533px;
  	border-radius: var(--br-smi);
  	background-color: var(--color-paleturquoise);
  	border: 1px solid var(--color-black);
  	box-sizing: border-box;
  	width: 340px;
  	display: flex;
  	flex-direction: column;
  	align-items: flex-start;
  	justify-content: flex-start;
}
.radio-field5 {
  	position: absolute;
  	top: 401px;
  	left: 533px;
  	border-radius: var(--br-smi);
  	background-color: var(--color-paleturquoise);
  	border: 1px solid var(--color-black);
  	box-sizing: border-box;
  	width: 340px;
  	display: flex;
  	flex-direction: column;
  	align-items: flex-start;
  	justify-content: flex-start;
}
.survey-3 {
  	width: 100%;
  	position: relative;
  	background-color: var(--neutral-white-fff);
  	height: 832px;
  	overflow: hidden;
  	text-align: left;
  	font-size: var(--body-base-size);
  	color: var(--text-default-default);
  	font-family: var(--body-base);
}


    </style>
    </head>
	<div class="survey-3">
		<b class="who-do-you">Who do you spend money on?</b>
		<img class="image-4-icon" alt="" src="images/image 4.png">
		
		<!-- Checkbox for "Other Adults" -->
		<div class="radio-field">
			<div class="checkbox-and-label">
				<input type="checkbox" id="other-adults" name="spend_on[]" value="Other Adults">
				<label for="other-adults">Other Adults</label>
			</div>
		</div>

		<!-- Checkbox for "Pets" -->
		<div class="radio-field1">
			<div class="checkbox-and-label">
				<input type="checkbox" id="pets" name="spend_on[]" value="Pets">
				<label for="pets">Pets</label>
			</div>
		</div>

		<!-- Checkbox for "Teens (13+)" -->
		<div class="radio-field2">
			<div class="checkbox-and-label">
				<input type="checkbox" id="teens" name="spend_on[]" value="Teens">
				<label for="teens">Teens (13+)</label>
			</div>
		</div>

		<!-- Checkbox for "Kids" -->
		<div class="radio-field3">
			<div class="checkbox-and-label">
				<input type="checkbox" id="kids" name="spend_on[]" value="Kids">
				<label for="kids">Kids</label>
			</div>
		</div>

		<!-- Checkbox for "Partner" -->
		<div class="radio-field4">
			<div class="checkbox-and-label">
				<input type="checkbox" id="partner" name="spend_on[]" value="Partner">
				<label for="partner">Partner</label>
			</div>
		</div>

		<!-- Checkbox for "Myself" -->
		<div class="radio-field5">
			<div class="checkbox-and-label">
				<input type="checkbox" id="myself" name="spend_on[]" value="Myself">
				<label for="myself">Myself</label>
			</div>
		</div>

		<!-- Continue and Back Buttons -->
		<div class="button-navigation-conturi" id="buttonNavigationConturiContainer">
			<div class="continue">Continue</div>
		</div>
		<div class="button-navigation-conturi1" id="buttonNavigationConturiContainer1">
			<div class="back">Back</div>
		</div>
	</div>

	<script>
		// JavaScript for navigation buttons
		var buttonNavigationConturiContainer = document.getElementById("buttonNavigationConturiContainer");
		if(buttonNavigationConturiContainer) {
			buttonNavigationConturiContainer.addEventListener("click", function (e) {
				window.location.href = "survey4.php"; // Redirect to the next page
			});
		}

		var buttonNavigationConturiContainer1 = document.getElementById("buttonNavigationConturiContainer1");
		if(buttonNavigationConturiContainer1) {
			buttonNavigationConturiContainer1.addEventListener("click", function (e) {
				window.location.href = "survey3.php"; // Redirect to the previous page
			});
		}
	</script>
</body>
</html>


