-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2025 at 03:03 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbparkir_refa`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `plat_no` varchar(20) NOT NULL,
  `id_tempat` int DEFAULT NULL,
  `waktu_masuk` datetime DEFAULT NULL,
  `jenis_kendaraan` varchar(50) DEFAULT NULL,
  `merk_kendaraan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`plat_no`, `id_tempat`, `waktu_masuk`, `jenis_kendaraan`, `merk_kendaraan`) VALUES
('D 0894 rsld', 333, '2025-06-23 07:45:50', 'motor', 'xrideapip'),
('D 1239 sdkl', 444, '2025-07-23 12:36:12', 'mobil', 'kijang'),
('D 2364 fsdj', 222, '2025-04-23 03:43:29', 'motor', 'beatmerah'),
('D 7676 asks', 111, '2025-01-23 21:12:49', 'motor', 'miokuning'),
('D 9238 dfgs', 555, '2025-09-23 08:59:58', 'motor', 'beatputih');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_parkir`
--

CREATE TABLE `tempat_parkir` (
  `id_tempat` int NOT NULL,
  `lokasi` varchar(30) DEFAULT NULL,
  `harga_parkir` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tempat_parkir`
--

INSERT INTO `tempat_parkir` (`id_tempat`, `lokasi`, `harga_parkir`) VALUES
(111, 'pjsr', 2000),
(222, 'homar', 5000),
(333, 'bjb', 1000),
(444, 'bjb lebet sakedik', 3000),
(555, 'bk', 4000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`plat_no`),
  ADD KEY `id_tempat` (`id_tempat`);

--
-- Indexes for table `tempat_parkir`
--
ALTER TABLE `tempat_parkir`
  ADD PRIMARY KEY (`id_tempat`),
  ADD KEY `id_tempat` (`id_tempat`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`id_tempat`) REFERENCES `tempat_parkir` (`id_tempat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
