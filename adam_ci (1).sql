-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 09:10 AM
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
-- Database: `adam_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `id` int(255) NOT NULL,
  `nama_hero` varchar(50) NOT NULL,
  `role` int(50) NOT NULL,
  `synergy` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`id`, `nama_hero`, `role`, `synergy`) VALUES
(6, 'Layla', 6, 4),
(8, 'Miya', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kiw`
--

CREATE TABLE `kiw` (
  `id` int(255) NOT NULL,
  `hi` int(255) NOT NULL,
  `ha` int(255) NOT NULL,
  `hii` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_prodi` int(11) DEFAULT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jenis_kelamin`, `email`, `nama_prodi`, `asal_sekolah`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(6, 'Adam Gtg', '2255301076', 'P', 'ikhsandamasraya31@gmail.com', 2, 'SMAS Wahidin Bangko', '0822882040281', 'Jln Harapan', '2023-10-10 11:56:02', '2023-10-16 12:31:48'),
(7, 'Damuel', '2255301076', 'P', 'ikhsan22ti@mahasiswa.pcr.ac.id', 1, 'SMAS Wahidin Bangko', '082288204028', 'Jln Harapan', '2023-10-16 10:41:42', '2023-10-16 10:41:42'),
(8, 'Adam', '2255301076', 'P', 'anang22ti@mahasiswa.pcr.ac.id', 2, 'SMAS Wahidin Bangko', '082288204028', 'Jln Harapan', '2023-10-16 10:44:58', '2023-10-16 10:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL,
  `ruangan` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `akreditasi` varchar(10) NOT NULL,
  `nama_kaprodi` varchar(255) NOT NULL,
  `tahun_berdiri` int(11) NOT NULL,
  `output_lulusan` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `nama_prodi`, `ruangan`, `jurusan`, `akreditasi`, `nama_kaprodi`, `tahun_berdiri`, `output_lulusan`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Informatika', '313', 'TI', 'AA', 'Silvana', 2000, 128, 'default.jpg', '2023-10-02 01:11:56', '2023-10-16 13:02:43'),
(2, 'Sistem Informasi', '225', 'jsadklajsdkl', 'A', 'sada', 2001, 4, 'default.jpg', '2023-10-02 03:40:08', '2023-10-02 03:40:08'),
(5, 'Teknik Elektro', '69', 'TET', 'A', 'Gatau', 2000, 4, 'default.jpg', '2023-10-16 11:40:48', '2023-10-16 11:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(50) NOT NULL,
  `nama_role` varchar(50) NOT NULL,
  `jmlh_hero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `nama_role`, `jmlh_hero`) VALUES
(1, 'Weapon Master', 9),
(2, 'Summoner', 4),
(3, 'Archer', 6),
(4, 'Elementalist', 6),
(5, 'Mage', 6),
(6, 'Guardian', 5),
(7, 'Gunner', 6),
(8, 'Wrestler', 6),
(9, 'Swordsman', 5);

-- --------------------------------------------------------

--
-- Table structure for table `synergy`
--

CREATE TABLE `synergy` (
  `id` int(11) NOT NULL,
  `nama_synergy` varchar(50) NOT NULL,
  `jmlh_hero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `synergy`
--

INSERT INTO `synergy` (`id`, `nama_synergy`, `jmlh_hero`) VALUES
(1, 'Nature Spirit', 6),
(2, 'Ablaze Bounties', 4),
(3, 'Astro Power', 6),
(4, 'S.A.B.E.R', 6),
(5, 'Prince', 2),
(6, 'Cadia Riverlands', 6),
(7, 'Wytmslayer Warrior', 6),
(8, 'Northen Vale', 4),
(9, 'Forsaken Light', 4),
(10, 'Necrokeep', 3),
(11, 'Mystic Bureau', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT 'default.jpg',
  `role` varchar(255) NOT NULL,
  `data_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `data_created`) VALUES
(5, 'Adam', 'ikhsan22ti@mahasiswa.pcr.ac.id', '$2y$10$CGqndkgwdlJjYsAs2OSAZ.lUCr6fHMfKGhAPDUg.dpaxNO8AG1Y8.', 'default.jpg', 'User', 1696822385),
(6, 'Nadin', 'nadin22ti@mahasiswa.pcr.ac.id', '$2y$10$1gkWyE0GYp5hUue4nhpW7uyvaeG1eS3OHznXO8xQexJwv7j.IN4q6', 'default.jpg', 'Admin', 1696822511),
(7, 'Lisa', 'lisa@gmail.com', '$2y$10$n.oQd1Xccfq3hdUlSIY8b.cA2qrpgcdqMZ4kRc7S/1kqyEHCaEbw.', 'default.jpg', 'User', 1696839797),
(9, 'Rose', 'rose@gmail.com', '$2y$10$N.jYnrTLbkieYZGckDCVveeLPd.tCUBBhbwyrQptstEQ7u8Ybasb2', 'default.jpg', 'User', 1696839851),
(10, 'tes', 'tes12@gmail.com', '$2y$10$szj0E5TuAUpPFDW7vzb7rOOdPUecKEfJQT6eCffSakk7Iivz6FyJK', 'default.jpg', 'User', 1696950397),
(11, 'rakaibra', 'raka22ti@gmail.com', '$2y$10$mRLfGDLFWqmcva3GpvGkV.Mb8VYx.V9qK3X0T1aJp3fnYHteIltb2', 'default.jpg', 'User', 1697379717),
(12, 'rakaibra', 'raka@gmail.com', '$2y$10$LfUT8LLb3PVU.wJtBBTlQut9brusFTH96lwIKDzTL9IhOGZF2k/du', 'default.jpg', 'Admin', 1697379951),
(13, 'rakaa', 'rkb@gmail.com', '$2y$10$SOnQHX.o6wZDgPMZS7g.GOhsmxCRi6V61dAtIORbgPUPgScc7d19a', 'default.jpg', 'User', 1697380297),
(14, 'Adam', 'adam@gmail.com', '$2y$10$oryeuL.1xAKB03ll7duRv.IGufjNwVzdTo/aThnnXWlbHk9mwPKC.', 'default.jpg', 'User', 2023),
(15, 'Adam', 'damuel@gmail.com', '$2y$10$iJ3R4EnepybG3DyQCJ8sFux.RBPRVxDgbjPj2bJv7ujQGoWYduUUC', 'default.jpg', 'User', 2023),
(16, 'Admin', 'admin@gmail.com', '$2y$10$enZ8IO32.Qf55gwprrvf9udT0B54xhZqfPSwAU7jACo8b1mSLVbOO', 'default.jpg', 'User', 2023),
(17, 'Admin', 'adm@gmail.com', '$2y$10$2B9CG3v49z9vbphZyYqwc.M6OF3Dx0zUb/OFmLvIuKu0pDDQ3UF8e', 'default.jpg', 'Admin', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `y`
--

CREATE TABLE `y` (
  `id` int(255) NOT NULL,
  `y1` varchar(50) NOT NULL,
  `y2` varchar(50) NOT NULL,
  `y3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Hero_Role` (`role`),
  ADD KEY `FK_Hero_Synergy` (`synergy`);

--
-- Indexes for table `kiw`
--
ALTER TABLE `kiw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_mahasiswa_prodi` (`nama_prodi`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `synergy`
--
ALTER TABLE `synergy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `y`
--
ALTER TABLE `y`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kiw`
--
ALTER TABLE `kiw`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `synergy`
--
ALTER TABLE `synergy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `y`
--
ALTER TABLE `y`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hero`
--
ALTER TABLE `hero`
  ADD CONSTRAINT `FK_Hero_Role` FOREIGN KEY (`role`) REFERENCES `role` (`id`),
  ADD CONSTRAINT `FK_Hero_Synergy` FOREIGN KEY (`synergy`) REFERENCES `synergy` (`id`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `FK_mahasiswa_prodi` FOREIGN KEY (`nama_prodi`) REFERENCES `prodi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
