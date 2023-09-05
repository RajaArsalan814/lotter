-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2023 at 01:54 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lotter`
--

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lotteries`
--

CREATE TABLE `lotteries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lotteries`
--

INSERT INTO `lotteries` (`id`, `name`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'urwashi', '11', 'Active', NULL, '2023-08-14 06:33:54'),
(2, 'menka', '100', 'Active', '2023-08-14 06:21:50', '2023-08-14 06:34:08'),
(3, 'dev', '111', 'Active', '2023-08-14 06:34:20', '2023-08-14 06:34:20');

-- --------------------------------------------------------

--
-- Table structure for table `lottery_places`
--

CREATE TABLE `lottery_places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lottery_id` int(11) DEFAULT NULL,
  `lottery_set_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `number_select` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lottery_places`
--

INSERT INTO `lottery_places` (`id`, `lottery_id`, `lottery_set_id`, `user_id`, `number_select`, `quantity`, `created_at`, `updated_at`) VALUES
(70, 1, 46, 10, 4, 1, '2023-09-05 22:06:50', '2023-09-05 22:06:50'),
(71, 1, 46, 10, 5, 4, '2023-09-05 22:06:50', '2023-09-05 22:06:50'),
(72, 1, 47, 10, 5, 1, '2023-09-05 22:36:13', '2023-09-05 22:36:13'),
(73, 1, 47, 10, 6, 2, '2023-09-05 22:36:13', '2023-09-05 22:36:13'),
(74, 1, 47, 10, 7, 1, '2023-09-05 22:36:13', '2023-09-05 22:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `lottery_sets`
--

CREATE TABLE `lottery_sets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lottery_id` int(11) DEFAULT NULL,
  `number_win` int(11) DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lottery_sets`
--

INSERT INTO `lottery_sets` (`id`, `lottery_id`, `number_win`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(42, 1, 2, '2023-09-05 20:00:00', '2023-09-05 20:30:00', '2023-09-05 20:12:14', '2023-09-05 18:28:34'),
(43, 1, NULL, '2023-09-05 20:31:00', '2023-09-05 20:59:00', '2023-09-05 20:12:14', '2023-09-05 20:12:14'),
(44, 1, NULL, '2023-09-05 21:00:00', '2023-09-05 21:30:00', '2023-09-05 20:12:14', '2023-09-05 20:12:14'),
(45, 1, NULL, '2023-09-05 21:31:00', '2023-09-05 21:59:00', '2023-09-05 20:12:14', '2023-09-05 20:12:14'),
(46, 1, 9, '2023-09-05 22:00:00', '2023-09-05 22:30:00', '2023-09-05 20:12:14', '2023-09-05 20:12:14'),
(47, 1, NULL, '2023-09-05 22:31:00', '2023-09-05 22:59:00', '2023-09-05 20:12:14', '2023-09-05 20:12:14'),
(48, 1, NULL, '2023-09-05 23:00:00', '2023-09-05 23:30:00', '2023-09-05 20:12:14', '2023-09-05 20:12:14'),
(49, 2, NULL, '2023-09-05 20:31:00', '2023-09-05 20:59:00', '2023-09-05 20:12:14', '2023-09-05 20:12:14');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_02_123721_create_settings_table', 1),
(6, '2023_05_22_141021_create_jobs_table', 1),
(7, '2023_08_03_130054_create_permission_tables', 2),
(8, '2023_08_09_124049_create_lotteries_table', 3),
(9, '2023_08_15_090309_create_lottery_sets_table', 4),
(10, '2023_08_21_100250_create_lottery_places_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 17),
(6, 'App\\Models\\User', 6),
(6, 'App\\Models\\User', 16),
(6, 'App\\Models\\User', 18),
(6, 'App\\Models\\User', 25),
(6, 'App\\Models\\User', 26),
(6, 'App\\Models\\User', 27),
(7, 'App\\Models\\User', 7),
(7, 'App\\Models\\User', 8),
(7, 'App\\Models\\User', 9),
(7, 'App\\Models\\User', 10),
(7, 'App\\Models\\User', 12),
(7, 'App\\Models\\User', 13),
(7, 'App\\Models\\User', 14),
(7, 'App\\Models\\User', 15),
(7, 'App\\Models\\User', 19),
(7, 'App\\Models\\User', 21),
(7, 'App\\Models\\User', 22),
(7, 'App\\Models\\User', 23),
(7, 'App\\Models\\User', 24),
(7, 'App\\Models\\User', 28),
(7, 'App\\Models\\User', 29),
(7, 'App\\Models\\User', 30),
(7, 'App\\Models\\User', 31),
(8, 'App\\Models\\User', 20);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `display_name`, `type`, `created_at`, `updated_at`) VALUES
(1, 'user-list', 'web', 'List', 'User Management', '2023-08-04 08:34:41', '2023-08-04 08:34:41'),
(2, 'user-create', 'web', 'Create', 'User Management', '2023-08-04 08:34:41', '2023-08-04 08:34:41'),
(3, 'user-delete', 'web', 'Delete', 'User Management', '2023-08-04 08:34:41', '2023-08-04 08:34:41'),
(4, 'user-edit', 'web', 'Edit', 'User Management', '2023-08-04 08:34:41', '2023-08-04 08:34:41'),
(5, 'role-list', 'web', 'List', 'Role Management', '2023-08-04 08:34:41', '2023-08-04 08:34:41'),
(6, 'role-create', 'web', 'Create', 'Role Management', '2023-08-04 08:34:41', '2023-08-04 08:34:41'),
(7, 'role-delete', 'web', 'Delete', 'Role Management', '2023-08-04 08:34:41', '2023-08-04 08:34:41'),
(8, 'role-edit', 'web', 'Edit', 'Role Management', '2023-08-04 08:34:41', '2023-08-04 08:34:41'),
(9, 'agent-list', 'web', 'List', 'Agent Management', '2023-08-04 08:34:41', '2023-08-04 08:34:41'),
(10, 'agent-create', 'web', 'Create', 'Agent Management', '2023-08-04 08:34:41', '2023-08-04 08:34:41'),
(11, 'agent-delete', 'web', 'Delete', 'Agent Management', '2023-08-04 08:34:41', '2023-08-04 08:34:41'),
(12, 'agent-edit', 'web', 'Edit', 'Agent Management', '2023-08-04 08:34:41', '2023-08-04 08:34:41');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `display_name`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Super Admin', 'web', 'Super Admin', 1, '2023-08-04 02:23:56', '2023-08-04 02:23:56'),
(6, 'Agent', 'web', 'Agent', 1, '2023-08-04 03:50:07', '2023-08-04 03:50:07'),
(7, 'Users', 'web', 'Users', 1, '2023-08-04 03:55:49', '2023-08-04 03:55:49'),
(8, 'Sub Admin', 'web', 'Sub-Admin', 1, '2023-08-07 05:07:06', '2023-08-07 05:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 3),
(1, 6),
(1, 8),
(2, 3),
(2, 6),
(2, 8),
(3, 3),
(3, 6),
(3, 8),
(4, 3),
(4, 6),
(4, 8),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(9, 8),
(10, 3),
(10, 8),
(11, 3),
(11, 8),
(12, 3),
(12, 8);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_sub_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_header_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_background_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_body_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('admin','user','agent') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` int(11) DEFAULT 1,
  `user_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles_id` int(11) DEFAULT NULL,
  `total_credit` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `email_verified_at`, `password`, `profile`, `role_id`, `type`, `status`, `user_id`, `remember_token`, `roles_id`, `total_credit`, `created_at`, `updated_at`) VALUES
(6, 'Alana', 'Castaneda', 'agent@gmail.com', '003', '2023-08-04 08:53:40', '$2y$10$bKJWNGMLRk11C35JaGWizej..LUkrH5bQ/gz72Q3oERbNtmscLqg6', 'default.png', 'Agent', 'agent', 1, NULL, NULL, NULL, NULL, '2023-08-04 03:52:17', '2023-08-04 03:52:17'),
(8, 'Geoffrey', 'Knight', 'revycezezy@mailinator.com', '004', NULL, '$2y$10$bKJWNGMLRk11C35JaGWizej..LUkrH5bQ/gz72Q3oERbNtmscLqg6', 'default.png', 'Users', 'user', 1, 6, NULL, NULL, NULL, '2023-08-04 05:43:18', '2023-08-04 05:43:18'),
(9, 'Whitney', 'Griffin', 'wobowyrix@mailinator.com', '005', NULL, '$2y$10$bKJWNGMLRk11C35JaGWizej..LUkrH5bQ/gz72Q3oERbNtmscLqg6', 'default.png', 'Users', 'user', 1, 6, NULL, NULL, NULL, '2023-08-04 05:43:24', '2023-08-04 05:43:24'),
(10, 'Gareth', 'Townsend', 'rududo@mailinator.com', '006', NULL, '$2y$10$bKJWNGMLRk11C35JaGWizej..LUkrH5bQ/gz72Q3oERbNtmscLqg6', 'default.png', 'Users', 'user', 1, 1, NULL, NULL, 56, '2023-08-04 05:43:53', '2023-09-05 17:36:13'),
(11, 'Monu', 'Jaiswal', 'admin@gmail.com', '001', '2023-08-03 10:49:31', '$2y$10$bKJWNGMLRk11C35JaGWizej..LUkrH5bQ/gz72Q3oERbNtmscLqg6', 'default.png', 'Administrator', 'admin', 1, NULL, NULL, NULL, NULL, '2023-08-04 05:49:22', '2023-08-04 05:49:22'),
(12, 'Arsenio', 'Nixon', 'mudeq@mailinator.com', '007', NULL, '$2y$10$bKJWNGMLRk11C35JaGWizej..LUkrH5bQ/gz72Q3oERbNtmscLqg6', 'default.png', 'Users', 'user', 1, 11, NULL, NULL, NULL, '2023-08-04 06:38:11', '2023-08-04 06:38:11'),
(13, 'Kaseem', 'Cohen', 'woxukys@mailinator.com', '008', NULL, '$2y$10$bKJWNGMLRk11C35JaGWizej..LUkrH5bQ/gz72Q3oERbNtmscLqg6', 'default.png', 'Users', 'user', 1, 11, NULL, NULL, NULL, '2023-08-04 06:38:20', '2023-08-04 06:38:20'),
(14, 'Halla', 'Trevino', 'fyfev@mailinator.com', '009', NULL, '$2y$10$bKJWNGMLRk11C35JaGWizej..LUkrH5bQ/gz72Q3oERbNtmscLqg6', 'default.png', 'Users', 'user', 1, 11, NULL, NULL, NULL, '2023-08-04 06:38:28', '2023-08-04 06:38:28'),
(15, 'Lucy', 'Watson', 'mura@mailinator.com', '010', NULL, '$2y$10$bKJWNGMLRk11C35JaGWizej..LUkrH5bQ/gz72Q3oERbNtmscLqg6', 'default.png', 'Users', 'user', 1, 11, NULL, NULL, NULL, '2023-08-04 06:38:36', '2023-08-04 06:38:36'),
(16, 'Cairo', 'Nixon', 'wufeca@mailinator.com', '011', NULL, '$2y$10$bKJWNGMLRk11C35JaGWizej..LUkrH5bQ/gz72Q3oERbNtmscLqg6', 'default.png', 'Agent', 'agent', 1, 11, NULL, NULL, NULL, '2023-08-07 03:58:19', '2023-08-07 03:58:19'),
(18, 'Brady', 'Sosa', 'nekolib@mailinator.com', '012', NULL, '$2y$10$bKJWNGMLRk11C35JaGWizej..LUkrH5bQ/gz72Q3oERbNtmscLqg6', 'default.png', 'Agent', 'agent', 1, 11, NULL, NULL, NULL, '2023-08-07 03:59:27', '2023-08-07 03:59:27'),
(19, 'Indira', 'Solomon', 'user@mailinator.com', '013', NULL, '$2y$10$bKJWNGMLRk11C35JaGWizej..LUkrH5bQ/gz72Q3oERbNtmscLqg6', 'default.png', 'Users', 'user', 1, 18, NULL, NULL, NULL, '2023-08-07 04:00:03', '2023-08-07 04:00:03'),
(20, 'Neil', 'Morin', 'subadmin@mailinator.com', '002', NULL, '$2y$10$bKJWNGMLRk11C35JaGWizej..LUkrH5bQ/gz72Q3oERbNtmscLqg6', 'default.png', 'Sub Admin', 'admin', 1, 11, NULL, NULL, NULL, '2023-08-07 05:07:54', '2023-08-07 05:07:54'),
(21, 'Nissim', 'Hancock', 'vezolyde@mailinator.com', '014', NULL, '$2y$10$bKJWNGMLRk11C35JaGWizej..LUkrH5bQ/gz72Q3oERbNtmscLqg6', 'default.png', 'Users', 'user', 1, 11, NULL, NULL, NULL, '2023-08-07 05:24:04', '2023-08-07 05:24:04'),
(22, 'Lee', 'Ewing', NULL, '293', NULL, '$2y$10$L6kCDFh6FFB9zWz5CxqHzuLlAtAyexEFkBT.n327D//F40omInOha', 'default.png', 'Users', 'user', 1, 11, NULL, NULL, NULL, '2023-08-07 06:30:59', '2023-08-07 06:30:59'),
(23, 'Mary', 'Fuller', NULL, '056', NULL, '$2y$10$e2WQKbVyaignb2Ta/usW0ulgrnWMCIMm3vHspWK7V8j5hkFiRDmF.', 'default.png', 'Users', 'user', 1, 11, NULL, NULL, NULL, '2023-08-07 06:50:02', '2023-08-07 06:50:02'),
(24, 'Xena', 'Hayden', NULL, '016', NULL, '$2y$10$7xjJRo8lMv9mFALLaEtDRuG4XGsCpkPZje/BtRnV71MW6xCK0bnCa', 'default.png', 'Users', 'user', 1, 11, NULL, NULL, NULL, '2023-08-07 07:03:26', '2023-08-07 07:03:26'),
(25, 'Hayes', 'Huff', NULL, '019', NULL, '$2y$10$JGAfND1MD0K./1Da4KOGf.UcOhlbHo.6kYcUt.rcpgwNeoZVS0MT2', 'default.png', 'Agent', 'agent', 1, 11, NULL, NULL, NULL, '2023-08-07 07:06:21', '2023-08-07 07:06:21'),
(26, 'Roth', 'Foster', NULL, '020', NULL, '$2y$10$pqXed7NKIlpx1n2W38Q1EOFPgevKIMDC1NE/Zgj6lxjpOpHqCWX2.', 'default.png', 'Agent', 'agent', 1, 11, NULL, NULL, NULL, '2023-08-07 07:06:39', '2023-08-07 07:06:39'),
(27, 'Maggie', 'Pearson', NULL, '748', NULL, '$2y$10$svhPZBR9tpURbqabAdI5RueGVtdWydcAfEQjD9KNddfoknmypYUlS', 'default.png', 'Agent', 'agent', 1, 11, NULL, NULL, NULL, '2023-08-15 05:33:05', '2023-08-15 05:33:05'),
(28, 'Ainsley', 'Hyde', NULL, '321', NULL, '$2y$10$wVJgoNJM5uc0roKSlLYYSeEXiob16DPnHMN9YSZQZUWCspHwRAyKi', 'default.png', 'Users', 'user', 1, 27, NULL, NULL, NULL, '2023-08-15 05:34:56', '2023-08-15 05:34:56'),
(29, 'krish', 'dev', NULL, '999', NULL, '$2y$10$d1qmJrtmtP7v9oeEo3Q1AOlq.HSRCvhLJD/mRB0QiPqHkUk0z0XZq', 'default.png', 'Users', 'user', 1, 6, NULL, NULL, NULL, '2023-08-15 05:50:00', '2023-08-15 05:50:00'),
(30, 'Caleb', 'Zamora', NULL, '456', NULL, '$2y$10$wyeBo1yt8EKRlvV3p4v7XejaUxooCriupCup4ecmUjujCIVuTIHfa', 'default.png', 'Users', 'user', 1, 26, NULL, NULL, NULL, '2023-08-15 06:17:41', '2023-08-15 06:17:41'),
(31, 'e3ws', 'asd', NULL, '458', NULL, '$2y$10$4vL1FDZioiyQzsHq0EVw7ukDQ/FO2DiaGszbeb.1p0.Hpvl25ty2K', 'default.png', 'Users', 'user', 1, 26, NULL, NULL, 110, '2023-08-15 06:17:57', '2023-08-15 09:52:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `lotteries`
--
ALTER TABLE `lotteries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lottery_places`
--
ALTER TABLE `lottery_places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lottery_sets`
--
ALTER TABLE `lottery_sets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lotteries`
--
ALTER TABLE `lotteries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lottery_places`
--
ALTER TABLE `lottery_places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `lottery_sets`
--
ALTER TABLE `lottery_sets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
