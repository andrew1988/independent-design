-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 08:00 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `independent-design-main`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `message_status` tinyint(1) NOT NULL,
  `date_received` datetime NOT NULL,
  `ip_sent_from` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `website`, `message`, `message_status`, `date_received`, `ip_sent_from`) VALUES
(1, 'asdsad', 'mateikind@gmail.com', '1234567890', 'independent-design.eu', 'asasdasdas a das', 0, '0000-00-00 00:00:00', ''),
(2, 'asdsad', 'mateikind@gmail.com', '1234567890', 'independent-design.eu', 'asasdasdas a das', 0, '0000-00-00 00:00:00', ''),
(3, 'asdsad', 'mateikind@gmail.com', '1234567890', 'independent-design.eu', 'asasdasdas a das', 0, '0000-00-00 00:00:00', ''),
(4, 'asdsad', 'mateikind@gmail.com', '1234567890', 'independent-design.eu', 'asasdasdas a das', 0, '2018-06-15 21:53:39', ''),
(5, 'asdsad', 'mateikind@gmail.com', '1234567890', 'independent-design.eu', 'asasdasdas a das', 0, '2018-06-15 21:57:11', '127.0.0.1'),
(6, 'test', 'mateikind@gmail.com', '1234567890', 'site.com', 'test', 0, '2018-06-17 17:10:57', '::1'),
(7, 'ftp', 'mateikind@gmail.com', '1234567890', 'site.com', 'test', 0, '2018-06-17 18:02:49', '::1'),
(8, 'ftpfsdf', 'mateikind@gmail.com', '1234567890', 'site.com', 'test', 0, '2018-06-17 18:02:54', '::1'),
(9, 'asdasd', 'mateikind@gmail.com', '1234567890', 'site.com', 'asdasasd', 0, '2018-06-17 19:16:36', '::1'),
(10, 'asdasd', 'mateikind@gmail.com', '1234567890', 'site.com', 'asdasasd', 0, '2018-06-17 19:17:39', '::1'),
(11, 'asdsad', 'mateikind@gmail.com', '1234567890', 'site.com', 'asdad', 0, '2018-06-17 21:55:56', '::1'),
(12, 'qweqe', 'mateikind@gmail.com', '1234567890', 'site.com', 'qwwe', 0, '2018-06-17 21:57:25', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `last_login`) VALUES
(1, 'admin', 'admin', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
