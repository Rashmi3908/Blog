<?php
    include_once("connection.php");
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();

	if (isset($_SESSION['username'])) {
		$username = ucfirst($_SESSION["username"]);

		if ($_POST['submit']) {
			$title = $_POST['title'];
			$subtitle = $_POST['subtitle'];
			$content = $_POST['content'];
			echo $sql = "INSERT INTO blog (title, subtitle, content) VALUES ('$title', '$subtitle', '$content')";
			mysqli_query($conn, $sql);
			echo "Blog entry posted";
		}
	}
	else {
		header("Location: login.php");
		die();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
</head>
<body>

<h1>Wellcome, <?php echo $username; ?>!</h1>

	<form method="post" action="admin.php">
		Title: <input type="text" name="title"><br>
		Subtitle: <input type="text" name="subtitle"><br>
		Content: <textarea name="content"></textarea><br>
		<input type="submit" name="submit" value="Post Blog Entry">
	</form>


	<br />
	<a href="adminhome.php">View Home Page</a> | <a href="logout.php">Logout</a>

</body>
</html>
