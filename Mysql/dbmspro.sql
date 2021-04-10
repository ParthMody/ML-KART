-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 11:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmspro`
--

-- --------------------------------------------------------

--
-- Table structure for table `botchat`
--

CREATE TABLE `botchat` (
  `chat_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message` text NOT NULL,
  `added_on` datetime NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `chatbot_hints`
--

CREATE TABLE `chatbot_hints` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(250) NOT NULL,
  `os` varchar(10) NOT NULL,
  `images` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `os`, `images`) VALUES
(2, 'IPhone 11', 59900, 'ios', 'img/iphone11w.png'),
(3, 'IPhone xr', 53500, 'ios', 'img/iphone10.png'),
(4, 'IPhone 11 pro', 108599, 'ios', 'img/iphone11.png'),
(5, 'Samsung S10', 49990, 'android', 'img/s10.png'),
(6, 'Samsung Galaxy S20 Ultra', 97999, 'android', 'img/samsungs8.png'),
(7, 'Samsung Galaxy NOTE 8 PLUS', 60000, 'android', 'img/samsungnote8plus.png'),
(10, 'ONEPLUS 7T', 37999, 'android', 'img/op7t.png'),
(11, 'ONEPLUS nord', 29999, 'android', 'img/opnord.png'),
(12, 'ONEPLUS 8', 41999, 'android', 'img/op8.png'),
(14, 'K20', 17499, 'android', 'img/k20.png'),
(15, 'Poco X3', 19999, 'android', 'img/poco.png'),
(16, 'Redmi note 9', 11999, 'android', 'img/xiaomi.png'),
(17, 'HP Pavilion x360', 61999, 'windows', 'img/hp1.png'),
(18, 'HP Pavilion', 61800, 'windows', 'img/hp2.png'),
(19, 'Hp Omen X 2s', 291000, 'windows', 'img/hp3.png'),
(20, 'Asus Zenbook Flip ', 93999, 'windows', 'img/asus1.png'),
(21, 'Asus Zenbook Duo', 83999, 'windows', 'img/asus2.png'),
(22, 'Asus Zephyrus Duo 15', 299999, 'windows', 'img/asus3.png'),
(23, 'Acer Aspire 5', 43999, 'windows', 'img/acer1.png'),
(24, 'Acer Swift 3', 59999, 'windows', 'img/acer2.png'),
(25, 'Acer Predator Helios 300', 169900, 'windows', 'img/acer3.png'),
(26, 'Dell Inspiron 5406', 71999, 'windows', 'img/dell1.png'),
(27, 'Dell XPS 9570', 132999, 'windows', 'img/dell2.png'),
(28, 'Dell Alienware m15', 221499, 'windows', 'img/dell3.png'),
(29, 'Lenovo Ideapad Slim', 51990, 'windows', 'img/lenovo1.png'),
(30, 'Lenovo Ideapad S540', 60999, 'windows', 'img/lenovo2.png'),
(31, 'Lenovo Legion Y540', 221499, 'windows', 'img/lenovo3.png'),
(32, 'Apple MacBook Air', 109990, 'macos', 'img/apple1.png'),
(33, 'Apple MacBook Pro', 142900, 'macos', 'img/apple2.png'),
(34, 'Apple MacBook Pro 16', 199000, 'macos', 'img/apple3.png'),
(35, 'IPhone 12 pro max', 119900, 'ios', 'img/iphone12.jpg'),
(36, 'Samsung S21 Ultra', 105999, 'andriod', 'img/sams21p.jpg'),
(37, 'Samsung S21', 69999, 'andriod', 'img/sams21.jpg'),
(38, 'Oneplus 9 pro', 64999, 'andriod', 'img/oneplus9p.png'),
(39, 'Samsung A72', 34999, 'andriod', 'img/sama72.jpg'),
(40, 'Redmi note 10 pro', 16999, 'andriod', 'img/rn10p.jpg'),
(41, 'Poco X3 pro', 18999, 'andriod', 'img/pocox3p.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `botchat`
--
ALTER TABLE `botchat`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `botchat`
--
ALTER TABLE `botchat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `botchat`
--
ALTER TABLE `botchat`
  ADD CONSTRAINT `botchat_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
