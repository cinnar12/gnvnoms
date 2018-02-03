-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 03, 2018 at 05:30 AM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thotranc_gnvnoms`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `genre` text NOT NULL,
  `price` text NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `location`, `genre`, `price`, `phone`) VALUES
(1, 'Mi Apa Latin Cafe', '114 SW 34th St, Gainesville, FL 32607', 'Cuban', '$', '3523767020'),
(2, 'Grill Fresh', '17 NW 17th St, Gainesville, FL 32603', 'Health Food', '$$', '3525055282'),
(3, 'Kabab House', '604 NW 13th St, Gainesville, FL 32603', 'Indian', '$$', '3527926764'),
(4, 'Garlic & Ginger', '5847 SW 75th St #109, Gainesville, FL 32608', 'Korean', '$$', '3523715911'),
(5, 'Bangkok Square', '6500 SW Archer Rd, Gainesville, FL 32608', 'Thai', '$$', '3523754488'),
(6, 'Bahama Breeze', '3989 Plaza Blvd, Gainesville, FL 32608', 'Caribbean', '$$', '3523787555'),
(7, 'Beque Holic', '3812 W Newberry Rd, Gainesville, FL 32607	', 'Korean BBQ', '$$', '3525056534'),
(8, 'Momoyaki', '1624 SW 13th St, Gainesville, FL 32608	', 'Asian Fusion', '$$', '3523843733'),
(9, 'Dragonfly Sushi', '201 SE 2nd Ave #104, Gainesville, FL 32601', 'Japanese', '$$$', '3523713359'),
(10, 'Mark\\\'s Prime Steakhouse', '201 SE 2nd Ave #102, Gainesville, FL 32601', 'Steak House', '$$$', '3523360077');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
