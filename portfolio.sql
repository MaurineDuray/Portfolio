-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 11, 2021 at 08:10 AM
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
(14, 'Logo - Boucherie Leuzoise ', '2019-09-13', 'dessinVectoriel', 'logo ', 'Illustrator - Pro Create', '1504943894Logo-N-B.jpg', NULL),
(16, 'Le chemin - Livre ', '2019-04-12', 'dessinVectoriel', 'couverture du livre &quot;Adèle et le chemin&quot; ', 'Pro Create', '2090297919couverture-livre-.png', NULL),
(19, 'Dalebro', '2020-02-29', 'dessinVectoriel', 'Logo - entreprise comptable ', 'Illustrator', '1560673338Logo-Dalebro-Couleur.png', NULL),
(21, 'Vétérinaire Ducarmois', '2020-03-16', 'dessinVectoriel', 'Logo ', 'Illustrator', '33890609Ducarmois-Logo-Bleu.png', NULL),
(22, 'Chèvrerie petite vacresse ', '2019-05-18', 'pao', 'carte de visite pour une fromagerie familiale', 'Illustrator - InDesign', '559925174Capture-d-Aoe-Acran-2021-04-08-a-A-16.13.42.png', NULL),
(25, 'Boîte d\'oeufs Beelprez', '2019-06-27', 'pao', 'Etiquettes boîte d\'oeufs pour le ferme Beelprez à Flobecq', 'Illustrator - InDesign ', '1471542798Capture-d-Aoe-Acran-2021-04-08-a-A-16.21.00.png', NULL),
(27, 'Authentique restaurant ', '2019-09-16', 'dessinIllu', 'Logo pour un restaurant ', 'Illustrator', '808654446Authentique-2.png', NULL),
(29, 'Pigeonneau des collines ', '2020-06-23', 'dessinVectoriel', 'Logo pour un producteur de pigeonneau ', 'Illustrator ', '266357537Logo-baseline.png', NULL),
(31, 'Les saveurs de Silly ', '2019-03-11', 'pao', 'Flyers pour les Saveurs de Silly du 1er mai ', 'Pro Create - Illustrator - Indesign ', '1743891495Capture-d-Aoe-Acran-2021-04-08-a-A-16.30.09.png', NULL),
(32, 'Roxane Lefèbvre', '2020-02-14', 'dessinVectoriel', 'Logo pour l\'artiste peintre - Roxane Lefèbvre ', 'Illustrator ', '1401136804Capture-d-Aoe-Acran-2021-04-08-a-A-16.35.50.png', NULL),
(34, 'Au ruisseau des oies ', '2020-08-01', 'web', 'Réalisation d\'un site web pour une table d\'hôte \r\nhttp://auruisseaudesoies.be/', 'Figma - HTML - CSS ', '1776485305Capture-d-Aoe-Acran-2021-05-04-a-A-15.30.42.png', NULL),
(35, 'Stop Motion ', '2020-06-10', 'animation', 'Stop motion réalisé dans le cadre de ma première année en Infographie à l\'EPSE', 'PlayDo - Première Pro ', '909570190Capture-d-Aoe-Acran-2021-05-04-a-A-15.50.12.png', NULL),
(36, 'Pochette vinyle', '2020-06-20', 'retoucheGraph', 'Recréer un univers autour d\'une pochette de cd existante pour créer une pochette vinyle', 'Photoshop', '301647608CMJN-Maurine-Duray-Jury-VinyleNoe-Ol-copie-2.jpg', NULL),
(37, 'Photo réinventée ', '2019-12-10', 'retoucheGraph', 'Photo réinventée ', 'Photoshop', '478105498photo-re-Ainvente-Ae.jpg', NULL),
(38, 'Affiche artiste', '2019-12-10', 'retoucheGraph', 'Affiche artiste', 'Photoshop', '1175714329afficheRenaud.jpg', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
