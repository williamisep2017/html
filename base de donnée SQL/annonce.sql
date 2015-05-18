-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Lun 11 Mai 2015 à 19:41
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.7

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
  `prix` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_ajout` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id`, `choix_vente`, `choix_produits`, `NOM`, `pdsKg`, `pdsG`, `qte`, `prix`, `comment`, `date_ajout`) VALUES
(2, 'Vendre', 'Fruits', 'Tomate', 2, 0, 2, 0, '', '0000-00-00 00:00:00'),
(3, 'Vendre et Echanger', 'Légumes', 'carotte', 4, 0, 1, 0, '', '0000-00-00 00:00:00'),
(9, 'Echanger', 'Fruits', 'Tomate', 3, 0, 1, 0, '', '0000-00-00 00:00:00'),
(10, 'Vendre', 'Fruits', 'abricot', 1, 100, 1, 0, '', '0000-00-00 00:00:00'),
(11, 'Vendre', 'Fruits', 'abricot', 1, 100, 1, 0, '', '0000-00-00 00:00:00'),
(14, 'Echanger', 'Légumes', 'choux', 2, 200, 2, 0, 'aaaaaaaaaa', '0000-00-00 00:00:00'),
(15, 'Vendre', 'Fruits', 'tomate', 3, 400, 3, 0, 'bonjour voici ma première annoce', '0000-00-00 00:00:00'),
(16, 'Echanger', 'Fruits', 'ezfse', 1, 100, 1, 0, 'rzer', '0000-00-00 00:00:00'),
(17, 'Echanger', 'Légumes', 'eqsfsdfqssfsq', 1, 100, 1, 0, 'fsd', '0000-00-00 00:00:00'),
(18, 'Echanger', 'Fruits', 'dqsdq', 2, 200, 2, 0, 'annonce avec une date', '2015-05-11 00:00:00'),
(19, 'Echanger', 'Fruits', 'test', 1, 100, 2, 0, 'bonjour c\\''est un test', '2015-05-11 00:00:00'),
(20, 'Echanger', 'Fruits', 'azdaz', 1, 100, 1, 0, 'azea', '2015-05-11 13:17:37');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;