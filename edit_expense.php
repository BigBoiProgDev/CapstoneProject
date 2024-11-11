<?php
session_start();
require_once('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['expense_id'])) {
    $expense_id = (int)$_POST['expense_id'];
    $expense_date = mysqli_real_escape_string($conn, $_POST['expense_date']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $amount = (float)$_POST['amount'];

    $update_query = "UPDATE expenses SET expense_date = '$expense_date', description = '$description', amount = '$amount' WHERE id = $expense_id";

    if (mysqli_query($conn, $update_query)) {
        header('Location: expensetracker.php');
    } else {
        echo "Error updating expense: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}
?>
