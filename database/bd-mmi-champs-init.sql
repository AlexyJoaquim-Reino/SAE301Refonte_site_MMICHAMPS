-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 28 mai 2023 à 20:04
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mmi-champs`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `nom_article` varchar(100) NOT NULL,
  `contenu_article` varchar(1000) NOT NULL,
  `date_article` date NOT NULL,
  `synopsis` varchar(200) NOT NULL,
  `miniature_article` varchar(50) DEFAULT NULL,
  `auteur` varchar(40) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `nom_article`, `contenu_article`, `date_article`, `synopsis`, `miniature_article`, `auteur`) VALUES
(2, 'Journée JPO', 'La Journée Portes Ouvertes (JPO)du 4 Février 2023 : une occasion unique pour les futurs étudiants de découvrir la formation dans tous ses atouts !  ', '2023-04-21', 'Découvrez la formation du BUT MMI de Champs Sur Marne lors de la JPO !', 'La_nuit_de_info2.png', 'Anne Tasso'),
(1, 'Festival MMI', 'Le festival mmi est une occasion pour tous les étudiants MMI de France de se réunir pour montrer tous leur mreilleurs projets réalisés durant leur formation MMI. Une occasion inoubliable de nos étudiants MMI !', '2023-01-11', 'Un festival MMI qui se déroulera le 8 Juin 2023 pour présenter les projets MMI de nos étudiants ! ', 'logoFesrtivalMMI.png', 'Anne Tasso'),
(5, 'Le Secret Santa ', 'Réunissez-vous en fin d\'année par groupe de deux étudiants !  \nLaissez-vous surprendre par nos cadeaux ! ', '2023-01-11', 'Le Secret Santa est un événement qui se produit lors des fêtes de Noël. Un étudiant tire au sort un autre. Le nom qu\'il a tiré sera la personne avec qui il doit offrir un cadeau.', 'secret_santa.jpg', 'Anne Tasso'),
(4, '1 semaine à Londres avec les MMI !', 'Un article expliquant en quoi le voyage à Londres consiste, sur quoi il porte et pourquoi nous organisons cette visite.', '2023-01-11', 'Avant les vacances de la Toussaint, les MMI accompagnés d’une partie de l’équipe enseignante', 'London.jpg', 'Anne Tasso'),
(3, 'La Nuit de L\'Info', 'Réunissez-vous en groupe d\'étudiants pour faire un projet en une nuit ! Répartissez-vous différemment les rôles en groupe afin de mener à bien le projet. Un marathon exceptionnel réunis autour d\'étudiants MMI ! ', '2023-01-11', 'De la nuit du 2 au 3 Décembre 2022, 17 étudiants se sont réunis dans le but de réaliser un projet sur un thème donné en 16 heures. ', 'La_nuit_de_info2.png', 'Anne Tasso ');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `id_matiere` int(11) NOT NULL AUTO_INCREMENT,
  `nom_matiere` varchar(60) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_matiere`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id_matiere`, `nom_matiere`, `description`) VALUES
(1, 'Intégration Web', 'Module d\'enseignement portant sur du développement front avec des notions en HTML et CSS'),
(2, 'Hébergement', 'Un module d\'enseignement portant sur la procédure d\'installation de site web, l\'utilisation d\'un serveur d\'hébergement ainsi que la réservation d\'un nom de domaine par l\'utilisation du protocole \'https\'.'),
(3, 'Ergonomie et Accessibilité', 'Un module d\'enseignement portant sur l\'évaluation d\'un site web, sa structure, le fonctionnement du site ainsi que des refontes de maquette pour améliorer la structure du site existant.'),
(4, 'Système d\'information', 'Un module d\'enseignement portant sur le fonctionnement d\'une base de donnée, du langage SQL liée à une base de donnée ainsi que les différents modèles de présentations.'),
(5, 'Développement web back', 'Un module d\'enseignement portant sur l\'utilisation du langage et des notions de PHP.'),
(6, 'Culture Numérique', 'Un module d\'enseignement portant sur de l\'histoire du monde informatique.'),
(7, 'Culture Artistique', 'Un module d\'enseignement très varié qui porte à la fois sur du dessin (en première année) et à la fois sur des notions portant sur l\'histoire du son et sa propre utilisation. '),
(8, 'Production Audio et vidéo', 'Un module d\'enseignement portant sur des notions de base sur la structure d\'une vidéo, du montage vidéo, et de l\'animation vidéo.'),
(9, 'Production Graphique', 'Un module d\'enseignement portant sur la bonne maîtrise des différents logiciels de la suite Adobe, à savoir Photoshop, Illustrator et InDesign. Elle porte également sur la bonne utilisation des polices à l\'aide du logiciel NexusFont.'),
(10, 'Représentation et traitement de l\'information', 'Un module d\'enseignement portant sur la bonne gestion des images d\'internet, avec également une partie informatique.'),
(11, 'Stratégie de communication', 'Un module d\'enseignement qui porte sur la stratégie du site envisagée par la marque. L\'objectif de ce module est de comprendre les objectifs et les différentes stratégie de la marque pour attirer des clients.'),
(12, 'Expression Communication et Rhétorique', 'Un module d\'enseignement qui porte sur la bonne maîtrise de l\'écriture et de l\'orthographe ainsi que des points de grammaires important.'),
(13, 'Gestion de Projet', 'Un module d\'enseignement qui porte sur la manière dont un projet est conçu, organisé géré par une équipe ainsi que les rôles bien détaillés sur tous les différents membres d\'une équipe.'),
(14, 'Anglais', 'Un module d\'enseignement portant sur la maîtrise de la langue anglaise : points de grammaire, de temps, de conjugaison mais surtout de vocabulaire.'),
(15, 'Anglais pour le web', 'Un module d\'enseignement qui porte sur les différents points d\'anglais en grammaire, conjugaison et vocabulaire principalement intégrés dans des sites web.'),
(16, 'Projet Personnel Profesionnel', 'Un module d\'enseignement qui porte sur la façon de se présenter et de se construire pour être conformes aux normes d\'une entreprise. Ce module porte également sur les différentes conditions de travail lorsque l\'on est en entreprise.'),
(17, 'Économie et droits', 'Un module d\'enseignement qui porte sur des notions de droits en politique mais aussi les droits dans le multimédia, l\'internet et les réseaux sociaux. ');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id_projet` int(11) NOT NULL AUTO_INCREMENT,
  `nom_projet` varchar(50) NOT NULL,
  `etudiants` varchar(100) NOT NULL,
  `date_debut_projet` date NOT NULL,
  `date_fin_projet` date NOT NULL,
  `niveau` varchar(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `img_projet` varchar(50) DEFAULT NULL,
  `iframe_projet` varchar(50) DEFAULT NULL,
  `lien` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_projet`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id_projet`, `nom_projet`, `etudiants`, `date_debut_projet`, `date_fin_projet`, `niveau`, `description`, `img_projet`, `iframe_projet`, `lien`) VALUES
(1, 'DataVIZ', 'Samuel Miguel, Samuel Enriquez-Serano, Valérie Laypere', '2023-04-05', '2023-04-07', 'Année 2', 'Un projet qui consistait à créer une page web représentant un classement ou un top des meilleurs éléments sous forme d\'un tableau ou d\'un graphique de donnée. Les éléments pouvaient inclure tout type de catégorie.', 'projet6.png', 'https://www.youtube.com/watch?v=ynpNt8JVoPw', 'https://erelae.github.io/Dataviz/'),
(6, 'Podcast Gustave Eiffel', 'Thomas Devred et Fathalah Zobir', '2022-11-25', '2022-12-12', 'Année 2', 'Un podcast qui devait être réalisé en binôme sur Gustave Eiffel, le créateur de la tour Eiffel. ', 'projet7.png', 'https://www.youtube.com/watch?v=Vtcqe9ms29c', 'https://www.youtube.com/watch?v=Vtcqe9ms29c'),
(2, 'Portrais Chinois', 'Zhyla Alina', '2020-04-09', '2021-01-14', 'Année 1', 'Un portrais chinois qui consiste à décrire vos goûts, vos caractères ou vos hobbies sous la forme de 7 analogies différentes. ', 'projet1.png', 'https://www.youtube.com/watch?v=ynpNt8JVoPw', 'http://www.dut-mmi-champs.fr/jpo/2023/medias/portraitchinois/03-alina/index.html'),
(3, 'Portfolio', 'Many Clara', '2023-04-27', '2023-04-05', 'Année 2', 'L\'objectif était de réaliser un portfolio qui comporte un design qui représente nos caractéristiques mais surtout un contenu qui reflète nos compétences, nos projets réalisés durant l\'année ainsi qu\'une biographie qui raconte notre personnalité. ', 'projet3.png', 'https://www.youtube.com/watch?v=YFsSB5f3vU0', 'https://many.butmmi.o2switch.site/portfolio/controller.php?page=accueil'),
(4, 'DataVIZ', 'Driss Benadjal, Ricardo Cereyon Plancy, Chaïma Bensaber', '2022-04-05', '2022-11-07', 'Année 2', 'Un projet dont l\'objectif était de réaliser une page web représentant en grande partie un graphique de donnée qui indique un top des meilleurs éléments du moment ou des éléments préférés d\'une personne en particulier.', 'projet4.png', 'https://www.youtube.com/watch?v=YFsSB5f3vU0', 'https://drissbenadjal.github.io/Dataviz/'),
(5, 'Portrais Chinois', 'Léo Planus', '2020-04-09', '2021-01-14', 'Année 1', 'Un portrais chinois qui consiste à décrire sous la forme de 7 analogies bien distinctes les personnalités, les goûts et les centres d\'intérêts de la personne concernée. ', 'projet5.png', 'https://www.youtube.com/watch?v=ynpNt8JVoPw', 'http://www.dut-mmi-champs.fr/jpo/2023/medias/portraitchinois/04-leo/index.html'),
(9, 'Motion Design \"Autour des Rochers\"', 'Julien Paul', '2020-11-09', '2023-01-11', 'Année 2', 'Un motion design réalisé par Julien Paul qui porte sur le point de vue d\'un personnage à la visite de la plage.', 'projet_autour_des_rochers.png', 'Autour-des-rochers.mp4', 'http://www.dut-mmi-champs.fr/mmi/2018/wp-content/uploads/2021/07/Autour-des-rochers.mp4');

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

DROP TABLE IF EXISTS `temoignage`;
CREATE TABLE IF NOT EXISTS `temoignage` (
  `id_temoignage` int(11) NOT NULL AUTO_INCREMENT,
  `etudiant` varchar(100) NOT NULL,
  `promo` varchar(15) NOT NULL,
  `nom_temoignage` varchar(50) NOT NULL,
  `contenu_temoignage` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_temoignage`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `login` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `bio` varchar(500) DEFAULT NULL,
  `role_articles` tinyint(4) NOT NULL,
  `role_projets` tinyint(4) NOT NULL,
  `role_admin` tinyint(4) NOT NULL,
  `photo_profil` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `login`, `mdp`, `mail`, `bio`, `role_articles`, `role_projets`, `role_admin`, `photo_profil`) VALUES
(3, 'MMI User', 'test', 'rehIQn7DEv4QM', 'alexy.joaquim@gmail.com', 'test', 1, 1, 1, 'Alexy.jpg'),
(5, 'Alexy', 'JOAQUIM-REINO', 'rexgLtaUpPqXs', 'alexy.joaquim@gmail.com', 'ççççç', 0, 0, 1, '191.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
