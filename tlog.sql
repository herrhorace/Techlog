-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2015 at 04:39 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tp`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `log` varchar(255) NOT NULL,
  `kmz` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `notes` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `unit_id`, `created`, `modified`, `title`, `location`, `log`, `kmz`, `url`, `notes`) VALUES
(9, 0, 1, '2014-06-18 17:48:00', '2014-06-18 17:48:00', 'Antipiracy', 'Pedro Banks', '1403113680_messages.kmz', 'http://kml-samples.googlecode.com/svn/trunk/kml/Region/GroundOverlay/usa-ca-sf.kmz', 'Ix9Gp1KVIFl15r1xd0ayC7', 'Antipiracy mission');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `unit_id` int(10) NOT NULL,
  `role` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `log_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `user_id`, `name`, `created`, `modified`, `log_id`) VALUES
(1, 0, '5th Recon Squad', '2014-06-18 13:48:07', '2014-06-18 13:48:07', 0),
(2, 1, 'Air Army', '2014-06-18 13:49:46', '2014-06-18 13:49:46', 0),
(3, 1, '20th Air Army(Artesh-e hava-ye bist)', '2014-06-18 16:27:08', '2014-06-18 16:27:08', 0),
(4, 1, 'nari', '2015-01-01 00:52:51', '2015-01-01 00:52:51', 0),
(5, 1, 'nari', '2015-01-04 04:13:49', '2015-01-04 04:13:49', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `role` varchar(64) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `unit_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created`, `modified`, `status`, `unit_id`) VALUES
(1, 'admin', '89c83fe2130ac25957d5928390c616f629492344', 'herrhorace@gmail.com', 'admin', '2014-05-10 20:21:39', '2014-05-10 20:21:39', 1, 0),
(2, 'herrhorace', '89c83fe2130ac25957d5928390c616f629492344', 'variasoft@gmail.com', 'queen', '2014-05-10 21:08:09', '2014-05-10 21:08:09', 1, 0),
(3, 'herrhoracee', '89c83fe2130ac25957d5928390c616f629492344', 'herrhorrace@gmail.com', 'king', '2014-05-16 00:04:19', '2014-05-16 00:04:19', 1, 0),
(4, 'commander', '89c83fe2130ac25957d5928390c616f629492344', 'herrhoddrace@gmail.com', 'commander', '2014-06-17 20:35:57', '2014-06-17 20:35:57', 1, 0),
(5, 'test34', '89c83fe2130ac25957d5928390c616f629492344', 'herr@gmail.com', 'regular', '2014-06-18 14:27:22', '2014-06-18 14:27:22', 1, 0),
(6, 'jhaasdasd', '89c83fe2130ac25957d5928390c616f629492344', 'herrhosssrace@gmail.com', 'regular', '2014-06-18 17:31:07', '2014-06-18 17:31:07', 1, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
