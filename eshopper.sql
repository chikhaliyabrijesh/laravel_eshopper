-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 02:58 PM
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
-- Database: `eshopper`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproducts`
--

CREATE TABLE `addproducts` (
  `id` int(10) UNSIGNED NOT NULL,
  `productimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryid` int(10) UNSIGNED NOT NULL,
  `subcategoryid` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oldprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `newprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addproducts`
--

INSERT INTO `addproducts` (`id`, `productimage`, `productname`, `categoryid`, `subcategoryid`, `description`, `qty`, `oldprice`, `newprice`, `created_at`, `updated_at`) VALUES
(1, '262279985.webp', 'Mens Shirt', 1, 1, 'Men Slim Fit Solid Mandarin Collar Casual Shirt', '1', '799', '399', '2023-02-23 07:35:34', '2023-02-23 07:35:34'),
(2, '611370673.webp', 'Mens Shirt', 1, 1, 'Men Regular Fit Solid Spread Collar Casual Shirt', '1', '1000', '799', '2023-02-23 07:49:30', '2023-02-25 05:33:39'),
(4, '1976778757.webp', 'Mens Shirt', 1, 1, 'Men Regular Fit Solid Spread Collar Casual Shirt', '20', '1200', '999', '2023-02-23 10:16:41', '2023-02-25 05:33:12'),
(5, '2025966254.webp', 'Mens Shirt', 1, 1, 'Men Regular Fit Solid Button Down Collar Formal Shirt', '10', '1199', '1099', '2023-02-23 11:31:48', '2023-02-25 05:32:32'),
(6, '246712701.webp', 'Mens Shirt', 1, 1, 'mens full cotton shirt', '1', '1200', '799', '2023-02-27 08:26:50', '2023-02-27 08:26:50'),
(7, '662105008.webp', 'Mens Shirt', 1, 1, 'mens full cotton shirt', '10', '799', '99', '2023-02-27 08:28:13', '2023-02-27 08:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `blogname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blogname`, `description`, `created_at`, `updated_at`) VALUES
(1, 'fgfdf', 'dfvff', '2023-02-24 06:35:21', '2023-02-24 06:35:21'),
(2, 'fdsgdhysjhf', 'dgrjyukyujgddsffn', '2023-02-24 06:35:37', '2023-02-24 06:35:37'),
(3, 'drrhtkjgfdf', 'degfhytjyukik', '2023-02-24 06:35:42', '2023-02-24 06:35:42'),
(4, 'fryhstujyjgsdc', 'sfgfcnghjjknbccscfd', '2023-02-24 06:35:49', '2023-02-24 06:35:49'),
(5, 'dssfsdgtrj', 'sacrrhtstgf', '2023-02-24 06:35:54', '2023-02-24 06:35:54'),
(6, 'abcd', 'abcdecdsr', '2023-02-24 06:36:00', '2023-02-24 07:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `newprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pid`, `description`, `newprice`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 'Men Slim Fit Solid Mandarin Collar Casual Shirt', '₹ 399', '1', '2023-02-27 04:25:14', '2023-02-27 04:25:14'),
(2, 1, 'Men Slim Fit Solid Mandarin Collar Casual Shirt', '₹ 399', '2', '2023-02-27 04:37:03', '2023-02-27 04:37:03'),
(3, 1, 'Men Slim Fit Solid Mandarin Collar Casual Shirt', '₹ 399', '3', '2023-02-27 04:37:13', '2023-02-27 04:37:13'),
(11, 5, 'Men Regular Fit Solid Button Down Collar Formal Shirt', '₹ 1099', '1', '2023-02-27 08:20:48', '2023-02-27 08:20:48');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoryname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryname`, `created_at`, `updated_at`) VALUES
(1, 'Mens Product', '2023-02-23 12:54:18', '2023-02-23 12:54:18'),
(2, 'Womens Product', '2023-02-23 12:54:18', '2023-02-23 12:54:18'),
(3, 'Kids Product', '2023-02-23 12:54:51', '2023-02-23 12:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ketan Patel', 'ketan@gmail.com', 'hii', 'hii', '2023-02-24 08:58:37', '2023-02-24 08:58:37'),
(2, 'Akshar Patel', 'akshar@gmail.com', 'hii', 'hii', '2023-02-24 08:59:30', '2023-02-24 08:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `mobile`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Ketan Patel', 'ketan@gmail.com', '$2y$10$TlF3N4USNIRX0nN6Mi31Le9D8Mb7m1wI/tGtdRKuokeQ0ju1g3vlK', 9998993333, 'Rajkot', '2023-02-24 10:53:08', '2023-02-24 10:53:08'),
(2, 'Akshar Patel', 'akshar@gmail.com', '$2y$10$AXsxJlNTjrS411.3Dr6pr.WhAkbvnnZhm/VwNNQWAW/d6AqEo3xnK', 9998993333, 'Rajkot', '2023-02-24 10:54:09', '2023-02-24 10:54:09');

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
-- Table structure for table `gallaries`
--

CREATE TABLE `gallaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `productimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallaries`
--

INSERT INTO `gallaries` (`id`, `productimage`, `description`, `created_at`, `updated_at`) VALUES
(1, '1294528280.webp', 'Mens Formal Shirt', '2023-02-24 04:43:38', '2023-02-24 04:43:38'),
(2, '1217379750.webp', 'Mens Formal Shirt', '2023-02-24 04:43:58', '2023-02-24 04:43:58'),
(3, '882705620.webp', 'Mens Formal Shirt', '2023-02-24 04:44:19', '2023-02-24 04:44:19'),
(4, '962444009.webp', 'Mens Formal Shirt', '2023-02-24 04:44:38', '2023-02-24 04:44:38'),
(5, '1633537185.webp', 'Mens Formal Shirt', '2023-02-24 04:45:00', '2023-02-24 05:45:33'),
(6, '1658455037.webp', 'Mens Formal Shirt', '2023-02-24 04:45:45', '2023-02-24 07:01:28');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_23_052304_create_categories_table', 1),
(6, '2023_02_23_052337_create_subcategories_table', 1),
(7, '2023_02_23_052413_create_addproducts_table', 1),
(8, '2023_02_24_053243_create__gallaries_table', 2),
(9, '2023_02_24_062324_create_gallaries_table', 3),
(10, '2023_02_24_064737_create_gallaries_table', 4),
(11, '2023_02_24_114135_create_blogs_table', 5),
(12, '2023_02_24_135401_create_contacts_table', 6),
(13, '2023_02_24_154145_create_customers_table', 7),
(14, '2023_02_25_133827_create_cart_table', 8),
(15, '2023_02_27_073132_create_cart_table', 9),
(16, '2023_02_27_092424_create_cart_table', 10),
(17, '2023_02_27_092914_create_cart_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoryid` int(10) UNSIGNED NOT NULL,
  `subcategoryname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `categoryid`, `subcategoryname`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mens Top Wear', '2023-02-23 12:57:28', '2023-02-23 12:57:28'),
(2, 1, 'Mens Bottom Wear', '2023-02-23 12:57:43', '2023-02-23 12:57:43'),
(3, 2, 'Womens Ethnic', '2023-02-23 12:57:43', '2023-02-23 12:57:43'),
(4, 2, 'Womens Western', '2023-02-23 12:58:37', '2023-02-23 12:58:37'),
(5, 3, 'Boys T-Shirts', '2023-02-23 12:59:12', '2023-02-23 12:59:12'),
(6, 3, 'Boys Jeans', '2023-02-23 12:59:12', '2023-02-23 12:59:12'),
(7, 1, 'Mens Footwear', '2023-02-23 12:59:12', '2023-02-23 12:59:12'),
(8, 2, 'Womens Footwear', '2023-02-23 12:59:12', '2023-02-23 12:59:12');

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
(1, 'Brijesh Chikhaliya', 'brijeshchikhaliya1@gmail.com', NULL, '$2y$10$JGPA8GIZZQZJPEC6m2Ona.rcRPJ8lwACLYNh1VesnFiTp5L8bL31e', NULL, '2023-02-23 07:32:03', '2023-02-23 07:32:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproducts`
--
ALTER TABLE `addproducts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addproducts_categoryid_foreign` (`categoryid`),
  ADD KEY `addproducts_subcategoryid_foreign` (`subcategoryid`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_pid_foreign` (`pid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallaries`
--
ALTER TABLE `gallaries`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_categoryid_foreign` (`categoryid`);

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
-- AUTO_INCREMENT for table `addproducts`
--
ALTER TABLE `addproducts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallaries`
--
ALTER TABLE `gallaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addproducts`
--
ALTER TABLE `addproducts`
  ADD CONSTRAINT `addproducts_categoryid_foreign` FOREIGN KEY (`categoryid`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `addproducts_subcategoryid_foreign` FOREIGN KEY (`subcategoryid`) REFERENCES `subcategories` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_pid_foreign` FOREIGN KEY (`pid`) REFERENCES `addproducts` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_categoryid_foreign` FOREIGN KEY (`categoryid`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
