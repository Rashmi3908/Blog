<?php
    include_once("connection.php");
    error_reporting(E_ALL & ~E_NOTICE);
      // include_once("adminhome.php");
// echo "test";exit;
// print_r($_SESSION);exit;
// print_r($_GET);
$var =$_GET['read'];
//echo $var;
$sql = "SELECT * FROM blog WHERE id = $var";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
  $id = $row['id'];
  $title = $row['title'];
  $subtitle = $row['subtitle'];
  $content = $row['content'];
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Form</title>
  </head>
  <!--  -->
  <body>

      <h2><?php echo $title ?></h2>
        <p><?php echo $subtitle ?></p>

        <p><?php echo $content ?></p><br>
       <a href="adminhome.php">Back to homepage</a>




  </body>
</html>
