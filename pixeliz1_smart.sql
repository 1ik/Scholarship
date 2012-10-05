-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 13, 2012 at 01:57 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pixeliz1_smart`
--

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE IF NOT EXISTS `budget` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `siblings` int(11) NOT NULL,
  `need` int(11) NOT NULL,
  `merit` int(11) NOT NULL,
  `performance` int(11) NOT NULL,
  `employee_child` int(11) NOT NULL,
  `freedom_fighter` int(11) NOT NULL,
  `physically_challenged` int(11) NOT NULL,
  `spouse` int(11) NOT NULL,
  `vc` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`id`, `siblings`, `need`, `merit`, `performance`, `employee_child`, `freedom_fighter`, `physically_challenged`, `spouse`, `vc`) VALUES
(1, 30000, 10000, 25000, 300000, 30000, 50000, 10000, 20000, 70000);

-- --------------------------------------------------------

--
-- Table structure for table `edu_back`
--

CREATE TABLE IF NOT EXISTS `edu_back` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) NOT NULL,
  `sa` int(11) NOT NULL,
  `sa_year` varchar(255) NOT NULL,
  `sa_group` varchar(255) NOT NULL,
  `sa_school` varchar(255) NOT NULL,
  `sa_division` varchar(255) NOT NULL,
  `sa_grade` varchar(255) NOT NULL,
  `ho` int(11) NOT NULL,
  `ho_year` varchar(255) NOT NULL,
  `ho_group` varchar(255) NOT NULL,
  `ho_college` varchar(255) NOT NULL,
  `ho_division` varchar(255) NOT NULL,
  `ho_grade` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `other_year` varchar(255) NOT NULL,
  `other_group` varchar(255) NOT NULL,
  `other_school` varchar(255) NOT NULL,
  `other_division` varchar(255) NOT NULL,
  `other_grade` varchar(255) NOT NULL,
  `other_description` text NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112212 ;

--
-- Dumping data for table `edu_back`
--

INSERT INTO `edu_back` (`uid`, `id`, `sa`, `sa_year`, `sa_group`, `sa_school`, `sa_division`, `sa_grade`, `ho`, `ho_year`, `ho_group`, `ho_college`, `ho_division`, `ho_grade`, `other`, `other_year`, `other_group`, `other_school`, `other_division`, `other_grade`, `other_description`, `comment`) VALUES
(1, '08104138', 1, '2323', 'asdf', 'asdfasdf', 'sdf', '3', 1, '2334', 'sdf', 'asdf', 'asdfa', '3', 'asdf', '2323', 'sadf', '2sdf', 'asdf', '4', '																																																																																																																																																																																																																																																																																																																																				wwefwefwe fwe fwef we fwe fwe fwe fwef we fwe wef w fw																																																																																																																																																																																																																																																																																																							', 'sdfsdfasdfasdfasdf sdf sdf sdf sdf sdsdfsssssssssssssssssssss																																																																																																																																																																																																																																																																																							'),
(112211, '112211', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `image_table`
--

CREATE TABLE IF NOT EXISTS `image_table` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) NOT NULL,
  `self` varchar(1024) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `image_table`
--


-- --------------------------------------------------------

--
-- Table structure for table `primary`
--

CREATE TABLE IF NOT EXISTS `primary` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) NOT NULL,
  `appID` varchar(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dd` int(12) NOT NULL,
  `mm` int(3) NOT NULL,
  `yy` int(8) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `gender` int(2) NOT NULL DEFAULT '0',
  `marital_status` varchar(3) NOT NULL DEFAULT '0',
  `cgpa` float NOT NULL,
  `employee_id` varchar(255) NOT NULL DEFAULT 'na',
  `course_credit` float NOT NULL DEFAULT '0',
  `studio_credit` float NOT NULL DEFAULT '0',
  `lecture_credit` float NOT NULL,
  `credit_completed` float NOT NULL DEFAULT '0',
  `credit_required` float NOT NULL DEFAULT '0',
  `first_semester` int(2) NOT NULL DEFAULT '0',
  `birth_place` varchar(255) NOT NULL,
  `going_tarc` int(2) NOT NULL DEFAULT '0',
  `second_last_semester` int(4) NOT NULL DEFAULT '0',
  `last_semester` int(11) NOT NULL DEFAULT '0',
  `department_change` varchar(266) NOT NULL,
  `first_time_application` int(4) NOT NULL DEFAULT '0',
  `retake` int(3) NOT NULL DEFAULT '0',
  `fail` int(11) NOT NULL DEFAULT '0',
  `failing_reason` varchar(277) NOT NULL,
  `disciplinary` int(11) NOT NULL DEFAULT '0',
  `dis_reason` varchar(266) NOT NULL,
  `contact1` varchar(255) NOT NULL,
  `contact2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sibling_id` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `approved` int(11) NOT NULL,
  `allowance` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112213 ;

--
-- Dumping data for table `primary`
--

INSERT INTO `primary` (`uid`, `id`, `appID`, `name`, `dd`, `mm`, `yy`, `dept`, `gender`, `marital_status`, `cgpa`, `employee_id`, `course_credit`, `studio_credit`, `lecture_credit`, `credit_completed`, `credit_required`, `first_semester`, `birth_place`, `going_tarc`, `second_last_semester`, `last_semester`, `department_change`, `first_time_application`, `retake`, `fail`, `failing_reason`, `disciplinary`, `dis_reason`, `contact1`, `contact2`, `email`, `sibling_id`, `pass`, `approved`, `allowance`) VALUES
(47, '08104138', '', 'md. zobair hossain khan                                                                ', 12, 11, 1988, 'BBS', 1, '0', 3.05, 'na', 12, 6, 5.3, 3.5, 23, 0, '12', 0, 0, 0, 'CSE to BBS', 0, 1, 0, 'i', 0, 'i hacked the university website', '23232323', '23232323', 'g@j.com', '3232323', '123', 1, 0),
(46, '12121118', '', 'Subarno Saha', 0, 0, 0, 'CSE', 0, '0', 4, 'na', 13.5, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'j', 'j', 'g@k.com', '', '123', 1, 0),
(45, '09221045', '', 'Sanjana Ahmed', 0, 0, 0, 'CSE', 0, '0', 3.9, 'na', 7.5, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'j', 'j', 'j@k.com', '', '123', 1, 0),
(44, '11104015', '', 'Bashira Harun', 0, 0, 0, 'BBS', 0, '0', 3.76, 'na', 12, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'h', 'h', 'h@j.com', '', '123', 1, 0),
(43, '10308018', '', 'Rifat Farjana Sanchari', 0, 0, 0, 'ARC', 0, '0', 3.74, 'na', 15.5, 4.5, 11, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'j', 'j', 'j@h.com', '', '123', 1, 0),
(42, '11221024', '', 'Saad Mohammad Khan', 0, 0, 0, 'CSE', 0, '0', 3.14, 'na', 13.5, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'j', 'j', 'h@j.com', '', '123', 1, 0),
(41, '12104168', '', 'Inzamul Hossain', 0, 0, 0, 'BBS', 0, '0', 2.77, 'na', 9, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'j', 'j', 'j@t.com', '', '123', 1, 0),
(60, '10371002', '', 'Md. Ashraful Islam', 0, 0, 0, 'EEE', 0, '0', 2.97, '0', 3, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'o', 'o', 'o', '', '123', 1, 0),
(61, '11174010', '', 'Malahat Ferdous', 0, 0, 0, 'BBS', 0, '0', 3.21, '0', 9, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'o', 'p', 'i', '', '123', 1, 0),
(39, '09208010', '', 'Abir Mahmud', 0, 0, 0, 'ARC', 0, '0', 3.19, 'na', 13.5, 9.5, 4, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'j', 'j', 'k@m.com', '', '123', 1, 0),
(38, '10104002', '', 'Maisha Tasmia', 0, 0, 0, 'BBS', 0, '0', 3.92, 'na', 12, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'j', 'j', 'h@k.com', '', '123', 1, 0),
(37, '10104031', '', 'Sadia Afroz', 0, 0, 0, 'BBS', 0, '0', 3.97, 'na', 12, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'j', 'j', 's@j.com', '', '123', 1, 0),
(36, '10226002', '', 'Shafaque Rahman', 0, 0, 0, 'MNS', 0, '0', 3.99, 'na', 12, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'j', 'j', 'j@s.com', '', '123', 1, 0),
(35, '12108011', '', 'Anika Tabassum', 0, 0, 0, 'ARC', 0, '0', 4, '0', 15.5, 11, 4.5, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'j', 'j', 'asd@asd.com', '', '123', 1, 0),
(34, '08204016', '', 'Sumona Haque', 0, 0, 0, 'BBS', 0, '0', 2.74, 'na', 7, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'j', 'j', 's@t.com', '', '123', 1, 0),
(33, '10321064', '', 'Karima Khatun', 0, 0, 0, 'EEE', 0, '0', 2.96, 'na', 13.5, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'j', 'j', 's@p.com', '', '123', 1, 0),
(32, '10304049', '', 'Asif Azad Jisan', 0, 0, 0, 'BBS', 0, '0', 2.62, 'na', 12, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'j', 'j', 's@p.com', '', '123', 1, 0),
(31, '10121055', '', 'Md Raisul Islam', 0, 0, 0, 'EEE', 0, '0', 3.19, 'na', 12, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'j', 'j', 's@p.com', '', '123', 1, 0),
(30, '08304098', '', 'Md Ariful Islam', 0, 0, 0, 'BBS', 0, '0', 2.58, 'na', 12, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'j', 'j', 's@p.com', '', '123', 1, 0),
(48, '11101063', '', 'Sanjid Rahman', 0, 0, 0, 'CSE', 0, '0', 3.42, 'na', 12, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'j', 'j', 'v@k.com', '', '123', 1, 0),
(49, '11261008', '', 'Humayra Islam', 0, 0, 0, 'EEE', 0, '0', 4, 'na', 18, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'k', 'k', 'l@k.com', '', '123', 1, 0),
(50, '11210017', '', 'Rezwanur Rahman Khan', 0, 0, 0, 'EEE', 0, '0', 3.1, 'na', 9, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'g', 'g', 'n@m.com', '', '123', 1, 0),
(51, '09381000', '', 'not Accept', 0, 0, 0, 'MNS', 0, '0', 3, 'na', 12, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 1, 0, '0', 0, '', '', '', 'no@accept.com', '', '123', 1, 0),
(52, '11108020', '', 'Amreen Ahmed', 0, 0, 0, 'ARC', 0, '0', 3.79, 'na', 17, 10, 7, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'j', 'j', 'j', '', '123', 1, 0),
(53, '12308004', '', 'Shammon Naower Parapar', 0, 0, 0, 'ARC', 0, '0', 0, 'na', 7, 4, 3, 0, 0, 0, '', 0, 0, 0, '', 1, 0, 0, '0', 0, '', 'j', 'j', 'j', '', '123', 1, 0),
(54, '12304007', '', 'Mohima Rahman', 0, 0, 0, 'BBS', 0, '0', 0, 'na', 12, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 1, 0, 0, '0', 0, '', 'l', 'l', 'l', '', '123', 1, 0),
(55, '12304022', '', 'Al Mohaymenul Alhay', 0, 0, 0, 'LLB', 0, '0', 0, 'na', 12, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 1, 0, 0, '0', 0, '', 'l', 'l', 'l', '', '123', 1, 0),
(56, '12304058', '', 'Nafisa Sanjida', 0, 0, 0, 'CSE', 0, '0', 0, '0', 9, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 1, 0, 0, '0', 0, '', 'l', 'l', 'l', '', '123', 1, 0),
(57, '12336001', '', 'Taizina Momtareen', 0, 0, 0, 'CSE', 0, '0', 0, 'na', 12, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 1, 0, 0, '0', 0, '', 'p', 'p', 'p', '', '123', 1, 0),
(58, '12310001', '', 'Dipanwita Sutradhar', 0, 0, 0, 'EEE', 0, '0', 0, '0', 9, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 1, 0, 0, '0', 0, '', 'o', 'o', 'o', '', '123', 1, 0),
(59, '12301026', '', 'A.S.M Ruhul Amin Shaikat', 0, 0, 0, 'PHR', 0, '0', 0, '0', 12, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 1, 0, 0, '0', 0, '', 'i', 'i', 'i', '', '123', 1, 0),
(62, '11264010', '', 'S.M Ziyad Ahmed', 0, 0, 0, 'BBS', 0, '0', 3.6, '0', 9, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'u', 'y', 'i', '', '123', 1, 0),
(63, '12174016', '', 'Rafi Akter', 0, 0, 0, 'BBS', 0, '0', 3.7, '0', 9, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'h', 'h', 'h', '', '123', 1, 0),
(64, '12374005', '', 'Fiona Avanti Alim', 0, 0, 0, 'BBS', 0, '0', 0, '0', 9, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 't', 'y', 'u', '', '123', 1, 0),
(65, '10104049', '', 'Sarafa Mahjabeen Ahmed', 0, 0, 0, 'CSE', 0, '0', 3.88, '0', 12, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'h', 'h', 'h', '', '123', 1, 0),
(66, '12301031', '', 'S.M. Amimul Mansur', 0, 0, 0, 'CSE', 0, '0', 0, '0', 12, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 1, 0, 0, '0', 0, '', 'j', 'j', 'j', '', '123', 1, 0),
(67, '12301029', '', 'Md. Zubayer Hossain Zabir', 0, 0, 0, 'CSE', 0, '0', 0, 'na', 9, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 1, 0, 0, '0', 0, '', 'l', 'l', 'l', '', '123', 1, 0),
(68, '12374030', '', 'Md. Mosiur Rahman', 0, 0, 0, 'BBS', 0, '0', 0, '0', 6, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 1, 0, 0, '0', 0, '', 'h', 'h', 'h', '', '123', 1, 0),
(69, '12364014', '', 'Wasim Bari Khan', 0, 0, 0, 'BBS', 0, '0', 0, '0', 9, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 1, 0, 0, '0', 0, '', 'h', 'h', 'h', '', '123', 1, 0),
(70, '09103004', '', 'Sumaiya Tasneem Huque', 0, 0, 0, 'ENH', 0, '0', 3.79, '0', 3, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'h', 'h', 'h', '', '123', 1, 0),
(71, '10262009', '', 'Md. Moniruzzaman', 0, 0, 0, 'BDI', 0, '0', 3.08, '0', 6, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '0', 0, '', 'h', 'h', 'h', '', '123', 1, 0),
(112211, '112211', '', '', 0, 0, 0, '', 0, '0', 0, 'na', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, '', '', '', '', '', '', 0, 0),
(112212, '092211', '', '', 0, 0, 0, '', 0, '0', 0, 'na', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, '', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `scholar_amount`
--

CREATE TABLE IF NOT EXISTS `scholar_amount` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) NOT NULL,
  `performance` int(11) NOT NULL,
  `merit` int(11) NOT NULL,
  `needbased` int(11) NOT NULL,
  `spouse` int(11) NOT NULL,
  `siblings` int(11) NOT NULL,
  `brac_employee` int(11) NOT NULL,
  `brac_ford` int(11) NOT NULL,
  `phyic_challanged` int(11) NOT NULL,
  `bracu_employee` int(11) NOT NULL,
  `freedom_fighter` int(11) NOT NULL,
  `vc` int(11) NOT NULL,
  `last` int(11) NOT NULL,
  `committee` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `scholar_amount`
--

INSERT INTO `scholar_amount` (`uid`, `id`, `performance`, `merit`, `needbased`, `spouse`, `siblings`, `brac_employee`, `brac_ford`, `phyic_challanged`, `bracu_employee`, `freedom_fighter`, `vc`, `last`, `committee`) VALUES
(41, '11104015', 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, '10308018', 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, '11221024', 0, 0, 0, 0, 50, 0, 0, 0, 0, 0, 0, 0, 0),
(38, '12104168', 0, 0, 0, 0, 50, 0, 0, 0, 0, 0, 0, 0, 0),
(57, '10371002', 0, 0, 0, 50, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, '09208010', 0, 0, 0, 0, 50, 0, 0, 0, 0, 0, 0, 0, 0),
(35, '10104002', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, '10104031', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, '10226002', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, '12108011', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, '08204016', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50),
(30, '10321064', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 80),
(29, '10304049', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30),
(28, '10121055', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30),
(27, '08304098', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50),
(42, '09221045', 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, '12121118', 0, 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, '08104138', -1, -1, -1, -1, -1, -1, -1, -1, 0, -1, 0, 0, 0),
(45, '11101063', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0),
(46, '11261008', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0),
(47, '11210017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0),
(48, '09381000', 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, '11108020', 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, '12308004', 0, 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, '12304007', 0, 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, '12304022', 0, 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, '12304058', 0, 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, '12336001', 0, 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, '12310001', 0, 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, '12301026', 0, 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, '11174010', 0, 0, 0, 50, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, '11264010', 0, 0, 0, 50, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, '12174016', 0, 0, 0, 50, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, '12374005', 0, 0, 0, 50, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, '10104049', 0, 0, 0, 0, 0, 0, 0, 0, 75, 0, 0, 0, 0),
(63, '12301031', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0),
(64, '12301029', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0),
(65, '12374030', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0),
(66, '12364014', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0),
(67, '09103004', 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0),
(68, '10262009', 0, 0, 0, 0, 0, 0, 0, 25, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `secondary`
--

CREATE TABLE IF NOT EXISTS `secondary` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_profession` varchar(255) NOT NULL,
  `father_income` varchar(255) NOT NULL,
  `father_contact` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mother_profession` varchar(255) NOT NULL,
  `mother_income` varchar(255) NOT NULL,
  `mother_contact` varchar(255) NOT NULL,
  `guardian` varchar(255) NOT NULL,
  `guardian_profession` varchar(255) NOT NULL,
  `guardian_income` varchar(255) NOT NULL,
  `guardian_contact` int(255) NOT NULL,
  `fixed_asset` varchar(255) NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `permanent_village` varchar(255) NOT NULL,
  `permanent_po` varchar(15) NOT NULL,
  `permanent_ps` varchar(15) NOT NULL,
  `permanent_union` varchar(255) NOT NULL,
  `permanent_district` varchar(266) NOT NULL,
  `permanent_loc_area` varchar(255) NOT NULL,
  `award` text NOT NULL,
  `co_cur_activity` text NOT NULL,
  `reference1` text NOT NULL,
  `reference2` text NOT NULL,
  `bro_sis` text NOT NULL,
  `sibling1_name` varchar(255) NOT NULL DEFAULT '',
  `sibling1_status` varchar(11) NOT NULL DEFAULT '',
  `sibling1_id` int(48) NOT NULL,
  `sibling2_status` varchar(255) NOT NULL DEFAULT '',
  `sibling2_name` int(11) NOT NULL,
  `sibling2_id` int(50) NOT NULL,
  `sibling1_age` int(3) NOT NULL,
  `sibling2_age` int(11) NOT NULL,
  `spouse_name` varchar(255) NOT NULL,
  `spouse_id` int(122) NOT NULL,
  `marital_status` int(3) NOT NULL,
  `ref_present_name` varchar(255) NOT NULL,
  `ref_present_cell` int(255) NOT NULL,
  `ref_present_address` varchar(255) NOT NULL,
  `ref_permanent_address` varchar(255) NOT NULL,
  `ref_permanent_name` varchar(255) NOT NULL,
  `ref_permanent_cell` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `secondary`
--

INSERT INTO `secondary` (`uid`, `id`, `father_name`, `father_profession`, `father_income`, `father_contact`, `mother_name`, `mother_profession`, `mother_income`, `mother_contact`, `guardian`, `guardian_profession`, `guardian_income`, `guardian_contact`, `fixed_asset`, `present_address`, `permanent_address`, `permanent_village`, `permanent_po`, `permanent_ps`, `permanent_union`, `permanent_district`, `permanent_loc_area`, `award`, `co_cur_activity`, `reference1`, `reference2`, `bro_sis`, `sibling1_name`, `sibling1_status`, `sibling1_id`, `sibling2_status`, `sibling2_name`, `sibling2_id`, `sibling1_age`, `sibling2_age`, `spouse_name`, `spouse_id`, `marital_status`, `ref_present_name`, `ref_present_cell`, `ref_present_address`, `ref_permanent_address`, `ref_permanent_name`, `ref_permanent_cell`) VALUES
(1, '08104138', 'mark steve', 'hacking', '2233445', '334455664', 'ann hilarious', 'hacking', '233455', '234234234234234', 'asdf', '23asdf', 'adsf', 44343434, '23233423', 'asdfds', 'sdfasdf', '2fwef', '32f', '2wef', 'sdf', 'sdf', 'sdfsdf', 'asdfasdfadadfsd', 'helping people learn hacking.', 'sdfsdf', 'sdfsdf', '', 'asdf', 'asdfa', 23232323, 'asdf', 0, 232343434, 23, 13, 'sdfsd', 2343434, 1, 'ergwergwerg', 44444, 'aaaa', '4444', 'wergwgwegwe', 4444),
(2, '092211', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 0, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `system_login`
--

CREATE TABLE IF NOT EXISTS `system_login` (
  `id` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_login`
--

INSERT INTO `system_login` (`id`, `pass`) VALUES
('admin', 'smartadmin'),
('author1', 'smartauthor'),
('kamran', '123'),
('roadkill', 'gotkilled'),
('buddy', 'morebuddy'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `warning`
--

CREATE TABLE IF NOT EXISTS `warning` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) NOT NULL,
  `hit` int(11) NOT NULL,
  `remark` varchar(1023) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `warning`
--

INSERT INTO `warning` (`uid`, `id`, `hit`, `remark`) VALUES
(18, '10321064', 0, 'BRAC-FORD Student, CGPA: increased; Previous scholarship did not taken & retake for improvement'),
(17, '10304049', 0, 'Eligible for Need Based; CGPA: decreased'),
(16, '10121055', 0, 'Getting VC''s from Summer 2011'),
(15, '08304098', 0, 'Earlier considered on Need based; Father died last year; CGPA'),
(19, '08204016', 0, 'Last Academic Semester; CGPA - increased'),
(20, '12108011', 0, ''),
(21, '10226002', 0, ''),
(22, '10104031', 0, ''),
(23, '10104002', 0, ''),
(24, '09208010', 0, ''),
(45, '10371002', 0, 'Less Credit, WI 1st Time( Project)'),
(26, '12104168', 0, 'WI 1st Time'),
(27, '11221024', 0, ''),
(28, '10308018', 0, ''),
(29, '11104015', 0, ''),
(30, '09221045', 0, ''),
(31, '12121118', 0, ''),
(32, '11210017', 0, 'One I in Spring-2012'),
(33, '08104138', 0, ''),
(34, '11101063', 0, ''),
(35, '11261008', 0, ''),
(36, '09381000', 0, ''),
(37, '11108020', 0, ''),
(38, '12308004', 0, 'Dept. Approved'),
(39, '12304007', 0, 'Less Credit'),
(40, '12304022', 0, ''),
(41, '12304058', 0, ''),
(42, '12336001', 0, ''),
(43, '12310001', 0, ''),
(44, '12301026', 0, ''),
(46, '11174010', 0, ''),
(47, '11264010', 0, ''),
(48, '12174016', 0, ''),
(49, '12374005', 0, ''),
(50, '10104049', 0, ''),
(51, '12301031', 0, ''),
(52, '12301029', 0, ''),
(53, '12374030', 0, 'EMBA One EAP'),
(54, '12364014', 0, 'MBA'),
(55, '09103004', 0, 'Dissertation I in Sp-12'),
(56, '10262009', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
