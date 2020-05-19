-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 02:57 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_general`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_banners`
--

CREATE TABLE `about_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_banners`
--

INSERT INTO `about_banners` (`id`, `is_publish`, `banner`, `head_title`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '1589226756-section-bg-about1.jpg', '{\"en\":\"ABOUT US\",\"ar\":\"\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0639\\u0646\\u0627\"}', '{\"ar\":\"30 \\u0639\\u0627\\u0645\\u064b\\u0627 \\u0645\\u0646 \\u0625\\u0646\\u0634\\u0627\\u0621 \\u063a\\u062f \\u0623\\u0643\\u062b\\u0631 \\u0623\\u0645\\u0627\\u0646\\u064b\\u0627!\",\"en\":\"30+ YEARS OF CREATING A SAFER TOMORROW!\"}', '2020-05-05 15:57:16', '2020-05-17 20:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `about_companies`
--

CREATE TABLE `about_companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `story_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_companies`
--

INSERT INTO `about_companies` (`id`, `is_publish`, `story_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '{\"en\":\"30+ Years in Professional Business\",\"ar\":\"30+ \\u0633\\u0646\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0623\\u0639\\u0645\\u0627\\u0644 \\u0627\\u0644\\u0645\\u0647\\u0646\\u064a\\u0629\"}', '{\"en\":\"<p>We have more than 33 years of professional experience in design, supply, installation, commissioning of projects and providing maintenance services to prestigious clients of different market sectors. Our offices and warehouse facilities located in Abu Dhabi, Al Ain, Dubai &amp; Umm Al Quwain allows us to be conveniently accessible to our customers. As a result working with hundred of creatives all these past years, we are now delivering a theme that will be part of your toolset for a lot of time, we are totally sure about this.<\\/p>\",\"ar\":\"<p>\\u0644\\u062f\\u064a\\u0646\\u0627 \\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 33 \\u0639\\u0627\\u0645\\u064b\\u0627 \\u0645\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0647\\u0646\\u064a\\u0629 \\u0641\\u064a \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0648\\u062a\\u0648\\u0631\\u064a\\u062f \\u0648\\u062a\\u0631\\u0643\\u064a\\u0628 \\u0648\\u062a\\u0634\\u063a\\u064a\\u0644 \\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0648\\u062a\\u0642\\u062f\\u064a\\u0645 \\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0635\\u064a\\u0627\\u0646\\u0629 \\u0644\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621 \\u0627\\u0644\\u0645\\u0631\\u0645\\u0648\\u0642\\u064a\\u0646 \\u0645\\u0646 \\u0645\\u062e\\u062a\\u0644\\u0641 \\u0642\\u0637\\u0627\\u0639\\u0627\\u062a \\u0627\\u0644\\u0633\\u0648\\u0642. \\u0645\\u0643\\u0627\\u062a\\u0628\\u0646\\u0627 \\u0648\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0627\\u0644\\u0645\\u0633\\u062a\\u0648\\u062f\\u0639\\u0627\\u062a \\u0627\\u0644\\u0645\\u0648\\u062c\\u0648\\u062f\\u0629 \\u0641\\u064a \\u0623\\u0628\\u0648\\u0638\\u0628\\u064a \\u0648\\u0627\\u0644\\u0639\\u064a\\u0646 \\u0648\\u062f\\u0628\\u064a \\u0648\\u0623\\u0645 \\u0627\\u0644\\u0642\\u064a\\u0648\\u064a\\u0646 \\u062a\\u062a\\u064a\\u062d \\u0644\\u0646\\u0627 \\u0627\\u0644\\u0648\\u0635\\u0648\\u0644 \\u0628\\u0633\\u0647\\u0648\\u0644\\u0629 \\u0625\\u0644\\u0649 \\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627. \\u0646\\u062a\\u064a\\u062c\\u0629 \\u0644\\u0644\\u0639\\u0645\\u0644 \\u0645\\u0639 \\u0627\\u0644\\u0645\\u0626\\u0627\\u062a \\u0645\\u0646 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645\\u0627\\u062a \\u0637\\u0648\\u0627\\u0644 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0633\\u0646\\u0648\\u0627\\u062a \\u0627\\u0644\\u0645\\u0627\\u0636\\u064a\\u0629 \\u060c \\u0646\\u0642\\u062f\\u0645 \\u0627\\u0644\\u0622\\u0646 \\u0645\\u0648\\u0636\\u0648\\u0639\\u064b\\u0627 \\u0633\\u064a\\u0643\\u0648\\u0646 \\u062c\\u0632\\u0621\\u064b\\u0627 \\u0645\\u0646 \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0623\\u062f\\u0648\\u0627\\u062a\\u0643 \\u0644\\u0641\\u062a\\u0631\\u0629 \\u0637\\u0648\\u064a\\u0644\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0632\\u0645\\u0646 \\u060c \\u0648\\u0646\\u062d\\u0646 \\u0639\\u0644\\u0649 \\u064a\\u0642\\u064a\\u0646 \\u0645\\u0646 \\u0630\\u0644\\u0643 \\u062a\\u0645\\u0627\\u0645\\u064b\\u0627.<\\/p>\"}', '2020-05-06 02:26:03', '2020-05-06 02:26:03'),
(2, 1, 1, '{\"en\":\"We are ISO 9001:2008 certified\",\"ar\":\"\\u0646\\u062d\\u0646 \\u062d\\u0627\\u0635\\u0644\\u0648\\u0646 \\u0639\\u0644\\u0649 \\u0634\\u0647\\u0627\\u062f\\u0629 ISO 9001: 2008\"}', '{\"en\":\"<p>We acquired ISO 9001:2008 Certification. Setting organization standards for work flows and procedures to be followed by the company, required time and effort by the management to ensure that the processes in place are truly effective and based on the experience and company method of business transactions. The defined tasks and procedures facilitate the work and new employees&rsquo; induction hence making it easier to operate as we grow.<\\/p>\",\"ar\":\"<p>\\u062d\\u0635\\u0644\\u0646\\u0627 \\u0639\\u0644\\u0649 \\u0634\\u0647\\u0627\\u062f\\u0629 ISO 9001: 2008. \\u0648\\u0636\\u0639 \\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u062a\\u0646\\u0638\\u064a\\u0645\\u064a\\u0629 \\u0644\\u062a\\u062f\\u0641\\u0642\\u0627\\u062a \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0648\\u0627\\u0644\\u0625\\u062c\\u0631\\u0627\\u0621\\u0627\\u062a \\u0627\\u0644\\u0648\\u0627\\u062c\\u0628 \\u0627\\u062a\\u0628\\u0627\\u0639\\u0647\\u0627 \\u0645\\u0646 \\u0642\\u0628\\u0644 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u060c \\u0648\\u0627\\u0644\\u0648\\u0642\\u062a \\u0648\\u0627\\u0644\\u062c\\u0647\\u062f \\u0627\\u0644\\u0645\\u0637\\u0644\\u0648\\u0628\\u064a\\u0646 \\u0645\\u0646 \\u0642\\u0628\\u0644 \\u0627\\u0644\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0644\\u0636\\u0645\\u0627\\u0646 \\u0623\\u0646 \\u0627\\u0644\\u0639\\u0645\\u0644\\u064a\\u0627\\u062a \\u0627\\u0644\\u0645\\u0648\\u062c\\u0648\\u062f\\u0629 \\u0641\\u0639\\u0627\\u0644\\u0629 \\u062d\\u0642\\u064b\\u0627 \\u0648\\u062a\\u0633\\u062a\\u0646\\u062f \\u0625\\u0644\\u0649 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0648\\u0623\\u0633\\u0644\\u0648\\u0628 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0639\\u0627\\u0645\\u0644\\u0627\\u062a \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a\\u0629. \\u062a\\u0633\\u0647\\u0644 \\u0627\\u0644\\u0645\\u0647\\u0627\\u0645 \\u0648\\u0627\\u0644\\u0625\\u062c\\u0631\\u0627\\u0621\\u0627\\u062a \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u0629 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0648\\u062a\\u062d\\u0641\\u064a\\u0632 \\u0627\\u0644\\u0645\\u0648\\u0638\\u0641\\u064a\\u0646 \\u0627\\u0644\\u062c\\u062f\\u062f \\u060c \\u0645\\u0645\\u0627 \\u064a\\u062c\\u0639\\u0644 \\u0645\\u0646 \\u0627\\u0644\\u0633\\u0647\\u0644 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0645\\u0639 \\u062a\\u0642\\u062f\\u0645\\u0646\\u0627 \\u0641\\u064a \\u0627\\u0644\\u0646\\u0645\\u0648.<\\/p>\"}', '2020-05-06 02:29:39', '2020-05-06 02:29:39'),
(3, 1, 1, '{\"en\":\"Software & Tools\",\"ar\":\"\\u0623\\u062f\\u0648\\u0627\\u062a \\u0627\\u0644\\u0628\\u0631\\u0645\\u062c\\u064a\\u0627\\u062a\"}', '{\"en\":\"<p>We apply various softwares to assist us in the designing of our systems particularly for the Fire Protection and Water Treatment Systems. The use of integrated CAFM software has also been integrated in our asset management system to our maintenance program to ensure proper control &amp; monitoring of the facilities and its equipment.<\\/p>\",\"ar\":\"<p>\\u0646\\u0637\\u0628\\u0642 \\u0628\\u0631\\u0627\\u0645\\u062c \\u0645\\u062e\\u062a\\u0644\\u0641\\u0629 \\u0644\\u0645\\u0633\\u0627\\u0639\\u062f\\u062a\\u0646\\u0627 \\u0641\\u064a \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0623\\u0646\\u0638\\u0645\\u062a\\u0646\\u0627 \\u062e\\u0627\\u0635\\u0629 \\u0644\\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642 \\u0648\\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647. \\u062a\\u0645 \\u062f\\u0645\\u062c \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0628\\u0631\\u0646\\u0627\\u0645\\u062c CAFM \\u0627\\u0644\\u0645\\u062a\\u0643\\u0627\\u0645\\u0644 \\u0623\\u064a\\u0636\\u064b\\u0627 \\u0641\\u064a \\u0646\\u0638\\u0627\\u0645 \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0623\\u0635\\u0648\\u0644 \\u0644\\u062f\\u064a\\u0646\\u0627 \\u0641\\u064a \\u0628\\u0631\\u0646\\u0627\\u0645\\u062c \\u0627\\u0644\\u0635\\u064a\\u0627\\u0646\\u0629 \\u0644\\u0636\\u0645\\u0627\\u0646 \\u0627\\u0644\\u062a\\u062d\\u0643\\u0645 \\u0648\\u0627\\u0644\\u0645\\u0631\\u0627\\u0642\\u0628\\u0629 \\u0627\\u0644\\u0645\\u0646\\u0627\\u0633\\u0628\\u064a\\u0646 \\u0644\\u0644\\u0645\\u0646\\u0634\\u0622\\u062a \\u0648\\u0645\\u0639\\u062f\\u0627\\u062a\\u0647\\u0627.<\\/p>\"}', '2020-05-06 02:31:02', '2020-05-06 02:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `about_concepts`
--

CREATE TABLE `about_concepts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `icon` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_concepts`
--

INSERT INTO `about_concepts` (`id`, `is_publish`, `icon`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, '<span class=\"icon-presentation\" style=\"color:#0f5e9c;\"></span>', '{\"en\":\"Our Approach\",\"ar\":\"\\u0646\\u0647\\u062c\\u0646\\u0627\"}', '{\"en\":\"<p>Address the client\'s needs and offer the right solution for their requirement. Be transparent and set realistic goals and timelines in order to meet or hopefully exceed the stakeholder\'s expectations.<\\/p>\",\"ar\":\"<p>\\u062a\\u0644\\u0628\\u064a\\u0629 \\u0627\\u062d\\u062a\\u064a\\u0627\\u062c\\u0627\\u062a \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644 \\u0648\\u062a\\u0642\\u062f\\u064a\\u0645 \\u0627\\u0644\\u062d\\u0644 \\u0627\\u0644\\u0645\\u0646\\u0627\\u0633\\u0628 \\u0644\\u0645\\u062a\\u0637\\u0644\\u0628\\u0627\\u062a\\u0647\\u0645. \\u0643\\u0646 \\u0634\\u0641\\u0627\\u0641\\u064b\\u0627 \\u0648\\u062d\\u062f\\u062f \\u0623\\u0647\\u062f\\u0627\\u0641\\u064b\\u0627 \\u0648\\u0627\\u0642\\u0639\\u064a\\u0629 \\u0648\\u062c\\u062f\\u0627\\u0648\\u0644 \\u0632\\u0645\\u0646\\u064a\\u0629 \\u0645\\u0646 \\u0623\\u062c\\u0644 \\u062a\\u0644\\u0628\\u064a\\u0629 \\u062a\\u0648\\u0642\\u0639\\u0627\\u062a \\u0623\\u0635\\u062d\\u0627\\u0628 \\u0627\\u0644\\u0645\\u0635\\u0644\\u062d\\u0629 \\u0623\\u0648 \\u062a\\u062c\\u0627\\u0648\\u0632\\u0647\\u0627.<\\/p>\"}', '2020-05-05 17:16:23', '2020-05-05 17:44:12'),
(2, 1, '<span class=\"icon-lightbulb\" style=\"color:#e22822;\"></span>', '{\"en\":\"Our Mission\",\"ar\":\"\\u0645\\u0647\\u0645\\u062a\\u0646\\u0627\"}', '{\"en\":\"<p>Providers of exceptional end to end specialized engineering solutions across MEEA region<\\/p>\",\"ar\":\"<p>\\u0645\\u0632\\u0648\\u062f\\u0648 \\u062d\\u0644\\u0648\\u0644 \\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0627\\u0633\\u062a\\u062b\\u0646\\u0627\\u0626\\u064a\\u0629 \\u0641\\u064a \\u062c\\u0645\\u064a\\u0639 \\u0623\\u0646\\u062d\\u0627\\u0621 \\u0645\\u0646\\u0637\\u0642\\u0629 \\u0627\\u0644\\u0634\\u0631\\u0642 \\u0627\\u0644\\u0623\\u0648\\u0633\\u0637 \\u0648\\u0623\\u0641\\u0631\\u064a\\u0642\\u064a\\u0627<\\/p>\"}', '2020-05-05 17:17:26', '2020-05-05 17:38:38'),
(3, 1, '<span class=\"icon-target\" style=\"color: #ffbf00;\"></span>', '{\"en\":\"Our Vision\",\"ar\":\"\\u0631\\u0624\\u064a\\u062a\\u0646\\u0627\"}', '{\"en\":\"<p>To render effective &amp; Reliable specialized engineering solutions as a collaborative and valued partner<\\/p>\",\"ar\":\"<p>\\u0644\\u062a\\u0642\\u062f\\u064a\\u0645 \\u062d\\u0644\\u0648\\u0644 \\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0641\\u0639\\u0627\\u0644\\u0629 \\u0648\\u0645\\u0648\\u062b\\u0648\\u0642\\u0629 \\u0643\\u0634\\u0631\\u064a\\u0643 \\u0645\\u062a\\u0639\\u0627\\u0648\\u0646 \\u0648\\u0642\\u064a\\u0645<\\/p>\"}', '2020-05-05 17:20:01', '2020-05-05 17:38:51'),
(4, 1, '<span class=\"icon-shield\" style=\"color:green;\"></span>', '{\"en\":\"Our Values\",\"ar\":\"\\u0642\\u064a\\u0645\\u0646\\u0627\"}', '{\"en\":\"<p>Act with dignity and integrity when dealing with existing and potential customers. Given that our success comes as a natural result of effectively and responsibly serving their interests.<\\/p>\",\"ar\":\"<p>\\u0627\\u0644\\u062a\\u0635\\u0631\\u0641 \\u0628\\u0643\\u0631\\u0627\\u0645\\u0629 \\u0648\\u0646\\u0632\\u0627\\u0647\\u0629 \\u0639\\u0646\\u062f \\u0627\\u0644\\u062a\\u0639\\u0627\\u0645\\u0644 \\u0645\\u0639 \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621 \\u0627\\u0644\\u062d\\u0627\\u0644\\u064a\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0645\\u062d\\u062a\\u0645\\u0644\\u064a\\u0646. \\u0628\\u0627\\u0644\\u0646\\u0638\\u0631 \\u0625\\u0644\\u0649 \\u0623\\u0646 \\u0646\\u062c\\u0627\\u062d\\u0646\\u0627 \\u064a\\u0623\\u062a\\u064a \\u0643\\u0646\\u062a\\u064a\\u062c\\u0629 \\u0637\\u0628\\u064a\\u0639\\u064a\\u0629 \\u0644\\u062e\\u062f\\u0645\\u0629 \\u0645\\u0635\\u0627\\u0644\\u062d\\u0647\\u0645 \\u0628\\u0634\\u0643\\u0644 \\u0641\\u0639\\u0627\\u0644 \\u0648\\u0645\\u0633\\u0624\\u0648\\u0644.<\\/p>\"}', '2020-05-05 17:20:57', '2020-05-05 17:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `about_diversity_icons`
--

CREATE TABLE `about_diversity_icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `story_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_diversity_icons`
--

INSERT INTO `about_diversity_icons` (`id`, `is_publish`, `story_id`, `title`, `icon`, `created_at`, `updated_at`) VALUES
(2, 1, 2, '{\"en\":\"ELECTRICAL\",\"ar\":\"\\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0621\"}', 'icon-hazardous', '2020-05-06 07:06:02', '2020-05-06 14:55:09'),
(3, 1, 2, '{\"en\":\"MECHANICAL\",\"ar\":\"\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\"}', 'icon-gears', '2020-05-06 07:06:44', '2020-05-06 07:07:30'),
(4, 1, 2, '{\"en\":\"SUSTAINABILITY\",\"ar\":\"\\u0627\\u0644\\u0627\\u0633\\u062a\\u062f\\u0627\\u0645\\u0629\"}', 'icon-recycle', '2020-05-06 07:08:12', '2020-05-06 07:08:12'),
(5, 1, 2, '{\"en\":\"OCCUPATIONAL HEALTH & SAFETY PRACTITIONER\",\"ar\":\"\\u0645\\u0645\\u0627\\u0631\\u0633\\u0647 \\u0627\\u0644\\u0635\\u062d\\u0629 \\u0648\\u0627\\u0644\\u0633\\u0644\\u0627\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0647\\u0646\\u064a\\u0629\"}', 'icon-shield', '2020-05-06 07:08:48', '2020-05-06 07:08:48'),
(6, 1, 2, '{\"en\":\"SECURITY & INTEGRATED ELV\",\"ar\":\"\\u0627\\u0644\\u0623\\u0645\\u0646 \\u0648 ELV \\u0627\\u0644\\u0645\\u062a\\u0643\\u0627\\u0645\\u0644\\u0629\"}', 'icon-focus', '2020-05-06 07:10:04', '2020-05-06 07:10:04'),
(7, 1, 2, '{\"en\":\"ENVIRONMENTAL MANAGEMENT COMPLIANCE\",\"ar\":\"\\u0627\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0644\\u0644\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0628\\u064a\\u0626\\u064a\\u0629\"}', 'icon-tools-2', '2020-05-06 07:10:41', '2020-05-06 07:10:41'),
(8, 1, 2, '{\"en\":\"FIRE PROTECTION\",\"ar\":\"\\u0627\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642\"}', 'icon-lifesaver', '2020-05-06 07:11:12', '2020-05-06 07:11:12'),
(9, 1, 2, '{\"en\":\"SOCIETY OF ENGINEERING (CIVIL)\",\"ar\":\"\\u0643\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 (\\u0645\\u062f\\u0646\\u064a)\"}', 'icon-circle-compass', '2020-05-06 07:11:51', '2020-05-06 07:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `about_diversity_ones`
--

CREATE TABLE `about_diversity_ones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `story_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_diversity_ones`
--

INSERT INTO `about_diversity_ones` (`id`, `is_publish`, `story_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '{\"en\":\"Engineers from diverse background\",\"ar\":\"\\u0645\\u0647\\u0646\\u062f\\u0633\\u0648\\u0646 \\u0645\\u0646 \\u062e\\u0644\\u0641\\u064a\\u0627\\u062a \\u0645\\u062a\\u0646\\u0648\\u0639\\u0629\"}', '{\"en\":\"<p>One of the main factors of our success is our team&acute; qualifications, we have Engineers from various professional fields: Electrical, Mechanical, Sustainability, Occupational Health &amp; Safety Practitioners, Environmental Management, Compliance, Fire Protection, Security &amp; Integrated ELV as well as Society of Engineering (Civil)<\\/p>\",\"ar\":\"<p>\\u0623\\u062d\\u062f \\u0627\\u0644\\u0639\\u0648\\u0627\\u0645\\u0644 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\\u0629 \\u0644\\u0646\\u062c\\u0627\\u062d\\u0646\\u0627 \\u0647\\u0648 \\u0645\\u0624\\u0647\\u0644\\u0627\\u062a \\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u060c \\u0644\\u062f\\u064a\\u0646\\u0627 \\u0645\\u0647\\u0646\\u062f\\u0633\\u0648\\u0646 \\u0645\\u0646 \\u0645\\u062e\\u062a\\u0644\\u0641 \\u0627\\u0644\\u0645\\u062c\\u0627\\u0644\\u0627\\u062a \\u0627\\u0644\\u0645\\u0647\\u0646\\u064a\\u0629: \\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0626\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0627\\u0633\\u062a\\u062f\\u0627\\u0645\\u0629 \\u0648\\u0645\\u0645\\u0627\\u0631\\u0633\\u064a \\u0627\\u0644\\u0635\\u062d\\u0629 \\u0648\\u0627\\u0644\\u0633\\u0644\\u0627\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0647\\u0646\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0628\\u064a\\u0626\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0648\\u0627\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642 \\u0648\\u0627\\u0644\\u0623\\u0645\\u0646 \\u0648 ELV \\u0627\\u0644\\u0645\\u062a\\u0643\\u0627\\u0645\\u0644\\u0629 \\u0648\\u0643\\u0630\\u0644\\u0643 \\u0627\\u0644\\u0645\\u062c\\u062a\\u0645\\u0639 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 (\\u0645\\u062f\\u0646\\u064a)<\\/p>\"}', '2020-05-06 06:59:49', '2020-05-06 14:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `about_diversity_twos`
--

CREATE TABLE `about_diversity_twos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `story_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_diversity_twos`
--

INSERT INTO `about_diversity_twos` (`id`, `is_publish`, `story_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '{\"en\":\"Certifications & Accreditation\",\"ar\":\"\\u0627\\u0644\\u0634\\u0647\\u0627\\u062f\\u0627\\u062a \\u0648\\u0627\\u0644\\u0627\\u0639\\u062a\\u0645\\u0627\\u062f\"}', '{\"en\":\"<p>We are accredited and approved for various entities from Commercial, Aviation, Government, Industrial and OIL &amp; GAS and Power Stations. We passed the requirement and currently an approved Supplier &amp; Service Provider.<\\/p>\",\"ar\":\"<p>\\u0646\\u062d\\u0646 \\u0645\\u0639\\u062a\\u0645\\u062f\\u0648\\u0646 \\u0648\\u0645\\u0639\\u062a\\u0645\\u062f\\u0648\\u0646 \\u0644\\u0644\\u0643\\u064a\\u0627\\u0646\\u0627\\u062a \\u0627\\u0644\\u0645\\u062e\\u062a\\u0644\\u0641\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0645\\u062d\\u0637\\u0627\\u062a \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0637\\u064a\\u0631\\u0627\\u0646 \\u0648\\u0627\\u0644\\u062d\\u0643\\u0648\\u0645\\u0629 \\u0648\\u0627\\u0644\\u0635\\u0646\\u0627\\u0639\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0646\\u0641\\u0637 \\u0648\\u0627\\u0644\\u063a\\u0627\\u0632 \\u0648\\u0645\\u062d\\u0637\\u0627\\u062a \\u0627\\u0644\\u0637\\u0627\\u0642\\u0629. \\u0644\\u0642\\u062f \\u062a\\u062c\\u0627\\u0648\\u0632\\u0646\\u0627 \\u0627\\u0644\\u0645\\u062a\\u0637\\u0644\\u0628\\u0627\\u062a \\u0648\\u062d\\u0627\\u0644\\u064a\\u0627\\u064b \\u0645\\u0648\\u0631\\u062f \\u0645\\u0639\\u062a\\u0645\\u062f \\u0648\\u0645\\u0648\\u0641\\u0631 \\u062e\\u062f\\u0645\\u0629.<\\/p>\"}', '2020-05-06 07:13:09', '2020-05-06 07:13:09'),
(2, 1, 2, '{\"en\":\"Serving 200+ Customers delivered 500+ projects in UAE\",\"ar\":\"\\u062a\\u062e\\u062f\\u0645 \\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 200 \\u0639\\u0645\\u064a\\u0644 \\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 500 \\u0645\\u0634\\u0631\\u0648\\u0639 \\u0641\\u064a \\u0627\\u0644\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u062d\\u062f\\u0629\"}', '{\"en\":\"<p>We received recommendation letters and approval from our clients highlighting our capability to handle any kind of installation and maintenance work in recognition of our quality works, good performance and professional and we get high remarks on our customer feedback.<\\/p>\",\"ar\":\"<p>\\u062a\\u0644\\u0642\\u064a\\u0646\\u0627 \\u062e\\u0637\\u0627\\u0628\\u0627\\u062a \\u062a\\u0648\\u0635\\u064a\\u0629 \\u0648\\u0645\\u0648\\u0627\\u0641\\u0642\\u0629 \\u0645\\u0646 \\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627 \\u062a\\u0628\\u0631\\u0632 \\u0642\\u062f\\u0631\\u062a\\u0646\\u0627 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u062a\\u0639\\u0627\\u0645\\u0644 \\u0645\\u0639 \\u0623\\u064a \\u0646\\u0648\\u0639 \\u0645\\u0646 \\u0623\\u0639\\u0645\\u0627\\u0644 \\u0627\\u0644\\u062a\\u0631\\u0643\\u064a\\u0628 \\u0648\\u0627\\u0644\\u0635\\u064a\\u0627\\u0646\\u0629 \\u062a\\u0642\\u062f\\u064a\\u0631\\u0627\\u064b \\u0644\\u0623\\u0639\\u0645\\u0627\\u0644 \\u0627\\u0644\\u062c\\u0648\\u062f\\u0629 \\u0644\\u062f\\u064a\\u0646\\u0627 \\u0648\\u0627\\u0644\\u0623\\u062f\\u0627\\u0621 \\u0627\\u0644\\u062c\\u064a\\u062f \\u0648\\u0627\\u0644\\u0645\\u0647\\u0646\\u064a \\u0648\\u0646\\u062d\\u0635\\u0644 \\u0639\\u0644\\u0649 \\u0645\\u0644\\u0627\\u062d\\u0638\\u0627\\u062a \\u0639\\u0627\\u0644\\u064a\\u0629 \\u062d\\u0648\\u0644 \\u0645\\u0644\\u0627\\u062d\\u0638\\u0627\\u062a \\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627.<\\/p>\"}', '2020-05-06 07:13:55', '2020-05-06 07:13:55');

-- --------------------------------------------------------

--
-- Table structure for table `about_leaderships`
--

CREATE TABLE `about_leaderships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `story_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_leaderships`
--

INSERT INTO `about_leaderships` (`id`, `is_publish`, `story_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '{\"en\":\"Solving Complex Engineering Challenges\",\"ar\":\"\\u062d\\u0644 \\u0627\\u0644\\u062a\\u062d\\u062f\\u064a\\u0627\\u062a \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0642\\u062f\\u0629\"}', '{\"en\":\"<p>General International Group established its operation in 1982 in Abu Dhabi, with a focus on Fire Protection Services. Shortly afterwards, the management realized the importance of having proper MEP maintenance services and expanded its operations accordingly. Years later, came the addition of the Water Treatment services to capitalize on the region&rsquo;s focus on Water Treatment. Today our offices are strategically located throughout the UAE, to enable us to better serve our clients. Our product offering has expanded, yet we maintained our focus on offering specialized solutions that requires technical expertise. Our focus is to demonstrate our engineering abilities and product range offered within the Group. We offer engineering solutions from design to installation and maintenance of Fire Protection Systems &amp; Integrated ELV Systems, Water Treatment &amp; Waste Water Treatment Systems and Integrated Facilities Management Systems.<\\/p>\",\"ar\":\"<p>\\u062a\\u0623\\u0633\\u0633\\u062a \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u062c\\u0646\\u0631\\u0627\\u0644 \\u0627\\u0646\\u062a\\u0631\\u0646\\u0627\\u0634\\u064a\\u0648\\u0646\\u0627\\u0644 \\u0641\\u064a \\u0639\\u0627\\u0645 1982 \\u0641\\u064a \\u0623\\u0628\\u0648\\u0638\\u0628\\u064a \\u060c \\u0645\\u0639 \\u0627\\u0644\\u062a\\u0631\\u0643\\u064a\\u0632 \\u0639\\u0644\\u0649 \\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642. \\u0628\\u0639\\u062f \\u0630\\u0644\\u0643 \\u0628\\u0648\\u0642\\u062a \\u0642\\u0635\\u064a\\u0631 \\u060c \\u0623\\u062f\\u0631\\u0643\\u062a \\u0627\\u0644\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0623\\u0647\\u0645\\u064a\\u0629 \\u0648\\u062c\\u0648\\u062f \\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0626\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0646\\u0627\\u0633\\u0628\\u0629 \\u0648\\u062a\\u0648\\u0633\\u064a\\u0639 \\u0639\\u0645\\u0644\\u064a\\u0627\\u062a\\u0647\\u0627 \\u0648\\u0641\\u0642\\u064b\\u0627 \\u0644\\u0630\\u0644\\u0643. \\u0628\\u0639\\u062f \\u0633\\u0646\\u0648\\u0627\\u062a \\u060c \\u062c\\u0627\\u0621\\u062a \\u0625\\u0636\\u0627\\u0641\\u0629 \\u062e\\u062f\\u0645\\u0627\\u062a \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0644\\u0644\\u0627\\u0633\\u062a\\u0641\\u0627\\u062f\\u0629 \\u0645\\u0646 \\u062a\\u0631\\u0643\\u064a\\u0632 \\u0627\\u0644\\u0645\\u0646\\u0637\\u0642\\u0629 \\u0639\\u0644\\u0649 \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647. \\u0627\\u0644\\u064a\\u0648\\u0645 \\u062a\\u0642\\u0639 \\u0645\\u0643\\u0627\\u062a\\u0628\\u0646\\u0627 \\u0641\\u064a \\u0645\\u0648\\u0642\\u0639 \\u0627\\u0633\\u062a\\u0631\\u0627\\u062a\\u064a\\u062c\\u064a \\u0641\\u064a \\u062c\\u0645\\u064a\\u0639 \\u0623\\u0646\\u062d\\u0627\\u0621 \\u0627\\u0644\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u062d\\u062f\\u0629 \\u060c \\u0644\\u062a\\u0645\\u0643\\u064a\\u0646\\u0646\\u0627 \\u0645\\u0646 \\u062e\\u062f\\u0645\\u0629 \\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627 \\u0628\\u0634\\u0643\\u0644 \\u0623\\u0641\\u0636\\u0644. \\u062a\\u0648\\u0633\\u0639\\u062a \\u0639\\u0631\\u0648\\u0636 \\u0645\\u0646\\u062a\\u062c\\u0627\\u062a\\u0646\\u0627 \\u060c \\u0648\\u0645\\u0639 \\u0630\\u0644\\u0643 \\u062d\\u0627\\u0641\\u0638\\u0646\\u0627 \\u0639\\u0644\\u0649 \\u062a\\u0631\\u0643\\u064a\\u0632\\u0646\\u0627 \\u0639\\u0644\\u0649 \\u062a\\u0642\\u062f\\u064a\\u0645 \\u062d\\u0644\\u0648\\u0644 \\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u062a\\u062a\\u0637\\u0644\\u0628 \\u062e\\u0628\\u0631\\u0629 \\u0641\\u0646\\u064a\\u0629. \\u064a\\u0646\\u0635\\u0628 \\u062a\\u0631\\u0643\\u064a\\u0632\\u0646\\u0627 \\u0639\\u0644\\u0649 \\u0625\\u0638\\u0647\\u0627\\u0631 \\u0642\\u062f\\u0631\\u0627\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0648\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u0645\\u0646\\u062a\\u062c\\u0627\\u062a \\u0627\\u0644\\u0645\\u0642\\u062f\\u0645\\u0629 \\u062f\\u0627\\u062e\\u0644 \\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629. \\u0646\\u0642\\u062f\\u0645 \\u0627\\u0644\\u062d\\u0644\\u0648\\u0644 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0625\\u0644\\u0649 \\u062a\\u0631\\u0643\\u064a\\u0628 \\u0648\\u0635\\u064a\\u0627\\u0646\\u0629 \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642 \\u0648\\u0623\\u0646\\u0638\\u0645\\u0629 ELV \\u0627\\u0644\\u0645\\u062a\\u0643\\u0627\\u0645\\u0644\\u0629 \\u0648\\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0648\\u0623\\u0646\\u0638\\u0645\\u0629 \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0645\\u064a\\u0627\\u0647 \\u0627\\u0644\\u0635\\u0631\\u0641 \\u0627\\u0644\\u0635\\u062d\\u064a \\u0648\\u0623\\u0646\\u0638\\u0645\\u0629 \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0627\\u0644\\u0645\\u062a\\u0643\\u0627\\u0645\\u0644\\u0629.<\\/p>\"}', '2020-05-06 09:32:23', '2020-05-06 09:32:23'),
(2, 1, 3, '{\"en\":\"Compliance Management Systems\",\"ar\":\"\\u0646\\u0638\\u0645 \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644\"}', '{\"en\":\"<p>General International Group complies with all applicable standards and implements policies as guidance for establishing, developing, implementing, evaluating, maintaining and improving an effective and responsive compliance management system within our organization. It is our commitment to ensure that our management systems are continuously monitored and see where improvements are essentials.<\\/p>\",\"ar\":\"<p>\\u062a\\u062a\\u0648\\u0627\\u0641\\u0642 General International Group \\u0645\\u0639 \\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0637\\u0628\\u0642\\u0629 \\u0648\\u062a\\u0646\\u0641\\u0630 \\u0627\\u0644\\u0633\\u064a\\u0627\\u0633\\u0627\\u062a \\u0643\\u062f\\u0644\\u064a\\u0644 \\u0644\\u0625\\u0646\\u0634\\u0627\\u0621 \\u0646\\u0638\\u0627\\u0645 \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0641\\u0639\\u0627\\u0644 \\u0648\\u0633\\u0631\\u064a\\u0639 \\u0627\\u0644\\u0627\\u0633\\u062a\\u062c\\u0627\\u0628\\u0629 \\u0648\\u062a\\u0637\\u0648\\u064a\\u0631\\u0647 \\u0648\\u062a\\u0646\\u0641\\u064a\\u0630\\u0647 \\u0648\\u062a\\u0642\\u064a\\u064a\\u0645\\u0647 \\u0648\\u0635\\u064a\\u0627\\u0646\\u062a\\u0647 \\u0648\\u062a\\u062d\\u0633\\u064a\\u0646\\u0647. \\u0646\\u062d\\u0646 \\u0645\\u0644\\u062a\\u0632\\u0645\\u0648\\u0646 \\u0628\\u0627\\u0644\\u062a\\u0623\\u0643\\u062f \\u0645\\u0646 \\u0623\\u0646 \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0644\\u062f\\u064a\\u0646\\u0627 \\u062a\\u062a\\u0645 \\u0645\\u0631\\u0627\\u0642\\u0628\\u062a\\u0647\\u0627 \\u0628\\u0627\\u0633\\u062a\\u0645\\u0631\\u0627\\u0631 \\u0648\\u0645\\u0639\\u0631\\u0641\\u0629 \\u0623\\u064a\\u0646 \\u0627\\u0644\\u062a\\u062d\\u0633\\u064a\\u0646\\u0627\\u062a \\u0636\\u0631\\u0648\\u0631\\u064a\\u0629.<\\/p>\"}', '2020-05-06 09:33:11', '2020-05-06 09:33:11'),
(3, 1, 3, '{\"en\":\"Corporate Compliance\",\"ar\":\"\\u0627\\u0644\\u062a\\u0632\\u0627\\u0645 \\u0627\\u0644\\u0634\\u0631\\u0627\\u0643\\u0629\"}', '{\"en\":\"<p>General International Group&rsquo;s corporate compliance program is designed to detect and prevent violations of laws by the agents, employees, officers and directors within our operations. We are dedicated to comply with the social aspect of the society and rights of our employees. We put strong emphasis in complying with our code of responsibilities under human and ethical requirements to ensure that we comply with laws and regulations in conducting the operations.<\\/p>\",\"ar\":\"<p>\\u062a\\u0645 \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0628\\u0631\\u0646\\u0627\\u0645\\u062c \\u0627\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0627\\u0644\\u0639\\u0627\\u0645 \\u0644\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0644\\u0644\\u0643\\u0634\\u0641 \\u0639\\u0646 \\u0627\\u0646\\u062a\\u0647\\u0627\\u0643\\u0627\\u062a \\u0627\\u0644\\u0642\\u0648\\u0627\\u0646\\u064a\\u0646 \\u0648\\u0645\\u0646\\u0639\\u0647\\u0627 \\u0645\\u0646 \\u0642\\u0628\\u0644 \\u0627\\u0644\\u0648\\u0643\\u0644\\u0627\\u0621 \\u0648\\u0627\\u0644\\u0645\\u0648\\u0638\\u0641\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0636\\u0628\\u0627\\u0637 \\u0648\\u0627\\u0644\\u0645\\u062f\\u064a\\u0631\\u064a\\u0646 \\u0641\\u064a \\u0639\\u0645\\u0644\\u064a\\u0627\\u062a\\u0646\\u0627. \\u0646\\u062d\\u0646 \\u0645\\u0644\\u062a\\u0632\\u0645\\u0648\\u0646 \\u0628\\u0627\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0644\\u0644\\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0627\\u062c\\u062a\\u0645\\u0627\\u0639\\u064a \\u0644\\u0644\\u0645\\u062c\\u062a\\u0645\\u0639 \\u0648\\u062d\\u0642\\u0648\\u0642 \\u0645\\u0648\\u0638\\u0641\\u064a\\u0646\\u0627. \\u0646\\u0636\\u0639 \\u062a\\u0631\\u0643\\u064a\\u0632\\u064b\\u0627 \\u0642\\u0648\\u064a\\u064b\\u0627 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0644\\u0645\\u062f\\u0648\\u0646\\u0629 \\u0627\\u0644\\u0645\\u0633\\u0624\\u0648\\u0644\\u064a\\u0627\\u062a \\u0644\\u062f\\u064a\\u0646\\u0627 \\u0648\\u0641\\u0642\\u064b\\u0627 \\u0644\\u0644\\u0645\\u062a\\u0637\\u0644\\u0628\\u0627\\u062a \\u0627\\u0644\\u0628\\u0634\\u0631\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0623\\u062e\\u0644\\u0627\\u0642\\u064a\\u0629 \\u0644\\u0636\\u0645\\u0627\\u0646 \\u0627\\u0644\\u062a\\u0632\\u0627\\u0645\\u0646\\u0627 \\u0628\\u0627\\u0644\\u0642\\u0648\\u0627\\u0646\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0644\\u0648\\u0627\\u0626\\u062d \\u0641\\u064a \\u0625\\u062c\\u0631\\u0627\\u0621 \\u0627\\u0644\\u0639\\u0645\\u0644\\u064a\\u0627\\u062a.<\\/p>\"}', '2020-05-06 09:34:28', '2020-05-06 09:34:28'),
(4, 1, 3, '{\"en\":\"Quality Management\",\"ar\":\"\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u062c\\u0648\\u062f\\u0629\"}', '{\"en\":\"<p>General International Group aims to enhance customer satisfaction through the effective application of the quality management system, including processes for improvement of the system and the assurance of conformity to customer and applicable statutory and regulatory requirements. We are committed to provide quality service and products and an innovative solution that will satisfy the requirements of our customers in conducting works related to Fire Protection &amp; Integrated ELV Systems, Water Treatment services and Facilities Management. We will continuously improve the effectiveness of our management systems through regular audits, continuous training, identifying the risk and re-evaluating our work flows.<\\/p>\",\"ar\":\"<p>\\u062a\\u0647\\u062f\\u0641 \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 General International \\u0625\\u0644\\u0649 \\u062a\\u0639\\u0632\\u064a\\u0632 \\u0631\\u0636\\u0627 \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u0644\\u062a\\u0637\\u0628\\u064a\\u0642 \\u0627\\u0644\\u0641\\u0639\\u0627\\u0644 \\u0644\\u0646\\u0638\\u0627\\u0645 \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u062c\\u0648\\u062f\\u0629 \\u060c \\u0628\\u0645\\u0627 \\u0641\\u064a \\u0630\\u0644\\u0643 \\u0639\\u0645\\u0644\\u064a\\u0627\\u062a \\u062a\\u062d\\u0633\\u064a\\u0646 \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645 \\u0648\\u0636\\u0645\\u0627\\u0646 \\u0627\\u0644\\u062a\\u0648\\u0627\\u0641\\u0642 \\u0645\\u0639 \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621 \\u0648\\u0627\\u0644\\u0645\\u062a\\u0637\\u0644\\u0628\\u0627\\u062a \\u0627\\u0644\\u0642\\u0627\\u0646\\u0648\\u0646\\u064a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0646\\u0638\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0645\\u0648\\u0644 \\u0628\\u0647\\u0627. \\u0646\\u062d\\u0646 \\u0645\\u0644\\u062a\\u0632\\u0645\\u0648\\u0646 \\u0628\\u062a\\u0642\\u062f\\u064a\\u0645 \\u062e\\u062f\\u0645\\u0627\\u062a \\u0648\\u0645\\u0646\\u062a\\u062c\\u0627\\u062a \\u0639\\u0627\\u0644\\u064a\\u0629 \\u0627\\u0644\\u062c\\u0648\\u062f\\u0629 \\u0648\\u062d\\u0644 \\u0645\\u0628\\u062a\\u0643\\u0631 \\u064a\\u0644\\u0628\\u064a \\u0645\\u062a\\u0637\\u0644\\u0628\\u0627\\u062a \\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627 \\u0641\\u064a \\u062a\\u0646\\u0641\\u064a\\u0630 \\u0627\\u0644\\u0623\\u0639\\u0645\\u0627\\u0644 \\u0627\\u0644\\u0645\\u062a\\u0639\\u0644\\u0642\\u0629 \\u0628\\u0627\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642 \\u0648\\u0623\\u0646\\u0638\\u0645\\u0629 ELV \\u0627\\u0644\\u0645\\u062a\\u0643\\u0627\\u0645\\u0644\\u0629 \\u0648\\u062e\\u062f\\u0645\\u0627\\u062a \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0648\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642. \\u0633\\u0646\\u0639\\u0645\\u0644 \\u0628\\u0627\\u0633\\u062a\\u0645\\u0631\\u0627\\u0631 \\u0639\\u0644\\u0649 \\u062a\\u062d\\u0633\\u064a\\u0646 \\u0641\\u0639\\u0627\\u0644\\u064a\\u0629 \\u0623\\u0646\\u0638\\u0645\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0625\\u062f\\u0627\\u0631\\u064a\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0639\\u0645\\u0644\\u064a\\u0627\\u062a \\u0627\\u0644\\u0645\\u0631\\u0627\\u062c\\u0639\\u0629 \\u0627\\u0644\\u0645\\u0646\\u062a\\u0638\\u0645\\u0629 \\u060c \\u0648\\u0627\\u0644\\u062a\\u062f\\u0631\\u064a\\u0628 \\u0627\\u0644\\u0645\\u0633\\u062a\\u0645\\u0631 \\u060c \\u0648\\u062a\\u062d\\u062f\\u064a\\u062f \\u0627\\u0644\\u0645\\u062e\\u0627\\u0637\\u0631 \\u0648\\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0642\\u064a\\u064a\\u0645 \\u062a\\u062f\\u0641\\u0642\\u0627\\u062a \\u0639\\u0645\\u0644\\u0646\\u0627.<\\/p>\"}', '2020-05-06 09:35:09', '2020-05-06 09:35:09'),
(5, 1, 3, '{\"en\":\"Health, Safety & Environmental Management\",\"ar\":\"\\u0627\\u0644\\u0635\\u062d\\u0629 \\u0648\\u0627\\u0644\\u0633\\u0644\\u0627\\u0645\\u0629 \\u0648\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0628\\u064a\\u0626\\u0629\"}', '{\"en\":\"<p>General International Group complies with all applicable laws, regulations and other regulatory requirements in providing services and resources necessary for operations and strictly identifying potential risks on the environment to ensure that all staff is implementing a paramount of safety while conducting their work at all time. Our goal is to protect our employees, the public, the environment and to comply with applicable laws and protect our reputation. Part of our general objectives is prevention of incidents or accidents that might result from abnormal operating conditions on the one hand and reduction of adverse effects that result from normal operating conditions on the other hand. In addition, we will comply, eliminate, minimize and control pollution in all aspects and ensure proper risk identification, monitoring and control are in place in order to eliminate, reduce or isolate associated risks on the environment for continuous safety of our employees and all our stakeholders.<\\/p>\",\"ar\":\"<p>\\u062a\\u0644\\u062a\\u0632\\u0645 General International Group \\u0628\\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u0642\\u0648\\u0627\\u0646\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0644\\u0648\\u0627\\u0626\\u062d \\u0627\\u0644\\u0645\\u0639\\u0645\\u0648\\u0644 \\u0628\\u0647\\u0627 \\u0648\\u0627\\u0644\\u0645\\u062a\\u0637\\u0644\\u0628\\u0627\\u062a \\u0627\\u0644\\u062a\\u0646\\u0638\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0623\\u062e\\u0631\\u0649 \\u0641\\u064a \\u062a\\u0642\\u062f\\u064a\\u0645 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\u0648\\u0627\\u0644\\u0645\\u0648\\u0627\\u0631\\u062f \\u0627\\u0644\\u0644\\u0627\\u0632\\u0645\\u0629 \\u0644\\u0644\\u0639\\u0645\\u0644\\u064a\\u0627\\u062a \\u0648\\u062a\\u062d\\u062f\\u064a\\u062f \\u0627\\u0644\\u0645\\u062e\\u0627\\u0637\\u0631 \\u0627\\u0644\\u0645\\u062d\\u062a\\u0645\\u0644\\u0629 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0628\\u064a\\u0626\\u0629 \\u0628\\u062f\\u0642\\u0629 \\u0644\\u0636\\u0645\\u0627\\u0646 \\u0623\\u0646 \\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u0645\\u0648\\u0638\\u0641\\u064a\\u0646 \\u064a\\u0642\\u0648\\u0645\\u0648\\u0646 \\u0628\\u062a\\u0646\\u0641\\u064a\\u0630 \\u0623\\u0642\\u0635\\u0649 \\u062f\\u0631\\u062c\\u0627\\u062a \\u0627\\u0644\\u0623\\u0645\\u0627\\u0646 \\u0623\\u062b\\u0646\\u0627\\u0621 \\u0625\\u062c\\u0631\\u0627\\u0621 \\u0639\\u0645\\u0644\\u0647\\u0645 \\u0641\\u064a \\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u0623\\u0648\\u0642\\u0627\\u062a. \\u0647\\u062f\\u0641\\u0646\\u0627 \\u0647\\u0648 \\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0648\\u0638\\u0641\\u064a\\u0646\\u0627 \\u0648\\u0627\\u0644\\u062c\\u0645\\u0647\\u0648\\u0631 \\u0648\\u0627\\u0644\\u0628\\u064a\\u0626\\u0629 \\u0648\\u0627\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0644\\u0644\\u0642\\u0648\\u0627\\u0646\\u064a\\u0646 \\u0627\\u0644\\u0645\\u0639\\u0645\\u0648\\u0644 \\u0628\\u0647\\u0627 \\u0648\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0633\\u0645\\u0639\\u062a\\u0646\\u0627. \\u062c\\u0632\\u0621 \\u0645\\u0646 \\u0623\\u0647\\u062f\\u0627\\u0641\\u0646\\u0627 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629 \\u0647\\u0648 \\u0645\\u0646\\u0639 \\u0627\\u0644\\u062d\\u0648\\u0627\\u062f\\u062b \\u0623\\u0648 \\u0627\\u0644\\u062d\\u0648\\u0627\\u062f\\u062b \\u0627\\u0644\\u062a\\u064a \\u0642\\u062f \\u062a\\u0646\\u062a\\u062c \\u0639\\u0646 \\u0638\\u0631\\u0648\\u0641 \\u062a\\u0634\\u063a\\u064a\\u0644 \\u063a\\u064a\\u0631 \\u0637\\u0628\\u064a\\u0639\\u064a\\u0629 \\u0645\\u0646 \\u062c\\u0647\\u0629 \\u0648\\u062a\\u0642\\u0644\\u064a\\u0644 \\u0627\\u0644\\u0622\\u062b\\u0627\\u0631 \\u0627\\u0644\\u0633\\u0644\\u0628\\u064a\\u0629 \\u0627\\u0644\\u062a\\u064a \\u062a\\u0646\\u062a\\u062c \\u0639\\u0646 \\u0638\\u0631\\u0648\\u0641 \\u0627\\u0644\\u062a\\u0634\\u063a\\u064a\\u0644 \\u0627\\u0644\\u0639\\u0627\\u062f\\u064a\\u0629 \\u0645\\u0646 \\u0646\\u0627\\u062d\\u064a\\u0629 \\u0623\\u062e\\u0631\\u0649. \\u0628\\u0627\\u0644\\u0625\\u0636\\u0627\\u0641\\u0629 \\u0625\\u0644\\u0649 \\u0630\\u0644\\u0643 \\u060c \\u0633\\u0646\\u0644\\u062a\\u0632\\u0645 \\u0628\\u0627\\u0644\\u0642\\u0636\\u0627\\u0621 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u062a\\u0644\\u0648\\u062b \\u0641\\u064a \\u062c\\u0645\\u064a\\u0639 \\u062c\\u0648\\u0627\\u0646\\u0628\\u0647 \\u060c \\u0648\\u0646\\u0632\\u064a\\u0644\\u0647 \\u060c \\u0648\\u0646\\u062e\\u0641\\u0641\\u0647 \\u060c \\u0648\\u0646\\u0636\\u0645\\u0646\\u0647 \\u060c \\u0648\\u0646\\u0636\\u0645\\u0646 \\u062a\\u062d\\u062f\\u064a\\u062f \\u0627\\u0644\\u0645\\u062e\\u0627\\u0637\\u0631 \\u0648\\u0627\\u0644\\u0645\\u0631\\u0627\\u0642\\u0628\\u0629 \\u0648\\u0627\\u0644\\u062a\\u062d\\u0643\\u0645 \\u0628\\u0634\\u0643\\u0644 \\u0635\\u062d\\u064a\\u062d \\u0645\\u0646 \\u0623\\u062c\\u0644 \\u0627\\u0644\\u0642\\u0636\\u0627\\u0621 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u062e\\u0627\\u0637\\u0631 \\u0627\\u0644\\u0645\\u0631\\u062a\\u0628\\u0637\\u0629 \\u0628\\u0627\\u0644\\u0628\\u064a\\u0626\\u0629 \\u0623\\u0648 \\u062a\\u0642\\u0644\\u064a\\u0644\\u0647\\u0627 \\u0623\\u0648 \\u0639\\u0632\\u0644\\u0647\\u0627 \\u0645\\u0646 \\u0623\\u062c\\u0644 \\u0627\\u0644\\u0633\\u0644\\u0627\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0633\\u062a\\u0645\\u0631\\u0629 \\u0644\\u0645\\u0648\\u0638\\u0641\\u064a\\u0646\\u0627 \\u0648\\u062c\\u0645\\u064a\\u0639 \\u0623\\u0635\\u062d\\u0627\\u0628 \\u0627\\u0644\\u0645\\u0635\\u0644\\u062d\\u0629.<\\/p>\"}', '2020-05-06 09:35:54', '2020-05-06 09:35:54'),
(6, 1, 3, '{\"en\":\"Team of Engineers\",\"ar\":\"\\u0641\\u0631\\u064a\\u0642 \\u0627\\u0644\\u0645\\u0647\\u0646\\u062f\\u0633\\u064a\\u0646\"}', '{\"en\":\"<p>With respect to our employees, we promote, empower our staff in the decision making processes, and encourage continuous learning and creativity. Imagine if a team of 300 experts were to put together to work for 8 hours a day, 5 days a week, the combined workforce man hours in 1 year shall translate into 65 years of lifespan of a normal human being. 300+ industry experts from engineering, technical, support and commercial background.<\\/p>\",\"ar\":\"<p>\\u0641\\u064a\\u0645\\u0627 \\u064a\\u062a\\u0639\\u0644\\u0642 \\u0628\\u0645\\u0648\\u0638\\u0641\\u064a\\u0646\\u0627 \\u060c \\u0641\\u0625\\u0646\\u0646\\u0627 \\u0646\\u0634\\u062c\\u0639 \\u0648\\u062a\\u0645\\u0643\\u064a\\u0646 \\u0645\\u0648\\u0638\\u0641\\u064a\\u0646\\u0627 \\u0641\\u064a \\u0639\\u0645\\u0644\\u064a\\u0627\\u062a \\u0635\\u0646\\u0639 \\u0627\\u0644\\u0642\\u0631\\u0627\\u0631 \\u060c \\u0648\\u0646\\u0634\\u062c\\u0639 \\u0627\\u0644\\u062a\\u0639\\u0644\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u0645\\u0631 \\u0648\\u0627\\u0644\\u0625\\u0628\\u062f\\u0627\\u0639. \\u062a\\u062e\\u064a\\u0644 \\u0644\\u0648 \\u0623\\u0646 \\u0641\\u0631\\u064a\\u0642\\u064b\\u0627 \\u0645\\u0643\\u0648\\u0646\\u064b\\u0627 \\u0645\\u0646 300 \\u062e\\u0628\\u064a\\u0631\\u064b\\u0627 \\u0633\\u064a\\u0639\\u0645\\u0644\\u0648\\u0646 \\u0645\\u0639\\u064b\\u0627 \\u0644\\u0645\\u062f\\u0629 8 \\u0633\\u0627\\u0639\\u0627\\u062a \\u0641\\u064a \\u0627\\u0644\\u064a\\u0648\\u0645 \\u060c 5 \\u0623\\u064a\\u0627\\u0645 \\u0641\\u064a \\u0627\\u0644\\u0623\\u0633\\u0628\\u0648\\u0639 \\u060c \\u0641\\u0625\\u0646 \\u0633\\u0627\\u0639\\u0627\\u062a \\u0627\\u0644\\u0642\\u0648\\u0649 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0644\\u0629 \\u0645\\u062c\\u062a\\u0645\\u0639\\u0629 \\u0641\\u064a \\u0639\\u0627\\u0645 \\u0648\\u0627\\u062d\\u062f \\u0633\\u062a\\u062a\\u0631\\u062c\\u0645 \\u0625\\u0644\\u0649 65 \\u0639\\u0627\\u0645\\u064b\\u0627 \\u0645\\u0646 \\u0639\\u0645\\u0631 \\u0627\\u0644\\u0625\\u0646\\u0633\\u0627\\u0646 \\u0627\\u0644\\u0639\\u0627\\u062f\\u064a. 300+ \\u062e\\u0628\\u0631\\u0627\\u0621 \\u0627\\u0644\\u0635\\u0646\\u0627\\u0639\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0648\\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0648\\u0627\\u0644\\u062f\\u0639\\u0645 \\u0648\\u0627\\u0644\\u062e\\u0644\\u0641\\u064a\\u0629 \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a\\u0629.<\\/p>\"}', '2020-05-06 09:36:35', '2020-05-06 09:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `about_leadership_medias`
--

CREATE TABLE `about_leadership_medias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `story_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_leadership_medias`
--

INSERT INTO `about_leadership_medias` (`id`, `is_publish`, `story_id`, `title`, `media`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '{\"en\":\"leadership\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '1589777982-1588771685-ab-1.jpg', '2020-05-10 03:48:30', '2020-05-18 00:59:42'),
(2, 1, 3, '{\"en\":\"leadership\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '1589777990-1588771719-ab-2.jpg', '2020-05-10 03:48:44', '2020-05-18 00:59:50'),
(3, 1, 3, '{\"en\":\"leadership\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '1589777998-1588771736-ab-3.jpg', '2020-05-10 03:48:59', '2020-05-18 00:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `about_policies`
--

CREATE TABLE `about_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `story_id` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_policies`
--

INSERT INTO `about_policies` (`id`, `is_publish`, `story_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '{\"en\":\"<p>General International Group holds more than 30 years of expertise and exposure with strong presence in the UAE delivering engineering solutions in specialized services to 200 + customers across verticals. Our team can work closely with you to support from the Design stage of a project. We have the capability to Supply, Design, Install, Commission and Hand over the project to our customers on time and on budget. Furthermore, our strength in the Facilities Management Services confirms our ability to properly and effectively maintain your facility.<\\/p>\",\"ar\":\"<p>\\u062a\\u0645\\u062a\\u0644\\u0643 \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u062c\\u0646\\u0631\\u0627\\u0644 \\u0625\\u0646\\u062a\\u0631\\u0646\\u0627\\u0634\\u064a\\u0648\\u0646\\u0627\\u0644 \\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 30 \\u0639\\u0627\\u0645\\u064b\\u0627 \\u0645\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0639\\u0631\\u0636 \\u0645\\u0639 \\u062d\\u0636\\u0648\\u0631 \\u0642\\u0648\\u064a \\u0641\\u064a \\u0627\\u0644\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u062d\\u062f\\u0629 \\u060c \\u062d\\u064a\\u062b \\u062a\\u0642\\u062f\\u0645 \\u062d\\u0644\\u0648\\u0644\\u0627\\u064b \\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0641\\u064a \\u062e\\u062f\\u0645\\u0627\\u062a \\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0644\\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 200 \\u0639\\u0645\\u064a\\u0644 \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0642\\u0637\\u0627\\u0639\\u0627\\u062a. \\u064a\\u0645\\u0643\\u0646 \\u0644\\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0639\\u0646 \\u0643\\u062b\\u0628 \\u0645\\u0639\\u0643 \\u0644\\u0644\\u062f\\u0639\\u0645 \\u0645\\u0646 \\u0645\\u0631\\u062d\\u0644\\u0629 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0644\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639. \\u0644\\u062f\\u064a\\u0646\\u0627 \\u0627\\u0644\\u0642\\u062f\\u0631\\u0629 \\u0639\\u0644\\u0649 \\u062a\\u0648\\u0631\\u064a\\u062f \\u0648\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0648\\u062a\\u0631\\u0643\\u064a\\u0628 \\u0648\\u062a\\u0634\\u063a\\u064a\\u0644 \\u0648\\u062a\\u0633\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639 \\u0644\\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627 \\u0641\\u064a \\u0627\\u0644\\u0648\\u0642\\u062a \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f \\u0648\\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u064a\\u0632\\u0627\\u0646\\u064a\\u0629. \\u0639\\u0644\\u0627\\u0648\\u0629 \\u0639\\u0644\\u0649 \\u0630\\u0644\\u0643 \\u060c \\u062a\\u0624\\u0643\\u062f \\u0642\\u0648\\u062a\\u0646\\u0627 \\u0641\\u064a \\u062e\\u062f\\u0645\\u0627\\u062a \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0642\\u062f\\u0631\\u062a\\u0646\\u0627 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u062d\\u0641\\u0627\\u0638 \\u0639\\u0644\\u0649 \\u0645\\u0646\\u0634\\u0623\\u062a\\u0643 \\u0628\\u0634\\u0643\\u0644 \\u0635\\u062d\\u064a\\u062d \\u0648\\u0641\\u0639\\u0627\\u0644.<\\/p>\"}', '2020-05-06 13:54:58', '2020-05-06 13:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `about_story_cats`
--

CREATE TABLE `about_story_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `story_cat` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_story_cats`
--

INSERT INTO `about_story_cats` (`id`, `is_publish`, `title`, `story_cat`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"OUR STORY\",\"ar\":\"\\u0642\\u0635\\u062a\\u0646\\u0627\"}', '{\"en\":\"ABOUT THE COMPANY\",\"ar\":\"\\u0639\\u0646 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629\"}', '2020-05-06 01:46:44', '2020-05-06 01:48:50'),
(2, 1, '{\"en\":\"OUR STORY\",\"ar\":\"\\u0642\\u0635\\u062a\\u0646\\u0627\"}', '{\"en\":\"DIVERSITY\",\"ar\":\"\\u062a\\u0646\\u0648\\u0639\"}', '2020-05-06 01:49:32', '2020-05-06 01:49:32'),
(3, 1, '{\"en\":\"OUR STORY\",\"ar\":\"\\u0642\\u0635\\u062a\\u0646\\u0627\"}', '{\"en\":\"LEADERSHIP\",\"ar\":\"\\u0627\\u0644\\u0642\\u064a\\u0627\\u062f\\u0629\"}', '2020-05-06 01:50:06', '2020-05-06 01:51:10'),
(4, 1, '{\"en\":\"OUR STORY\",\"ar\":\"\\u0642\\u0635\\u062a\\u0646\\u0627\"}', '{\"en\":\"OUR TIMELINE\",\"ar\":\"\\u062e\\u0637\\u0646\\u0627 \\u0627\\u0644\\u0632\\u0645\\u0646\\u064a\"}', '2020-05-06 01:50:54', '2020-05-06 01:50:54'),
(5, 1, '{\"en\":\"OUR STORY\",\"ar\":\"\\u0642\\u0635\\u062a\\u0646\\u0627\"}', '{\"en\":\"OUR POLICIES\",\"ar\":\"\\u0633\\u064a\\u0627\\u0633\\u0627\\u062a\\u0646\\u0627\"}', '2020-05-06 01:51:43', '2020-05-06 01:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `about_timelines`
--

CREATE TABLE `about_timelines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `year_id` int(10) UNSIGNED DEFAULT NULL,
  `story_id` int(10) UNSIGNED DEFAULT NULL,
  `date_id` int(10) UNSIGNED DEFAULT NULL,
  `media` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_timelines`
--

INSERT INTO `about_timelines` (`id`, `is_publish`, `year_id`, `story_id`, `date_id`, `media`, `title`, `description`, `created_at`, `updated_at`) VALUES
(9, 1, 18, 4, 18, '1589778614-1588794627-ab-1.jpg', '{\"en\":\"OUR STORY\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '{\"en\":\"<p>General International Group holds more than 30 years of expertise and exposure with strong presence in the UAE delivering engineering solutions in specialized services to 200 + customers across verticals. Our team can work closely with you to support from the Design stage of a project. We have the capability to Supply, Design, Install, Commission and Hand over the project to our customers on time and on budget. Furthermore, our strength in the Facilities Management Services confirms our ability to properly and effectively maintain your facility.<\\/p>\",\"ar\":\"<p>\\u062a\\u0645\\u062a\\u0644\\u0643 \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u062c\\u0646\\u0631\\u0627\\u0644 \\u0625\\u0646\\u062a\\u0631\\u0646\\u0627\\u0634\\u064a\\u0648\\u0646\\u0627\\u0644 \\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 30 \\u0639\\u0627\\u0645\\u064b\\u0627 \\u0645\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0639\\u0631\\u0636 \\u0645\\u0639 \\u062d\\u0636\\u0648\\u0631 \\u0642\\u0648\\u064a \\u0641\\u064a \\u0627\\u0644\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u062d\\u062f\\u0629 \\u060c \\u062d\\u064a\\u062b \\u062a\\u0642\\u062f\\u0645 \\u062d\\u0644\\u0648\\u0644\\u0627\\u064b \\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0641\\u064a \\u062e\\u062f\\u0645\\u0627\\u062a \\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0644\\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 200 \\u0639\\u0645\\u064a\\u0644 \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0642\\u0637\\u0627\\u0639\\u0627\\u062a. \\u064a\\u0645\\u0643\\u0646 \\u0644\\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0639\\u0646 \\u0643\\u062b\\u0628 \\u0645\\u0639\\u0643 \\u0644\\u0644\\u062f\\u0639\\u0645 \\u0645\\u0646 \\u0645\\u0631\\u062d\\u0644\\u0629 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0644\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639. \\u0644\\u062f\\u064a\\u0646\\u0627 \\u0627\\u0644\\u0642\\u062f\\u0631\\u0629 \\u0639\\u0644\\u0649 \\u062a\\u0648\\u0631\\u064a\\u062f \\u0648\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0648\\u062a\\u0631\\u0643\\u064a\\u0628 \\u0648\\u062a\\u0634\\u063a\\u064a\\u0644 \\u0648\\u062a\\u0633\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639 \\u0644\\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627 \\u0641\\u064a \\u0627\\u0644\\u0648\\u0642\\u062a \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f \\u0648\\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u064a\\u0632\\u0627\\u0646\\u064a\\u0629. \\u0639\\u0644\\u0627\\u0648\\u0629 \\u0639\\u0644\\u0649 \\u0630\\u0644\\u0643 \\u060c \\u062a\\u0624\\u0643\\u062f \\u0642\\u0648\\u062a\\u0646\\u0627 \\u0641\\u064a \\u062e\\u062f\\u0645\\u0627\\u062a \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0642\\u062f\\u0631\\u062a\\u0646\\u0627 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u062d\\u0641\\u0627\\u0638 \\u0639\\u0644\\u0649 \\u0645\\u0646\\u0634\\u0623\\u062a\\u0643 \\u0628\\u0634\\u0643\\u0644 \\u0635\\u062d\\u064a\\u062d \\u0648\\u0641\\u0639\\u0627\\u0644.<\\/p>\"}', '2020-05-06 15:50:27', '2020-05-18 01:10:14'),
(10, 1, 19, 4, 19, '1589778674-1588794657-ab-2.jpg', '{\"en\":\"OUR STORY\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '{\"en\":\"<p>General International Group holds more than 30 years of expertise and exposure with strong presence in the UAE delivering engineering solutions in specialized services to 200 + customers across verticals. Our team can work closely with you to support from the Design stage of a project. We have the capability to Supply, Design, Install, Commission and Hand over the project to our customers on time and on budget. Furthermore, our strength in the Facilities Management Services confirms our ability to properly and effectively maintain your facility.<\\/p>\",\"ar\":\"<p>\\u062a\\u0645\\u062a\\u0644\\u0643 \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u062c\\u0646\\u0631\\u0627\\u0644 \\u0625\\u0646\\u062a\\u0631\\u0646\\u0627\\u0634\\u064a\\u0648\\u0646\\u0627\\u0644 \\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 30 \\u0639\\u0627\\u0645\\u064b\\u0627 \\u0645\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0639\\u0631\\u0636 \\u0645\\u0639 \\u062d\\u0636\\u0648\\u0631 \\u0642\\u0648\\u064a \\u0641\\u064a \\u0627\\u0644\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u062d\\u062f\\u0629 \\u060c \\u062d\\u064a\\u062b \\u062a\\u0642\\u062f\\u0645 \\u062d\\u0644\\u0648\\u0644\\u0627\\u064b \\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0641\\u064a \\u062e\\u062f\\u0645\\u0627\\u062a \\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0644\\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 200 \\u0639\\u0645\\u064a\\u0644 \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0642\\u0637\\u0627\\u0639\\u0627\\u062a. \\u064a\\u0645\\u0643\\u0646 \\u0644\\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0639\\u0646 \\u0643\\u062b\\u0628 \\u0645\\u0639\\u0643 \\u0644\\u0644\\u062f\\u0639\\u0645 \\u0645\\u0646 \\u0645\\u0631\\u062d\\u0644\\u0629 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0644\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639. \\u0644\\u062f\\u064a\\u0646\\u0627 \\u0627\\u0644\\u0642\\u062f\\u0631\\u0629 \\u0639\\u0644\\u0649 \\u062a\\u0648\\u0631\\u064a\\u062f \\u0648\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0648\\u062a\\u0631\\u0643\\u064a\\u0628 \\u0648\\u062a\\u0634\\u063a\\u064a\\u0644 \\u0648\\u062a\\u0633\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639 \\u0644\\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627 \\u0641\\u064a \\u0627\\u0644\\u0648\\u0642\\u062a \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f \\u0648\\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u064a\\u0632\\u0627\\u0646\\u064a\\u0629. \\u0639\\u0644\\u0627\\u0648\\u0629 \\u0639\\u0644\\u0649 \\u0630\\u0644\\u0643 \\u060c \\u062a\\u0624\\u0643\\u062f \\u0642\\u0648\\u062a\\u0646\\u0627 \\u0641\\u064a \\u062e\\u062f\\u0645\\u0627\\u062a \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0642\\u062f\\u0631\\u062a\\u0646\\u0627 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u062d\\u0641\\u0627\\u0638 \\u0639\\u0644\\u0649 \\u0645\\u0646\\u0634\\u0623\\u062a\\u0643 \\u0628\\u0634\\u0643\\u0644 \\u0635\\u062d\\u064a\\u062d \\u0648\\u0641\\u0639\\u0627\\u0644.<\\/p>\"}', '2020-05-06 15:50:57', '2020-05-18 01:11:14'),
(11, 1, 20, 4, 20, '1589778703-1588794681-ab-3.jpg', '{\"en\":\"OUR STORY\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '{\"en\":\"<p>General International Group holds more than 30 years of expertise and exposure with strong presence in the UAE delivering engineering solutions in specialized services to 200 + customers across verticals. Our team can work closely with you to support from the Design stage of a project. We have the capability to Supply, Design, Install, Commission and Hand over the project to our customers on time and on budget. Furthermore, our strength in the Facilities Management Services confirms our ability to properly and effectively maintain your facility.<\\/p>\",\"ar\":\"<p>\\u062a\\u0645\\u062a\\u0644\\u0643 \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u062c\\u0646\\u0631\\u0627\\u0644 \\u0625\\u0646\\u062a\\u0631\\u0646\\u0627\\u0634\\u064a\\u0648\\u0646\\u0627\\u0644 \\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 30 \\u0639\\u0627\\u0645\\u064b\\u0627 \\u0645\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0639\\u0631\\u0636 \\u0645\\u0639 \\u062d\\u0636\\u0648\\u0631 \\u0642\\u0648\\u064a \\u0641\\u064a \\u0627\\u0644\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u062d\\u062f\\u0629 \\u060c \\u062d\\u064a\\u062b \\u062a\\u0642\\u062f\\u0645 \\u062d\\u0644\\u0648\\u0644\\u0627\\u064b \\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0641\\u064a \\u062e\\u062f\\u0645\\u0627\\u062a \\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0644\\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 200 \\u0639\\u0645\\u064a\\u0644 \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0642\\u0637\\u0627\\u0639\\u0627\\u062a. \\u064a\\u0645\\u0643\\u0646 \\u0644\\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0639\\u0646 \\u0643\\u062b\\u0628 \\u0645\\u0639\\u0643 \\u0644\\u0644\\u062f\\u0639\\u0645 \\u0645\\u0646 \\u0645\\u0631\\u062d\\u0644\\u0629 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0644\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639. \\u0644\\u062f\\u064a\\u0646\\u0627 \\u0627\\u0644\\u0642\\u062f\\u0631\\u0629 \\u0639\\u0644\\u0649 \\u062a\\u0648\\u0631\\u064a\\u062f \\u0648\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0648\\u062a\\u0631\\u0643\\u064a\\u0628 \\u0648\\u062a\\u0634\\u063a\\u064a\\u0644 \\u0648\\u062a\\u0633\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639 \\u0644\\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627 \\u0641\\u064a \\u0627\\u0644\\u0648\\u0642\\u062a \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f \\u0648\\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u064a\\u0632\\u0627\\u0646\\u064a\\u0629. \\u0639\\u0644\\u0627\\u0648\\u0629 \\u0639\\u0644\\u0649 \\u0630\\u0644\\u0643 \\u060c \\u062a\\u0624\\u0643\\u062f \\u0642\\u0648\\u062a\\u0646\\u0627 \\u0641\\u064a \\u062e\\u062f\\u0645\\u0627\\u062a \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0642\\u062f\\u0631\\u062a\\u0646\\u0627 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u062d\\u0641\\u0627\\u0638 \\u0639\\u0644\\u0649 \\u0645\\u0646\\u0634\\u0623\\u062a\\u0643 \\u0628\\u0634\\u0643\\u0644 \\u0635\\u062d\\u064a\\u062d \\u0648\\u0641\\u0639\\u0627\\u0644.<\\/p>\"}', '2020-05-06 15:51:21', '2020-05-18 01:11:43'),
(12, 1, 21, 4, 21, '1589778714-1588794723-electrical.jpg', '{\"en\":\"OUR STORY\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '{\"en\":\"<p>General International Group holds more than 30 years of expertise and exposure with strong presence in the UAE delivering engineering solutions in specialized services to 200 + customers across verticals. Our team can work closely with you to support from the Design stage of a project. We have the capability to Supply, Design, Install, Commission and Hand over the project to our customers on time and on budget. Furthermore, our strength in the Facilities Management Services confirms our ability to properly and effectively maintain your facility.<\\/p>\",\"ar\":\"<p>\\u062a\\u0645\\u062a\\u0644\\u0643 \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u062c\\u0646\\u0631\\u0627\\u0644 \\u0625\\u0646\\u062a\\u0631\\u0646\\u0627\\u0634\\u064a\\u0648\\u0646\\u0627\\u0644 \\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 30 \\u0639\\u0627\\u0645\\u064b\\u0627 \\u0645\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0639\\u0631\\u0636 \\u0645\\u0639 \\u062d\\u0636\\u0648\\u0631 \\u0642\\u0648\\u064a \\u0641\\u064a \\u0627\\u0644\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u062d\\u062f\\u0629 \\u060c \\u062d\\u064a\\u062b \\u062a\\u0642\\u062f\\u0645 \\u062d\\u0644\\u0648\\u0644\\u0627\\u064b \\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0641\\u064a \\u062e\\u062f\\u0645\\u0627\\u062a \\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0644\\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 200 \\u0639\\u0645\\u064a\\u0644 \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0642\\u0637\\u0627\\u0639\\u0627\\u062a. \\u064a\\u0645\\u0643\\u0646 \\u0644\\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0639\\u0646 \\u0643\\u062b\\u0628 \\u0645\\u0639\\u0643 \\u0644\\u0644\\u062f\\u0639\\u0645 \\u0645\\u0646 \\u0645\\u0631\\u062d\\u0644\\u0629 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0644\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639. \\u0644\\u062f\\u064a\\u0646\\u0627 \\u0627\\u0644\\u0642\\u062f\\u0631\\u0629 \\u0639\\u0644\\u0649 \\u062a\\u0648\\u0631\\u064a\\u062f \\u0648\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0648\\u062a\\u0631\\u0643\\u064a\\u0628 \\u0648\\u062a\\u0634\\u063a\\u064a\\u0644 \\u0648\\u062a\\u0633\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639 \\u0644\\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627 \\u0641\\u064a \\u0627\\u0644\\u0648\\u0642\\u062a \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f \\u0648\\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u064a\\u0632\\u0627\\u0646\\u064a\\u0629. \\u0639\\u0644\\u0627\\u0648\\u0629 \\u0639\\u0644\\u0649 \\u0630\\u0644\\u0643 \\u060c \\u062a\\u0624\\u0643\\u062f \\u0642\\u0648\\u062a\\u0646\\u0627 \\u0641\\u064a \\u062e\\u062f\\u0645\\u0627\\u062a \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0642\\u062f\\u0631\\u062a\\u0646\\u0627 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u062d\\u0641\\u0627\\u0638 \\u0639\\u0644\\u0649 \\u0645\\u0646\\u0634\\u0623\\u062a\\u0643 \\u0628\\u0634\\u0643\\u0644 \\u0635\\u062d\\u064a\\u062d \\u0648\\u0641\\u0639\\u0627\\u0644.<\\/p>\"}', '2020-05-06 15:52:03', '2020-05-18 01:11:54'),
(15, 1, 22, 4, 22, '1589778724-1588794753-soft.jpg', '{\"en\":\"OUR STORY\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '{\"en\":\"<p>General International Group holds more than 30 years of expertise and exposure with strong presence in the UAE delivering engineering solutions in specialized services to 200 + customers across verticals. Our team can work closely with you to support from the Design stage of a project. We have the capability to Supply, Design, Install, Commission and Hand over the project to our customers on time and on budget. Furthermore, our strength in the Facilities Management Services confirms our ability to properly and effectively maintain your facility.<\\/p>\",\"ar\":\"<p>\\u062a\\u0645\\u062a\\u0644\\u0643 \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u062c\\u0646\\u0631\\u0627\\u0644 \\u0625\\u0646\\u062a\\u0631\\u0646\\u0627\\u0634\\u064a\\u0648\\u0646\\u0627\\u0644 \\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 30 \\u0639\\u0627\\u0645\\u064b\\u0627 \\u0645\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0639\\u0631\\u0636 \\u0645\\u0639 \\u062d\\u0636\\u0648\\u0631 \\u0642\\u0648\\u064a \\u0641\\u064a \\u0627\\u0644\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u062d\\u062f\\u0629 \\u060c \\u062d\\u064a\\u062b \\u062a\\u0642\\u062f\\u0645 \\u062d\\u0644\\u0648\\u0644\\u0627\\u064b \\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0641\\u064a \\u062e\\u062f\\u0645\\u0627\\u062a \\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0644\\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 200 \\u0639\\u0645\\u064a\\u0644 \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0642\\u0637\\u0627\\u0639\\u0627\\u062a. \\u064a\\u0645\\u0643\\u0646 \\u0644\\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0639\\u0646 \\u0643\\u062b\\u0628 \\u0645\\u0639\\u0643 \\u0644\\u0644\\u062f\\u0639\\u0645 \\u0645\\u0646 \\u0645\\u0631\\u062d\\u0644\\u0629 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0644\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639. \\u0644\\u062f\\u064a\\u0646\\u0627 \\u0627\\u0644\\u0642\\u062f\\u0631\\u0629 \\u0639\\u0644\\u0649 \\u062a\\u0648\\u0631\\u064a\\u062f \\u0648\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0648\\u062a\\u0631\\u0643\\u064a\\u0628 \\u0648\\u062a\\u0634\\u063a\\u064a\\u0644 \\u0648\\u062a\\u0633\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639 \\u0644\\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627 \\u0641\\u064a \\u0627\\u0644\\u0648\\u0642\\u062a \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f \\u0648\\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u064a\\u0632\\u0627\\u0646\\u064a\\u0629. \\u0639\\u0644\\u0627\\u0648\\u0629 \\u0639\\u0644\\u0649 \\u0630\\u0644\\u0643 \\u060c \\u062a\\u0624\\u0643\\u062f \\u0642\\u0648\\u062a\\u0646\\u0627 \\u0641\\u064a \\u062e\\u062f\\u0645\\u0627\\u062a \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0642\\u062f\\u0631\\u062a\\u0646\\u0627 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u062d\\u0641\\u0627\\u0638 \\u0639\\u0644\\u0649 \\u0645\\u0646\\u0634\\u0623\\u062a\\u0643 \\u0628\\u0634\\u0643\\u0644 \\u0635\\u062d\\u064a\\u062d \\u0648\\u0641\\u0639\\u0627\\u0644.<\\/p>\"}', '2020-05-06 15:55:36', '2020-05-18 02:38:32'),
(16, 1, 23, 4, 23, '1589778739-1588794789-plumb.jpg', '{\"en\":\"OUR STORY\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '{\"en\":\"<p>General International Group holds more than 30 years of expertise and exposure with strong presence in the UAE delivering engineering solutions in specialized services to 200 + customers across verticals. Our team can work closely with you to support from the Design stage of a project. We have the capability to Supply, Design, Install, Commission and Hand over the project to our customers on time and on budget. Furthermore, our strength in the Facilities Management Services confirms our ability to properly and effectively maintain your facility.<\\/p>\",\"ar\":\"<p>\\u062a\\u0645\\u062a\\u0644\\u0643 \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u062c\\u0646\\u0631\\u0627\\u0644 \\u0625\\u0646\\u062a\\u0631\\u0646\\u0627\\u0634\\u064a\\u0648\\u0646\\u0627\\u0644 \\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 30 \\u0639\\u0627\\u0645\\u064b\\u0627 \\u0645\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0639\\u0631\\u0636 \\u0645\\u0639 \\u062d\\u0636\\u0648\\u0631 \\u0642\\u0648\\u064a \\u0641\\u064a \\u0627\\u0644\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u062d\\u062f\\u0629 \\u060c \\u062d\\u064a\\u062b \\u062a\\u0642\\u062f\\u0645 \\u062d\\u0644\\u0648\\u0644\\u0627\\u064b \\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0641\\u064a \\u062e\\u062f\\u0645\\u0627\\u062a \\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0644\\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 200 \\u0639\\u0645\\u064a\\u0644 \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0642\\u0637\\u0627\\u0639\\u0627\\u062a. \\u064a\\u0645\\u0643\\u0646 \\u0644\\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0639\\u0646 \\u0643\\u062b\\u0628 \\u0645\\u0639\\u0643 \\u0644\\u0644\\u062f\\u0639\\u0645 \\u0645\\u0646 \\u0645\\u0631\\u062d\\u0644\\u0629 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0644\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639. \\u0644\\u062f\\u064a\\u0646\\u0627 \\u0627\\u0644\\u0642\\u062f\\u0631\\u0629 \\u0639\\u0644\\u0649 \\u062a\\u0648\\u0631\\u064a\\u062f \\u0648\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0648\\u062a\\u0631\\u0643\\u064a\\u0628 \\u0648\\u062a\\u0634\\u063a\\u064a\\u0644 \\u0648\\u062a\\u0633\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639 \\u0644\\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627 \\u0641\\u064a \\u0627\\u0644\\u0648\\u0642\\u062a \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f \\u0648\\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u064a\\u0632\\u0627\\u0646\\u064a\\u0629. \\u0639\\u0644\\u0627\\u0648\\u0629 \\u0639\\u0644\\u0649 \\u0630\\u0644\\u0643 \\u060c \\u062a\\u0624\\u0643\\u062f \\u0642\\u0648\\u062a\\u0646\\u0627 \\u0641\\u064a \\u062e\\u062f\\u0645\\u0627\\u062a \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0642\\u062f\\u0631\\u062a\\u0646\\u0627 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u062d\\u0641\\u0627\\u0638 \\u0639\\u0644\\u0649 \\u0645\\u0646\\u0634\\u0623\\u062a\\u0643 \\u0628\\u0634\\u0643\\u0644 \\u0635\\u062d\\u064a\\u062d \\u0648\\u0641\\u0639\\u0627\\u0644.<\\/p>\"}', '2020-05-06 15:56:06', '2020-05-18 02:38:44'),
(18, 1, 24, 4, 24, '1589778748-1588795872-hvac.jpg', '{\"en\":\"OUR STORY\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '{\"en\":\"<p>General International Group holds more than 30 years of expertise and exposure with strong presence in the UAE delivering engineering solutions in specialized services to 200 + customers across verticals. Our team can work closely with you to support from the Design stage of a project. We have the capability to Supply, Design, Install, Commission and Hand over the project to our customers on time and on budget. Furthermore, our strength in the Facilities Management Services confirms our ability to properly and effectively maintain your facility.<\\/p>\",\"ar\":\"<p>\\u062a\\u0645\\u062a\\u0644\\u0643 \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u062c\\u0646\\u0631\\u0627\\u0644 \\u0625\\u0646\\u062a\\u0631\\u0646\\u0627\\u0634\\u064a\\u0648\\u0646\\u0627\\u0644 \\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 30 \\u0639\\u0627\\u0645\\u064b\\u0627 \\u0645\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0639\\u0631\\u0636 \\u0645\\u0639 \\u062d\\u0636\\u0648\\u0631 \\u0642\\u0648\\u064a \\u0641\\u064a \\u0627\\u0644\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u062d\\u062f\\u0629 \\u060c \\u062d\\u064a\\u062b \\u062a\\u0642\\u062f\\u0645 \\u062d\\u0644\\u0648\\u0644\\u0627\\u064b \\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0641\\u064a \\u062e\\u062f\\u0645\\u0627\\u062a \\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0644\\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 200 \\u0639\\u0645\\u064a\\u0644 \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0642\\u0637\\u0627\\u0639\\u0627\\u062a. \\u064a\\u0645\\u0643\\u0646 \\u0644\\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0639\\u0646 \\u0643\\u062b\\u0628 \\u0645\\u0639\\u0643 \\u0644\\u0644\\u062f\\u0639\\u0645 \\u0645\\u0646 \\u0645\\u0631\\u062d\\u0644\\u0629 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0644\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639. \\u0644\\u062f\\u064a\\u0646\\u0627 \\u0627\\u0644\\u0642\\u062f\\u0631\\u0629 \\u0639\\u0644\\u0649 \\u062a\\u0648\\u0631\\u064a\\u062f \\u0648\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0648\\u062a\\u0631\\u0643\\u064a\\u0628 \\u0648\\u062a\\u0634\\u063a\\u064a\\u0644 \\u0648\\u062a\\u0633\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639 \\u0644\\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627 \\u0641\\u064a \\u0627\\u0644\\u0648\\u0642\\u062a \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f \\u0648\\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u064a\\u0632\\u0627\\u0646\\u064a\\u0629. \\u0639\\u0644\\u0627\\u0648\\u0629 \\u0639\\u0644\\u0649 \\u0630\\u0644\\u0643 \\u060c \\u062a\\u0624\\u0643\\u062f \\u0642\\u0648\\u062a\\u0646\\u0627 \\u0641\\u064a \\u062e\\u062f\\u0645\\u0627\\u062a \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0642\\u062f\\u0631\\u062a\\u0646\\u0627 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u062d\\u0641\\u0627\\u0638 \\u0639\\u0644\\u0649 \\u0645\\u0646\\u0634\\u0623\\u062a\\u0643 \\u0628\\u0634\\u0643\\u0644 \\u0635\\u062d\\u064a\\u062d \\u0648\\u0641\\u0639\\u0627\\u0644.<\\/p>\"}', '2020-05-06 16:11:12', '2020-05-18 02:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `about_timeline_cats`
--

CREATE TABLE `about_timeline_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `story_id` int(10) UNSIGNED DEFAULT NULL,
  `year` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_timeline_cats`
--

INSERT INTO `about_timeline_cats` (`id`, `is_publish`, `story_id`, `year`, `date`, `created_at`, `updated_at`) VALUES
(18, 1, 4, '{\"en\":\"Present\",\"ar\":\"\\u062d\\u0627\\u0636\\u0631\"}', '01/05/2020', '2020-05-06 15:43:16', '2020-05-06 15:43:16'),
(19, 1, 4, '{\"en\":\"2019\",\"ar\":\"2019\"}', '01/05/2019', '2020-05-06 15:43:29', '2020-05-06 15:43:29'),
(20, 1, 4, '{\"en\":\"2018\",\"ar\":\"2018\"}', '01/05/2018', '2020-05-06 15:43:43', '2020-05-06 15:43:43'),
(21, 1, 4, '{\"en\":\"2017\",\"ar\":\"2017\"}', '01/05/2017', '2020-05-06 15:43:58', '2020-05-06 15:43:58'),
(22, 1, 4, '{\"en\":\"2016\",\"ar\":\"2016\"}', '01/05/2016', '2020-05-06 15:44:14', '2020-05-06 15:44:14'),
(23, 1, 4, '{\"en\":\"2015\",\"ar\":\"2015\"}', '01/05/2015', '2020-05-06 15:44:34', '2020-05-06 16:04:17'),
(24, 1, 4, '{\"en\":\"2014\",\"ar\":\"2014\"}', '01/05/2014', '2020-05-06 15:45:06', '2020-05-06 16:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `about_titles`
--

CREATE TABLE `about_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_titles`
--

INSERT INTO `about_titles` (`id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"About Us | General International Group\",\"ar\":\"\\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629 | \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0639\\u0646\\u0627\"}', '2020-04-01 08:47:10', '2020-04-01 08:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `banner_careers`
--

CREATE TABLE `banner_careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_careers`
--

INSERT INTO `banner_careers` (`id`, `is_publish`, `banner`, `head_title`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '1589780849-1589402783-1589064682-section-bg-17.jpg', '{\"en\":\"CAREERS\",\"ar\":\"\\u0648\\u0638\\u0627\\u0626\\u0641\"}', '{\"en\":\"LOOKING FOR AN OPPORTUNITY ?\",\"ar\":\"\\u0647\\u0644 \\u062a\\u0628\\u062d\\u062b \\u0639\\u0646 \\u0641\\u0631\\u0635\\u0629\\u061f\"}', '2020-05-13 16:48:10', '2020-05-18 01:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `banner_cases`
--

CREATE TABLE `banner_cases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `banner` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_cases`
--

INSERT INTO `banner_cases` (`id`, `is_publish`, `banner`, `head_title`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '1589793739-1589288299-section-bg-18.jpg', '{\"en\":\"CASE STUDIES\",\"ar\":\"\\u062f\\u0631\\u0627\\u0633\\u0627\\u062a \\u0627\\u0644\\u062d\\u0627\\u0644\\u0629\"}', '{\"en\":\"STEPS WE TAKE FOR A BETTER AND SAFER TOMORROW!\",\"ar\":\"\\u0627\\u0644\\u062e\\u0637\\u0648\\u0627\\u062a \\u0627\\u0644\\u062a\\u064a \\u0646\\u062a\\u062e\\u0630\\u0647\\u0627 \\u0645\\u0646 \\u0623\\u062c\\u0644 \\u063a\\u062f \\u0623\\u0641\\u0636\\u0644 \\u0648\\u0623\\u0643\\u062b\\u0631 \\u0623\\u0645\\u0627\\u0646\\u064b\\u0627!\"}', '2020-05-12 08:58:19', '2020-05-18 05:22:19');

-- --------------------------------------------------------

--
-- Table structure for table `banner_contacts`
--

CREATE TABLE `banner_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_contacts`
--

INSERT INTO `banner_contacts` (`id`, `is_publish`, `banner`, `head_title`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '1589794674-1589226846-section-bg-about1.jpg', '{\"en\":\"CONTACT US\",\"ar\":\"\\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627\"}', '{\"en\":\"OUR TEAM IS HERE TO HELP!\",\"ar\":\"\\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0647\\u0646\\u0627 \\u0644\\u0644\\u0645\\u0633\\u0627\\u0639\\u062f\\u0629!\"}', '2020-05-12 18:06:53', '2020-05-18 05:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `banner_facilities`
--

CREATE TABLE `banner_facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_facilities`
--

INSERT INTO `banner_facilities` (`id`, `is_publish`, `banner`, `head_title`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '1589780415-1589066773-electrical.jpg', '{\"en\":\"Facilities Management\",\"ar\":\"\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642\"}', '{\"en\":\"SAFETY IS NO ACCIDENT!\",\"ar\":\"\\u0627\\u0644\\u0633\\u0644\\u0627\\u0645\\u0629 \\u0644\\u064a\\u0633\\u062a \\u0635\\u062f\\u0641\\u0629!\"}', '2020-05-09 19:26:13', '2020-05-18 01:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `banner_fires`
--

CREATE TABLE `banner_fires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_fires`
--

INSERT INTO `banner_fires` (`id`, `is_publish`, `banner`, `head_title`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '1589779544-1589064064-se-2.jpg', '{\"en\":\"FIRE & LIFE SAFETY\",\"ar\":\"\\u0627\\u0644\\u0633\\u0644\\u0627\\u0645\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642 \\u0648\\u0627\\u0644\\u062d\\u064a\\u0627\\u0629\"}', '{\"en\":\"SAFETY IS NO ACCIDENT!\",\"ar\":\"\\u0627\\u0644\\u0633\\u0644\\u0627\\u0645\\u0629 \\u0644\\u064a\\u0633\\u062a \\u0635\\u062f\\u0641\\u0629!\"}', '2020-05-09 18:41:04', '2020-05-18 01:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `banner_news`
--

CREATE TABLE `banner_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `banner` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_news`
--

INSERT INTO `banner_news` (`id`, `is_publish`, `banner`, `head_title`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '1589792582-1589064670-section-bg-25.jpg', '{\"en\":\"NEWS & EVENTS\",\"ar\":\"\\u0627\\u0644\\u0623\\u062e\\u0628\\u0627\\u0631 \\u0648 \\u0627\\u0644\\u0623\\u062d\\u062f\\u0627\\u062b\"}', '{\"en\":\"STEPS WE TAKE FOR A BETTER AND SAFER TOMORROW!\",\"ar\":\"\\u0627\\u0644\\u062e\\u0637\\u0648\\u0627\\u062a \\u0627\\u0644\\u062a\\u064a \\u0646\\u062a\\u062e\\u0630\\u0647\\u0627 \\u0645\\u0646 \\u0623\\u062c\\u0644 \\u063a\\u062f \\u0623\\u0641\\u0636\\u0644 \\u0648\\u0623\\u0643\\u062b\\u0631 \\u0623\\u0645\\u0627\\u0646\\u064b\\u0627!\"}', '2020-05-11 15:54:06', '2020-05-18 05:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `banner_securities`
--

CREATE TABLE `banner_securities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_securities`
--

INSERT INTO `banner_securities` (`id`, `is_publish`, `banner`, `head_title`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '1589779720-1589064670-section-bg-25.jpg', '{\"en\":\"SECURITY & ELV\",\"ar\":\"\\u0627\\u0644\\u0623\\u0645\\u0646 \\u0648 ELV\"}', '{\"en\":\"SAFETY IS NO ACCIDENT!\",\"ar\":\"\\u0627\\u0644\\u0633\\u0644\\u0627\\u0645\\u0629 \\u0644\\u064a\\u0633\\u062a \\u0635\\u062f\\u0641\\u0629!\"}', '2020-05-09 18:51:10', '2020-05-18 01:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `banner_waters`
--

CREATE TABLE `banner_waters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_waters`
--

INSERT INTO `banner_waters` (`id`, `is_publish`, `banner`, `head_title`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '1589779896-1589065442-electrical.jpg', '{\"en\":\"WATER TREATMENT\",\"ar\":\"\\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647\"}', '{\"en\":\"SAFETY IS NO ACCIDENT!\",\"ar\":\"\\u0627\\u0644\\u0633\\u0644\\u0627\\u0645\\u0629 \\u0644\\u064a\\u0633\\u062a \\u0635\\u062f\\u0641\\u0629!\"}', '2020-05-09 19:04:02', '2020-05-18 01:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `brand_photos`
--

CREATE TABLE `brand_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_photos`
--

INSERT INTO `brand_photos` (`id`, `name`, `created_at`, `updated_at`) VALUES
(9, '15885737981584968761header-logo.png', '2020-05-04 02:29:58', '2020-05-04 02:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `brochures`
--

CREATE TABLE `brochures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `filter_id` int(11) NOT NULL,
  `brochure_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brochures`
--

INSERT INTO `brochures` (`id`, `is_publish`, `filter_id`, `brochure_name`, `title`, `created_at`, `updated_at`) VALUES
(11, 1, 22, '{\"en\":\"Active Fire Protection\",\"ar\":\"\\u0627\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0627\\u0644\\u0646\\u0634\\u0637\"}', '{\"en\":\"Active Fire Protection\",\"ar\":\"\\u0627\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0627\\u0644\\u0646\\u0634\\u0637\"}', '2020-05-04 03:23:08', '2020-05-04 03:23:08'),
(12, 1, 22, '{\"en\":\"Passive Fire Protection\",\"ar\":\"\\u0627\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642 \\u0627\\u0644\\u0633\\u0644\\u0628\\u064a\\u0629\"}', '{\"en\":\"Passive Fire Protection\",\"ar\":\"\\u0627\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642 \\u0627\\u0644\\u0633\\u0644\\u0628\\u064a\\u0629\"}', '2020-05-04 03:30:39', '2020-05-04 03:30:39'),
(13, 1, 23, '{\"en\":\"SECURITY & ELV\",\"ar\":\"\\u0627\\u0644\\u0623\\u0645\\u0646 \\u0648 ELV\"}', '{\"en\":\"SECURITY & ELV\",\"ar\":\"\\u0627\\u0644\\u0623\\u0645\\u0646 \\u0648 ELV\"}', '2020-05-04 03:31:44', '2020-05-04 03:31:44'),
(14, 1, 23, '{\"en\":\"HOSPITALITY & BUILDING MANAGEMENT\",\"ar\":\"\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0636\\u064a\\u0627\\u0641\\u0629 \\u0648\\u0627\\u0644\\u0645\\u0628\\u0627\\u0646\\u064a\"}', '{\"en\":\"HOSPITALITY & BUILDING MANAGEMENT\",\"ar\":\"\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0636\\u064a\\u0627\\u0641\\u0629 \\u0648\\u0627\\u0644\\u0645\\u0628\\u0627\\u0646\\u064a\"}', '2020-05-04 03:32:27', '2020-05-04 03:32:27'),
(15, 1, 24, '{\"en\":\"WATER FILTRATION & OTHERS\",\"ar\":\"\\u062a\\u0631\\u0634\\u064a\\u062d \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0648\\u063a\\u064a\\u0631\\u0647\\u0627\"}', '{\"en\":\"WATER FILTRATION & OTHERS\",\"ar\":\"\\u062a\\u0631\\u0634\\u064a\\u062d \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0648\\u063a\\u064a\\u0631\\u0647\\u0627\"}', '2020-05-04 03:33:18', '2020-05-04 03:33:18'),
(16, 1, 24, '{\"en\":\"WATER TREATMENT & OTHERS\",\"ar\":\"\\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0648\\u063a\\u064a\\u0631\\u0647\\u0627\"}', '{\"en\":\"WATER TREATMENT & OTHERS\",\"ar\":\"\\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0648\\u063a\\u064a\\u0631\\u0647\\u0627\"}', '2020-05-04 03:33:53', '2020-05-04 03:33:53'),
(17, 1, 25, '{\"en\":\"FACILITIES MANAGEMENT\",\"ar\":\"\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642\"}', '{\"en\":\"FACILITIES MANAGEMENT\",\"ar\":\"\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642\"}', '2020-05-04 03:34:42', '2020-05-04 03:34:42'),
(18, 1, 25, '{\"en\":\"ELECTRICAL & SOFT\",\"ar\":\"\\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0626\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0644\\u064a\\u0646\\u0629\"}', '{\"en\":\"ELECTRICAL & SOFT\",\"ar\":\"\\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0626\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0644\\u064a\\u0646\\u0629\"}', '2020-05-04 03:35:33', '2020-05-04 03:35:33'),
(19, 1, 25, '{\"en\":\"HVAC & PLUMBING\",\"ar\":\"\\u0627\\u0644\\u062a\\u0643\\u064a\\u064a\\u0641 \\u0648\\u0627\\u0644\\u0633\\u0628\\u0627\\u0643\\u0629\"}', '{\"en\":\"HVAC & PLUMBING\",\"ar\":\"\\u0627\\u0644\\u062a\\u0643\\u064a\\u064a\\u0641 \\u0648\\u0627\\u0644\\u0633\\u0628\\u0627\\u0643\\u0629\"}', '2020-05-04 03:36:13', '2020-05-04 03:36:13'),
(20, 1, 25, '{\"en\":\"CIVIL & MINOR ANCILLARY MAINTENANCE\",\"ar\":\"\\u0627\\u0644\\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0645\\u062f\\u0646\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0641\\u0631\\u0639\\u064a\\u0629\"}', '{\"en\":\"CIVIL & MINOR ANCILLARY MAINTENANCE\",\"ar\":\"\\u0627\\u0644\\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0645\\u062f\\u0646\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0641\\u0631\\u0639\\u064a\\u0629\"}', '2020-05-04 03:36:49', '2020-05-04 03:36:49');

-- --------------------------------------------------------

--
-- Table structure for table `brochure_requests`
--

CREATE TABLE `brochure_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brochure_id` int(11) UNSIGNED NOT NULL,
  `requester_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requester_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requester_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brochure_requests`
--

INSERT INTO `brochure_requests` (`id`, `brochure_id`, `requester_name`, `requester_email`, `requester_phone`, `created_at`, `updated_at`) VALUES
(185, 11, 'Samandar Mirzaev', 'samandarmirzayev@gmail.com', '553943223', '2020-05-07 02:59:47', '2020-05-07 02:59:47');

-- --------------------------------------------------------

--
-- Table structure for table `b_c_c_mails`
--

CREATE TABLE `b_c_c_mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `career_contacts`
--

CREATE TABLE `career_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `mail_driver` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_host` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_port` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_encryption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_contacts`
--

INSERT INTO `career_contacts` (`id`, `is_publish`, `mail_driver`, `mail_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encryption`, `created_at`, `updated_at`) VALUES
(1, 1, 'smtp', 'smtp.gmail.com', '587', 'samandarmirzayev@gmail.com', 'Sam1988dar', 'tls', '2020-03-24 02:49:19', '2020-03-24 02:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `career_titles`
--

CREATE TABLE `career_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_titles`
--

INSERT INTO `career_titles` (`id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"Careers | General International Group\",\"ar\":\"\\u0648\\u0638\\u0627\\u0626\\u0641 | \\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629\"}', '2020-04-01 09:43:22', '2020-04-01 09:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `case_categories`
--

CREATE TABLE `case_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_categories`
--

INSERT INTO `case_categories` (`id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(8, 1, '{\"en\":\"VOLKSWAGEN\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '2020-05-12 16:15:06', '2020-05-12 16:15:06'),
(9, 1, '{\"en\":\"FINANCIAL\",\"ar\":\"\\u0627\\u0644\\u0623\\u0645\\u0648\\u0631 \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629\"}', '2020-05-12 16:15:59', '2020-05-12 16:15:59'),
(10, 1, '{\"en\":\"SUSTAINABILITY\",\"ar\":\"\\u0627\\u0644\\u0627\\u0633\\u062a\\u062f\\u0627\\u0645\\u0629\"}', '2020-05-12 16:16:18', '2020-05-12 16:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `case_medias`
--

CREATE TABLE `case_medias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `cat_id` int(10) UNSIGNED DEFAULT NULL,
  `case_id` int(10) UNSIGNED DEFAULT NULL,
  `media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_medias`
--

INSERT INTO `case_medias` (`id`, `is_publish`, `cat_id`, `case_id`, `media`, `title`, `created_at`, `updated_at`) VALUES
(8, 1, 8, 8, '1589794546-1589314537-section-bg-17.jpg', '{\"en\":\"VOLKSWAGEN: ENGINEERING A DISASTER\",\"ar\":\"\\u0641\\u0648\\u0644\\u0643\\u0633 \\u0648\\u0627\\u062c\\u0646: \\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0643\\u0648\\u0627\\u0631\\u062b\"}', '2020-05-12 16:15:37', '2020-05-18 05:35:46'),
(9, 1, 8, 8, '1589794553-1589314609-section-bg-7.jpg', '{\"en\":\"Volkswagen: Engineering a Disaster\",\"ar\":\"\\u0641\\u0648\\u0644\\u0643\\u0633 \\u0648\\u0627\\u062c\\u0646: \\u0647\\u0646\\u062f\\u0633\\u0629 \\u0643\\u0627\\u0631\\u062b\\u0629\"}', '2020-05-12 16:16:49', '2020-05-18 05:35:53'),
(10, 1, 8, 8, '1589794561-1589314628-section-bg-25.jpg', '{\"en\":\"Volkswagen: Engineering a Disaster\",\"ar\":\"\\u0641\\u0648\\u0644\\u0643\\u0633 \\u0648\\u0627\\u062c\\u0646: \\u0647\\u0646\\u062f\\u0633\\u0629 \\u0643\\u0627\\u0631\\u062b\\u0629\"}', '2020-05-12 16:17:08', '2020-05-18 05:36:01'),
(11, 1, 9, 9, '1589794570-1589314662-section-bg-3.jpg', '{\"en\":\"Financial\",\"ar\":\"\\u0627\\u0644\\u0623\\u0645\\u0648\\u0631 \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629\"}', '2020-05-12 16:17:42', '2020-05-18 05:36:10'),
(12, 1, 9, 9, '1589794578-1589314689-section-bg-25.jpg', '{\"en\":\"FINANCIAL\",\"ar\":\"\\u0627\\u0644\\u0623\\u0645\\u0648\\u0631 \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629\"}', '2020-05-12 16:18:09', '2020-05-18 05:36:18'),
(13, 1, 9, 9, '1589794588-1589314710-section-bg-18.jpg', '{\"en\":\"FINANCIAL\",\"ar\":\"\\u0627\\u0644\\u0623\\u0645\\u0648\\u0631 \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629\"}', '2020-05-12 16:18:30', '2020-05-18 05:36:28'),
(14, 1, 10, 10, '1589794598-1589314758-section-bg-about.jpg', '{\"en\":\"Golden Agri Resources and Sustainability\",\"ar\":\"\\u0627\\u0644\\u0645\\u0648\\u0627\\u0631\\u062f \\u0627\\u0644\\u0632\\u0631\\u0627\\u0639\\u064a\\u0629 \\u0627\\u0644\\u0630\\u0647\\u0628\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0627\\u0633\\u062a\\u062f\\u0627\\u0645\\u0629\"}', '2020-05-12 16:18:58', '2020-05-18 05:36:38'),
(15, 1, 10, 10, '1589794606-1589314738-section-bg-gig.jpg', '{\"en\":\"Golden Agri Resources and Sustainability\",\"ar\":\"\\u0627\\u0644\\u0645\\u0648\\u0627\\u0631\\u062f \\u0627\\u0644\\u0632\\u0631\\u0627\\u0639\\u064a\\u0629 \\u0627\\u0644\\u0630\\u0647\\u0628\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0627\\u0633\\u062a\\u062f\\u0627\\u0645\\u0629\"}', '2020-05-12 16:19:18', '2020-05-18 05:36:46'),
(16, 1, 10, 10, '1589794618-1589314798-section-bg-gig-1.jpg', '{\"en\":\"Golden Agri Resources and Sustainability\",\"ar\":\"\\u0627\\u0644\\u0645\\u0648\\u0627\\u0631\\u062f \\u0627\\u0644\\u0632\\u0631\\u0627\\u0639\\u064a\\u0629 \\u0627\\u0644\\u0630\\u0647\\u0628\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0627\\u0633\\u062a\\u062f\\u0627\\u0645\\u0629\"}', '2020-05-12 16:19:58', '2020-05-18 05:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `case_studies`
--

CREATE TABLE `case_studies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `cat_id` int(10) UNSIGNED DEFAULT NULL,
  `media_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_studies`
--

INSERT INTO `case_studies` (`id`, `is_publish`, `cat_id`, `media_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(8, 1, 8, 8, '{\"en\":\"VOLKSWAGEN: ENGINEERING A DISASTER\",\"ar\":\"\\u0641\\u0648\\u0644\\u0643\\u0633 \\u0648\\u0627\\u062c\\u0646: \\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0643\\u0648\\u0627\\u0631\\u062b\"}', '{\"en\":\"<p>In&nbsp;<a class=\\\"mw-redirect\\\" title=\\\"Public-relations\\\" href=\\\"https:\\/\\/en.wikipedia.org\\/wiki\\/Public-relations\\\">public-relations<\\/a>&nbsp;research, three types of case studies are used:<sup id=\\\"cite_ref-19\\\" class=\\\"reference\\\"><a href=\\\"https:\\/\\/en.wikipedia.org\\/wiki\\/Case_study#cite_note-19\\\">[19]<\\/a><\\/sup><\\/p>\\r\\n<ol>\\r\\n<li>Linear,<\\/li>\\r\\n<li>Process-oriented,<\\/li>\\r\\n<li>Grounded.<\\/li>\\r\\n<\\/ol>\\r\\n<p>Under the more generalized category of case study exist several subdivisions, each of which is custom selected for use depending upon the goals of the investigator. These types of case study include the following:<\\/p>\\r\\n<ul>\\r\\n<li><strong>Illustrative case studies.<\\/strong>&nbsp;These are primarily descriptive studies. They typically utilize one or two instances of an event to show the existing situation. Illustrative case studies serve primarily to make the unfamiliar familiar and to give readers a common language about the topic in question.<\\/li>\\r\\n<li><strong>Exploratory (or pilot) case studies.<\\/strong>&nbsp;These are condensed case studies performed before implementing a large scale investigation. Their basic function is to help identify questions and select types of measurement prior to the main investigation. The primary pitfall of this type of study is that initial findings may seem convincing enough to be released prematurely as conclusions.<\\/li>\\r\\n<li><strong>Cumulative case studies.<\\/strong>&nbsp;These serve to aggregate information from several sites collected at different times. The idea behind these studies is that the collection of past studies will allow for greater generalization without additional cost or time being expended on new, possibly repetitive studies.<\\/li>\\r\\n<li><strong>Critical instance case studies.<\\/strong>&nbsp;These examine one or more sites either for the purpose of examining a situation of unique interest with little to no interest in generalization, or to call into question a highly generalized or universal assertion. This method is useful for answering cause and effect questions.<\\/li>\\r\\n<\\/ul>\",\"ar\":\"<p>\\u0641\\u064a \\u0623\\u0628\\u062d\\u0627\\u062b \\u0627\\u0644\\u0639\\u0644\\u0627\\u0642\\u0627\\u062a \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629 \\u060c \\u064a\\u062a\\u0645 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u062b\\u0644\\u0627\\u062b\\u0629 \\u0623\\u0646\\u0648\\u0627\\u0639 \\u0645\\u0646 \\u062f\\u0631\\u0627\\u0633\\u0627\\u062a \\u0627\\u0644\\u062d\\u0627\\u0644\\u0629: [19]<\\/p>\\r\\n<p>\\u062e\\u0637\\u064a\\u060c<br \\/>\\u0645\\u0648\\u062c\\u0647 \\u0646\\u062d\\u0648 \\u0627\\u0644\\u0639\\u0645\\u0644\\u064a\\u0629 \\u060c<br \\/>\\u0645\\u0624\\u0633\\u0633.<br \\/>\\u062a\\u062d\\u062a \\u0641\\u0626\\u0629 \\u062f\\u0631\\u0627\\u0633\\u0629 \\u0627\\u0644\\u062d\\u0627\\u0644\\u0629 \\u0627\\u0644\\u0623\\u0643\\u062b\\u0631 \\u0639\\u0645\\u0648\\u0645\\u064a\\u0629 \\u060c \\u062a\\u0648\\u062c\\u062f \\u0639\\u062f\\u0629 \\u0623\\u0642\\u0633\\u0627\\u0645 \\u0641\\u0631\\u0639\\u064a\\u0629 \\u060c \\u064a\\u062a\\u0645 \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0643\\u0644 \\u0645\\u0646\\u0647\\u0627 \\u0628\\u0634\\u0643\\u0644 \\u0645\\u062e\\u0635\\u0635 \\u0644\\u0644\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0627\\u0639\\u062a\\u0645\\u0627\\u062f\\u064b\\u0627 \\u0639\\u0644\\u0649 \\u0623\\u0647\\u062f\\u0627\\u0641 \\u0627\\u0644\\u0645\\u062d\\u0642\\u0642. \\u062a\\u0634\\u0645\\u0644 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0623\\u0646\\u0648\\u0627\\u0639 \\u0645\\u0646 \\u062f\\u0631\\u0627\\u0633\\u0627\\u062a \\u0627\\u0644\\u062d\\u0627\\u0644\\u0629 \\u0645\\u0627 \\u064a\\u0644\\u064a:<\\/p>\\r\\n<p>\\u062f\\u0631\\u0627\\u0633\\u0627\\u062a \\u062d\\u0627\\u0644\\u0629 \\u062a\\u0648\\u0636\\u064a\\u062d\\u064a\\u0629. \\u0647\\u0630\\u0647 \\u0647\\u064a \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u0627\\u062a \\u0627\\u0644\\u0648\\u0635\\u0641\\u064a\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0642\\u0627\\u0645 \\u0627\\u0644\\u0623\\u0648\\u0644. \\u0648\\u0639\\u0627\\u062f\\u0629 \\u0645\\u0627 \\u064a\\u0633\\u062a\\u062e\\u062f\\u0645\\u0648\\u0646 \\u062d\\u0627\\u0644\\u0629 \\u0623\\u0648 \\u062d\\u0627\\u0644\\u062a\\u064a\\u0646 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u062f\\u062b \\u0644\\u0625\\u0638\\u0647\\u0627\\u0631 \\u0627\\u0644\\u0648\\u0636\\u0639 \\u0627\\u0644\\u062d\\u0627\\u0644\\u064a. \\u062a\\u0639\\u0645\\u0644 \\u062f\\u0631\\u0627\\u0633\\u0627\\u062a \\u0627\\u0644\\u062d\\u0627\\u0644\\u0629 \\u0627\\u0644\\u062a\\u0648\\u0636\\u064a\\u062d\\u064a\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0642\\u0627\\u0645 \\u0627\\u0644\\u0623\\u0648\\u0644 \\u0639\\u0644\\u0649 \\u062c\\u0639\\u0644 \\u0627\\u0644\\u0645\\u0623\\u0644\\u0648\\u0641 \\u063a\\u064a\\u0631 \\u0645\\u0623\\u0644\\u0648\\u0641 \\u0648\\u0625\\u0639\\u0637\\u0627\\u0621 \\u0627\\u0644\\u0642\\u0631\\u0627\\u0621 \\u0644\\u063a\\u0629 \\u0645\\u0634\\u062a\\u0631\\u0643\\u0629 \\u062d\\u0648\\u0644 \\u0627\\u0644\\u0645\\u0648\\u0636\\u0648\\u0639 \\u0627\\u0644\\u0645\\u0639\\u0646\\u064a.<br \\/>\\u062f\\u0631\\u0627\\u0633\\u0627\\u062a \\u062d\\u0627\\u0644\\u0629 \\u0627\\u0633\\u062a\\u0643\\u0634\\u0627\\u0641\\u064a\\u0629 (\\u0623\\u0648 \\u062a\\u062c\\u0631\\u064a\\u0628\\u064a\\u0629). \\u0647\\u0630\\u0647 \\u062f\\u0631\\u0627\\u0633\\u0627\\u062a \\u062d\\u0627\\u0644\\u0629 \\u0645\\u0643\\u062b\\u0641\\u0629 \\u064a\\u062a\\u0645 \\u0625\\u062c\\u0631\\u0627\\u0624\\u0647\\u0627 \\u0642\\u0628\\u0644 \\u062a\\u0646\\u0641\\u064a\\u0630 \\u062a\\u062d\\u0642\\u064a\\u0642 \\u0648\\u0627\\u0633\\u0639 \\u0627\\u0644\\u0646\\u0637\\u0627\\u0642. \\u0648\\u0638\\u064a\\u0641\\u062a\\u0647\\u0645 \\u0627\\u0644\\u0623\\u0633\\u0627\\u0633\\u064a\\u0629 \\u0647\\u064a \\u0627\\u0644\\u0645\\u0633\\u0627\\u0639\\u062f\\u0629 \\u0641\\u064a \\u062a\\u062d\\u062f\\u064a\\u062f \\u0627\\u0644\\u0623\\u0633\\u0626\\u0644\\u0629 \\u0648\\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0623\\u0646\\u0648\\u0627\\u0639 \\u0627\\u0644\\u0642\\u064a\\u0627\\u0633 \\u0642\\u0628\\u0644 \\u0627\\u0644\\u062a\\u062d\\u0642\\u064a\\u0642 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a. \\u0627\\u0644\\u0645\\u0623\\u0632\\u0642 \\u0627\\u0644\\u0623\\u0633\\u0627\\u0633\\u064a \\u0644\\u0647\\u0630\\u0627 \\u0627\\u0644\\u0646\\u0648\\u0639 \\u0645\\u0646 \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u0629 \\u0647\\u0648 \\u0623\\u0646 \\u0627\\u0644\\u0646\\u062a\\u0627\\u0626\\u062c \\u0627\\u0644\\u0623\\u0648\\u0644\\u064a\\u0629 \\u0642\\u062f \\u062a\\u0628\\u062f\\u0648 \\u0645\\u0642\\u0646\\u0639\\u0629 \\u0628\\u0645\\u0627 \\u064a\\u0643\\u0641\\u064a \\u0644\\u064a\\u062a\\u0645 \\u0625\\u0635\\u062f\\u0627\\u0631\\u0647\\u0627 \\u0642\\u0628\\u0644 \\u0627\\u0644\\u0623\\u0648\\u0627\\u0646 \\u0643\\u0627\\u0633\\u062a\\u0646\\u062a\\u0627\\u062c\\u0627\\u062a.<br \\/>\\u062f\\u0631\\u0627\\u0633\\u0627\\u062a \\u062d\\u0627\\u0644\\u0629 \\u062a\\u0631\\u0627\\u0643\\u0645\\u064a\\u0629. \\u062a\\u0639\\u0645\\u0644 \\u0647\\u0630\\u0647 \\u0639\\u0644\\u0649 \\u062a\\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0645\\u0646 \\u0639\\u062f\\u0629 \\u0645\\u0648\\u0627\\u0642\\u0639 \\u062a\\u0645 \\u062c\\u0645\\u0639\\u0647\\u0627 \\u0641\\u064a \\u0623\\u0648\\u0642\\u0627\\u062a \\u0645\\u062e\\u062a\\u0644\\u0641\\u0629. \\u0627\\u0644\\u0641\\u0643\\u0631\\u0629 \\u0648\\u0631\\u0627\\u0621 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u0627\\u062a \\u0647\\u064a \\u0623\\u0646 \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u0627\\u062a \\u0627\\u0644\\u0633\\u0627\\u0628\\u0642\\u0629 \\u0633\\u062a\\u0633\\u0645\\u062d \\u0628\\u062a\\u0639\\u0645\\u064a\\u0645 \\u0623\\u0643\\u0628\\u0631 \\u062f\\u0648\\u0646 \\u062a\\u0643\\u0644\\u0641\\u0629 \\u0625\\u0636\\u0627\\u0641\\u064a\\u0629 \\u0623\\u0648 \\u0648\\u0642\\u062a \\u064a\\u062a\\u0645 \\u0625\\u0646\\u0641\\u0627\\u0642\\u0647 \\u0639\\u0644\\u0649 \\u062f\\u0631\\u0627\\u0633\\u0627\\u062a \\u062c\\u062f\\u064a\\u062f\\u0629 \\u060c \\u0631\\u0628\\u0645\\u0627 \\u0645\\u062a\\u0643\\u0631\\u0631\\u0629.<br \\/>\\u062f\\u0631\\u0627\\u0633\\u0627\\u062a \\u0627\\u0644\\u062d\\u0627\\u0644\\u0629 \\u0627\\u0644\\u062d\\u0631\\u062c\\u0629. \\u064a\\u0642\\u0648\\u0645 \\u0647\\u0624\\u0644\\u0627\\u0621 \\u0628\\u0641\\u062d\\u0635 \\u0645\\u0648\\u0642\\u0639 \\u0648\\u0627\\u062d\\u062f \\u0623\\u0648 \\u0623\\u0643\\u062b\\u0631 \\u0625\\u0645\\u0627 \\u0644\\u063a\\u0631\\u0636 \\u0641\\u062d\\u0635 \\u062d\\u0627\\u0644\\u0629 \\u0630\\u0627\\u062a \\u0627\\u0647\\u062a\\u0645\\u0627\\u0645 \\u0641\\u0631\\u064a\\u062f \\u0645\\u0639 \\u0627\\u0644\\u0642\\u0644\\u064a\\u0644 \\u0645\\u0646 \\u0627\\u0644\\u0627\\u0647\\u062a\\u0645\\u0627\\u0645 \\u0623\\u0648 \\u0639\\u062f\\u0645 \\u0627\\u0644\\u0627\\u0647\\u062a\\u0645\\u0627\\u0645 \\u0628\\u0627\\u0644\\u062a\\u0639\\u0645\\u064a\\u0645 \\u060c \\u0623\\u0648 \\u0644\\u0644\\u062a\\u0634\\u0643\\u064a\\u0643 \\u0641\\u064a \\u062a\\u0623\\u0643\\u064a\\u062f \\u0639\\u0627\\u0645 \\u0623\\u0648 \\u0639\\u0627\\u0644\\u064d. \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0637\\u0631\\u064a\\u0642\\u0629 \\u0645\\u0641\\u064a\\u062f\\u0629 \\u0644\\u0644\\u0625\\u062c\\u0627\\u0628\\u0629 \\u0639\\u0644\\u0649 \\u0623\\u0633\\u0626\\u0644\\u0629 \\u0627\\u0644\\u0633\\u0628\\u0628 \\u0648\\u0627\\u0644\\u0646\\u062a\\u064a\\u062c\\u0629.<\\/p>\"}', '2020-05-12 16:21:19', '2020-05-12 16:21:19'),
(9, 1, 9, 11, '{\"en\":\"FINANCIAL\",\"ar\":\"\\u0627\\u0644\\u0623\\u0645\\u0648\\u0631 \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629\"}', '{\"en\":\"<p class=\\\"lead\\\">Between 2012 and 2014, BSR piloted the HERfinance program with 10,000 garment factory workers in India. As a result, 38 percent more workers began using a formal bank account for savings, and 91 percent of workers increased their rates of savings.&nbsp;<\\/p>\\r\\n<h3>The Challenge<\\/h3>\\r\\n<p>The garment industry is a critical source of formal employment for millions of the world&rsquo;s poor, and particularly for women who comprise the majority of this sector&rsquo;s workforce. For these women, garment factory work provides an opportunity to earn a salaried wage and contribute to their household&rsquo;s financial well-being.<\\/p>\\r\\n<p>However, many low-income, wage-earning women lack financial literacy and access to formal financial services. As a result, they often rely on informal mechanisms such as saving cash at home, investing in riskier assets like jewelry or livestock, or relying on informal group-savings mechanisms. Women are also far less likely than men to make decisions about how their wages should be allocated. According to a&nbsp;<a href=\\\"http:\\/\\/www.bsr.org\\/en\\/our-insights\\/report-view\\/herfinance-pilot-report\\\">BSR survey of 500 garment workers in Bangalore and Delhi, India<\\/a>, only 48 percent of female garment workers decide what to do with their monthly wages, compared to 90 percent of their male peers.<\\/p>\\r\\n<p>Given that&nbsp;<a href=\\\"http:\\/\\/www.state.gov\\/s\\/gwi\\/programs\\/womensfund\\/why\\/\\\">women tend to invest 90 percent of their earnings back into the health, nutrition, and education of their families<\\/a>, increasing women&rsquo;s financial capabilities can lead to long-term prosperity for households, families, and communities. BSR&rsquo;s&nbsp;<a href=\\\"http:\\/\\/herproject.org\\/herfinance\\\">HERfinance<\\/a>&nbsp;program is working to increase the financial awareness and access to financial services among this population of women.<\\/p>\",\"ar\":\"<p>\\u0628\\u064a\\u0646 \\u0639\\u0627\\u0645\\u064a 2012 \\u0648 2014 \\u060c \\u0642\\u0627\\u0645\\u062a BSR \\u0628\\u062a\\u062c\\u0631\\u0628\\u0629 \\u0628\\u0631\\u0646\\u0627\\u0645\\u062c HERfinance \\u0645\\u0639 10000 \\u0639\\u0627\\u0645\\u0644 \\u0645\\u0635\\u0646\\u0639 \\u0645\\u0644\\u0627\\u0628\\u0633 \\u0641\\u064a \\u0627\\u0644\\u0647\\u0646\\u062f. \\u0648\\u0646\\u062a\\u064a\\u062c\\u0629 \\u0644\\u0630\\u0644\\u0643 \\u060c \\u0628\\u062f\\u0623 38 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0627\\u0626\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0639\\u0645\\u0627\\u0644 \\u0641\\u064a \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u062d\\u0633\\u0627\\u0628 \\u0645\\u0635\\u0631\\u0641\\u064a \\u0631\\u0633\\u0645\\u064a \\u0644\\u0644\\u0627\\u062f\\u062e\\u0627\\u0631 \\u060c \\u0648\\u0632\\u0627\\u062f 91 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0627\\u0626\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0639\\u0645\\u0627\\u0644 \\u0645\\u0639\\u062f\\u0644\\u0627\\u062a \\u0645\\u062f\\u062e\\u0631\\u0627\\u062a\\u0647\\u0645.<\\/p>\\r\\n<p>\\u0627\\u0644\\u062a\\u062d\\u062f\\u064a<br \\/>\\u062a\\u0639\\u062f \\u0635\\u0646\\u0627\\u0639\\u0629 \\u0627\\u0644\\u0645\\u0644\\u0627\\u0628\\u0633 \\u0645\\u0635\\u062f\\u0631\\u0627 \\u062d\\u0627\\u0633\\u0645\\u0627 \\u0644\\u0644\\u0639\\u0645\\u0627\\u0644\\u0629 \\u0627\\u0644\\u0631\\u0633\\u0645\\u064a\\u0629 \\u0644\\u0645\\u0644\\u0627\\u064a\\u064a\\u0646 \\u0627\\u0644\\u0641\\u0642\\u0631\\u0627\\u0621 \\u0641\\u064a \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645 \\u060c \\u0648\\u062e\\u0627\\u0635\\u0629 \\u0644\\u0644\\u0646\\u0633\\u0627\\u0621 \\u0627\\u0644\\u0644\\u0627\\u062a\\u064a \\u064a\\u0634\\u0643\\u0644\\u0646 \\u063a\\u0627\\u0644\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0642\\u0648\\u0649 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0644\\u0629 \\u0641\\u064a \\u0647\\u0630\\u0627 \\u0627\\u0644\\u0642\\u0637\\u0627\\u0639. \\u0628\\u0627\\u0644\\u0646\\u0633\\u0628\\u0629 \\u0644\\u0647\\u0624\\u0644\\u0627\\u0621 \\u0627\\u0644\\u0646\\u0633\\u0627\\u0621 \\u060c \\u064a\\u0648\\u0641\\u0631 \\u0639\\u0645\\u0644 \\u0645\\u0635\\u0646\\u0639 \\u0627\\u0644\\u0645\\u0644\\u0627\\u0628\\u0633 \\u0641\\u0631\\u0635\\u0629 \\u0644\\u0643\\u0633\\u0628 \\u0623\\u062c\\u0631 \\u0628\\u0623\\u062c\\u0631 \\u0648\\u0627\\u0644\\u0645\\u0633\\u0627\\u0647\\u0645\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0631\\u0641\\u0627\\u0647\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629 \\u0644\\u0623\\u0633\\u0631\\u0647\\u0646.<\\/p>\\r\\n<p>\\u0648\\u0645\\u0639 \\u0630\\u0644\\u0643 \\u060c \\u062a\\u0641\\u062a\\u0642\\u0631 \\u0627\\u0644\\u0639\\u062f\\u064a\\u062f \\u0645\\u0646 \\u0627\\u0644\\u0646\\u0633\\u0627\\u0621 \\u0630\\u0648\\u0627\\u062a \\u0627\\u0644\\u062f\\u062e\\u0644 \\u0627\\u0644\\u0645\\u0646\\u062e\\u0641\\u0636 \\u0648\\u0627\\u0644\\u0623\\u062c\\u0648\\u0631 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0639\\u0631\\u0641\\u0629 \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0648\\u0635\\u0648\\u0644 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0631\\u0633\\u0645\\u064a\\u0629. \\u0648\\u0646\\u062a\\u064a\\u062c\\u0629 \\u0644\\u0630\\u0644\\u0643 \\u060c \\u063a\\u0627\\u0644\\u0628\\u064b\\u0627 \\u0645\\u0627 \\u064a\\u0639\\u062a\\u0645\\u062f\\u0648\\u0646 \\u0639\\u0644\\u0649 \\u0622\\u0644\\u064a\\u0627\\u062a \\u063a\\u064a\\u0631 \\u0631\\u0633\\u0645\\u064a\\u0629 \\u0645\\u062b\\u0644 \\u062a\\u0648\\u0641\\u064a\\u0631 \\u0627\\u0644\\u0646\\u0642\\u062f \\u0641\\u064a \\u0627\\u0644\\u0645\\u0646\\u0632\\u0644 \\u060c \\u0623\\u0648 \\u0627\\u0644\\u0627\\u0633\\u062a\\u062b\\u0645\\u0627\\u0631 \\u0641\\u064a \\u0627\\u0644\\u0623\\u0635\\u0648\\u0644 \\u0627\\u0644\\u0623\\u0643\\u062b\\u0631 \\u062e\\u0637\\u0648\\u0631\\u0629 \\u0645\\u062b\\u0644 \\u0627\\u0644\\u0645\\u062c\\u0648\\u0647\\u0631\\u0627\\u062a \\u0623\\u0648 \\u0627\\u0644\\u062b\\u0631\\u0648\\u0629 \\u0627\\u0644\\u062d\\u064a\\u0648\\u0627\\u0646\\u064a\\u0629 \\u060c \\u0623\\u0648 \\u0627\\u0644\\u0627\\u0639\\u062a\\u0645\\u0627\\u062f \\u0639\\u0644\\u0649 \\u0622\\u0644\\u064a\\u0627\\u062a \\u0627\\u0644\\u0627\\u062f\\u062e\\u0627\\u0631 \\u0627\\u0644\\u062c\\u0645\\u0627\\u0639\\u064a \\u063a\\u064a\\u0631 \\u0627\\u0644\\u0631\\u0633\\u0645\\u064a\\u0629. \\u0643\\u0645\\u0627 \\u0623\\u0646 \\u0627\\u0644\\u0646\\u0633\\u0627\\u0621 \\u0623\\u0642\\u0644 \\u0639\\u0631\\u0636\\u0629 \\u0628\\u0643\\u062b\\u064a\\u0631 \\u0645\\u0646 \\u0627\\u0644\\u0631\\u062c\\u0627\\u0644 \\u0644\\u0627\\u062a\\u062e\\u0627\\u0630 \\u0642\\u0631\\u0627\\u0631\\u0627\\u062a \\u0628\\u0634\\u0623\\u0646 \\u0643\\u064a\\u0641\\u064a\\u0629 \\u062a\\u062e\\u0635\\u064a\\u0635 \\u0623\\u062c\\u0648\\u0631\\u0647\\u0646. \\u0648\\u0641\\u0642\\u0627 \\u0644\\u0645\\u0633\\u062d BSR \\u0644\\u0640 500 \\u0639\\u0627\\u0645\\u0644\\u0629 \\u0645\\u0644\\u0627\\u0628\\u0633 \\u0641\\u064a \\u0628\\u0646\\u063a\\u0627\\u0644\\u0648\\u0631 \\u0648\\u062f\\u0644\\u0647\\u064a \\u060c \\u0627\\u0644\\u0647\\u0646\\u062f \\u060c \\u0641\\u0625\\u0646 48 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0627\\u0626\\u0629 \\u0641\\u0642\\u0637 \\u0645\\u0646 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0644\\u0627\\u062a \\u0641\\u064a \\u0627\\u0644\\u0645\\u0644\\u0627\\u0628\\u0633 \\u064a\\u0642\\u0631\\u0631\\u0646 \\u0645\\u0627 \\u064a\\u062c\\u0628 \\u0627\\u0644\\u0642\\u064a\\u0627\\u0645 \\u0628\\u0647 \\u0645\\u0639 \\u0623\\u062c\\u0631\\u0647\\u0646 \\u0627\\u0644\\u0634\\u0647\\u0631\\u064a \\u060c \\u0645\\u0642\\u0627\\u0631\\u0646\\u0629 \\u0628\\u0640 90 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0627\\u0626\\u0629 \\u0645\\u0646 \\u0623\\u0642\\u0631\\u0627\\u0646\\u0647\\u0646 \\u0627\\u0644\\u0630\\u0643\\u0648\\u0631.<\\/p>\\r\\n<p>\\u0628\\u0627\\u0644\\u0646\\u0638\\u0631 \\u0625\\u0644\\u0649 \\u0623\\u0646 \\u0627\\u0644\\u0645\\u0631\\u0623\\u0629 \\u062a\\u0645\\u064a\\u0644 \\u0625\\u0644\\u0649 \\u0627\\u0633\\u062a\\u062b\\u0645\\u0627\\u0631 90 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0627\\u0626\\u0629 \\u0645\\u0646 \\u0623\\u0631\\u0628\\u0627\\u062d\\u0647\\u0627 \\u0645\\u0631\\u0629 \\u0623\\u062e\\u0631\\u0649 \\u0641\\u064a \\u0635\\u062d\\u0629 \\u0623\\u0633\\u0631\\u062a\\u0647\\u0627 \\u0648\\u062a\\u063a\\u0630\\u064a\\u062a\\u0647\\u0627 \\u0648\\u062a\\u0639\\u0644\\u064a\\u0645\\u0647\\u0627 \\u060c \\u0641\\u0625\\u0646 \\u0632\\u064a\\u0627\\u062f\\u0629 \\u0627\\u0644\\u0642\\u062f\\u0631\\u0627\\u062a \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629 \\u0644\\u0644\\u0645\\u0631\\u0623\\u0629 \\u064a\\u0645\\u0643\\u0646 \\u0623\\u0646 \\u064a\\u0624\\u062f\\u064a \\u0625\\u0644\\u0649 \\u0627\\u0632\\u062f\\u0647\\u0627\\u0631 \\u0637\\u0648\\u064a\\u0644 \\u0627\\u0644\\u0623\\u0645\\u062f \\u0644\\u0644\\u0623\\u0633\\u0631 \\u0648\\u0627\\u0644\\u0623\\u0633\\u0631 \\u0648\\u0627\\u0644\\u0645\\u062c\\u062a\\u0645\\u0639\\u0627\\u062a. \\u064a\\u0639\\u0645\\u0644 \\u0628\\u0631\\u0646\\u0627\\u0645\\u062c HERfinance \\u0627\\u0644\\u062a\\u0627\\u0628\\u0639 \\u0644\\u0634\\u0631\\u0643\\u0629 BSR \\u0639\\u0644\\u0649 \\u0632\\u064a\\u0627\\u062f\\u0629 \\u0627\\u0644\\u0648\\u0639\\u064a \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a \\u0648\\u0627\\u0644\\u0648\\u0635\\u0648\\u0644 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629 \\u0628\\u064a\\u0646 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0641\\u0626\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0646\\u0633\\u0627\\u0621.<\\/p>\"}', '2020-05-12 16:23:07', '2020-05-12 16:23:07'),
(10, 1, 10, 14, '{\"en\":\"GOLDEN AGRI RESOURCES AND SUSTAINABILITY\",\"ar\":\"\\u0627\\u0644\\u0645\\u0648\\u0627\\u0631\\u062f \\u0627\\u0644\\u0632\\u0631\\u0627\\u0639\\u064a\\u0629 \\u0627\\u0644\\u0630\\u0647\\u0628\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0627\\u0633\\u062a\\u062f\\u0627\\u0645\\u0629\"}', '{\"en\":\"<p><strong>Series:<\\/strong>&nbsp;Global Network for Advanced Management in conjunction with the National University Of Singapore Business School<br \\/><strong>Format:&nbsp;<\\/strong>Raw, online case<br \\/><strong>Topics:<\\/strong>&nbsp;Competition and Strategy, Economics, Public Policy, Regulation, Global Business, Agriculture, Sustainability<br \\/>Initial date of publication: March 2013<br \\/><strong>Geographic setting of case:<\\/strong>&nbsp;Indonesia, Singapore<br \\/><strong>Access:<\\/strong>&nbsp; Available to educational institutions by emailing&nbsp;<a href=\\\"mailto:case.comments@yale.edu\\\">case.comments@yale.edu<\\/a>.<br \\/><br \\/><strong>Overview:&nbsp;<\\/strong>While the use of palm oil has been documented since ancient times, it is only in the past few decades that this tropical product has taken off in the international market. An invisible component of many products, palm oil can be found in cookies, in chocolates, in soaps, in shampoos, and even in biofuel. This wide range of uses has stimulated cultivation and oil extraction; annual global production has increased more than nine-fold since 1980. By the 2000s, palm oil had become the most heavily traded edible oil in the world.<br \\/><br \\/>Golden Agri Resources (GAR) has been in the forefront of this palm oil boom in Indonesia. Founded in 1996 by the influential Widjaja&nbsp; family (operators of the Sinar Mas business group), GAR became the holding company for the family&rsquo;s agribusinesses, including its Indonesian subsidiary PT SMART. The company has assembled an array of assets through the entire palm oil value chain, from growing seedlings and managing over 450,000 hectares of plantation lands to running extraction and refining mills and marketing its own brand of cooking oil. While GAR is headquartered in Singapore, the company&rsquo;s palm plantations and much of its processing facilities were in Indonesia. By 2009, the expansion of GAR and other companies had made Indonesia the world&rsquo;s leading exporter of crude palm oil.<\\/p>\",\"ar\":\"<p>\\u0627\\u0644\\u0633\\u0644\\u0633\\u0644\\u0629: \\u0627\\u0644\\u0634\\u0628\\u0643\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645\\u064a\\u0629 \\u0644\\u0644\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u062a\\u0642\\u062f\\u0645\\u0629 \\u0628\\u0627\\u0644\\u0627\\u0634\\u062a\\u0631\\u0627\\u0643 \\u0645\\u0639 \\u0643\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0623\\u0639\\u0645\\u0627\\u0644 \\u0628\\u062c\\u0627\\u0645\\u0639\\u0629 \\u0633\\u0646\\u063a\\u0627\\u0641\\u0648\\u0631\\u0629 \\u0627\\u0644\\u0648\\u0637\\u0646\\u064a\\u0629<br \\/>\\u0634\\u0643\\u0644: \\u062d\\u0627\\u0644\\u0629 \\u0627\\u0644\\u062e\\u0627\\u0645 \\u060c \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0625\\u0646\\u062a\\u0631\\u0646\\u062a<br \\/>\\u0627\\u0644\\u0645\\u0648\\u0627\\u0636\\u064a\\u0639: \\u0627\\u0644\\u0645\\u0646\\u0627\\u0641\\u0633\\u0629 \\u0648\\u0627\\u0644\\u0627\\u0633\\u062a\\u0631\\u0627\\u062a\\u064a\\u062c\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0627\\u0642\\u062a\\u0635\\u0627\\u062f \\u0648\\u0627\\u0644\\u0633\\u064a\\u0627\\u0633\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0646\\u0638\\u064a\\u0645 \\u0648\\u0627\\u0644\\u0623\\u0639\\u0645\\u0627\\u0644 \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0632\\u0631\\u0627\\u0639\\u0629 \\u0648\\u0627\\u0644\\u0627\\u0633\\u062a\\u062f\\u0627\\u0645\\u0629<br \\/>\\u0627\\u0644\\u062a\\u0627\\u0631\\u064a\\u062e \\u0627\\u0644\\u0623\\u0648\\u0644\\u064a \\u0644\\u0644\\u0646\\u0634\\u0631: \\u0645\\u0627\\u0631\\u0633 2013<br \\/>\\u0627\\u0644\\u0645\\u0648\\u0642\\u0639 \\u0627\\u0644\\u062c\\u063a\\u0631\\u0627\\u0641\\u064a \\u0644\\u0644\\u062d\\u0627\\u0644\\u0629: \\u0625\\u0646\\u062f\\u0648\\u0646\\u064a\\u0633\\u064a\\u0627 \\u060c \\u0633\\u0646\\u063a\\u0627\\u0641\\u0648\\u0631\\u0629<br \\/>\\u0627\\u0644\\u0648\\u0635\\u0648\\u0644: \\u0645\\u062a\\u0627\\u062d \\u0644\\u0644\\u0645\\u0624\\u0633\\u0633\\u0627\\u062a \\u0627\\u0644\\u062a\\u0639\\u0644\\u064a\\u0645\\u064a\\u0629 \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0628\\u0631\\u064a\\u062f \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a case.comments@yale.edu.<\\/p>\\r\\n<p>\\u0646\\u0638\\u0631\\u0629 \\u0639\\u0627\\u0645\\u0629: \\u0641\\u064a \\u062d\\u064a\\u0646 \\u062a\\u0645 \\u062a\\u0648\\u062b\\u064a\\u0642 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0632\\u064a\\u062a \\u0627\\u0644\\u0646\\u062e\\u064a\\u0644 \\u0645\\u0646\\u0630 \\u0627\\u0644\\u0639\\u0635\\u0648\\u0631 \\u0627\\u0644\\u0642\\u062f\\u064a\\u0645\\u0629 \\u060c \\u0625\\u0644\\u0627 \\u0623\\u0646\\u0647 \\u0641\\u064a \\u0627\\u0644\\u0639\\u0642\\u0648\\u062f \\u0627\\u0644\\u0642\\u0644\\u064a\\u0644\\u0629 \\u0627\\u0644\\u0645\\u0627\\u0636\\u064a\\u0629 \\u0641\\u0642\\u0637 \\u0627\\u0646\\u0637\\u0644\\u0642 \\u0647\\u0630\\u0627 \\u0627\\u0644\\u0645\\u0646\\u062a\\u062c \\u0627\\u0644\\u0627\\u0633\\u062a\\u0648\\u0627\\u0626\\u064a \\u0641\\u064a \\u0627\\u0644\\u0633\\u0648\\u0642 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629. \\u064a\\u0645\\u0643\\u0646 \\u0627\\u0644\\u0639\\u062b\\u0648\\u0631 \\u0639\\u0644\\u0649 \\u0632\\u064a\\u062a \\u0627\\u0644\\u0646\\u062e\\u064a\\u0644 \\u060c \\u0648\\u0647\\u0648 \\u0645\\u0643\\u0648\\u0646 \\u063a\\u064a\\u0631 \\u0645\\u0631\\u0626\\u064a \\u0644\\u0644\\u0639\\u062f\\u064a\\u062f \\u0645\\u0646 \\u0627\\u0644\\u0645\\u0646\\u062a\\u062c\\u0627\\u062a \\u060c \\u0641\\u064a \\u0645\\u0644\\u0641\\u0627\\u062a \\u062a\\u0639\\u0631\\u064a\\u0641 \\u0627\\u0644\\u0627\\u0631\\u062a\\u0628\\u0627\\u0637 \\u0648\\u0627\\u0644\\u0634\\u0648\\u0643\\u0648\\u0644\\u0627\\u062a\\u0629 \\u0648\\u0627\\u0644\\u0635\\u0627\\u0628\\u0648\\u0646 \\u0648\\u0627\\u0644\\u0634\\u0627\\u0645\\u0628\\u0648 \\u0648\\u062d\\u062a\\u0649 \\u0641\\u064a \\u0627\\u0644\\u0648\\u0642\\u0648\\u062f \\u0627\\u0644\\u062d\\u064a\\u0648\\u064a. \\u0648\\u0642\\u062f \\u062d\\u0641\\u0632\\u062a \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u0648\\u0627\\u0633\\u0639\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645\\u0627\\u062a \\u0627\\u0644\\u0632\\u0631\\u0627\\u0639\\u0629 \\u0648\\u0627\\u0633\\u062a\\u062e\\u0631\\u0627\\u062c \\u0627\\u0644\\u0646\\u0641\\u0637 \\u061b \\u0627\\u0632\\u062f\\u0627\\u062f \\u0627\\u0644\\u0625\\u0646\\u062a\\u0627\\u062c \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645\\u064a \\u0627\\u0644\\u0633\\u0646\\u0648\\u064a \\u0628\\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 \\u062a\\u0633\\u0639\\u0629 \\u0623\\u0636\\u0639\\u0627\\u0641 \\u0645\\u0646\\u0630 \\u0639\\u0627\\u0645 1980. \\u0648\\u0628\\u062d\\u0644\\u0648\\u0644 \\u0639\\u0627\\u0645 2000 \\u060c \\u0623\\u0635\\u0628\\u062d \\u0632\\u064a\\u062a \\u0627\\u0644\\u0646\\u062e\\u064a\\u0644 \\u0645\\u0646 \\u0623\\u0643\\u062b\\u0631 \\u0632\\u064a\\u0648\\u062a \\u0627\\u0644\\u0637\\u0639\\u0627\\u0645 \\u062a\\u062f\\u0627\\u0648\\u0644\\u064b\\u0627 \\u0641\\u064a \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645.<\\/p>\\r\\n<p>\\u0643\\u0627\\u0646\\u062a Golden Agri Resources (GAR) \\u0641\\u064a \\u0637\\u0644\\u064a\\u0639\\u0629 \\u0627\\u0632\\u062f\\u0647\\u0627\\u0631 \\u0632\\u064a\\u062a \\u0627\\u0644\\u0646\\u062e\\u064a\\u0644 \\u0641\\u064a \\u0625\\u0646\\u062f\\u0648\\u0646\\u064a\\u0633\\u064a\\u0627. \\u062a\\u0623\\u0633\\u0633\\u062a \\u0641\\u064a \\u0639\\u0627\\u0645 1996 \\u0645\\u0646 \\u0642\\u0628\\u0644 \\u0639\\u0627\\u0626\\u0644\\u0629 Widjaja \\u0627\\u0644\\u0645\\u0624\\u062b\\u0631\\u0629 (\\u0645\\u0634\\u063a\\u0644\\u064a \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u0623\\u0639\\u0645\\u0627\\u0644 Sinar Mas) \\u060c \\u0623\\u0635\\u0628\\u062d\\u062a GAR \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u0627\\u0644\\u0642\\u0627\\u0628\\u0636\\u0629 \\u0644\\u0644\\u0623\\u0639\\u0645\\u0627\\u0644 \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a\\u0629 \\u0627\\u0644\\u0632\\u0631\\u0627\\u0639\\u064a\\u0629 \\u0644\\u0644\\u0639\\u0627\\u0626\\u0644\\u0629 \\u060c \\u0628\\u0645\\u0627 \\u0641\\u064a \\u0630\\u0644\\u0643 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u0627\\u0644\\u0641\\u0631\\u0639\\u064a\\u0629 \\u0627\\u0644\\u0625\\u0646\\u062f\\u0648\\u0646\\u064a\\u0633\\u064a\\u0629 PT SMART. \\u062c\\u0645\\u0639\\u062a \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0623\\u0635\\u0648\\u0644 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0633\\u0644\\u0633\\u0644\\u0629 \\u0642\\u064a\\u0645\\u0629 \\u0632\\u064a\\u062a \\u0627\\u0644\\u0646\\u062e\\u064a\\u0644 \\u0628\\u0623\\u0643\\u0645\\u0644\\u0647\\u0627 \\u060c \\u0645\\u0646 \\u0632\\u0631\\u0627\\u0639\\u0629 \\u0627\\u0644\\u0634\\u062a\\u0644\\u0627\\u062a \\u0648\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 450\\u060c000 \\u0647\\u0643\\u062a\\u0627\\u0631 \\u0645\\u0646 \\u0623\\u0631\\u0627\\u0636\\u064a \\u0627\\u0644\\u0645\\u0632\\u0627\\u0631\\u0639 \\u0625\\u0644\\u0649 \\u062a\\u0634\\u063a\\u064a\\u0644 \\u0645\\u0635\\u0627\\u0646\\u0639 \\u0627\\u0644\\u0627\\u0633\\u062a\\u062e\\u0631\\u0627\\u062c \\u0648\\u0627\\u0644\\u062a\\u0643\\u0631\\u064a\\u0631 \\u0648\\u062a\\u0633\\u0648\\u064a\\u0642 \\u0639\\u0644\\u0627\\u0645\\u062a\\u0647\\u0627 \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a\\u0629 \\u0627\\u0644\\u062e\\u0627\\u0635\\u0629 \\u0644\\u0632\\u064a\\u062a \\u0627\\u0644\\u0637\\u0647\\u064a. \\u0628\\u064a\\u0646\\u0645\\u0627 \\u064a\\u0642\\u0639 \\u0627\\u0644\\u0645\\u0642\\u0631 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a \\u0644\\u0634\\u0631\\u0643\\u0629 GAR \\u0641\\u064a \\u0633\\u0646\\u063a\\u0627\\u0641\\u0648\\u0631\\u0629 \\u060c \\u0643\\u0627\\u0646\\u062a \\u0645\\u0632\\u0627\\u0631\\u0639 \\u0646\\u062e\\u064a\\u0644 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0629 \\u0648\\u0645\\u0639\\u0638\\u0645 \\u0645\\u0631\\u0627\\u0641\\u0642 \\u0627\\u0644\\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0641\\u064a \\u0625\\u0646\\u062f\\u0648\\u0646\\u064a\\u0633\\u064a\\u0627. \\u0628\\u062d\\u0644\\u0648\\u0644 \\u0639\\u0627\\u0645 2009 \\u060c \\u062c\\u0639\\u0644 \\u062a\\u0648\\u0633\\u0639 \\u0634\\u0631\\u0643\\u0629 GAR \\u0648\\u0634\\u0631\\u0643\\u0627\\u062a \\u0623\\u062e\\u0631\\u0649 \\u0625\\u0646\\u062f\\u0648\\u0646\\u064a\\u0633\\u064a\\u0627 \\u0645\\u0646 \\u0623\\u0643\\u0628\\u0631 \\u0645\\u0635\\u062f\\u0631 \\u0644\\u0632\\u064a\\u062a \\u0627\\u0644\\u0646\\u062e\\u064a\\u0644 \\u0627\\u0644\\u062e\\u0627\\u0645 \\u0641\\u064a \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645.<\\/p>\"}', '2020-05-12 16:24:20', '2020-05-12 16:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `case_titles`
--

CREATE TABLE `case_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_titles`
--

INSERT INTO `case_titles` (`id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"Case Studies | General International Group\",\"ar\":\"\\u062f\\u0631\\u0627\\u0633\\u0627\\u062a \\u062d\\u0627\\u0644\\u0629 | \\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629\"}', '2020-05-04 08:23:33', '2020-05-04 08:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `category_facilities`
--

CREATE TABLE `category_facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED DEFAULT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_facilities`
--

INSERT INTO `category_facilities` (`id`, `type_id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 500, 1, '{\"en\":\"Facilities\",\"ar\":\"\\u0645\\u0631\\u0627\\u0641\\u0642\"}', '2020-05-07 10:47:07', '2020-05-09 12:59:21'),
(2, 600, 1, '{\"en\":\"ELECTRICAL\",\"ar\":\"\\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0621\"}', '2020-05-07 10:47:49', '2020-05-07 10:47:49'),
(3, 600, 1, '{\"en\":\"SOFT\",\"ar\":\"\\u0646\\u0627\\u0639\\u0645\"}', '2020-05-07 10:48:10', '2020-05-09 12:59:39'),
(4, 700, 1, '{\"en\":\"HVAC\",\"ar\":\"HVAC\"}', '2020-05-07 10:49:01', '2020-05-07 10:49:01'),
(5, 700, 1, '{\"en\":\"PLUMBING\",\"ar\":\"\\u0627\\u0644\\u0633\\u0628\\u0627\\u0643\\u0629\"}', '2020-05-07 10:49:24', '2020-05-07 10:49:24'),
(6, 800, 1, '{\"en\":\"CIVIL\",\"ar\":\"\\u0645\\u062f\\u0646\\u064a\"}', '2020-05-07 10:49:50', '2020-05-09 12:59:57');

-- --------------------------------------------------------

--
-- Table structure for table `category_fires`
--

CREATE TABLE `category_fires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED DEFAULT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_fires`
--

INSERT INTO `category_fires` (`id`, `type_id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 100, 1, '{\"en\":\"Fire\",\"ar\":\"\\u0646\\u0627\\u0631\"}', '2020-05-07 09:54:48', '2020-05-08 16:08:48'),
(2, 100, 1, '{\"en\":\"Accessories\",\"ar\":\"\\u0645\\u0633\\u062a\\u0644\\u0632\\u0645\\u0627\\u062a\"}', '2020-05-07 09:57:16', '2020-05-07 09:57:16'),
(4, 200, 1, '{\"en\":\"INTERIORS\",\"ar\":\"\\u0627\\u0644\\u062f\\u0627\\u062e\\u0644\\u064a\\u0629\"}', '2020-05-07 09:58:18', '2020-05-07 09:58:18'),
(5, 200, 1, '{\"en\":\"FACADES\",\"ar\":\"\\u0648\\u0627\\u062c\\u0647\\u0627\\u062a\"}', '2020-05-07 09:58:45', '2020-05-09 07:46:56'),
(8, 202, 1, '{\"en\":\"Structured Cabling\",\"ar\":null}', '2020-05-19 07:23:30', '2020-05-19 07:23:30'),
(9, 202, 1, '{\"en\":\"IP Intercom\",\"ar\":null}', '2020-05-19 07:23:45', '2020-05-19 07:23:45'),
(10, 202, 1, '{\"en\":\"IP TV\",\"ar\":null}', '2020-05-19 07:24:00', '2020-05-19 07:24:00'),
(11, 202, 1, '{\"en\":\"IP Telephone\",\"ar\":null}', '2020-05-19 07:24:15', '2020-05-19 07:24:15'),
(12, 100, 1, '{\"en\":\"Detection\",\"ar\":null}', '2020-05-19 07:25:10', '2020-05-19 07:25:10'),
(13, 100, 1, '{\"en\":\"Stand Alone \\/ Wireless Fire Detection\",\"ar\":\"Stand Alone \\/ Wireless Fire Detection\"}', '2020-05-19 07:25:34', '2020-05-19 07:32:05'),
(14, 100, 1, '{\"en\":\"Voice Evacuation\",\"ar\":\"Voice Evacuation\"}', '2020-05-19 07:26:15', '2020-05-19 07:32:33'),
(15, 100, 1, '{\"en\":\"Gas Detection\",\"ar\":null}', '2020-05-19 07:26:40', '2020-05-19 07:26:40'),
(16, 100, 1, '{\"en\":\"Emergency & Exit\",\"ar\":\"Emergency & Exit\"}', '2020-05-19 07:27:07', '2020-05-19 07:34:23'),
(17, 100, 1, '{\"en\":\"Fire Fighting Equipment\",\"ar\":null}', '2020-05-19 07:27:32', '2020-05-19 07:33:12'),
(18, 100, 1, '{\"en\":\"Fire Fighting Pumps\",\"ar\":null}', '2020-05-19 07:27:58', '2020-05-19 07:33:26'),
(19, 100, 1, '{\"en\":\"Fire Suppression\",\"ar\":null}', '2020-05-19 07:28:27', '2020-05-19 07:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `category_securities`
--

CREATE TABLE `category_securities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED DEFAULT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_securities`
--

INSERT INTO `category_securities` (`id`, `type_id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 100, 1, '{\"en\":\"ELV\",\"ar\":\"ELV\"}', '2020-05-07 10:15:23', '2020-05-07 10:16:15'),
(2, 100, 1, '{\"en\":\"SECURITY\",\"ar\":\"\\u0627\\u0644\\u0623\\u0645\\u0627\\u0646\"}', '2020-05-07 10:16:04', '2020-05-07 10:16:04'),
(3, 200, 1, '{\"en\":\"Automation\",\"ar\":\"\\u0627\\u0644\\u0623\\u062a\\u0645\\u062a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0643\\u0627\\u0645\\u0644\"}', '2020-05-07 10:16:49', '2020-05-09 07:48:29'),
(4, 200, 1, '{\"en\":\"Building\",\"ar\":\"\\u0628\\u0646\\u0627\\u0621\"}', '2020-05-07 10:17:13', '2020-05-07 10:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `category_waters`
--

CREATE TABLE `category_waters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED DEFAULT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_waters`
--

INSERT INTO `category_waters` (`id`, `type_id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 100, 1, '{\"en\":\"FILTRATION\",\"ar\":\"\\u0627\\u0644\\u062a\\u0631\\u0634\\u064a\\u062d\"}', '2020-05-07 10:32:36', '2020-05-07 10:32:36'),
(2, 100, 1, '{\"en\":\"POOL\",\"ar\":\"\\u062d\\u0648\\u0636 \\u0627\\u0644\\u0633\\u0628\\u0627\\u062d\\u0629\"}', '2020-05-07 10:33:12', '2020-05-07 10:33:12'),
(3, 200, 1, '{\"en\":\"PLANTS\",\"ar\":\"\\u0646\\u0628\\u0627\\u062a\\u0627\\u062a\"}', '2020-05-07 10:33:37', '2020-05-07 10:33:37'),
(4, 200, 1, '{\"en\":\"CHEMICALS\",\"ar\":\"\\u0645\\u0648\\u0627\\u062f \\u0643\\u064a\\u0645\\u064a\\u0627\\u0626\\u064a\\u0629\"}', '2020-05-07 10:33:59', '2020-05-07 10:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `concept_facilities`
--

CREATE TABLE `concept_facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `concept_facilities`
--

INSERT INTO `concept_facilities` (`id`, `is_publish`, `icon`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'icon-flag', '{\"en\":\"WE INSPECT\",\"ar\":\"\\u0646\\u062d\\u0646 \\u0646\\u0641\\u062d\\u0635\"}', '{\"en\":\"<p style=\\\"text-align: center;\\\"><strong class=\\\"text-dark\\\">General International Group&rsquo;s<\\/strong>&nbsp;corporate compliance program is designed to detect and prevent violations of laws by the agents, employees, officers and directors within our operations.<\\/p>\",\"ar\":\"<p style=\\\"text-align: center;\\\">\\u062a\\u0645 \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0628\\u0631\\u0646\\u0627\\u0645\\u062c \\u0627\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0627\\u0644\\u0639\\u0627\\u0645 \\u0644\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0644\\u0644\\u0643\\u0634\\u0641 \\u0639\\u0646 \\u0627\\u0646\\u062a\\u0647\\u0627\\u0643\\u0627\\u062a \\u0627\\u0644\\u0642\\u0648\\u0627\\u0646\\u064a\\u0646 \\u0648\\u0645\\u0646\\u0639\\u0647\\u0627 \\u0645\\u0646 \\u0642\\u0628\\u0644 \\u0627\\u0644\\u0648\\u0643\\u0644\\u0627\\u0621 \\u0648\\u0627\\u0644\\u0645\\u0648\\u0638\\u0641\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0636\\u0628\\u0627\\u0637 \\u0648\\u0627\\u0644\\u0645\\u062f\\u064a\\u0631\\u064a\\u0646 \\u0641\\u064a \\u0639\\u0645\\u0644\\u064a\\u0627\\u062a\\u0646\\u0627.<\\/p>\"}', '2020-05-10 03:33:01', '2020-05-18 02:21:10'),
(2, 1, 'icon-clock', '{\"en\":\"WE SERVICE\",\"ar\":\"\\u0646\\u062d\\u0646 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0629\"}', '{\"en\":\"<p style=\\\"text-align: center;\\\"><strong class=\\\"text-dark\\\">General International Group&rsquo;s<\\/strong>&nbsp;corporate compliance program is designed to detect and prevent violations of laws by the agents, employees, officers and directors within our operations.<\\/p>\",\"ar\":\"<p style=\\\"text-align: center;\\\">\\u062a\\u0645 \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0628\\u0631\\u0646\\u0627\\u0645\\u062c \\u0627\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0627\\u0644\\u0639\\u0627\\u0645 \\u0644\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0644\\u0644\\u0643\\u0634\\u0641 \\u0639\\u0646 \\u0627\\u0646\\u062a\\u0647\\u0627\\u0643\\u0627\\u062a \\u0627\\u0644\\u0642\\u0648\\u0627\\u0646\\u064a\\u0646 \\u0648\\u0645\\u0646\\u0639\\u0647\\u0627 \\u0645\\u0646 \\u0642\\u0628\\u0644 \\u0627\\u0644\\u0648\\u0643\\u0644\\u0627\\u0621 \\u0648\\u0627\\u0644\\u0645\\u0648\\u0638\\u0641\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0636\\u0628\\u0627\\u0637 \\u0648\\u0627\\u0644\\u0645\\u062f\\u064a\\u0631\\u064a\\u0646 \\u0641\\u064a \\u0639\\u0645\\u0644\\u064a\\u0627\\u062a\\u0646\\u0627.<\\/p>\"}', '2020-05-10 03:33:45', '2020-05-18 02:52:56'),
(3, 1, 'icon-hotairballoon', '{\"en\":\"WE PROTECT\",\"ar\":\"\\u0646\\u062d\\u0646 \\u062d\\u0645\\u0627\\u064a\\u0629\"}', '{\"en\":\"<p style=\\\"text-align: center;\\\"><strong class=\\\"text-dark\\\">General International Group&rsquo;s<\\/strong>&nbsp;corporate compliance program is designed to detect and prevent violations of laws by the agents, employees, officers and directors within our operations.<\\/p>\",\"ar\":\"<p style=\\\"text-align: center;\\\">\\u062a\\u0645 \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0628\\u0631\\u0646\\u0627\\u0645\\u062c \\u0627\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0627\\u0644\\u0639\\u0627\\u0645 \\u0644\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0644\\u0644\\u0643\\u0634\\u0641 \\u0639\\u0646 \\u0627\\u0646\\u062a\\u0647\\u0627\\u0643\\u0627\\u062a \\u0627\\u0644\\u0642\\u0648\\u0627\\u0646\\u064a\\u0646 \\u0648\\u0645\\u0646\\u0639\\u0647\\u0627 \\u0645\\u0646 \\u0642\\u0628\\u0644 \\u0627\\u0644\\u0648\\u0643\\u0644\\u0627\\u0621 \\u0648\\u0627\\u0644\\u0645\\u0648\\u0638\\u0641\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0636\\u0628\\u0627\\u0637 \\u0648\\u0627\\u0644\\u0645\\u062f\\u064a\\u0631\\u064a\\u0646 \\u0641\\u064a \\u0639\\u0645\\u0644\\u064a\\u0627\\u062a\\u0646\\u0627.<\\/p>\"}', '2020-05-10 03:34:29', '2020-05-18 02:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `concept_fires`
--

CREATE TABLE `concept_fires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `concept_fires`
--

INSERT INTO `concept_fires` (`id`, `is_publish`, `icon`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'icon-flag', '{\"en\":\"WE INSPECT\",\"ar\":\"\\u0646\\u062d\\u0646 \\u0646\\u062a\\u0641\\u0642\\u062f\"}', '{\"en\":\"<p style=\\\"text-align: center;\\\">Providers of exceptional end to end specialized engineering solutions across MEEA region<\\/p>\",\"ar\":\"<p style=\\\"text-align: center;\\\">\\u0645\\u0632\\u0648\\u062f\\u064a \\u0627\\u0644\\u062d\\u0644\\u0648\\u0644 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0645\\u0646 \\u0645\\u0646\\u0637\\u0642\\u0629 \\u0625\\u0644\\u0649 \\u0623\\u062e\\u0631\\u0649 \\u0639\\u0628\\u0631 \\u0645\\u0646\\u0637\\u0642\\u0629 \\u0627\\u0644\\u0634\\u0631\\u0642 \\u0627\\u0644\\u0623\\u0648\\u0633\\u0637 \\u0648\\u0623\\u0641\\u0631\\u064a\\u0642\\u064a\\u0627<\\/p>\"}', '2020-05-10 03:19:25', '2020-05-18 02:19:38'),
(2, 1, 'icon-clock', '{\"en\":\"WE SERVICE\",\"ar\":\"\\u0646\\u062d\\u0646 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0629\"}', '{\"en\":\"<p style=\\\"text-align: center;\\\">To render effective &amp; Reliable specialized engineering solutions as a collaborative and valued partner<\\/p>\",\"ar\":\"<p style=\\\"text-align: center;\\\">\\u0644\\u062a\\u0642\\u062f\\u064a\\u0645 \\u062d\\u0644\\u0648\\u0644 \\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0641\\u0639\\u0627\\u0644\\u0629 \\u0648\\u0645\\u0648\\u062b\\u0648\\u0642\\u0629 \\u0643\\u0634\\u0631\\u064a\\u0643 \\u0645\\u062a\\u0639\\u0627\\u0648\\u0646 \\u0648\\u0642\\u064a\\u0645<\\/p>\"}', '2020-05-10 03:20:20', '2020-05-18 02:19:48'),
(3, 1, 'icon-hotairballoon', '{\"en\":\"WE PROTECT\",\"ar\":\"\\u0646\\u062d\\u0646 \\u062d\\u0645\\u0627\\u064a\\u0629\"}', '{\"en\":\"<p style=\\\"text-align: center;\\\">To render effective &amp; Reliable specialized engineering solutions as a collaborative and valued partner<\\/p>\",\"ar\":\"<p style=\\\"text-align: center;\\\">\\u0645\\u0632\\u0648\\u062f\\u064a \\u0627\\u0644\\u062d\\u0644\\u0648\\u0644 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0645\\u0646 \\u0645\\u0646\\u0637\\u0642\\u0629 \\u0625\\u0644\\u0649 \\u0623\\u062e\\u0631\\u0649 \\u0639\\u0628\\u0631 \\u0645\\u0646\\u0637\\u0642\\u0629 \\u0627\\u0644\\u0634\\u0631\\u0642 \\u0627\\u0644\\u0623\\u0648\\u0633\\u0637 \\u0648\\u0623\\u0641\\u0631\\u064a\\u0642\\u064a\\u0627<\\/p>\"}', '2020-05-10 03:21:26', '2020-05-18 02:19:57');

-- --------------------------------------------------------

--
-- Table structure for table `concept_securities`
--

CREATE TABLE `concept_securities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `concept_securities`
--

INSERT INTO `concept_securities` (`id`, `is_publish`, `icon`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'icon-flag', '{\"en\":\"WE INSPECT\",\"ar\":\"\\u0646\\u062d\\u0646 \\u0646\\u0641\\u062d\\u0635\"}', '{\"en\":\"<p style=\\\"text-align: center;\\\"><strong class=\\\"text-dark\\\">General International Group&rsquo;s<\\/strong>&nbsp;corporate compliance program is designed to detect and prevent violations of laws by the agents, employees, officers and directors within our operations.<\\/p>\",\"ar\":\"<p style=\\\"text-align: center;\\\">\\u062a\\u0645 \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0628\\u0631\\u0646\\u0627\\u0645\\u062c \\u0627\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0627\\u0644\\u0639\\u0627\\u0645 \\u0644\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0644\\u0644\\u0643\\u0634\\u0641 \\u0639\\u0646 \\u0627\\u0646\\u062a\\u0647\\u0627\\u0643\\u0627\\u062a \\u0627\\u0644\\u0642\\u0648\\u0627\\u0646\\u064a\\u0646 \\u0648\\u0645\\u0646\\u0639\\u0647\\u0627 \\u0645\\u0646 \\u0642\\u0628\\u0644 \\u0627\\u0644\\u0648\\u0643\\u0644\\u0627\\u0621 \\u0648\\u0627\\u0644\\u0645\\u0648\\u0638\\u0641\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0636\\u0628\\u0627\\u0637 \\u0648\\u0627\\u0644\\u0645\\u062f\\u064a\\u0631\\u064a\\u0646 \\u0641\\u064a \\u0639\\u0645\\u0644\\u064a\\u0627\\u062a\\u0646\\u0627.<\\/p>\"}', '2020-05-10 03:23:27', '2020-05-18 02:20:09'),
(2, 1, 'icon-clock', '{\"en\":\"WE SERVICE\",\"ar\":\"\\u0646\\u062d\\u0646 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0629\"}', '{\"en\":\"<p style=\\\"text-align: center;\\\"><strong class=\\\"text-dark\\\">General International Group&rsquo;s<\\/strong>&nbsp;corporate compliance program is designed to detect and prevent violations of laws by the agents, employees, officers and directors within our operations.<\\/p>\",\"ar\":\"<p style=\\\"text-align: center;\\\">\\u062a\\u0645 \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0628\\u0631\\u0646\\u0627\\u0645\\u062c \\u0627\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0627\\u0644\\u0639\\u0627\\u0645 \\u0644\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0644\\u0644\\u0643\\u0634\\u0641 \\u0639\\u0646 \\u0627\\u0646\\u062a\\u0647\\u0627\\u0643\\u0627\\u062a \\u0627\\u0644\\u0642\\u0648\\u0627\\u0646\\u064a\\u0646 \\u0648\\u0645\\u0646\\u0639\\u0647\\u0627 \\u0645\\u0646 \\u0642\\u0628\\u0644 \\u0627\\u0644\\u0648\\u0643\\u0644\\u0627\\u0621 \\u0648\\u0627\\u0644\\u0645\\u0648\\u0638\\u0641\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0636\\u0628\\u0627\\u0637 \\u0648\\u0627\\u0644\\u0645\\u062f\\u064a\\u0631\\u064a\\u0646 \\u0641\\u064a \\u0639\\u0645\\u0644\\u064a\\u0627\\u062a\\u0646\\u0627.<\\/p>\"}', '2020-05-10 03:24:10', '2020-05-18 02:20:17'),
(3, 1, 'icon-hotairballoon', '{\"en\":\"WE PROTECT\",\"ar\":\"\\u0646\\u062d\\u0646 \\u062d\\u0645\\u0627\\u064a\\u0629\"}', '{\"en\":\"<p style=\\\"text-align: center;\\\"><strong class=\\\"text-dark\\\">General International Group&rsquo;s<\\/strong>&nbsp;corporate compliance program is designed to detect and prevent violations of laws by the agents, employees, officers and directors within our operations.<\\/p>\",\"ar\":\"<p style=\\\"text-align: center;\\\">\\u062a\\u0645 \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0628\\u0631\\u0646\\u0627\\u0645\\u062c \\u0627\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0627\\u0644\\u0639\\u0627\\u0645 \\u0644\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0644\\u0644\\u0643\\u0634\\u0641 \\u0639\\u0646 \\u0627\\u0646\\u062a\\u0647\\u0627\\u0643\\u0627\\u062a \\u0627\\u0644\\u0642\\u0648\\u0627\\u0646\\u064a\\u0646 \\u0648\\u0645\\u0646\\u0639\\u0647\\u0627 \\u0645\\u0646 \\u0642\\u0628\\u0644 \\u0627\\u0644\\u0648\\u0643\\u0644\\u0627\\u0621 \\u0648\\u0627\\u0644\\u0645\\u0648\\u0638\\u0641\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0636\\u0628\\u0627\\u0637 \\u0648\\u0627\\u0644\\u0645\\u062f\\u064a\\u0631\\u064a\\u0646 \\u0641\\u064a \\u0639\\u0645\\u0644\\u064a\\u0627\\u062a\\u0646\\u0627.<\\/p>\"}', '2020-05-10 03:25:05', '2020-05-18 02:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `concept_titles`
--

CREATE TABLE `concept_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `concept_titles`
--

INSERT INTO `concept_titles` (`id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"WHY CHOOSE US?\",\"ar\":\"\\u0644\\u0645\\u0627\\u0630\\u0627 \\u0623\\u062e\\u062a\\u0631\\u062a\\u0646\\u0627\\u061f\"}', '2020-05-10 03:58:39', '2020-05-10 03:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `concept_waters`
--

CREATE TABLE `concept_waters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `concept_waters`
--

INSERT INTO `concept_waters` (`id`, `is_publish`, `icon`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'icon-flag', '{\"en\":\"WE INSPECT\",\"ar\":\"\\u0646\\u062d\\u0646 \\u0646\\u0641\\u062d\\u0635\"}', '{\"en\":\"<p style=\\\"text-align: center;\\\"><strong class=\\\"text-dark\\\">General International Group&rsquo;s<\\/strong>&nbsp;corporate compliance program is designed to detect and prevent violations of laws by the agents, employees, officers and directors within our operations.<\\/p>\",\"ar\":\"<p style=\\\"text-align: center;\\\">\\u062a\\u0645 \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0628\\u0631\\u0646\\u0627\\u0645\\u062c \\u0627\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0627\\u0644\\u0639\\u0627\\u0645 \\u0644\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0644\\u0644\\u0643\\u0634\\u0641 \\u0639\\u0646 \\u0627\\u0646\\u062a\\u0647\\u0627\\u0643\\u0627\\u062a \\u0627\\u0644\\u0642\\u0648\\u0627\\u0646\\u064a\\u0646 \\u0648\\u0645\\u0646\\u0639\\u0647\\u0627 \\u0645\\u0646 \\u0642\\u0628\\u0644 \\u0627\\u0644\\u0648\\u0643\\u0644\\u0627\\u0621 \\u0648\\u0627\\u0644\\u0645\\u0648\\u0638\\u0641\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0636\\u0628\\u0627\\u0637 \\u0648\\u0627\\u0644\\u0645\\u062f\\u064a\\u0631\\u064a\\u0646 \\u0641\\u064a \\u0639\\u0645\\u0644\\u064a\\u0627\\u062a\\u0646\\u0627.<\\/p>\"}', '2020-05-10 03:27:19', '2020-05-18 02:20:38'),
(2, 1, 'icon-clock', '{\"en\":\"WE SERVICE\",\"ar\":\"\\u0646\\u062d\\u0646 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0629\"}', '{\"en\":\"<p style=\\\"text-align: center;\\\"><strong class=\\\"text-dark\\\">General International Group&rsquo;s<\\/strong>&nbsp;corporate compliance program is designed to detect and prevent violations of laws by the agents, employees, officers and directors within our operations.<\\/p>\",\"ar\":\"<p style=\\\"text-align: center;\\\">\\u062a\\u0645 \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0628\\u0631\\u0646\\u0627\\u0645\\u062c \\u0627\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0627\\u0644\\u0639\\u0627\\u0645 \\u0644\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0644\\u0644\\u0643\\u0634\\u0641 \\u0639\\u0646 \\u0627\\u0646\\u062a\\u0647\\u0627\\u0643\\u0627\\u062a \\u0627\\u0644\\u0642\\u0648\\u0627\\u0646\\u064a\\u0646 \\u0648\\u0645\\u0646\\u0639\\u0647\\u0627 \\u0645\\u0646 \\u0642\\u0628\\u0644 \\u0627\\u0644\\u0648\\u0643\\u0644\\u0627\\u0621 \\u0648\\u0627\\u0644\\u0645\\u0648\\u0638\\u0641\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0636\\u0628\\u0627\\u0637 \\u0648\\u0627\\u0644\\u0645\\u062f\\u064a\\u0631\\u064a\\u0646 \\u0641\\u064a \\u0639\\u0645\\u0644\\u064a\\u0627\\u062a\\u0646\\u0627.<\\/p>\"}', '2020-05-10 03:28:00', '2020-05-18 02:20:51'),
(3, 1, 'icon-hotairballoon', '{\"en\":\"WE PROTECT\",\"ar\":\"\\u0646\\u062d\\u0646 \\u062d\\u0645\\u0627\\u064a\\u0629\"}', '{\"en\":\"<p style=\\\"text-align: center;\\\"><strong class=\\\"text-dark\\\">General International Group&rsquo;s<\\/strong>&nbsp;corporate compliance program is designed to detect and prevent violations of laws by the agents, employees, officers and directors within our operations.<\\/p>\",\"ar\":\"<p style=\\\"text-align: center;\\\">\\u062a\\u0645 \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0628\\u0631\\u0646\\u0627\\u0645\\u062c \\u0627\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0627\\u0644\\u0639\\u0627\\u0645 \\u0644\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0644\\u0644\\u0643\\u0634\\u0641 \\u0639\\u0646 \\u0627\\u0646\\u062a\\u0647\\u0627\\u0643\\u0627\\u062a \\u0627\\u0644\\u0642\\u0648\\u0627\\u0646\\u064a\\u0646 \\u0648\\u0645\\u0646\\u0639\\u0647\\u0627 \\u0645\\u0646 \\u0642\\u0628\\u0644 \\u0627\\u0644\\u0648\\u0643\\u0644\\u0627\\u0621 \\u0648\\u0627\\u0644\\u0645\\u0648\\u0638\\u0641\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0636\\u0628\\u0627\\u0637 \\u0648\\u0627\\u0644\\u0645\\u062f\\u064a\\u0631\\u064a\\u0646 \\u0641\\u064a \\u0639\\u0645\\u0644\\u064a\\u0627\\u062a\\u0646\\u0627.<\\/p>\"}', '2020-05-10 03:29:32', '2020-05-18 02:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `phone_icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `is_publish`, `phone_icon`, `address_icon`, `email_icon`, `phone_title`, `email_title`, `address_title`, `phone`, `fax`, `address`, `email`, `created_at`, `updated_at`) VALUES
(1, 1, 'fa-phone', 'fa-map-marker', 'fa-envelope', '{\"en\":\"Call Us (Abu Dhabi)\",\"ar\":\"(\\u0623\\u0628\\u0648\\u0638\\u0628\\u064a(\\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627\"}', '{\"en\":\"Email\",\"ar\":\"\\u0639\\u0646\\u0648\\u0627\\u0646\"}', '{\"en\":\"Address\",\"ar\":\"\\u0639\\u0646\\u0648\\u0627\\u0646\"}', '+971 2 666 3316', '+971 2 666 4119', '{\"en\":\"P.O.BOX : 46750, Abu Dhabi, U.A.E\",\"ar\":\"\\u0635.\\u0628: 46750 \\u060c \\u0623\\u0628\\u0648 \\u0638\\u0628\\u064a \\u060c \\u0627\\u0644\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u062d\\u062f\\u0629\"}', 'info@generalintlgroup.com', '2020-05-13 07:53:31', '2020-05-13 08:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `contact_headers`
--

CREATE TABLE `contact_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_headers`
--

INSERT INTO `contact_headers` (`id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"HAVE A QUESTION?\",\"ar\":\"\\u0644\\u062f\\u064a \\u0633\\u0624\\u0627\\u0644\\u061f\"}', '2020-05-12 18:10:20', '2020-05-12 18:15:53');

-- --------------------------------------------------------

--
-- Table structure for table `contact_maps`
--

CREATE TABLE `contact_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `open_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `close_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_maps`
--

INSERT INTO `contact_maps` (`id`, `is_publish`, `open_title`, `close_title`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"Open the map\",\"ar\":\"\\u0627\\u0641\\u062a\\u062d \\u0627\\u0644\\u062e\\u0631\\u064a\\u0637\\u0629\"}', '{\"en\":\"Close the map\",\"ar\":\"\\u0623\\u063a\\u0644\\u0642 \\u0627\\u0644\\u062e\\u0631\\u064a\\u0637\\u0629\"}', 'fa-map-marker', 'https://www.google.com/maps/d/embed?mid=1x7Ma0lBIOM_nYSWM3tB6EMQFdjd9JFgp', '2020-05-13 10:11:50', '2020-05-13 10:11:50');

-- --------------------------------------------------------

--
-- Table structure for table `contact_requests`
--

CREATE TABLE `contact_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `sales_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `support_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `career_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_requests`
--

INSERT INTO `contact_requests` (`id`, `is_publish`, `sales_title`, `support_title`, `career_title`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"Sales\",\"ar\":\"\\u0645\\u0628\\u064a\\u0639\\u0627\\u062a\"}', '{\"en\":\"Support\",\"ar\":\"\\u0627\\u0644\\u062f\\u0639\\u0645\"}', '{\"en\":\"Careers\",\"ar\":\"\\u0648\\u0638\\u0627\\u0626\\u0641\"}', '2020-05-13 05:54:42', '2020-05-13 05:54:42');

-- --------------------------------------------------------

--
-- Table structure for table `contact_titles`
--

CREATE TABLE `contact_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_titles`
--

INSERT INTO `contact_titles` (`id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"Contact Us | General International Group\",\"ar\":\"\\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627 | \\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629\"}', '2020-04-01 09:53:38', '2020-04-01 09:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `c_c_mails`
--

CREATE TABLE `c_c_mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_configurations`
--

CREATE TABLE `email_configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `hr_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `career_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_configurations`
--

INSERT INTO `email_configurations` (`id`, `is_publish`, `hr_email`, `career_email`, `contact_email`, `admin_email`, `created_at`, `updated_at`) VALUES
(1, 1, 'samandarmirzayev@gmail.com', 'samicmirzayev@gmail.com', 'samandar.mirzaev.89@gmail.com', 'samicmirzayev@gmail.com', '2020-04-01 02:57:40', '2020-04-01 02:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `facebooks`
--

CREATE TABLE `facebooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facebooks`
--

INSERT INTO `facebooks` (`id`, `is_publish`, `facebook`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, '2020-03-22 04:22:16', '2020-03-22 04:32:38');

-- --------------------------------------------------------

--
-- Table structure for table `facility_titles`
--

CREATE TABLE `facility_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facility_titles`
--

INSERT INTO `facility_titles` (`id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"Facilities Management | General International Group\",\"ar\":\"\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 | \\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629\"}', '2020-05-04 07:25:26', '2020-05-04 07:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file_managements`
--

CREATE TABLE `file_managements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filter_brochures`
--

CREATE TABLE `filter_brochures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filter_brochures`
--

INSERT INTO `filter_brochures` (`id`, `filter`, `created_at`, `updated_at`) VALUES
(22, '{\"en\":\"Fire & Life Safety\",\"ar\":\"\\u0627\\u0644\\u0633\\u0644\\u0627\\u0645\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642 \\u0648\\u0627\\u0644\\u062d\\u064a\\u0627\\u0629\"}', '2020-05-04 03:15:34', '2020-05-04 03:15:34'),
(23, '{\"en\":\"Security & ELV\",\"ar\":\"\\u0627\\u0644\\u0623\\u0645\\u0646 \\u0648 ELV\"}', '2020-05-04 03:16:07', '2020-05-04 03:16:07'),
(24, '{\"en\":\"Water Treatment\",\"ar\":\"\\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647\"}', '2020-05-04 03:16:40', '2020-05-04 03:16:40'),
(25, '{\"en\":\"Facilities Management\",\"ar\":\"\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642\"}', '2020-05-04 03:17:21', '2020-05-04 03:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `fire_titles`
--

CREATE TABLE `fire_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fire_titles`
--

INSERT INTO `fire_titles` (`id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"Fire and Life Safety | General International Group\",\"ar\":\"\\u0627\\u0644\\u0633\\u0644\\u0627\\u0645\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642 \\u0648\\u0627\\u0644\\u062d\\u064a\\u0627\\u0629 | \\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629\"}', '2020-05-04 05:18:40', '2020-05-04 05:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `footer_title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `is_publish`, `footer_title`, `created_at`, `updated_at`) VALUES
(2, 1, '{\"en\":\"\\u00a9 GENERAL INTERNATIONAL GROUP 2020.\",\"ar\":\"\\u00a9 \\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629 2020.\"}', '2020-05-13 14:09:42', '2020-05-13 14:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `footer_logos`
--

CREATE TABLE `footer_logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_logos`
--

INSERT INTO `footer_logos` (`id`, `is_publish`, `title`, `logo`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"General International Group\",\"ar\":\"\\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629\"}', '1589794971-1584981639header-logo.png', '2020-05-13 14:05:38', '2020-05-18 05:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `footer_socials`
--

CREATE TABLE `footer_socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_socials`
--

INSERT INTO `footer_socials` (`id`, `is_publish`, `title`, `class`, `link`, `icon`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"Facebook\",\"ar\":\"\\u0645\\u0648\\u0642\\u0639 \\u0627\\u0644\\u062a\\u0648\\u0627\\u0635\\u0644 \\u0627\\u0644\\u0627\\u062c\\u062a\\u0645\\u0627\\u0639\\u064a \\u0627\\u0644\\u0641\\u064a\\u0633\\u0628\\u0648\\u0643\"}', 'facebook', 'https://www.facebook.com/GIGroupUAE', 'fa-facebook', '2020-05-13 14:17:22', '2020-05-18 06:54:46'),
(2, 1, '{\"en\":\"Twitter\",\"ar\":\"\\u062a\\u0648\\u064a\\u062a\\u0631\"}', 'twitter', 'https://twitter.com/GIGroupUAE', 'fa-twitter', '2020-05-13 14:18:00', '2020-05-18 06:55:02'),
(3, 1, '{\"en\":\"Youtube\",\"ar\":\"\\u0645\\u0648\\u0642\\u0639 \\u064a\\u0648\\u062a\\u064a\\u0648\\u0628\"}', 'youtube', 'https://www.youtube.com/channel/UCKAaan6zgjADiZsnUc2nQWQ', 'fa-youtube-play', '2020-05-13 14:19:25', '2020-05-18 06:55:25'),
(4, 1, '{\"en\":\"LinkedIn+\",\"ar\":\"\\u064a\\u0646\\u0643\\u062f\\u064a\\u0646\"}', 'linkedin', '#', 'fa-linkedin', '2020-05-13 14:20:06', '2020-05-13 14:20:06'),
(5, 1, '{\"en\":\"Instagram\",\"ar\":\"\\u0627\\u0646\\u0633\\u062a\\u063a\\u0631\\u0627\\u0645\"}', 'instagram', 'https://www.instagram.com/GIGroupUAE/', 'fa-instagram', '2020-05-13 14:20:50', '2020-05-18 06:55:48');

-- --------------------------------------------------------

--
-- Table structure for table `footer_spaces`
--

CREATE TABLE `footer_spaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `footer_space` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_spaces`
--

INSERT INTO `footer_spaces` (`id`, `is_publish`, `footer_space`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, '2020-03-22 03:11:15', '2020-03-22 03:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `google_analytics`
--

CREATE TABLE `google_analytics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `header` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `google_analytics`
--

INSERT INTO `google_analytics` (`id`, `is_publish`, `header`, `footer`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, NULL, '2020-03-21 10:50:22', '2020-03-21 16:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `google_tag_managers`
--

CREATE TABLE `google_tag_managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `gtm_header` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gtm_footer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `google_tag_managers`
--

INSERT INTO `google_tag_managers` (`id`, `is_publish`, `gtm_header`, `gtm_footer`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, NULL, '2020-03-21 15:47:04', '2020-03-21 16:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `google_verifications`
--

CREATE TABLE `google_verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `verify` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `google_verifications`
--

INSERT INTO `google_verifications` (`id`, `is_publish`, `verify`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, '2020-03-21 12:26:57', '2020-03-21 12:29:25');

-- --------------------------------------------------------

--
-- Table structure for table `header_spaces`
--

CREATE TABLE `header_spaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `header_space` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_spaces`
--

INSERT INTO `header_spaces` (`id`, `is_publish`, `header_space`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, '2020-03-21 17:21:24', '2020-03-22 03:09:58');

-- --------------------------------------------------------

--
-- Table structure for table `home_banners`
--

CREATE TABLE `home_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quote` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quote_link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_banners`
--

INSERT INTO `home_banners` (`id`, `banner`, `title`, `head_title`, `quote`, `quote_link`, `is_publish`, `created_at`, `updated_at`) VALUES
(2, '1589795625-1588623052-section-bg-gig-1.jpg', '{\"en\":\"General International Group\",\"ar\":\"\\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629\"}', '{\"en\":\"INSPECT,SERVICE,PROTECT\",\"ar\":\"\\u0641\\u062d\\u0635,\\u062e\\u062f\\u0645\\u0629,\\u062d\\u0645\\u0649\"}', '{\"en\":\"GET QUOTE\",\"ar\":\"\\u0627\\u0644\\u062d\\u0635\\u0648\\u0644 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0627\\u0642\\u062a\\u0628\\u0627\\u0633\"}', 'contact', 1, '2020-05-04 15:28:14', '2020-05-18 05:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `home_partners`
--

CREATE TABLE `home_partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_partners`
--

INSERT INTO `home_partners` (`id`, `is_publish`, `background`, `logo`, `title`, `created_at`, `updated_at`) VALUES
(2, 1, 'section-bg-gig.jpg', '1589795698-1588682625-A1.png', '{\"en\":\"OUR PARTNERS\",\"ar\":\"\\u062e\\u062f\\u0645\\u0627\\u062a\"}', '2020-05-05 08:43:45', '2020-05-18 05:54:58'),
(3, 1, 'section-bg-gig.jpg', '1589795710-1588682654-A2.png', '{\"en\":\"OUR PARTNERS\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '2020-05-05 08:44:14', '2020-05-18 05:55:10'),
(4, 1, 'section-bg-gig.jpg', '1589795719-1588682679-A3.png', '{\"en\":\"OUR PARTNERS\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '2020-05-05 08:44:39', '2020-05-18 05:55:19'),
(5, 1, 'section-bg-gig.jpg', '1589795727-1588682709-A4.png', '{\"en\":\"OUR PARTNERS\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '2020-05-05 08:45:09', '2020-05-18 05:55:27'),
(6, 1, 'section-bg-gig.jpg', '1589795735-1588682738-A5.png', '{\"en\":\"OUR PARTNERS\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '2020-05-05 08:45:38', '2020-05-18 05:55:35'),
(7, 1, 'section-bg-gig.jpg', '1589795744-1588682763-A6.png', '{\"en\":\"OUR PARTNERS\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '2020-05-05 08:46:03', '2020-05-18 05:55:44'),
(8, 1, 'section-bg-gig.jpg', '1589795753-1588682788-A7.png', '{\"en\":\"OUR PARTNERS\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '2020-05-05 08:46:28', '2020-05-18 05:55:53'),
(9, 1, 'section-bg-gig.jpg', '1589795762-1588682818-A8.png', '{\"en\":\"OUR PARTNERS\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '2020-05-05 08:46:58', '2020-05-18 05:56:02'),
(10, 1, 'section-bg-gig.jpg', '1589795770-1588682836-A9.png', '{\"en\":\"OUR PARTNERS\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '2020-05-05 08:47:16', '2020-05-18 05:56:10'),
(11, 1, 'section-bg-gig.jpg', '1589795780-1588682863-A10-1.png', '{\"en\":\"OUR PARTNERS\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '2020-05-05 08:47:43', '2020-05-18 05:56:20'),
(13, 1, 'section-bg-gig.jpg', '1589795790-1588682951-A11.png', '{\"en\":\"OUR PARTNERS\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '2020-05-05 08:49:11', '2020-05-18 05:56:30'),
(14, 1, 'section-bg-gig.jpg', '1589795799-1588682974-A12.png', '{\"en\":\"OUR PARTNERS\",\"ar\":\"\\u0634\\u0631\\u0643\\u0627\\u0626\\u0646\\u0627\"}', '2020-05-05 08:49:34', '2020-05-18 05:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `home_services`
--

CREATE TABLE `home_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `service_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_more` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_services`
--

INSERT INTO `home_services` (`id`, `is_publish`, `service_id`, `title`, `description`, `read_more`, `read_link`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '{\"en\":\"SERVICES\",\"ar\":\"\\u062e\\u062f\\u0645\\u0627\\u062a\"}', '{\"en\":\"<p>We provide a comprehensive set of turnkey solutions for Active as well as Passive Fire Protection. Our team is certified and able to handle projects of various classifications.<\\/p>\",\"ar\":\"<p>\\u0646\\u062d\\u0646 \\u0646\\u0642\\u062f\\u0645 \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0634\\u0627\\u0645\\u0644\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0644\\u0648\\u0644 \\u0627\\u0644\\u062c\\u0627\\u0647\\u0632\\u0629 \\u0644\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0627\\u0644\\u0646\\u0634\\u0637\\u0629 \\u0648\\u0643\\u0630\\u0644\\u0643 \\u0627\\u0644\\u0633\\u0644\\u0628\\u064a\\u0629 \\u0644\\u0644\\u062d\\u0631\\u064a\\u0642. \\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0645\\u0639\\u062a\\u0645\\u062f \\u0648\\u0642\\u0627\\u062f\\u0631 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u062a\\u0639\\u0627\\u0645\\u0644 \\u0645\\u0639 \\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0627\\u0644\\u062a\\u0635\\u0646\\u064a\\u0641\\u0627\\u062a \\u0627\\u0644\\u0645\\u062e\\u062a\\u0644\\u0641\\u0629.<\\/p>\"}', '{\"en\":\"Read More\",\"ar\":\"\\u0627\\u0642\\u0631\\u0623 \\u0623\\u0643\\u062b\\u0631\"}', 'fire_safety', '2020-05-05 06:56:22', '2020-05-05 06:56:22'),
(2, 1, 2, '{\"en\":\"SERVICES\",\"ar\":\"\\u062e\\u062f\\u0645\\u0627\\u062a\"}', '{\"en\":\"<p>We deliver a range of ELV solutions from CCTV &amp; Intrusion Detection to PA system. Our solutions can be offered independently or bundled to offer an integrated and advanced solution which is IOT ready.<\\/p>\",\"ar\":\"<p>\\u0646\\u0642\\u062f\\u0645 \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0645\\u0646 \\u062d\\u0644\\u0648\\u0644 ELV \\u0645\\u0646 CCTV \\u0648\\u0643\\u0634\\u0641 \\u0627\\u0644\\u062a\\u0633\\u0644\\u0644 \\u0625\\u0644\\u0649 \\u0646\\u0638\\u0627\\u0645 PA. \\u064a\\u0645\\u0643\\u0646 \\u062a\\u0642\\u062f\\u064a\\u0645 \\u062d\\u0644\\u0648\\u0644\\u0646\\u0627 \\u0628\\u0634\\u0643\\u0644 \\u0645\\u0633\\u062a\\u0642\\u0644 \\u0623\\u0648 \\u0645\\u062c\\u0645\\u0639\\u0629 \\u0644\\u062a\\u0642\\u062f\\u064a\\u0645 \\u062d\\u0644 \\u0645\\u062a\\u0643\\u0627\\u0645\\u0644 \\u0648\\u0645\\u062a\\u0642\\u062f\\u0645 \\u062c\\u0627\\u0647\\u0632 \\u0644\\u0640 IOT.<\\/p>\"}', '{\"en\":\"Read More\",\"ar\":\"\\u0627\\u0642\\u0631\\u0623 \\u0623\\u0643\\u062b\\u0631\"}', 'security_elv', '2020-05-05 06:57:45', '2020-05-05 06:57:45'),
(3, 1, 3, '{\"en\":\"SERVICES\",\"ar\":\"\\u062e\\u062f\\u0645\\u0627\\u062a\"}', '{\"en\":\"<p>We offer solutions from supply of specialty chemicals to the supply of Water Treatment equipment including supply of&nbsp; Waste Water Treatment Plants. Our solutions can be applied to clientele in all sectors. We analyze the needs of the customer to offer a solution that is right for your needs.<\\/p>\",\"ar\":\"<p>\\u0646\\u062d\\u0646 \\u0646\\u0642\\u062f\\u0645 \\u062d\\u0644\\u0648\\u0644 \\u0645\\u0646 \\u062a\\u0648\\u0631\\u064a\\u062f \\u0627\\u0644\\u0645\\u0648\\u0627\\u062f \\u0627\\u0644\\u0643\\u064a\\u0645\\u064a\\u0627\\u0626\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0644\\u062a\\u0648\\u0631\\u064a\\u062f \\u0645\\u0639\\u062f\\u0627\\u062a \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0628\\u0645\\u0627 \\u0641\\u064a \\u0630\\u0644\\u0643 \\u062a\\u0648\\u0631\\u064a\\u062f \\u0645\\u062d\\u0637\\u0627\\u062a \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0645\\u064a\\u0627\\u0647 \\u0627\\u0644\\u0635\\u0631\\u0641 \\u0627\\u0644\\u0635\\u062d\\u064a. \\u064a\\u0645\\u0643\\u0646 \\u062a\\u0637\\u0628\\u064a\\u0642 \\u062d\\u0644\\u0648\\u0644\\u0646\\u0627 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621 \\u0641\\u064a \\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u0642\\u0637\\u0627\\u0639\\u0627\\u062a. \\u0646\\u0642\\u0648\\u0645 \\u0628\\u062a\\u062d\\u0644\\u064a\\u0644 \\u0627\\u062d\\u062a\\u064a\\u0627\\u062c\\u0627\\u062a \\u0627\\u0644\\u0639\\u0645\\u064a\\u0644 \\u0644\\u062a\\u0642\\u062f\\u064a\\u0645 \\u062d\\u0644 \\u0645\\u0646\\u0627\\u0633\\u0628 \\u0644\\u0627\\u062d\\u062a\\u064a\\u0627\\u062c\\u0627\\u062a\\u0643.<\\/p>\"}', '{\"en\":\"Read More\",\"ar\":\"\\u0627\\u0642\\u0631\\u0623 \\u0623\\u0643\\u062b\\u0631\"}', 'water_treat', '2020-05-05 06:58:54', '2020-05-05 06:58:54'),
(4, 1, 4, '{\"en\":\"SERVICES\",\"ar\":\"\\u062e\\u062f\\u0645\\u0627\\u062a\"}', '{\"en\":\"<p>We apply the latest tools to identify the efficiency and the expected life span of the equipment at your facility. Our objectives when we take on&nbsp; Projects is not only to maintain the equipment but to offer recommendations to assist in providing our customers with savings in the short, medium &amp; long term by assessing the overall energy expenditure and applying sustainability procedures.<\\/p>\",\"ar\":\"<p>\\u0646\\u0637\\u0628\\u0642 \\u0623\\u062d\\u062f\\u062b \\u0627\\u0644\\u0623\\u062f\\u0648\\u0627\\u062a \\u0644\\u062a\\u062d\\u062f\\u064a\\u062f \\u0627\\u0644\\u0643\\u0641\\u0627\\u0621\\u0629 \\u0648\\u0627\\u0644\\u0639\\u0645\\u0631 \\u0627\\u0644\\u0645\\u062a\\u0648\\u0642\\u0639 \\u0644\\u0644\\u0645\\u0639\\u062f\\u0627\\u062a \\u0641\\u064a \\u0645\\u0646\\u0634\\u0623\\u062a\\u0643. \\u0625\\u0646 \\u0623\\u0647\\u062f\\u0627\\u0641\\u0646\\u0627 \\u0639\\u0646\\u062f\\u0645\\u0627 \\u0646\\u0623\\u062e\\u0630 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0644\\u064a\\u0633\\u062a \\u0641\\u0642\\u0637 \\u0627\\u0644\\u062d\\u0641\\u0627\\u0638 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0639\\u062f\\u0627\\u062a \\u0648\\u0644\\u0643\\u0646 \\u0644\\u062a\\u0642\\u062f\\u064a\\u0645 \\u062a\\u0648\\u0635\\u064a\\u0627\\u062a \\u0644\\u0644\\u0645\\u0633\\u0627\\u0639\\u062f\\u0629 \\u0641\\u064a \\u062a\\u0648\\u0641\\u064a\\u0631 \\u0644\\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627 \\u0645\\u062f\\u062e\\u0631\\u0627\\u062a \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u062f\\u0649 \\u0627\\u0644\\u0642\\u0635\\u064a\\u0631 \\u0648\\u0627\\u0644\\u0645\\u062a\\u0648\\u0633\\u0637 \\u0648\\u0627\\u0644\\u0637\\u0648\\u064a\\u0644 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u062a\\u0642\\u064a\\u064a\\u0645 \\u0625\\u062c\\u0645\\u0627\\u0644\\u064a \\u0646\\u0641\\u0642\\u0627\\u062a \\u0627\\u0644\\u0637\\u0627\\u0642\\u0629 \\u0648\\u062a\\u0637\\u0628\\u064a\\u0642 \\u0625\\u062c\\u0631\\u0627\\u0621\\u0627\\u062a \\u0627\\u0644\\u0627\\u0633\\u062a\\u062f\\u0627\\u0645\\u0629.<\\/p>\"}', '{\"en\":\"Read More\",\"ar\":\"\\u0627\\u0642\\u0631\\u0623 \\u0623\\u0643\\u062b\\u0631\"}', 'facility_manage', '2020-05-05 07:00:08', '2020-05-05 07:00:08');

-- --------------------------------------------------------

--
-- Table structure for table `home_service_cats`
--

CREATE TABLE `home_service_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_service_cats`
--

INSERT INTO `home_service_cats` (`id`, `is_publish`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"FIRE & LIFE SAFETY\",\"ar\":null}', '<svg version=\"1.0\"  xmlns=\"http://www.w3.org/2000/svg\" width=\"50px\" height=\"50px\" viewBox=\"0 0 700.000000 853.000000\" preserveAspectRatio=\"xMidYMid meet\">                                 <g transform=\"translate(0.000000,853.000000) scale(0.100000,-0.100000)\" fill=\"#e22822\" stroke=\"none\">                                     <path d=\"M3229 8460 c-189 -193 -260 -593 -192 -1087 22 -164 27 -235 27 -413 0 -231 -10 -314 -59 -485 -25 -86 -102 -265 -114 -265 -3 1 -29 35 -58 78 -121 181 -297 365 -461 482 -76 54 -262 157 -262 145 0 -3 12 -29 26 -58 61 -120 133 -340 168 -517 50 -249 61 -587 26 -785 -38 -212 -232 -920 -261 -950 -15 -15 -25 3 -62 105 -79 219 -166 362 -301 495 -155 154 -310 234 -559 289 -27 6 -24 2 34 -66 155 -180 249 -382 290 -618 36 -209 28 -333 -62 -1030 -29 -227 -63 -460 -74 -508 -5 -20 -14 -14 -87 63 -95 101 -169 155 -293 218 -222 112 -536 177 -857 177 -110 0 -105 5 -87 -82 24 -116 107 -246 243 -381 39 -40 154 -143 254 -230 248 -215 303 -267 377 -361 73 -91 126 -186 148 -266 11 -38 17 -130 21 -299 10 -390 39 -660 96 -896 37 -158 77 -263 144 -388 228 -425 564 -668 1096 -791 261 -60 567 -37 770 60 l75 36 -90 32 c-210 76 -368 179 -541 351 -284 284 -442 571 -490 896 -30 203 -9 483 56 740 31 123 118 374 127 365 3 -2 14 -46 25 -98 73 -342 199 -667 339 -878 73 -111 207 -249 299 -308 36 -23 99 -56 141 -72 80 -30 159 -52 159 -43 0 3 -18 34 -39 68 -192 303 -290 575 -309 849 -8 122 1 385 18 491 26 167 118 464 140 450 4 -3 11 -26 15 -51 10 -68 62 -238 97 -319 41 -94 103 -188 178 -270 84 -93 146 -220 168 -346 8 -43 9 -41 86 191 43 129 93 276 111 325 74 199 90 359 101 995 4 223 9 413 13 422 9 24 278 -469 329 -602 74 -194 104 -304 122 -443 20 -152 -7 -278 -126 -595 -103 -272 -120 -425 -59 -519 16 -24 16 -24 139 144 68 92 154 202 191 243 180 199 314 421 356 590 12 47 23 87 24 88 2 2 13 -27 25 -65 28 -86 39 -319 21 -444 -28 -196 -72 -327 -216 -652 -53 -121 -95 -220 -93 -222 2 -1 118 109 258 245 140 137 256 247 258 245 9 -8 -33 -191 -66 -290 -141 -428 -579 -978 -1002 -1259 -101 -68 -261 -151 -347 -181 -29 -11 -53 -22 -53 -25 0 -7 263 -91 355 -114 316 -77 735 -66 1062 28 411 119 715 321 1012 676 403 481 633 920 711 1357 6 33 15 131 20 215 10 162 3 129 135 636 83 317 116 601 97 824 -7 73 -16 146 -20 162 -8 29 -9 28 -57 -50 -190 -307 -487 -740 -650 -944 -100 -125 -232 -270 -246 -270 -5 0 -9 138 -9 323 0 274 4 355 25 547 22 197 25 270 25 588 0 497 -17 629 -101 801 -43 87 -139 196 -206 233 l-31 18 34 -68 c48 -97 64 -170 64 -293 0 -213 -89 -461 -277 -772 -36 -59 -70 -110 -74 -113 -5 -3 -9 163 -9 368 -1 588 -41 898 -171 1293 -163 497 -534 971 -878 1121 -115 51 -116 50 -55 -68 66 -130 128 -314 149 -443 14 -87 15 -140 7 -405 -5 -168 -14 -315 -19 -328 -7 -18 -23 24 -86 225 -42 136 -123 397 -180 578 l-103 330 -80 120 c-321 481 -553 1008 -692 1572 -26 106 -51 193 -56 193 -4 0 -35 -27 -67 -60z\"></path></g></svg>', '2020-05-05 06:44:03', '2020-05-14 09:08:44'),
(2, 1, '{\"en\":\"SECURITY <br> & ELV\",\"ar\":null}', '<svg version=\"1.0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"50px\" height=\"50px\" viewBox=\"0 0 700.000000 716.000000\" preserveAspectRatio=\"xMidYMid meet\">                                 <g transform=\"translate(0.000000,716.000000) scale(0.100000,-0.100000)\" fill=\"#ffbf00\" stroke=\"none\">                                     <path d=\"M1720 5528 c-60 -31 -87 -74 -95 -151 -3 -34 -5 -271 -3 -527 3 -453 4 -467 25 -524 13 -33 34 -76 47 -97 23 -34 551 -546 723 -700 40 -37 71 -73 72 -84 0 -11 -11 -45 -26 -75 -25 -51 -28 -65 -28 -176 l0 -121 39 -75 c30 -59 37 -82 32 -104 -7 -28 -70 -133 -388 -649 -101 -165 -207 -338 -234 -385 l-50 -85 -289 0 -290 0 -5 255 c-5 268 -6 275 -55 320 l-27 25 -534 0 -534 0 -25 -26 c-15 -14 -30 -43 -35 -65 -5 -21 -10 -182 -10 -356 l0 -318 959 0 c527 0 979 3 1005 6 46 7 46 7 93 93 69 128 215 371 408 681 94 151 186 302 205 335 18 33 38 63 42 66 5 3 39 6 74 7 88 1 116 8 204 52 l76 38 294 -276 c405 -379 514 -476 590 -526 124 -82 100 -79 610 -87 250 -4 823 -8 1274 -8 l818 -1 58 31 c110 58 110 59 195 878 l45 433 0 568 c0 532 -1 568 -17 573 -10 2 -112 32 -228 66 -614 181 -3361 962 -3470 987 -60 14 -172 17 -785 21 l-715 4 -45 -23z m4834 -1377 c49 -12 93 -54 109 -106 9 -30 12 -238 12 -860 0 -859 -1 -881 -43 -929 -49 -54 15 -51 -1184 -54 l-1107 -3 -35 31 c-19 17 -46 48 -58 68 l-23 37 0 841 0 841 24 50 c27 59 48 73 128 83 84 11 2130 11 2177 1z\"></path><path d=\"M5330 3966 c-329 -70 -561 -289 -641 -606 -29 -112 -23 -310 11 -410 91 -267 309 -477 570 -547 90 -24 309 -24 400 1 151 41 305 142 415 274 72 86 140 224 160 324 31 155 10 369 -48 500 -76 170 -227 319 -404 400 -143 65 -334 91 -463 64z m310 -171 c102 -27 180 -74 271 -165 70 -70 94 -102 128 -172 79 -163 90 -313 35 -478 -87 -260 -329 -440 -599 -443 -102 -1 -172 13 -262 53 -182 82 -319 242 -367 427 -20 78 -21 240 -1 318 52 204 228 391 429 455 100 32 258 34 366 5z\"></path><path d=\"M5362 3619 c-121 -23 -260 -134 -318 -254 -26 -54 -29 -72 -32 -175 -3 -99 -1 -123 18 -169 43 -109 137 -213 238 -263 106 -53 277 -51 387 4 118 59 198 155 236 280 17 55 21 88 17 158 -4 77 -9 98 -42 165 -96 194 -296 295 -504 254z m325 -214 c108 -64 140 -238 53 -285 -23 -12 -81 9 -119 43 -34 32 -71 115 -71 163 0 32 7 49 29 73 35 38 51 38 108 6z\"></path></g></svg>', '2020-05-05 06:44:49', '2020-05-14 09:08:50'),
(3, 1, '{\"en\":\"WATER TREATMENT\",\"ar\":null}', '<svg version=\"1.0\" xmlns=\"http://www.w3.org/2000/svg\"                                  width=\"50px\" height=\"50px\" viewBox=\"0 0 500.000000 500.000000\"                                  preserveAspectRatio=\"xMidYMid meet\">                                 <g transform=\"translate(0.000000,500.000000) scale(0.100000,-0.100000)\"                                    fill=\"#0f5e9c\" stroke=\"none\">                                     <path d=\"M2490 4983 c-94 -65 -362 -340 -502 -514 -108 -135 -304 -415 -338 -484 -8 -17 -22 -41 -31 -55 -82 -126 -244 -507 -299 -705 -74 -267 -100 -415 -121 -693 -16 -219 -1 -375 56 -562 23 -76 108 -250 160 -329 64 -96 194 -238 280 -304 148 -115 299 -186 530 -248 69 -19 468 -19 545 -1 190 47 387 137 504 232 39 31 171 150 181 162 6 7 31 38 56 68 125 150 212 327 260 530 17 73 20 120 20 335 1 332 -21 493 -107 800 -28 103 -83 266 -124 370 -45 115 -172 369 -265 530 -61 106 -222 335 -318 455 -135 167 -153 187 -284 318 -98 97 -118 112 -146 112 -18 0 -44 -8 -57 -17z m873 -2451 c9 -8 22 -31 28 -51 9 -31 6 -48 -21 -126 -168 -476 -436 -724 -877 -814 -110 -23 -235 -27 -280 -10 -40 15 -84 69 -81 99 5 44 58 62 276 89 194 25 388 121 547 272 83 79 118 139 175 297 68 189 98 244 144 262 26 10 65 2 89 -18z\"/>                                     <path d=\"M3630 1183 c-28 -36 -20 -79 26 -139 49 -65 46 -93 -16 -155 -53 -53 -174 -118 -271 -145 -30 -9 -85 -25 -124 -35 -313 -90 -906 -107 -1325 -39 -238 38 -480 132 -574 222 -44 42 -48 50 -43 81 3 18 19 55 36 82 36 57 39 83 10 119 -46 58 -134 20 -184 -79 -61 -122 -31 -243 85 -347 57 -52 196 -125 297 -157 158 -50 379 -97 533 -112 146 -14 719 -14 847 1 226 26 502 95 643 162 188 89 276 183 288 309 15 159 -152 329 -228 232z\"/>                                     <path d=\"M4433 1135 c-44 -31 -38 -93 17 -155 116 -131 119 -231 12 -344 -158 -165 -561 -320 -1037 -396 -387 -62 -434 -65 -935 -65 -455 0 -492 2 -768 41 -615 87 -1009 230 -1199 437 -55 59 -73 97 -73 150 0 44 18 77 105 196 30 41 32 70 4 105 -16 20 -29 26 -60 26 -34 0 -45 -7 -94 -56 -30 -31 -69 -85 -86 -120 -31 -62 -31 -67 -27 -166 7 -126 27 -168 132 -274 211 -211 632 -373 1176 -454 332 -49 415 -54 880 -54 466 0 601 8 910 54 659 98 1155 328 1285 595 25 50 27 62 23 157 -4 129 -24 176 -119 271 -72 72 -102 83 -146 52z\"/>                                 </g>                             </svg><br>', '2020-05-05 06:45:28', '2020-05-14 09:08:56'),
(4, 1, '{\"en\":\"FACILITIES MANAGEMENT\",\"ar\":null}', '<svg version=\"1.1\" id=\"Capa_1\" fill=\"green\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"                                  width=\"50px\" height=\"50px\" viewBox=\"0 0 481.763 481.763\" style=\"enable-background:new 0 0 481.763 481.763;\"                                  xml:space=\"preserve\"><g><path d=\"M453.584,405.715L298.332,250.457c-1.454-1.46-3.009-2.755-4.61-3.967l27.497-28.954c1.406-1.416,2.736-2.905,3.96-4.436 		c36.505,13.77,79.34,6.029,108.682-23.309c21.402-21.409,32.195-51.013,29.583-81.226c-0.283-3.419-2.548-6.375-5.769-7.542 		c-3.228-1.179-6.845-0.375-9.274,2.045l-49.757,49.754l-50.377-12.699l-14.287-51.967l49.745-49.748 		c2.441-2.433,3.239-6.053,2.063-9.277c-1.171-3.233-4.126-5.479-7.555-5.78c-30.21-2.604-59.816,8.183-81.226,29.592 		c-29.317,29.317-37.078,72.129-23.323,108.619c-1.496,1.265-2.985,2.61-4.445,4.049l-40.471,38.869l-74.319-74.312 		c-0.928-0.931-1.918-1.75-2.938-2.519c0.872-1.53,1.72-3.105,2.512-4.74c15.696,3.021,44.39-27.544,68.76-51.905L151.787,0 		c-31.747,31.752-54.929,53.061-51.92,68.757c-7.258,3.546-13.728,7.882-18.326,12.486l-10.001,9.998 		c-6.493,6.502-10.409,14.588-11.807,23.014c-0.97,1.108-1.957,2.275-2.938,3.523l-3.727,4.684 		c-0.104,0.115-0.425,0.576-0.514,0.694l-3.378,4.729c-2.113,2.819-3.96,5.881-5.746,8.836c-0.659,1.097-1.33,2.196-2.015,3.292 		c-0.109,0.189-0.216,0.375-0.313,0.562l-1.501,2.828c-1.814,3.402-3.697,6.924-5.308,10.799l-0.26,0.617 		c-1.9,4.513-3.869,9.186-5.243,14.139l-0.665,2.143c-0.544,1.762-1.097,3.52-1.605,5.621l-1.38,6.833 		c-1.029,4.273-1.375,8.488-1.676,12.221l-0.201,2.453c-0.508,3.871-0.36,7.521-0.222,10.742c0.047,1.079,0.089,2.137,0.121,3.564 		c0.036,0.594,0.042,1.173,0.06,1.744c0.035,1.439,0.074,3.074,0.352,4.793l0.866,5.545c0.186,1.072,0.343,2.113,0.491,3.111 		c0.331,2.252,0.671,4.581,1.342,6.792l3.632,12.602c1.12,3.83,4.758,6.366,8.739,6.088c2.107-0.147,4.001-1.058,5.411-2.471 		c1.259-1.259,2.131-2.914,2.397-4.781l1.883-12.812c0.139-1.017,0.576-2.506,1.028-4.082c0.322-1.093,0.635-2.208,0.877-3.159 		l1.339-4.782c0.163-0.647,0.479-1.277,0.757-1.924c0.266-0.6,0.532-1.218,0.769-1.827c0.449-1.017,0.872-2.033,1.288-3.076 		c0.825-2.045,1.605-3.969,2.796-5.858c0.518-0.872,0.999-1.738,1.49-2.622c1.241-2.222,2.42-4.32,3.821-6.059 		c0.088-0.103,0.168-0.218,0.26-0.34l3.159-4.356c0.647-0.819,1.374-1.593,2.081-2.373c0.502-0.55,1.005-1.103,1.64-1.83 		c1.865-2.243,4.055-4.199,6.168-6.124l1.132-1.017c1.566-1.454,3.378-2.822,5.284-4.268c0.78-0.583,1.543-1.162,2.293-1.732 		c0.963-0.624,1.895-1.247,2.813-1.865c1.72-1.162,3.209-2.167,4.93-3.062l3.745-2.131l3.789-1.858 		c1.321-0.683,2.622-1.209,3.821-1.693c0.712-0.296,1.416-0.583,2.069-0.866c0.665-0.23,1.306-0.479,1.912-0.703 		c0.812-0.296,1.513-0.58,2.465-0.828l1.022-0.23c1.114,1.803,2.42,3.517,3.987,5.083l73.515,73.518L31.647,393.822 		c-0.062,0.059-0.121,0.124-0.178,0.178c-19.529,19.529-22.709,48.131-3.177,67.666c19.532,19.529,46.316,14.522,65.84-5 		c0.086-0.083,0.16-0.16,0.236-0.249l138.448-145.782c0.812,0.957,1.616,1.92,2.518,2.824l155.24,155.253 		c17.396,17.401,45.613,17.401,63.009,0C470.974,451.322,470.974,423.104,453.584,405.715z M73.871,440.564 		c-7.191,7.199-18.855,7.199-26.052,0c-7.19-7.193-7.19-18.85,0-26.043c7.19-7.188,18.855-7.193,26.052,0 		C81.055,421.715,81.055,433.371,73.871,440.564z\"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>', '2020-05-05 06:45:55', '2020-05-14 09:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `home_titles`
--

CREATE TABLE `home_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_titles`
--

INSERT INTO `home_titles` (`id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"Home | General International Group\",\"ar\":\"\\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629 | \\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629\"}', '2020-04-01 05:19:08', '2020-04-01 05:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `job_careers`
--

CREATE TABLE `job_careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `job_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `location_id` int(10) UNSIGNED NOT NULL,
  `salary_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_careers`
--

INSERT INTO `job_careers` (`id`, `is_publish`, `job_name`, `job_title`, `job_desc`, `type_id`, `location_id`, `salary_id`, `created_at`, `updated_at`) VALUES
(32, 1, '{\"en\":\"Water Treatment Professional\",\"ar\":\"\\u0645\\u062d\\u062a\\u0631\\u0641 \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647\"}', '{\"en\":\"Water System, Water Filtration\",\"ar\":\"\\u0646\\u0638\\u0627\\u0645 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u060c \\u062a\\u0631\\u0634\\u064a\\u062d \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647\"}', '{\"en\":\"<p>Water and wastewater treatment plant and system operators typically do the following:<\\/p>\\r\\n<ul>\\r\\n<li>Add chemicals, such as ammonia or chlorine, to disinfect water or other liquids<\\/li>\\r\\n<li>Inspect equipment on a regular basis<\\/li>\\r\\n<\\/ul>\",\"ar\":null}', 3, 3, 3, '2020-05-13 15:43:56', '2020-05-18 07:05:08'),
(33, 1, '{\"en\":\"Fire Safety Manger\",\"ar\":\"\\u0645\\u062f\\u064a\\u0631 \\u0627\\u0644\\u0633\\u0644\\u0627\\u0645\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642\"}', '{\"en\":\"Fire Safety Specialist\",\"ar\":\"\\u0623\\u062e\\u0635\\u0627\\u0626\\u064a \\u0627\\u0644\\u0633\\u0644\\u0627\\u0645\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642\"}', '{\"en\":\"<p>Water and wastewater treatment plant and system operators typically do the following:<\\/p>\\r\\n<ul>\\r\\n<li>Add chemicals, such as ammonia or chlorine, to disinfect water or other liquids<\\/li>\\r\\n<li>Inspect equipment on a regular basis<\\/li>\\r\\n<\\/ul>\",\"ar\":null}', 3, 4, 4, '2020-05-13 16:06:31', '2020-05-18 07:05:31'),
(34, 1, '{\"en\":\"Security Manager\",\"ar\":null}', '{\"en\":\"Security CCTV Specialist\",\"ar\":null}', '{\"en\":\"<p>Water and wastewater treatment plant and system operators typically do the following:<\\/p>\\r\\n<ul>\\r\\n<li>Add chemicals, such as ammonia or chlorine, to disinfect water or other liquids<\\/li>\\r\\n<li>Inspect equipment on a regular basis<\\/li>\\r\\n<\\/ul>\",\"ar\":null}', 3, 3, 3, '2020-05-18 07:04:48', '2020-05-18 07:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `job_careers_job_category`
--

CREATE TABLE `job_careers_job_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_category_id` bigint(20) UNSIGNED NOT NULL,
  `job_careers_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_careers_job_category`
--

INSERT INTO `job_careers_job_category` (`id`, `job_category_id`, `job_careers_id`, `created_at`, `updated_at`) VALUES
(106, 5, 34, NULL, NULL),
(107, 6, 34, NULL, NULL),
(108, 7, 34, NULL, NULL),
(109, 6, 32, NULL, NULL),
(110, 7, 32, NULL, NULL),
(111, 8, 32, NULL, NULL),
(112, 5, 33, NULL, NULL),
(113, 6, 33, NULL, NULL),
(114, 7, 33, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_categories`
--

CREATE TABLE `job_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_categories`
--

INSERT INTO `job_categories` (`id`, `is_publish`, `name`, `created_at`, `updated_at`) VALUES
(5, 1, '{\"en\":\"Art\",\"ar\":null}', '2020-05-13 15:01:00', '2020-05-14 09:05:38'),
(6, 1, '{\"en\":\"Designer\",\"ar\":null}', '2020-05-13 15:07:48', '2020-05-14 09:05:44'),
(7, 1, '{\"en\":\"Fire\",\"ar\":null}', '2020-05-13 15:08:13', '2020-05-14 09:05:49'),
(8, 1, '{\"en\":\"Architecture\",\"ar\":null}', '2020-05-13 15:08:34', '2020-05-14 09:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `job_locations`
--

CREATE TABLE `job_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_locations`
--

INSERT INTO `job_locations` (`id`, `is_publish`, `name`, `created_at`, `updated_at`) VALUES
(3, 1, '{\"en\":\"Abu Dhabi, United Arab Emirates\",\"ar\":\"\\u0627\\u0628\\u0648\\u0638\\u0628\\u064a\\u060c \\u0627\\u0644\\u0627\\u0645\\u0627\\u0631\\u0627\\u062a \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u062d\\u062f\\u0629\"}', '2020-05-13 15:14:10', '2020-05-13 15:14:10'),
(4, 1, '{\"en\":\"Dubai, United Arab Emirates\",\"ar\":\"\\u062f\\u0628\\u0649\\u060c \\u0627\\u0644\\u0627\\u0645\\u0627\\u0631\\u0627\\u062a \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u062d\\u062f\\u0629\"}', '2020-05-13 15:14:33', '2020-05-13 15:14:33');

-- --------------------------------------------------------

--
-- Table structure for table `job_salaries`
--

CREATE TABLE `job_salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_salaries`
--

INSERT INTO `job_salaries` (`id`, `is_publish`, `name`, `created_at`, `updated_at`) VALUES
(3, 1, '{\"en\":\"unspecified\",\"ar\":\"\\u063a\\u064a\\u0631 \\u0645\\u062d\\u062f\\u062f\"}', '2020-05-13 15:19:35', '2020-05-13 15:19:35'),
(4, 1, '{\"en\":\"20-25K\",\"ar\":\"20-25K\"}', '2020-05-13 15:19:52', '2020-05-13 15:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

CREATE TABLE `job_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_types`
--

INSERT INTO `job_types` (`id`, `is_publish`, `name`, `created_at`, `updated_at`) VALUES
(3, 1, '{\"en\":\"Full-Time\",\"ar\":\"\\u0648\\u0642\\u062a \\u0643\\u0627\\u0645\\u0644\"}', '2020-05-13 15:25:47', '2020-05-13 15:25:47'),
(4, 1, '{\"en\":\"Part-Time\",\"ar\":\"\\u062f\\u0648\\u0627\\u0645 \\u062c\\u0632\\u0626\\u0649\"}', '2020-05-13 15:26:06', '2020-05-13 15:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `meta_descriptions`
--

CREATE TABLE `meta_descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `descriptions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meta_descriptions`
--

INSERT INTO `meta_descriptions` (`id`, `is_publish`, `descriptions`, `created_at`, `updated_at`) VALUES
(6, 0, 'Life Safety & Security, Life Safety & Security in UAE, Life Safety & Security in Dubai, Life Safety & Security in Abu Dhabi', '2020-03-20 15:49:11', '2020-03-21 12:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `meta_keywords`
--

CREATE TABLE `meta_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meta_keywords`
--

INSERT INTO `meta_keywords` (`id`, `is_publish`, `keywords`, `created_at`, `updated_at`) VALUES
(5, 0, 'Life Safety & Security, Life Safety & Security in UAE, Life Safety & Security in Dubai, Life Safety & Security in Abu Dhabi', '2020-03-20 14:17:06', '2020-03-21 12:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `meta_sub_copies`
--

CREATE TABLE `meta_sub_copies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `subject` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meta_sub_copies`
--

INSERT INTO `meta_sub_copies` (`id`, `is_publish`, `subject`, `copyright`, `created_at`, `updated_at`) VALUES
(2, 0, 'Fire Safety, Water Treatment', 'General International Group', '2020-03-20 17:19:11', '2020-03-21 12:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `meta_u_r_l_dist_covs`
--

CREATE TABLE `meta_u_r_l_dist_covs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distribution` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coverage` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meta_u_r_l_dist_covs`
--

INSERT INTO `meta_u_r_l_dist_covs` (`id`, `is_publish`, `url`, `distribution`, `coverage`, `created_at`, `updated_at`) VALUES
(1, 0, 'https://generalintlgroup.com/', 'Global', 'Worldwide', '2020-03-20 18:09:41', '2020-03-21 12:30:45');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_18_073810_create_photos_table', 1),
(5, '2020_03_18_073831_create_roles_table', 1),
(6, '2020_03_18_073851_create_positions_table', 1),
(7, '2020_03_19_075216_add_online_and_api_token_to_users_table', 2),
(8, '2020_03_19_124858_create_notifications_table', 3),
(9, '2020_03_19_200959_create_views_table', 4),
(10, '2020_03_20_165137_create_meta_sub_copies_table', 5),
(11, '2020_03_20_165259_create_meta_u_r_l_dist_covs_table', 5),
(12, '2020_03_20_171157_create_meta_keywords_table', 5),
(13, '2020_03_20_171601_create_meta_descriptions_table', 5),
(14, '2020_03_21_103431_create_open_graph_titles_table', 6),
(15, '2020_03_21_104631_create_open_graph_type_url_imgs_table', 6),
(16, '2020_03_21_104739_create_open_graph_site_descs_table', 6),
(17, '2020_03_21_134342_create_google_analytics_table', 7),
(18, '2020_03_21_135954_create_google_verifications_table', 7),
(19, '2020_03_21_140016_create_google_tag_managers_table', 7),
(20, '2020_03_21_141223_create_header_spaces_table', 7),
(21, '2020_03_21_141246_create_footer_spaces_table', 7),
(22, '2020_03_21_215241_create_facebooks_table', 8),
(23, '2020_03_21_215331_create_robots_table', 8),
(24, '2020_03_21_215356_create_twitter_domain_urls_table', 8),
(25, '2020_03_21_215422_create_twitter_site_imgs_table', 8),
(26, '2020_03_21_215440_create_twitter_cards_table', 8),
(27, '2020_03_21_215456_create_twitter_title_descs_table', 8),
(28, '2020_03_21_221439_create_file_managements_table', 9),
(128, '2020_03_23_063621_create_job_brands_table', 10),
(129, '2020_03_23_072226_create_brand_photos_table', 10),
(130, '2020_03_23_092606_create_job_categories_table', 10),
(131, '2020_03_23_094039_create_job_careers_table', 10),
(132, '2020_03_23_095948_create_job_types_table', 10),
(133, '2020_03_23_100022_create_job_locations_table', 10),
(134, '2020_03_23_100038_create_job_salaries_table', 10),
(135, '2020_03_23_162436_create_features_table', 10),
(138, '2020_03_23_184019_create_job_careers_job_category_table', 11),
(139, '2020_03_24_055339_create_career_contacts_table', 12),
(140, '2020_03_24_121504_create_candidates_table', 13),
(143, '2020_03_26_082154_create_brochures_table', 14),
(144, '2020_03_26_113549_create_filter_brochures_table', 15),
(145, '2020_03_28_130116_create_brochure_requests_table', 16),
(159, '2020_03_30_084319_create_email_configurations_table', 17),
(160, '2020_03_30_171039_create_c_c_mails_table', 17),
(161, '2020_03_30_171238_create_b_c_c_mails_table', 17),
(162, '2020_04_01_070048_create_home_titles_table', 18),
(163, '2020_04_01_070138_create_about_titles_table', 18),
(164, '2020_04_01_070158_create_service_titles_table', 18),
(165, '2020_04_01_070222_create_project_titles_table', 18),
(166, '2020_04_01_070428_create_brochure_titles_table', 18),
(167, '2020_04_01_070443_create_career_titles_table', 18),
(168, '2020_04_01_070458_create_contact_titles_table', 18),
(169, '2020_05_04_084059_create_fire_titles_table', 19),
(170, '2020_05_04_084124_create_security_titles_table', 19),
(171, '2020_05_04_084141_create_water_titles_table', 19),
(172, '2020_05_04_084159_create_facility_titles_table', 19),
(173, '2020_05_04_084216_create_news_titles_table', 19),
(174, '2020_05_04_084234_create_case_titles_table', 19),
(176, '2020_05_04_171827_create_home_banners_table', 20),
(181, '2020_05_04_204043_create_home_service_cats_table', 21),
(182, '2020_05_04_205755_create_home_services_table', 21),
(183, '2020_05_05_103336_create_nav_menus_table', 22),
(185, '2020_05_05_115025_create_home_partners_table', 23),
(186, '2020_05_05_182042_create_about_banners_table', 24),
(187, '2020_05_05_182146_create_about_concepts_table', 24),
(188, '2020_05_05_182241_create_about_story_cats_table', 24),
(189, '2020_05_05_182321_create_about_companies_table', 24),
(190, '2020_05_05_182400_create_about_diversity_ones_table', 24),
(191, '2020_05_05_182416_create_about_diversity_icons_table', 24),
(192, '2020_05_05_182438_create_about_diversity_twos_table', 24),
(193, '2020_05_05_182525_create_about_leadership_media_table', 24),
(194, '2020_05_05_182541_create_about_leaderships_table', 24),
(195, '2020_05_05_182631_create_about_timelines_table', 24),
(196, '2020_05_05_182647_create_about_timeline_cats_table', 24),
(197, '2020_05_05_182739_create_about_policies_table', 24),
(198, '2020_05_07_075141_create_type_fires_table', 25),
(199, '2020_05_07_075258_create_type_securities_table', 25),
(200, '2020_05_07_075318_create_type_waters_table', 25),
(201, '2020_05_07_075633_create_type_facilities_table', 25),
(206, '2020_05_07_112931_create_category_fires_table', 26),
(207, '2020_05_07_112947_create_category_securities_table', 26),
(208, '2020_05_07_113005_create_category_waters_table', 26),
(209, '2020_05_07_113024_create_category_facilities_table', 26),
(210, '2020_05_07_124724_create_banner_fires_table', 27),
(211, '2020_05_07_124742_create_banner_securities_table', 27),
(212, '2020_05_07_124756_create_banner_waters_table', 27),
(213, '2020_05_07_124811_create_banner_facilities_table', 27),
(214, '2020_05_07_125616_create_concept_fires_table', 27),
(215, '2020_05_07_125632_create_concept_securities_table', 27),
(216, '2020_05_07_125646_create_concept_waters_table', 27),
(217, '2020_05_07_125716_create_concept_facilities_table', 27),
(218, '2020_05_07_145446_create_service_fires_table', 27),
(219, '2020_05_07_145540_create_service_securities_table', 27),
(220, '2020_05_07_145555_create_service_waters_table', 27),
(221, '2020_05_07_145647_create_service_facilities_table', 27),
(222, '2020_05_05_182525_create_about_leadership_medias_table', 28),
(223, '2020_05_10_073824_create_concept_titles_table', 28),
(224, '2020_05_10_084951_create_project_banners_table', 29),
(225, '2020_05_10_085126_create_project_categories_table', 29),
(226, '2020_05_10_085319_create_projects_table', 29),
(227, '2020_05_10_091641_create_testimonials_table', 30),
(228, '2020_05_10_091708_create_testimonial_banners_table', 30),
(232, '2020_05_10_183410_create_news_medias_table', 31),
(233, '2020_05_10_183610_create_news_categories_table', 31),
(234, '2020_05_10_183638_create_news_posts_table', 31),
(237, '2020_05_11_183533_create_banner_news_table', 32),
(238, '2020_05_11_183626_create_banner_cases_table', 32),
(239, '2020_05_11_183848_create_banner_contacts_table', 32),
(240, '2020_05_11_183943_create_contacts_table', 32),
(241, '2020_05_11_184003_create_footers_table', 32),
(242, '2020_05_11_184440_create_contact_headers_table', 32),
(243, '2020_05_11_184606_create_contact_requests_table', 32),
(244, '2020_05_11_190351_create_banner_careers_table', 33),
(253, '2020_05_12_130147_create_case_categories_table', 34),
(254, '2020_05_12_130911_create_case_medias_table', 34),
(255, '2020_05_12_130925_create_case_studies_table', 34),
(256, '2020_05_11_183943_create_contact_details_table', 35),
(257, '2020_05_13_122829_create_contact_maps_table', 35),
(258, '2020_05_13_142919_create_footer_logos_table', 36),
(259, '2020_05_13_143943_create_footer_socials_table', 36),
(260, '2020_05_13_210856_create_nav_logos_table', 37);

-- --------------------------------------------------------

--
-- Table structure for table `nav_logos`
--

CREATE TABLE `nav_logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nav_logos`
--

INSERT INTO `nav_logos` (`id`, `is_publish`, `title`, `logo`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"General International Group\",\"ar\":\"\\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629\"}', '1589779328-header-logo.png', '2020-05-13 18:28:53', '2020-05-18 01:22:08');

-- --------------------------------------------------------

--
-- Table structure for table `nav_menus`
--

CREATE TABLE `nav_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `home` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `what_we_do` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `security` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `water` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facility` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `projects` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insights` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `search` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nav_menus`
--

INSERT INTO `nav_menus` (`id`, `is_publish`, `home`, `about`, `what_we_do`, `fire`, `security`, `water`, `facility`, `projects`, `insights`, `news`, `case`, `contact`, `search`, `lang`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"Home\",\"ar\":\"\\u0645\\u0646\\u0632\\u0644\"}', '{\"en\":\"About Us\",\"ar\":\"\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0639\\u0646\\u0627\"}', '{\"en\":\"What We Do\",\"ar\":\"\\u0627\\u0644\\u0630\\u064a \\u0646\\u0641\\u0639\\u0644\\u0647\"}', '{\"en\":\"Fire & Life <br>  Safety\",\"ar\":\"\\u0627\\u0644\\u0633\\u0644\\u0627\\u0645\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642 \\u0648\\u0627\\u0644\\u062d\\u064a\\u0627\\u0629\"}', '{\"en\":\"Security <br> &  ELV\",\"ar\":\"\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0639\\u0646\\u0627\"}', '{\"en\":\"Water <br> Treatment\",\"ar\":\"\\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647\"}', '{\"en\":\"Facilities Management\",\"ar\":\"\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0639\\u0646\\u0627\"}', '{\"en\":\"Projects\",\"ar\":\"\\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639\"}', '{\"en\":\"Insights\",\"ar\":\"\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0639\\u0646\\u0627\"}', '{\"en\":\"News & Events\",\"ar\":\"\\u0627\\u0644\\u0623\\u062e\\u0628\\u0627\\u0631 \\u0648 \\u0627\\u0644\\u0623\\u062d\\u062f\\u0627\\u062b\"}', '{\"en\":\"Case Studies\",\"ar\":\"\\u062f\\u0631\\u0627\\u0633\\u0627\\u062a \\u0627\\u0644\\u062d\\u0627\\u0644\\u0629\"}', '{\"en\":\"Contact Us\",\"ar\":\"\\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627\"}', '{\"en\":\"Search\",\"ar\":\"\\u0641\\u062a\\u0634\"}', '{\"en\":\"Lang\",\"ar\":\"\\u0644\\u063a\\u0629\"}', '2020-05-14 03:12:50', '2020-05-14 05:33:01');

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"WINDOWS DOORS\",\"ar\":\"\\u0623\\u0628\\u0648\\u0627\\u0628 \\u0627\\u0644\\u0646\\u0648\\u0627\\u0641\\u0630\"}', '2020-05-11 05:46:47', '2020-05-11 05:46:47'),
(2, 1, '{\"en\":\"WETEX\",\"ar\":\"WETEX\"}', '2020-05-11 05:47:04', '2020-05-11 05:47:04'),
(3, 1, '{\"en\":\"KPI TRAINING\",\"ar\":\"\\u062a\\u062f\\u0631\\u064a\\u0628 KPI\"}', '2020-05-11 05:47:29', '2020-05-11 05:47:29'),
(4, 1, '{\"en\":\"ERP ORIENTATION\",\"ar\":\"\\u0627\\u062a\\u062c\\u0627\\u0647 \\u062a\\u062e\\u0637\\u064a\\u0637 \\u0645\\u0648\\u0627\\u0631\\u062f \\u0627\\u0644\\u0645\\u0624\\u0633\\u0633\\u0627\\u062a\"}', '2020-05-11 05:47:47', '2020-05-11 05:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `news_medias`
--

CREATE TABLE `news_medias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_medias`
--

INSERT INTO `news_medias` (`id`, `is_publish`, `cat_id`, `post_id`, `media`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, '1589793082-1589194472-news1.jpg', '{\"en\":\"windows\",\"ar\":\"\\u0634\\u0628\\u0627\\u0628\\u064a\\u0643\"}', '2020-05-11 06:54:32', '2020-05-18 05:11:22'),
(2, 1, 1, 3, '1589793097-1589194563-news1_1.jpg', '{\"en\":\"windows news\",\"ar\":\"\\u0623\\u062e\\u0628\\u0627\\u0631 \\u0648\\u064a\\u0646\\u062f\\u0648\\u0632\"}', '2020-05-11 06:56:03', '2020-05-18 05:11:38'),
(3, 1, 1, 3, '1589793108-1589194619-news1_2.jpg', '{\"en\":\"windows news\",\"ar\":\"\\u0623\\u062e\\u0628\\u0627\\u0631 \\u0648\\u064a\\u0646\\u062f\\u0648\\u0632\"}', '2020-05-11 06:56:59', '2020-05-18 05:11:48'),
(4, 1, 1, 3, '1589793120-1589194649-news1_3.jpg', '{\"en\":\"windows news\",\"ar\":\"\\u0623\\u062e\\u0628\\u0627\\u0631 \\u0648\\u064a\\u0646\\u062f\\u0648\\u0632\"}', '2020-05-11 06:57:29', '2020-05-18 05:12:00'),
(5, 1, 2, 4, '1589793130-1589194671-news2.jpg', '{\"en\":\"book\",\"ar\":\"\\u0643\\u062a\\u0627\\u0628\"}', '2020-05-11 06:57:51', '2020-05-18 05:12:10'),
(6, 1, 2, 4, '1589793139-1589194707-news2_1.jpg', '{\"en\":\"book\",\"ar\":\"\\u0643\\u062a\\u0627\\u0628\"}', '2020-05-11 06:58:27', '2020-05-18 05:12:19'),
(7, 1, 2, 4, '1589793149-1589194731-news2_2.jpg', '{\"en\":\"book\",\"ar\":\"\\u0643\\u062a\\u0627\\u0628\"}', '2020-05-11 06:58:51', '2020-05-18 05:12:30'),
(8, 1, 2, 4, '1589793162-1589194762-news2_3.jpg', '{\"en\":\"book\",\"ar\":\"\\u0643\\u062a\\u0627\\u0628\"}', '2020-05-11 06:59:22', '2020-05-18 05:12:42'),
(9, 1, 3, 5, '1589793175-1589194790-news3.jpg', '{\"en\":\"training\",\"ar\":\"\\u062a\\u062f\\u0631\\u064a\\u0628\"}', '2020-05-11 06:59:50', '2020-05-18 05:12:55'),
(10, 1, 3, 5, '1589793184-1589194816-news3_1.jpg', '{\"en\":\"training\",\"ar\":\"\\u062a\\u062f\\u0631\\u064a\\u0628\"}', '2020-05-11 07:00:16', '2020-05-18 05:13:04'),
(11, 1, 3, 5, '1589793195-1589194845-news3_2.jpg', '{\"en\":\"training\",\"ar\":\"\\u062a\\u062f\\u0631\\u064a\\u0628\"}', '2020-05-11 07:00:45', '2020-05-18 05:13:15'),
(12, 1, 4, 6, '1589793204-1589194875-news4.jpg', '{\"en\":\"ORIENTATION\",\"ar\":\"\\u0627\\u062a\\u062c\\u0627\\u0647\"}', '2020-05-11 07:01:15', '2020-05-18 05:13:24'),
(13, 1, 4, 6, '1589793215-1589195181-news4_1.jpg', '{\"en\":\"ORIENTATION\",\"ar\":\"\\u0627\\u062a\\u062c\\u0627\\u0647\"}', '2020-05-11 07:06:21', '2020-05-18 05:13:35'),
(14, 1, 4, 6, '1589793225-1589195206-news4_2.jpg', '{\"en\":\"ORIENTATION\",\"ar\":\"\\u0627\\u062a\\u062c\\u0627\\u0647\"}', '2020-05-11 07:06:46', '2020-05-18 05:13:45'),
(15, 1, 4, 6, '1589793239-1589195227-news4_3.jpg', '{\"en\":\"ORIENTATION\",\"ar\":\"\\u0627\\u062a\\u062c\\u0627\\u0647\"}', '2020-05-11 07:07:07', '2020-05-18 05:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `news_posts`
--

CREATE TABLE `news_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `cat_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_posts`
--

INSERT INTO `news_posts` (`id`, `is_publish`, `cat_id`, `media_id`, `title`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 1, '{\"en\":\"WINDOWS DOORS & FACADES AND FM EXPO EVENT 2018\",\"ar\":\"\\u0623\\u0628\\u0648\\u0627\\u0628 \\u0648\\u0648\\u0627\\u062c\\u0647\\u0627\\u062a WINDOWS \\u0648\\u062d\\u062f\\u062b FM EXPO 2018\"}', 'windows-doors-facades-and-fm-expo-event-2018', '{\"en\":\"<p>We would like to thank everyone who took the time to visit our stand during the at Dubai World Trade Centre<\\/p>\\r\\n<p>Fusce non ante sed lorem rutrum feugiat. Vestibulum pellentesque, purus ut&nbsp;dignissim consectetur, nulla erat ultrices purus, ut&nbsp;consequat sem elit non sem. Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa. Fusce non ante sed lorem rutrum feugiat.<\\/p>\\r\\n<p>Praesent ultricies ut ipsum non laoreet. Nunc ac&nbsp;<a href=\\\"..\\/en\\/news-single\\\">ultricies<\\/a>&nbsp;leo. Nulla ac ultrices arcu. Nullam adipiscing lacus in consectetur posuere. Nunc malesuada tellus turpis, ac pretium orci molestie vel. Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa. Fusce non ante sed lorem rutrum feugiat.<\\/p>\\r\\n<ul>\\r\\n<li>First item of the list<\\/li>\\r\\n<li>Second item of the list<\\/li>\\r\\n<li>Third item of the list<\\/li>\\r\\n<\\/ul>\\r\\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris non laoreet dui. Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa. Fusce non ante sed lorem rutrum feugiat. Vestibulum pellentesque, purus ut&nbsp;dignissim consectetur, nulla erat ultrices purus, ut&nbsp;consequat sem elit non sem.<\\/p>\",\"ar\":\"<p>We would like to thank everyone who took the time to visit our stand during the at Dubai World Trade Centre<\\/p>\\r\\n<p>Fusce non ante sed lorem rutrum feugiat. Vestibulum pellentesque, purus ut&nbsp;dignissim consectetur, nulla erat ultrices purus, ut&nbsp;consequat sem elit non sem. Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa. Fusce non ante sed lorem rutrum feugiat.<\\/p>\\r\\n<p>Praesent ultricies ut ipsum non laoreet. Nunc ac&nbsp;<a href=\\\"..\\/en\\/news-single\\\">ultricies<\\/a>&nbsp;leo. Nulla ac ultrices arcu. Nullam adipiscing lacus in consectetur posuere. Nunc malesuada tellus turpis, ac pretium orci molestie vel. Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa. Fusce non ante sed lorem rutrum feugiat.<\\/p>\\r\\n<ul>\\r\\n<li>First item of the list<\\/li>\\r\\n<li>Second item of the list<\\/li>\\r\\n<li>Third item of the list<\\/li>\\r\\n<\\/ul>\\r\\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris non laoreet dui. Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa. Fusce non ante sed lorem rutrum feugiat. Vestibulum pellentesque, purus ut&nbsp;dignissim consectetur, nulla erat ultrices purus, ut&nbsp;consequat sem elit non sem.<\\/p>\"}', '2020-05-11 08:20:55', '2020-05-11 13:27:21'),
(4, 1, 2, 5, '{\"en\":\"WETEX 2018\",\"ar\":\"\\u0648\\u064a\\u062a\\u0643\\u0633 2018\"}', 'wetex-2018', '{\"en\":\"<p>We would like to thank everyone who took the time to visit our stand during the at Dubai World Trade Centre<\\/p>\\r\\n<p>Fusce non ante sed lorem rutrum feugiat. Vestibulum pellentesque, purus ut&nbsp;dignissim consectetur, nulla erat ultrices purus, ut&nbsp;consequat sem elit non sem. Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa. Fusce non ante sed lorem rutrum feugiat.<\\/p>\\r\\n<p>Praesent ultricies ut ipsum non laoreet. Nunc ac&nbsp;<a href=\\\"..\\/en\\/news-single\\\">ultricies<\\/a>&nbsp;leo. Nulla ac ultrices arcu. Nullam adipiscing lacus in consectetur posuere. Nunc malesuada tellus turpis, ac pretium orci molestie vel. Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa. Fusce non ante sed lorem rutrum feugiat.<\\/p>\\r\\n<ul>\\r\\n<li>First item of the list<\\/li>\\r\\n<li>Second item of the list<\\/li>\\r\\n<li>Third item of the list<\\/li>\\r\\n<\\/ul>\",\"ar\":\"<p>\\u0646\\u0648\\u062f \\u0623\\u0646 \\u0646\\u0634\\u0643\\u0631 \\u0643\\u0644 \\u0645\\u0646 \\u062e\\u0635\\u0635 \\u0627\\u0644\\u0648\\u0642\\u062a \\u0644\\u0632\\u064a\\u0627\\u0631\\u0629 \\u062c\\u0646\\u0627\\u062d\\u0646\\u0627 \\u062e\\u0644\\u0627\\u0644 \\u0645\\u0631\\u0643\\u0632 \\u062f\\u0628\\u064a \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645\\u064a<\\/p>\\r\\n<p>Fusce non ante sed lorem rutrum feugiat. \\u0627\\u0644\\u062f\\u0647\\u0644\\u064a\\u0632 pellentesque \\u060c purus ut consissim consectetur \\u060c nulla erat ultrices purus \\u060c ut \\u0646\\u062a\\u064a\\u062c\\u0629 sem elit non sem. Morbi lacus Massa\\u060c euismod ut turpis molestie\\u060c tristique sodales Est. Integer sit amet mi id sapien tempor molestie in nec Massa. Fusce non ante sed lorem rutrum feugiat.<\\/p>\\r\\n<p>\\u064a\\u062d\\u062a\\u0631\\u0645 ultricies ut ipsum non laoreet. Nunc ac ultricies leo. Nulla ac ultrices arcu. Nullam adipiscing lacus \\u0641\\u064a consectetur posuere. Nunc malesuada tellus turpis\\u060c ac pretium orci molestie vel. Morbi lacus Massa\\u060c euismod ut turpis molestie\\u060c tristique sodales Est. Integer sit amet mi id sapien tempor molestie in nec Massa. Fusce non ante sed lorem rutrum feugiat.<\\/p>\\r\\n<p>\\u0627\\u0644\\u0628\\u0646\\u062f \\u0627\\u0644\\u0623\\u0648\\u0644 \\u0645\\u0646 \\u0627\\u0644\\u0642\\u0627\\u0626\\u0645\\u0629<br \\/>\\u0627\\u0644\\u0628\\u0646\\u062f \\u0627\\u0644\\u062b\\u0627\\u0646\\u064a \\u0645\\u0646 \\u0627\\u0644\\u0642\\u0627\\u0626\\u0645\\u0629<br \\/>\\u0627\\u0644\\u0628\\u0646\\u062f \\u0627\\u0644\\u062b\\u0627\\u0644\\u062b \\u0645\\u0646 \\u0627\\u0644\\u0642\\u0627\\u0626\\u0645\\u0629<\\/p>\"}', '2020-05-11 08:56:11', '2020-05-11 13:27:42'),
(5, 1, 3, 9, '{\"en\":\"KPI TRAINING\",\"ar\":\"\\u062a\\u062f\\u0631\\u064a\\u0628 KPI\"}', 'kpi-training', '{\"en\":\"<p>We would like to thank everyone who took the time to visit our stand during the at Dubai World Trade Centre<\\/p>\\r\\n<p>Fusce non ante sed lorem rutrum feugiat. Vestibulum pellentesque, purus ut&nbsp;dignissim consectetur, nulla erat ultrices purus, ut&nbsp;consequat sem elit non sem. Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa. Fusce non ante sed lorem rutrum feugiat.<\\/p>\\r\\n<p>Praesent ultricies ut ipsum non laoreet. Nunc ac&nbsp;<a href=\\\"..\\/en\\/news-single\\\">ultricies<\\/a>&nbsp;leo. Nulla ac ultrices arcu. Nullam adipiscing lacus in consectetur posuere. Nunc malesuada tellus turpis, ac pretium orci molestie vel. Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa. Fusce non ante sed lorem rutrum feugiat.<\\/p>\\r\\n<ul>\\r\\n<li>First item of the list<\\/li>\\r\\n<li>Second item of the list<\\/li>\\r\\n<li>Third item of the list<\\/li>\\r\\n<\\/ul>\",\"ar\":\"<p>\\u0646\\u0648\\u062f \\u0623\\u0646 \\u0646\\u0634\\u0643\\u0631 \\u0643\\u0644 \\u0645\\u0646 \\u062e\\u0635\\u0635 \\u0627\\u0644\\u0648\\u0642\\u062a \\u0644\\u0632\\u064a\\u0627\\u0631\\u0629 \\u062c\\u0646\\u0627\\u062d\\u0646\\u0627 \\u062e\\u0644\\u0627\\u0644 \\u0645\\u0631\\u0643\\u0632 \\u062f\\u0628\\u064a \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645\\u064a<\\/p>\\r\\n<p>Fusce non ante sed lorem rutrum feugiat. \\u0627\\u0644\\u062f\\u0647\\u0644\\u064a\\u0632 pellentesque \\u060c purus ut consissim consectetur \\u060c nulla erat ultrices purus \\u060c ut \\u0646\\u062a\\u064a\\u062c\\u0629 sem elit non sem. Morbi lacus Massa\\u060c euismod ut turpis molestie\\u060c tristique sodales Est. Integer sit amet mi id sapien tempor molestie in nec Massa. Fusce non ante sed lorem rutrum feugiat.<\\/p>\\r\\n<p>\\u064a\\u062d\\u062a\\u0631\\u0645 ultricies ut ipsum non laoreet. Nunc ac ultricies leo. Nulla ac ultrices arcu. Nullam adipiscing lacus \\u0641\\u064a consectetur posuere. Nunc malesuada tellus turpis\\u060c ac pretium orci molestie vel. Morbi lacus Massa\\u060c euismod ut turpis molestie\\u060c tristique sodales Est. Integer sit amet mi id sapien tempor molestie in nec Massa. Fusce non ante sed lorem rutrum feugiat.<\\/p>\\r\\n<p>\\u0627\\u0644\\u0628\\u0646\\u062f \\u0627\\u0644\\u0623\\u0648\\u0644 \\u0645\\u0646 \\u0627\\u0644\\u0642\\u0627\\u0626\\u0645\\u0629<br \\/>\\u0627\\u0644\\u0628\\u0646\\u062f \\u0627\\u0644\\u062b\\u0627\\u0646\\u064a \\u0645\\u0646 \\u0627\\u0644\\u0642\\u0627\\u0626\\u0645\\u0629<br \\/>\\u0627\\u0644\\u0628\\u0646\\u062f \\u0627\\u0644\\u062b\\u0627\\u0644\\u062b \\u0645\\u0646 \\u0627\\u0644\\u0642\\u0627\\u0626\\u0645\\u0629<\\/p>\"}', '2020-05-11 09:03:06', '2020-05-11 13:28:05'),
(6, 1, 4, 12, '{\"en\":\"ERP ORIENTATION\",\"ar\":\"\\u0627\\u062a\\u062c\\u0627\\u0647 \\u062a\\u062e\\u0637\\u064a\\u0637 \\u0645\\u0648\\u0627\\u0631\\u062f \\u0627\\u0644\\u0645\\u0624\\u0633\\u0633\\u0627\\u062a\"}', 'erp-orientation', '{\"en\":\"<p>We would like to thank everyone who took the time to visit our stand during the at Dubai World Trade Centre<\\/p>\\r\\n<p>Fusce non ante sed lorem rutrum feugiat. Vestibulum pellentesque, purus ut&nbsp;dignissim consectetur, nulla erat ultrices purus, ut&nbsp;consequat sem elit non sem. Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa. Fusce non ante sed lorem rutrum feugiat.<\\/p>\\r\\n<p>Praesent ultricies ut ipsum non laoreet. Nunc ac&nbsp;<a href=\\\"..\\/en\\/news-single\\\">ultricies<\\/a>&nbsp;leo. Nulla ac ultrices arcu. Nullam adipiscing lacus in consectetur posuere. Nunc malesuada tellus turpis, ac pretium orci molestie vel. Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa. Fusce non ante sed lorem rutrum feugiat.<\\/p>\\r\\n<ul>\\r\\n<li>First item of the list<\\/li>\\r\\n<li>Second item of the list<\\/li>\\r\\n<li>Third item of the list<\\/li>\\r\\n<\\/ul>\",\"ar\":\"<p>\\u0646\\u0648\\u062f \\u0623\\u0646 \\u0646\\u0634\\u0643\\u0631 \\u0643\\u0644 \\u0645\\u0646 \\u062e\\u0635\\u0635 \\u0627\\u0644\\u0648\\u0642\\u062a \\u0644\\u0632\\u064a\\u0627\\u0631\\u0629 \\u062c\\u0646\\u0627\\u062d\\u0646\\u0627 \\u062e\\u0644\\u0627\\u0644 \\u0645\\u0631\\u0643\\u0632 \\u062f\\u0628\\u064a \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645\\u064a<\\/p>\\r\\n<p>Fusce non ante sed lorem rutrum feugiat. \\u0627\\u0644\\u062f\\u0647\\u0644\\u064a\\u0632 pellentesque \\u060c purus ut consissim consectetur \\u060c nulla erat ultrices purus \\u060c ut \\u0646\\u062a\\u064a\\u062c\\u0629 sem elit non sem. Morbi lacus Massa\\u060c euismod ut turpis molestie\\u060c tristique sodales Est. Integer sit amet mi id sapien tempor molestie in nec Massa. Fusce non ante sed lorem rutrum feugiat.<\\/p>\\r\\n<p>\\u064a\\u062d\\u062a\\u0631\\u0645 ultricies ut ipsum non laoreet. Nunc ac ultricies leo. Nulla ac ultrices arcu. Nullam adipiscing lacus \\u0641\\u064a consectetur posuere. Nunc malesuada tellus turpis\\u060c ac pretium orci molestie vel. Morbi lacus Massa\\u060c euismod ut turpis molestie\\u060c tristique sodales Est. Integer sit amet mi id sapien tempor molestie in nec Massa. Fusce non ante sed lorem rutrum feugiat.<\\/p>\\r\\n<p>\\u0627\\u0644\\u0628\\u0646\\u062f \\u0627\\u0644\\u0623\\u0648\\u0644 \\u0645\\u0646 \\u0627\\u0644\\u0642\\u0627\\u0626\\u0645\\u0629<br \\/>\\u0627\\u0644\\u0628\\u0646\\u062f \\u0627\\u0644\\u062b\\u0627\\u0646\\u064a \\u0645\\u0646 \\u0627\\u0644\\u0642\\u0627\\u0626\\u0645\\u0629<br \\/>\\u0627\\u0644\\u0628\\u0646\\u062f \\u0627\\u0644\\u062b\\u0627\\u0644\\u062b \\u0645\\u0646 \\u0627\\u0644\\u0642\\u0627\\u0626\\u0645\\u0629<\\/p>\"}', '2020-05-11 09:07:48', '2020-05-11 13:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `news_titles`
--

CREATE TABLE `news_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_titles`
--

INSERT INTO `news_titles` (`id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"News and Event | General International Group\",\"ar\":\"\\u0627\\u0644\\u0623\\u062e\\u0628\\u0627\\u0631 \\u0648\\u0627\\u0644\\u0641\\u0639\\u0627\\u0644\\u064a\\u0627\\u062a | \\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629\"}', '2020-05-04 08:04:54', '2020-05-04 08:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('089283ae-45fa-4b96-9a55-fd6bf12b184d', 'App\\Notifications\\BrochureNotification', 'App\\User', 4, '{\"brochure\":{\"brochure_id\":\"8\",\"requester_name\":\"Samandar Mirzaev\",\"requester_email\":\"samandarmirzayev@gmail.com\",\"requester_phone\":\"553943223\",\"updated_at\":\"2020-04-03T09:16:17.000000Z\",\"created_at\":\"2020-04-03T09:16:17.000000Z\",\"id\":179}}', NULL, '2020-04-03 05:16:23', '2020-04-03 05:16:23'),
('1c1ebd30-4171-48da-9305-fa94082a7c8b', 'App\\Notifications\\BrochureNotification', 'App\\User', 3, '{\"brochure\":{\"brochure_id\":\"7\",\"requester_name\":\"Samandar Mirzaev\",\"requester_email\":\"samandarmirzayev@gmail.com\",\"requester_phone\":\"553943223\",\"updated_at\":\"2020-04-04T11:38:50.000000Z\",\"created_at\":\"2020-04-04T11:38:50.000000Z\",\"id\":182}}', NULL, '2020-04-04 07:38:54', '2020-04-04 07:38:54'),
('1f8eae43-a8f7-49b0-a27f-1ed4175be3a0', 'App\\Notifications\\BrochureNotification', 'App\\User', 1, '{\"brochure\":{\"brochure_id\":\"7\",\"requester_name\":\"Samandar Mirzaev\",\"requester_email\":\"samandarmirzayev@gmail.com\",\"requester_phone\":\"553943223\",\"updated_at\":\"2020-04-04T11:38:10.000000Z\",\"created_at\":\"2020-04-04T11:38:10.000000Z\",\"id\":181}}', '2020-04-04 08:46:31', '2020-04-04 07:38:14', '2020-04-04 08:46:31'),
('26f3cc5f-50a2-459e-8d46-ab513f458f72', 'App\\Notifications\\BrochureNotification', 'App\\User', 1, '{\"brochure\":{\"brochure_id\":\"8\",\"requester_name\":\"Samandar Mirzaev\",\"requester_email\":\"samandarmirzayev@gmail.com\",\"requester_phone\":\"553943223\",\"updated_at\":\"2020-04-05T06:43:46.000000Z\",\"created_at\":\"2020-04-05T06:43:46.000000Z\",\"id\":183}}', '2020-05-03 05:40:31', '2020-04-05 02:43:53', '2020-05-03 05:40:31'),
('33d8ba35-edb0-4d68-8068-183484203726', 'App\\Notifications\\BrochureNotification', 'App\\User', 4, '{\"brochure\":{\"brochure_id\":\"11\",\"requester_name\":\"Samandar Mirzaev\",\"requester_email\":\"samandarmirzayev@gmail.com\",\"requester_phone\":\"553943223\",\"updated_at\":\"2020-05-07T06:59:47.000000Z\",\"created_at\":\"2020-05-07T06:59:47.000000Z\",\"id\":185}}', NULL, '2020-05-07 02:59:54', '2020-05-07 02:59:54'),
('4feb4f76-68e9-40be-aab3-4e34d4e1a5d6', 'App\\Notifications\\BrochureNotification', 'App\\User', 4, '{\"brochure\":{\"brochure_id\":\"8\",\"requester_name\":\"Samandar Mirzaev\",\"requester_email\":\"samandarmirzayev@gmail.com\",\"requester_phone\":\"553943223\",\"updated_at\":\"2020-04-05T06:43:46.000000Z\",\"created_at\":\"2020-04-05T06:43:46.000000Z\",\"id\":183}}', NULL, '2020-04-05 02:43:53', '2020-04-05 02:43:53'),
('58fc915d-a478-4b5b-95c3-f8495f11540a', 'App\\Notifications\\BrochureNotification', 'App\\User', 3, '{\"brochure\":{\"brochure_id\":\"11\",\"requester_name\":\"Samandar Mirzaev\",\"requester_email\":\"samandarmirzayev@gmail.com\",\"requester_phone\":\"553943223\",\"updated_at\":\"2020-05-07T06:59:47.000000Z\",\"created_at\":\"2020-05-07T06:59:47.000000Z\",\"id\":185}}', NULL, '2020-05-07 02:59:54', '2020-05-07 02:59:54'),
('7341a835-ad4b-4bef-9fad-830e3dd60231', 'App\\Notifications\\BrochureNotification', 'App\\User', 3, '{\"brochure\":{\"brochure_id\":\"8\",\"requester_name\":\"Samandar Mirzaev\",\"requester_email\":\"samandarmirzayev@gmail.com\",\"requester_phone\":\"553943223\",\"updated_at\":\"2020-04-05T06:43:46.000000Z\",\"created_at\":\"2020-04-05T06:43:46.000000Z\",\"id\":183}}', NULL, '2020-04-05 02:43:53', '2020-04-05 02:43:53'),
('7a25a7e3-f685-45b4-8f64-3f8b733cb392', 'App\\Notifications\\BrochureNotification', 'App\\User', 3, '{\"brochure\":{\"brochure_id\":\"8\",\"requester_name\":\"Samandar Mirzaev\",\"requester_email\":\"samandarmirzayev@gmail.com\",\"requester_phone\":\"553943223\",\"updated_at\":\"2020-04-03T09:16:17.000000Z\",\"created_at\":\"2020-04-03T09:16:17.000000Z\",\"id\":179}}', NULL, '2020-04-03 05:16:23', '2020-04-03 05:16:23'),
('8f6e40ee-59b5-4399-ab91-fa75ab82231d', 'App\\Notifications\\BrochureNotification', 'App\\User', 1, '{\"brochure\":{\"brochure_id\":\"8\",\"requester_name\":\"Samandar Mirzaev\",\"requester_email\":\"s.mirzayev@9yards.ae\",\"requester_phone\":\"553943223\",\"updated_at\":\"2020-04-05T06:44:15.000000Z\",\"created_at\":\"2020-04-05T06:44:15.000000Z\",\"id\":184}}', '2020-05-03 05:40:31', '2020-04-05 02:44:19', '2020-05-03 05:40:31'),
('970e2a00-f017-4173-8eff-2e35b829d31d', 'App\\Notifications\\BrochureNotification', 'App\\User', 4, '{\"brochure\":{\"brochure_id\":\"7\",\"requester_name\":\"Samandar Mirzaev\",\"requester_email\":\"samandarmirzayev@gmail.com\",\"requester_phone\":\"553943223\",\"updated_at\":\"2020-04-04T11:38:50.000000Z\",\"created_at\":\"2020-04-04T11:38:50.000000Z\",\"id\":182}}', NULL, '2020-04-04 07:38:54', '2020-04-04 07:38:54'),
('a03b42f3-b0a7-486e-ade2-988ea7abeee1', 'App\\Notifications\\BrochureNotification', 'App\\User', 1, '{\"brochure\":{\"brochure_id\":\"8\",\"requester_name\":\"Samandar Mirzaev\",\"requester_email\":\"samandarmirzayev@gmail.com\",\"requester_phone\":\"553943223\",\"updated_at\":\"2020-04-03T09:16:17.000000Z\",\"created_at\":\"2020-04-03T09:16:17.000000Z\",\"id\":179}}', '2020-04-03 16:36:31', '2020-04-03 05:16:21', '2020-04-03 16:36:31'),
('a4347048-9c51-4690-be9c-7621774e055c', 'App\\Notifications\\BrochureNotification', 'App\\User', 1, '{\"brochure\":{\"brochure_id\":\"7\",\"requester_name\":\"Samandar Mirzaev\",\"requester_email\":\"samandarmirzayev@gmail.com\",\"requester_phone\":\"553943223\",\"updated_at\":\"2020-04-04T11:36:39.000000Z\",\"created_at\":\"2020-04-04T11:36:39.000000Z\",\"id\":180}}', '2020-04-04 08:46:31', '2020-04-04 07:36:46', '2020-04-04 08:46:31'),
('b37ccd99-dd74-4e98-9923-5b427a632581', 'App\\Notifications\\BrochureNotification', 'App\\User', 1, '{\"brochure\":{\"brochure_id\":\"7\",\"requester_name\":\"Samandar Mirzaev\",\"requester_email\":\"samandarmirzayev@gmail.com\",\"requester_phone\":\"553943223\",\"updated_at\":\"2020-04-04T11:38:50.000000Z\",\"created_at\":\"2020-04-04T11:38:50.000000Z\",\"id\":182}}', '2020-04-04 08:46:31', '2020-04-04 07:38:54', '2020-04-04 08:46:31'),
('e5774cc8-07cc-43b0-b3cc-a3883fe9f4d8', 'App\\Notifications\\BrochureNotification', 'App\\User', 3, '{\"brochure\":{\"brochure_id\":\"8\",\"requester_name\":\"Samandar Mirzaev\",\"requester_email\":\"s.mirzayev@9yards.ae\",\"requester_phone\":\"553943223\",\"updated_at\":\"2020-04-05T06:44:15.000000Z\",\"created_at\":\"2020-04-05T06:44:15.000000Z\",\"id\":184}}', NULL, '2020-04-05 02:44:19', '2020-04-05 02:44:19'),
('ea845e70-5cd3-4421-908a-04b1d0abcf9e', 'App\\Notifications\\BrochureNotification', 'App\\User', 1, '{\"brochure\":{\"brochure_id\":\"11\",\"requester_name\":\"Samandar Mirzaev\",\"requester_email\":\"samandarmirzayev@gmail.com\",\"requester_phone\":\"553943223\",\"updated_at\":\"2020-05-07T06:59:47.000000Z\",\"created_at\":\"2020-05-07T06:59:47.000000Z\",\"id\":185}}', NULL, '2020-05-07 02:59:54', '2020-05-07 02:59:54'),
('fcd464ef-a5a4-4475-8717-21504333a04e', 'App\\Notifications\\BrochureNotification', 'App\\User', 4, '{\"brochure\":{\"brochure_id\":\"8\",\"requester_name\":\"Samandar Mirzaev\",\"requester_email\":\"s.mirzayev@9yards.ae\",\"requester_phone\":\"553943223\",\"updated_at\":\"2020-04-05T06:44:15.000000Z\",\"created_at\":\"2020-04-05T06:44:15.000000Z\",\"id\":184}}', NULL, '2020-04-05 02:44:19', '2020-04-05 02:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `open_graph_site_descs`
--

CREATE TABLE `open_graph_site_descs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `open_graph_site_descs`
--

INSERT INTO `open_graph_site_descs` (`id`, `is_publish`, `site_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 0, 'General International Group', 'We have more than 33 years of professional experience in design, supply, installation, commissioning of projects and providing maintenance services to prestigious clients of different market sectors.  Our offices and warehouse facilities located in Abu Dhabi, Al Ain, Dubai & Umm Al Quwain allows us to be', '2020-03-21 09:33:45', '2020-03-21 12:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `open_graph_titles`
--

CREATE TABLE `open_graph_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `open_graph_titles`
--

INSERT INTO `open_graph_titles` (`id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 0, 'Top Best Safety company in the world, Best Water treatment global and international', '2020-03-21 08:00:44', '2020-05-03 05:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `open_graph_type_url_imgs`
--

CREATE TABLE `open_graph_type_url_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `open_graph_type_url_imgs`
--

INSERT INTO `open_graph_type_url_imgs` (`id`, `is_publish`, `type`, `url`, `image`, `created_at`, `updated_at`) VALUES
(1, 0, 'generalintlgroup_com:services', 'https://generalintlgroup.com/contact-us/', 'https://generalintlgroup.com/wp-content/themes/general_international/images/header-logo.png', '2020-03-21 08:51:45', '2020-03-21 12:31:02');

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(8, '15846032713.jpg', '2020-03-19 03:34:31', '2020-03-19 03:34:31'),
(14, '158857503315846208581.jpg', '2020-05-04 02:50:33', '2020-05-04 02:50:33');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Full-Stuck WD & SEO Manager', '2020-03-18 20:00:00', '2020-03-23 02:13:06'),
(2, 'Human Resource', '2020-03-19 02:13:31', '2020-03-19 02:13:31'),
(6, 'Manager', '2020-03-19 02:27:48', '2020-03-19 02:27:48'),
(7, 'HR Manager', '2020-03-19 09:11:10', '2020-03-19 14:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `cat_id` int(10) UNSIGNED DEFAULT NULL,
  `media` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `is_publish`, `cat_id`, `media`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '1589791505-1589113546-difc.jpg', '{\"en\":\"DIFC ICD- Brookfield Place, Dubai\",\"ar\":\"\\u0645\\u0631\\u0643\\u0632 \\u062f\\u0628\\u064a \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645\\u064a - \\u0628\\u0631\\u0648\\u0643\\u0641\\u064a\\u0644\\u062f \\u0628\\u0644\\u064a\\u0633 \\u060c \\u062f\\u0628\\u064a\"}', '{\"en\":\"<p>Plot No. : GB03\\/04, Dubai<\\/p>\\r\\n<p>Project Consultant : PRIEDEMANN<\\/p>\\r\\n<p>Solution \\/ System : Passive Fire Protection<\\/p>\",\"ar\":\"<p style=\\\"text-align: right;\\\">\\u0627\\u0644\\u0642\\u0637\\u0639\\u0629 \\u0631\\u0642\\u0645. : GB03 \\/ 04 \\u060c \\u062f\\u0628\\u064a<\\/p>\\r\\n<p style=\\\"text-align: right;\\\">\\u0627\\u0633\\u062a\\u0634\\u0627\\u0631\\u064a \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639: \\u0628\\u0631\\u064a\\u062f\\u0645\\u0627\\u0646<\\/p>\\r\\n<p style=\\\"text-align: right;\\\">\\u0627\\u0644\\u062d\\u0644 \\/ \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645: \\u062d\\u0645\\u0627\\u064a\\u0629 \\u0641\\u0627\\u0639\\u0644\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<div id=\\\"gtx-trans\\\" style=\\\"position: absolute; left: -110px; top: -14px;\\\">&nbsp;<\\/div>\"}', '2020-05-10 08:26:42', '2020-05-18 04:45:05'),
(2, 1, 3, '1589791514-1589113710-shams.jpg', '{\"en\":\"SHAMS DEVELOPMENT REEM TOWER ONE\",\"ar\":\"\\u062a\\u0637\\u0648\\u064a\\u0631 \\u0628\\u0631\\u062c \\u0634\\u0645\\u0633 \\u0628\\u0631\\u062c \\u0648\\u0627\\u062d\\u062f\"}', '{\"en\":\"<p>Plot No. : Reem Island, Sector RS1 Plot <br \\/> S1-C03 &ndash; Abu Dhabi, U.A.E<\\/p>\\r\\n<p>Design Consultant : M\\/s MAISAM ARCHITECTS ENGINEERS<\\/p>\\r\\n<p>Solution \\/ System: Passive Fire Protection<\\/p>\",\"ar\":\"<p style=\\\"text-align: right;\\\">\\u0627\\u0644\\u0642\\u0637\\u0639\\u0629 \\u0631\\u0642\\u0645. : \\u062c\\u0632\\u064a\\u0631\\u0629 \\u0627\\u0644\\u0631\\u064a\\u0645 \\u060c \\u0642\\u0637\\u0627\\u0639 RS1 \\u0645\\u0624\\u0627\\u0645\\u0631\\u0629 S1-C03 - \\u0623\\u0628\\u0648 \\u0638\\u0628\\u064a \\u060c \\u0627\\u0644\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u062d\\u062f\\u0629<br \\/>\\u0627\\u0633\\u062a\\u0634\\u0627\\u0631\\u064a \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645: \\u0645\\u0647\\u0646\\u062f\\u0633\\u0648\\u0646 \\u0645\\u0639\\u0645\\u0627\\u0631\\u064a\\u0648\\u0646 \\u0645\\u0639\\u0645\\u0627\\u0631\\u064a\\u0648\\u0646<\\/p>\\r\\n<p style=\\\"text-align: right;\\\">\\u0627\\u0644\\u062d\\u0644 \\/ \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645: \\u062d\\u0645\\u0627\\u064a\\u0629 \\u0641\\u0627\\u0639\\u0644\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642<\\/p>\\r\\n<div id=\\\"gtx-trans\\\" style=\\\"position: absolute; left: -67px; top: -14px;\\\">&nbsp;<\\/div>\"}', '2020-05-10 08:28:30', '2020-05-18 04:45:14'),
(3, 1, 4, '1589791523-1589113776-tiara.jpg', '{\"en\":\"TIARA UNITED TOWERS\",\"ar\":\"\\u0623\\u0628\\u0631\\u0627\\u062c \\u062a\\u064a\\u0627\\u0631\\u0627 \\u0627\\u0644\\u0645\\u062a\\u062d\\u062f\\u0629\"}', '{\"en\":\"<p>Plot No. : 3460888\\/3460887 &ndash; Business Bay Dubai<\\/p>\\r\\n<p>Consultant : M\\/s. ADP Ingineerie<\\/p>\\r\\n<p>Solution \\/ System: Passive Fire Protection<\\/p>\",\"ar\":\"<p style=\\\"text-align: right;\\\">\\u0627\\u0644\\u0642\\u0637\\u0639\\u0629 \\u0631\\u0642\\u0645. : 3460888\\/3460887 - \\u062e\\u0644\\u064a\\u062c \\u0627\\u0644\\u0623\\u0639\\u0645\\u0627\\u0644 \\u0641\\u064a \\u062f\\u0628\\u064a<\\/p>\\r\\n<p style=\\\"text-align: right;\\\">\\u0627\\u0644\\u0645\\u0633\\u062a\\u0634\\u0627\\u0631: \\u0645 \\/ \\u062b. ADP INGINEERIE<\\/p>\\r\\n<p style=\\\"text-align: right;\\\">\\u0627\\u0644\\u062d\\u0644 \\/ \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645: \\u062d\\u0645\\u0627\\u064a\\u0629 \\u0641\\u0627\\u0639\\u0644\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642<\\/p>\\r\\n<div id=\\\"gtx-trans\\\" style=\\\"position: absolute; left: -45px; top: -14px;\\\">&nbsp;<\\/div>\"}', '2020-05-10 08:29:36', '2020-05-18 04:45:23'),
(4, 1, 5, '1589791532-1589115481-difc.jpg', '{\"en\":\"DIFC ICD- BROOKFIELD PLACE, DUBAI\",\"ar\":\"\\u0645\\u0631\\u0643\\u0632 \\u062f\\u0628\\u064a \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645\\u064a - \\u0628\\u0631\\u0648\\u0643\\u0641\\u0644\\u062f \\u0628\\u0644\\u064a\\u0633 \\u060c \\u062f\\u0628\\u064a\"}', '{\"en\":\"<p>Plot No. : GB03\\/04, Dubai<\\/p>\\r\\n<p>Project Consultant : PRIEDEMANN<\\/p>\\r\\n<p>Solution \\/ System : Passive Fire Protection<\\/p>\",\"ar\":\"<ul style=\\\"list-style-type: square;\\\">\\r\\n<li style=\\\"text-align: right;\\\">\\u0627\\u0644\\u0642\\u0637\\u0639\\u0629 \\u0631\\u0642\\u0645. : GB03 \\/ 04 \\u060c \\u062f\\u0628\\u064a<\\/li>\\r\\n<li style=\\\"text-align: right;\\\">\\u0627\\u0633\\u062a\\u0634\\u0627\\u0631\\u064a \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639: \\u0628\\u0631\\u064a\\u062f\\u0645\\u0627\\u0646<\\/li>\\r\\n<li style=\\\"text-align: right;\\\">\\u0627\\u0644\\u062d\\u0644 \\/ \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645: \\u062d\\u0645\\u0627\\u064a\\u0629 \\u0641\\u0627\\u0639\\u0644\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642<\\/li>\\r\\n<\\/ul>\"}', '2020-05-10 08:31:04', '2020-05-18 04:45:32'),
(5, 1, 6, '1589791540-1589115743-tiara.jpg', '{\"en\":\"SHAMS DEVELOPMENT REEM TOWER ONE\",\"ar\":\"\\u062a\\u0637\\u0648\\u064a\\u0631 \\u0628\\u0631\\u062c \\u0634\\u0645\\u0633 \\u0628\\u0631\\u062c \\u0648\\u0627\\u062d\\u062f\"}', '{\"en\":\"<p>Plot No. : Reem Island, Sector RS1 Plot <br \\/> S1-C03 &ndash; Abu Dhabi, U.A.E<\\/p>\\r\\n<p>Design Consultant : M\\/s MAISAM ARCHITECTS ENGINEERS<\\/p>\\r\\n<p>Solution \\/ System: Passive Fire Protection<\\/p>\",\"ar\":\"<p style=\\\"text-align: right;\\\">\\u0627\\u0644\\u0642\\u0637\\u0639\\u0629 \\u0631\\u0642\\u0645. : \\u062c\\u0632\\u064a\\u0631\\u0629 \\u0627\\u0644\\u0631\\u064a\\u0645 \\u060c \\u0642\\u0637\\u0627\\u0639 RS1 \\u0645\\u0624\\u0627\\u0645\\u0631\\u0629 S1-C03 - \\u0623\\u0628\\u0648 \\u0638\\u0628\\u064a \\u060c \\u0627\\u0644\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062a\\u062d\\u062f\\u0629<\\/p>\\r\\n<p style=\\\"text-align: right;\\\">\\u0627\\u0633\\u062a\\u0634\\u0627\\u0631\\u064a \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645: \\u0645\\u0647\\u0646\\u062f\\u0633\\u0648\\u0646 \\u0645\\u0639\\u0645\\u0627\\u0631\\u064a\\u0648\\u0646 \\u0645\\u0639\\u0645\\u0627\\u0631\\u064a\\u0648\\u0646<\\/p>\\r\\n<p style=\\\"text-align: right;\\\">\\u0627\\u0644\\u062d\\u0644 \\/ \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645: \\u062d\\u0645\\u0627\\u064a\\u0629 \\u0641\\u0627\\u0639\\u0644\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642<\\/p>\\r\\n<div id=\\\"gtx-trans\\\" style=\\\"position: absolute; left: -80px; top: -14px;\\\">&nbsp;<\\/div>\"}', '2020-05-10 08:32:15', '2020-05-18 04:45:40'),
(7, 1, 8, '1589884922-1589115743-tiara.jpg', '{\"en\":\"Lorem Inpsum\",\"ar\":\"Lorem Ipsum\"}', '{\"en\":\"<p>Plot No. : Reem Island,&nbsp;Lorem Ipsum<\\/p>\\r\\n<p>Design Consultant : M\\/s MAISAM Lorem Ipsum<\\/p>\\r\\n<p>Solution \\/ System: Passive Lorem Ipsum<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<div id=\\\"gtx-trans\\\" style=\\\"position: absolute; left: 355px; top: 48px;\\\">&nbsp;<\\/div>\",\"ar\":\"<p>&nbsp;<\\/p>\\r\\n<ul style=\\\"list-style-type: square;\\\">\\r\\n<li>Lorem Ipsum 1<\\/li>\\r\\n<\\/ul>\\r\\n<ul style=\\\"list-style-type: square;\\\">\\r\\n<li>Lorem Ipsum 2<\\/li>\\r\\n<\\/ul>\\r\\n<ul style=\\\"list-style-type: square;\\\">\\r\\n<li>Lorem Ipsum 3<\\/li>\\r\\n<\\/ul>\\r\\n<p>&nbsp;<\\/p>\\r\\n<div id=\\\"gtx-trans\\\" style=\\\"position: absolute; left: -5px; top: -14px;\\\">&nbsp;<\\/div>\"}', '2020-05-19 06:42:02', '2020-05-19 06:43:05'),
(8, 1, 9, '1589885068-1589115481-difc.jpg', '{\"en\":\"Lorem Industrial\",\"ar\":\"Lorem Industrial\"}', '{\"en\":\"<p>PLOT NO. : REEM ISLAND,&nbsp;LOREM IPSUM<\\/p>\\r\\n<p>DESIGN CONSULTANT : M\\/S MAISAM LOREM IPSUM<\\/p>\\r\\n<p>SOLUTION \\/ SYSTEM: PASSIVE LOREM IPSUM<\\/p>\",\"ar\":\"<div class=\\\"work-img\\\">PLOT NO. : REEM ISLAND,&nbsp;LOREM IPSUM<\\/div>\\r\\n<div class=\\\"work-intro\\\">\\r\\n<div class=\\\"work-descr\\\">\\r\\n<p>DESIGN CONSULTANT : M\\/S MAISAM LOREM IPSUM<\\/p>\\r\\n<p>SOLUTION \\/ SYSTEM: PASSIVE LOREM IPSUM<\\/p>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<p>&nbsp;<\\/p>\"}', '2020-05-19 06:44:28', '2020-05-19 06:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `project_banners`
--

CREATE TABLE `project_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_banners`
--

INSERT INTO `project_banners` (`id`, `is_publish`, `banner`, `head_title`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '1589791236-1589065442-electrical.jpg', '{\"en\":\"PROJECTS\",\"ar\":\"\\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639\"}', '{\"en\":\"YOU WANT IT. WE BUILD IT.\",\"ar\":\"\\u0627\\u0646\\u062a \\u062a\\u0631\\u064a\\u062f\\u0647. \\u0646\\u062d\\u0646 \\u0646\\u0628\\u0646\\u064a \\u0639\\u0644\\u064a\\u0647.\"}', '2020-05-10 07:26:00', '2020-05-18 04:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"ALL PROJECTS\",\"ar\":null}', '2020-05-10 07:26:50', '2020-05-19 06:25:56'),
(2, 1, '{\"en\":\"HOSPITALITY & HEALTHCARE\",\"ar\":null}', '2020-05-10 07:27:08', '2020-05-19 06:25:50'),
(3, 1, '{\"en\":\"RESIDENTIAL\\/ COMMERCIAL\",\"ar\":null}', '2020-05-10 07:27:48', '2020-05-19 06:25:43'),
(4, 1, '{\"en\":\"GOVERNMENT\",\"ar\":null}', '2020-05-10 07:28:17', '2020-05-19 06:25:37'),
(5, 1, '{\"en\":\"ENERGY & WATER\",\"ar\":null}', '2020-05-10 07:28:37', '2020-05-19 06:25:31'),
(6, 1, '{\"en\":\"TRANSPORTATION\",\"ar\":null}', '2020-05-10 07:28:57', '2020-05-19 06:25:25'),
(8, 1, '{\"en\":\"Mixed Use\",\"ar\":null}', '2020-05-19 06:24:12', '2020-05-19 06:24:12'),
(9, 1, '{\"en\":\"Industrial\",\"ar\":null}', '2020-05-19 06:25:07', '2020-05-19 06:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `project_titles`
--

CREATE TABLE `project_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_titles`
--

INSERT INTO `project_titles` (`id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"Projects | General International Group\",\"ar\":\"\\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 | \\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629\"}', '2020-04-01 09:13:20', '2020-04-01 09:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `robots`
--

CREATE TABLE `robots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `robots` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `robots`
--

INSERT INTO `robots` (`id`, `is_publish`, `robots`, `created_at`, `updated_at`) VALUES
(1, 1, 'index,follow', '2020-03-22 07:14:28', '2020-03-22 07:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '2020-03-18 20:00:00', '2020-03-18 20:00:00'),
(2, 'Viewer', '2020-03-19 01:44:31', '2020-03-19 01:57:34'),
(3, 'Editor', '2020-03-19 01:46:48', '2020-03-19 01:46:48'),
(6, 'HR', '2020-03-19 01:50:00', '2020-03-19 01:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `security_titles`
--

CREATE TABLE `security_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `security_titles`
--

INSERT INTO `security_titles` (`id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"Security and ELV | General International Group\",\"ar\":\"\\u0627\\u0644\\u0623\\u0645\\u0646 \\u0648 ELV | \\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629\"}', '2020-05-04 05:51:01', '2020-05-04 05:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `service_facilities`
--

CREATE TABLE `service_facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `type_id` int(10) UNSIGNED DEFAULT NULL,
  `cat_id` int(10) UNSIGNED DEFAULT NULL,
  `media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_facilities`
--

INSERT INTO `service_facilities` (`id`, `is_publish`, `type_id`, `cat_id`, `media`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 500, 1, '1589782658-1589043653-facility.jpg', '{\"en\":\"Facilities Management Services\",\"ar\":\"\\u062e\\u062f\\u0645\\u0627\\u062a \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642\"}', '{\"en\":\"<div class=\\\"card-posted\\\">Building Confidence Based on a Foundation of Trust.<\\/div>\\r\\n<h4 class=\\\"card-title\\\">FACILITIES MANAGEMENT SERVICES<\\/h4>\\r\\n<div class=\\\"card-text\\\">The Facilities Maintenance Division came as a realization for the need to focus on complete maintenance works (Electrical, HVAC, Mechanical &amp; Civil) given the growing number of Towers &amp; Home owners in the Emirates, and the lack of professional organizations with a qualified team of engineers and technicians to handle complex repair issues. Works in Ventilation, Air Condition and Cooling systems was launched in 1989 in GENINT. It is considered as one of the primary lines of the activity that falls under our Electro-Mechanical Division. From there, spawned our engineering capabilities on the Plumbing systems followed afterwards by the development of our Electrical team. Our key strength stems from the fact that we can provide all the necessary MEP services along with servicing the key specialized services IN HOUSE. Thus, providing a holistic \\/ turnkey approach for our customers.\\r\\n<h3>Our Solutions<\\/h3>\\r\\n<p>&bull; MANAGEMENT<br \\/>&bull; CAFM,<br \\/>&bull; ASSET TAGGING,<br \\/>&bull; LABELING<br \\/>&bull; BAR CODING<br \\/>&bull; ENERGY SAVING<\\/p>\\r\\n<\\/div>\",\"ar\":\"<p>\\u0628\\u0646\\u0627\\u0621 \\u0627\\u0644\\u062b\\u0642\\u0629 \\u0639\\u0644\\u0649 \\u0623\\u0633\\u0627\\u0633 \\u0627\\u0644\\u062b\\u0642\\u0629.<br \\/>\\u062e\\u062f\\u0645\\u0627\\u062a \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642<br \\/>\\u062c\\u0627\\u0621 \\u0642\\u0633\\u0645 \\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0625\\u062f\\u0631\\u0627\\u0643\\u064b\\u0627 \\u0644\\u0644\\u062d\\u0627\\u062c\\u0629 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u062a\\u0631\\u0643\\u064a\\u0632 \\u0639\\u0644\\u0649 \\u0623\\u0639\\u0645\\u0627\\u0644 \\u0627\\u0644\\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0643\\u0627\\u0645\\u0644\\u0629 (\\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0621 \\u0648\\u0627\\u0644\\u062a\\u062f\\u0641\\u0626\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0647\\u0648\\u064a\\u0629 \\u0648\\u062a\\u0643\\u064a\\u064a\\u0641 \\u0627\\u0644\\u0647\\u0648\\u0627\\u0621 \\u0648\\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u062f\\u0646\\u064a\\u0629) \\u0646\\u0638\\u0631\\u064b\\u0627 \\u0644\\u0644\\u0639\\u062f\\u062f \\u0627\\u0644\\u0645\\u062a\\u0632\\u0627\\u064a\\u062f \\u0645\\u0646 \\u0623\\u0628\\u0631\\u0627\\u062c \\u0648\\u0645\\u0644\\u0627\\u0643 \\u0627\\u0644\\u0645\\u0646\\u0627\\u0632\\u0644 \\u0641\\u064a \\u0627\\u0644\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a \\u060c \\u0648\\u0646\\u0642\\u0635 \\u0627\\u0644\\u0645\\u0646\\u0638\\u0645\\u0627\\u062a \\u0627\\u0644\\u0645\\u0647\\u0646\\u064a\\u0629 \\u0645\\u0639 \\u0641\\u0631\\u064a\\u0642 \\u0645\\u0624\\u0647\\u0644 \\u0645\\u0646 \\u0627\\u0644\\u0645\\u0647\\u0646\\u062f\\u0633\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0641\\u0646\\u064a\\u064a\\u0646 \\u0644\\u0644\\u062a\\u0639\\u0627\\u0645\\u0644 \\u0645\\u0639 \\u0642\\u0636\\u0627\\u064a\\u0627 \\u0627\\u0644\\u0625\\u0635\\u0644\\u0627\\u062d \\u0627\\u0644\\u0645\\u0639\\u0642\\u062f\\u0629. \\u062a\\u0645 \\u0625\\u0637\\u0644\\u0627\\u0642 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0641\\u064a \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u062a\\u0647\\u0648\\u064a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0643\\u064a\\u064a\\u0641 \\u0648\\u0627\\u0644\\u062a\\u0628\\u0631\\u064a\\u062f \\u0641\\u064a \\u0639\\u0627\\u0645 1989 \\u0641\\u064a GENINT. \\u064a\\u0639\\u062a\\u0628\\u0631 \\u0623\\u062d\\u062f \\u0627\\u0644\\u062e\\u0637\\u0648\\u0637 \\u0627\\u0644\\u0623\\u0633\\u0627\\u0633\\u064a\\u0629 \\u0644\\u0644\\u0646\\u0634\\u0627\\u0637 \\u0627\\u0644\\u0630\\u064a \\u064a\\u0642\\u0639 \\u062a\\u062d\\u062a \\u0642\\u0633\\u0645\\u0646\\u0627 \\u0627\\u0644\\u0643\\u0647\\u0631\\u0648\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629. \\u0645\\u0646 \\u0647\\u0646\\u0627\\u0643 \\u060c \\u0648\\u0644\\u062f\\u062a \\u0642\\u062f\\u0631\\u0627\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0639\\u0644\\u0649 \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u0633\\u0628\\u0627\\u0643\\u0629 \\u062a\\u0644\\u064a\\u0647\\u0627 \\u0628\\u0639\\u062f \\u0630\\u0644\\u0643 \\u062a\\u0637\\u0648\\u064a\\u0631 \\u0641\\u0631\\u064a\\u0642 \\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0621 \\u0644\\u062f\\u064a\\u0646\\u0627. \\u062a\\u0646\\u0628\\u0639 \\u0642\\u0648\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\\u0629 \\u0645\\u0646 \\u062d\\u0642\\u064a\\u0642\\u0629 \\u0623\\u0646\\u0647 \\u064a\\u0645\\u0643\\u0646\\u0646\\u0627 \\u062a\\u0642\\u062f\\u064a\\u0645 \\u062c\\u0645\\u064a\\u0639 \\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0626\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629 \\u0627\\u0644\\u0636\\u0631\\u0648\\u0631\\u064a\\u0629 \\u0625\\u0644\\u0649 \\u062c\\u0627\\u0646\\u0628 \\u062e\\u062f\\u0645\\u0629 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0646\\u0632\\u0644. \\u0648\\u0628\\u0627\\u0644\\u062a\\u0627\\u0644\\u064a \\u060c \\u062a\\u0648\\u0641\\u064a\\u0631 \\u0646\\u0647\\u062c \\u0634\\u0627\\u0645\\u0644 \\/ \\u062c\\u0627\\u0647\\u0632 \\u0644\\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627.<br \\/>\\u062d\\u0644\\u0648\\u0644\\u0646\\u0627<br \\/>&bull; \\u0625\\u062f\\u0627\\u0631\\u0629<br \\/>&bull; CAFM \\u060c<br \\/>&bull; \\u0648\\u0636\\u0639 \\u0639\\u0644\\u0627\\u0645\\u0629 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0623\\u0635\\u0648\\u0644 \\u060c<br \\/>&bull; \\u0627\\u0644\\u062a\\u0633\\u0645\\u064a\\u0629<br \\/>&bull; \\u062a\\u0631\\u0645\\u064a\\u0632 \\u0627\\u0644\\u0628\\u0627\\u0631<br \\/>&bull; \\u062a\\u0648\\u0641\\u064a\\u0631 \\u0627\\u0644\\u0637\\u0627\\u0642\\u0629<\\/p>\"}', '2020-05-09 13:00:53', '2020-05-18 02:17:38'),
(2, 1, 600, 2, '1589782668-1589043791-electrical.jpg', '{\"en\":\"ELECTRICAL SYSTEMS\",\"ar\":\"\\u0627\\u0644\\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0626\\u064a\\u0629\"}', '{\"en\":\"<div class=\\\"card-posted\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"card-text\\\">Our qualified &amp; experienced MEP staff meet s the standard conditions in providing supply, installation and maintenance work for the following systems. The Facilities Maintenance Division came as a realization for the need to focus on complete maintenance works (Electrical, HVAC, Mechanical &amp; Civil) given the growing number of Towers &amp; Home owners in the Emirates, and the lack of professional organizations with a qualified team of engineers and technicians to handle complex repair issues.It is considered as one of the primary lines of activity that falls under our Electro-Mechanical Division. From there, spawned our engineering capabilities on the Plumbing systems followed afterwards by the development of our Electrical team.\\r\\n<h3>Our Solutions<\\/h3>\\r\\n<table>\\r\\n<tbody>\\r\\n<tr>\\r\\n<td width=\\\"208\\\">\\r\\n<p>&bull; Energy saving solutions<br \\/> &bull; Capacitor bank<br \\/> &bull; Tranformer<br \\/> &bull; LV Panles<br \\/> &bull; Electrical DBS<br \\/> &bull; Switch gear<br \\/> &bull; Generator<\\/p>\\r\\n<\\/td>\\r\\n<td width=\\\"208\\\">\\r\\n<p>&bull; Electrical installation<br \\/> &bull; Lighting and lighting control<br \\/> &bull; Lighting protection<br \\/> &bull; Control panels<br \\/> &bull; Soft starter<br \\/> &bull; Frequency convertor<br \\/> &bull; VFD control<br \\/> &bull; MCC<\\/p>\\r\\n<\\/td>\\r\\n<td width=\\\"208\\\">\\r\\n<p>&bull; Lighting control<br \\/> &bull; UPS<br \\/> &bull; CCTV<br \\/> &bull; Puplic adress system<br \\/> &bull; Gate barriers<br \\/> &bull; Sliding doors<br \\/> &bull; Dish and satellite system<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<\\/td>\\r\\n<\\/tr>\\r\\n<\\/tbody>\\r\\n<\\/table>\\r\\n<\\/div>\",\"ar\":\"<p>\\u062a\\u062d\\u0642\\u064a\\u0642 \\u0646\\u062a\\u0627\\u0626\\u062c \\u0628\\u062c\\u0648\\u062f\\u0629 \\u0641\\u064a \\u0648\\u0642\\u062a \\u0642\\u0635\\u064a\\u0631<br \\/>\\u0627\\u0644\\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0626\\u064a\\u0629<br \\/>\\u0644\\u062f\\u064a\\u0646\\u0627 \\u0645\\u0648\\u0638\\u0641\\u064a\\u0646 \\u0645\\u0624\\u0647\\u0644\\u064a\\u0646 \\u0648\\u0630\\u0648\\u064a \\u062e\\u0628\\u0631\\u0629 \\u064a\\u062a\\u0645\\u062a\\u0639\\u0648\\u0646 \\u0628\\u0627\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0644\\u0644\\u0634\\u0631\\u0648\\u0637 \\u0627\\u0644\\u0642\\u064a\\u0627\\u0633\\u064a\\u0629 \\u0641\\u064a \\u062a\\u0648\\u0641\\u064a\\u0631 \\u0623\\u0639\\u0645\\u0627\\u0644 \\u0627\\u0644\\u062a\\u0648\\u0631\\u064a\\u062f \\u0648\\u0627\\u0644\\u0635\\u064a\\u0627\\u0646\\u0629 \\u0644\\u0644\\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u062a\\u0627\\u0644\\u064a\\u0629. \\u062c\\u0627\\u0621 \\u0642\\u0633\\u0645 \\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0625\\u062f\\u0631\\u0627\\u0643\\u064b\\u0627 \\u0644\\u0644\\u062d\\u0627\\u062c\\u0629 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u062a\\u0631\\u0643\\u064a\\u0632 \\u0639\\u0644\\u0649 \\u0623\\u0639\\u0645\\u0627\\u0644 \\u0627\\u0644\\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0643\\u0627\\u0645\\u0644\\u0629 (\\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0621 \\u0648\\u0627\\u0644\\u062a\\u062f\\u0641\\u0626\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0647\\u0648\\u064a\\u0629 \\u0648\\u062a\\u0643\\u064a\\u064a\\u0641 \\u0627\\u0644\\u0647\\u0648\\u0627\\u0621 \\u0648\\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u062f\\u0646\\u064a\\u0629) \\u0646\\u0638\\u0631\\u064b\\u0627 \\u0644\\u0644\\u0639\\u062f\\u062f \\u0627\\u0644\\u0645\\u062a\\u0632\\u0627\\u064a\\u062f \\u0645\\u0646 \\u0623\\u0628\\u0631\\u0627\\u062c \\u0648\\u0645\\u0644\\u0627\\u0643 \\u0627\\u0644\\u0645\\u0646\\u0627\\u0632\\u0644 \\u0641\\u064a \\u0627\\u0644\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a \\u060c \\u0648\\u0646\\u0642\\u0635 \\u0627\\u0644\\u0645\\u0646\\u0638\\u0645\\u0627\\u062a \\u0627\\u0644\\u0645\\u0647\\u0646\\u064a\\u0629 \\u0645\\u0639 \\u0641\\u0631\\u064a\\u0642 \\u0645\\u0624\\u0647\\u0644 \\u0645\\u0646 \\u0645\\u0647\\u0646\\u062f\\u0633\\u0648\\u0646 \\u0648\\u0641\\u0646\\u064a\\u0648\\u0646 \\u0644\\u0644\\u062a\\u0639\\u0627\\u0645\\u0644 \\u0645\\u0639 \\u0645\\u0634\\u0643\\u0644\\u0627\\u062a \\u0627\\u0644\\u0625\\u0635\\u0644\\u0627\\u062d \\u0627\\u0644\\u0645\\u0639\\u0642\\u062f\\u0629 \\u060c \\u0648\\u064a\\u0639\\u062a\\u0628\\u0631 \\u0623\\u062d\\u062f \\u062e\\u0637\\u0648\\u0637 \\u0627\\u0644\\u0646\\u0634\\u0627\\u0637 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\\u0629 \\u0627\\u0644\\u062a\\u064a \\u062a\\u0642\\u0639 \\u062a\\u062d\\u062a \\u0642\\u0633\\u0645 \\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0626\\u064a\\u0629 \\u0644\\u062f\\u064a\\u0646\\u0627. \\u0645\\u0646 \\u0647\\u0646\\u0627\\u0643 \\u060c \\u0648\\u0644\\u062f\\u062a \\u0642\\u062f\\u0631\\u0627\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0639\\u0644\\u0649 \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u0633\\u0628\\u0627\\u0643\\u0629 \\u062a\\u0644\\u064a\\u0647\\u0627 \\u0628\\u0639\\u062f \\u0630\\u0644\\u0643 \\u062a\\u0637\\u0648\\u064a\\u0631 \\u0641\\u0631\\u064a\\u0642 \\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0621 \\u0644\\u062f\\u064a\\u0646\\u0627.<br \\/>\\u062d\\u0644\\u0648\\u0644\\u0646\\u0627<br \\/>&bull; \\u062d\\u0644\\u0648\\u0644 \\u062a\\u0648\\u0641\\u064a\\u0631 \\u0627\\u0644\\u0637\\u0627\\u0642\\u0629<br \\/>&bull; \\u0645\\u062e\\u0632\\u0646 \\u062a\\u0643\\u062b\\u064a\\u0641 \\u0627\\u0644\\u0643\\u0631\\u0647\\u0628\\u0627\\u0621<br \\/>&bull; \\u0645\\u062d\\u0648\\u0644<br \\/>&bull; \\u0644\\u0648\\u062d\\u0627\\u062a LV<br \\/>&bull; DBS \\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0626\\u064a\\u0629<br \\/>&bull; \\u062a\\u0628\\u062f\\u064a\\u0644 \\u0627\\u0644\\u0639\\u062a\\u0627\\u062f<br \\/>&bull; \\u0645\\u0648\\u0644\\u062f \\u0643\\u0647\\u0631\\u0628\\u0627\\u0621<br \\/>&bull; \\u0627\\u0644\\u062a\\u0631\\u0643\\u064a\\u0628\\u0627\\u062a \\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0626\\u064a\\u0629<br \\/>&bull; \\u0627\\u0644\\u0625\\u0636\\u0627\\u0621\\u0629 \\u0648\\u0627\\u0644\\u062a\\u062d\\u0643\\u0645 \\u0641\\u064a \\u0627\\u0644\\u0625\\u0636\\u0627\\u0621\\u0629<br \\/>&bull; \\u062d\\u0645\\u0627\\u064a\\u0629 \\u0627\\u0644\\u0625\\u0636\\u0627\\u0621\\u0629<br \\/>&bull; \\u0644\\u0648\\u062d\\u0627\\u062a \\u0627\\u0644\\u062a\\u062d\\u0643\\u0645<br \\/>&bull; \\u0628\\u062f\\u0627\\u064a\\u0629 \\u0646\\u0627\\u0639\\u0645\\u0629<br \\/>&bull; \\u0645\\u062d\\u0648\\u0644 \\u0627\\u0644\\u062a\\u0631\\u062f\\u062f<br \\/>&bull; \\u062a\\u062d\\u0643\\u0645 VFD<br \\/>&bull; \\u0645\\u0631\\u0643\\u0632 \\u0639\\u0645\\u0644\\u0627\\u0626\\u064a<br \\/>&bull; \\u0627\\u0644\\u062a\\u062d\\u0643\\u0645 \\u0628\\u0627\\u0644\\u0625\\u0636\\u0627\\u0621\\u0629<br \\/>&bull; \\u064a\\u0648 \\u0628\\u064a \\u0625\\u0633<br \\/>&bull; CCTV<br \\/>&bull; \\u0646\\u0638\\u0627\\u0645 \\u0627\\u0644\\u0639\\u0646\\u0648\\u0627\\u0646 Puplic<br \\/>&bull; \\u062d\\u0648\\u0627\\u062c\\u0632 \\u0627\\u0644\\u0628\\u0648\\u0627\\u0628\\u0629<br \\/>&bull; \\u0623\\u0628\\u0648\\u0627\\u0628 \\u0645\\u0646\\u0632\\u0644\\u0642\\u0629<br \\/>&bull; \\u0627\\u0644\\u0637\\u0628\\u0642 \\u0648\\u0646\\u0638\\u0627\\u0645 \\u0627\\u0644\\u0623\\u0642\\u0645\\u0627\\u0631 \\u0627\\u0644\\u0635\\u0646\\u0627\\u0639\\u064a\\u0629<\\/p>\"}', '2020-05-09 13:03:11', '2020-05-18 03:43:25'),
(3, 1, 600, 3, '1589782677-1589043846-soft.jpg', '{\"en\":\"SOFT SERVICES\",\"ar\":\"\\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0644\\u064a\\u0646\\u0629\"}', '{\"en\":\"<div class=\\\"card-posted\\\">Building Confidence Based on a Foundation of Trust.<\\/div>\\r\\n<h4 class=\\\"card-title\\\">SOFT SERVICES<\\/h4>\\r\\n<div class=\\\"card-text\\\">The facilities management department has responsibilities for the day-to-day running of the building, these tasks may be outsourced or carried out by directly employed staff. This is a policy issue, but due to the immediacy of the response required in many of the activities involved, the facilities manager will often require daily reports or an escalation procedure. Some issues require more than just periodic maintenance, for example those that can stop or hamper the productivity of the business or that have safety implications. Many of these are managed by the facilities management &ldquo;help desk&rdquo; that staff are able to be contacted either by telephone or email. The response to help desk calls are prioritized but may be as simple as too hot or too cold, lights not working, photocopier jammed, coffee spills, or vending machine problems. Help desks may be used to book meeting rooms, car parking spaces and many other services, but this often depends on how the facilities department is organized. Facilities may be split into two sections, often referred to as &ldquo;soft&rdquo; services such as reception and post room, and &ldquo;hard&rdquo; services, such as the mechanical, fire and electrical services.\\r\\n<h3>Our Solutions<\\/h3>\\r\\n<p>&bull; CLEANING<br \\/>&bull; LANDSCAPING<br \\/>&bull; SECURITY &amp; LIFE GUARD<br \\/>&bull; PEST CONTROL<br \\/>&bull; WASTE MANAGEMENT<\\/p>\\r\\n<\\/div>\",\"ar\":\"<p>\\u0628\\u0646\\u0627\\u0621 \\u0627\\u0644\\u062b\\u0642\\u0629 \\u0639\\u0644\\u0649 \\u0623\\u0633\\u0627\\u0633 \\u0627\\u0644\\u062b\\u0642\\u0629.<br \\/>\\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0644\\u064a\\u0646\\u0629<br \\/>\\u064a\\u062a\\u062d\\u0645\\u0644 \\u0642\\u0633\\u0645 \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0645\\u0633\\u0624\\u0648\\u0644\\u064a\\u0627\\u062a \\u0627\\u0644\\u062a\\u0634\\u063a\\u064a\\u0644 \\u0627\\u0644\\u064a\\u0648\\u0645\\u064a \\u0644\\u0644\\u0645\\u0628\\u0646\\u0649 \\u060c \\u0648\\u0642\\u062f \\u064a\\u062a\\u0645 \\u0627\\u0644\\u0627\\u0633\\u062a\\u0639\\u0627\\u0646\\u0629 \\u0628\\u0645\\u0635\\u0627\\u062f\\u0631 \\u062e\\u0627\\u0631\\u062c\\u064a\\u0629 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0645\\u0647\\u0627\\u0645 \\u0623\\u0648 \\u062a\\u0646\\u0641\\u064a\\u0630\\u0647\\u0627 \\u0645\\u0646 \\u0642\\u0628\\u0644 \\u0645\\u0648\\u0638\\u0641\\u064a\\u0646 \\u064a\\u0639\\u0645\\u0644\\u0648\\u0646 \\u0645\\u0628\\u0627\\u0634\\u0631\\u0629. \\u0647\\u0630\\u0647 \\u0645\\u0634\\u0643\\u0644\\u0629 \\u062a\\u062a\\u0639\\u0644\\u0642 \\u0628\\u0627\\u0644\\u0633\\u064a\\u0627\\u0633\\u0629 \\u060c \\u0648\\u0644\\u0643\\u0646 \\u0646\\u0638\\u0631\\u064b\\u0627 \\u0644\\u0633\\u0631\\u0639\\u0629 \\u0627\\u0644\\u0627\\u0633\\u062a\\u062c\\u0627\\u0628\\u0629 \\u0627\\u0644\\u0645\\u0637\\u0644\\u0648\\u0628\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0639\\u062f\\u064a\\u062f \\u0645\\u0646 \\u0627\\u0644\\u0623\\u0646\\u0634\\u0637\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0646\\u064a\\u0629 \\u060c \\u063a\\u0627\\u0644\\u0628\\u064b\\u0627 \\u0645\\u0627 \\u064a\\u062a\\u0637\\u0644\\u0628 \\u0645\\u062f\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u062a\\u0642\\u0627\\u0631\\u064a\\u0631 \\u064a\\u0648\\u0645\\u064a\\u0629 \\u0623\\u0648 \\u0625\\u062c\\u0631\\u0627\\u0621 \\u062a\\u0635\\u0639\\u064a\\u062f. \\u062a\\u062a\\u0637\\u0644\\u0628 \\u0628\\u0639\\u0636 \\u0627\\u0644\\u0645\\u0634\\u0643\\u0644\\u0627\\u062a \\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 \\u0645\\u062c\\u0631\\u062f \\u0627\\u0644\\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0631\\u064a\\u0629 \\u060c \\u0639\\u0644\\u0649 \\u0633\\u0628\\u064a\\u0644 \\u0627\\u0644\\u0645\\u062b\\u0627\\u0644 \\u062a\\u0644\\u0643 \\u0627\\u0644\\u062a\\u064a \\u064a\\u0645\\u0643\\u0646 \\u0623\\u0646 \\u062a\\u0648\\u0642\\u0641 \\u0623\\u0648 \\u062a\\u0639\\u0648\\u0642 \\u0625\\u0646\\u062a\\u0627\\u062c\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0623\\u0648 \\u0627\\u0644\\u062a\\u064a \\u0644\\u0647\\u0627 \\u0622\\u062b\\u0627\\u0631 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0633\\u0644\\u0627\\u0645\\u0629. \\u062a\\u062a\\u0645 \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0639\\u062f\\u064a\\u062f \\u0645\\u0646 \\u0647\\u0630\\u0647 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\\"\\u0645\\u0643\\u062a\\u0628 \\u0627\\u0644\\u0645\\u0633\\u0627\\u0639\\u062f\\u0629\\\" \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0627\\u0644\\u062a\\u064a \\u064a\\u0645\\u0643\\u0646 \\u0627\\u0644\\u0627\\u062a\\u0635\\u0627\\u0644 \\u0628\\u0627\\u0644\\u0645\\u0648\\u0638\\u0641\\u064a\\u0646 \\u0625\\u0645\\u0627 \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0647\\u0627\\u062a\\u0641 \\u0623\\u0648 \\u0627\\u0644\\u0628\\u0631\\u064a\\u062f \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a. \\u064a\\u062a\\u0645 \\u0625\\u0639\\u0637\\u0627\\u0621 \\u0627\\u0644\\u0623\\u0648\\u0644\\u0648\\u064a\\u0629 \\u0644\\u0644\\u0631\\u062f \\u0639\\u0644\\u0649 \\u0645\\u0643\\u0627\\u0644\\u0645\\u0627\\u062a \\u0645\\u0643\\u062a\\u0628 \\u0627\\u0644\\u0645\\u0633\\u0627\\u0639\\u062f\\u0629 \\u060c \\u0648\\u0644\\u0643\\u0646\\u0647\\u0627 \\u0642\\u062f \\u062a\\u0643\\u0648\\u0646 \\u0628\\u0633\\u064a\\u0637\\u0629 \\u0645\\u062b\\u0644 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0631\\u0629 \\u0623\\u0648 \\u0627\\u0644\\u0628\\u0631\\u0648\\u062f\\u0629 \\u0627\\u0644\\u0634\\u062f\\u064a\\u062f\\u0629 \\u060c \\u0623\\u0648 \\u0639\\u062f\\u0645 \\u0639\\u0645\\u0644 \\u0627\\u0644\\u0623\\u0636\\u0648\\u0627\\u0621 \\u060c \\u0623\\u0648 \\u062a\\u0643\\u062f\\u0633 \\u0622\\u0644\\u0629 \\u0627\\u0644\\u062a\\u0635\\u0648\\u064a\\u0631 \\u060c \\u0623\\u0648 \\u0627\\u0646\\u0633\\u0643\\u0627\\u0628 \\u0627\\u0644\\u0642\\u0647\\u0648\\u0629 \\u060c \\u0623\\u0648 \\u0645\\u0634\\u0627\\u0643\\u0644 \\u0622\\u0644\\u0629 \\u0627\\u0644\\u0628\\u064a\\u0639. \\u064a\\u0645\\u0643\\u0646 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0645\\u0643\\u0627\\u062a\\u0628 \\u0627\\u0644\\u0645\\u0633\\u0627\\u0639\\u062f\\u0629 \\u0644\\u062d\\u062c\\u0632 \\u063a\\u0631\\u0641 \\u0627\\u0644\\u0627\\u062c\\u062a\\u0645\\u0627\\u0639\\u0627\\u062a \\u0648\\u0645\\u0648\\u0627\\u0642\\u0641 \\u0627\\u0644\\u0633\\u064a\\u0627\\u0631\\u0627\\u062a \\u0648\\u0627\\u0644\\u0639\\u062f\\u064a\\u062f \\u0645\\u0646 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0623\\u062e\\u0631\\u0649 \\u060c \\u0648\\u0644\\u0643\\u0646 \\u0647\\u0630\\u0627 \\u063a\\u0627\\u0644\\u0628\\u064b\\u0627 \\u0645\\u0627 \\u064a\\u0639\\u062a\\u0645\\u062f \\u0639\\u0644\\u0649 \\u0643\\u064a\\u0641\\u064a\\u0629 \\u062a\\u0646\\u0638\\u064a\\u0645 \\u0642\\u0633\\u0645 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642. \\u064a\\u0645\\u0643\\u0646 \\u062a\\u0642\\u0633\\u064a\\u0645 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0625\\u0644\\u0649 \\u0642\\u0633\\u0645\\u064a\\u0646 \\u060c \\u064a\\u064f\\u0634\\u0627\\u0631 \\u0625\\u0644\\u064a\\u0647\\u0645\\u0627 \\u063a\\u0627\\u0644\\u0628\\u064b\\u0627 \\u0628\\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\\"\\u0627\\u0644\\u0644\\u064a\\u0646\\u0629\\\" \\u0645\\u062b\\u0644 \\u0627\\u0644\\u0627\\u0633\\u062a\\u0642\\u0628\\u0627\\u0644 \\u0648\\u063a\\u0631\\u0641\\u0629 \\u0627\\u0644\\u0628\\u0631\\u064a\\u062f \\u060c \\u0648\\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\\"\\u0627\\u0644\\u0635\\u0639\\u0628\\u0629\\\" \\u060c \\u0645\\u062b\\u0644 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629 \\u060c \\u0648\\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642 \\u060c \\u0648\\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0621.<br \\/>\\u062d\\u0644\\u0648\\u0644\\u0646\\u0627<br \\/>&bull; \\u0627\\u0644\\u062a\\u0646\\u0638\\u064a\\u0641<br \\/>&bull; \\u0627\\u0644\\u0645\\u0646\\u0627\\u0638\\u0631 \\u0627\\u0644\\u0637\\u0628\\u064a\\u0639\\u064a\\u0629<br \\/>&bull; \\u062d\\u0631\\u0627\\u0633\\u0629 \\u0627\\u0644\\u0623\\u0645\\u0646 \\u0648\\u0627\\u0644\\u062d\\u064a\\u0627\\u0629<br \\/>&bull; \\u0645\\u0643\\u0627\\u0641\\u062d\\u0629 \\u0627\\u0644\\u0622\\u0641\\u0627\\u062a<br \\/>&bull; \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u062e\\u0644\\u0641\\u0627\\u062a<\\/p>\"}', '2020-05-09 13:04:06', '2020-05-18 02:17:57'),
(4, 1, 700, 4, '1589782687-1589043919-hvac.jpg', '{\"en\":\"HVAC MAINTENACE SERVICES\",\"ar\":\"\\u062e\\u062f\\u0645\\u0627\\u062a \\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u062a\\u0643\\u064a\\u064a\\u0641\"}', '{\"en\":\"<div class=\\\"card-posted\\\">Building Confidence Based on a Foundation of Trust.<\\/div>\\r\\n<h4 class=\\\"card-title\\\">HVAC MAINTENACE SERVICES<\\/h4>\\r\\n<div class=\\\"card-text\\\">The Facilities Maintenance Division came as a realization for the need to focus on complete maintenance works (Electrical, HVAC, Mechanical &amp; Civil) given the growing number of Towers &amp; Home owners in the Emirates, and the lack off professional organizations with a qualified team of engineers and technicians to handle complex repair issues. Works in Ventilation, Air Condition and Cooling systems was launched in 1989 in GENINT. It is considered as one of the primary lines of activity that falls under our Electro-Mechanical Division. From there, spawned our engineering capabilities on the Plumbing systems followed afterwards by the development of our Electrical team. Our key strength stems from the fact that we can provide all the necessary MEP services along with servicing the key specialized services IN HOUSE. Thus, providing a holistic \\/ turnkey approach for our customers.\\r\\n<h3>Our Solutions<\\/h3>\\r\\n<p>&bull; Maintenance of HVAC Systems<br \\/>&bull; Water chillers<br \\/>&bull; Air cooled chillers<br \\/>&bull; Air handling units<br \\/>&bull; Fan coil units<br \\/>&bull; Package units<br \\/>&bull; Split units<br \\/>&bull; Air curtains<br \\/>&bull; Ventilation and Extract fans<br \\/>&bull; Duct work<br \\/>&bull; All type of HVAC dampers<br \\/>&bull; BMS<br \\/>&bull; CCU<br \\/>&bull; Cooling towers<br \\/>&bull; Cold stores<br \\/>&bull; Mist cooling system<br \\/>&bull; Terminal units<\\/p>\\r\\n<\\/div>\",\"ar\":\"<p>\\u0628\\u0646\\u0627\\u0621 \\u0627\\u0644\\u062b\\u0642\\u0629 \\u0639\\u0644\\u0649 \\u0623\\u0633\\u0627\\u0633 \\u0627\\u0644\\u062b\\u0642\\u0629.<br \\/>\\u062e\\u062f\\u0645\\u0627\\u062a \\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u062a\\u0643\\u064a\\u064a\\u0641<br \\/>\\u062c\\u0627\\u0621 \\u0642\\u0633\\u0645 \\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0625\\u062f\\u0631\\u0627\\u0643\\u064b\\u0627 \\u0644\\u0644\\u062d\\u0627\\u062c\\u0629 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u062a\\u0631\\u0643\\u064a\\u0632 \\u0639\\u0644\\u0649 \\u0623\\u0639\\u0645\\u0627\\u0644 \\u0627\\u0644\\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0643\\u0627\\u0645\\u0644\\u0629 (\\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0621 \\u0648\\u0627\\u0644\\u062a\\u062f\\u0641\\u0626\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0647\\u0648\\u064a\\u0629 \\u0648\\u062a\\u0643\\u064a\\u064a\\u0641 \\u0627\\u0644\\u0647\\u0648\\u0627\\u0621 \\u0648\\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u062f\\u0646\\u064a\\u0629) \\u0646\\u0638\\u0631\\u064b\\u0627 \\u0644\\u0644\\u0639\\u062f\\u062f \\u0627\\u0644\\u0645\\u062a\\u0632\\u0627\\u064a\\u062f \\u0645\\u0646 \\u0623\\u0628\\u0631\\u0627\\u062c \\u0627\\u0644\\u0645\\u0646\\u0627\\u0632\\u0644 \\u0648\\u0627\\u0644\\u0645\\u0644\\u0627\\u0643 \\u0641\\u064a \\u0627\\u0644\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a \\u060c \\u0648\\u0646\\u0642\\u0635 \\u0627\\u0644\\u0645\\u0646\\u0638\\u0645\\u0627\\u062a \\u0627\\u0644\\u0645\\u0647\\u0646\\u064a\\u0629 \\u0645\\u0639 \\u0641\\u0631\\u064a\\u0642 \\u0645\\u0624\\u0647\\u0644 \\u0645\\u0646 \\u0627\\u0644\\u0645\\u0647\\u0646\\u062f\\u0633\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0641\\u0646\\u064a\\u064a\\u0646 \\u0644\\u0644\\u062a\\u0639\\u0627\\u0645\\u0644 \\u0645\\u0639 \\u0642\\u0636\\u0627\\u064a\\u0627 \\u0627\\u0644\\u0625\\u0635\\u0644\\u0627\\u062d \\u0627\\u0644\\u0645\\u0639\\u0642\\u062f\\u0629. \\u062a\\u0645 \\u0625\\u0637\\u0644\\u0627\\u0642 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0641\\u064a \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u062a\\u0647\\u0648\\u064a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0643\\u064a\\u064a\\u0641 \\u0648\\u0627\\u0644\\u062a\\u0628\\u0631\\u064a\\u062f \\u0641\\u064a \\u0639\\u0627\\u0645 1989 \\u0641\\u064a GENINT. \\u064a\\u0639\\u062a\\u0628\\u0631 \\u0623\\u062d\\u062f \\u062e\\u0637\\u0648\\u0637 \\u0627\\u0644\\u0646\\u0634\\u0627\\u0637 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\\u0629 \\u0627\\u0644\\u062a\\u064a \\u062a\\u0642\\u0639 \\u062a\\u062d\\u062a \\u0642\\u0633\\u0645\\u0646\\u0627 \\u0627\\u0644\\u0643\\u0647\\u0631\\u0648\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629. \\u0645\\u0646 \\u0647\\u0646\\u0627\\u0643 \\u060c \\u0648\\u0644\\u062f\\u062a \\u0642\\u062f\\u0631\\u0627\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0639\\u0644\\u0649 \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u0633\\u0628\\u0627\\u0643\\u0629 \\u062a\\u0644\\u064a\\u0647\\u0627 \\u0628\\u0639\\u062f \\u0630\\u0644\\u0643 \\u062a\\u0637\\u0648\\u064a\\u0631 \\u0641\\u0631\\u064a\\u0642 \\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0621 \\u0644\\u062f\\u064a\\u0646\\u0627. \\u062a\\u0646\\u0628\\u0639 \\u0642\\u0648\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\\u0629 \\u0645\\u0646 \\u062d\\u0642\\u064a\\u0642\\u0629 \\u0623\\u0646\\u0647 \\u064a\\u0645\\u0643\\u0646\\u0646\\u0627 \\u062a\\u0642\\u062f\\u064a\\u0645 \\u062c\\u0645\\u064a\\u0639 \\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0626\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629 \\u0627\\u0644\\u0636\\u0631\\u0648\\u0631\\u064a\\u0629 \\u0625\\u0644\\u0649 \\u062c\\u0627\\u0646\\u0628 \\u062e\\u062f\\u0645\\u0629 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0646\\u0632\\u0644. \\u0648\\u0628\\u0627\\u0644\\u062a\\u0627\\u0644\\u064a \\u060c \\u062a\\u0648\\u0641\\u064a\\u0631 \\u0646\\u0647\\u062c \\u0634\\u0627\\u0645\\u0644 \\/ \\u062c\\u0627\\u0647\\u0632 \\u0644\\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627.<br \\/>\\u062d\\u0644\\u0648\\u0644\\u0646\\u0627<br \\/>&bull; \\u0635\\u064a\\u0627\\u0646\\u0629 \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u062a\\u062f\\u0641\\u0626\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0647\\u0648\\u064a\\u0629 \\u0648\\u062a\\u0643\\u064a\\u064a\\u0641 \\u0627\\u0644\\u0647\\u0648\\u0627\\u0621<br \\/>&bull; \\u0645\\u0628\\u0631\\u062f\\u0627\\u062a \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647<br \\/>&bull; \\u0627\\u0644\\u0645\\u0628\\u0631\\u062f\\u0627\\u062a \\u0627\\u0644\\u0645\\u0628\\u0631\\u062f\\u0629 \\u0628\\u0627\\u0644\\u0647\\u0648\\u0627\\u0621<br \\/>&bull; \\u0648\\u062d\\u062f\\u0627\\u062a \\u0644\\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0647\\u0648\\u0627\\u0621<br \\/>&bull; \\u0648\\u062d\\u062f\\u0627\\u062a \\u0644\\u0641\\u0627\\u0626\\u0641 \\u0627\\u0644\\u0645\\u0631\\u0648\\u062d\\u0629<br \\/>&bull; \\u0648\\u062d\\u062f\\u0627\\u062a \\u0627\\u0644\\u0639\\u0628\\u0648\\u0629<br \\/>&bull; \\u0648\\u062d\\u062f\\u0627\\u062a \\u0633\\u0628\\u0644\\u064a\\u062a<br \\/>&bull; \\u0633\\u062a\\u0627\\u0626\\u0631 \\u0647\\u0648\\u0627\\u0626\\u064a\\u0629<br \\/>&bull; \\u0645\\u0631\\u0627\\u0648\\u062d \\u0627\\u0644\\u062a\\u0647\\u0648\\u064a\\u0629 \\u0648\\u0627\\u0633\\u062a\\u062e\\u0631\\u0627\\u062c<br \\/>&bull; \\u0639\\u0645\\u0644 \\u0645\\u062c\\u0627\\u0631\\u064a \\u0627\\u0644\\u0647\\u0648\\u0627\\u0621<br \\/>&bull; \\u062c\\u0645\\u064a\\u0639 \\u0623\\u0646\\u0648\\u0627\\u0639 \\u0645\\u062e\\u0645\\u062f\\u0627\\u062a \\u0627\\u0644\\u062a\\u062f\\u0641\\u0626\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0647\\u0648\\u064a\\u0629 \\u0648\\u062a\\u0643\\u064a\\u064a\\u0641 \\u0627\\u0644\\u0647\\u0648\\u0627\\u0621<br \\/>&bull; BMS<br \\/>&bull; CCU<br \\/>&bull; \\u0623\\u0628\\u0631\\u0627\\u062c \\u0627\\u0644\\u062a\\u0628\\u0631\\u064a\\u062f<br \\/>&bull; \\u0645\\u062e\\u0627\\u0632\\u0646 \\u0645\\u0628\\u0631\\u062f\\u0629<br \\/>&bull; \\u0646\\u0638\\u0627\\u0645 \\u062a\\u0628\\u0631\\u064a\\u062f \\u0636\\u0628\\u0627\\u0628<br \\/>&bull; \\u0627\\u0644\\u0648\\u062d\\u062f\\u0627\\u062a \\u0627\\u0644\\u0637\\u0631\\u0641\\u064a\\u0629<\\/p>\"}', '2020-05-09 13:05:19', '2020-05-18 02:18:07'),
(5, 1, 700, 5, '1589782696-1589043976-plumb.jpg', '{\"en\":\"PLUMBING MAINTENANCE SERVICES\",\"ar\":\"\\u062e\\u062f\\u0645\\u0627\\u062a \\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0633\\u0628\\u0627\\u0643\\u0629\"}', '{\"en\":\"<div class=\\\"card-posted\\\">Call us to tell you how can we help<\\/div>\\r\\n<h4 class=\\\"card-title\\\">PLUMBING MAINTENANCE SERVICES<\\/h4>\\r\\n<div class=\\\"card-text\\\">The Facilities Maintenance Division came as a realization for the need to focus on complete maintenance works (Electrical, HVAC, Mechanical &amp; Civil) given the growing number of Towers &amp; Home owners in the Emirates, and the lack of professional organizations with a qualified team of engineers and technicians to handle complex repair issues. Works in Ventilation, Air Condition and Cooling systems was launched in 1989 in GENINT. It is considered as one of the primary lines of activity that falls under our Electro-Mechanical Division. From there, spawned our engineering capabilities on the Plumbing systems followed afterwards by the development of our Electrical team. Our key strength stems from the fact that we can provide all the necessary MEP services along with servicing the key specialized services IN HOUSE. Thus, providing a holistic \\/ turnkey approach for our customers.\\r\\n<h3>Our Solutions<\\/h3>\\r\\n<p>&bull; Mechanical system<br \\/>&bull; Air compressor<br \\/>&bull; Air dryer<br \\/>&bull; Motoring air<br \\/>&bull; Cranes<br \\/>&bull; Teleplatform<br \\/>&bull; Access control<br \\/>&bull; All type of pumps<br \\/>&bull; Lifts, elevators etc<br \\/>&bull; Plumbing<br \\/>&bull; Closed-circuit television (CCTV)<br \\/>&bull; Other engineering systems<br \\/>&bull; Control Panel<br \\/>&bull; PA system<br \\/>&bull; Closed-circuit television (CCTV)<br \\/>&bull; Alarm Monitor<br \\/>&bull; Security Automation<\\/p>\\r\\n<\\/div>\",\"ar\":\"<p>\\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627 \\u0644\\u062a\\u062e\\u0628\\u0631\\u0643 \\u0643\\u064a\\u0641 \\u064a\\u0645\\u0643\\u0646\\u0646\\u0627 \\u0627\\u0644\\u0645\\u0633\\u0627\\u0639\\u062f\\u0629<br \\/>\\u062e\\u062f\\u0645\\u0627\\u062a \\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0633\\u0628\\u0627\\u0643\\u0629<br \\/>\\u062c\\u0627\\u0621 \\u0642\\u0633\\u0645 \\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0625\\u062f\\u0631\\u0627\\u0643\\u064b\\u0627 \\u0644\\u0644\\u062d\\u0627\\u062c\\u0629 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u062a\\u0631\\u0643\\u064a\\u0632 \\u0639\\u0644\\u0649 \\u0623\\u0639\\u0645\\u0627\\u0644 \\u0627\\u0644\\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0643\\u0627\\u0645\\u0644\\u0629 (\\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0621 \\u0648\\u0627\\u0644\\u062a\\u062f\\u0641\\u0626\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0647\\u0648\\u064a\\u0629 \\u0648\\u062a\\u0643\\u064a\\u064a\\u0641 \\u0627\\u0644\\u0647\\u0648\\u0627\\u0621 \\u0648\\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u062f\\u0646\\u064a\\u0629) \\u0646\\u0638\\u0631\\u064b\\u0627 \\u0644\\u0644\\u0639\\u062f\\u062f \\u0627\\u0644\\u0645\\u062a\\u0632\\u0627\\u064a\\u062f \\u0645\\u0646 \\u0623\\u0628\\u0631\\u0627\\u062c \\u0648\\u0645\\u0644\\u0627\\u0643 \\u0627\\u0644\\u0645\\u0646\\u0627\\u0632\\u0644 \\u0641\\u064a \\u0627\\u0644\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a \\u060c \\u0648\\u0646\\u0642\\u0635 \\u0627\\u0644\\u0645\\u0646\\u0638\\u0645\\u0627\\u062a \\u0627\\u0644\\u0645\\u0647\\u0646\\u064a\\u0629 \\u0645\\u0639 \\u0641\\u0631\\u064a\\u0642 \\u0645\\u0624\\u0647\\u0644 \\u0645\\u0646 \\u0627\\u0644\\u0645\\u0647\\u0646\\u062f\\u0633\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0641\\u0646\\u064a\\u064a\\u0646 \\u0644\\u0644\\u062a\\u0639\\u0627\\u0645\\u0644 \\u0645\\u0639 \\u0642\\u0636\\u0627\\u064a\\u0627 \\u0627\\u0644\\u0625\\u0635\\u0644\\u0627\\u062d \\u0627\\u0644\\u0645\\u0639\\u0642\\u062f\\u0629. \\u062a\\u0645 \\u0625\\u0637\\u0644\\u0627\\u0642 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0641\\u064a \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u062a\\u0647\\u0648\\u064a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0643\\u064a\\u064a\\u0641 \\u0648\\u0627\\u0644\\u062a\\u0628\\u0631\\u064a\\u062f \\u0641\\u064a \\u0639\\u0627\\u0645 1989 \\u0641\\u064a GENINT. \\u064a\\u0639\\u062a\\u0628\\u0631 \\u0623\\u062d\\u062f \\u062e\\u0637\\u0648\\u0637 \\u0627\\u0644\\u0646\\u0634\\u0627\\u0637 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\\u0629 \\u0627\\u0644\\u062a\\u064a \\u062a\\u0642\\u0639 \\u062a\\u062d\\u062a \\u0642\\u0633\\u0645\\u0646\\u0627 \\u0627\\u0644\\u0643\\u0647\\u0631\\u0648\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629. \\u0645\\u0646 \\u0647\\u0646\\u0627\\u0643 \\u060c \\u0648\\u0644\\u062f\\u062a \\u0642\\u062f\\u0631\\u0627\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0639\\u0644\\u0649 \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u0633\\u0628\\u0627\\u0643\\u0629 \\u062a\\u0644\\u064a\\u0647\\u0627 \\u0628\\u0639\\u062f \\u0630\\u0644\\u0643 \\u062a\\u0637\\u0648\\u064a\\u0631 \\u0641\\u0631\\u064a\\u0642 \\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0621 \\u0644\\u062f\\u064a\\u0646\\u0627. \\u062a\\u0646\\u0628\\u0639 \\u0642\\u0648\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\\u0629 \\u0645\\u0646 \\u062d\\u0642\\u064a\\u0642\\u0629 \\u0623\\u0646\\u0647 \\u064a\\u0645\\u0643\\u0646\\u0646\\u0627 \\u062a\\u0642\\u062f\\u064a\\u0645 \\u062c\\u0645\\u064a\\u0639 \\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0626\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629 \\u0627\\u0644\\u0636\\u0631\\u0648\\u0631\\u064a\\u0629 \\u0625\\u0644\\u0649 \\u062c\\u0627\\u0646\\u0628 \\u062e\\u062f\\u0645\\u0629 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0646\\u0632\\u0644. \\u0648\\u0628\\u0627\\u0644\\u062a\\u0627\\u0644\\u064a \\u060c \\u062a\\u0648\\u0641\\u064a\\u0631 \\u0646\\u0647\\u062c \\u0634\\u0627\\u0645\\u0644 \\/ \\u062c\\u0627\\u0647\\u0632 \\u0644\\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627.<br \\/>\\u062d\\u0644\\u0648\\u0644\\u0646\\u0627<br \\/>&bull; \\u0646\\u0638\\u0627\\u0645 \\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a<br \\/>&bull; \\u0627\\u0644\\u0645\\u0643\\u0628\\u0633 \\u0627\\u0644\\u0647\\u0648\\u0627\\u0626\\u064a<br \\/>&bull; \\u0645\\u062c\\u0641\\u0641 \\u0647\\u0648\\u0627\\u0621<br \\/>&bull; \\u0647\\u0648\\u0627\\u0621 \\u0627\\u0644\\u0633\\u064a\\u0627\\u0631\\u0627\\u062a<br \\/>&bull; \\u0627\\u0644\\u0631\\u0627\\u0641\\u0639\\u0627\\u062a<br \\/>&bull; \\u0645\\u0646\\u0635\\u0629 \\u062a\\u064a\\u0644\\u064a\\u0628<br \\/>&bull; \\u0635\\u0644\\u0627\\u062d\\u064a\\u0629 \\u0627\\u0644\\u062a\\u062d\\u0643\\u0645 \\u0635\\u0644\\u0627\\u062d\\u064a\\u0629 \\u0627\\u0644\\u062f\\u062e\\u0648\\u0644<br \\/>&bull; \\u062c\\u0645\\u064a\\u0639 \\u0623\\u0646\\u0648\\u0627\\u0639 \\u0627\\u0644\\u0645\\u0636\\u062e\\u0627\\u062a<br \\/>&bull; \\u0645\\u0635\\u0627\\u0639\\u062f \\u060c \\u0645\\u0635\\u0627\\u0639\\u062f \\u0627\\u0644\\u062e<br \\/>&bull; \\u0627\\u0644\\u0633\\u0628\\u0627\\u0643\\u0629<br \\/>&bull; \\u062a\\u0644\\u0641\\u0632\\u064a\\u0648\\u0646 \\u0627\\u0644\\u062f\\u0627\\u0626\\u0631\\u0629 \\u0627\\u0644\\u0645\\u063a\\u0644\\u0642\\u0629 (CCTV)<br \\/>&bull; \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0623\\u062e\\u0631\\u0649<br \\/>&bull; \\u0644\\u0648\\u062d\\u0629 \\u0627\\u0644\\u062a\\u062d\\u0643\\u0645<br \\/>&bull; \\u0646\\u0638\\u0627\\u0645 PA<br \\/>&bull; \\u062a\\u0644\\u0641\\u0632\\u064a\\u0648\\u0646 \\u0627\\u0644\\u062f\\u0627\\u0626\\u0631\\u0629 \\u0627\\u0644\\u0645\\u063a\\u0644\\u0642\\u0629 (CCTV)<br \\/>&bull; \\u0645\\u0631\\u0627\\u0642\\u0628 \\u0627\\u0644\\u0625\\u0646\\u0630\\u0627\\u0631<br \\/>&bull; \\u0623\\u062a\\u0645\\u062a\\u0629 \\u0627\\u0644\\u0623\\u0645\\u0646<\\/p>\"}', '2020-05-09 13:06:16', '2020-05-18 02:18:16');
INSERT INTO `service_facilities` (`id`, `is_publish`, `type_id`, `cat_id`, `media`, `title`, `description`, `created_at`, `updated_at`) VALUES
(6, 1, 800, 6, '1589782706-1589044069-civil.jpg', '{\"en\":\"CIVIL & MINOR ANCILLARY MAINTENANCE SERVICES\",\"ar\":\"\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0645\\u062f\\u0646\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0642\\u0635\\u064a\\u0631\\u0629\"}', '{\"en\":\"<div class=\\\"card-posted\\\">Use us to maintain your operations<\\/div>\\r\\n<h4 class=\\\"card-title\\\">CIVIL &amp; MINOR ANCILLARY MAINTENANCE SERVICES<\\/h4>\\r\\n<div class=\\\"card-text\\\">The Facilities Maintenance Division came as a realization for the need to focus on complete maintenance works (Electrical, HVAC, Mechanical &amp; Civil) given the growing number of Towers &amp; Home owners in the Emirates, and the lack off professional organizations with a qualified team of engineers and technicians to handle complex repair issues. Works in Ventilation, Air Condition and Cooling systems was launched in 1989 in GENINT. It is considered as one of the primary lines of activity that falls under our Electro-Mechanical Division. From there, spawned our engineering capabilities on the Plumbing systems followed afterwards by the development of our Electrical team. Our key strength stems from the fact that we can provide all the necessary MEP services along with servicing the key specialized services IN HOUSE. Thus, providing a holistic \\/ turnkey approach for our customers.\\r\\n<h3>Our Solutions<\\/h3>\\r\\n<p>&bull; Mechanical system<br \\/>&bull; Air compressor<br \\/>&bull; Air dryer<br \\/>&bull; Motoring air<br \\/>&bull; Cranes<br \\/>&bull; Teleplatform<br \\/>&bull; All type of pumps<br \\/>&bull; Water tank<br \\/>&bull; Pressure vessel<br \\/>&bull; Hanger door<br \\/>&bull; Shutter door<br \\/>&bull; Vacuum system<br \\/>&bull; Motorized doors<br \\/>&bull; Pneumatic doors<br \\/>&bull; Filtration system<br \\/>&bull; Laundry equipments<br \\/>&bull; Kitchen equipments<br \\/>&bull; Calorifier heater<\\/p>\\r\\n<p><br \\/><strong>Civil works<\\/strong><\\/p>\\r\\n<p><br \\/>&bull; Painting work<br \\/>&bull; Excavation<br \\/>&bull; Tiles and ceramic work<br \\/>&bull; Mason and plastring<br \\/>&bull; Concrete foundations<br \\/>&bull; Water proofing<\\/p>\\r\\n<\\/div>\",\"ar\":\"<p>\\u0627\\u0633\\u062a\\u062e\\u062f\\u0645\\u0646\\u0627 \\u0644\\u0644\\u062d\\u0641\\u0627\\u0638 \\u0639\\u0644\\u0649 \\u0639\\u0645\\u0644\\u064a\\u0627\\u062a\\u0643<br \\/>\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0645\\u062f\\u0646\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0642\\u0635\\u064a\\u0631\\u0629<br \\/>\\u062c\\u0627\\u0621 \\u0642\\u0633\\u0645 \\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0625\\u062f\\u0631\\u0627\\u0643\\u064b\\u0627 \\u0644\\u0644\\u062d\\u0627\\u062c\\u0629 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u062a\\u0631\\u0643\\u064a\\u0632 \\u0639\\u0644\\u0649 \\u0623\\u0639\\u0645\\u0627\\u0644 \\u0627\\u0644\\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0643\\u0627\\u0645\\u0644\\u0629 (\\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0621 \\u0648\\u0627\\u0644\\u062a\\u062f\\u0641\\u0626\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0647\\u0648\\u064a\\u0629 \\u0648\\u062a\\u0643\\u064a\\u064a\\u0641 \\u0627\\u0644\\u0647\\u0648\\u0627\\u0621 \\u0648\\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u062f\\u0646\\u064a\\u0629) \\u0646\\u0638\\u0631\\u064b\\u0627 \\u0644\\u0644\\u0639\\u062f\\u062f \\u0627\\u0644\\u0645\\u062a\\u0632\\u0627\\u064a\\u062f \\u0645\\u0646 \\u0623\\u0628\\u0631\\u0627\\u062c \\u0627\\u0644\\u0645\\u0646\\u0627\\u0632\\u0644 \\u0648\\u0627\\u0644\\u0645\\u0644\\u0627\\u0643 \\u0641\\u064a \\u0627\\u0644\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a \\u060c \\u0648\\u0646\\u0642\\u0635 \\u0627\\u0644\\u0645\\u0646\\u0638\\u0645\\u0627\\u062a \\u0627\\u0644\\u0645\\u0647\\u0646\\u064a\\u0629 \\u0645\\u0639 \\u0641\\u0631\\u064a\\u0642 \\u0645\\u0624\\u0647\\u0644 \\u0645\\u0646 \\u0627\\u0644\\u0645\\u0647\\u0646\\u062f\\u0633\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0641\\u0646\\u064a\\u064a\\u0646 \\u0644\\u0644\\u062a\\u0639\\u0627\\u0645\\u0644 \\u0645\\u0639 \\u0642\\u0636\\u0627\\u064a\\u0627 \\u0627\\u0644\\u0625\\u0635\\u0644\\u0627\\u062d \\u0627\\u0644\\u0645\\u0639\\u0642\\u062f\\u0629. \\u062a\\u0645 \\u0625\\u0637\\u0644\\u0627\\u0642 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0641\\u064a \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u062a\\u0647\\u0648\\u064a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0643\\u064a\\u064a\\u0641 \\u0648\\u0627\\u0644\\u062a\\u0628\\u0631\\u064a\\u062f \\u0641\\u064a \\u0639\\u0627\\u0645 1989 \\u0641\\u064a GENINT. \\u064a\\u0639\\u062a\\u0628\\u0631 \\u0623\\u062d\\u062f \\u062e\\u0637\\u0648\\u0637 \\u0627\\u0644\\u0646\\u0634\\u0627\\u0637 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\\u0629 \\u0627\\u0644\\u062a\\u064a \\u062a\\u0642\\u0639 \\u062a\\u062d\\u062a \\u0642\\u0633\\u0645\\u0646\\u0627 \\u0627\\u0644\\u0643\\u0647\\u0631\\u0648\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629. \\u0645\\u0646 \\u0647\\u0646\\u0627\\u0643 \\u060c \\u0648\\u0644\\u062f\\u062a \\u0642\\u062f\\u0631\\u0627\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0639\\u0644\\u0649 \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u0633\\u0628\\u0627\\u0643\\u0629 \\u062a\\u0644\\u064a\\u0647\\u0627 \\u0628\\u0639\\u062f \\u0630\\u0644\\u0643 \\u062a\\u0637\\u0648\\u064a\\u0631 \\u0641\\u0631\\u064a\\u0642 \\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0621 \\u0644\\u062f\\u064a\\u0646\\u0627. \\u062a\\u0646\\u0628\\u0639 \\u0642\\u0648\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\\u0629 \\u0645\\u0646 \\u062d\\u0642\\u064a\\u0642\\u0629 \\u0623\\u0646\\u0647 \\u064a\\u0645\\u0643\\u0646\\u0646\\u0627 \\u062a\\u0642\\u062f\\u064a\\u0645 \\u062c\\u0645\\u064a\\u0639 \\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0626\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629 \\u0627\\u0644\\u0636\\u0631\\u0648\\u0631\\u064a\\u0629 \\u0625\\u0644\\u0649 \\u062c\\u0627\\u0646\\u0628 \\u062e\\u062f\\u0645\\u0629 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0646\\u0632\\u0644. \\u0648\\u0628\\u0627\\u0644\\u062a\\u0627\\u0644\\u064a \\u060c \\u062a\\u0648\\u0641\\u064a\\u0631 \\u0646\\u0647\\u062c \\u0634\\u0627\\u0645\\u0644 \\/ \\u062c\\u0627\\u0647\\u0632 \\u0644\\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627.<br \\/>\\u062d\\u0644\\u0648\\u0644\\u0646\\u0627<br \\/>&bull; \\u0646\\u0638\\u0627\\u0645 \\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a<br \\/>&bull; \\u0627\\u0644\\u0645\\u0643\\u0628\\u0633 \\u0627\\u0644\\u0647\\u0648\\u0627\\u0626\\u064a<br \\/>&bull; \\u0645\\u062c\\u0641\\u0641 \\u0647\\u0648\\u0627\\u0621<br \\/>&bull; \\u0647\\u0648\\u0627\\u0621 \\u0627\\u0644\\u0633\\u064a\\u0627\\u0631\\u0627\\u062a<br \\/>&bull; \\u0627\\u0644\\u0631\\u0627\\u0641\\u0639\\u0627\\u062a<br \\/>&bull; \\u0645\\u0646\\u0635\\u0629 \\u062a\\u064a\\u0644\\u064a\\u0628<br \\/>&bull; \\u062c\\u0645\\u064a\\u0639 \\u0623\\u0646\\u0648\\u0627\\u0639 \\u0627\\u0644\\u0645\\u0636\\u062e\\u0627\\u062a<br \\/>&bull; \\u062e\\u0632\\u0627\\u0646 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647<br \\/>&bull; \\u0636\\u063a\\u0637 \\u0627\\u0644\\u0623\\u0648\\u0639\\u064a\\u0629<br \\/>&bull; \\u0628\\u0627\\u0628 \\u0634\\u0645\\u0627\\u0639\\u0627\\u062a<br \\/>&bull; \\u0645\\u0635\\u0631\\u0627\\u0639 \\u0627\\u0644\\u0628\\u0627\\u0628<br \\/>&bull; \\u0646\\u0638\\u0627\\u0645 \\u0627\\u0644\\u0634\\u0641\\u0637<br \\/>&bull; \\u0623\\u0628\\u0648\\u0627\\u0628 \\u0622\\u0644\\u064a\\u0629<br \\/>&bull; \\u0623\\u0628\\u0648\\u0627\\u0628 \\u0647\\u0648\\u0627\\u0626\\u064a\\u0629<br \\/>&bull; \\u0646\\u0638\\u0627\\u0645 \\u0627\\u0644\\u062a\\u0631\\u0634\\u064a\\u062d<br \\/>&bull; \\u0645\\u0639\\u062f\\u0627\\u062a \\u063a\\u0633\\u064a\\u0644 \\u0627\\u0644\\u0645\\u0644\\u0627\\u0628\\u0633<br \\/>&bull; \\u0645\\u0639\\u062f\\u0627\\u062a \\u0627\\u0644\\u0645\\u0637\\u0628\\u062e<br \\/>&bull; \\u062c\\u0647\\u0627\\u0632 \\u062a\\u0633\\u062e\\u064a\\u0646<\\/p>\\r\\n<p><br \\/>\\u0623\\u0639\\u0645\\u0627\\u0644 \\u0645\\u062f\\u0646\\u064a\\u0629<\\/p>\\r\\n<p><br \\/>&bull; \\u0639\\u0645\\u0644 \\u0627\\u0644\\u0644\\u0648\\u062d\\u0629<br \\/>&bull; \\u062d\\u0641\\u0631\\u064a\\u0627\\u062a<br \\/>&bull; \\u0623\\u0639\\u0645\\u0627\\u0644 \\u0627\\u0644\\u0628\\u0644\\u0627\\u0637 \\u0648\\u0627\\u0644\\u0633\\u064a\\u0631\\u0627\\u0645\\u064a\\u0643<br \\/>&bull; \\u0645\\u064a\\u0633\\u0648\\u0646 \\u0648\\u0627\\u0644\\u0628\\u0644\\u0627\\u0633\\u062a\\u0631<br \\/>&bull; \\u0623\\u0633\\u0633 \\u062e\\u0631\\u0633\\u0627\\u0646\\u064a\\u0629<br \\/>&bull; \\u062a\\u0633\\u0631\\u0628 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647<\\/p>\"}', '2020-05-09 13:07:49', '2020-05-18 02:18:26');

-- --------------------------------------------------------

--
-- Table structure for table `service_fires`
--

CREATE TABLE `service_fires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `type_id` int(10) UNSIGNED DEFAULT NULL,
  `cat_id` int(10) UNSIGNED DEFAULT NULL,
  `media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_fires`
--

INSERT INTO `service_fires` (`id`, `is_publish`, `type_id`, `cat_id`, `media`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 100, 1, '1589782483-1588951425-se-2.jpg', '{\"en\":\"Fire Fighting System\",\"ar\":\"\\u0646\\u0638\\u0627\\u0645 \\u0645\\u0643\\u0627\\u0641\\u062d\\u0629 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642\"}', '{\"en\":\"<div class=\\\"card-posted\\\">&nbsp;&nbsp;The Fire Protection Division is one of the primary divisions of the group, certified by the Civil Defense authority. We are distributors for serveral international manufacturers with quality and innovative products.We offer tailored Fire Protection and Preventative solutions for clients in our core markets &ndash; Public Sector, Hospitality,Commercial and Residential sectors. We bring a variety of engineering expertise and decades of experience to every project. Our project managers, project controllers, resident engineers and specialty inspectors have proven experience. We also draw on environmental scientists and other technical specialists with years of expertise.\\r\\n<h3>Our Solutions<\\/h3>\\r\\n<p>&bull; CO2 Extinguishing System<br \\/>&bull; Foam Extinguishing System<br \\/>&bull; FM200 Extinguishing System<br \\/>&bull; Inert Gas Extinguishing System<br \\/>&bull; Water Sprinkler System<br \\/>&bull; Dry Powder Extinguishing System<br \\/>&bull; Wet and Dry Riser System<\\/p>\\r\\n<\\/div>\",\"ar\":\"<div class=\\\"card-posted\\\">&nbsp;<\\/div>\"}', '2020-05-08 11:23:45', '2020-05-18 04:10:46'),
(2, 1, 100, 2, '1589782493-1588951509-active-protection.jpg', '{\"en\":\"Accessories\",\"ar\":\"\\u0645\\u0633\\u062a\\u0644\\u0632\\u0645\\u0627\\u062a\"}', '{\"en\":\"<div class=\\\"card-posted\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"card-text\\\">Our Active systems are in the form of fire suppression, extinguishers, sprinkler, alarm and extract ventilation.The overall aim of active systems is to extinguish the fire by detecting the fire early and evacuating the building, alerting emergency services at an early stage of the fire, Controlling the movement of smoke and fire. and suppressing and\\/or starving the fire of oxygen and fuel. We offer tailored Fire Protection and Preventative solutions for clients in our core markets &ndash; Public Sector, Hospitality, Commercial and Residential sectors. We bring a variety of engineering expertise and decades of experience to every project. Our project managers, project controllers, resident engineers and specialty inspectors have proven experience.\\r\\n<h3>Our Solutions<\\/h3>\\r\\n<p>&bull; Conventional Fire Alarm Systems<br \\/>&bull; Addressable Fire Alarm Systems<br \\/>&bull; Stand Alone Detector<br \\/>&bull; Wireless Fire Alarm Systems<br \\/>&bull; Air Aspirating Detection<br \\/>&bull; Linear Heat Detection<\\/p>\\r\\n<\\/div>\",\"ar\":\"<p>\\u0623\\u0646\\u0638\\u0645\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0646\\u0634\\u0637\\u0629 \\u0641\\u064a \\u0634\\u0643\\u0644 \\u0625\\u062e\\u0645\\u0627\\u062f \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642 \\u060c \\u0637\\u0641\\u0627\\u064a\\u0627\\u062a \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642 \\u060c \\u0627\\u0644\\u0631\\u0634\\u0627\\u0634\\u0627\\u062a \\u060c \\u0627\\u0644\\u0625\\u0646\\u0630\\u0627\\u0631 \\u0648\\u0627\\u0633\\u062a\\u062e\\u0631\\u0627\\u062c \\u0627\\u0644\\u062a\\u0647\\u0648\\u064a\\u0629 \\u060c \\u0648\\u0627\\u0644\\u0647\\u062f\\u0641 \\u0627\\u0644\\u0639\\u0627\\u0645 \\u0644\\u0644\\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u0646\\u0634\\u0637\\u0629 \\u0647\\u0648 \\u0625\\u0637\\u0641\\u0627\\u0621 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u0644\\u0643\\u0634\\u0641 \\u0639\\u0646 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0641\\u064a \\u0648\\u0642\\u062a \\u0645\\u0628\\u0643\\u0631 \\u0648\\u0625\\u062e\\u0644\\u0627\\u0621 \\u0627\\u0644\\u0645\\u0628\\u0646\\u0649 \\u060c \\u0648\\u062a\\u0646\\u0628\\u064a\\u0647 \\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0637\\u0648\\u0627\\u0631\\u0626 \\u0641\\u064a \\u0645\\u0631\\u062d\\u0644\\u0629 \\u0645\\u0628\\u0643\\u0631\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0633\\u064a\\u0637\\u0631\\u0629 \\u0639\\u0644\\u0649 \\u062d\\u0631\\u0643\\u0629 \\u0627\\u0644\\u062f\\u062e\\u0627\\u0646 \\u0648\\u0627\\u0644\\u0646\\u0627\\u0631. \\u0648\\u0642\\u0645\\u0639 \\u0648 \\/ \\u0623\\u0648 \\u062a\\u062c\\u0648\\u064a\\u0639 \\u062d\\u0631\\u064a\\u0642 \\u0627\\u0644\\u0623\\u0643\\u0633\\u062c\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0648\\u0642\\u0648\\u062f. \\u0646\\u062d\\u0646 \\u0646\\u0642\\u062f\\u0645 \\u062d\\u0644\\u0648\\u0644 \\u0627\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0648\\u0627\\u0644\\u0648\\u0642\\u0627\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062e\\u0635\\u0635\\u0629 \\u0644\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621 \\u0641\\u064a \\u0623\\u0633\\u0648\\u0627\\u0642\\u0646\\u0627 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\\u0629 - \\u0627\\u0644\\u0642\\u0637\\u0627\\u0639 \\u0627\\u0644\\u0639\\u0627\\u0645 \\u060c \\u0648\\u0627\\u0644\\u0636\\u064a\\u0627\\u0641\\u0629 \\u060c \\u0648\\u0627\\u0644\\u0642\\u0637\\u0627\\u0639\\u0627\\u062a \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0633\\u0643\\u0646\\u064a\\u0629. \\u0646\\u0623\\u062a\\u064a \\u0628\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0645\\u062a\\u0646\\u0648\\u0639\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0648\\u0639\\u0642\\u0648\\u062f \\u0645\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0644\\u0643\\u0644 \\u0645\\u0634\\u0631\\u0648\\u0639. \\u0623\\u062b\\u0628\\u062a \\u0645\\u062f\\u064a\\u0631\\u0648 \\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0648\\u0645\\u0631\\u0627\\u0642\\u0628\\u0648 \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639 \\u0648\\u0627\\u0644\\u0645\\u0647\\u0646\\u062f\\u0633\\u0648\\u0646 \\u0627\\u0644\\u0645\\u0642\\u064a\\u0645\\u0648\\u0646 \\u0648\\u0627\\u0644\\u0645\\u0641\\u062a\\u0634\\u0648\\u0646 \\u0627\\u0644\\u0645\\u062a\\u062e\\u0635\\u0635\\u0648\\u0646 \\u062e\\u0628\\u0631\\u062a\\u0647\\u0645.<br \\/>\\u062d\\u0644\\u0648\\u0644\\u0646\\u0627<br \\/>&bull; \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0625\\u0646\\u0630\\u0627\\u0631 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0627\\u0644\\u062a\\u0642\\u0644\\u064a\\u062f\\u064a\\u0629<br \\/>&bull; \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0625\\u0646\\u0630\\u0627\\u0631 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0639\\u0646\\u0648\\u0646\\u0629<br \\/>&bull; \\u0643\\u0627\\u0634\\u0641 \\u0645\\u0633\\u062a\\u0642\\u0644<br \\/>&bull; \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0625\\u0646\\u0630\\u0627\\u0631 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0627\\u0644\\u0644\\u0627\\u0633\\u0644\\u0643\\u064a\\u0629<br \\/>&bull; \\u0627\\u0644\\u0643\\u0634\\u0641 \\u0639\\u0646 \\u0627\\u0633\\u062a\\u0646\\u0634\\u0627\\u0642 \\u0627\\u0644\\u0647\\u0648\\u0627\\u0621<br \\/>&bull; \\u0627\\u0644\\u0643\\u0634\\u0641 \\u0639\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0631\\u0629 \\u0627\\u0644\\u062e\\u0637\\u064a\\u0629<\\/p>\"}', '2020-05-08 11:25:09', '2020-05-18 02:14:53'),
(3, 1, 200, 4, '1589782509-1588951576-facades.jpg', '{\"en\":\"Facades & Cladding - Interiors\",\"ar\":\"\\u0627\\u0644\\u0648\\u0627\\u062c\\u0647\\u0627\\u062a \\u0648\\u0627\\u0644\\u062a\\u0643\\u0633\\u064a\\u0629 - \\u0627\\u0644\\u062f\\u064a\\u0643\\u0648\\u0631\\u0627\\u062a \\u0627\\u0644\\u062f\\u0627\\u062e\\u0644\\u064a\\u0629\"}', '{\"en\":\"<div class=\\\"card-posted\\\">PASSIVE FIRE PROTECTION Interiors<\\/div>\\r\\n<h4 class=\\\"card-title\\\">Facades &amp; Cladding<\\/h4>\\r\\n<div class=\\\"card-text\\\">Passive systems come in the form of fire rated doors, barrier, ceilings and structural fire protection. We use fire rated partitions and doors to prevent the fire and smoke from moving from one compartment to another. The overall aim of passive systems is to contain the fire by delaying the collapse of the building structure,delaying the growth of the fire for both the exterior and the interior integrity of the structure. We provide passive fire protection systems from an industry leading and third-party certified vendor SIDERISE. Our extensive experience in architectural acoustics further compliments our range enabling us to offer complete solutions that encompass insulation, integrity in terms of fire and noise control.Our technical team not only holds strong expertise in providing acoustic and fire safety advice but also the practical &lsquo;hands on&rsquo; knowledge with respect to installation.\\r\\n<h3>Our Solutions<\\/h3>\\r\\n<p>&bull; &lsquo;Open State&rsquo; Cavity Barriers &ndash; External Envelope<br \\/>&bull; Perimeter Barriers&amp; Firestops for Curtain Walling<br \\/>&bull; Mullion &amp; Transom Inserts for Curtain Walling<br \\/>&bull; Acoustic Void Barriers &ndash; Facades<br \\/>&bull; Acoustic Barrier Overlay &ndash; Facades<br \\/>&bull; Window Reveal Liner<br \\/>&bull; Linear Gap Seal &ndash; Facades<br \\/>&bull; NXS Firesafe Spandrel Insulation<br \\/>&bull; Nexus Lamella Boards &ndash; Curtain Walling<br \\/>&bull; Rockwool&reg; Slabs<br \\/>&bull; Ancillaries<\\/p>\\r\\n<\\/div>\",\"ar\":\"<p>\\u062a\\u0623\\u062a\\u064a \\u0627\\u0644\\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u0633\\u0644\\u0628\\u064a\\u0629 \\u0639\\u0644\\u0649 \\u0634\\u0643\\u0644 \\u0623\\u0628\\u0648\\u0627\\u0628 \\u060c \\u062d\\u0648\\u0627\\u062c\\u0632 \\u060c \\u0623\\u0633\\u0642\\u0641 \\u0645\\u0642\\u0627\\u0648\\u0645\\u0629 \\u0644\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0648\\u0647\\u064a\\u0643\\u0644\\u064a\\u0629 \\u0645\\u0642\\u0627\\u0648\\u0645\\u0629 \\u0644\\u0644\\u062d\\u0631\\u064a\\u0642. \\u0646\\u0633\\u062a\\u062e\\u062f\\u0645 \\u0623\\u0642\\u0633\\u0627\\u0645 \\u0648\\u0623\\u0628\\u0648\\u0627\\u0628 \\u0645\\u0642\\u0627\\u0648\\u0645\\u0629 \\u0644\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0644\\u0645\\u0646\\u0639 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0648\\u0627\\u0644\\u062f\\u062e\\u0627\\u0646 \\u0645\\u0646 \\u0627\\u0644\\u0627\\u0646\\u062a\\u0642\\u0627\\u0644 \\u0645\\u0646 \\u062d\\u062c\\u0631\\u0629 \\u0625\\u0644\\u0649 \\u0623\\u062e\\u0631\\u0649. \\u0627\\u0644\\u0647\\u062f\\u0641 \\u0627\\u0644\\u0639\\u0627\\u0645 \\u0644\\u0644\\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u0633\\u0644\\u0628\\u064a\\u0629 \\u0647\\u0648 \\u0627\\u062d\\u062a\\u0648\\u0627\\u0621 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u062a\\u0623\\u062e\\u064a\\u0631 \\u0627\\u0646\\u0647\\u064a\\u0627\\u0631 \\u0647\\u064a\\u0643\\u0644 \\u0627\\u0644\\u0645\\u0628\\u0646\\u0649 \\u060c \\u0648\\u062a\\u0623\\u062e\\u064a\\u0631 \\u0646\\u0645\\u0648 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0644\\u0643\\u0644 \\u0645\\u0646 \\u0627\\u0644\\u0647\\u064a\\u0643\\u0644 \\u0627\\u0644\\u062e\\u0627\\u0631\\u062c\\u064a \\u0648\\u0627\\u0644\\u062f\\u0627\\u062e\\u0644\\u064a \\u0644\\u0644\\u0647\\u064a\\u0643\\u0644. \\u0646\\u062d\\u0646 \\u0646\\u0642\\u062f\\u0645 \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642 \\u0627\\u0644\\u0633\\u0644\\u0628\\u064a\\u0629 \\u0645\\u0646 \\u0628\\u0627\\u0626\\u0639 \\u0631\\u0627\\u0626\\u062f \\u0641\\u064a \\u0627\\u0644\\u0635\\u0646\\u0627\\u0639\\u0629 \\u0648\\u0645\\u0639\\u062a\\u0645\\u062f \\u0645\\u0646 \\u062c\\u0647\\u0629 \\u062e\\u0627\\u0631\\u062c\\u064a\\u0629 SIDERISE. \\u0643\\u0645\\u0627 \\u0623\\u0646 \\u062e\\u0628\\u0631\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0648\\u0627\\u0633\\u0639\\u0629 \\u0641\\u064a \\u0645\\u062c\\u0627\\u0644 \\u0627\\u0644\\u0635\\u0648\\u062a\\u064a\\u0627\\u062a \\u0627\\u0644\\u0645\\u0639\\u0645\\u0627\\u0631\\u064a\\u0629 \\u062a\\u0643\\u0645\\u0644 \\u0645\\u062c\\u0645\\u0648\\u0639\\u062a\\u0646\\u0627 \\u0627\\u0644\\u062a\\u064a \\u062a\\u0645\\u0643\\u0646\\u0646\\u0627 \\u0645\\u0646 \\u062a\\u0642\\u062f\\u064a\\u0645 \\u062d\\u0644\\u0648\\u0644 \\u0643\\u0627\\u0645\\u0644\\u0629 \\u062a\\u0634\\u0645\\u0644 \\u0627\\u0644\\u0639\\u0632\\u0644 \\u0648\\u0627\\u0644\\u0646\\u0632\\u0627\\u0647\\u0629 \\u0645\\u0646 \\u062d\\u064a\\u062b \\u0627\\u0644\\u062a\\u062d\\u0643\\u0645 \\u0641\\u064a \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642 \\u0648\\u0627\\u0644\\u0636\\u0648\\u0636\\u0627\\u0621 \\u060c \\u0641\\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0627\\u0644\\u0641\\u0646\\u064a \\u0644\\u0627 \\u064a\\u0645\\u062a\\u0644\\u0643 \\u0641\\u0642\\u0637 \\u062e\\u0628\\u0631\\u0629 \\u0642\\u0648\\u064a\\u0629 \\u0641\\u064a \\u062a\\u0642\\u062f\\u064a\\u0645 \\u0627\\u0644\\u0645\\u0634\\u0648\\u0631\\u0629 \\u0627\\u0644\\u0635\\u0648\\u062a\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0633\\u0644\\u0627\\u0645\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642 \\u0648\\u0644\\u0643\\u0646 \\u0623\\u064a\\u0636\\u064b\\u0627 \\u0627\\u0644\\u0623\\u064a\\u062f\\u064a \\u0627\\u0644\\u0639\\u0645\\u0644\\u064a\\u0629 \\u0639\\u0644\\u0649 \\\"\\u0627\\u0644\\u0645\\u0639\\u0631\\u0641\\u0629 \\u0641\\u064a\\u0645\\u0627 \\u064a\\u062a\\u0639\\u0644\\u0642 \\u0628\\u0627\\u0644\\u062a\\u062b\\u0628\\u064a\\u062a.<br \\/>\\u062d\\u0644\\u0648\\u0644\\u0646\\u0627<br \\/>&bull; \\u062d\\u0648\\u0627\\u062c\\u0632 \\u0627\\u0644\\u062a\\u062c\\u0648\\u064a\\u0641 \\\"\\u0627\\u0644\\u062f\\u0648\\u0644\\u0629 \\u0627\\u0644\\u0645\\u0641\\u062a\\u0648\\u062d\\u0629\\\" - \\u0627\\u0644\\u0638\\u0631\\u0641 \\u0627\\u0644\\u062e\\u0627\\u0631\\u062c\\u064a<br \\/>&bull; \\u0627\\u0644\\u062d\\u0648\\u0627\\u062c\\u0632 \\u0627\\u0644\\u0645\\u062d\\u064a\\u0637\\u064a\\u0629 \\u0648 Firestops \\u0644\\u0644\\u062c\\u062f\\u0627\\u0631 \\u0627\\u0644\\u0633\\u062a\\u0627\\u0631<br \\/>&bull; \\u0625\\u062f\\u0631\\u0627\\u062c Mullion \\u0648 Transom \\u0644\\u0644\\u062c\\u062f\\u0627\\u0631 \\u0627\\u0644\\u0633\\u0627\\u062a\\u0631<br \\/>&bull; \\u062d\\u0648\\u0627\\u062c\\u0632 \\u0627\\u0644\\u0641\\u0631\\u0627\\u063a \\u0627\\u0644\\u0635\\u0648\\u062a\\u064a\\u0629 - \\u0627\\u0644\\u0648\\u0627\\u062c\\u0647\\u0627\\u062a<br \\/>&bull; \\u062a\\u0631\\u0627\\u0643\\u0628 \\u062d\\u0627\\u062c\\u0632 \\u0635\\u0648\\u062a\\u064a - \\u0648\\u0627\\u062c\\u0647\\u0627\\u062a<br \\/>&bull; \\u0628\\u0637\\u0627\\u0646\\u0629 \\u0643\\u0634\\u0641 \\u0627\\u0644\\u0646\\u0627\\u0641\\u0630\\u0629<br \\/>&bull; \\u062e\\u062a\\u0645 \\u0627\\u0644\\u0641\\u062c\\u0648\\u0629 \\u0627\\u0644\\u062e\\u0637\\u064a\\u0629 - \\u0627\\u0644\\u0648\\u0627\\u062c\\u0647\\u0627\\u062a<br \\/>&bull; NXS \\u0639\\u0632\\u0644 \\u062d\\u0631\\u064a\\u0642 \\u0645\\u0646 \\u0633\\u0628\\u0627\\u0646\\u062f\\u0631\\u064a\\u0644<br \\/>&bull; \\u0644\\u0648\\u062d\\u0627\\u062a Nexus Lamella - \\u0627\\u0644\\u062d\\u0648\\u0627\\u0626\\u0637 \\u0627\\u0644\\u0633\\u0627\\u062a\\u0631\\u0629<br \\/>&bull; \\u0623\\u0644\\u0648\\u0627\\u062d Rockwool&reg;<br \\/>&bull; \\u0627\\u0644\\u0645\\u0633\\u0627\\u0639\\u062f\\u064a\\u0646<\\/p>\"}', '2020-05-08 11:26:16', '2020-05-18 02:15:09'),
(4, 1, 200, 5, '1589782517-1588951631-facades.jpg', '{\"en\":\"Facades & Cladding - Facades\",\"ar\":\"\\u0627\\u0644\\u0648\\u0627\\u062c\\u0647\\u0627\\u062a \\u0648\\u0627\\u0644\\u062a\\u0643\\u0633\\u064a\\u0629 - \\u0627\\u0644\\u0648\\u0627\\u062c\\u0647\\u0627\\u062a\"}', '{\"en\":\"<div class=\\\"card-posted\\\">PASSIVE FIRE PROTECTION Facades<\\/div>\\r\\n<h4 class=\\\"card-title\\\">Facades &amp; Cladding<\\/h4>\\r\\n<div class=\\\"card-text\\\">Passive systems come in the form of fire rated doors, barrier, ceilings and structural fire protection. We use fire rated partitions and doors to prevent the fire and smoke from moving from one compartment to another. The overall aim of passive systems is to contain the fire by delaying the collapse of the building structure,delaying the growth of the fire for both the exterior and the interior integrity of the structure. We provide passive fire protection systems from an industry leading and third-party certified vendor SIDERISE. Our extensive experience in architectural acoustics further compliments our range enabling us to offer complete solutions that encompass insulation, integrity in terms of fire and noise control.Our technical team not only holds strong expertise in providing acoustic and fire safety advice but also the practical &lsquo;hands on&rsquo; knowledge with respect to installation.\\r\\n<h3>Our Solutions<\\/h3>\\r\\n<p>&bull; &lsquo;Open State&rsquo; Cavity Barriers &ndash; External Envelope<br \\/>&bull; Perimeter Barriers&amp; Firestops for Curtain Walling<br \\/>&bull; Mullion &amp; Transom Inserts for Curtain Walling<br \\/>&bull; Acoustic Void Barriers &ndash; Facades<br \\/>&bull; Acoustic Barrier Overlay &ndash; Facades<br \\/>&bull; Window Reveal Liner<br \\/>&bull; Linear Gap Seal &ndash; Facades<br \\/>&bull; NXS Firesafe Spandrel Insulation<br \\/>&bull; Nexus Lamella Boards &ndash; Curtain Walling<br \\/>&bull; Rockwool&reg; Slabs<br \\/>&bull; Ancillaries<\\/p>\\r\\n<\\/div>\",\"ar\":\"<p>\\u062a\\u0623\\u062a\\u064a \\u0627\\u0644\\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u0633\\u0644\\u0628\\u064a\\u0629 \\u0639\\u0644\\u0649 \\u0634\\u0643\\u0644 \\u0623\\u0628\\u0648\\u0627\\u0628 \\u060c \\u062d\\u0648\\u0627\\u062c\\u0632 \\u060c \\u0623\\u0633\\u0642\\u0641 \\u0645\\u0642\\u0627\\u0648\\u0645\\u0629 \\u0644\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0648\\u0647\\u064a\\u0643\\u0644\\u064a\\u0629 \\u0645\\u0642\\u0627\\u0648\\u0645\\u0629 \\u0644\\u0644\\u062d\\u0631\\u064a\\u0642. \\u0646\\u0633\\u062a\\u062e\\u062f\\u0645 \\u0623\\u0642\\u0633\\u0627\\u0645 \\u0648\\u0623\\u0628\\u0648\\u0627\\u0628 \\u0645\\u0642\\u0627\\u0648\\u0645\\u0629 \\u0644\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0644\\u0645\\u0646\\u0639 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0648\\u0627\\u0644\\u062f\\u062e\\u0627\\u0646 \\u0645\\u0646 \\u0627\\u0644\\u0627\\u0646\\u062a\\u0642\\u0627\\u0644 \\u0645\\u0646 \\u062d\\u062c\\u0631\\u0629 \\u0625\\u0644\\u0649 \\u0623\\u062e\\u0631\\u0649. \\u0627\\u0644\\u0647\\u062f\\u0641 \\u0627\\u0644\\u0639\\u0627\\u0645 \\u0644\\u0644\\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u0633\\u0644\\u0628\\u064a\\u0629 \\u0647\\u0648 \\u0627\\u062d\\u062a\\u0648\\u0627\\u0621 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u062a\\u0623\\u062e\\u064a\\u0631 \\u0627\\u0646\\u0647\\u064a\\u0627\\u0631 \\u0647\\u064a\\u0643\\u0644 \\u0627\\u0644\\u0645\\u0628\\u0646\\u0649 \\u060c \\u0648\\u062a\\u0623\\u062e\\u064a\\u0631 \\u0646\\u0645\\u0648 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0644\\u0643\\u0644 \\u0645\\u0646 \\u0627\\u0644\\u0647\\u064a\\u0643\\u0644 \\u0627\\u0644\\u062e\\u0627\\u0631\\u062c\\u064a \\u0648\\u0627\\u0644\\u062f\\u0627\\u062e\\u0644\\u064a \\u0644\\u0644\\u0647\\u064a\\u0643\\u0644. \\u0646\\u062d\\u0646 \\u0646\\u0642\\u062f\\u0645 \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642 \\u0627\\u0644\\u0633\\u0644\\u0628\\u064a\\u0629 \\u0645\\u0646 \\u0628\\u0627\\u0626\\u0639 \\u0631\\u0627\\u0626\\u062f \\u0641\\u064a \\u0627\\u0644\\u0635\\u0646\\u0627\\u0639\\u0629 \\u0648\\u0645\\u0639\\u062a\\u0645\\u062f \\u0645\\u0646 \\u062c\\u0647\\u0629 \\u062e\\u0627\\u0631\\u062c\\u064a\\u0629 SIDERISE. \\u0643\\u0645\\u0627 \\u0623\\u0646 \\u062e\\u0628\\u0631\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0648\\u0627\\u0633\\u0639\\u0629 \\u0641\\u064a \\u0645\\u062c\\u0627\\u0644 \\u0627\\u0644\\u0635\\u0648\\u062a\\u064a\\u0627\\u062a \\u0627\\u0644\\u0645\\u0639\\u0645\\u0627\\u0631\\u064a\\u0629 \\u062a\\u0643\\u0645\\u0644 \\u0645\\u062c\\u0645\\u0648\\u0639\\u062a\\u0646\\u0627 \\u0627\\u0644\\u062a\\u064a \\u062a\\u0645\\u0643\\u0646\\u0646\\u0627 \\u0645\\u0646 \\u062a\\u0642\\u062f\\u064a\\u0645 \\u062d\\u0644\\u0648\\u0644 \\u0643\\u0627\\u0645\\u0644\\u0629 \\u062a\\u0634\\u0645\\u0644 \\u0627\\u0644\\u0639\\u0632\\u0644 \\u0648\\u0627\\u0644\\u0646\\u0632\\u0627\\u0647\\u0629 \\u0645\\u0646 \\u062d\\u064a\\u062b \\u0627\\u0644\\u062a\\u062d\\u0643\\u0645 \\u0641\\u064a \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642 \\u0648\\u0627\\u0644\\u0636\\u0648\\u0636\\u0627\\u0621 \\u060c \\u0641\\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0627\\u0644\\u0641\\u0646\\u064a \\u0644\\u0627 \\u064a\\u0645\\u062a\\u0644\\u0643 \\u0641\\u0642\\u0637 \\u062e\\u0628\\u0631\\u0629 \\u0642\\u0648\\u064a\\u0629 \\u0641\\u064a \\u062a\\u0642\\u062f\\u064a\\u0645 \\u0627\\u0644\\u0645\\u0634\\u0648\\u0631\\u0629 \\u0627\\u0644\\u0635\\u0648\\u062a\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0633\\u0644\\u0627\\u0645\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642 \\u0648\\u0644\\u0643\\u0646 \\u0623\\u064a\\u0636\\u064b\\u0627 \\u0627\\u0644\\u0623\\u064a\\u062f\\u064a \\u0627\\u0644\\u0639\\u0645\\u0644\\u064a\\u0629 \\u0639\\u0644\\u0649 \\\"\\u0627\\u0644\\u0645\\u0639\\u0631\\u0641\\u0629 \\u0641\\u064a\\u0645\\u0627 \\u064a\\u062a\\u0639\\u0644\\u0642 \\u0628\\u0627\\u0644\\u062a\\u062b\\u0628\\u064a\\u062a.<br \\/>\\u062d\\u0644\\u0648\\u0644\\u0646\\u0627<br \\/>&bull; \\u062d\\u0648\\u0627\\u062c\\u0632 \\u0627\\u0644\\u062a\\u062c\\u0648\\u064a\\u0641 \\\"\\u0627\\u0644\\u062f\\u0648\\u0644\\u0629 \\u0627\\u0644\\u0645\\u0641\\u062a\\u0648\\u062d\\u0629\\\" - \\u0627\\u0644\\u0638\\u0631\\u0641 \\u0627\\u0644\\u062e\\u0627\\u0631\\u062c\\u064a<br \\/>&bull; \\u0627\\u0644\\u062d\\u0648\\u0627\\u062c\\u0632 \\u0627\\u0644\\u0645\\u062d\\u064a\\u0637\\u064a\\u0629 \\u0648 Firestops \\u0644\\u0644\\u062c\\u062f\\u0627\\u0631 \\u0627\\u0644\\u0633\\u062a\\u0627\\u0631<br \\/>&bull; \\u0625\\u062f\\u0631\\u0627\\u062c Mullion \\u0648 Transom \\u0644\\u0644\\u062c\\u062f\\u0627\\u0631 \\u0627\\u0644\\u0633\\u0627\\u062a\\u0631<br \\/>&bull; \\u062d\\u0648\\u0627\\u062c\\u0632 \\u0627\\u0644\\u0641\\u0631\\u0627\\u063a \\u0627\\u0644\\u0635\\u0648\\u062a\\u064a\\u0629 - \\u0627\\u0644\\u0648\\u0627\\u062c\\u0647\\u0627\\u062a<br \\/>&bull; \\u062a\\u0631\\u0627\\u0643\\u0628 \\u062d\\u0627\\u062c\\u0632 \\u0635\\u0648\\u062a\\u064a - \\u0648\\u0627\\u062c\\u0647\\u0627\\u062a<br \\/>&bull; \\u0628\\u0637\\u0627\\u0646\\u0629 \\u0643\\u0634\\u0641 \\u0627\\u0644\\u0646\\u0627\\u0641\\u0630\\u0629<br \\/>&bull; \\u062e\\u062a\\u0645 \\u0627\\u0644\\u0641\\u062c\\u0648\\u0629 \\u0627\\u0644\\u062e\\u0637\\u064a\\u0629 - \\u0627\\u0644\\u0648\\u0627\\u062c\\u0647\\u0627\\u062a<br \\/>&bull; NXS \\u0639\\u0632\\u0644 \\u062d\\u0631\\u064a\\u0642 \\u0645\\u0646 \\u0633\\u0628\\u0627\\u0646\\u062f\\u0631\\u064a\\u0644<br \\/>&bull; \\u0644\\u0648\\u062d\\u0627\\u062a Nexus Lamella - \\u0627\\u0644\\u062d\\u0648\\u0627\\u0626\\u0637 \\u0627\\u0644\\u0633\\u0627\\u062a\\u0631\\u0629<br \\/>&bull; \\u0623\\u0644\\u0648\\u0627\\u062d Rockwool&reg;<br \\/>&bull; \\u0627\\u0644\\u0645\\u0633\\u0627\\u0639\\u062f\\u064a\\u0646<\\/p>\"}', '2020-05-08 11:27:11', '2020-05-18 02:15:17'),
(8, 1, 100, 12, '1589888272-1589113935-electrical.jpg', '{\"en\":\"Fire Detection\",\"ar\":\"Fire Detection\"}', '{\"en\":\"<p>Lorem Ipsum<\\/p>\",\"ar\":\"<p>Lorem Ipsum<\\/p>\"}', '2020-05-19 07:36:38', '2020-05-19 07:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `service_securities`
--

CREATE TABLE `service_securities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `type_id` int(10) UNSIGNED DEFAULT NULL,
  `cat_id` int(10) UNSIGNED DEFAULT NULL,
  `media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_securities`
--

INSERT INTO `service_securities` (`id`, `is_publish`, `type_id`, `cat_id`, `media`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 100, 1, '1589782535-1589027635-elv.jpg', '{\"en\":\"ELV Service\",\"ar\":\"\\u062e\\u062f\\u0645\\u0629 ELV\"}', '{\"en\":\"<div class=\\\"card-posted\\\">&nbsp;Our Security and Automation Division is one of the primary divisions of the group certified by the competent authorities. We are distributors for serveral international manufacturers with quality and innovative products.We deliver world class automation and advance security, surveillance solutions, which are agile, connected and IOT ready by partnering with best technology vendors. Our industry-leading solutions come from an unflagging dedication to provide customized solutions. This unique entity caters to the growing needs of ELV market in the market. We strive to build long term relationships based on mutual trust resulting from meeting and exceeding customer expectations.\\r\\n<h3>Our Solutions<\\/h3>\\r\\n<p>&bull; Video Intercom (Indoor &amp; Outdoor)<br \\/>&bull; In-Building Structured Cabling<br \\/>&bull; Indoor &amp; Outdoor Fiber Optic Cabling<br \\/>&bull; Multi-pair Telephone Cabling<br \\/>&bull; Technical Room Accessories and Setting up<br \\/>&bull; Wireless LAN Installations<br \\/>&bull; Active Equipment installations<\\/p>\\r\\n<\\/div>\",\"ar\":\"<p style=\\\"text-align: right;\\\">\\u0642\\u0633\\u0645 \\u0627\\u0644\\u0623\\u0645\\u0646 \\u0648\\u0627\\u0644\\u0623\\u062a\\u0645\\u062a\\u0629 \\u0644\\u062f\\u064a\\u0646\\u0627 \\u0647\\u0648 \\u0623\\u062d\\u062f \\u0627\\u0644\\u0623\\u0642\\u0633\\u0627\\u0645 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\\u0629 \\u0644\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u0645\\u0639\\u062a\\u0645\\u062f\\u0629 \\u0645\\u0646 \\u0642\\u0628\\u0644 \\u0627\\u0644\\u0633\\u0644\\u0637\\u0627\\u062a \\u0627\\u0644\\u0645\\u062e\\u062a\\u0635\\u0629. \\u0646\\u062d\\u0646 \\u0645\\u0648\\u0632\\u0639\\u0648\\u0646 \\u0644\\u0645\\u0635\\u0646\\u0639\\u064a \\u0633\\u064a\\u0631\\u0641\\u064a\\u0631\\u0627\\u0644 \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645\\u064a\\u064a\\u0646 \\u0628\\u062c\\u0648\\u062f\\u0629 \\u0648\\u0645\\u0646\\u062a\\u062c\\u0627\\u062a \\u0645\\u0628\\u062a\\u0643\\u0631\\u0629.\\u0646\\u062d\\u0646 \\u0646\\u0642\\u062f\\u0645 \\u0623\\u062a\\u0645\\u062a\\u0629 \\u0639\\u0627\\u0644\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0633\\u062a\\u0648\\u0649 \\u0648\\u0623\\u0645\\u0646\\u064b\\u0627 \\u0645\\u062a\\u0642\\u062f\\u0645\\u064b\\u0627 \\u060c \\u0648\\u062d\\u0644\\u0648\\u0644 \\u0645\\u0631\\u0627\\u0642\\u0628\\u0629 \\u060c \\u0648\\u0647\\u064a \\u0631\\u0634\\u064a\\u0642\\u0629 \\u0648\\u0645\\u062a\\u0635\\u0644\\u0629 \\u0648\\u062c\\u0627\\u0647\\u0632\\u0629 \\u0644\\u0644\\u0625\\u0646\\u062a\\u0631\\u0646\\u062a \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u0644\\u0634\\u0631\\u0627\\u0643\\u0629 \\u0645\\u0639 \\u0623\\u0641\\u0636\\u0644 \\u0645\\u0648\\u0631\\u062f\\u064a \\u0627\\u0644\\u062a\\u0643\\u0646\\u0648\\u0644\\u0648\\u062c\\u064a\\u0627. \\u062a\\u0623\\u062a\\u064a \\u062d\\u0644\\u0648\\u0644\\u0646\\u0627 \\u0627\\u0644\\u0631\\u0627\\u0626\\u062f\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0635\\u0646\\u0627\\u0639\\u0629 \\u0645\\u0646 \\u062a\\u0641\\u0627\\u0646\\u064a \\u0644\\u0627 \\u064a\\u0644\\u064a\\u0646 \\u0644\\u062a\\u0648\\u0641\\u064a\\u0631 \\u062d\\u0644\\u0648\\u0644 \\u0645\\u062e\\u0635\\u0635\\u0629. \\u064a\\u0644\\u0628\\u064a \\u0647\\u0630\\u0627 \\u0627\\u0644\\u0643\\u064a\\u0627\\u0646 \\u0627\\u0644\\u0641\\u0631\\u064a\\u062f \\u0627\\u0644\\u0627\\u062d\\u062a\\u064a\\u0627\\u062c\\u0627\\u062a \\u0627\\u0644\\u0645\\u062a\\u0632\\u0627\\u064a\\u062f\\u0629 \\u0644\\u0633\\u0648\\u0642 ELV \\u0641\\u064a \\u0627\\u0644\\u0633\\u0648\\u0642. \\u0646\\u0633\\u0639\\u0649 \\u062c\\u0627\\u0647\\u062f\\u064a\\u0646 \\u0644\\u0628\\u0646\\u0627\\u0621 \\u0639\\u0644\\u0627\\u0642\\u0627\\u062a \\u0637\\u0648\\u064a\\u0644\\u0629 \\u0627\\u0644\\u0623\\u0645\\u062f \\u062a\\u0642\\u0648\\u0645 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u062b\\u0642\\u0629 \\u0627\\u0644\\u0645\\u062a\\u0628\\u0627\\u062f\\u0644\\u0629 \\u0627\\u0644\\u0646\\u0627\\u062a\\u062c\\u0629 \\u0639\\u0646 \\u062a\\u0644\\u0628\\u064a\\u0629 \\u062a\\u0648\\u0642\\u0639\\u0627\\u062a \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621 \\u0648\\u062a\\u062c\\u0627\\u0648\\u0632\\u0647\\u0627.<br \\/>\\u062d\\u0644\\u0648\\u0644\\u0646\\u0627<br \\/>&bull; \\u0627\\u0646\\u062a\\u0631\\u0643\\u0645 \\u0641\\u064a\\u062f\\u064a\\u0648 (\\u062f\\u0627\\u062e\\u0644\\u064a \\u0648\\u062e\\u0627\\u0631\\u062c\\u064a)<br \\/>&bull; \\u0627\\u0644\\u0643\\u0627\\u0628\\u0644\\u0627\\u062a \\u0627\\u0644\\u0647\\u064a\\u0643\\u0644\\u064a\\u0629 \\u062f\\u0627\\u062e\\u0644 \\u0627\\u0644\\u0645\\u0628\\u0646\\u0649<br \\/>&bull; \\u0643\\u0627\\u0628\\u0644\\u0627\\u062a \\u0627\\u0644\\u0623\\u0644\\u064a\\u0627\\u0641 \\u0627\\u0644\\u0636\\u0648\\u0626\\u064a\\u0629 \\u0627\\u0644\\u062f\\u0627\\u062e\\u0644\\u064a\\u0629 \\u0648\\u0627\\u0644\\u062e\\u0627\\u0631\\u062c\\u064a\\u0629<br \\/>&bull; \\u0643\\u0627\\u0628\\u0644\\u0627\\u062a \\u0627\\u0644\\u0647\\u0627\\u062a\\u0641 \\u0645\\u062a\\u0639\\u062f\\u062f\\u0629 \\u0627\\u0644\\u0623\\u0632\\u0648\\u0627\\u062c<br \\/>&bull; \\u0645\\u0644\\u062d\\u0642\\u0627\\u062a \\u0627\\u0644\\u063a\\u0631\\u0641\\u0629 \\u0627\\u0644\\u062a\\u0642\\u0646\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0625\\u0639\\u062f\\u0627\\u062f<br \\/>&bull; \\u062a\\u0631\\u0643\\u064a\\u0628 \\u0634\\u0628\\u0643\\u0627\\u062a LAN \\u0627\\u0644\\u0644\\u0627\\u0633\\u0644\\u0643\\u064a\\u0629<br \\/>&bull; \\u0645\\u0646\\u0634\\u0622\\u062a \\u0627\\u0644\\u0645\\u0639\\u062f\\u0627\\u062a \\u0627\\u0644\\u0646\\u0634\\u0637\\u0629<\\/p>\"}', '2020-05-09 08:33:55', '2020-05-18 03:02:58'),
(2, 1, 100, 2, '1589782544-1589027690-security.jpg', '{\"en\":\"Security Service\",\"ar\":\"\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0623\\u0645\\u0646\"}', '{\"en\":\"<div class=\\\"card-posted\\\">Our Security and Automation Division is one of the primary divisions of the group certified by the competent authorities. We are distributors for serveral international manufacturers with quality and innovative products. We deliver world class automation and advance security, surveillance solutions, which are agile, connected and IOT ready by partnering with best technology vendors. We bring a variety of technical expertise and decades of experience to every project. Our project managers, project controllers, resident engineers and specialty inspectors have proven experience. We also draw on environmental scientists and other technical specialists with years of expertise.<\\/div>\\r\\n<div class=\\\"card-text\\\" style=\\\"text-align: justify;\\\">\\r\\n<h3>Our Solutions<\\/h3>\\r\\n<p>&bull; CCTV &amp; Video Monitoring<br \\/>&bull; Access Control Systems<br \\/>&bull; Displays and Alarm Systems<br \\/>&bull; Gate Barriers<br \\/>&bull; Bollards<br \\/>&bull; Road Blockers<br \\/>&bull; Centralized Monitoring Systems<br \\/>&bull; Guard Tour Systems<br \\/>&bull; Physical Security Information Management<br \\/>&bull; Video Intercom (Indoor &amp; Outdoor)<br \\/>&bull; Intrusion Detection Systems<\\/p>\\r\\n<\\/div>\",\"ar\":\"<p style=\\\"text-align: right;\\\">\\u0642\\u0633\\u0645 \\u0627\\u0644\\u0623\\u0645\\u0646 \\u0648\\u0627\\u0644\\u0623\\u062a\\u0645\\u062a\\u0629 \\u0644\\u062f\\u064a\\u0646\\u0627 \\u0647\\u0648 \\u0623\\u062d\\u062f \\u0627\\u0644\\u0623\\u0642\\u0633\\u0627\\u0645 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\\u0629 \\u0644\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u0645\\u0639\\u062a\\u0645\\u062f\\u0629 \\u0645\\u0646 \\u0642\\u0628\\u0644 \\u0627\\u0644\\u0633\\u0644\\u0637\\u0627\\u062a \\u0627\\u0644\\u0645\\u062e\\u062a\\u0635\\u0629. \\u0646\\u062d\\u0646 \\u0645\\u0648\\u0632\\u0639\\u0648\\u0646 \\u0644\\u0644\\u0645\\u0635\\u0646\\u0639\\u064a\\u0646 \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645\\u064a\\u064a\\u0646 \\u0633\\u064a\\u0631\\u0641\\u064a\\u0631\\u0627\\u0644 \\u0628\\u062c\\u0648\\u062f\\u0629 \\u0648\\u0645\\u0646\\u062a\\u062c\\u0627\\u062a \\u0645\\u0628\\u062a\\u0643\\u0631\\u0629. \\u0646\\u062d\\u0646 \\u0646\\u0642\\u062f\\u0645 \\u0623\\u062a\\u0645\\u062a\\u0629 \\u0639\\u0627\\u0644\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0633\\u062a\\u0648\\u0649 \\u0648\\u0623\\u0645\\u0646\\u064b\\u0627 \\u0645\\u062a\\u0642\\u062f\\u0645\\u064b\\u0627 \\u0648\\u062d\\u0644\\u0648\\u0644 \\u0645\\u0631\\u0627\\u0642\\u0628\\u0629 \\u062a\\u062a\\u0633\\u0645 \\u0628\\u0627\\u0644\\u0645\\u0631\\u0648\\u0646\\u0629 \\u0648\\u0627\\u0644\\u0627\\u062a\\u0635\\u0627\\u0644 \\u0648\\u062c\\u0627\\u0647\\u0632\\u0629 \\u0644\\u0644\\u0625\\u0646\\u062a\\u0631\\u0646\\u062a \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u0644\\u0634\\u0631\\u0627\\u0643\\u0629 \\u0645\\u0639 \\u0623\\u0641\\u0636\\u0644 \\u0628\\u0627\\u0626\\u0639\\u064a \\u0627\\u0644\\u062a\\u0643\\u0646\\u0648\\u0644\\u0648\\u062c\\u064a\\u0627. \\u0646\\u0623\\u062a\\u064a \\u0628\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0645\\u062a\\u0646\\u0648\\u0639\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0627\\u0644\\u062a\\u0642\\u0646\\u064a\\u0629 \\u0648\\u0639\\u0642\\u0648\\u062f \\u0645\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0644\\u0643\\u0644 \\u0645\\u0634\\u0631\\u0648\\u0639. \\u0623\\u062b\\u0628\\u062a \\u0645\\u062f\\u064a\\u0631\\u0648 \\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0648\\u0645\\u0631\\u0627\\u0642\\u0628\\u0648 \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639 \\u0648\\u0627\\u0644\\u0645\\u0647\\u0646\\u062f\\u0633\\u0648\\u0646 \\u0627\\u0644\\u0645\\u0642\\u064a\\u0645\\u0648\\u0646 \\u0648\\u0627\\u0644\\u0645\\u0641\\u062a\\u0634\\u0648\\u0646 \\u0627\\u0644\\u0645\\u062a\\u062e\\u0635\\u0635\\u0648\\u0646 \\u062e\\u0628\\u0631\\u062a\\u0647\\u0645. \\u0643\\u0645\\u0627 \\u0646\\u0633\\u062a\\u0639\\u064a\\u0646 \\u0628\\u0639\\u0644\\u0645\\u0627\\u0621 \\u0627\\u0644\\u0628\\u064a\\u0626\\u0629 \\u0648\\u063a\\u064a\\u0631\\u0647\\u0645 \\u0645\\u0646 \\u0627\\u0644\\u0645\\u062a\\u062e\\u0635\\u0635\\u064a\\u0646 \\u0627\\u0644\\u0641\\u0646\\u064a\\u064a\\u0646 \\u0627\\u0644\\u0630\\u064a\\u0646 \\u064a\\u062a\\u0645\\u062a\\u0639\\u0648\\u0646 \\u0628\\u0633\\u0646\\u0648\\u0627\\u062a \\u0645\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629.<br \\/>\\u062d\\u0644\\u0648\\u0644\\u0646\\u0627<br \\/>&bull; CCTV \\u0648\\u0645\\u0631\\u0627\\u0642\\u0628\\u0629 \\u0627\\u0644\\u0641\\u064a\\u062f\\u064a\\u0648<br \\/>&bull; \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u062a\\u062d\\u0643\\u0645 \\u0641\\u064a \\u0627\\u0644\\u062f\\u062e\\u0648\\u0644<br \\/>&bull; \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u0639\\u0631\\u0636 \\u0648\\u0627\\u0644\\u0625\\u0646\\u0630\\u0627\\u0631<br \\/>&bull; \\u062d\\u0648\\u0627\\u062c\\u0632 \\u0627\\u0644\\u0628\\u0648\\u0627\\u0628\\u0629<br \\/>&bull; \\u0627\\u0644\\u0634\\u0645\\u0639\\u0627\\u062a<br \\/>&bull; \\u062d\\u0648\\u0627\\u062c\\u0632 \\u0627\\u0644\\u0637\\u0631\\u0642<br \\/>&bull; \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0642\\u0628\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0643\\u0632\\u064a\\u0629<br \\/>&bull; \\u0623\\u0646\\u0638\\u0645\\u0629 \\u062c\\u0648\\u0644\\u0629 \\u0627\\u0644\\u062d\\u0631\\u0633<br \\/>&bull; \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0627\\u0644\\u0623\\u0645\\u0646 \\u0627\\u0644\\u0645\\u0627\\u062f\\u064a<br \\/>&bull; \\u0627\\u0646\\u062a\\u0631\\u0643\\u0645 \\u0641\\u064a\\u062f\\u064a\\u0648 (\\u062f\\u0627\\u062e\\u0644\\u064a \\u0648\\u062e\\u0627\\u0631\\u062c\\u064a)<br \\/>&bull; \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0643\\u0634\\u0641 \\u0627\\u0644\\u062a\\u0633\\u0644\\u0644<\\/p>\"}', '2020-05-09 08:34:50', '2020-05-18 02:58:48'),
(3, 1, 200, 3, '1589782553-1589027760-hotel.jpg', '{\"en\":\"Automation & Integration\",\"ar\":\"\\u0627\\u0644\\u0623\\u062a\\u0645\\u062a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0643\\u0627\\u0645\\u0644\"}', '{\"en\":\"<div class=\\\"card-posted\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"card-text\\\" style=\\\"text-align: justify;\\\">At General International Group, we introduce the automation solutions that integrate with technology. Our automation and control solutions for buildings and businesses let people control entire environments with the push of a button, integrating systems such as A\\/V, lighting, shading, IT, security, BMS, and HVAC to provide greater comfort, convenience, and security. All our solutions are designed and built to work together as a complete system, enabling you to monitor, manage, and control everything from one platform. We bring a variety of technical expertise and decades of experience to every project. Our project managers, project controllers, resident engineers and specialty inspectors have proven experience. We also draw on environmental scientists and other technical specialists with years of expertise.Deliver an exciting experience for your customers and guests and increase the efficiency of your business with us.\\r\\n<h3>Our Solutions<\\/h3>\\r\\n<p>&bull; Audio \\/ Video<br \\/>&bull; Collaboration<br \\/>&bull; Lighting Control<br \\/>&bull; Shading<br \\/>&bull; Control Devices<br \\/>&bull; Systems Management<br \\/>&bull; Video on Demand<br \\/>&bull; Guest Room Management<br \\/>&bull; Mobile Applications<br \\/>&bull; Room Automation<\\/p>\\r\\n<\\/div>\",\"ar\":\"<p style=\\\"text-align: right;\\\">\\u0641\\u064a \\u062c\\u0646\\u0631\\u0627\\u0644 \\u0627\\u0646\\u062a\\u0631\\u0646\\u0627\\u0634\\u064a\\u0648\\u0646\\u0627\\u0644 \\u062c\\u0631\\u0648\\u0628 \\u060c \\u0646\\u0642\\u062f\\u0645 \\u062d\\u0644\\u0648\\u0644 \\u0627\\u0644\\u0623\\u062a\\u0645\\u062a\\u0629 \\u0627\\u0644\\u062a\\u064a \\u062a\\u062a\\u0643\\u0627\\u0645\\u0644 \\u0645\\u0639 \\u0627\\u0644\\u062a\\u0643\\u0646\\u0648\\u0644\\u0648\\u062c\\u064a\\u0627. \\u062a\\u062a\\u064a\\u062d \\u062d\\u0644\\u0648\\u0644 \\u0627\\u0644\\u0623\\u062a\\u0645\\u062a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u062d\\u0643\\u0645 \\u0627\\u0644\\u062e\\u0627\\u0635\\u0629 \\u0628\\u0646\\u0627 \\u0644\\u0644\\u0645\\u0628\\u0627\\u0646\\u064a \\u0648\\u0627\\u0644\\u0634\\u0631\\u0643\\u0627\\u062a \\u0644\\u0644\\u0623\\u0634\\u062e\\u0627\\u0635 \\u0627\\u0644\\u062a\\u062d\\u0643\\u0645 \\u0641\\u064a \\u0628\\u064a\\u0626\\u0627\\u062a \\u0643\\u0627\\u0645\\u0644\\u0629 \\u0628\\u0636\\u063a\\u0637\\u0629 \\u0632\\u0631 \\u0648\\u0627\\u062d\\u062f\\u0629 \\u060c \\u0648\\u062f\\u0645\\u062c \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0645\\u062b\\u0644 A \\/ V \\u060c \\u0648\\u0627\\u0644\\u0625\\u0636\\u0627\\u0621\\u0629 \\u060c \\u0648\\u0627\\u0644\\u062a\\u0638\\u0644\\u064a\\u0644 \\u060c \\u0648\\u062a\\u0643\\u0646\\u0648\\u0644\\u0648\\u062c\\u064a\\u0627 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u060c \\u0648\\u0627\\u0644\\u0623\\u0645\\u0646 \\u060c \\u0648 BMS \\u060c \\u0648 HVAC \\u0644\\u062a\\u0648\\u0641\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0632\\u064a\\u062f \\u0645\\u0646 \\u0627\\u0644\\u0631\\u0627\\u062d\\u0629 \\u0648\\u0627\\u0644\\u0631\\u0627\\u062d\\u0629 \\u0648\\u0627\\u0644\\u0623\\u0645\\u0627\\u0646 . \\u062a\\u0645 \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0648\\u0628\\u0646\\u0627\\u0621 \\u062c\\u0645\\u064a\\u0639 \\u062d\\u0644\\u0648\\u0644\\u0646\\u0627 \\u0644\\u0644\\u0639\\u0645\\u0644 \\u0645\\u0639\\u064b\\u0627 \\u0643\\u0646\\u0638\\u0627\\u0645 \\u0643\\u0627\\u0645\\u0644 \\u060c \\u0645\\u0645\\u0627 \\u064a\\u062a\\u064a\\u062d \\u0644\\u0643 \\u0645\\u0631\\u0627\\u0642\\u0628\\u0629 \\u0643\\u0644 \\u0634\\u064a\\u0621 \\u0648\\u0625\\u062f\\u0627\\u0631\\u062a\\u0647 \\u0648\\u0627\\u0644\\u062a\\u062d\\u0643\\u0645 \\u0641\\u064a\\u0647 \\u0645\\u0646 \\u0646\\u0638\\u0627\\u0645 \\u0623\\u0633\\u0627\\u0633\\u064a \\u0648\\u0627\\u062d\\u062f. \\u0646\\u0623\\u062a\\u064a \\u0628\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0645\\u062a\\u0646\\u0648\\u0639\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0627\\u0644\\u062a\\u0642\\u0646\\u064a\\u0629 \\u0648\\u0639\\u0642\\u0648\\u062f \\u0645\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0644\\u0643\\u0644 \\u0645\\u0634\\u0631\\u0648\\u0639. \\u0623\\u062b\\u0628\\u062a \\u0645\\u062f\\u064a\\u0631\\u0648 \\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0648\\u0645\\u0631\\u0627\\u0642\\u0628\\u0648 \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639 \\u0648\\u0627\\u0644\\u0645\\u0647\\u0646\\u062f\\u0633\\u0648\\u0646 \\u0627\\u0644\\u0645\\u0642\\u064a\\u0645\\u0648\\u0646 \\u0648\\u0627\\u0644\\u0645\\u0641\\u062a\\u0634\\u0648\\u0646 \\u0627\\u0644\\u0645\\u062a\\u062e\\u0635\\u0635\\u0648\\u0646 \\u062e\\u0628\\u0631\\u062a\\u0647\\u0645. \\u0643\\u0645\\u0627 \\u0646\\u0633\\u062a\\u0639\\u064a\\u0646 \\u0628\\u0639\\u0644\\u0645\\u0627\\u0621 \\u0627\\u0644\\u0628\\u064a\\u0626\\u0629 \\u0648\\u063a\\u064a\\u0631\\u0647\\u0645 \\u0645\\u0646 \\u0627\\u0644\\u0645\\u062a\\u062e\\u0635\\u0635\\u064a\\u0646 \\u0627\\u0644\\u0641\\u0646\\u064a\\u064a\\u0646 \\u0627\\u0644\\u0630\\u064a\\u0646 \\u064a\\u062a\\u0645\\u062a\\u0639\\u0648\\u0646 \\u0628\\u0633\\u0646\\u0648\\u0627\\u062a \\u0645\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u060c \\u0646\\u0642\\u062f\\u0645 \\u062a\\u062c\\u0631\\u0628\\u0629 \\u0645\\u062b\\u064a\\u0631\\u0629 \\u0644\\u0639\\u0645\\u0644\\u0627\\u0626\\u0643 \\u0648\\u0636\\u064a\\u0648\\u0641\\u0643 \\u0648\\u0632\\u064a\\u0627\\u062f\\u0629 \\u0643\\u0641\\u0627\\u0621\\u0629 \\u0639\\u0645\\u0644\\u0643 \\u0645\\u0639\\u0646\\u0627.<br \\/>\\u062d\\u0644\\u0648\\u0644\\u0646\\u0627<br \\/>&bull; \\u0635\\u0648\\u062a \\/ \\u0641\\u064a\\u062f\\u064a\\u0648<br \\/>&bull; \\u0627\\u0644\\u062a\\u0639\\u0627\\u0648\\u0646<br \\/>&bull; \\u0627\\u0644\\u062a\\u062d\\u0643\\u0645 \\u0628\\u0627\\u0644\\u0625\\u0636\\u0627\\u0621\\u0629<br \\/>&bull; \\u0627\\u0644\\u062a\\u0638\\u0644\\u064a\\u0644<br \\/>&bull; \\u0623\\u062c\\u0647\\u0632\\u0629 \\u0627\\u0644\\u062a\\u062d\\u0643\\u0645<br \\/>&bull; \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0646\\u0638\\u0645<br \\/>&bull; \\u0627\\u0644\\u0641\\u064a\\u062f\\u064a\\u0648 \\u062d\\u0633\\u0628 \\u0627\\u0644\\u0637\\u0644\\u0628<br \\/>&bull; \\u0625\\u062f\\u0627\\u0631\\u0629 \\u063a\\u0631\\u0641 \\u0627\\u0644\\u0646\\u0632\\u0644\\u0627\\u0621<br \\/>&bull; \\u062a\\u0637\\u0628\\u064a\\u0642\\u0627\\u062a \\u0627\\u0644\\u0647\\u0627\\u062a\\u0641 \\u0627\\u0644\\u062c\\u0648\\u0627\\u0644<br \\/>&bull; \\u0623\\u062a\\u0645\\u062a\\u0629 \\u0627\\u0644\\u063a\\u0631\\u0641\\u0629<\\/p>\"}', '2020-05-09 08:36:00', '2020-05-18 02:59:04'),
(4, 1, 200, 4, '1589782562-1589027817-building.jpg', '{\"en\":\"Building Management\",\"ar\":\"\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0628\\u0627\\u0646\\u064a\"}', '{\"en\":\"<div class=\\\"card-posted\\\">&nbsp;<\\/div>\\r\\n<div class=\\\"card-text\\\" style=\\\"text-align: justify;\\\">Today, buildings account for 41 percent of energy consumption worldwide, and produce a third of greenhouse gas emissions. As public opinion calls for more environmental transparency and accountability from public and commercial organizations, improving your buildings&rsquo; efficiency is a necessary move. But it is also a smart one, with energy accounting for up to 30 percent of a building&rsquo;s life-cycle cost, performance optimization is a critical step in not just meeting sustainability expectations and emissions reduction targets &ndash; but a key lever to improve financial, regulatory and reputation standing. Our project managers, project controllers, resident engineers and specialty inspectors have proven experience. Find out more about energy efficiency, sustainable buildings and how to turn your buildings into true assets.\\r\\n<h3>Our Solutions<\\/h3>\\r\\n<p>&bull; Building Management Systems<br \\/>&bull; Energy Saving Systems<br \\/>&bull; Building Automation<br \\/>&bull; Electric power control<br \\/>&bull; Heating, ventilation and air-conditioning (HVAC)<br \\/>&bull; Security and observation<br \\/>&bull; Access control<br \\/>&bull; Fire alarm systems<br \\/>&bull; Lifts, elevators etc<br \\/>&bull; Plumbing<br \\/>&bull; Closed-circuit television (CCTV)<br \\/>&bull; Other engineering systems<br \\/>&bull; Control Panel<br \\/>&bull; PA systems<br \\/>&bull; Closed-circuit television (CCTV)<br \\/>&bull; Alarm Monitor<br \\/>&bull; Security Automation<\\/p>\\r\\n<\\/div>\",\"ar\":\"<p style=\\\"text-align: right;\\\">\\u0627\\u0644\\u064a\\u0648\\u0645 \\u060c \\u062a\\u0634\\u0643\\u0644 \\u0627\\u0644\\u0645\\u0628\\u0627\\u0646\\u064a 41 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0627\\u0626\\u0629 \\u0645\\u0646 \\u0627\\u0633\\u062a\\u0647\\u0644\\u0627\\u0643 \\u0627\\u0644\\u0637\\u0627\\u0642\\u0629 \\u0641\\u064a \\u062c\\u0645\\u064a\\u0639 \\u0623\\u0646\\u062d\\u0627\\u0621 \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645 \\u060c \\u0648\\u062a\\u0646\\u062a\\u062c \\u062b\\u0644\\u062b \\u0627\\u0646\\u0628\\u0639\\u0627\\u062b\\u0627\\u062a \\u063a\\u0627\\u0632\\u0627\\u062a \\u0627\\u0644\\u0627\\u062d\\u062a\\u0628\\u0627\\u0633 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0631\\u064a. \\u0646\\u0638\\u0631\\u064b\\u0627 \\u0644\\u0623\\u0646 \\u0627\\u0644\\u0631\\u0623\\u064a \\u0627\\u0644\\u0639\\u0627\\u0645 \\u064a\\u062f\\u0639\\u0648 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0632\\u064a\\u062f \\u0645\\u0646 \\u0627\\u0644\\u0634\\u0641\\u0627\\u0641\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u0633\\u0627\\u0621\\u0644\\u0629 \\u0627\\u0644\\u0628\\u064a\\u0626\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0645\\u0646\\u0638\\u0645\\u0627\\u062a \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629 \\u0648\\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a\\u0629 \\u060c \\u0641\\u0625\\u0646 \\u062a\\u062d\\u0633\\u064a\\u0646 \\u0643\\u0641\\u0627\\u0621\\u0629 \\u0627\\u0644\\u0645\\u0628\\u0627\\u0646\\u064a \\u0627\\u0644\\u062e\\u0627\\u0635\\u0629 \\u0628\\u0643 \\u0647\\u0648 \\u062e\\u0637\\u0648\\u0629 \\u0636\\u0631\\u0648\\u0631\\u064a\\u0629. \\u0648\\u0644\\u0643\\u0646\\u0647\\u0627 \\u0623\\u064a\\u0636\\u064b\\u0627 \\u0630\\u0643\\u064a\\u0629 \\u060c \\u062d\\u064a\\u062b \\u062a\\u0645\\u062b\\u0644 \\u0627\\u0644\\u0637\\u0627\\u0642\\u0629 \\u0645\\u0627 \\u064a\\u0635\\u0644 \\u0625\\u0644\\u0649 30 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0627\\u0626\\u0629 \\u0645\\u0646 \\u062a\\u0643\\u0644\\u0641\\u0629 \\u062f\\u0648\\u0631\\u0629 \\u062d\\u064a\\u0627\\u0629 \\u0627\\u0644\\u0645\\u0628\\u0646\\u0649 \\u060c \\u0648\\u064a\\u0639\\u062f \\u062a\\u062d\\u0633\\u064a\\u0646 \\u0627\\u0644\\u0623\\u062f\\u0627\\u0621 \\u062e\\u0637\\u0648\\u0629 \\u062d\\u0627\\u0633\\u0645\\u0629 \\u0644\\u064a\\u0633 \\u0641\\u0642\\u0637 \\u0641\\u064a \\u062a\\u0644\\u0628\\u064a\\u0629 \\u062a\\u0648\\u0642\\u0639\\u0627\\u062a \\u0627\\u0644\\u0627\\u0633\\u062a\\u062f\\u0627\\u0645\\u0629 \\u0648\\u0623\\u0647\\u062f\\u0627\\u0641 \\u0627\\u0644\\u062d\\u062f \\u0645\\u0646 \\u0627\\u0644\\u0627\\u0646\\u0628\\u0639\\u0627\\u062b\\u0627\\u062a - \\u0628\\u0644 \\u0623\\u062f\\u0627\\u0629 \\u0631\\u0626\\u064a\\u0633\\u064a\\u0629 \\u0644\\u062a\\u062d\\u0633\\u064a\\u0646 \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0646\\u0638\\u064a\\u0645\\u064a\\u0629 \\u0648\\u0645\\u0643\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0633\\u0645\\u0639\\u0629. \\u0623\\u062b\\u0628\\u062a \\u0645\\u062f\\u064a\\u0631\\u0648 \\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0648\\u0645\\u0631\\u0627\\u0642\\u0628\\u0648 \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639 \\u0648\\u0627\\u0644\\u0645\\u0647\\u0646\\u062f\\u0633\\u0648\\u0646 \\u0627\\u0644\\u0645\\u0642\\u064a\\u0645\\u0648\\u0646 \\u0648\\u0627\\u0644\\u0645\\u0641\\u062a\\u0634\\u0648\\u0646 \\u0627\\u0644\\u0645\\u062a\\u062e\\u0635\\u0635\\u0648\\u0646 \\u062e\\u0628\\u0631\\u062a\\u0647\\u0645. \\u062a\\u0639\\u0631\\u0641 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0632\\u064a\\u062f \\u062d\\u0648\\u0644 \\u0643\\u0641\\u0627\\u0621\\u0629 \\u0627\\u0644\\u0637\\u0627\\u0642\\u0629 \\u0648\\u0627\\u0644\\u0645\\u0628\\u0627\\u0646\\u064a \\u0627\\u0644\\u0645\\u0633\\u062a\\u062f\\u0627\\u0645\\u0629 \\u0648\\u0643\\u064a\\u0641\\u064a\\u0629 \\u062a\\u062d\\u0648\\u064a\\u0644 \\u0627\\u0644\\u0645\\u0628\\u0627\\u0646\\u064a \\u0625\\u0644\\u0649 \\u0623\\u0635\\u0648\\u0644 \\u062d\\u0642\\u064a\\u0642\\u064a\\u0629.<br \\/>\\u062d\\u0644\\u0648\\u0644\\u0646\\u0627<br \\/>&bull; \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0628\\u0627\\u0646\\u064a<br \\/>&bull; \\u0623\\u0646\\u0638\\u0645\\u0629 \\u062a\\u0648\\u0641\\u064a\\u0631 \\u0627\\u0644\\u0637\\u0627\\u0642\\u0629<br \\/>&bull; \\u0627\\u0644\\u062a\\u0634\\u063a\\u064a\\u0644 \\u0627\\u0644\\u0622\\u0644\\u064a \\u0644\\u0644\\u0645\\u0628\\u0646\\u0649<br \\/>&bull; \\u0627\\u0644\\u062a\\u062d\\u0643\\u0645 \\u0641\\u064a \\u0627\\u0644\\u0637\\u0627\\u0642\\u0629 \\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0626\\u064a\\u0629<br \\/>&bull; \\u0627\\u0644\\u062a\\u062f\\u0641\\u0626\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0647\\u0648\\u064a\\u0629 \\u0648\\u062a\\u0643\\u064a\\u064a\\u0641 \\u0627\\u0644\\u0647\\u0648\\u0627\\u0621 (HVAC)<br \\/>&bull; \\u0627\\u0644\\u0623\\u0645\\u0646 \\u0648\\u0627\\u0644\\u0645\\u0644\\u0627\\u062d\\u0638\\u0629<br \\/>&bull; \\u0635\\u0644\\u0627\\u062d\\u064a\\u0629 \\u0627\\u0644\\u062a\\u062d\\u0643\\u0645 \\u0635\\u0644\\u0627\\u062d\\u064a\\u0629 \\u0627\\u0644\\u062f\\u062e\\u0648\\u0644<br \\/>&bull; \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0625\\u0646\\u0630\\u0627\\u0631 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642<br \\/>&bull; \\u0645\\u0635\\u0627\\u0639\\u062f \\u060c \\u0645\\u0635\\u0627\\u0639\\u062f \\u0627\\u0644\\u062e<br \\/>&bull; \\u0627\\u0644\\u0633\\u0628\\u0627\\u0643\\u0629<br \\/>&bull; \\u062a\\u0644\\u0641\\u0632\\u064a\\u0648\\u0646 \\u0627\\u0644\\u062f\\u0627\\u0626\\u0631\\u0629 \\u0627\\u0644\\u0645\\u063a\\u0644\\u0642\\u0629 (CCTV)<br \\/>&bull; \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0623\\u062e\\u0631\\u0649<br \\/>&bull; \\u0644\\u0648\\u062d\\u0629 \\u0627\\u0644\\u062a\\u062d\\u0643\\u0645<br \\/>&bull; \\u0623\\u0646\\u0638\\u0645\\u0629 PA<br \\/>&bull; \\u062a\\u0644\\u0641\\u0632\\u064a\\u0648\\u0646 \\u0627\\u0644\\u062f\\u0627\\u0626\\u0631\\u0629 \\u0627\\u0644\\u0645\\u063a\\u0644\\u0642\\u0629 (CCTV)<br \\/>&bull; \\u0645\\u0631\\u0627\\u0642\\u0628 \\u0627\\u0644\\u0625\\u0646\\u0630\\u0627\\u0631<br \\/>&bull; \\u0623\\u062a\\u0645\\u062a\\u0629 \\u0627\\u0644\\u0623\\u0645\\u0646<\\/p>\"}', '2020-05-09 08:36:57', '2020-05-18 02:59:20');

-- --------------------------------------------------------

--
-- Table structure for table `service_waters`
--

CREATE TABLE `service_waters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `type_id` int(10) UNSIGNED DEFAULT NULL,
  `cat_id` int(10) UNSIGNED DEFAULT NULL,
  `media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_waters`
--

INSERT INTO `service_waters` (`id`, `is_publish`, `type_id`, `cat_id`, `media`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 100, 1, '1589782582-1589034189-filter.jpg', '{\"en\":\"Water Filtration Systems\",\"ar\":\"\\u0623\\u0646\\u0638\\u0645\\u0629 \\u062a\\u0646\\u0642\\u064a\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647\"}', '{\"en\":\"<div class=\\\"card-posted\\\">Water filtration and purification technology serves industrial, residential, commercial, and municipal customers.Our team delivers products and solutions to facilitate pure, filtered water on demand for critical functions ranging from food service to aquaculture. Our capabilities include making safe drinking water more accessible, treating and purifying water for reuse, and desalination. We have partnered with trusted brands to offer a comprehensive line of compatible water filtration and purification products including pumps, filters, membranes, housings, valves, meters, and controls.<\\/div>\\r\\n<div class=\\\"card-text\\\">Our range is an American manufactory creates a seamless polyethylene shell that is wound continuously with fiberglass roving and sealed with epoxy resin. This process results in a corrosion-resistant, leak-free vessel. These equipments are used to produce a tank that offers outstanding performance and durability. Composite Pressure Vessels are used for large commercial and industrial applications such as FILTRATION.<\\/div>\\r\\n<div class=\\\"card-text\\\"><br \\/><strong>Filtration systems are classified into the followings:<\\/strong><\\/div>\\r\\n<div class=\\\"card-text\\\">&nbsp;<\\/div>\\r\\n<ul>\\r\\n<li class=\\\"card-text\\\">Sand median Filter (rough filtration).<\\/li>\\r\\n<li class=\\\"card-text\\\">Glass median Filters (fine filtration).<\\/li>\\r\\n<li class=\\\"card-text\\\">Cartridge Filters (Fine filtration)<\\/li>\\r\\n<li class=\\\"card-text\\\">Multi Median Filter (Odour + Colour + Taste filtration).<\\/li>\\r\\n<\\/ul>\\r\\n<div class=\\\"card-text\\\"><br \\/>Note that all types are available in both horizontal and vertical shapes depending on application. An addition, automatic and manual heads are adapted as well upon site requirement. While backwashing is the cleaning mechanism of such filters.\\r\\n<h3>Our Solutions<\\/h3>\\r\\n<p>&bull; Domestic Filter<br \\/>&bull; Sand Filter<br \\/>&bull; Multimedia Filter<br \\/>&bull; Activated Filter<br \\/>&bull; Water Softener<\\/p>\\r\\n<\\/div>\\r\\n<div id=\\\"gtx-trans\\\" style=\\\"position: absolute; left: 419px; top: 385px;\\\">&nbsp;<\\/div>\",\"ar\":\"<p style=\\\"text-align: right;\\\">\\u062a\\u062e\\u062f\\u0645 \\u062a\\u0643\\u0646\\u0648\\u0644\\u0648\\u062c\\u064a\\u0627 \\u062a\\u0646\\u0642\\u064a\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0648\\u062a\\u0646\\u0642\\u064a\\u062a\\u0647\\u0627 \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621 \\u0627\\u0644\\u0635\\u0646\\u0627\\u0639\\u064a\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0633\\u0643\\u0646\\u064a\\u064a\\u0646 \\u0648\\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0628\\u0644\\u062f\\u064a\\u0627\\u062a \\u060c \\u0648\\u064a\\u0642\\u062f\\u0645 \\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0627\\u0644\\u0645\\u0646\\u062a\\u062c\\u0627\\u062a \\u0648\\u0627\\u0644\\u062d\\u0644\\u0648\\u0644 \\u0644\\u062a\\u0633\\u0647\\u064a\\u0644 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0627\\u0644\\u0646\\u0642\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u0641\\u0644\\u062a\\u0631\\u0629 \\u062d\\u0633\\u0628 \\u0627\\u0644\\u0637\\u0644\\u0628 \\u0644\\u0644\\u0648\\u0638\\u0627\\u0626\\u0641 \\u0627\\u0644\\u062d\\u064a\\u0648\\u064a\\u0629 \\u0627\\u0644\\u062a\\u064a \\u062a\\u062a\\u0631\\u0627\\u0648\\u062d \\u0645\\u0646 \\u062e\\u062f\\u0645\\u0629 \\u0627\\u0644\\u0637\\u0639\\u0627\\u0645 \\u0625\\u0644\\u0649 \\u062a\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0623\\u062d\\u064a\\u0627\\u0621 \\u0627\\u0644\\u0645\\u0627\\u0626\\u064a\\u0629. \\u062a\\u0634\\u0645\\u0644 \\u0642\\u062f\\u0631\\u0627\\u062a\\u0646\\u0627 \\u062c\\u0639\\u0644 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0627\\u0644\\u0635\\u0627\\u0644\\u062d\\u0629 \\u0644\\u0644\\u0634\\u0631\\u0628 \\u0623\\u0643\\u062b\\u0631 \\u0633\\u0647\\u0648\\u0644\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0648\\u0635\\u0648\\u0644 \\u0625\\u0644\\u064a\\u0647\\u0627 \\u0648\\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0648\\u062a\\u0646\\u0642\\u064a\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0644\\u0625\\u0639\\u0627\\u062f\\u0629 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645\\u0647\\u0627 \\u0648\\u062a\\u062d\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647. \\u0644\\u0642\\u062f \\u062f\\u062e\\u0644\\u0646\\u0627 \\u0641\\u064a \\u0634\\u0631\\u0627\\u0643\\u0629 \\u0645\\u0639 \\u0639\\u0644\\u0627\\u0645\\u0627\\u062a \\u062a\\u062c\\u0627\\u0631\\u064a\\u0629 \\u0645\\u0648\\u062b\\u0648\\u0642\\u0629 \\u0644\\u062a\\u0642\\u062f\\u064a\\u0645 \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0634\\u0627\\u0645\\u0644\\u0629 \\u0645\\u0646 \\u0645\\u0646\\u062a\\u062c\\u0627\\u062a \\u062a\\u0646\\u0642\\u064a\\u0629 \\u0648\\u062a\\u0646\\u0642\\u064a\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0627\\u0644\\u0645\\u062a\\u0648\\u0627\\u0641\\u0642\\u0629 \\u0628\\u0645\\u0627 \\u0641\\u064a \\u0630\\u0644\\u0643 \\u0627\\u0644\\u0645\\u0636\\u062e\\u0627\\u062a \\u0648\\u0627\\u0644\\u0641\\u0644\\u0627\\u062a\\u0631 \\u0648\\u0627\\u0644\\u0623\\u063a\\u0634\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u0628\\u0627\\u0646\\u064a \\u0648\\u0627\\u0644\\u0635\\u0645\\u0627\\u0645\\u0627\\u062a \\u0648\\u0627\\u0644\\u0639\\u062f\\u0627\\u062f\\u0627\\u062a \\u0648\\u0639\\u0646\\u0627\\u0635\\u0631 \\u0627\\u0644\\u062a\\u062d\\u0643\\u0645.<br \\/>\\u0645\\u062c\\u0645\\u0648\\u0639\\u062a\\u0646\\u0627 \\u0647\\u064a \\u0645\\u0635\\u0646\\u0639 \\u0623\\u0645\\u0631\\u064a\\u0643\\u064a \\u064a\\u062e\\u0644\\u0642 \\u063a\\u0644\\u0627\\u0641 \\u0628\\u0648\\u0644\\u064a\\u062b\\u064a\\u0644\\u064a\\u0646 \\u063a\\u064a\\u0631 \\u0645\\u0644\\u062d\\u0648\\u0645 \\u064a\\u062a\\u0645 \\u062c\\u0631\\u062d\\u0647 \\u0628\\u0627\\u0633\\u062a\\u0645\\u0631\\u0627\\u0631 \\u0645\\u0639 \\u0627\\u0644\\u0645\\u062a\\u062c\\u0648\\u0644\\u064a\\u0646 \\u0628\\u0627\\u0644\\u0623\\u0644\\u064a\\u0627\\u0641 \\u0627\\u0644\\u0632\\u062c\\u0627\\u062c\\u064a\\u0629 \\u0648\\u0645\\u062e\\u062a\\u0648\\u0645 \\u0628\\u0631\\u0627\\u062a\\u0646\\u062c \\u0627\\u0644\\u0625\\u064a\\u0628\\u0648\\u0643\\u0633\\u064a. \\u062a\\u0624\\u062f\\u064a \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0639\\u0645\\u0644\\u064a\\u0629 \\u0625\\u0644\\u0649 \\u0648\\u0639\\u0627\\u0621 \\u0645\\u0642\\u0627\\u0648\\u0645 \\u0644\\u0644\\u062a\\u0622\\u0643\\u0644 \\u0648\\u062e\\u0627\\u0644\\u064a \\u0645\\u0646 \\u0627\\u0644\\u062a\\u0633\\u0631\\u0628. \\u064a\\u062a\\u0645 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0645\\u0639\\u062f\\u0627\\u062a \\u0644\\u0625\\u0646\\u062a\\u0627\\u062c \\u062e\\u0632\\u0627\\u0646 \\u064a\\u0648\\u0641\\u0631 \\u0623\\u062f\\u0627\\u0621 \\u0648\\u0645\\u062a\\u0627\\u0646\\u0629 \\u0645\\u062a\\u0645\\u064a\\u0632\\u0629. \\u062a\\u0633\\u062a\\u062e\\u062f\\u0645 \\u0623\\u0648\\u0639\\u064a\\u0629 \\u0627\\u0644\\u0636\\u063a\\u0637 \\u0627\\u0644\\u0645\\u0631\\u0643\\u0628 \\u0644\\u0644\\u062a\\u0637\\u0628\\u064a\\u0642\\u0627\\u062a \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0635\\u0646\\u0627\\u0639\\u064a\\u0629 \\u0627\\u0644\\u0643\\u0628\\u064a\\u0631\\u0629 \\u0645\\u062b\\u0644 \\u0627\\u0644\\u062a\\u0631\\u0634\\u064a\\u062d.<br \\/>\\u062a\\u0635\\u0646\\u0641 \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u062a\\u0631\\u0634\\u064a\\u062d \\u0625\\u0644\\u0649 \\u0645\\u0627 \\u064a\\u0644\\u064a:<br \\/>\\u0645\\u0631\\u0634\\u062d \\u0645\\u062a\\u0648\\u0633\\u0637 \\u200b\\u200b\\u0644\\u0644\\u0631\\u0645\\u0644 (\\u0627\\u0644\\u062a\\u0631\\u0634\\u064a\\u062d \\u0627\\u0644\\u062e\\u0634\\u0646).<br \\/>\\u0645\\u0631\\u0634\\u062d\\u0627\\u062a \\u0627\\u0644\\u0632\\u062c\\u0627\\u062c \\u0627\\u0644\\u0645\\u062a\\u0648\\u0633\\u0637\\u0629 (\\u0627\\u0644\\u062a\\u0631\\u0634\\u064a\\u062d \\u0627\\u0644\\u062f\\u0642\\u064a\\u0642).<br \\/>\\u0645\\u0631\\u0634\\u062d\\u0627\\u062a \\u0627\\u0644\\u062e\\u0631\\u0637\\u0648\\u0634\\u0629 (\\u0627\\u0644\\u062a\\u0631\\u0634\\u064a\\u062d \\u0627\\u0644\\u062f\\u0642\\u064a\\u0642)<br \\/>\\u0645\\u0631\\u0634\\u062d \\u0645\\u062a\\u0648\\u0633\\u0637 \\u200b\\u200b\\u0645\\u062a\\u0639\\u062f\\u062f (\\u0627\\u0644\\u0631\\u0627\\u0626\\u062d\\u0629 + \\u0627\\u0644\\u0644\\u0648\\u0646 + \\u0637\\u0639\\u0645 \\u0627\\u0644\\u062a\\u0631\\u0634\\u064a\\u062d).<br \\/>\\u0644\\u0627\\u062d\\u0638 \\u0623\\u0646 \\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u0623\\u0646\\u0648\\u0627\\u0639 \\u0645\\u062a\\u0648\\u0641\\u0631\\u0629 \\u0628\\u0623\\u0634\\u0643\\u0627\\u0644 \\u0623\\u0641\\u0642\\u064a\\u0629 \\u0648\\u0631\\u0623\\u0633\\u064a\\u0629 \\u0627\\u0639\\u062a\\u0645\\u0627\\u062f\\u064b\\u0627 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u062a\\u0637\\u0628\\u064a\\u0642. \\u0628\\u0627\\u0644\\u0625\\u0636\\u0627\\u0641\\u0629 \\u0625\\u0644\\u0649 \\u0630\\u0644\\u0643 \\u060c \\u064a\\u062a\\u0645 \\u062a\\u0643\\u064a\\u064a\\u0641 \\u0627\\u0644\\u0631\\u0624\\u0648\\u0633 \\u0627\\u0644\\u0622\\u0644\\u064a\\u0629 \\u0648\\u0627\\u0644\\u064a\\u062f\\u0648\\u064a\\u0629 \\u0648\\u0641\\u0642\\u064b\\u0627 \\u0644\\u0645\\u062a\\u0637\\u0644\\u0628\\u0627\\u062a \\u0627\\u0644\\u0645\\u0648\\u0642\\u0639. \\u0641\\u064a \\u062d\\u064a\\u0646 \\u0623\\u0646 \\u0627\\u0644\\u063a\\u0633\\u064a\\u0644 \\u0627\\u0644\\u0639\\u0643\\u0633\\u064a \\u0647\\u0648 \\u0622\\u0644\\u064a\\u0629 \\u0627\\u0644\\u062a\\u0646\\u0638\\u064a\\u0641 \\u0644\\u0645\\u062b\\u0644 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0645\\u0631\\u0634\\u062d\\u0627\\u062a.<br \\/>\\u062d\\u0644\\u0648\\u0644\\u0646\\u0627<br \\/>&bull; \\u0645\\u0631\\u0634\\u062d \\u0645\\u062d\\u0644\\u064a<br \\/>&bull; \\u0645\\u0635\\u0641\\u064a \\u0627\\u0644\\u0631\\u0645\\u0644<br \\/>&bull; \\u0645\\u0631\\u0634\\u062d \\u0627\\u0644\\u0648\\u0633\\u0627\\u0626\\u0637 \\u0627\\u0644\\u0645\\u062a\\u0639\\u062f\\u062f\\u0629<br \\/>&bull; \\u0641\\u0644\\u062a\\u0631 \\u0645\\u0646\\u0634\\u0637<br \\/>&bull; \\u0645\\u0637\\u0647\\u0631 \\u0645\\u064a\\u0627\\u0647<\\/p>\"}', '2020-05-09 10:23:09', '2020-05-18 03:07:05'),
(2, 1, 100, 2, '1589782594-1589034272-pool.jpg', '{\"en\":\"Pool Maintenance Services\",\"ar\":\"\\u062e\\u062f\\u0645\\u0627\\u062a \\u0635\\u064a\\u0627\\u0646\\u0629 \\u062d\\u0645\\u0627\\u0645\\u0627\\u062a \\u0627\\u0644\\u0633\\u0628\\u0627\\u062d\\u0629\"}', '{\"en\":\"<div class=\\\"card-posted\\\">We keep people safe while swimming<\\/div>\\r\\n<h4 class=\\\"card-title\\\">POOL MAINTENANCE SERVICES<\\/h4>\\r\\n<div class=\\\"card-text\\\">The decision to enter this line of business was based on the management&rsquo;s vision that providing quality water will become of high demand over time particularly given our geographical location. Our experience in Water Treatment spawns from our initial involvement in providing solutions for various facilities requiring Water Treatment Chiller for their systems. The division has since grown to provide various solutions to end users &amp; traders such as Filtration Plants, Waste Water Treatment Plants, Recycling Plants &amp; Desalination Plants.<br \\/>As for Pool maintenance and service:<br \\/>Our service is literally incentive, as we do pay attention to our client swimming pool and related electrical and electromechanical components.<br \\/>The typical application of each swimming pool is consisting of:<br \\/>Swimming pool pumps.<br \\/>Filtration vessels.<br \\/>Circulation piping system and network.<br \\/>Electrical equipments (Underwater lights + Connection box + Cables + Insulation material + Cascade transformer).<br \\/>Pool Side equipments ( Ladders + Ladder Grip + Handrails + shower kit&hellip;.ets).<br \\/>Pool Cleaning equipments (Leaf skimmer + Brushes + floating hoses &hellip;.ets).<br \\/>Chemical Products ( Chlorine + Flocculants + pH stabilizer + Algaecide).<br \\/>Dosing System.<br \\/>UV Disinfection units.<br \\/>Pool Lining ( All type of profiles).<br \\/>Tiles.<br \\/>Temperature control units ( cooling &amp; heating Chillers + Heat exchangers).<br \\/>Features ( Jacuzzi + Sauna + Steam Rooms).<br \\/>Its obligatory to maintain all related components for durability and functionality of the swimming pool to avoid unnecessary accidental injuries while, during or after using.\\r\\n<h3>Our Solutions<\\/h3>\\r\\n<p>&bull; DOSING SYSTEMS &amp; INSTRUMENTATION<br \\/>&bull; FILTERATION &amp; MEDIA<br \\/>&bull; STERILIZATION<br \\/>&bull; UV<br \\/>&bull; COPPER SILVER IONIZAITON<\\/p>\\r\\n<\\/div>\",\"ar\":\"<p>\\u0646\\u062d\\u0627\\u0641\\u0638 \\u0639\\u0644\\u0649 \\u0633\\u0644\\u0627\\u0645\\u0629 \\u0627\\u0644\\u0646\\u0627\\u0633 \\u0623\\u062b\\u0646\\u0627\\u0621 \\u0627\\u0644\\u0633\\u0628\\u0627\\u062d\\u0629<br \\/>\\u062e\\u062f\\u0645\\u0627\\u062a \\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0645\\u0633\\u0627\\u0628\\u062d<br \\/>\\u0627\\u0633\\u062a\\u0646\\u062f \\u0642\\u0631\\u0627\\u0631 \\u062f\\u062e\\u0648\\u0644 \\u0647\\u0630\\u0627 \\u0627\\u0644\\u0646\\u0648\\u0639 \\u0645\\u0646 \\u0627\\u0644\\u0623\\u0639\\u0645\\u0627\\u0644 \\u0625\\u0644\\u0649 \\u0631\\u0624\\u064a\\u0629 \\u0627\\u0644\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0628\\u0623\\u0646 \\u062a\\u0648\\u0641\\u064a\\u0631 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0639\\u0627\\u0644\\u064a\\u0629 \\u0627\\u0644\\u062c\\u0648\\u062f\\u0629 \\u0633\\u064a\\u0635\\u0628\\u062d \\u0637\\u0644\\u0628\\u064b\\u0627 \\u0645\\u0631\\u062a\\u0641\\u0639\\u064b\\u0627 \\u0628\\u0645\\u0631\\u0648\\u0631 \\u0627\\u0644\\u0648\\u0642\\u062a \\u062e\\u0627\\u0635\\u0629\\u064b \\u0646\\u0638\\u0631\\u064b\\u0627 \\u0644\\u0645\\u0648\\u0642\\u0639\\u0646\\u0627 \\u0627\\u0644\\u062c\\u063a\\u0631\\u0627\\u0641\\u064a. \\u062a\\u0646\\u0628\\u0639 \\u062e\\u0628\\u0631\\u062a\\u0646\\u0627 \\u0641\\u064a \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0645\\u0646 \\u0645\\u0634\\u0627\\u0631\\u0643\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0623\\u0648\\u0644\\u064a\\u0629 \\u0641\\u064a \\u062a\\u0648\\u0641\\u064a\\u0631 \\u062d\\u0644\\u0648\\u0644 \\u0644\\u0645\\u062e\\u062a\\u0644\\u0641 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0627\\u0644\\u062a\\u064a \\u062a\\u062a\\u0637\\u0644\\u0628 \\u0645\\u0628\\u0631\\u062f \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0644\\u0623\\u0646\\u0638\\u0645\\u062a\\u0647\\u0627. \\u0646\\u0645\\u0627 \\u0627\\u0644\\u0642\\u0633\\u0645 \\u0645\\u0646\\u0630 \\u0630\\u0644\\u0643 \\u0627\\u0644\\u062d\\u064a\\u0646 \\u0644\\u062a\\u0642\\u062f\\u064a\\u0645 \\u062d\\u0644\\u0648\\u0644 \\u0645\\u062a\\u0646\\u0648\\u0639\\u0629 \\u0644\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645\\u064a\\u0646 \\u0648\\u0627\\u0644\\u062a\\u062c\\u0627\\u0631 \\u0627\\u0644\\u0646\\u0647\\u0627\\u0626\\u064a\\u064a\\u0646 \\u0645\\u062b\\u0644 \\u0645\\u062d\\u0637\\u0627\\u062a \\u0627\\u0644\\u062a\\u0631\\u0634\\u064a\\u062d \\u0648\\u0645\\u062d\\u0637\\u0627\\u062a \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0645\\u064a\\u0627\\u0647 \\u0627\\u0644\\u0635\\u0631\\u0641 \\u0627\\u0644\\u0635\\u062d\\u064a \\u0648\\u0645\\u062d\\u0637\\u0627\\u062a \\u0625\\u0639\\u0627\\u062f\\u0629 \\u0627\\u0644\\u062a\\u062f\\u0648\\u064a\\u0631 \\u0648\\u0645\\u062d\\u0637\\u0627\\u062a \\u062a\\u062d\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647.<br \\/>\\u0623\\u0645\\u0627 \\u0628\\u062e\\u0635\\u0648\\u0635 \\u0635\\u064a\\u0627\\u0646\\u0629 \\u0648\\u062e\\u062f\\u0645\\u0629 \\u062d\\u0645\\u0627\\u0645\\u0627\\u062a \\u0627\\u0644\\u0633\\u0628\\u0627\\u062d\\u0629:<br \\/>\\u062e\\u062f\\u0645\\u062a\\u0646\\u0627 \\u062d\\u0627\\u0641\\u0632 \\u062d\\u0631\\u0641\\u064a\\u064b\\u0627 \\u060c \\u062d\\u064a\\u062b \\u0646\\u0648\\u0644\\u064a \\u0627\\u0647\\u062a\\u0645\\u0627\\u0645\\u064b\\u0627 \\u0644\\u062d\\u0645\\u0627\\u0645 \\u0627\\u0644\\u0633\\u0628\\u0627\\u062d\\u0629 \\u0627\\u0644\\u062e\\u0627\\u0635 \\u0628\\u0646\\u0627 \\u0648\\u0627\\u0644\\u0645\\u0643\\u0648\\u0646\\u0627\\u062a \\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0626\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0643\\u0647\\u0631\\u0648\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629 \\u0630\\u0627\\u062a \\u0627\\u0644\\u0635\\u0644\\u0629.<br \\/>\\u064a\\u062a\\u0643\\u0648\\u0646 \\u0627\\u0644\\u062a\\u0637\\u0628\\u064a\\u0642 \\u0627\\u0644\\u0646\\u0645\\u0648\\u0630\\u062c\\u064a \\u0644\\u0643\\u0644 \\u062d\\u0645\\u0627\\u0645 \\u0633\\u0628\\u0627\\u062d\\u0629 \\u0645\\u0646:<br \\/>\\u0645\\u0636\\u062e\\u0627\\u062a \\u062d\\u0645\\u0627\\u0645\\u0627\\u062a \\u0627\\u0644\\u0633\\u0628\\u0627\\u062d\\u0629.<br \\/>\\u0623\\u0648\\u0639\\u064a\\u0629 \\u0627\\u0644\\u062a\\u0631\\u0634\\u064a\\u062d.<br \\/>\\u0634\\u0628\\u0643\\u0629 \\u0648\\u0646\\u0638\\u0627\\u0645 \\u0623\\u0646\\u0627\\u0628\\u064a\\u0628 \\u0627\\u0644\\u062a\\u062f\\u0648\\u064a\\u0631.<br \\/>\\u0627\\u0644\\u0645\\u0639\\u062f\\u0627\\u062a \\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0626\\u064a\\u0629 (\\u0627\\u0636\\u0648\\u0627\\u0621 \\u062a\\u062d\\u062a \\u0627\\u0644\\u0645\\u0627\\u0621 + \\u0635\\u0646\\u062f\\u0648\\u0642 \\u062a\\u0648\\u0635\\u064a\\u0644 + \\u0643\\u0627\\u0628\\u0644\\u0627\\u062a + \\u0645\\u0648\\u0627\\u062f \\u0639\\u0627\\u0632\\u0644\\u0629 + \\u0645\\u062d\\u0648\\u0644 \\u0634\\u0644\\u0627\\u0644).<br \\/>\\u0645\\u0639\\u062f\\u0627\\u062a \\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0628\\u0631\\u0643\\u0629 (\\u0633\\u0644\\u0627\\u0644\\u0645 + \\u0642\\u0628\\u0636\\u0629 \\u0633\\u0644\\u0645 + \\u062f\\u0631\\u0627\\u0628\\u0632\\u064a\\u0646 + \\u0639\\u062f\\u0629 \\u062f\\u0634 .\\u0627\\u0644\\u062e).<br \\/>\\u0645\\u0639\\u062f\\u0627\\u062a \\u062a\\u0646\\u0638\\u064a\\u0641 \\u062d\\u0645\\u0627\\u0645\\u0627\\u062a \\u0627\\u0644\\u0633\\u0628\\u0627\\u062d\\u0629 (\\u0645\\u0642\\u0634\\u062f\\u0629 \\u0627\\u0644\\u0623\\u0648\\u0631\\u0627\\u0642 + \\u0627\\u0644\\u0641\\u0631\\u0634 + \\u0627\\u0644\\u062e\\u0631\\u0627\\u0637\\u064a\\u0645 \\u0627\\u0644\\u0639\\u0627\\u0626\\u0645\\u0629 ..\\u0627\\u0644\\u062e).<br \\/>\\u0627\\u0644\\u0645\\u0646\\u062a\\u062c\\u0627\\u062a \\u0627\\u0644\\u0643\\u064a\\u0645\\u0627\\u0648\\u064a\\u0629 (\\u0627\\u0644\\u0643\\u0644\\u0648\\u0631 + \\u0645\\u0648\\u0627\\u062f \\u0627\\u0644\\u062a\\u0631\\u0633\\u064a\\u0628 + \\u0645\\u062b\\u0628\\u062a \\u0627\\u0644\\u0631\\u0642\\u0645 \\u0627\\u0644\\u0647\\u064a\\u062f\\u0631\\u0648\\u062c\\u064a\\u0646\\u064a + \\u0627\\u0644\\u062c\\u0627\\u064a\\u062f).<br \\/>\\u0646\\u0638\\u0627\\u0645 \\u0627\\u0644\\u062c\\u0631\\u0639\\u0627\\u062a.<br \\/>\\u0648\\u062d\\u062f\\u0627\\u062a \\u062a\\u0639\\u0642\\u064a\\u0645 \\u0628\\u0627\\u0644\\u0623\\u0634\\u0639\\u0629 \\u0641\\u0648\\u0642 \\u0627\\u0644\\u0628\\u0646\\u0641\\u0633\\u062c\\u064a\\u0629.<br \\/>\\u0628\\u0637\\u0627\\u0646\\u0629 \\u062d\\u0645\\u0627\\u0645 \\u0627\\u0644\\u0633\\u0628\\u0627\\u062d\\u0629 (\\u062c\\u0645\\u064a\\u0639 \\u0623\\u0646\\u0648\\u0627\\u0639 \\u0627\\u0644\\u0645\\u0644\\u0641\\u0627\\u062a \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629).<br \\/>\\u0627\\u0644\\u0628\\u0644\\u0627\\u0637.<br \\/>\\u0648\\u062d\\u062f\\u0627\\u062a \\u0627\\u0644\\u062a\\u062d\\u0643\\u0645 \\u0641\\u064a \\u062f\\u0631\\u062c\\u0629 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0631\\u0629 (\\u0645\\u0628\\u0631\\u062f\\u0627\\u062a \\u0627\\u0644\\u062a\\u0628\\u0631\\u064a\\u062f \\u0648\\u0627\\u0644\\u062a\\u062f\\u0641\\u0626\\u0629 + \\u0627\\u0644\\u0645\\u0628\\u0627\\u062f\\u0644\\u0627\\u062a \\u0627\\u0644\\u062d\\u0631\\u0627\\u0631\\u064a\\u0629).<br \\/>\\u0627\\u0644\\u0645\\u064a\\u0632\\u0627\\u062a (\\u062c\\u0627\\u0643\\u0648\\u0632\\u064a + \\u0633\\u0627\\u0648\\u0646\\u0627 + \\u063a\\u0631\\u0641 \\u0628\\u062e\\u0627\\u0631).<br \\/>\\u064a\\u062c\\u0628 \\u0627\\u0644\\u062d\\u0641\\u0627\\u0638 \\u0639\\u0644\\u0649 \\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u0645\\u0643\\u0648\\u0646\\u0627\\u062a \\u0630\\u0627\\u062a \\u0627\\u0644\\u0635\\u0644\\u0629 \\u0644\\u0645\\u062a\\u0627\\u0646\\u0629 \\u0648\\u0648\\u0638\\u064a\\u0641\\u0629 \\u062d\\u0648\\u0636 \\u0627\\u0644\\u0633\\u0628\\u0627\\u062d\\u0629 \\u0644\\u062a\\u062c\\u0646\\u0628 \\u0627\\u0644\\u0625\\u0635\\u0627\\u0628\\u0627\\u062a \\u0627\\u0644\\u0639\\u0631\\u0636\\u064a\\u0629 \\u063a\\u064a\\u0631 \\u0627\\u0644\\u0636\\u0631\\u0648\\u0631\\u064a\\u0629 \\u0623\\u062b\\u0646\\u0627\\u0621 \\u0623\\u0648 \\u0623\\u062b\\u0646\\u0627\\u0621 \\u0623\\u0648 \\u0628\\u0639\\u062f \\u0627\\u0644\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645.<br \\/>\\u062d\\u0644\\u0648\\u0644\\u0646\\u0627<br \\/>&bull; \\u0623\\u0646\\u0638\\u0645\\u0629 \\u0627\\u0644\\u062c\\u0631\\u0639\\u0627\\u062a \\u0648\\u0627\\u0644\\u0623\\u062f\\u0648\\u0627\\u062a<br \\/>&bull; \\u0627\\u0644\\u062a\\u0635\\u0641\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0648\\u0633\\u0627\\u0626\\u0637<br \\/>&bull; \\u0627\\u0644\\u062a\\u0639\\u0642\\u064a\\u0645<br \\/>&bull; \\u0627\\u0644\\u0623\\u0634\\u0639\\u0629 \\u0641\\u0648\\u0642 \\u0627\\u0644\\u0628\\u0646\\u0641\\u0633\\u062c\\u064a\\u0629<br \\/>&bull; COPPER SILVER IONIZAITON<\\/p>\"}', '2020-05-09 10:24:32', '2020-05-18 02:16:34'),
(3, 1, 200, 3, '1589782604-1589034360-plants.jpg', '{\"en\":\"Water Treatment Plants\",\"ar\":\"\\u0645\\u062d\\u0637\\u0627\\u062a \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647\"}', '{\"en\":\"<div class=\\\"card-posted\\\">The decision to enter this line of business was based on the management&rsquo;s vision that providing quality water will become of high demand over time particularly given our geographical location. Our experience in Water Treatment spawns from our initial involvement in providing solutions for various facilities requiring Water Treatment Chiller for their systems. The division has since grown to provide various solutions to end users &amp; traders such as Filtration Plants, Waste Water Treatment Plants, Recycling Plants &amp; Desalination Plants.<\\/div>\\r\\n<div class=\\\"card-text\\\">\\r\\n<h3>Our Solutions<\\/h3>\\r\\n<p>&bull;GREY WATER RECYCLING<br \\/>&bull; CAR WASH RECYCLING<br \\/>&bull;WASTE WATER TREATMENT<br \\/>&bull; REVERSE OSMOSIS \\/ DESALINATION<\\/p>\\r\\n<\\/div>\",\"ar\":\"<p style=\\\"text-align: right;\\\">\\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0627\\u0644\\u0646\\u0638\\u064a\\u0641\\u0629 \\u0647\\u064a \\u0645\\u0641\\u062a\\u0627\\u062d \\u0627\\u0644\\u0645\\u0628\\u0627\\u062f\\u0631\\u0629 \\u0627\\u0644\\u062e\\u0636\\u0631\\u0627\\u0621. \\u0646\\u062d\\u0646 \\u062e\\u0628\\u0631\\u0627\\u0621 \\u0641\\u064a \\u0645\\u0648\\u0627\\u0636\\u064a\\u0639 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0627\\u0644\\u0646\\u0638\\u064a\\u0641\\u0629.<br \\/>\\u0645\\u062d\\u0637\\u0627\\u062a \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647<br \\/>\\u0627\\u0633\\u062a\\u0646\\u062f \\u0642\\u0631\\u0627\\u0631 \\u062f\\u062e\\u0648\\u0644 \\u0647\\u0630\\u0627 \\u0627\\u0644\\u0646\\u0648\\u0639 \\u0645\\u0646 \\u0627\\u0644\\u0623\\u0639\\u0645\\u0627\\u0644 \\u0625\\u0644\\u0649 \\u0631\\u0624\\u064a\\u0629 \\u0627\\u0644\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0628\\u0623\\u0646 \\u062a\\u0648\\u0641\\u064a\\u0631 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0639\\u0627\\u0644\\u064a\\u0629 \\u0627\\u0644\\u062c\\u0648\\u062f\\u0629 \\u0633\\u064a\\u0635\\u0628\\u062d \\u0637\\u0644\\u0628\\u064b\\u0627 \\u0645\\u0631\\u062a\\u0641\\u0639\\u064b\\u0627 \\u0628\\u0645\\u0631\\u0648\\u0631 \\u0627\\u0644\\u0648\\u0642\\u062a \\u062e\\u0627\\u0635\\u0629\\u064b \\u0646\\u0638\\u0631\\u064b\\u0627 \\u0644\\u0645\\u0648\\u0642\\u0639\\u0646\\u0627 \\u0627\\u0644\\u062c\\u063a\\u0631\\u0627\\u0641\\u064a. \\u062a\\u0646\\u0628\\u0639 \\u062e\\u0628\\u0631\\u062a\\u0646\\u0627 \\u0641\\u064a \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0645\\u0646 \\u0645\\u0634\\u0627\\u0631\\u0643\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0623\\u0648\\u0644\\u064a\\u0629 \\u0641\\u064a \\u062a\\u0648\\u0641\\u064a\\u0631 \\u062d\\u0644\\u0648\\u0644 \\u0644\\u0645\\u062e\\u062a\\u0644\\u0641 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642 \\u0627\\u0644\\u062a\\u064a \\u062a\\u062a\\u0637\\u0644\\u0628 \\u0645\\u0628\\u0631\\u062f \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0644\\u0623\\u0646\\u0638\\u0645\\u062a\\u0647\\u0627. \\u0648\\u0642\\u062f \\u0646\\u0645\\u0627 \\u0627\\u0644\\u0642\\u0633\\u0645 \\u0645\\u0646\\u0630 \\u0630\\u0644\\u0643 \\u0627\\u0644\\u062d\\u064a\\u0646 \\u0644\\u062a\\u0642\\u062f\\u064a\\u0645 \\u062d\\u0644\\u0648\\u0644 \\u0645\\u062e\\u062a\\u0644\\u0641\\u0629 \\u0644\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645\\u064a\\u0646 \\u0627\\u0644\\u0646\\u0647\\u0627\\u0626\\u064a\\u064a\\u0646 \\u0648\\u0627\\u0644\\u062a\\u062c\\u0627\\u0631 \\u0645\\u062b\\u0644 \\u0645\\u062d\\u0637\\u0627\\u062a \\u0627\\u0644\\u062a\\u0631\\u0634\\u064a\\u062d \\u0648\\u0645\\u062d\\u0637\\u0627\\u062a \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0645\\u064a\\u0627\\u0647 \\u0627\\u0644\\u0635\\u0631\\u0641 \\u0627\\u0644\\u0635\\u062d\\u064a \\u0648\\u0645\\u062d\\u0637\\u0627\\u062a \\u0625\\u0639\\u0627\\u062f\\u0629 \\u0627\\u0644\\u062a\\u062f\\u0648\\u064a\\u0631 \\u0648\\u0645\\u062d\\u0637\\u0627\\u062a \\u062a\\u062d\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647.<br \\/>\\u062d\\u0644\\u0648\\u0644\\u0646\\u0627<br \\/>&bull; \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u062f\\u0648\\u064a\\u0631 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0627\\u0644\\u0631\\u0645\\u0627\\u062f\\u064a\\u0629<br \\/>&bull; \\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u062f\\u0648\\u064a\\u0631 \\u063a\\u0633\\u064a\\u0644 \\u0627\\u0644\\u0633\\u064a\\u0627\\u0631\\u0627\\u062a<br \\/>&bull;\\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0645\\u064a\\u0627\\u0647 \\u0627\\u0644\\u0635\\u0631\\u0641 \\u0627\\u0644\\u0635\\u062d\\u064a<br \\/>&bull; \\u0639\\u0643\\u0633 \\u0627\\u0644\\u062a\\u0646\\u0627\\u0636\\u062d \\/ \\u0627\\u0644\\u062a\\u062d\\u0644\\u064a\\u0629<\\/p>\"}', '2020-05-09 10:26:00', '2020-05-18 03:04:19'),
(4, 1, 200, 4, '1589782616-1589034449-checmicals.jpg', '{\"en\":\"Water Treatment Chemicals\",\"ar\":\"Water Treatment Chemicals\"}', '{\"en\":\"<div class=\\\"card-posted\\\">We deliver and distribute high performance chemical treatment products and specialty additives that are used successfully around the world in many of the most demanding commercial, municipal and industrial process environments where they help to improve productivity, optimize performance and reduce equipment life-cycle costs. Our full range of scientifically formulated water additives and chemical treatment products includes high performance water treatment chemicals for steam boilers, cooling water systems, cooling towers and closed circuits; wastewater and effluent treatment chemicals, high performance industrial chemicals, reverse osmosis membrane products, eco-friendly biological formulations, advanced polymers and much more. For further details on any of our water treatment products simply connect with our team.<\\/div>\\r\\n<div class=\\\"card-text\\\">\\r\\n<h3>Our Solutions<\\/h3>\\r\\n<p>&bull; Chemical for Chillers<br \\/>&bull; Chemicals for Cooling Towers<br \\/>&bull; Chemicals for Steam Boilers<br \\/>&bull; Chemicals for desalination plants<br \\/>&bull; Chemicals for Swimming Pools<\\/p>\\r\\n<\\/div>\",\"ar\":\"<p style=\\\"text-align: right;\\\">\\u0646\\u062d\\u0646 \\u0646\\u0642\\u062f\\u0645 \\u0648\\u0646\\u0648\\u0632\\u0639 \\u0645\\u0646\\u062a\\u062c\\u0627\\u062a \\u0627\\u0644\\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0643\\u064a\\u0645\\u064a\\u0627\\u0626\\u064a\\u0629 \\u0639\\u0627\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0623\\u062f\\u0627\\u0621 \\u0648\\u0627\\u0644\\u0625\\u0636\\u0627\\u0641\\u0627\\u062a \\u0627\\u0644\\u0645\\u062a\\u062e\\u0635\\u0635\\u0629 \\u0627\\u0644\\u062a\\u064a \\u064a\\u062a\\u0645 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645\\u0647\\u0627 \\u0628\\u0646\\u062c\\u0627\\u062d \\u0641\\u064a \\u062c\\u0645\\u064a\\u0639 \\u0623\\u0646\\u062d\\u0627\\u0621 \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645 \\u0641\\u064a \\u0627\\u0644\\u0639\\u062f\\u064a\\u062f \\u0645\\u0646 \\u0628\\u064a\\u0626\\u0627\\u062a \\u0627\\u0644\\u0639\\u0645\\u0644\\u064a\\u0627\\u062a \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0628\\u0644\\u062f\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0635\\u0646\\u0627\\u0639\\u064a\\u0629 \\u0627\\u0644\\u0623\\u0643\\u062b\\u0631 \\u062a\\u0637\\u0644\\u0628\\u064b\\u0627 \\u062d\\u064a\\u062b \\u062a\\u0633\\u0627\\u0639\\u062f \\u0639\\u0644\\u0649 \\u062a\\u062d\\u0633\\u064a\\u0646 \\u0627\\u0644\\u0625\\u0646\\u062a\\u0627\\u062c\\u064a\\u0629 \\u0648\\u062a\\u062d\\u0633\\u064a\\u0646 \\u0627\\u0644\\u0623\\u062f\\u0627\\u0621 \\u0648\\u062a\\u0642\\u0644\\u064a\\u0644 \\u062a\\u0643\\u0627\\u0644\\u064a\\u0641 \\u062f\\u0648\\u0631\\u0629 \\u062d\\u064a\\u0627\\u0629 \\u0627\\u0644\\u0645\\u0639\\u062f\\u0627\\u062a. \\u062a\\u0634\\u0645\\u0644 \\u0645\\u062c\\u0645\\u0648\\u0639\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0643\\u0627\\u0645\\u0644\\u0629 \\u0645\\u0646 \\u0625\\u0636\\u0627\\u0641\\u0627\\u062a \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0627\\u0644\\u0645\\u0635\\u0646\\u0639\\u0629 \\u0639\\u0644\\u0645\\u064a\\u0627\\u064b \\u0648\\u0645\\u0646\\u062a\\u062c\\u0627\\u062a \\u0627\\u0644\\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0643\\u064a\\u0645\\u064a\\u0627\\u0626\\u064a\\u0629 \\u0645\\u0648\\u0627\\u062f \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0639\\u0627\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0623\\u062f\\u0627\\u0621 \\u0644\\u0644\\u063a\\u0644\\u0627\\u064a\\u0627\\u062a \\u0627\\u0644\\u0628\\u062e\\u0627\\u0631\\u064a\\u0629 \\u0648\\u0623\\u0646\\u0638\\u0645\\u0629 \\u0645\\u064a\\u0627\\u0647 \\u0627\\u0644\\u062a\\u0628\\u0631\\u064a\\u062f \\u0648\\u0623\\u0628\\u0631\\u0627\\u062c \\u0627\\u0644\\u062a\\u0628\\u0631\\u064a\\u062f \\u0648\\u0627\\u0644\\u062f\\u0648\\u0627\\u0626\\u0631 \\u0627\\u0644\\u0645\\u063a\\u0644\\u0642\\u0629 \\u061b \\u0627\\u0644\\u0645\\u0648\\u0627\\u062f \\u0627\\u0644\\u0643\\u064a\\u0645\\u064a\\u0627\\u0626\\u064a\\u0629 \\u0644\\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0627\\u0644\\u0645\\u0633\\u062a\\u0639\\u0645\\u0644\\u0629 \\u0648\\u0627\\u0644\\u0646\\u0641\\u0627\\u064a\\u0627\\u062a \\u0627\\u0644\\u0633\\u0627\\u0626\\u0644\\u0629 \\u060c \\u0627\\u0644\\u0645\\u0648\\u0627\\u062f \\u0627\\u0644\\u0643\\u064a\\u0645\\u064a\\u0627\\u0626\\u064a\\u0629 \\u0627\\u0644\\u0635\\u0646\\u0627\\u0639\\u064a\\u0629 \\u0639\\u0627\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0623\\u062f\\u0627\\u0621 \\u060c \\u0645\\u0646\\u062a\\u062c\\u0627\\u062a \\u063a\\u0634\\u0627\\u0621 \\u0627\\u0644\\u062a\\u0646\\u0627\\u0636\\u062d \\u0627\\u0644\\u0639\\u0643\\u0633\\u064a \\u060c \\u0627\\u0644\\u062a\\u0631\\u0643\\u064a\\u0628\\u0627\\u062a \\u0627\\u0644\\u0628\\u064a\\u0648\\u0644\\u0648\\u062c\\u064a\\u0629 \\u0627\\u0644\\u0635\\u062f\\u064a\\u0642\\u0629 \\u0644\\u0644\\u0628\\u064a\\u0626\\u0629 \\u060c \\u0627\\u0644\\u0628\\u0648\\u0644\\u064a\\u0645\\u0631\\u0627\\u062a \\u0627\\u0644\\u0645\\u062a\\u0642\\u062f\\u0645\\u0629 \\u0648\\u0623\\u0643\\u062b\\u0631 \\u0645\\u0646 \\u0630\\u0644\\u0643 \\u0628\\u0643\\u062b\\u064a\\u0631. \\u0644\\u0645\\u0632\\u064a\\u062f \\u0645\\u0646 \\u0627\\u0644\\u062a\\u0641\\u0627\\u0635\\u064a\\u0644 \\u062d\\u0648\\u0644 \\u0623\\u064a \\u0645\\u0646 \\u0645\\u0646\\u062a\\u062c\\u0627\\u062a \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0644\\u062f\\u064a\\u0646\\u0627 \\u060c \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0628\\u0633\\u0627\\u0637\\u0629 \\u0628\\u0641\\u0631\\u064a\\u0642\\u0646\\u0627.<br \\/>\\u062d\\u0644\\u0648\\u0644\\u0646\\u0627<br \\/>&bull; \\u0645\\u0627\\u062f\\u0629 \\u0643\\u064a\\u0645\\u064a\\u0627\\u0626\\u064a\\u0629 \\u0644\\u0644\\u0645\\u0628\\u0631\\u062f\\u0627\\u062a<br \\/>&bull; \\u0643\\u064a\\u0645\\u0627\\u0648\\u064a\\u0627\\u062a \\u0644\\u0623\\u0628\\u0631\\u0627\\u062c \\u0627\\u0644\\u062a\\u0628\\u0631\\u064a\\u062f<br \\/>&bull; \\u0643\\u064a\\u0645\\u0627\\u0648\\u064a\\u0627\\u062a \\u0627\\u0644\\u0645\\u0631\\u0627\\u062c\\u0644 \\u0627\\u0644\\u0628\\u062e\\u0627\\u0631\\u064a\\u0629<br \\/>&bull; \\u0643\\u064a\\u0645\\u0627\\u0648\\u064a\\u0627\\u062a \\u0644\\u0645\\u062d\\u0637\\u0627\\u062a \\u062a\\u062d\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647<br \\/>&bull; \\u0643\\u064a\\u0645\\u0627\\u0648\\u064a\\u0627\\u062a \\u0644\\u062d\\u0645\\u0627\\u0645\\u0627\\u062a \\u0627\\u0644\\u0633\\u0628\\u0627\\u062d\\u0629<\\/p>\"}', '2020-05-09 10:27:29', '2020-05-18 03:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `is_publish`, `title`, `description`, `footer`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"WHAT PEOPLE SAY?\",\"ar\":\"\\u0645\\u0627\\u0630\\u0627 \\u064a\\u0642\\u0648\\u0644 \\u0627\\u0644\\u0646\\u0627\\u0633\\u061f\"}', '{\"en\":\"<p>When potential customers are researching you online, they\'re getting to know you by way of the content of your website. Understandably, many of them might be skeptical or hesitant to trust you right away.<\\/p>\",\"ar\":\"<p>\\u0639\\u0646\\u062f\\u0645\\u0627 \\u064a\\u0628\\u062d\\u062b \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621 \\u0627\\u0644\\u0645\\u062d\\u062a\\u0645\\u0644\\u0648\\u0646 \\u0639\\u0646\\u0643 \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0625\\u0646\\u062a\\u0631\\u0646\\u062a \\u060c \\u0641\\u0625\\u0646\\u0647\\u0645 \\u064a\\u062a\\u0639\\u0631\\u0641\\u0648\\u0646 \\u0639\\u0644\\u064a\\u0643 \\u0639\\u0646 \\u0637\\u0631\\u064a\\u0642 \\u0645\\u062d\\u062a\\u0648\\u0649 \\u0645\\u0648\\u0642\\u0639 \\u0627\\u0644\\u0648\\u064a\\u0628 \\u0627\\u0644\\u062e\\u0627\\u0635 \\u0628\\u0643. \\u0628\\u0634\\u0643\\u0644 \\u0645\\u0641\\u0647\\u0648\\u0645 \\u060c \\u0642\\u062f \\u064a\\u0643\\u0648\\u0646 \\u0627\\u0644\\u0643\\u062b\\u064a\\u0631 \\u0645\\u0646\\u0647\\u0645 \\u0645\\u062a\\u0634\\u0643\\u0643\\u064a\\u0646 \\u0623\\u0648 \\u0645\\u062a\\u0631\\u062f\\u062f\\u064a\\u0646 \\u0641\\u064a \\u0627\\u0644\\u062b\\u0642\\u0629 \\u0628\\u0643 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0641\\u0648\\u0631.<\\/p>\"}', '{\"en\":\"Siderise Company LLC, Director\",\"ar\":\"\\u0645\\u062f\\u064a\\u0631 \\u0634\\u0631\\u0643\\u0629 Siderise LLC\"}', '2020-05-10 14:14:24', '2020-05-10 14:30:20'),
(2, 1, '{\"en\":\"WHAT PEOPLE SAY?\",\"ar\":\"\\u0645\\u0627\\u0630\\u0627 \\u064a\\u0642\\u0648\\u0644 \\u0627\\u0644\\u0646\\u0627\\u0633\\u061f\"}', '{\"en\":\"<p>Your testimonial page serves as a platform to show off how others have benefited from your product or service, making it a powerful tool for establishing trust and encouraging potential buyers to take action.<\\/p>\",\"ar\":\"<p>\\u062a\\u0639\\u0645\\u0644 \\u0635\\u0641\\u062d\\u062a\\u0643 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0634\\u0647\\u0627\\u062f\\u0629 \\u0643\\u0645\\u0646\\u0635\\u0629 \\u0644\\u0625\\u0638\\u0647\\u0627\\u0631 \\u0643\\u064a\\u0641 \\u0627\\u0633\\u062a\\u0641\\u0627\\u062f \\u0627\\u0644\\u0622\\u062e\\u0631\\u0648\\u0646 \\u0645\\u0646 \\u0645\\u0646\\u062a\\u062c\\u0643 \\u0623\\u0648 \\u062e\\u062f\\u0645\\u062a\\u0643 \\u060c \\u0645\\u0645\\u0627 \\u064a\\u062c\\u0639\\u0644\\u0647\\u0627 \\u0623\\u062f\\u0627\\u0629 \\u0642\\u0648\\u064a\\u0629 \\u0644\\u0628\\u0646\\u0627\\u0621 \\u0627\\u0644\\u062b\\u0642\\u0629 \\u0648\\u062a\\u0634\\u062c\\u064a\\u0639 \\u0627\\u0644\\u0645\\u0634\\u062a\\u0631\\u064a\\u0646 \\u0627\\u0644\\u0645\\u062d\\u062a\\u0645\\u0644\\u064a\\u0646 \\u0639\\u0644\\u0649 \\u0627\\u062a\\u062e\\u0627\\u0630 \\u0625\\u062c\\u0631\\u0627\\u0621\\u0627\\u062a.<\\/p>\"}', '{\"en\":\"LiquiTech Comapny LLC, Chairman\",\"ar\":\"\\u0634\\u0631\\u0643\\u0629 LiquiTech LLC \\u060c \\u0631\\u0626\\u064a\\u0633 \\u0645\\u062c\\u0644\\u0633 \\u0627\\u0644\\u0625\\u062f\\u0627\\u0631\\u0629\"}', '2020-05-10 14:15:53', '2020-05-10 14:15:53'),
(3, 1, '{\"en\":\"WHAT PEOPLE SAY?\",\"ar\":\"\\u0645\\u0627\\u0630\\u0627 \\u064a\\u0642\\u0648\\u0644 \\u0627\\u0644\\u0646\\u0627\\u0633\\u061f\"}', '{\"en\":\"<p>Plus, having a testimonial page serves as yet another indexed page on your website containing content covering product features, pain points, and keywords your marketing team is trying to rank for in search.<\\/p>\",\"ar\":\"<p>\\u0628\\u0627\\u0644\\u0625\\u0636\\u0627\\u0641\\u0629 \\u0625\\u0644\\u0649 \\u0630\\u0644\\u0643 \\u060c \\u0641\\u0625\\u0646 \\u0648\\u062c\\u0648\\u062f \\u0635\\u0641\\u062d\\u0629 \\u0634\\u0647\\u0627\\u062f\\u0629 \\u0628\\u0645\\u062b\\u0627\\u0628\\u0629 \\u0635\\u0641\\u062d\\u0629 \\u0645\\u0641\\u0647\\u0631\\u0633\\u0629 \\u0623\\u062e\\u0631\\u0649 \\u0639\\u0644\\u0649 \\u0645\\u0648\\u0642\\u0639 \\u0627\\u0644\\u0648\\u064a\\u0628 \\u0627\\u0644\\u062e\\u0627\\u0635 \\u0628\\u0643 \\u062a\\u062d\\u062a\\u0648\\u064a \\u0639\\u0644\\u0649 \\u0645\\u062d\\u062a\\u0648\\u0649 \\u064a\\u063a\\u0637\\u064a \\u0645\\u064a\\u0632\\u0627\\u062a \\u0627\\u0644\\u0645\\u0646\\u062a\\u062c \\u0648\\u0646\\u0642\\u0627\\u0637 \\u0627\\u0644\\u0623\\u0644\\u0645 \\u0648\\u0627\\u0644\\u0643\\u0644\\u0645\\u0627\\u062a \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\\u0629 \\u0627\\u0644\\u062a\\u064a \\u064a\\u062d\\u0627\\u0648\\u0644 \\u0641\\u0631\\u064a\\u0642 \\u0627\\u0644\\u062a\\u0633\\u0648\\u064a\\u0642 \\u0627\\u0644\\u062e\\u0627\\u0635 \\u0628\\u0643 \\u062a\\u0631\\u062a\\u064a\\u0628\\u0647\\u0627 \\u0641\\u064a \\u0627\\u0644\\u0628\\u062d\\u062b.<\\/p>\"}', '{\"en\":\"AIR Fire Company LLC, Director\",\"ar\":\"\\u0645\\u062f\\u064a\\u0631 \\u0634\\u0631\\u0643\\u0629 \\u0627\\u064a\\u0631 \\u0641\\u0627\\u064a\\u0631 \\u0630 \\u0645 \\u0645\"}', '2020-05-10 14:17:15', '2020-05-10 14:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_banners`
--

CREATE TABLE `testimonial_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial_banners`
--

INSERT INTO `testimonial_banners` (`id`, `is_publish`, `banner`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '1589791892-1589134929-section-bg-3.jpg', '{\"en\":\"General International Group\",\"ar\":\"\\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629\"}', '2020-05-10 09:46:14', '2020-05-18 04:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `twitter_cards`
--

CREATE TABLE `twitter_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `twit_card` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `twitter_cards`
--

INSERT INTO `twitter_cards` (`id`, `is_publish`, `twit_card`, `created_at`, `updated_at`) VALUES
(2, 0, 'summary_large_image', '2020-03-22 06:37:28', '2020-03-22 07:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `twitter_domain_urls`
--

CREATE TABLE `twitter_domain_urls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `twit_dom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twit_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `twitter_domain_urls`
--

INSERT INTO `twitter_domain_urls` (`id`, `is_publish`, `twit_dom`, `twit_url`, `created_at`, `updated_at`) VALUES
(1, 0, 'www.generalintlgroup.com', 'https://generalintlgroup.com/', '2020-03-22 06:41:16', '2020-03-22 07:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `twitter_site_imgs`
--

CREATE TABLE `twitter_site_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `twit_site` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twit_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `twitter_site_imgs`
--

INSERT INTO `twitter_site_imgs` (`id`, `is_publish`, `twit_site`, `twit_img`, `created_at`, `updated_at`) VALUES
(1, 0, '@GIGroupUAE', 'https://generalintlgroup.com/wp-content/themes/general_international/images/header-logo.png', '2020-03-22 06:40:05', '2020-03-22 07:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `twitter_title_descs`
--

CREATE TABLE `twitter_title_descs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `twit_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twit_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `twitter_title_descs`
--

INSERT INTO `twitter_title_descs` (`id`, `is_publish`, `twit_title`, `twit_desc`, `created_at`, `updated_at`) VALUES
(2, 0, 'General International Group - Life Safety & Security | Water Treatment', 'Life Safety & Security, Life Safety & Security in UAE, Life Safety & Security in Dubai, Life Safety & Security in Abu Dhabi', '2020-03-22 06:37:07', '2020-03-22 07:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `type_facilities`
--

CREATE TABLE `type_facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_facilities`
--

INSERT INTO `type_facilities` (`id`, `is_publish`, `icon`, `title`, `created_at`, `updated_at`) VALUES
(500, 1, '<svg version=\"1.0\" xmlns=\"http://www.w3.org/2000/svg\"                                  width=\"50px\" height=\"50px\" viewBox=\"0 0 278.000000 279.000000\"                                  preserveAspectRatio=\"xMidYMid meet\">                                 <g transform=\"translate(0.000000,279.000000) scale(0.100000,-0.100000)\"                                    fill=\"#32B678\" stroke=\"none\">                                     <path d=\"M1170 2784 c-325 -66 -555 -183 -765 -390 -146 -145 -245 -298 -319 -496 -60 -161 -77 -246 -83 -418 -9 -262 21 -433 118 -652 89 -202 307 -462 490 -585 100 -67 268 -148 359 -172 257 -69 473 -80 695 -35 131 27 158 35 320 106 206 90 466 325 590 532 130 219 186 411 201 696 16 298 -84 611 -281 872 -155 207 -390 383 -626 468 -171 63 -225 71 -459 75 -118 2 -226 1 -240 -1z m450 -59 c213 -33 446 -143 628 -297 198 -169 338 -381 421 -642 37 -114 61 -259 61 -363 0 -83 -23 -273 -45 -368 -17 -73 -114 -284 -166 -360 -19 -28 -43 -68 -54 -89 -48 -92 -261 -284 -412 -373 -128 -75 -354 -149 -532 -174 -158 -22 -407 8 -589 73 -99 34 -262 128 -358 204 -35 28 -109 98 -163 155 -149 157 -230 294 -301 508 -50 147 -64 263 -58 474 6 207 33 318 120 497 184 380 496 637 903 741 99 25 127 28 280 28 102 1 208 -5 265 -14z\"/><path d=\"M1276 2434 c-3 -9 -6 -26 -6 -38 0 -13 -8 -30 -18 -39 -16 -14 -35 -19 -122 -31 -14 -2 -38 -7 -54 -11 -27 -7 -34 -4 -67 35 l-37 43 -22 -21 c-12 -11 -36 -26 -54 -33 -46 -19 -116 -70 -116 -86 0 -8 10 -27 22 -43 l21 -29 -28 -37 c-15 -20 -36 -39 -45 -41 -10 -3 -24 -16 -31 -30 -25 -46 -74 -56 -141 -28 -13 5 -22 -1 -35 -25 -10 -18 -35 -59 -56 -91 -20 -33 -37 -65 -37 -72 0 -7 12 -24 28 -38 48 -46 58 -73 39 -116 -8 -21 -22 -58 -29 -83 -12 -42 -16 -45 -56 -52 -23 -4 -47 -10 -52 -13 -6 -4 -10 -56 -10 -120 l0 -115 28 -5 c38 -8 74 -27 83 -45 17 -34 39 -125 39 -159 -1 -31 -6 -39 -40 -61 -39 -23 -50 -43 -31 -54 5 -3 28 -40 52 -81 47 -82 67 -95 121 -76 29 10 34 9 63 -19 17 -16 36 -30 41 -30 12 0 53 -43 76 -80 15 -23 15 -28 -4 -62 -25 -44 -19 -62 24 -83 18 -8 56 -28 83 -44 28 -16 58 -30 67 -30 9 -1 29 15 44 34 31 41 50 43 120 16 81 -32 89 -34 99 -32 17 4 35 -32 35 -71 l0 -38 110 0 109 0 16 30 c8 16 14 33 13 37 -1 4 1 17 5 28 5 16 17 20 54 22 28 1 70 13 101 29 l53 27 24 -23 c14 -13 27 -31 31 -42 3 -10 14 -18 26 -18 25 0 86 27 113 51 11 9 29 19 40 21 17 3 20 11 19 48 0 25 -3 57 -8 71 -6 22 0 33 56 87 70 69 96 80 143 63 17 -6 37 -11 43 -11 11 0 122 179 122 197 0 5 -10 15 -23 22 -12 6 -30 25 -39 41 -14 24 -15 36 -6 62 6 18 17 41 26 50 8 10 12 27 9 40 -8 32 14 58 65 72 l43 13 3 108 c2 63 -2 112 -8 120 -5 6 -24 12 -41 13 -40 1 -57 16 -65 61 -4 20 -13 48 -20 63 -25 48 -11 113 30 147 24 20 21 31 -35 126 -48 81 -53 86 -78 80 -72 -18 -79 -17 -90 4 -7 12 -18 21 -26 21 -7 0 -30 20 -51 45 -20 25 -43 45 -50 45 -19 0 -9 45 17 82 l19 27 -39 30 c-21 17 -44 31 -50 31 -6 0 -33 14 -59 30 -27 17 -53 30 -57 30 -4 0 -25 -18 -47 -41 -31 -32 -42 -38 -53 -29 -8 7 -19 9 -25 5 -5 -3 -10 -2 -10 4 0 5 -8 10 -17 10 -79 2 -138 23 -129 46 3 8 -2 28 -10 44 l-15 31 -114 0 c-94 0 -114 -3 -119 -16z m239 -238 c28 -13 70 -45 95 -71 25 -25 75 -64 112 -86 175 -103 299 -266 342 -449 22 -93 20 -267 -3 -357 -43 -165 -181 -344 -330 -429 -99 -56 -179 -77 -312 -82 -107 -4 -137 -1 -204 17 -253 70 -442 265 -501 518 -24 105 -15 294 20 393 61 172 169 302 329 394 26 15 61 46 78 68 57 79 117 106 239 107 70 1 94 -3 135 -23z\"/><path d=\"M1314 2166 c-38 -17 -43 -35 -33 -106 4 -30 8 -66 8 -80 1 -37 -16 -5 -24 45 -10 61 -15 75 -30 75 -34 0 -125 -183 -125 -252 0 -34 2 -36 44 -47 25 -6 128 -11 236 -11 108 0 211 5 236 11 41 11 44 14 44 45 0 66 -63 198 -118 248 -21 18 -21 18 -28 -10 -15 -69 -25 -104 -29 -104 -3 0 -2 39 1 88 l6 87 -41 13 c-52 16 -108 15 -147 -2z\"/><path d=\"M1603 1778 c-6 -7 -16 -31 -23 -53 -18 -58 -86 -170 -116 -194 -19 -15 -41 -21 -77 -21 -47 0 -53 3 -91 45 -40 44 -81 113 -110 188 -20 50 -36 47 -36 -7 0 -33 11 -66 40 -122 22 -44 38 -85 35 -95 -8 -26 -37 -41 -181 -98 -72 -28 -138 -57 -147 -64 -23 -16 -46 -102 -53 -197 -8 -93 1 -113 88 -200 117 -117 217 -166 384 -189 84 -12 94 -8 94 35 0 23 -17 34 -54 34 -13 0 -37 5 -55 11 -29 10 -31 14 -31 62 0 47 3 53 45 93 25 23 61 49 80 58 19 10 35 21 35 26 0 6 -78 10 -196 10 -183 0 -196 1 -188 18 4 9 10 78 13 152 l6 134 47 15 c27 8 50 12 53 9 3 -3 9 -67 12 -142 l6 -136 124 0 c143 0 147 3 120 81 -9 25 -17 54 -17 64 0 19 31 75 41 75 3 0 10 -19 15 -42 8 -37 13 -43 36 -46 23 -3 28 1 33 25 13 57 15 60 31 39 21 -29 17 -68 -11 -117 -14 -24 -25 -54 -25 -67 0 -20 4 -23 33 -20 l32 3 11 155 10 155 -33 32 c-18 18 -33 36 -33 42 0 5 18 47 40 92 28 57 40 96 40 126 0 43 -9 54 -27 31z\"/><path d=\"M1630 1445 c0 -3 20 -14 45 -25 l45 -19 0 -88 c0 -48 5 -166 12 -260 9 -140 14 -173 26 -173 20 0 142 127 167 173 19 35 19 40 3 148 -11 75 -23 121 -36 138 -28 38 -262 132 -262 106z\"/><path d=\"M1523 1096 c-10 -31 -8 -35 13 -45 36 -16 33 -91 -6 -166 -16 -31 -30 -66 -30 -77 0 -19 4 -20 54 -15 30 3 75 15 100 26 l46 20 0 129 0 129 -72 8 c-40 3 -78 11 -84 16 -7 6 -14 -3 -21 -25z\"/></g>                             </svg>', '{\"en\":\"Facilities Management\",\"ar\":\"\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0627\\u0641\\u0642\"}', '2020-05-07 07:01:24', '2020-05-07 07:01:24'),
(600, 1, '<svg version=\"1.0\" xmlns=\"http://www.w3.org/2000/svg\"                                  width=\"50px\" height=\"50px\" viewBox=\"0 0 981.000000 981.000000\"                                  preserveAspectRatio=\"xMidYMid meet\">                                 <g transform=\"translate(0.000000,981.000000) scale(0.100000,-0.100000)\"                                    fill=\"#32B678\" stroke=\"none\">                                     <path d=\"M4605 9794 c-636 -43 -1242 -203 -1810 -478 -527 -256 -961 -563 -1360 -961 -706 -705 -1188 -1642 -1354 -2635 -54 -318 -66 -472 -65 -830 1 -512 51 -878 185 -1346 665 -2321 2932 -3810 5336 -3504 830 106 1645 440 2339 957 968 723 1659 1866 1863 3083 53 317 66 473 65 825 0 423 -31 702 -119 1087 -178 775 -566 1546 -1061 2108 -114 130 -440 453 -554 550 -437 372 -1035 705 -1605 895 -358 119 -672 187 -1065 231 -130 14 -665 26 -795 18z m810 -773 c484 -66 896 -189 1310 -391 1177 -575 2012 -1676 2250 -2965 50 -272 60 -397 59 -750 0 -364 -14 -516 -74 -814 -333 -1650 -1651 -2942 -3310 -3245 -410 -75 -885 -86 -1295 -30 -1246 171 -2343 896 -2987 1973 -309 518 -487 1043 -565 1671 -21 171 -24 680 -5 850 152 1353 858 2464 2001 3149 515 308 1144 512 1761 571 169 15 684 4 855 -19z\"/><path d=\"M4691 7920 l-304 -5 -60 -220 c-32 -121 -218 -805 -413 -1519 -194 -715 -352 -1301 -351 -1303 2 -1 223 -7 492 -12 447 -9 535 -14 535 -28 0 -3 -198 -647 -439 -1432 -242 -784 -446 -1449 -454 -1478 l-16 -52 257 6 c141 3 260 8 264 12 3 3 324 638 713 1411 389 773 819 1626 956 1897 l249 491 -309 4 c-204 2 -314 7 -321 14 -8 8 1 43 30 125 161 447 740 2082 740 2090 0 9 -1001 9 -1569 -1z\"/></g></svg>', '{\"en\":\"Electrical & Soft\",\"ar\":\"\\u0627\\u0644\\u0643\\u0647\\u0631\\u0628\\u0627\\u0626\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0646\\u0627\\u0639\\u0645\\u0629\"}', '2020-05-07 07:03:39', '2020-05-07 07:03:39'),
(700, 1, '<svg version=\"1.0\" xmlns=\"http://www.w3.org/2000/svg\"                                  width=\"50px\" height=\"50px\" viewBox=\"0 0 256.000000 256.000000\"                                  preserveAspectRatio=\"xMidYMid meet\">                                 <g transform=\"translate(0.000000,256.000000) scale(0.100000,-0.100000)\"                                    fill=\"#32B678\" stroke=\"none\">                                     <path d=\"M1020 2552 c18 -3 -1 -12 -64 -28 -48 -13 -116 -36 -150 -50 -33 -15 -71 -27 -83 -28 -11 0 -19 -5 -15 -10 3 -5 -2 -6 -12 -3 -9 4 -15 3 -12 -2 4 -5 -20 -24 -51 -43 -73 -42 -78 -44 -68 -27 5 8 4 11 -1 6 -5 -5 -9 -12 -9 -17 0 -8 -91 -80 -101 -80 -3 0 -2 6 2 13 11 18 -87 -74 -143 -135 -27 -28 -42 -48 -35 -44 6 4 12 5 12 2 0 -10 -72 -101 -80 -101 -5 0 -12 -4 -17 -9 -5 -5 -2 -6 6 -1 17 10 15 5 -27 -68 -19 -31 -38 -55 -43 -51 -5 3 -6 -3 -2 -12 3 -10 2 -15 -3 -12 -5 4 -10 -4 -10 -15 -1 -12 -13 -50 -28 -83 -14 -34 -37 -102 -50 -150 -16 -63 -25 -82 -28 -64 -2 14 -4 -103 -4 -260 0 -157 2 -274 4 -260 3 18 12 -1 28 -64 13 -48 36 -116 50 -150 15 -33 27 -71 28 -83 0 -11 5 -19 10 -15 5 3 6 -2 3 -12 -4 -9 -3 -15 2 -12 5 4 24 -20 43 -51 42 -73 44 -78 27 -68 -8 5 -11 4 -6 -1 5 -5 12 -9 17 -9 8 0 80 -91 80 -101 0 -3 -6 -2 -12 2 -48 28 179 -190 237 -228 17 -11 12 -5 -10 13 -22 18 -80 74 -130 123 l-90 90 96 -91 c52 -50 114 -103 137 -118 23 -15 39 -31 37 -36 -3 -4 0 -11 6 -15 8 -5 9 -3 4 6 -10 16 -4 13 68 -28 31 -19 55 -38 51 -43 -3 -5 3 -6 12 -2 10 3 15 2 12 -3 -4 -5 4 -10 15 -10 12 -1 50 -13 83 -28 34 -14 102 -37 150 -50 63 -16 82 -25 64 -28 -14 -2 103 -4 260 -4 157 0 274 2 260 4 -18 3 1 12 64 28 48 13 116 36 150 50 33 15 71 27 83 28 11 0 19 5 15 10 -3 5 2 6 12 3 9 -4 15 -3 12 2 -4 5 20 24 51 43 73 42 78 44 68 27 -5 -8 -4 -11 1 -6 5 5 9 12 9 17 0 8 91 80 101 80 3 0 2 -6 -2 -12 -11 -19 87 73 143 134 27 28 42 48 36 44 -7 -4 -13 -5 -13 -2 0 10 72 101 80 101 5 0 12 4 17 9 5 5 2 6 -6 1 -17 -10 -15 -5 27 68 19 31 38 55 43 51 5 -3 6 3 2 12 -3 10 -2 15 3 12 5 -4 10 4 10 15 1 12 13 50 28 83 14 34 37 102 50 150 16 63 25 82 28 64 2 -14 4 103 4 260 0 157 -2 274 -4 260 -3 -18 -12 1 -28 64 -13 48 -36 116 -50 150 -15 33 -27 71 -28 83 0 11 -5 19 -10 15 -5 -3 -6 2 -3 12 4 9 3 15 -2 12 -5 -4 -24 20 -43 51 -42 73 -44 78 -27 68 8 -5 11 -4 6 1 -5 5 -12 9 -17 9 -8 0 -80 91 -80 101 0 3 6 2 13 -2 6 -4 -9 16 -36 44 -56 61 -154 153 -143 135 4 -7 5 -13 2 -13 -10 0 -101 72 -101 80 0 5 -4 12 -9 17 -5 5 -6 2 -1 -6 10 -17 5 -15 -68 27 -31 19 -55 38 -51 43 3 5 -3 6 -12 2 -10 -3 -15 -2 -12 3 4 5 -4 10 -15 10 -12 1 -50 13 -83 28 -34 14 -102 37 -150 50 -63 16 -82 25 -64 28 14 2 -103 4 -260 4 -157 0 -274 -2 -260 -4z m505 -77 c247 -54 441 -159 616 -334 177 -177 282 -372 336 -625 24 -111 24 -361 0 -472 -54 -253 -159 -448 -336 -625 -177 -177 -372 -282 -625 -336 -111 -24 -361 -24 -472 0 -253 54 -448 159 -625 336 -177 177 -282 372 -336 625 -24 111 -24 361 0 472 54 253 159 448 336 625 191 190 407 301 676 345 100 17 333 11 430 -11z\"/><path d=\"M1112 1980 l3 -160 -22 0 c-22 0 -23 3 -23 99 0 102 -7 120 -37 101 -15 -9 -14 -10 7 -5 22 5 23 4 7 -5 -10 -7 -25 -9 -33 -6 -10 4 -12 2 -8 -6 5 -8 2 -9 -10 -5 -9 4 -15 3 -12 -2 4 -5 -15 -21 -41 -36 -74 -44 -165 -144 -211 -233 -36 -68 -71 -177 -72 -219 0 -10 131 -14 618 -15 l617 -3 -615 -2 c-377 -2 -618 -7 -624 -13 -6 -6 216 -10 618 -10 l627 0 -7 47 c-3 27 -15 76 -26 111 -10 34 -16 68 -12 74 5 7 3 8 -6 3 -10 -6 -12 -4 -7 9 5 11 3 15 -5 10 -7 -5 -9 -2 -6 8 4 8 -2 29 -13 47 -27 44 -33 39 -7 -6 26 -46 18 -41 -16 10 -29 42 -32 52 -13 41 27 -17 -48 64 -101 108 -60 51 -166 112 -184 106 -7 -3 -10 -39 -9 -106 2 -100 2 -102 -21 -102 l-23 0 3 160 3 160 -76 0 -75 0 0 -80 c0 -73 -2 -80 -20 -80 -18 0 -20 7 -20 80 l0 80 -75 0 -76 0 3 -160z\"/><path d=\"M538 1443 c-13 -16 -13 -152 -1 -164 13 -13 1473 -13 1486 0 12 12 12 150 0 162 -15 15 -1472 17 -1485 2z\"/><path d=\"M530 1105 l0 -75 74 0 c69 0 75 -2 81 -22 4 -13 21 -54 38 -91 l31 -68 -55 -52 -54 -52 48 50 c47 51 55 69 37 80 -6 3 -7 -1 -4 -10 5 -11 -10 -34 -47 -72 -30 -31 -48 -52 -40 -48 10 6 13 4 9 -7 -4 -10 27 -47 95 -114 l102 -99 -100 103 c-55 56 -95 102 -90 102 6 0 50 -40 99 -89 54 -54 97 -89 108 -88 10 1 35 19 56 42 l37 40 -45 -40 -45 -40 44 47 43 46 62 -29 c33 -16 76 -32 94 -35 l32 -6 0 -79 0 -79 140 0 140 0 0 79 0 79 33 6 c17 3 60 19 93 35 l62 29 43 -46 44 -47 -45 40 -45 40 37 -40 c21 -23 46 -41 56 -42 11 -1 54 34 108 88 49 49 93 89 99 89 5 0 -35 -46 -90 -102 l-100 -103 102 99 c68 67 99 104 95 114 -4 11 -1 13 9 7 8 -4 -10 17 -40 48 -37 38 -52 61 -47 72 3 9 2 13 -4 10 -18 -11 -10 -29 37 -80 l48 -50 -54 52 -55 52 31 68 c17 37 34 78 38 91 6 20 12 22 81 22 l74 0 0 75 0 75 -189 0 -190 0 -7 -47 c-18 -127 -89 -229 -198 -286 -57 -30 -67 -32 -166 -32 -99 0 -109 2 -166 32 -109 57 -180 159 -198 286 l-7 47 -190 0 -189 0 0 -75z\"/></g></svg>', '{\"en\":\"Civil & Minor Ancillary Maintenance\",\"ar\":\"\\u0627\\u0644\\u0635\\u064a\\u0627\\u0646\\u0629 \\u0627\\u0644\\u0645\\u062f\\u0646\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0641\\u0631\\u0639\\u064a\\u0629\"}', '2020-05-07 07:04:38', '2020-05-07 07:04:38'),
(800, 1, '<svg version=\"1.0\" xmlns=\"http://www.w3.org/2000/svg\"                                  width=\"50px\" height=\"50px\" viewBox=\"0 0 350.000000 350.000000\"                                  preserveAspectRatio=\"xMidYMid meet\">                                 <g transform=\"translate(0.000000,350.000000) scale(0.100000,-0.100000)\"                                    fill=\"#32B678\" stroke=\"none\">                                     <path d=\"M1469 3485 c-682 -111 -1222 -587 -1412 -1245 -49 -170 -60 -268 -54 -522 4 -205 8 -246 30 -338 134 -554 509 -1000 1021 -1215 114 -48 238 -85 371 -112 128 -26 501 -26 630 0 560 111 1006 446 1254 944 271 543 232 1207 -99 1713 -260 396 -646 659 -1115 760 -130 28 -492 37 -626 15z m516 -190 c328 -52 623 -203 860 -440 224 -225 373 -508 431 -820 28 -147 26 -432 -4 -571 -102 -476 -396 -861 -824 -1079 -459 -233 -968 -231 -1428 6 -424 218 -722 618 -816 1094 -26 129 -26 414 0 550 58 312 208 596 431 820 272 272 594 418 1010 459 65 6 243 -4 340 -19z\"/><path d=\"M1071 2802 c-14 -4 -26 -12 -28 -17 -2 -6 55 -69 127 -140 71 -71 130 -138 130 -148 0 -74 -153 -227 -227 -227 -10 0 -77 59 -150 132 -107 107 -135 130 -145 120 -9 -9 -13 -49 -13 -130 0 -113 1 -120 33 -185 42 -85 113 -156 197 -198 56 -27 80 -33 173 -39 92 -6 117 -12 160 -35 37 -20 190 -167 539 -516 533 -534 525 -527 626 -516 137 17 214 158 156 287 -15 34 -140 166 -513 540 -272 272 -502 510 -511 529 -10 20 -20 75 -25 142 -6 89 -13 119 -38 173 -40 86 -113 158 -200 199 -59 28 -78 32 -167 34 -55 1 -111 -1 -124 -5z m1436 -1634 c33 -30 31 -80 -3 -107 -43 -34 -86 -26 -110 20 -39 76 51 145 113 87z\"/><path d=\"M2485 2592 c-93 -54 -100 -61 -97 -87 3 -25 -23 -55 -240 -272 l-243 -243 48 -47 49 -48 241 248 c215 219 246 247 273 247 28 0 38 9 85 77 30 42 58 83 63 91 6 10 -3 26 -30 53 -21 21 -41 39 -44 39 -3 0 -50 -26 -105 -58z\"/><path d=\"M1410 1645 c-100 -62 -114 -75 -310 -291 -113 -125 -210 -236 -217 -248 -19 -33 -15 -102 8 -148 28 -55 104 -129 160 -156 30 -15 64 -22 102 -22 71 0 62 -7 293 260 188 219 197 231 264 358 l44 83 -114 114 c-63 63 -117 115 -120 115 -3 0 -52 -30 -110 -65z\"/></g></svg>', '{\"en\":\"HVAC & Plumbing\",\"ar\":\"\\u0627\\u0644\\u062a\\u0643\\u064a\\u064a\\u0641 \\u0648\\u0627\\u0644\\u0633\\u0628\\u0627\\u0643\\u0629\"}', '2020-05-07 07:04:09', '2020-05-07 07:04:09');

-- --------------------------------------------------------

--
-- Table structure for table `type_fires`
--

CREATE TABLE `type_fires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_fires`
--

INSERT INTO `type_fires` (`id`, `is_publish`, `icon`, `title`, `created_at`, `updated_at`) VALUES
(100, 1, '<svg version=\"1.1\" id=\"Layer_1\" width=\"50px\" height=\"50px\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"                                  viewBox=\"0 0 511.993 511.993\" style=\"enable-background:new 0 0 511.993 511.993;\" xml:space=\"preserve\"> <circle style=\"fill:#3C3B41;\" cx=\"255.996\" cy=\"255.996\" r=\"255.996\"/>                                 <path style=\"fill:#171719;\" d=\"M505.507,313.53L304.658,112.68c-18.67-19.219-43.392-39.142-76.095-58.704 	c6.562,13.565,10.49,30.678,10.49,49.298c0,44.002-21.87,79.672-48.848,79.672c-1.853,0-3.678-0.178-5.477-0.506l-35.437-35.659 	c-8.095,13.814-48.86,87.805-41.322,164.745c3.727,38.042,20.407,65.591,42.408,86.46l113.868,113.868 	C382.181,508.122,479.993,424.632,505.507,313.53z\"/>                                 <path style=\"fill:#e22822;\" d=\"M373.975,197.153c0,0,4.212,32.658-13.57,45.761c0,0,19.576-98.368-131.842-188.937 	c6.562,13.565,10.49,30.678,10.49,49.298c0,44.002-21.87,79.672-48.848,79.672c-17.132,0-32.195-14.396-40.913-36.165 	c-8.095,13.814-48.861,87.805-41.322,164.745c9.109,92.981,95.575,123.305,148.064,146.497c0,0,88.293-22.737,128.707-90.326 	C422.654,304.284,400.352,223.53,373.975,197.153z\"/>                                 <path style=\"fill:#FF8800;\" d=\"M373.975,197.153c0,0,4.212,32.658-13.57,45.761c0,0,17.102-85.966-104.373-171.161v386.271 	c0,0,88.293-22.737,128.707-90.326C422.654,304.284,400.352,223.53,373.975,197.153z\"/>                                 <path style=\"fill:#FFE670;\" d=\"M256.031,195.678c0,0,69.109,60.017,52.491,129.434c0,0,28.697-16.939,40.92-49.336 	c0,0,14.284,119.429-93.41,149.158c0,0-78.858-29.652-76.599-103.756c0,0,18.383,22.935,31.219,26.68c0,0-10.385-24.364,0.274-54.7 	C222.37,260.577,240.532,241.166,256.031,195.678z\"/>                                 <path style=\"fill:#e22822;\" d=\"M349.442,275.775c-12.223,32.399-40.92,49.336-40.92,49.336 	c16.617-69.417-52.491-129.434-52.491-129.434v229.256C363.725,395.204,349.442,275.775,349.442,275.775z\"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>', '{\"en\":\"Active Fire Protection\",\"ar\":\"\\u0627\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u064a\\u0642 \\u0627\\u0644\\u0646\\u0634\\u0637\"}', '2020-05-07 06:20:08', '2020-05-09 07:51:26'),
(200, 1, '<svg version=\"1.1\" id=\"Layer_1\" width=\"50px\" height=\"50px\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"                                  viewBox=\"0 0 511.993 511.993\" style=\"enable-background:new 0 0 511.993 511.993;\" xml:space=\"preserve\"> <circle style=\"fill:#3C3B41;\" cx=\"255.996\" cy=\"255.996\" r=\"255.996\"/>                                 <path style=\"fill:#000;\" d=\"M505.507,313.53L304.658,112.68c-18.67-19.219-43.392-39.142-76.095-58.704 	c6.562,13.565,10.49,30.678,10.49,49.298c0,44.002-21.87,79.672-48.848,79.672c-1.853,0-3.678-0.178-5.477-0.506l-35.437-35.659 	c-8.095,13.814-48.86,87.805-41.322,164.745c3.727,38.042,20.407,65.591,42.408,86.46l113.868,113.868 	C382.181,508.122,479.993,424.632,505.507,313.53z\"/>                                 <path style=\"fill:#e22822;\" d=\"M373.975,197.153c0,0,4.212,32.658-13.57,45.761c0,0,19.576-98.368-131.842-188.937 	c6.562,13.565,10.49,30.678,10.49,49.298c0,44.002-21.87,79.672-48.848,79.672c-17.132,0-32.195-14.396-40.913-36.165 	c-8.095,13.814-48.861,87.805-41.322,164.745c9.109,92.981,95.575,123.305,148.064,146.497c0,0,88.293-22.737,128.707-90.326 	C422.654,304.284,400.352,223.53,373.975,197.153z\"/>                                 <path style=\"fill:#fff;\" d=\"M373.975,197.153c0,0,4.212,32.658-13.57,45.761c0,0,17.102-85.966-104.373-171.161v386.271 	c0,0,88.293-22.737,128.707-90.326C422.654,304.284,400.352,223.53,373.975,197.153z\"/>                                 <path style=\"fill:#fff;\" d=\"M256.031,195.678c0,0,69.109,60.017,52.491,129.434c0,0,28.697-16.939,40.92-49.336 	c0,0,14.284,119.429-93.41,149.158c0,0-78.858-29.652-76.599-103.756c0,0,18.383,22.935,31.219,26.68c0,0-10.385-24.364,0.274-54.7 	C222.37,260.577,240.532,241.166,256.031,195.678z\"/>                                 <path style=\"fill:#e22822;\" d=\"M349.442,275.775c-12.223,32.399-40.92,49.336-40.92,49.336 	c16.617-69.417-52.491-129.434-52.491-129.434v229.256C363.725,395.204,349.442,275.775,349.442,275.775z\"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>', '{\"en\":\"Passive Fire Protection\",\"ar\":\"\\u0627\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u062d\\u0631\\u0627\\u0626\\u0642 \\u0627\\u0644\\u0633\\u0644\\u0628\\u064a\\u0629\"}', '2020-05-07 06:21:49', '2020-05-09 07:50:48'),
(202, 1, '<svg enable-background=\"new 0 0 256 256\" height=\"50\" viewBox=\"0 0 256 256\" width=\"50\" xmlns=\"http://www.w3.org/2000/svg\"><switch><foreignObject height=\"1\" requiredExtensions=\"http://ns.adobe.com/AdobeIllustrator/10.0/\" width=\"1\"/><g><circle cx=\"128\" cy=\"128\" fill=\"#3C3B41\" r=\"120\"/><circle cx=\"128\" cy=\"128\" fill=\"#3C3B41\" r=\"102.5\"/><path d=\"m127.068 55.333c-43.571 0-79.018 35.447-79.018 79.018s35.447 79.018 79.018 79.018 79.018-35.447 79.018-79.018c0-43.57-35.447-79.018-79.018-79.018zm57.07 42.649c5.764 9.013 9.452 19.474 10.387 30.705h-11.329c-2.195-6.675-7.778-11.813-14.714-13.379-.446-3.464-1.011-6.832-1.689-10.089 6.356-1.947 12.197-4.374 17.345-7.237zm-6.977-9.113c-3.951 2.054-8.396 3.845-13.208 5.341-2.674-8.569-6.193-16.069-10.361-22.137 9.03 3.861 17.056 9.629 23.569 16.796zm-45.103-21.245c8.118 3.112 15.998 13.61 20.981 29.348-6.641 1.33-13.719 2.157-20.981 2.418zm0 43.103c8.275-.268 16.286-1.2 23.799-2.736.516 2.573.96 5.244 1.324 8.008-5.824 2.095-10.407 6.792-12.346 12.689h-12.777zm12.398 29.288c1.647 6.443 6.393 11.645 12.556 13.925-.33 2.326-.717 4.584-1.155 6.772-3.703-.757-7.528-1.367-11.445-1.824-2.498-4.929-6.959-8.694-12.354-10.268v-8.605zm-36.167 19.047c-3.417.433-6.759.984-10.009 1.649-1.27-6.334-2.105-13.265-2.388-20.697h24.838v8.605c-5.458 1.593-9.961 5.429-12.441 10.443zm4.172-48.955c2.719.264 5.478.455 8.27.57v18.01h-24.839c.083-2.167.212-4.291.386-6.37 7.313-.877 13.424-5.664 16.183-12.21zm8.269-41.897v31.126c-2.353-.108-4.684-.275-6.986-.499-.921-5.365-3.958-10.006-8.221-13.033 4.319-8.812 9.673-14.906 15.207-17.594zm-20.185 3.864c-2.067 3.009-3.974 6.37-5.698 10.039-.331-.016-.664-.024-.999-.024-6.301 0-11.928 2.887-15.63 7.411-.419-.207-.834-.417-1.243-.629 6.514-7.169 14.54-12.937 23.57-16.797zm-30.546 25.908c1.226.682 2.492 1.338 3.794 1.97-.087.762-.132 1.537-.132 2.322 0 8.01 4.665 14.93 11.426 18.192-.247 2.692-.424 5.434-.526 8.221h-24.949c.935-11.231 4.623-21.692 10.387-30.705zm0 72.738c-5.764-9.013-9.452-19.474-10.387-30.705h24.949c.302 8.267 1.261 16.148 2.783 23.468-6.356 1.947-12.197 4.375-17.345 7.237zm6.977 9.113c3.951-2.054 8.396-3.845 13.208-5.341 2.674 8.569 6.193 16.069 10.361 22.137-9.03-3.86-17.056-9.629-23.569-16.796zm24.122-8.103c1.738-.348 3.506-.662 5.3-.94 1.096 7.935 6.805 14.397 14.333 16.593v13.109c-7.635-3.707-14.927-13.898-19.633-28.762zm30.96 29.348v-13.695c7.59-2.214 13.331-8.765 14.359-16.791 2.248.324 4.458.704 6.622 1.137-4.983 15.739-12.863 26.237-20.981 29.349zm21.534-4.449c4.168-6.068 7.687-13.568 10.361-22.137 4.812 1.497 9.257 3.287 13.208 5.341-6.513 7.167-14.539 12.936-23.569 16.796zm30.546-25.909c-5.148-2.862-10.989-5.29-17.345-7.237.59-2.837 1.094-5.757 1.51-8.752 7.464-1.614 13.391-7.356 15.272-14.716h10.95c-.935 11.231-4.623 21.692-10.387 30.705z\" fill=\"#382b73\"/><path d=\"m127.068 206.369c-43.571 0-79.018-35.447-79.018-79.018s35.447-79.018 79.018-79.018 79.018 35.447 79.018 79.018-35.447 79.018-79.018 79.018zm0-146.709c-37.325 0-67.691 30.366-67.691 67.691s30.366 67.691 67.691 67.691 67.691-30.366 67.691-67.691-30.365-67.691-67.691-67.691z\" fill=\"#fff\"/><path d=\"m200.423 127.351c0-40.513-32.842-73.355-73.355-73.355s-73.355 32.842-73.355 73.355 32.842 73.355 73.355 73.355 73.355-32.842 73.355-73.355zm-73.355 67.691c-37.325 0-67.691-30.366-67.691-67.691s30.366-67.691 67.691-67.691 67.691 30.366 67.691 67.691-30.365 67.691-67.691 67.691z\" fill=\"#d1d3d4\"/><path d=\"m127.068 206.369c-23.894 0-42.61-34.709-42.61-79.018s18.716-79.018 42.61-79.018 42.61 34.709 42.61 79.018-18.716 79.018-42.61 79.018zm0-146.709c-15.108 0-31.284 27.2-31.284 67.691s16.176 67.691 31.284 67.691 31.284-27.2 31.284-67.691-16.176-67.691-31.284-67.691z\" fill=\"#fff\"/><path d=\"m164.015 127.351c0-40.513-16.542-73.355-36.947-73.355s-36.947 32.842-36.947 73.355 16.542 73.355 36.947 73.355c20.406 0 36.947-32.842 36.947-73.355zm-36.947 67.691c-15.108 0-31.284-27.2-31.284-67.691s16.176-67.691 31.284-67.691 31.284 27.2 31.284 67.691-16.176 67.691-31.284 67.691z\" fill=\"#d1d3d4\"/><path d=\"m127.068 103.808c-24.398 0-46.946-5.741-61.861-15.751l6.312-9.405c12.903 8.66 33.669 13.83 55.55 13.83s42.647-5.169 55.55-13.83l6.312 9.405c-14.916 10.01-37.464 15.751-61.863 15.751z\" fill=\"#fff\"/><path d=\"m127.068 97.457c-22.818 0-44.016-5.023-58.867-13.862l-2.994 4.462c14.915 10.01 37.463 15.751 61.861 15.751 24.399 0 46.947-5.741 61.861-15.751l-2.995-4.462c-14.85 8.838-36.047 13.862-58.866 13.862z\" fill=\"#d1d3d4\"/><path d=\"m182.618 176.051c-12.903-8.66-33.669-13.829-55.55-13.829-21.88 0-42.647 5.169-55.55 13.829l-6.312-9.405c14.915-10.01 37.463-15.751 61.861-15.751 24.399 0 46.947 5.741 61.861 15.751z\" fill=\"#fff\"/><path d=\"m127.068 157.246c22.819 0 44.016 5.023 58.867 13.862l2.995-4.462c-14.915-10.01-37.463-15.751-61.861-15.751s-46.946 5.741-61.861 15.751l2.994 4.462c14.85-8.839 36.048-13.862 58.866-13.862z\" fill=\"#d1d3d4\"/><path d=\"m52.365 121.688h148.058v11.327h-148.058z\" fill=\"#fff\"/><path d=\"m120.731 53.322h11.327v148.058h-11.327z\" fill=\"#fff\"/><path d=\"m87.344 98.219c-1.252 6.019-2.122 12.418-2.56 19.098 2.726 1.372 5.805 2.145 9.065 2.145.727 0 1.445-.039 2.152-.114.357-6.551 1.144-12.693 2.28-18.358 4.931 1.008 10.077 1.756 15.371 2.227.252-1.275.385-2.593.385-3.943 0-2.672-.52-5.223-1.463-7.557-3.932-.418-7.771-1.003-11.475-1.745.911-2.876 1.918-5.577 3.006-8.09-3.005-1.776-6.511-2.795-10.255-2.795-.252 0-.503.005-.754.014-1.058 2.578-2.03 5.285-2.911 8.109-3.268-1.016-6.366-2.168-9.256-3.446-2.964 2.471-5.208 5.776-6.373 9.554 3.955 1.868 8.239 3.508 12.788 4.901z\" fill=\"#bcbec0\"/><path d=\"m132.058 162.311c4.937.178 9.788.617 14.476 1.298-.314-4.607-2.173-8.79-5.064-12.034-3.089-.296-6.231-.497-9.412-.6v-5.356c-1.797-.524-3.697-.806-5.664-.806-1.966 0-3.867.282-5.664.806v5.405c-3.228.133-6.414.368-9.544.7-2.858 3.271-4.678 7.472-4.945 12.09 4.683-.732 9.539-1.222 14.489-1.448v22.017c1.797.524 3.698.806 5.664.806s3.867-.281 5.664-.806z\" fill=\"#bcbec0\"/><path d=\"m168.95 112.42c-1.579-.397-3.232-.608-4.935-.608-2.232 0-4.378.362-6.385 1.031.292 2.86.499 5.811.615 8.844h-11.588c-1.797 3.018-2.829 6.545-2.829 10.312 0 .34.008.678.025 1.015h14.392c-.239 6.274-.872 12.191-1.827 17.694 2.345.953 4.91 1.479 7.598 1.479 1.247 0 2.467-.113 3.651-.33 1.018-5.981 1.67-12.29 1.91-18.843h14.602c.017-.336.025-.674.025-1.015 0-3.768-1.032-7.294-2.829-10.312h-11.798c-.116-3.148-.326-6.24-.627-9.267z\" fill=\"#bcbec0\"/><circle cx=\"93.849\" cy=\"95.275\" fill=\"#1caee4\" r=\"20.188\"/><circle cx=\"164.015\" cy=\"128\" fill=\"#fede3a\" r=\"20.188\"/><circle cx=\"126.394\" cy=\"161.001\" fill=\"#ef5a9d\" r=\"20.188\"/><path d=\"m102.986 94.807c-.032 0-.063 0-.094.001-.463-2.409-2.582-4.228-5.126-4.228-.771 0-1.503.167-2.161.467-.856-1.715-2.627-2.893-4.674-2.893-2.883 0-5.22 2.337-5.22 5.22 0 .497.069.979.2 1.434-.039-.001-.078-.001-.118-.001-2.883 0-5.22 2.337-5.22 5.22s2.337 5.22 5.22 5.22h17.194c2.883 0 5.22-2.337 5.22-5.22-.001-2.882-2.338-5.22-5.221-5.22z\" fill=\"#009add\"/><path d=\"m102.986 91.807c-.032 0-.063 0-.094.001-.463-2.409-2.582-4.228-5.126-4.228-.771 0-1.503.167-2.161.467-.856-1.715-2.627-2.893-4.674-2.893-2.883 0-5.22 2.337-5.22 5.22 0 .497.069.979.2 1.434-.039-.001-.078-.001-.118-.001-2.883 0-5.22 2.337-5.22 5.22s2.337 5.22 5.22 5.22h17.194c2.883 0 5.22-2.337 5.22-5.22-.001-2.882-2.338-5.22-5.221-5.22z\" fill=\"#fff\"/><path d=\"m102.986 99.076h-17.194c-2.33 0-4.304-1.527-4.975-3.634-.159.5-.245 1.033-.245 1.586 0 2.883 2.337 5.22 5.22 5.22h17.194c2.883 0 5.22-2.337 5.22-5.22 0-.553-.086-1.086-.245-1.586-.671 2.107-2.645 3.634-4.975 3.634z\" fill=\"#d1d3d4\"/><path d=\"m140.027 162.214c-.003-.035-.008-.069-.014-.103-.019-.103-.05-.203-.092-.297-.012-.027-.025-.053-.039-.079-.002-.004-.004-.007-.006-.011-.164-.297-.445-.525-.791-.615l-3.027-.783 1.191-2.023c.114-.193.17-.407.173-.62.001-.011 0-.021 0-.032v-1.528c0-.006 0-.013 0-.019.014-.274-.06-.548-.218-.779-.001-.001-.001-.002-.002-.003-.008-.011-.016-.022-.024-.033-.005-.007-.011-.014-.016-.022-.003-.004-.006-.007-.009-.011-.031-.04-.064-.078-.1-.114l-2.03-2.03c-.243-.242-.564-.369-.889-.371h-.001c-.032 0-.064.001-.096.003-.19.014-.379.07-.552.172l-3.179 1.872c-.108-.047-.217-.093-.326-.136l-.925-3.572c-.09-.346-.317-.627-.615-.791-.004-.002-.007-.004-.011-.006-.026-.014-.052-.027-.079-.039-.094-.042-.193-.074-.297-.092-.034-.006-.068-.011-.103-.014-.04-.004-.08-.006-.121-.006h-2.871c-.041 0-.081.002-.121.006-.035.003-.069.008-.103.014-.094.017-.184.044-.27.081-.035.015-.069.031-.102.049-.006.003-.012.007-.018.01-.295.164-.521.444-.61.788l-.925 3.572c-.11.043-.218.089-.326.136l-3.18-1.872c-.173-.102-.362-.158-.552-.172-.032-.002-.064-.004-.096-.003h-.001c-.325.002-.646.129-.889.371l-2.029 2.03c-.036.036-.069.074-.1.114-.003.004-.006.007-.009.011-.006.007-.011.014-.016.022-.008.011-.016.022-.024.033-.001.001-.001.002-.002.003-.158.231-.232.505-.218.779 0 .007-.001.013 0 .02v1.56c.004.213.059.427.173.62l1.191 2.023-3.027.783c-.346.09-.627.318-.791.615-.01.018-.019.035-.028.053-.003.005-.004.009-.007.014-.035.073-.063.149-.083.229 0 .001 0 .002-.001.003-.007.029-.013.058-.019.087-.006.034-.011.068-.014.103-.004.04-.006.081-.006.121v4.494c0 .577.39 1.081.949 1.226l3.026.783-1.191 2.023c-.129.219-.186.465-.173.707v.009 1.496c-.015.346.112.692.369.949l2.03 2.03c.408.408 1.04.489 1.538.196l3.181-1.873c.107.047.215.091.324.133l.925 3.574c.145.559.649.949 1.226.949h2.871c.577 0 1.081-.39 1.226-.949l.925-3.574c.109-.043.217-.087.324-.133l3.181 1.873c.497.293 1.13.212 1.538-.196l2.03-2.03c.257-.257.384-.604.369-.949v-1.496c0-.003 0-.006 0-.009.012-.241-.044-.487-.173-.707l-1.191-2.023 3.026-.783c.559-.145.949-.649.949-1.226v-4.494c-.001-.04-.003-.08-.007-.121zm-18.134 1.557c0-2.486 2.015-4.501 4.501-4.501s4.501 2.015 4.501 4.501-2.015 4.501-4.501 4.501c-2.486.001-4.501-2.015-4.501-4.501z\" fill=\"#e43d91\"/><path d=\"m137.422 153.123c0-.01 0-.02 0-.03.001-.016-.001-.032 0-.048-.001-.027-.001-.054-.004-.08-.018-.302-.139-.597-.365-.823l-2.03-2.03c-.409-.408-1.041-.489-1.538-.195l-3.181 1.872c-.107-.047-.216-.091-.325-.133l-.926-3.575c-.145-.559-.649-.948-1.226-.948h-2.871c-.576 0-1.081.39-1.226.948l-.925 3.575c-.109.042-.218.086-.325.133l-3.181-1.872c-.497-.294-1.129-.213-1.538.195l-2.03 2.03c-.225.226-.347.521-.364.823-.002.027-.003.053-.004.08 0 .016-.001.032 0 .049 0 .01-.001.02 0 .03v1.56c.004.213.059.427.173.62l1.191 2.023-3.027.783c-.558.145-.948.65-.948 1.226v4.494c0 .577.39 1.081.949 1.226l3.027.784-1.191 2.024c-.118.199-.173.42-.173.64 0 .004-.001.008-.001.012-.001.011 0 .021 0 .032-.001.011 0 .021 0 .032v1.496c-.015.346.112.692.369.949l2.03 2.03c.408.408 1.04.489 1.537.196l3.181-1.873c.107.047.215.091.324.133l.925 3.574c.145.559.649.949 1.226.949h2.871c.577 0 1.081-.39 1.226-.949l.925-3.574c.109-.043.217-.087.324-.133l3.181 1.873c.497.293 1.13.212 1.538-.196l2.03-2.03c.257-.257.384-.604.369-.949v-1.496c0-.011 0-.021 0-.032s0-.021 0-.032c0-.004-.001-.008-.001-.012 0-.22-.055-.441-.173-.64l-1.191-2.024 3.027-.784c.559-.145.949-.649.949-1.226v-4.494c0-.576-.39-1.081-.948-1.226l-3.027-.783 1.191-2.023c.114-.193.17-.407.173-.62 0-.011 0-.021 0-.032v-1.529zm-11.028 12.168c-2.492 0-4.52-2.028-4.52-4.52s2.028-4.52 4.52-4.52 4.52 2.028 4.52 4.52-2.027 4.52-4.52 4.52z\" fill=\"#e7ad27\"/><g fill=\"#fddd3a\"><path d=\"m126.394 150.975c-5.41 0-9.796 4.386-9.796 9.796s4.386 9.796 9.796 9.796 9.796-4.386 9.796-9.796-4.385-9.796-9.796-9.796zm0 14.298c-2.486 0-4.501-2.015-4.501-4.501s2.015-4.501 4.501-4.501 4.501 2.015 4.501 4.501c.001 2.485-2.015 4.501-4.501 4.501z\"/><path d=\"m128.803 153.423h-4.817c-.828 0-1.433-.782-1.226-1.583l.973-3.758c.145-.559.649-.949 1.226-.949h2.871c.577 0 1.081.39 1.226.949l.973 3.758c.207.801-.398 1.583-1.226 1.583z\"/><path d=\"m123.986 168.12h4.817c.828 0 1.433.782 1.226 1.583l-.973 3.758c-.145.559-.649.949-1.226.949h-2.871c-.577 0-1.081-.39-1.226-.949l-.973-3.758c-.207-.802.398-1.583 1.226-1.583z\"/><path d=\"m133.743 163.18v-4.817c0-.828.782-1.433 1.583-1.226l3.758.973c.559.145.949.649.949 1.226v2.871c0 .577-.39 1.081-.949 1.226l-3.758.973c-.802.207-1.583-.399-1.583-1.226z\"/><path d=\"m119.046 158.363v4.817c0 .828-.782 1.433-1.583 1.226l-3.758-.973c-.559-.145-.949-.649-.949-1.226v-2.871c0-.577.39-1.081.949-1.226l3.758-.973c.801-.207 1.583.398 1.583 1.226z\"/><path d=\"m133.293 157.278-3.406-3.406c-.585-.585-.461-1.566.253-1.986l3.346-1.97c.497-.293 1.13-.212 1.538.196l2.03 2.03c.408.408.489 1.04.196 1.538l-1.97 3.345c-.421.714-1.401.838-1.987.253z\"/><path d=\"m119.495 164.264 3.406 3.406c.586.586.461 1.566-.253 1.986l-3.346 1.97c-.497.293-1.129.212-1.537-.196l-2.03-2.03c-.408-.408-.489-1.04-.196-1.538l1.97-3.345c.42-.713 1.401-.838 1.986-.253z\"/><path d=\"m129.887 167.67 3.406-3.406c.585-.585 1.566-.461 1.986.253l1.97 3.345c.293.497.212 1.13-.196 1.538l-2.03 2.03c-.408.408-1.04.488-1.538.196l-3.346-1.97c-.712-.42-.837-1.4-.252-1.986z\"/><path d=\"m122.901 153.872-3.406 3.406c-.586.585-1.566.461-1.986-.253l-1.97-3.345c-.293-.497-.212-1.13.196-1.538l2.03-2.03c.408-.408 1.04-.489 1.537-.196l3.346 1.97c.714.42.839 1.401.253 1.986z\"/></g><path d=\"m126.394 168.971c-4.521 0-8.2-3.678-8.2-8.2 0-4.521 3.678-8.2 8.2-8.2 4.521 0 8.199 3.678 8.199 8.2.001 4.521-3.678 8.2-8.199 8.2zm0-15.117c-3.814 0-6.917 3.103-6.917 6.917s3.103 6.917 6.917 6.917 6.917-3.103 6.917-6.917-3.103-6.917-6.917-6.917z\" fill=\"#fff235\"/><path d=\"m126.394 167.688c-3.814 0-6.917-3.103-6.917-6.917s3.103-6.917 6.917-6.917 6.917 3.103 6.917 6.917-3.103 6.917-6.917 6.917zm0-11.437c-2.492 0-4.52 2.028-4.52 4.52s2.028 4.52 4.52 4.52 4.52-2.028 4.52-4.52-2.027-4.52-4.52-4.52z\" fill=\"#f6ca14\"/><path d=\"m172.525 141.696h-17.02c-1.291 0-2.338-1.047-2.338-2.338v-16.716c0-1.291 1.047-2.338 2.338-2.338h17.02c1.291 0 2.338 1.047 2.338 2.338v16.716c0 1.291-1.046 2.338-2.338 2.338z\" fill=\"#e7ad27\"/><path d=\"m172.525 138.696h-17.02c-1.291 0-2.338-1.047-2.338-2.338v-16.716c0-1.291 1.047-2.338 2.338-2.338h17.02c1.291 0 2.338 1.047 2.338 2.338v16.716c0 1.291-1.046 2.338-2.338 2.338z\" fill=\"#1caee4\"/><g fill=\"#fff\"><path d=\"m163.889 123.803h-6.637c-.524 0-.948-.424-.948-.948s.424-.948.948-.948h6.637c.524 0 .948.424.948.948 0 .523-.424.948-.948.948z\"/><path d=\"m170.779 123.803c-.524 0-.948-.424-.948-.948s.424-.948.948-.948.948.424.948.948c0 .523-.425.948-.948.948z\"/><path d=\"m163.889 133.955h-6.637c-.524 0-.948-.424-.948-.948s.424-.948.948-.948h6.637c.524 0 .948.424.948.948s-.424.948-.948.948z\"/><path d=\"m170.779 133.955c-.524 0-.948-.424-.948-.948s.424-.948.948-.948.948.424.948.948-.425.948-.948.948z\"/></g><path d=\"m153.167 127.318h21.696v1.896h-21.696z\" fill=\"#009add\"/><path d=\"m174.822 136.799h-21.612c.207 1.08 1.156 1.896 2.296 1.896h17.02c1.14.001 2.089-.815 2.296-1.896z\" fill=\"#009add\"/></g></switch></svg>', '{\"en\":\"Internet of Things\",\"ar\":\"Internet of Things\"}', '2020-05-19 07:15:55', '2020-05-19 07:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `type_securities`
--

CREATE TABLE `type_securities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_securities`
--

INSERT INTO `type_securities` (`id`, `is_publish`, `icon`, `title`, `created_at`, `updated_at`) VALUES
(100, 1, '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"50\" height=\"50\" viewBox=\"0 0 50 50\">                                 <image y=\"4\" width=\"50\" height=\"42\" xlink:href=\"data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAqCAYAAADxughHAAAG8klEQVRoge2YC1BU1xnHfwsLy1M3IAjIRgYlQcEW4xAD1McUbKNgSaOMUmx24iN1MmlGZzQm9rGljaZp0sbMmKbTGAwpDBqkPhJijI8IIkqYFFQQEhURNSCwuoAEWPbROdy9Snkuj04gk//szvnOueee+/+fx3e+cxS7NvOOr5pIxhmsXT+wWuFuG7cUxqNYnZTjTcZ9CCFmCyhlEWfKaejopGNMsLMTKidUUWH4KB3h3lgUXGDV5pV8OtbJd8dre/hJVBhHRJHDmGE1QnwvZKzhOyNEYf1M8sdVtRjNZskeL3B0RBHsj7Oge89ryQXjFfeE7MrlH20dVIwnHa4qZqyNZz3dhdxpYf943EdAEvK91xpr+M4IubdG/L1Z/85HJHy7dIYGf28C5RcUlhNYFYpxwnwAOJy9SMOYZWcnbjRgcogKw1eMjPwvr6ZVvJ52mH92L/82/6np+IjUxonPK9F35xPog9OYX+wfnOS4TkvD7sO8N1C9ER9yX/4XIW4uRHQYqTGaKNZpsYy0ze7Q+DBLZB/wJPR2C+f6q9dLiMUiBY4KUA30AdFDcXNI+e0v77dRdxtz1nGOfHWDJJ2Wb0ZDiIcrbiI1mTHKnMzm3p3Va2p1mjGL1MWZSX01nJqO8/H/cPXpxWg1vv/bEX5eOCbHsiQ5Fv32TCJGQ0hwAO4ibTeilzl1munsWa/XiDS30gJM9FEzs6+GHw2lJPYRgjo64bMSvqquI7vdSJXSkUkPTib5p5FEPBSIS2IMBanpBOi0NA9XxKtZRG9JluymVoof1rAWKS6sHVSIvpkaIFDji3/PZzv2sXrDckng+0d4c10CG3pU+csb2WjXJbA7LAj3imvkAvOGK8TLk5WyfaeFvRpffifsBgPFPev2mlr6Zs6I9GENLq9kEtr9WWQo20V67Auu9iGiCxuTSN9zgr8L+/FHiUlNRz1cIdOmsFSkpZdpdnTASXAS+cYm0gYV0thEhmxPmiiFyEhrQxkVxmRhX6gidSACa+N5znAXq4crCrUHScMRsS0DTdRMgpD2jTSZizjJvvgLO0ZkawqlX16nXdhT/Vgilzsp8XGwhTJtxsHPLbfuSG04KHAdjpDQB9njqoJaPeZaPS/JXC7doLqv+n1uiIVlZCEt7OnbMpgq7E4Td8w2p6dyImowIl6ekqu0WId+e/m3bJKWRhMt7EOFvKF0ZLLgIvJXvr4/YwYVUlPPM9V1dKo9UMwK5t+iTKelvfQyBmGHBPKbgYjs3M8LPmocxL2s4S45QxGRmo7DojnsdlZKocivlrJZcBBcBKcGA9vsFqLTYvq4iD8JO/4xHvnrB3Q5wbMXeU0ue+sAW/p69/W9JC6bLzmF3LOc12lpHIII3wU/pHpWMO7N32DNP8eanfvZKL5na++P/UUO4jqoX5wpp15cEpdconl2CBNFvVPnuTnvBwSIfeTQafIu3WSDWFep6XhNn0Ja0kISRW9er8eUdhhve/cREer8fB6lYUG4mczw9kE2NrWS++wTVHp54iAu2W0Bbp8YMGgs/pLfi3R2CBMyj3FA2KfLSPhaj0nlBEkLWbA1hRKLFatOiz4lThLRboQDBbxor4hXMpn5xI8oESJEfv8p8n79JDtmh5AjRHTn0h8GHBGBzGMcTInjZ8LOPkle0kIWiikQFkROdDhRAd44ynXrDViKLnLh4jWe35JM/mACtmUwZVoAu5c8RtwENxRiOh0oIPtqLckzp3JCdJSNwyHRSSMSInC4iPLFc6UdPSefwmXziZGf2aLfuSYzl9s6+Nze6Pf9T9mzfAEr3GyhacU12j48w49fWMnZnHxOL5svea2s43ycHEv8YO3ZJUTszjHhfBE3h2Cknf1KcSUJL6VQaQ9htQcPOStxr6ol69lE/iDKiyponDsD76u1GPPPk1Ndx3pnJTMiQ8mMm8M0UWdfHqeWL2C+Hf1inxAZGUfJXrWI5SIrNqp9eWwSc3mADpig09Ik54sq0M+dIUWwwjl4efLU7RZ2Ci+5K5e3k2NZ7+4i1c04yr5Vi+yPCoYkBOkIvGv1YtbI+cJybhWWsWbTiq4AsRfEuvJRSyN5voo/P/8kb3Wv8/pe4qPDeTfaFv7YvvHu6sVSpPt/E4J0Vfl4dDjvxYRLH7dYuwI7Q2UNBQ0GPhKbYH/7R2o6k7w8WeXnReK0KURETEctQh+jCU6WcuXcZZ7bvJJPhsppWEJkvJnDushQXo7uw7+LqXe9gaa2Dumk6KrCTePDRP9uXk5GYTn1hWU8s2kFB4fLZURCZIjLZI0vG4L8iAwLwtvTjQFvyhoMWCpruHWzkdLr9ewYjcvzURHSE9szCX/AgySVM35KRykiMJm7RqeuqZXsrSmUjeoHgf8C70lwstFHkQoAAAAASUVORK5CYII=\"/>                             </svg>', '{\"en\":\"Security & ELV\",\"ar\":\"\\u0627\\u0644\\u0623\\u0645\\u0646 \\u0648 ELV\"}', '2020-05-07 06:35:25', '2020-05-07 06:35:25'),
(200, 1, '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"49.996\" height=\"49.996\" viewBox=\"0 0 301 301\">                                 <image y=\"50\" width=\"301\" height=\"184\" xlink:href=\"data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAfCAYAAAClDZ5ZAAAIh0lEQVRYhdVYa4xdVRVea7/Ofc19zkzvDMy0M6DBUFOJJdQ0hgYErSngo40EEzS0BDHGhES0Kj8waP9Yf4imPtAUo0UiRSE1oSAGDFAbTdQUrSJNW6DTed07j/s4z/0w+9y5M3empbadtoSV7JmTfc9Ze31r77X2txb+65mVsFQMYDyTY3XQhgBFHc942oEM9YCAgdBQCI2AQDoAqEFj6yv7VwPSFWz2wSQGmzRgCAAEwUBDpXZPy65dDNX8igQ0MKrj51BTSBMPImDgawFdxAWHSGiqJEigYNDE759O2Glnz0XmAFjACghIY43xh3vYzANA7A8LurqYt7ZPVHeBsdMYgx6XBfBN4rQGth16NnLeQKQhEBoWL2aXY2iAQwQhGPCMM9ZQyf0Z9NaDga74A4TKTJR5uhrlwCEhODQEuzORYTEkiDGT+GluV+MNto7RZwGInIvxdoFYsSGQof5dZTb9a4ayrLEFJkN9KLE6JElYfyvq3jgSlu5o26CBvL8i89tckwDfcHCNA74Rc6ZbnEAYqCEFNJ4r0OZHLhNVk6PNRwGgaAEvG4j12DwA4n5jBZ/SJVr/uYPhegmEcBLF79gYsoYUSBNSGFJPO+9pWzkR5dclSJhZwatAbEwZay6Jv0uiDwkMegfFxNEBUZEp4m11tfPyRJTfLjD63JAzWs0Q9zOB4XPuPM04U7DnWQ2kYbFxWeJ9NEcbT3GUiWqU+13dJB9UgIeaMgFd1LfGfSBFguvTxNskQK5hqHo6ddpjSFE3tCGTgeFHQmB/kIa95Ct+0HqbEgUORh9PE397lrof9rX490hUWuvphLvKGX86w9xbx8LCNysytyOFwdw+djj7TECyrAHKUMgQ7/vdvPZlX4u/nQyLtzdV8nWHShAYAkd1Z5HWv5QkwbVzaQuMwaarnapDogID1bVkexfWMQiB4X+vqfSjgeE/mtXJCA1AkTbW9/LpvZTo8kjQs+VE1L13yBl9qFfMPDDi99xVkdndCQwXJYO3BWIzUJL4MCgmX3BItOFkWPpKTaa/R9AARQld1Ls9TxsPCSKvtN/4SvylrlM/CAw/yEFu4ihvShN/nYNR8f+c2/aOjVSi/LfqOvEIj9MzQoHVHynw+rYxv3T/0ai8c3Xi+BNZ1tx82F1VUoZOdabxUyKo4y6AFXzmWQviDb+8eVYnn2TYSpG9tP7jPG/cY59rMrV/WmW+7RvnFQYqVWK1nVni3mvj4JT9P53MvSNQXtYvKj+t6fSNk1Hu7qZK1g3A3Q6GQdmpfjcA9vp//cu3rE2/ZlaJsX3HwvJ6jtGC3a89M3iKds8IGBRjuwqice9xr7xlWmX3pqgHFNXKPjb1+zTzVytFZ8dkcWtVdT2pNYEBMfH1IqvviFPp2QA4ww6Fhr91zO/bFAE5ZJ1X5tO/yfP6llcbw7ybzd7Xy6e/MyYLguLC3YP/2X95hw4DvnagQBt3DCQn9kwEhftHZXEnAw0JGrxvkI8f4FTlm1Hi4Mmo+1ZPO5P2u0Fn/Kk8bdwWK1kOiA4w2pDoSNC/oaGTB+wRujpx3FOGjh72B4ZTNMwZgrOdtwuxabA9IsNtZnEGnIk9rnReHpWFnfaICBL2rWTjB+dAHDga9H/I1WISiYYhZ/T5PGvcNneTXRgxltNo/t7EyCs54q4JNIcTUfcNgkVDJVbf3FCpWaUoyI7BAOjc2gZC7cCwM7LHeuR42HeTVYhoYJBPvMSYyoaSjxwL+zfAXAwN8PHdXcy98W3oz/LEtOjPoDP+J88XfRVZ+HOfnJ4aEJNPhIajQLlIPcnzGtiR5Q0oO5NX5Xjj09Uw98NIM99Shj429TOHRVdYY98Iezcag5ElbyVW/1SR1j9/UUC0xQBwInODfOK3WiOcjIq3VFV2JyMKDMKiwZRunTTrYQpGzESZX1ZkbjtFBVnqXVuita1WYSXK/6Qh068KGoICEP2s8ouLCGFBtL3Pmh/r4TO31HR6nyudA4B0np+1hU3L1n1lYiD6EEF9pz1Oytg0O/OwJTE2K03K7FcFCWOq0stn7mFUZS7qbiyRMp962A2dfQ7YI6VO+Z1Ybtk5bIZQgJAmwWp7odmXaiq1NwRaI6ji34u0dt+lg9A6YgkSrspQ92Z7NVgnLx2EEg122HNHiI1uS+YoFFnjC23KMaPSj1mCp5BCkgYfdEg0dCl3oy1Z4n3R8jJLm5YOZkEsBo/AQJIMep+EVsEURMBe5CjBGAJZ4n6iDfBSS4Z4GzPET2mDrqVKnRIziYVhQCkCCYiuFBj12/dc7RwiYKaHxLit/IAYM3zpIbQcx1CJFPrrbaATo4F2DCY7ShKL0dbLGXSH22SOo0wO8MlNgkbYB1XUhlzzTuxGWwiaIVsSZKm7iP2yzjIyAgpd1L2uwBpfiycM2BphNSDsszGRICG0598pSRN/m0/5PxXggU6KghPP5+ahRIYmy2zaRbJM4tcpbT1n30c4sxAAowAOBytTAMZrl8qsrpLzVbMCEjoqejxpguu1IQrAnHduMoChQFkQKEvQirVRG6QIcb16noJItGHKkIMOSgkL9T7gkWf77U7EPQv7P+4zxZfO0rvz7MUqtg2GNAluuMIZ/aP9cCwq5CsyO8uXcKRz1dxqGyFQ2+NCFTcq7CXNbMnIgQKlGppaQAb9m7PEvQ7BmHPpKy1ezsR1vgFY0/ZGkdZ3pEkwev7umXctTqnsX6dk1/4EDUFA1GopvflcT9xgsMRLGYRVYiLkKPmyY6TtgwudGAhAqHh0OBgUtuhKod+6EJVpdQdLrLadGHU1AS3B9tqWKxcrs1k6AkoNibFfBVocntHpHXFovPlcz1UF2ngsw7xrLmhxdLEFW8NVzj9OhD2fRfkCMTFNebcAWCoEQCoWsYZKPZ4Cf522QbKo5fyuEEu5jKfFi/8DxZMyEYrb8aYAAAAASUVORK5CYII=\"/>                             </svg>', '{\"en\":\"Hospitality & Building Management\",\"ar\":\"\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0636\\u064a\\u0627\\u0641\\u0629 \\u0648\\u0627\\u0644\\u0628\\u0646\\u0627\\u0621\"}', '2020-05-07 06:36:26', '2020-05-07 06:36:26');

-- --------------------------------------------------------

--
-- Table structure for table `type_waters`
--

CREATE TABLE `type_waters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_waters`
--

INSERT INTO `type_waters` (`id`, `is_publish`, `icon`, `title`, `created_at`, `updated_at`) VALUES
(100, 1, '<svg version=\"1.0\" xmlns=\"http://www.w3.org/2000/svg\"                                  width=\"50px\" height=\"50px\" viewBox=\"0 0 512.000000 512.000000\"                                  preserveAspectRatio=\"xMidYMid meet\">                                 <g transform=\"translate(0.000000,512.000000) scale(0.100000,-0.100000)\"                                    fill=\"#0f5e9c\" stroke=\"none\">                                     <path d=\"M3042 4961 c-24 -114 -97 -237 -348 -585 -214 -298 -282 -531 -221 -763 25 -93 84 -197 154 -268 63 -65 174 -138 228 -151 17 -4 35 -11 41 -15 6 -5 48 -14 93 -20 82 -11 230 0 255 20 6 4 24 11 41 15 57 14 158 80 224 146 118 118 174 257 173 430 0 226 -58 355 -317 710 -66 91 -136 192 -156 225 -46 75 -99 181 -99 196 0 6 -6 25 -14 42 -8 18 -16 41 -18 51 -6 40 -24 24 -36 -33z m-355 -1123 c11 -13 41 -57 68 -98 60 -94 168 -202 261 -264 87 -56 98 -69 90 -100 -12 -47 -101 -41 -229 18 -125 57 -219 166 -252 292 -16 60 -20 131 -9 158 9 23 47 20 71 -6z\"/>                                     <path d=\"M1724 4968 c-12 -55 -65 -144 -199 -329 -162 -224 -200 -371 -136 -529 111 -271 473 -318 645 -83 49 67 68 129 68 226 1 152 -35 232 -212 472 -74 99 -126 193 -136 243 -8 41 -20 41 -30 0z\"/>                                     <path d=\"M952 3598 c-20 -10 -102 -104 -172 -198 -14 -18 -64 -83 -112 -144 -48 -61 -96 -122 -107 -136 -11 -14 -49 -62 -85 -108 -95 -120 -96 -121 -96 -348 0 -127 4 -203 12 -221 17 -40 48 -73 69 -73 10 0 21 -4 24 -10 4 -7 703 -10 2066 -10 l2059 0 44 21 c32 14 48 29 55 51 7 19 11 122 11 257 0 198 -2 229 -18 252 -19 30 -141 187 -247 318 -38 48 -102 129 -142 181 -39 52 -89 114 -111 138 l-39 42 -131 0 -131 0 -6 -37 c-4 -21 -10 -47 -15 -58 -4 -11 -13 -40 -20 -64 -6 -23 -14 -49 -17 -57 -4 -11 16 -14 111 -14 l116 0 62 -81 c35 -44 118 -151 186 -237 67 -86 122 -160 122 -164 0 -4 -846 -8 -1880 -8 -1034 0 -1880 2 -1880 5 0 3 20 31 45 63 25 31 83 107 130 167 47 61 91 117 98 125 7 9 32 41 56 73 l43 57 635 0 c599 0 634 1 629 18 -27 93 -40 139 -41 152 -1 8 -5 25 -9 38 l-7 22 -642 -1 c-444 0 -649 -4 -665 -11z\"/>                                     <path d=\"M1627 2083 c-2 -5 -7 -21 -11 -38 -17 -70 -106 -226 -193 -336 -15 -20 -35 -47 -43 -59 -8 -12 -32 -45 -52 -73 -21 -28 -38 -54 -38 -58 0 -4 -6 -14 -13 -21 -25 -24 -84 -162 -97 -221 -17 -82 -14 -217 5 -284 9 -31 31 -79 49 -107 37 -58 122 -140 154 -150 12 -4 22 -11 22 -15 0 -5 26 -16 58 -25 31 -9 73 -22 93 -28 76 -22 243 12 327 68 112 74 181 172 209 296 20 88 20 119 0 221 -25 125 -92 250 -237 442 -111 146 -210 322 -210 372 0 22 -14 31 -23 16z m45 -505 c63 -83 157 -228 182 -280 54 -116 45 -233 -24 -311 -79 -89 -196 -113 -295 -61 -64 34 -86 57 -119 121 -35 70 -35 135 2 233 35 93 194 330 221 330 5 0 20 -15 33 -32z\"/>                                     <path d=\"M3257 1886 c-16 -102 -118 -274 -268 -456 -104 -126 -229 -290 -229 -301 0 -4 -7 -14 -15 -22 -23 -24 -81 -156 -103 -237 -38 -143 -38 -240 3 -383 55 -199 248 -390 450 -446 68 -19 218 -25 302 -12 81 13 196 60 262 108 57 42 138 131 177 194 19 32 48 97 65 144 26 77 30 100 30 200 0 122 -2 134 -36 240 -43 131 -126 263 -289 460 -130 156 -197 249 -243 335 -40 75 -47 92 -67 164 -15 51 -32 56 -39 12z m98 -638 c260 -314 303 -401 293 -595 -3 -71 -10 -101 -31 -144 -34 -70 -106 -143 -182 -182 -57 -30 -66 -32 -170 -32 -103 0 -114 2 -170 32 -66 34 -142 108 -173 169 -11 21 -27 69 -37 106 -15 62 -15 72 1 158 19 105 57 185 143 300 64 86 52 72 156 189 44 50 83 91 87 91 3 0 41 -42 83 -92z\"/>                                 </g>                             </svg>', '{\"en\":\"Water Filtration & others\",\"ar\":\"\\u062a\\u0631\\u0634\\u064a\\u062d \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0648\\u063a\\u064a\\u0631\\u0647\\u0627\"}', '2020-05-07 06:46:36', '2020-05-07 06:46:36'),
(200, 1, '<svg version=\"1.0\" xmlns=\"http://www.w3.org/2000/svg\"                                  width=\"50px\" height=\"50px\" viewBox=\"0 0 200.000000 200.000000\"                                  preserveAspectRatio=\"xMidYMid meet\">                                 <g transform=\"translate(0.000000,200.000000) scale(0.100000,-0.100000)\"                                    fill=\"#0f5e9c\" stroke=\"none\">                                     <path d=\"M987 1820 c-3 -8 -13 -46 -22 -85 -22 -93 -83 -281 -106 -326 -10 -20 -52 -82 -94 -138 -111 -148 -138 -212 -143 -333 -5 -112 11 -172 66 -256 42 -65 105 -114 180 -143 46 -17 73 -20 142 -17 73 3 94 9 148 37 113 61 183 164 205 300 8 54 7 81 -7 143 -18 81 -50 142 -145 273 -94 130 -133 222 -191 450 -16 61 -31 103 -33 95z m218 -864 c20 -68 14 -112 -21 -173 -48 -82 -122 -115 -164 -73 -27 27 -25 68 5 171 14 46 32 127 41 179 26 161 20 157 74 49 27 -52 56 -121 65 -153z\"/><path d=\"M730 1746 c-340 -120 -545 -386 -567 -738 l-6 -98 -79 0 c-73 0 -79 -2 -76 -19 3 -20 243 -301 256 -301 12 0 25 13 117 115 151 168 166 185 160 195 -4 6 -33 10 -66 10 l-59 0 0 48 c0 64 33 198 69 276 45 99 97 173 182 257 73 73 78 81 109 173 18 54 30 99 28 101 -2 2 -33 -6 -68 -19z\"/><path d=\"M1703 1326 c-10 -13 -69 -79 -131 -145 -62 -67 -110 -126 -107 -131 3 -6 33 -10 67 -10 l61 0 -7 -52 c-11 -87 -45 -198 -90 -293 -96 -203 -236 -330 -441 -401 -71 -25 -94 -28 -205 -28 -108 1 -137 4 -215 29 -49 15 -101 30 -115 32 -25 4 -25 4 -5 -12 53 -43 196 -104 310 -131 100 -24 278 -21 376 4 260 69 485 252 585 479 35 77 74 234 74 293 0 77 3 80 77 80 51 0 64 3 61 14 -6 28 -241 296 -259 296 -9 0 -26 -11 -36 -24z\"/></g>                             </svg>', '{\"en\":\"Water Treatment & others\",\"ar\":\"\\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 \\u0648\\u063a\\u064a\\u0631\\u0647\\u0627\"}', '2020-05-07 06:47:07', '2020-05-07 06:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(11) DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `position_id` int(10) UNSIGNED DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
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

INSERT INTO `users` (`id`, `photo_id`, `role_id`, `position_id`, `is_active`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 8, 1, 1, 1, 'Sam Mirzaev', 's.mirzayev@9yards.ae', NULL, '$2y$10$rhS9S5A51WOHjAh8jg7.pezBzQfNo6DbrRUKb4eFOhmM3gHOr5eyO', 'Fz8JjKkHkZqMKJrPZZe4NZ126UBMSriuNPOk3vkFBeHwFXXbCN0QdbSrj4Us', '2020-03-18 16:15:12', '2020-04-03 06:43:28'),
(3, 14, 6, 2, 1, 'John Doe', 'jhon@gmail.com', NULL, '$2y$10$dxHiJDqvgEsE/xvSfgTm6OVuvujxmFOOLfKu7gc2nZgJ57aM/URuK', 'NedJ5AcSheAvQQucY48NQBkhYp15wJ0miK8qXUVZHJ3QDGfDn0vER0x49B4i', '2020-03-19 07:53:20', '2020-05-14 09:04:35'),
(4, NULL, 2, 2, 1, 'Wu Chin', 'wu@gmail.com', NULL, '$2y$10$IuVls6r5sMV7krdSA0WfVO3b8pbPpWv9SL/rEkSOBytrkMHFuNTT2', 'J6v9P4emw5ouHKByf30B6H9aUDTVmIUPFIuYQi60gDPFnZ1Y5RkV1PT2mUQu', '2020-03-19 08:28:56', '2020-05-14 07:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `water_titles`
--

CREATE TABLE `water_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_publish` int(11) NOT NULL DEFAULT 0,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `water_titles`
--

INSERT INTO `water_titles` (`id`, `is_publish`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"Water Treatment | General International Group\",\"ar\":\"\\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0627\\u0647 | \\u0627\\u0644\\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0645\\u0629\"}', '2020-05-04 07:05:34', '2020-05-04 07:05:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_banners`
--
ALTER TABLE `about_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_companies`
--
ALTER TABLE `about_companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_companies_story_id_index` (`story_id`);

--
-- Indexes for table `about_concepts`
--
ALTER TABLE `about_concepts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_diversity_icons`
--
ALTER TABLE `about_diversity_icons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_diversity_icons_story_id_index` (`story_id`);

--
-- Indexes for table `about_diversity_ones`
--
ALTER TABLE `about_diversity_ones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_diversity_ones_story_id_index` (`story_id`);

--
-- Indexes for table `about_diversity_twos`
--
ALTER TABLE `about_diversity_twos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_diversity_twos_story_id_index` (`story_id`);

--
-- Indexes for table `about_leaderships`
--
ALTER TABLE `about_leaderships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_leaderships_story_id_index` (`story_id`);

--
-- Indexes for table `about_leadership_medias`
--
ALTER TABLE `about_leadership_medias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_leadership_medias_story_id_index` (`story_id`);

--
-- Indexes for table `about_policies`
--
ALTER TABLE `about_policies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_policies_story_id_index` (`story_id`);

--
-- Indexes for table `about_story_cats`
--
ALTER TABLE `about_story_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_timelines`
--
ALTER TABLE `about_timelines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_timelines_year_id_index` (`year_id`);

--
-- Indexes for table `about_timeline_cats`
--
ALTER TABLE `about_timeline_cats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_timeline_cats_story_id_index` (`story_id`);

--
-- Indexes for table `about_titles`
--
ALTER TABLE `about_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_careers`
--
ALTER TABLE `banner_careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_cases`
--
ALTER TABLE `banner_cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_contacts`
--
ALTER TABLE `banner_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_facilities`
--
ALTER TABLE `banner_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_fires`
--
ALTER TABLE `banner_fires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_news`
--
ALTER TABLE `banner_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_securities`
--
ALTER TABLE `banner_securities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_waters`
--
ALTER TABLE `banner_waters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_photos`
--
ALTER TABLE `brand_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brochures`
--
ALTER TABLE `brochures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brochure_requests`
--
ALTER TABLE `brochure_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_c_c_mails`
--
ALTER TABLE `b_c_c_mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_contacts`
--
ALTER TABLE `career_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_titles`
--
ALTER TABLE `career_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_categories`
--
ALTER TABLE `case_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_medias`
--
ALTER TABLE `case_medias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_medias_cat_id_index` (`cat_id`),
  ADD KEY `case_medias_case_id_index` (`case_id`);

--
-- Indexes for table `case_studies`
--
ALTER TABLE `case_studies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_studies_cat_id_index` (`cat_id`),
  ADD KEY `case_studies_media_id_index` (`media_id`);

--
-- Indexes for table `case_titles`
--
ALTER TABLE `case_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_facilities`
--
ALTER TABLE `category_facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_facilities_type_id_index` (`type_id`);

--
-- Indexes for table `category_fires`
--
ALTER TABLE `category_fires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_fires_type_id_index` (`type_id`);

--
-- Indexes for table `category_securities`
--
ALTER TABLE `category_securities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_securities_type_id_index` (`type_id`);

--
-- Indexes for table `category_waters`
--
ALTER TABLE `category_waters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_waters_type_id_index` (`type_id`);

--
-- Indexes for table `concept_facilities`
--
ALTER TABLE `concept_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concept_fires`
--
ALTER TABLE `concept_fires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concept_securities`
--
ALTER TABLE `concept_securities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concept_titles`
--
ALTER TABLE `concept_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concept_waters`
--
ALTER TABLE `concept_waters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_headers`
--
ALTER TABLE `contact_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_maps`
--
ALTER TABLE `contact_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_requests`
--
ALTER TABLE `contact_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_titles`
--
ALTER TABLE `contact_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_c_mails`
--
ALTER TABLE `c_c_mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_configurations`
--
ALTER TABLE `email_configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebooks`
--
ALTER TABLE `facebooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility_titles`
--
ALTER TABLE `facility_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_managements`
--
ALTER TABLE `file_managements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filter_brochures`
--
ALTER TABLE `filter_brochures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fire_titles`
--
ALTER TABLE `fire_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_logos`
--
ALTER TABLE `footer_logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_socials`
--
ALTER TABLE `footer_socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_spaces`
--
ALTER TABLE `footer_spaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google_analytics`
--
ALTER TABLE `google_analytics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google_tag_managers`
--
ALTER TABLE `google_tag_managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google_verifications`
--
ALTER TABLE `google_verifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_spaces`
--
ALTER TABLE `header_spaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banners`
--
ALTER TABLE `home_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_partners`
--
ALTER TABLE `home_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_services`
--
ALTER TABLE `home_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_services_service_id_index` (`service_id`);

--
-- Indexes for table `home_service_cats`
--
ALTER TABLE `home_service_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_titles`
--
ALTER TABLE `home_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_careers`
--
ALTER TABLE `job_careers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_careers_type_id_index` (`type_id`),
  ADD KEY `job_careers_location_id_index` (`location_id`),
  ADD KEY `job_careers_salary_id_index` (`salary_id`);

--
-- Indexes for table `job_careers_job_category`
--
ALTER TABLE `job_careers_job_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_careers_job_category_job_category_id_index` (`job_category_id`),
  ADD KEY `job_careers_job_category_job_careers_id_index` (`job_careers_id`);

--
-- Indexes for table `job_categories`
--
ALTER TABLE `job_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_locations`
--
ALTER TABLE `job_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_salaries`
--
ALTER TABLE `job_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_types`
--
ALTER TABLE `job_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_descriptions`
--
ALTER TABLE `meta_descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_keywords`
--
ALTER TABLE `meta_keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_sub_copies`
--
ALTER TABLE `meta_sub_copies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_u_r_l_dist_covs`
--
ALTER TABLE `meta_u_r_l_dist_covs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav_logos`
--
ALTER TABLE `nav_logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav_menus`
--
ALTER TABLE `nav_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_medias`
--
ALTER TABLE `news_medias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_medias_cat_id_index` (`cat_id`);

--
-- Indexes for table `news_posts`
--
ALTER TABLE `news_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_titles`
--
ALTER TABLE `news_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `open_graph_site_descs`
--
ALTER TABLE `open_graph_site_descs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `open_graph_titles`
--
ALTER TABLE `open_graph_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `open_graph_type_url_imgs`
--
ALTER TABLE `open_graph_type_url_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_cat_id_index` (`cat_id`);

--
-- Indexes for table `project_banners`
--
ALTER TABLE `project_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_titles`
--
ALTER TABLE `project_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `robots`
--
ALTER TABLE `robots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `security_titles`
--
ALTER TABLE `security_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_facilities`
--
ALTER TABLE `service_facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_facilities_type_id_index` (`type_id`),
  ADD KEY `service_facilities_cat_id_index` (`cat_id`);

--
-- Indexes for table `service_fires`
--
ALTER TABLE `service_fires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_fires_type_id_index` (`type_id`),
  ADD KEY `service_fires_cat_id_index` (`cat_id`);

--
-- Indexes for table `service_securities`
--
ALTER TABLE `service_securities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_securities_type_id_index` (`type_id`),
  ADD KEY `service_securities_cat_id_index` (`cat_id`);

--
-- Indexes for table `service_waters`
--
ALTER TABLE `service_waters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_waters_type_id_index` (`type_id`),
  ADD KEY `service_waters_cat_id_index` (`cat_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_banners`
--
ALTER TABLE `testimonial_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `twitter_cards`
--
ALTER TABLE `twitter_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `twitter_domain_urls`
--
ALTER TABLE `twitter_domain_urls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `twitter_site_imgs`
--
ALTER TABLE `twitter_site_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `twitter_title_descs`
--
ALTER TABLE `twitter_title_descs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_facilities`
--
ALTER TABLE `type_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_fires`
--
ALTER TABLE `type_fires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_securities`
--
ALTER TABLE `type_securities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_waters`
--
ALTER TABLE `type_waters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_index` (`role_id`),
  ADD KEY `users_position_id_index` (`position_id`);

--
-- Indexes for table `water_titles`
--
ALTER TABLE `water_titles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_banners`
--
ALTER TABLE `about_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `about_companies`
--
ALTER TABLE `about_companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `about_concepts`
--
ALTER TABLE `about_concepts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `about_diversity_icons`
--
ALTER TABLE `about_diversity_icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `about_diversity_ones`
--
ALTER TABLE `about_diversity_ones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `about_diversity_twos`
--
ALTER TABLE `about_diversity_twos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `about_leaderships`
--
ALTER TABLE `about_leaderships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `about_leadership_medias`
--
ALTER TABLE `about_leadership_medias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `about_policies`
--
ALTER TABLE `about_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `about_story_cats`
--
ALTER TABLE `about_story_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `about_timelines`
--
ALTER TABLE `about_timelines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `about_timeline_cats`
--
ALTER TABLE `about_timeline_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `about_titles`
--
ALTER TABLE `about_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_careers`
--
ALTER TABLE `banner_careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner_cases`
--
ALTER TABLE `banner_cases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner_contacts`
--
ALTER TABLE `banner_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner_facilities`
--
ALTER TABLE `banner_facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner_fires`
--
ALTER TABLE `banner_fires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banner_news`
--
ALTER TABLE `banner_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner_securities`
--
ALTER TABLE `banner_securities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner_waters`
--
ALTER TABLE `banner_waters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brand_photos`
--
ALTER TABLE `brand_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `brochures`
--
ALTER TABLE `brochures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `brochure_requests`
--
ALTER TABLE `brochure_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `b_c_c_mails`
--
ALTER TABLE `b_c_c_mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `career_contacts`
--
ALTER TABLE `career_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `career_titles`
--
ALTER TABLE `career_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `case_categories`
--
ALTER TABLE `case_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `case_medias`
--
ALTER TABLE `case_medias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `case_studies`
--
ALTER TABLE `case_studies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `case_titles`
--
ALTER TABLE `case_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_facilities`
--
ALTER TABLE `category_facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category_fires`
--
ALTER TABLE `category_fires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category_securities`
--
ALTER TABLE `category_securities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_waters`
--
ALTER TABLE `category_waters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `concept_facilities`
--
ALTER TABLE `concept_facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `concept_fires`
--
ALTER TABLE `concept_fires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `concept_securities`
--
ALTER TABLE `concept_securities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `concept_titles`
--
ALTER TABLE `concept_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `concept_waters`
--
ALTER TABLE `concept_waters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_headers`
--
ALTER TABLE `contact_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_maps`
--
ALTER TABLE `contact_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_requests`
--
ALTER TABLE `contact_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_titles`
--
ALTER TABLE `contact_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c_c_mails`
--
ALTER TABLE `c_c_mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_configurations`
--
ALTER TABLE `email_configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facebooks`
--
ALTER TABLE `facebooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facility_titles`
--
ALTER TABLE `facility_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file_managements`
--
ALTER TABLE `file_managements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `filter_brochures`
--
ALTER TABLE `filter_brochures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `fire_titles`
--
ALTER TABLE `fire_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `footer_logos`
--
ALTER TABLE `footer_logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `footer_socials`
--
ALTER TABLE `footer_socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer_spaces`
--
ALTER TABLE `footer_spaces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `google_analytics`
--
ALTER TABLE `google_analytics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `google_tag_managers`
--
ALTER TABLE `google_tag_managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `google_verifications`
--
ALTER TABLE `google_verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header_spaces`
--
ALTER TABLE `header_spaces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_banners`
--
ALTER TABLE `home_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_partners`
--
ALTER TABLE `home_partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `home_services`
--
ALTER TABLE `home_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_service_cats`
--
ALTER TABLE `home_service_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_titles`
--
ALTER TABLE `home_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_careers`
--
ALTER TABLE `job_careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `job_careers_job_category`
--
ALTER TABLE `job_careers_job_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job_locations`
--
ALTER TABLE `job_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_salaries`
--
ALTER TABLE `job_salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_types`
--
ALTER TABLE `job_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `meta_descriptions`
--
ALTER TABLE `meta_descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `meta_keywords`
--
ALTER TABLE `meta_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `meta_sub_copies`
--
ALTER TABLE `meta_sub_copies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `meta_u_r_l_dist_covs`
--
ALTER TABLE `meta_u_r_l_dist_covs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `nav_logos`
--
ALTER TABLE `nav_logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nav_menus`
--
ALTER TABLE `nav_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_medias`
--
ALTER TABLE `news_medias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news_posts`
--
ALTER TABLE `news_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news_titles`
--
ALTER TABLE `news_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `open_graph_site_descs`
--
ALTER TABLE `open_graph_site_descs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `open_graph_titles`
--
ALTER TABLE `open_graph_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `open_graph_type_url_imgs`
--
ALTER TABLE `open_graph_type_url_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `project_banners`
--
ALTER TABLE `project_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `project_titles`
--
ALTER TABLE `project_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `robots`
--
ALTER TABLE `robots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `security_titles`
--
ALTER TABLE `security_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_facilities`
--
ALTER TABLE `service_facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_fires`
--
ALTER TABLE `service_fires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_securities`
--
ALTER TABLE `service_securities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_waters`
--
ALTER TABLE `service_waters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial_banners`
--
ALTER TABLE `testimonial_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `twitter_cards`
--
ALTER TABLE `twitter_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `twitter_domain_urls`
--
ALTER TABLE `twitter_domain_urls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `twitter_site_imgs`
--
ALTER TABLE `twitter_site_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `twitter_title_descs`
--
ALTER TABLE `twitter_title_descs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type_facilities`
--
ALTER TABLE `type_facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=802;

--
-- AUTO_INCREMENT for table `type_fires`
--
ALTER TABLE `type_fires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `type_securities`
--
ALTER TABLE `type_securities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `type_waters`
--
ALTER TABLE `type_waters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `water_titles`
--
ALTER TABLE `water_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_careers_job_category`
--
ALTER TABLE `job_careers_job_category`
  ADD CONSTRAINT `job_careers_job_category_job_careers_id_foreign` FOREIGN KEY (`job_careers_id`) REFERENCES `job_careers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_careers_job_category_job_category_id_foreign` FOREIGN KEY (`job_category_id`) REFERENCES `job_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
