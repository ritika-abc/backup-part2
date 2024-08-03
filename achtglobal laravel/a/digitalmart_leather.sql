-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 19, 2024 at 06:14 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalmart_leather`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8_unicode_ci,
  `meta_desc` text COLLATE utf8_unicode_ci,
  `meta_schema` text COLLATE utf8_unicode_ci,
  `priority` int(11) DEFAULT '0',
  `active` int(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `slug`, `banner_image`, `image`, `short_description`, `description`, `meta_title`, `meta_keyword`, `meta_desc`, `meta_schema`, `priority`, `active`, `created`, `modified`) VALUES
(1, 'blog 1', 'blog-1', NULL, 'blog-1.jpg', '', '<p>blog1 desc</p>\r\n', '', '', '', NULL, 0, 1, '2021-12-25 19:07:07', '2022-10-08 13:55:30'),
(2, 'blog 2', 'blog-2', NULL, '', '', '<p>hkjhjkhhj</p>\r\n', '', '', '', NULL, 0, 1, '2021-12-25 19:15:02', '2023-03-14 17:35:01'),
(3, 'blog 3', 'blog-3', NULL, '', '', '', '', '', '', NULL, 0, 1, '2022-01-22 20:17:40', '2022-01-22 20:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8_unicode_ci,
  `meta_desc` text COLLATE utf8_unicode_ci,
  `meta_schema` text COLLATE utf8_unicode_ci,
  `priority` int(11) DEFAULT '0',
  `active` int(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `priority` int(11) DEFAULT '0',
  `active` int(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `product_id`, `name`, `slug`, `image`, `short_description`, `description`, `priority`, `active`, `created`, `modified`) VALUES
(4, 247, 'Style No #AGMW 101', 'style-no-agmw-101', 'style-no-agmw-101.jpg', '', NULL, 0, 1, '2023-11-08 12:30:00', '2023-11-08 12:37:40'),
(5, 247, 'Style No #AGMW 102', 'style-no-agmw-102', 'style-no-agmw-102.jpg', '', NULL, 0, 1, '2023-11-08 12:38:14', '2023-11-08 12:38:14'),
(6, 247, 'Style No #AGMW 103', 'style-no-agmw-103', 'style-no-agmw-103.jpg', '', NULL, 0, 1, '2023-11-08 12:38:33', '2023-11-08 12:38:33'),
(7, 247, 'Style No #AGMW 104', 'style-no-agmw-104', 'style-no-agmw-104.jpg', '', NULL, 0, 1, '2023-11-08 12:39:09', '2023-11-08 12:39:09'),
(8, 247, 'Style No #AGMW 105', 'style-no-agmw-105', 'style-no-agmw-105.jpg', '', NULL, 0, 1, '2023-11-08 12:39:24', '2023-11-08 12:39:24'),
(9, 247, 'Style No #AGMW 106', 'style-no-agmw-106', 'style-no-agmw-106.jpg', '', NULL, 0, 1, '2023-11-08 12:39:40', '2023-11-08 12:39:40'),
(10, 247, 'Style No #AGMW 107', 'style-no-agmw-107', 'style-no-agmw-107.jpg', '', NULL, 0, 1, '2023-11-08 12:39:56', '2023-11-08 12:39:56'),
(11, 247, 'Style No #AGMW 108', 'style-no-agmw-108', 'style-no-agmw-108.jpg', '', NULL, 0, 1, '2023-11-08 12:40:16', '2023-11-08 12:40:16'),
(12, 247, 'Style No #AGMW 109', 'style-no-agmw-109', 'style-no-agmw-109.jpg', '', NULL, 0, 1, '2023-11-08 12:40:33', '2023-11-08 12:40:33'),
(13, 247, 'Style No #AGMW 110', 'style-no-agmw-110', 'style-no-agmw-110.jpg', '', NULL, 0, 1, '2023-11-08 12:40:50', '2023-11-08 12:40:50'),
(14, 247, 'Style No #AGMW 111', 'style-no-agmw-111', 'style-no-agmw-111.jpg', '', NULL, 0, 1, '2023-11-08 12:41:05', '2023-11-08 12:41:05'),
(15, 247, 'Style No #AGMW 112', 'style-no-agmw-112', 'style-no-agmw-112.jpg', '', NULL, 0, 1, '2023-11-08 12:41:20', '2023-11-08 12:41:20'),
(16, 247, 'Style No #AGMW Airt01', 'style-no-agmw-airt01', 'style-no-agmw-airt01.jpg', '', NULL, 0, 1, '2023-11-08 12:41:33', '2023-11-08 12:41:33'),
(17, 247, 'Style No #AGMW Airt02', 'style-no-agmw-airt02', 'style-no-agmw-airt02.jpg', '', NULL, 0, 1, '2023-11-08 12:41:46', '2023-11-08 12:41:46'),
(18, 247, 'Style No #AGMW 121', 'style-no-agmw-121', 'style-no-agmw-121.jpg', '', NULL, 0, 1, '2023-11-08 12:41:59', '2023-11-08 12:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `homesections`
--

CREATE TABLE `homesections` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section1_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section2_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section3_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section4_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section1_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section2_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section3_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section4_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section1_description` text COLLATE utf8_unicode_ci,
  `section2_description` text COLLATE utf8_unicode_ci,
  `section3_description` text COLLATE utf8_unicode_ci,
  `section4_description` text COLLATE utf8_unicode_ci,
  `active` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `homesections`
--

INSERT INTO `homesections` (`id`, `name`, `slug`, `description`, `image`, `section1`, `section2`, `section3`, `section4`, `section1_title`, `section2_title`, `section3_title`, `section4_title`, `section1_image`, `section2_image`, `section3_image`, `section4_image`, `section1_description`, `section2_description`, `section3_description`, `section4_description`, `active`, `created`, `modified`) VALUES
(1, 'Top Mission Section', 'top-mission-section', ' ', NULL, NULL, NULL, NULL, NULL, 'Mission', 'Vision', 'Quality', 'Ethical Practices', 'mission.png', 'vision.png', 'quality.png', 'ethical-practices.png', 'Our objective is to become a trustworthy platform to buy Industrial Salt and more.', 'Dedicated to maintaining the highest standards of quality using our rich experience.', 'Focused on bringing you unmatched quality as per the industry standards.', 'Work on ethical business policies to avoid any conflicts in the future.', 1, NULL, '2022-02-27 19:00:23'),
(2, 'REASON FOR CHOOSE US', 'reason-for-choose-us', 'We are a quality-committed company that helps us earned the reputation as top-notch Furniture Suppliers and Kitchen Furniture Wholesaler in India. Browse our range and if you have any personalized demand, feel free to share with us. Weâ€™ll be happy to serve you the product, youâ€™ve been searching for.', NULL, NULL, NULL, NULL, NULL, 'Best Service', 'Guaranteed ', 'All Time Punctuality', 'Customer Support', 'best-service-in-delhi-ncr.png', 'market-we-serve.png', 'timely-delivery.png', 'leading-the-domain.png', '', '', '', '', 1, NULL, '2022-10-10 16:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(10) UNSIGNED NOT NULL,
  `lead_for` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `ipaddress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pageurl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pagerequest` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `lead_for`, `name`, `email`, `phone`, `address`, `message`, `ipaddress`, `pageurl`, `pagerequest`, `created`, `modified`) VALUES
(23, 'Contact Us', 'soa,m', 'sharmasoham05@gmail.c', '7503685999', '', '', '203.81.240.47', 'https://www.nonujitravels.com/rental-cars.html', 'ajax', '2022-09-15 11:20:52', '2022-09-15 11:20:52'),
(24, 'Contact Us', 'SURESH KUMAR JINDAL', 'Sureshjindal1967@gmail.com', '8708675070', '318/23 GUR MANDI GALI INDERLOK SONIPATT', '26 seater traveller 26th NIGHT to 30th JAN. 2023', '157.36.150.29', 'https://www.nonujitravels.com/tempo-traveller.html?gclid=Cj0KCQjwmouZBhDSARIsALYcouoXco6dPbzR7sezCyFNePhT6LLXYCr49WuxnSG539T6KAqnFdTviDcaAvvJEALw_wcB', 'ajax', '2022-09-15 19:58:08', '2022-09-15 19:58:08'),
(25, 'Contact Us', 'Sahil Khandelwal', 'sahilkhandelwal086@gmail.com', '07045208383', 'Shisha Godam Road, Dwarka Mor', '', '27.5.35.80', 'https://www.nonujitravels.com/tempo-traveller.html?gclid=Cj0KCQjwmouZBhDSARIsALYcouoB20onUbi-YIF6qCt5BSMKpT3g1PyPIAu9lVELSqDoGR2kMG-17vYaAuyFEALw_wcB', 'ajax', '2022-09-16 12:13:40', '2022-09-16 12:13:40'),
(26, 'Contact Us', 'Tanuja', 'tanuja.tannu29@gmail.com', '9958799438', 'F 1201, CLOUD 9, AHINSA KHAND 2, INDIRAPURAM, Ghaziabad, Uttar Pradesh, India, 201014', 'Need 20-26 pwopy capacity temp traveller ', '223.233.66.75', 'https://www.nonujitravels.com/tempo-traveller.html?gclid=CjwKCAjwpqCZBhAbEiwAa7pXeW8somrilL0W-e3XmSFuK-inrJeXIaGdnXKferXgsMdNrHh122afARoCi8YQAvD_BwE', 'ajax', '2022-09-19 19:59:32', '2022-09-19 19:59:32'),
(27, 'Contact Us', 'Shakun  Maharaj', 'jshakun0@gmail.com', '+27676148894', '47 Bayview House South Beach Avenue South', 'Hi. \r\nRequire 2o seater round trip.\r\nDay arrive Del transfer to hotel\r\nDay 2 Agra via Mathura. Vrindivan\r\n3) Jaipur\r\n4)jaipur\r\n5)Amrusta\r\n6Amrusta Katra\r\n7Katra\r\n8) Sxr house boat\r\n9)dal lake Gulmarg\r\n10) dal lake tour\r\n11)\r\nSxr haridwar\r\n12 Rishikesh /haridwar\r\n13 Haridwar /Delhi\r\n14 Delhi /Ashajadam\r\n15 Delhi\r\n16) city tour / drop off  railway station.\r\nPrice must be in Indian Rupees.\r\nPrice must incl drivers  fees, toll, parking. No hidden cost. Thank u.\r\n', '41.246.25.43', 'https://www.nonujitravels.com/tempo-traveller.html?gclid=Cj0KCQjw1bqZBhDXARIsANTjCPJkZ9b799ORIAidFbxlSvkiVhmwK81-OUJQfp6ncPz0fEuS33G6-PgaAjRdEALw_wcB', 'ajax', '2022-09-24 20:21:09', '2022-09-24 20:21:09'),
(28, 'Contact Us', 'Mrigesh Raj', 'raj_mrigesh@yahoo.com', '9999643977', '', 'Please contact ', '122.161.50.221', 'https://www.nonujitravels.com/tempo-traveller.html?gclid=EAIaIQobChMIiZTa_Yyy-gIVVh0rCh0YBQaoEAAYAiAAEgIvsfD_BwE', 'ajax', '2022-09-26 14:51:26', '2022-09-26 14:51:26'),
(29, 'Contact Us', 'Mrigesh Raj', 'raj_mrigesh@yahoo.com', '9999643977', '', 'Please contact ', '122.161.50.221', 'https://www.nonujitravels.com/tempo-traveller.html?gclid=EAIaIQobChMIiZTa_Yyy-gIVVh0rCh0YBQaoEAAYAiAAEgIvsfD_BwE', 'ajax', '2022-09-26 14:51:28', '2022-09-26 14:51:28'),
(30, 'Contact Us', 'Chehk', 'chehakchhabra8007@gmail.com', '7982817162', 'Sector-7 rohini,Delhi', '', '122.162.144.34', 'https://www.nonujitravels.com/tempo-traveller.html?gclid=CjwKCAjwm8WZBhBUEiwA178UnCEdHOT9LPGLTGWgoyG682Ttg_jz8tKKGQV8VdPIn01VtHAvWhDn0RoC-IAQAvD_BwE', 'ajax', '2022-09-26 21:22:26', '2022-09-26 21:22:26'),
(31, 'Contact Us', 'SOHAM SHARMA', 'sharmasoham05@gmail.com', '+917503685999', 'F-10/119,120 SECTOR-15 ROHINI NEW DELHI,NORT-WEST', 'wwwwwwwww', '202.142.122.47', 'http://www.nonujitravels.com/tempo-traveller.html', 'ajax', '2022-09-28 14:21:58', '2022-09-28 14:21:58'),
(32, 'Contact Us', 'Harvey Miller', 'Harveymiller.web1@gmail.com', 'Harvey Miller', 'CA', 'Hey,\r\n\r\nYour website\'s design is absolutely brilliant. The visuals really enhance your message and the content compels action. I\'ve forwarded it to a few of my contacts who I think could benefit from your services.\r\n\r\nWhen I was looking at your site, though, I noticed some mistakes that you\'ve made re: search engine optimization (SEO) which may be leading to a decline in your organic SEO results. Would you like to fix it so that you can get maximum exposure/presence on Google, Bing, Yahoo and web traffic to your website?\r\n\r\nIt\'s a relatively simple fix. If this is a priority, I can also get on a call.\r\n\r\nPlease share your â€œPhone Number\" and a suitable time to talk, so I can help you in that.\r\n\r\nRegards,\r\nHarvey Miller\r\nDigital Marketing Expert', '122.161.53.241', 'https://www.satyavathiagro.com/contact-us.html', 'ajax', '2023-03-13 13:53:10', '2023-03-13 13:53:10'),
(33, 'Contact Us', 'James P', 'pat@aneesho.com', '3128780396', '20 Cooper Square', 'Do you need help with graphic design - brochures, banners, flyers, advertisements, social media posts, logos etc? \r\n\r\nWe charge a low fixed monthly fee. Let me know if you\'re interested and would like to see our portfolio.', '117.96.224.108', 'https://www.satyavathiagro.com/contact-us.html', 'ajax', '2023-10-14 14:46:07', '2023-10-14 14:46:07'),
(34, 'Contact Us', 'Subhashis Ghosh', 'subgho102@gmail.com', '9830872928', '', 'bussiness', '49.37.34.129', 'https://www.achtglobal.in/contact-us.html', 'ajax', '2023-12-06 23:42:56', '2023-12-06 23:42:56'),
(35, 'Contact Us', 'Acht Global LLP', 'achtglobal@gmail.com', '+91 9830872928', '99/97 jessore road', 'Hi. Test', '49.37.11.153', 'https://www.achtglobal.in/contact-us.html', 'ajax', '2023-12-16 21:29:41', '2023-12-16 21:29:41'),
(36, 'Contact Us', 'Sampa Santra', 'achtglobal@gmail.com', '09830872928', '83, S.P. Mukherjee Road , 5th Floor', 'test message.............................', '49.37.8.218', 'https://www.achtglobal.in/contact-us.html', 'ajax', '2024-01-15 15:37:19', '2024-01-15 15:37:19'),
(37, 'Contact Us', 'SHALINI', 'SHALINIPUNIA770@GMAIL.COM', '9958539389', 'DELHI', 'DQIGUIHIH4GU33', '122.162.145.95', 'https://www.achtglobal.in/contact-us.html', 'ajax', '2024-01-17 14:01:26', '2024-01-17 14:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT '0',
  `locationtype` tinyint(4) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `catalog_type` int(2) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `meta_schema` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8_unicode_ci,
  `meta_desc` text COLLATE utf8_unicode_ci,
  `meta_keyword` text COLLATE utf8_unicode_ci,
  `location_order` int(1) DEFAULT '0',
  `active` int(1) DEFAULT '0',
  `top_location` int(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `parent_id`, `locationtype`, `name`, `location_title`, `slug`, `catalog_type`, `image`, `short_description`, `description`, `meta_schema`, `location_url`, `meta_title`, `meta_desc`, `meta_keyword`, `location_order`, `active`, `top_location`, `created`, `modified`) VALUES
(725, 0, 0, 'West Bengal', NULL, 'west-bengal', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:37:15', '2019-02-02 13:03:32'),
(726, 725, 0, 'Alipore', NULL, 'alipore', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:37:28', '2018-06-14 12:37:28'),
(727, 725, 0, 'Alipurduar', NULL, 'alipurduar', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:37:47', '2018-06-14 12:37:47'),
(728, 725, 0, 'Balurghat', NULL, 'balurghat', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:38:24', '2018-06-14 12:38:24'),
(729, 725, 0, 'Bankura', NULL, 'bankura', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:38:39', '2018-06-14 12:38:39'),
(730, 725, 0, 'Barasat', NULL, 'barasat', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:38:52', '2018-06-14 12:38:52'),
(731, 725, 0, 'Bardhaman', NULL, 'bardhaman', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:39:03', '2018-06-14 12:39:03'),
(732, 725, 0, 'Birbhum', NULL, 'birbhum', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:39:14', '2018-06-14 12:39:14'),
(733, 725, 0, 'Cooch Behar', NULL, 'cooch-behar', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:39:29', '2019-02-02 13:18:23'),
(734, 725, 0, 'Darjeeling', NULL, 'darjeeling', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:39:43', '2018-06-14 12:39:43'),
(735, 725, 0, 'Hooghly', NULL, 'hooghly', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:39:54', '2018-06-14 12:39:54'),
(736, 725, 0, 'Howrah', NULL, 'howrah', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:40:06', '2018-06-14 12:40:06'),
(737, 725, 0, 'Jalpaiguri', NULL, 'jalpaiguri', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:40:20', '2018-06-14 12:40:20'),
(738, 725, 0, 'Kolkata', NULL, 'kolkata', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:40:33', '2018-06-14 12:40:33'),
(739, 725, 0, 'Malda', NULL, 'malda', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:40:46', '2018-06-14 12:40:46'),
(740, 725, 0, 'Medinipur', NULL, 'medinipur', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:40:57', '2018-06-14 12:40:57'),
(741, 725, 0, 'Midnapore', NULL, 'midnapore', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:41:09', '2018-06-14 12:41:09'),
(742, 725, 0, 'Murshidabad', NULL, 'murshidabad', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:41:21', '2018-06-14 12:41:21'),
(743, 725, 0, 'Nadia', NULL, 'nadia', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:41:34', '2018-06-14 12:41:34'),
(744, 725, 0, 'Purulia', NULL, 'purulia', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:41:51', '2018-06-14 12:41:51'),
(745, 725, 0, 'Raiganj', NULL, 'raiganj', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-14 12:42:12', '2018-06-14 12:42:12'),
(1070, 725, 0, 'Asansol', NULL, 'asansol', NULL, '', '', '', NULL, NULL, '', '', '', 0, 1, 0, '2023-11-07 20:19:34', '2023-11-07 20:19:34'),
(1071, 725, 0, 'Siliguri', NULL, 'siliguri', NULL, '', '', '', NULL, NULL, '', '', '', 0, 1, 0, '2023-11-07 20:20:05', '2023-11-07 20:20:05'),
(1072, 725, 0, 'Durgapur', NULL, 'durgapur', NULL, '', '', '', NULL, NULL, '', '', '', 0, 1, 0, '2023-11-07 20:20:34', '2023-11-07 20:20:34'),
(1073, 725, 0, 'Baharampur', NULL, 'baharampur', NULL, '', '', '', NULL, NULL, '', '', '', 0, 1, 0, '2023-11-07 20:22:35', '2023-11-07 20:22:35'),
(1074, 725, 0, 'Habra', NULL, 'habra', NULL, '', '', '', NULL, NULL, '', '', '', 0, 1, 0, '2023-11-07 20:22:54', '2023-11-07 20:22:54'),
(1075, 725, 0, 'Kharagpur', NULL, 'kharagpur', NULL, '', '', '', NULL, NULL, '', '', '', 0, 1, 0, '2023-11-07 20:23:15', '2023-11-07 20:23:15'),
(1076, 725, 0, 'Shantipur', NULL, 'shantipur', NULL, '', '', '', NULL, NULL, '', '', '', 0, 1, 0, '2023-11-07 20:23:42', '2023-11-07 20:23:42'),
(1077, 725, 0, 'Dankuni', NULL, 'dankuni', NULL, '', '', '', NULL, NULL, '', '', '', 0, 1, 0, '2023-11-07 20:24:11', '2023-11-07 20:24:11'),
(1078, 725, 0, 'Dhulian', NULL, 'dhulian', NULL, '', '', '', NULL, NULL, '', '', '', 0, 1, 0, '2023-11-07 20:24:26', '2023-11-07 20:24:26'),
(1079, 725, 0, 'Ranaghat', NULL, 'ranaghat', NULL, '', '', '', NULL, NULL, '', '', '', 0, 1, 0, '2023-11-07 20:24:45', '2023-11-07 20:24:45'),
(1080, 725, 0, 'Haldia', NULL, 'haldia', NULL, '', '', '', NULL, NULL, '', '', '', 0, 1, 0, '2023-11-07 20:25:01', '2023-11-07 20:25:01'),
(1081, 725, 0, 'Krishnanagar', NULL, 'krishnanagar', NULL, '', '', '', NULL, NULL, '', '', '', 0, 1, 0, '2023-11-07 20:25:27', '2023-11-07 20:25:27'),
(1082, 725, 0, 'Nabadwip', NULL, 'nabadwip', NULL, '', '', '', NULL, NULL, '', '', '', 0, 1, 0, '2023-11-07 20:26:09', '2023-11-07 20:26:09'),
(1083, 725, 0, 'Basirhat', NULL, 'basirhat', NULL, '', '', '', NULL, NULL, '', '', '', 0, 1, 0, '2023-11-07 20:27:21', '2023-11-07 20:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `locationsx`
--

CREATE TABLE `locationsx` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT '0',
  `locationtype` tinyint(4) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `catalog_type` int(2) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `meta_schema` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8_unicode_ci,
  `meta_desc` text COLLATE utf8_unicode_ci,
  `meta_keyword` text COLLATE utf8_unicode_ci,
  `location_order` int(1) DEFAULT '0',
  `active` int(1) DEFAULT '0',
  `top_location` int(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `locationsx`
--

INSERT INTO `locationsx` (`id`, `parent_id`, `locationtype`, `name`, `location_title`, `slug`, `catalog_type`, `image`, `short_description`, `description`, `meta_schema`, `location_url`, `meta_title`, `meta_desc`, `meta_keyword`, `location_order`, `active`, `top_location`, `created`, `modified`) VALUES
(2, 0, 0, 'India', NULL, 'india', 1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2018-06-13 15:21:25', '2022-01-23 17:42:00'),
(1649, 2, 0, 'Gurgaon', NULL, 'gurgaon', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:19:58', '2023-01-14 07:19:58'),
(1650, 2, 0, 'Gurugram', NULL, 'gurugram', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:20:05', '2023-01-14 07:20:05'),
(1651, 2, 0, 'Faridabad', NULL, 'faridabad', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:20:13', '2023-01-14 07:20:13'),
(1652, 2, 0, 'Delhi', NULL, 'delhi', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:20:23', '2023-01-14 07:20:23'),
(1653, 2, 0, 'Noida', NULL, 'noida', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:20:30', '2023-01-14 07:20:30'),
(1654, 2, 0, 'Manesar', NULL, 'manesar', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:20:37', '2023-01-14 07:20:37'),
(1655, 2, 0, 'Bawal', NULL, 'bawal', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:20:47', '2023-01-14 07:20:47'),
(1656, 2, 0, 'Neemrana', NULL, 'neemrana', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:20:54', '2023-01-14 07:20:54'),
(1657, 2, 0, 'Bhiwadi', NULL, 'bhiwadi', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:21:01', '2023-01-14 07:21:01'),
(1658, 2, 0, 'Bangalore', NULL, 'bangalore', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:21:08', '2023-01-14 07:21:08'),
(1659, 2, 0, 'Mumbai', NULL, 'mumbai', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:21:18', '2023-01-14 07:21:18'),
(1660, 2, 0, 'Pune', NULL, 'pune', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:21:25', '2023-01-14 07:21:25'),
(1661, 2, 0, 'Chennai', NULL, 'chennai', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:21:32', '2023-01-14 07:21:32'),
(1662, 2, 0, 'Hyderabad', NULL, 'hyderabad', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:21:38', '2023-01-14 07:21:38'),
(1663, 2, 0, 'Jaipur', NULL, 'jaipur', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:21:46', '2023-01-14 07:21:46'),
(1664, 2, 0, 'Ahmedabad', NULL, 'ahmedabad', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:21:52', '2023-01-14 07:21:52'),
(1665, 2, 0, 'Amritsar', NULL, 'amritsar', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:22:00', '2023-01-14 07:22:00'),
(1666, 2, 0, 'Agra', NULL, 'agra', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:22:09', '2023-01-14 07:22:09'),
(1667, 2, 0, 'Allahabad', NULL, 'allahabad', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:22:16', '2023-01-14 07:22:16'),
(1668, 2, 0, 'Bhopal', NULL, 'bhopal', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:22:23', '2023-01-14 07:22:23'),
(1669, 2, 0, 'Bhubaneswar', NULL, 'bhubaneswar', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:22:30', '2023-01-14 07:22:30'),
(1670, 2, 0, 'Chandigarh', NULL, 'chandigarh', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:22:47', '2023-01-14 07:22:47'),
(1671, 2, 0, 'Guwahati', NULL, 'guwahati', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:22:53', '2023-01-14 07:22:53'),
(1672, 2, 0, 'Goa', NULL, 'goa', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:23:00', '2023-01-14 07:23:00'),
(1673, 2, 0, 'Indore', NULL, 'indore', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:23:11', '2023-01-14 07:23:11'),
(1674, 2, 0, 'Kolkata', NULL, 'kolkata', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:23:19', '2023-01-14 07:23:19'),
(1675, 2, 0, 'Kanpur', NULL, 'kanpur', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:23:27', '2023-01-14 07:23:27'),
(1676, 2, 0, 'Ludhiana', NULL, 'ludhiana', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:23:35', '2023-01-14 07:23:35'),
(1677, 2, 0, 'Nagpur', NULL, 'nagpur', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:23:42', '2023-01-14 07:23:42'),
(1678, 2, 0, 'Patna', NULL, 'patna', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:23:51', '2023-01-14 07:23:51'),
(1679, 2, 0, 'Ranchi', NULL, 'ranchi', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:24:01', '2023-01-14 07:24:01'),
(1680, 2, 0, 'Raipur', NULL, 'raipur', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:24:08', '2023-01-14 07:24:08'),
(1681, 2, 0, 'Udaipur', NULL, 'udaipur', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:24:19', '2023-01-14 07:24:19'),
(1682, 2, 0, 'Varanasi', NULL, 'varanasi', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:24:26', '2023-01-14 07:24:26'),
(1683, 2, 0, 'Coimbatore', NULL, 'coimbatore', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:24:35', '2023-01-14 07:24:35'),
(1684, 2, 0, 'Jodhpur', NULL, 'jodhpur', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:24:44', '2023-01-14 07:24:44'),
(1685, 2, 0, 'Surat', NULL, 'surat', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:24:51', '2023-01-14 07:24:51'),
(1686, 2, 0, 'Vadodara', NULL, 'vadodara', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:24:58', '2023-01-14 07:24:58'),
(1687, 2, 0, 'Aurangabad', NULL, 'aurangabad', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:25:07', '2023-01-14 07:25:07'),
(1688, 2, 0, 'Rajkot', NULL, 'rajkot', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:25:15', '2023-01-14 07:25:15'),
(1689, 2, 0, 'Rohtak', NULL, 'rohtak', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:25:23', '2023-01-14 07:25:23'),
(1690, 2, 0, 'Badali', NULL, 'badali', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:25:30', '2023-01-14 07:25:30'),
(1691, 2, 0, 'Jammu', NULL, 'jammu', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:25:38', '2023-01-14 07:25:38'),
(1692, 2, 0, 'Shimla', NULL, 'shimla', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:25:46', '2023-01-14 07:25:46'),
(1693, 2, 0, 'Dehradun', NULL, 'dehradun', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:25:52', '2023-01-14 07:25:52'),
(1694, 2, 0, 'Visakhapatnam', NULL, 'visakhapatnam', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:26:00', '2023-01-14 07:26:00'),
(1695, 2, 0, 'Vijayawada', NULL, 'vijayawada', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:26:07', '2023-01-14 07:26:07'),
(1696, 2, 0, 'Hubli', NULL, 'hubli', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:26:15', '2023-01-14 07:26:15'),
(1697, 2, 0, 'New Delhi', NULL, 'new-delhi', NULL, '', '', '', NULL, NULL, '', '', '', 0, 0, 0, '2023-01-14 07:26:22', '2023-01-14 07:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `description1` text COLLATE utf8_unicode_ci,
  `description2` text COLLATE utf8_unicode_ci,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8_unicode_ci,
  `meta_desc` text COLLATE utf8_unicode_ci,
  `meta_schema` text COLLATE utf8_unicode_ci,
  `priority` int(11) DEFAULT '0',
  `active` int(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `banner_image`, `image`, `short_description`, `description`, `description1`, `description2`, `meta_title`, `meta_keyword`, `meta_desc`, `meta_schema`, `priority`, `active`, `created`, `modified`) VALUES
(1, 'Home page', 'home-page', NULL, 'home-page.jpg', '', '', '<p style=\"text-align:justify\">At Acht Global Llp, we are passionate about crafting exceptional leather goods that blend style, functionality, and timeless elegance. With a rich heritage of leather craftsmanship and a commitment to quality, our company has become a trusted name in the world of leather accessories. Our product line features a range of meticulously designed and handcrafted items, including Leather Wallets, Leather Card Holders, and Leather Key Chains. Each piece we create embodies the essence of sophistication and practicality.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Our Vision:</strong></p>\r\n\r\n<p style=\"text-align:justify\">Our vision is to enrich the lives of our customers by providing them with the finest leather accessories that not only serve their practical needs but also make a statement of individuality and style. We strive to be recognized as a brand synonymous with quality, craftsmanship, and innovation.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Product Portfolio:</strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong>Leather Wallets:</strong> Our leather wallets are a testament to the marriage of tradition and contemporary design. Carefully selected, premium-grade leather is expertly crafted into wallets that are both elegant and durable. Whether you prefer a classic bifold or a minimalist cardholder style, our collection offers a wide range of options to suit your taste and needs.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Leather Card Holders: </strong>Our Leather Card Holders are designed for the modern individual who values simplicity and functionality. Crafted with precision, they offer a sleek and efficient solution for carrying your essential cards while maintaining a refined aesthetic. Perfect for business professionals, frequent travelers, and anyone who appreciates organized simplicity.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Leather Key Chains: </strong>Our Leather Key Chains add a touch of sophistication to your everyday life. They are not merely accessories but expressions of your personal style. Each keychain is designed to be both functional and fashionable, ensuring your keys are easily accessible while adding a stylish touch to your keyring.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Quality Assurance:</strong></p>\r\n\r\n<p style=\"text-align:justify\">At Acht Global Llp, we are committed to maintaining the highest standards of quality in every product we create. Our artisans are meticulous in their craftsmanship, using only the finest materials and paying close attention to detail. We stand behind the quality of our products and offer a warranty to ensure your satisfaction.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Sustainability:</strong></p>\r\n\r\n<p style=\"text-align:justify\">We are dedicated to sustainable practices, from sourcing our leather responsibly to minimizing waste in our production processes. We believe that it is our responsibility to leave a positive impact on the environment while delivering exceptional products to our customers.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Customization:</strong></p>\r\n\r\n<p style=\"text-align:justify\">We understand that personalization is important. That&#39;s why we offer customization options for many of our products. You can engrave your name, initials, or a special message on your leather goods, making them uniquely yours.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Customer Service:</strong></p>\r\n\r\n<p style=\"text-align:justify\">Our commitment to customer satisfaction is unwavering. We provide responsive and efficient customer support to assist you with any questions or concerns you may have.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', NULL, 'Leather Wallet Manufacturers in Kolkata | Leather Card Holders Suppliers in Kolkata', 'Are Looking Leather Wallet Manufacturers in Kolkata. Acht Global is leading Leather Card Holders Suppliers in Kolkata at the best prices. Content us ', 'Are Looking Leather Wallet Manufacturers in Kolkata. Acht Global is leading Leather Card Holders Suppliers in Kolkata at the best prices. Content us ', NULL, 0, 1, '2021-12-25 19:21:23', '2023-11-20 15:39:41'),
(2, 'Company Profile', 'company-profile', NULL, 'company-profile.jpg', '', '<p><strong>Our Mission:</strong> Our Mission as the Leather wallet , Accessories exporter is to provide and sell high quality leather wallets, accessories that blend style , usefulness, and durability to market throughout the world. We work hard to give each of our customers a dependable , classic item that will last them for years to come. While addressing the needs of the international market, we are dedicated to employing ethical and ecological production practices and hope to promote India&#39;s rich cultural heritage of leather crafting</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Our Vision:</strong> By continually providing items of unmatched quality and style to our international consumers, we want to become the top innovative exporter of leather wallets from India. We want to build a global network of partners and clients who share our beliefs and expand our product line to include a wider selection of leather accessories that are all manufactured ethically and environmentally. In the future, we see our company as the pinnacle of Indian leather&#39;s quality and craftsmanship, and our goods becoming renowned all over the world for their distinctive style and sturdiness. Finally, we hope to contribute to the development of the rich cultural heritage of leather handicraft in India by presenting our products to the global market.<br />\r\n<strong>OUR BUSINESS IS DEDICATED TO EMPOWERING WOMEN BY GIVING THEM EQUITABLE ACCESS TO CHANCES FOR PROFESSIONAL SUCCESS.</strong></p>\r\n\r\n<p>We have a diverse workforce including women in senior roles, and we support them in pursuing their goals.</p>\r\n\r\n<p>Additionally, our company also supports organizations and initiatives that empower women in our local communities.</p>\r\n\r\n<p>Meet Our Women Entrepreneur</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\"><img alt=\"\" src=\"https://www.360digitalmart.com/leather/img/photo1.jpg\" style=\"height:176px; width:146px\" /></td>\r\n			<td style=\"text-align:center\"><img alt=\"\" src=\"https://www.360digitalmart.com/leather/img/photo2.jpg\" style=\"height:176px; width:146px\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Mrs. Ghosh Santra (BA)</td>\r\n			<td style=\"text-align:center\">Ms. Dey (MBA)</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>ACHT GLOBAL LLP IS AN EXPORTING COMPANY BASED IN KOLKATA , INDIA. AG PROVIDES TOP QUALITY LEATHER</p>\r\n\r\n<p>Our company is meeting needs of leather wallet, keychains, Purse. Board with us and see the difference</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"https://www.360digitalmart.com/leather/img/photo3.jpg\" /></td>\r\n			<td><img alt=\"\" src=\"https://www.360digitalmart.com/leather/img/photo4.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '', NULL, 'Leather Card Holder Manufacturers in Kolkata -Acht Global', 'Looking a Leather Card Holder  Manufacturers in Kolkata. We have affordable price for Leather Card Holder Suppliers in Kolkata for your needs. Contact us now for Leather Card Holder in Kolkata.', 'Looking a Leather Card Holder  Manufacturers in Kolkata. We have affordable price for Leather Card Holder Suppliers in Kolkata for your needs. Contact us now for Leather Card Holder in Kolkata.', NULL, 0, 1, '2021-12-25 19:24:29', '2023-11-20 15:48:58'),
(3, 'Our Products', 'our-products', NULL, '', '', '', '', NULL, '', '', '', NULL, 0, 1, '2021-12-25 19:25:24', '2023-02-27 15:54:01'),
(4, 'Contact Us', 'contact-us', NULL, '', '', '', '', NULL, 'Acht Global  Contact Detail', 'Acht Global  Contact Detail- Company Address 83, S.P. Mukherjee Road, 5th Floor, Kolkata, West Bengal, call us +91 9830582928, email- info@achtglobal.com', 'Acht Global  Contact Detail- Company Address 83, S.P. Mukherjee Road, 5th Floor, Kolkata, West Bengal, call us +91 9830582928, email- info@achtglobal.com', NULL, 0, 1, '2021-12-25 19:25:33', '2023-11-20 15:42:21'),
(5, 'Our Presence', 'our-presence', NULL, 'our-presence.gif', '', '', '', NULL, 'Leather Wallet Manufacturers in subdomain, Leather Card Holder, Leather Key Chain  Suppliers, Exporters subdomain', 'Best Leather Wallet in subdomain, Leather Card Holder in subdomain, Best Leather Key Chain Manufacturers in subdomain, Leather Note Case Suppliers in subdomain, Genuine Leather Money Clip Exporters in subdomain', 'Looking for Leather Wallet  Manufacturers from in subdomain? Save Huge! buy from Acht Global Llpsubdomain - leading Leather Wallet Manufacturers in subdomain, Suppliers, Genuine Leather Card Holder Exporters in subdomain at best price.', NULL, 0, 1, '2021-12-25 19:26:10', '2023-11-20 15:40:01'),
(6, 'Importer Category', 'importer-category', NULL, '', '', '<p style=\"text-align:justify\">Searching for the leading <strong>product Importer in Mumbai</strong>? Ryan International has a rich experience that helped the company overcome challenges come to keep clients satisfied. We source reliable quality from trusted vendors to deliver the best.</p>\r\n\r\n<p style=\"text-align:justify\">Our products are well-appreciated and used in various industries for multiple purposes. We follow ethical practices and put our best efforts to deliver accordingly. You can get product with us at Industry-leading prices.</p>\r\n\r\n<p style=\"text-align:justify\">Being a noted product Importer from India, we have the right resources to meet bulk orders within a stipulated time frame. Call us or ping your requirements to get our assistance now.</p>\r\n', NULL, NULL, 'product Importer In Mumbai, product Importer From India', 'product, product Importer, product Importer In Mumbai, product Importer From India, product In Maharashtra', 'Ryan International a product Importer in Mumbai. As a famed product Importer from India, we offer product at a competitive price', NULL, 0, 1, '2021-12-25 19:26:35', '2022-01-22 10:44:13'),
(7, 'Suppliers Category', 'suppliers-category', NULL, '', '', '<p>Manward Healthcare Products is one of the growing product Suppliers In Noida, Uttar Pradesh. Thanks to our quality-focused approach, we push our limits and have covered the distance of miles, despite the market competition. Our medical consumables are according to defined industry norms and available in bulk at industry-leading rates.</p>\r\n\r\n<p>We have a dedicated manufacturing unit that enables us to satisfy bulk product requirements without compromising quality. Besides, we have a team of distributors to handle the timely supply to every corner possible. We put tireless efforts to ensure timely supply without fail.</p>\r\n\r\n<p>Being a noteworthy product Supplier In India, we offer unrivalled quality products. You can share bulk requirements with our experts from the website or call our executives to take this discussion ahead.</p>\r\n', '', NULL, 'product Suppliers In Greater Noida Delhi Hyderabad India', 'product Suppliers, product Supplier In Greater Noida, product Supplier In India, Supplier Of product In U.P., Suppliers Of product In Delhi, product in Hyderabad, product in Rajkot, product in Kolkata, product in Ranchi', 'product Suppliers in Greater Noida India. Manward Healthcare Products  is leading product supplier in U.P. Delhi Hyderabad Rajkot Kolkata Ranchi Kanpur Pune', NULL, 0, 1, '2021-12-25 19:26:45', '2022-04-27 16:36:06'),
(8, 'Dealer Category', 'dealer-category', NULL, '', '', '<p style=\"text-align:justify\"><strong>Ryan International</strong> is a prominent name in the industry, engaged in supplying reliable products at competitive market prices. With years of experience and expertise, we have become a noteworthy product Dealer in Mumbai, Gujarat and Maharashtra and Pan India.</p>\r\n\r\n<p style=\"text-align:justify\">Over the years, we have developed great recognition and put every effort possible to maintain it. As a notable product Distributor and Wholesaler, we provide quick and safe transportation to your doorstep.</p>\r\n\r\n<p style=\"text-align:justify\">Being a preeminent <strong>product Dealer</strong> in India, we are here to hear your requirements and serve solutions accordingly. Dial our number to have a direct conversation with our experts now.</p>\r\n', NULL, NULL, 'product Dealer In Mumbai Gujarat Maharashtra India Delhi Bangalore', 'product, product Dealer, product Dealers, product Dealer In Mumbai, product Dealers In Maharashtra, Dealer Of product, Dealers Of product', 'Ryan International a reputed product Dealer in Mumbai. A known product Dealers in India Gujarat Maharashtra Delhi Chennai Pune Kolkata Bangalore Jalandhar Vadodara Nagpur', NULL, 0, 1, '2021-12-25 19:27:06', '2022-01-22 10:44:58'),
(9, 'Exporters Category', 'exporters-category', NULL, '', '', '<p>Manward Healthcare Products is one of the leading product Exporters from India. Besides being based in India, we have the resources that help us make our products available to you in different corners possible. We do not compromise quality and cater to your bulk orders in no time possible.</p>\r\n\r\n<p>Our product portfolio is vast and has extensive options to cater to distinct customer preferences. We are committed to quality and customer satisfaction and bring that to you at the best prices. We have a well-equipped facility and a team of professionals to handle the manufacturing and supplying with extreme safety and attention to detail.</p>\r\n\r\n<p>Being a preeminent product Exporter based In Noida, Uttar Pradesh, we provide prompt delivery and after-sale support. Fill in your requirements via the website or call our experts to discuss more</p>\r\n', '', NULL, 'product Exporters In India | product Exporter From India', 'product Exporters, product Exporter, product Exporters In India, Exporters Of product From India, product In India', 'product Exporters in India. Manward Healthcare Products  is leading product exporter from India offer product at competitive price', NULL, 0, 1, '2021-12-25 19:27:23', '2022-04-27 16:36:51'),
(10, 'Sitemap', 'sitemap', NULL, '', '', '', '', NULL, '', '', '', NULL, 0, 0, '2021-12-25 21:03:46', '2023-11-07 13:07:02'),
(11, 'Manufacturers Category', 'manufacturers-category', NULL, '', '', '', '', NULL, '', '', '', NULL, 0, 0, '2022-01-22 10:48:00', '2023-02-27 15:54:22'),
(12, 'Producers Category', 'producers-category', NULL, '', '', '', NULL, NULL, '', '', '', NULL, 0, 0, '2022-01-22 10:49:00', '2022-01-22 10:49:00'),
(13, 'Our Blog', 'our-blog', NULL, '', '', '', NULL, NULL, '', '', '', NULL, 0, 0, '2022-01-29 10:26:55', '2022-01-29 10:26:55'),
(14, 'Latest News', 'latest-news', NULL, '', '', '', NULL, NULL, 'Latest News', '', '', NULL, 0, 0, '2022-01-29 10:27:48', '2022-01-29 10:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `catalog_pdf` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8_unicode_ci,
  `meta_desc` text COLLATE utf8_unicode_ci,
  `meta_schema` text COLLATE utf8_unicode_ci,
  `priority` int(11) DEFAULT '0',
  `active` int(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `parent_id`, `name`, `slug`, `banner_image`, `image`, `short_description`, `description`, `catalog_pdf`, `meta_title`, `meta_keyword`, `meta_desc`, `meta_schema`, `priority`, `active`, `created`, `modified`) VALUES
(247, NULL, 'Leather Wallet', 'leather-wallet', NULL, 'leather-wallet.jpg', '', '<p style=\"text-align:justify\">Our Leather Wallets are a testament to the timeless beauty of leather craftsmanship. These wallets are more than just accessories; they are daily companions designed to serve you with functionality and style. Crafted with meticulous attention to detail, our Leather Wallets are available in various styles to cater to different preferences.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Key Features:</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Premium Leather:</strong> We use only the finest quality leather, carefully selected for its texture, durability, and aesthetic appeal. The leather ages gracefully, developing a unique patina over time, adding character to your wallet.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Craftsmanship:</strong> Our artisans take pride in their work, meticulously handcrafting each wallet to perfection. Their skill and dedication ensure that every stitch and fold is impeccable, resulting in a product that lasts.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Multiple Styles:</strong> Our Leather Wallets come in various styles, including bifold, trifold, slim, and minimalist cardholder designs. Whether you prefer a classic or contemporary look, you&#39;ll find a wallet that suits your style and storage needs.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Functionality:</strong> Our wallets are designed for practicality. You&#39;ll find ample space for your cards, cash, and other essentials. Additionally, we incorporate RFID-blocking technology in some models to protect your sensitive information from digital theft.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Personalization:</strong> Elevate your wallet with a personal touch. Many of our leather wallets offer customization options, allowing you to engrave your initials or a special message, making it uniquely yours.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Durability:</strong> Our Leather Wallets are built to withstand the test of time. With proper care, they become more refined and beautiful as they age, making them heirloom pieces to pass down through generations.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><strong>Sustainability:</strong></p>\r\n\r\n<p style=\"text-align:justify\">We believe in responsible sourcing and eco-friendly practices. The leather used in our wallets is ethically sourced, and our manufacturing processes are designed to minimize waste and reduce our environmental footprint.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Why Choose Our Leather Wallets?</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Timeless Elegance:</strong> Our wallets exude a classic charm that transcends fashion trends, ensuring you&#39;ll be in style for years to come.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Quality Assurance:</strong> We stand by the quality of our Leather Wallets and offer a warranty to give you peace of mind.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Satisfaction Guaranteed:</strong> We are committed to delivering a product that delights our customers. Your satisfaction is our ultimate goal.</p>\r\n	</li>\r\n</ul>\r\n', '', 'Leather Wallet Manufacturers in Kolkata | Leather Wallet Suppliers in Kolkata', 'Leather Wallet Manufacturers in Kolkata, Leather Wallet Suppliers in Kolkata, Leather Wallet in Kolkata, Leather Wallet', 'Looking a Leather Wallet Manufacturers in Kolkata. We have affordable price for Leather Wallet Suppliers in Kolkata for your needs. Contact us now for Leather Wallet in Kolkata.', NULL, 0, 1, '2023-11-07 12:50:54', '2023-11-20 15:51:20'),
(248, NULL, 'Leather Card Holder', 'leather-card-holder', NULL, 'leather-card-holder.jpg', '', '<p style=\"text-align:justify\">Our Leather Card Holders are a symbol of minimalism, sophistication, and practicality. Crafted with precision and designed for modern individuals who value simplicity and organization, these cardholders offer a sleek and efficient solution for carrying your essential cards in style.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Key Features:</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Premium Leather:</strong> We insist on using the highest quality leather, selected for its texture, durability, and visual appeal. The leather not only looks and feels luxurious but also ages gracefully, developing a unique patina over time.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Minimalist Design:</strong> Our Leather Card Holders are streamlined and compact, making them perfect for those who prefer to travel light. They slide easily into pockets or bags, providing quick access to your most-used cards.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Storage Capacity:</strong> Despite their minimalist design, our cardholders offer ample space for your essential cards, whether they are business cards, credit cards, or ID cards. You can keep your cards well-organized and within reach.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Craftsmanship:</strong> Our skilled artisans painstakingly handcraft each card holder to ensure that every detail, from stitching to edging, is impeccable. The result is a product that not only looks elegant but is also built to last.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>RFID Protection:</strong> For added security, some of our cardholders feature RFID-blocking technology, safeguarding your sensitive information from digital theft.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Personalization:</strong> Add a personal touch to your Leather Card Holder by customizing it with your initials or a meaningful message. Make it uniquely yours.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><strong>Sustainability:</strong></p>\r\n\r\n<p style=\"text-align:justify\">We are committed to responsible sourcing and sustainable practices. The leather used in our cardholders is ethically sourced, and we take steps to minimize waste and reduce our environmental impact during the manufacturing process.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Why Choose Our Leather Card Holders?</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Effortless Elegance:</strong> Our cardholders are designed to complement your style effortlessly, whether you&#39;re dressing up or down.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Quality Assurance:</strong> We are confident in the durability and craftsmanship of our Leather Card Holders, and we back them with a warranty for your peace of mind.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Customer Satisfaction:</strong> Your satisfaction is our top priority. We aim to provide you with a product that you&#39;ll love and use for years to come.</p>\r\n	</li>\r\n</ul>\r\n', '', 'Leather Card Holder Manufacturers in Kolkata | Leather Card Holder Suppliers in Kolkata', 'Leather Card Holder Manufacturers in Kolkata, Leather Card Holder Suppliers in Kolkata, Leather Card Holder in Kolkata, Leather Card Holder', 'Looking a Leather Card Holder Manufacturers in Kolkata. We have affordable price for Leather Card Holder Suppliers in Kolkata for your needs. Contact us now for Leather Card Holder in Kolkata.', NULL, 0, 1, '2023-11-07 12:51:16', '2023-11-20 15:52:18'),
(249, NULL, 'Leather Key Chain', 'leather-key-chain', NULL, 'leather-key-chain.jpg', '', '<p style=\"text-align:justify\">Our Leather Key Chains are more than just functional accessories; they are a stylish statement of your personal taste. Designed to add a touch of sophistication to your everyday life, our Leather Key Chains are meticulously crafted, combining form and function seamlessly.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Key Features:</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Exquisite Leather:</strong> We insist on using the finest quality leather that has been carefully chosen for its texture, strength, and aesthetic appeal. The leather not only exudes luxury but also matures gracefully, developing a unique patina over time.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Timeless Design:</strong> Our Leather Key Chains feature timeless and versatile designs that complement a range of styles. They are a subtle yet powerful way to enhance the overall look of your keys.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Functionality:</strong> Our key chains are designed with practicality in mind. They make it easy to keep your keys organized and within easy reach. You&#39;ll never fumble through your bag or pockets again to find your keys.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Craftsmanship:</strong> Each Leather Key Chain is meticulously handcrafted by our skilled artisans, ensuring every detail, from stitching to finishing, is of the highest quality. The result is a key chain that not only looks exquisite but is also built to endure daily use.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Personalization:</strong> Many of our key chains offer the option for customization. You can engrave your initials, a significant date, or a special message, making your key chain uniquely yours or a thoughtful gift for someone special.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><strong>Sustainability:</strong></p>\r\n\r\n<p style=\"text-align:justify\">We are committed to responsible sourcing and sustainable practices. The leather used in our key chains is ethically sourced, and we take steps to minimize waste and reduce our environmental impact during the manufacturing process.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Why Choose Our Leather Key Chains?</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Elevated Style:</strong> Our key chains are designed to elevate the everyday, adding a touch of class to your keys and accessories.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Quality Assurance:</strong> We have unwavering confidence in the durability and craftsmanship of our Leather Key Chains and provide a warranty for your peace of mind.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Customer Satisfaction:</strong> Your satisfaction is paramount to us. We are dedicated to delivering a product that resonates with your unique style and needs.</p>\r\n	</li>\r\n</ul>\r\n', '', 'Leather Key Chain Manufacturers in Kolkata | Leather Key Chain Suppliers in Kolkata', 'Leather Key Chain Manufacturers in Kolkata, Leather Key Chain Suppliers in Kolkata, Leather Key Chain in Kolkata, Leather Key Chain', 'Looking a Leather Key Chain Manufacturers in Kolkata. We have affordable price for Leather Key Chain Suppliers in Kolkata for your needs. Contact us now for Leather Key Chain in Kolkata.', NULL, 0, 1, '2023-11-07 12:51:25', '2023-11-20 15:53:54'),
(250, NULL, 'Leather Note Case', 'leather-note-case', NULL, 'leather-note-case.jpg', '', '<p style=\"text-align:justify\">we understand the importance of keeping your notes, thoughts, and ideas organized and protected. Our Leather Note Cases are a blend of form and function, providing you with a stylish and practical solution for your note-taking needs.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Key Features:</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Supreme Leather Quality:</strong> We are committed to using the finest, hand-selected leather that exhibits texture, durability, and visual appeal. Our leather not only exudes luxury but also ages gracefully, developing a unique patina over time.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Thoughtful Design:</strong> Our Leather Note Cases are thoughtfully designed to accommodate your note-taking essentials. Whether you prefer to carry a notepad, notebook, or loose sheets of paper, our cases have the flexibility to accommodate your needs.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Organization:</strong> Stay organized with dedicated pockets and slots for business cards, pens, and other essentials, ensuring you have everything you need at your fingertips.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Craftsmanship:</strong> Each Leather Note Case is meticulously handcrafted by our skilled artisans, ensuring that every detail, from stitching to finishing, is of the highest quality. The result is a note case that not only looks exquisite but is also built to endure daily use.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Personalization:</strong> Elevate your note case with a personal touch. Many of our products offer the option for customization, allowing you to engrave your initials, a significant date, or a special message, making your note case uniquely yours.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><strong>Sustainability:</strong></p>\r\n\r\n<p style=\"text-align:justify\">We are committed to responsible sourcing and sustainable practices. The leather used in our note cases is ethically sourced, and we take steps to minimize waste and reduce our environmental impact during the manufacturing process.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Why Choose Our Leather Note Cases?</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Elegance and Versatility:</strong> Our note cases exude an elegant and professional appearance, making them suitable for a variety of settings, whether it&#39;s a business meeting or a creative brainstorming session.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Quality Assurance:</strong> We have unwavering confidence in the durability and craftsmanship of our Leather Note Cases and provide a warranty for your peace of mind.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Customer Satisfaction:</strong> Your satisfaction is our top priority. We aim to provide you with a product that enhances your note-taking experience and reflects your unique style.</p>\r\n	</li>\r\n</ul>\r\n', '', 'Leather Note Case Manufacturers in Kolkata | Leather Note Case Suppliers in Kolkata', 'Leather Note Case Manufacturers in Kolkata, Leather Note Case Suppliers in Kolkata, Leather Note Case in Kolkata, Leather Note Case ', 'Looking a Leather Note Case Manufacturers in Kolkata. We have affordable price for Leather Note Case Suppliers in Kolkata for your needs. Contact us now for Leather Note Case in Kolkata.', NULL, 0, 1, '2023-11-07 12:51:48', '2023-11-20 15:53:42'),
(251, NULL, 'Leather Money Clip', 'leather-money-clip', NULL, 'leather-money-clip.jpg', '', '<p style=\"text-align:justify\">Elevate your everyday essentials with the sophistication and practicality of our Leather Money Clips. Designed to simplify your life and make a stylish statement, our money clips are a fusion of elegance and functionality.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Key Features:</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Premium Leather:</strong> We are dedicated to using the finest quality leather, carefully selected for its texture, strength, and aesthetic appeal. Our leather not only exudes luxury but also matures gracefully, developing a unique patina over time.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Sleek and Minimalist Design:</strong> Our Leather Money Clips are designed with simplicity in mind. They are compact and streamlined, offering a minimalistic approach to keeping your cash and cards organized.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Secure Cash and Cards:</strong> Our money clips feature a secure mechanism to hold your cash and cards firmly in place, ensuring they won&#39;t slip out. You can carry your essentials confidently and conveniently.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Craftsmanship:</strong> Each Leather Money Clip is meticulously handcrafted by our skilled artisans, ensuring every detail, from stitching to finishing, is of the highest quality. The result is a money clip that not only looks exquisite but is also built to endure daily use.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Personalization:</strong> Add a personal touch to your money clip with customization options. You can engrave your initials, a significant date, or a special message, making your money clip uniquely yours.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><strong>Sustainability:</strong></p>\r\n\r\n<p style=\"text-align:justify\">We are committed to responsible sourcing and sustainable practices. The leather used in our money clips is ethically sourced, and we take steps to minimize waste and reduce our environmental impact during the manufacturing process.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Why Choose Our Leather Money Clips?</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Effortless Style:</strong> Our money clips offer a sophisticated way to carry your essentials without the bulk of a traditional wallet. They are ideal for those who value minimalism and practicality.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Quality Assurance:</strong> We have unwavering confidence in the durability and craftsmanship of our Leather Money Clips and provide a warranty for your peace of mind.</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\"><strong>Customer Satisfaction:</strong> Your satisfaction is paramount to us. We aim to provide you with a product that elevates your daily routine and complements your unique style.</p>\r\n	</li>\r\n</ul>\r\n', '', 'Leather Money Clip Manufacturers in Kolkata | Leather Money Clip Suppliers in Kolkata', 'Leather Money Clip Manufacturers in Kolkata, Leather Money Clip Suppliers in Kolkata, Leather Money Clip in Kolkata, Leather Wallet', 'Looking a Leather Money Clip Manufacturers in Kolkata. We have affordable price for Leather Money Clip Suppliers in Kolkata for your needs. Contact us now for Leather Money Clip in Kolkata.', NULL, 0, 1, '2023-11-07 12:52:02', '2023-11-20 15:54:44');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `priority` int(11) DEFAULT '0',
  `active` int(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `slug`, `image`, `short_description`, `description`, `priority`, `active`, `created`, `modified`) VALUES
(17, '111', '111', '111.jpg', '', NULL, 0, 1, '2022-10-18 12:15:36', '2023-11-07 13:32:52'),
(18, '22', '22', '22.jpg', '', NULL, 0, 1, '2022-10-18 12:15:47', '2023-11-07 13:33:06'),
(22, '333', '333', '333.jpg', '', NULL, 0, 1, '2023-02-27 15:34:46', '2023-11-07 13:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `subdomains`
--

CREATE TABLE `subdomains` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `catalog_pdf` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8_unicode_ci,
  `meta_desc` text COLLATE utf8_unicode_ci,
  `meta_schema` text COLLATE utf8_unicode_ci,
  `priority` int(11) DEFAULT '0',
  `active` int(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `subdomains`
--

INSERT INTO `subdomains` (`id`, `name`, `slug`, `image`, `short_description`, `description`, `catalog_pdf`, `meta_title`, `meta_keyword`, `meta_desc`, `meta_schema`, `priority`, `active`, `created`, `modified`) VALUES
(1, 'Our Presence', 'our-presence', '', 'product In subdomain', '<p style=\"text-align:justify\">It&#39;s the most vital part of everyone&rsquo;slife.However, you can reach out to us; <strong>Acht Global LLP</strong> is one of the leading associations in the request, If you too are looking for the stylish product in subdomain.<br />\r\n<br />\r\n<strong>Luxurious and Glamorous</strong><br />\r\nWant to buy commodity that makes you look glamorous? Go for bags, bag not only grooms your look but are also a vital part of ourlives.However, you can get in touch with us, we&#39;re the most prominent suppliers of the same, If in case you&#39;re looking for excellent product Suppliers in subdomain.<br />\r\n<br />\r\n<strong>Precious look</strong><br />\r\nWe&#39;ve designed this bag by assaying numerous factors and advanced the look. You can buy it if you want to add some precious look to your personality. We&#39;ve a variety of similar pocketbooks for you. also, we&#39;re the stylish product Exporters in subdomain.</p>\r\n', NULL, 'product Manufacturers in subdomain, product Suppliers in subdomain', 'Best product in subdomain, product in subdomain, Best product Manufacturers in subdomain, product Suppliers in subdomain, Genuine product Exporters in subdomain', 'Looking for product Manufacturers from in subdomain? Save Huge! buy from Acht Global Llpsubdomain - leading product Manufacturers in subdomain, Suppliers, Genuine product Exporters in subdomain at best price.', NULL, 0, 1, '2021-12-25 21:23:31', '2023-11-20 15:40:24'),
(2, 'Suppliers Category', 'suppliers-category', '', 'product Suppliers', '<p>Manward Healthcare Products is one of the growing product Suppliers In Noida, Uttar Pradesh. Thanks to our quality-focused approach, we push our limits and have covered the distance of miles, despite the market competition. Our medical consumables are according to defined industry norms and available in bulk at industry-leading rates.</p>\r\n\r\n<p>We have a dedicated manufacturing unit that enables us to satisfy bulk product requirements without compromising quality. Besides, we have a team of distributors to handle the timely supply to every corner possible. We put tireless efforts to ensure timely supply without fail.</p>\r\n\r\n<p>Being a noteworthy product Supplier In India, we offer unrivalled quality products. You can share bulk requirements with our experts from the website or call our executives to take this discussion ahead.</p>\r\n', NULL, 'product Suppliers In Greater Noida Delhi Hyderabad India', 'product Suppliers, product Supplier In Greater Noida, product Supplier In India, Supplier Of product In U.P., Suppliers Of product In Delhi, product in Hyderabad, product in Rajkot, product in Kolkata, product in Ranchi', 'product Suppliers in Greater Noida India. Manward Healthcare Products  is leading product supplier in U.P. Delhi Hyderabad Rajkot Kolkata Ranchi Kanpur Pune', NULL, 0, 0, '2022-01-09 20:15:46', '2022-08-20 13:20:25'),
(3, 'Importer Category', 'importer-category', '', 'product Importer', '', NULL, '', '', '', NULL, 0, 0, '2022-01-22 10:35:57', '2022-10-08 14:37:35'),
(4, 'Dealer Category', 'dealer-category', '', 'product Dealer', '', NULL, '', '', '', NULL, 0, 0, '2022-01-22 10:36:46', '2022-04-27 16:43:52'),
(5, 'Exporters Category', 'exporters-category', '', '', '<p>Manward Healthcare Products is one of the leading product Exporters from India. Besides being based in India, we have the resources that help us make our products available to you in different corners possible. We do not compromise quality and cater to your bulk orders in no time possible.</p>\r\n\r\n<p>Our product portfolio is vast and has extensive options to cater to distinct customer preferences. We are committed to quality and customer satisfaction and bring that to you at the best prices. We have a well-equipped facility and a team of professionals to handle the manufacturing and supplying with extreme safety and attention to detail.</p>\r\n\r\n<p>Being a preeminent product Exporter based In Noida, Uttar Pradesh, we provide prompt delivery and after-sale support. Fill in your requirements via the website or call our experts to discuss more</p>\r\n', NULL, 'product Exporters In India | product Exporter From India', 'product Exporters, product Exporter, product Exporters In India, Exporters Of product From India, product In India', 'product Exporters in India. Manward Healthcare Products  is leading product exporter from India offer product at competitive price', NULL, 0, 0, '2022-01-22 10:47:32', '2022-08-20 13:20:10'),
(6, 'Manufacturers Category', 'manufacturers-category', '', '', '<p>Manward Healthcare Products is one of the best product Manufacturers In Noida, Uttar Pradesh. We indulge our manufacturing expertise, premium raw materials and sophisticated technology in producing high-quality products according to the industry standards. We keep up with the safety norms and meet them with the best practices possible.</p>\r\n\r\n<p>We work on our toes and update our resources with time to deliver the best product at industry-leading rates. We value customer satisfaction over anything and work on our toes to keep it intact. The mission is to attain perfection, and we go beyond the limits for it.</p>\r\n\r\n<p>We offer the best products in bulk. We today hold credibility among reputable product Manufacturer In India and leave no stone unturned to maintain and improve it. You can send us your bulk enquiries via the website or call our experts for further discussion.</p>\r\n', NULL, 'product Manufacturers In Greater Noida U.P. India', 'product Manufacturers, product Manufacturer In Greater Noida, product Manufacturer In India, Manufacturer Of product In U.P., Manufacturers Of product', 'product Manufacturers in Greater Noida. Manward Healthcare Products  is leading product Manufacturer in U.P. India offer product at market leading prices', NULL, 0, 0, '2022-01-22 10:48:15', '2022-08-20 13:20:14'),
(7, 'Producers Category', 'producers-category', '', 'product Producers', '', NULL, '', '', '', NULL, 0, 0, '2022-01-22 10:49:05', '2022-04-27 16:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8_unicode_ci,
  `meta_desc` text COLLATE utf8_unicode_ci,
  `meta_schema` text COLLATE utf8_unicode_ci,
  `priority` int(11) DEFAULT '0',
  `active` int(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `slug`, `image`, `short_description`, `description`, `meta_title`, `meta_keyword`, `meta_desc`, `meta_schema`, `priority`, `active`, `created`, `modified`) VALUES
(1, 'Abhishek Yadav', 'abhishek-yadav', 'rahul-kumar.jpg', 'I earn very nice experience for work with Satyavathi Agro, ravi bhai is very cooperative person.....i highly recommend Satyavathi Agro for agro products. keep it up', '', NULL, NULL, NULL, NULL, 0, 1, '2022-01-22 20:56:43', '2023-03-07 12:17:24'),
(5, 'Archana Kumari', 'archana-kumari', 'kuldeep.jpg', 'Satyavathi Agro is one of the renowned Onion Exporters and Suppliers in India.', '', NULL, NULL, NULL, NULL, 0, 1, '2022-01-23 12:13:19', '2023-03-07 12:17:51'),
(6, 'Deepak Chourasiya', 'deepak-chourasiya', 'neeraj.jpg', 'I recommend Satyavathi Agro as they provide quality and pocket friendly  agro products âœŒ', '', NULL, NULL, NULL, NULL, 0, 1, '2022-01-25 12:17:09', '2023-03-07 12:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `username`, `password`, `active`, `created`, `modified`) VALUES
(1, 'admin', 'admin', 'admin', 'a465b6e05a5dee36c7370b6b8bed5cbc015b1cb0', 1, '2011-09-26 00:34:07', '2024-03-04 12:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tagline` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contactemail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `branchaddress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enquiryform` text COLLATE utf8_unicode_ci,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8_unicode_ci,
  `pinterest` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `header_text` text COLLATE utf8_unicode_ci,
  `footer_text` text COLLATE utf8_unicode_ci,
  `active` int(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `name`, `slug`, `logo`, `tagline`, `email`, `contactemail`, `phone`, `mobile`, `address`, `branchaddress`, `address3`, `address4`, `address5`, `enquiryform`, `facebook`, `twitter`, `linkedin`, `instagram`, `google_analytics`, `pinterest`, `youtube`, `header_text`, `footer_text`, `active`, `created`, `modified`) VALUES
(1, 'Acht Global LLP', 'acht-global-llp', 'acht-global-llp.png', ' Acht Global Llp', 'achtglobal@gmail.com', '', '+91 9830872928', '', '83, S.P. Mukherjee Road, 5th Floor, Kolkata- 700026 West Bengal india', ' ', ' ', ' ', ' ', '', 'https://www.facebook.com/profile.php?id=61556554739521', 'https://twitter.com/achtglobal', 'linkedin', 'https://www.instagram.com/', '<!-- Google tag (gtag.js) -->\r\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-W9GN01C5H5\"></script>\r\n<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments);}\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'G-W9GN01C5H5\');\r\n</script>', 'Pinterest', 'https://www.youtube.com/', '<h1>Welcome&nbsp;</h1>\r\n', '<p style=\"text-align:justify\">Our vision is to enrich the lives of our customers by providing them with the finest leather accessories that not only serve their practical needs but also make a statement of individuality and style. We strive to be recognized as a brand synonymous with quality, craftsmanship, and innovation.</p>\r\n', 0, NULL, '2024-03-04 12:08:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homesections`
--
ALTER TABLE `homesections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locationsx`
--
ALTER TABLE `locationsx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subdomains`
--
ALTER TABLE `subdomains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `homesections`
--
ALTER TABLE `homesections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1084;

--
-- AUTO_INCREMENT for table `locationsx`
--
ALTER TABLE `locationsx`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1698;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subdomains`
--
ALTER TABLE `subdomains`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
