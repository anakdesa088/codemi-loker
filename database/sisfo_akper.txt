-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2019 pada 19.58
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

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
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama_dosen` varchar(190) NOT NULL,
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
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `jk`, `tmpt_lahir`, `tgl_lahir`, `alamat`, `foto_dosen`, `tahun_masuk`, `email`, `password`, `id_kelas`) VALUES
(1, 'Mubarok', '2', 'Cirebon', '2019-03-12', 'Buntet Pesantren', 'foto.jpg', '2012', 'anak@gmail.com', '', 0),
(3, 'Asep', '2', 'CIREBON', '2019-04-01', 'Jembatan besi jaya no. 3', '50527355_2313093962055313_2973906858365943808_o.jpg', '2011', 'Jembatan besi jaya no. 3', 'password', 6),
(9, 'Dikky Martin', '1', 'CIREBON', '2019-03-18', '533 Mount Kemble Ave', '', '2010', 'asasaasasasa@yahoo.com', 'indonesia123A!', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen_wali`
--

CREATE TABLE `dosen_wali` (
  `id_dosen_wali` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen_wali`
--

INSERT INTO `dosen_wali` (`id_dosen_wali`, `id_kelas`, `id_dosen`, `keterangan`) VALUES
(1, 6, 1, 'apap'),
(2, 13, 1, 'sa'),
(3, 13, 3, 'asa'),
(4, 13, 1, 'sa'),
(5, 6, 1, 's'),
(6, 6, 9, 's'),
(7, 6, 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(70) NOT NULL,
  `kode_kelas` varchar(50) NOT NULL,
  `keterangan_kelas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kode_kelas`, `keterangan_kelas`) VALUES
(6, 'Tkj', 'sa', 'Kelas Teknik Informatika'),
(13, 'Rpl', '89', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `khs`
--

CREATE TABLE `khs` (
  `id_khs` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `sks` int(11) NOT NULL,
  `nilai_mutu` int(11) NOT NULL,
  `nilai_lambang` varchar(40) NOT NULL,
  `nilai_sks` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `khs`
--

INSERT INTO `khs` (`id_khs`, `id_mapel`, `sks`, `nilai_mutu`, `nilai_lambang`, `nilai_sks`, `id_mahasiswa`, `id_kelas`, `id_dosen`) VALUES
(6, 2, 83, 8, '78', 9, 0, 0, 0),
(7, 3, 949, 93, '39', 99, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_transaksi`
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
-- Dumping data untuk tabel `kode_transaksi`
--

INSERT INTO `kode_transaksi` (`id_kode_transaksi`, `kode_transaksi`, `nama_transaksi`, `tujuan_transaksi`, `jumlah_transaksi`, `deskripsi_transaksi`) VALUES
(1, '123', 'Pembayaran SKS', 'mhs', 75000, 'Nya pembayaran SKS atuh, maenya teu ngarti!!!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `dibuat_tanggal` date NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_dosen_wali` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `krs`
--

INSERT INTO `krs` (`id_krs`, `sks`, `semester`, `id_dosen`, `id_kelas`, `id_mapel`, `dibuat_tanggal`, `id_mahasiswa`, `id_dosen_wali`, `id_tahun_ajaran`) VALUES
(5, 2, '1', 1, 6, 1, '0000-00-00', 226, 1, 1),
(6, 3, '1', 3, 6, 2, '0000-00-00', 0, 0, 0),
(7, 2, '1', 4, 6, 3, '0000-00-00', 0, 0, 0),
(8, 1, '1', 9, 6, 4, '0000-00-00', 0, 0, 0),
(9, 3, '2', 9, 13, 1, '0000-00-00', 0, 0, 0),
(10, 2, '2', 3, 13, 2, '0000-00-00', 0, 0, 0),
(11, 1, '2', 9, 13, 3, '0000-00-00', 0, 0, 0),
(13, 9, '5', 1, 6, 3, '0000-00-00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
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
  `id_kelas` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama_lengkap`, `email`, `password`, `kewarganegaraan`, `jk`, `tinggi_badan`, `berat_badan`, `alamat`, `kode_pos`, `tmpt_lahir`, `tgl_lahir`, `nama_ayah`, `nama_ibu`, `no_hp1`, `no_hp2`, `info_dari`, `nama_asal_sekolah`, `alamat_asal_sekolah`, `foto_diri`, `foto_ijazah`, `foto_kesehatan`, `validasi_pembayaran`, `first_time_login`, `level`, `id_tahun_ajaran`, `tahun_masuk`, `id_kelas`, `id_dosen`, `id_semester`) VALUES
(226, 748273, 'Casgoni Bin Laden', 'casgoni@gmail.com', '$2y$10$/l.9raZVG9oj2gLrWJWNY.TK4Sl2kov7FiM1xX5wbaQKDuXhJUcKi', 'WNA', 'L', 31, 32, 'CIREBON', '39283', 'CIREBON', '0000-00-00', 'Nasoni', 'N', '0818283728', '0827182838', 'Sahabat', 'Smk NU mekanika', 'Buntet Pesantren', NULL, NULL, NULL, '0', '1', 'pmb_baru', 1, 1, 6, 1, 1),
(227, 832942, 'Deden yayaya', 'amal@GMAIL.COM', '$2y$10$Ns/EqwvR3Bhh9IASiiYsP.qHOxdEJfn2hnrHj5W3swtZ5whVLY3da', 'WNA', 'L', 32, 32, 'CIREBON', '07960', 'CIREBON', '0000-00-00', 'Nasoni', 'ksjakjk', '081288338838', '081288338838', 'de', 'Smk NU mekanika', 'Buntet Pesantren', 'amal2.jpg', NULL, NULL, '0', '1', 'pmb_baru', 1, 1, 13, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel_mahasiswa`
--

CREATE TABLE `mapel_mahasiswa` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(70) NOT NULL,
  `kode_mapel` varchar(40) NOT NULL,
  `keterangan_mapel` text NOT NULL,
  `dibuat_tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel_mahasiswa`
--

INSERT INTO `mapel_mahasiswa` (`id_mapel`, `nama_mapel`, `kode_mapel`, `keterangan_mapel`, `dibuat_tanggal`) VALUES
(1, 'Bahasa Indonesia', '839382', 'Bahasa indoenesia\r\n', '0000-00-00'),
(2, 'Fisika', 'fiksi0', 'Fisika', '0000-00-00'),
(3, 'MTK', 'mtk30', 'Matematika', '0000-00-00'),
(4, 'Cek Tensi', 'tensi039', 'tensi', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel_pmb`
--

CREATE TABLE `mapel_pmb` (
  `id_mapel_pmb` int(11) NOT NULL,
  `mapel_pmb_code` varchar(45) NOT NULL,
  `mapel_pmb_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mapel_pmb`
--

INSERT INTO `mapel_pmb` (`id_mapel_pmb`, `mapel_pmb_code`, `mapel_pmb_name`) VALUES
(1, 'BI', 'Bahasa Indonesia'),
(2, 'MTK', 'Matematika'),
(3, 'IPA', 'Ilmu Pengetahuan Alam'),
(4, 'BING', 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
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
-- Struktur dari tabel `menu_has_role`
--

CREATE TABLE `menu_has_role` (
  `id_menu` int(11) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_ujian_pmb`
--

CREATE TABLE `nilai_ujian_pmb` (
  `id_nilai_ujian_pmb` int(11) NOT NULL,
  `nilai` double NOT NULL,
  `id_pmb` int(11) NOT NULL,
  `id_mapel_pmb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `kepada` varchar(190) NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `id_pmb` int(11) NOT NULL,
  `read` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `pesan`, `kepada`, `tanggal_kirim`, `id_pmb`, `read`) VALUES
(9, 'Info Kampus samid', 'sa', 'anakdesa088@gmail.com', '2019-04-05', 0, '0'),
(10, 'as', 'xsa', 'dev@akper.ac.id', '2019-04-10', 0, '0'),
(15, 'testing saj', 'aoa ya', '', '2019-04-10', 22, '1'),
(16, 'Info Penerimaan', 'Selamat casgoni anda di terimah di akademik perawatan', '', '2019-04-10', 22, '1'),
(17, 'Test Keperawanan', 'Wehhh ini ada cuma Test saja ya jadi jangan di bales soalnya nanti kalau di bales kamu ga bakal masuk kehalaman saya ua\r\n\r\n\r\nby aanak konda', '', '2019-04-10', 22, '1'),
(18, 'testing untuk mu', 'yang ada pernah sinpan di hati ku selama ini yang terdalam', '', '2019-04-11', 22, '0'),
(19, 'Info Penerimaan', 'aaa', '', '2019-04-11', 22, '0'),
(20, 'asdjk', 'ssssssssssss', '', '2019-04-11', 22, '0'),
(21, 'Tesing Info ajalah', 'Ya apa ya', '', '2019-04-11', 23, '1'),
(22, 'kirim lagi ah', 'Testingkirimya kak karna ini masih taham development', '', '2019-04-11', 23, '1'),
(23, 'Ncak maning ki', 'Adate gah masih penesaraan masih bisa beli konon kah', '', '2019-04-11', 23, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pmb`
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
  `foto_bukti_pembayaran` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validasi_pembayaran` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `first_time_login` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `level` enum('pmb_baru','pmb_lamah') COLLATE utf8mb4_unicode_ci DEFAULT 'pmb_baru',
  `is_active` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `no_peserta` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_lulus` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_ajaran_id_tahun_ajaran` int(11) NOT NULL,
  `status_data` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `id_pengumuman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pmb`
--

INSERT INTO `pmb` (`id_pmb`, `nama_lengkap`, `email`, `password`, `kewarganegaraan`, `jk`, `tinggi_badan`, `berat_badan`, `alamat`, `kode_pos`, `tmpt_lahir`, `tgl_lahir`, `nama_ayah`, `nama_ibu`, `no_hp1`, `no_hp2`, `info_dari`, `nama_asal_sekolah`, `alamat_asal_sekolah`, `foto_diri`, `foto_ijazah`, `foto_kesehatan`, `foto_bukti_pembayaran`, `validasi_pembayaran`, `first_time_login`, `level`, `is_active`, `no_peserta`, `is_lulus`, `tahun_ajaran_id_tahun_ajaran`, `status_data`, `id_pengumuman`) VALUES
(2, 'Arthur', 'dev@akper.ac.id', '$2y$10$MWBB48WrJVaOrl3jSr3nZ.3YMCtUAebnvTnUu/Dy.I4DXRyTYo9ZW', 'WNA', 'P', 75, 20, 'Atque odio inventore', '58', 'In occaecat id autem', '1990-01-14', 'Et omnis adipisci hi', 'Labore labore ration', '85', '23', 'Illum cumque eligen', 'Labore labore et pro', 'Fugit nihil blandit', 'photo_2019-02-06_15-15-12.jpg', 'photo_2019-02-06_15-15-12.jpg', 'photo_2019-02-06_15-15-12.jpg', '', '0', '1', 'pmb_baru', '1', NULL, NULL, 1, '1', 0),
(3, 'Saefudin Hardi', 'cinta@gmail.com', '$2y$10$yKkwDmFgwO/9CrnNbacll.U9jr07b6TieM5S/pVaUwNlCi0vrWhky', 'WNI', 'L', 33, 38, 'Dusun 05 RT/RW : 017/005 Bayalangu Lor, Gegesik', '45164', 'CIREBON', '2019-04-18', 'Nasoni', 'Rasi', '0821712627826', '0821712627826', 'teman', 'Smk Arjawinangun', 'desa bayalangu', 'amal.jpg', 'asepp.jpg', 'amal3.jpg', 'b4b978ad-2329-4f8c-9172-53178b33814a.jpg', '0', '1', 'pmb_lamah', '1', NULL, NULL, 1, '0', 0),
(15, NULL, 'syarifmy65@gmail.com', '$2y$10$REBCDuattRLxyWrdnco6MOMUTqs23JpkO9TIQ3IXJpq1yyTXwneo2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '1', 'pmb_baru', '1', NULL, NULL, 1, '0', 0),
(16, NULL, 'amalianurkhasanah02@gmail.com', '$2y$10$gE4Kjt/MTPItBdPrfdwJROiErEIxkOGAnZCgEDJnLOnlxIBuSz2Z.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '1', 'pmb_baru', '1', NULL, NULL, 1, '0', 0),
(18, NULL, 'iwisrik@gmail.com', '$2y$10$.Jn1g1Cnpd022Fdu4OlEEurSX4dpJnKBxXQ14f7unbdCqzsBjHq8y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '1', 'pmb_baru', '1', NULL, NULL, 1, '0', 0),
(19, NULL, 'mikarta@yahoo.com', '$2y$10$6PA2zAuRBm81CjlM0/YwUezv6PuCtHapvhbC76lWjz6j1lQdw9kMa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '1', 'pmb_baru', '1', NULL, NULL, 1, '0', 0),
(20, 'asep', 'anang@gmail.com', '$2y$10$K5wcKt7VRDotiB.zIYu.Uu2BAhfvNA0i3mDlALx1YfwQ8FgFF.HgW', 'WNA', 'L', 39, 39, 'Desa bulakamba', '93928', 'cirebon', '2019-04-22', 'NAk', 'isk', '0393928129', '03182912', 'teman', 'sap', 'sk', 'amal3.jpg', 'amal.jpg', 'amal2.jpg', 'amalalamal.jpg', '0', '1', 'pmb_lamah', '1', NULL, NULL, 1, '0', 0),
(21, 'asep', 'admin@admin.com', '$2y$10$x8l8Un1joWLhj7QcEEN03ujy6VZFrvgI.XvlHyjSRu/xntXKXIjem', 'WNA', 'L', 39, 39, 'asd', 'as', 'cirebon', '2019-04-29', 'das', 'as', '0898238', '023827387', 'saij', 'jjkjkjkj', 'jkjkjj', '47257_119209984895019_695685433_n.jpg', '18891610_1575185475846169_7186894505689858504_o.jpg', 'amal2.jpg', '65a1cd99-e095-4289-b79f-64454b049a33.jpg', '0', '1', 'pmb_lamah', '1', NULL, NULL, 1, '0', 0),
(22, 'Demen Sinden', 'demensinden@yahoo.com', '$2y$10$MjTiIQc0jtBL7MpECzvczuq8Fpu0OIsN32gyyS5rVtOxeETX/BHYK', 'WNI', 'L', 39, 39, 'Desa sinden', '93289', 'cirebon', '2019-04-30', 'Nasoni', 'sajki', '08237282728', '0382829272', 'Demen', 'j93', 'sak', 'amal3.jpg', 'amal.jpg', 'amal2.jpg', 'amalalamal.jpg', '0', '1', 'pmb_lamah', '1', NULL, NULL, 1, '0', 0),
(23, 'Saefudin Hardi', 'demensinden@gmail.com', '$2y$10$jnoRPU.FaxGyLDgqGsdBDOHdhhZ5arvzWy81VHF7m5bV5x0sWqkue', 'WNA', 'L', 39, 39, 'Desa bahagia sentosa', '0393', 'Cirebon', '2019-04-23', 'Oi', 'iu', '938739372', '03928727', 'Teman', 'Saudara', 'ibu', 'amal3.jpg', 'amal.jpg', 'amal2.jpg', 'amalalamal.jpg', '0', '1', 'pmb_lamah', '1', NULL, NULL, 1, '0', 0),
(25, 'Saefudin Hardi', 'anakdesa088@gmail.com', '$2y$10$4MdpaIe9v/Z0iZsa9WJRAOkUPiPTzMO8DexfXXrXU7VyYUrfIRaKW', 'WNI', 'L', 32, 32, 'Dusun 05 RT/RW : 017/005 Bayalangu Lor, Gegesik', '45164', 'Cirebon', '1908-08-30', 'toto', 'Rasi', '0891288726', '0891288726', 'Teman', 'Smk NU mekanika', 'Buntet Pesantren', 'wayang.jpg', 'jupi.jpg', '14125591_1255615971136456_8185348144608229423_o.jpg', 'ayo mondok.png', '0', '1', 'pmb_lamah', '1', NULL, NULL, 1, '0', 0),
(26, NULL, 'admin@admin.comasa', '$2y$10$WMuN..XC/r.SaUQN55VnWu.dJqktQGB4hs2xE19ple2WaoTSZuLX6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '1', 'pmb_baru', '1', NULL, NULL, 1, '0', 0),
(27, NULL, 'mbaamal@yahoo.com', '$2y$10$5yIjj7eARNstJP/j5tmScuL2m68j5RWz0pYX3/zYZ5OI0wv75K3ZC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '1', 'pmb_baru', '1', NULL, NULL, 1, '0', 0),
(29, NULL, 'ikromhimawan@yahoo.com', '$2y$10$kEmsFm4naGjJYI1OTSe2E.8IoKGMNXRX673A2gBL8pe2seiREXvbK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '1', 'pmb_baru', '1', NULL, NULL, 1, '0', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `role_name`) VALUES
(1, 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_user`
--

CREATE TABLE `role_has_user` (
  `id_role` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `role_has_user`
--

INSERT INTO `role_has_user` (`id_role`, `id_user`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL,
  `nama_semester` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id_semester`, `nama_semester`, `keterangan`) VALUES
(1, '1', 'semester satu'),
(2, '2', 'semester dua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `tahun_ajarancol` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun_ajaran`, `tahun_ajarancol`) VALUES
(1, '2019/2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian_pmb`
--

CREATE TABLE `ujian_pmb` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `id_mapel_pmb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ujian_pmb`
--

INSERT INTO `ujian_pmb` (`id_tahun_ajaran`, `id_mapel_pmb`) VALUES
(1, 1),
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(150) DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `is_active` enum('0','1') DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `is_active`) VALUES
(1, 'administrator', '$2y$10$DUNJjuYZMj.nWin5hFKfceBepoe7n7LwdBAyjMJUHvM9DbX.0AFRm', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `dosen_wali`
--
ALTER TABLE `dosen_wali`
  ADD PRIMARY KEY (`id_dosen_wali`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `khs`
--
ALTER TABLE `khs`
  ADD PRIMARY KEY (`id_khs`);

--
-- Indeks untuk tabel `kode_transaksi`
--
ALTER TABLE `kode_transaksi`
  ADD PRIMARY KEY (`id_kode_transaksi`);

--
-- Indeks untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_mahasiswa_tahun_ajaran1_idx` (`id_tahun_ajaran`),
  ADD KEY `fk_mahasiswa_tahun_ajaran2_idx` (`tahun_masuk`);

--
-- Indeks untuk tabel `mapel_mahasiswa`
--
ALTER TABLE `mapel_mahasiswa`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `mapel_pmb`
--
ALTER TABLE `mapel_pmb`
  ADD PRIMARY KEY (`id_mapel_pmb`),
  ADD UNIQUE KEY `mapel_pmb_code_UNIQUE` (`mapel_pmb_code`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `menu_has_role`
--
ALTER TABLE `menu_has_role`
  ADD PRIMARY KEY (`id_menu`,`id_role`),
  ADD KEY `fk_menu_has_role_role1_idx` (`id_role`),
  ADD KEY `fk_menu_has_role_menu1_idx` (`id_menu`);

--
-- Indeks untuk tabel `nilai_ujian_pmb`
--
ALTER TABLE `nilai_ujian_pmb`
  ADD PRIMARY KEY (`id_nilai_ujian_pmb`),
  ADD KEY `fk_nilai_ujian_pmb_pmb1_idx` (`id_pmb`),
  ADD KEY `fk_nilai_ujian_pmb_mapel_pmb1_idx` (`id_mapel_pmb`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `pmb`
--
ALTER TABLE `pmb`
  ADD PRIMARY KEY (`id_pmb`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `no_peserta_UNIQUE` (`no_peserta`),
  ADD KEY `fk_pmb_tahun_ajaran1_idx` (`tahun_ajaran_id_tahun_ajaran`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `role_has_user`
--
ALTER TABLE `role_has_user`
  ADD PRIMARY KEY (`id_role`,`id_user`),
  ADD KEY `fk_role_has_user_user1_idx` (`id_user`),
  ADD KEY `fk_role_has_user_role_idx` (`id_role`);

--
-- Indeks untuk tabel `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indeks untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- Indeks untuk tabel `ujian_pmb`
--
ALTER TABLE `ujian_pmb`
  ADD PRIMARY KEY (`id_tahun_ajaran`,`id_mapel_pmb`),
  ADD KEY `fk_ujian_pmb_2_idx` (`id_mapel_pmb`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `dosen_wali`
--
ALTER TABLE `dosen_wali`
  MODIFY `id_dosen_wali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `khs`
--
ALTER TABLE `khs`
  MODIFY `id_khs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kode_transaksi`
--
ALTER TABLE `kode_transaksi`
  MODIFY `id_kode_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT untuk tabel `mapel_mahasiswa`
--
ALTER TABLE `mapel_mahasiswa`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mapel_pmb`
--
ALTER TABLE `mapel_pmb`
  MODIFY `id_mapel_pmb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `nilai_ujian_pmb`
--
ALTER TABLE `nilai_ujian_pmb`
  MODIFY `id_nilai_ujian_pmb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `pmb`
--
ALTER TABLE `pmb`
  MODIFY `id_pmb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fk_mahasiswa_tahun_ajaran1` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mahasiswa_tahun_ajaran2` FOREIGN KEY (`tahun_masuk`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `menu_has_role`
--
ALTER TABLE `menu_has_role`
  ADD CONSTRAINT `fk_menu_has_role_menu1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_menu_has_role_role1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `nilai_ujian_pmb`
--
ALTER TABLE `nilai_ujian_pmb`
  ADD CONSTRAINT `fk_nilai_ujian_pmb_mapel_pmb1` FOREIGN KEY (`id_mapel_pmb`) REFERENCES `mapel_pmb` (`id_mapel_pmb`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nilai_ujian_pmb_pmb1` FOREIGN KEY (`id_pmb`) REFERENCES `pmb` (`id_pmb`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pmb`
--
ALTER TABLE `pmb`
  ADD CONSTRAINT `fk_pmb_tahun_ajaran1` FOREIGN KEY (`tahun_ajaran_id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `role_has_user`
--
ALTER TABLE `role_has_user`
  ADD CONSTRAINT `fk_role_has_user_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_role_has_user_user1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `ujian_pmb`
--
ALTER TABLE `ujian_pmb`
  ADD CONSTRAINT `fk_ujian_pmb_1` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ujian_pmb_2` FOREIGN KEY (`id_mapel_pmb`) REFERENCES `mapel_pmb` (`id_mapel_pmb`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
