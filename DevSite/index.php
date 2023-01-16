<?php
require("userInterface.php");
?>


<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<nav>
  <u1>
    <li><a href="other/about.php">About</a></li>
    <li><a href="Login/loginPageOriginal.php">Login</a></li>
    <li><a href="Login/loginPageGet.php">Login Get</a></li>
    <li><a href="Login/loginPageDb.php">Login DB</a></li>
    <li><a href="Login/loginPageGuarded.php">Login Guarded</a></li>
    <li><a href="Login/logout.php">LogOut</a></li>
    <li><a href="Register/registerPage.php">Register</a></li>
    </li>
  </u1>
</nav>
<head>
  <title>
    <?php
    echo $indexTabTitle . "<br>";
    ?>
  </title>
</head>

<body>
  <h1>
    <?php
      echo $indexPageTitle . "<br>";
      ?>
    </h1>

</body>
</html>
