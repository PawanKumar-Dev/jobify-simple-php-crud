-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 09, 2022 at 06:09 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobify`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_data`
--

DROP TABLE IF EXISTS `app_data`;
CREATE TABLE IF NOT EXISTS `app_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobnum` varchar(255) DEFAULT NULL,
  `qualify` varchar(255) DEFAULT NULL,
  `work` int(11) DEFAULT NULL,
  `data_entry_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_data`
--

INSERT INTO `app_data` (`id`, `name`, `email`, `mobnum`, `qualify`, `work`, `data_entry_at`) VALUES
(1, 'Pawan', 'pawan@example.com', '99999 99999', 'Degree', 2, '2022-03-08 23:35:01'),
(2, 'Raju', 'raju@example.com', '+91 88888 99999', 'Diploma', 3, '2022-03-08 23:43:49'),
(3, 'Shayam', 'shayam@example.com', '+91 77777 99999', 'Graduate', 1, '2022-03-08 23:45:29'),
(4, 'Ram', 'ram@example.com', '+91 99999 88888', 'Degree', 2, '2022-03-08 23:51:35'),
(5, 'Rajesh', 'rjupdated@example.com', '99999 44444', 'Diploma', 3, '2022-03-08 23:53:08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
