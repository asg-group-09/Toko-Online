<?php

include('koneksi.php');
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$satuan = $_POST['satuan'];
$berat = $_POST['berat'];
$keterangan = $_POST['keterangan'];
$kategori = $_POST['kategori'];
$img = $_FILES['img'];

if ($img['size'] != 0) {
    $ekstensi_diperbolehkan = array('image/jpeg', 'image/jpg', 'image/png');
    $ekstensi = $img['type'];
    $file_tmp = $img['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $img['size'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, '../img/barang/makanan/' . $nama_gambar_baru);
        $update  = mysqli_query($koneksi, "UPDATE `barang` SET `nama_barang`='$nama_barang',`harga`='$harga',`stok`='$stok',`satuan`='$satuan', `berat`='$berat',
        `keterangan`='$keterangan',`nama_kategori`='$kategori',`img`='$nama_gambar_baru' WHERE id_barang='$id_barang'");
        if (!$update) {
            header("location:update.php");
        } else {

            header("location:update.php");
        }
    } else {
        echo mysqli_error($koneksi);
        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, png atau jpeg.');window.location=update.php';</script>";
    }
} else {
    $update  = mysqli_query($koneksi, "UPDATE `barang` SET `nama_barang`='$nama_barang',`harga`='$harga',`stok`='$stok',`satuan`='$satuan', `berat`='$berat', `keterangan`='$keterangan',`nama_kategori`='$kategori' WHERE id_barang='$id_barang'");

    if (!$update) {
        header("location:update.php");
    } else {

        header("location:update.php");
    }
}
