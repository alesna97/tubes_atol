-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2018 at 11:10 AM
-- Server version: 10.2.16-MariaDB
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
-- Database: `kertasde_10115349_Kepegawaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `password`) VALUES
('admin1', 'admin@email.com', '372c95307bc910fc2107cdbad1ea4cef'),
('alesna', 'alesna97@gmail.com', '6cde3012e93210d5f8f9e87135d5eb71'),
('alesnaa', 'alesna97@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `id_pegawai` varchar(5) NOT NULL,
  `jumlah_cuti` int(11) NOT NULL,
  `kuota_cuti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `id_pegawai`, `jumlah_cuti`, `kuota_cuti`) VALUES
(1, 'P01', 1, 3),
(2, 'P02', 0, 4),
(4, 'P03', 0, 4),
(5, 'P04', 0, 4),
(6, 'P05', 0, 4),
(7, 'P06', 0, 4),
(8, 'P07', 0, 4),
(9, 'P08', 4, 0),
(10, 'P09', 0, 4),
(11, 'P10', 2, 2),
(18, 'P11', 0, 4),
(19, 'P12', 0, 4),
(20, 'P13', 0, 4),
(21, 'P14', 0, 4),
(22, 'P15', 0, 4),
(31, 'P16', 0, 4),
(43, 'P17', 0, 4),
(45, 'P18', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id_gaji` int(11) NOT NULL,
  `id_pegawai` varchar(5) NOT NULL,
  `id_jabatan` varchar(5) NOT NULL,
  `total_gaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id_gaji`, `id_pegawai`, `id_jabatan`, `total_gaji`) VALUES
(0, 'P16', 'J6', 2100000),
(1, 'P01', 'J1', 12175000),
(2, 'P02', 'J4', 4735000),
(3, 'P03', 'J3', 5300000),
(4, 'P04', 'J2', 7100000),
(5, 'P05', 'J5', 3465000),
(6, 'P06', 'J6', 2115000),
(7, 'P07', 'J6', 2335000),
(8, 'P08', 'J6', 2100000),
(9, 'P09', 'J6', 2350000),
(10, 'P10', 'J5', 3275000),
(11, 'P17', 'J6', 2100000),
(22, 'P11', 'J6', 2120000),
(23, 'P12', 'J6', 2100000),
(24, 'P13', 'J6', 2100000),
(25, 'P14', 'J6', 2100000),
(26, 'P15', 'J6', 2100000),
(28, 'P18', 'J4', 4400000);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` varchar(5) NOT NULL,
  `nama_jabatan` varchar(15) NOT NULL,
  `gaji_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `gaji_jabatan`) VALUES
('J1', 'CEO', 12000000),
('J2', 'Director', 7000000),
('J3', 'Store Manager', 5100000),
('J4', 'Asisten Manager', 4300000),
('J5', 'Supervisor', 3200000),
('J6', 'Staff', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `lembur`
--

CREATE TABLE `lembur` (
  `id_lembur` int(11) NOT NULL,
  `id_pegawai` varchar(5) NOT NULL,
  `jumlah_jam_lembur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lembur`
--

INSERT INTO `lembur` (`id_lembur`, `id_pegawai`, `jumlah_jam_lembur`) VALUES
(1, 'P01', 20),
(2, 'P02', 67),
(3, 'P03', 20),
(4, 'P04', 0),
(5, 'P05', 33),
(6, 'P06', 3),
(7, 'P07', 47),
(8, 'P08', 20),
(9, 'P09', 50),
(10, 'P10', 5),
(11, 'P11', 4),
(12, 'P12', 0),
(13, 'P13', 0),
(14, 'P14', 0),
(15, 'P15', 0),
(23, 'P16', 0),
(34, 'P17', 0),
(36, 'P18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(5) NOT NULL,
  `id_jabatan` varchar(5) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_jabatan`, `nama_pegawai`, `tanggal_lahir`, `jenis_kelamin`, `no_hp`, `email`, `alamat`) VALUES
('P01', 'J1', 'Sugiono Sugeng Suryono', '1997-02-12', 'Laki-Laki', '082615374857', 'sugionoss@gmail.com', 'Jl. Dipatiukur No. 1'),
('P02', 'J4', 'Nur Rebeca', '1997-12-12', 'Perempuan', '081637264859', 'nrebeca@gmail.com', 'Jl. Pahlawan No. 111'),
('P03', 'J3', 'Syamsyul', '1997-03-02', 'Laki-Laki', '089735643216', 'syamsyul@gmail.com', 'Jl. Pahlawan No. 2Z'),
('P04', 'J2', 'Fahad Cervantes', '1997-08-09', 'Laki-Laki', '089761428400', 'fadcer007@outlook.com', 'Jl. Kartanegara No. 77A'),
('P05', 'J5', 'Kornelia Wickens', '1997-04-19', 'Perempuan', '081248691436', 'korneliawick@outlook.com', 'Jl. Dago No. 704'),
('P06', 'J6', 'Rebekka Thatcher', '1997-12-09', 'Perempuan', '0812228293447', 'rebthatcher@yahoo.com', 'Jl. Dago No. 46'),
('P07', 'J6', 'Stanislaw Franks', '1997-10-01', 'Laki-Laki', '085721983124', 'stanislaw@yahoo.com', 'Jl. Tubagus Ismail Tengah-Tengah No. X1'),
('P08', 'J6', 'Atticus Dennis', '1997-03-24', 'Laki-Laki', '087436356547', 'atticusdennis@outlook.com', 'Jl. Sekeloa Selatan No. 900'),
('P09', 'J6', 'Fikri Fatoni', '1997-01-15', 'Laki-Laki', '081931390150', 'tbfikrif@gmail.com', 'Bandung'),
('P10', 'J5', 'Vantam Nito', '1999-03-18', 'Laki-Laki', '+628193139015', 'vantamnito@gmail.com', 'Dago'),
('P11', 'J6', 'Vandeck', '1998-06-15', 'Perempuan', '0828193139015', 'tbfikrif@gmail.com', 'Bandung'),
('P12', 'J6', 'Syam Siyah', '1899-03-06', 'Perempuan', '+628193139015', 'tbfikrif@gmail.com', 'Kota Bandung'),
('P13', 'J6', 'Tania Karisma', '1999-12-15', 'Perempuan', '+628193139015', 'tbfikrif@gmail.com', 'Kota Bandung'),
('P14', 'J6', 'Atticus Anis', '1899-12-15', 'Perempuan', '+628193139015', 'tbfikrif@gmail.com', 'Kota Bandung'),
('P15', 'J6', 'Singgalang', '1998-06-05', 'Laki-Laki', '+628193139015', 'tbfikrif@gmail.com', 'Kota Bandung'),
('P16', 'J6', 'Rio Niba', '1999-08-19', 'Laki-Laki', '08193139015', 'tbfikrif@gmail.com', 'Bandung'),
('P17', 'J6', 'Nam Min Ho', '1998-01-18', 'Laki-Laki', '081931390150', 'alesna97@gmail.com', 'pungkur 34'),
('P18', 'J4', 'Siti H', '1989-03-02', 'Laki - Laki', '082129271', 'siti@gmail.com', 'dago asri no 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`),
  ADD UNIQUE KEY `id_pegawai` (`id_pegawai`) USING BTREE;

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id_gaji`),
  ADD KEY `fk_gid_jabatan` (`id_jabatan`),
  ADD KEY `fk_gid_pegawai` (`id_pegawai`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `lembur`
--
ALTER TABLE `lembur`
  ADD PRIMARY KEY (`id_lembur`),
  ADD UNIQUE KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_jabatan` (`id_jabatan`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `lembur`
--
ALTER TABLE `lembur`
  MODIFY `id_lembur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `cuti_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `fk_gid_jabatan` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_gid_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lembur`
--
ALTER TABLE `lembur`
  ADD CONSTRAINT `lembur_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `fk_pid_jabatan` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
