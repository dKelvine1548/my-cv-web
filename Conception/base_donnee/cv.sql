-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 19 déc. 2021 à 04:52
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `academic_experience`
--

DROP TABLE IF EXISTS `academic_experience`;
CREATE TABLE IF NOT EXISTS `academic_experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diploma` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `born_location`
--

DROP TABLE IF EXISTS `born_location`;
CREATE TABLE IF NOT EXISTS `born_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location_name` varchar(50) DEFAULT NULL,
  `region_name` varchar(50) DEFAULT NULL,
  `country_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job` varchar(50) NOT NULL,
  `compagny` varchar(50) NOT NULL,
  `activity` varchar(100) DEFAULT NULL,
  `start_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `phones`
--

DROP TABLE IF EXISTS `phones`;
CREATE TABLE IF NOT EXISTS `phones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone_number` int(11) DEFAULT NULL,
  `is_mobile` tinyint(1) DEFAULT NULL,
  `is_telegram` tinyint(1) DEFAULT NULL,
  `is_whatsap` tinyint(1) NOT NULL,
  `country_code` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `points_interest`
--

DROP TABLE IF EXISTS `points_interest`;
CREATE TABLE IF NOT EXISTS `points_interest` (
  `image_interest` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `professionnal_experience`
--

DROP TABLE IF EXISTS `professionnal_experience`;
CREATE TABLE IF NOT EXISTS `professionnal_experience` (
  `id` int(11) NOT NULL,
  `compagny_link` varchar(50) DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `emails` varchar(20) NOT NULL,
  `phones` varchar(20) NOT NULL,
  `maritals_status` varchar(15) NOT NULL,
  `profile_name` varchar(100) NOT NULL,
  `profile_image` varchar(200) NOT NULL,
  `cover_image` varchar(200) NOT NULL,
  `born_date` date NOT NULL,
  `child` int(11) NOT NULL,
  `healt_status` varchar(50) NOT NULL,
  `born_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `specificity` varchar(50) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `language` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_language_skills` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sociallinks`
--

DROP TABLE IF EXISTS `sociallinks`;
CREATE TABLE IF NOT EXISTS `sociallinks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `social_network` varchar(50) DEFAULT NULL,
  `profile_link` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `passwords` varchar(50) NOT NULL,
  `hash_code` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `profile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_profile_users` (`profile`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `passwords`, `hash_code`, `created_at`, `updated_at`, `deleted_at`, `profile`) VALUES
(1, 'Kelvine', 'kelvine15', NULL, '2021-12-17 07:07:18', '2021-12-17 07:07:18', '2021-12-17 07:07:18', NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `fk_language_skills` FOREIGN KEY (`language`) REFERENCES `languages` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_profile_users` FOREIGN KEY (`profile`) REFERENCES `profiles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
