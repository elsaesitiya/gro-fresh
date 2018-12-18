-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 03:41 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `kd_admin` varchar(5) NOT NULL,
  `nama_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `kd_cart` varchar(10) NOT NULL,
  `kd_produk` varchar(10) NOT NULL,
  `qty` int(100) NOT NULL,
  `total` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`kd_cart`, `kd_produk`, `qty`, `total`) VALUES
('2', '2', 20, '2000.0');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `ID` int(6) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`ID`, `Name`, `Email`, `Subject`, `Messages`) VALUES
(1, 'rino', 'rino@gmail.com', 'coba', ''),
(2, 'rino', 'rino@gmail.com', 'abc', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `kd_detail` varchar(10) NOT NULL,
  `kd_transaksi` varchar(10) NOT NULL,
  `total_bayar` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kd_kategori` varchar(10) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kd_kategori`, `nama_kategori`) VALUES
('KA', 'A'),
('KB', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `kd_login` varchar(5) NOT NULL,
  `kd_pelanggan` int(5) NOT NULL,
  `nama_pelanggan` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `kd_map` int(11) NOT NULL,
  `isi_map` varchar(60) NOT NULL,
  `latlong` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`kd_map`, `isi_map`, `latlong`) VALUES
(2, 'kantor', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.4283215801947!2d110.40533841426341!3d-7.744310078919812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59723ad890bd%3A0xc2c1f341eb8a5539!2sMushola+Al-Muttaqin!5e0!3m2!1sid!2sid!4v1530100295811');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `kd_pelanggan` int(5) NOT NULL,
  `nama_pelanggan` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `password` varchar(20) NOT NULL,
  `no_tlp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`kd_pelanggan`, `nama_pelanggan`, `email`, `alamat`, `password`, `no_tlp`) VALUES
(1, 'fa', 'wad', 'awdawd', '123', '1213'),
(2, 'FAISHAL ARIF WIBOWO', 'qweqwe', 'qweqwe', 'wqe', '123'),
(3, 'ewr', 'ewr', 'ewr', '123', '123213'),
(4, 'tes', 'qs', 'qs', 'qst', '123'),
(5, 'rino', 'rinoalvian20@gmail.com', 'mgl', 'mgl', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `kd_pengiriman` varchar(10) NOT NULL,
  `kd_transaksi` varchar(10) NOT NULL,
  `tgl_kirim` datetime NOT NULL,
  `estimasi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `populer`
--

CREATE TABLE `populer` (
  `kd_populer` varchar(11) NOT NULL,
  `kd_produk` varchar(11) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `jumlah_terjual` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
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
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kd_produk`, `kd_kategori`, `nama_produk`, `deskripsi`, `stok`, `harga`) VALUES
('1', 'KA', 'Asparagus', 'Fresh vegetables from well-kept and maintained gardens. Hygienic treatment after harvesting that will be guaranteed freshness until the vegetables are distributed or shipped', 12, '5000.0'),
('2', 'KB', 'Bawang', 'awdawdwa', 11, '2000.0');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `kd_promo` varchar(10) NOT NULL,
  `kd_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `jumlah_terjual` varchar(1000) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slide_show`
--

CREATE TABLE `slide_show` (
  `kd_slide` varchar(10) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `gambar` int(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `kd_sponsor` varchar(10) NOT NULL,
  `gambar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stok_baru`
--

CREATE TABLE `stok_baru` (
  `kd_stokbaru` varchar(10) NOT NULL,
  `kd_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `stok` int(100) NOT NULL,
  `harga` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `terlaris`
--

CREATE TABLE `terlaris` (
  `kd_terlaris` varchar(10) NOT NULL,
  `kd_produk` varchar(11) NOT NULL,
  `nama_produk` varchar(11) NOT NULL,
  `jumlah_terjual` varchar(1000) NOT NULL,
  `harga` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kd_transaksi` varchar(10) NOT NULL,
  `kd_pelanggan` int(5) NOT NULL,
  `kd_cart` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`kd_cart`),
  ADD KEY `kd_produk` (`kd_produk`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`kd_detail`),
  ADD KEY `kd_transaksi` (`kd_transaksi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`kd_login`),
  ADD KEY `kd_pelanggan` (`kd_pelanggan`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`kd_map`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`kd_pelanggan`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`kd_pengiriman`),
  ADD KEY `kd_transaksi` (`kd_transaksi`);

--
-- Indexes for table `populer`
--
ALTER TABLE `populer`
  ADD PRIMARY KEY (`kd_populer`),
  ADD KEY `kd_produk` (`kd_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kd_produk`),
  ADD KEY `kd_kategori` (`kd_kategori`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`kd_promo`),
  ADD KEY `kd_produk` (`kd_produk`);

--
-- Indexes for table `slide_show`
--
ALTER TABLE `slide_show`
  ADD PRIMARY KEY (`kd_slide`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`kd_sponsor`);

--
-- Indexes for table `stok_baru`
--
ALTER TABLE `stok_baru`
  ADD PRIMARY KEY (`kd_stokbaru`);

--
-- Indexes for table `terlaris`
--
ALTER TABLE `terlaris`
  ADD PRIMARY KEY (`kd_terlaris`),
  ADD KEY `kd_produk` (`kd_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kd_transaksi`),
  ADD KEY `kd_cart` (`kd_cart`),
  ADD KEY `kd_pelanggan` (`kd_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `kd_map` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `kd_pelanggan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`kd_produk`) REFERENCES `produk` (`kd_produk`);

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`kd_transaksi`) REFERENCES `transaksi` (`kd_transaksi`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`kd_pelanggan`) REFERENCES `pelanggan` (`kd_pelanggan`);

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `pengiriman_ibfk_1` FOREIGN KEY (`kd_transaksi`) REFERENCES `transaksi` (`kd_transaksi`);

--
-- Constraints for table `populer`
--
ALTER TABLE `populer`
  ADD CONSTRAINT `populer_ibfk_1` FOREIGN KEY (`kd_produk`) REFERENCES `produk` (`kd_produk`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`kd_kategori`) REFERENCES `kategori` (`kd_kategori`);

--
-- Constraints for table `promo`
--
ALTER TABLE `promo`
  ADD CONSTRAINT `promo_ibfk_1` FOREIGN KEY (`kd_produk`) REFERENCES `produk` (`kd_produk`);

--
-- Constraints for table `terlaris`
--
ALTER TABLE `terlaris`
  ADD CONSTRAINT `terlaris_ibfk_1` FOREIGN KEY (`kd_produk`) REFERENCES `produk` (`kd_produk`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kd_cart`) REFERENCES `cart` (`kd_cart`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`kd_pelanggan`) REFERENCES `pelanggan` (`kd_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
