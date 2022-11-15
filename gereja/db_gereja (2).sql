-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 09:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gereja`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `idadmin` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`idadmin`, `namalengkap`, `username`, `password`) VALUES
(1, 'Sendi Juliko', 'admin', 'damin0000');

-- --------------------------------------------------------

--
-- Table structure for table `tbberita`
--

CREATE TABLE `tbberita` (
  `idberita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text DEFAULT NULL,
  `file` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbdaftaribadah`
--

CREATE TABLE `tbdaftaribadah` (
  `iddaftaribadah` int(11) NOT NULL,
  `idibadah` int(11) DEFAULT NULL,
  `idjemaat` int(11) DEFAULT NULL,
  `idsesiibadah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbdaftarkelas`
--

CREATE TABLE `tbdaftarkelas` (
  `iddaftarkelas` int(11) NOT NULL,
  `idkelas` int(11) DEFAULT NULL,
  `idjemaat` int(11) DEFAULT NULL,
  `namapasangan` varchar(50) DEFAULT NULL,
  `idsesikelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbibadah`
--

CREATE TABLE `tbibadah` (
  `idibadah` int(11) NOT NULL,
  `namaibadah` varchar(50) DEFAULT NULL,
  `pengulangan` tinyint(1) DEFAULT NULL,
  `kuota` varchar(10) DEFAULT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbjemaat`
--

CREATE TABLE `tbjemaat` (
  `idjemaat` int(11) NOT NULL,
  `tanggalmasuk` date DEFAULT NULL,
  `namajemaat` varchar(50) DEFAULT NULL,
  `tempatlahir` varchar(50) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jk` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nohp` varchar(14) DEFAULT NULL,
  `status` enum('Menikah','Belum Menikah') DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbkelas`
--

CREATE TABLE `tbkelas` (
  `idkelas` int(11) NOT NULL,
  `namakelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbsesiibadah`
--

CREATE TABLE `tbsesiibadah` (
  `idsesiibadah` int(11) NOT NULL,
  `idibadah` int(11) DEFAULT NULL,
  `namasesi` varchar(100) DEFAULT NULL,
  `waktumulai` time DEFAULT NULL,
  `waktuakhir` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbsesikelas`
--

CREATE TABLE `tbsesikelas` (
  `idsesikelas` int(11) NOT NULL,
  `idkelas` int(11) DEFAULT NULL,
  `namasesi` varchar(100) DEFAULT NULL,
  `waktumulai` time DEFAULT NULL,
  `waktuakhir` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `tbberita`
--
ALTER TABLE `tbberita`
  ADD PRIMARY KEY (`idberita`);

--
-- Indexes for table `tbdaftaribadah`
--
ALTER TABLE `tbdaftaribadah`
  ADD PRIMARY KEY (`iddaftaribadah`),
  ADD KEY `idibadah` (`idibadah`),
  ADD KEY `idjemaat` (`idjemaat`),
  ADD KEY `idsesiibadah` (`idsesiibadah`);

--
-- Indexes for table `tbdaftarkelas`
--
ALTER TABLE `tbdaftarkelas`
  ADD PRIMARY KEY (`iddaftarkelas`),
  ADD KEY `idkelas` (`idkelas`),
  ADD KEY `idjemaat` (`idjemaat`),
  ADD KEY `idsesikelas` (`idsesikelas`);

--
-- Indexes for table `tbibadah`
--
ALTER TABLE `tbibadah`
  ADD PRIMARY KEY (`idibadah`);

--
-- Indexes for table `tbjemaat`
--
ALTER TABLE `tbjemaat`
  ADD PRIMARY KEY (`idjemaat`);

--
-- Indexes for table `tbkelas`
--
ALTER TABLE `tbkelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indexes for table `tbsesiibadah`
--
ALTER TABLE `tbsesiibadah`
  ADD PRIMARY KEY (`idsesiibadah`),
  ADD KEY `idibadah` (`idibadah`);

--
-- Indexes for table `tbsesikelas`
--
ALTER TABLE `tbsesikelas`
  ADD PRIMARY KEY (`idsesikelas`),
  ADD KEY `idkelas` (`idkelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbberita`
--
ALTER TABLE `tbberita`
  MODIFY `idberita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbdaftaribadah`
--
ALTER TABLE `tbdaftaribadah`
  MODIFY `iddaftaribadah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbdaftarkelas`
--
ALTER TABLE `tbdaftarkelas`
  MODIFY `iddaftarkelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbibadah`
--
ALTER TABLE `tbibadah`
  MODIFY `idibadah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbjemaat`
--
ALTER TABLE `tbjemaat`
  MODIFY `idjemaat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbkelas`
--
ALTER TABLE `tbkelas`
  MODIFY `idkelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbsesiibadah`
--
ALTER TABLE `tbsesiibadah`
  MODIFY `idsesiibadah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbsesikelas`
--
ALTER TABLE `tbsesikelas`
  MODIFY `idsesikelas` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
