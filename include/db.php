<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$localhost = "localhost";
$root = "root";
$Password = "";
$Database = "logomart";
$connection = new mysqli($localhost,$root,$Password,$Database);
If(!$connection){
    die("Databse not Connected");
}

?>