-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2021 pada 17.51
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'd11fb12728e27ad16084b2c44e27d9c4', '2021-11-07 01:47:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'user', 'Group for end user'),
(2, 'admin', 'Group for end user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`id`, `group_id`, `user_id`) VALUES
(3, 1, 7),
(1, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'muhamadarsaludin71@gmail.com', NULL, '2021-11-07 01:28:29', 0),
(2, '::1', 'muhamadarsaludin71@gmail.com', 1, '2021-11-07 03:59:04', 1),
(3, '::1', 'muhamadarsaludin71@gmail.com', 1, '2021-12-02 16:04:39', 1),
(4, '::1', 'muhamadarsaludin71@gmail.com', 1, '2021-12-03 06:53:46', 1),
(5, '::1', 'muhamadarsaludin71@gmail.com', 1, '2021-12-04 05:35:22', 1),
(6, '::1', 'muhamadarsaludin71@gmail.com', 1, '2021-12-04 20:48:40', 1),
(7, '::1', 'muhamadarsaludin71@gmail.com', 1, '2021-12-05 06:37:57', 1),
(8, '::1', 'muhamadarsaludin71@gmail.com', 1, '2021-12-06 10:46:00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `active` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id`, `user_id`, `title`, `image`, `link`, `active`, `created_at`, `updated_at`) VALUES
(2, 0, 'Test', '1.png', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_akademik`
--

CREATE TABLE `data_akademik` (
  `id` int(10) UNSIGNED NOT NULL,
  `nisn` varchar(128) NOT NULL,
  `asal_sekolah` varchar(128) NOT NULL,
  `no_ijazah` varchar(128) NOT NULL,
  `nis` varchar(128) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_akademik`
--

INSERT INTO `data_akademik` (`id`, `nisn`, `asal_sekolah`, `no_ijazah`, `nis`, `user_id`) VALUES
(2, '0000875088', 'SMP Negeri 1 Tasikmalaya', 'DN-Ma/13 020025801', '151610287', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ortu`
--

CREATE TABLE `data_ortu` (
  `id` int(10) UNSIGNED NOT NULL,
  `kondisi_keluarga` text NOT NULL,
  `nama_wali` varchar(128) NOT NULL,
  `pekerjaan_wali` varchar(128) NOT NULL,
  `penghasilan_wali` varchar(128) NOT NULL,
  `nama_ibu` varchar(128) NOT NULL,
  `pekerjaan_ibu` varchar(128) NOT NULL,
  `penghasilan_ibu` varchar(128) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `pekerjaan_ayah` varchar(128) NOT NULL,
  `penghasilan_ayah` varchar(128) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_ortu`
--

INSERT INTO `data_ortu` (`id`, `kondisi_keluarga`, `nama_wali`, `pekerjaan_wali`, `penghasilan_wali`, `nama_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `nama_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `user_id`) VALUES
(1, 'Lengkap', '', '', '', 'Enur Nurjanah', 'Ibu Rumah Tangga', '< 3.000.000', 'Undang', 'Dagang', '3.000.000 - 5.000.000', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(10) UNSIGNED NOT NULL,
  `kartu_nisn` varchar(128) NOT NULL,
  `rapor` varchar(128) NOT NULL,
  `ijazah` varchar(128) NOT NULL,
  `kk` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_seleksi`
--

CREATE TABLE `hasil_seleksi` (
  `id` int(10) UNSIGNED NOT NULL,
  `hasil` varchar(128) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `registrasi_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas_diri`
--

CREATE TABLE `identitas_diri` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tgl_lahir` datetime DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `anak_ke` varchar(3) NOT NULL,
  `jml_anak` varchar(3) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `identitas_diri`
--

INSERT INTO `identitas_diri` (`id`, `user_id`, `nama`, `no_kk`, `nik`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `anak_ke`, `jml_anak`, `agama`, `alamat`) VALUES
(5, 1, 'Muhamad arsaludin', '3206321864600008', '3206321864600012', 'Tasikmalaya', '2000-06-14 00:00:00', 'Laki-laki', '1', '3', 'Islam', 'Nusawangi, Cisayong, Kab. Tasikmalaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jalur_registrasi`
--

CREATE TABLE `jalur_registrasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_jalur` varchar(128) NOT NULL,
  `deskripsi` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jalur_registrasi`
--

INSERT INTO `jalur_registrasi` (`id`, `nama_jalur`, `deskripsi`) VALUES
(1, 'Akademik', NULL),
(2, 'Prestasi', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(4) NOT NULL,
  `nama_jurusan` varchar(128) NOT NULL,
  `deskripsi` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `kode`, `nama_jurusan`, `deskripsi`) VALUES
(1, 'RPL', 'Rekayasa Perangkat Lunak', NULL),
(2, 'TKJ', 'Teknik Komputer dan Jaringan', NULL),
(3, 'TSM', 'Teknik Sepeda Motor', NULL),
(4, 'AP', 'Administrasi Perkantoran', NULL),
(5, 'AK', 'Akuntansi', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1636265558, 1),
(2, '2021-10-31-142122', 'App\\Database\\Migrations\\CreateRoles', 'default', 'App', 1636265565, 2),
(3, '2021-11-01-002600', 'App\\Database\\Migrations\\CreateIdentitasDiri', 'default', 'App', 1636265633, 3),
(4, '2021-11-01-012427', 'App\\Database\\Migrations\\CreatePrestasi', 'default', 'App', 1636265633, 3),
(5, '2021-11-01-015146', 'App\\Database\\Migrations\\CreateNilai', 'default', 'App', 1636265633, 3),
(6, '2021-11-01-020130', 'App\\Database\\Migrations\\CreateDataAkademik', 'default', 'App', 1636265633, 3),
(7, '2021-11-01-020747', 'App\\Database\\Migrations\\CreateDataOrtu', 'default', 'App', 1636265633, 3),
(8, '2021-11-01-021605', 'App\\Database\\Migrations\\CreateDokumen', 'default', 'App', 1636265633, 3),
(9, '2021-11-01-022127', 'App\\Database\\Migrations\\CreateJalurRegistrasi', 'default', 'App', 1636265633, 3),
(10, '2021-11-01-022540', 'App\\Database\\Migrations\\CreateRegistrasi', 'default', 'App', 1636265633, 3),
(11, '2021-11-01-023417', 'App\\Database\\Migrations\\CreateHasilSeleksi', 'default', 'App', 1636265633, 3),
(12, '2021-11-13-044408', 'App\\Database\\Migrations\\CreateJurusan', 'default', 'App', 1636778908, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(10) UNSIGNED NOT NULL,
  `b_sunda` int(3) UNSIGNED NOT NULL,
  `b_inggris` int(3) UNSIGNED NOT NULL,
  `pjok` int(3) UNSIGNED NOT NULL,
  `ips` int(3) UNSIGNED NOT NULL,
  `ipa` int(3) UNSIGNED NOT NULL,
  `matematika` int(3) UNSIGNED NOT NULL,
  `b_indo` int(3) UNSIGNED NOT NULL,
  `ppkn` int(3) UNSIGNED NOT NULL,
  `pai` int(3) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_prestasi` varchar(128) NOT NULL,
  `peringkat` varchar(3) NOT NULL,
  `tingkat` varchar(128) NOT NULL,
  `penyelenggara` varchar(128) NOT NULL,
  `tahun` year(4) NOT NULL,
  `file_sertifikat` varchar(128) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tahun_id` int(11) NOT NULL,
  `nomor_registrasi` varchar(20) NOT NULL,
  `status` enum('Diterima','Ditolak','Pending') NOT NULL DEFAULT 'Pending',
  `jalur_id` int(10) UNSIGNED NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id`, `user_id`, `tahun_id`, `nomor_registrasi`, `status`, `jalur_id`, `jurusan_id`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 'REG-RPL-20163754', 'Pending', 1, 1, '2021-12-05 03:07:05', '2021-12-05 03:07:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id`, `tahun`, `active`, `start_date`, `end_date`) VALUES
(1, 2021, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.png',
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `user_image`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'muhamadarsaludin71@gmail.com', 'arsaludin', '$2y$10$3FJ94OnJYVz25xMR8gQodeinKJcF81HAB2TX4PHc.DeDCeTo6/dU2', 'default.png', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-11-07 01:46:21', '2021-11-21 03:05:15', NULL),
(7, 'muhamadarsal71@gmail.com', 'arsal71', '$2y$10$yLo3KeUjSJNjoTnWHtuAvur77JSgHecQ41vAMZYG3Kwnar6kCclyC', 'default.png', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-11-21 00:30:15', '2021-11-21 00:30:15', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `data_akademik`
--
ALTER TABLE `data_akademik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hasil_seleksi_registrasi_id_foreign` (`registrasi_id`);

--
-- Indeks untuk tabel `identitas_diri`
--
ALTER TABLE `identitas_diri`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `jalur_registrasi`
--
ALTER TABLE `jalur_registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prestasi_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jalur_id` (`jalur_id`),
  ADD KEY `tahun_id` (`tahun_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `jurusan_id` (`jurusan_id`);

--
-- Indeks untuk tabel `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_akademik`
--
ALTER TABLE `data_akademik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_ortu`
--
ALTER TABLE `data_ortu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `identitas_diri`
--
ALTER TABLE `identitas_diri`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jalur_registrasi`
--
ALTER TABLE `jalur_registrasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_akademik`
--
ALTER TABLE `data_akademik`
  ADD CONSTRAINT `data_akademik_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD CONSTRAINT `data_ortu_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `dokumen_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  ADD CONSTRAINT `hasil_seleksi_registrasi_id_foreign` FOREIGN KEY (`registrasi_id`) REFERENCES `registrasi` (`id`);

--
-- Ketidakleluasaan untuk tabel `identitas_diri`
--
ALTER TABLE `identitas_diri`
  ADD CONSTRAINT `identitas_diri_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `prestasi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD CONSTRAINT `registrasi_jalur_id_foreign` FOREIGN KEY (`jalur_id`) REFERENCES `jalur_registrasi` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
