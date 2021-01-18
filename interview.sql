-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2021 pada 03.52
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indojaya_pancing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acara`
--

CREATE TABLE `acara` (
  `id` bigint(20) NOT NULL,
  `corp` varchar(30) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `nama_event` varchar(50) NOT NULL,
  `penyelenggara` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `ketentuan` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `jam` varchar(50) NOT NULL,
  `file` varchar(300) NOT NULL,
  `harga` varchar(191) DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `block_line_fabrikasi`
--

CREATE TABLE `block_line_fabrikasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_pabrik` int(11) NOT NULL,
  `nama_pabrik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blok` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog_web`
--

CREATE TABLE `blog_web` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_blog` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `brand`
--

CREATE TABLE `brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suplier` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `brand`
--

INSERT INTO `brand` (`id`, `nomor`, `suplier`, `name`, `desc`, `created_at`, `updated_at`) VALUES
(23, 'B12804085SU', 'PT Persada Anugerah', 'ASUS', 'Brand Komputer', '2020-12-10 00:59:47', '2020-12-10 00:59:47'),
(24, 'B28852191SU', 'PT Persada Anugerah', 'SONY', 'merek elektronik', '2020-12-10 01:00:31', '2020-12-10 01:00:31'),
(25, 'B49712142SU', 'PT Persada Anugerah', 'HUWAWEI', 'merek elektronik', '2020-12-10 01:02:37', '2020-12-10 01:02:37'),
(29, 'B67749950SU', 'PT Persada Anugerah', 'APPLE', 'laptop macbook', '2021-01-06 23:38:11', '2021-01-06 23:38:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `brand_cat`
--

CREATE TABLE `brand_cat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `brand_cat`
--

INSERT INTO `brand_cat` (`id`, `nama_kategori`, `kode_brand`, `link`, `status`, `avatar`, `created_at`, `updated_at`) VALUES
(1, '', 'B12804085SU', 'null', 'aktif', 'asus.png', '2021-01-17 07:46:37', '2021-01-17 07:46:37'),
(2, '', 'B67749950SU', 'null', 'aktif', 'apple.jpg', '2021-01-17 07:47:42', '2021-01-17 07:47:42'),
(3, '', 'B49712142SU', 'null', 'aktif', 'huawei.jpg', '2021-01-17 07:48:11', '2021-01-17 07:48:11'),
(4, '', 'B28852191SU', 'null', 'aktif', 'sony.jpg', '2021-01-17 07:49:05', '2021-01-17 07:49:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `brand_suplai`
--

CREATE TABLE `brand_suplai` (
  `id` int(11) NOT NULL,
  `suplai_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `brand_suplai`
--

INSERT INTO `brand_suplai` (`id`, `suplai_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(36, 1052, 24, '2020-12-10 01:05:30', '2020-12-10 08:05:30'),
(37, 1052, 25, '2020-12-10 01:07:21', '2020-12-10 08:07:21'),
(39, 1048, 23, '2020-12-15 22:07:07', '2020-12-16 05:07:07'),
(40, 1048, 24, '2021-01-05 02:15:54', '2021-01-05 09:15:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `company_profile`
--

CREATE TABLE `company_profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_company` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telp_company` int(11) NOT NULL,
  `nomor_hp_company` int(11) NOT NULL,
  `fax_company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `company_profile`
--

INSERT INTO `company_profile` (`id`, `kode_company`, `nama_company`, `jenis_company`, `alamat_company`, `nomor_telp_company`, `nomor_hp_company`, `fax_company`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Ex-001-2020-12-19', 'PT Ekspres Indonesia Persero', 'Tekhnologi', 'Jl.Tebet Barat Raya No.40 Jakarta Selatan', 812281, 217217, '#sa2919', 'Perusahaan bergerak pada bidang teknologi', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `create_karyawan`
--

CREATE TABLE `create_karyawan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_karyawan` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_departement` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_karyawan` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `create_karyawan`
--

INSERT INTO `create_karyawan` (`id`, `id_karyawan`, `id_departement`, `nama_karyawan`, `jabatan`, `email`, `jenis_kelamin`, `agama`, `alamat`, `akses`, `created_at`, `updated_at`) VALUES
(1, '202010101100002', '101011', 'Junaidi', 'Head Warehouse', 'junaidi@adhikarya@gmail.com', 'Laki-Laki', 'Islam', 'Jakarta', 'warehouse,inventory,data', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@multi-auth.test', NULL, '$2y$10$Y4kh5LNRnCkTtyv7g2c0COL/FinjrJ4yFlUPL83zGAibq8MzjjrA.', NULL, '2021-01-08 05:42:02', '2021-01-08 05:42:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daerah_perngiriman`
--

CREATE TABLE `daerah_perngiriman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_daerah` int(11) NOT NULL,
  `nama_negara` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_daerah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kawasan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif_pengiriman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat_minimum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_perusahaan`
--

CREATE TABLE `data_perusahaan` (
  `id` int(11) NOT NULL,
  `nama_customer` varchar(101) NOT NULL,
  `nama_perusahaan` varchar(101) NOT NULL,
  `alamat_perusahaan` varchar(101) NOT NULL,
  `telepon` varchar(101) NOT NULL,
  `fax` varchar(101) NOT NULL,
  `jenis_perusahaan` varchar(101) NOT NULL,
  `nama_npwp` varchar(101) NOT NULL,
  `no_npwp` varchar(101) NOT NULL,
  `alamat_npwp` varchar(101) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `demo_cities`
--

CREATE TABLE `demo_cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `state_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `demo_cities`
--

INSERT INTO `demo_cities` (`id`, `state_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'asus', NULL, NULL),
(2, 1, 'sony', NULL, NULL),
(3, 2, 'iphone ', NULL, NULL),
(4, 2, 'iphone 3', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `demo_state`
--

CREATE TABLE `demo_state` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `demo_state`
--

INSERT INTO `demo_state` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'android', NULL, NULL),
(2, 'ios', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `departement_karyawan`
--

CREATE TABLE `departement_karyawan` (
  `id` bigint(20) NOT NULL,
  `id_departement` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_departement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `departement_karyawan`
--

INSERT INTO `departement_karyawan` (`id`, `id_departement`, `nama_departement`, `status`, `catatan`, `created_at`, `updated_at`) VALUES
(27, '7001', 'Management', 'aktif', 'Management', '2020-12-25 03:15:48', '2020-12-25 03:15:48'),
(28, '7002', 'Finance', 'aktif', 'Finance', '2020-12-25 03:46:01', '2020-12-25 03:46:01'),
(29, '7003', 'HRD', 'aktif', 'HRD', '2020-12-25 03:48:44', '2020-12-25 03:48:44'),
(30, '7004', 'Production', 'aktif', 'Production', '2020-12-25 03:51:10', '2020-12-25 03:51:10'),
(31, '7005', 'Logistic', 'aktif', 'Logistic', '2020-12-25 04:03:31', '2020-12-25 04:03:31'),
(32, '7006', 'Compliance', 'aktif', 'Compliance', '2020-12-25 04:07:28', '2020-12-25 04:07:28'),
(33, '7007', 'Marketing', 'aktif', 'Marketing', '2020-12-25 04:09:07', '2020-12-25 04:09:07'),
(34, '7008', 'R&D', 'aktif', 'R&D', '2020-12-25 04:10:11', '2020-12-25 04:10:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `discount_special`
--

CREATE TABLE `discount_special` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_event` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `corp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_event` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_admin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyelenggara` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketentuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `id_event`, `corp`, `nama_event`, `nama_admin`, `kategori`, `penyelenggara`, `ketentuan`, `description`, `tanggal`, `jam`, `avatar`, `harga`, `status`, `header`, `created_at`, `updated_at`) VALUES
(12, 'E64182020', 'PT Adhi Karya Group', 'Olahraga Pagi Bersama || Semua Divisi', 'Rifky Handri', 'Olahraga', 'PT Adhi Karya Group', 'Ketentuan :Wajib Masker', 'Senam pagi rutin setiap hari senin semua divisi, di pabrik A , karyawan wajb hadir dan di pastikan sehat , menangkan hadiah marchendise gratis di akhir acara ,tidak boleh terlambat ya oke... :)', '2020-11-14', '07:20', 'olahraga.jpg', NULL, 'wajib', 0, '2020-11-12 20:14:43', '2020-11-12 20:14:43'),
(13, 'E63002020', 'PT Adhi Karya Group', 'Maulid Nabi Muhammad SAW', 'Saiful', 'Agama', 'Nurul Mustofa', 'Wajib Masker', 'Maulid Nabi Muhammad SAW di halaman Pabrik PT adhi karya Grup , akan di hadiri oleh Ustad Abdul Somad (UAS) dan para ulama yang lain , acara ini tidak di pungut biaya atau Gratis.', '2020-11-14', '19:30', 'maulid.jpg', '', 'tidak_wajib', 0, '2020-11-12 20:49:48', '2020-11-12 20:49:49'),
(15, 'E11822020', 'PT Adhi Karya Group', 'Belajar Management Bisnis bersama Indosat', 'Margareth', 'Training', 'Indosat', 'Wajib Membawa Laptop', 'Indosat Oreedo membuka kesempatan pada generasi muda untuk bersemangat dalam mencapai cita-cita , dengan adanya event ini,diharapkan para karyawan bisa menambah pengetahuan di bidang Management bisnis , Acara ini di laksanakan pada tanggal 20/11/2020 di Gedung Indosat Oreedo , Jl.Jendral Sudiraman , kav.37 gedung Indosat Oreedo lantai 23.', '2020-11-20', '14:30', 'indosat.png', '70000', 'tidak_wajib', 0, '2020-11-13 03:38:56', '2020-11-13 03:38:56'),
(16, 'E91232020', 'PT Adhi Karya Group', 'Lari Pagi Bersama Indihome', 'rifky', 'Olahraga', 'Indihome', 'Wajib Menggunakan Masker', 'Olahraga wajib bersama indihome, bangun karya bersama indihome', '2020-12-20', '06:30', 'bg-event.jpg', NULL, 'tidak_wajib', NULL, '2020-12-17 10:20:58', '2020-12-17 10:20:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_daftar`
--

CREATE TABLE `event_daftar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_event` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_event` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_karyawan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pembayaran` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_karyawan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_pembayaran` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_pembayaran` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pembayaran` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_event` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_bank` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_bank` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komentar` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `event_daftar`
--

INSERT INTO `event_daftar` (`id`, `id_event`, `nama_event`, `id_karyawan`, `id_pembayaran`, `nama_karyawan`, `jam_pembayaran`, `tanggal_pembayaran`, `status_pembayaran`, `status_event`, `harga`, `nama_bank`, `id_bank`, `komentar`, `created_at`, `updated_at`) VALUES
(3, 'E64182020', 'Olahraga Pagi Bersama || Semua Divisi', '35', 'E2020E6418202035FREE', 'abdul', NULL, NULL, 'Terbayar', NULL, NULL, NULL, NULL, NULL, '2020-11-13 02:56:54', '2020-11-13 02:56:54'),
(4, 'E64182020', 'Olahraga Pagi Bersama || Semua Divisi', '34', 'E2020E6418202034FREE', 'rifky', NULL, NULL, 'Terbayar', NULL, NULL, NULL, NULL, NULL, '2020-11-15 01:21:22', '2020-11-15 01:21:22'),
(5, '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-23 05:17:46', '2020-12-23 05:17:46'),
(6, '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-23 05:17:54', '2020-12-23 05:17:54'),
(7, '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-23 05:19:31', '2020-12-23 05:19:31'),
(8, '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-23 05:20:28', '2020-12-23 05:20:28'),
(9, '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-23 05:21:06', '2020-12-23 05:21:06'),
(10, '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-23 05:23:23', '2020-12-23 05:23:23'),
(11, '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-23 05:23:23', '2020-12-23 05:23:23'),
(12, '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-23 05:23:29', '2020-12-23 05:23:29'),
(13, 'E91232020', 'Lari Pagi Bersama Indihome', '34', 'E2020E9123202034FREE', 'rifky', NULL, NULL, 'Terbayar', NULL, NULL, NULL, NULL, NULL, '2021-01-04 20:30:07', '2021-01-04 20:30:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `izin_karyawan`
--

CREATE TABLE `izin_karyawan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_izin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dari_jam` time DEFAULT NULL,
  `sampai_jam` time DEFAULT NULL,
  `tanggal` date NOT NULL,
  `status_atasan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_hr` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_security` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_kembali` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_kembalijam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_kembalitanggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `izin_karyawan`
--

INSERT INTO `izin_karyawan` (`id`, `nomor_izin`, `id_karyawan`, `nama_karyawan`, `alasan`, `dari_jam`, `sampai_jam`, `tanggal`, `status_atasan`, `status_hr`, `status_security`, `status_kembali`, `status_kembalijam`, `status_kembalitanggal`, `created_at`, `updated_at`) VALUES
(10, 'IZ0012020', 'EXP-00000/XII/2020', 'rifky', 'Bertemu Dengan Client PT Indojaya Pancing', '10:30:00', '14:30:00', '2020-12-21', 'diterima', 'diterima', 'keluar', '10:06', NULL, NULL, '2020-12-20 20:30:10', '2021-01-04 20:06:19'),
(11, 'IZ0112020', 'EXP-00001/XII/2020', 'Agil Satria', 'Izin Pulang karna sakit perut', '12:58:00', NULL, '2020-12-21', 'ditolak', NULL, NULL, NULL, NULL, NULL, '2020-12-20 22:58:44', '2020-12-20 23:12:23'),
(12, 'IZ0122021', 'EXP-00001/XII/2020', 'Agil Satria', 'Sakit gigi', '10:00:00', '16:00:00', '2021-01-05', 'ditolak', NULL, NULL, NULL, NULL, NULL, '2021-01-04 19:56:39', '2021-01-06 18:57:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `kode_company` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_departemen` int(11) NOT NULL,
  `kode_karyawan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_karyawan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telp` int(20) NOT NULL,
  `nomor_hp` int(20) NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `users_id`, `kode_company`, `kode_departemen`, `kode_karyawan`, `nama_karyawan`, `jabatan`, `jenis_kelamin`, `tanggal_lahir`, `email`, `nomor_telp`, `nomor_hp`, `agama`, `alamat`, `avatar`, `created_at`, `updated_at`) VALUES
(342, 1, 'Ex-001-2020-12-19', 7003, 'EXP-00001/I/2021', 'Agil Satria', 'HRD', 'L', '1998-03-10', 'agil_satria@ekspress.com', 2182818, 1818281, '', 'Jakarta', NULL, '2021-01-06 19:25:35', '2021-01-06 19:25:35'),
(343, 2, 'Ex-001-2020-12-19', 7002, 'EXP-00002/I/2021', 'Mayang safitri', 'Accounting', 'L', '1996-02-07', 'mayang.safitri@ekspress.com', 21912929, 81318812, '', 'Jakarta', NULL, '2021-01-06 19:34:54', '2021-01-06 19:34:54'),
(344, 3, 'Ex-001-2020-12-19', 7001, 'EXP-00003/I/2021', 'Muhammad Fajar Nugroho', 'SECURITY', 'L', '1997-03-07', 'mfajar@gmail.com', 21929191, 81821812, '', 'Jakarta', NULL, '2021-01-06 19:53:17', '2021-01-06 19:53:17'),
(345, 4, 'Ex-001-2020-12-19', 7004, 'EXP-00004/I/2021', 'ELMI ROSE', 'INVENTARIS', 'L', '1989-03-08', 'elmirose@ekspress.com', 218281812, 821812812, '', 'Jakarta', NULL, '2021-01-07 00:49:46', '2021-01-07 00:49:46'),
(346, 5, 'Ex-001-2020-12-19', 7004, 'EXP-00005/I/2021', 'aditya sudrajat', 'PURCHASING', 'L', '1998-02-14', 'adityasudrajat@gmail.com', 210201000, 821812128, '', 'Sukabumi', NULL, '2021-01-13 19:40:33', '2021-01-13 19:40:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategory_product`
--

CREATE TABLE `kategory_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_kategory` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `master_kategory` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_kategory` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_kategory` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategory_product`
--

INSERT INTO `kategory_product` (`id`, `code_kategory`, `master_kategory`, `sub_kategory`, `small_kategory`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'KTG0012020', 'Handphone', 'Android', 'Tablet', 'Kategori Handphone A', NULL, NULL),
(2, 'KTG001202001', 'Laptop', 'Mac OS', 'notebook', 'Laptop notebook Mac ', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumens`
--

CREATE TABLE `konsumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kontent` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_kontent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `id_admin` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id`, `id_kontent`, `judul_kontent`, `konten`, `active`, `id_admin`, `created_at`, `updated_at`) VALUES
(15, 'KNTN79530610', 'Cara Menambahkan Data', '<p>MANTS</p>', 1, 0, '2020-12-15 01:02:14', '2020-12-15 01:02:14'),
(16, 'KNTN84381162', 'Buat anak', '<p>enak</p>', NULL, 0, '2020-12-15 01:09:51', '2020-12-15 01:09:51'),
(17, 'KNTN96306926', 'Buat mainan', '<p>Buat mainan dari kayu</p>', 1, 0, '2020-12-15 01:12:52', '2020-12-15 01:12:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kosinyasi_grup`
--

CREATE TABLE `kosinyasi_grup` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_kosinyasi_grup` int(11) NOT NULL,
  `nama_kosinyasi_grup` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_grup` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskon1` int(11) NOT NULL,
  `diskon2` int(11) NOT NULL,
  `manager` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp_office` int(11) NOT NULL,
  `telp_home` int(11) NOT NULL,
  `fax` int(11) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `alamat_jalan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_provinsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `memo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk_barang`
--

CREATE TABLE `masuk_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_cat` int(11) NOT NULL,
  `cat_sub` int(191) NOT NULL,
  `kode_item_grup` bigint(20) UNSIGNED NOT NULL,
  `kode_original` int(11) NOT NULL,
  `nama_produk` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_brand` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `masuk_barang`
--

INSERT INTO `masuk_barang` (`id`, `kode_cat`, `cat_sub`, `kode_item_grup`, `kode_original`, `nama_produk`, `nama_brand`, `created_at`, `updated_at`) VALUES
(14, 1031, 103, 7932866, 10321, 'ASUS ROG', 'ASUS', '2021-01-14 03:21:05', '2021-01-14 03:21:05'),
(15, 1032, 103, 3659157, 210201, 'MACBOOK', 'APPLE', '2021-01-14 04:15:13', '2021-01-14 04:15:13'),
(16, 1031, 103, 3259794, 10310, 'Sony Vaio', 'SONY', '2021-01-17 06:37:47', '2021-01-17 06:37:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk_barang_sub`
--

CREATE TABLE `masuk_barang_sub` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_cat` int(11) NOT NULL,
  `kode_item_grup` int(20) DEFAULT NULL,
  `original_barcode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_original` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_gudang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_suplier` int(50) NOT NULL,
  `mata_uang` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_perolehan` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `harga_reseller` int(11) NOT NULL,
  `MOQ` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `kode_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_admin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `online` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'proses',
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `masuk_barang_sub`
--

INSERT INTO `masuk_barang_sub` (`id`, `kode_cat`, `kode_item_grup`, `original_barcode`, `kode_original`, `kode_gudang`, `kode_suplier`, `mata_uang`, `harga_perolehan`, `harga_jual`, `harga_reseller`, `MOQ`, `qty`, `kode_produk`, `nama_produk`, `nama_brand`, `id_admin`, `online`, `avatar`, `created_at`, `updated_at`) VALUES
(50, 1031, 7932866, '10201', '12012', 'GDG8852KTG', 1048, 'rupiah', 6500000, 7500000, 7300000, 10, 20, '20210117781104', 'ASUS ROG G12/RAM/12GB/MEMORY/60GB/FREE/HADSEAT', 'ASUS', 'EXP-00000/XII/2020', 'aktif', 'asus-img2.jpg', '2021-01-17 06:18:23', '2021-01-17 10:16:51'),
(51, 1031, 7932866, '101001', '10321', 'GDG8852KTG', 1052, 'rupiah', 8000000, 9000000, 8500000, 10, 20, '20210117614104', 'ASUS ROG G11/RAM/12GB/MEMORY/60GB/FREE/HADSEAT', 'ASUS', 'EXP-00000/XII/2020', 'aktif', 'asus-img.jpg', '2021-01-17 06:24:03', '2021-01-17 07:14:13'),
(52, 1032, 3659157, '100111', '210201', 'GDG6562KTG', 1048, 'rupiah', 7200000, 12000000, 7500000, 10, 20, '20210117220104', 'MACBOOK AIR PRO 2020/RAM-12GB/SSD-1TB/FREE-HADSET', 'APPLE', 'EXP-00000/XII/2020', 'proses', '0', '2021-01-17 06:38:38', '2021-01-17 06:38:38'),
(53, 1032, 3659157, '210021', '10321', 'GDG8852KTG', 1048, 'rupiah', 6000000, 12000000, 11500000, 10, 20, '20210117478104', 'MACBOOK AIR PRO 2020/RAM-6GB/SSD-1TB/FREE-HADSET', 'APPLE', 'EXP-00000/XII/2020', 'aktif', 'retina.jpg', '2021-01-17 06:39:47', '2021-01-17 10:16:51'),
(54, 1031, 3259794, '1001111', '10321', 'GDG6562KTG', 1052, 'rupiah', 7200000, 8000000, 7200000, 10, 0, '20210117299104', 'Sony Vaio SVF14N13SG', 'SONY', 'EXP-00000/XII/2020', 'proses', '0', '2021-01-17 07:37:20', '2021-01-17 07:37:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_uang`
--

CREATE TABLE `mata_uang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2020_08_26_080816_create_data_brand_table', 2),
(8, '2020_08_26_082358_add_suplier_to_data_brand_table', 3),
(9, '2020_08_26_084350_add_desc_to_data_brand_table', 4),
(10, '2020_08_27_033722_create_warehouse_table', 5),
(11, '2020_08_30_043630_create_categories_table', 6),
(12, '2020_09_04_095823_create_customers_table', 7),
(13, '2020_09_18_070253_create_karyawan_table', 8),
(14, '2020_10_23_015511_create_stock_input_table', 9),
(15, '2020_10_23_053858_create_kategory_product_table', 10),
(16, '2020_10_24_122358_create_izin_karyawan_table', 11),
(17, '2020_11_08_153736_create_event_table', 12),
(18, '2020_11_13_074350_create_event_daftar_table', 13),
(19, '2020_11_22_124831_create_departement_karyawan_table', 14),
(20, '2020_11_23_022130_create_sub_departement_table', 15),
(21, '2020_11_23_031927_create_sm_departement_table', 16),
(22, '2020_12_02_084952_create_create_karyawan_table', 17),
(23, '2020_12_09_174145_create_warehouse_bigcat_table', 18),
(24, '2020_12_09_174650_create_warehouse_subcat_table', 19),
(25, '2020_12_09_175314_create_warehouse_smcat_table', 20),
(27, '2020_12_13_083911_create_product_table', 21),
(28, '2020_12_15_062623_create_kontent_table', 22),
(29, '2020_12_16_051136_create_product_big_cat_table', 23),
(31, '2020_12_16_051611_create_product_sm_cat_table', 24),
(32, '2020_12_16_052200_create_product_small_cat_table', 25),
(33, '2020_12_16_052955_create_daerah_perngiriman_table', 26),
(34, '2020_12_16_053848_create_kosinyasi_grup_table', 27),
(35, '2020_12_16_054910_create_proses_pabrik_table', 28),
(36, '2020_12_16_055414_create_block_line_fabrikasi_table', 29),
(37, '2020_12_16_071637_create_table_toko_table', 30),
(38, '2020_12_16_072951_create_table_toko_kosinyasi_table', 31),
(39, '2020_12_16_073526_create_toko_cabang_table', 32),
(40, '2020_12_16_073928_create_tambah_toko_online_table', 33),
(42, '2020_12_16_074356_create_tambah_pengelola_toko_table', 34),
(43, '2020_12_16_075102_create_tambah_pengelola_toko_cabang', 35),
(44, '2020_12_16_075458_create_pengaturan_jarak_tempuh_table', 36),
(45, '2020_12_16_075949_create_tarif_dc_reseller_table', 37),
(46, '2020_12_16_080234_create_tambah_voucher_table', 38),
(47, '2020_12_16_080906_create_discount_special_table', 39),
(48, '2020_12_16_081124_create_shipment_charge_rates', 40),
(49, '2020_12_16_161031_create_blog_web_table', 41),
(50, '2020_12_18_071147_create_karyawan_table', 42),
(54, '2020_12_19_060225_create_web_min_table', 43),
(55, '2020_12_19_070039_create_company_profile_table', 43),
(56, '2020_12_23_090105_create_state_city_tables', 44),
(57, '2020_12_23_094911_product_cat_sm', 45),
(59, '2020_12_27_094454_create_masuk_barang_table', 46),
(60, '2020_12_27_102258_create_masuk_barang_sub_table', 47),
(61, '2021_01_01_042158_create_web_names_table', 48),
(62, '2021_01_03_123614_create_system_user_table', 49),
(79, '2021_01_07_015024_create_mata_uang_table', 50),
(80, '2021_01_08_032021_create_brand_cat_table', 50),
(85, '2021_01_08_095838_table_users_konsumen_table', 51),
(86, '2021_01_08_101450_table_user_konsumen_table', 51),
(94, '2021_01_13_072026_create_purchase_order_table', 52),
(95, '2021_01_13_112921_create_purchase_order_line', 53),
(99, '2021_01_15_025044_create_m_status_table', 54);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_produk`
--

CREATE TABLE `m_produk` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `minimal_stock` int(11) NOT NULL,
  `buy` int(11) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `m_produk`
--

INSERT INTO `m_produk` (`id`, `supplier`, `nama`, `kode`, `stock`, `minimal_stock`, `buy`, `harga`, `created_at`, `updated_at`) VALUES
(2, 2, 'Produk kedua', '281781869', 57, 15, 10000, 25000, '2020-03-05 12:05:49', '2020-04-03 13:14:49'),
(3, 2, 'Test Product', '2140560417', 5, 10, 15000, 50000, '2020-03-08 08:54:07', '2020-04-03 12:56:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_status`
--

CREATE TABLE `m_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_supplier`
--

CREATE TABLE `m_supplier` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `m_supplier`
--

INSERT INTO `m_supplier` (`id`, `nama`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(2, 'PT. Sangcahaya.com', 'Bekasi', '123', '2020-03-03 07:52:15', '2020-03-04 09:46:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan_jarak_tempuh`
--

CREATE TABLE `pengaturan_jarak_tempuh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jarak_tempuh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif_disc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_buy` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_use` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_use` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_1st` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `nama`, `no_telp`, `alamat`, `email`, `created_at`, `updated_at`) VALUES
(1, 'PT.  Fadly.net', '123', 'Bekasi', 'fadly@sangcahaya.com', NULL, '2020-04-01 07:11:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_penjual` int(11) NOT NULL,
  `kode_product` int(11) NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_product` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penjual` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `kode_penjual`, `kode_product`, `kategori`, `nama_product`, `nama_penjual`, `price`, `qty`, `desc`, `active`, `created_at`, `updated_at`) VALUES
(4, 12000001, 12021001, 'Elektronik', 'Laptop Acer Aspire E-4', 'Laradocs', 20, 0, 'Jual Laptop Acer Aspire E-4 RAM 32GB', 1, '2020-12-13 02:41:39', '2020-12-14 23:15:52'),
(5, 12000001, 12021002, 'Elektronik', 'Laptop Asus ROG STRIX M-2', 'Laradocs', 20000000, 0, 'Jual Laptop Asus ROG STRIX M-2', 1, '2020-12-13 02:42:38', '2020-12-13 02:42:38'),
(6, 12000001, 12021003, 'Elektronik', 'Laptop Asus ROG STRIX M-1', 'Laradocs', 20000000, 0, 'Jual Laptop Asus ROG STRIX M-2', 1, '2020-12-13 02:42:48', '2020-12-13 02:42:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_cat_big`
--

CREATE TABLE `product_cat_big` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cat_big` int(20) NOT NULL,
  `nama_cat_big` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_cat_big`
--

INSERT INTO `product_cat_big` (`id`, `id_cat_big`, `nama_cat_big`, `created_at`, `updated_at`) VALUES
(58, 1, 'Elektronik', '2020-12-24 21:49:33', '2020-12-24 21:49:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_cat_sm`
--

CREATE TABLE `product_cat_sm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cat_big` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cat_sub` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cat_sm` int(191) NOT NULL,
  `nama_cat_sm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_cat_sm`
--

INSERT INTO `product_cat_sm` (`id`, `id_cat_big`, `id_cat_sub`, `id_cat_sm`, `nama_cat_sm`, `created_at`, `updated_at`) VALUES
(13, '1', '101', 1011, 'ANALOG', '2020-12-24 22:18:17', '2020-12-24 22:18:17'),
(14, '1', '101', 1012, 'DIGITAL', '2020-12-24 22:18:38', '2020-12-24 22:18:38'),
(15, '1', '101', 1013, 'SMART TV', '2020-12-24 22:18:54', '2020-12-24 22:18:54'),
(16, '1', '102', 1021, 'ANDROID', '2020-12-24 22:19:29', '2020-12-24 22:19:29'),
(17, '1', '102', 1022, 'IOS', '2020-12-24 22:19:46', '2020-12-24 22:19:46'),
(18, '1', '103', 1031, 'WINDOWS', '2020-12-24 22:20:20', '2020-12-24 22:20:20'),
(19, '1', '103', 1032, 'IOS', '2020-12-24 22:20:32', '2020-12-24 22:20:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_cat_sub`
--

CREATE TABLE `product_cat_sub` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cat_big` int(11) NOT NULL,
  `id_cat_sub` int(11) NOT NULL,
  `nama_cat_sub` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_cat_sub`
--

INSERT INTO `product_cat_sub` (`id`, `id_cat_big`, `id_cat_sub`, `nama_cat_sub`, `created_at`, `updated_at`) VALUES
(64, 1, 102, 'Handphone', '2020-12-24 22:07:30', '2020-12-24 22:07:30'),
(65, 1, 103, 'Laptop', '2020-12-24 22:07:50', '2020-12-24 22:07:50'),
(66, 1, 101, 'TV', '2020-12-24 22:16:50', '2020-12-24 22:16:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proses_pabrik`
--

CREATE TABLE `proses_pabrik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_proses` int(11) NOT NULL,
  `nama_proses` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi_proses` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_proses` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier` int(10) UNSIGNED NOT NULL,
  `status` int(10) UNSIGNED DEFAULT NULL,
  `document_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `purchase_order`
--

INSERT INTO `purchase_order` (`id`, `supplier`, `status`, `document_no`, `created_at`, `updated_at`) VALUES
(12, 1048, 2, 'PO-831375940', '2021-01-17 08:40:08', '2021-01-17 10:19:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `purchase_order_line`
--

CREATE TABLE `purchase_order_line` (
  `id` int(10) UNSIGNED NOT NULL,
  `purchase_order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buy` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `grand_total` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `purchase_order_line`
--

INSERT INTO `purchase_order_line` (`id`, `purchase_order`, `produk`, `buy`, `qty`, `grand_total`, `created_at`, `updated_at`) VALUES
(16, '12', '50', 6500000, 10, 65000000, NULL, '2021-01-17 10:16:51'),
(17, '12', '53', 6000000, 10, 60000000, NULL, '2021-01-17 10:16:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales`
--

CREATE TABLE `sales` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_struk` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_bayar` int(11) DEFAULT NULL,
  `kembalian` int(11) DEFAULT NULL,
  `grand_total` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sales`
--

INSERT INTO `sales` (`id`, `no_struk`, `jumlah_bayar`, `kembalian`, `grand_total`, `created_at`, `updated_at`) VALUES
(3, '116791006', NULL, NULL, 125000, '2020-03-26 19:40:34', '2020-03-26 19:40:34'),
(4, '1664518858', NULL, NULL, 25000, '2020-03-27 17:58:10', '2020-03-27 17:58:10'),
(5, '1049933564', NULL, NULL, 50000, '2020-03-27 17:58:44', '2020-03-27 17:58:44'),
(6, '695123184', NULL, NULL, 50000, '2020-03-27 18:12:09', '2020-03-27 18:12:09'),
(7, '1926713964', 1000000, 750000, 250000, '2020-03-27 18:17:34', '2020-03-27 18:17:34'),
(8, '109848323', 100000, 75000, 25000, '2020-03-27 18:17:51', '2020-03-27 18:17:51'),
(9, '553070650', 200000, 100000, 100000, '2020-03-27 18:20:52', '2020-03-27 18:20:52'),
(11, '1243237653', 200000, 50000, 150000, '2020-03-27 18:25:11', '2020-03-27 18:25:11'),
(12, '451311929', 25000, 0, 25000, '2020-04-01 16:20:53', '2020-04-01 16:20:53'),
(13, '1524062124', 100000, 0, 100000, '2020-04-01 16:21:09', '2020-04-01 16:21:09'),
(14, '973038432', 50000, 0, 50000, '2020-04-03 12:56:10', '2020-04-03 12:56:10'),
(15, '906452905', 100000, 0, 100000, '2020-04-03 12:56:28', '2020-04-03 12:56:28'),
(16, '1287352975', 50000, 0, 50000, '2020-04-03 12:56:36', '2020-04-03 12:56:36'),
(17, '1683239774', 100000, 50000, 50000, '2020-04-03 12:56:45', '2020-04-03 12:56:45'),
(18, '1814981006', 50000, 25000, 25000, '2020-04-03 13:14:49', '2020-04-03 13:14:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales_line`
--

CREATE TABLE `sales_line` (
  `id` int(10) UNSIGNED NOT NULL,
  `sales` int(10) UNSIGNED NOT NULL,
  `produk` int(10) UNSIGNED NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sales_line`
--

INSERT INTO `sales_line` (`id`, `sales`, `produk`, `harga`, `qty`, `grand_total`) VALUES
(5, 3, 2, 25000, 3, 75000),
(6, 3, 3, 50000, 1, 50000),
(7, 4, 2, 25000, 1, 25000),
(8, 5, 2, 25000, 2, 50000),
(9, 6, 2, 25000, 2, 50000),
(10, 7, 2, 25000, 10, 250000),
(11, 8, 2, 25000, 1, 25000),
(12, 9, 2, 25000, 2, 50000),
(13, 9, 3, 50000, 1, 50000),
(15, 11, 3, 50000, 3, 150000),
(16, 12, 2, 25000, 1, 25000),
(17, 13, 3, 50000, 2, 100000),
(18, 14, 2, 25000, 2, 50000),
(19, 15, 3, 50000, 2, 100000),
(20, 16, 3, 50000, 1, 50000),
(21, 17, 3, 50000, 1, 50000),
(22, 18, 2, 25000, 1, 25000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setup_aplikasi`
--

CREATE TABLE `setup_aplikasi` (
  `id` int(11) NOT NULL,
  `jumlah_hari_kerja` int(11) NOT NULL,
  `nama_aplikasi` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setup_aplikasi`
--

INSERT INTO `setup_aplikasi` (`id`, `jumlah_hari_kerja`, `nama_aplikasi`, `updated_at`, `created_at`) VALUES
(10, 28, 'SABUNERP', '2020-09-03 23:07:10', '2020-09-03 23:07:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shipment_charge_rates`
--

CREATE TABLE `shipment_charge_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `system_rate` int(11) NOT NULL,
  `purchase` int(11) NOT NULL,
  `for_reseller` int(11) NOT NULL,
  `margin` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sm_departement`
--

CREATE TABLE `sm_departement` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_departement` int(20) NOT NULL,
  `id_sub` int(20) NOT NULL,
  `id_sm` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sm` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_departement`
--

CREATE TABLE `sub_departement` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_departement` int(20) NOT NULL,
  `id_sub` int(20) NOT NULL,
  `nama_sub` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sub_departement`
--

INSERT INTO `sub_departement` (`id`, `id_departement`, `id_sub`, `nama_sub`, `status`, `created_at`, `updated_at`) VALUES
(36, 7003, 700301, 'HRD', '', '2021-01-06 19:49:00', '2021-01-06 19:49:00'),
(37, 7001, 700101, 'GENERAL AFFAIRS', '', '2021-01-06 19:49:41', '2021-01-06 19:49:41'),
(38, 7001, 700102, 'SECURITY', '', '2021-01-06 19:50:25', '2021-01-06 19:50:25'),
(39, 7002, 7002, 'ACCOUNTING', '', '2021-01-06 19:51:27', '2021-01-06 19:51:27'),
(40, 7004, 700401, 'INVENTARIS', '', '2021-01-07 00:46:30', '2021-01-07 00:46:30'),
(41, 7004, 700402, 'PURCHASING', '', '2021-01-13 01:15:34', '2021-01-13 01:15:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplai`
--

CREATE TABLE `suplai` (
  `id` int(11) NOT NULL,
  `code_suplier` int(191) NOT NULL,
  `nama` char(255) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `nomor_telepon` varchar(13) NOT NULL,
  `asal_negara` varchar(300) NOT NULL,
  `website` varchar(300) DEFAULT NULL,
  `currency` varchar(200) DEFAULT NULL,
  `manager` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `tel_office` varchar(200) DEFAULT NULL,
  `tel_home` varchar(200) DEFAULT NULL,
  `fax` varchar(200) DEFAULT NULL,
  `mobile` varchar(200) DEFAULT NULL,
  `street` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `catatan` varchar(200) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suplai`
--

INSERT INTO `suplai` (`id`, `code_suplier`, `nama`, `alamat`, `nomor_telepon`, `asal_negara`, `website`, `currency`, `manager`, `Email`, `tel_office`, `tel_home`, `fax`, `mobile`, `street`, `city`, `country`, `status`, `catatan`, `updated_at`, `created_at`) VALUES
(1048, 2021011419, 'PT Persada Anugerah', 'JL.Tebet Barat Raya No.40, Jakarta Selatan', '081213432824', 'Dalam Negeri', NULL, 'Rupiah', 'Bpk.Daud Muji', NULL, NULL, NULL, NULL, NULL, 'Tebet Barat', 'Jakarta', 'Indonesia', 'aktif', 'Suplier Kamera Handphone', '2020-10-30 15:01:45', '2020-10-21 08:15:27'),
(1052, 2021011417, 'PT Jasa Bangun', 'Jakarta', '0218882110', 'Dalam Negeri', NULL, 'Rupiah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, '2020-12-10 07:29:59', '2020-10-30 16:13:55'),
(1053, 2021011416, 'PT Akmal Jaya', 'Sukabumi Barat , Jawa Barat', '0219919221', 'Dalam Negeri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-10 07:28:53', '2020-12-10 07:28:53'),
(1056, 2021011418, 'PT Baja Ringan Sentosa', 'jjsnjan', '320120102', 'Luar Negeri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-14 04:26:17', '2021-01-14 04:26:17'),
(1057, 2021011420, 'PT Angin Malam', 'Korea Utara', '02818218', 'Luar Negeri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-14 04:37:36', '2021-01-14 04:37:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `system_user`
--

CREATE TABLE `system_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_toko`
--

CREATE TABLE `table_toko` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan_big` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengelola_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_office` int(11) NOT NULL,
  `tel_home` int(11) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `fax` int(11) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `alamat_provinsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_jalan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `memo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_toko_kosinyasi`
--

CREATE TABLE `table_toko_kosinyasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sistem_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_daerah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengelola_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambah_pengelola_toko_cabang`
--

CREATE TABLE `tambah_pengelola_toko_cabang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_perusahaan` int(11) NOT NULL,
  `kode_sistem` int(11) NOT NULL,
  `kode_user_sistem` int(11) NOT NULL,
  `kode_toko` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambah_pengelola_toko_kosinyasi`
--

CREATE TABLE `tambah_pengelola_toko_kosinyasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_perusahaan` int(11) NOT NULL,
  `kode_sistem` int(11) NOT NULL,
  `kode_user_sistem` int(11) NOT NULL,
  `kode_toko` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambah_toko_online`
--

CREATE TABLE `tambah_toko_online` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sistem_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengelola_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambah_voucher`
--

CREATE TABLE `tambah_voucher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `harga_voucher` int(11) NOT NULL,
  `nama_voucher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_voucher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_terbit_keluar` date NOT NULL,
  `tanggal_validitas` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tarif_dc_reseller`
--

CREATE TABLE `tarif_dc_reseller` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko_cabang`
--

CREATE TABLE `toko_cabang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sistem_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_daerah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengelola_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_company` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_karyawan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_company` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_departemen` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `id_company`, `users_id`, `id_karyawan`, `role`, `kode_company`, `kode_departemen`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', '', '', '', '', '', 'admin', 'admin@sangcahaya.com', NULL, '$2y$10$8hDLlK3mE5AWs7MUznklkeyS9A5ko0agl/yaWVh/1B3yQWN/xPPcS', NULL, '2020-02-29 20:44:48', '2020-02-29 20:44:48'),
(34, 'Ex-001-2020-12-19', '1000', 'EXP-00000/XII/2020', 'super_admin', 'Ex-001-2020-12-19', 'unlimited', 'rifky', 'rifky.febrian04@gmail.com', NULL, '$2y$10$quHqZ9o3xWS/Y0CkvHfMcOWkxHbKMat3gMvLh0kOjoxAdcRQvzg1q', '0XMuMxDoEMCwLwSyQfto2t5HSlNvsEyyyDJAzzS83I9PStgHu3nbAUCT8oei', '2020-10-22 18:37:31', '2020-10-22 18:37:31'),
(87, 'Ex-001-2020-12-19', '0001', 'EXP-00001/I/2021', 'HRD', 'Ex-001-2020-12-19', '7003', 'Agil Satria', 'agil_satria@ekspress.com', NULL, '$2y$10$BH3fDJrUoJXU9U5pC9I8R..Bk56AYmOqK3.xYzL9n5i1uyBqqz8ae', 'KUcKS8KxipwmvgqlzWCES5MyGh8oN69WPTQNIRduDBzg8QZ8ngbtIL3Xkq7g', '2021-01-06 19:25:35', '2021-01-06 19:25:35'),
(88, 'Ex-001-2020-12-19', '0002', 'EXP-00002/I/2021', 'ACCOUNTING', 'Ex-001-2020-12-19', '7002', 'Mayang safitri', 'mayang.safitri@ekspress.com', NULL, '$2y$10$B1k0hUrhAl2gFiiMk6inuOWvqIXBADYH6JqkGGtzPJY3sj3TW6yoe', 'QRNiIWJAXB296IjNmtXlvNsW4zbL27lLSvurna9wGCQRTiXY8bL0XDqKCjgw', '2021-01-06 19:34:54', '2021-01-06 19:34:54'),
(89, 'Ex-001-2020-12-19', '0003', 'EXP-00003/I/2021', 'SECURITY', 'Ex-001-2020-12-19', '7001', 'Muhammad Fajar Nugroho', 'mfajar@gmail.com', NULL, '$2y$10$sL8bICrz5CacfDsvGyEI5uPoBFuWrlziu17Nk33JoXcv0sCL4hZ6W', 'nhvywmlKsfZ8cWXYluBRP6huShZpJhej63V29XrEbZxQH68PaiiMSlRPfiN8', '2021-01-06 19:53:17', '2021-01-06 19:53:17'),
(90, 'Ex-001-2020-12-19', '0004', 'EXP-00004/I/2021', 'INVENTARIS', 'Ex-001-2020-12-19', '7004', 'ELMI ROSE', 'elmirose@ekspress.com', NULL, '$2y$10$wXv9nyz1n/WDKjcCljR7PeyjdHeJW7parQafQ9Uei4FRpDPYhSGB.', 'gpsEnYNJhAu6qIo2H4xX6EDsTxdUFWiICrHfNKvZ0c9HAUWnHyQrQ7947b8b', '2021-01-07 00:49:46', '2021-01-07 00:49:46'),
(91, 'Ex-001-2020-12-19', '0005', 'EXP-00005/I/2021', 'PURCHASING', 'Ex-001-2020-12-19', '7004', 'aditya sudrajat', 'adityasudrajat@gmail.com', NULL, '$2y$10$pILYFYZXUaHQxdqEABG4E.7cRN.nhPWrLntP4L4UybPc3qMM3Qr32', '8rtfHcAHoyw4NSENcqpY4O7tPdqvKmTYQzZP1Iuh9XBvWMrs5HsGUPeUM5Kt', '2021-01-13 19:40:33', '2021-01-13 19:40:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warehouse`
--

CREATE TABLE `warehouse` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_gudang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telepon` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `warehouse`
--

INSERT INTO `warehouse` (`id`, `nomor`, `nama_gudang`, `alamat`, `kategori`, `nomor_telepon`, `description`, `created_at`, `updated_at`) VALUES
(6, 'GDG8852KTG', 'Gudang Kawarasan 1', 'Jl.Solo Baru ,Jawa Tengah', 'Material', '081213432824', 'Gudang bahan mentah', NULL, NULL),
(7, 'GDG6562KTG', 'Gudang Adhi jaya', 'Jl.Kasengan , jawa timur', 'Product', '081213432824', 'Barang Jadi', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `warehouse_bigcat`
--

CREATE TABLE `warehouse_bigcat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_bigcat` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bigcat` varchar(121) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(121) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `warehouse_bigcat`
--

INSERT INTO `warehouse_bigcat` (`id`, `id_bigcat`, `nama_bigcat`, `status`, `created_at`, `updated_at`) VALUES
(1, '01', 'Material', 'aktif', NULL, NULL),
(2, '02', 'Barang Jadi', 'aktif', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `warehouse_smcat`
--

CREATE TABLE `warehouse_smcat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_bigcat` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_subcat` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_smcat` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_smcat` varchar(121) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(121) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `warehouse_smcat`
--

INSERT INTO `warehouse_smcat` (`id`, `id_bigcat`, `id_subcat`, `id_smcat`, `nama_smcat`, `status`, `created_at`, `updated_at`) VALUES
(1, '01', '011', '01101', 'Download', 'aktif', NULL, NULL),
(2, '01', '011', '01102', 'LAB QC', 'aktif', NULL, NULL),
(3, '01', '011', '01103', 'QUTY 3', 'aktif', NULL, NULL),
(4, '01', '011', '01104', 'Barang Jadi', 'aktif', NULL, NULL),
(5, '01', '011', '01105', 'Temprorary', 'aktif', NULL, NULL),
(6, '01', '012', '01201', 'A', 'aktif', NULL, NULL),
(7, '01', '012', '01202', 'B', 'aktif', NULL, NULL),
(8, '01', '012', '01203', 'C', 'aktif', NULL, NULL),
(9, '01', '012', '01204', 'D', 'aktif', NULL, NULL),
(10, '01', '012', '01205', 'E', 'aktif', NULL, NULL),
(11, '01', '012', '01206', 'F', 'aktif', NULL, NULL),
(12, '01', '012', '01207', 'G', 'aktif', NULL, NULL),
(13, '02', '022', '02201', '1-A', 'aktif', NULL, NULL),
(14, '02', '022', '02202', '1-B', 'aktif', NULL, NULL),
(15, '02', '022', '02203', '1-C', 'aktif', NULL, NULL),
(16, '02', '022', '02202', '1-D', 'aktif', NULL, NULL),
(17, '02', '023', '02301', 'B-1', 'aktif', NULL, NULL),
(18, '02', '023', '02302', 'B-2', 'aktif', NULL, NULL),
(19, '02', '023', '02303', 'B-3', 'aktif', NULL, NULL),
(20, '02', '023', '02304', 'B-4', 'aktif', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `warehouse_subcat`
--

CREATE TABLE `warehouse_subcat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_bigcat` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_subcat` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_subcat` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `warehouse_subcat`
--

INSERT INTO `warehouse_subcat` (`id`, `id_bigcat`, `id_subcat`, `nama_subcat`, `status`, `created_at`, `updated_at`) VALUES
(1, '01', '011', 'ruangan', 'aktif', NULL, NULL),
(2, '01', '012', 'rak', 'aktif', NULL, NULL),
(3, '02', '021', 'ruangan', 'tidak-aktif', NULL, NULL),
(4, '02', '022', 'lantai 1', 'aktif', NULL, NULL),
(5, '02', '023', 'basement', 'aktif', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_min`
--

CREATE TABLE `web_min` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_aplikasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_aplikasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_aplikasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telepon` int(11) NOT NULL,
  `nomor_whatsapp` int(11) NOT NULL,
  `nomor_hp` int(11) NOT NULL,
  `fax` int(11) NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_names`
--

CREATE TABLE `web_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_web` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_admin` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `web_names`
--

INSERT INTO `web_names` (`id`, `nama_web`, `nama_admin`, `status`, `created_at`, `updated_at`) VALUES
(1, 'BLCK', 'Rifky', 'active', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `block_line_fabrikasi`
--
ALTER TABLE `block_line_fabrikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `blog_web`
--
ALTER TABLE `blog_web`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_brand_nomor_unique` (`nomor`);

--
-- Indeks untuk tabel `brand_cat`
--
ALTER TABLE `brand_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `brand_suplai`
--
ALTER TABLE `brand_suplai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `create_karyawan`
--
ALTER TABLE `create_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `create_karyawan_id_karyawan_unique` (`id_karyawan`);

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indeks untuk tabel `daerah_perngiriman`
--
ALTER TABLE `daerah_perngiriman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_perusahaan`
--
ALTER TABLE `data_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `demo_cities`
--
ALTER TABLE `demo_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `demo_state`
--
ALTER TABLE `demo_state`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `departement_karyawan`
--
ALTER TABLE `departement_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `discount_special`
--
ALTER TABLE `discount_special`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_id_event_unique` (`id_event`),
  ADD UNIQUE KEY `event_nama_event_unique` (`nama_event`);

--
-- Indeks untuk tabel `event_daftar`
--
ALTER TABLE `event_daftar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_daftar_id_pembayaran_unique` (`id_pembayaran`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `izin_karyawan`
--
ALTER TABLE `izin_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategory_product`
--
ALTER TABLE `kategory_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategory_product_code_kategory_unique` (`code_kategory`);

--
-- Indeks untuk tabel `konsumens`
--
ALTER TABLE `konsumens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `konsumens_email_unique` (`email`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kosinyasi_grup`
--
ALTER TABLE `kosinyasi_grup`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `masuk_barang`
--
ALTER TABLE `masuk_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `masuk_barang_sub`
--
ALTER TABLE `masuk_barang_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mata_uang`
--
ALTER TABLE `mata_uang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_produk`
--
ALTER TABLE `m_produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_produk_supplier_foreign` (`supplier`);

--
-- Indeks untuk tabel `m_status`
--
ALTER TABLE `m_status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_supplier`
--
ALTER TABLE `m_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indeks untuk tabel `pengaturan_jarak_tempuh`
--
ALTER TABLE `pengaturan_jarak_tempuh`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_cat_big`
--
ALTER TABLE `product_cat_big`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_cat_sm`
--
ALTER TABLE `product_cat_sm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_cat_sub`
--
ALTER TABLE `product_cat_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proses_pabrik`
--
ALTER TABLE `proses_pabrik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `purchase_order_line`
--
ALTER TABLE `purchase_order_line`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sales_line`
--
ALTER TABLE `sales_line`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_line_sales_foreign` (`sales`),
  ADD KEY `sales_line_produk_foreign` (`produk`);

--
-- Indeks untuk tabel `setup_aplikasi`
--
ALTER TABLE `setup_aplikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shipment_charge_rates`
--
ALTER TABLE `shipment_charge_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sm_departement`
--
ALTER TABLE `sm_departement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sm_departement_id_sm_unique` (`id_sm`);

--
-- Indeks untuk tabel `sub_departement`
--
ALTER TABLE `sub_departement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_departement_id_sub_unique` (`id_sub`);

--
-- Indeks untuk tabel `suplai`
--
ALTER TABLE `suplai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `system_user`
--
ALTER TABLE `system_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_toko`
--
ALTER TABLE `table_toko`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_toko_kosinyasi`
--
ALTER TABLE `table_toko_kosinyasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tambah_pengelola_toko_cabang`
--
ALTER TABLE `tambah_pengelola_toko_cabang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tambah_pengelola_toko_kosinyasi`
--
ALTER TABLE `tambah_pengelola_toko_kosinyasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tambah_toko_online`
--
ALTER TABLE `tambah_toko_online`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tambah_voucher`
--
ALTER TABLE `tambah_voucher`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tarif_dc_reseller`
--
ALTER TABLE `tarif_dc_reseller`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `toko_cabang`
--
ALTER TABLE `toko_cabang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `warehouse_nomor_unique` (`nomor`),
  ADD UNIQUE KEY `warehouse_nama_gudang_unique` (`nama_gudang`);

--
-- Indeks untuk tabel `warehouse_bigcat`
--
ALTER TABLE `warehouse_bigcat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `warehouse_smcat`
--
ALTER TABLE `warehouse_smcat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `warehouse_subcat`
--
ALTER TABLE `warehouse_subcat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `web_min`
--
ALTER TABLE `web_min`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `web_names`
--
ALTER TABLE `web_names`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `acara`
--
ALTER TABLE `acara`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `block_line_fabrikasi`
--
ALTER TABLE `block_line_fabrikasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `blog_web`
--
ALTER TABLE `blog_web`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `brand`
--
ALTER TABLE `brand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `brand_cat`
--
ALTER TABLE `brand_cat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `brand_suplai`
--
ALTER TABLE `brand_suplai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `create_karyawan`
--
ALTER TABLE `create_karyawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `daerah_perngiriman`
--
ALTER TABLE `daerah_perngiriman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_perusahaan`
--
ALTER TABLE `data_perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `demo_cities`
--
ALTER TABLE `demo_cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `demo_state`
--
ALTER TABLE `demo_state`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `departement_karyawan`
--
ALTER TABLE `departement_karyawan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `discount_special`
--
ALTER TABLE `discount_special`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `event_daftar`
--
ALTER TABLE `event_daftar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `izin_karyawan`
--
ALTER TABLE `izin_karyawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=347;

--
-- AUTO_INCREMENT untuk tabel `kategory_product`
--
ALTER TABLE `kategory_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `konsumens`
--
ALTER TABLE `konsumens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `kosinyasi_grup`
--
ALTER TABLE `kosinyasi_grup`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `masuk_barang`
--
ALTER TABLE `masuk_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `masuk_barang_sub`
--
ALTER TABLE `masuk_barang_sub`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `mata_uang`
--
ALTER TABLE `mata_uang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT untuk tabel `m_produk`
--
ALTER TABLE `m_produk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `m_status`
--
ALTER TABLE `m_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_supplier`
--
ALTER TABLE `m_supplier`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengaturan_jarak_tempuh`
--
ALTER TABLE `pengaturan_jarak_tempuh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `product_cat_big`
--
ALTER TABLE `product_cat_big`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `product_cat_sm`
--
ALTER TABLE `product_cat_sm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `product_cat_sub`
--
ALTER TABLE `product_cat_sub`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `proses_pabrik`
--
ALTER TABLE `proses_pabrik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `purchase_order_line`
--
ALTER TABLE `purchase_order_line`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `sales_line`
--
ALTER TABLE `sales_line`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `setup_aplikasi`
--
ALTER TABLE `setup_aplikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `shipment_charge_rates`
--
ALTER TABLE `shipment_charge_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sm_departement`
--
ALTER TABLE `sm_departement`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sub_departement`
--
ALTER TABLE `sub_departement`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `suplai`
--
ALTER TABLE `suplai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1058;

--
-- AUTO_INCREMENT untuk tabel `system_user`
--
ALTER TABLE `system_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `table_toko`
--
ALTER TABLE `table_toko`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `table_toko_kosinyasi`
--
ALTER TABLE `table_toko_kosinyasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tambah_pengelola_toko_cabang`
--
ALTER TABLE `tambah_pengelola_toko_cabang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tambah_pengelola_toko_kosinyasi`
--
ALTER TABLE `tambah_pengelola_toko_kosinyasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tambah_toko_online`
--
ALTER TABLE `tambah_toko_online`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tambah_voucher`
--
ALTER TABLE `tambah_voucher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tarif_dc_reseller`
--
ALTER TABLE `tarif_dc_reseller`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `toko_cabang`
--
ALTER TABLE `toko_cabang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT untuk tabel `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `warehouse_bigcat`
--
ALTER TABLE `warehouse_bigcat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `warehouse_smcat`
--
ALTER TABLE `warehouse_smcat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `warehouse_subcat`
--
ALTER TABLE `warehouse_subcat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `web_min`
--
ALTER TABLE `web_min`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `web_names`
--
ALTER TABLE `web_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
