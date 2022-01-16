-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2022 pada 06.46
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwd_proyek1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(100) NOT NULL,
  `nama_barang` text NOT NULL,
  `Netto_barang` varchar(255) NOT NULL,
  `harga_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `Netto_barang`, `harga_barang`) VALUES
('KDR-03', 'MADU KALIANDRA', '500gr', 'Rp.85.000'),
('KDR-04', 'MADU KALIANDRA', '350gr', 'Rp.70.000'),
('KDR-05', 'MADU KALIANDRA', '320gr', 'Rp.65.000'),
('KDR-06', 'MADU KALIANDRA', '300gr', 'Rp.60.000'),
('KLK-02', 'MADU KELENGKENG', '450gr', 'Rp.90.000'),
('KLK-03', 'MADU KELENGKENG', '500gr', 'Rp.90.000'),
('KLK-04', 'MADU KELENGKENG', '350gr', 'Rp.75.000'),
('KLK-05', 'MADU KELENGKENG', '320gr', 'Rp.70.000'),
('KLK-06', 'MADU KELENGKENG', '300gr', 'Rp.60.000'),
('NT-01', 'MADU NTT ', '450', 'Rp.250.000'),
('NT-02', 'MADU NTT', '1000', 'Rp.350.000'),
('NT-03', 'Madu NTT ', '450g', 'Rp.90.000'),
('NT-04', 'MADU NTT', '350gr', 'Rp.136.000'),
('NT-05', 'MADU NTT', '320gr', 'Rp.125.000'),
('RDB-01', 'RANDU TERNAK ', '500gr', 'Rp.60.000'),
('RDB-02', 'RANDU TERNAK ', '500gr', 'Rp.40.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(100) NOT NULL,
  `nama` text NOT NULL,
  `usia` int(12) NOT NULL,
  `domisili` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sosialMedia` varchar(50) NOT NULL,
  `no_telepon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `usia`, `domisili`, `email`, `sosialMedia`, `no_telepon`) VALUES
(6, 'Agus hadi', 44, 'Bandung', 'agus888@gmail.com', 'agus123', '089731313131'),
(7, 'Adi Riawan', 18, 'Bogor', 'adi565@gmail.com', 'adi335', '08624222'),
(8, 'Mirna', 22, 'yogya', 'mirnaaa13@gmail.com', 'mirna13@gmail.com', '08985323578'),
(9, 'hani', 21, 'yogya', 'haniyah.azzah.ulfah@gmail.com', 'haniyah_azzah', '08985323578'),
(10, 'mikha', 45, 'semarang', 'mikha@gmail.com', 'mikhaaa', '08985323578'),
(11, 'ali', 65, 'semarang', 'ali8787@gmail.com', 'ali8787', '098484747'),
(12, 'hani', 21, 'Jogja', 'haniyahazah@gmail.com', 'ulaaa', '913913'),
(13, 'hani', 21, 'Jogja', 'rubeekitchen@gmail.com', 'ulaaa', '0021-12-12'),
(14, 'dea', 21, 'Jogja', 'deaaa@gmail.com', 'deaaaa', '089797121'),
(15, 'juju', 21, 'riau', 'ula@gmail.com', 'deaaaa', '08761631'),
(17, 'Ita', 24, 'Surabaya', 'itamiftah@gmail.com', 'ita2121', '09863611'),
(19, 'Yayuk', 24, 'Bogor', 'Yayuk08@gmail.com', 'yayukkk', '09863611');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `berat_produk` varchar(100) NOT NULL,
  `harga_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `berat_produk`, `harga_produk`) VALUES
('1', 'MADU NTT', '3000g', 'RP.15.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(50) NOT NULL,
  `jumlah_pesan` int(255) NOT NULL,
  `total_netto` varchar(500) NOT NULL,
  `Total_harga` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `no` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(450) NOT NULL,
  `tanggal_lhr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
