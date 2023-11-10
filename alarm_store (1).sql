-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 02:23 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alarm_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `retproduct`
--

CREATE TABLE `retproduct` (
  `id` int(50) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retproduct`
--

INSERT INTO `retproduct` (`id`, `productname`, `color`, `price`, `image`) VALUES
(1, 'blouse', 'red', '250', 'S4.jpg'),
(2, 'blouse', 'beige', '300 L.E', 'W2.JPG'),
(3, 'dress', 'rose', '750 L.E', 'D2.JPG'),
(4, 'dress', 'sliver', '850', 'D1.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `email`, `password`, `cpassword`) VALUES
(1, 'khlood mohamed', 'khlood@gmail.com', '1234', '1234'),
(2, 'khlood2', 'lola205033@gmail.com', '123', '123'),
(3, 'khlood', 'lola205033@gmail.com', '123', '123'),
(4, 'mariam', 'mariam@gmail.com', '123', '123'),
(5, 'yasmin', 'yoyo@yahoo.com', '987', '987'),
(6, 'farah', 'farah@gmail.com', '12345', '12345'),
(7, 'hossam', 'hossam@gmail.com', '1234', '1234'),
(8, 'norhan', 'norhan@gmail.com', '123', '123'),
(9, 'noura', 'noura@gmail.com', '123', '123'),
(10, 'ahmed', 'ahmed@gmail.com', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `retproduct`
--
ALTER TABLE `retproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `retproduct`
--
ALTER TABLE `retproduct`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
