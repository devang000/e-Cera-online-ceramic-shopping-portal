-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 02, 2022 at 12:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_catagory` varchar(50) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_catagory`, `product_desc`, `status_id`) VALUES
(1, 'one', 45, 5, '', 'latest_products', 'dhanji', 1),
(10, 'one', 45, 5, '', 'populer_products', 'this is the demo products', 1),
(11, 'four', 55, 22, '', 'latest_products', 'dwdefbkbbfbjekfkjfbekfbjfjbfebefkfebfkfbekjfbejkffbebfefbkfejfbekjfbejbejfejbeebfekfbefjf', 0),
(12, 'one', 45, 5, '', 'latest_products', '', 0),
(13, 'devang', 89, 8, '', 'populer_products', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register_page`
--

CREATE TABLE `register_page` (
  `u_id` int(11) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1,
  `email` varchar(25) NOT NULL,
  `phoneNo` varchar(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_page`
--

INSERT INTO `register_page` (`u_id`, `firstName`, `lastName`, `username`, `password`, `status_id`, `email`, `phoneNo`, `gender`, `dob`) VALUES
(58, 'Devang', 'Gohil', 'DG123', 'fb8d748c', 1, 'devanggohil61@gmail.com', '9724601266', 'm', '2003-04-30'),
(59, 'vasu', 'thaker', 'nand456', 'f874a02c', 1, 'nandthaker23@gmail.com', '9409397324', 'm', '2003-02-23'),
(60, 'nand', 'thaker', 'Nand', '1234', 1, 'nandthaker23@gmail.com', '9724601266', 'm', '2022-04-03'),
(61, 'jayesh', 'k', 'jayesh', '1234', 1, 'devanggohil61@gmail.com', '9409397324', 'm', '2003-02-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_page`
--
ALTER TABLE `register_page`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `register_page`
--
ALTER TABLE `register_page`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
