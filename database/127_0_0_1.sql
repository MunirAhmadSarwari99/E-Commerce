-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 01:57 PM
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
(1, 'Kadın', '2023-02-14 06:55:01', '2023-02-14 08:34:34'),
(2, 'Erkek', '2023-02-14 07:38:56', '2023-02-14 07:38:56'),
(3, 'Anne & Çocuk', '2023-02-14 07:38:56', '2023-02-14 07:38:56'),
(4, 'Ev & Mobilya', '2023-02-14 07:38:56', '2023-02-14 07:38:56'),
(5, 'Süpermarket', '2023-02-14 07:38:56', '2023-02-14 07:38:56'),
(6, 'Kozmetik', '2023-02-14 07:38:56', '2023-02-14 07:38:56'),
(7, 'Ayakkabı & Çanta', '2023-02-14 07:38:56', '2023-02-14 07:38:56'),
(8, 'Saat & Aksesuar', '2023-02-14 07:38:56', '2023-02-14 07:38:56'),
(9, 'Elektronik', '2023-02-14 07:38:56', '2023-02-14 07:38:56'),
(11, 'Sopr & Outdoor', '2023-02-14 08:36:28', '2023-02-14 08:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `categories_child`
--

CREATE TABLE `categories_child` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `child_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `child_categories`
--

CREATE TABLE `child_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `childName` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child_categories`
--

INSERT INTO `child_categories` (`id`, `childName`, `created_at`, `updated_at`) VALUES
(1, 'Giyim', '2023-02-14 10:49:38', '2023-02-14 11:30:38'),
(2, 'Ayakkabı', '2023-02-14 10:49:38', '2023-02-14 10:49:38'),
(3, 'Aksesuar & Çanta', '2023-02-14 10:49:38', '2023-02-14 10:49:38'),
(4, 'İç Giyim', '2023-02-14 10:49:38', '2023-02-14 10:49:38'),
(5, 'Lüks & Designer', '2023-02-14 10:49:38', '2023-02-14 10:49:38'),
(6, 'Kozmetik', '2023-02-14 10:49:38', '2023-02-14 10:49:38'),
(7, 'Spor & Outdoor', '2023-02-14 10:49:38', '2023-02-14 10:49:38'),
(8, 'Kişisel Bakım', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(9, 'Saat & Aksesuar', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(10, 'Elektronik', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(11, 'Bebek', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(12, 'Kız Çocuk', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(13, 'Erkek Çocuk', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(14, 'Bebek Bakım', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(15, 'Oyuncak', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(16, 'Taşıma & Güvenlik', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(17, 'Beslenme Emzirme', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(18, 'Sofra & Mutfak', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(19, 'Banyo', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(20, 'Ev Tekstili', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(21, 'Ev Dekorasyon', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(22, 'Aydınlatma', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(23, 'Mobilya', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(24, 'Ev Gereçleri', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(25, 'Hobi', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(26, 'Kırtasiye & Ofis', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(27, 'Otomobil & Motosiklet', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(28, 'Yapı Market', '2023-02-14 11:01:51', '2023-02-14 11:01:51'),
(29, 'Ev & Temizlik', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(30, 'Gıda', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(31, 'Sağlık & Spor', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(32, 'Petshop', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(33, 'Makyaj', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(34, 'Parfüm & Deodorant', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(35, 'Cilt Bakımı', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(36, 'Saç Bakımı', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(37, 'Epilasyon & Tıraş', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(38, 'Genel Bakım', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(39, 'Kadın Ayakkabı', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(40, 'Kadın Çanta', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(41, 'Erkek Ayakkabı', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(42, 'Erkek Çanta', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(43, 'Çocuk Ayakkabı', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(44, 'Çocuk Çanta', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(45, 'Kadın', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(46, 'Takı & Mücevher', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(47, 'Elektronik Aksesuarlar', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(48, 'Erkek', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(49, 'Çocuk Aksesuar', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(50, 'Küçük Ev Aletleri', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(51, 'Giyilebilir Teknoloji', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(52, 'Telefon', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(53, 'Bilgisayar & Tablet', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(54, 'TV & Görüntü & Ses', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(55, 'Kişisel Bakım Aletleri', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(56, 'Beyaz Eşya', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(57, 'Elektronik Aksesuarlar', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(58, 'Oyunculara Özel', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(59, 'Foto & Kamera', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(60, 'Dijital Kod & Ürünler', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(61, 'Spor Giyim', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(62, 'Spor Ayakkabı', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(63, 'Spor Malzemeleri', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(64, 'Bisiklet', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(65, 'Fitness Kondisyon', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(66, 'Sporcu Besinleri', '2023-02-14 11:18:45', '2023-02-14 11:18:45'),
(68, 'Top', '2023-02-14 12:16:30', '2023-02-14 12:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `child_categories_child`
--

CREATE TABLE `child_categories_child` (
  `child_id` int(10) UNSIGNED NOT NULL,
  `child_to_child_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `child_to_child_categories`
--

CREATE TABLE `child_to_child_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `childName` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(47, '2023_02_14_085519_create_categories_table', 2),
(48, '2023_02_14_085623_create_child_categories_table', 2),
(49, '2023_02_14_115043_create_child_to_child_categories_table', 3);

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
(1, 1);

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
(3, 'Bayram', 'Bayram@gmail.com', NULL, '$2y$10$asccS7iH0SAEdBESj0fOUexhv52o/tp8tFCMuniP80bkNnqEOPCiq', NULL, NULL, NULL, 'default.png', NULL, '2023-02-08 12:13:29', '2023-02-08 12:13:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories_child`
--
ALTER TABLE `categories_child`
  ADD KEY `categories_child_category_id_foreign` (`category_id`),
  ADD KEY `categories_child_child_id_foreign` (`child_id`);

--
-- Indexes for table `child_categories`
--
ALTER TABLE `child_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_categories_child`
--
ALTER TABLE `child_categories_child`
  ADD KEY `child_categories_child_child_id_foreign` (`child_id`),
  ADD KEY `child_categories_child_child_to_child_id_foreign` (`child_to_child_id`);

--
-- Indexes for table `child_to_child_categories`
--
ALTER TABLE `child_to_child_categories`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `child_categories`
--
ALTER TABLE `child_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `child_to_child_categories`
--
ALTER TABLE `child_to_child_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

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
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories_child`
--
ALTER TABLE `categories_child`
  ADD CONSTRAINT `categories_child_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categories_child_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `child_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `child_categories_child`
--
ALTER TABLE `child_categories_child`
  ADD CONSTRAINT `child_categories_child_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `child_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `child_categories_child_child_to_child_id_foreign` FOREIGN KEY (`child_to_child_id`) REFERENCES `child_to_child_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
