-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 07:42 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `template1db`
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
  `banner_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_name`, `banner_image`, `banner_size`, `banner_timestamp`) VALUES
(1, 'banner 1', 'a7d40537ec1caf9b5d908fc349b1b5f310b25926.png', '', '2022-02-20 14:09:21'),
(2, 'banner 2', 'a9f03be8e904d3c65dcce795916eec4a9643fc66.png', '', '2022-02-20 14:09:41');

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
  `orders_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `orders_reference` varchar(10) NOT NULL,
  `orders_status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `products_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `products_name`, `products_price`, `products_sales_price`, `products_sub_categories`, `products_promo`, `products_deals`, `products_new_arrivals`, `products_best_sellers`, `products_popular`, `products_short_description`, `products_long_description`, `products_image`, `products_timestamp`) VALUES
(1, 'Venza', '5000000', '', 1, '0', 'Deals of the day', 'New arrivals', 'Best bellers', '0', 'Unrestrained and portable active stereo speaker Free from the confines of wires and chords 20 hours of portable capabilities Double-ended Coil Cord with 3.5mm Stereo Plugs Included 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X', 'Embodying the raw, wayward spirit of rock ‘n’ roll, the Kilburn portable active stereo speaker takes the unmistakable look and sound of Marshall, unplugs the chords, and takes the show on the road.  Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage styled engineering. Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended highs for a sound that is both articulate and pronounced. The analogue knobs allow you to fine tune the controls to your personal preferences while the guitar-influenced leather strap enables easy and stylish travel.', '1287eab20011558404a13a549b8fc776abd0892e.png', '2022-03-06 10:41:40'),
(2, 'Shirt', '5000', '', 1, '0', 'Deals of the day', 'New arrivals', 'Best bellers', '0', '', '', 'd734a38bd855e4e60458e49de23090d9a2781e89.jpg', '2022-03-06 10:40:46'),
(6, 'socks', '500', '450', 2, '0', 'Deals of the day', '0', '0', '0', '', '', 'c7c289dbe7434540ff8958f64d9dcd871314f985.jpg', '2022-03-06 10:40:53'),
(7, 'gown', '6000', '4000', 2, '0', 'Deals of the day', '0', '0', '0', '', '', 'b608120fe8771660ad2ffc62d120258ac057939f.jpg', '2022-03-06 10:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `products_categories`
--

CREATE TABLE `products_categories` (
  `products_categories_id` int(11) NOT NULL,
  `products_categories_name` varchar(20) NOT NULL,
  `products_categories_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slider_banner`
--

CREATE TABLE `slider_banner` (
  `slider_id` int(11) NOT NULL,
  `slider_banner_name` varchar(20) NOT NULL,
  `slider_banner_image` varchar(255) NOT NULL DEFAULT 'slide-1.jpg',
  `slider_banner_size` varchar(255) NOT NULL DEFAULT '1230 by 425',
  `slider_banner_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_banner`
--

INSERT INTO `slider_banner` (`slider_id`, `slider_banner_name`, `slider_banner_image`, `slider_banner_size`, `slider_banner_timestamp`) VALUES
(1, 'Slider banner 1', '01929ac323d205302b70849a608b55a6af0e94c4.png', '1230 by 425', '2022-02-20 13:41:37'),
(2, 'Slider banner 2', '1586153e2f2bbaea2b6cc3457e41aa2654535367.png', '1230 by 425', '2022-02-20 13:42:07'),
(3, 'Slider banner 3', '0c4582be3dcba2531009be86dc471dc719ef70c6.png', '1230 by 425', '2022-02-20 13:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 1,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cookies_session` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `active`, `email`, `password`, `cookies_session`, `timestamp`) VALUES
(1, 1, 'test@gmail.com', 'password', '2b0e09ff4a5e6395be06462cea99c883', '2022-03-04 15:54:56');

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
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `products_categories_id` int(11) NOT NULL AUTO_INCREMENT;

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
