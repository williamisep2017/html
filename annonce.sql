-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Jeu 07 Mai 2015 à 10:35
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Proxipotage`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `choix_vente` varchar(255) NOT NULL,
  `choix_produits` varchar(255) NOT NULL,
  `NOM` varchar(255) NOT NULL,
  `pdsKg` int(255) NOT NULL,
  `pdsG` int(255) NOT NULL,
  `qte` int(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id`, `choix_vente`, `choix_produits`, `NOM`, `pdsKg`, `pdsG`, `qte`, `comment`) VALUES
(2, 'Vendre', 'Fruits', 'Tomate', 2, 0, 2, ''),
(3, 'Vendre et Echanger', 'Légumes', 'carotte', 4, 0, 1, ''),
(9, 'Echanger', 'Fruits', 'Tomate', 3, 0, 1, ''),
(10, 'Vendre', 'Fruits', 'abricot', 1, 100, 1, ''),
(11, 'Vendre', 'Fruits', 'abricot', 1, 100, 1, ''),
(14, 'Echanger', 'Légumes', 'choux', 2, 200, 2, 'aaaaaaaaaa');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;