-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 06:27 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthinsurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustID` int(11) NOT NULL,
  `FN` varbinary(20) NOT NULL,
  `LN` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `EmailID` varchar(30) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustID`, `FN`, `LN`, `Gender`, `DOB`, `EmailID`, `UserName`, `Password`) VALUES
(1, 0x4a6865656c, 'Mehta', 'Female', '2019-02-12', 'zeelmehta@gmail.com', 'zeel12345', '1234'),
(2, 0x4a6865656c, 'Mehta', 'Female', '2020-01-13', 'zeelmehta@gmail.com', 'zeel12345', '1234'),
(3, 0x4a6865656c, 'Mehta', 'Female', '2020-01-14', 'zeelmehta@gmail.com', 'zeel12345', '1234'),
(4, 0x4a6865656c, 'Mehta', 'Female', '2020-01-14', 'zeelmehta@gmail.com', 'zeel12345', ''),
(5, 0x4a6865656c, 'Mehta', 'Female', '2020-01-14', 'zeelmehta@gmail.com', 'zeel12345', ''),
(6, 0x4a6865656c, 'Mehta', 'Female', '2020-01-27', 'zeelmehta@gmail.com', 'zeel12345', 'sdfghj');

-- --------------------------------------------------------

--
-- Table structure for table `customerinsurance`
--

CREATE TABLE `customerinsurance` (
  `CustID` int(11) NOT NULL,
  `PolicyID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `HistID` int(11) NOT NULL,
  `Score` int(11) NOT NULL,
  `DateOfReport` date NOT NULL,
  `CustID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `PolicyID` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Installment` varchar(25) NOT NULL,
  `Period` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Validity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`PolicyID`, `Name`, `Installment`, `Period`, `Amount`, `Validity`) VALUES
('AAA00001', 'Health Companion', '4383 + GST', 1, 2, 2),
('AAA00002', 'Health Optima', '6409 + GST', 2, 2, 3),
('AAA00003', 'Health Suraksha', '15936 + GST', 3, 5, 5),
('AAA00004', 'Jeevan Suraksha', '12954 + GST', 2, 7, 4),
('AAA00005', 'Life Protection', '22190 + GST', 3, 10, 5),
('AAA00006', 'Star  Health', '11086 + GST', 2, 5, 5),
('AAA00007', 'Health Care', '18080 + GST', 3, 7, 5),
('AAA00008', 'Life Raksha', '34190 + GST', 3, 10, 7),
('AAA00009', 'iHealth Plan', '9908+ GST', 2, 2, 5),
('AAA00010', 'Health Recover', '12456 + GST', 3, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `SrNo` int(11) NOT NULL,
  `CustID` int(11) NOT NULL,
  `DateOfQuiz` date NOT NULL,
  `Q1` int(11) NOT NULL,
  `Q2` int(11) NOT NULL,
  `Q3` int(11) NOT NULL,
  `Q4` int(11) NOT NULL,
  `Q5` int(11) NOT NULL,
  `Q6` int(11) NOT NULL,
  `Q7` int(11) NOT NULL,
  `Q8` int(11) NOT NULL,
  `Q9` int(11) NOT NULL,
  `Q10` int(11) NOT NULL,
  `BMI` float NOT NULL,
  `Result` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unregister`
--

CREATE TABLE `unregister` (
  `URSrNo` int(11) NOT NULL,
  `URName` varchar(30) NOT NULL,
  `URContact` int(11) NOT NULL,
  `URBMI` float NOT NULL,
  `URResult` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustID`);

--
-- Indexes for table `customerinsurance`
--
ALTER TABLE `customerinsurance`
  ADD PRIMARY KEY (`CustID`,`PolicyID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`HistID`),
  ADD UNIQUE KEY `CustID` (`CustID`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`PolicyID`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`SrNo`),
  ADD UNIQUE KEY `CustID` (`CustID`);

--
-- Indexes for table `unregister`
--
ALTER TABLE `unregister`
  ADD PRIMARY KEY (`URSrNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `HistID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `unregister`
--
ALTER TABLE `unregister`
  MODIFY `URSrNo` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
