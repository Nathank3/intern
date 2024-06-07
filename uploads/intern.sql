-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 08:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `aid` int(100) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmPassword` varchar(100) NOT NULL,
  `DateofAdmission` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`aid`, `uname`, `email`, `password`, `confirmPassword`, `DateofAdmission`) VALUES
(0, 'MAURICIO POCHETINO', 'abcd@gmail.com', '$2y$10$Zgmp5YksmUIxs79TOzlgQepevS2QypateSXumkIMo.bMrbrs4z71O', '123456', '2024-05-13 13:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `deadline`
--

CREATE TABLE `deadline` (
  `id` int(20) NOT NULL,
  `d_date` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deadline`
--

INSERT INTO `deadline` (`id`, `d_date`, `status`) VALUES
(5, '2024-12-17 00:00:00', 0),
(6, '2023-12-20 00:00:00', 0),
(7, '2023-12-20 00:00:00', 0),
(8, '2024-01-30 00:00:00', 0),
(9, '2024-03-31 00:00:00', 0),
(10, '2024-03-22 00:00:00', 0),
(11, '2024-03-28 00:00:00', 0),
(12, '2024-04-22 00:00:00', 0),
(13, '2024-04-24 00:00:00', 0),
(14, '2024-05-24 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `filesave`
--

CREATE TABLE `filesave` (
  `fid` int(11) NOT NULL,
  `iname` varchar(255) NOT NULL,
  `Coursename` varchar(255) NOT NULL,
  `Yearr` varchar(255) NOT NULL,
  `academics` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `nid` longblob NOT NULL,
  `KCSE` longblob NOT NULL,
  `letter` longblob NOT NULL,
  `CV` longblob NOT NULL,
  `Attachments` longblob NOT NULL,
  `Certificate` longblob NOT NULL,
  `status` int(100) NOT NULL DEFAULT 0,
  `pid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filesave`
--

INSERT INTO `filesave` (`fid`, `iname`, `Coursename`, `Yearr`, `academics`, `Department`, `nid`, `KCSE`, `letter`, `CV`, `Attachments`, `Certificate`, `status`, `pid`) VALUES
(22, 'MERU UNIVERSITY', 'COMPUTER SCIENCE', '2022', 'Degree', 'Department of ICT', 0x75706c6f6164732f5649525455414c20415353495354414e54202832292e646f6378, 0x75706c6f6164732f5649525455414c20415353495354414e54202833292e646f6378, 0x75706c6f6164732f5649525455414c20415353495354414e54202833292e646f6378, 0x75706c6f6164732f5649525455414c20415353495354414e5420283129202831292e646f6378, 0x75706c6f6164732f5649525455414c20415353495354414e5420283129202831292e646f6378, 0x75706c6f6164732f5649525455414c20415353495354414e54202833292e646f6378, 1, '53'),
(23, 'kisii university', 'BCS', '2019', 'Degree', 'HR', 0x75706c6f6164732f5649525455414c20415353495354414e542e646f6378, 0x75706c6f6164732f5649525455414c20415353495354414e542e646f6378, 0x75706c6f6164732f5649525455414c20415353495354414e542e646f6378, 0x75706c6f6164732f5649525455414c20415353495354414e542e646f6378, 0x75706c6f6164732f5649525455414c20415353495354414e542e646f6378, 0x75706c6f6164732f5649525455414c20415353495354414e542e646f6378, 2, '52');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `pid` int(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `passwordd` varchar(100) NOT NULL,
  `confirmPassword` varchar(100) NOT NULL,
  `county` varchar(255) NOT NULL,
  `subCounty` varchar(200) NOT NULL,
  `ward` varchar(200) NOT NULL,
  `DateofAdmission` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`pid`, `fullName`, `email`, `phone`, `Gender`, `passwordd`, `confirmPassword`, `county`, `subCounty`, `ward`, `DateofAdmission`) VALUES
(52, 'MERCY CHERONO', 'mercycherono@gmail.com', '0728353321', 'Female', '$2y$10$AwnfxM4YeFXIeOCn.uvqC.BbNk0VUTu3xKJJtWVpJA88MHxs5Vp.S', '$2y$10$AwnfxM4YeFXIeOCn.uvqC.BbNk0VUTu3xKJJtWVpJA88MHxs5Vp.S', 'Kericho', 'Bureti', 'Litein', '2024-04-22 08:35:14'),
(53, 'Thomas Kitheka', 'thomasmkitheka@gmail.com', '0757024562', 'Male', '$2y$10$9QnmPZdLii6y6uRmJBxy2Ol45AXjLlwmOB2lc0wOPC7hKcgq5uPNG', '$2y$10$9QnmPZdLii6y6uRmJBxy2Ol45AXjLlwmOB2lc0wOPC7hKcgq5uPNG', 'Makueni', 'Kibwezi East', 'Thange', '2024-04-22 09:06:07'),
(54, 'Ange Postecoglou', 'lnzuki89@gmail.com', '0714104180', 'Male', '$2y$10$epKBxd8/AZ5dGBygOmSWC.kuiyOnaKN7TaRL1KGXUv5aZfie9H4.C', '$2y$10$epKBxd8/AZ5dGBygOmSWC.kuiyOnaKN7TaRL1KGXUv5aZfie9H4.C', 'Nairobi', 'Ruaraka', 'Korogocho', '2024-04-22 10:45:10'),
(55, 'james kilonzo ', 'jamesmkilonzo@gmail.com', '0759426993', 'Male', '$2y$10$U7sqoBMUBj6AhbJNni0kROvOF8ChScGFPIaTV9sineEZfloZLI4C.', '$2y$10$U7sqoBMUBj6AhbJNni0kROvOF8ChScGFPIaTV9sineEZfloZLI4C.', 'Kitui', 'Mwingi West', 'Kiomo/Kyethani', '2024-04-23 13:10:29'),
(56, 'Mauricio Pochetino', 'mauriciopochetino@gmail.com', '0793445667', 'Male', '$2y$10$wDw838/1PwQC1H7OD.ZO8eISqGz9QRWlFl1ohNH0Ter80.tM1VHsm', '$2y$10$wDw838/1PwQC1H7OD.ZO8eISqGz9QRWlFl1ohNH0Ter80.tM1VHsm', 'Elgeyo-Marakwet', 'Keiyo South', 'Chepkorio', '2024-05-01 12:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `uid` int(255) NOT NULL,
  `posts` varchar(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`uid`, `posts`, `Date`) VALUES
(3, 'Strictly Adhere to Deadlines', '2024-01-15'),
(4, 'Canvasing will lead to automatic disqualification', '2024-01-15'),
(6, 'Volunteerism is for the recent Graduands', '2024-01-23'),
(8, 'Next Intern intake is on October', '2024-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `volunteerism`
--

CREATE TABLE `volunteerism` (
  `vid` int(255) NOT NULL,
  `iname` varchar(255) NOT NULL,
  `Coursename` varchar(255) NOT NULL,
  `Application_Type` varchar(200) NOT NULL,
  `Academic_Level` varchar(255) NOT NULL,
  `Department` varchar(250) NOT NULL,
  `KCSE` longblob NOT NULL,
  `CV` longblob NOT NULL,
  `ID` longblob NOT NULL,
  `application_letter` longblob NOT NULL,
  `Transcripts_or_certificate` longblob NOT NULL,
  `Insurance_letter` longblob NOT NULL,
  `pid` varchar(100) NOT NULL,
  `status` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteerism`
--

INSERT INTO `volunteerism` (`vid`, `iname`, `Coursename`, `Application_Type`, `Academic_Level`, `Department`, `KCSE`, `CV`, `ID`, `application_letter`, `Transcripts_or_certificate`, `Insurance_letter`, `pid`, `status`) VALUES
(23, 'CHUKA UNIVERSITY', 'INFORMATION TECHNOLOGY', 'Attachment', 'Degree', 'Department of Legal Services of ICT', 0x4174746163686d656e742f5649525455414c20415353495354414e54202832292e646f6378, 0x4174746163686d656e742f5649525455414c20415353495354414e54202832292e646f6378, 0x4174746163686d656e742f5649525455414c20415353495354414e54202832292e646f6378, 0x4174746163686d656e742f5649525455414c20415353495354414e54202832292e646f6378, 0x4174746163686d656e742f5649525455414c20415353495354414e54202832292e646f6378, 0x4174746163686d656e742f5649525455414c20415353495354414e54202832292e646f6378, '53', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `deadline`
--
ALTER TABLE `deadline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filesave`
--
ALTER TABLE `filesave`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `volunteerism`
--
ALTER TABLE `volunteerism`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deadline`
--
ALTER TABLE `deadline`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `filesave`
--
ALTER TABLE `filesave`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `volunteerism`
--
ALTER TABLE `volunteerism`
  MODIFY `vid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
