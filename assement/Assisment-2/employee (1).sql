-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 02:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee1`
--

CREATE TABLE `employee1` (
  `emp_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `gen` varchar(255) NOT NULL,
  `password` int(13) NOT NULL,
  `cpassword` int(12) NOT NULL,
  `updated` datetime NOT NULL,
  `delated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee1`
--

INSERT INTO `employee1` (`emp_id`, `name`, `lname`, `email`, `phone`, `Address`, `gen`, `password`, `cpassword`, `updated`, `delated`) VALUES
(9, 'vicky2', 'patel', 'vicky@123gmail.com', 12334545455, 'ahmedabad', 'male', 123233, 1222, '2023-04-20 17:38:46', '2023-04-20 16:26:39'),
(10, 'vinay', 'patel', 'vp@123gmail.com', 122344555, 'rajkot', 'male', 1222, 1222, '2023-04-20 17:43:12', '2023-04-20 16:27:15'),
(12, 'vaibhav', 'patel', 'vp@123gmail.com', 123333, 'vatva', 'male', 123, 123, '2023-04-20 17:43:26', '2023-04-20 17:29:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee1`
--
ALTER TABLE `employee1`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee1`
--
ALTER TABLE `employee1`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
