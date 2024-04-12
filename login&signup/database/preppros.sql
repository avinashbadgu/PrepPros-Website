-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 04, 2024 at 03:10 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `preppros`
--

-- --------------------------------------------------------

--
-- Table structure for table `coding_questions`
--

DROP TABLE IF EXISTS `coding_questions`;
CREATE TABLE IF NOT EXISTS `coding_questions` (
  `q_id` int NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  `question_title` text,
  `company` varchar(50) DEFAULT NULL,
  `account` tinyint DEFAULT NULL,
  `time_req` int DEFAULT NULL,
  `total_marks` int DEFAULT NULL,
  `answers` text,
  PRIMARY KEY (`q_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int NOT NULL,
  `event_name` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `speaker` varchar(100) DEFAULT NULL,
  `participants_count` int DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `about` text,
  `what_to_learn` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr_interview`
--

DROP TABLE IF EXISTS `hr_interview`;
CREATE TABLE IF NOT EXISTS `hr_interview` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `speciality` varchar(50) DEFAULT NULL,
  `fees` decimal(10,2) DEFAULT NULL,
  `appointment` datetime DEFAULT NULL,
  `time_duration` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ide_data`
--

DROP TABLE IF EXISTS `ide_data`;
CREATE TABLE IF NOT EXISTS `ide_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code_file` text NOT NULL,
  `input` text NOT NULL,
  `output` text,
  `language` varchar(50) NOT NULL,
  `execution_time` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mcqs`
--

DROP TABLE IF EXISTS `mcqs`;
CREATE TABLE IF NOT EXISTS `mcqs` (
  `id` int NOT NULL,
  `question_title` text,
  `answers` text,
  `option1` varchar(255) DEFAULT NULL,
  `option2` varchar(255) DEFAULT NULL,
  `option3` varchar(255) DEFAULT NULL,
  `option4` varchar(255) DEFAULT NULL,
  `time_req` int DEFAULT NULL,
  `total_marks` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

DROP TABLE IF EXISTS `mentors`;
CREATE TABLE IF NOT EXISTS `mentors` (
  `m_id` int NOT NULL,
  `mentor_name` varchar(100) DEFAULT NULL,
  `mentor_contact` varchar(20) DEFAULT NULL,
  `speciality` varchar(50) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `fees` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `user_id` int NOT NULL,
  `payment_amt` decimal(10,2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `payment_type` varchar(20) DEFAULT NULL,
  `next_due` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `comment` text,
  `date` date DEFAULT NULL,
  `ratings` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `code` text NOT NULL,
  `user_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone_number` varchar(13) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `profile_pic` longblob,
  `user_status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `full_name`, `email`, `password`, `code`, `user_type`, `phone_number`, `created_at`, `profile_pic`, `user_status`) VALUES
(2, NULL, 'Asma Anwar Shaikh', NULL, '202cb962ac59075b964b07152d234b70', '31a89c48fbf4419dc1eb677f9f742cbb', '', NULL, '2024-02-03 13:49:28', NULL, NULL),
(7, NULL, 'Harshad', '', '$2y$12$Tloub6kixlx/q6VKoqeELuxQVhU3BbbkbnYm742VaWJWjftQuGzeu', '25ce1cbf800df6163350fd3d04945ecd', NULL, NULL, '2024-02-04 10:11:20', NULL, NULL),
(12, NULL, 'Malhar', 'h@gmail.com', '$2y$12$BfTBsncgrlpa7ybXDQHVx.GZj101S/5NIgUV0uIzEegOuYyl.xdgq', '65bf92bc47856', NULL, NULL, '2024-02-04 12:26:58', NULL, NULL),
(15, NULL, 'Harshad', 'prepbroszz@gmail.com', '$2y$12$Y9nGbCnEsaVawAJaBDYx.emPivX0/dpTMvNVPQHJ.2z71jXMwSnrS', '', 'user', NULL, '2024-02-04 15:02:35', NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user_progress`
--

DROP TABLE IF EXISTS `user_progress`;
CREATE TABLE IF NOT EXISTS `user_progress` (
  `progress_id` int NOT NULL,
  `time_spent` int DEFAULT NULL,
  `questions_attempted` int DEFAULT NULL,
  `questions_completed` int DEFAULT NULL,
  `marks` int DEFAULT NULL,
  `bookmarked_question_id` int DEFAULT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`progress_id`),
  KEY `bookmarked_question_id` (`bookmarked_question_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
