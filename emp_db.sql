-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 06:09 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management`
--
CREATE DATABASE IF NOT EXISTS `management` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `management`;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department` varchar(20) DEFAULT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL,
  `remarks` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `Department_id` int(11) NOT NULL,
  `f_name` varchar(20) DEFAULT NULL,
  `m_name` varchar(20) DEFAULT NULL,
  `l_name` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `b_date` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `c_number` int(11) DEFAULT NULL,
  `h_number` int(11) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL,
  `remarks` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(20) DEFAULT NULL,
  `m_name` varchar(20) DEFAULT NULL,
  `l_name` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `c_number` int(11) DEFAULT NULL,
  `h_number` int(11) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL,
  `remarks` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
