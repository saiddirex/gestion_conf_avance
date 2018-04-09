<?php

include 'models/adminPanel.php';

if (isset($_GET['delete'])) {
  deleteUser($con,htmlspecialchars($_GET['delete']));
}

  if (isset($_GET['nommer'])) {
  nommerConferencier($con,htmlspecialchars($_GET['nommer']));
}
  
  
$users = getUsers($con);
include 'views/adminPanel.php';

?>
