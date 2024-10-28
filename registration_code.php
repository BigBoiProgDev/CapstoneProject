<?php
session_start();
require_once('connect.php');
$fname = $lname = $email = $username = $password = $pwd = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$uname = $_POST['username'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO accounts (Firstname,Lastname,Username,Email,Password) VALUES ('$fname','$lname','$uname','$email','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: index.php");
}
else
{
	echo "Error :".$sql;
}
?>