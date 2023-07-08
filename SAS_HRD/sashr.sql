-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 06:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sas_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `sashr`
--

CREATE TABLE `sashr` (
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `address` varchar(30) NOT NULL,
  `nationality` text NOT NULL,
  `bdate` date NOT NULL,
  `gender` text NOT NULL,
  `civil_status` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `cpno` int(11) NOT NULL,
  `fatname` text NOT NULL,
  `fatbdate` date NOT NULL,
  `motname` text NOT NULL,
  `motbdate` date NOT NULL,
  `pschool` text NOT NULL,
  `saddress` varchar(100) NOT NULL,
  `yrgraduated` date NOT NULL,
  `scndschool` text NOT NULL,
  `scndsaddress` varchar(50) NOT NULL,
  `scndyrgraduated` date NOT NULL,
  `tschool` text NOT NULL,
  `tsaddress` varchar(50) NOT NULL,
  `tyrgraduated` varchar(30) NOT NULL,
  `wduration` varchar(30) NOT NULL,
  `cname` text NOT NULL,
  `caddress` varchar(50) NOT NULL,
  `position` text NOT NULL,
  `rfl` text NOT NULL,
  `doe` date NOT NULL,
  `cp` text NOT NULL,
  `stype` text NOT NULL,
  `sa` int(100) NOT NULL,
  `ssnum` int(20) NOT NULL,
  `pinum` int(20) NOT NULL,
  `tax` int(20) NOT NULL,
  `phnum` int(20) NOT NULL,
  `umpnum` int(20) NOT NULL,
  `ninum` int(20) NOT NULL,
  `pstnum` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
