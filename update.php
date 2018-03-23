<?php
    include_once("connection.php");
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();
  // $id = $_POST['idd'];
  // echo $id;


		if ($_POST['submit']) {
      $id = $_POST['idd'];
			$title = $_POST['titlee'];
			$subtitle = $_POST['subtitlee'];
			$content = $_POST['content'];
			//echo $sql = "UPDATE blog SET title=['$title'], subtitle=['$subtitle'], content=['$content'] WHERE id=['$id']";
    $sql = "UPDATE blog SET title='$title', subtitle='$subtitle', content='$content' WHERE id='$id'";
			mysqli_query($conn, $sql);
			echo "updated successfully";
		}

	else {
		alert("Not updated");
	}
?>
<html>
<body>
<br><br>
	<a href="adminhome.php">View Home Page</a>
</body>
<html>
