-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 05:58 PM
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
  `test_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `schedule` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_appointment_list`
--

INSERT INTO `tb_appointment_list` (`apt_id`, `code`, `test_id`, `user_id`, `schedule`, `status`, `date_created`, `date_updated`) VALUES
(11, 'APT00001', 19, 10, '2023-09-15 20:33:00', '', '0000-00-00 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_appointment_list`
--
ALTER TABLE `tb_appointment_list`
  ADD PRIMARY KEY (`apt_id`),
  ADD KEY `schedule` (`user_id`),
  ADD KEY `test` (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_appointment_list`
--
ALTER TABLE `tb_appointment_list`
  MODIFY `apt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_appointment_list`
--
ALTER TABLE `tb_appointment_list`
  ADD CONSTRAINT `test` FOREIGN KEY (`test_id`) REFERENCES `tb_test` (`test_id`),
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
