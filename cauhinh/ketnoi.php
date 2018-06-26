<?php
$dbHost="localhost";
$dbUser="root";
$dbPass="";
$dbName="MobileShop";
$conn= mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if($conn){
    $setLang=mysqli_query($conn,"SET NAMES 'utf8'");
}
else{
    die("Kết nối thất bại ".mysqli_connect_error());
}
?>

