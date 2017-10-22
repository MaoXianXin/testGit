-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-10-22 15:55:16
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bike`
--
CREATE DATABASE IF NOT EXISTS `bike` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bike`;

-- --------------------------------------------------------

--
-- 表的结构 `bike_admin`
--

CREATE TABLE `bike_admin` (
  `id` int(11) NOT NULL,
  `adminName` varchar(20) CHARACTER SET latin1 NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `bike_admin`
--

INSERT INTO `bike_admin` (`id`, `adminName`, `password`) VALUES
(3, 'root', '123456'),
(4, '001', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `bike_borrow_record`
--

CREATE TABLE `bike_borrow_record` (
  `id` int(50) NOT NULL,
  `cardid` char(50) NOT NULL,
  `name` char(50) NOT NULL,
  `username` char(50) NOT NULL,
  `bike_id` char(50) NOT NULL,
  `imgName` varchar(20) NOT NULL,
  `bike_host` char(50) NOT NULL,
  `use_time` char(255) NOT NULL,
  `back_time` char(255) NOT NULL,
  `state` int(5) NOT NULL,
  `cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `bike_borrow_record`
--

INSERT INTO `bike_borrow_record` (`id`, `cardid`, `name`, `username`, `bike_id`, `imgName`, `bike_host`, `use_time`, `back_time`, `state`, `cost`) VALUES
(61, '311409030208', '孙海燕', '火龙果', 'P5', '1497272713', '淡淡', '2017-06-12 21:53', '', 0, 0),
(62, '311409030208', '孙海燕', '火龙果', 'P3', '1497272491', '离梦', '2017-06-12 21:54', '2017-06-12 21:56', 1, 0),
(63, '311409030208', '孙果果', '火龙果', 'P2', '1497272436', '点点滴滴', '2017-06-12 22:04', '2017-06-23 11:42', 1, 0),
(64, '311409030201', '蔡晓丽', '丽丽', 'P3', '1497272491', '离梦', '2017-06-13 09:20', '2017-06-13 09:21', 1, 0),
(65, '311409030208', '孙果果', '火龙果', 'P2', '1497272436', '点点滴滴', '2017-06-23 11:43', '', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `bike_notice`
--

CREATE TABLE `bike_notice` (
  `id` int(50) NOT NULL,
  `title` char(50) NOT NULL,
  `content` longtext NOT NULL,
  `pubtime` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `bike_notice`
--

INSERT INTO `bike_notice` (`id`, `title`, `content`, `pubtime`) VALUES
(1, '有关校园自行车停放地点的通知', '自2017年9月19日起，学生用完自行车后需将其停放在学校规定的停车处。', '2017-06-08'),
(8, '河南理工大学购车计划', '学校计划在9月份购进一批自行车', '2017-06-08'),
(9, '自行车收费标准', '自2017年9月8号起，学校提供的自行车价格更改为：2元/小时', '2017-06-08'),
(10, '中国共享单车专业委员会在上海成立', '　中新社上海5月7日电 （马化宇）中国自行车协会7日在沪召开共享单车专业委员会成立大会，宣布成立中国自行车协会共享单车专业委员会，这标志着共享单车被正式纳入国家自行车行业协会。\r\n\r\n　　根据规则，共享单车专业委员会具有4项工作宗旨：一，引导实体经济与虚拟经济相结合、传统产业与互联网产业相结合；二，引导企业深化供给侧结构性改革；三，建立和完善行业自律机制，维护成员的合法权益；四，协助政府部门加强行业管理，共同促进共享单车有序发展。', '2017-06-12'),
(11, 'PPP', '的点点滴滴多多多多', '2017-06-13');

-- --------------------------------------------------------

--
-- 表的结构 `bike_price`
--

CREATE TABLE `bike_price` (
  `id` int(5) NOT NULL,
  `money` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `bike_price`
--

INSERT INTO `bike_price` (`id`, `money`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- 表的结构 `bike_provide_record`
--

CREATE TABLE `bike_provide_record` (
  `id` int(50) NOT NULL,
  `bike_type` char(20) NOT NULL,
  `bike_id` char(50) NOT NULL,
  `cardid` char(50) NOT NULL,
  `bike_host` char(50) NOT NULL,
  `provide_time` char(255) NOT NULL,
  `imgName` varchar(20) NOT NULL,
  `bike_price` int(20) NOT NULL,
  `bike_brand` char(50) NOT NULL,
  `bike_time` int(10) NOT NULL,
  `is_audit` int(5) NOT NULL,
  `is_borrow` int(5) NOT NULL,
  `state` char(50) NOT NULL,
  `bike_place` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `bike_provide_record`
--

INSERT INTO `bike_provide_record` (`id`, `bike_type`, `bike_id`, `cardid`, `bike_host`, `provide_time`, `imgName`, `bike_price`, `bike_brand`, `bike_time`, `is_audit`, `is_borrow`, `state`, `bike_place`) VALUES
(43, '个人', 'P1', '311409030208', '火龙果', '2017-06-12', '1497272325', 5, '小鸟', 1, 1, 0, '0', '一号教学楼'),
(44, '个人', 'P2', '311409030209', '点点滴滴', '2017-06-12', '1497272436', 3, '飞鸽', 1, 0, 1, '0', '二号教学楼'),
(45, '个人', 'P3', '311409030207', '离梦', '2017-06-12', '1497272491', 4, '小鸟', 2, 0, 0, '1', '三号教学楼'),
(46, '个人', 'P4', '311409030204', '呆萌', '2017-06-12', '1497272593', 5, '小鸟', 1, 0, 0, '1', '三号教学楼'),
(47, '个人', 'P5', '311409030205', '淡淡', '2017-06-12', '1497272713', 2, '凤凰', 3, 0, 1, '0', '三号教学楼'),
(48, '个人', 'P6', '311409030206', '然祁', '2017-06-12', '1497272788', 4, '小鸟', 1, 0, 0, '1', '三号教学楼'),
(49, '官方', 'O7', '111111', '学校', '2017-06-12', '1497276328', 5, '小鸟', 1, 1, 0, '0', '学校西门'),
(50, '个人', 'P8', '311409030201', '丽丽', '2017-06-13', '1497316647', 5, '小鸟', 1, 1, 0, '0', '三号教学楼'),
(51, '个人', 'P9', '311409030208', '火龙果', '2017-06-23', '1498189449', 0, '', 0, 1, 0, '0', '一号教学楼'),
(52, '个人', 'P10', '311409030208', '火龙果', '2017-08-10', '1502343652', 0, '', 0, 1, 0, '0', '一号教学楼'),
(53, '个人', 'P11', '311409030208', '火龙果', '2017-08-10', '1502345799', 0, '', 0, 1, 0, '0', '一号教学楼'),
(54, '个人', 'P12', '311409030208', '火龙果', '2017-08-10', '1502346215', 0, '', 0, 1, 0, '0', '一号教学楼'),
(55, '个人', 'P13', '311409030208', '火龙果', '2017-08-10', '1502346729', 2, '小鸟', 1, 1, 0, '0', '学校西门'),
(56, '个人', 'P14', '311409030208', '火龙果', '2017-08-10', '1502346737', 2, '小鸟', 1, 1, 0, '0', '学校西门'),
(57, '个人', 'P15', '311409030208', '火龙果', '2017-08-10', '1502348220', 2, 'ss', 1, 1, 0, '0', '学校西门'),
(58, '个人', 'P16', '311409030208', '火龙果', '2017-08-10', '1502348284', 2, 'a', 1, 1, 0, '0', '学校西门'),
(59, '个人', 'P17', '311409030208', '火龙果', '2017-08-10', '1502348311', 2, 'a', 1, 1, 0, '0', '学校西门'),
(60, '个人', 'P18', '311409030208', '火龙果', '2017-08-10', '1502349769', 3, 'a', 1, 1, 0, '0', '学校西门');

-- --------------------------------------------------------

--
-- 表的结构 `bike_user`
--

CREATE TABLE `bike_user` (
  `id` int(50) NOT NULL,
  `cardid` char(50) NOT NULL,
  `password` char(255) NOT NULL,
  `username` char(50) NOT NULL,
  `name` char(50) NOT NULL,
  `college` char(30) NOT NULL,
  `major` char(30) NOT NULL,
  `class` char(50) NOT NULL,
  `grade` int(4) NOT NULL,
  `credit` float NOT NULL,
  `is_provide` char(5) NOT NULL,
  `money` float NOT NULL,
  `is_activate` int(5) NOT NULL,
  `activate_time` text NOT NULL,
  `telphone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `bike_user`
--

INSERT INTO `bike_user` (`id`, `cardid`, `password`, `username`, `name`, `college`, `major`, `class`, `grade`, `credit`, `is_provide`, `money`, `is_activate`, `activate_time`, `telphone`) VALUES
(18, '311409030208', '123456', '火龙果', '孙果果', '计算机', '信管', '1402', 2014, 5, '0', 96, 1, '2017-06-12 20:47', '18839125597'),
(19, '311409030209', '456', '点点滴滴', '王丽丽', '计算机', '信管', '1402', 2014, 5, '0', 102, 1, '2017-06-12 20:49', '18839125647'),
(20, '311409030207', '789', '离梦', '齐琳琳', '计算机', '信管', '1402', 2014, 5, '0', 102, 1, '2017-06-12 20:59', '15589647895'),
(21, '311409030206', '000', '然祁', '刘小晓', '计算机', '信管', '1402', 2014, 5, '0', 100, 1, '2017-06-12 20:26', '16632489745'),
(22, '311409030205', '111', '淡淡', '蒋淡淡', '计算机', '信管', '1402', 2014, 5, '0', 101, 1, '2017-06-12 20:38', '15847596547'),
(23, '311409030204', '333', '呆萌', '何泡泡', '计算机', '信管', '1402', 2014, 5, '0', 100, 1, '2017-06-12 20:06', '16547858746'),
(24, '311409030201', '123', '丽丽', '蔡晓丽', '计算机', '信管', '1402', 2014, 5, '0', 99, 1, '2017-06-13 09:54', '15589745698');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bike_admin`
--
ALTER TABLE `bike_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_3` (`id`);

--
-- Indexes for table `bike_borrow_record`
--
ALTER TABLE `bike_borrow_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bike_notice`
--
ALTER TABLE `bike_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bike_provide_record`
--
ALTER TABLE `bike_provide_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bike_user`
--
ALTER TABLE `bike_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `bike_admin`
--
ALTER TABLE `bike_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `bike_borrow_record`
--
ALTER TABLE `bike_borrow_record`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- 使用表AUTO_INCREMENT `bike_notice`
--
ALTER TABLE `bike_notice`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 使用表AUTO_INCREMENT `bike_provide_record`
--
ALTER TABLE `bike_provide_record`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- 使用表AUTO_INCREMENT `bike_user`
--
ALTER TABLE `bike_user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;--
-- Database: `sharebike`
--
CREATE DATABASE IF NOT EXISTS `sharebike` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sharebike`;

-- --------------------------------------------------------

--
-- 表的结构 `bike_admin`
--

CREATE TABLE `bike_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(4) NOT NULL,
  `adminPsw` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `bike_admin`
--

INSERT INTO `bike_admin` (`adminId`, `adminName`, `adminPsw`) VALUES
(1, '001', 'e10adc3949ba59abbe56e057f20f883e'),
(2, '002', 'e10adc3949ba59abbe56e057f20f883e');

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

-- --------------------------------------------------------

--
-- 表的结构 `bike_kinds`
--

CREATE TABLE `bike_kinds` (
  `kindsId` int(11) NOT NULL,
  `bikeKinds` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `bike_admin`
--
ALTER TABLE `bike_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `bike_bikelist`
--
ALTER TABLE `bike_bikelist`
  ADD PRIMARY KEY (`bikeId`),
  ADD UNIQUE KEY `bikeId` (`bikeId`);

--
-- Indexes for table `bike_borrow_record`
--
ALTER TABLE `bike_borrow_record`
  ADD PRIMARY KEY (`borrowId`),
  ADD UNIQUE KEY `borrowId` (`borrowId`);

--
-- Indexes for table `bike_kinds`
--
ALTER TABLE `bike_kinds`
  ADD PRIMARY KEY (`kindsId`),
  ADD UNIQUE KEY `kindsId` (`kindsId`);

--
-- Indexes for table `bike_news`
--
ALTER TABLE `bike_news`
  ADD PRIMARY KEY (`newsId`),
  ADD UNIQUE KEY `newsId` (`newsId`);

--
-- Indexes for table `bike_offer_record`
--
ALTER TABLE `bike_offer_record`
  ADD PRIMARY KEY (`offerId`),
  ADD UNIQUE KEY `offerId` (`offerId`);

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
-- 使用表AUTO_INCREMENT `bike_admin`
--
ALTER TABLE `bike_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `bike_bikelist`
--
ALTER TABLE `bike_bikelist`
  MODIFY `bikeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- 使用表AUTO_INCREMENT `bike_borrow_record`
--
ALTER TABLE `bike_borrow_record`
  MODIFY `borrowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- 使用表AUTO_INCREMENT `bike_kinds`
--
ALTER TABLE `bike_kinds`
  MODIFY `kindsId` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `bike_news`
--
ALTER TABLE `bike_news`
  MODIFY `newsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用表AUTO_INCREMENT `bike_offer_record`
--
ALTER TABLE `bike_offer_record`
  MODIFY `offerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- 使用表AUTO_INCREMENT `bike_user`
--
ALTER TABLE `bike_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;--
-- Database: `thinkphp`
--
CREATE DATABASE IF NOT EXISTS `thinkphp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `thinkphp`;

-- --------------------------------------------------------

--
-- 表的结构 `tp_user`
--

CREATE TABLE `tp_user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `sex` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_user`
--

INSERT INTO `tp_user` (`id`, `username`, `sex`) VALUES
(6, 'hpu', 1),
(3, '王二', 1),
(4, '李四', 0),
(5, '王五', 1),
(7, 'hpu2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tp_user`
--
ALTER TABLE `tp_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tp_user`
--
ALTER TABLE `tp_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
