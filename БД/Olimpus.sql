-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Лют 07 2018 р., 16:00
-- Версія сервера: 5.5.53
-- Версія PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `Olimpus`
--

-- --------------------------------------------------------

--
-- Структура таблиці `abonement`
--

CREATE TABLE `abonement` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abonement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_months` int(11) UNSIGNED DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `abonement`
--

INSERT INTO `abonement` (`id`, `name`, `number`, `abonement`, `number_of_months`, `price`, `start_date`, `end_date`) VALUES
(1, 'Женя', '073-4846-755', 'ВЕЧІРНІЙ', 4, '1600 гривень', '24.06.2017', '24.10.2017');

-- --------------------------------------------------------

--
-- Структура таблиці `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abonement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_months` int(11) UNSIGNED DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `number`, `abonement`, `number_of_months`, `price`, `start_date`, `end_date`) VALUES
(1, 'Женя', 'djek678@mail.ru', '073-4846-755', 'ВЕЧІРНІЙ', 4, '1600 гривень', '24.06.2017', '24.10.2017');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`) VALUES
(1, 'Женя', 'djek', 'djek678@mail.ru', '$2y$10$keBUZi/kcbN9Rwv6seqljOcONFCfvaFk6UbHKeJojQ7ii2n5PKAZm'),
(2, 'Женя', 'djek678', 'djek67890@mail.ru', '$2y$10$Fe6QeA7ejt2KDCmAcO4y.O1rFRH9Xi.CYpRoEvpOAJhJ7qHSyDwqe'),
(3, 'lalka', 'llllll', 'hjjk@mail.ru', '$2y$10$K6k8IrEzyQckHkNMSN02wOoBWuwE.akUH/CAJAPSswEuVonINd2GW');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `abonement`
--
ALTER TABLE `abonement`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `abonement`
--
ALTER TABLE `abonement`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблиці `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
