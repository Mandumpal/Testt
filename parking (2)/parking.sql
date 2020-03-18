-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2020 at 07:46 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_name` varchar(12) NOT NULL,
  `password` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(90) NOT NULL,
  `slot_no` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `city` varchar(80) NOT NULL,
  `district` varchar(50) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location`, `slot_no`, `area`, `city`, `district`) VALUES
(1, 'tftfy', 9, 7878, 'vnvn', 'gggjh');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
  `owner_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`owner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`owner_id`, `user_name`, `email`, `password`) VALUES
(1, 'test owner', 'rrrr@gmail.com', '12231343');

-- --------------------------------------------------------

--
-- Table structure for table `parking_manager_registration`
--

CREATE TABLE IF NOT EXISTS `parking_manager_registration` (
  `Location_Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `User_name` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Location_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parking_manager_registration`
--

INSERT INTO `parking_manager_registration` (`Location_Id`, `Name`, `User_name`, `Password`) VALUES
(2, 'wee', 'wwe', 'wwe'),
(3, 'ssds', 'ssds', 'ssds');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE IF NOT EXISTS `security` (
  `security_id` int(11) NOT NULL AUTO_INCREMENT,
  `location_id` int(11) NOT NULL,
  `security_name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`security_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`security_id`, `location_id`, `security_name`, `user_name`, `password`) VALUES
(1, 24445, 'security', 'security', 'security');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(112) NOT NULL,
  `email` varchar(1122) NOT NULL,
  `password` varchar(112) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`user_id`, `user_name`, `email`, `password`) VALUES
(1, '0', '0', '0'),
(2, '0', '0', '0'),
(3, '0', '0', '0'),
(4, '0', '0', '2147483647'),
(5, '0', '0', '2147483647'),
(6, '0', '0', '24234235'),
(7, '0', '0', '0'),
(8, 'rijiya', 'rrrr@gmail.com', 'GDFGFGGH'),
(9, 'test', 't@gmail.com', 'test'),
(10, 'rijiyadewedew', 'rrrr@gmail.com', 'ghj');
