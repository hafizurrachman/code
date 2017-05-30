-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Mei 2017 pada 08.13
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis6b`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `obyek`
--

CREATE TABLE `obyek` (
  `obyek_id` int(11) NOT NULL,
  `obyek_nama` varchar(50) NOT NULL,
  `obyek_latitude` float(10,6) NOT NULL,
  `obyek_longtitude` float(10,6) NOT NULL,
  `obyek_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obyek`
--

INSERT INTO `obyek` (`obyek_id`, `obyek_nama`, `obyek_latitude`, `obyek_longtitude`, `obyek_type`) VALUES
(1, 'SD Dharma Yuda', 0.465858, 101.356102, 'school'),
(2, 'SD IT Pekanbaru', 0.466115, 101.353378, 'school');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(30) NOT NULL,
  `pengguna_alamat` varchar(100) NOT NULL,
  `pengguna_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_alamat`, `pengguna_password`) VALUES
(1, 'admin', 'Jl. Bakti Husada Perum. Permata Bukit Raya Blok No. 7', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obyek`
--
ALTER TABLE `obyek`
  ADD PRIMARY KEY (`obyek_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obyek`
--
ALTER TABLE `obyek`
  MODIFY `obyek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
