-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2021 pada 04.37
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggotas`
--

CREATE TABLE `anggotas` (
  `idanggota` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(191) NOT NULL,
  `gender` enum('Laki - laki','Perempuan') NOT NULL,
  `ktp` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `gambar_ktp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `anggotas`
--

INSERT INTO `anggotas` (`idanggota`, `nama`, `alamat`, `telp`, `gender`, `ktp`, `email`, `gambar_ktp`) VALUES
(16, 'Nabila Khairiyah', 'Griya Benowo Indah', '243554544747', 'Perempuan', '234567893433533', 'nabila@gmail.com', 'Blue Illustrated Nurse Uniform Graduation Card (3).jpg'),
(17, 'Patricia', 'Dian Istana', '2345788808', 'Perempuan', '23243546778898', 'patricia@gmail.com', 'Download free image of Black and white Memphis patterned background by Aum about wallpaper, black and white, gray background, abstract, and abstract backgrounds 2350351.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `idberita` int(11) NOT NULL,
  `judul_berita` varchar(191) NOT NULL,
  `isi_berita` longtext NOT NULL,
  `gambar_berita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`idberita`, `judul_berita`, `isi_berita`, `gambar_berita`) VALUES
(1, 'PKP Siap Maju', 'Pada saat ini pkp akan maju', 'UsnMwLcTjUguT5OlD0AkJLnX5WEOuQJZ9lEZZpdB.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bisniss`
--

CREATE TABLE `bisniss` (
  `idbisnis` int(11) NOT NULL,
  `judul` varchar(45) NOT NULL,
  `gambar_produk` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bisniss`
--

INSERT INTO `bisniss` (`idbisnis`, `judul`, `gambar_produk`, `keterangan`) VALUES
(6, 'Pop Ice mantap', 'Blue Illustrated Nurse Uniform Graduation Card (2).jpg', 'segar diminum saat dingin'),
(7, 'Tahu Bakso', 'Download free image of Black and white Memphis patterned background by Aum about wallpaper, black and white, gray background, abstract, and abstract backgrounds 2350351.jpg', 'Di goreng dadakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatans`
--

CREATE TABLE `kegiatans` (
  `idkegiatan` int(11) NOT NULL,
  `judulkegiatan` varchar(99) NOT NULL,
  `gambar_kegiatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatans`
--

INSERT INTO `kegiatans` (`idkegiatan`, `judulkegiatan`, `gambar_kegiatan`) VALUES
(14, 'Sekret PKP', 'IMG_20210920_101628.jpg'),
(15, 'Kedatangan Ketua DPP JATIM', 'WhatsApp Image 2021-10-31 at 17.05.56.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'nabila', 'belakhairiyah@gmail.com', NULL, '$2y$10$ghNPaYqgyWQ5Bf54AInVSOZI8vtKFjwzccNNipm5qZ9g.8GddPTpS', NULL, NULL, NULL, '2021-09-29 23:14:27', '2021-09-29 23:14:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`idberita`);

--
-- Indeks untuk tabel `bisniss`
--
ALTER TABLE `bisniss`
  ADD PRIMARY KEY (`idbisnis`);

--
-- Indeks untuk tabel `kegiatans`
--
ALTER TABLE `kegiatans`
  ADD PRIMARY KEY (`idkegiatan`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `idanggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `idberita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bisniss`
--
ALTER TABLE `bisniss`
  MODIFY `idbisnis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kegiatans`
--
ALTER TABLE `kegiatans`
  MODIFY `idkegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
