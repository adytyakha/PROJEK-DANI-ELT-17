-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Bulan Mei 2019 pada 06.20
-- Versi server: 10.3.14-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6441934_dani_elt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `no_seri` int(15) NOT NULL,
  `nama_barang` varchar(64) NOT NULL,
  `harga_beli` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `harga_jual` varchar(50) NOT NULL,
  `stok` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_order`
--

CREATE TABLE `data_order` (
  `seri` int(15) NOT NULL,
  `barang` varchar(64) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `toko` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_order`
--

INSERT INTO `data_order` (`seri`, `barang`, `jumlah`, `toko`) VALUES
(17772, 'Tv LED Polytron 32', '1500000', '2000000'),
(55523, 'Kulkas 2 Pintu LG', '3000000', '3000000'),
(97644, 'Mesin cuci Sharp 75', '3', 'sri rejeki'),
(97646, 'Mesin cuci Poltron 75', '6', 'Sri Rejeki'),
(987563, 'Tv LED Sharp 32', '1600000', '2100000'),
(6788876, 'Kipas ', '2', 'MT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_retur`
--

CREATE TABLE `data_retur` (
  `no_seri` int(15) NOT NULL,
  `nama_barang` varchar(64) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `nama_toko` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_retur`
--

INSERT INTO `data_retur` (`no_seri`, `nama_barang`, `jumlah`, `nama_toko`) VALUES
(2, 'tv', '5', 'sri rezeki'),
(87, 'Kulkasd LG', '5', 'Sri Rejeki'),
(98, 'Kulkas Toshiba', '7', 'sri rezeki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `id` int(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(8) NOT NULL,
  `level` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`id`, `username`, `password`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `level`) VALUES
(18, 'toni', 'admin', 'toniche titania', 'demak', 'laki', 'Islam', 'admin'),
(20, 'Dwi Endah Sri Lestar', '20051998', 'Dwi Endah Sri Lestari', 'Pati', 'perempuan', 'Islam', 'admin'),
(21, 'Tengteng', '123456', 'Aminah', 'Semarang', 'perempuan', 'Islam', 'admin'),
(24, 'fahri', '1', 'Fahri Zero', 'Belanda', 'laki', 'Islam', 'admin'),
(25, 'Anggorokuncoro88@gma', 'wayangkulit', 'Anggoro', 'Pati', 'laki', 'Islam', 'admin'),
(26, 'Anggorokuncoro88@gma', 'wayangkulit', 'Anggoro', 'Pati', 'laki', 'Islam', 'admin'),
(27, 'rum', '1', 'rum', 'a', 'perempuan', 'Islam', 'admin'),
(28, 'oke', 'oke', 'okee', 'jekulo', 'laki', 'Islam', 'admin'),
(29, 'anggorokuncoro88@gma', 'wayangkulit', 'Anggoro', 'Pati', 'laki', 'Islam', 'admin'),
(30, 'coba', '123', 'Coba', 'Coba', 'laki', 'Islam', 'admin'),
(31, '1', '1', '1', '1', 'laki', 'Islam', 'admin'),
(33, 'a', 'a', 'a', 'a', 'laki', 'Islam', 'admin'),
(34, 'admin1', 'a', 'aku rindu', '', 'laki', 'Islam', 'admin'),
(35, 'admin111', '12345678', 'dsdsd', 'dsgsg', 'laki', 'Islam', 'admin'),
(36, 'hhh', 'hhh', 'hhh', 'hhh', 'laki', 'Islam', 'admin'),
(37, 'adytya', 'pangeran1', 'Apelibe', 'Ds.Sumberejo Jaken', 'laki', 'Islam', 'admin'),
(38, 'didit', 'didit', 'Didit', 'ds.dddd', 'laki', 'Islam', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`no_seri`);

--
-- Indeks untuk tabel `data_order`
--
ALTER TABLE `data_order`
  ADD PRIMARY KEY (`seri`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
