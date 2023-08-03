-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 08:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `employer_reg`
--

CREATE TABLE `employer_reg` (
  `EmployerId` int(11) NOT NULL,
  `ContactPerson` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employer_reg`
--

INSERT INTO `employer_reg` (`EmployerId`, `ContactPerson`, `City`, `Mobile`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(11, 'Krushna', 'Mumbai', 7350478708, 'Abc', 'Krushna@11', 'Who is Your Favourite Person?', 'krushna'),
(12, 'vedant', 'pune', 8899980099, 'Vedant', 'Vedant@234', 'Who is Your Favourite Person?', 'vedant'),
(13, 'saurabh', 'pune', 9874563210, 'sheru', 'Sheru@123', 'What is Your Pet Name?', 'sheru'),
(14, 'pratik', 'pune', 5635463488, 'pratik', 'Pratik@123', 'Who is Your Favourite Person?', 'sheru');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_reg`
--

CREATE TABLE `jobseeker_reg` (
  `JobSeekId` int(11) NOT NULL,
  `JobSeekerName` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `WorkType` varchar(40) NOT NULL,
  `BirthDate` date NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  `Experience` varchar(255) NOT NULL,
  `Availability` varchar(3) NOT NULL,
  `Availability_Date` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobseeker_reg`
--

INSERT INTO `jobseeker_reg` (`JobSeekId`, `JobSeekerName`, `City`, `Mobile`, `WorkType`, `BirthDate`, `UserName`, `Password`, `Question`, `Answer`, `Experience`, `Availability`, `Availability_Date`) VALUES
(1, 'Krushna', 'Pune', 9865222288, 'Construction', '1986-03-04', 'Krushna', 'Krushna@123', 'What is Your Pet Name?', 'cat', '1.7 Years', 'No', '2023-03-23'),
(2, 'Nayan', 'nagpur', 9856623456, 'Plumbing', '1991-03-15', 'nayan', 'Nayan@123', 'What is the Name of Your First School?', 'cat', '2 Years', 'Yes', NULL),
(3, 'Ritesh', 'nagpur', 7875896541, 'Construction', '1997-03-20', 'ritesh', 'Ritesh@123', 'What is the Name of Your First School?', 'cow', '7 Years', 'No', '2023-03-31'),
(4, 'Roshan', 'satara', 9856578945, 'Labour', '1995-03-22', 'roshan', 'Roshan@123', 'What is Your Pet Name?', 'girraf', '6 Months', 'Yes', NULL),
(5, 'Akash', 'Jalgaon', 7875896541, 'Electrician', '1996-03-13', 'akash', 'Akash@123', 'What is Your Pet Name?', 'dog', '6 Years', 'Yes', NULL),
(6, 'jay', 'wardha', 9856623456, 'Plumbing', '1995-03-15', 'jay', 'Pass@123', 'What is Your Pet Name?', 'dog', '2 months', '', NULL),
(7, 'om', 'mumbai', 9865222288, 'Electrician', '1996-03-04', 'om', 'Pass@123', 'What is Your Pet Name?', 'dodo', '9 months', '', NULL),
(8, 'ram', 'nagpur', 9865222288, 'Construction', '1999-03-09', 'ram', 'Pass@123', 'What is Your Pet Name?', 'cow', '5 Years', 'Yes', NULL),
(9, 'sham', 'pune', 9865222288, 'Plumbing', '1996-03-05', 'sham', 'Sham@123', 'What is Your Pet Name?', 'cat', '', '', NULL),
(10, 'hina', 'pune', 9856623456, 'Electrician', '1995-03-21', 'hina', 'Hina@123', 'What is Your Pet Name?', 'parrot', '', '', NULL),
(11, 'Vedant', 'Pune', 7350478708, 'Plumbing', '1996-03-12', 'vedant', 'Vedant@123', 'What is Your Pet Name?', 'dog', '', '', NULL),
(12, 'Asha', 'satara', 7875896541, 'Plumbing', '1997-03-18', 'asha', 'Asha@123', 'What is Your Pet Name?', 'cat', '', '', NULL),
(13, 'Bina', 'pune', 7875896541, 'Labour', '1996-03-12', 'bina', 'Bina@123', 'What is Your Pet Name?', 'cat', '', '', NULL),
(14, 'Gurpreet', 'mumbai', 9856623456, 'Labour', '1994-03-16', 'gurpreet', 'Gurpreet@123', 'What is Your Pet Name?', 'bat', '', 'No', '2023-03-30'),
(15, 'Abdul', 'pune', 7875896541, 'Electrician', '1998-03-02', 'abdul', 'Abdul@123', 'What is Your Pet Name?', 'dog', '1 year', '', NULL),
(17, 'krushna', 'pune', 7894561230, 'Construction', '2023-03-06', 'abcde', 'Krudshna@15', 'What is Your Pet Name?', 'dog', '2 years', 'Yes', NULL),
(18, 'kartik', 'pune', 5635463488, 'Electrician', '2023-03-07', 'kartik', 'Kartik@123', 'What is Your Pet Name?', 'sheru', '10 days', 'Yes', ''),
(23, 'Tejas Dhanuskar', 'nagpur', 8596748596, 'Electrician', '2001-08-30', 'tejas', 'Tejas@123', 'What is Your Pet Name?', 'Dog', '6 months', 'Yes', NULL),
(24, 'Sameer Ghagre', 'katol', 7485963214, 'Electrician', '1995-09-20', 'sam', 'Sameer@123', 'What is Your Pet Name?', 'Dog', '5 months', 'Yes', NULL),
(26, '', '', 0, 'Construction', '0000-00-00', '', '', 'What is Your Pet Name?', '', '', 'Yes', NULL),
(27, 'John Roy', 'Mumbai', 1234567890, 'Plumbing', '1999-01-05', 'JOHN', 'John@123', 'Who is Your Favourite Person?', 'shivaa', '6 years', 'No', '2023-08-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employer_reg`
--
ALTER TABLE `employer_reg`
  ADD PRIMARY KEY (`EmployerId`);

--
-- Indexes for table `jobseeker_reg`
--
ALTER TABLE `jobseeker_reg`
  ADD PRIMARY KEY (`JobSeekId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employer_reg`
--
ALTER TABLE `employer_reg`
  MODIFY `EmployerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jobseeker_reg`
--
ALTER TABLE `jobseeker_reg`
  MODIFY `JobSeekId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
