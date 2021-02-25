<?php 
include('koneksi.php');
$id_barang =$_GET['id_barang'];
mysqli_query($koneksi,"DELETE FROM barang WHERE id_barang='$id_barang'");
header("location:update.php");
?>