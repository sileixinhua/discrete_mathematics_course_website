-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 01 月 22 日 11:49
-- 服务器版本: 5.5.47
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `math`
--

-- --------------------------------------------------------

--
-- 表的结构 `communication`
--

CREATE TABLE IF NOT EXISTS `communication` (
  `user_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `topic` varchar(20) COLLATE utf8_bin NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `communication`
--

INSERT INTO `communication` (`user_name`, `content`, `topic`, `time`) VALUES
('', '1111111111', '111111', '0000-00-00 00:00:00'),
('', '11111111111111', '111111111', '0000-00-00 00:00:00'),
('', '2222222222', '2222', '2017-01-20 00:00:00'),
('', 'qweqweqwe', 'qweqwe', '2017-01-20 13:27:03');

-- --------------------------------------------------------

--
-- 表的结构 `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `question` text COLLATE utf8_bin NOT NULL,
  `options_a` text COLLATE utf8_bin NOT NULL,
  `options_b` text COLLATE utf8_bin NOT NULL,
  `options_c` text COLLATE utf8_bin NOT NULL,
  `options_d` text COLLATE utf8_bin NOT NULL,
  `answer` varchar(1) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `test`
--

INSERT INTO `test` (`question`, `options_a`, `options_b`, `options_c`, `options_d`, `answer`) VALUES
('qeweqweqweqweqwe', 'qweqweqweqweqwe', 'qweqweqweqwe', 'qweqweqweqweqwe', 'qweqweqweqweqweqwe', 'a');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `birthday` int(8) NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(20) COLLATE utf8_bin NOT NULL,
  `phone_number` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_name`, `birthday`, `password`, `email`, `phone_number`) VALUES
('111111', 111111, '111111', '111111', 111111);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
