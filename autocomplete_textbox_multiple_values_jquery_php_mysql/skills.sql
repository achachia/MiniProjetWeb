-- phpMyAdmin SQL Dump
-- version 4.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2016 at 08:08 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codexworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`) VALUES
(1, 'ActionScript'),
(2, 'AppleScript'),
(3, 'Asp'),
(4, 'BASIC'),
(5, 'C'),
(6, 'C++'),
(7, 'Clojure'),
(8, 'COBOL'),
(9, 'ColdFusion'),
(10, 'Erlang'),
(11, 'Fortran'),
(12, 'Groovy'),
(13, 'Haskell'),
(14, 'Java'),
(15, 'JavaScript'),
(16, 'Lisp'),
(17, 'MySQL'),
(18, 'Oracle'),
(19, 'Perl'),
(20, 'PHP'),
(21, 'Python'),
(22, 'Ruby'),
(23, 'Scala'),
(24, 'Scheme'),
(25, 'SQL'),
(26, 'BeanShell'),
(27, 'Bistro'),
(28, 'DataFlex'),
(29, 'DYNAMO'),
(30, 'Datalog'),
(31, 'Euphoria'),
(32, 'ECMAScript'),
(33, 'Google Apps Script'),
(34, 'Node.js'),
(35, 'AngularJS'),
(36, 'Android'),
(37, 'CodeIgniter'),
(38, 'CakePHP'),
(39, 'Drupal'),
(40, 'WordPress'),
(41, 'Web Development'),
(42, 'Dojo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
