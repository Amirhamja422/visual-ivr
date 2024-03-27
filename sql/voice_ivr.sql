-- phpMyAdmin SQL Dump
-- version 4.4.15.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2024 at 10:39 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voice_ivr`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_info`
--

CREATE TABLE IF NOT EXISTS `account_info` (
  `id` int(100) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `card_number` int(100) DEFAULT NULL,
  `balance` int(100) DEFAULT NULL,
  `tpin` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account_info`
--

INSERT INTO `account_info` (`id`, `account_number`, `phone`, `card_number`, `balance`, `tpin`) VALUES
(1, '123456', '01792788718', 12345678, 12222, '1234'),
(2, '12345678', '01672063705', 1235, 500000, '1234'),
(3, '101730426462', '01730426462', 1235, 10000, '1234'),
(4, '101755642261', '01755642261', 1234, 2000, '1234'),
(5, '101924400819', '01924400819', 12555, 5000, '1234'),
(6, '101713047263', '01713047263', 5555, 85587, '1234'),
(7, '101405175221', '01405175221', 84592, 10000, '1234'),
(8, '0002633117867', '01713452614', NULL, NULL, '5566'),
(9, '0106002074298', '01712006619', NULL, NULL, '5566');

-- --------------------------------------------------------

--
-- Table structure for table `account_request`
--

CREATE TABLE IF NOT EXISTS `account_request` (
  `id` int(100) NOT NULL,
  `account_name` varchar(250) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `account_holder_img` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `income` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `account_holder_nid_copy` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account_request`
--

INSERT INTO `account_request` (`id`, `account_name`, `account_type`, `profession`, `account_holder_img`, `contact`, `income`, `nid`, `account_holder_nid_copy`, `created_at`) VALUES
(19, '', '', '', 'icon_bar.png', '', '', '', 'mute_final.png', '2021-04-18 11:56:06'),
(18, '', '', '', 'back_pic_004_demo.jpg', '', '', '', '', '2021-04-18 11:54:56'),
(16, '', '', '', 'mute_final.png', '', '', '', '', '2021-04-18 11:53:39'),
(17, '', '', '', 'mute_final.png', '', '', '', '', '2021-04-18 11:54:21'),
(15, '', '', '', 'mute_final.png', '', '', '', '', '2021-04-18 11:53:03'),
(13, 'Kiron', 'Service', '', '16187458230572628910455226604391.jpg', '01672063705', '', '', '', '2021-04-18 11:37:44'),
(14, '', '', '', 'mute_final.png', '', '', '', '', '2021-04-18 11:51:41'),
(20, '', '', '', '', '', '', '', '', '2021-05-22 09:39:29'),
(21, '', '', '', '', '', '', '', '', '2021-05-22 09:49:00'),
(22, '', '', '', '', '', '', '', '', '2021-05-22 10:06:41'),
(23, 'text', 'Service', 'student', 'logo-spftl.jpg', '01111111111', '111111', '1221313223', 'logo-spftl.jpg', '2021-05-22 10:59:27'),
(25, '', '', '', '', '', '', '', '', '2021-05-24 09:55:59'),
(26, '', '', '', '', '', '', '', '', '2021-05-24 09:56:18'),
(27, '', '', '', '', '', '', '', '', '2021-11-18 05:52:36'),
(28, '', 'Teacher', '', '', '', '', '', '', '2021-11-18 05:52:48'),
(29, '', '', '', '', '', '', '', '', '2024-02-07 05:35:51'),
(30, '', '', '', '', '', '', '', '', '2024-02-07 05:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `card_info`
--

CREATE TABLE IF NOT EXISTS `card_info` (
  `id` int(11) NOT NULL,
  `card_number` varchar(255) DEFAULT NULL,
  `LimitBDT` varchar(255) NOT NULL,
  `LimitUSD` varchar(255) NOT NULL,
  `AvailBalanceDBT` varchar(255) NOT NULL,
  `LedgerBalanceDBT` varchar(255) NOT NULL,
  `LadgerMinusBDT` varchar(255) NOT NULL,
  `LedgerBalanceUSD` varchar(255) NOT NULL,
  `LadgerMinusUSD` varchar(255) NOT NULL,
  `PersonFIO` varchar(255) NOT NULL,
  `mobileNumber` varchar(255) NOT NULL,
  `tpin` varchar(255) NOT NULL,
  `card_issue_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `card_info`
--

INSERT INTO `card_info` (`id`, `card_number`, `LimitBDT`, `LimitUSD`, `AvailBalanceDBT`, `LedgerBalanceDBT`, `LadgerMinusBDT`, `LedgerBalanceUSD`, `LadgerMinusUSD`, `PersonFIO`, `mobileNumber`, `tpin`, `card_issue_date`) VALUES
(4, '101730426462', '2000', '48050', '0', '0', '4200', '0', '0', 'MR. Mahmudul Hasa', '01730426462', '1234', '2021-04-17 19:16:18'),
(3, '12345678', '92000', '4800', '0', '0', '4800', '0', '0', 'MR. ARASTOO KHAN', '01672063705', '1234', '2021-04-18 16:36:54'),
(5, '101755642261', '9000', '42800', '0', '0', '4700', '0', '0', 'Abdul Aziz', '01755642261', '1234', '2021-04-17 19:16:18'),
(6, '101924400819', '9200', '48030', '0', '0', '4800', '0', '0', 'MR. Ashraf Uddin', '01924400819', '1234', '2021-04-17 19:16:18'),
(7, '101713047263', '9250', '48900', '0', '0', '4900', '0', '0', 'Abdul Alim', '01713047263', '1234', '2021-04-17 19:16:18'),
(8, '101405175221', '2000', '48050', '0', '0', '4200', '0', '0', 'Tania Aktar Farjana', '01675342612', '1234', '2022-11-30 09:53:38'),
(9, '123456', '0', '0', '0', '0', '0', '0', '0', '0', '01792788718', '1234', '2021-04-18 16:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `last_5_account_transaction`
--

CREATE TABLE IF NOT EXISTS `last_5_account_transaction` (
  `id` int(100) NOT NULL,
  `account_no` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `dr` varchar(255) NOT NULL,
  `cr` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `last_5_account_transaction`
--

INSERT INTO `last_5_account_transaction` (`id`, `account_no`, `reason`, `dr`, `cr`, `created_at`) VALUES
(1, '12345678', 'Mobile Recharge', '', '3500', '2021-04-08 13:14:02'),
(2, '12345678', 'Make Payment', '', '25000', '2021-04-08 13:14:02'),
(3, '12345678', 'interest', '20000', '', '2021-04-08 13:16:51'),
(4, '12345678', 'Interest', '50000', '', '2021-04-08 13:16:32'),
(5, '12345678', 'Interest', '450000', '', '2021-04-08 13:16:04'),
(6, '101730426462', 'Mobile Recharge', '', '3500', '2021-04-17 19:25:33'),
(7, '101730426462', 'Make Payment', '', '25000', '2021-04-17 19:25:33'),
(8, '101730426462', 'interest', '', '20000', '2021-04-17 19:25:33'),
(9, '101730426462', 'Interest', '50000', '', '2021-04-17 19:25:33'),
(10, '101730426462', 'Interest', '450000', '', '2021-04-17 19:25:33'),
(11, '101755642261', 'Mobile Recharge', '', '3500', '2021-04-17 19:26:29'),
(12, '101755642261', 'Make Payment', '', '25000', '2021-04-17 19:26:29'),
(13, '101755642261', 'interest', '', '20000', '2021-04-17 19:26:29'),
(14, '101755642261', 'Interest', '50000', '', '2021-04-17 19:26:29'),
(15, '101755642261', 'Interest', '450000', '', '2021-04-17 19:26:29'),
(16, '101924400819', 'Mobile Recharge', '', '3500', '2021-04-17 19:27:03'),
(17, '101924400819', 'Make Payment', '', '25000', '2021-04-17 19:27:03'),
(18, '101924400819', 'interest', '', '20000', '2021-04-17 19:27:03'),
(19, '101924400819', 'Interest', '50000', '', '2021-04-17 19:27:03'),
(20, '101924400819', 'Interest', '450000', '', '2021-04-17 19:27:03'),
(21, '101405175221', 'Mobile Recharge', '500', '', '2021-04-17 19:38:45'),
(22, '101405175221', 'Make Payment', '25000', '', '2021-04-17 19:38:45'),
(23, '101405175221', 'interest', '20000', '', '2021-04-17 19:38:45'),
(24, '101405175221', 'Interest', '', '50000', '2021-04-17 19:38:45'),
(25, '101405175221', 'Interest', '', '450000', '2021-04-17 19:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE IF NOT EXISTS `otp` (
  `id` int(100) NOT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `card_number` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `otp` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=366 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `account_number`, `card_number`, `phone_number`, `otp`, `status`, `created_at`) VALUES
(288, '123456', NULL, '01792788718', 147017, 'Invalid', '2021-04-18 17:39:01'),
(289, NULL, '12345678', '01672063705', 275150, 'Invalid', '2021-04-18 17:53:13'),
(290, NULL, '12345678', '01672063705', 676808, 'Invalid', '2021-04-18 17:53:15'),
(291, NULL, '12345678', '01672063705', 186953, 'valid', '2024-01-09 11:41:27'),
(292, '12345678', NULL, '01672063705', 701653, 'Invalid', '2021-04-18 18:23:54'),
(293, NULL, '123456', '01792788718', 288050, 'Invalid', '2021-04-18 18:23:55'),
(294, NULL, '123456', '01792788718', 481891, 'Invalid', '2021-04-18 18:27:57'),
(295, NULL, '123456', '01792788718', 296293, 'Invalid', '2021-04-18 18:27:57'),
(296, '123456', NULL, '01792788718', 229028, 'Invalid', '2021-04-18 18:58:40'),
(297, '123456', NULL, '01792788718', 956069, 'valid', '2021-04-18 18:54:06'),
(298, NULL, '123456', '01792788718', 290309, 'valid', '2021-04-18 18:54:53'),
(299, NULL, '123456', '01792788718', 113972, 'valid', '2021-04-18 18:57:33'),
(300, '12345678', NULL, '01672063705', 212500, 'valid', '2021-04-19 05:44:13'),
(301, NULL, '12345678', '01672063705', 293912, 'valid', '2021-04-19 05:49:11'),
(302, '12345678', NULL, '01672063705', 183639, 'valid', '2021-05-08 06:47:11'),
(303, NULL, '12345678', '01672063705', 168220, 'valid', '2021-05-24 16:45:02'),
(304, NULL, '12345678', '01672063705', 180684, 'valid', '2021-05-31 07:03:05'),
(305, NULL, '12345678', '01672063705', 335925, 'valid', '2021-06-02 06:24:10'),
(306, '101730426462', NULL, '01730426462', 358713, 'valid', '2021-11-17 13:12:25'),
(307, '123456', NULL, '01792788718', 134210, 'valid', '2021-11-18 07:18:01'),
(308, '123456', NULL, '01792788718', 175095, 'valid', '2022-11-30 07:51:55'),
(309, '123456', NULL, '01792788718', 138950, 'valid', '2022-11-30 07:51:56'),
(310, NULL, '12345678', '01672063705', 401115, 'valid', '2022-11-30 07:52:22'),
(311, NULL, '12345678', '01672063705', 308993, 'valid', '2022-11-30 07:52:25'),
(312, '123456', NULL, '01792788718', 875651, 'valid', '2022-11-30 07:52:46'),
(313, NULL, '12345678', '01672063705', 807698, 'valid', '2022-11-30 07:52:46'),
(314, '123456', NULL, '01792788718', 173442, 'valid', '2022-11-30 07:52:53'),
(315, '123456', NULL, '01792788718', 216724, 'valid', '2022-11-30 07:52:53'),
(316, '123456', NULL, '01792788718', 286828, 'valid', '2022-11-30 07:52:54'),
(317, '123456', NULL, '01792788718', 130532, 'valid', '2022-11-30 07:54:02'),
(318, '123456', NULL, '01792788718', 252167, 'valid', '2022-11-30 07:55:01'),
(319, '123456', NULL, '01792788718', 125798, 'valid', '2022-11-30 07:57:21'),
(320, '123456', NULL, '01792788718', 246965, 'valid', '2022-11-30 08:48:14'),
(321, '123456', NULL, '01792788718', 145215, 'valid', '2022-11-30 08:48:18'),
(322, '123456', NULL, '01792788718', 365873, 'valid', '2022-11-30 08:48:29'),
(323, '123456', NULL, '01792788718', 295393, 'valid', '2022-11-30 08:48:46'),
(324, NULL, '101730426462', '01730426462', 247869, 'valid', '2022-11-30 09:42:33'),
(325, NULL, '101730426462', '01730426462', 258946, 'valid', '2022-11-30 09:42:34'),
(326, NULL, '101405175221', '01405175221', 270083, 'valid', '2022-11-30 09:42:48'),
(327, NULL, '101405175221', '01405175221', 730889, 'valid', '2022-11-30 09:42:49'),
(328, NULL, '101405175221', '01405175221', 548596, 'valid', '2022-11-30 09:42:49'),
(329, NULL, '101405175221', '01405175221', 332224, 'valid', '2022-11-30 09:43:14'),
(330, NULL, '101405175221', '01405175221', 326354, 'valid', '2022-11-30 09:43:16'),
(331, NULL, '101405175221', '01405175221', 276399, 'valid', '2022-11-30 09:43:17'),
(332, NULL, '101405175221', '01405175221', 149443, 'valid', '2022-11-30 09:43:17'),
(333, NULL, '101405175221', '01405175221', 436091, 'valid', '2022-11-30 09:43:17'),
(334, NULL, '101405175221', '01405175221', 107155, 'valid', '2022-11-30 09:43:17'),
(335, NULL, '101405175221', '01405175221', 353254, 'valid', '2022-11-30 09:45:22'),
(336, NULL, '101405175221', '01405175221', 196494, 'valid', '2022-11-30 09:45:24'),
(337, NULL, '101405175221', '01405175221', 329675, 'valid', '2022-11-30 09:45:24'),
(338, NULL, '101405175221', '01405175221', 242295, 'valid', '2022-11-30 09:45:24'),
(339, NULL, '101405175221', '01405175221', 989227, 'valid', '2022-11-30 09:45:24'),
(340, NULL, '101405175221', '01405175221', 305949, 'valid', '2022-11-30 09:45:25'),
(341, NULL, '101405175221', '01405175221', 264225, 'valid', '2022-11-30 09:45:29'),
(342, NULL, '101405175221', '01405175221', 536810, 'valid', '2022-11-30 09:45:30'),
(343, NULL, '101405175221', '01405175221', 295873, 'valid', '2022-11-30 09:45:30'),
(344, NULL, '101405175221', '01405175221', 293758, 'valid', '2022-11-30 09:45:31'),
(345, NULL, '101405175221', '01405175221', 213678, 'valid', '2022-11-30 09:47:29'),
(346, NULL, '101405175221', '01405175221', 319290, 'valid', '2022-11-30 09:47:31'),
(347, NULL, '101405175221', '01405175221', 202770, 'valid', '2022-11-30 09:47:31'),
(348, NULL, '101405175221', '01405175221', 868943, 'valid', '2022-11-30 09:47:32'),
(349, NULL, '101405175221', '01405175221', 166328, 'valid', '2022-11-30 09:47:32'),
(350, NULL, '101405175221', '01405175221', 108888, 'valid', '2022-11-30 09:47:32'),
(351, NULL, '101405175221', '01405175221', 268049, 'valid', '2022-11-30 09:49:36'),
(352, NULL, '101405175221', '01405175221', 307507, 'valid', '2022-11-30 09:49:38'),
(353, NULL, '101405175221', '01405175221', 230040, 'valid', '2022-11-30 09:49:39'),
(354, NULL, '101405175221', '01405175221', 131288, 'valid', '2022-11-30 09:49:39'),
(355, NULL, '101405175221', '01405175221', 183803, 'valid', '2022-11-30 09:49:39'),
(356, NULL, '101405175221', '01405175221', 140619, 'valid', '2022-11-30 09:49:39'),
(357, NULL, '101405175221', '01405175221', 130627, 'valid', '2022-11-30 09:51:18'),
(358, NULL, '101405175221', '01405175221', 193961, 'valid', '2022-11-30 09:51:21'),
(359, NULL, '101405175221', '01405175221', 188393, 'valid', '2022-11-30 09:51:34'),
(360, NULL, '101405175221', '01405175221', 165031, 'valid', '2022-11-30 09:51:43'),
(361, NULL, '101405175221', '01405175221', 425552, 'valid', '2022-11-30 09:51:46'),
(362, NULL, '101405175221', '01405175221', 657686, 'valid', '2022-11-30 09:51:46'),
(363, NULL, '101405175221', '01405175221', 158917, 'valid', '2022-11-30 09:51:46'),
(364, NULL, '101405175221', '01675342612', 176197, 'valid', '2022-11-30 09:54:02'),
(365, NULL, '101405175221', '01675342612', 355391, 'valid', '2022-11-30 09:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `statement`
--

CREATE TABLE IF NOT EXISTS `statement` (
  `id` int(100) NOT NULL,
  `card_number` varchar(255) NOT NULL,
  `LimitBDT` varchar(255) NOT NULL,
  `LimitUSD` varchar(255) NOT NULL,
  `DuesBDT` varchar(255) NOT NULL,
  `DuesUSD` varchar(255) NOT NULL,
  `MinPaymentBDT` varchar(255) NOT NULL,
  `MinPaymentUSD` varchar(255) NOT NULL,
  `BillDate` varchar(255) NOT NULL,
  `PaymentDueDate` varchar(255) NOT NULL,
  `AvailableBDT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `AvailableUSD` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statement`
--

INSERT INTO `statement` (`id`, `card_number`, `LimitBDT`, `LimitUSD`, `DuesBDT`, `DuesUSD`, `MinPaymentBDT`, `MinPaymentUSD`, `BillDate`, `PaymentDueDate`, `AvailableBDT`, `AvailableUSD`) VALUES
(1, '4902630110008500', '92000', '4800', '0', '00', '0', '0', '0', '0', '2021-04-08 12:24:23', '2021-04-06 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `statement_request`
--

CREATE TABLE IF NOT EXISTS `statement_request` (
  `id` int(100) NOT NULL,
  `account_no` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statement_request`
--

INSERT INTO `statement_request` (`id`, `account_no`, `start_date`, `end_date`, `created_at`) VALUES
(12, '12345678', '2021-02-01', '2021-04-18', '2021-04-18 16:24:12'),
(13, '12345678', '', '2021-04-19', '2021-04-19 05:45:24'),
(14, '0002633117867', '2021-05-12', '2021-05-24', '2021-05-24 09:41:53'),
(15, '0002633117867', '2021-04-01', '2021-05-24', '2021-05-24 16:41:56'),
(16, '0002633117867', '2021-04-01', '2021-05-24', '2021-05-24 16:41:57'),
(17, '0002633117867', '2021-05-01', '2021-05-25', '2021-05-25 07:39:54'),
(18, '123456', '', '', '2022-11-30 07:59:59'),
(19, '123456', '', '', '2022-11-30 08:26:29'),
(20, '123456', '', '', '2022-11-30 09:25:40'),
(21, '123456', '', '', '2022-11-30 09:25:41'),
(22, '123456', '2022-11-30', '2022-11-30', '2022-11-30 09:25:46'),
(23, '123456', '2022-11-30', '2022-11-30', '2022-11-30 09:25:47'),
(24, '123456', '2022-11-30', '2022-11-30', '2022-11-30 09:36:33'),
(25, '123456', '2022-11-03', '2022-11-30', '2022-11-30 10:12:51'),
(26, '123456', '2022-11-30', '2022-11-30', '2022-11-30 10:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `url`
--

CREATE TABLE IF NOT EXISTS `url` (
  `id` int(10) NOT NULL,
  `url` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` enum('non_expire','expired') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `valid_upto` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `url`
--

INSERT INTO `url` (`id`, `url`, `phone_number`, `token`, `status`, `created_at`, `valid_upto`) VALUES
(1, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=1wg3IkYXfA', '01672063705', '1wg3IkYXfA', 'expired', '2021-04-17 22:39:18', '2024-11-30 14:14:05'),
(2, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=EyIZGxspQP', '01672063705', 'EyIZGxspQP', 'non_expire', '2022-11-30 10:51:56', '2024-11-30 14:14:05'),
(3, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=oCwCFUoU2u', '01740979517', 'oCwCFUoU2u', 'non_expire', '2022-06-10 09:22:54', '2022-06-10 23:07:28'),
(4, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=Sxxmy9yYqF', '8801770256789', 'Sxxmy9yYqF', 'non_expire', '2021-05-24 09:34:14', '2021-05-24 15:49:14'),
(5, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=Q1ujcsOMlg', '5566', 'Q1ujcsOMlg', 'non_expire', '2021-05-24 09:35:24', '2021-05-24 15:50:24'),
(6, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=9n98SvA7Xb', '01748388153', '9n98SvA7Xb', 'non_expire', '2021-05-24 09:38:45', '2021-05-24 16:03:51'),
(7, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=rvzs6GTpOx', '01405175221', 'rvzs6GTpOx', 'non_expire', '2021-05-24 09:39:34', '2021-05-24 16:51:12'),
(8, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=7MKtPczDpT', '01735573303', '7MKtPczDpT', 'non_expire', '2021-05-24 09:40:10', '2021-05-24 15:55:10'),
(9, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=1Q3dwxIG7N', '01798128799', '1Q3dwxIG7N', 'non_expire', '2021-05-24 09:48:47', '2021-05-24 16:03:47'),
(10, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=ayJ05weVPw', '01833384640', 'ayJ05weVPw', 'non_expire', '2021-05-24 15:06:58', '2021-05-24 21:21:58'),
(11, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=UkbrrYZF33', '01730426462', 'UkbrrYZF33', 'non_expire', '2021-05-25 07:38:30', '2021-05-25 13:53:30'),
(12, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=Ed9wMgjwXQ', '01753696843', 'Ed9wMgjwXQ', 'non_expire', '2021-05-25 10:58:53', '2021-05-25 17:13:53'),
(13, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=6Q6n3fnLsl', '01712006619', '6Q6n3fnLsl', 'non_expire', '2021-05-31 06:57:19', '2021-05-31 13:12:19'),
(14, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=JtiLP3dNg0', '01716860134', 'JtiLP3dNg0', 'non_expire', '2021-05-31 07:13:59', '2021-05-31 13:28:59'),
(15, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=voh4mlI1JZ', '01730323400', 'voh4mlI1JZ', 'non_expire', '2021-05-31 14:56:20', '2021-05-31 21:11:20'),
(16, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=GeFTeJUPqA', '01911540356', 'GeFTeJUPqA', 'non_expire', '2021-06-22 11:46:50', '2021-06-22 18:01:50'),
(17, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=Se4jyV86eb', '01847352898', 'Se4jyV86eb', 'non_expire', '2021-06-08 05:57:22', '2021-06-08 12:12:22'),
(18, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=e5nlzkNj2A', '01683401447', 'e5nlzkNj2A', 'non_expire', '2021-06-21 10:41:34', '2021-06-21 16:56:34'),
(19, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=t2Cmh0f9Q2', '01778570656', 't2Cmh0f9Q2', 'non_expire', '2021-06-21 10:43:49', '2021-06-21 16:58:49'),
(20, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=AUITAbIhdX', 'NO', 'AUITAbIhdX', 'non_expire', '2022-11-30 08:01:08', '2022-11-30 14:16:08'),
(21, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=orDkCfpvUI', '01675342612', 'orDkCfpvUI', 'non_expire', '2022-11-30 07:59:05', '2024-11-30 14:14:05'),
(22, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=6KC3LoDtRA', '01746733817', '6KC3LoDtRA', 'non_expire', '2022-08-29 09:16:12', '2022-12-02 15:31:12'),
(23, 'http://103.204.81.67/sgGGJCJhjhHGHG/abdX.php?token=2UbBgsqGx0', '01322821911', '2UbBgsqGx0', 'non_expire', '2022-08-29 09:50:33', '2022-11-30 23:05:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_info`
--
ALTER TABLE `account_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_number` (`account_number`);

--
-- Indexes for table `account_request`
--
ALTER TABLE `account_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_info`
--
ALTER TABLE `card_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `card_number` (`card_number`);

--
-- Indexes for table `last_5_account_transaction`
--
ALTER TABLE `last_5_account_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statement`
--
ALTER TABLE `statement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statement_request`
--
ALTER TABLE `statement_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `url`
--
ALTER TABLE `url`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_info`
--
ALTER TABLE `account_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `account_request`
--
ALTER TABLE `account_request`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `card_info`
--
ALTER TABLE `card_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `last_5_account_transaction`
--
ALTER TABLE `last_5_account_transaction`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=366;
--
-- AUTO_INCREMENT for table `statement`
--
ALTER TABLE `statement`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `statement_request`
--
ALTER TABLE `statement_request`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `url`
--
ALTER TABLE `url`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
