<?php
session_start();

function redirectToActionPage()
{
  $partner = new Partner();

  switch ($_SESSION['actionType']) {
    case 'Find':
      header('Location:../Partner/findPage.php');
      break;

    case 'Create':
      header('Location:../Partner/createPage.php');
      break;

    case 'Update':
      header('Location:../Partner/updatePage.php');
      break;

    case 'Delete':
      header('Location:../Partner/DeletePage.php');
      break;

    default:
      echo "Error";
      die;
      break;
  }
}

function banIp(string $ip) {
  if (!isset($_SESSION['bannedIps'])) {
    $_SESSION['bannedIps'] = [];
  }

  array_push($_SESSION['bannedIps'], $ip);

  header('Location:ban.php');
}

function checkIfBanned(string $ip) {
  if (isset($_SESSION['bannedIps']) && in_array($ip, $_SESSION['bannedIps'])) {
    header('Location:ban.php');
  }
}




 ?>
