-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2025 at 09:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `amount` bigint(20) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menuitems`
--

CREATE TABLE `menuitems` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menuitems`
--

INSERT INTO `menuitems` (`id`, `name`, `description`, `category`, `image`, `price`) VALUES
(2, 'Blueberries ', 'Product of our hometown.', 'Fruits', 'gallary-5.jpg', 200),
(3, 'Apple', 'IT is an apple juice.', 'Juice', 'gallary-6.jpg', 150),
(4, 'Banana Juice', 'Bananan, sugar, milk, nuts, cream', 'Juice', 'gallary-11.jpg', 300),
(5, 'Burger', 'Meat, sauce, tomatoes, potatoes, bread.', 'fast food', 'gallary-6.jpg', 150);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` bigint(20) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `item_id` bigint(20) NOT NULL,
  `quantity` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `order_id`, `item_id`, `quantity`) VALUES
(1, 7, 2, 0),
(3, 8, 2, 4),
(4, 9, 2, 2),
(5, 9, 2, 5),
(6, 10, 2, 2),
(7, 10, 2, 4),
(8, 11, 2, 2),
(9, 12, 3, 2),
(10, 12, 2, 3),
(11, 13, 2, 3),
(12, 13, 3, 2),
(13, 14, 2, 2),
(14, 14, 3, 3),
(15, 16, 5, 2),
(16, 17, 2, 3),
(17, 17, 3, 2),
(18, 18, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `total` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `user_id`, `date`, `total`) VALUES
(1, 'Ali', 2, '0000-00-00 00:00:00.000000', 0),
(2, 'Noor', 2, '2023-09-07 09:23:00.000000', 0),
(3, 'Noor', 2, '2023-10-05 09:25:00.000000', 0),
(5, 'Hikmat', 2, '2023-10-05 09:46:00.000000', 0),
(6, 'Hikmat', 2, '2023-10-05 09:57:00.000000', 0),
(7, 'Ali', 2, '2023-10-05 10:35:00.000000', 0),
(8, 'Farid', 2, '2023-10-05 11:37:00.000000', 0),
(9, 'Ahmad', 2, '2023-10-05 11:42:00.000000', 0),
(10, 'Roham', 2, '2023-10-05 12:56:00.000000', 0),
(11, 'Ali', 2, '2023-10-06 03:29:00.000000', 0),
(12, 'Table 2', 2, '2023-10-06 03:54:00.000000', 0),
(13, 'Ahmad', 2, '2023-10-08 05:21:00.000000', 0),
(14, '2', 2, '2023-11-23 14:36:00.000000', 0),
(15, 'Rahmana', 2, '2023-12-03 15:34:00.000000', 0),
(16, 'Hikmat', 2, '2023-12-03 15:35:00.000000', 0),
(17, 'Noor', 2, '2024-01-19 16:41:00.000000', 0),
(18, 'ali', 10, '2025-05-06 06:54:00.000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `position`) VALUES
(2, 'Jalal', 'jalalnazari@icloud.com', '9a473409c997562542e563e525a91a6f', 'manager'),
(10, 'Jalal', 'jalal@icloud.com', '9a473409c997562542e563e525a91a6f', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` bigint(20) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `position` varchar(50) NOT NULL,
  `number` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `firstname`, `lastname`, `position`, `number`) VALUES
(1, 'Maqsoodi', 'Kalbi', 'chef', '+923222625292'),
(3, 'Maqsoodi', 'Mahmood', 'cleaner', '+923444847445'),
(4, 'Maqsoodi', 'Farid', 'chef', '+923456785676'),
(5, 'Hikamt', 'Mohammadi', 'waiter', '03202526995');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuitems`
--
ALTER TABLE `menuitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order-id` (`order_id`),
  ADD KEY `item-id` (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user-id` (`user_id`),
  ADD KEY `user-id_2` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menuitems`
--
ALTER TABLE `menuitems`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `menuitems` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
