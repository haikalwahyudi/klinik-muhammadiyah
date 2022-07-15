-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 02:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

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
(10, 'dsfsd', 'dsfsd', '2022-06-29', '1656512334_280123ce4d3628697ef6.jpg'),
(12, 'kjhkj', 'skfhsdkj', '2022-07-12', '1657633319_f4e1b732d25a45fe6e64.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(6, 'bbb', 10, 'bbb', '2022-07-04', 'bbbb@gmail.com', '2222', 'Perempuan', 2, '1657112768_26f26abfe26492954926.png', 'bbb'),
(7, 'Haikal Wahyudi', 7, 'Masbagik', '2022-06-28', 'udin@gmail.com', '12345678', 'Laki-Laki', 1, '1657295653_33d2a6ecea17cb9fdab2.jpg', 'skjhdas'),
(8, 'Udang', 8, 'Penakak', '2022-06-28', 'aa@gmail.com', '1234567', 'Perempuan', 1, '1657295694_0b3ec8425be71630876e.png', 'sakdjgas'),
(9, 'skdjh', 6, 'jhgjh', '6786-08-07', 'ash@gmail.com', '654', 'Perempuan', 1, '1657296112_de143cf16f2d13de2c24.png', 'sdjkf'),
(10, 'jsdhfk', 9, 'shakj', '2022-07-05', 'sg@gmail.com', '9183', 'Laki-Laki', 1, '1657296190_a43a938550663905bba8.jpg', 'sdjkf'),
(11, 'SDKJHF', 8, 'SKDJHF', '2022-07-02', 'udin@gmail.com', '2342', 'Perempuan', 2, '1657296904_7229a65bef4376795365.png', 'ASJHD'),
(12, 'fghjk,', 8, 'vbnm', '2022-07-07', 'dfghj@gmail.com', '5677', 'Perempuan', 2, '1657297177_15aade563146959304bc.png', 'qerth');

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
(2, 'ccc', '1656599701_dfe58890d86a601281d7.jpg', 222, 'ccc');

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
(1, 'Hiakl Wahyudi', 'Penakak', '2022-06-28', '23456789', 'haikal@gmial.com', 'Laki-Laki', 'kjahsd askdjh sak', '1657116349_3054e89523e75a95ddb5.png', 'lklashdkjasd');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `nm_pendaftar` varchar(50) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `keluhan` text NOT NULL,
  `kunjungan` varchar(20) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `id_poli` int(11) NOT NULL,
  `bpjs` varchar(255) NOT NULL,
  `umum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(9, 'Poli Mata', 'Mata Kaki'),
(10, 'sa', 'sa'),
(11, 'aa', 'aa'),
(12, 'sscsa', 'sfsd'),
(13, 'lk', 'alksdj');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `nm_review` varchar(50) NOT NULL,
  `isi_review` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nm_user`, `email`, `nohp`, `username`, `password`, `level`, `foto`) VALUES
(5, 'skdjhf', 'tes@gmail.com', '2983', 'shdjk', '1234', 'Admin', '1657118709_8c74ca13cf8095582bbc.png'),
(6, 'Haikal Wahyudi', 'admin@gmail.com', '87212', 'sss', '1234', 'Dokter', '1657285547_3c70a5452e353a975f35.jpg'),
(9, 'sdf', 'udang@gmail.com', '234', 'as', '1234', 'Pimpinan', 'default.png'),
(12, 'Haikal Wahyudi', 'uu@gmail.com', '1234', '', '1234', 'Pasien', 'default.png');

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id_sosmed` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
