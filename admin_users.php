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
#menubar{
  border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px 18px #888888

}
</style>
<script language="JavaScript" type="text/javascript">
  function deluser(id, username)
  {
	  if (confirm("Are you sure you want to delete '" + title + "'"))
	  {
	  	window.location.href = 'users.php?deluser=' + id;
	  }
  }
  </script>


</head>
<body>
  <nav class="navbar navbar-inverse" id="menubar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Mission1000</a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="">Users</a> </li>
        <li><a href="adminhome.php">View website</a> </li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a> </li>
        <!-- <li><a href="user.php"><span class="glyphicon glyphicon-user"></span> User</a></li> -->
        <!-- <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li> -->
      </ul>
    </div>
  </nav>

  <table class="table table-hover">
    <tr>
      <th>Username</th>
      <th>Email</th>
      <th>Actions</th>
    </tr>


    <?php
      $sql = "select * from member";
      $result = mysqli_query($conn, $sql);



      while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
      	$username = $row['username'];
      	$email  = $row['email'];

        echo "<tr>";
        echo "<td>" .$username. "</td>";
        echo "<td>" .$email. "</td>";
      ?>

      <td>

        <?php if($row['id'] != 1){?>
           <a href="deleteuser.php?del=<?php echo $row['id']; ?>" class="">Delete</a>
        <?php } ?>
      </td>

      <?php
      echo "</tr>";

    }?>

      </table>

      <a href="adduser.php" style="text-decoration:none;">Add User</a>





</body>
</html>
