-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 05:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techthree`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id_Admin` varchar(20) NOT NULL,
  `Nama_Admin` varchar(50) NOT NULL,
  `Password_Admin` varchar(20) NOT NULL,
  `No_Telp_Admin` varchar(20) NOT NULL,
  `Tanggal_Lahir_Admin` date DEFAULT NULL,
  `Tanggal_Lahir_Temp` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id_Admin`, `Nama_Admin`, `Password_Admin`, `No_Telp_Admin`, `Tanggal_Lahir_Admin`, `Tanggal_Lahir_Temp`) VALUES
('Ad01', 'Salwa Nafisa', 'S4lw4!@', '085987654344', '2002-02-22', NULL),
('Ad02', 'Ika Kusuma Wardani', 'Ik4kus@$', '085354356772', '2002-05-15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `Id_Kelas` varchar(20) NOT NULL,
  `Nama_Kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`Id_Kelas`, `Nama_Kelas`) VALUES
('Kls02', 'Fotografi'),
('Kls01', 'UI/UX'),
('Kls03', 'Web Development');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `Id_Materi` varchar(20) NOT NULL,
  `Nama_Materi` varchar(50) NOT NULL,
  `Durasi_Materi` varchar(20) NOT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `Id_Kelas` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`Id_Materi`, `Nama_Materi`, `Durasi_Materi`, `video_link`, `Id_Kelas`) VALUES
('mf01', 'Teknik Komposisi', '5:01', 'https://youtu.be/O6rby36Me_4?si=-urQwkebL-5PFM7K', 'Kls02'),
('mf02', 'Teknik Komposisi', '1:21', 'https://youtu.be/jcAZgQXpZGo?si=HCzbF_tVggh82DSz', 'Kls02'),
('mf03', 'Teknik Komposisi', '5:31', 'https://youtu.be/nKM3jkEOpuE?si=AUkg8XNmaHaY3uex', 'Kls02'),
('mf04', 'Teknik Komposisi', '8:02', 'https://youtu.be/NAexy836ff8?si=F-adVOxB9bnSe-H6', 'Kls02'),
('mf05', 'Teknik Komposisi', '5:33', 'https://youtu.be/66Z29z7Isik?si=U-dvAHyTHCA_flI7', 'Kls02'),
('mu01', 'Pengenalan UI/UX', '18:30', 'https://youtu.be/_PQavIv_fbY?si=dzr4AS2L_dQeIAjU', 'Kls01'),
('mu02', 'Pengenalan UI/UX', '13:20', 'https://youtu.be/9ougG5fvA1I?si=eKhRRnGofdhZMpjJ', 'Kls01'),
('mw01', 'Pengenalan Pemrograman Web', '11:08', 'https://youtu.be/LooycZiMn6s?si=_aUf-xQIcVrvca6I', 'Kls03'),
('mw02', 'Pengenalan Pemrograman Web', '9:38', 'https://youtu.be/ydg-uFtsfI4?si=KmLwDLXzfsRnY3JL', 'Kls03');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `overview` text DEFAULT NULL,
  `goals` text DEFAULT NULL,
  `results` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `course`, `title`, `description`, `overview`, `goals`, `results`) VALUES
(1, 'Pemrograman Web', 'Sistem Manajemen Toko Online', 'Sistem ini memungkinkan pemilik toko dapat menjalankan toko online secara efisien seperti dalam hal mengelola produk, inventaris, pesanan, dan pelanggan mereka secara terpusat melalui antarmuka web yang responsif dan mudah digunakan.', 'Fitur Utama: - Tambah, edit, dan hapus produk dengan deskripsi, gambar, harga, dan kategori. - Kelola stok produk dan status ketersediaan. - Lihat dan kelola pesanan yang masuk dari pelanggan. - Konfirmasi, proses, dan hapus pesanan. - Daftar dan kelola informasi pelanggan. - Lihat riwayat pembelian pelanggan dan status akun. - Pencarian produk berdasarkan nama, kategori, atau harga. - Filter produk untuk mempermudah navigasi pelanggan. - Integrasi dengan sistem pembayaran online (opsional). - Proses checkout yang aman dan mudah bagi pengguna.', 'Membuat platform e-commerce yang fungsional dan dapat diimplementasikan, mencakup aspek manajemen produk, pesanan, dan pelanggan secara efisien.', 'Kode Sumber (HTML, CSS, JavaScript, dan backend (PHP, Python)), Dokumentasi lengkap seperti cara instalasi, konfigurasi, dan manual user, Presentasi atau laporan yang berisi ringkasan fitur-fitur, Video demo web'),
(2, 'Fotografi', 'Portraiture through Cultural Lens', 'Peserta akan mengembangkan kemampuan fotografi potret mereka dengan fokus pada lensa budaya. Mereka akan diminta untuk menangkap esensi kehidupan sehari-hari, ekspresi wajah, dan cerita melalui fotografi potret yang menggambarkan keanekaragaman budaya di sekitar mereka. Tugas ini menggabungkan teknik fotografi potret, penggunaan cahaya, komposisi, serta kemampuan untuk membangun hubungan dengan subjek foto.', 'Fitur Utama: - Fokus pada budaya. - Narasi visual yang kuat dalam menghubungkan tiap foto. Tujuan Proyek: - Memberikan pengalaman mendalam dalam fotografi potret dengan sudut pandang budaya yang kuat. - Memahami bagaimana latar belakang budaya seseorang dapat mempengaruhi ekspresi dan identitas. - Belajar menceritakan cerita melalui foto. - Mengasah keterampilan dalam berinteraksi dengan subjek foto dari latar belakang budaya yang berbeda.', 'Memberikan pengalaman mendalam dalam fotografi potret dengan sudut pandang budaya yang kuat. Memahami bagaimana latar belakang budaya seseorang dapat mempengaruhi ekspresi dan identitas. Belajar menceritakan cerita melalui foto. Mengasah keterampilan dalam berinteraksi dengan subjek foto dari latar belakang budaya yang berbeda.', 'Portofolio digital, Video presentasi'),
(3, 'Desain UI/UX', 'Design Aplikasi Mobile E-Commerce Niche untuk Fashion Sustainable', 'Di dunia e-commerce, niche atau ceruk pasar merujuk pada segmen khusus dalam pasar yang lebih luas. Ini melayani audiens tertentu dengan kebutuhan dan preferensi yang unik. Bisnis e-commerce niche berfokus menawarkan produk yang lebih spesifik dibandingkan dengan retailer online yang umum. E-commerce Niche berfokus pada target audiens tertentu dengan minat atau kebutuhan khusus.', 'Fitur Utama: - Pencarian dan browsing produk berdasarkan kategori, merek, bahan, dan kriteria keberlanjutan lainnya. - Rekomendasi produk yang dipersonalisasi berdasarkan preferensi dan gaya pengguna. - Informasi detail produk yang mencakup deskripsi, bahan, praktik keberlanjutan, dan ulasan pelanggan. - Keranjang belanja dan proses checkout yang mudah digunakan. - Pelacakan pesanan dan pemberitahuan pengiriman. - Blog dan konten edukasi tentang fashion berkelanjutan.', 'Meningkatkan kesadaran tentang fashion berkelanjutan. Menyediakan platform yang mudah digunakan dan nyaman bagi konsumen untuk menemukan dan membeli produk fashion berkelanjutan.', 'Laporan proyek akhir yang mencakup proses pengembangan desain menggunakan metode Design Thinking, Tautan Desain Figma, Video demo prototype desain');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `id_submission` int(11) NOT NULL,
  `link_google_drive` varchar(255) NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `Id_Tugas` varchar(20) NOT NULL,
  `Nama_Tugas` varchar(50) NOT NULL,
  `Nilai_Tugas` int(11) NOT NULL,
  `id_tutor` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`Id_Tugas`, `Nama_Tugas`, `Nilai_Tugas`, `id_tutor`) VALUES
('Tgf01', 'Kuis 1 Fotografi', 80, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `Id_Tutor` varchar(20) NOT NULL,
  `Nama_Tutor` varchar(50) NOT NULL,
  `Password_Tutor` varchar(20) NOT NULL,
  `Nama_Kelas` varchar(50) NOT NULL,
  `Tanggal_Lahir_Tutor` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`Id_Tutor`, `Nama_Tutor`, `Password_Tutor`, `Nama_Kelas`, `Tanggal_Lahir_Tutor`) VALUES
('Tr001', 'Leli Sawitri', 'L33li!@', 'UI/UX', '2002-02-09'),
('Tr002', 'Choirunnisa Zalfaa Nabilah', 'CH01!Nisa', 'Fotografi', '2001-08-22'),
('Tr003', 'Inayah Puteri Salsabila', '1N4y!@h', 'Web Development', '2002-04-12'),
('Tr004', 'Leonardo Edwin', 'E6W!n', 'UI/UX', '2000-05-13'),
('Tr005', 'Dillond Willend', 'W!l13n', 'Fotografi', '1998-04-24'),
('Tr006', 'Joya Isarua', 'Is4ru@!', 'Web Development', '2000-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_User` varchar(20) NOT NULL,
  `Nama_User` varchar(50) NOT NULL,
  `Password_User` varchar(20) NOT NULL,
  `No_Telp_User` varchar(20) NOT NULL,
  `Nama_Kelas` varchar(50) DEFAULT NULL,
  `Tanggal_Lahir_User` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `Id_Admin` varchar(20) DEFAULT NULL,
  `id_tugas` varchar(20) DEFAULT NULL,
  `nilai_tugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `Nama_User`, `Password_User`, `No_Telp_User`, `Nama_Kelas`, `Tanggal_Lahir_User`, `email`, `Id_Admin`, `id_tugas`, `nilai_tugas`) VALUES
('User001', 'Mario Atmaja', 'Atm4j@!!', '085675235233', 'Fotografi', '1998-06-06', 'marioatma@gmail.com', NULL, NULL, NULL),
('User004', 'cobalagidonggg', 'cobalagiii', '087654263546', NULL, '2005-04-21', 'cobalagidonggg@gmail.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_kelas`
--

CREATE TABLE `user_kelas` (
  `Id_User` varchar(20) NOT NULL,
  `Id_Kelas` varchar(20) NOT NULL,
  `Tanggal_Mulai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_kelas`
--

INSERT INTO `user_kelas` (`Id_User`, `Id_Kelas`, `Tanggal_Mulai`) VALUES
('User001', 'Kls02', '2024-05-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_Admin`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`Id_Kelas`),
  ADD UNIQUE KEY `Nama_Kelas` (`Nama_Kelas`),
  ADD KEY `Nama_Kelas_2` (`Nama_Kelas`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`Id_Materi`),
  ADD KEY `fk_id_kelas` (`Id_Kelas`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`id_submission`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`Id_Tugas`),
  ADD KEY `fk_tugas_tutor` (`id_tutor`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`Id_Tutor`),
  ADD KEY `fk_Nama_Kelas` (`Nama_Kelas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`),
  ADD KEY `fk_admin_user` (`Id_Admin`),
  ADD KEY `fk_user_tugas` (`id_tugas`);

--
-- Indexes for table `user_kelas`
--
ALTER TABLE `user_kelas`
  ADD KEY `Id_User` (`Id_User`),
  ADD KEY `Id_Kelas` (`Id_Kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `id_submission` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `fk_id_kelas` FOREIGN KEY (`Id_Kelas`) REFERENCES `kelas` (`Id_Kelas`);

--
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `fk_tugas_tutor` FOREIGN KEY (`id_tutor`) REFERENCES `tutor` (`Id_Tutor`);

--
-- Constraints for table `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `fk_Nama_Kelas` FOREIGN KEY (`Nama_Kelas`) REFERENCES `kelas` (`Nama_Kelas`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_admin_user` FOREIGN KEY (`Id_Admin`) REFERENCES `admin` (`Id_Admin`),
  ADD CONSTRAINT `fk_user_tugas` FOREIGN KEY (`id_tugas`) REFERENCES `tugas` (`Id_Tugas`);

--
-- Constraints for table `user_kelas`
--
ALTER TABLE `user_kelas`
  ADD CONSTRAINT `user_kelas_ibfk_1` FOREIGN KEY (`Id_User`) REFERENCES `user` (`Id_User`),
  ADD CONSTRAINT `user_kelas_ibfk_2` FOREIGN KEY (`Id_Kelas`) REFERENCES `kelas` (`Id_Kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
