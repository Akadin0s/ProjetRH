-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2024 at 11:22 AM
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
-- Table structure for table `conge`
--

CREATE TABLE `conge` (
  `ID_cong` int(11) NOT NULL,
  `PPR` int(10) NOT NULL,
  `Nbr_jours` int(10) NOT NULL,
  `Date_conge` date NOT NULL,
  `Fin_conge` date NOT NULL,
  `Nbr_jrs_cong` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conge`
--

INSERT INTO `conge` (`ID_cong`, `PPR`, `Nbr_jours`, `Date_conge`, `Fin_conge`, `Nbr_jrs_cong`) VALUES
(3, 651321, 10, '2024-09-11', '2024-09-23', 20);

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

--
-- Dumping data for table `etat_admin`
--

INSERT INTO `etat_admin` (`Date_Recrut`, `Grade`, `Grade_Ar`, `Echelle`, `Date_Echelle`, `Echelon`, `Date_Echelon`, `Indice`, `Position`, `Note`, `Date_Note`, `PPR`) VALUES
('2024-05-07', 'administrateur adjoint mi', 'متصرف مساعد', '10', '2024-06-12', '8', '2024-07-01', 460, ' ', 18, 2024, 651321),
('2024-05-07', 'administrateur adjoint mi', 'متصرف مساعد', '10', '2024-06-12', '8', '2024-07-01', 460, ' ', 18, 2023, 651321),
('2024-05-07', 'administrateur adjoint mi', 'متصرف مساعد', '10', '2024-06-12', '8', '2024-07-01', 460, ' ', 18, 2022, 651321),
('2024-05-07', 'administrateur adjoint mi', 'متصرف مساعد', '10', '2024-06-12', '8', '2024-07-01', 460, ' ', 18, 2021, 651321),
('2024-07-10', 'redacteur 3eme grade', 'محرر من الدرجة التالتة', '9', '2024-07-10', '9', '2024-07-10', 404, 'activite', 15, 2024, 65121),
('2024-07-10', 'redacteur 3eme grade', 'محرر من الدرجة التالتة', '9', '2024-07-10', '9', '2024-07-10', 404, 'activite', 13, 2023, 65121),
('2024-07-10', 'redacteur 3eme grade', 'محرر من الدرجة التالتة', '9', '2024-07-10', '9', '2024-07-10', 404, 'activite', 19, 2022, 65121),
('2024-07-10', 'redacteur 3eme grade', 'محرر من الدرجة التالتة', '9', '2024-07-10', '9', '2024-07-10', 404, 'activite', 20, 2021, 65121),
('2024-09-18', 'administrateur 3eme grade', 'متصرف من الدرجة التالتة', '10', '2024-09-04', '3', '2024-09-18', 326, ' ', 10, 2024, 84131),
('2024-09-18', 'administrateur 3eme grade', 'متصرف من الدرجة التالتة', '10', '2024-09-04', '3', '2024-09-18', 326, ' ', 15, 2023, 84131),
('2024-09-18', 'administrateur 3eme grade', 'متصرف من الدرجة التالتة', '10', '2024-09-04', '3', '2024-09-18', 326, ' ', 16, 2022, 84131),
('2024-09-18', 'administrateur 3eme grade', 'متصرف من الدرجة التالتة', '10', '2024-09-04', '3', '2024-09-18', 326, ' ', 18, 2021, 84131);

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
  `Date_Nai` date NOT NULL,
  `Situation_Fam` varchar(20) NOT NULL,
  `Diplome` varchar(100) NOT NULL,
  `Specialite` varchar(100) NOT NULL,
  `Nbr_jrs_cong` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `etat_civil`
--

INSERT INTO `etat_civil` (`CNIE`, `PPR`, `Prenom`, `Prenom_Ar`, `Nom`, `Nom_Ar`, `Sex`, `Sexe_Ar`, `Lieu_Nai`, `Date_Nai`, `Situation_Fam`, `Diplome`, `Specialite`, `Nbr_jrs_cong`) VALUES
('Z54896', 65121, 'Adnan', 'عدنا', 'Ouadih', 'واضيح ', 'Male', 'ذكر', 'Ain Cheggag', '2024-06-04', 'celibataire', ' ', ' ', 30),
('r315321', 84131, 'qdfqsd', 'عمر', 'qfsdfqsd', 'عمر', 'Male', 'ذكر', 'Aïn Jemaa', '2024-09-21', 'marie', ' ', ' ', 30),
('Z548965', 651321, 'Adnane', 'عدنان', 'Ouadih', 'واضيح ', 'Male', 'ذكر', 'Aït Iaaza', '2003-01-07', 'marie', ' ', ' ', 20);

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

--
-- Dumping data for table `fonction`
--

INSERT INTO `fonction` (`Division`, `Division_Ar`, `Service`, `Service_Ar`, `Bureau`, `Bureau_Ar`, `Date_affect`, `PPR`) VALUES
('Direction des services communaux', 'مديرية المصالح الجماعية', ' ', ' ', 'Bureau des réclamations', 'مكتب الشكايات', '2024-06-04', 651321),
('Division des affaires administratives', 'قسم الشؤون الادارية', 'Service des affaires juridiques de l`informatique et des affaires du conseil', 'مصلحة الشؤون القانونية والمعلوميات وشؤون المجلس', 'Bureau des affaires du conseil', 'مكتب شؤون المجلس', '2024-07-04', 65121),
('Division des affaires financière et économiques', 'قسم الشؤون المالية والاقتصادية', 'Service des marchés et du budget', 'مصلحة الصفقات والميزانية', 'Bureau des marchés', 'مكتب الصفقات', '2024-09-20', 84131);

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
  `Date_Nai` date NOT NULL,
  `PPR` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `info_enfant`
--

INSERT INTO `info_enfant` (`Prenom`, `Prenom_Ar`, `Nom`, `Nom_Ar`, `Sexe`, `Sexe_Ar`, `Lieu_Nai`, `Date_Nai`, `PPR`) VALUES
('Array', 'Array', 'Array', 'Array', 'Array', 'Array', 'Array', '0000-00-00', 651321),
('Array', 'Array', 'Array', 'Array', 'Array', 'Array', 'Array', '0000-00-00', 84131);

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
-- Dumping data for table `info_marie`
--

INSERT INTO `info_marie` (`CNIE`, `Prenom`, `Prenom_Ar`, `Nom`, `Nom_Ar`, `N_enfant`, `PPR_marie`) VALUES
('W8579', 'FatimaZahra', 'فاطمة زهراء', 'Mardi', 'مرضي', 1, 651321),
('W85795', 'FatimaZahra', 'فاطمة زهراء', 'Mardi', 'مرضي', 1, 84131);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conge`
--
ALTER TABLE `conge`
  ADD PRIMARY KEY (`ID_cong`),
  ADD KEY `FORK_cong` (`PPR`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conge`
--
ALTER TABLE `conge`
  MODIFY `ID_cong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `conge`
--
ALTER TABLE `conge`
  ADD CONSTRAINT `FORK_cong` FOREIGN KEY (`PPR`) REFERENCES `etat_civil` (`PPR`);

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
