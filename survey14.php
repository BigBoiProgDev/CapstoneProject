<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Survey 14</title>

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
  	max-height: 300px;
  	margin-bottom: 20px;
}

.what-else-do {
  	font-size: 24px;
  	color: #000;
  	margin-bottom: 20px;
  	font-weight: bold;
  	text-align: center;
}

/* Styling for the spending options */
.checkbox-and-label {
  	display: flex;
  	align-items: center;
  	justify-content: flex-start;
  	margin-bottom: 10px;
}

.checkbox-and-label input {
  	margin-right: 10px;
}

.radio-field, .radio-field1, .radio-field2, .radio-field3, .radio-field4 {
  	background-color: rgba(160, 233, 214, 0.4);
  	border: 1px solid #000;
  	padding: 10px;
  	border-radius: 10px;
  	width: 340px;
  	margin-bottom: 10px;
}

/* Original styles for Back and Continue buttons */
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
</style>
</head>
<body>

<div class="container">
    <!-- The image -->
    <img class="image-8-icon" alt="Spending Image" src="images/image 8.png">
    
    <!-- The question text -->
    <b class="what-else-do">What else do you want to include - without stress or guilt? </b>
    <b class="last-question-we">Last question, we promise!</b>
   <div class="radio-field">
            <div class="checkbox-and-label">
                <input type="checkbox" id="dining-out" name="any_debt[]" value="Dining out">
                <label for="dining-out">Dining out</label>
            </div>
        </div>

        <div class="radio-field1">
            <div class="checkbox-and-label">
                <input type="checkbox" id="entertainment" name="any_debt[]" value="Entertainment">
                <label for="entertainment">Entertainment</label>
            </div>
        </div>

        <div class="radio-field2">
            <div class="checkbox-and-label">
                <input type="checkbox" id="hobbies" name="spend_on[]" value="Hobbies">
                <label for="hobbies">Hobbies</label>
            </div>
        </div>

        <div class="radio-field3">
            <div class="checkbox-and-label">
                <input type="checkbox" id="gift" name="spend_on[]" value="Gift">
                <label for="gift">Gift</label>
            </div>
        </div>
        
        <div class="radio-field3">
            <div class="checkbox-and-label">
                <input type="checkbox" id="celebrations" name="spend_on[]" value="Celebrations">
                <label for="celebrations">Celebrations</label>
            </div>
        </div>
        
        <div class="radio-field3">
            <div class="checkbox-and-label">
                <input type="checkbox" id="charity" name="spend_on[]" value="Charity">
                <label for="charity">Charity</label>
            </div>
        </div>

<!-- Continue and Back buttons both on the bottom right -->
<div class="button-navigation-conturi" id="buttonNavigationConturiContainer">Continue</div>
<div class="button-navigation-conturi1" id="buttonNavigationConturiContainer1">Back</div>

<script>
   // Redirect when clicking on Continue
   document.getElementById("buttonNavigationConturiContainer").addEventListener("click", function() {
      window.location.href = "dashboard.php"; // Redirect to the next page
   });

   // Redirect when clicking on Back
   document.getElementById("buttonNavigationConturiContainer1").addEventListener("click", function() {
      window.location.href = "survey13.php"; // Redirect to the previous page
   });
</script>

</body>
</html>
