<?php

function getAllFavConf($con,$id_membre){
  $str = "select * from conference,suivre where conference.id_conference = suivre.id_conference and suivre.id_membre = ".$id_membre;
  $req = mysqli_query($con,$str);
  $res =  [];
  while ($tmp =  mysqli_fetch_assoc($req)) {
    $res[] = $tmp;
  }
  return $res;
}

?>
