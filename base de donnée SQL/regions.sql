-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Mer 27 Mai 2015 à 10:50
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Proxipotage`
--

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `Alsace` varchar(255) NOT NULL,
  `Aquitaine` varchar(255) NOT NULL,
  `Auvergene` varchar(255) NOT NULL,
  `Basse Normandie` varchar(255) NOT NULL,
  `Bourgogne` varchar(255) NOT NULL,
  `Bretagne` varchar(255) NOT NULL,
  `Centre` varchar(255) NOT NULL,
  `Champagne-Ardenne` varchar(255) NOT NULL,
  `Corse` varchar(255) NOT NULL,
  `Franche-Comté` varchar(255) NOT NULL,
  `Haute Normandie` varchar(255) NOT NULL,
  `Ile-de-France` varchar(255) NOT NULL,
  `Languedoc-Roussillon` varchar(255) NOT NULL,
  `Limousin` varchar(255) NOT NULL,
  `Lorraine` varchar(255) NOT NULL,
  `Midi-Pyrénées` varchar(255) NOT NULL,
  `Nord-Pas-de-Calais` varchar(255) NOT NULL,
  `Pays de la Loire` varchar(255) NOT NULL,
  `Picardie` varchar(255) NOT NULL,
  `Poitou-Charentes` varchar(255) NOT NULL,
  `Provence-Alpes-Côte-d'Azur` varchar(255) NOT NULL,
  `Rhône-Alpes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;