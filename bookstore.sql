-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 10:49 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `entrybook`
--

CREATE TABLE `entrybook` (
  `uploaded_by` varchar(50) NOT NULL,
  `bookid` int(10) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `book_image` varchar(250) NOT NULL,
  `author` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entrybook`
--

INSERT INTO `entrybook` (`uploaded_by`, `bookid`, `book_name`, `book_image`, `author`, `category`, `price`) VALUES
('shivam.prajapati_19@sakec.ac.in', 807716029, 'hero', '', 'dfds', '1', 50),
('shivam.prajapati_19@sakec.ac.in', 875677398, 'harry', 'peakpx.jpg', 'dfds', '1', 50),
('', 1590910806, 'freedom', 'peakpx.jpg', 'dfds', '2', 50),
('shivam.prajapati_19@sakec.ac.in', 1629481422, 'hero', 'peakpx.jpg', 'dfds', '1', 50),
('', 1875990789, 'hereo', 'peakpx.jpg', 'dfds', '0', 50),
('', 2121963916, 'helo', 'peakpx.jpg', 'dfds', '1', 50),
('', 2130119357, 'fdfs', 'peakpx(3).jpg', 'jdlf', '1', 50);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `phone`, `password`) VALUES
('experiment5', 'dfds@fd.vb', 1234567890, '123'),
('Shivam Prajapti', 'shivam.prajapati_19@sakec.ac.in', 1234567890, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `serialno` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`serialno`, `username`, `password`) VALUES
(2, 'shivam.prajapati_19@sakec.ac.in', '123456'),
(3, 'dfds@fd.vb', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entrybook`
--
ALTER TABLE `entrybook`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`serialno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `serialno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
