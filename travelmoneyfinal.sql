-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2021 at 04:01 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelmoneyfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_no` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `traveller_id` int(11) NOT NULL,
  `pickup_address` varchar(255) NOT NULL,
  `delivery_address` varchar(255) NOT NULL,
  `pickup_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `price` int(11) NOT NULL,
  `fragility` varchar(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_no`, `post_id`, `customer_id`, `traveller_id`, `pickup_address`, `delivery_address`, `pickup_date`, `delivery_date`, `price`, `fragility`, `weight`, `height`, `width`, `depth`, `order_status`) VALUES
(1, 4, 1154232350, 1123, 'addr1', 'addr2', '2021-05-22', '2021-05-27', 100, 'Fragile', 2, 30, 30, 30, 'To be confirmed by Traveller'),
(2, 4, 1154232350, 1123, 'addr1', 'addr2', '2021-05-22', '2021-05-27', 100, 'Fragile', 2, 30, 30, 30, 'To be confirmed by Traveller'),
(3, 5, 1154232350, 1123, 'addr1', 'addr2', '2021-05-22', '2021-05-22', 100, 'Not Fragile', 2, 30, 30, 30, 'To be confirmed by Traveller'),
(4, 5, 1154232350, 1123, 'addr1', 'addr2', '2021-05-22', '2021-05-25', 100, 'Fragile', 2, 30, 30, 30, 'To be confirmed by Traveller');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `start_location` varchar(255) NOT NULL,
  `end_location` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `weight` int(4) NOT NULL,
  `proposed_price` int(11) NOT NULL,
  `post_status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `unique_id`, `start_location`, `end_location`, `start_date`, `end_date`, `weight`, `proposed_price`, `post_status`) VALUES
(4, 1123, 'Mumbai', 'Pune', '2020-02-02', '2020-02-04', 2, 300, 'Not Active'),
(5, 1123, 'Mumbai', 'Pune', '2022-02-02', '2022-02-04', 2, 200, 'Not Active'),
(7, 1597690749, 'Mumbai', 'Pune', '2021-05-20', '2021-05-21', 2, 233, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `unique_id` int(200) NOT NULL,
  `type` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `user_status` varchar(10) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `aadhar_card` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`unique_id`, `type`, `first_name`, `last_name`, `email`, `pwd`, `user_status`, `img`, `aadhar_card`) VALUES
(1123, 'traveller', 'Neel', 'Choksi', 'neel@gmail.com', '123', 'Active now', '9slides.png', NULL),
(54229192, 'traveller', 'Neel', 'Choksi', 'neel4@gmail.com', '123', 'Active now', '16211468609sides.png', NULL),
(262647129, 'traveller', 'Neel', 'Choksi', 'neel6@gmail.com', '123', 'Active now', '16211471689sides.png', NULL),
(279179604, 'traveller', 'Neel', 'Choksi', 'neel2@gmail.com', '123', 'Active now', '16211465489sides.png', NULL),
(297776232, 'traveller', 'Neel', 'Choksi', 'neel3@gmail.com', '123', 'Active now', '16211467469sides.png', NULL),
(385801856, 'customer', 'Barry', 'Jones', 'barry@gmail.com', '123', 'Active now', '1621418628codeSnippet.png', NULL),
(796299009, 'traveller', 'Rakesh', 'Choksi', 'xyz@gmail.com', 'xyz', 'Active now', '1621264806IMG_20210510_002032.jpg', NULL),
(935583540, 'traveller', 'Neel', 'Choksi', 'fee@ddd.com', '123', 'Active now', '16211458609sides.png', NULL),
(1154232350, 'customer', 'John ', 'Doe', 'john@gmail.com', '123', 'Active now', '1621150812codeSnippet.jpg', NULL),
(1288567263, 'traveller', 'Neel', 'Choksi', 'neel5@gmail.com', '123', 'Active now', '16211469469sides.png', NULL),
(1581715094, 'traveller', 'Neel', 'Choksi', 'e@gmial.com', '123', 'Active now', '16211463419sides.png', NULL),
(1597690749, 'traveller', 'Neel', 'Choksi', 'neel7@gmail.com', '123', 'Active now', '16211475549sides.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_no`),
  ADD KEY `ID_TRAVELLER` (`traveller_id`),
  ADD KEY `ID_CUSTOMER` (`customer_id`),
  ADD KEY `ID_POST` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `traveller_post` (`unique_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`unique_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `ID_CUSTOMER` FOREIGN KEY (`customer_id`) REFERENCES `users` (`unique_id`),
  ADD CONSTRAINT `ID_POST` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`),
  ADD CONSTRAINT `ID_TRAVELLER` FOREIGN KEY (`traveller_id`) REFERENCES `users` (`unique_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `traveller_post` FOREIGN KEY (`unique_id`) REFERENCES `users` (`unique_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
