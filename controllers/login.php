<?php


include 'models/login.php';


//compte le nombre de tentatives d'authentification

if (!isset($_SESSION['compteur']))  
   {  
    $_SESSION['compteur'] = 0;  
   }  
else {
            $_SESSION['compteur'] = $_SESSION['compteur'] + 1;
} 


//mot de passe ou login incorrect
$error11 = false;

//champs non remplis
$error22 = false;

//3 fausses tentatives 

$error33 = false;


if(isset($_POST['login-submit'])){
if($_SESSION['compteur'] <3 ){
      if(htmlspecialchars($_POST['login']) != '' && htmlspecialchars($_POST['mdp'])!= ''){
            $tmp = connect($con,htmlspecialchars($_POST['login']),htmlspecialchars($_POST['mdp']));
            if ($tmp) {
                  $_SESSION['user'] = $tmp;
                  $_SESSION['compteur'] = 0; 
                  redirect('index');
            }
            else{
                  $error11 = true;
                  include 'views/login.php';
            }
      }
      else{
            $error22 = true;
            $_SESSION['compteur'] = $_SESSION['compteur'] - 1;
            include 'views/login.php'; 
      }
}
else{
      $error33 = true;
      include 'views/login.php'; 
}
}
else{
    include 'views/login.php';
}
?>