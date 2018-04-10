<?php
//donnees de connexion
//compte admin  login=administrateur  mdp=admin1234
//compte utilisateur   login=utilisateur    mdp=user1234
//ouverture d'une session
session_start();

//connexion à la base de données
$con = mysqli_connect("localhost","root","","gestion_conference");             

//si la connexion échoue quitter l'exécution

if (!$con) { 
  echo "Erreur lors de la connexion avec la base de données !";
  exit;
}

//sinon
//lire dans la table user

$str = "select * from membre";
$req = mysqli_query($con,$str);
$res = [];
while ($tmp = mysqli_fetch_assoc($req)) {
  $res[]=$tmp;
}



//$user : variable pour stoquer user en cours

$user = NULL ;
if(isset($_SESSION['user'])){
  $user =$_SESSION['user'];
}

//fonction qui dirige l'exécution vers une page donnée

function redirect($page , $get = ''){
  header("Location: ".$page.".php".$get);
  exit();
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Gestion de conférence</title>
  <link rel="stylesheet" href="css/old/bootstrap.min.css">
  <link rel="stylesheet" href="css/old/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/old/bootstrap-datetimepicker.css">
  <link rel="stylesheet" href="css/old/dataTables.css">
  <link rel="stylesheet" href="css/old/style.css">
  <script src="js/jquery.min.js" charset="utf-8"></script>
  <script src="js/bootstrap.min.js" charset="utf-8"></script>
  <script src="js/dataTables.js" charset="utf-8"></script>
  <script src="js/bootstrap-datetimepicker.js" charset="utf-8"></script>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">

        <a class="navbar-brand"><strong></strong></a>

      </div>
      
      
      
         <?php if (isset($user)): ?>
        <ul class="nav navbar-nav navbar-right">
          <?php if ($user['est_admin'] == 1): ?>
           <li><a href="?page = adminPanel"><span class="glyphicon glyphicon-user"></span> ADMIN </a></li>
           <?php else: ?>
          <li><a href="?page = userPanel "><span class="glyphicon glyphicon-user"></span>  Bienvenue <strong><?= $user['login']?></strong></a></li>    
          <?php endif; ?>
          <li><a href="?page=logout"><span class="glyphicon glyphicon-off"></span> Se déconnecter</a></li>
        </ul>
      <?php endif; ?>
      
      
      
      
      
      
      
    </div>
  </nav>
  <div class="container">
    
                          
        <?php
    
    
         if(isset($user) && isset($_GET["page"])){
          
          //après succès authentification
          
            if ($user['est_admin'] == "1") {
          
              //page d'accueil ADMIN
              
                $page = $_GET["page"];
                
                switch ($page) {

                     case 'logout':
                          include 'controllers/logout.php';
                     break;

                       case 'creerConference':
                        include 'controllers/creerConference.php';
                    break;
                  
                     case 'validerConference':
                        include 'controllers/validerConference.php';
                    break;
                  
                    case 'afficherConferencesProp':
                        include 'controllers/afficherConferencesProp.php';
                    break;
                  
                   case 'showCalendrier':
                        include 'controllers/showCalendrier.php';
                    break;
                  
                    case 'gererConferences':
                        include 'controllers/gererConferences.php';
                    break;
                  
                     case 'gererConferenciers':
                        include 'controllers/gererConferenciers.php';
                    break;
                  
                        case 'proposerConference':
                      include 'controllers/proposerConference.php';
                   break;
                     
                     case 'showUser':
                         include 'controllers/showUser.php';
                    break;
            
                    case 'home':
                        include 'home.php';
                   break;
                   case 'afficherConferenciers':
                        include 'controllers/afficherConferenciers.php';
                   break;
                  
                    case 'showConfPrint':
                          include 'controllers/showConfPrint.php';
                   break;
                  
                    
              
               case 'insererConferencier':
                          include 'controllers/insererConferencier.php';
                   break;
                  case 'modify':
                        include 'controllers/modifyConf.php';
                    break;
                  
                  case 'deleteConference':
                          include 'controllers/deleteConference.php';
                   break;
                  
                     case 'deleteConferenceProp':
                          include 'controllers/deleteConferenceProp.php';
                   break;
                  
                  
                  case 'ajouterConferencierConference':
                          include 'controllers/ajouterConferencierConference.php';
                   break;
                  
                   case 'modifierConferencier':
                        include 'controllers/modifierConferencier.php';
                    break;
                  
                    case 'deleteConferencier':
                        include 'controllers/deleteConferencier.php';
                    break; 
                  
                 case 'modifierProfil':
                        include 'controllers/modifyProfil.php';
                    break;   
                  
                  
                  // default:
                    //    include 'controllers/adminPanel.php';
                  //   break;
                   }
               }
               /*
               elseif ($user['est_conferencier'] == "1"){
                
                //page d'accueil du conférencier
            
                    $page = $_GET["page"];
                    switch ($page) {
                  
                    case 'logout':
                        include 'controllers/logout.php';
                    break;

                //    case 'proposerConference':
               //         include 'controllers/proposerConference.php';
                //    break;
                  
                    case 'about':
                        include 'about.html';
                    break;
                  
                   case 'showCalendrier':
                        include 'controllers/showCalendrier.php';
                    break;
          
                    case 'home':
                       include 'home.php';
                    break;

                    case 'modify':
                        include 'controllers/modifyConf.php';
                    break;
        
                    case 'modifierProfil':
                        include 'controllers/modifyProfil.php';
                    break;     
        
                    case 'modifierPwd':
                       include 'controllers/modifyPwd.php';
                    break;
        
                   case 'showProfil':
                        include 'controllers/showProfil.php';
                    break;
                  
                  
                  
                  
                       case 'deleteConferenceProp':
                          include 'controllers/deleteConferenceProp.php';
                   break;
        
                   case 'showConfPerso':
                            include 'controllers/showCalendrierPeriode-Conferencier.php';
                   break;

                       case 'showConfPrint':
                          include 'controllers/showConfPrint.php';
                   break;
                  
                  
                       case 'mesConfProp':
                          include 'controllers/mesConfProp.php';
                   break;
                  
                  
                   
                   
                  default:
                        include 'controllers/conferencierPanel.php';
                   break;
                }
              }
              */
               
              else{
                //page d'accueil d'un utilisateur
                            
                      $page = $_GET["page"];
                    switch ($page) {
                  
                    case 'logout':
                        include 'controllers/logout.php';
                    break;

                        case 'proposerConference':
                      include 'controllers/proposerConference.php';
                   break;
                  
                         case 'afficherConferencesFav':
                      include 'controllers/afficherConferencesFav.php';
                   break;
                 
                    case 'about':
                        include 'about.html';
                    break;
                  
                  
                        case 'deleteConferenceFav':
                          include 'controllers/deleteConferenceFav.php';
                   break;
                  
                  
                     case 'designerConferenceFav':
                          include 'controllers/designerConferenceFav.php';
                   break;
                  
                  
                  
                   case 'showCalendrier':
                        include 'controllers/showCalendrier.php';
                    break;
          
                    case 'home':
                       include 'home.php';
                    break;
    
                         case 'modifierProfil':
                        include 'controllers/modifyProfil.php';
                    break;
                  
                  
        
                    case 'modifierPwd':
                       include 'controllers/modifyPwd.php';
                    break;
        
                   case 'showProfil':
                        include 'controllers/showProfil.php';
                    break;
        
                   case 'showConfPrint':
                       include 'controllers/showConfPrint.php';
                   break;
                  
                      case 'showCalendrierPeriode':
                            include 'controllers/showCalendrierPeriode.php';
                   break;


                 default:
                        include 'controllers/userPanel.php';
                   break;
                }
           
            }
            
        }
            
            
            //suite authentification
            
            elseif(isset($user)) {
              
              if ($user['est_admin'] == 1) {
                  include 'controllers/adminPanel.php';
              }
              
            
              else{
                  include 'controllers/userPanel.php'; 
              }
            }
            
            //////////////////////////////mode sans authentification
            
            elseif (isset($_GET['page'] ) && $_GET['page']=="showCalendrier") {
              include 'controllers/showCalendrier.php';
            }
            
            elseif (isset($_GET['page'] )&& $_GET['page']=="forgetpwd") {
              include 'controllers/forgetpwd.php';
            }
            
            elseif (isset($_GET['page'] )&& $_GET['page']=="about") {
              include 'about.html';
            }
            
            elseif (isset($_GET['page'] )&& $_GET['page']=="login") {
              include 'controllers/login.php';
            }
            
            elseif (isset($_GET['page'] )&& $_GET['page']=="showCalendrierPeriode") {
              include 'controllers/showCalendrierPeriode.php';
            }
            
            elseif (isset($_GET['page'] )&& $_GET['page']=="signUp") {
              include 'controllers/signUp.php';
            }
            
             elseif (isset($_GET['page'] )&& $_GET['page']=="showConfPrint") {
              include 'controllers/showConfPrint.php';
            }
            
             elseif (isset($_GET['page'] )&& $_GET['page']=="proposerConference") {
                           include 'controllers/proposerConference.php';
            }
            
            
            
            
            
            
                  
                  
            
            else{
              include 'home.php';
            }
    
    ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  </div>
  <script src="js/dataTablesBootsrtap.min.js" charset="utf-8"></script>
  <script>
  $('#date').datetimepicker();
  $(document).ready(function() {
    $('#table').DataTable();
  } );
  </script>
  
   <script>
  $('#date2').datetimepicker();
  </script>
  
</body>
</html>
