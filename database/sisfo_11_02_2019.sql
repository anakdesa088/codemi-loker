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

-- Dumping structure for table sisfo_akper.level
CREATE TABLE IF NOT EXISTS `level` (
  `id_level` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `level_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sisfo_akper.level: ~1 rows (approximately)
/*!40000 ALTER TABLE `level` DISABLE KEYS */;
INSERT INTO `level` (`id_level`, `level_name`) VALUES
	(1, 'Administrator');
/*!40000 ALTER TABLE `level` ENABLE KEYS */;

-- Dumping structure for table sisfo_akper.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `menu_code` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_child` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  PRIMARY KEY (`id_menu`),
  UNIQUE KEY `menu_code` (`menu_code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sisfo_akper.menu: ~2 rows (approximately)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`id_menu`, `menu_code`, `menu_name`, `parent_id`, `is_child`) VALUES
	(1, 'backup.database@test_aja', 'Testing aja', NULL, '0'),
	(2, 'backup.database@test_view', 'Test View', NULL, '0');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Dumping structure for table sisfo_akper.menu_level
CREATE TABLE IF NOT EXISTS `menu_level` (
  `id_menu_level` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) unsigned DEFAULT NULL,
  `id_level` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_menu_level`),
  KEY `FK_menu_level_menu` (`id_menu`),
  KEY `FK_menu_level_level` (`id_level`),
  CONSTRAINT `FK_menu_level_level` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FK_menu_level_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sisfo_akper.menu_level: ~1 rows (approximately)
/*!40000 ALTER TABLE `menu_level` DISABLE KEYS */;
INSERT INTO `menu_level` (`id_menu_level`, `id_menu`, `id_level`) VALUES
	(1, 1, 1),
	(2, 2, 1);
/*!40000 ALTER TABLE `menu_level` ENABLE KEYS */;

-- Dumping structure for table sisfo_akper.pendaftaran
CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tempat_lhr` varchar(40) NOT NULL,
  `tanggal_lhr` date NOT NULL,
  `almt_lengkap` text NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `info_dari` varchar(30) NOT NULL,
  `nama_asal_sklh` varchar(60) NOT NULL,
  `almt_asal_sklh` text NOT NULL,
  `kab_asal_sklh` int(90) NOT NULL,
  `foto_ijaza` int(100) NOT NULL,
  `surat_tidak_buta_warna` varchar(100) NOT NULL,
  `foto_pendaftar` varchar(100) NOT NULL,
  `ayah` varchar(70) NOT NULL,
  `ibu` varchar(70) NOT NULL,
  `level` enum('mahasiswa','mahasiswa_baru') NOT NULL,
  PRIMARY KEY (`id_pendaftar`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

-- Dumping data for table sisfo_akper.pendaftaran: ~6 rows (approximately)
/*!40000 ALTER TABLE `pendaftaran` DISABLE KEYS */;
INSERT INTO `pendaftaran` (`id_pendaftar`, `nama_lengkap`, `email`, `password`, `kewarganegaraan`, `jenis_kelamin`, `tinggi_badan`, `berat_badan`, `tempat_lhr`, `tanggal_lhr`, `almt_lengkap`, `kode_pos`, `no_hp`, `info_dari`, `nama_asal_sklh`, `almt_asal_sklh`, `kab_asal_sklh`, `foto_ijaza`, `surat_tidak_buta_warna`, `foto_pendaftar`, `ayah`, `ibu`, `level`) VALUES
	(40, 'Saefudin Hardi', '', '', 'WNI', 'Perempuan', 928, 928, 'Kab. Cirebon', '2018-11-12', 'Dusun 05 RT/RW : 017/005 Bayalangu Lor, Gegesik', 45164, 2147483647, 'Temen', 'Smk Mekanika buntet', 'Bayalangu', 0, 0, '', '', 'Nasoni', 'Rasi', 'mahasiswa'),
	(41, '', 'casgoniedan@yahoo.com', '236874507', 'WNA', 'Laki-Laki', 0, 0, '', '2019-02-07', '', 0, 0, '', '', '', 0, 0, '', '', '', '', 'mahasiswa'),
	(42, 'anam', 'anam@gmail.com', '2124842993', 'WNI', 'Perempuan', 234, 234, 'Jakarta', '2018-12-06', 'saasasa', 11320, 2147483647, 'Temen', 'Smk Mekanika buntet', 'das', 0, 0, '', '', 'Nasoni', 'Rasi', 'mahasiswa'),
	(43, 'Saefudin Hardi', 'casgoniedan@yahoo.com', '1187887686', 'on', 'Laki-Laki', 12, 12, 'Cirebon', '2019-08-02', 'Dusun 05 RT/RW : 017/005 Bayalangu Lor, Gegesik', 45164, 2147483647, 'Saudara', 'Smk Mekanika buntet', 'Asepp', 0, 0, '', '', 'Nasoni', 'Rasi', 'mahasiswa'),
	(44, 'Saefudin Hardi', 'mikarta@yahoo.com', '1454329302', 'on', 'Laki-Laki', 23, 23, 'Kab. Cirebon', '2019-08-02', 'Dusun 05 RT/RW : 017/005 Bayalangu Lor, Gegesik', 45164, 2147483647, 'Temen', 'Smk Mekanika buntet', 'hjhj', 0, 0, '', '', 'Nasoni', 'Rasi', 'mahasiswa'),
	(45, '', 'mikarta@yahoo.com', '726373667', '', '', 0, 0, '', '0000-00-00', '', 0, 0, '', '', '', 0, 0, '', '', '', '', 'mahasiswa');
/*!40000 ALTER TABLE `pendaftaran` ENABLE KEYS */;

-- Dumping structure for table sisfo_akper.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `id_level` int(11) unsigned DEFAULT NULL,
  `is_active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `is_admin_user` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`),
  KEY `id_level` (`id_level`),
  CONSTRAINT `level_on_id_level` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sisfo_akper.user: ~1 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `username`, `password`, `id_level`, `is_active`, `is_admin_user`) VALUES
	(1, 'admin', '$2y$10$ZA13IODjGrefvBaUB8tgQusgjNjSelna/Sm.eb/1aYq1Mw9x6w9se', 1, '1', '0');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
