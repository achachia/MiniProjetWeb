-- phpMyAdmin SQL Dump
-- version 4.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2015 at 07:02 PM
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
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `created`, `modified`, `status`) VALUES
(1, 'Adding Google Map on Your Website within 5 Minutes', '2015-12-17 04:15:15', '2015-12-17 04:15:15', 1),
(2, 'Top Features of AngularJS that Sets it Apart from other Frameworks', '2015-12-17 04:15:15', '2015-12-17 04:15:15', 1),
(3, 'Get visitor location using HTML5 Geolocation API and PHP', '2015-12-17 04:15:15', '2015-12-17 04:15:15', 1),
(4, 'WordPress – How to Display Most Popular Posts by Views', '2015-12-17 04:15:15', '2015-12-17 04:15:15', 1),
(5, 'PayPal Payment Gateway Integration in CodeIgniter', '2015-12-17 04:15:15', '2015-12-17 04:15:15', 1),
(6, 'Drupal 8 Installation and Configuration Tutorial', '2015-12-17 04:15:15', '2015-12-17 04:15:15', 1),
(7, 'How to Create a MySQL Database in cPanel', '2015-12-17 04:15:15', '2015-12-17 04:15:15', 1),
(8, 'CakePHP Tutorial Part 3: Working with Elements and Layout', '2015-12-17 04:15:15', '2015-12-17 04:15:15', 1),
(9, 'Build an event calendar using jQuery, Ajax and PHP', '2015-12-17 04:15:15', '2015-12-17 04:15:15', 1),
(10, 'Disable mouse right click, cut, copy and paste using jQuery', '2015-12-17 04:15:15', '2015-12-17 04:15:15', 1),
(11, 'Dynamic Dependent Select Box using jQuery, Ajax and PHP', '2015-12-17 04:15:15', '2015-12-17 04:15:15', 1),
(12, 'Drupal Custom Module &mdash; Create database table during installation', '2015-12-17 04:15:15', '2015-12-17 04:15:15', 1),
(13, 'Redirect non-www to www & HTTP to HTTPS using .htaccess file', '2015-12-17 04:15:15', '2015-12-17 04:15:15', 1),
(14, 'PayPal Pro payment gateway integration in PHP', '2015-12-17 04:15:15', '2015-12-17 04:15:15', 1),
(15, 'Creating PayPal Sandbox Test Account and Website Payments Pro Account', '2015-12-17 04:15:15', '2015-12-17 04:15:15', 1),
(16, 'Add featured image or thumbnail to WordPress post', '2015-12-17 05:20:28', '2015-12-17 11:30:37', 1),
(17, 'Drupal custom module development tutorial', '2015-12-17 05:20:28', '2015-12-17 11:30:37', 1),
(18, 'Multi-Language implementation in CodeIgniter', '2015-12-17 05:20:28', '2015-12-17 11:30:37', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
