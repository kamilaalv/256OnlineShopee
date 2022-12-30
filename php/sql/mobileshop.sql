-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 23, 2022 at 03:27 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobileshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(70) DEFAULT NULL,
  `fname` varchar(25) DEFAULT NULL,
  `lname` varchar(25) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `verified` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`account_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `email`, `fname`, `lname`, `password`, `verified`) VALUES
(1, 'abdeendunz@gmail.com', 'Elon', 'Musk', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(70) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `rating` int(1) DEFAULT NULL,
  `replacement` int(3) DEFAULT NULL,
  `tuition_delivered` char(1) DEFAULT NULL,
  `warranty` int(2) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `product_placement` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `pname`, `price`, `rating`, `replacement`, `tuition_delivered`, `warranty`, `description`, `product_placement`) VALUES
(1, 'Samsung Galaxy 10', 152, 4, 10, 'Y', 1, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?', 'On Sale'),
(2, 'Redmi Note 7', 110, 3, NULL, NULL, NULL, NULL, 'On Sale');

-- --------------------------------------------------------
--------------Table structure for table `product`

DROP TABLE IF EXISTS `product2`;
CREATE TABLE IF NOT EXISTS `product2` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(70) DEFAULT NULL,
  `company` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `price` float DEFAULT NULL,
  `rating` int(1) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `on_sale` int(1) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `product2`
--

INSERT INTO `product2` (`product_id`, `pname`, `company`, `price`, `rating`, `description`, `on_sale`, `image`) VALUES
(1, 'Samsung Galaxy S6 edge', 'Samsung', 156, 4, 'perfect', 1, '1.png'),
(2, 'Redmi Note 7 Pro', 'Redmi', 120, 2, 'good', 1, '2.png'),
(3, 'Redmi Note 7 Pro', 'Redmi', 150, 4, 'perfect', 1, '3.png'),
(4, 'Samsung Galaxy S7 ', 'Samsung', 110, 2, 'not bad', 1, '12.png'),
(5, 'iPhone 14 Pro Max', 'Apple', 400, 5, 'excellent', 0, '13.png'),
(6, 'iPhone 14 Pro', 'Apple', 450, 5, 'excellent', 0, '15.png'),
(7, 'iPhone 6S Plus', 'Apple', 200, 4, 'very good', 1, '15.png'),
(8, 'Samsung S22 Ultra', 'Samsung', 500, 4, 'perfect', 0, '8.png'),
(9, 'Redmi Beauty X9', 'Redmi', 600, 3, 'not bad', 1, '5.png'),
(10, 'Samsung Galaxy A10', 'Samsung', 230, 4, 'good camera', 1, '11.png');
COMMIT;
------------------------------------------------------------------

--
-- Table structure for table `product_color`
--

DROP TABLE IF EXISTS `product_color`;
CREATE TABLE IF NOT EXISTS `product_color` (
  `pid` int(5) DEFAULT NULL,
  `color_code` varchar(6) DEFAULT NULL,
  KEY `product_color_fk` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

DROP TABLE IF EXISTS `product_size`;
CREATE TABLE IF NOT EXISTS `product_size` (
  `pid` int(5) DEFAULT NULL,
  `size` int(3) DEFAULT NULL,
  KEY `product_size_fk` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

DROP TABLE IF EXISTS `user_cart`;
CREATE TABLE IF NOT EXISTS `user_cart` (
  `acc_id` int(5) DEFAULT NULL,
  `prod_id` int(5) DEFAULT NULL,
  KEY `user_cart_fk1` (`acc_id`),
  KEY `user_cart_fk2` (`prod_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_wishlist`
--

DROP TABLE IF EXISTS `user_wishlist`;
CREATE TABLE IF NOT EXISTS `user_wishlist` (
  `aid` int(5) DEFAULT NULL,
  `pid` int(5) DEFAULT NULL,
  KEY `user_wishlist_fk1` (`aid`),
  KEY `user_wishlist_fk2` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
