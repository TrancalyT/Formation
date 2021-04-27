-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 22 avr. 2021 à 14:38
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `exo_emp_serv`
--

-- --------------------------------------------------------

--
-- Structure de la table `emp2`
--

CREATE TABLE `emp2` (
  `NOEMP` int(4) NOT NULL,
  `NOM` varchar(20) DEFAULT NULL,
  `PRENOM` varchar(20) DEFAULT NULL,
  `EMPLOI` varchar(20) DEFAULT NULL,
  `SUP` int(4) DEFAULT NULL,
  `EMBAUCHE` date DEFAULT NULL,
  `SAL` float(9,2) DEFAULT NULL,
  `COMM` float(9,2) DEFAULT NULL,
  `NOSERV` int(2) NOT NULL,
  `NOPROJ` int(3) DEFAULT NULL,
  `DATE_AJOUT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `emp2`
--

INSERT INTO `emp2` (`NOEMP`, `NOM`, `PRENOM`, `EMPLOI`, `SUP`, `EMBAUCHE`, `SAL`, `COMM`, `NOSERV`, `NOPROJ`, `DATE_AJOUT`) VALUES
(1000, 'LEROY', 'PAUL', 'PRESIDENT', NULL, '1987-10-25', 55005.50, NULL, 1, 103, '2021-04-19'),
(1100, 'DELPIERRE', 'DOROTHEE', 'SECRETAIRE', 1000, '1987-10-25', 12351.20, NULL, 2, 103, '2021-04-19'),
(1101, 'DUHAMEL', 'GIANNI', 'CONSEILLER', 1300, '1987-10-25', 9047.90, NULL, 1, 103, '2021-04-19'),
(1102, 'MINET', 'MARC', 'VENDEUR', 1300, '1987-10-25', 8085.81, 17230.00, 1, 103, '2021-04-19'),
(1104, 'NYS', 'ETIENNE', 'TECHNICIEN', 1200, '1987-10-25', 12342.20, NULL, 1, 103, '2021-04-19'),
(1105, 'DENIMAL', 'JEROME', 'COMPTABLE', 1600, '1987-10-25', 15746.60, NULL, 1, 103, '2021-04-19'),
(1200, 'LEMAIRE', 'GUY', 'DIRECTEUR', 1000, '1987-03-11', 36303.60, NULL, 2, 103, '2021-04-19'),
(1201, 'MARTIN', 'JEAN', 'TECHNICIEN', 1200, '1987-06-25', 11235.10, NULL, 2, 103, '2021-04-19'),
(1202, 'DUPONT', 'JACQUES', 'TECHNICIEN', 1200, '1988-10-30', 10313.00, NULL, 2, 103, '2021-04-19'),
(1300, 'LENOIR', 'GERARD', 'DIRECTEUR', 1000, '1987-04-02', 31353.10, 13071.00, 3, 103, '2021-04-19'),
(1301, 'GERARD', 'ROBERT', 'VENDEUR', 1300, '1999-04-16', 7694.77, 12430.00, 3, 103, '2021-04-19'),
(1303, 'MASURE', 'EMILIE', 'TECHNICIEN', 1200, '1988-06-17', 10451.10, NULL, 3, 103, '2021-04-19'),
(1500, 'DUPONT', 'JEAN', 'DIRECTEUR', 1000, '1987-10-23', 28434.80, NULL, 5, 102, '2021-04-19'),
(1501, 'DUPIRE', 'PIERRE', 'ANALYSTE', 1500, '1984-10-24', 23102.30, NULL, 5, 102, '2021-04-19'),
(1502, 'DURAND', 'BERNARD', 'PROGRAMMEUR', 1200, '1987-07-30', 13201.30, NULL, 5, 102, '2021-04-19'),
(1600, 'LAVARE', 'PAUL', 'DIRECTEUR', 1000, '1991-12-13', 31238.10, NULL, 6, 102, '2021-04-19'),
(1601, 'TRIPOLO', 'ALAIN', 'COMPTABLE', 1700, '1985-09-16', 33003.30, NULL, 6, 102, '2021-04-19'),
(1700, 'KIMBLE', 'ARNOLD', 'NETTOYEUR', 1300, '2021-04-21', 10000.52, 45.12, 7, 101, '2021-04-20'),
(1800, 'CASTEUR', 'CAMILLE', 'LA CULTURE', 1700, '2021-04-13', 104400.52, NULL, 1, 101, '2021-04-19');

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `NOEMP` int(4) NOT NULL,
  `NOM` varchar(20) DEFAULT NULL,
  `PRENOM` varchar(20) DEFAULT NULL,
  `EMPLOI` varchar(20) DEFAULT NULL,
  `SUP` int(4) DEFAULT NULL,
  `EMBAUCHE` date DEFAULT NULL,
  `SAL` float(9,2) DEFAULT NULL,
  `COMM` float(9,2) DEFAULT NULL,
  `NOSERV` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`NOEMP`, `NOM`, `PRENOM`, `EMPLOI`, `SUP`, `EMBAUCHE`, `SAL`, `COMM`, `NOSERV`) VALUES
(1000, 'LEROY', 'PAUL', 'PRESIDENT', NULL, '1987-10-25', 55005.50, NULL, 1),
(1100, 'DELPIERRE', 'DOROTHEE', 'SECRETAIRE', 1000, '1987-10-25', 12351.20, NULL, 1),
(1101, 'DUMONT', 'LOUIS', 'VENDEUR', 1300, '1987-10-25', 9047.90, 0.00, 1),
(1102, 'MINET', 'MARC', 'VENDEUR', 1300, '1987-10-25', 8085.81, 17230.00, 1),
(1104, 'NYS', 'ETIENNE', 'TECHNICIEN', 1200, '1987-10-25', 12342.20, NULL, 1),
(1105, 'DENIMAL', 'JEROME', 'COMPTABLE', 1600, '1987-10-25', 15746.60, NULL, 1),
(1200, 'LEMAIRE', 'GUY', 'DIRECTEUR', 1000, '1987-03-11', 36303.60, NULL, 2),
(1201, 'MARTIN', 'JEAN', 'TECHNICIEN', 1200, '1987-06-25', 11235.10, NULL, 2),
(1202, 'DUPONT', 'JACQUES', 'TECHNICIEN', 1200, '1988-10-30', 10313.00, NULL, 2),
(1300, 'LENOIR', 'GERARD', 'DIRECTEUR', 1000, '1987-04-02', 31353.10, 13071.00, 3),
(1301, 'GERARD', 'ROBERT', 'VENDEUR', 1300, '1999-04-16', 7694.77, 12430.00, 3),
(1303, 'MASURE', 'EMILIE', 'TECHNICIEN', 1200, '1988-06-17', 10451.10, NULL, 3),
(1500, 'DUPONT', 'JEAN', 'DIRECTEUR', 1000, '1987-10-23', 28434.80, NULL, 5),
(1501, 'DUPIRE', 'PIERRE', 'ANALYSTE', 1500, '1984-10-24', 23102.30, NULL, 5),
(1502, 'DURAND', 'BERNARD', 'PROGRAMMEUR', 1500, '1987-07-30', 13201.30, NULL, 5),
(1503, 'DELNATTE', 'LUC', 'PUPITREUR', 1500, '1999-01-15', 8801.01, NULL, 5),
(1600, 'LAVARE', 'PAUL', 'DIRECTEUR', 1000, '1991-12-13', 31238.10, NULL, 6),
(1601, 'CARON', 'ALAIN', 'COMPTABLE', 1600, '1985-09-16', 33003.30, NULL, 6),
(1602, 'DUBOIS', 'JULES', 'VENDEUR', 1300, '1990-12-20', 9520.95, 35535.00, 6),
(1603, 'MOREL', 'ROBERT', 'COMPTABLE', 1600, '1985-07-18', 33003.30, NULL, 6),
(1604, 'HAVET', 'ALAIN', 'VENDEUR', 1300, '1991-01-01', 9388.94, 33415.00, 6),
(1605, 'RICHARD', 'JULES', 'COMPTABLE', 1600, '1985-10-22', 33503.40, NULL, 5),
(1615, 'DUPREZ', 'JEAN', 'BALAYEUR', 1000, '1998-10-22', 6000.60, NULL, 5);

-- --------------------------------------------------------

--
-- Structure de la table `proj`
--

CREATE TABLE `proj` (
  `NOPROJ` int(3) NOT NULL,
  `NOMPROJ` varchar(10) DEFAULT NULL,
  `BUDGET` float(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `proj`
--

INSERT INTO `proj` (`NOPROJ`, `NOMPROJ`, `BUDGET`) VALUES
(101, 'ALPHA', 250000.00),
(102, 'BETA', 175000.00),
(103, 'GAMMA', 1500000.00);

-- --------------------------------------------------------

--
-- Structure de la table `serv2`
--

CREATE TABLE `serv2` (
  `NOSERV` int(2) NOT NULL,
  `SERVICE` varchar(20) DEFAULT NULL,
  `VILLE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `serv2`
--

INSERT INTO `serv2` (`NOSERV`, `SERVICE`, `VILLE`) VALUES
(1, 'DIRECTION', 'PARIS'),
(2, 'LOGISTIQUE', 'SECLIN'),
(3, 'VENTES', 'ROUBAIX'),
(4, 'FORMATION', 'VILLENEUVE D\'ASCQ'),
(5, 'INFORMATIQUE', 'LILLE'),
(6, 'COMPTABILITE', 'LILLE'),
(7, 'TECHNIQUE', 'ROUBAIX');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `NOSERV` int(2) NOT NULL,
  `SERVICE` varchar(20) DEFAULT NULL,
  `VILLE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`NOSERV`, `SERVICE`, `VILLE`) VALUES
(1, 'DIRECTION', 'PARIS'),
(2, 'LOGISTIQUE', 'SECLIN'),
(3, 'VENTES', 'ROUBAIX'),
(4, 'FORMATION', 'VILLENEUVE D\'ASCQ'),
(5, 'INFORMATIQUE', 'LILLE'),
(6, 'COMPTABILITE', 'LILLE'),
(7, 'TECHNIQUE', 'ROUBAIX');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(4) NOT NULL,
  `USER_NAME` varchar(20) NOT NULL,
  `USER_MAIL` varchar(40) NOT NULL,
  `USER_PASSWORD` varchar(255) NOT NULL,
  `USER_PROFIL` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`USER_ID`, `USER_NAME`, `USER_MAIL`, `USER_PASSWORD`, `USER_PROFIL`) VALUES
(1, 'Toodle', 'toodle@toodleit.fr', '$2y$10$fvCq4kl4qnJ24j80D2CU6e4KYNmoNOAFumDDA0NgWGZ31wYpRF3zS', 'SIMPLE USER'),
(2, 'ADMIN', 'admin@admin.fr', '$2y$10$kTVq1E2WTL75221RieJe/eNnmm/Dsj3EbFR/wOQyrrJxJETAEtAIS', 'ADMIN'),
(3, 'Doblo', 'doblo@doblo.com', '$2y$10$qV5405TN6IAZkHb1hKoA3u8EuQ3l8.ahLVBvE41tppkHfm89fBAoC', 'SIMPLE USER'),
(4, 'Boris', 'boris@boris.com', '$2y$10$Qse8Gqmi64PZu1WlRf7zJeI3fUUCK489emkoQ24C4OML58oKROAV2', 'SIMPLE USER');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `emp2`
--
ALTER TABLE `emp2`
  ADD PRIMARY KEY (`NOEMP`),
  ADD KEY `SUP` (`SUP`) USING BTREE,
  ADD KEY `NOPROJ` (`NOPROJ`) USING BTREE,
  ADD KEY `NOSERV` (`NOSERV`) USING BTREE;

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`NOEMP`),
  ADD KEY `NOSERV` (`NOSERV`),
  ADD KEY `SUP` (`SUP`);

--
-- Index pour la table `proj`
--
ALTER TABLE `proj`
  ADD PRIMARY KEY (`NOPROJ`);

--
-- Index pour la table `serv2`
--
ALTER TABLE `serv2`
  ADD PRIMARY KEY (`NOSERV`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`NOSERV`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emp2`
--
ALTER TABLE `emp2`
  ADD CONSTRAINT `emp2_ibfk_1` FOREIGN KEY (`NOSERV`) REFERENCES `serv2` (`NOSERV`),
  ADD CONSTRAINT `emp2_ibfk_2` FOREIGN KEY (`SUP`) REFERENCES `emp2` (`NOEMP`),
  ADD CONSTRAINT `emp2_ibfk_3` FOREIGN KEY (`NOPROJ`) REFERENCES `proj` (`NOPROJ`);

--
-- Contraintes pour la table `employes`
--
ALTER TABLE `employes`
  ADD CONSTRAINT `employes_ibfk_1` FOREIGN KEY (`NOSERV`) REFERENCES `services` (`NOSERV`),
  ADD CONSTRAINT `employes_ibfk_2` FOREIGN KEY (`SUP`) REFERENCES `employes` (`NOEMP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
