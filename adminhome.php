<?php
    include_once("connection.php");
	error_reporting(E_ALL & ~E_NOTICE);
  // session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Misson 1000 Blog</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style media="screen">
  .panels{
    width: 1000px;
    margin:0 auto;
  }
  body{
    background: url("back.jpeg")  no-repeat center center fixed; ;
    background-repeat: repeat;
     background-size: cover;
  }
  #menubar{
    padding: 10px;
    box-shadow: 5px 10px 18px #888888;
  }

</style>
</head>
<body>
  <nav class="navbar navbar-default" id="menubar" >
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Mission1000</a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin_users.php">Users</a> </li>
        <li><a href="adminpost.php">Add Post</a> </li>
        <!-- <li><a href="index.php">View website</a> </li> -->
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a> </li>
        <!-- <li><a href="user.php"><span class="glyphicon glyphicon-user"></span> User</a></li> -->
        <!-- <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li> -->
      </ul>
    </div>
  </nav>

	<!-- <h1 style="text-align: center;">My Awsome Functional Blog</h1> -->
	<?php

	$sql = "SELECT * FROM blog ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

    // read all the posts from the DB
    while ($row = mysqli_fetch_array($result)) {
      $id = $row['id'];
    	$title = $row['title'];
    	$subtitle = $row['subtitle'];
    	$content = $row['content'];

     	?>
<?php
$_SESSION['id']='';
$_SESSION['id']   = $row['id'];
// print_r($_SESSION);exit;
// echo $_SESSION['id'];

 ?>




  <div class="panel panel-default panels">
    <div class="panel-heading"><?php echo $title; ?></div>
    <div class="panel-body">
      <p><?php echo $subtitle ?></p>
    </div>
      <a href="readadmin.php?read=<?php echo $row['id']; ?>">Read More...</a>
    <!-- <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal-<?php echo $id ?>">Read More...</button> -->
   <a href="delete.php?del=<?php echo $row['id']; ?>" class="btn btn-info btn-md">Delete</a>
   <form class="" action="edit.php" method="post">
     <input type="hidden" name="editid" value="<?php echo $row['id']; ?>"><a href="edit.php?edit=<?php echo $row['id']; ?>" class="btn btn-info btn-md">Edit</a>
   </form>

   <!-- <a href="edit.php?edit=<?php echo $row['id']; ?>" class="btn btn-info btn-lg">Edit</a> -->
  </div>

       <div class="modal fade" id="myModal-<?php echo $id ?>" role="dialog">
         <div class="modal-dialog">


           <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title"><?php echo $row['title']; ?></h4>
             </div>
             <div class="modal-body">
               <?php echo $row['content']; ?>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             </div>
           </div>

         </div>
       </div>

	<br />
  <?php
}
 ?>
	<!-- <a href="admin.php">Admin</a> -->
</body>
</html>
