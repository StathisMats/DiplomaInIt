<<?php
require("../functions.php");
checkIfBanned($_SERVER['SERVER_ADDR']);

if (empty($_SESSION['user_logged_in'])) {
  banIp($_SERVER['SERVER_ADDR']);
}
?>

<!DOCTYPE html>
<li><a href="/DevSite/index.php">Main Page</a></li>

<html>
<head>
  <meta charset="UTF-8">
  <title> Login Page </title>
</head>
<h1> <?php
echoSuccess();
?> </h1>
  </html>
