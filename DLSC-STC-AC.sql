-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: sql210.xtreemhost.com
-- Generation Time: Sep 02, 2012 at 07:24 AM
-- Server version: 5.5.27-28.0
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xth_10906285_dlsu_ac`
--

-- --------------------------------------------------------

--
-- Table structure for table `Activity`
--

CREATE TABLE IF NOT EXISTS `Activity` (
  `act_id` int(10) NOT NULL AUTO_INCREMENT,
  `FK_event_id` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `title` varchar(150) NOT NULL,
  PRIMARY KEY (`act_id`),
  KEY `FK_event_id` (`FK_event_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `Activity`
--

INSERT INTO `Activity` (`act_id`, `FK_event_id`, `start_date`, `end_date`, `start_time`, `end_time`, `title`) VALUES
(1, 1, '2013-04-27', '2013-04-27', '13:00:00', '15:00:00', 'EK Culture Fest'),
(2, 2, '2013-04-27', '2013-04-27', '08:00:00', '11:00:00', 'IS Food Booth'),
(3, 3, '2013-05-27', '2013-05-27', '14:00:00', '18:00:00', 'Free Bacon!'),
(7, 10, '2012-08-21', '2012-08-22', '23:00:00', '23:30:00', 'Voxel Choir'),
(6, 2, '2012-08-21', '2012-08-22', '08:00:00', '09:30:00', 'Digging Contest');

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE IF NOT EXISTS `Admin` (
  `user_id` varchar(12) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `course` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`user_id`, `password`, `first_name`, `middle_name`, `last_name`, `e_mail`, `course`) VALUES
('200907407896', '123asd', 'Juan', 'Alfonso', 'Cruz', '', 'BS Information Systems'),
('201007405478', '123asd', 'Maria', 'Balagtas', 'Tobias', '', 'BS Computer Science'),
('201207408545', '123asd', 'Ken', 'Peroso', 'Almino', '', 'BS Information Systems'),
('201007407504', 'pauganda', 'Paulina', 'Atienza', 'Hernandez', '', 'BS Information Systems'),
('201007408225', 'lalala', 'Ian', 'De', 'Jesus', '', 'BS Computer Science'),
('201007408325', 'hihihi', 'Sarah', 'Dikoalam', 'Go', '', 'BS Information Systems');

-- --------------------------------------------------------

--
-- Table structure for table `Belongs`
--

CREATE TABLE IF NOT EXISTS `Belongs` (
  `event_id` int(10) NOT NULL,
  `act_id` int(10) NOT NULL,
  PRIMARY KEY (`event_id`,`act_id`),
  KEY `act_id` (`act_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Belongs`
--

INSERT INTO `Belongs` (`event_id`, `act_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(10, 7);

-- --------------------------------------------------------

--
-- Table structure for table `Class`
--

CREATE TABLE IF NOT EXISTS `Class` (
  `class_id` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `school_id` varchar(30) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Class`
--

INSERT INTO `Class` (`class_id`, `name`, `school_id`) VALUES
('ALGOCOM', 'Algorithm complexity', 'SITC'),
('RADTVPR', 'Radio amd Tv Porn... Productio', 'SICS'),
('SWIDLEC', 'Squid lecture', 'SOE'),
('WEBDEVE', 'Web Application Development', 'SITC'),
('SYSDEVE', 'System Development', 'SOE'),
('COMVALE', 'Communication Values and Ethic', 'SICS'),
('ADVACOM', 'Advance Communication Studies', 'SOE'),
('BUSITAX', 'Business Taxations', 'SME'),
('PERFLIT', 'Performance Literature', 'SICS'),
('ACTONEA', 'Accounting 1-A', 'SME'),
('QUATECH', 'Quantitative Techniques', 'SME'),
('INTPHIL', 'Introduction to Philosophy', 'SAS'),
('PETRIDS', 'Physical Education 3: Dual Spo', 'SAS'),
('MICECON', 'Microeconomics', 'SME'),
('FUNTRIG', 'Fundamentals of Trigonometry', 'SAS'),
('INFOSYS', 'Information Systems', 'SITC'),
('3DANIMN', '3D Animation', 'SICS'),
('COMPART', 'Computer Art', 'SICS');

-- --------------------------------------------------------

--
-- Table structure for table `Classlist`
--

CREATE TABLE IF NOT EXISTS `Classlist` (
  `class_id` varchar(10) NOT NULL,
  `student_id` varchar(12) NOT NULL,
  `user_id` varchar(12) NOT NULL,
  `room` varchar(20) NOT NULL,
  `class_section` varchar(2) NOT NULL,
  PRIMARY KEY (`class_id`,`student_id`,`user_id`),
  KEY `student_id` (`student_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Classlist`
--

INSERT INTO `Classlist` (`class_id`, `student_id`, `user_id`, `room`, `class_section`) VALUES
('PERFLIT', '201107400556', '201107163517', 'W410', 'S1'),
('PERFLIT', '201107404256', '201107163517', 'W410', 'S1'),
('PERFLIT', '201107404456', '201107163517', 'W410', 'S1'),
('PERFLIT', '201007404525', '201107163517', 'W410', 'S1'),
('PERFLIT', '201107405556', '201107163517', 'W410', 'S1'),
('PERFLIT', '201107406556', '201107163517', 'W410', 'S1'),
('PERFLIT', '201107407556', '201107163517', 'W410', 'S1'),
('PERFLIT', '201107403556', '201107163517', 'W410', 'S1'),
('MICECON', '201107400556', '201107123456', 'W414', 'S1'),
('MICECON', '201107404256', '201107123456', 'W414', 'S1'),
('MICECON', '201107404456', '201107123456', 'W414', 'S1'),
('MICECON', '201007404525', '201107123456', 'W414', 'S1'),
('MICECON', '201107405556', '201107123456', 'W414', 'S1'),
('MICECON', '201107406556', '201107123456', 'W414', 'S1'),
('MICECON', '201107407556', '201107123456', 'W414', 'S1'),
('MICECON', '201107403556', '201107123456', 'W414', 'S1'),
('MICECON', '201007407504', '201107123456', 'W414', 'S1'),
('INTPHIL', '201107407593', '201007105258', 'W411', 'S1'),
('INTPHIL', '201107409582', '201007105258', 'W411', 'S1'),
('INTPHIL', '201107409586', '201007105258', 'W411', 'S1'),
('INTPHIL', '201107407586', '201007105258', 'W411', 'S1'),
('INTPHIL', '201107402831', '201007105258', 'W411', 'S1'),
('INTPHIL', '201107409283', '201007105258', 'W411', 'S1'),
('INTPHIL', '201107409281', '201007105258', 'W411', 'S1'),
('INTPHIL', '200807453642', '201007105258', 'W411', 'S1'),
('INTPHIL', '200807475621', '201007105258', 'W411', 'S1'),
('INTPHIL', '200907401234', '201007105258', 'W411', 'S1'),
('ALGOCOM', '201007407586', '201207105682', 'W410', 'S1'),
('WEBDEVE', '201007407586', '200407105852', 'W402', 'S1'),
('WEBDEVE', '200907402222', '200407105852', 'W402', 'S1'),
('WEBDEVE', '201007401111', '200407105852', 'W402', 'S1'),
('WEBDEVE', '201007407504', '200407105852', 'W402', 'S1'),
('SWIDLEC', '201007407586', '200407204115', 'W404', 'S1'),
('SWIDLEC', '201007405478', '200407204115', 'W404', 'S1'),
('SWIDLEC', '201107404554', '200407204115', 'W404', 'S1'),
('SWIDLEC', '200907407512', '200407204115', 'W404', 'S1'),
('SWIDLEC', '200907402222', '200407204115', 'W404', 'S1'),
('SWIDLEC', '201007401111', '200407204115', 'W404', 'S1'),
('SWIDLEC', '201007407504', '200407204115', 'W404', 'S1'),
('QUATECH', '201007407504', '200507123456', 'E409', 'S1'),
('QUATECH', '201107401556', '200507123456', 'E409', 'S1'),
('QUATECH', '200807453642', '200507123456', 'E409', 'S1'),
('QUATECH', '200807475621', '200507123456', 'E409', 'S1'),
('QUATECH', '200907401234', '200507123456', 'E409', 'S1'),
('QUATECH', '201207408712', '200507123456', 'E409', 'S1'),
('PETRIDS', '201007407504', '201007123688', 'CCOURT', 'S2'),
('PETRIDS', '201207404444', '201007123688', 'CCOURT', 'S2'),
('PETRIDS', '201207405555', '201007123688', 'CCOURT', 'S2'),
('PETRIDS', '201207408712', '201007123688', 'CCOURT', 'S2'),
('PETRIDS', '201207402222', '201007123688', 'CCOURT', 'S2'),
('PETRIDS', '201107401556', '201007123688', 'CCOURT', 'S2'),
('PETRIDS', '201107414537', '201007123688', 'CCOURT', 'S2');

-- --------------------------------------------------------

--
-- Table structure for table `Class_Day`
--

CREATE TABLE IF NOT EXISTS `Class_Day` (
  `class_id` varchar(10) NOT NULL,
  `class_day` varchar(7) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Class_Day`
--

INSERT INTO `Class_Day` (`class_id`, `class_day`) VALUES
('PERFLIT', 'MW'),
('MICECON', 'TTH'),
('QUATECH', 'TTH'),
('ALGOCOM', 'TTH'),
('WEBDEVE', 'MW'),
('SWIDLEC', 'F'),
('PETRIDS', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `Class_Org`
--

CREATE TABLE IF NOT EXISTS `Class_Org` (
  `organizer_id` varchar(20) NOT NULL,
  `class_id` varchar(20) NOT NULL,
  PRIMARY KEY (`organizer_id`,`class_id`),
  KEY `class_id` (`class_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Class_Org`
--

INSERT INTO `Class_Org` (`organizer_id`, `class_id`) VALUES
('SAS', 'FUNTRIG'),
('SAS', 'INTPHIL'),
('SAS', 'PETRIDS'),
('SICS', '3DANIMN'),
('SICS', 'COMPART'),
('SICS', 'COMVALE'),
('SICS', 'PERFLIT'),
('SICS', 'RADTVPR'),
('SITC', 'ALGOCOM'),
('SITC', 'INFOSYS'),
('SITC', 'WEBDEVE'),
('SME', 'ACTONEA'),
('SME', 'BUSITAX'),
('SME', 'MICECON'),
('SME', 'QUATECH'),
('SOE', 'ADVACOM'),
('SOE', 'SWIDLEC'),
('SOE', 'SYSDEVE');

-- --------------------------------------------------------

--
-- Table structure for table `Class_Time`
--

CREATE TABLE IF NOT EXISTS `Class_Time` (
  `class_id` varchar(10) NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Class_Time`
--

INSERT INTO `Class_Time` (`class_id`, `startTime`, `endTime`) VALUES
('PERFLIT', '09:40:00', '11:10:00'),
('MICECON', '13:00:00', '14:30:00'),
('QUATECH', '13:00:00', '14:30:00'),
('ALGOCOM', '09:40:00', '11:10:00'),
('WEBDEVE', '13:00:00', '14:30:00'),
('SWIDLEC', '08:00:00', '11:00:00'),
('PETRIDS', '08:00:00', '11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Event`
--

CREATE TABLE IF NOT EXISTS `Event` (
  `event_id` int(10) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `title` varchar(150) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `Event`
--

INSERT INTO `Event` (`event_id`, `description`, `title`, `start_date`, `end_date`) VALUES
(1, 'Culture Fest', 'Link Together With All', '2013-04-27', '2013-04-28'),
(2, 'IS Week', 'Shifting the Sands', '2013-12-02', '2013-12-03'),
(3, 'HRMania', 'Yes! We have Bacon.', '2013-02-12', '2013-09-13'),
(10, 'Magtanim ay di biro.. Ikaw ay isang tuko.', 'Buwan ng Wika', '2012-08-14', '2012-08-17'),
(9, 'Yeah!', 'Concert Fest', '2012-08-21', '2012-08-24'),
(12, 'Festive jigs and festivities!', 'Dance-off', '2012-08-22', '2012-08-24'),
(16, 'FOOD', 'Epic Meal Madness', '2012-08-20', '2012-08-31'),
(17, 'Tonight, we dine in.', 'Voxel Triumph', '2013-08-22', '2013-08-30'),
(22, 'Buy now!', 'Business As Usual', '2012-08-21', '2012-08-16'),
(23, 'Promising activities, seminars, and food.', 'Student Congress', '2014-08-07', '2014-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `Has`
--

CREATE TABLE IF NOT EXISTS `Has` (
  `event_id` int(10) NOT NULL,
  `poster_id` int(10) NOT NULL,
  PRIMARY KEY (`event_id`,`poster_id`),
  KEY `poster_id` (`poster_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Has`
--

INSERT INTO `Has` (`event_id`, `poster_id`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Held_at`
--

CREATE TABLE IF NOT EXISTS `Held_at` (
  `event_id` int(10) NOT NULL,
  `act_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`event_id`,`act_id`,`name`),
  KEY `act_id` (`act_id`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Held_at`
--

INSERT INTO `Held_at` (`event_id`, `act_id`, `name`) VALUES
(1, 1, 'Multi-purpose Hall'),
(2, 2, 'Auditorium'),
(3, 3, 'Pergola'),
(10, 7, 'Auditorium');

-- --------------------------------------------------------

--
-- Table structure for table `Hostedby`
--

CREATE TABLE IF NOT EXISTS `Hostedby` (
  `organizer_id` varchar(20) NOT NULL,
  `event_id` int(10) NOT NULL,
  PRIMARY KEY (`organizer_id`,`event_id`),
  KEY `event_id` (`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Hostedby`
--

INSERT INTO `Hostedby` (`organizer_id`, `event_id`) VALUES
('CSA', 1),
('CSA', 22),
('CSA', 23),
('RSO', 2),
('RSO', 22),
('SAS', 3),
('SAS', 22),
('SAS', 23),
('SICS', 23),
('SME', 22);

-- --------------------------------------------------------

--
-- Table structure for table `Manages`
--

CREATE TABLE IF NOT EXISTS `Manages` (
  `event_id` int(10) NOT NULL,
  `user_id` varchar(12) NOT NULL,
  PRIMARY KEY (`event_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Manages`
--

INSERT INTO `Manages` (`event_id`, `user_id`) VALUES
(1, '200907407896'),
(1, '201007405478'),
(1, '201007407504'),
(1, '201007408325'),
(1, '201207408545'),
(2, '200907407896'),
(2, '201007405478'),
(2, '201007407504'),
(2, '201007408325'),
(2, '201207408545'),
(3, '200907407896'),
(3, '201007405478'),
(3, '201007407504'),
(3, '201007408325'),
(3, '201207408545');

-- --------------------------------------------------------

--
-- Table structure for table `Organizer`
--

CREATE TABLE IF NOT EXISTS `Organizer` (
  `organizer_id` varchar(20) NOT NULL,
  `organizer_name` varchar(30) NOT NULL,
  PRIMARY KEY (`organizer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Organizer`
--

INSERT INTO `Organizer` (`organizer_id`, `organizer_name`) VALUES
('CSA', 'College of Student Affairs'),
('RSO', 'Recognized School Organization'),
('SITC', 'School of Information Technolo'),
('SME', 'School of Management and Entre'),
('SICS', 'School of Information and Comm'),
('SOE', 'School of Engineering'),
('SAS', 'School of Arts and Sciences');

-- --------------------------------------------------------

--
-- Table structure for table `Poster`
--

CREATE TABLE IF NOT EXISTS `Poster` (
  `poster_id` int(10) NOT NULL AUTO_INCREMENT,
  `FK_event_id` int(10) NOT NULL,
  `poster_size` float(5,3) NOT NULL,
  `content` mediumblob NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`poster_id`),
  KEY `FK_event_id` (`FK_event_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Poster`
--

INSERT INTO `Poster` (`poster_id`, `FK_event_id`, `poster_size`, `content`, `name`) VALUES
(1, 1, 5.000, '', 'ISWk-Sands'),
(2, 2, 6.230, '', 'HRMania-Bacon'),
(3, 3, 6.100, '', 'Culture-Link');

-- --------------------------------------------------------

--
-- Table structure for table `Professor`
--

CREATE TABLE IF NOT EXISTS `Professor` (
  `user_id` varchar(12) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `school` varchar(100) NOT NULL,
  `department` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Professor`
--

INSERT INTO `Professor` (`user_id`, `password`, `first_name`, `middle_name`, `last_name`, `e_mail`, `school`, `department`) VALUES
('200407204115', '123123', 'Jesusa', 'Chavez', 'Lat', '', 'Engineering', 'Faculty'),
('200507203215', '123123', 'Mark', 'Borodo', 'Piras', '', 'Arts and Sciences', 'Faculty'),
('200307204615', '123123', 'Hermino', 'Balagtas', 'Rizal', '', 'Arts and Sciences', 'Faculty'),
('201007105258', '345678', 'Martin', 'Joseph', 'Esteves', '', 'Arts and Sciences', 'Faculty'),
('200507105258', '234567', 'Jaymee', 'Ganda', 'Pantaleon', '', 'Arts and Sciences', 'CSA'),
('201207105682', '454115', 'Oliver', 'Cute', 'Malabanan', '', 'Information Technology and Computing', 'Faculty'),
('201071025852', '454521', 'Jong', 'Magaling', 'Bello', '', 'Arts and Sciences', 'Faculty'),
('200407105852', '978456', 'Christine', 'Agena', 'Gendrano', '', 'Information Technology and Computing', 'Faculty'),
('201007152856', '745639', 'Michelle', 'Cutie', 'Ching', '', 'Information Technology and Computing', 'Faculty');

-- --------------------------------------------------------

--
-- Table structure for table `Prof_Attends`
--

CREATE TABLE IF NOT EXISTS `Prof_Attends` (
  `user_id` varchar(12) NOT NULL,
  `event_id` int(10) NOT NULL,
  `act_id` int(10) NOT NULL,
  `time_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`,`event_id`,`act_id`),
  KEY `event_id` (`event_id`),
  KEY `act_id` (`act_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Prof_Attends`
--

INSERT INTO `Prof_Attends` (`user_id`, `event_id`, `act_id`, `time_in`) VALUES
('200407105852', 1, 1, '2013-04-27 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Prof_Org`
--

CREATE TABLE IF NOT EXISTS `Prof_Org` (
  `organizer_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  PRIMARY KEY (`organizer_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Prof_Org`
--

INSERT INTO `Prof_Org` (`organizer_id`, `user_id`) VALUES
('SAS', '200307204615'),
('SAS', '200507105258'),
('SAS', '200507203215'),
('SAS', '201007105258'),
('SAS', '201071025852'),
('SITC', '200407105852'),
('SITC', '201007152856'),
('SITC', '201207105682'),
('SOE', '200407204115');

-- --------------------------------------------------------

--
-- Table structure for table `Representative`
--

CREATE TABLE IF NOT EXISTS `Representative` (
  `user_id` varchar(12) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `course` varchar(100) NOT NULL,
  `last_access` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Representative`
--

INSERT INTO `Representative` (`user_id`, `password`, `first_name`, `middle_name`, `last_name`, `e_mail`, `course`, `last_access`) VALUES
('201007404525', '123123', 'Reginald', 'De Jesus', 'Hizon', '', 'AB Communication Arts', '2012-06-09 02:32:40'),
('201107404552', '123123', 'Danna', 'Cozette', 'Raymundo', '', 'AB Communication Arts', '2012-05-03 05:48:50'),
('201107404553', '123123', 'Keisha', 'Luklukan', 'Garcia', '', 'AB Communication Arts', '2012-05-03 05:48:50'),
('201107404555', '123123', 'Christine', 'Domingo', 'Fojas', '', 'AB Communication Arts', '2012-05-03 05:48:50'),
('201107404551', '123123', 'Katherine', 'Vega', 'Albano', '', 'AB Communication Arts', '2012-05-03 05:48:50'),
('201107404526', '123123', 'Sharmaine', 'Bautista', 'Bongar', '', 'BS Business Administration Major in Operations Management', '2012-05-03 05:48:50'),
('201107404536', '123123', 'Denniel', 'Gashibo', 'De Las Alas', '', 'AB Communication Arts', '2012-05-03 05:48:50'),
('201107404566', '123123', 'Kay Ann', 'Fortunan', 'Casupang', '', 'AB Communication Arts', '2012-05-03 05:48:50'),
('201107404546', '123123', 'Pio', 'Weliho', 'Bleza', '', 'AB Communication Arts', '2012-05-03 05:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `Requires`
--

CREATE TABLE IF NOT EXISTS `Requires` (
  `class_id` varchar(10) NOT NULL,
  `student_id` varchar(12) NOT NULL,
  `user_id` varchar(12) NOT NULL,
  `act_id` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  PRIMARY KEY (`class_id`,`student_id`,`user_id`,`act_id`,`event_id`),
  KEY `student_id` (`student_id`),
  KEY `user_id` (`user_id`),
  KEY `act_id` (`act_id`),
  KEY `event_id` (`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Requires`
--

INSERT INTO `Requires` (`class_id`, `student_id`, `user_id`, `act_id`, `event_id`) VALUES
('INTPHIL', '200807453642', '201007105258', 2, 2),
('INTPHIL', '200807475621', '201007105258', 2, 2),
('INTPHIL', '200907401234', '201007105258', 2, 2),
('INTPHIL', '201107402831', '201007105258', 2, 2),
('INTPHIL', '201107407586', '201007105258', 2, 2),
('INTPHIL', '201107407593', '201007105258', 2, 2),
('INTPHIL', '201107409281', '201007105258', 2, 2),
('INTPHIL', '201107409283', '201007105258', 2, 2),
('INTPHIL', '201107409582', '201007105258', 2, 2),
('INTPHIL', '201107409586', '201007105258', 2, 2),
('SWIDLEC', '200907402222', '200407204115', 1, 1),
('SWIDLEC', '200907407512', '200407204115', 1, 1),
('SWIDLEC', '201007401111', '200407204115', 1, 1),
('SWIDLEC', '201007405478', '200407204115', 1, 1),
('SWIDLEC', '201007407504', '200407204115', 1, 1),
('SWIDLEC', '201007407586', '200407204115', 1, 1),
('SWIDLEC', '201107404554', '200407204115', 1, 1),
('WEBDEVE', '200907402222', '200407105852', 1, 1),
('WEBDEVE', '201007401111', '200407105852', 1, 1),
('WEBDEVE', '201007407504', '200407105852', 1, 1),
('WEBDEVE', '201007407586', '200407105852', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE IF NOT EXISTS `Student` (
  `student_id` varchar(12) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `batch` varchar(4) NOT NULL,
  `degree_program` varchar(100) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`student_id`, `first_name`, `middle_name`, `last_name`, `batch`, `degree_program`) VALUES
('201007407512', 'Aera', 'Amadeo', 'Almero', '2010', 'BS Business Administration Major in Operations Management'),
('201207402112', 'Tiffany', 'Besabos', 'Blanquera', '2012', 'BS Business Administration Major in Operations Management'),
('200907407512', 'Mykah', 'Soligin', 'Wong', '2009', 'BS Business Administration Major in Operations Management'),
('201007404525', 'Reginald', 'De Jesus', 'Hizon', '2010', 'AB Communication Arts'),
('201107404556', 'Danna', 'Cozette', 'Raymundo', '2010', 'AB Communication Arts'),
('201107404553', 'Keisha', 'Luklukan', 'Garcia', '2010', 'AB Communication Arts'),
('201107404554', 'Christine', 'Domingo', 'Fojas', '2010', 'AB Communication Arts'),
('201107404552', 'Katherine', 'Vega', 'Albano', '2010', 'AB Communication Arts'),
('201107404551', 'Sharmaine', 'Bautista', 'Bongar', '2010', 'BS Business Administration Major in Operations Management'),
('201107404546', 'Denniel', 'Gashibo', 'De Las Alas', '2010', 'AB Communication Arts'),
('201107404536', 'Kay Ann', 'Fortunan', 'Casupang', '2010', 'AB Communication Arts'),
('201107404526', 'Pio', 'Weliho', 'Bleza', '2010', 'AB Communication Arts'),
('200907407896', 'Juan', 'Alfonso', 'Cruz', '2009', 'BS Information Systems'),
('201007405478', 'Maria', 'Balagtas', 'Tobias', '2010', 'BS Computer Science'),
('201207408545', 'Ken', 'Peroso', 'Almino', '2012', 'BS Information Systems'),
('201007407504', 'Paulina', 'Atienza', 'Hernandez', '2010', 'BS Information Systems'),
('201007408525', 'Ian', 'De', 'Jesus', '2010', 'BS Computer Science'),
('201007408535', 'Sarah', 'Dikoalam', 'Go', '2010', 'BS Information Systems'),
('201007401111', 'Francis', 'Ned', 'Amoranto', '2010', 'BS Computer Science'),
('200907402222', 'Miguel', 'San Jose', 'Sumaya', '2010', 'BS Information Systems'),
('201007407586', 'Carlo', 'Bayona', 'Carabeo', '2010', 'BS Computer Science'),
('201107407593', 'Ryel', 'Gonzales', 'Medina', '2011', 'AB Communication Arts'),
('201107409582', 'Nikka', 'Kim', 'Ramos', '2011', 'AB Communication Arts'),
('201107409586', 'Mabby', 'Reyes', 'Trivino', '2011', 'AB Communication Arts'),
('201107407586', 'Nicole', 'Santos', 'Crisostomo', '2011', 'AB Communication Arts'),
('201107402831', 'Jumbell', 'Schober', 'Pomento', '2011', 'BS Business Administration Major in Entrepreneurship'),
('201107409283', 'Vina', 'Krizzia', 'Morales', '2011', 'AB Communication Arts'),
('201107409281', 'PJ', 'Ramos', 'Rodelas', '2011', 'AB Communication Arts'),
('200807453642', 'Heidrich', 'Atienza', 'Hernandez', '2011', 'BS Business Administration Major in Entrepreneurship'),
('200807475621', 'Bok', 'Reyes', 'Alipon', '2011', 'BS Business Administration Major in Entrepreneurship'),
('200907401234', 'JS', 'Garcia', 'Perez', '2010', 'BS Business Administration Major in Entrepreneurship');

-- --------------------------------------------------------

--
-- Table structure for table `Stud_Attends`
--

CREATE TABLE IF NOT EXISTS `Stud_Attends` (
  `student_id` varchar(12) NOT NULL,
  `event_id` int(10) NOT NULL,
  `act_id` int(10) NOT NULL,
  `time_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`student_id`,`event_id`,`act_id`),
  KEY `event_id` (`event_id`),
  KEY `act_id` (`act_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Stud_Attends`
--

INSERT INTO `Stud_Attends` (`student_id`, `event_id`, `act_id`, `time_in`) VALUES
('200907402222', 1, 1, '2013-04-27 13:00:00'),
('201007401111', 1, 1, '2013-04-27 13:00:00'),
('201007407504', 1, 1, '2013-04-27 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Venue`
--

CREATE TABLE IF NOT EXISTS `Venue` (
  `name` varchar(50) NOT NULL,
  `capacity` smallint(6) NOT NULL,
  `venue_type` enum('indoor','outdoor') NOT NULL,
  `location` varchar(50) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Venue`
--

INSERT INTO `Venue` (`name`, `capacity`, `venue_type`, `location`) VALUES
('Multi-purpose Hall', 35, 'indoor', '2F LC2 Building'),
('Pergola', 40, 'outdoor', 'LC1 Building'),
('Auditorium', 60, 'indoor', '5F LC2 Building');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
