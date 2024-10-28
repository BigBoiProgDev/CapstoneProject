<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Category 1</title>

    <style>
.category-1,
.category-1 * {
  box-sizing: border-box;
}
.category-1 {
  background: #ffffff;
  height: 832px;
  position: relative;
  overflow: hidden;
}
.line-2 {
  margin-top: -1px;
  border-style: solid;
  border-color: #959997;
  border-width: 1px 0 0 0;
  width: 1162px;
  height: 0px;
  position: absolute;
  left: 118px;
  top: 181px;
}
.line-3 {
  margin-top: -1px;
  border-style: solid;
  border-color: #959997;
  border-width: 1px 0 0 0;
  width: 1162px;
  height: 0px;
  position: absolute;
  left: 118px;
  top: 238px;
}
.line-32 {
  margin-top: -1px;
  border-style: solid;
  border-color: #959997;
  border-width: 1px 0 0 0;
  width: 1162px;
  height: 0px;
  position: absolute;
  left: 122px;
  top: 498px;
}
.line-4 {
  margin-top: -1px;
  border-style: solid;
  border-color: #959997;
  border-width: 1px 0 0 0;
  width: 1171px;
  height: 0px;
  position: absolute;
  left: 113px;
  top: 559px;
  transform-origin: 0 0;
  transform: rotate(-0.048deg) scale(1, 1);

}
.aug-2024 {
  color: #000000;
  text-align: center;
  font-family: "Montserrat-Black", sans-serif;
  font-size: 24px;
  line-height: 16px;
  font-weight: 900;
  position: absolute;
  left: 151px;
  top: 55px;
}
.green-rectangle {
  background: #44bf99;
  width: 121px;
  height: 836px;
  position: absolute;
  left: 0px;
  top: 0px;
}
.logo {
  width: 105px;
  height: 100px;
  position: absolute;
  left: 8px;
  top: 13px;
  object-fit: cover;
}
.category {
  color: #5c7064;
  text-align: center;
  font-family: "Montserrat-Medium", sans-serif;
  font-size: 15px;
  line-height: 16px;
  font-weight: 500;
  position: absolute;
  left: 138px;
  top: 141px;
  width: 129px;
  height: 13px;
}
.line-33 {
  margin-top: -1px;
  border-style: solid;
  border-color: #959997;
  border-width: 1px 0 0 0;
  width: 1162px;
  height: 0px;
  position: absolute;
  left: 118px;
  top: 113px;
}
.line-5 {
  margin-top: -1px;
  border-style: solid;
  border-color: #959997;
  border-width: 1px 0 0 0;
  width: 1162px;
  height: 0px;
  position: absolute;
  left: 122px;
  top: 281px;
}
.line-6 {
  margin-top: -1px;
  border-style: solid;
  border-color: #959997;
  border-width: 1px 0 0 0;
  width: 1162px;
  height: 0px;
  position: absolute;
  left: 122px;
  top: 323px;
}
.line-7 {
  margin-top: -1px;
  border-style: solid;
  border-color: #959997;
  border-width: 1px 0 0 0;
  width: 1162px;
  height: 0px;
  position: absolute;
  left: 121px;
  top: 366px;
}
.line-8 {
  margin-top: -1px;
  border-style: solid;
  border-color: #959997;
  border-width: 1px 0 0 0;
  width: 1162px;
  height: 0px;
  position: absolute;
  left: 122px;
  top: 407px;
}
.line-9 {
  margin-top: -1px;
  border-style: solid;
  border-color: #959997;
  border-width: 1px 0 0 0;
  width: 1162px;
  height: 0px;
  position: absolute;
  left: 121px;
  top: 452px;
}
.gas-heating {
  color: #000000;
  text-align: center;
  font-family: "Montserrat-Medium", sans-serif;
  font-size: 15px;
  line-height: 16px;
  font-weight: 500;
  position: absolute;
  left: 91px;
  top: 280px;
  width: 313px;
}
.rectangle-98 {
  background: rgba(217, 217, 217, 0.5);
  width: 1160px;
  height: 59px;
  position: absolute;
  left: 121px;
  top: 181px;
}
.bills {
  color: #000000;
  text-align: center;
  font-family: "Montserrat-Medium", sans-serif;
  font-size: 15px;
  line-height: 16px;
  font-weight: 500;
  position: absolute;
  left: 171px;
  top: 203px;
  width: 63px;
  height: 14px;
}
.electricity {
  color: #000000;
  text-align: center;
  font-family: "Montserrat-Medium", sans-serif;
  font-size: 15px;
  line-height: 16px;
  font-weight: 500;
  position: absolute;
  left: 82px;
  top: 250px;
  width: 313px;
}
.water {
  color: #000000;
  text-align: center;
  font-family: "Montserrat-Medium", sans-serif;
  font-size: 15px;
  line-height: 16px;
  font-weight: 500;
  position: absolute;
  left: 67px;
  top: 335px;
  width: 313px;
}
.meal-delivery {
  color: #000000;
  text-align: center;
  font-family: "Montserrat-Medium", sans-serif;
  font-size: 15px;
  line-height: 16px;
  font-weight: 500;
  position: absolute;
  left: 91px;
  top: 378px;
  width: 313px;

}
.add-category {
  color: var(--labels-primary, #000000);
  text-align: left;
  font-family: "Montserrat-Medium", sans-serif;
  font-size: 15px;
  line-height: 22px;
  letter-spacing: -0.43px;
  font-weight: 500;
  position: relative;
}
.button-navigation-conturi {
  background: var(--material-theme-ref-primary-primary60, #1ca380);
  border-radius: 8px;
  padding: 13px 0px 10px 25.8px;
  display: flex;
  flex-direction: row;
  gap: 10px;
  align-items: center;
  justify-content: center;
  width: 180px;
  height: 43px;
  position: absolute;
  left: calc(50% - -405px);
  top: 42px;
}
.set-your-budget-plan {
  color: var(--neutral-white-fff, #ffffff);
  text-align: left;
  font-family: "Roboto-Regular", sans-serif;
  font-size: 16px;
  line-height: 24px;
  letter-spacing: 0.5px;
  font-weight: 400;
  position: relative;
}
.icon-arrow {
  flex-shrink: 0;
  width: 16px;
  height: 16px;
  position: relative;
  transform-origin: 0 0;
  transform: rotate(0deg) scale(1, 1);
  overflow: hidden;
}

    </style>
</head>
<body>
<div class="category-1">
  <div class="line-2"></div>
  <div class="line-3"></div>
  <div class="line-32"></div>
  <div class="line-4"></div>
  <div class="needs">
  
    <br />
     
    <br />
</div>
  <div class="aug-2024">Aug 2024</div>
  <div class="green-rectangle"></div>
  <img class="logo" src="images/logo.png" />
  <div class="category">CATEGORY</div>
  <div class="line-33"></div>
  <div class="line-5"></div>
  <div class="line-6"></div>
  <div class="line-7"></div>
  <div class="line-8"></div>
  <div class="line-9"></div>
  <div class="gas-heating">
    <br />
    🍳️ Gas/Heating
  </div>
  <div class="rectangle-98"></div>
  <div class="bills">Bills</div>
  <div class="electricity">⚡️ Electricity</div>
  <div class="water">💧 Water</div>
  <div class="meal-delivery">🥗 Meal delivery</div>
  <!-- Button wrapped with anchor tag for clickability -->
  <a href="category2.php" class="button-navigation-conturi">
    <div class="set-your-budget-plan">Set Your Budget Plan</div>
    <div class="icon-arrow"></div>
  </a>
</div>

</body>
</html>