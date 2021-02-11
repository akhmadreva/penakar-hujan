-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2021 pada 11.48
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penakar_hujan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_hujan`
--

CREATE TABLE `data_hujan` (
  `tanggal` date NOT NULL,
  `lima_mnt` decimal(2,2) DEFAULT NULL,
  `sepuluh_mnt` decimal(2,2) DEFAULT NULL,
  `limabelas_mnt` decimal(2,2) DEFAULT NULL,
  `tigapuluh_mnt` decimal(2,2) DEFAULT NULL,
  `empatlima_mnt` decimal(2,2) DEFAULT NULL,
  `enampuluh_mnt` decimal(2,2) DEFAULT NULL,
  `srtsduaplh_mnt` decimal(2,2) DEFAULT NULL,
  `tiga_jm` decimal(2,2) DEFAULT NULL,
  `enam_jm` decimal(2,2) DEFAULT NULL,
  `duabelas_jm` decimal(2,2) DEFAULT NULL,
  `tujuh_delapan` decimal(2,2) DEFAULT NULL,
  `delapan_sembilan` decimal(2,2) DEFAULT NULL,
  `sembilan_sepuluh` decimal(2,2) DEFAULT NULL,
  `sepuluh_sebelas` decimal(2,2) DEFAULT NULL,
  `sebelas_duabelas` decimal(2,2) DEFAULT NULL,
  `duabelas_tigabelas` decimal(2,2) DEFAULT NULL,
  `tigabelas_empatbelas` decimal(2,2) DEFAULT NULL,
  `empatbelas_limabelas` decimal(2,2) DEFAULT NULL,
  `limabelas_enambelas` decimal(2,2) DEFAULT NULL,
  `enambelas_tujubelas` decimal(2,2) DEFAULT NULL,
  `tujubelas_lapanbelas` decimal(2,2) DEFAULT NULL,
  `lapanbelas_sembilanbelas` decimal(2,2) DEFAULT NULL,
  `sembilanbelas_duapuluh` decimal(2,2) DEFAULT NULL,
  `duapuluh_duasatu` decimal(2,2) DEFAULT NULL,
  `duasatu_duadua` decimal(2,2) DEFAULT NULL,
  `duadua_duatiga` decimal(2,2) DEFAULT NULL,
  `duatiga_duaempat` decimal(2,2) DEFAULT NULL,
  `duaempat_satu` decimal(2,2) DEFAULT NULL,
  `satu_dua` decimal(2,2) DEFAULT NULL,
  `dua_tiga` decimal(2,2) DEFAULT NULL,
  `tiga_empat` decimal(2,2) DEFAULT NULL,
  `empat_lima` decimal(2,2) DEFAULT NULL,
  `lima_enam` decimal(2,2) DEFAULT NULL,
  `enam_tuju` decimal(2,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_hujan`
--

INSERT INTO `data_hujan` (`tanggal`, `lima_mnt`, `sepuluh_mnt`, `limabelas_mnt`, `tigapuluh_mnt`, `empatlima_mnt`, `enampuluh_mnt`, `srtsduaplh_mnt`, `tiga_jm`, `enam_jm`, `duabelas_jm`, `tujuh_delapan`, `delapan_sembilan`, `sembilan_sepuluh`, `sepuluh_sebelas`, `sebelas_duabelas`, `duabelas_tigabelas`, `tigabelas_empatbelas`, `empatbelas_limabelas`, `limabelas_enambelas`, `enambelas_tujubelas`, `tujubelas_lapanbelas`, `lapanbelas_sembilanbelas`, `sembilanbelas_duapuluh`, `duapuluh_duasatu`, `duasatu_duadua`, `duadua_duatiga`, `duatiga_duaempat`, `duaempat_satu`, `satu_dua`, `dua_tiga`, `tiga_empat`, `empat_lima`, `lima_enam`, `enam_tuju`) VALUES
('2021-02-01', '0.30', '0.50', '0.60', '0.99', '0.99', '0.99', '0.99', '0.99', '0.99', '0.99', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.99', '0.99', '0.40', '0.30', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
