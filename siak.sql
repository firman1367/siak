-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Mei 2016 pada 02.23
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_materi`
--

CREATE TABLE IF NOT EXISTS `dt_materi` (
  `id` int(11) NOT NULL,
  `tgl_upload` date NOT NULL,
  `nama_file` varchar(35) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dt_materi`
--

INSERT INTO `dt_materi` (`id`, `tgl_upload`, `nama_file`, `tipe_file`, `ukuran_file`, `file`) VALUES
(4, '2015-11-05', 'sample', 'pdf', '598370', '../dashboard/files/sample.pdf'),
(7, '2015-11-05', 'tes', 'pptx', '70261', '../dashboard/files/tes.pptx'),
(9, '2015-11-05', 'Laravel', 'pdf', '1140003', '../dashboard/files/Laravel.pdf'),
(12, '2015-12-21', 'asdasd', 'docx', '14295', '../dashboard/files/asdasd.docx'),
(17, '2016-03-18', 'mn', 'docx', '709682', '../dashboard/files/mn.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(11) NOT NULL,
  `nik` varchar(11) NOT NULL,
  `nama_guru` varchar(35) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(12) NOT NULL,
  `status` varchar(10) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nik`, `nama_guru`, `no_ktp`, `gender`, `ttl`, `alamat`, `tlp`, `status`, `pendidikan`, `id_mapel`, `foto`) VALUES
(6, '98765544', 'Rizka Sopiyan', '87356327654654725623', 'Pria', '', 'CIbuntu kaum cooyy', '89654321', 'status', 'pendidikan', 5, 'foto/Qyee.png'),
(7, '987654321', 'Diaz Kamula', '', 'Wanita', '', 'Cibuntu Kidul', '2147483647', '', '', 10, 'foto/adsdsd.png'),
(10, '12215410534', 'Septian Muaziz', '', 'Pria', '', 'CIbuntu Kaum bro !!!', '089636826994', '', '', 16, 'foto/rh3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_kelas`, `hari`, `id_mapel`, `jam`, `id_guru`) VALUES
(96, 2, 'Selasa', 5, '07:00 - 13:00 ', 10),
(99, 2, 'Rabu', 5, '07:00 - 07:00 ', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) DEFAULT NULL,
  `wali_kelas` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `wali_kelas`) VALUES
(2, 'X TKJ', 'Muhammad Firman S.Kom'),
(12, 'XI TKJ', 'Septian Muaziz S.Kom'),
(15, 'XII TKJ', 'Husein');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `id_mapel` int(10) NOT NULL,
  `nama_mapel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
(5, 'Bahasa Indonesia'),
(6, 'Matematika'),
(7, 'IPA'),
(8, 'IPS'),
(9, 'Bahasa Sunda'),
(10, 'PKN'),
(11, 'Bahasa Inggris'),
(12, 'Pendidikan Agama Islam'),
(13, 'Fisika'),
(14, 'Biologi'),
(15, 'Kimia'),
(16, 'TIK'),
(17, 'Kejuruan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `jenisnilai` varchar(3) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `id_kelas`, `id_mapel`, `jenisnilai`, `nilai`) VALUES
(54, 27, 2, 5, 'UH', 77),
(55, 29, 2, 5, 'UH', 80),
(56, 32, 2, 5, 'UH', 76),
(57, 27, 2, 5, 'UTS', 77),
(58, 29, 2, 5, 'UTS', 78),
(59, 32, 2, 5, 'UTS', 75),
(60, 27, 2, 5, 'UAS', 74),
(61, 29, 2, 5, 'UAS', 78),
(62, 32, 2, 5, 'UAS', 80),
(63, 27, 2, 6, 'UH', 65),
(64, 29, 2, 6, 'UH', 66),
(65, 32, 2, 6, 'UH', 69),
(66, 27, 2, 6, 'UAS', 70),
(67, 29, 2, 6, 'UAS', 72),
(68, 32, 2, 6, 'UAS', 69),
(69, 27, 2, 6, 'UTS', 72),
(70, 29, 2, 6, 'UTS', 73),
(71, 32, 2, 6, 'UTS', 73);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `no_induk` int(11) NOT NULL,
  `no_peserta_un` varchar(20) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `ijazah` varchar(20) NOT NULL,
  `skhun` varchar(20) NOT NULL,
  `tlp` int(12) NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `no_induk`, `no_peserta_un`, `nama_siswa`, `gender`, `ttl`, `id_kelas`, `alamat`, `nama_ayah`, `nama_ibu`, `ijazah`, `skhun`, `tlp`, `foto`) VALUES
(27, 2147483647, 4453, '943535', 'Ryuzi', 'Pria', 'Bogor, 15 januari 1996', 2, 'Bogor', 'Yosaku', 'Yukiko', '346363463', '235235325', 978675875, 'foto/CHAR.png'),
(29, 131313, 232424, '242424', 'Rusdi', 'Pria', 'ssgsg', 2, 'sgsg', 'ssgsg', 'gsg', 'sfsf', 'sgsgsgsg', 0, 'foto/Windows-Phone-256.png'),
(32, 12712712, 12333, '812313', 'Khoiril', 'Pria', 'adadadad', 2, 'adadada', 'adada', 'adada', '23adadda', '213asdad', 2147483647, 'foto/Drawing (3).png'),
(33, 2231813, 2147483647, '8273182', 'Hamzah', 'Pria', 'unknown', 12, 'akdadkakd', 'adkaodkoa', 'kaodkaodkao', 'adkaoka', 'aaad', 123123133, 'foto/Drawing (2).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE IF NOT EXISTS `spp` (
  `id_spp` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `keterangan` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id_spp`, `id_siswa`, `id_kelas`, `keterangan`) VALUES
(9, 26, 15, 'LUNAS'),
(10, 27, 2, 'LUNAS'),
(13, 27, 2, 'LUNAS'),
(14, 29, 2, 'LUNAS'),
(15, 32, 2, 'LUNAS'),
(16, 33, 12, 'BELUM LUNAS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_mapel`
--

CREATE TABLE IF NOT EXISTS `st_mapel` (
  `id_st_mapel` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `st_mapel`
--

INSERT INTO `st_mapel` (`id_st_mapel`, `id_mapel`, `id_kelas`) VALUES
(58, 5, 'Kelas1'),
(59, 6, 'Kelas2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(35) DEFAULT NULL,
  `access` varchar(30) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `access`, `foto`) VALUES
(39, 'Septian Muaziz', 'kaaz', 'sanzimessi', 'admin', 'foto/aaaaaaaaa.png'),
(40, 'Muhammad Firman', 'firman', 'firman', 'guru', 'foto/bosquets.JPG'),
(41, 'Herdiansyah', 'herdi', 'herdi', 'guru', 'foto/0.jpg'),
(42, 'Fauzan Azima', 'fauzan', 'fauzan', 'siswa', 'foto/dora.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dt_materi`
--
ALTER TABLE `dt_materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- Indexes for table `st_mapel`
--
ALTER TABLE `st_mapel`
  ADD PRIMARY KEY (`id_st_mapel`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dt_materi`
--
ALTER TABLE `dt_materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `st_mapel`
--
ALTER TABLE `st_mapel`
  MODIFY `id_st_mapel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
