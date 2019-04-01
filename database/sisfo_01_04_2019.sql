-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 09:37 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo_akper`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama_lengkap` varchar(190) NOT NULL,
  `jk` enum('1','2') NOT NULL,
  `tmpt_lahir` varchar(110) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `foto_dosen` varchar(100) NOT NULL,
  `tahun_masuk` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_lengkap`, `jk`, `tmpt_lahir`, `tgl_lahir`, `alamat`, `foto_dosen`, `tahun_masuk`, `email`, `password`, `id_kelas`) VALUES
(1, 'Mubarok', '2', 'Cirebon', '2019-03-12', 'Buntet Pesantren', 'foto.jpg', '2012', 'anak@gmail.com', '', 3),
(2, 'Mubarokk', '1', 'Cirebon', '2019-03-19', 'Buntet', 'smsl.jpg', '2012', 'Buntet', 'indonesia', 0),
(3, 'Asep', '2', 'CIREBON', '2019-04-01', 'Jembatan besi jaya no. 3', '50527355_2313093962055313_2973906858365943808_o.jpg', '2011', 'Jembatan besi jaya no. 3', 'password', 0),
(4, 'Alejandro Martin', '1', 'CIREBON', '2019-03-26', '533 Mount Kemble Ave', 'angpadi1.jpg', '2010', '533 Mount Kemble Ave', 'indonesi', 0),
(9, 'Dikky Martin', '1', 'CIREBON', '2019-03-18', '533 Mount Kemble Ave', '', '2010', 'asasaasasasa@yahoo.com', 'indonesia123A!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(70) NOT NULL,
  `kode_kelas` varchar(50) NOT NULL,
  `keterangan_kelas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kode_kelas`, `keterangan_kelas`) VALUES
(3, 'Saefudin Hardi', '230903', 'kalskl'),
(6, 'TI-PI-2016', 'TI392', 'Kelas Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `kode_transaksi`
--

CREATE TABLE `kode_transaksi` (
  `id_kode_transaksi` int(11) NOT NULL,
  `kode_transaksi` varchar(191) NOT NULL,
  `nama_transaksi` varchar(191) NOT NULL,
  `tujuan_transaksi` enum('mhs','dosen') NOT NULL,
  `jumlah_transaksi` float NOT NULL,
  `deskripsi_transaksi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_transaksi`
--

INSERT INTO `kode_transaksi` (`id_kode_transaksi`, `kode_transaksi`, `nama_transaksi`, `tujuan_transaksi`, `jumlah_transaksi`, `deskripsi_transaksi`) VALUES
(1, '123', 'Pembayaran SKS', 'mhs', 75000, 'Nya pembayaran SKS atuh, maenya teu ngarti!!!');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama_lengkap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewarganegaraan` enum('WNI','WNA') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` enum('L','P') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinggi_badan` double DEFAULT NULL,
  `berat_badan` double DEFAULT NULL,
  `alamat` mediumtext COLLATE utf8mb4_unicode_ci,
  `kode_pos` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmpt_lahir` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nama_ayah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ibu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info_dari` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_asal_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_asal_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_diri` mediumtext COLLATE utf8mb4_unicode_ci,
  `foto_ijazah` mediumtext COLLATE utf8mb4_unicode_ci,
  `foto_kesehatan` mediumtext COLLATE utf8mb4_unicode_ci,
  `validasi_pembayaran` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `first_time_login` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `level` enum('pmb_baru','pmb_lamah') COLLATE utf8mb4_unicode_ci DEFAULT 'pmb_baru',
  `id_tahun_ajaran` int(11) NOT NULL,
  `tahun_masuk` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama_lengkap`, `email`, `password`, `kewarganegaraan`, `jk`, `tinggi_badan`, `berat_badan`, `alamat`, `kode_pos`, `tmpt_lahir`, `tgl_lahir`, `nama_ayah`, `nama_ibu`, `no_hp1`, `no_hp2`, `info_dari`, `nama_asal_sekolah`, `alamat_asal_sekolah`, `foto_diri`, `foto_ijazah`, `foto_kesehatan`, `validasi_pembayaran`, `first_time_login`, `level`, `id_tahun_ajaran`, `tahun_masuk`, `id_kelas`) VALUES
(226, 748273, 'Casgoni Bin Laden', 'casgoni@gmail.com', '$2y$10$Dq0d13Q9wAcwLs1I/Wu/HOfCl4JFwJ7jIbdn/8wIBVp5g395k885G', 'WNA', 'L', 31, 32, 'Desa Bayalangu', '39283', 'CIREBON', '0000-00-00', 'Nasoni', 'N', '0818283728', '0827182838', 'Sahabat', 'Smk NU mekanika', 'Buntet Pesantren', NULL, NULL, NULL, '0', '1', 'pmb_baru', 1, 1, 6),
(227, 832942, 'Deden yayaya', 'amal@GMAIL.COM', '$2y$10$oIvvWHMtgtiEi8d.N/8m0O61xUe1BabqjA6uAa0RoShGOf8G7tbte', 'WNA', 'L', 32, 32, 'CIREBON', '07960', 'CIREBON', '0000-00-00', 'Nasoni', 'ksjakjk', '081288338838', '081288338838', 'de', 'Smk NU mekanika', 'Buntet Pesantren', 'amal2.jpg', NULL, NULL, '0', '1', 'pmb_baru', 1, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `mapel_pmb`
--

CREATE TABLE `mapel_pmb` (
  `id_mapel_pmb` int(11) NOT NULL,
  `mapel_pmb_code` varchar(45) NOT NULL,
  `mapel_pmb_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mapel_pmb`
--

INSERT INTO `mapel_pmb` (`id_mapel_pmb`, `mapel_pmb_code`, `mapel_pmb_name`) VALUES
(1, 'BI', 'Bahasa Indonesia'),
(2, 'MTK', 'Matematika'),
(3, 'IPA', 'Ilmu Pengetahuan Alam'),
(4, 'BING', 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `menu_code` varchar(150) NOT NULL,
  `menu_name` varchar(150) DEFAULT NULL,
  `is_parent` enum('0','1') DEFAULT '1',
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu_has_role`
--

CREATE TABLE `menu_has_role` (
  `id_menu` int(11) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_ujian_pmb`
--

CREATE TABLE `nilai_ujian_pmb` (
  `id_nilai_ujian_pmb` int(11) NOT NULL,
  `nilai` double NOT NULL,
  `id_pmb` int(11) NOT NULL,
  `id_mapel_pmb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pmb`
--

CREATE TABLE `pmb` (
  `id_pmb` int(11) NOT NULL,
  `nama_lengkap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewarganegaraan` enum('WNI','WNA') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` enum('L','P') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinggi_badan` double DEFAULT NULL,
  `berat_badan` double DEFAULT NULL,
  `alamat` mediumtext COLLATE utf8mb4_unicode_ci,
  `kode_pos` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmpt_lahir` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nama_ayah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ibu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info_dari` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_asal_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_asal_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_diri` mediumtext COLLATE utf8mb4_unicode_ci,
  `foto_ijazah` mediumtext COLLATE utf8mb4_unicode_ci,
  `foto_kesehatan` mediumtext COLLATE utf8mb4_unicode_ci,
  `validasi_pembayaran` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `first_time_login` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `level` enum('pmb_baru','pmb_lamah') COLLATE utf8mb4_unicode_ci DEFAULT 'pmb_baru',
  `is_active` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `no_peserta` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_lulus` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_ajaran_id_tahun_ajaran` int(11) NOT NULL,
  `status_data` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pmb`
--

INSERT INTO `pmb` (`id_pmb`, `nama_lengkap`, `email`, `password`, `kewarganegaraan`, `jk`, `tinggi_badan`, `berat_badan`, `alamat`, `kode_pos`, `tmpt_lahir`, `tgl_lahir`, `nama_ayah`, `nama_ibu`, `no_hp1`, `no_hp2`, `info_dari`, `nama_asal_sekolah`, `alamat_asal_sekolah`, `foto_diri`, `foto_ijazah`, `foto_kesehatan`, `validasi_pembayaran`, `first_time_login`, `level`, `is_active`, `no_peserta`, `is_lulus`, `tahun_ajaran_id_tahun_ajaran`, `status_data`) VALUES
(2, 'Arthur', 'dev@akper.ac.id', '$2y$10$MWBB48WrJVaOrl3jSr3nZ.3YMCtUAebnvTnUu/Dy.I4DXRyTYo9ZW', 'WNA', 'P', 75, 20, 'Atque odio inventore', '58', 'In occaecat id autem', '1990-01-14', 'Et omnis adipisci hi', 'Labore labore ration', '85', '23', 'Illum cumque eligen', 'Labore labore et pro', 'Fugit nihil blandit', 'photo_2019-02-06_15-15-12.jpg', 'photo_2019-02-06_15-15-12.jpg', 'photo_2019-02-06_15-15-12.jpg', '0', '1', 'pmb_baru', '1', NULL, NULL, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role_name`) VALUES
(1, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_user`
--

CREATE TABLE `role_has_user` (
  `id_role` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_has_user`
--

INSERT INTO `role_has_user` (`id_role`, `id_user`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `tahun_ajarancol` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun_ajaran`, `tahun_ajarancol`) VALUES
(1, '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `ujian_pmb`
--

CREATE TABLE `ujian_pmb` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `id_mapel_pmb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian_pmb`
--

INSERT INTO `ujian_pmb` (`id_tahun_ajaran`, `id_mapel_pmb`) VALUES
(1, 1),
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(150) DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `is_active` enum('0','1') DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `is_active`) VALUES
(1, 'administrator', '$2y$10$DUNJjuYZMj.nWin5hFKfceBepoe7n7LwdBAyjMJUHvM9DbX.0AFRm', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kode_transaksi`
--
ALTER TABLE `kode_transaksi`
  ADD PRIMARY KEY (`id_kode_transaksi`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_mahasiswa_tahun_ajaran1_idx` (`id_tahun_ajaran`),
  ADD KEY `fk_mahasiswa_tahun_ajaran2_idx` (`tahun_masuk`);

--
-- Indexes for table `mapel_pmb`
--
ALTER TABLE `mapel_pmb`
  ADD PRIMARY KEY (`id_mapel_pmb`),
  ADD UNIQUE KEY `mapel_pmb_code_UNIQUE` (`mapel_pmb_code`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `menu_has_role`
--
ALTER TABLE `menu_has_role`
  ADD PRIMARY KEY (`id_menu`,`id_role`),
  ADD KEY `fk_menu_has_role_role1_idx` (`id_role`),
  ADD KEY `fk_menu_has_role_menu1_idx` (`id_menu`);

--
-- Indexes for table `nilai_ujian_pmb`
--
ALTER TABLE `nilai_ujian_pmb`
  ADD PRIMARY KEY (`id_nilai_ujian_pmb`),
  ADD KEY `fk_nilai_ujian_pmb_pmb1_idx` (`id_pmb`),
  ADD KEY `fk_nilai_ujian_pmb_mapel_pmb1_idx` (`id_mapel_pmb`);

--
-- Indexes for table `pmb`
--
ALTER TABLE `pmb`
  ADD PRIMARY KEY (`id_pmb`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `no_peserta_UNIQUE` (`no_peserta`),
  ADD KEY `fk_pmb_tahun_ajaran1_idx` (`tahun_ajaran_id_tahun_ajaran`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `role_has_user`
--
ALTER TABLE `role_has_user`
  ADD PRIMARY KEY (`id_role`,`id_user`),
  ADD KEY `fk_role_has_user_user1_idx` (`id_user`),
  ADD KEY `fk_role_has_user_role_idx` (`id_role`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- Indexes for table `ujian_pmb`
--
ALTER TABLE `ujian_pmb`
  ADD PRIMARY KEY (`id_tahun_ajaran`,`id_mapel_pmb`),
  ADD KEY `fk_ujian_pmb_2_idx` (`id_mapel_pmb`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kode_transaksi`
--
ALTER TABLE `kode_transaksi`
  MODIFY `id_kode_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `mapel_pmb`
--
ALTER TABLE `mapel_pmb`
  MODIFY `id_mapel_pmb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_ujian_pmb`
--
ALTER TABLE `nilai_ujian_pmb`
  MODIFY `id_nilai_ujian_pmb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pmb`
--
ALTER TABLE `pmb`
  MODIFY `id_pmb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fk_mahasiswa_tahun_ajaran1` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mahasiswa_tahun_ajaran2` FOREIGN KEY (`tahun_masuk`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `menu_has_role`
--
ALTER TABLE `menu_has_role`
  ADD CONSTRAINT `fk_menu_has_role_menu1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_menu_has_role_role1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nilai_ujian_pmb`
--
ALTER TABLE `nilai_ujian_pmb`
  ADD CONSTRAINT `fk_nilai_ujian_pmb_mapel_pmb1` FOREIGN KEY (`id_mapel_pmb`) REFERENCES `mapel_pmb` (`id_mapel_pmb`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nilai_ujian_pmb_pmb1` FOREIGN KEY (`id_pmb`) REFERENCES `pmb` (`id_pmb`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pmb`
--
ALTER TABLE `pmb`
  ADD CONSTRAINT `fk_pmb_tahun_ajaran1` FOREIGN KEY (`tahun_ajaran_id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `role_has_user`
--
ALTER TABLE `role_has_user`
  ADD CONSTRAINT `fk_role_has_user_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_role_has_user_user1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ujian_pmb`
--
ALTER TABLE `ujian_pmb`
  ADD CONSTRAINT `fk_ujian_pmb_1` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ujian_pmb_2` FOREIGN KEY (`id_mapel_pmb`) REFERENCES `mapel_pmb` (`id_mapel_pmb`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
