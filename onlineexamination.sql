-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 09:20 AM
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
-- Database: `onlineexamination`
--

-- --------------------------------------------------------

--
-- Table structure for table `addedquestion`
--

CREATE TABLE `addedquestion` (
  `id` int(100) NOT NULL,
  `Q.1` varchar(120) NOT NULL,
  `Q.2` varchar(120) NOT NULL,
  `Q.3` varchar(120) NOT NULL,
  `Q.4` varchar(120) NOT NULL,
  `Q.5` varchar(120) NOT NULL,
  `Q.6` varchar(120) NOT NULL,
  `Q.7` varchar(120) NOT NULL,
  `Q.8` varchar(120) NOT NULL,
  `Q.9` varchar(120) NOT NULL,
  `Q.10` varchar(120) NOT NULL,
  `Q.11` varchar(100) NOT NULL,
  `Q.12` varchar(100) NOT NULL,
  `Q.13` varchar(100) NOT NULL,
  `Q.14` varchar(100) NOT NULL,
  `Q.15` varchar(100) NOT NULL,
  `Q.16` varchar(100) NOT NULL,
  `Q.17` varchar(100) NOT NULL,
  `Q.18` varchar(100) NOT NULL,
  `Q.19` varchar(100) NOT NULL,
  `Q.20` varchar(100) NOT NULL,
  `Q.21` varchar(100) NOT NULL,
  `Q.22` varchar(100) NOT NULL,
  `Q.23` varchar(100) NOT NULL,
  `Q.24` varchar(100) NOT NULL,
  `Q.25` varchar(100) NOT NULL,
  `Q.26` varchar(100) NOT NULL,
  `Q.27` varchar(100) NOT NULL,
  `Q.28` varchar(100) NOT NULL,
  `Q.29` varchar(100) NOT NULL,
  `Q.30` varchar(100) NOT NULL,
  `Q.31` varchar(100) NOT NULL,
  `Q.32` varchar(100) NOT NULL,
  `Q.33` varchar(100) NOT NULL,
  `Q.34` varchar(100) NOT NULL,
  `Q.35` varchar(100) NOT NULL,
  `Q.36` varchar(100) NOT NULL,
  `Q.37` varchar(100) NOT NULL,
  `Q.38` varchar(100) NOT NULL,
  `Q.39` varchar(100) NOT NULL,
  `Q.40` varchar(100) NOT NULL,
  `Q.41` varchar(100) NOT NULL,
  `Q.42` varchar(100) NOT NULL,
  `Q.43` varchar(100) NOT NULL,
  `Q.44` varchar(100) NOT NULL,
  `Q.45` varchar(100) NOT NULL,
  `Q.46` varchar(100) NOT NULL,
  `Q.47` varchar(100) NOT NULL,
  `Q.48` varchar(100) NOT NULL,
  `Q.49` varchar(100) NOT NULL,
  `Q.50` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addedquestion`
--

INSERT INTO `addedquestion` (`id`, `Q.1`, `Q.2`, `Q.3`, `Q.4`, `Q.5`, `Q.6`, `Q.7`, `Q.8`, `Q.9`, `Q.10`, `Q.11`, `Q.12`, `Q.13`, `Q.14`, `Q.15`, `Q.16`, `Q.17`, `Q.18`, `Q.19`, `Q.20`, `Q.21`, `Q.22`, `Q.23`, `Q.24`, `Q.25`, `Q.26`, `Q.27`, `Q.28`, `Q.29`, `Q.30`, `Q.31`, `Q.32`, `Q.33`, `Q.34`, `Q.35`, `Q.36`, `Q.37`, `Q.38`, `Q.39`, `Q.40`, `Q.41`, `Q.42`, `Q.43`, `Q.44`, `Q.45`, `Q.46`, `Q.47`, `Q.48`, `Q.49`, `Q.50`) VALUES
(2, 'What is the atomic number of Carbon?', 'Which of the following is a noble gas?', 'What is the chemical formula for water?', 'Which of the following elements is the most reactive alkali metal?', 'What is the pH of pure water?', 'Which of the following is a covalent compound?', ' What is the common name of sodium bicarbonate?', ' In the periodic table, elements are arranged according to their?', ' Which of the following is an example of an endothermic reaction?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'qWhat is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?', 'What is the most abundant gas in Earths atmosphere?');

-- --------------------------------------------------------

--
-- Table structure for table `correctopt`
--

CREATE TABLE `correctopt` (
  `Q.1` varchar(100) NOT NULL,
  `Q.2` varchar(100) NOT NULL,
  `Q.3` varchar(100) NOT NULL,
  `Q.4` varchar(100) NOT NULL,
  `Q.5` varchar(100) NOT NULL,
  `Q.6` varchar(100) NOT NULL,
  `Q.7` varchar(100) NOT NULL,
  `Q.8` varchar(100) NOT NULL,
  `Q.9` varchar(100) NOT NULL,
  `Q.10` varchar(100) NOT NULL,
  `Q.11` varchar(100) NOT NULL,
  `Q.12` varchar(100) NOT NULL,
  `Q.13` varchar(100) NOT NULL,
  `Q.14` varchar(100) NOT NULL,
  `Q.15` varchar(100) NOT NULL,
  `Q.16` varchar(100) NOT NULL,
  `Q.17` varchar(100) NOT NULL,
  `Q.18` varchar(100) NOT NULL,
  `Q.19` varchar(100) NOT NULL,
  `Q.20` varchar(100) NOT NULL,
  `Q.21` varchar(100) NOT NULL,
  `Q.22` varchar(100) NOT NULL,
  `Q.23` varchar(100) NOT NULL,
  `Q.24` varchar(100) NOT NULL,
  `Q.25` varchar(100) NOT NULL,
  `Q.26` varchar(100) NOT NULL,
  `Q.27` varchar(100) NOT NULL,
  `Q.28` varchar(100) NOT NULL,
  `Q.29` varchar(100) NOT NULL,
  `Q.30` varchar(100) NOT NULL,
  `Q.31` varchar(100) NOT NULL,
  `Q.32` varchar(100) NOT NULL,
  `Q.33` varchar(100) NOT NULL,
  `Q.34` varchar(100) NOT NULL,
  `Q.35` varchar(100) NOT NULL,
  `Q.36` varchar(100) NOT NULL,
  `Q.37` varchar(100) NOT NULL,
  `Q.38` varchar(100) NOT NULL,
  `Q.39` varchar(100) NOT NULL,
  `Q.40` varchar(100) NOT NULL,
  `Q.41` varchar(100) NOT NULL,
  `Q.42` varchar(100) NOT NULL,
  `Q.43` varchar(100) NOT NULL,
  `Q.44` varchar(100) NOT NULL,
  `Q.45` varchar(100) NOT NULL,
  `Q.46` varchar(100) NOT NULL,
  `Q.47` varchar(100) NOT NULL,
  `Q.48` varchar(100) NOT NULL,
  `Q.49` varchar(100) NOT NULL,
  `Q.50` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `correctopt`
--

INSERT INTO `correctopt` (`Q.1`, `Q.2`, `Q.3`, `Q.4`, `Q.5`, `Q.6`, `Q.7`, `Q.8`, `Q.9`, `Q.10`, `Q.11`, `Q.12`, `Q.13`, `Q.14`, `Q.15`, `Q.16`, `Q.17`, `Q.18`, `Q.19`, `Q.20`, `Q.21`, `Q.22`, `Q.23`, `Q.24`, `Q.25`, `Q.26`, `Q.27`, `Q.28`, `Q.29`, `Q.30`, `Q.31`, `Q.32`, `Q.33`, `Q.34`, `Q.35`, `Q.36`, `Q.37`, `Q.38`, `Q.39`, `Q.40`, `Q.41`, `Q.42`, `Q.43`, `Q.44`, `Q.45`, `Q.46`, `Q.47`, `Q.48`, `Q.49`, `Q.50`) VALUES
('6', 'Helium', 'H₂O', 'Cesium (Cs)', '7', 'H₂O', 'Baking soda', 'Atomic number', 'Melting of ice', 'Nitrogen', '6', 'H₂O', 'Cesium (Cs)', '7', 'H₂O', 'Baking soda', 'Atomic number', 'Melting of ice', 'Nitrogen', 'Melting of ice', '6', 'H₂O', 'Cesium (Cs)', '7', 'H₂O', 'Baking soda', 'Atomic number', 'Melting of ice', 'Atomic number', 'Nitrogen', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20');

-- --------------------------------------------------------

--
-- Table structure for table `examattend`
--

CREATE TABLE `examattend` (
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `examattend`
--

INSERT INTO `examattend` (`Date`, `Time`) VALUES
('2024-10-01', '09:18:39'),
('2024-10-01', '09:38:07'),
('2024-10-01', '09:38:12'),
('2024-10-01', '09:38:16'),
('2024-10-01', '09:38:17'),
('2024-10-01', '09:38:29'),
('2024-10-01', '09:39:01'),
('2024-10-01', '09:42:56'),
('2024-10-01', '10:22:13'),
('2024-10-01', '10:24:10'),
('2024-10-01', '10:54:53'),
('2024-10-01', '13:02:26'),
('2024-10-01', '13:44:45'),
('2024-10-01', '14:00:53'),
('2024-10-01', '14:38:23'),
('2024-10-01', '14:39:23'),
('2024-10-01', '14:41:12'),
('2024-10-01', '14:41:24'),
('2024-10-01', '14:41:36'),
('2024-10-01', '14:42:01'),
('2024-10-01', '14:42:05'),
('2024-10-01', '14:43:51'),
('2024-10-01', '14:49:55'),
('2024-10-01', '16:37:03'),
('2024-10-01', '18:16:59'),
('2024-10-01', '20:08:35'),
('2024-10-02', '09:33:23'),
('2024-10-02', '10:31:35'),
('2024-10-02', '11:28:34'),
('2024-10-02', '19:34:47'),
('2024-10-02', '19:53:36'),
('2024-10-02', '20:02:15'),
('2024-10-02', '20:03:00'),
('2024-10-02', '20:04:42'),
('2024-10-03', '14:15:09'),
('2024-10-04', '18:47:55'),
('2024-10-04', '19:54:41'),
('2024-10-04', '20:31:58'),
('2024-10-04', '20:38:13'),
('2024-10-06', '13:55:50');

-- --------------------------------------------------------

--
-- Table structure for table `option1`
--

CREATE TABLE `option1` (
  `id` int(100) NOT NULL,
  `OP1` varchar(100) NOT NULL,
  `OP2` varchar(100) NOT NULL,
  `OP3` varchar(100) NOT NULL,
  `OP4` varchar(100) NOT NULL,
  `OP5` varchar(100) NOT NULL,
  `OP6` varchar(100) NOT NULL,
  `OP7` varchar(100) NOT NULL,
  `OP8` varchar(100) NOT NULL,
  `OP9` varchar(100) NOT NULL,
  `OP10` varchar(100) NOT NULL,
  `OP11` varchar(100) NOT NULL,
  `OP12` varchar(100) NOT NULL,
  `OP13` varchar(100) NOT NULL,
  `OP14` varchar(100) NOT NULL,
  `OP15` varchar(100) NOT NULL,
  `OP16` varchar(100) NOT NULL,
  `OP17` varchar(100) NOT NULL,
  `OP18` varchar(100) NOT NULL,
  `OP19` varchar(100) NOT NULL,
  `OP20` varchar(100) NOT NULL,
  `OP21` varchar(100) NOT NULL,
  `OP22` varchar(100) NOT NULL,
  `OP23` varchar(100) NOT NULL,
  `OP24` varchar(100) NOT NULL,
  `OP25` varchar(100) NOT NULL,
  `OP26` varchar(100) NOT NULL,
  `OP27` varchar(100) NOT NULL,
  `OP28` varchar(100) NOT NULL,
  `OP29` varchar(100) NOT NULL,
  `OP30` varchar(100) NOT NULL,
  `OP31` varchar(100) NOT NULL,
  `OP32` varchar(100) NOT NULL,
  `OP33` varchar(100) NOT NULL,
  `OP34` varchar(100) NOT NULL,
  `OP35` varchar(100) NOT NULL,
  `OP36` varchar(100) NOT NULL,
  `OP37` varchar(100) NOT NULL,
  `OP38` varchar(100) NOT NULL,
  `OP39` varchar(100) NOT NULL,
  `OP40` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `option1`
--

INSERT INTO `option1` (`id`, `OP1`, `OP2`, `OP3`, `OP4`, `OP5`, `OP6`, `OP7`, `OP8`, `OP9`, `OP10`, `OP11`, `OP12`, `OP13`, `OP14`, `OP15`, `OP16`, `OP17`, `OP18`, `OP19`, `OP20`, `OP21`, `OP22`, `OP23`, `OP24`, `OP25`, `OP26`, `OP27`, `OP28`, `OP29`, `OP30`, `OP31`, `OP32`, `OP33`, `OP34`, `OP35`, `OP36`, `OP37`, `OP38`, `OP39`, `OP40`) VALUES
(1, '6', 'Helium', 'jhg', 'jmhgf', 'Oxygen', 'Nitrogen', 'Helium', 'Hydrogen', 'H₂O', 'CO₂', 'NaCl', 'HCl', 'Sodium (Na)', 'Potassium (K)', 'Lithium (Li)', 'Cesium (Cs)', '5', '7', '9', '12', 'NaCl', 'H₂O', 'KBr', 'Mgo', 'Table salt', 'Baking soda', 'Vinegar ', 'Bleach', 'Atomic mass', 'Atomic number', 'Neutron number', 'Isotopic weight', 'Combustion of wood', 'Melting of ice', 'Condensation of steam', 'Freezing of water', 'Oxygen', 'Carbon dioxide', 'Nitrogen', 'Argon');

-- --------------------------------------------------------

--
-- Table structure for table `option2`
--

CREATE TABLE `option2` (
  `id` int(200) NOT NULL,
  `OP1` varchar(100) NOT NULL,
  `OP2` varchar(100) NOT NULL,
  `OP3` varchar(100) NOT NULL,
  `OP4` varchar(100) NOT NULL,
  `OP5` varchar(100) NOT NULL,
  `OP6` varchar(100) NOT NULL,
  `OP7` varchar(100) NOT NULL,
  `OP8` varchar(100) NOT NULL,
  `OP9` varchar(100) NOT NULL,
  `OP10` varchar(100) NOT NULL,
  `OP11` varchar(100) NOT NULL,
  `OP12` varchar(100) NOT NULL,
  `OP13` varchar(100) NOT NULL,
  `OP14` varchar(100) NOT NULL,
  `OP15` varchar(100) NOT NULL,
  `OP16` varchar(100) NOT NULL,
  `OP17` varchar(100) NOT NULL,
  `OP18` varchar(100) NOT NULL,
  `OP19` varchar(100) NOT NULL,
  `OP20` varchar(100) NOT NULL,
  `OP21` varchar(100) NOT NULL,
  `OP22` varchar(100) NOT NULL,
  `OP23` varchar(100) NOT NULL,
  `OP24` varchar(100) NOT NULL,
  `OP25` varchar(100) NOT NULL,
  `OP26` varchar(100) NOT NULL,
  `OP27` varchar(100) NOT NULL,
  `OP28` varchar(100) NOT NULL,
  `OP29` varchar(100) NOT NULL,
  `OP30` varchar(100) NOT NULL,
  `OP31` varchar(100) NOT NULL,
  `OP32` varchar(100) NOT NULL,
  `OP33` varchar(100) NOT NULL,
  `OP34` varchar(100) NOT NULL,
  `OP35` varchar(100) NOT NULL,
  `OP36` varchar(100) NOT NULL,
  `OP37` varchar(100) NOT NULL,
  `OP38` varchar(100) NOT NULL,
  `OP39` varchar(100) NOT NULL,
  `OP40` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `option2`
--

INSERT INTO `option2` (`id`, `OP1`, `OP2`, `OP3`, `OP4`, `OP5`, `OP6`, `OP7`, `OP8`, `OP9`, `OP10`, `OP11`, `OP12`, `OP13`, `OP14`, `OP15`, `OP16`, `OP17`, `OP18`, `OP19`, `OP20`, `OP21`, `OP22`, `OP23`, `OP24`, `OP25`, `OP26`, `OP27`, `OP28`, `OP29`, `OP30`, `OP31`, `OP32`, `OP33`, `OP34`, `OP35`, `OP36`, `OP37`, `OP38`, `OP39`, `OP40`) VALUES
(1, 'wert', 'eertf', 'rtf', 'ewrtf', 'ergtf', 'esrg', 'rgtf', 'ergtf', 'erg', 'edsrgf', 'ergf', 'erg', 'esrg', 'esrg', 'erg', 'aegf', 'serg', 'earg', 'earg', 'sergf', 'seargf', 'rg', 'aerg', 'aerg', 'tgh', 'stgh', 'stg', 'sg', 'arg', 'rtg', 'trg', 'sertg', 'sdrg', 'darg', 'sdrtg', 'astrg', 'etdrg', 'atrdg', 'adfg', 'adfg');

-- --------------------------------------------------------

--
-- Table structure for table `option3`
--

CREATE TABLE `option3` (
  `id` int(100) NOT NULL,
  `OP1` varchar(100) NOT NULL,
  `OP2` varchar(100) NOT NULL,
  `OP3` varchar(100) NOT NULL,
  `OP4` varchar(100) NOT NULL,
  `OP5` varchar(100) NOT NULL,
  `OP6` varchar(100) NOT NULL,
  `OP7` varchar(100) NOT NULL,
  `OP8` varchar(100) NOT NULL,
  `OP9` varchar(100) NOT NULL,
  `OP10` varchar(100) NOT NULL,
  `OP11` varchar(100) NOT NULL,
  `OP12` varchar(100) NOT NULL,
  `OP13` varchar(100) NOT NULL,
  `OP14` varchar(100) NOT NULL,
  `OP15` varchar(100) NOT NULL,
  `OP16` varchar(100) NOT NULL,
  `OP17` varchar(100) NOT NULL,
  `OP18` varchar(100) NOT NULL,
  `OP19` char(100) NOT NULL,
  `OP20` varchar(100) NOT NULL,
  `OP21` varchar(100) NOT NULL,
  `OP22` varchar(100) NOT NULL,
  `OP23` varchar(100) NOT NULL,
  `OP24` varchar(100) NOT NULL,
  `OP25` varchar(100) NOT NULL,
  `OP26` varchar(100) NOT NULL,
  `OP27` varchar(100) NOT NULL,
  `OP28` varchar(100) NOT NULL,
  `OP29` varchar(100) NOT NULL,
  `OP30` varchar(100) NOT NULL,
  `OP31` varchar(100) NOT NULL,
  `OP32` varchar(100) NOT NULL,
  `OP33` varchar(100) NOT NULL,
  `OP34` varchar(100) NOT NULL,
  `OP35` varchar(100) NOT NULL,
  `OP36` varchar(100) NOT NULL,
  `OP37` varchar(100) NOT NULL,
  `OP38` varchar(100) NOT NULL,
  `OP39` varchar(100) NOT NULL,
  `OP40` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `option3`
--

INSERT INTO `option3` (`id`, `OP1`, `OP2`, `OP3`, `OP4`, `OP5`, `OP6`, `OP7`, `OP8`, `OP9`, `OP10`, `OP11`, `OP12`, `OP13`, `OP14`, `OP15`, `OP16`, `OP17`, `OP18`, `OP19`, `OP20`, `OP21`, `OP22`, `OP23`, `OP24`, `OP25`, `OP26`, `OP27`, `OP28`, `OP29`, `OP30`, `OP31`, `OP32`, `OP33`, `OP34`, `OP35`, `OP36`, `OP37`, `OP38`, `OP39`, `OP40`) VALUES
(1, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '5', 'g', 'f', 'fs', 'e', 'sf', 'df', 'erf', 'g', 'er', 'we', 'wef', 'sf', 'sf', 'srf', 'drf', 'sref', 'esegf', 'ederg', 'sdrgf', 'drgf', 'drg', 'derg', 'drgfdg', 'dg', 'dfgdfg', 'dg');

-- --------------------------------------------------------

--
-- Table structure for table `option4`
--

CREATE TABLE `option4` (
  `id` int(100) NOT NULL,
  `OP1` varchar(100) NOT NULL,
  `OP2` varchar(100) NOT NULL,
  `OP3` varchar(100) NOT NULL,
  `OP4` varchar(100) NOT NULL,
  `OP5` varchar(100) NOT NULL,
  `OP6` varchar(100) NOT NULL,
  `OP7` varchar(100) NOT NULL,
  `OP8` varchar(100) NOT NULL,
  `OP9` varchar(100) NOT NULL,
  `OP10` varchar(100) NOT NULL,
  `OP11` varchar(100) NOT NULL,
  `OP12` varchar(100) NOT NULL,
  `OP13` varchar(100) NOT NULL,
  `OP14` varchar(100) NOT NULL,
  `OP15` varchar(100) NOT NULL,
  `OP16` varchar(100) NOT NULL,
  `OP17` varchar(100) NOT NULL,
  `OP18` varchar(100) NOT NULL,
  `OP19` varchar(100) NOT NULL,
  `OP20` varchar(100) NOT NULL,
  `OP21` varchar(100) NOT NULL,
  `OP22` varchar(100) NOT NULL,
  `OP23` varchar(100) NOT NULL,
  `OP24` varchar(100) NOT NULL,
  `OP25` varchar(100) NOT NULL,
  `OP26` varchar(100) NOT NULL,
  `OP27` varchar(100) NOT NULL,
  `OP28` varchar(100) NOT NULL,
  `OP29` varchar(100) NOT NULL,
  `OP30` varchar(100) NOT NULL,
  `OP31` varchar(100) NOT NULL,
  `OP32` varchar(100) NOT NULL,
  `OP33` varchar(100) NOT NULL,
  `OP34` varchar(100) NOT NULL,
  `OP35` varchar(100) NOT NULL,
  `OP36` varchar(100) NOT NULL,
  `OP37` varchar(100) NOT NULL,
  `OP38` varchar(100) NOT NULL,
  `OP39` varchar(100) NOT NULL,
  `OP40` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `option4`
--

INSERT INTO `option4` (`id`, `OP1`, `OP2`, `OP3`, `OP4`, `OP5`, `OP6`, `OP7`, `OP8`, `OP9`, `OP10`, `OP11`, `OP12`, `OP13`, `OP14`, `OP15`, `OP16`, `OP17`, `OP18`, `OP19`, `OP20`, `OP21`, `OP22`, `OP23`, `OP24`, `OP25`, `OP26`, `OP27`, `OP28`, `OP29`, `OP30`, `OP31`, `OP32`, `OP33`, `OP34`, `OP35`, `OP36`, `OP37`, `OP38`, `OP39`, `OP40`) VALUES
(1, 't', 'y', '6', '7', '7tr', 'yg', 'luy', 'hg', 'rew', 'trt', 'gtr4', 'htd45', 'rte6', 'ytd6', 'kuyg', 'g', 'hyfd5', 'htd5', 'htshd5', 'uyt', 'ytdf6', 'jytdr5', 'fd6', 'jydf6', 'ytdf6', 'jytdf56', 'fg6', 'fjfd6', 'htrdr5', 'jfjgf6', 'f68', 'jydf6', 'ghf55', 'jf76', 'uygf7', 'jytd65', 'kuygf7', ',jhv8', ',jh8', 'gf6');

-- --------------------------------------------------------

--
-- Table structure for table `option5`
--

CREATE TABLE `option5` (
  `id` int(100) NOT NULL,
  `OP1` varchar(100) NOT NULL,
  `OP2` varchar(100) NOT NULL,
  `OP3` varchar(100) NOT NULL,
  `OP4` varchar(100) NOT NULL,
  `OP5` varchar(100) NOT NULL,
  `OP6` varchar(100) NOT NULL,
  `OP7` varchar(100) NOT NULL,
  `OP8` varchar(100) NOT NULL,
  `OP9` varchar(100) NOT NULL,
  `OP10` varchar(100) NOT NULL,
  `OP11` varchar(100) NOT NULL,
  `OP12` varchar(100) NOT NULL,
  `OP13` varchar(100) NOT NULL,
  `OP14` varchar(100) NOT NULL,
  `OP15` varchar(100) NOT NULL,
  `OP16` varchar(100) NOT NULL,
  `OP17` varchar(100) NOT NULL,
  `OP18` varchar(100) NOT NULL,
  `OP19` varchar(100) NOT NULL,
  `OP20` varchar(100) NOT NULL,
  `OP21` varchar(100) NOT NULL,
  `OP22` varchar(100) NOT NULL,
  `OP23` varchar(100) NOT NULL,
  `OP24` varchar(100) NOT NULL,
  `OP25` varchar(100) NOT NULL,
  `OP26` varchar(100) NOT NULL,
  `OP27` varchar(100) NOT NULL,
  `OP28` varchar(100) NOT NULL,
  `OP29` varchar(100) NOT NULL,
  `OP30` varchar(100) NOT NULL,
  `OP31` varchar(100) NOT NULL,
  `OP32` varchar(100) NOT NULL,
  `OP33` varchar(100) NOT NULL,
  `OP34` varchar(100) NOT NULL,
  `OP35` varchar(100) NOT NULL,
  `OP36` varchar(100) NOT NULL,
  `OP37` varchar(100) NOT NULL,
  `OP38` varchar(100) NOT NULL,
  `OP39` varchar(100) NOT NULL,
  `OP40` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `option5`
--

INSERT INTO `option5` (`id`, `OP1`, `OP2`, `OP3`, `OP4`, `OP5`, `OP6`, `OP7`, `OP8`, `OP9`, `OP10`, `OP11`, `OP12`, `OP13`, `OP14`, `OP15`, `OP16`, `OP17`, `OP18`, `OP19`, `OP20`, `OP21`, `OP22`, `OP23`, `OP24`, `OP25`, `OP26`, `OP27`, `OP28`, `OP29`, `OP30`, `OP31`, `OP32`, `OP33`, `OP34`, `OP35`, `OP36`, `OP37`, `OP38`, `OP39`, `OP40`) VALUES
(1, 'tr', 'jmhg', 'jhg', 'jmhgf', 'jytd', 'hg', 'ugf', 'ngf', 'htrd', 'gff', 'jytfd', 'jutgf', 'hfc', 'jygf1', 'hfd', 'y43d', 'ig6', 'gd', 'yjtf', 'jfd4', 'nfgd', 'ujgf', 'gf', '765', 'gf5', 'hg4', 'jfd', 'gf5', 'hfd4', 'jgf4', 'nyfdf4', 'jnhytg4', 'gf5', 'mjhgg5', 'mhg5', 'mjhg5', 'jgf5', '.kjh5', 'i,hg56', 'mhg5');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `Email` int(11) NOT NULL,
  `Password` int(11) NOT NULL,
  `erwe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`Email`, `Password`, `erwe`) VALUES
(0, 784784, 0);

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `Regno` char(200) NOT NULL,
  `Name` char(50) NOT NULL,
  `Class` char(20) NOT NULL,
  `Department` char(50) NOT NULL,
  `Email` char(50) NOT NULL,
  `Mobile No` bigint(50) NOT NULL,
  `Dob` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`Regno`, `Name`, `Class`, `Department`, `Email`, `Mobile No`, `Dob`) VALUES
('31123U18051', 'SHARIF RAYAN', 'II Year', 'B.Sc Computer Science', 'sharifrayan959@gmail.com', 8838612520, '05-07-2005'),
('31123U18051', 'SHARIF RAYAN', 'II Year', 'B.Sc Computer Science', 'sharifrayan959@gmail.com', 8838612520, '05-07-2005');

-- --------------------------------------------------------

--
-- Table structure for table `studentscore`
--

CREATE TABLE `studentscore` (
  `id` int(100) NOT NULL,
  `Regno` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Class` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Total Score` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentscore`
--

INSERT INTO `studentscore` (`id`, `Regno`, `Name`, `Class`, `Department`, `Date`, `Time`, `Total Score`) VALUES
(1, '31123U18051', 'SHARIF RAYAN', 'II Year', 'B.Sc Computer Science', '2024-10-07', '14:29:06', '9'),
(2, '31123U18051', 'SHARIF RAYAN', 'II Year', 'B.Sc Computer Science', '2024-10-07', '14:29:06', '8');

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE `submit` (
  `id` int(200) NOT NULL,
  `Regno` char(100) NOT NULL,
  `1.Q` varchar(50) NOT NULL,
  `2.Q` varchar(50) NOT NULL,
  `3.Q` varchar(50) NOT NULL,
  `4.Q` varchar(220) NOT NULL,
  `5.Q` varchar(100) NOT NULL,
  `6.Q` varchar(100) NOT NULL,
  `7.Q` varchar(100) NOT NULL,
  `8.Q` varchar(100) NOT NULL,
  `9.Q` varchar(100) NOT NULL,
  `10.Q` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `11.Q` varchar(100) NOT NULL,
  `12.Q` varchar(100) NOT NULL,
  `13.Q` varchar(100) NOT NULL,
  `14.Q` varchar(100) NOT NULL,
  `15.Q` varchar(100) NOT NULL,
  `16.Q` varchar(100) NOT NULL,
  `17.Q` varchar(100) NOT NULL,
  `18.Q` varchar(100) NOT NULL,
  `19.Q` varchar(100) NOT NULL,
  `20.Q` varchar(100) NOT NULL,
  `21.Q` varchar(100) NOT NULL,
  `22.Q` varchar(100) NOT NULL,
  `23.Q` varchar(100) NOT NULL,
  `24.Q` varchar(100) NOT NULL,
  `25.Q` varchar(100) NOT NULL,
  `26.Q` varchar(100) NOT NULL,
  `27.Q` varchar(100) NOT NULL,
  `28.Q` varchar(100) NOT NULL,
  `29.Q` varchar(100) NOT NULL,
  `30.Q` varchar(100) NOT NULL,
  `31.Q` varchar(100) NOT NULL,
  `32.Q` varchar(100) NOT NULL,
  `33.Q` varchar(100) NOT NULL,
  `34.Q` varchar(100) NOT NULL,
  `35.Q` varchar(100) NOT NULL,
  `36.Q` varchar(100) NOT NULL,
  `37.Q` varchar(100) NOT NULL,
  `38.Q` varchar(100) NOT NULL,
  `39.Q` varchar(100) NOT NULL,
  `40.Q` varchar(100) NOT NULL,
  `41.Q` varchar(100) NOT NULL,
  `42.Q` varchar(100) NOT NULL,
  `43.Q` varchar(100) NOT NULL,
  `44.Q` varchar(100) NOT NULL,
  `45.Q` varchar(100) NOT NULL,
  `46.Q` varchar(100) NOT NULL,
  `47.Q` varchar(100) NOT NULL,
  `48.Q` varchar(100) NOT NULL,
  `49.Q` varchar(100) NOT NULL,
  `50.Q` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submit`
--

INSERT INTO `submit` (`id`, `Regno`, `1.Q`, `2.Q`, `3.Q`, `4.Q`, `5.Q`, `6.Q`, `7.Q`, `8.Q`, `9.Q`, `10.Q`, `Date`, `Time`, `11.Q`, `12.Q`, `13.Q`, `14.Q`, `15.Q`, `16.Q`, `17.Q`, `18.Q`, `19.Q`, `20.Q`, `21.Q`, `22.Q`, `23.Q`, `24.Q`, `25.Q`, `26.Q`, `27.Q`, `28.Q`, `29.Q`, `30.Q`, `31.Q`, `32.Q`, `33.Q`, `34.Q`, `35.Q`, `36.Q`, `37.Q`, `38.Q`, `39.Q`, `40.Q`, `41.Q`, `42.Q`, `43.Q`, `44.Q`, `45.Q`, `46.Q`, `47.Q`, `48.Q`, `49.Q`, `50.Q`) VALUES
(1, '31123U18051', '6', 'Helium', 'H₂O', '7', 'Cesium (Cs)', 'NaCl', 'Baking soda', 'Atomic number', 'Melting of ice', 'Nitrogen', '2024-10-07', '14:29:06', 'eertf', 'ergtf', 'erg', 'esrg', 'earg', 'aerg', 'tgh', 'arg', 'sdrg', 'etdrg', '2', '2', '2', '2', 'sf', 'g', 'srf', 'ederg', 'sdrgf', 'drgfdg', '6', 'luy', 'gtr4', 'kuyg', 'htshd5', 'ytdf6', 'ytdf6', 'jfjgf6', 'jytd65', 'kuygf7', 'jhg', 'ngf', 'jytfd', 'y43d', 'ig6', 'nfgd', 'jfd', 'jgf4', 'mjhg5', '.kjh5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addedquestion`
--
ALTER TABLE `addedquestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `option1`
--
ALTER TABLE `option1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `option2`
--
ALTER TABLE `option2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `option3`
--
ALTER TABLE `option3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `option4`
--
ALTER TABLE `option4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `option5`
--
ALTER TABLE `option5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentscore`
--
ALTER TABLE `studentscore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit`
--
ALTER TABLE `submit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addedquestion`
--
ALTER TABLE `addedquestion`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `option1`
--
ALTER TABLE `option1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `option2`
--
ALTER TABLE `option2`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `option3`
--
ALTER TABLE `option3`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `option4`
--
ALTER TABLE `option4`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `option5`
--
ALTER TABLE `option5`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentscore`
--
ALTER TABLE `studentscore`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `submit`
--
ALTER TABLE `submit`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
