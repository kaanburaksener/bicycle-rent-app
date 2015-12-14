-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2015 at 11:46 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bicycle_rent_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_brand`
--

CREATE TABLE `bicycle_brand` (
  `id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bicycle_brand`
--

INSERT INTO `bicycle_brand` (`id`, `name`) VALUES
(3, 'Bianchi'),
(10, 'Cannondale'),
(8, 'Cervelo'),
(2, 'Fuji'),
(4, 'Giant'),
(9, 'Helkama'),
(6, 'Hercules'),
(7, 'Salsa'),
(5, 'Specialized'),
(1, 'Trek');

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_disposal`
--

CREATE TABLE `bicycle_disposal` (
  `outlet_id` int(10) NOT NULL,
  `bicycle_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_info`
--

CREATE TABLE `bicycle_info` (
  `id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `brand_id` int(10) NOT NULL,
  `type_id` int(10) NOT NULL,
  `gear_number` int(1) NOT NULL,
  `wheel_size` int(2) NOT NULL,
  `rent_price_hour` decimal(10,0) NOT NULL,
  `rent_discount_hour` int(2) NOT NULL,
  `rent_discount_percent` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bicycle_info`
--

INSERT INTO `bicycle_info` (`id`, `name`, `brand_id`, `type_id`, `gear_number`, `wheel_size`, `rent_price_hour`, `rent_discount_hour`, `rent_discount_percent`) VALUES
(1, '520', 1, 2, 9, 26, '200', 10, 10),
(2, 'Shift 2', 1, 3, 7, 26, '150', 10, 10),
(3, 'Madone 9.9', 1, 1, 11, 27, '250', 5, 10),
(4, 'Transonic SL', 2, 1, 11, 27, '300', 6, 10),
(5, 'Rakan 29 1.5', 2, 4, 10, 29, '300', 5, 15),
(6, 'Absolute 2.1', 2, 3, 8, 27, '200', 3, 10),
(7, 'Intenso Ultegra', 3, 1, 11, 27, '320', 5, 15),
(8, 'Kuma 29.2 Acera/Altus 3x9', 3, 4, 9, 29, '300', 9, 15),
(9, 'Pista', 3, 2, 1, 27, '150', 4, 5),
(10, 'Cypress', 4, 3, 7, 27, '100', 10, 15),
(11, 'FastRoad CoMax', 4, 1, 10, 27, '400', 10, 10),
(12, 'AnyRoad', 4, 4, 9, 27, '260', 10, 15),
(13, 'S-Works Stumpjumper Di2', 5, 4, 11, 29, '300', 6, 10),
(14, 'Venge Expert', 5, 1, 11, 27, '250', 7, 10),
(15, 'P.Slope', 5, 5, 1, 26, '200', 6, 15),
(16, 'Dynamite RF', 6, 4, 1, 27, '350', 9, 15),
(17, 'Wayfinder', 6, 3, 7, 26, '200', 5, 5),
(18, 'Popular DX', 6, 3, 1, 27, '150', 6, 10),
(19, 'Deadwood X9', 7, 2, 1, 29, '300', 4, 5),
(20, 'Warbird Carbon', 7, 1, 11, 27, '300', 4, 10),
(21, 'Spearfish 2', 7, 4, 11, 29, '300', 5, 10),
(22, 'R2', 8, 1, 11, 27, '350', 4, 10),
(23, 'S3', 8, 2, 11, 27, '200', 7, 20),
(24, 'P5', 8, 2, 11, 27, '400', 5, 15),
(25, 'jopo', 9, 3, 1, 24, '100', 10, 20),
(26, 'XS-1', 9, 4, 24, 26, '250', 7, 10),
(27, 'Ainotar', 9, 3, 3, 28, '150', 5, 15),
(28, 'Supersix EVO', 10, 1, 11, 27, '400', 6, 5),
(29, 'Jekyll 27.5', 10, 4, 1, 29, '300', 6, 10),
(30, 'Contro', 10, 3, 7, 27, '200', 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_outlet`
--

CREATE TABLE `bicycle_outlet` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_outlet_user_info`
--

CREATE TABLE `bicycle_outlet_user_info` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bicycle_outlet_id` int(10) NOT NULL,
  `user_role_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_rental_order`
--

CREATE TABLE `bicycle_rental_order` (
  `id` int(10) NOT NULL,
  `rented_bicycle_outlet_user_id` int(10) NOT NULL,
  `outlet_customer_id` int(10) NOT NULL,
  `bicycle_info_id` int(10) NOT NULL,
  `rented_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `returned_bicycle_outlet_user_id` int(10) NOT NULL,
  `returned_time` timestamp NULL DEFAULT NULL,
  `hour_discount` int(2) DEFAULT NULL,
  `sum_before_discount` decimal(10,0) DEFAULT NULL,
  `total_order_sum` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_type`
--

CREATE TABLE `bicycle_type` (
  `id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bicycle_type`
--

INSERT INTO `bicycle_type` (`id`, `name`) VALUES
(5, 'BMX'),
(3, 'City'),
(1, 'Road'),
(2, 'Touring'),
(4, 'Trekking');

-- --------------------------------------------------------

--
-- Table structure for table `discount_rate`
--

CREATE TABLE `discount_rate` (
  `hour` int(11) NOT NULL,
  `discount_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outlet_customer`
--

CREATE TABLE `outlet_customer` (
  `id` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(10) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bicycle_brand`
--
ALTER TABLE `bicycle_brand`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `U_bicycle_brand_name` (`name`);

--
-- Indexes for table `bicycle_disposal`
--
ALTER TABLE `bicycle_disposal`
  ADD KEY `FK_bicycle_disposal_outlet_id` (`outlet_id`),
  ADD KEY `FK_bicycle_disposal_bicycle_id` (`bicycle_id`);

--
-- Indexes for table `bicycle_info`
--
ALTER TABLE `bicycle_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `U_bicycle_info` (`name`,`brand_id`,`type_id`,`gear_number`,`wheel_size`),
  ADD KEY `FK_brand_id` (`brand_id`),
  ADD KEY `FK_bicyle_type_id` (`type_id`);

--
-- Indexes for table `bicycle_outlet`
--
ALTER TABLE `bicycle_outlet`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `U_bicycle_outlet` (`name`,`address`);

--
-- Indexes for table `bicycle_outlet_user_info`
--
ALTER TABLE `bicycle_outlet_user_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `FK_bicycle_outlet_user_info_bicycle_outlet_id` (`bicycle_outlet_id`),
  ADD KEY `FK_bicycle_outlet_user_info_user_role_id` (`user_role_id`);

--
-- Indexes for table `bicycle_rental_order`
--
ALTER TABLE `bicycle_rental_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_bicyle_rental_order_outlet_customer_id` (`outlet_customer_id`),
  ADD KEY `FK_bicyle_rental_order_bicycle_info_id` (`bicycle_info_id`),
  ADD KEY `id` (`id`,`rented_bicycle_outlet_user_id`,`outlet_customer_id`,`bicycle_info_id`,`rented_time`,`returned_bicycle_outlet_user_id`,`returned_time`,`hour_discount`,`sum_before_discount`,`total_order_sum`),
  ADD KEY `FK_bicyle_rental_order_rented_bicycle_outlet_user_id` (`rented_bicycle_outlet_user_id`),
  ADD KEY `FK_bicyle_rental_order_returned_bicycle_outlet_user_id` (`returned_bicycle_outlet_user_id`);

--
-- Indexes for table `bicycle_type`
--
ALTER TABLE `bicycle_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `U_bicycle_type` (`name`);

--
-- Indexes for table `discount_rate`
--
ALTER TABLE `discount_rate`
  ADD UNIQUE KEY `hour` (`hour`);

--
-- Indexes for table `outlet_customer`
--
ALTER TABLE `outlet_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bicycle_brand`
--
ALTER TABLE `bicycle_brand`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `bicycle_info`
--
ALTER TABLE `bicycle_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `bicycle_outlet`
--
ALTER TABLE `bicycle_outlet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bicycle_outlet_user_info`
--
ALTER TABLE `bicycle_outlet_user_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bicycle_rental_order`
--
ALTER TABLE `bicycle_rental_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bicycle_type`
--
ALTER TABLE `bicycle_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `outlet_customer`
--
ALTER TABLE `outlet_customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bicycle_disposal`
--
ALTER TABLE `bicycle_disposal`
  ADD CONSTRAINT `FK_bicycle_disposal_bicycle_id` FOREIGN KEY (`bicycle_id`) REFERENCES `bicycle_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_bicycle_disposal_outlet_id` FOREIGN KEY (`outlet_id`) REFERENCES `bicycle_outlet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bicycle_info`
--
ALTER TABLE `bicycle_info`
  ADD CONSTRAINT `FK_bicyle_type_id` FOREIGN KEY (`type_id`) REFERENCES `bicycle_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_brand_id` FOREIGN KEY (`brand_id`) REFERENCES `bicycle_brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bicycle_outlet_user_info`
--
ALTER TABLE `bicycle_outlet_user_info`
  ADD CONSTRAINT `FK_bicycle_outlet_user_info_bicycle_outlet_id` FOREIGN KEY (`bicycle_outlet_id`) REFERENCES `bicycle_outlet` (`id`),
  ADD CONSTRAINT `FK_bicycle_outlet_user_info_user_role_id` FOREIGN KEY (`user_role_id`) REFERENCES `user_role` (`id`);

--
-- Constraints for table `bicycle_rental_order`
--
ALTER TABLE `bicycle_rental_order`
  ADD CONSTRAINT `FK_bicyle_rental_order_bicycle_info_id` FOREIGN KEY (`bicycle_info_id`) REFERENCES `bicycle_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_bicyle_rental_order_outlet_customer_id` FOREIGN KEY (`outlet_customer_id`) REFERENCES `outlet_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_bicyle_rental_order_rented_bicycle_outlet_user_id` FOREIGN KEY (`rented_bicycle_outlet_user_id`) REFERENCES `bicycle_outlet_user_info` (`id`),
  ADD CONSTRAINT `FK_bicyle_rental_order_returned_bicycle_outlet_user_id` FOREIGN KEY (`returned_bicycle_outlet_user_id`) REFERENCES `bicycle_outlet_user_info` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
