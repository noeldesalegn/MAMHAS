-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 10:22 PM
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
-- Database: `mamhas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_detail`
--

CREATE TABLE `appointment_detail` (
  `a_id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `datee` date NOT NULL,
  `timee` time NOT NULL,
  `mother_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `info_name` varchar(250) NOT NULL,
  `info_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m1`
--

CREATE TABLE `m1` (
  `apid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `datee` date NOT NULL,
  `timee` time NOT NULL,
  `mrid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m1`
--

INSERT INTO `m1` (`apid`, `fname`, `datee`, `timee`, `mrid`) VALUES
(27, 'fdnhzd', '2023-05-25', '01:38:00', 38),
(35, 'fdnhzde', '2023-05-09', '00:30:00', 38),
(37, 'dhsfhs', '2023-05-09', '10:43:00', 35),
(40, 'dhsfhs', '2023-05-03', '10:47:00', 35),
(42, 'dhsfhs', '2023-05-10', '23:50:00', 35),
(44, 'dhsfhe', '2023-05-20', '17:00:00', 35),
(46, 'nnnn', '2023-05-25', '17:03:00', 34),
(47, 'nnnn', '2023-05-31', '18:39:00', 34),
(48, 'fdnhzde', '2023-06-04', '11:32:00', 38);

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `medication_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `allergies` varchar(100) NOT NULL,
  `prescription` varchar(100) NOT NULL,
  `mrid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`medication_id`, `fname`, `disease`, `allergies`, `prescription`, `mrid`) VALUES
(3, 'dhsfhs', 'Diseasep', 'Allergiespsrtgqa', 'Prescriptionp', 35),
(21, 'nnnn', 'aedrhw', 'ethbw', 'qer', 34),
(23, 'nnnn', 'Disease', 'Allergies', 'Prescription', 34),
(24, 'dfnx', 'Disease', 'Allergiese', 'Prescription', 39),
(25, 'nnnn', 'Disease', 'Allergies', 'Prescription', 34);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `description` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_account_type` varchar(15) NOT NULL,
  `user_account_name` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` varchar(211) NOT NULL,
  `name` varchar(20) NOT NULL,
  `tmp_name` varchar(22) NOT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `age`, `marital_status`, `phone_no`, `description`, `email`, `password`, `user_account_type`, `user_account_name`, `address`, `modified_on`, `image`, `name`, `tmp_name`, `size`, `type`) VALUES
(27, 'noel', 'nnnn', '33', 'Single', '+251901336536fd', '', 'nbekele8@g.com', 'nbekele8@g.com', 'admin', 'shakir.abdula@f', 'aedaacadfgdggdfn', '2023-04-24 06:26:45', '', '', '', 0, ''),
(30, 'dhsfhs', 'sdts', '33', 'Single', '+251901336537', '', 'jojo@gmail.com', 'noel1117', 'physician', 'noel1117', 'shakir.abdula@fb.apen.com', '2023-06-13 16:34:00', '', '', '', 0, ''),
(34, 'nnnn', 'BEKELE', '33', 'Married', '+251901336737', '', 'sha@fb.appen.com', 'sha@fb.appen.com', 'mother', 'sha@fb.appen.co', 'aedaacafbsfsnfsghssd', '2023-05-25 11:34:21', '', '', '', 0, ''),
(35, 'dhsfhe', 'bekelee', '12', 'Singlee', '+251901336536', '', 'jojo1@gmail.com', 'noel11', 'mother', 'noel11', 'jojo1@gmail.com', '2023-05-29 11:45:46', '', '', '', 0, ''),
(38, 'fdnhzde', 'zdtjn', '55', 'Single', '+251901336536', '', 'jojo2@gmail.com', 'jojo2@gmail.com', 'mother', 'jojo2@gmail.com', 'jojo2@gmail.com', '2023-05-21 22:00:50', '', '', '', 0, ''),
(39, 'dfnx', 'dn', '44', 'Single', '+251901336537', '', 'jojo44@gmail.com', 'jojo44@gmail.com', 'mother', 'jojo44@gmail.co', 'shakir.abdula@fb.apen.com', '2023-04-28 13:45:22', '', '', '', 0, ''),
(40, 'nnnndgfs', 'wergqerg', '22', 'Single', '+251901336537', '', 'jojo2121@gmail.com', 'jojo2121@gmail.', 'admin', 'jojo2121@gmail.', 'dtnhstyfgnsjyms', '2023-05-25 11:32:48', '', '', '', 0, ''),
(41, 'fdnhzdee', 'bekelee', '32', 'Single', '+251901336737', '', 'abelmiki2121@gmail.com', 'abelmiki2121@gmail.com', 'fpworker', 'mom1', 'aedaacafbsfsnfsghssd', '2023-05-30 17:07:29', '', '', '', 0, ''),
(42, 'fdnhzdee', 'bekelee', '33', 'Divorced', '+251901336737', '', 'abelmiki2121@gmail.com', 'abelmiki2121@gmail.com', 'fpworker', 'mom1', 'mom1', '2023-05-30 17:10:00', '', '', '', 0, ''),
(43, 'fdnhzdee', 'bekelee', '55', 'Single', '+251901336737', '', 'abelmiki2121@gmail.com', 'abelmiki2121@gmail.com', 'fpworker', 'abelmiki2121@gm', 'cgkgh', '2023-05-30 17:12:19', '', '', '', 0, ''),
(44, 'fdnhzdee3425', 'bekelee3425', '3333', 'Single', '+251901336737', '', 'abelmi@gmail.com', 'abelmi@gmail.com', 'fpworker', 'abelmiki2121@gm', 'mom11', '2023-05-30 17:18:35', '', '', '', 0, ''),
(45, 'no2l', 'bekelee', '4554', 'Divorced', '+251901336737', '', 'abelmiki2121@gmail.com', 'abelmiki2121@gmail.com', 'physician', 'no21', 'aedaacafbsfsnfsghssd', '2023-06-11 14:22:15', '', '', '', 0, ''),
(46, 'fdnhzdeGD', 'bekelee', '65', 'Widowed', '+251901336737', '', 'abelmiki2121@gmail.com', 'abelmiki2121@gmail.com', 'admin', 'no2121', 'aedaacafbsfsnfsghssd', '2023-06-11 14:38:26', '', '', '', 0, ''),
(47, 'fdnhzdee', 'IFLIYDKUY', '55', 'Single', '+251901336737', '', 'abelmiki2121@gmail.com', 'abelmiki2121@gmail.com', 'admin', 'noel000', 'aedaacafbsfsnfsghssd', '2023-06-13 16:34:58', '', '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_detail`
--
ALTER TABLE `appointment_detail`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `test` (`mother_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m1`
--
ALTER TABLE `m1`
  ADD PRIMARY KEY (`apid`),
  ADD KEY `test21` (`mrid`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`medication_id`),
  ADD KEY `tt` (`mrid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_detail`
--
ALTER TABLE `appointment_detail`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m1`
--
ALTER TABLE `m1`
  MODIFY `apid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `medication_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medication`
--
ALTER TABLE `medication`
  ADD CONSTRAINT `tt` FOREIGN KEY (`mrid`) REFERENCES `register` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
