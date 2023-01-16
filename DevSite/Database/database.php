<?php

include('../Database/DatabaseHandler.php');

$dbHandler      = new DatabaseHandler();
$dbHandler->prepareDb();

$userName = 'User1';
$password = '2';
$sql = "SELECT user_name
        FROM user_credentials
        where user_name = '{$userName}' and password = '{$password}'";


var_dump(!empty($dbHandler->selectFromDb($sql)));
die();
$servername = "localhost";
$username   = "root";
$password   = "";
$dbName     = 'devsite';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);


// Check connection
if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully" . "<br>";

$userName = 'User1';
$password = '1';

$sql = "SELECT *
        FROM user_credentials
        where user_name = '{$userName}' and password = '{$password}'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($rows = $result->fetch_assoc()) { //$result->fetch_assoc() returns an associative array
    foreach ($rows as $row) {
      echo "<br>" . $row ;
    }

  }

} else {
  echo "No results";
}

$conn->close();
?>
