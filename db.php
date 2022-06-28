<?php 
$server = "localhost";
$un = "root";
$pw = "";
$dbn = "firebase";
$conn = mysqli_connect($server,$un,$pw,$dbn);

if(!$conn){
    echo "Database connection error";
}
?>