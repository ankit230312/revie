-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 07:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rivi`
--

-- --------------------------------------------------------

--
-- Table structure for table `brnd_info`
--

CREATE TABLE `brnd_info` (
  `id` int(11) NOT NULL,
  `brd_name` varchar(255) NOT NULL,
  `brd_title` varchar(255) NOT NULL,
  `brd_regis` date NOT NULL DEFAULT current_timestamp(),
  `brd_email` varchar(255) NOT NULL,
  `brd_con` varchar(255) NOT NULL,
  `brd_add` varchar(255) NOT NULL,
  `brd_dis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brnd_info`
--

INSERT INTO `brnd_info` (`id`, `brd_name`, `brd_title`, `brd_regis`, `brd_email`, `brd_con`, `brd_add`, `brd_dis`) VALUES
(1, 'Rivie', 'Rivie Technology LTD', '2023-07-27', 'rivie@gmail.com', '9474646464', 'sector - 62', 'csrgrs'),
(4, 'Rivie 2', 'Rivie Technology', '2023-08-16', 'rivie@gmail.com', '9474646464', 'bdfbdbd', 'fbdf');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `org_id` int(2) NOT NULL,
  `class` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `org_id`, `class`, `slug`, `created_at`, `updated_at`) VALUES
(4, 1, 'Math', '', '2023-08-11 12:17:29', '2023-08-11 12:17:29'),
(5, 1, 'Math 123', '', '2023-08-11 12:43:23', '2023-08-11 12:43:23'),
(6, 1, 'Math', '', '2023-08-11 20:15:39', '2023-08-11 20:15:39'),
(7, 1, 'Hindi', '', '2023-08-11 20:15:49', '2023-08-11 20:15:49'),
(9, 9, 'Math', 'math', '2023-08-12 15:32:11', '2023-08-12 15:32:11'),
(10, 10, 'Math', 'math', '2023-08-12 23:12:20', '2023-08-12 23:12:20'),
(11, 10, 'Hindi', 'hindi', '2023-08-12 23:12:33', '2023-08-12 23:12:33'),
(12, 11, 'Class 1', 'class1', '2023-08-16 23:16:54', '2023-08-16 23:16:54'),
(13, 11, 'Class 2', 'class2', '2023-08-16 23:17:09', '2023-08-16 23:17:09'),
(14, 11, 'Math class', 'mathclass', '2023-08-16 23:17:19', '2023-08-16 23:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `org_id` varchar(255) NOT NULL,
  `role_id` int(2) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `org_id`, `role_id`, `designation`, `slug`, `created_at`, `updated_at`) VALUES
(4, '8', 0, 'Teacher123', 'teacher123', '2023-08-11 11:58:11', '2023-08-11 11:58:11'),
(5, '8', 3, 'Admin', 'admin', '2023-08-11 12:00:01', '2023-08-11 12:00:01'),
(6, '1', 1, 'Teacher123', 'teacher123', '2023-08-11 12:02:53', '2023-08-11 12:02:53'),
(7, '9', 1, 'admin1234', 'admin1234', '2023-08-11 20:14:40', '2023-08-11 20:14:40'),
(8, '10', 2, 'Admin 123', 'admin123', '2023-08-12 23:10:42', '2023-08-12 23:10:42'),
(9, '10', 2, 'Admin 123', 'admin123', '2023-08-12 23:11:05', '2023-08-12 23:11:05'),
(11, '11', 3, 'Teacher1', 'teacher1', '2023-08-16 23:15:47', '2023-08-16 23:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `exam_question`
--

CREATE TABLE `exam_question` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `exam_ques` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `opt1` varchar(255) NOT NULL,
  `opt2` varchar(255) NOT NULL,
  `opt3` varchar(255) NOT NULL,
  `opt4` varchar(255) NOT NULL,
  `corect_opt` varchar(255) NOT NULL,
  `status` varchar(2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_question`
--

INSERT INTO `exam_question` (`id`, `exam_id`, `exam_ques`, `opt1`, `opt2`, `opt3`, `opt4`, `corect_opt`, `status`, `created_at`, `updated_at`) VALUES
(7, 1, 'Select the wrongly spelt word ?', 'calander ', 'career ', 'callous ', 'carriage ', 'calander', '1', '2023-08-15 12:10:47', '2023-08-15 12:10:47'),
(8, 1, 'Select the correctly spelt word ?', 'battalion ', 'battallion ', 'batalion ', 'batallion ', 'battalion', '1', '2023-08-15 12:12:11', '2023-08-15 12:12:11'),
(9, 1, 'Select the wrongly spelt word ?', 'electric ', 'irrigation ', 'presure ', 'central ', 'presure', '1', '2023-08-15 12:17:48', '2023-08-15 12:17:48'),
(10, 1, 'Select the wrongly spelt word ?', 'whimsical ', 'contiguous ', 'spectaculer ', 'adjacent ', 'spectaculer', '1', '2023-08-15 12:18:31', '2023-08-15 12:18:31'),
(11, 1, 'Select the correctly spelt word ?', 'Recquirement ', 'Exquiste ', 'Acquaintance ', 'Squirrell ', 'Acquaintance', '1', '2023-08-15 12:29:07', '2023-08-15 12:29:07'),
(12, 1, 'Select the Wrongly spelt word ?', 'Delicious ', 'Momentous ', 'Courteous ', 'Circueteous ', 'Circueteous', '1', '2023-08-15 12:38:36', '2023-08-15 12:38:36'),
(13, 1, 'Select the correctly spelt word ?', 'Essentail ', 'Essencial ', 'Essential ', 'Essensial ', 'Essential', '1', '2023-08-15 12:42:48', '2023-08-15 12:42:48'),
(14, 5, 'Virulent ?', 'dangerous ', 'amicable ', 'callous ', 'carriage ', 'Essential', '1', '2023-08-15 17:43:43', '2023-08-15 17:43:43'),
(15, 6, 'Select the wrongly spelt word ?', 'dangerous ', 'amicable ', 'lethal ', 'powerful ', 'lethal ', '1', '2023-08-16 23:22:24', '2023-08-16 23:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `exam_title`
--

CREATE TABLE `exam_title` (
  `id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `suject_id` int(11) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_title`
--

INSERT INTO `exam_title` (`id`, `org_id`, `class_id`, `suject_id`, `exam_name`, `slug`, `created_at`, `update_at`) VALUES
(1, 7, 2, 4, 'English Test 1', 'englishtest1', '2023-08-11 18:17:30', '2023-08-11 18:17:30'),
(2, 7, 2, 4, 'English Test 1', 'englishtest1', '2023-08-11 18:18:02', '2023-08-11 18:18:02'),
(3, 8, 4, 2, 'Hindi Exam Test 1', 'hindiexamtest1', '2023-08-11 18:18:43', '2023-08-11 18:18:43'),
(4, 9, 6, 5, 'English Test 1', 'englishtest1', '2023-08-11 20:24:21', '2023-08-11 20:24:21'),
(5, 10, 11, 8, 'Hindi Exam ', 'hindiexam', '2023-08-12 23:15:37', '2023-08-12 23:15:37'),
(6, 11, 12, 9, 'English Test 1', 'englishtest1', '2023-08-16 23:21:20', '2023-08-16 23:21:20');

-- --------------------------------------------------------

--
-- Table structure for table `exam_type`
--

CREATE TABLE `exam_type` (
  `id` int(11) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `org_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contanct` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `global_sett`
--

CREATE TABLE `global_sett` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

CREATE TABLE `organisation` (
  `id` int(11) NOT NULL,
  `org_code` int(11) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `org_contact` varchar(255) NOT NULL,
  `org_email` varchar(255) NOT NULL,
  `org_add` varchar(255) NOT NULL,
  `org_abt` text NOT NULL,
  `org_registraiom` date NOT NULL DEFAULT current_timestamp(),
  `user_admin_id` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organisation`
--

INSERT INTO `organisation` (`id`, `org_code`, `org_name`, `org_contact`, `org_email`, `org_add`, `org_abt`, `org_registraiom`, `user_admin_id`, `created_date`) VALUES
(1, 11, 'abcdef', '8171619719', 'qq@gmail.com', 'adccddrv', 'ferfwe', '2023-07-15', '1', '2023-07-15 07:32:41'),
(3, 12, 'abcacbdfsf', '343973987', 'qq123@gmail.com', 'adccddrv', 'safsegsgf', '2023-07-15', '1', '2023-07-15 07:39:25'),
(7, 14, 'organisation LTD PVT', '8171619719', 'organisation 1 ', 'jhvjfvvyvv', 'igiugig', '2023-07-16', '1', '2023-07-16 17:17:32'),
(8, 15, 'organisation12  LTD PVT', '431241241412', 'organisation@gmail.com', 'jhvjfvvyvv', 'vfgnsg', '2023-08-11', '1', '2023-08-11 05:54:26'),
(9, 17, 'Nilesh Tek', '6518919191', 'Nilesh@gmail.com', '684894949', '6161818', '2023-08-11', '1', '2023-08-11 14:43:36'),
(10, 19, 'Rohan Ltd Pvt', '8171619719', 'qq123@gmail.com', 'adccddrv', 'efhwifhe9fhu9efh9e', '2023-08-12', '1', '2023-08-12 17:40:07'),
(11, 0, 'Abhijeet PVT LTD', '8171619719', 'qq123@gmail.com', 'dfbdbd', 'dfbdbf', '2023-08-16', '1', '2023-08-16 17:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(10) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`, `created`) VALUES
(1, 'super_admin', '2023-07-02 15:30:49'),
(2, 'admin', '2023-07-02 15:31:10'),
(3, 'teacher', '2023-07-02 15:31:18'),
(4, 'parent', '2023-07-02 15:31:25'),
(5, 'student', '2023-07-02 15:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `upated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `org_id`, `role_id`, `class_id`, `sub_name`, `slug`, `created_at`, `upated_at`) VALUES
(1, 8, 2, 4, 'English', 'english', '2023-08-11 14:37:24', '2023-08-11 14:37:24'),
(2, 8, 2, 4, 'Hindi', 'hindi', '2023-08-11 14:38:07', '2023-08-11 14:38:07'),
(3, 7, 3, 1, 'English', 'english', '2023-08-11 14:38:27', '2023-08-11 14:38:27'),
(4, 7, 3, 2, 'English', 'english', '2023-08-11 14:38:38', '2023-08-11 14:38:38'),
(5, 9, 2, 6, 'English', 'english', '2023-08-11 20:20:14', '2023-08-11 20:20:14'),
(6, 9, 2, 6, 'Hindi', 'hindi', '2023-08-11 20:22:59', '2023-08-11 20:22:59'),
(7, 10, 3, 10, 'Math Subject', 'mathsubject', '2023-08-12 23:14:04', '2023-08-12 23:14:04'),
(8, 10, 3, 11, 'Hindi Subject', 'hindisubject', '2023-08-12 23:14:19', '2023-08-12 23:14:19'),
(9, 11, 2, 12, 'English', 'english', '2023-08-16 23:20:06', '2023-08-16 23:20:06'),
(10, 11, 2, 13, 'English', 'english', '2023-08-16 23:20:20', '2023-08-16 23:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(2) NOT NULL,
  `status` int(3) NOT NULL DEFAULT 1 COMMENT '1 for active, 0 for deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `password`, `role_id`, `status`) VALUES
(1, 'Ankit', 'admin@gmail.com', '1234567890', '$2y$10$d0splKYhruFesPuR/shRXuPxJa54G8X.5N1AagE6XPuC6URLKsvQW', 1, 1),
(2, 'Ankit11', 'admin11@gmail.com', '1223443444', '$2y$10$BpPd3NzWfVc8qH/Ec.bOleVtN2cWD7KwFnuw99pFseXowU9eGEBA6', 2, 1),
(3, 'ankit111', 'admin111@gmail.com', '1234567890', '$2y$10$zvUrvvV7JnCAuBGaO5wtU..fD0cFf5oQZdHGZFpSF/Ph/R9BSeSIq', 2, 1),
(4, 'ankit Teacher', 'ankit_teacher@gmail.com', '1234567890', '$2y$10$8Nd.Mt/Pk.vzQL7ESpeRsOjKTmUBWdVB78tjuaUjj1iYzFFdMbNwO', 3, 1),
(5, 'ankitstudent', 'ankitstudent@gmail.com', '1234567890', '$2y$10$0C1yKB8ZmIbi13xc/8EuJe.4iQz2e4mtFPERFGb67CYgRMxTm.N7q', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `user_regis` date NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `f_name`, `l_name`, `user_regis`, `email`, `contact`, `address`) VALUES
(1, 'ankit 111', 'maurya', '2023-06-28', 'admin@gmail.com', '7894561130', '2023-06-28'),
(2, 'Saurav', '--', '2023-06-28', 'admin@gmail.com', '7894561130', '2023-06-28'),
(4, 'NIlesh ', '--', '2023-07-25', 'nishesh@gmai.com', '7894561130', '2023-07-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brnd_info`
--
ALTER TABLE `brnd_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_question`
--
ALTER TABLE `exam_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_title`
--
ALTER TABLE `exam_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_type`
--
ALTER TABLE `exam_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global_sett`
--
ALTER TABLE `global_sett`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisation`
--
ALTER TABLE `organisation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `org_code` (`org_code`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brnd_info`
--
ALTER TABLE `brnd_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `exam_question`
--
ALTER TABLE `exam_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `exam_title`
--
ALTER TABLE `exam_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exam_type`
--
ALTER TABLE `exam_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `global_sett`
--
ALTER TABLE `global_sett`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organisation`
--
ALTER TABLE `organisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
