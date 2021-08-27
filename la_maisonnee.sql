-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 27 août 2021 à 08:16
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `la_maisonnee`
--

-- --------------------------------------------------------

--
-- Structure de la table `actuality`
--

DROP TABLE IF EXISTS `actuality`;
CREATE TABLE IF NOT EXISTS `actuality` (
  `actu_id` int NOT NULL AUTO_INCREMENT,
  `actu_title` varchar(50) DEFAULT NULL,
  `actu_text` text,
  `actu_date_add` datetime DEFAULT NULL,
  `cla_id` int NOT NULL,
  PRIMARY KEY (`actu_id`),
  KEY `cla_id` (`cla_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `actuality`
--

INSERT INTO `actuality` (`actu_id`, `actu_title`, `actu_text`, `actu_date_add`, `cla_id`) VALUES
(1, 'revue de presse', 'courrier picard 2019', '2021-08-23 10:00:43', 1),
(2, 'revue de presse', 'courrier picard 2018', '2021-08-23 10:00:43', 1),
(3, 'revue de presse', 'courrier picard 2018', '2021-08-23 10:00:43', 1),
(4, 'revue de presse', 'courrier picard 2018', '2021-08-23 10:00:43', 1),
(5, 'revue de presse', 'courrier picard 2018', '2021-08-23 10:00:43', 1),
(6, 'revue de presse', 'courrier picard 2018', '2021-08-23 10:00:43', 1),
(7, 'revue de presse', 'courrier picard 2018', '2021-08-23 10:00:43', 1),
(8, 'revue de presse', 'bulletin intercommunal val de somme 2018', '2021-08-23 10:00:43', 1),
(9, 'revue de presse', 'vivre en somme 2017', '2021-08-23 10:00:43', 1),
(10, 'revue de presse', 'courrier picard 2017', '2021-08-23 10:00:43', 1),
(11, 'atelier_bricolage', 'Atelier petit bricolage : Evolution de notre activité centrée maintenant sur la création d\'éléments de décoration et les loisirs créatifs...', '2021-08-23 10:00:43', 2),
(12, 'atelier_bricolage', 'Activité intense le matin dans le cadre de l\'action \"Bricolage et rénovation\" où comment joindre l\'utile à l\'agréable et réaménager son logement ou le décorer', '2021-08-23 10:00:43', 2),
(13, 'atelier_cuisine', 'Un petit aperçu de l\'action \"de la cuisine à la restauration\"', '2021-08-23 10:00:43', 2),
(14, 'nos_travaux_en_cours', 'Fort Manoir: aménagement d\'un espace en pavés auto-bloquants et d\'un terrain de boules : deux occasions de développer des savoir-faire transposables en entreprise et le travail d\'équipe ...', '2021-08-23 10:00:43', 3),
(15, 'nos_traveaux_en_cours', 'Cure de jouvence de la mairie de la commune d\'AUBIGNY et de ses abords avec les travaux préparatoires avant le ravalement complet de la façade par les salariés de la Maisonnée.', '2021-08-23 10:00:43', 3),
(16, 'nos_traveaux_en_cours', 'la Maisonnée en pleine action dans la commune de DEMUIN, à la suite de travaux de peinture dans la salle des fêtes, la Maisonnée entame, à partir de cette semaine, un très gros chantier de peinture dans l\'église de la commune et à, proximité immédiate, une autre équipe, spécialisée dans le domaine des espaces verts, est en train de terminer la taille des arbres de la place, une activité en plein essor compte tenu de la météo très en avance. Un bon entrainement pour les nouvelles équipes qui vont être embauchées pour faire face aux contrats d\'entretiens des espaces verts qui ont été signés depuis le début de cette année.', '2021-08-23 10:00:43', 3),
(17, 'nos_traveaux_en_cours', '1ere intervention dans le domaine des espaces verts pour répondre aux nombreuses sollicitations des communes qui nous confiaient déjà des interventions à réaliser dans le domaine du second oeuvre du bâtiment.', '2021-08-23 10:00:43', 3),
(18, 'nos_traveaux_en_cours', 'Début des travaux d\'aménagement des nos locaux', '2021-08-23 10:00:43', 3),
(19, 'nos_traveaux_en_cours', 'Fin d\'aménagement de nos locaux', '2021-08-23 10:00:43', 3),
(20, 'nos_traveaux_en_cours', 'Réalisation d\'une rampe d\'accès à l\'école communale', '2021-08-23 10:00:43', 3),
(21, 'nos_traveaux_en_cours', 'Pose de l\'ensemble des fenêtres avant de passer aux travaux d\'isolation...', '2021-08-23 10:00:43', 3),
(22, 'nos_traveaux_en_cours', 'Aménagement de la future salle polyvalente du Hamel : de gros moyens déployés pour couler la dalle avant les travaux d\'isolation dans les locaux de l\'ancienne mairie.', '2021-08-23 10:00:43', 3),
(24, 'nos_traveaux_en_cours', 'Intervention d\'urgence de l\'équipe de la Maisonnée suite à la coulée de boue liée aux intempéries dans la commune de Bresle', '2021-08-23 10:00:43', 3),
(25, 'nos_traveaux_en_cours', 'Transformation de l\'ancien bureau de poste en Mairie.Commune du Hamel', '2021-08-23 11:58:34', 3),
(26, 'nos_traveaux_en_cours', 'Rénovation monument aux morts commune de Baizieux', '2021-08-23 14:01:10', 3);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `cla_id` int NOT NULL AUTO_INCREMENT,
  `cla_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cla_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `class`
--

INSERT INTO `class` (`cla_id`, `cla_name`) VALUES
(1, 'revue de presse'),
(2, 'action insertion sociale'),
(3, 'nos travaux en cours');

-- --------------------------------------------------------

--
-- Structure de la table `consult`
--

DROP TABLE IF EXISTS `consult`;
CREATE TABLE IF NOT EXISTS `consult` (
  `team_id` int NOT NULL,
  `fil_id` int NOT NULL,
  PRIMARY KEY (`team_id`,`fil_id`),
  KEY `fil_id` (`fil_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `detail`
--

DROP TABLE IF EXISTS `detail`;
CREATE TABLE IF NOT EXISTS `detail` (
  `actu_id` int NOT NULL,
  `med_id` int NOT NULL,
  PRIMARY KEY (`actu_id`,`med_id`),
  KEY `med_id` (`med_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `detail`
--

INSERT INTO `detail` (`actu_id`, `med_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(11, 12),
(12, 13),
(12, 14),
(12, 15),
(13, 16),
(13, 17),
(13, 18),
(14, 19),
(14, 20),
(14, 21),
(14, 22),
(15, 23),
(15, 24),
(15, 25),
(15, 26),
(16, 27),
(16, 28),
(16, 29),
(17, 30),
(17, 31),
(17, 32),
(17, 33),
(18, 34),
(19, 35),
(18, 36),
(20, 37),
(20, 38),
(22, 39),
(20, 40),
(22, 41),
(22, 42),
(25, 43),
(25, 44),
(25, 45),
(25, 46),
(25, 47),
(25, 48),
(21, 49),
(21, 50),
(21, 51),
(21, 52),
(26, 53),
(26, 54),
(26, 55),
(26, 56),
(26, 57),
(24, 58),
(24, 59),
(24, 60),
(24, 61);

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `empl_id` int NOT NULL AUTO_INCREMENT,
  `empl_lastname` varchar(50) DEFAULT NULL,
  `empl_firstname` varchar(50) DEFAULT NULL,
  `empl_password` varchar(50) DEFAULT NULL,
  `empl_role` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`empl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `fil_id` int NOT NULL AUTO_INCREMENT,
  `fil_name` varchar(50) DEFAULT NULL,
  `fil_format` varchar(10) DEFAULT NULL,
  `fil_date_add` date DEFAULT NULL,
  PRIMARY KEY (`fil_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `med_id` int NOT NULL AUTO_INCREMENT,
  `med_files` varchar(50) DEFAULT NULL,
  `med_format` varchar(50) DEFAULT NULL,
  `med_date_add` date DEFAULT NULL,
  PRIMARY KEY (`med_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`med_id`, `med_files`, `med_format`, `med_date_add`) VALUES
(1, 'revue7', 'png', '2021-08-23'),
(2, 'revue8', 'png', '2021-08-23'),
(3, 'revue9', 'png', '2021-08-23'),
(4, 'revue10', 'png', '2021-08-23'),
(5, 'revue11', 'png', '2021-08-23'),
(6, 'revue12', 'png', '2021-08-23'),
(7, 'revue13', 'png', '2021-08-23'),
(8, 'revue14', 'png', '2021-08-23'),
(9, 'revue15', 'png', '2021-08-23'),
(10, 'revue16', 'png', '2021-08-23'),
(11, 'brico2', 'png', '2021-08-23'),
(12, 'brico4', 'png', '2021-08-23'),
(13, 'brico5', 'png', '2021-08-23'),
(14, 'brico6', 'png', '2021-08-23'),
(15, 'brico7', 'png', '2021-08-23'),
(16, 'cuisine1', 'png', '2021-08-23'),
(17, 'cuisine2', 'png', '2021-08-23'),
(18, 'cuisine3', 'png', '2021-08-23'),
(19, 'chantier1', 'png', '2021-08-23'),
(20, 'chantier2', 'png', '2021-08-23'),
(21, 'chantier3', 'png', '2021-08-23'),
(22, 'chantier4', 'png', '2021-08-23'),
(23, 'chantier5', 'png', '2021-08-23'),
(24, 'chantier6', 'png', '2021-08-23'),
(25, 'chantier7', 'png', '2021-08-23'),
(26, 'chantier9', 'png', '2021-08-23'),
(27, 'chantier11', 'png', '2021-08-23'),
(28, 'chantier12', 'png', '2021-08-23'),
(29, 'chantier13', 'png', '2021-08-23'),
(30, 'chantier14', 'png', '2021-08-23'),
(31, 'chantier15', 'png', '2021-08-23'),
(32, 'chantier18', 'png', '2021-08-23'),
(33, 'chantier19', 'png', '2021-08-23'),
(34, 'chantier20', 'png', '2021-08-23'),
(35, 'chantier21', 'png', '2021-08-23'),
(36, 'chantier22', 'png', '2021-08-23'),
(37, 'chantier26', 'png', '2021-08-23'),
(38, 'chantier27', 'png', '2021-08-23'),
(39, 'chantier28', 'png', '2021-08-23'),
(40, 'chantier29', 'png', '2021-08-23'),
(41, 'chantier30', 'png', '2021-08-23'),
(42, 'chantier32', 'png', '2021-08-23'),
(43, 'chantier34', 'png', '2021-08-23'),
(44, 'chantier35', 'png', '2021-08-23'),
(45, 'chantier36', 'png', '2021-08-23'),
(46, 'chantier37', 'png', '2021-08-23'),
(47, 'chantier39', 'png', '2021-08-23'),
(48, 'chantier40', 'png', '2021-08-23'),
(49, 'chantier41', 'png', '2021-08-23'),
(50, 'chantier42', 'png', '2021-08-23'),
(51, 'chantier43', 'png', '2021-08-23'),
(52, 'chantier44', 'png', '2021-08-23'),
(53, 'chantier45', 'png', '2021-08-23'),
(54, 'chantier46', 'png', '2021-08-23'),
(55, 'chantier47', 'png', '2021-08-23'),
(56, 'chantier48', 'png', '2021-08-23'),
(57, 'chantier50', 'png', '2021-08-23'),
(58, 'chantier51', 'png', '2021-08-23'),
(59, 'chantier52', 'png', '2021-08-23'),
(60, 'chantier53', 'png', '2021-08-23'),
(61, 'chantier54', 'png', '2021-08-23');

-- --------------------------------------------------------

--
-- Structure de la table `moderate`
--

DROP TABLE IF EXISTS `moderate`;
CREATE TABLE IF NOT EXISTS `moderate` (
  `empl_id` int NOT NULL,
  `actu_id` int NOT NULL,
  PRIMARY KEY (`empl_id`,`actu_id`),
  KEY `actu_id` (`actu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `organize`
--

DROP TABLE IF EXISTS `organize`;
CREATE TABLE IF NOT EXISTS `organize` (
  `empl_id` int NOT NULL,
  `team_id` int NOT NULL,
  PRIMARY KEY (`empl_id`,`team_id`),
  KEY `team_id` (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `partner`
--

DROP TABLE IF EXISTS `partner`;
CREATE TABLE IF NOT EXISTS `partner` (
  `part_id` int NOT NULL AUTO_INCREMENT,
  `part_name` varchar(50) DEFAULT NULL,
  `part_email` varchar(50) DEFAULT NULL,
  `part_adress` varchar(250) DEFAULT NULL,
  `part_city` varchar(50) DEFAULT NULL,
  `part_phone` varchar(10) DEFAULT NULL,
  `part_files` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`part_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `store`
--

DROP TABLE IF EXISTS `store`;
CREATE TABLE IF NOT EXISTS `store` (
  `fil_id` int NOT NULL,
  `cat_id` int NOT NULL,
  PRIMARY KEY (`fil_id`,`cat_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `team_id` int NOT NULL AUTO_INCREMENT,
  `team_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actuality`
--
ALTER TABLE `actuality`
  ADD CONSTRAINT `actuality_ibfk_1` FOREIGN KEY (`cla_id`) REFERENCES `class` (`cla_id`);

--
-- Contraintes pour la table `consult`
--
ALTER TABLE `consult`
  ADD CONSTRAINT `consult_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`),
  ADD CONSTRAINT `consult_ibfk_2` FOREIGN KEY (`fil_id`) REFERENCES `files` (`fil_id`);

--
-- Contraintes pour la table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`actu_id`) REFERENCES `actuality` (`actu_id`),
  ADD CONSTRAINT `detail_ibfk_2` FOREIGN KEY (`med_id`) REFERENCES `media` (`med_id`);

--
-- Contraintes pour la table `moderate`
--
ALTER TABLE `moderate`
  ADD CONSTRAINT `moderate_ibfk_1` FOREIGN KEY (`empl_id`) REFERENCES `employee` (`empl_id`),
  ADD CONSTRAINT `moderate_ibfk_2` FOREIGN KEY (`actu_id`) REFERENCES `actuality` (`actu_id`);

--
-- Contraintes pour la table `organize`
--
ALTER TABLE `organize`
  ADD CONSTRAINT `organize_ibfk_1` FOREIGN KEY (`empl_id`) REFERENCES `employee` (`empl_id`),
  ADD CONSTRAINT `organize_ibfk_2` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`);

--
-- Contraintes pour la table `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `store_ibfk_1` FOREIGN KEY (`fil_id`) REFERENCES `files` (`fil_id`),
  ADD CONSTRAINT `store_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `categorie` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
