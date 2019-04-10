<?php
include "koneksi.php";
$update = $_POST['id'];
$wishlist = $_POST['wishlist'];
$cost = $_POST['cost'];
$url = $_POST['url'];

$sqlAfter = "UPDATE hasil SET wishlist='$wishlist',cost='$cost',url='$url' WHERE id=$update ";

mysqli_query($koneksi, $sqlAfter);

header('location:datang.php?m=updatedwish');
