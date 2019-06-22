-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2019 at 03:16 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `balance` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `age`, `mobile`, `email`, `password`, `balance`) VALUES
(13, 'amit', 'delhi', 19, '100', 'ok', 'amitkumar', 1000),
(12, 'Nishant', 'Rohini', 98, '9877556610', 'nishu@gmail.com', 'nishu', 80);

--
-- Triggers `customer`
--
DROP TRIGGER IF EXISTS `afterD`;
DELIMITER $$
CREATE TRIGGER `afterD` AFTER DELETE ON `customer` FOR EACH ROW BEGIN
INSERT INTO customerh VALUES(OLD.id,OLD.name,OLD.address,OLD.age,OLD.mobile,OLD.email);
END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `afterUPD`;
DELIMITER $$
CREATE TRIGGER `afterUPD` AFTER UPDATE ON `customer` FOR EACH ROW BEGIN
INSERT INTO customerupd VALUES(OLD.id,OLD.address,OLD.mobile,OLD.email,OLD.password,OLD.balance);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customerh`
--

DROP TABLE IF EXISTS `customerh`;
CREATE TABLE IF NOT EXISTS `customerh` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerh`
--

INSERT INTO `customerh` (`id`, `name`, `address`, `age`, `mobile`, `email`) VALUES
(11, 'admin', 'nathpura', 18, '9213480009', 'pr'),
(4, 'Prabhat', 'nathupura', 20, '9560924648', 'prabhat@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customerupd`
--

DROP TABLE IF EXISTS `customerupd`;
CREATE TABLE IF NOT EXISTS `customerupd` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `balance` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerupd`
--

INSERT INTO `customerupd` (`id`, `address`, `mobile`, `email`, `password`, `balance`) VALUES
(4, 'nathupua', '9560924648', 'prabhat@gmail.com', 'prabhat@123', 0),
(4, 'nathupura', '9560924648', 'prabhat@gmail.com', 'prabhat@123', 0),
(4, 'nathupura', '9560924648', 'prabhat@gmail.com', 'prabhat@123', 100),
(4, 'nathupura', '9560924648', 'prabhat@gmail.com', 'prabhat@123', 200),
(4, 'nathupura', '9560924648', 'prabhat@gmail.com', 'prabhat@123', 100),
(12, 'Rohini', '9877556610', 'nishu@gmail.com', 'nishu', 0),
(4, 'nathupura', '9560924648', 'prabhat@gmail.com', 'prabhat@123', 200),
(4, 'nathupura', '9560924648', 'prabhat@gmail.com', 'prabhat@123', 300),
(4, 'nathupura', '9560924648', 'prabhat@gmail.com', 'prabhat@123', 500),
(4, 'nathupura', '9560924648', 'prabhat@gmail.com', 'prabhat@123', 300),
(12, 'Rohini', '9877556610', 'nishu@gmail.com', 'nishu', 0),
(12, 'Rohini', '9877556610', 'nishu@gmail.com', 'nishu', 100),
(12, 'Rohini', '9877556610', 'nishu@gmail.com', 'nishu', 80),
(13, 'delhi', '100', 'ok', 'amitkumar', 0);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'Prabhat', 'pr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
