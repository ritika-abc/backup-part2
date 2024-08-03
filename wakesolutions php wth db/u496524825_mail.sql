-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 26, 2024 at 09:11 AM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u496524825_mail`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_logo`
--

CREATE TABLE `client_logo` (
  `client_logo_id` int(11) NOT NULL,
  `logo_link` varchar(200) NOT NULL,
  `logo_image_name` varchar(300) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `client_logo`
--

INSERT INTO `client_logo` (`client_logo_id`, `logo_link`, `logo_image_name`, `type`) VALUES
(160, '', '1673091804_ABB.png', '1'),
(161, '', '1673091818_Anchor.png', '1'),
(162, '', '1673091826_apar.png', '1'),
(163, '', '1673091833_comet.png', '1'),
(164, '', '1673091849_crompton.png', '1'),
(165, '', '1673091855_dawells.png', '1'),
(166, '', '1673091863_electric.png', '1'),
(167, '', '1673091869_havels.png', '1'),
(168, '', '1673091875_honey well.png', '1'),
(169, '', '1673091881_jaquar.png', '1'),
(170, '', '1673091888_KEI.png', '1'),
(171, '', '1673091896_leg rand.png', '1'),
(172, '', '1673091904_ls cable.png', '1'),
(173, '', '1673091911_paramount.png', '1'),
(174, '', '1673091919_polycab.png', '1'),
(175, '', '1673091925_simon.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_us`
--

CREATE TABLE `tbl_about_us` (
  `id` int(11) NOT NULL,
  `about_desc` text NOT NULL,
  `title1` varchar(300) NOT NULL,
  `title2` varchar(300) NOT NULL,
  `title3` varchar(300) NOT NULL,
  `title4` varchar(300) NOT NULL,
  `benifit` text NOT NULL,
  `technique` text NOT NULL,
  `grc_screen` text NOT NULL,
  `benifite_desc` text NOT NULL,
  `technique_desc` text NOT NULL,
  `grc_desc` text NOT NULL,
  `about_image` varchar(100) NOT NULL,
  `about_image2` varchar(200) NOT NULL,
  `about_image3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_about_us`
--

INSERT INTO `tbl_about_us` (`id`, `about_desc`, `title1`, `title2`, `title3`, `title4`, `benifit`, `technique`, `grc_screen`, `benifite_desc`, `technique_desc`, `grc_desc`, `about_image`, `about_image2`, `about_image3`) VALUES
(1, '<p><span style=\"color:#000000\">Welcome to MARWAN GLOBAL, we take pride in telling you that what once started out of a small office for translation, we&#39;ve grown into a multi-lingual translation &amp; Documentation Company. We specialize in breaking down language barriers and connecting people through accurate and culturally sensitive translations. With a passion for precision and a commitment to communication, we seamlessly bridge linguistic gaps to connect businesses and cultures. Our dedicated team of linguists, cultural experts, and project managers work tirelessly to ensure your message resonates globally.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '', 'We help customers development', 'We provide 24x7 support Center\r\n\r\n', '', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li><span style=\"color:#000000\">Client-Centric Approach</span></li>\r\n			</ul>\r\n			</td>\r\n			<td>\r\n			<ul>\r\n				<li>\r\n				<p><span style=\"color:#000000\">Commitment to Excellence</span></p>\r\n				</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li>\r\n				<p><span style=\"color:#000000\">Expertise and Experience</span></p>\r\n				</li>\r\n			</ul>\r\n			</td>\r\n			<td>\r\n			<ul>\r\n				<li>\r\n				<p><span style=\"color:#000000\">Best Quality Services Provider</span></p>\r\n				</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '', '', '', '1714107109_about-three-img-2.jpg', '1667552890_one.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_us_features`
--

CREATE TABLE `tbl_about_us_features` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `ab_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_about_us_features`
--

INSERT INTO `tbl_about_us_features` (`id`, `name`, `ab_desc`) VALUES
(10, 'Government Business', 'Our organization participates in different World Bank Aided, Health Ministry of Govt. of India aided and other State Funded projects. Recently, we also have been successfully on earning the orders of around 2 Million USD for the products marketed by us.'),
(11, 'Literature Distribution', 'We print our offered product literature, which is based on our own highlights the positive points of our products as well as marketing policies. Besides this, we also distribute them through our postal correspondence in a manner to ensure that these should reach to all our clients from our correspondence list.'),
(12, 'Promotional Activities', 'We sponsor and also take part at various level conferences of doctors that include district, state and national level conference. We further spend a vast percentage of our return on the various promotional activities which are carried out by marketing our products as well as offering the varied gift offers to our esteemed clients.'),
(13, 'Word of Mouth Effect', 'Our satisfied & delighted customers and the prompt service back up, provided by us, have helped us to reach this far by creating a critical group of users, who count on us and only refer the products that are marketed by us. Each year, we achieve good percentage of business through our word of mouth effect, where a doctor convinces other to go for the products that have been used by him for long time.'),
(14, 'Indirect Marketing', 'Through our trusted local associates, our wide product range is directly or indirectly promoted to our prospective buyers. This type of marketing is mainly carried out by our associates, who are a reliable source of spreading our product information among our prospective customers.'),
(15, 'Direct Marketing', 'We are proud to have with us strong, trained and educated sales personnel, who directly market our wide product range to our esteemed clients in India as well as across the globe. They are backed by a rich industry experience in this business domain and are experts in understanding the various as well as specific requirements of our clients.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_list`
--

CREATE TABLE `tbl_add_list` (
  `id` int(11) NOT NULL,
  `list_name` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_add_list`
--

INSERT INTO `tbl_add_list` (`id`, `list_name`) VALUES
(5, 'cladding panel'),
(6, 'BOUNDRY WALL'),
(7, 'BALUSTRADES'),
(8, 'COLUMN & CAPITALS'),
(9, 'CORNICE'),
(10, 'SCREENS & MASHRABIYAS'),
(11, 'DOMES'),
(12, 'ARCHITECTURAL MOULDING'),
(13, 'CEILINGS'),
(17, 'KIOSKS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_mobile` varchar(100) NOT NULL,
  `admin_phone_no` varchar(300) NOT NULL,
  `admin_footer_phone` varchar(400) NOT NULL,
  `admin_h_phone` varchar(255) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_h_email` varchar(100) NOT NULL,
  `admin_footer_email` varchar(500) NOT NULL,
  `admin_login` varchar(50) NOT NULL,
  `admin_pass` varchar(200) NOT NULL,
  `admin_add` varchar(400) NOT NULL,
  `admin_footer_add` varchar(400) NOT NULL,
  `ac_bank` varchar(200) NOT NULL,
  `ac_no` varchar(200) NOT NULL,
  `ac_ifsc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `admin_name`, `admin_mobile`, `admin_phone_no`, `admin_footer_phone`, `admin_h_phone`, `admin_email`, `admin_h_email`, `admin_footer_email`, `admin_login`, `admin_pass`, `admin_add`, `admin_footer_add`, `ac_bank`, `ac_no`, `ac_ifsc`) VALUES
(1, '', '', '+91-8882838341, +91-8588838341', '+91-8882838341, +91-8588838341', '+91-8882838341', 'varenyammachinetools@gmail.com', '', 'varenyammachinetools@gmail.com', 'admin@gmail.com', 'd9ebbd5535e3762f15c9532c1b6db13e7c21641d', 'H 33 / 67 Sector-3 Rohini New Delhi-110085', 'H 33 / 67 Sector-3 Rohini New Delhi-110085', 'H 33 / 67 Sector-3 Rohini New Delhi-110085', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `banner_id` int(11) NOT NULL,
  `banner_name` varchar(300) NOT NULL,
  `banner_decs` varchar(300) NOT NULL,
  `banner_type` bigint(10) NOT NULL DEFAULT 1,
  `banner_image_name` varchar(200) NOT NULL,
  `banner_decs2` text NOT NULL,
  `banner_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`banner_id`, `banner_name`, `banner_decs`, `banner_type`, `banner_image_name`, `banner_decs2`, `banner_link`) VALUES
(112, 'Sag Life Science', '', 2, '1660824620_Gmh_Lab.pdf', '', ''),
(114, 'Cardiokaire', '', 2, '1660824761_Gmh_Lab.pdf', '', ''),
(115, 'EDNA', '', 2, '1660824783_Gmh_Lab.pdf', '', ''),
(116, 'Herbelle / Ayurvedic', '', 2, '1660824819_Gmh_Lab.pdf', '', ''),
(117, '	Sag Neuro Science', '', 2, '1660824840_Gmh_Lab.pdf', '', ''),
(118, '	Sag', '', 2, '1660824862_Gmh_Lab.pdf', '', ''),
(120, 'Molybdenum Wire', 'Category', 3, '1712734999_one.jpg', '', '#'),
(121, 'Rukasi Brand WEDM Brass Hard Wire', 'Category', 3, '1712735050_two.jpg', '', '#'),
(122, 'Rust and Carbon Remover', 'Category', 3, '1712735160_three.jpg', '', '#'),
(123, '', 'TABLETS, CAPSULES, ORAL LIQUID SYRUP, INJECTABLE (CEPHALOSPORINS, PENICILLIN, PENEM), CLAV (TABLETS, DRY SYRUP), OINTMENTS, IV FLUIDS, DRY SYRUP', 4, '1660882379_comming.pdf', '', ''),
(124, '', 'SOFT GEL CAPSULE', 4, '1660882463_comming.pdf', '', ''),
(125, '', 'COSMETICS LIST', 4, '1660882486_comming.pdf', '', ''),
(126, '', 'SURGICAL LIST', 4, '1660882499_comming.pdf', '', ''),
(127, '', 'AYURVEDIC LIST', 4, '1660882521_comming.pdf', '', ''),
(128, '', 'Automation', 5, '1662962031_one.png', '', ''),
(129, '', 'Automobile', 5, '1662962046_two.png', '', ''),
(130, '', 'Warehouse Automation', 5, '1662962070_three.png', '', ''),
(131, '', 'Machine Tool ', 5, '1662962089_four.png', '', ''),
(132, '', 'Robotics', 5, '1662962105_five.png', '', ''),
(133, '', 'Aviation', 5, '1662962141_six.png', '', ''),
(139, 'Conviential Machine', 'We provide the Best Quality Products and to continue as a leading manufacturer and supplier of these products in the global market.', 6, '1712735816_one.png', '', '#'),
(140, 'Edm Division', 'We provide the Best Quality Products and to continue as a leading manufacturer and supplier of these products in the global market.', 6, '1712735826_two.png', '', '#'),
(141, 'Cutting Tools', 'We provide the Best Quality Products and to continue as a leading manufacturer and supplier of these products in the global market.', 6, '1712735835_three.png', '', '#'),
(142, 'Holding System', 'We provide the Best Quality Products and to continue as a leading manufacturer and supplier of these products in the global market.', 6, '1712735846_four.png', '', '#'),
(150, '', 'Cosmetic cum Skin Range 2022-23', 7, '1660886762_Gmh_Lab.pdf', '', ''),
(152, '', 'Dry Powder Injection 2022-23', 7, '1660887374_comming.pdf', '', ''),
(153, '', 'EAR , EYE, NASAL - DROP & EXTERNAL 2022-23', 7, '1660887386_comming.pdf', '', ''),
(154, '', 'HERBAL RANGE List 2022-23', 7, '1660887397_comming.pdf', '', ''),
(155, '', 'IV Fluids List 2022-23', 7, '1660887409_comming.pdf', '', ''),
(156, '', 'Liquid Injection 2022-23', 7, '1660887422_comming.pdf', '', ''),
(157, '', 'TABLETS, CAPSULES, ORAL LIQUID SYRUP, INJECTABLE (CEPHALOSPORINS, PENICILLIN, PENEM), CLAV (TABLETS, DRY SYRUP), OINTMENTS, IV FLUIDS, DRY SYRUP', 8, '1660887229_Gmh_Lab.pdf', '', ''),
(158, '', 'SOFT GEL CAPSULES', 8, '1660887317_comming.pdf', '', ''),
(159, '', 'COSMETICS LIST', 8, '1660887329_comming.pdf', '', ''),
(160, '', 'SURGICAL LIST', 8, '1660887341_comming.pdf', '', ''),
(161, '', 'AYURVEDIC LIST', 8, '1660887353_comming.pdf', '', ''),
(162, 'WEDM Brass Wire', 'Category', 3, '1712735210_four.jpg', '', '#'),
(163, 'WEDM Zinc Coated Brass Wire', 'Category', 3, '1712735293_five.jpg', '', '#'),
(164, 'WEDM Brass Wir', 'Category', 3, '1712735336_six.jpg', '', '#'),
(170, 'WEDM Coolant', 'Category', 3, '1712735399_seven.jpg', '', '#'),
(171, 'WEDM Water Filter', 'Category', 3, '1712735409_eight.jpg', '', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_best_sell`
--

CREATE TABLE `tbl_best_sell` (
  `id` int(11) NOT NULL,
  `linking` varchar(300) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_best_sell`
--

INSERT INTO `tbl_best_sell` (`id`, `linking`, `image`) VALUES
(1, 'about.php', '1609915318_testimonials.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `cate_name` varchar(200) NOT NULL,
  `category_image` varchar(200) NOT NULL,
  `cate_desc` text NOT NULL,
  `stastus` varchar(50) DEFAULT NULL,
  `home_status` varchar(11) DEFAULT NULL,
  `dat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cate_name`, `category_image`, `cate_desc`, `stastus`, `home_status`, `dat`) VALUES
(1, 'Services', '968.', '', NULL, NULL, '2024-04-26 05:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_img`
--

CREATE TABLE `tbl_category_img` (
  `img_id` int(11) NOT NULL,
  `category_parent_id` int(11) NOT NULL,
  `category_image_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_category_img`
--

INSERT INTO `tbl_category_img` (`img_id`, `category_parent_id`, `category_image_name`) VALUES
(110, 124, '1495276550_fiberss.jpg'),
(112, 128, '1495864597_37.jpg'),
(113, 129, '1495864619_17.jpg'),
(114, 131, '1495864873_20.jpg'),
(115, 133, '1495865159_21.jpg'),
(116, 134, '1495866026_lotuz.jpg'),
(117, 140, '1496395660_outer-1.jpg'),
(118, 162, '01-detail.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `msg_subject` varchar(300) NOT NULL,
  `message` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `phone_number`, `msg_subject`, `message`, `type`, `date`) VALUES
(62, 'abhay singh', 'as271070@gmail.com', '', '', 'abhayjhbvshjdvsghdvshgvdsghfvgdshfvdgshfvdgshfvdsghfvdghdvsghdsv', 'Enquiry', '2021-02-04 17:59:05'),
(63, 'abhay singh', 'as288@gmail.com', '', '', 'abhay', 'Contact', '2021-02-04 18:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `A_name` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `home_status` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id`, `name`, `A_name`, `time`, `home_status`, `image`, `date`, `desc`) VALUES
(17, 'Students Workshop', 'APS Grand', 'JUNE 6, 2016', 'Home', '18755.jpg', '2020-10-01 10:34:43', '<p>Workshops are regularly organized by the school. Resource people and experts are invited for this purpose.&nbsp;While conducting workshop emphasis is given in the field of art and craft, dramatics, social awareness, manners, science etc.</p>\r\n'),
(18, 'Parents are requested to attend a meeting on Monday', 'APS Grand', 'JUNE 6, 2016', 'Remove', '7070.jpg', '2020-10-01 10:38:39', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>\r\n'),
(19, 'Parents are requested to attend a meeting on Monday', 'APS Grand', 'JUNE 6, 2016', '', '10316.jpg', '2020-10-01 10:39:16', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_logo`
--

CREATE TABLE `tbl_footer_logo` (
  `logo_id` int(11) NOT NULL,
  `logo_image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_footer_logo`
--

INSERT INTO `tbl_footer_logo` (`logo_id`, `logo_image_name`) VALUES
(2, '1708931327_1635482542_footer.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `gal_id` int(11) NOT NULL,
  `gal_name` varchar(255) NOT NULL,
  `gal_category` varchar(255) NOT NULL,
  `gal_image` varchar(255) NOT NULL,
  `gal_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gal_id`, `gal_name`, `gal_category`, `gal_image`, `gal_date`) VALUES
(84, '', '', '1610009523_13.jpg', '2021-01-07 08:52:03'),
(85, '', '', '1610009532_14.jpg', '2021-01-07 08:52:12'),
(86, '', '', '1610009541_15.jpg', '2021-01-07 08:52:21'),
(87, '', '', '1610009549_16.jpg', '2021-01-07 08:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_about`
--

CREATE TABLE `tbl_home_about` (
  `id` int(11) NOT NULL,
  `introduction` text NOT NULL,
  `title1` varchar(255) NOT NULL,
  `title2` varchar(350) NOT NULL,
  `title3` varchar(255) NOT NULL,
  `title4` varchar(255) NOT NULL,
  `title5` varchar(255) NOT NULL,
  `title6` varchar(255) NOT NULL,
  `title7` varchar(200) NOT NULL,
  `title8` varchar(200) NOT NULL,
  `title9` varchar(200) NOT NULL,
  `title10` varchar(300) NOT NULL,
  `title11` varchar(300) NOT NULL,
  `title12` varchar(300) NOT NULL,
  `desc1` text NOT NULL,
  `desc2` text NOT NULL,
  `desc3` text NOT NULL,
  `desc4` text NOT NULL,
  `desc5` text NOT NULL,
  `desc6` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `home_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_home_about`
--

INSERT INTO `tbl_home_about` (`id`, `introduction`, `title1`, `title2`, `title3`, `title4`, `title5`, `title6`, `title7`, `title8`, `title9`, `title10`, `title11`, `title12`, `desc1`, `desc2`, `desc3`, `desc4`, `desc5`, `desc6`, `image`, `home_image`) VALUES
(1, '', '250+', '10+', '24+', '232+', '', '', '', '', '', 'High Quality Cutting Tools Machine Under One Roof', '#', '', '', '<p>Varenyam Machine Tools Pvt. Ltd. is started with Goal of Supplying Quality Material with Economical Rates to Manufacturers and End Users in India. We involved in the Marketing &amp; Sales of tools for Metal Cutting and Metal forming industries. Varenyam Machine Tools Pvt Ltd - is started with Goal of Supplying Quality Material with Economical Rates to Manufacturers and End Users in India.&nbsp;Our motto is to provide the Best Quality Products and to continue as a leading manufacturer and supplier of these products in the global market.</p>\r\n', '', '', '', '', '', '1712738283_one.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `A_name` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `home_status` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `name`, `A_name`, `time`, `home_status`, `image`, `date`, `desc`) VALUES
(17, 'Professor Albert joint research on mobile money in Tanzania', 'JOHN SMITH', 'JUNE 6, 2016', 'Home', '30784.jpg', '2020-10-01 08:58:40', '<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>\r\n'),
(18, 'A Global MBA for the next generation of business leaders', 'BYJOHN SMITH', 'JUNE 6, 2016', 'Remove', '7070.jpg', '2020-10-01 08:57:38', ''),
(19, 'Professor Tom comments on voluntary recalls by snack brands', 'John Smith', 'JUNE 6, 2016', '', '10316.jpg', '2020-10-01 04:15:41', ''),
(20, 'Professor Tom comments on voluntary recalls by snack brands', 'John Smith', 'JUNE 6, 2016', '', '5759.jpg', '2020-10-01 04:16:20', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news_letter`
--

CREATE TABLE `tbl_news_letter` (
  `news_letter_id` int(11) NOT NULL,
  `news_letter_email` varchar(100) NOT NULL,
  `news_letter_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_news_letter`
--

INSERT INTO `tbl_news_letter` (`news_letter_id`, `news_letter_email`, `news_letter_date`) VALUES
(35, 'as271070@gmail.com', '2021-01-14 10:43:51'),
(36, 'as243443@gmail.ccc', '2021-01-27 11:19:53'),
(37, 'as27187@jkhjdks.dsfsd', '2021-01-29 08:20:13'),
(38, 'as113456@gmail.com', '2021-01-29 08:23:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_our_mission`
--

CREATE TABLE `tbl_our_mission` (
  `id` int(11) NOT NULL,
  `our_mission` text NOT NULL,
  `our_mission_title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_our_mission`
--

INSERT INTO `tbl_our_mission` (`id`, `our_mission`, `our_mission_title`) VALUES
(1, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'hello i am testing here this ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pro_id` int(11) NOT NULL,
  `pro_category` varchar(255) NOT NULL,
  `pro_name` text NOT NULL,
  `pro_type` varchar(200) NOT NULL,
  `pro_offer` varchar(100) NOT NULL,
  `pro_price` varchar(100) NOT NULL,
  `pro_Pack` varchar(300) NOT NULL,
  `pro_varient` text NOT NULL,
  `pro_type1` varchar(300) NOT NULL,
  `pro_color` varchar(300) NOT NULL,
  `pro_desc` text NOT NULL,
  `pro_brf` text NOT NULL,
  `pro_more` text NOT NULL,
  `pro_image` varchar(255) NOT NULL,
  `pro_image2` varchar(300) NOT NULL DEFAULT 'placeholder.png',
  `status` varchar(11) DEFAULT NULL,
  `status_gal` varchar(10) DEFAULT NULL,
  `pro_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `pro_category`, `pro_name`, `pro_type`, `pro_offer`, `pro_price`, `pro_Pack`, `pro_varient`, `pro_type1`, `pro_color`, `pro_desc`, `pro_brf`, `pro_more`, `pro_image`, `pro_image2`, `status`, `status_gal`, `pro_date`) VALUES
(1, '1', 'Translation And Interpretation', '', '', '', '', '<p>At Marwan Global, we understand the power of language to bridge gaps, foster connections, and drive success in an increasingly interconnected world. With a commitment to excellence and precision, we offer a comprehensive range of translation and interpretation services tailored to meet the diverse needs of our clients. Our team consists of highly skilled linguists, proficient in a multitude of languages and specialized in various fields, ensuring accurate and culturally sensitive translations across industries such as legal, medical, technical, marketing, and more. Whether you require document translation, website localization, or simultaneous interpretation for conferences and meetings, we have the expertise to deliver exceptional results.</p>\r\n', '', '', '<h3>Our Services, Our Languages</h3>\r\n\r\n<p>Marwan Global is a full-service translation and localization company. We work in over 215 languages, including all the major European, Asian, American, African and Middle Eastern languages.</p>\r\n\r\n<p>Marwan Global&rsquo;s industry-leading Quality Control standards and our dedication to precision and accuracy are some of the reasons why over 1500 Global Companies trust us to translate their most critical, challenging, and sensitive information.</p>\r\n\r\n<p>We offer a range of translation services which include but are not limited to document translation, desktop translation, localisation services for websites, software, or marketing materials, and certified translations.</p>\r\n\r\n<ul>\r\n	<li><strong>Technical Translation Services :&nbsp;</strong>Seamlessly bridge language barriers in technical documents with precision and clarity, ensuring your global audience receives accurate information.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>Document Translation Services :&nbsp;</strong>Trust our expert linguists to translate your documents with meticulous attention to detail, preserving the integrity and meaning of your content across languages.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>Medical Translation Services :&nbsp;</strong>Ensure accurate communication in medical documents and patient information across languages, maintaining the highest standards of precision and confidentiality.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>Legal Translation Services :&nbsp;</strong>Navigate legal complexities confidently with our precise translation services, preserving the integrity and nuances of legal documents across languages.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>Marketing Translation Services :&nbsp;</strong>Capture the essence of your brand&#39;s message across cultures with our culturally sensitive and compelling translation solutions, driving engagement and growth in global markets.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>Transcription Services :&nbsp;</strong>Transform audio and video content into accurate, text-based records swiftly and efficiently, leveraging our expertise in transcription for various industries and languages.</li>\r\n</ul>\r\n', '', '<h3>Types of Documents We Translate</h3>\r\n\r\n<p>At Marwan Global we specialize in translating all types of documents for our clients. Examples of the types of materials we translate are:</p>\r\n\r\n<ul>\r\n	<li>Engineering specifications</li>\r\n	<li>Bill of Materials</li>\r\n	<li>CAD Drawings</li>\r\n	<li>Catalogs</li>\r\n	<li>E-Learning</li>\r\n	<li>Installation Manuals</li>\r\n	<li>Labels</li>\r\n	<li>Marketing Materials</li>\r\n	<li>MSDS and Data Sheets</li>\r\n	<li>Operating Manuals</li>\r\n	<li>Patents</li>\r\n	<li>Presentations</li>\r\n	<li>RFP Responses</li>\r\n	<li>Safety Manuals</li>\r\n	<li>Software and Hardware UI</li>\r\n	<li>Training Materials</li>\r\n	<li>Technical Proposals</li>\r\n	<li>User Guides</li>\r\n	<li>Websites</li>\r\n	<li>Research &amp; Development</li>\r\n	<li>Clinical Research</li>\r\n</ul>\r\n', '992.jpg', 'placeholder.png', NULL, NULL, '2024-04-26 05:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_image`
--

CREATE TABLE `tbl_product_image` (
  `gal_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `gal_image` varchar(255) NOT NULL,
  `gal_name` varchar(300) NOT NULL,
  `gal_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_product_image`
--

INSERT INTO `tbl_product_image` (`gal_id`, `pro_id`, `gal_image`, `gal_name`, `gal_date`) VALUES
(118, 1, '1714113365_author-img.jpg', 'ertg', '2024-04-26 06:36:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pro_gallery`
--

CREATE TABLE `tbl_pro_gallery` (
  `gal_id` int(11) NOT NULL,
  `pro_id` varchar(50) NOT NULL,
  `gal_name` varchar(255) NOT NULL,
  `gal_category` varchar(255) NOT NULL,
  `gal_image` varchar(255) NOT NULL,
  `gal_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_pro_gallery`
--

INSERT INTO `tbl_pro_gallery` (`gal_id`, `pro_id`, `gal_name`, `gal_category`, `gal_image`, `gal_date`) VALUES
(68, '18', 'Fire Bell', 'Fire Alarm', '19371.jpg', '2020-08-20 14:55:04'),
(71, '18', 'MCP Fire Flarm', 'Fire Alarm', '30883.jpg', '2020-08-20 14:55:52'),
(73, '18', 'Cnventional System', 'Fire Alarm', '14240.jpg', '2020-08-20 14:56:43'),
(74, '18', 'Addressable System', 'Fire Alarm', '32161.jpg', '2020-08-20 14:57:28'),
(75, '18', 'Public Address System', 'Fire Alarm', '23782.jpg', '2020-08-20 14:58:00'),
(76, '18', 'Smoke Detector', 'Fire Alarm', '31743.jpg', '2020-08-20 14:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services_desc`
--

CREATE TABLE `tbl_services_desc` (
  `id` int(11) NOT NULL,
  `services_desc` text NOT NULL,
  `services_title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_services_desc`
--

INSERT INTO `tbl_services_desc` (`id`, `services_desc`, `services_title`) VALUES
(1, '<p>Established in 1990, Shaka Electrical India, has emerged today as a leading company in the field of facility management services like Electrifying highways, Fly-overs, walkways&nbsp;</p>\r\n\r\n<p>Established in 1990, Shaka Electrical India, has emerged today as a leading company in the field of facility management services like Electrifying highways, Fly-overs, walkways&nbsp;</p>\r\n\r\n<p>Established in 1990, Shaka Electrical India, has emerged today as a leading company in the field of facility management services like Electrifying highways, Fly-overs, walkways&nbsp;</p>\r\n\r\n<p>Established in 1990, Shaka Electrical India, has emerged today as a leading company in the field of facility management services like Electrifying highways, Fly-overs, walkways&nbsp;</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_desc`
--

CREATE TABLE `tbl_service_desc` (
  `ser` int(11) NOT NULL,
  `ser_category` varchar(255) NOT NULL,
  `ser_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_service_desc`
--

INSERT INTO `tbl_service_desc` (`ser`, `ser_category`, `ser_desc`) VALUES
(5, 'Cut to Length', '<p>Precision cutting to any length desired is our specialty. Straight off our tube mills we run a Haven 873 cutoff machine, which gives us the flexibility and precision to bring you top quality tubing exactly to specification.</p>\r\n'),
(6, 'Special Packaging', '<p>Sometimes special circumstances require special packaging. RTF can package your steel tubing order to meet your specifications.</p>\r\n'),
(7, 'Regional Delivery', '<p>Ask your Steel Tube Inc. Sales representative about our in- house delivery service. We run our own fleet of trucks for deliveries throughout India.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_media`
--

CREATE TABLE `tbl_social_media` (
  `social_id` int(11) NOT NULL,
  `fb_add` varchar(220) NOT NULL,
  `twitter_add` varchar(220) NOT NULL,
  `google_add` varchar(220) NOT NULL,
  `linkdn_add` varchar(220) NOT NULL,
  `sovial_active` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_social_media`
--

INSERT INTO `tbl_social_media` (`social_id`, `fb_add`, `twitter_add`, `google_add`, `linkdn_add`, `sovial_active`) VALUES
(1, '#', '#', '#', '#', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `testi_id` int(11) NOT NULL,
  `testi_name` varchar(150) NOT NULL,
  `testi_loction` varchar(200) NOT NULL,
  `testi_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`testi_id`, `testi_name`, `testi_loction`, `testi_desc`) VALUES
(2, 'Promila Koshik', '', '<p>&quot;Super Power manufactures a wide range of products that are very good in quality.&nbsp;It is very convenient for hospital to get everything under one stop and at a very affordable price.&quot;</p>\r\n'),
(6, 'Vinay Kumar', '', '<p>&quot;We had to be sure i got the right compressed air supplier and system to meet the&nbsp; exacting requirements of our high tech production process.&quot;</p>\r\n'),
(15, 'Mayank Sharma', '', '<p>&quot;I am very impressed with the immediate lift in efficiency, and cost savings day in and day out!&nbsp;I would highly recommend them to others.&quot;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web_logo`
--

CREATE TABLE `tbl_web_logo` (
  `logo_id` int(11) NOT NULL,
  `logo_image_name` varchar(255) NOT NULL,
  `new_and_update` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_web_logo`
--

INSERT INTO `tbl_web_logo` (`logo_id`, `logo_image_name`, `new_and_update`) VALUES
(9, '1708931342_1635481727_main-logo.png', '1611313019_Catalog.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_why_us`
--

CREATE TABLE `tbl_why_us` (
  `why_id` int(11) NOT NULL,
  `why_us_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_why_us`
--

INSERT INTO `tbl_why_us` (`why_id`, `why_us_description`) VALUES
(1, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `translationservices`
--

CREATE TABLE `translationservices` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `paragraph` text DEFAULT NULL,
  `image_src` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_logo`
--
ALTER TABLE `client_logo`
  ADD PRIMARY KEY (`client_logo_id`);

--
-- Indexes for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about_us_features`
--
ALTER TABLE `tbl_about_us_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_add_list`
--
ALTER TABLE `tbl_add_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `tbl_best_sell`
--
ALTER TABLE `tbl_best_sell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_category_img`
--
ALTER TABLE `tbl_category_img`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_footer_logo`
--
ALTER TABLE `tbl_footer_logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`gal_id`);

--
-- Indexes for table `tbl_home_about`
--
ALTER TABLE `tbl_home_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news_letter`
--
ALTER TABLE `tbl_news_letter`
  ADD PRIMARY KEY (`news_letter_id`);

--
-- Indexes for table `tbl_our_mission`
--
ALTER TABLE `tbl_our_mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tbl_product_image`
--
ALTER TABLE `tbl_product_image`
  ADD PRIMARY KEY (`gal_id`);

--
-- Indexes for table `tbl_pro_gallery`
--
ALTER TABLE `tbl_pro_gallery`
  ADD PRIMARY KEY (`gal_id`);

--
-- Indexes for table `tbl_services_desc`
--
ALTER TABLE `tbl_services_desc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service_desc`
--
ALTER TABLE `tbl_service_desc`
  ADD PRIMARY KEY (`ser`);

--
-- Indexes for table `tbl_social_media`
--
ALTER TABLE `tbl_social_media`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`testi_id`);

--
-- Indexes for table `tbl_web_logo`
--
ALTER TABLE `tbl_web_logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `tbl_why_us`
--
ALTER TABLE `tbl_why_us`
  ADD PRIMARY KEY (`why_id`);

--
-- Indexes for table `translationservices`
--
ALTER TABLE `translationservices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_logo`
--
ALTER TABLE `client_logo`
  MODIFY `client_logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `tbl_about_us_features`
--
ALTER TABLE `tbl_about_us_features`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_add_list`
--
ALTER TABLE `tbl_add_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `tbl_best_sell`
--
ALTER TABLE `tbl_best_sell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category_img`
--
ALTER TABLE `tbl_category_img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_footer_logo`
--
ALTER TABLE `tbl_footer_logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `gal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `tbl_home_about`
--
ALTER TABLE `tbl_home_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_news_letter`
--
ALTER TABLE `tbl_news_letter`
  MODIFY `news_letter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_our_mission`
--
ALTER TABLE `tbl_our_mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_product_image`
--
ALTER TABLE `tbl_product_image`
  MODIFY `gal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tbl_pro_gallery`
--
ALTER TABLE `tbl_pro_gallery`
  MODIFY `gal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tbl_services_desc`
--
ALTER TABLE `tbl_services_desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_service_desc`
--
ALTER TABLE `tbl_service_desc`
  MODIFY `ser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_social_media`
--
ALTER TABLE `tbl_social_media`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `testi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_web_logo`
--
ALTER TABLE `tbl_web_logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_why_us`
--
ALTER TABLE `tbl_why_us`
  MODIFY `why_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `translationservices`
--
ALTER TABLE `translationservices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
