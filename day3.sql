-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2014 at 12:55 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `day3`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `pro_id` int(10) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(200) NOT NULL,
  `pro_price` int(10) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `pro_name`, `pro_price`) VALUES
(1, 'Iphone 4', 1000000),
(2, 'Iphone 5', 2000000),
(3, 'Samsung s4', 34000000),
(4, 'HTC one', 89000000),
(5, 'HTC X', 4300000),
(6, 'Nokia Lumia 1', 4300000),
(7, 'Lumia 3', 9800000);
