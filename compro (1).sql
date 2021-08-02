-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 09:16 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compro`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `kategori`, `judul`, `isi`, `penulis`, `tanggal`, `foto`) VALUES
(27, 'futsal', 'EKSPRESI V FUTSAL MARHAS 2019', 'EKSPRESI V FUTSAL MARHAS 2019 CHAMPIONS Putra : SMPN 1 CIWIDEY A RUNNER UP Putra : SMPN 2 MARGAHAYU THIRD PLACE Putra : SMPN 1 MARGAHAYU FOURTH PLACE Putra : SMP MA B TOP SCORE Putra : IKHSAN (SMPN 1 MARGAHAYU) BEST PLAYER Putra : FAISHAL FAHMI (SMPN 1 CI', 'Admin ', '2020-12-11', '11122020Screenshot (11).png'),
(28, 'silat', 'Pencak Silat Berhasil Meraih Prestasi', 'SMK MARHAS Margahayu berhasil meraih prestasi yang kesekian kalinya dari bidang keolahragaan Para siswa mengikuti Madani Open II Kejuaraan Nasional Antar Pelajar Se-Asia Tenggara  , Pada 19-22 Desember 2019 bertempat di Universitas 11 April Kab.Sumedang. ', 'admin', '2020-12-11', '11122020Screenshot (12).png'),
(29, 'Taekowondo', 'Taekwondo terus meraih prestasi', 'Jumat, 01 November 2019 perwakilan siswa SMK MARHAS Margahayu mengikuti ajang Kujuaraan UIN Taekwondo Championship 3 Kyourugi & Poomase tingkat Jawa Banten bertempat di UIN Sunan Gunung Djati Bandung dilaksanakan selama 3 Hari , dan alhamdulillah prestasi', 'Admin ', '2020-12-11', '11122020Screenshot (14).png'),
(30, 'Prestasi', 'Siswa SMK MARHAS Menjadi Juara LKS se-Kabupaten Bandung', 'Rabu, 30 Oktober 2019. Fachri Ekaputra Nugraha salah satu siswa SMK MARHAS Margahayu jurusan Rekayasa Perangkat Lunak yang berhasil menjadi Juara Utama 1 dari 10 peserta dalam Lomba Keterampilan Siswa (LKS) IT Software Solution for Business tingkat se-Kab', 'Admin ', '2020-12-11', '11122020Screenshot (13).png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(50) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `jenis`) VALUES
(1, 'futsal'),
(2, 'badminton'),
(3, 'silat'),
(5, 'Taekowondo'),
(6, 'Prestasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(35) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `level`) VALUES
(10, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id_visimisi` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id_visimisi`, `judul`, `tipe`, `keterangan`) VALUES
(16, '\"Terwujudnya SMK MARHAS MARGAHAYU menjadi sekolah ungul dan berprestasi dalm pengembangan sumber daya manusia ditingkat nasional tahun 2021\"', 'VISI', 'SMK MARHAS'),
(17, 'Melaksanakan pembelajaran /bimbingan yang berkarakter, mandiri dan berahlaqul karimah dengan menjungjung tinggi iman dan taqwa  Melaksanakan pembelajaran ilmu pengetahuan dan teknologi untuk menghantarkan lulusan bekerja, melanjutkan dan berwirausaha(BMW)', 'MISI', 'SMK MARHAS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
