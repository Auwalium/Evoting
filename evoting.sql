-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 03:57 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `beststaff`
--

CREATE TABLE `beststaff` (
  `id` int(11) NOT NULL,
  `staff_id` int(10) NOT NULL,
  `month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beststaff`
--

INSERT INTO `beststaff` (`id`, `staff_id`, `month`) VALUES
(1, 12, 2),
(2, 7, 2),
(3, 1, 2),
(4, 12, 2),
(5, 7, 3),
(6, 1, 1),
(7, 3, 2),
(8, 11, 2),
(9, 14, 2),
(10, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `selected_staff`
--

CREATE TABLE `selected_staff` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selected_staff`
--

INSERT INTO `selected_staff` (`id`, `staff_id`, `month`) VALUES
(1, 5, 0),
(2, 2, 0),
(3, 11, 0),
(4, 2, 0),
(5, 6, 0),
(6, 8, 0),
(7, 4, 0),
(8, 10, 0),
(9, 5, 0),
(10, 7, 0),
(11, 1, 0),
(12, 1, 0),
(13, 5, 0),
(14, 6, 0),
(15, 1, 0),
(16, 7, 2),
(17, 8, 2),
(18, 7, 2),
(19, 12, 2),
(20, 7, 2),
(21, 1, 2),
(22, 5, 2),
(23, 13, 2),
(24, 2, 2),
(25, 2, 2),
(26, 2, 2),
(27, 2, 2),
(28, 13, 2),
(29, 2, 2),
(30, 14, 2),
(31, 3, 2),
(32, 2, 2),
(33, 2, 2),
(34, 5, 2),
(35, 2, 2),
(36, 2, 2),
(37, 3, 2),
(38, 5, 2),
(39, 11, 2),
(40, 2, 2),
(41, 14, 2),
(42, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `sub_unit` varchar(50) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `image` blob NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `first_name`, `last_name`, `department`, `sub_unit`, `rank`, `image`, `username`, `password`, `user_type`) VALUES
(2, 'lala', 'khan', 'Admin', 'maitenance', 'progamm officer', '', 'lala', 'c4ca4238a0b923820dcc509a6f75849b', 'users'),
(3, 'Badaru', 'Saleh', 'jj', 'j', 'j', 0x73746166662f, 'badaru', 'c4ca4238a0b923820dcc509a6f75849b', 'users'),
(4, 'Usman', 'Bako', 'jxj', 'jjcjch', 'jdjxcx', 0x73746166662f, 'usman', 'c4ca4238a0b923820dcc509a6f75849b', 'users'),
(5, 'John', 'Audu', 'jj', 'j', 'j', 0x73746166662f, 'john', 'c4ca4238a0b923820dcc509a6f75849b', 'users'),
(8, 'Cicilia', 'Jatau', 'Admin', 'maitenance', 'jdjxcx', 0x73746166662f484f50452e6a7067, 'cicilia', 'c4ca4238a0b923820dcc509a6f75849b', 'users'),
(9, 'John', 'Terry', 'jxj', 'jjcjch', 'jdjxcx', 0x73746166662f484f504520322e6a7067, 'john', 'c4ca4238a0b923820dcc509a6f75849b', 'users'),
(10, 'Admin', 'admin', 'jdsjdjds', 'jjjsdjds', 'jasjsj', 0x73746166662f484f50452e6a7067, '11111', 'c4ca4238a0b923820dcc509a6f75849b', 'admin'),
(11, 'Emeka', 'Danladi', 'jdjdd', 'ksaksaksa', 'osss', 0x73746166662f484f504520464c5945522034302e676966, '22222', 'c4ca4238a0b923820dcc509a6f75849b', 'users'),
(13, 'Tommy', 'Alao', 'PHARMACY', 'PHARMACY', 'NURSING OFFICER 1', 0x73746166662f57656c636f6d65205363616e2e6a7067, 'tommy', 'c4ca4238a0b923820dcc509a6f75849b', 'users'),
(14, 'Kareem', 'Omo', 'aaa', 'aaa', 'aaa', 0x73746166662f, 'kareem', 'c4ca4238a0b923820dcc509a6f75849b', 'users');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `voter_id` varchar(50) NOT NULL,
  `candidate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `voter_id`, `candidate_id`) VALUES
(1, '13', 2),
(8, '11', 14),
(31, '5', 2),
(33, '8', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beststaff`
--
ALTER TABLE `beststaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selected_staff`
--
ALTER TABLE `selected_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `voter_id` (`voter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beststaff`
--
ALTER TABLE `beststaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `selected_staff`
--
ALTER TABLE `selected_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
