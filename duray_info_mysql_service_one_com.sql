-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : duray.info.mysql.service.one.com:3306
-- Généré le : lun. 14 juin 2021 à 06:38
-- Version du serveur :  10.3.29-MariaDB-1:10.3.29+maria~focal
-- Version de PHP : 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `duray_info`
--
CREATE DATABASE IF NOT EXISTS `duray_info` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `duray_info`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `email`, `mdp`) VALUES
(4, 'maurined', 'maurine.duray@skynet.be', '$2y$10$ZQVSeEPsNawFGdYVYWGnCuyX5XWjJn1h1QA.OhK7G2KOuzYTtu2.6'),
(5, 'Duray', 'maurine.duray@skynet.be', '$2y$10$G5vxPqZDLdZOCCMeG80FLescNFbkVdHaNM274RWHbWl54Dyq1ywxy');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(6, 'nom ', 'maurine.duray@skynet.be', 'fgert', 'tbrtbh'),
(7, 'Laurence', 'lolo@web.com', 'help !!!', 'question code'),
(8, 'Maurine Duray', 'maurine.duray@skynet.be', 'Test ', 'question ? \r\n'),
(9, 'laurence', 'lobastenier@hotmail.com', 'fière', 'waw tu es une vrai warrior '),
(10, 'olivier', 'olivier.duray@skynet.be', 'test', 'Super clair et dynamique et la navigation va bien dans toutes les tailles, il y a deux lignes de titre welcome / accueil...\r\nJoli travail :)');

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id`, `skills`, `image`) VALUES
(6, 'Photoshop', '9474584photoshop.png'),
(7, 'InDesign', '1712214675indesign.png'),
(8, 'Illustrator', '90664763illustrator.png'),
(9, 'Pro Create', '1403964221procreate.png'),
(10, 'Première', '57140692premiere.png'),
(11, 'Visual Studio Code', '220402618visula.png'),
(12, 'Animate', '207385399animate.png'),
(13, 'After Effect', '1043932403after.png');

-- --------------------------------------------------------

--
-- Structure de la table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `technic` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `works`
--

INSERT INTO `works` (`id`, `title`, `date`, `category`, `description`, `technic`, `image`, `file`) VALUES
(14, 'Logo - Boucherie Leuzoise ', '2019-09-13', 'dessinVectoriel', 'logo ', 'Illustrator - Pro Create', '1504943894Logo-N-B.jpg', NULL),
(16, 'Le chemin - Livre ', '2019-04-12', 'dessinVectoriel', 'couverture du livre &quot;Adèle et le chemin&quot; ', 'Pro Create', '2090297919couverture-livre-.png', NULL),
(19, 'Dalebro', '2020-02-29', 'dessinVectoriel', 'Logo - entreprise comptable ', 'Illustrator', '1560673338Logo-Dalebro-Couleur.png', NULL),
(21, 'Vétérinaire Ducarmois', '2020-03-16', 'dessinVectoriel', 'Logo ', 'Illustrator', '33890609Ducarmois-Logo-Bleu.png', NULL),
(22, 'Chèvrerie petite vacresse ', '2019-05-18', 'pao', 'carte de visite pour une fromagerie familiale', 'Illustrator - InDesign', '559925174Capture-d-Aoe-Acran-2021-04-08-a-A-16.13.42.png', NULL),
(25, 'Boîte d\'oeufs Beelprez', '2019-06-27', 'pao', 'Etiquettes boîte d\'oeufs pour le ferme Beelprez à Flobecq', 'Illustrator - InDesign ', '1471542798Capture-d-Aoe-Acran-2021-04-08-a-A-16.21.00.png', NULL),
(29, 'Pigeonneau des collines ', '2020-06-23', 'dessinVectoriel', 'Logo pour un producteur de pigeonneau ', 'Illustrator ', '266357537Logo-baseline.png', NULL),
(31, 'Les saveurs de Silly ', '2019-03-11', 'pao', 'Flyers pour les Saveurs de Silly du 1er mai ', 'Pro Create - Illustrator - Indesign ', '1743891495Capture-d-Aoe-Acran-2021-04-08-a-A-16.30.09.png', NULL),
(32, 'Roxane Lefèbvre', '2020-02-14', 'dessinVectoriel', 'Logo pour l\'artiste peintre - Roxane Lefèbvre ', 'Illustrator ', '1401136804Capture-d-Aoe-Acran-2021-04-08-a-A-16.35.50.png', NULL),
(34, 'Au ruisseau des oies ', '2020-08-01', 'web', 'Réalisation d\'un site web pour une table d\'hôte \r\nhttp://auruisseaudesoies.be/', 'Figma - HTML - CSS ', '1776485305Capture-d-Aoe-Acran-2021-05-04-a-A-15.30.42.png', NULL),
(35, 'Stop Motion ', '2020-06-10', 'animation', 'Stop motion réalisé dans le cadre de ma première année en Infographie à l\'EPSE', 'PlayDo - Première Pro ', '909570190Capture-d-Aoe-Acran-2021-05-04-a-A-15.50.12.png', NULL),
(36, 'Pochette vinyle', '2020-06-20', 'retoucheGraph', 'Recréer un univers autour d\'une pochette de cd existante pour créer une pochette vinyle', 'Photoshop', '301647608CMJN-Maurine-Duray-Jury-VinyleNoe-Ol-copie-2.jpg', NULL),
(37, 'Photo réinventée ', '2019-12-10', 'retoucheGraph', 'Photo réinventée ', 'Photoshop', '478105498photo-re-Ainvente-Ae.jpg', NULL),
(38, 'Affiche artiste', '2019-12-10', 'retoucheGraph', 'Affiche artiste', 'Photoshop', '1175714329afficheRenaud.jpg', NULL),
(39, 'Magazine ID ', '2021-06-07', 'pao', 'Magazine réalisé pour le jury 2021 de prépresse - bachelier en techniques graphiques', 'Indesign ', '599782586Capture-d-Aoe-Acran-2021-06-07-a-A-09.38.33.png', NULL),
(40, 'Libres ? ', '2021-04-21', 'pao', 'Affiche pour un documentaire \"Libres?\" ', 'Photoshop - Indesign', '1378488962Capture-d-Aoe-Acran-2021-06-07-a-A-09.43.53.png', '2053650861Affiche-.pdf'),
(41, 'Page de magazine ', '2021-03-02', 'pao', 'Page de magazine carrefour - exercice ', 'Indesign - Photoshop ', '570603952Capture-d-Aoe-Acran-2021-06-07-a-A-09.45.50.png', '512140461MaurineD-CarrefourBrochure-correction.pdf'),
(42, 'Exercice Brochure Touristique ', '2021-02-09', 'pao', 'Exercice de création d\'une brochure touristique ', 'Indesign ', '560148752Capture-d-Aoe-Acran-2021-06-07-a-A-09.52.30.png', NULL),
(43, 'Exercice bichromie', '2021-03-23', 'pao', 'Création d\'une brochure ', 'Indesign', '541473945Capture-d-Aoe-Acran-2021-06-07-a-A-09.56.41.png', NULL),
(44, 'brochure Rituals', '2021-02-23', 'pao', 'Création d\'un flyer pour Rituals - exercice ', 'Indesign', '616293477Capture-d-Aoe-Acran-2021-06-07-a-A-09.58.35.png', '1334828108MaurineDuray-Quadriptique-Rituals-fondsperdus.pdf'),
(45, 'Logo propreté Enghien', '2021-03-23', 'dessinVectoriel', 'Création de logo pour la ville d\'Enghien ', 'Illustrator - Pro Create', '376041685Capture-d-Aoe-Acran-2021-06-07-a-A-10.01.57.png', '803509548MaurineDuray-LogoRetenus.pdf'),
(46, 'Bull Dog ', '2020-08-07', 'dessinIllu', 'Dessin au crayon ', 'Crayonné ', '89938585974281487-784604628646065-5463001197088604160-n.jpg', NULL),
(47, 'Cheval ', '2020-07-20', 'dessinIllu', 'Cheval au pastel sec ', 'pastel sec ', '54957396970411029-733044793802049-8103780174249590784-n.jpg', NULL),
(48, 'Cheval ', '2020-08-25', 'dessinIllu', 'Cheval au crayon ', 'crayonné ', '30584930769874995-731933510579844-2157476198651789312-n.jpg', NULL),
(49, 'Hippopotame', '2019-07-24', 'dessinIllu', 'Hippopotame au pastel sec ', 'Pastel sec ', '58940251068693450-724754481297747-2455549836687048704-n.jpg', NULL),
(50, 'Cavalier King Charles ', '2020-07-10', 'dessinIllu', 'Cavalier King Charles au crayon ', 'Crayonné ', '71364169440395555-526976681075529-3618392153106939904-n.jpg', NULL),
(51, 'Zèbre', '2019-08-14', 'dessinIllu', 'Zèbre en aquarelle', 'Aquarelle', '206096902119554221-318484498591416-8629772903744793899-n.jpg', NULL),
(52, 'Chat', '2019-07-10', 'dessinIllu', 'Chat en aquarelle', 'Aquarelle', '181969230919429609-317023825404150-2386796510419035258-n.jpg', NULL),
(53, 'Tigre ', '2019-07-04', 'dessinIllu', 'Tigre au crayon de couleur', 'Crayon de couleur', '155320012019106023-311707389269127-1478665074224026866-n.jpg', NULL),
(54, 'Mésange', '2019-07-30', 'dessinIllu', 'Mésange au crayon de couleur', 'Crayon de couleur', '199094430019059153-310804352692764-2339649677830130079-n.jpg', NULL),
(55, 'Maquette Nokia ', '2020-01-10', 'web', 'Maquette figma - objet technologique ', 'Figma', '185149749nikia.png', NULL),
(56, 'Ophtalmologue', '2020-02-05', 'web', 'Création d\'une maquette pour un site web d\'ophtalmologue - exercice ', 'Figma', '1965454975ophtalmo.jpg', NULL),
(57, 'Site web - artiste', '2020-06-05', 'web', 'Création d\'un site web pour un artiste au choix - exercice ', 'Figma', '1853454567Capture-d-Aoe-Acran-2021-06-07-a-A-10.49.53.png', NULL),
(58, 'Architecte', '2020-05-15', 'web', 'Création d\'une maquette de site web pour un architecte - exercice ', 'Figma', '120842163Capture-d-Aoe-Acran-2021-06-07-a-A-10.52.41.png', NULL),
(59, 'Maquette - Jeux ', '2020-04-12', 'web', 'Création d\'une maquette pour un jeux au choix - Exercice ', 'Figma', '165502460jeux.jpg', NULL),
(60, 'Animation 2D', '2021-06-01', 'animation', 'Animation 2D - Jury 2021', 'Animate - Illustrator ', '1340260046anim.jpeg', NULL),
(61, 'Animation ', '2021-04-04', 'animation', 'Création d\'un cycle de fabrication - exercice', 'Animate - ProCreate', '1540873626piazzaAnim.jpeg', NULL),
(62, 'Personnages d\'animation ', '2021-06-01', 'animation', 'Création de personnage d\'animation', 'Illustrator', '2040084565Capture-d-Aoe-Acran-2021-06-07-a-A-11.21.56.png', NULL),
(63, 'Personnage d\'animation', '2021-04-30', 'animation', 'Création de personnage d\'animation ', 'Illustrator - Pro Create', '1941086302Capture-d-Aoe-Acran-2021-06-07-a-A-11.22.34.png', NULL),
(64, 'Compositing ', '2021-06-10', 'animation', 'Création d\'un compositing sur base d\'un travail photoshop réalisé en première ', 'After Effect - Photoshop ', '165822207Capture-d-Aoe-Acran-2021-06-07-a-A-11.25.55.png', NULL),
(66, 'Montage géométrique ', '2019-11-07', 'retoucheGraph', 'Travail scolaire ', 'Photoshop', '445393099-1-Duray-Maurine-MontageGe-Aome-Atrique.jpg', NULL),
(67, 'Montage géométrique ', '2019-11-07', 'retoucheGraph', 'Travail scolaire ', 'Photoshop', '841311098Duray-Maurine-MontageGeometrique2.jpg', NULL),
(68, 'Festival de couleurs', '2019-10-05', 'retoucheGraph', 'Travail scolaire ', 'Photoshop', '221100585Duray-Maurine-FestivalCouleursPortfolio.jpg', NULL),
(69, 'Double exposition', '2019-09-29', 'retoucheGraph', 'Double exposition - travail scolaire ', 'Photoshop', '1882883612Maurine-Duray-Exercice15-.jpg', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
