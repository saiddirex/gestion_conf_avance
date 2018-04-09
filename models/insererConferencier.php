<?php



//fonction pour enregistrer un conférencier

function insererConferencier($con , $nom , $prenom, $fonction, $email , $tel, $site_web){
  $str = 'select id_conferencier from conferencier where nom = ? and prenom = ? and email = ? ';
  $req_pre = mysqli_prepare($con,$str);
    mysqli_stmt_bind_param($req_pre, "sss", $nom , $prenom, $email );
    mysqli_stmt_execute($req_pre);
    mysqli_stmt_store_result($req_pre);
    mysqli_stmt_bind_result($req_pre, $res['id_conferencier']);
    mysqli_stmt_fetch($req_pre);
    if($res['id_conferencier']) return false;
  
  
  $str = 'insert into conferencier set nom = ? ,prenom = ? , fonction = ? , site_web = ? , email = ? , tel = ? ';         
  $req_pre = mysqli_prepare($con,$str);
  mysqli_stmt_bind_param($req_pre, "ssssss", $nom , $prenom, $fonction, $site_web, $email , $tel);
  mysqli_stmt_execute($req_pre);
  
  
  
  
  
  
  $str = "select * from conferencier where nom = '".$nom."' and prenom = '".$prenom."' and email = '".$email."'";
  $req = mysqli_query($con,$str);
  $res = mysqli_fetch_assoc($req);
  return $res;
  
}
?>
