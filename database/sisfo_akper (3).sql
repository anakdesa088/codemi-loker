-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Bulan Mei 2019 pada 00.14
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
  `no_hp` varchar(15) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `jk`, `tmpt_lahir`, `tgl_lahir`, `alamat`, `foto_dosen`, `tahun_masuk`, `email`, `password`, `no_hp`, `id_kelas`) VALUES
(1, 'Alejandro Martin', '1', 'cirebon', '2004-04-28', '533 Mount Kemble Ave', 'foto_dosen.jpg', '2011', 'mikarta@yahoo.com', 'administrator', '089828271', 0),
(3, 'Asep', '2', 'CIREBON', '2019-04-01', 'Jembatan besi jaya no. 3', 'foto_dosen.jpg', '2011', 'asep@gmail.com', '$2y$10$fSabjHoCZjPM0Q/N8GHuqOv7SYlbzXYJwls3QPTKJj1MexIiV7JZe', '0898287272', 6),
(4, 'Arul', '1', 'CIREBON', '2019-05-14', 'RT/RW 07/01 Desa Cikeusal kidul kecamatan Ketanggungan', '65a1cd99-e095-4289-b79f-64454b049a331.jpg', '2011', 'arul@gmail.com', 'indonesia123', '', 13);

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
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `permission` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `permission`) VALUES
(1, 'Administrator', 'a:36:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:10:\"deleteUser\";i:4;s:11:\"createGroup\";i:5;s:11:\"updateGroup\";i:6;s:9:\"viewGroup\";i:7;s:11:\"deleteGroup\";i:8;s:11:\"createBrand\";i:9;s:11:\"updateBrand\";i:10;s:9:\"viewBrand\";i:11;s:11:\"deleteBrand\";i:12;s:14:\"createCategory\";i:13;s:14:\"updateCategory\";i:14;s:12:\"viewCategory\";i:15;s:14:\"deleteCategory\";i:16;s:11:\"createStore\";i:17;s:11:\"updateStore\";i:18;s:9:\"viewStore\";i:19;s:11:\"deleteStore\";i:20;s:15:\"createAttribute\";i:21;s:15:\"updateAttribute\";i:22;s:13:\"viewAttribute\";i:23;s:15:\"deleteAttribute\";i:24;s:13:\"createProduct\";i:25;s:13:\"updateProduct\";i:26;s:11:\"viewProduct\";i:27;s:13:\"deleteProduct\";i:28;s:11:\"createOrder\";i:29;s:11:\"updateOrder\";i:30;s:9:\"viewOrder\";i:31;s:11:\"deleteOrder\";i:32;s:11:\"viewReports\";i:33;s:13:\"updateCompany\";i:34;s:11:\"viewProfile\";i:35;s:13:\"updateSetting\";}'),
(2, 'User', 'a:40:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:10:\"deleteUser\";i:4;s:11:\"createKelas\";i:5;s:11:\"updateKelas\";i:6;s:9:\"viewKelas\";i:7;s:11:\"deleteKelas\";i:8;s:15:\"createMahasiswa\";i:9;s:15:\"updateMahasiswa\";i:10;s:13:\"viewMahasiswa\";i:11;s:15:\"deleteMahasiswa\";i:12;s:11:\"createDosen\";i:13;s:11:\"updateDosen\";i:14;s:9:\"viewDosen\";i:15;s:11:\"deleteDosen\";i:16;s:12:\"createMatkul\";i:17;s:12:\"updateMatkul\";i:18;s:10:\"viewMatkul\";i:19;s:12:\"deleteMatkul\";i:20;s:21:\"createPembagianMatkul\";i:21;s:21:\"updatePembagianMatkul\";i:22;s:19:\"viewPembagianMatkul\";i:23;s:21:\"deletePembagianMatkul\";i:24;s:9:\"createKrs\";i:25;s:9:\"updateKrs\";i:26;s:7:\"viewKrs\";i:27;s:9:\"deleteKrs\";i:28;s:9:\"createKhs\";i:29;s:9:\"updateKhs\";i:30;s:7:\"viewKhs\";i:31;s:9:\"deleteKhs\";i:32;s:21:\"createJenisPembayaran\";i:33;s:21:\"updateJenisPembayaran\";i:34;s:19:\"viewJenisPembayaran\";i:35;s:21:\"deleteJenisPembayaran\";i:36;s:15:\"createTransaksi\";i:37;s:15:\"updateTransaksi\";i:38;s:13:\"viewTransaksi\";i:39;s:15:\"deleteTransaksi\";}'),
(3, 'Bendahara', 'a:7:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:11:\"updateGroup\";i:4;s:9:\"viewGroup\";i:5;s:11:\"updateBrand\";i:6;s:9:\"viewBrand\";}'),
(4, 'COb', 'a:5:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:10:\"deleteUser\";i:4;s:11:\"createKelas\";}'),
(6, 'Admin', 'a:32:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:10:\"deleteUser\";i:4;s:11:\"createKelas\";i:5;s:11:\"updateKelas\";i:6;s:9:\"viewKelas\";i:7;s:11:\"deleteKelas\";i:8;s:15:\"createMahasiswa\";i:9;s:15:\"updateMahasiswa\";i:10;s:13:\"viewMahasiswa\";i:11;s:15:\"deleteMahasiswa\";i:12;s:11:\"createDosen\";i:13;s:11:\"updateDosen\";i:14;s:9:\"viewDosen\";i:15;s:11:\"deleteDosen\";i:16;s:12:\"createMatkul\";i:17;s:12:\"updateMatkul\";i:18;s:10:\"viewMatkul\";i:19;s:12:\"deleteMatkul\";i:20;s:21:\"createPembagianMatkul\";i:21;s:21:\"updatePembagianMatkul\";i:22;s:19:\"viewPembagianMatkul\";i:23;s:21:\"deletePembagianMatkul\";i:24;s:9:\"createKrs\";i:25;s:9:\"updateKrs\";i:26;s:7:\"viewKrs\";i:27;s:9:\"deleteKrs\";i:28;s:9:\"createKhs\";i:29;s:9:\"updateKhs\";i:30;s:7:\"viewKhs\";i:31;s:9:\"deleteKhs\";}'),
(7, 'Mahasiswa', 'a:4:{i:0;s:11:\"createKelas\";i:1;s:11:\"updateKelas\";i:2;s:9:\"viewKelas\";i:3;s:11:\"deleteKelas\";}'),
(9, 'nyoba', 'a:7:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:10:\"deleteUser\";i:4;s:11:\"createKelas\";i:5;s:11:\"updateKelas\";i:6;s:9:\"viewKelas\";}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pembayaran`
--

CREATE TABLE `jenis_pembayaran` (
  `id_jp` int(11) NOT NULL,
  `nama_jp` varchar(70) NOT NULL,
  `nominal` varchar(19) NOT NULL,
  `kode_jp` varchar(40) NOT NULL,
  `keterangan_jp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_pembayaran`
--

INSERT INTO `jenis_pembayaran` (`id_jp`, `nama_jp`, `nominal`, `kode_jp`, `keterangan_jp`) VALUES
(1, 'uas', '1000', '3898', 'djakjs'),
(6, 'Test', '2000', '3898', 'djakjs');

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
(13, 'Rpl', '89', 'aa'),
(21, 'MM', 'mmi9', 'Multi Media');

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
  `id_dosen` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `khs`
--

INSERT INTO `khs` (`id_khs`, `id_mapel`, `sks`, `nilai_mutu`, `nilai_lambang`, `nilai_sks`, `id_mahasiswa`, `id_kelas`, `id_dosen`, `id_semester`, `id_tahun_ajaran`) VALUES
(12, 1, 90, 90, '90', 0, 226, 0, 0, 1, 1),
(13, 2, 90, 90, '90', 2, 226, 0, 0, 2, 1),
(20, 1, 89, 89, 'B', 28, 227, 0, 0, 0, 0),
(21, 4, 28, 88, 'C', 99, 227, 0, 0, 0, 0),
(22, 1, 78, 78, '78', 78, 227, 0, 0, 0, 0),
(23, 4, 78, 78, '78', 78, 227, 0, 0, 0, 0),
(24, 1, 777, 8, '8', 8, 226, 0, 0, 0, 0),
(25, 2, 8, 8, '8', 8, 226, 0, 0, 0, 0),
(26, 1, 7, 7, 'B', 10, 1, 0, 0, 0, 0),
(27, 2, 2, 9, 'B', 19, 1, 0, 0, 0, 0),
(28, 1, 10, 10, '10', 10, 3, 0, 0, 0, 0),
(29, 4, 10, 10, '10', 10, 3, 0, 0, 0, 0);

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
  `id_semester` int(11) NOT NULL,
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

INSERT INTO `krs` (`id_krs`, `sks`, `id_semester`, `id_dosen`, `id_kelas`, `id_mapel`, `dibuat_tanggal`, `id_mahasiswa`, `id_dosen_wali`, `id_tahun_ajaran`) VALUES
(5, 2, 1, 1, 6, 1, '0000-00-00', 226, 1, 1),
(6, 3, 1, 3, 6, 2, '0000-00-00', 0, 0, 0),
(7, 2, 1, 4, 6, 3, '0000-00-00', 0, 0, 0),
(8, 1, 1, 9, 6, 4, '0000-00-00', 0, 0, 0),
(9, 3, 2, 9, 13, 1, '0000-00-00', 0, 0, 0),
(10, 2, 2, 3, 13, 2, '0000-00-00', 0, 0, 0),
(11, 1, 2, 9, 13, 3, '0000-00-00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama_lengkap` varchar(123) NOT NULL,
  `nim` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `kewarganegaraan` enum('WNI','WNA') NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `tmpt_lahir` varchar(60) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_ayah` varchar(60) NOT NULL,
  `nama_ibu` varchar(60) NOT NULL,
  `no_hp1` int(11) NOT NULL,
  `no_hp2` int(11) NOT NULL,
  `info_dari` varchar(30) NOT NULL,
  `nama_asal_sekolah` varchar(100) NOT NULL,
  `alamat_asal_sekolah` text NOT NULL,
  `foto_diri` varchar(100) NOT NULL,
  `foto_ijazah` varchar(100) NOT NULL,
  `foto_kesehatan` varchar(100) NOT NULL,
  `validasi_pembayaran` int(11) NOT NULL,
  `first_time_login` int(11) NOT NULL,
  `tahun_masuk` varchar(20) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama_lengkap`, `nim`, `email`, `password`, `kewarganegaraan`, `jk`, `tinggi_badan`, `berat_badan`, `alamat`, `kode_pos`, `tmpt_lahir`, `tgl_lahir`, `nama_ayah`, `nama_ibu`, `no_hp1`, `no_hp2`, `info_dari`, `nama_asal_sekolah`, `alamat_asal_sekolah`, `foto_diri`, `foto_ijazah`, `foto_kesehatan`, `validasi_pembayaran`, `first_time_login`, `tahun_masuk`, `id_kelas`, `id_dosen`, `id_semester`, `id_tahun_ajaran`, `level`) VALUES
(1, 'Saefudin Hardi', 2842938, 'administrator@gmail.com', '$2y$10$5pS0b6rprYOlWgET47anZ.knV9us.FDr.ppzCIL9AHtBRmwjFzYEe', 'WNI', 'L', 32, 32, 'Indramayu', '45164', 'Indramayu', '1921-11-10', 'Casgoni', 'rasi', 2147483647, 2147483647, 'Temen', 'Smk NU mekanika', 'oao', 'ayo_mondok2.PNG', '', '', 0, 0, '1', 6, 1, 1, 1, ''),
(3, 'SIska', 88382, 'administrator@gmail.com', '$2y$10$1xli7l4I.TlQsLb6ydTSCe6LLaX9PLJNVfwFUMlmuotTW8IC3Rg8a', 'WNI', 'P', 31, 32, 'CIREBON', '07960', 'CIREBON', '2011-02-28', 'Nasoni', 'rasih', 2147483647, 2147483647, 'Temen', 'Smk Arjawinangun', 'Buntet Pesantren', 'amal8.jpg', '', '', 0, 0, '1', 13, 1, 1, 1, ''),
(4, 'Dikky Martin', 4829388, 'sadministrator@gmail.com', '$2y$10$3pdRyN/tI2NxMkbNuM7qYu9nRn3ZdKoQvYPZj4xoxvgKele/940p2', 'WNI', 'L', 31, 32, 'jalan bahagia', '07960', 'Indramayu', '1924-10-30', 'toto', 'ii', 2147483647, 2147483647, 'Temen', 'Smk NU mekanika', 'mam', 'caleg.jpg', '', '', 0, 0, '1', 6, 1, 1, 1, ''),
(5, 'Kodok Osaidok', 938298, 'kodok@gmail.com', '$2y$10$fSabjHoCZjPM0Q/N8GHuqOv7SYlbzXYJwls3QPTKJj1MexIiV7JZe', 'WNI', 'L', 32, 32, 'Cirebon', '2000', 'Cirebon', '2019-01-28', 'Nasoni', 'Rasi', 2147483647, 2147483647, 'Teman', 'Smk NU mekanika', 'arjawinangun', 'kodok2.jpg', '', '', 0, 0, '1', 13, 1, 1, 1, ''),
(6, 'Fawas', 393839, 'keweng@gmail.com', '$2y$10$fSabjHoCZjPM0Q/N8GHuqOv7SYlbzXYJwls3QPTKJj1MexIiV7JZe', 'WNA', 'L', 32, 32, 'jalan bahagia', '52263', 'Cirebon', '2018-12-31', 'Nasoni', 'Rasi', 2147483647, 2147483647, 'Saudara', 'Smk NU mekanika', 'hsh', 'keyeng.jpg', '', '', 0, 0, '1', 6, 1, 1, 1, ''),
(7, 'Juned', 31231, 'juned@gmail.com', 'adjaksdju38', 'WNI', 'L', 12, 12, 'buntet', '338', 'cirebon', '0000-00-00', 'Nasoni', 'Rasi', 383838, 3928183, 'teman', 'Smk mekanika', 'Buntet Pesantren', '', '', '', 0, 0, '2016', 13, 3, 1, 0, 'PMB_lamah'),
(8, 'Juned', 31231, 'juned@gmail.com', 'adjaksdju38', 'WNI', 'L', 12, 12, 'buntet', '338', 'cirebon', '0000-00-00', 'Nasoni', 'Rasi', 383838, 3928183, 'teman', 'Smk mekanika', 'Buntet Pesantren', '', '', '', 0, 0, '2016', 13, 3, 1, 0, 'PMB_lamah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel_mahasiswa`
--

CREATE TABLE `mapel_mahasiswa` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(70) NOT NULL,
  `kode_mapel` varchar(40) NOT NULL,
  `keterangan_mapel` text NOT NULL,
  `dibuat_tanggal` date NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel_mahasiswa`
--

INSERT INTO `mapel_mahasiswa` (`id_mapel`, `nama_mapel`, `kode_mapel`, `keterangan_mapel`, `dibuat_tanggal`, `sks`) VALUES
(1, 'Bahasa Indonesia', '839382', 'Bahasa indoenesia\r\n', '0000-00-00', 2),
(2, 'Fisika', 'fiksi0', 'Fisika', '0000-00-00', 3),
(3, 'MTK', 'mtk30', 'Matematika', '0000-00-00', 2),
(4, 'Cek Tensi', 'tensi039', 'tensi', '0000-00-00', 3),
(5, 'PKN', 'pkn93', 'PEKAEN', '0000-00-00', 3);

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
-- Struktur dari tabel `nilai_uas`
--

CREATE TABLE `nilai_uas` (
  `id_nilai_uas` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uts40` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `uas40` int(11) NOT NULL,
  `tugas` int(11) NOT NULL,
  `tugas20` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `am` float NOT NULL,
  `hm` varchar(20) NOT NULL,
  `keterangan` enum('0','1') NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_uas`
--

INSERT INTO `nilai_uas` (`id_nilai_uas`, `uts`, `uts40`, `uas`, `uas40`, `tugas`, `tugas20`, `jumlah`, `am`, `hm`, `keterangan`, `id_mahasiswa`, `id_mapel`, `id_dosen`) VALUES
(22, 8, 8, 8, 8, 8, 8, 8, 8, 'A', '1', 3, 1, 3),
(23, 8, 8, 8, 8, 8, 8, 88, 8, 'A', '1', 5, 1, 3),
(24, 8, 8, 8, 8, 8, 8, 8, 8, 'A', '1', 7, 1, 3),
(25, 8, 8, 8, 8, 8, 8, 8, 8, 'A', '1', 8, 1, 3),
(26, 5, 5, 5, 5, 5, 5, 5, 55, 'B', '0', 1, 1, 3),
(27, 7, 7, 7, 7, 7, 7, 7, 7, 'A', '1', 4, 1, 3),
(28, 8, 8, 8, 8, 88, 8, 8, 8, 'A', '1', 6, 1, 3),
(29, 8, 8, 8, 8, 8, 8, 8, 8, 'A', '1', 1, 2, 3),
(30, 8, 8, 8, 8, 8, 8, 8, 8, 'A', '1', 4, 2, 3),
(31, 9, 9, 9, 9, 9, 9, 9, 9, 'A', '1', 6, 2, 3),
(32, 8, 8, 8, 8, 8, 8, 8, 8, 'A', '1', 1, 3, 3),
(33, 8, 8, 8, 8, 8, 8, 8, 8, 'A', '1', 4, 3, 3),
(34, 8, 8, 8, 8, 8, 8, 8, 8, 'A', '1', 6, 3, 3),
(35, 8, 8, 8, 8, 8, 8, 8, 8, 'A', '1', 1, 4, 3),
(36, 8, 8, 8, 8, 8, 8, 8, 8, 'A', '1', 4, 4, 3),
(37, 8, 8, 8, 8, 8, 8, 8, 8, 'A', '1', 6, 4, 3);

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
-- Struktur dari tabel `pembagian_matkul`
--

CREATE TABLE `pembagian_matkul` (
  `id_pembagian_matkul` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nilai` enum('o','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembagian_matkul`
--

INSERT INTO `pembagian_matkul` (`id_pembagian_matkul`, `id_mapel`, `id_kelas`, `nilai`) VALUES
(263, 1, 6, 'o'),
(264, 2, 6, 'o'),
(265, 1, 13, 'o'),
(266, 1, 21, 'o'),
(267, 4, 13, 'o');

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
(15, 'testing saj', 'aoa ya', '', '2019-04-10', 22, '1'),
(16, 'Info Penerimaan', 'Selamat casgoni anda di terimah di akademik perawatan', '', '2019-04-10', 22, '1'),
(17, 'Test Keperawanan', 'Wehhh ini ada cuma Test saja ya jadi jangan di bales soalnya nanti kalau di bales kamu ga bakal masuk kehalaman saya ua\r\n\r\n\r\nby aanak konda', '', '2019-04-10', 22, '1'),
(22, 'kirim lagi ah', 'Testingkirimya kak karna ini masih taham development', '', '2019-04-11', 23, '1'),
(23, 'Ncak maning ki', 'Adate gah masih penesaraan masih bisa beli konon kah', '', '2019-04-11', 23, '1'),
(24, 'Info Penerimaan', 'selamat terima', '', '2019-04-15', 36, '1'),
(25, 'Info Kampus samid', 'Test di trima', '', '2019-05-04', 43, '1'),
(26, 'Informasi Pendaftaran PMB', 'Selamat Pendaftaran anda di konfirmasi', '', '2019-05-05', 49, '1'),
(27, 'Informasi Pendaftaran PMB', 'Selamat Pendaftaran anda di konfirmasi</br> Nomor Peserta Ujian anda adalah 20192144', '', '2019-05-05', 49, '1'),
(28, 'Informasi Pendaftaran PMB', 'Selamat Pendaftaran anda di konfirmasi</br> Nomor Peserta Ujian anda adalah <b>20192144<b>', '', '2019-05-05', 49, '1');

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
  `id_tahun_ajaran` int(11) NOT NULL,
  `status_data` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `id_pengumuman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pmb`
--

INSERT INTO `pmb` (`id_pmb`, `nama_lengkap`, `email`, `password`, `kewarganegaraan`, `jk`, `tinggi_badan`, `berat_badan`, `alamat`, `kode_pos`, `tmpt_lahir`, `tgl_lahir`, `nama_ayah`, `nama_ibu`, `no_hp1`, `no_hp2`, `info_dari`, `nama_asal_sekolah`, `alamat_asal_sekolah`, `foto_diri`, `foto_ijazah`, `foto_kesehatan`, `foto_bukti_pembayaran`, `validasi_pembayaran`, `first_time_login`, `level`, `is_active`, `no_peserta`, `is_lulus`, `id_tahun_ajaran`, `status_data`, `id_pengumuman`) VALUES
(20, 'asep', 'anang@gmail.com', '$2y$10$K5wcKt7VRDotiB.zIYu.Uu2BAhfvNA0i3mDlALx1YfwQ8FgFF.HgW', 'WNA', 'L', 39, 39, 'Desa bulakamba', '93928', 'cirebon', '2019-04-22', 'NAk', 'isk', '0393928129', '03182912', 'teman', 'sap', 'sk', 'amal3.jpg', 'amal.jpg', 'amal2.jpg', 'amalalamal.jpg', '1', '1', 'pmb_lamah', '1', '20208221', NULL, 2, '1', 0),
(21, 'asep', 'admin@admin.com', '$2y$10$x8l8Un1joWLhj7QcEEN03ujy6VZFrvgI.XvlHyjSRu/xntXKXIjem', 'WNA', 'L', 39, 39, 'asd', 'as', 'cirebon', '2019-04-29', 'das', 'as', '0898238', '023827387', 'saij', 'jjkjkjkj', 'jkjkjj', '47257_119209984895019_695685433_n.jpg', '18891610_1575185475846169_7186894505689858504_o.jpg', 'amal2.jpg', '65a1cd99-e095-4289-b79f-64454b049a33.jpg', '1', '1', 'pmb_lamah', '1', '20200419', NULL, 2, '1', 0),
(22, 'Demen Sinden', 'demensinden@yahoo.com', '$2y$10$MjTiIQc0jtBL7MpECzvczuq8Fpu0OIsN32gyyS5rVtOxeETX/BHYK', 'WNI', 'L', 39, 39, 'Desa sinden', '93289', 'cirebon', '2019-04-30', 'Nasoni', 'sajki', '08237282728', '0382829272', 'Demen', 'j93', 'sak', 'amal3.jpg', 'amal.jpg', 'amal2.jpg', 'amalalamal.jpg', '1', '1', 'pmb_lamah', '1', '20196262', NULL, 1, '1', 0),
(49, 'Saefudin Hardi', 'anakdesa088@gmail.com', '$2y$10$sAiaSi.ir2DTK3OIG3yt8OWCT3QcsvmLX/f2cpjwQ7ymafYlQ028O', 'WNI', 'L', 39, 938, 'Desa Bayalangu Lor', '4115010', 'Cirebon', '1996-02-26', 'Nasoni', 'Rasih', '08382762827', '0829282777', 'Teman', 'Sma nu mekanka', 'Buntet Pesantren', 'aspppp.jpg', 'angpadi.jpg', 'b4b978ad-2329-4f8c-9172-53178b33814a.jpg', 'aseoooo.jpg', '0', '1', 'pmb_lamah', '1', '20192144', NULL, 1, '0', 0),
(51, NULL, 'mikarta@yahoo.com', '$2y$10$qsMMhrgQj3Rg8Kp650o7K.6dfQbcpylWfDDO9fgKSa/C1qaUuA7Ue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '1', 'pmb_baru', '1', NULL, NULL, 1, '0', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL,
  `nama_semester` varchar(40) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id_semester`, `nama_semester`, `keterangan`) VALUES
(1, 'I', 'Semester Satu'),
(2, '2', 'Semester dua ap salah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `tahun_ajarancol` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun_ajaran`, `tahun_ajarancol`, `keterangan`) VALUES
(1, '2019/2020', 'Aja mengkonon'),
(2, '2020/2021', 'adate gah nyoba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_transaksi` varchar(40) NOT NULL,
  `nominal_bayar` int(11) NOT NULL,
  `hutang` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_jp` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `keterangan` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kode_transaksi`, `nominal_bayar`, `hutang`, `id_mahasiswa`, `id_jp`, `tanggal_transaksi`, `keterangan`, `status`) VALUES
(15, 'BR52404201992', 1000, 0, 3, 1, '2019-04-25', '', 'LUNAS'),
(16, 'BR52504201993', 1000, -1000, 6, 6, '2019-04-09', 'BELUM LUNAS', 'BELUM LUNAS'),
(17, 'BR52504201994', 300, -700, 6, 1, '2019-04-12', 'BELUM LUNAS', 'LUNAS'),
(18, 'BR52504201995', 1000, 0, 3, 1, '2019-04-22', 'LUNAS', 'LUNAS');

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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `phone`, `gender`) VALUES
(1, 'saefudinhardi', '$2y$10$fSabjHoCZjPM0Q/N8GHuqOv7SYlbzXYJwls3QPTKJj1MexIiV7JZe', 'saefudinhardi@gmail.com', 'Saefudin', 'Hardi', '0828172827', 1),
(2, 'demensinden', '$2y$10$iZu4jjEq/I.a6VvhbTwSD.gizMFKDOqAYHTtCpbLq4T29RFTGBghK', 'anakdesa088@gmail.com', 'anakdes', 'anakdesa', '0827282727', 1),
(4, 'casgoni', '$2y$10$oUozrpvfAInYlaCtR/dKKO/nsiJzTI.VgW0AlF.im1E1/F4Ktx13.', 'casgoni@gmail.com', 'casgoni', 'malik', '0829282927', 1),
(5, 'kelas', '$2y$10$/Jy3dDXfgMM.Y8NBvW.wcOC.0sHaEQJcw0K.6yW4.SzMwswdukCJG', 'kelas@gmail.com', 'Kelas', 'Test', '0827272726', 1),
(6, 'Admine', '$2y$10$jzOnGRLSMtMvfIL0qkKWVe1E5.wYrHydZO2gvwHwTCpcPTx5A7iUO', 'admin@gmail.com', 'Admin', 'Kempong', '0272872616', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_group`
--

INSERT INTO `user_group` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 2, 3),
(3, 3, 4),
(4, 4, 2),
(5, 5, 5),
(6, 6, 7);

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
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  ADD PRIMARY KEY (`id_jp`);

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
  ADD PRIMARY KEY (`id_mahasiswa`);

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
-- Indeks untuk tabel `nilai_uas`
--
ALTER TABLE `nilai_uas`
  ADD PRIMARY KEY (`id_nilai_uas`);

--
-- Indeks untuk tabel `nilai_ujian_pmb`
--
ALTER TABLE `nilai_ujian_pmb`
  ADD PRIMARY KEY (`id_nilai_ujian_pmb`),
  ADD KEY `fk_nilai_ujian_pmb_pmb1_idx` (`id_pmb`),
  ADD KEY `fk_nilai_ujian_pmb_mapel_pmb1_idx` (`id_mapel_pmb`);

--
-- Indeks untuk tabel `pembagian_matkul`
--
ALTER TABLE `pembagian_matkul`
  ADD PRIMARY KEY (`id_pembagian_matkul`);

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
  ADD KEY `fk_pmb_tahun_ajaran1_idx` (`id_tahun_ajaran`);

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
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `ujian_pmb`
--
ALTER TABLE `ujian_pmb`
  ADD PRIMARY KEY (`id_tahun_ajaran`,`id_mapel_pmb`),
  ADD KEY `fk_ujian_pmb_2_idx` (`id_mapel_pmb`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dosen_wali`
--
ALTER TABLE `dosen_wali`
  MODIFY `id_dosen_wali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  MODIFY `id_jp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `khs`
--
ALTER TABLE `khs`
  MODIFY `id_khs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `kode_transaksi`
--
ALTER TABLE `kode_transaksi`
  MODIFY `id_kode_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `mapel_mahasiswa`
--
ALTER TABLE `mapel_mahasiswa`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT untuk tabel `nilai_uas`
--
ALTER TABLE `nilai_uas`
  MODIFY `id_nilai_uas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `nilai_ujian_pmb`
--
ALTER TABLE `nilai_ujian_pmb`
  MODIFY `id_nilai_ujian_pmb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembagian_matkul`
--
ALTER TABLE `pembagian_matkul`
  MODIFY `id_pembagian_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `pmb`
--
ALTER TABLE `pmb`
  MODIFY `id_pmb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

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
  ADD CONSTRAINT `fk_pmb_tahun_ajaran1` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
