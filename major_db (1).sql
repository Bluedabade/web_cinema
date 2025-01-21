-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2025 at 07:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `major_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_admin`
--

CREATE TABLE `m_admin` (
  `a_id` int(255) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_user` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `m_admin`
--

INSERT INTO `m_admin` (`a_id`, `a_name`, `a_user`, `a_password`) VALUES
(1, 'admin', 'admin', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `m_movie`
--

CREATE TABLE `m_movie` (
  `movie_id` int(255) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `movie_type` varchar(255) NOT NULL,
  `movie_img` varchar(255) NOT NULL,
  `movie_date` date NOT NULL,
  `movie_start_time` time NOT NULL,
  `movie_end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `m_movie`
--

INSERT INTO `m_movie` (`movie_id`, `movie_name`, `movie_type`, `movie_img`, `movie_date`, `movie_start_time`, `movie_end_time`) VALUES
(5, 'ก้องกาย', '2', '1731486547.jpg', '2024-12-04', '16:00:00', '17:28:00'),
(6, 'กาย', '2', '866715357.png', '2024-12-25', '21:56:00', '20:55:00'),
(7, 'หนังควายๆ', '2', '1137890919.png', '2024-11-27', '22:51:00', '23:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `m_seat`
--

CREATE TABLE `m_seat` (
  `seat_id` int(255) NOT NULL,
  `seat_no` varchar(255) NOT NULL,
  `seat_m_id` int(255) NOT NULL,
  `seat_date_id` date NOT NULL,
  `seat_time_id` time NOT NULL,
  `seat_user_id` int(255) NOT NULL DEFAULT 0,
  `price` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `m_seat`
--

INSERT INTO `m_seat` (`seat_id`, `seat_no`, `seat_m_id`, `seat_date_id`, `seat_time_id`, `seat_user_id`, `price`) VALUES
(225, 'a1', 5, '2024-12-04', '09:48:15', 0, 500),
(226, 'a2', 5, '2024-12-04', '09:48:15', 2, 200),
(227, 'a3', 5, '2024-12-04', '09:48:15', 0, 300),
(228, 'a4', 5, '2024-12-04', '09:48:15', 0, 0),
(229, 'b1', 5, '2024-12-04', '09:48:15', 0, 0),
(230, 'b2', 5, '2024-12-04', '09:48:15', 2, 0),
(231, 'b3', 5, '2024-12-04', '09:48:15', 0, 0),
(232, 'b4', 5, '2024-12-04', '09:48:15', 0, 0),
(233, 'a1', 6, '2024-12-04', '09:50:07', 0, 500),
(234, 'a2', 6, '2024-12-04', '09:50:07', 0, 200),
(235, 'a3', 6, '2024-12-04', '09:50:07', 0, 0),
(236, 'a4', 6, '2024-12-04', '09:50:07', 0, 0),
(237, 'b1', 6, '2024-12-04', '09:50:07', 0, 0),
(238, 'b2', 6, '2024-12-04', '09:50:07', 0, 0),
(239, 'b3', 6, '2024-12-04', '09:50:07', 0, 0),
(240, 'b4', 6, '2024-12-04', '09:50:07', 0, 0),
(241, 'a1', 7, '2024-12-08', '14:50:50', 0, 500),
(242, 'a2', 7, '2024-12-08', '14:50:50', 0, 200),
(243, 'a3', 7, '2024-12-08', '14:50:50', 0, 0),
(244, 'a4', 7, '2024-12-08', '14:50:50', 0, 0),
(245, 'b1', 7, '2024-12-08', '14:50:50', 0, 0),
(246, 'b2', 7, '2024-12-08', '14:50:50', 0, 0),
(247, 'b3', 7, '2024-12-08', '14:50:50', 0, 0),
(248, 'b4', 7, '2024-12-08', '14:50:50', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_tricket`
--

CREATE TABLE `m_tricket` (
  `ticket_id` int(255) NOT NULL,
  `ticket_seat_no` varchar(255) NOT NULL,
  `ticket_time_start` time NOT NULL,
  `ticket_time_end` time NOT NULL,
  `ticket_movie_name` varchar(255) NOT NULL,
  `ticket_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `m_tricket`
--

INSERT INTO `m_tricket` (`ticket_id`, `ticket_seat_no`, `ticket_time_start`, `ticket_time_end`, `ticket_movie_name`, `ticket_user`) VALUES
(1, 'asd', '00:18:32', '28:10:33', 'asd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_type`
--

CREATE TABLE `m_type` (
  `type_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `m_type`
--

INSERT INTO `m_type` (`type_id`, `name`) VALUES
(1, 'ฟหก'),
(2, 'สยองขวัญ'),
(3, 'ฟหกฟหกฟหก'),
(4, 'zzcdzxc'),
(5, 'sdasd');

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `u_id` int(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_birth` date NOT NULL,
  `u_permis` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`u_id`, `u_name`, `u_email`, `u_password`, `u_birth`, `u_permis`) VALUES
(1, 'sdasd', 'asdad@g', 'asdasd', '2024-12-27', 0),
(2, 'kong', 'user@gmail.com', 'qwerty', '2024-12-04', 0),
(3, 'asd', 'aasd@g', 'asdasd', '2024-12-18', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_admin`
--
ALTER TABLE `m_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `m_movie`
--
ALTER TABLE `m_movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `m_seat`
--
ALTER TABLE `m_seat`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `m_tricket`
--
ALTER TABLE `m_tricket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `m_type`
--
ALTER TABLE `m_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_admin`
--
ALTER TABLE `m_admin`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_movie`
--
ALTER TABLE `m_movie`
  MODIFY `movie_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `m_seat`
--
ALTER TABLE `m_seat`
  MODIFY `seat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `m_tricket`
--
ALTER TABLE `m_tricket`
  MODIFY `ticket_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_type`
--
ALTER TABLE `m_type`
  MODIFY `type_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `u_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
