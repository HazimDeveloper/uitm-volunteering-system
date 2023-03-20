-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 05, 2023 at 09:28 AM
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
-- Database: `mysvs.uitm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact_user`
--

CREATE TABLE `contact_user` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_user`
--

INSERT INTO `contact_user` (`id`, `id_user`, `name`, `email`, `course`, `message`) VALUES
(1, '5', 'misha', 'misha@gmail.com', 'CS110', 'HELLO'),
(4, '2', 'misha', 'misha@gmail.com', 'CS110', 'HELLO'),
(5, '2', 'mishabieber', 'mica@gmail.com', 'CS110', 'NEED HELP'),
(6, '8', 'nabil', 'nabil@gmail.com', 'CS110', 'haii'),
(7, '2', 'isha', 'isha@gmail.com', 'CS110', 'HI');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `id_officer` varchar(255) NOT NULL,
  `img_event` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time_start` varchar(255) NOT NULL,
  `time_end` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `id_officer`, `img_event`, `date`, `time_start`, `time_end`, `place`, `title`, `description`, `status`) VALUES
(3, '1', 'flood1.jpg', '2023-01-10', '23:18', '23:18', 'Terengganu', 'Flood in Terengganu', 'The flood situation in Terengganu is reported to worsen and residents in the risk and affected areas have been advised not to panic, but to be on alert and abide by instructions and warnings issued by the authorities.', 'available'),
(4, '1', 'landslide2.jpg', '2023-01-09', '21:38', '21:39', 'Batang Kali', 'Landslide in Batang Kali', 'The landslide incident at the campsite, which occurred at 2.46am on Dec 16, claimed 31 lives, with 12 of them being children and a one-year-old baby boy. A total of 61 victims were reported to have survived the tragedy. ', 'available'),
(7, '1', 'turtle1.jpg', '2023-02-02', '08:00', '10:00', 'Pulau Redang', 'Save the turtle', 'save', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `newevent_user`
--

CREATE TABLE `newevent_user` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `describe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newevent_user`
--

INSERT INTO `newevent_user` (`id`, `id_user`, `name`, `email`, `event`, `describe`) VALUES
(1, '2', 'isha', 'isha@gmail.com', 'flood in terengganu', ''),
(2, '2', 'isha', 'isha@gmail.com', 'flood in terengganu', ''),
(3, '2', 'isha', 'isha@gmail.com', 'flood in terengganu', ''),
(4, '2', 'isha', 'isha@gmail.com', 'flood in terengganu', ''),
(5, '2', 'isha', 'isha@gmail.com', 'flood in terengganu', 'hi'),
(6, '2', 'isha', 'isha@gmail.com', 'flood in terengganu', 'hi'),
(7, '2', 'isha', 'isha@gmail.com', 'flood in terengganu', 'hi'),
(8, '2', 'isha', 'isha@gmail.com', 'flood in terengganu', 'hi'),
(9, '2', 'isha', 'isha@gmail.com', 'turtle', 'in ganu');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `id_officer` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`id_officer`, `username`, `email`, `pass`) VALUES
(1, 'misha', 'officer@gmail.com', 'officer');

-- --------------------------------------------------------

--
-- Table structure for table `user_event`
--

CREATE TABLE `user_event` (
  `id` int(11) NOT NULL,
  `id_event` varchar(255) NOT NULL,
  `id_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_event`
--

INSERT INTO `user_event` (`id`, `id_event`, `id_user`) VALUES
(1, '3', '1'),
(2, '3', '8'),
(3, '4', '8'),
(4, '4', '1'),
(5, '3', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `sID` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `address`, `phone`, `sID`, `campus`, `course_name`, `course_code`, `semester`, `pass`, `cpass`, `user_type`) VALUES
(1, 'misha', 'misha@gmail.com', '3, jalan jenaris d', '0182069623', '2020490848', 'UITM Kampus Kuala Terengganu', 'Computer Science', 'CS110', '5', '123456', '123456', 'user'),
(2, 'isha', 'isha@gmail.com', '3, jalan jenaris d', '0116729082', '202002339', 'UITM Kampus Kuala Terengganu', 'Computer Science', 'cs110', '5', '12345', '12345', 'user'),
(8, 'nabil', 'nabil@gmail.com', '1, jalan villa damai', '0116729082', '2020893383', 'UITM Kampus Kuala Terengganu', 'Computer Science', 'CS110', '4', '000000', '000000', 'user'),
(9, 'nad', 'nad@gmail.com', '3, jalan jenaris d', '0190202833', '2020022183', 'UITM Kampus Kuala Terengganu', 'Computer Science', 'CS110', '3', 'nadcomel', 'nadcomel', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `contact_user`
--
ALTER TABLE `contact_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `newevent_user`
--
ALTER TABLE `newevent_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`id_officer`);

--
-- Indexes for table `user_event`
--
ALTER TABLE `user_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_user`
--
ALTER TABLE `contact_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `newevent_user`
--
ALTER TABLE `newevent_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `id_officer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_event`
--
ALTER TABLE `user_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
