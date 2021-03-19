-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 19 2021 г., 14:07
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dobrodel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `request-categories`
--

CREATE TABLE `request-categories` (
  `id` int NOT NULL,
  `category-name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `request-categories`
--

INSERT INTO `request-categories` (`id`, `category-name`) VALUES
(1, 'Уборка мусора'),
(2, 'Покраска стен'),
(3, 'Спасение бабушек');

-- --------------------------------------------------------

--
-- Структура таблицы `request-statuses`
--

CREATE TABLE `request-statuses` (
  `id` int NOT NULL,
  `status-name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `request-statuses`
--

INSERT INTO `request-statuses` (`id`, `status-name`) VALUES
(1, 'Новая'),
(2, 'Решена'),
(3, 'Отклонена');

-- --------------------------------------------------------

--
-- Структура таблицы `requests`
--

CREATE TABLE `requests` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `create-date` datetime NOT NULL,
  `photo-before` longtext,
  `photo-after` longtext,
  `decline-text` varchar(255) DEFAULT NULL,
  `category` int NOT NULL,
  `status` int NOT NULL,
  `user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `requests`
--

INSERT INTO `requests` (`id`, `name`, `description`, `create-date`, `photo-before`, `photo-after`, `decline-text`, `category`, `status`, `user`) VALUES
(1, 'Покраска стен на поликлинике', 'Покраска стен на поликлинике ПокраПокраска стен на поликлиникеПокраска стен на поликлиникеска стен на поликлинике Покраска стен на поликлинике Покраска стен на поликлинике Покраска стен на поликлинике Покраска стен на поликлинике Покраска стен на поликлиникеПокраска стен на поликлиникеПокраска стен на поликлиникеПокраска стен на поликлинике Покраска стен на поликлинике Покраска стен на поликлинике Покраска стен на поликлинике Покраска стен на поликлинике Покраска стен на поликлинике Покраска стен на поликлинике Покраска стен на поликлинике Покраска стен на поликлинике', '2021-03-17 09:37:30', 'https://www.miloserdie.ru/special/krasota_bolniz/images/f5a85ea1-0804-4ddd-b8be-7079197877fe__begemotopis2.jpg', 'https://stocvet.net/upload/iblock/0f9/0f96d7e21b253e455842a8fcb5174ef3.jpg', NULL, 2, 2, 2),
(2, 'Уборка мусора на улице колотушкина', 'Уборка мусора на улице колотушкина Уборка мусора на улице колотушкина Уборка мусора на улице колотушкинаУборка мусора на улице колотушкинаУборка мусора на улице колотушкина Уборка мусора на улице колотушкина Уборка мусора на улице колотушкинаУборка мусора на улице колотушкинаУборка мусора на улице колотушкина Уборка мусора на улице колотушкина Уборка мусора на улице колотушкинаУборка мусора на улице колотушкина Уборка мусора на улице колотушкинаУборка мусора на улице колотушкинаУборка мусора на улице колотушкина Уборка мусора на улице колотушкина Уборка мусора на улице колотушкина Уборка мусора на улице колотушкина', '2021-03-15 09:37:30', 'https://lh3.googleusercontent.com/proxy/p0LMJ2anGPrvX7c4HgGRh0HejCd3PUtKxP1g3UD2UAWeSAltqh1Snrwwe2D4EX3dw9WsZEuLUCChKNNFc6T-qsr0dPLjxwymYcdlOONHOomX0ILFAbxBRyaDIVC0h-9V8NQq5aeulgQJAhXl513VeRcBQjE', 'https://flot.gazprom.ru/d/textpage/80/128/img_5730.jpg', 'Неа, не будем убирать', 1, 2, 2),
(3, 'Спасите бабушку на пешеходном', 'Спасите бабушку на пешеходном Спасите бабушку на пешеходномСпасите бабушку на пешеходномСпасите бабушку на пешеходномСпасите бабушку на пешеходномСпасите бабушку на пешеходномСпасите бабушку на пешеходноммСпасите бабушку на пешеходномСпасите бабушку на пешеходномСпасите бабушку на пешеходном Спасите бабушку на пешеходномСпасите бабушку на пешеходномСпасите бабушку на пешеходномСпасите бабушку на пешеходномСпасите бабушку на пешеходномСпасите бабушку на пешеходном Спасите бабушку на пешеходномСпасите бабушку на пешеходномСпасите бабушку на пешеходномСпасите бабушку на пешеходномСпасите бабушку на пешеходном Спасите бабушку на пешеходномСпасите бабушку на пешеходном Спасите бабушку на пешеходном Спасите бабушку на пешеходном Спасите бабушку на пешеходномСпасите бабушку на пешеходном Спасите бабушку на пешеходномСпасите бабушку на пешеходном ', '2021-03-20 09:40:31', 'https://prokazan.ru/userfiles/picarticle/img-20200218154634-322.jpg', NULL, '', 3, 1, 3),
(7, 'название', 'описание', '2021-03-17 11:02:25', '$img', NULL, NULL, 1, 1, 1),
(8, 'название', 'описание', '2021-03-17 11:04:43', 'image/jpg;base,64', NULL, NULL, 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fio` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fio`, `login`, `email`, `password`, `role`) VALUES
(1, 'Администратор', 'admin', 'email@mail.ru', 'adminWSR', 1),
(2, 'Иванов Иван Иванович', 'ivanov', '@mail.ru', 'ivanovPass', 0),
(3, 'Петров Петр Петрович', 'petrov', 'petrov@mail.ru', 'petrovPass', 0),
(4, 'Дебилов Дебил Дебилович', 'debil', 'debil@mail.ru', 'debilPass', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `request-categories`
--
ALTER TABLE `request-categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `request-statuses`
--
ALTER TABLE `request-statuses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`),
  ADD KEY `category` (`category`),
  ADD KEY `status` (`status`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `request-categories`
--
ALTER TABLE `request-categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `request-statuses`
--
ALTER TABLE `request-statuses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requests_ibfk_2` FOREIGN KEY (`category`) REFERENCES `request-categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requests_ibfk_3` FOREIGN KEY (`status`) REFERENCES `request-statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
