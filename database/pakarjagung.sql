-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2020 pada 18.29
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `gejala` varchar(255) NOT NULL,
  `penyakit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id`, `gejala`, `penyakit_id`) VALUES
(1, 'terjadi pada permukaan daun jagung berwarna putih sampai kekuningan diikuti dengan garis-garis klorotik', 4),
(2, 'pada pagi hari di sisi bawah daun jagung terdapat lapisan beledu putih', 4),
(3, 'tidak membentuk buah', 4),
(4, 'pertumbuhannya kerdil', 4),
(5, 'bercak daun berwarna hijau kekuningan atau cokelat kemerahan', 5),
(6, 'layu atau mati dalam waktu 3-4 minggu', 5),
(7, 'biji rusak dan busuk, tongkol gugur', 5),
(8, 'muncul bercak kerdil berbentuk oval kemudian bercak semakin memanjang berbentuk elips dan berkembang menjadi nekrotik', 6),
(9, 'Bercak berwarna hijau keabu-abuan atau coklat dan muncul awal pada daun yang terbawah kemudian berkembang menuju daun atas', 6),
(10, 'tanaman cepat mati atau mengering', 6),
(11, 'bercak-bercak kecil berbentuk bulat sampai oval terdapat pada permukaan daun jagung di bagian atas dan bawah yang menghasilkan uredospora yang berbentuk bulat atau oval', 7),
(12, 'Pangkal batang berubah warna dari hijau menjadi kecokelatan', 8),
(13, 'bagian dalam busuk, sehingga mudah rebah', 8),
(14, 'bagian kulit luarnya tipis', 8),
(15, 'Pada pangkal batang ada yang memperlihatkan warna merah jambu, merah kecokelatan atau coklat', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `solusi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id`, `penyakit`, `solusi`, `gambar`) VALUES
(4, 'Bulai (Peronosclerospora maydis)', 'Pengendalian bisa dengan menggunakan varietas tahan, seperti Srikandi, Lamuru, dan Gumarang. Selain itu, bisa dilakukan penanaman serempak dan melakukan periode waktu bebas tanaman jagung minimal dua minggu sampai satu bulan di setiap tahunnya. Jika sudah ada yang terinfeksi bisa dilakukan eradikasi atau pemusnahan total. Untuk pencegahan juga bisa digunakan fungisida metalaksil pada benih tanaman dengan dosis 0,7 gram bahan aktif pada tiap kg benih.', 'bulai.jpeg'),
(5, 'Bercak Daun (Bipolaris maydis Syn)', 'Pengendalian bisa dengan menggunakan varietas tahan, seperti Bima 1, Sukmaraga, dan Palakka. Jika terlihat tanaman yang sudah terinfeksi maka harus segera dieradikasi. Dapat juga dilakukan pemberian fungisida dengan bahan aktif mancozeb dan carbendazim.', 'bercak_daun.jpeg'),
(6, 'Hawar Daun (Rhizoctonia solani)', 'Pengendalian bisa dengan menggunakan varietas tahan, seperti Bisma, Pioner 2 dan 14, serta Semar 2 dan 5. Jika terlihat tanaman yang sudah terinfeksi maka harus segera dieradikasi. Dapat juga dilakukan dengan menggunakan cendawan antagonis Trichoderma viride dan pemberian fungisida dengan bahan aktif mankozeb dan dithiocarbamate.', 'hawar_daun.jpeg'),
(7, 'Karat Daun (Puccinia polysora)', 'Pengendalian bisa dengan menggunakan varietas tahan, seperti Lamuru, Sukmaraga, dan Semar 10. Jika terlihat tanaman yang sudah terinfeksi maka harus segera dieradikasi. Dapat juga dilakukan pemberian fungisida dengan bahan aktif benomil.', 'karat_daun.jpeg'),
(8, 'Busuk Batang (Fusarium sp.)', 'Pengendalian bisa dengan menggunakan varietas tahan, seperti BISI-1, Surya, CPI-2, dan Pioneer-8. Selain itu bisa dilakukan pergiliran tanaman, pemupukan berimbang, menghindari pemberian N tinggi dan K rendah, dan drainase yang baik untuk mencegah serangan. Dapat juga dilakukan pengendalian hayati dengan cendawan antagonis Trichoderma sp.', 'busuk_batang.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `kode` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`kode`, `username`, `password`) VALUES
(1, 'oljen', '$2y$10$lE7HZiitDJs9HJQpXmhZWOlBXSR8KpLDIlXO/yPbPvz.QXWsGPDKa'),
(2, 'admin', '$2y$10$qqTuawSpO4v26inKhFDxuu6XqkPy5TjgP3LgVvRULxW6FbQk8mruy'),
(3, 'oljen2', '$2y$10$z8rdkWySHkmbzbljjsHGK.qZr0sWGMMP7C1DDw7EJbXpSFYtprbKC'),
(4, 'farhan', '$2y$10$fZVGO.rwc18GvBOeYvrKZ.m/5iW7MKbDQhjoNQ5tWeYPgnWpz3ree'),
(5, 'saya', '$2y$10$PcT.MXTGdOclinUQ.vI8z.M0TUBn6NNqMImrTsDY.fjrDE4eydDFe');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penyakit_id` (`penyakit_id`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD CONSTRAINT `gejala_ibfk_1` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
