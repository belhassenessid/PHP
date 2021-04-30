-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 07:00 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`) VALUES
(1, 'product 1', '../images/prodHomme1.jpg', 10),
(2, 'product 2', '../images/prodHomme2.jpg', 20),
(4, 'PRODUCT 3', '../images/bershka1.jpg', 80),
(5, 'PRODUCT 4', '../images/bershka2.jpg', 76),
(9, 'PRODUCT 5', '..\\images\\blanc.jpg', 89),
(10, 'PRODUCT 6', '..\\images\\combi.jpg', 180),
(11, 'PRODUCT 7', '..\\images\\costume.jpg', 210),
(13, 'PRODUCT 8', '..\\images\\bbb.jpg', 68),
(14, 'PRODUCT 9', '..\\images\\aaa.jpg', 120),
(15, 'PRODUCT 10', '..\\images\\cc.jpg', 54),
(16, 'PRODUCT 11', '..\\images\\hmgoepprod.jpg', 80),
(17, 'PRODUCT 12', '..\\images\\homme.jpg', 120),
(18, 'PRODUCT 13', '..\\images\\veste.jpg', 80),
(19, 'PRODUCT 14', '..\\images\\robe3.jpg', 160),
(20, 'PRODUCT 15', '..\\images\\ii.jpg', 50),
(21, 'PRODUCT 16', '..\\images\\images (4).jpg', 47),
(22, 'PRODUCT 17', '..\\images\\images (5).jpg', 64),
(23, 'PRODUCT 18', '..\\images\\images (6).jpg', 85),
(24, 'PRODUCT 19', '..\\images\\images (7).jpg', 90),
(25, 'PRODUCT 19', '..\\images\\images (8).jpg', 35),
(26, 'PRODUCT 20', '..\\images\\images (9).jpg', 34),
(27, 'PRODUCT 21', '..\\images\\images (10).jpg', 67),
(28, 'PRODUCT 22', '..\\images\\images (11).jpg', 180),
(29, 'PRODUCT 23', '..\\images\\images.jpg', 160),
(30, 'PRODUCT 24', '..\\images\\jaune.jpeg', 210),
(31, 'PRODUCT 25', '..\\images\\jupe1.jpg', 68),
(32, 'PRODUCT 26', '..\\images\\jupe2.jpg', 62),
(33, 'PRODUCT 27', '..\\images\\jupe4.jpg', 54),
(34, 'PRODUCT 28', '..\\images\\jupe5.jpg', 57),
(35, 'PRODUCT 29', '..\\images\\jupe6.jpg', 67),
(36, 'PRODUCT 30', '..\\images\\jupe14.png', 160),
(37, 'PRODUCT 31', '..\\images\\kids1.jpg', 87),
(38, 'PRODUCT 32', '..\\images\\kids2.jpg', 90),
(39, 'PRODUCT 33', '..\\images\\kids4.jpg', 86),
(40, 'PRODUCT 34', '..\\images\\kids5.jpg', 65),
(41, 'PRODUCT 35', '..\\images\\kids6.jpg', 90),
(42, 'PRODUCT 36', '..\\images\\lala.jpg', 87),
(43, 'PRODUCT 37', '..\\images\\nikerose.png', 189),
(44, 'PRODUCT 38', '..\\images\\noir.jpg', 39),
(45, 'PRODUCT 39', '..\\images\\mauve.jpg', 56),
(46, 'PRODUCT 40', '..\\images\\nikebleu.png', 280),
(47, 'PRODUCT 41', '..\\images\\nikegris.png', 54),
(48, 'PRODUCT 42', '..\\images\\noiretblanc.jpg', 38),
(49, 'PRODUCT 43', '..\\images\\orange.png', 43),
(50, 'PRODUCT 44', '..\\images\\pantallon.jpg', 98),
(51, 'PRODUCT 45', '..\\images\\pantalon-garden.jpg', 65),
(52, 'PRODUCT 46', '..\\images\\pantalon.jpg', 120),
(53, 'PRODUCT 47', '..\\images\\pantalon4.jpg', 80),
(54, 'PRODUCT 48', '..\\images\\pantalon8.jpg', 150),
(55, 'PRODUCT 49', '..\\images\\pantalon33.jpg', 130),
(56, 'PRODUCT 50', '..\\images\\pull.jpg', 70),
(57, 'PRODUCT 51', '..\\images\\pull1.jpeg', 32),
(58, 'PRODUCT 52', '..\\images\\pull2.jpeg', 45),
(59, 'PRODUCT 53', '..\\images\\pull2.jpg', 43),
(60, 'PRODUCT 54', '..\\images\\robe1.jpg', 140),
(61, 'PRODUCT 55', '..\\images\\robe2.jpg', 70),
(62, 'PRODUCT 56', '..\\images\\robe7.jpg', 210),
(63, 'PRODUCT 57', '..\\images\\sport5.png', 67),
(64, 'PRODUCT 58', '..\\images\\robe4.jpg', 156),
(65, 'PRODUCT 59', '..\\images\\robe22.jpg', 156);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
