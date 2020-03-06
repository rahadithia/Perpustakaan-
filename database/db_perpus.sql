-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 07:49 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `db_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `nim` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(15) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `thn_masuk` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`nim`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `prodi`, `thn_masuk`) VALUES
(2015804045, 'Iim Umamil', 'Indramayu', '1996-11-01', 'L', 'Komputer Akuntansi', '2015'),
(2015804065, 'Ragil Darsulanto', 'Ciamis', '1996-05-03', 'L', 'Sistem Informasi', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id` int(5) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `thn_terbit` varchar(4) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `jumlah_buku` int(3) NOT NULL,
  `lokasi` enum('rak1','rak2','rak3') NOT NULL,
  `tgl_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id`, `judul`, `pengarang`, `penerbit`, `thn_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`) VALUES
(7, 'matematika', 'kokom', 'Aerlangga', '2002', '7502983457a2', 3, 'rak2', '2015-11-28 08:46:15'),
(8, 'PHP Dasar', 'Arfandi', 'Lokomedia', '2002', '813957108531', 3, 'rak3', '2015-12-02 02:41:35'),
(9, 'Samudra PHP', 'Solihin', 'Hamzah', '2010', 'ajfdklajs98345', 1, 'rak3', '2015-12-02 04:55:13'),
(10, 'JQuery Mudah', 'Habib Nas', 'Aerlangga', '2008', '12365480B', 3, 'rak1', '2016-10-24 05:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id` int(5) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_pinjam` varchar(15) NOT NULL,
  `tgl_kembali` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id`, `judul`, `nim`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`, `ket`) VALUES
(12, 'JQuery Mudah', 2015804045, 'Iim Umamil', '22-11-2017', '29-11-2017', 'Kembali', ''),
(13, 'Samudra PHP', 2015804065, 'Ragil Darsulanto', '22-11-2017', '29-11-2017', 'Kembali', ''),
(14, 'matematika', 2015804045, 'Iim Umamil', '28-12-2017', '04-01-2018', 'Pinjam', ''),
(15, 'Samudra PHP', 2015804045, 'Iim Umamil', '28-12-2017', '04-01-2018', 'Pinjam', ''),
(16, 'JQuery Mudah', 2015804065, 'Ragil Darsulanto', '28-12-2017', '04-01-2018', 'Pinjam', ''),
(17, 'matematika', 2015804065, 'Ragil Darsulanto', '28-12-2017', '04-01-2018', 'Pinjam', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(3) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`, `email`, `foto`, `level`) VALUES
(1, 'Farhan Ilman Eve', 'admin', '7dd66913004434da295aefa937f55c8e', 'farhan@gmail.com', 'avatar5.png', 'admin'),
(2, 'Iim Umamil', 'iimaja', 'b0d121903a98e2fc73500221a750c2a7', 'iimaja@gmail.com', 'avatar5.png', 'admin'),
(3, 'Deka Dwi', 'deka', '90c6c8acc0341cf51e604f3b8973ef31', 'deka@yahoo.com', '', 'user'),
(4, 'Ragil Darsulanto', 'ragil', 'f617d003ad5968448348e4521e7d46a4', 'ragil@outlook.com', 'avatar5.png', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;


