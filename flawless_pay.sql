-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 02:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flawless_pay`
--

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `hostel_id` int(11) NOT NULL,
  `hostel_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`hostel_id`, `hostel_name`) VALUES
(1, 'Hosanna'),
(2, 'Dufie'),
(3, 'Charlotte'),
(4, 'Masere'),
(5, 'Tanko');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(10) NOT NULL DEFAULT 'DONE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `invoice_no`, `order_date`, `order_status`) VALUES
(3, 11, 380365, '2022-11-20', 'DONE'),
(4, 14, 344990, '2022-11-21', 'DONE');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `amount`, `user_id`, `order_id`, `payment_date`) VALUES
(3, 7800, 11, 3, '2022-11-20'),
(4, 4500, 14, 4, '2022-11-21');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `hostel_id` int(11) NOT NULL,
  `room_name` varchar(100) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `room_gender` varchar(50) NOT NULL,
  `room_price` double NOT NULL,
  `room_num` int(11) NOT NULL DEFAULT 0,
  `room_cap` int(11) NOT NULL,
  `room_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `hostel_id`, `room_name`, `room_type`, `room_gender`, `room_price`, `room_num`, `room_cap`, `room_status`) VALUES
(1, 3, 'A4            ', '2-in-a-Room', 'Male', 4950, 2, 2, 1),
(2, 3, 'A21', '2-in-a-Room', 'Female', 4950, 1, 2, 0),
(3, 3, 'B16', '3-in-a-Room', 'Male', 4500, 2, 3, 0),
(4, 3, 'C4', '4-in-a-Room', 'Male', 3000, 1, 4, 0),
(5, 3, 'G4', '3-in-a-Room', 'Female', 4000, 0, 3, 0),
(6, 1, 'E2', '3-in-a-Room', 'Male', 4300, 1, 3, 0),
(7, 3, 'B11', '4-in-a-Room', 'Female', 3400, 0, 4, 0),
(8, 1, 'C18', '2-in-a-Room', 'Female', 5900, 0, 2, 0),
(9, 1, 'A5', '3-in-a-Room', 'Male', 5300, 0, 3, 0),
(10, 1, 'A6', '3-in-a-Room', 'Male', 5300, 0, 3, 0),
(11, 5, 'G4', '2-in-a-Room', 'Female', 8000, 0, 2, 0),
(12, 4, 'B2', '2-in-a-Room', 'Female', 6500, 1, 2, 0),
(13, 4, 'E9', '3-in-a-Room', 'Male', 5000, 0, 3, 0),
(14, 5, 'A2', '2-in-a-Room', 'Male', 7800, 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_contact` varchar(50) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT 3,
  `hostel_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_gender`, `user_password`, `user_contact`, `user_role`, `hostel_id`, `room_id`) VALUES
(11, 'Dennis Kwarteng', 'dkwart@gmail.com', 'Male', '$2y$10$roP.5Gl.a4MFHHbY4PuCve91br54LIJYqvOpDsyrZ91g8QnEfOEpq', '0244568972', 0, NULL, NULL),
(13, 'Philip Amarteyfio', 'philip.amarteyfio@ashesi.edu.gh', 'Male', '$2y$10$aDjsv1sbvPH32vUFFCpi3e7NFZcQmspWNMgAuM3HBwg0HpupAkoyC', '0202145735', 3, 1, 6),
(14, 'Paa Kwasi Addae', 'pkaddae@gmail.com', 'Male', '$2y$10$OjwqMNlV7.N7JQuFM.D2NOS0XLaiv5QvhoF1osmeajW3eEP0XTfE6', '0203456789', 3, 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`hostel_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `hostel_id` (`hostel_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `hostel_id` (`hostel_id`),
  ADD KEY `room_id` (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `hostel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`hostel_id`) REFERENCES `hostels` (`hostel_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
