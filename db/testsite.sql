-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 04:53 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(100) NOT NULL,
  `requser` varchar(100) NOT NULL,
  `teauser` varchar(100) NOT NULL,
  `coursetitle` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `requser`, `teauser`, `coursetitle`, `comment`, `time`) VALUES
(1, 'faim', 'abrar', 'CSE110', 'HIU', 'All ady'),
(2, 'faim', 'abrar', 'CSE221', 'Sdasdasd', 'All ady'),
(3, 'faim', 'niaz', 'EEE420', 'Hello', 'Today'),
(4, 'faim', 'naqi', 'CSE335', 'Nothing', 'Tomorrow');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(6) NOT NULL,
  `description` text NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `coursetype` varchar(3) NOT NULL DEFAULT 'CSE',
  `appointment` varchar(100) NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `description`, `teacher`, `coursetype`, `appointment`, `user`) VALUES
(39, 'CSE110', 'Basic Programming Concepts', 'Abrar Salehin', 'CSE', 'Everyday from 2PM to 5PM', 'abrar'),
(40, 'CSE221', 'Basic algorithms', 'Mohammad Naqi', 'CSE', 'Saturday from 2PM to 5PM', 'naqi'),
(41, 'EEE417', 'Short circuits and waves', 'Niaz Mohammad', 'EEE', 'Sunday 10AM to 2PM', 'niaz'),
(42, 'EEE325', 'Long Power', 'Abrar Salehin', 'EEE', 'Thursday 2PM to 5AM', 'abrar'),
(43, 'STA201', 'Probability and Statistics ', 'Babul Kalam', 'OTH', 'Monday through Friday 2PM to 5AM', 'kalam'),
(44, 'MAT120', 'Maths', 'Babul Kalam', 'OTH', 'Friday through Thursday 1PM to 5PM', 'kalam');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `userstatus` varchar(8) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `userstatus`) VALUES
(1, 'fahim', '$2y$10$/gBPYzl6gLCyFWNLMNzw4..QisbpJ2UcwqKwO3rAOrjZBy4/U8Hii', '2019-07-03 07:52:00', 'user'),
(2, 'test', '$2y$10$1Iyq0N2SmQI1x.yAHSgFP.pLbenWS.7TYc48aq/hCmb6Lv8OR6obS', '2019-07-03 08:29:56', 'user'),
(3, 'shifat', '$2y$10$8fPDwk/4EOW3hUtvvNM3AOhD/jeAM4O9nyOMHte5pTRsEMKEIuDGC', '2019-07-03 08:31:08', 'user'),
(4, 'faim', '$2y$10$Fioqqjzs6iEMCzo/j/ZmCu0.tIfBCC9UPxLsN8/ZT/sR2yX5dSG/i', '2019-07-21 22:41:51', 'user'),
(6, 'hh', '$2y$10$qTF9.ep9YADUF.gPI8Q3tuunYtZjVH558qvyI3UhmitF6YB2hqFh.', '2019-07-22 09:40:31', 'user'),
(7, 'lol', '$2y$10$p9qji6kQthxSuuJqz5gbpONfH/nMZrXquO7f0KPpnu2nD1fM6G9NG', '2019-07-22 09:58:27', 'user'),
(8, 'abrar', '$2y$10$qypAAknC/A3ULKvggHFzTumZLxCRRMc3yjWctfEF0UiPiWrHCl5Pu', '2019-07-22 14:43:25', 'teacher'),
(9, 'niaz', '$2y$10$m4pzkw0K9CullULogSn4Uul5gWaI3vwxIjIboReG7SApc3J6nLoyG', '2019-07-22 14:43:48', 'user'),
(10, 'naqi', '$2y$10$Lp42hSWOOel1HdpgboN1dOtzPRRPCf5mJNWv4X4djE6hKHE79oy/W', '2019-07-22 14:43:55', 'user'),
(11, 'kalam', '$2y$10$O1wRq7fhpuelfkLH/A6xCuDGOsy1HxVpweZcHsSa/dNIp9YUy5yDS', '2019-07-22 14:44:05', 'user'),
(12, 'hah', '$2y$10$WmwqQiUBONXoTdZSLOdpGe8a8f5T24RjmfELdiqG54i9OO3u17PMy', '2019-07-22 16:02:26', 'user'),
(13, 'admin', '$2y$10$sl9tj58eSLdks5GausH1pueXfMDWOgaaJ4f41fMMeCr6ad2WCevju', '2019-07-22 16:36:11', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
