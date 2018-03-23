<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cookiee</title>
  </head>
  <body>

<?php

    $cookie_name = "user";
$cookie_value = "seema";
setcookie($cookie_name, $cookie_value, time() - (60 * 60), "/");

if(isset($_COOKIE[$cookie_name])){
  echo $cookie_name;
  echo $cookie_value;
}
?>



  </body>
</html>
