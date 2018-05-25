-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 25 mai 2018 à 19:38
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `reconversionpro`
--

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pf_agenda_rdv`
--

CREATE TABLE `pf_agenda_rdv` (
  `id` int(11) NOT NULL,
  `timeslot_id` int(11) NOT NULL,
  `candidat_id` int(11) NOT NULL,
  `typeRDV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `pf_agenda_rdv`
--

INSERT INTO `pf_agenda_rdv` (`id`, `timeslot_id`, `candidat_id`, `typeRDV`, `status`) VALUES
(2, 3, 1, 'physique', 'Refuse'),
(3, 7, 5, 'skype', 'Validate'),
(5, 6, 5, 'skype', 'En attente');

-- --------------------------------------------------------

--
-- Structure de la table `pf_agenda_time_slot`
--

CREATE TABLE `pf_agenda_time_slot` (
  `id` int(11) NOT NULL,
  `conseille_id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `pf_agenda_time_slot`
--

INSERT INTO `pf_agenda_time_slot` (`id`, `conseille_id`, `date`) VALUES
(1, 1, '2017-06-17 00:00:00'),
(2, 1, '2017-06-20 18:00:00'),
(3, 1, '2018-06-20 18:00:00'),
(5, 3, '2018-06-04 15:00:00'),
(6, 3, '2018-06-01 09:00:00'),
(7, 3, '2018-05-27 17:00:00'),
(8, 3, '2017-06-29 17:00:00'),
(9, 3, '2018-06-04 13:00:00'),
(10, 3, '2018-06-11 16:00:00'),
(11, 3, '2018-01-11 10:00:00'),
(12, 3, '2018-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `pf_agenda_user`
--

CREATE TABLE `pf_agenda_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `pf_agenda_user`
--

INSERT INTO `pf_agenda_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'fiquet', 'fiquet', 'fiquet@gmail.com', 'fiquet@gmail.com', 1, NULL, '$2y$13$e3AXHmo883TXbybhxtnL5eGJAnzNbQf/KsDfjQCg6kIEc5kUyRaZK', '2018-05-23 20:57:37', NULL, NULL, 'a:0:{}'),
(2, 'jerome', 'jerome', 'jerome@gmail.com', 'jerome@gmail.com', 1, NULL, '$2y$13$kWQ8XL2vQ82hXIHa/iO2WexANqB4SSBIOoMvpKVpRPUUqSkPJcPhS', '2018-05-23 20:58:56', NULL, NULL, 'a:0:{}'),
(3, 'admin', 'admin', 'admin@admin.admin', 'admin@admin.admin', 1, NULL, '$2y$13$S7qsvxU7Xhd/dgK8BUssCeb05sM9.DPmOwiWj5R6LdNZe3/Djabt6', '2018-05-25 19:38:09', NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}'),
(4, 'root', 'root', 'root@root.roor', 'root@root.roor', 1, NULL, '$2y$13$d5Kjca6kDhQOrJOsQJlAmuuYeSft/Pegy.ELod/iRlqXC0.MxcMKe', '2018-05-23 21:23:34', NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}'),
(5, 'client', 'client', 'client@client.com', 'client@client.com', 1, NULL, '$2y$13$wVMNtUZR8Xscd4pom4iEZuBZXHeBcovNv7kIHSpZQ1fz6VFM9W2mG', '2018-05-25 19:36:28', NULL, NULL, 'a:0:{}');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- Index pour la table `pf_agenda_rdv`
--
ALTER TABLE `pf_agenda_rdv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_97D70A99F920B9E9` (`timeslot_id`),
  ADD KEY `IDX_97D70A998D0EB82` (`candidat_id`);

--
-- Index pour la table `pf_agenda_time_slot`
--
ALTER TABLE `pf_agenda_time_slot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_60324C3BD11C382D` (`conseille_id`);

--
-- Index pour la table `pf_agenda_user`
--
ALTER TABLE `pf_agenda_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1CCFA992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_1CCFA9A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_1CCFA9C05FB297` (`confirmation_token`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pf_agenda_rdv`
--
ALTER TABLE `pf_agenda_rdv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `pf_agenda_time_slot`
--
ALTER TABLE `pf_agenda_time_slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `pf_agenda_user`
--
ALTER TABLE `pf_agenda_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `pf_agenda_rdv`
--
ALTER TABLE `pf_agenda_rdv`
  ADD CONSTRAINT `FK_97D70A998D0EB82` FOREIGN KEY (`candidat_id`) REFERENCES `pf_agenda_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_97D70A99F920B9E9` FOREIGN KEY (`timeslot_id`) REFERENCES `pf_agenda_time_slot` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `pf_agenda_time_slot`
--
ALTER TABLE `pf_agenda_time_slot`
  ADD CONSTRAINT `FK_60324C3BD11C382D` FOREIGN KEY (`conseille_id`) REFERENCES `pf_agenda_user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
