-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 13 Nov 2017 pada 21.32
-- Versi Server: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_komputer`
--

CREATE TABLE `list_komputer` (
  `id_order` int(11) NOT NULL,
  `t_vga` varchar(50) NOT NULL,
  `t_hardisk` varchar(50) NOT NULL,
  `t_prosesor` varchar(50) NOT NULL,
  `t_ram` varchar(50) NOT NULL,
  `is_touchscreen` varchar(5) NOT NULL DEFAULT 'Tidak'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_komputer`
--

INSERT INTO `list_komputer` (`id_order`, `t_vga`, `t_hardisk`, `t_prosesor`, `t_ram`, `is_touchscreen`) VALUES
(15, 'GeForce GTX 1080 Ti', 'HDD 900GB', '7th Generation Intel Core i7-7500U', '4 GB RAM', 'Tidak'),
(16, 'Radeon RX 480', 'HDD 1 Tera', '7th Generation Intel Core i5-7200U', '4 GB', 'Ya'),
(17, 'Radeon RX 470', 'HDD 2 TB', '7th Generation Intel Core i3-7100U', '16 GB DRR 4', 'Tidak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_komputer`
--
ALTER TABLE `list_komputer`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_komputer`
--
ALTER TABLE `list_komputer`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
