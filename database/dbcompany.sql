-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 04:23 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `jenis_berita` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `jenis_berita`, `tanggal`, `judul`, `keterangan`, `foto`) VALUES
(3, 'darurat', '2020-03-18', 'sekolah menerapkan belajar dari rumah ', 'sekolah menerapkan belajar dari rumah karena covid 19', '14122020_112551908_854b28f8-7fdd-4946-85a8-f3191210df78.jpg'),
(5, 'prestasi', '2019-11-16', 'juara futsal', 'FUTSAL SMK MARHAS berhasil mendapatkan juara Runner Up di Liga Pelajar dan Menjadi Best Player atas nama Fikri Farhan dilaksanakan di di Gor. Sabilulungan, Soreang Kab. Bandung. Lomba berlangsung dari 10-16 November 2019.', '15012021juara futsal.PNG'),
(6, 'prestasi', '2020-02-06', 'Pencak Silat Berhasil Meraih Prestasi', 'SMK MARHAS Margahayu berhasil meraih prestasi yang kesekian kalinya dari bidang keolahragaan Para siswa mengikuti Madani Open II Kejuaraan Nasional Antar Pelajar Se-Asia Tenggara  , Pada 19-22 Desember 2019 bertempat di Universitas 11 April Kab.Sumedang.', '15012021juara pencak silat.PNG'),
(7, 'baik', '2021-01-12', 'sekolah beri bantuan paket data ', 'Di tengah pandemi virus corona (covid-19) tidak menyurutkan para pendidik memberikan pengetahuan dan pembelajaran bagi siswa-siswinya.Karena kegiatan belajar mengajar (KBM) tidak dilaksanakan di sekolahan, pihak sekolah tetap mendorong agar pada siswa bel', '15012021pegang hp.PNG'),
(8, 'biasa', '2020-06-15', 'SMK MARHAS Margahayu mengelar Wisuda Virtual', 'Kamis, 11 Juni 2020 SMK MARHAS Marghayu mengelar Wisuda Virtual di Kampus 1, dengan dihadirin beberapa siswa sebagai perwakilan tiap kelas. Wisuda Virtual ini dilakukan secara live di Instagram Official SMK MARHAS (marhasupdate) dan Youtube Resmi SMK MARH', '15012021foto bersama.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kat` int(11) NOT NULL,
  `jenisberita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `jenisberita`) VALUES
(1, 'darurat'),
(2, 'prestasi'),
(4, 'baik'),
(5, 'biasa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`) VALUES
(2, 'ardi', '0264391c340e4d3cbba430cee7836eaf', 'ardi');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id_vdm` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id_vdm`, `type`, `keterangan`) VALUES
(3, 'visi', 'Membantu untuk mewujudkan generasi muda yang kreatif, Mandiri, produktif serta inovatif demi kemajuan negara dan bangsa.'),
(4, 'misi ', 'Mengembangkan rasa tanggung jawab, rasa sosial serta rasa saling menghargai antar warga.');

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
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id_vdm`),
  ADD KEY `id` (`id_vdm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id_vdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
