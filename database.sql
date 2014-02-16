-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 22 Janvier 2014 à 16:43
-- Version du serveur: 5.5.33
-- Version de PHP: 5.4.24-1~dotdeb.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bondecommande`
--
-- Login pour l'application
-- login admin
-- mot de passe admin
-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `siteinternet` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contenu de la table `customers`
--

-- --------------------------------------------------------

--
-- Structure de la table `orderforms`
--

CREATE TABLE IF NOT EXISTS `orderforms` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `numorder` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_id` int(255) NOT NULL,
  `etat` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contenu de la table `orderforms`
--


-- --------------------------------------------------------

--
-- Structure de la table `orderforms_products`
--

CREATE TABLE IF NOT EXISTS `orderforms_products` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `orderform_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `amount` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tva` float(12,4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contenu de la table `orderforms_products`
--


-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contenu de la table `products`
--


-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contenu de la table `services`
--


-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone_fixe` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `telephone_mobile` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `adresse_postale` text COLLATE utf8_unicode_ci NOT NULL,
  `code_postal` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `signature` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `nom`, `prenom`, `username`, `password`, `mail`, `telephone_fixe`, `telephone_mobile`, `adresse_postale`, `code_postal`, `ville`, `signature`) VALUES
(1, 'Administrateur', 'admin', 'admin', 'admin', 'f14362cd37c3bc78f6ebb0d78547557fa924fb82', 'admin@admin.fr', '0000000000', '0000000000', 'ah', '0000', 'ah', 'coucou');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Structure de la table `numberorders`
--

CREATE TABLE IF NOT EXISTS `numberorders` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `year` int(4) NOT NULL,
  `num` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contenu de la table `numberorders`
--

INSERT INTO  `numberorders` (`id` , `year` , `num` ) VALUES
(NULL ,  '2014',  '000000' );

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;