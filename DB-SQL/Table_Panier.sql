SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Table structure for table `panier`

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);
COMMIT;
