<?php

function getAllConfPeriode($con,$datedebut,$datefin){
    $str = "select * from conference where date_debut between '".$datedebut."' and '".$datefin."' and date_fin between '".$datedebut."' and '".$datefin."'"; 
    $req = mysqli_query($con,$str);
    $res = [];
    while ($tmp = mysqli_fetch_assoc($req)) {
      $res[] = $tmp;
    }
    return $res;
 }
 
 ?>
