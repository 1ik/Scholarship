-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2012 at 09:34 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scholarships`
--
CREATE DATABASE `scholarships` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `scholarships`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE IF NOT EXISTS `admin_log` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `admin` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`uid`, `admin`, `action`, `time`) VALUES
(1, 'said', 'Logged In: ', '09/09/2012 04:06:11 pm'),
(2, 'said', 'Logged In: ', '09/11/2012 10:27:05 am'),
(3, 'said', 'Logged In: ', '09/11/2012 10:40:31 am'),
(4, 'said', 'Logged In: ', '09/11/2012 11:37:18 am'),
(5, 'kamran', 'Logged Out: ', '09/11/2012 11:58:22 am'),
(6, 'said', 'Logged In: ', '09/11/2012 12:02:07 pm'),
(7, 'said', 'Logged Out: ', '09/11/2012 12:53:48 pm'),
(8, 'said', 'Logged In: ', '09/11/2012 12:54:31 pm'),
(9, 'said', 'Logged Out: ', '09/11/2012 12:54:34 pm'),
(10, 'said', 'Logged In: ', '09/11/2012 12:54:38 pm'),
(11, 'said', 'Logged Out: ', '09/11/2012 12:54:46 pm'),
(12, 'said', 'Logged In: ', '09/11/2012 12:54:51 pm'),
(13, 'said', 'Logged Out: ', '09/11/2012 12:55:41 pm'),
(14, 'said', 'Logged In: ', '09/11/2012 12:59:54 pm'),
(15, 'said', 'Logged Out: ', '09/11/2012 01:00:19 pm'),
(16, 'said', 'Logged In: ', '09/11/2012 01:02:35 pm'),
(17, 'said', 'Logged Out: ', '09/11/2012 01:03:03 pm'),
(18, 'said', 'Logged In: ', '09/11/2012 01:04:11 pm'),
(19, 'said', 'Logged Out: ', '09/11/2012 01:04:37 pm'),
(20, 'said', 'Logged In: ', '09/11/2012 01:06:43 pm'),
(21, 'said', 'Logged Out: ', '09/11/2012 01:07:15 pm'),
(22, 'said', 'Logged In: ', '09/11/2012 01:10:04 pm'),
(23, 'said', 'Logged Out: ', '09/11/2012 01:10:46 pm'),
(24, 'said', 'Logged In: ', '09/11/2012 01:15:54 pm'),
(25, 'said', 'Logged Out: ', '09/11/2012 01:16:27 pm'),
(26, 'said', 'Logged In: ', '09/11/2012 01:23:19 pm'),
(27, 'said', 'Logged Out: ', '09/11/2012 01:23:42 pm'),
(28, 'said', 'Logged In: ', '09/11/2012 01:23:49 pm'),
(29, 'said', 'Logged Out: ', '09/11/2012 01:24:24 pm'),
(30, 'said', 'Logged In: ', '09/11/2012 01:24:32 pm'),
(31, 'said', 'Logged Out: ', '09/11/2012 01:25:30 pm'),
(32, 'said', 'Logged In: ', '09/11/2012 01:27:23 pm'),
(33, 'said', 'Logged Out: ', '09/11/2012 01:27:36 pm'),
(34, 'said', 'Logged In: ', '09/11/2012 01:27:46 pm'),
(35, 'said', 'Logged Out: ', '09/11/2012 01:27:56 pm'),
(36, 'said', 'Logged In: ', '09/11/2012 01:28:02 pm'),
(37, 'said', 'Logged Out: ', '09/11/2012 01:28:10 pm'),
(38, 'said', 'Logged In: ', '09/11/2012 01:28:16 pm'),
(39, 'said', 'Logged Out: ', '09/11/2012 01:31:22 pm'),
(40, 'said', 'Logged In: ', '09/11/2012 01:31:55 pm'),
(41, 'said', 'Logged Out: ', '09/11/2012 01:55:47 pm'),
(42, 'said', 'Logged In: ', '09/11/2012 02:44:27 pm'),
(43, 'said', 'Logged In: ', '09/14/2012 04:34:43 pm');

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
  `ford` int(11) NOT NULL,
  `brac` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`id`, `siblings`, `need`, `merit`, `performance`, `employee_child`, `freedom_fighter`, `physically_challenged`, `spouse`, `vc`, `ford`, `brac`) VALUES
(1, 300000, 10000, 25000, 300000, 30000, 50000, 10000, 20000, 70000, 70000, 70000);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `edu_back`
--

INSERT INTO `edu_back` (`uid`, `id`, `sa`, `sa_year`, `sa_group`, `sa_school`, `sa_division`, `sa_grade`, `ho`, `ho_year`, `ho_group`, `ho_college`, `ho_division`, `ho_grade`, `other`, `other_year`, `other_group`, `other_school`, `other_division`, `other_grade`, `other_description`, `comment`) VALUES
(1, '09101024', 0, '2004', 'Q3', 'F', '234', '2342', 0, '2342', '234', '234', '234', '234', '', '', '', '', '', '', '																																																			', '									asdfa fasd fasdf asdf asdf																																						');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `head` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `msg`, `head`) VALUES
(1, '                                <p>\r\n                   There are three semesters for all departments except Pharmacy.\r\n                   <br/>\r\n                   Below are the rules for qualifying for the scholarship award:\r\n                </p>\r\n               \r\n                   \r\n               <ul>    \r\n                   <li>\r\n                       In the <strong>first semester</strong> a student will have to take <strong>9 credits </strong>\r\n                       with compulsory a non-credit <strong>English and Mathematics if required</strong>.\r\n                   </li>\r\n                   <br/>\r\n                   <li>\r\n                       Students who are in the "<strong>Residential Semester (RS)</strong>" will be required to take\r\n                       compulsory <strong>9 Credits</strong> while in RS. \r\n                   </li>\r\n                   <br/>\r\n                   <li>\r\n                       If there is any <strong>Retake/Repeat/ F (Grade)</strong> in a student''s previous semester\r\n                       result, he/she will not be eligible to apply for <strong>Performance Based</strong> tuition waiver.\r\n                   </li>\r\n                   <br/>\r\n                   <li>\r\n                       Students having <strong>Retake/ Repeat</strong> subjects in a semester and applying for tuition\r\n                       fee waiver would be required to pay for the retake/ repeat subjects.\r\n                   </li>\r\n                   <br/>\r\n                   <li>\r\n                       If any student <strong>Fails</strong> in any subject in a semester, he/she will not be \r\n                       considered for tuition fee waiver for the <strong>Subsequent Semesters</strong>. \r\n                   </li>\r\n                   <br/>\r\n                   <li>\r\n                       Students having <strong>"I"</strong> grade in a semester will have to pay for all the courses\r\n                       in the next semester. If he/she obtains the required CGPA after <strong>"Make Up"</strong>\r\n                       his/her waiver for the next semester will be adjusted.\r\n                   </li>\r\n                   <br/>\r\n                  For all the semesters other than <strong>1st and RS</strong>, students taking 12 Credits in a semester will \r\n                  get tuition waiver on the basis of following categories.\r\n                </ul>                                ', '<h3>Financial Aid Policy </h3>'),
(2, '                                <p>\r\n                   Unlike three semesters for other departments, Pharmacy Department offers two semester on each year.\r\n                   i.e from January to June and July to December respectively. Hence, a separate budget for the scholarship\r\n                   for this department needs to be allocated.\r\n                   <br/>\r\n                   Below are the rules for qualifying the scholarship award:\r\n                </p>\r\n               \r\n                   \r\n               <ul>    \r\n                   <li>\r\n                       In the <strong>first semester</strong> a student will have to take <strong>15 credits</strong>\r\n                       with compulsory non-credit <strong>English and Mathematics if required</strong>.\r\n                   </li>\r\n                   <br/>\r\n                   <li>\r\n                       Students who are in the "<strong>Residential Semester (RS)</strong>" will be required to take\r\n                       compulsory <strong>9 Credits</strong> while in RS.\r\n                   </li>\r\n                   <br/>\r\n                   <li>\r\n                       If there is any <strong>Retake/Repeat/ F (Grade)</strong> in a student''s previous semester\r\n                       result, he/she will not be eligible to apply for <strong>Performance Based</strong> tuition waiver.\r\n                   </li>\r\n                   <br/>\r\n                   <li>\r\n                       Students having <strong>Retake/ Repeat</strong> subjects in a semester and applying for tuition\r\n                       fee waiver would be required to pay for the retake/ repeat subjects.\r\n                   </li>\r\n                   <br/>\r\n                   <li>\r\n                       If any student <strong>Fails</strong> in any subject in a semester, he/she will not be \r\n                       considered for tuition fee waiver for the <strong>Subsequent Semesters</strong>. If he/she improves,\r\n                       then may apply for subsequent semesters. Scholarship Committee has the right to decide his/her\r\n                       eligibility for scholarship.\r\n                   </li>\r\n                   <br/>\r\n                   <li>\r\n                       Students having <strong>"I"</strong> grade in a semester will have to pay for all the courses\r\n                       in the next semester. If he/she obtains the required CGPA after <strong>"Make Up"</strong>\r\n                       his/her waiver for the next semester will be adjusted.\r\n                   </li>\r\n                   <br/>\r\n                  For all the semester other than <strong>1st and RS</strong>, students taking 18 Credits in a semester will \r\n                  get tuition waiver on the basis of the following categories.\r\n                </ul>                                ', '<h3>Financial Aid Policy For Pharmacy Department</h3>');

-- --------------------------------------------------------

--
-- Table structure for table `minumum_cgpa`
--

CREATE TABLE IF NOT EXISTS `minumum_cgpa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `cgpa` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `minumum_cgpa`
--

INSERT INTO `minumum_cgpa` (`id`, `category`, `cgpa`, `description`) VALUES
(1, 'Performance Based Scholarship', '3.70', '<ul>\r\n<li>\r\nIn the first semester students will have to take 9 credits (Minimum) plus non-credit El-Pro course or 12 credits itself\r\n</li>\r\n<li>\r\nFor all subsequent semesters, students must take 12 credits (4 courses) to be eligible\r\n</li>\r\n<li>\r\nStudents going for Residential Semester must take 9 credits minimum for that semester only\r\n</li>\r\n<li>\r\nPermission is required for studio courses (in case of Architecture students)\r\n</li>\r\n</ul>'),
(2, 'Merit Based Scholarship', '3.50', 'Full tuition waiver for:\r\n<ul>\r\n  <li>\r\n     SSC: GPA 5.00 (Without 4th subject)\r\n  </li>\r\n  <li>\r\n     HSC: GPA 5.00 (Without 4th subject )\r\n  </li>\r\n  <li>\r\n     O Level : 7 A''s (1 Sitting)\r\n  </li>\r\n  <li>\r\n     A Level: 3 A''s\r\n  </li>\r\n</ul>\r\n\r\nStudents are required to maintain the following requirements for\r\nscholarship.\r\n<ul>\r\n\r\n<li>\r\nIn the first semester students will have to take 9 credits (Minimum) plus non-credit El-Pro course or 12 credits itself\r\n</li>\r\n\r\n<li>\r\nFor all subsequent semesters, students must take 12 credits (4 courses) to be eligible\r\n</li>\r\n\r\n<li>\r\nStudents going for Residential Semester must take 9 credits minimum for that semester only\r\n</li>\r\n\r\n<li>\r\nCGPA of minimum 3.5 to be maintained from the first semester and retained for all subsequent semesters. No retake will be considered. If student fails to maintain 3.25 CGPA, 2 semesters will be given to recover.\r\n</li>\r\n\r\n</ul>\r\n\r\nThereafter, committee will decide to grant or reject'),
(3, 'Siblings based Scholarship', '3.00', 'This scholarship applies for the siblings studying at BRAC University. \r\n\r\n<ul>\r\n   <li>\r\n     2 Daughters: 50%\r\n   </li>\r\n   <li>\r\n     1 Daughter and 1 Son: 50%\r\n   </li>\r\n   <li>\r\n     2 Sons: 50%\r\n   </li>\r\n</ul>\r\n\r\nStudents are required to fulfill the following requirement \r\nto obtain scholarship:\r\n\r\n<ul>\r\n<li>\r\nIn the first semester students will have to take 9 credits (Minimum) plus non-credit El-Pro course or 12 credits itself\r\n</li>\r\n\r\n<li>\r\nFor all subsequent semesters, students must take 12 credits (4 courses) to be eligible\r\n</li>\r\n\r\n<li>\r\nStudents going for Residential Semester must take 9 credits minimum for that semester only\r\n</li>\r\n\r\n<li>\r\nCGPA of minimum 3 is to be maintained by the concerned student from the first semester onwards\r\n</li>\r\n</ul>\r\n\r\n\r\n\r\n'),
(4, 'BRAC-Ford Scholarship', '3.00', 'Meritorious orphan students from extremely disadvantaged financial background, living with relatives can apply for this scholarship. \r\n<br/>\r\nTo apply for the scholarship he/she must have a minimum GPA of 4.5 (without 4th subject) from Science OR a GPA of 4 (without 4th subject) from Arts and Commerce in SSC & HSC \r\n<br/>\r\n\r\nStudents are required to maintain the following requirements for obtaining scholarship:\r\n\r\n<ul>\r\n<li>\r\nIn the first semester students will have to take 9 credits (Minimum) plus non-credit El-Pro course or 12 credits itself\r\n</li>\r\n\r\n<li>\r\nFor all subsequent semesters, students must take 12 credits (4 courses) to be eligible\r\n</li>\r\n\r\n<li>\r\nStudents going for Residential Semester must take 9 credits minimum for that semester only\r\n</li>\r\n\r\n<li>\r\nCGPA of minimum 3.0 must be scored in the first semester and maintained through all subsequent semesters\r\n</li>\r\n</ul>\r\n\r\n\r\n\r\n\r\nIf students fails to maintain the CGPA of 3.00 in 2 subsequent semesters, he/she will no longer get the scholarship\r\n\r\nStudents under this category can apply for\r\n<ul> \r\n<li>Full tuition fee waiver</li> \r\n<li>Full tuition fee waiver with living and other allowances</li>\r\n<li>Continuing BRAC U students can also apply</li>\r\n</ul>\r\nFor further information please contact information desk'),
(5, 'Need Based Scholarship', '3.00', 'BRAC U students having CGPA of 3.0 and above with parents having certain ranges of monthly income can apply for Need Based Waiver.\r\n<br/>\r\nCommittee''s decision to award will be final.\r\n<br/>\r\n\r\nStudents are required to maintain the following requirements to obtain scholarship:\r\n\r\n<ul>\r\n  <li>\r\nIn the first semester students will have to take 9 credits (Minimum) plus non-credit El-Pro course or 12 credits itself\r\n  </li>\r\n   <li>\r\nFor all subsequent semesters, students must take 12 credits (4 courses) to be eligible\r\n   </li>\r\n   <li>\r\nStudents going for Residential Semester must take 9 credits minimum for that semester only\r\n   </li>\r\n   <li>\r\nCPGA of minimum 3.00 must maintained every semester. No retake will be considered. If student fails to maintain 3.00 CGPA, 2 semesters will be given 2 semesters to recover.\r\n   </li>\r\n</ul>'),
(6, 'BRACU Employee Child Scholarship', '3.00', 'Regular staff/faculty member can apply for 50-80% tuition fee waiver for their two dependant children provided they fulfill the normal student enrollment process to obtain a place in a program/major.\r\n\r\n<ul>\r\n\r\n<li>\r\nGrade XI and above(Assistant Professor and above\r\n) : 50% waiver\r\n</li>\r\n\r\n<li>\r\nGrade V-X : 75% waiver\r\n</li>\r\n\r\n<li>\r\nGrade I-IV : 80% waiver\r\n</li>\r\n\r\n</ul>'),
(7, 'BRAC Employee Child Scholarship', '2.50', 'Waiver for Dependant children of Regular staff member of BRAC University.\r\n\r\n<ul>\r\n  <li>\r\nChildren of BRAC staff (level 8-19):\r\nTuition fee waiver 25%\r\n  </li>\r\n\r\n  <li>\r\nChildren of Service Staff (level 1-7):\r\nTuition waiver up to 50%\r\n  </li>\r\n\r\n  <li>\r\nScholarship will be continued as long as student scores CGPA of 2.5 from first semester and maintains it for all subsequent semesters\r\n   </li>\r\n</ul>\r\n\r\nStudents are required to maintain the following requirements for scholarship.\r\n\r\n<ul>\r\n<li>\r\nIn the first semester students will have to take 9 credits (Minimum) plus non-credit El-Pro course or 12 credits itself\r\n</li>\r\n<li>\r\nFor all subsequent semesters, students must take 12 credits (4 courses) to be eligible\r\n</li>\r\n\r\n<li>\r\nStudents going for Residential Semester must take 9 credits minimum for that semester only\r\n</li>\r\n</ul>\r\n '),
(8, 'Physically Challenged Scholarship', '3.00', 'Physically challenged students will receive special fee waiver at various rates to be determined by the scholarship committee on case-by-case basis\r\n'),
(9, 'Other', '3.00', 'Children of Freedom Fighter will get 100% scholarship. Students are required to fulfill the following requirements for obtaining scholarship. \r\n\r\n<ul>\r\n<li>\r\nIn the first semester students will have to take 9 credits (Minimum) plus non-credit El-Pro course or 12 credits itself\r\n</li>\r\n\r\n<li>\r\nFor all subsequent semesters, students must take 12 credits (4 courses) to be eligible\r\n</li>\r\n\r\n<li>\r\nStudents going for Residential Semester must take 9 credits minimum for that semester only\r\n</li>\r\n\r\n<li>\r\nCGPA of minimum 3.0 must be scored in the first semester and maintained through all subsequent semesters\r\n</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `msg`) VALUES
(2, 'Fall 2012', '                                    <span>\r\n                    <strong>\r\n                        <h1>Financial Aid for Fall-2012</h1>\r\n                    </strong>\r\n                </span>\r\n                <br/>\r\n                <span>\r\n                    Date: September 03, 2012\r\n                </span>\r\n                <br/><br/>\r\n                <div>\r\n                    The students who wish to apply for financial aid under any category will \r\n                    have to do so by filling out BOTH the Financial Aid Application Form of \r\n                    BRAC University collected from the admission desk and also the \r\n                    ONLINE Financial Aid Form from the following link:\r\n                 </div>\r\n                 <br/>\r\n                 \r\n                 <br/>\r\n                 <div>\r\n                    <ul>\r\n                        <li> All applicants are required to fill up both the ONLINE Form and the Form collected from the admission desk to validate the application.</li>\r\n \r\n                        <li> All new applicants will be required to pay <strong>TK. 200/- </strong>when submitting the form.</li>\r\n\r\n                        <li> Students applying for their performance based tuition fee waiver, will be required to pay a fee of <strong>TK. 200/-</strong> when submitting their forms.</li>\r\n\r\n                        <li> Students applying for renewal of their tuition fee waiver in all categories need not to pay any fee.</li>\r\n                    </ul>\r\n                    Forms will be available at the information desk from <strong>September 09, 2012</strong>. The last date for submitting the filled out form along with grade sheets and photocopy of advising form is <strong>September 13, 2012</strong>.\r\n                  </div>                                '),
(5, 'Fall 2012', '                                                                                                                                                         <span>\r\n                    <strong>\r\n                        <h1>Financial Aid for Fall-2012</h1>\r\n                    </strong>\r\n                </span>\r\n                \r\n                <span>\r\n                    Date: September 06, 2012\r\n                </span>\r\n                <br/>\r\n                <div>\r\n                    The last date for paying tuition fees for the students who will apply for financial aid\r\n                    for Fall-2012 is <strong>September 30, 2012 (Sunday)</strong>\r\n                 </div>\r\n                 <br/>\r\n                 <div>\r\n                    <ul>\r\n                        <li> No Late fees will be charged this time.</li>\r\n                    </ul>\r\n                    Note: Scholarship must be adjusted before mid term of the respective semester.\r\n                  </div>                                                                                                                                                       ');

-- --------------------------------------------------------

--
-- Table structure for table `performance_table`
--

CREATE TABLE IF NOT EXISTS `performance_table` (
  `cgpa_from` float NOT NULL,
  `cgpa_to` float NOT NULL,
  `amount` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance_table`
--

INSERT INTO `performance_table` (`cgpa_from`, `cgpa_to`, `amount`) VALUES
(3.7, 3.84, 20),
(3.85, 3.89, 40),
(3.9, 3.94, 60),
(3.95, 3.99, 80),
(4, 4, 100);

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
  `image_url` varchar(255) NOT NULL,
  `NonCredit` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `primary`
--

INSERT INTO `primary` (`uid`, `id`, `appID`, `name`, `dd`, `mm`, `yy`, `dept`, `gender`, `marital_status`, `cgpa`, `employee_id`, `course_credit`, `studio_credit`, `lecture_credit`, `credit_completed`, `credit_required`, `first_semester`, `birth_place`, `going_tarc`, `second_last_semester`, `last_semester`, `department_change`, `first_time_application`, `retake`, `fail`, `failing_reason`, `disciplinary`, `dis_reason`, `contact1`, `contact2`, `email`, `sibling_id`, `pass`, `approved`, `allowance`, `image_url`, `NonCredit`) VALUES
(1, '01000000', '01000000', 'none', 0, 0, 0, '', 0, '0', 0, 'na', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, '', '', '', '', '', '', 0, 0, '', 0),
(2, '09301010', '09301010', 'Dummy1', 0, 0, 0, 'CSE', 0, '0', 3.9, 'na', 12, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, '', '', '', '', '', '', 1, 0, '', 0),
(4, '09303030', '09303030', 'Dummy3', 0, 0, 0, 'ARC', 0, '0', 3.7, 'na', 16, 10, 6, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, '', '', '', '', '', '', 1, 0, '', 0),
(5, '09101024', '09000000', 'anik  ', 1, 1, 1980, 'cse', 0, '0', 12, '', 12, 12, 12, 12, 12, 0, 'ASDA', 0, 0, 0, '', 0, 0, 0, '', 0, '', '123123123', '123123123', 'asasd@asd.com', '', 'abc', 0, 0, '', 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `scholar_amount`
--

INSERT INTO `scholar_amount` (`uid`, `id`, `performance`, `merit`, `needbased`, `spouse`, `siblings`, `brac_employee`, `brac_ford`, `phyic_challanged`, `bracu_employee`, `freedom_fighter`, `vc`, `last`, `committee`) VALUES
(1, '01000000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '09301010', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '09303030', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '09101024', -1, -1, 0, 0, 0, 0, 0, 0, -1, 0, 0, 0, 0);

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
  `ref_permanent_name` varchar(255) NOT NULL,
  `ref_permanent_cell` int(11) NOT NULL,
  `ref_permanent_address` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `secondary`
--

INSERT INTO `secondary` (`uid`, `id`, `father_name`, `father_profession`, `father_income`, `father_contact`, `mother_name`, `mother_profession`, `mother_income`, `mother_contact`, `guardian`, `guardian_profession`, `guardian_income`, `guardian_contact`, `fixed_asset`, `present_address`, `permanent_address`, `permanent_village`, `permanent_po`, `permanent_ps`, `permanent_union`, `permanent_district`, `permanent_loc_area`, `award`, `co_cur_activity`, `reference1`, `reference2`, `bro_sis`, `sibling1_name`, `sibling1_status`, `sibling1_id`, `sibling2_status`, `sibling2_name`, `sibling2_id`, `sibling1_age`, `sibling2_age`, `spouse_name`, `spouse_id`, `marital_status`, `ref_present_name`, `ref_present_cell`, `ref_present_address`, `ref_permanent_name`, `ref_permanent_cell`, `ref_permanent_address`) VALUES
(1, '09101024', 'sdf', 'sdf', 'sdf', '123123123123', 'asdf', 'asdef', '23423', '234234234', 'ASDFADF', 'ASDF', '', 0, '123123', 'ADFASD', '', 'asd', 'wwe', 'wfsd', 'wdf', 'wsf', 'wsdf', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, 'sdf', 1234234, 'sadf', 'wewe', 234, '234234234');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester`) VALUES
(1, 'Summer 2012');

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
('said', '01818648006'),
('admin', '9853948');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE IF NOT EXISTS `token` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `current` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`uid`, `start`, `end`, `current`) VALUES
(1, 3000, 3050, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `warning`
--

INSERT INTO `warning` (`uid`, `id`, `hit`, `remark`) VALUES
(1, '01000000', 0, ''),
(2, '09301010', 0, 'I like this dummy.'),
(4, '09303030', 0, 'Because he is a dummy'),
(5, '09101024', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `warningletter`
--

CREATE TABLE IF NOT EXISTS `warningletter` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `one` varchar(255) NOT NULL,
  `two` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `warningletter`
--

INSERT INTO `warningletter` (`uid`, `one`, `two`) VALUES
(1, 'First Warning                        ', 'sakjhfsldkjahfakls skjh fadsklh fdslahf ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
