-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 03:30 AM
-- Server version: 5.6.16
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
-- Table structure for table `mhs`
--

CREATE TABLE IF NOT EXISTS `mhs` (
  `id_pmb` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `kewarganegaraan` varchar(40) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tmpt_lahir` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `nama_ayah` varchar(40) NOT NULL,
  `nama_ibu` varchar(40) NOT NULL,
  `no_hp1` int(11) NOT NULL,
  `no_hp2` int(11) NOT NULL,
  `info_dari` varchar(30) NOT NULL,
  `nama_asal_sekolah` varchar(70) NOT NULL,
  `alamat_asal_sekolah` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `foto_ijaza` varchar(100) NOT NULL,
  `foto_kesehatan` varchar(100) NOT NULL,
  `level` enum('pmb_baru','pmb_lamah') NOT NULL,
  PRIMARY KEY (`id_pmb`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `pmb`
--

CREATE TABLE IF NOT EXISTS `pmb` (
  `id_pmb` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `kewarganegaraan` varchar(40) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tmpt_lahir` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `nama_ayah` varchar(40) NOT NULL,
  `nama_ibu` varchar(40) NOT NULL,
  `no_hp1` int(11) NOT NULL,
  `no_hp2` int(11) NOT NULL,
  `info_dari` varchar(30) NOT NULL,
  `nama_asal_sekolah` varchar(70) NOT NULL,
  `alamat_asal_sekolah` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `foto_ijaza` varchar(100) NOT NULL,
  `foto_kesehatan` varchar(100) NOT NULL,
  `status` enum('invalid','valid') NOT NULL,
  `level` enum('pmb_baru','pmb_lamah') NOT NULL,
  PRIMARY KEY (`id_pmb`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `pmb`
--

INSERT INTO `pmb` (`id_pmb`, `nama_lengkap`, `email`, `password`, `kewarganegaraan`, `jk`, `tinggi_badan`, `berat_badan`, `tmpt_lahir`, `tgl_lahir`, `alamat`, `kode_pos`, `nama_ayah`, `nama_ibu`, `no_hp1`, `no_hp2`, `info_dari`, `nama_asal_sekolah`, `alamat_asal_sekolah`, `foto`, `foto_ijaza`, `foto_kesehatan`, `status`, `level`) VALUES
(3, 'Saefudin Hardi', 'mikarta@yahoo.com', '72105179', 'Wni', 'Laki-Laki', 23, 399, 'cirebon', '2019-12-31', 'Dusun 05 RT/RW : 017/005 Bayalangu Lor, Gegesik', 45164, 'Nasoni', 'rasi', 2147483647, 87384728, 'Teman', 'Smk NU mekanika', 'test\r\n', '', 'amal9.jpg', '', 'valid', 'pmb_lamah'),
(12, 'Sefudin Hardi', 'casgoni@gmail.com', '1886638202', 'Wni', 'Laki-Laki', 12, 12, 'Cirebon', '1992-12-12', 'Desa Bayalangu Lor', 84328748, 'Nasoni', 'Rasih', 92384, 93829489, 'Teman', 'Smk nu Mekanika', 'Saaksla', 'amal3.jpg', 'amal.jpg', 'amal2.jpg', 'valid', 'pmb_lamah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `level` enum('superadmin','akademik','keuangan') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `email`, `password`, `jenis_kelamin`, `level`) VALUES
(1, 'Mubarok Hasanuddin', 'mubarok@gmail.com', 'indonesia', 'Laki-laki', 'superadmin'),
(2, 'Asep', 'asep@gmail.com', 'indonesia', 'Laki-laki', 'akademik'),
(3, 'Bang Umar', 'umar@gmail.com', 'indonesia', 'Laki-laki', 'keuangan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
