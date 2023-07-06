-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 10:41 AM
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
-- Database: `carrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `anm` varchar(255) DEFAULT NULL,
  `apass` varchar(255) DEFAULT NULL,
  `Cretaed` datetime DEFAULT NULL,
  `Updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `anm`, `apass`, `Cretaed`, `Updated`) VALUES
(1, 'admin', 'c8b2f17833a4c73bb20f88876219ddcd', '2023-04-19 17:14:12', '2023-04-13 17:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `booking1`
--

CREATE TABLE `booking1` (
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `moblie` int(10) NOT NULL,
  `adv_id` int(11) NOT NULL,
  `PICKUPLOCATION` varchar(255) NOT NULL,
  `DESTINATION` varchar(255) NOT NULL,
  `STATE` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated` datetime NOT NULL,
  `deleated_dt` datetime NOT NULL,
  `status` enum('booking sucess','booking panding') NOT NULL DEFAULT 'booking panding'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking1`
--

INSERT INTO `booking1` (`book_id`, `user_id`, `name`, `email`, `moblie`, `adv_id`, `PICKUPLOCATION`, `DESTINATION`, `STATE`, `city`, `created_dt`, `updated`, `deleated_dt`, `status`) VALUES
(25, 46, 'vaibhav', 'vp@123gmail.com', 1213344444, 5, 'vatav', 'rajkot', 'gujart', 'ahmedabd', '2023-04-11 18:31:04', '2023-04-28 18:05:09', '2023-04-28 18:05:09', 'booking sucess'),
(26, 46, 'vaibhav', 'vp@123gmail.com', 1213344444, 5, 'vatav', 'rajkot', 'gujart', 'ahmedabd', '2023-04-19 18:31:15', '2023-04-28 18:05:45', '2023-04-28 18:05:45', 'booking panding'),
(27, 46, 'vaibhav', 'vp@123gmail.com', 1213344444, 5, 'vatav', 'rajkot', 'gujart', 'ahmedabd', '2023-04-17 18:31:24', '2023-04-28 18:05:54', '2023-04-28 18:05:54', 'booking panding'),
(28, 46, 'vaibhav', 'vp@123gmail.com', 1213344444, 5, 'vatav', 'rajkot', 'gujart', 'ahmedabd', '2023-04-04 18:31:36', '2023-04-28 18:06:48', '2023-04-28 18:06:48', 'booking panding'),
(29, 46, 'vaibhav', 'vp@123gmail.com', 12323333, 6, 'vatva', 'surat', 'gujart', 'ahmedabd', '2023-04-29 13:25:30', '2023-04-29 13:25:30', '2023-04-29 13:25:30', 'booking panding'),
(33, 48, 'vicky', 'vp@gmail.com', 2147483647, 6, 'vatva', 'rajkot', 'gujart', 'ahmedabd', '2023-05-02 16:28:49', '2023-05-02 16:28:49', '2023-05-02 16:28:49', 'booking panding'),
(34, 49, 'vicky', 'vp@123gmail.com', 1623843844, 6, 'vatav', 'rajkot', 'gujart', 'ahmedabd', '2023-05-02 18:55:05', '2023-05-02 18:55:05', '2023-05-02 18:55:05', 'booking panding'),
(35, 50, 'vaibhav', 'vp@123gmail.com', 1232442444, 8, 'vatva', 'rajkot', 'gujart', 'ahmedabd', '2023-05-03 13:45:08', '2023-05-03 13:45:08', '2023-05-03 13:45:08', 'booking panding');

-- --------------------------------------------------------

--
-- Table structure for table `caradv`
--

CREATE TABLE `caradv` (
  `adv_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `owner_name` varchar(255) DEFAULT NULL,
  `car_name` varchar(255) DEFAULT NULL,
  `vehical_number` bigint(11) DEFAULT NULL,
  `mobile` bigint(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `deposite` varchar(255) DEFAULT NULL,
  `driver` varchar(255) DEFAULT NULL,
  `charge` varchar(255) DEFAULT NULL,
  `terms_condition` varchar(255) DEFAULT NULL,
  `file` varchar(400) NOT NULL,
  `deleted` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caradv`
--

INSERT INTO `caradv` (`adv_id`, `location_id`, `category_id`, `owner_name`, `car_name`, `vehical_number`, `mobile`, `address`, `deposite`, `driver`, `charge`, `terms_condition`, `file`, `deleted`, `updated`) VALUES
(6, 2, 9, 'vaibhav', 'bmw', 1, 934937344, 'rajkot', '100000', 'Yes', '10000', 'i accept the trems and conditon', 'car-1.jpg', '2023-04-29 13:24:34', '2023-04-29 13:24:34'),
(8, 2, 17, 'vicky', 'bmw', 12, 222343545, 'rajot', '1123333', 'Yes', '12333332', 'i accept the terms and conditon', 'image_3.jpg', '2023-05-02 16:32:04', '2023-05-02 16:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `file` varchar(255) NOT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL,
  `status` enum('block','unblock') NOT NULL DEFAULT 'block'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `file`, `created_dt`, `updated_dt`, `status`) VALUES
(9, 'sedan', 'andrew-mt-fVt15CMcSNA-unsplash.jpg', '2023-04-28 19:49:47', '2023-04-28 19:49:47', 'block'),
(17, 'bmw', 'car-2.jpg', '2023-05-01 15:08:25', '2023-05-01 15:08:25', 'block');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(2555) NOT NULL,
  `msg` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `subject`, `msg`, `created_dt`, `updated_dt`) VALUES
(2, 'vaibhav', 'vp123@gmail.com', 'hii', 'good', '2023-03-29 14:04:10', '2023-03-29 14:04:10'),
(3, 'vicky', '123@gmail.com', 'good', 'good', '2023-03-29 14:05:13', '2023-03-29 14:05:13'),
(8, 'vicky', 'vp@123gmail.com', 'helo', 'hii', '2023-05-02 16:33:06', '2023-05-02 16:33:06'),
(9, 'vicky', 'vp@123gmail.com', 'helo', 'hii', '2023-05-02 16:34:15', '2023-05-02 16:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `cid` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cid`, `Name`) VALUES
(1, 'japan'),
(2, 'india');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  `file` varchar(400) NOT NULL,
  `work` varchar(25) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `status` enum('block','unblock') NOT NULL DEFAULT 'unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `name`, `mobile`, `email`, `address`, `username`, `pass`, `file`, `work`, `created`, `updated`, `status`) VALUES
(35, 'vaibhav', 123323, 'vp@123gmail.com', 'vatav', 'vaibahv', '202cb962ac59075b964b07152d234b70', 'person_1.jpg', 'android developer', '2023-05-04 16:50:30', '2023-05-04 17:23:45', 'unblock'),
(36, 'vaibhav', 1235845946, 'vp@123gmail.com', 'vatva', 'vaibahv', '123', 'person_4.jpg', 'php developer', '2023-05-04 18:41:07', '2023-05-04 18:41:07', 'unblock');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `update_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `name`, `created_dt`, `update_dt`) VALUES
(2, 'rajkot', '2023-04-25 17:39:21', '2023-04-25 17:39:21'),
(4, 'surat', '2023-05-01 13:42:23', '2023-05-01 13:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `adv_id` int(11) DEFAULT NULL,
  `rating` int(25) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `unm` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `gen` varchar(255) DEFAULT NULL,
  `lag` varchar(255) DEFAULT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `cid` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` enum('block','unblock') NOT NULL DEFAULT 'unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`user_id`, `name`, `unm`, `pass`, `gen`, `lag`, `file_upload`, `cid`, `created_at`, `updated_at`, `status`) VALUES
(46, 'vaibhav1', 'vaibahv', '0', 'male', 'HINDI,ENGLISH,Gujarati', 'bg_1.jpg', 1, '2023-04-25 13:59:58', '2023-05-02 18:34:37', 'unblock'),
(49, 'vicky', 'vicky', '28c8edde3d61a0411511d3b1866f0636', 'male', 'HINDI,ENGLISH,Gujarati', 'image_1.jpg', 1, '2023-05-02 18:46:49', '2023-05-02 19:10:44', 'unblock'),
(50, 'vaibhav', 'vaibahv', 'c4ca4238a0b923820dcc509a6f75849b', 'male', 'HINDI,ENGLISH,Gujarati', 'roberto-nickson-hLgYtX0rPgw-unsplash.jpg', 2, '2023-05-03 13:30:57', '2023-05-04 15:21:26', 'unblock'),
(51, 'vivek', 'vivek', '202cb962ac59075b964b07152d234b70', 'male', 'HINDI,ENGLISH,Gujarati', 'person_1.jpg', 2, '2023-05-04 16:46:03', '2023-05-04 16:46:03', 'unblock');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `booking1`
--
ALTER TABLE `booking1`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `adv_id` (`adv_id`);

--
-- Indexes for table `caradv`
--
ALTER TABLE `caradv`
  ADD PRIMARY KEY (`adv_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `adv_id` (`adv_id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking1`
--
ALTER TABLE `booking1`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `caradv`
--
ALTER TABLE `caradv`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `caradv`
--
ALTER TABLE `caradv`
  ADD CONSTRAINT `caradv_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `caradv_ibfk_2` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user1` (`user_id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`adv_id`) REFERENCES `caradv` (`adv_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
