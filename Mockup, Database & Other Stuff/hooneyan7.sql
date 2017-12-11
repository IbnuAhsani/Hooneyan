-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 05:01 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hooneyan`
--

-- --------------------------------------------------------

--
-- Table structure for table `agen`
--

CREATE TABLE `agen` (
  `id` int(10) UNSIGNED NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tipe_akun` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_kontak` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agen`
--

INSERT INTO `agen` (`id`, `password`, `nama`, `tipe_akun`, `tgl_lahir`, `email`, `no_kontak`, `alamat`) VALUES
(29, '827ccb0eea8a706c4c34a16891f84e7b', 'Ibnu Ahsani', 1, '1997-05-17', 'ibnu.muhari@gmail.com', 'NULL', 'Jl. Lestari No. 46, Kalisari, Jakarta Timur'),
(30, 'd41d8cd98f00b204e9800998ecf8427e', 'Hello World', 1, '1997-06-04', 'hello.world@gmail.com', 'NULL', '');

-- --------------------------------------------------------

--
-- Table structure for table `kontak_agen`
--

CREATE TABLE `kontak_agen` (
  `id` int(11) NOT NULL,
  `id_agen` int(10) UNSIGNED NOT NULL,
  `no_kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak_agen`
--

INSERT INTO `kontak_agen` (`id`, `id_agen`, `no_kontak`) VALUES
(21, 29, '085946260642');

-- --------------------------------------------------------

--
-- Table structure for table `kontak_user`
--

CREATE TABLE `kontak_user` (
  `id` int(11) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `no_kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak_user`
--

INSERT INTO `kontak_user` (`id`, `id_user`, `no_kontak`) VALUES
(5, 19, '02187704446'),
(6, 19, '085922348987');

-- --------------------------------------------------------

--
-- Table structure for table `properti`
--

CREATE TABLE `properti` (
  `id_properti` int(5) UNSIGNED NOT NULL,
  `id_agen` int(5) UNSIGNED NOT NULL,
  `nama_properti` varchar(100) NOT NULL,
  `desc_properti` text NOT NULL,
  `kategori_properti` varchar(30) NOT NULL,
  `lokasi_properti` varchar(100) NOT NULL,
  `luas_properti` int(10) NOT NULL,
  `luas_tanah` int(10) NOT NULL,
  `harga_properti` int(20) NOT NULL,
  `status_properti` varchar(10) NOT NULL,
  `kondisi_properti` char(7) NOT NULL,
  `jumlah_ktidur` int(5) NOT NULL,
  `jumlah_kmandi` int(5) NOT NULL,
  `jumlah_garasi` int(5) NOT NULL,
  `jumlah_lantai` int(5) NOT NULL,
  `daya_listrik` int(20) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `isBooked` int(11) NOT NULL,
  `id_booker` int(11) NOT NULL,
  `konfirmasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properti`
--

INSERT INTO `properti` (`id_properti`, `id_agen`, `nama_properti`, `desc_properti`, `kategori_properti`, `lokasi_properti`, `luas_properti`, `luas_tanah`, `harga_properti`, `status_properti`, `kondisi_properti`, `jumlah_ktidur`, `jumlah_kmandi`, `jumlah_garasi`, `jumlah_lantai`, `daya_listrik`, `gambar`, `isBooked`, `id_booker`, `konfirmasi`) VALUES
(32, 29, 'Ruko Glass', 'Ruko berkelas tinggi', 'Ruko', 'Jl. Sudirman No. 17, Jakarta Pusat', 85, 85, 10000000, 'Sewa', 'Bagus', 2, 0, 0, 2, 25, 'ruko-glass5.jpg', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(11) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_properti` int(5) UNSIGNED NOT NULL,
  `harga_properti` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tipe_akun` int(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_kontak` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak_agen`
--
ALTER TABLE `kontak_agen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_agen` (`id_agen`) USING BTREE;

--
-- Indexes for table `kontak_user`
--
ALTER TABLE `kontak_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `properti`
--
ALTER TABLE `properti`
  ADD PRIMARY KEY (`id_properti`),
  ADD KEY `properti_of_agen` (`id_agen`),
  ADD KEY `id_agen` (`id_agen`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD UNIQUE KEY `id_properti` (`id_properti`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agen`
--
ALTER TABLE `agen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kontak_agen`
--
ALTER TABLE `kontak_agen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kontak_user`
--
ALTER TABLE `kontak_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `properti`
--
ALTER TABLE `properti`
  MODIFY `id_properti` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
