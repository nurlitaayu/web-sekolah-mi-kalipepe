-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 10:07 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_carousel`
--

CREATE TABLE `tb_carousel` (
  `id_carousel` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `headline` varchar(32) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_carousel`
--

INSERT INTO `tb_carousel` (`id_carousel`, `gambar`, `headline`, `deskripsi`, `status`) VALUES
(2, '11.jpg', 'MI Muhammadiyah Kalipepe', '\"Berani Beda, Selangkah Lebih Maju\"', 'active'),
(3, '2.jpg', 'Kegiatan Belajar  Mengajar', 'Deskripsi Kegiatan Belajar Mengajar', ''),
(4, '3.jpg', 'Headline 3', 'Deskripsi 3', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tanggal_gl` date NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `judul`, `tanggal_gl`, `gambar`) VALUES
(3, 'gambar 1', '2022-01-17', '2760238.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pendidikan` varchar(5) NOT NULL,
  `foto_guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `id_jabatan`, `nip`, `nama_guru`, `tempat_lahir`, `tgl_lahir`, `pendidikan`, `foto_guru`) VALUES
(15, 1, '111111', 'Ahmad Junaedi, SH', 'Lumajang', '1989-02-21', 'S1', '1.png'),
(16, 2, '222222', 'Budiartini, S.Pd.SD', 'Lumajang', '1973-05-23', 'S1', '3.png'),
(17, 3, '333333', 'Indri Kusumahati, S.Pt', 'Lumajang', '1990-02-14', 'S1', '5.png'),
(18, 2, '1231231', 'Befril Renfiliani Syafitri', 'Jember', '2022-01-03', 'D3', 'bef.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `posisi_jabatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `posisi_jabatan`) VALUES
(1, 'Kepala Sekolah'),
(2, 'Bendahara'),
(3, 'Kurikulum'),
(4, 'Guru Pengajar'),
(5, 'Tata Usaha');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Berita'),
(2, 'Prestasi'),
(3, 'Galeri'),
(12, 'Profile Sekolah'),
(15, 'Carousel');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL,
  `mata_pelajaran` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `mata_pelajaran`) VALUES
(1, 'Tematik'),
(2, 'Matematika'),
(3, 'Tematik'),
(4, 'Matematika'),
(5, 'PJOK'),
(6, 'Bahasa Daerah'),
(7, 'PJOK'),
(8, 'Bahasa Daerah'),
(9, 'Bahasa Inggris'),
(10, 'Bahasa Arab'),
(11, 'Bahasa Inggris'),
(12, 'Bahasa Arab'),
(13, 'Fiqih'),
(14, 'Al - Quran Hadist'),
(15, 'Fiqih'),
(16, 'Al - Quran Hadist'),
(17, 'Sejarah Kebudayaan Islam'),
(18, 'Aqidah Akhlak'),
(19, 'Sejarah Kebudayaan Islam'),
(20, 'Aqidah Akhlak'),
(21, 'Kemuhammadiyahan'),
(22, 'Kemuhammadiyahan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_post`
--

CREATE TABLE `tb_post` (
  `id_post` int(11) NOT NULL,
  `judul_post` varchar(64) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `isi_post` longtext NOT NULL,
  `tanggal_post` date NOT NULL,
  `foto_post` varchar(64) NOT NULL,
  `embed_video` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_post`
--

INSERT INTO `tb_post` (`id_post`, `judul_post`, `id_kategori`, `isi_post`, `tanggal_post`, `foto_post`, `embed_video`) VALUES
(1, 'coba judul', 2, '<p>coba isi post semoga berhasil</p>\r\n', '2022-01-13', 'IMG_20210928_165116_5371.jpg', ''),
(2, 'Prestasi 2', 2, '<p>ini berisi berita prestasi 2</p>\r\n', '2022-01-13', 'IMG_20211005_162110_889.jpg', ''),
(3, 'Berita 2', 1, '<p>ini berisi berita dua</p>\r\n', '2022-01-13', 'IMG_20211018_095550_691.jpg', ''),
(4, 'Prestasi 3', 2, '<p>ini nanti berisi tentang prestasi 3</p>\r\n\r\n<p> </p>\r\n', '2022-01-13', 'IMG_20211010_015957_569.jpg', ''),
(5, 'Berita 3', 1, '<p>indahnya pemandangan</p>\r\n\r\n<p>banyak ikan terbang</p>\r\n', '2022-01-14', 'IMG_20210928_165116_537.jpg', ''),
(6, 'Jejak Karier Ardhito Pramono Sebelum Tertangkap Kasus Narkoba', 1, '<p><strong>JAKARTA </strong>- Kabar mengejutkan datang dari penyanyi dan aktor muda Indonesia, Ardhito Pramono. Ardhito terjerat kasus penyalahgunaan narkotika jenis ganja. Polisi menyebut, Ardhito diamankan di kediamannya di bilangan Jakarta Timur. Hingga kini, proses pemeriksaan Ardhito masih berjalan secara intensif.</p>\r\n\r\n<p>Ardhito lahir pada 22 Mei 1995 di Jakarta dengan nama lengkap Ardhito Rifqi Pramono. Saat menempuh pendidikannya di JMC Academy Creative Industries Australia pada 2013, Ardhito mulai menciptakan beberapa lagu. Proses rekaman lagunya baru dimulai di tahun 2014. Dia memanfaatkan ruang digital seperti Myspace dan Soundcloud untuk memperkenalkan karya-karyanya, sebelum akhirnya aktif di YouTube.</p>\r\n', '2022-01-14', 'ard.jpg', ''),
(7, 'coba', 2, '', '2022-01-17', '2823401.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(12) NOT NULL,
  `user_password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_name`, `user_password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_carousel`
--
ALTER TABLE `tb_carousel`
  ADD PRIMARY KEY (`id_carousel`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_carousel`
--
ALTER TABLE `tb_carousel`
  MODIFY `id_carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD CONSTRAINT `tb_guru_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`);

--
-- Constraints for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD CONSTRAINT `tb_post_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
