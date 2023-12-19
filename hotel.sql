-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 05:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `feedback`) VALUES
(1, 'joysree', 'onek valo service'),
(2, 'Hamza', 'nice room views'),
(7, 'joy', 'So beautiful, so elegant'),
(8, 'kuddus', 'nice room views, just like a wow.\r\n'),
(9, 'rahim', 'not good bathroom');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `amount` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `phone`, `amount`) VALUES
(1, 'Mushfiq', '01343245432543', '15000'),
(2, 'Joysree', '01434354334', '2000'),
(3, 'shakib', '01321343232', '42422'),
(4, 'Maxwell', '0123545894756', '6000');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `number` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `price` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `number`, `description`, `price`) VALUES
(1, '     semi deluxe', '131', 'single room and bath', '1698'),
(2, '        super deluxe', '516', 'masterbed, attached bathroom Sea view', '15002');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `time` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `name`, `time`) VALUES
(1, 'mushfiq', 'Saturdat 9-5 pm'),
(2, 'joysree', 'monday 12-7pm'),
(3, 'karim', 'monday 9-5 pm'),
(4, 'abul', 'friday 9-5 pm'),
(5, 'al amin', 'monday 12-7pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `dob`, `address`, `usertype`, `userpassword`, `confirmpassword`) VALUES
(9, 'nafisur', 'nafisur@gmail.com', 2147483647, '2023-10-31', 'uttara dhaka', 'staff', '123456', '123456'),
(10, 'joysree', 'joysree@gmail.com', 2147483647, '2023-11-08', 'uttara dhaka', 'staff', '123456', '123456'),
(14, 'nourojmamayoyo', 'abcd@gmail.com', 1632103756, '2023-12-06', '47', 'staff', '123456', '123456'),
(17, 'nouroj', 'nouroj@gmail.com', 214748364, '2023-12-06', 'uttara dhaka 1230 yo', 'staff', '123456', '123456'),
(18, 'nourojmamayoyo', 'hello@gmail.com', 1632103756, '2023-12-06', '47', 'customer', '123456', '123456'),
(19, 'sergio ', 'haha@gmail.com', 2147483647, '2023-12-06', 'uttara dhaka 1230', 'customer', '123456', '123456'),
(20, 'abcd', 'mushfig2756@gmail.com', 1632103756, '2023-12-26', '47', 'staff', '123456', '123456'),
(21, 'Aditto', 'helloworld@gmail.com', 2147483647, '2023-12-18', 'sector-11 , Gareeb e newaj road, uttara dhaka', 'customer', '123456', '123456'),
(22, 'kuddus', 'kuddus@gmail.com', 2147483647, '2023-12-18', 'sector-11 , uttara dhaka', 'customer', '123456', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
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
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
