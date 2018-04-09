<?php
include 'models/showCalendrierPeriode.php';


//un des champs vide
$error1 = false;

//aucun résultat
$error2 = false;
 
if (isset($_POST['showCalendrierPeriode'])){

    if(htmlspecialchars($_POST['datedebut']) != '' && htmlspecialchars($_POST['datefin']) != ''){
        $conf = getAllConfPeriode($con,htmlspecialchars($_POST['datedebut']),htmlspecialchars($_POST['datefin']));
        if($conf){
            include 'views/showCalendrierPeriode-resultat.php';
        }
        else{
     
               $error1 = true;
            include 'views/showCalendrierPeriode.php';
        }
    }
    else{

             $error2 = true;
            include 'views/showCalendrierPeriode.php';
    }
    
 }
 else{
    include 'views/showCalendrierPeriode.php';
 }
?>
 
 
 

 