-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 09:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svg`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `personalPh` int(11) NOT NULL,
  `parentPh` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `pswd` varchar(300) NOT NULL,
  `role` varchar(50) NOT NULL,
  `remarks` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `fname`, `lname`, `email`, `personalPh`, `parentPh`, `course`, `year`, `rollno`, `pswd`, `role`, `remarks`) VALUES
(7, '190918', '1', '190918@sdmcujire.in', 0, 12345, 'bca', 3, 190918, '123', 'admin', 'N.A'),
(8, 'Chinmay', 'Hegde', 'chinmayhegde8@gmail.com', 0, 12345, 'BCA', 3, 22222, '1', 'manager', 'N.A'),
(9, '190918', 'sasa', 'chinmayhegde8@gmail.com', 123, 123, '', 0, 123, '1', 'admin', 'N.A'),
(10, 'chinmay', '123', 'sdd@gmail.co', 0, 0, '-', 0, 0, '123', 'manager', 'N.A'),
(11, '11', '1', '190918@sdmcujire.in', 0, 0, 'BBA', 0, 0, '', '', 'N.A'),
(12, 'karma', 'duh', '123@gmail.com', 1, 1, 'bca', 1, 1, '123', 'student', 'N.A'),
(13, '123', '12', 'chinmayhegde8@gmail.com', 0, 1235, 'bcom', 2, 0, '123', 'student', 'N.A'),
(14, 'preetham', 'gowda', 'preethamgowda@gmail.com', 0, 1111, 'bcom', 2, 200647, '123', 'manager', 'N.A'),
(16, 'adsad', 'asdas', 'newadmin@gmail.com', 0, 134, 'bba', 3, 123, '123', 'student', 'N.A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
