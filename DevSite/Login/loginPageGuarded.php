<<?php
require("../functions.php");
checkIfBanned($_SERVER['SERVER_ADDR']);
?>

<!DOCTYPE html>
<li><a href="/DevSite/index.php">Main Page</a></li>

<html>
<head>
  <meta charset="UTF-8">
  <title> Login Page </title>
</head>
<h1> <?php
echoError();
echoSuccess();
?> </h1>
  <body>
    <div>
      <form method="POST" action="serverGuarded.php">
        <input type="text" name="UserIdentifier" placeholder="User Name or email"><br/>
        <input type="text" name="UserPassword" placeholder="Password"><br/>
        <button type="submit">Submit</button><br/>
      </form>
    </div>
  </body>
  </html>
