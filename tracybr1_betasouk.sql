-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2022 at 11:33 PM
-- Server version: 5.7.37-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracybr1_betasouk`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_name` varchar(30) NOT NULL,
  `banner_image` varchar(255) NOT NULL DEFAULT 'banners.jpg',
  `banner_size` varchar(30) NOT NULL,
  `banner_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_name`, `banner_image`, `banner_size`, `banner_timestamp`) VALUES
(1, 'banner 1', '1be18723c6ae39c857d48a60ab9f779e3f3e0184.jpg', '', '2022-03-10 12:00:34'),
(2, 'banner 2', 'c1102ff54b45f242018fe7d686f9c8ee8bfb7983.jpg', '', '2022-03-10 12:01:52'),
(3, 'banner 3', 'default-2.jpg', '', '2022-03-07 14:23:42'),
(4, 'banner 4', 'default-2.jpg', '', '2022-03-07 14:24:01'),
(5, 'banner 5', 'default-2.jpg', '', '2022-03-07 14:24:28'),
(6, 'banner 6', 'default-3.jpg', '', '2022-03-07 14:25:40'),
(7, 'banner 7', 'default-4.jpg', '', '2022-03-07 14:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `orders_firstname` varchar(20) NOT NULL,
  `orders_surname` varchar(20) NOT NULL,
  `orders_email` varchar(255) NOT NULL,
  `orders_phone` varchar(11) NOT NULL,
  `orders_address` varchar(255) NOT NULL,
  `orders_city` varchar(30) NOT NULL,
  `orders_name` varchar(30) NOT NULL,
  `orders_price` varchar(11) NOT NULL,
  `orders_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `orders_reference` varchar(10) NOT NULL,
  `orders_status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_id`, `orders_firstname`, `orders_surname`, `orders_email`, `orders_phone`, `orders_address`, `orders_city`, `orders_name`, `orders_price`, `orders_timestamp`, `orders_reference`, `orders_status`) VALUES
(1, 'Ahmed', 'Olusesi', 'ola.sesi@yahoo.com', '08074574512', 'Ikeja', 'Lagos', '500', 'football', '2022-03-09 11:03:44', 'DGM698UWXM', 0),
(2, 'fgr', 'tyyyy', 'test@gmail.com', '08066776655', '2, 443333', 'abuja', '5000', 'chain', '2022-03-09 11:29:05', 'PY2FAUHHP3', 0),
(3, 'wale', 'ayo', 'test@gmail.com', '09088776543', 'adekunle street', 'ajah', '2000', 'trouser', '2022-03-09 11:34:08', 'ZD88VDYLPJ', 0),
(4, 'tee', 'lee', 'nisajav116@ketchet.com', '09088776654', 'alade', 'alaka', 'â‚¦400', 'football', '2022-03-09 13:09:46', 'B1HDH3T403', 0),
(5, 'Ahmed', 'Olusesi', 'ola.sesi@yahoo.com', '08074574512', 'Ikeja', 'Lagos', '0', '0', '2022-03-09 13:11:10', '2HXTOLLQXB', 0),
(6, 'Ahmed', 'Olusesi', 'rasheed@rasheed.com', '08074574512', 'Ikeja', 'Lagos', '2000', 'trouser', '2022-03-09 13:29:34', 'J3CTQQ5UMD', 0),
(7, 'ahmed', 'oladipupo', 'ola.sesi@yahoo.com', '08075675612', 'ikeja', 'lagos', 'â‚¦400', 'football', '2022-03-09 13:33:20', '1VL0V0KMYW', 0),
(8, 'tee', 'att', 'test@gmail.com', '09099999999', 'adeleke', 'kano', 'â‚¦400', 'football', '2022-03-09 13:41:07', 'IJU6S25PEA', 0),
(9, 'Ahmed', 'Olusesi', 'ola.sesi@yahoo.com', '08074574512', 'Ikeja', 'Lagos', 'â‚¦400', 'football', '2022-03-09 13:43:28', 'FRKGPSW2HY', 0),
(10, 'tee', 'lee', 'test@gmail.com', '09099887765', 'alake', 'alaka', 'â‚¦400', 'football', '2022-03-09 13:52:57', 'U7WMBMFJPE', 0),
(11, 'ade', 'ade', 'test@gmail.com', '09099887766', 'alaka', 'alake', 'â‚¦250', 'milk', '2022-03-09 14:07:38', 'G97Z9BJ1H6', 0),
(12, 'ade', 'ada', 'test@gmail.com', '09099887766', 'alaka', 'alake', 'â‚¦250', 'milk', '2022-03-09 14:12:43', 'LI852O46P8', 0),
(13, 'ahmed', 'olusesi', 'ola.sesi@yahoo.com', '08074574512', 'ikeja', 'lagos', 'â‚¦2,000', 'trouser', '2022-03-09 14:18:46', '9PVEQQAVUI', 0),
(14, 'ahmed', 'olusesi', 'ola.sesi@yahoo.com', '08074574512', 'ikeja', 'lagos', 'â‚¦3,000', 'Shirt', '2022-03-09 14:25:53', '39KIHPDYH1', 0),
(15, 'tee', 'lee', 'test@gmail.com', '09099887766', 'alaka', 'alake', '400', 'football', '2022-03-09 14:42:47', '1JC8EH8TLC', 0),
(16, 'tee', 'lee', 'test@gmail.com', '09099887766', 'alake', 'alaka', '400', 'football', '2022-03-09 14:50:39', 'EC5AY9KGF5', 0),
(17, 'tee', 'lee', 'test@gmail.com', '09088776655', 'alake', 'alaka', '2000', 'trouser', '2022-03-09 14:55:56', 'OSOKJARQG5', 0),
(18, 'tee', 'lee', 'test@gmail.com', '09088776655', 'alake', 'alaka', '400', 'football', '2022-03-09 15:22:24', 'T9MM099U1L', 0),
(19, 'Tee', 'Lee', 'nisajav116@ketchet.com', '09088776655', 'Alaka', 'Alake', '3000', 'Shirt', '2022-03-10 09:52:35', 'OUML5PPI4C', 0),
(20, 'Tee', 'Lee', 'nisajav116@ketchet.com', '09088776655', 'Alaka', 'Alake', '3000', 'Shirt', '2022-03-10 09:52:35', 'SOYUI1PTKC', 0),
(21, 'Tee', 'Lee', 'nisajav116@ketchet.com', '09088776655', 'Alaka', 'Alake', '3000', 'Shirt', '2022-03-10 09:52:39', '9RC9CLIZRH', 0),
(22, 'tee', 'lee', 'nisajav116@ketchet.com', '09088776655', 'alaka', 'alake', '3000', 'Shirt', '2022-03-10 09:56:25', '6FJOXWWRF5', 0),
(23, 'tee', 'LEE', 'nisajav116@ketchet.com', '09099887766', 'alaka', 'alake', '3000', 'Shirt', '2022-03-10 10:01:06', 'DO32WUA0RD', 0),
(24, 'tee', 'lee', 'nisajav116@ketchet.com', '09088776655', 'alaka', 'alake', '400', 'football', '2022-03-10 11:11:00', '7JQ7FAQEMS', 0),
(25, 'tee', 'lee', 'nisajav116@ketchet.com', '09088776655', 'alaka', 'alake', '2000', 'trouser', '2022-03-10 11:23:26', '5GZK6QT5SQ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `products_name` varchar(30) NOT NULL,
  `products_price` varchar(11) NOT NULL,
  `products_sales_price` varchar(10) NOT NULL,
  `products_sub_categories` int(10) NOT NULL,
  `products_promo` varchar(20) NOT NULL DEFAULT '0',
  `products_deals` varchar(20) NOT NULL DEFAULT '0',
  `products_new_arrivals` varchar(20) NOT NULL DEFAULT '0',
  `products_best_sellers` varchar(20) NOT NULL DEFAULT '0',
  `products_popular` varchar(20) NOT NULL DEFAULT '0',
  `products_short_description` varchar(255) NOT NULL,
  `products_long_description` text NOT NULL,
  `products_image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `products_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `products_name`, `products_price`, `products_sales_price`, `products_sub_categories`, `products_promo`, `products_deals`, `products_new_arrivals`, `products_best_sellers`, `products_popular`, `products_short_description`, `products_long_description`, `products_image`, `products_timestamp`) VALUES
(1, 'Shirt', '5000', '3000', 2, 'Hot promotion', '0', 'New arrivals', 'Best bellers', '0', 'Nice shirt', 'You would love it', '9ecd9bc62905c1c32ce5088ca698a36015f6278e.jpg', '2022-03-08 18:30:08'),
(2, 'maggi', '200', '', 3, '0', '0', '0', '0', 'Most popular', 'asdgsdd', 'fgasgtwey', 'c145c61f0152dad7a5c217a73960f2b4cd809bd2.jpg', '2022-03-08 18:29:40'),
(3, 'football', '500', '400', 2, '0', 'Deals of the day', '0', '0', '0', 'dweff', 'wdwfef', '475cc0f594c0256db9b851736e45a3d8a289f119.jpg', '2022-03-08 18:29:16'),
(4, 'trouser', '2000', '', 3, '0', 'Deals of the day', '0', '0', '0', 'miosffwgfijkwfv', 'fnjywffuinfdcj', 'e9f96d3301d6d200e9061a2c4eacc2d0541e2520.jpg', '2022-03-08 18:28:11'),
(6, 'cookies', '200', '33', 2, '0', '0', '0', '0', '0', '', '', '981f8fecf908a400bc4914bea4dd25de9ad0552e.jpg', '2022-03-08 18:25:33'),
(7, 'earpod', '7000', '', 4, '0', '0', '0', '0', '0', '', '', '8a6a9bde3acd7397559b6383179d3445cee822eb.jpg', '2022-03-08 18:34:36'),
(8, 'hpfolio', '4000', '', 5, '0', '0', '0', '0', '0', '', '', '52b3f1516a99126b69c9d3fa88eff9823e06ae8b.jpg', '2022-03-08 18:35:37'),
(9, 'milk', '500', '250', 1, '0', '0', '0', '0', '0', '', '', '7b388c62201eb0f508747b305618ae865ea377ee.jpg', '2022-03-09 00:02:39'),
(10, 'chain', '5000', '', 2, '0', 'Deals of the day', '0', '0', '0', '', '', 'default.jpg', '2022-03-09 11:26:41'),
(11, 'Duplex', '10000000', '', 6, '0', '0', '0', '0', '0', 'A Duplex with three Bedroom and four parlor', '', 'b6911b2fa170c71baa12ff8ffa84f7e24e975256.jpg', '2022-03-10 12:10:40'),
(12, 'Perfume', '20000', '18000', 2, '0', '0', 'New arrivals', 'Best bellers', '0', 'nice perfume', 'nice perfume', 'default.jpg', '2022-03-10 17:30:23'),
(13, 'A plate of food', '1000', '', 3, 'Hot promotion', '0', 'New arrivals', '0', '0', '', '', '330671bfefe630479b550f54eed0b3a7ffb4f58b.png', '2022-03-10 15:11:05'),
(14, 'slippers', '1000', '700', 2, '0', 'Deals of the day', '0', '0', '0', 'nice slippers', '', 'd75f257547b186d3de22a93e6a932c56cf611749.jpg', '2022-03-10 17:35:30'),
(15, 'hat', '3000', '1000', 2, '0', '0', 'New arrivals', '0', '0', 'nice har', '', 'default.jpg', '2022-03-10 17:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `products_categories`
--

CREATE TABLE `products_categories` (
  `products_categories_id` int(11) NOT NULL,
  `products_categories_name` varchar(20) NOT NULL,
  `products_categories_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_categories`
--

INSERT INTO `products_categories` (`products_categories_id`, `products_categories_name`, `products_categories_timestamp`) VALUES
(1, 'Uncategorized', '2022-03-07 09:17:15'),
(2, 'Clothings', '2022-03-07 10:00:00'),
(3, 'food', '2022-03-07 20:04:05'),
(4, 'electronics', '2022-03-08 09:53:28'),
(5, 'laptops', '2022-03-08 09:54:01'),
(6, 'Housing', '2022-03-10 12:02:57'),
(7, 'text', '2022-03-10 17:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `slider_banner`
--

CREATE TABLE `slider_banner` (
  `slider_id` int(11) NOT NULL,
  `slider_banner_name` varchar(20) NOT NULL,
  `slider_banner_image` varchar(255) NOT NULL DEFAULT 'slide-1.jpg',
  `slider_banner_size` varchar(255) NOT NULL DEFAULT '1230 by 425',
  `slider_banner_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_banner`
--

INSERT INTO `slider_banner` (`slider_id`, `slider_banner_name`, `slider_banner_image`, `slider_banner_size`, `slider_banner_timestamp`) VALUES
(1, 'Slider banner 1', '788921f0256307b2bbc4f3fd5745f0f0b26f08f1.jpg', '1230 by 425', '2022-03-10 11:59:24'),
(2, 'Slider banner 2', '596bae1d7602f82df60afc9c8c45fb010421a5ac.jpg', '1230 by 425', '2022-03-10 11:47:41'),
(3, 'Slider banner 3', 'ccb11765df69ca932fba486c8c74a4b79104f44a.jpg', '1230 by 425', '2022-03-10 11:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cookies_session` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `active`, `email`, `password`, `cookies_session`, `timestamp`) VALUES
(1, 1, 'test@gmail.com', 'password', '', '2022-03-10 17:55:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `products_categories`
--
ALTER TABLE `products_categories`
  ADD PRIMARY KEY (`products_categories_id`);

--
-- Indexes for table `slider_banner`
--
ALTER TABLE `slider_banner`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `products_categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider_banner`
--
ALTER TABLE `slider_banner`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
