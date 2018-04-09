<?php
include 'models/user.php';

//fonction qui met à jour le profil d'un user

function updateProfil($con,$id_membre,$nom,$prenom,$email,$tel){
  $str = "update membre set nom = '".$nom."' ,prenom = '".$prenom."' ,tel = '".$tel."' ,email ='".$email."' where id_membre = ".$id_membre;
  $req = mysqli_query($con,$str);
}
 ?>
