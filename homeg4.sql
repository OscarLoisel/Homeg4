-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 08 Décembre 2016 à 09:54
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `homeg4`
--

-- --------------------------------------------------------

--
-- Structure de la table `bla`
--

CREATE TABLE `bla` (
  `bla` int(11) NOT NULL,
  `blo` int(11) NOT NULL,
  `blu` int(11) NOT NULL,
  `bli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pieces`
--

CREATE TABLE `pieces` (
  `id` int(11) NOT NULL,
  `piece` varchar(255) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pieces`
--

INSERT INTO `pieces` (`id`, `piece`, `id_utilisateur`) VALUES
(1, 'Salon', 8),
(2, 'Salon 2', 8),
(3, 'Cuisine', 8),
(4, 'Cuisine 2', 8),
(5, 'Salle de bain', 8),
(6, 'Chambre', 8),
(7, 'Jardin', 8),
(8, 'Salon', 9),
(9, 'Salon 2', 9),
(10, 'Cuisine', 9),
(11, 'Salle de bain', 9),
(12, 'Chambre', 9),
(13, 'Chambre 2', 9),
(14, 'Chambre 3', 9),
(15, 'Jardin', 9),
(16, 'Salon', 10),
(17, 'Salon 2', 10),
(18, 'Salon 3', 10),
(19, 'Cuisine', 10),
(20, 'Cuisine 2', 10),
(21, 'Salle de bain', 10),
(22, 'Salle de bain 2', 10),
(23, 'Salle de bain 3', 10),
(24, 'Salle de bain 4', 10),
(25, 'Salle de bain 5', 10),
(26, 'Chambre', 10),
(27, 'Chambre 2', 10),
(28, 'Chambre 3', 10),
(29, 'Chambre 4', 10),
(30, 'Chambre 5', 10),
(31, 'Jardin', 10),
(32, 'Salon', 11),
(33, 'Cuisine', 11),
(34, 'Salle de bain', 11),
(35, 'Chambre', 11),
(36, 'Jardin', 11),
(37, 'Salon', 13),
(38, 'Salon 2', 13),
(39, 'Cuisine', 13),
(40, 'Salle de bain', 13),
(41, 'Chambre', 13),
(42, 'Jardin', 13),
(43, 'Salon', 14),
(44, 'Salon 2', 14),
(45, 'Cuisine', 14),
(46, 'Salle de bain', 14),
(47, 'Salle de bain 2', 14),
(48, 'Chambre', 14),
(49, 'Chambre 2', 14),
(50, 'Chambre 3', 14),
(51, 'Jardin', 14),
(52, 'Salon', 15),
(53, 'Cuisine', 15),
(54, 'Salle de bain', 15),
(55, 'Chambre', 15),
(56, 'Salon', 15),
(57, 'Salon 2', 15);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `n_rue` int(10) NOT NULL,
  `rue` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `code_postal` int(10) NOT NULL,
  `identifiant` varchar(255) NOT NULL,
  `mdp` text NOT NULL,
  `tel1` varchar(12) NOT NULL,
  `tel2` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `mail`, `n_rue`, `rue`, `ville`, `code_postal`, `identifiant`, `mdp`, `tel1`, `tel2`) VALUES
(4, 'Cecchini', 'Florian', 'flo@oe', 34, 'rue paul bert', 'suresnes', 92150, 'Ce2c', 'ce67045d27bae8b25cd1483251706fa4e8bbea49', '0643836827', ''),
(5, 'saliou', 'louis', '', 18, 'rue Cacheux', 'Boulogne', 92100, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '0630623948', ''),
(6, 'Lucas', 'Pierre', 'pierrelucas75@hotmail.fr', 36, 'avenue Jean Moulin', 'Paris', 75014, 'plucas', 'f437cb078acc7c6d79873462334a355eddeb9459', '0610341373', ''),
(7, 'Huang', 'Jérémy', 'jeremyhuang96@gmail.com', 59, 'Avenue du Parc', 'Joinville-le-Pont', 94340, 'jeremyhuang96', '706f1fc088442e5f99bbca9d925562d950572979', '0665539824', '0148899187'),
(8, 'Guillaume', 'Pasquereau', 'guillaumpasq@numericable.fr', 23, 'chemin de ronde', 'Voisins-le-bretonneux', 78960, 'Bobby', '9dfdfa205805d6f003b4f2841804fa2d9424c075', '0677750782', ''),
(9, 'joachim', 'LeBGdu75', 'jean-joachim@lasallasse.xn--mamne-6ra', 75, 'RUe du sale', 'trÃ¨s trÃ¨s sale mamÃ©ne', 0, 'jean-joachim', '002b079c1dbceab5e104d6326d89e3d721697eb5', '156468153489', '4656446565'),
(10, 'e_ueiÃ©', 'jgioz', 'jhon@gmail.com', 25, 'rue des olivettes', 'Paris', 75000, 'John', 'a9993e364706816aba3e25717850c26c9cd0d89d', '0123456789', ''),
(11, 'test', 'test', '', 42, 'rue du test', 'test', 1, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '0123456789', '0123456789'),
(12, 'Bob', 'Bob', '', 42, 'Rue du bob', 'Bob', 12345, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '0123456789', '0123456789'),
(13, 'Fredo', 'Fredo', 'fredo@fredo.fr', 42, 'rue de fredo', 'Fredo', 12345, 'Bobby', '4501c3b0336cf2d19ed69a8d0ec436ee3f88b31b', '0123456789', '0123456789'),
(14, 'Bob', 'Bob', 'bob@gmail.com', 42, 'rue de bob', 'Paris', 75000, 'bobby', '4501c3b0336cf2d19ed69a8d0ec436ee3f88b31b', '0123456789', ''),
(15, 'claude', 'claude', 'claude@gmail.com', 42, 'rue de claude', 'paris', 75000, 'clode', 'f1dda22f6c87388a4ea6486ed19dfd0f6f6df13d', '0123456789', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pieces`
--
ALTER TABLE `pieces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `pieces`
--
ALTER TABLE `pieces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
