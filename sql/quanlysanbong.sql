-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 02, 2022 lúc 05:55 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlysanbong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_san`
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
-- Đang đổ dữ liệu cho bảng `dat_san`
--

INSERT INTO `dat_san` (`id`, `ma_kh`, `ma_san`, `bat_dau`, `ket_thuc`, `da_thanh_toan`, `don_gia`) VALUES
(253, 6, 21, '2022-05-23 05:00:00', '2022-05-23 06:45:00', 0, 3000),
(254, 3, 22, '2022-05-24 07:00:00', '2022-05-24 09:00:00', 1, 3000),
(255, 3, 21, '2022-05-24 10:00:00', '2022-05-24 12:00:00', 0, 3000),
(256, 3, 21, '2022-05-24 12:15:00', '2022-05-24 14:00:00', 0, 3000),
(257, 3, 24, '2022-05-24 20:00:00', '2022-05-24 22:30:00', 0, 8000),
(260, 4, 20, '2022-06-02 05:00:00', '2022-06-02 05:15:00', 1, 3000),
(261, 4, 20, '2022-06-02 05:30:00', '2022-06-02 05:45:00', 0, 3000),
(262, 1, 20, '2022-06-02 06:00:00', '2022-06-02 06:15:00', 0, 3000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `username` varchar(225) CHARACTER SET utf8 NOT NULL,
  `content` longtext CHARACTER SET utf8 NOT NULL,
  `time` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `username`, `content`, `time`) VALUES
(1, 'quynh', 'this is my test post', '1654185231'),
(2, 'quynh', 'this is my test post', '1654185232');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_bong`
--

CREATE TABLE `san_bong` (
  `id` int(11) NOT NULL,
  `ten` varchar(40) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `san_bong`
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
-- Cấu trúc bảng cho bảng `tai_khoan`
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
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `ten`, `sdt`, `username`, `password`, `chucvu`, `time`) VALUES
(1, 'Nguyễn Như Quỳnh', '0999999889', 'quynh', '123456', '1', '1653311761'),
(3, 'Đăng Đạt', '0912892822', 'dangdat', '123456', '1', '1653311761'),
(4, 'Minh Tuấn', '0199292000', 'duc', '123456', '0', '1653311761'),
(5, 'Hoàng Minh Đức', '0199292020', 'duc1', '123456', '0', '1653311821'),
(6, 'Nguyễn Tiến Anh', '01655938742', 'tienanh', '123456', '0', '1653324835'),
(7, 'Trần Trung Hiếu', '0355000009', 'trunghieu', '123456', '0', '1653326723'),
(8, 'a b c', '09888', 'amdudh', '123456', '0', '1654102363'),
(9, 'quynh', '0101910', 'quynh1909', '123456', '0', '1654102714');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dat_san`
--
ALTER TABLE `dat_san`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dat_san_ibfk_1` (`ma_kh`),
  ADD KEY `dat_san_ibfk_2` (`ma_san`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_bong`
--
ALTER TABLE `san_bong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dat_san`
--
ALTER TABLE `dat_san`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `san_bong`
--
ALTER TABLE `san_bong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dat_san`
--
ALTER TABLE `dat_san`
  ADD CONSTRAINT `dat_san_ibfk_2` FOREIGN KEY (`ma_san`) REFERENCES `san_bong` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
