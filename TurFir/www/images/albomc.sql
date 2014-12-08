-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 28 2014 г., 15:55
-- Версия сервера: 5.5.25
-- Версия PHP: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `turfir`
--

-- --------------------------------------------------------

--
-- Структура таблицы `albomc`
--

CREATE TABLE IF NOT EXISTS `albomc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `id_country` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_country` (`id_country`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `albomc`
--

INSERT INTO `albomc` (`id`, `img`, `description`, `id_country`) VALUES
(1, '1401397044-EOGP14.jpg', 'Египет', 1),
(2, 'eg4.jpg', 'Египет', 1),
(3, 'images (1).jpg', 'Египет', 1),
(4, 'images.jpg', 'Египет', 1),
(5, 'P1.jpg', 'Турция', 2),
(6, 'turcija hh.jpg', 'Турция', 2),
(7, 'turkey5.jpg', 'Турция', 2),
(8, 'turkeyHeader.jpg', 'Турция', 2),
(9, '313.jpg', 'Тибет', 3),
(10, '575289485.jpg', 'Тибет', 3),
(11, '1548439708.jpg', 'Тибет', 3),
(12, 'tibet_mount_everest.jpg', 'Тибет', 3),
(13, 'tibet9.jpg', 'Тибет', 3);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `albomc`
--
ALTER TABLE `albomc`
  ADD CONSTRAINT `albomc_ibfk_1` FOREIGN KEY (`id_country`) REFERENCES `country` (`id_country`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
