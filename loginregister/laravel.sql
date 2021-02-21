-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 10:35 AM
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
-- Database: `laravel`
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
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_02_10_063149_create_categorys_table', 2),
(6, '2021_02_10_092725_create_products_table', 3),
(7, '2021_02_11_054823_create_categorys_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cname` int(11) NOT NULL,
  `productcode` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `saleprice` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `porder` int(11) NOT NULL,
  `pstatus` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `cname`, `productcode`, `price`, `saleprice`, `quantity`, `porder`, `pstatus`, `created_at`, `updated_at`) VALUES
(1, 'MicroLaptop', 1, 3395, 15000, 17000, 10, 10, 'Active', '2021-02-13 03:30:50', '2021-02-17 03:53:50'),
(3, 'Birthday Card', 4, 2316, 150, 170, 2, 3, 'Active', '2021-02-13 03:33:29', '2021-02-15 23:40:36'),
(5, 'Letters', 6, 9451, 120, 150, 10, 25, 'Active', '2021-02-15 23:07:49', '2021-02-16 00:12:56'),
(6, 'Android', 7, 5445, 1000, 5000, 10, 25, 'Inactive', '2021-02-16 04:07:34', '2021-02-16 04:07:34'),
(7, 'Lettres Small', 6, 9788, 100, 120, 15, 12, 'Active', '2021-02-16 04:08:17', '2021-02-16 04:08:17'),
(8, 'Birthday Cares', 4, 4755, 80, 190, 10, 52, 'Active', '2021-02-16 04:09:37', '2021-02-17 03:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `imgid` bigint(20) UNSIGNED NOT NULL,
  `productid` int(11) NOT NULL,
  `imagename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `istatus` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`imgid`, `productid`, `imagename`, `istatus`) VALUES
(1, 1, '1613206850-565831404-micro_lap_1.jpg', 'Active'),
(2, 1, '1613206850-1038115194-micro_lap_2.jpg', 'Inactive'),
(3, 1, '1613206850-660110721-micro_lap_3.jpg', 'Inactive'),
(6, 3, '1613207009-1749863183-b_cards1.jpg', 'Inactive'),
(7, 3, '1613207010-843206742-b_cards2.jpg', 'Active'),
(8, 3, '1613207010-227088721-b_cards3.jpg', 'Inactive'),
(10, 5, '1613450269-426239530-abc_1.jpg', 'Active'),
(11, 5, '1613450269-2111843021-abc_2.jpg', 'Inactive'),
(12, 5, '1613450318-550847610-a.bc_3.jpg', 'Inactive'),
(13, 6, '1613468254-1661884844-mobile_1.jpg', 'Active'),
(14, 6, '1613468254-1916004181-mobile_2.jpg', 'Inactive'),
(15, 6, '1613468254-167065513-mobile_3.jpg', 'Inactive'),
(16, 7, '1613468297-1832835783-sabc_1.jpg', 'Active'),
(17, 7, '1613468297-751926306-sabc_2.jpg', 'Inactive'),
(18, 7, '1613468297-1707559190-sabc_3.jpg', 'Inactive'),
(19, 8, '1613468377-1355755617-b_cards2.jpg', 'Inactive'),
(20, 8, '1613468377-2058166213-b_cards3.jpg', 'Active');

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
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'akash', 'a@gmail.com', NULL, '$2y$10$cY.jz/mAFECue.mKAscUlO7ua/VUKBAqA766tloMnc7v7669QB27W', NULL, NULL, NULL),
(2, 'hitesh', 'h@gmail.com', NULL, '$2y$10$r954rUOV1ZpkYZwZJeIaPOZiTbdZazt6cnmu1nqzXya1LGASPiRQW', NULL, '2021-02-17 04:34:02', '2021-02-17 04:34:02');

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`imgid`);

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
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `imgid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
