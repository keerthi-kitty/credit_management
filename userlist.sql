-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 08:50 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userlist`
--

-- --------------------------------------------------------

--
-- Table structure for table `his`
--

CREATE TABLE `his` (
  `sender` varchar(20) NOT NULL,
  `amt` int(7) NOT NULL,
  `rec` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `accid` int(4) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `credits` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `gender`, `accid`, `email`, `phone`, `credits`) VALUES
('keerthi ', 'm', 1001, 'example@gmail.com', '9900000000', 1000),
('Patil', 'm', 1002, 'example@gmail.com', '8800000000', 1500),
('ganesh', 'm', 1003, 'gani@mail.com', '8800000088', 1000),
('appi', 'm', 1004, 'something@yahoo.com', '7700000000', 1000),
('sanjeev', 'm', 1005, 'ss@gmail.com', '8800000000', 1500),
('boss', 'm', 1006, 'something@yahoo.com', '7700000000', 1000),
('harshith', 'm', 1007, 'hh@gmail.com', '8800000000', 1500),
('madhu', 'm', 1008, 'mm@gmail.com', '6600000000', 1500),
('rajesha', 'm', 1009, 'hrh@gmail.com', '8899000000', 1500),
('siddu', 'm', 1010, 'sh@gmail.com', '8866000000', 1500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`accid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
