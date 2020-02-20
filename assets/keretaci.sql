-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 06:17 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keretaci`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `id_kereta` int(5) NOT NULL,
  `pemberhentian` varchar(100) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `jam_datang` varchar(10) NOT NULL,
  `jam_berangkat` varchar(10) NOT NULL,
  `qty` int(4) NOT NULL,
  `tanggal_keberangkatan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_kereta`, `pemberhentian`, `harga`, `jam_datang`, `jam_berangkat`, `qty`, `tanggal_keberangkatan`) VALUES
(1, 4, 'Stasiun Kota Kediri', '20000', '07.15', '07.45', 148, '2019-10-12'),
(2, 4, 'Stasiun Balapan', '60000', '07.15', '07.45', 200, '2019-10-12'),
(3, 7, 'Stasiun Kota Lama', '100000', '07.05', '07.20', 195, '2019-10-12'),
(4, 10, 'Stasiun Gambir', '600000', '20.00', '20.05', 199, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `kereta`
--

CREATE TABLE `kereta` (
  `id_kereta` int(5) NOT NULL,
  `nama_kereta` varchar(50) NOT NULL,
  `jml_gerbong` int(2) NOT NULL,
  `tipe_kereta` varchar(20) NOT NULL,
  `thn_pembuatan` year(4) NOT NULL,
  `stasiun_awal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kereta`
--

INSERT INTO `kereta` (`id_kereta`, `nama_kereta`, `jml_gerbong`, `tipe_kereta`, `thn_pembuatan`, `stasiun_awal`) VALUES
(4, 'GAJAYANA', 8, 'Eksekutif', 2010, 'Stasiun Kota Baru'),
(7, 'KERTANEGARI', 7, 'Ekonomi', 2001, 'Stasiun Gambir'),
(9, 'PENATARAN', 6, 'Eksekutif', 2004, 'Stasiun Kota Kediri'),
(10, 'MUTIARA SELATAN', 6, 'Eksekutif', 2017, 'Stasiun Kota Baru');

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `id_kursi` int(5) NOT NULL,
  `id_jadwal` int(5) NOT NULL,
  `no_ktp` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursi`
--

INSERT INTO `kursi` (`id_kursi`, `id_jadwal`, `no_ktp`) VALUES
(6, 3, '3510290012866'),
(7, 4, '351414031754'),
(8, 4, '3510026743284');

-- --------------------------------------------------------

--
-- Table structure for table `masinis`
--

CREATE TABLE `masinis` (
  `id_masinis` int(5) NOT NULL,
  `nama_masinis` varchar(100) NOT NULL,
  `alamat_masinis` varchar(100) NOT NULL,
  `nohp_masinis` varchar(15) NOT NULL,
  `email_masinis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masinis`
--

INSERT INTO `masinis` (`id_masinis`, `nama_masinis`, `alamat_masinis`, `nohp_masinis`, `email_masinis`) VALUES
(1, 'Gaizka Zaqhariou', 'Jl. Permata residence B17, Malang', '082142780084', 'gaizka@gmail.com'),
(2, 'Ibrahim Mazino', 'Perum Griya Shanta z-23, Malang', '082134278801', 'ramaiwak@gmail.com'),
(3, 'nudiya ahda', 'jl graha permata jingga b-29 malang', '082173572391', 'nudiya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `no_ktp` varchar(17) NOT NULL,
  `nama_penumpang` varchar(100) NOT NULL,
  `alamat_penumpang` varchar(100) NOT NULL,
  `nohp_penumpang` varchar(15) NOT NULL,
  `email_penumpang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penumpang`
--

INSERT INTO `penumpang` (`no_ktp`, `nama_penumpang`, `alamat_penumpang`, `nohp_penumpang`, `email_penumpang`) VALUES
('3500123891211', 'Gaizka', 'jalan permata b17 malang', '082371618300', 'gaizka@gmail.com'),
('3500123891212', 'larasatizka', 'jl permata b17 malang', '08916265217', 'larasatizka@gmail.com'),
('3510026743284', 'alfa nurani', 'jalan jalan', '08921683274', 'alfa@gmail.com'),
('3510290012866', 'Nudiya', 'jalan jalan aja', '082136293662', 'nudiyaahdak@gmail.com'),
('3513378193740', 'Suci', 'jl jalan aja', '082173562911', 'sutjised@gmail.com'),
('351414031754', 'Rizky Aulia', 'jl in aja dulu', '08218352831', 'rizky@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `no_petugas` int(5) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `alamat_petugas` varchar(100) NOT NULL,
  `nohp_petugas` varchar(15) NOT NULL,
  `bagian_tugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`no_petugas`, `nama_petugas`, `alamat_petugas`, `nohp_petugas`, `bagian_tugas`) VALUES
(1, 'Pak Haris', 'jalan. jalan yuk', '082163628351', 'satpam'),
(2, 'Bu Rika', 'jalan. in aja dulu', '081273551937', 'kasir'),
(4, 'ega', 'jl mana hayo', '0821238163271', 'Porter');

-- --------------------------------------------------------

--
-- Table structure for table `stasiun`
--

CREATE TABLE `stasiun` (
  `kode_stasiun` int(5) NOT NULL,
  `nama_stasiun` varchar(50) NOT NULL,
  `kota_stasiun` varchar(50) NOT NULL,
  `provinsi_stasiun` varchar(50) NOT NULL,
  `jam_buka` varchar(10) NOT NULL,
  `jam_tutup` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stasiun`
--

INSERT INTO `stasiun` (`kode_stasiun`, `nama_stasiun`, `kota_stasiun`, `provinsi_stasiun`, `jam_buka`, `jam_tutup`) VALUES
(1, 'Stasiun Balapan', 'Solo', 'Jawa Tengah', '4 Pagi', '9 Malam'),
(2, 'Stasiun Gambir', 'Jakarta', 'Jakarta', '3 Pagi', '11 Malam'),
(3, 'Stasiun Kota Baru', 'Malang', 'Jawa Timur', '3 Pagi', '11 Malam'),
(4, 'Stasiun Kota Kediri', 'Kediri', 'Jawa Timur', '5 Pagi', '9 Malam'),
(5, 'Stasiun Kota Lama', 'Malang', 'Jawa Timur', '3 Pagi', '10 Malam'),
(6, 'Stasiun Lawang', 'Lawang', 'Jawa Timur', '5 pagi', '10 malam'),
(7, 'Stasiun Semarang Baru', 'Semarang', 'Jawa Tengah', '4 pagi', '10 malam');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_penumpang` int(5) NOT NULL,
  `no_ktp` varchar(17) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `id_jadwal` int(5) NOT NULL,
  `tgl_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_penumpang`, `no_ktp`, `nama_wali`, `id_jadwal`, `tgl_pesan`) VALUES
(1, '3500123891211', 'gazka', 1, '2019-10-09'),
(2, '3500123891212', 'gazka', 1, '2019-10-09'),
(11, '3510290012866', 'nudi', 3, '2019-10-12'),
(12, '351414031754', 'rizky', 4, '2019-10-14'),
(13, '3510026743284', 'ibuk e', 4, '2019-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `status`) VALUES
(1, 'iniadmin', 'admin1', 'superadmin', 'alow'),
(2, 'inipetugas', 'petugas1', 'petugas', 'alow'),
(3, 'inipetugas2', 'petugas2', 'petugas', 'denied'),
(4, 'inipetugas3', 'petugas3', 'petugas', 'request'),
(5, 'inigazka', 'gaizka1', 'petugas', 'alow'),
(6, 'ferdi', 'ferdi', 'petugas', 'denied'),
(7, 'gaizkaBaru', '1234567890', 'petugas', 'alow');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_kereta` (`id_kereta`),
  ADD KEY `pemberhentian` (`pemberhentian`);

--
-- Indexes for table `kereta`
--
ALTER TABLE `kereta`
  ADD PRIMARY KEY (`id_kereta`),
  ADD KEY `stasiun_awal` (`stasiun_awal`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`id_kursi`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `no_ktp` (`no_ktp`);

--
-- Indexes for table `masinis`
--
ALTER TABLE `masinis`
  ADD PRIMARY KEY (`id_masinis`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`no_ktp`),
  ADD UNIQUE KEY `no_ktp` (`no_ktp`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`no_petugas`);

--
-- Indexes for table `stasiun`
--
ALTER TABLE `stasiun`
  ADD PRIMARY KEY (`nama_stasiun`),
  ADD UNIQUE KEY `kode_stasiun` (`kode_stasiun`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_penumpang`),
  ADD KEY `no_ktp` (`no_ktp`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kereta`
--
ALTER TABLE `kereta`
  MODIFY `id_kereta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kursi`
--
ALTER TABLE `kursi`
  MODIFY `id_kursi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `masinis`
--
ALTER TABLE `masinis`
  MODIFY `id_masinis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `no_petugas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stasiun`
--
ALTER TABLE `stasiun`
  MODIFY `kode_stasiun` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_penumpang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_kereta`) REFERENCES `kereta` (`id_kereta`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`pemberhentian`) REFERENCES `stasiun` (`nama_stasiun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kereta`
--
ALTER TABLE `kereta`
  ADD CONSTRAINT `kereta_ibfk_1` FOREIGN KEY (`stasiun_awal`) REFERENCES `stasiun` (`nama_stasiun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kursi`
--
ALTER TABLE `kursi`
  ADD CONSTRAINT `kursi_ibfk_2` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kursi_ibfk_3` FOREIGN KEY (`no_ktp`) REFERENCES `penumpang` (`no_ktp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`no_ktp`) REFERENCES `penumpang` (`no_ktp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
