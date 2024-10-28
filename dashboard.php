<?php 
session_start();
require_once('connect.php');
var_dump($_SESSION);

$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
?>

<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">
  	
  	<link rel="stylesheet"  href="./index.css" />
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" />

</head>
<style>
    
body {
  	margin: 0;
  	line-height: normal;
}
    .dashboard-child {
  	position: absolute;
  	top: 242px;
  	left: 0px;
  	background-color: #d4f4e4;
  	width: 1280px;
  	height: 921px;
}
.header-navigation-child {
  	position: absolute;
  	height: 100%;
  	width: 100%;
  	top: 0%;
  	right: 0%;
  	bottom: 0%;
  	left: 0%;
  	background-color: #d4f4e4;
}
.make-sense-of {
  	position: absolute;
  	top: 90px;
  	left: -72px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 300;
  	display: inline-block;
  	width: 896px;
  	height: 35px;
}
.image-removebg-preview-8-1 {
  	position: absolute;
  	top: -274px;
  	left: 482px;
  	width: 1102px;
  	height: 449px;
  	object-fit: cover;
}
.status-bar {
  	position: absolute;
  	height: 44.56%;
  	width: 101.28%;
  	top: 0%;
  	right: -1.28%;
  	bottom: 55.44%;
  	left: 0%;
}
.arrow-left {
  	position: absolute;
  	height: 26.04%;
  	width: 5.84%;
  	top: 52.08%;
  	right: 90.42%;
  	bottom: 21.88%;
  	left: 3.74%;
  	overflow: hidden;
  	display: none;
}
.icon-check {
  	position: absolute;
  	height: 26.04%;
  	width: 5.84%;
  	top: 51.04%;
  	right: 3.97%;
  	bottom: 22.92%;
  	left: 90.19%;
  	overflow: hidden;
  	display: none;
}
.material-symbols-lightmenu {
  	position: absolute;
  	height: 27.57%;
  	width: 5.61%;
  	top: 50.57%;
  	right: 92.99%;
  	bottom: 21.85%;
  	left: 1.4%;
  	overflow: hidden;
}
.header-navigation {
  	position: absolute;
  	top: 0px;
  	left: 0px;
  	box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  	width: 1280px;
  	height: 169px;
  	font-size: 25px;
}
.dashboard-item {
  	position: absolute;
  	top: 107px;
  	left: 21px;
  	border-radius: 15px;
  	width: 385px;
  	height: 124px;
  	display: none;
}
.dashboard-inner {
  	position: absolute;
  	top: 805px;
  	left: 41px;
  	border-radius: 50%;
  	background-color: rgba(0, 0, 0, 0);
  	width: 15px;
  	height: 11px;
}
.rectangle-div {
  	position: absolute;
  	top: 372px;
  	left: 213px;
  	background-color: #fff;
  	width: 479px;
  	height: 324px;
}
.dashboard-child1 {
  	position: absolute;
  	top: 379px;
  	left: 773px;
  	background-color: #fff;
  	width: 479px;
  	height: 324px;
}
.your-budget-is {
  	position: absolute;
  	top: 334px;
  	left: 211px;
  	font-size: 25px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 600;
  	color: #086100;
  	text-align: left;
  	display: inline-block;
  	width: 400px;
  	height: 30px;
}
.your-income-is {
  	position: absolute;
  	top: 341px;
  	left: 768px;
  	font-size: 25px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 600;
  	color: #086100;
  	text-align: left;
  	display: inline-block;
  	width: 216px;
  	height: 31px;
}
.add-income {
  	position: absolute;
  	top: 341px;
  	left: 1141px;
  	text-decoration: underline;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 300;
  	color: #086100;
  	text-align: left;
  	display: inline-block;
  	width: 106px;
  	height: 20px;
}
.dashboard-child2 {
  	position: absolute;
  	top: 416px;
  	left: 824px;
  	background-color: #d4f4e4;
  	width: 114px;
  	height: 51px;
}
.dashboard-child3 {
  	position: absolute;
  	top: 389px;
  	left: 245px;
  	background-color: #d4f4e4;
  	width: 150px;
  	height: 51px;
}
.dashboard-child4 {
  	position: absolute;
  	top: 500px;
  	left: 245px;
  	background-color: #d4f4e4;
  	width: 150px;
  	height: 51px;
}
.dashboard-child5 {
  	position: absolute;
  	top: 564px;
  	left: 245px;
  	background-color: #d4f4e4;
  	width: 150px;
  	height: 51px;
}
.dashboard-child6 {
  	position: absolute;
  	top: 628px;
  	left: 245px;
  	background-color: #d4f4e4;
  	width: 150px;
  	height: 51px;
}
.dashboard-child7 {
  	position: absolute;
  	top: 416px;
  	left: 970px;
  	background-color: #d4f4e4;
  	width: 248px;
  	height: 51px;
}
.dashboard-child8 {
  	position: absolute;
  	top: 389px;
  	left: 433px;
  	background-color: #d4f4e4;
  	width: 221px;
  	height: 51px;
}
.dashboard-child9 {
  	position: absolute;
  	top: 500px;
  	left: 433px;
  	background-color: #d4f4e4;
  	width: 221px;
  	height: 51px;
}
.dashboard-child10 {
  	position: absolute;
  	top: 564px;
  	left: 433px;
  	background-color: #d4f4e4;
  	width: 221px;
  	height: 51px;
}
.dashboard-child11 {
  	position: absolute;
  	top: 628px;
  	left: 433px;
  	background-color: #d4f4e4;
  	width: 221px;
  	height: 51px;
}
.dashboard-child12 {
  	position: absolute;
  	top: 481px;
  	left: 970px;
  	background-color: #d4f4e4;
  	width: 248px;
  	height: 51px;
}
.dashboard-child13 {
  	position: absolute;
  	top: 546px;
  	left: 970px;
  	background-color: #d4f4e4;
  	width: 248px;
  	height: 51px;
}
.dashboard-child14 {
  	position: absolute;
  	top: 481px;
  	left: 824px;
  	background-color: #d4f4e4;
  	width: 114px;
  	height: 51px;
}
.dashboard-child15 {
  	position: absolute;
  	top: 546px;
  	left: 824px;
  	background-color: #d4f4e4;
  	width: 114px;
  	height: 51px;
}
.salary {
  	position: absolute;
  	top: 432px;
  	left: 850px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	width: 63px;
  	height: 20px;
}
.bills {
  	position: absolute;
  	top: 516px;
  	left: 289px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	width: 63px;
  	height: 20px;
}
.savings {
  	position: absolute;
  	top: 580px;
  	left: 282px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	width: 77px;
  	height: 20px;
}
.goals {
  	position: absolute;
  	top: 644px;
  	left: 282px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	width: 77px;
  	height: 20px;
}
.this-month {
  	position: absolute;
  	top: 405px;
  	left: 269px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	width: 103px;
  	height: 20px;
}
.allowance {
  	position: absolute;
  	top: 497px;
  	left: 835px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	width: 93px;
  	height: 20px;
}
.business {
  	position: absolute;
  	top: 562px;
  	left: 835px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	width: 93px;
  	height: 20px;
}
.b {
  	position: absolute;
  	top: 430px;
  	left: 998px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	color: #44bf99;
  	text-align: left;
  	width: 110px;
  	height: 24px;
}
.b1 {
  	position: absolute;
  	top: 497px;
  	left: 993px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	color: #44bf99;
  	text-align: left;
  	width: 110px;
  	height: 24px;
}
.b2 {
  	position: absolute;
  	top: 560px;
  	left: 993px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	color: #44bf99;
  	text-align: left;
  	width: 110px;
  	height: 24px;
}
.div {
  	position: absolute;
  	top: 405px;
  	left: 452px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 600;
  	color: #44bf99;
  	display: inline-block;
  	width: 82px;
  	height: 24px;
}
.div1 {
  	position: absolute;
  	top: 516px;
  	left: 452px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 600;
  	display: inline-block;
  	width: 82px;
  	height: 24px;
}
.div2 {
  	position: absolute;
  	top: 580px;
  	left: 452px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 600;
  	color: #44bf99;
  	display: inline-block;
  	width: 82px;
  	height: 24px;
}
.div3 {
  	position: absolute;
  	top: 580px;
  	left: 452px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 600;
  	display: inline-block;
  	width: 82px;
  	height: 24px;
}
.div4 {
  	position: absolute;
  	top: 644px;
  	left: 452px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 600;
  	display: inline-block;
  	width: 82px;
  	height: 24px;
}
.edit {
  	position: absolute;
  	top: 405px;
  	left: 611px;
  	font-size: 14px;
  	text-decoration: underline;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 300;
  	color: #086100;
  	text-align: left;
  	display: inline-block;
  	width: 38px;
  	height: 20px;
}
.budget-recommendations {
  	position: absolute;
  	top: 468px;
  	left: 246px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 600;
  	text-align: left;
  	display: inline-block;
  	width: 278px;
  	height: 44px;
}
.dashboard-child16 {
  	position: absolute;
  	top: 169px;
  	left: 169px;
  	background-color: #fff;
  	border: 1px solid #d9d9d9;
  	box-sizing: border-box;
  	width: 1111px;
  	height: 73px;
}
.welcome-light {
  	position: absolute;
  	top: 198px;
  	left: 197px;
  	font-size: 20px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	text-align: left;
  	display: inline-block;
  	width: 289px;
  	height: 30px;
}
.dashboard-child17 {
  	position: absolute;
  	top: 0px;
  	left: -3px;
  	background-color: #44bf99;
  	width: 172px;
  	height: 832px;
}
.makecents {
  	position: absolute;
  	top: 38px;
  	left: 11px;
  	width: 151px;
  	height: 132px;
  	object-fit: cover;
}
.home-page {
  	position: absolute;
  	top: 188px;
  	left: 37px;
  	font-size: 15px;
  	text-decoration: underline;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	text-align: left;
  	display: inline-block;
  	width: 107px;
  	height: 20px;
}
.goals1 {
  	position: absolute;
  	top: 226px;
  	left: 37px;
  	font-size: 15px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	text-align: left;
  	display: inline-block;
  	width: 46px;
  	height: 20px;
}
.other-features {
  	position: absolute;
  	top: 316px;
  	left: 36px;
  	font-size: 13px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	display: inline-block;
  	width: 120px;
  	height: 20px;
}
.settings-icon {
  	position: absolute;
  	top: 186px;
  	left: 6px;
  	width: 24px;
  	height: 24px;
}
.statistics {
  	position: absolute;
  	top: 286px;
  	left: 37px;
  	font-size: 15px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	text-align: left;
  	display: inline-block;
  	width: 76px;
  	height: 20px;
  	cursor: pointer;
}
.expense-tracker {
  	position: absolute;
  	top: 256px;
  	left: 37px;
  	font-size: 14px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	text-align: left;
  	display: inline-block;
  	width: 120px;
  	height: 20px;
  	cursor: pointer;
}
.dashboard {
  	width: 100%;
  	position: relative;
  	background-color: #f9fbf8;
  	height: 832px;
  	overflow: hidden;
  	text-align: center;
  	font-size: 17px;
  	color: #000;
  	font-family: Montserrat;
}
.account-setting-btn {
    position: absolute;
    top: 316px;
    left: 37px;
    font-size: 14px;
    letter-spacing: 0.25px;
    line-height: 20px;
    font-weight: 500;
    cursor: pointer;
    text-align: left;
    color: #000;
    display: inline-block;
    width: 120px;
    height: 20px;
	cursor: pointer;
  }


</style>
<body>
  	
  	<div class="dashboard">
    		<div class="dashboard-child">
    		</div>
    		<div class="header-navigation">
      			<div class="header-navigation-child">
      			</div>
      			<div class="status-bar">
        				<div class="make-sense-of">“Make sense of your finances.”</div>
        				<img class="image-removebg-preview-8-1" alt="" src="image-removebg-preview (8) 1.png">
        				
      			</div>
      			<div class="arrow-left">
      			</div>
      			<div class="icon-check">
      			</div>
      			<div class="material-symbols-lightmenu">
      			</div>
    		</div>
    		<img class="dashboard-item" alt="" src="Rectangle 43.svg">
    		
    		<div class="dashboard-inner">
    		</div>
    		<div class="rectangle-div">
    		</div>
    		<div class="dashboard-child1">
    		</div>
    		<div class="your-budget-is">Your Budget is:</div>
    		<div class="your-income-is">Your Income is:</div>
    		<div class="add-income">Add income</div>
    		<div class="dashboard-child2">
    		</div>
    		<div class="dashboard-child3">
    		</div>
    		<div class="dashboard-child4">
    		</div>
    		<div class="dashboard-child5">
    		</div>
    		<div class="dashboard-child6">
    		</div>
    		<div class="dashboard-child7">
    		</div>
    		<div class="dashboard-child8">
    		</div>
    		<div class="dashboard-child9">
    		</div>
    		<div class="dashboard-child10">
    		</div>
    		<div class="dashboard-child11">
    		</div>
    		<div class="dashboard-child12">
    		</div>
    		<div class="dashboard-child13">
    		</div>
    		<div class="dashboard-child14">
    		</div>
    		<div class="dashboard-child15">
    		</div>
    		<div class="salary">Salary</div>
    		<div class="bills">Bills</div>
    		<div class="savings">Savings</div>
    		<div class="goals">Goals</div>
    		<div class="this-month">This Month:</div>
    		<div class="allowance">Allowance</div>
    		<div class="business">Business</div>
    		<b class="b">₱13,780</b>
    		<b class="b1">₱2,900</b>
    		<b class="b2">₱8,930</b>
    		<div class="div">₱25,610</div>
    		<div class="div1">₱12,805</div>
    		<div class="div2">₱7,683</div>
    		<div class="div3">₱7,683</div>
    		<div class="div4">₱5,122</div>
    		<div class="edit">Edit</div>
    		<div class="budget-recommendations">Budget Recommendations:</div>
    		<div class="dashboard-child16">
    		</div>
    		<div class="welcome-light">Welcome <?php echo htmlspecialchars($username);?>!</div>
    		<div class="dashboard-child17">
    		</div>
    		<img class="makecents" alt="" src="makecents.png">
    		
    		<div class="home-page">HOME PAGE</div>
    		<div class="goals1">Goals</div>

            <div class="account-setting-btn" onclick="location.href='account_settings.php'">Account Settings</div>

    		<img class="settings-icon" alt="" src="settings.svg">
    		
    		<div class="statistics" id="statisticsText">Statistics</div>
    		<div class="expense-tracker" id="expenseTrackerText">Expense Tracker</div>
  	</div>
  	<script>
  function openAccountSettings() {
      window.location.href = "account_settings.php";
  }

  var statisticsText = document.getElementById("statisticsText");
  if (statisticsText) {
      statisticsText.addEventListener("click", function (e) {
          window.location.href = "statistic.php"; 
      });
  }
  var expenseTrackerText = document.getElementById("expenseTrackerText");
  if (expenseTrackerText) {
      expenseTrackerText.addEventListener("click", function (e) {
          window.location.href = "expense_tracker.php"; 
      });
  	}
	</script>
		</body>
			
</html>