-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2018 at 05:21 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citrakedatondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `No_pegawai` int(30) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `alamat_admin` varchar(100) NOT NULL,
  `no_telpadmin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`No_pegawai`, `full_name`, `email`, `username`, `password`, `alamat_admin`, `no_telpadmin`) VALUES
(123, 'Danang stiawan', 'danang@gmail.com', 'danang', 'danang', 'jogja', '087830772771'),
(76876, 'Della lavenia', 'della@gmail.com', 'della', '12345', 'Magelang', '085643932365');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank`
--

CREATE TABLE `tbl_bank` (
  `id_bank` int(30) NOT NULL,
  `nama_bank` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bank`
--

INSERT INTO `tbl_bank` (`id_bank`, `nama_bank`) VALUES
(902, 'Mandiri'),
(903, 'BRI'),
(1001, 'BNI');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kaveling`
--

CREATE TABLE `tbl_kaveling` (
  `id_kaveling` int(30) NOT NULL,
  `blok_kaveling` varchar(30) NOT NULL,
  `luas_kaveling` varchar(30) NOT NULL,
  `tipe_kaveling` varchar(30) NOT NULL,
  `harga_kaveling` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_perumahan` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kaveling`
--

INSERT INTO `tbl_kaveling` (`id_kaveling`, `blok_kaveling`, `luas_kaveling`, `tipe_kaveling`, `harga_kaveling`, `jumlah`, `id_perumahan`) VALUES
(202, 'A2', '125.00 MÂ²', '60', 737000000, 0, 1002),
(203, 'A3', '125.00 MÂ²', '60', 737000000, 0, 1002),
(204, 'A7', '125.00 MÂ²', '60', 737000000, 0, 1002),
(205, 'A1', '125.00 MÂ²', '65', 765050000, 1, 1002),
(206, 'A2', '125.00 MÂ²', '65', 765050000, 1, 1002),
(207, 'A3', '125.00 MÂ²', '65', 765050000, 1, 1002),
(208, 'A7', '125.00 MÂ²', '65', 765050000, 1, 1002),
(209, 'B5', '125.00 MÂ²', '50', 646800000, 1, 1002),
(210, 'B9', '125.00 MÂ²', '50', 646800000, 1, 1002),
(211, 'B11', '125.00 MÂ²', '50', 646800000, 1, 1002),
(212, 'B13', '125.00 MÂ²', '50', 646800000, 1, 1002),
(213, 'B14', '125.00 MÂ²', '50', 646800000, 1, 1002),
(214, 'B15', '125.00 MÂ²', '50', 646800000, 0, 1002),
(215, 'A2 (2 Lantai)', '120.00 MÂ²', '100', 948200000, 1, 1004),
(216, 'A2', '120.00 MÂ²', '100', 948200000, 1, 1004),
(217, 'A7', '135.00 MÂ²', '128', 1496000000, 1, 1003),
(218, 'B30', '72.00 MÂ²', '38', 301840000, 0, 1001),
(219, 'B28', '72.00 MÂ²', '38', 301840000, 0, 1001),
(220, 'B26', '72.00 MÂ²', '38', 301840000, 0, 1001),
(221, 'B24', '72.00 MÂ²', '38', 301840000, 1, 1001),
(222, 'B22', '72.00 MÂ²', '38', 301840000, 1, 1001),
(223, 'B20', '72.00 MÂ²', '38', 301840000, 1, 1001),
(224, 'B18', '72.00 MÂ²', '38', 301840000, 1, 1001),
(225, 'B16', '72.00 MÂ²', '38', 301840000, 1, 1001),
(226, 'B14', '72.00 MÂ²', '38', 301840000, 1, 1001),
(227, 'B12', '72.00 MÂ²', '38', 301840000, 1, 1001),
(228, 'B10', '72.00 MÂ²', '38', 301840000, 1, 1001),
(229, 'B8', '72.00 MÂ²', '38', 301840000, 1, 1001),
(230, 'B6', '72.00 MÂ²', '38', 301840000, 1, 1001),
(231, 'B4', '72.00 MÂ²', '38', 301840000, 1, 1001),
(232, 'B2', '72.00 MÂ²', '38', 301480000, 1, 1001),
(233, 'B1', '72.00 MÂ²', '38', 301480000, 1, 1001),
(234, 'B3', '72.00 MÂ²', '38', 301480000, 1, 1001),
(235, 'B5', '72.00 MÂ²', '38', 301840000, 1, 1001),
(236, 'B7', '72.00 MÂ²', '38', 301840000, 1, 1001),
(237, 'B9', '72.00 MÂ²', '38', 301840000, 1, 1001),
(238, 'B11', '72.00 MÂ²', '38', 301840000, 1, 1001),
(239, 'B17', '72.00 MÂ²', '38', 301840000, 1, 1001),
(240, 'B19', '72.00 MÂ²', '38', 301840000, 1, 1001),
(241, 'B21', '72.00 MÂ²', '38', 301840000, 1, 1001),
(242, 'B23', '72.00 MÂ²', '38', 301840000, 1, 1001),
(243, 'B25', '72.00 MÂ²', '38', 301840000, 1, 1001),
(244, 'B27', '72.00 MÂ²', '38', 301840000, 1, 1001),
(245, 'B29', '72.00 MÂ²', '38', 301840000, 1, 1001),
(246, 'A1', '84.00 MÂ²', '50', 377080000, 1, 1001),
(247, 'A3', '84.00 MÂ²', '50', 377080000, 1, 1001),
(248, 'A5', '84.00 MÂ²', '50', 377080000, 1, 1001),
(249, 'A7', '84.00 MÂ²', '50', 377080000, 1, 1001),
(250, 'A9', '84.00 MÂ²', '50', 377080000, 1, 1001),
(251, 'A11', '84.00 MÂ²', '50', 377080000, 1, 1001),
(252, 'A13', '84.00 MÂ²', '50', 377080000, 1, 1001),
(253, 'A15', '84.00 MÂ²', '50', 377080000, 1, 1001),
(254, 'A17', '84.00 MÂ²', '50', 377080000, 1, 1001),
(255, 'A19', '84.00 MÂ²', '50', 377080000, 1, 1001),
(256, 'A21', '84.00 MÂ²', '50', 377080000, 1, 1001),
(257, 'A2', '84.00 MÂ²', '50', 377080000, 1, 1001),
(258, 'A4', '84.00 MÂ²', '50', 377080000, 1, 1001),
(259, 'A6', '84.00 MÂ²', '50', 377080000, 1, 1001),
(260, 'A8', '84.00 MÂ²', '50', 377080000, 1, 1001),
(261, 'A10', '84.00 MÂ²', '50', 377080000, 1, 1001),
(262, 'A12', '84.00 MÂ²', '50', 377080000, 1, 1001),
(263, 'A14', '84.00 MÂ²', '50', 377080000, 1, 1001),
(264, 'A16', '84.00 MÂ²', '50', 377080000, 1, 1001),
(265, 'A18', '84.00 MÂ²', '50', 377080000, 1, 1001),
(266, 'A20', '84.00 MÂ²', '50', 377080000, 1, 1001),
(267, 'A22', '84.00 MÂ²', '50', 377080000, 1, 1001),
(2001, 'A1', '125.00 MÂ²', '60', 737000000, 1, 1002);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kpr`
--

CREATE TABLE `tbl_kpr` (
  `id_kpr` int(30) NOT NULL,
  `jumlah_pinjaman` varchar(30) NOT NULL,
  `jangka_waktu` varchar(30) NOT NULL,
  `bunga` varchar(30) NOT NULL,
  `angsuran` varchar(30) NOT NULL,
  `id_bank` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kpr`
--

INSERT INTO `tbl_kpr` (`id_kpr`, `jumlah_pinjaman`, `jangka_waktu`, `bunga`, `angsuran`, `id_bank`) VALUES
(902, 'Rp 100,000,000.00', '11 tahun', '6,75%', 'Rp 1,075,349.00', 1001),
(903, 'Rp 100,000,000.00', '12 Tahun', '6,75%', 'Rp 1,015,103.00', 1001),
(904, 'Rp 100,000,000.00', '13 Tahun', '6,75%', 'Rp 964,580.00', 1001),
(905, 'Rp 100,000,000.00', '14 Tahun', '6,75%', 'Rp 921,693.00', 1001),
(906, 'Rp 150,000,000.00', '10 Tahun', '6,75%', 'Rp 1,722,362.00', 1001),
(907, 'Rp 150,000,000.00', '11 tahun', '6,75%', 'Rp 1,613,023.00', 1001),
(908, 'Rp 150,000,000.00', '12 Tahun', '6,75%', 'Rp 1,522,654.00', 1001),
(909, 'Rp 150,000,000.00', '13 Tahun', '6,75%', 'Rp 1,446,870.00', 1001),
(910, 'Rp 150,000,000.00', '14 Tahun', '6,75%', 'Rp 1,382,540.00', 1001),
(911, 'Rp 200,000,000.00', '10 Tahun', '6,75%', 'Rp 2,296,482.00', 1001),
(912, 'Rp 200,000,000.00', '11 tahun', '6,75%', 'Rp 2,150,697.00', 1001),
(913, 'Rp 200,000,000.00', '12 Tahun', '6,75%', 'Rp 2,030,205.00', 1001),
(914, 'Rp 200,000,000.00', '13 Tahun', '6,75%', 'Rp 1,929,161.00', 1001),
(915, 'Rp 200,000,000.00', '14 Tahun', '6,75%', 'Rp 1,843,386.00', 1001),
(916, 'Rp 300,000,000.00', '10 Tahun', '6,75%', 'Rp 3.444,723.00', 1001),
(917, 'Rp 300,000,000.00', '11 Tahun', '6,75%', 'Rp 3,226,046.00', 1001),
(918, 'Rp 300,000,000.00', '12 Tahun', '6,75%', 'Rp 3,045,308.00', 1001),
(919, 'Rp 300,000,000.00', '13 Tahun', '6,75%', 'Rp 2,893,741.00', 1001),
(920, 'Rp 300,000,000.00', '14 Tahun', '6,75%', 'Rp 2,765,079.00', 1001),
(921, 'Rp 350,000,000.00', '10 Tahun', '6,75%', 'Rp 4,018,844.00', 1001),
(922, 'Rp 350,000,000.00', '11 tahun', '6,75%', 'Rp 3,763,720.00', 1001),
(923, 'Rp 350,000,000.00', '12 Tahun', '6,75%', 'Rp 3,552,859.00', 1001),
(924, 'Rp 350,000,000.00', '13 Tahun', '6,75%', 'Rp 3,376,031.00', 1001),
(925, 'Rp 350,000,000.00', '14 Tahun', '6,75%', 'Rp 3,225,926.00', 1001),
(926, 'Rp 400,000,000.00', '10 Tahun', '6,75%', 'Rp 4,593,965.00', 1001),
(927, 'Rp 400,000,000.00', '11 tahun', '6,75%', 'Rp 4,301,394.00', 1001),
(928, 'Rp 400,000,000.00', '12 Tahun', '6,75%', 'Rp 4,060,411.00', 1001),
(929, 'Rp 400,000,000.00', '13 Tahun', '6,75%', 'Rp 3,858,321.00', 1001),
(930, 'Rp 400,000,000.00', '14 Tahun', '6,75%', 'Rp 3,686,773.00', 1001),
(1001, 'Rp 100,000,000.00', '10 Tahun', '6,75%', 'Rp 1,480,241.00', 1001);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kwitansi`
--

CREATE TABLE `tbl_kwitansi` (
  `No_kwitansi` int(30) NOT NULL,
  `untuk_pembayaran` varchar(30) NOT NULL,
  `jumlah_bayar` varchar(30) NOT NULL,
  `id_member` int(30) NOT NULL,
  `no_pembayaran` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id_member` int(30) NOT NULL,
  `nm_depan` varchar(50) NOT NULL,
  `nm_belakang` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat_member` varchar(100) NOT NULL,
  `TTL_member` date NOT NULL,
  `pekerjaan_member` varchar(50) NOT NULL,
  `status_member` varchar(30) NOT NULL,
  `No_telefonmember` char(20) NOT NULL,
  `foto_member` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `nm_depan`, `nm_belakang`, `email`, `password`, `alamat_member`, `TTL_member`, `pekerjaan_member`, `status_member`, `No_telefonmember`, `foto_member`) VALUES
(112, 'Galih', 'Pratama', 'galihpratama@gmail.com', 'galih', '', '0000-00-00', '', '', '097830772771', ''),
(113, 'alvin', 'isnan', 'alvin.isnan@gmail.com', 'alvin', 'Wonogiri', '0000-00-00', '', '', '097830772771', ''),
(114, 'danang', 'stiawan', 'danang19@gmail.com', 'danang', 'jogja', '0000-00-00', '', '', '097830772771', ''),
(115, 'yoga', 'aji', 'yoga@gmail.com', 'yoga', 'pekalongan', '0000-00-00', '', '', '097830772771', ''),
(1110, 'andini', 'marchella', 'andini2gmail.com', '12345', 'Magelang', '0000-00-00', '', '', '085643932365', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `no_pembayaran` int(30) NOT NULL,
  `jenis_bayar` varchar(30) NOT NULL,
  `jumlah_bayar` int(30) NOT NULL,
  `tanggal_transfer` varchar(30) NOT NULL,
  `bukti_transfer` varchar(30) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `no_transaksi` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`no_pembayaran`, `jenis_bayar`, `jumlah_bayar`, `tanggal_transfer`, `bukti_transfer`, `nama_bank`, `status`, `no_transaksi`) VALUES
(4102, 'Uang Muka', 22110000, '2018-08-09', 'buktiIMG_20180810_224847.jpg', 'KPR', 'Menunggu persetujuan', 101002),
(4103, 'Angsuran 3 (Cash)', 750000000, '2018-08-09', 'buktiIMG_20180810_225106.jpg', 'KPR', 'Menunggu persetujuan', 101002),
(41001, 'Angsuran 2 (Cash)', 366000, '2018-08-10', 'buktiSeledri.jpg', 'KPR', 'Lunas', 1010001);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualan`
--

CREATE TABLE `tbl_penjualan` (
  `no_transaksi` int(30) NOT NULL,
  `nm_pembeli` varchar(50) NOT NULL,
  `jenis_pelunasan` varchar(50) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `lampiran_ktp` varchar(30) NOT NULL,
  `lampiran_npwp` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_member` int(30) NOT NULL,
  `id_perumahan` int(30) NOT NULL,
  `id_kaveling` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penjualan`
--

INSERT INTO `tbl_penjualan` (`no_transaksi`, `nm_pembeli`, `jenis_pelunasan`, `tanggal_transaksi`, `lampiran_ktp`, `lampiran_npwp`, `status`, `id_member`, `id_perumahan`, `id_kaveling`) VALUES
(101002, 'alvin', 'Cash', '2018-08-11', '828-IMG_20180810_224921.jpg', '89-IMG_20180810_224912.jpg', 'Proses pembayaran', 113, 1002, 203),
(101003, 'danang stiawan', 'Cash', '2018-08-11', '1558-IMG_20180810_225106.jpg', '3586-IMG_20180810_224912.jpg', 'Diajukan', 114, 1001, 219),
(101004, 'yoga', 'KPR', '2018-08-14', '7781-IMG_20180810_225106.jpg', '6456-IMG_20180810_224921.jpg', 'Diajukan', 115, 1002, 214),
(1010001, 'Andini Marchella', 'Cash', '2018-08-10', '1584-WhatsApp Image 2018-07-31', '6218-WhatsApp Image 2018-07-31', 'Proses pembayaran', 1110, 1001, 218);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perumahan`
--

CREATE TABLE `tbl_perumahan` (
  `id_perumahan` int(30) NOT NULL,
  `nama_perumahan` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `lokasi_perumahan` varchar(100) NOT NULL,
  `daftar_tiperumah` varchar(30) NOT NULL,
  `Jumlah_kaveling` int(20) NOT NULL,
  `spesifikasi_teknis` longtext NOT NULL,
  `luas_tanah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_perumahan`
--

INSERT INTO `tbl_perumahan` (`id_perumahan`, `nama_perumahan`, `gambar`, `lokasi_perumahan`, `daftar_tiperumah`, `Jumlah_kaveling`, `spesifikasi_teknis`, `luas_tanah`) VALUES
(1001, 'Nayara Citra', '3877-site asoka.jpg', 'Tempursari, Klaten, Jawa Tengah', '60,80,100', 12, '', '70,000.00MÂ²'),
(1002, 'Adara Citra', '560-siteplan_web_adara.jpg', 'Jl. Adara Citra, Tundan, Purwomartani, Kalasan, Sleman Regency, Special Region of Yogyakarta 55571', '50,60,70', 20, '', '20,000.00MÂ²'),
(1003, 'Aruna Citra', '8496-aruna.jpg', 'Jl. Pramuka No.161, Cokro Gedok, Sidoarum, Godean, Kabupaten Sleman, Daerah Istimewa Yogyakarta 5526', '70,90,125', 22, '', '20,000.00MÂ²'),
(1004, 'Asoka Citra', '4947-site asoka.jpg', 'Sambiroto, Purwomartani, Kalasan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571', '100', 50, '', '70,000.00MÂ²');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_progres_pembangunan`
--

CREATE TABLE `tbl_progres_pembangunan` (
  `id_progres` int(30) NOT NULL,
  `tahap` varchar(50) NOT NULL,
  `tanggal_progres` varchar(30) NOT NULL,
  `target_selesai` varchar(30) NOT NULL,
  `mulai_pembangunan` varchar(30) NOT NULL,
  `progres` varchar(30) NOT NULL,
  `id_member` int(30) NOT NULL,
  `No_penjualan` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekap_penjualan`
--

CREATE TABLE `tbl_rekap_penjualan` (
  `No_penjualan` int(30) NOT NULL,
  `tanggal` date NOT NULL,
  `konsumen` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `jenis_pelunasan` varchar(50) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `tgl_acckpr` varchar(30) NOT NULL,
  `deadline_acckpr` varchar(30) NOT NULL,
  `acc_desain` varchar(30) NOT NULL,
  `deadline_add` varchar(30) NOT NULL,
  `prod_versispp` varchar(30) NOT NULL,
  `realisasi` varchar(30) NOT NULL,
  `pelaksana` varchar(50) NOT NULL,
  `tgl_spp` varchar(30) NOT NULL,
  `No_pegawai` int(30) NOT NULL,
  `id_perumahan` int(30) NOT NULL,
  `id_kaveling` int(30) NOT NULL,
  `no_transaksi` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`No_pegawai`);

--
-- Indexes for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD PRIMARY KEY (`id_bank`),
  ADD KEY `id_bank` (`id_bank`);

--
-- Indexes for table `tbl_kaveling`
--
ALTER TABLE `tbl_kaveling`
  ADD PRIMARY KEY (`id_kaveling`),
  ADD KEY `Tbl_kaveling_fk0` (`id_perumahan`);

--
-- Indexes for table `tbl_kpr`
--
ALTER TABLE `tbl_kpr`
  ADD PRIMARY KEY (`id_kpr`),
  ADD KEY `id_kpr` (`id_kpr`),
  ADD KEY `id_bank` (`id_bank`);

--
-- Indexes for table `tbl_kwitansi`
--
ALTER TABLE `tbl_kwitansi`
  ADD PRIMARY KEY (`No_kwitansi`),
  ADD KEY `Tbl_kwitansi_fk0` (`id_member`),
  ADD KEY `Tbl_kwitansi_fk1` (`no_pembayaran`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`no_pembayaran`),
  ADD KEY `Tbl_pembayaran_fk0` (`no_transaksi`);

--
-- Indexes for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `Tbl_pembelian_fk0` (`id_member`),
  ADD KEY `Tbl_pembelian_fk1` (`id_perumahan`),
  ADD KEY `Tbl_pembelian_fk2` (`id_kaveling`);

--
-- Indexes for table `tbl_perumahan`
--
ALTER TABLE `tbl_perumahan`
  ADD PRIMARY KEY (`id_perumahan`);

--
-- Indexes for table `tbl_progres_pembangunan`
--
ALTER TABLE `tbl_progres_pembangunan`
  ADD PRIMARY KEY (`id_progres`),
  ADD KEY `Tbl_progres_pembangunan_fk0` (`id_member`),
  ADD KEY `No_penjualan` (`No_penjualan`);

--
-- Indexes for table `tbl_rekap_penjualan`
--
ALTER TABLE `tbl_rekap_penjualan`
  ADD PRIMARY KEY (`No_penjualan`),
  ADD KEY `Tbl_penjulan_fk0` (`No_pegawai`),
  ADD KEY `Tbl_penjulan_fk1` (`id_perumahan`),
  ADD KEY `Tbl_penjulan_fk2` (`id_kaveling`),
  ADD KEY `Tbl_penjulan_fk3` (`no_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kpr`
--
ALTER TABLE `tbl_kpr`
  MODIFY `id_kpr` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `tbl_progres_pembangunan`
--
ALTER TABLE `tbl_progres_pembangunan`
  MODIFY `id_progres` int(30) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_kaveling`
--
ALTER TABLE `tbl_kaveling`
  ADD CONSTRAINT `Tbl_kaveling_fk0` FOREIGN KEY (`id_perumahan`) REFERENCES `tbl_perumahan` (`id_perumahan`);

--
-- Constraints for table `tbl_kpr`
--
ALTER TABLE `tbl_kpr`
  ADD CONSTRAINT `tbl_kpr_ibfk_1` FOREIGN KEY (`id_bank`) REFERENCES `tbl_bank` (`id_bank`);

--
-- Constraints for table `tbl_kwitansi`
--
ALTER TABLE `tbl_kwitansi`
  ADD CONSTRAINT `Tbl_kwitansi_fk0` FOREIGN KEY (`id_member`) REFERENCES `tbl_member` (`id_member`),
  ADD CONSTRAINT `Tbl_kwitansi_fk1` FOREIGN KEY (`no_pembayaran`) REFERENCES `tbl_pembayaran` (`no_pembayaran`);

--
-- Constraints for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD CONSTRAINT `Tbl_pembayaran_fk0` FOREIGN KEY (`no_transaksi`) REFERENCES `tbl_penjualan` (`no_transaksi`);

--
-- Constraints for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD CONSTRAINT `Tbl_pembelian_fk0` FOREIGN KEY (`id_member`) REFERENCES `tbl_member` (`id_member`),
  ADD CONSTRAINT `Tbl_pembelian_fk1` FOREIGN KEY (`id_perumahan`) REFERENCES `tbl_perumahan` (`id_perumahan`),
  ADD CONSTRAINT `Tbl_pembelian_fk2` FOREIGN KEY (`id_kaveling`) REFERENCES `tbl_kaveling` (`id_kaveling`);

--
-- Constraints for table `tbl_progres_pembangunan`
--
ALTER TABLE `tbl_progres_pembangunan`
  ADD CONSTRAINT `Tbl_progres_pembangunan_fk0` FOREIGN KEY (`id_member`) REFERENCES `tbl_member` (`id_member`),
  ADD CONSTRAINT `Tbl_progres_pembangunan_fk1` FOREIGN KEY (`No_penjualan`) REFERENCES `tbl_rekap_penjualan` (`No_penjualan`),
  ADD CONSTRAINT `tbl_progres_pembangunan_ibfk_1` FOREIGN KEY (`No_penjualan`) REFERENCES `tbl_rekap_penjualan` (`No_penjualan`);

--
-- Constraints for table `tbl_rekap_penjualan`
--
ALTER TABLE `tbl_rekap_penjualan`
  ADD CONSTRAINT `Tbl_penjulan_fk0` FOREIGN KEY (`No_pegawai`) REFERENCES `tbl_admin` (`No_pegawai`),
  ADD CONSTRAINT `Tbl_penjulan_fk1` FOREIGN KEY (`id_perumahan`) REFERENCES `tbl_perumahan` (`id_perumahan`),
  ADD CONSTRAINT `Tbl_penjulan_fk2` FOREIGN KEY (`id_kaveling`) REFERENCES `tbl_kaveling` (`id_kaveling`),
  ADD CONSTRAINT `Tbl_penjulan_fk3` FOREIGN KEY (`no_transaksi`) REFERENCES `tbl_penjualan` (`no_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
