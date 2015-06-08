	
				-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Lun 08 Juin 2015 à 10:59
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
  `id_annonce` int(11) NOT NULL,
  `choix_vente` varchar(255) NOT NULL,
  `choix_produits` varchar(255) NOT NULL,
  `NOM` varchar(255) NOT NULL,
  `pdsKg` int(255) NOT NULL,
  `pdsG` int(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_ajout` datetime NOT NULL,
  `userid` varchar(255) NOT NULL,
  `adresse_de_vente` varchar(255) NOT NULL,
  `REGIONS` varchar(255) NOT NULL,
  `VILLES` varchar(255) NOT NULL,
  `num_tel` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `choix_vente`, `choix_produits`, `NOM`, `pdsKg`, `pdsG`, `prix`, `comment`, `date_ajout`, `userid`, `adresse_de_vente`, `REGIONS`, `VILLES`, `num_tel`) VALUES
(42, 'Vendre', 'Fruits', 'Cassis', 1, 100, 1, 'les fruits sont encore frais', '2015-06-08 10:13:47', '15', '', 'Limousin', 'Limoges', ''),
(43, 'Echanger', 'Fruits', 'Citron', 3, 200, 2, '', '2015-06-08 10:15:22', '15', '', 'Ile-de-France', 'Paris', ''),
(44, 'Vendre et Echanger', 'Fruits', 'Kiwi', 2, 200, 2, '', '2015-06-08 10:18:09', '26', '', 'Ile-de-France', 'Paris', ''),
(46, 'Echanger', 'Fruits', 'Banane', 1, 200, 2, '', '2015-06-08 10:24:55', '26', '', 'Ile-de-France', 'Paris', ''),
(47, 'Echanger', 'Fruits', 'Kaki', 1, 100, 1, '', '2015-06-08 10:25:34', '26', '', 'Provence-Alpes-Côte-d\\''Azur', 'Marseille', ''),
(48, 'Vendre et Echanger', 'Légumes', 'Cerise', 1, 200, 1, '', '2015-06-08 10:26:04', '26', '', 'Ile-de-France', 'Paris', ''),
(49, 'Echanger', 'Fruits', 'Grenade', 1, 200, 1, '', '2015-06-08 10:26:41', '26', '', 'Limousin', 'Limoges', ''),
(50, 'Echanger', 'Fruits', 'Kiwi', 1, 200, 1, '', '2015-06-08 10:27:25', '26', '', 'Provence-Alpes-Côte-d\\''Azur', 'Marseille', ''),
(51, 'Vendre', 'Fruits', 'Melon', 1, 200, 1, '', '2015-06-08 10:34:27', '26', '', 'Ile-de-France', 'Paris', ''),
(52, 'Vendre', 'Fruits', 'Ananas', 2, 200, 2, '', '2015-06-08 10:35:52', '15', '', 'Provence-Alpes-Côte-d\\''Azur', 'Marseille', ''),
(56, 'Vendre', 'Fruits', 'Datte', 1, 200, 2, '', '2015-06-08 10:42:17', '15', '', 'Limousin', 'Limoges', ''),
(57, 'Vendre', 'Fruits', 'Fraise', 2, 100, 2, '', '2015-06-08 10:44:44', '15', '', 'Ile-de-France', 'Paris', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id_annonce`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;