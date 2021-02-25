<?php
include('koneksi.php');
$nama_kategori = $_POST['nama_kategori'];
$img = $_POST['img'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$satuan = $_POST['satuan'];
$berat = $_POST['berat'];
$keterangan = $_POST['keterangan'];


$query = mysqli_query($koneksi, "INSERT INTO kategori value(NULL,'$nama_kategori')");
if ($query) {
    header("location:kategori.php");
} else {
    mysqli_error($koneksi);
}
