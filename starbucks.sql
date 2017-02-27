-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2017 at 04:45 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `starbucks`
--

-- --------------------------------------------------------

--
-- Table structure for table `benefit`
--

CREATE TABLE IF NOT EXISTS `benefit` (
`benefit_id` int(11) NOT NULL,
  `benefit_time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `benefit`
--

INSERT INTO `benefit` (`benefit_id`, `benefit_time`, `user_id`) VALUES
(1, 1, 1),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
`card_id` int(255) NOT NULL,
  `card_money` int(11) NOT NULL,
  `card_registered` varchar(255) NOT NULL,
  `card_cvc` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`card_id`, `card_money`, `card_registered`, `card_cvc`, `user_id`) VALUES
(1, 644, '4155412894564156', '425', 1),
(3, 973, '3112333333333333', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `benefit`
--
ALTER TABLE `benefit`
 ADD PRIMARY KEY (`benefit_id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
 ADD PRIMARY KEY (`card_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `benefit`
--
ALTER TABLE `benefit`
MODIFY `benefit_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
MODIFY `card_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
