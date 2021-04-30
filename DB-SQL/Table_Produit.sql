SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Table structure for table `product`

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `product` (`id`, `name`, `image`, `price`) VALUES
(1, 'product 1', '../images/prodHomme1.jpg', 10),
(2, 'product 2', '../images/prodHomme2.jpg', 20),
(4, 'PRODUCT 3', '../images/bershka1.jpg', 80),
(5, 'PRODUCT 4', '../images/bershka2.jpg', 76),
COMMIT;
