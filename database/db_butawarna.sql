-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2021 at 04:27 AM
-- Server version: 10.4.15-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_butawarna`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `nama`, `email`, `created_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'admin@gmail.com', '2021-03-27 14:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenkel` enum('laki-laki','perempuan') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`id`, `username`, `password`, `nama`, `jenkel`, `tgl_lahir`, `alamat`, `created_at`) VALUES
(2, 'handoyo', 'fa821be92cbda78d72a38665a85faec8', 'Handoyo', 'laki-laki', '1997-06-04', 'asdasd', '2021-03-27 20:43:40'),
(6, 'andri', '6bd3108684ccc9dfd40b126877f850b0', 'Dr. Andri Santoso', 'laki-laki', '1990-02-22', 'Ngemplak', '2021-04-12 14:28:45'),
(12, 'Nanda', '0533b0f07edf0671d0a54646258cac5a', 'Dr. Nanda', 'laki-laki', '1991-02-12', 'Jakal', '2021-04-13 10:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id` int(4) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenkel` enum('laki-laki','perempuan') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id`, `nama`, `jenkel`, `tgl_lahir`, `alamat`, `created_at`) VALUES
(1, 'Kecan', 'laki-laki', '1999-11-01', 'asdsa', '2021-03-27 17:51:00'),
(2, 'asa', 'laki-laki', '1994-02-22', 'jakal', '2021-04-13 09:41:48'),
(3, 'Robi', 'laki-laki', '2000-02-21', 'Jakal', '2021-04-13 10:42:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perawat`
--

CREATE TABLE `tbl_perawat` (
  `id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenkel` enum('laki-laki','perempuan') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_perawat`
--

INSERT INTO `tbl_perawat` (`id`, `username`, `password`, `nama`, `jenkel`, `tgl_lahir`, `alamat`, `created_at`) VALUES
(12, 'puji', 'f5e4b33c633b204ea454d36543559011', 'Puji Dwiarto', 'laki-laki', '1995-02-22', 'Ngemplak', '2021-04-12 14:27:19'),
(19, 'Muaz', '3292d3e830b0aa12121aba2d821cc73c', 'Muaz', 'laki-laki', '1995-02-02', 'Jakal', '2021-04-13 10:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE `tbl_test` (
  `id` int(4) NOT NULL,
  `id_pasien` int(4) NOT NULL,
  `tgl_test` date NOT NULL,
  `nm_test` varchar(100) NOT NULL,
  `hasil` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_test`
--

INSERT INTO `tbl_test` (`id`, `id_pasien`, `tgl_test`, `nm_test`, `hasil`, `catatan`) VALUES
(75, 3, '2021-04-13', 'Test Ishihara', 'Mata Normal', 'Tes CPNS'),
(76, 3, '2021-04-13', 'Test Fransworth', 'Mata Normal', 'Tes CPNS'),
(77, 3, '2021-04-13', 'Test Lanthony D-15', 'Mata Normal', 'Tes CPNS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_perawat`
--
ALTER TABLE `tbl_perawat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_perawat`
--
ALTER TABLE `tbl_perawat`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
