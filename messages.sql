-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 27 2022 г., 19:51
-- Версия сервера: 10.5.11-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `smtchfeedback`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(17) NOT NULL,
  `communication_type` varchar(7) NOT NULL,
  `convenient_time` varchar(13) NOT NULL,
  `message` varchar(255) NOT NULL,
  `mailing` varchar(3) NOT NULL,
  `filepath` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `telephone`, `communication_type`, `convenient_time`, `message`, `mailing`, `filepath`) VALUES
(1, 'Ilya', 'litvinov374@gmail.com', '+7 (903)234-23-45', 'Телефон', 'Только вечер', 'Здравствуйте, до свидания!', 'Да', NULL),
(2, 'Bob', 'bo23@gmail.com', '+7 (234)543-34-56', 'Почта', 'Круглосуточно', 'I like movies!', 'Нет', NULL),
(5, 'Илья', 'litvinov456@gmail.com', '+7 (456)324-45-76', 'Почта', 'Только вечер', 'asdasdasda', 'Да', NULL),
(6, 'test', 'test@gmail.com', '+7 (456)324-46-56', 'Телефон', 'Круглосуточно', 'test', 'Нет', NULL),
(7, 'Олег', 'olesha@mail.ru', '+7 (982)456-32-65', 'Почта', 'Только вечер', 'Ahahah', 'Да', NULL),
(8, 'Олег', 'olesha@mail.ru', '+7 (982)456-32-65', 'Почта', 'Только вечер', 'Ahahah', 'Да', NULL),
(9, 'asd', 'asd@gmail.com', '+7 (324)324-56-56', 'Телефон', 'Только вечер', 'sadasdasd', 'Нет', NULL),
(16, 'asdas', 'asdas@gmail.com', '545645454', 'Почта', 'Круглосуточно', 'asdasdasd', '', NULL),
(17, 'Олег', 'olegds@gmail.com', '+7 (903)234-45-45', 'Почта', 'Круглосуточно', 'What did u say about my momma?', 'Да', NULL),
(18, 'werfsdfsdf', 'dsfsadfsdfsdf@gmail.com', '876546549498', 'Телефон', 'Круглосуточно', 'ergfdfsgdfgdfhg', '', NULL),
(19, 'FSDvsdfg', 'sdafsadf@gmail.com', '8465465465', 'Телефон', 'Круглосуточно', 'asfasdfsadf', '', NULL),
(20, 'Татьяна', 'fghfg@gmail.com', '+7 (903)456-65-43', 'Почта', 'Только вечер', 'Я люблю поезда.', 'Да', NULL),
(21, 'Oleg', 'marshal@gmail.ru', '+7 (903)234-45-54', 'Телефон', 'Только вечер', 'What did u say?', 'Да', NULL),
(22, 'asdas', 'asdasd@gmail.com', '+7 (905)234-45-87', 'Почта', 'Круглосуточно', 'asdasd', 'Нет', NULL),
(23, 'asdas', 'asdasd@gmail.com', '+7 (905)234-45-87', 'Почта', 'Круглосуточно', 'asdasd', 'Нет', NULL),
(24, 'ghfg', 'fghf@gmail.com', '+7 (435)234-65-33', 'Телефон', 'Только вечер', 'fgjhfghgf', 'Нет', NULL),
(25, 'fghfgh', 'fghfgh@gmail.com', '+7 (456)345-67-87', 'Почта', 'Только вечер', 'asdasdasd', 'Да', NULL),
(26, 'asdas', 'asdasd@gmail.com', '+7 (903)345-45-54', 'Почта', 'Только вечер', 'asdasdasdas', 'Да', NULL),
(27, 'asdas', 'asdasd@gmail.com', '+7 (903)345-45-54', 'Почта', 'Только вечер', 'asdasdasdas', 'Да', NULL),
(28, 'mommy', 'momma@yandex.ru', '+7 (903)345-67-87', 'Почта', 'Только вечер', 'FFFFsdfsdf', 'Да', NULL),
(29, 'mommy', 'momma@yandex.ru', '+7 (903)345-67-87', 'Почта', 'Только вечер', 'FFFFsdfsdf', 'Да', NULL),
(30, 'asd', 'asdfg@gmail.com', '+7 (902)434-34-45', 'Телефон', 'Только вечер', 'Banana', 'Нет', NULL),
(31, 'Stepan', 'stenan345@gmail.com', '+7 (902)234-45-67', 'Почта', 'Только вечер', 'Stepn', 'Да', ''),
(32, 'hjkhgfh', 'fghfhhg@gmail.com', '+7 (903)344-56-89', 'Почта', 'Только вечер', 'I like', 'Да', NULL),
(33, 'Max', 'maximus@mail.ru', '+7 (903)345-56-56', 'Телефон', 'Круглосуточно', 'Dsadasds', 'Да', NULL),
(34, 'Marat', 'maratkrytoi@mail.ru', '+7 (917)634-34-56', 'Почта', 'Только вечер', 'maraaaaaaaaaaaaaat', 'Нет', 'uploads/1648398087.jpg'),
(35, 'Marat', 'maratkrytoi@mail.ru', '+7 (917)634-34-56', 'Почта', 'Только вечер', 'maraaaaaaaaaaaaaat', 'Нет', 'uploads/1648398293.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
