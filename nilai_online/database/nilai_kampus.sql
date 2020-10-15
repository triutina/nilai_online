-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 06:25 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nilai_kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `jenisk` varchar(25) NOT NULL,
  `nohp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mhs`, `prodi`, `jenisk`, `nohp`) VALUES
('mhs01', 'Tri', 'Sistem Informasi', 'Laki-laki', '087679725'),
('mhs03', 'Trim', 'Sistem Informasi', 'Laki-laki', '08983739'),
('mhs04', 'joko', 'Teknik Informatika', 'Laki-laki', '08975657'),
('mhs05', 'Alinnnnn', 'Teknik Informatika', 'Laki-laki', '0897878786');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `nim` varchar(12) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `sks` int(1) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`nim`, `id_matkul`, `matkul`, `sks`, `nilai`) VALUES
('mhs01', 7, 'Pemrograman', 3, '98'),
('mhs01', 8, 'Pemrograman', 2, '88'),
('mhs01', 15, 'Logika & Algoritma', 2, '78'),
('mhs01', 18, 'Logika & Algoritma', 2, '98');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_matkul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
