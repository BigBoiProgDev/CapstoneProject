<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Category 2</title>

    <style>
.category-2,
.category-2 * {
  box-sizing: border-box;
}
.category-2 {
  background: #ffffff;
  height: 852px;
  position: relative;
  overflow: hidden;
}
.rectangle-100 {
  background: rgba(217, 217, 217, 0.5);
  width: 1158px;
  height: 59px;
  position: absolute;
  left: 122px;
  top: 793px;
}
.rectangle-98 {
  background: rgba(217, 217, 217, 0.5);
  width: 1160px;
  height: 59px;
  position: absolute;
  left: 122px;
  top: 179px;
}
.rectangle-99 {
  background: rgba(217, 217, 217, 0.5);
  width: 1161px;
  height: 59px;
  position: absolute;
  left: 119px;
  top: 452px;
}
.weui-arrow-outlined {
  width: 13px;
  height: 19px;
  position: absolute;
  left: 160px;
  top: 820px;
  transform: translate(0px, 0px);
  overflow: visible;
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
  left: 121px;
  top: 511px;
}
.line-4 {
  margin-top: -1px;
  border-style: solid;
  border-color: #959997;
  border-width: 1px 0 0 0;
  width: 1171px;
  height: 0px;
  position: absolute;
  left: 112px;
  top: 869px;
  transform-origin: 0 0;
  transform: rotate(-0.048deg) scale(1, 1);
}
.bills {
  color: #000000;
  text-align: center;
  font-family: "Montserrat-Medium", sans-serif;
  font-size: 15px;
  line-height: 16px;
  font-weight: 500;
  position: absolute;
  left: 179px;
  top: 203px;
  width: 63px;
  height: 14px;
}
.needs {
  color: #000000;
  text-align: center;
  font-family: "Montserrat-Medium", sans-serif;
  font-size: 15px;
  line-height: 16px;
  font-weight: 500;
  position: absolute;
  left: 179px;
  top: 473px;
  width: 71px;
  height: 20px;
}
.wants {
  color: #000000;
  text-align: center;
  font-family: "Montserrat-Medium", sans-serif;
  font-size: 15px;
  line-height: 16px;
  font-weight: 500;
  position: absolute;
  left: 192px;
  top: 820px;
  width: 63px;
  height: 13px;
}
.weui-arrow-outlined2 {
  width: 13px;
  height: 19px;
  position: absolute;
  left: 156px;
  top: 203px;
  transform: translate(0px, 0px);
  overflow: visible;
}
.weui-arrow-outlined3 {
  width: 12px;
  height: 19px;
  position: absolute;
  left: 160px;
  top: 476px;
  transform: translate(0px, 0px);
  overflow: visible;
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
.rectangle-91 {
  background: #44bf99;
  width: 121px;
  height: 896px;
  position: absolute;
  left: 0px;
  top: 0px;
}
.logo{
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
  top: 131px;
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
.line-10 {
  margin-top: -1px;
  border-style: solid;
  border-color: #959997;
  border-width: 1px 0 0 0;
  width: 1162px;
  height: 0px;
  position: absolute;
  left: 122px;
  top: 563px;
}
.line-11 {
  margin-top: -1px;
  border-style: solid;
  border-color: #959997;
  border-width: 1px 0 0 0;
  width: 1162px;
  height: 0px;
  position: absolute;
  left: 120px;
  top: 619px;
}
.line-12 {
  margin-top: -1px;
  border-style: solid;
  border-color: #959997;
  border-width: 1px 0 0 0;
  width: 1162px;
  height: 0px;
  position: absolute;
  left: 121px;
  top: 679px;
}
.line-13 {
  margin-top: -1px;
  border-style: solid;
  border-color: #959997;
  border-width: 1px 0 0 0;
  width: 1162px;
  height: 0px;
  position: absolute;
  left: 122px;
  top: 738px;
}
.line-14 {
  margin-top: -1px;
  border-style: solid;
  border-color: #959997;
  border-width: 1px 0 0 0;
  width: 1162px;
  height: 0px;
  position: absolute;
  left: 120px;
  top: 793px;
}
.groceries {
  color: #000000;
  text-align: center;
  font-family: "Montserrat-Medium", sans-serif;
  font-size: 15px;
  line-height: 16px;
  font-weight: 500;
  position: absolute;
  left: 193px;
  top: 529px;
}
.gas {
  color: #000000;
  text-align: center;
  font-family: "Montserrat-Medium", sans-serif;
  font-size: 15px;
  line-height: 16px;
  font-weight: 500;
  position: absolute;
  left: 194px;
  top: 580px;
}
.personal-care {
  color: #000000;
  text-align: center;
  font-family: "Montserrat-Medium", sans-serif;
  font-size: 15px;
  line-height: 16px;
  font-weight: 500;
  position: absolute;
  left: 194px;
  top: 640px;
  width: 125px;
  height: 21px;
}
.home-maintenance {
  color: #000000;
  text-align: center;
  font-family: "Montserrat-Medium", sans-serif;
  font-size: 15px;
  line-height: 16px;
  font-weight: 500;
  position: absolute;
  left: 194px;
  top: 698px;
}
.auto-maintenance {
  color: #000000;
  text-align: center;
  font-family: "Montserrat-Medium", sans-serif;
  font-size: 15px;
  line-height: 16px;
  font-weight: 500;
  position: absolute;
  left: 193px;
  top: 755px;
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
  left: calc(50% - -394px);
  top: 41px;
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
    <div class="category-2">
  <div class="rectangle-100"></div>
  <div class="rectangle-98"></div>
  <div class="rectangle-99"></div>
  <img class="weui-arrow-outlined" src="weui-arrow-outlined0.svg" />
  <div class="line-2"></div>
  <div class="line-3"></div>
  <div class="line-32"></div>
  <div class="line-4"></div>
  <div class="bills">Bills</div>
  <div class="needs">
    Needs
    <br />
     
    <br />
  </div>
  <div class="wants">Wants</div>
  <img class="weui-arrow-outlined2" src="weui-arrow-outlined1.svg" />
  <img class="weui-arrow-outlined3" src="weui-arrow-outlined2.svg" />
  <div class="aug-2024">Aug 2024</div>
  <div class="rectangle-91"></div>
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
  <div class="electricity">⚡️ Electricity</div>
  <div class="water">💧 Water</div>
  <div class="meal-delivery">🥗 Meal delivery</div>
  <div class="line-10"></div>
  <div class="line-11"></div>
  <div class="line-12"></div>
  <div class="line-13"></div>
  <div class="line-14"></div>
  <div class="groceries">🛒 Groceries</div>
  <div class="gas">⛽️ Gas</div>
  <div class="personal-care">
    💆 Personal Care
    <br />
     
    <br />
     
    <br />
  </div>
  <div class="home-maintenance">🛠️ Home maintenance</div>
  <div class="auto-maintenance">🚗 Auto maintenance</div>
  <div class="sidebar-row-add-item">
</div>
  </div>
  <div class="button-navigation-conturi">
    <a href="category3.php" style="text-decoration: none; color: inherit;">
        <div class="set-your-budget-plan">Set Your Budget Plan</div>
    </a>
    <div class="icon-arrow"></div>
</div>
  </div>
</div>
</body>
</html>