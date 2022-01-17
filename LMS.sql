-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 17, 2022 at 03:38 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booked_schedules`
--

CREATE TABLE `booked_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `schedule_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrs_times`
--

CREATE TABLE `hrs_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hrs_times`
--

INSERT INTO `hrs_times` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'no time', 100, NULL, NULL),
(2, '12:00 am', 0, NULL, NULL),
(3, '1:00 am', 1, NULL, NULL),
(4, '2:00 am', 2, NULL, NULL),
(5, '3:00 am', 3, NULL, NULL),
(6, '4:00 am', 4, NULL, NULL),
(7, '5:00 am', 5, NULL, NULL),
(8, '6:00 am', 6, NULL, NULL),
(9, '7:00 am', 7, NULL, NULL),
(10, '8:00 am', 8, NULL, NULL),
(11, '9:00 am', 9, NULL, NULL),
(12, '10:00 am', 10, NULL, NULL),
(13, '11:00 am', 11, NULL, NULL),
(14, '12:00 pm', 12, NULL, NULL),
(15, '1:00 pm', 13, NULL, NULL),
(16, '2:00 pm', 14, NULL, NULL),
(17, '3:00 pm', 15, NULL, NULL),
(18, '4:00 pm', 16, NULL, NULL),
(19, '5:00 pm', 17, NULL, NULL),
(20, '6:00 pm', 18, NULL, NULL),
(21, '7:00 pm', 19, NULL, NULL),
(22, '8:00 pm', 20, NULL, NULL),
(23, '9:00 pm', 21, NULL, NULL),
(24, '10:00 pm', 22, NULL, NULL),
(25, '11:00 pm', 23, NULL, NULL);

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
(24, '2021_12_08_185118_create_time_spans_table', 1),
(27, '2014_10_12_000000_create_users_table', 2),
(28, '2014_10_12_100000_create_password_resets_table', 2),
(29, '2019_08_19_000000_create_failed_jobs_table', 2),
(30, '2021_02_19_211716_create_admins_table', 2),
(31, '2021_11_01_110818_create_permission_tables', 2),
(32, '2021_12_08_085153_create_hrs_times_table', 2),
(33, '2021_12_09_121557_create_schedules_table', 2),
(34, '2021_12_09_121810_create_booked_schedules_table', 2);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mon_start` int(11) DEFAULT '100',
  `mon_start_val` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no time',
  `mon_end` int(11) DEFAULT '100',
  `mon_end_val` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no time',
  `tue_start` int(11) DEFAULT '100',
  `tue_start_val` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no time',
  `tue_end` int(11) DEFAULT '100',
  `tue_end_val` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no time',
  `wed_start` int(11) DEFAULT '100',
  `wed_start_val` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no time',
  `wed_end` int(11) DEFAULT '100',
  `wed_end_val` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no time',
  `thu_start` int(11) DEFAULT '100',
  `thu_start_val` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no time',
  `thu_end` int(11) DEFAULT '100',
  `thu_end_val` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no time',
  `fri_start` int(11) DEFAULT '100',
  `fri_start_val` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no time',
  `fri_end` int(11) DEFAULT '100',
  `fri_end_val` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no time',
  `sat_start` int(11) DEFAULT '100',
  `sat_start_val` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no time',
  `sat_end` int(11) DEFAULT '100',
  `sat_end_val` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no time',
  `sun_start` int(11) DEFAULT '100',
  `sun_start_val` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no time',
  `sun_end` int(11) DEFAULT '100',
  `sun_end_val` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no time',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `teacher_id`, `level`, `mon_start`, `mon_start_val`, `mon_end`, `mon_end_val`, `tue_start`, `tue_start_val`, `tue_end`, `tue_end_val`, `wed_start`, `wed_start_val`, `wed_end`, `wed_end_val`, `thu_start`, `thu_start_val`, `thu_end`, `thu_end_val`, `fri_start`, `fri_start_val`, `fri_end`, `fri_end_val`, `sat_start`, `sat_start_val`, `sat_end`, `sat_end_val`, `sun_start`, `sun_start_val`, `sun_end`, `sun_end_val`, `created_at`, `updated_at`) VALUES
(40, 1, '1', 1, '1:00 am', 0, '12:00 am', 1, '1:00 am', 100, 'no time', 2, '2:00 am', 100, 'no time', 100, 'no time', 100, 'no time', 3, '3:00 am', 1, '1:00 am', 100, 'no time', 100, 'no time', 1, '1:00 am', 100, 'no time', '2021-12-18 02:23:29', '2022-01-16 05:57:54'),
(41, 1, '2', 0, '12:00 am', 1, '1:00 am', 100, 'no time', 100, 'no time', 100, 'no time', 3, '3:00 am', 2, '2:00 am', 100, 'no time', 100, 'no time', 100, 'no time', 100, 'no time', 100, 'no time', 100, 'no time', 100, 'no time', '2021-12-18 02:23:48', '2022-01-13 14:10:56'),
(42, 1, '3', 2, '2:00 am', 7, '7:00 am', 1, '1:00 am', 100, 'no time', 100, 'no time', 100, 'no time', 100, 'no time', 100, 'no time', 1, '1:00 am', 1, '1:00 am', 100, 'no time', 100, 'no time', 100, 'no time', 100, 'no time', '2021-12-18 02:23:49', '2022-01-13 14:11:41'),
(43, 1, '4', 2, '2:00 am', 2, '2:00 am', 100, 'no time', 100, 'no time', 100, 'no time', 100, 'no time', 100, 'no time', 100, 'no time', 100, 'no time', 100, 'no time', 100, 'no time', 100, 'no time', 100, 'no time', 100, 'no time', '2021-12-18 02:23:50', '2022-01-13 14:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `time_spans`
--

CREATE TABLE `time_spans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mon_start` int(11) DEFAULT '100',
  `mon_end` int(11) DEFAULT '100',
  `tue_start` int(11) DEFAULT '100',
  `tue_end` int(11) DEFAULT '100',
  `wed_start` int(11) DEFAULT '100',
  `wed_end` int(11) DEFAULT '100',
  `thu_start` int(11) DEFAULT '100',
  `thu_end` int(11) DEFAULT '100',
  `fri_start` int(11) DEFAULT '100',
  `fri_end` int(11) DEFAULT '100',
  `sat_start` int(11) DEFAULT '100',
  `sat_end` int(11) DEFAULT '100',
  `sun_start` int(11) DEFAULT '100',
  `sun_end` int(11) DEFAULT '100',
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'bilaL', 'bilal@gmail.com', NULL, '$2y$10$AwMN6AJVC5hBxKf67p6/RusejKZp7umQKDIlDFwDp/mWHOA9Ltm6u', NULL, '2021-12-10 12:09:07', '2021-12-10 12:09:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `booked_schedules`
--
ALTER TABLE `booked_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booked_schedules_student_id_foreign` (`student_id`),
  ADD KEY `booked_schedules_schedule_id_foreign` (`schedule_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hrs_times`
--
ALTER TABLE `hrs_times`
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
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `time_spans`
--
ALTER TABLE `time_spans`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booked_schedules`
--
ALTER TABLE `booked_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hrs_times`
--
ALTER TABLE `hrs_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `time_spans`
--
ALTER TABLE `time_spans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booked_schedules`
--
ALTER TABLE `booked_schedules`
  ADD CONSTRAINT `booked_schedules_schedule_id_foreign` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`id`),
  ADD CONSTRAINT `booked_schedules_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`);

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

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
