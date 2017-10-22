-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-10-22 16:21:04
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
-- 表的结构 `bike_borrow_record`
--

CREATE TABLE `bike_borrow_record` (
  `borrowId` int(11) NOT NULL,
  `bikeId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `borrowerId` int(11) NOT NULL,
  `offerId` int(11) NOT NULL,
  `borrowTime` datetime NOT NULL,
  `borrowState` int(1) NOT NULL,
  `backTime` datetime NOT NULL,
  `allTime` varchar(12) CHARACTER SET utf8mb4 NOT NULL,
  `allPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `bike_borrow_record`
--

INSERT INTO `bike_borrow_record` (`borrowId`, `bikeId`, `userId`, `borrowerId`, `offerId`, `borrowTime`, `borrowState`, `backTime`, `allTime`, `allPrice`) VALUES
(13, 47, 24, 25, 31, '2017-10-16 16:34:40', 1, '2017-10-16 17:15:09', '40分钟29秒', 2),
(14, 49, 24, 25, 33, '2017-10-16 16:36:20', 0, '0000-00-00 00:00:00', '', 0),
(15, 53, 26, 25, 37, '2017-10-16 16:52:18', 0, '0000-00-00 00:00:00', '', 0),
(16, 56, 27, 24, 40, '2017-10-16 21:13:00', 1, '2017-10-16 21:34:07', '21分钟7秒', 2),
(17, 52, 25, 24, 36, '2017-10-16 21:35:48', 1, '2017-10-16 21:39:03', '3分钟15秒', 2),
(18, 54, 26, 24, 38, '2017-10-16 21:36:23', 1, '2017-10-16 21:44:40', '8分钟17秒', 2),
(19, 57, 27, 24, 41, '2017-10-16 21:37:04', 0, '0000-00-00 00:00:00', '', 0),
(20, 55, 26, 24, 39, '2017-10-16 21:38:39', 0, '0000-00-00 00:00:00', '', 0),
(21, 51, 25, 24, 35, '2017-10-17 15:28:20', 0, '0000-00-00 00:00:00', '', 0),
(22, 58, 27, 24, 42, '2017-10-17 15:28:28', 0, '0000-00-00 00:00:00', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bike_borrow_record`
--
ALTER TABLE `bike_borrow_record`
  ADD PRIMARY KEY (`borrowId`),
  ADD UNIQUE KEY `borrowId` (`borrowId`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `bike_borrow_record`
--
ALTER TABLE `bike_borrow_record`
  MODIFY `borrowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
