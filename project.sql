-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2016 at 02:14 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `district` varchar(120) NOT NULL,
  `city` varchar(120) NOT NULL,
  `area` varchar(120) NOT NULL,
  `holding_number` varchar(120) NOT NULL,
  `road_number` varchar(120) NOT NULL,
  `property_name` varchar(120) NOT NULL,
  `post_office` varchar(120) NOT NULL,
  `zip_code` int(120) NOT NULL,
  `flat_number` varchar(120) NOT NULL,
  PRIMARY KEY (`address_id`),
  KEY `apartment_id` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `apartment_id`, `district`, `city`, `area`, `holding_number`, `road_number`, `property_name`, `post_office`, `zip_code`, `flat_number`) VALUES
(2, 3, 'sd', 'Dhaka', 'Banani', '5', '6', 'f', 'd', 67, '6'),
(3, 4, 'fg', 'Chittagong', 'Dampara', '5', '6', ',kghkl', 'd', 67, '6'),
(6, 7, 'df', 'Rajshahi', 'Mohanpur', '4', '4', 'df', 'e', 67, '7');

-- --------------------------------------------------------

--
-- Table structure for table `apartment`
--

CREATE TABLE IF NOT EXISTS `apartment` (
  `apartment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL,
  `floor_no` int(11) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `property_price` varchar(50) NOT NULL,
  `num_of_bedroom` int(11) NOT NULL,
  `num_of_bathroom` int(11) NOT NULL,
  PRIMARY KEY (`apartment_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`apartment_id`, `user_id`, `size`, `floor_no`, `property_type`, `property_price`, `num_of_bedroom`, `num_of_bathroom`) VALUES
(1, 1, '25', 2, 'rent', '12000', 3, 2),
(3, 2, '500', 5, 'family', '5000', 2, 1),
(4, 2, '505', 3, 'family', '5050', 7, 5),
(5, 2, '501', 2, 'family', '5000', 2, 2),
(6, 2, '500', 10, 'family', '20000', 1, 1),
(7, 2, '502', 5, 'family', '5010', 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE IF NOT EXISTS `feature` (
  `feature_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `service_charge` int(11) NOT NULL,
  `garage` varchar(60) NOT NULL,
  `lift` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `availability` date NOT NULL,
  PRIMARY KEY (`feature_id`),
  KEY `apartment_id` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`feature_id`, `apartment_id`, `service_charge`, `garage`, `lift`, `description`, `availability`) VALUES
(1, 1, 500, 'yes', 'yes', 'dfhgjf', '2012-03-16'),
(3, 3, 10, 'Yes', 'Yes', 'ft', '2014-02-09'),
(4, 4, 60, 'Yes', 'Yes', 'ft', '2014-02-09'),
(5, 5, 180, 'Yes', 'Yes', 're', '2014-02-09'),
(6, 6, 10, 'yes', 'yes', 'ft', '2016-05-30'),
(7, 7, 20, 'Yes', 'Yes', 'hj', '2014-02-09');

-- --------------------------------------------------------

--
-- Table structure for table `filter`
--

CREATE TABLE IF NOT EXISTS `filter` (
  `apartment_id` int(11) NOT NULL,
  `area` varchar(120) NOT NULL,
  `property_type` varchar(120) NOT NULL,
  `size` int(11) NOT NULL,
  `property_price` int(11) NOT NULL,
  `number_of_bedroom` int(11) NOT NULL,
  KEY `apartment_id` (`apartment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gives`
--

CREATE TABLE IF NOT EXISTS `gives` (
  `user_id` int(11) NOT NULL,
  `apartment_id` int(11) NOT NULL,
  KEY `apartment_id` (`apartment_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `livingroom_image` varchar(200) NOT NULL,
  `bedroom_image` varchar(200) NOT NULL,
  `building_image` varchar(200) NOT NULL,
  PRIMARY KEY (`image_id`),
  KEY `apartment_id` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `apartment_id`, `livingroom_image`, `bedroom_image`, `building_image`) VALUES
(1, 6, 'Tulips.jpg', 'Desert.jpg', 'Lighthouse.jpg'),
(2, 7, 'home.jpg', 'image.jpg', 'images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` varchar(120) NOT NULL,
  PRIMARY KEY (`review_id`),
  KEY `apartment_id` (`apartment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `national_id` int(11) NOT NULL,
  `address` varchar(120) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `email`, `phone_number`, `national_id`, `address`) VALUES
(1, 'hfgdh', '123', 'fghfd@fsdf.com', 123, 133, 'gtjgjggh'),
(2, 'israt', '123', 'a@yahoo.com', 567, 0, ''),
(3, 'Sabrina', 'joesha', 'sabrina@gmail.com', 1976476677, 2147483647, 'Khulna');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`);

--
-- Constraints for table `apartment`
--
ALTER TABLE `apartment`
  ADD CONSTRAINT `apartment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `feature`
--
ALTER TABLE `feature`
  ADD CONSTRAINT `feature_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`);

--
-- Constraints for table `filter`
--
ALTER TABLE `filter`
  ADD CONSTRAINT `filter_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`);

--
-- Constraints for table `gives`
--
ALTER TABLE `gives`
  ADD CONSTRAINT `gives_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `gives_ibfk_2` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
