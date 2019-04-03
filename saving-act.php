<?php
include 'koneksi.php';
$masuk = $_POST['masuk'];
$keluar = $_POST['keluar'];
$ket = $_POST['ket'];

if(!isset($_POST['submit'])){
    header('location:datang.php?m=forbidden');
    die;
}

$sql = "INSERT INTO hasil VALUES('','$masuk','$keluar','$ket')";

mysqli_query($koneksi,$sql);



header("location:datang.php?m=input"); 
