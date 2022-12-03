-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 01:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4_shop2`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_id`, `title`, `slug`) VALUES
(1, 0, 'Tin công nghệ', 'tin-cong-nghe'),
(2, 0, 'Tin thời sự', 'tin-thoi-su');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `logo`, `address`, `phone`, `email`, `favicon`) VALUES
(1, 'Macstore', 'Logo_2.png', '12 Lạch Tray, Hải Phòng', '0123456789', 'macstore@gmail.com', '451b401dde3eeefc2808bed66ab5b796.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `code`) VALUES
(1, 'menu chính', 'primary');

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE `menu_item` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`json`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `name`, `value`) VALUES
(1, 'mail_protocol', 'smtp'),
(2, 'mail_SMTPHost', 'host07.emailserver.vn'),
(3, 'mail_SMTPPort', '465'),
(4, 'mail_SMTPCrypto', 'ssl'),
(5, 'site_status', '1'),
(6, 'site_title', 'Phòng khám bác sĩ Chính'),
(7, 'site_metatitle', 'Phòng khám bác sĩ Chính'),
(8, 'site_description', 'Phòng khám bác sĩ Chính'),
(9, 'mail_user', 'sale@macstorehaiphong.com'),
(10, 'mail_password', 'chung193a@'),
(11, 'site_mail', 'sale@macstorehaiphong.com');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `published` tinyint(4) NOT NULL,
  `publishat` datetime NOT NULL,
  `createdat` datetime NOT NULL,
  `updateat` datetime NOT NULL,
  `content` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `authorid`, `title`, `description`, `slug`, `published`, `publishat`, `createdat`, `updateat`, `content`, `img`) VALUES
(1, 1, 'Giới thiệu', 'Giới thiệu', 'gioi-thieu', 1, '2022-10-28 19:37:15', '2022-10-28 19:37:15', '2022-10-28 19:37:15', '<p>Giới thiệu</p>\r\n', ''),
(2, 1, 'Liên hệ', 'Liên hệ', 'lien-he', 1, '2022-10-28 19:37:25', '2022-10-28 19:37:25', '2022-10-28 19:37:25', '<p>Liên hệ</p>\r\n', ''),
(3, 1, 'Chính sách đổi trả', 'Chính sách đổi trả', 'chinh-sach-doi-tra', 1, '2022-10-28 19:37:58', '2022-10-28 19:37:58', '2022-10-28 19:37:58', '<p>Chính sách đổi trả</p>\r\n', ''),
(4, 1, 'Hướng dẫn đặt hàng', 'Hướng dẫn đặt hàng', 'huong-dan-dat-hang', 1, '2022-10-28 19:38:13', '2022-10-28 19:38:13', '2022-10-28 19:38:13', '<p>Hướng dẫn đặt hàng</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `permission` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`permission`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `group_id`, `permission`) VALUES
(1, 1, '{\"category\":[\"1\",\"1\",\"1\",\"1\"],\"info\":[\"1\",\"1\",\"1\",\"1\"],\"menu\":[\"1\",\"1\",\"1\",\"1\"],\"menu_item\":[\"1\",\"1\",\"1\",\"1\"],\"page\":[\"1\",\"1\",\"1\",\"1\"],\"post\":[\"1\",\"1\",\"1\",\"1\"],\"seo\":[\"1\",\"1\",\"1\",\"1\"],\"user\":[\"1\",\"1\",\"1\",\"1\"]}');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  `parentid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `published` tinyint(4) NOT NULL,
  `publishat` datetime NOT NULL,
  `createdat` datetime NOT NULL,
  `updateat` datetime NOT NULL,
  `content` text NOT NULL,
  `trash` int(11) NOT NULL,
  `img` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `authorid`, `parentid`, `title`, `description`, `slug`, `published`, `publishat`, `createdat`, `updateat`, `content`, `trash`, `img`) VALUES
(1, 1, 1, 'Google sẽ khai tử Chrome trên các nền tảng Windown cũ', 'Google đã chính thức khai tử Chrome trên các nền tảng windows 7 và 8.1. Bản vá lỗi cuối cùng sẽ được cập nhập vào tháng 2 năm 2023. Việc chấm dứt hỗ trợ cho Google Chrome trên các nền tảng cũ trùng với thời điểm Windows 7 và 8,1 bị chính Microsoft chính thức dừng hỗ trợ. Google cho rằng phần mềm của họ cần được hoạt động trên nền tảng được bảo hộ.', 'google-se-khai-tu-chrome-tren-cac-nen-tang-windown-cu', 1, '2022-11-30 19:10:45', '2022-11-30 19:10:45', '2022-11-30 19:10:45', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(51, 51, 51);font-family:Helvetica, Arial, sans-serif;font-size:16px;font-stretch:inherit;font-style:normal;font-variant-caps:normal;font-variant-east-asian:inherit;font-variant-ligatures:normal;font-variant-numeric:inherit;font-weight:400;letter-spacing:normal;line-height:inherit;margin:0px 0px 1.25em;orphans:2;overflow-wrap:break-word;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-rendering:optimizelegibility;text-transform:none;vertical-align:baseline;white-space:normal;widows:2;word-spacing:0px;\">“Nếu bạn hiện đang sử dụng Windows 7 hoặc Windows 8.1, chúng tôi khuyến khích bạn chuyển sang phiên bản Windows được hỗ trợ trước ngày đó để đảm bảo bạn tiếp tục nhận được các bản cập nhật bảo mật mới nhất và các tính năng của Chrome”, Google cho biết.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(51, 51, 51);font-family:Helvetica, Arial, sans-serif;font-size:16px;font-stretch:inherit;font-style:normal;font-variant-caps:normal;font-variant-east-asian:inherit;font-variant-ligatures:normal;font-variant-numeric:inherit;font-weight:400;letter-spacing:normal;line-height:inherit;margin:0px 0px 1.25em;orphans:2;overflow-wrap:break-word;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-rendering:optimizelegibility;text-transform:none;vertical-align:baseline;white-space:normal;widows:2;word-spacing:0px;\">Microsoft lặp lại điều đó khi tuyên bố khai tử Windows 7 và 8.1: “Hãy nhớ rằng việc sử dụng phần mềm không được hỗ trợ có thể làm tăng nguy cơ bảo mật của tổ chức hoặc ảnh hưởng đến khả năng đáp ứng các nghĩa vụ tuân thủ của công ty.”</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);border-width:0px;box-sizing:border-box;color:rgb(51, 51, 51);font-family:Helvetica, Arial, sans-serif;font-size:16px;font-stretch:inherit;font-style:normal;font-variant-caps:normal;font-variant-east-asian:inherit;font-variant-ligatures:normal;font-variant-numeric:inherit;font-weight:400;letter-spacing:normal;line-height:inherit;margin:0px 0px 1.25em;orphans:2;overflow-wrap:break-word;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-rendering:optimizelegibility;text-transform:none;vertical-align:baseline;white-space:normal;widows:2;word-spacing:0px;\">Tuy nhiên, Chrome sẽ vẫn hoạt động trên Windows 7 và 8.1 sau khi hỗ trợ kết thúc, nhưng trình duyệt sẽ không nhận được bất kỳ bản cập nhật bổ sung nào – bao gồm các bản vá bảo mật.</p>', 0, 'google-chrome-ends-support-win-7-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `content_type` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `content_id`, `content_type`, `meta_title`, `meta_description`) VALUES
(1, 1, 'category', 'Tin công nghệ', 'Tin công nghệ cập nhật mới nhất'),
(2, 2, 'category', 'Tin thời sự', 'Tin thời sự cập nhật nhanh nhất'),
(3, 1, 'post', 'Google sẽ khai tử Chrome trên các nền tảng Windown cũ', 'Google sẽ khai tử Chrome trên các nền tảng Windown cũ'),
(112, 10, 'shopcategory', 'Laptop', 'Các dòng máy tính phục vụ văn phòng, dùng cho thiết kế đồ họa hoặc kiến trúc sư'),
(113, 11, 'shopcategory', 'Laptop gaming', 'Các dòng máy tính cho game thủ'),
(114, 12, 'shopcategory', 'Robot hút bụi', 'Robot hút bụi'),
(115, 13, 'shopcategory', 'Máy lọc nước', 'Máy lọc nước'),
(116, 48, 'product', 'Imac 2014', 'Imac 2014'),
(117, 49, 'product', 'Fujisu lifebook uh75/k', 'Fujisu lifebook uh75/k'),
(118, 50, 'product', 'HP Gaming 15-CX0054TX', 'HP Gaming 15-CX0054TX'),
(119, 51, 'product', 'Nec Lavie', 'Nec Lavie'),
(120, 52, 'product', 'Toshiba T75 (trắng)', 'Toshiba T75 (trắng)'),
(121, 53, 'product', 'Fujisu lifebook nh77/cd', 'Fujisu lifebook nh77/cd'),
(122, 54, 'product', 'Imac 2010 21inch', 'Imac 2010 21inch'),
(123, 55, 'product', 'Imac 2010 27inch', 'Imac 2010 27inch'),
(124, 56, 'product', 'Nec Lavie PC-GN16CJSAA', 'Nec Lavie PC-GN16CJSAA'),
(125, 57, 'product', 'Fujitsu MV Biblo', 'Fujitsu MV Biblo'),
(126, 58, 'product', 'Toshiba T75/AWS', 'Toshiba T75/AWS'),
(127, 59, 'product', 'Toshiba core2', 'Toshiba core2'),
(128, 60, 'product', 'Case Mac Pro', 'Case Mac Pro'),
(129, 61, 'product', 'Dell 5458', 'Dell 5458'),
(130, 62, 'product', 'Nec Lavie PC-GN16', 'Nec Lavie PC-GN16'),
(131, 63, 'product', 'Imac late 2013', 'Imac late 2013'),
(132, 64, 'product', 'HP Envy 17', 'HP Envy 17'),
(133, 65, 'product', 'Nec Lavie đen', 'Nec Lavie đen'),
(134, 66, 'product', 'Nec Lavie LS150', 'Nec Lavie LS150'),
(135, 67, 'product', 'Nec Lavie LX850/L', 'Nec Lavie LX850/L'),
(136, 68, 'product', 'Toshiba B65', 'Toshiba B65'),
(137, 69, 'product', 'HP Probook 450 G7', 'HP Probook 450 G7'),
(138, 70, 'product', 'HP Probook 450 G3', 'HP Probook 450 G3'),
(139, 71, 'product', 'Nec Versapro PK-VK22', 'Nec Versapro PK-VK22'),
(140, 72, 'product', 'Tosshiba B65/y', 'Tosshiba B65/y'),
(141, 73, 'product', 'Tosshiba B65/r', 'Tosshiba B65/r'),
(142, 74, 'product', 'Dell Inspiron 15 7567 Gaming', 'Dell Inspiron 15 7567 Gaming'),
(143, 75, 'product', 'MSI GP75 Leopard 9SD', 'MSI GP75 Leopard 9SD'),
(144, 76, 'product', 'Fujisu LIFEBOOK AH53/E3', 'Fujisu LIFEBOOK AH53/E3'),
(145, 77, 'product', 'MouseComputer BC-GTUNEI77G16N1', 'MouseComputer BC-GTUNEI77G16N1'),
(146, 78, 'product', 'Lenovo Legion Y7000', 'Lenovo Legion Y7000'),
(147, 79, 'product', 'Dell G3', 'Dell G3'),
(148, 80, 'product', 'THIRDWAVE GALLERIA QSF960HE', 'THIRDWAVE GALLERIA QSF960HE'),
(149, 81, 'product', 'Acer Nitro 5 AN515-52', 'Acer Nitro 5 AN515-52'),
(150, 82, 'product', 'GR1650RGF-T THIRDWAVE Thirdwave', 'GR1650RGF-T THIRDWAVE Thirdwave'),
(151, 83, 'product', 'Dell XPS 9310', 'Dell XPS 9310'),
(152, 84, 'product', '', ''),
(153, 85, 'product', 'Laptop Workstation Cũ HP Zbook 15 G3 - Intel Core i7 / Xeon', 'Laptop Workstation Cũ HP Zbook 15 G3 - Intel Core i7 / Xeon'),
(154, 1, 'page', 'Giới thiệu', 'Giới thiệu'),
(155, 2, 'page', 'Liên hệ', 'Liên hệ'),
(156, 3, 'page', 'Chính sách đổi trả', 'Chính sách đổi trả'),
(157, 4, 'page', 'Hướng dẫn đặt hàng', 'Hướng dẫn đặt hàng'),
(158, 5, 'category', 'Tin công nghệ', 'Tin công nghệ'),
(159, 6, 'category', 'Tuyển dụng', 'Tuyển dụng');

-- --------------------------------------------------------

--
-- Table structure for table `shop_category`
--

CREATE TABLE `shop_category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `is_default` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop_category`
--

INSERT INTO `shop_category` (`id`, `title`, `description`, `parent_id`, `slug`, `is_default`) VALUES
(1, 'Mac ', 'Các dòng máy tính apple', 0, 'mac-', 0),
(2, 'Laptop', 'Các dòng máy tính phục vụ văn phòng, dùng cho thiết kế đồ họa hoặc kiến trúc sư', 0, 'laptop', 0),
(3, 'Laptop gaming', 'Các dòng máy tính cho game thủ', 0, 'laptop-gaming', 0),
(4, 'Robot hút bụi', 'Robot hút bụi', 0, 'robot-hut-bui', 0),
(5, 'Máy lọc nước', 'Máy lọc nước', 0, 'may-loc-nuoc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_customer`
--

CREATE TABLE `shop_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `matp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop_customer`
--

INSERT INTO `shop_customer` (`id`, `name`, `email`, `phone`, `username`, `password`, `address`, `matp`) VALUES
(13, 'Vũ Đình Chung', 'chunghello193@gmail.com', 796496199, 'chung193', '$2y$10$MZ1t3OY4vDQeoQWlNGjyYO/z0J9.a4DBFFVKI/SrIlAhVoZqkIJa6', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_discount`
--

CREATE TABLE `shop_discount` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `banner` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `ratio` int(11) NOT NULL,
  `money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop_discount`
--

INSERT INTO `shop_discount` (`id`, `title`, `description`, `from_date`, `to_date`, `banner`, `slug`, `ratio`, `money`) VALUES
(1, 'Mã mặc định', 'Mã mặc định', '2022-09-26', '2023-09-26', 'special-dollar-one-only-deal-sale-banner_1017-31784.jpg', 'ma-mac-dinh', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_order`
--

CREATE TABLE `shop_order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop_order`
--

INSERT INTO `shop_order` (`id`, `user_id`, `created_at`, `updated_at`, `status`, `total`) VALUES
(70, 13, '2022-10-28 20:58:18', '2022-10-28 20:58:18', 0, 23980000);

-- --------------------------------------------------------

--
-- Table structure for table `shop_order_detail`
--

CREATE TABLE `shop_order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop_order_detail`
--

INSERT INTO `shop_order_detail` (`id`, `order_id`, `product_id`, `qty`) VALUES
(74, 70, 85, 2);

-- --------------------------------------------------------

--
-- Table structure for table `shop_producer`
--

CREATE TABLE `shop_producer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop_producer`
--

INSERT INTO `shop_producer` (`id`, `name`, `img`, `url`) VALUES
(14, 'Apple', 'Apple_logo.png', 'https://www.apple.com/'),
(15, 'HP', 'HP_logo.png', 'https://www.hp.com/vn-vi/home.html'),
(16, 'Dell', 'Dell_logo.png', 'https://www.dell.com/en-vn'),
(17, '\rLenovo', 'Lenovo_logo.png', 'https://www.lenovo.com/vn/vn/'),
(18, '\nMSI', 'MSI_logo.png', 'https://vn.msi.com/'),
(19, '\rAcer', 'Acer_logo.png', 'https://www.acer.com/vn-vi/'),
(20, '\rAsus', 'Asus_logo.png', 'https://www.asus.com/vn/'),
(21, 'Fujitsu', 'Fujitsu_logo.png', 'https://www.fujitsu.com/vn/vi/'),
(22, 'Toshiba', 'Toshiba_logo.png', 'https://www.toshiba.com/tai/'),
(23, 'NEC', 'NEC_logo.png', 'https://vn.nec.com/'),
(24, 'Microsoft', 'Microsoft_logo.png', 'https://www.microsoft.com/vi-vn');

-- --------------------------------------------------------

--
-- Table structure for table `shop_product`
--

CREATE TABLE `shop_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `producer_id` int(11) NOT NULL,
  `summary` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `detail` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `img_list` text NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `create_id` int(11) NOT NULL,
  `update_id` int(11) NOT NULL,
  `show_price` tinyint(1) NOT NULL,
  `id_discount` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop_product`
--

INSERT INTO `shop_product` (`id`, `name`, `price`, `category_id`, `producer_id`, `summary`, `slug`, `description`, `detail`, `img`, `img_list`, `published`, `created_at`, `updated_at`, `create_id`, `update_id`, `show_price`, `id_discount`, `qty`, `parent_id`) VALUES
(48, 'Imac 2014', 1000000, 1, 1, '', 'imac-2014', 'Đang được cập nhật', 'Đang được cập nhật', 'iMac_21.5FHD_2014_1.jpg', 'imac-21-5inch-2014-mf883.jpg,imac-2014-21-5inch-mf883-1.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10001, 0),
(49, 'Fujisu lifebook uh75/k', 1000000, 2, 8, '', 'fujisu-lifebook-uh75-k', 'Đang được cập nhật', 'Đang được cập nhật', 'fujiUH75.jpg', 'b0dff4f2e44e81797f99043d9d81644b.jpg, fujiUH75_1.jpg, 2-Fujitsu-Lifebook-UH75.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10002, 0),
(50, 'HP Gaming 15-CX0054TX', 1000000, 2, 2, '', 'hp-gaming-15-cx0054tx', 'Đang được cập nhật', 'Đang được cập nhật', 'GS.005590_FEATURE_68641.jpg', '5045_4835_15_dk0003tx_4.jpg, hp-pavilion-gaming-15-dk1159tx-i7-10750h-8gb-32gb-600x600.jpg, ', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10003, 0),
(51, 'Nec Lavie', 1000000, 2, 10, '', 'nec-lavie', 'Đang được cập nhật', 'Đang được cập nhật', 'csm_PM55GNAR_7_2116b6ffd0.png', '4232647_nec_lavie_nm_2018_678_678x452.jpg, cvf1305607823.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10004, 0),
(52, 'Toshiba T75 (trắng)', 1000000, 2, 9, '', 'toshiba-t75-trang-', 'Đang được cập nhật', 'Đang được cập nhật', 'Asus-FX516PC-HN011T-0-1.jpg', '2022-07-11-20-05-img-6270-319.jpg, dsc04397-fileminimizer-6869.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10005, 0),
(53, 'Fujisu lifebook nh77/cd', 1000000, 2, 8, '', 'fujisu-lifebook-nh77-cd', 'Đang được cập nhật', 'Đang được cập nhật', 'i-img1200x1200-1657497756qswr2j710103.jpg', 'i-img1200x1200-1657497756jhpidd710103.jpg, FUJITSU E734 2.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10006, 0),
(54, 'Imac 2010 21inch', 1000000, 1, 1, '', 'imac-2010-21inch', 'Đang được cập nhật', 'Đang được cập nhật', 'DzmztgWMgqpCPNNhg0UNTKvXArwOJXuN5Thj5A4R.png', 'imac-21-5inch-2014-mf883.jpg,imac-2014-21-5inch-mf883-1.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10007, 0),
(55, 'Imac 2010 27inch', 1000000, 1, 1, '', 'imac-2010-27inch', 'Đang được cập nhật', 'Đang được cập nhật', 'DzmztgWMgqpCPNNhg0UNTKvXArwOJXuN5Thj5A4R.png', 'imac-21-5inch-2014-mf883.jpg,imac-2014-21-5inch-mf883-1.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10008, 0),
(56, 'Nec Lavie PC-GN16CJSAA', 1000000, 2, 10, '', 'nec-lavie-pc-gn16cjsaa', 'Đang được cập nhật', 'Đang được cập nhật', 'csm_PM55GNAR_7_2116b6ffd0.png', '4232647_nec_lavie_nm_2018_678_678x452.jpg, cvf1305607823.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10009, 0),
(57, 'Fujitsu MV Biblo', 1000000, 2, 8, '', 'fujitsu-mv-biblo', 'Đang được cập nhật', 'Đang được cập nhật', 'i-img1200x1200-1657497756qswr2j710103.jpg', 'i-img1200x1200-1657497756jhpidd710103.jpg, FUJITSU E734 2.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10010, 0),
(58, 'Toshiba T75/AWS', 1000000, 2, 9, '', 'toshiba-t75-aws', 'Đang được cập nhật', 'Đang được cập nhật', 'Asus-FX516PC-HN011T-0-1.jpg', '2022-07-11-20-05-img-6270-319.jpg, dsc04397-fileminimizer-6869.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10011, 0),
(59, 'Toshiba core2', 1000000, 2, 9, '', 'toshiba-core2', 'Đang được cập nhật', 'Đang được cập nhật', 'Asus-FX516PC-HN011T-0-1.jpg', '2022-07-11-20-05-img-6270-319.jpg, dsc04397-fileminimizer-6869.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10012, 0),
(60, 'Case Mac Pro', 1000000, 2, 1, '', 'case-mac-pro', 'Đang được cập nhật', 'Đang được cập nhật', '1-1571021668-width660height440.jpg', '33159-57832-header-l.jpg,20170805_d1772ba8af309bc1566e576f125ddb09_1501945880.jpeg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10013, 0),
(61, 'Dell 5458', 1000000, 2, 3, '', 'dell-5458', 'Đang được cập nhật', 'Đang được cập nhật', 'dell-inspiron-5458-i3-5005u-4gb-500gb-win10-office-3-1.jpg', '3813_1a.png,dell-inspiron-5458-i5-5200u-4gb-1tb-win81-slider01.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10014, 0),
(62, 'Nec Lavie PC-GN16', 1000000, 2, 10, '', 'nec-lavie-pc-gn16', 'Đang được cập nhật', 'Đang được cập nhật', 'csm_PM55GNAR_7_2116b6ffd0.png', '4232647_nec_lavie_nm_2018_678_678x452.jpg, cvf1305607823.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10015, 0),
(63, 'Imac late 2013', 1000000, 2, 1, '', 'imac-late-2013', 'Đang được cập nhật', 'Đang được cập nhật', 'iMac_21.5FHD_2014_1.jpg', 'imac-21-5inch-2014-mf883.jpg,imac-2014-21-5inch-mf883-1.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10016, 0),
(64, 'HP Envy 17', 1000000, 2, 2, '', 'hp-envy-17', 'Đang được cập nhật', 'Đang được cập nhật', 'hp-envy-17-ch0011nr-gen-11th-1645172128.jpg', 'c06074418.png,91AYRDxD5eL__SL1500_.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10017, 0),
(65, 'Nec Lavie đen', 1000000, 2, 10, '', 'nec-lavie-den', 'Đang được cập nhật', 'Đang được cập nhật', 'nec-lavie-2018-laptop-125-chi-900g-pin-12-tieng-khong-quat-vien-mong_5.jpg', 'laviehz2017-11.jpeg,3381475_NEC_Lavie_L_11.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10018, 0),
(66, 'Nec Lavie LS150', 1000000, 2, 10, '', 'nec-lavie-ls150', 'Đang được cập nhật', 'Đang được cập nhật', 'nec-lavie-2018-laptop-125-chi-900g-pin-12-tieng-khong-quat-vien-mong_5.jpg', 'laviehz2017-11.jpeg,3381475_NEC_Lavie_L_11.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10019, 0),
(67, 'Nec Lavie LX850/L', 1000000, 2, 10, '', 'nec-lavie-lx850-l', 'Đang được cập nhật', 'Đang được cập nhật', 'nec-lavie-2018-laptop-125-chi-900g-pin-12-tieng-khong-quat-vien-mong_5.jpg', 'laviehz2017-11.jpeg,3381475_NEC_Lavie_L_11.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10020, 0),
(68, 'Toshiba B65', 1000000, 2, 9, '', 'toshiba-b65', 'Đang được cập nhật', 'Đang được cập nhật', 'Asus-FX516PC-HN011T-0-1.jpg', '2022-07-11-20-05-img-6270-319.jpg, dsc04397-fileminimizer-6869.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10021, 0),
(69, 'HP Probook 450 G7', 1000000, 2, 2, '', 'hp-probook-450-g7', 'Đang được cập nhật', 'Đang được cập nhật', '40899_hp_probook_450_g7_ha3.jpg', '38142_laptop_hp_probook_450_g7_9gq43pa_3.png,37770_laptop_hp_probook_450_g6_8az17pa_3.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10022, 0),
(70, 'HP Probook 450 G3', 1000000, 2, 2, '', 'hp-probook-450-g3', 'Đang được cập nhật', 'Đang được cập nhật', '40899_hp_probook_450_g7_ha3.jpg', '38142_laptop_hp_probook_450_g7_9gq43pa_3.png,37770_laptop_hp_probook_450_g6_8az17pa_3.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10023, 0),
(71, 'Nec Versapro PK-VK22', 1000000, 2, 10, '', 'nec-versapro-pk-vk22', 'Đang được cập nhật', 'Đang được cập nhật', 'Ban-Laptop-Nec-Versapro-VK-22-gia-si-sieu-re-Uy-Tin-tphcm-Sinh-Vien-Van-Phong-Doanh-Nhan-Game-Do-Hoa-Core-i3-i5-i7-Ram-4Gb-8Gb-SSD-128Gb-256Gb-512Gb-4.jpg', '69a444ccd22b20a7b6a74fa3a8e6eae6.jpg, Ban-Laptop-Nec-Versapro-VK-22-gia-si-sieu-re-Uy-Tin-tphcm-Sinh-Vien-Van-Phong-Doanh-Nhan-Game-Do-Hoa-Core-i3-i5-i7-Ram-4Gb-8Gb-SSD-128Gb-256Gb-512Gb-8.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10024, 0),
(72, 'Tosshiba B65/y', 1000000, 2, 9, '', 'tosshiba-b65-y', 'Đang được cập nhật', 'Đang được cập nhật', 'Asus-FX516PC-HN011T-0-1.jpg', '2022-07-11-20-05-img-6270-319.jpg, dsc04397-fileminimizer-6869.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10025, 0),
(73, 'Tosshiba B65/r', 1000000, 2, 9, '', 'tosshiba-b65-r', 'Đang được cập nhật', 'Đang được cập nhật', 'Asus-FX516PC-HN011T-0-1.jpg', '2022-07-11-20-05-img-6270-319.jpg, dsc04397-fileminimizer-6869.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10026, 0),
(74, 'Dell Inspiron 15 7567 Gaming', 1000000, 2, 3, '', 'dell-inspiron-15-7567-gaming', 'Đang được cập nhật', 'Đang được cập nhật', 'Dell-Inspiron-15-7567-i7-7700HQ-GTX-1050Ti-02.jpg', 'Dell-7566-7567-3.jpg, dell-7566-500-500_7cd79a4113db41a98bba99c610a76175_master.webp', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10027, 0),
(75, 'MSI GP75 Leopard 9SD', 1000000, 2, 5, '', 'msi-gp75-leopard-9sd', 'Đang được cập nhật', 'Đang được cập nhật', '4907_4325_9s7_17e221_485_image_main_600x600.jpg', '4907_4325_20190507181530_934_.jpg,04qrt21wbhzjj.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10028, 0),
(76, 'Fujisu LIFEBOOK AH53/E3', 1000000, 2, 8, '', 'fujisu-lifebook-ah53-e3', 'Đang được cập nhật', 'Đang được cập nhật', 'FMVA53E3Wb.jpg', 'gxcjx3ezbx98dep.jpg,k1051259028.1.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10029, 0),
(77, 'MouseComputer BC-GTUNEI77G16N1', 1000000, 2, 0, '', 'mousecomputer-bc-gtunei77g16n1', 'Đang được cập nhật', 'Đang được cập nhật', '00000003667562_A01.jpg', '2133015933716_1.jpg,2133015933716.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10030, 0),
(78, 'Lenovo Legion Y7000', 1000000, 3, 4, '', 'lenovo-legion-y7000', 'Đang được cập nhật', 'Đang được cập nhật', '7-2-52ba85a2-57d1-4a45-8f34-884e492210c1.webp', '4662_lenovo_legion_y7000__2_.png, lenovo-legion-y7000-15irh.webp', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10031, 0),
(79, 'Dell G3', 1000000, 2, 3, '', 'dell-g3', 'Đang được cập nhật', 'Đang được cập nhật', 'dell-g3-15-3500-i5-70223130-082721-042709-600x600.jpg', 'dell-g3-15-1.jpg,dell_g3_b4c0873094074cafadbdf7e0e7f825a8_master.webp', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10032, 0),
(80, 'THIRDWAVE GALLERIA QSF960HE', 1000000, 3, 0, '', 'thirdwave-galleria-qsf960he', 'Đang được cập nhật', 'Đang được cập nhật', 'i-img900x613-1648270915saiocw111921.jpg', 'i-img900x613-16482709155sbclh111921.jpg,i-img1200x900-1652427169xrnp2a185745.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10033, 0),
(81, 'Acer Nitro 5 AN515-52', 1000000, 3, 6, '', 'acer-nitro-5-an515-52', 'Đang được cập nhật', 'Đang được cập nhật', 'acer-nitro-5-an515-52-70ae-q3lsv007-600x600.jpg', '3997_an515_52_53pc__4_.png, acer-nitro-an515-52-75ft-i7-8750hq-8g-128g-ssd-1tb-gtx1050ti-4g-15-6-fhd-ips-w10_38505_2.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10034, 0),
(82, 'GR1650RGF-T THIRDWAVE Thirdwave', 1000000, 3, 0, '', 'gr1650rgf-t-thirdwave-thirdwave', 'Đang được cập nhật', 'Đang được cập nhật', 'c73dbf65b9e81ff8.png', 'd_f14tg_blue-2b.png,07afbaffe5d4fdff.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10035, 0),
(83, 'Dell XPS 9310', 1000000, 2, 3, '', 'dell-xps-9310', 'Đang được cập nhật', 'Đang được cập nhật', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 1, 10, 0),
(85, 'Laptop Workstation Cũ HP Zbook 15 G3 - Intel Core i7 / Xeon', 11990000, 1, 14, '', 'laptop-workstation-cu-hp-zbook-15-g3-intel-core-i7-xeon', '<div id=\"content-desc\">\r\n<h1>HP ZBOOK 15 G3 - MẪU LAPTOP TRONG MƠ CỦA DÂN ĐỒ HỌA</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đối với người làm đồ họa như kỹ sư, kiến trúc sư thì một chiếc<a href=\"https://laptop88.vn/laptop-do-hoa.html\" target=\"_blank\"> laptop đồ họa</a> MẠNH - KHỎE - MÁT đóng vai trò rất quan trọng phục vụ cho công việc.<a href=\"https://laptop88.vn/laptop-workstation-cu-hp-zbook-15-g3-intel-core-i7.html\"> <strong>HP Zbook 15 G3</strong></a> -<a href=\"https://laptop88.vn/laptop-hp-cu.html\" target=\"_blank\"> Laptop HP cũ</a> là một lựa chọn lý tưởng để làm đồ họa chuyên nghiệp trong phân khúc giá tầm trung mà bạn không thể bỏ qua. Bạn hãy cùng chúng tôi đánh giá chi tiết chiếc<a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\"> máy tính xách tay</a>/<a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\"> laptop</a> / <a href=\"https://laptop88.vn/laptop-cu.html\" target=\"_blank\">laptop cũ</a> này nhé!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><em>Ngoại hình sang trọng, lịch lãm cùng độ bền đạt chuẩn Quân Sự Mỹ</em></li>\r\n	<li><em>Cấu hình cao làm mượt các tác vụ thiết kế công trình, nội thất, làm phim, dựng video&hellip;khỏe ngang Dell Precision 7510 nhưng lại có mức giá rẻ hơn</em></li>\r\n	<li><em>2 quạt tản nhiệt mát mẻ</em></li>\r\n	<li><em>Màn hình hiển thị hình ảnh sắc nét, phủ thêm một lớp chống chói bảo vệ mắt khi làm việc ngoài trời&nbsp;</em></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table style=\"height:73px; width:402px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"https://zalo.me/4003397725440619448\" target=\"_blank\"><img alt=\"\" src=\"https://laptop88.vnhttps://laptop88.vnhttps://laptop88.vn/media/lib/29-03-2022/ntzalo.jpg\" /></a></td>\r\n			<td style=\"text-align:center\"><a href=\"https://m.me/laptop88.vn\" target=\"_blank\"><img alt=\"\" src=\"https://laptop88.vnhttps://laptop88.vnhttps://laptop88.vn/media/lib/29-03-2022/linhngayvinhnvintvn.png\" /></a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp;</p>\r\n\r\n<h2>HP Zbook 15 G3 - Thiết kế sang trọng, siêu bền ổn định</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>HP Zbook 15 G3</strong> thực sự là mẫu laptop trong mơ của dân đồ họa khi sở hữu ngoại hình hài hòa giữa thiết kế của dòng máy trạm truyền thống và sự cải tiến sang trọng, gọn gàng hơn với các góc cạnh bo tròn mềm mại.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mặt trên là kim loại với họa tiết tổ ong, bao quanh là viền nhựa cứng cách điệu giúp bảo vệ phần màn hình nếu vô tình bị rơi hoặc va đập mạnh. Phần kê tay hơi nhám cho cảm giác sờ vào khá thú vị.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>HP ZBook 15 G3</strong> cũng đã vượt qua tiêu chuẩn quân sự Mỹ MIL-STD 810 về hoạt động tại các điều kiện khắc nghiệt về độ ẩm, nhiệt độ, bụi...vì thế các bạn hoàn toàn có thể yên tâm sử dụng máy trong nhiều năm mà không sợ máy nhanh bị xuống cấp hay hỏng hóc.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://laptop88.vn/media/lib/4673_DSC00739.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>HP Zbook 15 G3 - Hiệu suất làm đồ họa tuyệt vời</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p><strong>HP Zbook 15 G3</strong> sở hữu sức mạnh làm đồ họa cao với 2 lựa chọn cấu hình dành cho các bạn: <strong>Chip Intel Core i7 6820HQ hoặc Xeon E3-1050M + Card đồ họa Nvidia Quadro M1000M hoặc Nvidia Quadro M2000M</strong>. Với cấu hình này các bạn có thể xử lý mọi việc trên các ứng dụng đồ họa như Từ AutoCAD, CorelDRAW, Illustrator hay Corel VideoStudio,... Bên cạnh đó là RAM 8GB, ổ cứng SSD 240GB cho khả năng xử lý đa nhiệm mượt mà, khởi động máy và các ứng dụng nhanh chóng.</p>\r\n\r\n<p>Với cầu hình trên, <strong>HP Zbook 15 G3</strong> đáp ứng rất tốt nhu cầu làm việc của kỹ sư xây dựng, dân thiết kế nội thất hay dựng phim, làm hoạt hình...Hơn thế nữa, khi rảnh rỗi thì các bạn có thể sử dụng máy để chơi mọi tựa game để giải trí mà không sợ giật, lag.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://laptop88.vn/media/lib/4673_DSC09093.jpg\" style=\"margin-left:auto; margin-right:auto\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>HP Zbook 15 G3 - Hình ảnh hiển thị sắc nét</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p><strong>HP ZBook 15 G3</strong> trang bị màn hình 15.6 inch Full HD sắc nét, màu sắc tái tạo tốt và độ sáng tương đối cao. Màn hình được phủ lớp chống chói giúp bạn có thể làm việc tốt trong điều kiện ánh sáng mạnh. Mặc dù HP Zbook 15 G3 không có quá nhiều ưu điểm nổi bật về màn hình nhưng với màn hình rộng lớn cùng hình ảnh sắc nét có phủ lớp chống chói đủ để bạn làm việc đồ họa dễ dàng, các bản thiết kế có độ chính xác ổn.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table style=\"height:73px; width:402px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"https://zalo.me/4003397725440619448\" target=\"_blank\"><img alt=\"\" src=\"https://laptop88.vnhttps://laptop88.vnhttps://laptop88.vn/media/lib/29-03-2022/ntzalo.jpg\" /></a></td>\r\n			<td style=\"text-align:center\"><a href=\"https://m.me/laptop88.vn\" target=\"_blank\"><img alt=\"\" src=\"https://laptop88.vnhttps://laptop88.vnhttps://laptop88.vn/media/lib/29-03-2022/linhngayvinhnvintvn.png\" /></a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://laptop88.vn/media/lib/4673_DSC090821.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Nhiệt độ ổn định</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>Là một chiếc máy trạm, <strong>HP ZBook 15 G3</strong> cũng được trang bị 2 quạt tản nhiệt duy trì nhiệt độ ổn định khi bạn làm việc, kể cả đối với những tác vụ nặng. Từ đó giúp nâng cao hiệu suất làm việc của bạn, bạn sẽ không phải lo lắng việc máy nóng khiến bạn khó chịu hay làm ảnh hưởng đến công việc của mình.</p>\r\n\r\n<p><img alt=\"\" src=\"https://laptop88.vn/media/lib/4673_1.png\" /></p>\r\n\r\n<h2>Bàn phím &amp; TouchPad</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>HP cung cấp bàn phím fullsize với hành trình phím sâu, độ nảy tốt. Bàn di chuột vẫn được thiết kế với 6 nút click, kích thước bàn di 103mm x 59mm, bề mặt di chuột mang đến cảm giác trải nghiệm mượt mà.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trên bàn phím của ZBook 15 G3 cũng có một nút TrackPoint, đây cũng là một sự thay thế chuột rất tốt, độ chính xác cũng khá cao mặc dù nó không thể bằng được so với đối tác Lenovo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://laptop88.vn/media/lib/09-03-2021/dsc002782-min.jpg\" /></p>\r\n\r\n<h2>Cổng kết nối</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>HP cung cấp cho ZBook 15 G3 khá đầy đủ các cổng kết nối. Ở bên trái bao gồm các cổng Ethernet, VGA, USB 3.0, khe cắm thẻ nhớ SD. Ở bên phải có thêm 2 cổng USB 3.0, jack cắm âm thanh, cổng HDMI, 2 cổng Thunderbolt 3 hỗ trợ chuẩn 3.1 và Display Port.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://laptop88.vn/media/lib/4673_DSC00740.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>T</em><em>óm lại, HP Zbook 15 G3 là chiếc máy trạm đáng mua với </em><em>thiết kế lịch lãm không hề thô kệch, hiệu năng làm việc tuyệt vời. Trong tầm giá 17 triệu để tìm một chiếc may trạm khỏe, bền để làm độ họa chuyên nghiệp thực sự rất hiếm. Vì thế bạn đừng bỏ qua chiếc laptop này tại Laptop88 nhé</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://m.me/laptop88.vn\" target=\"_blank\"><em><img alt=\"\" src=\"https://laptop88.vn/media/lib/11-01-2022/banner-mua-laptop-r-nht-800x300-2.png\" style=\"margin-left:auto; margin-right:auto\" /></em></a></p>\r\n\r\n<table style=\"height:73px; width:402px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"https://zalo.me/4003397725440619448\" target=\"_blank\"><img alt=\"\" src=\"https://laptop88.vnhttps://laptop88.vnhttps://laptop88.vn/media/lib/29-03-2022/ntzalo.jpg\" /></a></td>\r\n			<td style=\"text-align:center\"><a href=\"https://m.me/laptop88.vn\" target=\"_blank\"><img alt=\"\" src=\"https://laptop88.vnhttps://laptop88.vnhttps://laptop88.vn/media/lib/29-03-2022/linhngayvinhnvintvn.png\" /></a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<br />\r\n&nbsp;</p>\r\n</div>\r\n', 'CPU:&nbsp;,Intel Core i7 - 6820HQ (4 nh&acirc;n 8 luồng) 2.6GHz - 3.5GHz&nbsp;&nbsp;:RAM,&nbsp;:8GB DDR4,Ổ cứng:&nbsp;,SSD 256GB:M&agrave;n h&igrave;nh,&nbsp;:15.6 Inch Full HD chống l&oacute;a&nbsp;,Card đồ họa:&nbsp;,Nvidia Quadro M1000M / M2000M:Loa,&nbsp;:Bang &amp; Olufsen HD Audio,K&iacute;ch htước:&nbsp;,386*264*26mm:Webcam,&nbsp;:HD 720p,Trọng lượng:&nbsp;,2.63kg:', '4673_ac_laptop_workstation_c___hp_zbook_15_g3_intel_core_i7_xeon.jpg', '4673_hp_zbook_15_g3_5.jpg,4673_dsc09093__3__min.jpg,4673_dsc09082__2__min.jpg,4673_dsc00277_min.jpg,4673_dsc00278__2__min.jpg,4673_hp_zbook_15_g3.jpg,4673_zbook_15_g3___3.png,4673_zbook_15_g3___1.png', 1, '2022-10-28 20:57:39', '2022-10-28 20:57:39', 1, 1, 1, 1, 1000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_ui`
--

CREATE TABLE `shop_ui` (
  `id` int(11) NOT NULL,
  `text_top_header` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop_ui`
--

INSERT INTO `shop_ui` (`id`, `text_top_header`) VALUES
(1, 'Để  đặt hàng gọi ngay(0123) 456789');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `main_title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `sub_title`, `main_title`, `url`, `img`) VALUES
(1, 'Mang thế giới công nghệ đến với bạn', 'Macstore', 'https://www.facebook.com/vudinhchung193/', 'Screenshot_at_Feb_05_11-02-08.png'),
(2, 'Giảm 20% tất cả các sản phẩm', 'Mùa tựu trường', 'https://www.facebook.com/vudinhchung193/', 'Screenshot_at_Feb_05_11-02-58.png');

-- --------------------------------------------------------

--
-- Table structure for table `tinhthanhpho`
--

CREATE TABLE `tinhthanhpho` (
  `matp` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `slug` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tinhthanhpho`
--

INSERT INTO `tinhthanhpho` (`matp`, `name`, `type`, `slug`) VALUES
('01', 'Thành phố Hà Nội', 'Thành phố Trung ương', 'HANOI'),
('02', 'Tỉnh Hà Giang', 'Tỉnh', 'HAGIANG'),
('04', 'Tỉnh Cao Bằng', 'Tỉnh', 'CAOBANG'),
('06', 'Tỉnh Bắc Kạn', 'Tỉnh', 'BACKAN'),
('08', 'Tỉnh Tuyên Quang', 'Tỉnh', 'TUYENQUANG'),
('10', 'Tỉnh Lào Cai', 'Tỉnh', 'LAOCAI'),
('11', 'Tỉnh Điện Biên', 'Tỉnh', 'DIENBIEN'),
('12', 'Tỉnh Lai Châu', 'Tỉnh', 'LAICHAU'),
('14', 'Tỉnh Sơn La', 'Tỉnh', 'SONLA'),
('15', 'Tỉnh Yên Bái', 'Tỉnh', 'YENBAI'),
('17', 'Tỉnh Hoà Bình', 'Tỉnh', 'HOABINH'),
('19', 'Tỉnh Thái Nguyên', 'Tỉnh', 'THAINGUYEN'),
('20', 'Tỉnh Lạng Sơn', 'Tỉnh', 'LANGSON'),
('22', 'Tỉnh Quảng Ninh', 'Tỉnh', 'QUANGNINH'),
('24', 'Tỉnh Bắc Giang', 'Tỉnh', 'BACGIANG'),
('25', 'Tỉnh Phú Thọ', 'Tỉnh', 'PHUTHO'),
('26', 'Tỉnh Vĩnh Phúc', 'Tỉnh', 'VINHPHUC'),
('27', 'Tỉnh Bắc Ninh', 'Tỉnh', 'BACNINH'),
('30', 'Tỉnh Hải Dương', 'Tỉnh', 'HAIDUONG'),
('31', 'Thành phố Hải Phòng', 'Thành phố Trung ương', 'HAIPHONG'),
('33', 'Tỉnh Hưng Yên', 'Tỉnh', 'HUNGYEN'),
('34', 'Tỉnh Thái Bình', 'Tỉnh', 'THAIBINH'),
('35', 'Tỉnh Hà Nam', 'Tỉnh', 'HANAM'),
('36', 'Tỉnh Nam Định', 'Tỉnh', 'NAMDINH'),
('37', 'Tỉnh Ninh Bình', 'Tỉnh', 'NINHBINH'),
('38', 'Tỉnh Thanh Hóa', 'Tỉnh', 'THANHHOA'),
('40', 'Tỉnh Nghệ An', 'Tỉnh', 'NGHEAN'),
('42', 'Tỉnh Hà Tĩnh', 'Tỉnh', 'HATINH'),
('44', 'Tỉnh Quảng Bình', 'Tỉnh', 'QUANGBINH'),
('45', 'Tỉnh Quảng Trị', 'Tỉnh', 'QUANGTRI'),
('46', 'Tỉnh Thừa Thiên Huế', 'Tỉnh', 'THUATHIENHUE'),
('48', 'Thành phố Đà Nẵng', 'Thành phố Trung ương', 'DANANG'),
('49', 'Tỉnh Quảng Nam', 'Tỉnh', 'QUANGNAM'),
('51', 'Tỉnh Quảng Ngãi', 'Tỉnh', 'QUANGNGAI'),
('52', 'Tỉnh Bình Định', 'Tỉnh', 'BINHDINH'),
('54', 'Tỉnh Phú Yên', 'Tỉnh', 'PHUYEN'),
('56', 'Tỉnh Khánh Hòa', 'Tỉnh', 'KHANHHOA'),
('58', 'Tỉnh Ninh Thuận', 'Tỉnh', 'NINHTHUAN'),
('60', 'Tỉnh Bình Thuận', 'Tỉnh', 'BINHTHUAN'),
('62', 'Tỉnh Kon Tum', 'Tỉnh', 'KONTUM'),
('64', 'Tỉnh Gia Lai', 'Tỉnh', 'GIALAI'),
('66', 'Tỉnh Đắk Lắk', 'Tỉnh', 'DAKLAK'),
('67', 'Tỉnh Đắk Nông', 'Tỉnh', 'DAKNONG'),
('68', 'Tỉnh Lâm Đồng', 'Tỉnh', 'LAMDONG'),
('70', 'Tỉnh Bình Phước', 'Tỉnh', 'BINHPHUOC'),
('72', 'Tỉnh Tây Ninh', 'Tỉnh', 'TAYNINH'),
('74', 'Tỉnh Bình Dương', 'Tỉnh', 'BINHDUONG'),
('75', 'Tỉnh Đồng Nai', 'Tỉnh', 'DONGNAI'),
('77', 'Tỉnh Bà Rịa - Vũng Tàu', 'Tỉnh', 'BARIAVUNGTAU'),
('79', 'Thành phố Hồ Chí Minh', 'Thành phố Trung ương', 'HOCHIMINH'),
('80', 'Tỉnh Long An', 'Tỉnh', 'LONGAN'),
('82', 'Tỉnh Tiền Giang', 'Tỉnh', 'TIENGIANG'),
('83', 'Tỉnh Bến Tre', 'Tỉnh', 'BENTRE'),
('84', 'Tỉnh Trà Vinh', 'Tỉnh', 'TRAVINH'),
('86', 'Tỉnh Vĩnh Long', 'Tỉnh', 'VINHLONG'),
('87', 'Tỉnh Đồng Tháp', 'Tỉnh', 'DONGTHAP'),
('89', 'Tỉnh An Giang', 'Tỉnh', 'ANGIANG'),
('91', 'Tỉnh Kiên Giang', 'Tỉnh', 'KIENGIANG'),
('92', 'Thành phố Cần Thơ', 'Thành phố Trung ương', 'CANTHO'),
('93', 'Tỉnh Hậu Giang', 'Tỉnh', 'HAUGIANG'),
('94', 'Tỉnh Sóc Trăng', 'Tỉnh', 'SOCTRANG'),
('95', 'Tỉnh Bạc Liêu', 'Tỉnh', 'BACLIEU'),
('96', 'Tỉnh Cà Mau', 'Tỉnh', 'CAMAU');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` text NOT NULL,
  `lastlogin` datetime NOT NULL,
  `registered` datetime NOT NULL,
  `userimage` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `token_active` tinyint(4) NOT NULL,
  `token_date` datetime DEFAULT NULL,
  `nicename` varchar(255) NOT NULL,
  `is_superadmin` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `profile`, `lastlogin`, `registered`, `userimage`, `token`, `token_active`, `token_date`, `nicename`, `is_superadmin`, `slug`, `group_id`) VALUES
(1, 'chunghello193@gmail.com', '$2y$10$nkac2Y/egugObRn5a2/mmeTESYp5TPE0sDsduOPa7fkOQTrpQWmpq', '<p>hihi</p>', '2022-12-02 09:20:42', '2022-03-20 05:03:04', 'tagfo5xi2g971.jpg', '', 0, '0000-00-00 00:00:00', 'chung193', 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `name`) VALUES
(1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_category`
--
ALTER TABLE `shop_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_customer`
--
ALTER TABLE `shop_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_discount`
--
ALTER TABLE `shop_discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
