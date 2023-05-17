-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 10:25 AM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  `cpassword` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gen` varchar(255) DEFAULT NULL,
  `file` varchar(500) NOT NULL,
  `create_dt` datetime NOT NULL,
  `updated_dt` datetime NOT NULL,
  `delete_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `password`, `cpassword`, `address`, `email`, `gen`, `file`, `create_dt`, `updated_dt`, `delete_dt`) VALUES
(24, 'vaibhav1', 'patel', 123, 0, 'vatva', 'vp838728@gmail.com', 'male', 'car-1.jpg', '2023-05-06 17:02:18', '2023-05-09 18:26:04', '2023-05-06 17:02:18'),
(25, 'vaibhav', 'patel', 123, 0, 'vatva', 'vp838728@gmail.com', 'male', 'person_1.jpg', '2023-05-06 17:02:37', '2023-05-09 18:26:26', '2023-05-06 17:02:37'),
(27, 'vicky123', 'patel', 123, 123, '122', 'vp838728@gmail.com', 'male', 'image_3.jpg', '2023-05-09 18:28:34', '2023-05-09 18:29:57', '2023-05-09 18:28:34'),
(28, '', 'vaibahv', 123, 123, 'vatva', 'vp838728@gmail.com', 'male', 'person_1.jpg', '2023-05-09 18:29:24', '2023-05-09 18:29:44', '2023-05-09 18:29:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
