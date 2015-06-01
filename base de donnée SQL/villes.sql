-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Mer 27 Mai 2015 à 10:51
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Proxipotage`
--

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `Paris` varchar(255) NOT NULL,
  `Marseille` varchar(255) NOT NULL,
  `Lyon` varchar(255) NOT NULL,
  `Toulouse` varchar(255) NOT NULL,
  `Nice` varchar(255) NOT NULL,
  `Nantes` varchar(255) NOT NULL,
  `Strasbourg` varchar(255) NOT NULL,
  `Montpellier` varchar(255) NOT NULL,
  `Bordeaux` varchar(255) NOT NULL,
  `Rennes` varchar(255) NOT NULL,
  `Le Havre` varchar(255) NOT NULL,
  `Reims` varchar(255) NOT NULL,
  `Lille` varchar(255) NOT NULL,
  `Saint-Etienne` varchar(255) NOT NULL,
  `Toulon` varchar(255) NOT NULL,
  `Grenoble` varchar(255) NOT NULL,
  `Angers` varchar(255) NOT NULL,
  `Dijon` varchar(255) NOT NULL,
  `Brest` varchar(255) NOT NULL,
  `Le Mans` varchar(255) NOT NULL,
  `Clermont-Ferrand` varchar(255) NOT NULL,
  `Amiens` varchar(255) NOT NULL,
  `Aix-en-Provence` varchar(255) NOT NULL,
  `Limoges` varchar(255) NOT NULL,
  `Nîmes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
