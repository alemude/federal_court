-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 01:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brcourt`
--

-- --------------------------------------------------------

--
-- Table structure for table `advocators`
--

CREATE TABLE `advocators` (
  `advo_ID` int(15) NOT NULL,
  `appo_ID` int(15) NOT NULL,
  `dec_ID` int(15) NOT NULL,
  `info_ID` int(15) NOT NULL,
  `com_ID` int(15) NOT NULL,
  `cus_ID` int(15) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(250) NOT NULL,
  `woreda` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `kebele` varchar(100) NOT NULL,
  `h_number` int(10) NOT NULL,
  `phone` int(13) NOT NULL,
  `status` varchar(10) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appoID` int(12) NOT NULL,
  `judgeID` int(12) NOT NULL,
  `caseID` int(12) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `chilot` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `assignedcases`
--

CREATE TABLE `assignedcases` (
  `assignedID` int(11) NOT NULL,
  `caseID` int(13) NOT NULL,
  `judgeID` int(12) NOT NULL,
  `name` varchar(34) NOT NULL,
  `fname` varchar(34) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `accuserID` int(12) NOT NULL,
  `kebele` varchar(25) NOT NULL,
  `name1` varchar(34) NOT NULL,
  `fname1` varchar(34) NOT NULL,
  `age1` int(3) NOT NULL,
  `sex1` varchar(6) NOT NULL,
  `accusedID` int(12) NOT NULL,
  `kebele1` varchar(34) NOT NULL,
  `image` longblob NOT NULL,
  `advocator` varchar(50) NOT NULL,
  `status` varchar(34) NOT NULL,
  `c_type` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `caseID` int(12) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `c_type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `accuserID` int(13) NOT NULL,
  `kebele` varchar(100) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `fname1` varchar(100) NOT NULL,
  `age1` int(3) NOT NULL,
  `sex1` varchar(6) NOT NULL,
  `accusedID` int(13) NOT NULL,
  `kebele1` varchar(100) NOT NULL,
  `image` longblob NOT NULL,
  `advocator` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `createaccount`
--

CREATE TABLE `createaccount` (
  `id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(250) NOT NULL,
  `p_number` int(13) NOT NULL,
  `password` varchar(50) NOT NULL,
  `re_password` varchar(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `decision`
--

CREATE TABLE `decision` (
  `deciID` int(12) NOT NULL,
  `rdate` date NOT NULL,
  `caseId` int(13) NOT NULL,
  `casetype` varchar(30) NOT NULL,
  `accuser` varchar(20) NOT NULL,
  `amname` varchar(25) NOT NULL,
  `alname` varchar(25) NOT NULL,
  `asex` varchar(6) NOT NULL,
  `defender` varchar(25) NOT NULL,
  `dmname` varchar(25) NOT NULL,
  `dlname` varchar(25) NOT NULL,
  `dsex` varchar(6) NOT NULL,
  `image` longblob NOT NULL,
  `judge` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `defenders`
--

CREATE TABLE `defenders` (
  `caseID` int(12) NOT NULL,
  `accusedID` int(12) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `age` varchar(3) NOT NULL,
  `quality` varchar(15) NOT NULL,
  `martial` varchar(10) NOT NULL,
  `nation` varchar(20) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `woreda` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `kebele` varchar(30) NOT NULL,
  `h_number` int(12) NOT NULL,
  `phone` int(13) NOT NULL,
  `advocator` varchar(50) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `evidence`
--

CREATE TABLE `evidence` (
  `eviID` int(12) NOT NULL,
  `caseID` varchar(12) NOT NULL,
  `type` varchar(50) NOT NULL,
  `pfname` varchar(30) NOT NULL,
  `pmname` varchar(20) NOT NULL,
  `plname` varchar(25) NOT NULL,
  `psex` varchar(6) NOT NULL,
  `dfname` varchar(23) NOT NULL,
  `dmname` varchar(23) NOT NULL,
  `dlname` varchar(23) NOT NULL,
  `dsex` varchar(6) NOT NULL,
  `daddress` varchar(23) NOT NULL,
  `wfname` varchar(23) NOT NULL,
  `wmname` varchar(23) NOT NULL,
  `wlname` varchar(23) NOT NULL,
  `wsex` varchar(6) NOT NULL,
  `waddress` varchar(23) NOT NULL,
  `wifname` varchar(23) NOT NULL,
  `wimname` varchar(23) NOT NULL,
  `wilname` varchar(23) NOT NULL,
  `wisex` varchar(6) NOT NULL,
  `wiaddress` varchar(34) NOT NULL,
  `witfname` varchar(23) NOT NULL,
  `witmname` varchar(23) NOT NULL,
  `witlname` varchar(23) NOT NULL,
  `witsex` varchar(6) NOT NULL,
  `witaddress` varchar(23) NOT NULL,
  `image` longblob NOT NULL,
  `maker` varchar(46) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `id` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `text` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advocators`
--
ALTER TABLE `advocators`
  ADD PRIMARY KEY (`advo_ID`),
  ADD KEY `appo_ID` (`appo_ID`),
  ADD KEY `dec_ID` (`dec_ID`),
  ADD KEY `info_ID` (`info_ID`),
  ADD KEY `com_ID` (`com_ID`),
  ADD KEY `cus_ID` (`cus_ID`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appoID`);

--
-- Indexes for table `assignedcases`
--
ALTER TABLE `assignedcases`
  ADD PRIMARY KEY (`assignedID`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`caseID`),
  ADD KEY `accuserID` (`accuserID`),
  ADD KEY `accusedID` (`accusedID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `createaccount`
--
ALTER TABLE `createaccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `decision`
--
ALTER TABLE `decision`
  ADD PRIMARY KEY (`deciID`);

--
-- Indexes for table `evidence`
--
ALTER TABLE `evidence`
  ADD PRIMARY KEY (`eviID`);

--
-- Indexes for table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advocators`
--
ALTER TABLE `advocators`
  MODIFY `advo_ID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appoID` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assignedcases`
--
ALTER TABLE `assignedcases`
  MODIFY `assignedID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `caseID` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `createaccount`
--
ALTER TABLE `createaccount`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `decision`
--
ALTER TABLE `decision`
  MODIFY `deciID` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evidence`
--
ALTER TABLE `evidence`
  MODIFY `eviID` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
