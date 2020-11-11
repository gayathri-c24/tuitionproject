-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 09:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuition`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `chk` int(255) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `MESSAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`chk`, `SUBJECT`, `MESSAGE`) VALUES
(105, 'science', 'read out first 3 chapter.'),
(105, 'maths', 'workout first 3 sums'),
(105, 'science', 'read out first 3 chapters...'),
(105, 'science', 'read out first 3 chapters...'),
(105, 'science', 'read out first 3 chapters...'),
(105, 'science', 'read out first 3 chapters...'),
(105, 'maths', 'fdgfdgfsf'),
(105, 'maths', 'gjhg'),
(109, 'science', 'hjinkmj');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `ID` int(255) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `COURSEOPTION` varchar(255) NOT NULL,
  `attendence_status` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`ID`, `NAME`, `COURSEOPTION`, `attendence_status`, `date`) VALUES
(101, 'gayathri', '10TH STD', 'present', '2020-10-26'),
(102, 'keerthi', '10TH STD', 'absent', '2020-10-26'),
(109, 'hit', '10TH STD', 'present', '2020-10-26'),
(101, 'gayathri', '10TH STD', 'present', '2020-10-26'),
(102, 'keerthi', '10TH STD', 'absent', '2020-10-26'),
(109, 'hit', '10TH STD', 'present', '2020-10-26'),
(101, 'gayathri', '10TH STD', 'present', '2020-10-27'),
(102, 'keerthi', '10TH STD', 'present', '2020-10-27'),
(109, 'hit', '10TH STD', 'absent', '2020-10-27'),
(101, 'gayathri', '', 'absent', '2020-11-06'),
(102, 'keerthi', '', 'absent', '2020-11-06'),
(109, 'hit', '', 'present', '2020-11-06'),
(105, 'yuva', '', 'present', '2020-11-06'),
(101, 'gayathri', '', 'present', '2020-11-06'),
(102, 'keerthi', '', 'present', '2020-11-06'),
(109, 'hit', '', 'present', '2020-11-06'),
(105, 'yuva', '', 'present', '2020-11-06'),
(101, 'gayathri', '', 'present', '2020-11-06'),
(102, 'keerthi', '', 'present', '2020-11-06'),
(109, 'hit', '', 'present', '2020-11-06'),
(105, 'yuva', '', 'present', '2020-11-06'),
(101, 'gayathri', '', 'absent', '2020-11-06'),
(102, 'gayathri', '', 'absent', '2020-11-06'),
(109, 'keerthi', '', 'absent', '2020-11-06'),
(105, 'keerthi', '', 'absent', '2020-11-06'),
(101, 'gayathri', '10TH STD', 'present', '2020-11-06'),
(102, 'keerthi', '10TH STD', 'present', '2020-11-06'),
(109, 'hit', '10TH STD', 'present', '2020-11-06'),
(105, 'yuva', '10TH STD', 'absent', '2020-11-06'),
(101, 'gayathri', '10TH STD', 'present', '2020-11-06'),
(102, 'keerthi', '10TH STD', 'present', '2020-11-06'),
(109, 'hit', '10TH STD', 'present', '2020-11-06'),
(105, 'yuva', '10TH STD', 'present', '2020-11-06'),
(0, '', '', '', '2020-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ID` int(255) NOT NULL,
  `CLASS` varchar(255) NOT NULL,
  `SUBJECTNAME` varchar(255) NOT NULL,
  `SUBJECTAUTHOR` varchar(255) NOT NULL,
  `CLASSTEACHERNAME` varchar(255) NOT NULL,
  `coursefile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`ID`, `CLASS`, `SUBJECTNAME`, `SUBJECTAUTHOR`, `CLASSTEACHERNAME`, `coursefile`) VALUES
(1, 'JEE', 'maths', 'louis peter', 'ruby', 'chn22.pdf'),
(2, '8TH STD', 'MATHS', 'paul', 'punitha', 'Drug Act and cosmetic act.pdf'),
(3, '6TH STD', 'TAMIL', 'kathija pegam', 'ruby', 'Gayathri.C_resume.docx');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `STUDENTID` int(255) NOT NULL,
  `PAIDAMOUNT` int(255) NOT NULL,
  `FEETYPE` varchar(255) NOT NULL,
  `paiddate` date NOT NULL,
  `FEESTATUS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`STUDENTID`, `PAIDAMOUNT`, `FEETYPE`, `paiddate`, `FEESTATUS`) VALUES
(106, 10000, 'ANNUVAL', '2020-08-12', 'Paid'),
(110, 19000, 'MONTHLY', '2020-05-03', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `front`
--

CREATE TABLE `front` (
  `STUDENTID` int(255) NOT NULL,
  `NAME` varchar(70) NOT NULL,
  `PHONENUMBER` int(255) NOT NULL,
  `EMAILID` varchar(70) NOT NULL,
  `SCHOOLNAME` varchar(70) NOT NULL,
  `DATEOFBIRTH` date NOT NULL,
  `FATHERNAME` text NOT NULL,
  `MOTHERNAME` varchar(70) NOT NULL,
  `GENDER` varchar(30) NOT NULL,
  `CASTE` varchar(30) NOT NULL,
  `ADDRESS` varchar(70) NOT NULL,
  `COURSEOPTION` varchar(11) NOT NULL,
  `SECTION` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `front`
--

INSERT INTO `front` (`STUDENTID`, `NAME`, `PHONENUMBER`, `EMAILID`, `SCHOOLNAME`, `DATEOFBIRTH`, `FATHERNAME`, `MOTHERNAME`, `GENDER`, `CASTE`, `ADDRESS`, `COURSEOPTION`, `SECTION`) VALUES
(110, 'sindhu', 2147483647, 'AAS2@gmail.com', 'vvv hr sec school', '2002-02-19', 'jiki', 'nimi', 'MALE', 'OBC', 'teachers coclony', 'NEET', ''),
(111, 'VICKY', 987690876, 'jihu@gmail.com', 'aaa school', '2001-09-02', 'kavvi', 'kavya', 'male', 'OBC', 'vakil street', 'JEE', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `USERNAME` varchar(10) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`USERNAME`, `PASSWORD`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `liveclass`
--

CREATE TABLE `liveclass` (
  `ID` int(255) NOT NULL,
  `CLASS` varchar(255) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `MEETINGLINK` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `liveclass`
--

INSERT INTO `liveclass` (`ID`, `CLASS`, `SUBJECT`, `MEETINGLINK`, `date`) VALUES
(3, '9th', 'ENGLISH', 'HTTPS//meeting-9th-english.com', '2020-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `mark_records`
--

CREATE TABLE `mark_records` (
  `STUDENTID` int(255) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `COURSEOPTION` varchar(255) NOT NULL,
  `EARNMARK` int(255) NOT NULL,
  `TOTALMARK` int(100) NOT NULL,
  `date` date NOT NULL,
  `SUBJECTS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mark_records`
--

INSERT INTO `mark_records` (`STUDENTID`, `NAME`, `COURSEOPTION`, `EARNMARK`, `TOTALMARK`, `date`, `SUBJECTS`) VALUES
(109, 'BULU', 'NEET', 98, 100, '2020-11-09', 'SCIENCE'),
(105, 'bindu', 'NEET', 90, 100, '2020-11-09', 'SCIENCE');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `STUDENTID` int(255) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `COURSEOPTION` varchar(255) NOT NULL,
  `attendence_status` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_attendance`
--

INSERT INTO `student_attendance` (`STUDENTID`, `NAME`, `COURSEOPTION`, `attendence_status`, `date`) VALUES
(105, 'SARATHA', 'JEE', 'absent', '2020-11-06'),
(105, 'SARATHA', 'JEE', 'present', '2020-11-06'),
(105, 'SARATHA', 'JEE', 'present', '2020-11-06'),
(109, 'BULU', 'NEET', 'present', '2020-11-06'),
(105, 'bindu', 'NEET', 'absent', '2020-11-06'),
(110, '\r\nsindhu', 'NEET', 'present', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(11) NOT NULL,
  `AGE` int(11) NOT NULL,
  `SALARY` int(11) NOT NULL,
  `DATEOFBIRTH` date NOT NULL,
  `DATEOFJOINING` date NOT NULL,
  `QUALIFICATION` varchar(100) NOT NULL,
  `PERFORMANCE` int(100) NOT NULL,
  `COURSEOPTION` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `NAME`, `AGE`, `SALARY`, `DATEOFBIRTH`, `DATEOFJOINING`, `QUALIFICATION`, `PERFORMANCE`, `COURSEOPTION`, `image`) VALUES
(101, 'gayathri', 21, 10000, '1998-02-12', '1999-09-02', 'B.ED', 50, '10TH STD', 'staff1.jpg'),
(102, 'keerthi', 19, 30000, '1998-02-11', '0000-00-00', 'B.ED', 50, '10TH STD', 'clock.jpg'),
(109, 'hit', 23, 10000, '1998-08-08', '1999-09-08', 'M.ED', 90, '10TH STD', 'seen.jpg'),
(105, 'yuva', 23, 10000, '1998-02-12', '0000-00-00', 'B.ED', 90, '10TH STD', 'back.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `liveclass`
--
ALTER TABLE `liveclass`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `liveclass`
--
ALTER TABLE `liveclass`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
