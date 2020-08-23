-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2017 at 07:57 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lucypet_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petreg`
--

CREATE TABLE `tbl_petreg` (
  `pet_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `walk` int(11) NOT NULL,
  `feed` int(11) NOT NULL,
  `social` int(11) NOT NULL,
  `session` int(11) NOT NULL,
  `days` varchar(50) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_petreg`
--

INSERT INTO `tbl_petreg` (`pet_id`, `userid`, `name`, `age`, `walk`, `feed`, `social`, `session`, `days`, `time`) VALUES
(2, 2, 'abc', 12, 35, 35, 35, 35, 'Sunday', '00:00:12'),
(3, 1, 'abcd', 31, 31, 31, 31, 31, 'Monday', '00:12:12'),
(4, 1, 'asd', 12, 32, 32, 32, 32, 'Sunday', '00:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signup`
--

CREATE TABLE `tbl_signup` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `distance` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_petreg`
--
ALTER TABLE `tbl_petreg`
  ADD PRIMARY KEY (`pet_id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `tbl_signup`
--
ALTER TABLE `tbl_signup`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_petreg`
--
ALTER TABLE `tbl_petreg`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_signup`
--
ALTER TABLE `tbl_signup`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_petreg`
--
ALTER TABLE `tbl_petreg`
  ADD CONSTRAINT `tbl_petreg_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `tbl_signup` (`userid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
