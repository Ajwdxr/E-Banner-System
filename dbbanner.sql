-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 11:41 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbchantek`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `order_id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `product_id` int(100) NOT NULL,
  `order_date` date NOT NULL,
  `order_pickup_date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`order_id`, `username`, `product_id`, `order_date`, `order_pickup_date`, `quantity`, `status`) VALUES
(1, 'fitry', 1, '2018-04-09', '2018-04-15', 2, 'Process'),
(2, 'tina', 3, '2018-04-07', '2018-04-19', 2, 'Process'),
(5, 'tina', 4, '2018-04-08', '2018-04-24', 1, 'Process');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(100) NOT NULL AUTO_INCREMENT,
  `class_no` varchar(10) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `class_description` varchar(250) NOT NULL,
  `class_date` date NOT NULL,
  `class_time` time NOT NULL,
  `class_price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_no`, `class_name`, `class_description`, `class_date`, `class_time`, `class_price`) VALUES
(1, 'CBC0100', 'Old Time Favourite Baking Workshop', 'Strawberry Cake, Nutty Nutella Cake, Chocolate Orange Cake', '2018-04-07', '09:00:00', 300.00),
(2, 'CBC0101', 'Slice Cakes Baking Workshop', 'Manggo Milkshake Cake, Milky Passionfruit Cake, Milo Tabur Cake, Coconut Chocolait Cake', '0000-00-00', '00:00:00', 250.00),
(3, 'CBB0100', 'Teatime Treats Baking Workshop', 'Frambozen Kenari, Nutella Cheese Tart, Double \r\nTrouble Choc Cookies, Nutella Gunung Berapi, \r\nBerries Tart		 		 ', '2018-04-24', '14:00:00', 290.00),
(4, 'CBB0101', 'Cup Cakes Baking Workshop', 'Apam Balik CUpcakes, Sirap Bandung Cupcakes, Pandan Kaya Cupcakes', '0000-00-00', '00:00:00', 300.00),
(5, 'CBC0102', 'Modern Crunch Baking Workshop', 'Suji Oreo, Ombak Rindu, Cornflake Crunchy, Milky Chocolate Oat, Red Velvet Cookies, Butter Cookies', '0000-00-00', '02:00:00', 330.00),
(6, 'CBB0103', 'Old School Biskut Raya Workshop', '		 Tart, SAmprit, Biskut Kelapa, \r\nBiskut Kacang, Dahlia, Makmur		 ', '0000-00-00', '09:30:00', 330.00),
(7, 'CBC0103', 'Classic Cake Baking Workshop', 'Victoria Sandwish Cake, Pandan Nisang Cake, Tokma Carrot Cake, Humming Bird Cake', '2018-04-28', '09:30:00', 330.00);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `level_id` int(10) NOT NULL AUTO_INCREMENT,
  `level_description` varchar(50) NOT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `level_description`) VALUES
(1, 'Admin'),
(2, 'Staff'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(20) NOT NULL,
  `product_description` varchar(150) NOT NULL,
  `product_status` varchar(20) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_no` varchar(10) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`, `product_status`, `product_category`, `product_no`, `product_price`) VALUES
(1, 'Victoria Sandwich', 'Buttery, tender spongecake with a dollop of sweetened whipped cream, layered with fresh strawberry jem', 'Available', 'Whole Cake', 'CF0125', 120.00),
(3, 'Butter Cookies', 'crispy buttery cookies ', 'Not Avaiable', 'Cookies', 'CB9876', 5.00),
(4, 'Carrot Cake', 'Moist and flavourful with grated carrots and topped with a delicious cream cheese icing', 'Available', 'Whole Cake', 'CF0124', 120.00),
(5, 'Pandan Kaya Cheese', 'Fluffy sponge cake fill with smooth flavorful pandan kaya cheese ', 'Available', 'Whole Cake', 'CP0128', 130.00);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `register_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `register_date` date NOT NULL,
  `deposit` decimal(10,2) NOT NULL,
  `register_status` varchar(50) NOT NULL,
  PRIMARY KEY (`register_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`register_id`, `class_id`, `username`, `register_date`, `deposit`, `register_status`) VALUES
(1, 1, 'nadrah', '2018-03-21', 300.00, 'Complete'),
(24, 7, 'tina', '2018-04-08', 100.00, 'In Process');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` int(2) NOT NULL,
  `address` varchar(100) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `level_id` int(10) NOT NULL,
  `picture` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `gender`, `address`, `telephone`, `level_id`, `picture`) VALUES
('aafiyah', 'aafiyah', 'SITI AAFIYAH', 2, 'NO1, JALAN BUJANG 12, TAMAN LEMBAH BUJANG,  08400 MERBOK, SUNGAI PETANI, KEDAH', '012-123456', 1, 'Desert.jpg'),
('ahmad', 'ahmad', 'AHMAD FATIH', 1, 'NO 7, KAMPUNG PENANG, PULAU PINANG', '017-354126', 2, 'algorithm.jpg'),
('fitry', 'fitry', 'FITRY HAMID', 3, 'NO 9, TAMAN HARUM, PERLIS', '0178989895', 3, 'Tulips.jpg'),
('nadrah', 'nadrah', 'Nadrah Nazri', 2, 'NO23, JALAN SELASIH 3,\r\nTAMAN BUNGA,\r\n81131 JOHOR BAHRU, JOHOR', '0127897892', 3, 'Chrysanthemum.jpg'),
('tina', 'tina', 'Tina Sofea', 2, '12 Jalan Bahagia, Taman Sejahtera, Sungai Petani, Kedah', '0123456788', 3, '1-nUZTZdDBKuci35Ss42bhbQ.jpeg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
