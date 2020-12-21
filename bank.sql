-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 07:32 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sender` varchar(40) NOT NULL,
  `receiver` varchar(40) NOT NULL,
  `amount` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sender`, `receiver`, `amount`, `date`) VALUES
('shivanghee kaw', 'rajender kaw', 1000, '0000-00-00 00:00:00'),
('shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 09:32:32'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 09:40:27'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 11:32:35'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 11:33:02'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 11:52:37'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 11:53:27'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 11:54:04'),
('Shivanghee kaw', 'abcd', 1000, '2020-12-20 11:54:24'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 12:09:10'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 12:10:25'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 12:12:59'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 12:15:23'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 12:16:00'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 12:16:21'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 12:18:21'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 12:19:44'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 12:19:57'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 12:20:51'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 12:21:49'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 12:22:48'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 12:23:16'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 12:27:35'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 16:30:07'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 16:51:11'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 16:52:03'),
('Shivanghee kaw', 'rajender kaw', 1000, '2020-12-20 17:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Shivanghee kaw', 'kawshivanghee@yahoo.com', 7000),
(2, 'rajender kaw', 'rajender@gmail.com', 33000),
(3, 'Sushma kaw', 'sushma@gmail.com', 87820),
(4, 'krishna', 'krishna1@gmail.com', 80000),
(5, 'ishika das', 'dasishika@gmail.com', 53422),
(6, 'disha lund', 'disha@gmail.com', 52000),
(7, 'Jungkook', 'bts@gmail.com', 56000),
(8, 'lakshmi ', 'lakshmi@gmail.com', 51000),
(9, 'niharika', 'niharika@gmail.com', 30190),
(10, 'akshay', 'akshay@gmail.com', 45010);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
