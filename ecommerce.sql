-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 06:19 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'kartik70rajesh', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(9, 'SPECIALS'),
(11, 'BREAKFAST'),
(12, 'LUNCH');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_prn` varchar(8) DEFAULT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_contact`, `customer_prn`, `amount`) VALUES
(2, 'kartik', 'kartik70rajesh@yahoo.co.in', '1234', '9773300360', '115a1011', 9003),
(3, 'ajit', 'ajit@xyz.com', '12345', '1234', '115a1003', 1476),
(4, 'kumaran', 'kp@xyz.com', '123456', '98765', '115a1013', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` int(10) NOT NULL,
  `customer_prn` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders_admin`
--

CREATE TABLE `orders_admin` (
  `order_id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` int(10) NOT NULL,
  `customer_prn` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_admin`
--

INSERT INTO `orders_admin` (`order_id`, `p_id`, `p_name`, `p_price`, `customer_prn`) VALUES
(26, 13, 'paneer frankie', 40, '115a1011'),
(25, 13, 'paneer frankie', 40, '115a1011'),
(24, 13, 'paneer frankie', 40, '115a1011'),
(23, 12, 'onion dosa', 40, '115a1011'),
(27, 13, 'paneer frankie', 40, '115a1011'),
(28, 19, 'oreo1', 30, '115a1011'),
(29, 0, '', 0, '115a1011'),
(30, 12, 'onion dosa', 40, '115a1011'),
(31, 13, 'paneer frankie', 40, '115a1011'),
(32, 14, 'samosa', 40, '115a1011'),
(33, 13, 'paneer frankie', 40, '115a1011'),
(34, 18, 'oreo', 30, '115a1011'),
(35, 16, 'xyz1', 12, '115a1003'),
(36, 17, 'as', 32, '115a1003'),
(37, 18, 'oreo', 30, '115a1003'),
(38, 26, 'Toast Sandwich', 40, '115a1011'),
(39, 23, 'Butter Palak Dosa', 45, '115a1011'),
(40, 23, 'Butter Palak Dosa', 45, '115a1011'),
(41, 23, 'Butter Palak Dosa', 45, '115a1011'),
(42, 23, 'Butter Palak Dosa', 45, '115a1011'),
(43, 23, 'Butter Palak Dosa', 45, '115a1011'),
(44, 22, 'Mysore Masala Dosa', 40, '115a1013'),
(45, 22, 'Mysore Masala Dosa', 40, '115a1013'),
(46, 24, 'Sandwich', 30, '115a1013'),
(47, 25, 'Cheese Sandwich', 35, '115a1013'),
(48, 26, 'Toast Sandwich', 40, '115a1013'),
(49, 29, 'Upma', 25, '115a1013'),
(50, 29, 'Upma', 25, '115a1013'),
(51, 27, 'Poha', 25, '115a1013'),
(52, 21, 'Masala Dosa', 30, '115a1013'),
(53, 21, 'Masala Dosa', 30, '115a1013'),
(54, 27, 'Poha', 25, '115a1013'),
(55, 27, 'Poha', 25, '115a1013'),
(56, 32, 'Chappati Bhaji', 40, '115a1011'),
(57, 25, 'Cheese Sandwich', 35, '115a1011'),
(58, 35, 'Fried Rice', 45, '115a1011'),
(59, 37, 'Lassi', 25, '115a1011'),
(60, 38, 'Pav Bhaji', 70, '115a1011'),
(61, 38, 'Pav Bhaji', 70, '115a1011'),
(62, 40, 'Misal Pav', 30, '115a1011'),
(63, 29, 'Upma', 25, '115a1011'),
(64, 22, 'Mysore Masala Dosa', 40, '115a1011'),
(65, 29, 'Upma', 25, '115a1011'),
(66, 21, 'Masala Dosa', 30, '115a1011');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_desc`, `product_keywords`) VALUES
(20, 11, 'Sada Dosa', 25, '', ''),
(21, 11, 'Masala Dosa', 30, '', ''),
(22, 11, 'Mysore Masala Dosa', 40, '', ''),
(23, 11, 'Butter Palak Dosa', 45, '', ''),
(24, 11, 'Sandwich', 30, '', ''),
(25, 11, 'Cheese Sandwich', 35, '', ''),
(26, 11, 'Toast Sandwich', 40, '', ''),
(27, 11, 'Poha', 25, '', ''),
(28, 11, 'Idli', 20, '', ''),
(29, 11, 'Upma', 25, '', ''),
(30, 11, 'Vada Pav', 15, '', ''),
(31, 12, 'Thali', 40, '', ''),
(32, 12, 'Chappati Bhaji', 40, '', ''),
(33, 12, 'Aloo Parata', 35, '', ''),
(34, 9, 'Oreo', 30, '', ''),
(35, 12, 'Fried Rice', 45, '', ''),
(36, 12, 'Noodles', 45, '', ''),
(37, 12, 'Lassi', 25, '', ''),
(38, 12, 'Pav Bhaji', 70, '', ''),
(39, 11, 'Medu Vada', 30, '', ''),
(40, 11, 'Misal Pav', 30, '', ''),
(41, 12, 'aloo paratha', 30, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_prn` (`customer_prn`);

--
-- Indexes for table `orders_admin`
--
ALTER TABLE `orders_admin`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_prn` (`customer_prn`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_admin`
--
ALTER TABLE `orders_admin`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
