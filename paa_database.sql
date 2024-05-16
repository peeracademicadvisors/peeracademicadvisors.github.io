-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 04:31 AM
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
-- Database: `paa_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisors`
--

CREATE TABLE `advisors` (
  `advisor_email` varchar(256) NOT NULL,
  `advisor_name` varchar(256) NOT NULL,
  `year_group` varchar(256) NOT NULL,
  `major` varchar(256) NOT NULL,
  `availability` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advisors`
--

INSERT INTO `advisors` (`advisor_email`, `advisor_name`, `year_group`, `major`, `availability`) VALUES
('senam.glover-tay@ashesi.edu.gh', 'Senam Glover-Tay', '2024', 'Computer Science', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `title` varchar(256) NOT NULL,
  `upload_date` date NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `user_name` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `message` longtext NOT NULL,
  `user_phone` varchar(10) NOT NULL,
  `advisor_email_fk` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`time`, `user_name`, `user_email`, `message`, `user_phone`, `advisor_email_fk`) VALUES
('2024-05-16 02:27:51', 'Afua Sutherland', 'myemail@gmail.com', 'I need help', '0209532066', 'senam.glover-tay@ashesi.edu.gh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisors`
--
ALTER TABLE `advisors`
  ADD UNIQUE KEY `advisor_email` (`advisor_email`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD KEY `advisor_email_fk` (`advisor_email_fk`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`advisor_email_fk`) REFERENCES `advisors` (`advisor_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
