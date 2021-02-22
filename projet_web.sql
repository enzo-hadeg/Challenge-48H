-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 22 fév. 2021 à 11:35
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `objet_annonce`
--

CREATE TABLE `objet_annonce` (
  `id` int(4) NOT NULL,
  `titre` text NOT NULL,
  `prix` text NOT NULL,
  `description` text NOT NULL,
  `date` text NOT NULL,
  `statut` text NOT NULL,
  `image` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `objet_annonce`
--

INSERT INTO `objet_annonce` (`id`, `titre`, `prix`, `description`, `date`, `statut`, `image`) VALUES
(8, 'Canape convertible lit rapide jess', '1300', 'Un canap&eacute; premier prix id&eacute;al pour des couchages occasionnels dans votre r&eacute;sidence secondaire. Le mod&egrave;le Jess est &eacute;quip&eacute; d&#039;un matelas de 12 cm d&#039;&eacute;paisseur et de 30 kg/m3 de densit&eacute;. Avec une m&eacute;canique &agrave; latte en bois large, vous appr&eacute;cierez un confort &eacute;quilibr&eacute; du couchage. Avec des petits accoudoirs, de 7,5 cm, le Jess sera parfait dans les petits espaces. De plus, il est &eacute;quip&eacute; d&#039;un range couette int&eacute;gr&eacute; au dossier, pour plus de praticit&eacute;. Pour plus de choix sur le matelas ou la taille des accoudoirs, vous pouvez consulter le mod&egrave;le Imola, du m&ecirc;me fabricant. Il vous offrira plus de possiblit&eacute;s de personnalisation. L&#039;assise est compos&eacute;e d&#039;une mousse Polyur&eacute;thane de 30 kg/m3 de densit&eacute;, et de 18 kg/m3 pour le dossier. Le matelas est dehoussable. Dimensions : 179x105x96 .', '2020-06-16', 'Actif', 'canape-convertible-lit-rapide-jess.jpg'),
(9, 'Ecran Pc ASUS XG49VQ', '650', 'ASUS XG49VQ. Taille de l&#039;&eacute;cran: 124,5 cm (49&quot;), R&eacute;solution de l&#039;&eacute;cran: 3840 x 1080 pixels, Type HD: UltraWide Quad HD, Technologie d&#039;affichage: LED, Temps de r&eacute;ponse: 4 ms, Format d&#039;image: 32:9, Angle de vision horizontal: 178&deg;, Angle de vision vertical: 178&deg;. Haut-parleurs int&eacute;gr&eacute;s. Concentrateur USB int&eacute;gr&eacute;. Montage VESA, R&eacute;glage de la hauteur. Couleur du produit: Noir.', '2020-06-16', 'Actif', 'ecransamsung.jpg'),
(10, '1', '4', 'efezfezfezfezfez', '2525-02-25', 'Actif', 'original.jpg'),
(11, 'canape 2', 'fezfezf', 'ezfezfezfez', '4242-02-22', 'Actif', 'bo2 logo.jfif');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `objet_annonce`
--
ALTER TABLE `objet_annonce`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `objet_annonce`
--
ALTER TABLE `objet_annonce`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
