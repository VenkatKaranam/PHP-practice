-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 07:25 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `constructco`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `ASSIGN_NUM` int(5) NOT NULL,
  `ASSIGN_DATE` datetime DEFAULT NULL,
  `PROJ_NUM` varchar(3) DEFAULT NULL,
  `EMP_NUM` varchar(3) DEFAULT NULL,
  `ASSIGN_JOB` varchar(3) DEFAULT NULL,
  `ASSIGN_CHG_HR` decimal(8,2) DEFAULT NULL,
  `ASSIGN_HOURS` decimal(8,2) DEFAULT NULL,
  `ASSIGN_CHARGE` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`ASSIGN_NUM`, `ASSIGN_DATE`, `PROJ_NUM`, `EMP_NUM`, `ASSIGN_JOB`, `ASSIGN_CHG_HR`, `ASSIGN_HOURS`, `ASSIGN_CHARGE`) VALUES
(1, '2021-07-01 00:00:00', '15', '113', '503', '12.00', '11.00', '132.00'),
(1001, '2018-03-22 00:00:00', '18', '103', '503', '84.50', '3.50', '295.75'),
(1002, '2018-03-22 00:00:00', '22', '117', '509', '34.55', '4.20', '145.11'),
(1003, '2018-03-22 00:00:00', '18', '117', '509', '34.55', '2.00', '69.10'),
(1004, '2018-03-22 00:00:00', '18', '103', '503', '84.50', '5.90', '498.55'),
(1005, '2018-03-22 00:00:00', '25', '108', '501', '96.75', '2.20', '212.85'),
(1006, '2018-03-22 00:00:00', '22', '104', '501', '96.75', '4.20', '406.35'),
(1007, '2018-03-22 00:00:00', '25', '113', '508', '50.75', '3.80', '192.85'),
(1008, '2018-03-22 00:00:00', '18', '103', '503', '84.50', '0.90', '76.05'),
(1009, '2018-03-23 00:00:00', '15', '115', '501', '96.75', '5.60', '541.80'),
(1011, '2018-03-23 00:00:00', '25', '105', '502', '105.00', '4.30', '451.50'),
(1012, '2018-03-23 00:00:00', '18', '108', '501', '96.75', '3.40', '328.95'),
(1013, '2018-03-23 00:00:00', '25', '115', '501', '96.75', '2.00', '193.50'),
(1014, '2018-03-23 00:00:00', '22', '104', '501', '96.75', '2.80', '270.90'),
(1016, '2018-03-23 00:00:00', '22', '105', '502', '105.00', '4.70', '493.50'),
(1017, '2018-03-23 00:00:00', '18', '117', '509', '34.55', '3.80', '131.29'),
(1018, '2018-03-23 00:00:00', '25', '117', '509', '34.55', '2.20', '76.01'),
(1019, '2018-03-24 00:00:00', '25', '104', '501', '110.50', '4.90', '541.45'),
(1020, '2018-03-24 00:00:00', '15', '101', '502', '125.00', '3.10', '387.50'),
(1021, '2018-03-24 00:00:00', '22', '108', '501', '110.50', '2.70', '298.35'),
(1022, '2018-03-24 00:00:00', '22', '115', '501', '110.50', '4.90', '541.45'),
(1023, '2018-03-24 00:00:00', '22', '105', '502', '125.00', '3.50', '437.50'),
(1025, '2018-03-24 00:00:00', '18', '117', '509', '34.55', '4.20', '145.11'),
(1110, '2019-01-28 00:00:00', '18', '117', '506', '12.00', '10.00', '120.00'),
(1111, '2021-07-13 00:00:00', '15', '113', '506', '12.00', '3.00', '36.00');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EMP_NUM` varchar(3) NOT NULL,
  `EMP_LNAME` varchar(15) DEFAULT NULL,
  `EMP_FNAME` varchar(15) DEFAULT NULL,
  `EMP_INITIAL` varchar(1) DEFAULT NULL,
  `EMP_HIREDATE` datetime DEFAULT NULL,
  `JOB_CODE` varchar(3) DEFAULT NULL,
  `EMP_YEARS` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EMP_NUM`, `EMP_LNAME`, `EMP_FNAME`, `EMP_INITIAL`, `EMP_HIREDATE`, `JOB_CODE`, `EMP_YEARS`) VALUES
('101', 'News', 'John', 'G', '2000-11-08 00:00:00', '502', 4),
('102', 'Senior', 'David', 'H', '1989-07-12 00:00:00', '501', 15),
('103', 'Arbough', 'June', 'E', '1996-12-01 00:00:00', '503', 8),
('104', 'Ramoras', 'Anne', 'K', '1987-11-15 00:00:00', '501', 17),
('105', 'Johnson', 'Alice', 'K', '1993-02-01 00:00:00', '502', 12),
('106', 'Smithfield', 'William', NULL, '2004-06-22 00:00:00', '500', 0),
('107', 'Alonzo', 'Maria', 'D', '1993-10-10 00:00:00', '500', 11),
('108', 'Washington', 'Ralph', 'B', '1991-08-22 00:00:00', '501', 13),
('109', 'Smith', 'Larry', 'W', '1997-07-18 00:00:00', '501', 7),
('110', 'Olenko', 'Gerald', 'A', '1995-12-11 00:00:00', '505', 9),
('111', 'Wabash', 'Geoff', 'B', '1991-04-04 00:00:00', '506', 14),
('112', 'Smithson', 'Darlene', 'M', '1994-10-23 00:00:00', '507', 10),
('113', 'Joenbrood', 'Delbert', 'K', '1996-11-15 00:00:00', '508', 8),
('114', 'Jones', 'Annelise', NULL, '1993-08-20 00:00:00', '508', 11),
('115', 'Bawangi', 'Travis', 'B', '1992-01-25 00:00:00', '501', 13),
('116', 'Pratt', 'Gerald', 'L', '1997-03-05 00:00:00', '510', 8),
('117', 'Williamson', 'Angie', 'H', '1996-06-19 00:00:00', '509', 8),
('118', 'Frommer', 'James', 'J', '2005-01-04 00:00:00', '510', 0);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `JOB_CODE` varchar(3) NOT NULL,
  `JOB_DESCRIPTION` varchar(25) DEFAULT NULL,
  `JOB_CHG_HOUR` decimal(8,2) DEFAULT NULL,
  `JOB_LAST_UPDATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`JOB_CODE`, `JOB_DESCRIPTION`, `JOB_CHG_HOUR`, `JOB_LAST_UPDATE`) VALUES
('500', 'Programmer', '35.75', '2017-11-20 00:00:00'),
('501', 'Systems Analyst', '96.75', '2017-11-20 00:00:00'),
('502', 'Database Designer', '125.00', '2018-03-24 00:00:00'),
('503', 'Electrical Engineer', '84.50', '2017-11-20 00:00:00'),
('504', 'Mechanical Engineer', '67.90', '2017-11-20 00:00:00'),
('505', 'Civil Engineer', '55.78', '2017-11-20 00:00:00'),
('506', 'Clerical Support', '26.87', '2017-11-20 00:00:00'),
('507', 'DSS Analyst', '45.95', '2017-11-20 00:00:00'),
('508', 'Applications Designer', '48.10', '2018-03-24 00:00:00'),
('509', 'Bio Technician', '34.55', '2017-11-20 00:00:00'),
('510', 'General Support', '18.36', '2017-11-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `PROJ_NUM` varchar(3) NOT NULL,
  `PROJ_NAME` varchar(25) DEFAULT NULL,
  `PROJ_VALUE` decimal(10,2) DEFAULT NULL,
  `PROJ_BALANCE` decimal(10,2) DEFAULT NULL,
  `EMP_NUM` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`PROJ_NUM`, `PROJ_NAME`, `PROJ_VALUE`, `PROJ_BALANCE`, `EMP_NUM`) VALUES
('15', 'Evergreen', '1453500.00', '1002350.00', '103'),
('18', 'Amber Wave', '3500500.00', '2110346.00', '108'),
('22', 'Rolling Tide', '805000.00', '500345.20', '102'),
('25', 'Starflight', '2650500.00', '2309880.00', '107');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`ASSIGN_NUM`),
  ADD KEY `PROJ_NUM` (`PROJ_NUM`),
  ADD KEY `EMP_NUM` (`EMP_NUM`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EMP_NUM`),
  ADD KEY `JOB_CODE` (`JOB_CODE`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`JOB_CODE`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`PROJ_NUM`),
  ADD KEY `EMP_NUM` (`EMP_NUM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `ASSIGN_NUM` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `assignment_ibfk_1` FOREIGN KEY (`PROJ_NUM`) REFERENCES `project` (`PROJ_NUM`),
  ADD CONSTRAINT `assignment_ibfk_2` FOREIGN KEY (`EMP_NUM`) REFERENCES `employee` (`EMP_NUM`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`JOB_CODE`) REFERENCES `job` (`JOB_CODE`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`EMP_NUM`) REFERENCES `employee` (`EMP_NUM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
