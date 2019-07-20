-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2018 at 04:20 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asm-webdesign`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountuser`
--

CREATE TABLE `accountuser` (
  `Id` int(7) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountuser`
--

INSERT INTO `accountuser` (`Id`, `Username`, `Password`) VALUES
(1, 'quyen', '123'),
(21, 'quyen123', 'qqqq'),
(24, '12345', 'meoluoi02');

-- --------------------------------------------------------

--
-- Table structure for table `catalogy`
--

CREATE TABLE `catalogy` (
  `CatalogyId` int(8) NOT NULL,
  `CatalogyName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalogy`
--

INSERT INTO `catalogy` (`CatalogyId`, `CatalogyName`) VALUES
(1, 'Scottish fold cats'),
(2, 'Aln Cats'),
(3, 'Persian Longhair Cats'),
(4, 'Ragdoll Cats'),
(5, 'Savannah Cats'),
(6, 'Wirner Cats');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductId` int(8) NOT NULL,
  `CatalogyId` int(8) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Age` varchar(20) NOT NULL,
  `Origin` varchar(20) NOT NULL,
  `Price` int(5) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductId`, `CatalogyId`, `ProductName`, `Age`, `Origin`, `Price`, `Image`, `Description`) VALUES
(1, 1, 'Scottish Fold Cats', '2 weeks', 'China', 3000, '\\web\\Asm\\images\\scottish.jpg', 'The baby is now 2 months old, very good health, knowing the dried grain eats milk soaked. All will be vaccinated enough 2 noses before exporting the cages, a comprehensive warranty 15 days.'),
(2, 2, 'Aln Cats', '1,5 months', 'American', 2000, '\\web\\Asm\\images\\aln2.png', 'The baby is now 2 months old, very good health, knowing the dried grain eats milk soaked. All will be vaccinated enough 2 noses before exporting the cages, a comprehensive warranty 15 days.'),
(3, 3, 'Persian Longhair Cats', '2 months', 'China', 1000, '/web/Asm/images/persianLonghair.jpg', 'The baby is now 2 months old, very good health, knowing the dried grain eats milk soaked. All will be vaccinated enough 2 noses before exporting the cages, a comprehensive warranty 15 days.'),
(4, 4, 'Ragdoll Cats', '3 months', 'American', 2500, '/web/Asm/images/ragdoll.jpg', 'The baby is now 2 months old, very good health, knowing the dried grain eats milk soaked. All will be vaccinated enough 2 noses before exporting the cages, a comprehensive warranty 15 days.'),
(5, 5, 'Savannah Cats', '2 months', 'Janpan', 2000, '/web/Asm/images/savannah.jpg', 'The baby is now 2 months old, very good health, knowing the dried grain eats milk soaked. All will be vaccinated enough 2 noses before exporting the cages, a comprehensive warranty 15 days.'),
(6, 6, 'Wirner Cats', '2weeks', 'American', 10000, '/web/Asm/images/munchkin.jpg', 'The baby is now 2 months old, very good health, knowing the dried grain eats milk soaked. All will be vaccinated enough 2 noses before exporting the cages, a comprehensive warranty 15 days.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountuser`
--
ALTER TABLE `accountuser`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Password` (`Password`);

--
-- Indexes for table `catalogy`
--
ALTER TABLE `catalogy`
  ADD PRIMARY KEY (`CatalogyId`) USING BTREE;

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`) USING BTREE,
  ADD KEY `CatalogyId` (`CatalogyId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountuser`
--
ALTER TABLE `accountuser`
  MODIFY `Id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `catalogy`
--
ALTER TABLE `catalogy`
  MODIFY `CatalogyId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catalogy`
--
ALTER TABLE `catalogy`
  ADD CONSTRAINT `catalogy_ibfk_1` FOREIGN KEY (`CatalogyId`) REFERENCES `product` (`CatalogyId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
