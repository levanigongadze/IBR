<?php
session_start();
include_once 'classes/user.php';
$user = new User();
$user->register();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
