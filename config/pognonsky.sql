-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Dim 06 Janvier 2013 à 13:28
-- Version du serveur: 5.5.28
-- Version de PHP: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `pognonsky`
--

-- --------------------------------------------------------

--
-- Structure de la table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `ACCOUNT` text COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `PK_MPM_acct` (`id`),
  KEY `FK_MPM_acct` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=127871170014014 ;

-- --------------------------------------------------------

--
-- Structure de la table `acos`
--

DROP TABLE IF EXISTS `acos`;
CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=118 ;

-- --------------------------------------------------------

--
-- Structure de la table `active_sessions`
--

DROP TABLE IF EXISTS `active_sessions`;
CREATE TABLE IF NOT EXISTS `active_sessions` (
  `sid` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `val` text COLLATE utf8_unicode_ci,
  `changed` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`name`,`sid`),
  KEY `changed` (`changed`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `aros`
--

DROP TABLE IF EXISTS `aros`;
CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Structure de la table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `_read` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `_update` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `_delete` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `bilans`
--

DROP TABLE IF EXISTS `bilans`;
CREATE TABLE IF NOT EXISTS `bilans` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `compte_id` int(12) NOT NULL,
  `lib` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `annee` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='bilans annuels' AUTO_INCREMENT=86 ;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cat_idx` (`published`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `ccp`
--

DROP TABLE IF EXISTS `ccp`;
CREATE TABLE IF NOT EXISTS `ccp` (
  `date` text COLLATE utf8_unicode_ci NOT NULL,
  `Libelle` text COLLATE utf8_unicode_ci NOT NULL,
  `Credit` text COLLATE utf8_unicode_ci NOT NULL,
  `Debit` text COLLATE utf8_unicode_ci NOT NULL,
  `Jourdevaleur` text COLLATE utf8_unicode_ci NOT NULL,
  `Soldes` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='importation bank account csv extract';

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

DROP TABLE IF EXISTS `comptes`;
CREATE TABLE IF NOT EXISTS `comptes` (
  `id` int(12) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `lib` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `PK_MPM_acct` (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `FK_MPM_acct` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `comptes_devises`
--

DROP TABLE IF EXISTS `comptes_devises`;
CREATE TABLE IF NOT EXISTS `comptes_devises` (
  `id` int(12) NOT NULL,
  `compte_id` int(12) NOT NULL,
  `devise_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='association comtpes - devises';

-- --------------------------------------------------------

--
-- Structure de la table `devises`
--

DROP TABLE IF EXISTS `devises`;
CREATE TABLE IF NOT EXISTS `devises` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) NOT NULL,
  `short` varchar(3) NOT NULL,
  `change` float(3,2) NOT NULL COMMENT 'taux de change',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='devises monétaires' AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `impots`
--

DROP TABLE IF EXISTS `impots`;
CREATE TABLE IF NOT EXISTS `impots` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `Annee` int(4) NOT NULL,
  `Revenus` int(9) NOT NULL,
  `Fortune` int(9) NOT NULL,
  `AssuranceVie` int(9) NOT NULL,
  `Immobilier` int(9) NOT NULL,
  `rem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='tous les mouvements par année' AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Structure de la table `insurances`
--

DROP TABLE IF EXISTS `insurances`;
CREATE TABLE IF NOT EXISTS `insurances` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `insurance_id` int(11) DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `reference_number` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `amount` float DEFAULT NULL,
  `sent_to_insurance` date DEFAULT NULL,
  `refund` float DEFAULT NULL,
  `refund_date` date DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `journals`
--

DROP TABLE IF EXISTS `journals`;
CREATE TABLE IF NOT EXISTS `journals` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `cc` int(4) NOT NULL DEFAULT '0',
  `cd` int(4) NOT NULL DEFAULT '0',
  `mont` decimal(10,2) NOT NULL DEFAULT '0.00',
  `lib` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=836 ;

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Structure de la table `migros`
--

DROP TABLE IF EXISTS `migros`;
CREATE TABLE IF NOT EXISTS `migros` (
  `date` text COLLATE utf8_unicode_ci NOT NULL,
  `Libelle` text COLLATE utf8_unicode_ci NOT NULL,
  `Credit` text COLLATE utf8_unicode_ci NOT NULL,
  `Debit` text COLLATE utf8_unicode_ci NOT NULL,
  `Jourdevaleur` text COLLATE utf8_unicode_ci NOT NULL,
  `Soldes` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='ccp';

-- --------------------------------------------------------

--
-- Structure de la table `operations`
--

DROP TABLE IF EXISTS `operations`;
CREATE TABLE IF NOT EXISTS `operations` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `NUMID` text COLLATE utf8_unicode_ci NOT NULL,
  `TEMPID` int(1) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `DATES` date NOT NULL,
  `CAT` bigint(20) NOT NULL,
  `third_id` bigint(20) NOT NULL,
  `COMMENTS` text COLLATE utf8_unicode_ci NOT NULL,
  `IMP` blob NOT NULL,
  `account_id` bigint(20) NOT NULL,
  UNIQUE KEY `PK_MPM_op` (`id`),
  KEY `FK_MPM_op` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=127871170014771 ;

-- --------------------------------------------------------

--
-- Structure de la table `parts`
--

DROP TABLE IF EXISTS `parts`;
CREATE TABLE IF NOT EXISTS `parts` (
  `CATID` bigint(20) NOT NULL,
  `USERID` bigint(20) NOT NULL,
  `CAT` text COLLATE utf8_unicode_ci NOT NULL,
  KEY `FK_MPM_part` (`USERID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `raiffeisen`
--

DROP TABLE IF EXISTS `raiffeisen`;
CREATE TABLE IF NOT EXISTS `raiffeisen` (
  `date` text COLLATE latin1_bin NOT NULL,
  `Libelle` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cd` text COLLATE latin1_bin NOT NULL,
  `bal` text COLLATE latin1_bin NOT NULL,
  `dateval` text COLLATE latin1_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin COMMENT='importation bank account csv extract';

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `created_by` (`created_by`),
  KEY `modified_by` (`modified_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Structure de la table `tendances`
--

DROP TABLE IF EXISTS `tendances`;
CREATE TABLE IF NOT EXISTS `tendances` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `Annee` int(4) NOT NULL,
  `Revenus` int(9) NOT NULL,
  `Fortune` int(9) NOT NULL,
  `Diff` int(9) NOT NULL,
  `Mens` int(9) NOT NULL,
  `AssuranceVie` int(9) NOT NULL,
  `Immobilier` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='tous les mouvements par année' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `thirds`
--

DROP TABLE IF EXISTS `thirds`;
CREATE TABLE IF NOT EXISTS `thirds` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `CATID` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `THIRD` text COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `PK_MPM_third` (`id`),
  KEY `FK_MPM_third_1` (`CATID`),
  KEY `FK_MPM_third_2` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=127871170014148 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `organisation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prefered_language` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  KEY `modified_by` (`modified_by`),
  KEY `created_by` (`created_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Structure de la table `weblinks`
--

DROP TABLE IF EXISTS `weblinks`;
CREATE TABLE IF NOT EXISTS `weblinks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `url` varchar(250) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `archived` tinyint(1) NOT NULL DEFAULT '0',
  `approved` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `catid` (`category_id`,`published`,`archived`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
