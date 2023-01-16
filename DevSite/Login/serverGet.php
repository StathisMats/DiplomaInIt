
<?php
require("../userCredentials.php");
include("LoginHandlerGet.php");

if (credentialsProvided()) {
  $loginHandler = new LoginHandlerGet($_GET["UserName"], $_GET["UserPassword"]);
}


function credentialsProvided() {
  if (empty($_GET["UserName"])) {
    exit("No username or email provided!" . "<br>");
  }

  if (empty($_GET["UserPassword"])) {
    exit("No password provided!" . "<br>");
  }

  return true;
}

?>
