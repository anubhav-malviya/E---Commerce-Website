-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2022 at 02:04 AM
-- Server version: 8.0.28
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgps`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `item_id` int NOT NULL,
  `item_brand` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `item_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'none',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_type`) VALUES
(1, 'Doms', 'DOMS Champions Kit, Multicolour (7760)', 99.00, './img/products/n1.png', 'new_arrival'),
(2, 'Casio', 'CASIO MJ-12D-BK Desktop Basic Calculator  (12 Digit)', 415.00, './img/products/n2.png', 'new_arrival'),
(3, 'SPS', 'Swizz Leather File Folder Executive Document Holder with 20 Leafs  (Set Of 1, Brown)', 349.00, './img/products/n3.png', 'new_arrival'),
(4, 'Kebica', 'Kebica 9 Compartments Metal Mesh Set-1 P With Drawer for Your Home & Office Desk Supplies  (Black)', 449.00, './img/products/n4.png', 'new_arrival'),
(5, 'SPS', 'Leather Maroon Wallet - Card Holder - ATM & Debit Card Holder 20 Card Holder Set of 1)', 299.00, './img/products/n5.png', 'new_arrival'),
(6, 'Navneet', 'Navneet Youva Journal Diary | Single Line | A4 Size 21 cm x 29.7 cm | 160 Pages', 199.00, './img/products/n6.png', 'new_arrival'),
(7, 'SPS', 'Whiteboards One Side Glossy and Reverse Side Green Chalk Board Surface 1.5*2 feet', 449.00, './img/products/n7.png', 'new_arrival'),
(8, 'cardingon', 'Wooden alphabet Keychain Pack of 1 Brown Color ', 99.00, './img/products/n8.png', 'new_arrival'),
(9, 'Classmate', 'Classmate Octane Colour Burst-Multicolour Gel Pens (Pack of 10)', 149.00, './img/products/f1.png', 'featured_product'),
(10, 'Munix', 'Munix GL 2170 Scissors  (Set of 1, Blue)', 129.00, './img/products/f2.png', 'featured_product'),
(11, 'Hauser', 'HAUSER XO Ball Pen  (Pack of 50, Blue, Balck & Red)', 430.00, './img/products/f3.png', 'featured_product'),
(12, 'Pilot', 'Pilot V5 (Pack of 3) Liquid Ink Rollerball Pen  (Pack of 3, Blue, Black)', 149.00, './img/products/f4.png', 'featured_product'),
(13, 'Classmate', 'Classmate Pulse Regular Notebook Single Line 300 Pages  (Multicolor)', 139.00, './img/products/f5.png', 'featured_product'),
(14, 'Navneet', 'NAVNEET Youva Soft Bound Long Book A4 Notebook 172 Pages ', 175.00, './img/products/f6.png', 'featured_product'),
(15, 'Luxor', 'LUXOR Chisel Tip Highlighter  (Set of 5, Assorted)', 109.00, './img/products/f7.png', 'featured_product'),
(16, 'Flair', 'FLAIR Creative Gem Pensil Set of 50', 450.00, './img/products/f8.png', 'featured_product');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
