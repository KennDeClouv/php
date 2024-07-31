-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 01:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `name`, `password`) VALUES
(7, 'admin', 'Admin boss', '$2y$10$oELP0UVyjsa3u3UPN4WFxO27FJM9hZp4aSuVRbHPkCl2n18YkP9e2'),
(8, 'user1', 'First user', '$2y$10$qQ3ZaDq11R87kGxcLzANCuQRgX3VGgZfrifKIwhaIYsmo9x0ksqBG'),
(9, 'kenn', 'KennDeClouv', '$2y$10$DKRP7279UCGSCaVO3Ci/se.vR5lYSfOG7rL8bR1wyZVtmm0hKt9/u'),
(10, 'ikanhiumakantirek', 'IkanHiuMakanTirek', '$2y$10$cWkQmZXe9QL4ltVBXhBbz.iWnYvNKC64V/S0MMKomYQcVrEEqAckS'),
(11, 'riha', 'RihaaDeClouv', '$2y$10$eHI55lfOYtJNKrgqDqksDOD7uhCxhMLt/fl28hVh1PNRrygD.1NCi'),
(12, 'woila', 'woila', '$2y$10$7P4PCyrUYzkd9DOhdwA04.u3mjxOC23v3htTrMyEGTKqWopZyFZPO'),
(13, 'faqih', 'Faqihh', '$2y$10$SiQMTy8gRlooNvBQrBPiHuIWdkVh5N1BFNU4R6ZHq8H9/NqcVsLKu'),
(14, 'user2', 'User 2', '$2y$10$H0T3FnvArqCpq/1CTfNp8uEBe96r29BWbVxF4diRQXyBis4OC.IG2'),
(15, 'user3', 'User 3', '$2y$10$TTs1OiZTvc4lEudc8ci/uu/uoSlks4BrcVwIXRPOznHbRVaaspVuu'),
(16, 'user4', 'User 4', '$2y$10$zddpwuDDrHUjG7HYRvq3oOJJUgWlr6qNs3EzDYTKYaECNwaRXDS.6');

-- --------------------------------------------------------

--
-- Table structure for table `dataa`
--

CREATE TABLE `dataa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `umur` int(10) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dataa`
--

INSERT INTO `dataa` (`id`, `nama`, `umur`, `tanggal_lahir`, `alamat`) VALUES
(1, 'KennDeClouv', 18, '2006-05-27', 'Malangg'),
(2, 'RihaaDeLouve', 17, '2007-07-15', 'Madiunn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataa`
--
ALTER TABLE `dataa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `dataa`
--
ALTER TABLE `dataa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
