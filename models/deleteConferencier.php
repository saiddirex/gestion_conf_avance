<?php

function deleteConferencier($con,$id_conferencier){
  $str = 'delete from animer where id_conferencier = ? ';
  $req_pre = mysqli_prepare($con,$str);
  mysqli_stmt_bind_param($req_pre, "i", $id_conferencier);
  mysqli_stmt_execute($req_pre);
 
  $str = 'delete from conferencier where id_conferencier = ? ';
  $req_pre = mysqli_prepare($con,$str);
  mysqli_stmt_bind_param($req_pre, "i", $id_conferencier);
  mysqli_stmt_execute($req_pre);  
}

?>



