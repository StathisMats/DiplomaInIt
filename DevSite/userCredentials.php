
<?php
//session_start();

// User1 credentials
$user1Name            = "User1";
$user1Email           = "user1@gmail.com";
$user1Password        = 1;
$user1Role            = "admin";
$user1AccessAllowed   = true;

$user1CredentialsArray = [
  'userName'      => "User1",
  'email'         => "user1@gmail.com",
  'password'      => 1,
  'role'          => "admin",
  'accessAllowed' => true,
];

$_SESSION['User1Credentials'] = $user1CredentialsArray;

// User2 credentials
$user2Name          = "User2";
$user2Email         = "user2@gmail.com";
$user2Password      = 2;
$user2Role          = "user";
$user2AccessAllowed = false;

$user2CredentialsArray = [
  'userName'      => $user2Name,
  'email'         => $user2Email,
  'password'      => $user2Password,
  'role'          => $user2Role,
  'accessAllowed' => $user2AccessAllowed,
];

?>
