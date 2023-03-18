-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 09:16 AM
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(6, 'riski', '$2y$10$8zBECAp1nb2MvHGWqWUf0.xT1oWL6GV66JqUqlNH4rayCUfhYTnFq'),
(7, 'User', '$2y$10$XM9qKf6K5aacf1ME/CBj0e5K81Bfql5yx.Pg9DUJmw70o.ks/0tUW'),
(8, 'User', '$2y$10$eyqVaEngAMwHjyjD0fCmg.Pj06nW/vdeNT0sgJAGFd7JNifVoSOoS'),
(9, 'User', '$2y$10$9Jj85Td6/FZLmNamPaYZsOdCxbI0cN8gKsd6QMrRg77a4zohNXCZm'),
(10, 'User', '$2y$10$.6GzgGT5PP2fBofuIMRypO7vaYVbaYh723gR5lFF7I8tBS5I3LPRK'),
(11, 'User', '$2y$10$HR4lB15ptKfh7yqSB6p/hOG/szvGDz8a./C2U5GWBtW89qZo7o2ei'),
(12, 'User', '$2y$10$NoiYkCZWdKgPqRyLeup0JewOxB6PLv2ahaMkgNCNw49eq6T7koxXW'),
(13, 'User', '$2y$10$yq0tmXYcFUurrGqHZaG02OVw..Nv8OGoZiacN/X77noUyiuBRNgNW'),
(14, 'User', '$2y$10$tabXbK1HDzw3Y72wCbNB9./HpBFHo77ti4d21.rS8nZt.ZZcx5yny'),
(15, 'User', '$2y$10$foHRd8IWjC7VzcvqTS6ufOEdOpEGGRpTHnJwip.j48YqJJiQ/3gi.'),
(16, 'User', '$2y$10$lvWBsWgV3Eexhzb.mF8u/eMRjUQg.DN9G/B5kBYFGODvumP0/Czsi');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
