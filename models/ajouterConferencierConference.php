<?php



function ajouterConferencierConference($con,$id_conferencier,$id_conference){
  $str = 'insert into animer set id_conferencier = ? , id_conference = ?';
  $req_pre = mysqli_prepare($con,$str);
  mysqli_stmt_bind_param($req_pre, "ii",$id_conferencier,$id_conference);
  mysqli_stmt_execute($req_pre);
}

?>
