-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-10-22 16:20:37
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
(1, '第一条', '1111111111111111111111111', '2017-10-01 05:11:30'),
(2, '第二条', '第二条第二条第二条第二条第二条', '2017-10-02 08:18:12'),
(3, '第三条', '第三条第三条第三条第三条第三条', '2017-10-03 10:11:36'),
(4, '第四条', '第四条第四条第四条第四条第四条', '2017-10-04 13:10:14'),
(5, '第五条', '第五条第五条第五条第五条第五条', '2017-10-05 13:09:35'),
(6, '第六条', '第六条第六条第六条第六条第六条', '2017-10-06 05:50:12'),
(7, '第七条', '第七条第七条第七条第七条第七条', '2017-10-07 09:18:13'),
(8, '第八条', '第八条第八条第八条第八条第八条', '2017-10-08 12:08:30'),
(11, '第10条', '第10条第10条第10条第10条第10条', '0000-00-00 00:00:00'),
(12, '14', '444444444444', '2017-10-21 22:17:52');

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
  MODIFY `newsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
