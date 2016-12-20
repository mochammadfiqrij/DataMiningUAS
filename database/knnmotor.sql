-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Des 2016 pada 03.43
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `knnmotor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'fiqri', 'd41d8cd98f00b204e9800998ecf8427e', 'Fiqri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot`
--

CREATE TABLE IF NOT EXISTS `bobot` (
`b_id` int(10) NOT NULL,
  `b_jenis_kelamin` float NOT NULL,
  `b_gaji` float NOT NULL,
  `b_umur` float NOT NULL,
  `b_keahlian` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobot`
--

INSERT INTO `bobot` (`b_id`, `b_jenis_kelamin`, `b_gaji`, `b_umur`, `b_keahlian`) VALUES
(1, 0.75, 0.5, 0.3, 0.4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE IF NOT EXISTS `hasil` (
`id` int(10) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `jenis_kelamin` varchar(32) NOT NULL,
  `gaji` varchar(32) NOT NULL,
  `umur` varchar(32) NOT NULL,
  `keahlian` varchar(32) NOT NULL,
  `jarak` double NOT NULL,
  `kelas` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id`, `nama`, `jenis_kelamin`, `gaji`, `umur`, `keahlian`, `jarak`, `kelas`) VALUES
(2, 'Hadra', '1', '0.5', '1', '1', 0.87179487179487, 'Bebek'),
(3, 'Adryan', '1', '1', '1', '1', 1, 'Sport'),
(4, 'Ferdinand', '1', '1', '0.3', '0.4', 0.76923076923077, 'Matic'),
(5, 'Asadi', '1', '0.5', '1', '0.4', 0.74871794871795, 'Bebek'),
(6, 'Neneng', '0.75', '1', '1', '1', 0.90384615384615, 'Sport');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sample`
--

CREATE TABLE IF NOT EXISTS `sample` (
`id` int(5) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `gaji` varchar(32) NOT NULL,
  `umur` varchar(32) NOT NULL,
  `keahlian` varchar(10) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sample`
--

INSERT INTO `sample` (`id`, `nama`, `jenis_kelamin`, `gaji`, `umur`, `keahlian`, `kelas`) VALUES
(1, 'Hadra', 'Laki-Laki', 'Rendah', 'Dewasa', 'Ya', 'Bebek'),
(2, 'Adryan', 'Laki-Laki', 'Tinggi', 'Dewasa', 'Ya', 'Sport'),
(3, 'Ferdinand', 'Laki-Laki', 'Tinggi', 'Muda', 'Tidak', 'Matic'),
(4, 'Asadi', 'Laki-Laki', 'Rendah', 'Dewasa', 'Tidak', 'Bebek'),
(5, 'Neneng', 'Perempuan', 'Tinggi', 'Dewasa', 'Ya', 'Sport');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uji`
--

CREATE TABLE IF NOT EXISTS `uji` (
`id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `gaji` varchar(32) NOT NULL,
  `umur` varchar(12) NOT NULL,
  `keahlian` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `uji`
--

INSERT INTO `uji` (`id`, `nama`, `jenis_kelamin`, `gaji`, `umur`, `keahlian`) VALUES
(10, 'Asada', 'Laki-Laki', 'Tinggi', 'Dewasa', 'Ya'),
(11, 'Rina', 'Perempuan', 'Rendah', 'Muda', 'Tidak'),
(12, 'Sion', 'Laki-Laki', 'Tinggi', 'Muda', 'Ya'),
(13, 'Grut', 'Perempuan', 'Tinggi', 'Muda', 'Ya'),
(14, 'Fiqri', 'Laki-Laki', 'Rendah', 'Dewasa', 'Ya'),
(15, 'Aan', 'Laki-Laki', 'Rendah', 'Dewasa', 'Ya'),
(16, 'Sifa', 'Perempuan', 'Rendah', 'Muda', 'Tidak'),
(17, 'Aldi', 'Laki-Laki', 'Rendah', 'Muda', 'Tidak'),
(18, 'Aldi', 'Laki-Laki', 'Rendah', 'Muda', 'Tidak'),
(19, 'Aldi', 'Laki-Laki', 'Rendah', 'Muda', 'Tidak'),
(20, 'Aldi', 'Laki-Laki', 'Rendah', 'Muda', 'Tidak'),
(21, 'Aldi', 'Laki-Laki', 'Rendah', 'Muda', 'Tidak'),
(22, 'Aldi', 'Laki-Laki', 'Rendah', 'Muda', 'Tidak'),
(23, 'Aldi', 'Laki-Laki', 'Rendah', 'Muda', 'Tidak'),
(24, 'Anang', 'Laki-Laki', 'Tinggi', 'Dewasa', 'Ya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
 ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uji`
--
ALTER TABLE `uji`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `uji`
--
ALTER TABLE `uji`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
