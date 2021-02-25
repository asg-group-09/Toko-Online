<?php
include("../koneksi.php");
if (isset($_POST['submit'])) {
	$username = ($_POST['username']);
	$password = ($_POST['password']);
	$level = ($_POST['level']);
	$nama_depan = ($_POST['nama_depan']);
	$nama_belakang = ($_POST['nama_belakang']);
	$nama_belakang = ($_POST['nama_belakang']);
	$alamat_1 = ($_POST['alamat_1']);
	$alamat_2 = ($_POST['alamat_2']);
	$alamat_3 = ($_POST['alamat_3']);
	$nomer_telepon = ($_POST['nomer_telepon']);
	$negara = ($_POST['negara']);
	$kode_pos = ($_POST['kode_pos']);

	$query = mysqli_query($koneksi, "INSERT INTO `user` VALUES (NULL, '$username', '$password', '$level', '$nama_depan', '$nama_belakang', '$alamat_1', '$alamat_2', '$alamat_3', 
	'$nomer_telepon', '$negara', '$kode_pos');");
	if ($query) {
		header("location:login.php?msg=3");
	} else {
		echo mysqli_error($koneksi);
	}
	
}
