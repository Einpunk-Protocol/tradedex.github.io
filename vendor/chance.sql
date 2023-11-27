-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 23, 2023 at 12:44 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ewallet` varchar(255) DEFAULT NULL,
  `bwallet` varchar(255) DEFAULT NULL,
  `pm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `ewallet`, `bwallet`, `pm`) VALUES
(1, 'johnshebzy@gmail.com', 'iceblock123', 'etherium', 'bitcoin', 'perfect money');

-- --------------------------------------------------------

--
-- Table structure for table `adminmessage`
--

CREATE TABLE `adminmessage` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `msgid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminmessage`
--

INSERT INTO `adminmessage` (`id`, `email`, `title`, `message`, `msgid`) VALUES
(1, 'bandabad10@proton.me', 'welcome', 'welcome to eliters', 'T1chHhucb');

-- --------------------------------------------------------

--
-- Table structure for table `btc`
--

CREATE TABLE `btc` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usd` decimal(10,2) NOT NULL,
  `btc` decimal(10,8) NOT NULL,
  `eth` decimal(10,8) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tnxid` varchar(255) NOT NULL,
  `refcode` varchar(255) DEFAULT NULL,
  `referred` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messageadmin`
--

CREATE TABLE `messageadmin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `package1`
--

CREATE TABLE `package1` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `froms` decimal(10,2) NOT NULL,
  `tos` decimal(10,2) NOT NULL,
  `bonus` decimal(10,2) NOT NULL,
  `increase` decimal(5,2) NOT NULL,
  `duration` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package1`
--

INSERT INTO `package1` (`id`, `pname`, `email`, `froms`, `tos`, `bonus`, `increase`, `duration`, `date_created`) VALUES
(1, 'Gold', 'johnshebzy@gmail.com', '100.00', '1000.00', '20.00', '4.00', 30, '2023-10-19 12:03:21'),
(2, 'silver', 'johnshebzy@gmail.com', '500.00', '700.00', '50.00', '7.00', 15, '2023-10-19 12:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `wl` decimal(10,2) NOT NULL,
  `rb` decimal(10,2) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `cy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sname`, `wl`, `rb`, `currency`, `bname`, `email`, `phone`, `title`, `logo`, `cy`) VALUES
(1, 'http://localhost:8888/Crypto-elite', '5000.00', '70.00', 'USD', 'Crypto Elite', 'bandabad10@gmail.com', '4023020552', 'prof', NULL, 2022),
(2, 'http://localhost:8888/Crypto-elite', '1000.00', '100.00', 'USD', 'Crypto Elite', 'jankanquest@gmail.com', '4023020552', 'PROF', NULL, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `token` varchar(10) DEFAULT NULL,
  `refcode` varchar(10) DEFAULT NULL,
  `bonus` decimal(10,2) DEFAULT '0.00',
  `session` tinyint(4) DEFAULT '0',
  `verify` tinyint(1) DEFAULT '0',
  `package` varchar(255) DEFAULT NULL,
  `pm` varchar(255) DEFAULT NULL,
  `eth` varchar(255) DEFAULT NULL,
  `btc` varchar(255) DEFAULT NULL,
  `2fa` int(11) NOT NULL DEFAULT '0',
  `address` text,
  `image` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activate` tinyint(4) DEFAULT '0',
  `profit` decimal(10,2) DEFAULT '0.00',
  `pname` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  `duration` int(11) DEFAULT NULL,
  `increase` decimal(5,2) DEFAULT NULL,
  `usd` decimal(10,2) DEFAULT NULL,
  `referred` varchar(255) DEFAULT NULL,
  `walletbalance` decimal(10,2) DEFAULT '0.00',
  `froms` decimal(10,2) NOT NULL,
  `tos` decimal(10,2) NOT NULL,
  `refbonus` decimal(10,2) DEFAULT NULL,
  `pdate` datetime DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `password`, `phone`, `token`, `refcode`, `bonus`, `session`, `verify`, `package`, `pm`, `eth`, `btc`, `2fa`, `address`, `image`, `date`, `activate`, `profit`, `pname`, `active`, `status`, `duration`, `increase`, `usd`, `referred`, `walletbalance`, `froms`, `tos`, `refbonus`, `pdate`, `country`) VALUES
(4, 'john', 'shebzy', 'johnshebzy', 'bandabad10@proton.me', 'iceice', '4023020552', '\\eVuSbfwMJ', 'eVXNgeG3SH', '50.00', 0, 0, NULL, NULL, NULL, NULL, 0, '', NULL, '2023-10-21 02:42:30', 1, '0.00', ' silver', 0, 0, 15, '7.00', '1000.00', '', '1120.00', '500.00', '0.00', '0.00', '2023-10-22 23:16:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wbtc`
--

CREATE TABLE `wbtc` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `wal` varchar(255) NOT NULL,
  `moni` decimal(10,2) NOT NULL,
  `mode` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tnx` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminmessage`
--
ALTER TABLE `adminmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `btc`
--
ALTER TABLE `btc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messageadmin`
--
ALTER TABLE `messageadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package1`
--
ALTER TABLE `package1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wbtc`
--
ALTER TABLE `wbtc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminmessage`
--
ALTER TABLE `adminmessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `btc`
--
ALTER TABLE `btc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messageadmin`
--
ALTER TABLE `messageadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package1`
--
ALTER TABLE `package1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wbtc`
--
ALTER TABLE `wbtc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
