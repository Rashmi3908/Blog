<?php
include('connection.php');

if(isset($_GET['del'])){
  $id = $_GET['del'];
  mysqli_query($conn,"DELETE FROM blog WHERE id=$id");
  header('location:adminhome.php');
}



 ?>
