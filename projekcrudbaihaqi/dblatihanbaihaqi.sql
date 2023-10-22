-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 05:22 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblatihanbaihaqi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblguru`
--

CREATE TABLE `tblguru` (
  `idguru` int(4) NOT NULL,
  `namaguru` varchar(255) NOT NULL,
  `jeniskelamin` varchar(15) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tgllahir` date NOT NULL,
  `lulusan` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblguru`
--

INSERT INTO `tblguru` (`idguru`, `namaguru`, `jeniskelamin`, `tempatlahir`, `tgllahir`, `lulusan`, `alamat`, `nohp`) VALUES
(4, 'ahmad baihaqi', 'laki-laki', 'cirebon', '2006-11-20', '2025', 'desa beringin', '08311254');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblguru`
--
ALTER TABLE `tblguru`
  ADD PRIMARY KEY (`idguru`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblguru`
--
ALTER TABLE `tblguru`
  MODIFY `idguru` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
