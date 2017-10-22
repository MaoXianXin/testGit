-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-10-22 16:21:32
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
-- 表的结构 `bike_bikelist`
--

CREATE TABLE `bike_bikelist` (
  `bikeId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `brand` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `howOld` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `bikeKinds` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `sexKinds` varchar(2) CHARACTER SET utf8mb4 NOT NULL,
  `price` int(11) NOT NULL,
  `phone` varchar(12) CHARACTER SET utf8mb4 NOT NULL,
  `location` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `bikeImg` varchar(32) CHARACTER SET utf8mb4 NOT NULL,
  `bikeExtension` varchar(4) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `bike_bikelist`
--

INSERT INTO `bike_bikelist` (`bikeId`, `userId`, `brand`, `howOld`, `bikeKinds`, `sexKinds`, `price`, `phone`, `location`, `bikeImg`, `bikeExtension`) VALUES
(47, 24, '飞鸽', '九成新', 'bike', 'm', 1, '18839125716', '理工大学东门', '24_1508663956', '.jpg'),
(48, 24, '小鸟', '八成新', 'bike', 'm', 2, '18839125716', '理工大学南门', '24_1508141537', '.jpg'),
(49, 24, '飞鸟', '七成新', 'bike', 'm', 3, '18839125716', '理工大学西门', '24_1508141585', '.jpg'),
(50, 25, '飞鸽1', '四成新', 'bike', 'm', 1, '18839125717', '理工大学西门', '25_1508141688', '.jpg'),
(51, 25, '小鸟1', '五成新', 'bike', 'f', 2, '18839125717', '理工大学东门', '25_1508141721', '.jpg'),
(52, 25, '飞虎1', '六成新', 'bike', 'm', 3, '18839125717', '理工大学西门', '25_1508141755', '.jpg'),
(53, 26, '飞鸽2', '三成新', 'bike', 'f', 1, '18839125718', '理工大学西门', '26_1508141811', '.jpg'),
(54, 26, '小鸟2', '五成新', 'bike', 'm', 2, '18839125718', '理工大学南门', '26_1508141840', '.jpg'),
(55, 26, '飞虎2', '七成新', 'bike', 'f', 3, '18839125718', '理工大学东门', '26_1508141881', '.jpg'),
(56, 27, '飞鸽3', '八成新', 'bike', 'm', 1, '18839125719', '理工大学东门', '27_1508141935', '.jpg'),
(57, 27, '小鸟', '九成新', 'bike', 'f', 2, '18839125719', '理工大学西门', '27_1508141961', '.jpg'),
(58, 27, '飞虎3', '七成新', 'bike', 'm', 3, '18839125719', '理工大学南门', '27_1508141993', '.jpg'),
(59, 24, '飞虎', '五成新', 'elect', 'm', 4, '18839125716', '理工大学', '_1508663742', '.jpg'),
(62, 0, '小鸟', '九成新', 'bike', 'm', 2, '15578547854', '理工大学东门', '001_1508657278', '.jpg'),
(63, 0, '飞鸽', '八成新', 'bike', 'm', 1, '18957412563', '理工大学西门', '001_1508657471', '.jpg'),
(64, 0, '小鸟1', '五成新', 'elect', 'm', 0, '18839125717', '理工大学东门', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bike_bikelist`
--
ALTER TABLE `bike_bikelist`
  ADD PRIMARY KEY (`bikeId`),
  ADD UNIQUE KEY `bikeId` (`bikeId`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `bike_bikelist`
--
ALTER TABLE `bike_bikelist`
  MODIFY `bikeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
