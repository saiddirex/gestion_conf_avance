<?php

include 'models/modifyConf.php';

$succes = false;
$error = false;
if (isset($_POST['modify-submit'])) {
  
  if(htmlspecialchars($_POST['theme']) != '' && htmlspecialchars($_POST['site_web']) != '' && htmlspecialchars($_POST['date_debut']) != '' && htmlspecialchars($_POST['date_fin']) != '' && htmlspecialchars($_POST['lieu'])  != '' && htmlspecialchars($_POST['ville']) != '' && htmlspecialchars($_POST['pays'])){
    updateConf($con,$_GET['modify'],htmlspecialchars($_POST['theme']),htmlspecialchars($_POST['date_debut']),htmlspecialchars($_POST['date_fin']),htmlspecialchars($_POST['lieu']),htmlspecialchars($_POST['ville']),htmlspecialchars($_POST['pays']),htmlspecialchars($_POST['site_web']),htmlspecialchars($_POST['description']));
  //redirect('index');
  $succes = true;
  }
  else{
    //champs manquant
    $error = true;
  }
}

if (isset($_GET['modify'])) {
      $c = getConf($con,$_GET['modify']);
      include 'views/modifyConf.php';
  }
  
  
 ?>



