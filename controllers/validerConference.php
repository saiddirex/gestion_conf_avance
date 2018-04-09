
<?php


include 'models/validerConference.php';





if (isset($_GET['valider'])) {
  validerConference($con,htmlspecialchars($_GET['valider']));
    include 'controllers/afficherConferencesProp.php';
  
}




?>
