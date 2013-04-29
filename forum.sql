-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2013 at 03:27 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(24) NOT NULL,
  `cat_picture` varchar(50) NOT NULL,
  `cat_bio` text NOT NULL,
  `cat_opinion` text NOT NULL,
  `cat_power` text NOT NULL,
  `cat_party` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_picture`, `cat_bio`, `cat_opinion`, `cat_power`, `cat_party`) VALUES
(18, '/akmal , khan', 'uploads/12.jpg', 'a', 'like', 'yes', 'noonLeague');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_content` varchar(24) NOT NULL,
  `post_date` datetime NOT NULL,
  `post_topic` varchar(24) NOT NULL,
  `post_by` varchar(24) NOT NULL,
  `post_` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_subject` varchar(24) NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_cat` varchar(24) NOT NULL,
  `topic_by` varchar(24) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_firstname` text NOT NULL,
  `user_lastname` text NOT NULL,
  `user_password` varchar(70) NOT NULL,
  `user_email` varchar(70) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_firstname`, `user_lastname`, `user_password`, `user_email`) VALUES
(12, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'asdf@sdf.com'),
(13, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'asdwwwf@sdf.com'),
(14, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'aseeedwwwf@sdf.com'),
(15, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'aaaaa@as.com'),
(16, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'aaaasda@as.com'),
(17, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(18, 'qq', 'qq', '099b3b060154898840f0ebdfb46ec78f', 'qq@qq.com'),
(19, 'aa', 'aa', '4124bc0a9335c27f086f24ba207a4912', 'aa@aa.com'),
(20, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'aaaaa@email.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
