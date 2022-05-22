-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 08:08 PM
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
  `PCondition` varchar(128) NOT NULL,
  `Category` enum('Male Shirt','Male Trousers','Male Jacket','Female Shirt','Female Skirt','Female Jacket') NOT NULL,
  `image_1` blob NOT NULL,
  `image_2` blob NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`u_id`, `PName`, `Brand`, `Fabric`, `Quality`, `Size`, `Price`, `PCondition`, `Category`, `image_1`, `image_2`, `date_time`) VALUES
(4, 'Jacket', 'YSL', 'Leather', 'Very nicw', 'Medium', 56565, 'New', 'Male Jacket', 0x6a61636b6574312e6a7067, 0x6a61636b6574322e6a7067, '2022-05-19 22:09:49'),
(7, 'Jacket 2', 'Woodland', 'Polyester', 'Very Good', 'Medium', 1200, 'Still Fine yah', 'Male Jacket', 0x6a61636b6574322e6a7067, 0x6d616c655f63617465676f72792e6a7067, '2022-05-22 16:22:54'),
(8, 'Skirt1', 'Adidas', 'Cotton', 'OK', 'Small', 500, 'Brand New', 'Female Skirt', 0x6c6f676f2e6a7067, 0x66656d616c655f63617465676f72792e6a7067, '2022-05-22 17:17:32'),
(9, 'Shirt1', 'DIOR', 'Wool', 'dripppin', 'Extra Small', 249, 'kinda old tho', 'Male Shirt', 0x6c6f676f2e6a7067, 0x66656d616c655f63617465676f72792e6a7067, '2022-05-22 17:18:33'),
(10, 'Shirt2', 'YSL', 'Polyester', 'Very Good', 'Extra Large', 2000, 'New', '', '', '', '2022-05-22 17:19:08'),
(11, 'Trouser', 'Nike', 'Cotton', 'Very Good', 'Large', 1350, 'New', 'Male Trousers', '', '', '2022-05-22 17:20:02'),
(12, 'Trouser1', 'Balenciaga', 'Plastic', 'Smooth', 'Small', 4000, 'Brand New', 'Male Trousers', '', '', '2022-05-22 17:21:01');

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
(7, 'Zeph', 'Khongjee', '$2y$10$qYRhTYsMl3kgMwM51Lkf2O2gprR1.zMn2fsW.XvzMkR9BOVOWKFXi', 'zeph@gmail.com', 'Male', 1234567890, 'Here mate', 123456, 'Seller', '2022-05-19 21:35:38'),
(8, 'Mardon', 'Synrem', '$2y$10$HDI5FUDEN53vy09NfIJGhOVTpYS642F.whx/uETa34iGgvDOTMve.', 'mardon@gmail.com', 'Male', 123, 'asd', 1234, 'Buyer', '2022-05-19 22:20:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`u_id`);

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
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
