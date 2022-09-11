-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 06:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'shopking@admin.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `assembled`
--

CREATE TABLE `assembled` (
  `id` int(100) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `processor_price` int(100) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `ram_price` int(100) NOT NULL,
  `harddisk` varchar(255) NOT NULL,
  `harddisk_price` int(100) NOT NULL,
  `cabinet` varchar(255) NOT NULL,
  `cabinet_price` int(100) NOT NULL,
  `screen` varchar(255) NOT NULL,
  `screen_price` int(100) NOT NULL,
  `graphic` varchar(225) NOT NULL,
  `graphic_price` int(100) NOT NULL,
  `keyboard` varchar(255) NOT NULL,
  `keyboard_price` int(100) NOT NULL,
  `speaker` varchar(255) NOT NULL,
  `speaker_price` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assembled`
--

INSERT INTO `assembled` (`id`, `processor`, `processor_price`, `ram`, `ram_price`, `harddisk`, `harddisk_price`, `cabinet`, `cabinet_price`, `screen`, `screen_price`, `graphic`, `graphic_price`, `keyboard`, `keyboard_price`, `speaker`, `speaker_price`) VALUES
(1, 'Dual Core 1st Generation with 945,G31 Motherboard(Zebronics)', 3000, 'DDR2 1GB', 500, '160GB Hard Disk Drive', 1000, 'Zebronics with SMPS', 1100, '15.6\" Inch Zebronics LED Monitor ', 3900, '1GB DDR3 Graphics', 2200, 'Iball USB Wintop Combo', 650, 'D7 Satellite Speaker', 350),
(2, 'Dual Core 1st Generation with G41 Motherboard(Zebronics)', 3500, 'DDR2 2GB', 1000, '250GB Hard Disk Drive', 1300, 'Artis with SMPS', 1700, '15.6\" Iball LED Monitor ', 4300, '2GB DDR3 Graphics', 3200, 'Dell USB Keyboard Mouse', 700, 'D9 Satellite Speaker', 350),
(3, 'Core 2 Duo with 945, G31 Motherboard(Zebronics)', 3000, 'DDR2 4GB', 2000, '320GB Hard Disk Drive', 1700, 'Zebion with SMPS', 1100, '19\" Inch Dell LED Monitor ', 5500, '4GB DDR3 Graphics', 6500, 'Xpro USB Keyboard Mouse', 600, 'Artis Satellite Speaker', 450),
(4, 'Core 2 Duo with G41 Motherboard(Zebronics)', 3500, 'DDR3 2GB', 1000, '500GB Hard Disk Drive', 2600, 'Xpro with SMPS', 1500, '19\" Inch Iball Sparkle LED Monitor ', 5300, '', 0, 'Asia Power USB Keyboard Mouse', 400, 'Artis Speaker', 600),
(5, 'Dual Core 4th Generation with H81 Motherboard(Gigabyte)', 7500, 'DDR3 4GB', 1500, '1TB Hard Disk Drive', 3700, 'Iball with SMPS', 1700, '19\" Inch Philips LED Monitor ', 5200, '', 0, '', 0, 'Iball Speaker', 600),
(6, 'Core i3 4th Generation with H81 Motherboard(Gigabyte)', 12000, '', 0, '', 0, '', 0, '19\" Inch LG LED Monitor ', 5500, '', 0, '', 0, '', 0),
(7, 'Core i5 4th Generation with H81 Motherboard(Gigabyte)', 17000, '', 0, '', 0, '', 0, '20\" Inch BenQ LED Monitor ', 5600, '', 0, '', 0, '', 0),
(8, 'Core i7 4th Generation with H81 Motherboard(Gigabyte)', 28500, '', 0, '', 0, '', 0, '20\" Inch Dell LED Monitor ', 6200, '', 0, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `count` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`count`, `p_id`, `ip_add`, `qty`) VALUES
(3, 8, '127.0.0.1', 1),
(4, 26, '127.0.0.1', 1),
(41, 77, '66.249.66.58', 1),
(42, 69, '66.249.66.58', 1),
(43, 74, '66.249.66.61', 1),
(44, 68, '66.249.66.61', 1),
(45, 73, '66.249.66.61', 1),
(46, 67, '66.249.66.61', 1),
(47, 72, '66.249.66.58', 1),
(48, 7, '111.119.199.66', 1),
(49, 28, '60.254.5.214', 1),
(50, 75, '66.249.66.108', 1),
(51, 76, '66.249.66.108', 1),
(52, 71, '66.249.66.106', 1),
(53, 79, '66.249.66.108', 1),
(54, 80, '66.249.66.106', 1),
(55, 70, '66.249.66.108', 1),
(56, 66, '66.249.66.106', 1),
(57, 78, '66.249.66.110', 1),
(58, 48, '203.194.100.204', 1),
(59, 53, '1.23.92.148', 1),
(60, 15, '1.23.92.148', 1),
(61, 14, '1.23.92.148', 1),
(62, 9, '1.23.92.148', 1),
(63, 39, '1.23.92.148', 1),
(65, 26, '1.23.218.12', 1),
(66, 3, '1.23.218.12', 1),
(67, 1, '1.23.218.12', 1),
(68, 59, '1.23.218.12', 1),
(69, 18, '1.23.92.182', 1),
(70, 27, '1.23.92.182', 1),
(71, 78, '1.23.92.182', 1),
(72, 76, '45.119.135.158', 1),
(73, 24, '106.220.100.225', 1),
(75, 54, '1.23.94.30', 1),
(84, 23, '43.224.254.211', 1),
(83, 27, '1.23.92.57', 1),
(82, 45, '1.23.92.57', 1),
(79, 27, '113.193.247.110', 1),
(80, 30, '113.193.247.110', 1),
(85, 47, '43.224.166.131', 1),
(87, 53, '209.190.113.85', 1),
(88, 52, '209.190.113.85', 1),
(89, 58, '209.190.113.85', 1),
(90, 59, '209.190.113.85', 1),
(91, 51, '209.190.113.85', 1),
(92, 57, '209.190.113.85', 1),
(93, 56, '209.190.113.85', 1),
(96, 76, '66.249.79.162', 1),
(95, 3, '43.224.164.185', 1),
(97, 78, '123.136.177.212', 1),
(98, 30, '207.244.66.70', 1),
(99, 55, '1.23.57.124', 1),
(100, 54, '207.244.66.70', 1),
(101, 43, '1.23.57.124', 1),
(102, 3, '123.136.176.54', 1),
(103, 35, '123.136.176.54', 1),
(104, 21, '123.136.176.54', 1),
(105, 68, '123.136.176.54', 1),
(106, 9, '123.136.176.54', 1),
(107, 62, '123.136.176.54', 1),
(108, 19, '123.136.176.54', 1),
(109, 42, '123.136.176.54', 1),
(110, 41, '123.136.176.54', 1),
(111, 37, '123.136.176.54', 1),
(112, 2, '123.136.176.54', 1),
(113, 40, '123.136.176.54', 1),
(114, 15, '123.136.176.54', 1),
(115, 11, '123.136.176.54', 1),
(116, 26, '123.136.176.54', 1),
(117, 39, '123.136.176.54', 1),
(118, 43, '123.136.176.54', 1),
(119, 77, '123.136.176.54', 1),
(120, 32, '123.136.176.54', 1),
(121, 33, '123.136.176.54', 1),
(122, 80, '123.136.176.54', 1),
(123, 45, '123.136.176.54', 1),
(124, 59, '123.136.176.54', 1),
(125, 29, '123.136.176.54', 1),
(126, 8, '123.136.176.54', 1),
(127, 74, '123.136.176.54', 1),
(128, 31, '123.136.176.54', 1),
(129, 57, '123.136.176.54', 1),
(130, 61, '123.136.176.54', 1),
(131, 38, '123.136.176.54', 1),
(132, 70, '123.136.176.54', 1),
(133, 51, '123.136.176.54', 1),
(134, 12, '123.136.176.54', 1),
(135, 30, '123.136.176.54', 1),
(136, 16, '123.136.176.54', 1),
(137, 36, '123.136.176.54', 1),
(138, 78, '123.136.176.54', 1),
(139, 20, '123.136.176.54', 1),
(140, 10, '123.136.176.54', 1),
(141, 64, '123.136.176.54', 1),
(142, 79, '123.136.176.54', 1),
(143, 34, '123.136.176.54', 1),
(144, 4, '123.136.176.54', 1),
(145, 13, '123.136.176.54', 1),
(146, 53, '123.136.176.54', 1),
(147, 23, '123.136.176.54', 1),
(148, 28, '123.136.176.54', 1),
(149, 27, '123.136.176.54', 1),
(150, 66, '123.136.176.54', 1),
(151, 17, '123.136.176.54', 1),
(152, 55, '123.136.176.54', 1),
(153, 48, '123.136.176.54', 1),
(154, 22, '123.136.176.54', 1),
(155, 72, '123.136.176.54', 1),
(156, 75, '123.136.176.54', 1),
(157, 5, '123.136.176.54', 1),
(158, 44, '123.136.176.54', 1),
(159, 7, '123.136.176.54', 1),
(160, 14, '123.136.176.54', 1),
(161, 25, '123.136.176.54', 1),
(162, 67, '123.136.176.54', 1),
(163, 60, '123.136.176.54', 1),
(164, 65, '123.136.176.54', 1),
(165, 58, '123.136.176.54', 1),
(166, 56, '123.136.176.54', 1),
(167, 76, '123.136.176.54', 1),
(168, 69, '123.136.176.54', 1),
(169, 47, '123.136.176.54', 1),
(170, 73, '123.136.176.54', 1),
(171, 54, '123.136.176.54', 1),
(172, 1, '123.136.176.54', 1),
(173, 46, '123.136.176.54', 1),
(174, 24, '123.136.176.54', 1),
(175, 71, '123.136.176.54', 1),
(176, 49, '123.136.176.54', 1),
(177, 18, '123.136.176.54', 1),
(178, 6, '123.136.176.54', 1),
(179, 50, '123.136.176.54', 1),
(180, 52, '123.136.176.54', 1),
(181, 3, '66.249.76.62', 1),
(182, 54, '66.249.76.63', 1),
(183, 42, '66.249.76.63', 1),
(184, 69, '66.249.66.106', 1),
(185, 31, '66.249.75.19', 1),
(186, 34, '66.249.76.62', 1),
(187, 5, '66.249.76.63', 1),
(188, 33, '66.249.76.63', 1),
(189, 7, '66.249.76.62', 1),
(190, 4, '66.249.76.63', 1),
(191, 8, '66.249.76.62', 1),
(192, 75, '66.249.73.190', 1),
(193, 74, '66.249.64.1', 1),
(194, 33, '66.249.64.62', 1),
(195, 71, '66.249.64.1', 1),
(196, 79, '66.249.64.1', 1),
(197, 58, '66.249.64.1', 1),
(198, 38, '66.249.64.60', 1),
(199, 18, '66.249.64.1', 1),
(200, 80, '66.249.64.60', 1),
(201, 55, '66.249.64.1', 1),
(202, 70, '66.249.64.62', 1),
(203, 16, '66.249.64.60', 1),
(204, 51, '66.249.64.60', 1),
(205, 62, '66.249.64.1', 1),
(206, 65, '66.249.64.60', 1),
(207, 39, '66.249.64.62', 1),
(208, 68, '66.249.64.60', 1),
(209, 37, '66.249.64.60', 1),
(210, 50, '66.249.64.1', 1),
(211, 73, '66.249.64.60', 1),
(212, 66, '66.249.64.62', 1),
(213, 14, '66.249.64.62', 1),
(214, 77, '66.249.64.62', 1),
(215, 13, '66.249.64.60', 1),
(216, 32, '66.249.64.1', 1),
(217, 59, '66.249.64.1', 1),
(218, 67, '66.249.64.1', 1),
(219, 72, '66.249.64.1', 1),
(220, 15, '66.249.64.1', 1),
(221, 19, '66.249.64.1', 1),
(222, 78, '66.249.64.1', 1),
(223, 17, '66.249.64.60', 1),
(224, 35, '66.249.64.1', 1),
(225, 32, '5.255.251.18', 1),
(226, 13, '66.249.76.88', 1),
(227, 4, '141.8.141.148', 1),
(228, 58, '87.250.244.20', 1),
(229, 56, '5.255.251.6', 1),
(230, 48, '66.249.76.74', 1),
(231, 10, '66.249.76.76', 1),
(232, 6, '66.249.76.55', 1),
(233, 2, '66.249.76.76', 1),
(234, 11, '66.249.76.74', 1),
(235, 64, '66.249.76.76', 1),
(236, 19, '66.249.76.74', 1),
(237, 47, '66.249.76.72', 1),
(238, 36, '66.249.76.72', 1),
(239, 27, '66.249.76.72', 1),
(240, 45, '66.249.76.76', 1),
(241, 61, '66.249.64.152', 1),
(242, 15, '66.249.76.72', 1),
(243, 60, '66.249.76.74', 1),
(244, 29, '66.249.76.72', 1),
(245, 17, '66.249.76.74', 1),
(246, 6, '66.249.76.76', 1),
(247, 2, '66.249.64.156', 1),
(248, 7, '66.249.76.76', 1),
(249, 51, '66.249.76.72', 1),
(250, 39, '66.249.76.72', 1),
(251, 45, '66.249.76.72', 1),
(252, 72, '66.249.76.72', 1),
(253, 64, '66.249.76.74', 1),
(254, 29, '66.249.64.152', 1),
(255, 15, '66.249.76.76', 1),
(256, 47, '66.249.76.74', 1),
(257, 17, '66.249.64.152', 1),
(258, 61, '66.249.76.74', 1),
(259, 70, '66.249.64.148', 1),
(260, 16, '66.249.76.76', 1),
(261, 27, '66.249.76.74', 1),
(262, 31, '66.249.76.74', 1),
(263, 76, '66.249.76.72', 1),
(264, 1, '66.249.76.74', 1),
(265, 30, '66.249.76.72', 1),
(266, 56, '66.249.76.76', 1),
(267, 46, '66.249.76.76', 1),
(268, 49, '66.249.76.76', 1),
(269, 52, '66.249.76.76', 1),
(270, 43, '66.249.76.76', 1),
(271, 22, '66.249.76.74', 1),
(272, 8, '66.249.64.152', 1),
(273, 5, '66.249.76.76', 1),
(274, 1, '66.249.64.148', 1),
(275, 43, '66.249.76.74', 1),
(276, 56, '66.249.76.72', 1),
(277, 22, '66.249.76.76', 1),
(278, 49, '66.249.76.72', 1),
(279, 52, '66.249.64.152', 1),
(280, 65, '66.249.76.76', 1),
(281, 55, '66.249.64.152', 1),
(282, 37, '66.249.76.72', 1),
(283, 24, '66.249.64.148', 1),
(284, 32, '66.249.76.74', 1),
(285, 35, '66.249.76.74', 1),
(286, 50, '66.249.76.76', 1),
(287, 24, '66.249.76.76', 1),
(288, 79, '66.249.76.72', 1),
(289, 57, '66.249.76.74', 1),
(290, 3, '66.249.76.74', 1),
(291, 57, '66.249.64.148', 1),
(292, 74, '66.249.76.74', 1),
(293, 73, '66.249.64.156', 1),
(294, 77, '66.249.76.74', 1),
(295, 67, '66.249.64.152', 1),
(296, 69, '66.249.76.76', 1),
(297, 12, '66.249.64.152', 1),
(298, 26, '66.249.64.156', 1),
(299, 25, '66.249.64.156', 1),
(300, 23, '66.249.76.76', 1),
(301, 40, '66.249.76.72', 1),
(302, 33, '66.249.76.74', 1),
(303, 14, '66.249.76.72', 1),
(304, 23, '66.249.76.72', 1),
(305, 25, '66.249.76.76', 1),
(306, 12, '66.249.76.72', 1),
(307, 68, '66.249.76.72', 1),
(308, 18, '66.249.76.76', 1),
(309, 62, '66.249.76.72', 1),
(310, 75, '66.249.76.72', 1),
(311, 66, '66.249.76.72', 1),
(312, 26, '66.249.76.72', 1),
(313, 40, '66.249.76.74', 1),
(314, 34, '66.249.76.74', 1),
(315, 76, '141.8.184.15', 1),
(316, 68, '141.8.184.15', 1),
(317, 73, '141.8.184.15', 1),
(318, 68, '141.8.183.12', 1),
(319, 5, '49.33.168.59', 1),
(320, 73, '111.119.212.130', 1),
(321, 69, '49.35.125.188', 1),
(322, 21, '66.249.76.76', 1),
(323, 41, '66.249.66.136', 1),
(324, 28, '66.249.76.74', 1),
(325, 44, '66.249.66.136', 1),
(326, 22, '1.22.109.239', 1),
(327, 73, '5.255.253.13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Computers & Laptops'),
(2, 'Cables'),
(3, 'Pheriperals'),
(4, 'Dongles & Rounters');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `customer_ip` varchar(100) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_lname` text NOT NULL,
  `customer_email` varchar(225) NOT NULL,
  `customer_pass` varchar(225) NOT NULL,
  `customer_image` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(200) NOT NULL,
  `customer_pin` varchar(225) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `register_date` varchar(255) NOT NULL,
  `confirmed` int(11) NOT NULL,
  `confirm_code` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_lname`, `customer_email`, `customer_pass`, `customer_image`, `customer_city`, `customer_contact`, `customer_pin`, `customer_address`, `register_date`, `confirmed`, `confirm_code`) VALUES
(1, '::1', 'Abc', 'def', 'abc@gmail.com', '1', 'Untitled.png', 'mum', '1234567890', 'xzn', 'zxh', '13-Jan-2016  Wed 12:07:51 AM', 0, 7643);

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

CREATE TABLE `customer_login` (
  `id` int(100) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `login_date` varchar(255) NOT NULL,
  `ip_add` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(225) NOT NULL,
  `customer_image` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `comment` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(100) NOT NULL,
  `customer_email` varchar(225) NOT NULL,
  `date` varchar(255) NOT NULL,
  `up` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `user_ip` varchar(225) NOT NULL,
  `p_id` int(100) NOT NULL,
  `p_title` text NOT NULL,
  `p_qty` int(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(225) NOT NULL,
  `cancel_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` mediumtext NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_period` varchar(225) NOT NULL,
  `product_related` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `product_period`, `product_related`) VALUES
(1, 1, 'Dell Inspiron 3542', 29000, 'PROCESSOR      : Intel Core i3 Processor with 4th Generation\r\nRAM                 : 4GB\r\nHDD                 : 1TB Hard Disk\r\nBackpack          : Dell Bag\r\nDefault OS        : DOS or Ubuntu\r\n\r\nSoftware Installation:\r\n   \r\nWindows           : 7,8,8.1,10\r\nBasic Sofware :Office 7,10,13,vlc player, adobe reader etc.', 'fc6036a2af5d5cde497563fbc93f63ad795ef553.jpeg', 'Dell,laptop,lappy,inspiron,notebook,dell notebook,dell inspiron 3542', '1 Year Onsite Warranty From Manufacturer', 'laptop'),
(2, 1, 'Lenovo G50-30', 21000, 'PROCESSOR      : Intel Quard Core Processor with 4th Generation\r\nRAM                 : 4GB\r\nHDD                 : 500GB Hard Disk \r\nBackpack          : Lenovo Bag\r\nDefault OS        : DOS \r\n\r\nSoftware Installation:\r\n   \r\nWindows           : 7,8,8.1,10\r\nBasic Sofware :Office 7,10,13,vlc player, adobe reader etc.', '5080_1449463319.jpg', 'lenovo,laptop,lappy,g50,lenovo laptop,lenovo g50-30,g5030,lenovo g5030 ', '1 Year Onsite Warranty From Manufacturer', 'laptop'),
(3, 1, 'Dell Inspiron 3558', 26000, 'PROCESSOR      : Intel Core i3 Processor with 4th Generation\r\nRAM                 : 4GB\r\nHDD                 : 500GB Hard Disk\r\nBackpack          : Dell Bag\r\nDefault OS        : DOS or Ubuntu\r\n\r\nSoftware Installation:\r\n   \r\nWindows           : 7,8,8.1,10\r\nBasic Sofware :Office 7,10,13,vlc player, adobe reader etc.\r\n', 'csm_Inspiron_3542_Quer_0bba99f9e2.jpg', 'Dell,laptop,lappy,inspiron,dell inspiron 3558 laptop,notebook,dell notebook,dell 3558 laptop', '1 Year Onsite Warranty From Manufacturer', 'laptop'),
(4, 1, 'HP 15 Notebook', 22000, 'PROCESSOR      : Intel DualCore Processor with 4th Generation\r\nRAM                 : 4GB\r\nHDD                 : 500GB Hard Disk\r\nBackpack          : HP Bag\r\nDefault OS        : DOS \r\n\r\nSoftware Installation:\r\n   \r\nWindows           : 7,8,8.1,10\r\nBasic Sofware :Office 7,10,13,vlc player, adobe reader etc.', 'HP.png', 'Hp,laptop,lappy,inspiron,hp 15 notebook,15,notebook,laptop,hp laptop,hp dual core', '1 Year Onsite Warranty From Manufacturer', 'laptop'),
(5, 1, 'HP 15 Notebook', 20000, 'PROCESSOR      : AMD Dual Core Processor\r\nRAM                 : 4GB\r\nHDD                 : 500GB Hard Disk\r\nBackpack          : HP Bag\r\nDefault OS        : DOS \r\n\r\nSoftware Installation:\r\n   \r\nWindows           : 7,8,8.1,10\r\nBasic Sofware :Office 7,10,13,vlc player, adobe reader etc.', 'HP.png', 'Hp,laptop,lappy,notebook,hp 15,hpnotebok,notebook', '1 Year Onsite Warranty From Manufacturer', 'laptop'),
(6, 1, 'Zebronics Desktop Pc', 11000, 'PROCESSOR: Intel Dual Core Processor				\r\nMOTHERBOARD: Zebronics Motherboard				\r\nRAM: 2GB 				\r\nHDD: 160GB Hard Disk				\r\nCABINET: Zebronics Cabinet with SMPS				\r\nKEYBOARD & MOUSE :Zebronics Keyboard & Mouse				\r\nMONITOR: Zebronics 15.4 LED Screen	\r\nSPEAKER: MultiMedia 2.0 Speaker	\r\n\r\nSoftware Installation:\r\n   \r\nWindows           : 7,8,8.1,10\r\nBasic Sofware :Office 7,10,13,vlc player, adobe reader etc			\r\n			\r\n', 'zebro.jpg', 'Desktop,pc,assembled,zebronics,computer', '1 Year Warranty From S.S COMPUTECH', 'computer'),
(7, 1, 'Zebronics Desktop Pc', 14000, 'PROCESSOR: Intel Dual Core Processor				\r\nMOTHERBOARD: Zebronics Motherboard				\r\nRAM: 2GB 				\r\nHDD: 250GB 				\r\nCABINET: Zebronics Cabinet with SMPS				\r\nKEYBOARD & MOUSE :Zebronics Keyboard & Mouse				\r\nMONITOR: Zebronics 18.5 LED Screen\r\nDVD RW: LG DVD Rw				\r\nSPEAKER:MultiMedia 2.0 Speaker				\r\n\r\nSoftware Installation:\r\n   \r\nWindows           : 7,8,8.1,10\r\nBasic Sofware :Office 7,10,13,vlc player, adobe reader etc', 'zebro.jpg', 'Desktop,pc,assembled,zebronics,computer', '1 Year Warranty From S.S COMPUTECH', 'computer'),
(8, 1, 'Zebronics Desktop Pc', 17000, 'PROCESSOR: Intel Dual Core Processor				\r\nMOTHERBOARD: G41 Zebronics Motherboard				\r\nRAM: 4GB DDR3 RAM				\r\nHDD: 500GB Hard Disk				\r\nCABINET: Zebronics Cabinet with SMPS				\r\nKEYBOARD & MOUSE: Zebronics Keyboard & Mouse				\r\nMONITOR: 18.5 LED Screen(Philips,Iball,Acer)\r\nSPEAKER: MultiMedia 2.0 Speaker	\r\nDVD Rw: LG DVD Rw\r\n\r\nSoftware Installation:\r\n   \r\nWindows           : 7,8,8.1,10\r\nBasic Sofware :Office 7,10,13,vlc player, adobe reader etc			\r\n', 'zebro.jpg', 'Desktop,pc,assembled,zebronics,computer', '1 Year Warranty From S.S COMPUTECH', 'computer'),
(9, 1, 'Iball Desktop PC', 20000, 'PROCESSOR: Intel Celeron Dual Core Processor				\r\nMOTHERBOARD: Gigabyte Motherboard				\r\nRAM: 4GB RAM DDR3				\r\nHDD: 500GB Hard Disk				\r\nCABINET: Iball Cabinet with SMPS				\r\nKEYBOAR & MOUSE: Iball Keyboard & Mouse				\r\nMONITOR: 18.5 LED Screen(Philips,Acer,Iball)				\r\nSPEAKER: MultiMedia 2.0 Speaker				\r\nDVD Rw: LG DVD Writer\r\n\r\nSoftware Installation:\r\n   \r\nWindows           : 7,8,8.1,10\r\nBasic Sofware :Office 7,10,13,vlc player, adobe reader etc			\r\n							\r\n', 'iball.jpg', 'Desktop,pc,assembled,iball,computer', '1 Year Warranty From S.S COMPUTECH', 'computer'),
(10, 1, 'Iball Desktop PC', 23000, 'PROCESSOR: Intel Pentium Dual Core Processor with 4th Generation				\r\nMOTHERBOARD: H81 Gigabyte Motherboard				\r\nRAM: 4GB RAM DDR3				\r\nHDD: 500GB Hard Disk				\r\nCABINET: Iball Cabinet with SMPS				\r\nKEYBOARD & MOUSE: Iball Keyboard & Mouse				\r\nMONITOR: 18.5 LED Screen(Philips,Acer,Iball)				\r\nSPAEKER: MultiMedia 2.0 Speaker				\r\nDVD Rw: LG DVD Writer				\r\n\r\nSoftware Installation:\r\n   \r\nWindows           : 7,8,8.1,10\r\nBasic Sofware :Office 7,10,13,vlc player, adobe reader etc			\r\n			', 'iball.jpg', 'Desktop,pc,assembled,iball,computer', '1 Year Warranty From S.S COMPUTECH', 'computer'),
(11, 1, 'Iball Desktop PC', 26000, 'PROCESSOR: Intel Core i3 Processor with 4th Generation				\r\nMOTHERBOARD: H81 Gigabyte Motherboard				\r\nRAM: 4GB RAM DDR3				\r\nHDD: 500GB Hard Disk				\r\nCABINET: Iball Cabinet with SMPS				\r\nKEYBOARD & MOUSE: Iball Keyboard & Mouse				\r\nMONITOR: 18.5 LED Screen(Philips,Acer,Iball)				\r\nSPEAKER: MultiMedia 2.0 Speaker				\r\nDVD Rw: LG DVD Writer				\r\n\r\n\r\nSoftware Installation:\r\n   \r\nWindows           : 7,8,8.1,10\r\nBasic Sofware :Office 7,10,13,vlc player, adobe reader etc			\r\n			', 'iball.jpg', 'Desktop,pc,assembled,iball,computer', '1 Year Warranty From S.S COMPUTECH', 'computer'),
(12, 3, 'Zebronics Cabinet', 1100, 'Zebronics Cabinet With SMPS', 'zebro_c.jpg', 'zebronics,cabinet,smps', '1 Year Warranty From Zebronics on SMPS ', 'cabinet'),
(13, 3, 'Zebion Cabinet', 1100, 'Zebion Cabinet With SMPS', 'index00.jpg', 'zebion,cabinet,smps', '1 Year Warranty From Zebion on SMPS ', 'cabinet'),
(14, 3, 'Artis Cabinet', 1700, 'Artis Cabinet With SMPS', 'mbJHr50FIz5xI0oh3L-4j2Q.jpg', 'artis,cabinet,smps,vip', '1 Year Warranty From Artis on SMPS ', 'cabinet'),
(15, 3, 'Iball Cabinet', 1700, 'Iball Cabinet With SMPS', 'iball_c.jpg', 'iball,cabinet,smps', '1 Year Warranty From Iball on SMPS ', 'cabinet'),
(16, 1, 'Iball BABY Cabinet', 2000, 'Iball Cabinet With SMPS', 'iballbabay342.jpg', 'iball,cabinet,smps,baby,bb', '1 Year Warranty From Iball on SMPS ', 'cabinet'),
(17, 3, 'Iball Sparkle Monitor ', 4300, 'iball', 'index.jpg', 'iball,monitor,display,15.6,inch', '3 Year Warranty From Iball', 'monitor'),
(18, 3, 'Dell LED Monitor ', 5500, 'dell', 'dell-18-5-inch-led-monitor-e1916h.jpg', 'monitor,dell,19,inch,display', '3 Year Warranty From Dell', 'monitor'),
(19, 3, 'Iball Sparkle Monitor ', 5300, 'iball', 'index.jpg', 'monitor,iball,19,inch,display', '3 Year Warranty From Iball', 'monitor'),
(20, 3, 'Philips LED Monitor', 5200, 'philips', 'Philips-19-5-Inch-Led-SDL055308194-1-7b2ba.jpg', 'monitor,philips,19,inch,display', '3 Year Warranty From Philips', 'monitor'),
(21, 3, 'LG LED Monitor', 5500, 'lg', 'lg.jpg', 'monitor,lg,19,inch,display', '3 Year Warranty From LG', 'monitor'),
(22, 3, 'BenQ Monitor', 5600, 'be', 'images.jpg', 'monitor,benq,20,inch,display', '3 Year Warranty From BenQ', 'monitor'),
(23, 3, 'Dell LED Monitor ', 6200, 'kk', 'dell-18-5-inch-led-monitor-e1916h.jpg', 'monitor,dell,20,inch,display', '3 Year Warranty From Dell', 'monitor'),
(24, 3, 'Zebronics Monitor', 3900, 'monitor', 'ZEB-15.6A-LED-pic1.jpg', 'monitor,zebronics,15.6,inch', '1 Year Warranty From Zebronics', 'monitor'),
(25, 3, 'Iball UPS', 1600, 'Specification: \n\nMODEL: Iball Nirantar UPS-621V\nCAPACITY: 600VA/360W\nINPUT VOLTAGE: 230VAC\nINPUT VOLTAGE RANGE: 140-300 VAC\nOUTPUT VOLTAGE REGULATION(BATTRY MODE): +-10%\nTRANSFER TIME: Typical 4-8 ms\nWAVEFORM: Modified sine wave\nINDICATOR: 4-8 ms-Typical\nBATTERY TYPE: 12V7AH x 1\nAUDIBLE ALARM: Beeping while start\nPHISICAL NET WEIGHT(kgs): 4.25kg\nENVIRONMENT: 0\'c - 40\'c\n', 'iballups.jpg', 'ups,iball,power,supply,electricity,backup,iball ups,iball power backup,iball power,ups iball', '1 Year Warranty From Manufacturer', 'ups'),
(26, 3, 'Artis UPS', 1700, 'MODEl: Powersafe 600VA\r\nOUTPUt VALTAGE: 230VAC\r\nBACKUP TIME: 10-15 Minutes (PC +15\" Monitor Load)\r\nNET WEIGHT (kgs): 4.25 kgs\r\nDIMENSION (DxWxH): 279x10x142\r\n\r\nFeatures:\r\n\r\n* Compact size, Light weight\r\n* Superior microprocesor control\r\n* High relaibility\r\n* Boost and buck AVR for voltage stabilisation\r\n* Auto restart \r\n* Simulated sine wave\r\n* Cold start function\r\n* Generator compatible\r\n* Provides AC overload protection', '600UPS-600-1.PNG', 'ups,artis,power,supply,electricity,backup,artis ups,artis power backup,artis ups,ups artis', '1 Year Warranty From Manufacturer', 'ups'),
(27, 4, 'TP-LINK Router', 800, 'HARDWARE FEATURES:\r\n\r\nInterface                   \r\n      :4 10/100Mbps LAN Ports\r\n      :1 10/100Mbps WAN Port\r\nButton                       \r\n     :WPS/Reset Button\r\nAntenna                      \r\n     :5dBi Fixed Omni Directional\r\nExternal Power Supply\r\n     :5VDC/0.6A\r\nWireless Standards\r\n     :IEEE 802.11n*, IEEE 802.11g, IEEE 802.11b\r\nDimensions ( W x D x H )\r\n     :6.9 x 4.6 x 1.3 in. (174 x 118 x 33 mm)\r\n\r\nWIRELESS FEATURES\r\n\r\nFrequency: 2.4-2.4835GHz\r\nSignal Rate \r\n      11n: Up to 150Mbps(dynamic)\r\n      11g: Up to 54Mbps(dynamic)\r\n      11b: Up to 11Mbps(dynamic)\r\nReception Sensitivity	\r\n      130M: -68dBm@10% PER\r\n      108M: -68dBm@10% PER\r\n      54M: -68dBm@10% PER\r\n      11M: -85dBm@8% PER\r\n      6M: -88dBm@10% PER\r\n      1M: -90dBm@8% PER\r\nTransmit Power	\r\n      CE:<20dBm(2.4GHz)\r\n      FCC:<30dBm\r\nWireless Functions	\r\n      :Enable/Disable Wireless Radio, WDS Bridge, WMM, Wireless Statistics\r\nWireless Security	\r\n      :64/128/152-bit WEP / WPA / WPA2,WPA-PSK / WPA2-PSK\r\n\r\nSOFTWARE FEATURES\r\n\r\nQuality of Service: WMM, Bandwidth Control\r\nWAN Type: Dynamic IP/Static IP/PPPoE/PPTP(Dual Access)/L2TP(Dual Access)/BigPond\r\nManagement\r\n        :Access Control\r\n        :Local Management\r\n        :Remote Management\r\nDHCP: Server, Client, DHCP Client List,\r\n\r\nAddress Reservation\r\nPort Forwarding	Virtual Server,Port Triggering, UPnP, DMZ\r\nDynamic DNS	DynDns, Comexe, NO-IP\r\nVPN Pass-Through	PPTP, L2TP, IPSec (ESP Head)\r\nAccess Control	Parental Control, Local Management Control, Host List, Access Schedule, Rule Management\r\nFirewall Security	DoS, SPI Firewall\r\nIP Address Filter/MAC Address Filter/Domain Filter\r\nIP and MAC Address Binding\r\n\r\nProtocols: Support IPv4 and IPv6\r\nGuest Network: 2.4GHz Guest Network x1\r\n\r\nOTHERS\r\n\r\nCertification	CE, FCC, RoHS\r\nPackage Contents	\r\n     :TL-WR740N\r\n     :1 fixed omni directional antennas\r\n     :Power supply unit\r\n     :Resource CD\r\n     :Ethernet Cable\r\n     :Quick Installation Guide\r\n   \r\nSystem Requirements\r\n     :MicrosoftÂ® WindowsÂ® 98SE, NT, 2000, XP, Vistaâ„¢ or Windows 7, Windows8/ 8.1/10\r\nMACÂ® OS, NetWareÂ®, UNIXÂ® or Linux\r\n\r\n\r\nEnvironment\r\n	\r\n     :Operating Temperature: 0?~40? (32?~104?)\r\n     :Storage Temperature: -40?~70? (-40?~158?)\r\n     :Operating Humidity: 10%~90% non-condensing\r\n     :Storage Humidity: 5%~90% non-condensing', 'tplink1.jpg', 'router,tplink,wifi,internet,antena,single,single antena', '3 Year Warranty From Manufacturer', 'router'),
(28, 4, 'TP-LINK Router', 1100, 'HARDWARE FEATURES\r\n\r\nInterfac :2 10/100Mbps LAN Ports\r\n                 1 10/100Mbps WAN Port\r\nButton	:WPS/Reset\r\nDimensions (W X D X H):6.2 x 4.8 x 1.3 in.(158 x 122 x 32 mm)\r\nAntenna	:5dBi Fixed Omni Directional\r\nExternal Power Supply	:5VDC / 0.6A\r\n\r\nWIRELESS FEATURES\r\n\r\nWireless Standard:IEEE 802.11b, IEEE 802.11g, IEEE 802.11n\r\nFrequency:2.4-2.4835GHz\r\nSignal Rate:	Up to 150Mbps\r\nReception Sensitivity:  130M: -68dBm@10% PER\r\n                        108M: -68dBm@10% PER\r\n                        54M: -68dBm@10% PER\r\n                        11M: -85dBm@8% PER\r\n                        6M: -88dBm@10% PER\r\n                        1M: -90dBm@8% PER\r\n\r\nTransmit Power: CE:\r\n                <20dBm(2.4GHz)\r\n                FCC:\r\n                <30dBm\r\nWireless Functions:Enable/Disable Wireless Radio, WDS Bridge, WMM, Wireless Statistics\r\nWireless Security:64/128/152-bit WEP / WPA / WPA2,WPA-PSK / WPA2-PSK\r\n\r\nSOFTWARE FEATURES\r\n\r\nQuality of Service:WMM, Bandwidth Control\r\nWAN Type:Dynamic IP/Static IP/PPPoE/ PPTP/L2TP/BigPond\r\nManagement:Access Control\r\n           Local Management\r\n           Remote Management\r\nDHCP:	Server, Client, DHCP Client List, Address Reservation\r\nPort Forwarding:	Virtual Server, Port Triggering, UPnP, DMZ\r\nDynamic DNS:DynDns, Comexe, NO-IP\r\nVPN Pass-Through:PPTP, L2TP, IPSec (ESP Head)\r\nAccess Control:Parental Control, Local Management Control, Host List, Access Schedule, Rule Management\r\nFirewall Security:DoS, SPI Firewall\r\n                  IP Address Filter/MAC Address Filter/Domain Filter\r\n                  IP and MAC Address Binding\r\nOTHERS\r\n\r\nCertification:CE, FCC, RoHS\r\nPackage Contents:TL-WR720N\r\n                 Power Supply Unit\r\n                 Resource CD\r\n                 RJ-45 Ethernet Cable\r\n                 Quick Installation Guide\r\nSystem Requirements:MicrosoftÂ® WindowsÂ® 2000, XP, Vistaâ„¢ or Windows 7, Windows8/ 8.1/10\r\n                    MACÂ® OS, NetWareÂ®, UNIXÂ® or Linux\r\nEnvironment:Operating Temperature: 0?~40? (32?~104?)\r\n            Storage Temperature: -40?~70? (-40?~158?)\r\n            Operating Humidity: 10%~90% non-condensing\r\n            Storage Humidity: 5%~95% non-condensing', 'tplink2n.jpg', 'router,tplink,wifi,internet,double,antena,double antena,tplink double antena', '3 Year Warranty From Manufacturer', 'router'),
(29, 4, 'Tenda Router', 900, 'HARDWARE:\r\n\r\nStandard&Protocol\r\n     :IEEE 802.3/3U IEEE 802.11n/g/b\r\nInterface\r\n     :10/100Mbps WAN Port;3 10/100Mbps LAN Ports\r\nAntenna 2\r\n     :fixed 5dbi Omni Directional antenas\r\nButton1\r\n     :Reset/WPS Button\r\nDimension: 127.4mm*90.5mm*26mm (L*W*H)\r\nFrequency Range: 2.412GHz-2.472GHz\r\nInternet Connection Type: Dynamic IP,PPPOE,Static IP,L2TP,PPTP\r\n\r\nWireless\r\n\r\nWireless Link RateIEEE: 802.11n: up to 300Mbps;IEEE 802.11g: up to 54Mbps;IEEE 802.11b: up to 11Mbps\r\nWireless Function: Enable/Disable Wireless Radio;Wireless Access Control\r\n\r\n\r\nSoftware\r\n\r\nWrieless Security: 64/128bit WEP;WPA-PSK;WPA2-PSK;WPS support\r\nDHCP Server:Built-in DHCP server;DHCP Client List;Address Reservation\r\nVirtual Server:Port Forwarding;DMZ Host\r\nDynamic DNS: No-IP;dyndns\r\nVPN Pass-Through: PPTP;L2TP\r\n\r\nOthers\r\n\r\nWorking Mode:Universal Repeater;AP;WISP;WDS Bridge\r\nReception Sensitivity: \r\n          b mode:1M -92dBm@8% 11M -87dBm@8% PER;\r\n          g mode:54M -72dBm@8% PER;\r\n          n mode:72.2M -68dBm@8% PER; 150M -68dBm@8% PER\r\nParental Control: Client Filter;Mac Filter;Websites Filter\r\nOther : Bandwidth Control;Mac Address Clone;Remote Web Management;System Log\r\nPackage Content: \r\n          Wireless N300 Easy Setup Router N301;Quick Installation Guide;\r\n          Ethernet cable;Power adapter;Resources CD\r\nEnvironment: \r\n          Operating Temperature: 0?~40?;\r\n          Storage Temperature: -40?~70?;\r\n          Operating Humidity: 10%~90% non-condensing;\r\n          Storage Humidity: 5%~90% non-condensing\r\nCertification: FCC, CE,RoHs', 'Tenda-Wirless-N300-Easy-Setup-SDL002858707-4-6f7a5.jpg', 'router,tenda,wifi,internet,double,antena,tenda double antena router,tenda n301,n300', '2 Year Warranty From Manufacturer', 'router'),
(30, 4, 'Netgear Router', 1400, 'HIGHLIGHTS\r\n\r\n     :2 Year National Warranty Type \r\n     :Wireless Routers Without Modem Speed \r\n     :300 Mbps Number Of Usb Ports \r\n     :2 Number Of Antennae \r\n     :2 Warranty \r\n     :2 Year National Warranty \r\n \r\nTECHNICAL  SPECIFICATION\r\n\r\nBox Contents:	Main Unit, User Manual\r\n\r\nHardware\r\n\r\nInterface: N300\r\nButton:	Easy push button WiFi connections\r\nExternal Power Supply: 240 v\r\nWireless Standards: 802.11 b/g/n\r\nNo. of Antenna: 2\r\n\r\nGeneral\r\n\r\nBrand:	Netgear\r\nModel:	WNR614\r\nColour:	White\r\nStandard IEEE: 802.11\r\nSSID Support: Yes\r\nFrequency: 2.4 ghz\r\nWAN Type: Fast Ethernet ports\r\nDHCP: Yes\r\nSupported Software	\r\n        internet Explorer 5.0, \r\n        Firefox 2.0 or Safari 1.4 or higher\r\n\r\nPorts\r\nNo. of LAN Ports :4\r\n\r\nWireless Features\r\n\r\nSignal Rate: 300 mbps\r\n\r\nSoftware Features\r\n\r\nOperating System: Windows 7, 8, Vista, XP, 2000, Mac OS, UNIX, or Linux\r\nAccess Control:WPA/WPA2 PSK and WEP\r\n\r\nWarranty\r\nPeriod	:24 months\r\n\r\nSecurity\r\n\r\nFirewell Security: SPI and NAT\r\nOther Security Features	: Advanced Quality of Service (QoS), Guest Network Access\r\n\r\nProduct Dimension\r\n\r\nLength: 140 mm\r\nHeight: 35 mm\r\nWidth: 173 mm\r\nWeight: 200 g', 'netgear2n.jpg', 'router,netgear,wifi,internet,double,antena,netgear double antena router,netgear 300,netgear n300,n300 router', '2 Year Warranty From Manufacturer', 'router'),
(31, 4, 'Netgear Router', 1000, 'HIGHLIGHTS\r\n\r\n     :2 Year National Warranty Type \r\n     :Wireless Routers Without Modem Speed \r\n     :150 Mbps Number Of Usb Ports \r\n     :1 Number Of Antenna \r\n     :2 Warranty \r\n     :2 Year National Warranty \r\n \r\nTECHNICAL  SPECIFICATION\r\n\r\nBox Contents	\r\n     :Main Unit, User Manual\r\nHardware\r\nInterface: N150\r\nButton: push button WiFi connections (WPS)\r\nExternal Power Supply: 240 v\r\nWireless Standards: IEEE 802.11b/g/n\r\nNo. of Antenna: 1\r\n\r\nGeneral\r\n\r\nBrand: Netgear\r\nModel: JNR1010\r\nColour: White\r\nStandard IEEE: IEEE 802.11b/g/n\r\nSSID Support: Multiple SSID Guest Networks\r\nFrequency: 2.4 ghz\r\nWAN Type: RJ-45\r\nDHCP: Yes\r\nSupported Software: \r\n           Microsoft Internet Explorer 5.0,\r\n           Firefox 2.0 or Safari 1.4 or higher\r\nNo. of LAN Ports: 4\r\n\r\nWireless Features\r\n\r\nSignal RateL 150 mbps\r\nCertifications	: CE, FCC, RoHS\r\n\r\nSoftware Features\r\nOperating System: \r\n      Microsoft Windows 7, 8, \r\n      Vista, XP, 2000, Mac OS, UNIX, or Linux\r\n\r\nAccess Control: WPA/WPA2-PSK\r\n\r\nSecurity\r\nFirewell Security: SPI and NAT\r\nProduct Dimension\r\n   Length: 139 mm\r\n   Height:  30 mm\r\n   Width: 177 mm\r\n   Weight: 217 g\r\nWarranty: Period 2 Year Warranty', 'netgear1a.jpg', 'router,netgear,wifi,internet,single,antena', '2 Year Warranty From Manufacturer', 'router'),
(32, 4, 'Dlink Router', 2400, 'ukxj', 'D-LINK-N450-Wireless-RangMax-Villa-WiFi-Router-Triple-Antenna-ASOS-Lsea-Center-EPIC-OPEN-DIR.jpg', 'router,dlink,wifi,internet,triple,antena', '1 Year Warranty From Manufacturer', 'router'),
(33, 4, 'TP-LINK Wifi Adaptor', 500, 'Specification:\r\n\r\n* Standards: IEEE 802.11b/g/n\r\n* Frequency Range: 2.4~2.4835GHz\r\n* Wireless Speed: Upto 150Mbps\r\n* Security: WEP,WPA/WPA2,WPA-PSK/WAP2-PSK\r\n* Dimensions (WxDxH): 0.73x0.59x0.28 in.(18.6x15x71mm)', 'TP-LINK-TL-WN725N-150Mbps-mini-USB-wireless-card-wifi-adapter-desktop-computers-laptops.jpg', 'adaptor,wifi,tplink wifi adaptor', '1 Year Warranty From Manufacturer', 'wifi adaptor'),
(34, 4, 'Tenda Wifi Adaptor', 450, 'Key Features:\r\n\r\n* Compliant with IEEE802.11n/g/b\r\n* Wireless speed of upto 150Mbps\r\n* Three working modes, infrastructure, \r\n  Ad-Hoc and Soft AP\r\n* WEP/WAP/WPA@ encryption method\r\n* Smooth video and audio with WMM techhnology\r\n  Os-Windows, Max and Linux etc.', 'USB-Adapter-super-Mini-Network-card-Tenda-W311MI-USB-2-0-150Mbps-Wireless-LAN-card-usb.jpg', 'adaptor,wifi,tenda wifi adaptor,wifi adaptor,wifi dongle', '1 Year Warranty From Manufacturer', 'wifi adaptor'),
(35, 3, 'Iball Speaker', 600, 'Features:\r\n\r\n* Phone + Volumme + Headphone Jack\r\n* Idea For Laptop & Desktops\r\n* 2 Speakers\r\n* Magnetically Shielded\r\n* Driver Unit-3\" Full Range\r\n\r\nSpecifications:\r\n\r\n* Output Power :460W PMPO\r\n* Dimensions (WxHxD): 9cm x 19cm x 9.5cm(each satellite)\r\n* Frequency Response: 65Hz-20KHz\r\n* Input Electric Voltage: 230V AC ', '1437938695490019877-1.jpg', 'speaker,iball,iball speaker,sound', '1 Year Warranty From Manufacturer', 'speaker'),
(36, 3, 'Artis Speaker', 600, 'Features:\r\n\r\n* USB Powered\r\n* Superior Listening experience\r\n* Enhanced low frequncy effect\r\n* Wired volume control\r\n* 600W PMPO\r\n* Idea For Laptop & Desktops\r\n* Powerful Bass\r\n\r\nSpecifications:\r\n\r\n* Output Power : 475Wx2\r\n* Speaker Unit : 50mmx2\r\n* Frequency response : 50mm x 2\r\n* Power : 5V USB', 'Artis-USB-Speakers-2-Computer-SDL869070810-1-80bd2.jpg', 'speaker,artis,artis speaker,sound,speakers', '1 Year Warranty From Manufacturer', 'speaker'),
(37, 3, 'Artis Speaker', 450, 'Features:\r\n\r\n* USB Powered\r\n* Superior Listening experience\r\n* Enhanced low frequncy effect\r\n* Wired volume control\r\n* 600W PMPO\r\n* Idea For Laptop & Desktops\r\n* Powerful Bass\r\n\r\nSpecifications:\r\n\r\n* Output Power : 300Wx2\r\n* Speaker Unit : 50mmx2\r\n* Freq. Response : 60Hz-20KHz\r\n* Power : 5V USB', 'Artis-USB-Speakers-2-Computer-SDL108435518-1-2ae0c.jpg', 'speakers,artis,artis speaker,sound,artis sound,artis mini speakers', '1 Year Warranty From Manufacturer', 'speaker'),
(38, 3, 'Iball Wintop', 650, 'Features\r\n\r\n  *Elegant & sturdy design\r\n  *Special soft feel keys\r\n  *Water resistance design\r\n  *Extra comfort with Big Enter & Space Bar key\r\n  *Sealed membrane sheet for greater reliability\r\n  *Style 09 designer Blue Eye optical mouse\r\n\r\nKeyboard\r\n\r\nKeyboard Type: Standard Keyboard with Water resistance design\r\nTotal Keys: 103 Keys\r\nSwitch Life: 10 million life cycles\r\nKeyboard Interface: PS/2 Keyboard\r\n\r\nMouse\r\n\r\nMouse Type: Blue Eye Optical Mouse\r\nButtons: 3 Buttons with scroll wheel\r\nMouse Interface: USB Mouse\r\n\r\nOS Supported: Windows 2000 / XP / Vista / 7 / 8', 'iball-wintop-original-imaddqnmq6ghgm8x.jpeg', 'keyboard,combo,iball,keyboard & Mouse,usb keybord and mouse,combo,wintop,iball wintop', '1 Year Warranty From Manufacturer', 'keyboard & mouse'),
(39, 3, 'Dell Wireless Combo', 1100, 'General\r\n\r\nBrand: Dell\r\nType: Keyboard-Mouse combo\r\nModel: KM113\r\n\r\nSpecifications(Keyboard)\r\n\r\nRF interface: Wireless RF 2.4 GHz\r\nBattery: 2 AAA\r\nHot Keys: Internet Search, My favorite, Email and Calculator\r\nMultimedia Keys: Yes\r\nSpill Resistance: Yes\r\nDimension: 30.6 X 464.5 X 169.2 mm\r\nWeight: 550 g\r\n\r\nSpecifications(Mouse)\r\nRF interface: Wireless RF 2.4 GHz\r\nBattery: 1 AA\r\nTracking Sensor: Optical LED\r\nTracking: 1000 dpi\r\nDimension: 41 X 116 X 63 mm\r\nWeight: 71 g\r\n\r\nSystem Requirements(Keyboard & Mouse)\r\nOperating System: MS Windows XP/Vista/Windows 7/Linux Ubuntu\r\nWarranty: Period1 Year Warranty', 'dell-km632-400x400-imadjhvujfheezze.jpeg', 'keyboard,combo,dell,keyboard & Mouse,wireless,dell keyboard & Mouse,dell km113,dell wireless,dell combo', '1 Year Warranty From Manufacturer', 'keyboard & mouse'),
(40, 3, 'Xpro Keyboard & Mouse', 600, '\r\nSPECIFICATIONS\r\n\r\nBrand : Xpro\r\nModel : XP-2727\r\nConnectivity : USB\r\n\r\nFeatures:\r\n\r\n   *Easy typing\r\n   *Excellent quality\r\n   *Easy media access\r\n   *Good quality\r\n   *Durable\r\n   *Highly appreciated\r\n	', 'Xpro-XP-2727-USB-Keyboard-SDL334323019-1-ee7c0.jpg', 'keyboard,combo,xpro,keyboard & Mouse,usb,xpro keyboard & Mouse,xpro 2727', '1 Year Warranty From Manufacturer', 'keyboard & mouse'),
(41, 3, 'Zebronics Keyboard', 250, 'cj', '41xFqbhzcvL.jpg', 'keyboard,combo,zebronics,keyboard,usb,zebronics keyboard ', '1 Year Warranty From Zebronics', 'keyboard & mouse'),
(42, 3, 'Sandisk 8GB Pendrive', 250, '8Gb Sandisk Pedrive', '73475696671289260403SanDiskCruzerBladePenDrive8GB1418501015_1424249298.jpg', 'pd,pendrive,sandisk,sandisk pendrive,sandisk pd,8,8gb', '1 Year Warranty From Manufacturer', 'pendrive'),
(43, 3, 'Sandisk 16GB Pendrive', 350, '16Gb Sandisk Pedrive', '73475696671289260403SanDiskCruzerBladePenDrive8GB1418501015_1424249298.jpg', 'pd,pendrive,sandisk,sandisk pendrive,sandisk pd,8,8gb', '1 Year Warranty From Manufacturer', 'pendrive'),
(44, 3, 'Sandisk 32GB Pendrive', 650, '32Gb Sandisk Pedrive', '73475696671289260403SanDiskCruzerBladePenDrive8GB1418501015_1424249298.jpg', 'pd,pendrive,sandisk,sandisk pendrive,sandisk pd,8,8gb', '1 Year Warranty From Manufacturer', 'pendrive'),
(45, 3, 'Sony 8GB Pendrive', 250, '8Gb Sony Pedrive', 'sony-8gb-pendrive-medium_122a278a4dea8d4257b4538a2f8ac320.jpg', 'pd,pendrive,sony,sony pendrive,sony pd,8,8gb', '1 Year Warranty From Manufacturer', 'pendrive'),
(46, 3, 'Sony 16GB Pendrive', 400, '16Gb Sony Pedrive', 'images (2).jpg', 'pd,pendrive,sony,sony pendrive,sony pd,16,16gb', '1 Year Warranty From Manufacturer', 'pendrive'),
(47, 3, 'Sony 32GB Pendrive', 700, '32Gb Sony Pedrive', 'Sony-USM32GR-WZ-32-GB-SDL888828699-1-ed7bc.jpg', 'pd,pendrive,sony,sony pendrive,sony pd,32,32gb', '1 Year Warranty From Manufacturer', 'pendrive'),
(48, 3, 'Transcend 8GB Pendrive', 250, '8Gb Transcend Pedrive', 'Transcend-JetFlash-300-8-GB-SDL292735979-1-573c2.jpg', 'pd,pendrive,transcend,transcend pendrive,transcend pd,8,8gb', '1 Year Warranty From Manufacturer', 'pendrive'),
(49, 3, 'Transcend 16GB Pendrive', 350, '16Gb Transcend Pedrive', 'images (1).jpg', 'pd,pendrive,transcend,transcend pendrive,transcend pd,16,16gb', '1 Year Warranty From Manufacturer', 'pendrive'),
(50, 3, 'HP 8GB Pendrive', 300, '8Gb HP Pedrive', '8gbV210W_1380039317.jpg', 'pd,pendrive,hp,hp pendrive,hp pd,8,8gb', '1 Year Warranty From Manufacturer', 'pendrive'),
(51, 3, 'HP 16GB Pendrive', 500, '16Gb HP Pedrive', 'HP16GBv210wPendrive_1397484400.jpg', 'pd,pendrive,hp,hp pendrive,hp pd,16,16gb', '1 Year Warranty From Manufacturer', 'pendrive'),
(52, 3, 'HP 32GB Pendrive', 800, '32Gb HP Pedrive', 'HP-Pen-Drive-32GB-V210W-1070601-2-3f0ee.jpg', 'pd,pendrive,hp,hp pendrive,hp pd,32,32gb', '1 Year Warranty From Manufacturer', 'pendrive'),
(53, 3, 'Sandisk 8GB ', 180, '8Gb Sandisk Memory Card', 'SanDisk-microSDHC-Card-8GB-CLASS-1040078-1-f74a4.jpg', 'memory,memory card,memory card 8gb,8,8gb,8gb memory card,sandisk', '1 Year Warranty From Manufacturer', 'memory card'),
(54, 3, 'Sandisk 16GB ', 300, '16Gb Sandisk Memory Card', 'SanDisk-16-GB-Class-4-1040079-1-21146.jpg', 'memory,memory card,memory card 16gb,16,16gb,16gb memory card,sandisk', '1 Year Warranty From Manufacturer', 'memory card'),
(55, 2, 'Enter Cat 5', 8, 'per miter', 'Enter-New-100ft-30m-Blue-100-Ft-Rj45-Cat5-Cat5e-Ethernet-Lan-Network-Internet-Computer-Patch-Cable-70252995-c43f435d-a043-4b34-8e56-68632901ab2d (2).jpg', 'cable,cat,cat 5,enter,ethernet cable,lan,lan cable', 'Testing Warranty', 'cable'),
(56, 2, 'Enter Cat 6', 14, 'per miter', 'Enter-New-100ft-30m-Blue-100-Ft-Rj45-Cat5-Cat5e-Ethernet-Lan-Network-Internet-Computer-Patch-Cable-70252995-c43f435d-a043-4b34-8e56-68632901ab2d.png', 'cable,cat,cat 6,enter,ethernet cable,lan,lan cable', 'Testing Warranty', 'cable'),
(57, 3, 'Xpro Cabinet', 1500, 'ca', 'xpro.jpg', 'xpro,cabinet,smps', '1 Year Warranty From Xpro', 'cabinet'),
(58, 3, 'Guardian Antivirus', 300, 'Features:\r\n\r\n* Antivirus\r\n* AntiSpyware\r\n* Firewall With Stealth mode\r\n* Antimalware\r\n* Auto Hijack Restore\r\n* Browsing Protection\r\n* USB Drive Protection\r\n\r\nOS SUPPORT: Windows 8.1/8/7/Vista/XP (32/64 bit)/2000', 'guardian_netsecure_box_product.jpg', 'guardian,antivirus,guardian antivirus,pro', '1 Year Subscription ', 'antivirus'),
(59, 3, 'NPAV Antivirus', 350, 'Features:\r\n\r\n* Anti-Virus\r\n* Anti-Malware\r\n* Anti-Spyware\r\n* Anti-Rootkit\r\n* Automatic Updates\r\n* Application Protection\r\n* OS Protection\r\n* OS Doctor\r\n* Autorun Protection\r\n* ZV-Fort Protection\r\n*Laptop Tracker\r\n* USB Locker\r\n\r\nOS SUPPORT: Windows 10/8.1/8/7/xp(32 or 64 bit)', '8129zRSfljL._SY606_.jpg', 'npav,antivirus,npav antivirus,net protector,protector,pro security,net protector ', '1 Year Subscription ', 'antivirus'),
(60, 3, 'Eset Antivirus', 250, 'Features:\r\n\r\n* Antivirus / Antispyware\r\n* Cloud-powered Scanning\r\n* Removable Media Control\r\n* Anti-Rootkit\r\n* Anti-Phishing\r\n* Exploit Blocker\r\n* Advance Memory Scanner\r\n* HIPS\r\n\r\nOS SUPPORT: Windows 8/7/Vista/XP (32/64 bit),Home Server 2003,2011\r\n', '823009.jpg', 'eset,antivirus,eset antivirus,eset pro antivirus', '1 Year Subscription ', 'antivirus'),
(61, 3, 'Quick Heal Antivirus', 500, 'Features: Quick Heal Antivirus Pro\r\n\r\n*Firewall Protection:\r\n         Stops attackers and external\r\n         threats that try to reach your pc\r\n         over the internet.\r\n*E-Mail Security:\r\n         Keeps your inbox free of emails\r\n         with malicious links and infected attachments\r\n*Flash Drive Protection\r\n         Automatically scans external\r\n         storage devices for malware\r\n         and prevents autorun\r\n         infections.\r\n*TackMyLaptop\r\n         A free anti-theft service that\r\n         hepls you track and find your\r\n         stolen laptop.\r\n\r\nOS SUPPORT: Windows 10/8.1/8/7/xp(32 or 64 bit)\r\n         ', 'avpro_1_1_4.png', 'quick heal,quick antivirus,antivirus', '1 Year Subscription ', 'antivirus'),
(62, 3, 'Eset Total Security', 400, 'Features:\r\n\r\n* Antivirus / Antispyware\r\n* Cloud-powered Scanning\r\n* Removable Media Control\r\n* Anti-Rootkit\r\n* Anti-Phishing\r\n* Exploit Blocker\r\n* Advance Memory Scanner\r\n* HIPS\r\n* NEW Botnet Protection\r\n* Personal Firewall\r\n* Antispam\r\n* Parental Control\r\n* Anti Theft\r\n* New Laptop Activity Watch\r\n* Vulnerability Shield\r\n\r\nOS SUPPORT: Windows 10/8.1/8/7/xp(32 or 64 bit)', 'eset-smart-security-2015-Hit2k.jpg', 'eset,antivirus,eset antivirus,total security,eset total security', '1 Year Subscription ', 'antivirus'),
(63, 3, 'Quick Heal Antivirus', 1050, 'Features: Quick Heal Total Security\r\n\r\n* Safe Banking: \r\n         Gives you a secure environment,\r\n         for online banking and shopping.\r\n* Web Security:\r\n         Blocks maclicious websites before\r\n         they load on your browser. Browser\r\n         sandbox safeguards your PC from\r\n         malicious internet downloads.\r\n* E-Mail Security:\r\n         Keeps your inbox free of emails\r\n         with malicious links and infected attachments\r\n* Firewall Protection:\r\n         Stops attackers and external\r\n         threats that try to reach your pc\r\n         over the internet.\r\n* Flash Drive Protection\r\n         Automatically scans external\r\n         storage devices for malware\r\n         and prevents autorun\r\n         infections.\r\n* Privacy Protection:\r\n          Lets you delete sensitive files and\r\n          make them unrecoverable. Erases\r\n          history of your personal computer activities.\r\n* Data Theft Protection:\r\n           Stops unauthorised external\r\n           storage devices from copying data\r\n           from your PC.\r\n* Advanced DHAScan:\r\n           identifiers and stops new and\r\n           unknown malware that evade\r\n           traditional antivirus software.\r\n* TackMyLaptop\r\n         A free anti-theft service that\r\n         hepls you track and find your\r\n         stolen laptop.\r\n\r\nOS SUPPORT: Windows 10/8.1/8/7/xp(32 or 64 bit)', 'ts_product_page_1.png', 'quick heal,quick antivirus,antivirus,total security,quickheal total security', '1 Year Subscription ', 'antivirus'),
(64, 3, 'Quick Heal Antivirus', 850, 'Features: Quick Heal Internet Security\r\n\r\n* Core Protection: \r\n         Antivirus, Antispyware,\r\n         Antimalware, AntiRootkit,\r\n         Firewall and complete protection\r\n         for your PC.\r\n* Web Security:\r\n         Blocks maclicious websites before\r\n         they load on your browser. Browser\r\n         sandbox safeguards your PC from\r\n         malicious internet downloads.\r\n* E-Mail Security:\r\n         Keeps your inbox free of emails\r\n         with malicious links and infected attachments\r\n* Flash Drive Protection\r\n         Automatically scans external\r\n         storage devices for malware\r\n         and prevents autorun\r\n         infections.\r\n* Parental Control:\r\n          Scheduled and control internet usage\r\n          for your children.\r\n          Configure Parental Control based on\r\n          user accounts.\r\n* Advanced DHAScan:\r\n           identifiers and stops new and\r\n           unknown malware that evade\r\n           traditional antivirus software.\r\n* TackMyLaptop\r\n         A free anti-theft service that\r\n         hepls you track and find your\r\n         stolen laptop.\r\n\r\nOS SUPPORT: Windows 10/8.1/8/7/xp(32 or 64 bit)', 'is_4_1_1.png', 'quick heal,quick antivirus,antivirus,internet security,quickheal internet security', '1 Year Subscription ', 'antivirus'),
(65, 3, 'NPAV Total Security', 400, 'Features: Total Protection\r\n\r\n* Anti-Virus\r\n* Anti-Malware\r\n* Anti-Spyware\r\n* Anti-Rootkit\r\n* Automatic Updates\r\n* Advertise Blocker\r\n* Anti-Spam\r\n* OS Firewall\r\n* Anti-Phishing\r\n* Internet Security\r\n* Intrusion File Detection\r\n* Email Backup\r\n* Cloud Anti-Malware\r\n* Privacy Control\r\n* LAN Protection\r\n* Share Protection\r\n* Autorun Protection\r\n* Remote + Phone Support\r\n* Mobile Scan\r\n* Vulnerabbility Scan\r\n* USB Locker\r\n\r\nOS SUPPORT: Windows 10/8.1/8/7/xp(32 or 64 bit)', 'net-protector-total-security-2014-1-pc-1-year-total-security-400x400-imae4vfjh3c3bhpz.jpeg', 'npav,antivirus,npav antivirus,net protector,protector,net protector total security,total security', '1 Year Subscription ', 'antivirus'),
(66, 3, 'Zebronics UPS', 1400, 'Specification: \r\n\r\nMODEL: Zebronics ZEB-U725\r\nCAPACITY: 600VA\r\nINPUT VOLTAGE: 230VAC\r\nINPUT VOLTAGE RANGE: 140-300 VAC\r\nOUTPUT VOLTAGE REGULATION(BATTRY MODE): +/-10%\r\nTRANSFER TIME: Typical 4-8 ms\r\nWAVEFORM: Modified sine wave\r\nBATTERY TYPE: 12V/7 Ahx1\r\nRECHARGE TIME: 6 Hours to 90% after complete discharge\r\nDIMENSION (LxWxH): 324x140x220mm\r\n', 'Zebronics-UPS-U725-SDL508271474-1-7a6dc.jpg', 'zebronics,ups,zebronics ups,electronics,zebronics ups,ups zebronics,power ups', '1 Year Warranty From Manufacturer', 'ups'),
(67, 3, 'NPAV Internet Security', 380, 'Features: Internet Security\r\n\r\n* Anti-Virus\r\n* Anti-Malware\r\n* Anti-Spyware\r\n* Anti-Rootkit\r\n* Automatic Updates\r\n* Advertise Blocker\r\n* Anti-Spam\r\n* OS Firewall\r\n* Anti-Phishing\r\n* Internet Security\r\n* Intrusion File Detection\r\n* Cloud Protection\r\n* Paretal Control\r\n* Laptop Tracking\r\n* USB Locker\r\n\r\nOS SUPPORT: Windows 10/8.1/8/7/xp(32 or 64 bit)', '51BjcXkbvxL._AC_UL320_SR240,320_.jpg', 'antivirus,npav,npav internet,npav internet security', '1 Year Subscription ', 'antivirus'),
(68, 3, 'HP 2132 AIO Printer', 3200, '   \nFunctions\nFunctions\nPrint, copy, scan\nMultitasking supported\nNo\n\nPrinting specifications\n\nPrint speed black\n     ISO: Up to 7.5 ppm\n     Draft: Up to 20 ppm 6 \nPrint speed color:\n     ISO: Up to 5.5 ppm\n     Draft: Up to 16 ppm 6 \nFirst page out (ready)\n     Black: As fast as 15 sec\n     Color: As fast as 18 sec\nDuty cycle (monthly, A4) : Up to 1000 pages\nRecommended monthly page volume : 50 to 100\nPrint technology\n     *HP Thermal Inkjet\n     *Printer drivers included\n     *HP PCL 3 GUI\nPrint quality (best)\n    Color: Up to 4800 x 1200 optimized dpi color (when printing from a \n           computer on selected HP photo papers and 1200 input dpi)\n    Black: Up to 1200 x 1200 rendered dpi\nDisplay : None\nNumber of print cartridges : 2 (1 black, 1 Tri-color)\nPrint languages : HP PCL 3 GUI\n\nConnectivity\n\nWireless capability : No\nConnectivity : standard 1 Hi-Speed USB 2.0\nMinimum system requirements\n     *Windows 10, 8.1, 8, 7: 1 GHz 32-bit (x86) or 64-bit (x64) processor, \n     *2 GB available hard disk space, CD-ROM/DVD drive or Internet connection, \n     *USB port, Microsoft Internet Explorer. \n     *Windows Vista: 800 MHz 32-bit (x86) or 64-bit (x64) processor, \n     *2 GB available hard disk space, CD-ROM/DVD drive or Internet connection, \n     *USB port, Internet Explorer 8. Windows XP SP3 or higher (32-bit only): any Intel Pentium II, \n     *Celeron or 233 MHz compatible processor ,850 MB available hard disk space, \n     *CD-ROM/DVD drive or Internet connection, USB port, Internet Explorer 8.\n     *1 GB HD\nCompatible operating systems\n     *Windows 10, Windows 8.1, Windows 8, Windows 7\n     *OS X v10.8 Mountain Lion, OS X v10.9 Mavericks, OS X v10.10 Yosemite\n\n\nMemory specifications\n\nMemory, standard\nIntegrated memory\nMemory, maximum\nIntegrated memory\n\nPaper handling\n\nPaper handling input, standard : 60-sheet input tray\nPaper handling output, standard : 25-sheet output tray\nDuplex printing\n     *Manual (driver support provided)\n     *Media sizes supported:A4,B5,A6\n     *Media sizes custom:89 x 127 to 215 x 279 mm\nMedia types : Plain paper, Photo paper, Brochure paper\n\nScanner specifications\n\nScanner type : Flatbed\nScan file format : JPEG, TIFF, PDF, BMP, PNG\nScan resolution, optical : Up to 1200 dpi,Bit depth,24-bit\nScan size (flatbed), maximum : 216 x 297 mm\nDigital sending standard features : No\nScan input modes : Front-panel scan\n\nCopier specifications\n\nCopy resolution (black text) : Up to 600 x 300 dpi\nCopy resolution (color text and graphics) : Up to 600 x 300 dpi\nCopies, maximum : Up to 9 copies\n\nPower and operating requirements\n\nPower\nInput voltage : 100 to 240 VAC (+/- 10%), 50/60 Hz (+/- 3 Hz). \nInput voltage : 200 to 240 VAC (+/- 10%), 50/60 Hz (+/- 3Hz) (China & India)\nPower consumption : 10 watts maximum, 10 watts (Active), 0.1 watts (Off), 1.9 watts (Standby), 0.9 watt (Sleep) \n\nDimensions and weight\n\nMinimum dimensions (W x D x H) : 425 x 304 x 149 mm 1 \nMaximum dimensions (W x D x H) : 424.97 x 519.36 x 248.77 mm (with Input & Output Tray/Extension extended) 1 \nWeight : 3.42 kg\nPackage weight : 4.48 kg\n\nWhat\'s included\n\n     *HP DeskJet 2132 All-in-One Printer\n     *HP Setup 803 Black Cartridge (~135 pages)\n     *HP 803 Setup Tri-color Cartridge (~100 pages)\n     *Software CD\n     *Setup Poster\n     *Power cord\n     *Cable included Yes, 1 USB 1.5 m\n     *Replacement cartridges\n     *HP 803 Black Ink Cartridge (~360 pages)\n     *HP 803 Tri-color Ink Cartridge (~300 pages)\n\n1 Year Onsite Warranty from Manufacturer\n', 'hp-deskjet-2132-all-in-one-printer-f5s41d-2-a120239.jpg', 'printer,hp printer,deskjet,hp aio printer,hp deskjet printer,hp aio deskjet printer,aio printer,deskjet aio printer,2132,hp 2132 aio printer,hp 2132 printer,hp deskjet,hp deskjet 2132', '1 Year Onsite Warranty From Manufacturer', 'printer'),
(69, 3, 'Epson L220 AIO Printer', 10000, 'IN THE BOX\r\nBrand : Epson\r\nModel : L220\r\nType : Printer and Scanner\r\nColor : Black\r\n\r\nPRINTING\r\n\r\nPrint Method : On-demand ink jet\r\nNozzle Configuration : 180 nozzles Black, 59 nozzles each colour (Cyan, Magenta, Yellow)\r\nPrint Direction	: Bi-directional printing, Uni-directional printing\r\nMaximum Resolution : 760 x 1440 dpi (with Variable-Sized Droplet Technology)\r\nMinimum Ink Droplet Volume : 3pl\r\n\r\nPRINT SPEED\r\n\r\nMax Black Draft Text - Memo (A4) : Approx. 27 ppm No. 1/15 ppm No. 2 (Bk/Cl)\r\nISO 24734, A4 : Approx. 7.0 ipm / 3.5 ipm (Bk/Cl)\r\nMax Photo Draft - 10 x 15 cm (4 x 6) : Approx. 27 sec per photo (W/Border)\r\nPhoto Default - 10 x 15 cm (4 x 6) : Approx. 69 sec per photo (W/Border)\r\nDouble-sided Printing :	Manual\r\n\r\nCOPYING\r\n\r\nCopy Speed \r\n     :Max. Black Draft Text - Memo (A4): Approx. 5 sec (Draft); \r\n     :Max. Colour Draft Text - Memo (A4): Approx. 10 sec (Draft)\r\nCopy Mode : Standard Copy Mode\r\nMax Copies From Standalone : 20 sheets (Button pressing frequency)\r\n\r\nSCANNING\r\n\r\nScanner Type : Flatbed colour image scanner\r\nSensor Type : CIS\r\nOptical Resolution : 600 dpi\r\nMaximum Hardware Resolution : 600 x 1200 dpi\r\nMaximum Scan Area : 216 x 297 mm (8.5 x 11.7)\r\nScanner Bit Depth \r\n     Colour: 48-bit internal, 24-bit external; \r\n     Grayscale: 16-bit internal, 8-bit external; \r\n     Black and White: 16-bit internal, 1-bit external\r\nScan Speed \r\n     Monochrome 300 dpi: 2.4 msec/line; \r\n     Colour 300 dpi: 9.5 msec/line; \r\n     Monochrome 600 dpi: 7.2 msec/line; \r\n     Colour 600 dpi: 14.3 msec/line\r\n\r\nPAPER HANDLING\r\n\r\nPaper Feed Method : Friction feed\r\nNumber of Paper Trays : 1\r\nPaper Hold Capacity \r\n     :Input Capacity: 50 sheets, A4 Plain paper (75 g/m square) 10 sheets, Premium Glossy Photo Paper; \r\n     :Output Capacity: 30 sheets, A4 Plain paper (Default Text - Memo) (Draft Text - Memo) 20 sheets, \r\n       Premium Glossy Photo Paper (10 x 15 cm (4x6), 13 x 18 cm (5x7), 9 x 13 cm (3.5 x 5))\r\nPaper Size : \r\n     A4, A5, A6, B5, 10 x 15 cm (4 x 6), 13 x 18 cm (5 x 7), 9 x 13 cm (3.5 x 5), \r\n     Letter (8 1/2 x 27.94 cm (11)), Legal (8 1/2 x 35.56 cm (14)), \r\n     Half Letter(5 1/2 x 8, 1.27 cm (1/2)), 13 x 20 cm (5 x 8), 20 x 25 cm (8 x 10), 16:9 wide size, 100 x 148 mm, \r\n     Envelopes: No. 10 (4 1/8 x 9, 1.27 cm (1/2)), DL (110 x 220 mm), C6 (114 x 162 mm)\r\nMaximum Paper Size : 8.5 x 111.76 cm (44)\r\nPrint Margin : 3 mm top, left, right, bottom\r\n\r\nCONNECTIVITY\r\n\r\nStandard : USB - Compatible with the USB 2.0 Specification\r\n\r\nPRINTER SOFTWARE\r\n\r\nOperating System \r\n     Windows XP/XP Professional x64 Edition/Vista/7/8/8.1,\r\n     Mac OS X 10.6.8, 10.7.x, Compatibility:10.8.x, 10.9.x	\r\n\r\nELECTRICAL SPECIFICATIONS\r\n\r\nRated Voltage :	AC 100 - 240 V\r\nRated Frequency	: 50 - 60 Hz\r\nPower Consumption \r\n     Printing: Approx. 12 Watts, \r\n     Standby: Approx. 3.8 Watts, \r\n     Sleep: Approx. 0.8 Watts, \r\n     Power Off: Approx. 0.3 Watts\r\n\r\nEPSON GENUINE INK BOTTLE\r\n\r\nBlack :	T6641: 4000 Pages Yield\r\nCyan :T6642 - T6642: 6500 Pages Composite Yield, \r\n     :Magneta - T6643: 6500 Pages Composite Yield, \r\n     :Yellow - T6644: 6500 Pages Composite Yield\r\n\r\nADDITIONAL FEATURES\r\n\r\nFeatures  \r\n     *Superb Savings and Page Yield; \r\n     *Superb Print Speed; \r\n     *One Touch Scan and Copy; \r\n     *Space-saving Design; \r\n     *Unsurpassed Print Quality\r\n\r\nPHYSICAL SPECIFICATIONS\r\n\r\nDimension (L x W x H) : 482 x 222 x 130 mm\r\nWeight : 2.7 Kg\r\n\r\nWARRANTY\r\nPeriod:	1 Year Manufacturer Warranty', 'epsonl220.jpg', 'printer,aio printer,epson printer,epson l220 printer,l220 priner,l220 printer,epson l220 printer,color printer,aio color printer,printer scanner copier,aio', '1 Year Onsite Warranty From Manufacturer', 'printer'),
(70, 3, 'Brother AIO Printer', 9800, 'Functions:\r\nPrint, Scan, Copy	\r\n\r\nPrint Speed:\r\n     Fast print speeds up to 27/10 ppm (mono/colour) in Fast Mode\r\n     Up to 11/6ipm (mono/colour) based on ISO/IEC 24734\r\n	\r\nPrint Resolution : Up to 1,200 x 6,000 dpi	\r\n\r\nspecification\r\n\r\nTechnology : Inkjet\r\nMemory : 64 MB\r\nDisplay : 1-Line\r\nInterface : Hi-Speed USB 2.0\r\n\r\nPrint\r\n\r\nPrint Speed\r\n     Up to 27 (Monochrome) / 10 (Colour) ppm (Based on Fast Mode) \r\n     Up to 11 (Monochrome) / 6 (Colour) ipm (Based on ISO/IEC 24734) \r\n            \r\nPrint Resolution : Up to 1,200 x 6,000 dpi (Horizontal x Vertical)\r\nInk Save Mode:Yes\r\n\r\nScan\r\n\r\nScanning Capability : Colour & Monochrome\r\nOptical Scanning Resolution : Up to 1,200 x 2,400 dpi\r\nInterpolated Scanning Resolution : Up to 19,200 x 19,200 dpi\r\nScan to Feature : E-mail, Image, File\r\n\r\nCopy\r\n\r\nEnlargement / Reduction : 25% - 400% in 1% increments\r\nCopy Resolution\r\n     Print: Max. 1200x2400 dpi \r\n     Scan: Max. 1200x1200 dpi\r\n\r\nPaper Handling\r\n\r\nPaper Input (Standard Tray) : Up to 100 sheets\r\nPaper Handling Size \r\n     A4, A5, A6, Exe, LTR, LGL*, Photo 4X6\" (102X152mm), \r\n     Index Card (127x203mm), Photo-2L (127x178mm), \r\n     C5 Envelope, Com-10, DL Envelope, Monarch, \r\nPaper Output : Up to 50 sheets\r\n\r\nAdditional Features\r\n\r\nPoster Printing : Yes\r\nCopy Enhancement : Yes\r\n\r\nSoftware\r\n\r\nPrinter Driver (Windows) : Windows XP / XP x64 / Vista / 7 / 8 / 8.1\r\nPrinter Driver (Macintosh) : Mac OS X v10.7.5/v10.8.x/v10.9.x\r\n\r\nOthers\r\n\r\nPower Consumption:\r\n     Measured when the machine is connected to the USB interface. \r\n     Power consumption varies slightly depending on the usage environment or part wear.\r\n    *Copying Mode: Approx. 16W \r\n    *Ready Mode: Approx. 2.5W \r\n    *Sleep Mode: Approx. 0.7W \r\n    *Off: Approx 0.2W\r\nEcology : EnergyStar\r\n\r\nDimension / Weight\r\nDimension (W x D x H) : 435 (W) x 374 (D) x 161 (H) mm\r\nWeight : 7.1 Kg \r\n\r\nSupport\r\nWarranty : 12 months Onsite Warranty From Manufacturer\r\n	', 'bro t300.jpg', 'printer,aio printer,brother printer,brother t300 printer,t300 priner,t300 printer,brother dcp t300 printer,color printer,aio color printer,printer scanner copier,aio', '1 Year Onsite Warranty From Manufacturer', 'printer'),
(71, 3, 'Asia Power USB Combo', 400, 'Key Features of Asia Power 207 Wired USB Keyboard & Mouse Combo\r\n\r\n   *Enhanced Bounce\r\n   *Spill Resistant Design\r\n   *Comfort Design\r\n   *With Rupee symbol key\r\n\r\nGENERAL SPECIFICATIONS\r\n\r\nBrand : Asia Power\r\nModel Name : Combo Keyboard & Mouse (USB)\r\nColor : Black\r\nInterface : Wired USB\r\nModel : 207\r\nSales Package : Keyboard & Mouse\r\nType : Keyboard & Mouse Combo\r\nWidth : 500 mm\r\nHeight : 25 mm\r\nDepth : 135 mm\r\nWeight : 0.536 kg\r\nCase Material : cardboard\r\nFastening Mechanism : USB cable\r\nDesigned For : Desktop and Laptop\r\nIlluminated Keys : No\r\nStand Support : Yes\r\n\r\n', 'asia power.jpg', 'usb combo,keyboard,mouse,keyboard mouse, asia power,asia power keyboard mouse,usb combo', '1 Year Warranty From Manufacturer', 'keyboard & mouse'),
(72, 3, 'Zebronics 945 M/B', 1900, 'General\n\nBrand:Zebronics\nModel:ZEB-945\nSocket Type:LGA 775\nChipset:Intel 945G/GC + ICH7 Chipset\nCompatible Processors:Pentium Dual core, Pentium 4, Celeron Dual core in 775 socket\nColour:Blue\n\nIn The Box\n\nBox Contents\n   :2 SATA Cables, \n   :1 Drivers Installation CD, \n   :Installation Manual and ATX I/O Shield Panel\n\nGeneral Features\n\nOperating System Support:Windows XP, 200, Vista, 7, 8 & 8.1 Too\n\nMemory\nMax Capacity:4 GB\nMemory Slots:2 x DIMM slots\nMemory Configuration:DDR2\nMemory Frequency:667, 533 and 400 Mhz\n\nConnectivity\n\nInternal I/O Ports:1 x front panel connector, 1 x speaker connector, 1 x front panel \naudio connector, 2 x USB 2.0 connector, 4 x SATA ports, \n1 x CPU fan connector, 1 x SYS fan connector, 1 x 24-pin ATX power connector, 1 x 4 pin\nRear I/O Ports:PS/2 mouse/keyboard port, VGA connector, COM port, LPT port, 4 x USB 2.0 ports, \nRJ45 LAN port, 3 audio jacks\nLAN:RJ45 LAN, Supports 10/100 Ethernet\nExpansion Slots:1 x PCI Express x 16 slot, 1 x PCI slot, IDE port\nUSB 3.0:No\nUSB 2.0:4\n\nOn Board Graphics\n\nGraphics Processor:No\nResolution	-\nOther Features	-\n\nAudio\n\nType:6 Channel Audio, 3 Audio Jacks\nDrivers	:Pick from CD Support\nTechnology:Embedded AC\'97 digital integrated audio control\n\n\nOther Features\nCD Support:Yes\nWarranty:1 Year Manufacturer Warranty\n\nDescription\n   :Zebronics brings you the all classic, \n   :Intel 945 Chipset Motherboard with LGA 775 socket. \n   :It supports Intel Dual Core, Intel Core 2 Duo, \n   :Intel Pentium 4, Intel Pentium D, \n   :Intel Celeron D and other Intel LGA 775 Socket Processors with Front Side Bus (FSB) of 1066, 800 and 533 Mhz. \n   :It supports DDR2 RAM 667, 533 and 400 Mhz with maximum capcity upto 2GB. \n   :It has onboard AC\'97 5.1 Channel Sound as well as 10/100 LAN. \n   :It also has 4 USB Ports (2 Back Side + 2 via Fron ATX Cabinet Panel),\n   :2 SATA Ports and 1 IDE (UATA33/66/100) Port. \n   :With 1 Parallel Port, 2 PCI Addon Card Slots and 1 PCI Express 16 Slot, \n   :it makes the perfect Desktop motherboard.\n   :It comes with 2 SATA Cables, \n   :1 Drivers Installation CD, \n   :Installation Manual and ATX I/O Shield Panel all in the Box. \n  \nFeatures : \nChipset: \n   Intel 945GC + ICH7 FSB:1066/800/533 MHz Processor Support: \n   Intel Dual Core, Intel Core 2 Duo, Intel Pentium 4, \n   Intel Pentium D, Intel Celeron D and other Intel LGA 775 Socket Processors \n   RAM:Maximum 2GB DDR2 SDRAM 667/533/400 MHz\n   USB Ports:4 Ports (2 Back + 2 Front via ATX Cabinet) \n   Parallel Port:1 SATA Ports: 2 IDE \n   Ports:1 (UATA33/66/100 IDE Port) \n   PCI SLots:2 PCI Express Slot x16: \n   1 Sound:Onboard AC\'97 5.1 Channel \n   LAN:Onboard 10/100\n   Product Type :Intel 945 Chipset Motherboard\n', 'zeb 945.jpg', 'motherbord,945,zeb 945,zebronics 945,motherbord,945 mb,zeb 945 mb', '1 Year Warranty From Manufacturer', 'motherboard');
INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `product_period`, `product_related`) VALUES
(73, 3, 'Zebronics G41 M/B', 2500, 'SPECIFICATIONS\r\n\r\nProcessors:Intel Pentium D LGA 775, Intel Pentium 4 Prescott LGA 775, Celeron D Prescott LGA 775 CPU\r\nRAM:DDR3 - 800/667/1066/1333 DDR2 - 667/800/1066,Upto 4G capacity\r\nUSB2.0/1.1:4 ports (Back-2 ports, Front-2 ports)\r\nChipset:Intel G41 + ICH8 Chipset\r\nFSB:800/1066/1333 MHz\r\nSATA:2 ports\r\nPCI:2 slots\r\nIDE:1 port\r\nPCI Express x16:1 slot\r\nAdditional features:Onboard Realtek ALC8103E, Support LAN 10/100M on board\r\n\r\nWarranty\r\n\r\nPeriod	1 Year Warranty\r\n\r\nDescription\r\n\r\n   :Let your computer be a smart, highly efficient and high performing gadget by getting \r\n    the best motherboard from Zebronics. \r\n   :The Zebronics G41-775 Socket Mother Board is the ideal motherboard for those who \r\n    want to boost up their productivity level and their pace of work. \r\n   :The Zebronics G41-775 Socket Mother Board comes with OnboardRealtek ALC8103E \r\n    and supports LAN 10/100M on board\r\n   :The Zebronics G41-775 Socket Mother Board supports Intel Pentium D LGA 775, \r\n    Intel Pentium 4 Prescott LGA 775, Celeron D Prescott LGA 775 CPU and \r\n    RAM DDR3 - 800/667/1066/1333 DDR2 - 667/800/1066, upto 2G capacity. \r\n    WithÃ‚  Intel G41 + ICH8 Chipset and other alluring features like 800/1066/1333 MHz of FSB, \r\n    four USB2.0/1.1 ports, 2 SATA ports, 2 PCI ports and 1 IDE port; \r\n    the tech savvy people are definitely going to enjoy high performance combined with \r\n    relatively faster pace and higher data transfer rate using the Zebronics G41-775 Socket Mother Board . \r\n   :The Zebronics brand has grown into one of the leading and most trusted brand names \r\n     in computer hardware and peripherals in India. \r\n   :Zebronics delivers innovative products to consumers, businesses and service providers. \r\n   :The supremely efficient Zebronics G41-775 Socket Mother Board will undoubtedly aid you in working \r\n     in an environment where speed, performance, convenience and high-end activities \r\n     converge to take your productivity to all new levels', 'zeb g41.jpeg', 'motherbord,g41,zeb g41,zebronics g41,motherbord,g41 mb,zeb g41 mb', '1 Year Warranty From Manufacturer', 'motherboard'),
(74, 3, 'Gigabyte H61-S1 M/B', 3200, 'Key Features of Gigabyte GA-H61M-S1 Motherboard\r\nMicro-ATX Form Factor\r\nLGA 1155 Socket Type\r\nIntel H61 Express Chipset\r\n2 Memory Slots\r\nMaximum 16 GB DDR3\r\nDual Channel DIMM Memory\r\n4 SATA 3 Gb/s Headers with Intel H61 Express Controller\r\n\r\nSpecifications of Gigabyte GA-H61M-S1 Motherboard\r\n\r\nBACK PANEL PORTS\r\nAudio I/O Channels:3\r\nRJ-45 Ethernet Jacks:1\r\nVGA/D Sub Ports:1\r\nPS/2:2\r\nUSB 2.0 Ports, Controller:4\r\n\r\nWARRANTY\r\nDomestic Term:3 Years Gigabyte India Warranty and Free Transit Insurance.\r\nCovered in Warranty:Manufacturing Defects\r\nWarranty Summary:Customer Contacts Toll Free - 1800 425 4945; gigabytesupport@accelfrontline.in\r\nWarranty Service Type:Not Covered in Warranty Tampering, Physical Damages\r\n\r\nCONNECTIVITY\r\n\r\nEthernet Features:10/100/1000 Mbit\r\nEthernet Controller:Realtek RTL8111F\r\n\r\nLIMITATIONS\r\n\r\nWhether The CPU/System Fan Speed Control Function is Supported will Depend on the CPU/System. \r\nPCIe Generation 3 is Dependent on CPU and Expansion Card Compatibility. \r\nTo Enable 7.1 Channel Audio You have to Use an HD Front Panel Audio Module and Enable\r\n the Multi-channel Audio Feature through the Audio.\r\nSTORAGE\r\nSATA 3 Gb/s:Intel H61 Express\r\nIN THE BOX\r\nSales Package:User Manual, I/O Shield, Support Disc\r\nGENERAL\r\nBrand:Gigabyte\r\nModel ID:GA-H61M-S1\r\nMEMORY\r\nMemory Configuration:16 GB DDR3 Dual Channel DIMM\r\nMemory Frequency:800 MHz, 1333 MHz, 2200 (O.C) MHz, 1066 MHz\r\nNumber of Memory Slots:2 Slots\r\nECC Support:Non-ECC\r\nINTERNAL I/O HEADERS\r\nFront Panel Headers:2\r\nFan Headers:1 (Processor Fan Headers), 1 (System Fan Headers)\r\nATX Power Connectors:1 (24 Pin ATX Power Connectors)\r\nUSB 2.0 Headers:2\r\nSATA 3 Gb/s Headers:4\r\nOther Connectors:1 x Clear CMOS Jumper, 1 x 4-pin ATX 12 V Power Connector\r\nDIMENSIONS\r\nDimensions:226 x 174 mm\r\nGRAPHICS\r\nIntegrated Graphics card:Yes\r\nExternal Graphics Card Support:Yes\r\nGENERAL FEATURES\r\nOS Support:7 and 8, Windows: XP, Vista\r\nHardware Monitoring:\r\n   :System Voltage Detection, CPU/System Temperature Detection, CPU/System Fan Speed Detection, \r\n   :CPU Overheating Warning, CPU/System Fan Fail Warning, CPU/System Fan Speed Control\r\nAdvanced Features	\r\n   :Support for @BIOS, Support for Q-Flash, Support for Xpress Recovery2, \r\n   :Support for EasyTune, Intel Advanced Vector Extensions (AVX), Auto Sync with Cloud, Data Ready, \r\n   :Smart QuickBoot, Smart DualBIOS, Smart Recorder, Smart Recovery 2, Smart TimeLock, \r\n   :Intel HD Graphics Core 2000/3000 Enhanced Visual \r\nAdvanced Technologies	\r\n   :Intel Rapid Start Technology, Intel Smart Connect Technology, On/Off Charge Technology, \r\n   :Intel Quick Sync Video Technology, Intel InTru 3D Technology, Supports Dual Channel Technology, \r\n   :Supports Intel Turbo Boost Technology, Supports Hyper-threading Technology, \r\n   :Supports Intel SpeedStep Technology, Sup...View More\r\nBIOS	1 x 32 Mbit Flash, Use of Licensed AMI EFI BIOS, PnP 1.0a, DMI 2.0, SM BIOS 2.6, ACPI 2.0a\r\nBundled Software	Norton Internet Security (OEM Version)\r\nOverclocking	One-click Overclocking\r\nFeatures I/O Controller\r\n    :iTE IT8728 Chip, 1.5 V DDR3 DIMM Sockets, \r\n    :Electrostatic Protection, Humidity Protection PCB Design, Support Intel 22nm Processors, \r\n    :ErP Lot 6 Support, Motherboard Model Version: 2.0, Power Failure Protection Design\r\nAUDIO\r\nAudio Channels:7.1\r\nAudio Codec:Realtek ALC887\r\nAudio Features:High Definition Audio\r\nEXPANSION SLOTS\r\nPCIe x16 Slots, Generation:3.0, 1\r\nPCIe x1 Slots, Generation:2.0, 2\r\nESSENTIALS\r\nChipset Manufacturer:Intel\r\nChipset:Intel H61\r\nCompatible Processors\r\n    :Intel Celeron Processors, Intel Core i5 Processors, Intel Core i3 Processors, \r\n    :Intel Core i7 Processors, Intel Pentium Processors\r\nForm Factor:Micro-ATX\r\nSocket Type:LGA 1155', 'gigabyte h61.jpg', 'motherbord,h61,gigabyte h61,gigabyte h61,motherbord,h61 mb,giga h61 mb', '3 Year Warranty From Manufacturer', 'motherboard'),
(75, 3, 'Gigabyte H61-S2 M/B', 3500, 'Key Features of Gigabyte GA-H61M-DS2 Motherboard\r\nMicro-ATX Form Factor\r\nLGA 1155 Socket Type\r\nIntel H61 Express Chipset\r\n2 Memory Slots\r\nMaximum 16 GB DDR3\r\nDual Channel DIMM Memory\r\n4 SATA 3 Gb/s Headers with Intel H61 Express Controller\r\n\r\nSpecifications of Gigabyte GA-H61M-DS2 Motherboard\r\nSTORAGE\r\nSATA 3 Gb/s:Intel H61 Express Chipset\r\nMEMORY\r\nMemory Configuration:16 GB DDR3 Dual Channel DIMM\r\nMemory Frequency:800 MHz, 1066 MHz, 1333 MHz\r\nNumber of Memory Slots:2 Slots\r\nECC Support:Non-ECC\r\nGENERAL\r\nBrand	Gigabyte\r\nModel ID:GA-H61M-DS2\r\nBACK PANEL PORTS\r\nAudio I/O Channels:3\r\nRJ-45 Ethernet Jacks:1\r\nVGA/D Sub Ports:1\r\nUSB 2.0 Ports, Controller:4\r\nPS/2:2\r\nINTERNAL I/O HEADERS\r\nFront Panel Headers:1\r\nFan Headers:1 (Processor Fan Headers), 1 (System Fan Headers)\r\nUSB 2.0 Headers	2\r\nATX Power Connectors:1 (24 Pin ATX Power Connectors)\r\nSATA 3 Gb/s Headers:4\r\nOther Connectors:\r\n    :1 x 4-pin ATX 12 V Power Connector, 1 x Parallel Port Header, 1 x Serial Port Header,\r\n    :1 x Clearing CMOS Jumper, 1 x Front Panel Audio Header, I/O Controller: iTE IT8728 Chip\r\nDIMENSIONS\r\nDimensions:174 x 226 mm\r\nWARRANTY\r\nDomestic Term:3 Years Gigabyte India Warranty and Free Transit Insurance.\r\nWarranty Summary:3 Year Domestic Warranty\r\nGRAPHICS\r\nIntegrated Graphics card:Yes\r\nGENERAL FEATURES\r\nHardware Monitoring\r\n    :System Voltage Detection, CPU/System Temperature Detection, \r\n    :CPU/System Fan Speed Detection, CPU/System Fan Speed Control\r\nOS Support:Windows XP and Above\r\nAdvanced Features	\r\n    :Support for BIOS, Support for Q-Flash, Support for Xpress BIOS Rescue, \r\n    :Support for Download Center, Support for Xpress Install, Support for Xpress Recovery2, \r\n    :Support for Easy Tune, Support for Smart 6, Support for Auto Green, Support for ON/OFF Charge, \r\n    :Support for Cloud OC, Support for 3TB+ Unlock\r\nAdvanced Technologies\r\n     :Autogreen Technology, Gigabyte On/Off Charge Technology, Hybrid EFI Technology, \r\n     :Gigabyte Patented Dual BIOS Technology\r\nBIOS\r\n     :2 x 32 Mbit Flash, Use of Licensed Award BIOS, Support for Dual BIOS, PnP 1.0a, \r\n     :DMI 2.0, SM BIOS 2.4, ACPI 1.0b\r\nBundled Software:Norton Internet Security (OEM Version)\r\nOverclocking:One-click Overclocking\r\nFeatures	\r\n     :Gigabyte Ultra Durable 4 Classic, Humidity Protection, Short Circuit Protection, \r\n      Electrostatic Protection, Power Failure Protection, \r\n     :High Temperature Protection, Support Intel 22 nm Processors, Gigabyte Touch BIOS, \r\n      New 100 % Hardware VRD 12 Compliant CPU Power Design, Intel HD Graphics Core 2000, 30.\r\nEXPANSION SLOTS\r\nPCIe x16 Slots, Generation:1\r\nPCIe x1 Slots, Generation:2, 2.0\r\nAUDIO\r\nAudio Codec:Realtek/VIA HD Audio\r\nAudio Channels:7.1\r\nAudio Features:High Definition Audio\r\nCONNECTIVITY\r\nEthernet Features:10/100/1000 Mbit\r\nEthernet Controller:Atheros GbE\r\nESSENTIALS\r\nChipset Manufacturer:Intel\r\nChipset:Intel H61\r\nCompatible Processors\r\n     :Intel Core i7 Processors, Intel Core i5 Processors, Intel Core i3 Processors, \r\n     :Intel Pentium Processors, Intel Celeron Processors\r\nForm Factor:Micro-ATX\r\nSocket Type:LGA 1155\r\n', 'gigabyte h61.jpg', 'motherbord,h61,gigabyte h61,gigabyte h61,motherbord,h61 mb,giga h61 mb', '3 Year Warranty From Manufacturer', 'motherboard'),
(76, 3, 'Gigabyte H81-S1 M/B', 3500, 'Supports 4th Generation IntelÂ® Coreâ„¢ processors\nGIGABYTE Ultra Durableâ„¢ Technology\nGIGABYTE UEFI BIOS\nGIGABYTE On/Off Chargeâ„¢ for USB devices\nLAN with high ESD Protection\nD-SUB port on rear panel\nSolid capacitors for CPU VRM design\n\nCPU	\nSupport for \n     :IntelÂ® Coreâ„¢ i7 processors\n     :IntelÂ® Coreâ„¢ i5 processors\n     :IntelÂ® Coreâ„¢ i3 processors\n     :IntelÂ® PentiumÂ® processors\n     :IntelÂ® CeleronÂ® processors in the LGA1150 package\n     :L3 cache varies with CPU(Please refer \"CPU Support List\" for more information.)\nChipset:IntelÂ® H81 Express Chipset\nMemory: 2 x DDR3 DIMM sockets supporting up to 16 GB of system memory\n* Due to a Windows 32-bit operating system limitation, when more than 4 GB of physical memory is installed, the actual memory size displayed will be less than the size of the physical memory installed.\nDual channel memory architecture\nSupport for DDR3 1600/1333 MHz memory modules\nSupport for non-ECC memory modules\nSupport for Extreme Memory Profile (XMP) memory modules\n(Please refer \"Memory Support List\" for more information.)\nOnboard Graphics	Integrated Graphics Processor - IntelÂ® HD Graphics support:\n1 x D-Sub port, supporting a maximum resolution of 1920x1200\nMaximum shared memory of 1 GB\nAudio	\nRealtekÂ® ALC887 codec\nHigh Definition Audio\n2/4/5.1/7.1-channel\n* To configure 7.1-channel audio, you have to use an HD front panel audio module and enable the multi-channel audio feature through the audio driver.\nLAN	\nRealtekÂ® GbE LAN chip (10/100/1000 Mbit)\nExpansion Slots	\n1 x PCI Express x16 slot, running at x16\n1 x PCI Express x1 slot\n(The PCI Express slots conform to PCI Express 2.0 standard.)\nStorage Interface	Chipset:\n2 x SATA 6Gb/s connectors (SATA3 0~SATA3 1)\n2 x SATA 3Gb/s connectors (SATA2 2~SATA2 3)\nUSB	Chipset:\n2 x USB 3.0/2.0 ports on the back panel\n6 x USB 2.0/1.1 ports (2 ports on the back panel, 4 ports available through the internal USB headers)\nInternal I/O Connectors	\n1 x 24-pin ATX main power connector\n1 x 4-pin ATX 12V power connector\n2 x SATA 6Gb/s connectors\n2 x SATA 3Gb/s connectors\n1 x CPU fan header\n1 x system fan header\n1 x front panel header\n1 x front panel audio header\n1 x speaker header\n2 x USB 2.0/1.1 headers\n1 x chassis intrusion header\n1 x Clear CMOS jumper\nBack Panel Connectors	\n1 x PS/2 keyboard port\n1 x PS/2 mouse port\n1 x D-Sub port\n2 x USB 3.0/2.0 ports\n2 x USB 2.0/1.1 ports\n1 x RJ-45 port\n3 x audio jacks (Line In, Line Out, Mic In)\nI/O Controller	\niTEÂ® I/O Controller Chip\nH/W Monitoring	\nSystem voltage detection\nCPU/System temperature detection\nCPU/System fan speed detection\nCPU/System overheating warning\nCPU/System fan fail warning\nCPU/System fan speed control\n* Whether the fan speed control function is supported will depend on the cooler you install.\nBIOS	\n1 x 32 Mbit flash\nUse of licensed AMI EFI BIOS\nPnP 1.0a, DMI 2.7, WfM 2.0, SM BIOS 2.7, ACPI 5.0\nUnique Features	\nSupport for Q-Flash\nSupport for Xpress Install\nSupport for APP Center\n* Available applications in APP Center may differ by motherboard model. Supported functions of each application may also differ depending on motherboard specifications.\n@BIOS\nEasyTune\nEZ Setup\nUSB Blocker\nSupport for ON/OFF Charge\nBundle Software	\nNortonÂ® Internet Security (OEM version)\nOperating System	\nSupport for Windows 10/8.1/8/7\nForm Factor	\nMicro ATX Form Factor; 19.0cm x 17.0cm', 'giga h81s1.jpg', 'motherbord,h81,gigabyte h81,gigabyte h81,motherbord,h81 mb,giga h81 mb', '3 Year Warranty From Manufacturer', 'motherboard'),
(77, 3, 'Transcend 16GB Card', 300, '16Gb Transcend Card', '419gMiOSzOL._SX425_.jpg', 'memory,memory card,memory card 16gb,16,16gb,16gb memory card,transcend,transcend 16gb', '1 Year Warranty From Manufacturer', 'memory card'),
(78, 3, 'Transcend 8GB Card', 180, '8Gb Transcend Card', 'tranc8gb.jpg', 'memory,memory card,memory card 8gb,8,8gb,8gb memory card,transcend,transcend 8gb', '1 Year Warranty From Manufacturer', 'memory card'),
(79, 3, 'Strontium 8GB Card', 150, '8Gb Strontium MemoryCard', '3193898strontium8gbmicrosdmemorycardclass413958093541399877827_1420795796.jpg', 'memory,memory card,memory card 8gb,8,8gb,8gb memory card,strontium,strontium 8gb', '1 Year Warranty From Manufacturer', 'memory card'),
(80, 3, 'Strontium 16GB Card', 280, '16Gb Strontium Card', 'hungamdeal.co.in.JPG', 'memory,memory card,memory card 16gb,16,16gb,16gb memory card,strontium,strontium 16gb', '1 Year Warranty From Manufacturer', 'memory card');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `p_id` int(100) NOT NULL,
  `customer_email` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`p_id`, `customer_email`) VALUES
(70, ''),
(74, 's@gmail.com'),
(17, ''),
(2, ''),
(41, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `assembled`
--
ALTER TABLE `assembled`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`count`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_login`
--
ALTER TABLE `customer_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assembled`
--
ALTER TABLE `assembled`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `count` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_login`
--
ALTER TABLE `customer_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
