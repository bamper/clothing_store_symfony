-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2015 at 05:01 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clothing`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
`id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `parentCategory` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parentCategory`) VALUES
(1, 'Mens', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE IF NOT EXISTS `clothes` (
`id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `details` text NOT NULL,
  `gender` int(1) NOT NULL COMMENT '1 = male 0 = female',
  `price` float NOT NULL,
  `brandID` int(11) NOT NULL,
  `rating` float NOT NULL,
  `featured` int(1) NOT NULL COMMENT '0 or 1',
  `slug` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`id`, `name`, `categoryID`, `details`, `gender`, `price`, `brandID`, `rating`, `featured`, `slug`) VALUES
(1, 'Super Cool Pants', 4, 'Such pants, very comfort, wow.\r\n\r\nSizes: s, m, l, xl\r\n\r\nMaterials: Nylon', 1, 19.99, 2, 1, 0, ''),
(2, 'Rad Jacket', 1, 'Super cool jacket', 0, 24.99, 2, 5, 0, ''),
(3, 'Epic Underpants', 3, 'They fit!', 1, 2.99, 2, 3, 0, ''),
(4, 'Dirty Sweatpants', 2, 'So smelly, so comfy', 1, 5.99, 2, 1, 0, ''),
(5, 'Super Hat!', 3, 'Oh..my..god!', 2, 4.99, 2, 3, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
