<?php
require_once('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['expense_id'])) {
    $expense_id = (int)$_POST['expense_id'];
    $delete_query = "DELETE FROM expenses WHERE id = $expense_id";

    if (mysqli_query($conn, $delete_query)) {
        header('Location: expensetracker.php');
    } else {
        echo "Error deleting expense: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}
?>
