-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 10:09 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars_dealer`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id_cars` int(11) NOT NULL,
  `brand_car` varchar(30) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `series_car` varchar(30) NOT NULL,
  `car_price` double NOT NULL,
  `car_stock` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id_cars`, `brand_car`, `product_img`, `series_car`, `car_price`, `car_stock`, `created_at`, `updated_at`) VALUES
(6, 'BMW', '599580704_PngItem_5210696.png', 'X911', 2500000000, 9, '2022-12-15 02:48:52', NULL),
(7, 'BMW', '1074759520_PngItem_4984642.png', 'X10', 1800000000, 10, '2022-12-15 02:49:20', NULL),
(8, 'FERARY', '95938562_PngItem_3337617.png', 'F9', 1500000000, 21, '2022-12-16 01:15:49', NULL),
(9, 'SUPRA', '1797915886_PngItem_6121872.png', 'X9', 1200000000, 11, '2022-12-16 01:16:19', NULL),
(10, 'SUPRA', '701867952_PngItem_3656414.png', 'X6', 1000000000, 9, '2022-12-16 01:17:55', NULL),
(11, 'PORSCHE', '1795800853_1074759520_PngItem_4984642.png', 'CAYMAN', 1900000000, 19, '2022-12-16 01:18:23', '2022-12-16 01:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_item_recieve`
--

CREATE TABLE `confirm_item_recieve` (
  `id_confirm_item` int(11) NOT NULL,
  `id_shipment` int(11) NOT NULL,
  `date_confirm` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirm_item_recieve`
--

INSERT INTO `confirm_item_recieve` (`id_confirm_item`, `id_shipment`, `date_confirm`, `created_at`, `updated_at`) VALUES
(8, 6, '2022-12-16 08:26:00', '2022-12-16 02:23:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_status`
--

CREATE TABLE `delivery_status` (
  `id_delivery` int(11) NOT NULL,
  `id_shipment` int(11) DEFAULT NULL,
  `id_confirm_item_arrived` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_status`
--

INSERT INTO `delivery_status` (`id_delivery`, `id_shipment`, `id_confirm_item_arrived`, `created_at`, `updated_at`) VALUES
(6, 6, 8, '2022-12-16 02:24:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees_account`
--

CREATE TABLE `employees_account` (
  `id_employe_account` int(11) NOT NULL,
  `id_employe_data` int(11) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `sebagai` enum('sales','shipment') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees_account`
--

INSERT INTO `employees_account` (`id_employe_account`, `id_employe_data`, `avatar`, `email`, `password`, `sebagai`, `created_at`, `updated_at`) VALUES
(1, 1, '', 'marcus99@gmail.com', '$2y$10$ejLDLj0JxLAHqZUmthS9HOhexq4d08F9aS9s71/sw4ExoXymnOMmC', 'sales', '2022-12-12 07:24:29', '2022-12-15 07:11:11'),
(2, 2, '', 'alex@gmail.com', 'aku', 'shipment', '2022-12-12 07:24:29', '2022-12-15 20:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `employees_data`
--

CREATE TABLE `employees_data` (
  `id_employee` int(11) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `employee_address` varchar(100) NOT NULL,
  `employee_telp` varchar(20) NOT NULL,
  `employee_as` enum('sales','shipment') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees_data`
--

INSERT INTO `employees_data` (`id_employee`, `employee_name`, `employee_address`, `employee_telp`, `employee_as`, `created_at`, `updated_at`) VALUES
(1, 'MARCUS RASHFORD', 'BINTARO', '08546935778', 'sales', '2022-12-12 07:22:55', NULL),
(2, 'ALEX', 'JAKARTA', '123432412313', 'shipment', '2022-12-12 07:23:44', '2022-12-15 06:26:10'),
(3, 'THOMAS', 'USA', '0879654852', 'sales', '2022-12-12 08:43:53', NULL),
(6, 'NANA', 'SEMARANG', '023569855', 'shipment', '2022-12-15 00:22:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guest_buyer`
--

CREATE TABLE `guest_buyer` (
  `id_guest` int(11) NOT NULL,
  `guest_name` varchar(100) NOT NULL,
  `guest_address` varchar(100) NOT NULL,
  `guest_telp` varchar(20) NOT NULL,
  `guest_email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest_buyer`
--

INSERT INTO `guest_buyer` (`id_guest`, `guest_name`, `guest_address`, `guest_telp`, `guest_email`, `created_at`, `updated_at`) VALUES
(1, 'MARCO99', 'SURABAYA', '08575665215', 'marco@gmail.com', '2022-12-13 07:55:51', '2022-12-15 07:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id_manager` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `sebagai` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id_manager`, `username`, `email`, `avatar`, `password`, `sebagai`, `created_at`, `updated_at`) VALUES
(7, 'rooney99', 'rooney@gmail.com', NULL, '$2y$10$PVMsu0qMnXXw2bpqG5FmJucn0C48TijLjkGt23wfrA2', 'manager', '2022-12-15 21:38:44', '2022-12-15 21:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `online_payment`
--

CREATE TABLE `online_payment` (
  `id_payment` int(11) NOT NULL,
  `id_user_account` int(11) NOT NULL,
  `id_cars` int(11) NOT NULL,
  `number_bank_account` varchar(50) NOT NULL,
  `shipment_address` varchar(255) NOT NULL,
  `shipment_price` float NOT NULL,
  `total_payment` double NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_payment`
--

INSERT INTO `online_payment` (`id_payment`, `id_user_account`, `id_cars`, `number_bank_account`, `shipment_address`, `shipment_price`, `total_payment`, `payment_date`, `created_at`, `updated_at`) VALUES
(4, 3, 6, '999999', 'ungaran', 100000000, 999999999, '2022-12-14 17:00:00', '2022-12-15 07:41:02', '2022-12-15 08:35:17'),
(6, 7, 6, '3333333333', 'aku', 3333330000, 66666666666, '2022-12-15 20:55:11', '2022-12-16 02:55:27', NULL),
(7, 7, 6, '22222222', 'gggg', 2222, 222222, '2022-12-15 20:57:48', '2022-12-16 02:58:00', NULL),
(8, 7, 7, '66666666666', 'kamu', 66666700, 66666666, '2022-12-15 20:59:52', '2022-12-16 03:00:06', NULL),
(9, 7, 6, '787878787878', 'dadadada', 787878, 78787878, '2022-12-15 21:10:39', '2022-12-16 03:11:42', NULL),
(10, 8, 7, '33333', 'semarang', 10000000, 1800000000, '2022-12-15 21:31:52', '2022-12-16 03:32:40', NULL),
(11, 7, 6, '1342414515', 'ungaran', 444444, 44444, '2022-12-16 00:45:29', '2022-12-16 06:45:56', NULL),
(12, 9, 6, '1212121313', ';lgug', 10000000, 2, '2022-12-16 01:11:12', '2022-12-16 07:11:30', NULL),
(13, 10, 8, '342423443242', 'bintaro', 3213120000, 19000000, '2022-12-16 02:20:31', '2022-12-16 08:21:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_confirmation`
--

CREATE TABLE `payment_confirmation` (
  `id_payment_confirmation` int(11) NOT NULL,
  `id_employees_account` int(11) NOT NULL,
  `id_online_payment` int(11) NOT NULL,
  `date_confirmation` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_confirmation`
--

INSERT INTO `payment_confirmation` (`id_payment_confirmation`, `id_employees_account`, `id_online_payment`, `date_confirmation`, `created_at`, `updated_at`) VALUES
(4, 2, 4, '2022-12-14 17:00:00', '2022-12-15 08:36:19', NULL),
(6, 2, 10, '2022-12-15 17:00:00', '2022-12-15 21:33:04', NULL),
(7, 1, 13, '2022-12-15 17:00:00', '2022-12-16 02:22:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id_shipment` int(11) NOT NULL,
  `id_employe_account` int(11) NOT NULL,
  `id_payment_confirmation` int(11) NOT NULL,
  `shipment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estimated_time` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`id_shipment`, `id_employe_account`, `id_payment_confirmation`, `shipment_date`, `estimated_time`, `created_at`, `updated_at`) VALUES
(5, 1, 6, '2022-12-15 17:00:00', 3, '2022-12-15 21:37:36', NULL),
(6, 2, 7, '2022-12-15 17:00:00', 3, '2022-12-16 02:22:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id_user_account` int(11) NOT NULL,
  `id_user_regis` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `sebagai` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id_user_account`, `id_user_regis`, `email`, `avatar`, `password`, `sebagai`, `created_at`, `updated_at`) VALUES
(1, 1, 'mathew99@gmail.com', '', '$2y$10$1jXYLxZ2MZQW6uTsq0LqBOjNsteECFYjrNdKsbPJ2450Dbqt/pBUS', 'user', '2022-12-12 07:28:13', '2022-12-15 07:25:28'),
(2, 2, 'abraham@gmail.com', '', '$2y$10$Erzn5KEV30p8YLCb5mC2D.RFX4SURy0nuDRg3wlW.QL/QciQXxZUG', 'user', '2022-12-12 07:28:13', '2022-12-15 07:27:14'),
(3, 3, 'alif@gmail.com', '', '$2y$10$zek6SKQfgmDuxVv.ZR6d6O5yuJIKn5aIc9kW9eINFAefGNjv09exK', 'user', '2022-12-15 06:46:33', '2022-12-15 10:19:07'),
(7, 4, 'jacob@gmail.com', '701965079_Circle-icons-tools.svg.png', '$2y$10$Do0qmmCX3h8vtqhmobREceOQh9lQcUUk/sBb3iKFwzvMxK5OmD8EG', 'user', '2022-12-15 18:29:37', NULL),
(8, 9, 'ibra@gmail.com', '1296196000_flat-design-car-dealer-logo_23-2149337941.png', '$2y$10$nrqEyUCLXz3rzmmBiJhEIeOCBBwofO3y1uYfuCL4JZUpeEPEr/4h6', 'user', '2022-12-16 03:30:06', NULL),
(9, 10, 'socrates@gmail.com', '1204030906_circus_by_aquasixio_d76a2fh.jpg', '$2y$10$Ys/IvmlR4eSxfC8wIRt9s.WMzRRjMT5CSAJi7EqyylTGDRvQkgVmC', 'user', '2022-12-16 07:05:58', NULL),
(10, 11, 'ucup@gmail.com', '462037657_foto2.jpg', '$2y$10$tmj7HjISVL3lJaqFkfax2umySNY1aYb8sfnBU.P.7QvqyDTRRUWIu', 'user', '2022-12-16 08:19:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_regis`
--

CREATE TABLE `user_regis` (
  `id_user_regis` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `born_date` date NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_regis`
--

INSERT INTO `user_regis` (`id_user_regis`, `nik`, `full_name`, `address`, `phone`, `gender`, `born_date`, `nationality`, `created_at`, `updated_at`) VALUES
(1, '332245879658452', 'MATHEW ', 'SEMARANG', '085749685246', 'male', '1992-03-11', 'WNI', '2022-12-12 07:26:30', NULL),
(2, '33254685795421', 'ABRAHAM', 'JEPARA', '0879545845658', 'male', '1978-02-27', 'WNI', '2022-12-12 07:27:31', NULL),
(3, '33221547898665851', 'ALIF NAFIS ALGHANY', 'BINTARO, TANGSEL', '123412134', 'male', '0000-00-00', 'WNI', '2022-12-12 08:43:53', NULL),
(4, '6671536178821', 'JACOB', 'SURABAYA', '2545200515549766632', '', '2022-12-16', 'WNA', '2022-12-15 18:14:53', NULL),
(9, '32345435252', 'ibra', 'sweden', '120398293', 'male', '2022-12-16', 'WNA', '2022-12-16 03:26:22', NULL),
(10, '123454234', 'SOCRATES', 'ATHENA', '0928276244', 'male', '2022-12-16', 'WNA', '2022-12-16 07:05:30', NULL),
(11, '123123123123', 'ucup', 'bintaro', '21312321', 'male', '2022-12-16', 'WNI', '2022-12-16 08:19:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id_cars`);

--
-- Indexes for table `confirm_item_recieve`
--
ALTER TABLE `confirm_item_recieve`
  ADD PRIMARY KEY (`id_confirm_item`),
  ADD KEY `fk_id_shipment` (`id_shipment`);

--
-- Indexes for table `delivery_status`
--
ALTER TABLE `delivery_status`
  ADD PRIMARY KEY (`id_delivery`),
  ADD KEY `fk_id_confirm_item_arrived` (`id_confirm_item_arrived`),
  ADD KEY `fk_id_shipment_status` (`id_shipment`);

--
-- Indexes for table `employees_account`
--
ALTER TABLE `employees_account`
  ADD PRIMARY KEY (`id_employe_account`),
  ADD KEY `fk_id_employee_data` (`id_employe_data`);

--
-- Indexes for table `employees_data`
--
ALTER TABLE `employees_data`
  ADD PRIMARY KEY (`id_employee`);

--
-- Indexes for table `guest_buyer`
--
ALTER TABLE `guest_buyer`
  ADD PRIMARY KEY (`id_guest`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id_manager`);

--
-- Indexes for table `online_payment`
--
ALTER TABLE `online_payment`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `fk_id_cars` (`id_cars`),
  ADD KEY `fk_id_user_account` (`id_user_account`);

--
-- Indexes for table `payment_confirmation`
--
ALTER TABLE `payment_confirmation`
  ADD PRIMARY KEY (`id_payment_confirmation`),
  ADD KEY `fk_id_employees_account` (`id_employees_account`),
  ADD KEY `fk_id_online_payment` (`id_online_payment`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id_shipment`),
  ADD KEY `fk_id_employee_account` (`id_employe_account`),
  ADD KEY `fk_id_payment_confirmation` (`id_payment_confirmation`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id_user_account`),
  ADD KEY `fk_id_user_regis` (`id_user_regis`);

--
-- Indexes for table `user_regis`
--
ALTER TABLE `user_regis`
  ADD PRIMARY KEY (`id_user_regis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id_cars` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `confirm_item_recieve`
--
ALTER TABLE `confirm_item_recieve`
  MODIFY `id_confirm_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `delivery_status`
--
ALTER TABLE `delivery_status`
  MODIFY `id_delivery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employees_account`
--
ALTER TABLE `employees_account`
  MODIFY `id_employe_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employees_data`
--
ALTER TABLE `employees_data`
  MODIFY `id_employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guest_buyer`
--
ALTER TABLE `guest_buyer`
  MODIFY `id_guest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id_manager` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `online_payment`
--
ALTER TABLE `online_payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payment_confirmation`
--
ALTER TABLE `payment_confirmation`
  MODIFY `id_payment_confirmation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id_shipment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id_user_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_regis`
--
ALTER TABLE `user_regis`
  MODIFY `id_user_regis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `confirm_item_recieve`
--
ALTER TABLE `confirm_item_recieve`
  ADD CONSTRAINT `fk_id_shipment` FOREIGN KEY (`id_shipment`) REFERENCES `shipment` (`id_shipment`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `delivery_status`
--
ALTER TABLE `delivery_status`
  ADD CONSTRAINT `fk_id_confirm_item_arrived` FOREIGN KEY (`id_confirm_item_arrived`) REFERENCES `confirm_item_recieve` (`id_confirm_item`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_shipment_status` FOREIGN KEY (`id_shipment`) REFERENCES `shipment` (`id_shipment`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employees_account`
--
ALTER TABLE `employees_account`
  ADD CONSTRAINT `fk_id_employee_data` FOREIGN KEY (`id_employe_data`) REFERENCES `employees_data` (`id_employee`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `online_payment`
--
ALTER TABLE `online_payment`
  ADD CONSTRAINT `fk_id_cars` FOREIGN KEY (`id_cars`) REFERENCES `cars` (`id_cars`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_user_account` FOREIGN KEY (`id_user_account`) REFERENCES `user_account` (`id_user_account`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_confirmation`
--
ALTER TABLE `payment_confirmation`
  ADD CONSTRAINT `fk_id_employees_account` FOREIGN KEY (`id_employees_account`) REFERENCES `employees_account` (`id_employe_account`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_online_payment` FOREIGN KEY (`id_online_payment`) REFERENCES `online_payment` (`id_payment`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shipment`
--
ALTER TABLE `shipment`
  ADD CONSTRAINT `fk_id_employee_account` FOREIGN KEY (`id_employe_account`) REFERENCES `employees_account` (`id_employe_account`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_payment_confirmation` FOREIGN KEY (`id_payment_confirmation`) REFERENCES `payment_confirmation` (`id_payment_confirmation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_account`
--
ALTER TABLE `user_account`
  ADD CONSTRAINT `fk_id_user_regis` FOREIGN KEY (`id_user_regis`) REFERENCES `user_regis` (`id_user_regis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
