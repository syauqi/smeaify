-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2020 pada 08.51
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smeaify`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `kode_guru` int(25) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `kode_mapel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`kode_guru`, `nama_guru`, `kode_mapel`) VALUES
(1, 'Ditta Audia Rozza', 'TI001'),
(2, 'Kiki Supendi', 'TI002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(25) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL,
  `nama_ruangan` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nama_mapel`, `nama_ruangan`, `hari`, `jam`) VALUES
(2, 'PBO', 'LAB-RPL', 'Selasa', '08:00:00'),
(3, 'PWPB', 'LAB-RPL', 'Rabu', '00:00:00'),
(4, 'PPL', 'LAB-TIK', 'Rabu', '08:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontrak`
--

CREATE TABLE `kontrak` (
  `id` int(50) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `kode_mapel` varchar(255) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontrak`
--

INSERT INTO `kontrak` (`id`, `nis`, `nama_siswa`, `kode_mapel`, `nama_mapel`) VALUES
(19, '18197201', 'Adi_Juliana', 'TI-001', 'PWPB'),
(20, '18197234', 'syauqykhairan_', 'TI-001', 'PWPB'),
(21, '18197204', 'Angga_Nurdiansyah', 'TI-001', 'PWPB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`, `level`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `kode_mapel` varchar(25) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL,
  `jam_mapel` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`kode_mapel`, `nama_mapel`, `jam_mapel`) VALUES
('TI-001', 'PWPB', '08:00:00'),
('TI-002', 'PBO', '00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(25) NOT NULL,
  `nis` int(25) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `kode_mapel` varchar(25) NOT NULL,
  `nilai` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nis`, `nama_siswa`, `kode_mapel`, `nilai`) VALUES
(11, 18197234, 'SS', '1', 'A'),
(12, 18197234, 'syauqykhairan_', 'TI-004', 'B'),
(13, 18197204, 'Angga_Nurdiansyah', 'TI-001', 'D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` varchar(25) NOT NULL,
  `nama_ruangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `nama_ruangan`) VALUES
('RPL-01', 'LAB - RPL'),
('RPL-02', 'LAB-TIK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `username`, `password`, `email`) VALUES
(18197201, 'Adi_Juliana', 'adi12345', 'adi@gmail.com'),
(18197202, 'Ahmad_Rivaldi', '123rival123', 'rivaldi@gmail.com'),
(18197203, 'Ahmad_Rizal', '123rizal123', 'rizal@gmail.com'),
(18197204, 'Angga_Nurdiansyah', '123angga123', 'angga@gmail.com'),
(18197205, 'Askal_Drajat', '123askal123', 'askal@gmail.com'),
(18197206, 'Bragi_Syahputra', '123bragi123', 'bragi@gmail.com'),
(18197207, 'Cepi_Cepiana', '123cepi123', 'cepi@gmail.com'),
(18197208, 'Daffa_fadhil', '123daffa123', 'daffa@gmail.com'),
(18197209, 'Dea_Wartin', '123dea123', 'dea@gmail.com'),
(18197210, 'Deandy_Syahrial', '123deandy123', 'deandy@gmail.com'),
(18197211, 'Dendi_Juliano', '123dendi123', 'dendi@gmail.com'),
(18197212, 'Diki_Ramdan', '123diki123', 'diki@gmail.com'),
(18197213, 'Erika_P', '123erika123', 'erika@gmail.com'),
(18197214, 'Hari_Iskandar', '123hari123', 'hari@gmail.com'),
(18197215, 'Heri_Bambang', '123heri123', 'heri@gmail.com'),
(18197216, 'Garly_Nugraha', '123garly123', 'garly@gmail.com'),
(18197217, 'Ilma_Nurlisnawati', '123ilma123', 'ilma@gmail.com'),
(18197218, 'Lukman_Maulana', '123lukman123', 'lukman@gmail.com'),
(18197219, 'Luthfi_Ramdhan', '123luthfi123', 'luthfiganteng23@gmail.com'),
(18197220, 'M_Aldy_Fahrizal', '123aldy123', 'aldy@gmail.com'),
(18197221, 'Mia_Rosmiati', '123mia123', 'mia@gmail.com'),
(18197223, 'Moh_Lutfi', '123lutfi123', 'lutfi@gmail.com'),
(18197224, 'M_Azril_Fitrayana', '123azril123', 'azril@gmail.com'),
(18197225, 'M_Zibran_Naufal', '123zibran123', 'zibran@gmail.com'),
(18197226, 'Nandra_Hestianti', '123nandra123', 'nandra@gmail.com'),
(18197227, 'Nendar_Suhendar', '123nendar123', 'nendar@gmail.com'),
(18197228, 'Nira_A', '123nira123', 'nira@gmail.com'),
(18197229, 'Nurul_Anisa', '123nisa123', 'anisa@gmail.com'),
(18197230, 'Nurul_Aripin', '123arip123', 'aripin@gmail.com'),
(18197231, 'Rio_Bahari', '123rio123', 'rio@gmail.com'),
(18197232, 'Supryanto', '123anto123', 'anto@gmail.com'),
(18197233, 'Susi', '123susi123', 'susi@gmail.com'),
(18197234, 'syauqykhairan_', '123syauqy123', 'syauqy@gmail.com'),
(18197235, 'Taupik_Hidayat', 'taupik12345', 'taupik@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`kode_guru`,`kode_mapel`),
  ADD KEY `kode_mapel` (`kode_mapel`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `nama_mapel` (`nama_mapel`),
  ADD KEY `nama_ruangan` (`nama_ruangan`);

--
-- Indeks untuk tabel `kontrak`
--
ALTER TABLE `kontrak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`,`nis`),
  ADD KEY `kode_mapel` (`kode_mapel`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`nama_ruangan`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `nis` (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kontrak`
--
ALTER TABLE `kontrak`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
