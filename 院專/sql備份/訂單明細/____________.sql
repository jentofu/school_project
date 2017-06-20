-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2016 年 05 月 02 日 16:48
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
-- 表的結構 `訂單明細`
--

CREATE TABLE IF NOT EXISTS `訂單明細` (
  `序號` int(20) NOT NULL AUTO_INCREMENT,
  `訂單編號` int(20) DEFAULT NULL,
  `商品編號` int(20) NOT NULL,
  `數量` int(20) NOT NULL,
  PRIMARY KEY (`序號`),
  KEY `訂單編號` (`訂單編號`),
  KEY `商品名稱` (`商品編號`),
  KEY `商品編號` (`商品編號`),
  KEY `商品編號_2` (`商品編號`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=504 ;

--
-- 轉存資料表中的資料 `訂單明細`
--

INSERT INTO `訂單明細` (`序號`, `訂單編號`, `商品編號`, `數量`) VALUES
(478, 242, 2, 1),
(479, 242, 3, 1),
(480, 242, 4, 1),
(481, 243, 1, 2),
(482, 243, 2, 1),
(483, 244, 3, 1),
(484, 244, 5, 1),
(485, 244, 6, 1),
(486, 244, 7, 1),
(487, 245, 1, 1),
(488, 245, 2, 1),
(489, 245, 3, 1),
(490, 245, 4, 1),
(491, 245, 5, 1),
(492, 245, 6, 1),
(493, 245, 7, 1),
(494, 245, 8, 1),
(495, 245, 9, 1),
(496, 245, 10, 1),
(497, 245, 11, 1),
(498, 245, 12, 1),
(499, 246, 1, 1),
(500, 247, 2, 1),
(501, 247, 3, 1),
(502, 247, 5, 1),
(503, 247, 6, 1);

--
-- 匯出資料表的 Constraints
--

--
-- 資料表的 Constraints `訂單明細`
--
ALTER TABLE `訂單明細`
  ADD CONSTRAINT `@8a02@55ae@660e@7d30_ibfk_1` FOREIGN KEY (`訂單編號`) REFERENCES `訂單` (`訂單編號`),
  ADD CONSTRAINT `@8a02@55ae@660e@7d30_ibfk_2` FOREIGN KEY (`商品編號`) REFERENCES `商品` (`商品編號`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
