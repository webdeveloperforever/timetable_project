-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 10:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cse2a`
--

CREATE TABLE `cse2a` (
  `S_No` int(50) NOT NULL,
  `Day` char(20) NOT NULL,
  `1st_hour` varchar(50) NOT NULL,
  `2nd_hour` varchar(50) NOT NULL,
  `Short_break` varchar(60) NOT NULL,
  `3rd_hour` varchar(20) NOT NULL,
  `4th_hour` varchar(20) NOT NULL,
  `Lunch_break` varchar(30) NOT NULL,
  `5th_hour` varchar(20) NOT NULL,
  `6th_hour` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse2a`
--

INSERT INTO `cse2a` (`S_No`, `Day`, `1st_hour`, `2nd_hour`, `Short_break`, `3rd_hour`, `4th_hour`, `Lunch_break`, `5th_hour`, `6th_hour`) VALUES
(1, 'Monday', 'DS', 'OOPS', 'BREAK', 'COA', 'COSM', 'BREAK', 'ADE', 'GS'),
(2, 'Tuesday', 'ADE', 'COSM', 'BREAK', 'DS', 'OOPS', 'BREAK', 'COA', 'GS'),
(3, 'Wednesday', 'COSM', 'OOPS', 'BREAK', 'ADE', 'GS', 'BREAK', 'DS', 'COA'),
(4, 'Thursday', 'COSM', 'OOPS', 'BREAK', 'DS', 'ADE', 'BREAK', 'COA', 'GS');

-- --------------------------------------------------------

--
-- Table structure for table `cse2b`
--

CREATE TABLE `cse2b` (
  `S_No` int(50) NOT NULL,
  `Day` char(20) NOT NULL,
  `1st_hour` varchar(50) NOT NULL,
  `2nd_hour` varchar(50) NOT NULL,
  `Short_break` varchar(30) NOT NULL,
  `3rd_hour` varchar(20) NOT NULL,
  `4th_hour` varchar(20) NOT NULL,
  `Lunch_break` varchar(30) NOT NULL,
  `5th_hour` varchar(20) NOT NULL,
  `6th_hour` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse2b`
--

INSERT INTO `cse2b` (`S_No`, `Day`, `1st_hour`, `2nd_hour`, `Short_break`, `3rd_hour`, `4th_hour`, `Lunch_break`, `5th_hour`, `6th_hour`) VALUES
(1, 'Monday', 'COSM', 'OOPS', 'BREAK', 'ADE', 'DS', 'BREAK', 'GS', 'COA'),
(2, 'Tuesday', 'ADE', 'COSM', 'BREAK', 'DS', 'OOPS', 'BREAK', 'COA', 'GS'),
(3, 'Wednesday', 'DS', 'OOPS', 'BREAK', 'COA', 'COSM', 'BREAK', 'ADE', 'GS');

-- --------------------------------------------------------

--
-- Table structure for table `cse3a`
--

CREATE TABLE `cse3a` (
  `S_No` int(50) NOT NULL,
  `Day` char(20) NOT NULL,
  `1st_hour` varchar(50) NOT NULL,
  `2nd_hour` varchar(50) NOT NULL,
  `Short_break` varchar(30) NOT NULL,
  `3rd_hour` varchar(30) NOT NULL,
  `4th_hour` varchar(20) NOT NULL,
  `Lunch_break` varchar(30) NOT NULL,
  `5th_hour` varchar(20) NOT NULL,
  `6th_hour` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse3a`
--

INSERT INTO `cse3a` (`S_No`, `Day`, `1st_hour`, `2nd_hour`, `Short_break`, `3rd_hour`, `4th_hour`, `Lunch_break`, `5th_hour`, `6th_hour`) VALUES
(1, 'Monday', 'WT', 'PE-1', 'BREAK', 'CN', 'FLAT', 'BREAK', 'PE-2', 'SE'),
(2, 'Tuesday', 'SE', 'CN', 'BREAK', 'PE-1', 'PE-2', 'BREAK', 'WT', 'FLAT'),
(3, 'Wednesday', 'WT', 'SE', 'BREAK', 'CN', 'PE-2', 'BREAK', 'PE-1', 'FLAT');

-- --------------------------------------------------------

--
-- Table structure for table `cse3b`
--

CREATE TABLE `cse3b` (
  `S_No` int(50) NOT NULL,
  `Day` char(20) NOT NULL,
  `1st_hour` varchar(70) NOT NULL,
  `2nd_hour` varchar(50) NOT NULL,
  `Short_break` varchar(40) NOT NULL,
  `3rd_hour` varchar(20) NOT NULL,
  `4th_hour` varchar(30) NOT NULL,
  `Lunch_break` varchar(20) NOT NULL,
  `5th_hour` varchar(30) NOT NULL,
  `6th_hour` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse3b`
--

INSERT INTO `cse3b` (`S_No`, `Day`, `1st_hour`, `2nd_hour`, `Short_break`, `3rd_hour`, `4th_hour`, `Lunch_break`, `5th_hour`, `6th_hour`) VALUES
(1, 'Monday', 'WT', 'PE-1', 'BREAK', 'CN', 'FLAT', 'BREAK', 'PE-2', 'WT'),
(2, 'Tuesday', 'SE', 'CN', 'BREAK', 'PE-1', 'PE-2', 'BREAK', 'WT', 'FLAT'),
(3, 'Wednesday', 'SE', 'CN', 'BREAK', 'WT', 'FLAT', 'BREAK', 'PE-2', 'PE-1');

-- --------------------------------------------------------

--
-- Table structure for table `facultylogindetails`
--

CREATE TABLE `facultylogindetails` (
  `F_id` int(50) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(90) NOT NULL,
  `F_Name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facultylogindetails`
--

INSERT INTO `facultylogindetails` (`F_id`, `Username`, `Password`, `F_Name`) VALUES
(1, 'sowjanyaramishetty@kgr.ac.in', 'kgrcet123', 'sowjanya'),
(2, 'krkreddy@kgr.ac.in', 'kgrcet123', 'K Rama Krishna Reddy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
