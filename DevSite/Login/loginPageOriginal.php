<?php
include("LoginHandlerOriginal.php");

?>
<!DOCTYPE html>
<li><a href="/DevSite/index.php">Main Page</a></li>

<html>
<head>
  <meta charset="UTF-8">
  <title> Login Page </title>
</head>
  <body>
    <div>
      <form method="POST" action="loginPage.php">
        <input type="text" name="UserName" placeholder="User Name or email"><br/>
        <input type="text" name="UserPassword" placeholder="Password"><br/>
        <button type="submit">Submit</button><br/>
      </form>
    </div>
  </body>
  </html>

<?php

// Using $_POST["UserName"], $_POST["UserPassword"] without checking their values, will throw an error
$loginHandler = new LoginHandler($_POST["UserName"], $_POST["UserPassword"]);

?>
