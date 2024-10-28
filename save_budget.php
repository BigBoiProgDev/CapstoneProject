<?php
session_start(); // Start the session
require_once 'connect.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the user is logged in
    if (!isset($_SESSION['id'])) {
        echo "You must be logged in to save a budget.";
        exit();
    }

    // Retrieve the user ID from the session
    $user_id = $_SESSION['id'];
    $category = $_POST['category'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];

    // Get the category ID based on the category name
    $stmt = $conn->prepare("SELECT id FROM categories WHERE user_id = ? AND category_name = ?");
    $stmt->bind_param("is", $user_id, $category);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $category_id = $row['id'];

        // Insert budget into budgets table
        $insertQuery = $conn->prepare("INSERT INTO budgets (id, user_id, category_id, amount, date) VALUES (?, ?, ?, ?)");
        $insertQuery->bind_param("iids", $user_id, $category_id, $amount, $date);

        if ($insertQuery->execute()) {
            header("Location: homepage.php"); // Redirect to homepage after successful insert
            exit();
        } else {
            echo "Error: " . $insertQuery->error;
        }
    } else {
        echo "Category not found for the user.";
    }
} else {
    echo "Invalid request method.";
}
?>
