-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Oct 10, 2017 at 11:07 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Books`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `AID` int(11) NOT NULL,
  `personno` int(11) NOT NULL,
  `f-name` varchar(100) NOT NULL,
  `l-name` varchar(100) NOT NULL,
  `birthyear` year(4) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`AID`, `personno`, `f-name`, `l-name`, `birthyear`, `link`) VALUES
(1, 930810, 'Astrid', 'Lindgren', 1934, '');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `isbn` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_swedish_ci NOT NULL,
  `author` varchar(200) COLLATE utf8_swedish_ci NOT NULL,
  `nopages` int(10) DEFAULT NULL,
  `edition` int(10) DEFAULT NULL,
  `published` year(4) DEFAULT NULL,
  `company` varchar(200) COLLATE utf8_swedish_ci DEFAULT NULL,
  `loaned` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`isbn`, `title`, `author`, `nopages`, `edition`, `published`, `company`, `loaned`) VALUES
(1, 'Pippi Långstrump', 'Astrid Lindgren', 200, 2, 1995, NULL, 0),
(2, 'En bok om ingenting', 'Erik Eriksson', 249, 2, 2015, 'rabalder', 0),
(3, 'Bygg en pengamaskin', 'John Doe', 34, 6, 1992, NULL, 0),
(4, 'En bok ', 'Ejnar Carlsson', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `ID` int(11) NOT NULL,
  `AID` int(11) NOT NULL,
  `isbn` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`ID`, `AID`, `isbn`) VALUES
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`AID`),
  ADD KEY `AID` (`AID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD UNIQUE KEY `isbn_2` (`isbn`) USING BTREE,
  ADD KEY `isbn` (`isbn`) USING BTREE;

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AID` (`AID`) USING BTREE,
  ADD KEY `isbn` (`isbn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `isbn` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `library`
--
ALTER TABLE `library`
  ADD CONSTRAINT `library_ibfk_1` FOREIGN KEY (`isbn`) REFERENCES `books` (`isbn`),
  ADD CONSTRAINT `library_ibfk_2` FOREIGN KEY (`AID`) REFERENCES `author` (`AID`);
