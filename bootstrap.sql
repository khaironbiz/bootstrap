-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 12:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bootstrap`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `penyedia_event` int(11) NOT NULL,
  `nama_event` varchar(200) NOT NULL,
  `deskripsi_event` text NOT NULL,
  `fasilitas_event` text NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `provinsi_event` varchar(50) NOT NULL,
  `kota_event` varchar(50) NOT NULL,
  `lokasi_event` varchar(150) NOT NULL,
  `harga_event` int(11) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_up` date NOT NULL,
  `blokir` varchar(4) NOT NULL DEFAULT 'N',
  `has_event` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id_event`, `penyedia_event`, `nama_event`, `deskripsi_event`, `fasilitas_event`, `tanggal_mulai`, `tanggal_selesai`, `provinsi_event`, `kota_event`, `lokasi_event`, `harga_event`, `date_create`, `date_up`, `blokir`, `has_event`) VALUES
(1, 0, 'Basic Neurology Life Support', '', '', '0000-00-00', '0000-00-00', '', '', '', 0, '2021-03-03 09:57:25', '0000-00-00', 'N', '');

-- --------------------------------------------------------

--
-- Table structure for table `event_harga`
--

CREATE TABLE `event_harga` (
  `id_event_harga` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_profesi_kesehatan` int(11) NOT NULL,
  `id_level_harga` int(11) NOT NULL,
  `event_harga` int(11) NOT NULL,
  `create_event_harga` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `has_event_harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event_level_harga`
--

CREATE TABLE `event_level_harga` (
  `id_event_level_harga` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_level_harga` int(11) NOT NULL,
  `max_date` date NOT NULL,
  `harga_event` int(11) NOT NULL,
  `create_event_level_harga` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `has_event_level_harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event_peserta`
--

CREATE TABLE `event_peserta` (
  `id` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_profesi` int(11) NOT NULL,
  `has_event_peserta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event_poster`
--

CREATE TABLE `event_poster` (
  `id_event_poster` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `event_poster` varchar(255) NOT NULL,
  `has_event_poster` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_event`
--

CREATE TABLE `jenis_event` (
  `id_jenis_event` int(11) NOT NULL,
  `nama_jenis_event` varchar(50) NOT NULL,
  `create_jenis_event` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `has_jenis_event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_event`
--

INSERT INTO `jenis_event` (`id_jenis_event`, `nama_jenis_event`, `create_jenis_event`, `has_jenis_event`) VALUES
(1, 'Pelatihan', '2021-03-03 11:20:42', 'sADADA'),
(2, 'Seminar', '2021-03-03 11:20:42', 'Sdadad');

-- --------------------------------------------------------

--
-- Table structure for table `level_harga`
--

CREATE TABLE `level_harga` (
  `id_level_harga` int(11) NOT NULL,
  `nama_level_harga` varchar(50) NOT NULL,
  `create_level_harga` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `has_level_harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level_harga`
--

INSERT INTO `level_harga` (`id_level_harga`, `nama_level_harga`, `create_level_harga`, `has_level_harga`) VALUES
(1, 'Early Bird', '2021-02-28 09:05:49', '123456'),
(2, 'Harga Normal', '2021-02-28 09:05:58', '213234567'),
(3, 'Harga Onsite', '2021-02-28 09:04:14', '266283635625');

-- --------------------------------------------------------

--
-- Table structure for table `penyedia`
--

CREATE TABLE `penyedia` (
  `id_penyedia` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_penyedia` varchar(50) NOT NULL,
  `badan_hukum` varchar(15) NOT NULL,
  `web_utama` varchar(100) NOT NULL,
  `email_penyedia` varchar(100) NOT NULL,
  `hp_penyedia` varchar(25) NOT NULL,
  `provinisi_penyedia` varchar(25) NOT NULL,
  `kota_penyedia` varchar(25) NOT NULL,
  `kab_penyedia` varchar(25) NOT NULL,
  `kecamatan_penyedia` varchar(25) NOT NULL,
  `kel_penyedia` varchar(25) NOT NULL,
  `alamat_penyedia` varchar(100) NOT NULL,
  `kode_merchant` varchar(15) NOT NULL,
  `nama_project` varchar(50) NOT NULL,
  `url_project` varchar(100) NOT NULL,
  `url_call_back` varchar(100) NOT NULL,
  `api_key_duitku` varchar(50) NOT NULL,
  `nama_pemilik_penyedia` varchar(100) NOT NULL,
  `ktp_pemilik_penyedia` varchar(25) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `nama_rekening` varchar(50) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `has_penyedia` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profesi_kesehatan`
--

CREATE TABLE `profesi_kesehatan` (
  `id_profesi_kesehatan` int(11) NOT NULL,
  `nama_profesi` varchar(100) NOT NULL,
  `nama_op` varchar(100) NOT NULL,
  `singkatan_op` varchar(15) NOT NULL,
  `ketua_op` varchar(75) NOT NULL,
  `masa_bakti_awal` date NOT NULL,
  `masa_bakti_ahir` date NOT NULL,
  `web_op` varchar(100) NOT NULL,
  `email_op` varchar(150) NOT NULL,
  `create_profesi_kesehatan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `has_profesi_kesehatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profesi_kesehatan`
--

INSERT INTO `profesi_kesehatan` (`id_profesi_kesehatan`, `nama_profesi`, `nama_op`, `singkatan_op`, `ketua_op`, `masa_bakti_awal`, `masa_bakti_ahir`, `web_op`, `email_op`, `create_profesi_kesehatan`, `has_profesi_kesehatan`) VALUES
(5, 'Dokter', 'Ikatan Dokter Indonesia', 'IDI', 'dr. Daeng M. Faqih, SH, MH', '2018-01-01', '2021-12-31', 'http://www.idionline.org/', 'pbidi@idionline.org', '2021-03-03 04:15:49', '6f78ee1466fff4b7109f4f319124a044'),
(14, 'Perawat', 'Persatuan Perawat Nasional Indonesia', 'PPNI', 'DR. Ns. Harif Fadilah, S.Kep., M.Kep., MH', '2021-03-03', '2021-03-17', 'www.ppni.or.id', 'dppppni@gmail.com', '2021-03-03 09:00:25', 'd9a6132e8eabbf370640a449abee0d97');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `event_harga`
--
ALTER TABLE `event_harga`
  ADD PRIMARY KEY (`id_event_harga`);

--
-- Indexes for table `event_level_harga`
--
ALTER TABLE `event_level_harga`
  ADD PRIMARY KEY (`id_event_level_harga`);

--
-- Indexes for table `event_peserta`
--
ALTER TABLE `event_peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_poster`
--
ALTER TABLE `event_poster`
  ADD PRIMARY KEY (`id_event_poster`);

--
-- Indexes for table `jenis_event`
--
ALTER TABLE `jenis_event`
  ADD PRIMARY KEY (`id_jenis_event`);

--
-- Indexes for table `level_harga`
--
ALTER TABLE `level_harga`
  ADD PRIMARY KEY (`id_level_harga`);

--
-- Indexes for table `penyedia`
--
ALTER TABLE `penyedia`
  ADD PRIMARY KEY (`id_penyedia`);

--
-- Indexes for table `profesi_kesehatan`
--
ALTER TABLE `profesi_kesehatan`
  ADD PRIMARY KEY (`id_profesi_kesehatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event_harga`
--
ALTER TABLE `event_harga`
  MODIFY `id_event_harga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_level_harga`
--
ALTER TABLE `event_level_harga`
  MODIFY `id_event_level_harga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_peserta`
--
ALTER TABLE `event_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_poster`
--
ALTER TABLE `event_poster`
  MODIFY `id_event_poster` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_event`
--
ALTER TABLE `jenis_event`
  MODIFY `id_jenis_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `level_harga`
--
ALTER TABLE `level_harga`
  MODIFY `id_level_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penyedia`
--
ALTER TABLE `penyedia`
  MODIFY `id_penyedia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profesi_kesehatan`
--
ALTER TABLE `profesi_kesehatan`
  MODIFY `id_profesi_kesehatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
