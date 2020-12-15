-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 06 Des 2020 pada 13.45
-- Versi server: 5.7.24
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simulasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nidn` int(15) NOT NULL,
  `nm_dosen` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `info_mk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(11) NOT NULL,
  `kode_mk` varchar(100) NOT NULL,
  `nm_mk` varchar(255) NOT NULL DEFAULT '',
  `sks` int(2) NOT NULL DEFAULT '0',
  `semester` int(2) NOT NULL DEFAULT '0',
  `kt_mk` varchar(100) NOT NULL,
  `info_mk` text,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `kode_mk`, `nm_mk`, `sks`, `semester`, `kt_mk`, `info_mk`, `keterangan`) VALUES
(2, 'INF204', 'Web Lanjut', 6, 5, 'MKMA', 'Web Programming atau Pemrograman Web merupakan istilah yang erat kaitannya dengan internet dan website. Memang benar, karena pemrograman web merupakan suatu proses pembuatan website untuk keperluan internet. Orang banyak mengenal web dengan istilah WWW atau World Wide Web.', 'bersyarat'),
(3, 'INF202', 'Pemrograman WEB', 2, 5, 'MKMA', 'Web Programming atau Pemrograman Web merupakan istilah yang erat kaitannya dengan internet dan website. Memang benar, karena pemrograman web merupakan suatu proses pembuatan website untuk keperluan internet. Orang banyak mengenal web dengan istilah WWW atau World Wide Web.', 'tidak bersyarat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perkuliahan`
--

CREATE TABLE `perkuliahan` (
  `nim` int(11) NOT NULL,
  `kode_mk` varchar(15) NOT NULL,
  `nidn` int(15) NOT NULL,
  `nilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nmr_induk` varchar(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nmr_induk`, `nama`, `kategori`, `email`, `password`) VALUES
(5, '2018071032', 'Fedro Andika Putra', '', 'pedro@gmail.com', '123'),
(6, '2018071027', 'Fahdi Azhannu', 'mahasiswa', 'zanuazhannu@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`),
  ADD UNIQUE KEY `nm_dosen` (`nm_dosen`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nm_mk` (`nm_mk`);

--
-- Indeks untuk tabel `perkuliahan`
--
ALTER TABLE `perkuliahan`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `nidn` (`nidn`),
  ADD UNIQUE KEY `kode_mk` (`kode_mk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
