-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2017 at 05:57 AM
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
  `id` int(5) UNSIGNED NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tipe_akun` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agen`
--

INSERT INTO `agen` (`id`, `password`, `nama`, `tipe_akun`, `tgl_lahir`, `email`, `no_kontak`) VALUES
(2, '827ccb0eea8a706c4c34a16891f84e7b', 'Hello World', 1, '2017-11-16', 'hello.world@gmail.com', '09876'),
(3, 'adcaec3805aa912c0d0b14a81bedb6ff', 'Hello World 2', 1, '2017-11-10', 'hello.world.2@gmail.com', '09876'),
(4, '827ccb0eea8a706c4c34a16891f84e7b', 'Muhammad Affandi', 1, '1997-12-20', 'affandim354@gmail.com', '089942261777');

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
  `isBooked` int(11) NOT NULL DEFAULT '0',
  `id_booker` int(11) NOT NULL DEFAULT '0',
  `konfirmasi` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properti`
--

INSERT INTO `properti` (`id_properti`, `id_agen`, `nama_properti`, `desc_properti`, `kategori_properti`, `lokasi_properti`, `luas_properti`, `luas_tanah`, `harga_properti`, `status_properti`, `kondisi_properti`, `jumlah_ktidur`, `jumlah_kmandi`, `jumlah_garasi`, `jumlah_lantai`, `daya_listrik`, `gambar`, `isBooked`, `id_booker`, `konfirmasi`) VALUES
(4, 0, 'RM-90', 'Masih Baru', 'rumah', '', 300, 340, 200000000, 'jual', 'bagus', 3, 2, 1, 1, 300, 'stasiunjakarta4.jpg', 0, 0, 0),
(5, 0, 'Vi-12', 'Good', 'villa', '', 400, 500, 0, 'jual', 'bagus', 7, 4, 2, 3, 200, 'sketsa-pemandangan-sawah-hitam-putih.jpg', 0, 0, 0),
(6, 0, 'RK-00', 'Masih Baru', 'ruko', 'Bandung', 300, 500, 2147483647, 'jual', 'bagus', 8, 2, 2, 10, 400, 'ruko_emporium.jpg', 0, 0, 0),
(10, 0, 'Puri Indah', 'Lega dan luas', 'villa', 'Jati', 250, 300, 10000000, 'sewa', 'bagus', 5, 2, 1, 3, 1000, 'cd8c10fb2f74a5b1e2d83a58640a5569.jpg', 0, 0, 0),
(15, 2, 'Test', 'ini sebuah test', 'rumah', 'Jatinangor', 1, 1, 10000, 'jual', 'bagus', 1, 1, 1, 1, 1, 'WP_Unbox_4K-3840x2160_00000.jpg', 0, 0, 0),
(18, 2, 'tes', '1234', 'apartemen', '4', 4, 4, 4444, 'sewa', 'bagus', 4, 4, 4, 4, 4, 'WP_Koan_Sound_I-2560x1440_00205.jpg', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` varchar(20) NOT NULL,
  `id_user` int(5) UNSIGNED NOT NULL,
  `id_properti` int(5) UNSIGNED NOT NULL,
  `harga_properti` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) UNSIGNED NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tipe_akun` int(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `password`, `nama`, `tipe_akun`, `tgl_lahir`, `email`, `no_kontak`) VALUES
(11, '827ccb0eea8a706c4c34a16891f84e7b', 'Hello World 3', 2, '2017-09-13', 'hello.world.3@gmail.com', '09876'),
(12, '827ccb0eea8a706c4c34a16891f84e7b', 'Agus', 2, '1990-10-22', 'agus@mail.co', '0891212212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`no_transaksi`);

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
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `properti`
--
ALTER TABLE `properti`
  MODIFY `id_properti` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
