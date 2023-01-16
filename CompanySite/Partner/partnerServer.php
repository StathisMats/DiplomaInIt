<?php
include("../Partner/Partner.php");
require("../functions.php");
checkIfBanned($_SERVER['SERVER_ADDR']);
//var_dump($_POST); die;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  switch ($_SESSION['redirectedFrom']) {
    case 'index':
      redirectToActionPage();
      break;

    default:
      // code...
      break;
  }

  unset($_SESSION['redirectedFrom']);
} else {
  banIp($_SERVER['SERVER_ADDR']);
}


?>
