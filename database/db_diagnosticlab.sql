-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 10:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_diagnosticlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_appointment`
--

CREATE TABLE `tb_appointment` (
  `apt_id` int(10) NOT NULL,
  `test_id` int(10) NOT NULL,
  `apt_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_appointment`
--

INSERT INTO `tb_appointment` (`apt_id`, `test_id`, `apt_code`) VALUES
(1, 23, 'APT00050');

-- --------------------------------------------------------

--
-- Table structure for table `tb_appointment_list`
--

CREATE TABLE `tb_appointment_list` (
  `apt_id` int(10) NOT NULL,
  `code` varchar(100) NOT NULL,
  `user_id` int(10) NOT NULL,
  `schedule` datetime NOT NULL,
  `pres` varchar(150) NOT NULL,
  `price` int(10) NOT NULL,
  `status` int(50) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_appointment_list`
--

INSERT INTO `tb_appointment_list` (`apt_id`, `code`, `user_id`, `schedule`, `pres`, `price`, `status`, `date_created`, `date_updated`) VALUES
(48, 'APT00048', 7, '2023-12-01 14:40:00', '', 0, 0, '2023-11-03 10:11:04', NULL),
(49, 'APT00049', 7, '2023-12-01 14:40:00', '', 6620, 0, '2023-11-03 10:15:28', NULL),
(50, 'APT00050', 7, '2023-12-02 17:47:00', '', 2500, 0, '2023-11-03 10:17:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_test`
--

CREATE TABLE `tb_test` (
  `test_id` int(10) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `test_desc` varchar(400) NOT NULL,
  `price` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_test`
--

INSERT INTO `tb_test` (`test_id`, `test_name`, `test_desc`, `price`) VALUES
(19, 'Blood Test', 'this is a blood test', 120),
(21, 'Suger Test', 'test for suger', 4000),
(23, 'CT Scan', 'scan for ct', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(10) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `gender` varchar(30) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `usertype` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `fname`, `lname`, `gender`, `contact`, `username`, `email`, `pass`, `dob`, `address`, `usertype`, `date_created`, `date_updated`) VALUES
(4, '', '', '', '', 'admin', 'admin@gmail.com', 'admin', '0000-00-00', '', 'admin', '0000-00-00 00:00:00', NULL),
(7, '', '', '', '', 'febin', 'feb.in1434@gmail.com', 'febin', '0000-00-00', '', 'user', '0000-00-00 00:00:00', NULL),
(10, '', '', '', '', 'user', 'user@gmail.com', 'user', '0000-00-00', '', 'user', '0000-00-00 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_appointment`
--
ALTER TABLE `tb_appointment`
  ADD PRIMARY KEY (`apt_id`),
  ADD KEY `test` (`test_id`);

--
-- Indexes for table `tb_appointment_list`
--
ALTER TABLE `tb_appointment_list`
  ADD PRIMARY KEY (`apt_id`),
  ADD KEY `schedule` (`user_id`);

--
-- Indexes for table `tb_test`
--
ALTER TABLE `tb_test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_appointment`
--
ALTER TABLE `tb_appointment`
  MODIFY `apt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_appointment_list`
--
ALTER TABLE `tb_appointment_list`
  MODIFY `apt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_test`
--
ALTER TABLE `tb_test`
  MODIFY `test_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_appointment`
--
ALTER TABLE `tb_appointment`
  ADD CONSTRAINT `test` FOREIGN KEY (`test_id`) REFERENCES `tb_test` (`test_id`);

--
-- Constraints for table `tb_appointment_list`
--
ALTER TABLE `tb_appointment_list`
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
