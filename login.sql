-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 01:43 PM
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
(4, 'TPA Pagi', '2022-01-17', '4.jpg'),
(5, 'Pembelajaran Bercocok Tanam', '2022-01-17', '3.jpg'),
(6, 'Sholat Berjama\'ah dan Mengaji Bersama', '2022-01-17', '2.jpg'),
(7, 'Kegiatan tatap muka setelah pandemi', '2022-01-17', '1.jpg');

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
  `judul_post` varchar(225) NOT NULL,
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
(7, 'coba', 2, '', '2022-01-17', '2823401.png', ''),
(9, 'Tampilkan Pagelaran Lukis Musik Tari, Mahasiswa Politeknik Negeri Jember Suguhkan Cerita Rakyat Minak Jinggo', 1, '<p>Pagelaran Lukis Musik dan Tari dalam balutan acara Demo Apresiasi Seni (DEPRESI) merupakan kegiatan pertunjukan kesenian dari Unit Kegiatan Mahasiswa LUMUT.</p>\r\n\r\n<p>UKM LUMUT merupakan Unit Kegiatan Mahasiswa dari <a href=\"https://www.laros.id/tag/Politeknik-Negeri-Jember\">Politeknik Negeri Jember</a> di Provinsi Jawa Timur.</p>\r\n\r\n<p>UKM LUMUT bermaksud mempersembahkan kebudayaan tradisional yang dikolaborasikan dengan unsur tarian kontemporer dari cerita rakyat serta kolaborasi dengan bidang kesenian lainnya, musik dan lukis.</p>\r\n\r\n<p>Acara bertajuk &#39;DEPRESI&#39; menjadi salah satu program kerja UKM LUMUT yang sangat dinantikan oleh penikmat seni hingga saat ini.</p>\r\n', '2022-01-17', '3506990291.png', ''),
(10, 'Menkes: Lebih dari Sejuta Vaksin Covid-19 Kedaluwarsa Akhir Januari                ', 1, '<p>Menteri Kesehatan (Menkes) Budi Gunadi Sadikin mengungkapkan lebih dari sejuta dosis vaksin virus corona (Covid-19) di Indonesia yang akan memasuki masa kedaluwarsa pada akhir Januari 2022.<br>\r\nBudi menambahkan, jutaan vaksin Covid-19 itu mayoritas merupakan vaksin donasi dari luar negeri yang memiliki masa kedaluwarsa lebih singkat. Rata-rata berada pada masa 3-6 bulan.<br>\r\n<br>\r\n\"Di bulan Januari ini mungkin akan ada lebih dari sejuta dosis yang akan expired sampai akhir [Januari],\" kata Budi dalam agenda rapat kerja bersama Komisi IX DPR RI, Senin (17/1).<br>\r\nBudi menyebut, stok vaksin menuju kedaluwarsa yang paling banyak ditemukan di Pulau Jawa, lantaran pasokan vaksin di Jawa juga lebih banyak dari daerah lainnya di Indonesia. Kendati demikian, Budi belum bisa memberikan detail jumlah vaksin Covid-19 tersebut.<br>\r\n<br>\r\n\"Nah, itu sudah kita identifikasi, itu yang kita dorong. Itu sebabnya juga mengapa vaksin booster kita dorong supaya bisa menghabiskan vaksin yang mau expired,\" imbuhnya.<br>\r\n<br>\r\n </p>\r\n', '2022-01-17', 'tenaga-kesehatan-hibur-vaksinasi-covid-anak-15_169.jpeg', ''),
(11, 'Hafiz Cilik Musa Jadi Idola Lomba Hafalan Quran Dunia', 2, '<p>Musa merupakan finalis hafalan Alquran 30 juz golongan anak-anak. Sebagai peserta termuda, Musa dinobatkan sebagai juara ketiga ajang lomba internasional itu.</p>\r\n\r\n<p>Hafiz cilik Indonesia, Musa, berhasil menjadi juara III dalam Musabaqah Hifzil Quran (MHQ) Internasional yang digelar di Sharm El Sheikh, Mesir. Penampilan Musa dalam menjalani babak final membuat juri dan para hadirin terpukau.</p>\r\n\r\n<p>Musa merupakan finalis hafalan Alquran 30 juz golongan anak-anak. Di antara peserta lainnya, Musa merupakan peserta paling muda.</p>\r\n\r\n<p>Dalam babak final, Musa berhasil menyelesaikan enam soal dari dewan juri dengan tenang dan lancar. Sementara peserta lainnya kebanyakan sempat lupa hingga harus diingatkan oleh dewan juri.</p>\r\n\r\n<p>Musa begitu lancar dan tenang dalam melantunkan Alquran. Penampilan Musa tersebut membuat Ketua Dewan Juri Sheikh Helmy Gamal, Wakil Ketua Persatuan Quraa Mesir dan para hadirin terharu hingga meneteskan air mata.</p>\r\n\r\n<p>Usai tampil di babak final, Musa segera dikerubungi para hadirin. Mereka ingin berfoto dan mencium kepala Musa untuk menunjukkan ketakziman dan kebanggaan atas kemampuan yang dimiliki oleh bocah 7 tahun tersebut.</p>\r\n\r\n<p>Tidak hanya masyarakat umum, Dewan Juri dan panitia pun kagum dengan Musa. Mereka lantas meminta berfoto bersama. Perlakuan ini tidak mereka berikan kepada peserta lainnya.</p>\r\n\r\n<p>Meski belum lancar mengucapkan huruf &#39;R&#39;, Musa dinilai layak menjadi juara. Syeikh Helmy mengatakan bacaan Alquran diatur dengan kaidah dan hukum yang jelas dan tidak bisa dikesampingkan, antara lain terkait <em>makharijul huruf</em>.</p>\r\n\r\n<p>Atas prestasi yang ditorehkan, Musa menjadi tamu kehormatan Menteri Wakaf Mesir Mohamed Mochtar Gomma. Gomma akan mengundang Musa datang ke Mesir pada peringatan Malam Lailatul Qadar saat Ramadan nanti.</p>\r\n\r\n<p>Pada peringatan tersebut nanti, Presiden Mesir akan memberikan penghargaan secara langsung kepada Musa. Seluruh akomodasi dan transportasi yang diperlukan Musa akan ditanggung oleh Pemerintah Mesir.</p>\r\n\r\n<p>\" Delegasi cilik Indonesia, Musa, telah berhasil meningkatkan ke</p>\r\n', '2022-01-17', '22.jpg', ''),
(12, 'Bocah SD Batola Ini Tak Hanya Pandai Baca Al Quran Hingga Dapat Hadiah Umrah, Juga Jadi Guru Ngaji', 2, '<p>Sangat membanggakan. Itulah Nurul Azkia, bocah asal Kabupaten Baritokuala yang pandai mengaji bahkan kerap meraih prestasi di ajang baca Al-Quran</p>\r\n\r\n<p>Nurul adalah Juara 1 Tartil Anak-Anak tingkat Kabupaten Batola. Pernah pula juara satu di Bahana Ramadan Lil Aulad dan berbagai lomba tartil yang lain di berbagai instansi.</p>\r\n\r\n<p>Menurut Alfianor, sang ayah, sejak usia 4 tahun Nurul sudah pandai baca Al-Quran yang langsung diajarkan oleh ayahnya sendiri baik di TPA (Taman Pendidikan Al-Qura) maupun di rumah.</p>\r\n\r\n<p>\"Kemudian sejak usia 5 tahun sudah mulai ikut lomba-lomba,\" ujar Alfianor yang juga guru TPA.</p>\r\n\r\n<p>Bahkan sejak umur 7 tahun Nurul sudah bisa mengajari teman-teman sebayanya mengaji dengan metode Iqra. Hal itu terus berlanjut dan menjadi rutinitas bagi Nurul yang kini usianya 10 tahun dan bersekolah di SDN Bandar Karya kelas 5.<br>\r\n<br>\r\nSaat Maret 2020 Nurul Azkia Juara 1 Tartili di MTQ tingkat Kabupaten Batola, hadiahnya uang tunai Rp10 juta dan bonus umroh dari bupati. Tapi karena kondisi pandemi corona maka biaya umrohnya dicairkan dalam bentuk uang</p>\r\n\r\n<p>\"Nurul sangat senang bisa memberikan hasil terbaik. Sebagai orangtua, harapan kami semoga ia menjadi qoriah dan penghafal Al-Quran,\" pungkas Alfianor.</p>\r\n\r\n<p> </p>\r\n', '2022-01-17', '33.jpg', ''),
(13, 'Cita-cita Jadi Hafidz Alquran, Bocah Ini Juara Lomba Mengaji', 2, '<p>Abdan Syakuran (7), bocah berbakat asal Kabupaten Bone kembali terpilih jadi pemenang pada lomba hafalan surah pendek kategori A untuk usia 5 sampai 7 tahun yang diselenggarakan di hotel Novena, Jalan Jenderal Achmad Yani, Kecamatan Tanete Riattang Barat, Kabupaten Bone, Sulawesi Selatan, Sabtu (17/06/2017).<br>\r\n<br>\r\nAnak tunggal dari pasangan Muhammad yunus dengan Musdalifah ini merupakan siswa yang masih duduk dibangku kelas 1 setingkat SD dengan mewakili nama sekolah Madrasah Ibtidyah syamsu Rasidi Majang untuk ikut berkompetisi se-kabupaten Bone</p>\r\n\r\n<p>Abdan Syakuran (7), bocah berbakat asal Kabupaten Bone kembali terpilih jadi pemenang pada lomba hafalan surah pendek kategori A untuk usia 5 sampai 7 tahun yang diselenggarakan di hotel Novena, Jalan Jenderal Achmad Yani, Kecamatan Tanete Riattang Barat, Kabupaten Bone, Sulawesi Selatan, Sabtu (17/06/2017).<br>\r\n<br>\r\nAnak tunggal dari pasangan Muhammad yunus dengan Musdalifah ini merupakan siswa yang masih duduk dibangku kelas 1 setingkat SD dengan mewakili nama sekolah Madrasah Ibtidyah syamsu Rasidi Majang untuk ikut berkompetisi se-kabupaten Bone</p>\r\n', '2022-01-17', '11.jpg', '');

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
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
