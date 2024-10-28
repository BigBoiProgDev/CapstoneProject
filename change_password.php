<?php
// change_password.php
session_start();
require 'database.php'; // This file connects to your MySQL database

// Get user ID from session (you must implement login/session logic)
$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if new passwords match
    if ($new_password !== $confirm_password) {
        echo "New passwords do not match!";
        exit;
    }

    // Check current password (you can hash and compare if stored hashed)
    $stmt = $pdo->prepare('SELECT password FROM accounts WHERE ID = ?');
    $stmt->execute([$user_id]);
    $user = $stmt->fetch();

    if (password_verify($current_password, $user['password'])) {
        // Insert old password into password_history
        $insert_history = $pdo->prepare('INSERT INTO password_history (account_id, old_password) VALUES (?, ?)');
        $insert_history->execute([$user_id, $user['password']]);

        // Hash the new password (always hash before storing!)
        $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

        // Update the accounts table with the new password
        $update_password = $pdo->prepare('UPDATE accounts SET password = ? WHERE ID = ?');
        $update_password->execute([$hashed_password, $user_id]);

        echo "Password successfully changed!";
    } else {
        echo "Current password is incorrect!";
    }
}
?>
