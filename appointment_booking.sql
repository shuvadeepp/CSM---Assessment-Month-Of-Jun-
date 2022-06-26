-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 10:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `patientsfrm`
--

CREATE TABLE `patientsfrm` (
  `intID` int(11) NOT NULL,
  `vchPatientName` varchar(45) DEFAULT NULL,
  `vchAge` varchar(45) DEFAULT NULL,
  `intGender` varchar(45) DEFAULT NULL,
  `vchAppointDate` varchar(45) DEFAULT NULL,
  `vchDescription` varchar(128) DEFAULT NULL,
  `vchPatientAddrs` varchar(45) DEFAULT NULL,
  `vchCommEmail` varchar(45) DEFAULT NULL,
  `intMob` varchar(45) DEFAULT NULL,
  `otp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientsfrm`
--

INSERT INTO `patientsfrm` (`intID`, `vchPatientName`, `vchAge`, `intGender`, `vchAppointDate`, `vchDescription`, `vchPatientAddrs`, `vchCommEmail`, `intMob`, `otp`) VALUES
(1, 'shuvadeep', '24', 'male', '2022-06-26', 'fiver', 'bbsr', 'shuvadeep@gmail.com', '9999999999', NULL),
(2, 'shuvashree', '25', 'male', '2022-06-26', 'hetache', 'kolkata', 'shuvashree@gmail.com', '8888888888', NULL),
(4, 'admin', '24', 'female', '2022-06-28', 'stomac pain', 'bbsr', 'admin@gmail.com', '9877777777', NULL),
(5, 'satya', '27', 'male', '2022-06-30', 'covid', 'khurdha', 'satya@gmail.com', '9876544444', NULL),
(6, 'satya', '27', 'male', '2022-06-30', 'covid', 'khurdha', 'satya@gmail.com', '9876544444', NULL),
(7, 'hello', '34', 'female', '2022-06-29', 'hello', 'bbsr', 'rawknee8@gmail.com', '4444444444', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patientsfrm`
--
ALTER TABLE `patientsfrm`
  ADD PRIMARY KEY (`intID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patientsfrm`
--
ALTER TABLE `patientsfrm`
  MODIFY `intID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
