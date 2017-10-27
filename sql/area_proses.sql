-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2017 at 05:35 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `id3125941_skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_proses`
--

CREATE TABLE IF NOT EXISTS `area_proses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area_proses` varchar(50) NOT NULL,
  `sg1` decimal(3,2) NOT NULL,
  `sg2` decimal(3,2) NOT NULL,
  `sg3` decimal(3,2) NOT NULL,
  `avg` decimal(3,2) NOT NULL,
  `fuzzy` decimal(12,11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `area_proses`
--

INSERT INTO `area_proses` (`id`, `area_proses`, `sg1`, `sg2`, `sg3`, `avg`, `fuzzy`) VALUES
(11, 'Service Delivery', '3.71', '3.48', '3.30', '3.50', '3.17592479416'),
(12, 'Incident Resolution and Prevention', '3.83', '3.65', '3.70', '3.73', '3.25162115496'),
(13, 'Service System Development', '3.93', '3.29', '3.26', '3.49', '3.20555333998'),
(14, 'Service System Transition', '3.00', '3.43', '0.00', '3.22', '3.00000000000'),
(15, 'Strategic Service Management', '3.48', '3.86', '0.00', '3.67', '3.11534883721'),
(16, 'Configuration Management', '3.14', '3.57', '0.00', '3.36', '3.04126721763'),
(17, 'Measurement and Analysis', '2.93', '3.18', '0.00', '3.06', '2.88804175797'),
(18, 'Process and Product Quality Assurance', '3.00', '3.33', '0.00', '3.17', '3.00000000000'),
(19, 'Decision Analysis and Resolution', '3.10', '0.00', '0.00', '3.10', '3.03043478261'),
(20, 'Causal Analysis and Resolution', '3.24', '3.29', '0.00', '3.27', '3.06588235294'),
(21, 'Organizational Process Definition', '3.32', '0.00', '0.00', '3.32', '3.08360360360'),
(22, 'Organizational Process Focus', '3.03', '3.00', '3.64', '3.22', '3.00971291866'),
(23, 'Organizational Training', '3.60', '3.53', '0.00', '3.57', '3.15944032740'),
(24, 'Organizational Process Performance', '3.34', '0.00', '0.00', '3.34', '3.08781456954'),
(25, 'Organizational Performance Management', '2.95', '3.21', '3.07', '3.08', '2.91705607477'),
(26, 'Requirement Management', '3.63', '0.00', '0.00', '3.63', '3.20338825791'),
(27, 'Supplier Agreement Management', '3.65', '3.70', '0.00', '3.68', '3.21750866766'),
(28, 'Work Monitoring and Control', '3.63', '3.27', '0.00', '3.45', '3.14768545994'),
(29, 'Work Planning', '3.15', '3.33', '3.29', '3.26', '3.04387755102'),
(30, 'Capacity and Availability Management', '3.00', '2.94', '0.00', '2.97', '3.00000000000'),
(31, 'Integrated Work Management', '3.03', '0.00', '0.00', '3.03', '3.00971291866'),
(32, 'Risk Management', '3.56', '3.30', '3.50', '3.45', '3.13240310078'),
(33, 'Service Continuity', '3.27', '3.50', '3.19', '3.32', '3.07270462633'),
(34, 'Quantitative Work Management', '3.29', '3.50', '0.00', '3.40', '3.07713124274');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
