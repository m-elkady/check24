-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jul 26, 2019 at 02:21 PM
-- Server version: 5.7.25
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `url` varchar(90) DEFAULT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  `ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `url`, `comment`, `date`, `ip`) VALUES
(1, 1, 'Mohammed Elkady', NULL, '#', 'Yes it is very great', '2019-07-26 00:00:00', ''),
(2, 1, 'Mohammed Elkady', 'm.elkady365@gmail.com', '#', 'Great Article', '2019-07-26 14:05:00', '172.18.0.1'),
(3, 1, 'Mohammed Elkady', 'm.elkady365@gmail.com', '#', 'Great Article', '2019-07-26 14:05:00', '172.18.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `date`, `user_id`) VALUES
(1, 'Hello Blog ', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.\r\n\r\nPraesent commodo cursus magna, vel scelerisque nisl consectetur et.\r\nDonec id elit non mi porta gravida at eget metus.\r\nNulla vitae elit libero, a pharetra augue.\r\nEtiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.\r\n\r\nDonec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.', '2019-07-26', 1),
(2, 'Hello Blog ', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.\r\n\r\nPraesent commodo cursus magna, vel scelerisque nisl consectetur et.\r\nDonec id elit non mi porta gravida at eget metus.\r\nNulla vitae elit libero, a pharetra augue.\r\nEtiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.\r\n\r\nDonec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.', '2019-07-23', 1),
(3, 'Hello Blog ', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.\r\n\r\nPraesent commodo cursus magna, vel scelerisque nisl consectetur et.\r\nDonec id elit non mi porta gravida at eget metus.\r\nNulla vitae elit libero, a pharetra augue.\r\nEtiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.\r\n\r\nDonec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.', '2019-07-24', 1),
(4, 'Hello Blog ', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.\r\n\r\nPraesent commodo cursus magna, vel scelerisque nisl consectetur et.\r\nDonec id elit non mi porta gravida at eget metus.\r\nNulla vitae elit libero, a pharetra augue.\r\nEtiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.\r\n\r\nDonec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.', '2019-07-24', 1),
(5, 'Second Article', 'Hello My friends', '2019-07-26', 1),
(6, 'Second Article', 'Hello My friends', '2019-07-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` char(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `address`) VALUES
(1, 'melkady', '$2y$10$jrUjXgwQ7BRiwgut.lZ1iu16Iu/FpsWJ2M6FgM5tRp4jkxQdFn/gK', 'Mohammed Elkady', 'Egypt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
