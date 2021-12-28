-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 28, 2021 lúc 03:36 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbthweb`
--
CREATE DATABASE IF NOT EXISTS `dbthweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_vietnamese_ci;
USE `dbthweb`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Quần dài nam'),
(2, 'Quần dài nữ'),
(3, 'Quần short'),
(4, 'Áo thun nữ'),
(5, 'Áo thun nam'),
(6, 'Áo khoác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_status` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `order_total_price` float NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `or_detail`
--

CREATE TABLE `or_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `quatity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `product_info` text COLLATE utf8_vietnamese_ci NOT NULL,
  `product_price` float NOT NULL,
  `product_img` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `product_price_discount` int(11) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_info`, `product_price`, `product_img`, `product_price_discount`, `category`) VALUES
(1, 'QUẦN THỂ THAO NAM ACTIVE TS', 'Quần short thể thao', 79000, 'vendors/images/product/Quần short.jpg', 0, 3),
(2, 'QUẦN SHORT GIÓ V3 TS	', 'Quần short chất lượng cao', 282000, 'vendors/images/product/quần short 2.jpg', 169000, 3),
(3, 'Áo croptop in Sun Kissed', 'Áo thời trang', 210000, 'vendors/images/product/áo thun nữ.jpg', 0, 4),
(4, 'ÁO KHOÁC TÚI KHÓA KÉO AB657	', 'Áo khoác nữ thời trang', 265000, 'vendors/images/product/áo khoác 1.jpg', 200000, 6),
(5, 'Áo khoác Jockey chống tia UV', 'Áo khoác thời trang bảo vệ cơ thể', 485000, 'vendors/images/product/áo khoác nam.jpg', 0, 6),
(6, 'ÁO THUN POLO NAM TS	', 'Áo thun nam cao cấp', 183000, 'vendors/images/product/áo thun man.jpg', 150000, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `sex` tinyint(1) NOT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `date_created`, `sex`, `role`) VALUES
(1, 'Phuc', 'phuc@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-12-28 20:47:43', 0, 0),
(2, 'Vy', 'vy@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-12-28 20:47:43', 1, 0),
(3, 'User1', 'user1@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-12-28 20:49:17', 0, 1),
(4, 'User2', 'user2@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-12-28 20:49:17', 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `or_detail`
--
ALTER TABLE `or_detail`
  ADD KEY `order_orderdetail_FK` (`order_id`),
  ADD KEY `orderdetail_product_fk` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category_fk` (`category`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `or_detail`
--
ALTER TABLE `or_detail`
  ADD CONSTRAINT `order_orderdetail_FK` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`),
  ADD CONSTRAINT `orderdetail_product_fk` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_fk` FOREIGN KEY (`category`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
