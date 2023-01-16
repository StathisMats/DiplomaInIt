<?php
include('../Database/DatabaseHandler.php');

Class RegisterHandlerDb {

  function __construct($_POST) {
    $this->dbHandler      = new DatabaseHandler();
    $this->dbHandler->prepareDb();
    $this->saveData($_POST);
  }

  function saveData($_POST)
  {
    $usersSql = "INSERT INTO users (first_name, last_name)
                 VALUES ";

    $userCredsSql = "INSERT INTO user_credentials (user_name, email, password)
                     VALUES ";

    foreach ($_POST as $field => $data) {
      switch (field) {
        case 'FirstName':
          $usersSql .= '(' . $data ', ';
          break;
        case 'LastName':
          $usersSql .= $data . ')';
          break;
        case 'UserName':
            $userCredsSql .= '(' . $data ', ';
            break;
        case 'Email':
            $userCredsSql .= $data ', ';
            break;
        case 'Password':
            $userCredsSql .= $data . ')';
            break;
        default:
          break;
      }
    }
  }
}
 ?>
