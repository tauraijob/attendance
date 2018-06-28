-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 11:26 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(12) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `firstname`, `middlename`, `lastname`) VALUES
(2, 'Tau', 'taurai', 'Taurai', 'Job', 'Munodawafa');

-- --------------------------------------------------------

--
-- Table structure for table `calen`
--

CREATE TABLE IF NOT EXISTS `calen` (
  `cal_id` int(19) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  PRIMARY KEY (`cal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `calen`
--

INSERT INTO `calen` (`cal_id`, `name`, `month`, `day`, `year`, `schedule`) VALUES
(2, 'Tau', 'Jan', '01', '2016', 'Friday AM'),
(3, 'Taurai Job Munodawafa', 'Jan', '01', '2016', 'Friday AM');

-- --------------------------------------------------------

--
-- Table structure for table `calen_monday`
--

CREATE TABLE IF NOT EXISTS `calen_monday` (
  `cal_id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calen_monday`
--

INSERT INTO `calen_monday` (`cal_id`, `name`, `month`, `day`, `year`, `schedule`) VALUES
(0, 'Tau', 'Jan', '01', '2016', 'Monday AM'),
(0, 'Tau', 'Jan', '01', '2016', 'Monday AM'),
(0, 'Taurai Job Munodawafa', 'Jan', '01', '2016', 'Monday PM'),
(0, 'Taurai Job Munodawafa', 'Jan', '01', '2016', 'Monday AM'),
(0, 'Taurai Job Munodawafa', 'Jan', '01', '2016', 'Monday AM'),
(0, 'Taurai Job Munodawafa', 'Jan', '01', '2016', 'Monday AM'),
(0, 'Taurai Job Munodawafa', 'Jan', '01', '2016', 'Monday AM'),
(0, 'Taurai Job Munodawafa', 'Jan', '01', '2016', 'Monday AM'),
(0, 'Taurai Job Munodawafa', 'Jan', '01', '2016', 'Monday AM'),
(0, 'Jojo', 'Jan', '01', '2016', 'Monday AM'),
(0, 'Alfredo', 'Jan', '01', '2016', 'Monday AM'),
(0, 'Taurai Job Munodawafa', 'Jan', '01', '2016', 'Monday AM'),
(0, 'Trevor', 'Jan', '01', '2016', 'Monday AM'),
(0, 'kjjjj', 'Jan', '01', '2016', 'Monday AM'),
(0, 'Taurai Job Munodawafa', 'Jun', '07', '2018', 'Monday PM'),
(0, 'Tau', 'Jun', '15', '2018', 'Monday PM');

-- --------------------------------------------------------

--
-- Table structure for table `calen_saturday`
--

CREATE TABLE IF NOT EXISTS `calen_saturday` (
  `cal_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  PRIMARY KEY (`cal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `calen_sunday`
--

CREATE TABLE IF NOT EXISTS `calen_sunday` (
  `cal_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  PRIMARY KEY (`cal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `calen_thursday`
--

CREATE TABLE IF NOT EXISTS `calen_thursday` (
  `cal_id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calen_thursday`
--

INSERT INTO `calen_thursday` (`cal_id`, `name`, `month`, `day`, `year`, `schedule`) VALUES
(0, 'Taurai Job Munodawafa', 'Jan', '10', '2021', 'Thursday PM');

-- --------------------------------------------------------

--
-- Table structure for table `calen_tuesday`
--

CREATE TABLE IF NOT EXISTS `calen_tuesday` (
  `cal_id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calen_tuesday`
--

INSERT INTO `calen_tuesday` (`cal_id`, `name`, `month`, `day`, `year`, `schedule`) VALUES
(0, 'Taurai Job Munodawafa', 'Jan', '01', '2016', 'Tuesday PM'),
(0, 'Tau', 'Jun', '01', '2018', 'Tuesday PM'),
(0, 'Taurai Job Munodawafa', 'Jan', '01', '2016', 'Tuesday AM'),
(0, 'Taurai Job Munodawafa', 'Jan', '01', '2016', 'Tuesday AM'),
(0, 'Taurai Job Munodawafa', 'Jan', '01', '2016', 'Tuesday AM');

-- --------------------------------------------------------

--
-- Table structure for table `calen_wednesday`
--

CREATE TABLE IF NOT EXISTS `calen_wednesday` (
  `cal_id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calen_wednesday`
--

INSERT INTO `calen_wednesday` (`cal_id`, `name`, `month`, `day`, `year`, `schedule`) VALUES
(0, 'Tau', 'Jan', '01', '2016', 'Wednesday AM'),
(0, 'jhoijouiytdfg', 'Jan', '01', '2016', 'Wednesday AM'),
(0, 'ttt', 'Jan', '01', '2016', 'Wednesday PM');

-- --------------------------------------------------------

--
-- Table structure for table `late`
--

CREATE TABLE IF NOT EXISTS `late` (
  `late_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_no` varchar(200) NOT NULL,
  `student_details` varchar(200) NOT NULL,
  `late` varchar(200) NOT NULL,
  `time` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `id` varchar(200) NOT NULL,
  PRIMARY KEY (`late_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_no` varchar(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `track` varchar(10) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  `section` varchar(8) NOT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `student_no` (`student_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_no`, `firstname`, `middlename`, `lastname`, `track`, `schedule`, `section`) VALUES
(128, 'python', 'Taurai', 'Job', 'Munodawafa', '', 'Monday AM', '2018'),
(129, '200', 'John', 'Job', 'Munodawafa', '', 'Monday AM', '2018');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
