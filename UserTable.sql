SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE usertable (
  name varchar(255) NOT NULL,
  password varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO usertable (name, password) VALUES
('belha', 'essid'),
('omar', 'adouli'),
('iheb', 'etteyeb'),
('rahma', 'benhassen');

ALTER TABLE usertable
  ADD PRIMARY KEY (name);
COMMIT;


----------------------------------------------------------------
table panier 


 Structure de la table `panier`


CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `name`, `image`, `price`, `quantite`) VALUES
(1, 'product 1', 'img1.jpg', 10, 1),
(3, 'Jean', 'img3.jpg', 35, 1);
COMMIT;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`) VALUES
(1, 'product 1', 'img1.jpg', 10),
(2, 'product 2', 'img2.jpg', 20),
(3, 'Jean', 'img3.jpg', 35);
COMMIT;
