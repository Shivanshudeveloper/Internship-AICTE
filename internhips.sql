-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 10:58 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internal`
--

-- --------------------------------------------------------

--
-- Table structure for table `internhips`
--

CREATE TABLE `internhips` (
  `id` int(11) NOT NULL,
  `uid` text NOT NULL,
  `company_id` text NOT NULL,
  `type` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `locations` text NOT NULL,
  `numberInternRequiried` text NOT NULL,
  `keywords` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `country` text NOT NULL,
  `company` text NOT NULL,
  `stipend` text NOT NULL,
  `start` text NOT NULL,
  `end` text NOT NULL,
  `contract` text NOT NULL,
  `whoCanApply` text NOT NULL,
  `domain` text NOT NULL,
  `eligibility` text NOT NULL,
  `perks` text NOT NULL,
  `certificaion` text NOT NULL,
  `hours` text NOT NULL,
  `languages` text NOT NULL,
  `interview` text NOT NULL,
  `attributes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internhips`
--

INSERT INTO `internhips` (`id`, `uid`, `company_id`, `type`, `title`, `description`, `locations`, `numberInternRequiried`, `keywords`, `email`, `phone`, `country`, `company`, `stipend`, `start`, `end`, `contract`, `whoCanApply`, `domain`, `eligibility`, `perks`, `certificaion`, `hours`, `languages`, `interview`, `attributes`) VALUES
(6, 'INTERNSHIP_15843512775e6f482d59c76', '12345678', 'Part Time', 'das', 'das', 'dasd', '22', 'dasdas', 'developer.shivanshu@gmail.com', '9219559823', 'dasd', 'dasd', '22222', 'dasd', 'dasd', '', 'asdas', 'dsa', 'dasdasd', 'asdasd', 'asd', 'dsadas', '2', 'Cummunication Skills', 'Communication Skills (Verbal & Writing),Presentation Skills,Listning Skills,Management Skills,Entrepreneurial Skills,Planning Skills');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `internhips`
--
ALTER TABLE `internhips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `internhips`
--
ALTER TABLE `internhips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
