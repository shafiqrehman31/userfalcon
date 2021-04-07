-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 07:46 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp_userfalcon_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `coinbase_webhook_calls`
--

CREATE TABLE `coinbase_webhook_calls` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exception` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currency_type`
--

CREATE TABLE `currency_type` (
  `id` int(11) NOT NULL,
  `currency_type` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `currency_type`
--

INSERT INTO `currency_type` (`id`, `currency_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'BTC (Bitcoin)', 0, '2021-01-29 13:11:22', '2021-01-29 13:11:22'),
(2, 'ETH (Etherum)', 0, '2021-01-29 13:11:22', '2021-01-29 13:11:22'),
(3, 'TTR (Tether)', 0, '2021-01-29 13:12:22', '2021-01-29 13:12:22');

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
(3, '2021_03_30_081855_create_coinbase_webhook_calls_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `old_tbl_users`
--

CREATE TABLE `old_tbl_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1',
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `old_tbl_users`
--

INSERT INTO `old_tbl_users` (`id`, `first_name`, `last_name`, `email`, `password`, `email_verified_at`, `status`, `remember_token`) VALUES
(19, 'Muhammmad', 'Refaqat', 'refaqatkhattak88@gmail.com', '$2y$10$jJg/IGqx.isxYmA2tolA/O/kMmVcY3xYcK5Diq.2IHvGZanpQdyD6', NULL, b'1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ilyas02828@gmail.com', '$2y$10$CvDpeeaGxIKHs0xeOIvQ..qGSerdGLz8jzpipQW2B8AfMp/BB3zoe', '2020-02-18 06:11:35'),
('rafaqat@uforialogic.com', '$2y$10$1M3vO9NoSVbcYsK6IJC.w.eB.zPg4tXf1pt9XQmw5LRkIqTgSqlOe', '2020-02-19 02:51:41'),
('refaqatkhattak88@gmail.com', '$2y$10$cYPKIFNUerBAQd7PidKQF.W71qYtTOs0SNZFVzRPuKwizxF8p7qIu', '2020-02-19 07:38:39'),
('refaqatkhattak88@gmail.com', 'O3Fka7Otl7jI9htJ3ZNZ82MJv18aAtNwEGYQVE2r482w7XIKYxNxulHnCtkF', '2021-03-29 05:11:21'),
('refaqatkhattak88@gmail.com', 'XV3kx1B11lQVBLtvNZkjYYXNhs3XIa6Y0iD7QWoZZQl4NydIG8NLg5c5BuvD', '2021-03-29 06:01:40'),
('refaqatkhattak88@gmail.com', '5z7podygECme7j529FDPvDCl2SG403X5qBPi0SG7eVThEMvjoD58MKHsRnVu', '2021-03-29 06:27:31'),
('refaqatkhattak88@gmail.com', '9eJswzM7qWzZLfeGCVhqqelyeQHEQ0uPCbji1XF6T7L6lhu4WsPLmklaUDN6', '2021-03-29 06:40:42'),
('refaqatkhattak88@gmail.com', 'c8bNeoUiH4wPrEposwhg7hzPQh7OjFF3JAj1UE6e3kGj8xVZs9yNPESIGwfa', '2021-03-29 06:41:05'),
('refaqatkhattak88@gmail.com', 'NMwDSw3jehaekpj67Plkd9H1K3G2toWOS8bzV9ksceSofE5YQQBVz3cL36jo', '2021-03-29 06:45:16'),
('refaqatkhattak88@gmail.com', 'Hr9gkTRlCgM9JxU2WcTABZ9kmqOHm4zIvgdySwg3fkaoAj2n5BydGmUcMIJC', '2021-03-29 06:54:16'),
('refaqatkhattak88@gmail.com', 'uQvf7I0zBuGzq9CQeCiVdQJudtEuTLLUDFWdQmQ0dgYXQLLExBf0GFYaZG1i', '2021-03-29 06:57:10'),
('refaqatkhattak88@gmail.com', '9GrsMrQLPl5lwVrHCRE8n39pEQtzJ5BmHJZ7hPsmu9XQq8YeHnhXB2njYYfC', '2021-03-29 07:20:09'),
('refaqatkhattak88@gmail.com', 'LsJtpQloWE5NTXH0fNpHdOPQfnPbhFVPd9YHgpMf4EAEbBz1uPLcqfdulJAF', '2021-03-29 07:20:57'),
('refaqatkhattak88@gmail.com', 'rZbaWre5oKqiLdc88MsKzphpS25XQRuVyGRcKvs71BGo2tpffUDNDD1X3Jpo', '2021-03-29 07:21:07'),
('refaqatkhattak88@gmail.com', '9Tq5wcuKRHjNhKugiFEMEO7Zq28UNdJs3gRy1KX0CpE1sDqo97LnnI2Oym15', '2021-03-29 07:22:13'),
('refaqatkhattak88@gmail.com', 'zphFHxPgGgKsNtyH7i33QQnx0sWZjqtQSZhq5VN7aThzGmNDOgHP7uBvixiX', '2021-03-29 07:24:21'),
('refaqatkhattak88@gmail.com', 'HRyWhSfDpkmM0x4pBQ6T0mnee6x18Ka7I1gGtCGUdVhs5r1pPOeADh5Mx8dB', '2021-03-29 07:27:36'),
('refaqatkhattak88@gmail.com', 'O757vPisQw9vDSXP5F5Vhu3YGQ1DKUmeTqZ1jgrtKF95WNQb9SDbnNGzpIh0', '2021-03-29 08:15:02'),
('refaqatkhattak88@gmail.com', 'iw2QonGGAnoUxsNGq649mQJlbdAYLgP78jakrxcg3uRem6lWxoGmC9P1eWXf', '2021-03-29 08:39:06'),
('refaqatkhattak88@gmail.com', 'Ys5CPqW71R71Cu7qRNVFWQW4iLJel53zPjYMJEgzyoCijDfhB3Yadvvorz3H', '2021-03-29 08:39:24'),
('refaqatkhattak88@gmail.com', 'Lw3703YbsbJm5vSWLDXe32LkXGhv5y1ZnJKxYpsZscUPjAAillQDxyGL8sEV', '2021-03-29 08:39:58'),
('refaqatkhattak88@gmail.com', 'h7ecRA49PpspmKpBY1na9nB4ROeKWImifS8JGQq2RYrbsNRLON32juVpnUei', '2021-03-29 08:41:50'),
('refaqatkhattak88@gmail.com', 'nfl5teO7Ph76T5NHEGpwmniQx0xC31Vn0Mo2wtdSf6MM9bJY2PnRU5GNI7z5', '2021-03-29 08:41:57'),
('refaqatkhattak88@gmail.com', 'EWbNHDAGSlnMUdIsgkV5SOgKHdPfXul8EFifri7eLcGAfS0nZMj8tyJj5Y1e', '2021-03-29 08:46:14'),
('refaqatkhattak88@gmail.com', '6mnZzBf0Kkt6NXKqQ8KghMphlnrCaWMOAr6LyiNzAJku93gverd7XFDuL7bn', '2021-03-29 08:48:25'),
('refaqatkhattak88@gmail.com', 'AHVQVJXGTdD7qG5K0DFXelJluJPdR23XibktiSug2RpKZ2oAFVGu8CQdNHxA', '2021-03-29 09:22:53'),
('refaqatkhattak88@gmail.com', 'OoasPDd5ei7M1AWzQt9DtepTRWOTcV8bNOxJVnBbJniASsYJa8VNipkWdPdS', '2021-03-29 09:25:12'),
('refaqatkhattak88@gmail.com', '70zBLVDMaWhiAyQ6ieUYqsvLGOYgNsV8CULzfQRVUWnPt9lZlXw9GasQwl9Q', '2021-03-29 09:27:46'),
('refaqatkhattak88@gmail.com', '7sOo5WzrI1lFo4MbqpKyXRan5BEsAPXf1Iug69DVgnpa87sKBDF6Brau8tGi', '2021-03-29 09:28:19'),
('refaqatkhattak88@gmail.com', 'Pui9MgDYMk69H2FnvaWIC4GaTisXujkzxOOCAXTnuzTYGtr1qFANBGVvOz2E', '2021-03-29 09:28:57'),
('refaqatkhattak88@gmail.com', 'TMeQ4ccaSfxebyJruE76nQ534f5XCaYiWAklvBUb9579MLqIoL8y9FsCRvG8', '2021-03-29 09:29:11'),
('refaqatkhattak88@gmail.com', 'fxvZd182ZpBYz8vCrY121M9GwEREhBQlGRJbtYn4cQQ7016PVgXmqfmDTP1L', '2021-03-29 09:30:07'),
('refaqatkhattak88@gmail.com', 'IkLu6RZemtglIH8nlg5F8vogSR0qnlaZmmAMFRZ5ujAlltsAWNER1f0HQiDZ', '2021-03-29 09:30:59'),
('refaqatkhattak88@gmail.com', '5gtF4dMGslLdUkLhWUwJCK7WtAfn0ifwJ3BmDvH5DYCs9PhO7HXkIx9wGRlI', '2021-03-29 09:31:34'),
('refaqatkhattak88@gmail.com', 'HQKcGnJ1slQ2h7FBQlL4hQcpj7ynvWzJQaEHL77PNYX6LiOc8cFdz0z1WQIu', '2021-03-29 09:33:26'),
('refaqatkhattak88@gmail.com', 'Ex4e54icKq2X98MiD4SzG3zLvX1BMT2SKXoCJRuByQwPPuXoftHYQUU5Jqam', '2021-03-29 09:36:36'),
('refaqatkhattak88@gmail.com', '9xYZ49pvop666RlTkYFK7qsph5Rl7CILfCihiKvYPNXrNzr4IwOFx6iMWuV8', '2021-03-29 09:38:10'),
('refaqatkhattak88@gmail.com', 'OEJ5X27J7Bo9W4xHTK7dzbU8tJgwjbeHkguuc2nNnPAvjHHLCZR6SKsXtdzo', '2021-03-29 09:39:41'),
('refaqatkhattak88@gmail.com', 'vrqY2LLppWGWrS0x3enbmAdFJMePr7fG8ALciY3p7Z916uvF3HB5lqPP1646', '2021-03-29 09:50:31'),
('refaqatkhattak88@gmail.com', '3hn0zBzXRcckz5nhSiPfM4i3kAeNlunNKZp8n0R0FMqsWp9IZHvd6VBzytSX', '2021-03-30 00:46:52'),
('abc@gmail.com', 'MC4g4vjyana1Pu2pInx1rNIX8BhfAAfQUxkVG3mHjLYncczrMXt6X2jF92Rs', '2021-03-30 01:47:09'),
('refaqatkhattak88@gmail.com', 'xkzFYkWknth4GA9Y54xdvfQhoTZVTF70bsApzRnjwDjxnWpcXhfazu98MhmA', '2021-03-30 01:47:38'),
('refaqatkhattak88@gmail.com', '7eYrGgpWnwZAsDmtiQ3qDM1JTJOF9mMxdxt741JDTCZE9Guu3A51aAQo8Lgm', '2021-03-30 01:50:21'),
('refaqatkhattak88@gmail.com', 'KbByZ5IdaiDsmgNyqv91R9rWSlnJ791j7IohgXPIHuiJpUWUz2S6E5NHsAK1', '2021-03-30 04:04:15'),
('refaqatkhattak88@gmail.com', 'KRuORV70LcqKbp3Qrz3DS8zN3yukE8gTS9vPYy390X0aZvSpTJdamM1oUt70', '2021-03-30 04:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(10) NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan` varchar(50) NOT NULL,
  `plan_date` date NOT NULL DEFAULT current_timestamp(),
  `invest_rang` varchar(255) NOT NULL,
  `plan_invest` int(50) NOT NULL,
  `plan_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `user_id`, `plan`, `plan_date`, `invest_rang`, `plan_invest`, `plan_status`) VALUES
(1, 'Falcon-203915', 'Bronze', '2021-02-11', '100-1000', 7, 0),
(3, 'Falcon-337593', 'Bronze', '2021-02-11', '100-1000', 7, 0),
(6, 'Falcon-119777', 'Bronze', '2021-02-11', '100-1000', 7, 0),
(7, 'Falcon-862797', 'Bronze', '2021-02-11', '100-1000', 7, 0),
(8, 'Falcon-292720', 'Bronze', '2021-02-11', '100-1000', 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referral_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sponser_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user_id`, `parent_id`, `referral_id`, `level_2`, `level_3`, `level_4`, `level_5`, `sponser_url`, `first_name`, `last_name`, `email`, `phone`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'Falcon-169848', 'Falcon-75060', NULL, NULL, NULL, NULL, NULL, 'http://localhost/userfalcon/public/register/?sponser-url=Falcon-75060', 'Abc', '', 'refaqatkhattak88@gmail.com', '0123456789', 1, NULL, '$2y$10$pHLthP8qpGA1aZKyxvAIwekMPbvwsj6m/i0u2fJHAen.jjtvD4/WG', NULL, '2021-02-11 06:10:19', '2021-02-11 06:10:19'),
(11, 'Falcon-203915', 'Falcon-77863', 'Falcon-75060', NULL, NULL, NULL, NULL, 'http://localhost/userfalcon/public/register/?sponser-url=Falcon-77863', 'def', '', 'def@gmail.com', '123456789', 0, NULL, '$2y$10$Q/hAdQziQtN7SIX1myZ3Wuf6q8qo6IFyA2P9qiVT.XugFGbZ4D3qe', NULL, '2021-02-11 06:11:38', '2021-02-11 06:11:38'),
(13, 'Falcon-337593', 'Falcon-37026', 'Falcon-77863', 'Falcon-75060', NULL, NULL, NULL, 'http://localhost/userfalcon/public/register/?sponser-url=Falcon-37026', 'ghi', '', 'ghi@gmail.com', '12345678', 0, NULL, '$2y$10$Z1v.2G5Vgtrq52ET8P6toeEBbJLfKwADVDIEqkPO85kMGzkm2bkUG', NULL, '2021-02-11 06:20:55', '2021-02-11 06:20:55'),
(18, 'Falcon-119777', 'Falcon-16277', 'Falcon-37026', 'Falcon-77863', 'Falcon-75060', NULL, NULL, 'http://localhost/userfalcon/public/register/?sponser-url=Falcon-16277', 'klm', '', 'klm@gmail.com', '12345678', 0, NULL, '$2y$10$6I33d5.yomG9Dj2Ojd4HhuS1D3vYGhm7Ro9aiy4GZWFL9m5NidwFy', NULL, '2021-02-11 06:39:33', '2021-02-11 06:39:33'),
(19, 'Falcon-862797', 'Falcon-94281', 'Falcon-16277', 'Falcon-37026', 'Falcon-77863', 'Falcon-75060', NULL, 'http://localhost/userfalcon/public/register/?sponser-url=Falcon-94281', 'opq', '', 'opq@gmail.com', '12345678', 0, NULL, '$2y$10$Jnh1t8HUtDb/e.642ZlZzuqOaGiKyShaFskMOJom8m3ojR3j1neTS', NULL, '2021-02-11 06:40:28', '2021-02-11 06:40:28'),
(20, 'Falcon-292720', 'Falcon-13601', 'Falcon-94281', 'Falcon-16277', 'Falcon-37026', 'Falcon-77863', 'Falcon-75060', 'http://localhost/userfalcon/public/register/?sponser-url=Falcon-13601', 'rst', '', 'rst@gmail.com', '12345678', 0, NULL, '$2y$10$iNE3jssxBTbmT.woOS8V5Oo0jx8tIl6bwJO8CDw77f.lFTWut467C', NULL, '2021-02-11 06:41:44', '2021-02-11 06:41:44'),
(21, 'Falcon-242960', 'Falcon-34203', 'Falcon-13601', 'Falcon-94281', 'Falcon-16277', 'Falcon-37026', 'Falcon-77863', 'http://localhost/userfalcon/public/register/?sponser-url=Falcon-34203', 'uvw', '', 'uvw@gmail.com', '12345678', 0, NULL, '$2y$10$mgorxDOrARsAwImkxAAH/uQNQeTFNdi1Zb.albZtJ3ShCIzB24BQu', NULL, '2021-02-11 06:48:02', '2021-02-11 06:48:02'),
(22, 'Falcon-288059', 'Falcon-29311', 'Falcon-34203', 'Falcon-13601', 'Falcon-94281', 'Falcon-16277', 'Falcon-37026', 'http://localhost/userfalcon/public/register/?sponser-url=Falcon-29311', 'xyz', '', 'xyz@gmail.com', '12345678', 0, NULL, '$2y$10$XpgOc23GVkHq0YXW90ZGtubMuJlRCku0Gq6Iy7CpQ6V0s/4.GM9jq', NULL, '2021-02-11 06:51:26', '2021-02-11 06:51:26'),
(23, 'Falcon-140778', 'Falcon-28173', 'Falcon-75060', NULL, NULL, NULL, NULL, 'http://localhost/nextdaylebals/public/admin/register/?sponser-url=Falcon-28173', 'Muhammad', 'Rafaqat', 'refaqat@gmail.com', '03339654236', 1, NULL, '$2y$10$fNTgEo5ygrqCwhsuWE/mw.7hRNrfJTTIsaV3/aVaQXo/14Ckcc/E6', NULL, NULL, NULL),
(24, 'Falcon-236811', 'Falcon-30910', 'Falcon-75060', NULL, NULL, NULL, NULL, 'http://localhost/nextdaylebals/public/admin/register/?sponser-url=Falcon-30910', 'Gul', 'Zaman', 'gulzaman@gmail.com', '03339654236', 1, NULL, '$2y$10$za/DeSVdiZjtWcti9KCNYe8dkgyLPbteA0I7wln21eVwzkrwzEy66', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `withdraw_total_amount` int(10) NOT NULL,
  `last_withdraw_amount` int(10) NOT NULL,
  `last_withdraw_date` date NOT NULL DEFAULT current_timestamp(),
  `withdraw_reaming_amount` int(10) NOT NULL,
  `withdraw_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `plan_id`, `withdraw_total_amount`, `last_withdraw_amount`, `last_withdraw_date`, `withdraw_reaming_amount`, `withdraw_status`) VALUES
(1, 1, 1000, 500, '2021-02-01', 1500, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coinbase_webhook_calls`
--
ALTER TABLE `coinbase_webhook_calls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency_type`
--
ALTER TABLE `currency_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `old_tbl_users`
--
ALTER TABLE `old_tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `first_name` (`first_name`),
  ADD KEY `last_name` (`last_name`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign key` (`user_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coinbase_webhook_calls`
--
ALTER TABLE `coinbase_webhook_calls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currency_type`
--
ALTER TABLE `currency_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `old_tbl_users`
--
ALTER TABLE `old_tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
