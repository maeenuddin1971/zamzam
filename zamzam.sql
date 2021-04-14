-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 04:13 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zamzam`
--

-- --------------------------------------------------------

--
-- Table structure for table `zamzamadmin`
--

CREATE TABLE IF NOT EXISTS `zamzamadmin` (
  `froll` text NOT NULL,
  `sroll` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zamzamadmin`
--

INSERT INTO `zamzamadmin` (`froll`, `sroll`) VALUES
('1503001', '1504108');

-- --------------------------------------------------------

--
-- Table structure for table `zamzamfriend`
--

CREATE TABLE IF NOT EXISTS `zamzamfriend` (
  `fname` text NOT NULL,
  `sname` text NOT NULL,
  `froll` text NOT NULL,
  `sroll` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `zamzamuser`
--

CREATE TABLE IF NOT EXISTS `zamzamuser` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL,
  `Rollnumber` int(11) NOT NULL,
  `phone` text NOT NULL,
  UNIQUE KEY `uniqid` (`Rollnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zamzamuser`
--

INSERT INTO `zamzamuser` (`name`, `email`, `address`, `password`, `Rollnumber`, `phone`) VALUES
('fahim', 'dsfbdsf', 'dfjsdjfsdlkjf', 'fksdlkfjsdlkjf', 234, '7429347982374'),
('Hasib Akondha', 'Hasib@gmail.com', 'Bogura', 'Hasib', 1402003, '0167327373'),
('Md Fahim SHakil', 'fahim@gmail.com', 'Naogaon', 'Fahim', 1503001, '0717300847'),
('Muktadir ', 'mukto@gmail.com', 'dhaka', 'comilla', 1503009, '013433434'),
('Rifat Ibn taher', 'Rifat@gmail.com', 'Jamalpur', 'Rifat', 1504002, '01973737373'),
('Maeen Uddin', 'maeenuddinmollah@gmail.com', 'Chandina,Comilla', 'maeen', 1504108, '01951242823');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
