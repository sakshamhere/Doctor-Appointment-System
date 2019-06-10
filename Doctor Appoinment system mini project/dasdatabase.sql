-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 09, 2019 at 11:39 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dasdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_logintable`
--

CREATE TABLE `admin_logintable` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_logintable`
--

INSERT INTO `admin_logintable` (`username`, `password`) VALUES
('saksham', 'doshi');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment_schedule`
--

CREATE TABLE `appoinment_schedule` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `start_time` varchar(50) NOT NULL,
  `end_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment_schedule`
--

INSERT INTO `appoinment_schedule` (`id`, `doctor_name`, `start_time`, `end_time`) VALUES
(1, 'Ayushi Mehta', '13:00', '18:00'),
(2, 'Rudraksh shukla', '14:00', '18:00'),
(3, 'Saksham doshi', '13:00', '17:00');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment_table`
--

CREATE TABLE `appoinment_table` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `doctor_consult` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment_table`
--

INSERT INTO `appoinment_table` (`id`, `fullname`, `mob`, `email`, `date`, `time`, `doctor_consult`) VALUES
(1, 'Saksham doshi', '7999926863', 'sam9111doshi@gmail.com', '2019-04-01', '13:30', 'Ayushi mehta');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_register`
--

CREATE TABLE `doctor_register` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpass` varchar(50) NOT NULL,
  `upload` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_register`
--

INSERT INTO `doctor_register` (`id`, `name`, `mail`, `mob`, `dob`, `address`, `city`, `password`, `confirmpass`, `upload`, `designation`) VALUES
(1, 'Saksham doshi', 'sam9111doshi@gmail.com', '9111204454', '2019-04-03', 'Malharganj52/3', 'Indore', '123', '123', 'uploadsdoctor/portrait_man_2.jpg', 'psycologist'),
(2, 'Rudraksh shukla', 'majime@gmail.com', '7999926863', '2019-04-02', 'Malharganj52/3', 'Indore', '123', '123', 'uploadsdoctor/portrait_man_1.jpg', 'pathologist'),
(3, 'Ayushi Mehta', 'samdoshi9111@gmail.com', '7999926863', '2019-04-12', 'Malharganj52/3', 'Indore', '123', '123', 'uploadsdoctor/portrait_woman_1.jpg', 'Cardiologist');

-- --------------------------------------------------------

--
-- Table structure for table `otp_expiry`
--

CREATE TABLE `otp_expiry` (
  `otp` varchar(50) NOT NULL,
  `is_expired` varchar(50) NOT NULL,
  `create_at` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp_expiry`
--

INSERT INTO `otp_expiry` (`otp`, `is_expired`, `create_at`) VALUES
('835581', 'yes', '2019-04-09 21:46:01.111933'),
('882730', 'yes', '2019-04-09 21:47:02.339396'),
('180663', 'yes', '2019-04-09 21:52:11.032813'),
('627569', 'yes', '2019-04-09 21:56:45.589355'),
('606028', '0', '2019-04-09 22:20:50.474044'),
('781364', '0', '2019-04-09 22:21:02.992804'),
('638828', '0', '2019-04-09 22:21:34.482622'),
('935381', 'yes', '2019-04-09 22:22:58.684081'),
('332816', 'yes', '2019-04-10 02:38:56.218626');

-- --------------------------------------------------------

--
-- Table structure for table `patient_regtable`
--

CREATE TABLE `patient_regtable` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpass` varchar(50) NOT NULL,
  `upload` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_regtable`
--

INSERT INTO `patient_regtable` (`name`, `email`, `mob`, `dob`, `address`, `city`, `password`, `confirmpass`, `upload`) VALUES
('Ayushi Mehta', 'ayushi@gmail.com', '9111204454', '2019-04-02', '52 malharganj 3rd street indore, india', 'Indore', '123', '123', 'uploadspatient/portrait_woman_1.jpg'),
('Rudraksh shukla', 'samdoshi9111@gmail.com', '7999926863', '2019-04-01', 'bhavarkuan 32/4', 'Indore', '123', '123', 'uploadspatient/portrait_man_2.jpg'),
('Saksham doshi', 'sam9111doshi@gmail.com', '7999926863', '2019-04-27', 'Malharganj52/3', 'Indore', '123', '123', 'uploadspatient/IMG_20181214_205723_819.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment_log`
--

CREATE TABLE `payment_log` (
  `name` varchar(50) NOT NULL,
  `day_time` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `payment_by` varchar(50) NOT NULL,
  `doctor_concern` varchar(50) NOT NULL,
  `Amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_schedule`
--

CREATE TABLE `payment_schedule` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `fees` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_schedule`
--

INSERT INTO `payment_schedule` (`id`, `doctor_name`, `fees`) VALUES
(1, 'Ayushi Mehta', 1000),
(2, 'Rudraksh shukla', 1500),
(3, 'Saksham doshi', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `id` int(11) NOT NULL,
  `Doctor_name` varchar(50) NOT NULL,
  `time1` varchar(50) NOT NULL,
  `time2` varchar(50) NOT NULL,
  `time3` varchar(50) NOT NULL,
  `time4` varchar(50) NOT NULL,
  `time5` varchar(50) NOT NULL,
  `time6` varchar(50) NOT NULL,
  `time7` varchar(50) NOT NULL,
  `time8` varchar(50) NOT NULL,
  `time9` varchar(100) NOT NULL,
  `time10` varchar(50) NOT NULL,
  `time11` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_slot`
--

INSERT INTO `time_slot` (`id`, `Doctor_name`, `time1`, `time2`, `time3`, `time4`, `time5`, `time6`, `time7`, `time8`, `time9`, `time10`, `time11`) VALUES
(1, 'Ayushi Mehta', '13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00', '17:30', '18:00'),
(2, 'Rudraksh shukla', '15:15', '16:00', '16:30', '17:00', '17:30', '18:00', '', '', '', '', ''),
(3, 'Saksham doshi', '01:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment_schedule`
--
ALTER TABLE `appoinment_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoinment_table`
--
ALTER TABLE `appoinment_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_register`
--
ALTER TABLE `doctor_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_regtable`
--
ALTER TABLE `patient_regtable`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `payment_schedule`
--
ALTER TABLE `payment_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment_schedule`
--
ALTER TABLE `appoinment_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appoinment_table`
--
ALTER TABLE `appoinment_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor_register`
--
ALTER TABLE `doctor_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_schedule`
--
ALTER TABLE `payment_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `time_slot`
--
ALTER TABLE `time_slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
