-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 05:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `pro_users`
--

CREATE TABLE `pro_users` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pro_users`
--

INSERT INTO `pro_users` (`id`, `name`, `email`, `password`) VALUES
(1, 'rakib', 'rakib@gmail.com', 'admin#12345aA!'),
(2, 'Vielka', 'wadyjeqe@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(3, 'sanowar', 'sanowarwpneed@gmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(6, 'Mosharof', 'mosharaf@gmail.com', 'ba4b456683cf24fdabcfb2508e147017'),
(7, 'Utsob', 'utsob@gmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(8, 'Ashiq', 'ashik@gmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(9, 'Tanvir', 'tanvir@gmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(10, 'Mou', 'mou@gmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(11, 'Alamin', 'alamin@gmail.com', '9f576df9f25356e99403745432b01a55'),
(12, 'Fariha', 'fariha@gmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pro_users`
--
ALTER TABLE `pro_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pro_users`
--
ALTER TABLE `pro_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
