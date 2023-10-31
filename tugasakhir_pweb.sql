-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 11:38 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakhir_pweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `Id_film` varchar(5) NOT NULL,
  `Judul` varchar(50) NOT NULL,
  `Durasi` varchar(50) NOT NULL,
  `Harga` int(10) NOT NULL,
  `Theater` int(5) NOT NULL,
  `Jam_tayang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`Id_film`, `Judul`, `Durasi`, `Harga`, `Theater`, `Jam_tayang`) VALUES
('A01', 'FROZEN 2', '1 j 43 m', 35000, 1, '13:00'),
('A02', 'GUNDALA', '2 j 3 m', 35000, 2, '14:00'),
('A03', 'CHARLIES ANGEL', '1 j 58 m', 35000, 3, '15:00'),
('A04', 'JOKER', '2 j 2 m', 40000, 1, '15:30'),
('A05', 'DANUR 3', '1 j 30 m', 40000, 2, '16:30'),
('A06', 'FORD vs FERRARI', '2 j 32 m', 40000, 3, '18:30'),
('A07', 'BUMI MANUSIA', '3 j 1 m', 40000, 1, '18:30'),
('A08', 'ALADDIN', '2 j 8 m', 40000, 2, '18:30'),
('A09', 'SPIDERMAN FAR FROM HOME', '2 j 9 m', 40000, 3, '21:30'),
('A10', 'CAPTAIN MARVEL', '2 j 5 m', 40000, 1, '22:00'),
('A11', 'DUA GARIS BIRU', '1 j 53 m', 40000, 2, '21:00'),
('A12', 'IT CHAPTER 2', '2 j 50 m', 40000, 3, '23:30');

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `Id_pesan` varchar(5) NOT NULL,
  `Kode_film` varchar(5) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jumlah_tiket` int(10) NOT NULL,
  `No_kursi` varchar(10) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `notlp` varchar(15) NOT NULL,
  `Jk` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Nama`, `Alamat`, `notlp`, `Jk`, `username`, `password`) VALUES
('Bayu', 'Semarang', '081424214124', 'laki - laki', 'bepe', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`Id_film`);

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`Id_pesan`),
  ADD KEY `Kode_film` (`Kode_film`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD CONSTRAINT `pemesan_ibfk_1` FOREIGN KEY (`Kode_film`) REFERENCES `film` (`Id_film`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
