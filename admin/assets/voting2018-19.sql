-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 06:53 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting2018-19`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username1` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hash` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username1`, `password`, `email`, `hash`, `avatar`) VALUES
('sample', '$2y$10$b4vRo3Ct4oPJWL85qCaBGOqozc.8880fqoigryp.lDMzoSWatVM8S', 'sample@sample.com', 'd1f255a373a3cef72e03aa9d980c7eca', 'avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `name` varchar(1000) NOT NULL,
  `post` varchar(1000) NOT NULL,
  `house` varchar(1000) NOT NULL,
  `img` varchar(100) NOT NULL,
  `enc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(255) NOT NULL,
  `autimg` text NOT NULL,
  `autname` text NOT NULL,
  `autemail` text NOT NULL,
  `message` text NOT NULL,
  `message_status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `activationcode` varchar(100) NOT NULL,
  `headcouncilacti` int(100) NOT NULL DEFAULT '0',
  `redacti` int(100) NOT NULL DEFAULT '0',
  `greenacti` int(100) NOT NULL DEFAULT '0',
  `yellowacti` int(100) NOT NULL DEFAULT '0',
  `blueacti` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`activationcode`, `headcouncilacti`, `redacti`, `greenacti`, `yellowacti`, `blueacti`) VALUES
('123456', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `grno` varchar(10000) NOT NULL,
  `name` varchar(100) NOT NULL,
  `headc` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usersettings`
--

CREATE TABLE `usersettings` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hc` varchar(100) NOT NULL DEFAULT 'bg-light',
  `bg` varchar(100) NOT NULL DEFAULT 'singin-bg 1.jpg',
  `lc` varchar(100) NOT NULL DEFAULT 'bg-light',
  `sc` varchar(100) NOT NULL DEFAULT 'bg-dark',
  `cb` varchar(100) NOT NULL DEFAULT 'bg-transparent'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `voted`
--

CREATE TABLE `voted` (
  `name1` varchar(1000) NOT NULL,
  `grno` varchar(10000) NOT NULL,
  `dob` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `votedh`
--

CREATE TABLE `votedh` (
  `name1` varchar(1000) NOT NULL,
  `grno` varchar(10000) NOT NULL,
  `dob` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-
-- --------------------------------------------------------

--
-- Table structure for table `votesb`
--

CREATE TABLE `votesb` (
  `srno` int(100) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `grno` varchar(100) NOT NULL,
  `dvcb` varchar(100) NOT NULL,
  `dvcg` varchar(100) NOT NULL,
  `vcb` varchar(100) NOT NULL,
  `vcg` varchar(100) NOT NULL,
  `dcb` varchar(100) NOT NULL,
  `dcg` varchar(100) NOT NULL,
  `cb` varchar(100) NOT NULL,
  `cg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `votesg`
--

CREATE TABLE `votesg` (
  `srno` int(100) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `grno` varchar(100) NOT NULL,
  `dvcb` varchar(100) NOT NULL,
  `dvcg` varchar(100) NOT NULL,
  `vcb` varchar(100) NOT NULL,
  `vcg` varchar(100) NOT NULL,
  `dcb` varchar(100) NOT NULL,
  `dcg` varchar(100) NOT NULL,
  `cb` varchar(100) NOT NULL,
  `cg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `votesh`
--

CREATE TABLE `votesh` (
  `srno` int(100) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `grno` varchar(100) NOT NULL,
  `prcb` varchar(100) NOT NULL,
  `prcg` varchar(100) NOT NULL,
  `ccb` varchar(100) NOT NULL,
  `ccg` varchar(100) NOT NULL,
  `scb` varchar(100) NOT NULL,
  `scg` varchar(100) NOT NULL,
  `dhb` varchar(100) NOT NULL,
  `dhg` varchar(100) NOT NULL,
  `hb` varchar(100) NOT NULL,
  `hg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `votesr`
--

CREATE TABLE `votesr` (
  `srno` int(100) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `grno` varchar(100) NOT NULL,
  `dvcb` varchar(100) NOT NULL,
  `dvcg` varchar(100) NOT NULL,
  `vcb` varchar(100) NOT NULL,
  `vcg` varchar(100) NOT NULL,
  `dcb` varchar(100) NOT NULL,
  `dcg` varchar(100) NOT NULL,
  `cb` varchar(100) NOT NULL,
  `cg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `votesy`
--

CREATE TABLE `votesy` (
  `srno` int(100) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `grno` varchar(100) NOT NULL,
  `dvcb` varchar(100) NOT NULL,
  `dvcg` varchar(100) NOT NULL,
  `vcb` varchar(100) NOT NULL,
  `vcg` varchar(100) NOT NULL,
  `dcb` varchar(100) NOT NULL,
  `dcg` varchar(100) NOT NULL,
  `cb` varchar(100) NOT NULL,
  `cg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`img`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersettings`
--
ALTER TABLE `usersettings`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `votesb`
--
ALTER TABLE `votesb`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `votesg`
--
ALTER TABLE `votesg`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `votesh`
--
ALTER TABLE `votesh`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `votesr`
--
ALTER TABLE `votesr`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `votesy`
--
ALTER TABLE `votesy`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1372;

--
-- AUTO_INCREMENT for table `votesb`
--
ALTER TABLE `votesb`
  MODIFY `srno` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `votesg`
--
ALTER TABLE `votesg`
  MODIFY `srno` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `votesh`
--
ALTER TABLE `votesh`
  MODIFY `srno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=510;

--
-- AUTO_INCREMENT for table `votesr`
--
ALTER TABLE `votesr`
  MODIFY `srno` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `votesy`
--
ALTER TABLE `votesy`
  MODIFY `srno` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
