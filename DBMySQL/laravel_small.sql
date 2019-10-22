-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 22 2019 г., 17:13
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel_small`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `client_id`, `title`, `client_name`, `message`, `email`, `created_at`, `updated_at`) VALUES
(4, 3, 'Hello', 'Sanzhar Anarbay', 'Problem 1', 'anarbay.sanzhar1999@gmail.com', '2019-10-22 02:54:00', '2019-10-22 02:54:00'),
(5, 2, 'Hello sir', 'Client Client', 'Hello Sirdfd\r\nfdgfdgfd\r\ngfdgfd', 'client@gmail.com', '2019-10-22 02:55:08', '2019-10-22 02:55:08'),
(6, 4, 'Homework 1', 'Yernur Aidaraly', 'Your homework is not finished', 'yernur@gmail.com', '2019-10-22 03:06:06', '2019-10-22 03:06:06'),
(7, 4, 'dfdgfd', 'Yernur Aidaraly', 'gfdgfdgfd', 'yernur@gmail.com', '2019-10-22 03:06:23', '2019-10-22 03:06:23'),
(8, 4, 'gfdgfdgfdgfdgfd', 'Yernur Aidaraly', 'gfdgdfgdfgfdgfdgfdgfd', 'yernur@gmail.com', '2019-10-22 03:06:30', '2019-10-22 03:06:30'),
(9, 3, 'Product Quality', 'Sanzhar Anarbay', 'Your products are not high quality', 'anarbay.sanzhar1999@gmail.com', '2019-10-22 08:57:58', '2019-10-22 08:57:58'),
(11, 3, 'Help ME', 'Sanzhar Anarbay', 'Help', 'anarbay.sanzhar1999@gmail.com', '2019-10-22 09:00:50', '2019-10-22 09:00:50'),
(12, 5, 'New User', 'User User', 'Hello! I don\'t understand anything here! Please HElP me!!!', 'user@gmail.com', '2019-10-22 09:01:50', '2019-10-22 09:01:50');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_21_153625_create_roles_table', 1),
(5, '2019_10_21_153958_create_role_user_table', 1),
(6, '2019_10_22_062750_create_contacts_table', 2),
(8, '2019_10_22_062800_create_responses_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `responses`
--

CREATE TABLE `responses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `response_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `responses`
--

INSERT INTO `responses` (`id`, `contact_id`, `client_id`, `client_name`, `message`, `response_text`, `created_at`, `updated_at`) VALUES
(1, 4, 3, 'Sanzhar Anarbay', 'Problem 1', 'PRoblem have done!', '2019-10-22 06:55:50', '2019-10-22 06:55:50'),
(4, 6, 4, 'Yernur Aidaraly', 'Your homework is not finished', 'dgdfgdfgdfgfd', '2019-10-22 07:53:04', '2019-10-22 07:53:04'),
(5, 12, 5, 'User User', 'Hello! I don\'t understand anything here! Please HElP me!!!', 'OK! What is your phone number?', '2019-10-22 09:02:27', '2019-10-22 09:02:27'),
(6, 5, 2, 'Client Client', 'Hello Sirdfd\r\nfdgfdgfd\r\ngfdgfd', 'Hello! Ok', '2019-10-22 09:10:43', '2019-10-22 09:10:43');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'manager', '2019-10-21 11:18:32', '2019-10-21 11:18:32'),
(2, 'client', '2019-10-21 11:18:32', '2019-10-21 11:18:32');

-- --------------------------------------------------------

--
-- Структура таблицы `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 2, 3, NULL, NULL),
(4, 2, 4, NULL, NULL),
(5, 2, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Manager Manager', 'manager@gmail.com', NULL, '$2y$10$TuDp1tCS6y/fCLXLBZSMYOQLtIegidcWwaTq6aYsjl9srSIr6clJS', NULL, '2019-10-21 11:18:33', '2019-10-21 11:18:33'),
(2, 'Client Client', 'client@gmail.com', NULL, '$2y$10$BQO1EmagEeIO5VNF5s0Rfe56oMSLrYMvDIAC4GvP.p87TrgawebPK', NULL, '2019-10-21 11:18:33', '2019-10-21 11:18:33'),
(3, 'Sanzhar Anarbay', 'anarbay.sanzhar1999@gmail.com', NULL, '$2y$10$slk.dYz0TL2mKDA4ZP1fdeBiVaSl6JcmSLMI62wXmOhLbtMqVBZs.', NULL, '2019-10-21 11:19:03', '2019-10-21 11:19:03'),
(4, 'Yernur Aidaraly', 'yernur@gmail.com', NULL, '$2y$10$w3QAgu4UN59GOeKmRz/Meu5idUYPnXv1fSDTQQrQuITVmXQzb1zlW', NULL, '2019-10-22 03:05:46', '2019-10-22 03:05:46'),
(5, 'User User', 'user@gmail.com', NULL, '$2y$10$nlB0uvG.211F36aLZM9B4.ZUdicZiEIlIPp/P80Pa/Gct2BSJJehK', NULL, '2019-10-22 09:01:18', '2019-10-22 09:01:18');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `responses`
--
ALTER TABLE `responses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
