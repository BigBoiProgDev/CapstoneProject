<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Categories</title>
    <style>
        /* General page styling */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            overflow-x: hidden; /* Prevent horizontal scrolling */
        }

        /* Main container */
        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar styling */
        .sidebar {
            width: 10%; /* Sidebar will take up 10% of the width */
            min-width: 80px; /* Minimum width for very small screens */
            background-color: #36a869;
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Align items to the start */
            padding: 20px 0;
        }

        .sidebar img {
            max-width: 90%; /* Adjust logo size to fit within the sidebar */
            height: auto;
            margin-bottom: 20px; /* Add space below the logo */
        }

        /* Header section */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: white;
            border-bottom: 1px solid #ddd;
            flex: 1;
            width: 100%;
        }

        .header h1 {
            margin: 0;
            font-size: 3vw; /* Dynamic font size based on viewport width */
            color: #333;
            font-weight: bold;
        }

        .header button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1vw; /* Dynamic button text */
        }

        /* Main content styling */
        .main-content {
            padding: 2vw;
            flex: 1;
            background-color: white;
            margin-top: 20px;
        }

        /* Collapsible button */
        .collapsible {
            background-color: #f1f1f1;
            color: #333;
            cursor: pointer;
            padding: 1.5vw;
            width: 100%;
            text-align: left;
            font-size: 1.2vw;
            border: none;
            border-bottom: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
            outline: none;
        }

        .collapsible:after {
            content: '\002B'; /* Plus sign */
            font-size: 1.5vw; /* Dynamic icon size */
        }

        .active:after {
            content: "\2212"; /* Minus sign */
        }

        /* Collapsible content */
        .collapsible-content {
            display: none;
            overflow: hidden;
            padding: 0 18px;
            background-color: #f9f9f9;
        }

        .collapsible-content .item {
            display: flex;
            align-items: center;
            padding: 1vw 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .collapsible-content .item:last-child {
            border-bottom: none;
        }

        /* Icon and label */
        .item .icon {
            width: 5%;
            max-width: 30px;
            margin-right: 12px;
        }

        .item span {
            font-size: 1.1vw;
        }

        /* Add Category button */
        .add-category {
            display: inline-block;
            margin-top: 10px;
            color: #007bff;
            font-size: 1.1vw;
            cursor: pointer;
        }

        /* Modal styling */
        .modal {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Black background with transparency */
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #A5E8D8;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            width: 50%;
        }

        .modal-content button {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .leave-btn {
            background-color: #d9f1ed;
        }

        .budget-btn {
            background-color: #44B28E;
            color: white;
        }

        /* Responsive adjustments for smaller screens */
        @media (max-width: 768px) {
            .sidebar {
                width: 15%; /* Expand the sidebar a bit on smaller screens */
            }

            .header h1 {
                font-size: 5vw; /* Adjust the header font size */
            }

            .header button {
                font-size: 2.5vw; /* Adjust button font size */
            }

            .collapsible {
                font-size: 3vw;
            }

            .collapsible:after {
                font-size: 3.5vw;
            }

            .item span {
                font-size: 3vw;
            }

            .add-category {
                font-size: 3vw;
            }

            .modal-content {
                width: 80%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <img src="your-logo.png" alt="Logo">
        </div>

        <!-- Main Content and Header -->
        <div style="flex: 1">
            <!-- Header -->
            <div class="header">
                <h1>Aug 2024</h1>
                <button id="budget-btn">Set Your Budget Plan</button>
            </div>

            <!-- Main content -->
            <div class="main-content">

                <!-- Category Section -->
                <h2>Category</h2>

                <!-- Collapsible: Bills -->
                <button class="collapsible">Bills</button>
                <div class="collapsible-content">
                    <div class="item">
                        <img src="icons/electricity.png" alt="Electricity" class="icon">
                        <span>Electricity</span>
                    </div>
                    <div class="item">
                        <img src="icons/gas.png" alt="Gas/Heating" class="icon">
                        <span>Gas/Heating</span>
                    </div>
                    <div class="item">
                        <img src="icons/water.png" alt="Water" class="icon">
                        <span>Water</span>
                    </div>
                    <div class="item">
                        <img src="icons/meal_delivery.png" alt="Meal Delivery" class="icon">
                        <span>Meal Delivery</span>
                    </div>
                    <div class="add-category">+ Add Category</div>
                </div>

                <!-- Collapsible: Needs -->
                <button class="collapsible">Needs</button>
                <div class="collapsible-content">
                    <div class="item">
                        <img src="icons/groceries.png" alt="Groceries" class="icon">
                        <span>Groceries</span>
                    </div>
                    <div class="item">
                        <img src="icons/gas_needs.png" alt="Gas" class="icon">
                        <span>Gas</span>
                    </div>
                    <div class="item">
                        <img src="icons/personal_care.png" alt="Personal Care" class="icon">
                        <span>Personal Care</span>
                    </div>
                    <div class="item">
                        <img src="icons/home_maintenance.png" alt="Home Maintenance" class="icon">
                        <span>Home Maintenance</span>
                    </div>
                    <div class="item">
                        <img src="icons/auto_maintenance.png" alt="Auto Maintenance" class="icon">
                        <span>Auto Maintenance</span>
                    </div>
                </div>

                <!-- Collapsible: Wants -->
                <button class="collapsible">Wants</button>
                <div class="collapsible-content">
                    <div class="item">
                        <img src="icons/dining_out.png" alt="Dining Out" class="icon">
                        <span>Dining Out</span>
                    </div>
                    <div class="item">
                        <img src="icons/vacation.png" alt="Vacation" class="icon">
                        <span>Vacation</span>
                    </div>
                    <div class="item">
                        <img src="icons/home_decor.png" alt="Home Decor" class="icon">
                        <span>Home Decor</span>
                    </div>
                    <div class="item">
                        <img src="icons/unexpected_expenses.png" alt="Unexpected Expenses" class="icon">
                        <span>Stuff I forgot to budget for</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Section -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <h3>Your plan is taking off!</h3>
            <button class="leave-btn" onclick="closeModal()">Leave</button>
            <button class="budget-btn" onclick="redirectToPlan()">Set Your Budget Plan</button>
                </div>
    </div>

    <!-- Script for collapsibles and modal -->
    <script>
        // Collapsible functionality
        var coll = document.getElementsByClassName("collapsible");
        for (var i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }

        // Modal functionality
        var modal = document.getElementById("modal");
        var budgetBtn = document.getElementById("budget-btn");

        budgetBtn.onclick = function () {
            modal.style.display = "flex"; // Show modal
        };

        // Close modal when 'Leave' button is clicked
        function closeModal() {
            modal.style.display = "none"; // Hide the modal
        }

        function redirectToPlan() {
        window.location.href = 'category2.php'; // Specify your file name here
    }
        // Close modal when clicked outside of it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>
</html>
