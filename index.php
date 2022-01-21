<?php
session_start();
require 'checklogin.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h1>Welcome <?php echo $_SESSION["name"]; ?></h1>
    <?php require 'read_patients.php'?>
    <a href="logout.php">Logout</a>
  </body>
</html>
