-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 01:55 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

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
(2, 'client', 'client@gmail.com', '2021-04-30 22:23:59', '$2y$10$559ikifHOd2lscjDvrdJYeEcXgu.bNIyCkcXpawKtiActrEPs7Twq', NULL, NULL, NULL, NULL, NULL, '2021-04-10 15:02:57', '2021-04-10 15:02:57', 1, NULL, NULL),
(5, 'admin', 'admin@gmail.com', '2021-04-30 22:24:02', '$2y$10$fBGlj14vHrBeWmnCnDYKQOGyOCUEtBWvgmu58P6uB3ITpENHp4ysa', NULL, NULL, NULL, NULL, NULL, '2021-04-10 15:39:40', '2021-04-10 15:39:40', 2, NULL, NULL),
(6, 'Othman Lahlou', 'othman.lahlou00@gmail.com', '2021-04-30 23:21:02', 'eyJpdiI6Ii9zS0VUdTZYMVE2TzFSb0lCNHlaYmc9PSIsInZhbHVlIjoiR3JwVldsZDVqbVBUTm1hNm9CMFAxQT09IiwibWFjIjoiZjNmMmQ5NzQzZGMzYzE4NWE5OGM4NjI3Yzc1ZjFhNmQ2MWJkZGZiYzMzZmU0YTliM2JkNDk5ZGM0NTgyNWM5YSJ9', NULL, NULL, NULL, NULL, NULL, '2021-04-30 23:19:59', '2021-04-30 23:21:02', 1, '3732330223556651', NULL),
(7, 'Martin Salas', 'velocitynoreply@gmail.com', '2021-04-30 23:53:51', 'eyJpdiI6ImtMTkgyRnlTbWpIK1A5QTZ2YmozQVE9PSIsInZhbHVlIjoiQmR3M1hKbEI4K3EyNmNiNnBvcXBNUT09IiwibWFjIjoiMzkzZTFmOTczZmFjMGQ3MDkyNDkwMzFiNWQyMTRkMDRlY2ZlYmYxNGIwNWZkNWJhYjZhZmMwNjI2MGJmNzg0MCJ9', NULL, NULL, NULL, NULL, NULL, '2021-04-30 23:53:10', '2021-04-30 23:53:51', 1, NULL, '114662276410183707935');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
