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

        /* Add button */
        .add-btn {
            display: inline-block; /* Always visible now */
            background-color: #00c7a4;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 5px 10px;
            font-size: 1.1vw;
            cursor: pointer;
        }

        /* Modal styling */
        .modal {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Transparent background */
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            width: 30%;
        }

        .modal-content h3 {
            margin-top: 0;
        }

        .modal-content input,
        .modal-content select {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }

        .modal-content button {
            padding: 10px 20px;
            margin-top: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .cancel-btn {
            background-color: #ff4c4c;
            color: white;
        }

        .save-btn {
            background-color: #00c7a4;
            color: white;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <img src="makecents.png" alt="Logo">
        </div>

        <!-- Main Content and Header -->
        <div style="flex: 1">
            <!-- Header -->
            <div class="header">
                <h1>Aug 2024</h1>
            </div>

            <!-- Main content -->
            <div class="main-content">

                <!-- Category Section -->
                <h2>Category</h2>

                <!-- Collapsible: Bills -->
                <button class="collapsible">Bills</button>
                <div class="collapsible-content">
                    <div class="item">
                        <span>Electricity</span>
                        <button class="add-btn" data-category="Electricity">Add</button>
                    </div>
                    <div class="item">
                        <span>Gas/Heating</span>
                        <button class="add-btn" data-category="Gas/Heating">Add</button>
                    </div>
                    <div class="item">
                        <span>Water</span>
                        <button class="add-btn" data-category="Water">Add</button>
                    </div>
                </div>

                <!-- Collapsible: Needs -->
                <button class="collapsible">Needs</button>
                <div class="collapsible-content">
                    <div class="item">
                        <span>Groceries</span>
                        <button class="add-btn" data-category="Groceries">Add</button>
                    </div>
                    <div class="item">
                        <span>Gas</span>
                        <button class="add-btn" data-category="Gas">Add</button>
                    </div>
                </div>

                <!-- Collapsible: Wants -->
                <button class="collapsible">Wants</button>
                <div class="collapsible-content">
                    <div class="item">
                        <span>Dining Out</span>
                        <button class="add-btn" data-category="Dining Out">Add</button>
                    </div>
                    <div class="item">
                        <span>Vacation</span>
                        <button class="add-btn" data-category="Vacation">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Section -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <h3 id="modal-title">How much do you need for?</h3>
            <form action="save_budget.php" method="POST"> <!-- Form starts here -->
                <input type="hidden" id="category" name="category"> <!-- Hidden field for category -->
                <input type="text" id="amount" name="amount" placeholder="P 00.00" required>
                <select id="date" name="date" required>
                    <option value="Last Day of the Month">Last Day of the Month</option>
                    <option value="15th of the Month">15th of the Month</option>
                </select>
                <button type="button" class="cancel-btn" onclick="closeModal()">Cancel</button>
                <button type="submit" class="save-btn">Save</button> <!-- Submit button -->
            </form> <!-- Form ends here -->
        </div>
    </div>

    <!-- Script for functionality -->
    <script>
        // Toggle collapsible sections
        const collapsibleButtons = document.getElementsByClassName("collapsible");
        Array.from(collapsibleButtons).forEach(button => {
            button.addEventListener("click", function () {
                this.classList.toggle("active");
                const content = this.nextElementSibling;
                content.style.display = (content.style.display === "block") ? "none" : "block"; // Toggle display
            });
        });

        // Modal functionality
        const modal = document.getElementById('modal');
        const modalTitle = document.getElementById('modal-title');
        const amountInput = document.getElementById('amount');

        // Add event listeners to Add buttons
        const addBtns = document.querySelectorAll('.add-btn');
        addBtns.forEach(button => {
            button.addEventListener('click', function () {
                const category = this.getAttribute('data-category');
                modalTitle.textContent = `How much do you need for ${category}?`;
                document.getElementById('category').value = category; // Set category value
                modal.style.display = 'flex'; // Show modal
            });
        });

        function closeModal() {
            modal.style.display = 'none'; // Hide modal
            amountInput.value = ''; // Clear input field
            document.getElementById('category').value = ''; // Clear category field
        }

        // Close modal on click outside
        window.onclick = function (event) {
            if (event.target === modal) {
                closeModal();
            }
        };
    </script>
</body>
</html>
