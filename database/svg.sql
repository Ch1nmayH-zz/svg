-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 10:22 AM
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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(0, 'chinmayhegde8@gmail.com', '123'),
(0, '190918 1', 'adasdsadasdad'),
(0, 'Chinmay Hegde', 'website chanagilla'),
(8, 'Chinmay Hegde', 'asAadaD'),
(8, 'Chinmay Hegde', 'gsdsdgsdgsd'),
(8, 'Chinmay Hegde', 'We organise what we write into sentences and paragraphs. A paragraph begins on a new line within the text and there is often a blank line between paragraphs. A paragraph usually contains more than one sentence and it is usually about one topic.\r\n\r\nThe first sentence in a paragraph is sometimes called the key or topic sentence because it gives us the key to what the paragraph will be about. The other sentences usually relate to the key sentence. There is usually a conclusion in the final sentence of a paragraph and sometimes there is a link to the next paragraph.'),
(13, '123 12', 'wWAEWE'),
(7, '190918 1', 'adawdasd'),
(7, '190918 1', 'Feedback qwdwasda'),
(13, '123 12', 'adfsds');

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
  `remarks` varchar(500) NOT NULL,
  `status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `fname`, `lname`, `email`, `personalPh`, `parentPh`, `course`, `year`, `rollno`, `pswd`, `role`, `remarks`, `status`) VALUES
(7, '190918', '1', '190918@sdmcujire.in', 0, 12345, 'bca', 3, 190918, 'ss', 'admin', 'N.A', ''),
(8, 'Chinmay', 'Hegde', 'chinmayhegde8@gmail.com', 123, 12345, 'BBA', 2, 22222, '5', 'student', 'N.A', 'active'),
(9, '190918', 'sasa', 'chinmayhegde8@gmail.com', 123, 123, '', 0, 123, '1', 'admin', 'N.A', ''),
(11, '11', '1', '190918@sdmcujire.in', 0, 0, 'BBA', 0, 0, '', '', 'N.A', ''),
(12, 'karma', 'duh', '123@gmail.com', 1, 1, 'bca', 1, 1, '123', 'student', 'N.A', 'active'),
(29, 'karma', ':', 'karmathesupreme@gmail.com', 0, 0, 'N.A', 0, 0, '1', 'manager', 'N.A', ''),
(30, 'chinmay', 'q', '190918@sdmcujire.in', 22, 0, 'N.A', 0, 0, 'q', 'manager', 'N.A', 'active'),
(31, '190918', '123', '190918@sdmcujire.in', 12, 0, 'BCA', 1, 123, '1', 'student', 'N.A', 'Active');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
