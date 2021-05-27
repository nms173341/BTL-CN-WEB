-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 20, 2020 lúc 02:39 PM
-- Phiên bản máy phục vụ: 10.1.47-MariaDB-0ubuntu0.18.04.1
-- Phiên bản PHP: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_mvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_web`
--

CREATE TABLE `admin_web` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin_web`
--

INSERT INTO `admin_web` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_web`
--

CREATE TABLE `category_web` (
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category_id` int(11) UNSIGNED NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category_web`
--

INSERT INTO `category_web` (`name`, `parent_id`, `created_at`, `updated_at`, `category_id`, `description`) VALUES
('Kid', 0, '2020-12-05 09:27:33', '2020-12-16 05:00:00', 1, 'Cac san pham danh cho tre em'),
('Men', 0, '2020-12-05 17:15:48', '2020-12-17 05:00:00', 2, 'Cac san pham danh cho dan ong trung nien'),
('Women', 0, '2020-12-17 20:09:34', '2020-12-26 05:00:00', 3, 'Hang cho phu nu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact_web`
--

CREATE TABLE `contact_web` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `status` int(10) NOT NULL,
  `contact_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contact_web`
--

INSERT INTO `contact_web` (`name`, `email`, `message`, `status`, `contact_id`, `created_at`) VALUES
('Ngo Huu Son', 'son.nh31199@gmail.com', 'ưqbrbeqbtb', 0, 1, '2020-12-18 18:05:33'),
('Ngo Huu Son', 'son.nh31199@gmail.com', 'Chao admin, minh la ngo huu son', 0, 2, '2020-12-20 10:52:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail_web`
--

CREATE TABLE `order_detail_web` (
  `order_detail_id` int(11) UNSIGNED NOT NULL,
  `order_code` varchar(20) NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_web`
--

CREATE TABLE `order_web` (
  `order_id` int(11) UNSIGNED NOT NULL,
  `order_code` varchar(20) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `shipping_method` varchar(255) NOT NULL,
  `payment_method` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `shipping` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_web`
--

CREATE TABLE `product_web` (
  `product_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product_web`
--

INSERT INTO `product_web` (`product_name`, `quantity`, `price`, `description`, `image`, `product_id`, `category_id`) VALUES
('Cardigan ', 20, '650.00', 'Front Opening\r\nHood Neck\r\nFull Sleeve\r\nSoft Touch Cotton Fab', 'assets/products/men/shrugBlue.jpg', 1, 2),
('V-Neck T-Shirt', 20, '350.00', '80% Cotton and 20% polyester\r\nV-Neck T-Shirt\r\nSlim Fit\r\nHalf', 'assets/products/men/vneckBlack.jpg', 2, 2),
('V-Neck T-Shirt', 20, '350.00', '80% Cotton and 20% polyester\r\nRound Neck \r\nSlim Fit\r\nHalf Sl', 'assets/products/men/vneckWhite.jpg', 3, 2),
('Round Neck T-Shirt', 20, '350.00', 'Round Neck T-Shirt', 'assets/products/men/roundneckBlack.jpg', 4, 2),
('Round Neck T-Shirt', 20, '350.00', '80% Cotton and 20% polyester Round Neck Slim Fit Half Sleeve', 'assets/products/men/roundneckBlue.jpg', 5, 2),
('Collar T-Shirt', 20, '500.00', '60% Cotton and 40% polyester Collar Neck Slim Fit Half Sleev', 'assets/products/men/collarblack.jpg', 6, 2),
('Collar T-Shirt', 20, '500.00', '60% Cotton and 40% polyester Collar Neck Slim Fit Half Sleev', 'assets/products/men/collarBlue.jpg', 7, 2),
('Half Sleeve Shirt', 20, '500.00', '80% Cotton and 20% polyester \r\nRegular Fit \r\nHalf Sleeve \r\nM', 'assets/products/men/halfsleeveshirtGreen.jpg', 8, 2),
('Half Sleeve Shirt', 20, '500.00', '80% Cotton and 20% polyester \r\nRegular Fit \r\nHalf Sleeve \r\nM', 'assets/products/men/halfsleeveshirtWhite.jpg', 9, 2),
('Full Sleeve Shirt', 20, '650.00', '80% Cotton and 20% polyester\r\nSlim Fit \r\nFull Sleeve \r\nMachi', 'assets/products/men/fullsleeveBlue.jpg', 10, 2),
('Full Sleeve Shirt', 20, '650.00', '80% Cotton and 20% polyester\r\nSlim Fit \r\nFull Sleeve \r\nMachi', 'assets/products/men/fullsleeveRed.jpg', 11, 2),
('Joggers Tracks', 20, '700.00', '97% cotton and 3% elastane\r\nSlim Fit\r\nCold Water Machine Was', 'assets/products/men/joggertracksBlack.jpg', 12, 2),
('Joggers Tracks', 20, '700.00', '97% cotton and 3% elastane\r\nSlim Fit\r\nCold Water Machine Was', 'assets/products/men/joggertracksGrey.jpg', 13, 2),
('Jogger Jeans', 20, '800.00', 'Material:- Denim Jeans\r\nSlim Fit\r\nCold Water Machine Wash\r\nM', 'assets/products/men/joggerjeansBlack.jpg', 14, 2),
('Jogger Jeans', 20, '800.00', 'Material:- Denim Jeans\r\nSlim Fit\r\nCold Water Machine Wash\r\nM', 'assets/products/men/joggerjeansBlue.jpg', 15, 2),
('Jeans', 20, '1000.00', '\r\nDenim Jeans\r\nSlim Fit\r\nCold Water Machine Wash\r\nMade in In', 'assets/products/men/jeansBlack.jpg', 16, 2),
('Jeans', 20, '1000.00', '\r\nDenim Jeans\r\nSlim Fit\r\nCold Water Machine Wash\r\nMade in In', 'assets/products/men/jeansBlue.jpg', 17, 2),
('Shorts', 20, '450.00', '100% combed Cotton\r\nBillabong Shorts\r\nMachine Wash\r\nMade In ', 'assets/products/men/shortsBlack.jpg', 18, 2),
('Shorts', 20, '450.00', '100% combed Cotton\r\nBillabong Shorts\r\nMachine Wash\r\nMade In ', 'assets/products/men/shortsCargo.jpg', 19, 2),
('Shorts', 20, '400.00', '100% combed Cotton\r\nBillabong Shorts\r\nMachine Wash\r\nMade In ', 'assets/products/men/men1.jpeg', 20, 2),
('Jogger Jeans', 20, '450.00', '100% combed Cotton\r\nBillabong Shorts\r\nMachine Wash\r\nMade In ', 'assets/products/men/men2.jpeg', 21, 2),
('Jogger Jeans', 20, '350.00', '100% combed Cotton\r\nBillabong Shorts\r\nMachine Wash\r\nMade In ', 'assets/products/men/men3.jpeg', 22, 2),
('Jeans', 20, '450.00', '100% combed Cotton\r\nBillabong Shorts\r\nMachine Wash\r\nMade In ', 'assets/products/men/men4.jpeg', 23, 2),
('Jogger Jeans', 20, '450.00', '100% combed Cotton\r\nBillabong Shorts\r\nMachine Wash\r\nMade In ', 'assets/products/men/men5.jpeg', 24, 2),
('Black Croptop', 20, '500.00', 'Black CropTop', 'assets/products/women/croptopBlack.jpg', 25, 3),
('Pink CropTop', 20, '600.00', 'Pink CropTop', 'assets/products/women/croptopPink.jpg', 26, 3),
('Blue Gown', 30, '3000.00', 'Blue Gown', 'assets/products/women/gownBlue.jpg', 27, 3),
('Red Gown', 30, '4000.00', 'Red Gown', 'assets/products/women/gownRed.jpg', 28, 3),
('Black Jeans', 25, '1500.00', 'Black Jeans', 'assets/products/women/jeansBlack.jpg', 29, 3),
('Blue Jeans', 15, '1400.00', 'Blue Jeans', 'assets/products/women/jeansblue.jpg', 30, 3),
('Black Leggings', 20, '600.00', 'Black Leggings', 'assets/products/women/leggingsBlack.jpg', 31, 3),
('Grey Leggings', 40, '700.00', 'Grey Leggings', 'assets/products/women/leggingsGrey.jpg', 32, 3),
('Black One Piece', 20, '3500.00', 'Black One Piece', 'assets/products/women/onepieceBlack.jpg', 33, 3),
('Blue One Piece', 25, '3750.00', 'Blue One Piece', 'assets/products/women/onepieceBlue.jpg', 34, 3),
('Black & White Ringtees', 20, '900.00', 'Black & White Ringtees', 'assets/products/women/ringteesBlackWhite.jpg', 35, 3),
('', 30, '1799.00', 'Red & White Ringtees', 'assets/products/women/ringteesRedWhite.jpg', 36, 3),
('Blue Shirt', 50, '1500.00', 'Blue Shirt', 'assets/products/women/shirtBlue.jpg', 37, 3),
('Maroon Shirt', 40, '1600.00', 'Maroon Shirt', 'assets/products/women/shirtMaroon.jpg', 38, 3),
('Black Shorts', 30, '700.00', 'Black Shorts', 'assets/products/women/shortsBlack.jpg', 39, 3),
('Blue Shorts', 30, '900.00', 'Blue Shorts', 'assets/products/women/shortsBlue.jpg', 40, 3),
('Black Skirt', 20, '1300.00', 'Black Skirt', 'assets/products/women/skirtBlack.jpg', 41, 3),
('Blue Skirt', 35, '1500.00', 'Blue Skirt', 'assets/products/women/skirtBlue.jpg', 42, 3),
('Blue Top', 40, '1500.00', 'Blue Top', 'assets/products/women/topBlue.jpg', 43, 3),
('Pink Top', 50, '1200.00', 'Pink Top', 'assets/products/women/topPink.jpg', 44, 3),
('Yellow Skirt', 50, '1000.00', 'Yellow Skirt', 'assets/products/women/women1.jpeg', 45, 3),
('Skirt', 50, '1500.00', 'Skirt', 'assets/products/women/women2.jpeg', 46, 3),
('Black Skirt', 50, '1200.00', 'Black Skirt', 'assets/products/women/women3.jpeg', 47, 3),
('Sport Clothes', 50, '1200.00', 'Sport Clothes', 'assets/products/women/women4.jpeg', 48, 3),
('Black Collar T-Shirt', 20, '500.00', 'Black Collar T-Shirt', 'assets/products/kids/collartshirtBlack.jpg', 49, 1),
('White Collar T-Shirt', 25, '700.00', 'White Collar T-Shirt', 'assets/products/kids/collartshirtWhite.jpg', 50, 1),
('Red Full Sleeve Shirt', 25, '1200.00', 'Red Full Sleeve Shirt', 'assets/products/kids/fullsleeveRedBlack.jpg', 51, 1),
('White Full Sleeve Shirt', 20, '1300.00', 'White Full Sleeve Shirt', 'assets/products/kids/fullsleeveWhite.jpg', 52, 1),
('White Half Sleeve Shirt', 25, '1500.00', 'White Half Sleeve Shirt', 'assets/products/kids/halfsleeveBlackWhite.jpg', 53, 1),
('Red & White Half Sleeve Shirt', 25, '1400.00', 'Red & White Half Sleeve Shirt', 'assets/products/kids/halfsleeveWhiteRed.jpg', 54, 1),
('Black Jeans', 25, '1700.00', 'Black Jeans', 'assets/products/kids/jeansBlack.jpg', 55, 1),
('Blue Jeans', 25, '1800.00', 'Blue Jeans', 'assets/products/kids/jeansBlue.jpg', 56, 1),
('Black Jogger Jeans', 25, '1600.00', 'Black Jogger Jeans', 'assets/products/kids/joggerjeansBlack.jpg', 57, 1),
('Blue Jogger Jeans', 50, '900.00', 'Blue Jogger Jeans', 'assets/products/kids/joggerjeansBlue.jpg', 58, 1),
('Black Round Neck T-Shirt', 50, '600.00', 'Black Round Neck T-Shirt', 'assets/products/kids/roundneckBlack.jpg', 59, 1),
('Red Round Neck T-Shirt', 50, '700.00', 'Red Round Neck T-Shirt', 'assets/products/kids/roundneckRed.jpg', 60, 1),
('Blue Shorts', 50, '300.00', 'Blue Shorts', 'assets/products/kids/shortsBlue.jpg', 61, 1),
('Green Shorts', 25, '350.00', 'Green Shorts', 'assets/products/kids/shortsGreen.jpg', 62, 1),
('Black Skirt', 25, '600.00', 'Black Skirt', 'assets/products/kids/skirtBlack.jpg', 63, 1),
('Pink Skirt', 25, '700.00', 'Pink Skirt', 'assets/products/kids/skirtPink.jpg', 64, 1),
('Black Track Pant', 25, '900.00', 'Black Track Pant', 'assets/products/kids/trackpantBlack.jpg', 65, 1),
('Grey Track Pant', 30, '800.00', 'Grey Track Pant', 'assets/products/kids/trackpantGrey.jpg', 66, 1),
('Black V-Neck T-Shirt', 35, '1300.00', 'Black V-Neck T-Shirt', 'assets/products/kids/vneckBlack.jpg', 67, 1),
('Green Top for Girls', 35, '1000.00', 'Green Top for Girls', 'assets/products/kids/vneckGreen.jpg', 68, 1),
('Sport Clothes for children', 35, '1000.00', 'Sport Clothes for children', 'assets/products/kids/kid1.jpeg', 69, 1),
('Sport Clothes for children', 35, '1000.00', 'Sport Clothes for children', 'assets/products/kids/kid2.jpeg', 70, 1),
('Sport Clothes for children', 35, '1000.00', 'Sport Clothes for children', 'assets/products/kids/kid3.jpeg', 71, 1),
('Sport Clothes for children', 35, '1000.00', 'Sport Clothes for children', 'assets/products/kids/kid4.jpeg', 72, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_web`
--

CREATE TABLE `user_web` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='User table';

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_web`
--
ALTER TABLE `admin_web`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `category_web`
--
ALTER TABLE `category_web`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `contact_web`
--
ALTER TABLE `contact_web`
  ADD PRIMARY KEY (`contact_id`);

--
-- Chỉ mục cho bảng `order_detail_web`
--
ALTER TABLE `order_detail_web`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_code` (`order_code`);

--
-- Chỉ mục cho bảng `order_web`
--
ALTER TABLE `order_web`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_code` (`order_code`),
  ADD KEY `order_code_2` (`order_code`),
  ADD KEY `order_code_3` (`order_code`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `order_code_4` (`order_code`);

--
-- Chỉ mục cho bảng `product_web`
--
ALTER TABLE `product_web`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `user_web`
--
ALTER TABLE `user_web`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_web`
--
ALTER TABLE `admin_web`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `category_web`
--
ALTER TABLE `category_web`
  MODIFY `category_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `contact_web`
--
ALTER TABLE `contact_web`
  MODIFY `contact_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `order_detail_web`
--
ALTER TABLE `order_detail_web`
  MODIFY `order_detail_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT cho bảng `order_web`
--
ALTER TABLE `order_web`
  MODIFY `order_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT cho bảng `product_web`
--
ALTER TABLE `product_web`
  MODIFY `product_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT cho bảng `user_web`
--
ALTER TABLE `user_web`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail_web`
--
ALTER TABLE `order_detail_web`
  ADD CONSTRAINT `order_detail_web_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_web` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_web_ibfk_2` FOREIGN KEY (`order_code`) REFERENCES `order_web` (`order_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order_web`
--
ALTER TABLE `order_web`
  ADD CONSTRAINT `order_web_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_web` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product_web`
--
ALTER TABLE `product_web`
  ADD CONSTRAINT `product_web_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category_web` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
