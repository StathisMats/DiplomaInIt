
<?php
include("LoginHandlerDb.php");

if (credentialsProvided()) {
  $loginHandler = new LoginHandlerDb($_POST["UserIdentifier"], $_POST["UserPassword"]);
}


function credentialsProvided() {
  if (empty($_POST["UserIdentifier"])) {
    exit("No username or email provided!" . "<br>");
  }

  if (empty($_POST["UserPassword"])) {
    exit("No password provided!" . "<br>");
  }

  return true;
}

?>
