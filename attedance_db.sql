-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 04:25 PM
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
-- Database: `attedance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendee`
--

CREATE TABLE `attendee` (
  `Attendee_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dateofbirth` date NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `Email_address` varchar(100) NOT NULL,
  `PASS` varchar(20) NOT NULL,
  `Avatar` varchar(25) NOT NULL,
  `Category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendee`
--

INSERT INTO `attendee` (`Attendee_id`, `firstname`, `lastname`, `dateofbirth`, `phone_number`, `Email_address`, `PASS`, `Avatar`, `Category`) VALUES
(1, 'molly', 'maseno', '0000-00-00', '0729674563', 'masenomolly1@gmail.com', '123', '', 1),
(2, 'rob', 'okoth', '2020-12-03', '0792783657', 'robokoth@gmail.com', '1q23', '', 1),
(3, 'john', 'maina', '2002-12-08', '0758206444', 'kelvingithu019@gmaiol.com', 'nsadu', '132 California', 1),
(6, 'peter', 'kihoi', '2003-08-12', '073545432', 'peter@gmail.com', '123', 'westi', 2),
(7, 'taylor', 'mayor', '2006-07-01', '071234567', 'taylor@gmail.com', '1234', '021 LA', 1),
(14, 'timothy', 'muthama', '1951-07-04', '0723440442', 'muthama@gmail.com', '1234r', '231 st jonhs', 2),
(15, 'timo', 'nganga', '2003-01-01', '0723377277', 'timo@kimonyoski.com', '123', '21 rongai', 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`) VALUES
(1, 'Student'),
(2, 'Lecturer'),
(3, 'Director');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendee`
--
ALTER TABLE `attendee`
  ADD PRIMARY KEY (`Attendee_id`),
  ADD KEY `fk_attendee_category` (`Category`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendee`
--
ALTER TABLE `attendee`
  MODIFY `Attendee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendee`
--
ALTER TABLE `attendee`
  ADD CONSTRAINT `fk_attendee_category` FOREIGN KEY (`Category`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
