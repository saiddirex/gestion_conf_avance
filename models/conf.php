<?php

//fonction qui retourne les informations relatives à une conférence en prenant comme paramètre l'identifiant de la conférence

function getConf($con,$id_conference){
  $str = "select * from conference where id_conference = ".$id_conference;
  $req = mysqli_query($con,$str);
  $res = mysqli_fetch_assoc($req);
  return $res;
}

function getConfProp($con,$id_conference){
  $str = "select * from conference where id_conference = ".$id_conference;
  $req = mysqli_query($con,$str);
  $res = mysqli_fetch_assoc($req);
  return $res;
}

//fonction qui retourne les informations relatives à toutes les conférences

function getAllConf($con){
  $str = "select * from conference where est_valide = 1";
  $req = mysqli_query($con,$str);
  $res =  [];
  while ($tmp =  mysqli_fetch_assoc($req)) {
    $res[] = $tmp;
  }
  return $res;
}
 ?>
