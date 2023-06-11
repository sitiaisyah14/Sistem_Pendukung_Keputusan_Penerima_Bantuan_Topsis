-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2020 at 08:43 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `topsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `namalengkap` varchar(30) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `level`, `namalengkap`) VALUES
(1, 'admin', 'ADMIN', 'ADMIN', 'ADMIN'),
(2, 'shifa', 'shifa', 'USER', 'shifa adzkia');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE IF NOT EXISTS `alternatif` (
  `id_alternatif` varchar(5) NOT NULL,
  `nm_alternatif` varchar(35) NOT NULL,
  PRIMARY KEY (`id_alternatif`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nm_alternatif`) VALUES
('al003', 'Mie C'),
('al002', 'Mie B'),
('al001', 'Mie A'),
('al004', 'Mie D');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` varchar(5) NOT NULL,
  `nama_kriteria` varchar(45) NOT NULL,
  `bobot` double NOT NULL,
  `poin1` double NOT NULL,
  `poin2` double NOT NULL,
  `poin3` double NOT NULL,
  `poin4` double NOT NULL,
  `poin5` double NOT NULL,
  `sifat` varchar(15) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`, `poin1`, `poin2`, `poin3`, `poin4`, `poin5`, `sifat`) VALUES
('kr004', 'Populer', 5, 1, 2, 3, 4, 5, 'benefit'),
('kr003', 'Fitur', 3, 1, 2, 3, 4, 5, 'benefit'),
('kr002', 'Kualitas', 5, 1, 2, 3, 4, 5, 'benefit'),
('kr001', 'Harga', 4, 1, 2, 3, 4, 5, 'cost'),
('kr005', 'Purna Jual', 2, 1, 2, 3, 4, 5, 'benefit');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_matrik`
--

CREATE TABLE IF NOT EXISTS `nilai_matrik` (
  `id_matrik` int(7) NOT NULL AUTO_INCREMENT,
  `id_alternatif` varchar(7) NOT NULL,
  `id_kriteria` varchar(7) NOT NULL,
  `nilai` double NOT NULL,
  PRIMARY KEY (`id_matrik`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `nilai_matrik`
--

INSERT INTO `nilai_matrik` (`id_matrik`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(130, 'al004', 'kr005', 3),
(129, 'al004', 'kr004', 5),
(119, 'al002', 'kr004', 3),
(120, 'al002', 'kr005', 2),
(121, 'al003', 'kr001', 2),
(122, 'al003', 'kr002', 3),
(123, 'al003', 'kr003', 2),
(124, 'al003', 'kr004', 4),
(125, 'al003', 'kr005', 4),
(126, 'al004', 'kr001', 3),
(127, 'al004', 'kr002', 4),
(128, 'al004', 'kr003', 5),
(118, 'al002', 'kr003', 3),
(117, 'al002', 'kr002', 4),
(116, 'al002', 'kr001', 4),
(110, 'al001', 'kr005', 5),
(109, 'al001', 'kr004', 4),
(108, 'al001', 'kr003', 2),
(107, 'al001', 'kr002', 2),
(106, 'al001', 'kr001', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_preferensi`
--

CREATE TABLE IF NOT EXISTS `nilai_preferensi` (
  `nm_alternatif` varchar(35) NOT NULL,
  `nilai` double NOT NULL,
  PRIMARY KEY (`nm_alternatif`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
