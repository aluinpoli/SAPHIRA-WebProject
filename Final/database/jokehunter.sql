-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Време на генериране: 
-- Версия на сървъра: 5.5.27
-- Версия на PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `jokehunter`
--

-- --------------------------------------------------------

--
-- Структура на таблица `jokes`
--

CREATE TABLE IF NOT EXISTS `jokes` (
  `joke_id` int(11) NOT NULL AUTO_INCREMENT,
  `joke_title` text NOT NULL,
  `joke_content` text NOT NULL,
  `joke_date` date NOT NULL,
  `joke_type` int(2) NOT NULL,
  PRIMARY KEY (`joke_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Ссхема на данните от таблица `jokes`
--

INSERT INTO `jokes` (`joke_id`, `joke_title`, `joke_content`, `joke_date`, `joke_type`) VALUES
(6, 'Повторението е майка на знанието или пък не?', 'imgs/comic.jpg', '2014-07-01', 1),
(7, 'Кой ли може да е?', 'Ранен преди обед, ден след мъчителният и обезкуражаващ за някой студентски изпит. На вратата на Софтуерния Университет се чука.\r\n- "Чук, чук, чук!"\r\nОтвътре се чува мъжки глас.\r\n- "Кой е?"\r\nСледва дълга и продължителна нотка на затишие. И точно в момента в който часовника на стената щеше да отмери пет минутното мълчание иззад вратата се чу:\r\n-"Java."\r\nПоследва мигновена реакция:\r\n-"Махай се, гад мръсна!"', '2014-07-01', 2),
(8, 'Момче или момиче', 'Програмирането е като сексът, една грешка и после цял живот поддръжка (издръжка).', '2014-07-01', 2),
(9, 'Да бъдеш или да не бъдеш...?', 'Целият ми животът изведнъж мина като на лента и единственото което успях да съзра бе затварящата скоба.', '2014-07-01', 2),
(10, 'Ами сега!', 'imgs/keyboard.png', '2014-07-01', 1),
(11, 'Преобразуване?!?', 'imgs/2014-07-01 11.27.44.jpg', '2014-07-01', 1);

-- --------------------------------------------------------

--
-- Структура на таблица `jokes_sphere`
--

CREATE TABLE IF NOT EXISTS `jokes_sphere` (
  `joke_id` int(2) NOT NULL,
  `joke_sphere` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Ссхема на данните от таблица `jokes_sphere`
--

INSERT INTO `jokes_sphere` (`joke_id`, `joke_sphere`) VALUES
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(7, 3),
(8, 1),
(8, 2),
(8, 3),
(8, 4),
(9, 1),
(10, 1),
(11, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
