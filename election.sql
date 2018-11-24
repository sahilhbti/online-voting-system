-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 06:39 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election`
--

-- --------------------------------------------------------

--
-- Table structure for table `bharat`
--

CREATE TABLE `bharat` (
  `aadhar` varchar(12) NOT NULL,
  `vote_id` varchar(10) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `party` varchar(40) DEFAULT NULL,
  `done` varchar(11) NOT NULL,
  `otp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bharat`
--

INSERT INTO `bharat` (`aadhar`, `vote_id`, `phone`, `party`, `done`, `otp`) VALUES
('9090', '0', '9557862614', 'Bharatiya Janata Party(BJP)', 'true', 12345),
('8080', '1234', '7417606991', 'Indian National Congress(INC)', 'true', 12334),
('124', '12', '9557862614', 'Aam Aadmi Party(AAP)', 'true', 13455),
('90901', '122', '9557862614', 'Aam Aadmi Party(AAP)', 'true', 14322),
('90901', '124', '9557862614', 'Aam Aadmi Party(AAP)', 'true', 13243),
('90901', '12', '95522342', 'Indian National Congress(INC)', 'true', 13241),
('90901', '12', '12425334', 'Bharatiya Janata Party(BJP)', 'true', 123),
('123', '132', '654', 'Bharatiya Janata Party(BJP)', 'true', 24),
('1232', '42', '23', 'Bharatiya Janata Party(BJP)', 'true', 234),
('12321', '213', '13', NULL, 'false', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
