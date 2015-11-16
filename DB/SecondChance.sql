-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2015 at 03:57 PM
-- Server version: 5.6.27-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `SecondChance`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
`donationID` int(11) NOT NULL,
  `projectID` int(11) NOT NULL,
  `productID` int(11) DEFAULT NULL,
  `buyerID` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donationID`, `projectID`, `productID`, `buyerID`, `value`) VALUES
(1, 1, 3, NULL, NULL),
(2, 1, 1, NULL, NULL),
(3, 1, 4, NULL, NULL),
(4, 1, 5, NULL, NULL),
(5, 1, 6, NULL, NULL),
(6, 2, 7, NULL, NULL),
(7, 3, 8, NULL, NULL),
(8, 2, 2, NULL, NULL),
(9, 3, 9, NULL, NULL),
(12, 1, NULL, NULL, 10000),
(13, 2, NULL, NULL, 65550),
(14, 2, NULL, NULL, 0),
(15, 2, NULL, NULL, 4),
(16, 2, NULL, NULL, 200),
(17, 2, NULL, NULL, 0),
(18, 2, NULL, NULL, 0),
(19, 6, NULL, NULL, 1340),
(20, 2, NULL, NULL, 123),
(21, 2, NULL, NULL, 43),
(22, 2, NULL, NULL, 23540),
(23, 2, NULL, NULL, -30000),
(24, 2, NULL, NULL, -321312),
(25, 2, NULL, NULL, 1212121),
(26, 2, NULL, NULL, 12);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`productID` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `category` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `donorID` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `title`, `category`, `description`, `donorID`, `price`, `image`) VALUES
(1, 'Blugi albastri', 'haine', 'marimea 46 / XXL, 2 ani de folosinta', 9, 50, 'djinsi.jpg'),
(2, 'Samsung S5', 'telefon', 'stare buna, 1 an de folosinta', 10, 200, 'mob.jpg'),
(3, 'Crosi "Nike"', 'incaltamine', 'din piele, 1.5 ani de folosinta', 7, 100, 'cros.jpg'),
(4, 'Ceainic', 'vesela', 'noua, nefolosita, din ceramica', 8, 50, 'c1.jpg'),
(5, 'Ceas de perete', 'tehnica', 'mecanic, 4 ani folosit', 9, 50, 'ceas.jpg'),
(6, 'Macbook air1', 'tehnica', 'calculator companiei Apple, 2 ani folosinta, 1GB RAM, 500 GB HDD, 2 Cores intel', 9, 500, 'makbuk.jpg'),
(7, 'Nokia 3310', 'telefon', '5 ani folosinta, baterie 1000 maH', 10, 50, 'tel2.jpg'),
(8, 'Geanta', 'accesorii', 'geanta din piele, culoare cafenie/neagra', 11, 100, 'geanta.jpg'),
(9, 'Frigider', 'tehnica', 'frigider mare, 3 ani folosinta', 7, 1000, 'frigider.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`projectID` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `image` text NOT NULL,
  `funding_target` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectID`, `title`, `description`, `status`, `image`, `funding_target`) VALUES
(1, 'Un tractor performant pentru prelucrări de calitate', 'Mă numesc Vasile Mocanu din satul Cania și vreau să-mi procur un tractor Mini-till. Am nevoie de el pentru a prelucra cele 8 hectare de pămînt pe care le dețîn, și cele 16 hectare ale clienților mei. Toată viața mea am prelucrat pămintul, mai mult de 25 de ani, volumul de lucru este mare, însă tehnica pe care o foloseam era veche și cu un randament foarte mic. Am aflat de programul IFAD care îmi poate oferi jumătate din suma necesară pentru procurarea tehnicii. Suma necesară pentru procurare este de 14 000 $. Programul IFAD îmi oferă 50% , adică 7000$. Suma rămasă oricum este prea mare pentru mine. La moment am adunat 4000$ și mai am nevoie de 3000$ pe care sper să îi pot aduna cu ajutorul platformei Second Chance. Odată procurat voi putea efectua lucrări agricole de calitate prin tot satul și voi încuraja oamenii să participe la astfel de proiecte.', 0, 'traktor.jpg', 60000),
(2, 'Încălzire grădiniță, satul Hănăseni din raionul ...', 'Lidia Arseni, locuitoare a satului Hănăseni și medic la spitalul local. Eu sunt mamă a ..', 0, 'domik.jpg', 90000),
(3, 'Scoala din Ungheni are nevoie de pregatirea pentru iarna ', 'Scoala din Ungheni are nevoie de ajutorul financiar pentru a face constructia exterioara pentru incalzire si totodata reparatia acoperisului care este intr-o stare mizerabila. Primaria ne suporta deja cu 30% si mai avem nevoie de 30 000 lei.', 0, 'scoala.jpg', 30000),
(4, 'Parcul de distractii pentru copii', 'Parcul din orasul Edinet are nevoie de restabilire si renovarea tuturor echipamentelor care sunt deja de o vechime de mai mult de 30 de ani astfel creind locuri sigure de joaca pentru copii', 0, 'playground.jpg', 20000),
(5, 'Plantarea terenurilor afectate de foc', 'Este nevoie de ajutor in localitatea Chiscareni pentru plantarea spatiilor afectate de focul care a ars intreaga padure si a ucis intreg ecosistemul al localitatii. E nevoie de 10 000 pentru procurarea puietilor de fag si tei.', 0, 'les.jpg', 10000),
(6, 'Asfaltarea drumului din intrarea satului Cîrpești.', 'Proiect de Primarul Satului Cîrpești: Bîzu Ion \r\nIntrarea în sat este mereu o problemă pe timp de ploaie, pentru că se formează noroi și circularea pe acest spațiu este mereu anevoioasă. Lungimea acestui drum neasfaltat este de 4 km, avînd rampă și pantă cu înclinație mai mare de 12 grade. Pentru soluționarea acestei probleme, eu, Bîzu Ion, împreună cu toată echipa primăriei am elaborat un proiect pentru obținerea finanțării și asfaltarea zonei. \r\nSuma necesară este de 12 mln lei, proiectul cîștigat oferă 80% din sumă, iar restul sumei trebuie să fie din partea primăriei Cîrpești. Acele 20%, care reprezintă  240 000 lei nu poate fi total acoperită de administrația noastră, care are doar 150 000. Atunci noi am hotărît să folosim platforma Second Chance pentru a aduna 90 000. \r\nLocuitorii satului au primit ideea cu brațele deschise și sunt gata să ofere bunuri materiale pentru a avea un drum mai bun. \r\nAjutați satul Cîrpești și el va deveni un exemplu pentru toate satele care au aceiași problemă.', 0, 'dirka_asfalt.jpg', 240000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(13) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `role`) VALUES
(6, 'alexplacinta94@gmail.com', 'travkapwn', 'Alexandru', 'Placinta', 'admin'),
(7, 'balan.dorin@gmail.com', 'shaman', 'Dorin', 'Balan', 'user'),
(8, 'danilescu.dan@gmail.com', 'dandandan', 'Dan', 'Danilescu', 'user'),
(9, 'iura.gaitur@gmail.com', 'iulahahaha', 'Iura', 'Gaitur', 'user'),
(10, 'mircea.prikalist@gmail.com', 'prikalist', 'Mircea', 'Prikalist', 'user'),
(11, 'petru123@gmail.com', 'lolkawtf', 'Petru', 'Butuc', 'user'),
(12, 'wtf@gmail.com', 'haha', 'Vasea', 'lolka', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
 ADD PRIMARY KEY (`donationID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`projectID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
MODIFY `donationID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
MODIFY `projectID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(13) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
