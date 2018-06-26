<?php
	session_start();
	if($_SESSION['email']=='uuuu123@gmail.com'&& $_SESSION['mk']=='uuuu123')
	{
		$id_dm = $_GET['id_dm'];
		include_once './ketnoi.php';
		$sql = "DELETE FROM dmsanpham WHERE id_dm='$id_dm' ";
		$query = mysqli_query($con,$sql);
		header('location: quantri.php?page_layout=danhsachdm');
	}
	else
	{
		header('location: index.php');
	}
?>