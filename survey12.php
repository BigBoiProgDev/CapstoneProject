<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Survey 12</title>

    <style>
body {
  	margin: 0;
  	line-height: normal;
  	font-family: Arial, sans-serif;
  	background-color: #f0f0f0;
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

.image-8-icon {
  	width: auto;
  	height: auto;
  	max-width: 100%;
  	max-height: 300px; /* Set a reasonable max height */
  	margin-bottom: 20px;
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
.are-you-saving {
  	font-size: 24px;
  	color: #000;
  	margin-bottom: 20px;
  	font-weight: bold;
}

.button-navigation-conturi,
.button-navigation-conturi1 {
  	width: 135px;
  	height: 43px;
  	display: inline-block;
  	line-height: 43px;
  	text-align: center;
  	background-color: #1ca380;
  	color: white;
  	border-radius: 25px;
  	cursor: pointer;
  	margin: 10px;
}

.button-navigation-conturi1 {
  	background-color: #5ee4c2;
  	color: #086100;
}

.checkbox-and-label {
  	display: flex;
  	align-items: center;
  	justify-content: flex-start;
  	margin-bottom: 10px;
}

.checkbox-and-label input {
  	margin-right: 10px;
}

.radio-field, .radio-field1, .radio-field2, .radio-field3, .radio-field4, .radio-field5 {
  	background-color: rgba(160, 233, 214, 0.4);
  	border: 1px solid #000;
  	padding: 10px;
  	border-radius: 10px;
  	width: 340px;
  	margin-bottom: 10px;
}
</style>
</head>
<body>

<body>
    <div class="container">
        <!-- The image will retain its full size -->
        <img class="image-8-icon" alt="Image" src="images/image 8.png">
        
        <!-- The question text -->
        <b class="are-you-saving">Are you saving, or planning for any of these?</b>

        <!-- Checkboxes for categories -->
        <!-- Checkbox for Emergency Fund -->
        <div class="radio-field">
            <div class="checkbox-and-label">
                <input type="checkbox" id="emergency-fund" name="any_debt[]" value="Emergency fund">
                <label for="emergency-fund">Emergency fund</label>
            </div>
        </div>

        <div class="radio-field1">
            <div class="checkbox-and-label">
                <input type="checkbox" id="investments" name="any_debt[]" value="Investments">
                <label for="investments">Investments</label>
            </div>
        </div>

        <div class="radio-field2">
            <div class="checkbox-and-label">
                <input type="checkbox" id="new-home-or-car" name="spend_on[]" value="New Home or Car">
                <label for="new-home-or-car">New Home or Car</label>
            </div>
        </div>

        <div class="radio-field3">
            <div class="checkbox-and-label">
                <input type="checkbox" id="vacation" name="spend_on[]" value="Vacation">
                <label for="vacation">Vacation</label>
            </div>
        </div>
        
        <div class="radio-field3">
            <div class="checkbox-and-label">
                <input type="checkbox" id="wedding" name="spend_on[]" value="Wedding">
                <label for="wedding">Wedding</label>
            </div>
        </div>
        
        <div class="radio-field3">
            <div class="checkbox-and-label">
                <input type="checkbox" id="baby" name="spend_on[]" value="Baby">
                <label for="baby">Baby</label>
            </div>
        </div>

        <!-- Continue and Back buttons -->
        <div class="button-navigation-conturi" id="continueButton">Continue</div>
        <div class="button-navigation-conturi1" id="backButton">Back</div>
    </div>

    <script>


        // Redirect when clicking on Continue
        document.getElementById("continueButton").addEventListener("click", function() {
            window.location.href = "survey13.php"; // Redirect to the next page
        });

        // Redirect when clicking on Back
        document.getElementById("backButton").addEventListener("click", function() {
            window.location.href = "survey11.php"; // Redirect to the previous page
        });
    </script>
</body>

</html>
