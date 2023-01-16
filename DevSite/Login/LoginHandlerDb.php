<?php
include('../Database/DatabaseHandler.php');

Class LoginHandlerDb {
  protected  $userIdentifier     = "";
  protected  $password           = "";
  protected  $dbHandler;

  function __construct(string $userIdentifier, string $password) {
    $this->userIdentifier = $userIdentifier;
    $this->password       = $password;
    $this->dbHandler      = new DatabaseHandler();
    $this->dbHandler->prepareDb();
    $this->checkCredentials();
  }

  function checkCredentials () {
    $userIdentifierType = $this->userExists();

    if ($userIdentifierType) {
      $loggedIn = $this->attemptLogin($userIdentifierType);

      if ($loggedIn) {
        $_SESSION['loginSuccess'] = "Welcome $this->userIdentifier";
        $_SESSION['user_logged_in'] = $this->userIdentifier;

        header('Location:loggedInPage.php');
      } else {
        $_SESSION['loginError'] = "Wrong password";
        header('Location:loginPageGuarded.php');
      }
    } else {
      $_SESSION['loginError'] = "User not found";
      header('Location:loginPageGuarded.php');
    }
  }

  function userExists(): string
  {
    $getUserNameSql = "SELECT user_name
                       FROM user_credentials
                       WHERE user_name = '{$this->userIdentifier}'";

    if (!empty($this->dbHandler->selectFromDb($getUserNameSql))) {
      return 'userName';
    }

    $getUserEmailSql = "SELECT email
                        FROM user_credentials
                        WHERE email = '{$this->userIdentifier}'";

    if (!empty($this->dbHandler->selectFromDb($getUserEmailSql))) {
      return 'email';
    }

    return '';
  }

  function attemptLogin(string $userIdentifierType): bool
  {
    if ($userIdentifierType === 'userName') {
      $sql = "SELECT id
              FROM user_credentials
              WHERE user_name = '{$this->userIdentifier}'
              AND password = '{$this->password}'";
    } else {
      $sql = "SELECT id
              FROM user_credentials
              WHERE email = '{$this->userIdentifier}'
                AND password = '{$this->password}'";
    }

    return !empty($this->dbHandler->selectFromDb($sql));
  }
}
 ?>
