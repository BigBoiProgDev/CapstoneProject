

<?php 
/*
include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

     $checkEmail="SELECT * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users(firstName,lastName,email,password)
                       VALUES ('$firstName','$lastName','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }


}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;

   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: homepage.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
*/




?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="">
</head> 
<body>

	<div class='register-container'>
		<form action='registration_code.php' method='post' id='Signform'>
			<fieldset>
  				<label for="firstname">First name:</label>
  				<br>
  				<input type="text" id="firstname" name="firstname" size='27' required>
  				<br>
  				<br>
  				<label for="lastname">Last name:</label>
  				<br>
  				<input type="text" id="lastname" name="lastname" size='27' required>
  				<br>
  				<br>
  				<label for="email">Email Address:</label>
  				<br>
  				<input type="email" id="email" name="email" size='27' required>
  				<br>
  				<br>
  				<label for="username">Username:</label>
  				<br>
  				<input type="text" id="username" name="username" size='27' required>
  				<br>
  				<br>
  				<label for="pwd">Password:</label>
  				<br>
  				<input type="password" id="pwd" name="password" size='27' minlength='8' required>
  				<br>
  				<br>
          <input type="checkbox" onclick="myFunction()">Show Password
          <br>
          <br>
  				<input type="submit" value="Sign Up" id='submit'>
  			</fieldset>
		</form>
  <script>


  function myFunction() {
    var x = document.getElementById("pwd");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  </script>
</body>
</html>