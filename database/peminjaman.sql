-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 03:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_perangkat` int(10) NOT NULL,
  `kd_perangkat` varchar(30) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `nma_perangkat` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `stock_perangkat` int(10) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `NUP` varchar(20) NOT NULL,
  `tgl_perolehan` date NOT NULL,
  `asal_perolehan` varchar(35) NOT NULL,
  `rp_aset` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_perangkat`, `kd_perangkat`, `kategori`, `nma_perangkat`, `merk`, `stock_perangkat`, `kondisi`, `NUP`, `tgl_perolehan`, `asal_perolehan`, `rp_aset`) VALUES
(24, '3020102003', 'Mini Bus', 'Mini Bus ', 'Toyota Innova TG40VM/T20VM', 1, 'Baik', '1', '2010-12-27', 'Setditjen Postel', 'Rp. 248,890,000'),
(25, '3020102003', 'Mini Bus', 'Mini Bus', 'Toyota Innovw G A/T', 0, 'Baik', '2', '2006-11-24', 'PT. Anzon Auto Plaza', 'Rp. 199,500,000'),
(26, '3020105007', 'Mobil', 'Mobil Unit Monitoring Frekuensi', 'Ford Everest', 1, 'Baik', '4', '2011-12-22', 'Ditjen SDPPI', 'Rp. 852,728,985'),
(27, '3060309001', 'Antena', 'Antena UHF Portable', 'ETS 3115 (1-18GHz)', 0, 'Baik', '1', '2004-06-08', 'DITJEN POSTEL', 'Rp. 66,000,000'),
(28, '3060309001', 'Antena', 'Antena UHF Portable', 'ETS 3116 (18-40GHz)', 0, 'Baik', '2', '2004-06-08', 'DITJEN POSTEL', 'Rp. 66,000,000'),
(29, '3100102002', 'Laptop', 'Laptop', 'Toshiba Satelit U205-S5034', 5, 'Baik', '5', '2007-04-16', 'CV. Dwi Warna', 'Rp.  19,360,000'),
(30, '3100102002', 'Laptop', 'Laptop', 'HP Pravillion', 1, 'Baik', '9', '2011-09-30', 'PT. Dua Puteri', 'Rp. 10,508,100'),
(31, '3030301072', 'GPS', 'Global Positioning System', 'Germin', 2, 'Baik', '2', '2004-12-31', 'DIP 2004', 'Rp. 3,584,000'),
(32, '3030301072', 'GPS', 'Global Positioning System', 'Germin Oregon', 1, 'Baik', '3', '2010-06-01', 'CV. Nasional', 'Rp. 6,064,000'),
(33, '3060334022', 'RDF', 'Radio Direction Fender', 'R&S DDF205', 1, 'Baik', '1', '2012-02-06', 'Ditjen SDPPI', 'Rp. 1,231,555,544'),
(34, '3060334022', 'RDF', 'Radio Direction Fender', 'R&S DDF007', 1, 'Baik', '2', '2015-12-23', 'PT. Multikom Global', 'Rp. 1,062,050,000'),
(35, '3030301043', 'SPA', 'Spektrum Analyzer', 'Anritsu', 1, 'Baik', '2', '2007-12-10', 'PD. Mustika Indah', 'Rp. 294,595,400'),
(36, '3030301043', 'SPA', 'Spektrum Analyzer', 'AGILENT E4407B', 1, 'Baik', '3', '2004-06-08', 'DITJEN POSTEL', 'rP. 756,450,000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id_file` int(20) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_file`
--

INSERT INTO `tbl_file` (`id_file`, `file`) VALUES
(1, 'LAPORAN_PRAKTIK_KERJA_LAPANGAN21.pdf'),
(3, '07_-_Firewall_Praktikum.pdf'),
(4, '01_Pengenalan_Sistem_Keamanan_Informasi.pdf'),
(5, '08_-_Praktikum_Intrusion_Detection_System.pdf'),
(6, 'SPT_21-25_Juni_2021.pdf'),
(7, 'SPT_21-25_Juni_2021.pdf'),
(8, 'SPT_21-25_Juni_2021.pdf'),
(9, 'SPT_21-25_Juni_2021.pdf'),
(10, 'SPT_21-25_Juni_2021.pdf'),
(11, 'SPT_21-25_Juni_2021.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjam`
--

CREATE TABLE `tbl_peminjam` (
  `id_peminjam` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `name` varchar(35) NOT NULL,
  `nip` bigint(20) NOT NULL,
  `bidang` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_peminjam`
--

INSERT INTO `tbl_peminjam` (`id_peminjam`, `username`, `password`, `name`, `nip`, `bidang`) VALUES
(69, 'sunardi', 'UXIAfVI4AmcAc1RhAWQAPgZjATk=', 'Sunardi', 197108161991031003, 'Sarana dan Pelayanan'),
(72, 'adekurniawan', 'UWABbVMyAjcAMwBi', 'ade kurniawan', 198205072005021001, 'Pemantauan dan Penertiban'),
(74, 'rivan', 'UHIBYFUnAmdRPlAyVmgLNQ==', 'Rivan', 199604302019021003, 'Pemantauan dan Penertiban');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `id_petugas` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id_petugas`, `username`, `password`, `name`) VALUES
(1, 'superadmin', 'UGsNZFQyBWBXOltnB2RdPA==', 'Superadmin'),
(2, 'admin', 'VGUAbFQ9D2JWOVRnUD0JagQ+AGQFbA==', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjam`
--

CREATE TABLE `tbl_pinjam` (
  `id_pinjam` int(30) NOT NULL,
  `id_peminjam` int(30) NOT NULL,
  `id_perangkat` int(30) NOT NULL,
  `jml` int(20) NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `status` enum('0','1','2','') CHARACTER SET latin1 NOT NULL,
  `kegiatan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riwayat`
--

CREATE TABLE `tbl_riwayat` (
  `id` bigint(20) NOT NULL,
  `id_pinjam` int(11) NOT NULL,
  `id_peminjam` int(11) NOT NULL,
  `id_perangkat` int(11) NOT NULL,
  `jml` int(11) NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `status` enum('0','1','2','') CHARACTER SET latin1 NOT NULL,
  `kegiatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_riwayat`
--

INSERT INTO `tbl_riwayat` (`id`, `id_pinjam`, `id_peminjam`, `id_perangkat`, `jml`, `tgl_pinjam`, `tgl_kembali`, `status`, `kegiatan`) VALUES
(59, 59, 69, 29, 2, '2022-08-28 00:04:02', '2022-08-28 00:35:45', '1', 'seminar'),
(60, 60, 69, 29, 2, '2022-08-28 00:37:15', '2022-08-28 00:37:49', '1', 'Seminar'),
(61, 61, 69, 29, 3, '2022-08-28 01:06:02', '2022-08-28 01:06:42', '1', 'Monitoring'),
(62, 62, 69, 33, 1, '2022-08-28 02:57:49', '2022-08-28 02:58:12', '1', 'monitoring'),
(63, 63, 69, 29, 1, '2022-08-28 03:30:47', '2022-08-28 10:10:32', '1', 'memantau'),
(64, 64, 74, 29, 2, '2022-08-28 10:01:43', '2022-08-28 10:10:37', '1', 'Monitoring Spektrum Frekuensi Radio'),
(65, 65, 74, 31, 1, '2022-08-28 10:02:02', '2022-08-28 10:10:39', '1', 'Monitoring Spektrum Frekuensi Radio'),
(66, 66, 74, 31, 1, '2022-08-28 11:26:55', '2022-08-28 11:28:29', '1', 'Monitoring Spektrum Frekuensi Radio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_perangkat`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `tbl_peminjam`
--
ALTER TABLE `tbl_peminjam`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_perangkat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `id_file` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_peminjam`
--
ALTER TABLE `tbl_peminjam`
  MODIFY `id_peminjam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  MODIFY `id_petugas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  MODIFY `id_pinjam` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
