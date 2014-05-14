-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: sand4l.sql.free.fr
-- Généré le : Mer 14 Mai 2014 à 13:16
-- Version du serveur: 5.0.83
-- Version de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `sand4l`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL auto_increment,
  `titre` varchar(512) collate utf8_unicode_ci NOT NULL,
  `contenu` text collate utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date`) VALUES
(1, 'Bienvenue', '<p>\r\nBienvenue sur le site de SAND 4L ! <br>\r\nAssociation Rennaise pour préparer la formidable expérience solidaire, humaine et sportive du 4L Trophy, nous sommes Erwan Normand et Florent Guiotte, motivés et investis dans projet d''aide aux enfants marocains. <br>\r\nCe site vous permettra de nous suivre sur l''avancement de notre projet, de l''inscription au raid en lui même aux retours fait auprès de nos partenaires. Ce sera également le lieu de retour de nos recherches, de nos apprentissages et expériences. Puisse cela aider les équipages de cette éditions et de celles à venir !\r\n</p>\r\n\r\n<h2>Où en sommes nous ?</h2>\r\n<p>\r\nL''idée nous est venue il y a déjà un an ! En mai 2012. Nous avons alors décidé de nous préparer à l''avance à l\\''édition 2014 du 4L Trophy. <br>\r\nL''association, sa <a href="http://www.journal-officiel.gouv.fr/association/index.php?ACTION=Rechercher&WHAT=solidarit%E9+aventure+nomade">déclaration au Journal Officiel</a> ainsi qu''à l''INSEE et l''ouverture d''un compte ont été faites à l''été 2012. Tous les documents ainsi que ce site web, le planning du projet, ont été préparés début 2013.<br>\r\nEt nous voici lancés ! Nous commençons nos recherches de partenaires et mécènes aujourd''hui pour pouvoir effectuer la pré-inscription.\r\n</p>\r\n\r\n<p>\r\nMerci à tous les soutiens et à toutes les personnes qui apporteront, apportent ou ont apporté leur aide à cette belle aventure ! =)\r\n</p>', '2013-05-17'),
(2, 'L''aventure est lancée !', '<p>\r\nÇa y est, nous partons pour l''édition 2014 de l''aventure 4L Trophy, c''est officiel ! <br>\r\nC''est avec fierté que <strong>nous porterons le numéro 1483</strong> sur notre 4L pour notre grand <strong>départ le 23 février</strong> !\r\n</p>\r\n<p>\r\nNous sommes donc lancés dans l''aventure et c''est une première grande étape du projet qui est franchie ! Après les préparatifs du site web, de la plaquette, de l''association et tout l''administratif associé, nous <strong>avons pu réunir la somme de 500€</strong> auprès des commerçants de notre ville ! C''est extraordinaire, merci ! <br>\r\nCela nous a permis de nous pré-inscrire fin mai, et c''est grâce à la très grande générosité et aux soutiens de nos partenaires la <strong>Boucherie Jégu</strong> et <strong>Aux Fruits du Castel</strong> et de nos donateurs, tous commerçants de Châteaugiron. Un <strong>grand merci à tous nos soutiens</strong> pour nous permettre cette grande aventure ! :)\r\n</p>\r\n<p>\r\n	<a href="http://www.castelactiv.fr/fiche.asp?ref=28">\r\n		<img src="_/images/partenaires/boucherie_jegu.jpg" alt="boucherie jégu" />\r\n	</a>\r\n	<a href="http://www.castelactiv.fr/fiche.asp?ref=24">\r\n		<img src="_/images/partenaires/aux_fruits_du_castel.jpg" alt="boucherie jégu" />\r\n	</a>\r\nVoici nos deux premiers partenaires, merci à eux pour leur confiance accordée dans le projet !\r\n</p>', '2013-07-04'),
(3, 'Bilan à mi-parcours', '<p>\r\nNous voilà déjà fin septembre, et le départ est désormais dans 137 jours. Les vacances ont été mouvementées, et nous avons encore fort à faire : il nous reste 6000€ et la 4L à trouver.\r\n</p>\r\n\r\n<p>\r\nCependant, les mois d''Août et Septembre ont été riches en rencontres et en aides !\r\nTout d''abord c''est Arnaud qui vient nous rejoindre dans <strong>l''aventure avec son restaurant <a href="http://sand4l.free.fr/partenaires#nono_miam">Nono Miam !</strong></a>\r\nHabitué à soutenir de tels projets, c''est un partenariat riche qui s''annonce ! Merci beaucoup pour son soutien !\r\nNous avons aussi eu une promesse de partenariat du Hyper U de Châteaugiron.\r\n</p>\r\n\r\n<div style="float: right" class="annotation centre">\r\n<img src="/_/images/articles/3/1.jpg" title="illustration de l''article Ouest-France" alt="illustration de l''article Ouest-France" /><br>\r\nIllustration de l''article du Ouest-France\r\n</div>\r\n<p>\r\nNous sommes <strong>parus dans le Ouest France</strong> et dans le Journal de Vitré, début Septembre. Vous pouvez lire l''article du Ouest-France <a href="http://www.ouest-france.fr/actu/actuLocale_-Florent-Guiotte-et-Erwan-Normand-participeront-au-4L-Trophy-_35069-avd-20130903-65836384_actuLocale.Htm">en cliquant sur ce lien</a>.\r\n</p>\r\n\r\n<p>\r\nNous avons également rencontré pendant une matinée <strong>fin août la Mairie de Châteaugiron</strong>, qui nous apporté précieux conseils et contacts. Espérons un soutien de la part des élus !\r\n</p>\r\n\r\n<p>\r\nCela nous a permis d''êtres présents au forum des associations de Châteaugiron le samedi 7 septembre où nous avons rencontré de nombreuses associations ; <strong>un partenariat s''annonce déjà avec <a href="http://www.photogiron.fr/">Photogiron</a></strong>, le club photo de notre ville Châteaugiron. Nous sommes tous deux passionnés de photo, nous en ramènerons un maximum de notre voyage marocain ! =) <br>\r\nEnfin, ce salon a été pour nous <strong>l''occasion de voir l''extraordinaire générosité des multiples personnes venues sur notre stand, soutenir notre projet</strong> avec quelques euros symboliques, souvent plusieurs dizaines à la fois !\r\n</p>\r\n\r\n<div class="centre annotation">\r\n<img src="http://sand4l.free.fr/_/images/partenaires/nono_miam.jpg" />\r\nNotre nouveau partenaire, Nono Miam !\r\n</div>', '2013-10-01'),
(4, 'Le Students Challenge, notre nouveau projet', '<p>\r\nAlors que le départ du 4L Trophy 2014 a été lancé, et nous n''y participons malheureusement pas. La \r\ndécision était prise depuis début décembre déjà, car nous n''étions tout simplement pas prêt. Mener un projet est quelque chose de difficile les premières fois que l''on fait de la gestion de projet !<br />\r\nEn effet, nous avons manqué de quelques financements, et surtout pas trouvé de voiture à notre goût. Et il n''était pas possible d''en préparer une en un mois, avant le départ.\r\n</p>\r\n\r\n<p>\r\nCependant, nous apprenons de nos erreurs ! Et c''est également pour cela que nous menons un tel projet. Cette année nous serons prêt, nous allons nous donner les moyens pour y arriver, puisque nous savons ce qu''il faut faire pour y arriver. Il nous restera la moitié des financements à trouver, c''est-à-dire quelques sponsors supplémentaires et des ventes dans des manifestations ; la 4L à trouver et à la préparer !<br />\r\nNous avons prévenu nos sponsors et nos proches qui nous suivent, et tous ont gardé confiance en nous pour le nouveau projet que nous leur avons proposé, merci à eux !\r\n</p>\r\n\r\n<h2>Le Students Challenge</h2>\r\n<img src="_/images/articles/4/lsc_mini.png" style="float:right"/>\r\n<p>\r\nNous nous sommes demandé si le 4L Trophy était le meilleur projet à réaliser pour nous. Nous avons fait de nombreuses recherches sur les retours des équipages des précédentes éditions et sur les autres raids existants.  Celui nous plaisant le plus est le <a href="http://studentschallenge.fr/">Students Challenge</a>.\r\n</p>\r\n\r\n<p>\r\nCe rallye est un raid étudiant solidaire comme le 4L Trophy qui se déroule également pendant 10 jours au sud du Maroc, avec deux personnes par équipage toute voiture étant autorisée. On y voit \r\nessentiellement des 4L, des AX et des 106. Nous voulons le faire en 4L, alors si vous en connaissez \r\nune en vente, contactez-nous ! :-D<br />\r\nComme le 4L Trophy, chaque journée est remis par l''organisation un road-book décrivant l''étape à \r\nparcourir, le but étant de faire le parcours le plus court possible. Cependant le Students est un raid \r\nà petite échelle : 150 équipages partent à chaque édition (1200 pour le 4L Trophy).\r\n</p>\r\n\r\n<p>\r\nEn outre, le pari du Students est d''apporter non pas une aide sous forme de dons aux populations, mais au contraire d''accompagner des villages du sud du Maroc dans leur développement. <br />\r\nLors de la Green Day, tous les participants mettent main à la pâte pour planter des palmiers-dattiers \r\ndans les villages pour lutter contre les problèmes de désertification. De plus, ces arbres permettront \r\ndes revenus supplémentaires aux locaux.<br />\r\nLe projet est organisé par l''association <a href="http://www.coeurdegazelles.org/">Cœur de \r\nGazelles</a>.\r\n</p>\r\n\r\n<p>Nous vous donnerons des nouvelles régulièrement, tout les 1 mois et demi ! Nous auront la voiture et un budget bien avancé :-) A dans début avril !</p>', '2014-02-15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
