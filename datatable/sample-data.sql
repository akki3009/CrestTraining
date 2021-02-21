-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 10:34 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample-data`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `corder` int(11) NOT NULL,
  `cstatus` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `cimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `cname`, `corder`, `cstatus`, `cimage`, `created_at`, `updated_at`) VALUES
(1, 'Microcomputers', 15, 'Active', '1613022662.jpg', '2021-02-11 00:21:02', '2021-02-18 01:34:37'),
(2, 'Minicomputer', 21, 'Inactive', '1613037805.jpeg', '2021-02-11 04:33:25', '2021-02-11 04:33:25'),
(4, 'Stationary', 29, 'Active', '1613039009.png', '2021-02-11 04:53:29', '2021-02-11 04:53:29'),
(6, 'Letters', 25, 'Inactive', '1613110916.jpg', '2021-02-12 00:51:56', '2021-02-12 00:51:56'),
(7, 'Mobile', 10, 'Inactive', '1613111370.jpg', '2021-02-12 00:59:30', '2021-02-12 00:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbperson`
--

CREATE TABLE `tbperson` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `name` varchar(255) NOT NULL COMMENT 'person name',
  `salary` double NOT NULL COMMENT 'person salary',
  `age` int(11) NOT NULL COMMENT 'person age'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

--
-- Dumping data for table `tbperson`
--

INSERT INTO `tbperson` (`id`, `name`, `salary`, `age`) VALUES
(1, 'Tiger Nixon', 320800, 61),
(2, 'Garrett Winters', 170750, 63),
(3, 'Ashton Cox', 86000, 66),
(4, 'Cedric Kelly', 433060, 22),
(5, 'Airi Satou', 162700, 33),
(6, 'Brielle Williamson', 372000, 61),
(7, 'Herrod Chandler', 137500, 59),
(8, 'Rhona Davidson', 327900, 55),
(9, 'Colleen Hurst', 205500, 39),
(10, 'Sonya Frost', 103600, 23),
(11, 'Jena Gaines', 90560, 30),
(12, 'Quinn Flynn', 342000, 22),
(13, 'Charde Marshall', 470600, 36),
(14, 'Haley Kennedy', 313500, 43),
(15, 'Tatyana Fitzpatrick', 385750, 19),
(16, 'Michael Silva', 198500, 66),
(17, 'Paul Byrd', 725000, 64),
(18, 'Gloria Little', 237500, 59),
(19, 'Bradley Greer', 132000, 41),
(20, 'Dai Rios', 217500, 35),
(21, 'Jenette Caldwell', 345000, 30),
(22, 'Yuri Berry', 675000, 40),
(23, 'Caesar Vance', 106450, 21),
(24, 'Doris Wilder', 85600, 23),
(25, 'Angelica Ramos', 1200000, 47),
(26, 'Gavin Joyce', 92575, 42),
(27, 'Jennifer Chang', 357650, 28),
(28, 'Brenden Wagner', 206850, 28),
(29, 'Fiona Green', 850000, 48),
(30, 'Shou Itou', 163000, 20),
(31, 'Michelle House', 95400, 37),
(32, 'Suki Burks', 114500, 53),
(33, 'Prescott Bartlett', 145000, 27),
(34, 'Gavin Cortez', 235500, 22),
(35, 'Martena Mccray', 324050, 46),
(36, 'Unity Butler', 85675, 47),
(37, 'Howard Hatfield', 164500, 51),
(38, 'Hope Fuentes', 109850, 41),
(39, 'Vivian Harrell', 452500, 62),
(40, 'Timothy Mooney', 136200, 37),
(41, 'Jackson Bradshaw', 645750, 65),
(42, 'Olivia Liang', 234500, 64),
(43, 'Bruno Nash', 163500, 38),
(44, 'Sakura Yamamoto', 139575, 37),
(45, 'Thor Walton', 98540, 61),
(46, 'Finn Camacho', 87500, 47),
(47, 'Serge Baldwin', 138575, 64),
(48, 'Zenaida Frank', 125250, 63),
(49, 'Zorita Serrano', 115000, 56),
(50, 'Jennifer Acosta', 75650, 43),
(51, 'Cara Stevens', 145600, 46),
(52, 'Hermione Butler', 356250, 47),
(53, 'Lael Greer', 103500, 21),
(54, 'Jonas Alexander', 86500, 30),
(55, 'Shad Decker', 183000, 51),
(56, 'Michael Bruce', 183000, 29),
(57, 'Donna Snider', 112000, 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categorys_cname_unique` (`cname`);

--
-- Indexes for table `tbperson`
--
ALTER TABLE `tbperson`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbperson`
--
ALTER TABLE `tbperson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
