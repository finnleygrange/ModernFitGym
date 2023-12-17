-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 06:43 PM
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
-- Database: `modernfitgymdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `AdminID` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `PinNumber` varchar(255) DEFAULT NULL,
  `UserRole` varchar(50) DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `LogID` int(11) NOT NULL,
  `MemberID` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `MealDescription` text DEFAULT NULL,
  `MealPortion` float DEFAULT NULL,
  `ExerciseDescription` text DEFAULT NULL,
  `ExerciseDuration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `MemberID` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `PinNumber` varchar(255) DEFAULT NULL,
  `UserRole` varchar(50) DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`MemberID`, `FirstName`, `LastName`, `Email`, `PinNumber`, `UserRole`) VALUES
(1, 'asfddasf', 'sdfadasf', 'asfafsd', '767276', 'member'),
(2, 'fdsgfdgfd', 'fdgdfgdfg', 'fdsfgfgf', '282080', 'member'),
(3, 'sadfsadfsadf', 'fasdfdsafasd', 'fsdafdsaf', '262455', 'member'),
(4, 'sfadfsda', 'sfdaasdf', 'fsadfsda', '192652', 'member'),
(5, 'a', 'a', 'a', '546213', 'member'),
(6, 'sdfafsda', 'sdfafsda', 'sdafsdfa', '612308', 'member'),
(7, 'fdsafsafsa', 'sdfafsda', 'fsadfdsadfsafsdf', '737888', 'member'),
(8, 'sfadfsad', 'sdfaasdf', 'sfadsfda', '685256', 'member'),
(9, 'bbbb', 'bbbb', 'bbbbb', '325605', 'member'),
(10, 'admin', 'admin', 'admin@admin.com', '571085', 'member'),
(11, 'c', 'c', 'c@test.com', '154490', 'member'),
(12, 'dwa', 'd', 'd@test.com', '724448', 'member'),
(13, 'finnley', 'grange', 'finnley@gmail.com', '172132', 'member'),
(14, 'Elliot', 'Haigh', 'locktum713@gmail.com', '123456', 'admin'),
(15, 'test', 'test', 'hello@gmail.com', '551255', 'member'),
(16, 'testtest', 'testtest', 'test@email.com', '444942', 'member'),
(17, 'testtest', 'testtest', 'test@email.com', '444942', 'member'),
(18, 'testtest', 'testtest', 'testtest@email.com', '700448', 'member'),
(19, 'testtest', 'testtest', 'testtest@email.com', '700448', 'member'),
(20, 'testtest', 'testtest', 'testtesttest@email.com', '332719', 'member'),
(21, 'testytesttest', 'testetstetstetst', 'test2@test.com', '310660', 'member'),
(22, 'dwadawdaw', 'dwadawdaw', 'dwadwadaw', '585447', 'member'),
(23, 'wdawdawfawd', 'wfawdawdasdw', 'dawdafawdawd', '259811', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `nutritionalinformation`
--

CREATE TABLE `nutritionalinformation` (
  `FoodID` int(11) NOT NULL,
  `FoodName` varchar(255) DEFAULT NULL,
  `CalorieCount` int(11) DEFAULT NULL,
  `Protein` float DEFAULT NULL,
  `Carbohydrates` float DEFAULT NULL,
  `Fat` float DEFAULT NULL,
  `Fiber` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nutritionalinformation`
--

INSERT INTO `nutritionalinformation` (`FoodID`, `FoodName`, `CalorieCount`, `Protein`, `Carbohydrates`, `Fat`, `Fiber`) VALUES
(8, 'Apple', 95, 0.5, 25, 0.3, 4.4),
(9, 'Chicken Breast', 165, 31, 0, 3.6, 0),
(10, 'Broccoli', 31, 2.5, 6, 0.3, 2.4),
(11, 'Ham', 92, 3.4, 5.3, 2.4, 4.3),
(22, 'Bacon', 112, 6.4, 3.4, 6.2, 2.4),
(26, 'Pork', 124, 4.2, 5.2, 6.4, 5.3);

-- --------------------------------------------------------

--
-- Table structure for table `pfps`
--

CREATE TABLE `pfps` (
  `id` int(11) NOT NULL,
  `pfp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pfps`
--

INSERT INTO `pfps` (`id`, `pfp`) VALUES
(13, 'one piece wallpaper.jpg'),
(12, 'one piece wallpaper.jpg'),
(0, 'one piece wallpaper.jpg'),
(0, 'one piece wallpaper.jpg'),
(22, 'one piece wallpaper.jpg'),
(23, 'one piece wallpaper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `ProgressID` int(11) NOT NULL,
  `MemberID` int(11) DEFAULT NULL,
  `TrainerID` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Weight` float DEFAULT NULL,
  `BodyFatPercentage` float DEFAULT NULL,
  `WorkoutDuration` int(11) DEFAULT NULL,
  `Comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `TrainerID` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `PinNumber` varchar(255) DEFAULT NULL,
  `UserRole` varchar(50) DEFAULT 'trainer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`TrainerID`, `FirstName`, `LastName`, `Email`, `PinNumber`, `UserRole`) VALUES
(1, 'test', 'test2', 'test@test.com', '123456', 'trainer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`AdminID`),
  ADD UNIQUE KEY `PinNumber` (`PinNumber`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`LogID`),
  ADD KEY `MemberID` (`MemberID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`MemberID`);

--
-- Indexes for table `nutritionalinformation`
--
ALTER TABLE `nutritionalinformation`
  ADD PRIMARY KEY (`FoodID`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`ProgressID`),
  ADD KEY `fk_progress_member` (`MemberID`),
  ADD KEY `fk_progress_trainer` (`TrainerID`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`TrainerID`),
  ADD UNIQUE KEY `PinNumber` (`PinNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `MemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `nutritionalinformation`
--
ALTER TABLE `nutritionalinformation`
  MODIFY `FoodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `TrainerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `members` (`MemberID`);

--
-- Constraints for table `progress`
--
ALTER TABLE `progress`
  ADD CONSTRAINT `fk_progress_member` FOREIGN KEY (`MemberID`) REFERENCES `members` (`MemberID`),
  ADD CONSTRAINT `fk_progress_trainer` FOREIGN KEY (`TrainerID`) REFERENCES `trainers` (`TrainerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
