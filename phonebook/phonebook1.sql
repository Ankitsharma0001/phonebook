-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 29, 2020 at 11:52 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phonebook1`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `con_id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`con_id`, `name`, `dob`, `phone`, `email`) VALUES
(2, 'Ankit', '1999-06-21', '9988776655', 'ankit@gmail.com'),
(3, 'Mohit Kumar', '2005-07-10', '9985616116', ''),
(4, 'Rohan Saini', '2002-08-15', '8754687950', 'rohan@yahoo.com'),
(5, 'Sumit Rana', '1992-09-01', '6818975468', 'sumit@gmail.com'),
(6, 'Dheeraj Kumar', '1995-07-04', '9874652689', 'dheeraj@gmail.com'),
(7, 'Rohit Roy', '0000-00-00', '8746587920', 'rohit@gmail.com'),
(8, 'Rakesh Jain', '1997-10-28', '9768452030', 'rakesh@gmail.com'),
(9, 'Rakesh Jain', '1997-10-28', '9768452030', 'rakesh@gmail.com'),
(10, 'Rakesh Jain', '1997-10-28', '9768452030', 'rakesh@gmail.com'),
(11, 'Mohan', '2004-09-05', '9845672010', 'mohan@gmail.com'),
(12, 'Mohan', '2004-09-05', '9845672010', 'mohan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`con_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `con_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
