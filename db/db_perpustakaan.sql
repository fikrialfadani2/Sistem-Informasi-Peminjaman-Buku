-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8111
-- Generation Time: Nov 26, 2022 at 05:01 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `kode_buku` char(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `sinopsis` varchar(250) NOT NULL,
  `pengarang` varchar(250) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `kode_buku`, `judul`, `sinopsis`, `pengarang`, `penerbit`, `tahun`) VALUES
(1, '20210966', 'Pemrograman Berbasis Web', 'PHP 7 from Scratch PHP 7 from Scratch adalah buku PHP untuk pemula yang menjelaskan properti dari PHP 7, mulai dari mempersiapkan perlengkapan pemrograman, instalasi PHP 7, menggunakan fungsi-fungsi bawaan PHP 7, serta membangun halaman website seder', 'Idra Styawantoro, Agus Komarudin', 'Airlangga', 2007),
(2, '20210796', 'Perancangan Database Dengan Metode Diagram Hubungan Entitas', 'Perancangan database dilakukan melalui diagram E-R, diagram EER, maupun normalisasi. Selain membahas perancangan database, buku ini juga mengenalkan sekilas cara mengimplementasikan database. Pembahasan dilakukan dengan mengacu pada dua sistem databa', 'Saludin Muis', 'Gramedia', 2018),
(3, '20215678', 'Panduan Cepat Belajar HTML', 'Hypertext Markup Language atau HTML adalah bahasa markup standar yang digunakan untuk membuat halaman website dan aplikasi web. Sejarah HTML diciptakan oleh Tim Berners-Lee, seorang ahli fisika di lembaga penelitian CERN yang berlokasi di Swiss.', 'Prasetyo Adi', 'Gramedia', 2006);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `nama_peminjam` varchar(250) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `id_buku`, `nama_peminjam`, `tgl_peminjaman`, `tgl_pengembalian`) VALUES
(1, 1, 'fara', '2022-11-07', '2022-11-14'),
(2, 3, 'laras', '2022-09-11', '2022-09-20'),
(3, 1, 'jono', '2022-11-01', '2022-11-04'),
(4, 2, 'didin', '2022-01-05', '2022-01-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
