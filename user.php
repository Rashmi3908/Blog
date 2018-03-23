<?php
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();

	if ($_POST['submit']) {
		$dbUserName = "nikhil";
		$dbPassword = "123";

		$username = strip_tags($_POST["username"]);
		$username = strtolower($username);
		$password = strip_tags($_POST["password"]);

		if ($username == $dbUserName && $password == $dbPassword) {
			// set session variables
			$_SESSION['username'] = $username;
			// redirect to admin page
			header("Location: userpost.php");
		}
		else {
			echo "Please provide valid username and password!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
				<h3><strong>LOGIN FORM</strong></h3>
				<form action="user.php" method="POST" >
					<div><input type="text" name="username" placeholder="Username"></div>
					<div><input type="password" name="password" placeholder="Password"></div>
					<div><input type="submit" class="btn btn-default" name="submit" value="Login"></div>
				</form>
				</div>
			</div>
			</div>

		</div>

	</section>


</body>
</html>
