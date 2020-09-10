-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 10, 2020 at 02:13 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eleddvmu_kvweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adverts`
--

CREATE TABLE `adverts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_desc` text NOT NULL,
  `content` text NOT NULL,
  `date` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adverts`
--

INSERT INTO `adverts` (`id`, `title`, `short_desc`, `content`, `date`) VALUES
(1, 'INVESTMENT OPPORTUNITIES IN WATER AND SEWERAGE CORPORATION', 'Perspective Investors can leverage on various opportunities that exist in Imo state water and Sewerage corporation  1. BOT (BUILD OPERATE & TRANSFER) & TURNKEY', '<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">Perspective Investors can leverage on various opportunities that exist in Imo state water and Sewerage corporation</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">1. BOT (BUILD OPERATE &amp; TRANSFER) &amp; TURNKEY</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">a. Dams for power generation, water supply, recreation (boating club, SCUBA Driving activities), Agriculture (Irrigation &amp; Fishing)</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">b. Package water treatment Plants</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">c. Solar Power water supply systems</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">d. Water treatment plants</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">e. Feacal Sludge treatment plant</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">2. MANUCTURE, SALES/SUPPLY OF WATER ENGINEERING MATERIALS</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">a. Filtration media</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">b. Water treatment chemicals</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">c. Pipes &amp; Fittings</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">d. Water Meters</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">e. Pumps</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">3. CONSTRUCTION OF NEW WATER SCHEME &amp; BULK SALES OF WATER TO IMO STATE WATER AND SEWERAGE CORPORATION.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">4. REHABILITATION &amp; MANAGEMENT OF EXISTING WATER SCHEME</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">5. EXPANSION &amp; MANAGEMENT OF EXISTING WATER SCHEMES</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">6. WATER VENDING/WATER DELIVERY SERVICES</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">7. WATER METERING/REVENUE GENERATION INCLUDING LEAK DETECTION &amp; REPAIRS</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">8. SERVICE CONTRACTS FOR REPAIRS OF ELECTRO-MECHANICAL COMPONENTS</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">9. EQUIPMENT LEASING (HAULAGE TRUCKS, CRANES, RIGS, LIFTS, MOTOR VEHICLE ETC)</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">10. PROJECT MANAGEMENT</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">11. CONSULTANCY SERVICES</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">a. INFORMATION &amp; COMMUNICATION TECHNOLOGY INCLUDING REMOTE SENSING &amp; GIS</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">b. PROJECT PACKAGING &amp; PROJECT MANAGEMENT ADVANTAGES OF INVESTING IN WATER RESOURCES FACILITIES IN IMO STATE</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">1. EXISTING WATER SUPPLY FACILITIES ARE INADEQUATE TO MEET THE WATER DEMAND OF THE STATE.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">2. ABUNDANT SURFACE WATER SOURCES</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">3. IMO STATE ARTISANS GEOLOGIC FORMATION</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">4. SEVERAL SPRING WATER</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">5. HIGH QUALITY GROUND WATER RESOURCES THAT REQUIRES MINIMAL DRILLING</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">6. IMO IS IN THE CENTRE OF SOUTH EAST &amp; IN CLOSE PROXIMITY WITH ALL THE SOUTH SOUTH &amp; MIDDLE BELTS STATES IN NIGERIA</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">7. IMO IS A FEW MINUTES DRIVE TO BIG COMMERCIAL CITES OF ONITSHA, PORT-HARCOUT &amp; ABA</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">8. IMO HAS AN INTERNATIONAL CARGO AIRPORT</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">9. PORT-HARCOUT INTERNATIONAL AIRPORT IS LESS THAN AN HOUR DRIVE AWAY &amp; 4 OTHER AIRPORTS AT ENUGU, CALABAR, UYO &amp; ASABA ARE VERY CLOSEBY</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-family: \'Hind Siliguri\', sans-serif; font-size: 15px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background: #ffffff; color: #2f4862;\">10. SEA PORTS OF CALABAR, PORT-HACOUT &amp; WARRI ARE IN CLOSE PROXIMITY TO IMO STATE.</p>', 'November 4, 2019'),
(4, 'Guideline for Logo Design Competition for Imo Water & Sewage Coporation', 'Logo design competition ', '<p>Guideline for Logo Design Competition</p>\r\n<p>For</p>\r\n<p>&nbsp;Imo State Water &amp; Sewerage Corporation.</p>\r\n<p>Background</p>\r\n<p>The Imo State Water &amp; Sewerage Corporation is looking for a new logo that will better identify the organization as part of its corporate rebranding process. In order to prepare for this transition and raise the public\'s awareness and understanding of the &lsquo;new&rsquo; corporate identity and culture, ISWSC, in consultation with the Ministry for Water Resources and relevant counterparts has initiated a Logo Design Competition for the public to highlight the corporation&rsquo;s effort towards improved services for Imo state.</p>\r\n<p>Content and requirements of Logo Design</p>\r\n<p>The Logo should be around the theme of a water corporation; professional and with strong artistic value. Preferred primary colors are Blue and White; with touches of Gray and Black. It is advised to avoid the use of any ethnic or religious taboos/connotations.</p>\r\n<p>The Logo must be original and not infringe the rights and interests of third parties.&nbsp;</p>\r\n<p>The final selected Logo shall be used as the official logo for ISWSC.</p>\r\n<p>The submitted designs shall take the Logo as the main body with some basic visual elements: &nbsp;standard font (English), standard color, auxiliaries etc. &nbsp;Horizontal and vertical lockups; and positive and negative monochromes should be provided. All entries should be submitted electronically in the most common logo file formats; JPG, PNG. SVG. EPS. PDF.</p>\r\n<p>Please submit the design with description in English, to describe the idea and explain the Logo in not more than 300 words.&nbsp;</p>\r\n<p>2. Eligibility</p>\r\n<p>2.1 The general public are invited to join the competition. (Young people are particularly encouraged to apply).</p>\r\n<p>Contestants are permitted to work in groups; however, only one (1) prize will be awarded regardless of group size.</p>\r\n<p>Submission guideline:</p>\r\n<p>3.1 All entries must be submitted electronically; please zip the designed Logo in JPG and PNG and send to &nbsp;contact@imowatersewg.org , noting &ldquo;Logo collection&rdquo; in the email subject.</p>\r\n<p>3.2 One or more submissions per person is acceptable. Each submission must be sent in a separate email.</p>\r\n<p>3.3 There is no fee to enter the contest.</p>\r\n<p>&nbsp; &nbsp; &nbsp;4. &nbsp;Deadline for submission</p>\r\n<p>February 12th, 2020 (all entries beyond this date will be considered invalid).</p>\r\n<p>&nbsp;Determination of Winner and Prize</p>\r\n<p>Designs will be preliminarily selected among all the participants&rsquo; works and the winners will be presented a certificate of honor. The designer of the final selected logo will be awarded a bonus of NGN75,000 and a Gubernatorial handshake, second runner up goes home with NGN50,000 and third runner up receives NGN30,000.</p>\r\n<p>6. Intellectual Property</p>\r\n<p>All the submitted designs will not be returned.</p>\r\n<p>The designer will bear legal responsibility for tort and shall be prosecuted if his or her design have caused losses to ISWSC.</p>\r\n<p>The copyright and usage right of the selected works shall belong to ISWSC, thus, the designer cannot authorize the logo to any other individual or organization.</p>\r\n<p>The above bonus amount refers to the amount after tax.</p>\r\n<p>&nbsp;All the participants are deemed to adhere to the above statements.</p>\r\n<p>The rights of final interpretation of the Logo Design Competition shall belong to ISWSC.</p>\r\n<p>&nbsp;</p>\r\n<p>Signed</p>\r\n<p>&nbsp;</p>\r\n<p>ISWSC MD/CEO</p>', 'February 3, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `image_location` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image_location`, `title`, `sub_title`, `description`) VALUES
(1, '43228981366588556274.jpg', '', '', ''),
(2, '81766614241936185244.jpg', '', '', ''),
(3, '46622424497873774247.jpg', '', '', ''),
(4, '97527553667543392161.jpg', '', '', ''),
(5, '62258454559363461993.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `phone1` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `email1` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `fblink` varchar(255) NOT NULL,
  `inlink` varchar(255) NOT NULL,
  `twlink` varchar(255) NOT NULL,
  `gllink` varchar(255) NOT NULL,
  `ytlink` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `admission_file` varchar(255) NOT NULL,
  `admission` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `phone1`, `phone2`, `email1`, `email2`, `address`, `fblink`, `inlink`, `twlink`, `gllink`, `ytlink`, `logo`, `admission_file`, `admission`) VALUES
(1, '+234 (0) 803 630 4935', '+234 (0) 816 925 1268', 'admin@kingsvilleschools.com.ng', '#', '<p><span style=\"color: #444444; font-family: Roboto, sans-serif; font-size: 15px; background-color: #ffffff;\">Plot 1450, Jahi Cadastral Zone</span><br style=\"box-sizing: border-box; color: #444444; font-family: Roboto, sans-serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #444444; font-family: Roboto, sans-serif; font-size: 15px; background-color: #ffffff;\">Jahi District, 900001, Abuja.</span></p>', 'facebook.com/KingsvilleAbuja', '#', 'https://twitter.com/KingsvilleAbuja', '#', '#', 'logo.jpg', 'admission.pdf', '2018/2019 Admission Form');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `image_location` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `founder`
--

CREATE TABLE `founder` (
  `id` int(11) NOT NULL,
  `image_location` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `fblink` varchar(255) NOT NULL,
  `inlink` varchar(255) NOT NULL,
  `twlink` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image_location` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `category`, `image_location`) VALUES
(1, '', 'event', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189199/assets/image-slides/student-stairs-sm-min_ntmgwo.jpg'),
(2, '', 'event', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598606395/assets/image-slides/primary-min_moza09.jpg'),
(3, '', 'event', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598607602/assets/image-slides/event-min_zs8rl1.jpg'),
(4, '', 'event', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598608810/assets/image-slides/advance-classes_qlxpdg.jpg'),
(5, '', 'event', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598607598/assets/image-slides/schoolbus-min_ha4fzj.jpg'),
(6, '', 'event', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189199/assets/image-slides/SECTION_OF_THE_CLASSROOM_BLOCKS-min_sqt3rb.jpg'),
(7, '', 'event', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189198/assets/image-slides/library-min-min_jogeey.jpg'),
(8, '', 'event', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189199/assets/image-slides/tennis-min_xdlacl.jpg'),
(9, '', 'event', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189197/assets/image-slides/lab-2-min_j0n2yd.jpg'),
(10, '', 'event', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189196/assets/image-slides/computer-lab-min_cvc2gq.jpg'),
(11, '', 'event', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189195/assets/image-slides/baley-min_nzpwks.jpg'),
(12, '', 'facility', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189197/assets/image-slides/lab-1-min_tqpnvl.jpg'),
(13, '', 'facility', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189196/assets/image-slides/clinic-min_k6vaog.jpg'),
(14, '', 'facility', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1596535569/assets/image-slides/vocational-skill-min-min_srhgjw.jpg'),
(15, '', 'facility', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189197/assets/image-slides/FRONT_VIEW-min-1_lvvljt.jpg'),
(16, '', 'facility', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189197/assets/image-slides/FRONT_VIEW-min-1_lvvljt.jpg'),
(17, '', 'facility', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189197/assets/image-slides/lab-2-min_j0n2yd.jpg'),
(18, '', 'facility', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189196/assets/image-slides/chemistry-lab-min_hxerkg.jpg'),
(19, '', 'facility', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189196/assets/image-slides/classroom-main-min_yxvyzg.jpg'),
(20, '', 'facility', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189195/assets/image-slides/basketball-team-min_ag2pua.jpg'),
(21, '', 'facility', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189195/assets/image-slides/biology-lab-min_qxuags.jpg'),
(22, '', 'facility', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189199/assets/image-slides/SECTION_OF_THE_CLASSROOM_BLOCKS-min_sqt3rb.jpg'),
(23, '', 'facility', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1596628419/assets/image-slides/advance_school_qy0bqu.jpg'),
(24, '', 'facility', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1596623979/assets/image-slides/KINGSVILLE_SCHOOLS_ABUJA_2019_WAEC_RESULTS_ANALYSIS_3_twxulf.png'),
(25, '', 'facility', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1596535568/assets/image-slides/P1230966-min_n5ziyk.jpg'),
(26, '', 'facility', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189196/assets/image-slides/clinic-min_k6vaog.jpg'),
(27, '', 'facility', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1596535569/assets/image-slides/vocational-skill-min-min_srhgjw.jpg'),
(28, '', 'facility', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189197/assets/image-slides/lab-2-min_j0n2yd.jpg'),
(29, '', 'education', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189198/assets/image-slides/physics-lab-min_ye0ur0.jpg'),
(36, 'Kingsville delegates at the 2020 Commonwealth Day Celebration ', '', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189199/assets/image-slides/SECTION_OF_THE_CLASSROOM_BLOCKS-min_sqt3rb.jpg'),
(37, 'KINGSVILLE DELEGATES AT 2020 COMMONWEALTH DAY CELEBRATION', 'event', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189199/assets/image-slides/student-stairs-min-min_qxopoy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image_location` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `title`, `type`, `image_location`) VALUES
(1, 'Primary School', 'admission', '77653262454894723866.pdf'),
(2, 'Secondary School', 'admission', '68162129636968623961.pdf'),
(3, 'A\'Level', 'admission', '24286427899586496511.pdf'),
(4, '2019/2020 2nd Term Calendar', 'calendar', '89413457632879413396.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_location` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `short_content` varchar(100) NOT NULL,
  `date` varchar(255) NOT NULL,
  `edate` varchar(255) NOT NULL,
  `image_location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `type`, `title`, `content`, `short_content`, `date`, `edate`, `image_location`, `address`, `time`) VALUES
(11, 'news', 'Exhibition/Trade Fair', '<p><span style=\"color: #444444; font-family: Roboto, sans-serif; font-size: 15px; background-color: #ffffff;\">Kingsville students welcomed parents and friends to their 2018/2019 exhibition/Trade Fair.</span></p>', 'Kingsville students welcomed parents and friends to their 2018/2019 exhibition/Trade Fair.', 'September 11, 2018', '', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598607602/assets/image-slides/event-min_zs8rl1.jpg', '', ''),
(12, 'event', 'Visit to IDP CAMP', '<p><span style=\"color: #444444; font-family: Roboto, sans-serif; font-size: 15px; background-color: #ffffff;\">Pupils of Kingsville School took some relief materials to IDP camp at Durumi, Area 1, Abuja.</span></p>', 'Pupils of Kingsville School took some relief materials to IDP camp at Durumi, Area 1, Abuja.', 'December 31, 1969', '', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598608846/assets/image-slides/IDP_tnh3ay.jpg', '', ''),
(13, 'news', 'Excursion', '<p><span style=\"color: #444444; font-family: Roboto, sans-serif; font-size: 15px; background-color: #ffffff;\">Senior secondary pupils\' excursion to Obasanjo Space Centre, Airport Road. Lugbe.</span></p>', 'Senior secondary pupils excursion to Obasanjo Space Centre, Airport Road. Lugbe.', 'November 11, 2018', '', 'https://res.cloudinary.com/kingsvilleschools/image/upload/v1598607595/assets/image-slides/primary-min_bkeov1.jpg', '', ''),
(14, 'event', 'Open Day', '<p>Parents are hereby notified and welcome to take part in the schools&nbsp; open day</p>', 'Parents are hereby notified and welcome to take part in the schools', 'February 19, 2020', '', '', 'School Premises', '11:00 AM'),
(15, 'event', 'Inter-house Sport Competition', '<p>Inter-house Sport Competition (pupils/students/staff/parent)</p>', 'Inter-house Sport Competition (pupils/students/staff/parent)', 'February 26, 2020', '', '', 'School Premises', '10:00 AM'),
(16, 'event', '2019/2020 2nd Term Examination', '<p>Commencement of 2019/2020 2nd Term Examination</p>', 'Commencement of 2019/2020 2nd Term Examination', 'March 16, 2020', '', '', 'School Premises', '8:00 AM'),
(17, 'event', 'Open Day ', '', ' Open Day for 2nd term 2019/2020 ACademic Session', 'February 19, 2020', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `image_location` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `position` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `email`) VALUES
(1, 'eledglobal', 'bernice@bc123', 'eLED Global Services Limited', 'eledportal@gmail.com'),
(9, 'ICT', 'Kingsville@bc123', 'Kingsville ICT', 'admin@kingsvilleschools.com.ng');

-- --------------------------------------------------------

--
-- Table structure for table `user_enrollment`
--

CREATE TABLE `user_enrollment` (
  `id` int(11) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `othernames` varchar(60) NOT NULL,
  `address` varchar(150) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `soo` varchar(10) NOT NULL,
  `lga` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `psa` varchar(70) NOT NULL,
  `disability` varchar(100) DEFAULT NULL,
  `image_link` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `enrolled` tinyint(1) DEFAULT '0',
  `date_of_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_of_enroll` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_enrollment`
--

INSERT INTO `user_enrollment` (`id`, `surname`, `othernames`, `address`, `dob`, `gender`, `nationality`, `soo`, `lga`, `class`, `psa`, `disability`, `image_link`, `enrolled`, `date_of_reg`, `date_of_enroll`) VALUES
(1, 'Mary', 'Troublesome', 'Jimmy street Lagos', '2020-09-24', 'Female', 'Nigerian', 'Delta', 'Ethiope West', 'Advance classes', 'My hometown college', 'No pain', 'C:/xampp2/htdocs/KingsWeb/enroll_uploads/5f5934883d9d83.84080914.jpg', 0, '2020-09-09 19:01:12', '2020-09-09 19:01:12'),
(2, 'Lamina ', 'Kehinde', 'Dawaki', '2020-09-13', 'Female', 'Nigerian', 'Kogi', 'Ogori Magongo', 'Advance classes', 'Glisten', 'none', 'C:/Program Files/Ampps/www/backend-files/KINGSVILLEWEB/src/enroll_uploads/5f5a0a0b3377b7.63334336.jpg', 0, '2020-09-10 11:12:11', '2020-09-10 11:12:11'),
(3, 'Lamina ', 'Kehinde', 'Dawaki', '2020-09-13', 'Female', 'Nigerian', 'Ogun', 'Ogun Waterside', 'Advance classes', 'Glisten', 'none', 'C:/Program Files/Ampps/www/backend-files/KINGSVILLEWEB/src/enroll_uploads/5f5a0aa27996e0.40589730.jpg', 0, '2020-09-10 11:14:42', '2020-09-10 11:14:42'),
(4, 'Adebola', 'Kehinde', 'Dawaki', '2020-09-06', 'Female', 'Nigerian', 'FCT', 'Bwari', 'Advance classes', 'Lekki British School', 'none', 'C:/Program Files/Ampps/www/backend-files/KINGSVILLEWEB/src/enroll_uploads/5f5a0e0ad4a851.91016831.jpg', 0, '2020-09-10 11:29:14', '2020-09-10 11:29:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_parents`
--

CREATE TABLE `user_parents` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `occupation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_parents`
--

INSERT INTO `user_parents` (`user_id`, `fullname`, `email`, `phone`, `occupation`) VALUES
(1, 'Mason Greenwood', 'troublesomemary@gmail.com', '234577183883', 'Lawyer'),
(2, 'Mrs Mary', 'adebolakehindemary@gmail.com', '08129484897', 'Engineer'),
(3, 'Mrs Mary', 'adebolakehindemary@gmail.com', '08129484897', 'Engineer'),
(4, 'Adebola mary', 'adebolakehindemary@gmail.com', '09088776655', 'Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `user_id` int(11) NOT NULL,
  `status` varchar(10) DEFAULT 'Not paid',
  `hash` varchar(20) NOT NULL,
  `reference` varchar(20) DEFAULT NULL,
  `updated` varchar(3) NOT NULL DEFAULT 'No',
  `date_of_pay` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_payments`
--

INSERT INTO `user_payments` (`user_id`, `status`, `hash`, `reference`, `updated`, `date_of_pay`) VALUES
(1, 'Paid', 'U4KjizhHff7iEyxqzTrN', '350556182', 'Yes', '2020-09-09 19:01:12'),
(2, 'Not paid', 'qe3WmFAZQ8St7hnUqBlr', NULL, 'No', '2020-09-10 11:12:11'),
(3, 'Not paid', 'bDq4pJjv4dFGrw2tZwrf', NULL, 'No', '2020-09-10 11:14:42'),
(4, 'Paid', 'Ums3mS8cdsb7fHPLsRr5', '142482999', 'Yes', '2020-09-10 11:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `founder`
--
ALTER TABLE `founder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_enrollment`
--
ALTER TABLE `user_enrollment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_parents`
--
ALTER TABLE `user_parents`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `founder`
--
ALTER TABLE `founder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_enrollment`
--
ALTER TABLE `user_enrollment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_parents`
--
ALTER TABLE `user_parents`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
