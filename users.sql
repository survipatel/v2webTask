-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 12:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `houseno` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `designation` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `dob`, `fathername`, `phone`, `houseno`, `city`, `state`, `date`, `designation`, `gender`) VALUES
(1, 'Anita devi', '1996-09-27', 'Suresh Chandra', '9118725760', '25', 'Kanpur', 'Uttar Pradesh', '2024-04-21', 'Php Developer', 'Female'),
(2, 'nidhi ', '2002-10-12', 'Suresh ', '6739141091', '55', 'Delhi', 'New Delhi', '2024-04-21', 'HR', 'Female'),
(3, 'Himanshu Patel', '2006-12-08', 'Suresh Chandra', '6173914122', '55', 'Gurgaon', 'Haryana', '2024-04-21', 'Java Developer', 'Male'),
(4, 'Megha Awasthi', '2002-07-17', 'Mahendra Awasthi', '8743565434', '756', 'Bhopal', 'Madhya Pradesh', '2024-04-21', 'Teacher', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
