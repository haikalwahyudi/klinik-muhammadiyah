-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 02:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muhammadiyah`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `jdl_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `tgl_berita` date NOT NULL,
  `gbr_berita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `jdl_berita`, `isi_berita`, `tgl_berita`, `gbr_berita`) VALUES
(14, 'Pemberian Souvenir', 'setiap yang melahirkan di klinik akan di berikan souvenir berupa foto si bayi beserta bingkainya', '2022-08-04', '1659665973_dfa98304d0745d75f9ee.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tujuan` int(10) NOT NULL,
  `aksi` int(3) NOT NULL,
  `urutan` int(11) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id_chat`, `id_user`, `tujuan`, `aksi`, `urutan`, `pesan`) VALUES
(82, 9, 14, 2, 1659681233, 'selamat siang dok'),
(84, 9, 17, 2, 1659758285, 'selamat pagi');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nm_dokter` varchar(50) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nm_dokter`, `id_poli`, `tempat_lahir`, `tgl_lahir`, `email`, `nohp`, `jk`, `id_jadwal`, `foto`, `alamat`) VALUES
(14, 'Udang', 9, 'bbb', '2022-07-12', 'udang@gmail.com', '45645', 'Laki-Laki', 1, '1659627006_00ad4ded65a0873d74fe.png', 'sdfsd'),
(17, 'udin', 9, 'ggg', '2022-06-27', 'udin@gmail.com', '45678', 'Perempuan', 1, '1659627064_80aba7ea7f1d4cfc24fb.png', 'jkhkjs');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nm_fasilitas` varchar(50) NOT NULL,
  `gbr_fasilitas` varchar(255) NOT NULL,
  `jml_fasilitas` int(11) NOT NULL,
  `desk_fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nm_fasilitas`, `gbr_fasilitas`, `jml_fasilitas`, `desk_fasilitas`) VALUES
(2, 'ccc', '1656599701_dfe58890d86a601281d7.jpg', 222, ''),
(5, 'qq', '1659288042_9e2529f31ddab8fdeca5.jpg', 3, ''),
(6, '1245', '1659288065_8549f2ddd05eb97daa4c.png', 4, ''),
(7, 'aaa', '1659288554_0ac8251aeae84117c406.png', 1, 'qq');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `hari` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `jam`, `hari`) VALUES
(1, '09:00 - 15:00', 'Minggu'),
(2, '00:30 - 14:05', 'Jum\'at');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nm_pasien` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `keluhan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nm_pasien`, `tempat_lahir`, `tgl_lahir`, `nohp`, `email`, `jk`, `keluhan`, `foto`, `alamat`) VALUES
(3, 'Novi Andriani', 'Gondang', '1996-02-01', '082359136364', 'novipet@gmail.com', 'Perempuan', 'sakit pinggang', '1659628127_c233aefa40ff4a899268.png', 'Kr. Bedil');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `nm_pendaftar` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `keluhan` text NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `id_poli` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `pembayaran` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `nm_pendaftar`, `id_user`, `no_antrian`, `jk`, `nohp`, `keluhan`, `tgl_kunjungan`, `tgl_pendaftaran`, `id_poli`, `kategori`, `pembayaran`) VALUES
(1, 'aaa', 12, 1, 'Laki-Laki', '111', 'aaaa', '2022-07-20', '2022-07-31', 7, 'UMUM', NULL),
(2, 'bbb', 12, 2, 'Perempuan', '222', 'bbbb', '2022-08-04', '2022-08-04', 7, 'UMUM', NULL),
(3, 'sfsd', 12, 3, 'Perempuan', '123', 'sfsdf', '2022-07-20', '2022-06-20', 7, 'BPJS', '45645'),
(4, 'asd', 12, 1, 'Perempuan', '121', 'sada', '2022-07-20', '2022-07-19', 8, 'BPJS', '1212312'),
(5, 'ahsjah', 9, 1, 'Laki-Laki', '9823', 'sadkjhasd', '2022-07-31', '2022-08-01', 9, 'BPJS', '82648');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id_poli` int(11) NOT NULL,
  `nm_poli` varchar(50) NOT NULL,
  `desk_poli` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nm_poli`, `desk_poli`) VALUES
(6, 'Gigi', 'gigi sehat dan kuat'),
(7, 'Poli Kandungan', 'Jagalah Buah Hati anda'),
(8, 'Poli Umum', 'Pemeriksaan Umum'),
(9, 'Poli Mata', 'Mata Kaki');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `id_user` int(50) NOT NULL,
  `isi_review` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `id_user`, `isi_review`, `rating`) VALUES
(1, 9, 'Pelayanan nya Baik', 3),
(2, 9, 'saya senang dengan pelayanannya', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id_sosmed` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `wa` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id_sosmed`, `id_dokter`, `fb`, `ig`, `wa`, `tw`) VALUES
(2, 8, 'fb', 'ig', 'wa', 'tw');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_dokter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nm_user`, `email`, `nohp`, `username`, `password`, `level`, `foto`, `id_dokter`) VALUES
(5, 'Zulhadi', 'qjull@gmail.com', '081907700312', 'shdjk', '1234', 'Admin', '1659621485_209f2bfeb44af6ebd9a1.png', 0),
(9, 'Novi Andriani', 'novipet@gmail.com', '087765432112', 'as', '1234', 'Pasien', '1659622531_e31b2806b1b98a423deb.png', 0),
(12, 'Haikal Wahyudi', 'uu@gmail.com', '1234', '', '1234', 'Pasien', 'default.png', 0),
(14, 'Udang', 'udang@gmail.com', '45645', '', '1234', 'Dokter', '1659627187_20f0fa9c6e59a7bbf299.png', 14),
(15, 'udin', 'udin@gmail.com', '45678', '', '1234', 'Dokter', 'default.png', 17),
(17, 'Fathammubin', 'lektramubin@gmail.com', '085237237687', 'pimpinan', '1234', 'Pimpinan', '1659579332_438490266182e6179aa1.png', NULL),
(21, 'Haerul Anam', 'anam@gmail.com', '085237237687', '', '1234', 'Pasien', 'default.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id_sosmed`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id_sosmed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
