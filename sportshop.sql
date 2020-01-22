-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 22 2020 г., 17:06
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sportshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `goods_id` int(4) NOT NULL,
  `shirt` int(4) DEFAULT NULL,
  `trainers` int(4) DEFAULT NULL,
  `scooter` int(4) DEFAULT NULL,
  `wheel` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`goods_id`, `shirt`, `trainers`, `scooter`, `wheel`) VALUES
(1, 2, 1, 3, 0),
(2, 2, 4, 2, 6),
(3, 2, 1, 0, 4),
(4, 1, 1, 4, 5),
(5, 21, 41, 13, 7),
(6, 2, 0, 0, 0),
(7, 2, 3, 0, 0),
(8, 12, 1, 0, 0),
(9, 2, 0, 0, 0),
(10, 2, 3, 0, 0),
(11, 1, 0, 0, 0),
(12, 2, 0, 2, 5),
(13, 1, 1, 0, 0),
(14, 2, 3, 0, 0),
(15, 12, 1, 2, 0),
(16, 2, 0, 0, 0),
(17, 2, 0, 0, 0),
(18, 0, 2, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(4) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`orders_id`, `fio`, `address`, `date`) VALUES
(1, 'Иванов Иван Иванович', 'ул. Коммунистическая, д. 118, кв. 45', '2019-12-02 19:31:59'),
(2, 'Иванов Иван Иванович', 'ул. Коммунистическая, д. 118, кв. 45', '2019-12-02 19:36:04'),
(3, 'Иванов Иван Иванович', 'ул. Коммунистическая, д. 118, кв. 45', '2019-12-02 19:38:46'),
(4, 'saf', 'ул. Коммунистическая, д. 118, кв. 45', '2019-12-02 19:39:34'),
(5, 'Сайбель Владимир Андреевич', 'пр. Ленинградский, 21', '2019-12-03 15:17:04'),
(6, 'Иванов Иван Иванович', 'fsdfsd', '2019-12-03 15:17:40'),
(7, 'saf', 'иивапва', '2019-12-03 16:24:46'),
(8, 'Игнатьев', 'Волкова, 25', '2019-12-05 14:56:29'),
(9, 'Игнатьев', 'ваырвыа', '2019-12-05 14:59:31'),
(10, 'Молотов', 'Урицкая, 21', '2019-12-05 15:02:15'),
(11, 'Иванов Иван Иванович', 'ул. Коммунистическая, д. 118, кв. 45', '2019-12-05 15:09:50'),
(12, 'Иванов Иван Иванович', 'ул. Коммунистическая, д. 118, кв. 45', '2019-12-05 15:10:20'),
(13, 'Игнатьев', 'ул. Коммунистическая, д. 118, кв. 45', '2019-12-06 11:33:50'),
(14, 'Игнатьев', 'sdf', '2019-12-06 16:14:45'),
(15, 'sdgsdg', 'sdfsdgsd', '2019-12-08 10:32:04'),
(16, 'sfasfas', 'asfasf', '2019-12-08 10:32:34'),
(17, 'Игнатьев', 'ул. Коммунистическая, д. 118, кв. 45', '2019-12-12 10:38:14'),
(18, 'xото', 'трпаммп', '2019-12-12 10:39:15');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `fio`, `email`, `password`) VALUES
(1, 'admin1', 'Цыбин', 'admin@mail.ru', '$2y$10$YXNuajQyLSgzMmRmJHNAMOHDUpFKaBlxT9Ub8izEHLSe.MZPbaEUq'),
(2, 'admin2', 'asfasg', 'sda@saf', '$2y$10$YXNuajQyLSgzMmRmJHNAMOph0dHndLQz2mYz.ocVFXecAriwB6x3K'),
(3, 'admin3', 'safnasjg', 'sda@saf', '$2y$10$YXNuajQyLSgzMmRmJHNAMO1lbx045mgahMUN3ps2QOn7f..4ELW2u'),
(4, 'admin4', 'sagasdg', 'gsad@saf', '$2y$10$YXNuajQyLSgzMmRmJHNAMOcdgIokN.VK8.j1g7/av5UPGiw/NevAe'),
(5, 'admin5', 'asfas', 'sd@s', '$2y$10$YXNuajQyLSgzMmRmJHNAMOAKqyghR/ibs3i5dSkb/rcnemp8cssxq'),
(6, 'admin6', 'asfasdg', 'asd@s', '$2y$10$YXNuajQyLSgzMmRmJHNAMOYh9VVTAejTC2saZoaz9iFZARkzDZIB.'),
(7, 'admin7', 'safasg', 'sd@s', '$2y$10$YXNuajQyLSgzMmRmJHNAMOwtt3Hst0xBUmopNCjRMl7QSsXAL6A4a'),
(8, 'admin7', 'sad', 'sad@f', '$2y$10$YXNuajQyLSgzMmRmJHNAMOvw0hxLwXM8IFzUvH.bv3Xs/x6/r6ugK'),
(9, 'admin8', 'asdasd', 'sngj@dsg', '$2y$10$YXNuajQyLSgzMmRmJHNAMOHDUpFKaBlxT9Ub8izEHLSe.MZPbaEUq'),
(10, 'admin9', 'saf', 'saf@d', '$2y$10$YXNuajQyLSgzMmRmJHNAMOHDUpFKaBlxT9Ub8izEHLSe.MZPbaEUq'),
(12, 'admin10', 'safas', 'saf@s', '$2y$10$YXNuajQyLSgzMmRmJHNAMOHDUpFKaBlxT9Ub8izEHLSe.MZPbaEUq'),
(13, 'admin11', 'sadasdsad', 'asd12@s', '$2y$10$YXNuajQyLSgzMmRmJHNAMOHDUpFKaBlxT9Ub8izEHLSe.MZPbaEUq'),
(14, 'admin12', 'safasf', 'saf@s', '$2y$10$YXNuajQyLSgzMmRmJHNAMOHDUpFKaBlxT9Ub8izEHLSe.MZPbaEUq'),
(15, 'admin1', 'выпыв', 'saf@s', '$2y$10$YXNuajQyLSgzMmRmJHNAMOHDUpFKaBlxT9Ub8izEHLSe.MZPbaEUq'),
(16, 'admin12', 'safas', 'sa@s', '$2y$10$YXNuajQyLSgzMmRmJHNAMOHDUpFKaBlxT9Ub8izEHLSe.MZPbaEUq'),
(17, 'admin13', 'safasf', 'sad@sd', '$2y$10$YXNuajQyLSgzMmRmJHNAMOHDUpFKaBlxT9Ub8izEHLSe.MZPbaEUq'),
(18, 'admin1', 'asf', 'sa@s', '$2y$10$YXNuajQyLSgzMmRmJHNAMOHDUpFKaBlxT9Ub8izEHLSe.MZPbaEUq'),
(19, 'admin14', 'asfas', 'sa@s', '$2y$10$YXNuajQyLSgzMmRmJHNAMOHDUpFKaBlxT9Ub8izEHLSe.MZPbaEUq'),
(20, 'admin1', 'asdasf', 'saf@s', '$2y$10$YXNuajQyLSgzMmRmJHNAMOHDUpFKaBlxT9Ub8izEHLSe.MZPbaEUq'),
(21, 'admin1', 'asf', 'saf@s', '$2y$10$YXNuajQyLSgzMmRmJHNAMOHDUpFKaBlxT9Ub8izEHLSe.MZPbaEUq'),
(22, 'admin1', 'asfas', 'saf@s', '$2y$10$YXNuajQyLSgzMmRmJHNAMOHDUpFKaBlxT9Ub8izEHLSe.MZPbaEUq'),
(23, 'admin1', 'sagas', 'sd@s', '$2y$10$YXNuajQyLSgzMmRmJHNAMOHDUpFKaBlxT9Ub8izEHLSe.MZPbaEUq'),
(24, 'admin15', 'asfasf', '0', '$2y$10$YXNuajQyLSgzMmRmJHNAMOHDUpFKaBlxT9Ub8izEHLSe.MZPbaEUq'),
(25, 'admin17', 'asdasdasd', '0', '$2y$10$YXNuajQyLSgzMmRmJHNAMOHDUpFKaBlxT9Ub8izEHLSe.MZPbaEUq'),
(26, 'admin18', 'asdasd', 'as@safas', '$2y$10$YXNuajQyLSgzMmRmJHNAMOHDUpFKaBlxT9Ub8izEHLSe.MZPbaEUq'),
(27, 'admin20', 'sdgfsd', 'sf@svfdv', '$2y$10$YXNuajQyLSgzMmRmJHNAMOkc5Ky4B.sxpzT4qeuRd0A0KkF5MuCm.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`goods_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `goods_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
