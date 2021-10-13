-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 12:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `date_time_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_time_updated` datetime NOT NULL DEFAULT current_timestamp(),
  `remarks` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `dept_name`, `date_time_created`, `date_time_updated`, `remarks`) VALUES
(1, 'Hr Department', '2021-09-30 09:18:31', '2021-09-30 09:18:31', ''),
(2, 'It Department ', '2021-09-30 09:18:31', '2021-09-30 09:18:31', ''),
(3, 'Finance Department', '2021-09-30 15:20:47', '2021-09-30 15:20:47', '');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `gender` char(8) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `city` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department_id` int(11) NOT NULL,
  `date_time_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_time_updated` datetime NOT NULL DEFAULT current_timestamp(),
  `remarks` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `fullname`, `address`, `gender`, `mobile`, `city`, `company`, `position`, `email`, `department_id`, `date_time_created`, `date_time_updated`, `remarks`) VALUES
(21, 'Cedric', '125', 'none', '0909090', 'Manila', 'ABC', 'CEO', 'cedric@gmail.com', 0, '2021-10-06 23:09:58', '2021-10-06 23:09:58', ''),
(23, 'Jc Samonte', '1223', 'none', '13213', 'Manila', '232', 'weq', 'aew@gmail.com', 0, '2021-10-07 00:15:20', '0000-00-00 00:00:00', ''),
(25, 'Cedric', '125', 'male', '0909090', 'Manila', 'ABC', 'wa@gmal.com', 'cedric@gmail.com', 0, '2021-10-09 14:41:30', '2021-10-09 14:41:30', ''),
(26, 'cedassadasd awe', '125', 'none', '0909090', 'Manilas', 'ABC', 'wewws', 'cedric@gmail.com', 3, '2021-10-10 11:13:43', '2021-10-10 11:13:43', ''),
(27, 'Cedric Samonte', '125', 'none', '0909090', 'Manila', 'ABC', 'cc@gmail.com', 'cedric@gmail.com', 1, '2021-10-10 20:15:28', '2021-10-10 20:15:28', ''),
(28, 'Luffymonkey', '234', 'none', '0909090909', 'Bundok', 'ABC', 'CCC', 'Wew@gmail', 2, '2021-10-10 20:18:43', '2021-10-10 20:18:43', ''),
(29, 'Cedric Samonte', '125', 'male', '0909090', ' Manila', 'ABC', 'AAA', 'cedric@gmail.com', 1, '2021-10-11 21:44:17', '2021-10-11 21:44:17', '');

-- --------------------------------------------------------

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
