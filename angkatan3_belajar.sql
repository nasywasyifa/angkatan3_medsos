-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2024 at 06:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angkatan3_belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `telepon` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama_anggota`, `telepon`, `email`, `alamat`) VALUES
(2, 'cantik', '0583547042', 'budi@gmail.com', 'jalan kesalahan'),
(4, 'nanas', '111111', 'admin@gmail.com', 'jalan kebenaran'),
(5, 'syifa', '12345678', 'semangka@gmail.com', 'jalan mawar'),
(6, 'hanifah', '3542354346', 'apel@gmail.com', 'jalan melati');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` varchar(10) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `id_kategori`, `nama_buku`, `penerbit`, `tahun_terbit`, `pengarang`, `created_at`, `update_at`) VALUES
(10, 4, 'Bulan', 'Gramed', '2001', 'Moon', '2024-10-15 07:28:34', '2024-10-17 04:09:51'),
(12, 1, 'Api Sejarah', 'Bambang', '2011', 'Yudhoyono', '2024-10-15 07:40:01', '2024-10-17 02:52:21'),
(20, 5, 'Danur', 'Bukue', '2011', 'Risa Saraswati', '2024-10-18 01:25:05', '2024-10-18 01:25:05'),
(21, 7, 'Winter in Tokyo', 'Pustaka Utama', '2015', 'Ilana Tan', '2024-10-18 01:53:40', '2024-10-18 01:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `id` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_peminjaman`
--

INSERT INTO `detail_peminjaman` (`id`, `id_peminjaman`, `id_buku`) VALUES
(1, 0, 12),
(2, 0, 12),
(3, 7, 12),
(4, 7, 12),
(5, 7, 12),
(6, 10, 10),
(7, 11, 20),
(8, 12, 21),
(9, 13, 21),
(10, 14, 21),
(11, 15, 12),
(12, 17, 20),
(13, 17, 21),
(14, 19, 10),
(15, 20, 10),
(16, 22, 20),
(17, 23, 10),
(18, 24, 21),
(19, 25, 12);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Sejarah', '2024-10-15 02:07:16', '2024-10-17 02:51:33'),
(4, 'Fiksi', '2024-10-15 02:26:51', '2024-10-17 03:37:34'),
(5, 'Horor', '2024-10-15 02:28:36', '2024-10-17 03:37:20'),
(7, 'Roman', '2024-10-18 01:44:49', '2024-10-18 01:44:49');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `nama_level` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `nama_level`, `created_at`, `updated_at`) VALUES
(5, '123', '2024-10-15 04:19:10', '2024-10-15 04:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `no_peminjaman` varchar(50) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `id_anggota`, `no_peminjaman`, `tgl_peminjaman`, `tgl_pengembalian`, `status`, `created_at`, `update_at`, `deleted_at`) VALUES
(4, 2, 'PJM/171024/004', '2024-10-17', '2024-10-17', '', '2024-10-17 03:29:44', '2024-10-17 03:29:44', 0),
(10, 4, 'PJM/171024/008', '2024-10-17', '2024-10-17', '', '2024-10-17 04:10:31', '2024-10-21 03:26:54', 1),
(11, 5, 'PJM/181024/011', '2024-10-18', '2024-10-18', 'Di Kembalikan', '2024-10-18 01:28:23', '2024-10-21 07:43:51', 0),
(12, 6, 'PJM/181024/012', '2024-10-18', '2024-10-18', 'Di Pinjam', '2024-10-18 01:54:05', '2024-10-18 01:54:54', 1),
(13, 6, 'PJM/181024/013', '2024-10-18', '2024-10-18', 'Di Pinjam', '2024-10-18 02:08:00', '2024-10-18 02:08:06', 1),
(14, 6, 'PJM/181024/014', '2024-10-18', '2024-10-18', 'Di Pinjam', '2024-10-18 02:08:17', '2024-10-18 02:08:17', 0),
(15, 2, 'PJM/211024/015', '2024-10-21', '2024-10-26', 'Di Pinjam', '2024-10-21 02:44:42', '2024-10-21 02:44:42', 0),
(16, 0, '', '0000-00-00', '0000-00-00', 'Di Pinjam', '2024-10-21 03:08:16', '2024-10-21 06:39:56', 1),
(17, 6, 'PJM/211024/017', '2024-10-21', '2024-10-28', 'Di Pinjam', '2024-10-21 04:15:04', '2024-10-21 04:15:04', 0),
(18, 0, '', '0000-00-00', '0000-00-00', 'Di Pinjam', '2024-10-21 04:43:15', '2024-10-21 06:39:53', 1),
(19, 4, 'PJM/211024/019', '2024-10-21', '2024-10-18', 'Di Pinjam', '2024-10-21 06:40:55', '2024-10-21 06:40:55', 0),
(20, 2, 'PJM/211024/020', '2024-10-21', '2024-10-18', 'Di Pinjam', '2024-10-21 06:43:10', '2024-10-21 06:43:10', 0),
(21, 0, '', '0000-00-00', '0000-00-00', 'Di Pinjam', '2024-10-21 06:48:51', '2024-10-21 06:49:00', 1),
(22, 4, 'PJM/211024/022', '2024-10-21', '2024-10-16', 'Di Pinjam', '2024-10-21 06:49:30', '2024-10-21 06:49:30', 0),
(23, 4, 'PJM/211024/023', '2024-10-21', '2024-10-20', 'Di Pinjam', '2024-10-21 06:50:27', '2024-10-21 06:50:27', 0),
(24, 6, 'PJM/211024/024', '2024-10-21', '2024-10-20', 'Di Pinjam', '2024-10-21 06:52:13', '2024-10-21 06:52:13', 0),
(25, 5, 'PJM/211024/025', '2024-10-21', '2024-10-19', 'Di Pinjam', '2024-10-21 06:53:27', '2024-10-21 06:53:27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `denda` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `id_peminjaman`, `status`, `denda`, `created_at`, `update_at`) VALUES
(6, 11, 1, 30000, '2024-10-21 07:43:51', '2024-10-21 07:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `telepon` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `jenis_kelamin`, `telepon`) VALUES
(3, 'wawa', 'admin@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'Perempuan', '0987654321'),
(4, 'budi', 'admin@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Laki-laki', '02364615084'),
(7, 'andi', 'admin@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Laki-laki', '123456780'),
(8, 'apel', 'semangka@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Perempuan', '123'),
(9, 'asa', 'budi@gmail.com', '6a71676eb22d21f57c34691a44450c39275ba973', 'Laki-laki', '1212312'),
(10, 'asas', 'admin@gmail.com', 'cc4723995ce819915e734147a77850427a9e95f9', 'Laki-laki', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
