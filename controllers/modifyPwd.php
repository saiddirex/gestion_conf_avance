<?php

 
include 'models/modifyPwd.php';



//compte le nombre de tentatives d'
    
if (!isset($_SESSION['compteur2']))  
   {  
    $_SESSION['compteur2'] = 0;  
   }  
else {  
    $_SESSION['compteur2'] = $_SESSION['compteur2'] + 1;  
     }  


//mots de passe modifé
$succes = false;

//mots de passe différents
$error = false;

//champs non saisis
$error2 = false;

//ancien mdp faux
$error3 = false;

//ancien mot de passe non saisi
$error4 = false;

//mot de passe court
$error5 = false;

//plus de 3 tantatives
$error6 = false;

if (isset($_POST['modifier-submit'])) {
if($_SESSION['compteur2']<3){
      
      if ($_POST['old-password'] != ''){
            $usr = getUserPwd($con,$_GET['modifier'],htmlspecialchars($_POST['old-password']));
            
            if($usr){
                  
                  if(htmlspecialchars($_POST['password']) == '' || htmlspecialchars($_POST['confirm-password']) == ''){
                        $error2 = true;
                        $_SESSION['compteur2'] = $_SESSION['compteur2'] - 1;
                        include 'views/modifyPwd.php';
                  }
                  
                  elseif(htmlspecialchars($_POST['password']) == htmlspecialchars($_POST['confirm-password'])){
                        if(strlen(htmlspecialchars($_POST['password'])) >= 8){
                              updateUser($con,$_GET['modifier'],htmlspecialchars($_POST['password']));
                               $_SESSION['compteur2'] = 0;
                               $succes = true;
                               include 'views/modifyPwd.php'; 
                        }
                        else{
                               $error5 = true;
                               $_SESSION['compteur2'] = $_SESSION['compteur2'] - 1;
                               include 'views/modifyPwd.php';
                              
                        }             
                  }
                  
                  else{
                        $error = true;
                        $_SESSION['compteur2'] = $_SESSION['compteur2'] - 1;
                        include 'views/modifyPwd.php';
                  }
            }
            else{
                  $error3 = true;
                  include 'views/modifyPwd.php';
            }
      }
      else{
            $error4 = true;
            $_SESSION['compteur2'] = $_SESSION['compteur2'] - 1;  
            include 'views/modifyPwd.php';
      }
}
else{
            $error6 = true;
            include 'views/modifyPwd.php';
}
}
else{
      include 'views/modifyPwd.php';
}
?>
