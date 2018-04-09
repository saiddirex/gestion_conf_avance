<?php
include 'models/afficherConferencesProp.php';

$succes = false;



$conf = getAllProposedConf($con);

include 'views/afficherConferencesProp.php';
 ?>




