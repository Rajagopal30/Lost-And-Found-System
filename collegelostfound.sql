-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 02:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegelostfound`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `psw`) VALUES
('admin', '11');

-- --------------------------------------------------------

--
-- Table structure for table `found`
--

CREATE TABLE `found` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `item` varchar(50) NOT NULL,
  `place` varchar(55) NOT NULL,
  `date` varchar(20) NOT NULL,
  `des` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `found`
--

INSERT INTO `found` (`id`, `name`, `email`, `item`, `place`, `date`, `des`, `img`) VALUES
(4, '456456', 'fantasyphpproject@gmail.com', 'dfgdfg', '46456', '2023-03-09', 'jhggy', '2.jpg'),
(4, 'sala', 'sala@gmail.com', 'dfgdfg', 'opposite to aavin ice creams', '2023-03-09', 'hgf gffdf hfhfghh', 'shoe.webp');

-- --------------------------------------------------------

--
-- Table structure for table `found1`
--

CREATE TABLE `found1` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `item` varchar(50) NOT NULL,
  `place` varchar(55) NOT NULL,
  `date` varchar(20) NOT NULL,
  `des` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `found1`
--

INSERT INTO `found1` (`id`, `name`, `email`, `item`, `place`, `date`, `des`, `img`) VALUES
(4, 'trerer', 'sala@gmail.com', 'dfgdfg', 'opposite to aavin ice creams', '2023-03-15', 'ertert', 'payment.png');

-- --------------------------------------------------------

--
-- Table structure for table `fregister`
--

CREATE TABLE `fregister` (
  `id` bigint(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `age` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `dept` varchar(150) NOT NULL,
  `desig` varchar(150) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fregister`
--

INSERT INTO `fregister` (`id`, `name`, `gender`, `age`, `email`, `phone`, `dept`, `desig`, `psw`) VALUES
(1, 'selva', 'male', '30', 'test@gmail.com', '9087408476', 'computr application', 'Assistant profesor', '111'),
(2, 'Sudha', 'female', '32', 'sudha@gmail.com', '9087654321', 'Computer Science', 'Professor', '123'),
(3, 'sarath', 'male', '43', 'sarath@mail.com', '9887675645', 'Computer Science', 'Professor', '123');

-- --------------------------------------------------------

--
-- Table structure for table `lost`
--

CREATE TABLE `lost` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `item` varchar(50) NOT NULL,
  `place` varchar(55) NOT NULL,
  `date` varchar(20) NOT NULL,
  `des` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lost`
--

INSERT INTO `lost` (`id`, `name`, `email`, `item`, `place`, `date`, `des`, `img`, `status`) VALUES
(4, 'lksdflsdfjlsdfks', 'sala@gmail.com', 'dfgdfg', 'opposite to aavin ice creams', '2023-03-11', 'fghfghfh fg  fgg fg', '400ball.webp', '1001');

-- --------------------------------------------------------

--
-- Table structure for table `sregister`
--

CREATE TABLE `sregister` (
  `id` bigint(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL,
  `reg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sregister`
--

INSERT INTO `sregister` (`id`, `name`, `gender`, `dob`, `email`, `phone`, `dept`, `year`, `reg`) VALUES
(1, 'sam', 'male', '2000-01-01', 'sam@gmail.com', '8124436310', 'Computer Science', 'MCA III Year', '1001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fregister`
--
ALTER TABLE `fregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lost`
--
ALTER TABLE `lost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sregister`
--
ALTER TABLE `sregister`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fregister`
--
ALTER TABLE `fregister`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lost`
--
ALTER TABLE `lost`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sregister`
--
ALTER TABLE `sregister`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
