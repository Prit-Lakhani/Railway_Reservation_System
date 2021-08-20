-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 04:49 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `railway_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE IF NOT EXISTS `admin_table` (
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`user_name`, `password`) VALUES
('admin', '827ccb0eea8a706c4c34a16891f84e7b'),
('Nikhil31', '310599');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE IF NOT EXISTS `routes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `train_id` varchar(8) NOT NULL,
  `stop_number` int(11) NOT NULL,
  `station_id` varchar(8) NOT NULL,
  `station_name` varchar(20) NOT NULL,
  `arrival_time` time NOT NULL,
  `departure_time` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `station_id` (`station_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `train_id`, `stop_number`, `station_id`, `station_name`, `arrival_time`, `departure_time`) VALUES
(1, '12902', 1, 'ADI', 'Ahmedabad', '22:00:00', '22:00:00'),
(2, '12902', 2, 'MAN', 'Maninagar', '22:08:00', '22:10:00'),
(3, '12902', 3, 'ND', 'Nadiad Jn', '22:54:00', '22:56:00'),
(4, '12902', 4, 'ANND', 'Anand Jn', '23:14:00', '23:16:00'),
(5, '12902', 5, 'BRC', 'Vadodara Jn', '00:07:00', '00:12:00'),
(6, '12902', 6, 'BH', 'Bharuch', '01:00:00', '01:02:00'),
(7, '12902', 7, 'ST', 'Surat', '02:05:00', '02:10:00'),
(8, '12902', 8, 'NVS', 'Navsari', '02:31:00', '02:33:00'),
(9, '12902', 9, 'Bl', 'Valsad', '03:02:00', '03:07:00'),
(10, '12902', 10, 'DRD', 'Dahanu Road', '04:02:00', '04:04:00'),
(11, '12902', 11, 'BVI', 'Borivali', '05:06:00', '05:15:00'),
(12, '12902', 12, 'DDR', 'Dadar Western', '05:58:00', '06:03:00'),
(13, '12902', 13, 'MMCT', 'Mumbai Central', '06:25:00', '06:25:00'),
(14, '09069', 1, 'VAPI', 'Vapi', '09:00:00', '09:00:00'),
(15, '09069', 2, 'UVD', 'Udvada', '09:09:00', '09:10:00'),
(16, '09069', 3, 'PAD', 'Pardi', '09:15:00', '09:16:00'),
(17, '09069', 4, 'ATUL', 'Atul', '09:21:00', '09:22:00'),
(18, '09069', 5, 'BL', 'Valsad', '09:33:00', '09:38:00'),
(19, '09069', 6, 'DGI', 'Dungri', '09:47:00', '09:49:00'),
(20, '09069', 7, 'BIM', 'Bilimora Jn', '09:58:00', '10:00:00'),
(21, '09069', 8, 'AML', 'Amalsad', '10:06:00', '10:08:00'),
(22, '09069', 9, 'VDH', 'Vedchha', '10:18:00', '10:19:00'),
(23, '09069', 10, 'NVS', 'Navsari', '10:41:00', '10:44:00'),
(24, '09069', 11, 'MRL', 'Maroli', '10:51:00', '10:53:00'),
(25, '09069', 12, 'SCH', 'Sachin', '10:59:00', '11:00:00'),
(26, '09069', 13, 'BHET', 'Bhestan', '11:06:00', '11:07:00'),
(27, '09069', 14, 'UDN', 'Udhna Jn', '11:22:00', '11:24:00'),
(28, '09069', 15, 'ST', 'Surat', '11:30:00', '11:30:00'),
(29, '12901', 1, 'MMCT', 'Mumbai Central', '22:05:00', '22:05:00'),
(30, '12901', 2, 'DDR', 'Dadar Western', '22:13:00', '22:18:00'),
(31, '12901', 3, 'BVI', 'Borivali', '22:48:00', '22:53:00'),
(32, '12901', 4, 'PLG', 'Palghar', '23:42:00', '23:44:00'),
(33, '12901', 5, 'Bl', 'Valsad', '01:00:00', '01:05:00'),
(34, '12901', 6, 'NVS', 'Navsari', '01:36:00', '01:38:00'),
(35, '12901', 7, 'ST', 'Surat', '02:10:00', '02:15:00'),
(36, '12901', 8, 'BH', 'Bharuch', '03:19:00', '03:21:00'),
(37, '12901', 9, 'BRC', 'Vadodara Jn', '04:21:00', '04:26:00'),
(38, '12901', 10, 'ANND', 'Anand Jn', '05:04:00', '05:03:00'),
(39, '12901', 11, 'ND', 'Nadiad Jn', '05:18:00', '05:22:00'),
(40, '12901', 12, 'MAN', 'Maninagar', '06:15:00', '06:18:00'),
(41, '12901', 13, 'ADI', 'Ahmedabad', '06:35:00', '06:35:00'),
(42, '12921', 1, 'MMCT', 'Mumbai Central', '17:55:00', '17:55:00'),
(43, '12921', 2, 'ADH', 'Andheri', '18:16:00', '18:18:00'),
(44, '12921', 3, 'BVI', 'Borivali', '18:35:00', '18:40:00'),
(45, '12921', 4, 'PLG', 'Palghar', '19:26:00', '19:28:00'),
(46, '12921', 5, 'DRD', 'Dahanu Road', '19:56:00', '19:58:00'),
(47, '12921', 6, 'VAPI', 'Vapi', '20:30:00', '20:32:00'),
(48, '12921', 7, 'BL', 'Valsad', '21:02:00', '21:05:00'),
(49, '12921', 8, 'BIM', 'Bilimora Jn', '21:18:00', '21:20:00'),
(50, '12921', 9, 'AML', 'Amalsad', '21:26:00', '21:28:00'),
(51, '12921', 10, 'NVS', 'Navsari', '21:40:00', '21:42:00'),
(52, '12921', 11, 'MRL', 'Maroli', '21:50:00', '21:52:00'),
(53, '12921', 12, 'SCH', 'Sachin', '22:00:00', '22:02:00'),
(54, '12921', 13, 'UDN', 'Udhna Jn', '22:12:00', '22:15:00'),
(55, '12921', 14, 'ST', 'Surat', '22:35:00', '22:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE IF NOT EXISTS `station` (
  `station_id` varchar(6) NOT NULL,
  `station_name` varchar(30) NOT NULL,
  PRIMARY KEY (`station_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`station_id`, `station_name`) VALUES
('ACL', 'Ancheli [ACL]'),
('ADH', 'Andheri [ADI]'),
('ADI', 'Ahmedabad Jn [ADI]'),
('AKV', 'Ankleshwar [AKV]'),
('AML', 'Amalsad [AML]'),
('ANND', 'Anand Jn [ANND]'),
('ATUL', 'Atul [ATUL]'),
('BDTS', 'Bandra Terminus [BDTS]'),
('BH', 'Bharuch Jn [BH}'),
('BHET', 'Bhestan [BHET]'),
('BIM', 'Bilimora Jn [BIM]'),
('BKN', 'Bikaner Jn [BKN]'),
('BL', 'Valsad [BL]'),
('BLD', 'Bhilad [BLD]'),
('BOR', 'Boisar [BOR]'),
('BRC', 'Vadodara Jn [BRC]'),
('BVI', 'Borivali [BVI]'),
('DDN', 'Dehradun [DDN]'),
('DDR', 'Dadar Wester [DDR]'),
('DGI', 'Dungri [DGI]'),
('DHD', 'Dahod [DHD]'),
('DRD', 'Dahanu Road [DRD]'),
('HW', 'Haridwar [HW]'),
('INDM', 'Indore Jn [INDB]'),
('JAM', 'Jamnagar [JAM]'),
('KLV', 'Kelva Road [KLV]'),
('KSB', 'Kosamba Jn [KSB]'),
('MAN', 'Maninagar [ MAN]'),
('MMCT', 'Mumbai Central [MMCT]'),
('MRL', 'Maroli [MRL]'),
('ND', 'Nadiad Jn [ND]'),
('NVS', 'Navsari [NVS]'),
('OKHA', 'Okha [OKHA]'),
('PAD', 'Pardi [PAD]'),
('PLG', 'Palghar [PLG]'),
('RJT', 'Rajkot [RJT]'),
('SAH', 'Saphale [SAH]'),
('SCH', 'Sachin [SCH]'),
('SJN', 'Sanjan [SJN]'),
('ST', 'Surat [ST]'),
('UBR', 'Umargam Road [UBR]'),
('UDN', 'Udhana Jn [UDN]'),
('UVD', 'Udvada [UVD}'),
('VAPI', 'Vapi [VAPI]'),
('VDH', 'Vedchha [VDH]'),
('VG', 'Viramgam [VG]'),
('VGN', 'Vangaon [VGN]'),
('VR', 'Virar [VR]'),
('VRL', 'Veraval Jn [VRL]');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `pnr` int(8) NOT NULL,
  `book_by` varchar(50) NOT NULL,
  `passenger_name` varchar(255) NOT NULL,
  `train_id` varchar(8) NOT NULL,
  `no_of_seats` int(11) NOT NULL,
  `book_status` varchar(100) NOT NULL,
  `booking_date` date NOT NULL,
  PRIMARY KEY (`pnr`),
  UNIQUE KEY `pnr` (`pnr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`pnr`, `book_by`, `passenger_name`, `train_id`, `no_of_seats`, `book_status`, `booking_date`) VALUES
(441699, 'katariyanikhil@gmail.com', 'Parth Miyani', '12901', 3, 'confirm', '2019-04-10'),
(503447, 'parthmiyani@gmail.com', 'Gaurav More', '12901', 2, 'confirm', '2019-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE IF NOT EXISTS `trains` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `train_id` varchar(8) NOT NULL,
  `train_name` varchar(255) NOT NULL,
  `train_type` varchar(255) NOT NULL,
  `source_stn` varchar(255) NOT NULL,
  `destination_stn` varchar(255) NOT NULL,
  `source_id` varchar(6) NOT NULL,
  `destination_id` varchar(6) NOT NULL,
  PRIMARY KEY (`train_id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`id`, `train_id`, `train_name`, `train_type`, `source_stn`, `destination_stn`, `source_id`, `destination_id`) VALUES
(34, '09069', '09069 - VAPI - SURAT PASSENGER', 'PASSENGER', 'Vapi [VAPI]', 'Surat [ST]', 'VAPI', 'ST'),
(24, '12901', '12901 - GUJARAT MAIL', 'EXPRESS', 'Mumbai Central [MMCT]', 'Ahmedabad Jn [ADI]', 'MMCT', 'ADI'),
(1, '12902', '12902 - GUJARAT MAIL', 'EXPRESS', 'Ahmedabad Jn [ADI]', 'Mumbai Central [MMCT]', 'ADI', 'MMCT'),
(43, '12921', '12921 - FLYING RANEE', 'EXPRESS', 'Mumbai Central [MMCT]', 'Surat [ST]', 'MMCT', 'ST'),
(9, '12922', '12922 - FLYING RANEE', 'EXPRESS', 'Surat [ST]', 'Mumbai Central [MMCT]', 'ST', 'MMCT'),
(29, '12929', '12929 - VALSAD - DAHOD INTERCITY', 'EXPRESS', 'Valsad [BL]', 'Dahod [DHD]', 'BL', 'DHD'),
(21, '12930', '12930 - DAHOD VALSAD INTERCCITY', 'EXPRESS', 'Dahod [DHD]', 'Valsad [BL]', 'DHD', 'BL'),
(33, '12935', '12935 - BANDRA TERMINUS - SURAT INTERCITY', 'EXPRESS', 'Badnra Terminus [BDTS]', 'Surat [ST]', 'BDTS', 'ST'),
(17, '12936', '12936 - SURAT - BANDRA TERMINUS INTERCITY EXPRESS', 'EXPRESS', 'Surat [ST]', 'Bandra Terminus [BDTS]', 'ST', 'BDTS'),
(44, '12961', '12961 - AVANTIKA ST EXPRES', 'SUPERFAST', 'Mumbai Central [MMCT]', 'Indore Jn [INDB]', 'MMCT', 'INDB'),
(4, '12962', '12962 - AVANTIKA SF EXPRESS', 'SUPERFAST', 'Indore Jn [INDB]', 'Mumbai Central [MMCT]', 'INDB', 'MMCT'),
(8, '14707', '14707 - RANAKPUR EXPRESS', 'EXPRESS', 'Bikaner Jn [BKN]', 'Bandra Terminus [BDTS]', 'BKN', 'BDTS'),
(39, '14708', '14708 - RANAKPUR EXPRESS', 'EXPRESS', 'Bandra Terminus [BDTS]', 'Bikaner Jn [BKN]', 'BDTS', 'BKN'),
(25, '19019', '19019 - DEHRADUN EXPRESS', 'EXPRESS', 'Bandra Terminus [BDTS]', 'Dehradun [DDN]', 'BDTS', 'DDN'),
(26, '19033', '19033 - GUJARAT QUEEN', 'EXPRESS', 'Valsad [BL]', 'Ahmedabad Jn [ADI]', 'BL', 'ADI'),
(23, '19034', '19034 - GUJARAT QUEEN', 'EXPRESS', 'Ahmedabad Jn [ADi]', 'Valsad [BL]', 'ADI', 'BL'),
(38, '19115', '19115 - SAYAJI NAGRARI EXPRESS', 'EXPRESS', 'Dadar Western [DDR]', 'Buj [BHUJ]', 'DDR', 'BHUJ'),
(14, '19116', '19116 - SAYAJI NAGARI EXPRESS', 'EXPRESS', 'Bhuj [BHUJ]', 'Dadar Western [DDR]', 'BHUJ', 'DDR'),
(41, '19217', '19217 - SAURASHTRA JANTA EXPRESS', 'EXPRESS', 'Bandra Terminus [BDTS]', 'Jamnagar [JAM]', 'BDTS', 'JAM'),
(2, '19218', '19218 - SAURASHTRA JANTA EXPRESS', 'EXPRESS', 'Jamnagar [JAM]\r\n', 'Bandra Terminus [BDTS]', 'JAM', 'BDTS'),
(5, '19570', '19570 - VERAVAL - MUMBAI CENTRAL', 'EXPRESS', 'Veraval Jn [VRL]', 'Mumbai Central [MMCT]', 'VRL', 'MMCT'),
(46, '22927', '22927 - LOKSHAKTI EXPRESS', 'EXPRESS', 'Bandra Terminus [BDTS]', 'Ahmedabad Jn [ADI]', 'BDTS', 'ADI'),
(3, '22928', '22928 - LOKSHAKTI EXPRESS', 'EXPRESS', 'Ahmedabad Jn [ADI]', 'Bandra Terminus [BDTS]', 'ADI', 'BDTS'),
(37, '22929', '22929 - BHILAD - VADODARA EXPRESS', 'EXPRESS', 'Bhilad [BLD]', 'Vadodara Jn [BRC]', 'BLD', 'BRC'),
(12, '22930', '22930 - VADODARA - BHILAD EXPRESS', 'EXPRESS', 'Vadodara Jn [BRC]', 'Bhilad [BLD]', 'BRC', 'BLD'),
(6, '22946', '22946 - SAURASHTRA MAIL', 'EXPRESS', 'Okha [OKHA]', 'Mumbai Central [MMCT]', 'OKHA', 'MMCT'),
(32, '22953', '22953 - GUJARAT EXPRESS', 'EXPRESS', 'Mumbai Central [MMCT]', 'Ahmedabad Jn [ADI]', 'MMCT', 'ADI'),
(15, '22954', '22954 - GUJARAT SF EXPRESS', 'SUPERFAST', 'Ahmedabad Jn [ADI]', 'Mumbai Central [MMCT]', 'ADI', 'MMCT'),
(42, '22955', '22955 - KUTCH EXPRESS', 'EXPRESS', 'Bandra Terminus [BDTS]', 'Bhuj [BHUJ]', 'BDTS', 'BHUJ'),
(10, '22956', '22956 - KUTCH SF EXPRESS', 'SUPERFAST', 'Bhuj [BHUJ]', 'Bandra Terminus [BDTS]', 'BHUJ', 'BDTS'),
(45, '59037', '59037 - VIRAR - SURAT SHUTTLE', 'PASSENGER', 'Virar [VR]', 'Surat [ST]', 'VR', 'ST'),
(7, '59038', '59038 - SURAT - VIRAR PASSENGER', 'PASSENGER', 'Surat [ST]', 'Virar [VR]', 'ST', 'VR'),
(19, '59048', '59048 - SURAT - VALSAD MEMU', 'PASSENGER', 'Surat [ST]', 'Valsad [BL]', 'ST', 'BL'),
(28, '59049', '59049 - VALSAD - VIRAMGAM PASSENGER', 'PASSENGER', 'Valsad [BL]', 'Viramgam [VG]', 'BL', 'VG'),
(20, '59050', '59050 - VIRAMGAM - VALSAD PASSENGER', 'PASSENGER', 'Viramgam Jn [VG]', 'Valsad [BL]', 'VG', 'BL'),
(40, '59439', '59439 - MUMBAI CENTRAL - AHMEDABAD PASSENGER', 'PASSENGER', 'Mumbai Central [MMCT]', 'Ahmedabad Jn [ADI]', 'MMCT', 'ADI'),
(11, '59440', '59440 - AHMEDABAD - MUMBAI CENTRAL PASSENGER', 'PASSENGER', 'Ahmedabad Jn [ADI]', 'Mumbai Central [MMCT]', 'ADI', 'MMCT'),
(27, '59441', '59441 - MUMBAI CENTRAL - AHMEDABAD PASSENGER', 'PASSENGER', 'Mumbai Central [MMCT]', 'Ahmedabad Jn [ADI]', 'MMCT', 'ADI'),
(22, '59442', '59442 - AHMEDABAD - MUMBAI CENTRAL PASSENGER', 'PASSENGER', 'Ahmedabad Jn [ADI]', 'Mumbai Centeral [MMCT]', 'ADI', 'MMCT'),
(35, '69139', '69139 - BORIVALI - SURAT MEMU', 'PASSENGER', 'Borivali [BVI]', 'Surat [ST]', 'BVI', 'ST'),
(31, '69141', '69141 - SANJAN - SURAT MEMU', 'PASSENGER', 'Sanjan [SJN]', 'Surat [ST]', 'SJN', 'ST'),
(18, '69142', '69142 - SURAT SANJAN MEMU', 'PASSENGER', 'Surat [ST]', 'Sanjan [SJN]', 'ST', 'SJN'),
(30, '69149', '69149 - VIRAR - BHARUCH PASSNEGER', 'PASSENGER', 'Virar [VR]', 'Bharuch Jn [BH]', 'VR', 'BH'),
(16, '69150', '69150 - BHARUCH - VIRAR MEMU', 'PASSENGER', 'Bharuch Jn [BH]', 'Virar [VR]', 'BH', 'VR'),
(36, '69151', '69151 - VALSAD - SURAT MEMU', 'PASSENGER', 'Valsad [BL]', 'Surat [ST]', 'BL', 'ST'),
(13, '69152', '69152 - SURAT - VALSAD MEMU', 'PASSENGER', 'Surat [ST]', 'Valsad [BL]', 'ST', 'BL');

-- --------------------------------------------------------

--
-- Table structure for table `train_status`
--

CREATE TABLE IF NOT EXISTS `train_status` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `train_id` varchar(8) NOT NULL,
  `booking_date` date NOT NULL,
  `booked_seats` int(11) NOT NULL,
  `available_seats` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `train_status`
--

INSERT INTO `train_status` (`id`, `train_id`, `booking_date`, `booked_seats`, `available_seats`) VALUES
(1, '12921', '2019-04-10', 0, 47),
(2, '12901', '2019-04-05', 2, 48),
(3, '12901', '2019-04-10', 3, 47);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `EmailID` varchar(30) NOT NULL,
  `Password` int(11) NOT NULL,
  `Full Name` text NOT NULL,
  `Gender` text NOT NULL,
  `Age` int(11) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  PRIMARY KEY (`EmailID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`EmailID`, `Password`, `Full Name`, `Gender`, `Age`, `Mobile`, `City`, `State`) VALUES
('asif.cstean@gmail.com', 1234, 'Asif', 'male', 22, 1924656681, 'Chittagomg', 'noakhali');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `email_id`, `password`, `fullname`, `gender`, `age`, `mobile`, `city`, `state`) VALUES
(3, 'parthmiyani@gmail.com', 'parth12345', 'Parth Miyani', 'male', 20, '9776654124', 'Surat', 'Gujarat'),
(7, 'katariyanikhil@gmail.com', '12345', 'Nikhil', 'male', 19, '9876541230', 'Navsari', 'Gujarat');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
