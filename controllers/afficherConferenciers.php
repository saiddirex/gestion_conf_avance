<?php

    include 'models/afficherConferenciers.php';

    $id_conference = $_GET['show'];
    $conferenciers = getConferenciers($con);
    
    include 'views/afficherConferenciers.php';


?>
