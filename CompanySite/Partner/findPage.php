<<?php
require("../functions.php");
checkIfBanned($_SERVER['SERVER_ADDR']);
?>

<!DOCTYPE html>
<a href="/CompanySite/index.php"> Main Page </a>

<html>
<head>
  <meta charset="UTF-8">
  <title> Find Page </title>
</head>



<?php
//echoRegisterError();
//echoRegisterSuccess();
?>

<form method="POST" action="registerServer.php">
  <label for="FirstName"> First Name </label><br/>
  <input type="text" name="FirstName" id="FirstName" placeholder="first name"><br/>

  <label for="LastName"> Last Name </label><br/>
  <input type="text" name="LastName" id="LastName" placeholder="last name"><br/>

  <label for="UserName"> User Name </label><br/>
  <input type="text" name="UserName" id="UserName" placeholder="user name"><br/>

  <label for="Email"> Email </label><br/>
  <input type="email" name="Email" id="Email" placeholder="email"><br/>

  <label for="Password"> Password </label><br/>
  <input type="password" name="Password" id="Password" placeholder="password"><br/>

  <button type="submit">Submit</button><br/>
</form>
</html>

<table>
  <tr>
    <td>FirstName</td>
    <td>LastName</td>
    <td>UserName</td>
    <td>Email</td>
  </tr>
</table>
