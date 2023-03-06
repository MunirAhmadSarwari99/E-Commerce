-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 06:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--
CREATE DATABASE IF NOT EXISTS `ecommerce` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `ecommerce`;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(7, 3, 6, 1, '2023-02-23 11:52:25', '2023-03-02 18:27:42'),
(35, 3, 5, 1, '2023-03-02 18:11:54', '2023-03-02 18:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `created_at`, `updated_at`) VALUES
(1, 'Kadın', '2023-02-20 07:00:37', '2023-02-20 07:01:04'),
(2, 'Erkek', '2023-02-20 07:00:37', '2023-02-20 07:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `category_tags`
--

CREATE TABLE `category_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `child_id` int(10) UNSIGNED NOT NULL,
  `tagName` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_tags`
--

INSERT INTO `category_tags` (`id`, `child_id`, `tagName`, `created_at`, `updated_at`) VALUES
(1, 1, 'Elbise', '2023-02-20 09:02:18', '2023-02-20 09:14:30'),
(2, 1, 'Tişört', '2023-02-20 09:04:52', '2023-02-20 09:04:52'),
(3, 1, 'Gömlek', '2023-02-20 09:04:52', '2023-02-20 09:04:52'),
(4, 1, 'Kot Pantolon', '2023-02-20 09:04:52', '2023-02-20 09:04:52'),
(5, 1, 'Kot Ceket', '2023-02-20 09:04:52', '2023-02-20 09:04:52'),
(6, 1, 'Pantolon', '2023-02-20 09:04:52', '2023-02-20 09:04:52'),
(7, 1, 'Mont', '2023-02-20 09:04:52', '2023-02-20 09:04:52'),
(8, 1, 'Bluz', '2023-02-20 09:04:52', '2023-02-20 09:04:52'),
(9, 1, 'Ceket', '2023-02-20 09:04:52', '2023-02-20 09:04:52'),
(10, 1, 'Etek', '2023-02-20 09:04:52', '2023-02-20 09:04:52'),
(11, 1, 'Kazak', '2023-02-20 09:04:52', '2023-02-20 09:04:52'),
(12, 1, 'Tesettür', '2023-02-20 09:04:52', '2023-02-20 09:04:52'),
(14, 1, 'Büyük Beden', '2023-02-20 09:15:49', '2023-02-20 09:15:49'),
(15, 9, 'Tişört', '2023-02-20 09:18:40', '2023-02-20 09:18:40'),
(16, 9, 'Şort', '2023-02-20 09:18:40', '2023-02-20 09:18:40'),
(17, 9, 'Gömlek', '2023-02-20 09:18:40', '2023-02-20 09:18:40'),
(18, 9, 'Eşofman', '2023-02-20 09:18:40', '2023-02-20 09:18:40'),
(19, 9, 'Pantolon', '2023-02-20 09:18:40', '2023-02-20 09:18:40'),
(20, 9, 'Ceket', '2023-02-20 09:18:40', '2023-02-20 09:18:40'),
(21, 9, 'Kot Pantolon', '2023-02-20 09:18:40', '2023-02-20 09:18:40'),
(22, 9, 'Yelek', '2023-02-20 09:18:40', '2023-02-20 09:18:40'),
(23, 9, 'Kazak', '2023-02-20 09:18:40', '2023-02-20 09:18:40'),
(24, 9, 'Mont', '2023-02-20 09:18:40', '2023-02-20 09:18:40'),
(25, 9, 'Takım Elbise', '2023-02-20 09:18:40', '2023-02-20 09:18:40'),
(26, 9, 'Sweatshirt', '2023-02-20 09:18:40', '2023-02-20 09:18:40'),
(27, 9, 'Forma', '2023-02-20 09:18:40', '2023-02-20 09:18:40'),
(28, 2, 'Topuklu Ayakkabı', '2023-02-20 09:26:07', '2023-02-20 09:26:07'),
(29, 2, 'Sneaker', '2023-02-20 09:26:07', '2023-02-20 09:26:07'),
(30, 2, 'Günlük Ayakkabı', '2023-02-20 09:26:07', '2023-02-20 09:26:07'),
(31, 2, 'Babet', '2023-02-20 09:26:07', '2023-02-20 09:26:07'),
(32, 2, 'Sandalet', '2023-02-20 09:26:07', '2023-02-20 09:26:07'),
(33, 2, 'Bot', '2023-02-20 09:26:07', '2023-02-20 09:26:07'),
(34, 3, 'Çanta', '2023-02-20 09:28:07', '2023-02-20 09:28:07'),
(35, 3, 'Saat', '2023-02-20 09:28:07', '2023-02-20 09:28:07'),
(36, 3, 'Takı', '2023-02-20 09:28:07', '2023-02-20 09:28:07'),
(37, 3, 'Şapka', '2023-02-20 09:28:07', '2023-02-20 09:28:07'),
(38, 3, 'Cüzdan', '2023-02-20 09:28:07', '2023-02-20 09:28:07'),
(39, 4, 'Pijama Takımı', '2023-02-20 09:29:41', '2023-02-20 09:29:41'),
(40, 4, 'Gecelik', '2023-02-20 09:29:42', '2023-02-20 09:29:42'),
(41, 4, 'Sütyen', '2023-02-20 09:29:42', '2023-02-20 09:29:42'),
(42, 4, 'İç Çamaşırı Takımları', '2023-02-20 09:29:42', '2023-02-20 09:29:42'),
(43, 4, 'Fantezi Giyim', '2023-02-20 09:29:42', '2023-02-20 09:29:42'),
(44, 4, 'Çorap', '2023-02-20 09:29:42', '2023-02-20 09:29:42'),
(45, 5, 'Lüks Çanta', '2023-02-20 09:31:09', '2023-02-20 09:31:09'),
(46, 5, 'Lüks Giyim', '2023-02-20 09:31:09', '2023-02-20 09:31:09'),
(47, 5, 'Lüks Ayakkabı', '2023-02-20 09:31:09', '2023-02-20 09:31:09'),
(48, 5, 'Tasarım Giyim', '2023-02-20 09:31:09', '2023-02-20 09:31:09'),
(49, 5, 'Tasarım Ayakkabı', '2023-02-20 09:31:09', '2023-02-20 09:31:09'),
(50, 6, 'Parfüm', '2023-03-02 13:22:53', '2023-03-02 13:22:53'),
(51, 6, 'Göz Makyajı', '2023-03-02 13:22:53', '2023-03-02 13:22:53'),
(52, 6, 'Cilt Bakım', '2023-03-02 13:22:53', '2023-03-02 13:22:53'),
(53, 6, 'Saç Bakımı', '2023-03-02 13:22:53', '2023-03-02 13:22:53'),
(54, 6, 'Makyaj', '2023-03-02 13:22:53', '2023-03-02 13:22:53'),
(55, 6, 'Ağız Bakım', '2023-03-02 13:22:53', '2023-03-02 13:22:53'),
(56, 6, 'Cinsel Sağlık', '2023-03-02 13:22:53', '2023-03-02 13:22:53'),
(57, 6, 'Vücut Bakım', '2023-03-02 13:22:53', '2023-03-02 13:22:53'),
(58, 6, 'Hijyenik Ped', '2023-03-02 13:22:53', '2023-03-02 13:22:53'),
(59, 6, 'Duş Jeli & Kremleri', '2023-03-02 13:22:53', '2023-03-02 13:22:53'),
(60, 6, 'Epilasyon Ürünleri', '2023-03-02 13:22:53', '2023-03-02 13:22:53'),
(61, 6, 'Ruj', '2023-03-02 13:22:53', '2023-03-02 13:22:53'),
(62, 6, 'Güneş Kremi', '2023-03-02 13:22:53', '2023-03-02 13:22:53'),
(63, 8, 'Sweatshirt', '2023-03-02 13:27:26', '2023-03-02 13:27:26'),
(64, 8, 'Tişört', '2023-03-02 13:27:26', '2023-03-02 13:27:26'),
(65, 8, 'Spor Sütyeni', '2023-03-02 13:27:26', '2023-03-02 13:27:26'),
(66, 8, 'Tayt', '2023-03-02 13:27:26', '2023-03-02 13:27:26'),
(67, 8, 'Eşofman', '2023-03-02 13:27:26', '2023-03-02 13:27:26'),
(68, 8, 'Koşu Ayakkabısı', '2023-03-02 13:27:26', '2023-03-02 13:27:26'),
(69, 8, 'Spor Çantası', '2023-03-02 13:27:26', '2023-03-02 13:27:26'),
(70, 8, 'Spor Ekipmanları', '2023-03-02 13:27:26', '2023-03-02 13:27:26'),
(71, 8, 'Outdoor Ayakkabı', '2023-03-02 13:27:26', '2023-03-02 13:27:26'),
(72, 8, 'Kar Botu', '2023-03-02 13:27:26', '2023-03-02 13:27:26'),
(73, 8, 'Outdoor Ekipmanları', '2023-03-02 13:27:26', '2023-03-02 13:27:26'),
(74, 8, 'Sporcu Besinleri', '2023-03-02 13:27:26', '2023-03-02 13:27:26'),
(75, 8, 'Sporcu Aksesuarları', '2023-03-02 13:27:26', '2023-03-02 13:27:26'),
(76, 10, 'Spor Ayakkabı', '2023-03-02 13:31:38', '2023-03-02 13:31:38'),
(77, 10, 'Günlük Ayakkabı', '2023-03-02 13:31:38', '2023-03-02 13:31:38'),
(78, 10, 'Yürüyüş Ayakkabısı', '2023-03-02 13:31:38', '2023-03-02 13:31:38'),
(79, 10, 'Krampon', '2023-03-02 13:31:38', '2023-03-02 13:31:38'),
(80, 10, 'Sneaker', '2023-03-02 13:31:38', '2023-03-02 13:31:38'),
(81, 10, 'Klasik', '2023-03-02 13:31:38', '2023-03-02 13:31:38'),
(82, 10, 'Bot', '2023-03-02 13:31:38', '2023-03-02 13:31:38'),
(83, 11, 'Parfüm', '2023-03-02 13:32:59', '2023-03-02 13:32:59'),
(84, 11, 'Cinsel Sağlık', '2023-03-02 13:32:59', '2023-03-02 13:32:59'),
(85, 11, 'Tıraş Sonrası Ürünler', '2023-03-02 13:32:59', '2023-03-02 13:32:59'),
(86, 11, 'Tıraş Bıçağı', '2023-03-02 13:32:59', '2023-03-02 13:32:59'),
(87, 12, 'Saat', '2023-03-02 13:35:23', '2023-03-02 13:35:23'),
(88, 12, 'Güneş Gözlüğü', '2023-03-02 13:35:23', '2023-03-02 13:35:23'),
(89, 12, 'Cüzdan', '2023-03-02 13:35:23', '2023-03-02 13:35:23'),
(90, 12, 'Kemer', '2023-03-02 13:35:23', '2023-03-02 13:35:23'),
(91, 12, 'Çanta', '2023-03-02 13:35:23', '2023-03-02 13:35:23'),
(92, 12, 'Şapka', '2023-03-02 13:35:23', '2023-03-02 13:35:23'),
(93, 12, 'Bileklik', '2023-03-02 13:35:23', '2023-03-02 13:35:23'),
(94, 13, 'Boxer', '2023-03-02 13:36:42', '2023-03-02 13:36:42'),
(95, 13, 'Çorap', '2023-03-02 13:36:42', '2023-03-02 13:36:42'),
(96, 13, 'Pijama', '2023-03-02 13:36:42', '2023-03-02 13:36:42'),
(97, 13, 'Atlet', '2023-03-02 13:36:42', '2023-03-02 13:36:42'),
(98, 14, 'Eşofman', '2023-03-02 13:40:26', '2023-03-02 13:40:26'),
(99, 14, 'Spor Ayakkabı', '2023-03-02 13:40:26', '2023-03-02 13:40:26'),
(100, 14, 'T-shirt', '2023-03-02 13:40:26', '2023-03-02 13:40:26'),
(101, 14, 'Sweatshirt', '2023-03-02 13:40:26', '2023-03-02 13:40:26'),
(102, 14, 'Forma', '2023-03-02 13:40:26', '2023-03-02 13:40:26'),
(103, 14, 'Spor Çorap', '2023-03-02 13:40:26', '2023-03-02 13:40:26'),
(104, 14, 'Spor Giyim', '2023-03-02 13:40:26', '2023-03-02 13:40:26'),
(105, 14, 'Outdoor Ayakkabı', '2023-03-02 13:40:26', '2023-03-02 13:40:26'),
(106, 14, 'Outdoor Bot', '2023-03-02 13:40:26', '2023-03-02 13:40:26'),
(107, 14, 'Spor Ekipmanları', '2023-03-02 13:40:26', '2023-03-02 13:40:26'),
(108, 14, 'Outdoor Ekipmanları', '2023-03-02 13:40:26', '2023-03-02 13:40:26'),
(109, 14, 'Sporcu Besinleri', '2023-03-02 13:40:26', '2023-03-02 13:40:26'),
(110, 14, 'Sporcu Aksesuarları', '2023-03-02 13:40:26', '2023-03-02 13:40:26'),
(111, 15, 'Tıraş Makinesi', '2023-03-02 13:42:58', '2023-03-02 13:42:58'),
(112, 15, 'Cep Telefonu', '2023-03-02 13:42:58', '2023-03-02 13:42:58'),
(113, 15, 'Akıllı Saat', '2023-03-02 13:42:58', '2023-03-02 13:42:58'),
(114, 15, 'Akıllı Bileklik', '2023-03-02 13:42:58', '2023-03-02 13:42:58'),
(115, 15, 'Laptop', '2023-03-02 13:42:58', '2023-03-02 13:42:58'),
(116, 15, 'Oyun & Konsollar', '2023-03-02 13:42:58', '2023-03-02 13:42:58'),
(117, 15, 'Elektrikli Bisiklet', '2023-03-02 13:42:58', '2023-03-02 13:42:58'),
(118, 15, 'E-pin ve Cüzdan Kodu', '2023-03-02 13:42:58', '2023-03-02 13:42:58'),
(119, 16, 'Lüks Giyim', '2023-03-02 13:43:49', '2023-03-02 13:43:49'),
(120, 16, 'Lüks Ayakkabı', '2023-03-02 13:43:49', '2023-03-02 13:43:49'),
(121, 16, 'Lüks Çanta', '2023-03-02 13:43:49', '2023-03-02 13:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `child_categories`
--

CREATE TABLE `child_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `childName` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child_categories`
--

INSERT INTO `child_categories` (`id`, `category_id`, `childName`, `created_at`, `updated_at`) VALUES
(1, 1, 'Giyim', '2023-02-20 07:58:53', '2023-02-20 08:31:48'),
(2, 1, 'Ayakkabı', '2023-02-20 08:00:17', '2023-02-20 08:00:17'),
(3, 1, 'Aksesuar & Çanta', '2023-02-20 08:00:17', '2023-02-20 08:00:17'),
(4, 1, 'İç Giyim', '2023-02-20 08:00:17', '2023-02-20 08:00:17'),
(5, 1, 'Lüks & Designer', '2023-02-20 08:00:17', '2023-02-20 08:00:17'),
(6, 1, 'Kozmetik', '2023-02-20 08:00:17', '2023-02-20 08:00:17'),
(8, 1, 'Spor & Outdoor', '2023-02-20 08:33:44', '2023-02-20 08:33:44'),
(9, 2, 'Giyim', '2023-02-20 08:35:49', '2023-02-20 08:35:49'),
(10, 2, 'Ayakkabı', '2023-02-20 08:35:49', '2023-02-20 08:35:49'),
(11, 2, 'Kişisel Bakım', '2023-02-20 08:35:49', '2023-02-20 08:35:49'),
(12, 2, 'Saat & Aksesuar', '2023-02-20 08:35:49', '2023-02-20 08:35:49'),
(13, 2, 'İç Giyim', '2023-02-20 08:35:49', '2023-02-20 08:35:49'),
(14, 2, 'Spor & Outdoor', '2023-02-20 08:35:49', '2023-02-20 08:35:49'),
(15, 2, 'Elektronik', '2023-02-20 08:35:49', '2023-02-20 08:35:49'),
(16, 2, 'Lüks & Designer', '2023-02-20 08:35:49', '2023-02-20 08:35:49');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `rating` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `comment`, `rating`, `created_at`, `updated_at`) VALUES
(1, 3, 8, 'Lorem Ipsum is simply dummy text of the printing an typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknow printer took a galley of type and scrambled it to make a type specimen.Munir 1', 1.5, '2023-03-06 14:25:47', '2023-03-06 14:25:47'),
(2, 3, 8, 'Lorem Ipsum is simply dummy text of the printing an typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknow printer took a galley of type and scrambled it to make a type specimen.Munir 2', 3.6, '2023-03-06 14:29:57', '2023-03-06 14:29:57'),
(3, 3, 8, 'Lorem Ipsum is simply dummy text of the printing an typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknow printer took a galley of type and scrambled it to make a type specimen.', 5, '2023-03-06 14:30:18', '2023-03-06 14:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(41, '2014_10_12_000000_create_users_table', 1),
(42, '2014_10_12_100000_create_password_resets_table', 1),
(43, '2019_08_19_000000_create_failed_jobs_table', 1),
(44, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(45, '2023_02_06_081401_create_roles_table', 1),
(46, '2023_02_06_081427_create_permissions_table', 1),
(51, '2023_02_20_092826_create_categories_table', 2),
(52, '2023_02_20_093553_create_child_categories_table', 2),
(53, '2023_02_20_093644_create_category_tags_table', 2),
(54, '2023_02_20_125457_create_products_table', 3),
(55, '2023_02_20_131649_create_product_details_table', 3),
(56, '2023_02_23_121219_create_carts_table', 4),
(57, '2023_02_27_171046_create_orders_table', 5),
(58, '2023_03_06_163325_create_comments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `cart_id` int(10) UNSIGNED NOT NULL,
  `orderNo` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `cart_id`, `orderNo`, `total`, `created_at`, `updated_at`) VALUES
(4, 3, 7, 601, 509.96, '2023-03-02 17:32:46', '2023-03-02 17:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `perName` varchar(255) NOT NULL,
  `perLabel` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `perName`, `perLabel`, `created_at`, `updated_at`) VALUES
(1, 'Create', 'Veri Oluşturma', '2023-02-08 12:19:14', '2023-02-08 14:00:04'),
(2, 'Read', 'Verileri Okuma', '2023-02-08 12:19:44', '2023-02-08 14:00:20'),
(3, 'Update', 'Veriyi güncelleme', '2023-02-08 12:19:59', '2023-02-08 14:00:35'),
(4, 'Delete', 'Verileri Silme', '2023-02-08 12:20:11', '2023-02-08 14:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `ChildCategory_id` int(10) UNSIGNED NOT NULL,
  `CategoryTag_id` int(10) UNSIGNED NOT NULL,
  `productName` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `tax` int(11) NOT NULL DEFAULT 18,
  `price` double(8,2) NOT NULL,
  `oldPrice` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `category_id`, `ChildCategory_id`, `CategoryTag_id`, `productName`, `details`, `tax`, `price`, `oldPrice`, `discount`, `created_at`, `updated_at`) VALUES
(5, 2, 1, 1, 1, 'Siyah Yarım Boğazlı Bodycon Örme Elbise', 'Modelin Ölçüleri: Boy: 1.77 Göğüs: 83 Bel: 63 Kalça: 92\r\nMankenin üzerindeki ürün S/36 bedendir.\r\n%58 Pamuk %41 Polyester %1 Elastan, Örme Kumaş\r\nOmuzdan Boy: 95 cm\r\nBu üründen en fazla 10 adet sipariş verilebilir. 10 adetin üzerindeki siparişleri Trendyol iptal etme hakkını saklı tutar.\r\nKampanya fiyatından satılmak üzere 100 adetten fazla stok sunulmuştur.\r\nBir ürün, birden fazla satıcı tarafından satılabilir. Birden fazla satıcı tarafından satışa sunulan ürünlerin satıcıları ürün için belirledikleri fiyata, satıcı puanlarına, teslimat statülerine, ürünlerdeki promosyonlara, kargonun bedava olup olmamasına ve ürünlerin hızlı teslimat ile teslim edilip edilememesine, ürünlerin stok ve kategorileri bilgilerine göre sıralanmaktadır.\r\nÜrünlerimiz TRENDYOL etiketi ile gönderilecektir.', 18, 1600.00, 2000, 20, '2023-02-21 06:24:44', '2023-03-03 10:07:12'),
(6, 2, 2, 9, 25, 'SİYAH RENK ERKEK YELEKLİ TAKIM ELBİSE', 'D\'S DAMAT ERKEK TAKIM ELBİSESLİM FİTGÜNCEL MODEL Ürün Gömlek ve Kravat içermemektedir.\r\nBu üründen en fazla 10 adet sipariş verilebilir. 10 adetin üzerindeki siparişleri Trendyol iptal etme hakkını saklı tutar.\r\nKampanya fiyatından satılmak üzere 50 adetten fazla stok sunulmuştur.\r\nİncelemiş olduğunuz ürünün satış fiyatını satıcı belirlemektedir.\r\nBir ürün, birden fazla satıcı tarafından satılabilir. Birden fazla satıcı tarafından satışa sunulan ürünlerin satıcıları ürün için belirledikleri fiyata, satıcı puanlarına, teslimat statülerine, ürünlerdeki promosyonlara, kargonun bedava olup olmamasına ve ürünlerin hızlı teslimat ile teslim edilip edilememesine, ürünlerin stok ve kategorileri bilgilerine göre sıralanmaktadır.', 18, 107.99, NULL, NULL, '2023-02-21 06:28:54', '2023-02-21 06:28:54'),
(8, 2, 1, 1, 2, 'TRENDYOLMİLLA Beyaz-Gri-Siyah', 'TRENDYOLMİLLA Beyaz-Gri-Siyah %100 Pamuk 3\'lü Paket Basic Bisiklet Yaka Örme T-Shirt TWOAW21TS0094', 18, 1500.99, NULL, NULL, '2023-02-21 11:41:59', '2023-02-28 13:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `images` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `images`, `created_at`, `updated_at`) VALUES
(4, 5, '1677830303A1.jpg', '2023-02-21 06:24:44', '2023-03-03 07:58:23'),
(5, 5, '1677830313A2.jpg', '2023-02-21 06:24:44', '2023-03-03 07:58:33'),
(6, 5, '1677830323A3.jpg', '2023-02-21 06:24:44', '2023-03-03 07:58:43'),
(7, 5, '1677830334A4.jpg', '2023-02-21 06:24:44', '2023-03-03 07:58:54'),
(8, 6, '16769609341_org_zoom.jpg', '2023-02-21 06:28:54', '2023-02-21 06:28:54'),
(9, 6, '16769609342_org_zoom (2).jpg', '2023-02-21 06:28:54', '2023-02-21 06:28:54'),
(10, 6, '16769609343_org_zoom (1).jpg', '2023-02-21 06:28:54', '2023-02-21 06:28:54'),
(11, 8, '16775922362_org_zoom (3).jpg', '2023-02-21 11:41:59', '2023-02-28 13:50:36'),
(12, 8, '16775922462_org_zoom (4).jpg', '2023-02-21 11:41:59', '2023-02-28 13:50:46'),
(13, 8, '16775922562_org_zoom (5).jpg', '2023-02-21 11:41:59', '2023-02-28 13:50:56'),
(14, 8, '16775922652_org_zoom (6).jpg', '2023-02-21 11:41:59', '2023-02-28 13:51:05'),
(15, 8, '16775922762_org_zoom (7).jpg', '2023-02-21 11:41:59', '2023-02-28 13:51:16'),
(16, 8, '16775922882_org_zoom (8).jpg', '2023-02-21 11:41:59', '2023-02-28 13:51:28'),
(17, 8, '16775922992_org_zoom (9).jpg', '2023-02-21 11:41:59', '2023-02-28 13:51:39'),
(18, 8, '16775923232_org_zoom (4).jpg', '2023-02-21 11:41:59', '2023-02-28 13:52:03');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `roleName` varchar(255) NOT NULL,
  `roleLabel` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `roleName`, `roleLabel`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Yönetici', '2023-02-08 12:04:13', '2023-02-08 12:49:50'),
(2, 'Seller', 'Satıcı', '2023-02-08 12:04:56', '2023-02-08 12:51:53'),
(3, 'Customer', 'Müşteri', '2023-02-08 12:04:56', '2023-02-08 12:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `role_permission`
--

CREATE TABLE `role_permission` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_permission`
--

INSERT INTO `role_permission` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(2, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(2, 2),
(3, 3),
(1, 1),
(4, 2),
(5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.png',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `gender`, `phone`, `address`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Munir Ahmad Sarwari', 'Munirahmad.sarwari@gmail.com', NULL, '$2y$10$MieiLfQAPYlOr.sFemehr.9OykkO7hKB8RAwfXr09k2DGbFQOj2Ha', 0, '05314722001', 'Adapazarı/Sakarya, Türkiye', '1675863757drese.jpg', NULL, '2023-02-08 12:07:53', '2023-02-08 13:42:37'),
(2, 'Eiraj Ahmad Sarwari', 'Eirajahmad.sarwari@gmail.com', NULL, '$2y$10$clQrXImP6/GBdACcSv7bwO.FGnfa5lYqeGpmje1hcHGdwNxRaVRdO', NULL, NULL, NULL, 'default.png', NULL, '2023-02-08 12:12:06', '2023-02-08 12:12:06'),
(3, 'Bayram', 'Bayram@gmail.com', NULL, '$2y$10$asccS7iH0SAEdBESj0fOUexhv52o/tp8tFCMuniP80bkNnqEOPCiq', NULL, NULL, NULL, 'default.png', NULL, '2023-02-08 12:13:29', '2023-02-08 12:13:29'),
(4, 'Ahmad', 'B213102551@subu.edu.tr', NULL, '$2y$10$nQsA4gfe5f4p6qs1sEzHe.VZ4sNjXxQyvHAB6fK/zy7OZ4z888sY2', NULL, NULL, NULL, 'default.png', NULL, '2023-02-16 15:07:25', '2023-02-16 15:07:25'),
(5, 'Munir Ahmad Sarwari', 'B21310255v1@subu.edu.tr', NULL, '$2y$10$rIl7ZI6pBb9niJobQXbyIeVk.q1bhCvF24AH1GKhJ4VpZFOKmiuay', NULL, NULL, NULL, 'default.png', NULL, '2023-02-17 10:27:41', '2023-02-17 10:27:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_tags`
--
ALTER TABLE `category_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_tags_child_id_foreign` (`child_id`);

--
-- Indexes for table `child_categories`
--
ALTER TABLE `child_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `child_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_product_id_foreign` (`product_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_orderno_unique` (`orderNo`),
  ADD KEY `orders_cart_id_foreign` (`cart_id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_childcategory_id_foreign` (`ChildCategory_id`),
  ADD KEY `products_categorytag_id_foreign` (`CategoryTag_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_permission`
--
ALTER TABLE `role_permission`
  ADD KEY `role_permission_permission_id_foreign` (`permission_id`),
  ADD KEY `role_permission_role_id_foreign` (`role_id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_tags`
--
ALTER TABLE `category_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `child_categories`
--
ALTER TABLE `child_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `category_tags`
--
ALTER TABLE `category_tags`
  ADD CONSTRAINT `category_tags_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `child_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `child_categories`
--
ALTER TABLE `child_categories`
  ADD CONSTRAINT `child_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_categorytag_id_foreign` FOREIGN KEY (`CategoryTag_id`) REFERENCES `category_tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_childcategory_id_foreign` FOREIGN KEY (`ChildCategory_id`) REFERENCES `child_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_permission`
--
ALTER TABLE `role_permission`
  ADD CONSTRAINT `role_permission_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_permission_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
