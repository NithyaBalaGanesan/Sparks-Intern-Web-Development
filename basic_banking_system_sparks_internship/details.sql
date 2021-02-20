-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29
-- XAMPP Version: 7.4.11
-- Windows Version:  Home  64-bit

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `details`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `credit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Email`, `Credit`) VALUES
('Alice', 'alice@gmail.com', '90000'),
('Charlotte', 'charlotte55@gmail.com', '32100'),
('Luna', 'luna90@gmail.com', '86000'),
('Isabella', 'isa123@gmail.com', '900000'),
('Victoria', 'victoria@gmail.com', '83000'),
('Lucy', 'lucy90@gmail.com', '27800'),
('Valerie', 'vale87@gmail.com', '999000'),
('Remi', 'remi890@gmail.com', '59000'),
('Zuri', 'zuri90@gmail.com', '958050'),
('Zoey', 'zoey99@gmail.com', '453000');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
