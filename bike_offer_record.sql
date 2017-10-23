-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-10-23 05:38:02
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
(54, 65, 67, 0, 0, '2017-10-23 13:19:14', 0, '0000-00-00 00:00:00'),
(55, 66, 67, 68, 23, '2017-10-23 13:19:41', 1, '0000-00-00 00:00:00'),
(56, 67, 67, 0, 0, '2017-10-23 13:20:15', 3, '2017-10-23 13:29:30'),
(57, 68, 67, 68, 24, '2017-10-23 13:21:02', 1, '0000-00-00 00:00:00'),
(58, 69, 68, 0, 0, '2017-10-23 13:22:52', 0, '0000-00-00 00:00:00'),
(59, 70, 68, 67, 26, '2017-10-23 13:23:24', 1, '0000-00-00 00:00:00'),
(60, 71, 68, 0, 0, '2017-10-23 13:24:27', 0, '0000-00-00 00:00:00'),
(61, 72, 68, 71, 25, '2017-10-23 13:25:10', 1, '0000-00-00 00:00:00'),
(62, 73, 71, 0, 0, '2017-10-23 13:26:46', 0, '0000-00-00 00:00:00'),
(63, 74, 71, 0, 0, '2017-10-23 13:27:22', 0, '0000-00-00 00:00:00'),
(64, 75, 71, 0, 0, '2017-10-23 13:27:50', 0, '0000-00-00 00:00:00'),
(65, 76, 71, 0, 0, '2017-10-23 13:28:20', 0, '0000-00-00 00:00:00');

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
  MODIFY `offerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
