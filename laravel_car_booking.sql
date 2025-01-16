-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2025 at 02:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_car_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mohiuddin', 'admin@gmail.com', '$2y$10$Eyz3Kx8mciPbDfRKBFkkL.YnxSaUwRB66jkOA.KO2ivd042OsqOeG', NULL, '2025-01-14 11:20:12', '2025-01-14 11:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `car_list_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `pick_up_date` date NOT NULL,
  `drop_off_date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `status` enum('pending','confirm') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `customer_id`, `car_list_id`, `driver_id`, `pick_up_date`, `drop_off_date`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(4, 1, 12, 1, '2025-01-17', '2025-01-19', 12000, 'confirm', '2025-01-16 06:43:53', '2025-01-16 06:46:47'),
(5, 1, 13, 3, '2025-01-18', '2025-01-20', 24000, 'confirm', '2025-01-16 06:45:33', '2025-01-16 06:46:45'),
(6, 2, 14, 6, '2025-01-17', '2025-01-20', 25500, 'confirm', '2025-01-16 06:48:51', '2025-01-16 06:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `car_lists`
--

CREATE TABLE `car_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `engine` varchar(255) NOT NULL,
  `price_per_day` decimal(8,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_lists`
--

INSERT INTO `car_lists` (`id`, `brand`, `model`, `engine`, `price_per_day`, `image`, `status`, `created_at`, `updated_at`) VALUES
(11, 'Toyota', 'Land Cruiser', '1800hz', 8500.00, 'images/20250114172539.png', 'Available', '2025-01-14 11:25:39', '2025-01-14 11:25:39'),
(12, 'Honda', 'CR-V', '2200hz', 6000.00, 'images/20250114172610.png', 'Available', '2025-01-14 11:26:10', '2025-01-14 11:26:10'),
(13, 'BMW', 'X-7', '2100hz', 12000.00, 'images/20250114180405.png', 'Available', '2025-01-14 12:04:05', '2025-01-14 12:04:05'),
(14, 'Ford', 'Mustang', '2300hz', 8500.00, 'images/20250114180441.png', 'Available', '2025-01-14 12:04:41', '2025-01-14 12:04:41'),
(15, 'Lamborghini', 'Huracan', '3600hz', 9500.00, 'images/20250114180609.png', 'Available', '2025-01-14 12:06:09', '2025-01-14 12:06:09'),
(16, 'Mercedez', 'Benz-E Class', '2400hz', 14000.00, 'images/20250114180728.png', 'Available', '2025-01-14 12:07:30', '2025-01-14 12:07:30'),
(17, 'Mitsubishi', 'Lancer', '2600hz', 6500.00, 'images/20250114180820.png', 'Available', '2025-01-14 12:08:20', '2025-01-14 12:08:20'),
(18, 'Tata', 'Harrier', '2100hz', 5500.00, 'images/20250114180940.png', 'Available', '2025-01-14 12:09:40', '2025-01-14 12:09:40'),
(19, 'Volkswagen', 'Golf', '2100hz', 5000.00, 'images/20250114181144.png', 'Available', '2025-01-14 12:11:44', '2025-01-14 12:11:44'),
(20, 'Suzuki', 'Desire', '2300hz', 4500.00, 'images/20250114181227.png', 'Available', '2025-01-14 12:12:27', '2025-01-14 12:12:27'),
(21, 'Nissan', 'Micra', '2000hz', 7000.00, 'images/20250114181331.png', 'Available', '2025-01-14 12:13:31', '2025-01-14 12:13:31'),
(22, 'Nissan', 'Petrol', '2500hz', 6000.00, 'images/20250114181423.png', 'Available', '2025-01-14 12:14:23', '2025-01-14 12:14:23');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `password`, `photo`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Abdullah', 'asm@gmail.com', '$2y$10$03Tg2Ss56F9MyIZjgrmDseypWeRiknuEpNLGAI6u6y0VOJPElw1qW', NULL, NULL, NULL, '2025-01-14 11:20:12', '2025-01-14 11:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `phone`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Mohiuddin', 'mohiuddincr7@gmail', 'Need Car!!!', '01752437955', 'What type of car there??', '2025-01-14 12:21:34', '2025-01-14 12:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jamil Hossain', 'jamil@gmail.com', '$2y$10$o9IiOJS3o1UXD7R5YrlnjO8W/f.o6KVEUL9Jg5tIoviD6r5LXMktO', '01567980553', NULL, '2025-01-14 11:22:03', '2025-01-14 11:22:03'),
(2, 'Mahin Ahmed', 'mahin@gmail.com', '$2y$10$LsfMcWR0LIx1AQ2FGkMo8uVpV4kDbZgy89s0j4dFGOrfhwQGZcBhu', '01638563202', NULL, '2025-01-14 11:38:57', '2025-01-14 11:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `details` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `email`, `phone`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Safin', 'safin@gmail.com', '01758963548', 'Badda!!', '2025-01-14 11:26:40', '2025-01-14 11:26:40'),
(2, 'Saif Jahan', 'saif@gmail.com', '01758963548', 'Gulisthan!!', '2025-01-14 11:27:11', '2025-01-14 11:27:11'),
(3, 'Fahim Ahmed', 'fahim@gmail.com', '01958463858', 'Mirpur-1', '2025-01-14 12:16:41', '2025-01-14 12:16:41'),
(4, 'Robiul', 'robi@gmail.com', '01759684589', 'Rampura!!', '2025-01-14 12:17:22', '2025-01-14 12:17:22'),
(5, 'Jamal Hossain', 'jamal@gmail.com', '01658975489', 'Banani!!', '2025-01-14 12:18:00', '2025-01-14 12:18:00'),
(6, 'Karim Mia', 'karim@gmail.com', '01823564578', 'Paltan-Dhaka!!', '2025-01-14 12:19:02', '2025-01-14 12:19:02');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_11_19_161352_create_admins_table', 1),
(6, '2024_11_19_171833_create_clients_table', 1),
(7, '2024_11_26_181716_create_drivers_table', 1),
(8, '2024_11_28_040917_create_bookings_table', 1),
(9, '2024_11_30_071405_create_car_lists_table', 1),
(10, '2024_12_05_145913_create_contacts_table', 1),
(11, '2024_12_08_130048_create_customers_table', 1),
(12, '2025_01_08_181000_create_payments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` int(11) NOT NULL,
  `trxn_id` varchar(255) NOT NULL,
  `method` enum('bkash','nagad','rocket') NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `booking_id`, `trxn_id`, `method`, `amount`, `created_at`, `updated_at`) VALUES
(4, 4, 'adsvdbf sDfggfbn', 'bkash', 12000, '2025-01-16 06:44:18', '2025-01-16 06:44:18'),
(5, 5, 'fdsfbdgsnf', 'rocket', 24000, '2025-01-16 06:45:59', '2025-01-16 06:45:59'),
(6, 6, 'dfgdb afgeghd', 'bkash', 25500, '2025-01-16 06:49:45', '2025-01-16 06:49:45');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_lists`
--
ALTER TABLE `car_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `car_lists`
--
ALTER TABLE `car_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
