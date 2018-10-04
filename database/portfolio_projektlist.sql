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
-- Table structure for table `portfolio_projektlist`
--

CREATE TABLE IF NOT EXISTS `portfolio_projektlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(11) NOT NULL,
  `projektlist_navn` varchar(50) NOT NULL,
  `projektlist_beskrivelse` varchar(500) NOT NULL,
  `projekt_billede` varchar(100) NOT NULL,
  `img_filmappe` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kategori_id` (`kategori_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `portfolio_projektlist`
--

INSERT INTO `portfolio_projektlist` (`id`, `kategori_id`, `projektlist_navn`, `projektlist_beskrivelse`, `projekt_billede`, `img_filmappe`) VALUES
(1, 1, 'Billedredigering', 'Tage billeder af broer og så efterfølgende redigere dem.', 'thumbnail.jpg', 'bro'),
(2, 1, 'Billedredigering', 'Tage billeder af broer og så efterfølgende redigere dem.', 'thumbnail.jpg', 'bro'),
(3, 3, 'Portfolio skitse i Adobe XD', 'Skitsere mit helt første oplæg til et portfolio i Adobe XD.', 'thumbnail.jpg', 'xdskitseportfolio'),
(4, 3, 'Portfolio skitse i Adobe XD', 'Skitsere mit helt første oplæg til et portfolio i Adobe XD.', 'thumbnail.jpg', 'xdskitseportfolio'),
(5, 2, 'Table & Formular', 'Kode en tabel (table) med indhold som bl.a. billeder og tekst. Derudover også kode en kontaktformular.', 'vr.jpg', 'tableogform'),
(6, 2, 'Table & Formular', 'Kode en tabel (table) med indhold som bl.a. billeder og tekst. Derudover også kode en kontaktformular.', 'vr.jpg', 'tableogform');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `portfolio_projektlist`
--
ALTER TABLE `portfolio_projektlist`
  ADD CONSTRAINT `portfolio_projektlist_ibfk_2` FOREIGN KEY (`kategori_id`) REFERENCES `portfolio_kategori` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
