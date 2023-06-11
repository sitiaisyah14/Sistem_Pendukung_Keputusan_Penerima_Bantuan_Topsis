-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 09:26 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topsis21`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `namalengkap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` varchar(5) NOT NULL,
  `nm_alternatif` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nm_alternatif`) VALUES
('al001', 'Ahmad'),
('al002', 'Rio'),
('al003', 'Elsa'),
('al004', 'Fahri'),
('al005', 'Adam'),
('al006', 'Sinta'),
('al007', 'Setyawan'),
('al008', 'Adrian'),
('al009', 'Iman'),
('al010', 'Rossa');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` varchar(5) NOT NULL,
  `nama_kriteria` varchar(45) NOT NULL,
  `bobot` double NOT NULL,
  `poin1` double NOT NULL,
  `poin2` double NOT NULL,
  `poin3` double NOT NULL,
  `poin4` double NOT NULL,
  `poin5` double NOT NULL,
  `sifat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`, `poin1`, `poin2`, `poin3`, `poin4`, `poin5`, `sifat`) VALUES
('kr001', 'Tanggung Jawab', 30, 1, 2, 3, 4, 5, 'benefit'),
('kr002', 'Sikap', 30, 1, 2, 3, 4, 5, 'benefit'),
('kr003', 'Keterampilan', 25, 1, 2, 3, 4, 5, 'benefit'),
('kr004', 'Absensi', 15, 1, 2, 3, 4, 5, 'benefit');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_matrik`
--

CREATE TABLE `nilai_matrik` (
  `id_matrik` int(7) NOT NULL,
  `id_alternatif` varchar(7) NOT NULL,
  `id_kriteria` varchar(7) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_matrik`
--

INSERT INTO `nilai_matrik` (`id_matrik`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(9, 'al002', 'kr001', 5),
(10, 'al002', 'kr002', 3),
(11, 'al002', 'kr003', 1),
(12, 'al002', 'kr004', 3),
(13, 'al003', 'kr001', 3),
(14, 'al003', 'kr002', 4),
(15, 'al003', 'kr003', 5),
(16, 'al003', 'kr004', 1),
(17, 'al004', 'kr001', 2),
(18, 'al004', 'kr002', 1),
(19, 'al004', 'kr003', 2),
(20, 'al004', 'kr004', 4),
(21, 'al005', 'kr001', 3),
(22, 'al005', 'kr002', 5),
(23, 'al005', 'kr003', 2),
(24, 'al005', 'kr004', 4),
(25, 'al006', 'kr001', 4),
(26, 'al006', 'kr002', 2),
(27, 'al006', 'kr003', 3),
(28, 'al006', 'kr004', 5),
(29, 'al007', 'kr001', 1),
(30, 'al007', 'kr002', 3),
(31, 'al007', 'kr003', 5),
(32, 'al007', 'kr004', 2),
(33, 'al008', 'kr001', 3),
(34, 'al008', 'kr002', 4),
(35, 'al008', 'kr003', 1),
(36, 'al008', 'kr004', 2),
(37, 'al009', 'kr001', 3),
(38, 'al009', 'kr002', 3),
(39, 'al009', 'kr003', 2),
(40, 'al009', 'kr004', 1),
(41, 'al010', 'kr001', 4),
(42, 'al010', 'kr002', 3),
(43, 'al010', 'kr003', 3),
(44, 'al010', 'kr004', 5),
(45, 'al001', 'kr001', 2),
(46, 'al001', 'kr002', 4),
(47, 'al001', 'kr003', 4),
(48, 'al001', 'kr004', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_preferensi`
--

CREATE TABLE `nilai_preferensi` (
  `nm_alternatif` varchar(35) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai_matrik`
--
ALTER TABLE `nilai_matrik`
  ADD PRIMARY KEY (`id_matrik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_matrik`
--
ALTER TABLE `nilai_matrik`
  MODIFY `id_matrik` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
