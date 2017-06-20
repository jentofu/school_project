-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2016 年 05 月 02 日 17:05
-- 伺服器版本: 5.5.28-log
-- PHP 版本: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `u112`
--

-- --------------------------------------------------------

--
-- 表的結構 `商家`
--

CREATE TABLE IF NOT EXISTS `商家` (
  `商家編號` int(11) NOT NULL,
  `名稱` varchar(6) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`商家編號`),
  UNIQUE KEY `商家編號` (`商家編號`),
  KEY `商家編號_2` (`商家編號`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 轉存資料表中的資料 `商家`
--

INSERT INTO `商家` (`商家編號`, `名稱`) VALUES
(1, '鯨魚便當'),
(2, '珍味炒飯'),
(3, '來來軒'),
(4, '牛仔漢堡'),
(5, '杯樂鋪'),
(6, '享食義大利'),
(7, '綠豆食堂'),
(8, '鍋燒堂'),
(9, '找茶趣');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
