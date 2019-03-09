-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: sisfo_akper
-- ------------------------------------------------------
-- Server version 	5.5.5-10.3.13-MariaDB-1:10.3.13+maria~bionic-log
-- Date: Fri, 22 Feb 2019 16:16:39 +0700

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `menu`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `menu_code` varchar(150) NOT NULL,
  `menu_name` varchar(150) DEFAULT NULL,
  `is_parent` enum('0','1') DEFAULT '1',
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `menu` with 0 row(s)
--

--
-- Table structure for table `mapel_pmb`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mapel_pmb` (
  `id_mapel_pmb` int(11) NOT NULL AUTO_INCREMENT,
  `mapel_pmb_code` varchar(45) NOT NULL,
  `mapel_pmb_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_mapel_pmb`),
  UNIQUE KEY `mapel_pmb_code_UNIQUE` (`mapel_pmb_code`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mapel_pmb`
--

LOCK TABLES `mapel_pmb` WRITE;
/*!40000 ALTER TABLE `mapel_pmb` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `mapel_pmb` VALUES (1,'BI','Bahasa Indonesia'),(2,'MTK','Matematika'),(3,'IPA','Ilmu Pengetahuan Alam'),(4,'BING','Bahasa Inggris');
/*!40000 ALTER TABLE `mapel_pmb` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `mapel_pmb` with 4 row(s)
--

--
-- Table structure for table `menu_has_role`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_has_role` (
  `id_menu` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  PRIMARY KEY (`id_menu`,`id_role`),
  KEY `fk_menu_has_role_role1_idx` (`id_role`),
  KEY `fk_menu_has_role_menu1_idx` (`id_menu`),
  CONSTRAINT `fk_menu_has_role_menu1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_menu_has_role_role1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_has_role`
--

LOCK TABLES `menu_has_role` WRITE;
/*!40000 ALTER TABLE `menu_has_role` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `menu_has_role` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `menu_has_role` with 0 row(s)
--

--
-- Table structure for table `ujian_pmb`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujian_pmb` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `id_mapel_pmb` int(11) NOT NULL,
  PRIMARY KEY (`id_tahun_ajaran`,`id_mapel_pmb`),
  KEY `fk_ujian_pmb_2_idx` (`id_mapel_pmb`),
  CONSTRAINT `fk_ujian_pmb_1` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_ujian_pmb_2` FOREIGN KEY (`id_mapel_pmb`) REFERENCES `mapel_pmb` (`id_mapel_pmb`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujian_pmb`
--

LOCK TABLES `ujian_pmb` WRITE;
/*!40000 ALTER TABLE `ujian_pmb` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `ujian_pmb` VALUES (1,1),(1,2),(1,3),(1,4);
/*!40000 ALTER TABLE `ujian_pmb` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `ujian_pmb` with 4 row(s)
--

--
-- Table structure for table `user`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `is_active` enum('0','1') DEFAULT '1',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `user` VALUES (1,'administrator','$2y$10$DUNJjuYZMj.nWin5hFKfceBepoe7n7LwdBAyjMJUHvM9DbX.0AFRm','1');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `user` with 1 row(s)
--

--
-- Table structure for table `mahasiswa`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewarganegaraan` enum('WNI','WNA') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` enum('L','P') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinggi_badan` double DEFAULT NULL,
  `berat_badan` double DEFAULT NULL,
  `alamat` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `foto_diri` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_ijazah` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_kesehatan` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mahasiswa`
--

LOCK TABLES `mahasiswa` WRITE;
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `mahasiswa` with 0 row(s)
--

--
-- Table structure for table `role_has_user`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_user` (
  `id_role` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_role`,`id_user`),
  KEY `fk_role_has_user_user1_idx` (`id_user`),
  KEY `fk_role_has_user_role_idx` (`id_role`),
  CONSTRAINT `fk_role_has_user_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_role_has_user_user1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_user`
--

LOCK TABLES `role_has_user` WRITE;
/*!40000 ALTER TABLE `role_has_user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `role_has_user` VALUES (1,1);
/*!40000 ALTER TABLE `role_has_user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `role_has_user` with 1 row(s)
--

--
-- Table structure for table `nilai_ujian_pmb`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nilai_ujian_pmb` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nilai_ujian_pmb`
--

LOCK TABLES `nilai_ujian_pmb` WRITE;
/*!40000 ALTER TABLE `nilai_ujian_pmb` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `nilai_ujian_pmb` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `nilai_ujian_pmb` with 0 row(s)
--

--
-- Table structure for table `tahun_ajaran`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_ajarancol` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_tahun_ajaran`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tahun_ajaran`
--

LOCK TABLES `tahun_ajaran` WRITE;
/*!40000 ALTER TABLE `tahun_ajaran` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tahun_ajaran` VALUES (1,'2019/2020');
/*!40000 ALTER TABLE `tahun_ajaran` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tahun_ajaran` with 1 row(s)
--

--
-- Table structure for table `pmb`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pmb` (
  `id_pmb` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewarganegaraan` enum('WNI','WNA') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` enum('L','P') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinggi_badan` double DEFAULT NULL,
  `berat_badan` double DEFAULT NULL,
  `alamat` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `foto_diri` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_ijazah` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_kesehatan` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pmb`
--

LOCK TABLES `pmb` WRITE;
/*!40000 ALTER TABLE `pmb` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `pmb` VALUES (2,'Arthur','dev@akper.ac.id','$2y$10$MWBB48WrJVaOrl3jSr3nZ.3YMCtUAebnvTnUu/Dy.I4DXRyTYo9ZW','WNA','P',75,20,'Atque odio inventore','58','In occaecat id autem','1990-01-14','Et omnis adipisci hi','Labore labore ration','85','23','Illum cumque eligen','Labore labore et pro','Fugit nihil blandit','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','0','1','pmb_baru','1',NULL,NULL,1,'1');
/*!40000 ALTER TABLE `pmb` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `pmb` with 1 row(s)
--

--
-- Table structure for table `role`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `role` VALUES (1,'Administrator');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `role` with 1 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Fri, 22 Feb 2019 16:16:39 +0700
