-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 05:15 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `velocity`
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
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `station` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `city`, `station`, `created_at`, `updated_at`) VALUES
(5, 'Marrakech', 'ennassim', '2021-06-02 15:53:11', '2021-06-02 15:53:11'),
(6, 'casa', 'ouaziz', '2021-06-02 16:01:46', '2021-06-02 16:01:46');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_04_01_133003_create_sessions_table', 1),
(7, '2021_04_10_152933_create_roles_table', 2),
(8, '2021_04_10_153221_add_roles_fields_to_users_table', 2),
(9, '2021_04_10_160018_roles', 3),
(10, '2021_04_10_160740_roles_remove_tiemstamps', 4),
(11, '2021_04_30_224350_add_fb_id_column_in_users_table', 5),
(12, '2021_04_30_233901_add_google_id_column_in_users_table', 6),
(13, '2021_05_27_192540_create_location_table', 7),
(14, '2021_05_27_192540_create_ticket_table', 8),
(15, '2021_05_27_192540_create_trains_table', 8),
(16, '2021_05_27_192540_create_trips_table', 8);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'client'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('C3KU3gEdIVnV0iKnorXkBa9OInkwJBTq3PzN7QMp', 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTG5iZ0J0TjVseWhQR1FERGF2cVVqYU9LamxURWZIM0IwQWtkU0JKWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wZGY/ZG93bmxvYWQ9cGRmIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6OTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHguTkxqSkZ5S3ZSQlNpZGM5OFJVOU9udnFHWS9iZzlzaVhZLm1nWURiRzh5TFBRNWFzdjZ1IjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCR4Lk5MakpGeUt2UkJTaWRjOThSVTlPbnZxR1kvYmc5c2lYWS5tZ1lEYkc4eUxQUTVhc3Y2dSI7fQ==', 1622732206);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trip_id` int(11) NOT NULL,
  `Departure_city` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Arrival_city` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Departure_station` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Arrival_station` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `user_id`, `name`, `email`, `trip_id`, `Departure_city`, `Arrival_city`, `Departure_station`, `Arrival_station`, `price`, `date`, `created_at`, `updated_at`) VALUES
(1, 9, 'salma', 'salma.elyagoubi@ynov.com', 14, 'casa', 'Marrakech', 'ennassim', 'ouaziz', 10, '2021-06-17 18:12:00', '2021-06-02 20:47:17', '2021-06-02 20:47:17'),
(2, 9, 'salma', 'salma.elyagoubi@ynov.com', 14, 'casa', 'Marrakech', 'ennassim', 'ouaziz', 10, '2021-06-17 18:12:00', '2021-06-02 20:48:08', '2021-06-02 20:48:08'),
(3, 9, 'salma', 'salma.elyagoubi@ynov.com', 14, 'casa', 'Marrakech', 'ennassim', 'ouaziz', 10, '2021-06-17 18:12:00', '2021-06-02 20:48:25', '2021-06-02 20:48:25'),
(4, 9, 'salma', 'salma.elyagoubi@ynov.com', 14, 'casa', 'Marrakech', 'ennassim', 'ouaziz', 10, '2021-06-17 18:12:00', '2021-06-02 20:48:30', '2021-06-02 20:48:30'),
(5, 9, 'salma', 'salma.elyagoubi@ynov.com', 15, 'Marrakech', 'casa', 'ennassim', 'ouaziz', 10, '2021-06-26 22:53:00', '2021-06-02 20:53:24', '2021-06-02 20:53:24'),
(6, NULL, 'salma', 'gatsal99@gmail.com', 15, 'Marrakech', 'casa', 'ennassim', 'ouaziz', 10, '2021-06-26 22:53:00', '2021-06-02 20:59:19', '2021-06-02 20:59:19'),
(7, NULL, 'S E N E T', 'gatsal99@gmail.com', 15, 'Marrakech', 'casa', 'ennassim', 'ouaziz', 10, '2021-06-26 22:53:00', '2021-06-02 21:00:11', '2021-06-02 21:00:11'),
(8, NULL, 'pastries', 'gatsal99@gmail.com', 15, 'Marrakech', 'casa', 'ennassim', 'ouaziz', 10, '2021-06-26 22:53:00', '2021-06-02 21:09:07', '2021-06-02 21:09:07'),
(9, NULL, 'salma', 'gatsal99@gmail.com', 15, 'Marrakech', 'casa', 'ennassim', 'ouaziz', 10, '2021-06-26 22:53:00', '2021-06-02 21:30:54', '2021-06-02 21:30:54');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Max_capacity` int(11) NOT NULL,
  `Driver` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(5) NULL DEFAULT NULL,
  `updated_at` timestamp(5) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`id`, `type`, `Max_capacity`, `Driver`, `created_at`, `updated_at`) VALUES
(5, 'oncf', 140, 'hmed', '2021-06-02 15:53:03.00000', '2021-06-02 15:53:03.00000');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Departure_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Arrival_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Departure_station` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Arrival_station` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `Arrival_Time` time DEFAULT NULL,
  `Departure_Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `dispo` tinyint(4) NOT NULL DEFAULT 0,
  `train_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `Departure_city`, `Arrival_city`, `Departure_station`, `Arrival_station`, `price`, `Arrival_Time`, `Departure_Date`, `dispo`, `train_id`, `created_at`, `updated_at`) VALUES
(15, 'Marrakech', 'casa', 'ennassim', 'ouaziz', 10, '12:52:00', '2021-06-26 21:53:00', 0, 5, '2021-06-02 20:53:09', '2021-06-02 20:53:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `fb_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `role_id`, `fb_id`, `google_id`) VALUES
(2, 'client', 'client@gmail.com', '2021-04-30 22:23:59', '$2y$10$559ikifHOd2lscjDvrdJYeEcXgu.bNIyCkcXpawKtiActrEPs7Twq', NULL, NULL, NULL, NULL, NULL, '2021-04-10 14:02:57', '2021-04-10 14:02:57', 1, NULL, NULL),
(5, 'admin', 'admin@gmail.com', '2021-04-30 22:24:02', '$2y$10$fBGlj14vHrBeWmnCnDYKQOGyOCUEtBWvgmu58P6uB3ITpENHp4ysa', NULL, NULL, NULL, NULL, NULL, '2021-04-10 14:39:40', '2021-04-10 14:39:40', 2, NULL, NULL),
(6, 'Othman Lahlou', 'othman.lahlou00@gmail.com', '2021-04-30 23:21:02', 'eyJpdiI6Ii9zS0VUdTZYMVE2TzFSb0lCNHlaYmc9PSIsInZhbHVlIjoiR3JwVldsZDVqbVBUTm1hNm9CMFAxQT09IiwibWFjIjoiZjNmMmQ5NzQzZGMzYzE4NWE5OGM4NjI3Yzc1ZjFhNmQ2MWJkZGZiYzMzZmU0YTliM2JkNDk5ZGM0NTgyNWM5YSJ9', NULL, NULL, NULL, NULL, NULL, '2021-04-30 23:19:59', '2021-04-30 23:21:02', 1, '3732330223556651', NULL),
(7, 'Martin Salas', 'velocitynoreply@gmail.com', '2021-04-30 23:53:51', 'eyJpdiI6ImtMTkgyRnlTbWpIK1A5QTZ2YmozQVE9PSIsInZhbHVlIjoiQmR3M1hKbEI4K3EyNmNiNnBvcXBNUT09IiwibWFjIjoiMzkzZTFmOTczZmFjMGQ3MDkyNDkwMzFiNWQyMTRkMDRlY2ZlYmYxNGIwNWZkNWJhYjZhZmMwNjI2MGJmNzg0MCJ9', NULL, NULL, NULL, NULL, NULL, '2021-04-30 23:53:10', '2021-04-30 23:53:51', 1, NULL, '114662276410183707935'),
(9, 'salma', 'salma.elyagoubi@ynov.com', '2021-05-29 09:29:08', '$2y$10$x.NLjJFyKvRBSidc98RU9OnvqGY/bg9siXY.mgYDbG8yLPQ5asv6u', NULL, NULL, NULL, NULL, NULL, '2021-05-29 09:28:42', '2021-05-29 09:29:08', 2, NULL, NULL),
(10, 'test', 'gatsal99@gmail.com', '2021-05-30 10:25:44', '$2y$10$tPqz3d/dr72fUIaQGfpjRum5j9b0G3UN4HHTKP3Kb.NXFj9inuEVS', NULL, NULL, NULL, NULL, NULL, '2021-05-30 10:25:26', '2021-05-30 10:25:44', 1, NULL, NULL);

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
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trains`
--
ALTER TABLE `trains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
