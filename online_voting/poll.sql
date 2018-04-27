-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Database: `poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadministrators`
--

CREATE TABLE IF NOT EXISTS `tbadministrators` (
  `admin_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbadministrators`
--

INSERT INTO `tbadministrators` (`admin_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Md. Rezwanul', 'Haque', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------


--
-- Table structure for table `tbcandidates`
--

CREATE TABLE IF NOT EXISTS `tbcandidates` (
  `candidate_id` int(5) NOT NULL AUTO_INCREMENT,
  `candidate_name` varchar(45) NOT NULL,
  `candidate_position` varchar(45) NOT NULL,
  `candidate_cvotes` int(11) NOT NULL,
  PRIMARY KEY (`candidate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbcandidates`
--

INSERT INTO `tbcandidates` (`candidate_id`, `candidate_name`, `candidate_position`, `candidate_cvotes`) VALUES
(1, 'Mamun', 'Chairman', 0),
(2, 'Emran', 'Chairman', 0),
(3, 'Sabuj', 'Vice-Chairman', 0),
(4, 'Sajedul', 'Vice-Chairman', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbmembers`
--

CREATE TABLE IF NOT EXISTS `tbmembers` (
  `member_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `voter_id` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbmembers`
--

INSERT INTO `tbmembers` (`member_id`, `first_name`, `last_name`, `email`, `voter_id`, `password`) VALUES
(1, 'Md. Rezwanul', 'Haque', 'rezwan@gmail.com', '19964714075000192', '7d9b087beffc9879ead55e7291d6b541'),
(2, 'Mahbub', 'Alam', 'mahbub@gmail.com', '19864714075000186', '939d2ad38c88fda9c0bad11086e4e057');

-- --------------------------------------------------------

--
-- Table structure for table `tbpositions`
--

CREATE TABLE IF NOT EXISTS `tbpositions` (
  `position_id` int(5) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(45) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbpositions`
--

INSERT INTO `tbpositions` (`position_id`, `position_name`) VALUES
(1, 'Chairman'),
(2, 'Vice-Chairman'),
(3, 'Secretary'),
(4, 'Vice-Secretary'),
(5, 'Organizing-Secretary'),
(6, 'Treasurer'),
(7, 'Vice-Treasurer'),
(8, 'Member'),
(9, 'Woman-Member');

