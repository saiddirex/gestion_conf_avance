
<?php
include 'models/forgetpwd.php';

$error = false;
$sent = false;

if (isset($_POST['valider-submit'])) {
    $res = getEmail($con,htmlspecialchars($_POST['email']));
    
    if($res){
        $sent = true;

        
        include 'views/forgetpwd.php';   
    }
    else{
        $error = true;
        include 'views/forgetpwd.php';    
    }

}
else{
    include 'views/forgetpwd.php';
}


?>
