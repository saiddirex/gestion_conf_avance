<?php



function getConferenciers($con){
    $str = "select * from conferencier";
    $req = mysqli_query($con,$str);
    $res = [];
    while ($tmp = mysqli_fetch_assoc($req)) {
      $res[] = $tmp;
    }
    return $res;
}



?>
