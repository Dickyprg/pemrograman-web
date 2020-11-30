-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 30 Nov 2020 pada 16.09
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
-- Database: `belajar-ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `judulberita` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tglposting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto` varchar(50) NOT NULL,
  `isiberita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judulberita`, `author`, `tglposting`, `foto`, `isiberita`) VALUES
(1, 'kerenn', 'dicky', '2020-11-30 16:04:21', 'Misfits-FiendSkull_400x400.jpg', 'keren cuy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE `halaman` (
  `id` int(11) NOT NULL,
  `judulhalaman` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `isihalaman` varchar(255) NOT NULL,
  `tglposting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`id`, `judulhalaman`, `author`, `isihalaman`, `tglposting`) VALUES
(2, 'sipp', 'dicky', 'okee', '2020-11-30 16:02:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `name` varchar(100) NOT NULL COMMENT 'Name',
  `email` varchar(255) NOT NULL COMMENT 'Email Address',
  `contact_no` varchar(50) NOT NULL COMMENT 'Contact No',
  `password` varchar(200) NOT NULL COMMENT 'password',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Created date'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact_no`, `password`, `created_at`) VALUES
(8, 'John', 'john@test.com', '9000000055', '', '2019-01-07 17:00:00'),
(9, 'Merry', 'merry@test.com', '9000000088', '', '2019-01-08 17:00:00'),
(10, 'Keliv', 'kelvin@test.com', '9000550088', '', '2019-01-09 17:00:00'),
(12, 'Mark', 'mark@test.com', '9050550998', '', '2019-01-11 17:00:00'),
(24, 'Dicky', 'dickyprg14@gmail.com', '0928192', '123', '2020-11-30 16:03:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
