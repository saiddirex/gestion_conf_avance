<?php






function getAllProposedConf($con){
  $str = "select * from conference where est_valide is null";
  $req = mysqli_query($con,$str);
  $res =  [];
  while ($tmp =  mysqli_fetch_assoc($req)) {
    $res[] = $tmp;
  }
  return $res;
}




 ?>
