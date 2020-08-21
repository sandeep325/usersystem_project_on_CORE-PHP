-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 07:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ragistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `description_about_users`
--

CREATE TABLE `description_about_users` (
  `id` int(11) NOT NULL,
  `work` varchar(50) NOT NULL,
  `qalification` varchar(50) NOT NULL,
  `hometown` varchar(50) NOT NULL,
  `userbio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `description_about_users`
--

INSERT INTO `description_about_users` (`id`, `work`, `qalification`, `hometown`, `userbio`) VALUES
(1, 'developer', 'Bachelor In Computer Applications (BCA)', 'Rishikesh (uttrakhand)', 'Once you start a programing,you no longer have a life.'),
(3, '', 'Master In Computer Application', '', ''),
(4, '', 'BA', '', ''),
(12, 'Accountant', 'BA', '', ''),
(15, 'at gym', 'BCA', 'Tehri garwal (uttrakhand)', ''),
(16, 'programmer', 'BE in Computer Science', '', ''),
(17, 'Fashion designer', 'BSC From delhi university', '', 'no caption'),
(26, 'Film Actor', 'b.com', 'karnataka', 'KGF superstar.'),
(27, 'Indian film and former television actress.', 'b.com', 'Bengaluru', ''),
(28, 'Actor', 'BSC from DU ', 'bombay', 'No nneed to any kind of bio he  is all time \r\nMr. handsome. The king of bollyhood'),
(501, 'criketer', 'M.SC', 'mumbai', 'hitman caption');

-- --------------------------------------------------------

--
-- Table structure for table `rag`
--

CREATE TABLE `rag` (
  `id` int(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_no` bigint(11) NOT NULL,
  `country` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rag`
--

INSERT INTO `rag` (`id`, `first_name`, `last_name`, `dob`, `gender`, `email`, `contact_no`, `country`, `password`, `image`, `creation_date`) VALUES
(1, 'sandeep', 'negi', '1998-02-02', 'male', 'sandeep@gmail.com', 7500017404, 'India', 'sandeep@123', 'userprofile/sandeep.jpg', '2020-03-20'),
(3, 'vishal', 'kumar', '2222-11-11', 'male', 'vishal@gmail.com', 9876543211, 'india', 'vishal123', '', '2020-03-21'),
(4, 'Jack', 'Ramee', '2012-08-23', '', 'jack@email.com', 8877554433, 'China', 'jack123', '', '2020-03-22'),
(8, 'vivek ', 'roa', '2009-03-05', '', 'vivek@gmail.com', 9978564312, 'India', 'vivek', '', '2020-03-24'),
(11, 'Shruti', 'Goenka', '1995-02-02', 'female', 'shruti@gmail.com', 9087651234, 'India', 'shruti@123', '', '2020-03-25'),
(12, 'vani', 'juyal', '1996-04-29', 'female', 'vani@email.com', 9012814894, 'America', 'vani123', '', '2020-03-31'),
(13, 'Riya ', 'Mahar', '1997-12-25', 'female', 'riyamahar08@gmail.com', 9078346754, 'India', 'riya123', '', '2020-03-31'),
(15, 'Sandy', 'Sandy', '1998-02-02', 'male', 'sandy@email.com', 8178901212, 'America', 'sandy123', 'userprofile/sandy011.jpg', '2020-04-12'),
(16, 'priya', 'sinha', '2021-09-09', 'female', 'priya@email.com', 9078654321, 'japan', '123', 'userprofile/model1.PNG', '2020-04-12'),
(17, 'Vanshika', 'Pandey', '1999-01-15', 'female', 'vanshi15@gmail.com', 9012765432, 'India', 'vanshi15@gmail.com', 'userprofile/IMG_20200412_173511.jpg', '2020-04-12'),
(26, 'Naveen Kumar', 'Gowda', '1986-01-08', 'male', 'yash006@email.com', 90913434349, 'India', 'yash@123', 'userprofile/yash.jpg', '2020-06-10'),
(27, 'Radhika ', 'Pandit', '1984-03-07', 'female', 'radhika06yash@email.com', 90901998419, 'India', 'radhika123', 'userprofile/rp.jpg', '2020-06-10'),
(28, 'Hrithik ', 'Roshan', '1974-01-10', 'male', 'hrithik47@gmail.com', 90474787202, 'India', 'roshan@123', 'userprofile/HR.jpg', '2020-06-12'),
(501, 'rohit', 'sharma', '1987-04-30', 'male', 'rohit.hitman@gmail.com', 9087654321, 'India', 'hitman', 'userprofile/Rohit_Sharma2016.jpg', '2020-07-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `description_about_users`
--
ALTER TABLE `description_about_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rag`
--
ALTER TABLE `rag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rag`
--
ALTER TABLE `rag`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
