-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2014 at 09:52 PM
-- Server version: 5.1.73-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `canvasdo_studenti`
--

-- --------------------------------------------------------

--
-- Table structure for table `studenti`
--

DROP TABLE IF EXISTS `studenti`;
CREATE TABLE IF NOT EXISTS `studenti` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `godina_rodjenja` int(4) NOT NULL,
  `smer` varchar(20) NOT NULL,
  `diplomirao` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `studenti`
--

INSERT INTO `studenti` (`id`, `ime`, `prezime`, `godina_rodjenja`, `smer`, `diplomirao`) VALUES
(1, 'Igor', 'Petrovic', 1990, 'web', 1),
(2, 'Jovana', 'Markovic', 1993, 'animacija', 0),
(3, 'Marina', 'Kesic', 1992, 'web', 0),
(4, 'Marko', 'Pantelic', 1991, 'animacija', 1),
(5, 'Darko', 'Knezevic', 1993, 'animacija', 0),
(6, 'Helena', 'Terzic', 1990, 'web', 0),
(7, 'Dragan', 'Marinkovic', 1988, 'web', 0),
(8, 'Dino', 'Skundric', 1991, 'animacija', 0),
(9, 'Vasilije', 'Nestorovic', 1992, 'animacija', 1),
(10, 'Tijana', 'Cukic', 1992, 'web', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
