-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 06:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rh`
--

-- --------------------------------------------------------

--
-- Table structure for table `etat_admin`
--

CREATE TABLE `etat_admin` (
  `Date_Recrut` date NOT NULL,
  `Grade` varchar(100) NOT NULL,
  `Grade_Ar` varchar(100) NOT NULL,
  `Echelle` varchar(50) NOT NULL,
  `Date_Echelle` date NOT NULL,
  `Echelon` varchar(20) NOT NULL,
  `Date_Echelon` date NOT NULL,
  `Indice` int(4) NOT NULL,
  `Position` varchar(20) NOT NULL,
  `Note` int(10) NOT NULL,
  `Date_Note` int(16) NOT NULL,
  `PPR` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `etat_civil`
--

CREATE TABLE `etat_civil` (
  `CNIE` varchar(10) NOT NULL,
  `PPR` int(10) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Prenom_Ar` varchar(20) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Nom_Ar` varchar(20) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Sexe_Ar` varchar(10) NOT NULL,
  `Lieu_Nai` varchar(30) NOT NULL,
  `Lieu_Nai_Ar` varchar(30) NOT NULL,
  `Date_Nai` date NOT NULL,
  `Situation_Fam` varchar(20) NOT NULL,
  `Diplome` varchar(100) NOT NULL,
  `Specialite` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fonction`
--

CREATE TABLE `fonction` (
  `Division` varchar(100) NOT NULL,
  `Division_Ar` varchar(100) NOT NULL,
  `Service` varchar(100) NOT NULL,
  `Service_Ar` varchar(100) NOT NULL,
  `Bureau` varchar(100) NOT NULL,
  `Bureau_Ar` varchar(100) NOT NULL,
  `Date_affect` varchar(100) NOT NULL,
  `PPR` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info_enfant`
--

CREATE TABLE `info_enfant` (
  `Prenom` varchar(20) NOT NULL,
  `Prenom_Ar` varchar(20) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Nom_Ar` varchar(20) NOT NULL,
  `Sexe` varchar(10) NOT NULL,
  `Sexe_Ar` varchar(10) NOT NULL,
  `Lieu_Nai` varchar(30) NOT NULL,
  `Lieu_Nai_Ar` varchar(30) NOT NULL,
  `Date_Nai` date NOT NULL,
  `PPR` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info_marie`
--

CREATE TABLE `info_marie` (
  `CNIE` varchar(10) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Prenom_Ar` varchar(20) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Nom_Ar` varchar(20) NOT NULL,
  `N_enfant` int(2) NOT NULL,
  `PPR_marie` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etat_admin`
--
ALTER TABLE `etat_admin`
  ADD KEY `FORKA` (`PPR`);

--
-- Indexes for table `etat_civil`
--
ALTER TABLE `etat_civil`
  ADD PRIMARY KEY (`PPR`),
  ADD UNIQUE KEY `cnie` (`CNIE`);

--
-- Indexes for table `fonction`
--
ALTER TABLE `fonction`
  ADD KEY `FORKF` (`PPR`);

--
-- Indexes for table `info_enfant`
--
ALTER TABLE `info_enfant`
  ADD KEY `FORKE` (`PPR`);

--
-- Indexes for table `info_marie`
--
ALTER TABLE `info_marie`
  ADD PRIMARY KEY (`CNIE`),
  ADD KEY `FORK` (`PPR_marie`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `etat_admin`
--
ALTER TABLE `etat_admin`
  ADD CONSTRAINT `FORKA` FOREIGN KEY (`PPR`) REFERENCES `etat_civil` (`PPR`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fonction`
--
ALTER TABLE `fonction`
  ADD CONSTRAINT `FORKF` FOREIGN KEY (`PPR`) REFERENCES `etat_civil` (`PPR`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `info_enfant`
--
ALTER TABLE `info_enfant`
  ADD CONSTRAINT `FORKE` FOREIGN KEY (`PPR`) REFERENCES `etat_civil` (`PPR`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `info_marie`
--
ALTER TABLE `info_marie`
  ADD CONSTRAINT `FORK` FOREIGN KEY (`PPR_marie`) REFERENCES `etat_civil` (`PPR`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
