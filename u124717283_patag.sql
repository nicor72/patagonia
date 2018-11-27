
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 27, 2016 at 04:27 PM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u124717283_patag`
--

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `id_inbox` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id_inbox`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id_inbox`, `name`, `email`, `message`) VALUES
(1, 'ni', 'nicor72@gmail.com', 'nikkkk'),
(2, 'Nico', 'nicor72@gmail.com', 'Probando probando!!'),
(3, 'mars', 'mmars@hotmail.es', 'hola hola'),
(4, 'macelll', 'xett0@hotmail.com', 'hola, estaba comunicando con ustedes para ver cuanto cuesta el aceite'),
(5, 'dsafadsf', 'mmars@hotmail.es', 'ajshdlkalñkdjas'),
(6, 'mamamam', 'xett0@hotmail.com', 'mamkamsdmñasñldas'),
(7, 'colofordo', 'seto16@hotmail.com', 'hola conchetumadre..  dale dale'),
(8, 'crisss', 'musamon@hotmail.com', 'lakjsklkalksjadl'),
(9, 'mmamam', 'constanzabuvinic@gmail.com', 'mamamaamassdas'),
(10, 'maasakljsalkjd', 'musamon@hotmail.com', 'moaoaoaooaoaoss'),
(11, 'hola', 'mmars@hotmail.es', 'mammas');

-- --------------------------------------------------------

--
-- Table structure for table `oils`
--

CREATE TABLE IF NOT EXISTS `oils` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oil_name` varchar(100) NOT NULL,
  `oil_image` varchar(100) NOT NULL,
  `oil_description` text NOT NULL,
  `oil_inci` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `oils`
--

INSERT INTO `oils` (`id`, `oil_name`, `oil_image`, `oil_description`, `oil_inci`) VALUES
(2, 'Garlic', 'ajo.png', 'It contains glutamic acid, arginine, aspartic acid, leucine, lysine, valine. Manganese, potassium, calcium, phosphorus, magnesium, selenium, sodium, iron, zinc and copper. Vitamins B6, C, folic acid, pantothenic acid and niacin.\r\nUseful for the treatment of dermatitis, acne, herpes, ulcers, eczema, pimples, boils, abscesses, fights and prevents skin cancer, prevent and combat dry skin, promotes circulation which helps nourish the skin taking vitamins, oxygen and essential to every cell and tissue elements. Excellent in the treatment of fungi. Combat dandruff and flaky skin problems. It helps to quickly dry the pimples naturally and prevents scarring. Combat sensitive or irritated skin. Rejuvenates and prevents premature wrinkles.', 'Allium sativum'),
(3, 'Spirulina Algae', 'boldo.png', 'It contains vitamins, macro minerals, minerals, essential fatty acids, proteins, nucleic acids (DNA and RNA), chlorophyll and a wide range of phytochemicals.\r\nIt helps the rejuvenation of mature skin, strengthens hair, nails and skin. It eliminates accumulated toxins and cellulite. Moisturizes and reduces wrinkles.', 'Spirulina platensis'),
(4, 'Alga Fucus', 'alga-espirulina.png', 'The composition analysis of algae reveals the presence of vitamins, minerals, proteins, fibers and pigments. The concentration of trace elements in seaweed is ten times that of land plants.\r\nThe benefits of algae on the skin are rebalancing, nourishing, moisturizing, cell regeneration and detoxification, cleansing, oxygenating and remineralizing.', 'Fucus Vessiculosus'),
(6, 'Blue Berry', 'blue-berry.png', 'It contains antioxidants, fiber, vitamin C, hippuric acid, anthocyanin and carotenoid, phenolic acids, flavonols, pectins, collagen and minerals.\r\nThe pigment that gives the blue color to the fruit (the anthocianina), intervenes in human cell metabolism and decreases the action of free radicals associated with aging, cancer and other skin diseases. It has proven health benefits, among which include an antibiotic, antioxidant and anti-inflammatory', 'Blue Berry'),
(7, 'Almonds', 'almonds.png', 'High in minerals such as potassium, calcium, magnesium, phosphorus and iron. Protein (20%), fiber (14%) and fat (53.5%) mostly in the form of oleic acid and its contribution of vitamins (E, B1, B2).\r\nIt provides elasticity to the skin, leaving it hydrated, nourished and smooth. Prevents and repairs lines and wrinkles, and is optimal for application as highly sensitive skin of babies.', 'Prunus Dulcis'),
(8, 'Aloe Vera', 'aloe-vera.png', '', 'Aloe Vera'),
(9, 'Anise', 'anise.png', '', 'Pimpinella anisum'),
(10, 'Arnica', 'arnica.png', '', 'Arnica Montana'),
(11, 'Arrayan', 'arrayan.png', '', 'Myrtus Comunis'),
(12, 'Verbena', 'verbena.png', '', 'Verbena Officinalis'),
(13, 'Pi&ntilde;on Pine', 'pinion.png', '', 'Pynus Pinea'),
(14, 'Tea Tree', 'tea-tree.png', '', 'Melaleuca alternifolia'),
(15, 'Chilean Hazelnut', 'chilean-hazelnut.png', '', 'Gevuina Avellana Mol.'),
(16, 'Pumpkin', 'pumpkin.png', '', 'Cucurbita pepo L.'),
(17, 'Carrot', 'carrot.png', '', 'Daucus Carota'),
(18, 'Coffee', 'coffee.png', '', 'Coffea Arabica'),
(19, 'Boldo', 'boldo.png', '', 'Peumus boldus'),
(20, 'Green Tea', 'green-tea.png', '', 'Camellia Sinensis'),
(21, 'Borage', 'borage.png', '', 'Borago Officinalis'),
(22, 'Calendula', 'calendula.png', '', 'Calendula Officinalis'),
(23, 'Cinnamon', 'cinnamon.png', '', 'Cinnamomum Zeylanicum'),
(24, 'Canelo', 'canelo.png', '', 'Drimys Winteri'),
(25, 'Papaya', 'papaya.png', '', 'Carica Papaya'),
(26, 'Cannabis Seeds', 'cannabis.png', '', 'Cannabis Sativa (Hemp) Seed'),
(27, 'Chestnuts', 'chestnuts.png', '', 'Bertholletia excelsa'),
(28, 'White Onion', 'white-onion.png', '', 'Allium cepa'),
(29, 'Onion', 'onion.png', '', 'Allium cepa'),
(30, 'Avocado', 'avocado.png', '', 'Persea Gratissima'),
(31, 'Kidron', 'kidron.png', '', 'Lippia citriodora Kunth'),
(32, 'Gotu Kola', 'gotu-kola.png', '', 'Centella asiatica'),
(33, 'Thyme', 'thyme.png', '', 'Thymus Vulgaris'),
(34, 'Clove', 'clove.png', '', 'Eugenia Caroyphyllus'),
(35, 'Coconut (Solid)', 'coconut.png ', '', 'Cocos Nucifera'),
(36, 'Coconut (Liquid)', 'coconut-liquid.png', '', 'Capryl Caprylic.'),
(37, 'Curcuma', 'curcuma.png', '', 'Curcuma Longa'),
(38, 'Dandelion', 'dandelion.png', '', 'Taraxacum officinale'),
(39, 'Grapeseed', 'grapeseed.png', '', 'Vitis Vinifera'),
(40, 'Emu', 'emu.png', '', 'Emu'),
(41, 'Eucalyptus', 'eucalyptus.png', '', 'Eucaliptus Globulus'),
(42, 'Raspberry', 'raspberry.png', '', 'Raspberry'),
(43, 'Strawberry', 'strawberry.png', '', 'Fragaria vesca'),
(44, 'Wheat Germ', 'wheat-germ.png', '', 'Triticum vulgare'),
(45, 'White Tea', 'white-tea.png', '', 'Camellia Sinensis'),
(46, 'Ginkgo Biloba', 'ginkgo-biloba.png', '', 'Ginkgo biloba'),
(47, 'Goji', 'goji.png', '', 'Lycium Barbarum'),
(48, 'Pennyroyal', 'pennyroyal.png', '', 'Pennyroyal'),
(49, 'Pomegranate', 'granada.png', '', 'Punica granatum'),
(50, 'Ivy', 'ivy.png', '', 'Hedera Helix'),
(51, 'Red Tea', 'red-tea.png', '', 'Camellia Sinensis'),
(52, 'Fig', 'higo.png', '', 'Ficus Carica'),
(53, 'Hypericum or St. John''s Wort ', 'hypericum.png ', '', 'Hypericum perforatum'),
(54, 'Sauce White', 'sauce-white.png', '', 'Salix Alba'),
(55, 'Ginger', 'ginger.png', '', 'Zingiber Officinalis'),
(56, 'Jojoba', 'jojoba.png', '', 'Simmondsia Chinensis'),
(57, 'Sesame seed', 'sesame.png', '', 'Sesamum Indicum'),
(58, 'Shea Butter', 'shea-butter.png', '', 'Butyrospermum Parkii'),
(59, 'Lavender', 'lavender.png', '', 'Lavandula Officinalis'),
(60, 'Sandalwood', 'sandalwood.png', '', 'Santalum album'),
(61, 'Lemon', 'lemon.png', '', 'Citrus Limonum'),
(62, 'Macadamia', 'macadamia.png', '', 'Macadamia Ternifolia'),
(63, 'Rosemary', 'rosemary.png', '', 'Rosmarinus officinalis'),
(64, 'Magnolia', 'magnolio.png', '', 'Magnolia Tree'),
(65, 'Mango', 'mango.png', '', 'Mango'),
(66, 'Peanuts', 'peanuts.png', '', 'Arachis hypogaea'),
(67, 'Chamomile', 'chamomile.png', '', 'Chamomilla Recutita'),
(68, 'Maqui berry', 'maqui.png', '', 'Maqui Berry'),
(69, 'Matico herb', 'matico.png', '', 'Buddleja Globosa'),
(70, 'Physalis (Golden Berry or Uvilla)', 'physalis.png', '', 'Physalis peruviano'),
(71, 'Peppermint', 'peppermint.png', '', 'Mentha Piperita'),
(72, 'Blackberry', 'mora.png', '', 'Rubus ulmifolius'),
(73, 'Moringa', 'moringa.png', '', 'Moringa Oleifera'),
(74, 'Murta berry or Murtilla berry', 'murta.png', '', 'Ugni Molinae'),
(75, 'Orange', 'orange.png', '', 'Citrus Sinensis'),
(76, 'Walnut', 'walnut.png', '', 'Juglans Regia'),
(77, 'Prickly pear or Tuna', 'nopal.png', '', 'Opuntia Ficus Indica'),
(78, 'Walnut', 'walnut2.png', '', 'Juglans Regia (Walnut)'),
(79, 'Evening Primrose', 'evening-primrose.png', '', 'Oenothera'),
(80, 'Oregano', 'oregano.png', '', 'Origanum vulgaris'),
(81, 'Green Nettle', 'green-nettle.png', '', 'Urtica dioica'),
(82, 'Rosa Damascena', 'rosa-damascena.png', '', 'Rosa Damascena'),
(83, 'Rosehip', 'rosehip.png', '', 'Rose Hip');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
