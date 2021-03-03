-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 02 mars 2021 à 22:47
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `historea`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `categorie`) VALUES
(1, 'Antiquité'),
(2, 'Moyen-Age'),
(3, 'Moderne'),
(4, 'Contemporain');

-- --------------------------------------------------------

--
-- Structure de la table `propositions`
--

DROP TABLE IF EXISTS `propositions`;
CREATE TABLE IF NOT EXISTS `propositions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `a` varchar(225) NOT NULL,
  `b` varchar(225) NOT NULL,
  `c` varchar(225) NOT NULL,
  `d` varchar(225) NOT NULL,
  `solution` varchar(225) NOT NULL,
  `aire_geo` varchar(225) DEFAULT NULL,
  `epoque` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `a` varchar(225) NOT NULL,
  `b` varchar(225) NOT NULL,
  `c` varchar(225) NOT NULL,
  `d` varchar(225) NOT NULL,
  `solution` varchar(225) NOT NULL,
  `aire_geo` varchar(225) DEFAULT NULL,
  `epoque` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `question`, `a`, `b`, `c`, `d`, `solution`, `aire_geo`, `epoque`) VALUES
(1, 'En quel mois du calendrier grégorien eut lien la révolution d\'Octobre 1917 en Russie ?', 'Septembre', 'Octobre', 'Novembre', 'Décembre', 'c', NULL, '4'),
(2, 'En quelle année est entrée en vigueur la 5e république ?', '1945', '1958', '1962', '1965', 'c', NULL, '4'),
(3, 'En quelle année François Mittérand fut élu président de la république ?', '1969', '1981', '1985', '1988', 'b', NULL, '4'),
(4, 'En quelle année eut lieu la première exposition universelle à Paris ?', '1885', '1900', '1912', '1923', 'b', NULL, '4'),
(5, 'En quelle année débute la colonisation de l\'Algérie ?', '1830', '1852', '1870', '1912', 'a', NULL, '4'),
(6, 'En quelle année eut lieu le \"printemps des peuples\" européens ?', '1842', '1848', '1870', '1889', 'b', NULL, '4'),
(7, 'En quelle année débute la première croisade ?', '965', '1052', '1096', '1187', 'c', NULL, '2'),
(8, 'En quelle année a eut lieu la bataille de Bouvines ?', '987', '1054', '1201', '1214', 'd', NULL, '2'),
(9, 'Quel est le premier acte officiel qui autorise le culte protestant en France ?', 'l\'édit de Caracala', 'L\'édit de Nantes', 'L\'édit d\'Aix-la-Chapelle', 'La Déclaration universel des droits de l\'Homme et du citoyen', 'b', NULL, '3'),
(10, 'En année a lieu le Congrès de Vienne, suite à la défaite de Napoléon ?', '1815', '1804', '1852', '1830', 'a', NULL, '4'),
(11, 'Combien de soldats ont été mobilisés pendant la 1ere guerre mondiale, dans l\'ensemble des pays belligérants?', '20 millions', '30 millions', '50 millions', '70 millions', 'd', NULL, '4'),
(12, 'En quelle année eut lieu la victoire de César sur Vercingétorix à Alésia ?', '-95', '-67', '-52', '-28', 'c', NULL, '1'),
(14, 'En quelle année a eut lieu la prise Constantinople par les Ottomans ?', '1254', '1453', '1492', '1501', 'b', NULL, '2'),
(15, 'En quelle année a eut lieu le \"Sac de Constantinople\" par les Croisés ?', '1099', '1187', '1197', '1204', 'd', NULL, '2'),
(16, 'En quelle année a eut lieu le schisme entre les Eglises d\'Orient et d\'Occident ?', '987', '1054', '1096', '1214', 'b', NULL, '2'),
(17, 'En quelle année eut lieu le sacrement de Charlemagne ?', '496', '800', '905', '987', 'B', NULL, '2'),
(21, 'En quelle année a eut lieu l\'avènement d\'Hugues Capet ?', '987', '1012', '1214', '1345', 'A', NULL, '2'),
(22, 'En quelle année fut proclamée la République Populaire de Chine ?', '1911', '1947', '1949', '1972', 'C', NULL, '4'),
(23, 'Lequel de ces aliments était déjà présent en Europe au Moyen-Age (Avant la découverte de l\'Amérique) ?', 'Les lentilles', 'Le maîs', 'Le potiron', 'La pomme de terre', 'A', NULL, '3'),
(24, 'Laquelle de ces villes n\'a pas été conquise par Louis XIV ?', 'Lille', 'Calais', 'Dunkerque', 'Strasbourg', 'B', NULL, '3'),
(25, ' L\'euro est-il entré en vigueur ...', 'Le 1 janvier 2001', 'le 1 février 2001', 'Le 1 janvier 2002', 'Le 1 février 2002', 'C', NULL, '4'),
(26, 'En quelle année fut inauguré le tunnel sous la manche ?', '1949', '1964', '1994', '1994', 'D', NULL, '4'),
(27, 'En quelle année Apple commercialise le premier smartphone ?', '1994', '2002', '2004', '2007', 'D', NULL, '4');

-- --------------------------------------------------------

--
-- Structure de la table `scores`
--

DROP TABLE IF EXISTS `scores`;
CREATE TABLE IF NOT EXISTS `scores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(11) NOT NULL,
  `userId` varchar(225) NOT NULL,
  `categorieId` int(11) NOT NULL,
  `date_crea` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=236 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `scores`
--

INSERT INTO `scores` (`id`, `score`, `userId`, `categorieId`, `date_crea`) VALUES
(8, 80, '9', 2, '0000-00-00'),
(7, 50, '5', 1, '0000-00-00'),
(11, 50, 'unknown', 1, '0000-00-00'),
(12, 50, 'unknown', 1, '0000-00-00'),
(13, 50, 'unknown', 1, '0000-00-00'),
(14, 50, 'unknown', 1, '0000-00-00'),
(15, 50, 'unknown', 1, '0000-00-00'),
(16, 50, 'unknown', 1, '0000-00-00'),
(17, 50, 'unknown', 1, '0000-00-00'),
(18, 50, 'unknown', 1, '0000-00-00'),
(19, 50, 'unknown', 3, '0000-00-00'),
(20, 90, 'unknown', 1, '0000-00-00'),
(21, 20, 'unknown', 1, '0000-00-00'),
(22, 20, 'unknown', 1, '0000-00-00'),
(23, 90, 'unknown', 1, '0000-00-00'),
(24, 90, 'unknown', 1, '0000-00-00'),
(25, 90, 'unknown', 1, '0000-00-00'),
(26, 90, 'unknown', 1, '0000-00-00'),
(27, 90, 'unknown', 1, '0000-00-00'),
(28, 90, 'unknown', 1, '0000-00-00'),
(29, 90, 'unknown', 1, '0000-00-00'),
(30, 90, 'unknown', 1, '0000-00-00'),
(31, 90, 'unknown', 1, '0000-00-00'),
(32, 90, 'unknown', 1, '0000-00-00'),
(33, 90, 'unknown', 1, '0000-00-00'),
(34, 90, 'unknown', 1, '0000-00-00'),
(35, 10, 'unknown', 1, '0000-00-00'),
(36, 10, 'unknown', 1, '0000-00-00'),
(37, 10, 'unknown', 1, '0000-00-00'),
(38, 10, 'unknown', 1, '0000-00-00'),
(39, 10, 'unknown', 1, '0000-00-00'),
(40, 10, 'unknown', 1, '0000-00-00'),
(41, 10, 'unknown', 1, '0000-00-00'),
(42, 10, 'unknown', 1, '0000-00-00'),
(43, 10, 'unknown', 1, '0000-00-00'),
(44, 80, 'unknown', 1, '0000-00-00'),
(45, 0, 'unknown', 1, '0000-00-00'),
(46, 0, 'unknown', 1, '0000-00-00'),
(47, 0, 'unknown', 1, '0000-00-00'),
(48, 0, 'unknown', 1, '0000-00-00'),
(49, 0, 'unknown', 1, '0000-00-00'),
(50, 0, 'unknown', 1, '0000-00-00'),
(51, 80, 'unknown', 1, '0000-00-00'),
(52, 80, 'unknown', 1, '0000-00-00'),
(53, 0, 'unknown', 1, '0000-00-00'),
(54, 0, 'unknown', 1, '0000-00-00'),
(55, 20, 'unknown', 1, '0000-00-00'),
(56, 80, 'unknown', 1, '0000-00-00'),
(57, 0, 'unknown', 1, '0000-00-00'),
(58, 0, 'unknown', 1, '0000-00-00'),
(59, 0, 'unknown', 1, '0000-00-00'),
(60, 0, 'unknown', 1, '0000-00-00'),
(61, 0, 'unknown', 1, '0000-00-00'),
(62, 90, 'unknown', 1, '0000-00-00'),
(63, 50, 'UnknownUser', 1, '0000-00-00'),
(64, 50, 'UnknownUser', 1, '0000-00-00'),
(65, 20, 'UnknownUser', 1, '0000-00-00'),
(66, 20, 'UnknownUser', 1, '0000-00-00'),
(67, 0, 'UnknownUser', 1, '0000-00-00'),
(68, 0, 'UnknownUser', 1, '0000-00-00'),
(69, 30, 'UnknownUser', 1, '0000-00-00'),
(70, 0, 'UnknownUser', 1, '0000-00-00'),
(71, 70, 'uknownUser', 1, '0000-00-00'),
(72, 60, '13', 1, '0000-00-00'),
(73, 0, 'UnknownUser', 1, '0000-00-00'),
(74, 60, 'UnknownUser', 1, '0000-00-00'),
(75, 0, 'UnknownUser', 1, '0000-00-00'),
(76, 20, 'UnknownUser', 1, '0000-00-00'),
(77, 0, 'UnknownUser', 1, '0000-00-00'),
(78, 0, 'UnknownUser', 1, '0000-00-00'),
(79, 70, 'UnknownUser', 1, '0000-00-00'),
(80, 0, 'UnknownUser', 1, '0000-00-00'),
(81, 0, 'UnknownUser', 1, '0000-00-00'),
(82, 0, 'UnknownUser', 1, '0000-00-00'),
(83, 50, 'UnknownUser', 1, '0000-00-00'),
(84, 0, 'UnknownUser', 1, '0000-00-00'),
(85, 0, 'UnknownUser', 1, '0000-00-00'),
(86, 0, 'UnknownUser', 1, '0000-00-00'),
(87, 0, 'UnknownUser', 1, '0000-00-00'),
(88, 0, 'UnknownUser', 1, '0000-00-00'),
(89, 0, 'UnknownUser', 1, '0000-00-00'),
(90, 0, 'UnknownUser', 1, '0000-00-00'),
(91, 0, 'UnknownUser', 1, '0000-00-00'),
(92, 10, 'UnknownUser', 4, '0000-00-00'),
(93, 30, 'UnknownUser', 4, '0000-00-00'),
(94, 0, 'UnknownUser', 0, '0000-00-00'),
(95, 60, 'UnknownUser', 0, '0000-00-00'),
(96, 0, 'UnknownUser', 4, '0000-00-00'),
(97, 30, '13', 4, '0000-00-00'),
(98, 0, 'UnknownUser', 4, '0000-00-00'),
(99, 10, 'UnknownUser', 4, '0000-00-00'),
(100, 0, 'UnknownUser', 4, '0000-00-00'),
(101, 50, 'UnknownUser', 0, '0000-00-00'),
(102, 0, 'UnknownUser', 0, '0000-00-00'),
(103, 10, 'UnknownUser', 4, '0000-00-00'),
(104, 20, 'UnknownUser', 0, '0000-00-00'),
(105, 50, 'UnknownUser', 0, '0000-00-00'),
(106, 80, '214501', 0, '0000-00-00'),
(107, 20, 'joueur963266', 0, '0000-00-00'),
(108, 0, 'joueur103556', 0, '0000-00-00'),
(109, 20, 'joueur578144', 0, '0000-00-00'),
(110, 0, 'joueur884373', 0, '0000-00-00'),
(111, 30, 'joueur729117', 0, '0000-00-00'),
(112, 10, 'joueur910465', 0, '0000-00-00'),
(113, 0, 'joueur761824', 0, '0000-00-00'),
(114, 20, 'joueur137053', 0, '0000-00-00'),
(115, 0, 'joueur890083', 0, '0000-00-00'),
(116, 10, 'joueur426366', 0, '0000-00-00'),
(117, 20, 'joueur539638', 0, '0000-00-00'),
(118, 0, 'joueur297096', 0, '0000-00-00'),
(119, 0, 'joueur514750', 0, '0000-00-00'),
(120, 0, 'joueur283107', 0, '0000-00-00'),
(121, 20, 'joueur376333', 0, '0000-00-00'),
(122, 30, 'joueur183860', 0, '0000-00-00'),
(123, 0, 'joueur559555', 0, '0000-00-00'),
(124, 0, 'joueur338527', 0, '0000-00-00'),
(125, 0, 'joueur231891', 0, '0000-00-00'),
(126, 0, '13', 0, '0000-00-00'),
(127, 0, 'joueur852994', 0, '0000-00-00'),
(128, 0, 'joueur713679', 0, '0000-00-00'),
(129, 0, 'joueur574369', 0, '0000-00-00'),
(130, 0, 'joueur765024', 0, '0000-00-00'),
(131, 0, 'joueur006623', 0, '0000-00-00'),
(132, 0, 'joueur125790', 4, '0000-00-00'),
(133, 0, 'joueur424839', 0, '0000-00-00'),
(134, 0, 'joueur782512', 0, '0000-00-00'),
(135, 0, 'joueur094952', 4, '0000-00-00'),
(136, 0, 'joueur728762', 4, '0000-00-00'),
(137, 0, 'joueur292884', 4, '0000-00-00'),
(138, 0, 'joueur201280', 4, '0000-00-00'),
(139, 0, 'joueur140969', 0, '0000-00-00'),
(140, 40, 'joueur288738', 0, '0000-00-00'),
(141, 80, 'joueur681516', 0, '0000-00-00'),
(142, 0, 'joueur764237', 0, '0000-00-00'),
(143, 0, 'joueur587179', 0, '2020-07-02'),
(144, 0, 'joueur085074', 0, '2020-07-02'),
(145, 0, 'joueur085074', 0, '2020-07-02'),
(146, 0, 'joueur085074', 4, '2020-07-02'),
(147, 0, 'joueur085074', 0, '2020-07-02'),
(148, 0, '13', 0, '2020-07-02'),
(149, 0, 'joueur450185', 0, '2020-07-02'),
(150, 0, 'joueur450185', 0, '2020-07-02'),
(151, 40, 'joueur450185', 0, '2020-07-02'),
(152, 90, 'joueur450185', 0, '2020-07-02'),
(153, 0, 'joueur939192', 0, '2020-07-02'),
(154, 30, 'joueur518228', 4, '2020-07-02'),
(155, 10, 'joueur518228', 4, '2020-07-02'),
(156, 40, 'joueur450185', 4, '2020-07-02'),
(157, 0, 'Unknown', 0, '2020-07-02'),
(158, 10, 'joueur464256', 0, '2020-07-02'),
(159, 10, 'joueur464256', 0, '2020-07-02'),
(160, 0, 'joueur464256', 0, '2020-07-02'),
(161, 20, 'Hérodote', 0, '2020-07-02'),
(162, 0, 'joueur336617', 4, '2020-07-02'),
(163, 0, 'joueur336617', 0, '2020-07-02'),
(164, 0, 'joueur012311', 0, '2020-07-03'),
(165, 0, 'Hérodote', 0, '2020-07-17'),
(166, 0, 'Hérodote', 0, '2020-07-17'),
(167, 0, 'joueur790297', 0, '2020-07-20'),
(168, 60, 'joueur804542', 4, '2020-07-31'),
(169, 10, 'joueur885959', 0, '2020-08-04'),
(170, 0, 'joueur505200', 0, '2020-10-29'),
(171, 0, 'joueur441228', 0, '2020-10-29'),
(172, 0, 'joueur800917', 0, '2020-10-29'),
(173, 0, 'joueur540256', 0, '2020-10-29'),
(174, 0, 'joueur188299', 0, '2020-10-30'),
(175, 0, 'joueur522441', 0, '2020-10-30'),
(176, 0, 'joueur791557', 0, '2020-10-30'),
(177, 90, 'joueur795447', 0, '2020-10-30'),
(178, 0, 'joueur801365', 0, '2020-10-30'),
(179, 0, 'joueur761082', 0, '2020-10-30'),
(180, 0, 'joueur823279', 0, '2020-10-30'),
(181, 0, 'joueur016495', 0, '2020-10-30'),
(182, 0, 'joueur590661', 0, '2020-10-30'),
(183, 0, 'joueur832975', 0, '2020-10-30'),
(184, 0, 'joueur400680', 0, '2020-10-30'),
(185, 0, 'joueur587712', 0, '2020-11-02'),
(186, 10, 'joueur184705', 0, '2020-11-02'),
(187, 10, 'joueur370489', 0, '2020-11-02'),
(188, 0, 'joueur739825', 0, '2020-11-02'),
(189, 0, 'Unknown', 0, '2020-11-02'),
(190, 0, 'joueur345383', 0, '2020-11-02'),
(191, 0, 'joueur637168', 0, '2020-11-03'),
(192, 0, 'joueur903656', 0, '2020-11-03'),
(193, 10, 'joueur557981', 0, '2020-11-03'),
(194, 0, 'joueur005635', 0, '2020-11-03'),
(195, 0, 'joueur582437', 0, '2020-11-03'),
(196, 0, 'joueur420222', 0, '2020-12-17'),
(197, 10, 'joueur440645', 0, '2020-12-17'),
(198, 0, 'joueur843673', 0, '2020-12-17'),
(199, 0, 'joueur870147', 0, '2020-12-17'),
(200, 10, 'joueur808962', 0, '2020-12-17'),
(201, 0, 'joueur936737', 0, '2020-12-17'),
(202, 0, 'joueur110016', 0, '2020-12-17'),
(203, 10, 'joueur394180', 0, '2020-12-17'),
(204, 10, 'joueur709504', 0, '2020-12-17'),
(205, 0, 'joueur444385', 0, '2020-12-17'),
(206, 0, 'joueur282354', 0, '2020-12-17'),
(207, 0, 'joueur694438', 0, '2020-12-17'),
(208, 10, 'joueur608374', 0, '2020-12-17'),
(209, 0, 'joueur492389', 0, '2020-12-17'),
(210, 0, 'joueur576996', 0, '2020-12-17'),
(211, 0, 'joueur642287', 0, '2020-12-17'),
(212, 0, 'joueur013659', 0, '2020-12-17'),
(213, 0, 'joueur890216', 0, '2020-12-17'),
(214, 0, 'joueur857159', 0, '2020-12-17'),
(215, 0, 'joueur386468', 0, '2020-12-17'),
(216, 10, 'joueur380729', 0, '2020-12-17'),
(217, 0, 'joueur524951', 0, '2020-12-17'),
(218, 0, 'joueur695660', 0, '2020-12-17'),
(219, 0, 'joueur978843', 0, '2020-12-17'),
(220, 0, 'joueur259397', 0, '2020-12-17'),
(221, 10, 'joueur568204', 0, '2020-12-17'),
(222, 0, 'joueur731606', 0, '2020-12-17'),
(223, 0, 'joueur811377', 0, '2020-12-17'),
(224, 0, 'joueur398020', 0, '2020-12-17'),
(225, 10, 'joueur583931', 0, '2020-12-17'),
(226, 0, 'joueur026762', 0, '2020-12-18'),
(227, 0, 'joueur021152', 0, '2020-12-18'),
(228, 0, 'joueur891005', 0, '2020-12-18'),
(229, 0, 'joueur824991', 0, '2020-12-18'),
(230, 0, 'joueur723721', 0, '2020-12-18'),
(231, 0, 'joueur592341', 0, '2020-12-18'),
(232, 0, 'joueur424925', 0, '2020-12-18'),
(233, 0, 'joueur902178', 0, '2020-12-18'),
(234, 0, 'joueur214389', 0, '2020-12-18'),
(235, 50, 'joueur688661', 0, '2021-02-08');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `statut` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `email`, `password`, `statut`) VALUES
(1, 'Nabil-bali', 'nabil-bali@gmail.com', '$2y$10$leSR9Yd0IAwSY7GgLsps4e0pxoOYCBRSJfu8B6No/5/7Bj9o2LF.C', NULL),
(2, 'Nabil', 'nabil.goual@laposte.net', 'azerty0', NULL),
(3, 'Mateo21', 'math@laposte.net', '000000aa', NULL),
(11, 'Nabil-baliuipop', 'nabil.goual@ttt.net', '$2y$10$aZa2luU7OMDAftyYlFpjwuA07F3nYiYpUiaK33qyDcaMrmPgpeLPG', NULL),
(5, 'momo12', 'mo12@gmail.com', '000000aa', NULL),
(8, 'tyty123', 'ty123@gmail.com', '12345678', NULL),
(9, 'ggeq', 'fsf@gmail.com', 'azertyui', NULL),
(10, 'georges', 'gg@laposte.net', '$2y$10$./Y7LFVTaTqhEzjPHkWC3.aMv5/MSd8xOSbF0bucIikFew089W2ta', NULL),
(12, 'user3456', 'user3456@gmail.com', '$2y$10$dDxa46hBNzE37wq6sEB7B.yWSYCeRmLVRqObhh6AnbKqjpSIXMGfC', NULL),
(13, 'Hérodote', 'herodote@gmail.com', '$2y$10$BYbcS1GnjZB/3Jg0Hsazc.IHCp8rXZBYBmWzVS/OJE7nPczXu5jXO', NULL),
(14, 'Hérodote11', 'b.amandine@gmail.com', '$2y$10$.VU8KZ48KbMWMMJnwiSq7OGte/7HovwELkhLoY4U1IoWMINGR2ULy', NULL),
(15, 'Rachid', 'rachid@gmail.com', '$2y$10$DIlO0jgzYHLuklgBRuNgU.czLdlfOk14o4wbUbTbb9ZwxHmAmfN6a', NULL),
(16, 'user5544', 'user5544@gmail.com', '$2y$10$HJMLWnhjTcN38ib.hQRiB.nPMeNyeT0jELqhIJkwrBW20pCxxZr/e', NULL),
(17, 'yaya', 'yaya@msn.fr', '$2y$10$6NxZMEtOoKPitdBX.Nz0SuibI5bvPejCwFgcX9XqLPTp1EmzRBtrC', NULL),
(18, 'azer', 'azer@holtmail.com', '$2y$10$pQ.RCGoup6/Aw2XZ9Nu/BuvJIWxA5BQmFlBjaE6qTRhfR0.Ib0nua', NULL),
(19, 'Hérodote66', 'Herodote66@msn.fr', '$2y$10$0.LJj14OYKxOdtq.0gNsSemvQxK6szmiGlii97noVCTD0KMW/DO5i', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
