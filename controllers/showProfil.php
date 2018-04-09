<?php
include 'models/showProfil.php';


if (isset($_GET['modifier'])) {
  
    $c = getMembreInfo($con,$_GET['modifier']);
  if($c){
    include 'views/showProfil.php';
  }else{
    redirect('index');
  }
}else{
  redirect('index');
}
 ?>
