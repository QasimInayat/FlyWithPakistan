-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2015 at 04:31 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fwp`
--

-- --------------------------------------------------------

--
-- Table structure for table `abc`
--

CREATE TABLE `abc` (
  `Name` varchar(50) NOT NULL,
  `Father_Name` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Book` varchar(11) NOT NULL,
  `Time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abc`
--

INSERT INTO `abc` (`Name`, `Father_Name`, `Date`, `Book`, `Time`) VALUES
('a', 'b', '2015', '0', '22'),
('Qasim', 'Inayat', '2015', '0', '22'),
('Qasim', 'Inayat', '2015-12-22', 'Urdu', '22:31'),
('Azhar', 'Aziz', '2015-12-21', 'Urdu', '22:33'),
('1', '1', '0001-01-01', 'Math', '11:11');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Code` int(11) NOT NULL,
  `Mbl_Number` int(11) NOT NULL,
  `Address1` varchar(100) NOT NULL,
  `Address2` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `StateProvince` varchar(50) NOT NULL,
  `Zip_Code` int(5) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Departure_Month` int(2) NOT NULL,
  `Departure_Day` int(2) NOT NULL,
  `Departure_Year` int(4) NOT NULL,
  `D_Time` varchar(10) NOT NULL,
  `Return_Month` int(2) NOT NULL,
  `Return_Day` int(2) NOT NULL,
  `Return_Year` int(4) NOT NULL,
  `R_Time` int(11) NOT NULL,
  `Departing_From` varchar(50) NOT NULL,
  `Depar_City` varchar(50) NOT NULL,
  `Destination_To` varchar(50) NOT NULL,
  `Desti_City` varchar(50) NOT NULL,
  `Airline` varchar(50) NOT NULL,
  `Class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Name`, `Email`, `Message`) VALUES
('Qasim', 'qasim_inayat93@yahoo.com', 'This is'),
('Qasim', 'qasim_inayat93@yahoo.com', ''),
('', '', 'abcasdfasfsadf');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `id` int(11) NOT NULL,
  `ToFrom` varchar(30) NOT NULL,
  `Departure1` varchar(20) NOT NULL,
  `Arival1` varchar(20) NOT NULL,
  `Departure2` varchar(20) NOT NULL,
  `Arival2` varchar(20) NOT NULL,
  `Departure3` varchar(20) NOT NULL,
  `Arival3` varchar(20) NOT NULL,
  `Duration` varchar(20) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `To` varchar(20) NOT NULL,
  `From` varchar(20) NOT NULL,
  `StopNonStop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`id`, `ToFrom`, `Departure1`, `Arival1`, `Departure2`, `Arival2`, `Departure3`, `Arival3`, `Duration`, `Price`, `To`, `From`, `StopNonStop`) VALUES
(1, 'Karachi To Islamabad', '12:00 AM', '2:00 PM', '3:00 PM', '5:00 PM', '6:00 PM', '8:00PM', '2h 5m', 'Rs.10,000', 'Karachi', 'Islamabad', 'Non Stop'),
(2, 'Karachi To Lahore', '12:00 AM', '2:15 PM', '3:00 PM', '5:15 PM', '6:00 PM', '8:15 PM', '2h 15m', 'Rs.12,000', 'Karachi', 'Lahore', 'Non Stop'),
(3, 'Karachi To Muree', '12:00 AM', '2:30 PM', '3:00 PM', '5:30 PM', '6:00 PM', '8:30 PM', '2h 30m', 'Rs.16,000', 'Karachi', 'Muree', 'Non Stop'),
(4, 'Islmabad To Karachi', '12:00 AM', '2:00 PM', '3:00 PM', '5:00 PM', '6:00 PM', '8:00 PM', '2h 0m', 'Rs.10,000', 'Islmabad', 'Karachi', 'Non Stop'),
(5, 'Islamabad To Lahore', '12:00 AM', '1:00 PM', '3:00 PM', '4:00 PM', '6:00 PM', '7:00 PM', '1h 0m', 'Rs.5000', 'Islamabd', 'Karachi', 'Non Stop'),
(6, 'Islamabad To Muree', '12:00 AM', '1:15 PM', '3:00 PM', '4:15 PM', '6:00 PM', '7:15 PM', '1h 15m', 'Rs.8000', 'Lahore', 'Muree', 'Non Stop'),
(7, 'Lahore To Karachi', '12:00 AM', '2:15 PM', '3:00 PM', '5:15 PM', '6:00 PM', '8:15 PM', '2h 15m', 'Rs.12,000', 'Lahore', 'Karachi', 'Non Stop'),
(8, 'Lahore To Islamabad', '12:00 AM', '1:00 PM', '3:00 PM', '4:00 PM', '6:00 PM', '7:00 PM', '1h 0m', 'Rs.5000', 'Lahore', 'Islamabad', 'Non Stop'),
(9, 'Lahore To Muree', '12:00 AM', '1:15 PM', '3:00 PM', '4:15 PM', '6:00 PM', '7:15 PM', '1h 15m', 'Rs.8000', 'Lahore', 'Muree', 'Non Stop'),
(10, 'Muree To Karachi', '12:00 AM', '2:30 PM', '3:00 PM', '5:30 PM', '6:00 PM', '8:30 PM', '2h 30m', 'Rs.16,000', 'Muree', 'Karachi', 'Non Stop'),
(11, 'Muree To Islamabad', '12:00 AM', '1:15 PM', '3:00 PM', '4:15 PM', '6:00 PM', '7:15 PM', '1h 15m', 'Rs.8000', 'Muree', 'Islamabad', 'Non Stop'),
(12, 'Muree to Lahore', '12:00 AM', '1:15 PM', '3:00 PM', '4:15 PM', '6:00 PM', '7:15 PM', '1h 15m', 'Rs.8000', 'Muree', 'Lahore', 'Non Stop');

-- --------------------------------------------------------

--
-- Table structure for table `flightdata`
--

CREATE TABLE `flightdata` (
  `Outbound` varchar(20) NOT NULL,
  `Adults` varchar(20) NOT NULL,
  `Children` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flightdata`
--

INSERT INTO `flightdata` (`Outbound`, `Adults`, `Children`) VALUES
('2015-12-08', '5', '0'),
('2015-12-07', '2', '0'),
('2015-11-30', '25', '0');

-- --------------------------------------------------------

--
-- Table structure for table `flightinter`
--

CREATE TABLE `flightinter` (
  `id` int(11) NOT NULL,
  `ToFrom` varchar(20) NOT NULL,
  `Departure1` varchar(20) NOT NULL,
  `Arival1` varchar(20) NOT NULL,
  `Departure2` varchar(20) NOT NULL,
  `Arival2` varchar(20) NOT NULL,
  `Departure3` varchar(20) NOT NULL,
  `Arival3` varchar(20) NOT NULL,
  `Duration` varchar(20) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `To` varchar(20) NOT NULL,
  `From` varchar(20) NOT NULL,
  `StopNonStop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flightinter`
--

INSERT INTO `flightinter` (`id`, `ToFrom`, `Departure1`, `Arival1`, `Departure2`, `Arival2`, `Departure3`, `Arival3`, `Duration`, `Price`, `To`, `From`, `StopNonStop`) VALUES
(1, 'Pakistan To USA', '12:00 AM', '11:00 AM', '2:00 PM', '1:00 PM', '4:00 PM', '3:00 PM', '23h 5m', 'Rs.65,000', 'Pakistan', 'USA', 'Non Stop'),
(2, 'Pakistan To Dubai', '12:00 AM', '5:00 PM', '2:00 PM', '7:00 PM', '4:00 PM', '9:00 PM', '5h 0m', 'Rs.45,000', 'Pakistan', 'Dubai', 'Stop'),
(3, 'Pakistan To Bahrain', '12:00 AM', '4:00 PM', '2:00 PM', '6:00 PM', '4:00 PM', '8:00 PM', '4h 0m', 'Rs.35,000', 'Pakistan', 'Bahrain', 'Stop'),
(4, 'USA To Pakistan', '12:00 AM', '11:00 AM', '2:00 PM', '1:00 PM', '4:00 PM', '3:00 PM', '23h 5m', 'Rs.65,000', 'USA', 'Pakistan', 'Non Stop'),
(5, 'USA to Dubai', '12:00 AM', '10:00 PM', '2:00 PM', '12:00 AM', '4:00 PM', '2:00 PM', '22h 5m', 'Rs.55,000', 'USA', 'Dubai', 'Non Stop'),
(6, 'USA To Bahrain', '12:00 AM', '9:00 PM', '2:00 PM', '11:00 AM', '4:00 PM', '1:00 PM', '21h 5m', 'Rs.50,000', 'USA', 'Bahrain', 'Stop'),
(7, 'Dubai To Pakistan', '12:00 AM', '5:00 PM', '2:00 PM', '7:00 PM', '4:00 PM', '9:00 PM', '5h 0m', 'Rs.45,000', 'Dubai', 'Pakistan', 'Stop'),
(8, 'Dubai To USA', '12:00 AM', '10:00 PM', '2:00 PM', '12:00 AM', '4:00 PM', '2:00 PM', '22h 5m', 'Rs.55,000', 'Dubai', 'USA', 'Non Stop'),
(9, 'Dubai To Bahrain', '12:00 AM', '2:00 PM', '4:00 PM', '6:00 PM', '7:00 PM', '9:00 PM', '2h 0m', 'Rs.10,000', 'Dubai', 'Bahrain', 'Non Stop'),
(10, 'Bahrain To Pakistan', '12:00 AM', '4:00 PM', '2:00 PM', '6:00 PM', '4:00 PM', '8:00 PM', '4h 0m', 'Rs.35,000', 'Bahrain', 'Pakistan', 'Stop'),
(11, 'Bahrain To USA', '12:00 AM', '9:00 PM', '2:00 PM', '11:00 AM', '4:00 PM', '1:00 PM', '21h 5m', 'Rs.50,000', 'Bahrain', 'USA', 'Stop'),
(12, 'Bahrain To Dubai', '12:00 AM', '2:00 PM', '4:00 PM', '6:00 PM', '7:00 PM', '9:00 PM', '2h 0m', 'Rs.10,000', 'Bahrain', 'Dubai', 'Non Stop');

-- --------------------------------------------------------

--
-- Table structure for table `sno`
--

CREATE TABLE `sno` (
  `id` int(11) NOT NULL,
  `place` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sno`
--

INSERT INTO `sno` (`id`, `place`) VALUES
(1, 'Karachi To Islamabad'),
(2, 'Karachi To Lahore'),
(3, 'Karachi To Muree'),
(4, 'Islmabad To Karachi'),
(5, 'Islamabad To Lahore'),
(6, 'Islamabad To Muree'),
(7, 'Lahore To Karachi'),
(8, 'Lahore To Islamabad'),
(9, 'Lahore To Muree'),
(10, 'Muree To Karachi'),
(11, 'Muree To Islamabad'),
(12, 'Muree to Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `sno2`
--

CREATE TABLE `sno2` (
  `id` int(11) NOT NULL,
  `place` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sno2`
--

INSERT INTO `sno2` (`id`, `place`) VALUES
(1, 'Pakistan To USA'),
(2, 'Pakistan To Dubai'),
(3, 'Pakistan To Bahrain'),
(4, 'USA To Pakistan'),
(5, 'USA to Dubai'),
(6, 'USA To Bahrain'),
(7, 'Dubai To Pakistan'),
(8, 'Dubai To USA'),
(9, 'Dubai To Bahrain'),
(10, 'Bahrain To Pakistan'),
(11, 'Bahrain To USA'),
(12, 'Bahrain To Dubai');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
