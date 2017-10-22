-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-10-22 16:20:22
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sharebike`
--

-- --------------------------------------------------------

--
-- 表的结构 `bike_offer_record`
--

CREATE TABLE `bike_offer_record` (
  `offerId` int(11) NOT NULL,
  `bikeId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `borrowerId` int(11) NOT NULL,
  `borrowId` int(11) NOT NULL,
  `offerTime` datetime NOT NULL,
  `offerState` int(1) NOT NULL,
  `stopOfferTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `bike_offer_record`
--

INSERT INTO `bike_offer_record` (`offerId`, `bikeId`, `userId`, `borrowerId`, `borrowId`, `offerTime`, `offerState`, `stopOfferTime`) VALUES
(31, 47, 24, 25, 13, '2017-10-16 20:34:06', 3, '2017-10-16 21:50:18'),
(32, 48, 24, 0, 0, '2017-10-16 20:31:47', 3, '2017-10-16 20:33:01'),
(33, 49, 24, 25, 14, '2017-10-16 16:13:05', 1, '0000-00-00 00:00:00'),
(34, 50, 25, 0, 0, '2017-10-16 16:14:48', 0, '0000-00-00 00:00:00'),
(35, 51, 25, 24, 21, '2017-10-16 16:15:21', 1, '0000-00-00 00:00:00'),
(36, 52, 25, 24, 17, '2017-10-16 16:15:55', 2, '0000-00-00 00:00:00'),
(37, 53, 26, 25, 15, '2017-10-16 16:16:51', 1, '0000-00-00 00:00:00'),
(38, 54, 26, 24, 18, '2017-10-16 16:17:20', 2, '0000-00-00 00:00:00'),
(39, 55, 26, 24, 20, '2017-10-16 16:18:01', 1, '0000-00-00 00:00:00'),
(40, 56, 27, 24, 16, '2017-10-16 16:18:55', 2, '0000-00-00 00:00:00'),
(41, 57, 27, 24, 19, '2017-10-16 16:19:21', 1, '0000-00-00 00:00:00'),
(42, 58, 27, 24, 22, '2017-10-16 16:19:53', 1, '0000-00-00 00:00:00'),
(43, 59, 24, 0, 0, '2017-10-16 20:33:34', 3, '2017-10-16 21:45:53'),
(44, 48, 24, 0, 0, '2017-10-16 20:52:58', 0, '0000-00-00 00:00:00'),
(45, 48, 24, 0, 0, '2017-10-16 21:00:03', 3, '2017-10-16 21:56:24'),
(46, 48, 24, 0, 0, '2017-10-16 21:57:40', 0, '0000-00-00 00:00:00'),
(47, 59, 24, 0, 0, '2017-10-16 21:57:29', 0, '0000-00-00 00:00:00'),
(48, 47, 24, 0, 0, '2017-10-16 21:50:25', 0, '0000-00-00 00:00:00'),
(49, 60, 1, 0, 0, '2017-10-22 14:59:34', 0, '0000-00-00 00:00:00'),
(50, 61, 1, 0, 0, '2017-10-22 15:10:46', 0, '0000-00-00 00:00:00'),
(51, 62, 1, 0, 0, '2017-10-22 15:27:58', 0, '0000-00-00 00:00:00'),
(52, 63, 0, 0, 0, '2017-10-22 15:31:11', 0, '0000-00-00 00:00:00'),
(53, 64, 0, 0, 0, '2017-10-22 17:00:58', 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bike_offer_record`
--
ALTER TABLE `bike_offer_record`
  ADD PRIMARY KEY (`offerId`),
  ADD UNIQUE KEY `offerId` (`offerId`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `bike_offer_record`
--
ALTER TABLE `bike_offer_record`
  MODIFY `offerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
