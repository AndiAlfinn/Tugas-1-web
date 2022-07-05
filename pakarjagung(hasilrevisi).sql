-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 03:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakarjagung`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `gejala` varchar(255) NOT NULL,
  `penyakit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `gejala`, `penyakit_id`) VALUES
(17, 'Deman tinggi dan menggigil', 12),
(18, 'Dada terasa penuh', 12),
(19, 'Bunyi jantung abnormal', 12),
(20, 'Pusing', 12),
(21, 'Sulit tidur', 12),
(22, 'Mudah lelah', 12),
(23, 'Mual dan muntah', 12),
(24, 'Katup jantung tidak bekerja dengan baik', 12),
(25, 'Denyut nadi yang lemah dan cepat', 12),
(26, 'Nyeri pada dada sebelah kiri', 12),
(27, 'Denyut nadi yang lemah dan cepat', 13),
(28, 'Detak jantung cepat (tachycardia)', 13),
(29, 'Katup jantung tidak bekerja dengan baik', 13),
(30, 'Sesak napas', 13),
(31, 'Pusing', 13),
(32, 'Pingsan (syncope)', 13),
(33, 'Berat badan menurun', 13),
(34, 'Bunyi jantung abnormal', 13),
(35, 'Detak jantung lambat (bradycardia)', 13),
(36, 'Mudah lelah', 15),
(37, 'Demam tinggi dan menggigil', 15),
(38, 'Penyempitan pada dada', 15),
(39, 'Dada terasa penuh', 15),
(40, 'Sesak napas', 15),
(41, 'Bunyi jantung abnormal', 15),
(42, 'Nyeri pada dada sebelah kiri', 15),
(43, 'Pusing', 15),
(44, 'Mual dan muntah', 15),
(45, 'Sulit tidur', 15),
(46, 'Katub jantung tidak bekerja dengan baik', 16),
(47, 'Berat badan menurun', 16),
(48, 'Sesak napas', 16),
(49, 'Nyeri pada dada sebelah kiri', 16),
(50, 'Dada terasa penuh', 16),
(51, 'Dada terasa penuh', 14),
(52, 'Denyut Nadi yang lemah dan cepat', 14),
(53, 'Sesak Nafas', 14),
(54, 'Pusing', 14);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `penyakit`, `solusi`) VALUES
(12, 'Gagal Jantung', 'Penanganan yang dilakukan adalah kombinasi obat-obatan, peralatan penopang jantung, maka operasi perlu dilakukan. Gaya hidup yang sehat juga penting untuk dijalani oleh pengidapnya.'),
(13, 'Heart Valve Disease', 'Penderita bisa mengonsumsi obat :\r\nDiuretik, yang berfungsi untuk mengeluarkan cairan dari dalam aliran darah dan jaringan tubuh, sehingga beban jantung dapat berkurang\r\nBeta blockers, seperti bisoprolol, yang berfungsi untuk menurunkan tekanan darah dan meringankan kerja jantung dengan cara membuat jantung berdetak lebih lambat\r\nAntiaritmia, seperti amiodarone, yang berfungsi untuk mengontrol gangguan irama jantung\r\nACE inhibitors, seperti ramipril, yang berfungsi untuk mengurangi beban kerja jantung\r\nVasodilators, seperti nitrogliserin, yang berfungsi untuk meringankan kerja jantung dan menjaga supaya aliran darah tidak berbalik kembali'),
(14, 'Aritmia', 'Salah satu jenis obat yang biasanya diberikan dokter untuk pengidap aritmia adalah obat penghambat beta. Obat tersebut bermanfaat untuk menjaga denyut jantung tetap normal. Selain obat penghambat beta, obat-obatan lain yang juga sering digunakan untuk mengatasi aritmia, antara lain aspirin, warfarin, rivaroxaban, dan dabigatran yang dapat mencegah terjadinya penggumpalan darah dan stroke.'),
(15, 'Perikarditis', 'Penderita bisa mengonsumsi obat :\r\nObat antiinflamasi nonsteroid (OAINS)\r\nObat antiinflamasi nonsteroid berfungsi untuk mengurangi peradangan di perikardium dan meredakan nyeri dada. Obat yang dapat diberikan adalah ibuprofen dan aspirin.\r\nColchicine\r\nColchicine berfungsi untuk mengurangi peradangan dengan cara membunuh sel radang Obat ini dapat dikombinasikan dengan OAINS atau diberikan sebagai alternatif dari OAINS.\r\nKortikosteroid\r\nObat kortikosteroid hanya diberikan apabila perikarditis tidak membaik dengan OAINS dan colchicine. Salah satu contohnya adalah prednisone.\r\nAntibiotik\r\nObat antibiotik hanya diberikan jika perikarditis disebabkan oleh infeksi bakteri.'),
(16, 'Jantung Koroner', 'Beberapa obat yang digunakan untuk mengatasi penyakit jantung koroner, meliputi:\r\nObat-obatan Penurun Kolesterol\r\nIni termasuk statin, niasin, dan fibrat. Obat-obatan ini membantu mengurangi kadar kolesterol darah, sehingga mengurangi jumlah lemak yang menempel pada pembuluh.\r\nAspirin\r\nObat ini atau pengencer darah lainnya membantu untuk melarutkan darah yang tersumbat, dan mencegah risiko stroke atau infark miokard. Namun dalam beberapa kasus, aspirin mungkin bukan pilihan yang baik. Beritahu dokter jika keluarga atau kerabat mengidap gangguan pembekuan darah.\r\nBeta Blockers\r\nObat ini menurunkan tekanan darah dan mencegah risiko infark miokard.\r\nNitrogliserin dan Inhibitor Enzim yang Mengubah Angiotensin\r\nObat ini dapat membantu mencegah risiko infark miokard.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kode` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kode`, `username`, `password`) VALUES
(1, 'oljen', '$2y$10$lE7HZiitDJs9HJQpXmhZWOlBXSR8KpLDIlXO/yPbPvz.QXWsGPDKa'),
(2, 'admin', '$2y$10$qqTuawSpO4v26inKhFDxuu6XqkPy5TjgP3LgVvRULxW6FbQk8mruy'),
(3, 'oljen2', '$2y$10$z8rdkWySHkmbzbljjsHGK.qZr0sWGMMP7C1DDw7EJbXpSFYtprbKC'),
(4, 'farhan', '$2y$10$fZVGO.rwc18GvBOeYvrKZ.m/5iW7MKbDQhjoNQ5tWeYPgnWpz3ree'),
(5, 'saya', '$2y$10$PcT.MXTGdOclinUQ.vI8z.M0TUBn6NNqMImrTsDY.fjrDE4eydDFe'),
(6, 'darma', '12345678'),
(7, 'darma_m2', '$2y$10$2eJVBqCc8Wd.F98MaHDieOzPtGxthVkdrNyklfRulA32rdcs6sZ3i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penyakit_id` (`penyakit_id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gejala`
--
ALTER TABLE `gejala`
  ADD CONSTRAINT `gejala_ibfk_1` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
