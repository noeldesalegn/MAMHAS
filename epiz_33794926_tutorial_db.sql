-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql300.epizy.com
-- Generation Time: Jun 25, 2023 at 02:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `m_id` int(10) NOT NULL,
  `setted_time` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime NOT NULL,
  `setted_by` varchar(500) NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_detail`
--

INSERT INTO `appointment_detail` (`id`, `Mother_Detail`, `user_account_name`, `Datee`, `Timee`, `m_id`, `setted_time`, `modified_on`, `setted_by`, `status`) VALUES
(15, 'Noel', 'Noel64', '2023-07-04', '11:11:00', 15, '2023-05-22 08:53:42', '2023-06-25 08:42:23', 'Abdul12', 'Active'),
(51, 'Kadija', 'Kadija12', '2023-06-30', '21:00:00', 44, '2023-06-24 14:10:10', '2023-06-24 14:10:10', 'Abdul12', 'Active'),
(29, 'Ajabiya', 'Ajabiya12', '2023-06-30', '12:12:00', 8, '2023-06-15 03:00:28', '2023-06-19 04:40:05', 'Abdul12', 'Active'),
(30, 'Muna', 'Muna12', '2023-06-26', '11:11:00', 7, '2023-06-15 03:08:46', '2023-06-19 04:40:05', 'Abdul12', 'Active'),
(31, 'Kalisaa', 'Kalisa12', '2023-06-24', '13:12:00', 16, '2023-06-15 03:19:40', '2023-06-25 03:41:57', 'Abdul12', 'Elapsed'),
(44, 'Muna', 'Muna12', '2023-06-24', '11:11:00', 7, '2023-06-23 01:08:04', '2023-06-25 03:41:57', 'Abdul12', 'Elapsed'),
(34, 'Kalisaa', 'Kalisa12', '2023-06-29', '12:08:00', 16, '2023-06-17 16:31:17', '2023-06-19 05:24:48', 'Abdul12', 'Active'),
(35, 'Kalisaa', 'Kalisa12', '2023-06-25', '13:37:00', 16, '2023-06-17 16:37:17', '2023-06-19 04:40:05', 'Abdul12', 'Elapsed'),
(43, 'Muna', 'Muna12', '2023-06-27', '11:11:00', 7, '2023-06-23 01:04:37', '2023-06-23 01:04:37', 'Abdul12', 'Active'),
(38, 'Ajabiya', 'Ajabiya12', '2023-06-23', '12:20:00', 8, '2023-06-19 15:08:35', '2023-06-23 01:42:03', 'Abdul12', 'Elapsed'),
(39, 'Muna', 'Muna12', '2023-06-22', '16:34:00', 7, '2023-06-21 09:32:09', '2023-06-23 01:04:08', 'Abdul12', 'Elapsed'),
(52, 'Ajabiya', 'Ajabiya12', '2023-06-27', '00:09:00', 8, '2023-06-25 04:42:50', '2023-06-25 04:42:50', 'Abdul12', 'Active'),
(37, 'Ajabiya', 'Ajabiya12', '2023-07-07', '11:11:00', 8, '2023-06-19 05:30:14', '2023-06-23 01:02:50', 'Abdul12', 'Active'),
(49, 'Noel', 'Noel12', '2023-07-02', '17:31:00', 3, '2023-06-23 16:32:43', '2023-06-23 16:32:43', 'Abdul12', 'Active'),
(48, 'Noel', 'Noel12', '2023-06-25', '01:00:00', 3, '2023-06-23 04:57:46', '2023-06-23 04:57:46', 'Abdul12', 'Elapsed'),
(47, 'Noel', 'noel2121', '2023-06-24', '05:51:00', 18, '2023-06-23 04:52:40', '2023-06-25 03:41:57', 'Abdul12', 'Elapsed'),
(40, 'Noel', 'Noel12', '2023-06-30', '19:16:00', 3, '2023-06-22 09:17:00', '2023-06-23 01:02:53', 'Abdul12', 'Active'),
(53, 'Halima', 'Halima12', '2023-08-06', '06:51:00', 17, '2023-06-25 04:53:00', '2023-06-25 04:53:00', 'Abdul12', 'Active'),
(54, 'Noel', 'Noel12', '2023-08-09', '11:55:00', 3, '2023-06-25 04:55:38', '2023-06-25 04:55:38', 'Cala12', 'Active'),
(56, 'Noel', 'Noel12', '2023-06-26', '13:01:00', 3, '2023-06-25 07:41:10', '0000-00-00 00:00:00', 'Abdul12', 'Active'),
(55, 'Roynaqa', 'Roynaqa12', '2023-06-30', '23:32:00', 42, '2023-06-25 05:22:35', '0000-00-00 00:00:00', 'Abdul12', 'Active'),
(57, 'Bedatu', 'Bedatu12', '2023-06-26', '01:12:00', 11, '2023-06-25 07:44:31', '0000-00-00 00:00:00', 'Abdul12', 'Active'),
(58, 'Halima', 'Halima12', '2023-06-29', '01:02:00', 17, '2023-06-25 07:46:08', '0000-00-00 00:00:00', 'Abdul12', 'Active'),
(59, 'Halima', 'Halima12', '2023-06-30', '14:45:00', 17, '2023-06-25 07:58:51', '0000-00-00 00:00:00', 'Abdul12', 'Active'),
(60, 'Noel', 'Noel64', '2023-06-28', '12:27:00', 15, '2023-06-25 08:00:36', '2023-06-25 08:41:14', 'Abdul12', 'Active'),
(61, 'Noel', 'Noel64', '2023-06-30', '12:27:00', 15, '2023-06-25 08:16:16', '0000-00-00 00:00:00', 'Abdul12', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(10) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Phone_no` int(15) NOT NULL,
  `Message` longtext NOT NULL,
  `Sent_date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `Name`, `Email`, `Phone_no`, `Message`, `Sent_date`) VALUES
(1, 'Hafiz', 'hafex@gmail.com', 909090909, 'Very Good !!', '2023-06-18 07:12:19'),
(2, 'noel', 'nbekele@gmail.com', 0, 'date 6/21/2023 test 1 from Noel12', '2023-06-21 06:49:24'),
(3, 'abdul', 'nbekele@gmail.com', 0, 'the system is working!!', '2023-06-22 09:20:57'),
(4, 'Miftah', '34wr@s.com', 1666666676, 'Good Work Excellent \'', '2023-06-22 15:43:44'),
(5, 'bilal', 'efrewf@w.com', 2147483647, 'good ', '2023-06-22 15:48:04'),
(6, 'Mubarak', 'mube@df.com', 2147483647, 'Google.com', '2023-06-22 15:49:56'),
(7, 'noel', 'nbekele@gmail.com', 2147483647, 'thwtrherrjere', '2023-06-24 15:41:12'),
(8, 'Abdurahman', 'dgsergt@jg.com', 988876555, 'very good', '2023-06-25 11:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `Fp worker`
--

CREATE TABLE `Fp worker` (
  `Fp_id` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `History`
--

CREATE TABLE `History` (
  `hist_id` varchar(10) NOT NULL,
  `m_id` varchar(10) NOT NULL,
  `Ph_id` varchar(10) NOT NULL,
  `date/time` datetime NOT NULL,
  `descriptoin` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `info_id` int(11) NOT NULL,
  `info_name` varchar(6000) NOT NULL,
  `info_type` varchar(50) NOT NULL,
  `information` longtext NOT NULL,
  `uploader` text NOT NULL,
  `uploaded_time` datetime NOT NULL,
  `caption` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`info_id`, `info_name`, `info_type`, `information`, `uploader`, `uploaded_time`, `caption`) VALUES
(1, 'information', 'Text', 'During the first trimester your body undergoes many changes. Hormonal changes affect almost every organ system in your body. These changes can trigger symptoms even in the very first weeks of pregnancy. Your period stopping is a clear sign that you a', 'Abdul12', '2023-06-17 03:12:14', ''),
(2, 'info', 'Text', 'During the first trimester your body undergoes many changes. Hormonal changes affect almost every organ system in your body. These changes can trigger symptoms even in the very first weeks of pregnancy. Your period stopping is a clear sign that you a', 'Abdul12', '2023-06-17 03:12:14', ''),
(3, 'info', 'Text', 're pregnant. Other changes may include:\r\nExtreme tiredness\r\nTender, swollen breasts. Your nipples might also stick out.\r\nUpset stomach with or without throwing up (morning sickness)\r\nCravings or distaste for certain foods\r\nMood swings\r\nConstipation (', 'Abdul12', '2023-06-17 03:12:14', ''),
(4, 'info', 'Text', 'Most women find the second trimester of pregnancy easier than the first. But it is just as important to stay informed about your pregnancy during these months.\r\nYou might notice that symptoms like nausea and fatigue are going away. But other new, more noticeable changes to your body are now happening. Your abdomen will expand as the baby continues to grow. And before this trimester is over, you will feel your baby beginning to move!\r\n\r\nAs your body changes to make room for your growing baby, you may have:\r\n\r\nBody aches, such as back, abdomen, groin, or thigh pain\r\nStretch marks on your abdomen, breasts, thighs, or buttocks\r\nDarkening of the skin around your nipples\r\nA line on the skin running from belly button to pubic hairline\r\nPatches of darker skin, usually over the cheeks, forehead, nose, or upper lip. Patches often match on both sides of the face. This is sometimes called the mask of pregnancy.\r\nNumb or tingling hands, called carpal tunnel syndrome\r\nItching on the abdomen, palms, and soles of the feet. (Call your doctor if you have nausea, loss of appetite, vomiting, jaundice or fatigue combined with itching. These can be signs of a serious liver problem.)\r\nSwelling of the ankles, fingers, and face. (If you notice any sudden or extreme swelling or if you gain a lot of weight really quickly, call your doctor right away. This could be a sign of preeclampsia.)', 'Abdul12', '2023-06-17 03:12:14', ''),
(5, 'info', 'Text', 'hello', 'Abdul12', '2023-06-17 03:12:14', ''),
(6, 'info', 'Text', 'ok hi', 'Abdul12', '2023-06-17 03:12:14', ''),
(7, 'info', 'Text', 'Image', 'Abdul12', '2023-06-17 03:12:14', ''),
(8, 'info', 'Text', 'image', 'Abdul12', '2023-06-17 03:12:14', ''),
(9, 'info', 'Text', 'There is steps for this activity\r\nStep1 \r\nStep2\r\nStep3', 'Abdul12', '2023-06-17 03:12:14', ''),
(10, 'planning', 'Text', 'Frgtt', 'Abdul12', '2023-06-17 03:12:14', ''),
(11, 'contraciption', 'Image', 'img_1_1686861434848.jpg', 'Miftah12', '2023-06-17 03:12:14', ''),
(12, 'method', 'Image', 'img_1_1686861434848.jpg', 'Miftah12', '2023-06-17 03:12:14', ''),
(13, 'family planning', 'Text', 'Hello everyone!', 'Abdul12', '2023-06-17 03:12:14', ''),
(14, 'clinic', 'Text', 'Yes', 'Abdul12', '2023-06-17 03:12:14', ''),
(15, 'hospital', 'Text', 'Goal', 'Abdul12', '2023-06-17 03:12:14', ''),
(16, 'system', 'Text', 'Ok', 'Abdul12', '2023-06-17 03:12:14', ''),
(17, 'mathernal', 'Video', '20230612_035512.mp4', 'Abdul12', '2023-06-17 03:12:14', ''),
(18, 'mother', 'Text', 'Hayyee', 'Abdul12', '2023-06-17 03:12:14', ''),
(19, 'health', 'Image', 'medications.png', 'Abdul12', '2023-06-17 03:12:14', ''),
(20, 'prepare', 'File', 'Chapter~4.pptx', 'Abdul12', '2023-06-17 03:12:14', ''),
(21, 'entrance', 'Text', 'Hello', 'Abdul12', '2023-06-17 03:12:14', ''),
(22, 'phone', 'Image', 'IMG_20230611_154349_636.jpg', 'Abdul12', '2023-06-17 03:12:14', ''),
(23, 'mobile', 'Image', 'momicon.png', 'Abdul12', '2023-06-17 03:12:14', 'Image2'),
(24, 'pro1', 'Text', 'H', 'Abdul12', '2023-06-17 03:12:14', ''),
(25, 'pro', 'Text', 'Hany ', 'Abdul12', '2023-06-17 03:12:14', ''),
(26, 'hold', 'Text', 'Haree', 'Abdul12', '2023-06-17 03:12:14', ''),
(27, 'odeeffannoo', 'Video', '20230612_035512.mp4', 'Abdul12', '2023-06-17 03:12:14', 'Video1'),
(28, 'audio', 'Audio', 'Voice 002.m4a', 'Abdul12', '2023-06-17 03:12:14', 'Audio1'),
(29, 'post', 'Text', 'Hdhu', 'Abdul12', '2023-06-17 03:12:14', ''),
(30, 'entertainnment', 'Video', '7df20b5c9d53caed7006b2dcaa2d8f47.mp4', 'Abdul12', '2023-06-17 03:12:14', '1 st try '),
(31, 'health', 'Text', 'Txt', 'Abdul12', '2023-06-17 03:12:14', ''),
(32, 'audio', 'Audio', 'Samsung-Galaxy-S9-Over-the-Horizone-2018-Ringtone.mp3', 'Abdul12', '2023-06-17 03:12:14', 'Audio1'),
(33, 'photo', 'Image', '20230614_173652.jpg', 'Abdul12', '2023-06-17 03:12:14', 'Try'),
(34, 'info', 'Text', 'Very good!', 'Miftah12', '2023-06-17 03:12:14', ''),
(35, 'info', 'Text', 'Www.google.com', 'Miftah12', '2023-06-17 03:12:14', ''),
(36, 'info', 'Text', 'Hayydudjfvfh  www.w3schools.com bah', 'Miftah12', '2023-06-17 03:12:14', ''),
(37, 'Pregnancy!', 'Text', 'Step 1', 'Cala12', '2023-06-17 03:12:14', 'no_caption'),
(38, 'Exercise ', 'Image', 'icon.png', 'Cala12', '2023-06-17 03:12:14', 'Exercise 1'),
(39, 'try', 'Image', 'Desert.jpg', 'Abdurahman12', '2023-06-21 06:10:51', 'photo2'),
(40, 'Message', 'Text', 'Dear mother', 'Abdul12', '2023-06-21 06:21:47', 'no_caption'),
(41, 'Message', 'Text', 'How are you ?', 'Abdul12', '2023-06-21 06:23:03', 'no_caption'),
(42, 'Poem', 'Text', 'Mom is such\r\nA special word\r\nThe loveliest\r\nI\'ve ever heard.\r\n\r\nA toast to you\r\nAbove all the rest\r\nMom, you\'re\r\nSo special\r\nYou are simply\r\nthe best!\r\n\r\náŠ¥áˆ›\r\n\r\nâ€¹áŠ¥áˆ›â€º áˆá‹© á‰ƒáˆ áŠá‹\r\ná‰ áŒ£áˆ á‰°á‹ˆá‹³áŒ…\r\náˆ áˆá‰¼ áŠ¨áˆ›á‹á‰€á‹!\r\n\r\ná‰¥áˆ­áŒ­á‰†áŠ á‰½áŠ•áŠ• áŠ¥áŠ“áŠ•áˆ³áˆáˆ½á£\r\náŠ¨áˆáˆ‰áˆ á‰ áˆ‹á‹­ áŠ¨áá‰¥áˆˆáˆ½á£\r\nâ€¹áŠ¥áˆ›â€º áŠ áŠ•á‰ºáŠ® áˆá‹© áŠáˆ½\r\ná‰ á‰ƒ á‰ á‰µáŠ•áˆ¹ áŠ á‰»áˆ á‹¨áˆˆáˆ½!\r\n(á‰ áˆ”áˆˆáŠ• áˆµá‰²áŠáˆ­ áˆ«á‹­áˆµ)\r\n\r\nAlem Hailu Gabre Kristos\r\n\r\n', 'Abdul12', '2023-06-21 07:15:48', 'no_caption'),
(43, 'this is pic of mamhas', 'Image', 'hospital (1).png', 'Abdul12', '2023-06-22 09:14:28', '#mamhas'),
(44, 'Photo', 'Image', '767586.avif', 'Abdul12', '2023-06-24 13:57:55', 'Avif type image'),
(45, 'Message', 'Image', '6e3ddc98311b49eb643513e5f01851a51467020976-nm.png', 'Abdul12', '2023-06-24 14:04:04', 'Image 12'),
(46, 'Photo', 'Image', 'Rotating_earth_(large).gif', 'Abdul12', '2023-06-24 14:31:41', 'Gif image'),
(47, 'Tttt', 'Text', 'Tttttttt', 'Bilal12', '2023-06-25 02:16:55', 'no_caption'),
(48, 'Tttt', 'Text', 'Ttttttt', 'Noel123', '2023-06-25 02:18:41', 'no_caption');

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `medication_id` int(10) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `user_account_name` varchar(200) NOT NULL,
  `disease` varchar(200) NOT NULL,
  `allergies` varchar(200) NOT NULL,
  `prescription` varchar(200) NOT NULL,
  `m_id` int(10) NOT NULL,
  `registered_date` datetime NOT NULL DEFAULT current_timestamp(),
  `registered_by` varchar(200) NOT NULL,
  `modified_on` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`medication_id`, `FName`, `user_account_name`, `disease`, `allergies`, `prescription`, `m_id`, `registered_date`, `registered_by`, `modified_on`) VALUES
(15, 'Noel', 'Noel12', 'T', 'T', 'T', 3, '2023-06-25 04:58:10', 'Cala12', ''),
(16, 'Kalisaa', 'Kalisa12', 'Fhhv', 'Vjvv', 'Gugg', 16, '2023-06-25 11:24:04', 'Abdul12', ''),
(11, 'Noel', 'Noel12', 'dimo Disease', 'dimo Allergies', 'dimo Prescription', 3, '2023-06-16 11:03:37', 'Abdul12', '2023-06-16 11:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(10) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `sender_id` int(10) NOT NULL,
  `reciever_id` int(10) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `reciever` varchar(50) NOT NULL,
  `isfileattached` tinyint(1) NOT NULL,
  `image` text NOT NULL,
  `video` text NOT NULL,
  `msgcontent` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `time`, `sender_id`, `reciever_id`, `sender`, `reciever`, `isfileattached`, `image`, `video`, `msgcontent`) VALUES
(1, '2023-06-20 09:31:58', 9, 7, 'Cala12', 'Muna12', 0, 'user.png', '1.mp4', 'Hayyee'),
(2, '2023-06-20 09:32:56', 9, 7, 'Cala12', 'Muna12', 0, 'user.png', '1.mp4', 'Hayyee'),
(3, '2023-06-20 09:39:19', 16, 9, 'Kalisa12', 'Cala12', 0, '', '', 'Hayyee1'),
(4, '2023-06-20 11:02:04', 15, 4, 'Noel64', 'Abdul12', 0, '', '', 'hi abdul it Noel64 on 6/20/2023'),
(5, '2023-06-20 11:15:25', 16, 4, 'Kalisa12', 'Abdul12', 0, '', '', 'Cala'),
(6, '2023-06-20 12:08:19', 4, 16, 'Abdul12', 'Kalisa12', 0, '', '', 'First message'),
(7, '2023-06-20 12:22:00', 16, 4, 'Kalisa12', 'Abdul12', 0, '', '', 'Yes doctor'),
(8, '2023-06-20 12:23:20', 16, 4, 'Kalisa12', 'Abdul12', 0, '', '', '12'),
(9, '2023-06-20 12:23:37', 4, 16, 'Abdul12', 'Kalisa12', 0, '', '', '13'),
(10, '2023-06-20 12:24:52', 16, 4, 'Kalisa12', 'Abdul12', 0, '', '', '14'),
(11, '2023-06-20 12:55:26', 4, 16, 'Abdul12', 'Kalisa12', 0, '', '', 'rf'),
(12, '2023-06-20 14:51:22', 15, 4, 'Noel64', 'Abdul12', 0, '', '', 'GG'),
(13, '2023-06-20 14:51:47', 15, 4, 'Noel64', 'Abdul12', 0, '', '', 'HI'),
(14, '2023-06-20 14:52:27', 4, 16, 'Abdul12', 'Kalisa12', 0, '', '', 'hi'),
(15, '2023-06-20 16:20:21', 3, 4, 'Noel12', 'Abdul12', 0, '', '', 'HI'),
(16, '2023-06-20 16:20:32', 3, 4, 'Noel12', 'Abdul12', 0, '', '', '2'),
(17, '2023-06-20 17:01:08', 4, 16, 'Abdul12', 'Kalisa12', 0, '', '', 'hi2'),
(18, '2023-06-20 17:08:26', 4, 16, 'Abdul12', 'Kalisa12', 0, '', '', 'hayyee'),
(19, '2023-06-21 01:45:40', 16, 4, 'Kalisa12', 'Abdul12', 0, '', '', 'Hawwii'),
(20, '2023-06-21 02:37:16', 7, 9, 'Muna12', 'Cala12', 0, '', '', 'Hello'),
(21, '2023-06-21 02:55:23', 4, 16, 'Abdul12', 'Kalisa12', 0, '', '', 'Kalisa'),
(22, '2023-06-21 02:55:37', 16, 4, 'Kalisa12', 'Abdul12', 0, '', '', 'Yes doctor'),
(23, '2023-06-21 03:08:02', 16, 4, 'Kalisa12', 'Abdul12', 0, '', '', 'Doctor'),
(24, '2023-06-21 04:43:05', 4, 7, 'Abdul12', 'Muna12', 0, '', '', 'Hello Muna'),
(25, '2023-06-21 04:43:59', 7, 4, 'Muna12', 'Abdul12', 0, '', '', 'yes Doctor'),
(26, '2023-06-21 04:44:16', 7, 4, 'Muna12', 'Abdul12', 0, '', '', 'how are you ?'),
(27, '2023-06-21 04:46:09', 7, 4, 'Muna12', 'Abdul12', 0, '', '', 'I am fine doctor.'),
(28, '2023-06-21 04:46:35', 7, 4, 'Muna12', 'Abdul12', 0, '', '', 'what can i help you ?'),
(29, '2023-06-21 04:47:01', 7, 4, 'Muna12', 'Abdul12', 0, '', '', 'sorry doctor '),
(30, '2023-06-21 04:47:29', 4, 7, 'Abdul12', 'Muna12', 0, '', '', 'No problem'),
(31, '2023-06-21 04:54:18', 7, 4, 'Muna12', 'Abdul12', 0, '', '', 'Can I help you ?'),
(32, '2023-06-21 04:55:26', 4, 7, 'Abdul12', 'Muna12', 0, '', '', 'Yes please '),
(33, '2023-06-21 04:56:24', 7, 9, 'Muna12', 'Cala12', 0, '', '', 'yes cala'),
(34, '2023-06-21 04:56:29', 4, 7, 'Abdul12', 'Muna12', 0, '', '', 'Yes please '),
(35, '2023-06-21 05:01:17', 3, 4, 'Noel12', 'Abdul12', 0, '', '', 'Fekadu\r\n+251915000460'),
(36, '2023-06-21 05:02:48', 45, 3, 'Abdurahman12', 'Noel12', 0, '', '', 'Hello Noel !'),
(37, '2023-06-21 05:05:51', 4, 3, 'Abdul12', 'Noel12', 0, '', '', 'Hi noel12 '),
(38, '2023-06-21 05:08:48', 45, 3, 'Abdurahman12', 'Noel12', 0, '', '', 'Example\r\n\r\nThe following query fetches the ID, Name and Salary fields from the CUSTOMERS table, where the salary is greater than 2000 OR the age is less than 25 years.'),
(39, '2023-06-21 05:13:39', 4, 3, 'Abdul12', 'Noel12', 0, '', '', 'T'),
(40, '2023-06-21 05:16:33', 3, 45, 'Noel12', 'Abdurahman12', 0, '', '', 'áŠ áˆáŒˆá‰£áŠáˆðŸ‘†ðŸ‘†'),
(41, '2023-06-21 05:17:14', 45, 3, 'Abdurahman12', 'Noel12', 0, '', '', 'Ay lememoker new twew'),
(42, '2023-06-21 05:18:18', 3, 45, 'Noel12', 'Abdurahman12', 0, '', '', 'áŠ¥áˆº á‹°á‹ˆáˆáŠ­áˆˆá‰µ ?'),
(43, '2023-06-21 05:18:39', 3, 45, 'Noel12', 'Abdurahman12', 0, '', '', '+251915000460 á‹á‰ƒá‹±'),
(44, '2023-06-21 05:21:52', 45, 3, 'Abdurahman12', 'Noel12', 0, '', '', 'Ok dewilalew '),
(45, '2023-06-21 05:22:22', 3, 45, 'Noel12', 'Abdurahman12', 0, '', '', 'Profile pic aykeyerem'),
(46, '2023-06-21 05:23:38', 45, 3, 'Abdurahman12', 'Noel12', 0, '', '', 'Ay photown nikaw view profile lay'),
(47, '2023-06-21 05:28:12', 45, 3, 'Abdurahman12', 'Noel12', 0, '', '', 'Mokirew ok'),
(48, '2023-06-21 06:25:01', 4, 3, 'Abdul12', 'Noel12', 0, '', '', 'Hafiz'),
(49, '2023-06-21 06:33:17', 4, 44, 'Abdul12', 'Kadija12', 0, '', '', 'Hello Kedija !'),
(50, '2023-06-21 06:34:41', 44, 4, 'Kadija12', 'Abdul12', 0, '', '', 'Yes Doctor'),
(51, '2023-06-21 06:35:11', 44, 4, 'Kadija12', 'Abdul12', 0, '', '', 'i need help please'),
(52, '2023-06-21 06:35:57', 4, 44, 'Abdul12', 'Kadija12', 0, '', '', 'Ok tell me your problem please '),
(53, '2023-06-21 06:39:12', 4, 44, 'Abdul12', 'Kadija12', 0, '', '', '$'),
(54, '2023-06-21 06:41:56', 4, 44, 'Abdul12', 'Kadija12', 0, '', '', 'Ok'),
(55, '2023-06-21 06:42:59', 4, 44, 'Abdul12', 'Kadija12', 0, '', '', ' I\'m ready'),
(56, '2023-06-21 06:43:14', 4, 44, 'Abdul12', 'Kadija12', 0, '', '', ' #Hafiz'),
(57, '2023-06-21 06:47:31', 3, 45, 'Noel12', 'Abdurahman12', 0, '', '', ' ok'),
(58, '2023-06-21 07:10:00', 4, 3, 'Abdul12', 'Noel12', 0, '', '', ' Noel i\'m hafiz'),
(59, '2023-06-21 09:07:42', 4, 16, 'Abdul12', 'Kalisa12', 0, '', '', ' Yes kalisa'),
(60, '2023-06-21 09:28:12', 4, 3, 'Abdul12', 'Noel12', 0, '', '', ' Yes'),
(61, '2023-06-21 12:24:23', 4, 3, 'Abdul12', 'Noel12', 0, '', '', ' Chh'),
(62, '2023-06-21 12:25:01', 4, 3, 'Abdul12', 'Noel12', 0, '', '', ' Ok'),
(63, '2023-06-21 12:26:11', 4, 3, 'Abdul12', 'Noel12', 0, '', '', ' Kg'),
(64, '2023-06-22 09:11:02', 3, 4, 'Noel12', 'Abdul12', 0, '', '', ' Hi abdul12 '),
(65, '2023-06-24 16:23:02', 4, 16, 'Abdul12', 'Kalisa12', 0, '', '', ' https://www.plus2net.com/php_tutorial/whois-online.php'),
(66, '2023-06-24 17:55:54', 4, 16, 'Abdul12', 'Kalisa12', 0, '', '', ' Ok Kalisa'),
(67, '2023-06-24 18:04:22', 16, 4, 'Kalisa12', 'Abdul12', 0, '', '', ' Computer Science is the study of computers and computational systems. Unlike electrical and computer engineers, computer scientists deal mostly with software and software systems; this includes their theory, design, development, and application.'),
(68, '2023-06-24 18:11:16', 3, 45, 'Noel12', 'Abdurahman12', 0, '', '', ' The PHP team is pleased to announce the second testing release of PHP 8.3.0, Alpha 2. This continues the PHP 8.3 release cycle, the rouch outline of which is specified in theÂ PHP Wiki.\r\n\r\nFor source downloads of PHP 8.3.0 Alpha 2 please visitÂ download page.\r\n\r\nPlease carefully test this version and report any issues found in theÂ bug reporting system.\r\n\r\nPlease DO NOT use this version in production, it is an early test version.\r\n\r\nFor more information on the new features and other changes, you can read theÂ NEWSÂ file, or theÂ UPGRADINGÂ file for a complete list of upgrading notes. These files can also be found in the release archive.\r\n\r\nThe next release will be Alpha 3, planned for 6 July 2023.\r\n\r\nThe signatures for this release can be found inÂ the manifestÂ or onÂ the QA site.\r\n\r\nThank you for helping us make PHP better!'),
(69, '2023-06-24 18:15:14', 4, 16, 'Abdul12', 'Kalisa12', 0, '', '', ' Learn PHP\r\n\r\nPHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.\r\n\r\nPHP is a widely-used, free, and efficient alternative to competitors such as Microsoft\'s ASP.'),
(70, '2023-06-24 18:17:54', 4, 16, 'Abdul12', 'Kalisa12', 0, '', '', ' #áŒ¥á‰†áˆ›\r\n\r\ná‹¨2023 á‹¨ \" áˆ¶áˆá‰­ áŠ¢á‰µ \" á‹¨áˆáŒ áˆ« á‹á‹µá‹µáˆ­ áˆá‹áŒˆá‰£ áŠ¥á‹¨á‰°áŠ«áˆ„á‹° á‹­áŒˆáŠ›áˆá¢\r\n\r\ná‰ 6 áŠ¨á‰°áˆžá‰½ áˆ›áˆˆá‰µáˆ á‰ áŠ á‹²áˆµ áŠ á‰ á‰£á£ á‹ˆáˆ‹á‹­á‰³ áˆ¶á‹¶á£ á‹°áˆ´á£ áŒ…áˆ›á£ á‰£áˆ…áˆ­ á‹³áˆ­ áŠ¥áŠ“ á‹µáˆ¬á‹³á‹‹ á‹á‹µá‹µáˆ© á‹­áŠ«áˆ„á‹³áˆá¢\r\n\r\ná‰ á‹šáˆ… áŠ áˆ˜á‰µá£ á‹¨á‹ˆáŒ£á‰¶á‰½áŠ• á‹¨áˆáŒ áˆ« áˆƒáˆ³á‰¦á‰½ á‹ˆá‹° áˆ˜áˆ°áˆ¨á‰³á‹Š áˆ˜áá‰µáˆ„á‹Žá‰½ áˆˆáˆ˜á‰€á‹¨áˆ­ áŠ¥áŠ•á‹²áˆ¨á‹³ á‹¨1,000,000 á‰¥áˆ­ á‹µáŒ‹á áˆ˜á‹˜áŒ‹áŒ€á‰± á‰°áŒˆáˆáŒ¿áˆá¢\r\n\r\ná‹ˆáŒ£á‰¶á‰½ 1 áˆšáˆŠá‹®áŠ• á‰¥áˆ­ á‹¨áˆ¥áˆ« áˆ˜áŠáˆ» (Seed Funding) á‰°áˆ¸áˆ‹áˆš á‰ áˆšá‹«á‹°áˆ­áŒˆá‹ á‹¨ \" Solve IT 2023 \" á‹¨áˆáŒ áˆ« á‹á‹µá‹µáˆ­ áŠ¥áŠ•á‹²áˆ³á‰°á‰ áŒ¥áˆª á‰€áˆ­á‰§áˆá¢\r\n\r\ná‹¨áˆáŒ áˆ« áˆƒáˆ³á‰¥ á‹«áˆ‹á‰½áˆ á‹ˆáŒ£á‰¶á‰½ á‰ á‹šáˆ… https://solveit-et.comÂ  áˆ˜áˆ˜á‹áŒˆá‰¥ á‰µá‰½áˆ‹áˆ‹á‰½áˆá¢ \r\n\r\náˆˆá‰ áˆˆáŒ  áˆ˜áˆ¨áŒƒ âž­\r\nTelegram Bot: @solveit_et_bot\r\nEmail: contact@solveit-et.com\r\nPhone No.: 0991440049\r\n\r\n@tikvahuniversity'),
(71, '2023-06-24 19:10:31', 4, 42, 'Abdul12', 'Roynaqa12', 0, '', '', ' User AgentÂ : Mozilla/5.0 (Linux; Android 13; SAMSUNG SM-A525M) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/19.0 Chrome/102.0.5005.125 Mobile Safari/537.36'),
(72, '2023-06-25 02:07:11', 17, 46, 'Halima12', 'Miftah12', 0, '', '', ' T'),
(73, '2023-06-25 02:20:34', 4, 7, 'Abdul12', 'Muna12', 0, '', '', ' Ok'),
(74, '2023-06-25 03:39:11', 4, 3, 'Abdul12', 'Noel12', 0, '', '', ' Hi noel12'),
(75, '2023-06-25 04:38:16', 17, 9, 'Halima12', 'Cala12', 0, '', '', ' T'),
(76, '2023-06-25 04:45:01', 17, 4, 'Halima12', 'Abdul12', 0, '', '', ' T'),
(77, '2023-06-25 04:45:17', 4, 17, 'Abdul12', 'Halima12', 0, '', '', ' Hi Chala '),
(78, '2023-06-25 04:59:06', 3, 9, 'Noel12', 'Cala12', 0, '', '', ' Altemechegm'),
(79, '2023-06-25 04:59:56', 9, 3, 'Cala12', 'Noel12', 0, '', '', ' T'),
(80, '2023-06-25 10:34:17', 3, 4, 'Noel12', 'Abdul12', 0, '', '', ' hi hafizu ðŸ˜Ž'),
(81, '2023-06-25 10:35:35', 3, 4, 'Noel12', 'Abdul12', 0, '', '', ' Dear Student,   here is some of the contents included in your ppt for  your presentation\r\n1.  Introduction \r\n2.  Statement of problem \r\n3.  General and specific objective \r\n4.  Scope and limitation \r\n5.  Overview of existing system \r\n6.  Updated use case diagram \r\n7.  Updated class diagram \r\n8.  Conclusion the you should show \r\nthe  Implementation ( demo )\r\npls try to make short and precise not more than 15 slides'),
(82, '2023-06-25 11:35:29', 45, 16, 'Abdurahman123', 'Kalisa12', 0, '', '', ' Yet sawiye'),
(83, '2023-06-25 11:35:44', 16, 45, 'Kalisa12', 'Abdurahman123', 0, '', '', ' bet negn '),
(84, '2023-06-25 11:35:56', 45, 16, 'Abdurahman123', 'Kalisa12', 0, '', '', ' Min iyasara'),
(85, '2023-06-25 11:36:10', 16, 45, 'Kalisa12', 'Abdurahman123', 0, '', '', ' project');

-- --------------------------------------------------------

--
-- Table structure for table `mother`
--

CREATE TABLE `mother` (
  `m_id` int(11) NOT NULL,
  `Fname` varchar(25) NOT NULL,
  `Lname` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Phnumber` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Username` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `maritalstatus` text NOT NULL,
  `birthday` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mother`
--

INSERT INTO `mother` (`m_id`, `Fname`, `Lname`, `email`, `password`, `Phnumber`, `address`, `modified_on`, `Username`, `gender`, `maritalstatus`, `birthday`) VALUES
(1, 'Hafiz', 'Juhar', 'haff@gmail.com', '12345678', '091221211', 'dre', '2023-04-01 11:32:33', 'Hafiz1234', 'M', '', 0),
(2, 'Noel', 'Bekele', 'nbekele8@gmail.com', 'love', 'Love', 'Dire Dawa', '2023-04-01 11:31:52', 'noelbekele', 'M', '', 0),
(3, 'hafiz', 'juhar', 'haf123@g.com', '12345', '994', 'dire', '2023-03-31 06:11:33', 'hafex', 'M', '', 0),
(5, 'My ', 'Name', 'ahha@gmail.com', '12345678', '989', 'Yshshzj', '2023-04-03 12:46:59', 'Is', 'M', '', 0),
(6, 'mary', 'juhar', 'mary@g.com', '11111', '092266253', 'dire', '2023-04-28 07:15:35', 'mery', 'F', 'Single', 0),
(7, 'fate', 'ibr', 'fat@g.com', '1234512345', '09090909', 'fadis', '2023-04-04 20:04:25', 'fatex', 'F', 'Diforced', 1990),
(8, 'Emuye', 'Emuye', 'emue@gmail.com', '00000000', 'Ghgh', '5656', '2023-04-08 07:47:17', 'Emuye', 'F', 'Married', 1999),
(9, 'Noel', 'Bekele', 'desalegnbekele2121@gmail.com', '00000000', '0901336536', '2814', '2023-04-09 19:17:29', 'noel', 'M', 'Single', 2000),
(10, '', '', '', '', '', '', '2023-04-28 06:07:56', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `physician`
--

CREATE TABLE `physician` (
  `phy_id` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `FName` varchar(500) NOT NULL,
  `LName` varchar(500) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `marital_status` varchar(15) NOT NULL,
  `Registered_date` datetime NOT NULL DEFAULT current_timestamp(),
  `phone_no` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `user_account_type` varchar(15) NOT NULL,
  `user_account_name` varchar(15) NOT NULL,
  `password` varchar(500) NOT NULL,
  `Registered_By` varchar(500) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `modified_on` datetime NOT NULL,
  `first_time` tinyint(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `FName`, `LName`, `Gender`, `age`, `marital_status`, `Registered_date`, `phone_no`, `email`, `user_account_type`, `user_account_name`, `password`, `Registered_By`, `photo`, `modified_on`, `first_time`) VALUES
(1, 'Hafiz', 'Juhar', 'Male', 26, 'Single', '2000-05-01 00:00:00', '0933357673', 'Hafizjohar@gmail.com', 'admin', 'Haffex', '$2y$10$dWgnsv6IecJkRR4QsbQ5ZOwJUCzqzISs.CDMcx0tj9OO96ryCEHLu', 'Developer', 'images25043.jpg', '2023-06-23 11:26:10', 1),
(18, 'Noel', 'Bekele', 'Male', 24, 'Single', '2000-05-01 00:00:00', '0901336536', 'noel@gmail.com', 'mother', 'noel2121', '$2y$10$WHQ/JUqu8YQ30kErS0B8OOZqsRgBKFKPLRPDIDBx3Ba4a7qF4/91O', 'Admin', 'icon.png', '2023-06-22 09:24:36', 1),
(3, 'Noel', 'Bekele', 'Female', 24, 'Married', '2023-05-11 00:00:00', '0948778787', 'Noel@gmail.com', 'mother', 'Noel12', '$2y$10$bgxo83Q5ETQYuei.96tWweyxWn92rUfRupNOV78Vxt7V9xRRZQJcm', 'Admin', 'IMG_20230621_180606_981.jpg', '2023-06-22 04:24:31', 1),
(4, 'Abdulqadir', 'Abdallah', 'Male', 18, 'Single', '2023-05-12 00:00:00', '0739272712', 'abdulmail@gmail.com', 'physician', 'Abdul12', '$2y$10$H3TxBa2c2/iz1VaVbKowceZhws42hwgceVGz6vvPrU/12nTECqwYm', 'Admin', 'IMG_20230611_190306_167.png', '2023-06-25 12:36:21', 1),
(7, 'Muna', 'Juhar', 'Female', 38, 'Married', '2023-05-14 00:00:00', '091568686', 'muna@gmail.com', 'mother', 'Muna12', '$2y$10$F0TB1MLw1a51xY/fjQtZjuEoACiEiWiJXpaoa2jPTq4dz8MpBDTCq', 'Admin', 'user.png', '2023-06-24 15:23:06', 1),
(8, 'Ajabiya', 'Mohammed', 'Female', 39, 'Married', '2023-05-14 00:00:00', '0915151515', 'Ajabiya@gmail.com', 'mother', 'Ajabiya12', '$2y$10$AvzaJEQLZX8BE9kg4CLlSOlbFnZGZQ4/LXodVDSrN6uiH2ZkUDDny', 'Fp_Worker', '20230528_152457.jpg', '2023-06-19 05:28:50', 0),
(9, 'Cala', 'Anas', 'Male', 31, 'Divorced', '2023-05-14 00:00:00', '0910222222', 'cala@gmail.com', 'physician', 'Cala12', '$2y$10$0QDSzZZYF/ybPoWRJtqnGOekaot2mDOuENj0P6v4OpQKAnOPmaBtC', 'Admin', 'user.png', '2023-06-25 04:54:26', 1),
(10, 'Bilal', 'Abdullah', 'Male', 22, 'Single', '2023-05-16 00:00:00', '0940878895', 'Bilal@gmail.com', 'fpworker', 'Bilal12', '$2y$10$ltl9niHALlGgUpYDOcpJQOaS9SqyXIdHu0DWI1s.wD69qQGDeKZWm', 'Admin', 'user.png', '2023-06-25 02:19:21', 1),
(11, 'Bedatu', 'Nasir', 'Female', 20, 'Married', '2023-05-19 00:00:00', '0975433245', 'bedhatu@gmail.com', 'mother', 'Bedatu12', '$2y$10$AvzaJEQLZX8BE9kg4CLlSOlbFnZGZQ4/LXodVDSrN6uiH2ZkUDDny', 'Admin', 'user.png', '2023-06-07 03:29:27', 0),
(12, 'Noel', 'Bekele', 'Female', 25, 'Single', '2023-05-19 00:00:00', '0915671895', 'noel15@gmail.com', 'mother', 'Noel25', '$2y$10$AvzaJEQLZX8BE9kg4CLlSOlbFnZGZQ4/LXodVDSrN6uiH2ZkUDDny', 'Fp_Worker', 'user.png', '2023-06-07 03:29:27', 0),
(13, 'Salih', 'Kemal', 'Male', 33, 'Single', '2023-05-19 00:00:00', '0922343434', 'salih@gmail.com', 'physician', 'Salih12', '$2y$10$AvzaJEQLZX8BE9kg4CLlSOlbFnZGZQ4/LXodVDSrN6uiH2ZkUDDny', 'Admin', 'user.png', '2023-06-23 11:21:51', 0),
(16, 'Kalisaa', 'Abduljelil', 'Female', 53, 'Married', '2023-05-25 00:00:00', '0915112132', 'kalisa1@gmail.com', 'mother', 'Kalisa12', '$2y$10$7l6PD4pCJzH3rhn4qPqMF.NKboR1CiguXYg1jzFlmLQ4.79dmwQ72', 'Admin', '767586.avif', '2023-06-23 02:28:13', 1),
(15, 'Noel', 'Noel', 'Female', 60, 'Single', '2023-05-21 00:00:00', '09013365369', 'nbekele8@gmail.com', 'mother', 'Noel64', '$2y$10$s7tHponDUHA6fDtguOoxo.jFcpVQhm9DU2g75t6W5PxYQIApmC1KK', 'Fp_Worker', 'B4eeypV.jpg', '2023-06-16 23:28:49', 0),
(17, 'Halima', 'Mohammed', 'Female', 47, 'Divorced', '2023-06-07 03:01:48', '0910222222', 'Halima@gmail.com', 'mother', 'Halima12', '$2y$10$mPAFXd0veQvueSRmF/bx4.JaRXdVxMKnMnA4DNpbDc0Zt14C6KSCa', 'Admin', 'Screenshot_20230623-091445_Media and devices.jpg', '2023-06-25 02:04:28', 1),
(30, '4542r4rvcv', 'vgfbvgrb', 'Female', 2, 'Single', '2023-06-09 03:33:42', 'rg', 'rgrwg@q', 'mother', 'efverg', '$2y$10$zYznwcny.K30X5fAW6Z/eOzK7xcEYRvDa7Vfp5eHgsbfT8ilY0cdO', 'Fp_Worker', 'user.png', '0000-00-00 00:00:00', 0),
(32, '23123', '2312312edc', 'Female', 1, 'Single', '2023-06-09 03:42:04', 'wdsd', '312312@ww', 'mother', '2312312312', '$2y$10$y0s2J6h7HosFJElzsEd6luVonymC70u4nlRmFxQgtsh8RtNruA5ou', 'Fp_Worker', 'user.png', '0000-00-00 00:00:00', 0),
(33, 'wdde111qw', 'asdsdxcw2', 'Female', 1, 'Single', '2023-06-09 03:45:06', 'ewd', 'sdqweqwe@eee', 'mother', '1wqsad', '$2y$10$t92GnsrcMJa/6EvPmXC7Z.SWg.gK9oKN1fsS128sYsZuUPRlEPpDy', 'Fp_Worker', 'user.png', '0000-00-00 00:00:00', 0),
(34, '12344', '22445', 'Female', 125, 'Single', '2023-06-09 03:47:16', '09215917', 'ddcvbgcdf@ferrf.com', 'mother', '22rtgffddf', '$2y$10$vu0NTW3HbTZ2jQNSfOF.YuZdG//yek17R4ucevLl5g0TkZ10j4ZuS', 'Fp_Worker', 'user.png', '0000-00-00 00:00:00', 0),
(35, 'efwefa', 'sfadsf', 'Female', 1, 'Single', '2023-06-09 03:52:21', 'edf', 'dfasdfa@33ds', 'mother', 'adsfas', '$2y$10$E0XNS.nVVg1FmCQJJxsQVe.nhujx3ZBiQ9/UzKHhIAe3aY42tNL8u', 'Fp_Worker', 'user.png', '0000-00-00 00:00:00', 0),
(47, 'Ttttt', 'Tttttt', 'Male', 52, 'Single', '2023-06-25 10:00:42', '0919191991', 'the@gmail.com', 'fpworker', 'Ttttt', '$2y$10$b4aevO8sRGb35YIeEc4Xee9S3mkh5VaubYEjCovw2pB5HDmDVEjBq', 'Admin', 'user.png', '2023-06-25 10:04:01', 0),
(37, '2eq3', '3e12e', 'Female', 1, 'Single', '2023-06-09 12:44:54', '3r', 'dqwed@d.com', 'mother', '1ewd', '$2y$10$/xFoRBva8agJwXJ6NGNfnuroIdcoZkijE5UuA/yxm87BtCT4Q3GfW', 'Fp_Worker', 'user.png', '0000-00-00 00:00:00', 0),
(40, 'rgtwetw^', 'ereddd', 'Female', 1, 'Married', '2023-06-09 12:57:49', 'wrqw', 'ewrqwdd@gmail.c', 'mother', 'erqewdd', '$2y$10$Hpd8v.CgsVF5tjXUN9e0FODQOVOU7fbI3W2Yy5WywB9ZN74O5LepK', 'Fp_Worker', 'user.png', '2023-06-09 13:14:28', 0),
(42, 'Roynaqa', 'Abdallah', 'Male', 28, 'Widowed', '2023-06-12 07:34:18', '0915151515', 'Roynaqa1@gmail.com', 'mother', 'Roynaqa12', '$2y$10$OCVaKHo2q6i/u4GDqm3hU.XBrfm14N48O3WGQeBvU.88l4e/.Fm7u', 'Admin', 'user.png', '2023-06-15 09:51:36', 0),
(43, 'Naima', 'Umar', 'Female', 30, 'Married', '2023-06-14 06:36:53', '0924424242', 'Naima@gmail.com', 'mother', 'Naim12', '$2y$10$c.OXDIn0.RkiHCGxPwBxA.8xXUdMAoRoefKyqqUVnahADTa8Mjahu', 'Fp_Worker', 'user.png', '2023-06-15 11:08:13', 0),
(44, 'Kadija', 'Mohammed', 'Female', 23, 'Divorced', '2023-06-15 11:21:33', '0940878832', 'kadija@gmail.com', 'mother', 'Kadija12', '$2y$10$Ymlm.hUQSwVN2OR5oXswYOCAOvuNRYvFQ5qHoKYcgWEeA0alK4Wvi', 'Admin', 'user.png', '2023-06-21 01:43:01', 0),
(45, 'Abdurahman', 'Duhur', 'Male', 29, 'Single', '2023-06-18 09:12:00', '0911111111', 'rnydxryr@fsf.com', 'physician', 'Abdurahman123', '$2y$10$e9NbwRDktXgaMdDcZs.4z.6Bx9ByCzMcXT6CImGG515Ox5B5xup62', 'Admin', 'user.png', '2023-06-25 11:07:11', 1),
(46, 'Miftah', 'Juhar', 'Male', 18, 'Single', '2023-06-22 15:57:03', '0920121212', 'miftah@gmail.com', 'fpworker', 'Miftah12', '$2y$10$9DTwRvLspWYxW6roe.6/WOcxmu5jy5wJyhXO6H2xCTQI0CxJ51Uxe', 'Admin', 'user.png', '2023-06-25 04:37:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitor_activity_logs`
--

CREATE TABLE `visitor_activity_logs` (
  `id` int(11) NOT NULL,
  `user_ip_address` longtext CHARACTER SET latin1 NOT NULL,
  `user_agent` longtext CHARACTER SET latin1 NOT NULL,
  `page_url` longtext CHARACTER SET latin1 NOT NULL,
  `referrer_url` longtext CHARACTER SET latin1 DEFAULT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `visitor_activity_logs`
--

INSERT INTO `visitor_activity_logs` (`id`, `user_ip_address`, `user_agent`, `page_url`, `referrer_url`, `created_on`) VALUES
(1, ' 102.218.50.96', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:109.0) Gecko/20100101 Firefox/114.0', 'http://mathernal-health.epizy.com/user_login.php', 'http://mathernal-health.epizy.com/admin.php', '2023-06-24 16:01:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_detail`
--
ALTER TABLE `appointment_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `Fp worker`
--
ALTER TABLE `Fp worker`
  ADD PRIMARY KEY (`Fp_id`);

--
-- Indexes for table `History`
--
ALTER TABLE `History`
  ADD PRIMARY KEY (`hist_id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`medication_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `mother`
--
ALTER TABLE `mother`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `physician`
--
ALTER TABLE `physician`
  ADD PRIMARY KEY (`phy_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_activity_logs`
--
ALTER TABLE `visitor_activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_detail`
--
ALTER TABLE `appointment_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Fp worker`
--
ALTER TABLE `Fp worker`
  MODIFY `Fp_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `medication_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `mother`
--
ALTER TABLE `mother`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `physician`
--
ALTER TABLE `physician`
  MODIFY `phy_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `visitor_activity_logs`
--
ALTER TABLE `visitor_activity_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
