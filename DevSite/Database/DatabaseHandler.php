<?php
Class DatabaseHandler {
  protected $serverName = "localhost";
  protected $userName   = "root";
  protected $password   = "";
  protected $dbName     = 'devsite';
  protected $conn;

  function prepareDb(string $serverName = null, string $userName = null, string $password = null, string $dbName = null)
  {
    if ($serverName) {
      $this->serverName = $serverName;
    }

    if ($userName) {
      $this->userName = $userName;
    }

    if ($password) {
      $this->password = $password;
    }

    if ($dbName) {
      $this->dbName = $dbName;
    }

    $this->establishConnection();
  }

  function establishConnection()
  {
    $this->conn = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);

    if ($this->conn->connect_error){
      die("Connection failed: " . $this->conn->connect_error);
    }
  }

  function selectFromDb(string $query = null) {
    if (empty($query)) {
      die("Empty query provided");
    }

    return $this->conn->query($query)->fetch_assoc();
  }

  function insertIntoDb(string $query = null)
  {
    if (empty($query)) {
      die("Empty query provided");
    }

    return $this->conn->query($query);
  }
}
 ?>
