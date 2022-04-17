-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 12:45 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Username` varchar(11) NOT NULL,
  `Password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(50) NOT NULL,
  `enroll` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `month` varchar(50) NOT NULL,
  `total` int(50) NOT NULL,
  `attendence` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `enroll`, `name`, `course`, `batch`, `subject`, `month`, `total`, `attendence`) VALUES
(8, '112018', 'Sahil', 'BCA', '2018-21', 'abc ', 'November', 20, 17),
(9, '292017', 'Taniya', 'MCA', '2017-20', 'Multimedia', 'March', 20, 11),
(10, '292017', 'Taniya', 'MCA', '2017-20', 'Data_Mining', 'March', 20, 17),
(11, '292017', 'Taniya', 'MCA', '2017-20', 'Mobile_Computing', 'March', 20, 20),
(12, '122016', 'Vani Singh', 'BCA', '2017-20', 'Linux ', 'April', 20, 10),
(13, '292017', 'Taniya', 'MCA', '2017-20', 'Linux ', 'March', 20, 19),
(14, '352017', 'Natasha  Roy', 'BCA', '2017-20', 'Linux ', 'April', 20, 14);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `paper` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course`, `sem`, `paper`) VALUES
(2, 'MCA', '2', 'Mathematics-II'),
(3, 'MCA', '2', 'Data Analytics'),
(4, 'MCA', '2', 'Digital_Electronics'),
(5, 'MCA', '2', 'Technical_Communication'),
(6, 'MCA', '2', 'C_Language'),
(7, 'MCA', '4', 'Mathematics-IV'),
(8, 'MCA', '4', 'Web_Tech'),
(9, 'MCA', '4', 'Java'),
(10, 'MCA', '4', 'Software_Engineering'),
(11, 'MCA', '6', 'Linux '),
(12, 'MCA', '6', 'Multimedia '),
(13, 'MCA', '6', 'Data_mining '),
(14, 'MCA', '6', 'Mobile_Computing '),
(15, 'MCA', '6', 'Linux_Lab ');

-- --------------------------------------------------------

--
-- Table structure for table `datesheet`
--

CREATE TABLE `datesheet` (
  `Id` int(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datesheet`
--

INSERT INTO `datesheet` (`Id`, `course`, `topic`, `file`, `type`, `loc`) VALUES
(2, 'BCA', 'Internal Exam', 'bca-6th-sem-seminar-and-project.pdf', 'application/pdf', 'uploads/datesheet/bca-6th-sem-seminar-and-project.');

-- --------------------------------------------------------

--
-- Table structure for table `facassignments`
--

CREATE TABLE `facassignments` (
  `id` int(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facassignments`
--

INSERT INTO `facassignments` (`id`, `course`, `batch`, `faculty`, `subject`, `topic`, `file`, `type`, `loc`) VALUES
(4, 'MCA', '2017-20', 'Ananya', 'Data_Mining', 'Computing', 'cover.pdf', 'application/pdf', 'uploads/assignments/cover.pdf'),
(5, 'MCA', '2017-20', 'Nitin', 'Multimedia', 'POM ', 'cover.pdf', 'application/pdf', 'uploads/assignments/cover.pdf'),
(6, 'MCA', '2017-20', 'Sneha', 'Linux', 'Linux', 'olap-dw.pdf', 'application/pdf', 'uploads/assignments/olap-dw.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `qual` varchar(25) NOT NULL,
  `Post` text NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `ph` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `gender`, `qual`, `Post`, `dob`, `email`, `ph`, `Address`) VALUES
('112016', 'Sia', 'Female', 'MBA', 'Professor', '1994-05-10', 'sia@gmail.com', '9875641231', 'B-5/80 Vikaspuri New Delhi'),
('112017', 'Nitin', 'M', 'B.Comm', 'Associate_Professor', '1992-04-03', 'nitin@gmail.com', '8822654128', 'A-54 Dwarka Sec -9 New Delhi'),
('115', 'Rahul', 'Male', 'M.Tech', 'Professor', '1995-06-02', 'rahul@gmail.com', '9873655423', 'C-90 Janak Puri New Delhi'),
('1252', 'Ananya', 'F', 'MCA', 'Assistant_Professor', '1995-02-22', 'ananya@gmail.com', '9866574772', 'B-65 Paschim VIhar New Delhi'),
('152019', 'Sneha', 'F', 'M.Tech', 'HOD', '1995-11-17', 'sneha@gmail.com', '9968853034', '113, Block M, Hari Nagar, New Delhi ');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(50) NOT NULL,
  `enroll` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `enroll`, `name`, `batch`, `course`, `year`, `file`, `type`, `loc`) VALUES
(2, '292017', 'Taniya Sharma', '2017-20', 'MCA', '1st', 'cover.pdf', 'application/pdf', 'uploads/fees/cover.pdf'),
(3, '112018', 'Sahil Khurana', '2016-19', 'BCA', '2', 'cover.pdf', 'application/pdf', 'uploads/fees/cover.pdf'),
(4, '292017', 'Taniya', '2020-22', 'MCA', '2nd', 'final-synopsis.pdf', 'application/pdf', 'uploads/fees/final-synopsis.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(50) NOT NULL,
  `enroll` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `exam` varchar(50) NOT NULL,
  `total` int(50) NOT NULL,
  `marks` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `enroll`, `name`, `course`, `batch`, `subject`, `exam`, `total`, `marks`) VALUES
(12, '292017', 'Taniya', 'BCA', '2017-20', 'Multimedia', 'Internal', 25, 25),
(13, '292017', 'Taniya', 'BCA', '2017-20', 'Data_Mining', 'Internal', 25, 24),
(14, '122016', 'Vani Singh', 'BCA', '2017-20', 'Linux ', 'Internal', 25, 17),
(15, '292017', 'Taniya', 'BCA', '2017-20', 'Linux ', 'Internal', 25, 25);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `course`, `batch`, `faculty`, `subject`, `topic`, `file`, `type`, `loc`) VALUES
(4, 'BCA', '2017-20', 'Sneha', 'Linux', 'UNIT 1', 'unit1.pdf', 'application/pdf', 'uploads/notes/unit1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `Id` int(50) NOT NULL,
  `topic` varchar(300) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `loc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`Id`, `topic`, `file`, `type`, `loc`) VALUES
(8, 'Cultural Event', 'accepted.pdf', 'application/pdf', 'uploads/notices/accepted.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `stuassignments`
--

CREATE TABLE `stuassignments` (
  `id` int(50) NOT NULL,
  `no` int(50) NOT NULL,
  `enroll` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuassignments`
--

INSERT INTO `stuassignments` (`id`, `no`, `enroll`, `name`, `faculty`, `subject`, `file`, `type`, `loc`) VALUES
(9, 5, '112256', 'Taniya Sharma', 'admin', 'abc', 'cover.pdf', 'application/pdf', 'uploads/assignments/cover.pdf'),
(10, 6, '292017', 'Taniya', 'Sneha', 'Linux', 'final-synopsis.pdf', 'application/pdf', 'uploads/assignments/final-synopsis.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `enroll` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `father` varchar(50) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `ph` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`enroll`, `name`, `father`, `mother`, `gender`, `Course`, `batch`, `dob`, `email`, `ph`, `Address`) VALUES
('112018', 'Sahil', 'Pardeep Khurana', 'Anita Khurana', 'M', 'BCA', '2016-19', '1998-02-02', 'sahil@gmail.com', '9876543201 ', 'B-3/90 Paschim vihar New Delhi'),
('122016', 'Vani', 'Mukesh Singh', 'Meena Singh', 'F', 'BCA', '2017-20', '1999-06-04', 'Vani@gmail.com', '9876543210 ', 'G-9 Vikaspuri New Delhi'),
('212015', 'Shikha', 'Gopal Sharma', 'Anju Sharma', 'Female', 'BCA', '2018-21', '1998-02-11', 'shikha@gmail.com', '9877653241 ', 'M-45 Rajouri Garden New Delhi '),
('292017', 'Taniya', 'Rakesh Sharma', 'Reema Sharma ', 'F', 'MCA', '2020-22', '1999-06-03', 'tani@gmail.com', '9013920843 ', 'M 113 Hari Nagar New Delhi'),
('352017', 'Natasha', 'Yuvraj Roy', 'Twinkle Roy', 'Female', 'BCA', '2017-20', '1999-11-11', 'natasha17@gmail.com', '8855332246 ', 'C-3 Janak Puri New Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `loc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`id`, `course`, `file`, `type`, `loc`) VALUES
(10, 'ITESM ', 'cover.pdf', 'application/pdf', 'uploads/syllabus/cover.pdf'),
(12, 'BCA', 'syllbca191011.pdf', 'application/pdf', 'uploads/syllabus/syllbca191011.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `Id` int(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`Id`, `Course`, `batch`, `day`, `time`, `subject`, `faculty`) VALUES
(1, 'MCA', '2017-20', 'Monday ', '8:30-9:30', 'Multimedia ', 'Ananya'),
(5, 'MCA', '2017-20', 'Monday', '9:30-10:30', 'Linux', 'Sneha'),
(6, 'MCA', '2017-20', 'Monday', '10:30-11:30', 'Mobile_Computing', 'Nitin'),
(7, 'MCA', '2017-20', 'Monday ', '12:00-1:00', 'Data_mining', 'Rahul'),
(8, 'MCA', '2017-20', 'Monday ', '1:00-2:00', 'Linux_Lab', 'Sneha'),
(9, 'MCA', '2017-20', 'Tuesday ', '8:30-9:30', 'Multimedia', 'Ananya'),
(10, 'MCA', '2019-22', 'Tuesday', '9:30-10:30', 'Mobile_Computing', 'Nitin'),
(11, 'MCA', '2017-20', 'Tuesday ', '10:30-11:30', 'Data_mining', 'Rahul'),
(14, 'MCA', '2017-20', 'Tuesday ', '1:00-2:00', 'Linux ', 'Sneha'),
(15, 'MCA', '2017-20', 'Wednesday ', '8:30-9:30', 'Mobile_Computing', 'Nitin'),
(17, 'MCA', '2017-20', 'Wednesday ', '10:30-11:30', 'Multimedia ', 'Ananya'),
(18, 'MCA', '2017-20', 'Wednesday ', '12:00-1:00', 'Linux ', 'Sneha'),
(19, 'MCA', '2017-20', 'Wednesday ', '2:00-3:00', 'Data_Mining', 'Rahul'),
(20, 'MCA', '2017-20', 'Thursday ', '9:30-10:30', 'Data_Mining', 'Rahul'),
(21, 'MCA', '2017-20', 'Thursday ', '10:30-11:30', 'Multimedia ', 'Ananya'),
(22, 'MCA', '2017-20', 'Friday ', '10:30-11:30', 'Linux ', 'Sneha'),
(23, 'MCA', '2017-20', 'Friday ', '12:00-1:00', 'Data_mining ', 'Rahul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datesheet`
--
ALTER TABLE `datesheet`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `facassignments`
--
ALTER TABLE `facassignments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `stuassignments`
--
ALTER TABLE `stuassignments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `no` (`no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`enroll`),
  ADD UNIQUE KEY `enroll` (`enroll`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `datesheet`
--
ALTER TABLE `datesheet`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facassignments`
--
ALTER TABLE `facassignments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stuassignments`
--
ALTER TABLE `stuassignments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
