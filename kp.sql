-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 06:13 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `jalan`
--

CREATE TABLE `jalan` (
  `id` int(11) NOT NULL,
  `jalan` varchar(255) DEFAULT NULL,
  `no_ruas` varchar(64) DEFAULT NULL,
  `kecamatan` varchar(128) DEFAULT NULL,
  `desa` varchar(128) DEFAULT NULL,
  `panjang` float DEFAULT NULL,
  `lebar` float DEFAULT NULL,
  `aspal` float DEFAULT NULL,
  `beton` float DEFAULT NULL,
  `kerikil` float DEFAULT NULL,
  `tanah_belum` float DEFAULT NULL,
  `baik` float DEFAULT NULL,
  `sedang` float DEFAULT NULL,
  `rusak_ringan` float DEFAULT NULL,
  `rusak_berat` float DEFAULT NULL,
  `dokumentasi` varchar(256) DEFAULT NULL,
  `kegiatan` varchar(50) DEFAULT NULL,
  `perusahaan` varchar(50) DEFAULT NULL,
  `kontrak` int(12) DEFAULT NULL,
  `jangka` varchar(64) DEFAULT NULL,
  `volume_pekerjaan` int(12) DEFAULT NULL,
  `foto_kegiatan` varchar(128) DEFAULT NULL,
  `video_kegiatan` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jalan`
--

INSERT INTO `jalan` (`id`, `jalan`, `no_ruas`, `kecamatan`, `desa`, `panjang`, `lebar`, `aspal`, `beton`, `kerikil`, `tanah_belum`, `baik`, `sedang`, `rusak_ringan`, `rusak_berat`, `dokumentasi`, `kegiatan`, `perusahaan`, `kontrak`, `jangka`, `volume_pekerjaan`, `foto_kegiatan`, `video_kegiatan`) VALUES
(11, 'BABAKAN CIKONENG - BATU KUDA', '22.09.04040.01', 'CILEUNYI', '', 1, 3, 1, 0, 0, 0, 1, 0, 0, 0, NULL, 'paket', '123', 123, '1231', 212, 'foto.jpg', 'video.mp4'),
(12, 'BTS. NEGLASARI - JALAN TOL', '22.09.03021.01', 'CILEUNYI', '', 5, 3, 1, 1, 1, 2, 2, 1.5, 0.5, 1, 'default.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'CIBIRU HILIR - STASION CIMEKAR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'CILEUNYI  - BTS.KEC.CILEUNYI/CILENGKRANG (Garung)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'CILEUNYI  (Galumpit)  - BOJONGMALATI - JL. PANYAWUNGAN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'CILEUNYI  TERPADU  - BTS. KOTA BANDUNG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'JALAN LINGKAR  CILEUNYI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'JL. PANDANWANGI-CILEUNYI TERPADU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'JL. SMPN CILEUNYI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'SINDANG  RERET- CIBIRU WETAN(Tutwuri)-SP.SD CIKONENG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'BOJONGKONENG (BTS.KOTA  BDG) - SP3. PASIR POGOR1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'DAGO ATAS - PAKAR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'GORDON  (PAKAR) - SP3. PASANGGRAHAN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'LAPANG GOLF - BTS. KOTA BDG (IR. H. JUANDA)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'PADASUKA-CIMENYAN-CARINGIN TILU-TUGU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'PASIR IMPUN (CISUMUN) - CIKAWARI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'PATENGANG - CIKAWARI  - TAREPTEP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'SEKEANGGA - SP4. CILAJA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'SINDANGLAYA - TAREPTEP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'SP3. PASANGGRAHAN - SP3. PASIR POGOR 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'RAIHAN N SETIAWAN', 'raihan@raihan.com', 'material-logo1.png', '$2y$10$ERXIxgQnAnh1Kja1C6gpWOaFMMyFl/lXVMIF2N7XZVfk8vTaAOM0G', 4, 1, 1625591303),
(2, 'tes', 'tes@tes.com', 'default.jpg', '$2y$10$hMox47ZUQ8oH93L0272OqehUlxilYcYAH7mcAqtkqruB4LVctlzLK', 2, 1, 1625548123),
(4, 'admin', 'admin@admin.com', 'pemkab1.png', '$2y$10$FvXArl7ob3uHefvu4Nk9x.UBmFWOJzIBf6cimIeSLEuYiQqtUaRiW', 1, 1, 1625548103),
(10, 'tes123', 'tes@tes123.com', 'default.jpg', '$2y$10$RZXwmbQEYKO6ojTctW9.WeGD7tlf14wzXws0in6FzJRc5vjK6jTMe', 2, 1, 1627961252),
(11, '123', '123@123.com', 'default.jpg', '$2y$10$ivO2FQCKzJJk4uojZYoznuzvpfXg6nk9KNetQMjPwo/UXmWkUxSLy', 3, 1, 1627961777),
(12, 'tes', '123@1232.com', 'default.jpg', '$2y$10$lXb/EzHUuy7mrmv80zKKRev7vQBHd/W4qHg1ey/UjiRwwuRLs17FK', 1, 1, 1627961901),
(13, 'ayoo', 'tes@tes2.com', 'default.jpg', '$2y$10$if38tDkLtURfdn2fMA8ayOt.Ah2jvGbjxgKUcePLkiwC4PDS6pVb2', 1, 1, 1627963630),
(14, 'tes123', 'tes123@tes.com', 'default.jpg', '$2y$10$0J.VCDRl7Hud0HkWaik4muAEHapVRYo1FimjCBM/Z9HTUQcPgDpLO', 3, 1, 1629083966),
(15, 'Fikri', 'fikri@gmail.com', 'default.jpg', '$2y$10$AFRDZz9.mvu/45uJ.OT56OVn7NfiFhBPhFiawn/zD4PwzOEnFxdwe', 4, 1, 1629087418);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(6, 1, 3),
(9, 2, 5),
(20, 1, 6),
(21, 1, 7),
(22, 2, 7),
(25, 3, 6),
(26, 3, 2),
(27, 4, 7),
(29, 4, 2),
(32, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Member'),
(3, 'Menu'),
(6, 'Data Jalan'),
(7, 'Data Kegiatan');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Adm Data Jalan'),
(4, 'Adm Data Kegiatan');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin/index', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'SubMenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(12, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(13, 6, 'Tambah Data Jalan', 'jalan/', 'fas fa-fw fa-road', 1),
(15, 7, 'Tambah Kegiatan', 'jalan/kegiatan', 'fas fa-fw fa-search-location', 1),
(16, 1, 'Tambah Admin', 'admin/add', 'fas fa-fw fa-user-plus', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jalan`
--
ALTER TABLE `jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jalan`
--
ALTER TABLE `jalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
