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
			header("Location: userhome.php");
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
</head>
<style media="screen">
  .formdesign{
    width: 600px;
    height: 700px;
    margin: 0 auto;
  }
</style>
<body>


<div class="formdesign">
  <h1>Wellcome, <?php echo $username; ?>!</h1>
  <form method="post" action="userpost.php">
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
        <tr><td>	<a href="userhome.php">View Home Page</a></td></tr>

    </table>
		 <!-- <input type="text" name="title"><br>
		Subtitle: <input type="text" name="subtitle"><br>
     <input type="text" name="author"><br>
		Content:<br>
		<input type="submit" name="submit" value="Post Blog Entry"> -->
	</form>
</div>



	
  <!-- | <a href="logout.php">Logout</a> -->

</body>
</html>
