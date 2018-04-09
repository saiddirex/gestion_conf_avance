<?php


//tableau pour stocker les informtions saisies pour les réafficher en cas d'erreur au navigateur pour continuer l'inscription

$buffer['nom'] = "";
$buffer['prenom'] = "";

$buffer['fonction'] = "";
$buffer['email'] = "";
$buffer['tel'] = "";
$buffer['site_web'] = "";




//conférencier existe déjà
$error33 = false;

//champs non remplis
$error44 = false;

//enregistrement avec succès
$succes = false;


include 'models/insererConferencier.php';


if(isset($_POST['register-submit'])){
      
     
      if(   $_POST['nom'] != '' && $_POST['prenom'] != '' && $_POST['fonction'] != '' && $_POST['email'] != '' && $_POST['tel'] ){
  
            $tmp = insererConferencier($con,$_POST['nom'],$_POST['prenom'],$_POST['fonction'],$_POST['email'],$_POST['tel'],$_POST['site_web']);
            
            if ($tmp) {
                  $succes = true;
                  
                  
                       $buffer['nom'] = htmlspecialchars($_POST['nom']);
            $buffer['prenom'] = htmlspecialchars($_POST['prenom']);
           
            $buffer['fonction'] = htmlspecialchars($_POST['fonction']);
            $buffer['email'] = htmlspecialchars($_POST['email']);
            $buffer['tel'] = htmlspecialchars($_POST['tel']);
            $buffer['site_web'] = htmlspecialchars($_POST['site_web']);
                  
                  
                  include 'views/insererConferencier.php';
           
            }
            else{
                  
            //conferencier existe déjà
            
                  $error33 = true;
                  
        
            $buffer['nom'] = htmlspecialchars($_POST['nom']);
            $buffer['prenom'] = htmlspecialchars($_POST['prenom']);
        
            $buffer['fonction'] = htmlspecialchars($_POST['fonction']);
            $buffer['email'] = htmlspecialchars($_POST['email']);
            $buffer['tel'] = htmlspecialchars($_POST['tel']);
            $buffer['site_web'] = htmlspecialchars($_POST['site_web']);
                  include 'views/insererConferencier.php';
            }
      }
      else{
            $error44 = true;
          
            $buffer['nom'] = htmlspecialchars($_POST['nom']);
            $buffer['prenom'] = htmlspecialchars($_POST['prenom']);
           
            $buffer['fonction'] = htmlspecialchars($_POST['fonction']);
            $buffer['email'] = htmlspecialchars($_POST['email']);
            $buffer['tel'] = htmlspecialchars($_POST['tel']);
            $buffer['site_web'] = htmlspecialchars($_POST['site_web']);
            include 'views/insererConferencier.php';
      }  
}
else{
    include 'views/insererConferencier.php';
}


?>
