
<?php

function getEmail($con,$email){
    $str = 'select id_membre from membre where email = ? ';
    $req_pre = mysqli_prepare($con,$str);
    mysqli_stmt_bind_param($req_pre, "s", $email);
    mysqli_stmt_execute($req_pre);
    mysqli_stmt_store_result($req_pre);
    mysqli_stmt_bind_result($req_pre, $res['id_membre']);
    mysqli_stmt_fetch($req_pre);
    return $res['id_membre'];  
}


?>
