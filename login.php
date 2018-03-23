<?php
//ob_start();
include_once('connection.php');
	//error_reporting(E_ALL & ~E_NOTICE);
	session_start();

	if ($_POST['submit']) {


		$username = strip_tags($_POST['username']);
		$username = strtolower($username);
		$password = strip_tags($_POST['password']);
		//echo $username;

		$res=mysqli_query($conn,"SELECT * FROM member WHERE username='$username'");
		$row=mysqli_fetch_array($res);
		$count = mysqli_num_rows($res);
		echo $count;
		if($count==1 ){
			if($row['type']=='A'){
				$_SESSION['username'] = $username;
			//$_SESSION['username']=$username;
			header("location: adminhome.php");
			}
			else{
				$_SESSION['username'] = $username;
				header("location: userpost.php");
			}
		}
		// }else if($count==1 && $row['id']!=1){
		// 	$_SESSION['username']=$username;
		// 	header("location: userpost.php");




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
				<form action="login.php" method="POST" >
					<div><input type="text" name="username" class="user_name" placeholder="Username"></div>
					<div><input type="password" name="password" placeholder="Password"></div>
					<div><input type="submit" class="btn btn-default" name="submit" value="Login"></div>
				</form>
				</div>
			</div>
			</div>

		</div>

	</section>
	<!-- <div class="loginform">
		<h3>Login to post</h3>
		<form action="login.php" method="POST" id="form">
			 <div class="input-group">
				 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				 <input type="text" class="form-control" name="username" placeholder="username">
			 </div>
			 <br>
			 <div class="input-group">
				 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				 <input  type="password" class="form-control" name="password" placeholder="Password">
			 </div>
			 <br>
			 <input type="submit" name="submit" value="Login">
			 </form>
	</div> -->

	<!-- <form action="login.php" method="POST">
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" name="submit" value="Login">
	</form> -->

</body>
</html>
