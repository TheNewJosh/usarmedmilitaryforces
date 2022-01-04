<?php
ob_start();
session_start();

require_once("core/aaa-db.php");
require_once("core/aaa-class.php");
 
$objcommon = new common();

if(isset($_POST['submit_login'])){
	$size = 0;
    $passcode = $_POST['passcode'];
    $objcommon->passcode = md5($passcode);
    
    $result = $objcommon->userLogin($pdo);
    if($result != ""){
        $_SESSION['passcode'] = $result['code'];
        header("location: ../admin.php?session=set");
    }
    else{
        $message_err = "Invalid Login Details";
        header("location: ../login.php?session=notset");
    }

}
?>