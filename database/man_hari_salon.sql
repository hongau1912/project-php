-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2023 at 11:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `man_hari_salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(15) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone_number` varchar(10) NOT NULL,
  `date_booking` date NOT NULL,
  `time_booking` time NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `gmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `phone_number`, `date_booking`, `time_booking`, `status`, `gmail`) VALUES
(1, 'bao', '0397159333', '2023-09-05', '11:48:07', 'Đã duyệt', ''),
(2, 'au', '3575645334', '2023-09-05', '25:28:59', 'Đã duyệt', ''),
(3, 'tuan', '0397159333', '2023-09-09', '11:00:00', 'Đang chờ', 'tranvanquocbao333@gmail.com'),
(4, 'tuan', '0397159333', '2023-09-09', '11:00:00', 'Đang chờ', 'tranvanquocbao333@gmail.com'),
(5, 'Trần Văn Quốc Bảo', '0397159334', '2023-09-10', '10:00:00', 'Đã duyệt', 'tranvanquocbao333@gmail.com'),
(6, 'Trần Văn Quốc Bảo', '0397159334', '2023-09-10', '10:00:00', 'Đang chờ', 'tranvanquocbao333@gmail.com'),
(7, '', '0397159334', '0000-00-00', '00:00:00', 'Đang chờ', ''),
(8, 'ai1', '999999', '2023-09-09', '22:49:00', 'Đã duyệt', 'tranvanquocbao333@gmail.com'),
(9, '', '0397159333', '0000-00-00', '00:00:00', 'Đang chờ', ''),
(10, '', '0397159333', '0000-00-00', '00:00:00', 'Đang chờ', ''),
(11, '', '0397159333', '0000-00-00', '00:00:00', 'Đang chờ', ''),
(12, 'sad', '0397159333', '2023-09-09', '15:15:00', 'Đang chờ', 'asdsa'),
(13, 'sad', '0397159333', '2023-09-09', '15:15:00', 'Đang chờ', 'asdsa'),
(14, 'Nguyen Van Hong Au', '0909888898', '2023-09-08', '14:57:00', 'Đang chờ', 'nguyenvanhongau1912@gmail.com'),
(15, 'Nguyen Van Hong Au', '0909888898', '2023-09-08', '14:57:00', 'Đang chờ', 'nguyenvanhongau1912@gmail.com'),
(16, 'Nguyen Van Hong Au', '0909888898', '2023-09-08', '14:57:00', 'Đang chờ', 'nguyenvanhongau1912@gmail.com'),
(17, 'Nguyen Van Hong Au', '0909888898', '2023-09-08', '14:57:00', 'Đang chờ', 'nguyenvanhongau1912@gmail.com'),
(18, 'Nguyen Van Hong Au', '1912', '2023-09-08', '15:24:00', 'Đang chờ', 'nguyenvanhongau1912@gmail.com'),
(19, 'Nguyen Van Hong Au', '1912', '2023-09-08', '15:24:00', 'Đang chờ', 'nguyenvanhongau1912@gmail.com'),
(20, 'Nguyen Van Hong Au', '0934888901', '2023-09-08', '15:26:00', 'Đang chờ', 'nguyenvanhongau1912@gmail.com'),
(21, 'au', '', '2023-09-08', '16:30:00', 'Đang chờ', 'tranvanquocbao333@gmail.com'),
(22, 'au', '11111', '2023-09-08', '16:30:00', 'Đang chờ', 'tranvanquocbao333@gmail.com'),
(23, 'Nguyen Van Hong Au', '0934888901', '2023-09-08', '17:09:00', 'Đang chờ', 'tranvanquocbao333@gmail.com'),
(24, 'Nguyen Van Hong Au', '0934888901', '2023-09-08', '20:14:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(25, 'Nguyen Van Hong Au', '0934888901', '2023-09-08', '20:14:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(26, 'Nguyen Van Hong Au', '0934888901', '2023-09-08', '20:17:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(27, 'Nguyen Van Hong Au', '0934888901', '2023-09-08', '20:17:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(28, 'Nguyen Van Hong Au', '0934888901', '2023-09-08', '20:20:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(29, 'Nguyen Van Hong Au', '444443335', '2023-09-08', '20:21:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(30, 'Nguyen Van Hong Au', '0934888901', '2023-09-08', '20:23:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(31, 'Nguyen Van Hong Au', '0934888901', '2023-09-08', '20:23:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(32, 'Nguyen Van Hong Au', '0934888901', '2023-09-08', '20:23:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(33, 'Au', '0934888901', '2023-09-08', '20:37:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(34, 'Au', '0934888901', '2023-09-08', '20:37:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(35, 'Au', '0934888901', '2023-09-08', '20:37:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(36, 'Nguyen Van Hong Au', '0934888901', '2023-09-08', '20:42:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(37, 'Nguyen Van Hong Au', '0934888904', '2023-09-08', '23:35:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(38, 'Nguyen Van Hong Au', '2307', '2023-09-08', '23:46:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(39, 'Nguyen Van Hong Au', '230233335', '2023-09-09', '01:48:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(40, 'Nguyen Van Hong Au', '191299444', '2023-09-11', '01:01:00', 'Đang chờ', 'aaunvh.1440101226613@vtc.edu.vn'),
(41, 'Nguyen Van Hong Au', '333355', '2023-09-09', '09:56:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(42, 'Nguyen Van Hong Au', '0934888901', '2023-09-09', '10:47:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(43, 'Nguyen Van Hong Au', '0934888901', '2023-09-09', '10:53:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(44, 'Nguyen Van Hong Au', '0934888901', '2023-09-10', '10:54:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(45, 'Lập trình React Naitive', '0934888901', '2023-09-10', '17:57:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(46, 'Nguyen Van Hong Au', '0934888', '2023-09-10', '21:39:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(47, 'Nguyen Van Hong Au', '0934888901', '2023-09-11', '09:59:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(48, 'Nguyen Van Hong Au', '0934888901', '2023-09-12', '14:00:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(49, 'Nguyen Van Hong Au', '0934888901', '2023-09-13', '09:00:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(50, 'Nguyen Van Hong Au', '0934888901', '2023-09-14', '14:00:00', 'Đang chờ', 'aunvh.1440101226613@vtc.edu.vn'),
(51, 'Hong Au', '0934888901', '2023-09-14', '14:00:00', 'Đã duyệt', 'aunvh.1440101226613@vtc.edu.vn'),
(52, 'Hong Au', '0934888901', '2023-09-14', '15:00:00', 'Đã duyệt', 'aunvh.1440101226613@vtc.edu.vn'),
(53, 'Hong Au Nguyen', '0934888901', '2023-09-14', '14:00:00', 'Đã duyệt', 'aunvh.1440101226613@vtc.edu.vn');

-- --------------------------------------------------------

--
-- Table structure for table `booking_service`
--

CREATE TABLE `booking_service` (
  `id` int(10) NOT NULL,
  `id_booking` int(11) DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_service`
--

INSERT INTO `booking_service` (`id`, `id_booking`, `id_service`) VALUES
(1, 1, 7),
(2, 1, 3),
(3, 2, 2),
(5, 5, 2),
(6, 5, 3),
(7, 8, 3),
(8, 8, 7),
(9, 14, 2),
(10, 14, 7),
(11, 14, 2),
(12, 14, 7),
(13, 14, 2),
(14, 14, 7),
(15, 14, 2),
(16, 14, 7),
(17, 18, 2),
(18, 18, 3),
(19, 18, 2),
(20, 18, 3),
(21, 20, 2),
(22, 20, 3),
(23, 22, 2),
(24, 22, 3),
(25, 20, 2),
(26, 20, 7),
(27, 20, 2),
(28, 20, 7),
(29, 20, 2),
(30, 20, 3),
(31, 20, 2),
(32, 20, 7),
(33, 29, 2),
(34, 29, 7),
(35, 20, 2),
(36, 20, 3),
(37, 35, 2),
(38, 35, 3),
(39, 36, 2),
(40, 36, 3),
(41, 37, 2),
(42, 37, 3),
(43, 37, 2),
(44, 37, 3),
(45, 38, 2),
(46, 39, 2),
(47, 40, 2),
(48, 41, 2),
(49, 41, 7),
(50, 42, 2),
(51, 42, 3),
(52, 42, 7),
(53, 43, 2),
(54, 43, 3),
(55, 43, 2),
(56, 43, 3),
(57, 44, 2),
(74, 45, 2),
(75, 45, 3),
(83, 46, 2),
(84, 47, 2),
(86, 48, 7),
(87, 49, 3),
(89, 50, 3),
(90, 50, 7),
(92, 51, 3),
(93, 51, 7),
(95, 52, 3),
(96, 52, 7),
(98, 53, 3),
(99, 53, 7);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `is_available` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `image`, `content`, `price`, `is_available`) VALUES
(2, ' Combo cắt gội Stylist Master', '663.jpg', 'Combo Cắt gội do Stylist Master thực hiện (Top 2% Stylist tốt nhất hệ thống)', 180, 1),
(3, 'Combo cắt gội 10 bước', '701.jpg', 'Ngoáy tai Lốc Xoáy siêu phê Gội đầu xối nước thác đổ Massage bấm huyệt sâu lưng, cổ vai gáy', 199, 1),
(7, 'Massage đá nóng', '632_1.jpg', 'Ngoáy tai Lốc Xoáy siêu phê Gội đầu xối nước thác đổ Massage bấm huyệt sâu lưng, cổ vai gáy', 250, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `booking_service`
--
ALTER TABLE `booking_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_booking` (`id_booking`),
  ADD KEY `id_service` (`id_service`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `booking_service`
--
ALTER TABLE `booking_service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_service`
--
ALTER TABLE `booking_service`
  ADD CONSTRAINT `booking_service_ibfk_1` FOREIGN KEY (`id_booking`) REFERENCES `booking` (`id`),
  ADD CONSTRAINT `booking_service_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
