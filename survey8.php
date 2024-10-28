<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Survey 7</title>

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

.how-do-you {
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
    <b class="how-do-you">Which of these do you regularly spend on?</b>

    <!-- Checkboxes for spending options -->
    <div class="radio-field">
        <div class="checkbox-and-label">
            <input type="checkbox" id="bills" name="spend[]" value="Bills">
            <label for="bills">Bills</label>
        </div>
    </div>

    <div class="radio-field1">
        <div class="checkbox-and-label">
            <input type="checkbox" id="groceries" name="spend[]" value="Groceries">
            <label for="groceries">Groceries</label>
        </div>
    </div>

    <div class="radio-field2">
        <div class="checkbox-and-label">
            <input type="checkbox" id="internet" name="spend[]" value="Internet">
            <label for="internet">Internet</label>
        </div>
    </div>

    <div class="radio-field3">
        <div class="checkbox-and-label">
            <input type="checkbox" id="personal-care" name="spend[]" value="Personal Care">
            <label for="personal-care">Personal Care</label>
        </div>
    </div>

    <div class="radio-field4">
        <div class="checkbox-and-label">
            <input type="checkbox" id="clothing" name="spend[]" value="Clothing">
            <label for="clothing">Clothing</label>
        </div>
    </div>
</div>

<!-- Continue and Back buttons both on the bottom right -->
<div class="button-navigation-conturi" id="buttonNavigationConturiContainer">Continue</div>
<div class="button-navigation-conturi1" id="buttonNavigationConturiContainer1">Back</div>

<script>
   // Redirect when clicking on Continue
   document.getElementById("buttonNavigationConturiContainer").addEventListener("click", function() {
      window.location.href = "survey9.php"; // Redirect to the next page
   });

   // Redirect when clicking on Back
   document.getElementById("buttonNavigationConturiContainer1").addEventListener("click", function() {
      window.location.href = "survey7.php"; // Redirect to the previous page
   });
</script>

</body>
</html>
