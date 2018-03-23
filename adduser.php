<?php
include_once('connection.php');
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
//$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $type = mysqli_real_escape_string($conn, $_POST['type']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
if (empty($type)) { array_push($errors, "type is required"); }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM member WHERE username='$username' OR email='$email'";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  //$password = md5($password);//encrypt the password before saving in the database
  if (count($errors) == 0) {

  	$query = "INSERT INTO member (username, email, password,type)VALUES('$username', '$email', '$password','$type')";
  	mysqli_query($conn, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
	<style media="screen">
	/* body{
		background-image: url("login.jpeg");
		 background-size: cover;
	} */

	</style>
</head>

<body>
	<section >
		<div class="loginform">
			<div class="ap">
				<div class="form">
				<div class="text-center">
				<h3><strong>ADD USER</strong></h3>
				<form action="adduser.php" method="POST" >
					<div><input type="text" name="username" placeholder="Username" value=""></div>
					<div><input type="password" name="password" placeholder="Password" value=""></div>
          <div><input type="email" name="email" placeholder="email" value=""></div>
          <div><input type="text" name="type" placeholder="user type(A/U)" value=""></div>
					<div><input type="submit" class="btn btn-default" name="submit" value="ADD"></div>
				</form>
				</div>
			</div>
			</div>

		</div>

	</section>
</body>
</html>
