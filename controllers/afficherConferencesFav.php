<?php


include 'models/afficherConferencesFav.php';

 
    
    $conf = getAllFavConf($con,$_GET['show']);

include 'views/afficherConferencesFav.php';
 ?>




