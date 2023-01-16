<?php
Class Partner {

  function __construct()
  {
    $_SESSION['partnerType'] = ($_POST['partner']);
    $_SESSION['actionType'] = ($_POST['action']);
  }
}
 ?>
