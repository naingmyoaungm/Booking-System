-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2023 at 04:41 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `bk_id` int(11) NOT NULL AUTO_INCREMENT,
  `place` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `booking_no` varchar(30) NOT NULL,
  PRIMARY KEY (`bk_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bk_id`, `place`, `price`, `name`, `phone`, `address`, `booking_no`) VALUES
(1, 'Havana', '$100', 'Mg Mg', '0986568876', 'Yangon', 'bk857'),
(2, 'Havana', '$100', 'Kaung Kaung', '0988777777', 'Yangon', 'bk9972'),
(3, 'Chaung Tha Beach', '$55', 'Mg Mg', '0988777777', 'Yangon', 'bk1514'),
(4, 'Chaung Tha Beach', '$55', 'Mg Mg', '0986568876', 'Yangon', 'bk4033');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mesg` varchar(50) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`con_id`, `name`, `email`, `phone`, `mesg`) VALUES
(1, 'Kyaw Kyaw', 'kyaw@gmail.com', '09876666677', 'Hello'),
(2, 'Kyaw Kyaw', 'kyaw@gmail.com', '09876666677', 'Hello'),
(3, 'Kyaw Kyaw', 'kyaw@gmail.com', '09876666677', 'Hello'),
(4, 'Kyaw Kyaw', 'kyaw@gmail.com', '09876666677', 'Hello'),
(5, 'Naing Myo Aung', 'aung@gmail.com', '09 980 578599', 'heihapowuehf'),
(6, 'Naing Myo Aung', 'aung@gmail.com', '09 980 578599', 'heihapowuehf'),
(7, 'Naing Myo Aung', 'naingmyoaungk@gmail.com', '09876666677', 'houpahg');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `place` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `in_1` varchar(80) NOT NULL,
  `in_2` varchar(80) NOT NULL,
  `in_3` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `img`, `place`, `price`, `in_1`, `in_2`, `in_3`) VALUES
(1, 'deals-02.jpg', 'Havana', '$100', '5 Days Trip > Hotel Includede', 'Airplane Bill Include', 'Daily Places Visit'),
(2, 'chaungthar.jpg', 'Chaung Tha Beach', '$55', '3 Days Trip', 'Hotel Include/1 Room', 'Daily Places Visit'),
(3, 'offers-01.jpg', 'Kingston', '$420', '3 Days Trip > Hotel Include', 'Airplane Bill Include', 'Daily Places Visit'),
(4, 'cities-03.jpg', 'George Town', '$450', '5 Days Trip > Hotel Includede', 'Airplane Bill Include', 'Daily Places Visit'),
(5, 'cities-04.jpg', 'Santo Domingo', '$500', '6 Days Trip > Hotel Include', 'Airplane Bill Include', 'Daily Places Visit');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `name`, `email`, `password`, `phone`, `city`) VALUES
(1, 'Mg Mg', 'mg@gmail.com', '1234', '098888888', 'Yangon');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `pass`) VALUES
('admin', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
