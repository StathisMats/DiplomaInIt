
<?php
include("RegisterHandlerDb.php");
require("../functions.php");

checkIfBanned($_SERVER['SERVER_ADDR']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (checkRegisterDataProvided()) {
    new RegisterHandlerDb($_POST);
  }
} else {
  banIp($_SERVER['SERVER_ADDR']);
}


?>
