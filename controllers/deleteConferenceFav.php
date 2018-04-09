
<?php


include 'models/deleteConferenceFav.php';


if (isset($_GET['delete'])) {
  deleteConferenceFav($con,$_GET['delete']);
  include 'controllers/userPanel.php';
}


?>
