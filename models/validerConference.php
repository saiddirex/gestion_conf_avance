<?php


  

function validerConference($con,$id_conference){
  $str = "update conference set est_valide = 1 where id_conference =".$id_conference;       
  $req = mysqli_query($con,$str);

  $str = "update animer set est_valide = 1 where id_conference =".$id_conference;       
  $req = mysqli_query($con,$str);
}







?>



