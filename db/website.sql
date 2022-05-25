-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 09:41 PM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `u_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `o_id` int(11) NOT NULL,
  `Status` enum('Not Delivered','Delivered') NOT NULL,
  `Type` enum('Self Pickup','Shipping') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `u_id` int(10) NOT NULL,
  `path` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `p_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `PName` varchar(50) NOT NULL,
  `Brand` varchar(32) NOT NULL,
  `Fabric` varchar(16) NOT NULL,
  `Quality` varchar(50) NOT NULL,
  `Size` enum('Extra Extra Small','Extra Small','Small','Medium','Large','Extra Large','Extra Extra Large') NOT NULL,
  `Price` float NOT NULL,
  `PCondition` varchar(128) NOT NULL,
  `Category` enum('Male Shirt','Male Trousers','Male Jacket','Female Shirt','Female Skirt','Female Jacket') NOT NULL,
  `image_1` varchar(512) NOT NULL,
  `image_2` varchar(512) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`p_id`, `u_id`, `PName`, `Brand`, `Fabric`, `Quality`, `Size`, `Price`, `PCondition`, `Category`, `image_1`, `image_2`, `date_time`) VALUES
(9, 10, 'Shirt', 'Brandless', 'Cotton', 'Smooth', 'Large', 230, 'Brand New', 'Male Shirt', 'dior.png', 'adidas.jpg', '2022-05-25 21:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `Street` varchar(256) NOT NULL,
  `PIN` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `pay_type` enum('COD','ONLINE') NOT NULL,
  `pay_amt` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `store_name` varchar(32) NOT NULL,
  `Street` varchar(256) NOT NULL,
  `PIN` int(6) NOT NULL
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
(10, 'Zeph', 'Khongjee', '$2y$10$150KiYuHNrAOx.T7ZpcZIu9JZzzQRb2a3DLNAbwSqd0AZuQr0DYL6', 'zeph@gmail.com', 'Male', 12345678, 'Hrer', 123456, 'Seller', '2022-05-22 21:34:28'),
(11, 'Mardon', 'Synrem', '$2y$10$vPJhF3Yk8L.0oXgkcCpzdeDWxzzFhj93frAYbGF1GKgSuAtZ7FQb.', 'mardon@gmail.com', 'Other', 1234509876, 'There', 123654, 'Buyer', '2022-05-22 21:35:05'),
(12, 'Zach', 'Khongjee', '$2y$10$CsSL4EfIlQYZbf2U3z6QbOv0P9axKhVS4MykKtGnMtr/TLChKiAYO', 'zach@gmail.com', 'Male', 2147483647, 'IING', 793002, 'Seller', '2022-05-25 17:23:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `u_id` (`u_id`,`p_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD KEY `o_id` (`o_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `u_id` (`u_id`,`p_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`),
  ADD KEY `u_id` (`u_id`);

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
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `items` (`p_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`);

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`o_id`) REFERENCES `orders` (`o_id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `items` (`p_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`);

--
-- Constraints for table `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `store_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
