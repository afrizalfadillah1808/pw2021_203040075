-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2021 pada 05.45
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040075`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `img`, `nrp`, `nama`, `email`, `jurusan`) VALUES
(1, 'agung.png', '203040093', 'Muhamad Agung', 'agungarlan@gmail.com', 'Teknik Informatika'),
(2, 'dama.png', '203070300', 'Dama Vapita', 'dmvapita@gmail.com', 'Kedokteran Gigi'),
(3, 'dika.png', '203040425', 'Dika Putra', 'dikaputra@gmail.com', 'Teknik Informatika'),
(4, 'fathi.png', '203010150', 'Fathi Sei Pahangai Akbar', 'masbiogmail.com', 'Teknik Industri'),
(6, 'fitri.png', '203020075', 'Fitri Wulandari', 'fitriwulan@gmail.com', 'Teknik Pangan'),
(7, 'heni.png', '203020090', 'Heni Sawitri', 'sawitri@gmail.com', 'Teknik Pangan'),
(8, 'ijal.png', '203070075', 'Muhammad Afrizal Fadillah', 'afrizalmuhammad@gmail.com', 'Kedokteran Gigi'),
(9, 'silma.png', '203090089', 'Silma Syifa ', 'silma@gmail.com', 'Kedokteran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(11, 'admin', '$2y$10$45ffhdqr3aLP5XsuSXnWs.lBXXmlEq5.vuYDlDYh1q76QlzO5XmVq'),
(12, 'root', '$2y$10$vQAoohmcKlTl.Pux/532jutzYRo.N0aPnW1PRjDuDFQVZpQtFePmS'),
(13, 'user', '$2y$10$ojBqjag7mtt.2QXyXf6tzO4pGXpkHixMeWTrubTOAz2Rld9MjGchq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
