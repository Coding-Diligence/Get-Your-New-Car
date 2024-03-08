-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 08 mars 2024 à 13:54
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `car_management`
--

-- --------------------------------------------------------

--
-- Structure de la table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `color` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kilometrage` int DEFAULT NULL,
  `state` enum('new','used','damaged') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cars`
--

INSERT INTO `cars` (`id`, `name`, `price`, `color`, `kilometrage`, `state`, `image_path`) VALUES
(20, 'Honda Type R 1998–2001', '29000.00', 'white', 1000, 'new', 'assets/voiture5.jpg'),
(19, 'Mitsubishi', '22000.00', 'grey', 148600, 'used', 'assets/voiture4.jpg'),
(18, 'Dirt Car', '2500.00', 'blue', 17000, 'used', 'assets/voiture3.jpg'),
(17, 'Gtrr', '18000.00', 'white', 15000, 'used', 'assets/voiture2.jpg'),
(16, 'Subaru', '9000.00', 'blue', 3000, 'new', 'assets/voiture1.jpg'),
(21, 'Mitsubishi Evo', '1700.00', 'white', 0, 'new', 'assets/voiture6.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime DEFAULT CURRENT_TIMESTAMP,
  `profileImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `sender`, `text`, `time`, `profileImage`) VALUES
(1, 'Bot', 'Hi, How can I help you today?', '2024-03-08 13:47:14', 'assets/1.jpg'),
(2, 'user', 'Coucou', '2024-03-08 13:47:14', 'assets/2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `password`, `role`) VALUES
(7, 'admin', 'admin', 'admin@admin.com', '$2y$10$wim0kgHLGV5aooccwMIA4OEZRDGtgwcvTn0sS7EWgbmP1WWEu74jW', 'admin'),
(8, 'user', 'user', 'user@user.com', '$2y$10$Pbr3Nl7nY.OVnfVZe3EOceKZB2luNEcRxuDhW.i3tC5JCHZS55GkW', 'user'),
(10, 'admin2', 'admin2', 'admin2@admin.com', '$2y$10$PO1mw5AsRhPbcBK.8cDXBO.jEQvfbKW9Hfw.MlbkOmSJYc49bEaeK', 'admin'),
(11, 'Utilisateur', 'User', 'user@utilisateur.com', '$2y$10$r9G2OUjuTWfCe9tw6yIT7O67Ixbcowx9KEXv68RPtwIowKhoUH86u', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
