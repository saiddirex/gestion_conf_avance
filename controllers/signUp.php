<?php


//tableau pour stocker les informtions saisies pour les réafficher en cas d'erreur au navigateur pour continuer l'inscription

$buffer['login'] = "";
$buffer['nom'] = "";
$buffer['prenom'] = "";

$buffer['email'] = "";
$buffer['tel'] = "";



//les 2 mots de passe différents
$error22 = false;

//login existe déjà
$error33 = false;

//champs non remplis
$error44 = false;

//mot de passe court
$error55 = false;



include 'models/signUp.php';


if(isset($_POST['register-submit'])){
      
    
 
      if(htmlspecialchars($_POST['mdp']) != htmlspecialchars($_POST['confirm-mdp'])){
            $error22 = true;       
            $buffer['login'] = htmlspecialchars($_POST['login']);
            $buffer['nom'] = htmlspecialchars($_POST['nom']);
            $buffer['prenom'] = htmlspecialchars($_POST['prenom']);
   
            $buffer['email'] = htmlspecialchars($_POST['email']);
            $buffer['tel'] = htmlspecialchars($_POST['tel']);

            include 'views/signUp.php';
      }
      
         //si longueur du mot de passe <8
      elseif(strlen($_POST['mdp'])<8){
            $error55 = true;
            $buffer['login'] = htmlspecialchars($_POST['login']);
            $buffer['nom'] = htmlspecialchars($_POST['nom']);
            $buffer['prenom'] = htmlspecialchars($_POST['prenom']);
    
            $buffer['email'] = htmlspecialchars($_POST['email']);
            $buffer['tel'] = htmlspecialchars($_POST['tel']);
    
            include 'views/signUp.php';
      }
           
      //si les 2 mots de passe sont identiques on teste existence de tous les champs
      
      elseif(  $_POST['login'] != '' && $_POST['mdp'] != '' && $_POST['nom'] != '' && $_POST['prenom'] != '' &&  $_POST['email'] != '' && $_POST['tel'] ){
  
            $tmp = register($con,$_POST['login'],$_POST['mdp'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['tel']);
            
            if ($tmp) {
              $_SESSION['user'] = $tmp;
              redirect('index');
            }
            else{ //login existe déjà
                  $error33 = true;
                  $buffer['login'] = htmlspecialchars($_POST['login']);
            $buffer['nom'] = htmlspecialchars($_POST['nom']);
            $buffer['prenom'] = htmlspecialchars($_POST['prenom']);
      
            $buffer['email'] = htmlspecialchars($_POST['email']);
            $buffer['tel'] = htmlspecialchars($_POST['tel']);

                  include 'views/signUp.php';
            }
      }
      else{
            $error44 = true;
              $buffer['login'] = htmlspecialchars($_POST['login']);
            $buffer['nom'] = htmlspecialchars($_POST['nom']);
            $buffer['prenom'] = htmlspecialchars($_POST['prenom']);
  
            $buffer['email'] = htmlspecialchars($_POST['email']);
            $buffer['tel'] = htmlspecialchars($_POST['tel']);
   
            include 'views/signUp.php';
      }  
}
else{
    include 'views/signUp.php';
}


?>