-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2021 at 08:13 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `directory`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

DROP TABLE IF EXISTS `applicants`;
CREATE TABLE IF NOT EXISTS `applicants` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `applicants_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `user_id`, `first_name`, `last_name`, `address`, `experience`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 5, 'Keefe', 'Bowers', 'Ut et odit voluptate', 'Non quod aspernatur', '+1 (572) 949-9371', '2021-04-01 15:14:27', '2021-04-01 15:14:27'),
(2, 12, 'Francis', 'Avila', 'Sed velit magnam Nam', 'Commodi perferendis', '+1 (645) 309-3818', '2021-04-01 16:42:38', '2021-04-01 16:42:38'),
(3, 15, 'Noble', 'Marks', 'Sit officia in ut r', 'Ullamco facilis amet', '+1 (735) 401-5447', '2021-04-01 17:26:02', '2021-04-01 17:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `companies_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `company_name`, `username`, `address`, `phone_number`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Beck and Gross Co', 'gapyqudoc', 'Tempora consequatur', '+1 (321) 147-1255', NULL, '2021-04-01 15:05:46', '2021-04-01 15:05:46'),
(2, 6, 'Knox Castaneda Plc', 'hodidefut', 'Quae eum numquam nos', '+1 (344) 901-2292', NULL, '2021-04-01 15:14:46', '2021-04-01 15:14:46'),
(3, 7, 'Mcdonald Mcfadden Associates', 'juweto', 'Sed nemo deleniti di', '+1 (794) 733-3986', NULL, '2021-04-01 15:26:10', '2021-04-01 15:26:10'),
(4, 8, 'Ramirez Sykes Associates', 'Alice', 'Eiusmod aliquam dist', '+1 (763) 658-2676', NULL, '2021-04-01 15:53:41', '2021-04-01 15:53:41'),
(5, 9, 'Woods Peterson LLC', 'Tom', 'Similique eum repudi', '+1 (952) 295-8754', NULL, '2021-04-01 15:54:34', '2021-04-01 15:54:34'),
(6, 10, 'Warren and Pratt Plc', 'siroqaje', 'Voluptatem fugiat oc', '+1 (388) 979-4465', NULL, '2021-04-01 16:27:49', '2021-04-01 16:27:49'),
(7, 11, 'Gentry and Howard Traders', 'tepot', 'Sint lorem illum la', '+1 (577) 141-6775', NULL, '2021-04-01 16:40:37', '2021-04-01 16:40:37'),
(8, 13, 'Wilson Crosby Plc', 'ryqanoxewy', 'Culpa dicta vel vel', '+1 (809) 984-2371', NULL, '2021-04-01 16:42:57', '2021-04-01 16:42:57'),
(9, 14, 'Vazquez and Terry Co', 'pojesik', 'Quod velit eaque aut', '+1 (492) 638-8121', NULL, '2021-04-01 16:46:46', '2021-04-01 16:46:46'),
(10, 16, 'Haley Cox Traders', 'hywif', 'Deserunt qui volupta', '+1 (516) 746-5487', NULL, '2021-04-01 18:09:15', '2021-04-01 18:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `company_profiles`
--

DROP TABLE IF EXISTS `company_profiles`;
CREATE TABLE IF NOT EXISTS `company_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `about_company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `company_profiles_company_id_foreign` (`company_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultants`
--

DROP TABLE IF EXISTS `consultants`;
CREATE TABLE IF NOT EXISTS `consultants` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consultants`
--

INSERT INTO `consultants` (`id`, `first_name`, `last_name`, `user_id`, `profession`, `portfolio`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'Huduma', 'Nzuri', 15, 'Et eos omnis harum', 'Harum quaerat maiore', '+1 (505) 578-1731', NULL, NULL),
(2, 'Adrienne', 'Maxwell', 15, 'Tempor facere minim', 'Dicta saepe soluta q', '+1 (906) 831-1732', NULL, NULL),
(3, 'Cain', 'Acevedo', 15, 'Harum voluptatum nob', 'Esse ut asperiores n', '+1 (381) 807-9917', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_range` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `company_name`, `job_title`, `job_description`, `qualification`, `job_location`, `salary_range`, `deadline`, `tags`, `job_type`, `created_at`, `updated_at`) VALUES
(1, 1, 'Larsen and Roberts LLC', 'System Administrator', 'Voluptate provident', 'Nesciunt id eiusmod', 'Mollit velit aspern', '1,000,000Tshs - 5,000,000Tshs', '2021-12-04', NULL, 'Internship', '2021-04-01 15:06:33', '2021-04-01 15:06:33'),
(2, 8, 'Cain and Martin LLC', 'Web Developer', 'Nulla sint laboris', 'Nisi sit nulla maxim', 'Ut consequatur Eos', '1,000,000Tshs - 5,000,000Tshs', '1996-01-01', NULL, 'Consultant', '2021-04-01 15:54:04', '2021-04-01 15:54:04'),
(3, 10, 'Whitley and Harvey Co', 'System Analyst', 'In adipisci corporis', 'Reprehenderit commod', 'Quia occaecat maiore', '1,000,000Tshs - 5,000,000Tshs', '2009-04-04', NULL, 'Part Time', '2021-04-01 16:29:05', '2021-04-01 16:29:05'),
(4, 10, 'Winters and Patel Associates', 'Computer Technician', 'Eu et occaecat place', 'Qui nihil vel et ex', 'Iusto natus nemo ill', '5,000,000Tshs - More', '1987-12-07', NULL, 'Full Time', '2021-04-01 16:38:32', '2021-04-01 16:38:32'),
(5, 10, 'Spence and Adams Associates', 'Network Engineer', 'Voluptas est est dol', 'Aliqua Repellendus', 'Proident sed enim d', '1,000,000Tshs - 5,000,000Tshs', '1981-01-19', NULL, 'Full Time', '2021-04-01 16:40:09', '2021-04-01 16:40:09'),
(6, 11, 'Ewing Benjamin LLC', 'Software Development', 'Quia quis qui culpa', 'Sint et eum velit', 'Sed velit corporis e', '5,000,000Tshs - More', '1983-04-07', NULL, 'Internship', '2021-04-01 16:40:56', '2021-04-01 16:40:56'),
(13, 8, 'Flynn Maxwell Trading', 'Network Engineer', 'Voluptatem est fugia', 'Eius nisi quas dolor', 'Quibusdam explicabo', '700,000Tshs - 1,000,000Tshs', '2008-12-18', NULL, 'Consultant', '2021-04-02 11:33:09', '2021-04-02 11:33:09'),
(12, 16, 'Hunter and Perry Plc', 'Network Engineer', 'Quia deserunt in repmmm', 'Ipsum aperiam volup', 'Sint enim sit fugia', '400,000Tshs - 700,000Tshs', '1992-06-08', NULL, 'Consultant', '2021-04-01 18:09:32', '2021-04-01 18:09:32'),
(11, 14, 'Kirby West LLC', 'Mobile Application Developer', 'Id id ducimus qui', 'Laudantium in et sa', 'Ad voluptatibus modi', '5,000,000Tshs - More', '1985-05-17', NULL, 'Part Time', '2021-04-01 17:19:00', '2021-04-01 17:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

DROP TABLE IF EXISTS `job_applications`;
CREATE TABLE IF NOT EXISTS `job_applications` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `applicant_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_profiles`
--

DROP TABLE IF EXISTS `job_seeker_profiles`;
CREATE TABLE IF NOT EXISTS `job_seeker_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicants_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `job_seeker_profiles_applicants_id_foreign` (`applicants_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_09_17_093449_create_jobs_table', 1),
(4, '2020_09_17_101714_create_tenders_table', 1),
(5, '2020_09_17_105923_create_tender_profiles_table', 1),
(6, '2020_09_17_132430_create_job_seeker_profiles_table', 1),
(7, '2020_09_22_133645_create_consultants_table', 1),
(8, '2020_10_02_091336_create_users_table', 1),
(9, '2020_10_03_083547_create_companies_table', 1),
(10, '2020_10_03_083730_create_applicants_table', 1),
(11, '2020_10_03_085832_create_company_profiles_table', 1),
(12, '2020_10_08_081052_create_permission_tables', 1),
(13, '2020_11_12_090525_create_tender_applications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 6),
(1, 'App\\Models\\User', 7),
(1, 'App\\Models\\User', 8),
(1, 'App\\Models\\User', 9),
(1, 'App\\Models\\User', 10),
(1, 'App\\Models\\User', 11),
(1, 'App\\Models\\User', 13),
(1, 'App\\Models\\User', 14),
(1, 'App\\Models\\User', 16),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 12),
(2, 'App\\Models\\User', 15);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'company', 'web', '2021-04-01 15:05:45', '2021-04-01 15:05:45'),
(2, 'consultant', 'web', '2021-04-01 15:11:43', '2021-04-01 15:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tenders`
--

DROP TABLE IF EXISTS `tenders`;
CREATE TABLE IF NOT EXISTS `tenders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tender_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tender_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tender_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tender_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tenders_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenders`
--

INSERT INTO `tenders` (`id`, `user_id`, `company_name`, `tender_title`, `tender_description`, `file`, `tender_location`, `budget`, `fee`, `deadline`, `tags`, `tender_type`, `created_at`, `updated_at`) VALUES
(1, 1, 'Wilkerson Hess Traders', 'Quis at mollitia exp', 'Aliquip consectetur', 'ALICE TOM MACHUVE CV.docx', 'Voluptatibus ut fugi', 'Fugiat rerum dolore', 'Nisi voluptas volupt', '2015-01-02', NULL, 'Local', '2021-04-01 15:09:07', '2021-04-01 15:09:07'),
(2, 9, 'Solis and Taylor Associates', 'Duis accusantium rep', 'Dolore nesciunt inc', NULL, 'Aliquid numquam simi', 'Unde qui consequat', 'Velit reprehenderit', '2009-05-10', NULL, 'International', '2021-04-01 15:57:04', '2021-04-01 15:57:04'),
(3, 10, 'Dale Baird LLC', 'Sit perferendis volu', 'Tempore voluptatum', NULL, 'Dolore minima sapien', 'Nulla consequatur eu', 'Repudiandae eum vita', '1972-07-20', NULL, 'International', '2021-04-01 16:38:14', '2021-04-01 16:38:14'),
(4, 10, 'Koch Randolph LLC', 'Sed consequatur eum', 'Duis rerum esse sed', NULL, 'Eum saepe sunt eos', 'Itaque facilis quis', 'Officia animi dolor', '2007-11-12', NULL, 'International', '2021-04-01 16:38:42', '2021-04-01 16:38:42'),
(7, 16, 'Hunt Gillespie LLC', 'Alias perferendis id', 'Doloremque corrupti', NULL, 'Omnis laborum Ut ni', 'Hic perferendis id o', 'Ratione quos do dolo', '2018-02-14', NULL, 'Local', '2021-04-01 18:10:01', '2021-04-01 18:10:01'),
(6, 14, 'Stark Small Co', 'Saepe eaque magnam m', 'Et assumenda totam q', NULL, 'Totam consectetur e', 'Rerum ipsa quisquam', 'Quis veniam volupta', '1981-11-16', NULL, 'International', '2021-04-01 17:22:13', '2021-04-01 17:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `tender_applications`
--

DROP TABLE IF EXISTS `tender_applications`;
CREATE TABLE IF NOT EXISTS `tender_applications` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tender_id` bigint(20) UNSIGNED NOT NULL,
  `applicant_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tender_applications_tender_id_foreign` (`tender_id`),
  KEY `tender_applications_applicant_id_foreign` (`applicant_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tender_profiles`
--

DROP TABLE IF EXISTS `tender_profiles`;
CREATE TABLE IF NOT EXISTS `tender_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicants_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tender_profiles_applicants_id_foreign` (`applicants_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'gapyqudoc', '$2y$10$v66U8AntQMWLoB0y96vSs.FbEKWTwWDXZ8fDjM5wHtJ4vvB4L0XdW', 'hoju@mailinator.com', NULL, NULL, '2021-04-01 15:05:46', '2021-04-01 15:05:46'),
(2, 'gubyporeh', '$2y$10$Cdj1o7lPJ221tC2tLXI8LuSMo1gIMoT2IQUn6pBUWTlNM3.nCs/uW', 'jilyd@mailinator.com', NULL, NULL, '2021-04-01 15:11:44', '2021-04-01 15:11:44'),
(3, 'jobuvuhu', '$2y$10$sbhI1J20Qu8JJ7bYIu5aw.G0Rx/tH6ZdzxYfri/HvMLneSWoBJf5W', 'tosizirok@mailinator.com', NULL, NULL, '2021-04-01 15:12:07', '2021-04-01 15:12:07'),
(4, 'baginumyj', '$2y$10$deJ/XdJHuN/X6BqGnj/9r.mq.SSQJP7P9B/S3pVccweMAo7Zx1NbS', 'vosawyqizo@mailinator.com', NULL, NULL, '2021-04-01 15:14:03', '2021-04-01 15:14:03'),
(5, 'cihuwegif', '$2y$10$odwxxR/FbvWEKq5LBemhieBi7Zfy8wguEJazL7j/8AYHX.inYx5gy', 'pynodyve@mailinator.com', NULL, NULL, '2021-04-01 15:14:27', '2021-04-01 15:14:27'),
(6, 'hodidefut', '$2y$10$iwb5xfCrqTeydu0fnRsAUeZQcH97HJVuIt1zzIN1emS1wow2LZ9du', 'xiqanini@mailinator.com', NULL, NULL, '2021-04-01 15:14:46', '2021-04-01 15:14:46'),
(7, 'juweto', '$2y$10$7/E3L6Ez7h5wtgVgd5czgOjJ.rI4cNfZkD0ZBcYL6bIxHNAqT45q.', 'copit@mailinator.com', NULL, NULL, '2021-04-01 15:26:10', '2021-04-01 15:26:10'),
(8, 'Alice', '$2y$10$.KqnFHBWizGtggH4VC/MgeTPswp0MsJEbSdXxXpZQt7EC5TTu16wW', 'kyrilani@mailinator.com', NULL, NULL, '2021-04-01 15:53:40', '2021-04-01 15:53:40'),
(9, 'Tom', '$2y$10$0S0Z6M8Po/3vNOFcV3z3r.Vmbm1NgRGbCcfbYGPAxVM9W5z2JORC.', 'tipa@mailinator.com', NULL, NULL, '2021-04-01 15:54:34', '2021-04-01 15:54:34'),
(10, 'siroqaje', '$2y$10$bmsjRw0cmo9okTLUnycgkOEjEcDTSznYJDLznfw9HPDjxhiQ9p5/W', 'xemilupuxo@mailinator.com', NULL, NULL, '2021-04-01 16:27:48', '2021-04-01 16:27:48'),
(11, 'tepot', '$2y$10$OhaWA0u3iPDWbjC1cMbcmOcxksmhvN1uSyhLUPgYJ6JHXtEqaC.Ye', 'dilahidin@mailinator.com', NULL, NULL, '2021-04-01 16:40:37', '2021-04-01 16:40:37'),
(12, 'pekonypi', '$2y$10$yDffStu1jiVv0xbpN48AjuofHMx3iAv3B6wVK9ZISXQLTZXL4YTya', 'todywyga@mailinator.com', NULL, NULL, '2021-04-01 16:42:38', '2021-04-01 16:42:38'),
(13, 'ryqanoxewy', '$2y$10$p69728LuWDol8YE2vg9Mu.tm1164Uud57NXmtY4JFDF/M8hlIV382', 'keqaneciz@mailinator.com', NULL, NULL, '2021-04-01 16:42:57', '2021-04-01 16:42:57'),
(14, 'pojesik', '$2y$10$7GsYHvQGf59Z8WEfkP.rw.duja2.2kUcXYFe.IAtn9nC.yoI8mkgu', 'refykixa@mailinator.com', NULL, NULL, '2021-04-01 16:46:45', '2021-04-01 16:46:45'),
(15, 'huqim', '$2y$10$vTRkA2.tHtKh/ZMpHlPveOwBwYWlFERLrLF1EtFhaPMhAtMvRb58S', 'jebuzyz@mailinator.com', NULL, NULL, '2021-04-01 17:26:02', '2021-04-01 17:26:02'),
(16, 'hywif', '$2y$10$Ao8.OJW/cnK.6NNrWub4OeFz.1SSmiUni760d9ftgE0nzvLMCzd52', 'towo@mailinator.com', NULL, NULL, '2021-04-01 18:09:15', '2021-04-01 18:09:15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
