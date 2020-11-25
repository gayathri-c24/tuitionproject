-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 06:50 AM
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
-- Database: `tuition_mangement`
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
  `ID` int(255) NOT NULL,
  `chk` int(255) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `MESSAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`ID`, `chk`, `SUBJECT`, `MESSAGE`) VALUES
(1, 2, 'maths', 'HIJUY'),
(2, 2, 'maths', '             jhyfjlhebs '),
(3, 2, 'science', '      hijijji        '),
(4, 2, 'hello', '              this message for u'),
(5, 2, 'science', '              hjjjj'),
(6, 2, 'science', '              hjrgewhb'),
(7, 2, 'science', '           gffkgh   '),
(8, 2, 'science', '      gkhyugh        ');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('55892169bf6a7', '55892169d2efc'),
('5589216a3646e', '5589216a48722'),
('558922117fcef', '5589221195248'),
('55892211e44d5', '55892211f1fa7'),
('558922894c453', '558922895ea0a'),
('558922899ccaa', '55892289aa7cf'),
('558923538f48d', '558923539a46c'),
('55892353f05c4', '55892354051be'),
('558973f4389ac', '558973f462e61'),
('558973f4c46f2', '558973f4d4abe'),
('558973f51600d', '558973f526fc5'),
('558973f55d269', '558973f57af07'),
('558973f5abb1a', '558973f5e764a'),
('5589751a63091', '5589751a81bf4'),
('5589751ad32b8', '5589751adbdbd'),
('5589751b304ef', '5589751b3b04d'),
('5589751b749c9', '5589751b9a98c');

-- --------------------------------------------------------

--
-- Table structure for table `coursemanagement`
--

CREATE TABLE `coursemanagement` (
  `ID` int(255) NOT NULL,
  `CLASS` varchar(255) NOT NULL,
  `SUBJECTNAME` varchar(255) NOT NULL,
  `SUBJECTAUTHOR` varchar(255) NOT NULL,
  `coursefile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursemanagement`
--

INSERT INTO `coursemanagement` (`ID`, `CLASS`, `SUBJECTNAME`, `SUBJECTAUTHOR`, `coursefile`) VALUES
(1, '11TH STD', 'COMPUTERSCIENCE', 'paul', 'Gayathri.C_resume (1).docx'),
(2, '11TH STD', 'BIO-CHEMISTRY', 'priya', 'uploadimages (15)'),
(3, 'JEE', 'HISTORY', 'kathija pegam', 'uploadimages (8)'),
(4, '10TH STD', 'SCIENCE', 'lawn', 'Drug Act and cosmetic act (1).pdf'),
(5, '11TH STD', 'ECONOMICS', 'priya', 'tuition.sql'),
(6, '12TH STD', 'COMPUTERSCIENCE', 'louis peter', 'attendancemanagementsystem.txt'),
(7, '10TH STD', 'BIO-ZOOLOGY', 'david', 'tuition (1).sql'),
(8, '12TH STD', 'BIO-PHYSICS', 'priya', 'epiz_27037499_tuitionmanagement.sql'),
(9, '11TH STD', 'BIO-CHEMISTRY', 'lawn', '20190307_212543.jpg'),
(10, '9TH', 'ENGLISH', 'kathija pegam', ''),
(11, '11TH STD', 'SOCIAL', 'priya', 'chn53.pdf'),
(12, '10TH', 'MATHS', 'lawn', ''),
(13, '10TH', 'ECONOMICS', 'kathija pegam', 'tim-mossholder-WE_Kv_ZB1l0-unsplash.jpg'),
(14, '12TH', 'BIO-BOTANY', 'priya', 'staff.sql'),
(15, '9TH', 'SOCIAL', 'lawn', 'uploadimages (4)'),
(16, '10TH', 'ECONOMICS', 'paul', 'Gayathri.C_resume (1).docx'),
(17, '12TH', 'BIO-BOTANY', 'paul', 'CHN I  27.5.20_AN_Environmental_act_drugs_cosmetic_act (1).pdf'),
(18, '12TH', 'SOCIAL', 'david', '1604992088865_gayu resume.docx'),
(19, '12TH', 'BIO-CHEMISTRY', 'louis peter', 'uploadimages (1)'),
(20, '10TH', 'HISTORY', 'kathija pegam', 'uploadimages (10)'),
(21, '9TH', 'SCIENCE', 'paul', 'bx-book.svg'),
(22, '9TH', 'MATHS', 'priya', 'daily.sql'),
(23, 'NEET', 'COMMERCE', 'priyamaa', 'student.txt'),
(24, '10TH', 'ENGLISH', 'louis peter', 'email.txt'),
(25, '8TH', 'SCIENCE', 'priya', 'chn53.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(5) NOT NULL,
  `course` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`, `subject`) VALUES
(1, '6th', 'Tamil'),
(2, '6th', 'English');

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
('55846be776610', 'testing', 'sunnygkp10@gmail.com', 'testing', 'testing stART', '2015-06-19', '09:22:15pm'),
('5584ddd0da0ab', 'netcamp', 'sunnygkp10@gmail.com', 'feedback', ';mLBLB', '2015-06-20', '05:28:16am'),
('558510a8a1234', 'sunnygkp10', 'sunnygkp10@gmail.com', 'dl;dsnklfn', 'fmdsfld fdj', '2015-06-20', '09:05:12am'),
('5585509097ae2', 'sunny', 'sunnygkp10@gmail.com', 'kcsncsk', 'l.mdsavn', '2015-06-20', '01:37:52pm'),
('5586ee27af2c9', 'vikas', 'vikas@gmail.com', 'trial feedback', 'triaal feedbak', '2015-06-21', '07:02:31pm'),
('5589858b6c43b', 'nik', 'nik1@gmail.com', 'good', 'good site', '2015-06-23', '06:12:59pm');

-- --------------------------------------------------------

--
-- Table structure for table `fees_type`
--

CREATE TABLE `fees_type` (
  `student_id` int(5) NOT NULL,
  `fees_type` varchar(20) NOT NULL,
  `amount` int(5) NOT NULL,
  `course` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees_type`
--

INSERT INTO `fees_type` (`student_id`, `fees_type`, `amount`, `course`, `subject`) VALUES
(1, 'Annual', 10000, '8th', 'Maths'),
(2, 'Monthly', 1000, '6th', 'English'),
(3, 'Term', 6000, '10th', 'all');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('sunnygkp10@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2015-06-23 09:31:26'),
('sunnygkp10@gmail.com', '558920ff906b8', 4, 2, 2, 0, '2015-06-23 13:32:09'),
('avantika420@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2015-06-23 14:33:04'),
('avantika420@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2015-06-23 14:49:39'),
('sunnygkp10@gmail.com', '5589741f9ed52', 4, 5, 3, 2, '2015-06-23 15:07:16'),
('mi5@hollywood.com', '5589222f16b93', 4, 2, 2, 0, '2015-06-23 15:12:56'),
('nik1@gmail.com', '558921841f1ec', 1, 2, 1, 1, '2015-06-23 16:11:50'),
('sunnygkp10@gmail.com', '5589222f16b93', 1, 2, 1, 1, '2015-06-24 03:22:38');

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
(0, '11TH', 'MATHS', 'HTTPS//meeting-9th-english.com', '2020-11-23'),
(0, '9TH', 'SOCIAL', 'https:googlemeet.liveclass.com', '2020-11-24'),
(0, '10TH', 'BIO-CHEMISTRY', 'HTTPS//meeting-9th-english.com', '2020-11-25'),
(0, '10TH', 'BIO-ZOOLOGY', 'https:googlemeet.liveclass.com', '2020-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `mark_records`
--

CREATE TABLE `mark_records` (
  `STUDENTID` int(255) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `COURSEOPTION` varchar(255) NOT NULL,
  `EARNMARK` int(255) NOT NULL,
  `TOTALMARK` int(255) NOT NULL,
  `SUBJECTS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mark_records`
--

INSERT INTO `mark_records` (`STUDENTID`, `NAME`, `COURSEOPTION`, `EARNMARK`, `TOTALMARK`, `SUBJECTS`) VALUES
(2, 'priya', '12th', 98, 100, 'ENGLISH'),
(2, 'priya', '12th', 98, 100, 'TAMIL'),
(2, 'priya', '12th', 76, 100, 'COMPUTERSCIENCE'),
(2, 'priya', '12th', 98, 100, '--Select Subject to upload Mark--');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('55892169bf6a7', 'usermod', '55892169d2efc'),
('55892169bf6a7', 'useradd', '55892169d2f05'),
('55892169bf6a7', 'useralter', '55892169d2f09'),
('55892169bf6a7', 'groupmod', '55892169d2f0c'),
('5589216a3646e', '751', '5589216a48713'),
('5589216a3646e', '752', '5589216a4871a'),
('5589216a3646e', '754', '5589216a4871f'),
('5589216a3646e', '755', '5589216a48722'),
('558922117fcef', 'echo', '5589221195248'),
('558922117fcef', 'print', '558922119525a'),
('558922117fcef', 'printf', '5589221195265'),
('558922117fcef', 'cout', '5589221195270'),
('55892211e44d5', 'int a', '55892211f1f97'),
('55892211e44d5', '$a', '55892211f1fa7'),
('55892211e44d5', 'long int a', '55892211f1fb4'),
('55892211e44d5', 'int a$', '55892211f1fbd'),
('558922894c453', 'cin>>a;', '558922895ea0a'),
('558922894c453', 'cin<<a;', '558922895ea26'),
('558922894c453', 'cout>>a;', '558922895ea34'),
('558922894c453', 'cout<a;', '558922895ea41'),
('558922899ccaa', 'cout', '55892289aa7cf'),
('558922899ccaa', 'cin', '55892289aa7df'),
('558922899ccaa', 'print', '55892289aa7eb'),
('558922899ccaa', 'printf', '55892289aa7f5'),
('558923538f48d', '255.0.0.0', '558923539a46c'),
('558923538f48d', '255.255.255.0', '558923539a480'),
('558923538f48d', '255.255.0.0', '558923539a48b'),
('558923538f48d', 'none of these', '558923539a495'),
('55892353f05c4', '192.168.1.100', '5589235405192'),
('55892353f05c4', '172.168.16.2', '55892354051a3'),
('55892353f05c4', '10.0.0.0.1', '55892354051b4'),
('55892353f05c4', '11.11.11.11', '55892354051be'),
('558973f4389ac', 'containing root file-system required during bootup', '558973f462e44'),
('558973f4389ac', ' Contains only scripts to be executed during bootup', '558973f462e56'),
('558973f4389ac', ' Contains root-file system and drivers required to be preloaded during bootup', '558973f462e61'),
('558973f4389ac', 'None of the above', '558973f462e6b'),
('558973f4c46f2', 'Kernel', '558973f4d4abe'),
('558973f4c46f2', 'Shell', '558973f4d4acf'),
('558973f4c46f2', 'Commands', '558973f4d4ad9'),
('558973f4c46f2', 'Script', '558973f4d4ae3'),
('558973f51600d', 'Boot Loading', '558973f526f9d'),
('558973f51600d', ' Boot Record', '558973f526fb9'),
('558973f51600d', ' Boot Strapping', '558973f526fc5'),
('558973f51600d', ' Booting', '558973f526fce'),
('558973f55d269', ' Quick boot', '558973f57aef1'),
('558973f55d269', 'Cold boot', '558973f57af07'),
('558973f55d269', ' Hot boot', '558973f57af17'),
('558973f55d269', ' Fast boot', '558973f57af27'),
('558973f5abb1a', 'bash', '558973f5e7623'),
('558973f5abb1a', ' Csh', '558973f5e7636'),
('558973f5abb1a', ' ksh', '558973f5e7640'),
('558973f5abb1a', ' sh', '558973f5e764a'),
('5589751a63091', 'q', '5589751a81bd6'),
('5589751a63091', 'wq', '5589751a81be8'),
('5589751a63091', ' both (a) and (b)', '5589751a81bf4'),
('5589751a63091', ' none of the mentioned', '5589751a81bfd'),
('5589751ad32b8', ' moves screen down one page', '5589751adbdbd'),
('5589751ad32b8', 'moves screen up one page', '5589751adbdce'),
('5589751ad32b8', 'moves screen up one line', '5589751adbdd8'),
('5589751ad32b8', ' moves screen down one line', '5589751adbde2'),
('5589751b304ef', ' yy', '5589751b3b04d'),
('5589751b304ef', 'yw', '5589751b3b05e'),
('5589751b304ef', 'yc', '5589751b3b069'),
('5589751b304ef', ' none of the mentioned', '5589751b3b073'),
('5589751b749c9', 'X', '5589751b9a98c'),
('5589751b749c9', 'x', '5589751b9a9a5'),
('5589751b749c9', 'D', '5589751b9a9b7'),
('5589751b749c9', 'd', '5589751b9a9c9'),
('5589751bd02ec', 'autoindentation is not possible in vi editor', '5589751bdadaa');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('558920ff906b8', '55892169bf6a7', 'what is command for changing user information??', 4, 1),
('558920ff906b8', '5589216a3646e', 'what is permission for view only for other??', 4, 2),
('558921841f1ec', '558922117fcef', 'what is command for print in php??', 4, 1),
('558921841f1ec', '55892211e44d5', 'which is a variable of php??', 4, 2),
('5589222f16b93', '558922894c453', 'what is correct statement in c++??', 4, 1),
('5589222f16b93', '558922899ccaa', 'which command is use for print the output in c++?', 4, 2),
('558922ec03021', '558923538f48d', 'what is correct mask for A class IP???', 4, 1),
('558922ec03021', '55892353f05c4', 'which is not a private IP??', 4, 2),
('55897338a6659', '558973f4389ac', 'On Linux, initrd is a file', 4, 1),
('55897338a6659', '558973f4c46f2', 'Which is loaded into memory when system is booted?', 4, 2),
('55897338a6659', '558973f51600d', ' The process of starting up a computer is known as', 4, 3),
('55897338a6659', '558973f55d269', ' Bootstrapping is also known as', 4, 4),
('55897338a6659', '558973f5abb1a', 'The shell used for Single user mode shell is:', 4, 5),
('5589741f9ed52', '5589751a63091', ' Which command is used to close the vi editor?', 4, 1),
('5589741f9ed52', '5589751ad32b8', ' In vi editor, the key combination CTRL+f', 4, 2),
('5589741f9ed52', '5589751b304ef', ' Which vi editor command copies the current line of the file?', 4, 3),
('5589741f9ed52', '5589751b749c9', ' Which command is used to delete the character before the cursor location in vi editor?', 4, 4),
('5589741f9ed52', '5589751bd02ec', ' Which one of the following statement is true?', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('558920ff906b8', 'Linux : File Managment', 2, 1, 2, 5, '', 'linux', '2015-06-23 09:03:59'),
('558921841f1ec', 'Php Coding', 2, 1, 2, 5, '', 'PHP', '2015-06-23 09:06:12'),
('5589222f16b93', 'C++ Coding', 2, 1, 2, 5, '', 'c++', '2015-06-23 09:09:03'),
('558922ec03021', 'Networking', 2, 1, 2, 5, '', 'networking', '2015-06-23 09:12:12'),
('55897338a6659', 'Linux:startup', 2, 1, 5, 10, '', 'linux', '2015-06-23 14:54:48'),
('5589741f9ed52', 'Linux :vi Editor', 2, 1, 5, 10, '', 'linux', '2015-06-23 14:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('sunnygkp10@gmail.com', 9, '2015-06-24 03:22:38'),
('avantika420@gmail.com', 8, '2015-06-23 14:49:39'),
('mi5@hollywood.com', 4, '2015-06-23 15:12:56'),
('nik1@gmail.com', 1, '2015-06-23 16:11:50');

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
(3, 'priyak', 'mani@gmail.com', '1234', 'Admin');

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
(0, '', '', 'present', '2020-11-23'),
(0, '', '', 'present', '2020-11-23'),
(0, '', '', 'present', '2020-11-23'),
(2, 'priya', '', 'present', '2020-11-23'),
(2, 'priya', '', 'present', '2020-11-23'),
(2, 'priya', '12th', 'present', '2020-11-23'),
(0, 'priya', '12th', 'present', '2020-11-23'),
(2, 'priya', '12th', 'present', '2020-11-23'),
(2, 'priya', '12th', 'absent', '2020-11-23'),
(2, 'priya', '12th', 'absent', '2020-11-24'),
(2, 'priya', '12th', 'absent', '2020-11-24'),
(2, 'priya', '12th', 'present', '2020-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('Avantika', 'F', 'KNIT sultanpur', 'avantika420@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('Mark Zukarburg', 'M', 'Stanford', 'ceo@facebook.com', 987654321, 'e10adc3949ba59abbe56e057f20f883e'),
('Komal', 'F', 'KNIT sultanpur', 'komalpd2011@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('Tom Cruze', 'M', 'Hollywood', 'mi5@hollywood.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('Netcamp', 'M', 'KNIT sultanpur', 'netcamp@gmail.com', 987654321, 'e10adc3949ba59abbe56e057f20f883e'),
('Nikunj', 'M', 'XYZ', 'nik1@gmail.com', 987, '202cb962ac59075b964b07152d234b70'),
('Sunny', 'M', 'KNIT sultanpur', 'sunnygkp10@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('User', 'M', 'cimt', 'user@user.com', 11, 'e10adc3949ba59abbe56e057f20f883e'),
('Vikash', 'M', 'KNIT sultanpur@gmail.com', 'vikash@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e');

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
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `coursemanagement`
--
ALTER TABLE `coursemanagement`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `fees_type`
--
ALTER TABLE `fees_type`
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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

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
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `coursemanagement`
--
ALTER TABLE `coursemanagement`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fees_type`
--
ALTER TABLE `fees_type`
  MODIFY `student_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
