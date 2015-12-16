-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2015 at 04:52 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bicycle_rent_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_brand`
--

CREATE TABLE IF NOT EXISTS `bicycle_brand` (
`id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=152 ;

--
-- Dumping data for table `bicycle_brand`
--

INSERT INTO `bicycle_brand` (`id`, `name`) VALUES
(83, 'Acetaminophen PM'),
(109, 'Acetaminophen and Codeine Phosphate'),
(92, 'Adempas'),
(58, 'Anchor Foaming Hand Sanitizer'),
(89, 'Aqua Rush Fluid'),
(103, 'Aquaphor'),
(76, 'Argentum 0.4 Adult Size (cocoa butter) Special Order'),
(91, 'Atenolol'),
(106, 'Azithromycin'),
(93, 'BENZOYL PEROXIDE'),
(32, 'Babblestorm'),
(59, 'Bahia Grass'),
(78, 'Bambusa Argentum'),
(85, 'Benazepril Hydrochloride'),
(3, 'Bianchi'),
(10, 'Browsebug'),
(70, 'Bupropion Hydrochloride'),
(74, 'CLOBEX'),
(79, 'CVS PHARMACY'),
(114, 'California Mugwort'),
(29, 'Camimbo'),
(82, 'Captopril'),
(64, 'Cephalexin'),
(8, 'Cervelo'),
(19, 'Chatterpoint'),
(48, 'Childrens Pain and Fever'),
(62, 'Chloromag'),
(57, 'Cholestyramine'),
(81, 'Depakote'),
(6, 'Diam'),
(115, 'Digoxin'),
(22, 'Divape'),
(73, 'Doxazosin'),
(39, 'Doxycycline'),
(41, 'Eastern Cottonwood'),
(43, 'Etodolac'),
(56, 'Famciclovir'),
(87, 'Fiore Rx Pixie Dust Pink Antifungal Nail Polish'),
(65, 'First Degree'),
(23, 'Fliptune'),
(53, 'Food - Fish and Shellfish, Tuna Thunnus sp.'),
(2, 'Fuji'),
(4, 'Giant'),
(55, 'Hemox A'),
(84, 'Hydroxyzine Hydrochloride'),
(112, 'IOPE AIR CUSHION XP'),
(71, 'Isopropyl alcohol Prep Pad'),
(80, 'Jasmine 3D Whipping Essence'),
(67, 'Jurlique Purely Sun-Defying'),
(30, 'Kaymbo'),
(66, 'Kineret'),
(25, 'Kwilith'),
(98, 'Lactated Ringers'),
(69, 'Leader Aspirin'),
(12, 'Linkbuzz'),
(60, 'Lorazepam'),
(100, 'Lyme HP'),
(97, 'MADINA AFRICAN BLACK SOAP'),
(104, 'MED NAP'),
(16, 'Meejo'),
(40, 'Methylphenidate Hydrochloride'),
(35, 'Miboo'),
(72, 'Midazolam'),
(51, 'Mineral Wear Talc-Free Mineral Loose Powder'),
(50, 'Morphine Sulfate'),
(96, 'Multi Vitamin Drops with Fluoride and Iron'),
(116, 'NAUSEA'),
(111, 'NEOSPORIN'),
(101, 'Neutrogena Healthy Skin Enhancer'),
(37, 'Nitrogen'),
(28, 'Ntags'),
(38, 'OVACE Plus'),
(99, 'Otis Clapp Femcaps'),
(86, 'Oxymorphone Hydrochloride'),
(27, 'Oyoloo'),
(105, 'Pedi-Dri'),
(107, 'Phenytoin Sodium'),
(34, 'Photobean'),
(95, 'PhysiciansCare Ophthalmic Solution Eyewash'),
(63, 'Pollens - Weeds, Careless/Pigweed Mix'),
(68, 'Prednisone'),
(45, 'Proactiv Solution Oil Free Moisture SPF 15 Moisturizer'),
(108, 'Quetiapine Fumarate'),
(75, 'RX Act Tussin'),
(15, 'Realfire'),
(54, 'Rifampin'),
(9, 'Riffpedia'),
(102, 'SAVELLA'),
(110, 'SYLATRON'),
(7, 'Salsa'),
(49, 'Sandostatin'),
(46, 'Sani Professional Brand Sani-Hands'),
(52, 'Sertraline Hydrochloride'),
(94, 'Simvastatin'),
(33, 'Skimia'),
(5, 'Specialized'),
(90, 'Spongia Aurum'),
(44, 'Sterile Vancomycin Hydrochloride'),
(88, 'TYKERB'),
(31, 'Tekfly'),
(36, 'Topcare Sinus Relief'),
(1, 'Trek'),
(11, 'Twitterbeat'),
(21, 'Twiyo'),
(113, 'Vaccination - Illness Assist'),
(18, 'Vinder'),
(61, 'Viral Infection'),
(13, 'Voonyx'),
(42, 'Warfarin Sodium'),
(14, 'Yakitri'),
(26, 'Yambee'),
(20, 'Yozio'),
(77, 'Zmax'),
(17, 'Zoomlounge'),
(24, 'Zooxo'),
(47, 'healthy accents stomach relief');

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_disposal`
--

CREATE TABLE IF NOT EXISTS `bicycle_disposal` (
  `outlet_id` int(10) NOT NULL,
  `bicycle_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bicycle_disposal`
--

INSERT INTO `bicycle_disposal` (`outlet_id`, `bicycle_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(3, 30),
(3, 31),
(3, 32),
(3, 33),
(3, 34),
(3, 35),
(3, 36),
(3, 37),
(3, 38),
(3, 39),
(3, 40),
(4, 21),
(4, 22),
(4, 23),
(4, 24),
(4, 25),
(4, 26),
(4, 27),
(4, 28),
(4, 29),
(5, 41),
(5, 42),
(5, 43),
(5, 44),
(5, 45),
(5, 46),
(5, 47),
(5, 48),
(5, 49),
(5, 50),
(6, 51),
(6, 52),
(6, 53),
(6, 54),
(6, 55),
(6, 56),
(6, 57),
(6, 58),
(6, 59),
(6, 60),
(7, 61),
(7, 62),
(7, 63),
(7, 64),
(7, 65),
(7, 66),
(7, 67),
(7, 68),
(7, 69),
(7, 70),
(8, 71),
(8, 72),
(8, 73),
(8, 74),
(8, 75),
(8, 76),
(8, 77),
(8, 78),
(8, 79),
(8, 80),
(8, 81),
(9, 82),
(9, 83),
(9, 84),
(9, 85),
(9, 86),
(9, 87),
(9, 88),
(9, 89),
(9, 90),
(10, 91),
(10, 92),
(10, 93),
(10, 94),
(10, 95),
(10, 96),
(10, 97),
(10, 98),
(10, 99),
(10, 100),
(11, 101),
(11, 102),
(11, 103),
(11, 104),
(11, 105),
(11, 106),
(11, 107),
(11, 108),
(11, 109),
(11, 110);

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_info`
--

CREATE TABLE IF NOT EXISTS `bicycle_info` (
`id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `brand_id` int(10) NOT NULL,
  `type_id` int(10) NOT NULL,
  `gear_number` int(1) NOT NULL,
  `wheel_size` int(2) NOT NULL,
  `rent_price_hour` decimal(10,0) NOT NULL,
  `rent_discount_hour` int(2) NOT NULL,
  `rent_discount_percent` int(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=165 ;

--
-- Dumping data for table `bicycle_info`
--

INSERT INTO `bicycle_info` (`id`, `name`, `brand_id`, `type_id`, `gear_number`, `wheel_size`, `rent_price_hour`, `rent_discount_hour`, `rent_discount_percent`) VALUES
(1, 'sample bicycle', 3, 3, 1, 20, '210', 1, 5),
(2, 'sample bicys', 2, 2, 21, 20, '100', 3, 15),
(3, 'Ainotar', 9, 3, 3, 28, '150', 5, 15),
(4, 'Supersix EVO', 10, 1, 11, 27, '400', 6, 5),
(5, 'Jekyll 27.5', 10, 4, 1, 29, '300', 6, 10),
(6, 'Contro', 10, 3, 7, 27, '200', 4, 10),
(7, 'Enim.', 75, 2, 16, 20, '212', 10, 9),
(8, 'Amet.', 42, 4, 9, 29, '333', 6, 10),
(9, 'Viverra.', 62, 5, 12, 25, '476', 4, 5),
(10, 'Neque.', 79, 5, 5, 25, '225', 7, 12),
(11, 'Dis.', 54, 4, 23, 21, '372', 8, 19),
(12, 'Venenatis.', 97, 3, 13, 25, '115', 10, 13),
(13, 'Metus!', 37, 1, 25, 25, '495', 9, 21),
(14, 'Cum?', 13, 2, 1, 26, '458', 7, 9),
(15, 'Nisi.', 52, 4, 11, 21, '139', 7, 6),
(16, 'Quis.', 35, 4, 8, 26, '298', 4, 22),
(17, 'Tellus.', 86, 5, 9, 28, '210', 5, 20),
(18, 'Pretium', 96, 1, 22, 21, '396', 10, 7),
(19, 'Egestas.', 11, 5, 26, 22, '104', 8, 21),
(20, 'Elementum.', 15, 1, 21, 20, '159', 7, 16),
(21, 'Dignissim?', 51, 3, 21, 21, '112', 6, 7),
(22, 'Senectus.', 27, 3, 14, 28, '499', 4, 7),
(23, 'Nullam.', 8, 4, 5, 25, '213', 8, 20),
(24, 'Platea.', 82, 3, 6, 29, '280', 9, 19),
(25, 'Tortor.', 90, 4, 24, 23, '148', 5, 14),
(26, 'Taciti.', 85, 4, 10, 29, '258', 8, 14),
(27, 'Natoque.', 60, 5, 17, 20, '480', 10, 11),
(28, 'Diam.', 28, 3, 17, 29, '211', 8, 20),
(29, 'Felis!', 60, 1, 16, 22, '383', 8, 12),
(30, 'Proin.', 16, 5, 9, 23, '211', 5, 22),
(31, 'Erat!', 17, 4, 10, 28, '479', 7, 17),
(32, 'Morbi.', 39, 1, 25, 29, '242', 7, 11),
(33, 'Convallis.', 64, 1, 12, 23, '118', 9, 13),
(34, 'Hac.', 60, 5, 21, 27, '373', 10, 11),
(35, 'Bibendum.', 16, 3, 7, 28, '231', 8, 22),
(36, 'Lacinia.', 86, 3, 17, 22, '344', 6, 11),
(37, 'In!', 16, 1, 9, 29, '313', 7, 9),
(38, 'Curabitur?', 66, 4, 16, 21, '266', 6, 19),
(39, 'Mattis.', 83, 2, 25, 23, '366', 7, 10),
(40, 'Praesent.', 85, 1, 6, 30, '472', 9, 23),
(41, 'Ligula.', 94, 3, 6, 23, '145', 5, 16),
(42, 'Phasellus.', 42, 5, 9, 29, '269', 7, 18),
(43, 'Viverra.', 43, 5, 19, 23, '499', 7, 8),
(44, 'Torquent.', 78, 3, 2, 23, '409', 4, 14),
(45, 'Blandit.', 17, 1, 7, 28, '485', 7, 12),
(46, 'Phasellus.', 97, 2, 21, 22, '284', 9, 15),
(47, 'At.', 8, 4, 26, 28, '209', 8, 6),
(48, 'Pharetra.', 21, 4, 23, 24, '410', 9, 22),
(49, 'Ipsum.', 20, 4, 6, 25, '402', 5, 13),
(50, 'Senectus.', 19, 1, 16, 26, '182', 7, 22),
(51, 'Amet.', 7, 4, 6, 25, '248', 5, 9),
(52, 'Libero.', 96, 4, 7, 23, '270', 9, 8),
(53, 'Ullamcorper.', 37, 4, 9, 26, '152', 8, 10),
(54, 'A.', 13, 2, 7, 30, '371', 5, 5),
(55, 'Elit!', 23, 2, 6, 22, '413', 10, 19),
(56, 'Potenti.', 55, 1, 7, 29, '317', 8, 5),
(57, 'Justo!', 76, 3, 1, 20, '406', 8, 20),
(58, 'Parturient?', 98, 3, 4, 28, '470', 5, 5),
(59, 'Condimentum!', 43, 3, 25, 30, '358', 8, 23),
(60, 'Class?', 87, 4, 14, 28, '141', 5, 7),
(61, 'Inceptos.', 17, 1, 13, 29, '207', 8, 9),
(62, 'Ridiculus!', 9, 3, 18, 24, '306', 9, 21),
(63, 'Dignissim!', 90, 4, 24, 24, '169', 8, 17),
(64, 'Commodo.', 35, 4, 9, 27, '347', 9, 10),
(65, 'Et.', 39, 1, 9, 29, '176', 8, 17),
(66, 'Imperdiet.', 74, 2, 19, 29, '294', 7, 10),
(67, 'Ultrices.', 83, 4, 25, 30, '368', 5, 5),
(68, 'Placerat.', 12, 2, 6, 25, '472', 7, 22),
(69, 'Metus.', 31, 3, 15, 28, '447', 7, 17),
(70, 'Tristique.', 62, 4, 2, 22, '445', 4, 16),
(71, 'Potenti.', 73, 4, 14, 26, '133', 6, 17),
(72, 'Amet.', 6, 3, 22, 27, '111', 7, 23),
(73, 'Curae,.', 74, 3, 14, 25, '202', 5, 13),
(74, 'Curabitur.', 44, 1, 15, 27, '476', 7, 9),
(75, 'Dapibus.', 34, 3, 5, 26, '320', 9, 12),
(76, 'Commodo.', 42, 2, 25, 24, '477', 8, 22),
(77, 'Risus.', 66, 4, 25, 20, '384', 9, 10),
(78, 'Eros.', 43, 4, 26, 26, '473', 9, 12),
(79, 'Lorem.', 20, 3, 11, 20, '384', 7, 14),
(80, 'Eu!', 95, 1, 13, 23, '299', 7, 21),
(81, 'Feugiat?', 56, 4, 21, 28, '363', 7, 12),
(82, 'Placerat.', 37, 4, 25, 21, '314', 5, 7),
(83, 'Mauris.', 84, 3, 13, 24, '277', 10, 9),
(84, 'Dolor.', 8, 4, 22, 30, '164', 4, 20),
(85, 'Sodales.', 64, 5, 7, 22, '213', 10, 23),
(86, 'Potenti.', 30, 4, 20, 22, '266', 7, 10),
(87, 'Adipiscing?', 57, 3, 13, 27, '464', 5, 18),
(88, 'Primis.', 70, 4, 20, 28, '442', 7, 14),
(89, 'Sit.', 64, 4, 17, 28, '453', 7, 15),
(90, 'Viverra?', 76, 4, 25, 23, '120', 4, 19),
(91, 'Auctor.', 99, 3, 13, 24, '245', 4, 11),
(92, 'Odio.', 74, 4, 11, 23, '293', 5, 19),
(93, 'Senectus.', 74, 2, 20, 27, '102', 8, 16),
(94, 'Aliquam.', 20, 4, 21, 27, '379', 8, 8),
(95, 'Vivamus.', 44, 3, 7, 21, '394', 10, 21),
(96, 'Placerat.', 97, 4, 6, 27, '197', 9, 13),
(97, 'Id.', 91, 2, 12, 24, '394', 9, 19),
(98, 'Est.', 82, 1, 2, 25, '104', 4, 13),
(99, 'Netus.', 38, 5, 2, 22, '103', 5, 11),
(100, 'Felis.', 59, 5, 25, 20, '403', 4, 9),
(101, 'Augue.', 67, 4, 20, 26, '178', 4, 9),
(102, 'Sociosqu.', 65, 1, 17, 22, '249', 5, 15),
(103, 'Vivamus.', 35, 1, 16, 26, '250', 9, 17),
(104, 'Magnis.', 23, 2, 10, 26, '387', 5, 10),
(105, 'Accumsan.', 30, 2, 20, 23, '224', 7, 9),
(106, 'Pulvinar.', 97, 2, 14, 21, '193', 10, 23),
(107, 'Ultrices.', 43, 2, 2, 24, '392', 8, 10),
(108, 'At.', 2, 1, 25, 27, '496', 5, 25),
(109, 'Dolor.', 44, 1, 6, 26, '218', 7, 19),
(110, 'Elit.', 89, 3, 5, 22, '223', 5, 10),
(111, 'Suspendisse.', 51, 4, 3, 25, '414', 9, 11),
(112, 'Vivamus.', 17, 4, 24, 21, '114', 7, 16),
(113, 'Fusce.', 93, 2, 8, 24, '216', 8, 15),
(114, 'Magnis?', 9, 3, 12, 27, '373', 7, 12),
(115, 'Fusce.', 50, 4, 11, 23, '376', 8, 16),
(116, 'Quis.', 54, 3, 15, 30, '124', 7, 21),
(117, 'Justo.', 55, 2, 20, 29, '331', 6, 7),
(118, 'Lacus.', 45, 3, 27, 23, '287', 10, 9),
(119, 'Mauris.', 4, 3, 10, 21, '338', 7, 23),
(120, 'Est.', 33, 2, 24, 22, '213', 6, 22),
(121, 'Mus?', 52, 3, 25, 27, '206', 7, 14),
(122, 'Lectus.', 18, 5, 11, 29, '445', 6, 8),
(123, 'Rutrum.', 85, 4, 13, 28, '450', 6, 17),
(124, 'Tortor.', 65, 2, 13, 28, '363', 5, 6),
(125, 'Himenaeos?', 37, 5, 21, 27, '408', 7, 7),
(126, 'Non.', 70, 4, 6, 22, '265', 4, 20),
(127, 'Ultricies?', 47, 5, 6, 27, '463', 9, 18),
(128, 'Sapien.', 47, 2, 25, 24, '203', 9, 18),
(129, 'Mattis.', 8, 2, 18, 28, '238', 7, 8),
(130, 'Pellentesque.', 20, 3, 2, 26, '244', 6, 19),
(131, 'Sit.', 26, 5, 20, 21, '484', 9, 17),
(132, 'Hac?', 71, 3, 1, 26, '256', 9, 19),
(133, 'Sed.', 98, 4, 14, 25, '421', 9, 13),
(134, 'Platea.', 66, 3, 15, 24, '414', 5, 23),
(135, 'Tempor.', 90, 5, 8, 29, '219', 9, 18),
(136, 'Orci.', 24, 2, 10, 25, '242', 10, 13),
(137, 'Ac.', 63, 4, 17, 22, '457', 5, 24),
(138, 'Condimentum.', 67, 3, 2, 22, '273', 7, 13),
(139, 'Dis.', 64, 2, 11, 22, '432', 4, 18),
(140, 'Nec.', 62, 5, 15, 28, '308', 5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_outlet`
--

CREATE TABLE IF NOT EXISTS `bicycle_outlet` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `bicycle_outlet`
--

INSERT INTO `bicycle_outlet` (`id`, `name`, `address`) VALUES
(10, 'Ampicillin', '4 Mendota Court'),
(11, 'Atenolol', '1020 Chive Road'),
(4, 'Candida Alb', '46775 Schurz Alley'),
(9, 'Citroma', '62 Bluejay Drive'),
(7, 'day relief night relief sinus pe', '52168 Alpine Drive'),
(3, 'Geodon', '68 Little Fleur Road'),
(5, 'Glipizide', '5 8th Alley'),
(1, 'Metronidazole', '190 Dapin Hill'),
(2, 'Neutrogen Ageless Intensives Anti Wrinkle Deep Wrinkle Daily Moisturizer', '5 Fallview Park'),
(6, 'Viscumforce', '4 Shasta Lane'),
(8, 'Vitekta', '8409 Washington Way');

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_outlet_user_info`
--

CREATE TABLE IF NOT EXISTS `bicycle_outlet_user_info` (
`id` int(10) NOT NULL,
  `first_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bicycle_outlet_id` int(10) DEFAULT NULL,
  `user_role_id` int(2) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `bicycle_outlet_user_info`
--

INSERT INTO `bicycle_outlet_user_info` (`id`, `first_name`, `last_name`, `email`, `password`, `bicycle_outlet_id`, `user_role_id`) VALUES
(1, 'Kaan Burak', 'Sener', 'kaanburaksener@gmail.com', '192535', 1, 1),
(7, 'Roman', 'Nesterov', 'romannesterov@gmail.com', '12345', 2, 1),
(10, 'Dogan', 'Sener', 'dogansener@sample.com', '12345', 1, 2),
(12, 'Joonatan', 'Heiskanen', 'joo@gmail.com', '12345', 4, 1),
(16, 'Jennifer', 'Andrews', 'jandrews0@pen.io', 'RMRRTiG6', 1, 2),
(17, 'Cheryl', 'Diaz', 'cdiaz1@instagram.com', 'g54pJX', 1, 2),
(18, 'Wayne', 'Reynolds', 'wreynolds2@tumblr.com', 'ESM3yPBxGW', 1, 2),
(19, 'Annie', 'Medina', 'amedina3@lycos.com', 'uUfbIb07dD', 1, 2),
(20, 'Justin', 'Stevens', 'jstevens4@apple.com', 'I1s6U6PHWDB', 1, 2),
(21, 'Eric', 'Evans', 'eevans5@cbsnews.com', 'zTSxcB44dYa', 1, 2),
(22, 'Julia', 'Gonzalez', 'jgonzalez6@springer.com', 'I9i84Cnoj', 1, 1),
(23, 'Phyllis', 'Hall', 'phall7@sohu.com', 'ubghtf', 1, 2),
(24, 'Karen', 'Fields', 'kfields8@walmart.com', 'Id27iZ25NS1', 1, 2),
(25, 'Laura', 'Richards', 'lrichards9@yahoo.com', 'j3GoPaRkOnfW', 1, 2),
(26, 'Lois', 'Owens', 'lowensa@tripod.com', 'hFVKqFteF0WM', 11, 1),
(27, 'Donald', 'Snyder', 'dsnyderb@earthlink.net', 'Tm5qumJayrW', 11, 2),
(28, 'Phyllis', 'Kim', 'pkimc@w3.org', 'Pk4BsqwOdkkr', 11, 1),
(29, 'Mildred', 'Peters', 'mpetersd@ezinearticles.com', '5ILbiWHtGu', 11, 2),
(30, 'Thomas', 'Lane', 'tlanee@narod.ru', 'AWHZpw1iAr', 11, 2),
(31, 'Deborah', 'Hernandez', 'dhernandezf@gmpg.org', 'KNcg4piEP', 11, 2),
(32, 'Edward', 'Fernandez', 'efernandezg@digg.com', 'L64AvZfbtQ', 11, 2),
(33, 'Elizabeth', 'Marshall', 'emarshallh@sakura.ne.jp', 'Q347fKNL', 11, 2),
(34, 'Debra', 'Perez', 'dperezi@cmu.edu', 'MWR57y36Qnk', 11, 2),
(35, 'Scott', 'Collins', 'scollinsj@ibm.com', 'Y3zNvWTidrM', 11, 2),
(36, 'Deborah', 'Cunningham', 'dcunninghamk@paginegialle.it', 'CWTiiGJPizKI', 11, 2),
(37, 'Nicholas', 'Harvey', 'nharveyl@devhub.com', 'sNJ6ZG239', 2, 2),
(38, 'Stephen', 'Rice', 'sricem@tiny.cc', 'EpM82BMs9', 2, 2),
(39, 'Sara', 'Mason', 'smasonn@springer.com', 'fs0pchNum', 2, 2),
(40, 'Jose', 'Brown', 'jbrowno@clickbank.net', 'Mizhxf3', 2, 2),
(41, 'Diane', 'Wallace', 'dwallacep@dropbox.com', '9pbRDMA', 2, 1),
(42, 'Marie', 'Morales', 'mmoralesq@patch.com', 'yCc6bE', 2, 2),
(43, 'Scott', 'Rose', 'sroser@cmu.edu', 'uB93gmMPr', 2, 2),
(44, 'Lisa', 'Griffin', 'lgriffins@ning.com', 'a9LRGznb', 2, 2),
(45, 'Wayne', 'Fernandez', 'wfernandezt@skype.com', '2FR8JAHm9Dl', 3, 1),
(46, 'Jack', 'Gutierrez', 'jgutierrezu@disqus.com', 'vka5eNZ8ZY8d', 3, 2),
(47, 'Ronald', 'Webb', 'rwebbv@ow.ly', 'DjLKSpNN', 3, 2),
(48, 'Ann', 'Cole', 'acolew@mysql.com', 'gegJLVjoOuN', 3, 2),
(49, 'Martin', 'Franklin', 'mfranklinx@merriam-webster.com', 'XvXKvW9IZi7v', 3, 2),
(50, 'Rose', 'Hansen', 'rhanseny@upenn.edu', 'h9rXmJ2', 3, 2),
(51, 'Jerry', 'Knight', 'jknightz@networkadvertising.org', 'KmcVwo2Bj', 3, 1),
(52, 'Maria', 'Patterson', 'mpatterson10@netlog.com', 'y0qJUz', 3, 2),
(53, 'Bruce', 'Oliver', 'boliver11@163.com', '7hDzQ0c5xtaY', 3, 2),
(54, 'Albert', 'Murphy', 'amurphy12@uol.com.br', 'gpW0tUO0g', 3, 2),
(55, 'Sarah', 'Murphy', 'smurphy13@lulu.com', 'thbBvMYrN4', 4, 2),
(56, 'Bobby', 'Berry', 'bberry14@discuz.net', 'uBLbVtqjLf', 4, 2),
(57, 'Douglas', 'Simmons', 'dsimmons15@nifty.com', 'nIn7q5DM', 4, 2),
(58, 'Bruce', 'Fernandez', 'bfernandez16@dion.ne.jp', 'L9Vbx4Gf', 4, 2),
(59, 'Rachel', 'Schmidt', 'rschmidt17@dmoz.org', 'EziUNpduM', 4, 2),
(60, 'Lawrence', 'Wilson', 'lwilson18@gizmodo.com', '4cd1toh0ZZ2', 4, 2),
(61, 'Denise', 'Thompson', 'dthompson19@comsenz.com', 'G6p2uvLdm', 4, 2),
(62, 'Janice', 'Tucker', 'jtucker1a@google.de', 'oyFtfRV', 4, 2),
(63, 'Cynthia', 'Mitchell', 'cmitchell1b@uol.com.br', 'tbmGSYxiJ4TZ', 4, 1),
(64, 'Justin', 'Bryant', 'jbryant1c@bbc.co.uk', 'oZxzVeqC', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_rental_order`
--

CREATE TABLE IF NOT EXISTS `bicycle_rental_order` (
`id` int(10) NOT NULL,
  `rented_bicycle_outlet_user_id` int(10) NOT NULL,
  `outlet_customer_id` int(10) NOT NULL,
  `bicycle_info_id` int(10) NOT NULL,
  `rented_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `returned_bicycle_outlet_user_id` int(10) DEFAULT NULL,
  `returned_time` timestamp NULL DEFAULT NULL,
  `hour_discount` int(2) DEFAULT NULL,
  `sum_before_discount` decimal(10,0) DEFAULT NULL,
  `total_order_sum` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bicycle_rental_order`
--

INSERT INTO `bicycle_rental_order` (`id`, `rented_bicycle_outlet_user_id`, `outlet_customer_id`, `bicycle_info_id`, `rented_time`, `returned_bicycle_outlet_user_id`, `returned_time`, `hour_discount`, `sum_before_discount`, `total_order_sum`) VALUES
(5, 1, 1, 1, '2015-12-15 03:26:12', 1, '2015-12-15 10:25:59', 105, '2100', '1995'),
(6, 1, 1, 1, '2015-12-15 11:43:46', 1, '2015-12-16 11:40:36', 252, '5040', '4788'),
(7, 1, 1, 2, '2015-12-15 15:06:19', 1, '2015-12-16 15:05:11', 360, '2400', '2040'),
(8, 1, 1, 2, '2015-12-16 03:49:33', 1, '2015-12-18 06:45:27', 795, '5300', '4505');

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_type`
--

CREATE TABLE IF NOT EXISTS `bicycle_type` (
`id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bicycle_type`
--

INSERT INTO `bicycle_type` (`id`, `name`) VALUES
(8, 'BMX'),
(3, 'City'),
(7, 'Mountain'),
(1, 'Road'),
(2, 'Touring'),
(4, 'Trekking'),
(5, 'Triathlon');

-- --------------------------------------------------------

--
-- Table structure for table `outlet_customer`
--

CREATE TABLE IF NOT EXISTS `outlet_customer` (
`id` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `outlet_customer`
--

INSERT INTO `outlet_customer` (`id`, `first_name`, `last_name`, `address`, `phone`) VALUES
(1, 'John', 'Doe', 'This is the sample address for John Doe', '89296521903'),
(2, 'Julia', 'Washington', '0 Karstens Street', '89296521904'),
(3, 'Norma', 'Morgan', '5481 Melvin Park', '89296521905'),
(4, 'Ryan', 'Bowman', '32461 Old Shore Parkway', '89296521906'),
(5, 'Kelly', 'Hunt', '57137 Colorado Place', '89296521908'),
(6, 'Janet', 'Boyd', '7 Rusk Junction', '89296521909'),
(7, 'Julia', 'King', '0 High Crossing Lane', '89296521910'),
(8, 'Timothy', 'Fox', '5 Ludington Circle', '89296521911'),
(9, 'Betty', 'Chapman', '16299 Oak Circle', '89296521912'),
(10, 'Julia', 'Gibson', '35847 Hazelcrest Lane', '89296521913'),
(11, 'Roy', 'Reed', '56 Bobwhite Court', '89296521914'),
(12, 'Lillian', 'Welch', '9 Northland Trail', '89296521915'),
(13, 'Fred', 'Riley', '818 Tony Drive', '89296521916'),
(14, 'Roy', 'Peters', '7875 Carioca Court', '89296521917'),
(15, 'Marilyn', 'Fowler', '64 Clyde Gallagher Place', '89296521918'),
(16, 'Juan', 'Greene', '15493 Onsgard Avenue', '89296521919'),
(17, 'Teresa', 'Pierce', '22738 Main Circle', '89296521920'),
(18, 'Susan', 'Gray', '27505 Rusk Terrace', '89296521921'),
(19, 'Stephen', 'Stewart', '074 New Castle Hill', '89296521922'),
(20, 'Edward', 'Garza', '8 Packers Circle', '89296521923'),
(21, 'Howard', 'Gibson', '40265 Stuart Court', '89296521924'),
(22, 'Andrew', 'Hawkins', '0 Ruskin Plaza', '89296521925'),
(23, 'Louis', 'Garcia', '4479 Bayside Road', '89296521926'),
(24, 'Brian', 'Hanson', '7207 7th Trail', '89296521927'),
(25, 'Wanda', 'Cox', '7 Buell Parkway', '89296521928'),
(26, 'Samuel', 'Turner', '68914 Milwaukee Junction', '89296521929'),
(27, 'Bonnie', 'Carroll', '895 Manley Avenue', '89296521930'),
(28, 'Stephanie', 'Black', '1640 Canary Lane', '89296521931'),
(29, 'Melissa', 'Jordan', '9607 Northview Hill', '89296521932'),
(30, 'Adam', 'Simmons', '983 Menomonie Court', '89296521933'),
(31, 'Julia', 'Elliott', '11688 7th Parkway', '89296521934'),
(32, 'Randy', 'Brooks', '62 Riverside Center', '89296521935'),
(33, 'John', 'Romero', '1894 Leroy Park', '89296521936'),
(34, 'Julia', 'Boyd', '3 Hoard Pass', '89296521937'),
(35, 'Walter', 'Crawford', '78 Atwood Drive', '89296521938'),
(36, 'Norma', 'Banks', '32 Scofield Crossing', '89296521939'),
(37, 'Lillian', 'Dixon', '3 Crownhardt Lane', '89296521940'),
(38, 'Louise', 'Reid', '3920 Crowley Circle', '89296521941'),
(39, 'Richard', 'Baker', '99958 Hermina Avenue', '89296521942'),
(40, 'Craig', 'Bishop', '3 Springs Park', '89296521943'),
(41, 'Ann', 'Weaver', '40 Washington Terrace', '89296521944'),
(42, 'Judith', 'Parker', '411 Gerald Plaza', '89296521945'),
(43, 'Janet', 'Stephens', '2182 Dexter Street', '89296521946'),
(44, 'Harry', 'Harrison', '44 Hansons Alley', '89296521947'),
(45, 'Joan', 'Bryant', '8135 Delladonna Crossing', '89296521948'),
(46, 'Annie', 'Simpson', '61719 Arrowood Parkway', '89296521949');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
`id` int(10) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`) VALUES
(1, 'Manager'),
(2, 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bicycle_brand`
--
ALTER TABLE `bicycle_brand`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `U_bicycle_brand_name` (`name`);

--
-- Indexes for table `bicycle_disposal`
--
ALTER TABLE `bicycle_disposal`
 ADD KEY `FK_bicycle_disposal_outlet_id` (`outlet_id`), ADD KEY `FK_bicycle_disposal_bicycle_id` (`bicycle_id`);

--
-- Indexes for table `bicycle_info`
--
ALTER TABLE `bicycle_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `U_bicycle_info` (`name`,`brand_id`,`type_id`,`gear_number`,`wheel_size`), ADD KEY `FK_brand_id` (`brand_id`), ADD KEY `FK_bicyle_type_id` (`type_id`);

--
-- Indexes for table `bicycle_outlet`
--
ALTER TABLE `bicycle_outlet`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `U_bicycle_outlet` (`name`,`address`);

--
-- Indexes for table `bicycle_outlet_user_info`
--
ALTER TABLE `bicycle_outlet_user_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`), ADD KEY `FK_bicycle_outlet_user_info_bicycle_outlet_id` (`bicycle_outlet_id`), ADD KEY `FK_bicycle_outlet_user_info_user_role_id` (`user_role_id`);

--
-- Indexes for table `bicycle_rental_order`
--
ALTER TABLE `bicycle_rental_order`
 ADD PRIMARY KEY (`id`), ADD KEY `FK_bicyle_rental_order_outlet_customer_id` (`outlet_customer_id`), ADD KEY `FK_bicyle_rental_order_bicycle_info_id` (`bicycle_info_id`), ADD KEY `id` (`id`,`rented_bicycle_outlet_user_id`,`outlet_customer_id`,`bicycle_info_id`,`returned_bicycle_outlet_user_id`,`returned_time`,`hour_discount`,`sum_before_discount`,`total_order_sum`), ADD KEY `FK_bicyle_rental_order_rented_bicycle_outlet_user_id` (`rented_bicycle_outlet_user_id`), ADD KEY `FK_bicyle_rental_order_returned_bicycle_outlet_user_id` (`returned_bicycle_outlet_user_id`);

--
-- Indexes for table `bicycle_type`
--
ALTER TABLE `bicycle_type`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `U_bicycle_type` (`name`);

--
-- Indexes for table `outlet_customer`
--
ALTER TABLE `outlet_customer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bicycle_brand`
--
ALTER TABLE `bicycle_brand`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=152;
--
-- AUTO_INCREMENT for table `bicycle_info`
--
ALTER TABLE `bicycle_info`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=165;
--
-- AUTO_INCREMENT for table `bicycle_outlet`
--
ALTER TABLE `bicycle_outlet`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `bicycle_outlet_user_info`
--
ALTER TABLE `bicycle_outlet_user_info`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `bicycle_rental_order`
--
ALTER TABLE `bicycle_rental_order`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bicycle_type`
--
ALTER TABLE `bicycle_type`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `outlet_customer`
--
ALTER TABLE `outlet_customer`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bicycle_disposal`
--
ALTER TABLE `bicycle_disposal`
ADD CONSTRAINT `FK_bicycle_disposal_bicycle_id` FOREIGN KEY (`bicycle_id`) REFERENCES `bicycle_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_bicycle_disposal_outlet_id` FOREIGN KEY (`outlet_id`) REFERENCES `bicycle_outlet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bicycle_info`
--
ALTER TABLE `bicycle_info`
ADD CONSTRAINT `FK_bicyle_type_id` FOREIGN KEY (`type_id`) REFERENCES `bicycle_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_brand_id` FOREIGN KEY (`brand_id`) REFERENCES `bicycle_brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bicycle_outlet_user_info`
--
ALTER TABLE `bicycle_outlet_user_info`
ADD CONSTRAINT `FK_bicycle_outlet_user_info_bicycle_outlet_id` FOREIGN KEY (`bicycle_outlet_id`) REFERENCES `bicycle_outlet` (`id`),
ADD CONSTRAINT `FK_bicycle_outlet_user_info_user_role_id` FOREIGN KEY (`user_role_id`) REFERENCES `user_role` (`id`);

--
-- Constraints for table `bicycle_rental_order`
--
ALTER TABLE `bicycle_rental_order`
ADD CONSTRAINT `FK_bicyle_rental_order_bicycle_info_id` FOREIGN KEY (`bicycle_info_id`) REFERENCES `bicycle_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_bicyle_rental_order_outlet_customer_id` FOREIGN KEY (`outlet_customer_id`) REFERENCES `outlet_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_bicyle_rental_order_rented_bicycle_outlet_user_id` FOREIGN KEY (`rented_bicycle_outlet_user_id`) REFERENCES `bicycle_outlet_user_info` (`id`),
ADD CONSTRAINT `FK_bicyle_rental_order_returned_bicycle_outlet_user_id` FOREIGN KEY (`returned_bicycle_outlet_user_id`) REFERENCES `bicycle_outlet_user_info` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
