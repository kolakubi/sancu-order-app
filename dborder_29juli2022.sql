-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2022 at 08:31 AM
-- Server version: 10.3.35-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malmahsy_dborderapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamats`
--

CREATE TABLE `alamats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `propinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_propinsi` int(11) NOT NULL,
  `kota_kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kota_kabupaten` int(11) NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pos` int(11) NOT NULL,
  `utama` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alamats`
--

INSERT INTO `alamats` (`id`, `id_user`, `nama_lengkap`, `telepon`, `propinsi`, `id_propinsi`, `kota_kabupaten`, `id_kota_kabupaten`, `kecamatan`, `id_kecamatan`, `kelurahan`, `id_kelurahan`, `alamat_lengkap`, `detail`, `kode_pos`, `utama`, `created_at`, `updated_at`) VALUES
(1, 17, 'Yusup', '085221177874', 'Jawa Barat', 32, 'Kabupaten Bandung', 3204, 'Rancaekek', 3204110, 'Nanjungmekar', '3204110013', 'Griya permata raya RANCAEKEK, RT 6 / RW 14\r\nBlok B3  no. 21', 'patokan pos Rt 6', 40394, 1, NULL, NULL),
(2, 21, 'ADNAN', '081231155719', 'Jawa Timur', 35, 'Kota Surabaya', 3578, 'Pabean Cantian', 3578240, 'Bongkaran', '3578240001', 'Jl. Pengampon 2 no.22', 'ITC Mega Grosir', 60161, 1, NULL, NULL),
(3, 22, 'Sudarmadi', '085780282333', 'Jawa Barat', 32, 'Kota Bekasi', 3275, 'Bekasi Utara', 3275070, 'Harapan Jaya', '3275070001', 'komplek pertokoan Azwar, jln. Alexindo Rt 008 / 016', 'samping jne', 17124, 1, NULL, NULL),
(4, 25, 'Agung', '087738052331', 'Di Yogyakarta', 34, 'Kabupaten Sleman', 3404, 'Gamping', 3404050, 'Ambarketawang', '3404050002', 'gamping kidul rt 3. Rw 19. Ambarketawang', 'utara masjid al ikhlas', 55294, 1, NULL, NULL),
(5, 28, 'Muhtadi', '085695852023', 'Banten', 36, 'Kota Tangerang', 3671, 'Cipondoh', 3671020, 'Petir', '3671020016', 'jl KH Ahmad Dahlan RT 04 RW 04 no 64,gang Londoh petir', 'toko air biru  masuk -+150m', 15147, 1, NULL, NULL),
(6, 30, 'Iwan', '081390043310', 'Jawa Tengah', 33, 'Kabupaten Purbalingga', 3303, 'Padamara', 3303080, 'Bojanegara', '3303080006', 'Gudang Sancu\r\nJalan Selateri RT 02 RW 03 Bojanegara', NULL, 53372, 1, NULL, NULL),
(7, 31, 'M Syukur', '081318127849', 'Jawa Barat', 32, 'Kabupaten Bekasi', 3216, 'Cibitung', 3216070, 'Wanajaya', '3216070014', 'Pesona gading 1 blok J 2 no 8 RT 5 RW 15', NULL, 17520, 1, NULL, NULL),
(8, 35, 'Elang', '08999158986', 'Dki Jakarta', 31, 'Kota Jakarta Timur', 3172, 'Pulo Gadung', 3172090, 'Jatinegara Kaum', '3172090003', 'Jl. Raya bekasi km.18, gg remaja 3 rt 07/07 no 20B', 'rumah sancu', 13250, 1, NULL, NULL),
(9, 38, 'Zaki', '081268208785', 'Riau', 14, 'Kota Pekanbaru', 1471, 'Marpoyan Damai', 1471021, 'Tengkerang Barat', '1471021002', 'jln, tongkol gang sabar no 19, Rt 05, Rw 01', NULL, 28282, 1, NULL, NULL),
(10, 41, 'Dilli Juang', '082324774844', 'Jawa Tengah', 33, 'Kabupaten Banjarnegara', 3304, 'Banjarnegara', 3304060, 'Semarang', '3304060014', 'JLN. BAMBANG SUGENG KELURAHAN SEMARANG RT 002 RW 002', 'BELAKANG CAFE ETHNIC', 53411, 1, NULL, NULL),
(11, 42, 'Illa', '085885595165', 'Jawa Barat', 32, 'Kota Sukabumi', 3272, 'Warudoyong', 3272030, 'Dayeuhluhur', '3272030001', 'perum nirwana graha blok.g no.21 salaeurih RT / RW : 05/07', NULL, 43134, 1, NULL, NULL),
(12, 16, 'Ahmad', '085733565282', 'Jawa Timur', 35, 'Kabupaten Lamongan', 3524, 'Paciran', 3524250, 'Tunggul', '3524250003', 'Ngebrak RT.2 / RW.1 Tunggul', 'Maps : grosir sandal anak Lamongan', 62264, 1, NULL, NULL),
(13, 18, 'Surahmat', '085716534598', 'Jawa Barat', 32, 'Kabupaten Karawang', 3215, 'Klari', 3215040, 'Duren', '3215040011', 'jln kp duren RT 013/004', 'belakang notaris', 41371, 1, NULL, NULL),
(14, 26, 'Septin Lutfi haryanto', '081393014849', 'Jawa Tengah', 33, 'Kabupaten Banyumas', 3302, 'Purwokerto Barat', 3302720, 'Kedungwuluh', '3302720006', 'jl Sutoyo gang 1 no 9 Purwokerto', 'Belakang SD kedungwuluh 3', 53131, 1, NULL, NULL),
(15, 24, 'Rhiyant', '083830853885', 'Jawa Timur', 35, 'Kabupaten Sidoarjo', 3515, 'Krian', 3515170, 'Sedengan Mijen', '3515170002', 'Dusun Ngaglik rt 6 rw 2. Desa Sedengan mijen', NULL, 61262, 1, NULL, NULL),
(16, 27, 'M. Solichin', '085325083400', 'Jawa Tengah', 33, 'Kabupaten Kudus', 3319, 'Jati', 3319030, 'Ngembal Kulon', '3319030014', 'Jl Sukarno Hatta Gang Poncowati, Ds Ngembal Kulon Rt 3 Rw 4', 'Gang depan PO Haryanto', 59341, 1, NULL, NULL),
(17, 32, 'Juan', '085240680101', 'Sulawesi Utara', 71, 'Kota Manado', 7171, 'Sario', 7171020, 'Sario', '7171020007', 'Samsung Service Center Jl.Piere Tendean Boulevard Ruko Boulevard Square Blok A No.21-22', 'Depan Hotel Quality', 95114, 1, NULL, NULL),
(18, 23, 'Ayukk', '085715710038', 'Jawa Tengah', 33, 'Kabupaten Magelang', 3308, 'Secang', 3308170, 'Madiocondro', '3308170014', 'Sancu grosir magelang, kalikotes rt. 03/04', 'Sancu Grosir Magelang', 56195, 1, NULL, NULL),
(19, 15, 'Eko', '085770503309', 'Dki Jakarta', 31, 'Kota Jakarta Selatan', 3171, 'Pesanggrahan', 3171040, 'Ulujami', '3171040003', 'Jl. H. Dilun No.59 RT.06/07', NULL, 12250, 1, NULL, NULL),
(20, 29, 'Imam', '081280919644', 'Jawa Barat', 32, 'Kabupaten Bekasi', 3216, 'Cikarang Selatan', 3216023, 'Sukadami', '3216023003', 'Perum wahana Blok A14 No 20', 'Masjid Jamie Alfalah', 17530, 1, NULL, NULL),
(21, 34, 'M Suwandi', '081388063155', 'Banten', 36, 'Kota Serang', 3673, 'Cipocok Jaya', 3673030, 'Banjaragung', '3673030007', 'taman Banjar agung indah blok C5/4', NULL, 42122, 1, NULL, NULL),
(22, 36, 'Ramli', '081213115335', 'Jawa Barat', 32, 'Kota Sukabumi', 3272, 'Cikole', 3272050, 'Gunung Parang', '3272050001', 'Jl. Baledesa Gg. Rusa No. 10 RT. 01/07', NULL, 43111, 1, NULL, NULL),
(23, 39, 'Hotimah', '083872216658', 'Banten', 36, 'Kabupaten Tangerang', 3603, 'Sindang Jaya', 3603121, 'Wana Kerta', '3603121001', 'Toko Vania Sancu, Talaga Bestari, Kp. Sumur Rt. 005/005', 'Toko Sandal Sancu', 15561, 1, NULL, NULL),
(24, 40, 'Saiful', '081326857333', 'Jawa Tengah', 33, 'Kabupaten Batang', 3325, 'Limpung', 3325080, 'Donorejo', '3325080002', 'TOKO MORODADI\r\nDONOREJO RT 1/1', 'SEBELAH MASJID DONOREJO', 51271, 1, NULL, NULL),
(25, 43, 'Mal', '081233445566', 'Dki Jakarta', 31, 'Kota Jakarta Timur', 3172, 'Ciracas', 3172020, 'Kelapa Dua Wetan', '3172020002', 'Jala kelapa dua wetan III no 29', NULL, 13730, 1, NULL, NULL),
(26, 19, 'Arifin', '085885584459', 'Jawa Barat', 32, 'Kota Bogor', 3271, 'Tanah Sereal', 3271060, 'Mekarwangi', '3271060010', 'Jl. Kh. Ach Syahyani No.38, RT.01/RW.08', NULL, 16168, 1, NULL, NULL),
(27, 33, 'Wanti', '081312224369', 'Jawa Barat', 32, 'Kabupaten Purwakarta', 3214, 'Purwakarta', 3214100, 'Ciseureuh', '3214100013', 'Pesona Griya Asri Blok G4 no 19 ,Rt 06/11', NULL, 41118, 1, NULL, NULL),
(28, 37, 'Nada', '08991787875', 'Jawa Barat', 32, 'Kabupaten Subang', 3213, 'Kalijati', 3213080, 'Kalijati Timur', '3213080008', 'Kp. Sukamaju Rt. 17 Rw. 05', NULL, 41271, 1, NULL, NULL),
(29, 20, 'Agus', '081343906162', 'Jawa Tengah', 33, 'Kota Semarang', 3374, 'Mijen', 3374010, 'Kedungpani', '3374010010', 'Perumahan Graha Taman Bunga Blok A2 no.12AB,Bukit Semarang Baru (BSB)', NULL, 50211, 1, NULL, NULL),
(30, 44, 'firmansyah', '081233445566', 'Dki Jakarta', 31, 'Kota Jakarta Timur', 3172, 'Ciracas', 3172020, 'Kelapa Dua Wetan', '3172020002', 'jalan persahabatan VI no 3', 'pager putih motif bulat', 13730, 1, NULL, NULL),
(31, 46, 'Parno', '081288898129', 'Jawa Timur', 35, 'Kabupaten Kediri', 3506, 'Plemahan', 3506160, 'Bogokidul', '3506160002', 'Perum KCVRI No.13 Dusun Mulyoasri RT04 RW01', NULL, 64155, 1, NULL, NULL),
(32, 45, 'Nadzir', '6281390155234', 'Jawa Tengah', 33, 'Kabupaten Kebumen', 3305, 'Klirong', 3305050, 'Podoluhur', '3305050023', 'dusun bendungan rt 01 rw 05', 'utara mushola', 54381, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `id_produk` int(11) NOT NULL,
  `id_produk_detail` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `created_at`, `updated_at`, `id_produk`, `id_produk_detail`, `id_user`, `jumlah_produk`) VALUES
(29, '2022-07-25 02:42:24', '2022-07-25 02:42:24', 2139, '213921', 24, 48),
(30, '2022-07-25 02:42:24', '2022-07-25 02:42:24', 2139, '213932', 24, 40),
(78, '2022-07-25 03:20:14', '2022-07-25 03:20:14', 2139, '213924', 36, 14),
(83, '2022-07-25 03:36:52', '2022-07-25 03:36:52', 1925, '192521', 26, 2),
(84, '2022-07-25 03:36:52', '2022-07-25 03:36:52', 1925, '192528', 26, 1),
(103, '2022-07-26 01:53:07', '2022-07-26 01:53:07', 7121, '712138', 45, 2),
(104, '2022-07-26 01:53:07', '2022-07-26 01:53:07', 7121, '712140', 45, 2),
(105, '2022-07-26 01:53:07', '2022-07-26 01:53:07', 7121, '712143', 45, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama_category`, `created_at`, `updated_at`) VALUES
(1, 'Sancu', '2022-07-13 19:20:07', '2022-07-13 19:20:07'),
(2, 'Boncu', '2022-07-13 19:20:13', '2022-07-13 19:20:13'),
(3, 'Pretty', '2022-07-13 19:20:19', '2022-07-13 19:20:19'),
(4, 'Xtreme', '2022-07-13 19:20:24', '2022-07-13 19:20:24'),
(5, 'Pelengkap', '2022-07-13 19:20:30', '2022-07-13 19:20:30');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `nama`, `nilai`) VALUES
(1, 'server_host', 'https://dborderadmin.sancushop.com/'),
(2, 'client_host', 'https://dborder.sancushop.com/');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `potongan` int(11) NOT NULL,
  `masa_mulai` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `masa_aktif` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tipe` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `keterangan`, `potongan`, `masa_mulai`, `masa_aktif`, `tipe`, `created_at`, `updated_at`) VALUES
(1, 'TESTAPP', 'coba coupon', 1000, '2022-07-23 17:00:00', '2022-07-31 17:00:00', 'nominal', '2022-07-24 20:48:12', '2022-07-24 20:48:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kartu_stoks`
--

CREATE TABLE `kartu_stoks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_produk_detail` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT 0,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kartu_stoks`
--

INSERT INTO `kartu_stoks` (`id`, `id_produk_detail`, `status`, `jumlah`, `keterangan`, `saldo`, `created_at`, `updated_at`) VALUES
(1, '224521', 'in', 10, 'input produk awal', 10, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
(2, '224524', 'in', 20, 'input produk awal', 20, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
(3, '224528', 'in', 25, 'input produk awal', 25, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
(4, '224530', 'in', 10, 'input produk awal', 10, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
(5, '224532', 'in', 0, 'input produk awal', 0, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
(6, '224534', 'in', 0, 'input produk awal', 0, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
(7, '224536', 'in', 20, 'input produk awal', 20, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
(8, '224538', 'in', 20, 'input produk awal', 20, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
(9, '224540', 'in', 0, 'input produk awal', 0, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
(10, '224542', 'in', 0, 'input produk awal', 0, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
(11, '361921', 'in', 40, 'input produk awal', 40, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
(12, '361924', 'in', 20, 'input produk awal', 20, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
(13, '361928', 'in', 0, 'input produk awal', 0, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
(14, '361930', 'in', 16, 'input produk awal', 16, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
(15, '361932', 'in', 20, 'input produk awal', 20, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
(16, '361934', 'in', 25, 'input produk awal', 25, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
(17, '361936', 'in', 0, 'input produk awal', 0, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
(18, '361938', 'in', 0, 'input produk awal', 0, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
(19, '361940', 'in', 40, 'input produk awal', 40, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
(20, '361942', 'in', 0, 'input produk awal', 0, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
(21, '469121', 'in', 30, 'input produk awal', 30, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
(22, '469124', 'in', 0, 'input produk awal', 0, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
(23, '469128', 'in', 0, 'input produk awal', 0, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
(24, '469130', 'in', 0, 'input produk awal', 0, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
(25, '469132', 'in', 30, 'input produk awal', 30, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
(26, '469134', 'in', 20, 'input produk awal', 20, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
(27, '469136', 'in', 15, 'input produk awal', 15, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
(28, '469138', 'in', 0, 'input produk awal', 0, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
(29, '469140', 'in', 0, 'input produk awal', 0, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
(30, '469142', 'in', 0, 'input produk awal', 0, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
(31, '992221', 'in', 50, 'input produk awal', 50, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
(32, '992224', 'in', 10, 'input produk awal', 10, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
(33, '992228', 'in', 15, 'input produk awal', 15, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
(34, '992230', 'in', 15, 'input produk awal', 15, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
(35, '992232', 'in', 60, 'input produk awal', 60, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
(36, '992234', 'in', 25, 'input produk awal', 25, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
(37, '992236', 'in', 7, 'input produk awal', 7, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
(38, '992238', 'in', 11, 'input produk awal', 11, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
(39, '992240', 'in', 0, 'input produk awal', 0, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
(40, '992242', 'in', 0, 'input produk awal', 0, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
(41, '213921', 'in', 10, 'input produk awal', 10, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
(42, '213924', 'in', 20, 'input produk awal', 20, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
(43, '213928', 'in', 30, 'input produk awal', 30, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
(44, '213930', 'in', 0, 'input produk awal', 0, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
(45, '213932', 'in', 40, 'input produk awal', 40, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
(46, '213934', 'in', 0, 'input produk awal', 0, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
(47, '213936', 'in', 10, 'input produk awal', 10, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
(48, '213938', 'in', 20, 'input produk awal', 20, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
(49, '213940', 'in', 0, 'input produk awal', 0, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
(50, '213942', 'in', 0, 'input produk awal', 0, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
(51, '201521', 'in', 2, 'input produk awal', 2, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
(52, '201524', 'in', 40, 'input produk awal', 40, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
(53, '201528', 'in', 6, 'input produk awal', 6, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
(54, '201530', 'in', 7, 'input produk awal', 7, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
(55, '201532', 'in', 21, 'input produk awal', 21, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
(56, '201534', 'in', 10, 'input produk awal', 10, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
(57, '201536', 'in', 12, 'input produk awal', 12, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
(58, '201538', 'in', 0, 'input produk awal', 0, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
(59, '201540', 'in', 0, 'input produk awal', 0, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
(60, '201542', 'in', 0, 'input produk awal', 0, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
(61, '372621', 'in', 10, 'input produk awal', 10, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
(62, '372624', 'in', 25, 'input produk awal', 25, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
(63, '372628', 'in', 7, 'input produk awal', 7, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
(64, '372630', 'in', 6, 'input produk awal', 6, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
(65, '372632', 'in', 48, 'input produk awal', 48, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
(66, '372634', 'in', 31, 'input produk awal', 31, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
(67, '372636', 'in', 1, 'input produk awal', 1, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
(68, '372638', 'in', 0, 'input produk awal', 0, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
(69, '372640', 'in', 0, 'input produk awal', 0, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
(70, '372642', 'in', 0, 'input produk awal', 0, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
(71, '834321', 'in', 0, 'input produk awal', 0, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
(72, '834324', 'in', 0, 'input produk awal', 0, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
(73, '834328', 'in', 5, 'input produk awal', 5, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
(74, '834330', 'in', 0, 'input produk awal', 0, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
(75, '834332', 'in', 10, 'input produk awal', 10, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
(76, '834334', 'in', 20, 'input produk awal', 20, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
(77, '834336', 'in', 15, 'input produk awal', 15, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
(78, '834338', 'in', 0, 'input produk awal', 0, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
(79, '834340', 'in', 0, 'input produk awal', 0, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
(80, '834341', 'in', 0, 'input produk awal', 0, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
(81, '559621', 'in', 15, 'input produk awal', 15, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
(82, '559624', 'in', 20, 'input produk awal', 20, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
(83, '559628', 'in', 4, 'input produk awal', 4, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
(84, '559630', 'in', 8, 'input produk awal', 8, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
(85, '559632', 'in', 11, 'input produk awal', 11, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
(86, '559634', 'in', 5, 'input produk awal', 5, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
(87, '559636', 'in', 41, 'input produk awal', 41, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
(88, '559638', 'in', 0, 'input produk awal', 0, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
(89, '559640', 'in', 0, 'input produk awal', 0, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
(90, '559642', 'in', 0, 'input produk awal', 0, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
(91, '742021', 'in', 10, 'input produk awal', 10, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
(92, '742024', 'in', 22, 'input produk awal', 22, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
(93, '742028', 'in', 11, 'input produk awal', 11, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
(94, '742030', 'in', 0, 'input produk awal', 0, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
(95, '742032', 'in', 33, 'input produk awal', 33, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
(96, '742034', 'in', 44, 'input produk awal', 44, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
(97, '742036', 'in', 12, 'input produk awal', 12, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
(98, '742038', 'in', 0, 'input produk awal', 0, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
(99, '742040', 'in', 0, 'input produk awal', 0, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
(100, '742041', 'in', 0, 'input produk awal', 0, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
(101, '198334', 'in', 10, 'input produk awal', 10, '2022-07-18 20:30:04', '2022-07-18 20:30:04'),
(102, '198335', 'in', 15, 'input produk awal', 15, '2022-07-18 20:30:04', '2022-07-18 20:30:04'),
(103, '198336', 'in', 0, 'input produk awal', 0, '2022-07-18 20:30:04', '2022-07-18 20:30:04'),
(104, '198337', 'in', 0, 'input produk awal', 0, '2022-07-18 20:30:04', '2022-07-18 20:30:04'),
(105, '198338', 'in', 15, 'input produk awal', 15, '2022-07-18 20:30:04', '2022-07-18 20:30:04'),
(106, '198339', 'in', 20, 'input produk awal', 20, '2022-07-18 20:30:04', '2022-07-18 20:30:04'),
(107, '198340', 'in', 15, 'input produk awal', 15, '2022-07-18 20:30:04', '2022-07-18 20:30:04'),
(108, '538134', 'in', 10, 'input produk awal', 10, '2022-07-18 20:31:06', '2022-07-18 20:31:06'),
(109, '538135', 'in', 10, 'input produk awal', 10, '2022-07-18 20:31:06', '2022-07-18 20:31:06'),
(110, '538136', 'in', 10, 'input produk awal', 10, '2022-07-18 20:31:06', '2022-07-18 20:31:06'),
(111, '538137', 'in', 0, 'input produk awal', 0, '2022-07-18 20:31:06', '2022-07-18 20:31:06'),
(112, '538138', 'in', 10, 'input produk awal', 10, '2022-07-18 20:31:06', '2022-07-18 20:31:06'),
(113, '538139', 'in', 10, 'input produk awal', 10, '2022-07-18 20:31:06', '2022-07-18 20:31:06'),
(114, '538140', 'in', 0, 'input produk awal', 0, '2022-07-18 20:31:06', '2022-07-18 20:31:06'),
(115, '567634', 'in', 20, 'input produk awal', 20, '2022-07-18 20:32:10', '2022-07-18 20:32:10'),
(116, '567635', 'in', 20, 'input produk awal', 20, '2022-07-18 20:32:10', '2022-07-18 20:32:10'),
(117, '567636', 'in', 20, 'input produk awal', 20, '2022-07-18 20:32:10', '2022-07-18 20:32:10'),
(118, '567637', 'in', 0, 'input produk awal', 0, '2022-07-18 20:32:10', '2022-07-18 20:32:10'),
(119, '567638', 'in', 0, 'input produk awal', 0, '2022-07-18 20:32:10', '2022-07-18 20:32:10'),
(120, '567639', 'in', 0, 'input produk awal', 0, '2022-07-18 20:32:10', '2022-07-18 20:32:10'),
(121, '567640', 'in', 0, 'input produk awal', 0, '2022-07-18 20:32:10', '2022-07-18 20:32:10'),
(122, '980234', 'in', 10, 'input produk awal', 10, '2022-07-18 20:33:43', '2022-07-18 20:33:43'),
(123, '980235', 'in', 10, 'input produk awal', 10, '2022-07-18 20:33:43', '2022-07-18 20:33:43'),
(124, '980236', 'in', 0, 'input produk awal', 0, '2022-07-18 20:33:43', '2022-07-18 20:33:43'),
(125, '980237', 'in', 10, 'input produk awal', 10, '2022-07-18 20:33:43', '2022-07-18 20:33:43'),
(126, '980238', 'in', 10, 'input produk awal', 10, '2022-07-18 20:33:43', '2022-07-18 20:33:43'),
(127, '980239', 'in', 0, 'input produk awal', 0, '2022-07-18 20:33:43', '2022-07-18 20:33:43'),
(128, '980240', 'in', 0, 'input produk awal', 0, '2022-07-18 20:33:43', '2022-07-18 20:33:43'),
(129, '195134', 'in', 10, 'input produk awal', 10, '2022-07-18 20:36:04', '2022-07-18 20:36:04'),
(130, '195135', 'in', 10, 'input produk awal', 10, '2022-07-18 20:36:04', '2022-07-18 20:36:04'),
(131, '195136', 'in', 0, 'input produk awal', 0, '2022-07-18 20:36:04', '2022-07-18 20:36:04'),
(132, '195137', 'in', 10, 'input produk awal', 10, '2022-07-18 20:36:04', '2022-07-18 20:36:04'),
(133, '195138', 'in', 10, 'input produk awal', 10, '2022-07-18 20:36:04', '2022-07-18 20:36:04'),
(134, '195139', 'in', 0, 'input produk awal', 0, '2022-07-18 20:36:04', '2022-07-18 20:36:04'),
(135, '195140', 'in', 0, 'input produk awal', 0, '2022-07-18 20:36:04', '2022-07-18 20:36:04'),
(136, '198338', 'out', 5, 'order agen nomor #1', 10, '2022-07-19 05:04:19', '2022-07-19 05:04:19'),
(137, '198335', 'out', 10, 'order agen nomor #1', 5, '2022-07-19 05:04:19', '2022-07-19 05:04:19'),
(138, '198334', 'out', 2, 'order agen nomor #1', 8, '2022-07-19 05:04:19', '2022-07-19 05:04:19'),
(139, '213936', 'out', 5, 'order agen nomor #1', 5, '2022-07-19 05:04:19', '2022-07-19 05:04:19'),
(140, '213928', 'out', 10, 'order agen nomor #1', 20, '2022-07-19 05:04:19', '2022-07-19 05:04:19'),
(141, '213921', 'out', 5, 'order agen nomor #1', 5, '2022-07-19 05:04:19', '2022-07-19 05:04:19'),
(142, '410238', 'in', 10, 'input produk awal', 10, '2022-07-21 18:56:28', '2022-07-21 18:56:28'),
(143, '410239', 'in', 10, 'input produk awal', 10, '2022-07-21 18:56:28', '2022-07-21 18:56:28'),
(144, '410240', 'in', 10, 'input produk awal', 10, '2022-07-21 18:56:28', '2022-07-21 18:56:28'),
(145, '410241', 'in', 10, 'input produk awal', 10, '2022-07-21 18:56:28', '2022-07-21 18:56:28'),
(146, '410242', 'in', 10, 'input produk awal', 10, '2022-07-21 18:56:28', '2022-07-21 18:56:28'),
(147, '410243', 'in', 10, 'input produk awal', 10, '2022-07-21 18:56:28', '2022-07-21 18:56:28'),
(148, '366238', 'in', 20, 'input produk awal', 20, '2022-07-21 18:57:17', '2022-07-21 18:57:17'),
(149, '366239', 'in', 20, 'input produk awal', 20, '2022-07-21 18:57:17', '2022-07-21 18:57:17'),
(150, '366240', 'in', 20, 'input produk awal', 20, '2022-07-21 18:57:17', '2022-07-21 18:57:17'),
(151, '366241', 'in', 20, 'input produk awal', 20, '2022-07-21 18:57:17', '2022-07-21 18:57:17'),
(152, '366242', 'in', 20, 'input produk awal', 20, '2022-07-21 18:57:17', '2022-07-21 18:57:17'),
(153, '366243', 'in', 20, 'input produk awal', 20, '2022-07-21 18:57:17', '2022-07-21 18:57:17'),
(154, '245138', 'in', 0, 'input produk awal', 0, '2022-07-21 18:58:13', '2022-07-21 18:58:13'),
(155, '245139', 'in', 0, 'input produk awal', 0, '2022-07-21 18:58:13', '2022-07-21 18:58:13'),
(156, '245140', 'in', 20, 'input produk awal', 20, '2022-07-21 18:58:13', '2022-07-21 18:58:13'),
(157, '245141', 'in', 0, 'input produk awal', 0, '2022-07-21 18:58:13', '2022-07-21 18:58:13'),
(158, '245142', 'in', 15, 'input produk awal', 15, '2022-07-21 18:58:13', '2022-07-21 18:58:13'),
(159, '245143', 'in', 0, 'input produk awal', 0, '2022-07-21 18:58:13', '2022-07-21 18:58:13'),
(160, '712138', 'in', 10, 'input produk awal', 10, '2022-07-21 18:59:01', '2022-07-21 18:59:01'),
(161, '712139', 'in', 0, 'input produk awal', 0, '2022-07-21 18:59:01', '2022-07-21 18:59:01'),
(162, '712140', 'in', 10, 'input produk awal', 10, '2022-07-21 18:59:01', '2022-07-21 18:59:01'),
(163, '712141', 'in', 10, 'input produk awal', 10, '2022-07-21 18:59:01', '2022-07-21 18:59:01'),
(164, '712142', 'in', 0, 'input produk awal', 0, '2022-07-21 18:59:01', '2022-07-21 18:59:01'),
(165, '712143', 'in', 10, 'input produk awal', 10, '2022-07-21 18:59:01', '2022-07-21 18:59:01'),
(166, '7018A4', 'in', 5000, 'input produk awal', 5000, '2022-07-21 19:00:08', '2022-07-21 19:00:08'),
(167, '6482S', 'in', 3000, 'input produk awal', 3000, '2022-07-21 19:01:03', '2022-07-21 19:01:03'),
(168, '6482M', 'in', 1000, 'input produk awal', 1000, '2022-07-21 19:01:03', '2022-07-21 19:01:03'),
(169, '6482L', 'in', 300, 'input produk awal', 300, '2022-07-21 19:01:03', '2022-07-21 19:01:03'),
(170, '992228', 'out', 2, 'order agen nomor #2', 13, '2022-07-21 21:55:17', '2022-07-21 21:55:17'),
(171, '192521', 'in', 7, 'input produk awal', 7, '2022-07-22 19:13:23', '2022-07-22 19:13:23'),
(172, '192524', 'in', 0, 'input produk awal', 0, '2022-07-22 19:13:23', '2022-07-22 19:13:23'),
(173, '192528', 'in', 10, 'input produk awal', 10, '2022-07-22 19:13:23', '2022-07-22 19:13:23'),
(174, '192528', 'out', 10, 'order agen nomor #3', 0, '2022-07-22 19:14:23', '2022-07-22 19:14:23'),
(175, '192521', 'out', 5, 'order agen nomor #3', 2, '2022-07-22 19:14:23', '2022-07-22 19:14:23'),
(176, '192528', 'in', 10, 'pembatalan order agen no #3', 10, '2022-07-22 19:14:49', '2022-07-22 19:14:49'),
(177, '192521', 'in', 5, 'pembatalan order agen no #3', 7, '2022-07-22 19:14:49', '2022-07-22 19:14:49'),
(178, '192528', 'out', 3, 'order agen nomor #4', 7, '2022-07-24 19:38:31', '2022-07-24 19:38:31'),
(179, '192521', 'out', 2, 'order agen nomor #4', 5, '2022-07-24 19:38:31', '2022-07-24 19:38:31'),
(180, '213924', 'out', 2, 'order agen nomor #4', 18, '2022-07-24 19:38:31', '2022-07-24 19:38:31'),
(181, '213921', 'out', 1, 'order agen nomor #4', 4, '2022-07-24 19:38:31', '2022-07-24 19:38:31'),
(182, '992234', 'out', 2, 'order agen nomor #4', 23, '2022-07-24 19:38:31', '2022-07-24 19:38:31'),
(183, '992230', 'out', 2, 'order agen nomor #4', 13, '2022-07-24 19:38:31', '2022-07-24 19:38:31'),
(184, '201532', 'out', 2, 'order agen nomor #6', 19, '2022-07-24 19:53:26', '2022-07-24 19:53:26'),
(185, '201524', 'out', 2, 'order agen nomor #6', 38, '2022-07-24 19:53:26', '2022-07-24 19:53:26'),
(186, '224528', 'out', 9, 'order agen nomor #6', 16, '2022-07-24 19:53:26', '2022-07-24 19:53:26'),
(187, '224524', 'out', 4, 'order agen nomor #6', 16, '2022-07-24 19:53:26', '2022-07-24 19:53:26'),
(188, '361924', 'out', 4, 'order agen nomor #6', 16, '2022-07-24 19:53:26', '2022-07-24 19:53:26'),
(189, '361921', 'out', 2, 'order agen nomor #6', 38, '2022-07-24 19:53:26', '2022-07-24 19:53:26'),
(190, '538135', 'out', 2, 'order agen nomor #6', 8, '2022-07-24 19:53:26', '2022-07-24 19:53:26'),
(191, '224538', 'out', 2, 'order agen nomor #7', 18, '2022-07-24 19:55:36', '2022-07-24 19:55:36'),
(192, '224521', 'out', 2, 'order agen nomor #7', 8, '2022-07-24 19:55:36', '2022-07-24 19:55:36'),
(193, '361940', 'out', 2, 'order agen nomor #7', 38, '2022-07-24 19:55:36', '2022-07-24 19:55:36'),
(194, '410242', 'out', 2, 'order agen nomor #7', 8, '2022-07-24 19:55:36', '2022-07-24 19:55:36'),
(195, '410239', 'out', 2, 'order agen nomor #7', 8, '2022-07-24 19:55:36', '2022-07-24 19:55:36'),
(196, '559634', 'out', 2, 'order agen nomor #7', 3, '2022-07-24 19:55:36', '2022-07-24 19:55:36'),
(197, '559624', 'out', 2, 'order agen nomor #7', 18, '2022-07-24 19:55:36', '2022-07-24 19:55:36'),
(198, '213924', 'out', 4, 'order agen nomor #8', 14, '2022-07-24 19:58:23', '2022-07-24 19:58:23'),
(199, '201532', 'out', 2, 'order agen nomor #9', 17, '2022-07-24 20:07:13', '2022-07-24 20:07:13'),
(200, '201524', 'out', 2, 'order agen nomor #9', 36, '2022-07-24 20:07:13', '2022-07-24 20:07:13'),
(201, '224536', 'out', 2, 'order agen nomor #9', 18, '2022-07-24 20:07:13', '2022-07-24 20:07:13'),
(202, '224524', 'out', 2, 'order agen nomor #9', 14, '2022-07-24 20:07:13', '2022-07-24 20:07:13'),
(203, '361934', 'out', 2, 'order agen nomor #9', 23, '2022-07-24 20:07:13', '2022-07-24 20:07:13'),
(204, '361921', 'out', 2, 'order agen nomor #9', 36, '2022-07-24 20:07:13', '2022-07-24 20:07:13'),
(205, '213924', 'out', 14, 'order agen nomor #10', 0, '2022-07-24 20:19:47', '2022-07-24 20:19:47'),
(206, '224528', 'out', 10, 'order agen nomor #10', 6, '2022-07-24 20:19:47', '2022-07-24 20:19:47'),
(207, '224524', 'out', 2, 'order agen nomor #10', 12, '2022-07-24 20:19:47', '2022-07-24 20:19:47'),
(208, '224521', 'out', 3, 'order agen nomor #10', 5, '2022-07-24 20:19:47', '2022-07-24 20:19:47'),
(209, '361930', 'out', 6, 'order agen nomor #10', 10, '2022-07-24 20:19:47', '2022-07-24 20:19:47'),
(210, '361924', 'out', 5, 'order agen nomor #10', 11, '2022-07-24 20:19:47', '2022-07-24 20:19:47'),
(211, '361921', 'out', 5, 'order agen nomor #10', 31, '2022-07-24 20:19:47', '2022-07-24 20:19:47'),
(212, '6482S', 'out', 5, 'order agen nomor #11', 2995, '2022-07-24 20:26:43', '2022-07-24 20:26:43'),
(213, '6482M', 'out', 5, 'order agen nomor #11', 995, '2022-07-24 20:26:43', '2022-07-24 20:26:43'),
(214, '6482L', 'out', 5, 'order agen nomor #11', 295, '2022-07-24 20:26:43', '2022-07-24 20:26:43'),
(215, '6482S', 'in', 5, 'pembatalan order agen no #11', 3000, '2022-07-24 20:28:34', '2022-07-24 20:28:34'),
(216, '6482M', 'in', 5, 'pembatalan order agen no #11', 1000, '2022-07-24 20:28:34', '2022-07-24 20:28:34'),
(217, '6482L', 'in', 5, 'pembatalan order agen no #11', 300, '2022-07-24 20:28:34', '2022-07-24 20:28:34'),
(218, '213928', 'out', 20, 'order agen nomor #12', 0, '2022-07-24 20:29:53', '2022-07-24 20:29:53'),
(219, '213938', 'out', 2, 'order agen nomor #13', 18, '2022-07-24 20:45:41', '2022-07-24 20:45:41'),
(220, '213936', 'out', 2, 'order agen nomor #13', 3, '2022-07-24 20:45:41', '2022-07-24 20:45:41'),
(221, '201528', 'out', 2, 'order agen nomor #14', 4, '2022-07-24 20:50:02', '2022-07-24 20:50:02'),
(222, '201524', 'out', 2, 'order agen nomor #14', 34, '2022-07-24 20:50:02', '2022-07-24 20:50:02'),
(223, '201521', 'out', 2, 'order agen nomor #14', 0, '2022-07-24 20:50:02', '2022-07-24 20:50:02'),
(224, '213921', 'out', 4, 'order agen nomor #15', 0, '2022-07-25 12:02:38', '2022-07-25 12:02:38'),
(225, '213932', 'out', 4, 'order agen nomor #16', 36, '2022-07-25 12:02:48', '2022-07-25 12:02:48'),
(226, '245140', 'out', 20, 'order agen nomor #17', 0, '2022-07-25 12:13:26', '2022-07-25 12:13:26'),
(227, '198340', 'out', 1, 'order agen nomor #18', 14, '2022-07-26 02:42:05', '2022-07-26 02:42:05'),
(228, '198339', 'out', 1, 'order agen nomor #18', 19, '2022-07-26 02:42:05', '2022-07-26 02:42:05'),
(229, '361940', 'out', 2, 'order agen nomor #18', 36, '2022-07-26 02:42:05', '2022-07-26 02:42:05'),
(230, '361932', 'out', 2, 'order agen nomor #18', 18, '2022-07-26 02:42:05', '2022-07-26 02:42:05'),
(231, '372632', 'out', 2, 'order agen nomor #18', 46, '2022-07-26 02:42:05', '2022-07-26 02:42:05'),
(232, '372624', 'out', 2, 'order agen nomor #18', 23, '2022-07-26 02:42:05', '2022-07-26 02:42:05'),
(233, '198340', 'out', 1, 'order agen nomor #19', 13, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(234, '198339', 'out', 1, 'order agen nomor #19', 18, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(235, '361940', 'out', 2, 'order agen nomor #19', 34, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(236, '361932', 'out', 2, 'order agen nomor #19', 16, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(237, '372632', 'out', 2, 'order agen nomor #19', 44, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(238, '372624', 'out', 2, 'order agen nomor #19', 21, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(239, '198340', 'out', 1, 'order agen nomor #20', 12, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(240, '198339', 'out', 1, 'order agen nomor #20', 17, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(241, '361940', 'out', 2, 'order agen nomor #20', 32, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(242, '361932', 'out', 2, 'order agen nomor #20', 14, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(243, '372632', 'out', 2, 'order agen nomor #20', 42, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(244, '372624', 'out', 2, 'order agen nomor #20', 19, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(245, '198340', 'out', 1, 'order agen nomor #21', 12, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(246, '198340', 'out', 1, 'order agen nomor #22', 11, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(247, '198338', 'out', 1, 'order agen nomor #21', 9, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(248, '198339', 'out', 1, 'order agen nomor #22', 17, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(249, '361940', 'out', 2, 'order agen nomor #21', 32, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(250, '361932', 'out', 2, 'order agen nomor #21', 14, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(251, '372632', 'out', 2, 'order agen nomor #21', 42, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(252, '361940', 'out', 2, 'order agen nomor #22', 30, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(253, '361932', 'out', 2, 'order agen nomor #22', 12, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(254, '372624', 'out', 2, 'order agen nomor #21', 19, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(255, '372632', 'out', 2, 'order agen nomor #22', 40, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(256, '372624', 'out', 2, 'order agen nomor #22', 17, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(257, '198340', 'out', 1, 'order agen nomor #23', 11, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(258, '198340', 'out', 1, 'order agen nomor #24', 10, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(259, '198339', 'out', 1, 'order agen nomor #23', 16, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(260, '198339', 'out', 1, 'order agen nomor #24', 15, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(261, '361940', 'out', 2, 'order agen nomor #23', 30, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(262, '361932', 'out', 2, 'order agen nomor #23', 12, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(263, '361940', 'out', 2, 'order agen nomor #24', 28, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(264, '372632', 'out', 2, 'order agen nomor #23', 40, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(265, '361932', 'out', 2, 'order agen nomor #24', 10, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(266, '372624', 'out', 2, 'order agen nomor #23', 15, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(267, '372632', 'out', 2, 'order agen nomor #24', 38, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(268, '372624', 'out', 2, 'order agen nomor #24', 13, '2022-07-26 02:42:11', '2022-07-26 02:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `log_items`
--

CREATE TABLE `log_items` (
  `id` int(11) NOT NULL,
  `id_produk_detail` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `id_order` int(20) NOT NULL,
  `tipe` int(2) NOT NULL,
  `content` varchar(255) NOT NULL,
  `dilihat` tinyint(1) NOT NULL DEFAULT 0,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `id_user`, `id_order`, `tipe`, `content`, `dilihat`, `trash`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, 1, 'Order Baru', 1, 0, '2022-07-19 05:04:19', '2022-07-21 18:34:22'),
(2, '43', 1, 3, 'Pesanan di Proses', 1, 0, '2022-07-19 05:05:58', '2022-07-19 05:06:18'),
(3, 'admin', 1, 3, 'Konfirmasi Pembayaran', 1, 0, '2022-07-19 05:07:03', '2022-07-19 05:07:32'),
(4, '43', 1, 4, 'Pesanan telah dikirim', 1, 0, '2022-07-19 05:13:04', '2022-07-19 05:13:18'),
(5, 'admin', 1, 5, 'Pesanan Selesai', 1, 0, '2022-07-19 05:13:36', '2022-07-21 18:34:25'),
(6, 'admin', 2, 1, 'Order Baru', 1, 0, '2022-07-21 21:55:17', '2022-07-22 18:16:49'),
(7, '26', 2, 3, 'Pesanan di Proses', 0, 0, '2022-07-22 18:17:47', '2022-07-22 18:17:47'),
(8, 'admin', 3, 1, 'Order Baru', 1, 0, '2022-07-22 19:14:23', '2022-07-24 19:11:41'),
(9, 'admin', 3, 6, 'Pesanan Batal', 1, 0, '2022-07-22 19:14:49', '2022-07-24 19:11:43'),
(10, 'admin', 4, 1, 'Order Baru', 1, 0, '2022-07-24 19:38:31', '2022-07-24 19:59:03'),
(11, 'admin', 5, 1, 'Order Baru', 1, 0, '2022-07-24 19:40:56', '2022-07-24 19:59:12'),
(12, 'admin', 6, 1, 'Order Baru', 1, 0, '2022-07-24 19:53:26', '2022-07-24 19:54:32'),
(13, 'admin', 7, 1, 'Order Baru', 1, 0, '2022-07-24 19:55:36', '2022-07-24 19:56:57'),
(14, '36', 6, 3, 'Pesanan di Proses', 1, 0, '2022-07-24 19:56:33', '2022-07-24 19:57:55'),
(15, '16', 7, 3, 'Pesanan di Proses', 1, 0, '2022-07-24 19:57:12', '2022-07-24 20:18:15'),
(16, '16', 4, 3, 'Pesanan di Proses', 1, 0, '2022-07-24 19:57:47', '2022-07-24 20:11:01'),
(17, 'admin', 8, 1, 'Order Baru', 1, 0, '2022-07-24 19:58:23', '2022-07-24 19:58:32'),
(18, '28', 8, 3, 'Pesanan di Proses', 1, 0, '2022-07-24 19:58:43', '2022-07-24 20:23:15'),
(19, 'admin', 6, 3, 'Konfirmasi Pembayaran', 1, 0, '2022-07-24 19:59:39', '2022-07-24 20:03:18'),
(20, '36', 6, 4, 'Pesanan telah dikirim', 1, 0, '2022-07-24 20:01:59', '2022-07-24 20:02:57'),
(21, 'admin', 6, 5, 'Pesanan Selesai', 1, 0, '2022-07-24 20:03:28', '2022-07-24 20:03:44'),
(22, 'admin', 9, 1, 'Order Baru', 1, 0, '2022-07-24 20:07:13', '2022-07-24 20:07:53'),
(23, '25', 9, 3, 'Pesanan di Proses', 1, 0, '2022-07-24 20:07:40', '2022-07-24 20:07:56'),
(24, 'admin', 9, 3, 'Konfirmasi Pembayaran', 1, 0, '2022-07-24 20:08:16', '2022-07-24 20:09:13'),
(25, '25', 9, 4, 'Pesanan telah dikirim', 1, 0, '2022-07-24 20:09:54', '2022-07-24 20:10:41'),
(26, 'admin', 9, 3, 'Konfirmasi Pembayaran', 1, 0, '2022-07-24 20:10:22', '2022-07-24 20:11:24'),
(27, '25', 9, 4, 'Pesanan telah dikirim', 1, 0, '2022-07-24 20:11:14', '2022-07-24 20:11:27'),
(28, 'admin', 9, 5, 'Pesanan Selesai', 1, 0, '2022-07-24 20:12:07', '2022-07-24 20:13:04'),
(29, 'admin', 10, 1, 'Order Baru', 1, 0, '2022-07-24 20:19:47', '2022-07-24 20:22:54'),
(30, 'admin', 8, 3, 'Konfirmasi Pembayaran', 1, 0, '2022-07-24 20:20:11', '2022-07-24 20:21:46'),
(31, '28', 10, 3, 'Pesanan di Proses', 1, 0, '2022-07-24 20:20:42', '2022-07-26 06:41:54'),
(32, 'admin', 11, 1, 'Order Baru', 1, 0, '2022-07-24 20:26:43', '2022-07-24 20:28:56'),
(33, 'admin', 11, 6, 'Pesanan Batal', 1, 0, '2022-07-24 20:28:34', '2022-07-24 20:30:44'),
(34, 'admin', 12, 1, 'Order Baru', 1, 0, '2022-07-24 20:29:53', '2022-07-24 20:30:19'),
(35, 'admin', 10, 3, 'Konfirmasi Pembayaran', 1, 0, '2022-07-24 20:33:56', '2022-07-24 20:35:50'),
(36, '25', 12, 3, 'Pesanan di Proses', 0, 0, '2022-07-24 20:34:43', '2022-07-24 20:34:43'),
(37, 'admin', 13, 1, 'Order Baru', 1, 0, '2022-07-24 20:45:41', '2022-07-24 21:06:10'),
(38, 'admin', 7, 3, 'Konfirmasi Pembayaran', 1, 0, '2022-07-24 20:48:06', '2022-07-24 21:05:33'),
(39, 'admin', 14, 1, 'Order Baru', 1, 0, '2022-07-24 20:50:02', '2022-07-24 21:07:56'),
(40, '16', 7, 4, 'Pesanan telah dikirim', 0, 0, '2022-07-24 21:05:53', '2022-07-24 21:05:53'),
(41, '43', 13, 3, 'Pesanan di Proses', 1, 0, '2022-07-24 21:06:33', '2022-07-24 21:07:21'),
(42, '43', 13, 3, 'Pesanan di Proses', 1, 0, '2022-07-24 21:07:48', '2022-07-24 21:11:17'),
(43, '43', 14, 3, 'Pesanan di Proses', 1, 0, '2022-07-24 21:08:11', '2022-07-24 21:11:14'),
(44, 'admin', 15, 1, 'Order Baru', 1, 0, '2022-07-25 12:02:38', '2022-07-25 12:03:22'),
(45, 'admin', 16, 1, 'Order Baru', 1, 0, '2022-07-25 12:02:48', '2022-07-26 01:41:46'),
(46, '43', 15, 3, 'Pesanan di Proses', 1, 0, '2022-07-25 12:03:34', '2022-07-25 12:03:51'),
(47, 'admin', 15, 3, 'Konfirmasi Pembayaran', 1, 0, '2022-07-25 12:04:04', '2022-07-25 12:04:16'),
(48, '43', 15, 4, 'Pesanan telah dikirim', 1, 0, '2022-07-25 12:04:39', '2022-07-25 12:04:48'),
(49, 'admin', 15, 5, 'Pesanan Selesai', 1, 0, '2022-07-25 12:04:54', '2022-07-26 01:41:48'),
(50, 'admin', 17, 1, 'Order Baru', 1, 0, '2022-07-25 12:13:26', '2022-07-26 01:41:49'),
(51, 'admin', 18, 1, 'Order Baru', 1, 0, '2022-07-26 02:42:05', '2022-07-26 02:43:42'),
(52, 'admin', 19, 1, 'Order Baru', 1, 0, '2022-07-26 02:42:06', '2022-07-26 02:43:33'),
(53, 'admin', 20, 1, 'Order Baru', 1, 0, '2022-07-26 02:42:06', '2022-07-26 02:43:25'),
(54, 'admin', 21, 1, 'Order Baru', 1, 0, '2022-07-26 02:42:10', '2022-07-26 02:43:10'),
(55, 'admin', 22, 1, 'Order Baru', 1, 0, '2022-07-26 02:42:10', '2022-07-26 02:43:03'),
(56, 'admin', 23, 1, 'Order Baru', 1, 0, '2022-07-26 02:42:11', '2022-07-26 02:42:50'),
(57, 'admin', 24, 1, 'Order Baru', 1, 0, '2022-07-26 02:42:11', '2022-07-26 02:42:33');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ongkir` int(11) NOT NULL DEFAULT 0,
  `ekspedisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `potongan_harga_langsung` int(11) NOT NULL DEFAULT 0,
  `dropship` int(1) NOT NULL DEFAULT 0,
  `dropship_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dropship_telepon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dropship_alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_potongan_harga_langsung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bukti_bayar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `id_alamat`, `coupon`, `status`, `ongkir`, `ekspedisi`, `potongan_harga_langsung`, `dropship`, `dropship_nama`, `dropship_telepon`, `dropship_alamat`, `keterangan_potongan_harga_langsung`, `bukti_bayar`, `resi`, `created_at`, `updated_at`) VALUES
(1, 43, '25', NULL, '5', 100000, 'Indah Cargo', 0, 0, NULL, NULL, NULL, NULL, 'bukti_bayar/YGJUshBp9rAQwzFnrZXmH972uEW2TGGUmRngw5PC.jpg', 'resi/rqO0hRLjpVKrOPsUcZbmGRfGz1d0vwMjca3PY1js.jpg', '2022-07-19 05:04:19', '2022-07-19 05:13:36'),
(2, 26, '14', NULL, '2', 40000, 'Indah Cargo', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-21 21:55:17', '2022-07-22 18:17:47'),
(3, 43, '25', NULL, '0', 0, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-22 19:14:23', '2022-07-22 19:14:49'),
(4, 16, '12', NULL, '2', 40000, 'Indahcargo', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-24 19:38:31', '2022-07-24 19:57:47'),
(5, 16, '12', NULL, '1', 0, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-24 19:40:56', '2022-07-24 19:40:56'),
(6, 36, '22', NULL, '5', 20000, 'Indahcargo', 0, 0, NULL, NULL, NULL, NULL, 'bukti_bayar/pSWW0CZuXY5BaxBLeB5UsbnNymQyMGo1Af0Khxd9.jpg', 'resi/aFRZROsJKEp6wdGjFEwvt2L3Gevpb3SzYzcNda0Z.jpg', '2022-07-24 19:53:26', '2022-07-24 20:03:28'),
(7, 16, '12', NULL, '4', 30000, 'Indahcargo', 0, 0, NULL, NULL, NULL, NULL, 'bukti_bayar/wJMwuV88DzhRaX89p3k6fWskIa3SK27PUGt0l0fH.jpg', 'resi/dAPyULjnd6LeTpaDdycek9EU0pk1k7fjZQe321zf.jpg', '2022-07-24 19:55:36', '2022-07-24 21:05:53'),
(8, 28, '5', NULL, '3', 10000, 'Indahcargo', 0, 0, NULL, NULL, NULL, NULL, 'bukti_bayar/PsO8m17SV8mw27XdzM7FFaXvNXX8UYi83V2FgPwx.jpg', NULL, '2022-07-24 19:58:23', '2022-07-24 20:20:11'),
(9, 25, '4', NULL, '5', 35000, 'Indahcargo', 0, 0, NULL, NULL, NULL, NULL, 'bukti_bayar/TXjVa1zg7exYdMInsdmVHHgzj05tJ8KSCQDFer8E.jpg', 'resi/TITcgrpHYEAIHu3A6m703d8Ft8DwIsVER6NiUA6m.jpg', '2022-07-24 20:07:13', '2022-07-24 20:12:07'),
(10, 28, '5', NULL, '3', 15000, 'indahcargo', 0, 0, NULL, NULL, NULL, NULL, 'bukti_bayar/T7tGXcBv5yjLJsGDYUmuxVx5Ygy3TyWQ0rDXUbfV.jpg', NULL, '2022-07-24 20:19:47', '2022-07-24 20:33:56'),
(11, 30, '6', NULL, '0', 0, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-24 20:26:43', '2022-07-24 20:28:34'),
(12, 25, '4', NULL, '2', 25000, 'indahcargo', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-24 20:29:53', '2022-07-24 20:34:43'),
(13, 43, '25', NULL, '2', 25000, 'Indahcargo', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-24 20:45:41', '2022-07-24 21:07:48'),
(14, 43, '25', 'TESTAPP', '2', 25000, 'Indahcargo', 10000, 0, NULL, NULL, NULL, 'Cashback', NULL, NULL, '2022-07-24 20:50:02', '2022-07-24 21:08:11'),
(15, 43, '25', NULL, '5', 40000, 'Indah Cargo', 0, 0, NULL, NULL, NULL, NULL, 'bukti_bayar/ty3fiaHBsjrsiw2S0zzFOuEe4NhaCO4z3vWd8eo5.jpg', 'resi/RqN34PQUWJqJ11PkDX61UnTnc3elyLXoXeqzxsnk.jpg', '2022-07-25 12:02:38', '2022-07-25 12:04:54'),
(16, 44, '30', NULL, '1', 0, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-25 12:02:48', '2022-07-25 12:02:48'),
(17, 43, '25', NULL, '1', 0, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-25 12:13:26', '2022-07-25 12:13:26'),
(18, 41, '10', NULL, '1', 0, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-26 02:42:05', '2022-07-26 02:42:05'),
(19, 44, '30', NULL, '1', 0, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(20, 43, '25', NULL, '1', 0, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(21, 42, '11', NULL, '1', 0, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(22, 39, '23', NULL, '1', 0, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(23, 22, '3', NULL, '1', 0, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(24, 19, '26', NULL, '1', 0, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-26 02:42:11', '2022-07-26 02:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_produk_detail` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `id_order`, `id_produk_detail`, `jumlah_produk`, `harga_produk`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 1, '198338', 5, 20000, 43, '2022-07-19 05:04:19', '2022-07-19 05:04:19'),
(2, 1, '198335', 10, 20000, 43, '2022-07-19 05:04:19', '2022-07-19 05:04:19'),
(3, 1, '198334', 2, 20000, 43, '2022-07-19 05:04:19', '2022-07-19 05:04:19'),
(4, 1, '213936', 5, 40000, 43, '2022-07-19 05:04:19', '2022-07-19 05:04:19'),
(5, 1, '213928', 10, 35000, 43, '2022-07-19 05:04:19', '2022-07-19 05:04:19'),
(6, 1, '213921', 5, 35000, 43, '2022-07-19 05:04:19', '2022-07-19 05:04:19'),
(7, 2, '992228', 2, 30000, 26, '2022-07-21 21:55:17', '2022-07-21 21:55:17'),
(8, 3, '192528', 10, 45000, 43, '2022-07-22 19:14:23', '2022-07-22 19:14:23'),
(9, 3, '192521', 5, 45000, 43, '2022-07-22 19:14:23', '2022-07-22 19:14:23'),
(10, 4, '192528', 3, 45000, 16, '2022-07-24 19:38:31', '2022-07-24 19:38:31'),
(11, 4, '192521', 2, 45000, 16, '2022-07-24 19:38:31', '2022-07-24 19:38:31'),
(12, 4, '213924', 2, 35000, 16, '2022-07-24 19:38:31', '2022-07-24 19:38:31'),
(13, 4, '213921', 1, 35000, 16, '2022-07-24 19:38:31', '2022-07-24 19:38:31'),
(14, 4, '992234', 2, 35000, 16, '2022-07-24 19:38:31', '2022-07-24 19:38:31'),
(15, 4, '992230', 2, 35000, 16, '2022-07-24 19:38:31', '2022-07-24 19:38:31'),
(16, 6, '201532', 2, 25000, 36, '2022-07-24 19:53:26', '2022-07-24 19:53:26'),
(17, 6, '201524', 2, 20000, 36, '2022-07-24 19:53:26', '2022-07-24 19:53:26'),
(18, 6, '224528', 9, 30000, 36, '2022-07-24 19:53:26', '2022-07-24 19:53:26'),
(19, 6, '224524', 4, 30000, 36, '2022-07-24 19:53:26', '2022-07-24 19:53:26'),
(20, 6, '361924', 4, 30000, 36, '2022-07-24 19:53:26', '2022-07-24 19:53:26'),
(21, 6, '361921', 2, 30000, 36, '2022-07-24 19:53:26', '2022-07-24 19:53:26'),
(22, 6, '538135', 2, 20000, 36, '2022-07-24 19:53:26', '2022-07-24 19:53:26'),
(23, 7, '224538', 2, 40000, 16, '2022-07-24 19:55:36', '2022-07-24 19:55:36'),
(24, 7, '224521', 2, 30000, 16, '2022-07-24 19:55:36', '2022-07-24 19:55:36'),
(25, 7, '361940', 2, 40000, 16, '2022-07-24 19:55:36', '2022-07-24 19:55:36'),
(26, 7, '410242', 2, 120000, 16, '2022-07-24 19:55:36', '2022-07-24 19:55:36'),
(27, 7, '410239', 2, 120000, 16, '2022-07-24 19:55:36', '2022-07-24 19:55:36'),
(28, 7, '559634', 2, 25000, 16, '2022-07-24 19:55:36', '2022-07-24 19:55:36'),
(29, 7, '559624', 2, 20000, 16, '2022-07-24 19:55:36', '2022-07-24 19:55:36'),
(30, 8, '213924', 4, 35000, 28, '2022-07-24 19:58:23', '2022-07-24 19:58:23'),
(31, 9, '201532', 2, 25000, 25, '2022-07-24 20:07:13', '2022-07-24 20:07:13'),
(32, 9, '201524', 2, 20000, 25, '2022-07-24 20:07:13', '2022-07-24 20:07:13'),
(33, 9, '224536', 2, 35000, 25, '2022-07-24 20:07:13', '2022-07-24 20:07:13'),
(34, 9, '224524', 2, 30000, 25, '2022-07-24 20:07:13', '2022-07-24 20:07:13'),
(35, 9, '361934', 2, 35000, 25, '2022-07-24 20:07:13', '2022-07-24 20:07:13'),
(36, 9, '361921', 2, 30000, 25, '2022-07-24 20:07:13', '2022-07-24 20:07:13'),
(37, 10, '213924', 14, 35000, 28, '2022-07-24 20:19:47', '2022-07-24 20:19:47'),
(38, 10, '224528', 10, 30000, 28, '2022-07-24 20:19:47', '2022-07-24 20:19:47'),
(39, 10, '224524', 2, 30000, 28, '2022-07-24 20:19:47', '2022-07-24 20:19:47'),
(40, 10, '224521', 3, 30000, 28, '2022-07-24 20:19:47', '2022-07-24 20:19:47'),
(41, 10, '361930', 6, 35000, 28, '2022-07-24 20:19:47', '2022-07-24 20:19:47'),
(42, 10, '361924', 5, 30000, 28, '2022-07-24 20:19:47', '2022-07-24 20:19:47'),
(43, 10, '361921', 5, 30000, 28, '2022-07-24 20:19:47', '2022-07-24 20:19:47'),
(44, 11, '6482S', 5, 1000, 30, '2022-07-24 20:26:43', '2022-07-24 20:26:43'),
(45, 11, '6482M', 5, 1000, 30, '2022-07-24 20:26:43', '2022-07-24 20:26:43'),
(46, 11, '6482L', 5, 1000, 30, '2022-07-24 20:26:43', '2022-07-24 20:26:43'),
(47, 12, '213928', 20, 35000, 25, '2022-07-24 20:29:53', '2022-07-24 20:29:53'),
(48, 13, '213938', 2, 45000, 43, '2022-07-24 20:45:41', '2022-07-24 20:45:41'),
(49, 13, '213936', 2, 40000, 43, '2022-07-24 20:45:41', '2022-07-24 20:45:41'),
(50, 14, '201528', 2, 20000, 43, '2022-07-24 20:50:02', '2022-07-24 20:50:02'),
(51, 14, '201524', 2, 20000, 43, '2022-07-24 20:50:02', '2022-07-24 20:50:02'),
(52, 14, '201521', 2, 20000, 43, '2022-07-24 20:50:02', '2022-07-24 20:50:02'),
(53, 15, '213921', 4, 35000, 43, '2022-07-25 12:02:38', '2022-07-25 12:02:38'),
(54, 16, '213932', 4, 40000, 44, '2022-07-25 12:02:48', '2022-07-25 12:02:48'),
(55, 17, '245140', 20, 100000, 43, '2022-07-25 12:13:26', '2022-07-25 12:13:26'),
(56, 18, '198340', 1, 20000, 41, '2022-07-26 02:42:05', '2022-07-26 02:42:05'),
(57, 18, '198339', 1, 20000, 41, '2022-07-26 02:42:05', '2022-07-26 02:42:05'),
(58, 18, '361940', 2, 40000, 41, '2022-07-26 02:42:05', '2022-07-26 02:42:05'),
(59, 18, '361932', 2, 35000, 41, '2022-07-26 02:42:05', '2022-07-26 02:42:05'),
(60, 18, '372632', 2, 25000, 41, '2022-07-26 02:42:05', '2022-07-26 02:42:05'),
(61, 18, '372624', 2, 20000, 41, '2022-07-26 02:42:05', '2022-07-26 02:42:05'),
(62, 19, '198340', 1, 20000, 44, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(63, 19, '198339', 1, 20000, 44, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(64, 19, '361940', 2, 40000, 44, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(65, 19, '361932', 2, 35000, 44, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(66, 19, '372632', 2, 25000, 44, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(67, 19, '372624', 2, 20000, 44, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(68, 20, '198340', 1, 20000, 43, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(69, 20, '198339', 1, 20000, 43, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(70, 20, '361940', 2, 40000, 43, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(71, 20, '361932', 2, 35000, 43, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(72, 20, '372632', 2, 25000, 43, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(73, 20, '372624', 2, 20000, 43, '2022-07-26 02:42:06', '2022-07-26 02:42:06'),
(74, 21, '198340', 1, 20000, 42, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(75, 22, '198340', 1, 20000, 39, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(76, 21, '198338', 1, 20000, 42, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(77, 22, '198339', 1, 20000, 39, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(78, 21, '361940', 2, 40000, 42, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(79, 22, '361940', 2, 40000, 39, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(80, 21, '361932', 2, 35000, 42, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(81, 21, '372632', 2, 25000, 42, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(82, 21, '372624', 2, 20000, 42, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(83, 22, '361932', 2, 35000, 39, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(84, 22, '372632', 2, 25000, 39, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(85, 22, '372624', 2, 20000, 39, '2022-07-26 02:42:10', '2022-07-26 02:42:10'),
(86, 23, '198340', 1, 20000, 22, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(87, 24, '198340', 1, 20000, 19, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(88, 23, '198339', 1, 20000, 22, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(89, 24, '198339', 1, 20000, 19, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(90, 23, '361940', 2, 40000, 22, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(91, 24, '361940', 2, 40000, 19, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(92, 23, '361932', 2, 35000, 22, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(93, 23, '372632', 2, 25000, 22, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(94, 24, '361932', 2, 35000, 19, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(95, 23, '372624', 2, 20000, 22, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(96, 24, '372632', 2, 25000, 19, '2022-07-26 02:42:11', '2022-07-26 02:42:11'),
(97, 24, '372624', 2, 20000, 19, '2022-07-26 02:42:11', '2022-07-26 02:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_url_produk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_category` int(11) NOT NULL,
  `desktripsi_produk` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `nama_produk`, `gambar_url_produk`, `tag`, `id_category`, `desktripsi_produk`, `created_at`, `updated_at`) VALUES
(1925, 'Sancu Fingerboy Kuning', 'produk/thumbnail/aSM6CEb6ds1mZpFgrZLTk6M5KjvT2F1aqfyWZNyD.jpg', NULL, 1, NULL, '2022-07-22 19:13:23', '2022-07-22 19:13:23'),
(1951, 'Pretty Turki', 'produk/thumbnail/ZHXdO5vxyrVEA5RnKZv47lEqXbfSilbFeYyxNuwW.jpg', NULL, 3, NULL, '2022-07-18 20:36:04', '2022-07-18 20:36:04'),
(1983, 'Pretty Flat Kuning', 'produk/thumbnail/q9L0vxDkLmUYIWz5fx5wCm5Z9s7WPUKt9jr8253b.jpg', NULL, 3, NULL, '2022-07-18 20:30:04', '2022-07-18 20:30:04'),
(2015, 'Boncu TPR Batman', 'produk/thumbnail/Dx4woiSsneNz4BFVBRRMPbeuT49Ur6kc8LH2bAyu.jpg', NULL, 2, NULL, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
(2139, 'Sancu Udin Idin', 'produk/thumbnail/1vpX0M7quBZjgPryQHA9mBsCj35pQrhyezL61v85.jpg', NULL, 1, NULL, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
(2245, 'Sancu Baby Girl Pink', 'produk/thumbnail/lYosXGipQuV2h9Ybl8mr0jhSNfGNnsfNJLu1oNWz.jpg', NULL, 1, NULL, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
(2451, 'Xtreme Denim Coklat', 'produk/thumbnail/A6J6ShUYLUGN9JsqxqJf2SSJwAL1c3dUF8YR270n.jpg', NULL, 4, NULL, '2022-07-21 18:58:13', '2022-07-21 18:58:13'),
(3619, 'Sancu Princess', 'produk/thumbnail/A488Hp200mtmAIZN1cH0kSGuw6UN2O9rlsbJNeUZ.jpg', NULL, 1, NULL, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
(3662, 'Xtreme Jepit Orange', 'produk/thumbnail/Tw4wpiwc9cI8Ub58JqZTP8JfqlTiBEFsxT0TTVvk.jpg', NULL, 4, NULL, '2022-07-21 18:57:17', '2022-07-21 18:57:17'),
(3726, 'Boncu TPR Bumblebee', 'produk/thumbnail/vGTi6XgThi6WUHRrz7p9cPkjOqnTXvZhiWNGEvak.jpg', NULL, 2, NULL, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
(4102, 'Xtreme Gunung Merah', 'produk/thumbnail/P85czaWnKKiRVfutuAvdpyzguYuzfUWtQu37BkDL.jpg', NULL, 4, NULL, '2022-07-21 18:56:28', '2022-07-21 18:56:28'),
(4691, 'Sancu Robot Merah', 'produk/thumbnail/umnuROzzAFVR4Sdpk6G6SOLHIirGX5FiJlguLtnK.jpg', NULL, 1, NULL, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
(5381, 'Pretty Polos Merah', 'produk/thumbnail/YEzCaekmelJpVV7S6t7ysvKYWiagDCDMdWYH2QEz.jpg', NULL, 3, NULL, '2022-07-18 20:31:06', '2022-07-18 20:31:06'),
(5596, 'Boncu TPR Ironman', 'produk/thumbnail/nhBDFQnbfU1YTdoPwi8jgzC3ZYxjAk4iB19odP45.jpg', NULL, 2, NULL, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
(5676, 'Pretty Rainbow Biru', 'produk/thumbnail/8JMpKrQaltVpH23ofx6OTv3ucHcSDozBfcTKB2C3.jpg', NULL, 3, NULL, '2022-07-18 20:32:10', '2022-07-18 20:32:10'),
(6482, 'Jaring Xtreme', 'produk/thumbnail/CkTj0W9R4LWkjMXfwFu08DYDzJVYKkJkR2xN8ymM.jpg', NULL, 5, NULL, '2022-07-21 19:01:03', '2022-07-21 19:01:03'),
(7018, 'Brosur Sancu', 'produk/thumbnail/s5flG5MAX4L4NJi89RT6f53icOzYx4OMjtqqznQ1.jpg', NULL, 5, NULL, '2022-07-21 19:00:08', '2022-07-21 19:00:08'),
(7121, 'Xtreme 3 Warna Coklat', 'produk/thumbnail/LmOuXcQsQACIuQ6Uv57CITUUtszVBOhUrda9YYnm.jpg', NULL, 4, NULL, '2022-07-21 18:59:01', '2022-07-21 18:59:01'),
(7420, 'Boncu TPR Spider', 'produk/thumbnail/rjiWB16PuE4MmstedOMH8Ozc3fXSU6w5XLDf9FmH.jpg', NULL, 2, NULL, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
(8343, 'Boncu TPR Hulk', 'produk/thumbnail/sK43ZqSJgwcSj01I99xpS52N5moDFs5mCMF50TjZ.jpg', NULL, 2, NULL, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
(9802, 'Pretty Rainbow Merah', 'produk/thumbnail/Ue4S4iRShJzqbpM7aIm2eLyvbXBLoYNZphF8buSb.jpg', NULL, 3, NULL, '2022-07-18 20:33:43', '2022-07-18 20:33:43'),
(9922, 'Sancu Spidi', 'produk/thumbnail/pN1q3zBU332PoRDoabQmyPnrz1IcbZ7uBk8vz8BW.jpg', NULL, 1, NULL, '2022-07-18 20:03:51', '2022-07-18 20:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `produk_details`
--

CREATE TABLE `produk_details` (
  `id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produk` int(11) NOT NULL,
  `size` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk_details`
--

INSERT INTO `produk_details` (`id`, `id_produk`, `size`, `jumlah_stok`, `harga_produk`, `berat`, `created_at`, `updated_at`) VALUES
('192521', 1925, '21', 5, 45000, 900, '2022-07-22 19:13:23', '2022-07-22 19:13:23'),
('192524', 1925, '24', 0, 45000, 900, '2022-07-22 19:13:23', '2022-07-22 19:13:23'),
('192528', 1925, '28', 7, 45000, 900, '2022-07-22 19:13:23', '2022-07-22 19:13:23'),
('195134', 1951, '34', 10, 20000, 300, '2022-07-18 20:36:04', '2022-07-18 20:36:04'),
('195135', 1951, '35', 10, 20000, 300, '2022-07-18 20:36:04', '2022-07-18 20:36:04'),
('195136', 1951, '36', 0, 20000, 300, '2022-07-18 20:36:04', '2022-07-18 20:36:04'),
('195137', 1951, '37', 10, 20000, 300, '2022-07-18 20:36:04', '2022-07-18 20:36:04'),
('195138', 1951, '38', 10, 20000, 300, '2022-07-18 20:36:04', '2022-07-18 20:36:04'),
('195139', 1951, '39', 0, 20000, 300, '2022-07-18 20:36:04', '2022-07-18 20:36:04'),
('195140', 1951, '40', 0, 20000, 300, '2022-07-18 20:36:04', '2022-07-18 20:36:04'),
('198334', 1983, '34', 8, 20000, 350, '2022-07-18 20:30:04', '2022-07-18 20:30:04'),
('198335', 1983, '35', 5, 20000, 350, '2022-07-18 20:30:04', '2022-07-18 20:30:04'),
('198336', 1983, '36', 0, 20000, 350, '2022-07-18 20:30:04', '2022-07-18 20:30:04'),
('198337', 1983, '37', 0, 20000, 350, '2022-07-18 20:30:04', '2022-07-18 20:30:04'),
('198338', 1983, '38', 9, 20000, 350, '2022-07-18 20:30:04', '2022-07-18 20:30:04'),
('198339', 1983, '39', 14, 20000, 350, '2022-07-18 20:30:04', '2022-07-18 20:30:04'),
('198340', 1983, '40', 8, 20000, 350, '2022-07-18 20:30:04', '2022-07-18 20:30:04'),
('201521', 2015, '21', 0, 20000, 250, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
('201524', 2015, '24', 34, 20000, 250, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
('201528', 2015, '28', 4, 20000, 250, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
('201530', 2015, '30', 7, 25000, 250, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
('201532', 2015, '32', 17, 25000, 250, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
('201534', 2015, '34', 10, 25000, 250, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
('201536', 2015, '36', 12, 25000, 250, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
('201538', 2015, '38', 0, 30000, 250, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
('201540', 2015, '40', 0, 30000, 250, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
('201542', 2015, '42', 0, 30000, 250, '2022-07-18 20:07:43', '2022-07-18 20:07:43'),
('213921', 2139, '21', 0, 35000, 300, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
('213924', 2139, '24', 0, 35000, 300, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
('213928', 2139, '28', 0, 35000, 300, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
('213930', 2139, '30', 0, 40000, 300, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
('213932', 2139, '32', 36, 40000, 300, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
('213934', 2139, '34', 0, 40000, 300, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
('213936', 2139, '36', 3, 40000, 300, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
('213938', 2139, '38', 18, 45000, 300, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
('213940', 2139, '40', 0, 45000, 300, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
('213942', 2139, '42', 0, 45000, 300, '2022-07-18 20:05:30', '2022-07-18 20:05:30'),
('224521', 2245, '21', 5, 30000, 300, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
('224524', 2245, '24', 12, 30000, 300, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
('224528', 2245, '28', 6, 30000, 300, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
('224530', 2245, '30', 10, 35000, 300, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
('224532', 2245, '32', 0, 35000, 300, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
('224534', 2245, '34', 0, 35000, 300, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
('224536', 2245, '36', 18, 35000, 300, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
('224538', 2245, '38', 18, 40000, 300, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
('224540', 2245, '40', 0, 40000, 300, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
('224542', 2245, '42', 0, 40000, 300, '2022-07-18 19:58:15', '2022-07-18 19:58:15'),
('245138', 2451, '38', 0, 100000, 500, '2022-07-21 18:58:13', '2022-07-21 18:58:13'),
('245139', 2451, '39', 0, 100000, 500, '2022-07-21 18:58:13', '2022-07-21 18:58:13'),
('245140', 2451, '40', 0, 100000, 500, '2022-07-21 18:58:13', '2022-07-21 18:58:13'),
('245141', 2451, '41', 0, 100000, 500, '2022-07-21 18:58:13', '2022-07-21 18:58:13'),
('245142', 2451, '42', 15, 100000, 500, '2022-07-21 18:58:13', '2022-07-21 18:58:13'),
('245143', 2451, '43', 0, 100000, 500, '2022-07-21 18:58:13', '2022-07-21 18:58:13'),
('361921', 3619, '21', 31, 30000, 300, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
('361924', 3619, '24', 11, 30000, 300, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
('361928', 3619, '28', 0, 30000, 300, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
('361930', 3619, '30', 10, 35000, 300, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
('361932', 3619, '32', 6, 35000, 300, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
('361934', 3619, '34', 23, 35000, 300, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
('361936', 3619, '36', 0, 35000, 300, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
('361938', 3619, '38', 0, 40000, 300, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
('361940', 3619, '40', 24, 40000, 300, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
('361942', 3619, '42', 0, 40000, 300, '2022-07-18 20:00:26', '2022-07-18 20:00:26'),
('366238', 3662, '38', 20, 100000, 500, '2022-07-21 18:57:17', '2022-07-21 18:57:17'),
('366239', 3662, '39', 20, 100000, 500, '2022-07-21 18:57:17', '2022-07-21 18:57:17'),
('366240', 3662, '40', 20, 100000, 500, '2022-07-21 18:57:17', '2022-07-21 18:57:17'),
('366241', 3662, '41', 20, 100000, 500, '2022-07-21 18:57:17', '2022-07-21 18:57:17'),
('366242', 3662, '42', 20, 100000, 500, '2022-07-21 18:57:17', '2022-07-21 18:57:17'),
('366243', 3662, '43', 20, 100000, 500, '2022-07-21 18:57:17', '2022-07-21 18:57:17'),
('372621', 3726, '21', 10, 20000, 300, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
('372624', 3726, '24', 11, 20000, 300, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
('372628', 3726, '28', 7, 20000, 300, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
('372630', 3726, '30', 6, 25000, 300, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
('372632', 3726, '32', 34, 25000, 300, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
('372634', 3726, '34', 31, 25000, 300, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
('372636', 3726, '36', 1, 25000, 300, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
('372638', 3726, '38', 0, 30000, 300, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
('372640', 3726, '40', 0, 30000, 300, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
('372642', 3726, '42', 0, 30000, 300, '2022-07-18 20:24:25', '2022-07-18 20:24:25'),
('410238', 4102, '38', 10, 120000, 500, '2022-07-21 18:56:28', '2022-07-21 18:56:28'),
('410239', 4102, '39', 8, 120000, 500, '2022-07-21 18:56:28', '2022-07-21 18:56:28'),
('410240', 4102, '40', 10, 120000, 500, '2022-07-21 18:56:28', '2022-07-21 18:56:28'),
('410241', 4102, '41', 10, 120000, 500, '2022-07-21 18:56:28', '2022-07-21 18:56:28'),
('410242', 4102, '42', 8, 120000, 500, '2022-07-21 18:56:28', '2022-07-21 18:56:28'),
('410243', 4102, '43', 10, 120000, 500, '2022-07-21 18:56:28', '2022-07-21 18:56:28'),
('469121', 4691, '21', 30, 30000, 300, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
('469124', 4691, '24', 0, 30000, 300, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
('469128', 4691, '28', 0, 30000, 300, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
('469130', 4691, '30', 0, 35000, 300, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
('469132', 4691, '32', 30, 35000, 300, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
('469134', 4691, '34', 20, 35000, 300, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
('469136', 4691, '36', 15, 35000, 300, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
('469138', 4691, '38', 0, 40000, 300, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
('469140', 4691, '40', 0, 40000, 300, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
('469142', 4691, '42', 0, 40000, 300, '2022-07-18 20:02:04', '2022-07-18 20:02:04'),
('538134', 5381, '34', 10, 20000, 350, '2022-07-18 20:31:06', '2022-07-18 20:31:06'),
('538135', 5381, '35', 8, 20000, 350, '2022-07-18 20:31:06', '2022-07-18 20:31:06'),
('538136', 5381, '36', 10, 20000, 350, '2022-07-18 20:31:06', '2022-07-18 20:31:06'),
('538137', 5381, '37', 0, 20000, 350, '2022-07-18 20:31:06', '2022-07-18 20:31:06'),
('538138', 5381, '38', 10, 20000, 350, '2022-07-18 20:31:06', '2022-07-18 20:31:06'),
('538139', 5381, '39', 10, 20000, 350, '2022-07-18 20:31:06', '2022-07-18 20:31:06'),
('538140', 5381, '40', 0, 20000, 350, '2022-07-18 20:31:06', '2022-07-18 20:31:06'),
('559621', 5596, '21', 15, 20000, 300, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
('559624', 5596, '24', 18, 20000, 300, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
('559628', 5596, '28', 4, 20000, 300, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
('559630', 5596, '30', 8, 25000, 300, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
('559632', 5596, '32', 11, 25000, 300, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
('559634', 5596, '34', 3, 25000, 300, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
('559636', 5596, '36', 41, 25000, 300, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
('559638', 5596, '38', 0, 30000, 300, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
('559640', 5596, '40', 0, 30000, 300, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
('559642', 5596, '42', 0, 30000, 300, '2022-07-18 20:27:05', '2022-07-18 20:27:05'),
('567634', 5676, '34', 20, 20000, 350, '2022-07-18 20:32:10', '2022-07-18 20:32:10'),
('567635', 5676, '35', 20, 20000, 350, '2022-07-18 20:32:10', '2022-07-18 20:32:10'),
('567636', 5676, '36', 20, 20000, 350, '2022-07-18 20:32:10', '2022-07-18 20:32:10'),
('567637', 5676, '37', 0, 20000, 350, '2022-07-18 20:32:10', '2022-07-18 20:32:10'),
('567638', 5676, '38', 0, 20000, 350, '2022-07-18 20:32:10', '2022-07-18 20:32:10'),
('567639', 5676, '39', 0, 20000, 350, '2022-07-18 20:32:10', '2022-07-18 20:32:10'),
('567640', 5676, '40', 0, 20000, 350, '2022-07-18 20:32:10', '2022-07-18 20:32:10'),
('6482L', 6482, 'L', 300, 1000, 1, '2022-07-21 19:01:03', '2022-07-21 19:01:03'),
('6482M', 6482, 'M', 1000, 1000, 1, '2022-07-21 19:01:03', '2022-07-21 19:01:03'),
('6482S', 6482, 'S', 3000, 1000, 1, '2022-07-21 19:01:03', '2022-07-21 19:01:03'),
('7018A4', 7018, 'A4', 5000, 200, 1, '2022-07-21 19:00:08', '2022-07-21 19:00:08'),
('712138', 7121, '38', 10, 100000, 500, '2022-07-21 18:59:01', '2022-07-21 18:59:01'),
('712139', 7121, '39', 0, 100000, 500, '2022-07-21 18:59:01', '2022-07-21 18:59:01'),
('712140', 7121, '40', 10, 100000, 500, '2022-07-21 18:59:01', '2022-07-21 18:59:01'),
('712141', 7121, '41', 10, 100000, 500, '2022-07-21 18:59:01', '2022-07-21 18:59:01'),
('712142', 7121, '42', 0, 100000, 500, '2022-07-21 18:59:01', '2022-07-21 18:59:01'),
('712143', 7121, '43', 10, 100000, 500, '2022-07-21 18:59:01', '2022-07-21 18:59:01'),
('742021', 7420, '21', 10, 20000, 300, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
('742024', 7420, '24', 22, 20000, 300, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
('742028', 7420, '28', 11, 20000, 300, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
('742030', 7420, '30', 0, 25000, 300, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
('742032', 7420, '32', 33, 25000, 300, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
('742034', 7420, '34', 44, 25000, 300, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
('742036', 7420, '36', 12, 25000, 300, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
('742038', 7420, '38', 0, 30000, 300, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
('742040', 7420, '40', 0, 30000, 300, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
('742041', 7420, '41', 0, 30000, 300, '2022-07-18 20:28:10', '2022-07-18 20:28:10'),
('834321', 8343, '21', 0, 20000, 300, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
('834324', 8343, '24', 0, 20000, 300, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
('834328', 8343, '28', 5, 20000, 300, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
('834330', 8343, '30', 0, 25000, 300, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
('834332', 8343, '32', 10, 25000, 300, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
('834334', 8343, '34', 20, 25000, 300, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
('834336', 8343, '36', 15, 25000, 300, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
('834338', 8343, '38', 0, 30000, 300, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
('834340', 8343, '40', 0, 30000, 300, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
('834341', 8343, '41', 0, 30000, 300, '2022-07-18 20:25:45', '2022-07-18 20:25:45'),
('980234', 9802, '34', 10, 20000, 350, '2022-07-18 20:33:43', '2022-07-18 20:33:43'),
('980235', 9802, '35', 10, 20000, 350, '2022-07-18 20:33:43', '2022-07-18 20:33:43'),
('980236', 9802, '36', 0, 20000, 350, '2022-07-18 20:33:43', '2022-07-18 20:33:43'),
('980237', 9802, '37', 10, 20000, 350, '2022-07-18 20:33:43', '2022-07-18 20:33:43'),
('980238', 9802, '38', 10, 20000, 350, '2022-07-18 20:33:43', '2022-07-18 20:33:43'),
('980239', 9802, '39', 0, 20000, 350, '2022-07-18 20:33:43', '2022-07-18 20:33:43'),
('980240', 9802, '40', 0, 20000, 350, '2022-07-18 20:33:43', '2022-07-18 20:33:43'),
('992221', 9922, '21', 50, 30000, 300, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
('992224', 9922, '24', 10, 30000, 300, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
('992228', 9922, '28', 13, 30000, 300, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
('992230', 9922, '30', 13, 35000, 300, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
('992232', 9922, '32', 60, 35000, 300, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
('992234', 9922, '34', 23, 35000, 300, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
('992236', 9922, '36', 7, 35000, 300, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
('992238', 9922, '38', 11, 40000, 300, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
('992240', 9922, '40', 0, 40000, 300, '2022-07-18 20:03:51', '2022-07-18 20:03:51'),
('992242', 9922, '42', 0, 40000, 300, '2022-07-18 20:03:51', '2022-07-18 20:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `slide_banners`
--

CREATE TABLE `slide_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide_banners`
--

INSERT INTO `slide_banners` (`id`, `path`, `posisi`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'assets/image/banner-sancu.jpg', 1, 'top home slide', '2021-11-24 17:00:00', '2021-11-24 17:00:00'),
(2, 'assets/image/banner-sancu-2.jpg', 1, 'top home slide', '2021-11-24 17:00:00', '2021-11-24 17:00:00'),
(3, 'assets/image/banner-sancu-3.jpg', 1, 'top home banner', '2021-11-24 17:00:00', '2021-11-24 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `status_pesanan`
--

CREATE TABLE `status_pesanan` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_pesanan`
--

INSERT INTO `status_pesanan` (`id`, `keterangan`) VALUES
(0, 'Dibatalkan'),
(1, 'Menunggu Ongkir'),
(2, 'Telah di Proses'),
(3, 'Konfirmasi Pembayaran'),
(4, 'Dikirim'),
(5, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `stoks`
--

CREATE TABLE `stoks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_produk` int(11) NOT NULL,
  `size` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role`, `telepon`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'sancuwebmaster@gmail.com', NULL, '$2y$10$A.LnrmNZVvAobf1C7ermmeIEm4ZiDKLycWM5BxklHv2BHhu0GlULy', 'admin', '62856112233440', '9d5to1BpaUj2hAaNz63mOXHuGgoI33jUi0OVG3c0K8csqSflBD', '2021-11-04 23:37:42', '2022-07-03 02:40:36'),
(15, 'Eko', 'sancukebonjeruk@yahoo.com', 'radeners@gmail.com', '0000-00-00 00:00:00', '$2y$10$xsRGfnLGzVRR6tkSYFyxwOCTq0zrY9fEQnb086cMleC6qHjqvqbRO', 'db', '6285770503309', '', '2021-11-04 23:37:42', '2022-07-21 20:23:36'),
(16, 'M. Ahmad', 'ahmadpud@yahoo.co.id', 'ahmadpud@yahoo.co.id', '0000-00-00 00:00:00', '$2y$10$mVrNH8WMpcfJ.UkDy/uueuO2PyMgQ2D3XlYMrJ4bFoRPBRnxgy5Jq', 'db', '6285733565282', '', '2021-11-04 23:37:42', '2022-07-13 19:56:05'),
(17, 'Yusup', 'yusupsumedang@yahoo.co.id', 'yusupsumedang@yahoo.co.id', '0000-00-00 00:00:00', '$2y$10$v0Aa03AVmWPoYGOTc28Mle/YElF9GvSveVadIrzJPNpwPt8iEtBlS', 'db', '6285221177874', '', '2021-11-04 23:37:42', '2022-07-13 19:56:19'),
(18, 'Surahmat', 'rahmat0181@yahoo.com', 'rahmat0181@yahoo.com', '0000-00-00 00:00:00', '$2y$10$hNrLoZkNlx2bWJ481J.0hulR4ZjD3YzsPl7DhKOFBzqcYInEisOsG', 'db', '6285716534598', '', '2021-11-04 23:37:42', '2022-07-13 19:56:36'),
(19, 'Arifin', 'are.fans@gmail.com', 'are.fans@gmail.com', '0000-00-00 00:00:00', '$2y$10$wr7HmtRM5JNwrGWf0QXz..9TXOSGzlAfQYqPhFGU7X6Rr/ICeAdA.', 'db', '6285885584459', '', '2021-11-04 23:37:42', '2022-07-13 19:56:51'),
(20, 'Agus', 'agus@sancu.com', 'agussancu2022@gmail.com', '0000-00-00 00:00:00', '$2y$10$pyq5i55HgA8xNnxhhYS0aemZiBW8Ojrkzu6LUATLWr74YwnClSlSC', 'db', '6281343906162', '', '2021-11-04 23:37:42', '2022-07-21 18:52:36'),
(21, 'ADNAN', 'mochamadadnan82@gmail.com', 'mochamadadnan82@gmail.com', '0000-00-00 00:00:00', '$2y$10$xdrXxFF7cdshy91CEBRm2.NVRrjqHqkba0ricYJEPBrpM5XolA/V6', 'db', '6281231155719', '', '2021-11-04 23:37:42', '2022-07-13 19:57:32'),
(22, 'Sudarmadi', 'sudarmadi141072@yahoo.com', 'sudarmadi141072@yahoo.com', '0000-00-00 00:00:00', '$2y$10$MqlGX/r0HXyTs94qB7o4OOEOS.JjpQK2gSWpNyMAiJimhnkZx01Lq', 'db', '6285780282333', '', '2021-11-04 23:37:42', '2022-07-13 19:57:51'),
(23, 'Ayukk', 'ayukk@sancu.com', 'ayukksancu@gmail.com', '0000-00-00 00:00:00', '$2y$10$erR58AP1cYo7UFcPCLTZbulfHKnZmw6lKWCLsnxy28VeWkhMbf8Pe', 'db', '6285715710038', '', '2021-11-04 23:37:42', '2022-07-17 21:36:18'),
(24, 'Rhiyant', 'rhiyant@sancu.com', 'rhiyantsancu@gmail.com', '0000-00-00 00:00:00', '$2y$10$pWNVoifRtJLzJGCGfqweXO/eMaJILqDZ2R4.5vOvqLyxzEwM0L75W', 'db', '6283830853885', '', '2021-11-04 23:37:42', '2022-07-17 21:16:34'),
(25, 'Agung', 'gungs21@yahoo.co.id', 'gungs21@yahoo.co.id', '0000-00-00 00:00:00', '$2y$10$z7ZRfBW5gvRFU5tbAlZKnuR/NPSRHase0qtgc9mQDpg.Xvc9PPoKq', 'db', '6287738052331', '', '2021-11-04 23:37:42', '2022-07-13 19:58:43'),
(26, 'Septin Lutfi', 'septinharyanto@gmail.com', 'septinharyanto@gmail.com', '0000-00-00 00:00:00', '$2y$10$wqsOLa3JWtsPffLXgSz9Y.w6dUdNV6PPhRcNfe1C9wFngFQTRh28u', 'db', '6281393014849', '', '2021-11-04 23:37:42', '2022-07-13 19:59:01'),
(27, 'M. Solichin', 'solichin@sancu.com', 'msolichinsancu@gmail.com', '0000-00-00 00:00:00', '$2y$10$M.b7UBwwPrQ2OkbKuNgUvOi.40H9pIA7LQMbFVqiGu0tW5294z.FO', 'db', '6285325083400', '', '2021-11-04 23:37:42', '2022-07-17 21:20:49'),
(28, 'Muhtadi', 'zakiynuri@gmail.com', 'zakiynuri@gmail.com', '0000-00-00 00:00:00', '$2y$10$vqInecIwELamKtBMOXz9zeZmqrScXbCVQtK3bmFc9ET.ZzoHpX076', 'db', '6285695852023', '', '2021-11-04 23:37:42', '2022-07-13 19:59:42'),
(29, 'Imam', 'imamkhomsah@yahoo.co.id', 'imamkhomsah@yahoo.co.id', '0000-00-00 00:00:00', '$2y$10$E4QVaTux/RBxX39EgmeBm.i3.o4/QvON2uuElaZCg2jAvbwdBC8H6', 'db', '6281280919644', '', '2021-11-04 23:37:42', '2022-07-13 19:59:59'),
(30, 'Iwan', 'my_fakhruddin@yahoo.com', 'my_fakhruddin@yahoo.com', '0000-00-00 00:00:00', '$2y$10$QWGQm9bWBKJqdxp/gfQvS.IXXtcqxu/vGBkK9rhBo1zAK2KsYKsy.', 'db', '6281390043310', '', '2021-11-04 23:37:42', '2022-07-13 20:00:16'),
(31, 'M Syukur', 'mohamad.syukur@rocketmail.com', 'mohamad.syukur@rocketmail.com', '0000-00-00 00:00:00', '$2y$10$wevD.nPi9jsMoq/LBqsRXeWUagIk77CFeN4LBRLdpipqOeuJOpEYO', 'db', '6281318127849', '', '2021-11-04 23:37:42', '2022-07-13 20:00:33'),
(32, 'Juan', 'juan@sancu.com', 'juansancu2022@gmail.com', '0000-00-00 00:00:00', '$2y$10$7C6DzWvN0rxVFJYOodEYsOH7n02hfSxCpCIjojQpI6X5.z6CGB3TW', 'db', '6285240680101', '', '2021-11-04 23:37:42', '2022-07-17 21:29:44'),
(33, 'Wanti', 'warsaya80@ymail.com', 'warsaya80@gmail.com', '0000-00-00 00:00:00', '$2y$10$9FQzDXVEgnb5DKCiOAy47uzICt9ExQUGlXtqLocyixh55FZ4j5QcC', 'db', '6281312224369', '', '2021-11-04 23:37:42', '2022-07-21 20:35:00'),
(34, 'M Suwandi', 'siaa1124@yahoo.com', 'siaa1124@yahoo.com', '0000-00-00 00:00:00', '$2y$10$1zedxDW2j/F3P4UysUdiVe3ShMYY7sx3bZsw3csw9Dye3y.Kr0cYK', 'db', '6281388063155', '', '2021-11-04 23:37:42', '2022-07-13 20:01:25'),
(35, 'Elang', 'elangyudantoro@yahoo.com', 'elangyudantoro@yahoo.com', '0000-00-00 00:00:00', '$2y$10$jHe/QmFH2.e9nnA9Y0RoTuipJYUGh9KMyZ0TEQ20vLzJ3VkWZbMBG', 'db', '628999158986', '', '2021-11-04 23:37:42', '2022-07-13 20:01:47'),
(36, 'Ramli', 'ramlisandiberata@hotmail.com', 'ramlisandiberata@hotmail.com', '0000-00-00 00:00:00', '$2y$10$orKVfagyvMN815RIpjzIWuCl.62uLYiFsTGTYkmIjrz30vfY9FDQ.', 'db', '6281213115335', '', '2021-11-04 23:37:42', '2022-07-13 20:02:05'),
(37, 'Nada', 'sururi_86@yahoo.co.id', 'sururi_86@yahoo.co.id', '0000-00-00 00:00:00', '$2y$10$mmmz5gvQwBqtC5YM44WwU.HUbmex/HtwKZpdYRMwg2ic3T.lf4Wi6', 'db', '628991787875', '', '2021-11-04 23:37:42', '2022-07-13 20:02:19'),
(38, 'Zaki', 'ahmadzaki.abrori@yahoo.com', 'ahmadzaki.abrori@yahoo.com', '0000-00-00 00:00:00', '$2y$10$OTObvIW2ekq81V2Y7.BnJ.4mRb619z2/LKj20ROErFBXFMEypc5R.', 'db', '6281268208785', '', '2021-11-04 23:37:42', '2022-07-13 20:02:29'),
(39, 'Hotimah', 'ntiems_neeh@yahoo.co.id', 'ntiems_neeh@yahoo.co.id', '0000-00-00 00:00:00', '$2y$10$FF./RYrF0IuUC9TM81YtAu8dQem7EcKpzCtyHn4V0E3kFh0Fwc5cG', 'db', '6283872216658', '', '2021-11-04 23:37:42', '2022-07-13 20:02:40'),
(40, 'Saiful', 'syaifulmujab1@gmail.com', 'syaifulmujab1@gmail.com', '0000-00-00 00:00:00', '$2y$10$wHdyUXi9SW4JNE0I1jtEPO3ULamfuUD0Hu91bB1YQzVqf4CuwFy2m', 'db', '6281326857333', '', '2021-11-04 23:37:42', '2022-07-13 20:02:51'),
(41, 'Dilli Juang', 'dily14juang@gmail.com', 'dily14juang@gmail.com', '0000-00-00 00:00:00', '$2y$10$V5f7m9hXvc04v82dn7xby.kDTcdqhKJXWZ1bunhVX33gjNKW9tw/G', 'db', '6282324774844', '', '2021-11-04 23:37:42', '2022-07-13 20:03:04'),
(42, 'Illa', 'kurniawati.illa@yahoo.co.id', 'kurniawati.illa@yahoo.co.id', '0000-00-00 00:00:00', '$2y$10$jVjw3UIU8V.Ur25t6dvjcOuBm5XAbWOni461PVGdWiz6jA9wNIzWa', 'db', '6285885595165', '', '2021-11-04 23:37:42', '2022-07-13 20:03:29'),
(43, 'Mal', 'mal@gmail.com', 'mal@gmail.com', NULL, '$2y$10$0LZK/f0ajMIrmMwYqwz6mOesLnjnZKbqOhnWVzcc9/r9DHyNHiCO2', 'db', '628565734259', NULL, '2022-07-18 19:39:43', '2022-07-18 19:39:43'),
(44, 'Firmansyah', 'firman@gmail.com', 'firman@gmail.com', NULL, '$2y$10$5gDAnraZkWa4GYw1YhaAueRfEGpY.NhD.iJj6ylSlsk9rfoXTPNee', 'db', '08112244557788', NULL, '2022-07-24 19:12:21', '2022-07-24 19:12:21'),
(45, 'Nadzir', 'sancu_17@yahoo.com', 'sancu_17@yahoo.com', NULL, '$2y$10$1OCYvrHqL.Zj50/LCguhwOs45Lv3iuG7OMpYnv9Lt21pY.2NqYy8y', 'db', '6281390155234', NULL, '2022-07-26 01:45:33', '2022-07-26 01:45:33'),
(46, 'Parno', 'parno.sanding@gmail.com', 'parno.sancu@gmail.com', NULL, '$2y$10$kWB5Y5czCN6zIACOPyDUHu.gfX0YFnS4zWYE/KYPNIvH6i5hZZvAS', 'db', '6281288898129', NULL, '2022-07-26 01:46:04', '2022-07-26 02:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `whatsapps`
--

CREATE TABLE `whatsapps` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `whatsapps`
--

INSERT INTO `whatsapps` (`id`, `nama`, `text`, `created_at`, `updated_at`) VALUES
(0, 'dibatalkan', 'Halo, order anda dibatalkan', NULL, '2022-06-19 18:46:10'),
(1, 'Menunggu Ongkir', 'menunggu ongkir ka', NULL, '2022-07-06 19:25:59'),
(2, 'Di proses', 'Bapak /Ibu, Orderan sdh kami proses, Silahkan bapak ibu melakukan pembayaran agar kami segera melanjutkan ke proses pengiriman.', NULL, '2022-07-06 19:25:59'),
(3, 'Konfirmasi pembayaran', 'pembayaran sedang kami validasi', NULL, '2022-07-06 19:25:59'),
(4, 'Dikirim', 'pesanan anda sudah dikirim silakan cek resi nya', NULL, '2022-07-06 19:25:59'),
(5, 'selesai', 'pesanan sudah selesai', NULL, '2022-07-06 19:25:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamats`
--
ALTER TABLE `alamats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kartu_stoks`
--
ALTER TABLE `kartu_stoks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_items`
--
ALTER TABLE `log_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_details`
--
ALTER TABLE `produk_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_banners`
--
ALTER TABLE `slide_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_pesanan`
--
ALTER TABLE `status_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stoks`
--
ALTER TABLE `stoks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whatsapps`
--
ALTER TABLE `whatsapps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamats`
--
ALTER TABLE `alamats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kartu_stoks`
--
ALTER TABLE `kartu_stoks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT for table `log_items`
--
ALTER TABLE `log_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9923;

--
-- AUTO_INCREMENT for table `slide_banners`
--
ALTER TABLE `slide_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stoks`
--
ALTER TABLE `stoks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
