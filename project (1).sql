-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 01:54 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone Number` int(150) NOT NULL,
  `E-mail` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Name of Product` varchar(100) NOT NULL,
  `size` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `description`, `price`, `image`) VALUES
(1, 'dress 1', 'Gray long evening dress', '750', 'D1.jpg'),
(2, 'dress 2', 'A long cashmere dress with its jibouna  for engagement', '1000', 'D2.jpg'),
(3, 'dress 3', 'Cashmere cup dress', '1220', 'D3.jpg'),
(4, 'dress 4', 'Long red dress', '2500', 'D4.jpg'),
(5, 'dress 5', 'Long baby blue cup dress', '1800', 'D5.jpg'),
(6, 'dress 6', ' Short white dress (below the knee) off shoulders', '1500', 'D6.jpg'),
(7, 'complete set', 'Complete set (pants, pullover and jacket)', '1500', 'W1.jpg'),
(8, 'full set', ' Full set (light jeans and white and black striped T-shirt and cardigan)', '1250', 'W2.jpg'),
(9, 'jacket', 'Beige jacket', '400', 'W3.jpg'),
(10, 'Basic', 'White basic', '150', 'W4.jpg'),
(11, 'cardigan', 'Long cardigan', '250', 'W5.jpg'),
(12, 'coat', 'Long cardigan', '1200', 'W6.jpg'),
(13, 'blouse', 'Brown blouse', '250', 'S1.jpg'),
(14, 'cardigan', ' Long summer cardigan', '750', 'S2.jpg'),
(15, 'T-shirt', 'White T-shirt', '150', 'S3.jpg'),
(16, 'red blouse', 'red blouse', '175', 'S4.jpg'),
(17, ' Fabric beige wide leg pants', ' Fabric beige wide leg pants', '350', 'S5.jpg'),
(18, ' Hot Shorts', 'Casual Hot Shorts', '120', 'S6.jpg'),
(19, 'Jeep and blouse', 'Burgundy jeep with white blouse ', '500', 'K1.jpg'),
(20, 'Kajol dress( blue , pink )  ', 'Kajol dress( blue , pink ) ', '120', 'K2.jpg'),
(21, 'checkered dress', 'checkered dress ( red and black ) ', '250', 'K3.jpg'),
(22, 'Hot short and blouse', 'Hot short and blue blouse', '300', 'K4.jpg'),
(23, 'Tshirt and  jeep', ' White Tshirt and pink jeep', '350', 'K5.jpg'),
(24, 'Suit ', 'White Suit ', '400', 'K6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sdfgh`
--

CREATE TABLE `sdfgh` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sdfgh`
--
ALTER TABLE `sdfgh`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sdfgh`
--
ALTER TABLE `sdfgh`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
