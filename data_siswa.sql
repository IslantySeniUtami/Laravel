-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Sep 2019 pada 09.39
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nip` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `nama_guru` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama_guru`, `tanggal_lahir`, `jenis_kelamin`, `avatar`, `created_at`, `updated_at`) VALUES
(6, '01', 'Bu Lalai', '2019-09-16', 'P', 'download.png', '2019-09-09 20:11:32', '2019-09-16 17:25:49'),
(7, '02', 'Bu Sasa', '2019-09-27', 'P', NULL, '2019-09-16 19:37:24', '2019-09-16 19:37:24'),
(8, '03', 'Pak Banyu', '2019-09-17', 'L', NULL, '2019-09-17 19:54:18', '2019-09-17 19:54:18'),
(9, '04', 'Pak Bahar', '2019-09-24', 'L', NULL, '2019-09-17 19:54:41', '2019-09-17 19:54:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 'XI RPL 5', NULL, NULL),
(2, 'XI RPL 6', NULL, NULL),
(3, 'XI RPL 7', NULL, NULL),
(4, 'XI RPL 4', '2019-09-16 23:00:29', '2019-09-16 23:00:29'),
(5, 'XI RPL 3', '2019-09-16 23:01:24', '2019-09-16 23:01:24'),
(6, 'XI RPL 2', '2019-09-17 19:54:55', '2019-09-17 19:54:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_06_023318_create_table_siswa', 1),
(4, '2019_08_23_003211_create_table_guru', 2),
(5, '2019_08_23_010802_create_table_guru', 3),
(6, '2019_08_30_005610_create_table_kelas', 4),
(7, '2019_08_30_010909_create_table_kelas', 5),
(8, '2019_09_06_014555_create_table_walikelas', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kelas` bigint(20) UNSIGNED DEFAULT NULL,
  `nisn` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `nama_siswa` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `id_kelas`, `nisn`, `nama_siswa`, `tanggal_lahir`, `jenis_kelamin`, `avatar`, `created_at`, `updated_at`) VALUES
(12, 2, '1010', 'Gabrielle', '2019-08-08', 'P', 'download.png', '2019-08-07 20:14:53', '2019-09-11 16:37:22'),
(14, 1, '1011', 'Banyu', '2019-09-28', 'L', 'download.png', '2019-09-16 18:56:52', '2019-09-16 18:57:09'),
(15, 1, '1012', 'Lala', '2019-09-19', 'P', NULL, '2019-09-16 18:57:32', '2019-09-16 18:57:32'),
(16, 2, '1013', 'Sinyo', '2019-09-06', 'L', NULL, '2019-09-16 19:02:46', '2019-09-16 19:02:46'),
(17, 1, '1014', 'Mutia', '2019-09-11', 'P', NULL, '2019-09-16 19:03:04', '2019-09-16 19:03:04'),
(18, 1, '1015', 'Sukma', '2019-09-09', 'P', NULL, '2019-09-16 19:03:25', '2019-09-16 19:03:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'iis', 'islanty@gmail.com', NULL, '$2y$10$Cq/aT6paua8n7Qsc5TDu3.ZIJUZqKTSOu5T.PodYjVspMr0WDHXna', 'Ie4fIP8C8ak59eFpfQyIVsbD2pSZsXjUVtYkBcuxjfTuTZFNoT5zGeeS1Eqs', '2019-08-22 15:58:29', '2019-08-22 15:58:29'),
(2, 'Risa', 'risa@gmail.com', NULL, '$2y$10$HIVgDlogqmWGxaDwuzafB.6i/hs7nMMaxyqL8fffXsMmE16p0Jvfa', NULL, '2019-08-22 17:45:00', '2019-08-22 17:45:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `walikelas`
--

CREATE TABLE `walikelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `walikelas`
--

INSERT INTO `walikelas` (`id`, `id_guru`, `id_kelas`, `created_at`, `updated_at`) VALUES
(4, 7, 1, '2019-09-17 19:46:03', '2019-09-17 19:48:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `walikelas`
--
ALTER TABLE `walikelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`);

--
-- Ketidakleluasaan untuk tabel `walikelas`
--
ALTER TABLE `walikelas`
  ADD CONSTRAINT `walikelas_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `walikelas_ibfk_3` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
