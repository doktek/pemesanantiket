-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2017 at 12:30 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `kls`
--

CREATE TABLE `kls` (
  `id_kelas` int(5) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kls`
--

INSERT INTO `kls` (`id_kelas`, `kelas`, `harga`) VALUES
(14, 'Reguler', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `psn`
--

CREATE TABLE `psn` (
  `id_pesan` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `identitas` int(30) NOT NULL,
  `telepon` int(30) NOT NULL,
  `alamat` text NOT NULL,
  `id_pesawat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psn`
--

INSERT INTO `psn` (`id_pesan`, `nama`, `identitas`, `telepon`, `alamat`, `id_pesawat`) VALUES
(1, 'SImon', 17387, 8712386, 'kjdkha', 49),
(2, 'SImon', 17387, 8712386, 'kjdkha', 49),
(3, 'SImon', 17387, 8712386, 'kjdkha', 49);

-- --------------------------------------------------------

--
-- Table structure for table `pswt`
--

CREATE TABLE `pswt` (
  `id_pesawat` int(5) NOT NULL,
  `dari` varchar(50) NOT NULL,
  `ke` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id_kelas` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pswt`
--

INSERT INTO `pswt` (`id_pesawat`, `dari`, `ke`, `tanggal`, `id_kelas`) VALUES
(48, 'Tiga', 'Empat', '2017-03-17', 13),
(49, 'Jakarta', 'Bandung', '2017-01-01', 14);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` char(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `level`) VALUES
(1, 'sigaonline', 'sigaonline', 'sigaonline@gmail.com', 'admin'),
(4, 'simon', 'simon', 'simon@gmail.com', 'user'),
(6, 'Ilga', 'Ilga', 'ilga@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kls`
--
ALTER TABLE `kls`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `psn`
--
ALTER TABLE `psn`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `pswt`
--
ALTER TABLE `pswt`
  ADD PRIMARY KEY (`id_pesawat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kls`
--
ALTER TABLE `kls`
  MODIFY `id_kelas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `psn`
--
ALTER TABLE `psn`
  MODIFY `id_pesan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pswt`
--
ALTER TABLE `pswt`
  MODIFY `id_pesawat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
