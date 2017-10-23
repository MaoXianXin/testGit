-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-10-23 05:36:58
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
(65, 67, '小鸟', '八成新', 'bike', 'f', 3, '18839125716', '理工大学东门', '67_1508735954', '.jpg'),
(66, 67, '飞鸽', '六成新', 'bike', 'm', 2, '18839125716', '理工大学西门', '67_1508735981', '.jpg'),
(67, 67, '宝马', '八成新', 'bike', 'f', 4, '18839125716', '理工大学南门', '67_1508736015', '.jpg'),
(68, 67, '小鸟', '五成新', 'bike', 'm', 3, '18839125716', '计算机学院门口', '67_1508736062', '.jpg'),
(69, 68, '小鸟', '八成新', 'bike', 'f', 1, '18839125717', '电气学院', '68_1508736172', '.jpg'),
(70, 68, '飞鸽', '九成新', 'bike', 'm', 2, '18839125717', '理工大学东门', '68_1508736204', '.jpg'),
(71, 68, '小刀', '六成新', 'bike', 'f', 2, '18839125717', '理工大学西门', '68_1508736267', '.jpg'),
(72, 68, '小鸟', '四成新', 'bike', 'm', 3, '18839125717', '理工大学南门', '68_1508736310', '.jpg'),
(73, 71, '小鸟', '八成新', 'bike', 'f', 2, '18839125718', '机械学院', '71_1508736406', '.jpg'),
(74, 71, '飞鸽', '七成新', 'bike', 'm', 1, '18839125718', '理工大学西门', '71_1508736442', '.jpg'),
(75, 71, '宝马', '八成新', 'bike', 'm', 3, '18839125718', '理工大学南门', '71_1508736470', '.jpg'),
(76, 71, '飞翔', '八成新', 'bike', 'm', 4, '18839125718', '理工大学', '71_1508736500', '.jpg');

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
  MODIFY `bikeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
