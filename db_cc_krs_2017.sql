-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 08:30 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cc_krs_2017`
--
CREATE DATABASE IF NOT EXISTS `db_cc_krs_2017` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_cc_krs_2017`;

-- --------------------------------------------------------

--
-- Table structure for table `data_krs`
--

CREATE TABLE `data_krs` (
  `TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `NAMA_LENGKAP` varchar(50) NOT NULL,
  `NIM` varchar(15) NOT NULL,
  `MATA_KULIAH_1` varchar(100) DEFAULT NULL,
  `MATA_KULIAH_2` varchar(100) DEFAULT NULL,
  `MATA_KULIAH_3` varchar(100) DEFAULT NULL,
  `MATA_KULIAH_4` varchar(100) DEFAULT NULL,
  `MATA_KULIAH_5` varchar(100) DEFAULT NULL,
  `MATA_KULIAH_6` varchar(100) DEFAULT NULL,
  `MATA_KULIAH_7` varchar(100) DEFAULT NULL,
  `KELUHAN` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_matkul`
--

CREATE TABLE `db_matkul` (
  `NO` int(11) NOT NULL,
  `KODE_MATKUL` varchar(15) NOT NULL,
  `NAMA_MATKUL` varchar(500) NOT NULL,
  `SKS` int(11) NOT NULL,
  `gabung` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_matkul`
--

INSERT INTO `db_matkul` (`NO`, `KODE_MATKUL`, `NAMA_MATKUL`, `SKS`, `gabung`) VALUES
(1, 'MPK-4001', 'Pendidikan Agama Islam', 2, 'MPK-4001 - Pendidikan Agama Islam'),
(2, 'MPK-4002', 'Pendidikan Agama Katolik', 2, 'MPK-4002 - Pendidikan Agama Katolik'),
(3, 'MPK-4003', 'Pendidikan Agama Protestan', 2, 'MPK-4003 - Pendidikan Agama Protestan'),
(4, 'MPK-4004', 'Pendidikan Agama Hindu', 2, 'MPK-4004 - Pendidikan Agama Hindu'),
(5, 'MPK-4005', 'Pendidikan Agama Budha ', 2, 'MPK-4005 - Pendidikan Agama Budha '),
(6, 'MPK-4008', 'Bahasa Indonesia', 2, 'MPK-4008 - Bahasa Indonesia'),
(7, 'COM60010', 'Pemrograman Dasar', 5, 'COM60010 - Pemrograman Dasar'),
(8, 'COM60013', 'Pengantar Ilmu Komputer', 3, 'COM60013 - Pengantar Ilmu Komputer'),
(9, 'COM50012', 'Matematika Komputasi', 4, 'COM50012 - Matematika Komputasi'),
(10, 'CIF60113', 'Sistem Digital', 3, 'CIF60113 - Sistem Digital'),
(11, 'UBU-4008', 'Bahasa Inggris', 2, 'UBU-4008 - Bahasa Inggris'),
(12, 'COM60011', 'Arsitektur & Organisasi Komputer', 3, 'COM60011 - Arsitektur & Organisasi Komputer'),
(13, 'CID62120', 'Pemrograman Lanjut', 5, 'CID62120 - Pemrograman Lanjut'),
(14, 'CID62122', 'Interaksi Manusia & Komputer', 3, 'CID62122 - Interaksi Manusia & Komputer'),
(15, 'CID62121', 'Matematika Komputasi Lanjut', 4, 'CID62121 - Matematika Komputasi Lanjut'),
(16, 'CID62125', 'Statistika', 3, 'CID62125 - Statistika'),
(17, 'MPK-4007', 'Pendidikan Pancasila', 2, 'MPK-4007 - Pendidikan Pancasila'),
(18, 'CIF61230', 'Algoritma & Struktur Data', 4, 'CIF61230 - Algoritma & Struktur Data'),
(19, 'CID61132', 'Metode Numerik', 3, 'CID61132 - Metode Numerik'),
(20, 'CID61133', 'Sistem Operasi', 4, 'CID61133 - Sistem Operasi'),
(21, 'CID61134', 'Sistem Multimedia', 3, 'CID61134 - Sistem Multimedia'),
(22, 'CID61236', 'Sistem Basis Data', 5, 'CID61236 - Sistem Basis Data'),
(23, 'CIF62240', 'Desain & Analisis Algoritma', 3, 'CIF62240 - Desain & Analisis Algoritma'),
(24, 'CIF62242', 'Kecerdasan Buatan', 4, 'CIF62242 - Kecerdasan Buatan'),
(25, 'CIF62245', 'Analisis & Perancangan Sistem', 5, 'CIF62245 - Analisis & Perancangan Sistem'),
(26, 'CIF62246', 'Pemrograman Web', 4, 'CIF62246 - Pemrograman Web'),
(27, 'CCE61153', 'Jaringan Komputer', 4, 'CCE61153 - Jaringan Komputer'),
(28, 'CIF61251', 'Keamanan Informasi', 3, 'CIF61251 - Keamanan Informasi'),
(29, 'CIF61252', 'Pengenalan Pola', 3, 'CIF61252 - Pengenalan Pola'),
(30, 'CIF61255', 'Rekayasa Perangkat Lunak', 4, 'CIF61255 - Rekayasa Perangkat Lunak'),
(31, 'CIF61256', 'Pemrograman Platform Khusus', 4, 'CIF61256 - Pemrograman Platform Khusus'),
(32, 'CIF61551', 'Rekayasa & Manajemen Kebutuhan', 3, 'CIF61551 - Rekayasa & Manajemen Kebutuhan'),
(33, 'CIF61552', 'Rekayasa Pengetahuan', 3, 'CIF61552 - Rekayasa Pengetahuan'),
(34, 'CIF61450', 'Pengolahan Citra Digital', 3, 'CIF61450 - Pengolahan Citra Digital'),
(35, 'CIF61451', 'Text Mining', 3, 'CIF61451 - Text Mining'),
(36, 'CIF61453', 'Sistem Pakar', 3, 'CIF61453 - Sistem Pakar'),
(37, 'CIF61454', 'Logika Fuzzy', 3, 'CIF61454 - Logika Fuzzy'),
(38, 'CIF61455', 'Sistem Pendukung Keputusan', 3, 'CIF61455 - Sistem Pendukung Keputusan'),
(39, 'CCE62361', 'Administrasi Sistem Server', 3, 'CCE62361 - Administrasi Sistem Server'),
(40, 'CCE62161', 'Administrasi Jaringan', 3, 'CCE62161 - Administrasi Jaringan'),
(41, 'CIF61351', 'Keamanan Jaringan', 3, 'CIF61351 - Keamanan Jaringan'),
(42, 'CIF61651', 'Perancangan Game', 3, 'CIF61651 - Perancangan Game'),
(43, 'CIF61652', 'Pembuatan Konten 2D dan 3D', 3, 'CIF61652 - Pembuatan Konten 2D dan 3D'),
(44, 'CIF61654', 'Pemrograman Aplikasi Perangkat Bergerak', 3, 'CIF61654 - Pemrograman Aplikasi Perangkat Bergerak'),
(45, 'UBU-4005', 'Kewirausahaan', 3, 'UBU-4005 - Kewirausahaan'),
(46, 'MPK-4006', 'Kewarganegaraan', 3, 'MPK-4006 - Kewarganegaraan'),
(47, 'COM60061', 'Metodologi Penelitian TI', 2, 'COM60061 - Metodologi Penelitian TI'),
(48, 'CIF62564', 'Administrasi Basis Data', 3, 'CIF62564 - Administrasi Basis Data'),
(49, 'CIF62568', 'Arsitektur Aplikasi Enterprise', 3, 'CIF62568 - Arsitektur Aplikasi Enterprise'),
(50, 'CIF62563', 'Basis Data Terdistribusi', 3, 'CIF62563 - Basis Data Terdistribusi'),
(51, 'CIF62562', 'Kualitas dan Kehandalan Perangkat Lunak', 3, 'CIF62562 - Kualitas dan Kehandalan Perangkat Lunak'),
(52, 'CIF62569', 'Manajemen Proyek Perangkat Lunak', 3, 'CIF62569 - Manajemen Proyek Perangkat Lunak'),
(53, 'CIF62561', 'Pengujian Perangkat Lunak', 3, 'CIF62561 - Pengujian Perangkat Lunak'),
(54, 'CIF62567', 'Perancangan User Experience', 3, 'CIF62567 - Perancangan User Experience'),
(55, 'CIF62565', 'Pola-pola Perancangan', 3, 'CIF62565 - Pola-pola Perancangan'),
(56, 'CIF62460', 'Visi Komputer', 3, 'CIF62460 - Visi Komputer'),
(57, 'CIF62461', 'Data Mining', 3, 'CIF62461 - Data Mining'),
(58, 'CIF62462', 'Sistem Temu Kembali Informasi', 3, 'CIF62462 - Sistem Temu Kembali Informasi'),
(59, 'CIF62463', 'Jaringan Syaraf Tiruan', 3, 'CIF62463 - Jaringan Syaraf Tiruan'),
(60, 'CIF62466', 'Pemrosesan Bahasa Alami', 3, 'CIF62466 - Pemrosesan Bahasa Alami'),
(61, 'CIF62363', 'Perancangan dan Analisa Jaringan', 3, 'CIF62363 - Perancangan dan Analisa Jaringan'),
(62, 'CCE61372', 'Sistem Komputasi Terdistribusi', 3, 'CCE61372 - Sistem Komputasi Terdistribusi'),
(63, 'CIF62362', 'Jaringan Multimedia', 3, 'CIF62362 - Jaringan Multimedia'),
(64, 'CCE61371', 'Arsitektur Jaringan Terkini', 3, 'CCE61371 - Arsitektur Jaringan Terkini'),
(65, 'CIF62364', 'Pemrograman Jaringan', 3, 'CIF62364 - Pemrograman Jaringan'),
(66, 'CIF62365', 'Sistem Forensik Digital', 3, 'CIF62365 - Sistem Forensik Digital'),
(67, 'CIF61653', 'Grafika Komputer dan Visualisasi', 3, 'CIF61653 - Grafika Komputer dan Visualisasi'),
(68, 'CIF62661', 'Pemrograman Game', 3, 'CIF62661 - Pemrograman Game'),
(69, 'CIF62663', 'Pemrograman GPU', 3, 'CIF62663 - Pemrograman GPU'),
(70, 'CIF62662', 'Kecerdasan Buatan dalam Game', 3, 'CIF62662 - Kecerdasan Buatan dalam Game'),
(71, 'CIF62664', 'Pemrograman Aplikasi Perangkat Bergerak Lanjut', 3, 'CIF62664 - Pemrograman Aplikasi Perangkat Bergerak Lanjut'),
(72, 'CIF62665', 'Rekayasa Aplikasi Perangkat Bergerak', 3, 'CIF62665 - Rekayasa Aplikasi Perangkat Bergerak'),
(73, 'COM60062', 'Etika Profesi TI', 3, 'COM60062 - Etika Profesi TI'),
(74, 'CIF61574', 'Manajemen Konfigurasi Perangkat Lunak', 3, 'CIF61574 - Manajemen Konfigurasi Perangkat Lunak'),
(75, 'CIF61572', 'Metode Formal dalam Rekayasa Perangkat Lunak', 3, 'CIF61572 - Metode Formal dalam Rekayasa Perangkat Lunak'),
(76, 'CIF61573', 'Rekayasa Embedded System', 3, 'CIF61573 - Rekayasa Embedded System'),
(77, 'CIF61571', 'Web Semantik', 3, 'CIF61571 - Web Semantik'),
(78, 'CIF61452', 'Algoritma Evolusi', 3, 'CIF61452 - Algoritma Evolusi'),
(79, 'CIF61456', 'Analisis Big Data', 3, 'CIF61456 - Analisis Big Data'),
(80, 'CIF61471', 'Swarm Intelligence', 3, 'CIF61471 - Swarm Intelligence'),
(81, 'CCE61360', 'Jaringan Nirkabel', 3, 'CCE61360 - Jaringan Nirkabel'),
(82, 'CIF61371', 'Kriptografi', 3, 'CIF61371 - Kriptografi'),
(83, 'TIF61673', 'Augmented & Virtual Reality', 3, 'TIF61673 - Augmented & Virtual Reality'),
(84, 'TIF61675', 'Desain Kreatif Aplikasi & Game', 3, 'TIF61675 - Desain Kreatif Aplikasi & Game'),
(85, 'CIF60973', 'Kewirausahaan Teknologi Informasi', 3, 'CIF60973 - Kewirausahaan Teknologi Informasi'),
(86, 'CIF60974', 'Manajemen Industri Teknologi Informasi', 3, 'CIF60974 - Manajemen Industri Teknologi Informasi'),
(87, 'CID60981', 'Kapita Selekta', 3, 'CID60981 - Kapita Selekta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_matkul`
--
ALTER TABLE `db_matkul`
  ADD PRIMARY KEY (`NO`),
  ADD UNIQUE KEY `KODE_MATKUL` (`KODE_MATKUL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_matkul`
--
ALTER TABLE `db_matkul`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
