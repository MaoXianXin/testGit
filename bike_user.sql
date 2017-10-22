-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-10-22 16:19:25
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
(24, '18839125716', 'e10adc3949ba59abbe56e057f20f883e', '火龙果', 1, '18839125716', '2017-10-13 18:10:27', '24_1507946566', '.jpg'),
(25, '18839125717', 'e10adc3949ba59abbe56e057f20f883e', '火狐', 0, '18839125717', '2017-10-13 18:10:42', '25_1507953080', '.png'),
(26, '18839125718', 'e10adc3949ba59abbe56e057f20f883e', '茶叶的友谊', 1, '18839125718', '2017-10-13 18:10:54', '26_1507980027', '.jpg'),
(27, '18839125719', 'e10adc3949ba59abbe56e057f20f883e', '飞奔少年', 0, '18839125719', '2017-10-13 18:33:47', '27_1507981262', '.jpg'),
(28, '18839125720', 'e10adc3949ba59abbe56e057f20f883e', '飞起', 0, '18839125720', '2017-10-17 14:37:24', '', ''),
(29, '18839125721', 'e10adc3949ba59abbe56e057f20f883e', '笨笨', 0, '18839125721', '2017-10-17 14:46:32', '', ''),
(32, '18839125722', 'e10adc3949ba59abbe56e057f20f883e', '笨笨2', 0, '18839125722', '2017-10-17 14:50:30', '', ''),
(33, '18839125723', 'e10adc3949ba59abbe56e057f20f883e', '笨笨3', 0, '18839125723', '2017-10-17 14:51:21', '', ''),
(34, '18839125724', 'e10adc3949ba59abbe56e057f20f883e', '笨笨4', 0, '18839125724', '2017-10-17 15:07:47', '', ''),
(35, '18839125726', 'e10adc3949ba59abbe56e057f20f883e', '吼吼', 0, '18839125726', '2017-10-21 18:35:03', '', ''),
(45, '18839125701', 'e10adc3949ba59abbe56e057f20f883e', '辛普森', 0, '18839125701', '2017-10-21 19:16:04', '', ''),
(50, '15539875698', 'e10adc3949ba59abbe56e057f20f883e', '小炮', 0, '15539875698', '2017-10-21 19:42:56', '', ''),
(51, '15578945789', 'e10adc3949ba59abbe56e057f20f883e', '小小', 0, '15578945789', '2017-10-21 19:53:05', '', ''),
(60, '15877969874', 'e10adc3949ba59abbe56e057f20f883e', '迅雷', 0, '15877969874', '2017-10-21 20:29:37', '', ''),
(61, '15877969876', '14e1b600b1fd579f47433b88e8d85291', '迅雷2', 0, '15877969876', '2017-10-21 20:34:18', '', ''),
(62, '15589654789', 'e10adc3949ba59abbe56e057f20f883e', '葛根', 0, '15589654789', '2017-10-21 20:43:53', '', ''),
(63, '15589654755', 'e10adc3949ba59abbe56e057f20f883e', '葛根1', 0, '15589654755', '2017-10-21 20:44:43', '', ''),
(65, '15589678547', 'e10adc3949ba59abbe56e057f20f883e', '品牌', 0, '15589678547', '2017-10-21 21:40:07', '', ''),
(66, '18856925634', 'e10adc3949ba59abbe56e057f20f883e', '匹配1', 0, '18856925634', '2017-10-21 21:40:59', '', '');

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
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
