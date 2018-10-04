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
-- Table structure for table `portfolio_projekt`
--

CREATE TABLE IF NOT EXISTS `portfolio_projekt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(11) NOT NULL,
  `projektlist_id` int(11) NOT NULL,
  `projekt_navn` varchar(50) NOT NULL,
  `projekt_beskrivelse` text NOT NULL,
  `projekt_krav` text NOT NULL,
  `projekt_losning` text NOT NULL,
  `img_filmappe` varchar(50) NOT NULL,
  `projekt_billede1` varchar(100) DEFAULT NULL,
  `projekt_billede1_alt` varchar(150) DEFAULT NULL,
  `projekt_billede2` varchar(100) DEFAULT NULL,
  `projekt_billede2_alt` varchar(150) DEFAULT NULL,
  `projekt_billede3` varchar(100) DEFAULT NULL,
  `projekt_billede3_alt` varchar(150) DEFAULT NULL,
  `projekt_billede4` varchar(100) DEFAULT NULL,
  `projekt_billede4_alt` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kategori_id` (`kategori_id`),
  KEY `projektlist_id` (`projektlist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `portfolio_projekt`
--

INSERT INTO `portfolio_projekt` (`id`, `kategori_id`, `projektlist_id`, `projekt_navn`, `projekt_beskrivelse`, `projekt_krav`, `projekt_losning`, `img_filmappe`, `projekt_billede1`, `projekt_billede1_alt`, `projekt_billede2`, `projekt_billede2_alt`, `projekt_billede3`, `projekt_billede3_alt`, `projekt_billede4`, `projekt_billede4_alt`) VALUES
(1, 1, 1, 'Billedredigering', 'Vi mødtes i indre københavn og fik derfra tildelt en opgave der gik ud på at tage billeder af broer rundt omkring.', 'Fjern et element <li>Tilføj et element</li><li>Ret billedets lysforhold</li><li>Beskæring og evt opretning</li><li>Format og størrelsen</li>', 'Fjerne personerne på broen\n<li>Tilføjede et færdselsskilt samt båd i vandet under broen</li>\n<li>Rettet på farverne så det blev mere sort/hvid gammeldags</li>\n<li>Rettet broen op så den ses som en horizontal ret linje</li>\n<li>Gemt det i formatet 4:3 og under 1M pixel</li>', 'bro', 'original.jpg', 'Det originale billede', 'editet.jpg', 'Det redigerede billede', '', '', '', ''),
(2, 1, 2, 'Billedredigering', 'Vi mødtes i indre københavn og fik derfra tildelt en opgave der gik ud på at tage billeder af broer rundt omkring.', 'Fjern et element <li>Tilføj et element</li><li>Ret billedets lysforhold</li><li>Beskæring og evt opretning</li><li>Format og størrelsen</li>', '<li>Fjerne personerne på broen.</li>\n<li>Tilføjede et færdselsskilt samt båd i vandet under broen</li>\n<li>Rettet på farverne så det blev mere sort/hvid gammeldags</li>\n<li>Rettet broen op så den ses som en horizontal ret linje</li>\n<li>Gemt det i formatet 4:3 og under 1M pixel</li>', 'bro', 'original.jpg', 'Det originale billede', 'editet.jpg', 'Det redigerede billede', '', '', '', ''),
(4, 3, 3, 'Portfolio skitse i Adobe XD', 'Skitsere mit helt første oplæg til et portfolio i Adobe XD.', 'Skitsere et portfolio i Adobe XD eller lignende prototypeværktøj\r\n<li>Afleveret en PDF der beskriver og dokumenterer din prototype</li>', 'Designet i Photoshop og gjort "klikbart" i Adobe XD.\n<li>PDF filen med min dokumentation kan hentes på følgende: <a href="../documents/adobexdproject.pdf" download>Hent PDF</a></li>', 'xdskitseportfolio', '1.jpg', 'XD Side: Forside', '2.jpg', 'XD Side: Design', '3.jpg', 'XD Side: Programmering', '4.jpg', 'XD Side: Spare time'),
(5, 3, 4, 'Portfolio skitse i Adobe XD', 'Skitsere mit helt første oplæg til et portfolio i Adobe XD.', 'Skitsere et portfolio i Adobe XD eller lignende prototypeværktøj\r\n<li>Afleveret en PDF der beskriver og dokumenterer din prototype</li>', 'Designet i Photoshop og gjort "klikbart" i Adobe XD.\r\n<li>PDF filen med min dokumentation kan hentes på følgende: <a href="../documents/adobexdproject.pdf" download>Hent PDF</a></li>', 'xdskitseportfolio', '1.jpg', 'XD Side: Forside', '2.jpg', 'XD Side: Design', '3.jpg', 'XD Side: Programmering', '4.jpg', 'XD Side: Spare time'),
(6, 2, 5, 'Tabel & Formular', 'Kode en tabel (table) med indhold som bl.a. billeder og tekst. Derudover også kode en kontaktformular.', 'Kode en tabel efter en skabelon <br /> <a href="../documents/table_animal.pdf" download>(Hent opgave-skabelon)</a>\n\n<li>Kode en kontaktformular</li>', 'Resultat af tabel opgaven: <a href="http://alexanderjs.dk/minportfolio/animal/" target="_Blank">Animal Table</a>\n\n<li>Kontaktformular udført på dette projekt: <a href="http://alexanderjs.dk/minportfolio/vr/" target="_Blank">VR Projekt</a></li>', 'tableogform', 'animal_table.jpg', 'Tabel der efterligner den tildelte opgave', 'vr.jpg', 'Virtual Reality Opgave: Tabel & Kontaktformular', NULL, NULL, NULL, NULL),
(7, 2, 6, 'Tabel & Formular', 'Kode en tabel (table) med indhold som bl.a. billeder og tekst. Derudover også kode en kontaktformular.', 'Kode en tabel efter en skabelon <br /> <a href="../documents/table_animal.pdf" download>(Hent opgave-skabelon)</a>\r\n\r\n<li>Kode en kontaktformular</li>', 'Resultat af tabel opgaven: <a href="http://alexanderjs.dk/minportfolio/animal/" target="_Blank">Animal Table</a>\r\n\r\n<li>Kontaktformular udført på dette projekt: <a href="http://alexanderjs.dk/minportfolio/vr/" target="_Blank">VR Projekt</a></li>', 'tableogform', 'animal_table.jpg', 'Tabel der efterligner den tildelte opgave', 'vr.jpg', 'Virtual Reality Opgave: Tabel & Kontaktformular', NULL, NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `portfolio_projekt`
--
ALTER TABLE `portfolio_projekt`
  ADD CONSTRAINT `portfolio_projekt_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `portfolio_kategori` (`id`),
  ADD CONSTRAINT `portfolio_projekt_ibfk_2` FOREIGN KEY (`projektlist_id`) REFERENCES `portfolio_projektlist` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
