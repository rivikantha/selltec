-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2017 at 04:07 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selltec`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_code` int(11) NOT NULL,
  `account_name` varchar(20) NOT NULL,
  `account_location` varchar(10) NOT NULL,
  `balance_sheet_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_code`, `account_name`, `account_location`, `balance_sheet_code`) VALUES
(1111, 'Land and Buildings', 'Office', 2101),
(1112, 'Office Furniture', 'Office', 2102);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `voucher_no` varchar(10) NOT NULL,
  `payment_date` date NOT NULL,
  `payable_to` varchar(50) NOT NULL,
  `payment_description` varchar(200) NOT NULL,
  `account_code` int(11) NOT NULL,
  `payment_amount` int(11) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_check_no` varchar(10) DEFAULT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`voucher_no`, `payment_date`, `payable_to`, `payment_description`, `account_code`, `payment_amount`, `payment_type`, `payment_check_no`, `project_id`) VALUES
('V0001', '2017-02-15', '', '', 1111, 2000, 1, NULL, 0),
('V0002', '2017-02-15', '', '', 1111, 2000, 0, 'chk001', 60),
('V0003', '2017-02-15', '', 'Payment description for V0003', 1111, 2000, 0, 'chk002', 60),
('V0004', '2017-02-16', 'Mr Bandara', 'V0004 Description', 1112, 2000, 0, 'chk003', 60),
('V0005', '2017-02-19', 'Mr Ranaweera', 'V0005 Description', 1112, 1500, 0, 'chk005', 60);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(30) NOT NULL,
  `project_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_description`) VALUES
(60, 'simentedited', 'dummy description of project 60'),
(61, 'ciment2edited', 'ciment2 description'),
(63, 'ciment3', 'description for ciment3'),
(64, 'ciment4', 'small description for ciment4');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receipt_no` varchar(10) NOT NULL,
  `receipt_date` date NOT NULL,
  `received_from` varchar(50) NOT NULL,
  `receipt_description` varchar(200) NOT NULL,
  `account_code` int(11) NOT NULL,
  `receipt_amount` int(11) NOT NULL,
  `amount_type` int(11) NOT NULL,
  `receipt_check_no` varchar(10) DEFAULT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`receipt_no`, `receipt_date`, `received_from`, `receipt_description`, `account_code`, `receipt_amount`, `amount_type`, `receipt_check_no`, `project_id`) VALUES
('R0001', '2017-02-15', '', '', 1111, 2000, 0, NULL, 60),
('R0002', '2017-02-15', '', 'R0002 Description', 1111, 2000, 0, NULL, 60),
('R0003', '2017-02-16', 'Mr. Kamal', 'R0003 Description', 1112, 1500, 0, NULL, 60);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_role` varchar(10) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_role`, `project_id`) VALUES
(1, 'rivikantha', 'abc123', 'admin', 60),
(2, 'rivikantha2', 'abc123', 'admin', 60),
(3, 'rivikantha4', '1234', 'admin', 61);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_code`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`voucher_no`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receipt_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
