-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: sisfo_akper
-- ------------------------------------------------------
-- Server version 	5.5.5-10.1.38-MariaDB-0ubuntu0.18.04.1
-- Date: Tue, 19 Mar 2019 14:03:48 +0700

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
-- Table structure for table `kode_surat`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kode_surat` (
  `id_kode_surat` int(11) NOT NULL AUTO_INCREMENT,
  `kode_surat` varchar(191) NOT NULL,
  `penjelasan_kode_surat` text,
  PRIMARY KEY (`id_kode_surat`),
  UNIQUE KEY `kode_surat` (`kode_surat`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kode_surat`
--

LOCK TABLES `kode_surat` WRITE;
/*!40000 ALTER TABLE `kode_surat` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `kode_surat` VALUES (1,'001','Surat Yang Tak Penting Lagi');
/*!40000 ALTER TABLE `kode_surat` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `kode_surat` with 1 row(s)
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
  `nim` int(11) DEFAULT NULL,
  `id_pmb` int(11) NOT NULL,
  PRIMARY KEY (`id_mahasiswa`),
  UNIQUE KEY `nim` (`nim`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_mahasiswa_tahun_ajaran1_idx` (`id_tahun_ajaran`),
  KEY `fk_mahasiswa_tahun_ajaran2_idx` (`tahun_masuk`),
  KEY `id_pmb` (`id_pmb`),
  CONSTRAINT `fk_mahasiswa_tahun_ajaran1` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_mahasiswa_tahun_ajaran2` FOREIGN KEY (`tahun_masuk`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mahasiswa`
--

LOCK TABLES `mahasiswa` WRITE;
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `mahasiswa` VALUES (101,'Arthur','dev@akper.ac.id','$2y$10$MWBB48WrJVaOrl3jSr3nZ.3YMCtUAebnvTnUu/Dy.I4DXRyTYo9ZW','WNA','P',75,20,'Atque odio inventore','58','In occaecat id autem','1990-01-14','Et omnis adipisci hi','Labore labore ration','85','23','Illum cumque eligen','Labore labore et pro','Fugit nihil blandit','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,20194471,0),(102,'Miss Pink Gleason Sr.','lemuel.beahan@gmail.com','$2y$10$2THmWSIBN51RmtsmKsvrZ.AZgPm3xn8HPQIVlYNKhkpvWzONWlR36','WNA','P',186,73,'68949 Hayes Oval\nSimonismouth, MT 96279','47561','South Evansland','1991-12-18','Prof. Jalyn Bashirian','Lucas Braun Sr.','+1253099112869','+6616232927461','Teman','Dr. Armando Hand V','23694 Jayme Estate Suite 118\nEast Madelynborough, KS 35582','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(103,'Luisa Gottlieb','thea.feest@yahoo.com','$2y$10$zlmUjlcfu8/y6pxOcf65WOdFFhWZUYS9XzFcIQQGOT4Q6L2nLzcDi','WNI','L',135,207,'5969 DuBuque Neck\nNew Austin, MI 19276','69697','North Carleytown','1987-09-25','Gloria Bruen','Prof. Percy Kunze I','+3287273514809','+7554112414319','Teman','Prof. Damon Sawayn','48886 Kris Skyway\nChristopview, DE 03436-7505','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(104,'Lisette Frami','gloria.schneider@olson.net','$2y$10$yh5FfT57uGe4iovEEju9ke83TxXsNymktZPbYg8xKlV7cWov3mrU.','WNA','P',241,230,'716 Olson Pine\nAnnalisehaven, OH 82770-3751','29809','Lake Ralph','1980-02-22','Elsie D\'Amore MD','Delmer Wehner','+8056551045406','+3083881632303','Keluarga','Bart Pollich I','489 Steuber Spurs\nEast Madisyn, MN 71295','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(105,'Odie Sipes I','jillian92@yahoo.com','$2y$10$DeiQo/5TKuUmTROhD.cSaemqJrvuNjRtjx9VOaPmAIB5IFddUUFdC','WNI','P',113,174,'72315 Stiedemann Crossing\nSummermouth, HI 79993-4480','17348','Andersonville','2011-12-19','Dr. Carmen Beier I','Miss Summer Bahringer Sr.','+9382731072065','+1728100408979','Keluarga','Armando Feil','5006 Gwendolyn Ridge Suite 855\nNorth Gerhardland, NM 49890','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(106,'Marielle Hills','braun.antone@yahoo.com','$2y$10$WZqdqsIts26KF4Im1Ybr2.sBnVwvwc2EUbYJYLCW0xGZwcFHfY7Km','WNI','P',148,204,'72461 Ondricka Glens Suite 824\nWest Alberta, OH 56798','24298','Cornellborough','1989-02-25','Conrad Moore PhD','Kali Bosco','+1667254361210','+9922415246814','Teman','Dr. Brittany Batz','154 Gaylord Ferry Suite 209\nNorth Nicolas, CT 43164','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(107,'Mercedes Sauer','tmueller@marquardt.com','$2y$10$S5CDoBZKxrxztedQQ3EHVeDoetSolRyj0zy/Sa6zwcwIIX5.50A7W','WNI','L',212,206,'49574 Murphy Avenue Suite 459\nPort Lorenz, DC 90468-9639','86808','Tiffanyville','1999-10-13','Dr. Emanuel Pfeffer','Maymie Ferry','+8673879425867','+9778356102709','Lain-lain','Andres Sawayn','92810 Flavio Well Suite 326\nLangview, KY 59423','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(108,'Jeanette Runte','gauer@yahoo.com','$2y$10$zSRGUc5ImqA.PZRy6tibsOwGu0uP3KhGMnZjsMVz.F6dyeBvdFCxe','WNA','P',155,180,'61140 Abe Locks\nCordiemouth, MO 64957','89043','West Ignatius','1977-05-21','Dino Kub','Prof. Gloria Hettinger','+4304261899378','+8429618879482','Lain-lain','Dr. Immanuel Blick','2280 Wilton Corner Apt. 407\nDeshawnside, NY 39687','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(109,'Raphaelle Tremblay','zosinski@emard.biz','$2y$10$Oybc/6NB388rMIkWbbx0luF3ilZWMWXRngBUzm5kHc.kFAWEP8ZIK','WNA','L',168,58,'91719 Trantow Drive Suite 704\nEarlineshire, UT 40565-1931','31410','Andersonfort','1993-03-14','Mr. Isac Lubowitz II','Jake Hodkiewicz','+2787818222740','+4618106665581','Media Daring','Dr. Jennie Brown V','8781 Urban Brooks Suite 297\nWest Kellenstad, VT 92817','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(110,'Mack Mitchell','nyundt@gmail.com','$2y$10$wzcCbRQUIzNBrRDEazP02.O9W5Ib0EPM8iR.FdQaXy6Wr3qdhD9D6','WNA','P',149,178,'22826 Lempi Fields Suite 481\nDillanhaven, ME 83205','98672','East Shannyfurt','2006-03-14','Heaven Pfeffer MD','Roberto Bechtelar','+7792103176898','+7379640219889','Teman','Alisa Cremin DVM','7994 Torphy Lodge\nWest Cathrine, AL 11607','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(111,'Ryleigh Mayert','kcummerata@murazik.com','$2y$10$2R3fZ3jQSW2tUE1nvNnDbOUCTKMzI0sQbm2u94Ej1R9jhEYqU.PUW','WNI','L',216,233,'503 Adriel Dale\nWest Sisterhaven, WV 08328-0004','30007','Kenfort','2000-01-17','Dr. Rowland Ward','June Reichel','+1538735494868','+9520988550938','Media Daring','Miss Janiya Ullrich','3371 Electa Avenue\nAimeebury, MI 76882','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(112,'Dr. Mellie Witting III','georgianna35@yahoo.com','$2y$10$9LI3cxJTimWvrsPsigsOcOlQFYkhT0gyunxDWzCX/nKnZDMXOO73K','WNA','P',127,84,'43518 Emmitt Avenue\nWest Letitia, ND 70161','53438','West Cassie','2002-03-23','Anita Brown','Westley Witting','+8886670442696','+6912956354818','Keluarga','Dimitri Kovacek','68794 Dickinson Glen Suite 365\nNorth Majorburgh, CO 20707','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(113,'Mina Farrell','hanna.wisozk@welch.com','$2y$10$492dqRTQkGIqn4NLG6s41OaVW387Qa/THEI2AWR9YdCUlh3bn2Kvy','WNI','L',149,175,'6246 Lacey Isle Suite 831\nEast Luigi, MD 56752','98946','Feilfurt','1988-10-08','Prof. Sunny Toy','Katharina Lang','+6642595070259','+9401945703201','Teman','Cassandra Sawayn','710 Armstrong Inlet Suite 475\nRichmondberg, MS 86663','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(114,'Dr. Marilie Koelpin','shad.denesik@yahoo.com','$2y$10$7o3hEvRVNpDkGxlpfJxWFOvItnYG5iq1ZMFfhir3ww9cgbATYBwzO','WNI','L',199,89,'13397 Viva Isle Apt. 497\nWest Jaycee, OK 14733','94409','Mooretown','1983-02-22','Yasmin Boyer','Domenick Hyatt','+2996995602915','+8173930987816','Lain-lain','Juanita Blick PhD','285 Sydney Crossroad\nNorth Sadie, MT 46104','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(115,'Jettie Walsh','candace94@hotmail.com','$2y$10$B087wvB9JM5tSRcb1YeB0OOt8XwlaPb2vxiUuYMFR/VmvXvEN4i62','WNI','L',199,221,'5896 Jaskolski Islands Apt. 177\nCummingsport, WY 37721-8617','88814','East Mya','1985-05-21','Carole Miller','Ricardo Morar','+7151214706616','+5319199677056','Keluarga','Dagmar Wilderman','649 Sawayn Trail\nSouth Sonnymouth, PA 29327-6034','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(116,'Cyrus Shields','russel.elton@yahoo.com','$2y$10$thHVhYvD49QJTiz4d2q.F.Dw0pFDud6B5ZwQgu11SQmG2DAEM5GGS','WNI','L',249,188,'60634 Welch Mill\nQuinnfort, NV 59892','69594','New Danehaven','2015-01-16','Jan O\'Reilly','Anahi Ortiz','+1932955787168','+8619600212722','Keluarga','Art Trantow Sr.','582 Brook Prairie Suite 713\nBlockland, CA 12716','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(117,'Mrs. Myrtie Mertz','friesen.lonnie@hotmail.com','$2y$10$Y5l5anmbDvfFoqvM8mjkHe2dCY25iCDtUSYjtYTzfJ3V42ZiVanJO','WNI','P',154,203,'207 Ruth Mission\nPort Dante, OK 36823-5595','82163','New Newton','1981-05-03','Theresa Kohler','Sonya Goldner DDS','+7120709238007','+8770876701659','Keluarga','Jevon Bartoletti','901 Hamill Branch Apt. 305\nNorth Raeganshire, VA 24696','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(118,'Elliot Waelchi','dessie91@yahoo.com','$2y$10$kHaoa7nx4b.YdeLEPNob1uPwSrewMupkKy.7xwiqLqzJCpM88FQVC','WNA','L',172,123,'880 Mante Course\nLake Darian, WA 83136','45145','North Ottilie','1975-08-25','Dr. Jamil Kemmer','Kylee Lubowitz','+3418461912028','+9620485338502','Lain-lain','Mrs. Angelica Mayert DDS','673 Roob Estate\nNew Desmond, CA 07866','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(119,'Sean Smitham','balistreri.eryn@hotmail.com','$2y$10$2LGnHrYcALCVcYSP0k0YiOy4d80yiUZHcFHwbH2LX2Zb6ppfLNGYG','WNA','P',125,208,'1267 Feeney Glen\nSouth Sandrine, AZ 12633-5155','9466','Schambergerville','2003-02-10','Shyanne Roob','Muriel Kling','+4485792078898','+2934252757035','Teman','Patricia Green','345 Bernier Isle Suite 821\nNew Melyssa, NE 20715','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(120,'Prof. Bonita Christiansen DDS','max20@herman.com','$2y$10$5DhlzGKUM5qEKuc5jL1/IOWy33KRaSfJY.ipPy5vXVs3vB4JP4JIe','WNI','L',166,58,'908 Abraham Crescent Suite 842\nHaleyland, MN 38844','61516','Lake Minerva','1988-03-16','Ms. Keira Frami I','Dr. Wilfrid Cormier MD','+8851076002754','+7403639204888','Lain-lain','Dr. Angelo Hayes MD','9812 Luettgen Greens\nRolfsonside, NH 46425','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(121,'Mario Halvorson Jr.','murray.tad@hotmail.com','$2y$10$Y3iPHDx6FRl8ryHEuvWOxu/454E0HxBzAa09Z5PvpmpK9B0xgQAqO','WNA','L',181,111,'490 Haag Ramp Apt. 575\nLindshire, FL 35410-8598','63133','North Mohammad','1979-12-20','Ryder Carter Jr.','Dane Bogisich IV','+9154577658715','+8448778341174','Lain-lain','Mrs. Kassandra Douglas','431 Reynolds Wall Apt. 140\nNorth Vivatown, OR 14287','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(122,'Samson Abshire Jr.','jkunde@gmail.com','$2y$10$tA1hQ6rsPyI2E9sdX8B9Luf3iD12ksfkWYgsIkIlKLgt8GYBBt/Cq','WNI','L',151,157,'5115 McGlynn Flat Suite 540\nWest Harold, WY 04293','13236','Ricetown','1972-05-01','Clyde Collins','Roxanne Anderson III','+6856194604627','+4285482486867','Media Daring','Lavada Kuhic','982 Abe Drive Apt. 500\nNew Jordy, RI 25370','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(123,'Valentina Kuhn','nlueilwitz@larkin.com','$2y$10$3o8885Nrf7XYTqbZYXiRru48XDaK.QOWDdAwfUiocoXKNY79bTl7y','WNI','P',157,196,'87391 Brock Road Suite 114\nMalliebury, AR 93194','99269','Port Alek','1993-11-17','Roselyn Leannon MD','Anita Ziemann','+9161756785039','+5485401910923','Media Daring','Andre Feil','49131 Ruecker Coves Apt. 366\nPort Darrin, SC 69752-8993','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(124,'Vivian Powlowski','rdaniel@bosco.biz','$2y$10$N/7Lrz4Z4CJQQAyu5qurDe/iek1V4SdXbfE8.C6vB35WLTl/Xfeti','WNI','P',135,183,'7680 Garrison Expressway Apt. 448\nBlairport, HI 80665','76415','Port Elmer','1987-05-20','Nicole Lueilwitz','Sabryna Bailey','+4479571647014','+4936347051472','Media Daring','Gladyce Smith','94496 Schulist Summit Suite 230\nEast Jensenchester, ME 84510','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(125,'Lauryn Flatley DVM','ydickens@gmail.com','$2y$10$V/UpJNsf.QkYvJDhXDFjb.O7w6T/FLzotIJl0UwJhw0mvXXaJ9LqG','WNA','P',126,73,'5298 Jettie Fort Apt. 995\nPort Brownmouth, WI 06316-2813','77539','Port Godfreyport','1985-04-24','Miss Daija Jerde','Prof. Yasmeen Schultz I','+9662954038803','+6842158458279','Teman','Adalberto Gulgowski','113 Ward Manors Apt. 070\nMedhurstbury, WY 60483','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(126,'Miss Viva Jones Jr.','amari46@bode.biz','$2y$10$VP3THjLobKnA6ZYojQyhsuu71KrHdT18iZS/h6029oN5OIVx.xUsi','WNA','L',131,152,'22964 Ava Place\nLake Shanonmouth, MO 78121-0420','37825','Maudieport','1975-08-02','Halie Mann','Mateo Yundt Sr.','+7250700079887','+7744191273135','Media Daring','Cary Feil III','9926 Lowell Roads Apt. 328\nJessikaside, ND 66920-0086','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(127,'Miss Suzanne Hane DDS','eliezer.goyette@yahoo.com','$2y$10$4Ihx6dQHOT48wf5.3eEG5.ihPLz2RymnG7xyuKDqfKwEPQbFiwytG','WNA','L',104,113,'217 Karen Walks\nLake Alisa, MI 48136','89352','Lindtown','2009-06-02','Vincenzo Rice','Ms. Emely Armstrong','+8861163418655','+4878182133444','Lain-lain','Dr. Ted Hills','5133 Kautzer Spurs\nNew Isaiah, NE 18074','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(128,'Gaston McLaughlin V','wade51@hotmail.com','$2y$10$1mlrcob.N/frahW7p4vdLeIu0ZK/EEDzD9kWHa2zrfQGQnGNMN4LO','WNA','P',138,88,'143 Aiden Ford\nCalistamouth, VT 82232-1071','75510','Binsberg','1977-09-26','Dr. Jermey Kunde','Elijah Lebsack','+4579970136067','+2796106258835','Lain-lain','Elinor Morar','11479 Kole Creek Suite 079\nMuellerville, AZ 91708-7665','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(129,'Mr. Garrison Roob','andreanne.haag@gmail.com','$2y$10$6Ck9DutsDAqyfQ2BDiXQsO2zk1Rs5y0H3ufrQJPauq69SnXLU56zK','WNA','P',156,116,'784 Bogan Common\nNorth Naomiland, MN 88855','41676','East Dewayne','1984-06-08','Aurelio VonRueden','Aylin Parker','+7750442424882','+7360652462896','Media Daring','Scottie Macejkovic','41436 Hudson Key\nSipesside, IL 56802','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(130,'Marian Tromp','jerry.cassin@rice.com','$2y$10$ajHu8hIz11RqyZVcrAh6JOrHwp2OIPe2lsRRPnTuQYDQxtKYbcJYW','WNI','P',138,73,'10553 Hagenes Hill Suite 414\nGerdaside, RI 61730','11249','Wilberthaven','1985-03-08','Katlynn Eichmann','Vanessa Schoen','+2541726551564','+2524036317140','Keluarga','Bethany Morissette','504 Schneider Light\nLake Greg, NJ 07498-6780','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(131,'Prof. Maximo Funk','wquitzon@hotmail.com','$2y$10$Q/hd05hIBe5x4Fkw4RHgfeTQveWB0WejoQz6N337hfdVAJRWDIPsC','WNI','L',170,236,'55221 Donnell Squares Apt. 318\nCasperchester, FL 85092-2785','65659','Weissnatland','2009-01-22','Alfonso Dicki','Dayana Sporer Jr.','+3688664637723','+8758723487889','Media Daring','Isaac Hudson DDS','874 Baumbach Parks Apt. 855\nStephonchester, SC 95352','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(132,'Adelle Hagenes DDS','kerluke.tommie@hotmail.com','$2y$10$t2oz6PT.FdJomLxDcrZX1.gA8jp98TmDA83.TEwrOFABJNO1MIfg2','WNA','L',147,120,'42966 Teagan Mountain\nLangworthland, IL 18666','2284','South Immanuel','1976-06-11','Conor Bashirian','Ms. Idell Cronin Jr.','+2767822618149','+9095134171011','Keluarga','Trevor Welch','91995 Theresia Mews\nCreminshire, NH 25739-2427','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(133,'Trinity Abernathy','gschultz@yahoo.com','$2y$10$ufN7dYyx4biBN7bNzDxnnezKCh8tKjvzDeAYFm6yJ6dzrQ07ThK1i','WNA','L',121,72,'9847 Hellen Mountain Suite 544\nGlendaburgh, LA 35776-7328','48832','West Catharineshire','1973-08-24','Emery Hermann','Loyal Willms','+2307146663386','+8025450729692','Media Daring','Prof. Ryann Lind DDS','415 Feeney Corners Apt. 320\nNorth Meaganburgh, NM 62043','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(134,'Jalon Kuhlman','kristopher87@morissette.info','$2y$10$IHHO/H91VvtQl0tJ.C7eG.QaXvT1JyhVQKJ3c9QHdHTh2/loF3i0K','WNI','L',141,101,'5284 Paucek Turnpike Suite 569\nDaxmouth, PA 14516-6226','62640','Jaydonmouth','1980-11-09','Freida Cummerata','Sheila Emard','+4024061985765','+5945777287155','Teman','Milo Yundt','3030 Murray Summit\nWest Nicofurt, GA 34922-1962','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(135,'Prof. Clement Botsford IV','canderson@runolfsdottir.biz','$2y$10$2ySf85gPKnB4usNti5Yq5eShiY04xnE.jwcf7CF4ruGh9kFCSuUy.','WNI','P',166,115,'203 Aubrey Lights Suite 524\nSouth Ericka, WI 17390','78103','West Jonatan','2014-12-02','Prof. Buford Gutkowski','Blaise Champlin','+6078780182024','+2930710605125','Media Daring','Assunta King DDS','2452 Hagenes Mountain Apt. 288\nReichertside, HI 46013','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(136,'Damon Franecki','felicia97@bergstrom.com','$2y$10$Ps0t6Zj9QfFMmEKQX6M3SecFUKdhH3koMni4wcH80OG.E2ywPLiF6','WNA','P',180,143,'3144 Stokes Cape Apt. 246\nPort Shaunshire, IA 02977','33038','South Verdafurt','1997-10-02','Danika Stracke','Pasquale Spencer','+9600795384528','+9523608406677','Keluarga','Kris Durgan','13406 Lang Harbors\nLennytown, HI 95733','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(137,'Skyla Considine','kbernier@gmail.com','$2y$10$ilqq2nuQOvkRc0RwcVrQwefQh5/ZI4JsbLOxGSOxRONFboXC00ulq','WNI','L',182,209,'153 Bo Islands Apt. 878\nLake Tristian, MS 88169-0842','93698','Caesarmouth','2008-08-15','Vincenza Lowe Sr.','Prof. Sister VonRueden','+7489548326410','+5478968221231','Keluarga','Erwin Witting IV','143 Francisca Point\nSouth Wilberton, OR 27619','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(138,'Clarabelle Davis','ayana.weissnat@hotmail.com','$2y$10$pG/mEPJ71OM541ePhmUZUuVyjvEr0xB6ZxaBzARDO3aEF.bSGj8fq','WNA','L',224,204,'586 Maybelle Lodge Apt. 182\nHammestown, OR 02168-0170','59209','New Felicitahaven','1976-11-18','Prof. Roman Welch','Perry Veum','+9948393907327','+6169103244378','Media Daring','Freddie Dibbert','839 Toy Way\nNorth Salvadorview, NC 46120','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(139,'Zena Lemke','dahlia24@yahoo.com','$2y$10$qe2M7fcCFIE82Ux5itSz3.OcRZpPVskT0QET8o6Us.kUPox5/qoHm','WNA','L',123,85,'6578 Mona Union Apt. 953\nSchmittmouth, AR 83443','51197','Yesseniabury','1973-11-14','Emmett Marvin','Loyce Hickle','+8158213125445','+6845346516967','Keluarga','Dr. Lucinda Hegmann IV','17717 Bartoletti Cove Apt. 798\nNew Janaburgh, MD 94001-8020','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(140,'Jamar Kassulke','strosin.ella@murazik.org','$2y$10$N5wLkOXh191ar7EKt.ZKV.tGuFhNA4s5JJIyLoygayi3SWgg2ql6G','WNI','P',164,245,'75872 Lon Parks Apt. 096\nRobelville, MI 57583','75213','Carolynstad','2018-07-18','Claude Frami Sr.','Noe Wunsch','+6518640094741','+4223574333067','Media Daring','Mavis Muller','1640 Rolfson Rapids\nWardfort, DC 46247-9833','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(141,'Felicity Ratke','jarrell79@rowe.com','$2y$10$47/pPGao/k4xBWivgsbi1uNMOi/r/nRCYQoZ42hPPgOLHEP9Eq7J2','WNA','P',123,122,'7691 Lang Glens Apt. 589\nBaumbachchester, WA 38625-4880','38187','Skilesview','2009-07-14','Rowan Dickinson','Brycen Koepp','+6755269174812','+2832132029984','Media Daring','Emmett Hegmann','4978 Hill Mills\nConcepcionfurt, NH 52080-3256','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(142,'Prof. Erwin Kertzmann','huels.providenci@hotmail.com','$2y$10$tZE0lsG1V2VJy67AGHTxS.3PxL7tARc29tQITf4WjOIJGfHHkN7QS','WNA','L',212,172,'10683 Wilkinson Highway\nEast Malindamouth, AL 97934-3208','82090','South Cristopher','1981-06-18','Ezekiel Kuphal','Genoveva Jaskolski','+7686745617989','+1018031218719','Media Daring','Nathen Witting','78682 Nora Parks Suite 579\nConnellyton, ND 04888-6242','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(143,'Ellie Aufderhar','luisa77@yahoo.com','$2y$10$Dl5.rau/HY4.SzSqabpr9uyllYDIXIZ/N6FKvPyQa4CJWJ1yWaM1q','WNA','L',142,216,'930 Ruben Ranch Suite 806\nSatterfieldton, MA 30031-8841','4955','East Altaview','1979-03-24','Idell Maggio','Dr. Nicholaus Reynolds Sr.','+1050476994347','+5147339855561','Teman','Herminia Pagac','59323 Ankunding Row Apt. 498\nNorth Titus, AZ 71282','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(144,'Jazmyn Rosenbaum','scarlett.jakubowski@batz.com','$2y$10$O7T7OvpES7RoSC88hjBOX.McGgQEXcLcibrA.ikw6kndgHygGA6cW','WNA','P',151,157,'34906 Jaskolski Parks\nNew Henderson, MN 58164','73155','Rippinfurt','1976-09-24','Prof. Guido Labadie Sr.','Millie Zulauf','+7251151634455','+8314036711065','Keluarga','Brice Rodriguez','3441 Reynolds Village\nEast Fritz, UT 13148','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(145,'Mr. Ansel Sawayn Jr.','spencer.lily@gmail.com','$2y$10$sNqvFjM0moktbzSUQJm3wOEerq1M1PPT5jQJsGRW2YHY7yN2YEXAi','WNA','P',180,188,'416 Jones Corners\nNorth Curtismouth, SD 94887','82989','West Daltonville','1992-12-01','Jaquelin Little','Lisa Mertz','+2082731258550','+9346038034782','Teman','Ms. Ollie Shanahan','4450 Zetta Place Suite 728\nMyrtleview, ND 74039','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(146,'Corene Stiedemann','aiden18@rice.com','$2y$10$7SEYzqHBWcbLze46/KOvn.TF5TT7riuuAoduDRjnzHSb0ym1OF6VG','WNA','P',242,207,'7204 Anastasia Fort\nPort Colton, UT 96470','99176','East Dorthyfurt','2018-01-07','Harrison Ernser','Amelie Metz IV','+9672203662877','+7463367422209','Teman','Marilie Stamm III','65405 Becker Pines\nNew Augustine, AR 43881','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(147,'Prof. Elisha Stroman','lupe97@gottlieb.com','$2y$10$0ZSXvEo57ZPY3WV4fhSwAeEUvMNVfiX9H9lxIXcOY9r9W53nAHw7C','WNI','L',111,227,'82410 Herzog Viaduct\nLake Maxieland, CO 19056','49064','Bednarland','2014-10-07','Camron Kerluke','Cindy Marks','+2568356302960','+4759538087209','Keluarga','Arthur Okuneva','621 Bosco Prairie Apt. 729\nNew Rodrick, AZ 76515-8337','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(148,'Mrs. Antonette Reynolds','berenice.wisozk@herman.com','$2y$10$/6XPAmvpESHiPFkNqRjWV.OwK4MOAsudG.qDyVrVNJnD/xt2t9Wbi','WNI','P',185,234,'120 Cassin Shoals Suite 219\nFranzshire, OH 27754-2013','11252','Vitoshire','1973-03-11','Karina Roob','Markus Fadel','+1911869670211','+5941196887051','Media Daring','Raymundo Schneider','638 Carlotta Light\nWisozkland, DE 47968-7914','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(149,'Ms. Pansy Graham','timmothy16@heathcote.net','$2y$10$FGAOXccXzXcU4oAkU9q9JetzgbDJeE0Imk70RGUadU7M1T5CjHsMm','WNA','L',100,63,'70799 Weissnat Corners Apt. 478\nWest Fredatown, KY 47799-8342','47198','Lake Caterina','2018-07-01','Joana Littel','Keyon Mayert','+4897445862608','+9290724131671','Teman','Johnathan Kovacek','605 Eulah Oval\nDachchester, WI 05569','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0),(150,'Dora Sauer','omcclure@gmail.com','$2y$10$VEHfXHCMPq8nKQdCEGf74.fpf3olQF9luoKvrAqjOh0QGQVwM75h2','WNA','P',227,162,'25131 Joel Pine Suite 594\nCasandraberg, NE 93059-3833','42730','Rossshire','2018-01-14','Heaven Borer','Sheldon Kutch Jr.','+8838130146078','+3575986951932','Teman','Adolph Shanahan','818 Tremblay Turnpike Apt. 358\nTerrillchester, NH 10488','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru',1,1,NULL,0);
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `mahasiswa` with 50 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `menu` VALUES (1,'keuangan.index','PMB','1',0);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `menu` with 1 row(s)
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
INSERT INTO `menu_has_role` VALUES (1,1),(1,2);
/*!40000 ALTER TABLE `menu_has_role` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `menu_has_role` with 2 row(s)
--

--
-- Table structure for table `nilai_ujian_pmb`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nilai_ujian_pmb` (
  `nilai` double NOT NULL,
  `id_pmb` int(11) NOT NULL,
  `id_mapel_pmb` int(11) NOT NULL,
  PRIMARY KEY (`id_mapel_pmb`,`id_pmb`) USING BTREE,
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
INSERT INTO `nilai_ujian_pmb` VALUES (94,2,1),(51,3,1),(56,4,1),(84,5,1),(62,6,1),(56,7,1),(59,8,1),(67,9,1),(56,10,1),(76,11,1),(87,12,1),(93,13,1),(69,14,1),(64,15,1),(67,16,1),(87,17,1),(76,18,1),(87,19,1),(61,20,1),(76,21,1),(75,22,1),(67,23,1),(57,24,1),(59,25,1),(82,26,1),(76,27,1),(79,28,1),(96,29,1),(73,30,1),(50,31,1),(69,32,1),(99,33,1),(100,34,1),(61,35,1),(99,36,1),(68,37,1),(50,38,1),(66,39,1),(92,40,1),(74,41,1),(84,42,1),(66,43,1),(84,44,1),(89,45,1),(63,46,1),(73,47,1),(57,48,1),(54,49,1),(91,50,1),(80,51,1),(69,52,1),(57,53,1),(75,54,1),(52,55,1),(81,56,1),(60,57,1),(69,58,1),(71,59,1),(54,60,1),(100,61,1),(64,62,1),(86,63,1),(79,64,1),(77,65,1),(86,66,1),(71,67,1),(91,68,1),(80,69,1),(82,70,1),(53,71,1),(74,72,1),(71,73,1),(52,74,1),(53,75,1),(51,76,1),(97,77,1),(75,78,1),(88,79,1),(66,80,1),(75,81,1),(59,82,1),(62,83,1),(85,84,1),(52,85,1),(62,86,1),(73,87,1),(57,88,1),(57,89,1),(62,90,1),(76,91,1),(61,92,1),(57,93,1),(65,94,1),(81,95,1),(55,96,1),(100,97,1),(90,98,1),(85,99,1),(55,100,1),(64,101,1),(62,2,2),(60,3,2),(64,4,2),(69,5,2),(100,6,2),(67,7,2),(62,8,2),(89,9,2),(96,10,2),(80,11,2),(54,12,2),(90,13,2),(87,14,2),(79,15,2),(76,16,2),(85,17,2),(64,18,2),(91,19,2),(50,20,2),(92,21,2),(77,22,2),(55,23,2),(68,24,2),(72,25,2),(79,26,2),(89,27,2),(55,28,2),(89,29,2),(85,30,2),(88,31,2),(91,32,2),(58,33,2),(69,34,2),(76,35,2),(82,36,2),(61,37,2),(50,38,2),(72,39,2),(84,40,2),(61,41,2),(65,42,2),(90,43,2),(79,44,2),(65,45,2),(52,46,2),(66,47,2),(81,48,2),(85,49,2),(54,50,2),(80,51,2),(77,52,2),(79,53,2),(87,54,2),(82,55,2),(72,56,2),(87,57,2),(83,58,2),(60,59,2),(100,60,2),(72,61,2),(93,62,2),(85,63,2),(51,64,2),(56,65,2),(62,66,2),(78,67,2),(70,68,2),(59,69,2),(62,70,2),(94,71,2),(99,72,2),(82,73,2),(68,74,2),(66,75,2),(63,76,2),(67,77,2),(53,78,2),(82,79,2),(70,80,2),(97,81,2),(57,82,2),(54,83,2),(53,84,2),(82,85,2),(62,86,2),(85,87,2),(82,88,2),(55,89,2),(94,90,2),(60,91,2),(93,92,2),(82,93,2),(74,94,2),(100,95,2),(61,96,2),(53,97,2),(58,98,2),(52,99,2),(78,100,2),(87,101,2),(81,2,3),(86,3,3),(73,4,3),(56,5,3),(97,6,3),(72,7,3),(76,8,3),(69,9,3),(79,10,3),(85,11,3),(79,12,3),(82,13,3),(94,14,3),(56,15,3),(67,16,3),(76,17,3),(97,18,3),(66,19,3),(60,20,3),(73,21,3),(70,22,3),(100,23,3),(99,24,3),(51,25,3),(89,26,3),(87,27,3),(74,28,3),(56,29,3),(79,30,3),(100,31,3),(92,32,3),(88,33,3),(51,34,3),(55,35,3),(53,36,3),(55,37,3),(67,38,3),(67,39,3),(73,40,3),(95,41,3),(68,42,3),(53,43,3),(65,44,3),(79,45,3),(76,46,3),(71,47,3),(82,48,3),(71,49,3),(93,50,3),(65,51,3),(68,52,3),(73,53,3),(92,54,3),(89,55,3),(86,56,3),(84,57,3),(88,58,3),(71,59,3),(75,60,3),(71,61,3),(92,62,3),(56,63,3),(88,64,3),(53,65,3),(87,66,3),(84,67,3),(94,68,3),(79,69,3),(85,70,3),(62,71,3),(61,72,3),(76,73,3),(88,74,3),(58,75,3),(58,76,3),(64,77,3),(52,78,3),(74,79,3),(61,80,3),(98,81,3),(96,82,3),(64,83,3),(59,84,3),(89,85,3),(95,86,3),(97,87,3),(80,88,3),(54,89,3),(100,90,3),(77,91,3),(66,92,3),(63,93,3),(96,94,3),(63,95,3),(63,96,3),(96,97,3),(89,98,3),(90,99,3),(78,100,3),(78,101,3),(95,2,4),(84,3,4),(81,4,4),(98,5,4),(88,6,4),(76,7,4),(52,8,4),(73,9,4),(87,10,4),(57,11,4),(72,12,4),(97,13,4),(51,14,4),(71,15,4),(91,16,4),(70,17,4),(53,18,4),(96,19,4),(95,20,4),(80,21,4),(71,22,4),(54,23,4),(85,24,4),(88,25,4),(50,26,4),(89,27,4),(72,28,4),(69,29,4),(59,30,4),(86,31,4),(65,32,4),(60,33,4),(59,34,4),(68,35,4),(56,36,4),(52,37,4),(58,38,4),(97,39,4),(73,40,4),(55,41,4),(97,42,4),(61,43,4),(50,44,4),(79,45,4),(73,46,4),(53,47,4),(79,48,4),(60,49,4),(85,50,4),(82,51,4),(59,52,4),(99,53,4),(75,54,4),(86,55,4),(87,56,4),(66,57,4),(88,58,4),(77,59,4),(98,60,4),(94,61,4),(96,62,4),(100,63,4),(100,64,4),(94,65,4),(97,66,4),(68,67,4),(90,68,4),(100,69,4),(68,70,4),(64,71,4),(85,72,4),(75,73,4),(53,74,4),(80,75,4),(97,76,4),(70,77,4),(74,78,4),(98,79,4),(67,80,4),(72,81,4),(72,82,4),(58,83,4),(72,84,4),(99,85,4),(60,86,4),(58,87,4),(85,88,4),(61,89,4),(74,90,4),(50,91,4),(94,92,4),(94,93,4),(69,94,4),(87,95,4),(83,96,4),(59,97,4),(89,98,4),(78,99,4),(66,100,4),(95,101,4);
/*!40000 ALTER TABLE `nilai_ujian_pmb` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `nilai_ujian_pmb` with 400 row(s)
--

--
-- Table structure for table `pengaturan_surat`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengaturan_surat` (
  `id_pengaturan_surat` int(11) NOT NULL AUTO_INCREMENT,
  `kode_surat` int(11) NOT NULL,
  `url_surat` varchar(191) NOT NULL,
  `nama_surat` varchar(191) NOT NULL,
  `lampiran` text,
  `template_surat` varchar(191) NOT NULL,
  PRIMARY KEY (`id_pengaturan_surat`),
  UNIQUE KEY `url_surat` (`url_surat`),
  KEY `kode_surat` (`kode_surat`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengaturan_surat`
--

LOCK TABLES `pengaturan_surat` WRITE;
/*!40000 ALTER TABLE `pengaturan_surat` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `pengaturan_surat` VALUES (1,1,'surat_yang_tak_penting_lagi','surat yang tak penting lagi',NULL,'');
/*!40000 ALTER TABLE `pengaturan_surat` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `pengaturan_surat` with 1 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pmb`
--

LOCK TABLES `pmb` WRITE;
/*!40000 ALTER TABLE `pmb` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `pmb` VALUES (2,'Arthur','dev@akper.ac.id','$2y$10$MWBB48WrJVaOrl3jSr3nZ.3YMCtUAebnvTnUu/Dy.I4DXRyTYo9ZW','WNA','P',75,20,'Atque odio inventore','58','In occaecat id autem','1990-01-14','Et omnis adipisci hi','Labore labore ration','85','23','Illum cumque eligen','Labore labore et pro','Fugit nihil blandit','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1','20194471','1',1,'1'),(3,'Ms. Nelda Volkman MD','wkuvalis@yahoo.com','$2y$10$sg0kmbAecYqevE.M/u3Mve7YUA6CKYsygtZ8OTHQ/KyGU5v5X7Tem','WNA','P',247,166,'877 Rolfson Streets Suite 187\nNew Montanaland, MA 60556','42656','West Alford','2013-05-31','Meagan Sanford','Ms. Jessica Metz MD','+4992547980052','+5314213173689','Lain-lain','Raven Smith','56516 Kulas Knoll Apt. 282\nPort Jaycee, GA 82756','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','0','1','pmb_baru','1',NULL,'0',1,'0'),(4,'Miss Pink Gleason Sr.','lemuel.beahan@gmail.com','$2y$10$2THmWSIBN51RmtsmKsvrZ.AZgPm3xn8HPQIVlYNKhkpvWzONWlR36','WNA','P',186,73,'68949 Hayes Oval\nSimonismouth, MT 96279','47561','South Evansland','1991-12-18','Prof. Jalyn Bashirian','Lucas Braun Sr.','+1253099112869','+6616232927461','Teman','Dr. Armando Hand V','23694 Jayme Estate Suite 118\nEast Madelynborough, KS 35582','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(5,'Luisa Gottlieb','thea.feest@yahoo.com','$2y$10$zlmUjlcfu8/y6pxOcf65WOdFFhWZUYS9XzFcIQQGOT4Q6L2nLzcDi','WNI','L',135,207,'5969 DuBuque Neck\nNew Austin, MI 19276','69697','North Carleytown','1987-09-25','Gloria Bruen','Prof. Percy Kunze I','+3287273514809','+7554112414319','Teman','Prof. Damon Sawayn','48886 Kris Skyway\nChristopview, DE 03436-7505','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(6,'Lisette Frami','gloria.schneider@olson.net','$2y$10$yh5FfT57uGe4iovEEju9ke83TxXsNymktZPbYg8xKlV7cWov3mrU.','WNA','P',241,230,'716 Olson Pine\nAnnalisehaven, OH 82770-3751','29809','Lake Ralph','1980-02-22','Elsie D\'Amore MD','Delmer Wehner','+8056551045406','+3083881632303','Keluarga','Bart Pollich I','489 Steuber Spurs\nEast Madisyn, MN 71295','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(7,'Declan Bogan V','sipes.marianna@hoppe.biz','$2y$10$OaZVyRLHbBJjAtlV9WAF/u7WFpIxTlaoXr.8nfwoHJe.vfTedMCMS','WNI','L',248,67,'779 Alexandra Shore Suite 029\nWest Ora, ME 51534','14379','Port Jermain','1979-11-10','Dr. Brayan McLaughlin DVM','Tessie Christiansen','+3644557420653','+9401987814050','Media Daring','Rosa Conn','443 Schroeder Garden Suite 560\nPort Virgilborough, TX 63379-3445','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(8,'Odie Sipes I','jillian92@yahoo.com','$2y$10$DeiQo/5TKuUmTROhD.cSaemqJrvuNjRtjx9VOaPmAIB5IFddUUFdC','WNI','P',113,174,'72315 Stiedemann Crossing\nSummermouth, HI 79993-4480','17348','Andersonville','2011-12-19','Dr. Carmen Beier I','Miss Summer Bahringer Sr.','+9382731072065','+1728100408979','Keluarga','Armando Feil','5006 Gwendolyn Ridge Suite 855\nNorth Gerhardland, NM 49890','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(9,'Prof. Alyson Raynor III','toby.schmeler@windler.com','$2y$10$76v0XIhV/PUDkeVCASNNpuZ3rQRymh0qBORc6LrDXkxUJtHmJcbve','WNA','L',121,81,'4077 Dietrich Lakes Apt. 542\nEast Hassie, IA 00768','87347','West Eldred','1995-08-29','Violet Stroman','Lora Conroy','+3499591858097','+5586642586900','Keluarga','Roma Fahey','8734 Littel Station\nHuelsberg, NY 10827','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(10,'Agnes Lindgren','kamille34@gmail.com','$2y$10$kxzQGcKdex2zrBp2YV4OQuWbf4Aq3y3xdboK0Ia.kZ2zXS2lrKjqa','WNA','P',225,202,'3417 Abbie Light Apt. 479\nPort Susan, FL 48191','83422','New Biankahaven','1975-01-07','Rossie Bernhard','Guadalupe Ankunding','+5292146922777','+1161370895502','Media Daring','Germaine West IV','22408 Aisha Green\nSarahberg, PA 49459','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(11,'Marielle Hills','braun.antone@yahoo.com','$2y$10$WZqdqsIts26KF4Im1Ybr2.sBnVwvwc2EUbYJYLCW0xGZwcFHfY7Km','WNI','P',148,204,'72461 Ondricka Glens Suite 824\nWest Alberta, OH 56798','24298','Cornellborough','1989-02-25','Conrad Moore PhD','Kali Bosco','+1667254361210','+9922415246814','Teman','Dr. Brittany Batz','154 Gaylord Ferry Suite 209\nNorth Nicolas, CT 43164','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(12,'Casey Lemke','yreichert@gmail.com','$2y$10$DD6PVlpd.P.zZxQPuzrSM.rS/7jjfQJ0jYx4TfcjRBt01nQHR40ia','WNI','P',140,141,'7225 Champlin Passage Suite 495\nCassidyville, OR 57234-3998','49137','Jeffryborough','1977-04-07','Leslie Kilback','Vincent Purdy','+7699118478205','+4816958222876','Keluarga','Ms. Margarete Fahey PhD','142 Nienow Square Suite 603\nCadenview, VT 17927','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(13,'Mercedes Sauer','tmueller@marquardt.com','$2y$10$S5CDoBZKxrxztedQQ3EHVeDoetSolRyj0zy/Sa6zwcwIIX5.50A7W','WNI','L',212,206,'49574 Murphy Avenue Suite 459\nPort Lorenz, DC 90468-9639','86808','Tiffanyville','1999-10-13','Dr. Emanuel Pfeffer','Maymie Ferry','+8673879425867','+9778356102709','Lain-lain','Andres Sawayn','92810 Flavio Well Suite 326\nLangview, KY 59423','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(14,'Dr. Orland Lind III','karine.ratke@gibson.com','$2y$10$zfZnue.cpKWefpmioeYbeuXY0N1iHGMyADN8BGPW6cSzhm6dYU936','WNA','L',223,189,'4771 Brekke Ridge\nRosaliafurt, TN 84875','15895','Port Rosamond','2016-01-16','Kristofer Funk','Koby Fay','+5466755320956','+1293978813147','Keluarga','Karley Koelpin','827 Marvin Shore Apt. 546\nOramouth, MI 11913','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(15,'Emmanuelle Rutherford','wiegand.macie@powlowski.com','$2y$10$8BG9fptkM6E.qKUfE5p1U.IN57UK9af97B4l5hWwccRlWWl.Lat7G','WNA','L',132,152,'7540 Stanton Circles Apt. 169\nWest Olinton, NE 54918','60246','North Braeden','1989-10-17','Ms. Amber Fadel','Ernesto Breitenberg','+4726450919332','+1231297599139','Keluarga','Reynold Thompson II','83960 Torp Ports Suite 266\nWalkerfurt, MD 07321','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(16,'Jeanette Runte','gauer@yahoo.com','$2y$10$zSRGUc5ImqA.PZRy6tibsOwGu0uP3KhGMnZjsMVz.F6dyeBvdFCxe','WNA','P',155,180,'61140 Abe Locks\nCordiemouth, MO 64957','89043','West Ignatius','1977-05-21','Dino Kub','Prof. Gloria Hettinger','+4304261899378','+8429618879482','Lain-lain','Dr. Immanuel Blick','2280 Wilton Corner Apt. 407\nDeshawnside, NY 39687','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(17,'Raphaelle Tremblay','zosinski@emard.biz','$2y$10$Oybc/6NB388rMIkWbbx0luF3ilZWMWXRngBUzm5kHc.kFAWEP8ZIK','WNA','L',168,58,'91719 Trantow Drive Suite 704\nEarlineshire, UT 40565-1931','31410','Andersonfort','1993-03-14','Mr. Isac Lubowitz II','Jake Hodkiewicz','+2787818222740','+4618106665581','Media Daring','Dr. Jennie Brown V','8781 Urban Brooks Suite 297\nWest Kellenstad, VT 92817','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(18,'Mack Mitchell','nyundt@gmail.com','$2y$10$wzcCbRQUIzNBrRDEazP02.O9W5Ib0EPM8iR.FdQaXy6Wr3qdhD9D6','WNA','P',149,178,'22826 Lempi Fields Suite 481\nDillanhaven, ME 83205','98672','East Shannyfurt','2006-03-14','Heaven Pfeffer MD','Roberto Bechtelar','+7792103176898','+7379640219889','Teman','Alisa Cremin DVM','7994 Torphy Lodge\nWest Cathrine, AL 11607','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(19,'Ryleigh Friesen','blanda.cleta@gmail.com','$2y$10$2C/JO4Z00i7gHtzhZDbbM.95SmX2PnMFXsf.EMVhOBzSHmcAskn1u','WNI','P',250,199,'6907 Darrel Viaduct\nNew Margefurt, CT 12526','15758','West Earl','2008-02-18','Chelsie Hammes','David Hilpert','+2445882181880','+1878136816833','Keluarga','Emory Monahan','70434 Barton Island\nEast Romastad, AZ 21616','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(20,'Avis Rau','qmclaughlin@hotmail.com','$2y$10$4jEtp9CALnpZ24/DoXOtweN0hmOHoLPmIQq13MOScfpO3SHIVXStm','WNA','L',165,136,'89390 Boyle Extension Apt. 861\nWalkerburgh, NH 50097','10933','Port Rylan','2014-02-17','Dr. Reagan Quitzon','Priscilla Koch','+6453101873218','+8973004397625','Lain-lain','Emie Stroman','34227 Nyasia Corners\nOnamouth, MT 73281-3462','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(21,'Ryleigh Mayert','kcummerata@murazik.com','$2y$10$2R3fZ3jQSW2tUE1nvNnDbOUCTKMzI0sQbm2u94Ej1R9jhEYqU.PUW','WNI','L',216,233,'503 Adriel Dale\nWest Sisterhaven, WV 08328-0004','30007','Kenfort','2000-01-17','Dr. Rowland Ward','June Reichel','+1538735494868','+9520988550938','Media Daring','Miss Janiya Ullrich','3371 Electa Avenue\nAimeebury, MI 76882','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(22,'Dr. Mellie Witting III','georgianna35@yahoo.com','$2y$10$9LI3cxJTimWvrsPsigsOcOlQFYkhT0gyunxDWzCX/nKnZDMXOO73K','WNA','P',127,84,'43518 Emmitt Avenue\nWest Letitia, ND 70161','53438','West Cassie','2002-03-23','Anita Brown','Westley Witting','+8886670442696','+6912956354818','Keluarga','Dimitri Kovacek','68794 Dickinson Glen Suite 365\nNorth Majorburgh, CO 20707','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(23,'Mina Farrell','hanna.wisozk@welch.com','$2y$10$492dqRTQkGIqn4NLG6s41OaVW387Qa/THEI2AWR9YdCUlh3bn2Kvy','WNI','L',149,175,'6246 Lacey Isle Suite 831\nEast Luigi, MD 56752','98946','Feilfurt','1988-10-08','Prof. Sunny Toy','Katharina Lang','+6642595070259','+9401945703201','Teman','Cassandra Sawayn','710 Armstrong Inlet Suite 475\nRichmondberg, MS 86663','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(24,'Dr. Marilie Koelpin','shad.denesik@yahoo.com','$2y$10$7o3hEvRVNpDkGxlpfJxWFOvItnYG5iq1ZMFfhir3ww9cgbATYBwzO','WNI','L',199,89,'13397 Viva Isle Apt. 497\nWest Jaycee, OK 14733','94409','Mooretown','1983-02-22','Yasmin Boyer','Domenick Hyatt','+2996995602915','+8173930987816','Lain-lain','Juanita Blick PhD','285 Sydney Crossroad\nNorth Sadie, MT 46104','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(25,'Bernita Reichel','connelly.kavon@yahoo.com','$2y$10$g8rNjFiLXYrTCbuR1YbZCONwxuFLYac6orsZpxMG2EACxWgKwfpK2','WNA','P',107,115,'4934 Antonette Vista\nDachburgh, LA 78874','55185','Mosciskiville','2012-11-12','Garth Wiza DVM','Ramon Rau','+4727354787305','+3330524823098','Keluarga','Kennedy Kling','6009 Aubrey Village\nPort Marcellusfort, ME 40144-3654','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(26,'Thurman Langworth','marlee.nitzsche@yahoo.com','$2y$10$OBNVGp8rD0KN/l/M7NVHXOCNEgR9iOepqW0ucIbrmHv7lg5iTNIs6','WNI','L',127,175,'14298 Considine Plains Apt. 086\nNorth Earnestine, IN 89087','5152','Maggioburgh','1977-01-08','Prof. Carroll Kovacek II','Mabelle Larkin','+6073557419803','+7224780568384','Media Daring','Prof. Roel Feil V','868 Lynch Spur Apt. 258\nWest Gussie, NY 54016-0953','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(27,'Jettie Walsh','candace94@hotmail.com','$2y$10$B087wvB9JM5tSRcb1YeB0OOt8XwlaPb2vxiUuYMFR/VmvXvEN4i62','WNI','L',199,221,'5896 Jaskolski Islands Apt. 177\nCummingsport, WY 37721-8617','88814','East Mya','1985-05-21','Carole Miller','Ricardo Morar','+7151214706616','+5319199677056','Keluarga','Dagmar Wilderman','649 Sawayn Trail\nSouth Sonnymouth, PA 29327-6034','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(28,'Cyrus Shields','russel.elton@yahoo.com','$2y$10$thHVhYvD49QJTiz4d2q.F.Dw0pFDud6B5ZwQgu11SQmG2DAEM5GGS','WNI','L',249,188,'60634 Welch Mill\nQuinnfort, NV 59892','69594','New Danehaven','2015-01-16','Jan O\'Reilly','Anahi Ortiz','+1932955787168','+8619600212722','Keluarga','Art Trantow Sr.','582 Brook Prairie Suite 713\nBlockland, CA 12716','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(29,'Mrs. Myrtie Mertz','friesen.lonnie@hotmail.com','$2y$10$Y5l5anmbDvfFoqvM8mjkHe2dCY25iCDtUSYjtYTzfJ3V42ZiVanJO','WNI','P',154,203,'207 Ruth Mission\nPort Dante, OK 36823-5595','82163','New Newton','1981-05-03','Theresa Kohler','Sonya Goldner DDS','+7120709238007','+8770876701659','Keluarga','Jevon Bartoletti','901 Hamill Branch Apt. 305\nNorth Raeganshire, VA 24696','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(30,'Elliot Waelchi','dessie91@yahoo.com','$2y$10$kHaoa7nx4b.YdeLEPNob1uPwSrewMupkKy.7xwiqLqzJCpM88FQVC','WNA','L',172,123,'880 Mante Course\nLake Darian, WA 83136','45145','North Ottilie','1975-08-25','Dr. Jamil Kemmer','Kylee Lubowitz','+3418461912028','+9620485338502','Lain-lain','Mrs. Angelica Mayert DDS','673 Roob Estate\nNew Desmond, CA 07866','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(31,'Vickie Koelpin MD','reinger.candida@nolan.org','$2y$10$uyPbaMXLWHltz37gPIYZg.7.jF4Yd0d1GbPLL/dso3rBOMawknuai','WNA','P',227,192,'9815 Boyer Branch Suite 680\nRosshaven, MI 05621-2961','64586','Littleside','1999-01-23','Tressa Pacocha','Reid Toy','+5284716081675','+4513940355401','Keluarga','Mr. Cleve Haag Jr.','8538 Hessel Forges Suite 565\nEast Allisonfurt, WI 76759','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(32,'Sean Smitham','balistreri.eryn@hotmail.com','$2y$10$2LGnHrYcALCVcYSP0k0YiOy4d80yiUZHcFHwbH2LX2Zb6ppfLNGYG','WNA','P',125,208,'1267 Feeney Glen\nSouth Sandrine, AZ 12633-5155','9466','Schambergerville','2003-02-10','Shyanne Roob','Muriel Kling','+4485792078898','+2934252757035','Teman','Patricia Green','345 Bernier Isle Suite 821\nNew Melyssa, NE 20715','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(33,'Prof. Bonita Christiansen DDS','max20@herman.com','$2y$10$5DhlzGKUM5qEKuc5jL1/IOWy33KRaSfJY.ipPy5vXVs3vB4JP4JIe','WNI','L',166,58,'908 Abraham Crescent Suite 842\nHaleyland, MN 38844','61516','Lake Minerva','1988-03-16','Ms. Keira Frami I','Dr. Wilfrid Cormier MD','+8851076002754','+7403639204888','Lain-lain','Dr. Angelo Hayes MD','9812 Luettgen Greens\nRolfsonside, NH 46425','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(34,'Kirk Hahn PhD','sydni.lockman@hotmail.com','$2y$10$OzTm6ayr5JygwnjrrnLxLON4T0auvs3s.IiDCRmGUb/fykZFk/tr.','WNA','P',114,113,'172 Rory Freeway Apt. 870\nJohnsontown, AZ 29294-0264','93826','North Lolita','1978-11-11','Noemie Roob','Destiney Grimes','+3008008565551','+9343866484240','Media Daring','Jazlyn Hudson','3113 McGlynn Tunnel Suite 826\nLake Daynaport, ND 95098','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(35,'Olaf Senger','marjorie.gerhold@paucek.com','$2y$10$jeOuDEfvllJB70cnwFyazeNSOh4sHZqt5yqqFIN73eXrOBluTYfXS','WNI','P',104,64,'65943 Abshire Passage Suite 288\nRosellaville, MT 52554','40907','Krajcikbury','1993-08-03','Granville Macejkovic DVM','Ms. Brionna Kunze','+2971800647948','+2453305609606','Keluarga','Brennan Kiehn Jr.','12725 Tatyana Ramp\nNew Colinport, CT 89411','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(36,'Mohammed Murray','prosacco.coty@rosenbaum.org','$2y$10$.AbZ7pNdUe5ArtwEAZoCn.hq/Z9oo3Beul5Lo.k.Fxey60dEh00BW','WNI','P',173,51,'760 Timothy Station Apt. 563\nNorth Terence, SD 97021','8689','Spinkaport','2009-05-20','Ms. Catharine Emard','Lexie Langworth','+6578193303287','+8480497981570','Lain-lain','Chester Labadie','1747 Concepcion Viaduct Apt. 765\nLake Tracy, AR 77413','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(37,'Pearlie Dickinson','myron89@gmail.com','$2y$10$j9U2Omxf2V7eOB8WK4kawu6uuhrems37uiwDMJ4Ed2sQ1CCxqobTa','WNI','P',173,107,'479 Filiberto Rapids\nFridaport, MS 62633-5133','26381','Stacyfurt','2004-03-07','Kailey Bruen','Maymie Wisoky','+3824012602170','+8399527598613','Keluarga','Oren Feest','8103 Frankie Village\nAureliohaven, AK 39920-7805','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(38,'Dr. Kyra Kuhn','citlalli26@yahoo.com','$2y$10$x7HNx3P35DQEZy3C6pSnguQfRDc.oFgDLXKJWHIuyV8McAI6JY2dC','WNA','L',160,112,'441 Brakus Coves Apt. 429\nDahliashire, NM 27345','48878','South Denaberg','1972-01-26','Clinton Tillman Jr.','Prof. Unique Franecki','+8976004835120','+4795571125346','Media Daring','Jeromy Leuschke','3672 Buckridge Loop\nPort Valentinefort, TX 76851','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(39,'Christop Bayer','geichmann@corwin.info','$2y$10$vc6.KaBobvbgXRj26EAzzOair9kH/1BC4snZsuXZE49S2AcRnybCK','WNI','P',185,241,'481 Abernathy Lock Apt. 998\nEast Jennyferton, WV 94886','8625','New Nola','2006-05-30','Orland Armstrong','Everette Berge','+7481937425268','+8768742276432','Lain-lain','Rosendo Hyatt','5815 Hyatt Glen\nSouth Newell, MS 71273','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(40,'Mario Halvorson Jr.','murray.tad@hotmail.com','$2y$10$Y3iPHDx6FRl8ryHEuvWOxu/454E0HxBzAa09Z5PvpmpK9B0xgQAqO','WNA','L',181,111,'490 Haag Ramp Apt. 575\nLindshire, FL 35410-8598','63133','North Mohammad','1979-12-20','Ryder Carter Jr.','Dane Bogisich IV','+9154577658715','+8448778341174','Lain-lain','Mrs. Kassandra Douglas','431 Reynolds Wall Apt. 140\nNorth Vivatown, OR 14287','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(41,'Samson Abshire Jr.','jkunde@gmail.com','$2y$10$tA1hQ6rsPyI2E9sdX8B9Luf3iD12ksfkWYgsIkIlKLgt8GYBBt/Cq','WNI','L',151,157,'5115 McGlynn Flat Suite 540\nWest Harold, WY 04293','13236','Ricetown','1972-05-01','Clyde Collins','Roxanne Anderson III','+6856194604627','+4285482486867','Media Daring','Lavada Kuhic','982 Abe Drive Apt. 500\nNew Jordy, RI 25370','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(42,'Valentina Kuhn','nlueilwitz@larkin.com','$2y$10$3o8885Nrf7XYTqbZYXiRru48XDaK.QOWDdAwfUiocoXKNY79bTl7y','WNI','P',157,196,'87391 Brock Road Suite 114\nMalliebury, AR 93194','99269','Port Alek','1993-11-17','Roselyn Leannon MD','Anita Ziemann','+9161756785039','+5485401910923','Media Daring','Andre Feil','49131 Ruecker Coves Apt. 366\nPort Darrin, SC 69752-8993','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(43,'Vivian Powlowski','rdaniel@bosco.biz','$2y$10$N/7Lrz4Z4CJQQAyu5qurDe/iek1V4SdXbfE8.C6vB35WLTl/Xfeti','WNI','P',135,183,'7680 Garrison Expressway Apt. 448\nBlairport, HI 80665','76415','Port Elmer','1987-05-20','Nicole Lueilwitz','Sabryna Bailey','+4479571647014','+4936347051472','Media Daring','Gladyce Smith','94496 Schulist Summit Suite 230\nEast Jensenchester, ME 84510','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(44,'Lauryn Flatley DVM','ydickens@gmail.com','$2y$10$V/UpJNsf.QkYvJDhXDFjb.O7w6T/FLzotIJl0UwJhw0mvXXaJ9LqG','WNA','P',126,73,'5298 Jettie Fort Apt. 995\nPort Brownmouth, WI 06316-2813','77539','Port Godfreyport','1985-04-24','Miss Daija Jerde','Prof. Yasmeen Schultz I','+9662954038803','+6842158458279','Teman','Adalberto Gulgowski','113 Ward Manors Apt. 070\nMedhurstbury, WY 60483','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(45,'Miss Viva Jones Jr.','amari46@bode.biz','$2y$10$VP3THjLobKnA6ZYojQyhsuu71KrHdT18iZS/h6029oN5OIVx.xUsi','WNA','L',131,152,'22964 Ava Place\nLake Shanonmouth, MO 78121-0420','37825','Maudieport','1975-08-02','Halie Mann','Mateo Yundt Sr.','+7250700079887','+7744191273135','Media Daring','Cary Feil III','9926 Lowell Roads Apt. 328\nJessikaside, ND 66920-0086','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(46,'Miss Suzanne Hane DDS','eliezer.goyette@yahoo.com','$2y$10$4Ihx6dQHOT48wf5.3eEG5.ihPLz2RymnG7xyuKDqfKwEPQbFiwytG','WNA','L',104,113,'217 Karen Walks\nLake Alisa, MI 48136','89352','Lindtown','2009-06-02','Vincenzo Rice','Ms. Emely Armstrong','+8861163418655','+4878182133444','Lain-lain','Dr. Ted Hills','5133 Kautzer Spurs\nNew Isaiah, NE 18074','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(47,'Gaston McLaughlin V','wade51@hotmail.com','$2y$10$1mlrcob.N/frahW7p4vdLeIu0ZK/EEDzD9kWHa2zrfQGQnGNMN4LO','WNA','P',138,88,'143 Aiden Ford\nCalistamouth, VT 82232-1071','75510','Binsberg','1977-09-26','Dr. Jermey Kunde','Elijah Lebsack','+4579970136067','+2796106258835','Lain-lain','Elinor Morar','11479 Kole Creek Suite 079\nMuellerville, AZ 91708-7665','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(48,'Cindy Simonis','martine.batz@hotmail.com','$2y$10$gQsEVrAsRkyZkbjnMwNVZOxzehfL9Az8ywG2/rISqBmzrB24dIWWG','WNI','L',215,83,'334 Feil Shore Apt. 703\nNorth Careyshire, TX 81179','96388','Ricefort','1980-05-28','Mrs. Larissa Mitchell','Eric Baumbach','+1987082058455','+8261315985026','Media Daring','Emmitt Gulgowski','827 Jude Rest Suite 022\nMariettafort, CA 67350-6626','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(49,'Pete Swaniawski','eabshire@gmail.com','$2y$10$0XZFO4YgAJJ0ffgSgQmMhOm2OzbtcrbAj.kEMkjRGrZIc.TwJsHkC','WNA','P',136,162,'26745 Baumbach Overpass Apt. 451\nJuwanchester, MN 30462','55364','Marcelborough','1980-12-10','Marques Bednar','Mr. Solon Kilback Sr.','+9948362411195','+5437834978956','Keluarga','Maritza Eichmann','40804 Cremin Junction Suite 342\nKadeburgh, KY 75912-2727','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(50,'Mr. Garrison Roob','andreanne.haag@gmail.com','$2y$10$6Ck9DutsDAqyfQ2BDiXQsO2zk1Rs5y0H3ufrQJPauq69SnXLU56zK','WNA','P',156,116,'784 Bogan Common\nNorth Naomiland, MN 88855','41676','East Dewayne','1984-06-08','Aurelio VonRueden','Aylin Parker','+7750442424882','+7360652462896','Media Daring','Scottie Macejkovic','41436 Hudson Key\nSipesside, IL 56802','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(51,'Marian Tromp','jerry.cassin@rice.com','$2y$10$ajHu8hIz11RqyZVcrAh6JOrHwp2OIPe2lsRRPnTuQYDQxtKYbcJYW','WNI','P',138,73,'10553 Hagenes Hill Suite 414\nGerdaside, RI 61730','11249','Wilberthaven','1985-03-08','Katlynn Eichmann','Vanessa Schoen','+2541726551564','+2524036317140','Keluarga','Bethany Morissette','504 Schneider Light\nLake Greg, NJ 07498-6780','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(52,'Emelie Bartell','schmeler.ewell@hotmail.com','$2y$10$faM46p6/mCd95eE7vYV6WO2fk6nJMzs8puC3wwi8KUw.scx0uXMbW','WNI','L',104,238,'1887 Rocky Fields\nRunolfsdottirberg, LA 13078-3153','31842','New Kraig','2015-08-27','Prof. Armani Kautzer','Nikki Gibson III','+4657004721372','+4101492882951','Media Daring','Mr. Isaac Little II','133 Tyler Canyon Apt. 182\nLake Margaritatown, SC 79982-0975','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(53,'Dr. Lillian Friesen PhD','mervin.spinka@simonis.info','$2y$10$qPK8CDg/VVtKpCABXrC4W.OpdzxCBKIbM4yQsGb9hJmp3HI9rPFT6','WNI','P',211,91,'25561 Korbin Valleys\nStephanyfort, DC 15630-9672','59234','Vladimirborough','1997-03-07','Prof. Percival Sauer Jr.','Violette Runolfsdottir','+9216735856022','+6508026001575','Lain-lain','Fernando Harber','156 Darren Springs Apt. 552\nNew Lloydland, NY 84211','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(54,'Prof. Maximo Funk','wquitzon@hotmail.com','$2y$10$Q/hd05hIBe5x4Fkw4RHgfeTQveWB0WejoQz6N337hfdVAJRWDIPsC','WNI','L',170,236,'55221 Donnell Squares Apt. 318\nCasperchester, FL 85092-2785','65659','Weissnatland','2009-01-22','Alfonso Dicki','Dayana Sporer Jr.','+3688664637723','+8758723487889','Media Daring','Isaac Hudson DDS','874 Baumbach Parks Apt. 855\nStephonchester, SC 95352','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(55,'Karl Wehner','gilberto85@gleichner.org','$2y$10$kXrup3dmLmD2x9hWWJhE3uq0qE6FXWjb59LNjdVjC/fhqrE8t5FrS','WNI','L',222,169,'150 Bednar Square Suite 029\nEast Dallin, MN 63389','71259','Lake Wilford','2006-04-05','Miss Kendra Johnson I','Ford Ryan','+1164591597002','+6304538464892','Teman','Miss Therese Heathcote I','17137 Morissette Harbors Apt. 087\nNew Mohamed, NH 76551','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(56,'Mrs. Christelle Kub','littel.thelma@hotmail.com','$2y$10$Ji1q6jZLGqpl1eZlSRHiE.9wL8T6kmunmTZKiAYRe315TPnXV29Je','WNI','P',145,195,'1815 Reina Lights Suite 629\nSouth Lacey, NE 42134','346','Ladariusstad','1988-04-10','Tyrel Smith','Linwood Koss','+3071191699581','+5564493308854','Lain-lain','Miss Ivah Jerde','515 Littel Squares\nZiemeburgh, MO 80578-0973','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(57,'Antonio Shields','brandy.reichert@stokes.com','$2y$10$M7jWE.rIzYZMv1RKaVNADeGvv5N7qW3LpENNKbrdx9cNiqghSrZYO','WNI','L',219,229,'8094 Margaretta Fork\nEast Dolly, IL 16474-5714','12731','Kristopherside','1983-04-23','Mrs. Viva Koss DDS','Etha Hodkiewicz','+6310838597212','+6102821755042','Lain-lain','Karine Powlowski','7234 Cathy Harbor\nNew Colin, MA 80759-3011','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(58,'Berneice Stamm','blaze86@satterfield.info','$2y$10$wk7G/UoxLwHk1kGjJOxSkOErB4XNWKngmDff.8puOXaN0G8yhj84K','WNI','L',209,101,'25868 Miller Spurs\nLake Rosella, IL 69218-0059','9706','Port Darenmouth','2016-12-14','Prof. Giles Wintheiser V','Yasmeen Abshire','+8641738510142','+6615051084499','Keluarga','Prof. Loraine Bins Jr.','2991 Kris Brooks\nMrazshire, MO 93872-9509','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(59,'Adelle Hagenes DDS','kerluke.tommie@hotmail.com','$2y$10$t2oz6PT.FdJomLxDcrZX1.gA8jp98TmDA83.TEwrOFABJNO1MIfg2','WNA','L',147,120,'42966 Teagan Mountain\nLangworthland, IL 18666','2284','South Immanuel','1976-06-11','Conor Bashirian','Ms. Idell Cronin Jr.','+2767822618149','+9095134171011','Keluarga','Trevor Welch','91995 Theresia Mews\nCreminshire, NH 25739-2427','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(60,'Carmen Cronin Jr.','runolfsson.roman@gmail.com','$2y$10$zkPTfpCi21Pmo/cr7kuVLeIB4/RDMJGfXjiTKZj8CTfzWWeYppk4m','WNA','P',109,168,'265 Lindsey Lock Apt. 517\nNorth Nannietown, CO 94509-1930','90873','New Gisselle','1978-06-30','Melvina Beahan','Gilberto King','+1915512706055','+3954522422818','Media Daring','Lazaro Gleichner','12488 Witting Plaza Suite 020\nMayertchester, NE 54933-0825','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(61,'Kristian Sanford','cremin.carlotta@ullrich.com','$2y$10$ROO5w9SymEci7SpAw9jkPuekFt3xBnz1MbcLdNHd7WUMUT3N4XdjS','WNA','L',232,164,'31528 Hilpert River Apt. 247\nNew Jessport, WI 46163-6161','82897','Creminview','2008-11-06','Emmet Monahan','Trevion Nikolaus I','+3943334187201','+5048704215190','Keluarga','Prof. Dee Lueilwitz','7200 Schaefer Trace\nWest Pearlton, FL 92043-6142','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(62,'Trinity Abernathy','gschultz@yahoo.com','$2y$10$ufN7dYyx4biBN7bNzDxnnezKCh8tKjvzDeAYFm6yJ6dzrQ07ThK1i','WNA','L',121,72,'9847 Hellen Mountain Suite 544\nGlendaburgh, LA 35776-7328','48832','West Catharineshire','1973-08-24','Emery Hermann','Loyal Willms','+2307146663386','+8025450729692','Media Daring','Prof. Ryann Lind DDS','415 Feeney Corners Apt. 320\nNorth Meaganburgh, NM 62043','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(63,'Jayda Keebler','ryan.langworth@hotmail.com','$2y$10$nOQUYFde/a0c0BapkvDM0OJLoWQVjTS/md3GfIWMWGc5PwbKp0hwq','WNA','P',144,69,'7160 Koss Manors Apt. 303\nSouth Cyrilfurt, VA 84279-4560','64428','West Delphineville','1985-12-28','Alexandre Von II','Marquise Bauch','+9801292282794','+7806034056131','Keluarga','Brandt Bogan','398 Lind Club Apt. 179\nLeannonchester, MN 19406','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(64,'Jalon Kuhlman','kristopher87@morissette.info','$2y$10$IHHO/H91VvtQl0tJ.C7eG.QaXvT1JyhVQKJ3c9QHdHTh2/loF3i0K','WNI','L',141,101,'5284 Paucek Turnpike Suite 569\nDaxmouth, PA 14516-6226','62640','Jaydonmouth','1980-11-09','Freida Cummerata','Sheila Emard','+4024061985765','+5945777287155','Teman','Milo Yundt','3030 Murray Summit\nWest Nicofurt, GA 34922-1962','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(65,'Cordia Gulgowski','alfred.harber@gmail.com','$2y$10$QeOrFSwsQuBg0oCOUAvNQuGz8HO3b4ra53Uk/1uKHvXw8pbNP7.g.','WNI','P',227,228,'90697 Tia Stravenue\nDougburgh, VT 38559','36813','New Cristopher','1987-12-13','Prof. Arch Bradtke','Beth Purdy','+7600642287283','+9646342535855','Teman','Ollie Lind','214 Stoltenberg Glen Suite 673\nBritneyside, WY 26452-9818','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(66,'Prof. Clement Botsford IV','canderson@runolfsdottir.biz','$2y$10$2ySf85gPKnB4usNti5Yq5eShiY04xnE.jwcf7CF4ruGh9kFCSuUy.','WNI','P',166,115,'203 Aubrey Lights Suite 524\nSouth Ericka, WI 17390','78103','West Jonatan','2014-12-02','Prof. Buford Gutkowski','Blaise Champlin','+6078780182024','+2930710605125','Media Daring','Assunta King DDS','2452 Hagenes Mountain Apt. 288\nReichertside, HI 46013','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(67,'Jeffry Harvey','schumm.jerome@quitzon.com','$2y$10$s7or5nmCDamTanF/wP1y9um4bGku5Qc0PtWENebca6jLAtf33Eepe','WNA','P',157,105,'739 Liza Roads\nWest Willieburgh, MT 67916-0442','25189','East Robbie','1986-10-02','Birdie Hermiston','Dr. Damion Stanton MD','+5235561028756','+8238855445141','Media Daring','Caesar Daniel','4615 Ana Row Suite 396\nLukasburgh, VT 59192','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(68,'Damon Franecki','felicia97@bergstrom.com','$2y$10$Ps0t6Zj9QfFMmEKQX6M3SecFUKdhH3koMni4wcH80OG.E2ywPLiF6','WNA','P',180,143,'3144 Stokes Cape Apt. 246\nPort Shaunshire, IA 02977','33038','South Verdafurt','1997-10-02','Danika Stracke','Pasquale Spencer','+9600795384528','+9523608406677','Keluarga','Kris Durgan','13406 Lang Harbors\nLennytown, HI 95733','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(69,'Alysa Hand III','faufderhar@herman.net','$2y$10$iphyF1HH4f2MWIijJ.aVgemfaLqZZ5Q16MfW42CE0qwJ.vUp84mD2','WNI','L',174,181,'716 Mohamed Ports Suite 308\nCorbinfurt, NC 40696','31249','North Gunnermouth','1988-08-05','Annabelle Purdy','Lora Balistreri','+2953241911425','+9599563015134','Teman','Kiel Renner','6419 Langworth Ways\nEast Quincy, ID 49388','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(70,'Skyla Considine','kbernier@gmail.com','$2y$10$ilqq2nuQOvkRc0RwcVrQwefQh5/ZI4JsbLOxGSOxRONFboXC00ulq','WNI','L',182,209,'153 Bo Islands Apt. 878\nLake Tristian, MS 88169-0842','93698','Caesarmouth','2008-08-15','Vincenza Lowe Sr.','Prof. Sister VonRueden','+7489548326410','+5478968221231','Keluarga','Erwin Witting IV','143 Francisca Point\nSouth Wilberton, OR 27619','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(71,'Garret Quigley','ruecker.annalise@labadie.net','$2y$10$Jd./xFmFf3qdATX0iP4GTOtUBT6os4h1jgJl2F.Qo0bNfdyD/3yKK','WNI','L',126,199,'310 Borer Parks\nPort Yasminefort, HI 43750-1821','97834','Annamaeport','2017-12-07','Malcolm Hand','Anderson Monahan','+6894975020020','+5717697886638','Teman','Krista O\'Keefe','83165 Martina Heights\nHammesside, SD 79343-2711','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(72,'Prof. Dominic Schowalter','murazik.marilyne@emard.com','$2y$10$vCRt5PpUAT6wkPfnM11Ip.rRea75B.mEX018x5n2hSDxO3ArbuDuy','WNI','P',202,237,'77962 Collins Prairie\nNew Felix, DE 15811-3008','85051','Alvahmouth','2017-09-14','Prof. Joel Muller MD','Meghan Purdy','+8455168292305','+9124428129866','Teman','Vallie DuBuque','47797 Kurt Locks Suite 074\nLake Polly, GA 43804-7728','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(73,'Emilie Wehner','sanford.halle@bergnaum.com','$2y$10$OGcSL1qw9bY1IVVJ9kOar.6CZUOnnGrw8lwl.x8RBIkHbe/Q9fLTS','WNA','P',107,147,'57405 Flossie Ferry\nNorbertobury, ME 46311','74376','South Connorchester','1986-05-26','Jennifer Harvey MD','Ebony Corwin','+3963204566749','+1783589510371','Keluarga','Mr. Oda Mraz MD','1836 Delmer Brooks Apt. 806\nNew Winfieldborough, MI 97962-1817','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(74,'Emilie Feeney Jr.','ymoore@yahoo.com','$2y$10$DsMqwDEqKZbnAIVq1ysT8.StvtwUvepGqy4R5K5RnKmAnSeppL1EK','WNA','L',134,117,'49542 Reichel Ports Apt. 865\nNorth Zoeyberg, LA 99399-0358','40761','Carterton','2015-12-17','Braeden Koepp','Davin Johns','+2592375989592','+8322564830022','Lain-lain','Rusty Dach','875 Brennan Rapid\nJakeland, IL 70813-0051','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(75,'Clarabelle Davis','ayana.weissnat@hotmail.com','$2y$10$pG/mEPJ71OM541ePhmUZUuVyjvEr0xB6ZxaBzARDO3aEF.bSGj8fq','WNA','L',224,204,'586 Maybelle Lodge Apt. 182\nHammestown, OR 02168-0170','59209','New Felicitahaven','1976-11-18','Prof. Roman Welch','Perry Veum','+9948393907327','+6169103244378','Media Daring','Freddie Dibbert','839 Toy Way\nNorth Salvadorview, NC 46120','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(76,'Zena Lemke','dahlia24@yahoo.com','$2y$10$qe2M7fcCFIE82Ux5itSz3.OcRZpPVskT0QET8o6Us.kUPox5/qoHm','WNA','L',123,85,'6578 Mona Union Apt. 953\nSchmittmouth, AR 83443','51197','Yesseniabury','1973-11-14','Emmett Marvin','Loyce Hickle','+8158213125445','+6845346516967','Keluarga','Dr. Lucinda Hegmann IV','17717 Bartoletti Cove Apt. 798\nNew Janaburgh, MD 94001-8020','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(77,'Jamar Kassulke','strosin.ella@murazik.org','$2y$10$N5wLkOXh191ar7EKt.ZKV.tGuFhNA4s5JJIyLoygayi3SWgg2ql6G','WNI','P',164,245,'75872 Lon Parks Apt. 096\nRobelville, MI 57583','75213','Carolynstad','2018-07-18','Claude Frami Sr.','Noe Wunsch','+6518640094741','+4223574333067','Media Daring','Mavis Muller','1640 Rolfson Rapids\nWardfort, DC 46247-9833','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(78,'Thad Moen','zrobel@gmail.com','$2y$10$77kYslEVKGDFaJ9Oodq/AOcbTiIVAn4WScf9gqpDlyjSuDy4CzWvK','WNI','L',168,93,'857 Bahringer Manor\nLake Dianna, NV 71524-6432','9183','Hillschester','1972-03-26','Dereck Homenick','Damien Feil','+7011098901047','+6481974570004','Keluarga','Tommie O\'Conner','581 Dee Springs\nSouth Libbyton, WA 80293-8500','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(79,'Mrs. Eleonore Jerde II','mohr.stevie@trantow.info','$2y$10$8jcSMGANj5rbTLiCzc.FtO3hXiDffjCVcyxiDd/yqoAg5edgNxADu','WNA','L',175,206,'96590 Flatley Ramp\nWest Kacishire, MT 70640','65677','Goodwintown','2006-01-15','Mario Gislason','Hazel Spencer III','+7031514454226','+8998930879514','Media Daring','Yvette Walker','9077 Janet Vista Apt. 201\nPort Giovanna, NM 03056','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(80,'Felicity Ratke','jarrell79@rowe.com','$2y$10$47/pPGao/k4xBWivgsbi1uNMOi/r/nRCYQoZ42hPPgOLHEP9Eq7J2','WNA','P',123,122,'7691 Lang Glens Apt. 589\nBaumbachchester, WA 38625-4880','38187','Skilesview','2009-07-14','Rowan Dickinson','Brycen Koepp','+6755269174812','+2832132029984','Media Daring','Emmett Hegmann','4978 Hill Mills\nConcepcionfurt, NH 52080-3256','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(81,'Prof. Erwin Kertzmann','huels.providenci@hotmail.com','$2y$10$tZE0lsG1V2VJy67AGHTxS.3PxL7tARc29tQITf4WjOIJGfHHkN7QS','WNA','L',212,172,'10683 Wilkinson Highway\nEast Malindamouth, AL 97934-3208','82090','South Cristopher','1981-06-18','Ezekiel Kuphal','Genoveva Jaskolski','+7686745617989','+1018031218719','Media Daring','Nathen Witting','78682 Nora Parks Suite 579\nConnellyton, ND 04888-6242','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(82,'Ellie Aufderhar','luisa77@yahoo.com','$2y$10$Dl5.rau/HY4.SzSqabpr9uyllYDIXIZ/N6FKvPyQa4CJWJ1yWaM1q','WNA','L',142,216,'930 Ruben Ranch Suite 806\nSatterfieldton, MA 30031-8841','4955','East Altaview','1979-03-24','Idell Maggio','Dr. Nicholaus Reynolds Sr.','+1050476994347','+5147339855561','Teman','Herminia Pagac','59323 Ankunding Row Apt. 498\nNorth Titus, AZ 71282','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(83,'Mark Lind','candace19@auer.com','$2y$10$x9/hzfbLQ5rhOEQEYbpXT.dcFSyKhGyjpTgti9U0TKuKQu9qsVxTC','WNI','L',244,76,'6589 Little Drives\nSteuberstad, WV 29473','50950','South Pierrestad','1999-05-25','Ladarius Daniel IV','Wendell Hoeger','+5244359877638','+5476199221642','Lain-lain','Hertha Dach III','78336 Aufderhar Stravenue\nKaleystad, NE 81022','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(84,'Darion Becker','emayer@ziemann.com','$2y$10$OKpKPqbiyR2xBbBdo3MN7.sNLDHi6Wy4IYzrmuz3RmJUmEkBGFM9i','WNI','L',224,152,'225 Rosamond Fields Apt. 707\nNehatown, SD 52746-3814','37071','Lake Mauriciohaven','1983-07-07','Cassandra Senger','Heath Will V','+6790777125011','+2522388132715','Media Daring','Lauren Bartoletti','2305 Pearlie Rue\nFarrellville, AK 34483-5647','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(85,'Jazmyn Rosenbaum','scarlett.jakubowski@batz.com','$2y$10$O7T7OvpES7RoSC88hjBOX.McGgQEXcLcibrA.ikw6kndgHygGA6cW','WNA','P',151,157,'34906 Jaskolski Parks\nNew Henderson, MN 58164','73155','Rippinfurt','1976-09-24','Prof. Guido Labadie Sr.','Millie Zulauf','+7251151634455','+8314036711065','Keluarga','Brice Rodriguez','3441 Reynolds Village\nEast Fritz, UT 13148','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(86,'Halle Klein','monserrat.gerlach@muller.com','$2y$10$.CafM.dnjNeYLvn.5NrSveEYcn/1i7D65QTJCKlZ//d6yB.ZrV62i','WNA','P',101,197,'407 Padberg Bridge Suite 501\nMyrticeborough, NM 12713-5253','52708','Port Bulah','1982-10-09','Merritt Johnson I','Ludie Russel II','+7492937821408','+2725014609794','Media Daring','Loren Pfannerstill','376 Kamryn Mill\nSouth Eliza, NY 00861','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(87,'Dr. Unique Reichert V','pwill@yahoo.com','$2y$10$K31/MtoTLJSlFM9zU.ztpe7qCap.deTERRWSdNJAZzYv1a1dfIu/G','WNA','P',182,70,'8638 Loma Springs Suite 762\nMaynardburgh, AK 94969','40371','North Sim','1981-04-17','Mikayla Littel','Carlee Glover','+1016315167751','+7536614009190','Media Daring','Carrie Towne','719 Mohr Stream Apt. 320\nSipeschester, ME 97062-3618','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(88,'Miss Else Hansen Sr.','eabshire@hoeger.com','$2y$10$EGWhAXrzAu85zi6f85MdRuVXmMZWg3TMBfSwzhC9UR1CvhmVCN0L2','WNA','P',232,154,'419 Gleichner Club\nLehnertown, MS 11048','23245','East Cassandre','1978-03-16','Dr. Melvina Hayes','Carroll Williamson','+8513261472411','+3365805244823','Lain-lain','Mr. Ernest Koch PhD','4841 Nicholas Overpass Suite 073\nNew Dinaland, VT 34945','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(89,'Mr. Ansel Sawayn Jr.','spencer.lily@gmail.com','$2y$10$sNqvFjM0moktbzSUQJm3wOEerq1M1PPT5jQJsGRW2YHY7yN2YEXAi','WNA','P',180,188,'416 Jones Corners\nNorth Curtismouth, SD 94887','82989','West Daltonville','1992-12-01','Jaquelin Little','Lisa Mertz','+2082731258550','+9346038034782','Teman','Ms. Ollie Shanahan','4450 Zetta Place Suite 728\nMyrtleview, ND 74039','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(90,'Corene Stiedemann','aiden18@rice.com','$2y$10$7SEYzqHBWcbLze46/KOvn.TF5TT7riuuAoduDRjnzHSb0ym1OF6VG','WNA','P',242,207,'7204 Anastasia Fort\nPort Colton, UT 96470','99176','East Dorthyfurt','2018-01-07','Harrison Ernser','Amelie Metz IV','+9672203662877','+7463367422209','Teman','Marilie Stamm III','65405 Becker Pines\nNew Augustine, AR 43881','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(91,'Gail Macejkovic IV','schultz.mustafa@gmail.com','$2y$10$ukcgPpOvlThPXE0BK3EC3ezKxpiMQy/SiAebPTF.vtH1bnEYQRF2G','WNA','P',123,235,'34253 Will Court Suite 698\nAhmedtown, WY 32557-4431','60643','Andytown','1981-10-17','Halie Swift','Dr. Roberta Bayer III','+9871069800990','+4116438355430','Keluarga','Donato Steuber','778 Bennie Fork Suite 093\nNorth Makenziefort, CT 31703','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(92,'Prof. Elisha Stroman','lupe97@gottlieb.com','$2y$10$0ZSXvEo57ZPY3WV4fhSwAeEUvMNVfiX9H9lxIXcOY9r9W53nAHw7C','WNI','L',111,227,'82410 Herzog Viaduct\nLake Maxieland, CO 19056','49064','Bednarland','2014-10-07','Camron Kerluke','Cindy Marks','+2568356302960','+4759538087209','Keluarga','Arthur Okuneva','621 Bosco Prairie Apt. 729\nNew Rodrick, AZ 76515-8337','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(93,'Mrs. Vesta Marquardt III','johnson.estefania@yahoo.com','$2y$10$6u/ALywOfhL6mmvfsSYAsOM9ZK8bvK93CPTUxa8H/zLQ6W/8KclDC','WNA','P',139,64,'662 Roberts Drive Apt. 540\nLake Ozellaland, AL 55968-2058','41957','Auertown','1985-09-10','Vern Douglas III','Ms. Rosanna Oberbrunner','+1717391319600','+4680525477833','Keluarga','Mitchell O\'Keefe','3317 Schmidt Circles\nMarvinland, NY 04630-6671','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(94,'Mrs. Antonette Reynolds','berenice.wisozk@herman.com','$2y$10$/6XPAmvpESHiPFkNqRjWV.OwK4MOAsudG.qDyVrVNJnD/xt2t9Wbi','WNI','P',185,234,'120 Cassin Shoals Suite 219\nFranzshire, OH 27754-2013','11252','Vitoshire','1973-03-11','Karina Roob','Markus Fadel','+1911869670211','+5941196887051','Media Daring','Raymundo Schneider','638 Carlotta Light\nWisozkland, DE 47968-7914','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(95,'Dr. Carey Hauck','wkohler@yahoo.com','$2y$10$cM6NAz5sWX2FMbii7jF9CumH0plmuK2iDryDgaGCGbbC6F6UFjV3O','WNA','P',194,105,'809 Maryse Bridge Suite 955\nDariohaven, DC 21228-2490','63643','Port Aylatown','2005-02-02','Keshaun Gorczany MD','Mr. Barton Buckridge MD','+5091074205400','+4921846613625','Media Daring','Daniella Cronin','75380 Pouros Extension\nReillyhaven, RI 74882-7923','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(96,'Arne Effertz','msatterfield@gmail.com','$2y$10$U/LlORR7cK98k131AEwA/OEwzGp/t5pUcXdA4XWQp8HpgLGzXTco6','WNI','P',142,95,'5816 Jerald Mountains Suite 078\nWest Johnson, IA 79955-2954','57805','Port Daltonchester','2011-05-01','Mrs. Ava Monahan DVM','Ms. Annetta Treutel MD','+7500561780463','+4975103481661','Media Daring','Mohammed Hackett','825 Violet Skyway\nJaymechester, MS 64920','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(97,'Dedrick Von','otho76@gmail.com','$2y$10$.ofQSb6yKQ6Lou5ii5OjaOVrehVQKQuK2YN98XtUvc7KLc3ID.7Ju','WNI','L',231,219,'4772 Twila Run\nSwiftmouth, SD 33660-1577','132','East Rebeka','2012-08-11','Ernesto Gulgowski','Hortense Lockman PhD','+5376195778545','+9343220954781','Keluarga','Jules Ankunding I','126 Retta Burgs\nZakaryview, FL 11026','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(98,'Ms. Bettie Wilkinson I','nichole44@yahoo.com','$2y$10$TlufLznfGMV7oqZHyjYRFOIABD1Gh4M8/mRRBoHq5RSHDS1i3C6vS','WNI','P',248,237,'339 Ruecker Canyon\nPort Stephontown, KY 68086-7567','49893','South Samton','2005-03-20','Arielle Bernhard','Marlen Cassin','+4203143825916','+3206398596196','Keluarga','Alexys O\'Connell','33605 Borer Point\nKonopelskiview, IN 58304','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(99,'Ms. Pansy Graham','timmothy16@heathcote.net','$2y$10$FGAOXccXzXcU4oAkU9q9JetzgbDJeE0Imk70RGUadU7M1T5CjHsMm','WNA','L',100,63,'70799 Weissnat Corners Apt. 478\nWest Fredatown, KY 47799-8342','47198','Lake Caterina','2018-07-01','Joana Littel','Keyon Mayert','+4897445862608','+9290724131671','Teman','Johnathan Kovacek','605 Eulah Oval\nDachchester, WI 05569','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(100,'Grover Hane','langworth.kamron@watsica.org','$2y$10$wicxq0iYv5qjDpCNJAmy9OO1ZTIOItq118n1DYA9yvthm3CpS7rpu','WNI','L',219,115,'70417 Rodger Fall\nCedrickview, KS 93965','72381','West Terenceville','2014-12-04','Prof. Stanford Tremblay','Nelson Gusikowski','+5415389827268','+7336732510544','Keluarga','Mrs. Priscilla Abshire','1734 Runolfsson Passage Suite 187\nSouth Elzaland, KS 43898-8896','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'0',1,'1'),(101,'Dora Sauer','omcclure@gmail.com','$2y$10$VEHfXHCMPq8nKQdCEGf74.fpf3olQF9luoKvrAqjOh0QGQVwM75h2','WNA','P',227,162,'25131 Joel Pine Suite 594\nCasandraberg, NE 93059-3833','42730','Rossshire','2018-01-14','Heaven Borer','Sheldon Kutch Jr.','+8838130146078','+3575986951932','Teman','Adolph Shanahan','818 Tremblay Turnpike Apt. 358\nTerrillchester, NH 10488','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','photo_2019-02-06_15-15-12.jpg','1','1','pmb_baru','1',NULL,'1',1,'1'),(102,NULL,'njay@ikmi.ac.id','$2y$10$tmYC3ZAkwJ4y7ux04mPANOABZ8o/8pjRhQI0ZdjM11FUrOw/gqoTu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','1','pmb_baru','1',NULL,NULL,1,'0');
/*!40000 ALTER TABLE `pmb` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `pmb` with 101 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `role` VALUES (1,'Administrator'),(2,'Keuangan'),(3,'Dosen'),(4,'Akademik');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `role` with 4 row(s)
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
INSERT INTO `role_has_user` VALUES (1,1),(2,2);
/*!40000 ALTER TABLE `role_has_user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `role_has_user` with 2 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `user` VALUES (1,'administrator','$2y$10$DUNJjuYZMj.nWin5hFKfceBepoe7n7LwdBAyjMJUHvM9DbX.0AFRm','1'),(2,'njay','$2y$10$DUNJjuYZMj.nWin5hFKfceBepoe7n7LwdBAyjMJUHvM9DbX.0AFRm','1');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `user` with 2 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Tue, 19 Mar 2019 14:03:48 +0700
