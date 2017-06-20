-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2016 年 05 月 02 日 16:51
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
-- 表的結構 `訂單`
--

CREATE TABLE IF NOT EXISTS `訂單` (
  `訂單編號` int(20) NOT NULL AUTO_INCREMENT,
  `商家編號` int(20) NOT NULL,
  `列印` int(1) NOT NULL DEFAULT '0',
  `出餐` int(1) NOT NULL DEFAULT '0',
  `總金額` int(20) NOT NULL,
  PRIMARY KEY (`訂單編號`),
  KEY `商家編號` (`商家編號`),
  KEY `商家編號_2` (`商家編號`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=249 ;

--
-- 轉存資料表中的資料 `訂單`
--

INSERT INTO `訂單` (`訂單編號`, `商家編號`, `列印`, `出餐`, `總金額`) VALUES
(242, 1, 0, 0, 185),
(243, 1, 0, 0, 200),
(244, 1, 0, 0, 275),
(245, 1, 0, 0, 795),
(246, 1, 0, 0, 65),
(247, 1, 0, 0, 275),
(248, 1, 0, 0, 535);

--
-- 匯出資料表的 Constraints
--

--
-- 資料表的 Constraints `訂單`
--
ALTER TABLE `訂單`
  ADD CONSTRAINT `@8a02@55ae_ibfk_1` FOREIGN KEY (`商家編號`) REFERENCES `商家` (`商家編號`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
