-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 10:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thaitanic`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` blob NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(72, 'Smoked Meat Skewers', 34, 0x53637265656e73686f7420283635292e706e67, 3),
(73, 'Pasta Farfelle', 19, 0x53637265656e73686f7420283638292e706e67, 1),
(74, 'Rice and Salmon', 20, 0x53637265656e73686f7420283639292e706e67, 1);

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
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `image` blob NOT NULL,
  `total` int(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`name`, `category`, `price`, `quantity`, `image`, `total`, `id`) VALUES
('tomatoes', 'food', 5, 20, 0x746f6d61746f65732e6a7067, 125, 2),
('cheese', 'food', 350, 0, 0x6368656573652e6a7067, 700, 3),
('onions', 'food', 20, 4, 0x6f6e696f6e732e6a7067, 80, 4),
('mango juice', 'drinks', 200, 3, 0x6d616e676f5f6a756963652e6a706567, 800, 14),
('orange juice', 'drinks', 200, 10, 0x4f72616e67656a756963652e6a7067, 2000, 15),
('pineapple juice', 'drinks', 200, 5, 0x70696e656170706c652d6a756963652e6a7067, 1000, 16),
('pasta', 'food', 200, 5, 0x70617374612e6a7067, 800, 18);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `category_id` varchar(100) NOT NULL,
  `par_category_id` varchar(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_id` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loyalty`
--

CREATE TABLE `loyalty` (
  `email` varchar(100) NOT NULL,
  `points` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loyalty`
--

INSERT INTO `loyalty` (`email`, `points`, `grand_total`) VALUES
('', 0, 0),
('Aman@gmail.com', 3, 3),
('Array', 43, 0),
('asava.majani.0@gmail.com', 2, 2),
('jack@gmail.com', 0, 0),
('jameson@gmail.com', 0, 0),
('jsehmi246@gmail.com', 0, 0),
('jsehmi791@gmail.com', 0, 0),
('Lebron@gmail.com', 0, 0),
('tommyT@gmail.com', 0, 0),
('wayne.majani@hotmail.com', 0, 0);

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_10_24_093926_create_roles_table', 1),
(5, '2022_10_24_101645_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `neworder`
--

CREATE TABLE `neworder` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `total_products` varchar(100) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `neworder`
--

INSERT INTO `neworder` (`id`, `name`, `email`, `method`, `street`, `total_products`, `total_price`) VALUES
(238, 'hgc', 'Aman@gmail.com', 'cash on delivery', 'Table 1', 'Pad Thai (6) , Grilled Shrimp (1) , Spicy Fried Prawns (4) , Asian Udon Noodles (1) ', 328),
(240, 'Wayne', 'asava.majani.0@gmail.com', 'cash on delivery', 'Table 1', 'Spicy Fried Prawns (4) , Asian Udon Noodles (1) , Pasta Farfelle (1) ', 204),
(248, 'Wayne', 'wayne.majani@hotmail.com', 'cash', 'Table 1', 'Smoked Meat Skewers (1) , Asian Udon Noodles (1) , Spicy Fried Prawns (1) ', 90),
(249, 'Wayne', 'wayne.majani@hotmail.com', 'cash', 'Table 1', 'Pasta Farfelle (1) , Smoked Meat Skewers (1) , Asian Udon Noodles (1) ', 66),
(250, 'Wayne', 'wayne.majani@hotmail.com', 'cash', 'Table 1', 'Asian Udon Noodles (25) , Pasta Farfelle (12) , Pad Thai (20) ', 953),
(251, 'Wayne', 'wayne.majani@hotmail.com', 'cash', 'Table 1', 'Smoked Meat Skewers (1) , Pasta Farfelle (1) , Pad Thai (1) ', 61),
(252, 'Wayne', 'wayne.majani@hotmail.com', 'cash', 'Table 1', 'Smoked Meat Skewers (2) , Pad Thai (1) , Pasta Farfelle (1) ', 107),
(253, 'Wayne', 'wayne.majani@hotmail.com', 'cash', 'Table 1', 'Smoked Meat Skewers (3) , Pasta Farfelle (1) , Rice and Salmon (1) ', 127);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` blob NOT NULL,
  `description` varchar(255) NOT NULL,
  `availability` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`, `availability`) VALUES
(6, 'Bolognese with Feta ', 20, 0x53637265656e73686f7420283630292e706e67, '0', 1),
(8, 'Grilled T-Bone Steak', 23, 0x53637265656e73686f7420283633292e706e67, '0', 1),
(9, 'Asian Udon Noodles', 13, 0x53637265656e73686f7420283637292e706e67, '0', 0),
(10, 'Smoked Meat Skewers', 34, 0x53637265656e73686f7420283635292e706e67, '0', 0),
(12, 'Pasta Farfelle', 19, 0x53637265656e73686f7420283638292e706e67, '0', 0),
(13, 'Rice and Salmon', 20, 0x53637265656e73686f7420283639292e706e67, '0', 0),
(14, 'Pad Thai', 20, 0x53637265656e73686f7420283730292e706e67, '0', 0),
(15, 'Spicy Fried Prawns', 43, 0x53637265656e73686f7420283732292e706e67, '0', 0),
(18, 'Grilled Shrimp', 23, 0x646f776e6c6f61642e6a666966, '10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone_number` int(25) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `time_made` time(3) DEFAULT NULL,
  `date_made` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(10, 'Admin'),
(20, 'Waiter'),
(30, 'Inventory'),
(40, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `totalorder`
--

CREATE TABLE `totalorder` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `total_product` varchar(100) NOT NULL,
  `total_price` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0,
  `time` time NOT NULL DEFAULT current_timestamp(),
  `availability` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totalorder`
--

INSERT INTO `totalorder` (`id`, `name`, `email`, `method`, `street`, `total_product`, `total_price`, `order_status`, `time`, `availability`) VALUES
(65, 'Jeevan', 'jsehmi246@gmail.com', 'cash on delivery', 'Table 1', 'Grilled T-Bone Steak (3) , Pad Thai (10) , Grilled Shrimp (1) ', 292, 2, '00:00:00', 0),
(66, 'singh.sehmi@strathmore.edu', 'jsehmi246@gmail.com', 'cash on delivery', 'Table 1', 'Grilled T-Bone Steak (3) , Pad Thai (10) , Grilled Shrimp (1) ', 289, 2, '00:00:00', 0),
(67, 'Tony', 'jack@gmail.com', 'cash on delivery', 'Table 1', 'Grilled T-Bone Steak (3) , Pad Thai (10) , Grilled Shrimp (1) ', 292, 2, '00:00:00', 0),
(69, 'Tony', 'jack@gmail.com', 'cash on delivery', 'Table 1', 'Grilled T-Bone Steak (3) , Pad Thai (10) , Grilled Shrimp (1) ', 286, 2, '00:00:00', 0),
(70, 'Jeevan', 'Aman@gmail.com', 'cash on delivery', 'Table 1', 'Grilled T-Bone Steak (3) , Pad Thai (10) , Grilled Shrimp (1) , Spicy Fried Prawns (4) ', 464, 1, '00:00:00', 0),
(71, 'Jeevan', 'Aman@gmail.com', 'cash on delivery', 'Table 1', 'Grilled T-Bone Steak (3) , Pad Thai (10) , Grilled Shrimp (1) , Spicy Fried Prawns (4) ', 459, 2, '00:00:00', 0),
(72, 'Aman', 'Aman@gmail.com', 'cash on delivery', 'Table 1', 'Grilled T-Bone Steak (3) , Pad Thai (10) , Grilled Shrimp (1) , Spicy Fried Prawns (4) ', 464, 1, '00:00:00', 0),
(75, 'Amanhychgc', 'Aman@gmail.com', 'cash on delivery', 'Table 1', 'Grilled T-Bone Steak (5) , Pad Thai (10) , Grilled Shrimp (1) , Spicy Fried Prawns (4) ', 510, 1, '00:00:00', 0),
(76, 'Amancyutd', 'Aman@gmail.com', 'cash on delivery', 'Table 1', 'Pad Thai (10) , Grilled Shrimp (1) , Spicy Fried Prawns (4) , Asian Udon Noodles (1) ', 408, 0, '00:00:00', 0),
(77, 'Amanhgcf', 'Aman@gmail.com', 'cash on delivery', 'Table 1', 'Pad Thai (6) , Grilled Shrimp (1) , Spicy Fried Prawns (4) , Asian Udon Noodles (1) ', 319, 0, '00:00:00', 0),
(78, 'hgc', 'Aman@gmail.com', 'cash on delivery', 'Table 1', 'Pad Thai (6) , Grilled Shrimp (1) , Spicy Fried Prawns (4) , Asian Udon Noodles (1) ', 328, 0, '00:00:00', 0),
(79, 'Wayne', 'wayne.majani@hotmail.com', 'cash on delivery', 'Table 1', 'Spicy Fried Prawns (4) , Asian Udon Noodles (1) , Pasta Farfelle (1) ', 0, 0, '00:00:00', 0),
(80, 'Wayne', 'asava.majani.0@gmail.com', 'cash on delivery', 'Table 1', 'Spicy Fried Prawns (4) , Asian Udon Noodles (1) , Pasta Farfelle (1) ', 204, 2, '00:00:00', 0),
(81, 'Wayne', 'wayne.majani@hotmail.com', 'cash on delivery', 'Table 1', 'Grilled T-Bone Steak (1) , Asian Udon Noodles (1) , Bolognese with Feta  (1) , Smoked Meat Skewers (', 90, 0, '14:02:29', 1),
(82, 'Wayne', 'wayne.majani@hotmail.com', 'cash on delivery', 'Table 1', 'Asian Udon Noodles (1) , Bolognese with Feta  (1) , Smoked Meat Skewers (1) ', 66, 0, '14:03:13', 1),
(83, 'Wayne', 'wayne.majani@hotmail.com', 'cash on delivery', 'Table 1', 'Asian Udon Noodles (1) , Bolognese with Feta  (1) , Smoked Meat Skewers (1) ', 67, 0, '14:03:40', 1),
(84, 'Wayne', 'wayne.majani@hotmail.com', 'cash on delivery', 'Table 1', 'Asian Udon Noodles (1) , Bolognese with Feta  (1) , Smoked Meat Skewers (1) ', 67, 2, '14:03:56', 1),
(85, 'Wayne', 'wayne.majani@hotmail.com', 'cash on delivery', 'Table 1', 'Asian Udon Noodles (1) , Bolognese with Feta  (1) , Smoked Meat Skewers (1) ', 67, 0, '23:39:42', 1),
(86, 'Wayne', 'wayne.majani@hotmail.com', 'cash on delivery', 'Table 1', 'Smoked Meat Skewers (1) , Asian Udon Noodles (1) , Spicy Fried Prawns (1) ', 90, 0, '08:49:50', 1),
(87, 'Wayne', 'wayne.majani@hotmail.com', 'cash', 'Table 1', 'Smoked Meat Skewers (1) , Asian Udon Noodles (1) , Spicy Fried Prawns (1) ', 90, 2, '08:50:53', 1),
(88, 'Wayne', 'wayne.majani@hotmail.com', 'cash', 'Table 1', 'Smoked Meat Skewers (1) , Asian Udon Noodles (1) , Spicy Fried Prawns (1) ', 90, 0, '09:04:41', 1),
(89, 'Wayne', 'wayne.majani@hotmail.com', 'cash', 'Table 1', 'Pasta Farfelle (1) , Smoked Meat Skewers (1) , Asian Udon Noodles (1) ', 66, 1, '22:47:54', 1),
(90, 'Wayne', 'wayne.majani@hotmail.com', 'cash', 'Table 1', 'Asian Udon Noodles (25) , Pasta Farfelle (12) , Pad Thai (20) ', 953, 1, '14:19:40', 1),
(91, 'Wayne', 'wayne.majani@hotmail.com', 'cash', 'Table 1', 'Smoked Meat Skewers (1) , Pasta Farfelle (1) , Pad Thai (1) ', 61, 0, '14:32:17', 1),
(92, 'Wayne', 'wayne.majani@hotmail.com', 'cash', 'Table 1', 'Smoked Meat Skewers (2) , Pad Thai (1) , Pasta Farfelle (1) ', 107, 1, '16:31:53', 1),
(93, 'Wayne', 'wayne.majani@hotmail.com', 'cash', 'Table 1', 'Smoked Meat Skewers (3) , Pasta Farfelle (1) , Rice and Salmon (1) ', 127, 0, '16:39:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, ' SE5 Admin', 'admin@se.com', 30, '2022-11-06 04:15:25', '$2y$10$NaYp6INLYQbDtf1LtkuUEe20V53DQf5ZBqpXfG0FDfr3wYe2gbzC6', NULL, '2022-11-06 04:15:25', '2022-11-06 04:15:25'),
(5, 'test', 'wayneasava6@gmail.com', 10, NULL, '$2y$10$YmDuhpoZk2XGImb3Q2XMB.9q7z3k71iVrvivi9BxaungVTeRchxBa', NULL, NULL, NULL),
(6, 'Wayne', 'wayne.majani@hotmail.com', 10, NULL, '$2y$10$u2fz70Bky5l7W//.4sXHuOH6Muqsb/gevk7JdGz4twfdBMLpwI1w6', NULL, NULL, NULL),
(7, 'Jeff', 'user@email.com', 20, NULL, '$2y$10$gJl4WvxsFSaNJi/66mE5e.qKHOPEoz0/.UlBN/Uw4GZi4NrHuRAJa', NULL, NULL, NULL),
(8, 'Wayne', 'customer@email.com', 40, NULL, '$2y$10$8VbLOvbZb.C4ho5/N64DNeSCOOUaRhanQGX0W00p2oER/1Jf92Uz.', NULL, NULL, NULL),
(9, 'Janet', 'janet@mail.com', 20, NULL, '$2y$10$qDxgzuT1xVlKzfOX1nc8se6BlFT6idcuvEeW.nAoEYzx6LwDD5jK2', NULL, NULL, NULL),
(10, 'Bob', 'wayne.asava@strathmore.edu', 20, NULL, '$2y$10$kRxo835LC5ZCD6N1opeoROrzPmmdUTnjATS79211L.WtJ6rRwnY/i', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loyalty`
--
ALTER TABLE `loyalty`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neworder`
--
ALTER TABLE `neworder`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `totalorder`
--
ALTER TABLE `totalorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_user_type_foreign` (`user_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `neworder`
--
ALTER TABLE `neworder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `totalorder`
--
ALTER TABLE `totalorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_user_type_foreign` FOREIGN KEY (`user_type`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
