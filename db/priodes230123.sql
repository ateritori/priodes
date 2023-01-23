-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 03:56 PM
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
(1, 'Jalan Madusari Rusak Sedang', 'Swadaya Pasir, Tenaga', 'Rehabilitasi Aspal Jalan Madusari', 1, 9, 1, 200, 3, 0, '2023-01-16 13:15:23', '2023-01-16 13:15:23', NULL),
(2, 'UMKM belum memiliki Ijin', 'UMKM sudah berjalan', 'Advokasi Pengurusan Ijin UMKM', 8, 16, 1, 0, 0, 0, '2023-01-16 13:16:17', '2023-01-16 13:16:17', NULL),
(3, 'Selokan Gadungsari Mampet', 'Swadaya Tenaga Kerja', 'Rehabilitasi Selokan Gadungsari', 4, 2, 1, 100, 0, 0, '2023-01-16 13:17:01', '2023-01-16 13:17:01', NULL),
(4, 'Angka Prevelensi Stunting Tinggi', 'Kader yang hebat', 'Pengadaan Alat Ukur Posyandu', 8, 16, 7, 0, 0, 0, '2023-01-16 13:17:37', '2023-01-16 13:17:37', NULL),
(5, 'Ada warga Tawarsari yang belum memiliki WC', 'Swadaya tenaga kerja', 'Bantuan Stimulan Jamban Sehat', 6, 5, 5, 0, 0, 0, '2023-01-16 13:18:16', '2023-01-16 13:18:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regular User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'ateritori', NULL, '2023-01-23 19:41:04', 0),
(2, '::1', 'ateritori@gmail.com', 1, '2023-01-23 19:43:20', 1),
(3, '::1', 'ateritori@gmail.com', 1, '2023-01-23 19:43:41', 1),
(4, '::1', 'ateritori@gmail.com', 1, '2023-01-23 19:44:45', 1),
(5, '::1', 'ateritori@gmail.com', 1, '2023-01-23 19:44:56', 1),
(6, '::1', 'ateritori@gmail.com', 1, '2023-01-23 19:45:07', 1),
(7, '::1', 'ateritori@gmail.com', 1, '2023-01-23 19:45:22', 1),
(8, '::1', 'ateritori@gmail.com', 1, '2023-01-23 19:46:33', 1),
(9, '::1', 'ateritori@gmail.com', 1, '2023-01-23 19:47:51', 1),
(10, '::1', 'ateritori@gmail.com', 1, '2023-01-23 19:51:48', 1),
(11, '::1', 'ateritori@gmail.com', 1, '2023-01-23 20:01:03', 1),
(12, '::1', 'ateritori@gmail.com', 1, '2023-01-23 20:01:16', 1),
(13, '::1', 'intan@gmail.com', 2, '2023-01-23 20:03:14', 1),
(14, '::1', 'intan@gmail.com', 2, '2023-01-23 20:05:35', 1),
(15, '::1', 'ateritori@gmail.com', 1, '2023-01-23 20:07:14', 1),
(16, '::1', 'ateritori@gmail.com', 1, '2023-01-23 20:07:27', 1),
(17, '::1', 'intan@gmail.com', 2, '2023-01-23 20:07:32', 1),
(18, '::1', 'ateritori@gmail.com', 1, '2023-01-23 20:09:57', 1),
(19, '::1', 'intan@gmail.com', 2, '2023-01-23 20:10:48', 1),
(20, '::1', 'ateritori', NULL, '2023-01-23 20:11:29', 0),
(21, '::1', 'ateritori@gmail.com', 1, '2023-01-23 20:11:33', 1),
(22, '::1', 'ateritori@gmail.com', 1, '2023-01-23 20:12:53', 1),
(23, '::1', 'ateritori@gmail.com', 1, '2023-01-23 20:13:50', 1),
(24, '::1', 'ateritori@gmail.com', 1, '2023-01-23 20:14:05', 1),
(25, '::1', 'ateritori@gmail.com', 1, '2023-01-23 20:14:57', 1),
(26, '::1', 'intan@gmail.com', 2, '2023-01-23 20:18:52', 1),
(27, '::1', 'ateritori@gmail.com', 1, '2023-01-23 20:19:26', 1),
(28, '::1', 'intan@gmail.com', 2, '2023-01-23 20:19:51', 1),
(29, '::1', 'ateritori@gmail.com', 1, '2023-01-23 20:28:56', 1),
(30, '::1', 'intan@gmail.com', 2, '2023-01-23 20:34:53', 1),
(31, '::1', 'ateritori', NULL, '2023-01-23 20:35:23', 0),
(32, '::1', 'ateritori@gmail.com', 1, '2023-01-23 20:35:26', 1),
(33, '::1', 'intan@gmail.com', 2, '2023-01-23 20:37:46', 1),
(34, '::1', 'ateritori@gmail.com', 1, '2023-01-23 20:43:55', 1),
(35, '::1', 'ateritori@gmail.com', 1, '2023-01-23 21:50:44', 1),
(36, '::1', 'intan@gmail.com', 2, '2023-01-23 21:50:52', 1),
(37, '::1', 'intan@gmail.com', 2, '2023-01-23 21:50:52', 1),
(38, '::1', 'ateritori@gmail.com', 1, '2023-01-23 21:51:58', 1),
(39, '::1', 'intan@gmail.com', 2, '2023-01-23 21:52:09', 1),
(40, '::1', 'ateritori@gmail.com', 1, '2023-01-23 21:52:49', 1),
(41, '::1', 'ateritori@gmail.com', 1, '2023-01-23 21:53:04', 1),
(42, '::1', 'ateritori@gmail.com', 1, '2023-01-23 21:53:24', 1),
(43, '::1', 'ateritori@gmail.com', 1, '2023-01-23 21:55:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
(1, 'Merupakan Program Pengentasan Kemiskinan', 'Program-program kegiatan untuk pengentasan kemiskinan', '2023-01-16 13:02:41', '2023-01-16 13:02:41', NULL),
(2, 'Merupakan Program Untuk Peningkatan Kualitas dan Akses Terhadap Layanan Dasar', 'Program-program untuk peningkatan kualitas dan akses kepada layanan pendidikan dan layanan kesehatan', '2023-01-16 13:06:26', '2023-01-16 13:06:26', NULL),
(3, 'Merupakan Program Pengembangan Usaha Ekonomi Produktif', 'Merupakan Program-Program untuk pengembangan UMKM, IRT dan UEP', '2023-01-16 13:07:52', '2023-01-16 13:07:52', NULL),
(4, 'Merupakan Kewenganan Lokal Kalurahan', 'Program-program dilaksanakan merupakan kewenangan lokal Kalurahan', '2023-01-16 13:08:28', '2023-01-16 13:08:28', NULL),
(5, 'Merupakan Program Yang Mendukung Program Prioritas Nasional dan Daerah', 'Merupakan program yang selaras dengan program prioritas supra Kalurahan', '2023-01-16 13:09:32', '2023-01-16 13:09:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1674476566, 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_alternatif`, `id_kriteria`, `id_sub_kriteria`, `nilai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, '100', '2023-01-16 13:19:46', '2023-01-16 13:19:46', NULL),
(2, 1, 2, 7, '75', '2023-01-16 13:19:46', '2023-01-16 13:19:46', NULL),
(3, 1, 3, 13, '50', '2023-01-16 13:19:46', '2023-01-16 13:19:46', NULL),
(4, 1, 4, 19, '25', '2023-01-16 13:19:46', '2023-01-16 13:19:46', NULL),
(5, 1, 5, 25, '0', '2023-01-16 13:19:46', '2023-01-16 13:19:46', NULL),
(6, 2, 1, 2, '75', '2023-01-16 13:20:03', '2023-01-16 13:20:03', NULL),
(7, 2, 2, 7, '75', '2023-01-16 13:20:03', '2023-01-16 13:20:03', NULL),
(8, 2, 3, 12, '75', '2023-01-16 13:20:03', '2023-01-16 13:20:03', NULL),
(9, 2, 4, 17, '75', '2023-01-16 13:20:03', '2023-01-16 13:20:03', NULL),
(10, 2, 5, 22, '75', '2023-01-16 13:20:03', '2023-01-16 13:20:03', NULL),
(11, 3, 1, 3, '50', '2023-01-16 13:20:20', '2023-01-16 13:20:20', NULL),
(12, 3, 2, 8, '50', '2023-01-16 13:20:20', '2023-01-16 13:20:20', NULL),
(13, 3, 3, 13, '50', '2023-01-16 13:20:20', '2023-01-16 13:20:20', NULL),
(14, 3, 4, 18, '50', '2023-01-16 13:20:20', '2023-01-16 13:20:20', NULL),
(15, 3, 5, 23, '50', '2023-01-16 13:20:20', '2023-01-16 13:20:20', NULL),
(16, 4, 1, 4, '25', '2023-01-16 13:20:40', '2023-01-16 13:20:40', NULL),
(17, 4, 2, 9, '25', '2023-01-16 13:20:40', '2023-01-16 13:20:40', NULL),
(18, 4, 3, 14, '25', '2023-01-16 13:20:40', '2023-01-16 13:20:40', NULL),
(19, 4, 4, 19, '25', '2023-01-16 13:20:40', '2023-01-16 13:20:40', NULL),
(20, 4, 5, 24, '25', '2023-01-16 13:20:40', '2023-01-16 13:20:40', NULL),
(21, 5, 1, 5, '0', '2023-01-16 13:20:59', '2023-01-16 13:20:59', NULL),
(22, 5, 2, 9, '25', '2023-01-16 13:20:59', '2023-01-16 13:20:59', NULL),
(23, 5, 3, 13, '50', '2023-01-16 13:20:59', '2023-01-16 13:20:59', NULL),
(24, 5, 4, 17, '75', '2023-01-16 13:20:59', '2023-01-16 13:20:59', NULL),
(25, 5, 5, 21, '100', '2023-01-16 13:20:59', '2023-01-16 13:20:59', NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `nama` varchar(64) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `nama`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ateritori@gmail.com', 'ateritori', 'Ubaidilah AT', '$2y$10$gZv8iJrVY67g.qiLKyzLl.fg67uoXWmnqlVkfgCYsj2.Q3Dunuu1y', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-01-23 19:43:14', '2023-01-23 19:43:14', NULL),
(2, 'intan@gmail.com', 'intan', 'Intan Normawati', '$2y$10$oDsitFeX6DwN7hjPApDcZ.WTYymtmp3/tzFYc8eRMjJwol6mZe2ve', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-01-23 20:03:09', '2023-01-23 20:03:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
