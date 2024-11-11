<?php
require_once('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category = $_POST['category'];
    $expense_date = $_POST['expense_date'];
    $description = $_POST['description'];
    $amount = $_POST['amount'];

    $query = "INSERT INTO expenses (category, amount, description, expense_date) VALUES ('$category', '$amount', '$description', '$expense_date')";
    mysqli_query($conn, $query);

    header('Location: expensetracker.php');
    exit();
}
?>
