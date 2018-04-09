<?php
include 'models/conf.php';

function updateConf($con,$id_conference,$theme,$date_debut,$date_fin,$lieu,$ville,$pays,$site_web,$description){
  $str = "update conference set theme = '".$theme."' ,date_debut = '".$date_debut."' ,date_fin = '".$date_fin."' ,site_web = '".$site_web."',lieu = '".$lieu."' ,ville = '".$ville."' ,pays = '".$pays."' , description ='".$description."' where id_conference = ".$id_conference;
  $req = mysqli_query($con,$str);
}
 ?>
