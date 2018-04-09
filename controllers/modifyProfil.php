<?php
include 'models/modifyProfil.php';
if (isset($_POST['modifier-submit'])) {
  updateProfil($con,$_GET['modifier'],htmlspecialchars($_POST['nom']),htmlspecialchars($_POST['prenom']),htmlspecialchars($_POST['email']),htmlspecialchars($_POST['tel']));
  redirect('index');
}

if (isset($_GET['modifier'])) {
  $c = getMembreInfo($con,$_GET['modifier']);
  if($c){
    include 'views/modifyProfil.php';
  }else{
    redirect('index');
  }
}else{
  redirect('index');
}
 ?>
