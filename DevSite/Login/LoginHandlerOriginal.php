<?php
include('../userCredentials.php');

Class LoginHandler {
  protected $userName = "";
  protected $password = "";
  protected $user     = [];

  function __construct(string $userName = null, string $password = null) {
    $this->userName = $userName;
    $this->password = $password;

    if ($this->credentialsProvided()) {
      $this->checkCredentials();
    }
  }

  function credentialsProvided() {
    if (empty($this->userName)) {
      exit("No username or email provided!" . "<br>");
    }

    if (empty($this->password)) {
      exit("No password provided!" . "<br>");
    }

    return true;
  }

  function checkCredentials () {
    switch ($this->userName) {
      case $GLOBALS['user1Name']:
      case $GLOBALS['user1Email']:
        $this->user = $GLOBALS['user1CredentialsArray'];

        if ($this->user['password'] == $this->password) {
          echo "Welcome user $this->userName";
        } else {
          echo "Wrong password";
        }
        break;

        case $GLOBALS['user2Name']:
        case $GLOBALS['user2Email']:
        break;

      default:
        echo "User not found";
        break;
      }
  }

}

 ?>
