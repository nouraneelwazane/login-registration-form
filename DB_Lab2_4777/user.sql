-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 08:22 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `username`, `password`, `registration_date`) VALUES
(1, 'test@test.com', 'test', 'testpassword', '2014-10-28 01:11:15'),
(2, 'nour@gmail.com', 'nour', '123456', '2019-10-16 23:19:59'),
(3, 'noura@gmail.com', 'noura', '123456', '2019-10-16 23:25:55'),
(4, 'nada@gmail.com', 'nada', '123456', '2019-10-16 23:27:08'),
(5, 'nourane@hotmail.com', 'nourane', '123456', '2019-10-16 23:36:14'),
(6, 'rana@gmail.com', 'rana', '123456', '2019-10-16 23:38:23'),
(7, 'nourane@gmail.com', 'nourane', '123456', '2019-10-16 23:38:54'),
(8, 'nada@yahoo.com', 'nada', '958627', '2019-10-16 23:44:27'),
(9, 'nourane@yahoo.com', 'nourane', 'hello123', '2019-10-16 23:56:06'),
(10, 'noura@yahoo.com', 'Nourane', 'hello123', '2019-10-16 23:56:47'),
(11, 'ahmed@yahoo.com', 'mido', 'hamada123', '2019-10-16 23:59:12'),
(12, 'hamada@hamada.com', 'hamada', 'hamadaaaa2563', '2019-10-17 00:01:22'),
(13, 'hello@hello.com', 'hello', 'hello', '2019-10-17 23:36:40'),
(14, 'nadat@yahoo.com', 'Nada', 'defrtg', '2019-10-17 23:43:13'),
(15, 'nourane@nourane.com', 'nourane', '1234', '2019-10-18 00:03:29'),
(16, 'n@nn.com', 'testingn', 'nnnn', '2019-10-18 00:05:48'),
(17, 'nn@nn.com', 'testingn', '1234', '2019-10-18 00:07:38'),
(18, 'ttest@test.com', 'Ahmed', '852369', '2019-10-18 00:14:56'),
(19, 'hgjjg@ggjj.jjju', 'mm', 'llkkm', '2019-10-18 00:15:55'),
(20, 'nihal@yahoo.com', 'Nihal', 'nana', '2019-10-18 20:02:38'),
(21, 'hello@world.com', 'HelloWorld', 'hi', '2019-10-19 22:49:29'),
(22, 'noudi@noudi.com', 'Nada', 'nadanido', '2019-10-21 17:56:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
