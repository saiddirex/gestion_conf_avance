
<?php


include 'models/deleteConferencier.php';


if (isset($_GET['delete'])) {
  deleteConferencier($con,$_GET['delete']);

  include 'controllers/gererConferences.php';
}


?>
