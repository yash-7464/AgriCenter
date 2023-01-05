-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2021 at 06:48 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agro`
--
CREATE DATABASE IF NOT EXISTS `agro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `agro`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `a_id` int(5) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `question1` varchar(100) NOT NULL,
  `answer1` varchar(100) NOT NULL,
  `question2` varchar(100) NOT NULL,
  `answer2` varchar(100) NOT NULL,
  `a_image` varchar(100) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_id`, `u_name`, `email`, `password`, `question1`, `answer1`, `question2`, `answer2`, `a_image`) VALUES
(3, 'yash', 'yashpatel7464@gmail.com', '159', 'Enter your nick name', 'yash', 'Enter your school name', 'k b shah123', 'yash.jpg'),
(5, 'Mohit', 'm@gmail.com', '123', 'Enter your nick name', 'mohit', 'Enter your school name', 'aaa', 'mohit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `cart_id` int(5) NOT NULL AUTO_INCREMENT,
  `p_id` int(5) NOT NULL,
  `r_id` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  `total_price` int(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `cat_id` int(5) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `cat_image` varchar(100) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `cat_image`) VALUES
(6, 'seeds', 'seeds1.jpg'),
(7, 'pesticides', 'pesticides-235406.jpg'),
(9, 'fertilizer', 'fertilizer.jpg'),
(10, 'tools & instruments', 'tools & instruments.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `c_id` int(5) NOT NULL AUTO_INCREMENT,
  `p_id` int(5) NOT NULL,
  `r_id` int(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE IF NOT EXISTS `tbl_company` (
  `c_id` int(5) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(100) NOT NULL,
  `c_logo` varchar(100) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`c_id`, `c_name`, `c_logo`) VALUES
(10, 'Bayer', 'bayer.png'),
(11, 'Sygenta', 'syngenta.png'),
(12, 'Mahyco', 'mahyco.png'),
(13, 'Bollgard', 'bollgard.jpg'),
(14, 'Dharmaj', 'dharmaj.jpg'),
(15, 'UPL', 'upl.jpg'),
(16, 'IFFCO', 'iffco.webp'),
(17, 'urea', 'urea.jpg'),
(18, 'machinery', 'download.jpg'),
(19, 'ICON', 'icon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `con_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`con_id`, `name`, `email`, `subject`, `message`) VALUES
(4, 'yash b patel', 'yashpatel7464@gmail.com', 'aaaaaaaaaaaaaaaa', 'asasaasasasasasasadsasasasasasa ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE IF NOT EXISTS `tbl_faq` (
  `f_id` int(5) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `question` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`f_id`, `u_name`, `email`, `contact`, `question`, `description`, `answer`, `date`) VALUES
(1, 'Mohit', 'm@gmail.com', 8586282, 'realy u wil provide this service??', 'sdcjshcjahcjh ks hj', 'yes				', '20/09/2020'),
(2, 'yash', 'yashpatel7464@gmail.com', 2147483647, 'why seeds use', 'seeds are the best', 'onion', '2020-10-29'),
(3, 'pardip', 'p@gmail.com', 1234567899, 'what is the seeds', 'who seeds are the best', '', '24/10/2020');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `f_id` int(5) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`f_id`, `u_name`, `email`, `title`, `description`, `date`) VALUES
(1, 'mohit', 'm@gmail.com', 'seeds', 'ajit cotton seeds are the best seesds', '21/09/2020'),
(2, 'yash', 'yashpatel7464@gmail.com', 'seeds', 'addasdas', '2020-10-23'),
(3, 'pardip', 'p@gmail.com', 'fruts', 'fruts is the best', '24/10/2020'),
(4, 'ronak', 'r@gmial.com', 'vegitable', 'it is the best product', '24/10/2020');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE IF NOT EXISTS `tbl_history` (
  `h_id` int(5) NOT NULL AUTO_INCREMENT,
  `p_id` int(5) NOT NULL,
  `r_id` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  `total_price` int(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbl_history`
--

INSERT INTO `tbl_history` (`h_id`, `p_id`, `r_id`, `quantity`, `total_price`, `status`, `date`) VALUES
(26, 27, 1, 2, 598, 'pending', '05/12/2020'),
(27, 18, 1, 3, 1950, 'pending', '05/12/2020'),
(28, 18, 1, 1, 650, 'pending', '05/12/2020');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `p_id` int(5) NOT NULL AUTO_INCREMENT,
  `cat_id` int(5) NOT NULL,
  `c_id` int(5) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_code` varchar(100) NOT NULL,
  `p_o_price` int(5) NOT NULL,
  `p_n_price` int(5) NOT NULL,
  `p_image1` varchar(100) NOT NULL,
  `p_image2` varchar(100) NOT NULL,
  `p_color` varchar(100) NOT NULL,
  `p_weight` varchar(100) NOT NULL,
  `p_dose` varchar(100) NOT NULL,
  `p_process` varchar(500) NOT NULL,
  `p_features` varchar(200) NOT NULL,
  `p_materials` varchar(200) NOT NULL,
  `p_description` varchar(500) NOT NULL,
  `p_stock` int(5) NOT NULL,
  `p_date` varchar(20) NOT NULL,
  `sub_cat_id` int(5) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `cat_id`, `c_id`, `p_name`, `p_code`, `p_o_price`, `p_n_price`, `p_image1`, `p_image2`, `p_color`, `p_weight`, `p_dose`, `p_process`, `p_features`, `p_materials`, `p_description`, `p_stock`, `p_date`, `sub_cat_id`) VALUES
(5, 6, 10, 'SuperPass First Class BG2', 'SP 7149 BG2', 800, 730, 'superpass first class BG2.jpg', 'superpass first class BG2-2.jpg', 'orange', '4 - 5 gm', ' 1', ' R-R: 5 ft; P-P: 2 ft', 'Variety has hairy leaves & a good flushing character\r\n		', 'seeds', '-', 43, '22/09/2020', 2),
(6, 6, 11, 'Sweet Corn', 'Sugar-75', 260, 253, 'sweet corn-2.png', 'sweet corn.png', 'Yellow', '50gm', '1', '14-16 of Kernels', ' Plant height : 5 to 6 ft.\r\n Maturity : 78-85 days. 50% \r\nsilking : 53-55 days. \r\nPopulation /ha : 55000-60000			', '-', '-	', 45, '22/09/2020', 3),
(9, 6, 11, 'okra', 'OH-940', 90, 85, 'okra1.png', 'okra2.png', 'green', '50gm', '1', '-			', 'Disease: Good field tolerance to YVMV\r\nYield: High yield potential\r\n			', '-			', '-		', 23, '22/09/2020', 0),
(10, 6, 11, 'Cucumber', 'kafka F1', 800, 750, 'cucumber.png', 'cucumber1.png', 'green', '10000seeds', '11000 seeds per acre.', '-', 'Crop Duration: 90-105 days after sowing. Early , High femaleness, Excellent setting and Cluster bearing (4-5 fruits /cluster).', '-			', 'Segment: Protected cultivation which is a Beit Alfa segment.\r\nPlants: Vigorous plant, strong vine, broader and dark green leaves.\r\nCrop Duration: 90-105 days after sowing. Early , High femaleness, Excellent setting and Cluster bearing (4-5 fruits /cluster).\r\nFruit: Cylindrical, uniform. 15-18 cm in length and weight of 100-175g with smooth skin.\r\nDisease: Good field tolerance to DM and Virus.	', 1000, '22/09/2020', 0),
(11, 7, 14, 'padgham', '-', 1500, 1300, 'pdagham.png', 'pdagham2.png', '-', '1liter', '20gm', '-			', 'Padgham is combination insecticide able to control Jassids, Thrips & Bollworm in cotton.\r\nPadgham act as quick stomach & contact insecticides.\r\nPadgham has advance ZC formulation.			', 'Thiamethoxam 12.6% + Lambda-Cyhalothrin 9.5% ZC\r\n			', '-		', 15000, '22/09/2020', 0),
(13, 7, 14, 'romilo', '', 0, 900, 'romilo.png', 'SPORTO2.png', '-', '100ml', '10ml', '10ml add 1 spraye		', 'Romilo is non-systemic foliar fungicide with protective action.\r\nRomilo is a multi-site inhibitor affecting various enzymes and other metabolic processes in fungi. It inhibits spore germination and is', 'Chlorothalonil 75% WP\r\n		', '-			', 99, '22/09/2020', 0),
(14, 7, 14, 'padkar', '-', 500, 450, 'padkar1.png', 'padkar2.png', '-', '500ml', '25ml', '25ml add to 1 spraye			', 'CS formulation helps to control weed more effectively.\r\nPadkar is selective herbicides for use in soyabean, cotton and chilly where it controls susceptible annual grasses and broad leaf weed as they g', 'Pendimethalin 38.7% CS			', '-			', 650, '22/09/2020', 0),
(16, 7, 14, 'rujuta', '-', 1899, 1800, 'rujuta.png', 'rujuta2.png', 'red', '50ml', '2kg', '2kg to add 50ml			', 'Rujuta consist amino acid, vitamins and proteins.\r\nRujuta helps increase flowering and stop dropping of flowering.\r\nRujuta increase quality of fruit like size,weight and color.\r\nRujuta gives more stre', 'Amino Acid Liquid			', '-			', 500, '22/09/2020', 0),
(17, 9, 14, 'suffer', 'suffer-90', 400, 399, 'suffar-90.png', 'suffar-90-2.png', 'wight', '20kg', '-', '1 acker to add 20kg', 'Suffar 90 is a micro nutrient fertilizer developed by DCGL in a state of the art high technical plant in Ahmedabad.\r\nSuffar 90 is ready food for plant because it is in Sulfate form(SO4-2), which is re', 'Sulphur 90% WDG\r\n			', '-			', 100, '22/09/2020', 0),
(18, 6, 11, 'groundunt', '-', 700, 650, 'groundnut.jpg', 'groundnut1.jpg', 'red', '5kg', '-', '-			', 'Our Raw Peanuts are\r\n100 % Organic\r\nGrown without synthetic Pesticides\r\nGrown without synthetic GMOs\r\nA source of good fat\r\nBeneficial to health because of bio-active compounds it contains\r\nRich in an', '-			', '-			', 91, '28/09/2020', 2),
(19, 6, 12, 'castor', 'goldi-21', 399, 300, 'castor.jpg', 'castor1.jpg', 'black', '1kg', '-', '-			', 'HIGH GERMINATION SEEDS\r\nEASY TO GROW\r\nALSO USE FOR OIL EXTRACTION PURPOSE.			', '-	', '-			', 489, '28/09/2020', 2),
(20, 6, 14, 'sunflower', 'sun-101', 999, 850, 'sunflower1.jpg', 'sunflower.jpg', 'wight', '5kg', '-', '-			', '-LOW CALORIE SNACK: Being low in calories, it can help in reducing the extra weight and avoid you from the intake of high calorie junk foods.\r\n-RICH IN MAGNESIUM: These are a rich source of minerals, ', '	-		', '-			', 100, '28/09/2020', 2),
(21, 6, 14, 'Jau', '-', 299, 199, 'jau.jpg', 'jau2.jpg', 'gray', '900gram', '-', '-			', '-This is a Vegetarian product.\r\n-Boosts Immune System.\r\n-Barley is a good source of selenium, which helps preserve skin elasticity, thereby protecting it against free radical damage and loosening.\r\n-A', '-			', '-These items are dispatched from and sold by different sellers. Show details\r\n-Buy the selected items together\r\n-This item:Simply Raw : Barley Grain/Natural and Rich Fiber Jau Seeds (Pack of 900 Gram) â‚¹ 199.00\r\nMangalam Camphor Tablet Jar (Camphor Tablet Jar, 100 gm X Pack of 1) â‚¹ 195.00(â‚¹ 1.95 / 1 gram)	', 491, '09/10/2020', 3),
(22, 6, 12, 'wheat', 'aa11', 500, 200, 'wheat.jpg', 'wheat2.jpg', '-', '1.5kg', '-', '-			', 'Rare Desi Wheat Seeds variety\r\nHelps in Growing Wheat Grass\r\nIt is Chemical-Free			', '-			', 'Rare Desi Wheat Seeds variety\r\nHelps in Growing Wheat Grass\r\nIt is Chemical-Free			', 100, '09/10/2020', 3),
(24, 6, 13, 'bajra', '-', 2999, 2299, 'bajara.jpeg', 'bajra.jpeg', '-', '9kg', '-', '-			', 'Seed Type: Grass\r\nSuitable For: Outdoor\r\nOrganic Plant Seed\r\nSeed For: HYBRID BAJRA / PEARL MILLET SEEDS FOR FARMING OR AGRICULTURE ( 9 KGS SEEDS )			', '-			', 'Duration : 78-82 days , Plant Height(cm) : 225-300 cm , Tillering(n) : 7-10n , Disease Resistance(DM) : Resistance , Ear Shape : Long , Ear Compactness : Strong , Lodging : Non Lodging Remark : Dual purpose hybrid for high grain			', 47, '09/10/2020', 3),
(25, 6, 12, 'Onion', '-', 300, 100, 'onion.jpeg', 'onion.jpeg', '-', '5kg', '-', '-			', 'Seed Type: Vegetable\r\nSuitable For: Outdoor\r\nOrganic Plant Seed\r\nSeed For: Onion Nasik Red Vegetable Seeds\r\nQuantity: 300 per packet			', '-			', 'Product Description Number of seeds: 300 Seeds: Onion Nasik Red Variety: Export Quality Seeds Germination: Min. 70% Plant height: Climber Plant to plant spacing: 5 cm Sunlight: Prefer Full Ease-of-care: Easy Best if grown directly from seeds Soil Preparation: Vegetable grows well in any fast-draining garden loam. It thrives in soils with a lot of organic matter, as long as theyâ€™re not too acidic. Incorporate 3â€ (8 cm) of good garden compost or well-aged manure into the bed at planting time. ', 100, '09/10/2020', 4),
(26, 6, 12, 'Capsicum', '-', 299, 99, 'Capsicum.jpeg', 'Capsicum2.jpeg', 'green', '100per packet', '-', '-			', 'Seed Type: Vegetable\r\nSuitable For: Outdoor\r\nOrganic Plant Seed\r\nSeed For: Seeds Plants Garden Capsicum Green Organic Vegetable F1 Hybrid Seeds Pack\r\nFlowering Plant\r\nQuantity: 100 per packet			', '-	', '\r\nWe are providing 100% organic f1 hybrid quality seeds That is germinate very easily You can grow the seed by two typeÃƒ?Ã‚?Ãƒ?Ã‚Â¢Ãƒ?Ã‚??Ãƒ?Ã‚??s technique 1. Pro-tray system 2. Direct potting system In the both of these methods, the process of seed production will remain the same. You have to do it in the evening 1.First you need to prepare the soil by mixing 90%soil+10% organic manure. 2.After the soil is ready. Make 1-inch deep crater in the soil, Put the soil layer equal to the seed above ', 100, '09/10/2020', 4),
(27, 6, 12, 'Cabbage', '-', 500, 299, 'Cabbage.jpeg', 'Cabbage.jpeg', 'green', '100per packet', '-', '-			', 'Seed Type: Vegetable\r\nSuitable For: Indoor, Outdoor\r\nOrganic Plant Seed\r\nSeed For: Cabbage\r\nQuantity: 100 per packet		', '-			', 'In The Box\r\n1 Packet of seeds		', 98, '09/10/2020', 4),
(28, 6, 12, ' CARROT', '-', 299, 199, 'CARROT.jpeg', 'CARROT2.jpeg', 'orange', 'PACK OF 50 SEED X 4 PER PKTS', '-', '-			', 'Seed Type: Vegetable\r\nSuitable For: Outdoor\r\nOrganic Plant Seed\r\nSeed For: CARROT EARLY NANTUS VEGETABLES SEED (PACK OF 50 SEED X 4 PER PKTS) 4 CARROT EARLY NANTUS\r\nQuantity: 200 per packet			', '-			', 'In The Box\r\n4 PACKET OF CARROT EARLY NANTUS			', 100, '09/10/2020', 4),
(29, 7, 10, 'FAME', 'Flubendiamide 480SC (39.35% w/w) ', 250, 221, 'insecticides1.png', 'insecticides1.png', '-', '100ml', '1spray in 10ml', 'Fame contains Flubendiamide which is the first representative of a new chemical insecticide class â€“ the diamides. In contrast to other insecticide classes targeting the insect nervous system, Flubendiamide acts at receptors in insect muscles causing an immediate cessation of feeding and thus avoids crop damage. It is well suited for the control of a broad range of Lepidoptera pests. The unique mode of action makes the compound well suited as a tool in insect resistance management programmes.		', '*Control of broad range of Lepidoptera pests. â€“ Pronounced larvicidal activity, product has to be ingested â€“ No ovicidal activity\r\n*Fame is fast acting and leads to rapid cessation of feeding imme', '-		', '*In contrast to most commercially successful insecticides which act on the nervous system, Flubendiamide disrupts proper muscle function in insects and therefore represents a novel, unique mode of action. These *characteristic symptoms are induced by Flubendiamide through the activation of ryanodine-sensitive intracellular calcium release channels (ryanodine receptors, RyR) as shown by Ca2+ fluorescence measurements *in insect neurons as well as in recombinant cells expressing the cloned ryanodi', 0, '10/10/2020', 6),
(30, 7, 10, 'Bayer Confidor Super Insecticide', 'Imidacloprid 350 SC (30.5% w/w)', 599, 499, 'confidor.png', 'confidor.png', '-', '10ml, 20ml,100ml', '1spray in 5ml', '-			', 'Helps to increase the efficiency.\r\nVery economical insecticide.\r\nBeing systemic in nature.\r\nResults in better growth with stress shield effect.			', 'Abamectin 1.8% EC			\r\nAcephate 75% SP \r\nAcetamiprid 20% SP', 'Imidacloprid is antagonist to the nicotinic acetyl choline receptor in the central nervous system.\r\nIt disturbs the proper signal transmission system leading to excitation of nerve cell.\r\nConsequently a disorder of the nervous system occurs leading finally to the death of the treated insect.			', 99, '10/10/2020', 6),
(31, 7, 10, 'Bayer Decis 2.8 Insecticide', 'Deltamethrin 2.8 EC (2.8% w/w)', 299, 250, 'Bayer Decis 2.8 Insecticide.jpg', 'Bayer Decis 2.8 Insecticide.jpg', '-', '100ml,500ml', '5ml', '1spary in 5ml			', 'Remarkable knockdown effect.\r\nExhibits a good residual activity.\r\nAllows a good penetration in cuticle of leaves.\r\nVery low solubility in water.\r\nVery low vapor pressure.\r\nDemonstrates repellent & ant', '-		', 'Decis acts on the insects by contact and ingestion.\r\nIts high lipophilicity provides a high affinity with the insect cuticle.\r\nIn the insect body it affects the nerve transmission by acting on axon.\r\nIt disrupts the conduction of the nervous influx by modifying the kinetics of the sodium canal.	', 95, '10/10/2020', 6),
(32, 7, 10, 'Bayer Jump Insecticide', 'Fipronil 80 WG (80% w/w)', 700, 600, 'Bayer Jump Insecticide.jpg', 'Bayer Jump Insecticide.jpg', '-', '1liter', '10ml', '1spray in 10ml			', 'Innovative Formulation (Fluid bed technology).\r\nEase in handling, measuring and dosing.\r\nFree from dust particles, good suspension in water.\r\nLow dose.\r\nSuitable for IPM: Jump is an ideal choice for I', 'Do not use product near the areas of Bee-keeping			', 'Give first spray as soon as incidence of stem borer (appearance of dead hearts) and leaf folder (appearance of white stripes on leaves) starts.\r\n1-2 more sprays depending upon severity of the incidence.			', 100, '10/10/2020', 6),
(33, 7, 10, 'Bayer Sencor herbicide', 'Metribuzin 70% WP', 2000, 1500, 'Bayer Sencor herbicide.jpg', 'Bayer Sencor herbicide.jpg', '-', '500G', '10g', '		\r\n			1spary in 10g			\r\n		', '			\r\n			Sencor 70 WP is a selective herbicide which effectively controls weeds in wheat, potato, SOYA BEAN, tomato and sugarcane. It is a pre-emergent herbicide and can also be applied as early post. ', '			-						\r\n			', '			We are a most trusted name among the topmost companies in this business, involved in offering Sencor Pesticide.						', 100, '10/10/2020', 7),
(34, 7, 15, 'UPL Avert Herbicide', ' Metribuzin 70% WP', 300, 250, 'UPL Avert Herbicide.jpg', 'UPL Avert Herbicide.jpg', '-', '500', '10G', '1spray 10G			', 'No residual effect on succeeding crops\r\nBroad spectrum activity and low dose\r\nEconomical and cost efficient\r\nSencor acts through the roots and leaves			', '-			', '-	', 99, '10/10/2020', 7),
(35, 7, 15, 'UPL Total Herbicide', 'Sulfosulfuron 75% + Metsulfuron Methyl 5% WG', 800, 750, 'UPL Total Herbicide.jpg', 'UPL Total Herbicide.jpg', '-', '7kg', '50G', '-			', 'Kills weed plant from root\r\nEnhance yield production\r\nEnsures main crop gets nutrients from soil\r\nCommonly use for control of grass and weed			', '-			', '-			', 100, '10/10/2020', 7),
(36, 7, 15, 'UPL Sweep Power Herbicide', 'Glufosinate Ammonium 13.5% w/w SL', 1000, 900, 'UPL Sweep Power Herbicide.jpg', 'UPL Sweep Power Herbicide.jpg', '-', '1L', '50ml', '1spray in 50ml		', 'Unique among broad-spectrum herbicides\r\nPlays vital in plant nitrogen metabolism		', '-			', '-			', 100, '10/10/2020', 7),
(41, 7, 14, 'ROMILO', 'Chlorothalonil 75% WP', 900, 850, 'romilo.png', 'romilo.png', '-', '1kg', '100G', '-			', 'Romilo is non-systemic foliar fungicide with protective action.\r\nRomilo is a multi-site inhibitor affecting various enzymes and other metabolic processes in fungi. It inhibits spore germination and is', '-			', '-			', 100, '10/10/2020', 8),
(42, 6, 14, 'KAVIRAJ', 'Metalaxyl 8% + Mancozeb 64% WP', 2000, 1500, 'kaviraj.png', 'kaviraj.png', '-', '1kg', '25G', '1spary in 25G			', 'Kaviraj is highly systemic fungicide.\r\nMancozeb acts by its contact action which inactivates the sulphahydral (SH) groups in enzymes of fungi and Metalaxyl inhibits protein synthesis, growth and repro', '	-		', '-			', 100, '10/10/2020', 8),
(43, 7, 14, 'PRABHAV', 'Propineb 70 % WP', 1900, 1400, 'PRABHAV.png', 'PRABHAV.png', '-', '1.5kg', '50g', '1spary in 50g			', 'Prabhav is a contact fungicide based on Propineb Technical containing 70% WP Propineb as active ingredient and balance auxiliaries as insert material. Propineb is used as a foliar spray for the contro', '-			', '-			', 100, '10/10/2020', 8),
(44, 7, 14, 'LAHOOTI', 'Metalaxyl 35% WS', 2200, 2000, 'lahooti.png', 'lahooti.png', '-', '1kg', '75g', '1spary in 75g			', 'Lahooti is working fast and systemic fungicide.\r\nLahooti is more effective on downy mildew.\r\nLahooti is protecting crop from fungal disease for long time.\r\nFor the control  of downy mildew in maize, b', '-			', '-			', 100, '10/10/2020', 8),
(45, 6, 11, 'Basidone', '-', 3999, 3555, 'st1.jpg', 'st1.jpg', '-', '100ltr', '50g', '		\r\n			-			\r\n		', '			\r\n			-						', '			-						\r\n			', '			Known for our reasonable rates, we have come up with a world class assortment of Organic Seed Treatment Fertilizers.State	Liquid\r\nUsage	For Agriculture use\r\nBrand	Basidone\r\nPack Size	1 Litre\r\nPack Type	Bottle\r\nPurity (%)	99%\r\nOrganic	Yes\r\nMinimum Order Quantity	10 Litre						', 100, '13/10/2020', 9),
(46, 6, 11, 'Humivarsha', '-', 3000, 2550, 'st2.jpg', 'st2.jpg', 'black', '5kg', 'It is Applied @ 1-2 Kg per acre for each application in the field crops and Plants.', '-			', 'Usage/Application	Agriculture\r\nPackaging Size	5 kg\r\nPackaging Type	Plastic Bucket\r\nBrand	Humivarsha\r\nPack Size	5 kg\r\nColor	Black			', '-			', 'Humivarsha is enriched with plant growth substances like seaweed humic acid & amino acid etc for soil applications. It is an organic product for better growth and productivity by strengthening roots. It can be used on all crops & is completely biodegradable and non toxic.\r\n			', 100, '13/10/2020', 9),
(47, 7, 11, ' TSR Organic Fertilisers', '-', 599, 555, 'st4.jpg', 'st5.jpg', '-', '5kg', '1kg', '1kg for 1 acer			', '	Micro Nutrimix granules 5 Kg bucket pack of 1\r\nWithstand Stress, Rains and Droughts conditions * Develop Resistance against Pests and Diseases\r\nIncreases tillers in paddy, thereby more yields * Reduc', '-', '-			', 100, '13/10/2020', 9),
(48, 7, 12, 'Ampoxcilin', '-', 299, 250, 's3.jpg', 's31.jpg', '-', '500g', '50g', '50 per acker			', 'Ampoxcilin (Combi2)-Our Chelated Multi Micronutrient Fertilizer provides complete nutrition to any plant.\r\nComposition :- Zn- 5.0%, Fe - 4.0%, Mn - 2.5%, Cu- 0.8%, B - 1.5%, Mo - 0.1% MgO-2.0%, S-2.8%', '-			', 'FOLIAR SPRAY - 1.25gms in 1 litre water by spray (250gms in 200 litres water per acre) DRIP - 2.5gms in 1 litre water (500gms in 200 litres of water per acre).			', 100, '13/10/2020', 9),
(49, 9, 17, 'urea', 'urea46', 185, 174, 'urea1.jpg', 'urea2.jpg', 'wight', '2000gm', '100gm', '2000gm per acer			', 'Urea fertilizer provides nitrogen, which helps in green leafy growth that not only makes your garden look lush, but is also for photosynthesis 100% Water Soluble Nitrogen fertilizer\r\nPlease do not use', 'Neem Coated Urea 46% nitrogen Fertilizer Soil Application and Water Soluble for All Plants and Garden (2000 gm)			', 'Urea fertilizer provides nitrogen, which helps in green leafy growth that not only makes your garden look lush, but is also for photosynthesis 100% Water Soluble Nitrogen fertilizer\r\nPlease do not use excess quantity . Due to excess quantity plant will dry .			', 999, '22/11/2020', 10),
(50, 9, 16, 'N.P.K', 'NPK 19-19-19', 500, 450, 'npk1.jpg', 'npk2.jpg', 'gray', '1kg', '1kg ', '1kg per acer		', 'Suitable for all crops Gives crop early boost Increases vigour of the crop Makes the crop healthy Since pesticides and fungicides are very compatible with this product. All pesticides and fungicides c', 'Product Specification: Total Nitrogen percent by weight, minimum â€“ 19.0 Nitrate Nitrogen percent by weight, maximum â€“ 4.0 Ammoniacal Nitrogen percent by weight, minimum - 4.5 Urea Nitrogen percent', 'Applications: For initial vegetative growth period, bud bursting, rejuvenation of vegetative growth\r\nDosage: Drip Irrigation- As per schedule Foliar spray- 1.0 to 1.5 % solution (10 to 15 gm per litre of water) 2-3 sprays from 40-50 to 60-70 days after sowing at 10-15 days interval			', 500, '22/11/2020', 10),
(51, 9, 16, 'NPK', 'npk 19', 588, 500, 'npk.jpeg', 'npk.jpeg', 'white', '10kg', '10kg', '		\r\n			10kg per acer			\r\n		', '			\r\n			\r\nBrand: Springfield\r\nModel Name: Organic NPK\r\nQuantity: 1000 g\r\nUsed For: plants\r\nType: Fertilizer\r\nForm Factor: Powder\r\nContainer Type: Bag						', '			\r\nSoil Manure						\r\n			', '			\r\nNitrogen is good at making the leaves grow. Phosphorus improves fruit and/or flower production as well as root growth. Potassium is great for overall plant health.						', 100, '28/11/2020', 10),
(52, 9, 17, ' Earth Magic Potting Soil', ' Earth Magic Potting Soil123', 555, 500, 'fer1.jpg', 'fer2.jpg', 'black', '5kg', '5kg', '5kg par acer			', 'Contains microbes which enhance the soil properties			', 'Completely organic and does not contain any harmful chemicals\r\n			', 'Contains micro and macro nutrients. Has good water holding capacity\r\nIts antifungal property helps the plants to grow healthy			', 996, '28/11/2020', 10),
(53, 10, 18, 'ROLL CUT SECATEUR', 'GTS003', 555, 500, 'm1.jpg', 'm2.jpg', 'yellow', '420gm', 'no dose', '		\r\n			Anti-slip powder coated handles with comfortable yellow grips - ensures maximum visibility in the garden with comfort and accuracy\r\n			\r\n		', '			\r\n			Anvil made of brass to protect the stem from bacterial infection post cutting						', '			iron and plastic						\r\n			', '			 \r\n\r\nRoll Cut Secateurs are used for cutting stems of towers and shrubs up to 12 mm in diameter\r\nPruning Secateur Roll Cut (With Dip Sleeve), designed to ensure user-friendliness, it has a self-locking system.\r\nAnti-slip powder coated handles with comfortable yellow grips - ensures maximum visibility in the garden with comfort and accuracy\r\nAnvil made of brass to protect the stem from bacterial infection post cutting\r\nBright Chrome Finish for extra durabilit						', 100, '28/11/2020', 11),
(54, 10, 18, 'BOMBAY 7 HOE/POWRAH', 'HOE009', 500, 490, 'pwara1.jpg', 'pwara2.jpg', 'black', '1.2kg', 'no dose', 'no process			', 'Higher rib length facilitates the distribution of load centrally - thus reduces fatigue of the user.			', 'iron			', 'Made from Tata Steelâ€™s prime steel with low phosphorus & sulphur content which ensures higher strength & wear resistance.\r\nHigher bending strength for better load bearing capacity.\r\nHigher rib length & eye height gives longer product life.\r\nHigher rib length facilitates the distribution of load centrally - thus reduces fatigue of the user.			', 500, '28/11/2020', 11),
(55, 10, 18, 'RAHUL JAI KISAN HI TECH SPRAYER', 'sprayer123', 1800, 1700, 'spray1.jpg', 'spray2.jpg', 'blue', '3kg', 'no dose', 'no process 			', 'no features			', 'plastic and steel			', 'no description			', 25, '28/11/2020', 11),
(56, 10, 18, 'MULCHING MACHINE', 'mulching 159', 45000, 40000, 'MULCH-LAYER_compact.jpg', 'MULCHING-LAYER_3jpg_compact.jpg', 'no color', '80kg', 'no dose', 'no process			', 'Tractor drawn Mulching machine, suitable for all tractor models and minimum 30HP required\r\nSuitable for 3 ft and 4 ft mulching sheet\r\nLow maintenance, high quality steel\r\nQuick setup and portable\r\n			', 'iron			', 'Kamal Kisan Mulch machine is a simple tractor attachment that can lay the mulch sheet on beds. The use of machine can reduce labor requirements and covers one acre of mulching in two hours. The machineâ€™s versatility allows it to be used with a wide variety of bed sizes and with mini and regular tractors.			', 10, '28/11/2020', 11),
(57, 6, 19, 'watermelon', 'Watermelon F1', 120, 60, 'watermelon.jpg', 'watermelonpacket.jpg', 'green', '50seeds', 'no dose', 'no process			', 'Watermelon f1 hybrid green\r\nContains 10 seeds\r\nKitchen Garden Packet			', 'no materials			', 'no description			', 50, '30/11/2020', 5),
(58, 6, 19, 'PAPAYA', 'papaya123', 175, 135, 'papaya1.jpg', 'papaya2.jpg', 'orange', '20seeds', 'no dose', 'no process			', '75-85% germination\r\nShowing Time - Feb TO March,Jun To Jul,Oct TO Nov(Harvesting Period - 8 Month)\r\nQuantity 10 gm.\r\nSoil: Well drained medium, soil\r\n1Kg - 1.2 gm Planting after. 45 days, Round And lo', 'no materials			', 'no description			', 50, '30/11/2020', 5),
(59, 6, 19, 'muskmelon ', 'muskmelon-96', 85, 80, 'muskmelon1.jpg', 'muskmelon2.jpg', 'Yellow-green', '10gm', 'no dose', 'no process			', 'no features			', 'no materials			', '75-85% germination\r\nShowing Time - Jan To Mar (Harvesting period - 80-85)\r\nQuantity 10 gm.\r\nSoil: Well drained medium, Soil\r\n1-1.25 Kg. Light brown Netted Fruit			', 10, '30/11/2020', 5),
(60, 6, 19, 'Beet', 'beet-9654', 90, 85, 'beet1.jpg', 'beet2.jpg', 'red', '10gm', 'no dose', '		\r\n			no process			\r\n		', '			\r\n			no features						', '			no materials						\r\n			', '			75-80% germination.\r\nShowing Time - Aug to Nov,feb To March(Harvesting Period - 60-65 days)\r\nQuantity 10 gm.\r\n.Soil: Well drained medium, soil\r\n100-120 Gm , Blood Red 						', 20, '30/11/2020', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_registration` (
  `r_id` int(5) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` int(6) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`r_id`, `f_name`, `m_name`, `l_name`, `gender`, `email`, `contact`, `address`, `pincode`, `city`, `state`, `country`, `u_name`, `password`) VALUES
(1, 'yash', 'b', 'patel', 'male', 'yashpatel7464@gmail.com', 1234567890, 'to:malod', 363020, 'surendranagar', 'gujart', 'India', 'yash patel', '123'),
(2, 'mohit', 'b', 'joshi', 'male', 'm@gmail.com', 1234567890, ' itali', 456788, 'botad', 'gujrat', 'india', 'mohit joshi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_category`
--

CREATE TABLE IF NOT EXISTS `tbl_sub_category` (
  `sub_cat_id` int(5) NOT NULL AUTO_INCREMENT,
  `cat_id` int(5) NOT NULL,
  `sub_cat_name` varchar(100) NOT NULL,
  `sub_cat_image` varchar(100) NOT NULL,
  PRIMARY KEY (`sub_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_sub_category`
--

INSERT INTO `tbl_sub_category` (`sub_cat_id`, `cat_id`, `sub_cat_name`, `sub_cat_image`) VALUES
(2, 6, 'oliseeds', 'oliseeds.jpg'),
(3, 6, 'Cereal', 'cereal.jpg'),
(4, 6, 'vegetables', 'vegetable.jpg'),
(5, 6, 'frutis', 'fruites.jpg'),
(6, 7, 'insecticides', 'insecticides.webp'),
(7, 7, 'hebicides', 'herbicides.jpg'),
(8, 7, 'fungicides', 'fungicides.jpg'),
(9, 7, 'seeds treatment', 'seedstratment.jpg'),
(10, 9, 'fertilizer', 'f1.jpg'),
(11, 10, 'farm machinery', 'homeslide_1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
