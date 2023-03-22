-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 22 mars 2023 à 12:24
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `app_goat`
--

-- --------------------------------------------------------

--
-- Structure de la table `goat`
--

CREATE TABLE `goat` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `year_of_birth` int(11) NOT NULL,
  `nationality` varchar(250) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `url_img` varchar(250) DEFAULT NULL,
  `sexe` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `goat`
--

INSERT INTO `goat` (`id`, `first_name`, `last_name`, `year_of_birth`, `nationality`, `company_name`, `description`, `url_img`, `sexe`) VALUES
(1, 'Elon', 'Musk', 1971, 'Afrique du Sud', 'Tesla', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nesciunt similique eaque blanditiis dolores recusandae mollitia odio illo numquam sit doloribus, quidem labore. Accusamus sequi voluptatibus obcaecati aperiam praesentium non.', 'img/elon.png', 'masculin'),
(2, 'Mark', 'Zuckerberg', 1984, 'États-Unis', 'Meta', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nesciunt similique eaque blanditiis dolores recusandae mollitia odio illo numquam sit doloribus, quidem labore. Accusamus sequi voluptatibus obcaecati aperiam praesentium non.', 'img/mark.png', 'masculin'),
(3, 'Jack', 'Ma', 1964, 'Chine', 'AliBaba', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nesciunt similique eaque blanditiis dolores recusandae mollitia odio illo numquam sit doloribus, quidem labore. Accusamus sequi voluptatibus obcaecati aperiam praesentium non.', 'img/jack.jpeg', 'masculin'),
(4, 'Steve', 'Jobs', 1955, 'États-Unis', 'Apple', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nesciunt similique eaque blanditiis dolores recusandae mollitia odio illo numquam sit doloribus, quidem labore. Accusamus sequi voluptatibus obcaecati aperiam praesentium non.', 'img/steve.png', 'masculin'),
(7, 'Martin', 'Nicolas', 1993, 'Française', 'RMH crew', 'Une courte description dem oi', 'img/martin.jpg', 'masculin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `goat`
--
ALTER TABLE `goat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `goat`
--
ALTER TABLE `goat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
