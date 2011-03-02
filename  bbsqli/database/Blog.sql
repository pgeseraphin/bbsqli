-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Sam 26 Février 2011 à 12:30
-- Version du serveur: 5.1.41
-- Version de PHP: 5.3.2-1ubuntu4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `Blog`
--
USE Blog;

-- --------------------------------------------------------

--
-- Structure de la table `Blog`
--

DROP TABLE IF EXISTS `Blog`;
CREATE TABLE IF NOT EXISTS `Blog` (
  `IdBlog` int(11) NOT NULL AUTO_INCREMENT,
  `IdUtilisateur` int(11) DEFAULT NULL,
  `Titre` varchar(100) DEFAULT NULL,
  `Contenu` text,
  `Image` varchar(50) DEFAULT NULL,
  `DatePostee` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Approuve` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`IdBlog`),
  KEY `IdUtilisateur` (`IdUtilisateur`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Blog`
--

INSERT INTO `Blog` (`IdBlog`, `IdUtilisateur`, `Titre`, `Contenu`, `Image`, `DatePostee`, `Approuve`) VALUES
(1, 7, 'Vive la revolution', 'Hope everyone has had a wonderful Christmas and Santa was good to you. I don''t have a big family unfortunately (though some people may say that is a good thing:)) so it was a very quiet, but enjoyable, one for us at the Hardie household this year - just me and my kids! Spending time now relaxing and making the most of what''s left of the holidays before I throw myself back into drawing and painting - first portrait of 2011 is going to be a painting so looking forward to that. Thinking a lot too about my goals for next year and what I want to achieve but more about those hopefully in my next post.\r\n\r\nI have one more portrait to share with you before the year is out as you can see above. I actually finished this one back at the end of November but couldn''t show you at the time as it was to be a surprise present for someone - delighted to say they were very happy with it. Vizslas are another breed that I love drawing but I can struggle with their colouring before I''m completely happy - reds are always difficult to get just right with coloured pencils (or is that only me:)) I did take a couple of in-progress scans while working on it...........', NULL, '2011-01-02 16:21:27', 0),
(2, 7, 'College of BG''s', '\r\nSo for the past few months I have been working as a background Designer and Painter, at Six Point Harness Studios In Hollywood!! Working here has given me the opportunity to work on alot of different and amazing projects. These are a few backgrounds I did for a Microsoft project. These are up In Display at any Microsoft Store near you for the Holidays. I did about 10 of these, all panoramic BG''s that connect with each other, and create a very long continuous pan of holiday animations. I believe they circle a good portion of the stores. Also my friend Skudder helped out with some of the Lighting effects and some last minute gradients and touch ups. He was also one of the Directors alongside with my other friend Zack. ', NULL, '2011-01-02 16:21:12', 1),
(3, 8, 'MERRY XMAS 2010', 'I would just like you wish you all a very Merry Xmas from the Cobwebbed Room, hope you all have a wonderful time and have a very happy new year.', NULL, '2011-01-02 19:30:32', 0);

-- --------------------------------------------------------

--
-- Structure de la table `CommentaireBlog`
--

DROP TABLE IF EXISTS `CommentaireBlog`;
CREATE TABLE IF NOT EXISTS `CommentaireBlog` (
  `IdCommentaireBlog` int(11) NOT NULL AUTO_INCREMENT,
  `IdBlog` int(11) DEFAULT NULL,
  `IdUtilisateur` int(11) DEFAULT NULL,
  `Contenu` text NOT NULL,
  `DatePostee` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Approuve` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`IdCommentaireBlog`),
  KEY `IdBlog` (`IdBlog`),
  KEY `IdUtilisateur` (`IdUtilisateur`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Contenu de la table `CommentaireBlog`
--

INSERT INTO `CommentaireBlog` (`IdCommentaireBlog`, `IdBlog`, `IdUtilisateur`, `Contenu`, `DatePostee`, `Approuve`) VALUES
(1, 3, 7, 'Felicitations!!! Belle publication.', '2011-01-02 15:44:14', NULL),
(2, 2, 8, 'That''s very nice - check out my cat issues\r\n\r\nwww.saveourcast.blogspot.com', '2011-01-02 19:29:45', 1),
(3, 3, 7, 'I love cats and yet I have none, also holiday spirits? ha ha yeah I had a little laugh at that line.', '2011-01-02 16:28:22', 0),
(4, 2, 8, 'Wow these are amazing. You are better than my professional art teacher. You have an amazing talent and the thing that makes me really happy is the fact that you are using this talent. Well done. :-)\r\nP.S please visit my blog and recommend it to your followers and friends.\r\nWww.person111-problems.blogspot.com', '2011-01-02 19:29:58', 1);

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateur`
--

DROP TABLE IF EXISTS `Utilisateur`;
CREATE TABLE IF NOT EXISTS `Utilisateur` (
  `IdUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `Type` enum('1','2','3') NOT NULL DEFAULT '3',
  `Login` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `TitreBlog` varchar(100) NOT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Sexe` enum('0','1') DEFAULT NULL,
  `DateNaissance` date DEFAULT NULL,
  `Photo` varchar(50) DEFAULT NULL,
  `Adresse` text,
  `CodePostal` varchar(10) DEFAULT NULL,
  `Ville` varchar(25) DEFAULT NULL,
  `Pays` varchar(25) DEFAULT NULL,
  `Telephone` varchar(25) DEFAULT NULL,
  `Mobile` varchar(25) DEFAULT NULL,
  `Fax` varchar(25) DEFAULT NULL,
  `AProposDeMoi` text,
  `DateCreationCompte` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `DerniereDateConnexion` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`IdUtilisateur`),
  UNIQUE KEY `Login` (`Login`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Utilisateur`
--

INSERT INTO `Utilisateur` (`IdUtilisateur`, `Type`, `Login`, `Password`, `Email`, `TitreBlog`, `Prenom`, `Nom`, `Sexe`, `DateNaissance`, `Photo`, `Adresse`, `CodePostal`, `Ville`, `Pays`, `Telephone`, `Mobile`, `Fax`, `AProposDeMoi`, `DateCreationCompte`, `DerniereDateConnexion`) VALUES
(1, '1', 'pgeseraphin', 'tololo', 'pgeseraphin@gmail.com', 'Les Incroyabless', 'Paul Guil-Emeric', 'SERAPHIN', '1', '1984-12-01', NULL, '25,rue pierre charles', '03900', 'Lyon', 'France', '0190129009', '0611787872', '', 'Je suis un grand administrateur!\r\n\r\nAime aussi informatique...', '2011-02-24 18:56:32', '0000-00-00 00:00:00'),
(2, '2', 'seraphin', 'tololo', 'pgeseraphin@gmail.com', 'Essai Seraphin', 'Charles ', 'Jean', '0', '1986-03-25', NULL, '30, ave Jacques Simon', '06200', 'Nice', 'France', '01900293093', '0621092189', '', 'Rude travailleur', '2011-02-24 19:00:09', '0000-00-00 00:00:00'),
(3, '2', 'test1', 'tololo', 'test1@gmail.com', 'L''amour', 'Nicole', 'Pierre', '0', '1986-02-24', NULL, '1, rue l''ile de france', '92140', 'clamart', 'paris', NULL, '0621340943', NULL, 'Plus pres de toi', '2011-02-24 19:02:52', '0000-00-00 00:00:00'),
(4, '', 'test3', 'tololo', 'test3@gmail.com', 'Patience', 'Pierre', 'Paul', '1', '1988-10-18', NULL, '24, rue paris', '06000', 'Nice', 'France', '', '0621098973', '', 'Tres Patient', '2011-02-24 19:06:06', '0000-00-00 00:00:00'),
(5, '2', 'test2', 'cazeauu', 'test2@gmail.com', 'Bon Blog', 'wisner', 'cazeau', '1', '1987-02-12', NULL, '32, rue sully', '06200', 'Nice', 'France', NULL, '0620318367', NULL, 'Tranquille', '2011-02-24 19:08:34', '0000-00-00 00:00:00'),
(6, '1', 'test4', 'tololo', 'test4@gmail.com', 'Le ballon', 'Wadlaire', 'Feron', '1', '1990-02-07', NULL, '21, rue 6', '95323', 'paris', 'France', NULL, '0621090221', NULL, 'Suis un footballer', '2011-02-24 19:11:07', '0000-00-00 00:00:00'),
(7, '3', 'user', 'tololo', 'user@gmail.com', 'Les Sans Papierss', 'Lagrange', 'Joseph', '0', '1987-02-04', NULL, '32, ave pierre', '90332', 'paris', 'France', '0121328943', '0678328832', '', 'J''ai la Tristesse dans mon coeur', '2011-02-24 19:13:31', '0000-00-00 00:00:00'),
(8, '3', 'user2', 'tololo', 'user2@gmail.com', 'THE COBWEBBED ROOM ', 'Julie', 'Jacques', '0', '1987-02-08', NULL, '73, route de la pierre', '90321', 'paris', 'France', NULL, '0621787832', NULL, 'Fatiguee', '2011-02-24 19:15:35', '0000-00-00 00:00:00');
