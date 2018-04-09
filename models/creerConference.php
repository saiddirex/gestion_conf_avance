<?php

//fonction pour ajouter une conférence dans la BD

function creerConference($con,$theme,$date_debut,$date_fin,$lieu,$ville,$pays,$site_web,$description){
  $str = 'insert into conference set est_valide = 1, theme = ? , date_debut = ? , date_fin = ? , lieu = ? , ville = ? , pays = ? , site_web = ?, description = ? ';
  $req_pre = mysqli_prepare($con,$str);
  mysqli_stmt_bind_param($req_pre, "ssssssss", $theme,$date_debut,$date_fin,$lieu,$ville,$pays,$site_web,$description);
  mysqli_stmt_execute($req_pre);
}
 ?>
