-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2019 at 03:21 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `name` text,
  `email` text,
  `subject` text,
  `message` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`name`, `email`, `subject`, `message`) VALUES
('Ð“ÐµÐ¾Ñ€Ð³Ð¸ Ð¯Ð½ÐºÐ¾Ð²', 'georgi.qnkov@gmail.com', 'Fans Contact Form ', 'testsetse'),
('Ð“ÐµÐ¾Ñ€Ð³Ð¸ Ð¯Ð½ÐºÐ¾Ð²', 'georgi.qnkov@gmail.com', 'Fans Contact Form ', 'asdasd'),
('Ð“ÐµÐ¾Ñ€Ð³Ð¸ Ð¯Ð½ÐºÐ¾Ð²', 'georgi.qnkov@gmail.com', 'Fans Contact Form ', 'asdasd'),
('Ð“ÐµÐ¾Ñ€Ð³Ð¸ Ð¯Ð½ÐºÐ¾Ð²', 'georgi.qnkov@gmail.com', 'Fans Contact Form ', 'fasfafa');

-- --------------------------------------------------------

--
-- Table structure for table `MyGuests`
--

CREATE TABLE `MyGuests` (
  `firstname` text,
  `lastname` text,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `MyGuests`
--

INSERT INTO `MyGuests` (`firstname`, `lastname`, `email`) VALUES
('John', 'Doe', 'john@example.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
