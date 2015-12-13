-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2015 at 05:32 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bicycle_rent_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_brand`
--

CREATE TABLE IF NOT EXISTS `bicycle_brand` (
`id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bicycle_brand`
--

INSERT INTO `bicycle_brand` (`id`, `name`) VALUES
(3, 'Bianchi'),
(8, 'Cervelo'),
(2, 'Fuji'),
(4, 'Giant'),
(7, 'Salsa'),
(5, 'Specialized'),
(1, 'Trek');

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_disposal`
--

CREATE TABLE IF NOT EXISTS `bicycle_disposal` (
  `outlet_id` int(10) NOT NULL,
  `bicycle_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_info`
--

CREATE TABLE IF NOT EXISTS `bicycle_info` (
`id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `brand_id` int(10) NOT NULL,
  `type_id` int(10) NOT NULL,
  `gear_number` int(1) NOT NULL,
  `wheel_size` int(2) NOT NULL,
  `rent_price_hour` decimal(10,0) NOT NULL,
  `rent_discount_hour` int(2) NOT NULL,
  `rent_discount_percent` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_outlet`
--

CREATE TABLE IF NOT EXISTS `bicycle_outlet` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_outlet_user_info`
--

CREATE TABLE IF NOT EXISTS `bicycle_outlet_user_info` (
`id` int(10) NOT NULL,
  `first_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bicycle_outlet_id` int(10) NOT NULL,
  `user_role_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_rental_order`
--

CREATE TABLE IF NOT EXISTS `bicycle_rental_order` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_type`
--

CREATE TABLE IF NOT EXISTS `bicycle_type` (
`id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bicycle_type`
--

INSERT INTO `bicycle_type` (`id`, `name`) VALUES
(3, 'City'),
(1, 'Road'),
(2, 'Touring'),
(4, 'Trekking');

-- --------------------------------------------------------

--
-- Table structure for table `discount_rate`
--

CREATE TABLE IF NOT EXISTS `discount_rate` (
  `hour` int(11) NOT NULL,
  `discount_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outlet_customer`
--

CREATE TABLE IF NOT EXISTS `outlet_customer` (
`id` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
`id` int(10) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bicycle_brand`
--
ALTER TABLE `bicycle_brand`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `U_bicycle_brand_name` (`name`);

--
-- Indexes for table `bicycle_disposal`
--
ALTER TABLE `bicycle_disposal`
 ADD KEY `FK_bicycle_disposal_outlet_id` (`outlet_id`), ADD KEY `FK_bicycle_disposal_bicycle_id` (`bicycle_id`);

--
-- Indexes for table `bicycle_info`
--
ALTER TABLE `bicycle_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `U_bicycle_info` (`name`,`brand_id`,`type_id`,`gear_number`,`wheel_size`), ADD KEY `FK_brand_id` (`brand_id`), ADD KEY `FK_bicyle_type_id` (`type_id`);

--
-- Indexes for table `bicycle_outlet`
--
ALTER TABLE `bicycle_outlet`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `U_bicycle_outlet` (`name`,`address`);

--
-- Indexes for table `bicycle_outlet_user_info`
--
ALTER TABLE `bicycle_outlet_user_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`), ADD KEY `FK_bicycle_outlet_user_info_bicycle_outlet_id` (`bicycle_outlet_id`), ADD KEY `FK_bicycle_outlet_user_info_user_role_id` (`user_role_id`);

--
-- Indexes for table `bicycle_rental_order`
--
ALTER TABLE `bicycle_rental_order`
 ADD PRIMARY KEY (`id`), ADD KEY `FK_bicyle_rental_order_outlet_customer_id` (`outlet_customer_id`), ADD KEY `FK_bicyle_rental_order_bicycle_info_id` (`bicycle_info_id`), ADD KEY `id` (`id`,`rented_bicycle_outlet_user_id`,`outlet_customer_id`,`bicycle_info_id`,`rented_time`,`returned_bicycle_outlet_user_id`,`returned_time`,`hour_discount`,`sum_before_discount`,`total_order_sum`), ADD KEY `FK_bicyle_rental_order_rented_bicycle_outlet_user_id` (`rented_bicycle_outlet_user_id`), ADD KEY `FK_bicyle_rental_order_returned_bicycle_outlet_user_id` (`returned_bicycle_outlet_user_id`);

--
-- Indexes for table `bicycle_type`
--
ALTER TABLE `bicycle_type`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `U_bicycle_type` (`name`);

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
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bicycle_brand`
--
ALTER TABLE `bicycle_brand`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bicycle_info`
--
ALTER TABLE `bicycle_info`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
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
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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
