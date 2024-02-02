-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 26, 2024 at 12:28 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orientation`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8mb4   NOT NULL,
  `middlename` varchar(50) CHARACTER SET utf8mb4   NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8mb4   NOT NULL,
  `gender` varchar(50) CHARACTER SET utf8mb4   NOT NULL,
  `address` text CHARACTER SET utf8mb4   NOT NULL,
  `number` text CHARACTER SET utf8mb4   NOT NULL,
  `year` text CHARACTER SET utf8mb4   NOT NULL,
  `section` text CHARACTER SET utf8mb4   NOT NULL,
  `course` int NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4   NOT NULL,
  `password` text NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4   ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `address`, `number`, `year`, `section`, `course`, `email`, `password`, `status`) VALUES
(1, 'Noven', '', 'Nagas', 'Male', '818 Alley 1, Jimenez St., JMJ Apartment, Kalawaan, Pasig city', '09265355201', '1st Year', 'A', 2, 'novennagas884@gmail.com', 'bfd59291e825b5f2bbf1eb76569f8fe7', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_comments`
--

CREATE TABLE `admin_comments` (
  `id` int NOT NULL,
  `idUser` int NOT NULL DEFAULT '0',
  `idVideo` int NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `datePosted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `category` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL,
  `banner` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `date_created`, `date_updated`, `banner`) VALUES
(1, 'Leadership Trainings', '2023-07-15 11:31:45', '2023-07-18 12:07:26', 'leadership.png'),
(4, 'IT', '2023-07-15 13:58:14', '2023-07-18 12:03:34', 'IT.png'),
(6, 'Education', '2023-07-16 21:38:33', NULL, 'education.png'),
(7, 'Engineering', '2023-07-17 07:19:24', '2023-07-18 12:05:59', 'engineering.png'),
(9, 'Fisheries', '2023-07-18 10:02:20', '2023-07-18 12:05:11', 'fisheries.png'),
(11, 'Agriculture', '2023-07-18 15:32:16', NULL, 'fisheries.png'),
(14, 'others', '2023-11-23 14:44:44', NULL, 'others.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int NOT NULL,
  `course` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`) VALUES
(1, 'Bachelor of Science and Secondary Education'),
(2, 'Bachelor of Science and Information Technology'),
(3, 'Engineering ');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `id` int NOT NULL,
  `idVideo` int NOT NULL DEFAULT '0',
  `idUser` int NOT NULL,
  `datePosted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`id`, `idVideo`, `idUser`, `datePosted`) VALUES
(1, 2, 18, '2024-01-18 04:22:45'),
(2, 3, 18, '2024-01-19 00:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int NOT NULL,
  `idVideo` int NOT NULL DEFAULT '0',
  `examName` varchar(250) NOT NULL DEFAULT '0',
  `items` int NOT NULL,
  `datePosted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `idVideo`, `examName`, `items`, `datePosted`) VALUES
(1, 1, 'Never', 3, '2024-01-25 18:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `exam_result`
--

CREATE TABLE `exam_result` (
  `id` int NOT NULL,
  `idUser` int NOT NULL DEFAULT '0',
  `idExam` int NOT NULL DEFAULT '0',
  `result` varchar(50) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL,
  `datePosted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `title` text CHARACTER SET utf8mb4   NOT NULL,
  `shortDescription` text NOT NULL,
  `course` int NOT NULL,
  `category` text CHARACTER SET utf8mb4  ,
  `startDate` datetime DEFAULT NULL,
  `endDate` datetime DEFAULT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `shortDescription`, `course`, `category`, `startDate`, `endDate`, `startTime`, `endTime`, `created`) VALUES
(1, 'Never Give Up', 'Motivational Lesson', 2, 'Education', '2024-01-25 00:00:00', '2024-01-31 00:00:00', '04:00:00', '22:00:00', '2024-01-25 17:10:00'),
(2, 'The Seed', 'short video', 2, 'Leadership Trainings', '2024-01-25 00:00:00', '2024-01-29 00:00:00', '05:00:00', '22:40:00', '2024-01-25 19:38:27'),
(3, 'How to succeed', 'Motivational video', 1, 'Education', '2024-01-25 00:00:00', '2024-01-30 00:00:00', '05:00:00', '23:00:00', '2024-01-25 19:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int NOT NULL,
  `video_id` int NOT NULL,
  `user_id` int NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int NOT NULL,
  `idExam` int NOT NULL DEFAULT '0',
  `question` text NOT NULL,
  `_a` varchar(250) NOT NULL DEFAULT '0',
  `_b` varchar(250) NOT NULL DEFAULT '0',
  `_c` varchar(250) NOT NULL DEFAULT '0',
  `_d` varchar(250) NOT NULL DEFAULT '0',
  `answer` char(5) CHARACTER SET utf8mb4   NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `idExam`, `question`, `_a`, `_b`, `_c`, `_d`, `answer`) VALUES
(1, 1, 'test1', 'asd', 'das', 'asd', 'asd', 'A'),
(2, 1, 'test2', 'adas', 'dasd', 'dasd', 'das', 'B'),
(3, 1, 'test3', 'dasd', 'dasd', 'dasd', 'das', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'Virtual Orientation System', 'op@slsuonline.edu.ph', ' (053) 577-8299', '1705590180_1681188000_305971569_527957872467930_2619411664973697495_n.jpg', '&lt;p class=&quot;MsoNormal&quot; style=&quot;text-align:justify;line-height:200%&quot;&gt;&lt;span lang=&quot;EN-GB&quot; style=&quot;font-family:&amp;quot;Arial&amp;quot;,sans-serif;mso-ansi-language:EN-GB&quot;&gt;Adjusting to university and preparing for the first week of classes is difficult for many students entering higher education. Students often find they are overloaded with information during orientation week, which negatively impacts their readiness to engage with their studies. This practice report describes an evidence-based approach to information provided in the early period of transition to university study. An online tool called Orientation Online was created by adopting an approach that makes information available earlier and in a way that is easier to engage with. Feedback from students has been positive and, with careful ongoing maintenance, the tool provides a viable option for reducing confusion amongst commencing students.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `course_id` int NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '3' COMMENT '1=Admin,2=Alumni officer, 3= alumnus',
  `auto_generated_pass` text NOT NULL,
  `alumnus_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `address`, `course_id`, `username`, `password`, `type`, `auto_generated_pass`, `alumnus_id`) VALUES
(1, 'Admin', '', 'Admin', '', 0, 'admin', '0192023a7bbd73250516f069df18b500', 1, '', 0),
(3, 'Mike', 'Middleton', 'Williams', 'Canada', 1, 'mwilliams@sample.com', '3cc93e9a6741d8b40460457139cf8ced', 3, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_comments`
--

CREATE TABLE `user_comments` (
  `id` int NOT NULL,
  `idUser` int NOT NULL DEFAULT '0',
  `idVideo` int NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `datePosted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;

--
-- Dumping data for table `user_comments`
--

INSERT INTO `user_comments` (`id`, `idUser`, `idVideo`, `comment`, `datePosted`) VALUES
(1, 1, 1, 'test comment', '2024-01-25 21:23:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `admin_comments`
--
ALTER TABLE `admin_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_result`
--
ALTER TABLE `exam_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_comments`
--
ALTER TABLE `user_comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_comments`
--
ALTER TABLE `admin_comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_result`
--
ALTER TABLE `exam_result`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_comments`
--
ALTER TABLE `user_comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
