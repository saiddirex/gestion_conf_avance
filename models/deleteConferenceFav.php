<?php

function deleteConferenceFav($con,$id_conference){
  $str = 'delete from suivre where id_conference = ? ';
  $req_pre = mysqli_prepare($con,$str);
  mysqli_stmt_bind_param($req_pre, "i", $id_conference);
  mysqli_stmt_execute($req_pre);
    

}

?>



