<?php
session_start();

if($_SESSION['email']=='uuuu123@gmail.com' && $_SESSION['mk']=='uuuu123'){
    $id_sp=$_GET['id_sp'];
    include_once './ketnoi.php';
    $sql="DELETE FROM sanpham WHERE id_sp='$id_sp'";
    $query= mysqli_query($con, $sql);
    header('location: quantri.php?page_layout=danhsachsp');
}
else{
    header('location: index.php');
}

?>