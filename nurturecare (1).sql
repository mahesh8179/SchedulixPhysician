-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2025 at 06:52 AM
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
-- Database: `nurturecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `asignup`
--

CREATE TABLE `asignup` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asignup`
--

INSERT INTO `asignup` (`id`, `name`, `email`, `password`, `contactno`, `gender`) VALUES
(1, 'driti', 'driti002@gmail.com', '123', '9704895390', 'female'),
(2, 'driti', 'driti002@gmail.com', '123', '9704895390', 'female'),
(3, 'driti', 'driti002@gmail.com', '123', '9704895390', 'female'),
(4, 'devi', 'devi@gmail.com', '12', '9704895390', 'female'),
(5, 'driti', 'driti002@gmail.com', '123', '9704895390', 'female'),
(6, 'meena', 'meena@gmail.com', '123', '0987654321', 'female'),
(7, 'admin', 'admin12@gmail.com', '123', '7075431302', 'male'),
(8, 'admin', 'admin@gmail.com', '123', '9392413033', 'make');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(200) NOT NULL,
  `image` varchar(150) NOT NULL,
  `categoryname` varchar(150) NOT NULL,
  `informations` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `image`, `categoryname`, `informations`) VALUES
(1, 'medication care.jpg', 'Medication Care', 'patient all time Medicine Control care we will provide un harm full medicines and on time taking the medication '),
(2, 'Home Health Care Services.jpg', 'Home Health Care Services', 'Being with your Loved Ones all the time to take Care of them is Practically not possible for most of the people.'),
(4, 'team-male-female-nurses-talking-with-old-retired-man-bright-cozy-nursing-home.jpg', 'Preventive Health Care', 'Preventive health encompasses a set of health services meant to screen and possibly identify health issues before symptoms develop. Preventive healthc');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(100) NOT NULL,
  `Patient` varchar(50) NOT NULL,
  `Selected` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `types` varchar(50) NOT NULL,
  `issue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `Patient`, `Selected`, `Email`, `Contact`, `address`, `types`, `issue`) VALUES
(11, 'Pinky', 'Preventive Health Care', 'tlohitha225@gmail.com', '918978431256', 'thandalam,chennai', 'late response', 'they are responding but its out of time'),
(14, 'driti', 'Palliative Health Care', 'driti002@gmail.com', '12435002323', 'Ranipeta,CHENNAI', 'Improper Care', 'i didnt get good care from the staff'),
(15, 'arshi', 'Home Visit Physiotherapy', 'arshi123@gmai.com', '08978431256', 'chrompeta chennai', 'treatment', 'staff treatment is not good');

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `specification` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `idno` varchar(50) NOT NULL,
  `fees` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`id`, `name`, `specification`, `email`, `password`, `contact`, `experience`, `address`, `idno`, `fees`) VALUES
(3, 'Meenakshi', 'Medication care', 'meenakshi@gmail.com', '123', '01234509876', '10 years', 'Chrompeta,Chennai', 'NM001', 700),
(7, 'Shreya', 'Preventive Health Care', 'Shreya002@gmail.com', '321', '9348654267', '5years', 'Thandalam, Chennai', 'NSh031', 500),
(9, 'neha', 'Home Visit Physiotherapy', 'neha123@gmail.com', '321', '08978431256', '2years', 'Chembalabakam,Chennai', 'NNe0042', 800),
(10, 'Lasya', 'Post hospitalisation and Palliative care', 'Lasya005@gmail.com', '123', '12435002323', '  4 YEARS', 'THAMBARAM. BUS STAND’CHENNAI', 'NLa004', 1200),
(11, 'Meena', 'Medical Equipment and Supplies', 'Meena005@gmail.com', '321', '8234567953', '3 years', 'chennai,ranipeta', 'NMe0046', 1000),
(12, 'Arshi', 'Diagnostics', 'Arshi006@gmail.com', '123', '09345294210', '2 years', 'ranipetta,Chennai', 'NAr0054', 900),
(17, 'meenaakshi', 'Post hospitalisation and Palliative care', 'meena@gmail.com', '123', '0987654321', '2yreas', 'Chennai,ranipeta', 'NMK005', 1200),
(20, 'harini', 'Home Health Care Services', 'harini006@gmail.com', '123', '08978431256', '5years', 'THAMBARAM. BUS STAND’CHENNAI', 'NH0042', 3000),
(21, 'lohit', 'nail', 'lohit@gmail.com', '123', 'sdfg', '2', 'sdfgh', '233', 2300);

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `specification` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idno` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `issue` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`id`, `name`, `specification`, `contact`, `email`, `idno`, `address`, `issue`) VALUES
(2, ' LASYA', 'Preventive Health Care', '9654327634', 'LASYA4001@GMAIL.COM', 'ST2202', 'THAMBARAM.BUSSTAND’CHENNAI', 'they are not communicating well'),
(3, 'Shreya', 'post Hospitalization and Palliative Care', '9287346501', 'Shreya032@gmail.com', 'NSR001', 'Thandalam, Chennai', 'i have distance problem');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `product_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_id`, `amount`, `product_id`) VALUES
(4, '1', 'pay_N1RO85SO6p4NVT', '4000', '1'),
(5, '1', 'pay_NA8To7XJUWNRtm', '1000', '1'),
(6, '1', 'pay_NC60TeMvkfswZt', '2000', '1'),
(7, '1', 'pay_NDgGi3uiX33x56', '2000', '1'),
(8, '1', 'pay_NWIgDuD1S3SWFv', '3000', '1'),
(9, '1', 'pay_NiYNPfpejxpyKF', '3000', '1'),
(10, '1', 'pay_PN68HZVfcHSh9y', '700', '1');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Treatment` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Requirement` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `Name`, `Treatment`, `Contact`, `Email`, `Address`, `Requirement`) VALUES
(1, 'meena', 'fever', '0987654321', 'meena@gmail.com', 'chennai', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `doctor_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `date`, `time`, `doctor_id`, `user_id`) VALUES
(11, '2023-12-07', '15:22:00', 'DR004', '7');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `contactno`, `gender`) VALUES
(11, 'neha', 'neha002@gmail.com', '543', '9704895390', 'female'),
(14, 'driti', 'driti002@gmail.com', '123', '1234567809', ''),
(15, 'neha', 'neha002@gmail.com', '123', '9704895390', ''),
(16, 'kirti', 'kirti005@gmail.com', '123', '9704895390', ''),
(17, 'driti', 'driti002@gmail.com', '123', '9704895390', 'female'),
(19, 'maina', 'maina@gmail.com', '12', '1234567890', 'female'),
(20, 'kirti', 'kirti005@gmail.com', '123', '8966443234', 'female'),
(21, 'arshi', 'arshi123@gmai.com', '123', '9765432567', 'female'),
(22, 'shreyali', 'Shreya032@gmail.com', '123', '8966443234', 'female'),
(23, 'kuruva', 'kuruva@gmail.com', '123', '9392413033', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `treatmentname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `idno` varchar(50) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `doctorid` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `fees` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `treatmentname`, `email`, `contact`, `address`, `gender`, `idno`, `date`, `time`, `doctorid`, `status`, `userid`, `fees`) VALUES
(29, 'neha', 'Post hospitalisation and Palliative care', 'neha002@gmail.com', '08978431256', 'THAMBARAM. BUS STAND’CHENNAI', 'female', 'UN004', '2024-02-03', '17:16', 'NMK005', 'Accepted', '17', ''),
(33, 'neha', 'Home Health Care Services', 'neha002@gmail.com', '08978431256', 'THAMBARAM. BUS STAND’CHENNAI', 'female', 'UN004', '2024-02-03', '11:33', 'NNa037', 'Accepted', '15', '3000'),
(34, 'neha', 'Home Health Care Services', 'neha002@gmail.com', '08978431256', 'THAMBARAM. BUS STAND’CHENNAI', 'female', 'UN004', '2024-02-03', '11:33', 'NNa037', 'Accepted', '19', '3000'),
(35, 'harini', 'Home Health Care Services', 'harini006@gmail.com', '08978431256', 'PILER ,ANDHRAPRADESH.india', 'female', 'UH002', '2024-03-05', '14:59', 'NNa037', '', '4', '3000'),
(36, 'Meena', 'Preventive Health Care', 'meena@gmail.com', '1234567', 'chennai', 'female', 'ME001', '2024-03-28', '13:02', 'NSh031', '', '20', '500'),
(37, 'Meena', 'Medication care', 'meena@gmail.com', '1234567', 'chennai....', 'female', 'ME001', '2024-03-21', '13:19', 'NM001', 'Accepted', '3', '700'),
(38, 'shreyal', 'Medication care', 'Shreya032@gmail.com', '09348654267', 'Thandalam, Chennai', 'female', 'USE001', '2024-03-14', '08:00', 'NM001', '', '22', '700'),
(39, 'kanu', 'Medication care', 'kanu@gmail.com', '9876543212', 'poonamalle', 'female', '12', '2024-11-19', '13:51', 'NM001', 'Accepted', '23', '700'),
(40, 'kanu', 'Medication care', 'kanu@gmail.com', '9876543212', 'poonamalle', 'female', '12', '2024-11-19', '13:51', 'NM001', 'Rejected', '23', '700'),
(41, 'vijay', 'Medication care', 'vijay@gmail.com', '9876543211', 'papanchatram', 'male', '222', '2003-03-09', '10:04', 'NM001', '', '23', '700');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asignup`
--
ALTER TABLE `asignup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asignup`
--
ALTER TABLE `asignup`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
