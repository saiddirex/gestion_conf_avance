
<?php

  include 'models/ajouterConferencierConference.php';

if (isset($_GET['ajouter']) && isset($_GET['conferencier'])){ 
   ajouterConferencierConference($con,$_GET['ajouter'],$_GET['conferencier']);
   include 'controllers/gererConferences.php';
}

  //  include 'views/ajouterConferencierConference.php';


?>





    
