-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 19 nov. 2021 à 21:44
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wf3_php_intermediaire_audrey`
--

-- --------------------------------------------------------

--
-- Structure de la table `adverts`
--

CREATE TABLE `adverts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `zipcode` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `reservation_message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adverts`
--

INSERT INTO `adverts` (`id`, `title`, `description`, `zipcode`, `city`, `type`, `price`, `reservation_message`) VALUES
(5, 'Appartement meublé 2 pièces 1 chambre 28 m² Étage 1/–', 'Réf. AN001734 - IMODIRECT vous propose en exclusivité ce joli T2 entièrement rénové aux limites des quartiers Moulins et LB Lebas à Lille.\r\n\r\nAu 1er étage d\'une petite copropriété ,il se compose d\'un salon séjour avec cuisine ouverte dans une pièce très lumineuse grâce aux 3 fenêtres. Puis d\'une chambre avec salle de douche. WC séparé .\r\n\r\nProche des commerces et transports (bus et Métro Porte de Douai à 400 mètres).\r\n\r\nPour toute question ou visite, merci de nous contacter\r\n\r\nFRAIS D\'AGENCE RÉDUITS : 308,00 euros (dossier de location, visite, bail et état des lieux) soit 56,00 euros D\'ÉCONOMIE IMMEDIATE PAR RAPPORT À UNE AGENCE CLASSIQUE', 59000, 'LILLE', 'A louer', '755', ''),
(6, 'Vente appartement 2 pièces 1 chambre 29,1 m² Étage 0/0', 'Beau studio bis comprenant: un séjour, une cuisine équipée ouverte, un bureau, une salle de douche avec wc, terrasse. Chauffage électrique individuel. Mandat n°0067', 59000, 'LILLE', 'A vendre', '54000', ''),
(7, 'Location appartement 2 pièces 1 chambre 51 m² Étage 0/–', 'T2 refait à neuf situé en rez de chaussée au 102 rue Bouchers de Perthes, à proximité de toutes commodités et à deux pas du métro république. Il se compose d\'une pièce de vie parquetée avec une belle cheminée déco et rangements,  une cuisine semie équipée et aménagée (plaques, hotte, évier, éléments de rangements). Vous y trouverez également une chambre et une salle de bain  (douche, meuble vasque et WC) ainsi qu\'une cour privative. Honoraires 13 euros le m2. Lien vers la visite virtuelle (il faut copier / coller le lien dans la barre d\'Url):  Réf. annonce : LG7227', 59000, 'LILLE', 'A louer', '870', ''),
(8, 'Location appartement 2 pièces 1 chambre 35 m² Étage –/–', 'Superbe T1 Bis avec jardin, esprit loft entièrement refait à neuf, situé à 2 pas de la Catho, au 31 place Catinat. Ce T2 comprend une entrée, une pièce de vie avec un coin cuisine équipée, un patio, un coin nuit avec accès sur le jardin privatif, une salle de bain (douche, meuble vasque), WC séparés. Meubles à disposition : 2 penderies, machine à laver, lit escamotable, table et chaises, un salon de jardin. DISPONIBLE A PARTIR DU 7 OCTOBRE 2021 Honoraires: 13/m2   Lien vers visite virtuelle :  Réf. annonce : LG7233', 59000, 'LILLE', 'A louer', '705', ''),
(9, 'Achat appartement 2 pièces 1 chambre 44,4 m² Étage 2/4', 'Lille Quai du Wault, Stéphane Plaza Immobilier Lille Liberté vous propose ce Type 2 avec parking en sous-sol dans une résidence de 2005 offrant une entrée avec placard, un séjour lumineux exposé sud avec cuisine ouverte aménagée et équipée, une chambre avec placard, une salle de bains avec branchement machine à laver. Aucun travaux à prévoir.. A proximité immédiate des commerces, transports, vieux lille Idéal premier achat ou investissement .. dont 4.13 % honoraires TTC à la charge de l\'acquéreur. Copropriété de 39 lots (Pas de procédure en cours). Charges annuelles : 1000.00 euros.', 59000, 'LILLE', 'A vendre', '249900', ''),
(10, 'Achat duplex 2 pièces 1 chambre 35 m² Étage 1/0', 'Stéphane Plaza Immobilier vous propose cet appartement de type deux en duplex de 35m2 vendu loué, idéalement situé entre Wazemmes et Saint Michel, à proximité du Théâtre Sébastopol à Lille. Il comprend un séjour carrelé avec coin cuisine, une chambre à l\'étage, une salle de bains avec baignoire (rafraichissement à prévoir) et WC. Faibles charges. Loyer : 495 euros. (Loué depuis 27ans.) dont 7.50 % honoraires TTC à la charge de l\'acquéreur. Copropriété de 11 lots (Pas de procédure en cours). Charges annuelles : 770.00 euros.', 59000, 'LILLE', 'A vendre', '107500', ''),
(11, 'Achat appartement 2 pièces 1 chambre 66,21 m² Étage 2/–', 'Appartement de 67m2 lumineux, traversant, charme de l\'ancien, beau potentiel dans une une copropriété de 6 lots.. Idéalement situé, hyper centre de Lille, en face des rues piétonnes, coté république, à 1 min à pied du métro république et 5 min à pied de la gare Lille Flandres. . Il se compose d\'un coin nuit, un grand salon et salle a manger, un couloir spacieux avec grande fenêtre double vitrage donnant accès a la cuisine, salle de bain deux fenêtres avec baignoire. . Une cave et une cour commune complète ce bien. . . Parties communes repeintes entièrement en mars 2021. . Faibles charges syndic bénévole : 150 euros/trimestre et taxe foncière 2020 : 607 euros. (dpe en cours ) 295600 euros Honoraires à la charge du vendeur.', 59000, 'LILLE', 'A vendre', '295600', ''),
(12, 'Location appartement 2 pièces 1 chambre 46 m² Étage 3/–', 'Lille Euratechnologies - CHAUFFAGE EAU CHAUDE Inclus ainsi que 2 places de parking en sous-sol numérotées.La Résidence Naturaparc est récente, idéalement située car proche des accès autoroutiers, métro Bois blanc, proche de l\'avenue de Dunkerque et desservie par la ligne de bus N°18 au pied de l\'immeuble.Elle dispose d\'un parc commun, gardien, vidéo surveillance, fibre optique..Ce magnifique T2 se compose d\'une entrée avec placard, d\'un séjour avec cuisine ouverte exposé plein sud de 27 m² ouvrant sur un balcon de 4 m². une chambre de 12 m² et d\'une salle de bains avec fenêtre et branchement lave-linge.Les charges comprennent l\'ensemble de l\'entretient des parties communes, la taxe ordure ménagère ainsi qu\'un contrat robinetterie.', 59000, 'LILLE', 'A louer', '783', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adverts`
--
ALTER TABLE `adverts`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
