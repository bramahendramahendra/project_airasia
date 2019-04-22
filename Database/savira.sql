-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 05:40 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_savira`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(5) NOT NULL,
  `hari` varchar(7) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam_keberangkatan` time DEFAULT NULL,
  `jam_kedatangan` time DEFAULT NULL,
  `id_nomor_penerbangan` int(5) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `hari`, `tanggal`, `jam_keberangkatan`, `jam_kedatangan`, `id_nomor_penerbangan`, `status`) VALUES
(1, 'not', NULL, NULL, NULL, 1, 'not'),
(2, 'Selasa', '2019-04-23', '08:35:00', '09:45:00', 3, 'Sudah tiba'),
(3, 'Selasa', '2019-04-23', '12:40:00', '13:45:00', 5, 'Sudah tiba'),
(4, 'Selasa', '2019-04-23', '15:10:00', '16:20:00', 7, 'Sudah tiba'),
(5, 'Selasa', '2019-04-23', '17:55:00', '19:10:00', 4, 'Sudah tiba'),
(6, 'Selasa', '2019-04-23', '21:25:00', '22:35:00', 6, 'Sudah tiba'),
(7, 'Rabu', '2019-04-24', '08:35:00', '09:45:00', 3, 'Sudah tiba'),
(8, 'Rabu', '2019-04-24', '12:40:00', '13:45:00', 5, 'Sudah berangkat'),
(9, 'Rabu', '2019-04-24', '15:10:00', '16:20:00', 7, 'Tepat waktu'),
(10, 'Rabu', '2019-04-24', '17:55:00', '19:10:00', 4, 'Tepat waktu'),
(11, 'Rabu', '2019-04-24', '21:25:00', '22:35:00', 6, 'Tepat waktu'),
(12, 'Kamis', '2019-04-25', '08:35:00', '09:45:00', 3, 'Tepat waktu'),
(13, 'Kamis', '2019-04-25', '12:40:00', '13:45:00', 5, 'Tepat waktu'),
(14, 'Kamis', '2019-04-25', '15:10:00', '16:20:00', 7, 'Tepat waktu'),
(15, 'Kamis', '2019-04-25', '17:55:00', '19:10:00', 4, 'Tepat waktu'),
(16, 'Kamis', '2019-04-25', '21:25:00', '22:35:00', 6, 'Tepat waktu');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `No` int(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`No`, `Email`, `Password`) VALUES
(1, 'rahmadfauzi600@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808');

-- --------------------------------------------------------

--
-- Table structure for table `penerbangan`
--

CREATE TABLE `penerbangan` (
  `id` int(5) NOT NULL,
  `nomor_penerbangan` varchar(10) DEFAULT NULL,
  `id_rute_keberangkatan` int(5) DEFAULT NULL,
  `id_rute_kedatangan` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbangan`
--

INSERT INTO `penerbangan` (`id`, `nomor_penerbangan`, `id_rute_keberangkatan`, `id_rute_kedatangan`) VALUES
(1, 'not', 1, 9),
(2, 'AK 6173', 2, 29),
(3, 'AK 6021', 2, 30),
(4, 'AK 6017', 2, 30),
(5, 'AK 6013', 2, 30),
(6, 'AK 6015', 2, 30),
(7, 'AK 6019', 2, 30);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Nama` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `RegisTime` varchar(25) NOT NULL,
  `JK` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Nama`, `Email`, `Password`, `RegisTime`, `JK`) VALUES
('AAA', 'rahmadfauzi600@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', '18-04-2019, 04:09:01', 'Pria');

-- --------------------------------------------------------

--
-- Table structure for table `rute_berangkat`
--

CREATE TABLE `rute_berangkat` (
  `id` int(5) NOT NULL,
  `kode_berangkat` varchar(3) DEFAULT NULL,
  `kota_berangkat` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute_berangkat`
--

INSERT INTO `rute_berangkat` (`id`, `kode_berangkat`, `kota_berangkat`) VALUES
(1, 'AMD', 'Ahmedabad'),
(2, 'AOR', 'Alor Setar'),
(3, 'ATQ', 'Amritsar'),
(4, 'AKL', 'Auckland'),
(5, 'IXB', 'Bagdogra'),
(6, 'DPS', 'Bali'),
(7, 'BTJ', 'Banda Aceh'),
(8, 'BDO', 'Bandung'),
(9, 'DMK', 'Bangkok – Don Mueang'),
(10, 'PEK', 'Beijing - Capital'),
(11, 'TJQ', 'Belitung'),
(12, 'BLR', 'Bengaluru'),
(13, 'BBI', 'Bhubaneswar'),
(14, 'BTU', 'Bintulu'),
(15, 'BNE', 'Brisbane'),
(16, 'BWN', 'Brunei'),
(17, 'BFV', 'Buri Ram'),
(18, 'PUS', 'Busan'),
(19, 'CGY', 'Cagayan de Oro'),
(20, 'VCA', 'Can Tho '),
(21, 'MPH', 'Caticlan - Boracay'),
(22, 'CEB', 'Cebu'),
(23, 'IXC', 'Chandigarh'),
(24, 'CSX', 'Changsha'),
(25, 'CTU', 'Chengdu'),
(26, 'MAA', 'Chennai'),
(27, 'CNX', 'Chiang Mai'),
(28, 'CEI', 'Chiang Rai'),
(29, 'JHB', 'Johor Bahru'),
(30, 'KUL', 'Kuala Lumpur');

-- --------------------------------------------------------

--
-- Table structure for table `rute_datang`
--

CREATE TABLE `rute_datang` (
  `id` int(5) NOT NULL,
  `kode_datang` varchar(3) DEFAULT NULL,
  `kota_datang` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute_datang`
--

INSERT INTO `rute_datang` (`id`, `kode_datang`, `kota_datang`) VALUES
(1, 'AMD', 'Ahmedabad'),
(2, 'AOR', 'Alor Setar'),
(3, 'ATQ', 'Amritsar'),
(4, 'AKL', 'Auckland'),
(5, 'IXB', 'Bagdogra'),
(6, 'DPS', 'Bali'),
(7, 'BTJ', 'Banda Aceh'),
(8, 'BDO', 'Bandung'),
(9, 'DMK', 'Bangkok – Don Mueang'),
(10, 'PEK', 'Beijing - Capital'),
(11, 'TJQ', 'Belitung'),
(12, 'BLR', 'Bengaluru'),
(13, 'BBI', 'Bhubaneswar'),
(14, 'BTU', 'Bintulu'),
(15, 'BNE', 'Brisbane'),
(16, 'BWN', 'Brunei'),
(17, 'BFV', 'Buri Ram'),
(18, 'PUS', 'Busan'),
(19, 'CGY', 'Cagayan de Oro'),
(20, 'VCA', 'Can Tho '),
(21, 'MPH', 'Caticlan - Boracay'),
(22, 'CEB', 'Cebu'),
(23, 'IXC', 'Chandigarh'),
(24, 'CSX', 'Changsha'),
(25, 'CTU', 'Chengdu'),
(26, 'MAA', 'Chennai'),
(27, 'CNX', 'Chiang Mai'),
(28, 'CEI', 'Chiang Rai'),
(29, 'JHB', 'Johor Bahru'),
(30, 'KUL', 'Kuala Lumpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `penerbangan`
--
ALTER TABLE `penerbangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rute_berangkat`
--
ALTER TABLE `rute_berangkat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rute_datang`
--
ALTER TABLE `rute_datang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penerbangan`
--
ALTER TABLE `penerbangan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rute_berangkat`
--
ALTER TABLE `rute_berangkat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `rute_datang`
--
ALTER TABLE `rute_datang`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
