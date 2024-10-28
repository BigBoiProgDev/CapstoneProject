<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category 4</title>
    <style>
         .category-4,
.category-4 * {
    box-sizing: border-box;
}

.category-4 {
    background: #ffffff;
    height: 852px;
    position: relative;
    overflow: hidden;
}

.rectangle-100 {
    background: rgba(217, 217, 217, 0.50);
    width: 1158px;
    height: 59px;
    position: absolute;
    left: 122px;
    top: 793px;
}

.weui-arrow-outlined {
    width: 13px;
    height: 19px;
    position: absolute;
    left: 160px;
    top: 820px;
    transform: translate(0px, 0px);
    ;
    overflow: visible;
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

.wants {
    color: #000000;
    text-align: center;
    font-family: 'Montserrat-Medium', sans-serif;
    font-size: 15px;
    line-height: 16px;
    font-weight: 500;
    position: absolute;
    left: 192px;
    top: 820px;
    width: 63px;
    height: 13px;
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

.sheesh-1 {
    width: 1280px;
    height: 852px;
    position: absolute;
    left: 0px;
    top: 0px;
    filter: blur(4.5px);
    object-fit: cover;
}

.rectangle-99 {
    background: rgba(217, 217, 217, 0.50);
    width: 1160px;
    height: 59px;
    position: absolute;
    left: 116px;
    top: 452px;
}

.line-3 {
    margin-top: -1px;
    border-style: solid;
    border-color: #959997;
    border-width: 1px 0 0 0;
    width: 1162px;
    height: 0px;
    position: absolute;
    left: 115px;
    top: 511px;
}

.needs {
    color: #000000;
    text-align: center;
    font-family: 'Montserrat-Medium', sans-serif;
    font-size: 15px;
    line-height: 16px;
    font-weight: 500;
    position: absolute;
    left: 173px;
    top: 473px;
    width: 71px;
    height: 20px;
}

.weui-arrow-outlined2 {
    width: 12px;
    height: 19px;
    position: absolute;
    left: 154px;
    top: 476px;
    transform: translate(0px, 0px);
    ;
    overflow: visible;
}

.line-10 {
    margin-top: -1px;
    border-style: solid;
    border-color: #959997;
    border-width: 1px 0 0 0;
    width: 1162px;
    height: 0px;
    position: absolute;
    left: 116px;
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
    left: 114px;
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
    left: 115px;
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
    left: 116px;
    top: 738px;
}

.groceries {
    color: #000000;
    text-align: center;
    font-family: 'Montserrat-Medium', sans-serif;
    font-size: 15px;
    line-height: 16px;
    font-weight: 500;
    position: absolute;
    left: 187px;
    top: 529px;
}

.gas {
    color: #000000;
    text-align: center;
    font-family: 'Montserrat-Medium', sans-serif;
    font-size: 15px;
    line-height: 16px;
    font-weight: 500;
    position: absolute;
    left: 188px;
    top: 580px;
}

.personal-care {
    color: #000000;
    text-align: center;
    font-family: 'Montserrat-Medium', sans-serif;
    font-size: 15px;
    line-height: 16px;
    font-weight: 500;
    position: absolute;
    left: 188px;
    top: 640px;
    width: 125px;
    height: 21px;
}

.home-maintenance {
    color: #000000;
    text-align: center;
    font-family: 'Montserrat-Medium', sans-serif;
    font-size: 15px;
    line-height: 16px;
    font-weight: 500;
    position: absolute;
    left: 188px;
    top: 698px;
}

.auto-maintenance {
    color: #000000;
    text-align: center;
    font-family: 'Montserrat-Medium', sans-serif;
    font-size: 15px;
    line-height: 16px;
    font-weight: 500;
    position: absolute;
    left: 187px;
    top: 755px;
}

.rectangle-102 {
    border-radius: 0px;
    width: 1286px;
    height: 397px;
    position: absolute;
    left: 0px;
    top: 442px;
    overflow: visible;
}

.rectangle-103 {
    background: #a0e9d6;
    border-style: solid;
    border-color: #000000;
    border-width: 0px 1px 1px 1px;
    width: 1288px;
    height: 208px;
    position: absolute;
    left: -4px;
    top: 644px;
}

.your-plan-is-taking-off {
    color: #000000;
    text-align: center;
    font-family: 'Montserrat-ExtraBold', sans-serif;
    font-size: 24px;
    line-height: 16px;
    font-weight: 800;
    position: absolute;
    left: 440px;
    top: 563px;
    width: 483px;
    height: 41px;
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
    width: 189px;
    height: 42px;
    position: absolute;
    left: calc(50% - -42px);
    top: 675px;
}

.set-your-budget-plan {
    color: var(--neutral-white-fff, #ffffff);
    text-align: left;
    font-family: 'Roboto-Medium', sans-serif;
    font-size: 16px;
    line-height: 24px;
    letter-spacing: 0.5px;
    font-weight: 500;
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

.button-navigation-conturi2 {
    background: #d4f4e4;
    border-radius: 8px;
    padding: 13px 7px 13px 0px;
    display: flex;
    flex-direction: row;
    gap: 10px;
    align-items: center;
    justify-content: center;
    width: 135px;
    height: 43px;
    position: absolute;
    left: calc(50% - 141px);
    top: 675px;
}

.vector {
    flex-shrink: 0;
    width: 8.37px;
    height: 14.22px;
    position: relative;
    overflow: visible;
}

.leave {
    color: #086100;
    text-align: left;
    font-family: 'Roboto-Regular', sans-serif;
    font-size: 20px;
    line-height: 24px;
    letter-spacing: 0.5px;
    font-weight: 400;
    position: relative;
}
    </style>
    <head>
        <body>
        <div class="category-4">
    <div class="rectangle-100">
    </div><svg class="weui-arrow-outlined" width="19" height="13" viewBox="0 0 19 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_1_2348)">
            <path d="M5.20992 2.65632L4.37076 3.80574L8.94421 10.0663C9.0175 10.1672 9.10464 10.2473 9.20063 10.302C9.29662 10.3566 9.39956 10.3848 9.50353 10.3848C9.60749 10.3848 9.71043 10.3566 9.80642 10.302C9.90241 10.2473 9.98956 10.1672 10.0628 10.0663L14.6387 3.80574L13.7995 2.6574L9.50471 8.5334L5.20992 2.65632Z" fill="black" />
        </g>
        <defs>
            <clipPath id="clip0_1_2348">
                <rect width="13" height="19" fill="white" transform="matrix(0 1 1 0 0 0)" />
            </clipPath>
        </defs>
    </svg>
    <div class="line-4">
    </div>
    <div class="wants"> Wants </div>
    <div class="line-14">
    </div><img class="sheesh-1" src="sheesh-10.png" />
    <div class="rectangle-99">
    </div>
    <div class="line-3">
    </div>
    <div class="needs"> Needs<br /> <br /> </div><svg class="weui-arrow-outlined2" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_1_2361)">
            <path d="M5.20992 2.45199L4.37076 3.51299L8.94421 9.29199C9.0175 9.38514 9.10464 9.45907 9.20063 9.50952C9.29662 9.55997 9.39956 9.58594 9.50353 9.58594C9.60749 9.58594 9.71043 9.55997 9.80642 9.50952C9.90241 9.45907 9.98956 9.38514 10.0628 9.29199L14.6387 3.51299L13.7995 2.45299L9.50471 7.87699L5.20992 2.45199Z" fill="black" />
        </g>
        <defs>
            <clipPath id="clip0_1_2361">
                <rect width="12" height="19" fill="white" transform="matrix(0 1 1 0 0 0)" />
            </clipPath>
        </defs>
    </svg>
    <div class="line-10">
    </div>
    <div class="line-11">
    </div>
    <div class="line-12">
    </div>
    <div class="line-13">
    </div>
    <div class="groceries"> 🛒 Groceries </div>
    <div class="gas"> ⛽️ Gas </div>
    <div class="personal-care"> 💆 Personal Care<br /> <br /> <br /> </div>
    <div class="home-maintenance"> 🛠️ Home maintenance </div>
    <div class="auto-maintenance"> 🚗 Auto maintenance </div><svg class="rectangle-102" width="1286" height="397" viewBox="0 0 1286 397" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M34 -0.5C14.9462 -0.5 -0.5 14.9462 -0.5 34V363C-0.5 382.054 14.9462 397.5 34 397.5H1252C1271.05 397.5 1286.5 382.054 1286.5 363V34C1286.5 14.9462 1271.05 -0.5 1252 -0.5H34Z" fill="#A0E9D6" stroke="black" />
    </svg>
    <div class="rectangle-103">
    </div>
    <div class="your-plan-is-taking-off"> Your plan is taking off! </div>
    <div class="button-navigation-conturi">
        <div class="set-your-budget-plan"> Set Your Budget Plan! </div>
        <div class="icon-arrow">
        </div>
    </div>
    <div class="button-navigation-conturi2">
        <svg class="vector" width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.68555 13.3522L7.42688 14.6109L0.315768 7.49978L7.42688 0.388672L8.68555 1.64734L2.8331 7.49978L8.68555 13.3522Z" fill="#086100" />
        </svg>
        <div class="leave"> Leave </div>
    </div>
</div>
        </body>
    </head>
