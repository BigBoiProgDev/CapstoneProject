<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">
  	
  	<link rel="stylesheet"  href="./index.css" />
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" />
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" />
  	
  	
  	
</head>
<body>
<style>
.statistics-month-child {
  	position: absolute;
  	top: 600px;
  	left: 195px;
  	border-radius: 25px;
  	background-color: #44bf99;
  	width: 1065px;
  	height: 563px;
}
.statistics-month-item {
  	position: absolute;
  	top: 708px;
  	left: 211px;
  	border-radius: 15px;
  	background-color: #d4f4e4;
  	width: 325px;
  	height: 427px;
}
.statistics-month-inner {
  	position: absolute;
  	top: 708px;
  	left: 568px;
  	border-radius: 15px;
  	background-color: #d4f4e4;
  	width: 325px;
  	height: 427px;
}
.rectangle-div {
  	position: absolute;
  	top: 708px;
  	left: 925px;
  	border-radius: 15px;
  	background-color: #d4f4e4;
  	width: 325px;
  	height: 427px;
}
.rectangle-icon {
  	position: absolute;
  	top: 107px;
  	left: 21px;
  	border-radius: 15px;
  	width: 385px;
  	height: 124px;
  	display: none;
}
.line-div {
  	position: absolute;
  	top: 207.5px;
  	left: 175.5px;
  	border-top: 1px solid #959997;
  	box-sizing: border-box;
  	width: 1107px;
  	height: 1px;
}
.statistics {
  	position: absolute;
  	top: 57px;
  	left: 208px;
  	font-size: 28px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	width: 172px;
  	height: 33px;
}
.check-monthly-report {
  	position: absolute;
  	top: 61px;
  	left: 1036px;
  	font-size: 17px;
  	text-decoration: underline;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 300;
  	display: inline-block;
  	width: 198px;
  	height: 20px;
  	cursor: pointer;
}
.spent-so-far {
  	position: absolute;
  	top: 650px;
  	left: 576px;
  	font-size: 25px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	color: #fff;
  	width: 317px;
  	height: 30px;
}
.budget-this-month {
  	position: absolute;
  	top: 156px;
  	left: 206px;
  	font-size: 28px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	text-align: left;
  	width: 340px;
  	height: 26px;
}
.expenses {
  	position: absolute;
  	top: 736px;
  	left: 289px;
  	font-size: 22px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	width: 169px;
  	height: 26px;
}
.total {
  	position: absolute;
  	top: 1073px;
  	left: 241px;
  	font-size: 20px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	width: 77px;
  	height: 26px;
}
.total1 {
  	position: absolute;
  	top: 1072px;
  	left: 602px;
  	font-size: 20px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	width: 77px;
  	height: 26px;
}
.total2 {
  	position: absolute;
  	top: 1073px;
  	left: 961px;
  	font-size: 20px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	width: 77px;
  	height: 26px;
}
.bills {
  	position: absolute;
  	top: 736px;
  	left: 646px;
  	font-size: 22px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	width: 169px;
  	height: 26px;
}
.needswants {
  	position: absolute;
  	top: 736px;
  	left: 1003px;
  	font-size: 22px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	width: 169px;
  	height: 26px;
}
.statistics-month-child1 {
  	position: absolute;
  	top: 800px;
  	left: 241px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 86px;
  	height: 42px;
}
.statistics-month-child2 {
  	position: absolute;
  	top: 800px;
  	left: 603px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 86px;
  	height: 42px;
}
.statistics-month-child3 {
  	position: absolute;
  	top: 800px;
  	left: 960px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 86px;
  	height: 42px;
}
.statistics-month-child4 {
  	position: absolute;
  	top: 868px;
  	left: 603px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 86px;
  	height: 42px;
}
.statistics-month-child5 {
  	position: absolute;
  	top: 868px;
  	left: 960px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 86px;
  	height: 42px;
}
.statistics-month-child6 {
  	position: absolute;
  	top: 936px;
  	left: 960px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 86px;
  	height: 42px;
}
.statistics-month-child7 {
  	position: absolute;
  	top: 1004px;
  	left: 960px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 86px;
  	height: 42px;
}
.statistics-month-child8 {
  	position: absolute;
  	top: 936px;
  	left: 603px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 86px;
  	height: 42px;
}
.statistics-month-child9 {
  	position: absolute;
  	top: 1004px;
  	left: 603px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 86px;
  	height: 42px;
}
.statistics-month-child10 {
  	position: absolute;
  	top: 868px;
  	left: 241px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 86px;
  	height: 42px;
}
.statistics-month-child11 {
  	position: absolute;
  	top: 936px;
  	left: 241px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 83px;
  	height: 42px;
}
.statistics-month-child12 {
  	position: absolute;
  	top: 1004px;
  	left: 241px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 83px;
  	height: 42px;
}
.statistics-month-child13 {
  	position: absolute;
  	top: 800px;
  	left: 337px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 160px;
  	height: 42px;
}
.statistics-month-child14 {
  	position: absolute;
  	top: 800px;
  	left: 699px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 160px;
  	height: 42px;
}
.statistics-month-child15 {
  	position: absolute;
  	top: 800px;
  	left: 1056px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 160px;
  	height: 42px;
}
.statistics-month-child16 {
  	position: absolute;
  	top: 868px;
  	left: 1056px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 160px;
  	height: 42px;
}
.statistics-month-child17 {
  	position: absolute;
  	top: 936px;
  	left: 1056px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 160px;
  	height: 42px;
}
.statistics-month-child18 {
  	position: absolute;
  	top: 1004px;
  	left: 1056px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 160px;
  	height: 42px;
}
.statistics-month-child19 {
  	position: absolute;
  	top: 868px;
  	left: 699px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 160px;
  	height: 42px;
}
.statistics-month-child20 {
  	position: absolute;
  	top: 936px;
  	left: 699px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 160px;
  	height: 42px;
}
.statistics-month-child21 {
  	position: absolute;
  	top: 1004px;
  	left: 699px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 160px;
  	height: 42px;
}
.statistics-month-child22 {
  	position: absolute;
  	top: 868px;
  	left: 337px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 160px;
  	height: 42px;
}
.statistics-month-child23 {
  	position: absolute;
  	top: 936px;
  	left: 337px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 160px;
  	height: 42px;
}
.statistics-month-child24 {
  	position: absolute;
  	top: 1004px;
  	left: 337px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 160px;
  	height: 42px;
}
.statistics-month-child25 {
  	position: absolute;
  	top: 1061px;
  	left: 337px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 160px;
  	height: 42px;
}
.statistics-month-child26 {
  	position: absolute;
  	top: 1061px;
  	left: 699px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 160px;
  	height: 42px;
}
.statistics-month-child27 {
  	position: absolute;
  	top: 1061px;
  	left: 1056px;
  	border-radius: 5px;
  	background-color: #fff;
  	width: 160px;
  	height: 42px;
}
.food {
  	position: absolute;
  	top: 812px;
  	left: 243px;
  	font-size: 12px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	display: inline-block;
  	width: 65px;
  	height: 26px;
}
.water {
  	position: absolute;
  	top: 811px;
  	left: 613px;
  	font-size: 16px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	display: inline-block;
  	width: 65px;
  	height: 26px;
}
.transportation {
  	position: absolute;
  	top: 880px;
  	left: 243px;
  	font-size: 10px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	display: inline-block;
  	width: 82px;
  	height: 21px;
}
.electricity {
  	position: absolute;
  	top: 880px;
  	left: 605px;
  	font-size: 10px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	display: inline-block;
  	width: 82px;
  	height: 21px;
}
.savings {
  	position: absolute;
  	top: 811px;
  	left: 962px;
  	font-size: 12px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	display: inline-block;
  	width: 82px;
  	height: 21px;
}
.emergency {
  	margin: 0;
}
.emergency-funds {
  	position: absolute;
  	top: 869px;
  	left: 962px;
  	font-size: 10px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	display: inline-block;
  	width: 82px;
  	height: 39px;
}
.investments {
  	position: absolute;
  	top: 947px;
  	left: 962px;
  	font-size: 10px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	display: inline-block;
  	width: 82px;
  	height: 19px;
}
.personal-care {
  	position: absolute;
  	top: 1014px;
  	left: 962px;
  	font-size: 10px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	display: inline-block;
  	width: 82px;
  	height: 19px;
}
.gas {
  	position: absolute;
  	top: 948px;
  	left: 605px;
  	font-size: 10px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	display: inline-block;
  	width: 82px;
  	height: 21px;
}
.debt {
  	position: absolute;
  	top: 1014px;
  	left: 605px;
  	font-size: 10px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	display: inline-block;
  	width: 82px;
  	height: 21px;
}
.eating-out {
  	position: absolute;
  	top: 947px;
  	left: 244px;
  	font-size: 12px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	display: inline-block;
  	width: 78px;
  	height: 30px;
}
.mobile-load {
  	position: absolute;
  	top: 1015px;
  	left: 241px;
  	font-size: 12px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	display: inline-block;
  	width: 83px;
  	height: 32px;
}
.div {
  	position: absolute;
  	top: 812px;
  	left: 349px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	color: #be0909;
  	text-align: left;
  	display: inline-block;
  	width: 98px;
  	height: 17px;
}
.div1 {
  	position: absolute;
  	top: 812px;
  	left: 711px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	color: #be0909;
  	text-align: left;
  	display: inline-block;
  	width: 98px;
  	height: 17px;
}
.div2 {
  	position: absolute;
  	top: 812px;
  	left: 1074px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	color: #be0909;
  	text-align: left;
  	display: inline-block;
  	width: 98px;
  	height: 17px;
}
.div3 {
  	position: absolute;
  	top: 880px;
  	left: 1074px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	color: #be0909;
  	text-align: left;
  	display: inline-block;
  	width: 98px;
  	height: 17px;
}
.div4 {
  	position: absolute;
  	top: 948px;
  	left: 1074px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	color: #be0909;
  	text-align: left;
  	display: inline-block;
  	width: 98px;
  	height: 17px;
}
.div5 {
  	position: absolute;
  	top: 1016px;
  	left: 1074px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	color: #be0909;
  	text-align: left;
  	display: inline-block;
  	width: 98px;
  	height: 17px;
}
.div6 {
  	position: absolute;
  	top: 1073px;
  	left: 1074px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	color: #be0909;
  	text-align: left;
  	display: inline-block;
  	width: 98px;
  	height: 17px;
}
.div7 {
  	position: absolute;
  	top: 880px;
  	left: 711px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	color: #be0909;
  	text-align: left;
  	display: inline-block;
  	width: 98px;
  	height: 17px;
}
.div8 {
  	position: absolute;
  	top: 948px;
  	left: 714px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	color: #be0909;
  	text-align: left;
  	display: inline-block;
  	width: 98px;
  	height: 17px;
}
.div9 {
  	position: absolute;
  	top: 1016px;
  	left: 714px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	color: #be0909;
  	text-align: left;
  	display: inline-block;
  	width: 98px;
  	height: 17px;
}
.div10 {
  	position: absolute;
  	top: 1071px;
  	left: 711px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	color: #be0909;
  	text-align: left;
  	display: inline-block;
  	width: 98px;
  	height: 17px;
}
.div11 {
  	position: absolute;
  	top: 880px;
  	left: 349px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	color: #be0909;
  	text-align: left;
  	display: inline-block;
  	width: 98px;
  	height: 17px;
}
.div12 {
  	position: absolute;
  	top: 948px;
  	left: 349px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	color: #be0909;
  	text-align: left;
  	display: inline-block;
  	width: 98px;
  	height: 17px;
}
.div13 {
  	position: absolute;
  	top: 1016px;
  	left: 349px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	color: #be0909;
  	text-align: left;
  	display: inline-block;
  	width: 98px;
  	height: 17px;
}
.div14 {
  	position: absolute;
  	top: 1073px;
  	left: 349px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	color: #be0909;
  	text-align: left;
  	display: inline-block;
  	width: 98px;
  	height: 17px;
}
.statistics-month-child28 {
  	position: absolute;
  	top: 247px;
  	left: 176px;
  	background-color: #d4f4e4;
  	width: 1106px;
  	height: 325px;
}
.statistics-month-child29 {
  	position: absolute;
  	top: 108.5px;
  	left: 175.5px;
  	border-top: 1px solid #959997;
  	box-sizing: border-box;
  	width: 1107px;
  	height: 1px;
}
.statistics-month-child30 {
  	position: absolute;
  	top: 0px;
  	left: -1px;
  	background-color: #44bf99;
  	width: 177px;
  	height: 1176px;
}
.budget-settings {
  	position: absolute;
  	top: 137px;
  	left: 15px;
  	text-decoration: underline;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	display: inline-block;
  	width: 173px;
  	height: 20px;
}
.goals {
  	position: absolute;
  	top: 180px;
  	left: 36px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	display: inline-block;
  	width: 57px;
  	height: 18px;
}
.other-features {
  	position: absolute;
  	top: 252px;
  	left: 29px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	display: inline-block;
  	width: 126px;
  	height: 20px;
}
.target-icon {
  	position: absolute;
  	top: 176px;
  	left: 11px;
  	width: 25px;
  	height: 24px;
  	overflow: hidden;
}
.settings-icon {
  	position: absolute;
  	top: 134px;
  	left: 13px;
  	width: 24px;
  	height: 24px;
}
.makecents-logo-1-2 {
  	position: absolute;
  	top: 11px;
  	left: 17px;
  	width: 151px;
  	height: 132px;
  	object-fit: cover;
}
.total-spent-so {
  	position: absolute;
  	top: 286px;
  	left: 228px;
  	font-size: 24px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	text-align: left;
  	width: 280px;
  	height: 26px;
}
.money-left {
  	position: absolute;
  	top: 350px;
  	left: 228px;
  	font-size: 24px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	text-align: left;
  	width: 175px;
  	height: 26px;
}
.b {
  	position: absolute;
  	top: 286px;
  	left: 536px;
  	font-size: 28px;
  	text-decoration: underline;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	color: #be0909;
  	text-align: left;
  	width: 119px;
  	height: 26px;
}
.b1 {
  	position: absolute;
  	top: 350px;
  	left: 450px;
  	font-size: 28px;
  	text-decoration: underline;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	color: #44bf99;
  	text-align: left;
  	width: 96px;
  	height: 26px;
}
.b2 {
  	position: absolute;
  	top: 156px;
  	left: 569px;
  	font-size: 28px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	display: inline-block;
  	color: #44bf99;
  	text-align: left;
  	width: 119px;
  	height: 26px;
}
.statistics-month-child31 {
  	position: absolute;
  	top: 414px;
  	left: 228px;
  	border-radius: 15px;
  	background-color: #fff;
  	width: 997px;
  	height: 117px;
}
.tip {
  	position: absolute;
  	top: 431px;
  	left: 257px;
  	display: inline-block;
  	font-family: Inter;
  	text-align: left;
  	width: 139px;
  	height: 18px;
}
.you-should-focus {
  	position: absolute;
  	top: 466px;
  	left: 257px;
  	font-weight: 500;
  	font-family: Inter;
  	text-align: left;
  	display: inline-block;
  	width: 939px;
  	height: 36px;
}
.statistics1 {
  	position: absolute;
  	top: 217px;
  	left: 38px;
  	letter-spacing: 0.25px;
  	line-height: 20px;
  	font-weight: 500;
  	display: inline-block;
  	width: 80px;
  	height: 21px;
}
.vector-icon {
  	position: absolute;
  	height: 1.97%;
  	width: 1.72%;
  	top: 17.94%;
  	right: 97.19%;
  	bottom: 80.09%;
  	left: 1.09%;
  	max-width: 100%;
  	overflow: hidden;
  	max-height: 100%;
}
.image-removebg-preview-9-1 {
  	position: absolute;
  	top: 425px;
  	left: 239px;
  	width: 23px;
  	height: 24px;
  	object-fit: cover;
}
.statistics-month {
  	width: 100%;
  	position: relative;
  	background-color: #f9fbf8;
  	height: 1176px;
  	overflow-x: auto;
  	text-align: center;
  	font-size: 15px;
  	color: #000;
  	font-family: Montserrat;
}

</style>    
  	
  	<div class="statistics-month">
    		<div class="statistics-month-child">
    		</div>
    		<div class="statistics-month-item">
    		</div>
    		<div class="statistics-month-inner">
    		</div>
    		<div class="rectangle-div">
    		</div>
    		<img class="rectangle-icon" alt="" src="Rectangle 43.svg">
    		
    		<div class="line-div">
    		</div>
    		<b class="statistics">STATISTICS</b>
    		<div class="check-monthly-report" id="checkMonthlyReport">Check Monthly Report</div>
    		<b class="spent-so-far">SPENT SO FAR</b>
    		<b class="budget-this-month">BUDGET THIS MONTH:</b>
    		<b class="budget-this-month">BUDGET THIS MONTH:</b>
    		<b class="expenses">Expenses:</b>
    		<b class="total">TOTAL:</b>
    		<b class="total1">TOTAL:</b>
    		<b class="total2">TOTAL:</b>
    		<b class="bills">Bills:</b>
    		<b class="needswants">Needs/Wants:</b>
    		<div class="statistics-month-child1">
    		</div>
    		<div class="statistics-month-child2">
    		</div>
    		<div class="statistics-month-child3">
    		</div>
    		<div class="statistics-month-child4">
    		</div>
    		<div class="statistics-month-child5">
    		</div>
    		<div class="statistics-month-child6">
    		</div>
    		<div class="statistics-month-child7">
    		</div>
    		<div class="statistics-month-child8">
    		</div>
    		<div class="statistics-month-child9">
    		</div>
    		<div class="statistics-month-child10">
    		</div>
    		<div class="statistics-month-child11">
    		</div>
    		<div class="statistics-month-child12">
    		</div>
    		<div class="statistics-month-child13">
    		</div>
    		<div class="statistics-month-child14">
    		</div>
    		<div class="statistics-month-child15">
    		</div>
    		<div class="statistics-month-child16">
    		</div>
    		<div class="statistics-month-child17">
    		</div>
    		<div class="statistics-month-child18">
    		</div>
    		<div class="statistics-month-child19">
    		</div>
    		<div class="statistics-month-child20">
    		</div>
    		<div class="statistics-month-child21">
    		</div>
    		<div class="statistics-month-child22">
    		</div>
    		<div class="statistics-month-child23">
    		</div>
    		<div class="statistics-month-child24">
    		</div>
    		<div class="statistics-month-child25">
    		</div>
    		<div class="statistics-month-child26">
    		</div>
    		<div class="statistics-month-child27">
    		</div>
    		<div class="food">Food:</div>
    		<div class="water">Water:</div>
    		<div class="transportation">Transportation:</div>
    		<div class="electricity">Electricity:</div>
    		<div class="savings">Savings:</div>
    		<div class="emergency-funds">
      			<p class="emergency">Emergency</p>
      			<p class="emergency">Funds:</p>
    		</div>
    		<div class="investments">Investments:</div>
    		<div class="personal-care">Personal Care:</div>
    		<div class="gas">Gas:</div>
    		<div class="debt">Debt:</div>
    		<div class="eating-out">Eating Out:</div>
    		<div class="mobile-load">Mobile Load:</div>
    		<div class="div">₱2,110</div>
    		<div class="div1">₱680</div>
    		<div class="div2">₱1,700</div>
    		<div class="div3">₱2,250</div>
    		<div class="div4">₱2,000</div>
    		<div class="div5">₱1,050</div>
    		<div class="div6">₱7,000</div>
    		<div class="div7">₱3,700</div>
    		<div class="div8">₱3,320</div>
    		<div class="div9">₱2,850</div>
    		<div class="div10">₱10,550</div>
    		<div class="div11">₱810</div>
    		<div class="div12">₱2,360</div>
    		<div class="div13">₱399</div>
    		<div class="div14">₱5,679</div>
    		<div class="statistics-month-child28">
    		</div>
    		<div class="statistics-month-child29">
    		</div>
    		<div class="statistics-month-child30">
    		</div>
    		<div class="budget-settings">Budget Settings</div>
    		<div class="goals">Goals</div>
    		<div class="other-features">Other Features</div>
    		<img class="target-icon" alt="" src="Target.svg">
    		
    		<img class="settings-icon" alt="" src="settings.svg">
    		
    		<img class="makecents-logo-1-2" alt="" src="MakeCents Logo 1 2.png">
    		
    		<b class="total-spent-so">TOTAL SPENT (so far):</b>
    		<b class="money-left">MONEY LEFT:</b>
    		<b class="b">₱23,229</b>
    		<b class="b1">₱2,381</b>
    		<b class="b2">₱25,610</b>
    		<div class="statistics-month-child31">
    		</div>
    		<b class="tip">TIP:</b>
    		<div class="you-should-focus">You should focus on putting more of your money on your savings account. While putting all your money in the bank is great, you should leave some savings in a piggy bank so you have access to your finances quickly when an emergency arises.</div>
    		<div class="statistics1">Statistics</div>
    		<img class="vector-icon" alt="" src="Vector.svg">
    		
    		<img class="image-removebg-preview-9-1" alt="" src="image-removebg-preview (9) 1.png">
    		
  	</div>
  	
  	
  	
  	
  	<script>
    		var checkMonthlyReport = document.getElementById("checkMonthlyReport");
    		if(checkMonthlyReport) {
      			checkMonthlyReport.addEventListener("click", function (e) {
        				// Add your code here
      			});
    		}</script></body>
</html>