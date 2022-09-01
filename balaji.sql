-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 07:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balaji`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `simple_pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `role` int(11) NOT NULL COMMENT '1=> admin and 2=>subadmin',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `simple_pass`, `email`, `password`, `remember_token`, `active`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '123456', 'admin@gmail.com', '$2y$10$NQZavljR/Xy4mg45vOTi5.LZmCKk/1buKQ8tdzmXLEqMRbkzkysIm', 'oMKE41s008tTbzlBS8xHy3KePgMfXFbuNEfiylqnnSoHGX9Ca6VSFFoJQrv5', 1, 1, '2021-08-28 12:35:45', '2022-06-08 09:32:13'),
(2, 'manu khandal', '123456', 'manu@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', 1, 2, '2021-09-09 06:53:52', '2021-09-09 06:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `asseennos`
--

CREATE TABLE `asseennos` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `at_home` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asseennos`
--

INSERT INTO `asseennos` (`id`, `image`, `at_home`, `status`, `created_at`, `updated_at`) VALUES
(8, '1633516929-U12.png', NULL, '1', '2021-10-06 10:42:09', '2021-10-06 10:42:09');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`, `status`) VALUES
(8, 'TELECOM IMPLEMENTATION SOLUTIONS', '<p>Program Management and Project Planning Installation, Commissioning and Integration of base stations, BSC, Microwave links, DWDM equipment, WIMAX equipment, Dismantling of Sites and related accessories &nbsp;IBS implementation &nbsp;Passive IBS &nbsp;DAS Solutions.</p>', '1648208550-54270156-30ae-45d1-a24e-f969888c7849.jpg', '2022-03-24 03:47:05', '2022-03-25 06:12:30', '1'),
(9, 'FULL TURNKEY SERVICES - TSP', '<p>Full Turnkey Site service bouquet includes Site planning and Survey Design &nbsp;Civil foundation u Electrical work &nbsp;Boundary Wall and Fencing works Vendor Management Liasoning Activities BTS Installation and Commissioning activities &nbsp;Quality Control &nbsp;Risk Management &nbsp;Logistics Management &nbsp;Project planning and Management services</p>', '1648209154-c20dfc34-781f-49a2-978c-e2789b90fbe8.jpg', '2022-03-25 06:22:34', '2022-03-25 06:22:34', '1'),
(10, 'Solar Panel Install & Commissioning', '<p>Solar Capacity planning, Survey &amp; Design &nbsp;Civil foundation &nbsp;Electrical work Vendor Management &nbsp;Panel Installation and Commissioning activities Quality Control &nbsp;Risk Management &nbsp;Logistics Management &nbsp;Project planning and Management services</p>', '1648209235-28950ecc-b600-4fb9-88ac-b3671ebb7e3d.jpg', '2022-03-25 06:23:55', '2022-03-25 06:23:55', '1');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`, `status`) VALUES
(2, 'Importers achieve cost savings', '<p>Kokanee sprat shrimpfish. Pacific hake false trevally queen parrotfish Black prickleback humuhumunukunukuapua&#39;a mosshead warbonnet !</p>', '1648034114-box_3.jpg', '2022-03-23 04:53:48', '2022-03-23 05:45:14', '1'),
(3, 'What is 3D printing ?', '<p>Yellowfin surgeonfish bonefish Australasian salmon tenuis, barreleye brook lamprey European chub ridgehead, sea catfish filefish sea chub.</p>', '1648034085-article_2.jpg', '2022-03-23 05:34:36', '2022-03-23 05:46:43', '1'),
(4, 'Importers achieve cost savings', '<p>Kokanee sprat shrimpfish. Pacific hake false trevally queen parrotfish Black prickleback humuhumunukunukuapua&#39;a mosshead warbonnet !</p>', '1648034034-box_2.jpg', '2022-03-23 05:34:54', '2022-03-23 05:43:54', '1'),
(5, 'New subway line', '<p>Bramble shark slickhead archerfish Black angelfish marblefish bigeye walleye fire bar danio silver driftfish pelagic cod. Wolf-herring spaghetti eel</p>', '1648033944-box_1.jpg', '2022-03-23 05:38:02', '2022-03-23 05:42:24', '1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(222) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(240) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_deleted` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`, `is_deleted`) VALUES
(5, 'mobileeeeeee', '<p>mobile descccceeeeeeeeee</p>', '1631094728-activa.jpg', 1, '2021-09-08 02:39:38', '2021-09-14 10:58:41', 1),
(10, 'car', '<p>car desc</p>', '1631166005-car.jpg', 1, '2021-09-09 00:10:05', '2021-09-09 00:10:28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `title` varchar(240) DEFAULT NULL,
  `slug` varchar(240) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(240) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(240) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(240) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `status` enum('1','0','2','3') NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_deleted` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `mobile`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`, `is_deleted`) VALUES
(57, 'fdfs', '123456789', 'demo@fmail.com', 'hi', 'hello', '1', '2022-03-23 13:14:51', '2022-03-23 13:15:27', 1),
(58, 'fdfs', '123456789', 'demo@fmail.com', 'hi', 'hello', '1', '2022-03-23 13:14:51', '2022-03-23 13:15:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `image` varchar(240) DEFAULT NULL,
  `is_home` enum('1','0') NOT NULL DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `is_home`, `status`, `created_at`, `updated_at`) VALUES
(19, '1648210080-729acea7-40ca-45d6-b3a7-69597bc4f97a.jpg', '0', '1', '2022-03-23 02:58:05', '2022-03-25 06:38:00'),
(20, '1648210069-f8ef5f88-7972-4d62-ba80-da87dd044944.jpg', '0', '1', '2022-03-23 02:58:15', '2022-03-25 06:37:49'),
(21, '1648210050-e32382da-92ab-492b-911c-2cd81fdc2e4b.jpg', '0', '1', '2022-03-23 02:58:38', '2022-03-25 06:37:30'),
(22, '1648210038-81140e1d-cc83-4a1c-b1d3-2d2ad88808a7.jpg', '0', '1', '2022-03-23 02:58:49', '2022-03-25 06:37:18'),
(23, '1648210025-a20655cb-3fc0-4794-b1f3-5645680adade.jpg', '0', '1', '2022-03-23 04:12:43', '2022-03-25 06:37:05'),
(24, '1648210016-60619092-06c0-4d8c-9ee8-4d2accf38d87.jpg', '0', '1', '2022-03-23 04:14:10', '2022-03-25 06:36:56'),
(25, '1648210008-92e5862f-ae1c-479f-9ed7-254766ec4732.jpg', '0', '1', '2022-03-23 04:14:35', '2022-03-25 06:36:48'),
(27, '1648210093-620a8b01-3b4e-459c-8ebb-0300e8e82711.jpg', '0', '1', '2022-03-25 06:38:13', '2022-03-25 06:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `site_logo` text DEFAULT NULL,
  `mobileno` varchar(15) DEFAULT NULL,
  `mobileno2` varchar(15) DEFAULT NULL,
  `email` varchar(222) DEFAULT NULL,
  `email2` varchar(222) DEFAULT NULL,
  `address` mediumtext DEFAULT NULL,
  `timing` varchar(55) DEFAULT NULL,
  `copyright` varchar(225) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(240) DEFAULT NULL,
  `event_detail_image` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `telegram_link` varchar(255) DEFAULT NULL,
  `timing2` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `site_name`, `site_logo`, `mobileno`, `mobileno2`, `email`, `email2`, `address`, `timing`, `copyright`, `facebook_link`, `youtube_link`, `instagram_link`, `linkedin_link`, `twitter_link`, `event_detail_image`, `created_at`, `updated_at`, `telegram_link`, `timing2`) VALUES
(1, 'Sanwaliya Group', '1648214080-Sanwaliya Group logo.png', '9099904258', '8209767807', 'project@sanwaliyagroup.com', 'demo@gmail.com', '8/223 Malviya Nager jaipur, Rajasthan 302017', '10:00 AM', '© 2022 Sanwaliya Group', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-23 06:16:06', '2022-03-25 08:13:33', NULL, '8:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `get_touchs`
--

CREATE TABLE `get_touchs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `get_touchs`
--

INSERT INTO `get_touchs` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `status`, `updated_at`, `created_at`) VALUES
(5, 'rrr', 'rr@gmail.com', '544587787', 'cgfghghg', 'cbfhghghg', 1, '2022-03-20 00:42:49', '2022-03-20 00:42:49');

-- --------------------------------------------------------

--
-- Table structure for table `level_incomes`
--

CREATE TABLE `level_incomes` (
  `id` int(11) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `day` int(11) DEFAULT 0,
  `direct` int(11) DEFAULT 0,
  `total_leg` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level_incomes`
--

INSERT INTO `level_incomes` (`id`, `level`, `amount`, `day`, `direct`, `total_leg`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 0, NULL, '2021-09-11 07:52:26', '2021-09-11 07:52:26'),
(2, 2, 2, 2, 0, NULL, '2021-09-11 07:52:26', '2021-09-11 07:52:26'),
(3, 3, 3, 3, 0, NULL, '2021-09-11 07:52:26', '2021-09-11 07:52:26'),
(4, 4, 4, 4, 0, NULL, '2021-09-11 07:52:26', '2021-09-11 07:52:26'),
(5, 5, 5, 5, 0, NULL, '2021-09-11 07:52:26', '2021-09-11 07:52:26'),
(6, 6, 6, 6, 0, NULL, '2021-09-11 07:52:26', '2021-09-11 07:52:26'),
(7, 7, 7, 7, 0, NULL, '2021-09-11 07:52:26', '2021-09-11 07:52:26'),
(8, 8, 8, 8, 0, NULL, '2021-09-11 07:52:26', '2021-09-11 07:52:26'),
(9, 9, 9, 9, 0, NULL, '2021-09-11 07:52:26', '2021-09-11 07:52:26'),
(10, 10, 10, 10, 0, NULL, '2021-09-11 07:52:26', '2021-09-11 07:52:26'),
(11, 11, 11, 11, 0, NULL, '2021-09-11 07:52:26', '2021-09-11 07:52:26');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `email` varchar(240) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_amount` varchar(100) NOT NULL,
  `payment_status` enum('success','failed') NOT NULL DEFAULT 'success',
  `current_status` enum('pending','ongoing','completed','cancelled') NOT NULL DEFAULT 'pending',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_deleted` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_amount`, `payment_status`, `current_status`, `status`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 8, '1000', 'success', 'pending', 1, '2021-09-08 12:25:35', '2021-09-08 12:25:35', 1),
(2, 8, '444', 'success', 'ongoing', 1, '2021-09-08 12:44:16', '2021-09-08 12:44:16', 1),
(3, 8, '1111', 'success', 'completed', 1, '2021-09-08 12:44:31', '2021-09-08 12:44:31', 1),
(4, 8, '444', 'success', 'cancelled', 1, '2021-09-08 12:44:44', '2021-09-08 12:44:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `price` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `repurchases`
--

CREATE TABLE `repurchases` (
  `id` int(11) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `day` int(11) DEFAULT 0,
  `direct` int(11) DEFAULT 0,
  `total_leg` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repurchases`
--

INSERT INTO `repurchases` (`id`, `level`, `amount`, `day`, `direct`, `total_leg`, `created_at`, `updated_at`) VALUES
(22, 11, 11, 11, 0, NULL, '2021-09-11 08:01:52', '2021-09-11 08:01:52'),
(21, 10, 10, 10, 0, NULL, '2021-09-11 08:01:52', '2021-09-11 08:01:52'),
(20, 9, 9, 9, 0, NULL, '2021-09-11 08:01:52', '2021-09-11 08:01:52'),
(19, 8, 8, 8, 0, NULL, '2021-09-11 08:01:52', '2021-09-11 08:01:52'),
(18, 7, 755, 755, 0, NULL, '2021-09-11 08:01:52', '2021-09-11 08:01:52'),
(17, 6, 6, 6, 0, NULL, '2021-09-11 08:01:52', '2021-09-11 08:01:52'),
(16, 5, 5, 5, 0, NULL, '2021-09-11 08:01:52', '2021-09-11 08:01:52'),
(15, 4, 4, 4, 0, NULL, '2021-09-11 08:01:52', '2021-09-11 08:01:52'),
(14, 3, 3555, 3555, 0, NULL, '2021-09-11 08:01:52', '2021-09-11 08:01:52'),
(13, 2, 2, 2, 0, NULL, '2021-09-11 08:01:52', '2021-09-11 08:01:52'),
(12, 1, 1, 1, 0, NULL, '2021-09-11 08:01:52', '2021-09-11 08:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `request_quotes`
--

CREATE TABLE `request_quotes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_quotes`
--

INSERT INTO `request_quotes` (`id`, `name`, `mobile`, `email`, `message`, `status`, `updated_at`, `created_at`) VALUES
(4, 'demo', '123456789', 'dem@gmail.como', 'sdasda', 1, '2022-03-23 13:15:55', '2022-03-23 13:15:55'),
(7, 'demo', '123456789', 'dem@gmail.como', 'sdasda', 1, '2022-03-23 13:15:55', '2022-03-23 13:15:55'),
(8, 'demo', '123456789', 'dem@gmail.como', 'sdasda', 1, '2022-03-23 13:15:55', '2022-03-23 13:15:55'),
(9, 'demo', '123456789', 'dem@gmail.como', 'sdasda', 1, '2022-03-23 13:15:55', '2022-03-23 13:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `review_ratings`
--

CREATE TABLE `review_ratings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `event_title` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `rating` text DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subadminattributes`
--

CREATE TABLE `subadminattributes` (
  `id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `first_name` varchar(150) DEFAULT NULL,
  `last_name` varchar(150) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `simple_pass` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `access_permission` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_deleted` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subadminattributes`
--

INSERT INTO `subadminattributes` (`id`, `username`, `first_name`, `last_name`, `email`, `simple_pass`, `password`, `access_permission`, `status`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 'manu khandal', 'manu', 'khandal', 'manu@email.com', '111222', '$2y$10$89863//Rv/2CTtefG8v9uOg3Qe4GGz6PLJBBHNpaKMyMKCHXSeTPW', 'orders,pending_order,ongoing_order,completed_order,cancelled_order,customer,all_users,active_users,inactive_users,product_management,sub_category,setting,general_setting', 1, '2021-09-13 01:11:58', '2021-09-14 05:32:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `category_id` varchar(240) DEFAULT NULL,
  `category_name` varchar(240) DEFAULT NULL,
  `title` varchar(240) DEFAULT NULL,
  `slug` varchar(240) DEFAULT NULL,
  `price` varchar(200) DEFAULT NULL,
  `image` varchar(240) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_deleted` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `category_name`, `title`, `slug`, `price`, `image`, `description`, `status`, `created_at`, `updated_at`, `is_deleted`) VALUES
(5, '5', 'mobileeeeeee', 'apple cell', 'apple-cell', '100000', '1631165681-apple_phone.jpg', '<p>apple desc</p>', '1', '2021-09-09 00:04:41', '2021-09-14 11:03:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `support_systems`
--

CREATE TABLE `support_systems` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `answer` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `support_systems`
--

INSERT INTO `support_systems` (`id`, `user_id`, `subject`, `message`, `answer`, `created_at`, `updated_at`, `status`, `is_deleted`) VALUES
(1, 1, 'test', 'tset', 'wedfghjk', '2021-09-11 11:43:35', '2021-09-11 06:13:35', 1, 1),
(2, 2, 'neww', 'new message', 'bghjg', '2021-09-11 12:05:40', '2021-09-11 06:35:40', 1, 1),
(3, 3, 'new1', 'new message', 'kkkkk', '2021-09-11 12:29:48', '2021-09-11 06:59:48', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `f_name` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `l_name` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `simple_pass` varchar(255) COLLATE utf8_bin NOT NULL,
  `referId` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `referBy` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `otp` int(11) DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `banned` tinyint(1) DEFAULT 0,
  `verify_status` enum('verified','unverified') COLLATE utf8_bin DEFAULT 'verified',
  `device_token` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `remember_token` varchar(240) COLLATE utf8_bin DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `login_type` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_deleted` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `f_name`, `l_name`, `email`, `password`, `simple_pass`, `referId`, `referBy`, `otp`, `mobile`, `banned`, `verify_status`, `device_token`, `remember_token`, `last_login`, `login_type`, `pincode`, `status`, `created_at`, `updated_at`, `is_deleted`) VALUES
(8, 'manu khandal', 'manu', 'khandal', 'manu@gmail.com', '$2y$10$6KlEFN/vINWFc6/NSBYZVOUoHwY46DOVrOsVFBQE5jtSxApb.SKx6', '123456', 'LG01', '0', NULL, '96385271', 0, 'unverified', NULL, NULL, '2021-09-13 09:57:55', NULL, '302023', 1, '2000-01-26 18:30:00', '2021-09-13 09:57:55', 1),
(9, 'krishna khandal', 'krishna', 'khandal', 'krishna@email.com', 'd41d8cd98f00b204e9800998ecf8427e', '123456', 'LG02', 'LG01', 9654, '9874563214', 0, 'unverified', NULL, NULL, '2021-09-14 10:32:12', NULL, NULL, 1, '2000-01-26 18:30:00', '2021-09-14 05:02:12', 1),
(10, 'Madhav Khandal', 'Madhav', 'Khandal', 'madhav@email.com', '96e79218965eb72c92a549dd5a330112', '111111', 'LG03', 'LG01', NULL, '9876543212', 0, 'unverified', NULL, NULL, '2021-09-14 10:36:22', NULL, NULL, 1, '2000-01-26 18:30:00', '2021-09-14 05:06:22', 1),
(11, 'kk kk', 'kk', 'kk', 'kk@email.com', '96e79218965eb72c92a549dd5a330112', '111111', 'LG04', 'LG03', NULL, '96857412365', 0, 'verified', NULL, NULL, '2021-09-13 13:09:39', NULL, NULL, 1, '2000-01-26 18:30:00', '2021-09-13 13:09:39', 1),
(13, 'shyam khandal', 'shyam', 'khandal', 'shyam@email.com', '$2y$10$0rr6nTW4zgKUf0kWaj7hluQLRQ.JZ9s0EaHufqAxQDyagt1iJPLKO', '111111', 'LG20', NULL, NULL, '9685858585', 0, 'verified', NULL, NULL, '2021-09-14 05:41:18', NULL, NULL, 1, '2000-01-26 18:30:00', '2021-09-14 05:41:18', 1),
(14, 'qq qqq', 'qq', 'qqq', 'qq@email.co', '$2y$10$UeSQfRxjKh5zOK7Ph2jQDewfs.OCeilgLMheaz4254AFYbZ2rR6Hm', '111111', 'LGOqq38', 'LG01', NULL, NULL, 0, 'verified', NULL, NULL, '2021-09-14 09:21:15', NULL, NULL, 1, '2021-09-14 03:51:15', '2021-09-14 03:51:15', 1),
(15, 'qq qqq', 'qq', 'qqq', 'aaqq@email.co', '$2y$10$JMQyfUVcH8fTwGR1TLaN2u92aHeXCZ7xGGOe4BKgqge2rHneKpJSy', '111111', 'LGOqq56', 'LG01', NULL, NULL, 0, 'unverified', NULL, NULL, '2021-09-14 10:36:36', NULL, NULL, 1, '2021-09-14 03:51:48', '2021-09-14 05:06:36', 1),
(16, 'KRISHI GUPTA', 'KRISHI', 'GUPTA', 'krishi@email.com', '$2y$10$jBxnaeaeUIl1/656QvnQC.CcnbuLB5BiZ6OdMqBN.1h2oiRIQ27tK', '1111111', 'LGOKG74', 'LGOqq56', NULL, NULL, 0, 'verified', NULL, NULL, '2021-09-14 10:36:53', NULL, NULL, 1, '2021-09-14 03:54:40', '2021-09-14 05:06:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_kyc`
--

CREATE TABLE `user_kyc` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `pincode` varchar(20) DEFAULT NULL,
  `profile_image` varchar(50) DEFAULT NULL,
  `aadhar_number` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `alternate_mobile_no` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asseennos`
--
ALTER TABLE `asseennos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_touchs`
--
ALTER TABLE `get_touchs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level_incomes`
--
ALTER TABLE `level_incomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repurchases`
--
ALTER TABLE `repurchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_quotes`
--
ALTER TABLE `request_quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_ratings`
--
ALTER TABLE `review_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subadminattributes`
--
ALTER TABLE `subadminattributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_systems`
--
ALTER TABLE `support_systems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_kyc`
--
ALTER TABLE `user_kyc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`(3072));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `asseennos`
--
ALTER TABLE `asseennos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `get_touchs`
--
ALTER TABLE `get_touchs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `level_incomes`
--
ALTER TABLE `level_incomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `repurchases`
--
ALTER TABLE `repurchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `request_quotes`
--
ALTER TABLE `request_quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review_ratings`
--
ALTER TABLE `review_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subadminattributes`
--
ALTER TABLE `subadminattributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `support_systems`
--
ALTER TABLE `support_systems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_kyc`
--
ALTER TABLE `user_kyc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
