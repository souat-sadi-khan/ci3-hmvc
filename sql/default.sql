-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 06:41 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sadik_global_controller`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `techics_users`
--

CREATE TABLE `techics_users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usertype` int(11) NOT NULL DEFAULT '1',
  `status_user` text,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `dob` date DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `last_activity` int(11) DEFAULT NULL,
  `is_online` tinyint(1) NOT NULL DEFAULT '0',
  `code` int(11) DEFAULT NULL,
  `email_timestamp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `techics_users`
--

INSERT INTO `techics_users` (`id`, `fname`, `lname`, `email`, `usertype`, `status_user`, `username`, `password`, `dob`, `photo`, `last_activity`, `is_online`, `code`, `email_timestamp`) VALUES
(1, 'SOUAT SADI', 'SADIK', 'sk@sk-associates.org', 1, '1', 'Sadik Khan', 'ZmdoaWprbG0=', '0000-00-00', 'uploads/profiles/9650.png', 1700240186, 1, NULL, NULL),
(25, 'Mr', 'Admin', 'admin@admin.com', 1, '1', 'IT Support', 'ZmdoaWprbG0=', '0000-00-00', NULL, 1700071747, 1, NULL, NULL),
(27, 'Mr ', 'Admin', 'admin@gmail.com', 1, '1', 'admin', 'ZmdoaWprbG0=', '2021-08-22', NULL, NULL, 0, NULL, NULL),
(28, 'Rakibul', 'Hasan', 'rh@sk-associates.org', 1, '1', 'Rakibul Hasan', 'ZmdoaWprbG0=', '0000-00-00', 'uploads/profiles/9650.png', 1684733395, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `techics_users`
--
ALTER TABLE `techics_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `techics_users`
--
ALTER TABLE `techics_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;