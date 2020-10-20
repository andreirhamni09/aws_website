-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 11:18 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_aws`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_aws1`
--

CREATE TABLE `tabel_aws1` (
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `radiasi` int(5) NOT NULL,
  `index_UV` float NOT NULL,
  `suhu_Udara` float NOT NULL,
  `tekanan_Udara` float NOT NULL,
  `kecepatan_Angin` int(5) NOT NULL,
  `arah_Angin` int(5) NOT NULL,
  `curah_Hujan` int(5) NOT NULL,
  `kelembaban` int(5) NOT NULL,
  `evapotranspirasi` float NOT NULL,
  `soil_Moisture_1` int(5) NOT NULL,
  `soil_Moisture_2` int(5) NOT NULL,
  `soil_Moisture_3` int(5) NOT NULL,
  `soil_Moisture_4` int(5) NOT NULL,
  `suhu_Tanah_1` float NOT NULL,
  `suhu_Tanah_2` float NOT NULL,
  `suhu_Tanah_3` float NOT NULL,
  `suhu_Tanah_4` float NOT NULL,
  `leafwetnes_1` int(5) NOT NULL,
  `leafwetnes_2` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_aws1`
--

INSERT INTO `tabel_aws1` (`tanggal`, `jam`, `radiasi`, `index_UV`, `suhu_Udara`, `tekanan_Udara`, `kecepatan_Angin`, `arah_Angin`, `curah_Hujan`, `kelembaban`, `evapotranspirasi`, `soil_Moisture_1`, `soil_Moisture_2`, `soil_Moisture_3`, `soil_Moisture_4`, `suhu_Tanah_1`, `suhu_Tanah_2`, `suhu_Tanah_3`, `suhu_Tanah_4`, `leafwetnes_1`, `leafwetnes_2`) VALUES
('2020-10-10', '11:30:00', 926, 13.1, 31, 1005.4, 3, 67, 0, 72, 1.7, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '11:20:00', 438, 8, 31.2, 1005.6, 0, 108, 0, 72, 1.7, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '11:10:00', 752, 11.1, 30.9, 1005.7, 0, 68, 0, 71, 1.7, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '11:00:00', 1005, 12.9, 31.2, 1005.8, 0, 103, 0, 77, 1.7, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '10:50:00', 1206, 14.8, 30.8, 1006, 2, 360, 0, 78, 1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '10:40:00', 633, 12.1, 30.2, 1006.1, 0, 136, 0, 75, 1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '10:30:00', 1021, 12.8, 30.4, 1006.2, 2, 46, 0, 76, 1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '10:20:00', 1037, 11.9, 30.3, 1006.2, 4, 41, 0, 77, 1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '10:10:00', 995, 12.5, 30.2, 1006.3, 0, 44, 0, 78, 1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '10:00:00', 997, 12.2, 29.8, 1006.3, 1, 131, 0, 81, 1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '09:50:00', 914, 11.3, 29.7, 1006.4, 0, 100, 0, 81, 0.6, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '09:40:00', 779, 10, 29.3, 1006.5, 2, 73, 0, 81, 0.6, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '09:30:00', 527, 7.2, 29.3, 1006.7, 0, 126, 0, 80, 0.6, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '09:20:00', 613, 7.6, 29.7, 1006.7, 0, 27, 0, 81, 0.6, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '09:10:00', 557, 7.1, 29.3, 1006.8, 0, 71, 0, 81, 0.6, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '09:00:00', 617, 7.5, 29.4, 1007, 0, 149, 0, 80, 0.6, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '08:50:00', 577, 6.7, 28.8, 1006.9, 0, 58, 0, 80, 0.3, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '08:40:00', 454, 5.3, 28.8, 1006.9, 0, 14, 0, 82, 0.3, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '08:30:00', 461, 5, 28.7, 1006.9, 0, 116, 0, 85, 0.3, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '08:20:00', 355, 4, 28.2, 1006.9, 0, 76, 0, 87, 0.3, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '08:10:00', 376, 4, 28.2, 1007.1, 0, 85, 0, 86, 0.3, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '08:00:00', 422, 3.8, 27.7, 1007.1, 0, 82, 0, 89, 0.3, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '07:50:00', 348, 3.2, 27.3, 1007, 0, 71, 0, 89, 0.1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '07:40:00', 272, 2.6, 27.4, 1006.9, 0, 104, 0, 88, 0.1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '07:30:00', 244, 2.3, 27.4, 1006.9, 0, 64, 0, 90, 0.1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '07:20:00', 301, 2.3, 27.2, 1006.9, 0, 41, 0, 90, 0.1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '07:10:00', 294, 1.9, 26.7, 1006.5, 0, 100, 0, 92, 0.1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '07:00:00', 236, 1.5, 26.3, 1006.4, 0, 104, 0, 93, 0.1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '06:50:00', 192, 1.2, 25.7, 1006.4, 0, 104, 0, 96, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '06:40:00', 155, 0.9, 25.1, 1006.3, 0, 104, 0, 97, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '06:30:00', 111, 0.6, 24.8, 1006.1, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '06:20:00', 90, 0.5, 24.6, 1005.8, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '06:10:00', 79, 0, 24.4, 1005.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '06:00:00', 56, 0, 24.2, 1005.7, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '05:50:00', 33, 0, 24.1, 1005.6, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '05:40:00', 21, 0, 24.1, 1005.4, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '05:30:00', 11, 0, 24.1, 1005.2, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '05:20:00', 0, 0, 24.1, 1005.1, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '05:10:00', 0, 0, 24.2, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '05:00:00', 0, 0, 24.2, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '04:50:00', 0, 0, 24.1, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '04:40:00', 0, 0, 24.2, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '04:30:00', 0, 0, 24.3, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '04:20:00', 0, 0, 24.3, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '04:10:00', 0, 0, 24.4, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '04:00:00', 0, 0, 24.4, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '03:50:00', 0, 0, 24.4, 1004.8, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '03:40:00', 0, 0, 24.6, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '03:30:00', 0, 0, 24.6, 1004.8, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '03:20:00', 0, 0, 24.6, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '03:10:00', 0, 0, 24.6, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '03:00:00', 0, 0, 24.7, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '02:50:00', 0, 0, 24.7, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '02:40:00', 0, 0, 24.7, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '02:30:00', 0, 0, 24.6, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '02:20:00', 0, 0, 24.7, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '02:10:00', 0, 0, 24.7, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '02:00:00', 0, 0, 24.7, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '01:50:00', 0, 0, 24.7, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '01:40:00', 0, 0, 24.8, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '01:30:00', 0, 0, 24.7, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '01:20:00', 0, 0, 24.7, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '01:10:00', 0, 0, 24.7, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '01:00:00', 0, 0, 24.8, 1005.1, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '00:50:00', 0, 0, 24.8, 1005.2, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '00:40:00', 0, 0, 24.8, 1005.4, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '00:30:00', 0, 0, 24.8, 1005.4, 0, 104, 0, 97, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '00:20:00', 0, 0, 24.8, 1005.5, 0, 104, 0, 97, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '00:10:00', 0, 0, 24.9, 1005.6, 0, 104, 0, 97, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '00:00:00', 0, 0, 25, 1005.8, 0, 104, 0, 97, 0, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '23:50:00', 0, 0, 24.9, 1005.9, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '23:40:00', 0, 0, 25, 1006, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '23:30:00', 0, 0, 25, 1006.1, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '23:20:00', 0, 0, 25, 1006.2, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '23:10:00', 0, 0, 25, 1006.2, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '23:00:00', 0, 0, 25, 1006.3, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '22:50:00', 0, 0, 25.1, 1006.3, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '22:40:00', 0, 0, 25.1, 1006.3, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '22:30:00', 0, 0, 25.2, 1006.3, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '22:20:00', 0, 0, 25.2, 1006.5, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '22:10:00', 0, 0, 25.1, 1006.5, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '22:00:00', 0, 0, 25.1, 1006.5, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '21:50:00', 0, 0, 25.2, 1006.6, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '21:40:00', 0, 0, 25.2, 1006.6, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '21:30:00', 0, 0, 25.2, 1006.6, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '21:20:00', 0, 0, 25, 1006.6, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '21:10:00', 0, 0, 25.1, 1006.6, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '21:00:00', 0, 0, 25.1, 1006.5, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '20:50:00', 0, 0, 25.1, 1006.5, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '20:40:00', 0, 0, 25.1, 1006.6, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '20:30:00', 0, 0, 25.2, 1006.6, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '20:20:00', 0, 0, 25.2, 1006.5, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '20:10:00', 0, 0, 25.2, 1006.5, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '20:00:00', 0, 0, 25.2, 1006.5, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '19:50:00', 0, 0, 25.2, 1006.4, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '19:40:00', 0, 0, 25.3, 1006.3, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '19:30:00', 0, 0, 25.5, 1006.2, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '19:20:00', 0, 0, 25.6, 1006.2, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '19:10:00', 0, 0, 25.7, 1006.2, 0, 104, 10, 95, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '19:00:00', 0, 0, 25.8, 1006, 0, 104, 10, 95, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_aws2`
--

CREATE TABLE `tabel_aws2` (
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `radiasi` int(5) NOT NULL,
  `index_UV` float NOT NULL,
  `suhu_Udara` float NOT NULL,
  `tekanan_Udara` float NOT NULL,
  `kecepatan Angin` int(5) NOT NULL,
  `arah_Angin` int(5) NOT NULL,
  `curah_Hujan` int(5) NOT NULL,
  `kelembaban` int(5) NOT NULL,
  `evapotranspirasi` float NOT NULL,
  `soil_Moisture_1` int(5) NOT NULL,
  `soil_Moisture_2` int(5) NOT NULL,
  `soil_Moisture_3` int(5) NOT NULL,
  `soil_Moisture_4` int(5) NOT NULL,
  `suhu_Tanah_1` float NOT NULL,
  `suhu_Tanah_2` float NOT NULL,
  `suhu_Tanah_3` float NOT NULL,
  `suhu_Tanah_4` float NOT NULL,
  `leafwetnes_1` int(5) NOT NULL,
  `leafwetnes_2` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_aws2`
--

INSERT INTO `tabel_aws2` (`tanggal`, `jam`, `radiasi`, `index_UV`, `suhu_Udara`, `tekanan_Udara`, `kecepatan Angin`, `arah_Angin`, `curah_Hujan`, `kelembaban`, `evapotranspirasi`, `soil_Moisture_1`, `soil_Moisture_2`, `soil_Moisture_3`, `soil_Moisture_4`, `suhu_Tanah_1`, `suhu_Tanah_2`, `suhu_Tanah_3`, `suhu_Tanah_4`, `leafwetnes_1`, `leafwetnes_2`) VALUES
('2020-10-10', '11:30:00', 926, 13.1, 31, 1005.4, 3, 67, 0, 72, 1.7, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '11:20:00', 438, 8, 31.2, 1005.6, 0, 108, 0, 72, 1.7, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '11:10:00', 752, 11.1, 30.9, 1005.7, 0, 68, 0, 71, 1.7, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '11:00:00', 1005, 12.9, 31.2, 1005.8, 0, 103, 0, 77, 1.7, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '10:50:00', 1206, 14.8, 30.8, 1006, 2, 360, 0, 78, 1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '10:40:00', 633, 12.1, 30.2, 1006.1, 0, 136, 0, 75, 1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '10:30:00', 1021, 12.8, 30.4, 1006.2, 2, 46, 0, 76, 1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '10:20:00', 1037, 11.9, 30.3, 1006.2, 4, 41, 0, 77, 1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '10:10:00', 995, 12.5, 30.2, 1006.3, 0, 44, 0, 78, 1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '10:00:00', 997, 12.2, 29.8, 1006.3, 1, 131, 0, 81, 1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '09:50:00', 914, 11.3, 29.7, 1006.4, 0, 100, 0, 81, 0.6, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '09:40:00', 779, 10, 29.3, 1006.5, 2, 73, 0, 81, 0.6, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '09:30:00', 527, 7.2, 29.3, 1006.7, 0, 126, 0, 80, 0.6, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '09:20:00', 613, 7.6, 29.7, 1006.7, 0, 27, 0, 81, 0.6, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '09:10:00', 557, 7.1, 29.3, 1006.8, 0, 71, 0, 81, 0.6, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '09:00:00', 617, 7.5, 29.4, 1007, 0, 149, 0, 80, 0.6, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '08:50:00', 577, 6.7, 28.8, 1006.9, 0, 58, 0, 80, 0.3, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '08:40:00', 454, 5.3, 28.8, 1006.9, 0, 14, 0, 82, 0.3, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '08:30:00', 461, 5, 28.7, 1006.9, 0, 116, 0, 85, 0.3, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '08:20:00', 355, 4, 28.2, 1006.9, 0, 76, 0, 87, 0.3, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '08:10:00', 376, 4, 28.2, 1007.1, 0, 85, 0, 86, 0.3, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '08:00:00', 422, 3.8, 27.7, 1007.1, 0, 82, 0, 89, 0.3, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '07:50:00', 348, 3.2, 27.3, 1007, 0, 71, 0, 89, 0.1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '07:40:00', 272, 2.6, 27.4, 1006.9, 0, 104, 0, 88, 0.1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '07:30:00', 244, 2.3, 27.4, 1006.9, 0, 64, 0, 90, 0.1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '07:20:00', 301, 2.3, 27.2, 1006.9, 0, 41, 0, 90, 0.1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '07:10:00', 294, 1.9, 26.7, 1006.5, 0, 100, 0, 92, 0.1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '07:00:00', 236, 1.5, 26.3, 1006.4, 0, 104, 0, 93, 0.1, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '06:50:00', 192, 1.2, 25.7, 1006.4, 0, 104, 0, 96, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '06:40:00', 155, 0.9, 25.1, 1006.3, 0, 104, 0, 97, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '06:30:00', 111, 0.6, 24.8, 1006.1, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '06:20:00', 90, 0.5, 24.6, 1005.8, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '06:10:00', 79, 0, 24.4, 1005.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '06:00:00', 56, 0, 24.2, 1005.7, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '05:50:00', 33, 0, 24.1, 1005.6, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '05:40:00', 21, 0, 24.1, 1005.4, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '05:30:00', 11, 0, 24.1, 1005.2, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '05:20:00', 0, 0, 24.1, 1005.1, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '05:10:00', 0, 0, 24.2, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '05:00:00', 0, 0, 24.2, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '04:50:00', 0, 0, 24.1, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '04:40:00', 0, 0, 24.2, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '04:30:00', 0, 0, 24.3, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '04:20:00', 0, 0, 24.3, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '04:10:00', 0, 0, 24.4, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '04:00:00', 0, 0, 24.4, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '03:50:00', 0, 0, 24.4, 1004.8, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '03:40:00', 0, 0, 24.6, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '03:30:00', 0, 0, 24.6, 1004.8, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '03:20:00', 0, 0, 24.6, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '03:10:00', 0, 0, 24.6, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '03:00:00', 0, 0, 24.7, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '02:50:00', 0, 0, 24.7, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '02:40:00', 0, 0, 24.7, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '02:30:00', 0, 0, 24.6, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '02:20:00', 0, 0, 24.7, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '02:10:00', 0, 0, 24.7, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '02:00:00', 0, 0, 24.7, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '01:50:00', 0, 0, 24.7, 1004.9, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '01:40:00', 0, 0, 24.8, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '01:30:00', 0, 0, 24.7, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '01:20:00', 0, 0, 24.7, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '01:10:00', 0, 0, 24.7, 1005, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '01:00:00', 0, 0, 24.8, 1005.1, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '00:50:00', 0, 0, 24.8, 1005.2, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '00:40:00', 0, 0, 24.8, 1005.4, 0, 104, 0, 98, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '00:30:00', 0, 0, 24.8, 1005.4, 0, 104, 0, 97, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '00:20:00', 0, 0, 24.8, 1005.5, 0, 104, 0, 97, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '00:10:00', 0, 0, 24.9, 1005.6, 0, 104, 0, 97, 0, 0, 0, 0, 0, 25.6, 0, 0, 0, 0, 0),
('2020-10-10', '00:00:00', 0, 0, 25, 1005.8, 0, 104, 0, 97, 0, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '23:50:00', 0, 0, 24.9, 1005.9, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '23:40:00', 0, 0, 25, 1006, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '23:30:00', 0, 0, 25, 1006.1, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '23:20:00', 0, 0, 25, 1006.2, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '23:10:00', 0, 0, 25, 1006.2, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '23:00:00', 0, 0, 25, 1006.3, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '22:50:00', 0, 0, 25.1, 1006.3, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '22:40:00', 0, 0, 25.1, 1006.3, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '22:30:00', 0, 0, 25.2, 1006.3, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '22:20:00', 0, 0, 25.2, 1006.5, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '22:10:00', 0, 0, 25.1, 1006.5, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '22:00:00', 0, 0, 25.1, 1006.5, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '21:50:00', 0, 0, 25.2, 1006.6, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '21:40:00', 0, 0, 25.2, 1006.6, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '21:30:00', 0, 0, 25.2, 1006.6, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '21:20:00', 0, 0, 25, 1006.6, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '21:10:00', 0, 0, 25.1, 1006.6, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '21:00:00', 0, 0, 25.1, 1006.5, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '20:50:00', 0, 0, 25.1, 1006.5, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '20:40:00', 0, 0, 25.1, 1006.6, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '20:30:00', 0, 0, 25.2, 1006.6, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '20:20:00', 0, 0, 25.2, 1006.5, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '20:10:00', 0, 0, 25.2, 1006.5, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '20:00:00', 0, 0, 25.2, 1006.5, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '19:50:00', 0, 0, 25.2, 1006.4, 0, 104, 10, 97, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '19:40:00', 0, 0, 25.3, 1006.3, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '19:30:00', 0, 0, 25.5, 1006.2, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '19:20:00', 0, 0, 25.6, 1006.2, 0, 104, 10, 96, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '19:10:00', 0, 0, 25.7, 1006.2, 0, 104, 10, 95, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0),
('2020-10-09', '19:00:00', 0, 0, 25.8, 1006, 0, 104, 10, 95, 2.2, 0, 0, 0, 0, 26.1, 0, 0, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;