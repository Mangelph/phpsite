-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 26 2024 г., 08:55
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `clothes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `id` int NOT NULL,
  `senderfName` varchar(50) NOT NULL,
  `senderlName` varchar(50) DEFAULT NULL,
  `sendereMail` varchar(100) NOT NULL,
  `senderfeedback` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `feedbacktable`
--

INSERT INTO `feedbacktable` (`id`, `senderfName`, `senderlName`, `sendereMail`, `senderfeedback`) VALUES
(5, 'Alex', 'Dikkens', '', 'sdggdg');

-- --------------------------------------------------------

--
-- Структура таблицы `franchase`
--

CREATE TABLE `franchase` (
  `id` int NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `sname` varchar(40) DEFAULT NULL,
  `company` varchar(40) DEFAULT NULL,
  `position` varchar(40) DEFAULT NULL,
  `country` varchar(40) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `category` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cost` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descr` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sex` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `garanty` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `S` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `M` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `L` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `XL` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `XXL` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `art` int DEFAULT NULL,
  `grid` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `category`, `name`, `cost`, `descr`, `sex`, `garanty`, `country`, `S`, `M`, `img`, `L`, `XL`, `XXL`, `art`, `grid`) VALUES
(1, 'Термобельё', 'Термокофта мужская/детская SECO Super Space Pro', '11.22', 'Термобелье SECO Super Space Pro предназначено для тренировок и активного отдыха в холодное время года. Изготовлен из биэластического материала Space Pro, комфортно растягивающегося в двух направлениях: в длину и ширину. Мягкий на ощупь материал обеспечивает хорошую терморегуляцию и быстрый отвод влаги. Лицевая сторона гладкая, обратная – имеет небольшой начес.', 'Мужской', '180', 'Германия', '4', '7', 'img/tovar1.jpg\n', '3', '2', '5', 836742, 'img/grid1.png'),
(2, 'Термобельё', 'Термоштаны мужские/детские SECO Super Space Pro ', '10.99', 'Термобелье SECO Super Space Pro предназначено для тренировок и активного отдыха в холодное время года. Изготовлен из биэластического материала Space Pro, комфортно растягивающегося в двух направлениях: в длину и ширину. Мягкий на ощупь материал обеспечивает хорошую терморегуляцию и быстрый отвод влаги. Лицевая сторона гладкая, обратная – имеет небольшой начес. ', 'Мужской', '180', 'Германия', '5', '5', 'img/tovar2.jpg', '2', '5', '7', 234567, 'img/grid1.png'),
(3, 'Термобельё', 'Термобелье футболка с длинным рукавом Kelme TEAM', '14.99', 'Термобелье футболка с длинным рукавом Kelme TEAM K15Z734.9100 детское цвет: белый терморегулирующая футболка от испанского бренда. Это незаменимый атрибут для занятий спортом в холодный период времени. Модель прямого кроя с длинным рукавом. Состав: 90% полиэстер, 10% спандекс. ', 'Мужской', '120', 'Испания', '6', '8', 'img/tovar3.jpg', '5', '7', '5', 345678, 'img/grid1.png'),
(4, 'Термобельё', 'Термобелье футболка с длинным рукавом мужская', '11.79', 'Футболка с длинным рукавом мужская цвет: черный, отлично решение для тренировок и повседневной носки. Согревает в мороз и отводят влагу в теплом помещении. Плотно облегают фигуру, поэтому не заметны под одеждой. Сезон: зима. Посадка классическая. Состав: 62%полиэстр, 32%вискоза, 6%эластан ', 'Мужской', '200', 'США', '8', '2', 'img/tovar4.jpg', '6', '4', '8', 456789, 'img/grid1.png'),
(5, 'Термобельё', 'Термобелье Nike PARK FIRST LAYER Long Sleeve AV2609-057 ', '12.99', 'Термобелье Nike PARK FIRST LAYER Long Sleeve - идеальный выбор для интенсивных тренировок.  Модель отлично сохраняет тепло и не ограничивает возможности.  Технология Dri-FIT позволяет коже спортсмена во время занятий находиться в сухих, комфортных условиях.  Плоские, эргономичные швы исключают натирание.  Футболка имеет длинные рукава и удобную круглую горловину.  Предусмотрены невидимые отверстия для большого пальца. Бесшовная конструкция рукава, предотвращает дискомфорт и натирание во время игр и тренировок. Термокофту можно носить как нижнее бельё, одевая сверху боле теплую одежду для тренировок в прохладную погоду и как самостоятельную часть одежды.  Состав материала: 100% полиэстер. ', 'Мужской', '150', 'США', '9', '4', 'img/tovar5.jpg', '7', '8', '6', 567890, 'img/grid1.png'),
(6, 'Термобельё', 'Термобелье Nike Dry Park First Layer LS', '16.99', 'Термобелье Nike PARK FIRST LAYER Long Sleeve - идеальный выбор для интенсивных тренировок.  Модель отлично сохраняет тепло и не ограничивает возможности.  Технология Dri-FIT позволяет коже спортсмена во время занятий находиться в сухих, комфортных условиях.  Плоские, эргономичные швы исключают натирание.  Футболка имеет длинные рукава и удобную круглую горловину.  Предусмотрены невидимые отверстия для большого пальца.  Бесшовная конструкция рукава, предотвращает дискомфорт и натирание во время игр и тренировок. Термокофту можно носить как нижнее бельё, одевая сверху боле теплую одежду для тренировок в прохладную погоду и как самостоятельную часть одежды.  Состав материала: 100% полиэстер.', 'Мужской', '110', 'США', '5', '5', 'img/tovar6.jpg', '8', '4', '9', 678901, 'img/grid1.png'),
(7, 'Термобельё', 'Термобелье Adidas TECHFIT COMPRESSION LS GU7339', '14.99', 'Термобелье Adidas TECHFIT COMPRESSION LS GU7339. Компрессионная посадка поддерживает динамичные движения, когда вы продвигаетесь вперед на тренировочном поле. Влагопоглощающий материал AEROREADY и сетчатая задняя панель гарантируют, что вы будете оставаться свежими, пока тренер не призовет время. Влагопоглощающий материал. Круглый вырез. Длинные рукова. Откидной подол. Основная часть: 88 % переработанный полиэстер, 12 % эластан. Задняя вставка и ластовицы на рукавах: 92 % переработанный полиэстер, 8 % эластановая сетка. ', 'Мужской', '130', 'Германия', '4', '4', 'img/tovar7.jpg', '9', '9', '3', 789012, 'img/grid1.png'),
(8, 'Термобельё', 'Термобелье Joma BRAMA ACADEMY 101018.450', '20.99', 'Термобелье Joma BRAMA ACADEMY – это прекрасный пример симбиоза совершенных технологий и комфорта в спортивной одежде.\nМодель выполнена из легкого эластичного материала с дышащей структурой с применением технологиии DRY-MX.\nМатериал обладает водоотталкивающим эффектом, и в то же время, он хорошо пропускает воздух.\nРисунок и форма волокон ткани термобелья создана таким образом, чтобы облегчить вентиляцию и проветривание в особенно нуждающихся в этом местах.\nФутболка выполнена без применения формообразующих швов, обеспечивает максимальный комфорт во время носки, имеет облегающий крой.\nКомпрессионная футболка отлично фиксирует мышцы, снижая уровень их вибрации, что позволяет повысить эффективность занятий спортом при малых затратах энергии.\nМатериал: 90% полиэстер, 10% эластан.', 'Мужской', '100', 'Испания', '6', '5', 'img/tovar8.jpg', '8', '2', '4', 890123, 'img/grid1.png');

-- --------------------------------------------------------

--
-- Структура таблицы `kategories`
--

CREATE TABLE `kategories` (
  `id` int NOT NULL,
  `img` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descr` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `kategories`
--

INSERT INTO `kategories` (`id`, `img`, `title`, `descr`) VALUES
(1, 'img/class1.png', 'Термобельё', 'Актуальный ассортимент термобелья в магазине'),
(2, 'img/class2.png', 'Спортивные костюмы', 'Актуальный ассортимент спортивных костюмов в магазине'),
(3, 'img/class3.png', 'Спортивные кофты', 'Актуальный ассортимент спортивных кофт в магазине'),
(4, 'img/class4.png', 'Спортивные футболки', 'Актуальный ассортимент спортивных футболок в магазине'),
(5, 'img/class5.png', 'Спортивные штаны', 'Актуальный ассортимент спортивных штанов в магазине'),
(6, 'img/class6.png', 'Спортивные шорты', 'Актуальный ассортимент спортивных шорт в магазине');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `username` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `size` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `username`, `product`, `price`, `size`) VALUES
(20, 'user1', 'Термобелье футболка с длинным рукавом мужская', '11.79', 'XL'),
(21, 'user1', 'Термобелье Nike PARK FIRST LAYER Long Sleeve AV2609-057 ', '12.99', 'M'),
(22, 'user1', 'Термобелье Joma BRAMA ACADEMY 101018.450', '20.99', 'XL');

-- --------------------------------------------------------

--
-- Структура таблицы `readyorder`
--

CREATE TABLE `readyorder` (
  `id` int NOT NULL,
  `products` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `lname`, `password`, `country`) VALUES
(15, 'user1', 'Maks', 'sgds', 'user1', 'Україна');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `msgID` (`id`);

--
-- Индексы таблицы `franchase`
--
ALTER TABLE `franchase`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `kategories`
--
ALTER TABLE `kategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `movieID` (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `readyorder`
--
ALTER TABLE `readyorder`
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
-- AUTO_INCREMENT для таблицы `feedbacktable`
--
ALTER TABLE `feedbacktable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `franchase`
--
ALTER TABLE `franchase`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `kategories`
--
ALTER TABLE `kategories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `readyorder`
--
ALTER TABLE `readyorder`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
