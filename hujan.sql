-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 04:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hujan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_hujan`
--

CREATE TABLE `data_hujan` (
  `id` int(8) NOT NULL,
  `tanggal` date NOT NULL,
  `lima_mnt` decimal(4,1) NOT NULL,
  `sepuluh_mnt` decimal(4,1) NOT NULL,
  `limabelas_mnt` decimal(4,1) NOT NULL,
  `tigapuluh_mnt` decimal(4,1) NOT NULL,
  `empatlima_mnt` decimal(4,1) NOT NULL,
  `enampuluh_mnt` decimal(4,1) NOT NULL,
  `seratusduapuluh` decimal(4,1) NOT NULL,
  `tiga_jm` decimal(4,1) NOT NULL,
  `enam_jm` decimal(4,1) NOT NULL,
  `duabelas_jm` decimal(4,1) NOT NULL,
  `tujuh` decimal(4,1) NOT NULL,
  `delapan` decimal(4,1) NOT NULL,
  `sembilan` decimal(4,1) NOT NULL,
  `sepuluh` decimal(4,1) NOT NULL,
  `sebelas` decimal(4,1) NOT NULL,
  `duabelas` decimal(4,1) NOT NULL,
  `tigabelas` decimal(4,1) NOT NULL,
  `empatbelas` decimal(4,1) NOT NULL,
  `limabelas` decimal(4,1) NOT NULL,
  `enambelas` decimal(4,1) NOT NULL,
  `tujuhbelas` decimal(4,1) NOT NULL,
  `delapanbelas` decimal(4,1) NOT NULL,
  `sembilanbelas` decimal(4,1) NOT NULL,
  `duapuluh` decimal(4,1) NOT NULL,
  `duasatu` decimal(4,1) NOT NULL,
  `duadua` decimal(4,1) NOT NULL,
  `duatiga` decimal(4,1) NOT NULL,
  `duaempat` decimal(4,1) NOT NULL,
  `satu` decimal(4,1) NOT NULL,
  `dua` decimal(4,1) NOT NULL,
  `tiga` decimal(4,1) NOT NULL,
  `empat` decimal(4,1) NOT NULL,
  `lima` decimal(4,1) NOT NULL,
  `enam` decimal(4,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_hujan`
--

INSERT INTO `data_hujan` (`id`, `tanggal`, `lima_mnt`, `sepuluh_mnt`, `limabelas_mnt`, `tigapuluh_mnt`, `empatlima_mnt`, `enampuluh_mnt`, `seratusduapuluh`, `tiga_jm`, `enam_jm`, `duabelas_jm`, `tujuh`, `delapan`, `sembilan`, `sepuluh`, `sebelas`, `duabelas`, `tigabelas`, `empatbelas`, `limabelas`, `enambelas`, `tujuhbelas`, `delapanbelas`, `sembilanbelas`, `duapuluh`, `duasatu`, `duadua`, `duatiga`, `duaempat`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`) VALUES
(1, '2021-02-12', '1.5', '1.5', '3.2', '0.0', '1.4', '1.6', '1.5', '1.3', '1.9', '2.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '1.4', '1.4', '1.0', '0.2', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(3, '2021-02-01', '0.3', '0.5', '0.6', '1.0', '1.2', '1.5', '2.8', '3.2', '3.3', '3.3', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '1.3', '1.3', '0.4', '0.3', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(4, '2021-02-19', '3.2', '3.3', '3.5', '0.0', '3.4', '3.5', '3.0', '2.8', '2.3', '3.5', '1.2', '1.1', '3.2', '2.1', '1.3', '2.1', '3.4', '2.2', '3.2', '3.5', '3.2', '1.4', '2.4', '1.2', '4.2', '2.1', '1.3', '1.4', '2.0', '0.3', '0.4', '0.5', '0.4', '0.6'),
(5, '2021-02-09', '0.5', '0.5', '0.6', '0.0', '0.5', '0.5', '0.8', '0.5', '0.5', '0.5', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.2', '2.1', '1.5', '1.5', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(6, '2021-02-08', '0.5', '1.5', '1.2', '0.0', '1.5', '1.6', '1.5', '1.8', '1.9', '2.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.5', '1.7', '3.2', '3.3', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(7, '2021-02-11', '3.2', '1.5', '1.2', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '2.0', '2.1', '1.3', '1.2', '0.0', '0.0', '0.0', '0.0'),
(8, '2021-03-02', '0.5', '1.5', '1.2', '0.0', '0.5', '0.5', '0.8', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.5', '1.7', '3.2', '3.3', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(9, '2021-03-03', '3.2', '3.3', '3.2', '0.0', '3.4', '3.5', '3.0', '2.8', '2.3', '2.0', '0.0', '0.0', '0.0', '0.0', '1.4', '1.5', '3.4', '2.2', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(10, '2021-03-04', '0.5', '1.5', '1.2', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '2.0', '2.1', '1.3', '1.2', '0.0', '0.0', '0.0', '0.0'),
(0, '2021-03-01', '0.0', '0.0', '1.2', '0.0', '1.5', '1.2', '1.1', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0');

-- --------------------------------------------------------

--
-- Table structure for table `hujan`
--

CREATE TABLE `hujan` (
  `id` int(8) NOT NULL,
  `tanggal` date NOT NULL,
  `lima` decimal(4,2) NOT NULL,
  `sepuluh` decimal(4,2) NOT NULL,
  `limabelas` decimal(4,2) NOT NULL,
  `tigapuluh` decimal(4,2) NOT NULL,
  `empatlima` decimal(4,2) NOT NULL,
  `enampuluh` decimal(4,2) NOT NULL,
  `seratusduapuluh` decimal(4,2) NOT NULL,
  `tigajam` decimal(4,2) NOT NULL,
  `enamjam` decimal(4,2) NOT NULL,
  `duabelasjam` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hujan`
--

INSERT INTO `hujan` (`id`, `tanggal`, `lima`, `sepuluh`, `limabelas`, `tigapuluh`, `empatlima`, `enampuluh`, `seratusduapuluh`, `tigajam`, `enamjam`, `duabelasjam`) VALUES
(1, '0000-00-00', '1.20', '0.30', '0.50', '0.10', '1.10', '1.50', '0.50', '2.00', '3.00', '3.30'),
(2, '0000-00-00', '1.20', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(3, '2021-02-23', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(4, '2021-02-05', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(5, '2021-02-05', '1.20', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(6, '2021-02-06', '0.00', '0.00', '0.00', '0.00', '0.50', '0.00', '0.00', '0.00', '0.00', '0.00'),
(7, '2021-03-01', '1.20', '1.50', '2.20', '1.70', '1.20', '0.00', '0.00', '1.20', '1.50', '0.00'),
(9, '2021-03-01', '1.20', '1.50', '2.20', '1.70', '1.20', '0.00', '0.00', '1.20', '1.50', '0.00'),
(10, '2021-03-01', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `hujanperjam`
--

CREATE TABLE `hujanperjam` (
  `id` int(8) NOT NULL,
  `tanggal` date NOT NULL,
  `tujuh` decimal(4,2) NOT NULL,
  `delapan` decimal(4,2) NOT NULL,
  `sembilan` decimal(4,2) NOT NULL,
  `sepuluh` decimal(4,2) NOT NULL,
  `sebelas` decimal(4,2) NOT NULL,
  `duabelas` decimal(4,2) NOT NULL,
  `tigabelas` decimal(4,2) NOT NULL,
  `empatbelas` decimal(4,2) NOT NULL,
  `limabelas` decimal(4,2) NOT NULL,
  `enambelas` decimal(4,2) NOT NULL,
  `tujuhbelas` decimal(4,2) NOT NULL,
  `delapanbelas` decimal(4,2) NOT NULL,
  `sembilanbelas` decimal(2,2) NOT NULL,
  `duapuluh` decimal(4,2) NOT NULL,
  `duasatu` decimal(4,2) NOT NULL,
  `duadua` decimal(4,2) NOT NULL,
  `duatiga` decimal(4,2) NOT NULL,
  `duaempat` decimal(4,2) NOT NULL,
  `satu` decimal(4,2) NOT NULL,
  `dua` decimal(4,2) NOT NULL,
  `tiga` decimal(4,2) NOT NULL,
  `empat` decimal(4,2) NOT NULL,
  `lima` decimal(4,2) NOT NULL,
  `enam` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hujanperjam`
--

INSERT INTO `hujanperjam` (`id`, `tanggal`, `tujuh`, `delapan`, `sembilan`, `sepuluh`, `sebelas`, `duabelas`, `tigabelas`, `empatbelas`, `limabelas`, `enambelas`, `tujuhbelas`, `delapanbelas`, `sembilanbelas`, `duapuluh`, `duasatu`, `duadua`, `duatiga`, `duaempat`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`) VALUES
(1, '2021-02-23', '1.30', '0.50', '3.00', '4.00', '1.30', '2.10', '3.10', '0.30', '0.50', '0.60', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(2, '2021-02-24', '0.40', '0.50', '0.40', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(3, '2021-02-09', '0.40', '0.50', '0.40', '0.50', '1.40', '1.50', '0.20', '0.40', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(4, '2021-02-10', '0.40', '0.50', '0.40', '0.50', '1.40', '1.50', '0.20', '0.40', '0.30', '2.10', '1.50', '1.50', '0.00', '1.70', '3.20', '3.30', '2.00', '2.10', '1.30', '1.20', '2.10', '1.40', '1.20', '2.30'),
(5, '2021-02-24', '1.20', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(6, '2021-02-05', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.50', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(7, '2021-02-04', '0.00', '0.00', '0.00', '0.00', '1.40', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(8, '2021-02-05', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(9, '2021-02-05', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(10, '2021-03-01', '0.00', '0.00', '0.00', '1.50', '1.50', '1.70', '1.85', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(11, '2021-02-27', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1.10', '1.20', '1.50', '1.70', '2.20', '0.99', '2.80', '2.50', '1.80', '1.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(12, '2021-03-01', '0.00', '0.00', '0.00', '1.50', '1.50', '1.70', '1.85', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(13, '2021-02-16', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1.00', '1.20', '1.25', '1.50', '1.20', '0.99', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `nip` bigint(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `jabatan` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nip`, `nama`, `jabatan`, `email`, `password`) VALUES
(1, 19183831, 'reva', 'manajer', 'kerja@gmail.com', 'ieeruejw'),
(2, 2937402131, 'mamad', 'KM', 'kerja2@gmail.com', '293430223'),
(4, 1394239032, 'DIskus', 'OB', 'ytfytf@gmail.com', '092503142'),
(5, 78656, 'Asta', 'manajer', 'mad@google.com', 'ikanarwana'),
(6, 123141, 'reva', 'direktur', 'mad@mail.com', '12345'),
(7, 12345, 'mamad', 'manajer', 'mad@google.com', '12345'),
(8, 19201201, 'Alex', 'Penata', 'alex@gmail.com', 'alex123'),
(10, 192139123, 'Pony', 'IT', 'pony@pon.com', 'pony123'),
(11, 24803433, 'Keking', 'SC', 'keking@gmail.com', 'keking123'),
(13, 79232732, 'Xingu', 'KC', 'xingu@gmail.com', '12345678'),
(15, 1343423142, 'Dobleh', 'PL', 'dobleh@gmail.com', 'mbotegal'),
(17, 10948313, 'Uye', 'SK', 'uye@gmail.com', 'uye123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hujan`
--
ALTER TABLE `hujan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hujanperjam`
--
ALTER TABLE `hujanperjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hujan`
--
ALTER TABLE `hujan`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hujanperjam`
--
ALTER TABLE `hujanperjam`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
