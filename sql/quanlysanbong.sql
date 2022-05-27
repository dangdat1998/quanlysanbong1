-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 01:56 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlysanbong`
--

-- --------------------------------------------------------

--
-- Table structure for table `dat_san`
--

CREATE TABLE `dat_san` (
  `id` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ma_san` int(11) NOT NULL,
  `bat_dau` datetime NOT NULL,
  `ket_thuc` datetime NOT NULL,
  `da_thanh_toan` tinyint(1) NOT NULL,
  `don_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `dat_san`
--

INSERT INTO `dat_san` (`id`, `ma_kh`, `ma_san`, `bat_dau`, `ket_thuc`, `da_thanh_toan`, `don_gia`) VALUES
(253, 6, 21, '2022-05-23 05:00:00', '2022-05-23 06:45:00', 0, 3000),
(254, 3, 22, '2022-05-24 07:00:00', '2022-05-24 09:00:00', 1, 3000),
(255, 3, 21, '2022-05-24 10:00:00', '2022-05-24 12:00:00', 0, 3000),
(256, 3, 21, '2022-05-24 12:15:00', '2022-05-24 14:00:00', 0, 3000),
(257, 3, 24, '2022-05-24 20:00:00', '2022-05-24 22:30:00', 0, 8000);

-- --------------------------------------------------------

--
-- Table structure for table `san_bong`
--

CREATE TABLE `san_bong` (
  `id` int(11) NOT NULL,
  `ten` varchar(40) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `san_bong`
--

INSERT INTO `san_bong` (`id`, `ten`) VALUES
(20, 'San A'),
(21, 'San B'),
(22, 'San C'),
(23, 'San D'),
(24, 'San E'),
(26, 'San F'),
(27, 'San G'),
(28, 'San H');

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sdt` varchar(255) CHARACTER SET utf8 NOT NULL,
  `username` varchar(40) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `chucvu` varchar(255) CHARACTER SET utf8 NOT NULL,
  `time` varchar(225) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `ten`, `sdt`, `username`, `password`, `chucvu`, `time`) VALUES
(1, 'Nguyễn Như Quỳnh', '0999999889', 'quynh', '123456', '1', '1653311761'),
(3, 'Đăng Đạt', '0912892822', 'dangdat', '123456', '1', '1653311761'),
(4, 'Minh Tuấn', '0199292000', 'duc', '123456', '0', '1653311761'),
(5, 'Hoàng Minh Đức', '0199292020', 'duc1', '123456', '0', '1653311821'),
(6, 'Nguyễn Tiến Anh', '01655938742', 'tienanh', '123456', '0', '1653324835'),
(7, 'Trần Trung Hiếu', '0355000009', 'trunghieu', '123456', '0', '1653326723');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dat_san`
--
ALTER TABLE `dat_san`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dat_san_ibfk_1` (`ma_kh`),
  ADD KEY `dat_san_ibfk_2` (`ma_san`);

--
-- Indexes for table `san_bong`
--
ALTER TABLE `san_bong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dat_san`
--
ALTER TABLE `dat_san`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `san_bong`
--
ALTER TABLE `san_bong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dat_san`
--
ALTER TABLE `dat_san`
  ADD CONSTRAINT `dat_san_ibfk_2` FOREIGN KEY (`ma_san`) REFERENCES `san_bong` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
