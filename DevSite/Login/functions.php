<?php
session_start();

function checkCredentialsProvided(string $userIdentifier = null, string $password = null) {
  if (empty($userIdentifier)) {
    $_SESSION['loginError'] = "No username or email provided!" . "<br>";
    header('Location:loginPageGuarded.php');

    return false;
  }

  if (empty($password)) {
    $_SESSION['loginError'] = "No password provided!" . "<br>";
    header('Location:loginPageGuarded.php');

    return false;
  }

  return true;
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

function echoError()
{
  if (isset($_SESSION['loginError'])) {
    echo $_SESSION['loginError']  . "<br>";
  }
}

 ?>
