-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 26, 2024 at 08:57 AM
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
-- Database: `u496524825_taza`
--

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `dec` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `packing` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`id`, `name`, `dec`, `image`, `packing`) VALUES
(1, 'Swad Papad', 'We are engaged in manufacturing and supplying of Swad Papad. The Swad Papad manufactured by us is widely acclaimed by the customers for its rich taste and high self life. These papads are crispy and processed under hygienic conditions. Swad Papad is available in different categories.', 'img/product/2.jpg', '100 gm, 200gm, 500 gm , 800gm and 1Kg'),
(2, 'Priya Papad', 'The superior quality Priya Papad prepared by us is processed using high grade ingredients.The Priya Papad we Supply offers a delicious taste and it is very crispy and crunchy, Besides Priya Papad is available in attractive packaging of 800 gm only.Priya Papad is available in different categories.\r\n\r\nPriya (8\" Masala)\r\nWe manufacture Priya (8\" Masala). It is manufactured using finest quality urad daal(90%) , flour, edible vegetable oils, iodized salt, golki marich as a spices, khar, best quality of hing etc.\r\n\r\nPriya (8 Plain)\r\nWe manufacture Priya (8 Plain). This papad is manufactured using finest quality ingredients like urad daal (95%), flour, edible vegetable oils, iodized salt, spices, khar, best quality of hing etc.', 'img/product/priya.jpg', '800gm'),
(3, 'Shreyashree Papad', 'We are manufacturing “shreyashree” Papad both Plain and Masala, its size is 6.7” and both Masala and Plain is prepared by using best quality of ingredients such as Urad daal, Moong daal, Moth, Edible vegetable oils, Iodised salt, Black Pepper as spice, khar, Asofoetida etc.it is rolled by vegetable oil and we make it by natural process.we provide it to our customer in economic price.', 'img/product/3.jpg', '200/gms'),
(4, 'Swadist Papad', 'Enlisted with the prominent names, we have a well-maintained set in Howrah(India) and cater to different markets. We pack our products in high-grade packing items that are sturdy as well. Moreover, we provide product details on it as well.\r\n\r\n\r\n\r\nSwadist Papad (8’’ MASALA& PLAIN):- We are manufacturing Swadist8” Masala and Plain ,which is prepared using best quality of ingredients such as Urad daal,Moong daal,Moth,Edible vegetable oils,Iodised salt,Black Pepper as spice, khar,Asofoetida etc.', 'img/product/swadist.jpg', '200gms , 500gms ,800gms ,1kg'),
(5, 'Swad Appalam', 'We are engaged in manufacturing and supplying of Swad Appalam Papad. The Swad Appalam Papad manufactured by us is widely acclaimed by the customers for its rich taste and high self life. These papads are crispy and processed under hygienic conditions. Swad Appalam is packed on 90gram Only.', 'img/product/swad app.jpg', '0'),
(6, 'priya lata papad', 'The superior quality PriyaLata Papad prepared by us is processed using high grade ingredients Such as best quality of Urad dal,Moong dal ,Asafoetida, Black Pepper, etc. The Priyalata Papad we manufacture is a PURE in quality and processed under hygienic conditions.it is delicious in taste,Crispy and Crunchy.Besides, Priyalata Papad is available in attractive packaging of 100 gm, 200 gm,500 gm & 1 Kg.  PriyaLata (3\"Masala and Plain) We manufacture Priyalata Papad 3\" Masala and Plain. It is manufactured using finest quality of urad daal, Moong dall, edible vegetable oils, iodized salt,Asafoetida,Black Pepper as a spices, Papad khar etc.its Available in 100gm Packets only.  PriyaLata (7\"Masala and Plain) We manufacture Priyalata 7\" Masala and Plain Papad ,.This papad is manufactured using finest quality ingredients like urad dal,Moong dal, edible vegetable oils, iodized salt, spices, sazi khar and best quality of hing etc.Its packing is available in 200gm only.  PriyaLata (9\" Masala and Plain) We manufacture Priyalata Papad in 9\" sizes Masala and Plain papad. It is manufactured using finest quality of urad daal, Moong dall, edible vegetable oils, iodized salt,Asafoetida,Black Pepper as a spices, Papad khar etc.its Packet is available in 500gm and 1 kg also', 'img/product/4.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
