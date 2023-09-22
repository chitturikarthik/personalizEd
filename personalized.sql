-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 05:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `content_id` int(10) NOT NULL,
  `teacher_id` varchar(20) NOT NULL,
  `c_title` varchar(50) NOT NULL,
  `c_about` varchar(200) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `topic_name` varchar(25) NOT NULL,
  `difficulty_level` varchar(10) NOT NULL,
  `learning_intelligence` varchar(10) NOT NULL,
  `content_type` varchar(10) NOT NULL,
  `video_path` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(10) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_birth` varchar(25) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `learning_intelligence` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `student_name`, `email`, `date_of_birth`, `mobile`, `address`, `learning_intelligence`) VALUES
(130, 'Ajay', 'ajayvarma171@gmail.com', '4/4/2023', '4406615483', '1900 eucli avenue, apt 709', ''),
(106, 'Anuradha', 'anu.radhask@gmail.com', '5/14/2023', '7329864149', '485 plainfield rd', ''),
(16, 'Ajay', 'apoondla@gmail.com', '3/29/2023', '1650759586', '2851 Biddleford Drive', 'verbal'),
(50, 'Kishore', 'aragorniiit@gmail.com', '4/25/2023', '7162088221', '635 Eldridge Dr', 'logical'),
(99, 'Seshagiri', 'asgiribabu@yahoo.com', '4/20/2023', '6099037728', '1 Thoreau Drive', ''),
(51, 'Venkata Ashok', 'Ashok.Myneni@gmail.com', '4/26/2023', '3024655446', '11065 callaway dr,', 'visual'),
(144, 'Balaji', 'balaji.raya@yahoo.com', '5/26/2023', '6098193982', '165 Mulberry Dr', ''),
(38, 'Bhanu', 'bhanukuppa@gmail.com', '4/1/2023', '8602050467', 'Avon', 'logical'),
(40, 'Bhanu', 'Bhanupd@hotmail.com', '3/12/2023', '8133624925', '10253 Estuary Dr', 'verbal'),
(22, 'Kalyan', 'bhumakalyan@gmail.com', '4/1/2023', '9526819946', '5075 Woodland ave', 'verbal'),
(154, 'Buddha', 'bkmuddana@yahoo.com', '3/27/2023', '4695349818', '1505 Bear Creek Dr', ''),
(162, 'Rajah', 'bkrajah@yahoo.com', '4/1/2023', '3367061270', '8017 HAZELTINE DR', ''),
(155, 'Bharath', 'boruganti@gmail.com', '3/27/2023', '2815200443', '901 Santaluz Path', ''),
(152, 'Vijaya Kumar', 'bvijay87@gmail.com', '3/25/2023', '+124852534', '7944 N MacArthur Blvd', ''),
(77, 'Krishna', 'chavak28@gmail.com', '4/8/2023', '7346348348', '18490 Clairmont Cir W', ''),
(91, 'Srinivasa', 'chennu@hotmail.com', '4/2/2023', '5715441508', '44 Woodbridge Terrace #4D', ''),
(129, 'Naveenkumar', 'chnaveen@gmail.com', '4/22/2023', '8503393557', '2852 Lumber River Trail', ''),
(66, 'Chandra', 'cnallam@encloudservices.com', '3/23/2023', '2482270139', '3 Bradish Lane', ''),
(33, 'Sarat', 'dasaka@gmail.com', '4/19/2023', '4802392190', 'Dddkl', 'visual'),
(49, 'Tirumala', 'devi.ramamoorthy@gmail.com', '4/14/2023', '1678860154', '625 Fair View Cir', 'verbal'),
(68, 'Rambabu', 'devirambabu@gmail.com', '4/3/2023', '7814601225', '15 Davis rd', ''),
(59, 'Diwakar', 'Diwakarwww@gmail.com', '4/3/2023', '9137489505', '7855 w 155th ter', 'logical'),
(56, 'Durga Vikas', 'durgavikasthota@gmail.com', '4/10/2023', '7738483509', '4051 Enfield Ave', 'logical'),
(43, 'Venkata', 'dvsanr@gmail.com', '3/28/2023', '7546663336', '817 Champion Woods Ct', 'verbal'),
(200, 'Eswar', 'EELURI@REVASOLUTIONS.COM', '4/3/2023', '2066176426', '4249 Shoreclub Dr', ''),
(57, 'Nagendra', 'endranag@gmail.com', '5/2/2023', '3126598100', '1598 California St', 'visual'),
(116, 'Gokul', 'goksing@gmail.com', '5/27/2023', '6096477900', '8 anna lane', ''),
(63, 'Gopi Krishna', 'gopi.tallapaneni@gmail.com', '5/18/2023', '7204017020', '11832 Skylark Rd', ''),
(10, 'Gopichand', 'gopi04@gmail.com', '3/19/2023', '8322652515', '10162 Christopher St', 'verbal'),
(39, 'Sharmila', 'guntaka.m.s@gmail.com', '4/17/2023', '8605684058', '15 Mason Cir', 'visual'),
(136, 'Hariprasad', 'hariprasadduba@gmail.com', '3/23/2023', '6475253727', '4 Forest Laneway, Unit 804', ''),
(86, 'Harish', 'harish.rayapudi@gmail.com', '3/26/2023', '4085134041', '121 Fountayne Ln', ''),
(52, 'Haritha', 'haritha.pinninty@gmail.com', '5/22/2023', '6786707060', '1705 Rutland pkwy', 'verbal'),
(27, 'N S S Kishore', 'hikishore@gmail.com', '4/9/2023', '+140861359', '42640 Lemonwood St', 'visual'),
(150, 'Hari', 'hp1968@gmail.com', '3/25/2023', '2149986101', '4600 United Ln', ''),
(139, 'Hemanth', 'hyerneni@gmail.com', '3/22/2023', '3922904799', '1306 briggs way', ''),
(137, 'Hyma', 'hymasworld@yahoo.com', '3/26/2023', '5084534722', '208 Sw 105th Ter', ''),
(92, 'Jagannadh', 'jag.kanumuri@aciinfotech.com', '4/3/2023', '7324231139', '5 Gorman Ct', ''),
(113, 'Raja Kumar', 'julapnet@gmail.com', '5/24/2023', '7324076474', '4 Aaron Ct', ''),
(161, 'Jaya Raghavendra Arun Kumar', 'jyellajo@mtu.edu', '3/31/2023', '8326520143', '12655 W Houston Center Blvd', ''),
(171, 'Jyothi', 'jyothi.panchak@gmail.com', '4/15/2023', '2144185076', '1616 Earhart Ln', ''),
(118, 'Jyotsna', 'jyotsna.namburi@gmail.com', '4/3/2023', '2482295401', '28 Pine Hill Ln', ''),
(121, 'Koteswara', 'j_vepuri@yahoo.com', '5/21/2023', '7142778524', '5840 Bradford ct', ''),
(169, 'Kalyan', 'kalyan.sirivella@gmail.com', '4/5/2023', '0019197494', '714 Willow Ridge Ct', ''),
(194, 'Kalyani', 'kalyaniyellapu@yahoo.com', '4/20/2023', '7039676255', '10450 Artemel Lane', ''),
(177, 'RAVI', 'kandarpar@yahoo.com', '4/30/2023', '2148688586', '503 PATAGONIAN PL', ''),
(64, 'Kanthisri', 'kanthisri@gmail.com', '3/12/2023', '7325868765', '62 primrose circle', ''),
(2, 'Balamurali', 'kbalamurali@yahoo.com', '4/4/2023', '4802627340', '672 W Alamosa Dr', ''),
(90, 'Kiran', 'kiranvadlani@gmail.com', '4/2/2023', '6032335397', '54 Vincent behan blvd', ''),
(21, 'Kishore', 'kish_k@yahoo.com', '4/1/2023', '7149320155', '4332 Pepperdine Pl', 'visual'),
(119, 'Krishna', 'kkancherla@yahoo.com', '4/15/2023', '8454539878', '32 Kimlin Ct', ''),
(26, 'Kousalya', 'kous.chukkapalli@gmail.com', '4/7/2023', '4084319569', '3294 Ruffino Ln', 'logical'),
(153, 'Krishna', 'krishna.m.manda@gmail.com', '3/27/2023', '2145423624', '9854 Deerfield Dr', ''),
(160, 'Krishna', 'krishnadandamudi@yahoo.com', '3/31/2023', '9729797272', '3120 San Simeon Way', ''),
(31, 'Krishna kumar', 'krishnakbeta@yahoo.com', '4/15/2023', '9493573729', '41 Cabrillo Ter', 'verbal'),
(178, 'Krishna', 'krrish.iitm.ac.in@gmail.com', '5/1/2023', '8328071655', '2827 Dunvale Road', ''),
(32, 'Sambasivarao', 'ksambasiva@gmail.com', '4/16/2023', '7329107562', '10619 Dabney Dr', 'logical'),
(94, 'Suresh', 'kumarbu@gmail.com', '4/15/2023', '+173257028', '52 Vincent Behan Blvd', ''),
(69, 'Sreekiran', 'k_vallurupalli@redsalsa.com', '4/3/2023', '7326486944', '102 Hanson Rd', ''),
(190, 'Lalitha', 'lalithake@gmail.com', '4/7/2023', '7038619872', '1000 evonshire ln', ''),
(53, 'Lakshmanjee', 'lkolli2006@gmail.com', '3/20/2023', '8479466938', '7191 Pennsbury Lane', 'logical'),
(174, 'Lalitha', 'lsangana@gmail.com', '4/19/2023', '5124616122', '11200 Savin hill lane', ''),
(6, 'Someswara Swamy', 'madhira.swamy@gmail.com', '3/14/2023', '4085057423', '5574 GREELEY PLACE', ''),
(74, 'Madhu', 'madhu.tera@gmail.com', '5/23/2023', '7816403140', '85 Canterbury Hill Rd', ''),
(95, 'Madhuri', 'MadhuriMokarala@gmail.com', '4/16/2023', '7322599452', '174 pleasant run road', ''),
(134, 'Sudhakar', 'mandalikasudhakar@gmail.com', '3/18/2023', '4167263495', '1485 Birchmount Rd.', ''),
(81, 'Manjula', 'manjulavm@gmail.com', '4/9/2023', '6362228319', '264 magnolia trace dr', ''),
(71, 'Pratima', 'mantena.pratima@gmail.com', '4/5/2023', '4106033141', '7 REDWOOD PATH', ''),
(88, 'Sruthima', 'mantenasruthi892@gmail.com', '3/29/2023', '2707995252', '27 Galligen Dr', ''),
(7, 'Mitra', 'mitra.kaseebhotla@gmail.com', '3/18/2023', '6508685190', '2844 Westwood Ave', ''),
(179, 'Mohan', 'mkneelam@gmail.com', '5/12/2023', '2814519665', '4006 Sutton Shadow Ln', ''),
(19, 'Gita Madhavi', 'mmadhavi1022@gmail.com', '4/1/2023', '4087726046', '1022 Applewood dr', 'verbal'),
(135, 'Satish', 'msbrams@gmail.com', '3/22/2023', '6478048450', '625 Hyacinthe Blvd', ''),
(73, 'Ravi', 'mukthineni@gmail.com', '5/8/2023', '6177926295', '4 Triphammer Rd', ''),
(110, 'Nagamani', 'nagamani.immaneni@gmail.com', '5/23/2023', '8566568067', '2101,Greenwood dr', ''),
(104, 'ANJANEYULU', 'nalabothu1@yahoo.com', '5/1/2023', '7323064962', '25 CINDER ROAD, 2K', ''),
(175, 'Nandini', 'nandumaguluru@gmail.com', '4/22/2023', '7143073748', '717 Johns ave', ''),
(25, 'Sita', 'naralasetty@gmail.com', '4/4/2023', '4088365342', '1111 weyburn ln', 'verbal'),
(105, 'sravanalaya', 'naralasettylaya@gmail.com', '5/13/2023', '5715308094', '14 marsh ct', ''),
(78, 'Narasa Raju', 'narasaraju.penmetsa@gmail.com', '5/3/2023', '2102183912', '1835 Fox Prairie Rd', ''),
(24, 'Naresh', 'nareshapril8@gmail.com', '4/4/2023', '4088988461', '43555 Grimmer Blvd', 'visual'),
(123, 'Naresh', 'nchimakurty@gmail.com', '3/20/2023', '5714380086', '1151 Phallen Ct NW', ''),
(172, 'Neelima', 'nimmy5@yahoo.com', '4/16/2023', '2562890018', '6823 Entelman Ln', ''),
(35, 'Satish', 'nsatishbabu@gmail.com', '5/8/2023', '4089304057', '4329 Healdsburg way', 'logical'),
(182, 'Pavani', 'parupudip@hotmail.com', '3/12/2023', '2812532558', '3810 Nottingham Bluff Ln', ''),
(158, 'Srinivas', 'parupudi_s@hotmail.com', '3/28/2023', '2812530085', '3810 Nottingham Bluff Ln', ''),
(76, 'Pattabhi', 'pattabhiy@yahoo.com', '4/1/2023', '2482452465', '6373 Charles Sr', ''),
(34, 'Krishna', 'pendurthi.krishna@gmail.com', '5/7/2023', '0019734091', '2719 Derby Dr', 'verbal'),
(87, 'Raju', 'penematcha@gmail.com', '3/28/2023', '7326193164', '3 Angelica ct', ''),
(122, 'Phalgun', 'phalgunry@gmail.com', '3/19/2023', '7042904871', '704 Copper Tree Ln', ''),
(1, 'Phani Bhushan', 'phanibhushanj@gmail.com', '3/28/2023', '2055423338', '1518, Riverchase Trl', ''),
(82, 'Pradeep', 'pksomava@yahoo.com', '4/16/2023', '4025177283', '3218 N 168th Ave', ''),
(180, 'Prabhakar', 'prab@stridegp.com', '5/18/2023', '2146685992', '910 Edgemeer lane', ''),
(79, 'Prasad', 'prasad.gunturi@gmail.com', '4/14/2023', '0019526861', '9776 Cupola Ln', ''),
(67, 'Subbarao', 'punnamaraju@gmail.com', '3/26/2023', '6175951173', '6 Turning Leaf Cir', ''),
(84, 'VVA Siva Kumar', 'puvvala.siva@gmail.com', '4/2/2023', '2035545907', '35 Diamondback Ave', ''),
(70, 'Satish', 'pvsssraju@gmail.com', '4/5/2023', '4106038136', '7 REDWOOD PATH', ''),
(102, 'Prasada', 'pylainfo@gmail.com', '4/23/2023', '2018509668', '1 Balzano Ct', ''),
(20, 'Manjula', 'p_manjula@hotmail.com', '4/1/2023', '5104566599', '34304 Marjoram loop', 'logical'),
(145, 'Satya', 'raavisn@hotmail.com', '3/19/2023', '2145648032', '8109 Sutherland ln', ''),
(80, 'Raghu', 'raghuvadlamudi@comcast.net', '4/19/2023', '6512614685', '727 Lake Ridge Drive', ''),
(120, 'Rajan', 'rajanbeera@prodigy.net', '4/26/2023', '8173689908', '162 Gadwall Ln', ''),
(83, 'Rajendra', 'Rajendra.Kottakota@gmail.com', '3/21/2023', '9788061764', '173 Range Rd', ''),
(163, 'venkata rajesh', 'rajesh2008ad@gmail.com', '4/1/2023', '+190628189', '4980 usaa blvd', ''),
(114, 'Rajesh', 'rajeshhariyala@gmail.com', '5/24/2023', '7323972191', '8 Creemer Ave', ''),
(151, 'Rajagopal', 'rajgopal.paladugu@gmail.com', '3/25/2023', '5184913662', '6333 Oceanview Dr', ''),
(9, 'Subbaraju', 'rajurkakrlapudi@gmail.com', '3/19/2023', '7148696117', '2012 Tweed St', 'visual'),
(41, 'Swamy Rakesh', 'rakhi.rakesh@gmail.com', '3/20/2023', '4087978595', '2336 Campus Club Ct', 'logical'),
(11, 'Ramakrishna', 'ramakrishna.kandula@gmail.com', '3/20/2023', '4089049990', 'Cupertino', 'logical'),
(62, 'Ramesh', 'ramesh.koduri@gmail.com', '4/26/2023', '4439330017', '4013 Red Stag Ct', 'logical'),
(138, 'Ramesh', 'Ramesh.Kothamasu@gmail.com', '3/19/2023', '3024382378', '206 COOLIDGE LN', ''),
(167, 'Ramakrishna', 'ramki.palle@gmail.com', '4/2/2023', '4085373913', '7173 9th Hole Dr', ''),
(132, 'Venkata', 'raovtalluri@gmail.com', '5/2/2023', '8436421370', '5000 Aspen Pine Blvd, Dublin', ''),
(125, 'Ravikumar', 'ravikumar.karra@gmail.com', '3/27/2023', '1919600122', '1020 Pondfield Way', ''),
(55, 'Ravindra', 'ravindra.kakara@gmail.com', '3/26/2023', '5109848015', '2538 Imperial Valley Trl', 'verbal'),
(3, 'Ravi Sankar', 'raviska2308@gmail.com', '4/25/2023', '8567938563', '1322 E Gemini Pl', ''),
(157, 'Venkata Ravi Varma', 'ravivarma.gv@gmail.com', '3/28/2023', '4242473874', '14137 Steadman Dr', ''),
(186, 'Ravi', 'ravivarma@gmail.com', '3/22/2023', '2157158950', '2492 quick st', ''),
(184, 'Ravi', 'raviveer@yahoo.com', '3/12/2023', '1630337721', '2519 James Monroe Circle', ''),
(98, 'Kiran', 'ray@cabsinc.com', '4/19/2023', '7325434865', '40 Devonshire Dr', ''),
(183, 'Ravi', 'rbanda68@gmail.com', '3/14/2023', '7037867894', '5607 Hemingway Lane', ''),
(159, 'Ravindra', 'rchalla999@gmail.com', '3/29/2023', '8322078079', '5501 Marina DR', ''),
(89, 'Raju', 'rdatla007@gmail.com', '3/31/2023', '7325168438', '2 Amy Court', ''),
(5, 'DEVI PADMINI PRIYANKA', 'RDPPRIYANKA@GMAIL.COM', '3/31/2023', '+123651593', '12993 101A Ave', ''),
(146, 'Rao', 'RKONIJETI@YAHOO.COM', '3/22/2023', '4023128836', '11162 MANUEL ST', ''),
(149, 'Rammohan', 'rmeshineni@gmail.com', '3/25/2023', '8328480289', '7602 Westmoreland Dr', ''),
(30, 'Murali', 'rmk_raju@yahoo.com', '4/14/2023', '4087997555', '3371 Tracy Dr', 'visual'),
(18, 'Hanumanth', 'rphanu@gmail.com', '3/29/2023', '8584316975', '12849 Starwood Ln, San Diego, CA 92131, USA', 'visual'),
(103, 'Praveen', 'rpravi@gmail.com', '4/30/2023', '3135103155', '191 Blue heron dr', ''),
(147, 'Ravi', 'rpvarre@hotmail.com', '3/22/2023', '8324193745', '10619 Pebblecreek Xing', ''),
(12, 'ravi', 'rshankars@gmail.com', '3/21/2023', '6504545547', '4720 Creekwood dr', 'visual'),
(61, 'Saicharan', 'saicharan.vaddadi@gmail.com', '4/21/2023', '+166052809', '11804 ETON MANOR DR', 'verbal'),
(124, 'Sailaja', 'sailajamudunuri@gmail.com', '3/26/2023', '9194911035', '921 river song pl', ''),
(126, 'Sangeetha', 'sangeethasatya@gmail.com', '3/27/2023', '9196078040', '270 Oak Haven Ln', ''),
(46, 'Santhi', 'santhi.sonthi2009@gmail.com', '5/21/2023', '9788538969', '679 Windermere Way', 'verbal'),
(101, 'Sarath', 'sarath_kalidindi@yahoo.com', '4/22/2023', '7323061849', '20 York Road', ''),
(166, 'Sakuntala', 'sashi.sagiraju@gmail.com', '4/2/2023', '4694280733', '13561 Bigelow Ln', ''),
(100, 'Satish', 'satish.mantena@gmail.com', '4/21/2023', '+173270503', '17 Hartlander St', ''),
(197, 'Satish', 'satishv9@gmail.com', '5/26/2023', '8482023159', '2490 Quick Street', ''),
(188, 'Sattar', 'sattarshaik70@gmail.com', '4/1/2023', '7035877688', '19971 BELMONT STATION DR', ''),
(201, 'Satyam', 'satyam.appadwedula@gmail.com', '3/30/2023', '4149152256', 'W194N5691 Deer Park ct', ''),
(185, 'Srinivasa', 'sbkunamneni@gmail.com', '3/14/2023', '7032582279', '20348 Medalist Drive', ''),
(140, 'Sainadh', 'schekuri@yahoo.com', '4/18/2023', '6093564657', '115 Kickapoo Drive', ''),
(65, 'sudhir', 'schepeni@gmail.com', '3/20/2023', '9087311307', '4 HILL ST', ''),
(148, 'Suman', 'schepuri@yahoo.com', '3/25/2023', '9726894234', '7257 Waters Edge Dr', ''),
(156, 'Srinivas', 'serukull@gmail.com', '3/27/2023', '5124157058', '4018 Lazy River Bnd', ''),
(168, 'Srinivasa', 'sgowru@hotmail.com', '4/4/2023', '4088355769', '12705 Monterey Path', ''),
(72, 'Shashidhar', 'shashikura@yahoo.com', '4/29/2023', '5089042452', '30 Arch St', ''),
(143, 'Shyam', 'shyamvaddadi@gmail.com', '5/22/2023', '7178563599', '472 Barbara Dr.', ''),
(112, 'Suresh', 'skvoona@yahoo.com', '5/24/2023', '9173314695', '41 Woodmere rd', ''),
(109, 'Sridhar', 'sridharpattisapu@gmail.com', '5/22/2023', '8456990483', '404 Old Tappan Rd', ''),
(93, 'Sri Ravi Sankar', 'srigangavarapu@gmail.com', '4/9/2023', '8626864120', '1 Bennington Dr', ''),
(45, 'Srihari', 'sriharikolli@yahoo.com', '4/24/2023', '6149375564', '19208 Autumn Woods Ave', 'visual'),
(23, 'Srikanth', 'srikanth.kottakota@gmail.com', '4/4/2023', '8182093776', '1711 GRISMER AVE #84', 'logical'),
(107, 'Srikiran', 'srikiranp@gmail.com', '5/16/2023', '9192448050', '485 plainfield rd', ''),
(133, 'Srilakshmi', 'Srilakshmi.nit@gmail.com', '5/8/2023', '1682304513', '3589 empire dr', ''),
(127, 'Srinivasa Rao', 'srinibell@gmail.com', '4/1/2023', '4088937656', '1225 SURVADA LN', ''),
(191, 'Srini', 'sriniSaranu@gmail.com', '4/8/2023', '5714275365', '21302 southolme way', ''),
(115, 'Srinivasa', 'srinivasa.gollapudi@gmail.com', '5/25/2023', '8482197761', '147 whitehead ave', ''),
(13, 'Srujana', 'srujanakoripalli@gmail.com', '3/23/2023', '6692261644', '4325 Renaissance Dr', 'verbal'),
(96, 'Sruthima', 'sruthi7755@gmail.com', '4/19/2023', '2707995251', '27 Galligen Dr', ''),
(29, 'Srinivas', 'sshkota@gmail.com', '4/14/2023', '+140888612', '1971 H Street', 'logical'),
(192, 'Srinivas', 'ssunkara@hotmail.com', '4/9/2023', '5719199265', '44413 Stone Roses Cir', ''),
(142, 'Subbarao', 'subba.suda@gmail.com', '5/18/2023', '5122967102', '235 Cutleaf Cir', ''),
(187, 'Sudharani', 'sudhamarupudi@gmail.com', '3/27/2023', '1703350538', '20080 BLACKWOLF RUN PL', ''),
(181, 'Sudheer', 'sudheersura@yahoo.com', '5/20/2023', '2817251087', '28010 Indigo Ridge Dr', ''),
(199, 'Suneetha', 'sumudunu@gmail.com', '4/2/2023', '6179388714', 'Sammamish', ''),
(60, 'Suren Kumar', 'surenrvl@gmail.com', '3/28/2023', '2012201021', '3507 Snow Chief Road', 'visual'),
(111, 'Surendra', 's_surendra@hotmail.com', '5/23/2023', '7327425268', '203 Wellington Park Drive', ''),
(117, 'Sirisha', 'tata_sirisha@hotmail.com', '3/20/2023', '9145140007', '920 Howard Ave', ''),
(85, 'Anuradha', 'uanuradha@gmail.com', '5/21/2023', '9789851404', '24 Hartwell Brook', ''),
(173, 'Durga vara prasad', 'ucontactraju@gmail.com', '4/19/2023', '7324286912', '225 harbor hills dr', ''),
(17, 'Uday', 'udaykarrothi@gmail.com', '3/29/2023', '4089101276', '4622 Avery Ct', 'logical'),
(164, 'Ramakrishnam', 'urskrkraju@gmail.com', '4/2/2023', '6502431897', '2517 Avenue N', ''),
(58, 'Dilip', 'vadlamudidilip@gmail.com', '4/1/2023', '3176701124', '5467 N Grandin Hall Cir', 'verbal'),
(141, 'Vamsi Krishna', 'vamsi.chekuri@gmail.com', '4/19/2023', '3022295867', '3125 Mclaughlin Ct', ''),
(193, 'Surya Vandana', 'vandanaveluri@gmail.com', '4/12/2023', '7034341394', '13104 Queensdale Dr.', ''),
(189, 'Sreevani', 'vani318@yahoo.com', '4/7/2023', '7037327034', '1902 Dalmation Drive', ''),
(8, 'Varma', 'varmak3939@yahoo.com', '3/19/2023', '9259150193', '5072 VOLTERRA COURT', 'logical'),
(128, 'Vasavi', 'vasavi_gupta@yahoo.com', '4/1/2023', '9196013556', '1304 Bravura Drive', ''),
(4, 'Praveena', 'veenapra@gmail.com', '3/14/2023', '7788698362', '11115 upper canyon road', ''),
(37, 'Raghu', 'vemuri.raghu@gmail.com', '5/18/2023', '1408513559', '2913 Delamar Dr.', 'verbal'),
(36, 'Venkat', 'venkat.chivukula@gmail.com', '5/11/2023', '9257504342', '2285 Brandini Dr', 'visual'),
(28, 'Venkatesh', 'venkatesh.duggirala@gmail.com', '4/13/2023', '5103868895', '4216 WAYCROSS COURT', 'verbal'),
(196, 'Venkat Raju', 'venkatraju1987@gmail.com', '5/26/2023', '4258294172', '12929 Centrepark Cir', ''),
(54, 'Venu', 'venu@cepoch.com', '3/25/2023', '8476440564', '24 Rainier Cir', 'visual'),
(47, 'Venkateswara', 'vgadde@gmail.com', '3/13/2023', '7706241214', '2645 Copperfield Dr', 'logical'),
(48, 'Vijaya', 'vij.kosuri@gmail.com', '4/2/2023', '4043131150', '5630 Warmstone Ln , Suwanee, GA 30024', 'visual'),
(195, 'Vijay', 'vijayrr007@gmail.com', '4/27/2023', '7147329472', '24626 Edmond ridge place', ''),
(198, 'Sesha Bhavani', 'vijji.soma@gmail.com', '3/31/2023', '4256473351', '4104 220th St SE', ''),
(165, 'Venkata Sudhakar', 'vkalikay@gmail.com', '4/2/2023', '4088365506', '1301 Bray Central', ''),
(75, 'VIJAYAKUMAR', 'vkveeragandham@gmail.com', '5/24/2023', '6052140519', '1 APRIL LN', ''),
(15, 'Suresh', 'vobbilis@gmail.com', '3/28/2023', '4082741124', '3607 Rue Mirassou', 'visual'),
(176, 'SuryaPrakash', 'volety2@gmail.com', '4/25/2023', '+150877691', '13069 Avanti dr', ''),
(14, 'Vani', 'vsurangi@gmail.com', '3/27/2023', '9094995499', '221 Radial', 'logical'),
(44, 'Suresh', 'vsureshbabu20@gmail.com', '4/15/2023', '9548714448', '11836 W Sample Rd', 'logical'),
(131, 'Prabhu', 'vtprabhukumar@yahoo.co.in', '4/26/2023', '2165040909', '1553 Crestwood Road', ''),
(97, 'Venkata', 'VvenkatReddy@gmail.com', '4/19/2023', '6785767696', '62 Loft Dr', ''),
(170, 'Ramakrishna', 'yarkar@gmail.com', '4/10/2023', '6307247810', '921 Panorama Dr', ''),
(108, 'Venkatakrishna', 'yenduri.venkat@gmail.com', '5/21/2023', '7326291020', '172 windsong circle', '');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` varchar(10) NOT NULL,
  `subject_name` varchar(25) NOT NULL,
  `teacher_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `teacher_id`) VALUES
('S1', 'C Language', 'c1'),
('S2', 'Web Technologies', 'w1');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_details`
--

CREATE TABLE `teacher_details` (
  `id` int(5) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `current_role` varchar(25) NOT NULL,
  `working at` varchar(50) NOT NULL,
  `img_path` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_details`
--

INSERT INTO `teacher_details` (`id`, `teacher_name`, `email`, `date_of_birth`, `mobile`, `address`, `current_role`, `working at`, `img_path`) VALUES
(21, 'Chitturi Karthik', 'karthik_csd@srkrec.edu.in', '2003-08-22', '9398954816', '22nd ward , Kothapet ,Palakol', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher_details`
--
ALTER TABLE `teacher_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `content_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher_details`
--
ALTER TABLE `teacher_details`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
