<?php
include 'koneksi.php';
if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];

    $sqlDelete = "DELETE FROM hasil WHERE id=$delete";

    mysqli_query($koneksi,$sqlDelete);

    header("location:datang.php?m=deleted");

} else if(isset($_GET['update'])){
    $update = $_GET['update'];

    $sqlUpdate = "SELECT * FROM hasil where id=$update";

    $query = mysqli_query($koneksi,$sqlUpdate);

    $row = mysqli_fetch_array($query);
   
    include_once 'assets/view/navbar.php';
    include_once 'assets/view/aksi.php';
    include_once 'assets/view/footer.php';
    
}
 

