<?php
session_start();

require_once('connect.php');
$uname = $password = $pwd = '';

$uname = $_POST['username'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "SELECT * FROM accounts WHERE username='$uname' AND Password='$password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$uname = $row["username"];
		$_SESSION['id'] = $row["ID"];
        $_SESSION['username'] = $row["username"];
	}
	header("Location: dashboard.php");
	exit;
}
else
{
	echo "Invalid email or password";
}
?>