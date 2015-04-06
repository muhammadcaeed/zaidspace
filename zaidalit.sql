-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2014 at 07:56 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zaidalit`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpanel`
--

CREATE TABLE IF NOT EXISTS `adminpanel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(25) NOT NULL,
  `pass` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminpanel`
--

INSERT INTO `adminpanel` (`id`, `user`, `pass`) VALUES
(1, 'saeed', 'saeed');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `path` varchar(50) NOT NULL,
  `thumb` varchar(50) NOT NULL,
  `typ` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `path`, `thumb`, `typ`) VALUES
(1, 'Asking for money', 'videos/asking_for_money.mp3', 'thumbnails/zaid1.jpg', 'featured'),
(2, 'At the hospital', 'videos/at_the_hospital.mp4', 'thumbnails/zaid2.jpg', 'popular'),
(3, 'Brown Parents', 'videos/brown_parents.mp4', 'thumbnails/zaid3.jpg', 'latest'),
(4, 'Brown parents always do this', 'videos/brown_parents_always_do_this.mp4', 'thumbnails/zaid4.jpg', 'featured'),
(5, 'Brown parents logic', 'videos/brown_parents_logic.mp4', 'thumbnails/zaid1.jpg', 'popular'),
(6, 'Brown people at theaters', 'videox/brown_people_at_the_movies_theaters.mp4', 'thumbnails/zaid2.jpg', 'latest'),
(7, 'At the airport', 'videos/getting_picked_up_at_the_airport.mp4', 'thumbnails/zaid3.jpg', 'featured'),
(8, 'Having a girlfriend', 'videos/having_a_girl_friend.mp4', 'thumbnails/zaid4.jpg', 'popular'),
(9, 'Not opening the door', 'videos/not_opening_the_door.mp4', 'thumbnails/zaid1.jpg', 'latest'),
(10, 'Police', 'videos/police.mp4', 'thumbnails/zaid2.jpg', 'featured'),
(11, 'When they see a kid', 'videos/when_they_see_a_kid.mp4', 'thumbnails/zaid3.jpg', 'popular');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
