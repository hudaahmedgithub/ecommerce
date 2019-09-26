-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 02:34 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khanstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Hp'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'Cloth Brand');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(10) NOT NULL,
  `product_image` text NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES
(2, 1, '0', 13, 'samsung', 'sam.png', 2, 6000, 12000),
(5, 10, '0', 14, 'red ladies', 's2.jpg', 1, 999, 999),
(6, 11, '0', 13, 'black jack', 'j.jpg', 1, 1200, 1200),
(7, 3, '0', 13, 'ipade', 'sam.png', 1, 20000, 20000),
(8, 7, '0', 13, 'laptop len', 'sam.png', 1, 30000, 30000),
(9, 9, '0', 13, 'iphone new', 'sam.png', 1, 12000, 12000),
(10, 5, '0', 14, 'ipad 2', 'sam.png', 1, 10000, 10000),
(11, 2, '0', 13, 'iphone 6', 'sam.png', 1, 25000, 25000),
(12, 6, '0', 13, 'hp laptop', 'sam.png', 1, 20000, 20000),
(28, 12, '0', 15, 'casual lad', 'index.jpg', 3, 930, 2790),
(31, 0, '0', 14, 'mobile', 'sam.png', 1, 7000, 7000),
(32, 1, '0', 14, 'samsung do', 'sam.png', 1, 5000, 5000),
(33, 11, '0', 0, 'black jack', 'j.jpg', 1, 1200, 1200),
(34, 9, '0', 14, 'iphone new', 'sam.png', 1, 12000, 12000),
(35, 11, '0', 15, 'black jack', 'j.jpg', 1, 1200, 1200),
(39, 1, '0', 0, 'samsung do', 'sam.png', 1, 5000, 5000);

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
(1, 'Electronices'),
(2, 'Ladies Wrears'),
(3, 'Men Wears'),
(4, 'Kids Wear'),
(5, 'Furmites'),
(6, 'Home Application'),
(7, 'Electronic Gadgets');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 2, 'samsung dos', 5000, 'GETTING STARTED WITH BRACKETS', 'sam.png', 'samsung'),
(2, 1, 3, 'iphone 6', 25000, 'GETTING STARTED WITH BRACKETS', 'sam.png', 'iphone'),
(3, 1, 3, 'ipade', 20000, 'GETTING STARTED WITH BRACKETS', 'sam.png', 'ipade'),
(4, 1, 3, 'iphone5', 32000, 'GETTING STARTED WITH BRACKETS', 'sam.png', 'samsung'),
(5, 1, 2, 'ipad 2', 10000, 'GETTING STARTED WITH BRACKETS', 'sam.png', 'samsung'),
(6, 1, 1, 'hp laptop', 20000, 'GETTING STARTED WITH BRACKETS', 'sam.png', 'laptop'),
(7, 1, 1, 'laptop lenovo', 30000, 'GETTING STARTED WITH BRACKETS', 'sam.png', 'samsung'),
(8, 1, 4, 'Sony', 20000, 'GETTING STARTED WITH BRACKETS', 'sam.png', 'samsung'),
(9, 1, 3, 'iphone new', 12000, 'GETTING STARTED WITH BRACKETS', 'sam.png', 'samsung'),
(10, 2, 6, 'red ladies dress', 999, 'GETTING STARTED WITH BRACKETS', 's2.jpg', 'dress'),
(11, 2, 6, 'black jacket', 1200, 'GETTING STARTED WITH BRACKETS', 'j.jpg', 'jacket'),
(12, 2, 6, 'casual ladies cloth', 930, 'GETTING STARTED WITH BRACKETS', 'index.jpg', 'cloth');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `f_name` varchar(300) NOT NULL,
  `l_name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `f_name`, `l_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(5, 'huda', 'kamel', 'hudah@gmail.com', '25f9e794323b453885f5181f1b624d0b', 1234567891, 'kamel street', 'minia'),
(6, 'mona', 'kamel', 'monaa@gmail.com', '25f9e794323b453885f5181f1b624d0b', 1234567891, 'kamel street', 'minia'),
(7, 'aya', 'kamel', 'aya@gmail.com', '25f9e794323b453885f5181f1b624d0b', 1234567891, 'kamel street', 'minia'),
(8, 'yosra', 'ahmed', 'yosra@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 102346782, 'egypt', 'minia'),
(9, 'yosra', 'ahmed', 'yosraa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 102346782, 'egypt', 'minia'),
(10, 'huda', 'ahmed', 'mhudaahmed@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 102346782, 'egypt', 'minia'),
(11, 'hoda', 'ahmed', 'hoda@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1234567891, 'one', 'two'),
(13, 'salma', 'ahmed', 'salma@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1234567891, 'qwerty', 'ASDFG'),
(14, 'mhuda', 'ahmed', 'mhuda@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1234567891, 'asdfgh', 'wertyu'),
(15, 'Huda', 'Ahmed', 'huda@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 102345678, 'street nassef', 'Egypt,minia ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
