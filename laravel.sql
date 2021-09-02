-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 03:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `bookkeepings`
--

CREATE TABLE `bookkeepings` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `checkins`
--

CREATE TABLE `checkins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `workingtime` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkins`
--

INSERT INTO `checkins` (`id`, `name`, `email`, `role`, `workingtime`, `created_at`, `updated_at`) VALUES
(5, 'Analyst', 'analyst@gmail.com', 2, 2148, '2021-08-14 06:01:09', '2021-08-04 06:01:09'),
(6, 'Manager', 'manager@gmail.com', 3, 1, '2021-08-04 06:02:07', '2021-08-04 06:02:07'),
(7, 'Manager', 'manager@gmail.com', 3, 1, '2021-08-04 06:36:05', '2021-08-04 06:36:05'),
(8, 'Anastasya Gusakova', 'anastasya@gmail.com', 3, 1, '2021-08-04 07:40:41', '2021-08-04 07:40:41'),
(9, 'Kuznet Anatoliiy', 'kuznetanatoliy@mail.ru', 3, 3, '2021-08-04 07:54:19', '2021-08-04 07:54:19'),
(10, 'Kuznet Anatoliiy', 'kuznetanatoliy@mail.ru', 3, 2, '2021-08-04 07:55:13', '2021-08-04 07:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `created_at`, `updated_at`, `event_name`, `client_name`, `company_name`, `email`, `start_date`, `end_date`) VALUES
(26, '2021-08-11 02:31:27', '2021-08-11 02:31:27', 'Bookkeeping', 'Antoliy Guz', 'W@TRANSPORT', 'admin@gmail.com', '2021-08-02 10:42:00', '2021-08-05 07:23:00'),
(27, '2021-08-11 02:57:43', '2021-08-11 02:57:43', 'Tax service1', 'Gusakova Aan', '@Product Web', 'analyst@gmail.com', '2021-08-04 00:00:00', '2021-08-07 00:00:00'),
(28, '2021-08-11 02:59:03', '2021-08-11 02:59:03', 'Payroll service', 'Guwan', 'Tax TIC RK', 'manager@gmail.com', '2021-08-05 00:00:00', '2021-08-09 00:00:00'),
(29, '2021-08-11 03:00:15', '2021-08-11 03:00:15', 'INTI', 'Kliya', 'Onwapeaon', 'analyst@gmail.com', '2021-08-12 00:00:00', '2021-08-14 00:00:00'),
(30, '2021-08-11 03:00:46', '2021-08-11 03:00:46', 'www', 'Anastasya', 'INterior Rus', 'analyst@gmail.com', '2021-08-13 00:00:00', '2021-08-16 00:00:00'),
(34, '2021-08-11 10:05:24', '2021-08-11 10:05:24', 'INTI', 'Marosky', 'Architecture.com', 'anastasya@gmail.com', '2021-08-06 00:00:00', '2021-08-12 00:00:00'),
(35, '2021-08-11 10:07:00', '2021-08-11 10:07:00', 'Payroll', 'Gusakova', 'Techinical .com', 'manager@gmail.com', '2021-08-12 00:00:00', '2021-08-14 00:00:00'),
(36, '2021-08-13 05:02:01', '2021-08-13 05:02:01', 'qweqweqwe', 'qweqweqwe', 'qweqweqwe', 'manager@gmail.com', '2021-08-15 14:05:00', '2021-08-23 13:04:00'),
(37, '2021-08-13 05:40:40', '2021-08-13 05:40:40', 'Bookkeeping', 'Anastasya', 'W@architecture.com', 'manager@gmail.com', '2021-08-18 02:42:00', '2021-08-26 01:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `resulttime` int(11) NOT NULL,
  `payamount` int(11) NOT NULL,
  `paidtime` int(11) DEFAULT NULL,
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
(87, '2014_10_12_000000_create_users_table', 1),
(88, '2014_10_12_100000_create_password_resets_table', 1),
(89, '2021_07_22_213911_create_revenues_table', 1),
(90, '2021_07_22_214113_create_bookkeepings_table', 1),
(91, '2021_07_23_010752_create_services_table', 1),
(92, '2021_07_26_070212_create_roles_table', 1),
(93, '2021_07_26_110623_create_servicequotes_table', 1),
(94, '2021_08_03_091154_create_checkin_table', 1),
(95, '2021_08_04_020244_create_invoice_table', 1),
(96, '2021_08_06_171913_create_events_table', 2),
(97, '2021_08_06_184444_create_events_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_new` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `message`, `created_at`, `is_new`) VALUES
(1, 1, 'User ccc has been registered!', '2021-08-02 22:44:21', 0),
(2, 1, 'User wewew has been registered!', '2021-08-02 22:47:57', 0),
(3, 2, 'Setting has been changed by Admin', '2021-08-11 06:44:25', 0),
(4, 2, 'Setting has been changed by Admin', '2021-08-11 06:44:53', 0),
(5, 2, 'Setting has been changed by Admin', '2021-08-11 06:45:02', 0),
(6, 2, 'Setting has been changed by Admin', '2021-08-11 06:45:12', 0),
(7, 2, 'Setting has been changed by Admin', '2021-08-11 06:45:22', 0);

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
-- Table structure for table `revenues`
--

CREATE TABLE `revenues` (
  `id` int(10) UNSIGNED NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicequotes`
--

CREATE TABLE `servicequotes` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicequotes`
--

INSERT INTO `servicequotes` (`id`, `service_name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Income Tax Preparation', '$15', '2021-07-26 11:02:12', '2021-07-26 11:02:12'),
(2, 'ITIN Process', '$35', '2021-07-26 11:02:32', '2021-04-28 17:23:37'),
(3, 'Bookkeeping Services', '$30', '2021-07-26 11:02:46', '2021-07-26 11:02:46'),
(4, 'Payroll Services', '$50', '2021-07-26 11:03:03', '2021-07-28 23:37:58'),
(5, 'Notary Services', '$100', '2021-07-26 11:03:18', '2021-07-26 11:03:18'),
(6, 'Business Consulting', '$80', '2021-07-26 11:03:37', '2021-07-28 23:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_id`, `status`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, '0', '$15', '2021-08-04 07:55:43', '2021-08-04 07:55:43'),
(2, 2, '0', '$35', '2021-08-04 07:55:46', '2021-08-04 07:55:46'),
(3, 3, '0', '$30', '2021-08-04 07:55:48', '2021-08-04 07:55:48'),
(4, 4, '0', '$50', '2021-08-04 07:55:51', '2021-08-04 07:55:51'),
(5, 5, '0', '$100', '2021-08-04 07:55:53', '2021-08-04 07:55:53'),
(6, 6, '0', '$80', '2021-08-04 07:55:55', '2021-08-04 07:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `event_color`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 0, NULL, '$2y$10$UJq5UvcgBZtFHZMpy0jKi.kla.kWu9Sytz8wWBPbKResVhfJcXEEy', '', NULL, NULL, NULL),
(2, 'Client', 'client@gmail.com', 1, NULL, '$2y$10$5I6vROrKhr.BO9mnuSS4AedLDRy7O1spwauVc5PfYaTzU1CeyJMiC', '', NULL, NULL, NULL),
(3, 'Analyst', 'analyst@gmail.com', 2, NULL, '$2y$10$wLYqISgVyrAOR2zxTtHl7umR7qNOA7ZFILA1uZAu1MMLMHUrGy80u', '#6574e6', NULL, NULL, '2021-08-11 06:44:53'),
(4, 'Manager', 'manager@gmail.com', 2, NULL, '$2y$10$3b4dm8v60Qijfzgx4iMek.dww5DCh5XlRVkoObZs8JR/nnEONJSpW', '#d165e6', NULL, NULL, '2021-08-11 06:45:02'),
(5, 'Anastasya Gusakova', 'anastasya@gmail.com', 2, NULL, '$2y$10$rakA.ND0.zX0Tl3ncyfSkOBG3.WHWWSRmGJhcErRJ7feq0in9MuXa', '#65e4e6', NULL, '2021-08-04 07:40:09', '2021-08-11 06:45:12'),
(6, 'Kuznet Anatoliiy', 'kuznetanatoliy@mail.ru', 2, NULL, '$2y$10$JXAkUHSU6/BuC/J3XsYVv.50vu7SdhEqvrKOpFr0hnMy4W4XfJX5m', '#e4e665', NULL, '2021-08-04 07:53:21', '2021-08-11 06:45:22'),
(7, 'anatoliy gusakoav', 'anatoliy123123123@gmail.com', 3, NULL, '$2y$10$zLFj.zipLzl.VNfc4MTqe.yhoKxh8YDePoG5W9sO..Y3.XW1Lz.zC', '#65e66a', NULL, '2021-08-11 06:42:36', '2021-08-11 06:42:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookkeepings`
--
ALTER TABLE `bookkeepings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkins`
--
ALTER TABLE `checkins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `revenues`
--
ALTER TABLE `revenues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicequotes`
--
ALTER TABLE `servicequotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `bookkeepings`
--
ALTER TABLE `bookkeepings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `checkins`
--
ALTER TABLE `checkins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `revenues`
--
ALTER TABLE `revenues`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicequotes`
--
ALTER TABLE `servicequotes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
