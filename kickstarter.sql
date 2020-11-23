-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 20 2020 г., 12:02
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kickstarter`
--

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `goal` varchar(1000) NOT NULL,
  `donated` varchar(1000) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `user` varchar(1000) NOT NULL,
  `place` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `goal`, `donated`, `img`, `user`, `place`) VALUES
(1, 'P\'achakuna', 'Strategic 2 player game with a unique, modular board – Original Bolivian bags included', '153,685', '123123135591', 'img/2.png', 'Tabletop Games\r\n', 'Zug, Switzerland'),
(2, 'Aqua garden - Become an owner of an aquarium 1-4 players', 'Let\'s create a cute aquarium for the public. Visit the aquatic fair to buy more fish for your collection.', '58,976\r\n', '1412427079', 'img/1.jpg', 'uchibacoya', 'Ibusuki-shi, Japan'),
(12, 'sffssf sffssf', 'sffssfsffssf sffssf', '123000$', '0', '1.jpg', '', 'Yakutsk, Russia'),
(14, '324324', '324324324 323432 4', '123000$', '0', '1.jpg', 'inso', 'inso'),
(15, '3434', '32434 434 23', '123000$', '0', '1.jpg', 'inso', 'Yakutsk, Russia');

-- --------------------------------------------------------

--
-- Структура таблицы `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `login` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `nickname` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `register`
--

INSERT INTO `register` (`id`, `login`, `name`, `nickname`, `password`, `place`) VALUES
(1, '1@mail.ru', 'Alexeev Nikita', 'inso', '123445', 'Yakutsk, Russia');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
