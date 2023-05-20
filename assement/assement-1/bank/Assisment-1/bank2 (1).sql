-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 11:47 AM
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
-- Database: `bank2`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `create_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `user_ID`, `amount`, `create_dt`) VALUES
(4, 1, '1000', '2023-05-02 15:19:43'),
(5, 1, '100', '2023-05-02 15:20:09'),
(6, 1, '12', '2023-05-02 15:21:55'),
(7, 1, '12', '2023-05-02 15:22:51'),
(8, 1, '', '2023-05-02 15:22:55'),
(9, 2, '1300', '2023-05-19 17:08:54'),
(10, 2, '1300', '2023-05-19 17:10:53'),
(11, 2, '1300', '2023-05-19 17:11:13'),
(12, 2, '1300', '2023-05-19 17:16:02'),
(13, 2, '1322', '2023-05-19 17:16:57'),
(14, 2, '1322', '2023-05-19 17:17:27'),
(15, 2, '1322', '2023-05-19 17:18:00'),
(16, 0, '1200', '2023-05-19 17:24:50'),
(17, 0, '1200', '2023-05-19 17:26:18'),
(18, 0, '1200', '2023-05-19 17:27:57'),
(19, 0, '1200', '2023-05-19 17:28:46'),
(20, 0, '1200', '2023-05-19 17:31:05'),
(21, 2, '1200', '2023-05-19 17:31:43'),
(22, 2, '1100', '2023-05-19 17:32:15'),
(23, 2, '1000', '2023-05-19 17:32:29'),
(25, 2, '1300', '2023-05-19 17:45:00'),
(26, 2, '1100', '2023-05-19 17:47:02'),
(27, 2, '100', '2023-05-19 17:47:28'),
(29, 2, '200', '2023-05-19 17:49:13'),
(30, 2, '1400', '2023-05-19 19:23:23'),
(31, 2, '1200', '2023-05-19 19:24:20'),
(32, 2, '1078', '2023-05-20 14:57:24'),
(33, 2, '2301', '2023-05-20 14:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `user_ID` int(11) NOT NULL,
  `UNM` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `accounttype` varchar(255) NOT NULL,
  `accountno` int(11) NOT NULL,
  `balnce` int(12) NOT NULL,
  `updated` datetime NOT NULL,
  `delated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`user_ID`, `UNM`, `pass`, `name`, `email`, `address`, `phone`, `accounttype`, `accountno`, `balnce`, `updated`, `delated`) VALUES
(2, 'vaibahv', '202cb962ac59075b964b07152d234b70', 'vaibhav2', 'vp@123gmail.com', 'rajkot', 123333333, 'Credit Card Account', 222222, 2301, '2023-05-20 14:16:57', '2023-04-21 16:30:36'),
(3, 'vicky1', 'c4ca4238a0b923820dcc509a6f75849b', 'vicky1', 'vicky@gmail.com', 'rajkot', 123444445, 'Savings Account', 123256666, 1200, '2023-05-20 14:16:33', '2023-05-02 19:08:18'),
(5, 'vicky', '202cb962ac59075b964b07152d234b70', 'vaibhav', 'cashier@cashier.com', 'vatva', 2147483647, 'Savings Account', 2147483647, 1233, '2023-05-20 13:41:42', '2023-05-20 13:41:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
