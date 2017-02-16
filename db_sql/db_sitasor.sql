-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2017 at 06:20 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.6.30-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sitasor`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_set`
--

CREATE TABLE `data_set` (
  `id_data_set` int(8) NOT NULL,
  `kemiringan_lereng` varchar(6) NOT NULL,
  `kondisi_tanah` varchar(6) NOT NULL,
  `batuan_penyusun_lereng` varchar(6) NOT NULL,
  `curah_hujan` varchar(6) NOT NULL,
  `tata_air_lereng` varchar(6) NOT NULL,
  `vegetasi` varchar(6) NOT NULL,
  `pola_tanam` varchar(6) NOT NULL,
  `penggalian_dan_pemotongan_lereng` varchar(6) NOT NULL,
  `pencetakan_kolam` varchar(6) NOT NULL,
  `drainase` varchar(6) NOT NULL,
  `pembangunan_konstruksi` varchar(6) NOT NULL,
  `kepadatan_penduduk` varchar(6) NOT NULL,
  `usaha_mitigasi` varchar(6) NOT NULL,
  `hasil` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_set`
--

INSERT INTO `data_set` (`id_data_set`, `kemiringan_lereng`, `kondisi_tanah`, `batuan_penyusun_lereng`, `curah_hujan`, `tata_air_lereng`, `vegetasi`, `pola_tanam`, `penggalian_dan_pemotongan_lereng`, `pencetakan_kolam`, `drainase`, `pembangunan_konstruksi`, `kepadatan_penduduk`, `usaha_mitigasi`, `hasil`) VALUES
(1, 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Sedang', 'Rawan'),
(2, 'Sedang', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Tinggi', 'Rendah', 'Rendah', 'Rawan'),
(3, 'Rendah', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Tinggi', 'Rawan'),
(4, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(5, 'Sedang', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Rendah', 'Tinggi', 'Rendah', 'Rendah', 'Tinggi', 'Sedang', 'Rendah', 'Rendah', 'Aman'),
(6, 'Rendah', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Sedang', 'Tinggi', 'Rendah', 'Aman'),
(7, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Sedang', 'Rawan'),
(8, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(9, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(10, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Tinggi', 'Rendah', 'Rendah', 'Aman'),
(11, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rawan'),
(12, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Sedang', 'Aman'),
(13, 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Rendah', 'Rendah', 'Sedang', 'Rawan'),
(14, 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(15, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Aman'),
(16, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Sedang', 'Tinggi', 'Aman'),
(17, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Tinggi', 'Aman'),
(18, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Tinggi', 'Aman'),
(19, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(20, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(21, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(22, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(23, 'Tinggi', 'Tinggi', 'Sedang', 'Rendah', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rawan'),
(24, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(25, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(26, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(27, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(28, 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Rendah', 'Rendah', 'Sedang', 'Rawan'),
(29, 'Tinggi', 'Sedang', 'Rendah', 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rawan'),
(30, 'Tinggi', 'Rendah', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rawan'),
(31, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(32, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(33, 'Tinggi', 'Tinggi', 'Sedang', 'Rendah', 'Tinggi', 'Tinggi', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(34, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(35, 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(36, 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(37, 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(38, 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(39, 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(40, 'Tinggi', 'Tinggi', 'Rendah', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(41, 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(42, 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(43, 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(44, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(45, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(46, 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Rendah', 'Rendah', 'Sedang', 'Rawan'),
(47, 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(48, 'Tinggi', 'Tinggi', 'Rendah', 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(49, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(50, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(51, 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Rendah', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Rendah', 'Tinggi', 'Sedang', 'Rawan'),
(52, 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(53, 'Tinggi', 'Rendah', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(54, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(55, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(56, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rawan'),
(57, 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(58, 'Tinggi', 'Sedang', 'Sedang', 'Rendah', 'Rendah', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(59, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Rendah', 'Tinggi', 'Rendah', 'Rendah', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(60, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Rawan'),
(61, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(62, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(63, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(64, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(65, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(66, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(67, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(68, 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Sedang', 'Rawan'),
(69, 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(70, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Sedang', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(71, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(72, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Tinggi', 'Rendah', 'Rendah', 'Rawan'),
(73, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(74, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(75, 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Rendah', 'Rendah', 'Sedang', 'Rawan'),
(76, 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(77, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(78, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(79, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(80, 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Rawan'),
(81, 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(82, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(83, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Rendah', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman'),
(84, 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Aman');

-- --------------------------------------------------------

--
-- Table structure for table `data_tes`
--

CREATE TABLE `data_tes` (
  `id_data_tes` int(11) NOT NULL,
  `id_desa` int(3) NOT NULL,
  `id_user` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `kemiringan_lereng` varchar(6) NOT NULL,
  `kondisi_tanah` varchar(6) NOT NULL,
  `batuan_penyusun_lereng` varchar(6) NOT NULL,
  `curah_hujan` varchar(6) NOT NULL,
  `tata_air_lereng` varchar(6) NOT NULL,
  `vegetasi` varchar(6) NOT NULL,
  `pola_tanam` varchar(6) NOT NULL,
  `penggalian_dan_pemotongan_lereng` varchar(6) NOT NULL,
  `pencetakan_kolam` varchar(6) NOT NULL,
  `drainase` varchar(6) NOT NULL,
  `pembangunan_konstruksi` varchar(6) NOT NULL,
  `kepadatan_penduduk` varchar(6) NOT NULL,
  `usaha_mitigasi` varchar(6) NOT NULL,
  `hasil` varchar(6) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_tes`
--

INSERT INTO `data_tes` (`id_data_tes`, `id_desa`, `id_user`, `tanggal`, `kemiringan_lereng`, `kondisi_tanah`, `batuan_penyusun_lereng`, `curah_hujan`, `tata_air_lereng`, `vegetasi`, `pola_tanam`, `penggalian_dan_pemotongan_lereng`, `pencetakan_kolam`, `drainase`, `pembangunan_konstruksi`, `kepadatan_penduduk`, `usaha_mitigasi`, `hasil`, `status`) VALUES
(1, 7, 3, '2017-01-22', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Sedang', 'Tinggi', 'Rawan', 0),
(2, 4, 3, '2017-01-24', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rawan', 0),
(3, 7, 1, '2017-02-10', 'Rendah', 'Sedang', 'Tinggi', 'Sedang', 'Rendah', 'Sedang', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Rendah', 'Rawan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(2) NOT NULL,
  `nama_desa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id_desa`, `nama_desa`) VALUES
(1, 'Panti'),
(2, 'Glagahwero'),
(3, 'Kemuningsari Lor'),
(4, 'Pakis'),
(5, 'Serut'),
(6, 'Suci'),
(7, 'Kemiri');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Akses Administrator'),
(2, 'user', 'Akses General User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `alamat` varchar(256) NOT NULL,
  `user_img` varchar(100) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `id_desa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `username`, `password`, `phone`, `alamat`, `user_img`, `ip_address`, `last_login`, `salt`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `active`, `created_on`, `id_desa`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '082333817317', 'Jln Cempaka No 38 Jember', 'usr_img_e9352a4.jpg', '127.0.0.1', 1487243734, '', NULL, NULL, NULL, NULL, 1, 1268889823, 0),
(3, 'dani bavana', 'dani@mail.com', 'dani', '$2y$08$HoeGPXExwnPKR8vIvhM7nule6tnrCX6cjGPyZsfwv5HNuVtwvPlOq', '083857909007', 'jember', 'usr_img_f5c1223.png', '::1', 1487243463, NULL, NULL, NULL, NULL, NULL, 1, 1483685458, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(4, 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_set`
--
ALTER TABLE `data_set`
  ADD PRIMARY KEY (`id_data_set`);

--
-- Indexes for table `data_tes`
--
ALTER TABLE `data_tes`
  ADD PRIMARY KEY (`id_data_tes`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_tes`
--
ALTER TABLE `data_tes`
  MODIFY `id_data_tes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
