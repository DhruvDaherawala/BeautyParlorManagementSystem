-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 05:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beautypar`
--
CREATE DATABASE IF NOT EXISTS `beautypar` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `beautypar`;

-- --------------------------------------------------------

--
-- Table structure for table `tblappointment`
--

DROP TABLE IF EXISTS `tblappointment`;
CREATE TABLE IF NOT EXISTS `tblappointment` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `AptNumber` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `Name` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Email` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `PhoneNumber` bigint(11) DEFAULT NULL,
  `AptDate` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `AptTime` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Services` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Status` varchar(250) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblappointment`
--

INSERT INTO `tblappointment` (`ID`, `AptNumber`, `Name`, `Email`, `PhoneNumber`, `AptDate`, `AptTime`, `Services`, `Status`) VALUES
(9, '832531069', 'Yashas', 'test@gmail.com', 9964466622, '12/30/2021', '12:30 pm', 'U-Shape Hair Cut', 'Rejected'),
(10, '896981717', 'Yashas', 'yashas23appu@gmail.com', 9964466622, '12/21/2021', '12.332', 'Charcol Facial', 'Selected'),
(11, '497472836', 'new', 'yashasd004@gmail.com', 123456789, '2022-01-23', '11:30', 'Layer Haircut', ''),
(12, '664100921', 'Yashas', 'yashas23appu@gmail.com', 9964466622, '2022-01-28', '19:36', 'Loreal Hair Color(Full)', ''),
(13, '130309334', 'dhanus', 'yashasd001@gmail.com', 9964466622, '2022-01-21', '11:46', 'Charcol Facial', ''),
(14, '766138262', 'Yashas', 'yashas23appu@gmail.com', 0, '', '', '', ''),
(15, '989213802', 'Likhith Shankar', 'test@gmail.com', 0, '', '', '', ''),
(16, '627043279', 'Yashas', 'yashas23appu@gmail.com', 9964466622, '2022-01-07', '06:19', 'Rebonding', ''),
(17, '684785414', 'asdfgh', 'yashas23appu@gmail.com', 11111111111, '2022-02-01', '01:15', 'Massage', ''),
(18, '648312905', 'yuktha', 'vy@gmail.com', 92036689346, '2022-01-11', '19:38', 'U-Shape Hair Cut', 'Selected');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

DROP TABLE IF EXISTS `tblcontact`;
CREATE TABLE IF NOT EXISTS `tblcontact` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Email` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Rate` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Txtarea` varchar(240) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`ID`, `Name`, `Email`, `Rate`, `Txtarea`) VALUES
(1, 'Yashas', 'yashas23appu@gmail.com', 'on', ''),
(2, 'dhee', 'yashasg998@gmail.com', 'on', ''),
(3, 'dhee', 'yashasd001@gmail.com', 'on', 'fdy hgy5d yeyd'),
(4, 'Yashas', 'test@gmail.com', 'Excellent', 'jokjijo\r\n'),
(5, 'dhee', 'test@gmail.com', 'Good', 'good experience'),
(6, 'nonono', 'nonono@momo', 'Good', 'hhihi');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

DROP TABLE IF EXISTS `tblservices`;
CREATE TABLE IF NOT EXISTS `tblservices` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `ServiceName` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `Cost` int(10) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `Cost`, `CreationDate`) VALUES
(1, 'O3 Facial', 1200, '2019-07-25 05:52:38'),
(2, 'Fruit Facial', 500, '2019-07-25 05:52:53'),
(3, 'Charcol Facial', 1000, '2019-07-25 05:53:10'),
(5, 'Deluxe P', 600, '2019-07-25 05:53:47'),
(6, 'Normal Menicure', 4000, '2019-07-25 05:54:01'),
(7, 'Normal Pedicure', 400, '2019-07-25 05:54:19'),
(8, 'U-Shape Hair Cut', 250, '2019-07-25 05:54:38'),
(9, 'Layer Haircut', 550, '2019-07-25 05:54:53'),
(11, 'Loreal Hair Color(Full)', 1200, '2019-07-25 05:55:35'),
(12, 'Body Spa', 1500, '2019-08-19 08:06:27'),
(13, 'Massage', 2000, '2022-01-13 18:30:00'),
(14, 'hairspa', 500, '2022-01-15 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) CHARACTER SET latin1 DEFAULT NULL,
  `userid` varchar(10) DEFAULT NULL,
  `name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `password` text CHARACTER SET macce COLLATE macce_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `userid`, `name`, `password`) VALUES
(1, 'admin', '4mh19cs120', 'admin', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
