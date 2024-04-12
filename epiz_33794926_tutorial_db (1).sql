-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 10:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33794926_tutorial_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_detail`
--

CREATE TABLE `appointment_detail` (
  `id` int(11) NOT NULL,
  `Mother_Detail` varchar(30) NOT NULL,
  `user_account_name` varchar(35) NOT NULL,
  `Datee` date NOT NULL,
  `Timee` time NOT NULL,
  `mi_id` int(10) NOT NULL,
  `phy_id` int(11) NOT NULL,
  `setted_time` datetime NOT NULL,
  `modified_on` datetime NOT NULL,
  `setted_by` varchar(500) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `FName` varchar(20) NOT NULL,
  `LName` int(22) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `Registered_date` datetime NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `user_account_type` varchar(25) NOT NULL,
  `user_account_name` varchar(15) NOT NULL,
  `password` varchar(250) NOT NULL,
  `Registered_By` varchar(20) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `modified_on` datetime NOT NULL,
  `first_time` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_detail`
--
ALTER TABLE `appointment_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_detail`
--
ALTER TABLE `appointment_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment_detail`
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
