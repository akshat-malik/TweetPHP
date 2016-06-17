-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2016 at 10:26 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `twijjet`
--

-- --------------------------------------------------------

--
-- Table structure for table `akshat123`
--

CREATE TABLE IF NOT EXISTS `akshat123` (
  `id` int(11) NOT NULL,
  `Follows` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akshat123`
--

INSERT INTO `akshat123` (`id`, `Follows`) VALUES
(2, 'akshat123'),
(3, 'anishy123'),
(4, 'akshat1234');

-- --------------------------------------------------------

--
-- Table structure for table `akshat1234`
--

CREATE TABLE IF NOT EXISTS `akshat1234` (
  `id` int(11) NOT NULL,
  `Follows` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akshat1234`
--

INSERT INTO `akshat1234` (`id`, `Follows`) VALUES
(1, 'akshat1234');

-- --------------------------------------------------------

--
-- Table structure for table `anishy123`
--

CREATE TABLE IF NOT EXISTS `anishy123` (
  `id` int(11) NOT NULL,
  `Follows` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anishy123`
--

INSERT INTO `anishy123` (`id`, `Follows`) VALUES
(1, 'anishy123'),
(2, 'akshat123');

-- --------------------------------------------------------

--
-- Table structure for table `iamnasri`
--

CREATE TABLE IF NOT EXISTS `iamnasri` (
  `id` int(11) NOT NULL,
  `Follows` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iamnasri`
--

INSERT INTO `iamnasri` (`id`, `Follows`) VALUES
(1, 'iamnasri');

-- --------------------------------------------------------

--
-- Table structure for table `loginfo`
--

CREATE TABLE IF NOT EXISTS `loginfo` (
  `twitid` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginfo`
--

INSERT INTO `loginfo` (`twitid`, `username`, `password`) VALUES
('akshat123', 'AkshatMalik', 'runboyrunabc'),
('akshat1234', 'akshatmalik2', 'gotommygo'),
('anishy123', 'AnishMalik', 'iampottyboy'),
('iamnasri', 'SamirNasri', 'nasri123'),
('Motusingh123', 'MotuSingh', 'iammotu');

-- --------------------------------------------------------

--
-- Table structure for table `motusingh123`
--

CREATE TABLE IF NOT EXISTS `motusingh123` (
  `id` int(11) NOT NULL,
  `Follows` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motusingh123`
--

INSERT INTO `motusingh123` (`id`, `Follows`) VALUES
(1, 'Motusingh123');

-- --------------------------------------------------------

--
-- Table structure for table `tweets`
--

CREATE TABLE IF NOT EXISTS `tweets` (
  `id` int(11) NOT NULL,
  `twitid` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `tweetext` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tweets`
--

INSERT INTO `tweets` (`id`, `twitid`, `username`, `tweetext`) VALUES
(1, 'anishy123', 'AnishMalik', 'I am Anish Malik The pottyboy'),
(4, 'akshat123', 'AkshatMalik', 'heyheyhey'),
(10, 'akshat1234', 'akshatmalik2', 'go goa gone'),
(11, 'akshat123', 'AkshatMalik', 'NishyMalik Is Potty Malik'),
(12, 'anishy123', 'AnishMalik', 'Are u listening?'),
(13, 'anishy123', 'AnishMalik', 'i am nishynishy'),
(14, 'akshat123', 'AkshatMalik', 'AnishyIspottymalik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akshat123`
--
ALTER TABLE `akshat123`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akshat1234`
--
ALTER TABLE `akshat1234`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anishy123`
--
ALTER TABLE `anishy123`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iamnasri`
--
ALTER TABLE `iamnasri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginfo`
--
ALTER TABLE `loginfo`
  ADD PRIMARY KEY (`twitid`);

--
-- Indexes for table `motusingh123`
--
ALTER TABLE `motusingh123`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akshat123`
--
ALTER TABLE `akshat123`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `akshat1234`
--
ALTER TABLE `akshat1234`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `anishy123`
--
ALTER TABLE `anishy123`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `iamnasri`
--
ALTER TABLE `iamnasri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `motusingh123`
--
ALTER TABLE `motusingh123`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tweets`
--
ALTER TABLE `tweets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
