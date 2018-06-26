<?php 
	$dbHost = 'localhost';
	$dbUser="root";
	$dbPass="";
	$dbName="MobileShop";

	$con = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName) ;//or die('ket noi that bai !');
	if($con){
		$setLang = mysqli_query($con,"SET NAMES 'utf8' ");
	}
	else{
		die("ket noi that bai".mysqli_connect_error());
	} 
	$setLang= mysqli_query($con,"SET NAMES 'utf8' ");
	
 ?>