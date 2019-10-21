-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2019 pada 16.10
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoting_bem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon`
--

CREATE TABLE `calon` (
  `id` int(11) NOT NULL,
  `nama_calon` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `calon`
--

INSERT INTO `calon` (`id`, `nama_calon`, `foto`, `fakultas`, `visi`, `misi`) VALUES
(1, 'Bujel', '', 'Fakultas Ilmu Ngento', 'Membebaskan mahasiswa ngentot', 'menjalankan program sex bebas di kampus'),
(2, 'penyok', '', 'Fakultas Hukum Coli', 'Menciptakan komunitas coli', 'Mewajibkan setiap mahasiswa coli 3 kali sehari'),
(3, 'Fatma Kurnia', 'fatma.jpg', 'Fakultas Ekonomi', 'Menjadikan Mahasiswa yang Mengedepankan Budaya Berbasis Teknologi Informasi', 'Menjadikan UNISS Sebagai Universitas Unggulan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`, `password`, `status`) VALUES
('123', 'gtg', '$2y$10$17JtyyvyzwB8yvwvqTIHxefEa5dCH0LIShef96wjVFlMQeOuUadUS', '1'),
('20117001', 'Abdurrahman Wibisono', '$2y$10$I1V2pBX8q5AxcpxxEzP7meXnVqmMQATtptlwf/thIQKlncKXNvyvy', '1'),
('20117002', 'wtf', '$2y$10$lz5PlIeE2YJjpUAXPiLwK.ffxldMzrqRDos6ywaSfYN97PM5b/n92', '1'),
('20117003', 'ndre', '$2y$10$zuyEZ/Fg1DIqsUFdhpdAb.dSN8Q6pwR.mIINBgbE2SI30jLazw0Lm', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon`
--
ALTER TABLE `calon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
