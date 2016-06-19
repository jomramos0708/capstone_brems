-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2016 at 04:09 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstonedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbusinessdetails`
--

CREATE TABLE IF NOT EXISTS `tblbusinessdetails` (
  `BusinessID` int(11) NOT NULL,
  `BusinessName` varchar(200) NOT NULL,
  `BusinessTypeID` int(11) NOT NULL,
  `BusinessOwnerName` varchar(200) NOT NULL,
  `BusinessAddress` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbusinessdetails`
--

INSERT INTO `tblbusinessdetails` (`BusinessID`, `BusinessName`, `BusinessTypeID`, `BusinessOwnerName`, `BusinessAddress`, `status`) VALUES
(1, 'supermarket', 1, 'Paulo Samson', 'Peralta St.', 'active'),
(2, 'barber shop', 3, 'Mark Porcalla', 'Dr. Pilapil St.', 'active'),
(3, 'salon', 1, 'Joyce Bati', 'Peralta St.', 'active'),
(4, 'sari-sari store', 4, 'Steph Villaro', 'Dr. Pilapil St.', 'active'),
(5, 'computer shop', 5, 'Jomari Ramos', 'Peralta St.', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tblbusinesstype`
--

CREATE TABLE IF NOT EXISTS `tblbusinesstype` (
  `BusinessTypeID` int(11) NOT NULL,
  `BusinessType` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbusinesstype`
--

INSERT INTO `tblbusinesstype` (`BusinessTypeID`, `BusinessType`, `status`) VALUES
(1, 'type1', 'active'),
(2, 'type2', 'active'),
(3, 'type3', 'active'),
(4, 'type4', 'active'),
(5, 'type5', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tblday`
--

CREATE TABLE IF NOT EXISTS `tblday` (
  `DayID` int(11) NOT NULL,
  `DayName` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblday`
--

INSERT INTO `tblday` (`DayID`, `DayName`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday'),
(5, 'Friday'),
(6, 'Saturday'),
(7, 'Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `tbldocumentdetails`
--

CREATE TABLE IF NOT EXISTS `tbldocumentdetails` (
  `DocumentID` int(11) NOT NULL,
  `DocumentName` varchar(255) NOT NULL,
  `DocumentFee` decimal(10,2) NOT NULL,
  `DocumentTemplate` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldocumentdetails`
--

INSERT INTO `tbldocumentdetails` (`DocumentID`, `DocumentName`, `DocumentFee`, `DocumentTemplate`, `status`) VALUES
(1, 'Barangay Clearance', '20.00', 'bc.pdf', 'active'),
(2, 'Certificate of Indigency', '0.00', 'ci.pdf', 'active'),
(3, 'Certificate of File Action', '100.00', 'cfa.pdf', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbldocumentpurpose`
--

CREATE TABLE IF NOT EXISTS `tbldocumentpurpose` (
  `DocumentPurposeID` int(11) NOT NULL,
  `DocumentPurpose` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldocumentpurpose`
--

INSERT INTO `tbldocumentpurpose` (`DocumentPurposeID`, `DocumentPurpose`, `status`) VALUES
(1, 'Sports', 'active'),
(2, 'Scholarship', 'active'),
(3, 'Personal', 'active'),
(4, 'Job', 'active'),
(5, 'School', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbleventdetails`
--

CREATE TABLE IF NOT EXISTS `tbleventdetails` (
  `EventID` int(11) NOT NULL,
  `EventName` varchar(255) NOT NULL,
  `EventDescription` varchar(255) NOT NULL,
  `EventOrganizer` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbleventdetails`
--

INSERT INTO `tbleventdetails` (`EventID`, `EventName`, `EventDescription`, `EventOrganizer`, `status`) VALUES
(1, 'Feeding Program', 'This is for underweight kids', 'Paulo Rio Samson', 'active'),
(2, 'Gift Giving', 'For Christmas', 'Joyce Bati', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tblfacilitydetails`
--

CREATE TABLE IF NOT EXISTS `tblfacilitydetails` (
  `FacilityID` int(11) NOT NULL,
  `FacilityName` varchar(255) NOT NULL,
  `FacilityRentalR` decimal(10,2) NOT NULL,
  `FacilityRentalNR` decimal(10,2) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfacilitydetails`
--

INSERT INTO `tblfacilitydetails` (`FacilityID`, `FacilityName`, `FacilityRentalR`, `FacilityRentalNR`, `status`) VALUES
(1, 'BasketBall Court', '50.00', '80.00', 'active'),
(2, 'DayCare', '100.00', '120.00', 'active'),
(3, 'Library', '80.00', '100.00', 'active'),
(4, '  Soccer Field', '150.00', '250.00', 'active'),
(5, 'Tennis Court', '120.00', '200.00', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tblitemdetails`
--

CREATE TABLE IF NOT EXISTS `tblitemdetails` (
  `ItemID` int(255) NOT NULL,
  `ItemTypeID` int(10) NOT NULL,
  `status` varchar(255) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblitemdetails`
--

INSERT INTO `tblitemdetails` (`ItemID`, `ItemTypeID`, `status`, `DateTime`) VALUES
(1, 1, 'Under Maintenance', '2016-06-09 07:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `tblitemtype`
--

CREATE TABLE IF NOT EXISTS `tblitemtype` (
  `ItemTypeID` int(11) NOT NULL,
  `ItemType` varchar(255) NOT NULL,
  `ItemCode` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblitemtype`
--

INSERT INTO `tblitemtype` (`ItemTypeID`, `ItemType`, `ItemCode`, `status`) VALUES
(1, 'Chair', 'CH', 'active'),
(2, 'Table', 'TBL', 'active'),
(3, 'Tent', 'TENT', 'active'),
(10, 'racket', 'RCK', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tblofficialdetails`
--

CREATE TABLE IF NOT EXISTS `tblofficialdetails` (
  `OfficialID` int(11) NOT NULL,
  `OfficialLName` varchar(255) NOT NULL,
  `OfficialFName` varchar(255) NOT NULL,
  `OfficialMName` varchar(255) NOT NULL,
  `OfficialPositionID` int(11) NOT NULL,
  `OfficialTermStart` date NOT NULL,
  `OfficialTermEnd` date NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `Admin` tinyint(1) NOT NULL DEFAULT '0',
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Image` varchar(250) NOT NULL DEFAULT '2.jpg'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblofficialdetails`
--

INSERT INTO `tblofficialdetails` (`OfficialID`, `OfficialLName`, `OfficialFName`, `OfficialMName`, `OfficialPositionID`, `OfficialTermStart`, `OfficialTermEnd`, `status`, `Admin`, `Username`, `Password`, `Image`) VALUES
(1, 'Samson', 'Paulo', 'Santiago', 1, '0000-00-00', '0000-00-00', 'active', 1, 'admin', 'admin', 'pau.jpg'),
(2, 'Bati', 'Joyce Anne', 'Cunanan', 3, '0000-00-00', '0000-00-00', 'active', 0, 'joyce', '1234', '2.jpg'),
(3, 'Belleza', 'Jessa', 'Saguirer', 4, '0000-00-00', '0000-00-00', 'active', 0, 'jessa', '1234', '2.jpg'),
(4, 'Ramos', 'Jomari', 'Gustilo', 3, '0000-00-00', '0000-00-00', 'active', 0, '', '', '2.jpg');

--
-- Triggers `tblofficialdetails`
--
DELIMITER $$
CREATE TRIGGER `OfficialSched` AFTER INSERT ON `tblofficialdetails`
 FOR EACH ROW INSERT into tblofficialsched values (new.OfficialID, 1, null, null),(new.OfficialID, 2, null, null),(new.OfficialID, 3, null, null),(new.OfficialID, 4, null, null),(new.OfficialID, 5, null, null),(new.OfficialID, 6, null, null),(new.OfficialID, 7, null, null)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tblofficialposition`
--

CREATE TABLE IF NOT EXISTS `tblofficialposition` (
  `OfficialPositionID` int(11) NOT NULL,
  `OfficialPosition` varchar(100) NOT NULL,
  `OfficialPositionCount` int(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblofficialposition`
--

INSERT INTO `tblofficialposition` (`OfficialPositionID`, `OfficialPosition`, `OfficialPositionCount`, `status`) VALUES
(1, 'Chairman', 1, 'active'),
(2, 'Kagawad', 7, 'active'),
(3, 'Secretary', 1, 'active'),
(4, 'Treasurer', 1, 'active'),
(5, 'Committee', 5, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tblofficialsched`
--

CREATE TABLE IF NOT EXISTS `tblofficialsched` (
  `OfficialID` int(11) NOT NULL,
  `DayID` int(11) NOT NULL,
  `TimeStart` time DEFAULT NULL,
  `TimeEnd` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblofficialsched`
--

INSERT INTO `tblofficialsched` (`OfficialID`, `DayID`, `TimeStart`, `TimeEnd`) VALUES
(1, 1, '00:00:00', '00:00:00'),
(1, 2, '00:00:00', '00:00:00'),
(1, 3, NULL, NULL),
(1, 4, NULL, NULL),
(1, 5, NULL, NULL),
(1, 6, NULL, NULL),
(1, 7, NULL, NULL),
(2, 1, NULL, NULL),
(2, 2, '00:00:00', '00:00:00'),
(2, 3, '00:00:00', '00:00:00'),
(2, 4, NULL, NULL),
(2, 5, NULL, NULL),
(2, 6, NULL, NULL),
(2, 7, NULL, NULL),
(3, 1, '00:00:00', '00:00:00'),
(3, 2, '00:00:00', '00:00:00'),
(3, 3, '00:00:00', '00:00:00'),
(3, 4, '00:00:00', '00:00:00'),
(3, 5, '00:00:00', '00:00:00'),
(3, 6, NULL, NULL),
(3, 7, NULL, NULL),
(4, 1, NULL, NULL),
(4, 2, NULL, NULL),
(4, 3, NULL, NULL),
(4, 4, NULL, NULL),
(4, 5, NULL, NULL),
(4, 6, NULL, NULL),
(4, 7, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbusinessdetails`
--
ALTER TABLE `tblbusinessdetails`
  ADD PRIMARY KEY (`BusinessID`);

--
-- Indexes for table `tblbusinesstype`
--
ALTER TABLE `tblbusinesstype`
  ADD PRIMARY KEY (`BusinessTypeID`);

--
-- Indexes for table `tblday`
--
ALTER TABLE `tblday`
  ADD PRIMARY KEY (`DayID`);

--
-- Indexes for table `tbldocumentdetails`
--
ALTER TABLE `tbldocumentdetails`
  ADD PRIMARY KEY (`DocumentID`);

--
-- Indexes for table `tbldocumentpurpose`
--
ALTER TABLE `tbldocumentpurpose`
  ADD PRIMARY KEY (`DocumentPurposeID`);

--
-- Indexes for table `tbleventdetails`
--
ALTER TABLE `tbleventdetails`
  ADD PRIMARY KEY (`EventID`);

--
-- Indexes for table `tblfacilitydetails`
--
ALTER TABLE `tblfacilitydetails`
  ADD PRIMARY KEY (`FacilityID`);

--
-- Indexes for table `tblitemdetails`
--
ALTER TABLE `tblitemdetails`
  ADD PRIMARY KEY (`ItemID`,`ItemTypeID`),
  ADD KEY `ItemID` (`ItemID`) USING BTREE,
  ADD KEY `ItemTypeID` (`ItemTypeID`) USING BTREE;

--
-- Indexes for table `tblitemtype`
--
ALTER TABLE `tblitemtype`
  ADD PRIMARY KEY (`ItemTypeID`);

--
-- Indexes for table `tblofficialdetails`
--
ALTER TABLE `tblofficialdetails`
  ADD PRIMARY KEY (`OfficialID`),
  ADD KEY `OfficialPositionID` (`OfficialPositionID`);

--
-- Indexes for table `tblofficialposition`
--
ALTER TABLE `tblofficialposition`
  ADD PRIMARY KEY (`OfficialPositionID`);

--
-- Indexes for table `tblofficialsched`
--
ALTER TABLE `tblofficialsched`
  ADD PRIMARY KEY (`OfficialID`,`DayID`),
  ADD KEY `DayID` (`DayID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbusinessdetails`
--
ALTER TABLE `tblbusinessdetails`
  MODIFY `BusinessID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblbusinesstype`
--
ALTER TABLE `tblbusinesstype`
  MODIFY `BusinessTypeID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblday`
--
ALTER TABLE `tblday`
  MODIFY `DayID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbldocumentdetails`
--
ALTER TABLE `tbldocumentdetails`
  MODIFY `DocumentID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbldocumentpurpose`
--
ALTER TABLE `tbldocumentpurpose`
  MODIFY `DocumentPurposeID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbleventdetails`
--
ALTER TABLE `tbleventdetails`
  MODIFY `EventID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblfacilitydetails`
--
ALTER TABLE `tblfacilitydetails`
  MODIFY `FacilityID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblitemtype`
--
ALTER TABLE `tblitemtype`
  MODIFY `ItemTypeID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tblofficialdetails`
--
ALTER TABLE `tblofficialdetails`
  MODIFY `OfficialID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblofficialposition`
--
ALTER TABLE `tblofficialposition`
  MODIFY `OfficialPositionID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblitemdetails`
--
ALTER TABLE `tblitemdetails`
  ADD CONSTRAINT `ItempTypeID` FOREIGN KEY (`ItemTypeID`) REFERENCES `tblitemtype` (`ItemTypeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblofficialdetails`
--
ALTER TABLE `tblofficialdetails`
  ADD CONSTRAINT `OfficialPositionID` FOREIGN KEY (`OfficialPositionID`) REFERENCES `tblofficialposition` (`OfficialPositionID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblofficialsched`
--
ALTER TABLE `tblofficialsched`
  ADD CONSTRAINT `DayID` FOREIGN KEY (`DayID`) REFERENCES `tblday` (`DayID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `OfficialID` FOREIGN KEY (`OfficialID`) REFERENCES `tblofficialdetails` (`OfficialID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
