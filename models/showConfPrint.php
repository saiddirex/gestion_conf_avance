<?php

include 'models/conf.php';

function getConferenciers($con,$id_conference){
  $str = "select * from conference,animer,conferencier where conference.id_conference = animer.id_conference and animer.id_conferencier = conferencier.id_conferencier and conference.id_conference = ".$id_conference;
  $req = mysqli_query($con,$str);
  $res =  [];
  while ($tmp =  mysqli_fetch_assoc($req)) {
    $res[] = $tmp;
  }
  return $res;
}

 ?>

