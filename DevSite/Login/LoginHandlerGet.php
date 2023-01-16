<?php
include('../userCredentials.php');

Class LoginHandlerGet {
  protected $userName = "";
  protected $password = "";
  protected $user     = [];
  protected $attemptedLogin = false;

  function __construct(string $userName, string $password) {
    $this->userName = $userName;
    $this->password = $password;

    $this->checkCredentials();
    unset($_SESSION['User1Credentials']);
  }

  function checkCredentials () {
    switch ($this->userName) {
      case $GLOBALS['user1Name']: //case $_SESSION['user1Name']:
      case $GLOBALS['user1Email']: //case $_SESSION['user1Email']:
        $this->user = $_SESSION['User1Credentials'];

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
