<?php 

// require_once("./config.php");
session_destroy();
unset($_SESSION['access_token']);
unset($_SESSION['cart']);
$gclient->revokeToken();
session_destroy();
header('location: index.php');
exit();

/* 
| Facebook Login Eternal API Log out
 */ 



unset($_SESSION['facebook_access_token']);
unset($_SESSION['fb_user_id']);
unset($_SESSION['fb_user_name']);
unset($_SESSION['fb_user_email']);
unset($_SESSION['fb_user_pic']);


header("Location:index.php");
?>
