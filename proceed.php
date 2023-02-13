<?php
session_start();
//going to to payment gateway page

if(isset($_POST["Proceed"])){
    if($_SESSION["access_token"]){
      header("location:payment-gateway.php");
    }
    else{
       echo "
       <script>
       alert('Please Login First to proceed');
       windows.location.href='./signup.php';
       </script>
       ";
    }
 }

?>