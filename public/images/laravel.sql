-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 04:57 AM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `celebrity_black`
--

CREATE TABLE `celebrity_black` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ukuran` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `celebrity_black`
--

INSERT INTO `celebrity_black` (`id`, `ukuran`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'PL', 0, '2020-06-01 01:33:06', '2020-06-01 01:33:06'),
(2, '-0.5', 0, '2020-06-01 01:33:06', '2020-06-01 01:33:06'),
(3, '-0.75', 0, '2020-06-01 01:33:06', '2020-06-01 01:33:06'),
(4, '-1', 0, '2020-06-01 01:33:06', '2020-06-01 01:33:06'),
(5, '-1.25', 0, '2020-06-01 01:33:06', '2020-06-01 01:33:06'),
(6, '-1.5', 0, '2020-06-01 01:33:06', '2020-06-01 01:33:06'),
(7, '-1.75', 0, '2020-06-01 01:33:06', '2020-06-01 01:33:06'),
(8, '-2', 0, '2020-06-01 01:33:06', '2020-06-01 01:33:06'),
(9, '-2.25', 0, '2020-06-01 01:33:06', '2020-06-01 01:33:06'),
(10, '-2.5', 0, '2020-06-01 01:33:06', '2020-06-01 01:33:06'),
(11, '-2.75', 0, '2020-06-01 01:33:06', '2020-06-01 01:33:06'),
(12, '-3', 0, '2020-06-01 01:33:06', '2020-06-01 01:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `celebrity_black_keluar`
--

CREATE TABLE `celebrity_black_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `celebrity_black_id` int(11) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `celebrity_black_keluar`
--
DELIMITER $$
CREATE TRIGGER `celebrity_black_keluar` AFTER INSERT ON `celebrity_black_keluar` FOR EACH ROW BEGIN
UPDATE celebrity_black SET stock = stock - new.jumlah_keluar
WHERE id = new.celebrity_black_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `celebrity_black_masuk`
--

CREATE TABLE `celebrity_black_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `celebrity_black_id` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `celebrity_black_masuk`
--
DELIMITER $$
CREATE TRIGGER `celebrity_black_masuk` AFTER INSERT ON `celebrity_black_masuk` FOR EACH ROW BEGIN
UPDATE celebrity_black SET stock = stock + new.jumlah_masuk
WHERE id = new.celebrity_black_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `celebrity_brown`
--

CREATE TABLE `celebrity_brown` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ukuran` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `celebrity_brown`
--

INSERT INTO `celebrity_brown` (`id`, `ukuran`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'PL', 0, '2020-06-01 01:32:47', '2020-06-01 01:32:47'),
(2, '-0.5', 0, '2020-06-01 01:32:47', '2020-06-01 01:32:47'),
(3, '-0.75', 0, '2020-06-01 01:32:47', '2020-06-01 01:32:47'),
(4, '-1', 0, '2020-06-01 01:32:48', '2020-06-01 01:32:48'),
(5, '-1.25', 0, '2020-06-01 01:32:48', '2020-06-01 01:32:48'),
(6, '-1.5', 0, '2020-06-01 01:32:48', '2020-06-01 01:32:48'),
(7, '-1.75', 0, '2020-06-01 01:32:48', '2020-06-01 01:32:48'),
(8, '-2', 0, '2020-06-01 01:32:48', '2020-06-01 01:32:48'),
(9, '-2.25', 0, '2020-06-01 01:32:48', '2020-06-01 01:32:48'),
(10, '-2.5', 0, '2020-06-01 01:32:48', '2020-06-01 01:32:48'),
(11, '-2.75', 0, '2020-06-01 01:32:48', '2020-06-01 01:32:48'),
(12, '-3', 0, '2020-06-01 01:32:48', '2020-06-01 01:32:48'),
(13, 'PL', 0, '2020-06-01 01:33:24', '2020-06-01 01:33:24'),
(14, '-0.5', 0, '2020-06-01 01:33:24', '2020-06-01 01:33:24'),
(15, '-0.75', 0, '2020-06-01 01:33:24', '2020-06-01 01:33:24'),
(16, '-1', 0, '2020-06-01 01:33:24', '2020-06-01 01:33:24'),
(17, '-1.25', 0, '2020-06-01 01:33:24', '2020-06-01 01:33:24'),
(18, '-1.5', 0, '2020-06-01 01:33:24', '2020-06-01 01:33:24'),
(19, '-1.75', 0, '2020-06-01 01:33:24', '2020-06-01 01:33:24'),
(20, '-2', 0, '2020-06-01 01:33:24', '2020-06-01 01:33:24'),
(21, '-2.25', 0, '2020-06-01 01:33:24', '2020-06-01 01:33:24'),
(22, '-2.5', 0, '2020-06-01 01:33:24', '2020-06-01 01:33:24'),
(23, '-2.75', 0, '2020-06-01 01:33:24', '2020-06-01 01:33:24'),
(24, '-3', 0, '2020-06-01 01:33:24', '2020-06-01 01:33:24');

-- --------------------------------------------------------

--
-- Table structure for table `celebrity_brown_keluar`
--

CREATE TABLE `celebrity_brown_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `celebrity_brown_id` int(11) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `celebrity_brown_keluar`
--
DELIMITER $$
CREATE TRIGGER `celebrity_brown_keluar` AFTER INSERT ON `celebrity_brown_keluar` FOR EACH ROW BEGIN
UPDATE celebrity_brown SET stock = stock - new.jumlah_keluar
WHERE id = new.celebrity_brown_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `celebrity_brown_masuk`
--

CREATE TABLE `celebrity_brown_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `celebrity_brown_id` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `celebrity_brown_masuk`
--
DELIMITER $$
CREATE TRIGGER `celebrity_brown_masuk` AFTER INSERT ON `celebrity_brown_masuk` FOR EACH ROW BEGIN
UPDATE celebrity_brown SET stock = stock + new.jumlah_masuk
WHERE id = new.celebrity_brown_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `celebrity_grey`
--

CREATE TABLE `celebrity_grey` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ukuran` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `celebrity_grey_keluar`
--

CREATE TABLE `celebrity_grey_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `celebrity_grey_id` int(11) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `celebrity_grey_keluar`
--
DELIMITER $$
CREATE TRIGGER `celebrity_grey_keluar` AFTER INSERT ON `celebrity_grey_keluar` FOR EACH ROW BEGIN
UPDATE celebrity_grey SET stock = stock - new.jumlah_keluar
WHERE id = new.celebrity_grey_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `celebrity_grey_masuk`
--

CREATE TABLE `celebrity_grey_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `celebrity_grey_id` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `celebrity_grey_masuk`
--
DELIMITER $$
CREATE TRIGGER `celebrity_grey_masuk` BEFORE INSERT ON `celebrity_grey_masuk` FOR EACH ROW BEGIN
UPDATE celebrity_grey SET stock = stock + new.jumlah_masuk
WHERE id = new.celebrity_grey_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `emeral`
--

CREATE TABLE `emeral` (
  `id` int(11) NOT NULL,
  `frame` varchar(50) NOT NULL,
  `lensa` varchar(50) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `stokgosok` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `sisa` int(11) NOT NULL,
  `pj` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emeral`
--

INSERT INTO `emeral` (`id`, `frame`, `lensa`, `ukuran`, `stokgosok`, `harga`, `sisa`, `pj`, `updated_at`, `created_at`) VALUES
(1, 'Ronaldo', 'cekung', '-2.5', 'Gosok', 4500000, 3, 'budi', '2020-03-18 21:52:19', '2020-03-18 21:52:19'),
(2, 'frame', 'lensa', '-3', 'Gosok', 1000, 0, 'Admin', '2020-05-30 23:15:25', '2020-05-30 23:15:25'),
(3, 'messi', 'lensa', '-3', 'Stok', 100000, 3, 'Admin', '2020-05-31 22:54:01', '2020-05-31 22:54:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `idol_black`
--

CREATE TABLE `idol_black` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ukuran` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `idol_black`
--

INSERT INTO `idol_black` (`id`, `ukuran`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'PL', 0, '2020-06-01 01:31:44', '2020-06-01 01:31:44'),
(2, '-0.5', 0, '2020-06-01 01:31:44', '2020-06-01 01:31:44'),
(3, '-0.75', 0, '2020-06-01 01:31:44', '2020-06-01 01:31:44'),
(4, '-1', 0, '2020-06-01 01:31:44', '2020-06-01 01:31:44'),
(5, '-1.25', 0, '2020-06-01 01:31:44', '2020-06-01 01:31:44'),
(6, '-1.5', 0, '2020-06-01 01:31:44', '2020-06-01 01:31:44'),
(7, '-1.75', 0, '2020-06-01 01:31:44', '2020-06-01 01:31:44'),
(8, '-2', 0, '2020-06-01 01:31:44', '2020-06-01 01:31:44'),
(9, '-2.25', 0, '2020-06-01 01:31:44', '2020-06-01 01:31:44'),
(10, '-2.5', 0, '2020-06-01 01:31:44', '2020-06-01 01:31:44'),
(11, '-2.75', 0, '2020-06-01 01:31:44', '2020-06-01 01:31:44'),
(12, '-3', 0, '2020-06-01 01:31:44', '2020-06-01 01:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `idol_black_keluar`
--

CREATE TABLE `idol_black_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idol_black_id` int(11) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `idol_black_keluar`
--
DELIMITER $$
CREATE TRIGGER `idol_black_keluar` AFTER INSERT ON `idol_black_keluar` FOR EACH ROW BEGIN
UPDATE idol_black SET stock = stock - new.jumlah_keluar
WHERE id = new.idol_black_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `idol_black_masuk`
--

CREATE TABLE `idol_black_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idol_black_id` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `idol_black_masuk`
--
DELIMITER $$
CREATE TRIGGER `idol_black_masuk` AFTER INSERT ON `idol_black_masuk` FOR EACH ROW BEGIN
UPDATE idol_black SET stock = stock + new.jumlah_masuk
WHERE id = new.idol_black_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `idol_brown`
--

CREATE TABLE `idol_brown` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ukuran` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `idol_brown`
--

INSERT INTO `idol_brown` (`id`, `ukuran`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'PL', 0, '2020-06-01 01:32:10', '2020-06-01 01:32:10'),
(2, '-0.5', 0, '2020-06-01 01:32:10', '2020-06-01 01:32:10'),
(3, '-0.75', 0, '2020-06-01 01:32:10', '2020-06-01 01:32:10'),
(4, '-1', 0, '2020-06-01 01:32:10', '2020-06-01 01:32:10'),
(5, '-1.25', 0, '2020-06-01 01:32:10', '2020-06-01 01:32:10'),
(6, '-1.5', 0, '2020-06-01 01:32:10', '2020-06-01 01:32:10'),
(7, '-1.75', 0, '2020-06-01 01:32:10', '2020-06-01 01:32:10'),
(8, '-2', 0, '2020-06-01 01:32:10', '2020-06-01 01:32:10'),
(9, '-2.25', 0, '2020-06-01 01:32:10', '2020-06-01 01:32:10'),
(10, '-2.5', 0, '2020-06-01 01:32:10', '2020-06-01 01:32:10'),
(11, '-2.75', 0, '2020-06-01 01:32:10', '2020-06-01 01:32:10'),
(12, '-3', 0, '2020-06-01 01:32:10', '2020-06-01 01:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `idol_brown_keluar`
--

CREATE TABLE `idol_brown_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idol_brown_id` int(11) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `idol_brown_keluar`
--
DELIMITER $$
CREATE TRIGGER `idol_brown_keluar` AFTER INSERT ON `idol_brown_keluar` FOR EACH ROW BEGIN
UPDATE idol_brown SET stock = stock - new.jumlah_keluar
WHERE id = new.idol_brown_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `idol_brown_masuk`
--

CREATE TABLE `idol_brown_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idol_brown_id` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `idol_brown_masuk`
--
DELIMITER $$
CREATE TRIGGER `idol_brown_masuk` AFTER INSERT ON `idol_brown_masuk` FOR EACH ROW BEGIN
UPDATE idol_brown SET stock = stock + new.jumlah_masuk
WHERE id = new.idol_brown_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `idol_grey`
--

CREATE TABLE `idol_grey` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ukuran` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `idol_grey`
--

INSERT INTO `idol_grey` (`id`, `ukuran`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'PL', 0, '2020-06-01 01:32:28', '2020-06-01 01:32:28'),
(2, '-0.5', 0, '2020-06-01 01:32:28', '2020-06-01 01:32:28'),
(3, '-0.75', 0, '2020-06-01 01:32:28', '2020-06-01 01:32:28'),
(4, '-1', 0, '2020-06-01 01:32:28', '2020-06-01 01:32:28'),
(5, '-1.25', 0, '2020-06-01 01:32:28', '2020-06-01 01:32:28'),
(6, '-1.5', 0, '2020-06-01 01:32:28', '2020-06-01 01:32:28'),
(7, '-1.75', 0, '2020-06-01 01:32:28', '2020-06-01 01:32:28'),
(8, '-2', 0, '2020-06-01 01:32:28', '2020-06-01 01:32:28'),
(9, '-2.25', 0, '2020-06-01 01:32:28', '2020-06-01 01:32:28'),
(10, '-2.5', 0, '2020-06-01 01:32:28', '2020-06-01 01:32:28'),
(11, '-2.75', 0, '2020-06-01 01:32:28', '2020-06-01 01:32:28'),
(12, '-3', 0, '2020-06-01 01:32:28', '2020-06-01 01:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `idol_grey_keluar`
--

CREATE TABLE `idol_grey_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idol_grey_id` int(11) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `idol_grey_keluar`
--
DELIMITER $$
CREATE TRIGGER `idol_grey_keluar` AFTER INSERT ON `idol_grey_keluar` FOR EACH ROW BEGIN
UPDATE idol_grey SET stock = stock - new.jumlah_keluar
WHERE id = new.idol_grey_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `idol_grey_masuk`
--

CREATE TABLE `idol_grey_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idol_grey_id` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `idol_grey_masuk`
--
DELIMITER $$
CREATE TRIGGER `idol_grey_masuk` AFTER INSERT ON `idol_grey_masuk` FOR EACH ROW BEGIN
UPDATE idol_grey SET stock = stock + new.jumlah_masuk
WHERE id = new.idol_grey_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `invoice` varchar(255) DEFAULT NULL,
  `pj` varchar(50) NOT NULL,
  `nama_dis` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `invoice`, `pj`, `nama_dis`, `created_at`, `updated_at`) VALUES
(17, 'WhatsApp Image 2020-05-12 at 8.54.57 AM.jpeg', 'Admin', 'jepang', '2020-05-30 12:29:00', '2020-05-30 12:29:00'),
(18, 'IMG_20200409_132933_HDR.jpg', 'Admin', 'purnomo', '2020-05-30 12:54:17', '2020-05-30 12:54:18'),
(19, '2.jpg', 'Admin', 'purnomo', '2020-05-31 22:53:20', '2020-05-31 22:53:20'),
(20, 'IMG_20200424_092751_HDR.jpg', 'Admin', 'jepang', '2020-06-01 02:41:14', '2020-06-01 02:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `lensa_block`
--

CREATE TABLE `lensa_block` (
  `id` int(11) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lensa_block`
--

INSERT INTO `lensa_block` (`id`, `ukuran`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'PL', 0, '2020-06-01 00:15:00', '2020-06-01 00:15:00'),
(2, '-0.25', 0, '2020-06-01 00:15:00', '2020-06-01 00:15:00'),
(3, '-0.5', 0, '2020-06-01 00:15:00', '2020-06-01 00:15:00'),
(4, '-0.75', 0, '2020-06-01 00:15:00', '2020-06-01 00:15:00'),
(5, '-1', 0, '2020-06-01 00:15:00', '2020-06-01 00:15:00'),
(6, '-1.25', 0, '2020-06-01 00:15:00', '2020-06-01 00:15:00'),
(7, '-1.5', 0, '2020-06-01 00:15:00', '2020-06-01 00:15:00'),
(8, '-1.75', 0, '2020-06-01 00:15:00', '2020-06-01 00:15:00'),
(9, '-2', 0, '2020-06-01 00:15:00', '2020-06-01 00:15:00'),
(10, '-2.25', 0, '2020-06-01 00:15:00', '2020-06-01 00:15:00'),
(11, '-2.5', 0, '2020-06-01 00:15:00', '2020-06-01 00:15:00'),
(12, '-2.75', 0, '2020-06-01 00:15:00', '2020-06-01 00:15:00'),
(13, '-3', 0, '2020-06-01 00:15:00', '2020-06-01 00:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `lensa_block_keluar`
--

CREATE TABLE `lensa_block_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lensa_block_id` int(11) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `lensa_block_keluar`
--
DELIMITER $$
CREATE TRIGGER `block_keluar` AFTER INSERT ON `lensa_block_keluar` FOR EACH ROW BEGIN
UPDATE lensa_block SET stock = stock - new.jumlah_keluar
WHERE id = new.lensa_block_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lensa_block_masuk`
--

CREATE TABLE `lensa_block_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lensa_block_id` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `lensa_block_masuk`
--
DELIMITER $$
CREATE TRIGGER `block_masuk` AFTER INSERT ON `lensa_block_masuk` FOR EACH ROW BEGIN
UPDATE lensa_block SET stock = stock + new.jumlah_masuk
WHERE id = new.lensa_block_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lensa_flexi`
--

CREATE TABLE `lensa_flexi` (
  `id` int(11) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lensa_flexi`
--

INSERT INTO `lensa_flexi` (`id`, `ukuran`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'PL/+100', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(2, 'PL/+125', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(3, 'PL/+150', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(4, 'PL/+175', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(5, 'PL/+200', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(6, 'PL/+225', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(7, 'PL/+250', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(8, 'PL/+275', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(9, 'PL/+300', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(10, 'P025/+100', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(11, 'P025/+125', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(12, 'P025/+150', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(13, 'P025/+175', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(14, 'P025/+200', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(15, 'P025/+225', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(16, 'P025/+250', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(17, 'P025/+275', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(18, 'P025/+300', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(19, 'P050/+100', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(20, 'P050/+125', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(21, 'P050/+150', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(22, 'P050/+175', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(23, 'P050/+200', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(24, 'P050/+225', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(25, 'P050/+250', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(26, 'P050/+275', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(27, 'P050/+300', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(28, 'P075/+100', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(29, 'P075/+125', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(30, 'P075/+150', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(31, 'P075/+175', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(32, 'P075/+200', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(33, 'P075/+225', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(34, 'P075/+250', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(35, 'P075/+275', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(36, 'P075/+300', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(37, 'P100/+150', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(38, 'P100/+175', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(39, 'P100/+200', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(40, 'P100/+225', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(41, 'P100/+250', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(42, 'P100/+275', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(43, 'P100/+300', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(44, 'P125/+200', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(45, 'P125/+225', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(46, 'P125/+250', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(47, 'P125/+275', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(48, 'P125/+300', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(49, 'P175/+225', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(50, 'P175/+250', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(51, 'P175/+275', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(52, 'P175/+300', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(53, 'M025/+175', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(54, 'M025/+200', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(55, 'M025/+225', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(56, 'M025/+250', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(57, 'M025/+275', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(58, 'M025/+300', 0, '2020-06-01 00:04:04', '2020-06-01 00:04:04'),
(68, 'P150/+200', 0, '2020-06-01 00:23:37', '2020-06-01 00:23:37'),
(69, 'P150/+225', 0, '2020-06-01 00:23:37', '2020-06-01 00:23:37'),
(70, 'P150/+250', 0, '2020-06-01 00:23:37', '2020-06-01 00:23:37'),
(71, 'P150/+275', 0, '2020-06-01 00:23:37', '2020-06-01 00:23:37'),
(72, 'P150/+300', 0, '2020-06-01 00:23:37', '2020-06-01 00:23:37'),
(73, 'P200/+250', 0, '2020-06-01 00:26:13', '2020-06-01 00:26:13'),
(74, 'P200/+275', 0, '2020-06-01 00:26:13', '2020-06-01 00:26:13'),
(75, 'P200/+300', 0, '2020-06-01 00:26:13', '2020-06-01 00:26:13'),
(76, 'M050/+100', 0, '2020-06-01 00:33:09', '2020-06-01 00:33:09'),
(77, 'M050/+125', 0, '2020-06-01 00:33:09', '2020-06-01 00:33:09'),
(78, 'M050/+150', 0, '2020-06-01 00:33:09', '2020-06-01 00:33:09'),
(79, 'M050/+175', 0, '2020-06-01 00:33:09', '2020-06-01 00:33:09'),
(80, 'M050/+200', 0, '2020-06-01 00:33:09', '2020-06-01 00:33:09'),
(81, 'M050/+225', 0, '2020-06-01 00:33:09', '2020-06-01 00:33:09'),
(82, 'M050/+250', 0, '2020-06-01 00:33:09', '2020-06-01 00:33:09'),
(83, 'M050/+275', 0, '2020-06-01 00:33:09', '2020-06-01 00:33:09'),
(84, 'M050/+300', 0, '2020-06-01 00:33:09', '2020-06-01 00:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `lensa_flexi_keluar`
--

CREATE TABLE `lensa_flexi_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lensa_flexi_id` int(11) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `lensa_flexi_keluar`
--
DELIMITER $$
CREATE TRIGGER `flexi_keluar` AFTER INSERT ON `lensa_flexi_keluar` FOR EACH ROW BEGIN
UPDATE lensa_flexi SET stock = stock - new.jumlah_keluar
WHERE id = new.lensa_flexi_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lensa_flexi_masuk`
--

CREATE TABLE `lensa_flexi_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lensa_flexi_id` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `lensa_flexi_masuk`
--
DELIMITER $$
CREATE TRIGGER `flexi_masuk` AFTER INSERT ON `lensa_flexi_masuk` FOR EACH ROW BEGIN
UPDATE lensa_flexi SET stock = stock + new.jumlah_masuk
WHERE id = new.lensa_flexi_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lensa_grey`
--

CREATE TABLE `lensa_grey` (
  `id` int(11) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lensa_grey`
--

INSERT INTO `lensa_grey` (`id`, `ukuran`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'PL', 0, '2020-06-01 00:11:56', '2020-06-01 00:11:56'),
(2, '-0.25', 0, '2020-06-01 00:11:56', '2020-06-01 00:11:56'),
(3, '-0.5', 0, '2020-06-01 00:11:56', '2020-06-01 00:11:56'),
(4, '-0.75', 0, '2020-06-01 00:11:56', '2020-06-01 00:11:56'),
(5, '-1', 0, '2020-06-01 00:11:56', '2020-06-01 00:11:56'),
(6, '-1.25', 0, '2020-06-01 00:11:56', '2020-06-01 00:11:56'),
(7, '-1.5', 0, '2020-06-01 00:11:56', '2020-06-01 00:11:56'),
(8, '-1.75', 0, '2020-06-01 00:11:56', '2020-06-01 00:11:56'),
(9, '-2', 0, '2020-06-01 00:11:56', '2020-06-01 00:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `lensa_grey_keluar`
--

CREATE TABLE `lensa_grey_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lensa_grey_id` int(11) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `lensa_grey_keluar`
--
DELIMITER $$
CREATE TRIGGER `grey_keluar` BEFORE INSERT ON `lensa_grey_keluar` FOR EACH ROW BEGIN
UPDATE lensa_grey SET stock = stock - new.jumlah_keluar
WHERE id = new.lensa_grey_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lensa_grey_masuk`
--

CREATE TABLE `lensa_grey_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lensa_grey_id` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `lensa_grey_masuk`
--
DELIMITER $$
CREATE TRIGGER `grey_masuk` BEFORE INSERT ON `lensa_grey_masuk` FOR EACH ROW BEGIN
UPDATE lensa_grey SET stock = stock + new.jumlah_masuk
WHERE id = new.lensa_grey_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lensa_kmccr`
--

CREATE TABLE `lensa_kmccr` (
  `id` int(11) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lensa_kmccr`
--

INSERT INTO `lensa_kmccr` (`id`, `ukuran`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'PL/+100', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(2, 'PL/+125', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(3, 'PL/+150', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(4, 'PL/+175', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(5, 'PL/+200', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(6, 'PL/+225', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(7, 'PL/+250', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(8, 'PL/+275', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(9, 'PL/+300', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(10, 'P025/+100', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(11, 'P025/+125', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(12, 'P025/+150', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(13, 'P025/+175', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(14, 'P025/+200', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(15, 'P025/+225', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(16, 'P025/+250', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(17, 'P025/+275', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(18, 'P025/+300', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(19, 'P050/+100', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(20, 'P050/+125', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(21, 'P050/+150', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(22, 'P050/+175', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(23, 'P050/+200', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(24, 'P050/+225', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(25, 'P050/+250', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(26, 'P050/+275', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(27, 'P050/+300', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(28, 'P075/+100', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(29, 'P075/+125', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(30, 'P075/+150', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(31, 'P075/+175', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(32, 'P075/+200', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(33, 'P075/+225', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(34, 'P075/+250', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(35, 'P075/+275', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(36, 'P075/+300', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(37, 'P100/+150', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(38, 'P100/+175', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(39, 'P100/+200', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(40, 'P100/+225', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(41, 'P100/+250', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(42, 'P100/+275', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(43, 'P100/+300', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(44, 'P125/+175', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(45, 'P125/+200', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(46, 'P125/+225', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(47, 'P125/+250', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(48, 'P125/+275', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(49, 'P125/+300', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(50, 'P150/+200', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(51, 'P150/+225', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(52, 'P150/+250', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(53, 'P150/+275', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(54, 'P150/+300', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(55, 'P175/+225', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(56, 'P175/+250', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(57, 'P175/+275', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(58, 'P175/+300', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(59, 'P200/+250', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(60, 'P200/+275', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(61, 'P200/+300', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(62, 'M025/+100', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(63, 'M025/+125', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(64, 'M025/+150', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(65, 'M025/+175', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(66, 'M025/+200', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(67, 'M025/+225', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(68, 'M025/+250', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(69, 'M025/+275', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(70, 'M025/+300', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(71, 'M050/+100', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(72, 'M050/+125', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(73, 'M050/+150', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(74, 'M050/+175', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(75, 'M050/+200', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(76, 'M050/+225', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(77, 'M050/+250', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(78, 'M050/+275', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(79, 'M050/+300', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(80, 'M075/+100', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(81, 'M075/+125', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(82, 'M075/+150', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(83, 'M075/+175', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(84, 'M075/+200', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(85, 'M075/+225', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(86, 'M075/+250', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(87, 'M075/+275', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(88, 'M075/+300', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(89, 'M100/+150', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(90, 'M100/+175', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(91, 'M100/+200', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(92, 'M100/+225', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(93, 'M100/+250', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(94, 'M100/+275', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(95, 'M100/+300', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(96, 'M125/+200', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(97, 'M125/+225', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(98, 'M125/+250', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(99, 'M125/+275', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(100, 'M125/+300', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(101, 'M150/+200', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(102, 'M150/+225', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(103, 'M150/+250', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(104, 'M150/+275', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03'),
(105, 'M150/+300', 0, '2020-06-01 00:39:03', '2020-06-01 00:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `lensa_kmccr_keluar`
--

CREATE TABLE `lensa_kmccr_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lensa_kmccr_id` int(11) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `lensa_kmccr_keluar`
--
DELIMITER $$
CREATE TRIGGER `kmccr_keluar` BEFORE INSERT ON `lensa_kmccr_keluar` FOR EACH ROW BEGIN
UPDATE lensa_kmccr SET stock = stock - new.jumlah_keluar
WHERE id = new.lensa_kmccr_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lensa_kmccr_masuk`
--

CREATE TABLE `lensa_kmccr_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lensa_kmccr_id` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `lensa_kmccr_masuk`
--
DELIMITER $$
CREATE TRIGGER `kmccr_masuk` BEFORE INSERT ON `lensa_kmccr_masuk` FOR EACH ROW BEGIN
UPDATE lensa_kmccr SET stock = stock + new.jumlah_masuk
WHERE id = new.lensa_kmccr_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lensa_leinz`
--

CREATE TABLE `lensa_leinz` (
  `id` bigint(20) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lensa_leinz`
--

INSERT INTO `lensa_leinz` (`id`, `ukuran`, `stock`, `created_at`, `updated_at`) VALUES
(2, 'PL', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(3, '-0.25', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(4, '-0.5', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(5, '-0.75', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(6, '-1', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(7, '-1.25', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(8, '-1.5', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(9, '-1.75', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(10, '-2', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(11, '-2.25', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(12, '-2.5', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(13, '-2.75', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(14, '-3', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(15, '-3.25', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(16, '-3.5', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(17, '-3.75', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(18, '-4', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(19, '-4.25', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(20, '-4.5', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(21, '-4.75', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(22, '-5', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(23, '-5.25', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(24, '-5.5', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(25, '-5.75', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(26, '-6', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(27, 'C -0,25', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(28, 'C -0,5', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(29, 'M0,25 -0,25', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48'),
(30, 'M0,50 -0,5', 0, '2020-06-01 00:09:48', '2020-06-01 00:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `lensa_leinz_keluar`
--

CREATE TABLE `lensa_leinz_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lensa_leinz_id` int(11) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `lensa_leinz_keluar`
--
DELIMITER $$
CREATE TRIGGER `leinz_keluar` BEFORE INSERT ON `lensa_leinz_keluar` FOR EACH ROW BEGIN
UPDATE lensa_leinz SET stock = stock - new.jumlah_keluar
WHERE id = new.lensa_leinz_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lensa_leinz_masuk`
--

CREATE TABLE `lensa_leinz_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lensa_leinz_id` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `lensa_leinz_masuk`
--
DELIMITER $$
CREATE TRIGGER `leinz_masuk` BEFORE INSERT ON `lensa_leinz_masuk` FOR EACH ROW BEGIN
UPDATE lensa_leinz SET stock = stock + new.jumlah_masuk
WHERE id = new.lensa_leinz_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lensa_mccr`
--

CREATE TABLE `lensa_mccr` (
  `id` int(11) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lensa_mccr`
--

INSERT INTO `lensa_mccr` (`id`, `ukuran`, `stock`, `created_at`, `updated_at`) VALUES
(4, 'PL', 50, '2020-05-31 22:25:37', '2020-05-31 22:25:37'),
(5, '-0.25', 10, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(6, '-0.5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(7, '-0.75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(8, '-1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(9, '-1.25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(10, '-1.5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(11, '-1.75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(12, '-2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(13, '-2.25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(14, '-2.5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(15, '-2.75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(16, '-3', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(17, '-3.25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(18, '-3.5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(19, '-3.75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(20, '-4', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(21, '-4.25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(22, '-4.5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(23, '-4.75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(24, '-5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(25, '-5.25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(26, '-5.5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(27, '-5.75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(28, '-6', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(29, 'c -0,25 ', 100, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(30, 'c -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(31, 'c -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(32, 'c -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(33, 'c -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(34, 'c -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(35, 'c -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(36, 'c -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(37, 'c -0,25 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(38, 'c -0,5 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(39, 'c -0,75 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(40, 'c -1 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(41, 'c -1,25 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(42, 'c -1,5 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(43, 'c -1,75 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(44, 'c -2 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(45, 'c -2,25 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(46, 'c -2,5 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(47, 'c -2,75 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(48, 'c -3 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(49, 'c -3,25 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(50, 'c -3,5 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(51, 'c -3,75 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(52, 'c -4 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(53, 'c -4,25 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(54, 'c -4,5 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(55, 'c -4,75 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(56, 'c -5 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(57, 'c -5,25 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(58, 'c -5,5 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(59, 'c -5,75 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(60, 'c -6 -0,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(61, 'c -0,25 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(62, 'c -0,5 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(63, 'c -0,75 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(64, 'c -1 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(65, 'c -1,25 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(66, 'c -1,5 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(67, 'c -1,75 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(68, 'c -2 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(69, 'c -2,25 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(70, 'c -2,5 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(71, 'c -2,75 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(72, 'c -3 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(73, 'c -3,25 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(74, 'c -3,5 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(75, 'c -3,75 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(76, 'c -4 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(77, 'c -4,25 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(78, 'c -4,5 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(79, 'c -4,75 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(80, 'c -5 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(81, 'c -5,25 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(82, 'c -5,5 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(83, 'c -5,75 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(84, 'c -6 -0,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(85, 'c -0,25 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(86, 'c -0,5 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(87, 'c -0,75 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(88, 'c -1 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(89, 'c -1,25 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(90, 'c -1,5 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(91, 'c -1,75 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(92, 'c -2 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(93, 'c -2,25 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(94, 'c -2,5 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(95, 'c -2,75 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(96, 'c -3 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(97, 'c -3,25 -1', 98, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(98, 'c -3,5 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(99, 'c -3,75 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(100, 'c -4 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(101, 'c -4,25 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(102, 'c -4,5 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(103, 'c -4,75 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(104, 'c -5 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(105, 'c -5,25 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(106, 'c -5,5 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(107, 'c -5,75 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(108, 'c -6 -1', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(109, 'c -0,25 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(110, 'c -0,5 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(111, 'c -0,75 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(112, 'c -1 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(113, 'c -1,25 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(114, 'c -1,5 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(115, 'c -1,75 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(116, 'c -2 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(117, 'c -2,25 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(118, 'c -2,5 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(119, 'c -2,75 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(120, 'c -3 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(121, 'c -3,25 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(122, 'c -3,5 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(123, 'c -3,75 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(124, 'c -4 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(125, 'c -4,25 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(126, 'c -4,5 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(127, 'c -4,75 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(128, 'c -5 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(129, 'c -5,25 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(130, 'c -5,5 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(131, 'c -5,75 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(132, 'c -6 -1,25', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(133, 'c -0,25 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(134, 'c -0,5 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(135, 'c -0,75 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(136, 'c -1 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(137, 'c -1,25 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(138, 'c -1,5 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(139, 'c -1,75 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(140, 'c -2 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(141, 'c -2,25 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(142, 'c -2,5 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(143, 'c -2,75 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(144, 'c -3 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(145, 'c -3,25 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(146, 'c -3,5 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(147, 'c -3,75 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(148, 'c -4 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(149, 'c -4,25 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(150, 'c -4,5 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(151, 'c -4,75 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(152, 'c -5 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(153, 'c -5,25 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(154, 'c -5,5 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(155, 'c -5,75 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(156, 'c -6 -1,5', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(157, 'c -0,25 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(158, 'c -0,5 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(159, 'c -0,75 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(160, 'c -1 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(161, 'c -1,25 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(162, 'c -1,5 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(163, 'c -1,75 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(164, 'c -2 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(165, 'c -2,25 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(166, 'c -2,5 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(167, 'c -2,75 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(168, 'c -3 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(169, 'c -3,25 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(170, 'c -3,5 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(171, 'c -3,75 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(172, 'c -4 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(173, 'c -4,25 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(174, 'c -4,5 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(175, 'c -4,75 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(176, 'c -5 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(177, 'c -5,25 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(178, 'c -5,5 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(179, 'c -5,75 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(180, 'c -6 -1,75', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(181, 'c -0,25 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(182, 'c -0,5 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(183, 'c -0,75 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(184, 'c -1 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(185, 'c -1,25 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(186, 'c -1,5 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(187, 'c -1,75 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(188, 'c -2 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(189, 'c -2,25 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(190, 'c -2,5 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(191, 'c -2,75 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(192, 'c -3 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(193, 'c -3,25 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(194, 'c -3,5 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(195, 'c -3,75 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(196, 'c -4 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(197, 'c -4,25 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(198, 'c -4,5 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(199, 'c -4,75 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(200, 'c -5 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(201, 'c -5,25 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(202, 'c -5,5 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(203, 'c -5,75 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38'),
(204, 'c -6 -2', 0, '2020-05-31 22:25:38', '2020-05-31 22:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `lensa_mccr_keluar`
--

CREATE TABLE `lensa_mccr_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lensa_mccr_id` int(11) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lensa_mccr_keluar`
--

INSERT INTO `lensa_mccr_keluar` (`id`, `lensa_mccr_id`, `jumlah_keluar`, `pj`, `tujuan_id`, `created_at`, `updated_at`) VALUES
(9, 5, 10, 'Admin', 1, '2020-06-01 02:02:06', '2020-06-01 02:02:06'),
(10, 4, 50, 'Admin', 2, '2020-06-01 02:40:18', '2020-06-01 02:40:18');

--
-- Triggers `lensa_mccr_keluar`
--
DELIMITER $$
CREATE TRIGGER `mccr_keluar` AFTER INSERT ON `lensa_mccr_keluar` FOR EACH ROW BEGIN
UPDATE lensa_mccr SET stock = stock - new.jumlah_keluar
WHERE id = new.lensa_mccr_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lensa_mccr_masuk`
--

CREATE TABLE `lensa_mccr_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lensa_mccr_id` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lensa_mccr_masuk`
--

INSERT INTO `lensa_mccr_masuk` (`id`, `lensa_mccr_id`, `jumlah_masuk`, `pj`, `created_at`, `updated_at`) VALUES
(19, 29, 100, 'Admin', '2020-05-31 22:27:26', '2020-05-31 22:27:26'),
(20, 5, 20, 'Admin', '2020-05-31 22:52:01', '2020-05-31 22:52:01'),
(21, 97, 98, 'Admin', '2020-06-01 02:00:53', '2020-06-01 02:00:53'),
(22, 4, 100, 'Admin', '2020-06-01 02:39:40', '2020-06-01 02:39:40');

--
-- Triggers `lensa_mccr_masuk`
--
DELIMITER $$
CREATE TRIGGER `mccr_masuk` AFTER INSERT ON `lensa_mccr_masuk` FOR EACH ROW BEGIN
UPDATE lensa_mccr SET stock = stock + new.jumlah_masuk
WHERE id = new.lensa_mccr_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_31_030337_create_lensa_block_masuk_table', 2),
(5, '2020_05_31_032531_create_lensa_block_keluar_table', 2),
(6, '2020_05_31_042808_create_lensa_flexi_keluar_table', 3),
(7, '2020_05_31_043452_create_lensa_flexi_masuk_table', 3),
(8, '2020_05_31_043908_create_lensa_grey_masuk_table', 3),
(9, '2020_05_31_043929_create_lensa_grey_keluar_table', 3),
(10, '2020_05_31_043951_create_lensa_kmccr_keluar_table', 3),
(11, '2020_05_31_044019_create_lensa_kmccr_masuk_table', 3),
(12, '2020_05_31_044043_create_lensa_leinz_masuk_table', 3),
(13, '2020_05_31_044058_create_lensa_leinz_keluar_table', 3),
(14, '2020_05_31_200348_create_idol_black_table', 4),
(15, '2020_05_31_200638_create_idol_grey_table', 4),
(16, '2020_05_31_200704_create_idol_brown_table', 4),
(17, '2020_05_31_200924_create_celebrity_brown_table', 4),
(18, '2020_05_31_200942_create_celebrity_black_table', 4),
(19, '2020_05_31_201015_create_celebrity_grey_table', 4),
(20, '2020_05_31_201052_create_idol_black_masuk_table', 4),
(21, '2020_05_31_201128_create_idol_black_keluar_table', 4),
(22, '2020_05_31_201142_create_idol_brown_keluar_table', 4),
(23, '2020_05_31_201155_create_idol_grey_keluar_table', 4),
(24, '2020_05_31_201211_create_idol_brown_masuk_table', 4),
(25, '2020_05_31_201226_create_idol_grey_masuk_table', 4),
(26, '2020_05_31_201252_create_celebrity_black_masuk_table', 4),
(27, '2020_05_31_201316_create_celebrity_brown_masuk_table', 4),
(28, '2020_05_31_201352_create_celebrity_grey_masuk_table', 4),
(29, '2020_05_31_201407_create_celebrity_grey_keluar_table', 4),
(30, '2020_05_31_201422_create_celebrity_black_keluar_table', 4),
(31, '2020_05_31_201436_create_celebrity_brown_keluar_table', 4),
(32, '2020_05_31_201539_create_solution_table', 4),
(33, '2020_05_31_201552_create_solution_masuk_table', 4),
(34, '2020_05_31_201605_create_solution_keluar_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE `solution` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ukuran` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solution`
--

INSERT INTO `solution` (`id`, `ukuran`, `stock`, `created_at`, `updated_at`) VALUES
(1, '120 mL', 0, NULL, NULL),
(2, '160 mL', 0, NULL, NULL),
(3, '360 mL', 0, NULL, NULL),
(4, '500 mL', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `solution_keluar`
--

CREATE TABLE `solution_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `solution_id` int(11) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solution_keluar`
--

INSERT INTO `solution_keluar` (`id`, `solution_id`, `jumlah_keluar`, `pj`, `tujuan_id`, `created_at`, `updated_at`) VALUES
(3, 4, 16, 'Admin', 1, '2020-06-01 01:46:49', '2020-06-01 01:46:49');

--
-- Triggers `solution_keluar`
--
DELIMITER $$
CREATE TRIGGER `solution_keluar` AFTER INSERT ON `solution_keluar` FOR EACH ROW BEGIN
UPDATE solution SET stock = stock - new.jumlah_keluar
WHERE id = new.solution_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `solution_masuk`
--

CREATE TABLE `solution_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `solution_id` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `pj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solution_masuk`
--

INSERT INTO `solution_masuk` (`id`, `solution_id`, `jumlah_masuk`, `pj`, `created_at`, `updated_at`) VALUES
(4, 4, 20, 'Admin', '2020-06-01 01:47:10', '2020-06-01 01:47:10');

--
-- Triggers `solution_masuk`
--
DELIMITER $$
CREATE TRIGGER `solution_masuk` AFTER INSERT ON `solution_masuk` FOR EACH ROW BEGIN
UPDATE solution SET stock = stock + new.jumlah_masuk
WHERE id = new.solution_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tiara`
--

CREATE TABLE `tiara` (
  `id` int(11) NOT NULL,
  `frame` varchar(50) NOT NULL,
  `lensa` varchar(50) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `stokgosok` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `sisa` int(11) NOT NULL,
  `pj` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiara`
--

INSERT INTO `tiara` (`id`, `frame`, `lensa`, `ukuran`, `stokgosok`, `harga`, `sisa`, `pj`, `updated_at`, `created_at`) VALUES
(1, 'Ronaldo', 'cekung', '-2.5', 'Stok', 300000, 5, 'budi', '2020-03-18 21:37:21', '2020-03-18 21:37:21'),
(2, 'messi', 'lensa', '-25', 'Stok', 100000, 3, 'Admin', '2020-05-30 23:05:38', '2020-05-30 23:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `id` int(11) NOT NULL,
  `toko` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`id`, `toko`, `created_at`, `updated_at`) VALUES
(1, 'tiara', NULL, NULL),
(2, 'emeral', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$tzm0oLIMLFw3RLLzAUFnZOfPRm/JZ0H9chbLdbmfM.KnTcrxmsAJe', NULL, '2020-05-30 08:50:39', '2020-05-30 08:50:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `celebrity_black`
--
ALTER TABLE `celebrity_black`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `celebrity_black_keluar`
--
ALTER TABLE `celebrity_black_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `celebrity_black_masuk`
--
ALTER TABLE `celebrity_black_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `celebrity_brown`
--
ALTER TABLE `celebrity_brown`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `celebrity_brown_keluar`
--
ALTER TABLE `celebrity_brown_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `celebrity_brown_masuk`
--
ALTER TABLE `celebrity_brown_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `celebrity_grey`
--
ALTER TABLE `celebrity_grey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `celebrity_grey_keluar`
--
ALTER TABLE `celebrity_grey_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `celebrity_grey_masuk`
--
ALTER TABLE `celebrity_grey_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emeral`
--
ALTER TABLE `emeral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idol_black`
--
ALTER TABLE `idol_black`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idol_black_keluar`
--
ALTER TABLE `idol_black_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idol_black_masuk`
--
ALTER TABLE `idol_black_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idol_brown`
--
ALTER TABLE `idol_brown`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idol_brown_keluar`
--
ALTER TABLE `idol_brown_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idol_brown_masuk`
--
ALTER TABLE `idol_brown_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idol_grey`
--
ALTER TABLE `idol_grey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idol_grey_keluar`
--
ALTER TABLE `idol_grey_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idol_grey_masuk`
--
ALTER TABLE `idol_grey_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensa_block`
--
ALTER TABLE `lensa_block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensa_block_keluar`
--
ALTER TABLE `lensa_block_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensa_block_masuk`
--
ALTER TABLE `lensa_block_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensa_flexi`
--
ALTER TABLE `lensa_flexi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensa_flexi_keluar`
--
ALTER TABLE `lensa_flexi_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensa_flexi_masuk`
--
ALTER TABLE `lensa_flexi_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensa_grey`
--
ALTER TABLE `lensa_grey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensa_grey_keluar`
--
ALTER TABLE `lensa_grey_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensa_grey_masuk`
--
ALTER TABLE `lensa_grey_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensa_kmccr`
--
ALTER TABLE `lensa_kmccr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensa_kmccr_keluar`
--
ALTER TABLE `lensa_kmccr_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensa_kmccr_masuk`
--
ALTER TABLE `lensa_kmccr_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensa_leinz`
--
ALTER TABLE `lensa_leinz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensa_leinz_keluar`
--
ALTER TABLE `lensa_leinz_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensa_leinz_masuk`
--
ALTER TABLE `lensa_leinz_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensa_mccr`
--
ALTER TABLE `lensa_mccr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensa_mccr_keluar`
--
ALTER TABLE `lensa_mccr_keluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lensa_id` (`lensa_mccr_id`),
  ADD KEY `tujuan` (`tujuan_id`);

--
-- Indexes for table `lensa_mccr_masuk`
--
ALTER TABLE `lensa_mccr_masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lensa_id` (`lensa_mccr_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `solution`
--
ALTER TABLE `solution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solution_keluar`
--
ALTER TABLE `solution_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solution_masuk`
--
ALTER TABLE `solution_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiara`
--
ALTER TABLE `tiara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `celebrity_black`
--
ALTER TABLE `celebrity_black`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `celebrity_black_keluar`
--
ALTER TABLE `celebrity_black_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `celebrity_black_masuk`
--
ALTER TABLE `celebrity_black_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `celebrity_brown`
--
ALTER TABLE `celebrity_brown`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `celebrity_brown_keluar`
--
ALTER TABLE `celebrity_brown_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `celebrity_brown_masuk`
--
ALTER TABLE `celebrity_brown_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `celebrity_grey`
--
ALTER TABLE `celebrity_grey`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `celebrity_grey_keluar`
--
ALTER TABLE `celebrity_grey_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `celebrity_grey_masuk`
--
ALTER TABLE `celebrity_grey_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emeral`
--
ALTER TABLE `emeral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `idol_black`
--
ALTER TABLE `idol_black`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `idol_black_keluar`
--
ALTER TABLE `idol_black_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `idol_black_masuk`
--
ALTER TABLE `idol_black_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `idol_brown`
--
ALTER TABLE `idol_brown`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `idol_brown_keluar`
--
ALTER TABLE `idol_brown_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `idol_brown_masuk`
--
ALTER TABLE `idol_brown_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `idol_grey`
--
ALTER TABLE `idol_grey`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `idol_grey_keluar`
--
ALTER TABLE `idol_grey_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `idol_grey_masuk`
--
ALTER TABLE `idol_grey_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `lensa_block`
--
ALTER TABLE `lensa_block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `lensa_block_keluar`
--
ALTER TABLE `lensa_block_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lensa_block_masuk`
--
ALTER TABLE `lensa_block_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lensa_flexi`
--
ALTER TABLE `lensa_flexi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `lensa_flexi_keluar`
--
ALTER TABLE `lensa_flexi_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lensa_flexi_masuk`
--
ALTER TABLE `lensa_flexi_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lensa_grey`
--
ALTER TABLE `lensa_grey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lensa_grey_keluar`
--
ALTER TABLE `lensa_grey_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lensa_grey_masuk`
--
ALTER TABLE `lensa_grey_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lensa_kmccr`
--
ALTER TABLE `lensa_kmccr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `lensa_kmccr_keluar`
--
ALTER TABLE `lensa_kmccr_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lensa_kmccr_masuk`
--
ALTER TABLE `lensa_kmccr_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lensa_leinz`
--
ALTER TABLE `lensa_leinz`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `lensa_leinz_keluar`
--
ALTER TABLE `lensa_leinz_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lensa_leinz_masuk`
--
ALTER TABLE `lensa_leinz_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lensa_mccr`
--
ALTER TABLE `lensa_mccr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `lensa_mccr_keluar`
--
ALTER TABLE `lensa_mccr_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lensa_mccr_masuk`
--
ALTER TABLE `lensa_mccr_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `solution`
--
ALTER TABLE `solution`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `solution_keluar`
--
ALTER TABLE `solution_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `solution_masuk`
--
ALTER TABLE `solution_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tiara`
--
ALTER TABLE `tiara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
