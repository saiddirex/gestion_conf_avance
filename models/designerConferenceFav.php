

<?php



function designerConferenceFav($con,$id_membre,$id_conference){
    $str = 'insert into suivre set id_membre = ? , id_conference = ? ';
    $req_pre = mysqli_prepare($con,$str);
    mysqli_stmt_bind_param($req_pre, "ii", $id_membre,$id_conference);
    mysqli_stmt_execute($req_pre);
}



?>
