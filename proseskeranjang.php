<?php
session_start();
if (!$_SESSION['username']) {
	header('location:./login/login.php');
}
$action = $_GET['act'];
$id_barang = $_GET['barang_id'];
$ref_url = $_GET['ref'];

if ($action == "plus") {
	//jika sudah ada produk itu dikeranjang, maka produknya jumlahnya di +1
	if (isset($_SESSION['keranjang'][$id_barang])) {
		$_SESSION['keranjang'][$id_barang] += 1;
	}
	//selain itu (belum ada dikeranjang) maka produk itu dianggap beli 1
	else {
		$_SESSION['keranjang'][$id_barang] = 1;
	}
} else if ($action == "min") {
	//jika sudah ada produk itu dikeranjang, maka produknya jumlahnya di +1
	if (isset($_SESSION['keranjang'][$id_barang])) {
		$_SESSION['keranjang'][$id_barang] -= 1;
	}
} else if ($action == "del") {
	if (isset($_SESSION['keranjang'][$id_barang])) {
		unset($_SESSION['keranjang'][$id_barang]);
	}

	echo "<script>alert ('Produk Telah Dihapus');</script>";
} else {
	//jika sudah ada produk itu dikeranjang, maka produknya jumlahnya di +1
	if (isset($_SESSION['keranjang'][$id_barang])) {
		$_SESSION['keranjang'][$id_barang] += 1;
	}
	//selain itu (belum ada dikeranjang) maka produk itu dianggap beli 1
	else {
		$_SESSION['keranjang'][$id_barang] = 1;
	}

	echo "<script>alert ('Produk Telah Masuk Ke Keranjang Belanja');</script>";
}
echo "<script>location='" . $ref_url . "';</script>";
