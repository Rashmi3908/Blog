<?php
// database handler file
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "aissel123";
$dbName = "blog";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// database connection error
if(!$conn) {
  die("Connection Failed" . $conn);
}

?>
