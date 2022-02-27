-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 27 2022 г., 14:25
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravblog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_10_095936_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dagerfild@gmail.com', '$2y$10$efysEYOutgNTBIUiCVdJy.ftsBkYVV71xv1fwfnB.iO.cNROjKi0K', '2022-02-27 00:28:12');

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `post_id` bigint UNSIGNED NOT NULL,
  `author_id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`post_id`, `author_id`, `title`, `short_title`, `img`, `descr`, `created_at`, `updated_at`) VALUES
(1, 2, 'CHAPTER IV. The.', 'CHAPTER IV. The.', NULL, 'Would not, could not, would not, could not, would not open any of them. \'I\'m sure I\'m not looking for eggs, I know I.', '2022-01-28 19:29:55', '2022-01-28 19:29:55'),
(2, 4, 'So they couldn\'t get them out again.', 'So they couldn\'t get them out ...', NULL, 'Majesty!\' the Duchess by this time, as it didn\'t much matter which way I want to go down--Here, Bill! the master says you\'re to go on. \'And so these three little sisters--they were learning to draw, you know--\' (pointing with his.', '2022-01-30 16:28:02', '2022-01-30 16:28:02'),
(3, 3, 'So she began again: \'Ou.', 'So she began again: \'Ou.', NULL, 'You MUST have meant some mischief, or else you\'d have signed your name like an honest man.\' There was a very fine day!\' said a timid voice at her for a few yards off. The Cat seemed to quiver all over with William the Conqueror.\' (For, with all her riper years, the simple and loving heart of her head down to look about her any.', '2022-01-19 17:21:39', '2022-01-19 17:21:39'),
(4, 1, 'Alice to herself. (Alice had no.', 'Alice to herself. (Alice had n...', NULL, 'Long Tale They were just beginning to think that will be When they take us up and straightening itself out again, so violently, that.', '2022-01-19 02:40:08', '2022-01-19 02:40:08'),
(5, 2, 'FIT you,\' said the.', 'FIT you,\' said the.', NULL, 'I think I could, if I can listen all day to such stuff? Be off, or I\'ll kick you down stairs!\' \'That is not said right,\' said the Mouse, in a soothing tone: \'don\'t be angry about it.', '2022-01-18 03:56:49', '2022-01-18 03:56:49'),
(6, 4, 'Alice in a.', 'Alice in a.', NULL, 'I\'ve finished.\' So they had been broken to pieces. \'Please, then,\' said Alice, swallowing down her anger as well as the rest of my life.\' \'You are old,\'.', '2022-01-24 03:21:51', '2022-01-24 03:21:51'),
(8, 1, 'Lobster; I.', 'Lobster; I.', NULL, 'The Duchess took no notice of her sharp little chin. \'I\'ve a right to think,\' said Alice as she could, \'If you knew Time as well she might, what a dear quiet thing,\' Alice went on, \'and most of \'em do.\' \'I don\'t know what a dear quiet thing,\' Alice went on in the last words out loud, and the soldiers remaining behind.', '2022-02-05 08:50:23', '2022-02-05 08:50:23'),
(9, 4, 'The next thing was.', 'The next thing was.', NULL, 'Will you, won\'t you, won\'t you, won\'t you join the dance. \'\"What matters it how far we go?\" his scaly friend replied. \"There is another shore, you know, upon the other side of the Nile On every golden scale! \'How cheerfully he seems to like her, down here, that I should have croqueted the Queen\'s hedgehog just now, only it ran away when it had entirely.', '2022-01-11 12:02:23', '2022-01-11 12:02:23'),
(10, 1, 'For this must be really.', 'For this must be really.', NULL, 'Pennyworth only of beautiful Soup? Pennyworth only of beautiful Soup? Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Soo--oop of the Nile On every golden scale! \'How cheerfully he seems to like her, down here, and I\'m sure I.', '2022-01-16 13:37:00', '2022-01-16 13:37:00'),
(11, 1, 'I know is, it would be.', 'I know is, it would be.', NULL, 'I see\"!\' \'You might just as if she were looking up into the Dormouse\'s place, and Alice rather unwillingly took the hookah out of the March Hare, who had been looking at them with the birds and animals that had slipped in like herself. \'Would it be of any use, now,\' thought poor Alice, \'to pretend to be lost, as she spoke. \'I.', '2022-01-23 21:04:55', '2022-01-23 21:04:55'),
(12, 2, 'It\'s the most important piece of.', 'It\'s the most important piece ...', NULL, 'And in she went. Once more she found herself in the air: it puzzled her too much, so she tried her best to climb up one of the shepherd boy--and the sneeze of the day; and this Alice would not give all else for two Pennyworth only of beautiful Soup? Beau--ootiful Soo--oop! Soo--oop of the e--e--evening, Beautiful, beautiful Soup!\' CHAPTER XI. Who Stole the Tarts? The King and the.', '2022-01-12 21:10:17', '2022-01-12 21:10:17'),
(13, 2, 'Alice asked.', 'Alice asked.', NULL, 'Soup does very well to introduce some other subject of conversation. \'Are you--are you fond--of--of dogs?\' The Mouse only shook its head impatiently, and walked two and two, as the White Rabbit read:-- \'They told me you had been anxiously looking across the garden, called out \'The race is over!\' and they went up to them to sell,\' the.', '2022-02-02 12:21:22', '2022-02-02 12:21:22'),
(14, 4, 'I could show you our.', 'I could show you our.', NULL, 'I hadn\'t mentioned Dinah!\' she said these words her foot slipped, and in a moment that it was good manners for her to wink with one of the fact. \'I keep them to be talking in his sleep, \'that \"I like.', '2022-01-18 20:49:52', '2022-01-18 20:49:52'),
(15, 3, 'Why, she\'ll eat.', 'Why, she\'ll eat.', NULL, 'How brave they\'ll all think me at home! Why, I wouldn\'t say anything about it, even if my head would go through,\' thought poor Alice, \'to speak to this last remark that had fluttered down.', '2022-01-22 21:22:28', '2022-01-22 21:22:28'),
(16, 4, 'Хэй! Это новый пост!', 'Хэй! Это новый пост!', NULL, 'Да да да!!! Вот он!', '2022-02-21 02:33:22', '2022-02-21 02:33:22'),
(17, 1, 'Еще один новый пост...', 'Еще один новый пост...', '/storage/c2quP0aK7femxAa6d1RQtXk9PhzUQ10zMvkVlsje.jpg', 'Посты выходят в ускоренном темпе! Это прогресс!!!', '2022-02-21 02:35:03', '2022-02-21 02:35:03'),
(19, 4, 'Оу, какой пост', 'Оу, какой пост', '/storage/sY728bierHSRBQHUwqlSy0IPO3yIJjYAHFQVwmTh.jpg', 'А это уже измененный пост! Прогресс! Так еще и с картинкой!', '2022-02-21 18:10:27', '2022-02-21 18:24:55'),
(20, 1, 'Обычный тестовый пост', 'Обычный тестовый пост', NULL, 'Ес оф корс', '2022-02-22 07:44:39', '2022-02-22 07:44:39'),
(21, 3, 'Обычный тестовый пост', 'Обычный тестовый пост', NULL, 'Ес оф корс', '2022-02-22 07:44:40', '2022-02-22 07:44:40'),
(22, 3, 'Самый обычный пост', 'Самый обычный пост', NULL, 'Ну да, это тестовый пост', '2022-02-22 07:45:06', '2022-02-22 07:45:06'),
(23, 1, 'Common post', 'Common post', NULL, 'yes yes xd', '2022-02-22 07:45:26', '2022-02-22 07:45:26'),
(24, 3, 'Energo Glo', 'Energo Glo', NULL, 'Opblodpew32', '2022-02-22 07:54:36', '2022-02-22 07:54:36'),
(25, 3, 'Obloder', 'Obloder', NULL, '3rw3fw3rf23432', '2022-02-22 07:55:03', '2022-02-22 07:55:03'),
(28, 5, 'Ка ка ка', 'Ка ка ка', NULL, 'Да! Новый пост приколен! Очень!', '2022-02-26 21:55:38', '2022-02-26 22:55:48');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` bigint UNSIGNED NOT NULL,
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

INSERT INTO `users` (`user_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Winona Quigley', 'torp.randi@example.org', '2022-02-10 06:56:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'T8AWRfJWla', '2022-02-10 06:56:17', '2022-02-10 06:56:17'),
(2, 'Bernard Swift', 'jarrett13@example.com', '2022-02-10 06:56:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AaafiO5ay8', '2022-02-10 06:56:17', '2022-02-10 06:56:17'),
(3, 'Ray Osinski IV', 'schmitt.theresa@example.com', '2022-02-10 06:56:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BGBVvuOrCr', '2022-02-10 06:56:17', '2022-02-10 06:56:17'),
(4, 'Grover Turner Sr.', 'ogorczany@example.com', '2022-02-10 06:56:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vYyX9dMKmX', '2022-02-10 06:56:17', '2022-02-10 06:56:17'),
(5, 'Dager', 'dag@gmail.com', NULL, '$2y$10$AUYZjhy70vLMirjxWYqVbeHELTJtyDrEpMQBVsPBZxrArvnZOQkra', '7Kb03Dt6YfdDZokvvZohleUcjLaH9Gk7fFZoWOK5pviuq7zFWsW8esFpDfhp', '2022-02-26 19:22:37', '2022-02-26 19:22:37'),
(6, 'Алекс', 'a@a.a', NULL, '$2y$10$cBkiDvO/JDF26LuxPWsEPehlEaLbsc3IbUXHNNyC.SQqRBmoeyygy', 'Al6zb1ZuJinbWSyzX6ggkw5fEXrWbGkYaJznfE2E2AIUPw3psiiakfD3KIZo', '2022-02-26 21:23:09', '2022-02-26 21:23:09'),
(7, 'DagerFild', 'dagerfild@gmail.com', NULL, '$2y$10$hRJOH4r9ywIuamCdsCDju.lP6XRwbibp34Yo2yVQ6q96QdVBXVU2W', NULL, '2022-02-27 00:28:02', '2022-02-27 00:28:02');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `posts_author_id_foreign` (`author_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
