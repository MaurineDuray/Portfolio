-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 27, 2021 at 06:53 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--
CREATE DATABASE IF NOT EXISTS `portfolio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `portfolio`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `login`, `email`, `mdp`) VALUES
(1, 'admin', 'maurine.duray@skynet.be', '$2y$10$N3CDNXYLDiDuqYohmBo6yOyf2roCealrrolVL5D76nnc0P3t/MLze'),
(3, 'Maurine', 'maurine.duray@skynet.be', '$2y$10$ecTLFKulREL1C9U.KQQi3eJjdFzxRIvE/yFZ8FVZNqy8b6zlypwb6');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(6, 'nom ', 'maurine.duray@skynet.be', 'fgert', 'tbrtbh'),
(7, 'Laurence', 'lolo@web.com', 'help !!!', 'question code'),
(8, 'Maurine Duray', 'maurine.duray@skynet.be', 'Test ', 'question ? \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills`
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
-- Table structure for table `works`
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
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `title`, `date`, `category`, `description`, `technic`, `image`, `file`) VALUES
(10, 'Renaud ', '2019-12-19', 'retoucheGraph', 'Projet scolaire jury - Technique graphique année 1 ', 'Photoshop ', '444267433Capture-d-Aoe-Acran-2021-04-08-a-A-15.44.54.png', NULL),
(11, 'Paysage imaginaire', '2019-12-10', 'retoucheGraph', 'Projet jury - Techniques graphiques année 1', 'Photoshop ', '1428926520Capture-d-Aoe-Acran-2021-04-08-a-A-15.46.45.png', NULL),
(12, 'Pochette vinyle ', '2019-12-10', 'retoucheGraph', 'Projet scolaire - Jury - Techniques graphiques année 1 ', 'Photoshop ', '1639984739Capture-d-Aoe-Acran-2021-04-08-a-A-15.47.13.png', NULL),
(13, 'Dépliant oncologie', '2020-09-10', 'pao', 'dépliant', 'Indesign - Illustrator', '326239604de-Apliant.jpg', NULL),
(14, 'Logo - Boucherie Leuzoise ', '2019-09-13', 'dessinVectoriel', 'logo ', 'Illustrator - Pro Create', '1504943894Logo-N-B.jpg', NULL),
(15, 'Affiche Citroën', '2019-10-08', 'pao', 'affiche portes ouvertes de Citroën Avignon', 'Photoshop - InDesign', '455753424Citroe-On.jpg', NULL),
(16, 'Le chemin - Livre ', '2019-04-12', 'dessinVectoriel', 'couverture du livre &quot;Adèle et le chemin&quot; ', 'Pro Create', '2090297919couverture-livre-.png', NULL),
(18, 'Au Ruisseau des Oies ', '2019-08-09', 'dessinIllu', 'logo', 'Pro Create', '56748538oie.png', NULL),
(19, 'Dalebro', '2020-02-29', 'dessinVectoriel', 'Logo - entreprise comptable ', 'Illustrator', '1560673338Logo-Dalebro-Couleur.png', NULL),
(20, 'Champagne Dremont-Marroy', '2020-02-08', 'dessinVectoriel', 'logo pour un producteur de Champagne ', 'Pro Create - Illustrator', '81542517dremont-logo.jpg', NULL),
(21, 'Vétérinaire Ducarmois', '2020-03-16', 'dessinVectoriel', 'Logo ', 'Illustrator', '33890609Ducarmois-Logo-Bleu.png', NULL),
(22, 'Chèvrerie petite vacresse ', '2019-05-18', 'pao', 'carte de visite pour une fromagerie familiale', 'Illustrator - InDesign', '559925174Capture-d-Aoe-Acran-2021-04-08-a-A-16.13.42.png', NULL),
(23, 'Ferme ouvertes ', '2019-05-06', 'pao', 'flyers journées fermes ouvertes pour la ferme des Joyeux Drilles de Villers-Saint-Amand', 'Pro Create - Illustrator - InDesign ', '1880446031ferme-ouverte.jpg', NULL),
(24, 'Roll-up ', '2019-02-07', 'pao', 'roll up pour la ferme des Joyeux Drilles de Villers ', 'Indesign - Illustrator', '255593324Capture-d-Aoe-Acran-2019-02-07-a-A-12.47.48.png', NULL),
(25, 'Boîte d\'oeufs Beelprez', '2019-06-27', 'pao', 'Etiquettes boîte d\'oeufs pour le ferme Beelprez à Flobecq', 'Illustrator - InDesign ', '1471542798Capture-d-Aoe-Acran-2021-04-08-a-A-16.21.00.png', NULL),
(26, 'Sushi Spa', '2019-10-10', 'pao', 'affiche pour un sushi spa à Avignon (non publié) ', 'Photoshop - Indesign ', '1140421588Capture-d-Aoe-Acran-2019-10-10-a-A-09.56.15.png', NULL),
(27, 'Authentique restaurant ', '2019-09-16', 'dessinIllu', 'Logo pour un restaurant ', 'Illustrator', '808654446Authentique-2.png', NULL),
(28, 'M-Service ', '2020-09-08', 'pao', 'flyers pour un installateur de feu ', 'Indesign - Photoshop ', '871593006flyers.png', NULL),
(29, 'Pigeonneau des collines ', '2020-06-23', 'dessinVectoriel', 'Logo pour un producteur de pigeonneau ', 'Illustrator ', '266357537Logo-baseline.png', NULL),
(30, 'Au Ruisseau des Oies ', '2020-09-16', 'pao', 'Flyers pour une table d\'hôtes à Hélécine', 'Indesign ', '1590275351Ruisseau-De-ApliantA62.jpg', NULL),
(31, 'Les saveurs de Silly ', '2019-03-11', 'pao', 'Flyers pour les Saveurs de Silly du 1er mai ', 'Pro Create - Illustrator - Indesign ', '1743891495Capture-d-Aoe-Acran-2021-04-08-a-A-16.30.09.png', NULL),
(32, 'Roxane Lefèbvre', '2020-02-14', 'dessinVectoriel', 'Logo pour l\'artiste peintre - Roxane Lefèbvre ', 'Illustrator ', '1401136804Capture-d-Aoe-Acran-2021-04-08-a-A-16.35.50.png', NULL),
(33, 'Beer Happy ', '2020-04-29', 'dessinVectoriel', 'Création d\'une marque de bière et son identité graphique - projet scolaire (Jury) ', 'Illustrator', '697018424Blonde-Beer-Amber-Bottle-Mockup-copie.jpg', NULL),
(34, 'Paysages vectoriels ', '2020-03-04', 'dessinVectoriel', 'projet scolaire ', 'Illustrator ', '1710603533Maurine-Duray-VilleSimplifie-Ae.jpg', NULL),
(35, 'Recette vectorielle ', '2020-02-19', 'dessinVectoriel', 'projet scolaire ', 'Illustrator ', '1063412314411.Maurine-Duray-Recette-.jpg', NULL),
(36, 'Recette vectorielle ', '2020-02-19', 'dessinVectoriel', 'projet scolaire ', 'Illustrator ', '636587108211.Maurine-Duray-Recette-.jpg', NULL),
(37, 'Parfum ', '2020-03-18', 'dessinVectoriel', 'projet scolaire - intégrer du vectoriel dans une photo pour créer une publicité de parfum ', 'Illustrator ', '577717358Capture-d-Aoe-Acran-2021-04-08-a-A-16.44.50.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
