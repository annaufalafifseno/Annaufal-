-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 25 Okt 2024 pada 11.15
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `idbiodata` int(11) NOT NULL,
  `nama` text NOT NULL,
  `tempatlahir` text NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`idbiodata`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `foto`) VALUES
(1, 'Raka Wijaya', 'Jakarta', '2000-09-13', 'Laki - Laki', 'tentang.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `idgaleri` int(11) NOT NULL,
  `foto` text NOT NULL,
  `judul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`idgaleri`, `foto`, `judul`) VALUES
(1, 'galeri1.jpg', 'Pemandangan Kota Jakarta'),
(2, 'galeri2.jpg', 'Foto Pernikahan Modern'),
(3, 'galeri3.jpg', 'Pemandangan Bedugul Bali'),
(4, 'galeri4.jpg', 'Tanah Lot');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `idhome` int(11) NOT NULL,
  `judul` text NOT NULL,
  `foto` text NOT NULL,
  `isiteks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`idhome`, `judul`, `foto`, `isiteks`) VALUES
(1, 'Tentang Saya', 'tentang.jpeg', 'Halo, saya Raka Wijaya. Saya adalah seorang fotografer berbasis di Jakarta yang selalu tertarik dengan seni visual sejak usia muda. Latar belakang saya di bidang desain visual dari Universitas Seni Indonesia telah memberikan pondasi yang kuat untuk memahami konsep warna, pencahayaan, dan komposisi dalam fotografi.\r\n\r\nSelama lebih dari 10 tahun berkarya, saya telah mengeksplorasi berbagai genre fotografi, seperti fotografi pernikahan, potret, produk, dan dokumentasi perjalanan. Saya selalu berusaha menangkap momen dengan perspektif unik dan menghadirkan kisah di setiap jepretan kamera. Di setiap proyek, tujuan utama saya adalah menghasilkan gambar yang beresonansi dengan audiens, baik melalui emosi yang mendalam atau keindahan visual yang menarik.\r\n\r\nPortofolio\r\nBerikut adalah beberapa karya pilihan saya yang mencerminkan kecintaan saya terhadap cahaya, komposisi, dan cerita visual. Setiap gambar memiliki ceritanya sendiri dan menangkap keindahan dari perspektif yang unik.\r\n\r\nFotografi Pernikahan: Koleksi momen spesial dalam pernikahan yang saya abadikan dengan gaya dokumenter dan artistik, untuk membuat hari istimewa Anda selalu diingat.\r\n\r\nPotret: Mulai dari potret keluarga hingga fotografi fashion, saya menangkap karakter setiap individu dengan pendekatan yang personal.\r\n\r\nFotografi Produk: Membantu bisnis Anda menampilkan produk dengan visual yang menarik dan berkesan.\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `idkontak` int(11) NOT NULL,
  `nohp` text NOT NULL,
  `email` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`idkontak`, `nohp`, `email`, `alamat`) VALUES
(1, '0812-3456-7890', 'rakawijaya@example.com', 'Jl. Mawar No. 123, Jakarta Selatan, Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `idportofolio` int(11) NOT NULL,
  `judul` text NOT NULL,
  `foto` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`idportofolio`, `judul`, `foto`, `tanggal`) VALUES
(1, 'Pernikahan Adat Jawa', 'porto1.jpg', '2024-10-01'),
(2, 'Produk & Komersial', 'porto2.webp', '2024-10-02'),
(3, 'Dokumentasi Perjalanan & Alam', 'porto3.webp', '2024-10-03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`idbiodata`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`idgaleri`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`idhome`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`idkontak`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`idportofolio`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `idbiodata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `idgaleri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `idhome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `idkontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `idportofolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
