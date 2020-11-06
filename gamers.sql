-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Ноя 06 2020 г., 22:35
-- Версия сервера: 8.0.19
-- Версия PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gamers`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `tovar_id` int NOT NULL,
  `author` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int NOT NULL DEFAULT '0',
  `img` text NOT NULL,
  `main_img` text NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `info` text NOT NULL,
  `stock` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `title`, `price`, `img`, `main_img`, `img1`, `img2`, `img3`, `info`, `stock`) VALUES
(23, 'HITMAN', 16, 'simhit.png', 'galler2.jpg', 'assasinsm1.jpg', 'assasinsm2.jpg', 'assasinsm3.jpg', 'The plot is set in a fictional history of real world events and follows the centuries-old struggle between the Assassins, who fight for peace with free will, and the Templars, who desire peace through control. The story is set in the mid-18th century during the Seven Years\' War, and follows Shay Patrick Cormac, an Assassin-turned-Templar who hunts down former members of his Brotherhood after being betrayed by them. Gameplay in Rogue is very similar to that of Black Flag with a mixture of ship-based naval exploration and third-person land-based exploration with some new features.', 5),
(24, 'Call Of Duty', 15, 'galcallofd.png', 'aboutimg.jpg', 'assasinsm1.jpg', 'assasinsm2.jpg', 'assasinsm3.jpg', 'The plot is set in a fictional history of real world events and follows the centuries-old struggle between the Assassins, who fight for peace with free will, and the Templars, who desire peace through control. The story is set in the mid-18th century during the Seven Years\' War, and follows Shay Patrick Cormac, an Assassin-turned-Templar who hunts down former members of his Brotherhood after being betrayed by them. Gameplay in Rogue is very similar to that of Black Flag with a mixture of ship-based naval exploration and third-person land-based exploration with some new features.', 10),
(25, 'World Of Tanks', 13, 'galwoft.png', 'aboutimg.jpg', 'assasinsm1.jpg', 'assasinsm2.jpg', 'assasinsm3.jpg', 'The plot is set in a fictional history of real world events and follows the centuries-old struggle between the Assassins, who fight for peace with free will, and the Templars, who desire peace through control. The story is set in the mid-18th century during the Seven Years\' War, and follows Shay Patrick Cormac, an Assassin-turned-Templar who hunts down former members of his Brotherhood after being betrayed by them. Gameplay in Rogue is very similar to that of Black Flag with a mixture of ship-based naval exploration and third-person land-based exploration with some new features.', 9),
(26, 'Tomb Rider', 13, 'tombrider.jpg', 'aboutimg.jpg', 'assasinsm1.jpg', 'assasinsm2.jpg', 'assasinsm3.jpg', 'The plot is set in a fictional history of real world events and follows the centuries-old struggle between the Assassins, who fight for peace with free will, and the Templars, who desire peace through control. The story is set in the mid-18th century during the Seven Years\' War, and follows Shay Patrick Cormac, an Assassin-turned-Templar who hunts down former members of his Brotherhood after being betrayed by them. Gameplay in Rogue is very similar to that of Black Flag with a mixture of ship-based naval exploration and third-person land-based exploration with some new features.', 7),
(27, 'BATTLEFIELD 1', 10, 'galbattfield1.png', 'galler2.jpg', 'assasinsm1.jpg', 'assasinsm2.jpg', 'assasinsm3.jpg', 'The plot is set in a fictional history of real world events and follows the centuries-old struggle between the Assassins, who fight for peace with free will, and the Templars, who desire peace through control. The story is set in the mid-18th century during the Seven Years\' War, and follows Shay Patrick Cormac, an Assassin-turned-Templar who hunts down former members of his Brotherhood after being betrayed by them. Gameplay in Rogue is very similar to that of Black Flag with a mixture of ship-based naval exploration and third-person land-based exploration with some new features.', 10),
(32, 'Ryse', 10, 'ryse.jpg', 'aboutimg.jpg', '', '', '', 'dfgfdsvfvdfd', 3),
(35, 'Assassins CREED', 12, 'Assasin.jpg', 'aboutimg.jpg', 'assasinsm3.jpg', 'assasinsm2.jpg', 'assasinsm1.jpg', 'sdASDd\r\nsfdvzsvd', 5),
(37, 'Battlefront', 16, 'galbatfr.png', 'aboutimg.jpg', 'assasinsm1.jpg', 'assasinsm2.jpg', 'assasinsm3.jpg', 'dfsdzfsdfsf', 5),
(101, 'HITMAN', 16, 'simhit.png', 'galler2.jpg', 'assasinsm1.jpg', 'assasinsm2.jpg', 'assasinsm3.jpg', 'The plot is set in a fictional history of real world events and follows the centuries-old struggle between the Assassins, who fight for peace with free will, and the Templars, who desire peace through control. The story is set in the mid-18th century during the Seven Years\' War, and follows Shay Patrick Cormac, an Assassin-turned-Templar who hunts down former members of his Brotherhood after being betrayed by them. Gameplay in Rogue is very similar to that of Black Flag with a mixture of ship-based naval exploration and third-person land-based exploration with some new features.', 5),
(102, 'Call Of Duty', 15, 'galcallofd.png', 'aboutimg.jpg', 'assasinsm1.jpg', 'assasinsm2.jpg', 'assasinsm3.jpg', 'The plot is set in a fictional history of real world events and follows the centuries-old struggle between the Assassins, who fight for peace with free will, and the Templars, who desire peace through control. The story is set in the mid-18th century during the Seven Years\' War, and follows Shay Patrick Cormac, an Assassin-turned-Templar who hunts down former members of his Brotherhood after being betrayed by them. Gameplay in Rogue is very similar to that of Black Flag with a mixture of ship-based naval exploration and third-person land-based exploration with some new features.', 10),
(103, 'World Of Tanks', 13, 'galwoft.png', 'aboutimg.jpg', 'assasinsm1.jpg', 'assasinsm2.jpg', 'assasinsm3.jpg', 'The plot is set in a fictional history of real world events and follows the centuries-old struggle between the Assassins, who fight for peace with free will, and the Templars, who desire peace through control. The story is set in the mid-18th century during the Seven Years\' War, and follows Shay Patrick Cormac, an Assassin-turned-Templar who hunts down former members of his Brotherhood after being betrayed by them. Gameplay in Rogue is very similar to that of Black Flag with a mixture of ship-based naval exploration and third-person land-based exploration with some new features.', 9),
(104, 'Tomb Rider', 13, 'tombrider.jpg', 'aboutimg.jpg', 'assasinsm1.jpg', 'assasinsm2.jpg', 'assasinsm3.jpg', 'The plot is set in a fictional history of real world events and follows the centuries-old struggle between the Assassins, who fight for peace with free will, and the Templars, who desire peace through control. The story is set in the mid-18th century during the Seven Years\' War, and follows Shay Patrick Cormac, an Assassin-turned-Templar who hunts down former members of his Brotherhood after being betrayed by them. Gameplay in Rogue is very similar to that of Black Flag with a mixture of ship-based naval exploration and third-person land-based exploration with some new features.', 7),
(105, 'BATTLEFIELD 1', 10, 'galbattfield1.png', 'galler2.jpg', 'assasinsm1.jpg', 'assasinsm2.jpg', 'assasinsm3.jpg', 'The plot is set in a fictional history of real world events and follows the centuries-old struggle between the Assassins, who fight for peace with free will, and the Templars, who desire peace through control. The story is set in the mid-18th century during the Seven Years\' War, and follows Shay Patrick Cormac, an Assassin-turned-Templar who hunts down former members of his Brotherhood after being betrayed by them. Gameplay in Rogue is very similar to that of Black Flag with a mixture of ship-based naval exploration and third-person land-based exploration with some new features.', 10),
(106, 'Ryse', 10, 'ryse.jpg', 'aboutimg.jpg', '', '', '', 'dfgfdsvfvdfd', 3),
(107, 'Assassins CREED', 12, 'Assasin.jpg', 'aboutimg.jpg', 'assasinsm3.jpg', 'assasinsm2.jpg', 'assasinsm1.jpg', 'sdASDd\r\nsfdvzsvd', 5),
(108, 'Battlefront', 16, 'galbatfr.png', 'aboutimg.jpg', 'assasinsm1.jpg', 'assasinsm2.jpg', 'assasinsm3.jpg', 'dfsdzfsdfsf', 5),
(109, 'Assassins CREED', 12, 'Assasin.jpg', 'aboutimg.jpg', 'assasinsm3.jpg', 'assasinsm2.jpg', 'assasinsm1.jpg', 'sdASDd\r\nsfdvzsvd', 5),
(110, 'Battlefront', 16, 'galbatfr.png', 'aboutimg.jpg', 'assasinsm1.jpg', 'assasinsm2.jpg', 'assasinsm3.jpg', 'dfsdzfsdfsf', 5),
(111, 'HITMAN', 16, 'simhit.png', 'galler2.jpg', 'assasinsm1.jpg', 'assasinsm2.jpg', 'assasinsm3.jpg', 'The plot is set in a fictional history of real world events and follows the centuries-old struggle between the Assassins, who fight for peace with free will, and the Templars, who desire peace through control. The story is set in the mid-18th century during the Seven Years\' War, and follows Shay Patrick Cormac, an Assassin-turned-Templar who hunts down former members of his Brotherhood after being betrayed by them. Gameplay in Rogue is very similar to that of Black Flag with a mixture of ship-based naval exploration and third-person land-based exploration with some new features.', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `tov_id` varchar(255) NOT NULL,
  `user_id` int NOT NULL DEFAULT '45',
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'admin',
  `quant` int NOT NULL DEFAULT '0',
  `ordered` int NOT NULL COMMENT '1 - куплено;\r\n0 - не куплено;'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `tov_id`, `user_id`, `email`, `quant`, `ordered`) VALUES
(105, '23', 45, 'test@test.com', 7, 0),
(106, '27', 45, 'test@test.com', 5, 0),
(108, '32', 45, 'test@test.com', 1, 0),
(125, '37', 45, 'admin@gamers.com', 1, 0),
(126, '35', 45, 'admin@gamers.com', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `role` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `tel`, `login`, `pass`, `role`) VALUES
(45, 'admin', 'admin@gamers.com', '', 'admin', '8zxc6543vbfdse21232f297a57a5a743894a0e4a801fc38zxc6543vbfdse', 1),
(56, 'test', 'test@test.com', '123456789', 'test', '8zxc6543vbfdse098f6bcd4621d373cade4e832627b4f68zxc6543vbfdse', 0),
(67, 'test', 'test@test.ru', 'test', 'test', '8zxc6543vbfdse098f6bcd4621d373cade4e832627b4f68zxc6543vbfdse', 0),
(68, '1', 'aa@aa.ru', '12', '212', '8zxc6543vbfdsec20ad4d76fe97759aa27a0c99bff67108zxc6543vbfdse', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
