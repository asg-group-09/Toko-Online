<?php
include('koneksi.php');
$nama_barang = $_POST['nama_barang'];
$img = $_POST['img'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$satuan = $_POST['satuan'];
$berat = $_POST['berat'];
$keterangan = $_POST['keterangan'];
$kategori = $_POST['kategori'];


$query = mysqli_query($koneksi, "INSERT INTO barang value(NULL,'$kategori','$nama_barang','$img','$harga','$stok','$satuan','$berat','$keterangan')");
if ($query) {
    header("location:update.php");
} else {
    mysqli_error($koneksi);
}
