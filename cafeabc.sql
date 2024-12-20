-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2024 pada 06.42
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafeabc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `idaccount` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`idaccount`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'admin2', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `queue`
--

CREATE TABLE `queue` (
  `idqueue` int(11) NOT NULL,
  `customerqueuing` varchar(255) NOT NULL,
  `iswaiting` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `queue`
--

INSERT INTO `queue` (`idqueue`, `customerqueuing`, `iswaiting`) VALUES
(1, 'Fulan', 1),
(2, 'Abenk', 1),
(3, 'Adudu', 1),
(4, 'Aulia', 1),
(5, 'Kopen', 1),
(6, 'Mako', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tables`
--

CREATE TABLE `tables` (
  `idtables` int(11) NOT NULL,
  `isoccupied` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tables`
--

INSERT INTO `tables` (`idtables`, `isoccupied`) VALUES
(1, 0),
(2, 1),
(3, 0),
(4, 1),
(5, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`idaccount`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `queue`
--
ALTER TABLE `queue`
  ADD PRIMARY KEY (`idqueue`);

--
-- Indeks untuk tabel `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`idtables`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `idaccount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `queue`
--
ALTER TABLE `queue`
  MODIFY `idqueue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tables`
--
ALTER TABLE `tables`
  MODIFY `idtables` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
