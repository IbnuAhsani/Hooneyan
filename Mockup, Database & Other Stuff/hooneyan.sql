-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Nov 2017 pada 15.54
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `agen`
--

CREATE TABLE `agen` (
  `id_agen` int(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tipe_akun` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agen`
--

INSERT INTO `agen` (`id_agen`, `password`, `nama`, `tipe_akun`, `tgl_lahir`, `email`, `no_kontak`) VALUES
(1, '827ccb0eea8a706c4c34a16891f84e7b', 'Budi', 2, '1989-12-20', 'budi@mail.cc', '08128391023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `properti`
--

CREATE TABLE `properti` (
  `id_properti` int(10) NOT NULL,
  `nama_properti` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori_properti` varchar(30) NOT NULL,
  `lokasi_properti` varchar(100) NOT NULL,
  `luas_bangunan` int(10) NOT NULL,
  `luas_tanah` int(10) NOT NULL,
  `harga_properti` int(20) NOT NULL,
  `status_properti` varchar(10) NOT NULL,
  `kondisi_properti` varchar(50) NOT NULL,
  `jumlah_ktidur` int(5) NOT NULL,
  `jumlah_kmandi` int(5) NOT NULL,
  `jumlah_garasi` int(5) NOT NULL,
  `jumlah_lantai` int(5) NOT NULL,
  `daya_listrik` int(20) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `properti`
--

INSERT INTO `properti` (`id_properti`, `nama_properti`, `deskripsi`, `kategori_properti`, `lokasi_properti`, `luas_bangunan`, `luas_tanah`, `harga_properti`, `status_properti`, `kondisi_properti`, `jumlah_ktidur`, `jumlah_kmandi`, `jumlah_garasi`, `jumlah_lantai`, `daya_listrik`, `gambar`) VALUES
(1, 'Rm-12', 'Good', 'rumah', 'Bandung', 100, 120, 200000000, 'jual', 'bagus', 5, 3, 1, 2, 200, ''),
(2, 'Rm-20', 'Good', 'ruko', 'Sumedang', 120, 150, 300000000, 'sewa', 'layak', 7, 3, 2, 3, 200, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` varchar(20) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_properti` int(10) NOT NULL,
  `harga_properti` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tipe_akun` int(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `password`, `nama`, `tipe_akun`, `tgl_lahir`, `email`, `no_kontak`) VALUES
(1, '827ccb0eea8a706c4c34a16891f84e7b', 'Muhammad Affandi', 0, '0000-00-00', 'affandim354@gmail.com', ''),
(2, '827ccb0eea8a706c4c34a16891f84e7b', 'Asia', 0, '0000-00-00', 'afnd@gmail.com', ''),
(3, '827ccb0eea8a706c4c34a16891f84e7b', 'Asuie', 0, '0000-00-00', 'aa@g.to', ''),
(4, 'c1257a2e0fb0b3d8a83eaa0a3d1703c8', 'Ibnu Ahsani', 0, '0000-00-00', 'ibnu.muhari@gmail.com', ''),
(6, '827ccb0eea8a706c4c34a16891f84e7b', 'Hello World', 1, '2017-05-17', 'hello.world@gmail.com', '12345'),
(7, '827ccb0eea8a706c4c34a16891f84e7b', 'Agus', 1, '1994-04-15', 'agus@mail.co', '0891248100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`id_agen`);

--
-- Indexes for table `properti`
--
ALTER TABLE `properti`
  ADD PRIMARY KEY (`id_properti`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agen`
--
ALTER TABLE `agen`
  MODIFY `id_agen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `properti`
--
ALTER TABLE `properti`
  MODIFY `id_properti` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
