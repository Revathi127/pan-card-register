-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 12:04 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pancard`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `number` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `income` int(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `country` varchar(20) NOT NULL,
  `code` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `fname`, `number`, `email`, `income`, `address`, `dob`, `country`, `code`) VALUES
(1, 'KavinKumar', 'KavinKumar', 2147483647, 'admin', 0, '88A 4th street\r\nSivanandhapuram\r\nSaravanampatti po', '2015-02-04', 'India', 600073),
(2, 'South India', 'Inway', 8800000, 'webteam@inwayhosting.com', 0, 'avgfsbngdn', '2018-02-06', 'India', 0),
(3, 'fbgbgbn n ', 'jhjhmkhh', 8800000, 'revathi@inwayhosting.com', 0, 'dvfdabvfb', '2016-12-01', 'bvfbfb', 0),
(4, 'fbgbgbn n ', 'jhjhmkhh', 8800000, 'revathi@inwayhosting.com', 0, 'dvfdabvfb', '2016-12-01', 'bvfbfb', 0),
(5, 'fbgbgbn n ', 'jhjhmkhh', 8800000, 'revathi@inwayhosting.com', 0, 'dvfdabvfb', '2016-12-01', 'bvfbfb', 0),
(7, 'test', 'Inway', 2147483647, 'rev@123.com', 0, 'dythtjhyjyj', '2016-12-06', 'reyhutju jyjyj', 0),
(8, 'dvdv', 'dvdvd', 0, 'vdvdvvd', 0, 'dvdvvd', '1991-12-02', 'dsvdv', 0),
(9, 'dvdv', 'dvdvd', 0, 'vdvdvvd', 0, 'dvdvvd', '1991-12-02', 'dsvdv', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
