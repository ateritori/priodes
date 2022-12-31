-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 04:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `priodes`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(6) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `padukuhan` int(3) NOT NULL,
  `rt` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `kegiatan`, `padukuhan`, `rt`) VALUES
(1, 'Pembanguanan Jalan Usaha Tani (JUT)', 6, 7),
(2, 'Momong Bareng', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(6) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `deskripsi_kriteria` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `deskripsi_kriteria`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pengentasan Kemiskinan Ekstrem', 'Merupakan program pengentasan kemiskinan eksrem di desa Wonosari', '2022-12-27 18:58:11', '2022-12-28 15:47:43', NULL),
(2, 'Peningkatan kualitas dan akses terhadap layanan dasar', 'Merupakan program untuk peningkatan kualitas dan akses layanan pendidikan, kesehatan dan infrastruktur', '2022-12-27 19:50:50', '2022-12-27 19:59:35', NULL),
(3, 'Merupakan Kewenangan Desa', 'Program yang diusulkan merupakan kewenangan lokal desa', '2022-12-27 20:26:46', '2022-12-27 20:26:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `padukuhan`
--

CREATE TABLE `padukuhan` (
  `id_padukuhan` int(3) NOT NULL,
  `padukuhan` varchar(64) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_art` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `padukuhan`
--

INSERT INTO `padukuhan` (`id_padukuhan`, `padukuhan`, `deskripsi`, `created_art`, `updated_at`, `deleted_at`) VALUES
(1, 'Madusari', 'Padukuhan Madusari', NULL, NULL, NULL),
(2, 'Ringinsari', 'Padukuhan Ringinsari', NULL, NULL, NULL),
(3, 'Purbosari', 'Padukuhan Purbosari', NULL, NULL, NULL),
(4, 'Gadungsari', 'Padukuhan Gadungsari', NULL, NULL, NULL),
(5, 'Pandansari', 'Padukuhan Pandansari', NULL, NULL, NULL),
(6, 'Tawarsari', 'Padukuhan Tawarsari', NULL, NULL, NULL),
(7, 'Jeruksari', 'Padukuhan Jeruksari', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rt`
--

CREATE TABLE `rt` (
  `id_rt` int(3) NOT NULL,
  `rt` varchar(4) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rt`
--

INSERT INTO `rt` (`id_rt`, `rt`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '001', NULL, NULL, NULL),
(2, '002', NULL, NULL, NULL),
(3, '003', NULL, NULL, NULL),
(4, '004', NULL, NULL, NULL),
(5, '005', NULL, NULL, NULL),
(6, '006', NULL, NULL, NULL),
(7, '007', NULL, NULL, NULL),
(8, '008', NULL, NULL, NULL),
(9, '009', NULL, NULL, NULL),
(10, '010', NULL, NULL, NULL),
(11, '011', NULL, NULL, NULL),
(12, '012', NULL, NULL, NULL),
(13, '013', NULL, NULL, NULL),
(14, '014', NULL, NULL, NULL),
(15, '015', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id_sub_kriteria` int(3) NOT NULL,
  `id_kriteria` int(6) NOT NULL,
  `nama_sub_kriteria` varchar(255) NOT NULL,
  `bobot_sub_kriteria` int(3) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id_sub_kriteria`, `id_kriteria`, `nama_sub_kriteria`, `bobot_sub_kriteria`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Sangat Setuju', 5, '2022-12-27 21:12:26', '2022-12-27 21:12:26', NULL),
(2, 1, 'Setuju', 4, '2022-12-27 21:14:13', '2022-12-27 21:14:13', NULL),
(3, 1, 'Netral', 3, '2022-12-27 21:22:18', '2022-12-27 21:22:18', NULL),
(4, 1, 'Tidak Setuju', 4, '2022-12-27 21:24:34', '2022-12-27 21:24:34', NULL),
(5, 1, 'Sangat Tidak Setuju', 1, '2022-12-27 21:24:38', '2022-12-27 21:24:38', NULL),
(6, 3, 'Sangat Setuju', 5, '2022-12-27 22:10:19', '2022-12-27 22:10:19', NULL),
(7, 5, 'Sangat Tidak Setuju', 1, '2022-12-28 15:47:22', '2022-12-28 15:47:22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `padukuhan`
--
ALTER TABLE `padukuhan`
  ADD PRIMARY KEY (`id_padukuhan`);

--
-- Indexes for table `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`id_rt`);

--
-- Indexes for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id_sub_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `padukuhan`
--
ALTER TABLE `padukuhan`
  MODIFY `id_padukuhan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rt`
--
ALTER TABLE `rt`
  MODIFY `id_rt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id_sub_kriteria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
