-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 10 août 2020 à 14:12
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `banquepeupleCodeIgniter`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `id_responsable_compte` int(11) DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_inscription` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type_client` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `id_responsable_compte`, `adresse`, `telephone`, `email`, `date_inscription`, `type_client`) VALUES
(1, 1, 'Dakar', '773511003', 'mordioptaiba@gmail.com', '2020-08-08 06:48:33', 'Non Salarié'),
(2, 1, 'Yoff', '123456789', 'ndiaye@gmail.com', '2020-08-08 06:53:53', 'Non Salarié'),
(3, 1, 'Taïba Ndiaye', '123456789', 'momo@gmail.com', '2020-08-09 08:58:18', 'Salarié'),
(4, 1, 'Dakar', '331234567', 'simplon@simplon.co', '2020-08-09 10:27:14', 'Moral');

-- --------------------------------------------------------

--
-- Structure de la table `client_moral`
--

CREATE TABLE `client_moral` (
  `id` int(11) NOT NULL,
  `id_clients` int(11) DEFAULT NULL,
  `nom_entreprise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `identifiant_entreprise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `raison_social` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `client_moral`
--

INSERT INTO `client_moral` (`id`, `id_clients`, `nom_entreprise`, `identifiant_entreprise`, `raison_social`) VALUES
(1, 4, 'Simplon', 'S100', 'SimplonCO');

-- --------------------------------------------------------

--
-- Structure de la table `client_non_salarie`
--

CREATE TABLE `client_non_salarie` (
  `id` int(11) NOT NULL,
  `id_clients` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `carte_identite` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `client_non_salarie`
--

INSERT INTO `client_non_salarie` (`id`, `id_clients`, `nom`, `prenom`, `carte_identite`) VALUES
(1, 1, 'DIOP', 'Mor', '100'),
(2, 2, 'NDIAYE', 'Assane', '200');

-- --------------------------------------------------------

--
-- Structure de la table `client_salarie`
--

CREATE TABLE `client_salarie` (
  `id` int(11) NOT NULL,
  `id_clients` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `carte_identite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salaire` decimal(10,0) NOT NULL,
  `nom_employeur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse_entreprise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `raison_social` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `identifiant_entreprise` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `client_salarie`
--

INSERT INTO `client_salarie` (`id`, `id_clients`, `nom`, `prenom`, `carte_identite`, `profession`, `salaire`, `nom_employeur`, `adresse_entreprise`, `raison_social`, `identifiant_entreprise`) VALUES
(1, 3, 'DIOP', 'Modou', '300', 'Développeur Web/Mobile', '400000', 'Simplon', 'Dakar', 'SimplonCO', 'S100');

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `id` int(11) NOT NULL,
  `id_clients` int(11) DEFAULT NULL,
  `numero_compte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cle_rib` int(11) NOT NULL,
  `solde` decimal(10,0) NOT NULL,
  `date_ouverture` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numero_agence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `comptes`
--

INSERT INTO `comptes` (`id`, `id_clients`, `numero_compte`, `cle_rib`, `solde`, `date_ouverture`, `numero_agence`) VALUES
(1, 1, '1111', 11, '250000', '2020-08-08 06:48:33', 1),
(2, 2, '2222', 22, '300000', '2020-08-08 06:53:53', 2),
(3, 3, '3333', 33, '300000', '2020-08-09 08:58:18', 3),
(4, 4, '4444', 44, '5000000', '2020-08-09 10:27:14', 4);

-- --------------------------------------------------------

--
-- Structure de la table `compte_bloque`
--

CREATE TABLE `compte_bloque` (
  `id` int(11) NOT NULL,
  `id_comptes` int(11) DEFAULT NULL,
  `frais_ouverture` decimal(10,0) NOT NULL,
  `montant_remuneration` decimal(10,0) NOT NULL,
  `duree_blocage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `compte_bloque`
--

INSERT INTO `compte_bloque` (`id`, `id_comptes`, `frais_ouverture`, `montant_remuneration`, `duree_blocage`) VALUES
(1, 2, '10000', '3000', 13);

-- --------------------------------------------------------

--
-- Structure de la table `compte_courant`
--

CREATE TABLE `compte_courant` (
  `id` int(11) NOT NULL,
  `id_comptes` int(11) DEFAULT NULL,
  `agios` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `compte_courant`
--

INSERT INTO `compte_courant` (`id`, `id_comptes`, `agios`) VALUES
(1, 4, '5000');

-- --------------------------------------------------------

--
-- Structure de la table `compte_epargne`
--

CREATE TABLE `compte_epargne` (
  `id` int(11) NOT NULL,
  `id_comptes` int(11) DEFAULT NULL,
  `frais_ouverture` decimal(10,0) NOT NULL,
  `montant_remuneration` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `compte_epargne`
--

INSERT INTO `compte_epargne` (`id`, `id_comptes`, `frais_ouverture`, `montant_remuneration`) VALUES
(1, 1, '10000', '3000'),
(2, 3, '10000', '3000');

-- --------------------------------------------------------

--
-- Structure de la table `etat_compte`
--

CREATE TABLE `etat_compte` (
  `id` int(11) NOT NULL,
  `id_compte` int(11) NOT NULL,
  `etat_compte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_changement_etat` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `etat_compte`
--

INSERT INTO `etat_compte` (`id`, `id_compte`, `etat_compte`, `date_changement_etat`) VALUES
(1, 1, 'Actif', '2020-08-08 06:48:33'),
(2, 2, 'Actif', '2020-08-08 06:53:53'),
(3, 3, 'Actif', '2020-08-09 08:58:18'),
(4, 4, 'Actif', '2020-08-09 10:27:14');

-- --------------------------------------------------------

--
-- Structure de la table `responsable_compte`
--

CREATE TABLE `responsable_compte` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mot_de_passe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_employes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `responsable_compte`
--

INSERT INTO `responsable_compte` (`id`, `login`, `mot_de_passe`, `id_employes`) VALUES
(1, 'res', 'passer', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C82E74EF09719E` (`id_responsable_compte`);

--
-- Index pour la table `client_moral`
--
ALTER TABLE `client_moral`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_83FF4A8DE558704` (`id_clients`);

--
-- Index pour la table `client_non_salarie`
--
ALTER TABLE `client_non_salarie`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_4FC7282CDE558704` (`id_clients`);

--
-- Index pour la table `client_salarie`
--
ALTER TABLE `client_salarie`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_D0B37E67DE558704` (`id_clients`);

--
-- Index pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_56735801DE558704` (`id_clients`);

--
-- Index pour la table `compte_bloque`
--
ALTER TABLE `compte_bloque`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_2B4331DF88EEF171` (`id_comptes`);

--
-- Index pour la table `compte_courant`
--
ALTER TABLE `compte_courant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_73F05D6C88EEF171` (`id_comptes`);

--
-- Index pour la table `compte_epargne`
--
ALTER TABLE `compte_epargne`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_19FDB51A88EEF171` (`id_comptes`);

--
-- Index pour la table `etat_compte`
--
ALTER TABLE `etat_compte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_compte` (`id_compte`);

--
-- Index pour la table `responsable_compte`
--
ALTER TABLE `responsable_compte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `client_moral`
--
ALTER TABLE `client_moral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `client_non_salarie`
--
ALTER TABLE `client_non_salarie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `client_salarie`
--
ALTER TABLE `client_salarie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `comptes`
--
ALTER TABLE `comptes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `compte_bloque`
--
ALTER TABLE `compte_bloque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `compte_courant`
--
ALTER TABLE `compte_courant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `compte_epargne`
--
ALTER TABLE `compte_epargne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `etat_compte`
--
ALTER TABLE `etat_compte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `responsable_compte`
--
ALTER TABLE `responsable_compte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `FK_C82E74EF09719E` FOREIGN KEY (`id_responsable_compte`) REFERENCES `responsable_compte` (`id`);

--
-- Contraintes pour la table `client_moral`
--
ALTER TABLE `client_moral`
  ADD CONSTRAINT `FK_83FF4A8DE558704` FOREIGN KEY (`id_clients`) REFERENCES `clients` (`id`);

--
-- Contraintes pour la table `client_non_salarie`
--
ALTER TABLE `client_non_salarie`
  ADD CONSTRAINT `FK_4FC7282CDE558704` FOREIGN KEY (`id_clients`) REFERENCES `clients` (`id`);

--
-- Contraintes pour la table `client_salarie`
--
ALTER TABLE `client_salarie`
  ADD CONSTRAINT `FK_D0B37E67DE558704` FOREIGN KEY (`id_clients`) REFERENCES `clients` (`id`);

--
-- Contraintes pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD CONSTRAINT `FK_56735801DE558704` FOREIGN KEY (`id_clients`) REFERENCES `clients` (`id`);

--
-- Contraintes pour la table `compte_bloque`
--
ALTER TABLE `compte_bloque`
  ADD CONSTRAINT `FK_2B4331DF88EEF171` FOREIGN KEY (`id_comptes`) REFERENCES `comptes` (`id`);

--
-- Contraintes pour la table `compte_courant`
--
ALTER TABLE `compte_courant`
  ADD CONSTRAINT `FK_73F05D6C88EEF171` FOREIGN KEY (`id_comptes`) REFERENCES `comptes` (`id`);

--
-- Contraintes pour la table `compte_epargne`
--
ALTER TABLE `compte_epargne`
  ADD CONSTRAINT `FK_19FDB51A88EEF171` FOREIGN KEY (`id_comptes`) REFERENCES `comptes` (`id`);

--
-- Contraintes pour la table `etat_compte`
--
ALTER TABLE `etat_compte`
  ADD CONSTRAINT `id_compte` FOREIGN KEY (`id_compte`) REFERENCES `comptes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
