<?php



//fonction pour s'inscrire au site

function register($con , $login , $mdp , $nom , $prenom,$email , $tel){

  
  //verification si le login existe deja
  $str = "select * from membre where login = '".$login."'";
  $req = mysqli_query($con,$str);
  $res = mysqli_fetch_assoc($req);
  if($res) return false;
  
  $hash = password_hash($mdp,PASSWORD_BCRYPT) ;
  $str = "insert into membre set nom = '".$nom."' ,prenom = '".$prenom."' ,email = '".$email."' , tel = '".$tel."' , login = '".$login."' , mdp = '".$hash."'";
  $req = mysqli_query($con,$str);
  
  

  $str = "select * from membre where login = '".$login."'";
  $req = mysqli_query($con,$str);
  $res = mysqli_fetch_assoc($req);
  
  return $res;
  
}
?>
