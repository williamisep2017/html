-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Mar 26 Mai 2015 à 14:41
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Proxipotage`
--

-- --------------------------------------------------------

--
-- Structure de la table `fruits`
--

CREATE TABLE `fruits` (
  `id` int(11) NOT NULL,
  `fruit` varchar(255) NOT NULL,
  `image_fruit` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fruits`
--

INSERT INTO `fruits` (`id`, `fruit`, `image_fruit`) VALUES
(1, 'Abricot', 'css/images/abricot.jpg'),
(2, 'Airelle', 'css/images/airelle.jpg'),
(3, 'Amande', 'css/images/amande.jpg'),
(4, 'Ananas', 'css/images/ananas.jpg'),
(5, 'Avocat', 'css/images/avocat.jpg'),
(6, 'Banane', 'css/images/banane.jpg'),
(7, 'Cassis', 'css/images/cassis.jpg'),
(8, 'Cerise', 'css/images/cerise.jpg'),
(9, 'Châtaigne', 'css/images/châtaigne.jpg'),
(10, 'Citron', 'css/images/citron.jpg'),
(11, 'Clémentine', 'css/images/clémentine.jpg'),
(12, 'Datte', 'css/images/datte.jpg'),
(13, 'Figue', 'css/images/figue.jpg'),
(14, 'Fraise', 'css/images/fraise.jpg'),
(15, 'Framboise', 'css/images/framboise.jpg'),
(16, 'Grenade', 'css/images/grenade.jpg'),
(17, 'Groseille', 'css/images/groseille.jpg'),
(18, 'Kaki', 'css/images/kaki.jpg'),
(19, 'Kiwi', 'css/images/kiwi.jpg'),
(20, 'Litchi', 'css/images/litchi.jpg'),
(21, 'Mandarine', 'css/images/mandarine.jpg'),
(22, 'Marron', 'css/images/marron.jpg'),
(23, 'Melon', 'css/images/melon.jpg'),
(24, 'Mûre', 'css/images/mûre.jpg'),
(25, 'Myrtille', 'css/images/myrtille.jpg'),
(26, 'Nèfle', 'css/images/nèfle.jpg'),
(27, 'Noisette', 'css/images/noisette.jpg'),
(28, 'Noix', 'css/images/noix.jpg'),
(29, 'Olive', 'css/images/olive.jpg'),
(30, 'Orange', 'css/images/orange.jpg'),
(31, 'Pamplemousse', ''),
(32, 'Pastèque', ''),
(33, 'Pêche', ''),
(34, 'Pistache', ''),
(35, 'Poire', ''),
(36, 'Pomme', ''),
(37, 'Prune', ''),
(38, 'Raisin rouge', ''),
(39, 'Raisin blanc', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;