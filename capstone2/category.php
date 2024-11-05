<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Category</title>

    <style>
        .category, .category * {
            box-sizing: border-box;
        }
        .category {
            background: #ffffff;
            height: 832px;
            position: relative;
            overflow: hidden;
        }
        .line-2, .line-22, .line-3, .line-32, .line-4 {
            margin-top: -1px;
            border-style: solid;
            border-color: #959997;
            border-width: 1px 0 0 0;
            width: 100%; /* Extend the lines to the full width of the screen */
            position: absolute;
            left: 0px;
        }
        .line-2 { top: 111px; }
        .line-22 { top: 181px; }
        .line-3 { top: 238px; }
        .line-32 { top: 294px; }
        .line-4 { top: 355px; }
        .aug-2024 {
            color: #000000;
            text-align: center;
            font-family: "Montserrat-Black", sans-serif;
            font-size: 24px;
            line-height: 16px;
            font-weight: 900;
            position: absolute;
            left: 153px;
            top: 53px;
        }

        .rectangle-98 {
            background: rgba(217, 217, 217, 0.3);
            width: calc(100% - 118px); /* Extend the rectangle to fit the screen width while maintaining the left margin */
            height: 651px;
            position: absolute;
            left: 118px;
            top: 181px;
        }

        .collapsible {
            background-color: #44bf99;
            color: white;
            cursor: pointer;
            padding: 10px;
            width: 100%;
            border: none;
            text-align: center;
            font-family: "Montserrat-Medium", sans-serif;
            font-size: 15px;
            position: absolute;
            top: 203px;
            left: 179px;
            transition: 0.4s;
        }

        .active, .collapsible:hover {
            background-color: #1ca380;
        }

        .collapsible-content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: #f9f9f9;
            position: absolute;
            top: 240px;
            left: 179px;
            width: calc(100% - 118px);
        }

        .bills-content, .needs-content, .wants-content {
            padding: 10px;
            color: #000;
            text-align: left;
        }

        .button-navigation-conturi {
            background: #1ca380;
            border-radius: 8px;
            padding: 13px 0px 10px 25.8px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 180px;
            height: 43px;
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .set-your-budget-plan {
            color: #ffffff;
            font-family: "Roboto-Regular", sans-serif;
            font-size: 16px;
            line-height: 24px;
        }

        .rectangle-90 {
            background: #44bf99;
            width: 121px;
            height: 836px;
            position: absolute;
            left: 2px;
            top: 0;
        }

        .logo {
            width: 105px;
            height: 100px;
            position: absolute;
            left: 10px;
            top: 11px;
            object-fit: cover;
        }

        .category2 {
            color: #5c7064;
            text-align: center;
            font-family: "Montserrat-Medium", sans-serif;
            font-size: 15px;
            position: absolute;
            left: 134px;
            top: 143px;
        }
    </style>
</head>
<body>
<div class="category">
    <div class="line-2"></div>
    <div class="rectangle-98"></div>
    <div class="line-22"></div>
    <div class="line-3"></div>
    <div class="aug-2024">Aug 2024</div>
    <div class="line-32"></div>
    <div class="line-4"></div>

    <!-- Collapsible Button for Bills -->
    <button class="collapsible" style="top: 203px;">Bills</button>
    <div class="collapsible-content" style="top: 240px;">
        <div class="bills-content">
            <!-- Add the content for Bills here -->
            <a href="category1.php">Go to Bills</a>
        </div>
    </div>

    <!-- Collapsible Button for Needs -->
    <button class="collapsible" style="top: 262px;">Needs</button>
    <div class="collapsible-content" style="top: 299px;">
        <div class="needs-content">
            <!-- Add the content for Needs here -->
            <a href="needs.php">Go to Needs</a>
        </div>
    </div>

    <!-- Collapsible Button for Wants -->
    <button class="collapsible" style="top: 313px;">Wants</button>
    <div class="collapsible-content" style="top: 350px;">
        <div class="wants-content">
            <!-- Add the content for Wants here -->
            <a href="wants.php">Go to Wants</a>
        </div>
    </div>

    <div class="button-navigation-conturi">
        <div class="set-your-budget-plan">Set Your Budget Plan</div>
        <div class="icon-arrow"></div>
    </div>
    <div class="rectangle-90"></div>
    <img class="logo" src="images/logo.png" />
    <div class="category2">CATEGORY</div>
</div>

<script>
    var collapsibles = document.getElementsByClassName("collapsible");

    for (var i = 0; i < collapsibles.length; i++) {
        collapsibles[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>

</body>
</html>
