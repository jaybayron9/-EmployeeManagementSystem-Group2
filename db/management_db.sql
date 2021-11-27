-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 06:59 AM
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
-- Database: `management_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(11) NOT NULL,
  `admin_username` text NOT NULL DEFAULT '',
  `admin_password` text NOT NULL,
  `date_time_created` date NOT NULL DEFAULT current_timestamp(),
  `date_time_updated` date NOT NULL DEFAULT current_timestamp(),
  `remarks` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `admin_username`, `admin_password`, `date_time_created`, `date_time_updated`, `remarks`) VALUES
(1, 'admin123', 'password123', '2021-11-25', '2021-11-25', '');

-- --------------------------------------------------------

--
-- Table structure for table `department_tbl`
--

CREATE TABLE `department_tbl` (
  `department_id` int(11) NOT NULL,
  `department_name` text NOT NULL,
  `department_description` text NOT NULL,
  `department_status` text NOT NULL DEFAULT 'ACTIVE',
  `date_time_created` date NOT NULL DEFAULT current_timestamp(),
  `date_time_updated` date NOT NULL DEFAULT current_timestamp(),
  `remarks` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department_tbl`
--

INSERT INTO `department_tbl` (`department_id`, `department_name`, `department_description`, `department_status`, `date_time_created`, `date_time_updated`, `remarks`) VALUES
(1, 'Finance', 'Finance Department', 'ACTIVE', '2021-11-25', '2021-11-25', ''),
(2, 'Infomation Technology', 'IT Department', 'ACTIVE', '2021-11-25', '2021-11-25', ''),
(3, 'Human Resources', 'HR Department', 'ACTIVE', '2021-11-25', '2021-11-25', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_tbl`
--

CREATE TABLE `employee_tbl` (
  `employee_id` int(11) NOT NULL,
  `employee_fname` text NOT NULL,
  `employee_mname` text NOT NULL,
  `employee_lname` text NOT NULL,
  `department_id` int(11) NOT NULL,
  `employee_status` text NOT NULL DEFAULT 'EMPLOYED',
  `employee_startDate` date NOT NULL,
  `employee_endDate` date NOT NULL,
  `employee_position` text NOT NULL,
  `employee_remarks` text NOT NULL,
  `date_time_created` date NOT NULL DEFAULT current_timestamp(),
  `date_time_updated` date NOT NULL DEFAULT current_timestamp(),
  `remarks` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_tbl`
--

INSERT INTO `employee_tbl` (`employee_id`, `employee_fname`, `employee_mname`, `employee_lname`, `department_id`, `employee_status`, `employee_startDate`, `employee_endDate`, `employee_position`, `employee_remarks`, `date_time_created`, `date_time_updated`, `remarks`) VALUES
(1, 'Jay', 'D.', 'Bayron', 2, 'EMPLOYED', '2021-11-11', '0000-00-00', 'IT', '', '2021-11-27', '2021-11-27', ''),
(2, 'Christian Mar', 'B.', 'Alimpuyo', 1, 'EMPLOYED', '2021-11-28', '0000-00-00', 'Finance', '', '2021-11-27', '2021-11-27', ''),
(3, 'Stephanie', 'A.', 'De Jesus', 3, 'EMPLOYED', '2021-11-25', '0000-00-00', 'Hr', '', '2021-11-27', '2021-11-27', ''),
(4, 'Bernhard', 'O.', 'Reganit', 2, 'EMPLOYED', '2021-11-18', '0000-00-00', 'IT', '', '2021-11-27', '2021-11-27', ''),
(5, 'John Cedric', 'D.', 'Samonte', 2, 'EMPLOYED', '2021-11-25', '0000-00-00', 'IT', '', '2021-11-27', '2021-11-27', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `department_tbl`
--
ALTER TABLE `department_tbl`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `employee_tbl`
--
ALTER TABLE `employee_tbl`
  ADD PRIMARY KEY (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department_tbl`
--
ALTER TABLE `department_tbl`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_tbl`
--
ALTER TABLE `employee_tbl`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
