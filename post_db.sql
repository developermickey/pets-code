-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2023 at 06:40 PM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver_profile_logs`
--

DROP TABLE IF EXISTS `driver_profile_logs`;
CREATE TABLE IF NOT EXISTS `driver_profile_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `remark` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver_profile_logs`
--

INSERT INTO `driver_profile_logs` (`id`, `user_id`, `remark`, `created_at`, `updated_at`) VALUES
(1, 8, 'demo', '2022-12-01 10:30:05', '2022-12-01 10:30:05'),
(2, 8, 'aaaa', '2022-12-01 10:30:47', '2022-12-01 10:30:47'),
(3, 8, 'rejectrf', '2022-12-01 10:33:56', '2022-12-01 10:33:56'),
(4, 8, 'approved', '2022-12-01 10:36:22', '2022-12-01 10:36:22'),
(5, 14, 'dddsdwdsdsd asdsdsd', '2022-12-05 15:41:08', '2022-12-05 15:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `fare`
--

DROP TABLE IF EXISTS `fare`;
CREATE TABLE IF NOT EXISTS `fare` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `distance` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `gst` varchar(100) NOT NULL,
  `status` enum('active','deactive') NOT NULL DEFAULT 'active',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fare`
--

INSERT INTO `fare` (`id`, `distance`, `price`, `gst`, `status`, `create_at`, `update_at`) VALUES
(1, '1', '11', '5', 'active', '2022-12-06 16:17:15', '2022-12-06 16:17:15'),
(2, '1.5', '15', '5', 'active', '2022-12-09 11:22:52', '2022-12-09 11:22:52'),
(3, '2', '20', '5', 'active', '2022-12-13 12:23:23', '2022-12-13 12:23:23'),
(4, '2.5', '25', '5', 'active', '2022-12-13 12:26:13', '2022-12-13 12:26:13'),
(5, '3', '30', '5', 'active', '2022-12-13 12:26:30', '2022-12-13 12:26:30'),
(6, '3.5', '35', '5', 'active', '2022-12-13 12:26:50', '2022-12-13 12:26:50'),
(7, '4', '40', '5', 'active', '2022-12-13 15:15:40', '2022-12-13 15:15:40'),
(8, '4.5', '45', '5', 'active', '2022-12-13 15:16:02', '2022-12-13 15:16:02'),
(9, '5', '50', '5', 'active', '2022-12-13 15:16:22', '2022-12-13 15:16:22'),
(10, '5.5', '55', '5', 'active', '2022-12-13 15:16:42', '2022-12-13 15:16:42'),
(11, '6', '60', '5', 'active', '2022-12-13 15:16:54', '2022-12-13 15:16:54'),
(12, '6.5', '65', '5', 'active', '2022-12-13 15:17:10', '2022-12-13 15:17:10'),
(13, '7', '70', '5', 'active', '2022-12-13 15:17:25', '2022-12-13 15:17:25'),
(14, '7.5', '75', '5', 'active', '2022-12-13 15:17:43', '2022-12-13 15:17:43'),
(15, '8', '80', '5', 'active', '2022-12-13 15:18:01', '2022-12-13 15:18:01'),
(16, '8.5', '85', '5', 'active', '2022-12-13 15:18:17', '2022-12-13 15:18:17'),
(17, '9', '90', '5', 'active', '2022-12-13 15:18:31', '2022-12-13 15:18:31'),
(18, '9.5', '95', '5', 'active', '2022-12-13 15:18:46', '2022-12-13 15:18:46'),
(19, '10', '100', '5', 'active', '2022-12-13 15:19:00', '2022-12-13 15:19:00'),
(20, '10.5', '105', '5', 'active', '2022-12-13 15:19:21', '2022-12-13 15:19:21'),
(21, '11', '110', '5', 'active', '2022-12-13 15:19:40', '2022-12-13 15:19:40'),
(22, '11.5', '115', '5', 'active', '2022-12-13 15:19:58', '2022-12-13 15:19:58'),
(23, '12', '120', '5', 'active', '2022-12-13 15:20:12', '2022-12-13 15:20:12'),
(24, '12.5', '125', '5', 'active', '2022-12-13 15:20:29', '2022-12-13 15:20:29'),
(25, '13', '130', '5', 'active', '2022-12-13 15:20:47', '2022-12-13 15:20:47'),
(26, '13.5', '135', '5', 'active', '2022-12-13 15:21:05', '2022-12-13 15:21:05'),
(27, '14', '140', '5', 'active', '2022-12-13 15:21:23', '2022-12-13 15:21:23'),
(28, '14.5', '145', '5', 'active', '2022-12-13 15:21:39', '2022-12-13 15:21:39'),
(29, '15', '150', '5', 'active', '2022-12-13 15:21:55', '2022-12-13 15:21:55'),
(30, '15.5', '155', '5', 'active', '2022-12-13 15:22:21', '2022-12-13 15:22:21'),
(31, '16', '160', '5', 'active', '2022-12-13 15:22:39', '2022-12-13 15:22:39'),
(32, '16.5', '165', '5', 'active', '2022-12-13 15:22:57', '2022-12-13 15:22:57'),
(33, '17', '170', '5', 'active', '2022-12-13 15:23:18', '2022-12-13 15:23:18'),
(34, '17.5', '175', '5', 'active', '2022-12-13 15:23:38', '2022-12-13 15:23:38'),
(35, '18', '180', '5', 'active', '2022-12-13 15:23:53', '2022-12-13 15:23:53'),
(36, '18.5', '185', '5', 'active', '2022-12-13 15:24:13', '2022-12-13 15:24:13'),
(37, '19', '190', '5', 'active', '2022-12-13 15:24:29', '2022-12-13 15:24:29'),
(38, '19.5', '195', '5', 'active', '2022-12-13 15:24:44', '2022-12-13 15:24:44'),
(39, '20', '200', '5', 'active', '2022-12-13 15:25:00', '2022-12-13 15:25:00'),
(40, '20.5', '205', '5', 'active', '2022-12-13 15:25:22', '2022-12-13 15:25:22'),
(41, '21', '210', '5', 'active', '2022-12-13 15:25:37', '2022-12-13 15:25:37'),
(42, '21.5', '215', '5', 'active', '2022-12-13 15:25:57', '2022-12-13 15:25:57'),
(43, '22', '220', '5', 'active', '2022-12-13 15:26:15', '2022-12-13 15:26:15'),
(44, '22.5', '225', '5', 'active', '2022-12-13 15:26:29', '2022-12-13 15:26:29'),
(45, '23', '230', '5', 'active', '2022-12-13 15:26:45', '2022-12-13 15:26:45'),
(46, '23.5', '235', '5', 'active', '2022-12-13 15:27:05', '2022-12-13 15:27:05'),
(47, '24', '240', '5', 'active', '2022-12-13 15:27:26', '2022-12-13 15:27:26'),
(48, '24.5', '245', '5', 'active', '2022-12-13 15:27:42', '2022-12-13 15:27:42'),
(49, '25', '250', '5', 'active', '2022-12-13 15:27:57', '2022-12-13 15:27:57'),
(50, '25.5', '255', '5', 'active', '2022-12-13 16:25:53', '2022-12-13 16:25:53'),
(51, '26', '260', '5', 'active', '2022-12-13 16:26:17', '2022-12-13 16:26:17'),
(52, '26.5', '265', '5', 'active', '2022-12-13 16:26:40', '2022-12-13 16:26:40'),
(53, '27', '270', '5', 'active', '2022-12-13 16:26:57', '2022-12-13 16:26:57'),
(54, '27.5', '275', '5', 'active', '2022-12-13 16:27:25', '2022-12-13 16:27:25'),
(55, '28', '280', '5', 'active', '2022-12-13 16:27:42', '2022-12-13 16:27:42'),
(56, '28.5', '285', '5', 'active', '2022-12-13 16:28:01', '2022-12-13 16:28:01'),
(57, '29', '290', '5', 'active', '2022-12-13 16:28:18', '2022-12-13 16:28:18'),
(58, '29.5', '295', '5', 'active', '2022-12-13 16:28:38', '2022-12-13 16:28:38'),
(59, '30', '300', '5', 'active', '2022-12-13 16:28:55', '2022-12-13 16:28:55'),
(60, '30.5', '305', '5', 'active', '2022-12-13 16:29:16', '2022-12-13 16:29:16'),
(61, '31', '310', '5', 'active', '2022-12-13 16:29:35', '2022-12-13 16:29:35'),
(62, '31.5', '315', '5', 'active', '2022-12-13 16:29:59', '2022-12-13 16:29:59'),
(63, '32', '320', '5', 'active', '2022-12-13 16:30:20', '2022-12-13 16:30:20'),
(64, '32.5', '325', '5', 'active', '2022-12-13 16:30:42', '2022-12-13 16:30:42'),
(65, '33', '330', '5', 'active', '2022-12-13 16:30:59', '2022-12-13 16:30:59'),
(66, '33.5', '335', '5', 'active', '2022-12-13 16:31:20', '2022-12-13 16:31:20'),
(67, '34', '340', '5', 'active', '2022-12-13 16:31:39', '2022-12-13 16:31:39'),
(68, '34.5', '345', '5', 'active', '2022-12-13 16:31:57', '2022-12-13 16:31:57'),
(69, '35', '350', '5', 'active', '2022-12-13 16:32:17', '2022-12-13 16:32:17'),
(70, '35.5', '355', '5', 'active', '2022-12-13 16:32:39', '2022-12-13 16:32:39'),
(71, '40', '400', '5', 'active', '2022-12-13 16:32:58', '2022-12-13 16:32:58'),
(72, '40.5', '405', '5', 'active', '2022-12-13 16:33:16', '2022-12-13 16:33:16'),
(73, '41', '410', '5', 'active', '2022-12-13 16:33:34', '2022-12-13 16:33:34'),
(74, '41.5', '415', '5', 'active', '2022-12-13 16:33:52', '2022-12-13 16:33:52'),
(75, '42', '420', '5', 'active', '2022-12-13 16:34:09', '2022-12-13 16:34:09'),
(76, '42.5', '425', '5', 'active', '2022-12-13 16:34:27', '2022-12-13 16:34:27'),
(77, '43', '430', '5', 'active', '2022-12-13 16:34:44', '2022-12-13 16:34:44'),
(78, '43.5', '435', '5', 'active', '2022-12-13 16:35:03', '2022-12-13 16:35:03'),
(79, '44', '440', '5', 'active', '2022-12-13 16:35:17', '2022-12-13 16:35:17'),
(80, '44.5', '445', '5', 'active', '2022-12-13 16:35:35', '2022-12-13 16:35:35'),
(81, '45', '450', '5', 'active', '2022-12-13 16:35:50', '2022-12-13 16:35:50'),
(82, '45.5', '455', '5', 'active', '2022-12-13 16:36:07', '2022-12-13 16:36:07'),
(83, '46', '460', '5', 'active', '2022-12-13 16:36:23', '2022-12-13 16:36:23'),
(84, '46.5', '465', '5', 'active', '2022-12-13 16:36:39', '2022-12-13 16:36:39'),
(85, '47', '470', '5', 'active', '2022-12-13 16:36:55', '2022-12-13 16:36:55'),
(86, '47.5', '475', '5', 'active', '2022-12-13 16:37:15', '2022-12-13 16:37:15'),
(87, '48', '480', '5', 'active', '2022-12-13 16:37:39', '2022-12-13 16:37:39'),
(88, '48.5', '485', '5', 'active', '2022-12-13 16:38:00', '2022-12-13 16:38:00'),
(89, '49', '490', '5', 'active', '2022-12-13 16:38:15', '2022-12-13 16:38:15'),
(90, '49.5', '495', '5', 'active', '2022-12-13 16:38:32', '2022-12-13 16:38:32'),
(91, '50', '500', '5', 'active', '2022-12-13 16:38:46', '2022-12-13 16:38:46'),
(92, '50.5', '505', '5', 'active', '2022-12-13 16:39:06', '2022-12-13 16:39:06'),
(93, '51', '510', '5', 'active', '2022-12-13 16:39:22', '2022-12-13 16:39:22'),
(94, '51.5', '515', '5', 'active', '2022-12-13 16:39:41', '2022-12-13 16:39:41'),
(95, '52', '520', '5', 'active', '2022-12-13 16:39:57', '2022-12-13 16:39:57'),
(96, '52.5', '525', '5', 'active', '2022-12-13 16:40:15', '2022-12-13 16:40:15'),
(97, '53', '530', '5', 'active', '2022-12-13 16:40:33', '2022-12-13 16:40:33'),
(98, '53.5', '535', '5', 'active', '2022-12-13 16:40:50', '2022-12-13 16:40:50'),
(99, '54', '540', '5', 'active', '2022-12-13 16:41:06', '2022-12-13 16:41:06'),
(100, '54.5', '545', '5', 'active', '2022-12-13 16:41:23', '2022-12-13 16:41:23'),
(101, '55', '550', '5', 'active', '2022-12-13 16:41:38', '2022-12-13 16:41:38'),
(102, '55.5', '555', '5', 'active', '2022-12-13 16:41:56', '2022-12-13 16:41:56'),
(103, '56', '560', '5', 'active', '2022-12-13 16:42:10', '2022-12-13 16:42:10'),
(104, '56.5', '565', '5', 'active', '2022-12-13 16:42:28', '2022-12-13 16:42:28'),
(105, '57', '570', '5', 'active', '2022-12-13 16:42:50', '2022-12-13 16:42:50'),
(106, '57.5', '575', '5', 'active', '2022-12-13 16:43:08', '2022-12-13 16:43:08'),
(107, '58', '580', '5', 'active', '2022-12-13 16:43:25', '2022-12-13 16:43:25'),
(108, '58.5', '585', '5', 'active', '2022-12-13 16:43:44', '2022-12-13 16:43:44'),
(109, '59', '590', '5', 'active', '2022-12-13 16:44:02', '2022-12-13 16:44:02'),
(110, '59.5', '595', '5', 'active', '2022-12-13 16:44:18', '2022-12-13 16:44:18'),
(111, '60', '600', '5', 'active', '2022-12-13 16:44:38', '2022-12-13 16:44:38'),
(112, '60.5', '605', '5', 'active', '2022-12-13 16:44:56', '2022-12-13 16:44:56'),
(113, '61', '610', '5', 'active', '2022-12-13 16:45:13', '2022-12-13 16:45:13'),
(114, '61.5', '615', '5', 'active', '2022-12-13 16:45:31', '2022-12-13 16:45:31'),
(115, '62', '620', '5', 'active', '2022-12-13 16:45:46', '2022-12-13 16:45:46'),
(116, '62.5', '625', '5', 'active', '2022-12-13 16:46:10', '2022-12-13 16:46:10'),
(117, '63', '630', '5', 'active', '2022-12-13 16:46:27', '2022-12-13 16:46:27'),
(118, '63.5', '635', '5', 'active', '2022-12-13 16:46:51', '2022-12-13 16:46:51'),
(119, '64', '640', '5', 'active', '2022-12-13 16:47:07', '2022-12-13 16:47:07'),
(120, '64.5', '645', '5', 'active', '2022-12-13 16:47:25', '2022-12-13 16:47:25'),
(121, '65', '650', '5', 'active', '2022-12-13 16:47:41', '2022-12-13 16:47:41'),
(122, '65.5', '655', '5', 'active', '2022-12-13 16:47:57', '2022-12-13 16:47:57'),
(123, '66', '660', '5', 'active', '2022-12-13 16:48:12', '2022-12-13 16:48:12'),
(124, '66.5', '665', '5', 'active', '2022-12-13 16:48:29', '2022-12-13 16:48:29'),
(125, '67', '670', '5', 'active', '2022-12-13 16:48:44', '2022-12-13 16:48:44'),
(126, '67.5', '675', '5', 'active', '2022-12-13 16:49:04', '2022-12-13 16:49:04'),
(127, '68', '680', '5', 'active', '2022-12-13 16:49:21', '2022-12-13 16:49:21'),
(128, '68.5', '685', '5', 'active', '2022-12-13 16:49:43', '2022-12-13 16:49:43'),
(129, '69', '690', '5', 'active', '2022-12-13 16:50:10', '2022-12-13 16:50:10'),
(130, '69.5', '695', '5', 'active', '2022-12-13 16:50:34', '2022-12-13 16:50:34'),
(131, '70', '700', '5', 'active', '2022-12-13 16:50:50', '2022-12-13 16:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `pin_code` varchar(10) NOT NULL,
  `status` enum('active','deactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location`, `pin_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sidhauli, Uttar Pradesh, India', '261303', 'active', '2022-12-06 13:52:18', '2022-12-06 13:52:18'),
(2, 'Kamlapur, Uttar Pradesh, India', '261302', 'active', '2022-12-06 13:58:18', '2022-12-06 13:58:18'),
(3, 'Sitapur, Uttar Pradesh, India', '261001', 'active', '2022-12-13 17:03:53', '2022-12-13 17:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `night_fare`
--

DROP TABLE IF EXISTS `night_fare`;
CREATE TABLE IF NOT EXISTS `night_fare` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_time` varchar(200) NOT NULL,
  `to_time` varchar(100) NOT NULL,
  `fare` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `night_fare`
--

INSERT INTO `night_fare` (`id`, `from_time`, `to_time`, `fare`) VALUES
(1, '9:00 PM', '11:29 PM', '1.5'),
(2, '11:30 PM', '6:00 AM', '2');

-- --------------------------------------------------------

--
-- Table structure for table `ride_booking`
--

DROP TABLE IF EXISTS `ride_booking`;
CREATE TABLE IF NOT EXISTS `ride_booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `source_lat` varchar(100) NOT NULL,
  `source_lng` varchar(100) NOT NULL,
  `source` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `source_pincode` varchar(10) DEFAULT NULL,
  `destination_pincode` varchar(10) DEFAULT NULL,
  `destination_lat` varchar(100) NOT NULL,
  `destination_lng` varchar(100) NOT NULL,
  `distance` varchar(100) NOT NULL,
  `fare_price` varchar(100) NOT NULL,
  `status` enum('Processing','OnTheWay','Completed','rejectByDriver','CancelByUser') NOT NULL DEFAULT 'Processing',
  `crate_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ride_booking`
--

INSERT INTO `ride_booking` (`id`, `booking_id`, `user_id`, `driver_id`, `source_lat`, `source_lng`, `source`, `destination`, `source_pincode`, `destination_pincode`, `destination_lat`, `destination_lng`, `distance`, `fare_price`, `status`, `crate_at`, `update_at`) VALUES
(1, 'KOSHI48670989', 10, 16, '27.3931593', '80.8156324', 'Kamlapur, Sitapur, Uttar Pradesh, India', 'Sultanpur Bhat Kherwa, Uttar Pradesh, India', '261302', '261302', '27.3602188', '80.80178769999999', '3.9', '42', 'OnTheWay', '2022-12-15 08:55:28', '2022-12-15 08:55:28'),
(2, 'KOSHI13561357', 7, 12, '27.3931593', '80.8156324', 'Kamlapur, Uttar Pradesh, India', 'Sultanpur Bhat Kherwa, Uttar Pradesh, India', '261302', '261302', '27.3602188', '80.80178769999999', '3.9', '42', 'Processing', '2022-12-15 08:58:46', '2022-12-15 08:58:46'),
(3, 'KOSHI11841921', 7, 13, '27.3931593', '80.8156324', 'Kamlapur, Uttar Pradesh, India', 'Sitapur, Uttar Pradesh, India', '261302', '261001', '27.5680156', '80.6789519', '23.7', '252', 'Processing', '2022-12-15 08:58:51', '2022-12-15 08:58:51'),
(4, 'KOSHI90127615', 7, 13, '27.3931593', '80.8156324', 'Kamlapur, Uttar Pradesh, India', 'Sitapur, Uttar Pradesh, India', '261302', '261001', '27.5680156', '80.6789519', '23.7', '252', 'Processing', '2022-12-15 08:59:32', '2022-12-15 08:59:32'),
(5, 'KOSHI54667871', 7, 13, '27.3931593', '80.8156324', 'Kamlapur, Uttar Pradesh, India', 'Sitapur, Uttar Pradesh, India', '261302', '261001', '27.5680156', '80.6789519', '23.7', '252', 'Processing', '2022-12-15 09:00:03', '2022-12-15 09:00:03'),
(6, 'KOSHI27219666', 10, 16, '27.2820753', '80.83442939999999', 'Sidhauli, Uttar Pradesh, India', 'Kamlapur, Uttar Pradesh, India', '261303', '261302', '27.3931593', '80.8156324', '12.5', '131', 'Processing', '2022-12-15 09:01:57', '2022-12-15 09:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

DROP TABLE IF EXISTS `share`;
CREATE TABLE IF NOT EXISTS `share` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `driver` varchar(200) NOT NULL,
  `company` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `share`
--

INSERT INTO `share` (`id`, `driver`, `company`) VALUES
(1, '84', '16');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `total_fare` varchar(100) NOT NULL,
  `source` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `company_fare` varchar(100) NOT NULL,
  `driver_fare` varchar(100) NOT NULL,
  `company_fare_percent` varchar(100) NOT NULL,
  `driver_fare_percent` varchar(100) NOT NULL,
  `status` enum('Processing','OnTheWay','Completed','rejectByDriver','CancelByUser') NOT NULL DEFAULT 'Processing',
  `crate_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `booking_id`, `user_id`, `driver_id`, `total_fare`, `source`, `destination`, `company_fare`, `driver_fare`, `company_fare_percent`, `driver_fare_percent`, `status`, `crate_at`, `update_at`) VALUES
(1, 1, 10, 16, '42', 'Kamlapur, Sitapur, Uttar Pradesh, India', 'Sultanpur Bhat Kherwa, Uttar Pradesh, India', '6.72', '35.28', '16', '84', 'OnTheWay', '2022-12-15 08:55:28', '2022-12-15 08:55:28'),
(2, 2, 7, 12, '42', 'Kamlapur, Uttar Pradesh, India', 'Sultanpur Bhat Kherwa, Uttar Pradesh, India', '6.72', '35.28', '16', '84', 'Processing', '2022-12-15 08:58:46', '2022-12-15 08:58:46'),
(3, 3, 7, 13, '252', 'Kamlapur, Uttar Pradesh, India', 'Sitapur, Uttar Pradesh, India', '40.32', '211.68', '16', '84', 'Processing', '2022-12-15 08:58:51', '2022-12-15 08:58:51'),
(4, 4, 7, 13, '252', 'Kamlapur, Uttar Pradesh, India', 'Sitapur, Uttar Pradesh, India', '40.32', '211.68', '16', '84', 'Processing', '2022-12-15 08:59:32', '2022-12-15 08:59:32'),
(5, 5, 7, 13, '252', 'Kamlapur, Uttar Pradesh, India', 'Sitapur, Uttar Pradesh, India', '40.32', '211.68', '16', '84', 'Processing', '2022-12-15 09:00:03', '2022-12-15 09:00:03'),
(6, 6, 10, 16, '131', 'Sidhauli, Uttar Pradesh, India', 'Kamlapur, Uttar Pradesh, India', '20.96', '110.04', '16', '84', 'Processing', '2022-12-15 09:01:57', '2022-12-15 09:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `profile` varchar(100) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `status` enum('active','deactive') NOT NULL DEFAULT 'active',
  `profile_status` enum('approved','rejected','inreview') NOT NULL,
  `role_id` enum('admin','user','driver') NOT NULL DEFAULT 'user',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `password`, `profile`, `remember_token`, `status`, `profile_status`, `role_id`, `create_at`, `update_at`) VALUES
(1, 'Admin', '9876543210', 'admin@gmail.com', '$2y$10$Q6mwwJjPGnP/PK4yMCioge6nOQpG76JMJgAuY9GcDUL84rUS7Z7RW', '', '', 'active', 'approved', 'admin', '2022-11-27 14:52:28', '2022-11-27 14:52:28'),
(7, 'Satish Kumar', '9797979745', 'satyadav@gmail.com', '$2y$10$Q6mwwJjPGnP/PK4yMCioge6nOQpG76JMJgAuY9GcDUL84rUS7Z7RW', NULL, NULL, 'active', 'approved', 'user', '2022-11-29 15:49:18', '2022-11-29 15:49:18'),
(8, 'Satish Kumar', '97979797435', 'satyadav7@gmail.com', '$2y$10$z2hmWu.rfhTftactnd.7tO.Zti3uyWBQxOTchSUzrZ3uqkqCWe8yS', NULL, NULL, 'active', 'approved', 'driver', '2022-11-29 15:53:33', '2022-11-29 15:53:33'),
(9, 'Sandeep', '9919096916', 'satyadav8888@gmail.com', '$2y$10$.nakRyqHrZJjaKTft6RpKew5zqRbt7tK3v0IqDCVRs6/QKNP4RWrW', NULL, NULL, 'active', 'approved', 'user', '2022-12-03 17:08:58', '2022-12-03 17:08:58'),
(10, 'Sanjeev', '7738651919', 'sa@gmail.com', '$2y$10$QQlkxCtwBhefJTYJzipz.e4Dt1bnjwT1TTF5gTDu2ODON3Iyll8QK', NULL, NULL, 'active', 'approved', 'user', '2022-12-03 17:12:36', '2022-12-03 17:12:36'),
(12, 'Driver', '7738651919', 'dri@gmail.com', '$2y$10$ThY.V69nzVozxwiJsyIsve8Mo/9J/JDc4EB.Lbr3KXmbyclaLv1Qu', NULL, NULL, 'active', 'inreview', 'driver', '2022-12-03 19:21:41', '2022-12-03 19:21:41'),
(13, 'driver2', '7738651919', 'drrr@gmail.com', '$2y$10$obD8jxL2mx3uOI7bmJieB.wb6G1PLAHVzzFl.LUBYQhTtemQAOls2', NULL, NULL, 'active', 'inreview', 'driver', '2022-12-03 19:27:22', '2022-12-03 19:27:22'),
(15, 'word_images', '7738651919', 'adminn@gmail.com', '$2y$10$n03e9V4Xzee89RvsbtQig.cZsVqTpwAWMYmOQdbdXsm1fKbs6AB/K', NULL, NULL, 'active', 'inreview', 'driver', '2022-12-06 06:27:12', '2022-12-06 06:27:12'),
(16, 'sandeep', '9721262642', 'admin4@gmail.com', '$2y$10$ycOVcYWTUb6QngM17Wrk5ObP4lSbIpDnj4P6VD/LINAf6/fVAlS/y', NULL, NULL, 'active', 'inreview', 'driver', '2022-12-08 18:46:05', '2022-12-08 18:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `address` longtext NOT NULL,
  `license_number` varchar(100) NOT NULL,
  `aadhar_number` varchar(30) NOT NULL,
  `pan_number` varchar(30) NOT NULL,
  `aadhar_doc` longtext,
  `license_doc` longtext,
  `pan_doc` longtext,
  `profile` longtext,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `address`, `license_number`, `aadhar_number`, `pan_number`, `aadhar_doc`, `license_doc`, `pan_doc`, `profile`, `create_at`, `update_at`) VALUES
(1, 8, 'Sultanpur Bhatkherwa Kamlapur Sitapur', '97979797435', '496421343334', 'GCBPK5894N', 'http://localhost/localhost/pintaxi/storage/app/public/aadhar_doc/1669741606.png', 'http://localhost/localhost/pintaxi/storage/app/public/license_doc/1669741606.png', 'http://localhost/localhost/pintaxi/storage/app/public/pan_doc/1669741606.png', 'http://localhost/localhost/pintaxi/storage/app/public/user_profile/1669741606.png', '2022-11-29 16:30:21', '2022-11-29 16:30:21'),
(3, 12, 'Lucknow', '2334555', '224466', 'wwwwww', 'http://localhost/localhost/pintaxi/storage/app/public/aadhar_doc/aadhar_doc-1670095301.png', 'http://localhost/localhost/pintaxi/storage/app/public/license_doc/aadhar_doc-1670095301.png', 'http://localhost/localhost/pintaxi/storage/app/public/pan_doc/pan_doc-1670095301.png', 'http://localhost/localhost/pintaxi/storage/app/public/user_profile/profile-1670095301.jpg', '2022-12-03 19:21:41', '2022-12-03 19:21:41'),
(4, 13, 'ddddd', '2334555', '224466', 'wwwwww', 'http://localhost/localhost/pintaxi/storage/app/public/aadhar_doc/aadhar_doc-1670095642.jpg', 'http://localhost/localhost/pintaxi/storage/app/public/license_doc/aadhar_doc-1670095642.jpg', 'http://localhost/localhost/pintaxi/storage/app/public/pan_doc/pan_doc-1670095642.png', 'http://localhost/localhost/pintaxi/storage/app/public/user_profile/profile-1670095642.png', '2022-12-03 19:27:22', '2022-12-03 19:27:22'),
(5, 14, 'sss', '2334555', '224466', 'wwwwww', 'http://localhost/localhost/pintaxi/storage/app/public/aadhar_doc/aadhar_doc-1670254836.csv', 'http://localhost/localhost/pintaxi/storage/app/public/license_doc/aadhar_doc-1670254836.csv', 'http://localhost/localhost/pintaxi/storage/app/public/pan_doc/pan_doc-1670254836.csv', 'http://localhost/localhost/pintaxi/storage/app/public/user_profile/profile-1670254836.csv', '2022-12-05 15:40:37', '2022-12-05 15:40:37'),
(6, 15, 'sdasd', '2334555', '224466', 'wwwwww', 'http://localhost/localhost/pintaxi/storage/app/public/aadhar_doc/aadhar_doc-1670308031.csv', 'http://localhost/localhost/pintaxi/storage/app/public/license_doc/aadhar_doc-1670308031.csv', 'http://localhost/localhost/pintaxi/storage/app/public/pan_doc/pan_doc-1670308031.csv', 'http://localhost/localhost/pintaxi/storage/app/public/user_profile/profile-1670308031.csv', '2022-12-06 06:27:12', '2022-12-06 06:27:12'),
(7, 16, 'wwww', '233455533333344', '4964-2134-3376', 'GCbpk5994n', 'http://localhost/localhost/pintaxi/storage/app/public/aadhar_doc/aadhar_doc-1670525165.png', 'http://localhost/localhost/pintaxi/storage/app/public/license_doc/aadhar_doc-1670525165.png', 'http://localhost/localhost/pintaxi/storage/app/public/pan_doc/pan_doc-1670525165.png', 'http://localhost/localhost/pintaxi/storage/app/public/user_profile/profile-1670525165.png', '2022-12-08 18:46:06', '2022-12-08 18:46:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
