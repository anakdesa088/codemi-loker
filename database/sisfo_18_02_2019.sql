-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping structure for table sisfo_akper.tahun_ajaran
CREATE TABLE IF NOT EXISTS `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_ajarancol` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_tahun_ajaran`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sisfo_akper.tahun_ajaran: ~1 rows (approximately)
/*!40000 ALTER TABLE `tahun_ajaran` DISABLE KEYS */;
INSERT INTO `tahun_ajaran` (`id_tahun_ajaran`, `tahun_ajarancol`) VALUES
	(1, '2019/2020');
/*!40000 ALTER TABLE `tahun_ajaran` ENABLE KEYS */;

-- Dumping structure for table sisfo_akper.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id_mahasiswa`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_mahasiswa_tahun_ajaran1_idx` (`id_tahun_ajaran`),
  KEY `fk_mahasiswa_tahun_ajaran2_idx` (`tahun_masuk`),
  CONSTRAINT `fk_mahasiswa_tahun_ajaran1` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_mahasiswa_tahun_ajaran2` FOREIGN KEY (`tahun_masuk`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sisfo_akper.mahasiswa: ~0 rows (approximately)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;

-- Dumping structure for table sisfo_akper.mapel_pmb
CREATE TABLE IF NOT EXISTS `mapel_pmb` (
  `id_mapel_pmb` int(11) NOT NULL AUTO_INCREMENT,
  `mapel_pmb_code` varchar(45) NOT NULL,
  `mapel_pmb_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_mapel_pmb`),
  UNIQUE KEY `mapel_pmb_code_UNIQUE` (`mapel_pmb_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sisfo_akper.mapel_pmb: ~0 rows (approximately)
/*!40000 ALTER TABLE `mapel_pmb` DISABLE KEYS */;
/*!40000 ALTER TABLE `mapel_pmb` ENABLE KEYS */;

-- Dumping structure for table sisfo_akper.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `menu_code` varchar(150) NOT NULL,
  `menu_name` varchar(150) DEFAULT NULL,
  `is_parent` enum('0','1') DEFAULT '1',
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sisfo_akper.menu: ~0 rows (approximately)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Dumping structure for table sisfo_akper.role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table sisfo_akper.role: ~1 rows (approximately)
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`id_role`, `role_name`) VALUES
	(1, 'Administrator');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

-- Dumping structure for table sisfo_akper.menu_has_role
CREATE TABLE IF NOT EXISTS `menu_has_role` (
  `id_menu` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  PRIMARY KEY (`id_menu`,`id_role`),
  KEY `fk_menu_has_role_role1_idx` (`id_role`),
  KEY `fk_menu_has_role_menu1_idx` (`id_menu`),
  CONSTRAINT `fk_menu_has_role_menu1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_menu_has_role_role1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sisfo_akper.menu_has_role: ~0 rows (approximately)
/*!40000 ALTER TABLE `menu_has_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu_has_role` ENABLE KEYS */;

-- Dumping structure for table sisfo_akper.pmb
CREATE TABLE IF NOT EXISTS `pmb` (
  `id_pmb` int(11) NOT NULL AUTO_INCREMENT,
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
  `status_data` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  PRIMARY KEY (`id_pmb`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `no_peserta_UNIQUE` (`no_peserta`),
  KEY `fk_pmb_tahun_ajaran1_idx` (`tahun_ajaran_id_tahun_ajaran`),
  CONSTRAINT `fk_pmb_tahun_ajaran1` FOREIGN KEY (`tahun_ajaran_id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sisfo_akper.pmb: ~1 rows (approximately)
/*!40000 ALTER TABLE `pmb` DISABLE KEYS */;
INSERT INTO `pmb` (`id_pmb`, `nama_lengkap`, `email`, `password`, `kewarganegaraan`, `jk`, `tinggi_badan`, `berat_badan`, `alamat`, `kode_pos`, `tmpt_lahir`, `tgl_lahir`, `nama_ayah`, `nama_ibu`, `no_hp1`, `no_hp2`, `info_dari`, `nama_asal_sekolah`, `alamat_asal_sekolah`, `foto_diri`, `foto_ijazah`, `foto_kesehatan`, `validasi_pembayaran`, `first_time_login`, `level`, `is_active`, `no_peserta`, `is_lulus`, `tahun_ajaran_id_tahun_ajaran`, `status_data`) VALUES
	(2, 'Arthur', 'dev@akper.ac.id', '$2y$10$MWBB48WrJVaOrl3jSr3nZ.3YMCtUAebnvTnUu/Dy.I4DXRyTYo9ZW', 'WNA', 'P', 75, 20, 'Atque odio inventore', '58', 'In occaecat id autem', '1990-01-14', 'Et omnis adipisci hi', 'Labore labore ration', '85', '23', 'Illum cumque eligen', 'Labore labore et pro', 'Fugit nihil blandit', 'photo_2019-02-06_15-15-12.jpg', 'photo_2019-02-06_15-15-12.jpg', 'photo_2019-02-06_15-15-12.jpg', '0', '1', 'pmb_baru', '1', NULL, NULL, 1, '1');
/*!40000 ALTER TABLE `pmb` ENABLE KEYS */;

-- Dumping structure for table sisfo_akper.nilai_ujian_pmb
CREATE TABLE IF NOT EXISTS `nilai_ujian_pmb` (
  `id_nilai_ujian_pmb` int(11) NOT NULL AUTO_INCREMENT,
  `nilai` double NOT NULL,
  `id_pmb` int(11) NOT NULL,
  `id_mapel_pmb` int(11) NOT NULL,
  PRIMARY KEY (`id_nilai_ujian_pmb`),
  KEY `fk_nilai_ujian_pmb_pmb1_idx` (`id_pmb`),
  KEY `fk_nilai_ujian_pmb_mapel_pmb1_idx` (`id_mapel_pmb`),
  CONSTRAINT `fk_nilai_ujian_pmb_mapel_pmb1` FOREIGN KEY (`id_mapel_pmb`) REFERENCES `mapel_pmb` (`id_mapel_pmb`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_nilai_ujian_pmb_pmb1` FOREIGN KEY (`id_pmb`) REFERENCES `pmb` (`id_pmb`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sisfo_akper.nilai_ujian_pmb: ~0 rows (approximately)
/*!40000 ALTER TABLE `nilai_ujian_pmb` DISABLE KEYS */;
/*!40000 ALTER TABLE `nilai_ujian_pmb` ENABLE KEYS */;


-- Dumping structure for table sisfo_akper.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `is_active` enum('0','1') DEFAULT '1',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table sisfo_akper.user: ~1 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `username`, `password`, `is_active`) VALUES
	(1, 'administrator', '$2y$10$DUNJjuYZMj.nWin5hFKfceBepoe7n7LwdBAyjMJUHvM9DbX.0AFRm', '1');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;


-- Dumping structure for table sisfo_akper.role_has_user
CREATE TABLE IF NOT EXISTS `role_has_user` (
  `id_role` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_role`,`id_user`),
  KEY `fk_role_has_user_user1_idx` (`id_user`),
  KEY `fk_role_has_user_role_idx` (`id_role`),
  CONSTRAINT `fk_role_has_user_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_role_has_user_user1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sisfo_akper.role_has_user: ~1 rows (approximately)
/*!40000 ALTER TABLE `role_has_user` DISABLE KEYS */;
INSERT INTO `role_has_user` (`id_role`, `id_user`) VALUES
	(1, 1);
/*!40000 ALTER TABLE `role_has_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
