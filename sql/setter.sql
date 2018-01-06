-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2018 at 09:50 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `setter`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `userID` int(50) NOT NULL,
  `userName` char(50) NOT NULL,
  `physName` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `sched` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `error`
--

CREATE TABLE `error` (
  `error` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `error`
--

INSERT INTO `error` (`error`) VALUES
('Anver Z. Marapao'),
(''),
('2018/01/23'),
('2018/01/23'),
('Dale R. Aragon'),
(''),
('2018/02/15'),
('9:00-10:00 AM'),
('Anver Z. Marapao'),
('wqewqeqw'),
('2018/01/26'),
('11:00-11:30 AM'),
('Anver Z. Marapao'),
('a'),
('2018/01/26'),
('8:00-9:00 AM'),
('Michael D. Guilaran'),
('qeqweq'),
('2018/01/26'),
('9:00-10:00 AM'),
('Dale R. Aragon'),
('a'),
('2018/02/05'),
('11:00-11:30 AM'),
('Michael D. Guilaran'),
('2312312321'),
('2018/01/26'),
('9:00-10:00 AM'),
('Dale R. Aragon'),
('a'),
('2018/01/26'),
('8:00-9:00 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `userID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
