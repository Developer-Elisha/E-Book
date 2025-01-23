-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2024 at 09:45 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-book`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankdetailmodels`
--

DROP TABLE IF EXISTS `bankdetailmodels`;
CREATE TABLE IF NOT EXISTS `bankdetailmodels` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Card Number` int NOT NULL,
  `EXP Month` int NOT NULL,
  `EXP Year` int NOT NULL,
  `CVV Number` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `BookId` int NOT NULL DEFAULT '0',
  `UserId` int NOT NULL DEFAULT '0',
  `Book_Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `Price` int NOT NULL DEFAULT '0',
  `Total` int NOT NULL DEFAULT '0',
  `Thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `carts_bookid_unique` (`BookId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `BookId`, `UserId`, `Book_Title`, `Price`, `Total`, `Thumbnail`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'Rich Dad Poor Dad', 5500, 5500, '874178980.download.jpg', '2024-06-04 04:41:21', '2024-06-04 04:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryname`, `created_at`, `updated_at`) VALUES
(1, 'Novel', NULL, NULL),
(2, 'Finance', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `checkoutmodels`
--

DROP TABLE IF EXISTS `checkoutmodels`;
CREATE TABLE IF NOT EXISTS `checkoutmodels` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `no_of_products` int NOT NULL,
  `price` int NOT NULL,
  `discount_couple` int NOT NULL,
  `total` int NOT NULL,
  `category` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `checkoutmodels_category_foreign` (`category`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ewalletmodels`
--

DROP TABLE IF EXISTS `ewalletmodels`;
CREATE TABLE IF NOT EXISTS `ewalletmodels` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_02_12_213027_create_carts_table', 1),
(3, '2024_02_12_213113_create_categories_table', 1),
(4, '2024_02_12_213212_create_upload_books_table', 1),
(5, '2024_02_13_173346_create_checkoutmodels_table', 1),
(6, '2024_02_13_175045_create_bankdetailmodels_table', 1),
(7, '2024_02_13_175210_create_ewalletmodels_table', 1),
(8, '2024_02_18_220227_create_users_table', 1),
(9, '2024_06_03_211115_m1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upload_books`
--

DROP TABLE IF EXISTS `upload_books`;
CREATE TABLE IF NOT EXISTS `upload_books` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Book_Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PDF` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category` int NOT NULL,
  `Price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `upload_books_category_foreign` (`Category`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upload_books`
--

INSERT INTO `upload_books` (`id`, `Book_Title`, `Thumbnail`, `PDF`, `Description`, `Author`, `Category`, `Price`, `created_at`, `updated_at`) VALUES
(1, 'Rich Dad Poor Dad', '874178980.download.jpg', '2061712910.Untitled design.pdf', 'Rich Dad Poor Dad is a 1997 book written by Robert T. Kiyosaki and Sharon Lechter. It advocates the importance of financial literacy, financial independence and building wealth through investing in assets, real estate investing, starting and owning businesses, as well as increasing one\'s financial intelligence', 'Robert Kiyosaki', 2, 5500, '2024-06-04 04:31:45', '2024-06-04 04:31:45'),
(2, 'Harry Potter and the Philosopher\'s Stone', '996032933.9781408855652.jpg', '786397341.Quiz CSS with answers.pdf', 'HARRY POTTER has never even heard of Hogwarts when the LETTERS start dropping on the doormat at number four, Privet Drive. Addressed in GREEN INK on yellowish parchment with a PURPLE SEAL, they are swiftly confiscated by his GRISLY aunt and uncle. Then, on Harry\'s eleventh birthday, a great beetle-eyed giant of a man called RUBEUS HAGRID bursts in with some ASTONISHING news: Harry Potter is a wizard, and he has a place at Hogwarts School of Witchcraft and Wizardry. An incredible adventure is about to begin!', 'J. K. Rowling', 1, 3000, '2024-06-04 04:37:29', '2024-06-04 04:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Role` int NOT NULL DEFAULT '0',
  `Profile_Pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
