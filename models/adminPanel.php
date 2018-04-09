<?php

//fonction qui supprime un conférencier, son compte utilisateur ainsi que ses conférences
//elle prend en paramètre l'identifiant du user

function deleteUser($con,$id_membre){
    
  $str = 'delete from membre where id_membre = ?';
  $req_pre = mysqli_prepare($con,$str);
  mysqli_stmt_bind_param($req_pre, "i", $id_membre);
  mysqli_stmt_execute($req_pre);
}


//fonction qui retourne tous les comptes d'utilisateurs

function getUsers($con){
    $str = "select * from membre where est_admin is NULL";
    $req = mysqli_query($con,$str);
    $res = [];
    while ($tmp = mysqli_fetch_assoc($req)) {
      $res[] = $tmp;
    }
    return $res;
}




?>
