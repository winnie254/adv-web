-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 01:23 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('louiskaranja@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('louiskaranja@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
('louiskaranja@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('winnierosenjoro@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e'),
('winnierosenjoro@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`email`, `password`) VALUES
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('winnierosenjoro@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e'),
('lucyanyang@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('louiskaranja@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('shemmakau@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('shemmakau@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('shemmakau@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('winnierosenjoro@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e'),
('winnierosenjoro@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e'),
('winnierosenjoro@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e'),
('winnierosenjoro@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
