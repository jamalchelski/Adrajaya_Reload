-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 01:46 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `advices`
--

CREATE TABLE `advices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advices`
--

INSERT INTO `advices` (`id`, `nama`, `email`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'Moch Nur Jamalludin', 'admin@gmail.com', 'pesan pertama', '2020-03-31 21:36:17', '2020-03-31 21:36:17'),
(2, 'Wirangga', 'admin@gmail.com', 'asasxax', '2020-03-31 22:06:30', '2020-03-31 22:06:30'),
(3, 'Moch Nur Jamalludin', 'admin@gmail.com', 'semoga suksess', '2020-03-31 22:14:49', '2020-03-31 22:14:49'),
(4, 'Moch Nur Jamalludin', 'adminss@gmail.com', 'fffffff', '2020-04-01 05:53:14', '2020-04-01 05:53:14'),
(5, 'Moch Nur Jamalludin', 'admin@gmail.com', 'hello world', '2020-04-01 21:40:51', '2020-04-01 21:40:51'),
(6, 'Wirangga', 'admin@gmail.com', 'jakdjkadjkadjkajk', '2020-04-01 21:44:24', '2020-04-01 21:44:24'),
(7, 'Moch Nur Jamalludin saddada', 'user@gmail.com', 'hallo dunia', '2020-04-01 21:45:50', '2020-04-01 21:45:50'),
(8, 'Moch Nur Jamalludin saddada', 'admin@gmail.com', 'adadadadada', '2020-04-01 21:56:12', '2020-04-01 21:56:12'),
(9, 'Wirangga', 'ifista201522035@gmail.com', 'acacacca', '2020-04-01 21:57:01', '2020-04-01 21:57:01'),
(10, 'Moch Nur Jamalludin saddada', 'cacac@gmail.com', 'ahfjafksjkbc', '2020-04-01 22:00:46', '2020-04-01 22:00:46'),
(11, 'Wirangga', 'jamalchelski@gmail.com', 'adadad', '2020-04-01 22:01:37', '2020-04-01 22:01:37'),
(12, 'Moch Nur Jamalludin saddada', 'axax@gmail.com', 'ajkhakkjckJKHKJ', '2020-04-01 22:02:01', '2020-04-01 22:02:01'),
(13, 'Wirangga', 'admin@gmail.com', 'adadd', '2020-04-01 22:02:28', '2020-04-01 22:02:28'),
(14, 'Wirangga', 'admin@gmail.com', 'acacacacsas', '2020-04-02 17:32:37', '2020-04-02 17:32:37'),
(15, 'Moch Nur Jamalludin', 'ifista201522035@gmail.com', 'dahjdhajhdjahdhajhdjahdjahskhajkhjka', '2020-04-02 17:54:10', '2020-04-02 17:54:10'),
(16, 'Moch Nur Jamalludin', 'jamalchelski942015@gmail.com', 'asadasadasxazxsasadd', '2020-04-02 17:54:47', '2020-04-02 17:54:47'),
(17, 'Wirangga', 'czczcz@gmail.com', 'jscacj', '2020-04-04 10:14:36', '2020-04-04 10:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `asuransis`
--

CREATE TABLE `asuransis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `tipe`, `data`, `link`, `created_at`, `updated_at`) VALUES
(1, 'TELP / SMS', '085794927795', '', NULL, NULL),
(2, 'WhatsApp', '6282128803628', 'https://api.whatsapp.com/send?phone=6282128803628', NULL, NULL),
(3, 'Telegram', '@csadrajaya', 'https://telegram.me/csadrajaya', NULL, NULL),
(4, 'Telegram', '@admadrajaya', 'https://telegram.me/admadrajaya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ecommerces`
--

CREATE TABLE `ecommerces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ecommerces`
--

INSERT INTO `ecommerces` (`id`, `kode`, `fiture`, `img`, `created_at`, `updated_at`) VALUES
(1, 'EC1', 'ALI EXPRESS', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585708749/adrajaya/vendor/ecommerce/1_aliexpress_iypi1k.png', NULL, NULL),
(2, 'EC2', 'BLI-BLI', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585708749/adrajaya/vendor/ecommerce/1_blibli_nx5hav.png', NULL, NULL),
(3, 'EC3', 'BUKALAPAK', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585708749/adrajaya/vendor/ecommerce/1_bukalapak_e6vhr8.png', NULL, NULL),
(4, 'EC4', 'ELEVENIA', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585708749/adrajaya/vendor/ecommerce/1_elevenia_fjqzo5.png', NULL, NULL),
(5, 'EC5', 'JD.ID', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585708749/adrajaya/vendor/ecommerce/1_jdid_vy1fv4.png', NULL, NULL),
(6, 'EC6', 'LAZADA', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585708749/adrajaya/vendor/ecommerce/1_lazada_xmvnyc.png', NULL, NULL),
(7, 'EC7', 'OLX', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585708750/adrajaya/vendor/ecommerce/1_olx_n8gbhx.png', NULL, NULL),
(8, 'EC8', 'SHOPEE', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585708749/adrajaya/vendor/ecommerce/1_shopee_eqocia.png', NULL, NULL),
(9, 'EC9', 'TOKOPEDIA', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585708750/adrajaya/vendor/ecommerce/1_tokped_k5pjty.png', NULL, NULL),
(10, 'EC10', 'ZALORA', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585708750/adrajaya/vendor/ecommerce/1_zalora_pbk0yw.png', NULL, NULL),
(11, 'EC11', 'ZILINGGO', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585708750/adrajaya/vendor/ecommerce/1_zilinggo_ffiwii.png', NULL, NULL),
(12, 'EC12', 'AKULAKU', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585708750/adrajaya/vendor/ecommerce/akulaku_pdusyi.png', NULL, NULL),
(13, 'EC13', 'DANA RUPIAH', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585708913/adrajaya/vendor/ecommerce/dr_l0uhyr.png', NULL, NULL),
(14, 'EC14', 'JULO', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585708749/adrajaya/vendor/ecommerce/julo_z8v4gb.png', NULL, NULL),
(15, 'EC15', 'KREDIT PINTAR', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585708749/adrajaya/vendor/ecommerce/kp_ynxv84.png', NULL, NULL),
(16, 'EC16', 'KREDIVO', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585708912/adrajaya/vendor/ecommerce/kredivo_pyubqp.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fitures`
--

CREATE TABLE `fitures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_26_223322_create_advices_table', 1),
(5, '2020_03_27_172640_create_products_table', 1),
(6, '2020_03_27_200610_create_contacts_table', 1),
(7, '2020_03_30_193801_create_fitures_table', 1),
(8, '2020_03_30_202122_create_prabayars_table', 1),
(9, '2020_03_30_202359_create_pascabayars_table', 1),
(10, '2020_03_30_202454_create_topupsaldos_table', 1),
(11, '2020_03_30_202552_create_vouchergames_table', 1),
(12, '2020_03_30_202618_create_tvkabels_table', 1),
(13, '2020_03_30_202724_create_transferbanks_table', 1),
(14, '2020_03_30_202823_create_ecommerces_table', 1),
(15, '2020_03_30_202857_create_reservasis_table', 1),
(16, '2020_03_30_202925_create_asuransis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pascabayars`
--

CREATE TABLE `pascabayars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `prabayars`
--

CREATE TABLE `prabayars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prabayars`
--

INSERT INTO `prabayars` (`id`, `kode`, `fiture`, `img`, `created_at`, `updated_at`) VALUES
(1, 'PB1', 'PLN', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691340/adrajaya/vendor/pln_bi4ylp.png', NULL, NULL),
(2, 'PB2', 'TELKOM', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691341/adrajaya/vendor/telkom_hplne8.png', NULL, NULL),
(3, 'PB3', 'PDAM', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585694128/adrajaya/vendor/pdam_iihyai.png', NULL, NULL),
(4, 'PB4', 'BPJS KESEHATAN', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585694129/adrajaya/vendor/bpjs_rersrv.png', NULL, NULL),
(5, 'PB5', 'FIF GROUP', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691337/adrajaya/vendor/fif_e2hl75.png', NULL, NULL),
(6, 'PB6', 'BAF', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691343/adrajaya/vendor/baf_xojsqp.png', NULL, NULL),
(7, 'PB7', 'WOM FINANCE', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691341/adrajaya/vendor/wom_czfwr2.png', NULL, NULL),
(8, 'PB8', 'MEGA CENTRAL FINANCE', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691339/adrajaya/vendor/mcf_uqnbk3.png', NULL, NULL),
(9, 'PB9', 'MEGA AUTO FINANCE', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691338/adrajaya/vendor/maf_jx6oas.png', NULL, NULL),
(10, 'PB10', 'MEGA FINANCE', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691339/adrajaya/vendor/mega_f_bqkcf6.png', NULL, NULL),
(11, 'PB11', 'COLOMBIA FINANCE', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691337/adrajaya/vendor/columbia_f1dhd0.png', NULL, NULL),
(13, 'PBlain', 'Tagihan Lainnya', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585695673/adrajaya/vendor/pascabayar_rxdtzk.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `kode`, `keterangan`, `harga`, `status`, `created_at`, `updated_at`) VALUES
(1, 'AXBR1', 'BRONET 1GB 30HR', '18900', 'OPEN', '0000-00-00 00:00:00', NULL),
(2, 'AXRL1', 'WA+LINE+BBM MAX1GB 30HR', '18200', 'GANGGUAN', NULL, NULL),
(3, 'AXDBR2', 'BRONET 2GB 24JAM 30HR', '27300', 'OPEN', NULL, NULL),
(4, 'AXBR2', 'BRONET 2GB 30HR', '27300', 'OPEN', NULL, NULL),
(5, 'AXSOW2', 'BRONET 4GB OWSEM 1GB+1GB(4G) 30HR', '21400', 'OPEN', NULL, NULL),
(6, 'AXSOW3', 'BRONET 6GB OWSEM 4GB+2GB(4G) 30HR', '32200', 'OPEN', NULL, NULL),
(7, 'AXDR23', 'BRONET 10GB 15HR', '15100', 'OPEN', NULL, NULL),
(8, 'AXDR23A', 'BRONET 10GB 30HR', '30100', 'OPEN', NULL, NULL),
(9, 'AXDR2B', 'BRONET 20GB 30HR', '40100', 'OPEN', NULL, NULL),
(10, 'AXDR23C', 'BRONET 40GB 30HR', '45100', 'GANGGUAN', NULL, NULL),
(11, 'AXDR23D', 'BRONET 30GB+10GB(MALAM) 30HR', '50100', 'OPEN', NULL, NULL),
(12, 'AXDR23E', 'BRONET 30GB+15GB(MALAM) 30HR', '65100', 'OPEN', NULL, NULL),
(13, 'ADXR34', 'BRONET 10GB+1000SMS 7HR', '10120', 'OPEN', '2020-03-27 18:29:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservasis`
--

CREATE TABLE `reservasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topupsaldos`
--

CREATE TABLE `topupsaldos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topupsaldos`
--

INSERT INTO `topupsaldos` (`id`, `kode`, `fiture`, `img`, `created_at`, `updated_at`) VALUES
(1, 'TU1', 'SHOPEE PAY', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691340/adrajaya/vendor/shopee_pay_jvh1f6.png', NULL, NULL),
(2, 'TU2', 'GO-JEK', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585695997/adrajaya/vendor/GOJEK_alw1vl.png', NULL, NULL),
(3, 'TU3', 'GO-JEK DRIVER', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691337/adrajaya/vendor/GOJEK_D_fvmqro.png', NULL, NULL),
(4, 'TU4', 'GRAB', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585696114/adrajaya/vendor/GRAB_dax6ll.png', NULL, NULL),
(5, 'TU5', 'GRAB DRIVER', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691338/adrajaya/vendor/GRAB_D_nk2bch.png', NULL, NULL),
(6, 'TU6', 'OVO', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691339/adrajaya/vendor/ovo_am8evx.png', NULL, NULL),
(7, 'TU7', 'DANA', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691337/adrajaya/vendor/dana_smi7he.png', NULL, NULL),
(8, 'TU8', 'LINK AJA', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691338/adrajaya/vendor/linkaja_swhrbt.png', NULL, NULL),
(9, 'TU9', 'TIX ID', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691341/adrajaya/vendor/tix_fdtbcl.png', NULL, NULL),
(10, 'TU10', 'M-TIX', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691338/adrajaya/vendor/m_tix_vh0yap.png', NULL, NULL),
(11, 'TU11', 'TAPCASH BNI', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691341/adrajaya/vendor/tapcash_tliuwe.png', NULL, NULL),
(12, 'TU12', 'BRIZZI', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691344/adrajaya/vendor/brizzi_mc7pfk.png', NULL, NULL),
(13, 'TU13', 'E-MONEY MANDIRI', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691336/adrajaya/vendor/e_money_nqbgm8.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transferbanks`
--

CREATE TABLE `transferbanks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transferbanks`
--

INSERT INTO `transferbanks` (`id`, `kode`, `fiture`, `img`, `created_at`, `updated_at`) VALUES
(1, 'TR1', 'BANK ACEH', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704410/adrajaya/vendor/BANK-KOVENSIONAL/aceh_pyd3bm.png', NULL, NULL),
(2, 'TR2', 'BCA', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704410/adrajaya/vendor/BANK-KOVENSIONAL/bca_cxoina.png', NULL, NULL),
(3, 'TR3', 'BII', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704410/adrajaya/vendor/BANK-KOVENSIONAL/bii_wao5yq.png', NULL, NULL),
(4, 'TR4', 'BJB', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704410/adrajaya/vendor/BANK-KOVENSIONAL/bjb_dyzd1e.png', NULL, NULL),
(5, 'TR5', 'BNI', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704410/adrajaya/vendor/BANK-KOVENSIONAL/bni_xkvft5.png', NULL, NULL),
(6, 'TR6', 'BRI', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704410/adrajaya/vendor/BANK-KOVENSIONAL/bri_kbc1tr.png', NULL, NULL),
(7, 'TR7', 'BTN', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704410/adrajaya/vendor/BANK-KOVENSIONAL/btn_ioexxg.png', NULL, NULL),
(8, 'TR8', 'BTPN', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704410/adrajaya/vendor/BANK-KOVENSIONAL/btpn_viwcq4.png', NULL, NULL),
(9, 'TR9', 'BANK BUKOPIN', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704410/adrajaya/vendor/BANK-KOVENSIONAL/bukopin_kfegyp.png', NULL, NULL),
(10, 'TR10', 'CIMB NIAGA', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704410/adrajaya/vendor/BANK-KOVENSIONAL/cimb_q0afpn.png', NULL, NULL),
(11, 'TR11', 'CITIBANK', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704410/adrajaya/vendor/BANK-KOVENSIONAL/citibank_ckbvxd.png', NULL, NULL),
(12, 'TR12', 'DANAMON', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704411/adrajaya/vendor/BANK-KOVENSIONAL/danamon_dhbael.png', NULL, NULL),
(13, 'TR13', 'DBS', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704411/adrajaya/vendor/BANK-KOVENSIONAL/dbs_fyrtqy.png', NULL, NULL),
(14, 'TR14', 'MANDIRI', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704411/adrajaya/vendor/BANK-KOVENSIONAL/mandiri_yhdijv.png', NULL, NULL),
(15, 'TR15', 'MAYORA', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704409/adrajaya/vendor/BANK-KOVENSIONAL/mayora_ewexrv.png', NULL, NULL),
(16, 'TR16', 'BANK MEGA', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704409/adrajaya/vendor/BANK-KOVENSIONAL/mega_drtckz.png', NULL, NULL),
(17, 'TR17', 'MAYBANK', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704409/adrajaya/vendor/BANK-KOVENSIONAL/mybank_wxxftr.png', NULL, NULL),
(18, 'TR18', 'OCBC NISP', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704409/adrajaya/vendor/BANK-KOVENSIONAL/ocbc_aomfqu.png', NULL, NULL),
(19, 'TR19', 'PANIN BANK', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704409/adrajaya/vendor/BANK-KOVENSIONAL/panin_kw82ok.png', NULL, NULL),
(20, 'TR20', 'PERMATA BANK', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704409/adrajaya/vendor/BANK-KOVENSIONAL/permata_vrf5fm.png', NULL, NULL),
(21, 'TR21', 'BANK RIAUKEPRI', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704409/adrajaya/vendor/BANK-KOVENSIONAL/riau_drcvcx.png', NULL, NULL),
(22, 'TR22', 'BANK SAUDARA', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704409/adrajaya/vendor/BANK-KOVENSIONAL/saudara_lwuscx.png', NULL, NULL),
(23, 'TR23', 'BANK SINARMAS', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704409/adrajaya/vendor/BANK-KOVENSIONAL/sinarmas_bwpzwy.png', NULL, NULL),
(24, 'TR24', 'UOB', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704410/adrajaya/vendor/BANK-KOVENSIONAL/uob_womlyp.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transfersyas`
--

CREATE TABLE `transfersyas` (
  `id` int(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `fitur` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfersyas`
--

INSERT INTO `transfersyas` (`id`, `kode`, `fitur`, `img`) VALUES
(1, 'TRS1', 'BANK MEGA SYARIAH', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704336/adrajaya/vendor/BANK-SYARIAH/bank_mega_syar_nyug5e.png'),
(2, 'TRS2', 'BCA SYARIAH', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704336/adrajaya/vendor/BANK-SYARIAH/bca_syar_gom5fq.png'),
(3, 'TRS3', 'BANK BJB SYARIAH', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704336/adrajaya/vendor/BANK-SYARIAH/bjb_syar_czipys.png'),
(4, 'TRS4', 'BNI SYARIAH', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704336/adrajaya/vendor/BANK-SYARIAH/bni_syar_zyvgxr.png'),
(5, 'TRS5', 'BRI SYARIAH', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704336/adrajaya/vendor/BANK-SYARIAH/bri_syar_lrt6jg.png'),
(6, 'TRS6', 'BTN SYARIAH', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704336/adrajaya/vendor/BANK-SYARIAH/btn_syar_x8czfr.png'),
(7, 'TRS7', 'SYARIAH BTPN', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704336/adrajaya/vendor/BANK-SYARIAH/btpn_syar_vlkhqh.png'),
(8, 'TRS8', 'BUKOPIN SYARIAH', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704336/adrajaya/vendor/BANK-SYARIAH/bukopin_syar_byxwvn.png'),
(9, 'TRS9', 'MANDIRI SYARIAH', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704336/adrajaya/vendor/BANK-SYARIAH/mandiri_syar_tyv5gi.png'),
(10, 'TRS10', 'BANK MUAMALAT', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704336/adrajaya/vendor/BANK-SYARIAH/muamalat_xh5mpk.png'),
(11, 'TRS11', 'PERMATA SYARIAH', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585704336/adrajaya/vendor/BANK-SYARIAH/permata_syyar_q7exgc.png');

-- --------------------------------------------------------

--
-- Table structure for table `tvkabels`
--

CREATE TABLE `tvkabels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `telp`, `email`, `email_verified_at`, `password`, `alamat`, `referal`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'moch nur jamalludin', '089605526379', 'jamalchelski@gmail.com', NULL, '$2y$10$DFGltwnc8KerT4dPgMYHae7Jh3oeNmvzr9pi9aCazSSYT5uQO72TS', 'sumedang', 'adr123', NULL, '2020-03-30 13:42:10', '2020-03-30 13:42:10');

-- --------------------------------------------------------

--
-- Table structure for table `vouchergames`
--

CREATE TABLE `vouchergames` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vouchergames`
--

INSERT INTO `vouchergames` (`id`, `kode`, `fiture`, `img`, `created_at`, `updated_at`) VALUES
(1, 'GM1', 'MOBILE LEGENDS', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691339/adrajaya/vendor/ml_eh6poy.png', NULL, NULL),
(2, 'GM2', 'PUBG MOBILE', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691340/adrajaya/vendor/pubg_tlzya9.png', NULL, NULL),
(3, 'GM3', 'FREE FIRE', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691337/adrajaya/vendor/ff_argomy.png', NULL, NULL),
(4, 'GM4', 'RAGNAROK', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691340/adrajaya/vendor/ragnarok_hwxdf7.png', NULL, NULL),
(5, 'GM5', 'GARENA', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691337/adrajaya/vendor/garena_qwgqas.png', NULL, NULL),
(6, 'GM6', 'GEMSCOOL', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691338/adrajaya/vendor/gemscool_wf0yon.png', NULL, NULL),
(7, 'GM7', 'MEGAXUS', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691339/adrajaya/vendor/megaxus_pujpe1.png', NULL, NULL),
(8, 'GM8', 'LYTO', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691338/adrajaya/vendor/lyto_nd4nzq.png', NULL, NULL),
(9, 'GM9', 'DIGICASH', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691336/adrajaya/vendor/digicash_alahid.png', NULL, NULL),
(10, 'GM10', 'PLAYSTORE', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585691340/adrajaya/vendor/playstore_ok38qg.png', NULL, NULL),
(11, 'GM11', 'STEAM', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585698806/adrajaya/vendor/STEAM_znqr0m.png', NULL, NULL),
(12, 'GM12', 'WIFI.ID', 'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585698905/adrajaya/vendor/Wifi.id_bx3ogp.png', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advices`
--
ALTER TABLE `advices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asuransis`
--
ALTER TABLE `asuransis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecommerces`
--
ALTER TABLE `ecommerces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fitures`
--
ALTER TABLE `fitures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pascabayars`
--
ALTER TABLE `pascabayars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `prabayars`
--
ALTER TABLE `prabayars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasis`
--
ALTER TABLE `reservasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topupsaldos`
--
ALTER TABLE `topupsaldos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transferbanks`
--
ALTER TABLE `transferbanks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfersyas`
--
ALTER TABLE `transfersyas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tvkabels`
--
ALTER TABLE `tvkabels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_telp_unique` (`telp`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vouchergames`
--
ALTER TABLE `vouchergames`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advices`
--
ALTER TABLE `advices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `asuransis`
--
ALTER TABLE `asuransis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ecommerces`
--
ALTER TABLE `ecommerces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fitures`
--
ALTER TABLE `fitures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pascabayars`
--
ALTER TABLE `pascabayars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prabayars`
--
ALTER TABLE `prabayars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reservasis`
--
ALTER TABLE `reservasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topupsaldos`
--
ALTER TABLE `topupsaldos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transferbanks`
--
ALTER TABLE `transferbanks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `transfersyas`
--
ALTER TABLE `transfersyas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tvkabels`
--
ALTER TABLE `tvkabels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vouchergames`
--
ALTER TABLE `vouchergames`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
