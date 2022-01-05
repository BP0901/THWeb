-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 05, 2022 lúc 02:50 PM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.4.9

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

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Quần dài nam'),
(2, 'Quần dài nữ'),
(3, 'Quần short'),
(4, 'Áo thun nữ'),
(5, 'Áo thun nam'),
(6, 'Áo khoác'),
(7, 'Ão láº¡nh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `quatity` int(11) NOT NULL,
  KEY `order_orderdetail_FK` (`order_id`),
  KEY `orderdetail_product_fk` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `price`, `quatity`) VALUES
(1, 4, 200000, 2),
(1, 5, 485000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_product`
--

DROP TABLE IF EXISTS `order_product`;
CREATE TABLE IF NOT EXISTS `order_product` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_status` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `order_total_price` float NOT NULL,
  `user_id` int(11) NOT NULL,
  `receiver` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `to_address` text COLLATE utf8_vietnamese_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_methods` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `order_product`
--

INSERT INTO `order_product` (`order_id`, `order_status`, `order_total_price`, `user_id`, `receiver`, `to_address`, `phone_number`, `created_at`, `payment_methods`) VALUES
(1, 'Hoàn thành', 885000, 5, 'User1', '33 Cách Mạng, phường Tân Thành, quận Tân Phú', '0834333860', '2022-01-01 22:35:25', 'Thanh toán khi nhận hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `product_info` text COLLATE utf8_vietnamese_ci NOT NULL,
  `product_price` float NOT NULL,
  `product_img` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `product_price_discount` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_category_fk` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_info`, `product_price`, `product_img`, `product_price_discount`, `category`) VALUES
(1, 'QUẦN THỂ THAO NAM ACTIVE TS', 'Quần short thể thao', 79000, 'vendors/images/product/QuanShort.jpg', 0, 3),
(2, 'QUẦN SHORT GIÓ V3 TS	', 'Quần short chất lượng cao', 282000, 'vendors/images/product/QuanShort2.jpg', 169000, 3),
(3, 'Áo croptop in Sun Kissed', 'Áo thời trang', 210000, 'vendors/images/product/AoThunNu.jpg', 0, 4),
(4, 'ÁO KHOÁC TÚI KHÓA KÉO AB657	', 'Áo khoác nữ thời trang', 265000, 'vendors/images/product/AoKhoac1.jpg', 200000, 6),
(5, 'Áo khoác Jockey chống tia UV', 'Áo khoác thời trang bảo vệ cơ thể', 485000, 'vendors/images/product/AoKhoacNam.jpg', 0, 6),
(6, 'ÁO THUN POLO NAM TS	', 'Áo thun nam cao cấp', 183000, 'vendors/images/product/AoThunNam.jpg', 150000, 5),
(7, 'Ão nam T-shirt cá»• trÃ²n in hÃ¬nh', 'Ão thun in hÃ¬nh Ä‘áº¹p', 199000, './vendors/images/product/S57TS2139001.jpg', 0, 5),
(8, 'Ão hoodie nam', 'Ão hoodie nam cÃ¡ tÃ­nh', 549000, './vendors/images/product/H17TH20085-01.jpg', 500000, 6),
(9, 'Quáº§n Jean nam xanh nháº¡t slimfit', 'Quáº§n Jean', 395000, './vendors/images/product/2_9de67f51e3534714919c66f0c52da729_grande.jpg', 0, 1),
(10, 'Quáº§n Thun DÃ i Ná»‰ Phá»‘i QTD0015', 'Quáº§n dÃ i nam thá»i trang', 225000, './vendors/images/product/1a_ff6cc6bd3c59479cbce699b2edcb4cd7_grande.jpg', 20000, 1),
(11, 'Quáº§n Kaki Nam Cáº¡p Thun Co GiÃ£n', 'Quáº§n co giÃ£n tá»‘t thoáº£i mÃ¡i khi máº·c', 250000, './vendors/images/product/1_78dfad1b88454cf49c17f24e4e14e8fd_grande.jpg', 0, 1),
(12, 'Quáº§n Jogger Váº£i DÃ¹ QJK0024', 'Quáº§n Jogger Váº£i DÃ¹ thá»i trang', 220000, './vendors/images/product/2_0c42460283234344ab19a2e355e0898e_grande.jpg', 0, 1),
(13, 'Quáº§n TÃ¢y Nam QTA0008', 'Quáº§n TÃ¢y Nam Cao cáº¥p', 300000, './vendors/images/product/2_a26c0f09a12242058c071d2d5d6e8f52_grande.jpg', 29000, 1),
(14, 'QUáº¦N JEANS Ná»® á»NG LOE QJB77', 'QUáº¦N JEANS Ná»® á»NG LOE cao cáº¥p', 390000, './vendors/images/product/1-xanhnhat-qjb771010720211126127064.jpg', 359000, 2),
(15, 'QUáº¦N TÃ‚Y CÆ  Báº¢N QB754', 'QUáº¦N TÃ¢y Ná»® cao cáº¥p', 400000, './vendors/images/product/1-den-qb754060720211513070708.jpg', 0, 2),
(16, 'QUáº¦N SUÃ”NG á»NG Rá»˜NG QB778', 'QUáº¦N SUÃ”NG á»NG Rá»˜NG cao cáº¥p', 300000, './vendors/images/product/1-den-qb778010720211536051861.jpg', 0, 2),
(17, 'QUáº¦N CARO á»NG Rá»˜NG QB7102', 'QUáº¦N CARO á»NG Rá»˜NG cao cáº¥p', 289000, './vendors/images/product/1-xam-qb7102060720211045449639.jpg', 269000, 2),
(18, 'Quáº§n Short TÃ¢y BOUTON Signature', 'QUáº¦N SHORT NAM', 290000, './vendors/images/product/img_4205_cc11a65f5150427192175f2103f53259_large.jpg', 0, 3),
(19, 'Quáº§n Short Jeans BOUTON Váº£y SÆ¡n', 'QUáº¦N SHORT NAM', 249000, './vendors/images/product/img_5165_de6dd3ea3222455090731be7303298f5_large.jpg', 0, 3),
(20, 'Quáº§n Short Biá»ƒn BOUTON Printed', 'QUáº¦N SHORT NAM', 200000, './vendors/images/product/img_0458_af676eb016c34db48027c8eb24448445_large.jpg', 0, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sex` tinyint(1) NOT NULL,
  `role` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `date_created`, `sex`, `role`) VALUES
(1, 'Phuc', 'phuc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2021-12-28 20:47:43', 0, 0),
(2, 'Vy', 'vy@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-12-28 20:47:43', 1, 0),
(5, 'User1', 'user1@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-12-31 22:48:51', 0, 1),
(6, 'User2', 'user2@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-12-31 22:48:51', 1, 1),
(8, 'aa', 'a@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2022-01-04 20:46:31', 0, 1);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_orderdetail_FK` FOREIGN KEY (`order_id`) REFERENCES `order_product` (`order_id`),
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
