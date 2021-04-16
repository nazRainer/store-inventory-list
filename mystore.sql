-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 04:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `incomingtable`
--

CREATE TABLE `incomingtable` (
  `id` varchar(300) NOT NULL,
  `item_name` varchar(300) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_price` double DEFAULT NULL,
  `item_date` varchar(100) DEFAULT NULL,
  `invoice_num` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `incomingtable`
--

INSERT INTO `incomingtable` (`id`, `item_name`, `quantity`, `unit_price`, `item_date`, `invoice_num`) VALUES
('001 ', 'Hole Punch', 25, 6.7, '12 Dec 2020 ', '10001'),
('002', '2B Pencil ', 20, 1.2, '12 Dec 2020', '10001'),
('003 ', 'Rubber', 11, 0.8, '14 Dec 2020', '10002'),
('004', 'Pencil Sharpener ', 16, 1.2, '15 Dec 2020 ', '10003'),
('005', 'Ink Eraser ', 12, 3.8, '16 Dec 2020 ', '10004'),
('006 ', 'Glue Stick ', 5, 2.9, '20 Dec 2020', '10005'),
('007', 'Scissors', 7, 2.5, '20 Dec 2020', '10005'),
('008', 'A4 Ring Binder ', 12, 5.5, '20 Dec 2020', '10005'),
('009', 'Earphones', 6, 12, '23 Dec 2020', '10006'),
('010', 'Memory Stick ', 18, 25, '27 Dec 2020 ', '10007'),
('11', 'Faris Nazrin', 420, 69, '10 Feb 2020', '195845'),
('12', 'Boii', 64, 456, '14 Feb 2020', '16645');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `incomingtable`
--
ALTER TABLE `incomingtable`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
