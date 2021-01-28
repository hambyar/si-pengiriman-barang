-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 01:41 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbpengiriman`
--

-- --------------------------------------------------------

--
-- Table structure for table `penerima`
--

CREATE TABLE IF NOT EXISTS `penerima` (
  `no_resi` varchar(50) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat_penerima` varchar(50) NOT NULL,
  `nomerhp` varchar(25) NOT NULL,
  `tgl_menerima` date NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerima`
--

INSERT INTO `penerima` (`no_resi`, `nama`, `alamat_penerima`, `nomerhp`, `tgl_menerima`, `kode_pos`, `keterangan`, `id`) VALUES
('11210999', 'Aisyah Aqilla', 'Umbut-Umbut, Jln Mangga ', '082165426665', '2021-01-05', 21265, 'Sukses Di Proses', 1),
('1211222', 'Agung Indra Jaya', 'Pulau Rakyat, Mekar Sari', '082119098421', '2021-01-04', 21278, 'Telah Diterima', 2),
('121211999', 'Sekar Dwi', 'Tanjung Balai, Sei Tualang Raso, Pasar Baru', '081242811918', '2021-01-04', 21341, 'Telah Diterima', 3),
('12131211', 'Dika Wahyudi', 'Air Joman, Pasar 11', '085216789240', '2021-01-06', 21263, 'Telah Diterima', 4),
('10112909', 'Airin Patma', 'Simpang Empat, Sei Dua Hulu', '081990897843', '2021-01-08', 21271, 'Telah Diterima', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE IF NOT EXISTS `pengiriman` (
  `id` int(5) NOT NULL,
  `tujuan` varchar(25) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `berat` varchar(10) NOT NULL,
  `namabrg` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_resi` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `status` varchar(25) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id`, `tujuan`, `jenis`, `berat`, `namabrg`, `nama`, `no_resi`, `tgl_masuk`, `penerima`, `harga`, `status`, `keterangan`) VALUES
(1, 'Kisaran', 'pengiriman Express', '2 Kg', 'Tas Impor', 'Agus', '11210999', '2017-12-31', 'Aisyah Aqilla', '0', 'Di Kirim', 'Sukses Di Proses '),
(2, 'Pulau Rakyat', 'pengiriman Reguler', '5 Kg', 'Seperepat Mobil', 'Andre', '1211222', '2020-12-31', 'Agung Indra Jaya', '0', 'Di Proses', 'Lakukan Transaksi Terlebih Dahulu'),
(3, 'Tanjung Balai', 'pengiriman Express', '1 Kg', 'Pasmina ', 'Andre', '121211999', '2020-12-28', 'Sekar Dwi ', '0', 'Di Kirim', 'Harap Tunggu Barang Anda Sampai '),
(4, 'Air Joman', 'pengiriman Cod', '2 Kg', 'Aksesoris Sepeda Mot', 'Agus', '12131211', '2020-12-31', 'Dika Wahyudi', '0', 'Di Proses', 'Lakukan Pembayaran Terlebih Dahulu'),
(5, 'Simpang Empat', 'pengiriman Cod', '3 Kg', 'Mukenah', 'Andi pur', '10112909', '2021-01-04', 'Airin Patma', '0', 'Di Kirim', 'Sukses Di Proses'),
(6, 'Indrapura', 'pengiriman Cod', '1 Kg', 'Baju One Set', 'Rangga Oji', '01110929', '2021-01-05', 'Dewi Agustin', '0', 'Di Proses', 'Dalam Pengiriman'),
(7, 'Meranti', 'pengiriman Cod', '2 Kg', 'Pasmina Cruty Baby D', 'Andi pur', '121122099', '2021-01-06', 'Ayudia Nur', '0', 'Di Kirim', 'Dalam Perjalanan'),
(8, 'Batu Bara', 'pengiriman Express', '1 Kg', 'Mainan Anak-Anak', 'Rangga Oji', '11210921', '2021-01-06', 'dwi kiranti', '0', 'Di Cancel', 'tidak bisa dihubungi'),
(9, 'Kisaran', 'pengiriman Reguler', '3 Kg', 'Aksesoris Sepeda Mot', 'Rangga Oji', '1011210920', '2021-01-06', 'Arya Saloka', '0', 'Di Proses', 'Harap Tunggu Barang Anda Sampai'),
(10, 'Indrapura', 'pengiriman Cod', '2 Kg', 'Baju One Set dan Muk', 'Andi pur', '11219011', '2021-01-08', 'Irma Yuki', '0', 'Di Kirim', 'Sukses Di Proses');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'ridhoaye@gmail.com', 'Developer Medan', 1, 'MANAGER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penerima`
--
ALTER TABLE `penerima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `no_perkara` (`no_resi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penerima`
--
ALTER TABLE `penerima`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
