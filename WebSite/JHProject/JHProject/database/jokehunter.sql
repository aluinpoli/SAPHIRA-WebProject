-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jokehunter`
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
  `joke_sphere` int(2) NOT NULL,
  PRIMARY KEY (`joke_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Схема на данните от таблица `jokes`
--

INSERT INTO `jokes` (`joke_id`, `joke_title`, `joke_content`, `joke_date`, `joke_type`, `joke_sphere`) VALUES
(1, 'Common Nakov`s joke', 'Изчезни бе гад мръсна', '2014-06-22', 2, 0),
(2, 'Common Nakov`s joke', 'Изчезни бе гад мръсна', '2014-06-13', 2, 0),
(3, 'My style', 'imgs/web-des.jpg', '2014-06-18', 1, 0),
(4, 'My donuts', 'imgs/donuts.jpg', '2014-03-04', 1, 0),
(5, 'Common Nakov`s joke', 'Изчезни бе гад мръсна', '2014-06-28', 2, 0),
(6, 'Your donuts', 'imgs/donuts.jpg', '2014-07-11', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
