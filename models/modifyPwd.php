<?php


//fonction qui modifie le mot de passe d'un utilisateur

function updateUser($con,$id_membre,$pwd){
  
  $hash = password_hash($pwd,PASSWORD_BCRYPT) ;
  
  $str = "update membre set mdp = '".$hash."' where id_membre = ".$id_membre;
  $req = mysqli_query($con,$str);
 
}



function getUserPwd($con,$id_membre,$pwd){
  $str = "select * from membre where id_membre = ".$id_membre;
  $req = mysqli_query($con,$str);
  $res = mysqli_fetch_assoc($req);
  
  if(password_verify ( $pwd , $res['mdp'] )){
    return $res;
  }
  else{
    return false;
  }
}




 
 ?>

