
<?php
include("LoginHandlerDb.php");
require("../functions.php");
checkIfBanned($_SERVER['SERVER_ADDR']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (checkCredentialsProvided($_POST["UserIdentifier"], $_POST["UserPassword"])) {
    $loginHandler = new LoginHandlerDb($_POST["UserIdentifier"], $_POST["UserPassword"]);
  }
} else {
  banIp($_SERVER['SERVER_ADDR']);
}


?>
