<?php
include 'models/modifierConferencier.php';


if (isset($_POST['modifier-submit'])) {
  updateConferencier($con,$_GET['modifier'],htmlspecialchars($_POST['nom']),htmlspecialchars($_POST['prenom']),htmlspecialchars($_POST['fonction']),htmlspecialchars($_POST['email']),htmlspecialchars($_POST['tel']),htmlspecialchars($_POST['site_web']));
  redirect('index');
}

if (isset($_GET['modifier'])) {
  $c = getConferencierInfo($con,$_GET['modifier']);
  if($c){
    include 'views/modifierConferencier.php';
  }else{
    redirect('index');
  }
}else{
  redirect('index');
}
 ?>
