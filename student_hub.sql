-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 03:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `acadyr`
--

CREATE TABLE `acadyr` (
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acadyr`
--

INSERT INTO `acadyr` (`year`) VALUES
(2020),
(2021),
(2022),
(2023);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointmentid` int(11) NOT NULL,
  `date` date NOT NULL,
  `studentid` int(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentid`, `date`, `studentid`, `office`, `reason`) VALUES
(15, '2022-12-30', 200005, 'Registrar', 'Submit Requirements'),
(16, '2023-01-04', 200005, 'Cashier', 'Make payment'),
(17, '2022-12-22', 200005, 'IT', 'Apply for ID'),
(30, '2022-12-30', 200001, 'IT', 'Apply for ID');

-- --------------------------------------------------------

--
-- Table structure for table `enrollees`
--

CREATE TABLE `enrollees` (
  `enrollmentid` int(11) NOT NULL,
  `subjectid` varchar(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `acadyr` year(4) NOT NULL,
  `term` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollees`
--

INSERT INTO `enrollees` (`enrollmentid`, `subjectid`, `studentid`, `acadyr`, `term`, `day`, `time`) VALUES
(1, 'CS 311', 200001, 2022, '1st', 'T', '4:00PM-5:30PM'),
(2, 'CS 312', 200001, 2022, '1st', 'T', '2:30PM-4:00PM'),
(3, 'CS 313', 200001, 2022, '1st', 'T', '1:00PM-2:30PM'),
(4, 'CS 314', 200001, 2022, '1st', 'M', '9:30AM-11:00AM'),
(5, 'CS 315', 200001, 2022, '1st', 'M', '1:00PM-2:30PM'),
(6, 'CS 316', 200001, 2022, '1st', 'M', '8:00AM-9:30AM'),
(7, 'CS 311', 200004, 2022, '1st', 'T', '4:00PM-5:30PM'),
(8, 'CS 312', 200004, 2022, '1st', 'T', '2:30PM-4:00PM'),
(9, 'CS 313', 200004, 2022, '1st', 'T', '1:00PM-2:30PM'),
(10, 'CS 314', 200004, 2022, '1st', 'M', '9:30AM-11:00AM'),
(11, 'CS 315', 200004, 2022, '1st', 'M', '1:00PM-2:30PM'),
(12, 'CS 316', 200004, 2022, '1st', 'M', '8:00AM-9:30AM'),
(13, 'Rizal', 200004, 2022, '1st', 'M', '2:30PM-4:00PM'),
(14, 'CS 311', 200005, 2022, '1st', 'T', '4:00PM-5:30PM'),
(15, 'CS 312', 200005, 2022, '1st', 'T', '2:30PM-4:00PM'),
(16, 'CS 313', 200005, 2022, '1st', 'T', '1:00PM-2:30PM'),
(17, 'CS 314', 200005, 2022, '1st', 'M', '9:30AM-11:00AM'),
(18, 'CS 315', 200005, 2022, '1st', 'M', '1:00PM-2:30PM'),
(19, 'CS 316', 200005, 2022, '1st', 'M', '8:00AM-9:30AM'),
(20, 'Rizal', 200005, 2022, '1st', 'M', '2:30PM-4:00PM');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `gradeid` int(255) NOT NULL,
  `studentid` int(255) NOT NULL,
  `subjectid` varchar(255) NOT NULL,
  `acadyr` year(4) NOT NULL,
  `term` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`gradeid`, `studentid`, `subjectid`, `acadyr`, `term`, `grade`) VALUES
(1, 200001, 'CS111', 2020, '1st', '1.2'),
(2, 200001, 'GE-PC', 2020, '1st', '1.2'),
(3, 200001, 'CS112', 2020, '1st', '1.6'),
(4, 200001, 'GE-MMW', 2020, '1st', '1.8'),
(5, 200001, 'IT 1', 2020, '1st', '1.9'),
(6, 200001, 'GE-US', 2020, '1st', '3.0'),
(7, 200001, 'Math 1', 2020, '1st', '1.9'),
(8, 200001, 'GE STS', 2020, '2nd', 'INC'),
(9, 200001, 'GE-E', 2020, '2nd', '1.5'),
(10, 200001, 'CS 122', 2020, '2nd', '1.7'),
(11, 200001, 'GE BC', 2020, '2nd', '1.7'),
(12, 200001, 'CS 121', 2020, '2nd', '2.2'),
(13, 200001, 'GE-CW', 2020, '2nd', '2.2'),
(14, 200001, 'CS 123', 2020, '2nd', '2.4'),
(15, 200001, 'CS 211', 2021, '1st', '1.3'),
(16, 200001, 'CS 213', 2021, '1st', '1.6'),
(17, 200001, 'CS 212', 2021, '1st', '1.8'),
(18, 200001, 'GE-AA', 2021, '1st', '1.8'),
(19, 200001, 'Rizal', 2021, '1st', '1.9'),
(20, 200001, 'CS 214', 2021, '1st', '2.3'),
(21, 200001, 'Entrep 1', 2021, '1st', '2.7'),
(22, 200001, 'CS 221', 2021, '2nd', '1.0'),
(23, 200001, 'CS 222', 2021, '2nd', '1.6'),
(24, 200001, 'CS 223', 2021, '2nd', '1.1'),
(25, 200001, 'Ecos 1', 2021, '2nd', '2.2'),
(26, 200001, 'GE-RPH', 2021, '2nd', '2.5'),
(27, 200001, 'Math-Elec', 2021, '2nd', '1.0'),
(28, 200001, 'NSTP 2', 2021, '2nd', '1.5');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `office` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`office`) VALUES
('Cashier'),
('IT'),
('Library'),
('Registrar');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentid` int(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `yrlevel` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `firstName`, `lastName`, `yrlevel`, `phone`, `address`, `email`) VALUES
(200001, 'Virgilio', 'Sio', '3', '09098198408', 'San Miguel SDS', 'vs@gmail.com'),
(200002, 'Jonh', 'Smith', '3', '095124584562', 'Tandag City', ''),
(200003, 'Jon', 'Snow', '3', '09586545214', 'Tago SDS', ''),
(200004, 'Jannah Dee', 'Silagan', '3', '09154568455', 'Tandag City', 'js@gmail.com'),
(200005, 'Maryjoy', 'Berdera', '3', '09202325486', 'Tandag City', 'mb@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectid` varchar(255) NOT NULL,
  `subDescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectid`, `subDescription`) VALUES
('CS 121', 'Discrete Structures 1'),
('CS 122', 'Intermediate Programming - Java Prog.'),
('CS 123', 'Multimedia Systems'),
('CS 211', 'Discrete Structures 2'),
('CS 212', 'Object-Oriented Programming'),
('CS 213', 'Data Structures and Algorithms'),
('CS 214', 'Embedded Systems'),
('CS 221', 'Algorithms and Complexities'),
('CS 222', 'Information Management'),
('CS 223', 'Web Systems and Technologies 1'),
('CS 311', 'Automata Theory and Formal Languages'),
('CS 312', 'Architecture and Organization'),
('CS 313', 'Information Assurance and Security'),
('CS 314', 'System Fundamentals - Elective 1'),
('CS 315', 'Application Dev\'t and Emerging Technologies'),
('CS 316', 'Web Systems and Technology 2'),
('CS 321', 'Programming Languages'),
('CS 322', 'Software Engineering 1'),
('CS 323', 'Social Issues and Professional Practice 1'),
('CS 324', 'Graphics and Visual Computing - Elective 2'),
('CS 325', 'Mobile Computing 1'),
('CS 326', 'Modeling and Simulation'),
('CS 331', 'Practicum'),
('CS 411', 'Human Computer Interaction'),
('CS 412', 'Operating Systems'),
('CS 413', 'Software Engineering 2'),
('CS 414', 'CS Thesis Writing 1'),
('CS 415', 'Intelligent Systems - Elective 3'),
('CS 416', 'Mobile Computing 2'),
('CS 421', 'Networks and Communications'),
('CS 422', 'CS Thesis Writing 2'),
('CS111', 'Introduction to Computing'),
('CS112', 'Fundamentals of Programming - C++'),
('Ecos 1', 'People and the Earth\'s Ecosystem'),
('Entrep 1', 'The Entrepreneurial Mind'),
('GE BC', 'Business Correspondence'),
('GE STS', 'Science, Technology and Society'),
('GE-AA', 'Art Appreciation'),
('GE-CW', 'The Contemporary World'),
('GE-E', 'Ethics'),
('GE-MMW', 'Mathematics in the Modern World'),
('GE-PC', 'Purposive Communication'),
('GE-RPH', 'Readings in Philippine History'),
('GE-US', 'Understanding the Self'),
('IT 1', 'Living in the IT Era'),
('Math 1', 'Basic Mathematics'),
('Math-Elec', 'Theory of Computation'),
('NSTP 1', 'National Service Training Program 1'),
('NSTP 2', 'National Service Training Program 2'),
('PE 1', 'Self Testing Activities'),
('PE 2', 'Rhythmic Activities'),
('PE-3', 'Individual and Dual Sports'),
('PE-4', 'Recreational Activities'),
('Rizal', 'Life and Works of Rizal');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `term` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`term`) VALUES
('1st'),
('2nd'),
('summer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `studentid` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `studentid`, `password`) VALUES
('janna', 200004, '123456'),
('maryjoy', 200005, 'mb123'),
('papin', 200001, 'sio123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acadyr`
--
ALTER TABLE `acadyr`
  ADD PRIMARY KEY (`year`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointmentid`),
  ADD KEY `studentid` (`studentid`),
  ADD KEY `date` (`date`),
  ADD KEY `office` (`office`);

--
-- Indexes for table `enrollees`
--
ALTER TABLE `enrollees`
  ADD PRIMARY KEY (`enrollmentid`),
  ADD KEY `studentid` (`studentid`),
  ADD KEY `subjectid` (`subjectid`),
  ADD KEY `term` (`term`),
  ADD KEY `acadyr` (`acadyr`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`gradeid`),
  ADD KEY `studentid` (`studentid`),
  ADD KEY `subjectid` (`subjectid`),
  ADD KEY `term` (`term`),
  ADD KEY `acadyr` (`acadyr`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`office`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`term`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD KEY `studentid` (`studentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `enrollees`
--
ALTER TABLE `enrollees`
  MODIFY `enrollmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `gradeid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200006;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`studentid`) REFERENCES `student` (`studentid`),
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`office`) REFERENCES `office` (`office`);

--
-- Constraints for table `enrollees`
--
ALTER TABLE `enrollees`
  ADD CONSTRAINT `enrollees_ibfk_1` FOREIGN KEY (`studentid`) REFERENCES `student` (`studentid`),
  ADD CONSTRAINT `enrollees_ibfk_2` FOREIGN KEY (`subjectid`) REFERENCES `subject` (`subjectid`),
  ADD CONSTRAINT `enrollees_ibfk_3` FOREIGN KEY (`term`) REFERENCES `term` (`term`),
  ADD CONSTRAINT `enrollees_ibfk_4` FOREIGN KEY (`acadyr`) REFERENCES `acadyr` (`year`);

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`studentid`) REFERENCES `student` (`studentid`),
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`subjectid`) REFERENCES `subject` (`subjectid`),
  ADD CONSTRAINT `grades_ibfk_3` FOREIGN KEY (`term`) REFERENCES `term` (`term`),
  ADD CONSTRAINT `grades_ibfk_4` FOREIGN KEY (`acadyr`) REFERENCES `acadyr` (`year`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`studentid`) REFERENCES `student` (`studentid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
