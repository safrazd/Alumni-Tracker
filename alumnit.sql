-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 06:31 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumnit`
--
CREATE DATABASE IF NOT EXISTS `alumnit` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `alumnit`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `adminId` int(20) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `timeCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `fName`, `lName`, `email`, `password`, `timeCreated`) VALUES
(1, 'Kyle', 'Defreitas', 'kyle@gmail.com', 'kyle', '2017-04-20 06:15:15');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

DROP TABLE IF EXISTS `alumni`;
CREATE TABLE `alumni` (
  `alumniId` int(20) NOT NULL,
  `fName` varchar(50) DEFAULT NULL,
  `lName` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `timeCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `verified` varchar(50) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`alumniId`, `fName`, `lName`, `email`, `password`, `timeCreated`, `verified`) VALUES
(1, 'Roger', 'Jones', 'roger.jones@gmail.com', 'roger', '2017-04-23 03:36:27', 'Yes'),
(2, 'Mike', 'Mick', 'Mikey@gmail.com', 'mike', '2017-04-23 03:37:44', 'Yes'),
(3, 'Lloyd', 'Jeff', 'lj@hotmail.com', 'lloyd', '2017-04-23 03:36:18', 'No'),
(4, 'darnell', 'bruce', 'asdsad', '70ccd9007338d6d81dd3b6271621b9cf9a97ea00', '2017-04-23 03:36:18', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `companyId` int(20) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `companyDescription` varchar(255) NOT NULL,
  `company_email` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `alumniId` int(20) NOT NULL,
  `company_visible` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyId`, `companyName`, `companyDescription`, `company_email`, `country`, `occupation`, `alumniId`, `company_visible`) VALUES
(2, 'ewqe', '', '', '', 'Student', 2, 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

DROP TABLE IF EXISTS `degree`;
CREATE TABLE `degree` (
  `degreeId` int(20) NOT NULL,
  `degreeName` varchar(50) NOT NULL,
  `degreeClass` varchar(50) NOT NULL,
  `yearGrad` int(20) NOT NULL,
  `alumniId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`degreeId`, `degreeName`, `degreeClass`, `yearGrad`, `alumniId`) VALUES
(1, 'Information Technology', 'Bsc', 2011, 1),
(2, 'Computer Science', 'Bsc', 2017, 2),
(3, 'Engineering', 'Bsc', 2021, 3);

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

DROP TABLE IF EXISTS `link`;
CREATE TABLE `link` (
  `linkId` int(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `alumniId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`linkId`, `image`, `facebook`, `linkedin`, `alumniId`) VALUES
(2, 'pic1.jpg', '', '', 2),
(3, 'pic2.jpg', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
CREATE TABLE `personal` (
  `personalId` int(20) NOT NULL,
  `contactNo` varchar(20) NOT NULL,
  `birthCountry` varchar(50) NOT NULL,
  `alumniId` int(20) NOT NULL,
  `display_personal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`personalId`, `contactNo`, `birthCountry`, `alumniId`, `display_personal`) VALUES
(1, '762-9999', 'Barbados', 2, 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`alumniId`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyId`),
  ADD UNIQUE KEY `alumniId` (`alumniId`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`degreeId`),
  ADD UNIQUE KEY `alumniId` (`alumniId`),
  ADD KEY `alumniId_2` (`alumniId`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`linkId`),
  ADD UNIQUE KEY `alumniId` (`alumniId`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`personalId`),
  ADD UNIQUE KEY `alumniId` (`alumniId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `alumniId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `degreeId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `linkId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `personalId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`alumniId`) REFERENCES `alumni` (`alumniId`);

--
-- Constraints for table `degree`
--
ALTER TABLE `degree`
  ADD CONSTRAINT `degree_ibfk_1` FOREIGN KEY (`alumniId`) REFERENCES `alumni` (`alumniId`);

--
-- Constraints for table `link`
--
ALTER TABLE `link`
  ADD CONSTRAINT `link_ibfk_1` FOREIGN KEY (`alumniId`) REFERENCES `alumni` (`alumniId`);

--
-- Constraints for table `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`alumniId`) REFERENCES `alumni` (`alumniId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
