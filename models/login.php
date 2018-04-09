<?php

//fonction pour s'authentifier à l'aide d'un login et d'un mot de passe

function connect($con,$login ,$mdp){
  $str = "select * from membre where login = '".$login."'";
  $req = mysqli_query($con,$str);
  $res = mysqli_fetch_assoc($req);
  
  if(password_verify ( $mdp , $res['mdp'] )){
    return $res;
  }
  else{
    return false;
  }
}


?>
