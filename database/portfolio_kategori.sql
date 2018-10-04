-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: alexanderjs.dk.mysql:3306
-- Generation Time: Oct 04, 2018 at 11:24 PM
-- Server version: 10.1.30-MariaDB-1~xenial
-- PHP Version: 5.4.45-0+deb7u13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alexanderjs_dk`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_kategori`
--

CREATE TABLE IF NOT EXISTS `portfolio_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `kategori_img` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `portfolio_kategori`
--

INSERT INTO `portfolio_kategori` (`id`, `kategori`, `kategori_img`) VALUES
(1, 'Adobe Photoshop', 'ps_icon.png'),
(2, 'Adobe Dreamweaver', 'dw_icon.png'),
(3, 'Adobe XD', 'xd_icon.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
