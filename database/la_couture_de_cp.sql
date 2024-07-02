-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 03 juil. 2024 à 00:28
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `la_couture_de_cp`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date_pub` date NOT NULL,
  `id_image` int(11) NOT NULL,
  `chemin_page` varchar(512) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `date_pub`, `id_image`, `chemin_page`, `description`) VALUES
(1, 'Mon voyage à Paris', '2022-07-16', 3, 'voyage_paris.html', 'En Juillet 2022, je suis partie deux semaines à Paris afin de faire un stage d\'été à l\'IFM (l\'Institut Français de la Mode)');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom`) VALUES
(1, 'Vêtement'),
(2, 'Sac'),
(3, 'Accessoire');

-- --------------------------------------------------------

--
-- Structure de la table `creation`
--

CREATE TABLE `creation` (
  `id_creation` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `taille` varchar(32) DEFAULT NULL,
  `tps_creation` int(11) DEFAULT NULL,
  `surface_tissu` varchar(64) DEFAULT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `creation`
--

INSERT INTO `creation` (`id_creation`, `nom`, `description`, `taille`, `tps_creation`, `surface_tissu`, `id_categorie`) VALUES
(2, 'Robe Lune', 'Robe longue bleu marine à manches longue avec un style \"princesse\"', '38', 10, '3m', 1),
(3, 'Robe Bridgette', 'Robe chemise bleu à motifs avec des manches chauve-souris', '44', 10, '3m', 1),
(4, 'Combishort', 'Combishort avec un short noir et un haut blanc à motifs de plumes noires', '38', 12, '2m', 1),
(5, 'Veste', 'Veste\r\nVeste noire à broderies au fil noir sur l\'endroit du tissu avec un tissu jaune sur l\'envers', '44', 14, '2.5m', 1),
(6, 'Haut de la robe Eve', 'Cache-cœur à petits carreaux bleu inspiré du haut de la robe Eve à manches papillons', '40', 7, '2m', 1),
(7, 'Chemise Sandalette', 'Chemise bleu turquoise fleurie sans manches', '44', 4, '1m', 1),
(8, 'T-shirt twisté', 'T-shirt en jersey blanc à motifs de feuilles rouges avec des manches twistées', '38', 4, '1.5m', 1),
(9, 'Top minimaliste', 'Top minimaliste bleu clair à motifs avec un biais marron à l\'encolure', '44', 3, '1m', 1),
(10, 'La combinaison', 'Combinaison pantalon bleu marine à boutons argentés', '38', 15, '3m', 1),
(11, 'Jupe portefeuille plissée', 'Jupe portefeuille plissée bleu inspiration Dior cousu à l\'institut français de la mode à Paris', '36-38', 6, '1.5m', 1),
(12, 'Chemise Sandalette', 'Chemise noir avec des perroquets sans manches', '38', 4, '1m', 1),
(13, 'Robe Bridgette', 'Robe chemise blanche fleurie à manches chauve-souris', '38', 10, '3m', 1),
(14, 'Short de ville', 'Short de ville bleu turquoise fleuri sans poches', '38', 4, '1m', 1),
(15, 'Robe Eve', 'Robe portefeuille bleu turquoise fleurie avec des manches papillons', '38', 12, '2.5m', 1),
(16, 'Jupe en cercle', 'Jupe en cercle rose saumon qui fait très années 60', '38', 3, '2m', 1),
(17, 'Robe à manches pagodes', 'Robe à manches pagodes bleue marine avec des cerises', '44', 8, '2.5m', 1),
(18, 'Combinaison stretch', 'Combinaison pantalon stretch blanche à grosses fleurs multicolores\r\n\r\n', '14ans', 8, '2m', 1),
(19, 'Robe à emmanchures américaines', 'Robe à emmanchures américaines bleue claire avec des oiseaux', '14ans', 6, '1.5m', 1),
(20, 'Tunique', 'Tunique légère rouge à motifs blancs', '44', 8, '1.5m', 1),
(21, 'T-shirt de sport', 'T-shirt de sport turquoise stretch', '36-38', 3, '1m', 1),
(22, 'Robe à manches pagodes', 'Robe à manches pagodes bleue marine avec des pâquerettes blanches', '38', 8, '2m', 1),
(23, 'Combinaison Pantalon', 'Combinaison Pantalon noir à motifs florales avec un tissu viscose', '16ans', 8, '3m', 1),
(24, 'Jupe portefeuille', 'Jupe portefeuille réversible bleue marine avec une poche avant', '13ans', 8, '1.5m', 1),
(25, 'Cape', 'Cape turquoise à capuche avec de la fausse fourrure', '13ans', 8, '2m', 1),
(26, 'Tunique', 'Tunique légère blanche avec des plumes', '38', 8, '1.5m', 1),
(27, 'Robe longue', 'Robe longue stretch avec des bandes de 2m pour changer la position des manches', '36', 8, '4m', 1),
(28, 'Robe de Golf', 'Robe de Golf en tissu \"polo\" un peu stretch', '14ans', 10, '2m', 1),
(29, 'Combinaison Stretch', 'Combinaison pantalon bleue marine à motif avec un tissu stretch', '14ans', 7, '2m', 1),
(30, 'Chemise', 'Transformation d\'une chemise trop grande pour homme en une chemise pour femme', '34-36', 8, 'Chemise pour homme taille L-XL', 1),
(31, 'Robe à emmanchures américaines', 'Robe verte émeraude à carrés noir à emmanchures américaines', '16ans', 6, '1.5m', 1),
(32, 'T-shirt de sport', 'T-shirt de sport stretch à imprimé marinière', '38', 3, '1m', 1),
(33, 'Veston', 'Veston constitué de satin bordeaux et d\'un imprimé coton', 'XL', 10, '1.5m x2', 1),
(34, 'Cape', 'Cape réversible imperméable à capuche bleue marine avec de la fausse fourrure', '13ans', 8, '2m', 1),
(35, 'Pantalon', 'Pantalon fluide beige en viscose', '42', 8, '2m', 1),
(36, 'Blouse \"Pin-Up\"', 'Blouse épaules nues avec des bretelles à petits carreaux bleus', '38', 5, '1.5m', 1),
(37, 'Top dos nu', 'Top dos nu vert et blanc avec un motif de pastèques', '38', 3, '1m', 1),
(38, 'Robe de Fête', 'Robe de fête bleue marine à paillettes avec un dos nu et un voile bleu marine au niveau de la jupe', '38', 12, '2.5m', 1),
(39, 'Manteau', 'Manteau année 50 en laine bouillie noire, blanche et bordeaux avec un doublure satinée bordeaux', '38', 10, '3m x2', 1),
(40, 'Pull à col', 'Pull vert avec un col en dentelle brugeoise blanche', '38', 3, '1.5m', 1),
(41, 'Pull à col', 'Pull bleu marine avec un col en dentelle brugeoise blanche', '44', 3, '1.5m', 1),
(42, 'Blouse Iris', 'Blouse à manches bouffantes en broderie anglaise rose', '36', 4, '1.5m', 1),
(43, 'Etui à fer à lisser', 'Etui fleuri blanc et bleu pour ranger son fer à lisser ou à friser', '40cm', 1, '0.5m', 3),
(44, 'Pochette à maquillage', 'Pochette rose pâle et grise avec une grande poche et trois petites pour ranger son maquillage', '20cm', 1, 'chutes de tissu', 3),
(45, 'Range mains', 'Tour de mains bleu marine pour ranger ses mains en hiver et ne pas avoir froid', '20cm', 1, 'chutes de tissu', 3),
(46, 'Trousse', 'Trousse simple à fermeture éclair couleur taupe avec un intérieur dans les tons bleu-vert triangulaire', '20cm', 1, 'chutes de tissu', 3),
(47, 'Pochette pour tablette', 'Pochette grise avec des motifs fleuris roses pour ranger et protéger sa tablette', '25cm', 1, 'chutes de tissu', 3),
(48, 'Masque en bec', 'Masque en bec, il existe plusieurs modèles avec différents motifs', 'adultes', 1, 'chutes de tissu', 3),
(49, 'Sac à tarte', 'Sac à tarte imperméable rouge avec un motif cupcake', '60cm', 1, '0.5m', 2),
(50, 'Pochette de voyage', 'Pochette de voyage marron clair qui permet de ranger des papiers importants pour voyager tel que le passeport, la carte d\'identité et autre…', '20cm', 1, 'chutes de tissu', 3),
(51, 'Etui pour rasoir', 'Etui pour rasoir noir et vert à l\'intérieur, il peut être assorti à votre rasoir si vous avez le même que sur la photo', '15cm', 1, 'chutes de tissu', 3),
(52, 'Masque de sommeil', 'Masque de sommeil blanc avec des cercles de différentes nuances de bleue et de taupe', 'unique', 1, 'chutes de tissu', 3),
(53, 'Housse de pouf', 'Housse bleue et blanche avec des formes géométriques pour un pouf ou un matelas pliable', '1m', 2, '2m', 3),
(54, 'Etui pour téléphone', 'Etui réversible jaune et bleu pour téléphone', '15cm', 1, 'chutes de tissu', 3),
(55, 'Couvre bol', 'Couvre bol, il existe plusieurs modèles avec différents motifs et différentes tailles', '15cm et 30cm', 1, 'chutes de tissu', 3),
(56, 'Coussin Clarisse', 'Transformation d\'un T-shirt en un coussin où il y a marqué le prénom \"Clarisse\" en égyptien', '30cm', 1, 'ancien t-shirt', 3),
(57, 'Carrés démaquillants', 'Carré en coton et en éponge pour se démaquiller, il existe plusieurs modèles avec différents motifs et différentes tailles', '10cm', 1, 'chutes de tissu', 3),
(58, 'Berlingot', 'Petite trousse pyramidale, il existe plusieurs modèles avec différents motifs', '10cm', 1, 'chutes de tissu', 3),
(59, 'Pochette couture', 'Pochette bleue marine et jaune avec une grande, une moyenne poche et un range aiguille', '20cm', 2, 'chutes de tissu', 3),
(60, 'Masque au norme AFNOR', 'Masque au norme AFNOR, il existe plusieurs modèles avec différents motifs', 'adulte', 1, 'chutes de tissu', 3),
(61, 'Trousse 505', 'Trousse en jean où il y a bordé en blanc 505 et une petite signature', '20cm', 2, 'chutes de tissu', 3),
(62, 'Trousse Elise', 'Transformation d\'un T-shirt en une trousse toute simple où il y a marqué le prénom \"Elise\" en égyptien', '20cm', 1, 'ancien t-shirt', 3),
(63, 'Etui de voyage', 'Etui de voyage noir avec des motifs écossais à l\'intérieur et un biais blanc, pour transporter montres et couteaux suisses', '25-30cm', 1, 'chutes de tissu', 3),
(64, 'Besace licorne', 'Besace licorne en jean de taille moyenne', '25-30cm', 2, '0.5m x2', 2),
(65, 'Mini besace', 'Mini besace taupe avec un motifs de chats japonais à l\'intérieur', '15cm', 2, '0.5m', 2),
(66, 'Cabat de Plage', 'Sac imperméable de plage à pastèques', '50cm', 2, '1m x2', 2),
(67, 'Besace géométrique', 'Moyenne besace marron avec le rabat et l\'intérieur géométrique aux tons bleu-vert', '25-30cm', 2, '0.5m x2', 2),
(68, 'Sac de Sport', 'Sac de sport en toile à motifs avec différentes têtes de panda', '70cm', 3, '1m x2', 2),
(69, 'Sacoche Renard', 'Sacoche renard marron clair avec quelques imprimés fleuris', '20cm', 2, '0.5m', 2),
(70, 'Besace fleurie', 'Moyenne besace beige avec un rabat et un intérieur fleuri', '25-30cm', 2, '0.5m x2', 2),
(71, 'Sac basique', 'Sac violet avec un imprimé fleuri à l\'intérieur', '40cm', 2, '1m x2', 2),
(72, 'Besace brodée', 'Moyenne besace turquoise avec brodé le prénom \"Anaïs\" sur le rabat', '25-30cm', 2, '0.5m x2', 2),
(73, 'Sac de Sport', 'Sac de sport imperméable vert foncé avec des cœurs de différentes couleurs.', '70cm', 3, '1m x2', 2),
(74, 'Besace Paris', 'Grande besace noire avec un rabat et un intérieur à motifs en référence à Paris et à \"la petite robe noir\"', '35-40cm', 2, '0.5m x2', 2),
(75, 'Besace Rectangulaire', 'Grande besace rectangulaire noire avec un rabat et un intérieur rouge à motifs circulaires', '40cm', 3, '0.5m x2', 2),
(76, 'Sac de Plage', 'Sac de plage constitué d\'une serviette pour s\'essuyer, d\'un oreiller pour se reposer et de poches', '1m', 5, 'serviette de plage', 2),
(77, 'Besace martiniquaise', 'Moyenne besace bleu marine avec un tissu fabriqué en Martinique', '25-30cm', 2, '0.5m x2', 2),
(78, 'Sac Binary War', 'Sacoche noire avec brodé l\'interface graphique d\'un jeu vidéo créé en cours d\'informatique', '20cm', 3, 'chutes de tissu', 2),
(79, 'Sac rectangulaire', 'Sac rectangulaire bleu marine avec de nombreuses poches', '25cm', 3, '0.5m x2', 2),
(80, 'Sacoche Renard', 'Sacoche renard marron clair avec quelques imprimés fleuris', '20cm', 3, '0.5m', 2),
(81, 'Tote bag', 'Tote bag en toile avec une broderie d\'un visage en noir', '50cm', 3, '1m', 2),
(82, 'Blouson', 'Blouson beige avec un intérieur écossais rouge et rembourré ', 'M', 15, '3m x2', 1),
(83, 'Haut de pyjama', 'T-shirt blanc avec deux cœurs au niveau du torse assortis au bas de pyjama', 'M', 6, '1.5m', 1),
(84, 'Blouse Florence', 'Blouse en voile bleu marine à fleurs avec des coulisses élastiques à l\'encolure et aux manches', '38', 7, '2m', 1),
(85, 'Jupe Patinage', 'Jupe blanche en cercle avec un ceinture assortie en coton à motifs poissons', '12 ans', 6, '1.5m', 1),
(86, 'Haut de la robe Eve', 'Haut portefeuille repris de la robe Eve, bicolore blanc et bleu marine en satin', '42', 5, '1m x2', 1),
(87, 'Robe Lune', 'Robe Lune en version courte et rose avec les manches de la robe Eve', '38', 8, '2m', 1),
(88, 'Robe Anthea Milkmaid', 'Robe longue en coton piqué rose pale avec des manches bouffantes et une fente dans la jupe', '38', 10, '3m', 1),
(89, 'Robe japonaise', 'Robe longue bleue clair avec des fleurs roses et deux fentes sur les cotés de la jupe', '38', 8, '3m', 1),
(90, 'Robe années 1900', 'Robe longue violette à volants inspirées des années 1900', '38', 13, '3m', 1),
(91, 'Robe Mandy', 'Robe courte en jersey vert à poids blancs et roses avec un nœud sur le coté', '38', 6, '2.5m', 1),
(92, 'Jupe croisée \"Gilberte\"', 'Jupe croisée bleue marine à boutons blancs', '36', 7, '1.5m', 1),
(93, 'Robe années 1950', 'Robe bleue turquoise à poids blancs dans le style des robes dans les années 1950', '38', 12, '3m', 1),
(94, 'Jupe longue', 'Jupe longue blanche avec des motifs floraux sur le voile et une doublure blanche en dessous', '36', 5, '1.5m x2', 1),
(95, 'Top Audrey', 'Top en jersey avec un motif marinière avec quelques détails marins (gouvernail, ancre…)', '38', 5, '1.5m', 1),
(96, 'Chemise Sandalette', 'Chemise rouge à manches longues avec des motifs géométriques blancs', 'S', 4, '1m', 1),
(97, 'Chemisier Evelyne', 'Chemisier blanc avec un col coloré crocheté par mon arrière grand-mère', 'M', 3, '1m', 1),
(98, 'Blouse Dakar', 'Blouse violette à motifs jaune avec des manches pagodes', '38', 8, '1.5m', 1),
(99, 'Blouse Campanule', 'Blouse large à carreaux avec des fonces à l\'encolure et aux manches', '38', 6, '2m', 1),
(100, 'Haut Tessa', 'Haut bleu-vert avec un effet froncé au niveau des manches sur les cotés', '36', 5, '1.5m', 1),
(101, 'Chemise Sandalette', 'Chemise blanche sans manches avec des motifs : cœurs, trèfles, carreaux et piques', 'S', 3, '1m', 1),
(102, 'Chemisier', 'Chemisier court à manches longues avec des motifs floraux', '16ans - 36', 5, '1.5m', 1),
(103, 'Robe de Gala', 'Robe longue bleue marine avec du tissu pailleté pour la jupe et le haut, du satin aux manches et un tissu plissé pour le volant du bas', '46', 12, '3m', 1),
(104, 'Jupe Arrondie', 'Jupe longue bleue et verte, boutonnée sur le devant avec des petites fentes arrondies en bas', '48', 6, '1.5m', 1),
(105, 'Robe Bernadette', 'Robe mi-longue sans manches en jersey à rayures noires et motifs floraux', '46', 6, '2m', 1),
(106, 'Chemise Sandalette', 'Chemise bleue et verte à manches longues', 'XL', 4, '1.5m', 1),
(107, 'Cache-cœur', 'Cache-cœur en coton blanc, bleu et rouge à motifs floraux', '46', 8, '2m', 1),
(108, 'Blouse Dakar', 'Blouse violette à motifs jaune avec des manches pagodes', '46', 7, '1.5m', 1),
(109, 'Foulard', 'Foulard commandé par le Rotary de Tours pour le 49ème prix Léonard de Vinci', '50cm', 1, '50cm', 3),
(110, 'Sac à main', 'Sac à main à poids multicolores avec un hanse rose à cœurs colorés', '20cm', 2, '50cm', 2),
(111, 'Bas de pyjama', 'Short de pyjama à poches à carreaux écossais rouge assorti au Haut de pyjama', 'M', 4, '1m', 1),
(112, 'Short - Jupe culotte', 'Short- Jupe culotte large blanche', '42', 3, '1m', 1),
(113, 'Pantalon Large', 'Pantalon large blanc à motifs tropicaux', '40', 4, '2m', 1),
(114, 'Salopette', 'Salopette en jean à motifs blancs d\'insectes', '38', 7, '3m', 1),
(115, 'Short de Sport', 'Short de sport bleu turquoise avec des bandes de jean sur les cotés', '12ans', 4, '1m', 1),
(116, 'Trousse brodée', 'Trousse blanche en toile avec un cœur style géométrique brodé en noir', '18cm', 3, 'chutes de tissu', 3),
(117, 'T-shirt de sport', 'T-shirt de sport en jersey bleu turquoise avec des motifs floraux', '38', 4, '1m', 1),
(118, 'Robe Bernadette', 'Robe mi-longue en jersey rose sans manches', '46', 4, '1.5m', 1),
(119, 'Tortue brodée', 'Tortue verte brodée sur un sweat blanc', '5cm', 5, '5cm', 3),
(120, 'Marque page Claire', 'Marque page avec brodé le prénom \"Claire\" en grec, un ballon de volley et le symbole des scouts de France', '15cm', 3, '15cm', 3),
(121, 'Besace rectangulaire', 'Besace rectangulaire rembourrée blanche, noire et verte', '40cm', 4, '50cm x2', 2),
(122, 'Pull à manches chauve-souris', 'Pull à manches chauve-souris en jersey rose avec un col chemise blanc à strass', '44', 4, '1.5m', 1),
(123, 'Fleur d\'hibiscus brodée', 'Fleur d\'hibiscus rose brodée sur un sweat blanc', '10cm', 6, '10cm', 3);

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `id_offre` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `id_creation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`id_offre`, `prix`, `id_creation`) VALUES
(2, 35, 19),
(3, 30, 85),
(4, 30, 24),
(5, 45, 25),
(6, 40, 28),
(7, 30, 30),
(8, 30, 92),
(9, 30, 102),
(10, 20, 115);

-- --------------------------------------------------------

--
-- Structure de la table `realiser_en`
--

CREATE TABLE `realiser_en` (
  `id_creation` int(11) NOT NULL,
  `id_tissu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `realiser_en`
--

INSERT INTO `realiser_en` (`id_creation`, `id_tissu`) VALUES
(2, 1),
(3, 1),
(4, 4),
(4, 9),
(5, 5),
(6, 5),
(7, 2),
(8, 4),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 1),
(14, 1),
(15, 1),
(16, 5),
(17, 1),
(18, 4),
(19, 2),
(20, 2),
(21, 4),
(22, 1),
(23, 1),
(24, 2),
(25, 6),
(26, 9),
(27, 4),
(28, 4),
(29, 4),
(30, 2),
(31, 5),
(32, 4),
(33, 2),
(33, 7),
(34, 2),
(35, 5),
(36, 5),
(37, 2),
(38, 4),
(38, 9),
(39, 6),
(39, 7),
(40, 6),
(41, 6),
(42, 3),
(43, 2),
(45, 2),
(46, 2),
(47, 2),
(48, 2),
(49, 2),
(49, 8),
(50, 2),
(51, 2),
(52, 2),
(53, 2),
(54, 2),
(55, 8),
(56, 2),
(57, 2),
(57, 11),
(58, 2),
(59, 2),
(60, 2),
(62, 2),
(64, 2),
(65, 2),
(66, 2),
(66, 8),
(67, 2),
(68, 2),
(69, 2),
(69, 5),
(70, 2),
(71, 2),
(72, 2),
(73, 2),
(73, 8),
(74, 2),
(75, 2),
(76, 2),
(76, 11),
(77, 2),
(78, 2),
(79, 2),
(80, 2),
(80, 5),
(82, 2),
(83, 4),
(84, 9),
(85, 2),
(86, 7),
(87, 2),
(88, 2),
(89, 1),
(90, 2),
(91, 4),
(92, 5),
(93, 2),
(94, 1),
(94, 9),
(95, 4),
(96, 1),
(97, 2),
(98, 5),
(99, 2),
(100, 6),
(101, 2),
(102, 1),
(103, 4),
(103, 7),
(103, 9),
(104, 1),
(105, 4),
(106, 1),
(107, 2),
(108, 5),
(109, 2),
(110, 2),
(111, 2),
(112, 1),
(113, 1),
(114, 12),
(115, 4),
(116, 2),
(117, 4),
(118, 4),
(119, 2),
(120, 2),
(121, 2),
(122, 4),
(123, 2);

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `id_tag` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `couleur` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tag`
--

INSERT INTO `tag` (`id_tag`, `nom`, `couleur`) VALUES
(1, 'Robe', 'fcba03'),
(2, 'Hiver', '4d6b87'),
(3, 'Eté', ''),
(4, 'Haut', ''),
(5, 'Pantalon', ''),
(6, 'Short', ''),
(7, 'Jupe', ''),
(8, 'Combinaison', ''),
(9, 'Veste', ''),
(10, 'Broderie', ''),
(11, 'Trousse', ''),
(12, 'Pochette', '');

-- --------------------------------------------------------

--
-- Structure de la table `tagger`
--

CREATE TABLE `tagger` (
  `id_creation` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tagger`
--

INSERT INTO `tagger` (`id_creation`, `id_tag`) VALUES
(2, 2),
(2, 1),
(3, 1),
(3, 2),
(4, 8),
(4, 3),
(5, 9),
(5, 2),
(6, 4),
(6, 3),
(7, 4),
(7, 3),
(8, 4),
(9, 4),
(10, 8),
(10, 2),
(11, 7),
(12, 4),
(13, 1),
(13, 2),
(14, 6),
(14, 3),
(15, 1),
(15, 3),
(16, 7),
(17, 1),
(18, 8),
(19, 1),
(20, 4),
(21, 4),
(22, 1),
(23, 8),
(24, 7),
(25, 9),
(26, 4),
(27, 1),
(28, 1),
(29, 8),
(30, 4),
(31, 1),
(32, 4),
(33, 9),
(34, 9),
(35, 5),
(36, 4),
(37, 4),
(38, 1),
(39, 9),
(40, 4),
(41, 4),
(42, 4),
(82, 9),
(83, 4),
(84, 4),
(85, 7),
(56, 10),
(62, 10),
(72, 10),
(78, 10),
(86, 4),
(87, 1),
(88, 1),
(43, 12),
(46, 12),
(47, 12),
(50, 12),
(51, 12),
(54, 12),
(58, 12),
(59, 12),
(62, 12),
(89, 1),
(90, 1),
(91, 1),
(92, 7),
(93, 1),
(94, 7),
(95, 4),
(96, 4),
(97, 4),
(98, 4),
(99, 4),
(100, 4),
(101, 4),
(102, 4),
(103, 1),
(104, 7),
(105, 1),
(106, 4),
(107, 4),
(108, 4),
(111, 6),
(112, 6),
(113, 5),
(114, 8),
(115, 6),
(116, 12),
(116, 10),
(117, 4),
(118, 1),
(119, 10),
(120, 10),
(122, 4),
(123, 10);

-- --------------------------------------------------------

--
-- Structure de la table `tissu`
--

CREATE TABLE `tissu` (
  `id_tissu` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tissu`
--

INSERT INTO `tissu` (`id_tissu`, `nom`) VALUES
(1, 'Viscose'),
(2, 'Coton'),
(3, 'Broderie anglaise'),
(4, 'Jersey'),
(5, 'Polyester'),
(6, 'Laine'),
(7, 'Satin'),
(8, 'Coton ciré'),
(9, 'Voile'),
(10, 'Soie'),
(11, 'Eponge'),
(12, 'Jean');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `creation`
--
ALTER TABLE `creation`
  ADD PRIMARY KEY (`id_creation`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`id_offre`),
  ADD KEY `id_creation` (`id_creation`);

--
-- Index pour la table `realiser_en`
--
ALTER TABLE `realiser_en`
  ADD PRIMARY KEY (`id_creation`,`id_tissu`),
  ADD KEY `id_tissu` (`id_tissu`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Index pour la table `tagger`
--
ALTER TABLE `tagger`
  ADD KEY `id_creation` (`id_creation`),
  ADD KEY `id_tag` (`id_tag`);

--
-- Index pour la table `tissu`
--
ALTER TABLE `tissu`
  ADD PRIMARY KEY (`id_tissu`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `creation`
--
ALTER TABLE `creation`
  MODIFY `id_creation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `id_offre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `tissu`
--
ALTER TABLE `tissu`
  MODIFY `id_tissu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_image`) REFERENCES `image` (`id_image`);

--
-- Contraintes pour la table `creation`
--
ALTER TABLE `creation`
  ADD CONSTRAINT `creation_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `offre_ibfk_1` FOREIGN KEY (`id_creation`) REFERENCES `creation` (`id_creation`);

--
-- Contraintes pour la table `realiser_en`
--
ALTER TABLE `realiser_en`
  ADD CONSTRAINT `realiser_en_ibfk_1` FOREIGN KEY (`id_creation`) REFERENCES `creation` (`id_creation`),
  ADD CONSTRAINT `realiser_en_ibfk_2` FOREIGN KEY (`id_tissu`) REFERENCES `tissu` (`id_tissu`);

--
-- Contraintes pour la table `tagger`
--
ALTER TABLE `tagger`
  ADD CONSTRAINT `tagger_ibfk_1` FOREIGN KEY (`id_creation`) REFERENCES `creation` (`id_creation`),
  ADD CONSTRAINT `tagger_ibfk_2` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
