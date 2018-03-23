<?php
    include_once("connection.php");
	error_reporting(E_ALL & ~E_NOTICE);

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
    /* display:flex; */
    width: 1000px;
    margin:0 auto;
  }
  .container{
    margin-top: 60px;
    font-style: italic;
    font-size: 20px;

  }
  #menubar{
    /* border: 1px solid; */
    padding: 10px;
    box-shadow: 5px 10px 18px #888888;

  }


  body{
    background: url("back.jpeg")  no-repeat center center fixed; ;
    background-repeat: repeat;
     background-size: cover;
  }

</style>
</head>
<body>
  <nav class="navbar navbar-default" id="menubar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Mission1000</a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="user.php"><span class="glyphicon glyphicon-user"></span> User</a></li> -->
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>

  <section>

  <center><h1>CREATIVE BLOG</h1></center>
  <div class="container">

    <div class="row">
      <div class="col-md-6">
        <img src="c.jpg" width="450px" height="auto">
          <p>Why to cook? Cooking or cookery is the art, technology, science and craft of preparing food for consumption with
              or without the use of fire or heat.</p>
              <a href="cook.html">Read more</a>
      </div>

      <div class="col-md-6">
        <img src="cc.jpeg" width="420px" height="auto">
          <p>Artificial intelligence (AI) is an area of computer science that emphasizes the
            creation of intelligent machines that work and react like humans.
            It mainly concentrates on learning, planning, problem solving.</p>
              <a href="ai.html">Read more</a>
      </div>
    </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <img src="treck.jpg" width="450px" height="auto">
            <p>Trekking is a form of walking, undertaken with the specific purpose of exploring and enjoying the scenery.
              It usually takes place on trails in areas of relatively unspoiled wilderness.</p>
              <a href="trek.html">Read more</a>
            </div>

            <div class="col-md-6">
              <img src="org.jpg" width="400px" height="auto">
                <p>Organic farming is a method of crop and livestock production that involves much more than choosing not to use pesticides,
                  fertilizers, genetically modified organisms, antibiotics and growth hormones.</p>
                  <a href="org.html">Read more</a>
          </div>
        </div>
  </div>
  </section>
  <h1 class="text-center">Recent Posts</h1>

	<!-- <h1 style="text-align: center;">My Awsome Functional Blog</h1> -->
	<?php

	$sql = "SELECT * FROM blog ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

    // read all the posts from the DB
    while ($row = mysqli_fetch_array($result)) {
      $id =$row['id'];
    	$title = $row['title'];
    	$subtitle = $row['subtitle'];
    	$content = $row['content'];

	?>
<section>


<hr>
  <div class="panel panel-default panels">
    <div class="panel-heading"><?php echo $title; ?></div>
    <div class="panel-body">
      <p><?php echo $subtitle ?></p>
    </div>
    <a href="readmore.php?read=<?php echo $row['id']; ?> ">Read More...</a>
    <!-- <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal-<?php echo $id ?>">Read More...</button> -->
    <a href="https://en-gb.facebook.com/login/"><img src="facebook.png" alt=""> </a>
  </div>



	<br />
  <?php
}
 ?>
 </section>
	<!-- <a href="admin.php">Admin</a> -->
</body>
</html>


<!-- <div class="modal fade" id="myModal-<?php echo $id ?>" role="dialog">
  <div class="modal-dialog">


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $title; ?></h4>
      </div>
      <div class="modal-body">
         <?php echo $content; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> -->
