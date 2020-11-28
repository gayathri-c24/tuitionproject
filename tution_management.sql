-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 11:51 AM
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
-- Database: `tution_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'sunnygkp10@gmail.com', '123456'),
(2, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `student_id` int(255) NOT NULL,
  `chk` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`student_id`, `chk`, `subject`, `message`) VALUES
(1, 2, 'maths', 'HIJUY'),
(2, 2, 'maths', '             jhyfjlhebs '),
(3, 2, 'science', '      hijijji        '),
(4, 2, 'hello', '              this message for u'),
(5, 2, 'science', '              hjjjj'),
(6, 2, 'science', '              hjrgewhb'),
(7, 2, 'science', '           gffkgh   '),
(8, 2, 'science', '      gkhyugh        '),
(9, 1, 'science', '              jnlifdelr'),
(10, 1, 'science', '              jnlifdelr'),
(11, 1, 'maths', '              knadhi road.');

-- --------------------------------------------------------

--
-- Table structure for table `coursemanagement`
--

CREATE TABLE `coursemanagement` (
  `staff_id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_author` varchar(255) NOT NULL,
  `coursefile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `student_id` int(11) NOT NULL,
  `PAIDAMOUNT` int(255) NOT NULL,
  `DATE` date NOT NULL,
  `FEETYPE` varchar(255) NOT NULL,
  `FEESTATUS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`student_id`, `PAIDAMOUNT`, `DATE`, `FEETYPE`, `FEESTATUS`) VALUES
(1, 15000, '2020-09-08', 'annuval', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `liveclass`
--

CREATE TABLE `liveclass` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `meeting_link` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `liveclass`
--

INSERT INTO `liveclass` (`id`, `class`, `subject`, `meeting_link`, `date`) VALUES
(1, '11TH', 'MATHS', 'HTTPS//meeting-9th-english.com', '2020-11-23'),
(2, '9TH', 'SOCIAL', 'https:googlemeet.liveclass.com', '2020-11-24'),
(3, '10TH', 'BIO-CHEMISTRY', 'HTTPS//meeting-9th-english.com', '2020-11-25'),
(4, '10TH', 'BIO-ZOOLOGY', 'https:googlemeet.liveclass.com', '2020-11-25'),
(5, '8TH', 'SOCIAL', 'https:googlemeet.liveclass.com', '2020-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `mark_records`
--

CREATE TABLE `mark_records` (
  `student_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course_option` varchar(255) NOT NULL,
  `earn_mark` int(255) NOT NULL,
  `total_mark` int(255) NOT NULL,
  `subjects` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mark_records`
--

INSERT INTO `mark_records` (`student_id`, `name`, `course_option`, `earn_mark`, `total_mark`, `subjects`) VALUES
(1, 'priya', '12th', 87, 100, '--Select Subject to upload Mark--');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userid` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userid`, `username`, `email`, `password`, `role`) VALUES
(1, 'priya', 'yaspriya958@gmail.com', 'qwerty', 'Admin'),
(2, 'Dhanapriya', 'ashdma@gmail.com', '123456', 'Teacher'),
(3, 'priyak', 'mani@gmail.com', '1234', 'Admin'),
(4, 'gayathri', 'cvgayathri1999@gmail.com', '1234', 'Teacher'),
(5, 'yuva', 'hjgiy@gmail.com', '12345', 'Teacher'),
(6, 'keerthi', 'hjiu@gmail.com', '890', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `ph_no` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `course` varchar(20) NOT NULL,
  `school` varchar(100) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mather_name` varchar(50) NOT NULL,
  `parent_no` bigint(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `first_name`, `last_name`, `ph_no`, `email`, `dob`, `gender`, `course`, `school`, `father_name`, `mather_name`, `parent_no`, `address`) VALUES
(1, 'priya', 'k', 9790586716, 'yaspriya958@gmail.com', '2020-11-25', 'female', '12th', 'jhgfd', 'kanagaraj', 'muthukannu', 9790586716, 'gjhdghghgh');

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
(1, 'priya', '12th', 'absent', '2020-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `staff_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `ph_no` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_joining` date NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `coursemanagement`
--
ALTER TABLE `coursemanagement`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `liveclass`
--
ALTER TABLE `liveclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mark_records`
--
ALTER TABLE `mark_records`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `student_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `coursemanagement`
--
ALTER TABLE `coursemanagement`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `liveclass`
--
ALTER TABLE `liveclass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mark_records`
--
ALTER TABLE `mark_records`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
