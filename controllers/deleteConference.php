
<?php


include 'models/deleteConference.php';


if (isset($_GET['delete'])) {
  deleteConf($con,$_GET['delete']);

  include 'controllers/gererConferences.php';
}


?>
