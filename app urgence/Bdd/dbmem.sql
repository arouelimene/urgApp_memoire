-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 10:50 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmem`
--

-- --------------------------------------------------------

--
-- Table structure for table `analyses`
--

CREATE TABLE `analyses` (
  `id` int(11) NOT NULL,
  `Nom_patient` varchar(50) NOT NULL,
  `Analyses` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `analyses`
--

INSERT INTO `analyses` (`id`, `Nom_patient`, `Analyses`) VALUES
(1, 'dgdg', 'TSH');

-- --------------------------------------------------------

--
-- Table structure for table `analysis_results`
--

CREATE TABLE `analysis_results` (
  `id` int(11) NOT NULL,
  `nom_patient` varchar(255) NOT NULL,
  `type_analysis` varchar(255) NOT NULL,
  `norme` varchar(255) NOT NULL,
  `resultat` varchar(255) NOT NULL,
  `commentaire` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `analysis_results`
--

INSERT INTO `analysis_results` (`id`, `nom_patient`, `type_analysis`, `norme`, `resultat`, `commentaire`) VALUES
(1, 'sd', 'sd', 'sd', 'sd', 'sd');

-- --------------------------------------------------------

--
-- Table structure for table `fiche`
--

CREATE TABLE `fiche` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `medicaments` varchar(100) NOT NULL,
  `pathologies` varchar(100) NOT NULL,
  `allergies` varchar(100) NOT NULL,
  `groupe` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fiche`
--

INSERT INTO `fiche` (`id`, `nom`, `medicaments`, `pathologies`, `allergies`, `groupe`) VALUES
(3, '', '', 'dfhdfhfdfdgjf', 'dfhdfhfgj', 'O+'),
(4, '', '', 'dfhdfhfdfdgjf', 'dfhdfhfgj', 'O+'),
(5, '', '', 'fhfh', 'fhfh', 'AB+');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `dtn` date NOT NULL,
  `sexe` enum('h','f') NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `fam` enum('c','m','d') NOT NULL,
  `urgencenom` varchar(30) NOT NULL,
  `urgenceprenom` varchar(30) NOT NULL,
  `urgenceemail` varchar(30) NOT NULL,
  `urgencerr` varchar(30) NOT NULL,
  `spec` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `nom`, `prenom`, `dtn`, `sexe`, `telephone`, `fam`, `urgencenom`, `urgenceprenom`, `urgenceemail`, `urgencerr`, `spec`) VALUES
(1, 'sgsgd', 'sdgsdg', '2023-04-18', 'f', '0653545456', 'c', '', '', '', '', ''),
(2, 'sgsgd', 'sdgsdg', '2023-04-18', 'f', '0653545456', 'c', '', '', '', '', ''),
(3, 'amouna', 'arllll', '2023-05-16', 'f', '0658231111', 'c', '', '', '', '', ''),
(4, 'imene', 'arl', '2023-05-16', 'f', '0611111111', 'c', '', '', '', '', ''),
(5, 'ella', 'arl', '2002-07-17', 'f', '0611111112', 'c', '', '', '', '', ''),
(6, 'elli', 'elli', '2023-05-03', 'f', '0600000000', 'c', '', '', '', '', 'ca'),
(7, 'elle', 'elle', '2023-05-03', 'f', '0111111111', 'c', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `observation`
--

CREATE TABLE `observation` (
  `id` int(50) NOT NULL,
  `date` date DEFAULT NULL,
  `nom` varchar(30) NOT NULL,
  `motif_consultation` varchar(255) DEFAULT NULL,
  `histoire_maladie` text,
  `examen_general` text,
  `examen_appareils` text,
  `examen_analyse` text,
  `orientation_clinique` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `observation`
--

INSERT INTO `observation` (`id`, `date`, `nom`, `motif_consultation`, `histoire_maladie`, `examen_general`, `examen_appareils`, `examen_analyse`, `orientation_clinique`) VALUES
(21, '2023-05-18', 'imene', 'mkhlflflflflf', 'dfhdh', 'dfhdfh', 'dfhdfh', 'dfhdfh', 'dfhdf'),
(22, '2023-05-18', 'imene', 'mlkjdfh', 'dfhdh', 'dfhdfh', 'dfhdfh', 'dfhdfh', 'dfhdf'),
(23, '2023-05-15', 'gfh', 'fj', 'fgj', 'fgj', 'fgj', 'fgj', 'fgj');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('patient','docteur','infirmier','laboratoire') NOT NULL DEFAULT 'patient'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `email`, `username`, `password`, `user_type`) VALUES
(1, 'imeneee@gmail.com', 'imy', 'sfsf', 'patient'),
(2, 'imendf@gmail.com', 'imene', 'imene2323', 'patient'),
(3, 'imene33@gmail.com', 'imene33', 'imene imene', 'patient'),
(4, 'dfhdfhdfhfdh@gmail.vom', 'imenedfh', 'imene2323sdgsdg', 'docteur'),
(5, 'dikra@gmail.com', 'dikra', 'dikraaa', 'patient'),
(6, 'gfgfgf@gmail.com', 'dikra2', 'dikraaa', 'patient'),
(7, 'hkhk@gmail.com', 'khkh', 'dikraaa', 'infirmier'),
(8, 'al@gmail.com', 'alalal', 'alal', 'laboratoire'),
(9, 'al2@gmail.com', 'alalal2', 'al2', 'laboratoire'),
(10, 'p1@gmail.com', 'p1', 'p1', 'patient'),
(11, 'mm@gmail.com', 'dikramm', 'dikraaa', 'docteur'),
(12, 'gg@gmail.com', 'dikraggg', 'dikraaa', 'patient'),
(13, 'gfg@gmail.com', 'dikragffg', 'fff', 'patient'),
(14, 'gffg@gmail.com', 'dikfragffg', 'fffff', 'patient'),
(15, 'fgfg@gmail.com', 'dikrafgfg', 'dikraaadfdg', 'docteur'),
(16, 'imene111@gmail.com', 'imene111', 'imene', 'infirmier'),
(17, 'ella@gmail.com', 'ella', 'ella', 'laboratoire'),
(18, 'elli@gmail.com', 'elli', 'elli', 'docteur'),
(19, 'elle@gmail.com', 'elle', 'elle', 'infirmier');

-- --------------------------------------------------------

--
-- Table structure for table `urgence`
--

CREATE TABLE `urgence` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `room` varchar(20) NOT NULL,
  `bed` varchar(20) NOT NULL,
  `emergency` varchar(300) DEFAULT NULL,
  `optional` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `urgence`
--

INSERT INTO `urgence` (`id`, `name`, `room`, `bed`, `emergency`, `optional`) VALUES
(4, 'dfg', 'dg', 'dg', 'infarctus', 'dg'),
(5, 'fhfhf', 'fhfh', 'fhfh', 'saignement', 'ffh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analyses`
--
ALTER TABLE `analyses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analysis_results`
--
ALTER TABLE `analysis_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fiche`
--
ALTER TABLE `fiche`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `observation`
--
ALTER TABLE `observation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urgence`
--
ALTER TABLE `urgence`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analyses`
--
ALTER TABLE `analyses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `analysis_results`
--
ALTER TABLE `analysis_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fiche`
--
ALTER TABLE `fiche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `observation`
--
ALTER TABLE `observation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `urgence`
--
ALTER TABLE `urgence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
