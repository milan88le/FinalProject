-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 01:37 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelagency`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name_surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ph_num` varchar(255) NOT NULL,
  `postcode` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name_surname`, `email`, `ph_num`, `postcode`, `comment`) VALUES
(1, 'milan', 'milan@gmail.com', '0638821448', 16000, 'komentar');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `viza` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `state`, `city`, `viza`) VALUES
(1, 'Austria', 'Vienna', 'No'),
(2, 'USA', 'New York', 'Yes'),
(3, 'France', 'Paris', 'No'),
(4, 'Maldives', 'Male', 'Yes'),
(5, 'Germany', 'Berlin', 'No'),
(6, 'Turkey', 'Istanbul', 'No'),
(7, 'Spain', 'Barcelona', 'No'),
(8, 'Japan', 'Tokyo', 'Yes'),
(9, 'China', 'Hong Kong', 'Yes'),
(10, 'Italy', 'Rome', 'No'),
(11, 'Grecce', 'Athens', 'No'),
(12, 'USA', 'Miami', 'Yes'),
(13, 'Brasil', 'Rio de Janeiro', 'Yes'),
(14, 'USA', 'San Francisco', 'Yes'),
(15, 'USA', 'Los Angeles', 'Yes'),
(16, 'Indonesia', 'Bali', 'Yes'),
(17, 'Portugal', 'Lisbon', 'No'),
(18, 'China', 'Beijing', 'Yes'),
(19, 'Spain', 'Madrid', 'No'),
(20, 'Italy', 'Milano', 'No'),
(21, 'Holland', 'Amsterdam', 'No'),
(22, 'UAE', 'Dubai', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `id` int(11) NOT NULL,
  `name_surname` varchar(50) NOT NULL,
  `passport` int(11) NOT NULL,
  `travel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`id`, `name_surname`, `passport`, `travel`) VALUES
(1, 'James N', 3326, 3),
(2, 'Mary J', 452, 7),
(3, 'John S', 17890, 10),
(4, 'Michael N', 23365, 6),
(5, 'David B', 435, 16),
(6, 'Thomas M', 9887154, 14),
(7, 'Kevin V', 332678, 2),
(8, 'Lisa N', 69, 1),
(9, 'Sarah C', 2227, 8),
(10, 'Ana I', 666, 11),
(33, 'Milan Stojanovic', 789, 22);

-- --------------------------------------------------------

--
-- Table structure for table `travels`
--

CREATE TABLE `travels` (
  `id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `destination` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travels`
--

INSERT INTO `travels` (`id`, `start_date`, `end_date`, `destination`, `price`) VALUES
(5, '2022-12-29', '2023-01-02', '1', 78),
(6, '2022-09-27', '2022-09-30', '10', 86),
(7, '2022-08-05', '2022-08-10', '3', 90),
(8, '2022-12-29', '2023-01-02', '5', 120),
(9, '2022-12-29', '2023-01-02', '6', 110),
(10, '2022-12-29', '2023-01-02', '11', 95),
(11, '2022-12-29', '2023-01-02', '7', 140),
(12, '2022-08-05', '2022-08-10', '8', 350),
(13, '2022-08-05', '2022-08-10', '9', 400),
(14, '2022-08-05', '2022-08-10', '18', 340),
(15, '2022-09-27', '2022-09-30', '20', 250),
(16, '2022-09-27', '2022-09-30', '19', 190),
(17, '2022-05-11', '2022-05-17', '15', 1099),
(18, '2022-05-11', '2022-05-17', '14', 1250),
(19, '2022-05-11', '2022-05-17', '16', 1110),
(20, '2022-05-11', '2022-05-17', '2', 1300),
(21, '2022-05-11', '2022-05-17', '12', 1000),
(22, '2022-10-11', '2022-10-21', '22', 999),
(23, '2022-05-11', '2022-05-17', '4', 1500),
(24, '2022-09-27', '2022-09-30', '17', 500),
(25, '2022-07-25', '2022-08-05', '13', 650),
(26, '2022-02-05', '2022-02-11', '21', 250);

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`name`, `password`) VALUES
('admin', '1a1dc91c907325c69271ddf0c944bc72'),
('korisnik', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travels`
--
ALTER TABLE `travels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `travels`
--
ALTER TABLE `travels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
