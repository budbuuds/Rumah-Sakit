-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 06:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah_sakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `id` int(11) NOT NULL,
  `rs_id` int(11) NOT NULL,
  `nama_donatur` varchar(50) NOT NULL,
  `apd` int(11) DEFAULT NULL,
  `reagen` int(11) DEFAULT NULL,
  `viral` int(11) DEFAULT NULL,
  `rapid` int(11) DEFAULT NULL,
  `nasal` int(11) DEFAULT NULL,
  `ventilator` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`id`, `rs_id`, `nama_donatur`, `apd`, `reagen`, `viral`, `rapid`, `nasal`, `ventilator`, `created_at`, `updated_at`) VALUES
(1, 1, 'Budi Agung Santoso', 1, 1, 1, 1, 1, 1, NULL, NULL);

--
-- Triggers `donatur`
--
DELIMITER $$
CREATE TRIGGER `donatur` AFTER INSERT ON `donatur` FOR EACH ROW BEGIN
UPDATE rs 
SET apd = apd - new.apd, reagen = reagen - new.reagen, viral = viral - new.viral, rapid = rapid - new.rapid, nasal = nasal - new.nasal, ventilator = ventilator - new.ventilator
WHERE id = new.rs_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kebutuhan`
--

CREATE TABLE `kebutuhan` (
  `id` int(11) NOT NULL,
  `rs_id` int(11) NOT NULL,
  `apd` int(11) DEFAULT NULL,
  `reagen` int(11) DEFAULT NULL,
  `viral` int(11) DEFAULT NULL,
  `rapid` int(11) DEFAULT NULL,
  `nasal` int(11) DEFAULT NULL,
  `ventilator` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kebutuhan`
--

INSERT INTO `kebutuhan` (`id`, `rs_id`, `apd`, `reagen`, `viral`, `rapid`, `nasal`, `ventilator`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 2, 3, 2, 4, 1, NULL, NULL);

--
-- Triggers `kebutuhan`
--
DELIMITER $$
CREATE TRIGGER `kebutuhan` AFTER INSERT ON `kebutuhan` FOR EACH ROW BEGIN
UPDATE rs 
SET apd = apd + new.apd, reagen = reagen + new.reagen, viral = viral + new.viral, rapid = rapid + new.rapid, nasal = nasal + new.nasal, ventilator = ventilator + new.ventilator
WHERE id = new.rs_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `rs`
--

CREATE TABLE `rs` (
  `id` int(11) NOT NULL,
  `nama_rs` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `apd` int(11) NOT NULL,
  `reagen` int(11) NOT NULL,
  `viral` int(11) NOT NULL,
  `rapid` int(11) NOT NULL,
  `nasal` int(11) NOT NULL,
  `ventilator` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rs`
--

INSERT INTO `rs` (`id`, `nama_rs`, `Alamat`, `apd`, `reagen`, `viral`, `rapid`, `nasal`, `ventilator`, `created_at`, `updated_at`) VALUES
(1, 'RSU Painan', 'Jl. Dr A rivai Painan', 2, 1, 2, 1, 3, 0, NULL, NULL),
(2, 'RSU Muara Labuh', 'Jl. Raya Km.1 Muara Labuh Solok', 0, 0, 0, 0, 0, 0, NULL, NULL),
(3, 'RSU Prof Dr M A Hanafi', 'Jl. Bundo Kandung Batusangkar', 0, 0, 0, 0, 0, 0, NULL, NULL),
(4, 'RSU Pariaman', 'Jl. Prof M. Yamin, SH Pariaman', 0, 0, 0, 0, 0, 0, NULL, NULL),
(5, 'RSU Lubuk Basung', 'Jl. Padang Baru Lubuk Basung', 0, 0, 0, 0, 0, 0, NULL, NULL),
(6, 'RSU Suliki', 'Suliki Kab Lima Puluh Kota', 0, 0, 0, 0, 0, 0, NULL, NULL),
(7, 'RSU Lubuk Sikaping', 'Jl. Jen Sudirman Lubuk Sikaping', 0, 0, 0, 0, 0, 0, NULL, NULL),
(8, 'RS Islam Ibnu Sina', 'Ds Simpang Ampat Kab Pasaman', 0, 0, 0, 0, 0, 0, NULL, NULL),
(9, 'RSU Dr M Jamil', 'Jl. Perintis Kemerdekaan Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(10, 'RS Dr Reksodiwiryo', 'Jl. Dr Wahidin Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(11, 'RS Yos Sudarso', 'Jl. Situjuh No.1 Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(12, 'RSB An-Nisa', 'Jl. Pemuda No.18 Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(13, 'RS Islam Ibnu Sina', 'Jl. .Gajah Mada Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(14, 'RS Restu Ibu', 'Jl. Proklamasi No.31 Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(15, 'RS Aisyiah Muhammadiyah', 'Jl.H A Salim No.6 Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(16, 'RS Polda Sumbar', 'Jl. Jati 1 Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(17, 'RSB Sari', 'Jl. Belakang Olo No.49 Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(18, 'RS Jiwa Puti Bungsu', 'Jl. H Agus Salim 38 Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(19, 'RSB Bunda Padang', 'Jl. Gajah Mada No.35 Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(20, 'RS Selaguri', 'Jl. A Yani No.26 Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(21, 'RS Mata Oculer', 'Jl. Sawahan No.69 Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(22, 'RS PT Semen Padang', 'Indarung Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(23, 'RS Jiwa Padang', 'Jl. Ulu Gadut Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(24, 'RS Jantung Sumbar', 'Jl. K.H. Sulaiman', 0, 0, 0, 0, 0, 0, NULL, NULL),
(25, 'RS Mata Perintis', 'Jl. P Kemerdekaan No.71 Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(26, 'RSB Lenggogeni', 'Jl. Purus II No.1 Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(27, 'RS Mata Sitawa', 'Jl. Kartini No.17 Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(28, 'RSK Bedah Ropanasuri', 'Jl. Aur No.8 Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(29, 'RS Selasih', 'Jl. Khatib Sulaiman 72 Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(30, 'RSU Padang', 'Jl. Sungai Sapih Padang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(31, 'RSB Ananda', 'Jl. Bandar Purus No. 29', 0, 0, 0, 0, 0, 0, NULL, NULL),
(32, 'RSU Asri', 'Jl. R.M. Hatta no. 59', 0, 0, 0, 0, 0, 0, NULL, NULL),
(33, 'RSU Solok', 'Jl. Simpang Rumbio Solok', 0, 0, 0, 0, 0, 0, NULL, NULL),
(34, 'RSU Sawah Lunto', 'Jl. Kartini 18 Sawah Lunto', 0, 0, 0, 0, 0, 0, NULL, NULL),
(35, 'RSU Sungai Dareh', 'Jl. Lts Sumatera Km 2 P Panjang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(36, 'RSU Padang Panjang', 'Jl. KHA Dahlan 5 Padang Panjang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(37, 'RS Ibnu Sina Pd Panjang', 'Jl. Sukarno Hatta Pdg.Panjang', 0, 0, 0, 0, 0, 0, NULL, NULL),
(38, 'RSU Dr Achmad Mochtar', 'Jl. Dr A Rivai Bukittinggi', 0, 0, 0, 0, 0, 0, NULL, NULL),
(39, 'RS Rem 032 Bukittinggi', 'Jl. Jend Sudirman 37 Bukittinggi', 0, 0, 0, 0, 0, 0, NULL, NULL),
(40, 'RSU Pusat Bukittinggi', 'Jl. Jend Sudirman Bukittinggi', 0, 0, 0, 0, 0, 0, NULL, NULL),
(41, 'RS Ibnu Sina Bukittinggi', 'Jl. Belakang Balok Bukittinggi', 0, 0, 0, 0, 0, 0, NULL, NULL),
(42, 'RSU Madina', 'Jl. Qum Hamzah No. 17', 0, 0, 0, 0, 0, 0, NULL, NULL),
(43, 'RSU Dr Adnaan WD', 'Jl. AIS Nasution 25 Payakumbuh', 0, 0, 0, 0, 0, 0, NULL, NULL),
(44, 'RSU Ibnu Sina Payakumbuh', 'Jl. Pemuda No. 19 Payakumbuh', 0, 0, 0, 0, 0, 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rs_id` (`rs_id`);

--
-- Indexes for table `kebutuhan`
--
ALTER TABLE `kebutuhan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rs_id` (`rs_id`);

--
-- Indexes for table `rs`
--
ALTER TABLE `rs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kebutuhan`
--
ALTER TABLE `kebutuhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rs`
--
ALTER TABLE `rs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donatur`
--
ALTER TABLE `donatur`
  ADD CONSTRAINT `donatur_ibfk_1` FOREIGN KEY (`rs_id`) REFERENCES `rs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kebutuhan`
--
ALTER TABLE `kebutuhan`
  ADD CONSTRAINT `kebutuhan_ibfk_1` FOREIGN KEY (`rs_id`) REFERENCES `rs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
