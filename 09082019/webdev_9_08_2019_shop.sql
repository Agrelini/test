-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 09 2019 г., 20:57
-- Версия сервера: 10.1.35-MariaDB
-- Версия PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `webdev_9_08_2019_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalogs`
--

CREATE TABLE `catalogs` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalogs`
--

INSERT INTO `catalogs` (`id`, `name`) VALUES
(1, 'Мужчинам'),
(2, 'Женщинам'),
(3, 'Детям');

-- --------------------------------------------------------

--
-- Структура таблицы `catalogs_products`
--

CREATE TABLE `catalogs_products` (
  `id` int(11) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalogs_products`
--

INSERT INTO `catalogs_products` (`id`, `catalog_id`, `product_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 2, 4),
(5, 1, 5),
(6, 2, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `text` text NOT NULL,
  `sku` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `pic`, `price`, `text`, `sku`) VALUES
(1, 'Синяя куртка', '/images/catalog/1.jpg', 2000, 'Синяя куртка - описание', '123qwe456'),
(2, 'Зеленая куртка', '/images/catalog/2.jpg', 3000, 'Зеленая куртка - описание', '321ewq654'),
(3, 'Серые женские кеды', '/images/catalog/7.jpg', 1500, 'Серые женские кеды - описание', '098poi765'),
(4, 'Женская кожаная куртка', '/images/catalog/4.jpg', 5000, 'Женская кожаная куртка теплая и красивая', '567rty098'),
(5, 'Джинсы мужские синие', '/images/catalog/12.jpg', 2000, 'Джинсы мужские синие пуленепробиваемые', 'asd123dsa'),
(6, 'Джинсы женские', '/images/catalog/11.jpg', 3000, 'Самые модные джинсы на районе', 'fgh567lkj');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `catalogs_products`
--
ALTER TABLE `catalogs_products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `catalogs_products`
--
ALTER TABLE `catalogs_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
