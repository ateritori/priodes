-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 05:36 PM
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
  `masalah` varchar(255) NOT NULL,
  `potensi` varchar(255) NOT NULL,
  `alternatif` varchar(255) NOT NULL,
  `padukuhan` int(3) NOT NULL,
  `rt` int(2) NOT NULL,
  `paket` int(3) NOT NULL,
  `panjang` int(6) NOT NULL,
  `lebar` int(11) NOT NULL,
  `tinggi` int(6) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `masalah`, `potensi`, `alternatif`, `padukuhan`, `rt`, `paket`, `panjang`, `lebar`, `tinggi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Jalan Madusari Rusak Berat', 'Tenaga', 'Rehabilitasi Jalan Madusari', 1, 9, 1, 100, 3, 0, '2023-01-01 21:11:47', '2023-01-01 21:11:47', NULL),
(2, 'Pengukuran Bayi Tidak Valid', 'KAder', 'Pengadaan Alat Ukur', 2, 1, 1, 0, 0, 0, '2023-01-01 21:12:47', '2023-01-01 21:12:47', NULL),
(3, 'Tidak memiliki akses Jalan', 'Tenaga Kerja', 'Pembangunan Jalan Usaha Tani', 6, 8, 1, 100, 3, 0, '2023-01-02 21:52:48', '2023-01-02 21:52:48', NULL),
(4, ' Rumah Bapak Suto Rusak', 'Rumah Bapak Suto Rusak', 'Rehabilitasi Rumah Tidak Layak Huni', 5, 9, 1, 0, 0, 0, '2023-01-02 22:03:37', '2023-01-02 23:12:53', NULL),
(5, 'Honor Kader Kurang, Pekerjaan Banyak', 'SDM Kader Bagus', 'Penambahan Honor Hader', 8, 16, 144, 0, 0, 0, '2023-01-02 22:04:32', '2023-01-02 23:03:18', NULL),
(6, 'Gedung Balai Padukuhan Rusak Ringan', 'Tenaga', 'Rehabilitasi Gedung Balai Padukuhan Gadungsari', 4, 6, 1, 0, 0, 0, '2023-01-02 22:05:42', '2023-01-02 23:04:34', NULL),
(7, 'Printer Pelayanan Rusak', 'Tidak Punya', 'Pengadaan Printer', 8, 16, 5, 0, 0, 0, '2023-01-02 22:06:16', '2023-01-02 23:07:51', NULL),
(8, 'Kelompok Gejog Lesung Tidak Aktif', 'Personil & Alat', 'Fasilitasi Latihan Gejog :Lesung', 7, 4, 4, 0, 0, 0, '2023-01-02 22:06:46', '2023-01-02 23:08:43', NULL);

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
(1, 'Pengentasan Kemiskinan', 'Merupakan Program Pengentasan Kemiskinan Ekstrem', '2023-01-02 19:55:55', '2023-01-02 20:07:49', NULL),
(2, 'Peningkatan kualitas dan akses terhadap layanan dasar', 'Peningkatan kualitas dan akses terhadap layanan dasar', '2023-01-02 23:09:04', '2023-01-02 23:09:04', NULL),
(3, 'Pengembangan ekonomi produktif', 'Pengembangan ekonomi produktif', '2023-01-02 23:09:13', '2023-01-02 23:09:13', NULL),
(4, 'Merupakan Kewenangan Desa', 'Merupakan Kewenangan Desa', '2023-01-02 23:09:21', '2023-01-02 23:09:21', NULL),
(5, 'Kesesuaian Dengan program supra desa', 'Kesesuaian Dengan program supra desa', '2023-01-02 23:09:31', '2023-01-02 23:09:31', NULL);

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
(7, 'Jeruksari', 'Padukuhan Jeruksari', NULL, NULL, NULL),
(8, 'Wonosari', 'Kalurahan Wonosari', NULL, NULL, NULL);

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
(15, '015', NULL, NULL, NULL),
(16, 'Desa', NULL, NULL, NULL);

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
(1, 1, 'Sangat Setuju', 5, '2023-01-02 20:25:21', '2023-01-02 20:30:24', NULL),
(2, 1, 'Setuju', 4, '2023-01-02 20:26:02', '2023-01-02 20:32:02', NULL),
(3, 1, 'Netral', 3, '2023-01-02 23:09:45', '2023-01-02 23:09:45', NULL),
(4, 1, 'Tidak Setuju', 2, '2023-01-02 23:09:51', '2023-01-02 23:09:51', NULL),
(5, 1, 'Sangat Tidak Setuju', 1, '2023-01-02 23:09:58', '2023-01-02 23:09:58', NULL),
(6, 2, 'Sangat Setuju', 5, '2023-01-02 23:10:09', '2023-01-02 23:10:09', NULL),
(7, 2, 'Setuju', 4, '2023-01-02 23:10:14', '2023-01-02 23:10:14', NULL),
(8, 2, 'Netral', 3, '2023-01-02 23:10:21', '2023-01-02 23:10:21', NULL),
(9, 2, 'Tidak Setuju', 2, '2023-01-02 23:10:25', '2023-01-02 23:10:25', NULL),
(10, 2, 'Sangat Tidak Setuju', 1, '2023-01-02 23:10:28', '2023-01-02 23:10:28', NULL),
(11, 3, 'Sangat Setuju', 5, '2023-01-02 23:10:36', '2023-01-02 23:10:36', NULL),
(12, 3, 'Setuju', 4, '2023-01-02 23:10:40', '2023-01-02 23:10:40', NULL),
(13, 3, 'Netral', 3, '2023-01-02 23:10:45', '2023-01-02 23:10:45', NULL),
(14, 3, 'Tidak Setuju', 2, '2023-01-02 23:10:49', '2023-01-02 23:10:49', NULL),
(15, 3, 'Sangat Tidak Setuju', 1, '2023-01-02 23:10:53', '2023-01-02 23:10:53', NULL),
(16, 4, 'Sangat Setuju', 5, '2023-01-02 23:11:09', '2023-01-02 23:11:09', NULL),
(17, 4, 'Setuju', 4, '2023-01-02 23:11:14', '2023-01-02 23:11:14', NULL),
(18, 4, 'Netral', 3, '2023-01-02 23:11:18', '2023-01-02 23:11:18', NULL),
(19, 4, 'Tidak Setuju', 2, '2023-01-02 23:11:23', '2023-01-02 23:11:23', NULL),
(20, 4, 'Sangat Tidak Setuju', 1, '2023-01-02 23:11:26', '2023-01-02 23:11:26', NULL),
(21, 5, 'Sangat Setuju', 5, '2023-01-02 23:11:36', '2023-01-02 23:11:47', NULL),
(22, 5, 'Setuju', 4, '2023-01-02 23:11:53', '2023-01-02 23:11:53', NULL),
(23, 5, 'Netral', 3, '2023-01-02 23:11:57', '2023-01-02 23:11:57', NULL),
(24, 5, 'Tidak Setuju', 2, '2023-01-02 23:12:00', '2023-01-02 23:12:00', NULL),
(25, 5, 'Sangat Tidak Setuju', 1, '2023-01-02 23:12:04', '2023-01-02 23:12:04', NULL);

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
  MODIFY `id_alternatif` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `padukuhan`
--
ALTER TABLE `padukuhan`
  MODIFY `id_padukuhan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rt`
--
ALTER TABLE `rt`
  MODIFY `id_rt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id_sub_kriteria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
