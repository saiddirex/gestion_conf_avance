<?php

include 'models/showUser.php';


$membre = getMembreInfo($con,$_GET['show']);



include 'views/showUser.php';

 ?>
