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

/* Styling for the transport options */
.checkbox-and-label {
  	display: flex;
  	align-items: center;
  	justify-content: flex-start;
  	margin-bottom: 10px;
}

.checkbox-and-label input {
  	margin-right: 10px;
}

.radio-field, .radio-field1, .radio-field2, .radio-field3, .radio-field4, .radio-field5, .radio-field6 {
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
    <img class="image-8-icon" alt="Transport Image" src="images/image 8.png">
    
    <!-- The question text -->
    <b class="how-do-you">How do you get around?</b>

    <!-- Checkboxes for transport options -->
    <div class="radio-field">
        <div class="checkbox-and-label">
            <input type="checkbox" id="car" name="transport[]" value="Car">
            <label for="car">Car</label>
        </div>
    </div>

    <div class="radio-field1">
        <div class="checkbox-and-label">
            <input type="checkbox" id="bike" name="transport[]" value="Bike">
            <label for="bike">Bike</label>
        </div>
    </div>

    <div class="radio-field2">
        <div class="checkbox-and-label">
            <input type="checkbox" id="walk" name="transport[]" value="Walk">
            <label for="walk">Walk</label>
        </div>
    </div>

    <div class="radio-field3">
        <div class="checkbox-and-label">
            <input type="checkbox" id="wheelchair" name="transport[]" value="Wheelchair">
            <label for="wheelchair">Wheelchair</label>
        </div>
    </div>

    <div class="radio-field4">
        <div class="checkbox-and-label">
            <input type="checkbox" id="public-transit" name="transport[]" value="Public Transit">
            <label for="public-transit">Public Transit</label>
        </div>
    </div>

    <div class="radio-field5">
        <div class="checkbox-and-label">
            <input type="checkbox" id="rideshare" name="transport[]" value="Rideshare">
            <label for="rideshare">Rideshare (MoveIt/Maxim etc.)</label>
        </div>
    </div>

    <div class="radio-field6">
        <div class="checkbox-and-label">
            <input type="checkbox" id="motorcycle" name="transport[]" value="Motorcycle">
            <label for="motorcycle">Motorcycle</label>
        </div>
    </div>
</div>

<!-- Continue and Back buttons both on the bottom right -->
<div class="button-navigation-conturi" id="buttonNavigationConturiContainer">Continue</div>
<div class="button-navigation-conturi1" id="buttonNavigationConturiContainer1">Back</div>

<script>
   // Redirect when clicking on Continue
   document.getElementById("buttonNavigationConturiContainer").addEventListener("click", function() {
      window.location.href = "survey8.php"; // Redirect to the next page
   });

   // Redirect when clicking on Back
   document.getElementById("buttonNavigationConturiContainer1").addEventListener("click", function() {
      window.location.href = "survey6.php"; // Redirect to the previous page
   });
</script>

</body>
</html>
