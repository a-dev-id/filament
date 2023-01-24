-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 24, 2023 at 03:20 PM
-- Server version: 8.0.27
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filament`
--

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

DROP TABLE IF EXISTS `awards`;
CREATE TABLE IF NOT EXISTS `awards` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` longtext COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `title`, `slug`, `subtitle`, `excerpt`, `description`, `banner_image`, `cover_image`, `button_text`, `button_link`, `meta_title`, `meta_description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '2017 Winner - World Luxury Hotel Awards', NULL, NULL, NULL, NULL, NULL, 'q3hYtLG3r0IucfS52FWiO3zqeVT6Zm-metaNjE0MDI4MmQ1ZjRkMzE2MTU3MTU2OS5wbmc=-.png', NULL, NULL, NULL, NULL, 1, '2023-01-22 20:05:39', '2023-01-22 20:05:39'),
(2, '2018 Recognition of Excellence - Hotels Combined', NULL, NULL, NULL, NULL, NULL, 'yVHeqS4527Bg9e22GXtDuJuVvPK17l-metaNjE0MDI4MmQxMjJiMzE0NDAzNjUxMy5qcGVn-.jpg', NULL, NULL, NULL, NULL, 1, '2023-01-22 20:06:34', '2023-01-22 20:06:34'),
(3, '2017 Winner - World Luxury Spa Awards', NULL, NULL, NULL, NULL, NULL, 'Q0QGQmIZm3wDQRQ0F3mj6U8Kq9mXKZ-metaNjE0MDI4MmM0OTllYzk4MzIwMjc5OS5wbmc=-.png', NULL, NULL, NULL, NULL, 1, '2023-01-22 20:07:31', '2023-01-22 20:07:31'),
(4, 'Traveller Spa & Wellness', NULL, NULL, NULL, NULL, NULL, 'Chcz3mxlzVaRKAaGE9aE8bvsgokYJE-metaNjE0MDI4MmM4OTk4YTQ2NjMyMTkzOC5qcGVn-.jpg', NULL, NULL, NULL, NULL, 1, '2023-01-22 20:08:14', '2023-01-22 20:08:14'),
(5, 'Galatian Signature Hotels Awards', NULL, NULL, NULL, NULL, NULL, 'TQpyO5MU25bQdHgMm4PapghL3CuI0U-metaNjE0MDI4MmIxNzFmYTc1NDU2ODY0Ni5wbmc=-.png', NULL, NULL, NULL, NULL, 1, '2023-01-22 20:09:01', '2023-01-22 20:09:01'),
(6, 'Lux Global Luxury Hotel & Spa Awards', NULL, NULL, NULL, NULL, NULL, '3iajqCnETAQ3Bi3GGzPjBOxCsdkqNO-metaNjE0MDI4MmFiZDBkZjgxMDU5MTE4Ni5wbmc=-.png', NULL, NULL, NULL, NULL, 1, '2023-01-22 20:11:06', '2023-01-22 20:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` longtext COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `subtitle`, `excerpt`, `description`, `banner_image`, `cover_image`, `button_text`, `button_link`, `meta_title`, `meta_description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'BALI\'S SITUATION IN THE MIDDLE OF A PANDEMIC', 'balis-situation-in-the-middle-of-a-pandemic', NULL, 'If you’re currently in Indonesia or have an upcoming holiday planned to Bali, you’re no doubt wondering “is it possible to stay on holiday in Bali even PPKM situation?”.', '<p><strong>Bali’s Situation in the Middle of a Pandemic</strong></p><p><strong>Is Bali Safe?</strong></p><p>If you’re currently in Indonesia or have an upcoming holiday planned to Bali, you’re no doubt wondering “is it possible to stay on holiday in Bali even PPKM situation?”. Well, the simple answer is Bali still safe for those who are fit, healthy and following correct hygiene and social distancing procedures. Staycation is a solution for those&nbsp; of you who want to enjoy a vacation in the midst of pandemic or even PPKM. Most hotels have unbeatable natural views, enjoyable guest activities, and relaxing stay. The covid numbers had been considerably low compared to other areas in the country, even worldwide. All citizens and visitors are asked to follow the guidelines of “social distancing” have to wear masks.</p><p><strong>Want to Enter Bali during Covid?</strong></p><p>Vacations to Bali for domestic tourists can be done again since July 31, 2020. But of course there are conditions that must be met to be able to vacation in Bali.<strong> </strong>These conditions have been changed several times by observing developments. Here we give you some requirements you need if you are’re flying to Bali according to Circular Letter Number SE 62 of 2021.</p><p><strong>1. Passengers are responsible for their own health by implementing and complying with health protocols;</strong></p><p><strong>2. Meet health requirements, in the form of:</strong></p><blockquote>a.&nbsp; flights from or to airports on the islands of Java and Bali, as well as areas designated through the Instruction of the Minister of Home Affairs as areas with PPKM Level 4 and PPKM Level 3 categories, must show a vaccine card (at least the first dose of vaccination) and a certificate a negative result of the RT-PCR test whose sample is taken within a maximum period of <strong>2x24 hours before departure</strong>;b. For flights between airports in Java and Bali, must show:<ol><li>a) Vaccine card (<strong>at least the first dose of vaccination</strong>) and a certificate of negative RT-PCR test results whose samples were taken within a maximum period of <strong>2x24 hours before departure;</strong></li><li>b) Vaccine card (<strong>second dose of vaccination</strong>) and a certificate of negative rapid test antigen results whose samples were taken within a maximum period of <strong>1x24 hours before departure</strong></li><li>c) For flights from and to airports outside the Java and Bali islands which are designated through the Instruction of the Minister of Home Affairs as areas with the PPKM Level 1 and PPKM Level 2 categories, they must show a certificate of negative rapid test result RT-PCR whose samples were taken within a maximum period of 2x24 hours before departure or negative results of rapid antigen tests whose samples are taken within a maximum period of 1x24 hours before departure;</li></ol>c. The obligation to show a vaccine card is excluded for travelers with special health conditions or comorbid diseases that cause travelers to be unable to receive vaccines, with the condition that they must attach a doctor\'s certificate from a Government Hospital stating that the person concerned has not and/or cannot take the COVID-19 vaccination;d. Fill in the Indonesian e-HAC at the departure airport, to be shown to the health officer at the destination/arrival airport;e. Persons/Passengers under 12 years of age are temporarily not allowed to travel within the country between provincial/district/city administrative boundaries;&nbsp;</blockquote><p><strong>What to do if you are getting sick in Bali?</strong></p><p>If you feel that you might have been infected you should call 112 or 223333 (Bali area) and&nbsp; the operator will guide you through the process. Usually patients will be picked up if they need to go to hospital. The Bali provincial government has assigned five hospitals to handle cases of corona virus infections. They are Sanglah General Hospital in Denpasar, Sanjiwani General Hospital in Gianyar, Tabanan General Hospital, Udayana University Hospital and Bali Mandara General Hospital.</p>', NULL, 'XRWyDpzSltndrgr2KKbPCMKwEeXDZ8-metaNjEzZWUzZGFlMjM0MjIyNjg4MzU5MC5qcGc=-.jpg', NULL, NULL, 'BALI\'S SITUATION IN THE MIDDLE OF A PANDEMIC', 'If you’re currently in Indonesia or have an upcoming holiday planned to Bali, you’re no doubt wondering “is it possible to stay on holiday in Bali even PPKM situation?”.', 1, '2023-01-23 01:20:41', '2023-01-23 19:23:15');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

DROP TABLE IF EXISTS `careers`;
CREATE TABLE IF NOT EXISTS `careers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` longtext COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'The Station', 'the-station', NULL, 1, '2023-01-19 20:03:20', '2023-01-19 20:03:20'),
(2, 'Aerial', 'aerial', NULL, 1, '2023-01-19 21:40:41', '2023-01-19 21:40:41'),
(3, 'Villa', 'villa', NULL, 1, '2023-01-19 21:40:47', '2023-01-19 21:40:47'),
(4, 'Pool', 'pool', NULL, 1, '2023-01-19 21:40:53', '2023-01-19 21:40:53'),
(5, 'Experience', 'experience', NULL, 1, '2023-01-19 21:41:01', '2023-01-19 21:41:01'),
(6, 'Restaurant', 'restaurant', NULL, 1, '2023-01-19 21:41:08', '2023-01-19 21:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `category_gallery`
--

DROP TABLE IF EXISTS `category_gallery`;
CREATE TABLE IF NOT EXISTS `category_gallery` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` bigint UNSIGNED NOT NULL,
  `gallery_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_gallery_category_id_foreign` (`category_id`),
  KEY `category_gallery_gallery_id_foreign` (`gallery_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_gallery`
--

INSERT INTO `category_gallery` (`id`, `category_id`, `gallery_id`, `created_at`, `updated_at`) VALUES
(12, 2, 7, NULL, NULL),
(11, 2, 6, NULL, NULL),
(10, 2, 5, NULL, NULL),
(9, 1, 4, NULL, NULL),
(8, 1, 3, NULL, NULL),
(7, 1, 2, NULL, NULL),
(13, 2, 9, NULL, NULL),
(14, 2, 10, NULL, NULL),
(15, 2, 11, NULL, NULL),
(16, 2, 12, NULL, NULL),
(17, 3, 13, NULL, NULL),
(18, 3, 14, NULL, NULL),
(19, 3, 15, NULL, NULL),
(20, 3, 17, NULL, NULL),
(21, 3, 18, NULL, NULL),
(22, 3, 19, NULL, NULL),
(23, 3, 20, NULL, NULL),
(24, 3, 21, NULL, NULL),
(25, 4, 22, NULL, NULL),
(26, 4, 23, NULL, NULL),
(27, 4, 24, NULL, NULL),
(28, 4, 25, NULL, NULL),
(31, 5, 26, NULL, NULL),
(30, 5, 27, NULL, NULL),
(32, 6, 28, NULL, NULL),
(33, 6, 29, NULL, NULL),
(34, 6, 30, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `css_scripts`
--

DROP TABLE IF EXISTS `css_scripts`;
CREATE TABLE IF NOT EXISTS `css_scripts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `script` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `css_scripts`
--

INSERT INTO `css_scripts` (`id`, `section`, `script`, `created_at`, `updated_at`) VALUES
(1, 'header', 'asd', '2023-01-17 01:08:20', '2023-01-17 01:08:20'),
(2, 'body', 'asd', '2023-01-17 01:08:34', '2023-01-17 01:08:34'),
(3, 'footer', 'asd', '2023-01-17 01:08:49', '2023-01-17 01:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `custom_fields`
--

DROP TABLE IF EXISTS `custom_fields`;
CREATE TABLE IF NOT EXISTS `custom_fields` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_fields`
--

INSERT INTO `custom_fields` (`id`, `title`, `subtitle`, `excerpt`, `description`, `button_text`, `button_link`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'VIP Treatment', NULL, 'on arrival', NULL, NULL, NULL, 1, '2023-01-16 19:41:47', '2023-01-16 20:36:59'),
(2, 'Fresh Tropical fruits', NULL, 'replenished each day', NULL, NULL, NULL, 1, '2023-01-16 19:42:03', '2023-01-16 20:37:09'),
(3, 'Early check in and late check out', NULL, 'subject to availability', NULL, NULL, NULL, 1, '2023-01-16 19:42:30', '2023-01-16 20:37:16'),
(4, 'Shuttle service to Ubud Town', NULL, 'on scheduled', NULL, NULL, NULL, 1, '2023-01-16 19:42:45', '2023-01-16 20:37:26'),
(5, 'Turn down service', NULL, 'daily basis', NULL, NULL, NULL, 1, '2023-01-16 19:43:05', '2023-01-16 20:37:36'),
(6, 'Bathrobe and slippers', NULL, 'in the villas', NULL, NULL, NULL, 1, '2023-01-16 19:43:16', '2023-01-16 20:37:43'),
(17, 'RICE FIELDS', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/0aca3695384a462e8ded408d94bec3c1?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:21:17', '2023-01-23 22:21:17'),
(16, 'THE STATION', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/0aca3695384a462e8ded408d94bec3c1?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:20:26', '2023-01-23 22:20:26'),
(15, 'Lobby', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/59ce585d5d454ca188ba2b1ddef22930?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:19:40', '2023-01-23 22:19:40'),
(18, 'MAIN POOL', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/fe774079e59f41ecbc660bd2ae88d055?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:21:40', '2023-01-23 22:21:40'),
(19, 'MAIN POOL 2', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/41a2b264cd03417494a1faca9068f671?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:22:06', '2023-01-23 22:22:06'),
(20, 'RESTAURANT', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/1e04d6685e854f6a8712dfbd598b6bae?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:22:20', '2023-01-23 22:22:20'),
(21, 'BEDROOM & BATHROOM', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/f21e0962835f4913af369f0485910f4d?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:22:42', '2023-01-23 22:22:42'),
(22, 'BATHROOM', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/322a6670c1154c11b2f4ed26408f4426?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:22:57', '2023-01-23 22:22:57'),
(23, 'PATHWAY SUITES', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/7532ec3963454ac9b2c9157c85d116de?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:23:17', '2023-01-23 22:23:17'),
(24, 'PATHWAY SUITES 2', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/6e15084496f5437abd943045154117f8?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:23:31', '2023-01-23 22:23:31'),
(25, 'BATHROOM 2', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/abd943827ea44d33b278ef6d10d3bfa9?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:23:47', '2023-01-23 22:23:47'),
(26, 'BEDROOM & BALCONY', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/47248664a8724001a4c316401f088548?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:24:05', '2023-01-23 22:24:05'),
(27, 'JACUZZI', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/372008a2e5484c0bbd42140542e02777?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:24:19', '2023-01-23 22:24:19'),
(28, 'SPA ROOM', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/7fa7badbf3ea43a1a228e48a9048720e?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:24:34', '2023-01-23 22:24:34'),
(29, 'OUTDOOR SPA ROOM', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/055c3c079a334dacb93f5e185363ef87?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:24:51', '2023-01-23 22:24:51'),
(30, 'OUTDOOR SPA ROOM 2', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/5ccf0ad37126404d96f62d9cc7f77e55?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:25:07', '2023-01-23 22:25:07'),
(31, 'OUTDOOR SPA ROOM 3', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/5ccf0ad37126404d96f62d9cc7f77e55?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:25:24', '2023-01-23 22:25:24'),
(32, 'PATHWAY SPA', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/f6db5746bec24dfc8ecd7082368e9da1?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:25:40', '2023-01-23 22:25:40'),
(33, 'BEDROOM & BATHROOM', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/9027819fb6dc4406a54cb06f6cccdde4?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:26:01', '2023-01-23 22:26:01'),
(34, 'BEDROOM & BALCONY', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/74a87c014b7d4832abe7c2f6db73631d?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:26:57', '2023-01-23 22:26:57'),
(35, 'BALCONY', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/4bb039a166174671bf8eefe8ff3bc064?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:27:16', '2023-01-23 22:27:16'),
(36, 'BATHROOM', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/f4052aa49f2146d0ac5204f8bd8d15a0?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:27:30', '2023-01-23 22:27:30'),
(37, 'BATHROOM 2', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/4106089bcb9749098cab906ade996868?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:27:44', '2023-01-23 22:27:44'),
(38, 'PATHWAY VILLA', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/19e8c48c1b9d41dd984672f95e94b84c?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:27:59', '2023-01-23 22:27:59'),
(39, 'PATHWAY VILLA 2', NULL, NULL, NULL, 'GO TO THE TOUR', 'https://momento360.com/e/u/d96d122b4abf47e9ba76a18b18d2141c?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium', 1, '2023-01-23 22:28:15', '2023-01-23 22:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `custom_field_page`
--

DROP TABLE IF EXISTS `custom_field_page`;
CREATE TABLE IF NOT EXISTS `custom_field_page` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_id` bigint UNSIGNED NOT NULL,
  `custom_field_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `custom_field_page_page_id_foreign` (`page_id`),
  KEY `custom_field_page_custom_field_id_foreign` (`custom_field_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_field_page`
--

INSERT INTO `custom_field_page` (`id`, `page_id`, `custom_field_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 5, 7, NULL, NULL),
(8, 5, 8, NULL, NULL),
(9, 5, 9, NULL, NULL),
(10, 5, 10, NULL, NULL),
(11, 5, 11, NULL, NULL),
(12, 5, 12, NULL, NULL),
(13, 5, 13, NULL, NULL),
(14, 5, 14, NULL, NULL),
(15, 15, 15, NULL, NULL),
(16, 15, 16, NULL, NULL),
(17, 15, 17, NULL, NULL),
(18, 15, 18, NULL, NULL),
(19, 15, 19, NULL, NULL),
(20, 15, 20, NULL, NULL),
(21, 15, 21, NULL, NULL),
(22, 15, 22, NULL, NULL),
(23, 15, 23, NULL, NULL),
(24, 15, 24, NULL, NULL),
(25, 15, 25, NULL, NULL),
(26, 15, 26, NULL, NULL),
(27, 15, 27, NULL, NULL),
(28, 15, 28, NULL, NULL),
(29, 15, 29, NULL, NULL),
(30, 15, 30, NULL, NULL),
(31, 15, 31, NULL, NULL),
(32, 15, 32, NULL, NULL),
(33, 15, 33, NULL, NULL),
(34, 15, 34, NULL, NULL),
(35, 15, 35, NULL, NULL),
(36, 15, 36, NULL, NULL),
(37, 15, 37, NULL, NULL),
(38, 15, 38, NULL, NULL),
(39, 15, 39, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `day_guests`
--

DROP TABLE IF EXISTS `day_guests`;
CREATE TABLE IF NOT EXISTS `day_guests` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` longtext COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `day_guests`
--

INSERT INTO `day_guests` (`id`, `title`, `slug`, `subtitle`, `excerpt`, `description`, `banner_image`, `cover_image`, `button_text`, `button_link`, `price`, `per`, `meta_title`, `meta_description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Swim at Nandini', 'swim-at-nandini', NULL, 'Swim among the treetops. Feel the luxury of swimming in the heart of Ubud rainforest whilst seeing the treetops between you.', '<p>Swim among the treetops. Feel the luxury of swimming in the heart of Ubud rainforest whilst seeing the treetops between you. Experience this once in a lifetime offers with our signature 5 courses lunch Floating Sensation for two persons. Swim and lunch for two persons at IDR 800,000++</p>', '71q7A8mHsor07dFtzdipD9tkyCzEnY-metaNjEzZTliMWVhNDgwZDAxNDcyNjQzMi5qcGVn-.jpg', NULL, 'Inquire Now', NULL, 'IDR 800,000++', 'Per two persons', 'Swim at Nandini', 'Swim among the treetops. Feel the luxury of swimming in the heart of Ubud rainforest whilst seeing the treetops between you.', 1, '2023-01-22 22:53:49', '2023-01-22 22:53:49'),
(2, 'Spa at Nandini', 'spa-at-nandini', NULL, 'Our award-winning Sungai Spa is famous for its Balinese Massage.', '<p>Our award-winning Sungai Spa is famous for its Balinese Massage. With the lull of Ayung River, experience the authentic Exotic Balinese Massage at Sungai Spa. IDR 650,000++ per person</p>', 'DLDCXjJnO7WvTVnVZRtX4qbPeqBDtU-metaNjEzZTliOTFjZDM5MDAxMzk1MzMxNC5wbmc=-.png', NULL, 'Inquire Now', NULL, 'IDR 650,000++', 'Per person', 'Spa at Nandini', 'Our award-winning Sungai Spa is famous for its Balinese Massage.', 1, '2023-01-22 22:58:51', '2023-01-22 22:58:51'),
(3, 'Lunch at Nandini', 'lunch-at-nandini', NULL, 'We would like to invite you to a culinary journey curated specially by Chef Gustu.', '<p>We would like to invite you to a culinary journey curated specially by Chef Gustu. Experience our 3 courses lunch with the breathtaking view of Ubud Rainforest. IDR 400,000++ per person</p>', '0mP9GcrnVt1BVCs7l2X1Vu0FVt5YwH-metaNjEzZTliZTE0NTQzZDA1MDczOTc5Mi5qcGVn-.jpg', NULL, 'Inquire Now', NULL, 'IDR 400,000++', 'Per person', 'Lunch at Nandini', 'We would like to invite you to a culinary journey curated specially by Chef Gustu.', 1, '2023-01-22 22:59:54', '2023-01-22 22:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `day_guest_images`
--

DROP TABLE IF EXISTS `day_guest_images`;
CREATE TABLE IF NOT EXISTS `day_guest_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `day_guest_id` int NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `day_guest_images`
--

INSERT INTO `day_guest_images` (`id`, `day_guest_id`, `title`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Swim at Nandini', '3RCayMcleHUYw2O1SoQQOwMHnSOcH0-metaNjEzZTliMWVhNDgwZDAxNDcyNjQzMi5qcGVn-.jpg', 1, '2023-01-23 00:12:47', '2023-01-23 00:13:33'),
(2, 2, 'Spa at Nandini', 'mIPcjDECmNOhRVxXwYsHVV8k5fUwQ0-metaNjEzZTliOTFjZDM5MDAxMzk1MzMxNC5wbmc=-.png', 1, '2023-01-23 00:32:33', '2023-01-23 00:33:19'),
(3, 3, 'Lunch at Nandini', 'A1RgVWjeTQ6hfysBnC5Ycq6lmZrkir-metaNjEzZTliZTE0NTQzZDA1MDczOTc5Mi5qcGVn-.jpg', 1, '2023-01-23 00:32:54', '2023-01-23 00:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `dinings`
--

DROP TABLE IF EXISTS `dinings`;
CREATE TABLE IF NOT EXISTS `dinings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` longtext COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dinings`
--

INSERT INTO `dinings` (`id`, `title`, `slug`, `subtitle`, `excerpt`, `description`, `banner_image`, `cover_image`, `button_text`, `button_link`, `price`, `per`, `meta_title`, `meta_description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Romantic Dining by The River', 'romantic-dining-by-the-river', NULL, 'Imagine having a romantic dinner under the twinkling stars in the heart of ubud jungle, right by the Ayung river and the sounds of the jungle.', '<p>Imagine having a romantic dinner under the twinkling stars in the heart of ubud jungle, right by the Ayung river and the sounds of the jungle. Best of all there’s only the two of you, surrounded by no one else except nature. Nandini’s special chef and our staff will serve you an amazing set menu of exquisite dishes while you enjoy the scenery. At the edge of the river bank, you will get a private table where you can enjoy the magnificent natural atmosphere and the music of the rushing water.</p>', 'iNPHIqLecd8GA33nW8mYu3xiHqn65k-metaNjEzZTAyMmRjZjc2ZDY4ODc3Nzk0Mi5wbmc=-.png', NULL, 'Inquire Now', NULL, NULL, NULL, 'Romantic Dining by The River', 'Imagine having a romantic dinner under the twinkling stars in the heart of ubud jungle, right by the Ayung river and the sounds of the jungle.', 1, '2023-01-18 01:01:55', '2023-01-18 01:01:55'),
(2, 'Romantic Dining by The Chapel', 'romantic-dining-by-the-chapel', NULL, 'Surprise the love of your life with an ultimate romantic dinner hidden from the world, under the moonlight and surreal ambience, treated like royalty during your stay at Nandini Jungle', '<p>Surprise the love of your life with an ultimate romantic dinner hidden from the world, under the moonlight and surreal ambience, treated like royalty during your stay at Nandini Jungle. Simply looking for a magical night out together, take a unique and unforgettable romantic evening you will never forget underneath our iconic chapel overlooking mystical jungle pool.</p>', 'HKHmaNHihSJ9eYPZWYsWKVtn6n4gXG-metaNjM3OWVhM2NlNTUwZjg3MjA2MjczNi5qcGc=-.jpg', NULL, 'Inquire Now', NULL, NULL, NULL, 'Romantic Dining by The Chapel', 'Surprise the love of your life with an ultimate romantic dinner hidden from the world, under the moonlight and surreal ambience, treated like royalty during your stay at Nandini Jungle. Simply looking for a magical night out together, take a unique and unforgettable romantic evening you will never forget underneath our iconic chapel overlooking mystical jungle pool.', 1, '2023-01-18 01:03:24', '2023-01-18 01:03:24'),
(3, 'Feast of The Senses', 'feast-of-the-senses', NULL, 'Food is not like anything else, it is something precious', '<p>\"Food is not like anything else, it is something precious!\", said our Executive Chef Gustu. Bringing the precious out of food requires the best of ingredients and best of cooking methods.</p>', 'hNAeXlhHyid3DFtGukvfqLASe8gGqK-metaNjEzZTAyOTBlNDhiYTg0Mjc1ODA2Ny5qcGVn-.jpg', NULL, 'Inquire Now', NULL, NULL, NULL, 'Feast of The Senses', 'Food is not like anything else, it is something precious', 1, '2023-01-18 01:04:25', '2023-01-18 01:04:25');

-- --------------------------------------------------------

--
-- Table structure for table `dining_images`
--

DROP TABLE IF EXISTS `dining_images`;
CREATE TABLE IF NOT EXISTS `dining_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `dining_id` int NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dining_images`
--

INSERT INTO `dining_images` (`id`, `dining_id`, `title`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Romantic Dining by The River', 'WbPThkLNCpJYw3d7dcDNwY8AcquSBK-metaNjEzZTAyMmRjZjc2ZDY4ODc3Nzk0Mi5wbmc=-.png', 1, '2023-01-18 01:05:49', '2023-01-18 01:05:49'),
(2, 2, 'Romantic Dining by The Chapel', 'JsFw6m6gbSz0sa9UPOMQ94BIM7u3eZ-metaNjM3OWVhM2NlNTUwZjg3MjA2MjczNi5qcGc=-.jpg', 1, '2023-01-18 01:06:48', '2023-01-18 01:06:48'),
(3, 2, 'Romantic Dining by The Chapel 1', '8edSaxiR2PKXXTtPJgB7lY3leMKU8D-metaNjM3OWVhNDMyYTE3MDg3NDExNTY5OS5qcGc=-.jpg', 1, '2023-01-18 01:07:01', '2023-01-18 01:07:01'),
(4, 2, 'Romantic Dining by The Chapel 2', 'V5U1PKpdTAwjNegNjyGGuJ4TA0jlZ9-metaNjM3OWVhNDQ0Y2Y5YzI1OTg1MjI1Ni5qcGc=-.jpg', 1, '2023-01-18 01:07:17', '2023-01-18 01:07:17'),
(5, 3, 'Feast of The Senses', 'UfKKKjDbnTDV6BBEI9IlzQSGbkH5qV-metaNjEzZTAyOTBlNDhiYTg0Mjc1ODA2Ny5qcGVn-.jpg', 1, '2023-01-18 01:08:09', '2023-01-18 01:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` longtext COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `title`, `slug`, `subtitle`, `excerpt`, `description`, `banner_image`, `cover_image`, `button_text`, `button_link`, `price`, `per`, `meta_title`, `meta_description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Yoga', 'yoga', NULL, 'Ubud and yoga is inseparable, the tranquility of rainforest and rice fields bring the great zen that is great for mind and body.', '<p>Ubud and yoga is inseparable, the tranquility of rainforest and rice fields bring the great zen that is great for mind and body.<br><br>In the middle of Ubud rice fields, there is a 97 square meter Djiwa Shala, designed for meditation and peace. Meditating in the heart of rice fields, with the hymn of the birds and sound of the breeze, bring you a relaxing meditation like never before.<br><br>Just 300 steps down from Nandini, you will arrive at our Sungai Deck. Our Sungai Deck is also excellent for your meditation, lulled by the sound of Ayung River to bring comfort and relaxation.<br><br>Bring our complimentary yoga mats or book an hour session with our Yoga Master for only IDR 500,000++ per hour.</p>', 'TQ1W3mMndxkYONAdJdTIYWIMVpC0LO-metaeW9nYS5qcGc=-.jpg', NULL, 'Inquire Now', NULL, 'IDR 500,000++', 'Per hour', 'Yoga', 'Ubud and yoga is inseparable, the tranquility of rainforest and rice fields bring the great zen that is great for mind and body.', 1, '2023-01-17 21:28:46', '2023-01-17 23:27:33'),
(2, 'Sungai Spa', 'sungai-spa', NULL, 'Spa at Nandini Jungle means Relax, Rejuvenate and Restore.', '<p>Spa at Nandini Jungle Resort &amp; Spa means: Relax, Rejuvenate and Restore.<br><br>Discover a soothing and restorative escape for body and soul, \"Spa on the River\" by Sungai Spa. The treatment offers the finest in luxury treatments and amenities. Take your spa experience to the next level by Spa On The River.</p>', 'BtuKGQ1aDaHHCyBoTdpVI4y7Q6At6X-metac3BhLmpwZw==-.jpg', NULL, 'Inquire Now', NULL, NULL, NULL, 'Sungai Spa', 'Spa at Nandini Jungle means Relax, Rejuvenate and Restore.', 1, '2023-01-17 22:49:50', '2023-01-17 23:33:37'),
(3, 'Cooking Class', 'cooking-class', NULL, 'You are what you eat. Our executive chef Gustu brings this philosophy to heart and invites all our guests to enjoy the excellence of Balinese cooking made by themselves.', '<p>You are what you eat. Our executive chef Gustu brings this philosophy to heart and invites all our guests to enjoy the excellence of Balinese cooking made by themselves.<br><br>Join Nandini Cooking Class and learn how to cook like a Balinese, bringing a culinary journey you experienced to your home.<br><br>Cooking Class starts from IDR 1.800,000++ per couple<br>24 hours booking is required in advance.</p>', 'oxJt2a5Se1pP5kCOyHvZZVxHzX8CwD-metaNjEzZGJjMTA0NDA5YTg0NzYzMTk1Ni5qcGc=-.jpg', NULL, 'Inquire Now', NULL, 'IDR 1.800,000++', 'Per couple', 'Cooking Class', 'You are what you eat. Our executive chef Gustu brings this philosophy to heart and invites all our guests to enjoy the excellence of Balinese cooking made by themselves.', 1, '2023-01-17 23:23:36', '2023-01-17 23:28:01');

-- --------------------------------------------------------

--
-- Table structure for table `experience_images`
--

DROP TABLE IF EXISTS `experience_images`;
CREATE TABLE IF NOT EXISTS `experience_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `experience_id` int NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experience_images`
--

INSERT INTO `experience_images` (`id`, `experience_id`, `title`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Yoga', 'Vq9Bu3KeKQvlNIQIRZt0v5aHtrRBKs-metaeW9nYS5qcGc=-.jpg', 1, '2023-01-17 22:22:53', '2023-01-17 22:22:53'),
(2, 2, 'Toenail polish', 'DsFurLYMnc6HAU4e8zfjp2WpkVxaJP-metac3BhLmpwZw==-.jpg', 1, '2023-01-17 22:52:05', '2023-01-17 22:52:05'),
(3, 2, 'Spa treatment 1', '9okQLp3FpLMTnoarBjMCWNrXKNCCfE-metaNjEzZGJhMjdhZGI3ZjgyNDU2MTY0Ny5qcGc=-.jpg', 1, '2023-01-17 22:53:18', '2023-01-17 22:53:18'),
(4, 2, 'Spa treatment 2', 'WBTFGGtxZSp1cRYps9ypOxgiG6sd6L-metaNjEzZGJhMjdhZDQwNzg4MTYwNjEzNS5qcGc=-.jpg', 1, '2023-01-17 22:53:30', '2023-01-17 22:53:30'),
(5, 2, 'Spa treatment 3', 'P4FaTob8005Ui9hsYV2xrVEVRiGx4j-metaNjEzZGJhMjgyZTZlMDYyNDA3NDQyMy5qcGc=-.jpg', 1, '2023-01-17 22:53:49', '2023-01-17 22:54:08'),
(6, 3, 'Cooking class', 'TOHiw2i8tyRlhCtg5jQ7R1rxF4pXbF-metaNjEzZGJjMTA0NDA5YTg0NzYzMTk1Ni5qcGc=-.jpg', 1, '2023-01-17 23:24:03', '2023-01-17 23:24:03'),
(7, 3, 'Cooking class 1', 'QcEcXTCGB0Fohq2h6HndqsSPn2ZyRM-metaNjEzZGJjMTc5MTFjNjAyMjU2MjkxMS5qcGc=-.jpg', 1, '2023-01-17 23:24:19', '2023-01-17 23:24:19'),
(8, 3, 'Cooking class 2', '671Ox83l2Id1c0st5aPf4k8YDwgtVF-metaNjEzZGJjMTc4ZmU0NDMyMTU5Mzc3NC5qcGc=-.jpg', 1, '2023-01-17 23:24:37', '2023-01-17 23:24:37'),
(9, 3, 'Cooking class 3', 'X9VdrfvvHi5O6KtTJlmWgVP3Q4jbrf-metaNjEzZGJjMTgxMzY1OTY3NzM5Mzc3OS5qcGc=-.jpg', 1, '2023-01-17 23:24:51', '2023-01-17 23:24:51'),
(10, 3, 'Cooking class 4', 'a4An7AFG8eBjSC1HGoRKI34pwdZuHw-metaNjEzZGJjMTgxMDY1NjYzNDY3OTY3My5qcGc=-.jpg', 1, '2023-01-17 23:25:06', '2023-01-17 23:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

DROP TABLE IF EXISTS `facilities`;
CREATE TABLE IF NOT EXISTS `facilities` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `title`, `icon`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Size: 89 m² (958 ft²)', 'B99RYjNSmHLF6Je7fZd63IpcWTK9di-metac2l6ZS5zdmc=-.svg', 1, '2023-01-16 22:01:48', '2023-01-16 22:01:48'),
(2, 'In-room coffee and/or tea facilities', 'GZ0zrwcB8QzncOGL8p239DoBkoHL8I-metaY29mZmVlX21ha2VyLnN2Zw==-.svg', 1, '2023-01-16 22:14:22', '2023-01-16 22:14:22'),
(3, 'Luxury eco-friendly natural amenities', 'n4AUv10bAXqLAnWm8G07EOw14nkFH2-metaYW1lbml0aWVzLnN2Zw==-.svg', 1, '2023-01-16 22:14:44', '2023-01-16 22:14:44'),
(4, 'Working Desk', 'nOiflj3OvqCCT9q5ia0qOmIfZpjK6D-metaZGVzay5zdmc=-.svg', 1, '2023-01-16 22:15:06', '2023-01-16 22:15:06'),
(5, 'Choice of pillows', 'pSgsFdxTLE7Fh1blHVeS1SYdRyi7Lt-metacGlsbG93cy5zdmc=-.svg', 1, '2023-01-16 22:15:28', '2023-01-16 22:15:28'),
(6, 'Bathtub and Separate Shower', 'dRMYpN2kFywHJxNk7C4q08rcELjQNb-metaYmF0aHR1Yi5zdmc=-.svg', 1, '2023-01-16 22:15:52', '2023-01-16 22:15:52'),
(7, 'Separate Toilet', 'YWaXB0fhTVSxjNrHyER8PGRRBP3G56-metadG9pbGV0LnN2Zw==-.svg', 1, '2023-01-16 22:16:08', '2023-01-16 22:16:08'),
(8, '2 Adults 1 Child', 'lIIeMQFSBrPsEjVTxaqKrz4JMAu4mS-metab2NjdXBhbmN5LnN2Zw==-.svg', 1, '2023-01-16 22:16:33', '2023-01-16 22:16:33'),
(9, 'Private Minibar', 'P51wkorQpzQHMez8yH1HKTAMeLuuxB-metabWluaWJhci5zdmc=-.svg', 1, '2023-01-16 22:16:51', '2023-01-16 22:16:51'),
(10, 'Flat-screen Smart TV', 'ikecnICQvMY26IV9JBZrNfkC9gm2d7-metac21hcnRfdHYuc3Zn-.svg', 1, '2023-01-16 22:17:11', '2023-01-16 22:17:11'),
(11, 'Free Wi-Fi', 'wOl34aWX6SEqus1sPNSsl3It3bWaQM-metad2lmaS5zdmc=-.svg', 1, '2023-01-16 22:17:24', '2023-01-16 22:17:24'),
(12, 'King size bed', 'IqYkuYk3fnEsRD1BogzPnD3AMrKIep-metaYmVkLnN2Zw==-.svg', 1, '2023-01-16 22:17:39', '2023-01-16 22:17:39'),
(13, 'Baby cot allowed', 'ZrZWd1bq9xxVndn4t1ghaaAE9qqRsB-metaYmFieV9jb3Quc3Zn-.svg', 1, '2023-01-16 22:17:52', '2023-01-16 22:17:52'),
(14, 'Size: 49 m² (527 ft²)', 'Ymg580Mbx1mGWKeOa7yuIZr3WP6dTP-metac2l6ZS5zdmc=-.svg', 1, '2023-01-17 00:57:08', '2023-01-17 00:57:08'),
(15, 'Balcony with cozy Daybed', 'zW6rkO64J4HsfTlXhUedWY6RQsdrLz-metaYmFsY29ueS5zdmc=-.svg', 1, '2023-01-17 01:00:46', '2023-01-17 01:00:46'),
(21, 'Size: 48 m² (517 ft²)', 'MWkRouRys87udGB42LP4Ua9nAbs1SN-metac2l6ZS5zdmc=-.svg', 1, '2023-01-17 18:20:08', '2023-01-17 18:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `facility_villa`
--

DROP TABLE IF EXISTS `facility_villa`;
CREATE TABLE IF NOT EXISTS `facility_villa` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `villa_id` bigint UNSIGNED NOT NULL,
  `facility_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `facility_villa_villa_id_foreign` (`villa_id`),
  KEY `facility_villa_facility_id_foreign` (`facility_id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facility_villa`
--

INSERT INTO `facility_villa` (`id`, `villa_id`, `facility_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 1, 8, NULL, NULL),
(9, 1, 9, NULL, NULL),
(10, 1, 10, NULL, NULL),
(11, 1, 11, NULL, NULL),
(12, 1, 12, NULL, NULL),
(13, 1, 13, NULL, NULL),
(14, 2, 1, NULL, NULL),
(15, 2, 2, NULL, NULL),
(16, 2, 3, NULL, NULL),
(17, 2, 4, NULL, NULL),
(18, 2, 5, NULL, NULL),
(19, 2, 6, NULL, NULL),
(20, 2, 7, NULL, NULL),
(21, 2, 8, NULL, NULL),
(22, 2, 9, NULL, NULL),
(23, 2, 10, NULL, NULL),
(24, 2, 11, NULL, NULL),
(25, 2, 12, NULL, NULL),
(26, 2, 13, NULL, NULL),
(27, 3, 14, NULL, NULL),
(28, 3, 2, NULL, NULL),
(29, 3, 3, NULL, NULL),
(30, 3, 4, NULL, NULL),
(31, 3, 5, NULL, NULL),
(32, 3, 6, NULL, NULL),
(33, 3, 13, NULL, NULL),
(34, 3, 8, NULL, NULL),
(35, 3, 9, NULL, NULL),
(36, 3, 10, NULL, NULL),
(37, 3, 11, NULL, NULL),
(38, 3, 12, NULL, NULL),
(39, 3, 15, NULL, NULL),
(40, 3, 7, NULL, NULL),
(41, 4, 16, NULL, NULL),
(42, 4, 17, NULL, NULL),
(43, 4, 18, NULL, NULL),
(44, 4, 19, NULL, NULL),
(45, 4, 20, NULL, NULL),
(46, 4, 21, NULL, NULL),
(47, 4, 2, NULL, NULL),
(48, 4, 3, NULL, NULL),
(49, 4, 4, NULL, NULL),
(50, 4, 5, NULL, NULL),
(51, 4, 6, NULL, NULL),
(52, 4, 13, NULL, NULL),
(53, 4, 8, NULL, NULL),
(54, 4, 9, NULL, NULL),
(55, 4, 10, NULL, NULL),
(56, 4, 11, NULL, NULL),
(57, 4, 12, NULL, NULL),
(58, 4, 15, NULL, NULL),
(59, 4, 7, NULL, NULL),
(60, 5, 21, NULL, NULL),
(61, 5, 2, NULL, NULL),
(62, 5, 3, NULL, NULL),
(63, 5, 4, NULL, NULL),
(64, 5, 5, NULL, NULL),
(65, 5, 6, NULL, NULL),
(66, 5, 13, NULL, NULL),
(67, 5, 8, NULL, NULL),
(68, 5, 9, NULL, NULL),
(69, 5, 10, NULL, NULL),
(70, 5, 11, NULL, NULL),
(71, 5, 12, NULL, NULL),
(72, 5, 15, NULL, NULL),
(73, 5, 7, NULL, NULL),
(74, 6, 1, NULL, NULL),
(75, 6, 2, NULL, NULL),
(76, 6, 3, NULL, NULL),
(77, 6, 4, NULL, NULL),
(78, 6, 5, NULL, NULL),
(79, 6, 6, NULL, NULL),
(80, 6, 13, NULL, NULL),
(81, 6, 8, NULL, NULL),
(82, 6, 9, NULL, NULL),
(83, 6, 10, NULL, NULL),
(84, 6, 11, NULL, NULL),
(85, 6, 12, NULL, NULL),
(86, 6, 15, NULL, NULL),
(87, 6, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
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
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(2, 'The station 1', '2pvuV4oBjGA6WA0uTqne8ZN590wcAP-metadGh1bWJfMjc1XzYwMF8zMzhfMF8wX2F1dG8uanBn-.jpg', 1, '2023-01-19 22:02:42', '2023-01-19 22:02:42'),
(3, 'The station 2', 'Twa8tO73ym9xnVLKCnlKUMe70qhU64-metadGh1bWJfMjc2XzYwMF8zMzhfMF8wX2F1dG8uanBn-.jpg', 1, '2023-01-19 22:02:53', '2023-01-19 22:02:53'),
(4, 'The station 3', 'tpQnLJMyKDWluAt4dicT5P6MSD4Fv0-metadGh1bWJfMjc3XzYwMF8zMzhfMF8wX2F1dG8uanBn-.jpg', 1, '2023-01-19 22:03:01', '2023-01-19 22:03:01'),
(5, 'Aerial 1', 'ttC5nJcm6bcfgf1eSBjGtuNql8nVJ9-metadGh1bWJfMTgyXzYwMF8zMzhfMF8wX2F1dG8uanBn-.jpg', 1, '2023-01-19 22:03:27', '2023-01-19 22:03:27'),
(6, 'Aerial 2', 'ljbeKoKqAO91p2rqhcnRiFd4xvG9Eg-metadGh1bWJfMTgzXzYwMF8zMzhfMF8wX2F1dG8uanBn-.jpg', 1, '2023-01-19 22:03:37', '2023-01-19 22:03:37'),
(7, 'Aerial 3', 'Nvz5WtrDbOg1bb1lagrhAplStP4piS-metadGh1bWJfMTc4XzYwMF8zMzhfMF8wX2F1dG8uanBn-.jpg', 1, '2023-01-19 22:03:48', '2023-01-19 22:03:48'),
(9, 'Aerial 5', '0jZPm0evb9UE5P2eg5qyS23uWOEWE4-metadGh1bWJfMTc5XzYwMF8zMzhfMF8wX2F1dG8uanBn-.jpg', 1, '2023-01-19 22:04:08', '2023-01-19 22:04:08'),
(10, 'Aerial 6', 'fzHdeE3ZjJ9Jr3D9CODYC5668PXXLh-metadGh1bWJfMTgwXzYwMF8zMzhfMF8wX2F1dG8uanBn-.jpg', 1, '2023-01-19 22:04:23', '2023-01-19 22:04:23'),
(11, 'Aerial 7', 'dqrzRvZhE3nHJqJMr09zMrrJ0bC6km-metadGh1bWJfMTgxXzYwMF8zMzhfMF8wX2F1dG8uanBn-.jpg', 1, '2023-01-19 22:04:33', '2023-01-19 22:04:33'),
(12, 'Aerial 8', 'cIX7AxzGRK657CItqFOgHQFbBFjfi3-metadGh1bWJfMTc3XzYwMF8zMzhfMF8wX2F1dG8uanBn-.jpg', 1, '2023-01-19 22:04:44', '2023-01-19 22:04:44'),
(13, 'Villa 1', 'mAvYHCVWvkdjorrGTnqI8Ae756ipa7-metadGh1bWJfNTZfNjAwXzMzOF8wXzBfYXV0by5qcGc=-.jpg', 1, '2023-01-19 22:05:07', '2023-01-19 22:05:07'),
(14, 'Villa 2', '2FHUu2nhmFQROeePfmbvatgcH09I6M-metadGh1bWJfNTdfNjAwXzMzOF8wXzBfYXV0by5qcGc=-.jpg', 1, '2023-01-19 22:05:16', '2023-01-19 22:05:16'),
(15, 'Villa 3', 'BWy8X1bDZvitzPNxOmDPZdRSnuxbXE-metadGh1bWJfNThfNjAwXzMzOF8wXzBfYXV0by5qcGc=-.jpg', 1, '2023-01-19 22:05:28', '2023-01-19 22:05:28'),
(17, 'Villa 4', 'sYnxMKh5XcTRXazSHuZijABIscusJ9-metadGh1bWJfNTlfNjAwXzMzOF8wXzBfYXV0by5qcGc=-.jpg', 1, '2023-01-19 22:05:45', '2023-01-19 22:05:45'),
(18, 'Villa 6', 'cX0B62SniV2BnyoVIR3Pce3bwi0cWa-metadGh1bWJfNTJfNjAwXzMzOF8wXzBfYXV0by5qcGc=-.jpg', 1, '2023-01-19 22:05:58', '2023-01-19 22:05:58'),
(19, 'Villa 7', 'pEDpQmS8NTMKOqbz4SEyKSdWC6kWMl-metadGh1bWJfNTNfNjAwXzMzOF8wXzBfYXV0by5qcGc=-.jpg', 1, '2023-01-19 22:06:10', '2023-01-19 22:06:10'),
(20, 'Villa 8', 'vQpDHos7jIFWyTG3Z87nHWQm9p38xf-metadGh1bWJfNTRfNjAwXzMzOF8wXzBfYXV0by5qcGc=-.jpg', 1, '2023-01-19 22:06:21', '2023-01-19 22:06:21'),
(21, 'Villa 9', 'n5h7VOVQaKFoelhWRGSZdIQPdWW3yS-metadGh1bWJfNTVfNjAwXzMzOF8wXzBfYXV0by5qcGc=-.jpg', 1, '2023-01-19 22:06:33', '2023-01-19 22:06:33'),
(22, 'Pool 1', 'DnXPkan9VfhVG3AbO86mTh8E4gOexh-metadGh1bWJfNjBfNjAwXzMzOF8wXzBfYXV0by5qcGc=-.jpg', 1, '2023-01-19 22:07:12', '2023-01-19 22:07:12'),
(23, 'Pool 2', '9oIVmOIUBkCLiwAIqpLHFVTBZMAFIo-metadGh1bWJfNjFfNjAwXzMzOF8wXzBfYXV0by5qcGc=-.jpg', 1, '2023-01-19 22:07:22', '2023-01-19 22:07:22'),
(24, 'Pool 3', 'fkkij2fuTtv6QCPxlJuPxA503h7cEa-metadGh1bWJfNjJfNjAwXzMzOF8wXzBfYXV0by5qcGc=-.jpg', 1, '2023-01-19 22:07:34', '2023-01-19 22:07:34'),
(25, 'Pool 4', 'AHVyQuVnrex2QDFv9DrWiIkFBOcjys-metadGh1bWJfNjNfNjAwXzMzOF8wXzBfYXV0by5qcGc=-.jpg', 1, '2023-01-19 22:07:50', '2023-01-19 22:07:50'),
(26, 'Experience 1', 'RkMxk1xn9SeTZGKFeYlFbYlHP8Uidn-metadGh1bWJfNjVfNjAwXzMzOF8wXzBfYXV0by5qcGc=-.jpg', 1, '2023-01-19 22:08:14', '2023-01-19 22:08:14'),
(27, 'Experience 2', '5aBM67UWThZl9kmlEMi3qCzHMrSG38-metadGh1bWJfNjRfNjAwXzMzOF8wXzBfYXV0by5qcGc=-.jpg', 1, '2023-01-19 22:08:43', '2023-01-19 22:08:43'),
(28, 'Restaurant 1', 'SJ2q2vA438kUwaxHtMW01megS3rcXv-metadGh1bWJfNjZfNjAwXzMzOF8wXzBfYXV0by5qcGc=-.jpg', 1, '2023-01-19 22:09:01', '2023-01-19 22:09:01'),
(29, 'Restaurant 2', 'Csmkf6tFBFJT4VhUbFuk16K0Ru9AFi-metadGh1bWJfNjdfNjAwXzMzOF8wXzBfYXV0by5qcGc=-.jpg', 1, '2023-01-19 22:09:13', '2023-01-19 22:09:13'),
(30, 'Restaurant 3', '9TqM7vsgWuOYJ9Ushf8Aun1LVbJMT5-metadGh1bWJfNjhfNjAwXzMzOF8wXzBfYXV0by5qcGc=-.jpg', 1, '2023-01-19 22:09:29', '2023-01-19 22:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

DROP TABLE IF EXISTS `keywords`;
CREATE TABLE IF NOT EXISTS `keywords` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'bali', '2023-01-23 02:23:12', '2023-01-23 02:23:12'),
(2, 'spa', '2023-01-23 02:23:16', '2023-01-23 02:23:16');

-- --------------------------------------------------------

--
-- Table structure for table `landing_pages`
--

DROP TABLE IF EXISTS `landing_pages`;
CREATE TABLE IF NOT EXISTS `landing_pages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` longtext COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landing_page_packages`
--

DROP TABLE IF EXISTS `landing_page_packages`;
CREATE TABLE IF NOT EXISTS `landing_page_packages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `landing_page_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `cover_image` longtext COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(34, '2014_10_12_000000_create_users_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2019_08_19_000000_create_failed_jobs_table', 1),
(37, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(38, '2023_01_09_081830_create_villas_table', 1),
(39, '2023_01_10_093318_create_facilities_table', 1),
(40, '2023_01_11_030703_create_facility_villa_table', 1),
(41, '2023_01_11_035353_create_villa_images_table', 1),
(42, '2023_01_11_041713_create_experiences_table', 1),
(43, '2023_01_11_042656_create_experience_images_table', 1),
(44, '2023_01_11_054943_create_dinings_table', 1),
(45, '2023_01_11_054959_create_dining_images_table', 1),
(46, '2023_01_11_071848_create_weddings_table', 1),
(47, '2023_01_11_071910_create_spas_table', 1),
(48, '2023_01_11_071942_create_spa_images_table', 1),
(49, '2023_01_11_071953_create_wedding_images_table', 1),
(50, '2023_01_11_075423_create_awards_table', 1),
(51, '2023_01_11_080829_create_press_rooms_table', 1),
(52, '2023_01_11_080845_create_careers_table', 1),
(53, '2023_01_11_080855_create_blogs_table', 1),
(54, '2023_01_11_085923_create_pages_table', 1),
(55, '2023_01_11_090107_create_page_images_table', 1),
(56, '2023_01_11_090500_create_pop_ups_table', 1),
(57, '2023_01_11_090847_create_landing_pages_table', 1),
(58, '2023_01_11_091109_create_landing_page_packages_table', 1),
(59, '2023_01_11_131740_create_offers_table', 1),
(60, '2023_01_11_131757_create_offer_images_table', 1),
(61, '2023_01_12_070711_create_css_scripts_table', 1),
(62, '2023_01_12_071945_create_reviews_table', 1),
(63, '2023_01_16_081329_create_custom_fields_table', 1),
(64, '2023_01_16_081750_create_custom_field_page_table', 1),
(65, '2023_01_16_152829_create_day_guests_table', 1),
(66, '2023_01_16_153049_create_day_guest_images_table', 1),
(67, '2023_01_19_085718_create_galleries_table', 2),
(68, '2023_01_19_085855_create_categories_table', 2),
(69, '2023_01_19_090106_create_category_gallery', 2),
(70, '2023_01_23_100101_create_keywords_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

DROP TABLE IF EXISTS `offers`;
CREATE TABLE IF NOT EXISTS `offers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` longtext COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offer_images`
--

DROP TABLE IF EXISTS `offer_images`;
CREATE TABLE IF NOT EXISTS `offer_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `offer_id` int NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` longtext COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `title`, `slug`, `subtitle`, `excerpt`, `description`, `banner_image`, `cover_image`, `button_text`, `button_link`, `meta_title`, `meta_description`, `meta_keyword`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Home Page', 'Nandini', 'nandini', 'Discover a Luxury Jungle Experience', NULL, '<p>A dramatic hideaway nestled in the heart of the Payangan rainforest - Ubud, Nandini Jungle Resort and Spa is a captivating destination that blends smoothly with its natural surroundings. Situated on the mystical Ayung River, each villa enjoys the embrace of a lush rainforest and offers stunning views from your own private balcony of the breathtaking Ayung gorge. Reconnect with nature, rekindle your spirit and reignite your soul in this serene nature haven.</p>', 'bmY0VCWzkSPbhZeaFCegvDuv1IL2Ni-metaaG9tZS1oZWFkZXIuanBn-.jpg', NULL, NULL, 'https://www.youtube.com/embed/jot-1ANRZ-s?autoplay=1&mute=1&controls=0&loop=1&rel=0&showinfo=0&iv_load_policy=3&playlist=jot-1ANRZ-s', 'Nandini Jungle by Hanging Gardens', 'A dramatic hideaway nestled in the heart of the Payangan rainforest - Ubud, Nandini Jungle Resort and Spa is a captivating destination that blends smoothly with its natural surroundings.', '[\"bali\",\"spa\"]', 1, '2023-01-16 19:39:04', '2023-01-23 02:25:12'),
(2, 'Suites & Villa', 'Accommodations', 'accommodations', NULL, NULL, '<p>Inspired by Balinese architecture and combined with the concept of luxury comfort, Nandini Jungle Resort &amp; Spa offers 18 gorgeous villas and 16 luxury suites. Experience the true luxury of Ubud jungle with our selection of accommodation arrangement.</p>', 'fmzRZrXchh6WpQTAMS9Dk26F1xwMkw-metac3VpdGVzLXZpbGxhcy5qcGc=-.jpg', NULL, NULL, NULL, 'Suites & Villa', 'Inspired by Balinese architecture and combined with the concept of luxury comfort, Nandini Jungle Resort & Spa offers 18 gorgeous villas and 16 luxury suites.', NULL, 1, '2023-01-16 21:43:53', '2023-01-16 23:13:27'),
(3, 'Experiences', 'Experiences', 'experiences', NULL, NULL, '<p>Nandini Bali promises to create special memories that you will never forget.</p>', '6W54PAemlGKjgpozDUeLQ7SfLZlC3h-metaZXhwZXJpZW5jZS5qcGc=-.jpg', NULL, NULL, NULL, 'Experiences', 'Nandini Bali promises to create special memories that you will never forget.', NULL, 1, '2023-01-17 20:19:15', '2023-01-17 20:19:15'),
(4, 'Dining', 'Dining', 'dining', NULL, 'A touch of Bali and touch of home, blended in perfect harmony.', '<p>Executive Chef Gustu is an expert in Balinese Cuisine. Born in Bali, Gustu has bested local taste of Bali culinary to his belt, bringing a cuisine you will never forget. A touch of Bali and touch of home, blended in perfect harmony.</p>', '89dDy409mW4zye5qghQ0Gx2d97mhBC-metaZGluaW5nLmpwZw==-.jpg', NULL, NULL, NULL, 'Dining', 'A touch of Bali and touch of home, blended in perfect harmony.', NULL, 1, '2023-01-18 00:08:36', '2023-01-18 00:08:36'),
(5, 'Spa', 'Sungai Spa', 'sungai-spa', 'by Nandini Jungle', 'The Sungai Spa welcomes you to step into a world of complete comfort, relaxation and rejuvenation.', '<p>The Sungai Spa welcomes you to step into a world of complete comfort, relaxation and rejuvenation. Our skilled practitioners have been trained to the highest of international standards, and they are ready to treat you to a decadent experience you will never forget. The Sungai Spa operates at the highest international standards, and this is apparent by our five-star client care and exemplary hygiene. Our professional staff will ensure that you have an unparalleled experience that will melt your stress and replenish your mind, body and soul.<br><br>Immerse Yourself in Ultimate Luxury at the Sungai Spa.</p>', '5EHfcbvP8rDbslfTaPymOBHIrBtL95-metaNjJkNGVlNzUxNDk4NzE5OTEyNzQxNy5qcGc=-.jpg', NULL, NULL, NULL, 'Sungai Spa', 'The Sungai Spa welcomes you to step into a world of complete comfort, relaxation and rejuvenation. ', NULL, 1, '2023-01-18 18:59:27', '2023-01-18 19:00:11'),
(6, 'Wedding', 'Weddings', 'weddings', NULL, 'A stunning backdrop and breathtaking views will be the start for your life-long journey. Get ready for the rest of your life here at Nandini Hotel, where dreams come true.', '<p>Weddings are one of the most significant events in life, when a couple says “I do”. In order to make it perfect, you need to choose a place where you can truly fulfill your dreams. Nandini Bali is an iconic hotel in the heart of Ubud Jungle made from dreamy days. A stunning backdrop and breathtaking views will be the start for your life-long journey. Get ready for the rest of your life here at Nandini Hotel, where dreams come true.</p><p><br>Nandini offers a spectacular setting for intimate weddings, with an enchanting backdrop of forest, lush landscape and water features. Allow us to take care of your special day and it will be all the more unforgettable. Celebrate your love with an intimate gathering or hold a splendid event to mark the momentous occasion. Whether you wish to make your union with a Thai inspired ceremony, Western or our Nandini Signature Enchanting wedding, we will create a bespoke marriage ceremony just for you and your guests, ensuring your day is seamless.</p>', 'irr7qdIU2SHrL8V1KsByahdnkuJGCl-metaNjEzZWNhYjU2ZjBmYTg3NTMxNjYyNS5qcGc=-.jpg', NULL, NULL, NULL, 'Weddings', 'A stunning backdrop and breathtaking views will be the start for your life-long journey. Get ready for the rest of your life here at Nandini Hotel, where dreams come true.', NULL, 1, '2023-01-19 00:38:11', '2023-01-19 00:40:06'),
(7, 'Gallery', 'Gallery', 'gallery', NULL, NULL, NULL, 'K4hCEtdgHxpz7hkzokynmC7gGrmEkS-metaNjE1NTQzZWFiYzk3NzU5MjE3ODAzOS5qcGc=-.jpg', NULL, NULL, NULL, 'Gallery', NULL, NULL, 1, '2023-01-19 22:44:30', '2023-01-19 22:44:30'),
(8, 'Contact', 'Get in Touch', 'get-in-touch', NULL, NULL, NULL, '3d3Dc4H7nsOTDD1df7dzeSxlgaFU0p-metaaG9tZS1oZWFkZXIuanBn-.jpg', NULL, NULL, NULL, 'Get in Touch', NULL, NULL, 1, '2023-01-19 23:52:11', '2023-01-19 23:52:11'),
(9, 'Story', 'Nandini Values', 'nandini-values', NULL, 'In Hindhu mythology, Nandini is the abode for God Shiva. Nandini is very famous in Hindhu as wherever she takes a step, there will be plentiful of harvest wherever she goes. Therefore, her name is celebrated as Joy.', '<p>In Hindhu mythology, Nandini is the abode for God Shiva. Nandini is very famous in Hindhu as wherever she takes a step, there will be plentiful of harvest wherever she goes. Therefore, her name is celebrated as Joy.<br><br>Nandini Jungle Resort &amp; Spa brings this philosophy to our heart, guiding our service excellence to its finest. We are inspired by the Joy celebrated by Nandini and would love to share this to all of our guests, bringing the Joy people will never forget.<br><br>Nandini Jungle Resort &amp; Spa is set deep within a beautiful rainforest, with stunning views across the valley. Nandini Bali Jungle Resort and Spa offers a truly luxurious experience in a pure and natural environment. From the moment you arrive at this luxury spa resort you can immerse yourself in the beauty of this calm oasis, taking in the incredible sights and gentle sounds of the forest below and breathing in the fresh mountain air. Bringing Joy to whoever seeks.</p>', 'Sz7M1uLEWZjFXIaFfn0nKls2lYXJf4-metac3RvcnkyLmpwZw==-.jpg', NULL, NULL, NULL, 'Nandini Values', 'In Hindhu mythology, Nandini is the abode for God Shiva. Nandini is very famous in Hindhu as wherever she takes a step, there will be plentiful of harvest wherever she goes. Therefore, her name is celebrated as Joy.', NULL, 1, '2023-01-22 18:38:33', '2023-01-22 18:38:33'),
(10, 'Award', 'Awards', 'awards', NULL, 'We are honored that our philosophy of service excellence is recognized by many leading publications of the travel, hospitality and lifestyle sectors both in the Indonesia and Internationally.', '<p>We are honored that our philosophy of service excellence is recognized by many leading publications of the travel, hospitality and lifestyle sectors both in the Indonesia and Internationally.</p>', '3vnZcSJV2VFRFIZnmxiIS6RgWwODPS-metac3VpdGVzLXZpbGxhcy5qcGc=-.jpg', NULL, NULL, NULL, 'Awards', 'We are honored that our philosophy of service excellence is recognized by many leading publications of the travel, hospitality and lifestyle sectors both in the Indonesia and Internationally.', NULL, 1, '2023-01-22 19:10:29', '2023-01-22 19:10:29'),
(11, 'Video', 'Videos', 'videos', NULL, 'Find the latest videos from Nandini Jungle by Hanging Gardens', '<p>Find the latest videos from Nandini Jungle by Hanging Gardens</p>', 'hDGoy4g3ZkVuBTJRFaFanPF1oSDE5u-metaNjE0MDFhMDI1MjVmZDk4ODMzNzMxNy5qcGc=-.jpg', NULL, NULL, NULL, 'Videos', 'Find the latest videos from Nandini Jungle by Hanging Gardens', NULL, 1, '2023-01-22 20:50:36', '2023-01-22 20:50:36'),
(12, 'Day Guest', 'Day Guest', 'day-guest', NULL, 'Experience Nandini Jungle Resort & Spa for the day, take our day offers for a once in a lifetime experience. Wait no more, book the day pass at Nandini Jungle Resort & Spa now.', '<p>Experience Nandini Jungle Resort &amp; Spa for the day, take our day offers for a once in a lifetime experience.<br><br>Wait no more, book the day pass at Nandini Jungle Resort &amp; Spa now.</p>', 'joRXzaqW8ERMw1K9OfognyE1WONFMr-metaNjE0MDFhMDI1MjVmZDk4ODMzNzMxNy5qcGc=-.jpg', NULL, NULL, NULL, 'Day Guest', 'Experience Nandini Jungle Resort & Spa for the day, take our day offers for a once in a lifetime experience.', NULL, 1, '2023-01-22 22:36:47', '2023-01-22 22:36:47'),
(13, 'Blog', 'Blog', 'blog', NULL, 'A dramatic hideaway nestled in the heart of rainforest Payangan - Ubud, Nandini Jungle Resort and Spa is a captivating destination resort that blends smoothly with its natural surroundings.', '<p>A dramatic hideaway nestled in the heart of rainforest Payangan - Ubud, Nandini Jungle Resort and Spa is a captivating destination resort that blends smoothly with its natural surroundings. Situated on the mystical Ayung River, each villa enjoys the embrace of the lush rainforest and offers stunning views from private balcony of the breathtaking Ayung gorge. Reconnect with nature, rekindle your spirit and reignite your soul in this serene nature haven.</p>', 'D3kxQc9sVJa3qVWzsv27qRQW7gZt1y-metaNjEzZWU1ZmNhZDVlODI1MDExMzc2NS5qcGc=-.jpg', NULL, NULL, NULL, 'Blog', 'A dramatic hideaway nestled in the heart of rainforest Payangan - Ubud, Nandini Jungle Resort and Spa is a captivating destination resort that blends smoothly with its natural surroundings.', NULL, 1, '2023-01-23 00:53:18', '2023-01-23 00:53:18'),
(14, 'Career', 'Career', 'career', NULL, 'Join the winning team of Nandini Jungle Resort & Spa.', '<p>Join the winning team of Nandini Jungle Resort &amp; Spa.</p>', '4oY5GlIeWbN3T0HjUL11nrmv15wsv6-metaY29udGFjdC5qcGc=-.jpg', NULL, NULL, NULL, 'Career', 'Join the winning team of Nandini Jungle Resort & Spa.', '[]', 1, '2023-01-23 19:27:24', '2023-01-23 19:27:24'),
(15, 'Virtual  Tour', 'Virtual  Tour', 'virtual-tour', NULL, NULL, NULL, 'ySDvrdWj9T1jJFkMkOs1yu87A3xaQf-metaNjEzZWU1ZmNhZDVlODI1MDExMzc2NS5qcGc=-.jpg', NULL, NULL, NULL, NULL, NULL, '[]', 1, '2023-01-23 22:17:41', '2023-01-23 22:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_images`
--

DROP TABLE IF EXISTS `page_images`;
CREATE TABLE IF NOT EXISTS `page_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_id` int NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_images`
--

INSERT INTO `page_images` (`id`, `page_id`, `title`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 5, 'Foot massage', 'hoCt4IMNmNEFkiUI72bRXAvV9KRnTu-metaNjJkNGVlMmYwMWI5YjA1NTQ3MzExNC5qcGc=-.jpg', 1, '2023-01-18 19:30:43', '2023-01-18 19:30:43'),
(2, 5, 'Treatment recipe', 'OBAgndT7wJ33ApeAgARi6Nq7BGAtqk-metaNjJkNGVlMmYyNjhhZTEwNzk0MjI4MS5qcGc=-.jpg', 1, '2023-01-18 19:31:19', '2023-01-18 19:31:19'),
(3, 5, 'Foot massage 1', 'E9AuBOTF6wUkVtfadxpcLitNC5T0aX-metaNjJkNGVlMzAxN2M0ZTAxNTg4MjY0OC5qcGc=-.jpg', 1, '2023-01-18 19:31:38', '2023-01-18 19:31:38'),
(4, 5, 'Massage', 'NfbpGvaxQ4v8tWFYEJj8jsPh5WS9Uv-metaNjJkNGVlMzA1MzM5ZTIyMDk0NTcwMC5qcGc=-.jpg', 1, '2023-01-18 19:31:58', '2023-01-18 19:31:58'),
(5, 5, 'Massage 1', 'TZYWh3zyxqeKY9nEoR4Cnn0cc0YRn9-metaNjJkNGVlMzBkM2Y5YzM2NjcxOTEzOS5qcGc=-.jpg', 1, '2023-01-18 19:32:15', '2023-01-18 19:32:15'),
(6, 5, 'Foot Massage 2', 'YIAy97eRkdUL938nHSTnYnwMoTjyUf-metaNjJkNGVlMzEyOTlmOTI0NDkwMjc3Ny5qcGc=-.jpg', 1, '2023-01-18 19:32:30', '2023-01-18 19:32:30'),
(7, 5, 'Spa', 'Zt9zrRd5cK6H6kYK25Es1OZvZaJcGM-metaNjJkNGVlMzIxNTlkNTEzNjQzNjE0OS5qcGc=-.jpg', 1, '2023-01-18 19:32:52', '2023-01-18 19:32:52'),
(8, 5, 'Spa 1', 'rP3HjKF8fV6tpRiG6TIaQbDr7zkmve-metaNjJkNGVlMzI3YmYxMzUzMDMzMjgwOS5qcGc=-.jpg', 1, '2023-01-18 19:33:06', '2023-01-18 19:33:06'),
(9, 5, 'Spa 3', '5PPoCaN0TZrJBw0SY1zyt5hH7wDTxX-metaNjJkNGVlMzMxZGYwYzgzODY1MTM0NC5qcGc=-.jpg', 1, '2023-01-18 19:33:24', '2023-01-18 19:33:24'),
(10, 5, 'Spa 4', 'xPzFvdx1tm7ev2j9F3j38tWLcY1xiH-metaNjJkNGVlMzM4MDIyMDc3ODk3MTgzOC5qcGc=-.jpg', 1, '2023-01-18 19:33:39', '2023-01-18 19:33:39'),
(11, 5, 'Spa bale', '5KtlE2dZcKBZeiME2LJWZ86qXJckmH-metaNjJkNGVlMzNkNGFmMzIxODU4MDQ5Ny5qcGc=-.jpg', 1, '2023-01-18 19:33:56', '2023-01-18 19:33:56'),
(12, 5, 'Sungai spa', 'u8Anr958vgE3w7QiVGcct4hxNVQvb8-metaNjJkNGVlMzQ4ZGM3OTcxMDA5OTcxMS5qcGc=-.jpg', 1, '2023-01-18 19:34:16', '2023-01-18 19:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `pop_ups`
--

DROP TABLE IF EXISTS `pop_ups`;
CREATE TABLE IF NOT EXISTS `pop_ups` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` longtext COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `press_rooms`
--

DROP TABLE IF EXISTS `press_rooms`;
CREATE TABLE IF NOT EXISTS `press_rooms` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` longtext COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star` int DEFAULT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` longtext COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spas`
--

DROP TABLE IF EXISTS `spas`;
CREATE TABLE IF NOT EXISTS `spas` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` longtext COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spa_images`
--

DROP TABLE IF EXISTS `spa_images`;
CREATE TABLE IF NOT EXISTS `spa_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `spa_id` int NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@admin.com', NULL, '$2y$10$GhuKs9GShZ7rTuUn5069k.z2UzG8QwGItsLtvzKzkQyOBxbqESy0u', 'fs18K1ybCM49l9KK1CdtxrLi9ekfRsZixZKxdLXW3URGKJIbXOmISW5uS61e', '2023-01-16 19:33:16', '2023-01-16 19:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `villas`
--

DROP TABLE IF EXISTS `villas`;
CREATE TABLE IF NOT EXISTS `villas` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` longtext COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `villas`
--

INSERT INTO `villas` (`id`, `title`, `slug`, `subtitle`, `excerpt`, `description`, `banner_image`, `cover_image`, `button_text`, `button_link`, `price`, `per`, `meta_title`, `meta_description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Garden View Royal Suite', 'garden-view-royal-suite', NULL, 'Our Garden View Royal Suites effortlessly combine the luxury of a five stars room facilities with the raw beauty of the rainforest.', '<p>The Garden Royal Suites are elegantly decorated and filled with luxurious furnishing. These opulent suites feature a master bedroom with a spacious terrace overlooking to the lush and green garden view. The signature bathroom makes the most of its space, with bathroom features including an outdoor bath and rain shower, complemented by a dressing facility. Wake up to the sounds of birds chirping cheerfully in the morning and in the end of the day sitting on the terrace overlooking the lush garden. Garden View Royal Suite offers a feeling of the real serenity.</p>', '0lXoaMHbym0tEMEidzivN7Eodmrs9K-metaNjM3OGU1MWM1NDM2Mjc0MzE4MTIxOS5qcGc=-.jpg', NULL, 'Book Now', 'https://book-directonline.com/properties/nandinibalidirect', NULL, NULL, 'Garden View Royal Suite', 'Our Garden View Royal Suites effortlessly combine the luxury of a five stars room facilities with the raw beauty of the rainforest.', 1, '2023-01-16 22:30:08', '2023-01-17 00:41:47'),
(2, 'Jungle View Royal Suite', 'jungle-view-royal-suite', NULL, 'Our Jungle Royal Suites effortlessly combine the luxury of a five stars room facilities with the raw beauty of the rainforest. ', '<p>Our Jungle Royal Suites effortlessly combine the luxury of five star facilities with the raw beauty of the rainforest. Exclusive and exceptional, there are 16 spacious suites ranging in size from 80 until 120 square metres.<br><br>The Jungle Royal Suites are elegantly decorated and filled with luxurious furnishings. These opulent suites feature a master bedroom with a spacious terrace overlooking a stunning jungle and garden view. Built with creativity and a quality of workmanship that highlights the beauty of this area.<br><br>The signature bathroom makes the most of its space, with bathroom features including an outdoor bath and rain shower, complemented by a dressing facility.</p>', 'zE5ZBLf94hFBXo3WK8Lyb1lfXvViB2-metaNjM3OGU3NjExNzdlYjY5ODYxNDQ0My5qcGc=-.jpg', NULL, 'Book Now', 'https://book-directonline.com/properties/nandinibalidirect', NULL, NULL, 'Jungle View Royal Suite', 'Our Jungle Royal Suites effortlessly combine the luxury of a five stars room facilities with the raw beauty of the rainforest. ', 1, '2023-01-17 00:18:56', '2023-01-17 00:18:56'),
(3, 'Jungle View Villa', 'jungle-view-villa', NULL, 'The Jungle View Villa offers stunning sunrise views over the jungle. Being exactly the same size as Panoramic View Villa, Jungle View Villa is also equipped with large outdoor living areas to create a sense of grandeur while maintaining a relaxed ambience.', '<p>The Jungle View Villa offers stunning sunrise views over the jungle. Being exactly the same size as Panoramic View Villa, Jungle View Villa is also equipped with large outdoor living areas to create a sense of grandeur while maintaining a relaxed ambience.<br><br>Experience the sensation of luxury seclusions from the outside world.<br><br>Modelled on a traditional Balinese Village, Jungle View Villa is truly a Balinese experience.</p>', 'zp06GeWF8hXinQCacU8qd04ZW01gXY-metaNjM3OGU4YWU0YmQ2MDQ2MzcyNTQ2My5qcGc=-.jpg', NULL, 'Book Now', 'https://book-directonline.com/properties/nandinibalidirect', NULL, NULL, 'Jungle View Villa', 'The Jungle View Villa offers stunning sunrise views over the jungle. Jungle View Villa is also equipped with large outdoor living areas to create a sense of grandeur while maintaining a relaxed ambience.', 1, '2023-01-17 00:56:32', '2023-01-17 00:56:32'),
(4, 'Panoramic View Villa', 'panoramic-view-villa', NULL, 'Our Panoramic View Villa stands with stunning and uninterrupted views over the river gorge and a feeling of luxurious seclusions from the outside world.', '<p>Our Panoramic View Villa stands with stunning and uninterrupted views over the river gorge and a feeling of luxurious seclusions from the outside world.<br><br>Inspired by Balinese architecture, Panoramic View Villa stands on luxury teak floors as its foundation for its comfort. At an average 48 square metres, each villa is furnished with canopied king beds, spacious bathroom and a private balcony with the perfect sight of the heart of Ubud\'s rainforest.</p>', '69b6JX1Bf0gVB5fnEuE9j8PhIl2xjP-metaNjM3OGU5ZTBkZThhMjkyOTMzMzI1Ny5qcGc=-.jpg', NULL, NULL, NULL, NULL, NULL, 'Panoramic View Villa', 'Our Panoramic View Villa stands with stunning and uninterrupted views over the river gorge and a feeling of luxurious seclusions from the outside world.', 1, '2023-01-17 18:16:07', '2023-01-17 18:16:07'),
(5, 'Sunrise View Villa', 'sunrise-view-villa', NULL, 'Surrounded by the serene Rainforest atmosphere, the Sunrise View Villa offers the majestic golden sunrise streaming into the room.', '<p>Surrounded by the serene Rainforest atmosphere, the Sunrise View Villa offers the majestic golden sunrise streaming into the room. The elegantly appointed 48 sqm Sunrise View Villa features a large outdoor living, canopied king beds, spacious bathroom and a private balcony with the perfect sight of the heart of Ubud\'s rainforest. Experience the essences of Bali, its natural beauty and warm hospitality perfectly blend in every corner of the room</p>', 'FgCgCT4IofJmg36376vmORJ56sEKfu-metaNjM3OGYwMDJkZDkwNjgzNTkyODIwMS5qcGc=-.jpg', NULL, NULL, NULL, NULL, NULL, 'Sunrise View Villa', 'Surrounded by the serene Rainforest atmosphere, the Sunrise View Villa offers the majestic golden sunrise streaming into the room.', 1, '2023-01-17 18:44:29', '2023-01-17 18:58:04'),
(6, 'Presidential Suite', 'presidential-suite', NULL, 'Our magnificent Presidential Suite is a true definition of luxury. Elegantly decorated and filled with luxurious furnishing.', '<p>Our magnificent Presidential Suite is a true definition of luxury. Elegantly decorated and filled with luxurious furnishing, these suites feature a master bedroom with a spacious terrace overlooking to the lush and green garden view and the majestic of Ubud Rainforest. The Nandini Presidential Suite equipped commodious living room is suitable for family time. The signature bathroom makes the most of its space, with bathroom features including an outdoor bath and rain shower, complemented by a dressing facility</p>', 'Q1PLyHuI3QzPoDpclrzpRrp9UqvM7y-metaNjM3OGVkYmNjOGY0NzE3ODczNDk5OS5qcGc=-.jpg', NULL, NULL, NULL, NULL, NULL, 'Presidential Suite', 'Our magnificent Presidential Suite is a true definition of luxury. Elegantly decorated and filled with luxurious furnishing.', 1, '2023-01-17 18:59:51', '2023-01-17 19:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `villa_images`
--

DROP TABLE IF EXISTS `villa_images`;
CREATE TABLE IF NOT EXISTS `villa_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `villa_id` int NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `villa_images`
--

INSERT INTO `villa_images` (`id`, `villa_id`, `title`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 1, 'Bed room front angle', 'h9AYJEItLXKQh88TJJJtTCnJiYvaCX-metaNjM3OGU0ZTQ0OWExZjA4NDUxMTI3NC5qcGc=-.jpg', 1, '2023-01-16 22:34:24', '2023-01-16 22:34:57'),
(2, 1, 'Bed room left angle', 'vBhQ4GUQPDMUlJAXga7DoAIW3MWMZB-metaNjM3OGU1MTc4ODNkMDAzOTM0OTkxOS5qcGc=-.jpg', 1, '2023-01-16 22:34:49', '2023-01-16 22:34:49'),
(1, 1, 'Villa front view', 'OJ5zvYzb4qZ4dtjvwhfWNt6Q3lTS2W-metaNjM3OGU1MWM1NDM2Mjc0MzE4MTIxOS5qcGc=-.jpg', 1, '2023-01-16 22:35:18', '2023-01-16 22:34:18'),
(4, 1, 'Bathtub', 'Yrp4VwGPHSoJfbO3NWZkFr1HlmYq62-metaNjM3OGU1NGJmM2MzOTM1ODg4OTE0Ni5qcGc=-.jpg', 1, '2023-01-16 22:35:39', '2023-01-16 22:35:39'),
(5, 1, 'Washtafel and closet', 'Ijk9eDThV4thJpjvqQh93VxjyqmWmg-metaNjM3OGU1NTQzM2FlOTQwOTU5Mjg4Ni5qcGc=-.jpg', 1, '2023-01-16 22:37:20', '2023-01-16 22:37:20'),
(8, 2, 'Bed front view', '7j582O5mv1Cg4PbuPMfq4Lc0JGoe8c-metaNjM3OGU3ODI1ZWI4MDA4NjkxOTYwOS5qcGc=-.jpg', 1, '2023-01-17 00:27:06', '2023-01-17 00:27:06'),
(7, 2, 'Bathtub view', '2YVtGl0ubJwkJneb1hzhrFtXKcHW8H-metaNjM3OGU3NjRlOTIxNzU3NDY5MDA2OC5qcGc=-.jpg', 1, '2023-01-17 00:27:20', '2023-01-17 00:27:20'),
(6, 2, 'Front view', '6UFLIjbFZjehbjzfc85TEqnGIHo6tk-metaNjM3OGU3NjExNzdlYjY5ODYxNDQ0My5qcGc=-.jpg', 1, '2023-01-17 00:27:32', '2023-01-17 00:27:32'),
(9, 2, 'Washtafel and closet', 'Tbei2M8fUerYNXquI01bOx77I2aRyL-metaNjM3OGU3MzllZmZlODU2NjE5NTU5MC5qcGc=-.jpg', 1, '2023-01-17 00:27:49', '2023-01-17 00:27:49'),
(10, 2, 'Bed room left angle', 'ZNI0eVXdLNOz69bwYS2eyf3zz3q5cw-metaNjM3OGU3MGJiZWYxZjQ0ODQzMzY2Mi5qcGc=-.jpg', 1, '2023-01-17 00:28:03', '2023-01-17 00:28:03'),
(11, 3, 'Bed and jungle view', 'GoFWjXHdZnq8H3dzh7i8SHfroMAbAX-metaNjM3OGU4YWE2MjMwNzAyNTgzODg5Ni5qcGc=-.jpg', 1, '2023-01-17 01:01:49', '2023-01-17 01:01:49'),
(12, 3, 'Bed room front angle', 'EG6qhDPwHdYKn9u8BvBlm3HyPN0Hok-metaNjM3OGU4YTA5YTBlZDAwNTY0OTM4My5qcGc=-.jpg', 1, '2023-01-17 01:02:03', '2023-01-17 01:02:03'),
(13, 3, 'Washtafel and bathtub', 'F555J4r3bxXV04escrKP5D6r2Cls5m-metaNjM3OGU4OWZjYWZiZDk0OTA1NDg3Mi5qcGc=-.jpg', 1, '2023-01-17 01:02:30', '2023-01-17 01:02:30'),
(14, 3, 'Bathtub and shower', 'c5kR7Ag08dK6ZDiLPLtcCgLFSjnGyo-metaNjM3OGU4YWE3NmRkNzc3NTE4NjY4MC5qcGc=-.jpg', 1, '2023-01-17 01:02:51', '2023-01-17 01:02:51'),
(15, 3, 'Jungle view', 'zio4bLfH8ub6spGPUlJHITRV5IcWeV-metaNjM3OGU4YWU0YmQ2MDQ2MzcyNTQ2My5qcGc=-.jpg', 1, '2023-01-17 01:03:10', '2023-01-17 01:03:10'),
(16, 4, 'Panoramic view', 'ZPlxMXMkJ22JaUOiEO787VwbNe66vT-metaNjM3OGU5ZTBkZThhMjkyOTMzMzI1Ny5qcGc=-.jpg', 1, '2023-01-17 18:22:23', '2023-01-17 18:22:23'),
(17, 4, 'Bed room front angle', '3sdH3895e988aCmnZLGYIJVdTBGGg1-metaNjM3OGVhMmExYTllYzMzMDAyNTAxOC5qcGc=-.jpg', 1, '2023-01-17 18:22:32', '2023-01-17 18:22:32'),
(18, 4, 'Bed room right angle', '1GDzaL8jo2w0xSwNAidF12iQyHQ7yK-metaNjM3OGU5ZGE1YmZiZTM4MTA4Njg3Mi5qcGc=-.jpg', 1, '2023-01-17 18:22:46', '2023-01-17 18:22:46'),
(19, 4, 'Bathtub and shower', 'ob8XlCkUQ4BKg535S50kjp0PMbmCOF-metaNjM3OGU5Yzc0MjM1NjY2MjI1ODk2Ny5qcGc=-.jpg', 1, '2023-01-17 18:23:03', '2023-01-17 18:23:03'),
(20, 4, 'Washtafel and bathtub', '4L0eVc1aXwQqsOEeHkSeBR8KaZyS9j-metaNjM3OGU5YmE1MDc2ZTc0MDQyMzA3Ni5qcGc=-.jpg', 1, '2023-01-17 18:23:14', '2023-01-17 18:23:14'),
(21, 5, 'Sunrise view', 'u0cEIcmgFQJl93p5jG6SKdoixEHKIw-metaNjM3OGYwMDJkZDkwNjgzNTkyODIwMS5qcGc=-.jpg', 1, '2023-01-17 18:51:55', '2023-01-17 18:51:55'),
(22, 5, 'Bed room front angle', 'q41rTKbFylT1gStrw34J6pt0yk98It-metaNjM3OGYwMDRhZTA2ZjUyNjY4NjUzNi5qcGc=-.jpg', 1, '2023-01-17 18:52:07', '2023-01-17 18:52:07'),
(23, 5, 'Bathtub and shower', 'uFadpjj7DN8bEJJM9MaekMdyyBTcnk-metaNjM3OGYwMGQ5MGEzZDUyNDkzODM0OS5qcGc=-.jpg', 1, '2023-01-17 18:52:25', '2023-01-17 18:52:25'),
(24, 5, 'Washtafel and bathtub', 'W9APTqQV4lQfkxDsqvEzvjHd1iwzNu-metaNjM3OGYwMTA4MTIxODIxODc2NDMyMi5qcGc=-.jpg', 1, '2023-01-17 18:52:39', '2023-01-17 18:52:39'),
(87, 6, 'Bed room right angle', 'AflvYCiDeFI6clgrM0m2nzhs7N3U3B-metaNjM3OGVkYmNjOGY0NzE3ODczNDk5OS5qcGc=-.jpg', 1, '2023-01-17 19:20:16', '2023-01-17 19:20:16'),
(88, 6, 'Bed room front angle', '2DzeXlKMzlRPOqtSyFaRiCFtYScvkZ-metaNjM3OGVkYTA2ZTQzYTMyODQ2MTQwNy5qcGc=-.jpg', 1, '2023-01-17 19:20:34', '2023-01-17 19:20:34'),
(89, 6, 'Bed room left angle', 'OURcytdSBTMxpf6ZH6WBKHT6YOqIS4-metaNjM3OGVkYzI2NmViZDUxMjU0NzYxNy5qcGc=-.jpg', 1, '2023-01-17 19:20:45', '2023-01-17 19:20:45'),
(90, 6, 'Washtafel and closet', 'UyphQKPVqTDdNTeRwn4udpjFltcRNB-metaNjM3OGYwMWNjYTdlYTkyMDA0NTc1MC5qcGc=-.jpg', 1, '2023-01-17 19:21:25', '2023-01-17 19:21:25'),
(91, 6, 'Washtafel', '783Kru1Jqf3mlxwKyPLL73FBLVXQgj-metaNjM3OGVkZGRlNzQ4Zjg3NjY4MTUxMi5qcGc=-.jpg', 1, '2023-01-17 19:21:57', '2023-01-17 19:21:57'),
(92, 6, 'Bathtub and shower', 'DKOZX3kztgZBcBAR21GECeJctb1jyF-metaNjM3OGVkZGIxN2JiMzYwMjYxMTAxNS5qcGc=-.jpg', 1, '2023-01-17 19:22:09', '2023-01-17 19:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `weddings`
--

DROP TABLE IF EXISTS `weddings`;
CREATE TABLE IF NOT EXISTS `weddings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` longtext COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weddings`
--

INSERT INTO `weddings` (`id`, `title`, `slug`, `subtitle`, `excerpt`, `description`, `banner_image`, `cover_image`, `button_text`, `button_link`, `price`, `per`, `meta_title`, `meta_description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'By the River', 'by-the-river', NULL, 'The magical wedding in our secret Ayung river at Payangan, Ubud. With green rolling hills, a gentle river, and fresh atmosphere of Ubud rainforest.', '<p>The magical wedding in our secret Ayung river at Payangan, Ubud. With green rolling hills, a gentle river, and fresh atmosphere of Ubud rainforest. It can be a laughter-filled day at the spa with your bridal party, two people sharing vows amid a tree-shaded forest, or an after-party where night somehow turns into day. Our dreamlike venues and stunning location are backed by a culinary team who can design a custom menu for your special day. Invite your guests to experience an unmatched destination-wedding holiday in Bali.</p>', 'muXlZIxyi85G5gtUX0oKnzNPNNd7sB-metaNjEzZGRkZjUxNWI3YjgwNDk4Njc2OS5qcGVn-.jpg', NULL, 'Inquire Now', NULL, NULL, NULL, 'By the River', 'The magical wedding in our secret Ayung river at Payangan, Ubud. With green rolling hills, a gentle river, and fresh atmosphere of Ubud rainforest.', 1, '2023-01-19 00:41:36', '2023-01-19 00:41:36'),
(2, 'By the Chapel', 'by-the-chapel', NULL, 'Celebrate your wedding in Bali at the most iconic chapel on the island.', '<p>Celebrate your wedding in Bali at the most iconic chapel on the island. The Chapel wedding is great, especially because there are enchanting backdrops of the forest, a lush landscape and water features. To be able to stand at the wedding altar in this elegant chapel, surrounded by the smell of fresh flowers, and face the green hills while saying “I do” is the dream of many brides which can become reality for you!</p>', 'MsRlFXRNzPqSCRerXD6GGF3ssyrP0t-metaNjEzZGRlMjQxMmYwYjM4MzI2MjYzNS5qcGVn-.jpg', NULL, 'Inquire Now', NULL, NULL, NULL, 'By the Chapel', 'Celebrate your wedding in Bali at the most iconic chapel on the island.', 1, '2023-01-19 00:42:27', '2023-01-19 00:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_images`
--

DROP TABLE IF EXISTS `wedding_images`;
CREATE TABLE IF NOT EXISTS `wedding_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `wedding_id` int NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `is_active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wedding_images`
--

INSERT INTO `wedding_images` (`id`, `wedding_id`, `title`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'By the River', 'GsErgDabj7rZxOxNkCgMXbI4InxerM-metaNjEzZGRkZjUxNWI3YjgwNDk4Njc2OS5qcGVn-.jpg', 1, '2023-01-19 00:50:07', '2023-01-19 00:50:07'),
(2, 2, 'By the Chapel', 'jDrhCXHPqtdkemfQCFivYO3fd5YBrc-metaNjEzZGRlMjQxMmYwYjM4MzI2MjYzNS5qcGVn-.jpg', 1, '2023-01-19 00:50:32', '2023-01-19 00:50:32');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
