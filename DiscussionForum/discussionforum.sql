-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2015 at 07:19 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `discussionforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `C_Name` varchar(255) NOT NULL,
  `C_ID` int(11) NOT NULL,
  `C_Desc` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`C_Name`, `C_ID`, `C_Desc`) VALUES
('Books', 1, 'Educational, story books, novels etc'),
('Sports', 4, 'Cricket, Football, Tennis, Volleyball, Basketball etc.'),
('Food', 3, 'Indian, Chinese, Continental etc'),
('Music', 2, 'Classical, instrumental, hiphop, pop, rock, metal etc.');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `T_Name` varchar(255) NOT NULL,
  `C_ID` int(11) NOT NULL,
  `Reply` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`T_Name`, `C_ID`, `Reply`) VALUES
('Which is your favorite novel?', 1, ''),
('Do you prefer Indian or Chinese?', 3, ''),
('Have you ever eaten octopuses?', 0, 'Yes, I tried eating it while scuba diving in Singapore.'),
('Do you prefer Indian or Chinese?', 0, 'Indian'),
('Are you trained in classical music?', 0, 'Yes.'),
('Do you listen to Justin Beiber?', 2, ''),
('Do you think Serena Williams is not a man disguised as woman?', 4, ''),
('Have you ever eaten octopuses?', 3, ''),
('Are you trained in classical music?', 0, 'Yes.'),
('Which is your favorite novel?', 0, 'The Three Muskeeteers'),
('Do you prefer Indian or Chinese?', 0, 'Chinese is the best.'),
('Do you have solutions of HC Verma?', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `F_Name` varchar(255) NOT NULL,
  `L_Name` varchar(255) NOT NULL,
  `Pwd` varchar(255) NOT NULL,
  `U_Type` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`User_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`F_Name`, `L_Name`, `Pwd`, `U_Type`, `DOB`, `Email`, `Gender`, `User_ID`) VALUES
('Team', 'HP', '12345', 'Admin', '1996-02-29', 'team.hp@gmail.com', 'Female', 1),
('Rahul', 'Dravid', '1234', 'User', '1977-10-28', 'rahuldravid@gmail.com', 'Male', 2),
('Chanda', 'Kochchar', 'icici', 'User', '1970-04-21', 'chandakochchar@icici.com', 'Female', 3),
('Micromax', 'Yureka', '0987', 'User', '1900-05-16', 'einsteinyureka@gmail.com', 'Male', 4),
('Micromax', 'Yureka', '0987', 'User', '1900-05-16', 'einsteinyureka@gmail.com', 'Male', 5),
('Micromax', 'Yureka', '0987', 'User', '1900-05-16', 'einsteinyureka@gmail.com', 'Male', 6),
('Micromax', 'Yureka', '0987', 'User', '1900-05-16', 'einsteinyureka@gmail.com', 'Male', 7),
('Micromax', 'Yureka', '0987', 'User', '1900-05-16', 'einsteinyureka@gmail.com', 'Male', 8),
('Micromax', 'Yureka', '0987', 'User', '1900-05-16', 'einsteinyureka@gmail.com', 'Male', 9),
('Micromax', 'Yureka', '0987', 'User', '1900-05-16', 'einsteinyureka@gmail.com', 'Male', 10),
('Micromax', 'Yureka', '0987', 'User', '1900-05-16', 'einsteinyureka@gmail.com', 'Male', 11),
('Micromax', 'Yureka', '0987', 'User', '1900-05-16', 'einsteinyureka@gmail.com', 'Male', 12),
('Micromax', 'Yureka', '0987', 'User', '1900-05-16', 'einsteinyureka@gmail.com', 'Male', 13),
('Micromax', 'Yureka', '0987', 'User', '1900-05-16', 'einsteinyureka@gmail.com', 'Male', 14);
