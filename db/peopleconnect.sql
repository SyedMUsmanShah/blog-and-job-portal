-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 03:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peopleconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(191) DEFAULT NULL,
  `description` text NOT NULL,
  `subject_type` varchar(191) DEFAULT NULL,
  `event` varchar(191) DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(191) DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `batch_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `designation` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `cover_letter` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `name`, `lname`, `email`, `number`, `message`, `designation`, `resume`, `cover_letter`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(10, 'Humza', 'Hashmi', 'hamzahashmi@gmail.com', '12345678910', 'i have good experience', 'Manager', '1691780276_64d684b4c7ea4.pdf', '1691780276_64d684b4c87fe.pdf', '2023-08-11 19:57:57', '2023-08-11 19:57:57', NULL, NULL, NULL, NULL),
(12, 'fname', 'lname', 'abc@gmail.com', '98375874', 'kjhewfukhwefgi', 'Manager', '1692038123_64da73eb29f4d.pdf', '1692038123_64da73eb2a8b7.pdf', '2023-08-14 19:35:23', '2023-08-14 19:35:23', NULL, NULL, NULL, NULL),
(13, 'First name', 'last name', 'email@gmail.com', '12345678910', 'message for HR', 'Manager', '1692369939_64df841364cac.pdf', '1692369939_64df841365adc.pdf', '2023-08-18 15:45:39', '2023-08-18 15:45:39', NULL, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` text NOT NULL,
  `detail` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `image`, `short_desc`, `detail`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'How to get a Job in People Connect', '/storage/photos/1/Blog/64ddf4a4682cd.jpg', 'This job is for overseas people who are interested in passive income and willing to move abroad.', '<p><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 14px; white-space-collapse: preserve-breaks;\"><b>Synchronous Services is a dynamic and innovative technology company at the forefront of creating cutting-edge mobile applications and web solutions. We are seeking a talented Full stack developer for web Apps, proficiency in flutter design is plus.</b>\r\n\r\nIf you are passionate about building intuitive user interfaces and have a proven track record of crafting exceptional mobile experiences, we would love to have you on our team.</span></p><p><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 14px; white-space-collapse: preserve-breaks;\"><b>What You\'ll Do:</b>\r\n• Develop and maintain high-quality mobile applications using Flutter framework\r\n• Collaborate with the development team to implement user interfaces for web applications using React\r\n• Work closely with the back-end team to integrate front-end interfaces with MERN stack components\r\n• Participate in the complete software development lifecycle, from concept to deployment\r\n• Optimize applications for maximum speed and scalability\r\n• Ensure cross-platform optimization for mobile device\r\n• Stay up-to-date with the latest trends and best practices in front-end</span><span class=\"WbZuDe\" style=\"display: inline; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 14px; white-space-collapse: preserve-breaks;\"> development\r\n\r\n<b>What You Need:</b>\r\n• 3-5 years proven experience as a Front-End Developer with expertise in Flutter and mobile application development\r\n• Bachelor\'s degree in Computer Science, Software Engineering, or a related field from a reputable institution (NUST, FAST, or NTU)\r\n• Strong proficiency in React and experience working with the MERN stack\r\n\r\n<b>Good to Have:</b>\r\n• Excellent problem-solving skills and attention to detail\r\n• Strong communication and teamwork abilities\r\n• A portfolio of previous projects demonstrating your skills and capabilities is a plus\r\n\r\nJoin us and be part of a team that\'s shaping the future of technology-driven solutions.</span><br></p>', '2023-08-18 11:23:12', '2023-08-18 12:23:12', NULL, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `order` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `commentable_id` bigint(20) UNSIGNED DEFAULT NULL,
  `commentable_type` varchar(191) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `user_name` varchar(191) DEFAULT NULL,
  `order` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `moderated_by` int(10) UNSIGNED DEFAULT NULL,
  `moderated_at` datetime DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `job_description` text NOT NULL,
  `salary` varchar(255) NOT NULL,
  `requirements` longtext NOT NULL,
  `responsibilities` longtext NOT NULL,
  `clicks` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `location`, `type`, `job_description`, `salary`, `requirements`, `responsibilities`, `clicks`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'Manager', 'London', 'Full-Time', 'We are currently seeking a highly skilled Machine Operator with experience in CAM Master, Jig Master, and NX Master to join our team. The successful candidate will be responsible for operating and maintaining machines, ensuring quality output and efficiency, and working collaboratively with team members.', '$2000', '<p><br></p><li style=\"font-family: Poppins, sans-serif;\">High school diploma or equivalent</li><li style=\"font-family: Poppins, sans-serif;\">Minimum of 2 years\' experience operating machines in a manufacturing or industrial setting</li><li style=\"font-family: Poppins, sans-serif;\">Proficiency in CAM Master, Jig Master and NX Master</li><li style=\"font-family: Poppins, sans-serif;\">Ability to interpret technical drawings and work orders</li><li style=\"font-family: Poppins, sans-serif;\">Strong attention to detail and quality control</li><li style=\"font-family: Poppins, sans-serif;\">Excellent problem-solving skills and ability to troubleshoot machine malfunctions</li><li style=\"font-family: Poppins, sans-serif;\">Ability to work collaboratively with team members and communicate effectively</li><li style=\"font-family: Poppins, sans-serif;\">Willingness to work flexible hours and overtime as needed</li><li style=\"font-family: Poppins, sans-serif;\">Ability to lift up to 50 pounds and stand for extended periods of time</li>', '<p><br></p><li style=\"color: rgb(51, 51, 51); font-family: Poppins, sans-serif;\">High school diploma or equivalent</li><li style=\"color: rgb(51, 51, 51); font-family: Poppins, sans-serif;\">Minimum of 2 years\' experience operating machines in a manufacturing or industrial setting</li><li style=\"color: rgb(51, 51, 51); font-family: Poppins, sans-serif;\">Proficiency in CAM Master, Jig Master and NX Master</li><li style=\"color: rgb(51, 51, 51); font-family: Poppins, sans-serif;\">Ability to interpret technical drawings and work orders</li><li style=\"color: rgb(51, 51, 51); font-family: Poppins, sans-serif;\">Strong attention to detail and quality control</li><li style=\"color: rgb(51, 51, 51); font-family: Poppins, sans-serif;\">Excellent problem-solving skills and ability to troubleshoot machine malfunctions</li><li style=\"color: rgb(51, 51, 51); font-family: Poppins, sans-serif;\">Ability to work collaboratively with team members and communicate effectively</li><li style=\"color: rgb(51, 51, 51); font-family: Poppins, sans-serif;\">Willingness to work flexible hours and overtime as needed</li><li style=\"color: rgb(51, 51, 51); font-family: Poppins, sans-serif;\">Ability to lift up to 50 pounds and stand for extended periods of time</li>', 14, '2023-08-18 14:52:53', '2023-08-18 15:52:53', NULL, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) DEFAULT NULL,
  `collection_name` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `file_name` varchar(191) NOT NULL,
  `mime_type` varchar(191) DEFAULT NULL,
  `disk` varchar(191) NOT NULL,
  `conversions_disk` varchar(191) DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metrics`
--

CREATE TABLE `metrics` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `clicks` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_11_062135_create_posts_table', 1),
(4, '2018_03_12_062135_create_categories_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2020_02_19_173641_create_settings_table', 1),
(8, '2020_02_19_173700_create_userprofiles_table', 1),
(9, '2020_02_19_173711_create_notifications_table', 1),
(10, '2020_02_22_115918_create_user_providers_table', 1),
(11, '2020_05_01_163442_create_tags_table', 1),
(12, '2020_05_01_163833_create_polymorphic_taggables_table', 1),
(13, '2020_05_04_151517_create_comments_table', 1),
(14, '2022_04_01_132914_create_media_table', 1),
(15, '2022_04_01_133918_create_permission_tables', 1),
(16, '2022_04_01_134140_create_activity_log_table', 1),
(17, '2022_04_01_134141_add_event_column_to_activity_log_table', 1),
(18, '2022_04_01_134142_add_batch_uuid_column_to_activity_log_table', 1),
(19, '2023_03_12_195541_add_expires_at_column_to_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4),
(5, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(191) NOT NULL,
  `notifiable_type` varchar(191) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) NOT NULL,
  `guard_name` varchar(125) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_backend', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(2, 'edit_settings', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(3, 'view_logs', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(4, 'view_users', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(5, 'add_users', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(6, 'edit_users', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(7, 'delete_users', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(8, 'restore_users', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(9, 'block_users', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(10, 'view_roles', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(11, 'add_roles', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(12, 'edit_roles', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(13, 'delete_roles', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(14, 'restore_roles', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(15, 'view_backups', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(16, 'add_backups', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(17, 'create_backups', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(18, 'download_backups', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(19, 'delete_backups', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(20, 'view_posts', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(21, 'add_posts', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(22, 'edit_posts', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(23, 'delete_posts', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(24, 'restore_posts', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(25, 'view_categories', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(26, 'add_categories', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(27, 'edit_categories', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(28, 'delete_categories', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(29, 'restore_categories', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(30, 'view_tags', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(31, 'add_tags', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(32, 'edit_tags', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(33, 'delete_tags', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(34, 'restore_tags', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(35, 'view_comments', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(36, 'add_comments', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(37, 'edit_comments', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(38, 'delete_comments', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(39, 'restore_comments', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `intro` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `type` varchar(191) DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `category_name` varchar(191) DEFAULT NULL,
  `is_featured` int(11) DEFAULT NULL,
  `featured_image` varchar(191) DEFAULT NULL,
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_og_image` varchar(191) DEFAULT NULL,
  `meta_og_url` varchar(191) DEFAULT NULL,
  `hits` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `order` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `moderated_by` int(10) UNSIGNED DEFAULT NULL,
  `moderated_at` datetime DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_by_name` varchar(191) DEFAULT NULL,
  `created_by_alias` varchar(191) DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) NOT NULL,
  `guard_name` varchar(125) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(2, 'administrator', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(3, 'manager', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(4, 'executive', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05'),
(5, 'user', 'web', '2023-08-10 07:11:05', '2023-08-10 07:11:05');

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
(1, 2),
(1, 3),
(1, 4),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `val` text DEFAULT NULL,
  `type` char(20) NOT NULL DEFAULT 'string',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `val`, `type`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'app_name', 'People Connect Inc.', 'string', 1, 1, NULL, '2023-08-10 08:11:15', '2023-08-10 08:11:15', NULL),
(2, 'footer_text', '<a href=\"\" class=\"text-muted\">People Connect Inc.</a>', 'string', 1, 1, NULL, '2023-08-10 08:11:15', '2023-08-10 08:11:15', NULL),
(3, 'show_copyright', '0', 'text', 1, 1, NULL, '2023-08-10 08:11:15', '2023-08-10 08:14:13', NULL),
(4, 'email', 'info@example.com', 'string', 1, 1, NULL, '2023-08-10 08:11:15', '2023-08-10 08:11:15', NULL),
(5, 'facebook_url', '#', 'string', 1, 1, NULL, '2023-08-10 08:11:15', '2023-08-10 08:11:15', NULL),
(6, 'twitter_url', '#', 'string', 1, 1, NULL, '2023-08-10 08:11:15', '2023-08-10 08:11:15', NULL),
(7, 'instagram_url', '#', 'string', 1, 1, NULL, '2023-08-10 08:11:15', '2023-08-10 08:11:15', NULL),
(8, 'linkedin_url', '#', 'string', 1, 1, NULL, '2023-08-10 08:11:15', '2023-08-10 08:11:15', NULL),
(9, 'youtube_url', '#', 'string', 1, 1, NULL, '2023-08-10 08:11:15', '2023-08-10 08:11:15', NULL),
(10, 'meta_site_name', 'Awesome Laravel | A Laravel Starter Project', 'text', 1, 1, NULL, '2023-08-10 08:11:15', '2023-08-10 08:11:15', NULL),
(11, 'meta_description', 'A CMS like modular starter application project built with Laravel 10.', 'text', 1, 1, NULL, '2023-08-10 08:11:15', '2023-08-10 08:11:15', NULL),
(12, 'meta_keyword', 'Web Application, Laravel,Laravel starter,Bootstrap,Admin,Template,Open,Source, nasir khan, nasirkhan', 'text', 1, 1, NULL, '2023-08-10 08:11:16', '2023-08-10 08:11:16', NULL),
(13, 'meta_image', 'img/default_banner.jpg', 'text', 1, 1, NULL, '2023-08-10 08:11:16', '2023-08-10 08:22:33', NULL),
(14, 'meta_fb_app_id', '569561286532601', 'text', 1, 1, NULL, '2023-08-10 08:11:16', '2023-08-10 08:11:16', NULL),
(15, 'meta_twitter_site', '@nasir8891', 'text', 1, 1, NULL, '2023-08-10 08:11:16', '2023-08-10 08:11:16', NULL),
(16, 'meta_twitter_creator', '@nasir8891', 'text', 1, 1, NULL, '2023-08-10 08:11:16', '2023-08-10 08:11:16', NULL),
(17, 'google_analytics', 'G-ABCDE12345', 'text', 1, 1, NULL, '2023-08-10 08:11:16', '2023-08-10 08:11:16', NULL),
(18, 'custom_css_block', NULL, 'string', 1, 1, NULL, '2023-08-10 08:11:16', '2023-08-10 08:11:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `taggables`
--

CREATE TABLE `taggables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `taggable_id` bigint(20) UNSIGNED NOT NULL,
  `taggable_type` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `group_name` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userprofiles`
--

CREATE TABLE `userprofiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `username` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `mobile` varchar(191) DEFAULT NULL,
  `gender` varchar(191) DEFAULT NULL,
  `url_website` varchar(191) DEFAULT NULL,
  `url_facebook` varchar(191) DEFAULT NULL,
  `url_twitter` varchar(191) DEFAULT NULL,
  `url_instagram` varchar(191) DEFAULT NULL,
  `url_linkedin` varchar(191) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address` text DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `avatar` varchar(191) DEFAULT NULL,
  `user_metadata` text DEFAULT NULL,
  `last_ip` varchar(191) DEFAULT NULL,
  `login_count` int(11) NOT NULL DEFAULT 0,
  `last_login` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userprofiles`
--

INSERT INTO `userprofiles` (`id`, `user_id`, `name`, `first_name`, `last_name`, `username`, `email`, `mobile`, `gender`, `url_website`, `url_facebook`, `url_twitter`, `url_instagram`, `url_linkedin`, `date_of_birth`, `address`, `bio`, `avatar`, `user_metadata`, `last_ip`, `login_count`, `last_login`, `email_verified_at`, `status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Super Admin', 'Super', 'Admin', '100001', 'super@admin.com', '+1-309-582-7904', 'Male', NULL, NULL, NULL, NULL, NULL, '2002-07-22', NULL, NULL, 'img/default-avatar.jpg', NULL, '127.0.0.1', 11, '2023-08-18 12:01:38', NULL, 1, NULL, 1, NULL, '2023-08-10 07:11:05', '2023-08-18 12:01:38', NULL),
(2, 2, 'Admin Istrator', 'Admin', 'Istrator', '100002', 'admin@admin.com', '470.818.7570', 'Female', NULL, NULL, NULL, NULL, NULL, '2016-08-25', NULL, NULL, 'img/default-avatar.jpg', NULL, NULL, 0, NULL, NULL, 1, NULL, NULL, NULL, '2023-08-10 07:11:05', '2023-08-10 07:11:05', NULL),
(3, 3, 'Manager', 'Manager', 'User User', '100003', 'manager@manager.com', '+1.231.370.7068', 'Female', NULL, NULL, NULL, NULL, NULL, '2014-12-14', NULL, NULL, 'img/default-avatar.jpg', NULL, NULL, 0, NULL, NULL, 1, NULL, NULL, NULL, '2023-08-10 07:11:05', '2023-08-10 07:11:05', NULL),
(4, 4, 'Executive User', 'Executive', 'User', '100004', 'executive@executive.com', '1-727-497-0901', 'Female', NULL, NULL, NULL, NULL, NULL, '1986-10-13', NULL, NULL, 'img/default-avatar.jpg', NULL, NULL, 0, NULL, NULL, 1, NULL, NULL, NULL, '2023-08-10 07:11:05', '2023-08-10 07:11:05', NULL),
(5, 5, 'General User', 'General', 'User', '100005', 'user@user.com', '(323) 958-2095', 'Female', NULL, NULL, NULL, NULL, NULL, '1993-06-19', NULL, NULL, 'img/default-avatar.jpg', NULL, NULL, 0, NULL, NULL, 1, NULL, NULL, NULL, '2023-08-10 07:11:05', '2023-08-10 07:11:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `username` varchar(191) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `mobile` varchar(191) DEFAULT NULL,
  `gender` varchar(191) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `avatar` varchar(191) DEFAULT 'img/default-avatar.jpg',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `username`, `email`, `mobile`, `gender`, `date_of_birth`, `email_verified_at`, `password`, `avatar`, `status`, `remember_token`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Super Admin', 'Super', 'Admin', '100001', 'super@admin.com', '+1-309-582-7904', 'Male', '2002-07-22', '2023-08-10 07:11:04', '$2y$10$jFVHgDt1zH5hbwND8QZXE.difJHOq0/pd1Ji6W6LjSZkM/94dS34G', 'img/default-avatar.jpg', 1, NULL, NULL, NULL, NULL, '2023-08-10 07:11:04', '2023-08-10 07:11:04', NULL),
(2, 'Admin Istrator', 'Admin', 'Istrator', '100002', 'admin@admin.com', '470.818.7570', 'Female', '2016-08-25', '2023-08-10 07:11:04', '$2y$10$NkSzjanvztrI5PQVCazb5eGcZ2Z04TMcVWDIleqGqz2UtLdCkq4qO', 'img/default-avatar.jpg', 1, NULL, NULL, NULL, NULL, '2023-08-10 07:11:04', '2023-08-10 07:11:04', NULL),
(3, 'Manager', 'Manager', 'User User', '100003', 'manager@manager.com', '+1.231.370.7068', 'Female', '2014-12-14', '2023-08-10 07:11:04', '$2y$10$2YyG.3DpsLq5im4S93uis.pNRGNVIOu.3MATeDya9mtOz.bWNUxA.', 'img/default-avatar.jpg', 1, NULL, NULL, NULL, NULL, '2023-08-10 07:11:04', '2023-08-10 07:11:04', NULL),
(4, 'Executive User', 'Executive', 'User', '100004', 'executive@executive.com', '1-727-497-0901', 'Female', '1986-10-13', '2023-08-10 07:11:05', '$2y$10$QfrJQJzCGdZbfpKmptEOzOMFi/tSwLsBpE.meh6Ku2qvXsMLUJShK', 'img/default-avatar.jpg', 1, NULL, NULL, NULL, NULL, '2023-08-10 07:11:05', '2023-08-10 07:11:05', NULL),
(5, 'General User', 'General', 'User', '100005', 'user@user.com', '(323) 958-2095', 'Female', '1993-06-19', '2023-08-10 07:11:05', '$2y$10$oRrp/NxHnVdgWRdvNscpluUKs0O3h0uWV7cfzRaLYJRR.JlPflTkq', 'img/default-avatar.jpg', 1, NULL, NULL, NULL, NULL, '2023-08-10 07:11:05', '2023-08-10 07:11:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_providers`
--

CREATE TABLE `user_providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `provider` varchar(191) NOT NULL,
  `provider_id` varchar(191) NOT NULL,
  `avatar` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `metrics`
--
ALTER TABLE `metrics`
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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD KEY `password_reset_tokens_email_index` (`email`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `taggables`
--
ALTER TABLE `taggables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userprofiles`
--
ALTER TABLE `userprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_providers`
--
ALTER TABLE `user_providers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_providers_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metrics`
--
ALTER TABLE `metrics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `taggables`
--
ALTER TABLE `taggables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userprofiles`
--
ALTER TABLE `userprofiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_providers`
--
ALTER TABLE `user_providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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

--
-- Constraints for table `user_providers`
--
ALTER TABLE `user_providers`
  ADD CONSTRAINT `user_providers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
