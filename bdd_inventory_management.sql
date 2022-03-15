-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 07:15 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdd inventory management`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(6) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Amount` int(3) NOT NULL,
  `Price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `Name`, `Location`, `Amount`, `Price`) VALUES
(1, 'weed', 'UpYourAssAndToTheLeft', 10, 5),
(2, 'crap', 'don\'t worry about it', 7, 69.69),
(3, 'russian stocks', 'ukraine', 50, 0);

-- --------------------------------------------------------

--
-- Table structure for table `profileremovals`
--

CREATE TABLE `profileremovals` (
  `RemovalID` int(6) NOT NULL,
  `Date` date NOT NULL,
  `AdminID` int(6) NOT NULL,
  `UserID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `InteractionID` int(10) NOT NULL,
  `UserID` int(6) NOT NULL,
  `ProductID` int(6) NOT NULL,
  `InteractionType` varchar(50) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`InteractionID`, `UserID`, `ProductID`, `InteractionType`, `Date`) VALUES
(1, 3, 2, 'amount', '0000-00-00 00:00:00'),
(2, 2, 1, 'location', '0000-00-00 00:00:00'),
(3, 2, 3, 'price', '0000-00-00 00:00:00'),
(4, 3, 3, 'amount', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(6) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Question` varchar(150) NOT NULL,
  `Answer` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `Username`, `Password`, `Type`, `Question`, `Answer`) VALUES
(2, 'Poop', 'Johnson', 'PJohnson42069', 'Nice', 'admin', 'chairs', 'no'),
(3, 'Chip', 'Whitley', 'ChipW', 'chip', 'employee', 'guess what', 'chicken butt'),
(4, 'X ? A-12', 'Musk', 'TeslaBoy', 'weed', 'customer', 'how do you pronounce your name', 'idk'),
(5, 'Andrew', 'Jackson', 'OldHickory', 'fuckyou', 'customer', 'how many people have you beat with a cane', 'one');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `profileremovals`
--
ALTER TABLE `profileremovals`
  ADD PRIMARY KEY (`RemovalID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `AdminID` (`AdminID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`InteractionID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `ItemID` (`ProductID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `Type` (`Type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profileremovals`
--
ALTER TABLE `profileremovals`
  MODIFY `RemovalID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `InteractionID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profileremovals`
--
ALTER TABLE `profileremovals`
  ADD CONSTRAINT `profileremovals_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `profileremovals_ibfk_2` FOREIGN KEY (`AdminID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
