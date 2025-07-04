-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2025 at 09:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamerwiz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerqueryform`
--

CREATE TABLE `customerqueryform` (
  `S.No` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `productName` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `supportQuery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerqueryform`
--

INSERT INTO `customerqueryform` (`S.No`, `firstname`, `lastname`, `productName`, `email`, `supportQuery`) VALUES
(2, 'sudeshna', 'chakraborty', '', 'mizumiatwork@gmail.com', 'hi'),
(3, '', '', '', 'mizumiatwork@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `giveawayform`
--

CREATE TABLE `giveawayform` (
  `S.No` int(11) NOT NULL,
  `player_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `coupon` varchar(50) NOT NULL,
  `giveaway_product` varchar(100) NOT NULL,
  `terms` tinyint(1) NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giveawayform`
--

INSERT INTO `giveawayform` (`S.No`, `player_name`, `email`, `address`, `coupon`, `giveaway_product`, `terms`, `created_at`) VALUES
(1, 'Shreya', 'mizumiatwork@gmail.com', '6/1 jetia road bally howrah', '1234', 'PRIDE PX278 WAVE Giveaway', 1, 2147483647),
(2, 'Shreya', 'mizumiatwork@gmail.com', '6/1 jetia road bally howrah', '1234', 'PRIDE PX278 WAVE Giveaway', 1, 2147483647),
(3, 'Shreya', 'mizumiatwork@gmail.com', '6/1 jetia road bally howrah', '1234', 'PRIDE PX278 WAVE Giveaway', 1, 2147483647),
(4, 'Shreya', 'mizumiatwork@gmail.com', 'hi', '12345', 'PRIDE PX278 WAVE Giveaway', 1, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `register_form`
--

CREATE TABLE `register_form` (
  `S.No` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_form`
--

INSERT INTO `register_form` (`S.No`, `name`, `username`, `email`, `password`) VALUES
(3, 'Sudeshna', 'mizoo', 'mizumiatwork@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tournament_regstn_form`
--

CREATE TABLE `tournament_regstn_form` (
  `S.No` int(11) NOT NULL,
  `player_name` varchar(100) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `char_id` varchar(100) NOT NULL,
  `gameType` varchar(50) NOT NULL,
  `terms` tinyint(1) NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tournament_regstn_form`
--

INSERT INTO `tournament_regstn_form` (`S.No`, `player_name`, `team_name`, `email`, `char_id`, `gameType`, `terms`, `created_at`) VALUES
(1, 'Shreya', 'mizofam', 'mizumiatwork@gmail.com', '516978425632', 'BGMI', 1, 2147483647),
(2, 'Shreya', 'mizofam', 'mizumiatwork@gmail.com', '516978425632', 'BGMI', 1, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerqueryform`
--
ALTER TABLE `customerqueryform`
  ADD PRIMARY KEY (`S.No`);

--
-- Indexes for table `giveawayform`
--
ALTER TABLE `giveawayform`
  ADD PRIMARY KEY (`S.No`);

--
-- Indexes for table `register_form`
--
ALTER TABLE `register_form`
  ADD PRIMARY KEY (`S.No`);

--
-- Indexes for table `tournament_regstn_form`
--
ALTER TABLE `tournament_regstn_form`
  ADD PRIMARY KEY (`S.No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerqueryform`
--
ALTER TABLE `customerqueryform`
  MODIFY `S.No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `giveawayform`
--
ALTER TABLE `giveawayform`
  MODIFY `S.No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register_form`
--
ALTER TABLE `register_form`
  MODIFY `S.No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tournament_regstn_form`
--
ALTER TABLE `tournament_regstn_form`
  MODIFY `S.No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
