-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 05:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_badan_usaha`
--

CREATE TABLE `tb_badan_usaha` (
  `id_badan_usaha` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_perusahaan` varchar(300) NOT NULL,
  `npwp` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(200) NOT NULL,
  `kota` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `website` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `longitude` varchar(200) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `sertifikat` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_badan_usaha`
--

INSERT INTO `tb_badan_usaha` (`id_badan_usaha`, `id_user`, `nama_perusahaan`, `npwp`, `alamat`, `provinsi`, `kota`, `email`, `website`, `deskripsi`, `longitude`, `latitude`, `sertifikat`, `status`) VALUES
(1, 1, 'pt indorama', '53453', 'serang', 'banten', 'serang', 'indorama@gmail.com', 'www.indorama.com', 'serang', '106.149063', '-6.121406', '10847_SDM.06.03_B01070000_2020_Penjelasan Edaran Direksi PT PLN (Persero) Nomor 0008.PDIR2020.pdf', 'terverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penawaran`
--

CREATE TABLE `tb_penawaran` (
  `id_penawaran` int(11) NOT NULL,
  `id_badan_usaha` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `file_penawaran` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penawaran`
--

INSERT INTO `tb_penawaran` (`id_penawaran`, `id_badan_usaha`, `id_user`, `file_penawaran`) VALUES
(1, 1, 2, 'SURAT IJIN ORANGTUA.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajuan_bu`
--

CREATE TABLE `tb_pengajuan_bu` (
  `id_pengajuan` int(11) NOT NULL,
  `id_badan_usaha` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengajuan_bu`
--

INSERT INTO `tb_pengajuan_bu` (`id_pengajuan`, `id_badan_usaha`, `tanggal`) VALUES
(1, 1, '2020-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `email`, `username`, `password`, `level`) VALUES
(1, 'asep', 'asep@gmail.com', 'asep', 'dc855efb0dc7476760afaa1b281665f1', '0'),
(2, 'fina', 'fina@gmail.com', 'fina', 'c89ee91ad8cdf83841d3b743413e403a', '1'),
(3, 'admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_badan_usaha`
--
ALTER TABLE `tb_badan_usaha`
  ADD PRIMARY KEY (`id_badan_usaha`);

--
-- Indexes for table `tb_penawaran`
--
ALTER TABLE `tb_penawaran`
  ADD PRIMARY KEY (`id_penawaran`);

--
-- Indexes for table `tb_pengajuan_bu`
--
ALTER TABLE `tb_pengajuan_bu`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_badan_usaha`
--
ALTER TABLE `tb_badan_usaha`
  MODIFY `id_badan_usaha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_penawaran`
--
ALTER TABLE `tb_penawaran`
  MODIFY `id_penawaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pengajuan_bu`
--
ALTER TABLE `tb_pengajuan_bu`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
