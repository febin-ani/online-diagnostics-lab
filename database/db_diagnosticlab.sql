-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 05:36 PM
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
-- Table structure for table `tb_appointment_list`
--

CREATE TABLE `tb_appointment_list` (
  `apt_id` int(10) NOT NULL,
  `code` varchar(100) NOT NULL,
  `schedule` datetime NOT NULL,
  `user_id` int(10) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_appointment_test_list`
--

CREATE TABLE `tb_appointment_test_list` (
  `appointment_id` int(10) NOT NULL,
  `test_id` int(10) NOT NULL,
  `data_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(20, 'suger', 'this is a suger test', 200);

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
(2, '', '', '', '', 'kid', 'kid@gmail.com', 'kid', '0000-00-00', '', 'admin', '2023-08-30 07:05:01', NULL),
(4, '', '', '', '', 'admin', 'admin@gmail.com', 'admin', '0000-00-00', '', 'admin', '0000-00-00 00:00:00', NULL),
(7, '', '', '', '', 'febin', 'feb.in1434@gmail.com', 'febin', '0000-00-00', '', 'user', '0000-00-00 00:00:00', NULL),
(8, '', '', '', '', 'anupama', 'anupama44@gmail.com', 'anu', '0000-00-00', '', 'user', '0000-00-00 00:00:00', NULL),
(9, '', '', '', '', 'leya', 'leya@gmail.com', 'leya', '0000-00-00', '', 'user', '0000-00-00 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_appointment_list`
--
ALTER TABLE `tb_appointment_list`
  ADD PRIMARY KEY (`apt_id`),
  ADD KEY `user` (`user_id`);

--
-- Indexes for table `tb_appointment_test_list`
--
ALTER TABLE `tb_appointment_test_list`
  ADD KEY `apt` (`appointment_id`),
  ADD KEY `test` (`test_id`);

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
-- AUTO_INCREMENT for table `tb_appointment_list`
--
ALTER TABLE `tb_appointment_list`
  MODIFY `apt_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_test`
--
ALTER TABLE `tb_test`
  MODIFY `test_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_appointment_list`
--
ALTER TABLE `tb_appointment_list`
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id`);

--
-- Constraints for table `tb_appointment_test_list`
--
ALTER TABLE `tb_appointment_test_list`
  ADD CONSTRAINT `apt` FOREIGN KEY (`appointment_id`) REFERENCES `tb_appointment_list` (`apt_id`),
  ADD CONSTRAINT `test` FOREIGN KEY (`test_id`) REFERENCES `tb_test` (`test_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
