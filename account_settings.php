<?php
session_start();
require_once('connect.php');

$account_id = $_SESSION['id']; 
$error_message = $success_message = '';
$action = isset($_GET['action']) ? $_GET['action'] : 'username'; 

if (isset($_POST['update_username'])) {
    $new_username = $_POST['username'];

    if (empty($new_username)) {
        $error_message = "Username cannot be empty.";
    } else {
        $update_username_query = "UPDATE accounts SET username = '$new_username' WHERE ID = $account_id";
        $result = mysqli_query($conn, $update_username_query);

        if ($result) {
            $_SESSION['username'] = $new_username; 
            $success_message = "Username updated successfully!";
        } else {
            $error_message = "Error updating username. Please try again.";
        }
    }
}

if (isset($_POST['update_password'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
        $error_message = "All fields are required.";
    } else {
        $current_password_md5 = MD5($current_password);

        $check_current_password_query = "SELECT password FROM accounts WHERE ID = $account_id";
        $result = mysqli_query($conn, $check_current_password_query);
        $row = mysqli_fetch_assoc($result);

        if ($current_password_md5 === $row['password']) {
            if ($new_password !== $confirm_password) {
                $error_message = "Passwords do not match.";
            } else {
                $hashed_password = MD5($new_password);

                $insert_password_history = "INSERT INTO password_history (account_id, old_password) VALUES ($account_id, '{$row['password']}')";
                $history_result = mysqli_query($conn, $insert_password_history);

                if ($history_result) {
                    $update_password_query = "UPDATE accounts SET password = '$hashed_password' WHERE ID = $account_id";
                    $result = mysqli_query($conn, $update_password_query);

                    if ($result) {
                        $success_message = "Password updated successfully!";
                    } else {
                        $error_message = "Error updating password. Please try again.";
                    }
                } else {
                    $error_message = "Error saving password history. Please try again.";
                }
            }
        } else {
            $error_message = "Current password is incorrect.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>MakeCents | Account Settings</title>
</head>

<body>

<div class="settings-container">
    <div class="sidebar">
        <h2>Account Settings</h2>
        <ul>
            <li><a href="account_settings.php?action=username">Change Username</a></li>
            <li><a href="account_settings.php?action=password">Change Password</a></li>
            <li><a href="dashboard.php">Back to Dashboard</a></li>
        </ul>
    </div>
    
    <div class="content fade-content">
        <h2>Account Settings</h2>

        <?php if (!empty($error_message)): ?>
            <div style="color: red;"><?php echo $error_message; ?></div>
        <?php elseif (!empty($success_message)): ?>
            <div style="color: green;"><?php echo $success_message; ?></div>
        <?php endif; ?>

    <div class="input-group">
        <?php if ($action === 'username'): ?>
            <form method="POST">
                <header>Update Your Username</header>
                <label for="username">New Username:</label>
                <input type="text" name="username" id="username" required>
                <br><br>
                <input type="submit" name="update_username" value="Update Username" class="update-btn">
            </form>    
    </div>

        <?php elseif ($action === 'password'): ?>
            <form method="POST">
                <header>Update Password</header>

                <div class="input-group password-container">
                    <label for="current_password">Current Password:</label>
                    <input type="password" id="current_password" name="current_password" required>
                    <button type="button" class="eye-btn" id="toggleCurrentPassword">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>

                <div class="input-group password-container">
                    <label for="password">New Password:</label>
                    <input type="password" id="password" name="password" required>
                    <button type="button" class="eye-btn" id="toggleNewPassword">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>

                <div class="input-group password-container">
                    <label for="confirm_password">Confirm New Password:</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                    <button type="button" class="eye-btn" id="toggleConfirmPassword">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>

                <div>
                    <input type="submit" name="update_password" value="Update Password" class="update-btn">
                </div>
            </form>
        <?php endif; ?>
    </div>
</div>

<script>
    document.getElementById('toggleCurrentPassword')?.addEventListener('click', function() {
        const passwordField = document.getElementById('current_password');
        const fieldType = passwordField.type === 'password' ? 'text' : 'password';
        passwordField.type = fieldType;
    });

    document.getElementById('toggleNewPassword')?.addEventListener('click', function() {
        const passwordField = document.getElementById('password');
        const fieldType = passwordField.type === 'password' ? 'text' : 'password';
        passwordField.type = fieldType;
    });

    document.getElementById('toggleConfirmPassword')?.addEventListener('click', function() {
        const passwordField = document.getElementById('confirm_password');
        const fieldType = passwordField.type === 'password' ? 'text' : 'password';
        passwordField.type = fieldType;
    });

    document.addEventListener('DOMContentLoaded', function() {
        const content = document.querySelector('.fade-content');
        content.style.opacity = 0;
        setTimeout(() => {
            content.style.opacity = 1;
        }, 100);
    });
</script>

</body>
</html>
