-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 10:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(4) NOT NULL,
  `admin_firstname` varchar(255) NOT NULL,
  `admin_lastname` varchar(255) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointmment`
--

CREATE TABLE `appointmment` (
  `appointment_id` varchar(4) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_username` varchar(50) NOT NULL,
  `customer_password` varchar(50) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_contactnumber` int(11) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_homeaddress` varchar(255) NOT NULL,
  `customer_id` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` varchar(4) NOT NULL,
  `customer_id` varchar(4) NOT NULL,
  `product_id` varchar(4) NOT NULL,
  `appointment_id` varchar(4) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `pet_id` varchar(6) NOT NULL,
  `pet_name` varchar(50) NOT NULL,
  `pet_age` int(11) NOT NULL,
  `pet_type` varchar(50) NOT NULL,
  `pet_gender` varchar(6) NOT NULL,
  `pet_allergy` varchar(50) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` varchar(4) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` varchar(4) NOT NULL,
  `purchase_item` varchar(255) NOT NULL,
  `purchase_quantity` int(11) NOT NULL,
  `purchase_total` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `purchase_receipt` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_username` varchar(50) NOT NULL,
  `staff_password` varchar(50) NOT NULL,
  `staff_contactnumber` int(11) NOT NULL,
  `staff_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vet`
--

CREATE TABLE `vet` (
  `vet_username` varchar(50) NOT NULL,
  `vet_password` varchar(50) NOT NULL,
  `vet_name` varchar(255) NOT NULL,
  `vet_contactnumber` int(11) NOT NULL,
  `vet_email` varchar(50) NOT NULL,
  `vet_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointmment`
--
ALTER TABLE `appointmment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_username`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
