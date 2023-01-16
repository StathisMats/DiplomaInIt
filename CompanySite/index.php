<?php session_start();
$_SESSION['redirectedFrom'] = 'index';
?>

<!DOCTYPE html>
<html>

<body>

<h1>Partner Administration Page</h1>

<p>Choose a partner type to process</p>

<form method="POST" action="Partner/partnerServer.php">
  <label for="partner">Partner type:</label>
  <select name="partner" id="partner">
    <option value="Client">Client</option>
    <option value="Supplier">Supplier</option>
  </select>
  <br><br>

  <label for="action">Action:</label>
  <select name="action" id="action">
    <option value="Find">Find</option>
    <option value="Create">Create</option>
    <option value="Update">Update</option>
    <option value="Delete">Delete</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>



</body>
</html>
