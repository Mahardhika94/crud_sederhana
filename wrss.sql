-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 07 Feb 2018 pada 07.31
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `wrss`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti_kerja`
--

CREATE TABLE IF NOT EXISTS `cuti_kerja` (
  `id` int(11) DEFAULT NULL,
  `nik` int(11) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `lama_cuti` int(11) DEFAULT NULL,
  `catatan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cuti_kerja`
--

INSERT INTO `cuti_kerja` (`id`, `nik`, `tgl_mulai`, `lama_cuti`, `catatan`) VALUES
(1001, 124, '2018-02-09', 3, '   cuti tahunan 1'),
(1002, 124, '2018-03-14', 3, 'cuti lebaran'),
(1003, 127, '2018-02-16', 3, 'cuti liburan'),
(1006, 127, '2017-12-12', 2, ' cuti tahunan'),
(1007, 127, '2017-11-06', 1, '  cuti tahuunan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerja`
--

CREATE TABLE IF NOT EXISTS `pekerja` (
  `nik` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_msk` date NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerja`
--

INSERT INTO `pekerja` (`nik`, `nama`, `alamat`, `tgl_lahir`, `tgl_msk`) VALUES
(123, 'supriadi', 'depok sleman', '1990-11-06', '2016-02-07'),
(124, 'jaka', 'jombor', '1991-01-12', '2015-02-14'),
(127, 'supriadi', 'bantul', '1993-04-09', '2017-02-07'),
(178, 'dian', 'tridatu', '2000-02-15', '2018-01-20'),
(237, 'joko', 'sleman', '2018-02-14', '2018-02-26'),
(442, 'pratama', 'gunung kidul', '1995-03-21', '2018-01-08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
