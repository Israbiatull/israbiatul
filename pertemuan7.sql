-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2022 pada 11.02
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertemuan7`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `NIK` char(5) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `tglLahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`NIK`, `Nama`, `Alamat`, `tglLahir`) VALUES
('12345', 'Yoga Candra', 'Jl.ratulangi', '1982-03-04'),
('12355', 'Budi Susanti', 'JL.Rappocini', '1981-10-26'),
('13123', 'Aditya A.R', 'Jl.Mon.Emmy', '1985-02-16'),
('13257', 'Ani rohyani', 'Jl.kumala', '1987-09-14'),
('13444', 'Indah Sunsanti', 'Jl.Landak', '1988-06-21'),
('40988', 'darri', 'bone', '2000-10-12'),
('76098', 'huhu', 'bone', '2000-10-12'),
('76099', 'haha', 'bone', '2000-10-12'),
('90909', 'assadi', 'bone', '2000-10-12'),
('90934', 'assadi', 'bone', '2000-10-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelaksanaan_training`
--

CREATE TABLE `pelaksanaan_training` (
  `NIK` varchar(20) NOT NULL,
  `IdTra` varchar(20) NOT NULL,
  `Tgl_mulai` date NOT NULL,
  `Tgl_selesai` date NOT NULL,
  `Keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `programtraining`
--

CREATE TABLE `programtraining` (
  `IdTra` varchar(20) NOT NULL,
  `NamaTraining` varchar(20) NOT NULL,
  `Budget_Rupiah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `programtraining`
--

INSERT INTO `programtraining` (`IdTra`, `NamaTraining`, `Budget_Rupiah`) VALUES
('TRA-01', 'Training Borang', '90.000.000'),
('TRA-02', 'Training Administras', '65.000.000'),
('TRA-03', 'Training Aplikasi Ko', '110.000.000'),
('TRA-04', 'Training Bahasa Ingg', '43.000.000'),
('TRA-05', 'Training Manajemen', '50.000.000'),
('TRA-11', 'Training Aplikasi Ko', '97.000.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`NIK`);

--
-- Indeks untuk tabel `pelaksanaan_training`
--
ALTER TABLE `pelaksanaan_training`
  ADD PRIMARY KEY (`NIK`);

--
-- Indeks untuk tabel `programtraining`
--
ALTER TABLE `programtraining`
  ADD PRIMARY KEY (`IdTra`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
