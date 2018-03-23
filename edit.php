<?php
    include_once("connection.php");
    error_reporting(E_ALL & ~E_NOTICE);
      // include_once("adminhome.php");
// echo "test";exit;
// print_r($_SESSION);exit;
// print_r($_GET);
$var =$_GET['edit'];
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
    <form class="" action="update.php" method="post">
      <h2>Edit Form</h2>
      <table>
        <tr>
          <td>ID:</td>
          <td><input type="text" name="idd" value="<?php echo $id ?>" readonly></td>
        </tr>
        <tr>
          <td>Title:</td>
          <td><input type="text" name="titlee" value="<?php echo $title ?>"></td>
        </tr>
        <tr>
          <td>Description:</td>
          <td><input type="text" name="subtitlee" value="<?php echo $subtitle ?>"></td>
        </tr>
        <tr>
          <td>Content:</td>
          <td><textarea name="content" rows="20" cols="100" value="<?php echo $content ?>"><?php echo $content ?></textarea></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
      </table>
      
    </form>




  </body>
</html>
