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
      $author = $_POST['author'];
			 $sql = "INSERT INTO blog (title, subtitle, content,author) VALUES ('$title', '$subtitle', '$content','$author')";
			mysqli_query($conn, $sql);
			header("Location: adminhome.php");
		}
	}
	// else {
	// 	header("Location: user.php");
	// 	die();
	// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
  <style media="screen">
    .formdesign{
      width: 600px;
      height: 700px;
      margin: 0 auto;
    }
    </style>
</head>
<body>
  <div class="formdesign">
    <h1>Welcome, <?php echo $username; ?>!</h1>
    <form method="post" action="adminpost.php">
      <table>
        <tr>
          <td>Title:</td>
          <td> <input type="text" name="title"></td>
        </tr>
        <tr>
          <td>Subtitle:</td>
          <td><input type="text" name="subtitle"></td>
        </tr>
         <tr>
            <td>Author:</td>
            <td><input type="text" name="author"></td>
          </tr>
          <tr>
            <td>Content:</td>
            <td> <textarea name="content"></textarea></td>
          </tr>
          <tr>
          <td> <input type="submit" name="submit" value="Post Blog Entry"></td>
          </tr>
          <tr><td>	<a href="adminhome.php">View Home Page</a></td></tr>

      </table>


	<br />
	<!-- <a href="adminhome.php">View Home Page</a> -->
  <!-- | <a href="logout.php">Logout</a> -->

</body>
</html>
