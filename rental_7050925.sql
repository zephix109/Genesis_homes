-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2015 at 01:08 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rental_7050925`
--
CREATE DATABASE IF NOT EXISTS `rental_7050925` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rental_7050925`;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT 'unique id for each contact',
  `first` varchar(20) NOT NULL COMMENT 'first name of contact',
  `last` varchar(20) NOT NULL COMMENT 'last name of contact',
  `phone` varchar(15) NOT NULL COMMENT 'phone number of contact',
  `email` varchar(30) NOT NULL COMMENT 'email of contact',
  `user` varchar(30) NOT NULL COMMENT 'username of contact',
  `pass` varchar(30) NOT NULL COMMENT 'password of contact',
  `tenant` tinyint(1) NOT NULL COMMENT 'tenant if true, owner if false',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first`, `last`, `phone`, `email`, `user`, `pass`, `tenant`) VALUES
(5, 'Andrew', 'Laramee', '(514)994-9090', 'zephix108@gmail.com', 'alaram', 'poi098', 1),
(6, 'Mike', 'Geras', '(514)657-5849', 'bloofor.soup@hotmail.com', 'mgeras', 'ewq321', 0),
(7, 'Pascale', 'Veroh', '(514)876-9812', 'outofideas@gmail.com', 'pveroh', 'ploopas1', 1),
(8, 'Juice', 'Jorodanev', '(514)990-0076', 'j.jorodanev@hotmail.com', 'jjorod', 'lkjhgf1', 0),
(10, 'Hu', 'Man', '(909)909-9090', 'hu.mana@human.com', 'humanana', 'poi098', 1),
(13, 'Bon', 'Joovi', '(909)909-9091', 'lkjakasdgh@ijhbads.com', 'poolip', 'ewq321', 1),
(14, 'Bloop', 'Ploob', '(909)909-9093', 'alsdjhaskdj@sfjdsfj.com', 'whatever', 'booooo0', 0),
(15, 'Hello', 'Num', '(876)654-8765', 'jsjsjhdaj@kjsd.com', 'mnbvcx', 'iuy876', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rental_specs`
--

CREATE TABLE IF NOT EXISTS `rental_specs` (
  `province` varchar(30) NOT NULL COMMENT 'province of rental property',
  `city` varchar(30) NOT NULL COMMENT 'city of rental property',
  `rooms` varchar(6) NOT NULL COMMENT 'number of rooms in rental property',
  `pricerange` varchar(9) NOT NULL COMMENT 'price range of rental property',
  `available` date NOT NULL COMMENT 'starting available date of rental property',
  `contact_id` smallint(6) DEFAULT NULL COMMENT 'Relation for contacts table',
  `title` varchar(40) NOT NULL COMMENT 'Owner only, Title of posting',
  `street_address` varchar(30) NOT NULL COMMENT 'Owner only. Street address of posting',
  `postal` varchar(7) NOT NULL COMMENT 'Owner only. Postal code of posting',
  KEY `contact_id` (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental_specs`
--

INSERT INTO `rental_specs` (`province`, `city`, `rooms`, `pricerange`, `available`, `contact_id`, `title`, `street_address`, `postal`) VALUES
('Quebec', 'Montreal', '2', '1200+', '2015-04-30', 5, '', '', ''),
('Quebec', 'Montreal', '3', '1150', '2015-05-14', 6, 'Brand new 5th floor', '736 Ballocks ave.', 'h7j-9i0'),
('Quebec', 'Quebec', '4+', '900', '2015-06-12', 6, 'Testing home', '765 Whatever drive', 'p9i-6t5'),
('BC', 'Vancouver', '2', '700-800', '2015-06-20', 10, '0', '0', '0'),
('Ontario', 'Toronto', '4+', '800-900', '2015-04-13', 13, '0', '0', '0'),
('Ontario', 'Brampton', '2', '670', '2015-04-03', 8, 'Used ugly apartment', '9 Benington', 'y3t-1h6'),
('Quebec', 'Beaconsfield', '4+', '1400', '2015-06-18', 15, 'Big property', '66 Kings road', 'h2r-9i8');

-- --------------------------------------------------------

--
-- Table structure for table `tenant_owner_info`
--

CREATE TABLE IF NOT EXISTS `tenant_owner_info` (
  `occupation` varchar(30) NOT NULL COMMENT 'tenant occupation / preferred occupation',
  `age` varchar(5) NOT NULL COMMENT 'tenant age / preferred age',
  `pet` tinyint(1) NOT NULL COMMENT 'true tenant has pet /allow pets',
  `smoker` tinyint(1) NOT NULL COMMENT 'true tenant is a smoker / allow smokers',
  `annualincome` varchar(13) NOT NULL COMMENT 'tenants annual income / preferred annual income',
  `contact_id` smallint(6) DEFAULT NULL COMMENT 'Relation for contacts table',
  UNIQUE KEY `contact_id_2` (`contact_id`),
  KEY `contact_id` (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant_owner_info`
--

INSERT INTO `tenant_owner_info` (`occupation`, `age`, `pet`, `smoker`, `annualincome`, `contact_id`) VALUES
('Pilot', '41-55', 0, 0, '46,000-55,000', 7),
('', 'none', 1, 1, 'none', 8),
('Engineer', '21-30', 1, 0, '$56,000+', 5),
('', 'none', 1, 0, '46,000-55,000', 6),
('Barmaid', '<21', 1, 1, '$36,000-$45,0', 10),
('Singer', '41-55', 0, 0, '$56,000+', 13),
('', '31-40', 1, 1, '26,000-35,000', 15);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rental_specs`
--
ALTER TABLE `rental_specs`
  ADD CONSTRAINT `rental_specs_ibfk_1` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`);

--
-- Constraints for table `tenant_owner_info`
--
ALTER TABLE `tenant_owner_info`
  ADD CONSTRAINT `tenant_owner_info_ibfk_1` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
