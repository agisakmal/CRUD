-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 01:50 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ekskul`
--

CREATE TABLE IF NOT EXISTS `ekskul` (
  `id_ekskul` int(11) NOT NULL,
  `nama_ekskul` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ekskul`
--

INSERT INTO `ekskul` (`id_ekskul`, `nama_ekskul`) VALUES
(1, 'tari'),
(2, 'sepak bola'),
(3, 'bola voli'),
(4, 'bulu tangkis');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` int(11) NOT NULL,
  `nama_guru` varchar(45) DEFAULT NULL,
  `id_ekskul` int(11) DEFAULT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_ekskul` int(11) DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `hari` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_siswa`
--

CREATE TABLE IF NOT EXISTS `jadwal_siswa` (
  `idjadwal_siswa` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `nis` int(11) DEFAULT NULL,
  `id_jadwal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log_admin`
--

CREATE TABLE IF NOT EXISTS `log_admin` (
`idlogs_admin` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `waktu` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log_guru`
--

CREATE TABLE IF NOT EXISTS `log_guru` (
  `idlogs_guru` int(11) NOT NULL,
  `nip` int(11) DEFAULT NULL,
  `waktu` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log_users`
--

CREATE TABLE IF NOT EXISTS `log_users` (
`idlogs_user` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `nis` int(11) NOT NULL,
  `id_ekskul` int(11) DEFAULT NULL,
  `validasi` int(11) DEFAULT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(45) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `tempat_lahir` varchar(15) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `kelas` varchar(5) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `username`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `kelas`, `alamat`, `no_hp`, `semester`) VALUES
(0, '', '', NULL, '', '0000-00-00', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(1, 'faq', 'faq', NULL, 'st', '1998-12-31', '2', 'gtg', '202cb962ac59075b964b07152d234b70', 1),
(99, 'oky', 'oky1', NULL, 'bwi', '1997-10-13', '2c', 'wnsb', '378c20a9fac2ac332f2edb37447c3152', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `fullname`, `username`, `password`) VALUES
(1, 'nama', 'nama', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'jaja', 'jaja', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'aa', 'okye', '378c20a9fac2ac332f2edb37447c3152');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `ekskul`
--
ALTER TABLE `ekskul`
 ADD PRIMARY KEY (`id_ekskul`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`nip`), ADD KEY `fk_guru_ekskul_idx` (`id_ekskul`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
 ADD PRIMARY KEY (`id_jadwal`), ADD KEY `fk_jadwal_id_ekskul_idx` (`id_ekskul`);

--
-- Indexes for table `jadwal_siswa`
--
ALTER TABLE `jadwal_siswa`
 ADD PRIMARY KEY (`idjadwal_siswa`), ADD KEY `fk_jadwal_siswa_1_idx` (`nis`), ADD KEY `fk_jadwal_siswa_2_idx` (`id_jadwal`);

--
-- Indexes for table `log_admin`
--
ALTER TABLE `log_admin`
 ADD PRIMARY KEY (`idlogs_admin`), ADD KEY `fk_id_admin_idx` (`id_admin`);

--
-- Indexes for table `log_guru`
--
ALTER TABLE `log_guru`
 ADD PRIMARY KEY (`idlogs_guru`), ADD KEY `fk_log_guru_1_idx` (`nip`);

--
-- Indexes for table `log_users`
--
ALTER TABLE `log_users`
 ADD PRIMARY KEY (`idlogs_user`), ADD KEY `id_user` (`id_user`), ADD KEY `id_user_2` (`id_user`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
 ADD PRIMARY KEY (`nis`,`semester`), ADD KEY `fk_pendaftaran_2_idx` (`id_ekskul`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`), ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_admin`
--
ALTER TABLE `log_admin`
MODIFY `idlogs_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_users`
--
ALTER TABLE `log_users`
MODIFY `idlogs_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
