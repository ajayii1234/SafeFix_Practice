-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 04:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safefix`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_fullname` varchar(100) NOT NULL,
  `admin_email` varchar(100) DEFAULT NULL,
  `admin_password` varchar(200) DEFAULT NULL,
  `admin_created` varchar(100) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_fullname`, `admin_email`, `admin_password`, `admin_created`) VALUES
(1, 'Ajayi Femi', 'ajayi@gmail.com', '$2y$10$rEoP7XYQRyNIjkLFRXgM2eHsZpqNXPX8Pa0JgVncp5Tiw7RgruzEy', '2023-06-17 05:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_firstName` varchar(100) DEFAULT NULL,
  `cust_lastName` varchar(100) DEFAULT NULL,
  `cust_userName` varchar(50) DEFAULT NULL,
  `cust_email` varchar(100) DEFAULT NULL,
  `cust_phoneNumber` varchar(50) DEFAULT NULL,
  `cust_gender` enum('male','female') DEFAULT NULL,
  `cust_role` enum('customer','repairer') NOT NULL,
  `cust_address` varchar(200) DEFAULT NULL,
  `cust_password` varchar(200) DEFAULT NULL,
  `cust_confirmPassword` varchar(200) DEFAULT NULL,
  `cust_image` varchar(200) NOT NULL,
  `cust_state` varchar(50) DEFAULT NULL,
  `cust_localGovt` varchar(255) DEFAULT NULL,
  `cust_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_firstName`, `cust_lastName`, `cust_userName`, `cust_email`, `cust_phoneNumber`, `cust_gender`, `cust_role`, `cust_address`, `cust_password`, `cust_confirmPassword`, `cust_image`, `cust_state`, `cust_localGovt`, `cust_created`) VALUES
(15, 'Ola', 'Ajayi', 'c@gmail.com', 'c@gmail.com', '876', 'male', 'customer', 'ogudu', '$2y$10$JIgf0ha4N0jYjRmRJMbtEOnYT6PSaHcPNoPHRshxqagXnWiciaKYe', '$2y$10$m7o2tMFZR88FfLhkwELgeuuFMaj.z0HBECw8ZyMofY8RqeRBVn/z.', '', 'Open this select menu', NULL, '2023-06-21 10:40:41'),
(16, 'Kunle', 'Ajayi', 'r@gmail.com', 'r@gmail.com', '89', 'male', 'customer', 'Lekki', '$2y$10$EXFMzC670rAxdK59uLGb0eWK3nSYatltxhlwf9pTnTq1xpEdG1N3G', '$2y$10$G9Wbvc5IhlXyEym5K/hyOe66bI/I/TgwnSKmYV74b0RyyGDM3Ecdm', '', 'Ondo', NULL, '2023-06-21 10:41:31'),
(17, 'Dennis', 'Shola', 'c@gmail.com', 'a@gmail.com', '6766', 'male', 'repairer', 'hjh', '$2y$10$iJvGWksyIKKgerkCYwz1EeOK6uy4KCCUnd/f1r2.vPyi3l36BKecW', '$2y$10$MK8nGMNXy/CdJ0AGKs.F/.O1x1.0AzRF8UUmYllUtdmwm9.d5J1lO', '', 'Ondo', NULL, '2023-06-21 17:00:35'),
(18, 'Dami', 'Samuel', 'dami23', 'b@gmail.com', '6565', 'male', 'customer', 'Lekki', '$2y$10$MUQRBUe05iBrPYD.fgtpKeQwDeiJEt3xhgQENC5Atd7mpbigRpgSm', '$2y$10$WBglYiuzNy37gDe2jCq52uClWxU6nwPI46sR05Q5aLdYmPD3BT8xG', '', 'Lagos', NULL, '2023-06-22 06:28:59'),
(19, 'David', 'Peter', 'Davis', 'd@gmail.com', '345', 'male', 'customer', 'Lekki', '$2y$10$lRcsy7aTTtQct.45/iWggOLPKetm1tDSYCeNHekdBsHc2hCIjQH5S', '$2y$10$T0v/Q84OmMMEyVF5l5yfsu0axCqvh9igm1sIIEGriiJ8p6IZp3Bca', '', 'Lagos', NULL, '2023-06-22 20:34:46'),
(21, 'Shade', 'Tunji', 'tyu', 'y@gmail.com', '667889', 'female', 'repairer', 'ogudu', '$2y$10$VfGcHij0os.3UI.U6b3AS.EKzpekb4HVe1PVTGoiMK6jZPuAypaJq', '$2y$10$28owWC82IgrXx4WvLPCWr.5MNf1y//inEqQzwy12n/SmpOata1aO2', '', 'Lagos', NULL, '2023-06-22 20:38:26'),
(22, 'Fola', 'Ayo', 'ay', 'g@gmail.com', '789', 'male', 'repairer', 'Gbagada', '$2y$10$0WW7r.lod1LwhlL4Zy3uHefHm6W78.3TTvDPjk01Pld9Ec.bOdhau', '$2y$10$3ticSpfnufBmlcQM4ypyL.wnaxQ/dxBiU3k9wjZTuIV7sKBIQCcwW', '../uploads/safefix1687958014.png', 'Lagos', NULL, '2023-06-28 13:13:34'),
(23, 'Funsho', 'Olu', 'olu', 'h@gmail.com', '354', 'male', 'customer', 'Surulere', '$2y$10$OYeBTRG8Nye3Bhaztb.Ghu8emwjrvbPptEAu819C3L2Vd.hw.9P7e', '$2y$10$rDEkf2wccdS0RdeVh3Qk9.3sFaR2MLLckn1EZ8RC6XtAOf0BNrku2', '../uploads/safefix1687958540.png', 'Lagos', NULL, '2023-06-28 13:22:20'),
(24, 'Bayo', 'Alao', 'Alao', 't@gmail.com', '6376', 'male', 'repairer', 'Lekki', '$2y$10$IBZqNuD4zOz17PaWeP/b1uFIWkjbbtULQivsBL87n3BQ0KqDz5Ec6', '$2y$10$CxBmErpkeb8F/Lbt809.BO28AcxVuJIXF.01/AerPSbGzqPSUCC6q', '../uploads/safefix1687999522.png', 'Ondo', NULL, '2023-06-29 00:45:22'),
(25, 'Tope', 'Tunji', 'Tunji', 's@gmail.com', '2324', 'female', 'customer', 'ogudu', '$2y$10$/ZdJeVRvlwG7sQ2LcnVD2uQXWIFCkKAzA/xIIgG72iqCtNA9jb/qC', '$2y$10$I1P/ulBcOM0LnMF4P6d2vuKGb7B4IX2hPoV9SmRaoC7jxpRi6/gKG', 'uploads/safefix1687999912.jpeg', 'Lagos', NULL, '2023-06-29 00:51:52'),
(26, 'David', 'Emmanuel', 'Tunji', 'ga@gmail.com', '6788', 'male', 'customer', 'ogudu', '$2y$10$vv3uMaUHF9Uk1qLUo5XbF.zODw8E8T/uYuVNQW6cADYfPjWk9iz8.', '$2y$10$bowmgqGbMO/ycUxiSlTBA.US7DgGdL1resxCVE4JX9FDFAVJTpbum', 'uploads/safefix1688002594.png', 'Lagos', NULL, '2023-06-29 01:36:34'),
(27, 'Toyo', 'Bade', 'Toyo', 'toyo@gmail.com', '7677', 'female', 'customer', 'ogudu', '$2y$10$P.wheOwLtKSZAxIx.A8j1e0OMtd7GoJDSl03SBPr4UiC2zoqNcFrq', '$2y$10$y14VN1CZxyrVXISh2PHwnO764u6xVMDyiIiGug6B3XPWKscfXNWVW', 'uploads/safefix1688003527.png', 'Lagos', NULL, '2023-06-29 01:52:07'),
(28, 'Ola', 'Samuel', 'Ola', 'zz@gmail.com', '765', 'male', 'repairer', 'Lekki', '$2y$10$e1/uQhBTOMxFsyxZAyX1FOf0dCjk5LdHemxgfMUYA9O2RENuQgkq.', '$2y$10$rAcN2lWHp3IEMKW5kzDoTOwLiUove9YYRdK0NAezZMBvXIf08f8zm', 'uploads/safefix1688049454.jpeg', 'Lagos', NULL, '2023-06-29 14:37:34'),
(29, 'jewel', 'apeh', 'jewel', 'jewel@gmail.com', '123', 'male', 'customer', 'Ogudu', '$2y$10$/PHDmBYfkmreNJt67sCGae0MbMQCAeqWPjtWFnHyLSR3Fnxlit3M2', '$2y$10$0ExI7l3i8mcJIM9.XZnOcuwntdlXJyMHLTWDJlpVpXlxcdWCFRkm.', 'uploads/safefix1688311090.jpg', 'Lagos', NULL, '2023-07-02 15:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `customerchat`
--

CREATE TABLE `customerchat` (
  `customerchat_id` int(11) NOT NULL,
  `messagechat` text NOT NULL,
  `customer_id` int(11) NOT NULL,
  `repair_id` int(11) NOT NULL,
  `request_created` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerchat`
--

INSERT INTO `customerchat` (`customerchat_id`, `messagechat`, `customer_id`, `repair_id`, `request_created`) VALUES
(1, 'Hello how are you?', 15, 16, '2023-06-23 00:12:15'),
(2, 'Hi Shola, good to meet you', 15, 17, '2023-06-23 00:13:16'),
(3, 'Ajayi solved my issue in no time. I admire his professionalism and technical knowledge', 17, 16, '2023-06-23 09:28:35'),
(4, 'Hello Ajayi, I am yet to hear from you', 16, 16, '2023-06-23 20:45:34'),
(5, 'Hi Dennis Shola, my name is Kunle Ajayi', 16, 17, '2023-06-24 15:56:26'),
(6, 'Hi Shola, this is Ola, how are you?', 15, 17, '2023-06-25 17:35:33'),
(7, 'Hello Shade, how are you doing? This is Ola', 15, 21, '2023-06-27 02:12:41'),
(8, 'hello', 18, 17, '2023-07-01 15:22:04'),
(9, 'hello Alao, my name is Dami Samuel', 18, 24, '2023-07-01 16:18:36'),
(10, 'hello Tunji, my name is Jewel. Are you truly there?', 29, 28, '2023-07-02 15:24:09'),
(11, 'Hello Bayo, my name is David Emmanuel', 26, 24, '2023-07-03 12:51:21');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedbacks` text NOT NULL,
  `rating` varchar(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `repairer_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedbacks`, `rating`, `customer_id`, `repairer_id`, `date_created`) VALUES
(3, 'Great service', '5', 15, 17, '2023-06-23 03:35:39'),
(4, 'My phone was fixed within a very short period of time. Thanks for being professional', '5', 15, 16, '2023-06-23 03:38:25'),
(5, 'Ajayi was great', '5', 16, 16, '2023-06-23 20:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `part_id` int(11) NOT NULL,
  `part_name` varchar(255) DEFAULT NULL,
  `part_price_Naira` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`part_id`, `part_name`, `part_price_Naira`) VALUES
(1, 'Screen', 10),
(2, 'Battery', 20),
(3, 'Battery', 20),
(4, 'Battery', 30000),
(5, 'Case', 45),
(6, 'Case', 45),
(7, 'Case', 45000),
(8, 'Mouth Piece', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `repairer`
--

CREATE TABLE `repairer` (
  `rep_id` int(11) NOT NULL,
  `rep_firstName` varchar(100) DEFAULT NULL,
  `rep_lastName` varchar(100) DEFAULT NULL,
  `rep_userName` varchar(50) DEFAULT NULL,
  `rep_BusinessName` varchar(50) DEFAULT NULL,
  `rep_BusinessAddr` varchar(50) DEFAULT NULL,
  `rep_specialization` varchar(50) DEFAULT NULL,
  `rep_yearsOfExp` varchar(50) DEFAULT NULL,
  `rep_email` varchar(100) DEFAULT NULL,
  `rep_phoneNumber` varchar(50) DEFAULT NULL,
  `rep_gender` enum('male','female') DEFAULT NULL,
  `rep_homeAddress` varchar(200) DEFAULT NULL,
  `rep_password` varchar(20) DEFAULT NULL,
  `rep_confirmPassword` varchar(20) DEFAULT NULL,
  `rep_state` varchar(50) DEFAULT NULL,
  `rep_localGovt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `repairer`
--

INSERT INTO `repairer` (`rep_id`, `rep_firstName`, `rep_lastName`, `rep_userName`, `rep_BusinessName`, `rep_BusinessAddr`, `rep_specialization`, `rep_yearsOfExp`, `rep_email`, `rep_phoneNumber`, `rep_gender`, `rep_homeAddress`, `rep_password`, `rep_confirmPassword`, `rep_state`, `rep_localGovt`) VALUES
(1, 'Femi', 'Ajayi', 'femi123', 'trenchard', 'Ogudu', 'Phones', '4', NULL, '4332', 'male', 'Ogudu', '$2y$10$1uP2nNv4UwMX2', '$2y$10$4F6mi66Z9SbIt', 'Lagos', NULL),
(12, 'Ola', 'Tunji', 'Ola123', 'Olaasco', 'GRA', 'Phones', '6', NULL, '0908756778', 'male', 'Ogudu', '$2y$10$L4bMP.0PpNgRc', '$2y$10$3syhRVTSnshpk', 'Ondo', NULL),
(13, 'Ola', 'Tunji', 'Ola123', 'Olaasco', 'GRA', 'Phones', '6', NULL, '0908756777', 'male', 'Ogudu', '$2y$10$Ii3ro44bc7xF8', '$2y$10$p3uCvQ649K0/h', 'Ondo', NULL),
(14, 'Ola', 'Tunji', 'Ola123', 'Olaasco', 'GRA', 'Phones', '6', '0', '09087878', 'male', 'Ogudu', '$2y$10$8CKFJeytgIixm', '$2y$10$5tVGSa3/5LQuW', 'Ondo', NULL),
(18, 'Funke', 'Teju', 'femi123', 'Funke Cakes', 'Ojota', 'Phones', '8', 'f@gmail.com', '67666756', 'male', 'Ogudu', '$2y$10$2t5ycdVCemHBm', '$2y$10$isZJNqN1NkEKV', 'Ondo', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `repairerchat`
--

CREATE TABLE `repairerchat` (
  `repairerchat_id` int(11) NOT NULL,
  `messagechat` text NOT NULL,
  `customer_id` int(11) NOT NULL,
  `repairer_id` int(11) NOT NULL,
  `chat_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `repairerchat`
--

INSERT INTO `repairerchat` (`repairerchat_id`, `messagechat`, `customer_id`, `repairer_id`, `chat_date`) VALUES
(1, 'Hi Ola, I got your message. I will fix your device and get back to you within the next 24 hours', 15, 17, '2023-06-23 20:11:33'),
(2, 'Please answer me', 16, 16, '2023-06-23 20:51:42'),
(3, 'I got your message, We can meet at Ojota', 16, 16, '2023-06-24 15:14:57'),
(4, 'hi ', 17, 17, '2023-06-24 16:54:30'),
(5, 'Hello', 15, 16, '2023-06-24 17:11:07'),
(6, 'hello Ola I got your message', 15, 17, '2023-06-25 17:31:16'),
(7, 'I got your message. the time is okay', 16, 17, '2023-07-01 10:43:47'),
(8, 'hello Jewel, good to meet you', 29, 28, '2023-07-02 15:26:56'),
(9, 'Good to meet you Jewel', 29, 28, '2023-07-02 15:31:34'),
(10, 'Hi Ola, good to hear from you', 15, 17, '2023-07-02 15:35:01'),
(11, 'Good to meet you David Emmanuel, this is Bayo Alao', 26, 24, '2023-07-03 12:53:22');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `request_device_type` varchar(255) DEFAULT NULL,
  `request_problem_description` text DEFAULT NULL,
  `request_location` varchar(255) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `repairer_id` int(11) NOT NULL,
  `request_date` varchar(100) NOT NULL,
  `request_time` varchar(100) NOT NULL,
  `request_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `request_device_type`, `request_problem_description`, `request_location`, `customer_id`, `repairer_id`, `request_date`, `request_time`, `request_created`) VALUES
(10, 'Samsung', 'hgshs', 'ghhgs', 16, 15, '2023-06-20', '10am', '2023-06-21 10:57:48'),
(12, 'tecno', 'bsattery', 'lagos', 15, 17, '2023-06-29', '10am', '2023-06-21 17:02:41'),
(14, 'Samsung', 'charger', 'Ogudu Mall', 16, 17, '2023-06-29', '3pm', '2023-06-22 06:40:37'),
(16, 'Samsung', 'screen', 'Ojota', 15, 17, '2023-06-30', '3pm', '2023-06-22 10:43:34'),
(17, 'Iphone', 'Battery life', 'Ikoyi', 19, 21, '2023-06-30', '3pm', '2023-06-22 20:47:39'),
(18, 'tecno', 'slow', 'Ojota', 16, 16, '2023-06-29', '10am', '2023-06-23 20:44:51'),
(19, 'Itel', 'My phone keeps freezing. pls help', 'Ojota', 17, 16, '2023-06-25', '10am', '2023-06-24 15:37:36'),
(20, 'Samsung', 'My phone is slow', 'Ojota', 17, 17, '2023-06-26', '10am', '2023-06-24 15:58:10'),
(21, 'itel', 'phone slow', '5, Ajao estate, VI', 17, 17, '2023-06-25', '10am', '2023-06-24 16:03:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`admin_email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `cust_email` (`cust_email`),
  ADD UNIQUE KEY `cust_phoneNumber` (`cust_phoneNumber`);

--
-- Indexes for table `customerchat`
--
ALTER TABLE `customerchat`
  ADD PRIMARY KEY (`customerchat_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `repair_id` (`repair_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `customerfeedback` (`customer_id`),
  ADD KEY `rep` (`repairer_id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`part_id`);

--
-- Indexes for table `repairer`
--
ALTER TABLE `repairer`
  ADD PRIMARY KEY (`rep_id`),
  ADD UNIQUE KEY `rep_phoneNumber` (`rep_phoneNumber`),
  ADD UNIQUE KEY `rep_email` (`rep_email`);

--
-- Indexes for table `repairerchat`
--
ALTER TABLE `repairerchat`
  ADD PRIMARY KEY (`repairerchat_id`),
  ADD KEY `cus_id` (`customer_id`),
  ADD KEY `repairer` (`repairer_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `repairer_id` (`repairer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `customerchat`
--
ALTER TABLE `customerchat`
  MODIFY `customerchat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `repairer`
--
ALTER TABLE `repairer`
  MODIFY `rep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `repairerchat`
--
ALTER TABLE `repairerchat`
  MODIFY `repairerchat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customerchat`
--
ALTER TABLE `customerchat`
  ADD CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `repair_id` FOREIGN KEY (`repair_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `customerfeedback` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `rep` FOREIGN KEY (`repairer_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `repairerchat`
--
ALTER TABLE `repairerchat`
  ADD CONSTRAINT `cus_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `repairer` FOREIGN KEY (`repairer_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `repairer_id` FOREIGN KEY (`repairer_id`) REFERENCES `customer` (`cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
