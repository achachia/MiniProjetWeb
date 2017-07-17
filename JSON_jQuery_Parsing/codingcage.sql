-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2016 at 02:48 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codingcage`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE IF NOT EXISTS `tbl_posts` (
  `postID` int(11) NOT NULL AUTO_INCREMENT,
  `postTitle` varchar(255) NOT NULL,
  `postUrl` varchar(255) NOT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`postID`, `postTitle`, `postUrl`) VALUES
(1, 'Simple jQuery Add, Update, Delete with PHP and MySQL', 'http://goo.gl/IL6NTr'),
(2, '15 Free Bootstrap Admin Themes Demo and Download', 'http://goo.gl/1dBwEy'),
(3, 'Easy Ajax Image Upload with jQuery, PHP', 'http://goo.gl/jXZ6LY'),
(4, 'How to Send HTML Format eMails in PHP using PHPMailer', 'http://goo.gl/kQrzJP'),
(5, 'Ajax Bootstrap Signup Form with jQuery PHP and MySQL', 'http://goo.gl/yxKrha'),
(6, 'Submit PHP Form without Page Refresh using jQuery, Ajax', 'http://goo.gl/14vlBe'),
(7, 'How to Convert MySQL Rows into JSON Format in PHP', 'http://goo.gl/qgOiwB'),
(8, 'Designing Bootstrap Signup Form with jQuery Validation', 'http://goo.gl/nECERc'),
(9, 'Upload, Insert, Update, Delete an Image using PHP MySQL', 'http://goo.gl/HRJrDD'),
(10, 'Login Registration with Email Verification, Forgot Password using PHP', 'http://goo.gl/O9FKN1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
