-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 07:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `masalah`, `potensi`, `alternatif`, `padukuhan`, `rt`, `paket`, `panjang`, `lebar`, `tinggi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Jalan Madusari Rusak Sedang', 'Swadaya Pasir, Tenaga', 'Rehabilitasi Aspal Jalan Madusari', 1, 9, 1, 200, 3, 0, '2023-01-16 13:15:23', '2023-01-16 13:15:23', NULL),
(2, 'UMKM belum memiliki Ijin', 'UMKM sudah berjalan', 'Advokasi Pengurusan Ijin UMKM', 8, 16, 1, 0, 0, 0, '2023-01-16 13:16:17', '2023-01-16 13:16:17', NULL),
(3, 'Selokan Gadungsari Mampet', 'Swadaya Tenaga Kerja', 'Rehabilitasi Selokan Gadungsari', 4, 2, 1, 100, 0, 0, '2023-01-16 13:17:01', '2023-01-16 13:17:01', NULL),
(4, 'Angka Prevelensi Stunting Tinggi', 'Kader yang hebat', 'Pengadaan Alat Ukur Posyandu', 8, 16, 7, 0, 0, 0, '2023-01-16 13:17:37', '2023-01-16 13:17:37', NULL),
(5, 'Ada warga Tawarsari yang belum memiliki WC', 'Swadaya tenaga kerja', 'Bantuan Stimulan Jamban Sehat', 6, 5, 5, 0, 0, 0, '2023-01-16 13:18:16', '2023-01-16 13:18:16', NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `deskripsi_kriteria`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Merupakan Program Pengentasan Kemiskinan', 'Program-program kegiatan untuk pengentasan kemiskinan', '2023-01-16 13:02:41', '2023-01-16 13:02:41', NULL),
(2, 'Merupakan Program Untuk Peningkatan Kualitas dan Akses Terhadap Layanan Dasar', 'Program-program untuk peningkatan kualitas dan akses kepada layanan pendidikan dan layanan kesehatan', '2023-01-16 13:06:26', '2023-01-16 13:06:26', NULL),
(3, 'Merupakan Program Pengembangan Usaha Ekonomi Produktif', 'Merupakan Program-Program untuk pengembangan UMKM, IRT dan UEP', '2023-01-16 13:07:52', '2023-01-16 13:07:52', NULL),
(4, 'Merupakan Kewenganan Lokal Kalurahan', 'Program-program dilaksanakan merupakan kewenangan lokal Kalurahan', '2023-01-16 13:08:28', '2023-01-16 13:08:28', NULL),
(5, 'Merupakan Program Yang Mendukung Program Prioritas Nasional dan Daerah', 'Merupakan program yang selaras dengan program prioritas supra Kalurahan', '2023-01-16 13:09:32', '2023-01-16 13:09:32', NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(8, 'Kalurahan', 'Kalurahan Wonosari', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(6) NOT NULL,
  `id_alternatif` int(6) NOT NULL,
  `id_kriteria` int(6) NOT NULL,
  `id_sub_kriteria` int(6) NOT NULL,
  `nilai` decimal(6,0) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_alternatif`, `id_kriteria`, `id_sub_kriteria`, `nilai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 4, '25', '2023-01-16 13:19:46', '2023-01-16 13:19:46', NULL),
(2, 1, 2, 6, '100', '2023-01-16 13:19:46', '2023-01-16 13:19:46', NULL),
(3, 1, 3, 13, '50', '2023-01-16 13:19:46', '2023-01-16 13:19:46', NULL),
(4, 1, 4, 17, '75', '2023-01-16 13:19:46', '2023-01-16 13:19:46', NULL),
(5, 1, 5, 23, '50', '2023-01-16 13:19:46', '2023-01-16 13:19:46', NULL),
(6, 2, 1, 2, '75', '2023-01-16 13:20:03', '2023-01-16 13:20:03', NULL),
(7, 2, 2, 7, '75', '2023-01-16 13:20:03', '2023-01-16 13:20:03', NULL),
(8, 2, 3, 11, '100', '2023-01-16 13:20:03', '2023-01-16 13:20:03', NULL),
(9, 2, 4, 17, '75', '2023-01-16 13:20:03', '2023-01-16 13:20:03', NULL),
(10, 2, 5, 23, '50', '2023-01-16 13:20:03', '2023-01-16 13:20:03', NULL),
(11, 3, 1, 4, '25', '2023-01-16 13:20:20', '2023-01-16 13:20:20', NULL),
(12, 3, 2, 6, '100', '2023-01-16 13:20:20', '2023-01-16 13:20:20', NULL),
(13, 3, 3, 14, '25', '2023-01-16 13:20:20', '2023-01-16 13:20:20', NULL),
(14, 3, 4, 17, '75', '2023-01-16 13:20:20', '2023-01-16 13:20:20', NULL),
(15, 3, 5, 23, '50', '2023-01-16 13:20:20', '2023-01-16 13:20:20', NULL),
(16, 4, 1, 4, '25', '2023-01-16 13:20:40', '2023-01-16 13:20:40', NULL),
(17, 4, 2, 7, '75', '2023-01-16 13:20:40', '2023-01-16 13:20:40', NULL),
(18, 4, 3, 14, '25', '2023-01-16 13:20:40', '2023-01-16 13:20:40', NULL),
(19, 4, 4, 17, '75', '2023-01-16 13:20:40', '2023-01-16 13:20:40', NULL),
(20, 4, 5, 21, '100', '2023-01-16 13:20:40', '2023-01-16 13:20:40', NULL),
(21, 5, 1, 1, '100', '2023-01-16 13:20:59', '2023-01-16 13:20:59', NULL),
(22, 5, 2, 6, '100', '2023-01-16 13:20:59', '2023-01-16 13:20:59', NULL),
(23, 5, 3, 14, '25', '2023-01-16 13:20:59', '2023-01-16 13:20:59', NULL),
(24, 5, 4, 17, '75', '2023-01-16 13:20:59', '2023-01-16 13:20:59', NULL),
(25, 5, 5, 23, '50', '2023-01-16 13:20:59', '2023-01-16 13:20:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rt`
--

CREATE TABLE `rt` (
  `id_rt` int(3) NOT NULL,
  `rt` varchar(16) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(16, 'Wonosari', NULL, NULL, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id_sub_kriteria`, `id_kriteria`, `nama_sub_kriteria`, `bobot_sub_kriteria`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Sangat Setuju', 100, '2023-01-16 13:10:53', '2023-01-16 13:10:53', NULL),
(2, 1, 'Setuju', 75, '2023-01-16 13:11:09', '2023-01-16 13:11:09', NULL),
(3, 1, 'Bisa Jadi', 50, '2023-01-16 13:11:27', '2023-01-16 13:11:27', NULL),
(4, 1, 'Tidak Setuju', 25, '2023-01-16 13:11:36', '2023-01-16 13:11:36', NULL),
(5, 1, 'Sangat Tidak Setuju', 0, '2023-01-16 13:11:43', '2023-01-16 13:11:43', NULL),
(6, 2, 'Sangat Setuju', 100, '2023-01-16 13:12:07', '2023-01-16 13:12:07', NULL),
(7, 2, 'Setuju', 75, '2023-01-16 13:12:16', '2023-01-16 13:12:16', NULL),
(8, 2, 'Bisa Jadi', 50, '2023-01-16 13:12:26', '2023-01-16 13:12:26', NULL),
(9, 2, 'Tidak Setuju', 25, '2023-01-16 13:12:34', '2023-01-16 13:12:34', NULL),
(10, 2, 'Sangat Tidak Setuju', 0, '2023-01-16 13:12:39', '2023-01-16 13:12:39', NULL),
(11, 3, 'Sangat Setuju', 100, '2023-01-16 13:13:02', '2023-01-16 13:13:02', NULL),
(12, 3, 'Setuju', 75, '2023-01-16 13:13:07', '2023-01-16 13:13:07', NULL),
(13, 3, 'Bisa Jadi', 50, '2023-01-16 13:13:14', '2023-01-16 13:13:14', NULL),
(14, 3, 'Tidak Setuju', 25, '2023-01-16 13:13:20', '2023-01-16 13:13:20', NULL),
(15, 3, 'Sangat Tidak Setuju', 0, '2023-01-16 13:13:24', '2023-01-16 13:13:24', NULL),
(16, 4, 'Sangat Setuju', 100, '2023-01-16 13:13:41', '2023-01-16 13:13:41', NULL),
(17, 4, 'Setuju', 75, '2023-01-16 13:13:46', '2023-01-16 13:13:46', NULL),
(18, 4, 'Bisa Jadi', 50, '2023-01-16 13:13:57', '2023-01-16 13:13:57', NULL),
(19, 4, 'Tidak Setuju', 25, '2023-01-16 13:14:03', '2023-01-16 13:14:03', NULL),
(20, 4, 'Sangat Tidak Setuju', 0, '2023-01-16 13:14:07', '2023-01-16 13:14:07', NULL),
(21, 5, 'Sangat Setuju', 100, '2023-01-16 13:14:18', '2023-01-16 13:14:18', NULL),
(22, 5, 'Setuju', 75, '2023-01-16 13:14:23', '2023-01-16 13:14:23', NULL),
(23, 5, 'Bisa Jadi', 50, '2023-01-16 13:14:27', '2023-01-16 13:14:27', NULL),
(24, 5, 'Tidak Setuju', 25, '2023-01-16 13:14:32', '2023-01-16 13:14:32', NULL),
(25, 5, 'Sangat Tidak Setuju', 0, '2023-01-16 13:14:36', '2023-01-16 13:14:36', NULL);

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
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

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
  MODIFY `id_alternatif` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
