-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 06:21 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aiob`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `ID` int(200) NOT NULL,
  `Bank` varchar(200) NOT NULL,
  `TypeOfAccount` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `EmailId` varchar(200) NOT NULL,
  `MobileNo` bigint(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `State` varchar(200) NOT NULL,
  `Country` varchar(200) NOT NULL,
  `Age` varchar(200) NOT NULL,
  `DOB` varchar(200) NOT NULL,
  `AadharCardNumber` varchar(200) NOT NULL,
  `PanCardNumber` varchar(200) NOT NULL,
  `AccountHolderGender` varchar(200) NOT NULL,
  `AnnualIncome` varchar(200) NOT NULL,
  `NomineeName` varchar(200) NOT NULL,
  `NomineeAccountNumber` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`ID`, `Bank`, `TypeOfAccount`, `Name`, `EmailId`, `MobileNo`, `Address`, `State`, `Country`, `Age`, `DOB`, `AadharCardNumber`, `PanCardNumber`, `AccountHolderGender`, `AnnualIncome`, `NomineeName`, `NomineeAccountNumber`) VALUES
(2, 'Saving', 'Saving', 'ABC', 'ABC@gmail.com', 1122334455, 'Bijapur', 'Karnataka', 'India', '22', '2001-04-06', '1122334455', '1122334455', 'Male', '20000', 'MNO', '112233445566');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(200) NOT NULL,
  `custMobile` bigint(200) DEFAULT NULL,
  `custEmail` varchar(200) DEFAULT NULL,
  `custPassword` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `custMobile`, `custEmail`, `custPassword`) VALUES
(2, 7795814930, 'ydp143452@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerdetails`
--
ALTER TABLE `customerdetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerdetails`
--
ALTER TABLE `customerdetails`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
