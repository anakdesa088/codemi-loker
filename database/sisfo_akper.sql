-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Feb 2019 pada 13.37
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sisfo_akper`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftar`, `nama_lengkap`, `email`, `password`, `kewarganegaraan`, `jenis_kelamin`, `tinggi_badan`, `berat_badan`, `tempat_lhr`, `tanggal_lhr`, `almt_lengkap`, `kode_pos`, `no_hp`, `info_dari`, `nama_asal_sklh`, `almt_asal_sklh`, `kab_asal_sklh`, `foto_ijaza`, `surat_tidak_buta_warna`, `foto_pendaftar`, `ayah`, `ibu`, `level`) VALUES
(40, 'Saefudin Hardi', '', '', 'WNI', 'Perempuan', 928, 928, 'Kab. Cirebon', '2018-11-12', 'Dusun 05 RT/RW : 017/005 Bayalangu Lor, Gegesik', 45164, 2147483647, 'Temen', 'Smk Mekanika buntet', 'Bayalangu', 0, 0, '', '', 'Nasoni', 'Rasi', 'mahasiswa'),
(41, '', 'casgoniedan@yahoo.com', '236874507', 'WNA', 'Laki-Laki', 0, 0, '', '2019-02-07', '', 0, 0, '', '', '', 0, 0, '', '', '', '', 'mahasiswa'),
(42, 'anam', 'anam@gmail.com', '2124842993', 'WNI', 'Perempuan', 234, 234, 'Jakarta', '2018-12-06', 'saasasa', 11320, 2147483647, 'Temen', 'Smk Mekanika buntet', 'das', 0, 0, '', '', 'Nasoni', 'Rasi', 'mahasiswa'),
(43, 'Saefudin Hardi', 'casgoniedan@yahoo.com', '1187887686', 'on', 'Laki-Laki', 12, 12, 'Cirebon', '2019-08-02', 'Dusun 05 RT/RW : 017/005 Bayalangu Lor, Gegesik', 45164, 2147483647, 'Saudara', 'Smk Mekanika buntet', 'Asepp', 0, 0, '', '', 'Nasoni', 'Rasi', 'mahasiswa'),
(44, 'Saefudin Hardi', 'mikarta@yahoo.com', '1454329302', 'on', 'Laki-Laki', 23, 23, 'Kab. Cirebon', '2019-08-02', 'Dusun 05 RT/RW : 017/005 Bayalangu Lor, Gegesik', 45164, 2147483647, 'Temen', 'Smk Mekanika buntet', 'hjhj', 0, 0, '', '', 'Nasoni', 'Rasi', 'mahasiswa'),
(45, '', 'mikarta@yahoo.com', '726373667', '', '', 0, 0, '', '0000-00-00', '', 0, 0, '', '', '', 0, 0, '', '', '', '', 'mahasiswa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
