-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 02 juil. 2021 à 11:43
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sahara_auberge`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(20) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phoneno`, `email`, `cdate`, `approval`) VALUES
(3, 'Oumaima Elkadiri', 2147483647, 'Jordan21@gmail.com', '2021-06-21', 'Autorisé');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'El Kadiri', '1234567'),
(3, 'Bensid', 'ouma123');

-- --------------------------------------------------------

--
-- Structure de la table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `newsletterlog`
--

INSERT INTO `newsletterlog` (`id`, `title`, `subject`, `news`) VALUES
(1, 'asd', 'Send me an Email', 'asd'),
(2, 'reservation', 'acceptation', 'auizzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz  dizuuuuuuuuuuuuuu zdua gyazud  zduidz zdgy'),
(3, 'reservation', 'acceptation', 'azrtyuiop^dfgiuzeodjiezfinjkniuazyuyiknduieopa,ncueiamncmqnvue'),
(4, 'reservation', 'acceptation', 'azrtyuiop^dfgiuzeodjiezfinjkniuazyuyiknduieopa,ncueiamncmqnvue'),
(5, 'reservation', 'acceptation', 'azrtyuiop^dfgiuzeodjiezfinjkniuazyuyiknduieopa,ncueiamncmqnvue'),
(6, 'reservation', 'acceptation', 'jjjjjjjj'),
(7, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` text DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `noofdays`) VALUES
(21, 'Mlle.', 'Fathi', 'Hajar', 'Jumeaux', 1, '2021-06-25', '2021-06-27', 1058.00, 1138.00, 80.00, 'Petit-Déjeuner', 2),
(22, 'Mme.', 'Nassiri', 'Bouchra', 'Jumeaux', 1, '2021-06-24', '2021-06-25', 529.00, 569.00, 40.00, 'Petit-Déjeuner', 1),
(23, 'M.', 'El Kadiri', 'Driss', 'Jumeaux', 1, '2021-06-24', '2021-06-25', 529.00, 609.00, 80.00, 'Demis-Pension', 1),
(24, 'Mme.', 'Nassiri', 'Bouchra', 'Jumeaux', 1, '2021-06-25', '2021-06-30', 2645.00, 3395.00, 750.00, 'Pension Complète', 5),
(25, 'Mme.', 'Bennaji', 'Zehra', 'Double', 1, '2021-06-26', '2021-06-30', 2116.00, 2436.00, 320.00, 'Demis-Pension', 4),
(27, 'Mlle.', 'bensid', 'oumaima', 'Double', 1, '2021-06-27', '2021-06-30', 1587.00, 2037.00, 450.00, 'Pension Complète', 3),
(28, 'Mlle.', 'Nassiri', 'Rajae', 'Double', 1, '2021-06-29', '2021-07-01', 1058.00, 1218.00, 160.00, 'Demis-Pension', 2),
(29, 'Mlle.', 'bensid', 'oumaima', 'Quad', 1, '2021-06-24', '2021-07-01', 7413.00, 7413.00, 0.00, 'Chambre Seulement', 7);

-- --------------------------------------------------------

--
-- Structure de la table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `couleur` varchar(10) NOT NULL,
  `place` varchar(30) NOT NULL,
  `cusid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `room`
--

INSERT INTO `room` (`id`, `type`, `couleur`, `place`, `cusid`) VALUES
(1, 'Double', 'Rouge', 'NotFree', 28),
(2, 'Double', 'Maron', 'NotFree', 28),
(3, 'Jumeaux', 'Bleu', 'Free', 0),
(4, 'Jumeaux', 'Orange', 'Free', 0),
(5, 'Triple', 'Vert', 'Free', 0),
(6, 'Quad', 'Gris', 'NotFree', 29),
(20, 'Double', 'Blanc', 'NotFree', 28);

-- --------------------------------------------------------

--
-- Structure de la table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` text DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`) VALUES
(25, 'Mme.', 'Bennaji', 'Zehra', 'Zehra21@gmail.com', 'Sri Lankan', 'Morocco', '+212610428656', 'Double', '1', 'Demis-Pension', '2021-06-26', '2021-06-30', 'Conform', 4),
(26, 'M.', 'Semghouni', 'Mustapha', 'Semghouni@gmail.com', 'Sri Lankan', 'Morocco', '+212664567215', 'Double', '1', 'Petit-Déjeuner', '2021-06-26', '2021-06-28', 'Not Conform', 2),
(27, 'Mlle.', 'bensid', 'oumaima', 'bensidoumaima@gmail.com', 'Sri Lankan', 'Morocco', '+212664567215', 'Double', '1', 'Pension Complète', '2021-06-27', '2021-06-30', 'Conform', 3),
(28, 'Mlle.', 'Nassiri', 'Rajae', 'Nassiri12@gmail.com', 'Sri Lankan', 'Morocco', '+212611672312', 'Double', '1', 'Demis-Pension', '2021-06-29', '2021-07-01', 'Conform', 2),
(29, 'Mlle.', 'bensid', 'oumaima', 'ahmedoumaima12@gmail.com', 'Sri Lankan', 'Andorra', '+212610428650', 'Quad', '1', 'Chambre Seulement', '2021-06-24', '2021-07-01', 'Conform', 7);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
