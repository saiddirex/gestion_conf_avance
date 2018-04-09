<?php

include 'models/designerConferenceFav.php';

if (isset($_GET['idc']) && isset($_GET['idm'])) {
  designerConferenceFav($con,$_GET['idm'],$_GET['idc']);
  include 'controllers/userPanel.php';
}


?>
