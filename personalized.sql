-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2023 at 02:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personalized`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(10) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `learning_intelligence` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `student_name`, `email`, `mobile`, `learning_intelligence`) VALUES
(1, 'ACHANTA SREE GREESHMA', 'greeshma_csd@srkrec.edu.in', '8919047199', ''),
(2, 'BYRI ROHIT', 'rohitb_csd@srkrec.edu.in', '6300278963', ''),
(3, 'CHATRATHI RAVI KUMAR SATYA SAI PRAVEEN', 'ravikumar_csd@srkrec.edu.in', '9052727402', ''),
(4, 'CHENNAMSETTI ANUSHA', 'anusha_csd@srkrec.edu.in', '7997536447', ''),
(5, 'CHITTURI KARTHIK', 'karthik_csd@srkrec.edu.in', '9398954816', ''),
(6, 'DANGETI VIVEK HARI BHASKAR PAPARAO', 'vivek_csd@srkrec.edu.in', '9704407429', ''),
(7, 'DUDDUKURI LAVANYA', 'lavanya_csd@srkrec.edu.in', '8977292778', ''),
(8, 'GADIRAJU JANAKI RITHVIK VARMA', 'rithvik_csd@srkrec.edu.in', '9100180018', ''),
(9, 'GOLVE YASWANTH SAI', 'yaswanthsai_csd@srkrec.edu.in', '9908890439', ''),
(10, 'GUDAPATI YAKSHINE ANANNYA', 'ananya_csd@srkrec.edu.in', '8330984689', ''),
(11, 'JALLELLA RAM SUMA SATHWIK', 'sathwikjrs_csd@srkrec.edu.in', '8639796025', ''),
(12, 'JAVVADI BHARGAVI', 'bhargavi_csd@srkrec.edu.in', '9390456744', ''),
(13, 'KATURI SANJU', 'sanju_csd@srkrec.edu.in', '9848823311', ''),
(14, 'KEDHARISETTI SURYANARAYANA', 'surya_csd@srkrec.edu.in', '9963430456', ''),
(15, 'MARISETTI BHANU TEJASWINI', 'bhanutejaswini_csd@srkrec.edu.in', '8125848047', ''),
(16, 'MUDUNURI PRUDHVI SAI RAVIVARMA', 'prudhvi_csd@srkrec.edu.in', '7780309695', ''),
(17, 'NAGANABOYINA J N V S S SIVA SAI', 'sivasai_csd@srkrec.edu.in', '9849832823', ''),
(18, 'PAGOLLU GRACY', 'gracy_csd@srkrec.edu.in', '8919259699', ''),
(19, 'PATHIWADA REVATHI', 'revathi_csd@srkrec.edu.in', '9392695457', ''),
(20, 'PUDI CHAITANYA SRUJANA', 'chaitanyasrujana_csd@srkrec.edu.in', '7842353004', ''),
(21, 'RAMAGANI MALLESWARI', 'malleswari_csd@srkrec.edu.in', '7032166422', ''),
(22, 'REDDI SAHITHI PALLAVI', 'pallavi_csd@srkrec.edu.in', '9989209229', ''),
(23, 'SIDAGAM VINAY PRASAD', 'vinay_csd@srkrec.edu.in', '7013834973', ''),
(24, 'UTADA LAKSHMI TULASI', 'tulasi_csd@srkrec.edu.in', '8374935549', ''),
(25, 'VADAPARTHI ANJANI NAGA SARANYA', 'saranya_csd@srkrec.edu.in', '6303570749', ''),
(26, 'VANAPALLI SAI SIVA MANI', 'sivamani_csd@srkrec.edu.in', '9640336946', ''),
(27, 'VASI HARSHA VARDHAN KRISHNA SAI', 'harsha_csd@srkrec.edu.in', '9391706355', ''),
(28, 'VEERAVALLI PUNEETH', 'puneeth_csd@srkrec.edu.in', '8985841719', ''),
(29, 'BAYYE JOSEPH KUMAR', 'bayyevaraprasad@gmail.com', '9701295151', ''),
(30, 'BHAVANAM LAKSHMAN KUMAR REDDY', 'lakshmanbhavanam009@gmail.com', '8712131582', ''),
(31, 'BORRA AVINASH', 'borraavinash785@gmail.com', '8328124246', ''),
(32, 'BORRA HIMA SRI', 'hima2005sri@gmail.com', '7337358257', ''),
(33, 'CHIKILE RAJESH', 'chr17431@gmail.com', '8978621231', ''),
(34, 'CHILAKALAPUDI ABHI RAAMA PHANINDRA', 'ch.abhiramaphanindra@gmail.com', '6303875899', ''),
(35, 'DAKKUMALA VARSHA', 'varshadakkumalla@gmail.com', '7997515809', ''),
(36, 'DONAVALLI REVATHI', 'revathidonavalli125@gmail.com', '9000382612', ''),
(37, 'GEDELA SAI ABHINAY', 'saiabhinaygedela@gmail.com', '9618882624', ''),
(38, 'INUMARTHI SRINAVYA', 'srinavyainumarthi@gmail.com', '8121211999', ''),
(39, 'JADDU JYOTHIRMAI INDIRA PRIYA DARSINI DEVI', 'priyadarsinijaddu@gmail.com', '7013376544', ''),
(40, 'JAKKAMSETTI SANJANI', 'sanjani.jakkamsetti@gmail.com', '9912455486', ''),
(41, 'JOGI PAVAN TEJA', 'jogipavanteja123@gmail.com', '8639413336', ''),
(42, 'K VISHNU TEJA', 'vishnutej2004@gmail.com', '9989948717', ''),
(43, 'KAMBHAMPATI SHALANI SINDHU SRI', 'shalinisindhusri@gmail.com', '6305071701', ''),
(44, 'KANUMURI RISHITHA VARMA', 'kanumuririshitha90@gmail.com', '7386763677', ''),
(45, 'KAPUDASI SNIGDHA', 'snigdhakapudasi@gmail.com', '9347676122', ''),
(46, 'KARUMURI TEJA SIDDARDHA PAVAN KUMAR', 'siddarthakarumuri003@gmail.com', '7013760163', ''),
(47, 'KETHA SURYA PRAKASH', 'kethasuryaprakash223@gmail.com', '8688018443', ''),
(48, 'KOLA YESWANTH', 'kolayaswanth2005@gmail.com', '9676608446', ''),
(49, 'KOLATI STEPHEN SOUDH', 'rintukolati349@gmail.com', '9392082760', ''),
(50, 'KOLLABATHULA SHYAM BABU', 'kollabathulashyambabu12@gmail.com', '9059145307', ''),
(51, 'KOPPARTI HONEY NAGA SANDEEP', 'sandeepkopparti2005@gmail.com', '8919058745', ''),
(52, 'MANDANGI MOUNIKA', 'mounikamandangi99@gmail.com', '8897272390', ''),
(53, 'MANGENA JAHNAVI', 'mangenajahnavi999@gmail.com', '9059229225', ''),
(54, 'MANGINETI MOHAN SATYA SIVA ROHITH KUMAR', 'rohithkumar3227@gmail.com', '7993173229', ''),
(55, 'MATTA BALA VEERRAJU', 'balumatta7471@gmail.com', '7569090694', ''),
(56, 'MOTURI SANDILYA', 'sandilyamoturi@gmail.com', '9985111189', ''),
(57, 'MUDUNURI MANOJ SAI ASWANTH VARMA', 'manojvarma181663@gmail.com', '9515345630', ''),
(58, 'NALLAM HEMA SAI SRI LAKSHMI', 'nallamhsslakshmi@gmail.com', '9063442773', ''),
(59, 'PAILA NIKHIL', 'pailanikhil30@gmail.com', '8639290852', ''),
(60, 'PANAKALA RAMA NAGESWARA RAO', 'ramapanakala755@gmail.com', '9652343644', ''),
(61, 'PEPETI GANESH', 'ganeshpepeti814@gmail.com', '8919218529', ''),
(62, 'PERABATTULA SOMESWARA RAO', 'naidusomu66@gmail.com', '7780114699', ''),
(63, 'POSIMSETTY SRI VISWA BHARATH', 'bharathposimsetty@gmail.com', '9948133933', ''),
(64, 'POTHAMSETTI KODANDA RAMA NAGA GANESH', 'pothamsettikondanda@gmail.com', '9392842898', ''),
(65, 'POTTURI GAYATRI', 'potturigayatri5@gmail.com', '6301702744', ''),
(66, 'PULLURU KRISHNA VAMSI', 'vamsipulluru2004@gmail.com', '9494410554', ''),
(67, 'PUTHINIDI JNANESWARI', 'jnaneswariputhinidi@gmail.com', '9866618810', ''),
(68, 'SHAIK AHMED', 'shaikahmed6086@gmail.com', '9059676230', ''),
(69, 'SK.KARIMUNNISA', 'karimunnisashaik7862@gmail.com', '9392250392', ''),
(70, 'TELLAKULA VEERA RAGHAVA', 'veeratellakula@gmail.com', '8008567115', ''),
(71, 'UNDURTHI MANOJ', 'manojlovely679@gmail.com', '8341686359', ''),
(72, 'VAKAPALLI H V SAI SURYA SWAPANTH', 'swapanthvakapalli@gmail.com', '7794022444', ''),
(73, 'VATAPALLI GNANA SEKHAR', '258gnanasekhar.v@gmail.com', '7989649045', ''),
(74, 'VEERAVALLI SATYA VENKATA SRINADH', 'srinadhveeravalli123@gmail.com', '9606557489', ''),
(75, 'VEGESNA PRADEEPTHI', 'pradeepthipradeepthi4@gmail.com', '8374811247', ''),
(76, 'VILLURI MOHINI MANGA LAKSHMI MANASA', 'manasavilluri55@gmail.com', '8639557638', ''),
(80, 'Karthik Chitturi', 'karthikch.official@gmail.com', '7842353004', ''),
(81, 'Karthik Chitturi', 'sathwikjrs@gmail.com', '8639796025', ''),
(82, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_details`
--

CREATE TABLE `teacher_details` (
  `id` int(5) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_details`
--

INSERT INTO `teacher_details` (`id`, `teacher_name`, `email`, `mobile`) VALUES
(1, 'suresh', 'suresh_csd@srkrec.edu.in', '9866600002'),
(2, 'Karthik Chitturi', 'suresh_csd@srkrec.edu.in', '9866600002'),
(3, 'Karthik Chitturi', 'suresh_csd@srkrec.edu.in', '9866600002'),
(4, 'Karthik Chitturi', 'karthikch.official@gmail.com', '9866600002'),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, 'Karthik Chitturi', 'sathwikjrs@gmail.com', '9866600002'),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, 'Karthik Chitturi', 'karthikch.official@gmail.com', '9866600002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_details`
--
ALTER TABLE `teacher_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `teacher_details`
--
ALTER TABLE `teacher_details`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
