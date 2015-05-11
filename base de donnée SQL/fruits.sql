-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Lun 11 Mai 2015 à 09:32
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.7

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
(1, 'Abricot', ''),
(2, 'Airelle', ''),
(3, 'Amande', ''),
(4, 'Ananas', ''),
(5, 'Avocat', ''),
(6, 'Banane', ''),
(7, 'Cassis', ''),
(8, 'Cerise', ''),
(9, 'Châtaigne', ''),
(10, 'Citron', ''),
(11, 'Clémentine', ''),
(12, 'Datte', ''),
(13, 'Figue', ''),
(14, 'Fraise', ''),
(15, 'Framboise', ''),
(16, 'Grenade', ''),
(17, 'Groseille', ''),
(18, 'Kaki', ''),
(19, 'Kiwi', ''),
(20, 'Litchi', ''),
(21, 'Mandarine', ''),
(22, 'Marron', ''),
(23, 'Melon', ''),
(24, 'Mûre', ''),
(25, 'Myrtille', ''),
(26, 'Nèfle', ''),
(27, 'Noisette', ''),
(28, 'Noix', ''),
(29, 'Olive', ''),
(30, 'Orange', ''),
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