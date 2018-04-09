<?php

$buffer['theme'] = "";
$buffer['date_debut'] = "";
$buffer['date_fin'] = "";
$buffer['lieu'] = "";
$buffer['ville'] = "";
$buffer['pays'] = "";
$buffer['site_web'] = "";
$buffer['description'] = "";

$error = false;

//horaire invalide
$error2 = false;

$succes = false;


include 'models/proposerConference.php';


if (isset($_POST['create-submit'])){
  
  
  if(htmlspecialchars($_POST['theme']) != '' && htmlspecialchars($_POST['date_debut']) != '' && htmlspecialchars($_POST['date_fin']) != '' && htmlspecialchars($_POST['lieu']) != '' && htmlspecialchars($_POST['ville']) != '' && htmlspecialchars($_POST['pays']) != ''  && htmlspecialchars($_POST['site_web']) != ''){
    if (htmlspecialchars($_POST['date_debut']) >= date('Y-m-d H:i:s') && htmlspecialchars($_POST['date_fin']) >= date('Y-m-d H:i:s')  &&   htmlspecialchars($_POST['date_fin']) >= htmlspecialchars($_POST['date_debut'])  ){
		proposerConference($con,htmlspecialchars($_POST['theme']),htmlspecialchars($_POST['date_debut']),htmlspecialchars($_POST['date_fin']),htmlspecialchars($_POST['lieu']),htmlspecialchars($_POST['ville']),htmlspecialchars($_POST['pays']),htmlspecialchars($_POST['site_web']),htmlspecialchars($_POST['description']),$user['id_membre']);
		$succes = true;
		
		
		$buffer['theme'] = htmlspecialchars($_POST['theme']);
     $buffer['lieu'] = htmlspecialchars($_POST['lieu']);
	      $buffer['ville'] = htmlspecialchars($_POST['ville']);
		       $buffer['pays'] = htmlspecialchars($_POST['pays']);
      $buffer['date_debut'] = htmlspecialchars($_POST['date_debut']);
	    $buffer['date_fin'] = htmlspecialchars($_POST['date_fin']);
		
		       $buffer['site_web'] = htmlspecialchars($_POST['site_web']);
		
       $buffer['description'] = htmlspecialchars($_POST['description']);
            include 'views/proposerConference.php';
    }
    else{
      
      $error2 = true;
   
    $buffer['theme'] = htmlspecialchars($_POST['theme']);
     $buffer['lieu'] = htmlspecialchars($_POST['lieu']);
	      $buffer['ville'] = htmlspecialchars($_POST['ville']);
		       $buffer['pays'] = htmlspecialchars($_POST['pays']);
      $buffer['date_debut'] = htmlspecialchars($_POST['date_debut']);
	    $buffer['date_fin'] = htmlspecialchars($_POST['date_fin']);
		
		      $buffer['site_web'] = htmlspecialchars($_POST['site_web']);
       $buffer['description'] = htmlspecialchars($_POST['description']);
            include 'views/proposerConference.php';
    }
  
      
  }
  else{
    $error = true;
   
    $buffer['theme'] = htmlspecialchars($_POST['theme']);
     $buffer['lieu'] = htmlspecialchars($_POST['lieu']);
	 	      $buffer['ville'] = htmlspecialchars($_POST['ville']);
		       $buffer['pays'] = htmlspecialchars($_POST['pays']);


  $buffer['date_debut'] = htmlspecialchars($_POST['date_debut']);
	    $buffer['date_fin'] = htmlspecialchars($_POST['date_fin']);
		
		      $buffer['site_web'] = htmlspecialchars($_POST['site_web']);
       $buffer['description'] = htmlspecialchars($_POST['description']);
   
     include 'views/proposerConference.php';
  }
}
else {
  include 'views/proposerConference.php';
  
}
?>
