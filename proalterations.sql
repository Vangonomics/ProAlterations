-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 03:25 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proalterations`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `productID` int(11) NOT NULL,
  `brandName` varchar(100) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `picture` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`productID`, `brandName`, `productName`, `category`, `price`, `picture`) VALUES
(24, 'Renior', 'Red Blazer', 'Top', '150', 'DSC_0003.JPG'),
(25, 'Renior', 'Blue Blazer', 'Top', '280', 'DSC_0005.JPG'),
(26, 'Riverlind', 'Blue Blazer', 'Top', '150', 'DSC_0006.JPG'),
(27, 'Renior', 'Blue Blazer', 'Top', '150', 'DSC_0009.JPG'),
(28, 'Renior', 'Grey Blazer', 'Top', '280', 'DSC_0020.JPG'),
(29, 'Angelo', 'Blue Blazer', 'Top', '155', 'DSC_0009.JPG'),
(30, 'Creati', 'Beige Blazer', 'Top', '150', 'DSC_0016.JPG'),
(31, 'Creati', 'Grey Blazer', 'Top', '150', 'DSC_0020.JPG'),
(32, 'Lexton', 'Red Dress Shirt', 'Top', '30', 'DSC_0024.JPG'),
(33, 'Lexton', 'Green Dress Shirt', 'Top', '30', 'DSC_0026.JPG'),
(34, 'Porto Filo', 'Purple Dress Shirt', 'Top', '30', 'DSC_0032.JPG'),
(35, 'Lexton', 'White Dress Shirt', 'Top', '30', 'DSC_0035.JPG'),
(36, 'Porto Filo', 'Grey Dress Shirt', 'Top', '30', 'DSC_0036.JPG'),
(37, 'Lexton', 'Pink Dress Shirt', 'Top', '30', 'DSC_0040.JPG'),
(38, 'Porto Filo', 'Navy Vest', 'Top', '30', 'DSC_0043.JPG'),
(39, 'Porto Filo', 'White Vest', 'Top', '30', 'DSC_0045.JPG'),
(40, 'Toronto', 'White Design Vest', 'Top', '35', 'DSC_0050.JPG'),
(41, 'Toronto', 'Pink Design Vest', 'Top', '35', 'DSC_0053.JPG'),
(42, 'Toronto', 'Lilac Design Vest', 'Top', '35', 'DSC_0056.JPG'),
(43, 'Toronto', 'Tan Design Bowtie', 'Accessory', '2', 'DSC_0060.JPG'),
(44, 'Brand Q', 'Black Bowtie', 'Accessory', '10', 'DSC_0061.JPG'),
(45, 'Toronto', 'Pink Design Bowtie', 'Accessory', '10', 'DSC_0067.JPG'),
(46, 'Brand Q', 'Blue Stripe Tie', 'Accessory', '10', 'DSC_0072.JPG'),
(47, 'Brand Q', 'Black Tie', 'Accessory', '10', 'DSC_0085.JPG'),
(48, 'Creati', 'Black Dresspants', 'Bottom', '50', 'DSC_0094.JPG'),
(49, 'Renior', 'Grey Dresspants', 'Bottom', '50', 'DSC_0104.JPG'),
(50, 'Renior', 'Navy Dresspants', 'Bottom', '50', 'DSC_0100.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
