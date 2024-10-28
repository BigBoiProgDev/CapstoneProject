<?php
session_start(); // Start the session

require_once('connect.php'); // Include your database connection file

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit();
}

$userId = $_SESSION['id']; // Get the user ID from the session

// Prepare and execute the SQL query to fetch categories
$sql = "SELECT * FROM categories WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch categories and display them
    while ($row = $result->fetch_assoc()) {
        echo "Category: " . htmlspecialchars($row['category_name']) . "<br>"; // Display each category
    }
} else {
    echo "No categories found for this user.";
}

$stmt->close();
$conn->close();
?>
