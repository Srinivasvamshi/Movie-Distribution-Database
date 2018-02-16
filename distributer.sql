-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2017 at 08:30 PM
-- Server version: 5.7.20-0ubuntu0.17.04.1
-- PHP Version: 7.0.22-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `distributer`
--

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `TheatreID` int(11) NOT NULL,
  `DistID` int(11) NOT NULL,
  `TotalAmount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`TheatreID`, `DistID`, `TotalAmount`) VALUES
(102, 99886231, '150.60 Cr'),
(103, 12399881, '210.30 Cr'),
(104, 86521534, '100.15 Cr'),
(105, 12399881, '100.5 Cr'),
(106, 86521534, '200.10 Cr'),
(107, 99886231, '150.7 Cr'),
(108, 99886231, '100.60 Cr'),
(110, 86521534, '200.30 Cr'),
(111, 12399881, '210.30 Cr'),
(112, 99886231, '150.48 Cr'),
(113, 99886231, '150.70 Cr'),
(114, 12399881, '210.43 Cr'),
(115, 86521534, '200.14 Cr');

-- --------------------------------------------------------

--
-- Table structure for table `distributer`
--

CREATE TABLE `distributer` (
  `DistID` int(11) NOT NULL,
  `DistCompany` varchar(20) NOT NULL,
  `DistAddress` varchar(30) NOT NULL,
  `DistAmt` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributer`
--

INSERT INTO `distributer` (`DistID`, `DistCompany`, `DistAddress`, `DistAmt`) VALUES
(12399881, 'EROS International', 'Flat.No:2134,Delhi', '731.53 Cr'),
(86521534, 'T-Series', 'Flat.No:100,Kolkata', '700.69 Cr'),
(99556677, 'Fox Studio', 'Hill:213,LosAngeles,California', 'NULL'),
(99886231, 'Studio Green', 'H.No-705,hill road,Mumbai', '703.079 Cr');

-- --------------------------------------------------------

--
-- Table structure for table `districtinfo`
--

CREATE TABLE `districtinfo` (
  `LocationPin` int(11) NOT NULL,
  `LocationName` varchar(30) NOT NULL,
  `No_Of_Theatre` int(11) NOT NULL,
  `DistID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districtinfo`
--

INSERT INTO `districtinfo` (`LocationPin`, `LocationName`, `No_Of_Theatre`, `DistID`) VALUES
(110006, 'Purnimanagar', 4, 99886231),
(110021, 'Gandhiroad', 5, 99556677),
(400001, 'mumbai', 6, 99886231),
(480001, 'kochin', 2, 12399881),
(500068, 'Mansoorabad', 4, 12399881),
(560035, 'indranagar', 2, 99556677),
(560100, 'Electronic City', 1, 86521534),
(600015, 'chennai', 11, 99556677),
(700001, 'Rojanadpur', 6, 12399881),
(700028, 'guthampur', 3, 99886231);

-- --------------------------------------------------------

--
-- Table structure for table `filmdetails`
--

CREATE TABLE `filmdetails` (
  `FilmID` int(11) NOT NULL,
  `FlimName` varchar(30) NOT NULL,
  `Director` varchar(20) NOT NULL,
  `Producer` varchar(20) NOT NULL,
  `Actor` varchar(20) NOT NULL,
  `ReleaseDate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filmdetails`
--

INSERT INTO `filmdetails` (`FilmID`, `FlimName`, `Director`, `Producer`, `Actor`, `ReleaseDate`) VALUES
(162, 'Bahubali:The Beginning', 'S.S.Rajamouli', 'Shobu Yarlagadda', 'Prabhas', 2015),
(168, 'Surya 24', 'Vikram kumar', 'krishna prasad', 'Surya', 2016),
(169, 'Singam 3', 'Hari', 'Pruthvi', 'Surya', 2017),
(693, 'Ashiqui 2', 'Mohit Suri', 'Mahesh kapoor', 'AdityaRoyKapoor', 2013),
(723, 'Airlift', 'Raja Krishna Menon', 'Nikkhil Advani', 'Akshay Kumar', 2016),
(816, 'Simran', 'Hansal Mehta', 'Apurva Asrani', 'Kangana Ranaut', 2017),
(1346, 'Bajirao Mastani', 'Sanjay Leela Bhansal', 'Tanvi Mazohad', 'Ranveer Singh', 2015),
(1862, 'Bajirangi Bhaijaan', 'Kabir Khan', 'Harshaali Malhotra', 'Salman Khan', 2015),
(1981, 'Housefull 3', 'Farhad Sanji', 'Sajid Khan', 'Akshay Kumar', 2016);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Email`, `password`) VALUES
('vamshi.maddipudi1997@gmail.com', 'vamshi'),
('sindreddy123@gmail.com', 'sindhoor');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `Email` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`Email`, `user`, `password`) VALUES
('sindreddy123@gmail.com', 'sindhoor', 'sindhoor'),
('vamshi.maddipudi1997@gmail.com', 'vamshi', 'vamshi');

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `TheatreID` int(11) NOT NULL,
  `FilmID` int(11) NOT NULL,
  `TheatreName` varchar(20) NOT NULL,
  `LocationPin` int(11) NOT NULL,
  `TheAmt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`TheatreID`, `FilmID`, `TheatreName`, `LocationPin`, `TheAmt`) VALUES
(102, 723, 'PVR cinemas', 560100, 8000000),
(103, 169, 'Gopalan cinema', 400001, 5000000),
(104, 1981, 'Shiva Theatre', 560035, 1500000),
(105, 1862, 'Venkat Theatre', 700028, 500000),
(106, 1346, 'Q Cinemas', 110021, 1000000),
(107, 816, 'Durga Theatre', 700001, 700000),
(108, 693, 'Prasad IMAX', 500068, 6000000),
(110, 169, 'Pruthvi Plus', 600015, 3000000),
(111, 1346, 'Sandhya Theatre', 500068, 300000),
(112, 1862, 'Cinemax', 110021, 4800000),
(113, 816, 'Vishnu Theatre', 560035, 700000),
(114, 693, 'Cinepolis', 110021, 4300000),
(115, 1981, 'Suresh Theatre', 700001, 140000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`TheatreID`),
  ADD KEY `DistID` (`DistID`);

--
-- Indexes for table `distributer`
--
ALTER TABLE `distributer`
  ADD PRIMARY KEY (`DistID`);

--
-- Indexes for table `districtinfo`
--
ALTER TABLE `districtinfo`
  ADD PRIMARY KEY (`LocationPin`,`DistID`),
  ADD KEY `DistID` (`DistID`);

--
-- Indexes for table `filmdetails`
--
ALTER TABLE `filmdetails`
  ADD PRIMARY KEY (`FilmID`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`Email`,`password`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`TheatreID`),
  ADD KEY `FilmID` (`FilmID`),
  ADD KEY `LocationPin` (`LocationPin`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collection`
--
ALTER TABLE `collection`
  ADD CONSTRAINT `collection_ibfk_1` FOREIGN KEY (`DistID`) REFERENCES `distributer` (`DistID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `districtinfo`
--
ALTER TABLE `districtinfo`
  ADD CONSTRAINT `districtinfo_ibfk_1` FOREIGN KEY (`DistID`) REFERENCES `distributer` (`DistID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `theatre`
--
ALTER TABLE `theatre`
  ADD CONSTRAINT `theatre_ibfk_1` FOREIGN KEY (`FilmID`) REFERENCES `filmdetails` (`FilmID`),
  ADD CONSTRAINT `theatre_ibfk_2` FOREIGN KEY (`LocationPin`) REFERENCES `districtinfo` (`LocationPin`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
