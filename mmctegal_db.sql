-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2021 at 02:12 PM
-- Server version: 10.2.40-MariaDB-log-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmctegal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `gender`, `no_telepon`, `no_ktp`, `password`, `role_id`) VALUES
(3, 'Muhammad Yusup', 'user', 'Brebes', 'laki-laki', '085700001398', '3328112210950002', 'ee11cbb19052e40b07aac0ca060c23ee', 2),
(8, 'Syaeful Anwar', 'admin', 'Jln. KH Abdillah Rt 14/02 Kalimati Adiwerna Tegal', 'Laki-Laki', '085700001397', '3328112210960002', 'a5630953c5b390de391a362ed6853b77', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE `hubungi` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `masukan` varchar(250) NOT NULL,
  `cabang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hubungi`
--

INSERT INTO `hubungi` (`id`, `nama`, `email`, `masukan`, `cabang`) VALUES
(38, 'Syaeful Anwar', 'anandassyaeful@gmail.com', 'Pelayanan kurang baik', 'Cabang Mejasem'),
(50, 'Ola', 'ola.hillman@gmail.com', 'Hi\r\n\r\nOur Medical-Grade Toenail Clippers is the safest and especially recommended for those with troubles with winding nails, hard nails, two nails, nail cracks, deep nails, thickened nails etc..\r\n\r\nGet yours: thepodiatrist.online\r\n\r\nMany Thanks,\r\n\r\n', 'Cabang Mejasem');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(11) NOT NULL,
  `operasional` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `operasional`, `email`, `telp`) VALUES
(1, 'Senin - Minggu : 06.00 - 24.00', 'mmctegal@gmail.com', '085742802466');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_menu`
--

CREATE TABLE `kategori_menu` (
  `id_kat` int(11) NOT NULL,
  `nama_kat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_menu`
--

INSERT INTO `kategori_menu` (`id_kat`, `nama_kat`) VALUES
(1, 'chocolate'),
(2, 'coffee milk'),
(3, 'fresh milk'),
(4, 'fruit milk'),
(5, 'stmj'),
(7, 'other milk');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_mn` int(11) NOT NULL,
  `nama_mn` varchar(50) NOT NULL,
  `id_kat` int(11) NOT NULL,
  `harga_mn` int(11) NOT NULL,
  `foto_mn` text NOT NULL,
  `ket_mn` varchar(10) NOT NULL,
  `time_mn` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_mn`, `nama_mn`, `id_kat`, `harga_mn`, `foto_mn`, `ket_mn`, `time_mn`) VALUES
(4, 'coffe latte', 1, 10000, 'kopi1.jpg', 'ice', '2021-05-18 17:44:55'),
(5, 'susu sapi', 2, 9000, 'susu2.jpg', 'hot', '2021-05-18 17:58:55'),
(6, 'Strawberry', 3, 9000, 'susu3.jpg', 'ice', '2021-05-19 01:47:56'),
(9, 'madu telor', 5, 10000, 'IMG-20190714-WA0025_(3).jpg', 'ice', '2021-09-03 07:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jumlah`
--

CREATE TABLE `tb_jumlah` (
  `id_alat` int(11) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jumlah`
--

INSERT INTO `tb_jumlah` (`id_alat`, `jumlah`, `waktu`) VALUES
(1, 29, '2021-08-23 07:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keluar`
--

CREATE TABLE `tb_keluar` (
  `id_alat` int(11) NOT NULL,
  `ket` float NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_keluar`
--

INSERT INTO `tb_keluar` (`id_alat`, `ket`, `waktu`) VALUES
(189, 1, '2021-08-18 13:09:33'),
(190, 1, '2021-08-18 13:09:42'),
(191, 1, '2021-08-23 06:56:12'),
(192, 1, '2021-08-23 07:00:33'),
(193, 1, '2021-08-23 07:03:06'),
(194, 1, '2021-08-23 07:04:02'),
(195, 1, '2021-08-23 07:06:12'),
(196, 1, '2021-08-23 07:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_masuk`
--

CREATE TABLE `tb_masuk` (
  `id_alat` int(11) NOT NULL,
  `ket` float NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_masuk`
--

INSERT INTO `tb_masuk` (`id_alat`, `ket`, `waktu`) VALUES
(232, 36.19, '2021-08-23 06:57:40'),
(233, 35.15, '2021-08-23 06:58:14'),
(234, 36.61, '2021-08-23 07:03:14'),
(235, 34.23, '2021-08-23 07:04:11'),
(236, 34.09, '2021-08-23 07:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_mmc`
--

CREATE TABLE `tentang_mmc` (
  `id` int(11) NOT NULL,
  `jasa` varchar(250) NOT NULL,
  `service` varchar(250) NOT NULL,
  `berita` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentang_mmc`
--

INSERT INTO `tentang_mmc` (`id`, `jasa`, `service`, `berita`) VALUES
(1, 'MMC adalah salah satu kedai susu yang berada di Kota Tegal yang menjual berbagai macam varian susu seperti susu sapi, susu kambing dan varian menu lainnya seperti Chocolate, Fruit Milk, Coffe Milk, STMJ dan varian menu lainnya. ', 'MMC selalu mengedepankan rasa nyaman untuk pelanggan nya dibuktikan dengan fasilitas tempat yang nyaman, free WiFi dan area lingkungan yang bersih.', 'ada promo loh di seluruh cabang MMC dengan membeli 1 dapat 1. Jadi ayoo ajak keluarga maupun teman kalian untuk datang di MMC.');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `tanggal_transaksi`, `waktu`) VALUES
(22, '2021-06-29', '2021-06-29 14:38:48'),
(23, '2021-09-03', '2021-09-03 06:46:16'),
(24, '2021-09-03', '2021-09-03 06:51:36'),
(25, '2021-09-03', '2021-09-03 06:52:09'),
(26, '2021-09-03', '2021-09-03 06:57:19'),
(27, '2021-09-03', '2021-09-03 06:57:22'),
(28, '2021-09-03', '2021-09-03 06:59:55'),
(29, '2021-09-06', '2021-09-06 07:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `t_detail_id` int(11) NOT NULL,
  `id_mn` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `harga_mn` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '1= sudah diproses , 0 belum diproses',
  `tanggal_transaksi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`t_detail_id`, `id_mn`, `qty`, `transaksi_id`, `harga_mn`, `status`, `tanggal_transaksi`) VALUES
(33, 4, 2, 22, 10000, '1', '2021-08-17 17:00:00'),
(46, 6, 2, 24, 9000, '1', '2021-09-03 06:51:36'),
(45, 5, 1, 24, 9000, '1', '2021-09-03 06:51:36'),
(44, 6, 1, 23, 9000, '1', '0000-00-00 00:00:00'),
(43, 4, 1, 23, 10000, '1', '0000-00-00 00:00:00'),
(42, 5, 2, 23, 9000, '1', '0000-00-00 00:00:00'),
(47, 5, 1, 25, 9000, '1', '2021-09-03 06:52:09'),
(48, 5, 1, 26, 9000, '1', '2021-09-03 06:57:19'),
(49, 4, 1, 26, 10000, '1', '2021-09-03 06:57:19'),
(50, 6, 2, 26, 9000, '1', '2021-09-03 06:57:19'),
(51, 4, 5, 28, 10000, '1', '2021-09-03 06:59:55'),
(52, 5, 2, 29, 9000, '1', '2021-09-06 07:01:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `kategori_menu`
--
ALTER TABLE `kategori_menu`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_mn`);

--
-- Indexes for table `tb_jumlah`
--
ALTER TABLE `tb_jumlah`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `tb_keluar`
--
ALTER TABLE `tb_keluar`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `tb_masuk`
--
ALTER TABLE `tb_masuk`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `tentang_mmc`
--
ALTER TABLE `tentang_mmc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`t_detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori_menu`
--
ALTER TABLE `kategori_menu`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_mn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_jumlah`
--
ALTER TABLE `tb_jumlah`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_keluar`
--
ALTER TABLE `tb_keluar`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `tb_masuk`
--
ALTER TABLE `tb_masuk`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `tentang_mmc`
--
ALTER TABLE `tentang_mmc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `t_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
