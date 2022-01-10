-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 05:37 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

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
(9, 4, '123456', 'Befril Renfiliani Syafitri', 'Jember', '2000-12-01', 'D3 ', 'bef.jpg'),
(12, 3, '123', 'asd', 'Lumajang', '2022-01-03', 'SMK', '20201111_113225.jpg'),
(13, 7, '123123', 'Khusnul Khotimah', 'Lumajang', '0000-00-00', 'SMK', 'IMG_3687.JPG');

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
(5, 'Tata Usaha'),
(6, 'Guru Pengajar'),
(7, 'Tata Usaha');

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
(3, 'galeri'),
(4, 'asdasd'),
(11, 'coba lagi');

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
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
