-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2021 at 06:30 PM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banner_stat`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_display`
--

CREATE TABLE `banner_display` (
  `id` bigint NOT NULL,
  `ip_address` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_agent` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `page_url` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `view_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `views_count` bigint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `banner_display`
--

INSERT INTO `banner_display` (`id`, `ip_address`, `user_agent`, `page_url`, `view_date`, `views_count`) VALUES
(1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'http://banner-stat.loc/index1.html', '2021-09-15 15:29:57', 2),
(3, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'http://banner-stat.loc/index2.html', '2021-09-15 15:30:05', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_display`
--
ALTER TABLE `banner_display`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banner_display_main_index` (`ip_address`,`user_agent`,`page_url`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_display`
--
ALTER TABLE `banner_display`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
