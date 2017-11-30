-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2017 at 08:35 AM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `tipe_akun` int(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password`, `nama_user`, `tipe_akun`, `tgl_lahir`, `email`, `no_kontak`) VALUES
(1, '827ccb0eea8a706c4c34a16891f84e7b', 'Muhammad Affandi', 0, '0000-00-00', 'affandim354@gmail.com', ''),
(2, '827ccb0eea8a706c4c34a16891f84e7b', 'Asia', 0, '0000-00-00', 'afnd@gmail.com', ''),
(3, '827ccb0eea8a706c4c34a16891f84e7b', 'Asuie', 0, '0000-00-00', 'aa@g.to', ''),
(4, 'c1257a2e0fb0b3d8a83eaa0a3d1703c8', 'Ibnu Ahsani', 0, '0000-00-00', 'ibnu.muhari@gmail.com', ''),
(6, '827ccb0eea8a706c4c34a16891f84e7b', 'Hello World', 1, '2017-05-17', 'hello.world@gmail.com', '12345'),
(7, '81dc9bdb52d04dc20036dbd8313ed055', 'Ghifari', 1, '2017-11-08', 'iniemail@gmail.com', '08781232456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
