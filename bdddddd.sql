-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  jeu. 19 mars 2020 à 14:25
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `php`
--

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Users`
--

INSERT INTO `Users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$jobjZUsWIX6Wa36sIMJSWuruMsFruwmGIiwiXgnXpWLJcCBvDppW6');

-- --------------------------------------------------------

--
-- Structure de la table `Works`
--

CREATE TABLE `Works` (
  `id` int(255) NOT NULL,
  `titre` varchar(256) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `date` date NOT NULL,
  `image` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Works`
--

INSERT INTO `Works` (`id`, `titre`, `description`, `date`, `image`) VALUES
(2, 'Travail n1', 'Bonjour, voici mon travail n1', '2020-03-24', 'https://icatcare.org/app/uploads/2018/06/Layer-1704-1920x840.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
