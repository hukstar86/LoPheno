-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 10:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lopheno_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(20) NOT NULL,
  `categoryName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`) VALUES
(1, 'Culterly'),
(2, 'Place Settings');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `Enquiries_ID` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(20) NOT NULL,
  `responded_to` varchar(20) NOT NULL,
  `sent_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(20) NOT NULL,
  `categoryID` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `product_image` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `name`, `description`, `price`, `product_image`) VALUES
(1, 2, 'steve', 'stvee dfvsfdfv dfvdfv', '15.00', 0),
(2, 2, 'Gold Plated Place se', 'lorem10', '', 0),
(3, 1, 'SMASH ', 'Adult Black Comedy T-Shirt made of cotton', '20.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL,
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `role`, `status`) VALUES
(1, 'hukstar86', 'stevieboy1986@gmail.', 'asdf', '10', '1'),
(2, 'steve', 'steve@gmail.com', '$2y$10$47I3vUFAEBmQE', '', ''),
(3, 'lorie', 'lorie@gamil.com', '$2y$10$Ky8tQqj6q7LQq', '', ''),
(4, 'shanobi', 'shanobi@gmail.com', '$2y$10$E.Bung16WG.OP', '', ''),
(5, 'miso', 'miso@gmail.com', '$2y$10$trxE2knZOrvKV', '', ''),
(6, 'princess', 'princess@gmail.com', '$2y$10$ykXzdTKu7txCl', '', ''),
(7, 'woo', 'woo@gmail.com', '$2y$10$6TAOqUvErHNYW', 'woo@gmail.', ''),
(8, 'qoo', 'qoo@gmail.com', '$2y$10$cIuno/sZfD8Ld', '10', ''),
(9, 'jjjjj', 'jjjjj@gmail.com', 'asdf', '', '1'),
(10, 'stve', 'ASDF@GMAIL.COM', 'asddf', '', '1'),
(11, 'kevin', 'kevin@gmail.com', 'asdf', '', '1'),
(12, 'tiger', 'tiger@gmail.com', 'asdf', '', '1'),
(13, 'zane', 'zane@gmail.com', 'asdf', '', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`Enquiries_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `Enquiries_ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
