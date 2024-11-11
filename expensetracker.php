<?php
session_start();
require_once('connect.php');

// Handle adding a new category if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new_category'])) {
    $new_category = mysqli_real_escape_string($conn, $_POST['new_category']);
    // Only add a category if it doesn't already exist in any row
    $check_category_query = "SELECT COUNT(*) as count FROM expenses WHERE category = '$new_category'";
    $result = mysqli_query($conn, $check_category_query);
    $row = mysqli_fetch_assoc($result);
    
    if ($row['count'] == 0) {
        // If the category doesn't exist, insert a new entry with no initial expenses
        $insert_category_query = "INSERT INTO expenses (category, amount, description, expense_date) VALUES ('$new_category', 0, '', CURDATE())";
        mysqli_query($conn, $insert_category_query);
    }
}

$category_query = "SELECT DISTINCT category FROM expenses";
$category_result = mysqli_query($conn, $category_query);
$categories = [];
while ($row = mysqli_fetch_assoc($category_result)) {
    $categories[] = $row['category'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
    <title>Expense Tracker</title>
    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            background-color: #2fa674;
            width: 250px;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
        }
        .sidebar img {
            width: 150px;
            margin-bottom: 20px;
        }
        .sidebar nav {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
            padding-left: 25px;
        }
        .sidebar nav a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            margin: 10px 0;
        }
        .sidebar nav a:hover {
            text-decoration: underline;
        }
        .content {
            margin-left: 250px;
            flex-grow: 1;
            background-color: #F5F5F5;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }
        h1 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .section {
            background-color: #E0E0E0;
            margin-bottom: 15px;
            border: 1px solid #CCC;
            border-radius: 5px;
        }
        .section-header {
            background-color: #D9D9D9;
            padding: 10px;
            font-size: 18px;
            display: flex;
            justify-content: space-between;
            cursor: pointer;
            font-weight: bold;
        }
        .section-content {
            display: none;
            padding: 10px;
            background-color: #FFF;
        }
        .expense-entry {
            margin-bottom: 10px;
            padding: 8px;
            border-bottom: 1px solid #DDD;
        }
        .amount {
            color: #D9534F;
            font-weight: bold;
        }
        .add-expense {
            color: #007BFF;
            font-size: 14px;
            cursor: pointer;
            display: inline-block;
            margin: 10px 0;
        }
        .add-expense:hover {
            text-decoration: underline;
        }
        .expense-form {
            display: none;
            margin-top: 10px;
            background-color: #F8F8F8;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #CCC;
        }
        .add-category-form {
            display: none;
            margin-top: 10px;
            background-color: #FFF;
            padding: 10px;
            border: 1px solid #CCC;
            border-radius: 5px;
        }
        .add-category {
            color: #28a745;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }
        .add-category:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <img src="images/make_cents_logo.png" alt="Logo">
        <nav>
            <a href="dashboard.php">Back to Home Page</a>
            <a href="#">Goals</a>
            <a href="#">Expense Tracker</a>
            <a href="#">Statistics</a>
            <a href="account_settings.php">Account Settings</a>
        </nav>
    </div>

    <div class="content">
        <h1>Expense Tracker</h1>

        <?php foreach ($categories as $category): ?>
            <div class="section">
                <div class="section-header"><?php echo $category; ?> <span>&#9662;</span></div>
                <div class="section-content">
                    <?php
                    // Display expenses for the current category
                    $expense_query = "SELECT * FROM expenses WHERE category='$category' AND description != '' ORDER BY expense_date DESC";
                    $expense_result = mysqli_query($conn, $expense_query);
                    
                    if (mysqli_num_rows($expense_result) > 0):
                        while ($expense = mysqli_fetch_assoc($expense_result)): ?>
                            <div class="expense-entry">
                                <div>Date: <?php echo $expense['expense_date']; ?></div>
                                <div>Description: <?php echo $expense['description']; ?></div>
                                <div>Amount Spent: <span class="amount">₱<?php echo $expense['amount']; ?></span></div>
                            </div>
                        <?php endwhile; 
                    else: ?>
                        <div class="expense-entry"><div>No expenses yet.</div></div>
                    <?php endif; ?>
                    
                    <!-- Expense form for each category -->
                    <div class="add-expense" onclick="toggleExpenseForm('<?php echo $category; ?>')">+ Add Expense</div>
                    <div class="expense-form" id="form-<?php echo $category; ?>" style="display:none;">
                        <form action="add_expense.php" method="POST">
                            <label for="expense_date">Date:</label>
                            <input type="date" name="expense_date" required>
                            <label for="description">Description:</label>
                            <input type="text" name="description" required>
                            <label for="amount">Amount Spent:</label>
                            <input type="number" name="amount" step="0.01" required>
                            <input type="hidden" name="category" value="<?php echo $category; ?>">
                            <button type="submit">Add Expense</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Add new category section -->
        <div class="add-category" onclick="toggleCategoryForm()">+ Add Category</div>
        <div class="category-form" style="display:none;">
            <form method="POST">
                <label for="new_category">Category Name:</label>
                <input type="text" name="new_category" required>
                <button type="submit">Add Category</button>
            </form>
        </div>
    </div>

    <script>
        // Toggle expense form visibility for each category
        function toggleExpenseForm(category) {
            const form = document.getElementById(`form-${category}`);
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }

        // Toggle the add category form
        function toggleCategoryForm() {
            const form = document.querySelector('.category-form');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }

        // Toggle section content for category
        document.querySelectorAll('.section-header').forEach(header => {
            header.addEventListener('click', () => {
                const content = header.nextElementSibling;
                content.style.display = content.style.display === 'block' ? 'none' : 'block';
            });
        });
    </script>
</body>
</html>