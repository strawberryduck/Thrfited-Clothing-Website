-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 08:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `u_id` int(10) NOT NULL,
  `PName` varchar(50) NOT NULL,
  `Brand` varchar(32) NOT NULL,
  `Fabric` varchar(16) NOT NULL,
  `Quality` varchar(50) NOT NULL,
  `Size` enum('Extra Extra Small','Extra Small','Small','Medium','Large','Extra Large','Extra Extra Large') NOT NULL,
  `Price` float NOT NULL,
  `Condition` varchar(128) NOT NULL,
  `Category` enum('Male Shirt','Male Trousers','Male Jacket','Female Shirt','Female Skirt','Female Jacket') NOT NULL,
  `image_1` blob NOT NULL,
  `image_2` blob NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(10) NOT NULL,
  `FName` varchar(16) NOT NULL,
  `LName` varchar(16) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `C_no` int(10) NOT NULL,
  `street` varchar(256) NOT NULL,
  `pin` int(6) NOT NULL,
  `u_type` enum('Buyer','Seller') NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `FName`, `LName`, `password`, `email`, `gender`, `C_no`, `street`, `pin`, `u_type`, `date_time`) VALUES
(1, 'Zephaniah', 'Khongjee', '$2y$10$wJHMpUrDqMxmg1K/RW8DO.S4v', 'zeph@gmail.com', 'Male', 1234567890, 'Here', 123456, 'Buyer', '2022-05-19 20:50:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `C_no` (`C_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
