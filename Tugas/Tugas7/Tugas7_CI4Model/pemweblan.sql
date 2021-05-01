-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 02:46 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweblan`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(8) NOT NULL,
  `nim` varchar(55) NOT NULL,
  `nama_lengkap` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `jenis_kelamin` varchar(55) NOT NULL,
  `prodi` varchar(55) NOT NULL,
  `warga_negara` varchar(55) NOT NULL,
  `tanggal_lahir` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL,
  `keterangan` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama_lengkap`, `password`, `email`, `jenis_kelamin`, `prodi`, `warga_negara`, `tanggal_lahir`, `status`, `keterangan`) VALUES
(1, 'M3119001', 'Adam Arthur Faizal', 'rahasia', 'adam.faizal.af6@email.com', 'L', 'D3 Teknik Informatika', 'WNI', '2021-05-20', 'Aktif', 'Saya adalah seorang mahasiswa'),
(2, 'M3119064', 'Nadheva Derdika Apriawan', 'rahasia', 'nadheva@email.com', 'L', 'D3 Teknik Informatika', 'WNI', '2021-05-01', 'Aktif', 'Saya adalah seorang mahasiswa'),
(4, 'M3119004', 'Aksal Syah Falah', 'rahasia', 'aksal@email.com', 'L', 'D3 Teknik Informatika', 'WNI', '2021-05-01', 'Aktif', 'Saya adalah seorang mahasiswa'),
(5, 'M3119085', 'Tri Wulandari', 'rahasia', 'wulan@email.com', 'P', 'D3 Teknik Informatika', 'WNI', '2021-05-01', 'Aktif', 'Saya adalah seorang mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `perpus`
--

CREATE TABLE `perpus` (
  `id_buku` int(4) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `keanggotaan` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perpus`
--

INSERT INTO `perpus` (`id_buku`, `judul`, `genre`, `keanggotaan`, `detail`) VALUES
(111, 'aaaa', 'Sejarah', 'Member', 'aaa'),
(777, 'hello world', 'Sains', 'Member', 'halo dunia'),
(1111, 'aaaa', 'Sains', 'Member', 'aaaa'),
(2000, 'aaaa', 'Sains', 'Member', 'aaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `perpus`
--
ALTER TABLE `perpus`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `perpus`
--
ALTER TABLE `perpus`
  MODIFY `id_buku` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2001;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
