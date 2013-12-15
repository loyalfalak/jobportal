-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2013 at 05:55 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `advertise_image`
--

CREATE TABLE IF NOT EXISTS `advertise_image` (
  `advertise_image_id` int(10) NOT NULL AUTO_INCREMENT,
  `advertise_img_name` varchar(255) NOT NULL,
  PRIMARY KEY (`advertise_image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `advertise_image`
--

INSERT INTO `advertise_image` (`advertise_image_id`, `advertise_img_name`) VALUES
(1, '3doctor.jpg'),
(2, '1doctor.jpg'),
(3, '2doctor.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `pjid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`aid`, `pjid`, `uid`, `status`) VALUES
(49, 31, 77, 0),
(50, 32, 77, 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE IF NOT EXISTS `company_details` (
  `company_id` int(10) NOT NULL AUTO_INCREMENT,
  `company_type` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `landline` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pincode` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`company_id`, `company_type`, `company_name`, `industry`, `landline`, `location`, `address`, `city`, `state`, `country`, `pincode`, `email`, `password`, `contact_person`, `designation`, `mobile`, `website`) VALUES
(6, 'Placement Consultant', 'loyalsoftech', '23', '9033304112', '11', 'aaa', '', '', '6', 0, 'vim@gmail.com', '123', 'vimal', 'emp', '9409182238', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `contact_us_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`contact_us_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_us_id`, `name`, `mobile`, `mail`, `address`, `comment`) VALUES
(3, 'dd', '9899889898', 'jasminmaru456@gmail.com', 'dd', 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_details`
--

CREATE TABLE IF NOT EXISTS `contact_us_details` (
  `contact_us_details_id` int(10) NOT NULL AUTO_INCREMENT,
  `contact_us_data` text NOT NULL,
  `contact_us_images` varchar(255) NOT NULL,
  PRIMARY KEY (`contact_us_details_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact_us_details`
--

INSERT INTO `contact_us_details` (`contact_us_details_id`, `contact_us_data`, `contact_us_images`) VALUES
(1, '<p style="margin: 0px; padding: 4px 0px; line-height: 18px; color: rgb(24, 24, 24); font-size: 13px; font-family: Arial, Helvetica, sans-serif; background-color: rgb(242, 239, 239);">\r\n	<strong style="margin: 0px; padding: 0px;">You can contact us by telephone, letter or email</strong></p>\r\n<div class="conl" style="margin: 0px; padding: 0px 25px 0px 0px; width: 400px; float: left; background-image: url(http://conceptcaresolutions.com/includes/templates/new_template/images/devider.png); background-color: rgb(242, 239, 239); color: rgb(47, 47, 47); font-family: Arial, Helvetica, sans-serif; background-position: 100% 0%; background-repeat: no-repeat no-repeat;">\r\n	<address class="addr" style="margin: 0px 0px 15px; padding: 0px 0px 15px; color: rgb(107, 107, 107); line-height: 20px; font-style: normal; border-bottom-width: 1px; border-bottom-style: dotted; border-bottom-color: rgb(102, 102, 102);">\r\n		<p style="margin: 0px; padding: 4px 0px; line-height: 18px; color: rgb(24, 24, 24); font-size: 13px;">\r\n			<strong class="cgeern" style="margin: 0px; padding: 0px; color: rgb(33, 116, 171);">Concept Care Solutions</strong><br style="margin: 0px; padding: 0px;" />\r\n			Middlesex House<br style="margin: 0px; padding: 0px;" />\r\n			29 to 45 High Street Edgware<br style="margin: 0px; padding: 0px;" />\r\n			Middlesex&nbsp;<br style="margin: 0px; padding: 0px;" />\r\n			HA8 7UU</p>\r\n		<p style="margin: 0px; padding: 4px 0px; line-height: 18px; color: rgb(24, 24, 24); font-size: 13px;">\r\n			<strong style="margin: 0px; padding: 0px;">Tel.</strong>&nbsp;&nbsp; 02087315970<br style="margin: 0px; padding: 0px;" />\r\n			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 02087315972&nbsp;</p>\r\n		<p style="margin: 0px; padding: 4px 0px; line-height: 18px; color: rgb(24, 24, 24); font-size: 13px;">\r\n			<strong style="margin: 0px; padding: 0px;">E:mail:</strong>&nbsp;&nbsp;&nbsp;<a href="mailto:info@londonccs.com" style="margin: 0px; padding: 0px; border: none; text-decoration: none; color: rgb(0, 0, 0); outline: none;" target="_blank">info@londonccs.com</a><br style="margin: 0px; padding: 0px;" />\r\n			<br style="margin: 0px; padding: 0px;" />\r\n			<strong class="cgeern" style="margin: 0px; padding: 0px; color: rgb(33, 116, 171);">Concept Care Solutions</strong><br style="margin: 0px; padding: 0px;" />\r\n			3 Notre Dame Mews<br style="margin: 0px; padding: 0px;" />\r\n			Northampton NN1 2BG<br style="margin: 0px; padding: 0px;" />\r\n			<strong style="margin: 0px; padding: 0px;">Telephone:</strong>&nbsp;&nbsp; 01604 620610<br style="margin: 0px; padding: 0px;" />\r\n			<strong style="margin: 0px; padding: 0px;">E:mail:</strong>&nbsp;&nbsp;&nbsp;<a href="mailto:northampton@londonccs.com" style="margin: 0px; padding: 0px; border: none; text-decoration: none; color: rgb(0, 0, 0); outline: none;">northampton@londonccs.com</a></p>\r\n	</address>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', '1344169820_424313290_2-Pictures-of--Free-Call-Center-Training-Course-100-Hours-Caloocan-Malabon-Navotas-Valen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(100) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=250 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, ' India'),
(3, 'Bangladesh'),
(4, 'Brazilaaa'),
(5, 'America'),
(6, 'Canda'),
(7, 'West Indies'),
(8, 'Afghanistan'),
(9, 'Aland Islands'),
(10, 'Albania'),
(11, 'Algeria'),
(12, 'American Samoa'),
(13, 'Andorra'),
(14, 'Angola'),
(15, 'Anguilla'),
(16, 'Antarctica'),
(17, 'Antigua And Barbuda'),
(18, 'Argentina'),
(19, 'Armenia'),
(20, 'Aruba'),
(21, 'Australia'),
(22, 'Austria'),
(23, 'Azerbaijan'),
(24, 'Bahamas'),
(25, 'Bahrain'),
(26, 'Bangladesh'),
(27, 'Barbados'),
(28, 'Belarus'),
(29, 'Belgium'),
(30, 'Belize'),
(31, 'Benin'),
(32, 'Bermuda'),
(33, 'Bhutan'),
(34, 'Bolivia'),
(35, 'Bosnia And Herzegovina'),
(36, 'Botswana'),
(37, 'Bouvet Island'),
(38, 'Brazil'),
(39, 'British Indian Ocean Territory'),
(40, 'Brunei Darussalam'),
(41, 'Bulgaria'),
(42, 'Burkina Faso'),
(43, 'Burundi'),
(44, 'Cambodia'),
(45, 'Cameroon'),
(46, 'Canada'),
(47, 'Cape Verde'),
(48, 'Cayman Islands'),
(49, 'Central African Republic'),
(50, 'Chad'),
(51, 'Chile'),
(52, 'China'),
(53, 'Christmas Island'),
(54, 'Cocos (Keeling) Islands'),
(55, 'Colombia'),
(56, 'Comoros'),
(57, 'Congo'),
(58, 'Congo, The Democratic Republic Of The'),
(59, 'Cook Islands'),
(60, 'Costa Rica'),
(61, 'Cote DIvoire'),
(62, 'Croatia'),
(63, 'Cuba'),
(64, 'Cyprus'),
(65, 'Czech Republic'),
(66, 'Denmark'),
(67, 'Djibouti'),
(68, 'Dominica'),
(69, 'Dominican Republic'),
(70, 'Ecuador'),
(71, 'Egypt'),
(72, 'El Salvador'),
(73, 'Equatorial Guinea'),
(74, 'Eritrea'),
(75, 'Estonia'),
(76, 'Ethiopia'),
(77, 'Falkland Islands (Malvinas)'),
(78, 'Faroe Islands'),
(79, 'Fiji'),
(80, 'Finland'),
(81, 'France'),
(82, 'French Guiana'),
(83, 'French Polynesia'),
(84, 'French Southern Territories'),
(85, 'Gabon'),
(86, 'Gambia'),
(87, 'Georgia'),
(88, 'Germany'),
(89, 'Ghana'),
(90, 'Gibraltar'),
(91, 'Greece'),
(92, 'Greenland'),
(93, 'Grenada'),
(94, 'Guadeloupe'),
(95, 'Guam'),
(96, 'Guatemala'),
(97, 'Guernsey'),
(98, 'Guinea'),
(99, 'Guinea-Bissau'),
(100, 'Guyana'),
(101, 'Haiti'),
(102, 'Heard Island And Mcdonald Islands'),
(103, 'Holy See (Vatican City State)'),
(104, 'Honduras'),
(105, 'Hong Kong'),
(106, 'Hungary'),
(107, 'Iceland'),
(108, 'India'),
(109, 'Indonesia'),
(110, 'Iran, Islamic Republic Of'),
(111, 'Iraq'),
(112, 'Ireland'),
(113, 'Isle Of Man'),
(114, 'Israel'),
(115, 'Italy'),
(116, 'Jamaica'),
(117, 'Japan'),
(118, 'Jersey'),
(119, 'Jordan'),
(120, 'Kazakhstan'),
(121, 'Kenya'),
(122, 'Kiribati'),
(123, 'Korea, Democratic PeopleS Republic Of'),
(124, 'Korea, Republic Of'),
(125, 'Kuwait'),
(126, 'Kyrgyzstan'),
(127, 'Lao PeopleS Democratic Republic'),
(128, 'Latvia'),
(129, 'Lebanon'),
(130, 'Lesotho'),
(131, 'Liberia'),
(132, 'Libyan Arab Jamahiriya'),
(133, 'Liechtenstein'),
(134, 'Lithuania'),
(135, 'Luxembourg'),
(136, 'Macao'),
(137, 'Macedonia'),
(138, 'Madagascar'),
(139, 'Malawi'),
(140, 'Malaysia'),
(141, 'Maldives'),
(142, 'Mali'),
(143, 'Malta'),
(144, 'Marshall Islands'),
(145, 'Martinique'),
(146, 'Mauritania'),
(147, 'Mauritius'),
(148, 'Mayotte'),
(149, 'Mexico'),
(150, 'Micronesia, Federated States Of'),
(151, 'Moldova, Republic Of'),
(152, 'Monaco'),
(153, 'Mongolia'),
(154, 'Montserrat'),
(155, 'Morocco'),
(156, 'Mozambique'),
(157, 'Myanmar'),
(158, 'Namibia'),
(159, 'Nauru'),
(160, 'Nepal'),
(161, 'Netherlands'),
(162, 'Netherlands Antilles'),
(163, 'New Caledonia'),
(164, 'New Zealand'),
(165, 'Nicaragua'),
(166, 'Niger'),
(167, 'Nigeria'),
(168, 'Niue'),
(169, 'Norfolk Island'),
(170, 'Northern Mariana Islands'),
(171, 'Norway'),
(172, 'Oman'),
(173, 'Pakistan'),
(174, 'Palau'),
(175, 'Palestinian Territory, Occupied'),
(176, 'Panama'),
(177, 'Papua New Guinea'),
(178, 'Paraguay'),
(179, 'Peru'),
(180, 'Philippines'),
(181, 'Pitcairn'),
(182, 'Poland'),
(183, 'Portugal'),
(184, 'Puerto Rico'),
(185, 'Qatar'),
(186, 'Reunion'),
(187, 'Romania'),
(188, 'Russian Federation'),
(189, 'Rwanda'),
(190, 'Saint Helena'),
(191, 'Saint Kitts And Nevis'),
(192, 'Saint Lucia'),
(193, 'Saint Pierre And Miquelon'),
(194, 'Saint Vincent And The Grenadines'),
(195, 'Samoa'),
(196, 'San Marino'),
(197, 'Sao Tome And Principe'),
(198, 'Saudi Arabia'),
(199, 'Senegal'),
(200, 'Serbia And Montenegro'),
(201, 'Seychelles'),
(202, 'Sierra Leone'),
(203, 'Singapore'),
(204, 'Slovakia'),
(205, 'Slovenia'),
(206, 'Solomon Islands'),
(207, 'Somalia'),
(208, 'South Africa'),
(209, 'South Georgia And The South Sandwich Islands'),
(210, 'Spain'),
(211, 'Sri Lanka'),
(212, 'Sudan'),
(213, 'Suriname'),
(214, 'Svalbard And Jan Mayen'),
(215, 'Swaziland'),
(216, 'Sweden'),
(217, 'Switzerland'),
(218, 'Syrian Arab Republic'),
(219, 'Taiwan, Province Of China'),
(220, 'Tajikistan'),
(221, 'Tanzania, United Republic Of'),
(222, 'Thailand'),
(223, 'Timor-Leste'),
(224, 'Togo'),
(225, 'Tokelau'),
(226, 'Tonga'),
(227, 'Trinidad And Tobago'),
(228, 'Tunisia'),
(229, 'Turkey'),
(230, 'Turkmenistan'),
(231, 'Turks And Caicos Islands'),
(232, 'Tuvalu'),
(233, 'Uganda'),
(234, 'Ukraine'),
(235, 'United Arab Emirates'),
(236, 'United Kingdom'),
(237, 'United States'),
(238, 'United States Minor Outlying Islands'),
(239, 'Uruguay'),
(240, 'Uzbekistan'),
(241, 'Vanuatu'),
(242, 'Venezuela'),
(243, 'Viet Nam'),
(244, 'Virgin Islands, British'),
(245, 'Virgin Islands, U.S.'),
(246, 'Wallis And Futuna'),
(247, 'Western Sahara'),
(248, 'Yemen'),
(249, 'Zambia');

-- --------------------------------------------------------

--
-- Table structure for table `course_name`
--

CREATE TABLE IF NOT EXISTS `course_name` (
  `course_name_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name_data` varchar(255) NOT NULL,
  PRIMARY KEY (`course_name_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `course_name`
--

INSERT INTO `course_name` (`course_name_id`, `course_name_data`) VALUES
(1, 'BCA'),
(3, 'B.COM');

-- --------------------------------------------------------

--
-- Table structure for table `cover_letter`
--

CREATE TABLE IF NOT EXISTS `cover_letter` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cdetail` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cover_letter`
--

INSERT INTO `cover_letter` (`cid`, `uid`, `cname`, `cdetail`) VALUES
(3, 43, 'javaa', 'This is javaa'),
(8, 77, 'abc', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `default_application`
--

CREATE TABLE IF NOT EXISTS `default_application` (
  `dapp_id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`dapp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `default_application`
--

INSERT INTO `default_application` (`dapp_id`, `uid`, `title`, `description`) VALUES
(13, 77, 'php jobs', 'This is php jobs');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `eid` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `study_duration` int(255) NOT NULL,
  `specilization` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `degree_type` varchar(255) NOT NULL,
  `passing_year` int(255) NOT NULL,
  `study_type` varchar(255) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`eid`, `uid`, `course_name`, `study_duration`, `specilization`, `university`, `degree_type`, `passing_year`, `study_type`) VALUES
(47, 77, '1', 3, '2', '7', 'Masters', 2013, 'Distance Learning'),
(48, 78, '', 0, '', '', '', 0, ''),
(49, 80, '', 0, '', '', '', 0, ''),
(50, 81, '', 0, '', '', '', 0, ''),
(51, 82, '', 0, '', '', '', 0, ''),
(52, 83, '', 0, '', '', '', 0, ''),
(53, 84, '', 0, '', '', '', 0, ''),
(54, 85, '', 0, '', '', '', 0, ''),
(55, 86, '', 0, '', '', '', 0, ''),
(56, 87, '', 0, '', '', '', 0, ''),
(57, 88, '', 0, '', '', '', 0, ''),
(58, 78, '', 0, '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `epages`
--

CREATE TABLE IF NOT EXISTS `epages` (
  `pageid` int(11) NOT NULL AUTO_INCREMENT,
  `pagename` varchar(255) NOT NULL,
  `pagecontent` text NOT NULL,
  `pageimage` varchar(255) NOT NULL,
  `pagemeta` varchar(255) NOT NULL,
  PRIMARY KEY (`pageid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `epages`
--

INSERT INTO `epages` (`pageid`, `pagename`, `pagecontent`, `pageimage`, `pagemeta`) VALUES
(1, 'About Us', '<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 14px;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(51, 153, 255);"><strong style="margin: 0px; padding: 0px;">Concept Care Solutions</strong></span></span>&nbsp;is a CQC registered agency and one of the UK leading providers with over 20 years experience&nbsp; supplying healthcare professionals from domiciliary carers to qualified nurses of all grades and specialties.&nbsp; CCS currently provides services nationwide to NHS hospitals, Health Clinics, Private Hospitals, Private individuals, Local authorities and Health authorities. CCS provides 24 hours / 7 days a week service including 24HR on call emergency helpline. &nbsp;</span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 14px;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">Concept Care Solutions</strong></span></span>&nbsp;Head office is based in Edgware, Middlesex and have offices operating in various locations throughout UK nationwide. CCS is the overall group company that started with providing domiciliary care services which later on developed Dolphin Care Nursing division specialising in providing qualified nurses to the NHS and Private Hospitals.</span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 14px;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">Dolphin Care Nursing</strong></span></span>&nbsp;has been awarded a platinum rating for our compliance audits in supplying Medical and Nursing staff within the Health Trust Europe Framework Agreement &amp; the London Procurement Programme (LPP).</span></p>\r\n', 'recruitment-agencies-photo-71.png', 'About 3tdentalsolutions'),
(2, 'Services', '<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><span style="margin: 0px; padding: 0px; font-size: 16px;"><strong style="margin: 0px; padding: 0px;">Qualified Nurses</strong></span></span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 14px;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">Dolphin Care Nursing</strong></span></span>&nbsp;recruits nationally Registered Nurses of all specialties &amp; Health Care Assistants. Dolphin Care provides services throughout the United Kingdom; supplying staff to all areas and specialties to the NHS and Private Healthcare sector. We can provide specialist Nurses and Health Care Assistants on a locum or permanent basis.</span><br style="margin: 0px; padding: 0px;" />\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; color: rgb(255, 140, 0);"><span style="margin: 0px; padding: 0px; font-size: 16px;"><strong style="margin: 0px; padding: 0px;">Current available nurses to name a few of specialty backgrounds:</strong></span></span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<ul style="margin: 0px; padding-right: 0px; padding-left: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">Medical</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">Surgical</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">A&amp;E</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">ITU</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">Chemo</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">Pediatric</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">SCRUB /Theatre</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">Community</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">Midwives</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">RMN</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">HCA / CSW</span></li>\r\n</ul>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; color: rgb(255, 140, 0);"><span style="margin: 0px; padding: 0px; font-size: 16px;"><strong style="margin: 0px; padding: 0px;">Services Include:</strong></span></span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<ul style="margin: 0px; padding-right: 0px; padding-left: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">Last minute temporary cover</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">UK coverage</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">The highest calibre of staff</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">Competitive rates</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">All staff are fully compliant within NHS guidelines</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">Rigorous recruitment procedures</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">CRB checks carried out annually</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">Our booking consultants have an in-depth knowledge of the sectors they supply to.</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">&nbsp;A 24 hour, 365 days a year service</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">A tailored service to meet your needs</span></li>\r\n</ul>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">Domiciliary Care&nbsp;</strong></span></span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 14px;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">Concept Care Solutions</strong></span></span>&nbsp;provides Carers that are qualified and experienced professionals working with children and adults from a wide range of needs, including those with enduring illnesses, physical or learning disabilities, mental health needs, brain injury and dementia. All care professionals registered with our agency go through thorough background checks before offered any work such as CRB check, references, qualifications and training.</span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 14px;">&nbsp;</span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<table border="1" cellpadding="0" cellspacing="0" style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<tbody style="margin: 0px; padding: 0px;">\r\n		<tr style="margin: 0px; padding: 0px;">\r\n			<td style="margin: 0px; padding: 0px; width: 308px; height: 304px;">\r\n				<p style="margin: 0px; padding: 0px;">\r\n					<span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">Range between 30 minute visit to a full 24 hour live-in service</strong></span></span></span></p>\r\n				<p style="margin: 0px; padding: 0px;">\r\n					&nbsp;</p>\r\n				<p style="margin: 0px; padding: 0px;">\r\n					&nbsp;</p>\r\n				<ul style="margin: 0px; padding-right: 0px; padding-left: 0px;">\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Personal care</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Assistance with getting up or going to bed</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Bathing</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Dementia Care</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Shopping</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Cleaning</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Food preparation</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Assisting with medication</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Cooking</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Home Care</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Live in Care</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Day and Night Sitting Services</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Chiropody</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Social activities</span></span></li>\r\n				</ul>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; width: 308px; height: 304px;">\r\n				<p style="margin: 0px; padding: 0px;">\r\n					<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">&nbsp;</span></span></p>\r\n				<p style="margin: 0px; padding: 0px;">\r\n					<strong style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; color: rgb(255, 140, 0);">Fully qualified trained nurses and care workers available to offer support in the following areas:</span></span></span></strong></p>\r\n				<p style="margin: 0px; padding: 0px;">\r\n					&nbsp;</p>\r\n				<ul style="margin: 0px; padding-right: 0px; padding-left: 0px;">\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Palliative Care</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Peg Feeding</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Band 3 Nursing Care</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">The dressing of wounds</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Manual handling</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Tracheotomy Care</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Terminal care</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Medication</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Chiropody</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Barrier Nursing</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Dialysis Care</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Pad and Oxygen Therapy</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Antenatal Care</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Suctioning</span></span></li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; font-size: 14px;">Nursing at home</span></span></li>\r\n				</ul>\r\n				<p style="margin: 0px; padding: 0px;">\r\n					&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<br style="margin: 0px; padding: 0px;" />\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<strong style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><span style="margin: 0px; padding: 0px; font-size: 16px;">Our Service Values</span></span></strong></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<table border="1" cellpadding="0" cellspacing="0" style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<tbody style="margin: 0px; padding: 0px;">\r\n		<tr style="margin: 0px; padding: 0px;">\r\n			<td style="margin: 0px; padding: 0px; width: 308px;">\r\n				<p style="margin: 0px; padding: 0px;">\r\n					<strong style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);">We will ensure that all Service Users will:</span></span></strong><br style="margin: 0px; padding: 0px;" />\r\n					&nbsp;</p>\r\n				<ul style="margin: 0px; padding-right: 0px; padding-left: 0px;">\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-size: 14px;">Have Choice and Control over the services provided.</span></li>\r\n				</ul>\r\n				<p style="margin: 0px 0px 0px 36pt; padding: 0px;">\r\n					&nbsp;</p>\r\n				<ul style="margin: 0px; padding-right: 0px; padding-left: 0px;">\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-size: 14px;">Be provided with services which promote their Improved health and Emotional Wellbeing</span><br style="margin: 0px; padding: 0px;" />\r\n						&nbsp;</li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-size: 14px;">Have their personal dignity respected.</span></li>\r\n				</ul>\r\n				<p style="margin: 0px; padding: 0px;">\r\n					&nbsp;</p>\r\n				<ul style="margin: 0px; padding-right: 0px; padding-left: 0px;">\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-size: 14px;">Experience an improved quality of life.</span></li>\r\n				</ul>\r\n				<p style="margin: 0px; padding: 0px;">\r\n					&nbsp;</p>\r\n				<ul style="margin: 0px; padding-right: 0px; padding-left: 0px;">\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-size: 14px;">Receive a service where cultural, religious and gender needs are respected and met in a non-discriminatory way.</span></li>\r\n				</ul>\r\n				<p style="margin: 0px; padding: 0px;">\r\n					&nbsp;</p>\r\n				<ul style="margin: 0px; padding-right: 0px; padding-left: 0px;">\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-size: 14px;">Be given the opportunity to maximise their economic well being.</span></li>\r\n				</ul>\r\n				<p style="margin: 0px; padding: 0px;">\r\n					&nbsp;</p>\r\n				<ul style="margin: 0px; padding-right: 0px; padding-left: 0px;">\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-size: 14px;">Have the right to access their community and be valued</span></li>\r\n				</ul>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; width: 308px;">\r\n				<p align="center" style="margin: 0px; padding: 0px;">\r\n					<br style="margin: 0px; padding: 0px;" />\r\n					&nbsp;</p>\r\n				<p style="margin: 0px; padding: 0px;">\r\n					<span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(255, 140, 0);"><strong style="margin: 0px; padding: 0px;">We will do this by ensuring that</strong>:</span></span><br style="margin: 0px; padding: 0px;" />\r\n					&nbsp;</p>\r\n				<ul style="margin: 0px; padding-right: 0px; padding-left: 0px;">\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-size: 14px;">Service Users needs and wishes are fully reflected in their assessment and care plan.</span></li>\r\n				</ul>\r\n				<p style="margin: 0px 0px 0px 36pt; padding: 0px;">\r\n					&nbsp;</p>\r\n				<ul style="margin: 0px; padding-right: 0px; padding-left: 0px;">\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-size: 14px;">Our staffs are fully trained to meet the needs of Service Users.</span></li>\r\n				</ul>\r\n				<p style="margin: 0px; padding: 0px;">\r\n					&nbsp;</p>\r\n				<ul style="margin: 0px; padding-right: 0px; padding-left: 0px;">\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-size: 14px;">Care plans are regularly reviewed and<br style="margin: 0px; padding: 0px;" />\r\n						&nbsp;updated.</span></li>\r\n				</ul>\r\n				<p style="margin: 0px 0px 0px 36pt; padding: 0px;">\r\n					&nbsp;</p>\r\n				<ul style="margin: 0px; padding-right: 0px; padding-left: 0px;">\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-size: 14px;">Robust Compliments and Complaints<br style="margin: 0px; padding: 0px;" />\r\n						&nbsp;Procedures are in place.</span></li>\r\n				</ul>\r\n				<p style="margin: 0px 0px 0px 36pt; padding: 0px;">\r\n					&nbsp;</p>\r\n				<ul style="margin: 0px; padding-right: 0px; padding-left: 0px;">\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-size: 14px;">Regular Service User Satisfaction Surveys are carried out.</span><br style="margin: 0px; padding: 0px;" />\r\n						&nbsp;</li>\r\n					<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n						<span style="margin: 0px; padding: 0px; font-size: 14px;">We use the feedback we receive from Service Users, their Carers and external<br style="margin: 0px; padding: 0px;" />\r\n						commissioners of services to ensure we are continuously improving our services.</span></li>\r\n				</ul>\r\n				<p style="margin: 0px; padding: 0px;">\r\n					<br style="margin: 0px; padding: 0px;" />\r\n					&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<br style="margin: 0px; padding: 0px;" />\r\n	<br style="margin: 0px; padding: 0px;" />\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><span style="margin: 0px; padding: 0px; font-size: 16px;"><strong style="margin: 0px; padding: 0px;"><u style="margin: 0px; padding: 0px;">Health Care Training &amp; Development</u></strong></span></span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 14px;">Concept Care Solutions offer training and development for Healthcare professionals to be fully equipped with skills required to work in chosen area of specialty. CCS offer high level of experience within the Healthcare recruitment industry and have trainers that are qualified and have experienced working within NHS and private hospital sector, our trainers have expert knowledge in what is required to make a successful and competent healthcare professional and will provide full support.</span><br style="margin: 0px; padding: 0px;" />\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<br style="margin: 0px; padding: 0px;" />\r\n	<span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">Courses Available include:</strong></span></span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<br style="margin: 0px; padding: 0px;" />\r\n	<br style="margin: 0px; padding: 0px;" />\r\n	<span style="margin: 0px; padding: 0px; color: rgb(255, 140, 0);"><span style="margin: 0px; padding: 0px; font-size: 16px;"><strong style="margin: 0px; padding: 0px;">Health &amp; Social Care Level 2/3</strong></span></span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<br style="margin: 0px; padding: 0px;" />\r\n	<span style="margin: 0px; padding: 0px; font-size: 14px;">Health and Social care training is offered to those interested in becoming Health Care Assistants employed in hospitals, nursing homes, Home care and the community setting. &nbsp;</span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><span style="margin: 0px; padding: 0px; font-size: 16px;"><strong style="margin: 0px; padding: 0px;">Other courses include:&nbsp;</strong></span></span><br style="margin: 0px; padding: 0px;" />\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<br style="margin: 0px; padding: 0px;" />\r\n	<span style="margin: 0px; padding: 0px; color: rgb(255, 140, 0);"><span style="margin: 0px; padding: 0px; font-size: 16px;"><strong style="margin: 0px; padding: 0px;">Fire Safety and Hazards/Fire drills and Evacuations/Fire Risk Assessments</strong>.<br style="margin: 0px; padding: 0px;" />\r\n	<strong style="margin: 0px; padding: 0px;">Moving &amp; Handling Theory/Practical&nbsp;</strong><br style="margin: 0px; padding: 0px;" />\r\n	<strong style="margin: 0px; padding: 0px;">Venepuncture</strong><br style="margin: 0px; padding: 0px;" />\r\n	<strong style="margin: 0px; padding: 0px;">Infection Control<br style="margin: 0px; padding: 0px;" />\r\n	Death and Bereavement<br style="margin: 0px; padding: 0px;" />\r\n	Food Hygiene<br style="margin: 0px; padding: 0px;" />\r\n	Safeguarding Vulnerable Adults<br style="margin: 0px; padding: 0px;" />\r\n	Emergency treatment of Anaphylactic Reactions<br style="margin: 0px; padding: 0px;" />\r\n	Basic Adult Life Support<br style="margin: 0px; padding: 0px;" />\r\n	Paediatric Life Support<br style="margin: 0px; padding: 0px;" />\r\n	Managing Challenging Behaviour<br style="margin: 0px; padding: 0px;" />\r\n	AED (Automated External Defibrillator)<br style="margin: 0px; padding: 0px;" />\r\n	Tracheostomy Care Guidelines<br style="margin: 0px; padding: 0px;" />\r\n	Observations including BSM and Minimum Standard for Adult in-patient Observations</strong></span></span></p>\r\n', '3doctor.jpg', 'Search Jobs'),
(3, 'Career Services', '<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 14px;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">Concept Care Solutions</strong></span>&nbsp;</span>is a trusted agency providing a first class service within the Healthcare sector. Healthcare professionals are welcomed to join and register with our agency as we are able to provide placements from a wide range of areas such as public and private sector hospitals, residential homes, Health clinic, HMPs and primary care trust. Our team are dedicated and committed to placing our staff in range of exciting, rewarding and challenging roles.</span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 14px;">Whether you are looking for short or long-term work, we have a range of great opportunities waiting for you. To view our current vacancies, browse our job search pages or contact one of our consultants to discuss your options.</span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 14px;">As a member of Concept Care Solutions, you are guaranteed to be receiving some of the best pay rates and additional benefits in the market.</span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<br style="margin: 0px; padding: 0px;" />\r\n	<span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(255, 140, 0);"><strong style="margin: 0px; padding: 0px;">Currently recruiting specialty Backgrounds of the following:</strong></span></span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<ul style="margin: 0px; padding-right: 0px; padding-left: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">Medical</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">Surgical</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">A&amp;E</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">ITU</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">Pediatric</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">SCRUB</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">Community</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">Midwives</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">RMN</span></li>\r\n	<li style="margin: 0px; padding: 0px; list-style-type: none;">\r\n		<span style="margin: 0px; padding: 0px; font-size: 14px;">HCA/CSW</span></li>\r\n</ul>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<br style="margin: 0px; padding: 0px;" />\r\n	<span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">Overseas Nurses &nbsp;&nbsp;</strong></span></span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 14px;">Due to shortage of nurses and current demand for qualified nurses to work in the UK, Dolphin Care has been recruiting internationally working closely with candidates providing support and training with the opportunity to work in Hospitals, Health clinics and other health facilities.&nbsp; Nurses from overseas are welcomed to register with our agency whilst applying for NMC registration can work as a Health Care Assistant (HCA) in various clinical settings including the public and private hospital sectors.</span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(255, 140, 0);"><strong style="margin: 0px; padding: 0px;">REGISTER TODAY</strong></span></span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<br style="margin: 0px; padding: 0px;" />\r\n	<span style="margin: 0px; padding: 0px; font-size: 14px;">Please cick Register Now&nbsp;and&nbsp;submit form as one of our agents will be in touch to discuss options.</span></p>\r\n', '2doctor.jpg', 'Clients of 3t Dental Solutions'),
(4, 'Employer Services', '<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 14px;"><strong style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><span style="margin: 0px; padding: 0px; font-size: 16px;">Concept Care Solutions</span></span></strong>&nbsp;reputation is recognised across the UK nationwide as one of the leading providers for Domiciliary and Nursing care; working specifically with hospitals, private practices, Homecare, HMPs, GP surgeries and other healthcare facilities.</span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 14px;">NHS hospital, Private practises or any other healthcare facility, Concept Care has the solution. All our registered staffs are qualified, experienced and fully vetted to ensure that our clients and their patients benefit from the highest level of care and expertise. Due to the level of experience gained over the years within all clinical settings you can be sure that your staffing requirements will be fully understood and will be working with an experienced team.</span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(255, 140, 0);"><strong style="margin: 0px; padding: 0px;">Why use Concept Care Solutions</strong></span></span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">Last minute temporary cover</strong></span></span></p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">UK coverage</strong></span></span></p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">The highest calibre of staff</strong></span></span></p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">Competitive rates</strong></span></span></p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">All staff are fully compliant within NHS guidelines</strong></span></span></p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">Rigorous recruitment procedures</strong></span></span></p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">CRB checks carried out annually</strong></span></span></p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">Our booking consultants have an in-depth knowledge of the sectors they supply to.</strong></span></span></p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">A 24 hour, 365 days a year service</strong></span></span></p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; color: rgb(0, 153, 255);"><strong style="margin: 0px; padding: 0px;">A tailored service to meet your needs</strong></span></span></p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px 0px 0px 72pt; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<span style="margin: 0px; padding: 0px; font-size: 14px;">For further information or to discuss any enquiries, please contact one of our Business Development consultants.</span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 13px;">\r\n	<br style="margin: 0px; padding: 0px;" />\r\n	&nbsp;</p>\r\n', 'recruitment-agencies-photo-83l.jpg', ''),
(5, 'Terms of Use', 'This is Terms of Use', 'admin_logo.png', ''),
(6, 'Privacy', 'This is Privacy', '0004.jpg', ''),
(7, 'Disclaimer', 'This is Disclaimer', 'calender.jpg', ''),
(8, 'Advertise', 'This is Advertise', 'advt.gif', ''),
(9, 'Sitemap', 'This is Sitemap', 'arrow (2).png', ''),
(10, 'Help', 'This is Help', 'Home-Care-in-minutes1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `file_id` int(10) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`file_id`, `filename`) VALUES
(1, 'F66150750Structure2013.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `franchise`
--

CREATE TABLE IF NOT EXISTS `franchise` (
  `franchise_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`franchise_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `franchise`
--

INSERT INTO `franchise` (`franchise_id`, `name`, `mobile`, `mail`, `address`, `comment`) VALUES
(2, 'jasmin', '9899889898', 'jasminmaru456@gmail.com', 'qqq', 'xx');

-- --------------------------------------------------------

--
-- Table structure for table `franchise_details`
--

CREATE TABLE IF NOT EXISTS `franchise_details` (
  `franchise_details_id` int(10) NOT NULL AUTO_INCREMENT,
  `franchise_data` text NOT NULL,
  `franchise_image` varchar(255) NOT NULL,
  PRIMARY KEY (`franchise_details_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `franchise_details`
--

INSERT INTO `franchise_details` (`franchise_details_id`, `franchise_data`, `franchise_image`) VALUES
(1, '<p>\r\n	This is Franchise</p>\r\n', 'IMG_0683.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `function`
--

CREATE TABLE IF NOT EXISTS `function` (
  `function_id` int(10) NOT NULL AUTO_INCREMENT,
  `function` varchar(255) NOT NULL,
  PRIMARY KEY (`function_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `function`
--

INSERT INTO `function` (`function_id`, `function`) VALUES
(5, 'Accounts / Finance / Tax / CS / Audit'),
(6, 'Agent'),
(7, 'Analytics / Business Intelligence'),
(8, 'Architecture / Interior Design'),
(9, 'Banking / Insurance'),
(10, 'Content / Journalism'),
(12, 'Corporate Planning / Consulting'),
(13, 'Engineering Design'),
(14, 'Export / Import / Merchandising'),
(15, 'Fashion / Garments'),
(16, 'Administration / IR'),
(17, 'IT Software - Client Server'),
(18, 'IT Software - Mainframe'),
(19, 'IT Software - Middleware'),
(20, 'IT Software - Mobile'),
(21, 'IT Software - Other'),
(22, 'IT Software - System Programming'),
(23, 'IT Software - Telecom Software'),
(24, 'IT Software - Application Programming / Maintenance'),
(25, 'IT Software - DBA / Datawarehousing'),
(26, 'IT Software - E-Commerce / Internet Technologies'),
(27, 'IT Software - Embedded /EDA /VLSI /ASIC /Chip Des'),
(28, 'IT Software - ERP / CRM'),
(29, 'Software - Systems / EDP / MIS'),
(30, 'IT- Hardware / Telecom / Technical Staff / Support'),
(31, 'ITES / BPO / KPO / Customer Service / Operations'),
(32, 'Legal'),
(33, 'Marketing / Advertising / MR / PR'),
(34, 'Packaging'),
(35, 'Pharma / Biotech / Healthcare / Medical / R&amp'),
(36, 'Production / Maintenance / Quality'),
(37, 'Purchase / Logistics / Supply Chain'),
(38, 'Sales / BD'),
(39, 'Secretary / Front Office / Data Entry'),
(40, 'Self Employed / Consultants'),
(41, 'Shipping'),
(42, 'Site Engineering / Project Management'),
(43, 'Teaching / Education'),
(44, 'Ticketing / Travel / Airlines'),
(45, 'Top Management'),
(46, 'TV / Films / Production'),
(47, 'Web / Graphic Design / Visualiser'),
(48, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `health_care`
--

CREATE TABLE IF NOT EXISTS `health_care` (
  `health_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`health_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `health_care`
--

INSERT INTO `health_care` (`health_id`, `title`, `sub_title`, `image`) VALUES
(1, 'HEALTH CARE TRAINING & DEVELOPMENT', '', 'training_main1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE IF NOT EXISTS `industry` (
  `industry_id` int(10) NOT NULL AUTO_INCREMENT,
  `industry` varchar(255) NOT NULL,
  PRIMARY KEY (`industry_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`industry_id`, `industry`) VALUES
(7, 'Accounting/Finance'),
(8, 'Advertising/PR/MR/Events'),
(9, 'Agriculture/Dairy'),
(10, 'Animation'),
(11, 'Architecture/Interior Designing'),
(12, 'Auto/Auto Ancillary'),
(13, 'Aviation / Aerospace Firms'),
(14, 'Banking/Financial Services/Broking'),
(15, 'BPO/ITES'),
(16, 'Brewery / Distillery'),
(17, 'Ceramics /Sanitary ware'),
(18, 'Chemicals/PetroChemical/Plastic/Rubber'),
(19, 'Construction/Engineering/Cement/Metals'),
(20, 'Consumer Durables'),
(21, 'Courier/Transportation/Freight'),
(22, 'Defence/Government'),
(23, 'Education/Teaching/Training'),
(24, 'Electricals / Switchgears'),
(25, 'Export/Import'),
(26, 'Facility Management'),
(27, 'Fertilizers/Pesticides'),
(28, 'FMCG/Foods/Beverage'),
(29, 'Food Processing'),
(30, 'Fresher/Trainee'),
(31, 'Gems &amp; Jewellery'),
(32, 'Glass'),
(33, 'Heat Ventilation Air Conditioning'),
(34, 'Hotels/Restaurants/Airlines/Travel'),
(35, 'Industrial Products/Heavy Machinery'),
(36, 'Insurance'),
(37, 'IT-Hardware &amp; Networking'),
(38, 'IT-Software/Software Services'),
(39, 'KPO / Research /Analytics'),
(40, 'Legal'),
(41, 'Media/Dotcom/Entertainment'),
(42, 'Internet/Ecommerce'),
(43, 'Medical/Healthcare/Hospital'),
(44, 'Mining'),
(45, 'NGO/Social Services'),
(46, 'Office Equipment/Automation'),
(47, 'Oil and Gas/Power/Infrastructure/Energy'),
(48, 'Paper'),
(49, 'Pharma/Biotech/Clinical Research'),
(50, 'Printing/Packaging'),
(51, 'Security/Law Enforcement'),
(52, 'Semiconductors/Electronics'),
(53, 'Shipping/Marine'),
(54, 'Steel'),
(55, 'Strategy /Management Consulting Firms'),
(56, 'Telcom/ISP'),
(57, 'Textiles/Garments/Accessories'),
(58, 'Tyres'),
(59, 'Water Treatment / Waste Management'),
(60, 'Wellness/Fitness/Sports'),
(61, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `it_skills`
--

CREATE TABLE IF NOT EXISTS `it_skills` (
  `it_skills_id` int(10) NOT NULL AUTO_INCREMENT,
  `skills` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `last_used` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`it_skills_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `lid` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `proficency` varchar(255) NOT NULL,
  `read` varchar(255) NOT NULL,
  `write` varchar(255) NOT NULL,
  `speak` varchar(255) NOT NULL,
  `lname1` varchar(255) NOT NULL,
  `proficency1` varchar(255) NOT NULL,
  `read1` varchar(255) NOT NULL,
  `write1` varchar(255) NOT NULL,
  `speak1` varchar(255) NOT NULL,
  `lname2` varchar(255) NOT NULL,
  `proficency2` varchar(255) NOT NULL,
  `read2` varchar(255) NOT NULL,
  `write2` varchar(255) NOT NULL,
  `speak2` varchar(255) NOT NULL,
  `lname3` varchar(255) NOT NULL,
  `proficency3` varchar(255) NOT NULL,
  `read3` varchar(255) NOT NULL,
  `write3` varchar(255) NOT NULL,
  `speak3` varchar(255) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`lid`, `uid`, `lname`, `proficency`, `read`, `write`, `speak`, `lname1`, `proficency1`, `read1`, `write1`, `speak1`, `lname2`, `proficency2`, `read2`, `write2`, `speak2`, `lname3`, `proficency3`, `read3`, `write3`, `speak3`) VALUES
(14, 77, 'english', 'proficient', 'read', 'write', 'speak', 'gujarati', 'proficient', 'read', 'write', 'speak', 'hindi', 'proficient', 'read', 'write', 'speak', 'sanskrut', 'proficient', 'read', 'write', 'speak'),
(17, 87, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 78, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `location_id` int(10) NOT NULL AUTO_INCREMENT,
  `location_name` varchar(255) NOT NULL,
  `country_id` int(10) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`, `country_id`) VALUES
(10, 'London', 236),
(11, 'Wales', 236);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `logo_id` int(10) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`logo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `logo`) VALUES
(9, 'CCS LOGO 11.png');

-- --------------------------------------------------------

--
-- Table structure for table `medical_service`
--

CREATE TABLE IF NOT EXISTS `medical_service` (
  `med_id` int(10) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`med_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `medical_service`
--

INSERT INTO `medical_service` (`med_id`, `logo`, `title`, `image`) VALUES
(5, '1156673751R7oYm51.jpg', 'DOLPHIN CARE NURSING', 'Untitledd11.jpg'),
(7, 'CCS LOGO 11.png', 'HOME CARE SERVICES', 'Home-Care-in-minutes1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news_and_update`
--

CREATE TABLE IF NOT EXISTS `news_and_update` (
  `nw_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `featured` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`nw_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `news_and_update`
--

INSERT INTO `news_and_update` (`nw_id`, `title`, `description`, `featured`) VALUES
(17, ' NMC Nursing Midwifery Council', '<p style="margin: 0px; padding: 0px;">\r\n	Please visit :&nbsp;<a href="http://www.nmc-uk.org/Nurses-and-midwives/" style="margin: 0px; padding: 0px;">http://www.nmc-uk.org/Nurses-and-midwives/</a></p>\r\n', 1),
(18, 'CQC Care Quality Commission', '<p>\r\n	<a href="http://www.cqc.org.uk/">http://www.cqc.org.uk/</a></p>\r\n', 1),
(19, 'UKBA Boarder Agency', '<p>\r\n	<a href="http://www.ukba.homeoffice.gov.uk/">http://www.ukba.homeoffice.gov.uk/</a></p>\r\n', 1),
(20, 'REC Recruitment Employment Confederation', '<p>\r\n	<a href="http://www.rec.uk.com/home">http://www.rec.uk.com/home</a></p>\r\n', 1),
(21, 'UK Home Care Association', '<p>\r\n	<a href="http://www.ukhca.co.uk/index.aspx">http://www.ukhca.co.uk/index.aspx</a></p>\r\n', 1),
(22, 'BBC NEWS / Nurse Shortages in UK', '<p>\r\n	<a href="http://www.bbc.co.uk/news/health-25005671">http://www.bbc.co.uk/news/health-25005671</a></p>\r\n', 1),
(24, 'RCN Royal College of Nursing', '<p>\r\n	<a href="http://www.rcn.org.uk/">http://www.rcn.org.uk/</a></p>\r\n', 1),
(25, 'CCS BLOG', '<p>\r\n	CONCEPT CARE UPDATES TO FOLLOW</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_jobs`
--

CREATE TABLE IF NOT EXISTS `post_jobs` (
  `pjid` int(10) NOT NULL AUTO_INCREMENT,
  `company_id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `function` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `emp_require` varchar(255) NOT NULL,
  `jobexpiry` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `jobtype` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `app_disapprove` int(11) NOT NULL,
  PRIMARY KEY (`pjid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `post_jobs`
--

INSERT INTO `post_jobs` (`pjid`, `company_id`, `title`, `industry`, `function`, `experience`, `emp_require`, `jobexpiry`, `gender`, `country`, `location`, `zipcode`, `jobtype`, `salary`, `keywords`, `description`, `app_disapprove`) VALUES
(31, 6, 'php jobs', '7', '8', '6Years|9Years', 'job', '1 month', 'Female', '1', '10', 40000, 'Permanent', '5Million|85Thosounds', 'php jobs', 'this is php jobs this is php jobs this is php jobs this is php jobs this is php jobs this is php jobs this is php jobs this is php jobs', 1),
(32, 6, 'java jobs', '38', '22', '1Years|2Years', '2', '1 week', 'Both', '1', '10', 40000, 'Permanent', '4Million|10Thosounds', 'java', 'This is java jobs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `preferred_job`
--

CREATE TABLE IF NOT EXISTS `preferred_job` (
  `pfid` int(10) NOT NULL AUTO_INCREMENT,
  `expected_annual_salary` varchar(255) NOT NULL,
  `preffered_location` varchar(255) NOT NULL,
  `preffered_industry` varchar(255) NOT NULL,
  `preferred_function` varchar(255) NOT NULL,
  `preffered_job_type` varchar(255) NOT NULL,
  `any_other_preference` varchar(255) NOT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`pfid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `preferred_job`
--

INSERT INTO `preferred_job` (`pfid`, `expected_annual_salary`, `preffered_location`, `preffered_industry`, `preferred_function`, `preffered_job_type`, `any_other_preference`, `uid`) VALUES
(23, '4|25', '11', '10', '13', 'Temporary', 'no....', 77),
(24, '|', '', '', '', '', '', 80),
(25, '|', '', '', '', '', '', 81),
(26, '|', '', '', '', '', '', 82),
(27, '|', '', '', '', '', '', 83),
(28, '|', '', '', '', '', '', 84),
(29, '|', '', '', '', '', '', 85),
(30, '|', '', '', '', '', '', 86),
(31, '|', '', '', '', '', '', 87),
(32, '|', '', '', '', '', '', 88),
(33, '|', '', '', '', '', '', 78);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `client` varchar(255) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `duration_from` varchar(255) NOT NULL,
  `duration_to` varchar(255) NOT NULL,
  `project_location` varchar(255) NOT NULL,
  `employment_type` varchar(255) NOT NULL,
  `project_details` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `role_description` varchar(255) NOT NULL,
  `team_size` varchar(255) NOT NULL,
  `skills_used` varchar(255) NOT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`p_id`, `client`, `project_title`, `duration_from`, `duration_to`, `project_location`, `employment_type`, `project_details`, `role`, `role_description`, `team_size`, `skills_used`, `uid`) VALUES
(1, 'kanak', 'project_title', 'February|2011', 'March|2012', 'ahmedabad', 'full_time', 'sass', 'jobs', 'php jobs', '151', 'english', 77);

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE IF NOT EXISTS `resume` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `resume_title` varchar(255) NOT NULL,
  `uploaded_resume` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `function` varchar(255) NOT NULL,
  `key_skills` varchar(255) NOT NULL,
  `notice_period` varchar(255) NOT NULL,
  `uid` int(10) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`rid`, `resume_title`, `uploaded_resume`, `job_type`, `experience`, `industry`, `function`, `key_skills`, `notice_period`, `uid`, `file`) VALUES
(20, 'php jobas', '', 'Temporary', '1_year', '32', '23', 'php', '1 Month', 43, ''),
(60, 'php jobs', 'F66150750Structure2013.pdf', 'Temporary', '15_year', '22', '22', 'php', '1 Week', 77, ''),
(61, '', '', '', '', '', '', '', '', 80, ''),
(62, '', '', '', '', '', '', '', '', 81, ''),
(63, '', '', '', '', '', '', '', '', 82, ''),
(64, '', '', '', '', '', '', '', '', 83, ''),
(65, '', '', '', '', '', '', '', '', 84, ''),
(66, '', '', '', '', '', '', '', '', 85, ''),
(67, '', '', '', '', '', '', '', '', 86, ''),
(68, '', '', '', '', '', '', '', '', 87, ''),
(69, '', '', '', '', '', '', '', '', 88, ''),
(70, '', '', '', '', '', '', '', '', 78, '');

-- --------------------------------------------------------

--
-- Table structure for table `save_jobs`
--

CREATE TABLE IF NOT EXISTS `save_jobs` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `pjid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `save_jobs`
--

INSERT INTO `save_jobs` (`sid`, `pjid`, `uid`) VALUES
(4, 31, 77),
(5, 32, 77);

-- --------------------------------------------------------

--
-- Table structure for table `specilization`
--

CREATE TABLE IF NOT EXISTS `specilization` (
  `specilization_id` int(10) NOT NULL AUTO_INCREMENT,
  `specilization_details` varchar(255) NOT NULL,
  PRIMARY KEY (`specilization_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `specilization`
--

INSERT INTO `specilization` (`specilization_id`, `specilization_details`) VALUES
(2, 'Computers');

-- --------------------------------------------------------

--
-- Table structure for table `university_institude`
--

CREATE TABLE IF NOT EXISTS `university_institude` (
  `university_institude_id` int(10) NOT NULL AUTO_INCREMENT,
  `university_institude_details` varchar(255) NOT NULL,
  PRIMARY KEY (`university_institude_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `university_institude`
--

INSERT INTO `university_institude` (`university_institude_id`, `university_institude_details`) VALUES
(7, 'London University'),
(8, 'Wales University');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `landline` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `physically_challenged` varchar(255) NOT NULL DEFAULT '0',
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `email`, `password`, `full_name`, `mobile`, `landline`, `country`, `location`, `address`, `pincode`, `date_of_birth`, `gender`, `marital_status`, `physically_challenged`, `category`, `description`) VALUES
(77, 'jasminmaru143@gmail.com', '123', 'jasmin', '9409182238', '400012', '11', '10', 'shivranjani,ahmedabad', 362610, '0000-00-00', 'Male', 'Single', 'No', 'OBC', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE IF NOT EXISTS `work_experience` (
  `wid` int(10) NOT NULL AUTO_INCREMENT,
  `current_company` varchar(255) NOT NULL,
  `current_designation` varchar(255) NOT NULL,
  `current_annual_salary` varchar(255) NOT NULL,
  `duration_in_current` varchar(255) NOT NULL,
  `duration_in_current_company_to` varchar(255) NOT NULL,
  `job_profile` varchar(255) NOT NULL,
  `uid` int(255) NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`wid`, `current_company`, `current_designation`, `current_annual_salary`, `duration_in_current`, `duration_in_current_company_to`, `job_profile`, `uid`) VALUES
(45, 'loyalsoftech', 'jr.programer', '12|0', 'January|2012', 'February|2013', 'ok', 77),
(46, '', '', '|', '|', '|', '', 78),
(47, '', '', '|', '|', '|', '', 78),
(48, '', '', '|', '|', '|', '', 79),
(49, '', '', '|', '|', '|', '', 79),
(50, '', '', '|', '|', '|', '', 80),
(51, '', '', '|', '|', '|', '', 81),
(52, '', '', '|', '|', '|', '', 82),
(53, '', '', '|', '|', '|', '', 83),
(54, '', '', '|', '|', '|', '', 84),
(55, '', '', '|', '|', '|', '', 85),
(56, '', '', '|', '|', '|', '', 86),
(57, '', '', '|', '|', '|', '', 87),
(58, '', '', '|', '|', '|', '', 88),
(59, '', '', '|', '|', '|', '', 78);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
