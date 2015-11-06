-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2015 at 02:45 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake_conestoga_pizzeria`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `size` varchar(20) NOT NULL,
  `crust_type` varchar(20) NOT NULL,
  `toppings` varchar(100) NOT NULL,
  `created` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `size`, `crust_type`, `toppings`, `created`, `status`) VALUES
(14, 6, 'Small', 'Pan', 'Beef, Ham', '2015-11-06', 'Past'),
(15, 6, 'Medium', 'Hand-Tossed', 'Sausage, Pineapple', '2015-11-06', 'Current');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `postal_code` varchar(6) NOT NULL,
  `city` varchar(20) NOT NULL,
  `province` varchar(2) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `name`, `address`, `postal_code`, `city`, `province`, `telephone`, `email`) VALUES
(5, 'Admin', '$2y$10$V5uGmY/Y8CEDy7uwQEYCf.B95Lq18smAh3.XjGhn8zorRVz2ArnEe', 'admin', '', '', '', '', '', '', ''),
(6, 'Tiago', '$2y$10$60fHrXOPTjbrIKxwWCVYE.Uc1WqmEyhQVptqW.4F8UAXiYt3KVR7q', 'customer', 'Tiago', 'Pioneer Dr', 'S2EN4U', 'Kitchener', 'ON', '4357454357', 'tiago@email.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
