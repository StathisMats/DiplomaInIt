<?php

$user1Credentials = new stdClass;
$user1Credentials->userName = "User1";
$user1Credentials->email    = "user1@gmail.com";

$_SESSION['User1Credentials'] = $user1Credentials;


$myObject = new stdClass;
$myObject->userName = "User1";

echoName("George");

function echoName(string $name) {
  $myObject = new stdClass;
  $myObject->userName = $name;

  echo $myObject->userName;
}

//var_dump($myObject);


?>
