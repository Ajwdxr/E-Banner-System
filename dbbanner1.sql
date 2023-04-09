-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2019 at 08:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbanner`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `webNo` varchar(10) NOT NULL,
  `webID` int(100) NOT NULL,
  `webRes` varchar(100) NOT NULL,
  `webDesc` varchar(250) NOT NULL,
  `webApplyDate` date NOT NULL,
  `webEventDate` date NOT NULL,
  `webImg` varchar(100) NOT NULL,
  `webStatus` varchar(15) NOT NULL,
  `webComment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`webNo`, `webID`, `webRes`, `webDesc`, `webApplyDate`, `webEventDate`, `webImg`, `webStatus`, `webComment`) VALUES
('', 50, '700px x 400px', 'hari raya ajwa', '2019-06-21', '0000-00-00', '5.jpg', 'Pending', 'xsesuai');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(10) NOT NULL,
  `level_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `product` (
  `bannerID` int(100) NOT NULL,
  `bannerSize` varchar(20) NOT NULL,
  `bannerDesc` varchar(150) NOT NULL,
  `bannerLocation` varchar(20) NOT NULL,
  `bannerApplyDate` varchar(50) NOT NULL,
  `bannerEventDate` varchar(10) NOT NULL,
  `bannerImg` varchar(100) NOT NULL,
  `bannerStatus` varchar(10) NOT NULL,
  `bannerComment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`bannerID`, `bannerSize`, `bannerDesc`, `bannerLocation`, `bannerApplyDate`, `bannerEventDate`, `bannerImg`, `bannerStatus`, `bannerComment`) VALUES
(15, '15x10', 'Konvokesyen', 'Pintu Masuk Pertama', '2019-06-14', '', '6.jpg', 'Rejected', 'Berjaya'),
(16, '15 x 10', 'CSR ', 'Persimpangan Dataran', '2019-06-14', '2019-06-21', '3.jpg', 'Rejected', 'Tulisan tidak jelas'),
(17, '15 x 25', 'Selangkah ke Uitm', 'Main Gate', '2019-06-15', '2019-06-22', '8.jpg', 'Pending', 'Dalam Proses'),
(18, '10 x 10', 'Dai&#039;e Syed', 'Pintu Masuk Pertama', '2019-06-26', '2019-06-22', '7.jpg', 'Approved', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `level_id` int(10) NOT NULL,
  `applicantID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `faculty`, `email`, `telephone`, `level_id`, `applicantID`) VALUES
('aafiyah', 'aafiyah', 'SITI AAFIYAH', '2', 'aafiyah@yahoo.com', '012-123456', 1, '998765'),
('ajwdxr', 'ajwdxr', 'MOHAMAD AJWAD BIN MOHD SOBRI', 'FSKM', 'ajwadxara99@gmail.com', '0111063817', 1, '2017216796'),
('fitry', 'fitry', 'FITRY HAMID', 'FP', 'fitryhamid88@gmail.com', '0178989895', 3, '2017211637'),
('kimi', 'kimi', 'kimi', '1', 'kiminonawa@hotmail.com', '0136802191', 2, '2118765'),
('tina', 'tina', 'Tina Sofea', '2', 'tinasofi@gmail.com', '0123456789', 3, '2017216799');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`webID`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`bannerID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `webID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `bannerID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
