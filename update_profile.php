<?php
session_start();

// Ensure the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

// Connect to the database
require('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $username = $_SESSION['username'];

    // Validate email
    if (!filter_var($new_email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format.');
    }

    // Update email in the database
    $query = "UPDATE accounts SET email='$new_email' WHERE username='$username'";
    if (mysqli_query($conn, $query)) {
        // Update session email
        $_SESSION['email'] = $new_email;
        header('Location: account_settings.php?status=success');
    } else {
        die('Error updating email.');
    }
}
?>
