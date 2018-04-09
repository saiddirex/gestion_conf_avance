<?php



function getConferencierInfo($con,$id_conferencier){
  $str = "select * from conferencier where id_conferencier = ".$id_conferencier;
  $req = mysqli_query($con,$str);
  $res = mysqli_fetch_assoc($req);
  return $res;
}

//fonction qui met à jour le profil d'un user

function updateConferencier($con,$id_conferencier,$nom,$prenom,$fonction,$email,$tel,$site_web){
  $str = "update conferencier set fonction = '".$fonction."' ,site_web = '".$site_web."' , nom = '".$nom."' ,prenom = '".$prenom."' ,tel = '".$tel."' ,email ='".$email."' where id_conferencier = ".$id_conferencier;
  $req = mysqli_query($con,$str);
}


 ?>
