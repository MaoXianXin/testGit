-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-10-23 05:38:17
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
-- 表的结构 `bike_user`
--

CREATE TABLE `bike_user` (
  `userId` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nickName` varchar(20) NOT NULL,
  `sex` int(1) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `joinTime` datetime NOT NULL,
  `headPhoto` varchar(32) NOT NULL,
  `extension` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `bike_user`
--

INSERT INTO `bike_user` (`userId`, `username`, `password`, `nickName`, `sex`, `phone`, `joinTime`, `headPhoto`, `extension`) VALUES
(67, '18839125716', 'e10adc3949ba59abbe56e057f20f883e', '火龙果', 0, '18839125716', '2017-10-23 13:15:34', '67_1508735904', '.jpg'),
(68, '18839125717', 'e10adc3949ba59abbe56e057f20f883e', '老毛桃', 0, '18839125717', '2017-10-23 13:16:10', '68_1508736134', '.jpg'),
(71, '18839125718', 'e10adc3949ba59abbe56e057f20f883e', '小米', 0, '18839125718', '2017-10-23 13:17:09', '71_1508736363', '.jpg'),
(72, '18839125719', 'e10adc3949ba59abbe56e057f20f883e', '大米', 0, '18839125719', '2017-10-23 13:17:31', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bike_user`
--
ALTER TABLE `bike_user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `userId` (`userId`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `bike_user`
--
ALTER TABLE `bike_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
