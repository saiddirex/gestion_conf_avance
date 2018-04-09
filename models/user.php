<?php

//fonction qui retourne les informations sur un conférencier en prenant comme entrée le idp

function getMembreInfo($con,$id_membre){
  $str = "select * from membre where id_membre = ".$id_membre;
  $req = mysqli_query($con,$str);
  $res = mysqli_fetch_assoc($req);
  return $res;
}
?>


<?php
function getUtilisateurInfo($con,$id_membre){
  $str = "select * from membre where id_membre = ".$id_membre;
  $req = mysqli_query($con,$str);
  $res = mysqli_fetch_assoc($req);
  return $res;
}
?>
