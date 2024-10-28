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
    $username = $_SESSION['username'];
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Fetch the current password hash from the database
    $query = "SELECT password FROM accounts WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    if ($row = mysqli_fetch_assoc($result)) {
        $hashed_password = $row['password'];

        // Check if current password matches
        if (password_verify($current_password, $hashed_password)) {
            // Check if new passwords match
            if ($new_password === $confirm_password) {
                // Hash the new password and update it in the database
                $new_hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                $update_query = "UPDATE accounts SET password='$new_hashed_password' WHERE username='$username'";

                if (mysqli_query($conn, $update_query)) {
                    header('Location: account_settings.php?status=password_success');
                } else {
                    die('Error updating password.');
                }
            } else {
                die('New passwords do not match.');
            }
        } else {
            die('Current password is incorrect.');
        }
    } else {
        die('User not found.');
    }
}
?>
