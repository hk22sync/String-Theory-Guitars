-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2016 at 03:52 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `string_theory`
--

-- --------------------------------------------------------

--
-- Table structure for table `guitars`
--

CREATE TABLE IF NOT EXISTS `guitars` (
  `PID` int(11) NOT NULL AUTO_INCREMENT,
  `Price` int(10) NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `guitars`
--

INSERT INTO `guitars` (`PID`, `Price`) VALUES
(1, 45000),
(2, 65000),
(3, 63000),
(4, 16500),
(5, 19200),
(6, 21000),
(7, 65800),
(8, 30750),
(9, 62170),
(10, 51100),
(11, 78250),
(12, 86320);

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `PID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` char(50) NOT NULL,
  `Email` char(50) NOT NULL,
  `Password` char(50) NOT NULL,
  `Contact` char(50) NOT NULL,
  `City` char(50) NOT NULL,
  `Address` char(50) NOT NULL,
  PRIMARY KEY (`PID`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`PID`, `Name`, `Email`, `Password`, `Contact`, `City`, `Address`) VALUES
(1, 'Hi', 'hk73955@gmail.com', '202cb962ac59075b964b07152d234b70', '7376630716', 'Varanasi', 'Pandeypur'),
(2, 'Rishabh Singh', 'rishabh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '7894561234', 'Varanasi', 'bhu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
