-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-10-23 05:37:47
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
-- 表的结构 `bike_news`
--

CREATE TABLE `bike_news` (
  `newsId` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `content` varchar(600) NOT NULL,
  `pubTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `bike_news`
--

INSERT INTO `bike_news` (`newsId`, `title`, `content`, `pubTime`) VALUES
(13, '校园自行车', '今天开始校园自行车租借正式开始了！', '2017-10-01 08:22:16'),
(14, '租车价格', '租车价格由供车者决定', '2017-10-02 07:19:27'),
(15, '租车规定', '新一轮的租车规定将在下周公布', '2017-10-03 07:07:44'),
(16, '今日大事', '几天让我们一起组团租车', '2017-10-04 11:13:18'),
(17, '今天租了吗？', '今天是一个租车的好日子', '2017-10-05 10:06:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bike_news`
--
ALTER TABLE `bike_news`
  ADD PRIMARY KEY (`newsId`),
  ADD UNIQUE KEY `newsId` (`newsId`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `bike_news`
--
ALTER TABLE `bike_news`
  MODIFY `newsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
