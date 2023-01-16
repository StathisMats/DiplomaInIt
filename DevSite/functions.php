<?php
session_start();

function checkRegisterDataProvided() {
  foreach ($_POST as $field => $data) {
    if (empty($data)) {
      $_SESSION['registerError'] = "Empty field $field";
      header('Location:registerPage.php');
      die;
    }
  }

  return true;
}

function echoRegisterError()
{
  if (isset($_SESSION['registerError'])) {
    echo $_SESSION['registerError']  . "<br>";
    session_destroy();
  }
}

function echoRegisterSuccess()
{
  echo "Successful register" . "<br>";
}

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

function echoError()
{
  if (isset($_SESSION['loginError'])) {
    echo $_SESSION['loginError']  . "<br>";
    session_destroy();
  }
}

function echoSuccess()
{
  if (isset($_SESSION['loginSuccess'])) {
    echo $_SESSION['loginSuccess']  . "<br>";
    session_destroy();
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
