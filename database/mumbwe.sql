-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 17, 2022 at 10:38 PM
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
-- Database: `mumbwe`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_users`
--

DROP TABLE IF EXISTS `db_users`;
CREATE TABLE IF NOT EXISTS `db_users` (
  `db_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(234) NOT NULL,
  `surname` varchar(244) NOT NULL,
  `role` varchar(9) NOT NULL,
  `username` varchar(90) NOT NULL,
  `password` varchar(244) NOT NULL,
  `status` varchar(5) NOT NULL,
  PRIMARY KEY (`db_user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='It keeps user profiles';

--
-- Dumping data for table `db_users`
--

INSERT INTO `db_users` (`db_user_id`, `firstname`, `surname`, `role`, `username`, `password`, `status`) VALUES
(1, 'Vincent', 'Saiwa', 'Admin', 'paulsaiwa', 'ef110ef43290048cb3c5037a162a842f', 'On');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
