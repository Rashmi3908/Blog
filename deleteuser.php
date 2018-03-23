<?php
include('connection.php');



if(isset($_GET['del'])){
  $id = $_GET['del'];
  mysqli_query($conn,"DELETE FROM member WHERE id=$id");
  header('location:admin_users.php');
}


 ?>
