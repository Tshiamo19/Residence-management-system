-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 17, 2023 at 04:54 PM
-- Server version: 8.0.34
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accomodation`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocations`
--

DROP TABLE IF EXISTS `allocations`;
CREATE TABLE IF NOT EXISTS `allocations` (
  `allocation_id` int NOT NULL,
  `student_id` int NOT NULL,
  `room_no` int DEFAULT NULL,
  `allocation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `allocations`
--

INSERT INTO `allocations` (`allocation_id`, `student_id`, `room_no`, `allocation_date`) VALUES
(491009, 82262, 751, '2023-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
CREATE TABLE IF NOT EXISTS `applications` (
  `application_id` int NOT NULL,
  `student_id` int NOT NULL,
  `residence_id` int NOT NULL,
  `period` int NOT NULL,
  `status` varchar(15) NOT NULL,
  `Academic_year` int NOT NULL,
  `aaplication_date` date NOT NULL,
  PRIMARY KEY (`application_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`application_id`, `student_id`, `residence_id`, `period`, `status`, `Academic_year`, `aaplication_date`) VALUES
(47, 82262, 51915, 5, 'ACCEPTED', 2024, '2023-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `residence`
--

DROP TABLE IF EXISTS `residence`;
CREATE TABLE IF NOT EXISTS `residence` (
  `residence_id` int NOT NULL,
  `residence_name` varchar(50) NOT NULL,
  `capacity` int NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `residence`
--

INSERT INTO `residence` (`residence_id`, `residence_name`, `capacity`, `location`, `description`) VALUES
(51915, 'TAUANA', 300, 'town', 'MIXED STUDENTS'),
(69636, 'moroka', 50, 'church', 'MIXED');

-- --------------------------------------------------------

--
-- Table structure for table `residence_manager`
--

DROP TABLE IF EXISTS `residence_manager`;
CREATE TABLE IF NOT EXISTS `residence_manager` (
  `manager_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phonenumber` int NOT NULL,
  PRIMARY KEY (`manager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=82149 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `residence_manager`
--

INSERT INTO `residence_manager` (`manager_id`, `firstname`, `lastname`, `email`, `phonenumber`) VALUES
(65998, 'tshiamo', 'monametsi', 'tshiamotshia62@gmail.com', 78965),
(78038, 'Pako', 'Pule', 'pako@gmail.com', 789652);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `room_id` int NOT NULL,
  `room_no` int NOT NULL,
  `residence_id` int NOT NULL,
  `room_status` varchar(10) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_no`, `residence_id`, `room_status`) VALUES
(223, 751, 51915, 'taken'),
(254, 500, 51915, 'available'),
(988, 10, 51915, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phonenumber` int NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `student_pin` int NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=96586 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `firstname`, `lastname`, `email`, `phonenumber`, `birth_date`, `gender`, `student_pin`) VALUES
(82262, 'tshiamo', 'monametsi', 'tshiamotshia62@gmail.com', 8563147, '2023-10-18', 'MALE', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
