-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Nov 2020 pada 02.49
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(20) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `img` varchar(30) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `stok` varchar(20) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `berat` varchar(20) NOT NULL,
  `keterangan` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kategori`, `nama_barang`, `img`, `harga`, `stok`, `satuan`, `berat`, `keterangan`) VALUES
(1, 1, 'Indomie Mi Goreng', '1.jpg', '10000', '19', 'Pcs', '500 gram', 'none'),
(2, 1, 'Nestea Teh Lemon', '2.jpg', '5000', '14', 'Pcs', '250gram', 'none'),
(3, 1, 'Samyang Hot Chiken', '3.jpg', '15000', '13', 'Pcs', '250gram', 'none'),
(4, 1, 'Pilus Garuda Pedas', '4.jpg', '3000', '17', 'Pcs', '400gram', 'none'),
(5, 1, 'Kopi Kapal Api ', '6.jpg', '10000', '20', 'Pcs', '200gram', 'none'),
(6, 1, 'Oreo Stawbery', '7.jpg', '4000', '20', 'Pcs', '200gram', 'none'),
(10, 1, 'Nabati Keju ', '8.jpg', '3000', '20', 'Pcs', '200gram', 'none'),
(11, 0, 'Roma Malkist Coklat', '9.jpg', '5000', '16', 'Pcs', '200gram', 'sfksafjaflspsdfsdgdsgsdgsdg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(5) NOT NULL,
  `nama_pembeli` varchar(30) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomer_tlpn` varchar(20) NOT NULL,
  `list_barang` text NOT NULL,
  `total_pembelian` varchar(20) NOT NULL,
  `Tanggal_pembelian` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `checkout`
--

INSERT INTO `checkout` (`id_checkout`, `nama_pembeli`, `alamat`, `nomer_tlpn`, `list_barang`, `total_pembelian`, `Tanggal_pembelian`) VALUES
(7, 'ahmad septian', 'Jl. Raya Parung - Ciputat No.88, Kedaung, Kec. Sawangan, Kota Depok, Jawa Barat 16516', '08594534636', 'Samyang Hot Chiken', '15000', '2020-11-06 19:58:23'),
(8, 'ahmad septian', 'Permata mansion,Cluster emerald blok EC 1 no 8, kecamatan bojongsari, Serua, Kec. Bojongsari, Kota Depok, Jawa Barat 16517', '08594534636', 'Roma Malkist Coklat', '20000', '2020-11-06 20:03:33'),
(9, 'ahmad septian', 'asdasdasd', '08594534636', 'Nestea Teh Lemon', '20000', '2020-11-08 21:18:29'),
(10, 'ahmad septian', 'asdadadasd', '08594534636', 'Samyang Hot Chiken', '15000', '2020-11-08 21:51:53'),
(11, 'ahmad septian', 'Jl. Tegal Rotan Raya No.28, RT.2/RW.1, Sawah Baru, Kec. Ciputat, Kota Tangerang Selatan, Banten', '08594534636', 'Pilus Garuda Pedas', '3000', '2020-11-09 11:58:22'),
(12, 'ahmad septian', 'sadasdasdda', '08594534636', 'Pilus Garuda Pedas', '3000', '2020-11-11 12:42:14'),
(13, 'ahmad septian', 'kklkljlj', '08594534636', 'Samyang Hot Chiken', '15000', '2020-11-11 13:13:29'),
(14, 'ahmad septian', '', '08594534636', 'Samyang Hot Chiken', '15000', '2020-11-12 05:32:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Makanan & Minuman'),
(2, 'Rumah & Dapur'),
(3, 'Kesehatan & Kencantikan'),
(4, 'Perlengkapan Bayi & Anak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `alamat_1` text NOT NULL,
  `alamat_2` text NOT NULL,
  `alamat_3` text NOT NULL,
  `nomer_telepon` varchar(20) NOT NULL,
  `negara` varchar(20) NOT NULL,
  `kode_pos` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `nama_depan`, `nama_belakang`, `alamat_1`, `alamat_2`, `alamat_3`, `nomer_telepon`, `negara`, `kode_pos`) VALUES
(1, 'admin', 'admin', 'admin', 'ahmad', 'septian', '', '', '', '0899999', 'indonesia', 12345),
(16, 'ahmad@gmail.com', '12345', 'user', 'ahmad', 'septian', 'Jl. Tegal Rotan Raya No.28, RT.2/RW.1, Sawah Baru, Kec. Ciputat, Kota Tangerang Selatan, Banten', 'Permata mansion,Cluster emerald blok EC 1 no 8, kecamatan bojongsari, Serua, Kec. Bojongsari, Kota Depok, Jawa Barat 16517', 'Jl. Raya Parung - Ciputat No.88, Kedaung, Kec. Sawangan, Kota Depok, Jawa Barat 16516', '08594534636', 'indonesia', 221309);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
