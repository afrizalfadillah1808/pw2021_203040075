-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2021 pada 06.11
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
-- Database: `tubes_pw_203040075`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `harga` varchar(250) NOT NULL,
  `sinopsis` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `img`, `judul`, `pengarang`, `penerbit`, `tahun`, `harga`, `sinopsis`) VALUES
(5, 'bintang.jpeg', 'Bintang', 'Tere Liye', 'Gramedia Pustaka Utama', 2017, 'Rp. 85.000,00', ''),
(6, 'milea.jpg', 'Milea : Suara  dari Dilan', 'Pidi Baiq', 'Pastel Books', 2016, 'Rp. 58.000,00', ''),
(7, 'matahari.jpeg', 'Matahari', 'Tere Liye', 'Gramedia Pustaka Utama', 2016, 'Rp. 85.000,00', ''),
(8, 'shadow.jpeg', 'SHADOW', 'Faradita', 'FALCON PUBLISHING', 2020, 'Rp. 75.000,00', ''),
(9, 'senjapagi.jpeg', 'Senja & Pagi', 'Alffy Rev & Linka Angelia', 'Loveable x Bhumi Anoma', 2019, 'Rp. 94.000,00', ''),
(10, 'sejarah.jpeg', 'Sejarah Dunia Yang Disembunyikan', 'Jonathan Black', 'Alvabet', 2015, 'Rp. 130.000,00', ''),
(14, 'bulan.jpeg', 'Bulan', 'Tere Liye', 'Gramedia Pustaka Utama', 2016, 'Rp. 85.000,00', ''),
(16, 'php.jpeg', 'PHP untuk Programmer Pemula', 'Jubilee Enterprise', 'Elex Media Komputindo', 2019, 'Rp. 75.000,00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`) VALUES
(10, 'admin', '$2y$10$YXewfcGLBgjNOuXR59AWSOf525isETQxkTMimyHvskssOO8Y5zhui', 'admin'),
(11, 'user', '$2y$10$ByYHxtBfpb0FzLmPv5n2u.m8l3qw7vmKE/OWKtr/VdGsNaYF4sXGq', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
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
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
