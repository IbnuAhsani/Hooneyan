-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 06:49 PM
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
(32, '827ccb0eea8a706c4c34a16891f84e7b', 'Ibnu Ahsani', 1, '2017-09-01', 'ibnu.muhari@gmail.com', 'NULL', 'Jl. Lestari No. 46, Kalisari, Jakarta Timur'),
(33, '827ccb0eea8a706c4c34a16891f84e7b', 'Muhammad Affandi', 1, '1996-07-12', 'muhammad.affandi@gmail.com', 'NULL', 'Jl. Sukawening No. 2, Jatinangor, Jawa Barat');

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
(23, 32, '085946260642'),
(24, 33, '085823298898'),
(25, 33, '081284932490'),
(26, 33, '085612901280');

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
(8, 2, '081211223344'),
(9, 2, '081299098787');

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
(37, 32, 'Ruko Glass', 'Ruko nyaman di daerah aman', 'Ruko', 'Jl. Sudirman No. 17, Jakarta Pusar', 50, 50, 10000000, 'Sewa', 'Bagus', 2, 0, 0, 2, 25, 'ruko-glass3.jpg', 0, 0, 0),
(38, 32, 'Minimal House', 'Rumah minimal yang sekaligus elegan', 'Rumah', 'Jl. Tanjung Barat No. 50, Tangerang Selatan', 145, 160, 1000000, 'Jual', 'Bagus', 5, 2, 1, 2, 45, 'minimal-house-2.jpg', 0, 0, 0),
(39, 33, 'Jatinangor Asri', 'Pondok luas di depan sawah yang indah', 'Villa', 'Jl. Sayang No. 17, Jatinangor', 150, 180, 8800000, 'Sewa', 'Layak', 16, 18, 2, 2, 50, 'pondok-kebun.jpg', 0, 0, 0),
(40, 33, 'Skyland City', 'Apartemen bintang 4 dengan fasilitas lengkap', 'Apartemen', 'Jl. Hegarmanah No. 18, Jatinangor', 120, 160, 12000000, 'Jual', 'Bagus', 100, 100, 3, 20, 60, 'skyland-city.jpg', 0, 0, 0),
(41, 33, 'Ruko Kayu', 'Ruko yang terbuat dari 100% kayu', 'Ruko', 'Jl. Merdeka Raya No. 14, Bekasi', 100, 180, 800000000, 'Sewa', 'Kurang', 4, 2, 0, 2, 40, 'ruko-kayu-2.jpg', 0, 0, 0);

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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `password`, `nama`, `tipe_akun`, `tgl_lahir`, `email`, `no_kontak`, `alamat`) VALUES
(2, '827ccb0eea8a706c4c34a16891f84e7b', 'Ahsan Nurrijal', 2, '2017-09-01', 'ahsan.nurrijal@yahoo.com', 'NULL', 'Jl. Buah Batu No. 32, Bandung');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `kontak_agen`
--
ALTER TABLE `kontak_agen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `kontak_user`
--
ALTER TABLE `kontak_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `properti`
--
ALTER TABLE `properti`
  MODIFY `id_properti` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kontak_agen`
--
ALTER TABLE `kontak_agen`
  ADD CONSTRAINT `kontak_agen_ibfk_1` FOREIGN KEY (`id_agen`) REFERENCES `agen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kontak_user`
--
ALTER TABLE `kontak_user`
  ADD CONSTRAINT `kontak_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `properti`
--
ALTER TABLE `properti`
  ADD CONSTRAINT `properti_ibfk_1` FOREIGN KEY (`id_agen`) REFERENCES `agen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_properti`) REFERENCES `properti` (`id_properti`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
