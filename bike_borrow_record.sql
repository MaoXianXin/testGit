-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-10-23 05:37:30
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
(23, 66, 67, 68, 55, '2017-10-23 13:25:31', 0, '0000-00-00 00:00:00', '', 0),
(24, 68, 67, 68, 57, '2017-10-23 13:25:37', 0, '0000-00-00 00:00:00', '', 0),
(25, 72, 68, 71, 61, '2017-10-23 13:28:30', 0, '0000-00-00 00:00:00', '', 0),
(26, 70, 68, 67, 59, '2017-10-23 13:29:00', 0, '0000-00-00 00:00:00', '', 0);

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
  MODIFY `borrowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
