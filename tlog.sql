-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2015 at 04:50 AM
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
  `system_id` int(10) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `log` varchar(255) NOT NULL,
  `kmz` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `notes` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `unit_id`, `system_id`, `created`, `modified`, `title`, `location`, `log`, `kmz`, `url`, `notes`) VALUES
(9, 0, 1, 0, '2014-06-18 17:48:00', '2014-06-18 17:48:00', 'Antipiracy', 'Pedro Banks', '1403113680_messages.kmz', 'http://kml-samples.googlecode.com/svn/trunk/kml/Region/GroundOverlay/usa-ca-sf.kmz', 'Ix9Gp1KVIFl15r1xd0ayC7', 'Antipiracy mission'),
(10, 1, 3, 0, '2015-01-05 03:12:24', '2015-01-05 03:12:24', 'Tafani', 'Kingston', '1420427544_error.log', '1420427544_messages.kmz', 'f9gNNMTVslBDfdvi73c_7b', 'Test'),
(11, 1, 1, 0, '2015-01-05 03:42:20', '2015-01-05 03:42:20', 'teststs', 'jer', '1420429340_tech_final.JPG', '1420429340_error.log', 'Lr80_tLBJNwNqzvTyimbIt', 'tests'),
(12, 1, 1, 2, '2015-01-08 04:45:31', '2015-01-08 04:45:31', 'Chukka', 'Chukka cove', '1420692331_error.log', '1420692331_201306211834204.kmz', 'HeBu5XPYHF4m4mpL0CgdcO', 'Chukka cove drone flights');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `unit_id` int(10) NOT NULL,
  `role_id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `id_number` varchar(10) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `user_id`, `unit_id`, `role_id`, `first_name`, `last_name`, `profile_pic`, `id_number`, `created`) VALUES
(1, 1, 2, 6, 'Mathew ', 'Beckford', '1420429692_Picture1.png', 'm7TMVZ4', '0000-00-00 00:00:00'),
(2, 1, 1, 7, 'Jason', 'Ellabe', '1420432959_Picture1.png', 'hKkBX67', '0000-00-00 00:00:00'),
(3, 1, 1, 0, 'Memrose', 'Larry', '1420434153_photo 2.JPG', 'avcf1Kz', '2015-01-05 05:02:33'),
(4, 1, 1, 0, 'Creton', 'Chambers', '1420434247_1545129_10200522051173211_1914884082_n.jpg', 'uuu8bwF', '2015-01-05 05:04:07'),
(5, 1, 1, 6, 'Horace', 'Cunningham', '1420434282_1545129_10200522051173211_1914884082_n.jpg', 'Z5zPXdO', '2015-01-05 05:04:42');

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE IF NOT EXISTS `missions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `units_id` int(10) NOT NULL,
  `system_id` int(10) NOT NULL,
  `log_id` int(10) NOT NULL,
  `complete` int(10) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` date NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE IF NOT EXISTS `parts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `endurance_value` int(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `name`, `brand`, `endurance_value`, `description`, `created`) VALUES
(1, 'APM Autopilot', '3DR', 345, '3DR autopilot', '2015-01-07 17:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created`) VALUES
(4, 'tes', '2015-01-05 04:35:01'),
(6, 'Commander', '2015-01-05 04:36:03'),
(7, 'Technician', '2015-01-05 04:41:40'),
(8, 'Pilot', '2015-01-05 04:42:09');

-- --------------------------------------------------------

--
-- Table structure for table `systems`
--

CREATE TABLE IF NOT EXISTS `systems` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(3000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `img` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `part_id` int(11) NOT NULL,
  `part_2` int(10) NOT NULL,
  `part_3` int(10) NOT NULL,
  `part_4` int(10) NOT NULL,
  `part_5` int(10) NOT NULL,
  `part_6` int(10) NOT NULL,
  `part_7` int(10) NOT NULL,
  `part_8` int(10) NOT NULL,
  `part_9` int(10) NOT NULL,
  `part_10` int(10) NOT NULL,
  `part_11` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `systems`
--

INSERT INTO `systems` (`id`, `name`, `type`, `description`, `created`, `img`, `user_id`, `part_id`, `part_2`, `part_3`, `part_4`, `part_5`, `part_6`, `part_7`, `part_8`, `part_9`, `part_10`, `part_11`) VALUES
(1, 'Big Bad System', 'quadcopter', 'ssdasdas', '2015-01-07 04:47:04', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Techpod TSRDS-1A', '', 'TSRDS UAV system based on Techpod airframe', '2015-01-07 18:44:00', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `user_id`, `name`, `created`, `modified`) VALUES
(1, 0, '5th Recon Squad', '2014-06-18 13:48:07', '2014-06-18 13:48:07'),
(2, 1, 'Air Army', '2014-06-18 13:49:46', '2014-06-18 13:49:46'),
(3, 1, '20th Air Army(Artesh-e hava-ye bist)', '2014-06-18 16:27:08', '2014-06-18 16:27:08'),
(4, 1, 'nari', '2015-01-01 00:52:51', '2015-01-01 00:52:51'),
(5, 1, 'nari', '2015-01-04 04:13:49', '2015-01-04 04:13:49');

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
