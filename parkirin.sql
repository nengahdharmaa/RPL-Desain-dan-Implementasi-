-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 08:17 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkirin3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_pegawai` varchar(255) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `id_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parkir`
--

CREATE TABLE `parkir` (
  `id_tiket` int(15) NOT NULL,
  `tipe_kendaraan` varchar(15) NOT NULL,
  `platNomor` varchar(15) NOT NULL,
  `tanggal_masuk` date NOT NULL DEFAULT current_timestamp(),
  `jam_masuk` time NOT NULL DEFAULT current_timestamp(),
  `tanggal_keluar` date DEFAULT NULL,
  `jam_keluar` time DEFAULT NULL,
  `tarif_parkir` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parkir`
--

INSERT INTO `parkir` (`id_tiket`, `tipe_kendaraan`, `platNomor`, `tanggal_masuk`, `jam_masuk`, `tanggal_keluar`, `jam_keluar`, `tarif_parkir`) VALUES
(9, 'Motor', 'ABC1234', '2021-06-15', '10:45:34', '0000-00-00', '00:00:00', 0),
(10, 'Mobil', 'AB1234DC', '2021-06-15', '10:45:43', '2021-06-15', '01:05:02', 29034),
(13, 'Mobil', 'K0123CD', '2021-06-15', '13:11:14', '2021-06-15', '01:11:20', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `parkir_pegawai`
--

CREATE TABLE `parkir_pegawai` (
  `id_parkir` int(15) NOT NULL,
  `id_pegawai` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL DEFAULT current_timestamp(),
  `jam_masuk` time NOT NULL DEFAULT current_timestamp(),
  `tanggal_keluar` date DEFAULT NULL,
  `jam_keluar` time DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parkir_pegawai`
--

INSERT INTO `parkir_pegawai` (`id_parkir`, `id_pegawai`, `tanggal_masuk`, `jam_masuk`, `tanggal_keluar`, `jam_keluar`, `status`) VALUES
(1, 'P002', '2021-06-15', '06:04:16', '2021-06-15', '00:49:00', 0),
(5, 'P001', '2021-06-15', '07:39:04', '2021-06-14', '22:29:00', 0),
(7, 'P001', '2021-06-15', '09:53:40', '2021-06-14', '22:29:00', 0),
(8, 'P001', '2021-06-15', '10:13:10', '2021-06-14', '22:29:00', 0),
(13, 'P002', '2021-06-15', '12:49:29', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(255) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`) VALUES
('P001', 'Rudi'),
('P002', 'Rudo'),
('P003', 'Rido');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `parkir`
--
ALTER TABLE `parkir`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `parkir_pegawai`
--
ALTER TABLE `parkir_pegawai`
  ADD PRIMARY KEY (`id_parkir`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parkir`
--
ALTER TABLE `parkir`
  MODIFY `id_tiket` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `parkir_pegawai`
--
ALTER TABLE `parkir_pegawai`
  MODIFY `id_parkir` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);

--
-- Constraints for table `parkir_pegawai`
--
ALTER TABLE `parkir_pegawai`
  ADD CONSTRAINT `id_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
