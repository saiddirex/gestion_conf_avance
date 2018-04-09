<?php

  include 'models/showConfPrint.php';
  
      
      
      
      
      if (isset($_GET['show'])) {
        
         $conference = getConfProp($con,$_GET['show']);
         
                
         
        $conferenciers = getConferenciers($con,$_GET['show']);
        
        include 'views/showConfPrint.php';
        
        }

      
    
?>









