-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 15 fév. 2022 à 10:23
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `films`
--

-- --------------------------------------------------------

--
-- Structure de la table `commantaire`
--

DROP TABLE IF EXISTS `commantaire`;
CREATE TABLE IF NOT EXISTS `commantaire` (
  `id_commantaire` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_p` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_commantaire`),
  KEY `id_p` (`id_p`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `commantaire`
--

INSERT INTO `commantaire` (`id_commantaire`, `message`, `id_p`) VALUES
(1, 'Lorem ipsum doliassumenda ', 1),
(2, 'Lorem ipsum doliassumenda', 2),
(3, 'Lorem ipsum doliassumenda ', 1),
(4, 'Lorem ipsum doliassumenda', 2),
(5, 'Lorem ipsum doliassumenda ', 1),
(6, 'Lorem ipsum doliassumenda', 2);

-- --------------------------------------------------------

--
-- Structure de la table `poste`
--

DROP TABLE IF EXISTS `poste`;
CREATE TABLE IF NOT EXISTS `poste` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `description` varchar(10000) COLLATE utf8_bin DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Catégorie` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_p`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `poste`
--

INSERT INTO `poste` (`id_p`, `titre`, `description`, `photo`, `Catégorie`, `id_utilisateur`) VALUES
(1, 'Brack ', 'Lorem ipsum doliassumenda pariatur voluptatem neque alias!', 'imageVoiture/image/1000.jpg', 'romantic', 2),
(2, 'Brack ', 'Lorem ipsum doliassumenda pariatur voluptatem neque alias!', 'imageVoiture/image/1000.jpg', 'romantic', 1),
(3, 'Brack ', 'Lorem ipsum doliassumenda pariatur voluptatem neque alias!', 'imageVoiture/image/1000.jpg', 'romantic', 3),
(4, 'Brack ', 'Lorem ipsum doliassumenda pariatur voluptatem neque alias!', 'imageVoiture/image/1000.jpg', 'romantic', 1),
(5, 'Brack ', 'Lorem ipsum doliassumenda pariatur voluptatem neque alias!', 'imageVoiture/image/1000.jpg', 'romantic', 4),
(6, 'Brack ', 'Lorem ipsum doliassumenda pariatur voluptatem neque alias!', 'imageVoiture/image/1000.jpg', 'romantic', 1),
(7, 'Brack ', 'Lorem ipsum doliassumenda pariatur voluptatem neque alias!', 'imageVoiture/image/1000.jpg', 'romantic', 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `pass` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `login`, `email`, `pass`) VALUES
(1, 'kadi kamal ', 'kamal@gmail.com', '123456'),
(2, 'lambaraa abdellah ', 'lambaraa@gmail.com', '123456'),
(3, 'ouidane said ', 'ouidane@gmail.com', '123456'),
(4, 'ghazali hamza ', 'ghazali@gmail.com', '123456'),
(5, 'alami hicham ', 'alami@gmail.com', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
