-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2022 at 11:26 PM
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
-- Database: `food_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `password` char(12) NOT NULL,
  `phone no.` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `name`, `password`, `phone no.`) VALUES
('admin', 'admin@yahoo.com', 'admin', 'admin', '123123'),
('Sami_Khan', 'samikhan@gmail.com', 'Samiul Islam Khan', '2223355', '01625368692');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `Complain_ID` varchar(20) NOT NULL,
  `Subject` varchar(40) NOT NULL,
  `Date` date NOT NULL,
  `Text` varchar(120) NOT NULL,
  `Comment` varchar(60) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `User_ID` varchar(20) NOT NULL,
  `Feedback` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `Donation_ID` int(11) NOT NULL,
  `User_ID` varchar(20) NOT NULL,
  `Item` varchar(20) NOT NULL,
  `Amount` varchar(20) NOT NULL,
  `NGO_Name` varchar(40) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`Donation_ID`, `User_ID`, `Item`, `Amount`, `NGO_Name`, `Address`, `Status`) VALUES
(7, 'w', 'Bread & Grains', '123', 'Cube', '1212', 'Delivered'),
(9, 'tanz', 'Vegetables', '2kg', 'Cube', 'Khulna', 'Pickup in Progress'),
(10, 'w', 'Fruits', '12KG', 'Cube', 'Daroga Barir Mor, South Badda, Gulshan', 'Pickup in Progress');

-- --------------------------------------------------------

--
-- Table structure for table `dphone`
--

CREATE TABLE `dphone` (
  `id` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dphone`
--

INSERT INTO `dphone` (`id`, `phone`) VALUES
('tanz', '017000000000'),
('w', '1122');

-- --------------------------------------------------------

--
-- Table structure for table `managed by`
--

CREATE TABLE `managed by` (
  `Admin_ID` varchar(20) NOT NULL,
  `Complain_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `id` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `password` char(20) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`id`, `email`, `name`, `password`, `address`) VALUES
('a', 'a', 'a', 'a', 'a'),
('b', 'b', 'b', 'b', 'b'),
('cube', 'cube@gmail.com', 'Cube', '2323', 'Badda'),
('eksho', 'eksho@mail', 'Eksho100', '1212', 'kachei');

-- --------------------------------------------------------

--
-- Table structure for table `nphone`
--

CREATE TABLE `nphone` (
  `id` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nphone`
--

INSERT INTO `nphone` (`id`, `Phone`) VALUES
('b', 'b'),
('cube', '018000000000');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `Phone`) VALUES
('tanz', '017000000000'),
('w', 'w');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `password` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `address`, `password`) VALUES
('tanz', 'tanz@gmail.com', 'Mehjabeen Afroz Tanni', 'Dhaka Cant.', '1212'),
('w', 'w', 'w', 'w', 'w');

-- --------------------------------------------------------

--
-- Table structure for table `volstat`
--

CREATE TABLE `volstat` (
  `id` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `name`, `password`, `status`) VALUES
('dmdking', 'Aosaf', '3434', ''),
('vol', 'vol', '1212', '');

-- --------------------------------------------------------

--
-- Table structure for table `vphone`
--

CREATE TABLE `vphone` (
  `id` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vphone`
--

INSERT INTO `vphone` (`id`, `phone`) VALUES
('vol', '0010'),
('dmdking', '019000000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`Complain_ID`),
  ADD KEY `user_id` (`User_ID`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`Donation_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `dphone`
--
ALTER TABLE `dphone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managed by`
--
ALTER TABLE `managed by`
  ADD PRIMARY KEY (`Admin_ID`,`Complain_ID`),
  ADD KEY `complain_id` (`Complain_ID`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nphone`
--
ALTER TABLE `nphone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID` (`id`,`email`,`name`,`password`);

--
-- Indexes for table `volstat`
--
ALTER TABLE `volstat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `Donation_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complain`
--
ALTER TABLE `complain`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`User_ID`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `managed by`
--
ALTER TABLE `managed by`
  ADD CONSTRAINT `admin_id` FOREIGN KEY (`Admin_ID`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `complain_id` FOREIGN KEY (`Complain_ID`) REFERENCES `complain` (`Complain_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `phone` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
