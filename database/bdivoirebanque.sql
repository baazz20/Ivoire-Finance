-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 26 juin 2021 à 19:49
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdivoirebanque`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

DROP TABLE IF EXISTS `agence`;
CREATE TABLE IF NOT EXISTS `agence` (
  `idagence` int(11) NOT NULL AUTO_INCREMENT,
  `libagence` varchar(50) NOT NULL,
  `localisationagence` varchar(50) NOT NULL,
  `contactagence` varchar(50) NOT NULL,
  PRIMARY KEY (`idagence`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agence`
--

INSERT INTO `agence` (`idagence`, `libagence`, `localisationagence`, `contactagence`) VALUES
(1, 'IVOIRE BANQUE AG RIVIERA', 'ABIDNAN/COCODY/RIVIERA', '2140117885'),
(2, 'IVOIRE BANQUE AG BINGERVILLE', 'ABIDJAN/BINGERVILLE', '2775545652');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int(11) NOT NULL AUTO_INCREMENT,
  `cni_passport` varchar(50) NOT NULL,
  `nomclient` varchar(50) NOT NULL,
  `prenomclient` varchar(50) NOT NULL,
  `datenaiss` date NOT NULL,
  `lieunaiss` varchar(10) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `profession` varchar(25) NOT NULL,
  `lienphoto` varchar(100) NOT NULL,
  `liensignature` varchar(100) NOT NULL,
  `idsexe` int(11) NOT NULL,
  PRIMARY KEY (`idclient`),
  KEY `idsexe` (`idsexe`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idclient`, `cni_passport`, `nomclient`, `prenomclient`, `datenaiss`, `lieunaiss`, `telephone`, `email`, `profession`, `lienphoto`, `liensignature`, `idsexe`) VALUES
(1, '0000252515855', 'AMADOU', 'YOHAN FARID EMMANUEL', '2001-04-24', 'ABIDJAN', '+225 0707488454', 'amadouyohan@gmail.com', 'ETUDIANT', 'Assets\\Photos\\Photo_amadou_yohan', 'Assets\\Signatures\\Signatures_client\\Signature_amadou_yohan', 1),
(2, '0000252515855', 'ASSEMIEN', 'HYACYTHE', '2000-05-15', 'ABIDJAN', '+225 0142050556', 'cyntheassemien@gmail.com', 'ETUDIANT', 'Assets\\Photos\\Photo_assemien', 'Assets\\Signatures\\Signatures_client\\Signature_assemien', 1),
(3, '0002525489610', 'YAO ', 'KAN MAURICE', '2000-01-01', 'BOUAKE', '+225 0748845162', 'ykf5@gmail.com', 'ETUDINAT', 'Assets\\Photos\\Photo_yao_kan', 'Assets\\Signatures\\Signatures_client\\Signature_yao_kan', 1),
(4, '000225459875', 'ADIKO', 'AMON PIERRE RYAN', '1995-10-15', 'BONOUA', '+225 0102455489', 'amonryan@gmail.com', 'ENSEIGNANT', 'Assets\\Photos\\Photo_adiko_ryan', 'Assets\\Signatures\\Signatures_client\\Signature_adiko_ryan', 1),
(5, '000225669875', 'KONAN', 'LOIS NATHANAEL', '1999-10-15', 'ABENGOUROU', '+225 0103365489', 'nanko93@gmail.com', 'ETUDIANT', 'Assets\\Photos\\Photo_konan_lois', 'Assets\\Signatures\\Signatures_client\\Signature_konan_lois', 1);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `numerocpte` int(11) NOT NULL AUTO_INCREMENT,
  `dateouverturecpte` date NOT NULL,
  `visaouverturecpte` varchar(50) NOT NULL,
  `datefermeturecpte` varchar(50) NOT NULL,
  `visafermeturecpte` varchar(50) NOT NULL,
  `solde` varchar(50) NOT NULL,
  `obscpte` varchar(50) NOT NULL,
  `idclient` int(11) NOT NULL,
  PRIMARY KEY (`numerocpte`),
  KEY `idclient` (`idclient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `modeop`
--

DROP TABLE IF EXISTS `modeop`;
CREATE TABLE IF NOT EXISTS `modeop` (
  `idmodeop` int(11) NOT NULL AUTO_INCREMENT,
  `libmodeop` varchar(50) NOT NULL,
  PRIMARY KEY (`idmodeop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `operation`
--

DROP TABLE IF EXISTS `operation`;
CREATE TABLE IF NOT EXISTS `operation` (
  `numerop` int(11) NOT NULL AUTO_INCREMENT,
  `datop` date NOT NULL,
  `montantop` varchar(50) NOT NULL,
  `visaopobsop` varchar(50) NOT NULL,
  `obsop` varchar(50) NOT NULL,
  `numerocpte` int(50) NOT NULL,
  `idmodeop` int(11) NOT NULL,
  `idtypeop` int(11) NOT NULL,
  `idagence` int(11) NOT NULL,
  PRIMARY KEY (`numerop`),
  KEY `numerocpte` (`numerocpte`),
  KEY `idtypeop` (`idtypeop`),
  KEY `idmodeop` (`idmodeop`),
  KEY `idagence` (`idagence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sexe`
--

DROP TABLE IF EXISTS `sexe`;
CREATE TABLE IF NOT EXISTS `sexe` (
  `idsexe` int(11) NOT NULL AUTO_INCREMENT,
  `libsexe` varchar(1) NOT NULL,
  PRIMARY KEY (`idsexe`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sexe`
--

INSERT INTO `sexe` (`idsexe`, `libsexe`) VALUES
(1, 'M'),
(2, 'F');

-- --------------------------------------------------------

--
-- Structure de la table `typeoperation`
--

DROP TABLE IF EXISTS `typeoperation`;
CREATE TABLE IF NOT EXISTS `typeoperation` (
  `idtypeop` int(11) NOT NULL AUTO_INCREMENT,
  `libtypeop` varchar(50) NOT NULL,
  PRIMARY KEY (`idtypeop`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typeoperation`
--

INSERT INTO `typeoperation` (`idtypeop`, `libtypeop`) VALUES
(1, 'VERSEMENT'),
(2, 'RETRAIT');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `compte_ibfk_1` FOREIGN KEY (`idclient`) REFERENCES `client` (`idclient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `operation`
--
ALTER TABLE `operation`
  ADD CONSTRAINT `operation_ibfk_1` FOREIGN KEY (`numerocpte`) REFERENCES `compte` (`numerocpte`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `operation_ibfk_2` FOREIGN KEY (`idtypeop`) REFERENCES `typeoperation` (`idtypeop`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `operation_ibfk_3` FOREIGN KEY (`idmodeop`) REFERENCES `modeop` (`idmodeop`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `operation_ibfk_4` FOREIGN KEY (`idagence`) REFERENCES `agence` (`idagence`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
