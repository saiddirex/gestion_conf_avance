
<?php

include 'models/conf.php';



function loadConf($con,$id_membre){
  $str = "select * from conference,animer where conference.id_conference = animer.id_conference and animer.id_membre = ".$id_membre;
  $req = mysqli_query($con,$str);
  $res=[];
  while ($tmp =mysqli_fetch_assoc($req)) {
    $res[] = $tmp;
  }
  return $res;
}



?>
