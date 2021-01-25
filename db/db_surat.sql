-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 10:37 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '827ccb0eea8a706c4c34a16891f84e7b', 'devk@gmail.com', 'Unknown Developer', 1, 'Staff Pengurus Surat'),
('user', '827ccb0eea8a706c4c34a16891f84e7b', 'userr@gmail.com', 'Staff User', 2, 'Pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `jumlahsurat`
--

CREATE TABLE `jumlahsurat` (
  `id` int(10) NOT NULL,
  `entri` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `j_srtmasuk` varchar(10) NOT NULL,
  `j_srtkeluar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jumlahsurat`
--

INSERT INTO `jumlahsurat` (`id`, `entri`, `tanggal`, `j_srtmasuk`, `j_srtkeluar`) VALUES
(1, 111, '2021-01-03', '2', '1'),
(2, 122, '2021-01-05', '1', '1'),
(3, 13, '2021-01-06', '1', '1'),
(5, 155, '2021-01-08', '2', '1'),
(6, 123, '2020-12-14', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id` int(10) NOT NULL,
  `no_surat` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `hal` varchar(30) NOT NULL,
  `lampiran` varchar(30) NOT NULL,
  `kepada` varchar(30) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id`, `no_surat`, `tanggal`, `hal`, `lampiran`, `kepada`, `ket`) VALUES
(111, 9988, '2021-01-06', 'Slip Produksi', '4 Lembar', 'Admin Utama', 'Surat Masuk'),
(222, 1234, '2021-01-04', 'Biaya Perbaikan Mesin', '2 Lembar', 'Manager HO', 'Surat Keluar'),
(333, 2334, '2021-01-05', 'Permohonan PKL ', '2 Lembar', 'Manager', 'Surat Masuk'),
(444, 3445, '2021-01-05', 'Slip Produksi', '10 lembar', 'K. Piasa', 'Surat Keluar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `jumlahsurat`
--
ALTER TABLE `jumlahsurat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jumlahsurat`
--
ALTER TABLE `jumlahsurat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=445;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
