-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2018 pada 01.41
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grofresh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `kd_produk` varchar(10) NOT NULL,
  `kd_kategori` varchar(10) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `stok` int(100) NOT NULL,
  `harga` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kd_produk`, `kd_kategori`, `nama_produk`, `deskripsi`, `stok`, `harga`) VALUES
('01', 'KA', 'Asparagus', 'Fresh vegetables from well-kept and maintained gardens. Hygienic treatment after harvesting that will be guaranteed freshness until the vegetables are distributed or shipped', 12, '5000.0'),
('10', 'KA', 'Kacang Polong', 'Segar dan Bersih', 1000, '10.0'),
('11', 'KA', 'Sawi', 'Segar dan Bersih', 1000, '5.0'),
('12', 'KA', 'Kangkung', 'Segar dan Bersih', 1000, '6.0'),
('13', 'KA', 'Gambas', 'Segar dan Bersih', 1000, '5.0'),
('14', 'KA', 'Rumput Laut', 'Segar dan Bersih', 1000, '4.0'),
('15', 'KA', 'Kubis', 'Segar dan Bersih', 1000, '1.5'),
('16', 'KA', 'Bayam Merah', 'Segar dan Bersih', 1000, '5.0'),
('17', 'KA', 'Buncis', 'Segar dan Bersih', 1000, '15.0'),
('18', 'KA', 'Lobak', 'Segar dan Bersih', 1000, '12.0'),
('19', 'KA', 'Selada', 'Segar dan Bersih', 1000, '5.0'),
('2', 'KB', 'Bawang', 'awdawdwa', 11, '2000.0'),
('20', 'KA', 'Tomat', 'Segar dan Bersih', 1000, '1.0'),
('3', 'KA', 'Wortel', 'Masih segar, di petik kemarin.', 1000, '1000.0'),
('4', 'KA', 'Bayam', 'Segar dan bersih', 1000, '2.2'),
('5', 'KA', 'Kol', 'Segar dan Bersih', 1000, '70.0'),
('6', 'KA', 'Brokoli', 'Segar dan Bersih', 1000, '30.0'),
('7', 'KA', 'Terong', 'Segar dan Bersih', 1000, '1.5'),
('8', 'KA', 'Timun', 'Segar dan Bersih', 1000, '8.0'),
('9', 'KA', 'Jagung', 'Segar dan Bersih', 1000, '6.0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kd_produk`),
  ADD KEY `kd_kategori` (`kd_kategori`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`kd_kategori`) REFERENCES `kategori` (`kd_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
