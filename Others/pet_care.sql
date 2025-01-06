-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2025 at 05:36 PM
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
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` varchar(4) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` varchar(4) NOT NULL,
  `booking_service` varchar(2500) NOT NULL,
  `booking_datetime` datetime NOT NULL,
  `booking_venue` varchar(2500) NOT NULL,
  `customer_id` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_service`, `booking_datetime`, `booking_venue`, `customer_id`) VALUES
('B001', 'Pet Grooming', '2025-01-06 17:15:07', 'Room 1', 'C001');

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

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_username`, `customer_password`, `customer_name`, `customer_contactnumber`, `customer_email`, `customer_homeaddress`, `customer_id`) VALUES
('Kentc', '@kentcwk26', 'Chiu Wai Kin', 199830889, 'kentchiu03@gmail.com', 'Jalan Teknologi 5, Taman Teknologi Malaysia, 57000 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', 'C001');

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
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` varchar(4) NOT NULL,
  `medicine_name` text NOT NULL,
  `medicine_stock` int(11) NOT NULL,
  `medicine_desc` text NOT NULL,
  `medicine_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `medicine_name`, `medicine_stock`, `medicine_desc`, `medicine_price`) VALUES
('M001', 'Antibiotic Tablets', 50, 'A broad-spectrum antibiotic for treating infections in pets', 0);

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
  `customer_id` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`pet_id`, `pet_name`, `pet_age`, `pet_type`, `pet_gender`, `pet_allergy`, `customer_id`) VALUES
('P001', 'Issac', 1, 'Dog', 'Male', 'None', 'C001');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` varchar(4) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `product_quantity`, `product_price`) VALUES
('P001', 'Flea and Tick Collar', 'A long-lasting flea and tick prevention collar suitable for dogs and cats', 49, 100);

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
  `customer_id` varchar(4) NOT NULL,
  `product_id` varchar(4) NOT NULL,
  `medicine_id` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `purchase_item`, `purchase_quantity`, `purchase_total`, `purchase_date`, `purchase_receipt`, `customer_id`, `product_id`, `medicine_id`) VALUES
('PC01', 'Antibiotic Tablets', 1, 50, '2025-01-06', '', 'C001', 'P001', '');

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

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_username`, `staff_password`, `staff_contactnumber`, `staff_desc`) VALUES
('Kent', '@kentcwk26', 199830889, '');

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
