<?php
include "koneksi.php";
$update = $_POST['id'];
$masuk = $_POST['masuk'];
$keluar = $_POST['keluar'];
$ket = $_POST['ket'];

$sqlAfter = "UPDATE hasil SET masuk='$masuk',keluar='$keluar',ket='$ket' WHERE id=$update ";

mysqli_query($koneksi,$sqlAfter);

header('location:datang.php?m=updated');

 