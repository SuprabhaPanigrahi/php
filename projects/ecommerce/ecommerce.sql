-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2024 at 04:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Automobiles'),
(5, 'Books'),
(3, 'Electronics'),
(2, 'Home interior'),
(4, 'Technologies'),
(6, 'Toys');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(18,2) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Camera', 50000.00, 'Sony Camera', 'camera-1.jpg', 3, '2024-09-13 09:55:29', '2024-09-13 09:55:29'),
(3, 'Camera Slim', 45000.00, 'Sony Camera', 'camera-2.jpg', 3, '2024-09-13 09:56:56', '2024-09-13 09:56:56'),
(4, 'HeadPhone', 5000.00, 'Black Head Phone', 'headphone.jpg', 3, '2024-09-13 09:57:51', '2024-09-13 09:57:51'),
(5, 'IPhone', 90000.00, 'Apple  IPhone', 'iphone.jpg', 3, '2024-09-13 09:58:54', '2024-09-13 09:58:54'),
(6, 'Laptop', 85000.00, 'Lenevo Laptop', 'laptop.jpg', 3, '2024-09-13 09:59:59', '2024-09-13 09:59:59'),
(8, 'Apple Notebook', 95000.00, 'Mac Book', 'laptop-2.jpg', 3, '2024-09-13 10:00:58', '2024-09-13 10:00:58'),
(9, 'Mouse', 500.00, 'Wireless  Mouse', 'mouse.jpg', 3, '2024-09-13 10:01:55', '2024-09-13 10:01:55'),
(10, 'Camera-2', 50000.00, 'Camera-2', 'camera-1.jpg', 3, '2024-09-13 10:54:27', '2024-09-13 10:54:27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Alok Kumar', 'alok@example.com', '12345', '2024-09-13 11:49:00', '2024-09-13 11:49:00'),
(2, 'Rakesh', 'rakesh@gmail.com', '12345', '2024-09-13 11:49:52', '2024-09-13 11:49:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
