-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 01, 2021 at 02:36 PM
-- Server version: 10.0.38-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'test@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `year_of_study` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_title`, `course_code`, `department`, `year_of_study`, `semester`) VALUES
(11, 'New media', 'INS313', 'Publishing, journalism and communication studies', '4', '1'),
(12, 'Human Computer Interactions', 'INS324', 'Publishing, journalism and communication studies', '4', '1'),
(16, 'PHP DESKTOP APPLICATION MAKER ERROR', 'CIM456', 'Publishing, journalism and communication studies', '4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `course_feedback`
--

CREATE TABLE `course_feedback` (
  `id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `lecturer` varchar(255) NOT NULL,
  `adm_no` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_feedback`
--

INSERT INTO `course_feedback` (`id`, `course`, `lecturer`, `adm_no`, `question`, `score`) VALUES
(59, 'INS313', 'MU/LEC/1037', 'IS/90/16', 'Completion of the syllabus:', 5),
(60, 'INS313', 'MU/LEC/1037', 'IS/90/16', 'Assessment of homework and other continous assessment techniques during the course:', 4),
(61, 'INS313', 'MU/LEC/1037', 'IS/90/16', 'Distribution of the course materials:', 3),
(62, 'INS313', 'MU/LEC/1037', 'IS/90/16', 'Availability of reading materials/equipment in this course:', 4),
(67, 'INS313', 'MU/LEC/1037', 'IS/49/17', 'Completion of the syllabus:', 5),
(68, 'INS313', 'MU/LEC/1037', 'IS/49/17', 'Assessment of homework and other continous assessment techniques during the course:', 4),
(69, 'INS313', 'MU/LEC/1037', 'IS/49/17', 'Distribution of the course materials:', 4),
(70, 'INS313', 'MU/LEC/1037', 'IS/49/17', 'Availability of reading materials/equipment in this course:', 4),
(71, 'INS313', 'MU/LEC/1037', 'IS/34/17', 'Completion of the syllabus:', 5),
(72, 'INS313', 'MU/LEC/1037', 'IS/34/17', 'Assessment of homework and other continous assessment techniques during the course:', 4),
(73, 'INS313', 'MU/LEC/1037', 'IS/34/17', 'Distribution of the course materials:', 3),
(74, 'INS313', 'MU/LEC/1037', 'IS/34/17', 'Availability of reading materials/equipment in this course:', 2),
(75, 'INS313', 'MU/LEC/1037', 'IS/34/17', 'How appropriate was the amount of work required for the credit earned? ', 5),
(76, 'INS313', 'MU/LEC/1037', 'IS/34/17', 'Overall, how would you rate the course?', 5),
(77, 'CIM456', 'MU/LEC/1023', 'IS/34/17', 'Completion of the syllabus:', 4),
(78, 'CIM456', 'MU/LEC/1023', 'IS/34/17', 'Assessment of homework and other continous assessment techniques during the course:', 4),
(79, 'CIM456', 'MU/LEC/1023', 'IS/34/17', 'Distribution of the course materials:', 5),
(80, 'CIM456', 'MU/LEC/1023', 'IS/34/17', 'Availability of reading materials/equipment in this course:', 4),
(81, 'CIM456', 'MU/LEC/1023', 'IS/34/17', 'How appropriate was the amount of work required for the credit earned? ', 4),
(82, 'CIM456', 'MU/LEC/1023', 'IS/34/17', 'Overall, how would you rate the course?', 2),
(83, 'INS324', 'MU/LEC/1023', 'IS/90/16', 'Completion of the syllabus:', 4),
(84, 'INS324', 'MU/LEC/1023', 'IS/90/16', 'Assessment of homework and other continous assessment techniques during the course:', 4),
(85, 'INS324', 'MU/LEC/1023', 'IS/90/16', 'Distribution of the course materials:', 4),
(86, 'INS324', 'MU/LEC/1023', 'IS/90/16', 'Availability of reading materials/equipment in this course:', 3),
(87, 'INS324', 'MU/LEC/1023', 'IS/90/16', 'How appropriate was the amount of work required for the credit earned? ', 3),
(88, 'INS324', 'MU/LEC/1023', 'IS/90/16', 'Overall, how would you rate the course?', 3);

-- --------------------------------------------------------

--
-- Table structure for table `course_questions`
--

CREATE TABLE `course_questions` (
  `id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `excellent` int(11) NOT NULL DEFAULT '5',
  `good` int(11) NOT NULL DEFAULT '4',
  `fair` int(11) NOT NULL DEFAULT '3',
  `poor` int(11) NOT NULL DEFAULT '2',
  `very_poor` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_questions`
--

INSERT INTO `course_questions` (`id`, `question`, `excellent`, `good`, `fair`, `poor`, `very_poor`) VALUES
(9, 'Completion of the syllabus:', 5, 4, 3, 2, 1),
(10, 'Assessment of homework and other continous assessment techniques during the course:', 5, 4, 3, 2, 1),
(12, 'Distribution of the course materials:', 5, 4, 3, 2, 1),
(13, 'Availability of reading materials/equipment in this course:', 5, 4, 3, 2, 1),
(14, 'How appropriate was the amount of work required for the credit earned? ', 5, 4, 3, 2, 1),
(16, 'Overall, how would you rate the course?', 5, 4, 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `hod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`, `hod`) VALUES
(2, 'Publishing, journalism and communication studies', 'Dr.Nyabushawo'),
(5, 'Information technology', 'Dr Ochieng'),
(6, 'Library, Records and Archives Mangement', 'Dr Masseh');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `lecturer` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `adm_no` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `lecturer`, `course`, `adm_no`, `question`, `score`) VALUES
(171, 'MU/LEC/1037', 'INS324', '1234', 'The Instructor preperation for the class was:', 3),
(172, 'MU/LEC/1037', 'INS324', '1234', 'The Instructor punctuality to class:', 4),
(173, 'MU/LEC/1037', 'INS324', '1234', 'The instructor ability to explain the materials:', 3),
(174, 'MU/LEC/1037', 'INS324', '1234', 'The instructor grading on CATs:', 4),
(175, 'MU/LEC/1037', 'INS324', '1234', 'How did the instructor stimulate your thinking?', 5),
(176, 'MU/LEC/1037', 'INS324', '1234', 'How interesting were the lecturer presentation?', 4),
(177, 'MU/LEC/1037', 'INS324', '1234', 'Overall, how would you rate the insructor:', 4),
(178, 'MU/LEC/1037', 'INS313', 'IS/49/17', 'The Instructor preperation for the class was:', 5),
(179, 'MU/LEC/1037', 'INS313', 'IS/49/17', 'The Instructor punctuality to class:', 4),
(180, 'MU/LEC/1037', 'INS313', 'IS/49/17', 'The instructor ability to explain the materials:', 3),
(181, 'MU/LEC/1037', 'INS313', 'IS/49/17', 'The instructor grading on CATs:', 4),
(182, 'MU/LEC/1037', 'INS313', 'IS/49/17', 'How did the instructor stimulate your thinking?', 4),
(183, 'MU/LEC/1037', 'INS313', 'IS/49/17', 'How interesting were the lecturer presentation?', 3),
(184, 'MU/LEC/1037', 'INS313', 'IS/49/17', 'Overall, how would you rate the insructor:', 4),
(185, 'MU/LEC/1037', 'INS313', 'IS/34/17', 'The Instructor preperation for the class was:', 4),
(186, 'MU/LEC/1037', 'INS313', 'IS/34/17', 'The Instructor punctuality to class:', 5),
(187, 'MU/LEC/1037', 'INS313', 'IS/34/17', 'The instructor ability to explain the materials:', 2),
(188, 'MU/LEC/1037', 'INS313', 'IS/34/17', 'The instructor grading on CATs:', 3),
(189, 'MU/LEC/1037', 'INS313', 'IS/34/17', 'How did the instructor stimulate your thinking?', 3),
(190, 'MU/LEC/1037', 'INS313', 'IS/34/17', 'How interesting were the lecturer presentation?', 3),
(191, 'MU/LEC/1037', 'INS313', 'IS/34/17', 'Overall, how would you rate the insructor:', 2),
(192, 'MU/LEC/1023', 'CIM456', 'IS/34/17', 'The Instructor preperation for the class was:', 4),
(193, 'MU/LEC/1023', 'CIM456', 'IS/34/17', 'The Instructor punctuality to class:', 5),
(194, 'MU/LEC/1023', 'CIM456', 'IS/34/17', 'The instructor ability to explain the materials:', 4),
(195, 'MU/LEC/1023', 'CIM456', 'IS/34/17', 'The instructor grading on CATs:', 3),
(196, 'MU/LEC/1023', 'CIM456', 'IS/34/17', 'How did the instructor stimulate your thinking?', 4),
(197, 'MU/LEC/1023', 'CIM456', 'IS/34/17', 'How interesting were the lecturer presentation?', 2),
(198, 'MU/LEC/1023', 'CIM456', 'IS/34/17', 'Overall, how would you rate the insructor:', 2),
(199, 'MU/LEC/1023', 'INS324', 'IS/90/16', 'The Instructor preperation for the class was:', 4),
(200, 'MU/LEC/1023', 'INS324', 'IS/90/16', 'The Instructor punctuality to class:', 5),
(201, 'MU/LEC/1023', 'INS324', 'IS/90/16', 'The instructor ability to explain the materials:', 4),
(202, 'MU/LEC/1023', 'INS324', 'IS/90/16', 'The instructor grading on CATs:', 4),
(203, 'MU/LEC/1023', 'INS324', 'IS/90/16', 'How did the instructor stimulate your thinking?', 3),
(204, 'MU/LEC/1023', 'INS324', 'IS/90/16', 'How interesting were the lecturer presentation?', 4),
(205, 'MU/LEC/1023', 'INS324', 'IS/90/16', 'Overall, how would you rate the insructor:', 3);

-- --------------------------------------------------------

--
-- Table structure for table `instructors_questions`
--

CREATE TABLE `instructors_questions` (
  `id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `excellent` int(11) NOT NULL DEFAULT '5',
  `good` int(11) NOT NULL DEFAULT '4',
  `fair` int(11) NOT NULL DEFAULT '3',
  `poor` int(11) NOT NULL DEFAULT '2',
  `very_poor` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructors_questions`
--

INSERT INTO `instructors_questions` (`id`, `question`, `excellent`, `good`, `fair`, `poor`, `very_poor`) VALUES
(1, 'The Instructor preperation for the class was:', 5, 4, 3, 2, 1),
(2, 'The Instructor punctuality to class:', 5, 4, 3, 2, 1),
(3, 'The instructor ability to explain the materials:', 5, 4, 3, 2, 1),
(4, 'The instructor grading on CATs:', 5, 4, 3, 2, 1),
(5, 'How did the instructor stimulate your thinking?', 5, 4, 3, 2, 1),
(6, 'How interesting were the lecturer presentation?', 5, 4, 3, 2, 1),
(7, 'Overall, how would you rate the insructor:', 5, 4, 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `unique_no` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`id`, `name`, `email`, `unique_no`, `department`) VALUES
(5, 'Metto', 'metto@gmail.com', 'MU/LEC/1037', ' Publishing, journalism and communication studies'),
(6, 'Ms Ken Museti', '', 'MU/LEC/1023', ''),
(7, 'Mr James Kiguru', '', 'MU/LEC/1024', ''),
(8, 'Mr Alex Odour', '', 'MU/LEC/1025', ''),
(9, 'Ms James Karimi', '', 'MU/LEC/1026', ''),
(10, 'Mr Daniel Kipsang', '', 'MU/LEC/1027', ''),
(11, 'Shadrack Metto ', '', 'MU/LEC/1029', ''),
(12, 'Madam Anne', '', 'MU/LEC/1028', '');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_course`
--

CREATE TABLE `lecturer_course` (
  `id` int(11) NOT NULL,
  `lecturer` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer_course`
--

INSERT INTO `lecturer_course` (`id`, `lecturer`, `course_code`, `name`, `year`, `semester`) VALUES
(14, 'MU/LEC/1037', 'INS313', '', '4', '1'),
(15, 'MU/LEC/1023', 'INS324', '', '4', '1'),
(16, 'MU/LEC/1024', 'CIM456', '', '4', '1'),
(17, 'MU/LEC/1037', 'INS324', '', '4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_course3`
--

CREATE TABLE `lecturer_course3` (
  `id` int(11) NOT NULL,
  `lecturer` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer_course3`
--

INSERT INTO `lecturer_course3` (`id`, `lecturer`, `course_code`, `year`, `semester`) VALUES
(43, 'MU/LEC/1023', 'INS324', '3', '1'),
(46, 'MU/LEC/1037', 'INS324', '3', '1'),
(49, 'MU/LEC/1026', 'INS313', '4', '1'),
(50, 'MU/LEC/1026', 'INS324', '3', '1'),
(51, 'MU/LEC/1029', 'CIM456', '4', '2');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `adjective` varchar(255) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `adjective`, `score`) VALUES
(1, 'Excellent', 5),
(2, 'Good', 4),
(3, 'Fair', 3),
(4, 'Poor', 2),
(5, 'Very poor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students_selected_courses`
--

CREATE TABLE `students_selected_courses` (
  `id` int(11) NOT NULL,
  `adm_no` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `lecturer_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_selected_courses`
--

INSERT INTO `students_selected_courses` (`id`, `adm_no`, `course_code`, `lecturer_name`) VALUES
(97, 'IS/90/16', 'INS313', 'MU/LEC/1037'),
(98, 'IS/90/16', 'INS324', 'MU/LEC/1023'),
(99, '1234', 'INS324', 'MU/LEC/1037'),
(100, 'LMC/05/18', 'INS313', 'MU/LEC/1037'),
(101, 'IS/49/17', 'INS313', 'MU/LEC/1037'),
(102, 'IS/34/17', 'INS313', 'MU/LEC/1037'),
(103, 'IS/34/17', 'CIM456', 'MU/LEC/1023'),
(104, 'ED/632/16', 'INS313', 'MU/LEC/1037'),
(105, 'ED/632/16', 'INS324', 'MU/LEC/1023');

-- --------------------------------------------------------

--
-- Table structure for table `university_feedback`
--

CREATE TABLE `university_feedback` (
  `id` int(11) NOT NULL,
  `adm_no` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `university_questions`
--

CREATE TABLE `university_questions` (
  `id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `excellent` int(11) NOT NULL DEFAULT '5',
  `good` int(11) NOT NULL DEFAULT '4',
  `fair` int(11) NOT NULL DEFAULT '3',
  `poor` int(11) NOT NULL DEFAULT '2',
  `very_poor` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `university_questions`
--

INSERT INTO `university_questions` (`id`, `question`, `excellent`, `good`, `fair`, `poor`, `very_poor`) VALUES
(1, 'The Instructor preperation for the class was:', 5, 4, 3, 2, 1),
(2, 'The Instructor punctuality to class:', 5, 4, 3, 2, 1),
(3, 'The instructor ability to explain the materials:', 5, 4, 3, 2, 1),
(4, 'The instructor grading on CATs:', 5, 4, 3, 2, 1),
(5, 'How did the instructor stimulate your thinking?', 5, 4, 3, 2, 1),
(6, 'How interesting were the lecturer presentation?', 5, 4, 3, 2, 1),
(7, 'Overall, how would you rate the insructor:', 5, 4, 3, 2, 1),
(8, 'Staff coperation', 5, 4, 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `adm_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `adm_no`, `email`, `phone_number`, `password`, `status`) VALUES
(12, 'Cardi Brayo', 'ED/44/16', 'test@gmail.com', '0712345678', '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_feedback`
--
ALTER TABLE `course_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_questions`
--
ALTER TABLE `course_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructors_questions`
--
ALTER TABLE `instructors_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer_course`
--
ALTER TABLE `lecturer_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer_course3`
--
ALTER TABLE `lecturer_course3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_selected_courses`
--
ALTER TABLE `students_selected_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university_feedback`
--
ALTER TABLE `university_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university_questions`
--
ALTER TABLE `university_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `course_feedback`
--
ALTER TABLE `course_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `course_questions`
--
ALTER TABLE `course_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `instructors_questions`
--
ALTER TABLE `instructors_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lecturer_course`
--
ALTER TABLE `lecturer_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lecturer_course3`
--
ALTER TABLE `lecturer_course3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students_selected_courses`
--
ALTER TABLE `students_selected_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `university_feedback`
--
ALTER TABLE `university_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `university_questions`
--
ALTER TABLE `university_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
